@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>DSCR Calculator | Debt Service Coverage Ratio</title>
    <meta name="description" content="Free DSCR calculator: compute Debt Service Coverage Ratio per Schedule III &amp; ICAI norms, with bank covenant benchmarks and project finance views. CA tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/dscr-calculator/">
    <meta property="og:title" content="DSCR Calculator — Schedule III India FY 2025-26">
    <meta property="og:description" content="Compute DSCR per ICAI Schedule III Guidance Note. Bank covenant comparison (1.25 / 1.5 / 2.0), project finance DSCR, sample disclosure format. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/dscr-calculator">
    <meta property="og:image" content="/tools/og/dscr-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DSCR Calculator — Schedule III India FY 2025-26">
    <meta name="twitter:description" content="DSCR with bank covenant benchmarks (1.25 / 1.5 / 2.0), Schedule III disclosure format, project finance views. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/dscr-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "DSCR Calculator (Debt Service Coverage Ratio)",
      "description": "DSCR Calculator computes the Debt Service Coverage Ratio of an Indian company per Schedule III to the Companies Act, 2013 and the ICAI Guidance Note. The tool supports two modes: Schedule III mode (all interest, all principal, all lease payments) and Banking mode (long-term debt servicing only, used in bank loan covenants). Inputs include net profit after tax, depreciation and amortisation, interest expense, other non-cash expenses, principal repayments, and lease payments under Ind AS 116. Output includes the headline DSCR, earnings available for debt service, total debt service, color-coded leverage verdict against bank covenant benchmarks of 1.25 (standard), 1.5 (conservative) and 2.0 (strong), sector benchmark comparison across manufacturing, services, IT, project finance, real estate, NBFC and trading, year-over-year variance flagged against the 25 per cent Schedule III explanation threshold, sample Schedule III disclosure format with numerator and denominator definitions, project finance Average DSCR commentary, and SEBI LODR Regulation 34 (3) MDA disclosure guidance for listed entities.",
      "url": "/tools/dscr-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "DSCR Calculator", "item": "/tools/dscr-calculator"}
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
          "name": "What is the Debt Service Coverage Ratio (DSCR)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Debt Service Coverage Ratio is a profitability-based solvency metric that compares earnings available for debt service to scheduled debt servicing for the year. It tells lenders, auditors and management whether operating earnings can cover interest plus principal plus lease repayments due in the period. A DSCR above 1.0 means earnings exceed debt service; below 1.0 signals shortfall. Banks typically require DSCR above 1.25 as a loan covenant for term loans in India."
          }
        },
        {
          "@type": "Question",
          "name": "What is the formula for DSCR under Schedule III in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Per the ICAI Guidance Note on Schedule III to the Companies Act, 2013, DSCR equals Earnings Available for Debt Service divided by Debt Service. Numerator = Net Profit After Tax plus Non-cash Operating Expenses (mainly Depreciation and Amortisation) plus Interest Expense plus Other Adjustments such as loss on sale of fixed assets. Denominator = Interest plus Lease Payments plus Principal Repayments due during the year. Net Profit After Tax excludes other comprehensive income items."
          }
        },
        {
          "@type": "Question",
          "name": "Is DSCR disclosure mandatory in Indian financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Pursuant to MCA notification G.S.R. 207(E) dated 24 March 2021 amending Schedule III, every company under Division I, II and III must disclose eleven analytical ratios including DSCR in the notes to financial statements from FY 2021-22 onwards. The company must explain the items used in numerator and denominator, and provide a written explanation if the ratio changes by more than 25 per cent compared to the previous year. Statutory auditors verify both the calculation and the explanation."
          }
        },
        {
          "@type": "Question",
          "name": "What is considered a good DSCR ratio in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian banks and financial institutions typically require a minimum DSCR of 1.25 to 1.50 for new term loans. A DSCR between 1.5 and 2.0 is considered comfortable, while above 2.0 indicates strong serviceability. Below 1.25 raises lender concern and below 1.0 means operating earnings cannot cover debt service without external funding. Project finance lenders look for Average DSCR above 1.30 with a minimum period DSCR floor of 1.10. Sector context matters significantly."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Schedule III DSCR and Banking DSCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III DSCR uses all interest, all principal repayments and all lease payments in the denominator and the full earnings before interest and tax including non-operating items in the numerator. Banking DSCR is restricted to long-term debt servicing only, excluding short-term working capital interest from both sides. The two ratios can differ materially for companies with large cash credit utilisation. Always check whether your loan covenant references Schedule III DSCR or banking DSCR."
          }
        },
        {
          "@type": "Question",
          "name": "Should lease payments be included in DSCR calculation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, under the ICAI Guidance Note on Schedule III, lease payments are explicitly included in the denominator alongside interest and principal repayments. This treatment captures the cash outflow burden of operating and finance leases recognised under Ind AS 116. Excluding lease payments would understate the debt service obligation. For companies with material lease portfolios such as airlines, retail chains and logistics, lease inclusion materially changes DSCR compared to pre-Ind AS 116 calculations."
          }
        },
        {
          "@type": "Question",
          "name": "What is Average DSCR in project finance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Average DSCR in project finance is the simple arithmetic mean of period DSCRs over the entire loan tenor. Lenders typically require Average DSCR above 1.30 along with a minimum period DSCR floor of 1.10 to ensure the project can service debt even in weak years. The metric is computed during financial closure using a project finance model with detailed annual cash flow projections, sensitivity analysis under P50, P75 and P90 scenarios, and approved by the lead bank's project appraisal team."
          }
        },
        {
          "@type": "Question",
          "name": "How does DSCR differ from Interest Coverage Ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Interest Coverage Ratio measures EBIT divided by interest expense alone — it tests if operating profit can cover interest payments. DSCR is broader, including principal repayments and lease payments in the denominator, testing whether cash earnings can cover total debt service. A company can have strong interest coverage of 4.0 but weak DSCR of 1.1 if principal repayments are large in the year. Lenders use both ratios — interest coverage for early-warning monitoring, DSCR for serviceability."
          }
        },
        {
          "@type": "Question",
          "name": "Can DSCR be negative or below 1.0?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A DSCR below 1.0 means earnings available for debt service are insufficient to cover scheduled debt repayments — the company must draw on cash reserves, fresh debt or equity to bridge the gap. A negative DSCR occurs when earnings available for debt service is itself negative, indicating operating losses even after adding back depreciation and interest. Both signal financial stress, may trigger SMA classification by banks, covenant breach, and possible RBI restructuring discussions or NCLT proceedings under IBC."
          }
        },
        {
          "@type": "Question",
          "name": "Do listed companies need to disclose DSCR separately under SEBI rules?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Listed companies must disclose key financial ratios including DSCR in the Management Discussion and Analysis section of the annual report under SEBI LODR Regulation 34(3) read with Schedule V Part B. Companies with listed non-convertible debentures additionally disclose DSCR along with debt-equity ratio and asset cover ratio in half-yearly disclosures under Regulation 52, certified by the statutory auditor. The Schedule III note disclosure and SEBI MDA disclosure should be reconcilable to maintain consistency."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to explain a DSCR change of more than 25 per cent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Schedule III as amended on 24 March 2021 mandates that any change in the eleven prescribed ratios by more than 25 per cent versus the preceding year must carry a narrative explanation in the notes to accounts. Common DSCR explanations include balloon principal repayment falling due, decline in operating profit, fresh debt drawdown increasing interest cost, debt prepayment from IPO proceeds, or first-time application of Ind AS 116 with lease payments now included."
          }
        },
        {
          "@type": "Question",
          "name": "How is DSCR calculated for new project term loan applications?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For new term loans, banks compute Projected DSCR using forward-looking cash flow estimates over the loan tenor. The numerator is projected EBITDA less tax less working capital changes; the denominator is projected interest plus scheduled principal repayments per the loan amortisation schedule. Bank appraisal teams stress-test these projections under base case, downside and severe scenarios. The minimum acceptable Average DSCR is typically 1.30 to 1.50 depending on the project, sector and security cover offered to the lender."
          }
        },
        {
          "@type": "Question",
          "name": "Where on the financial statements do I find numbers for DSCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net Profit After Tax is the bottom line of the Statement of Profit and Loss. Depreciation and amortisation is disclosed above PBT as a separate line. Interest expense sits within finance costs in the P&L. Principal repayments come from the borrowings note plus the cash flow statement under financing activities. Lease payments are disclosed in the Ind AS 116 lease note. Auditors agree these figures during statutory audit before signing off the Schedule III disclosure."
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
        .gauge-track { position: relative; height: 28px; background: linear-gradient(to right, #FEE2E2 0%, #FEE2E2 25%, #FEF3C7 25%, #FEF3C7 50%, #DCE8F5 50%, #DCE8F5 75%, #BBF7D0 75%, #BBF7D0 100%); border-radius: 14px; overflow: visible; margin-bottom: 8px; }
        .gauge-marker { position: absolute; top: -6px; bottom: -6px; width: 4px; background: var(--primary-dark); border-radius: 2px; transform: translateX(-50%); transition: left 0.4s ease; box-shadow: 0 0 0 3px rgba(255,255,255,0.9); }
        .gauge-marker::after { content: ''; position: absolute; top: -6px; left: 50%; transform: translateX(-50%); width: 0; height: 0; border-left: 6px solid transparent; border-right: 6px solid transparent; border-top: 6px solid var(--primary-dark); }
        .gauge-labels { display: flex; justify-content: space-between; font-size: 10px; color: var(--text-muted); font-family: var(--font-mono); margin-top: 4px; }

        .covenant-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; margin: 14px 0 18px; }
        @media (max-width: 600px) { .covenant-grid { grid-template-columns: 1fr; } }
        .covenant-card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); padding: 14px 16px; text-align: center; transition: all 0.2s; }
        .covenant-card.pass { background: #DCE8F5; border-color: var(--success); }
        .covenant-card.fail { background: #FEE2E2; border-color: var(--danger); }
        .covenant-label { font-size: 11px; font-weight: 700; text-transform: uppercase; color: var(--text-muted); letter-spacing: 0.5px; margin-bottom: 4px; }
        .covenant-card.pass .covenant-label { color: #065F46; }
        .covenant-card.fail .covenant-label { color: #991B1B; }
        .covenant-threshold { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; }
        .covenant-status { font-size: 13px; font-weight: 700; }
        .covenant-card.pass .covenant-status { color: var(--success); }
        .covenant-card.fail .covenant-status { color: var(--danger); }

        .disclosure-block { background: var(--primary-dark); color: #E8EEF5; padding: 20px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.7; margin: 14px 0; overflow-x: auto; }
        .disclosure-block .dl-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 8px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .disclosure-block table { width: 100%; border-collapse: collapse; font-size: 12px; margin-top: 8px; }
        .disclosure-block th, .disclosure-block td { padding: 8px 6px; text-align: left; border-bottom: 1px solid rgba(224,242,241,0.2); }
        .disclosure-block th { color: var(--accent-light); font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px; }
        .disclosure-block td.num { text-align: right; }
        @media (max-width: 600px) { .disclosure-block { font-size: 11px; padding: 14px 16px; } .disclosure-block table { font-size: 10px; } }

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
        <a href="#bank-covenants">Bank Covenants</a>
        <a href="#interpretation">Interpretation</a>
        <a href="#vs-other-ratios">DSCR vs Others</a>
        <a href="#project-finance">Project Finance</a>
        <a href="#listed-disclosure">Listed Disclosure</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    DSCR Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>DSCR Calculator — <span>Schedule III &amp; Bank Covenant</span> Compliant for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20DSCR%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DSCR%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20DSCR%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This DSCR Calculator computes the Debt Service Coverage Ratio of an Indian company exactly as required by the <strong>ICAI Guidance Note on Schedule III</strong> and bank loan covenant frameworks. Two modes are supported — Schedule III (all interest, all principal, lease payments) and Banking (long-term debt servicing only). It produces the headline DSCR, earnings available for debt service, total debt service, color-coded verdict against three bank thresholds (1.25 / 1.5 / 2.0), sector benchmark, year-over-year variance flag against the 25 per cent Schedule III threshold, and a sample disclosure format ready for the notes to accounts.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Debt Service Coverage Ratio</h2>
            <p class="calc-intro">Enter figures from your audited financial statements (annual basis). All amounts in ₹ rupees. The two modes produce different ratios because they use different definitions — match the mode to your purpose.</p>
            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or refer to the formula in the section below.</div>
            </noscript>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>DSCR Mode</label>
                <div class="toggle-group" id="modeGroup" role="tablist" aria-label="DSCR mode">
                    <button type="button" class="toggle-btn active" data-value="schedule3" role="tab" aria-selected="true">Schedule III <small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">All interest + all principal + lease</small></button>
                    <button type="button" class="toggle-btn" data-value="banking" role="tab" aria-selected="false">Banking <small style="display:block;font-weight:400;font-size:11px;opacity:0.75;">LT debt servicing only</small></button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Schedule III mode aligns with the ICAI Guidance Note for statutory disclosure. Banking mode aligns with bank loan covenants.</span>
            </div>

            <div class="calc-section-title">Numerator — Earnings Available for Debt Service</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="pat">Net Profit After Tax (₹)</label>
                    <input type="text" id="pat" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Bottom line of P&amp;L. Excludes Other Comprehensive Income items.</span>
                </div>
                <div class="form-group">
                    <label for="depreciation">Depreciation &amp; Amortisation (₹)</label>
                    <input type="text" id="depreciation" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Non-cash charge. Add back to PAT for cash earnings.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="interestPL">Interest Expense — P&amp;L (₹)</label>
                    <input type="text" id="interestPL" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total finance cost from P&amp;L. Add back since interest is in denominator.</span>
                </div>
                <div class="form-group">
                    <label for="otherNonCash">Other Non-Cash Adjustments (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                    <input type="text" id="otherNonCash" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Loss on sale of FA, ECL provisions, impairments. Negative if gain.</span>
                </div>
            </div>

            <div class="calc-section-title">Denominator — Debt Service for the Year</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="interestPaid">Interest Payment for Year (₹)</label>
                    <input type="text" id="interestPaid" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper" id="interestHelper">All interest paid (Schedule III) or LT interest only (Banking).</span>
                </div>
                <div class="form-group">
                    <label for="principalPaid">Principal Repayment for Year (₹)</label>
                    <input type="text" id="principalPaid" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Annual scheduled principal installments on term debt.</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label for="leasePayments">Lease Payments — Ind AS 116 (₹) <span style="color:var(--text-muted);font-weight:400;">— Optional</span></label>
                <input type="text" id="leasePayments" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                <span class="helper">Total cash lease payments for the year. Included in denominator per ICAI Guidance Note.</span>
            </div>

            <div class="calc-section-title">Context — Optional</div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>Industry / Use Case</label>
                <div class="toggle-group" id="industryGroup" role="tablist" aria-label="Industry">
                    <button type="button" class="toggle-btn active" data-value="manufacturing" role="tab" aria-selected="true">Manufacturing</button>
                    <button type="button" class="toggle-btn" data-value="services" role="tab" aria-selected="false">Services</button>
                    <button type="button" class="toggle-btn" data-value="it" role="tab" aria-selected="false">IT / Tech</button>
                    <button type="button" class="toggle-btn" data-value="project" role="tab" aria-selected="false">Project Finance</button>
                    <button type="button" class="toggle-btn" data-value="realestate" role="tab" aria-selected="false">Real Estate</button>
                    <button type="button" class="toggle-btn" data-value="trading" role="tab" aria-selected="false">Trading</button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Used for sector benchmark comparison. Project finance shows Average DSCR commentary.</span>
            </div>

            <div class="form-group" style="margin-bottom: 8px;">
                <label for="prevYearDSCR">Previous Year DSCR (Optional)</label>
                <input type="text" id="prevYearDSCR" min="0" step="0.01" placeholder="0.00" inputmode="decimal" autocomplete="off">
                <span class="helper">Enter last year's ratio to flag the 25% Schedule III variance threshold.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate DSCR</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">Debt Service Coverage Ratio</div>
                    <div class="verdict-headline" id="verdictHeadline">DSCR = 0.00</div>
                    <div class="verdict-sub" id="verdictSub">Verdict</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Earnings Available</div>
                            <div class="verdict-grid-value" id="numeratorVal">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Total Debt Service</div>
                            <div class="verdict-grid-value" id="denominatorVal">₹0</div>
                        </div>
                    </div>
                </div>

                <div class="gauge-wrap">
                    <div class="basis-label" style="margin-bottom: 12px;">DSCR Gauge — Banking Comfort Zones</div>
                    <div class="gauge-track"><div class="gauge-marker" id="gaugeMarker" style="left: 0%;"></div></div>
                    <div class="gauge-labels">
                        <span>0.0 (Default)</span>
                        <span>1.0 (Breakeven)</span>
                        <span>2.0 (Comfortable)</span>
                        <span>3.0 (Strong)</span>
                        <span>4.0+ (Very Strong)</span>
                    </div>
                </div>

                <div class="basis-label" style="margin-bottom: 8px;">Bank Covenant Test — Pass / Fail at Each Threshold</div>
                <div class="covenant-grid" id="covenantGrid"></div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="benchmarkBanner"></div>
                <div class="info-banner" id="varianceBanner" style="display:none;"></div>
                <div class="info-banner info" id="projectFinanceBanner" style="display:none;"></div>

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
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — DSCR Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20DSCR%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DSCR%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20DSCR%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>


        <section class="content-section" id="how-to-use">
            <h2>How to Use This DSCR Calculator</h2>
            <p>The calculator follows the formula prescribed in the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> notification dated 24 March 2021, read with the ICAI Guidance Note on Schedule III to the Companies Act, 2013. To get an accurate result you need three sets of inputs: profit numbers from the P&amp;L, debt servicing numbers from the cash flow and lease note, and the choice of mode (Schedule III or Banking).</p>

            <h3>Step 1 — Pick the Right Mode</h3>
            <p>Schedule III mode includes all interest, all principal repayments and all lease payments — the comprehensive view used for statutory disclosure under the notes to accounts. Banking mode restricts the denominator to long-term debt servicing only, ignoring short-term working capital interest and any lease payments — closer to how bank loan covenants are typically defined. The two ratios will differ for any company with material short-term borrowings or operating lease portfolio.</p>

            <h3>Step 2 — Enter Numerator (Earnings Available for Debt Service)</h3>
            <p>Open your latest signed P&amp;L. Find Net Profit After Tax (the bottom line, after all taxes), Depreciation and Amortisation (a separate line item above PBT), and Total Finance Cost (the interest line). The calculator adds back depreciation and interest to PAT because both are non-cash from a debt-servicing perspective — depreciation is an accounting allocation, and interest is being added to the denominator separately. For greater accuracy, add other non-cash items like loss on sale of fixed assets, ECL provisions and impairment charges.</p>

            <h3>Step 3 — Enter Denominator (Debt Service)</h3>
            <p>Total interest paid for the year usually equals the finance cost line in the P&amp;L. Principal repayments are best agreed from the cash flow statement under financing activities — look for "repayment of long-term borrowings" or "repayment of short-term borrowings" lines. Lease payments come from the Ind AS 116 note schedule, specifically the maturity analysis showing total cash outflow for leases for the year. In Banking mode, exclude short-term borrowing interest and short-term debt repayments.</p>

            <h3>Step 4 — Pick Industry and Read the Verdict</h3>
            <p>Choose the industry that matches your business. The output panel shows your headline DSCR with a colour-coded verdict, separate covenant pass/fail badges at the three standard bank thresholds (1.25 / 1.5 / 2.0), a sector benchmark overlay, and — if you supplied last year's DSCR — a 25 per cent variance flag for Schedule III explanation purposes. For project finance use cases, an additional commentary block on Average DSCR appears.</p>
        </section>

        <section class="content-section" id="formula">
            <h2>DSCR Formula — ICAI Schedule III Method</h2>
            <p>The <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> Guidance Note on Schedule III to the Companies Act, 2013 prescribes the exact formula and component definitions. This is the formula auditors verify during statutory audit. Banks may use a slightly different definition in loan covenants — the calculator's Banking mode mimics the standard banking convention.</p>

            <div class="formula-box">
<span class="label">DSCR</span> = Earnings Available for Debt Service &divide; Debt Service<br>
<br>
<span class="label">Numerator</span> = Net Profit After Tax + Depreciation &amp; Amortisation + Interest + Other Non-cash Adjustments<br>
<br>
<span class="label">Denominator</span> = Interest + Lease Payments + Principal Repayments
            </div>

            <h3>What Goes into the Numerator</h3>
            <p>Net Profit After Tax is the reported "Profit / (Loss) for the Period" from the Statement of Profit and Loss. Importantly, this excludes Other Comprehensive Income items per the ICAI Guidance Note — only the P&amp;L portion of the bottom line counts. Depreciation and amortisation is added back because it is a non-cash allocation. Interest is added back because it is being included in the denominator — failing to add it back would double-count interest. Other non-cash adjustments include loss on sale of fixed assets, expected credit loss provisions, impairment charges and any other items that reduced PAT but did not consume cash during the year. Genuine cash items like working capital changes are NOT adjusted in this formula — that's what cash flow statement is for.</p>

            <h3>What Goes into the Denominator</h3>
            <p>Total interest paid for the year is the cash interest outflow, generally close to the P&amp;L finance cost. Principal repayment is the scheduled installment for the year on long-term borrowings — accessible from the loan amortisation schedule or note to accounts on borrowings. Lease payments cover both the principal and interest portions of cash lease outflows under Ind AS 116, recognised separately from term loan servicing. The ICAI Guidance Note explicitly states that "Debt Service = Interest + Lease Payments + Principal Repayments", making lease inclusion mandatory for the Schedule III ratio.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> If your loan agreement defines DSCR using "EBITDA" instead of PAT plus add-backs, the answers will differ. EBITDA-based DSCR is typically slightly lower than the ICAI formula because EBITDA excludes other income that flows into PAT. Always confirm which definition your covenant uses before disclosing to the bank.</p>
            </div>

            <h3>Worked Example with Numbers</h3>
            <p>A mid-sized Indian company reports the following extracts (₹ in lakhs):</p>
            <table class="rate-table">
                <thead><tr><th>Item</th><th>Amount (₹ Lakhs)</th><th>Treatment</th></tr></thead>
                <tbody>
                    <tr><td>Net Profit After Tax</td><td>500</td><td>Numerator base</td></tr>
                    <tr><td>Depreciation &amp; amortisation</td><td>200</td><td>Add back to numerator</td></tr>
                    <tr><td>Interest expense (P&amp;L)</td><td>180</td><td>Add back to numerator</td></tr>
                    <tr><td>Loss on sale of FA (one-off)</td><td>20</td><td>Add back to numerator</td></tr>
                    <tr><td>Interest paid (cash)</td><td>180</td><td>Denominator</td></tr>
                    <tr><td>Principal repayment (LT)</td><td>300</td><td>Denominator</td></tr>
                    <tr><td>Lease payments (Ind AS 116)</td><td>120</td><td>Denominator</td></tr>
                    <tr><td><strong>Earnings Available for Debt Service</strong></td><td><strong>900</strong></td><td>500 + 200 + 180 + 20</td></tr>
                    <tr><td><strong>Total Debt Service</strong></td><td><strong>600</strong></td><td>180 + 300 + 120</td></tr>
                    <tr><td><strong>DSCR</strong></td><td><strong>1.50</strong></td><td>900 ÷ 600</td></tr>
                </tbody>
            </table>
            <p>A DSCR of 1.50 sits in the comfortable zone — the company generates ₹1.50 of cash earnings for every ₹1 of scheduled debt service. The same company would report a different DSCR in Banking mode, because lease payments and any short-term debt servicing would be excluded from both sides of the ratio.</p>
        </section>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III Disclosure — Mandatory Since FY 2021-22</h2>
            <p>The <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> Schedule III was amended via MCA notification G.S.R. 207(E) dated 24 March 2021, effective from FY 2021-22. The amendment introduced eleven mandatory analytical ratios in the notes to accounts of every company falling under Division I, Division II and Division III of Schedule III. The DSCR is among the eleven, alongside Current Ratio, Debt-Equity Ratio, Return on Equity, inventory and receivables turnover ratios, net profit ratio, return on capital employed and return on investment.</p>

            <h3>Sample Disclosure Format Recommended by ICAI</h3>
            <p>The ICAI Guidance Note recommends a tabular format with the following columns: Ratio Name, Numerator, Denominator, Current Period, Previous Period, % Variance, Reason for Variance (if &gt;25%). The numerator and denominator must be defined in the note narrative — there is no prescribed master definition, so entities must articulate their choices on lease inclusion and other judgement areas.</p>

            <table class="rate-table">
                <thead><tr><th>Field</th><th>Content</th></tr></thead>
                <tbody>
                    <tr><td><strong>Ratio Name</strong></td><td>Debt Service Coverage Ratio</td></tr>
                    <tr><td><strong>Numerator</strong></td><td>Earnings available for debt service = Net Profit After Tax + Non-cash Operating Expenses (D&amp;A) + Interest + Other Adjustments</td></tr>
                    <tr><td><strong>Denominator</strong></td><td>Debt Service = Interest + Lease Payments + Principal Repayments</td></tr>
                    <tr><td><strong>Current / Previous Year</strong></td><td>Computed values for both years</td></tr>
                    <tr><td><strong>% Variance</strong></td><td>(Current − Previous) ÷ Previous, expressed in %</td></tr>
                    <tr><td><strong>Reason</strong></td><td>Mandatory if variance &gt; 25 per cent</td></tr>
                </tbody>
            </table>

            <h3>The 25% Variance Explanation Rule</h3>
            <p>If DSCR changes by more than 25% compared to the preceding year, the company must provide a written explanation in the notes to accounts. Common DSCR variance explanations include: balloon principal repayment falling due in a specific year, decline in operating profit, fresh debt drawdown adding to interest cost, debt prepayment from IPO or rights issue proceeds, first-time application of Ind AS 116 increasing the lease component, and one-off restructuring or settlement payments.</p>

            <div class="callout warn">
                <p><strong>Note:</strong> The variance is computed on the ratio itself, not on absolute earnings or debt service. A DSCR moving from 1.5 to 1.1 is a 27% drop requiring explanation — even if the underlying numbers moved less. Auditors expect the explanation to reconcile to specific P&amp;L and balance sheet movements.</p>
            </div>

            <h3>NBFCs and Banks — Different Disclosure</h3>
            <p>NBFCs registered with the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a> and listed under Division III of Schedule III follow a different ratio set — Capital to Risk-weighted Assets Ratio (CRAR), Tier I CRAR, Tier II CRAR and Liquidity Coverage Ratio replace the standard DSCR. Banks under Basel III norms similarly use capital adequacy and liquidity coverage as their primary regulatory metrics. DSCR remains useful for these entities at the borrower level when they evaluate term loans extended to corporate clients.</p>
        </section>

        <section class="content-section" id="bank-covenants">
            <h2>Bank Covenant Benchmarks for DSCR in India</h2>
            <p>Indian banks and financial institutions use DSCR as a primary covenant in term loan documentation. The standard thresholds reflect the lender's risk tolerance and the borrower's sector profile. A covenant breach typically triggers an event-of-default clause, accelerating repayment or imposing higher interest spreads.</p>

            <table class="rate-table">
                <thead><tr><th>DSCR Threshold</th><th>Bank Treatment</th><th>Typical Use Case</th></tr></thead>
                <tbody>
                    <tr><td><strong>Below 1.0</strong></td><td>Default / SMA classification likely</td><td>Stress / NPA trajectory</td></tr>
                    <tr><td><strong>1.0 to 1.25</strong></td><td>Marginal — additional collateral or guarantee sought</td><td>Weak borrower, restrictive terms</td></tr>
                    <tr><td><strong>1.25 to 1.5</strong></td><td>Standard PSU and private bank covenant floor</td><td>Most term loans for mid-corporates</td></tr>
                    <tr><td><strong>1.5 to 2.0</strong></td><td>Conservative — preferred by debenture trustees, infra lenders</td><td>Bond issuance, project finance</td></tr>
                    <tr><td><strong>2.0 and above</strong></td><td>Strong — qualifies for prime interest rates</td><td>Investment-grade borrowers, multilateral lenders</td></tr>
                </tbody>
            </table>

            <h3>Sector-Wise DSCR Expectations</h3>
            <table class="rate-table">
                <thead><tr><th>Industry</th><th>Typical DSCR Band</th><th>Rationale</th></tr></thead>
                <tbody>
                    <tr><td><strong>IT / Software</strong></td><td>3.0+ (often debt-free)</td><td>Asset-light, high cash conversion. Tier-1 IT firms have minimal debt to service.</td></tr>
                    <tr><td><strong>Services / Professional</strong></td><td>1.5 – 3.0</td><td>Working-capital led; modest term debt for offices.</td></tr>
                    <tr><td><strong>Trading / Distribution</strong></td><td>1.25 – 2.0</td><td>Margins thin but turnover high; CC-driven.</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>1.25 – 2.0</td><td>Capex cycle drives variability; healthy at upper band.</td></tr>
                    <tr><td><strong>Real Estate</strong></td><td>1.10 – 1.50</td><td>Lower band acceptable owing to project escrow structures.</td></tr>
                    <tr><td><strong>Project Finance / Infra</strong></td><td>Average DSCR 1.30+, Min 1.10</td><td>Stress-tested via P50/P90 scenarios at financial closure.</td></tr>
                </tbody>
            </table>

            <div class="callout">
                <p><strong>CA Tip:</strong> When negotiating loan covenants, push for "Average DSCR over the loan tenor" rather than "DSCR in any single year". Single-year covenants get tripped by balloon repayments, working capital cycles, or one-off events. Average DSCR smooths these out and is more reflective of true serviceability.</p>
            </div>
        </section>

        <section class="content-section" id="interpretation">
            <h2>How to Interpret Your DSCR</h2>
            <p>The ratio is a single number that conceals timing and quality differences. Read alongside trend, sector context, and other coverage metrics for a balanced view.</p>

            <h3>DSCR Below 1.0 — Critical Shortfall</h3>
            <p>Operating earnings cannot cover scheduled debt servicing — the company must use cash reserves, fresh debt or equity infusion to bridge the gap. Below 1.0 typically triggers Special Mention Account (SMA) classification by the bank, covenant breach, default risk, and potentially RBI restructuring discussions or admission to NCLT under <a href="https://ibbi.gov.in/" target="_blank" rel="noopener">IBBI</a> jurisdiction. Engagement with a turnaround CA team is urgent.</p>

            <h3>DSCR Between 1.0 and 1.25 — Weak / Marginal</h3>
            <p>Earnings barely cover debt service with no cushion. Any operating slip — working capital stress, one-off expense, monsoon failure — pushes the ratio below 1.0. Lenders watch closely and may impose tighter monitoring, additional security or higher interest spread. Common in cyclical sectors at the trough of the cycle. Equity infusion or debt refinancing should be on the table.</p>

            <h3>DSCR Between 1.25 and 1.5 — Acceptable / Standard</h3>
            <p>Most Indian PSU and private bank term loans are sized to a target DSCR in this band. The borrower has reasonable buffer for operating volatility but limited room for debt-funded growth. Covenants typically set the floor at 1.25 — a single-year drop below this triggers covenant action. Maintain DSCR above 1.5 to avoid covenant stress.</p>

            <h3>DSCR Between 1.5 and 2.0 — Strong / Comfortable</h3>
            <p>Healthy serviceability with material cushion against stress scenarios. Companies in this band qualify for incremental term loans on competitive pricing. Debenture trustees and bond rating agencies look favourably. The buffer absorbs working-capital adjustments, one-off expenses, sector cycle troughs, and sub-target operating performance.</p>

            <h3>DSCR Above 2.0 — Very Strong</h3>
            <p>The company generates 2x or more of scheduled debt service. Typical of cash-rich consumer goods companies, top-tier IT services and pharma firms with lean capital structures. Lenders will compete for the relationship; bond issuances qualify for AAA / AA+ ratings. The risk to monitor is debt under-utilisation — extremely high DSCR with low D/E ratio may signal that the company is leaving the debt tax-shield benefit unused.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Read DSCR with three companions for a complete leverage view — Interest Coverage Ratio (EBIT ÷ Interest), Debt-to-Equity Ratio, and Cash Flow from Operations to Total Debt. A high DSCR with weak ICR signals disproportionate principal repayments; strong DSCR with weak operating cash flow signals working-capital deterioration.</p>
            </div>
        </section>


        <div class="body-cta">
            <h3>Need Help with Schedule III Disclosure or Bank Loan Covenants?</h3>
            <p>Patron Accounting LLP supports CFO offices with Schedule III ratio disclosure preparation, bank loan covenant compliance reporting, project finance DSCR modelling and statutory audit defence — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20DSCR%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DSCR%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20DSCR%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="vs-other-ratios">
            <h2>DSCR vs Other Coverage Ratios</h2>
            <p>DSCR is one of several "coverage" metrics used by lenders, rating agencies and management to assess debt serviceability. Each captures a slightly different angle — using them together gives a more nuanced picture than any single ratio.</p>

            <h3>Interest Coverage Ratio (ICR)</h3>
            <p>ICR equals EBIT divided by Interest Expense. It tests whether operating profit can cover interest payments before considering principal. A company can have strong ICR of 4.0 but weak DSCR of 1.1 if scheduled principal repayments are large. ICR is favoured for early-warning monitoring; DSCR is favoured for serviceability analysis. ICR is also one of the eleven Schedule III ratios but is computed differently — Schedule III prescribes Earnings Available for Debt Service ÷ Interest Expense.</p>

            <h3>Fixed Charge Coverage Ratio (FCCR)</h3>
            <p>FCCR is broader than DSCR — it adds rent, lease and other fixed charges to interest in the denominator. FCCR = (EBIT + Lease Payments) ÷ (Interest + Lease Payments + Principal). Used heavily in retail, hospitality and consumer-facing businesses where lease commitments are large relative to debt. Post-Ind AS 116, the difference between FCCR and Schedule III DSCR has narrowed substantially because lease obligations are now part of both ratios.</p>

            <h3>Debt to EBITDA</h3>
            <p>Total Debt divided by trailing twelve-month EBITDA. Measures how many years of operating profit it would take to repay all debt at current run-rate. Lender covenants commonly cap this at 3.0 to 4.0 for mid-corporates. Unlike DSCR, this ratio focuses on total debt outstanding rather than annual servicing — useful for assessing structural leverage capacity.</p>

            <h3>Cash Flow from Operations to Debt</h3>
            <p>Operating Cash Flow divided by Total Debt. Removes accrual accounting effects and focuses purely on cash generation. Some lenders prefer this metric over DSCR because operating cash flow is harder to manipulate than reported PAT. Aim for above 0.20 (5-year payback) for non-cyclical businesses.</p>

            <h3>Quick Comparison Matrix</h3>
            <table class="rate-table">
                <thead><tr><th>Ratio</th><th>Tests</th><th>Typical Threshold</th></tr></thead>
                <tbody>
                    <tr><td><strong>DSCR</strong></td><td>Total debt servicing capacity</td><td>1.25 – 1.5+</td></tr>
                    <tr><td><strong>Interest Coverage</strong></td><td>Interest serviceability</td><td>3.0 – 5.0+</td></tr>
                    <tr><td><strong>FCCR</strong></td><td>All fixed charge servicing</td><td>1.25 – 2.0</td></tr>
                    <tr><td><strong>Debt / EBITDA</strong></td><td>Total leverage capacity</td><td>≤ 3.0 – 4.0</td></tr>
                    <tr><td><strong>OCF / Debt</strong></td><td>Cash repayment capacity</td><td>≥ 0.20</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="project-finance">
            <h2>Project Finance DSCR — Average DSCR and Period DSCR</h2>
            <p>For greenfield infrastructure projects — power, roads, ports, renewable energy, real estate — DSCR is computed prospectively over the entire loan tenor as part of financial closure. Two distinct metrics are used: Period DSCR (year-by-year) and Average DSCR (mean across the tenor). Lenders set covenant floors on both.</p>

            <h3>Period DSCR vs Average DSCR</h3>
            <p>Period DSCR is computed for each financial year independently — operating cash flow for the year divided by debt service for the year. Average DSCR is the simple arithmetic mean of all period DSCRs across the loan tenor. Average DSCR smooths out year-on-year volatility from balloon payments, ramp-up periods and seasonal variations, while Period DSCR exposes specific stress years where cash flow may dip.</p>

            <h3>Standard Covenant Levels for Indian Project Finance</h3>
            <table class="rate-table">
                <thead><tr><th>Covenant Type</th><th>Typical Floor</th><th>Sector Variation</th></tr></thead>
                <tbody>
                    <tr><td>Average DSCR (Base Case)</td><td>1.30 – 1.50</td><td>1.20 for state-backed power, 1.50+ for merchant power</td></tr>
                    <tr><td>Minimum Period DSCR</td><td>1.05 – 1.10</td><td>Floor in any single year of the tenor</td></tr>
                    <tr><td>Average DSCR (P90 Stress Case)</td><td>1.05 – 1.10</td><td>Tested in 90th-percentile downside scenario</td></tr>
                    <tr><td>Debt Sizing</td><td>Sized to Average DSCR ≥ 1.30</td><td>Limits total debt to project cash flow capacity</td></tr>
                </tbody>
            </table>

            <h3>P50, P75 and P90 Scenarios</h3>
            <p>Renewable energy and project finance lenders use probability-of-exceedance (P50, P75, P90) scenarios for revenue forecasting. P50 means there is a 50 per cent probability the actual outcome will exceed the forecast — the base case. P90 means a 90 per cent probability — a conservative downside. Average DSCR is computed at each scenario to test the project's resilience. Many Indian renewable energy lenders require Average DSCR above 1.30 at P90.</p>

            <h3>Cash Sweep and DSRA</h3>
            <p>Project finance documentation typically includes a Debt Service Reserve Account (DSRA) holding 2-6 months of debt service in escrow, plus cash sweep clauses that mandate excess cash be applied to debt prepayment when DSCR falls below covenant. These mechanisms protect lenders against period-DSCR volatility without forcing default at every covenant breach. Borrowers should model cash sweep impact in their financial model before signing the loan agreement.</p>
        </section>

        <section class="content-section" id="listed-disclosure">
            <h2>SEBI LODR Disclosure for Listed Entities</h2>
            <p>Listed entities have additional DSCR disclosure obligations beyond Schedule III. Under <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> (Listing Obligations and Disclosure Requirements) Regulations, 2015, listed equity entities must disclose key financial ratios in the Management Discussion and Analysis section of the annual report under Regulation 34(3) read with Schedule V Part B(1)(I). Listed debt entities follow Regulation 52 with half-yearly disclosure cadence.</p>

            <h3>How the Two Disclosures Connect</h3>
            <p>The Schedule III note disclosure and the SEBI MDA disclosure must reconcile. Best practice is to use identical numerator-denominator definitions in both places, with cross-references in the annual report. Companies typically prepare a master schedule of ratios at year-end with auditor sign-off, then use that schedule as the source for Schedule III notes, MDA, investor presentations and earnings call commentary. Inconsistencies draw stock exchange queries and analyst skepticism.</p>

            <h3>Listed Debt Entities — Regulation 52 Half-Yearly Cadence</h3>
            <p>Companies with listed non-convertible debentures or commercial paper must disclose DSCR alongside debt-equity ratio, asset cover ratio and outstanding redeemable preference shares in half-yearly disclosures under SEBI LODR Regulation 52. The disclosure is certified by the statutory auditor or practising company secretary, providing third-party assurance to debenture trustees. Half-yearly DSCR is computed using six months of earnings annualised against six months of debt servicing.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> If your company is on the path to a public issue, listing or debenture issuance, start tracking DSCR at quarterly intervals at least four quarters before going to market. Trend analysis by SEBI and merchant bankers during DRHP review picks up unexplained DSCR volatility quickly and triggers further questions on the offer document.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About DSCR</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the Debt Service Coverage Ratio (DSCR)?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Debt Service Coverage Ratio is a profitability-based solvency metric that compares earnings available for debt service to scheduled debt servicing for the year. It tells lenders, auditors and management whether operating earnings can cover interest plus principal plus lease repayments due in the period. A DSCR above 1.0 means earnings exceed debt service; below 1.0 signals shortfall. Banks typically require DSCR above 1.25 as a loan covenant for term loans in India.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the formula for DSCR under Schedule III in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Per the ICAI Guidance Note on Schedule III to the Companies Act, 2013, DSCR equals Earnings Available for Debt Service divided by Debt Service. Numerator = Net Profit After Tax plus Non-cash Operating Expenses (mainly Depreciation and Amortisation) plus Interest Expense plus Other Adjustments such as loss on sale of fixed assets. Denominator = Interest plus Lease Payments plus Principal Repayments due during the year. Net Profit After Tax excludes other comprehensive income items.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is DSCR disclosure mandatory in Indian financial statements?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Pursuant to MCA notification G.S.R. 207(E) dated 24 March 2021 amending Schedule III, every company under Division I, II and III must disclose eleven analytical ratios including DSCR in the notes to financial statements from FY 2021-22 onwards. The company must explain the items used in numerator and denominator, and provide a written explanation if the ratio changes by more than 25 per cent compared to the previous year. Statutory auditors verify both the calculation and the explanation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is considered a good DSCR ratio in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Indian banks and financial institutions typically require a minimum DSCR of 1.25 to 1.50 for new term loans. A DSCR between 1.5 and 2.0 is considered comfortable, while above 2.0 indicates strong serviceability. Below 1.25 raises lender concern and below 1.0 means operating earnings cannot cover debt service without external funding. Project finance lenders look for Average DSCR above 1.30 with a minimum period DSCR floor of 1.10. Sector context matters significantly.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between Schedule III DSCR and Banking DSCR?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule III DSCR uses all interest, all principal repayments and all lease payments in the denominator and the full earnings before interest and tax including non-operating items in the numerator. Banking DSCR is restricted to long-term debt servicing only, excluding short-term working capital interest from both sides. The two ratios can differ materially for companies with large cash credit utilisation. Always check whether your loan covenant references Schedule III DSCR or banking DSCR.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should lease payments be included in DSCR calculation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, under the ICAI Guidance Note on Schedule III, lease payments are explicitly included in the denominator alongside interest and principal repayments. This treatment captures the cash outflow burden of operating and finance leases recognised under Ind AS 116. Excluding lease payments would understate the debt service obligation. For companies with material lease portfolios such as airlines, retail chains and logistics, lease inclusion materially changes DSCR compared to pre-Ind AS 116 calculations.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Average DSCR in project finance?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Average DSCR in project finance is the simple arithmetic mean of period DSCRs over the entire loan tenor. Lenders typically require Average DSCR above 1.30 along with a minimum period DSCR floor of 1.10 to ensure the project can service debt even in weak years. The metric is computed during financial closure using a project finance model with detailed annual cash flow projections, sensitivity analysis under P50, P75 and P90 scenarios, and approved by the lead bank's project appraisal team.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does DSCR differ from Interest Coverage Ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Interest Coverage Ratio measures EBIT divided by interest expense alone — it tests if operating profit can cover interest payments. DSCR is broader, including principal repayments and lease payments in the denominator, testing whether cash earnings can cover total debt service. A company can have strong interest coverage of 4.0 but weak DSCR of 1.1 if principal repayments are large in the year. Lenders use both ratios — interest coverage for early-warning monitoring, DSCR for serviceability.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can DSCR be negative or below 1.0?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. A DSCR below 1.0 means earnings available for debt service are insufficient to cover scheduled debt repayments — the company must draw on cash reserves, fresh debt or equity to bridge the gap. A negative DSCR occurs when earnings available for debt service is itself negative, indicating operating losses even after adding back depreciation and interest. Both signal financial stress, may trigger SMA classification by banks, covenant breach, and possible RBI restructuring discussions or NCLT proceedings under IBC.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Do listed companies need to disclose DSCR separately under SEBI rules?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Listed companies must disclose key financial ratios including DSCR in the Management Discussion and Analysis section of the annual report under SEBI LODR Regulation 34(3) read with Schedule V Part B. Companies with listed non-convertible debentures additionally disclose DSCR along with debt-equity ratio and asset cover ratio in half-yearly disclosures under Regulation 52, certified by the statutory auditor. The Schedule III note disclosure and SEBI MDA disclosure should be reconcilable to maintain consistency.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Do I need to explain a DSCR change of more than 25 per cent?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Schedule III amended via MCA notification G.S.R. 207(E) dated 24 March 2021 mandates that any change in the eleven prescribed ratios by more than 25 per cent compared to the preceding year must be accompanied by a narrative explanation in the notes to accounts. Common DSCR explanations include: balloon principal repayment falling due, decline in operating profit, fresh debt drawdown increasing interest cost, debt prepayment from IPO proceeds, or first-time application of Ind AS 116 with lease payments now included.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is DSCR calculated for new project term loan applications?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For new term loans, banks compute Projected DSCR using forward-looking cash flow estimates over the loan tenor. The numerator is projected EBITDA less tax less working capital changes; the denominator is projected interest plus scheduled principal repayments per the loan amortisation schedule. Bank appraisal teams stress-test these projections under base case, downside and severe scenarios. The minimum acceptable Average DSCR is typically 1.30 to 1.50 depending on the project, sector and security cover offered to the lender.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Where on the financial statements do I find numbers for DSCR?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Net Profit After Tax is the bottom line of the Statement of Profit and Loss. Depreciation and amortisation is disclosed as a separate line item above PBT. Interest expense (finance cost) sits in finance costs in the P&amp;L. Principal repayments come from the borrowings note schedule plus the cash flow statement under financing activities. Lease payments are disclosed in the Ind AS 116 lease note schedule. Auditors typically agree these figures during statutory audit before signing off the Schedule III ratio disclosure.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need DSCR Compliance Support?</h3>
            <p>Get CA-led Schedule III ratio review with disclosure-ready working papers, bank covenant compliance reporting and project finance DSCR modelling — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20DSCR%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=DSCR%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20DSCR%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting &amp; Bookkeeping<span class="arrow">→</span></a>
            <a href="/secretarial-audit" class="sidebar-link">Secretarial Audit<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt to Equity Calculator<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Accounting (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/business-loan-emi-calculator" class="sidebar-link">Business Loan EMI<span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator<span class="arrow">→</span></a>
            <a href="/tools/cash-flow-calculator" class="sidebar-link">Cash Flow Statement<span class="arrow">→</span></a>
            <a href="/tools/break-even-calculator" class="sidebar-link">Break-Even Analysis<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements<span class="arrow">→</span></a>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Tax Scrutiny &amp; Assessment<span class="arrow">→</span></a>
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
    function getActive(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    function updateInterestHelper() {
        const mode = getActive('modeGroup');
        const helper = document.getElementById('interestHelper');
        if (helper) {
            helper.textContent = mode === 'banking'
                ? 'LT interest only (Banking mode). Exclude short-term/CC interest.'
                : 'All interest paid (Schedule III mode). Includes ST + LT.';
        }
    }
    setupToggleGroup('modeGroup', updateInterestHelper);
    setupToggleGroup('industryGroup');

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

    const benchmarks = {
        manufacturing: { low: 1.25, high: 2.0, label: 'Manufacturing', note: 'Indian manufacturing peers typically run DSCR between 1.25 and 2.0; healthy at the upper end of capex cycle.' },
        services: { low: 1.5, high: 3.0, label: 'Services / Professional', note: 'Indian service-sector peers typically run DSCR between 1.5 and 3.0 owing to lighter debt loads.' },
        it: { low: 3.0, high: 10.0, label: 'IT / Software / Tech', note: 'Indian IT majors typically run DSCR above 3.0; tier-1 firms often have minimal debt to service.' },
        project: { low: 1.10, high: 1.50, label: 'Project Finance', note: 'Project finance lenders look for Average DSCR of 1.30 with minimum period DSCR of 1.10.' },
        realestate: { low: 1.10, high: 1.50, label: 'Real Estate', note: 'Indian real estate peers run DSCR 1.10 to 1.50; project escrow structures support lower covenant.' },
        trading: { low: 1.25, high: 2.0, label: 'Trading / Distribution', note: 'Indian trading and distribution peers typically run DSCR between 1.25 and 2.0.' }
    };

    function readInputs() {
        return {
            mode: getActive('modeGroup') || 'schedule3',
            pat: num('pat'),
            dep: num('depreciation'),
            intPL: num('interestPL'),
            otherNC: num('otherNonCash'),
            intPaid: num('interestPaid'),
            principalPaid: num('principalPaid'),
            leasePay: num('leasePayments'),
            industry: getActive('industryGroup') || 'manufacturing',
            prevDSCR: num('prevYearDSCR')
        };
    }

    function validate(inp) {
        const num = inp.pat + inp.dep + inp.intPL + inp.otherNC;
        const den = inp.intPaid + inp.principalPaid + (inp.mode === 'schedule3' ? inp.leasePay : 0);
        if (den <= 0) return 'Please enter at least one debt service component (interest, principal or lease).';
        if (num === 0 && inp.pat === 0 && inp.dep === 0 && inp.intPL === 0) {
            return 'Please enter the numerator components (PAT, Depreciation, Interest).';
        }
        return null;
    }

    function compute(inp) {
        const numerator = inp.pat + inp.dep + inp.intPL + inp.otherNC;
        const leaseInDen = inp.mode === 'schedule3' ? inp.leasePay : 0;
        const denominator = inp.intPaid + inp.principalPaid + leaseInDen;
        const dscr = denominator > 0 ? numerator / denominator : NaN;

        let yoyVar = null, exceeds25 = false;
        if (inp.prevDSCR > 0 && isFinite(dscr)) {
            yoyVar = ((dscr - inp.prevDSCR) / inp.prevDSCR) * 100;
            exceeds25 = Math.abs(yoyVar) > 25;
        }
        return { numerator, denominator, leaseInDen, dscr, yoyVar, exceeds25 };
    }

    function getVerdict(d) {
        if (!isFinite(d) || d <= 0) return { headline: 'Negative Earnings — Critical Stress', sub: 'Earnings available for debt service is negative or zero. Operating losses; urgent restructuring needed.', cls: 'red' };
        if (d < 1.0) return { headline: 'Critical Shortfall', sub: 'Earnings cannot cover debt service. Default risk; SMA classification likely.', cls: 'red' };
        if (d < 1.25) return { headline: 'Weak / Marginal', sub: 'No cushion against operating volatility. Lender concern; refinancing recommended.', cls: 'amber' };
        if (d < 1.50) return { headline: 'Acceptable / Standard', sub: 'Meets typical bank covenant floor. Limited room for debt-funded growth.', cls: 'amber' };
        if (d < 2.00) return { headline: 'Strong / Comfortable', sub: 'Healthy serviceability with material cushion. Qualifies for competitive pricing.', cls: 'verdict' };
        return { headline: 'Very Strong', sub: 'Strong cash generation versus debt service. Top-tier rating territory.', cls: 'verdict' };
    }

    function buildCovenantGrid(d) {
        const tests = [
            { label: 'Standard (1.25)', threshold: 1.25 },
            { label: 'Conservative (1.50)', threshold: 1.50 },
            { label: 'Strong (2.00)', threshold: 2.00 }
        ];
        return tests.map(t => {
            const pass = isFinite(d) && d >= t.threshold;
            const status = pass ? '✓ Pass' : '✗ Fail';
            const cls = pass ? 'pass' : 'fail';
            return '<div class="covenant-card ' + cls + '"><div class="covenant-label">' + t.label + '</div><div class="covenant-threshold">DSCR ≥ ' + t.threshold.toFixed(2) + '</div><div class="covenant-status">' + status + '</div></div>';
        }).join('');
    }

    function getBenchmarkBanner(d, industry) {
        if (!isFinite(d) || d <= 0) return { cls: 'danger', html: '<strong>⚠ Negative or zero earnings.</strong> Sector benchmark comparison is not meaningful at this level. Focus on operational turnaround.' };
        const b = benchmarks[industry];
        if (!b) return null;
        let cls, msg;
        if (d >= b.low && d <= b.high) {
            cls = 'success';
            msg = '<strong>✓ In line with industry.</strong> Your DSCR of <strong>' + fmtRatio(d) + '</strong> sits within the typical ' + b.label + ' band of ' + b.low.toFixed(2) + ' to ' + b.high.toFixed(2) + '. ' + b.note;
        } else if (d < b.low) {
            cls = 'warn';
            msg = '<strong>⚠ Below industry band.</strong> Your DSCR of <strong>' + fmtRatio(d) + '</strong> is below the typical ' + b.label + ' band of ' + b.low.toFixed(2) + ' to ' + b.high.toFixed(2) + '. Examine debt servicing schedule, covenant headroom and operating performance trajectory.';
        } else {
            cls = 'info';
            msg = '<strong>✓ Above industry band.</strong> Your DSCR of <strong>' + fmtRatio(d) + '</strong> exceeds the typical ' + b.label + ' band of ' + b.low.toFixed(2) + ' to ' + b.high.toFixed(2) + '. Consider whether debt tax-shield benefit is being efficiently used.';
        }
        return { cls: cls, html: msg };
    }

    function buildSummaryGrid(r, inp) {
        const cards = [];
        cards.push({ label: 'Net Profit After Tax', value: fmtINR(inp.pat) });
        cards.push({ label: 'Depreciation Add-back', value: fmtINR(inp.dep) });
        cards.push({ label: 'Interest Add-back', value: fmtINR(inp.intPL) });
        cards.push({ label: 'Interest Paid', value: fmtINR(inp.intPaid) });
        cards.push({ label: 'Principal Repayment', value: fmtINR(inp.principalPaid) });
        if (inp.mode === 'schedule3' && inp.leasePay > 0) {
            cards.push({ label: 'Lease Payments (Incl.)', value: fmtINR(inp.leasePay), highlight: true });
        } else if (inp.mode === 'banking' && inp.leasePay > 0) {
            cards.push({ label: 'Lease Payments (Excl.)', value: fmtINR(inp.leasePay) });
        } else {
            cards.push({ label: 'Other Non-Cash', value: fmtINR(inp.otherNC) });
        }
        return cards.map(c => '<div class="summary-card' + (c.highlight ? ' highlight' : '') + '"><div class="summary-label">' + c.label + '</div><div class="summary-value">' + c.value + '</div></div>').join('');
    }

    function buildBasisText(inp, r) {
        const modeTxt = inp.mode === 'schedule3'
            ? 'Computed in <strong>Schedule III mode</strong> per the ICAI Guidance Note — all interest, all principal and lease payments included in denominator.'
            : 'Computed in <strong>Banking mode</strong> — long-term debt servicing only. Exclude short-term interest and lease payments to match typical bank covenant definitions.';
        return modeTxt + ' <strong>Numerator (Earnings Available for Debt Service)</strong>: PAT (' + fmtINR(inp.pat) + ') + Depreciation &amp; Amortisation (' + fmtINR(inp.dep) + ') + Interest (' + fmtINR(inp.intPL) + ') + Other Non-cash (' + fmtINR(inp.otherNC) + ') = <strong>' + fmtINR(r.numerator) + '</strong>. <strong>Denominator (Debt Service)</strong>: Interest (' + fmtINR(inp.intPaid) + ') + Principal Repayment (' + fmtINR(inp.principalPaid) + ')' + (inp.mode === 'schedule3' ? ' + Lease Payments (' + fmtINR(inp.leasePay) + ')' : '') + ' = <strong>' + fmtINR(r.denominator) + '</strong>.';
    }

    function buildDisclosureRows(r, inp) {
        const numerator = 'PAT + Depreciation + Interest + Other Non-cash Adjustments';
        const denominator = 'Interest + Principal Repayments' + (inp.mode === 'schedule3' ? ' + Lease Payments' : '');
        const cur = isFinite(r.dscr) ? fmtRatio(r.dscr) : '—';
        const prev = inp.prevDSCR > 0 ? fmtRatio(inp.prevDSCR) : '—';
        const pct = (r.yoyVar !== null) ? fmtPct(r.yoyVar) : '—';
        const reasonHtml = r.exceeds25 ? '<br><span style="color:var(--accent-light);font-size:11px;">⚠ Exceeds 25% — written explanation required in notes</span>' : '';
        return '<tr><td>Debt Service Coverage Ratio</td><td>' + numerator + '</td><td>' + denominator + '</td><td class="num">' + cur + '</td><td class="num">' + prev + '</td><td class="num">' + pct + reasonHtml + '</td></tr>';
    }

    function gaugePosition(d) {
        // Map DSCR (0-4+) to 0-100%
        if (!isFinite(d) || d < 0) return 0;
        if (d >= 4) return 100;
        return (d / 4) * 100;
    }

    function calculate() {
        const inp = readInputs();
        const err = validate(inp);
        const result = document.getElementById('resultSection');
        if (err) {
            alert(err);
            result.classList.remove('visible');
            return;
        }
        const r = compute(inp);

        const v = getVerdict(r.dscr);
        const vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card' + (v.cls && v.cls !== 'verdict' ? ' ' + v.cls : '');
        document.getElementById('verdictHeadline').textContent = isFinite(r.dscr) && r.dscr > 0 ? 'DSCR = ' + fmtRatio(r.dscr) + ' — ' + v.headline : v.headline;
        document.getElementById('verdictSub').textContent = v.sub;
        document.getElementById('numeratorVal').textContent = fmtINR(r.numerator);
        document.getElementById('denominatorVal').textContent = fmtINR(r.denominator);

        document.getElementById('gaugeMarker').style.left = gaugePosition(r.dscr) + '%';

        document.getElementById('covenantGrid').innerHTML = buildCovenantGrid(r.dscr);
        document.getElementById('summaryGrid').innerHTML = buildSummaryGrid(r, inp);

        const bb = getBenchmarkBanner(r.dscr, inp.industry);
        const bbEl = document.getElementById('benchmarkBanner');
        if (bb) {
            bbEl.className = 'info-banner ' + bb.cls;
            bbEl.innerHTML = bb.html;
            bbEl.style.display = 'block';
        } else {
            bbEl.style.display = 'none';
        }

        const vbEl = document.getElementById('varianceBanner');
        if (r.yoyVar !== null) {
            const cls = r.exceeds25 ? 'warn' : 'info';
            const msg = r.exceeds25
                ? '<strong>⚠ 25% threshold breached.</strong> DSCR moved from ' + fmtRatio(inp.prevDSCR) + ' to ' + fmtRatio(r.dscr) + ' (' + fmtPct(r.yoyVar) + '). Schedule III mandates a written explanation in the notes to accounts. Common reasons: balloon principal repayment, fresh debt, debt prepayment, or first-time Ind AS 116 application.'
                : '<strong>Within 25% threshold.</strong> DSCR moved from ' + fmtRatio(inp.prevDSCR) + ' to ' + fmtRatio(r.dscr) + ' (' + fmtPct(r.yoyVar) + '). No mandatory explanation required, but voluntary disclosure adds investor confidence.';
            vbEl.className = 'info-banner ' + cls;
            vbEl.innerHTML = msg;
            vbEl.style.display = 'block';
        } else {
            vbEl.style.display = 'none';
        }

        const pfEl = document.getElementById('projectFinanceBanner');
        if (inp.industry === 'project') {
            pfEl.innerHTML = '<strong>Project Finance Note:</strong> The DSCR computed here is a single-period figure. For project finance loans, lenders also require <strong>Average DSCR ≥ 1.30</strong> across the loan tenor with a <strong>minimum period DSCR ≥ 1.10</strong> in any single year. P50 / P90 sensitivity testing is mandatory at financial closure. Consider engaging a CA-led modelling team for the full project finance DSCR working.';
            pfEl.style.display = 'block';
        } else {
            pfEl.style.display = 'none';
        }

        document.getElementById('basisText').innerHTML = buildBasisText(inp, r);
        document.getElementById('disclosureRows').innerHTML = buildDisclosureRows(r, inp);

        result.classList.add('visible');
        setTimeout(function() { result.scrollIntoView({behavior: 'smooth', block: 'start'}); }, 80);
    }

    function reset() {
        ['pat', 'depreciation', 'interestPL', 'otherNonCash', 'interestPaid', 'principalPaid', 'leasePayments', 'prevYearDSCR'].forEach(id => {
            document.getElementById(id).value = '';
        });
        document.querySelectorAll('#modeGroup .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'schedule3';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        document.querySelectorAll('#industryGroup .toggle-btn').forEach(b => {
            const isFirst = b.dataset.value === 'manufacturing';
            b.classList.toggle('active', isFirst);
            b.setAttribute('aria-selected', isFirst ? 'true' : 'false');
        });
        updateInterestHelper();
        document.getElementById('resultSection').classList.remove('visible');
    }

    document.getElementById('btnCalculate').addEventListener('click', calculate);
    document.getElementById('btnReset').addEventListener('click', reset);

    document.querySelectorAll('input[type="number"], input[type="text"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                calculate();
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
    updateInterestHelper();
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
