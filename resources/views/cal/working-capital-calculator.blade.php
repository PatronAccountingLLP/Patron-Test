@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Working Capital Calculator | Tandon MPBF &amp; Current Ratio</title>
    <meta name="description" content="Working capital calculator: compute working capital, current ratio and MPBF under Tandon Committee Methods 1 &amp; 2, with Schedule III tie-in. Free CA tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/working-capital-calculator/">
    <meta property="og:title" content="Working Capital Calculator — Schedule III &amp; Tandon MPBF India 2026">
    <meta property="og:description" content="Compute Working Capital, Current Ratio, Net Capital Turnover, Tandon Committee MPBF (Method 1 &amp; 2), Nayak Committee turnover method. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/working-capital-calculator">
    <meta property="og:image" content="/tools/og/working-capital-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Working Capital Calculator — Schedule III &amp; Tandon MPBF India 2026">
    <meta name="twitter:description" content="WC, Current Ratio, MPBF per Tandon Committee Methods 1 &amp; 2, Nayak Committee turnover method, Schedule III ratios. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/working-capital-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Working Capital Calculator",
      "description": "Working Capital Calculator computes Working Capital, Gross Working Capital, Working Capital Gap, Current Ratio, Quick Ratio and Net Capital Turnover Ratio for an Indian company aligned with Schedule III to the Companies Act, 2013. The tool also computes Maximum Permissible Bank Finance under Tandon Committee Method 1 (75 per cent of WC Gap) and Method 2 (75 per cent of Total Current Assets less Other Current Liabilities, the Chore Committee 1979 standard for borrowers with working capital limits exceeding fifty lakhs), plus the Nayak Committee turnover-method assessment used for MSME borrowers up to seven point five crore working capital limit. Two of the eleven Schedule III mandatory analytical ratios are direct outputs from this calculator namely Current Ratio and Net Capital Turnover Ratio. The MSE versus non-MSE trade payable split required under Schedule III Division II is supported with auto-flagging if MSE payables suggest MSMED Act Section 15 forty-five day rule breach. Industry benchmarks across IT, Manufacturing, FMCG, Retail, Pharma, Real Estate, Telecom and Services are referenced for verdict.",
      "url": "/tools/working-capital-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "Working Capital Calculator", "item": "/tools/working-capital-calculator"}
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
          "name": "What is Working Capital and how is it calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Working Capital is the surplus of Current Assets over Current Liabilities — the cash and short-term resources available to fund day-to-day operations. The formula is Working Capital equals Current Assets less Current Liabilities. Gross Working Capital is total Current Assets, while Net Working Capital deducts Current Liabilities. A positive Working Capital indicates the company can comfortably meet short-term obligations. Negative Working Capital signals liquidity stress unless deliberately engineered (modern retail) through supplier credit dominance and rapid cash conversion."
          }
        },
        {
          "@type": "Question",
          "name": "Are Working Capital ratios disclosed under Schedule III?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Two of the eleven mandatory Schedule III analytical ratios are direct working-capital metrics — Current Ratio (Current Assets divided by Current Liabilities) and Net Capital Turnover Ratio (Revenue from Operations divided by Working Capital). Both are mandatory under MCA notification dated 24 March 2021, effective FY 2021-22. Material change of more than 25 per cent year-on-year requires written explanation in the notes to accounts. Quick Ratio is voluntary, often disclosed in MD&A by listed companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is Tandon Committee Method 2 for MPBF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tandon Committee Method 2 computes Maximum Permissible Bank Finance as 75 per cent of Total Current Assets less Other Current Liabilities (OCL excludes short-term bank borrowings). The borrower contributes 25 per cent of Total Current Assets from long-term funds, ensuring minimum Current Ratio of 1.33:1. The Chore Committee 1979 made Method 2 the standard for borrowers with working capital limits exceeding fifty lakhs from the banking system. Most Indian commercial banks follow Method 2 for mid-corporate working capital appraisal."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Tandon Method 1 and Method 2?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tandon Method 1 funds 75 per cent of Working Capital Gap (Current Assets less Other Current Liabilities), with the borrower contributing 25 per cent of the gap from long-term funds. Minimum Current Ratio is 1:1. Method 2 funds 75 per cent of Total Current Assets less Other Current Liabilities, requiring 25 per cent margin from total current assets. Minimum Current Ratio is 1.33:1. Method 2 is more conservative and is now standard. Method 1 is permitted only for sub-fifty-lakh facilities."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Nayak Committee turnover method for working capital?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Nayak Committee turnover method, formalised by RBI for MSME borrowers, computes working-capital requirement as 25 per cent of projected annual turnover, with banks funding 20 per cent (four-fifth of WC need) and the borrower contributing 5 per cent margin. The method applies to MSME working-capital limits up to seven point five crore rupees. It is simpler than Tandon Methods because it does not require detailed CMA data. Most public-sector banks default to Nayak below the threshold."
          }
        },
        {
          "@type": "Question",
          "name": "What is a good Current Ratio for an Indian company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Current Ratio of 1.33 to 2.00 is generally considered healthy for Indian non-financial companies, providing comfortable short-term liquidity coverage. Below 1.33 signals liquidity stress and breaches typical bank covenant floors. Above 3.00 may indicate inefficient working-capital management — excess inventory, slow receivables, or idle cash. Industry benchmarking matters: IT services often show high Current Ratios due to limited inventory, while modern retail typically shows below 1.0 driven by extended supplier credit cycles."
          }
        },
        {
          "@type": "Question",
          "name": "What is Net Capital Turnover Ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net Capital Turnover Ratio equals Revenue from Operations divided by Net Working Capital. It measures how efficiently the company generates revenue from its working-capital investment. Higher turnover means more revenue per rupee of working capital tied up. The ratio is one of eleven mandatory Schedule III analytical ratios introduced by MCA notification dated 24 March 2021. A change exceeding 25 per cent year-on-year requires written explanation in the notes to accounts of the audited financial statements."
          }
        },
        {
          "@type": "Question",
          "name": "How does MSMED Act 2006 affect Current Liabilities?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule III Division II requires separate disclosure of Trade Payables to Micro and Small Enterprises versus other suppliers. MSE payables outstanding beyond 45 days breach Section 15 of the MSMED Act 2006, attracting compound interest at three times the RBI bank rate under Section 16, tax disallowance under Section 43B(h) of Income Tax Act, and half-yearly Form MSME-1 reporting to MCA. A high MSE payable balance creates regulatory and tax exposure that must be disclosed."
          }
        },
        {
          "@type": "Question",
          "name": "What is Working Capital Gap and how is it different from Working Capital?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Working Capital equals Current Assets less Current Liabilities (all of them). Working Capital Gap equals Current Assets less Other Current Liabilities, where Other Current Liabilities exclude short-term bank borrowings. The gap is the amount that needs financing — through long-term funds or bank borrowings. Banks use the Working Capital Gap concept when assessing eligible MPBF under Tandon Methods. The gap is structurally larger than Working Capital because bank borrowings are excluded from the deduction side."
          }
        },
        {
          "@type": "Question",
          "name": "Should excess Working Capital be reduced?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Excess Working Capital ties up funds that could earn higher returns elsewhere or repay expensive debt. A Current Ratio above 3.0 typically signals over-investment in inventory, slow receivables, or idle cash balances. Action items include inventory rationalisation under Ind AS 2, faster collection through TReDS or factoring, dividend distribution if cash is genuinely surplus, share buyback if shareholder return is preferred, or debt prepayment if leverage is high. Working capital should be sufficient, not abundant."
          }
        },
        {
          "@type": "Question",
          "name": "How does Working Capital relate to Cash Conversion Cycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Working Capital and Cash Conversion Cycle are two views of the same operational reality. Working Capital is the absolute rupee amount of operating funds tied up. CCC is the duration in days for which they are tied up. The two are mathematically linked — Working Capital approximately equals Annual Revenue multiplied by CCC divided by 365. Reducing CCC reduces Working Capital tied up. Use Working Capital for absolute funding sizing and CCC for benchmarking efficiency across companies of different scales."
          }
        },
        {
          "@type": "Question",
          "name": "What is Quick Ratio and when is it preferred over Current Ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Quick Ratio (also called Acid-Test Ratio) equals Current Assets less Inventory divided by Current Liabilities. It is a stricter liquidity measure that ignores inventory because inventory cannot always be quickly converted to cash, especially specialised, slow-moving, or obsolete stock. Quick Ratio is preferred for industries where inventory is a large component of current assets — manufacturing, retail, pharma. A Quick Ratio above 1.0 indicates the company can meet short-term obligations without selling inventory."
          }
        },
        {
          "@type": "Question",
          "name": "Which line items go into Current Assets and Current Liabilities under Schedule III?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Ind AS Schedule III Division II, Current Assets include Inventories, Current Investments, Trade Receivables, Cash and Cash Equivalents, Other Bank Balances, Loans, Other Financial Assets and Other Current Assets like prepaid expenses and GST credit receivable. Current Liabilities include Short-term Borrowings, Trade Payables (split MSE and non-MSE), Lease Liabilities, Other Financial Liabilities, Current Tax Liabilities, Provisions and Other Current Liabilities. Items expected to be settled within twelve months from the reporting date are classified as current."
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
        .calc-section-title.assets { color: var(--info); }
        .calc-section-title.liab { color: var(--danger); }
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
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 600px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
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
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }
        .basis-text strong { color: var(--primary-dark); }

        .mpbf-card { background: linear-gradient(135deg, #EFF6FF, #DBEAFE); border: 2px solid var(--info); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .mpbf-card h4 { font-size: 14px; color: #1E3A8A; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .mpbf-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 10px; }
        @media (max-width: 500px) { .mpbf-grid { grid-template-columns: 1fr; } }
        .mpbf-item { background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 14px; }
        .mpbf-item .lbl { font-size: 11px; font-weight: 700; color: #1E40AF; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .mpbf-item .val { font-family: var(--font-mono); font-weight: 700; color: #1E3A8A; font-size: 18px; }
        .mpbf-item .sub { font-size: 11px; color: #1E40AF; margin-top: 2px; }

        .composition-bars { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .comp-bar-row { display: grid; grid-template-columns: 130px 1fr 100px; gap: 12px; align-items: center; margin-bottom: 8px; font-size: 13px; }
        .comp-bar-row:last-child { margin-bottom: 0; }
        .comp-bar-label { font-weight: 600; color: var(--text-secondary); font-size: 12px; }
        .comp-bar-track { height: 14px; background: var(--surface-alt); border-radius: 7px; position: relative; overflow: hidden; }
        .comp-bar-fill { height: 100%; border-radius: 7px; transition: width 0.5s ease; }
        .comp-bar-fill.ca-inv { background: linear-gradient(90deg, #3B82F6, #60A5FA); }
        .comp-bar-fill.ca-ar { background: linear-gradient(90deg, #06B6D4, #67E8F9); }
        .comp-bar-fill.ca-cash { background: linear-gradient(90deg, #14B8A6, #5EEAD4); }
        .comp-bar-fill.ca-other { background: linear-gradient(90deg, #8B5CF6, #C4B5FD); }
        .comp-bar-fill.cl-tp { background: linear-gradient(90deg, #DC2626, #F87171); }
        .comp-bar-fill.cl-borr { background: linear-gradient(90deg, #EA580C, #FB923C); }
        .comp-bar-fill.cl-other { background: linear-gradient(90deg, #B45309, #f26522); }
        .comp-bar-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); text-align: right; font-size: 12px; }
        @media (max-width: 600px) {
            .comp-bar-row { grid-template-columns: 100px 1fr 75px; gap: 8px; }
            .comp-bar-label { font-size: 11px; }
            .comp-bar-value { font-size: 11px; }
        }

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
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-to-use">How to Use</a>
        <a href="#formula">Formula</a>
        <a href="#schedule-iii">Schedule III</a>
        <a href="#tandon">Tandon MPBF</a>
        <a href="#nayak">Nayak Method</a>
        <a href="#benchmarks">Benchmarks</a>
        <a href="#msmed">MSMED Act</a>
        <a href="#optimisation">Optimise WC</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Working Capital Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 19 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Working Capital Calculator — <span>Schedule III &amp; Tandon Committee MPBF</span> for FY 2025-26</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Working%20Capital%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Working%20Capital%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Working%20Capital%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Working Capital Calculator computes Working Capital, Gross Working Capital, Working Capital Gap, Current Ratio, Quick Ratio and Net Capital Turnover Ratio aligned with <strong>Schedule III to the Companies Act, 2013</strong>. Two of the eleven mandatory Schedule III ratios — <strong>Current Ratio and Net Capital Turnover</strong> — are direct outputs. The unique feature is auto-computation of <strong>Tandon Committee MPBF</strong> under both Method 1 (75% of WC Gap) and Method 2 (75% of TCA less OCL — Chore Committee 1979 standard for ≥₹50 lakh limits), plus the <strong>Nayak Committee turnover method</strong> for MSME borrowers up to ₹7.5 crore. MSMED Act 45-day check, sector benchmarks across 8 industries, and 25% YoY variance flag included.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Working Capital</h2>
            <p class="calc-intro">Enter Current Assets and Current Liabilities directly from your audited balance sheet under Schedule III Division II. The calculator computes Working Capital, all liquidity ratios, and Tandon/Nayak MPBF in one shot. All amounts in ₹ rupees.</p>
            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or refer to the formula in the section below.</div>
            </noscript>

            <div class="calc-section-title assets">Current Assets (Schedule III)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="caInv">Inventory (₹)</label>
                    <input type="text" id="caInv" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Raw materials, WIP, finished goods, stock-in-trade, stores &amp; spares.</span>
                </div>
                <div class="form-group">
                    <label for="caAR">Trade Receivables (₹)</label>
                    <input type="text" id="caAR" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Net of provision for doubtful debts (Ind AS 109 ECL).</span>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="caCash">Cash &amp; Cash Equivalents (₹)</label>
                    <input type="text" id="caCash" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cash, bank balances, FD &lt;3 months, highly liquid instruments.</span>
                </div>
                <div class="form-group">
                    <label for="caBank">Other Bank Balances (₹)</label>
                    <input type="text" id="caBank" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">FD 3-12 months, margin money, earmarked balances.</span>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="caInv2">Current Investments (₹)</label>
                    <input type="text" id="caInv2" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Mutual funds, T-bills, short-term debt instruments held for &lt;12 months.</span>
                </div>
                <div class="form-group">
                    <label for="caOther">Other Current Assets (₹)</label>
                    <input type="text" id="caOther" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Loans, prepaid expenses, GST input credit receivable, advances.</span>
                </div>
            </div>

            <div class="calc-section-title liab">Current Liabilities (Schedule III)</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="clTpMSE">Trade Payables — MSE (₹)</label>
                    <input type="text" id="clTpMSE" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Micro &amp; Small Enterprise dues. MSMED Act 45-day rule applies.</span>
                </div>
                <div class="form-group">
                    <label for="clTpOther">Trade Payables — Non-MSE (₹)</label>
                    <input type="text" id="clTpOther" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">All other trade creditors (medium, large, foreign suppliers).</span>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="clBorr">Short-term Borrowings (₹)</label>
                    <input type="text" id="clBorr" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Cash credit, OD, working capital demand loan, bills discounting.</span>
                </div>
                <div class="form-group">
                    <label for="clCurMat">Current Maturities of LT Debt (₹)</label>
                    <input type="text" id="clCurMat" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">LT loan EMIs &amp; bond repayments due within 12 months.</span>
                </div>
            </div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="clOther">Other Current Liabilities (₹)</label>
                    <input type="text" id="clOther" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Statutory dues, accrued expenses, lease liabilities (current portion).</span>
                </div>
                <div class="form-group">
                    <label for="clProv">Short-term Provisions (₹)</label>
                    <input type="text" id="clProv" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Provision for tax, bonus, leave encashment, warranty.</span>
                </div>
            </div>

            <div class="calc-section-title">Income Statement &amp; Context</div>
            <div class="calc-row">
                <div class="form-group">
                    <label for="revenue">Annual Revenue from Operations (₹)</label>
                    <input type="text" id="revenue" min="0" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">For Net Capital Turnover Ratio (Schedule III mandatory).</span>
                </div>
                <div class="form-group">
                    <label for="prevWC">Previous Year Working Capital (₹) — Optional</label>
                    <input type="text" id="prevWC" step="any" placeholder="0" inputmode="decimal" autocomplete="off">
                    <span class="helper">Enter last year's NWC to flag the 25% Schedule III variance threshold.</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label>Industry / Sector</label>
                <div class="toggle-group" id="industryGroup" role="tablist" aria-label="Industry">
                    <button type="button" class="toggle-btn active" data-value="manufacturing" role="tab" aria-selected="true">Manufacturing</button>
                    <button type="button" class="toggle-btn" data-value="it" role="tab" aria-selected="false">IT / Software</button>
                    <button type="button" class="toggle-btn" data-value="fmcg" role="tab" aria-selected="false">FMCG</button>
                    <button type="button" class="toggle-btn" data-value="retail" role="tab" aria-selected="false">Retail</button>
                    <button type="button" class="toggle-btn" data-value="pharma" role="tab" aria-selected="false">Pharma</button>
                    <button type="button" class="toggle-btn" data-value="realestate" role="tab" aria-selected="false">Real Estate</button>
                    <button type="button" class="toggle-btn" data-value="trading" role="tab" aria-selected="false">Trading</button>
                    <button type="button" class="toggle-btn" data-value="services" role="tab" aria-selected="false">Services</button>
                </div>
                <span class="helper" style="display:block;margin-top:6px;font-size:11px;color:var(--text-muted);">Used for Current Ratio and Working Capital benchmark comparison.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate Working Capital</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">Working Capital Position</div>
                    <div class="verdict-headline" id="verdictHeadline">WC = ₹0</div>
                    <div class="verdict-sub" id="verdictSub">Verdict</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Current Ratio</div>
                            <div class="verdict-grid-value" id="currentRatioVal">0.00</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Quick Ratio</div>
                            <div class="verdict-grid-value" id="quickRatioVal">0.00</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Net Capital Turnover</div>
                            <div class="verdict-grid-value" id="ncTurnoverVal">0.00×</div>
                        </div>
                    </div>
                </div>

                <div class="composition-bars">
                    <div class="basis-label" style="margin-bottom: 12px;">Balance Sheet Composition</div>
                    <div id="compositionContainer"></div>
                </div>

                <div class="mpbf-card">
                    <h4>Tandon Committee MPBF Assessment</h4>
                    <p style="font-size:13px;color:#1E3A8A;margin-bottom:8px;">Maximum Permissible Bank Finance computed under both methods. Method 2 is the Chore Committee 1979 standard for borrowers with WC limits ≥ ₹50 lakhs.</p>
                    <div class="mpbf-grid">
                        <div class="mpbf-item">
                            <div class="lbl">Working Capital Gap</div>
                            <div class="val" id="wcGap">₹0</div>
                            <div class="sub">TCA − OCL (excl. bank borrowings)</div>
                        </div>
                        <div class="mpbf-item">
                            <div class="lbl">Tandon Method 1 — Liberal</div>
                            <div class="val" id="mpbf1">₹0</div>
                            <div class="sub">75% of WC Gap. Min CR 1:1.</div>
                        </div>
                        <div class="mpbf-item">
                            <div class="lbl">Tandon Method 2 — Standard</div>
                            <div class="val" id="mpbf2">₹0</div>
                            <div class="sub">75% TCA − OCL. Min CR 1.33:1. <strong>Chore 1979 standard.</strong></div>
                        </div>
                        <div class="mpbf-item">
                            <div class="lbl">Existing ST Borrowings</div>
                            <div class="val" id="existingBorr">₹0</div>
                            <div class="sub" id="borrComparison">vs MPBF Method 2</div>
                        </div>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="benchmarkBanner"></div>
                <div class="info-banner" id="msmedBanner" style="display:none;"></div>
                <div class="info-banner" id="varianceBanner" style="display:none;"></div>
                <div class="info-banner" id="nayakBanner" style="display:none;"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis (per ICAI Schedule III Guidance)</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div class="basis-label" style="margin: 24px 0 8px;">Schedule III Sample Disclosure — 2 Mandatory Working Capital Ratios</div>
                <div class="disclosure-block" id="disclosureBlock">
                    <span class="dl-label">Note X — Analytical Ratios (extract)</span>
                    <table>
                        <thead>
                            <tr><th>Ratio</th><th>Numerator</th><th>Denominator</th><th>Current Year</th><th>Previous Year</th></tr>
                        </thead>
                        <tbody id="disclosureRows"></tbody>
                    </table>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Working Capital Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Working%20Capital%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Working%20Capital%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Working%20Capital%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>


        <section class="content-section" id="how-to-use">
            <h2>How to Use This Working Capital Calculator</h2>
            <p>Working Capital is the lifeblood of day-to-day business operations — the cash and short-term resources available to fund inventory, pay suppliers, meet payroll and absorb timing mismatches. The calculator uses the standard balance-sheet method aligned with the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a> Guidance Note on Schedule III.</p>

            <h3>Step 1 — Pull Six Current Asset Lines from the Balance Sheet</h3>
            <p>Open your audited balance sheet under Schedule III Division II. Inventory captures raw materials, work-in-progress, finished goods, stock-in-trade, stores and spares — net of any obsolescence provision under Ind AS 2. Trade Receivables is net of provision for doubtful debts under Ind AS 109 expected credit loss. Cash and Cash Equivalents covers cash, bank balances, fixed deposits with original maturity under three months, and highly liquid instruments. Other Bank Balances includes earmarked balances and FDs over three months. Current Investments is mutual funds and money-market instruments. Other Current Assets is loans, prepaid expenses, GST input credit and advances.</p>

            <h3>Step 2 — Pull Six Current Liability Lines</h3>
            <p>Trade Payables must be split between MSE (Micro and Small Enterprise) and non-MSE under Schedule III mandatory disclosure. The MSE figure is critical because the <a href="https://samadhaan.msme.gov.in/" target="_blank" rel="noopener">MSMED Act 2006</a> caps payment to 45 days. Short-term Borrowings includes cash credit, overdraft, working capital demand loan and bills discounting. Current Maturities of Long-term Debt is the next-12-month portion of long-term loans. Other Current Liabilities covers statutory dues, accrued expenses and lease liabilities (current portion). Short-term Provisions includes tax, bonus, leave encashment and warranty provisions.</p>

            <h3>Step 3 — Enter Revenue and Industry Sector</h3>
            <p>Annual Revenue from Operations is needed to compute Net Capital Turnover Ratio (one of two Schedule III mandatory working-capital ratios). Industry sector is used for benchmark comparison — Current Ratio and Working Capital intensity vary sharply by industry. Optional: enter previous year's Working Capital to flag the 25% Schedule III variance threshold.</p>

            <h3>Step 4 — Read the Output Panel</h3>
            <p>Output shows headline Working Capital, Current Ratio, Quick Ratio, Net Capital Turnover, the full balance-sheet composition (visualized as horizontal bars), Tandon Committee MPBF under both Methods 1 and 2, comparison with existing short-term borrowings, MSMED Act check on MSE trade payables, sector benchmark verdict, and a Schedule III disclosure block with the two mandatory working-capital ratios. If turnover is under ₹30 crore (implying potential MSME borrower), the Nayak Committee turnover-method assessment is also shown.</p>
        </section>

        <section class="content-section" id="formula">
            <h2>Working Capital Formula and Components</h2>
            <p>Working Capital has three closely related definitions, each used in different contexts. Understanding the distinctions matters for ratio analysis, bank lending and Schedule III disclosure.</p>

            <div class="formula-box">
<span class="label">Net Working Capital (NWC)</span> = Current Assets − Current Liabilities<br>
<span class="label">Gross Working Capital (GWC)</span> = Total Current Assets<br>
<span class="label">Working Capital Gap (WCG)</span> = Current Assets − Other Current Liabilities<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999;">(OCL = CL excluding short-term bank borrowings)</span><br>
<br>
<span class="label">Current Ratio</span> = Current Assets ÷ Current Liabilities<br>
<span class="label">Quick Ratio</span> = (Current Assets − Inventory) ÷ Current Liabilities<br>
<span class="label">Net Capital Turnover</span> = Revenue ÷ Net Working Capital
            </div>

            <h3>The Three Working Capital Definitions Compared</h3>
            <table class="rate-table">
                <thead><tr><th>Definition</th><th>Formula</th><th>Used For</th></tr></thead>
                <tbody>
                    <tr><td><strong>Net Working Capital</strong></td><td>CA − CL</td><td>Liquidity assessment, Schedule III disclosure, financial planning</td></tr>
                    <tr><td><strong>Gross Working Capital</strong></td><td>Total Current Assets</td><td>Asset deployment view, total funding need before financing</td></tr>
                    <tr><td><strong>Working Capital Gap</strong></td><td>CA − OCL</td><td>Bank credit appraisal under Tandon Committee MPBF</td></tr>
                </tbody>
            </table>

            <h3>Worked Example — Indian Manufacturing Company</h3>
            <p>A mid-sized Indian manufacturer reports the following balance-sheet extracts (₹ in lakhs):</p>
            <table class="rate-table">
                <thead><tr><th>Current Assets</th><th>₹ Lakhs</th><th>Current Liabilities</th><th>₹ Lakhs</th></tr></thead>
                <tbody>
                    <tr><td>Inventory</td><td>1,200</td><td>Trade Payables (MSE)</td><td>200</td></tr>
                    <tr><td>Trade Receivables</td><td>1,100</td><td>Trade Payables (Non-MSE)</td><td>500</td></tr>
                    <tr><td>Cash &amp; Equivalents</td><td>300</td><td>Short-term Borrowings</td><td>800</td></tr>
                    <tr><td>Other Bank Balances</td><td>100</td><td>Current Maturities LT Debt</td><td>200</td></tr>
                    <tr><td>Current Investments</td><td>200</td><td>Other Current Liabilities</td><td>250</td></tr>
                    <tr><td>Other Current Assets</td><td>100</td><td>Short-term Provisions</td><td>150</td></tr>
                    <tr><td><strong>Total Current Assets</strong></td><td><strong>3,000</strong></td><td><strong>Total Current Liabilities</strong></td><td><strong>2,100</strong></td></tr>
                </tbody>
            </table>
            <p>Computation: <strong>Net Working Capital</strong> = 3,000 − 2,100 = ₹900 lakhs. <strong>Current Ratio</strong> = 3,000 / 2,100 = 1.43. <strong>Quick Ratio</strong> = (3,000 − 1,200) / 2,100 = 0.86. <strong>Working Capital Gap</strong> = 3,000 − 1,300 (OCL = CL ex-borrowings = 2,100 − 800) = ₹1,700 lakhs. With annual revenue of ₹10,000 lakhs, <strong>Net Capital Turnover</strong> = 10,000 / 900 = 11.11×.</p>
        </section>

        <section class="content-section" id="schedule-iii">
            <h2>Schedule III — Two Mandatory Working Capital Ratios</h2>
            <p>The <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> Schedule III was amended via <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> notification G.S.R. 207(E) dated 24 March 2021, effective from FY 2021-22. The amendment introduced eleven mandatory analytical ratios. Two of those eleven are direct working-capital metrics — Current Ratio and Net Capital Turnover Ratio.</p>

            <h3>The Two Working Capital Ratios in Schedule III</h3>
            <table class="rate-table">
                <thead><tr><th>Schedule III Ratio</th><th>Formula</th><th>What It Measures</th></tr></thead>
                <tbody>
                    <tr><td><strong>Current Ratio</strong></td><td>Current Assets ÷ Current Liabilities</td><td>Short-term liquidity coverage</td></tr>
                    <tr><td><strong>Net Capital Turnover Ratio</strong></td><td>Revenue from Operations ÷ Working Capital</td><td>Revenue generated per rupee of working capital</td></tr>
                </tbody>
            </table>

            <h3>Companion Ratios from the Same Inputs</h3>
            <p>While not separately mandatory under Schedule III, the following ratios can be computed from the same inputs and are commonly disclosed in MD&amp;A by listed companies under SEBI LODR Reg 34(3): Quick Ratio (Current Assets less Inventory divided by Current Liabilities), Working Capital to Revenue (NWC divided by Revenue), and Cash Ratio (Cash and Equivalents divided by Current Liabilities). Inventory Turnover, Trade Receivables Turnover and Trade Payables Turnover (the three CCC-component ratios) are also Schedule III mandatory and appear in the <a href="/tools/cash-conversion-cycle-calculator">Cash Conversion Cycle Calculator</a>.</p>

            <h3>The 25% Variance Explanation Rule</h3>
            <p>If either Current Ratio or Net Capital Turnover Ratio changes by more than 25% compared to the preceding year, the company must provide a written explanation in the notes to accounts under Schedule III. Statutory auditors verify the explanation. Common explanations include: extended credit terms (lowers Current Ratio), inventory build-up before peak season (raises Current Ratio temporarily), debt-equity rebalancing (changes short-term borrowings), capital expenditure cycle, GST credit accumulation (raises Other Current Assets), or one-off transactions affecting balance-sheet items at year-end.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Current Ratio is sensitive to year-end window-dressing — companies sometimes pay off short-term borrowings just before March 31 to inflate the ratio and reverse the position in early April. Auditors are increasingly required to test the sustainability of the year-end position by comparing it with average levels through the year. Consistent month-end testing protects against this risk.</p>
            </div>
        </section>

        <section class="content-section" id="tandon">
            <h2>Tandon Committee MPBF — How Banks Size Working Capital Limits</h2>
            <p>The Tandon Committee Report on Working Capital, submitted to the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a> in August 1975, fundamentally reshaped how Indian banks lend for working capital. The committee proposed three methods to compute Maximum Permissible Bank Finance (MPBF). RBI accepted Methods 1 and 2 for general application. Method 3 is rarely used.</p>

            <h3>Tandon Method 1 — The Liberal Method</h3>
            <div class="formula-box">
<span class="label">MPBF (Method 1)</span> = 0.75 × (TCA − OCL)<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999;">where OCL = Current Liabilities excluding bank borrowings</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999;">Borrower's margin: 25% of Working Capital Gap</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999;">Minimum Current Ratio achieved: 1:1</span>
            </div>
            <p>Method 1 requires the borrower to fund only 25% of the Working Capital Gap from long-term sources (equity or term debt). Banks fund 75%. The minimum current ratio under this regime is just 1:1 — barely solvent. RBI considered this too liberal for sustained adoption.</p>

            <h3>Tandon Method 2 — The Standard Method</h3>
            <div class="formula-box">
<span class="label">MPBF (Method 2)</span> = (0.75 × TCA) − OCL<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999;">Borrower's margin: 25% of Total Current Assets</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999;">Minimum Current Ratio achieved: 1.33:1</span>
            </div>
            <p>Method 2 requires the borrower to fund 25% of Total Current Assets from long-term sources, achieving a stronger minimum current ratio of 1.33:1. The Chore Committee in April 1979 recommended that all borrowers (except sick units) with working capital limits of ₹50 lakh and above be placed under Method 2. This recommendation became the operating standard for Indian commercial banks and remains so today.</p>

            <h3>Worked Example — MPBF Assessment</h3>
            <p>For the manufacturer in the earlier worked example (TCA ₹3,000 lakhs, CL ₹2,100 lakhs, ST Borrowings ₹800 lakhs, OCL = 2,100 − 800 = ₹1,300 lakhs):</p>
            <table class="rate-table">
                <thead><tr><th>Method</th><th>Calculation</th><th>MPBF (₹ Lakhs)</th><th>Implied Min CR</th></tr></thead>
                <tbody>
                    <tr><td><strong>Method 1</strong></td><td>0.75 × (3,000 − 1,300) = 0.75 × 1,700</td><td><strong>1,275</strong></td><td>1.00:1</td></tr>
                    <tr><td><strong>Method 2 (Standard)</strong></td><td>(0.75 × 3,000) − 1,300 = 2,250 − 1,300</td><td><strong>950</strong></td><td>1.33:1</td></tr>
                </tbody>
            </table>
            <p>Under Method 2 (standard practice), the company is eligible for ₹950 lakhs MPBF against existing ST borrowings of ₹800 lakhs — there is headroom of ₹150 lakhs for limit enhancement, subject to stock and book-debt margin compliance.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Banks require Credit Monitoring Arrangement (CMA) data for working capital appraisal — typically Form III (operating statement), Form IV (analysis of balance sheet), Form V (comparative balance sheet), Form VI (working capital assessment). The MPBF computation appears on Form VI. Always verify that your CMA submission matches the audited financials and that ratios match the Schedule III disclosure to avoid bank queries.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with CMA Data or Bank Limit Renewal?</h3>
            <p>Patron Accounting LLP supports CFO offices with Credit Monitoring Arrangement (CMA) data preparation, MPBF computation, working capital optimisation studies, bank facility renewal documentation, and Schedule III ratio disclosure — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Working%20Capital%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Working%20Capital%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Working%20Capital%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="nayak">
            <h2>Nayak Committee Turnover Method — For MSME Borrowers</h2>
            <p>The Nayak Committee, headed by Shri P.R. Nayak in 1991, simplified working-capital appraisal for small borrowers. The RBI subsequently formalised the turnover method for SSI/MSME borrowers, which remains the standard simplified appraisal up to specified limits.</p>

            <h3>Turnover Method Formula</h3>
            <div class="formula-box">
<span class="label">Working Capital Requirement</span> = 25% of Projected Annual Turnover<br>
<span class="label">Bank Finance (MPBF)</span> = 20% of Projected Annual Turnover (i.e. 4/5 of WC need)<br>
<span class="label">Borrower's Margin</span> = 5% of Projected Annual Turnover (i.e. 1/5 of WC need)
            </div>

            <h3>When the Nayak Method Applies</h3>
            <ul>
                <li><strong>SSI / MSME borrowers</strong> with working capital limits up to <strong>₹5 crore from a single bank</strong> (or ₹7.5 crore in aggregate from the banking system in some bank policies)</li>
                <li>For <strong>non-MSME borrowers</strong>, the simplified turnover method applies up to <strong>₹2 crore</strong> working capital limits</li>
                <li>Above these thresholds, banks revert to <strong>Tandon Method 2</strong> for full CMA-based appraisal</li>
                <li>Banks have discretion to use Nayak method below threshold or Tandon method above — most public-sector banks default to Nayak below the limit for operational simplicity</li>
            </ul>

            <h3>Worked Example</h3>
            <p>An MSME borrower with projected annual turnover of ₹4 crore applies for a working capital limit:</p>
            <table class="rate-table">
                <thead><tr><th>Component</th><th>Calculation</th><th>Amount</th></tr></thead>
                <tbody>
                    <tr><td>Projected Annual Turnover</td><td>Given</td><td>₹4,00,00,000</td></tr>
                    <tr><td>Working Capital Requirement</td><td>25% × ₹4 Cr</td><td>₹1,00,00,000</td></tr>
                    <tr><td>Bank Finance (MPBF)</td><td>20% × ₹4 Cr (4/5 of WC)</td><td>₹80,00,000</td></tr>
                    <tr><td>Borrower's Margin (Promoter Contribution)</td><td>5% × ₹4 Cr (1/5 of WC)</td><td>₹20,00,000</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>Note:</strong> The Nayak Method assumes a Cash Conversion Cycle of approximately 3 months (90 days), driving the 25% of turnover working-capital need. If your actual CCC is significantly longer (real-estate developers, EPC contractors), the Nayak Method will under-state working capital need — prefer Tandon Method 2 with detailed CMA data even if you are below the Nayak threshold.</p>
            </div>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Industry Benchmarks for Working Capital and Current Ratio</h2>
            <p>Working Capital intensity and Current Ratio vary dramatically by industry. The bands below reflect typical Indian listed-peer ranges for FY 2024-25 reported financials.</p>

            <table class="rate-table">
                <thead><tr><th>Industry</th><th>Typical Current Ratio</th><th>WC as % of Revenue</th><th>Driver</th></tr></thead>
                <tbody>
                    <tr><td><strong>IT Services / Software</strong></td><td>2.5 – 4.0</td><td>15% – 25%</td><td>Limited inventory, high cash, DSO-driven</td></tr>
                    <tr><td><strong>FMCG</strong></td><td>1.0 – 1.5</td><td>5% – 12%</td><td>Tight inventory, brand-driven trade credit</td></tr>
                    <tr><td><strong>Manufacturing</strong></td><td>1.3 – 2.0</td><td>15% – 30%</td><td>Inventory-heavy, B2B credit cycles</td></tr>
                    <tr><td><strong>Pharma</strong></td><td>1.5 – 3.0</td><td>20% – 40%</td><td>Long distribution chain, regulatory inventory</td></tr>
                    <tr><td><strong>Real Estate Developer</strong></td><td>1.5 – 4.0</td><td>50%+ (project-specific)</td><td>WIP inventory dominates, RERA escrow</td></tr>
                    <tr><td><strong>Modern Retail</strong></td><td>0.8 – 1.2</td><td>Negative to 5%</td><td>Negative WC by design — supplier credit funds operations</td></tr>
                    <tr><td><strong>Trading / Distribution</strong></td><td>1.2 – 1.8</td><td>10% – 20%</td><td>Inventory and AR balanced by supplier credit</td></tr>
                    <tr><td><strong>Telecom</strong></td><td>0.5 – 1.0</td><td>Negative (post-Ind AS 116 lease impact)</td><td>Low CA, high lease liabilities</td></tr>
                    <tr><td><strong>Capital Goods / EPC</strong></td><td>1.5 – 2.5</td><td>30% – 50%</td><td>Long-cycle projects, milestone billing</td></tr>
                </tbody>
            </table>

            <h3>Reading the Bands</h3>
            <p>Current Ratio above the high end of the band signals over-investment in working capital — excess inventory, slow receivables, or idle cash. Current Ratio below the low end signals liquidity stress — unless deliberately engineered as in modern retail, where supplier credit dominance produces structurally negative working capital. Use industry benchmarks as starting point, refine with three to five direct competitor comparisons.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> When pulling competitor data for benchmarking, use the latest annual report's Schedule III note disclosure rather than secondary aggregator sources. Many secondary sources use different definitions (e.g., excluding GST credit from Other Current Assets), leading to inconsistent comparisons. The Schedule III note format ensures apples-to-apples comparison.</p>
            </div>
        </section>

        <section class="content-section" id="msmed">
            <h2>MSMED Act 2006 — Impact on Current Liabilities</h2>
            <p>Schedule III Division II requires separate disclosure of Trade Payables to Micro and Small Enterprises (MSE) versus other suppliers. The MSE figure is critical because the Micro, Small and Medium Enterprises Development Act, 2006 imposes hard regulatory consequences on delayed payments.</p>

            <h3>Three Statutory Consequences for Delayed MSE Payments</h3>
            <ul>
                <li><strong>Section 15 — 45-day cap.</strong> Buyers must pay MSE suppliers within the period agreed in writing, capped at 45 days from acceptance, or 15 days if no written agreement.</li>
                <li><strong>Section 16 — Penalty interest.</strong> Compound interest with monthly rests at three times the RBI bank rate (≈ 19.5% annualised at current 6.50% bank rate).</li>
                <li><strong>Section 43B(h) of <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Act</a>.</strong> Effective AY 2024-25 (per Finance Act 2023), tax deduction is allowed only on actual payment if MSE payment is delayed beyond Section 15 limit.</li>
            </ul>

            <h3>Form MSME-1 Half-Yearly Disclosure to MCA</h3>
            <p>All companies with MSE supplier dues outstanding beyond 45 days must file half-yearly returns to the Ministry of Corporate Affairs in Form MSME-1, disclosing outstanding dues and reasons for delay. From April 2025, MCA notification SO-1376(E) dated 25 March 2025 enhanced the disclosure requirements. Statutory auditors verify MSME-1 filing as part of audit completion procedures.</p>

            <h3>Working Capital Implication</h3>
            <p>A high MSE Trade Payables balance inflates Current Liabilities, suppressing Current Ratio and Working Capital. While this appears to free up working capital, it creates regulatory exposure under Section 15/16 and tax exposure under Section 43B(h). The economic cost of the implicit financing is approximately 21-25% per annum (compound interest at 3× RBI bank rate plus tax disallowance impact) — far higher than typical bank borrowing rates of 9-11%. <strong>Stretching MSE payables is the most expensive form of working-capital financing available.</strong></p>

            <p>For a deeper Cash Conversion Cycle view including DPO impact analysis, see the <a href="/tools/cash-conversion-cycle-calculator">Cash Conversion Cycle Calculator</a>.</p>
        </section>

        <section class="content-section" id="optimisation">
            <h2>How to Optimise Working Capital</h2>
            <p>Working Capital optimisation releases trapped cash without external borrowing. A 10% reduction on a ₹100 crore current asset base unlocks ₹10 crore of cash — significant capacity for capex or debt prepayment.</p>

            <h3>Reducing Current Assets</h3>
            <ul>
                <li><strong>Inventory rationalisation</strong> — ABC and FSN analysis, slow-moving provision, vendor-managed inventory, just-in-time sourcing</li>
                <li><strong>Faster collections</strong> — tighter credit policy, early-payment discounts, TReDS factoring, dunning automation</li>
                <li><strong>GST credit utilisation</strong> — match input credit with output liability, avoid accumulation in books</li>
                <li><strong>Cash and bank balance review</strong> — sweep mechanism into liquid funds, avoid idle current account balances</li>
                <li><strong>Receivable securitisation</strong> — for large concentrated receivable portfolios</li>
            </ul>

            <h3>Optimising Current Liabilities (Carefully)</h3>
            <ul>
                <li><strong>Renegotiate non-MSE supplier terms</strong> — push from 30 to 60 days during contract renewal</li>
                <li><strong>Supply chain finance arrangements</strong> — bank pays supplier early, buyer pays bank later</li>
                <li><strong>Avoid stretching MSE payables</strong> — Section 15/16/43B(h) penalties exceed working-capital benefit</li>
                <li><strong>Optimise short-term borrowing mix</strong> — CC, OD, WCDL, commercial paper, supply chain finance</li>
                <li><strong>Synchronise statutory payments</strong> — pay GST, TDS, EPF on due dates, not earlier</li>
            </ul>

            <h3>The Compounding Effect</h3>
            <p>A 5% reduction in inventory + 5-day reduction in DSO + 10-day extension in DPO (non-MSE only) typically compounds to a 12-15% reduction in Working Capital tied up. For a company with ₹500 crore annual revenue and 60-day CCC, this releases approximately ₹10-12 crore — enough to fund a year of capex or repay a meaningful tranche of high-cost short-term debt.</p>

            <div class="callout">
                <p><strong>CA Tip:</strong> Set Working Capital efficiency as a board-level KPI for the CFO. Monitor monthly using flash data, with quarterly audited validation against Schedule III ratios. The most effective measure is "Working Capital Days" = (NWC × 365) ÷ Revenue. Track against same-industry listed peers and historical 12-quarter rolling trend for early-warning signals.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Working Capital</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Working Capital and how is it calculated?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Working Capital is the surplus of Current Assets over Current Liabilities — the cash and short-term resources available to fund day-to-day operations. The formula is Working Capital equals Current Assets less Current Liabilities. Gross Working Capital is total Current Assets, while Net Working Capital deducts Current Liabilities. A positive Working Capital indicates the company can comfortably meet short-term obligations. Negative Working Capital signals liquidity stress unless deliberately engineered (modern retail) through supplier credit dominance and rapid cash conversion.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Are Working Capital ratios disclosed under Schedule III?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Two of the eleven mandatory Schedule III analytical ratios are direct working-capital metrics — Current Ratio (Current Assets divided by Current Liabilities) and Net Capital Turnover Ratio (Revenue from Operations divided by Working Capital). Both are mandatory under MCA notification dated 24 March 2021, effective FY 2021-22. Material change of more than 25 per cent year-on-year requires written explanation in the notes to accounts. Quick Ratio is voluntary, often disclosed in MD&amp;A by listed companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Tandon Committee Method 2 for MPBF?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Tandon Committee Method 2 computes Maximum Permissible Bank Finance as 75 per cent of Total Current Assets less Other Current Liabilities (OCL excludes short-term bank borrowings). The borrower contributes 25 per cent of Total Current Assets from long-term funds, ensuring minimum Current Ratio of 1.33:1. The Chore Committee 1979 made Method 2 the standard for borrowers with working capital limits exceeding fifty lakhs from the banking system. Most Indian commercial banks follow Method 2 for mid-corporate working capital appraisal.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between Tandon Method 1 and Method 2?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Tandon Method 1 funds 75 per cent of Working Capital Gap (Current Assets less Other Current Liabilities), with the borrower contributing 25 per cent of the gap from long-term funds. Minimum Current Ratio is 1:1. Method 2 funds 75 per cent of Total Current Assets less Other Current Liabilities, requiring 25 per cent margin from total current assets. Minimum Current Ratio is 1.33:1. Method 2 is more conservative and is now standard. Method 1 is permitted only for sub-fifty-lakh facilities.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the Nayak Committee turnover method for working capital?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Nayak Committee turnover method, formalised by RBI for MSME borrowers, computes working-capital requirement as 25 per cent of projected annual turnover, with banks funding 20 per cent (four-fifth of WC need) and the borrower contributing 5 per cent margin. The method applies to MSME working-capital limits up to seven point five crore rupees. It is simpler than Tandon Methods because it does not require detailed CMA data. Most public-sector banks default to Nayak below the threshold.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is a good Current Ratio for an Indian company?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A Current Ratio of 1.33 to 2.00 is generally considered healthy for Indian non-financial companies, providing comfortable short-term liquidity coverage. Below 1.33 signals liquidity stress and breaches typical bank covenant floors. Above 3.00 may indicate inefficient working-capital management — excess inventory, slow receivables, or idle cash. Industry benchmarking matters: IT services often show high Current Ratios due to limited inventory, while modern retail typically shows below 1.0 driven by extended supplier credit cycles.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Net Capital Turnover Ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Net Capital Turnover Ratio equals Revenue from Operations divided by Net Working Capital. It measures how efficiently the company generates revenue from its working-capital investment. Higher turnover means more revenue per rupee of working capital tied up. The ratio is one of eleven mandatory Schedule III analytical ratios introduced by MCA notification dated 24 March 2021. A change exceeding 25 per cent year-on-year requires written explanation in the notes to accounts of the audited financial statements.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does MSMED Act 2006 affect Current Liabilities?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule III Division II requires separate disclosure of Trade Payables to Micro and Small Enterprises versus other suppliers. MSE payables outstanding beyond 45 days breach Section 15 of the MSMED Act 2006, attracting compound interest at three times the RBI bank rate under Section 16, tax disallowance under Section 43B(h) of Income Tax Act, and half-yearly Form MSME-1 reporting to MCA. A high MSE payable balance inflates working capital but creates regulatory and tax exposure that must be disclosed and managed.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Working Capital Gap and how is it different from Working Capital?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Working Capital equals Current Assets less Current Liabilities (all of them). Working Capital Gap equals Current Assets less Other Current Liabilities, where Other Current Liabilities exclude short-term bank borrowings. The gap is the amount that needs financing — through long-term funds or bank borrowings. Banks use the Working Capital Gap concept when assessing eligible MPBF under Tandon Methods. The gap is structurally larger than Working Capital because bank borrowings are excluded from the deduction side.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should excess Working Capital be reduced?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Excess Working Capital ties up funds that could earn higher returns elsewhere or repay expensive debt. A Current Ratio above 3.0 typically signals over-investment in inventory, slow receivables, or idle cash balances. Action items include inventory rationalisation under Ind AS 2, faster collection through TReDS or factoring, dividend distribution if cash is genuinely surplus, share buyback if shareholder return is preferred, or debt prepayment if leverage is high. Working capital should be sufficient, not abundant.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does Working Capital relate to Cash Conversion Cycle?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Working Capital and Cash Conversion Cycle are two views of the same operational reality. Working Capital is the absolute rupee amount of operating funds tied up. CCC is the duration in days for which they are tied up. The two are mathematically linked — Working Capital approximately equals Annual Revenue multiplied by CCC divided by 365. Reducing CCC reduces Working Capital tied up. Use Working Capital for absolute funding sizing and CCC for benchmarking efficiency across companies of different scales.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is Quick Ratio and when is it preferred over Current Ratio?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Quick Ratio (also called Acid-Test Ratio) equals Current Assets less Inventory divided by Current Liabilities. It is a stricter liquidity measure that ignores inventory because inventory cannot always be quickly converted to cash, especially specialised, slow-moving, or obsolete stock. Quick Ratio is preferred for industries where inventory is a large component of current assets — manufacturing, retail, pharma. A Quick Ratio above 1.0 indicates the company can meet short-term obligations without selling inventory.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Which line items go into Current Assets and Current Liabilities under Schedule III?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Ind AS Schedule III Division II, Current Assets include Inventories, Current Investments, Trade Receivables, Cash and Cash Equivalents, Other Bank Balances, Loans, Other Financial Assets and Other Current Assets like prepaid expenses and GST credit receivable. Current Liabilities include Short-term Borrowings, Trade Payables (split MSE and non-MSE), Lease Liabilities, Other Financial Liabilities, Current Tax Liabilities, Provisions and Other Current Liabilities. Items expected to be settled within twelve months from the reporting date are classified as current.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need CMA Data or Bank Limit Help?</h3>
            <p>Get CA-led CMA data preparation, MPBF computation, working capital optimisation studies and bank facility renewal documentation — fixed-fee.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Working%20Capital%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Working%20Capital%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Working%20Capital%20Calculator.%20I%20need%20help%20with%20financial%20ratio%20analysis%2C%20Schedule%20III%20disclosures%20and%20CARO%202020%20compliance.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Accounting &amp; Bookkeeping<span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/stock-audit" class="sidebar-link">Stock Audit<span class="arrow">→</span></a>
            <a href="/msme-registration" class="sidebar-link">MSME Registration<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/cash-conversion-cycle-calculator" class="sidebar-link">Cash Conversion Cycle<span class="arrow">→</span></a>
            <a href="/tools/dscr-calculator" class="sidebar-link">DSCR Calculator<span class="arrow">→</span></a>
            <a href="/tools/debt-to-equity-calculator" class="sidebar-link">Debt to Equity Calculator<span class="arrow">→</span></a>
            <a href="/tools/ebitda-margin-calculator" class="sidebar-link">EBITDA Margin Calculator<span class="arrow">→</span></a>
            <a href="/tools/balance-sheet-generator" class="sidebar-link">Balance Sheet Generator<span class="arrow">→</span></a>
            <a href="/tools/cash-flow-calculator" class="sidebar-link">Cash Flow Statement<span class="arrow">→</span></a>
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
    setupToggleGroup('industryGroup');

    function fmtINR(n) {
        if (n === undefined || n === null || isNaN(n)) return '₹0';
        const sign = n < 0 ? '-' : '';
        const abs = Math.abs(n);
        return sign + '₹' + abs.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function fmtRatio(n, suffix) {
        if (!isFinite(n)) return '—';
        return n.toFixed(2) + (suffix || '');
    }
    function fmtPct(n, decimals) {
        if (!isFinite(n)) return '—';
        decimals = decimals === undefined ? 1 : decimals;
        const sign = n > 0 ? '+' : '';
        return sign + n.toFixed(decimals) + '%';
    }
    function num(id) {
        const v = parseINR(document.getElementById(id).value);
        return isNaN(v) ? 0 : v;
    }

    // Industry benchmarks: Current Ratio bands
    const benchmarks = {
        manufacturing: { crLow: 1.3, crHigh: 2.0, label: 'Manufacturing', note: 'Indian manufacturing peers run Current Ratio 1.3-2.0, with WC 15-30% of revenue.' },
        it: { crLow: 2.5, crHigh: 4.0, label: 'IT / Software', note: 'Indian IT peers run Current Ratio 2.5-4.0 — high cash, low inventory characteristic.' },
        fmcg: { crLow: 1.0, crHigh: 1.5, label: 'FMCG', note: 'Indian FMCG peers run Current Ratio 1.0-1.5, supported by brand-driven supplier credit.' },
        retail: { crLow: 0.8, crHigh: 1.2, label: 'Retail', note: 'Indian retail peers run Current Ratio 0.8-1.2. Modern retail (DMart, Trent) often below 1.0 by design.' },
        pharma: { crLow: 1.5, crHigh: 3.0, label: 'Pharma', note: 'Indian pharma peers run Current Ratio 1.5-3.0 — long distribution chain and regulatory inventory.' },
        realestate: { crLow: 1.5, crHigh: 4.0, label: 'Real Estate', note: 'Indian real estate developers run Current Ratio 1.5-4.0. WIP inventory dominates current assets.' },
        trading: { crLow: 1.2, crHigh: 1.8, label: 'Trading', note: 'Indian trading and distribution peers run Current Ratio 1.2-1.8.' },
        services: { crLow: 1.5, crHigh: 2.5, label: 'Services', note: 'Indian services-sector peers run Current Ratio 1.5-2.5, varying by labour intensity.' }
    };

    function readInputs() {
        return {
            inv: num('caInv'),
            ar: num('caAR'),
            cash: num('caCash'),
            bank: num('caBank'),
            curInv: num('caInv2'),
            otherCA: num('caOther'),
            tpMSE: num('clTpMSE'),
            tpOther: num('clTpOther'),
            borr: num('clBorr'),
            curMat: num('clCurMat'),
            otherCL: num('clOther'),
            prov: num('clProv'),
            revenue: num('revenue'),
            prevWC: parseINR(document.getElementById('prevWC').value),
            industry: getActive('industryGroup') || 'manufacturing'
        };
    }

    function validate(inp) {
        const tca = inp.inv + inp.ar + inp.cash + inp.bank + inp.curInv + inp.otherCA;
        const tcl = inp.tpMSE + inp.tpOther + inp.borr + inp.curMat + inp.otherCL + inp.prov;
        if (tca === 0 && tcl === 0) {
            return 'Please enter at least some current assets or current liabilities.';
        }
        if (tcl === 0) {
            return 'Please enter at least one current liability item.';
        }
        return null;
    }

    function compute(inp) {
        const tca = inp.inv + inp.ar + inp.cash + inp.bank + inp.curInv + inp.otherCA;
        const tpTotal = inp.tpMSE + inp.tpOther;
        const tcl = tpTotal + inp.borr + inp.curMat + inp.otherCL + inp.prov;
        const ocl = tcl - inp.borr;  // OCL = CL excluding bank borrowings

        const nwc = tca - tcl;
        const wcGap = tca - ocl;  // Working Capital Gap

        // Liquidity ratios
        const currentRatio = tcl > 0 ? tca / tcl : 0;
        const quickRatio = tcl > 0 ? (tca - inp.inv) / tcl : 0;
        const cashRatio = tcl > 0 ? (inp.cash + inp.bank + inp.curInv) / tcl : 0;

        // Schedule III ratios
        const ncTurnover = nwc > 0 ? inp.revenue / nwc : 0;

        // Tandon Methods
        const mpbf1 = 0.75 * (tca - ocl);  // 0.75 * WC Gap
        const mpbf2 = (0.75 * tca) - ocl;
        const headroom1 = mpbf1 - inp.borr;
        const headroom2 = mpbf2 - inp.borr;

        // Nayak Method (only meaningful if revenue is reasonable for MSME — say below ₹50 Cr)
        // 25% of turnover is WC need; 20% is bank finance
        const nayakWcNeed = inp.revenue * 0.25;
        const nayakMPBF = inp.revenue * 0.20;

        // YoY variance
        let yoyVar = null, exceeds25 = false;
        if (!isNaN(inp.prevWC) && document.getElementById('prevWC').value !== '' && Math.abs(inp.prevWC) > 0.01) {
            yoyVar = ((nwc - inp.prevWC) / Math.abs(inp.prevWC)) * 100;
            exceeds25 = Math.abs(yoyVar) > 25;
        }

        // MSE check (significant if MSE payables form material portion of TP)
        const msePctOfTP = tpTotal > 0 ? (inp.tpMSE / tpTotal) * 100 : 0;

        return {
            tca, tcl, tpTotal, ocl, nwc, wcGap,
            currentRatio, quickRatio, cashRatio, ncTurnover,
            mpbf1, mpbf2, headroom1, headroom2,
            nayakWcNeed, nayakMPBF,
            yoyVar, exceeds25, msePctOfTP
        };
    }

    function getVerdict(cr, nwc, industry) {
        const b = benchmarks[industry];
        if (!b) return { headline: 'Working Capital Computed', sub: 'See breakdown below.', cls: 'verdict' };
        if (nwc < 0) {
            if (industry === 'retail') return { headline: 'Negative WC — Retail Model', sub: 'Negative working capital characteristic of modern retail. Verify supplier credit terms are sustainable.', cls: 'blue' };
            return { headline: 'Negative Working Capital — Liquidity Stress', sub: 'Current Liabilities exceed Current Assets. Urgent funding plan required to meet short-term obligations.', cls: 'red' };
        }
        if (cr < 1.0) return { headline: 'Critical — Below 1:1 Coverage', sub: 'Current Assets below Current Liabilities. Solvency concern — engage CA review immediately.', cls: 'red' };
        if (cr < b.crLow) return { headline: 'Below Industry Band', sub: 'Current Ratio trails ' + b.label + ' peers. Investigate liquidity drivers and bank covenant headroom.', cls: 'amber' };
        if (cr <= b.crHigh) return { headline: 'In Line with Industry', sub: 'Current Ratio sits within typical ' + b.label + ' range. Healthy liquidity position.', cls: 'verdict' };
        if (cr <= b.crHigh * 1.5) return { headline: 'Above Industry — Possibly Inefficient', sub: 'Strong liquidity but possible over-investment in working capital. Review inventory and receivables ageing.', cls: 'amber' };
        return { headline: 'Materially Above Industry', sub: 'Excess working capital tying up funds. Consider deployment via dividend, capex, or debt prepayment.', cls: 'amber' };
    }

    function getBenchmarkBanner(cr, industry) {
        const b = benchmarks[industry];
        if (!b) return null;
        let cls, msg;
        if (cr < b.crLow) {
            cls = 'warn';
            msg = '<strong>⚠ Below industry band.</strong> Your Current Ratio of <strong>' + fmtRatio(cr) + '</strong> is below the typical ' + b.label + ' band of ' + b.crLow + ' to ' + b.crHigh + '. ' + b.note;
        } else if (cr <= b.crHigh) {
            cls = 'success';
            msg = '<strong>✓ In line with industry.</strong> Your Current Ratio of <strong>' + fmtRatio(cr) + '</strong> sits within the typical ' + b.label + ' band of ' + b.crLow + ' to ' + b.crHigh + '. ' + b.note;
        } else {
            cls = 'info';
            msg = '<strong>↑ Above industry band.</strong> Your Current Ratio of <strong>' + fmtRatio(cr) + '</strong> exceeds the typical ' + b.label + ' band of ' + b.crLow + ' to ' + b.crHigh + '. May indicate excess working capital — review inventory ageing, slow receivables, idle cash.';
        }
        return { cls: cls, html: msg };
    }

    function getMSMEDBanner(tpMSE, tpTotal, mseShare) {
        if (tpMSE <= 0) return null;
        if (mseShare < 5) return null;  // Negligible MSE exposure
        if (mseShare < 25) {
            return { cls: 'info', html: '<strong>ℹ MSE Trade Payables: ' + fmtINR(tpMSE) + ' (' + mseShare.toFixed(1) + '% of total TP).</strong> Verify all MSE dues are within Section 15 of MSMED Act 2006 (45-day cap, or 15 days without written agreement). File Form MSME-1 half-yearly to MCA if any dues exceed 45 days.' };
        }
        if (mseShare < 50) {
            return { cls: 'warn', html: '<strong>⚠ Material MSE Exposure: ' + fmtINR(tpMSE) + ' (' + mseShare.toFixed(1) + '% of total TP).</strong> Significant MSE dependence. Review ageing schedule — MSE dues beyond 45 days trigger Section 16 compound interest at 3× RBI bank rate, Section 43B(h) tax disallowance, and Form MSME-1 reporting. <a href="#msmed" style="color:#78350F;text-decoration:underline;">Read more →</a>' };
        }
        return { cls: 'danger', html: '<strong>✗ High MSE Concentration: ' + fmtINR(tpMSE) + ' (' + mseShare.toFixed(1) + '% of total TP).</strong> Majority of trade payables are to MSE suppliers. Critical to verify all dues are within Section 15 limits. Cumulative Section 16 interest exposure can be substantial. Mandatory Form MSME-1 reporting if any dues delayed.' };
    }

    function buildComposition(r, inp) {
        const tca = r.tca, tcl = r.tcl;
        const max = Math.max(tca, tcl, 1);
        function bar(label, val, denom, cls) {
            const w = (val / denom) * 100;
            return '<div class="comp-bar-row"><div class="comp-bar-label">' + label + '</div><div class="comp-bar-track"><div class="comp-bar-fill ' + cls + '" style="width: ' + Math.min(100, (val / max) * 100) + '%;"></div></div><div class="comp-bar-value">' + fmtINR(val) + '</div></div>';
        }
        let html = '<div style="font-size:11px;font-weight:700;color:var(--info);margin-bottom:6px;text-transform:uppercase;letter-spacing:0.5px;">Current Assets — Total ' + fmtINR(tca) + '</div>';
        html += bar('Inventory', inp.inv, max, 'ca-inv');
        html += bar('Trade Receivables', inp.ar, max, 'ca-ar');
        html += bar('Cash + Bank', inp.cash + inp.bank, max, 'ca-cash');
        html += bar('Other CA', inp.curInv + inp.otherCA, max, 'ca-other');
        html += '<div style="font-size:11px;font-weight:700;color:var(--danger);margin:14px 0 6px;text-transform:uppercase;letter-spacing:0.5px;">Current Liabilities — Total ' + fmtINR(tcl) + '</div>';
        html += bar('Trade Payables', r.tpTotal, max, 'cl-tp');
        html += bar('ST Borrowings', inp.borr + inp.curMat, max, 'cl-borr');
        html += bar('Other CL + Provisions', inp.otherCL + inp.prov, max, 'cl-other');
        return html;
    }

    function buildSummaryGrid(r, inp) {
        const cards = [
            { label: 'Net Working Capital', value: fmtINR(r.nwc), highlight: true },
            { label: 'Total Current Assets', value: fmtINR(r.tca) },
            { label: 'Total Current Liabilities', value: fmtINR(r.tcl) },
            { label: 'Cash Ratio', value: fmtRatio(r.cashRatio) },
            { label: 'Trade Payables (Total)', value: fmtINR(r.tpTotal) },
            { label: 'Industry', value: benchmarks[inp.industry] ? benchmarks[inp.industry].label : '—' }
        ];
        return cards.map(c => '<div class="summary-card' + (c.highlight ? ' highlight' : '') + '"><div class="summary-label">' + c.label + '</div><div class="summary-value">' + c.value + '</div></div>').join('');
    }

    function buildBasisText(inp, r) {
        return 'Computed using Schedule III Division II to the Companies Act, 2013. <strong>NWC</strong> = TCA ' + fmtINR(r.tca) + ' − TCL ' + fmtINR(r.tcl) + ' = <strong>' + fmtINR(r.nwc) + '</strong>. <strong>Current Ratio</strong> = ' + fmtINR(r.tca) + ' / ' + fmtINR(r.tcl) + ' = <strong>' + fmtRatio(r.currentRatio) + '</strong>. <strong>Quick Ratio</strong> (excluding inventory ' + fmtINR(inp.inv) + ') = <strong>' + fmtRatio(r.quickRatio) + '</strong>. <strong>Working Capital Gap</strong> (TCA − OCL excluding bank borrowings) = <strong>' + fmtINR(r.wcGap) + '</strong>. <strong>Tandon Method 1 MPBF</strong> = 0.75 × WC Gap = <strong>' + fmtINR(r.mpbf1) + '</strong> (min CR 1:1). <strong>Tandon Method 2 MPBF</strong> = (0.75 × TCA) − OCL = <strong>' + fmtINR(r.mpbf2) + '</strong> (min CR 1.33:1, Chore 1979 standard).' + (inp.revenue > 0 ? ' <strong>Net Capital Turnover</strong> = ' + fmtINR(inp.revenue) + ' / ' + fmtINR(r.nwc) + ' = <strong>' + fmtRatio(r.ncTurnover, '×') + '</strong>.' : '');
    }

    function buildDisclosureRows(r, inp) {
        return [
            '<tr><td>Current Ratio (Mandatory)</td><td>Current Assets</td><td>Current Liabilities</td><td class="num">' + fmtRatio(r.currentRatio) + '</td><td class="num">—</td></tr>',
            '<tr><td>Net Capital Turnover Ratio (Mandatory)</td><td>Revenue from Operations</td><td>Net Working Capital</td><td class="num">' + (inp.revenue > 0 ? fmtRatio(r.ncTurnover, ' times') : '—') + '</td><td class="num">—</td></tr>',
            '<tr><td>Quick Ratio (Voluntary, MD&amp;A)</td><td>Current Assets − Inventory</td><td>Current Liabilities</td><td class="num">' + fmtRatio(r.quickRatio) + '</td><td class="num">—</td></tr>'
        ].join('');
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

        // Verdict
        const v = getVerdict(r.currentRatio, r.nwc, inp.industry);
        const vc = document.getElementById('verdictCard');
        vc.className = 'verdict-card' + (v.cls && v.cls !== 'verdict' ? ' ' + v.cls : '');
        document.getElementById('verdictHeadline').textContent = 'WC = ' + fmtINR(r.nwc) + ' — ' + v.headline;
        document.getElementById('verdictSub').textContent = v.sub;
        document.getElementById('currentRatioVal').textContent = fmtRatio(r.currentRatio);
        document.getElementById('quickRatioVal').textContent = fmtRatio(r.quickRatio);
        document.getElementById('ncTurnoverVal').textContent = inp.revenue > 0 ? fmtRatio(r.ncTurnover, '×') : '—';

        // Composition bars
        document.getElementById('compositionContainer').innerHTML = buildComposition(r, inp);

        // MPBF card
        document.getElementById('wcGap').textContent = fmtINR(r.wcGap);
        document.getElementById('mpbf1').textContent = fmtINR(r.mpbf1);
        document.getElementById('mpbf2').textContent = fmtINR(r.mpbf2);
        document.getElementById('existingBorr').textContent = fmtINR(inp.borr);
        const borrComp = document.getElementById('borrComparison');
        if (inp.borr > 0) {
            const headroom = r.mpbf2 - inp.borr;
            if (headroom >= 0) {
                borrComp.innerHTML = '<strong style="color:#065F46;">+' + fmtINR(headroom) + ' headroom under Method 2</strong>';
            } else {
                borrComp.innerHTML = '<strong style="color:#991B1B;">' + fmtINR(headroom) + ' over Method 2 limit</strong>';
            }
        } else {
            borrComp.textContent = 'No existing ST borrowings';
        }

        // Summary grid
        document.getElementById('summaryGrid').innerHTML = buildSummaryGrid(r, inp);

        // Benchmark banner
        const bb = getBenchmarkBanner(r.currentRatio, inp.industry);
        const bbEl = document.getElementById('benchmarkBanner');
        if (bb) {
            bbEl.className = 'info-banner ' + bb.cls;
            bbEl.innerHTML = bb.html;
            bbEl.style.display = 'block';
        } else {
            bbEl.style.display = 'none';
        }

        // MSMED banner
        const ms = getMSMEDBanner(inp.tpMSE, r.tpTotal, r.msePctOfTP);
        const msEl = document.getElementById('msmedBanner');
        if (ms) {
            msEl.className = 'info-banner ' + ms.cls;
            msEl.innerHTML = ms.html;
            msEl.style.display = 'block';
        } else {
            msEl.style.display = 'none';
        }

        // Variance banner
        const vbEl = document.getElementById('varianceBanner');
        if (r.yoyVar !== null) {
            const cls = r.exceeds25 ? 'warn' : 'info';
            const msg = r.exceeds25
                ? '<strong>⚠ 25% threshold breached.</strong> Working Capital moved from ' + fmtINR(inp.prevWC) + ' to ' + fmtINR(r.nwc) + ' (' + fmtPct(r.yoyVar) + '). Schedule III requires written explanation in the notes to accounts since at least one component ratio likely exceeded 25% variance.'
                : '<strong>Within 25% threshold.</strong> Working Capital moved from ' + fmtINR(inp.prevWC) + ' to ' + fmtINR(r.nwc) + ' (' + fmtPct(r.yoyVar) + '). No mandatory Schedule III explanation required, but check Current Ratio and Net Capital Turnover changes individually.';
            vbEl.className = 'info-banner ' + cls;
            vbEl.innerHTML = msg;
            vbEl.style.display = 'block';
        } else {
            vbEl.style.display = 'none';
        }

        // Nayak banner — show when revenue is provided and falls within MSME-relevant range
        const nayakEl = document.getElementById('nayakBanner');
        if (inp.revenue > 0 && inp.revenue <= 750000000) { // ₹75 Cr
            nayakEl.className = 'info-banner info';
            nayakEl.innerHTML = '<strong>Nayak Committee (Turnover Method) Assessment:</strong> Working Capital Need = 25% × Revenue = <strong>' + fmtINR(r.nayakWcNeed) + '</strong>. Eligible Bank Finance = 20% × Revenue = <strong>' + fmtINR(r.nayakMPBF) + '</strong>. Borrower Margin = 5% × Revenue = <strong>' + fmtINR(inp.revenue * 0.05) + '</strong>. (Applicable to MSME borrowers up to ₹5-7.5 Cr WC limit; above this, Tandon Method 2 applies.)';
            nayakEl.style.display = 'block';
        } else {
            nayakEl.style.display = 'none';
        }

        // Basis
        document.getElementById('basisText').innerHTML = buildBasisText(inp, r);

        // Disclosure
        document.getElementById('disclosureRows').innerHTML = buildDisclosureRows(r, inp);

        result.classList.add('visible');
        setTimeout(function() { result.scrollIntoView({behavior: 'smooth', block: 'start'}); }, 80);
    }

    function reset() {
        ['caInv', 'caAR', 'caCash', 'caBank', 'caInv2', 'caOther', 'clTpMSE', 'clTpOther', 'clBorr', 'clCurMat', 'clOther', 'clProv', 'revenue', 'prevWC'].forEach(id => {
            document.getElementById(id).value = '';
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
