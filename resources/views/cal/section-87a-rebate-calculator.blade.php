
@extends('layouts.app')
@section('meta')

    <title>Section 87A Rebate Calculator | FY 2025-26 Old &amp; New</title>
    <meta name="description" content="Section 87A rebate calculator for FY 2025-26 (AY 2026-27): compute tax rebate under old (₹12,500) and new regime (₹60,000), with marginal relief. Free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/section-87a-rebate-calculator">

    <!-- Open Graph -->
    <meta property="og:title" content="Section 87A Rebate Calculator — Old &amp; New Regime FY 2025-26">
    <meta property="og:description" content="Calculate your Section 87A rebate under both regimes — ₹12,500 (old) and ₹60,000 (new) — with full marginal relief computation for FY 2025-26.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/section-87a-rebate-calculator">
    <meta property="og:image" content="/tools/og/section-87a-rebate-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Section 87A Rebate Calculator — Old &amp; New Regime FY 2025-26">
    <meta name="twitter:description" content="Calculate your Section 87A rebate under both regimes — ₹12,500 (old) and ₹60,000 (new) — with full marginal relief computation.">
    <meta name="twitter:image" content="/tools/og/section-87a-rebate-calculator.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')

    <!-- Schema: WebApplication -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Section 87A Rebate Calculator",
      "description": "Section 87A Rebate Calculator computes the income tax rebate available to resident individuals under both the old tax regime (up to ₹12,500 for income up to ₹5 lakh) and the new tax regime (up to ₹60,000 for income up to ₹12 lakh) for FY 2025-26 (AY 2026-27), including marginal relief calculation.",
      "url": "/tools/section-87a-rebate-calculator",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Any",
      "inLanguage": "en-IN",
      "isAccessibleForFree": true,
      "datePublished": "2026-05-06T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR"
      },
      "reviewedBy": {
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
      "provider": {
        "@id": "/#organization"
      }
    }
    </script>

    <!-- Schema: BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "Section 87A Rebate Calculator", "item": "/tools/section-87a-rebate-calculator"}
      ]
    }
    </script>

    <!-- Schema: FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Section 87A and who can claim the rebate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 87A of the Income Tax Act 1961 grants a direct tax rebate to resident individuals whose total income falls within specified thresholds. Only resident individuals qualify — non-residents, HUFs, partnership firms, LLPs, and companies cannot claim it. The rebate reduces the tax payable directly, separately under the old and new regimes, and is applied before the 4 percent health and education cess is added."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Section 87A rebate amount under the new tax regime for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the new tax regime for FY 2025-26 (AY 2026-27), the maximum rebate is ₹60,000 for resident individuals whose total taxable income does not exceed ₹12,00,000. Budget 2025 raised the threshold from ₹7 lakh to ₹12 lakh and the rebate from ₹25,000 to ₹60,000. Effective tax liability becomes zero for income up to ₹12 lakh under the new regime."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Section 87A rebate amount under the old tax regime for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The old regime rebate for FY 2025-26 remains ₹12,500 for resident individuals with total taxable income up to ₹5,00,000 after all deductions under Chapter VI-A (80C, 80D, 80G, etc.). Budget 2025 did not change this. The rebate brings effective tax to zero for income up to ₹5 lakh under the old regime, but standard deduction and HRA exemptions reduce gross income further."
          }
        },
        {
          "@type": "Question",
          "name": "What is marginal relief under Section 87A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Marginal relief ensures that taxpayers whose income marginally exceeds the rebate threshold are not penalised disproportionately. Under the new regime, when income exceeds ₹12 lakh, the additional tax payable is capped at the excess income above ₹12 lakh. This prevents a cliff effect where earning one extra rupee triggers ₹60,000 of tax. The relief phases out around ₹12.70 lakh of taxable income."
          }
        },
        {
          "@type": "Question",
          "name": "Up to what income is marginal relief available under Section 87A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Marginal relief is fully available between ₹12,00,001 and approximately ₹12,70,588 of taxable income under the new regime for FY 2025-26. Beyond this break-even point, normal slab tax becomes lower than the relief cap and standard slab rates apply. For salaried individuals with the ₹75,000 standard deduction, gross salary up to ₹13.45 lakh effectively benefits from marginal relief or full rebate."
          }
        },
        {
          "@type": "Question",
          "name": "Can NRIs claim the Section 87A rebate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 87A is restricted to resident individuals as defined under Section 6 of the Income Tax Act 1961. Non-resident Indians (NRIs), residents but not ordinarily resident (RNOR), and any individual who fails the residency test for the financial year cannot claim the rebate, regardless of income level. NRIs must compute tax at full slab rates without any rebate adjustment under either regime."
          }
        },
        {
          "@type": "Question",
          "name": "Can HUFs or firms claim Section 87A rebate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 87A explicitly limits the rebate to individuals only. Hindu Undivided Families (HUFs), partnership firms, Limited Liability Partnerships (LLPs), Association of Persons (AOPs), Body of Individuals (BOIs), and companies are all excluded. These entities pay tax at applicable rates without any 87A relief, even if their total income falls below the rebate threshold that applies to individuals."
          }
        },
        {
          "@type": "Question",
          "name": "Does Section 87A rebate apply to capital gains taxed at special rates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The rebate applies to tax computed at slab rates only. Long-term capital gains on listed equity under Section 112A (12.5 percent above ₹1.25 lakh from 23 July 2024) and short-term capital gains under Section 111A (20 percent) are taxed at special rates and excluded from the 87A rebate. The same applies to lottery winnings under Section 115BB taxed at 30 percent."
          }
        },
        {
          "@type": "Question",
          "name": "Is the Section 87A rebate calculated before or after health and education cess?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The rebate is applied before the 4 percent health and education cess. Compute slab tax first, deduct the Section 87A rebate (subject to the maximum), then add cess at 4 percent on the net tax. If the rebate fully extinguishes the slab tax, cess is also zero. Surcharge, where applicable, is also added before cess but never on income covered by the rebate."
          }
        },
        {
          "@type": "Question",
          "name": "Can senior citizens claim Section 87A rebate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, resident senior citizens (60 to 80 years) and super senior citizens (above 80) can claim Section 87A on the same income thresholds as other individuals. Under the old regime, super seniors already enjoy a basic exemption of ₹5 lakh, so the rebate is moot for income exactly at ₹5 lakh. Under the new regime, the ₹12 lakh threshold applies regardless of age band."
          }
        },
        {
          "@type": "Question",
          "name": "How do I claim Section 87A rebate while filing my ITR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The rebate is auto-calculated by the e-filing portal once you enter your total income and select the tax regime in your ITR. There is no separate field or form. Verify the computed rebate in the Tax Computation schedule of the ITR before submission. If the portal shows zero rebate but you qualify, recheck your residency declaration and special-rate income classification."
          }
        },
        {
          "@type": "Question",
          "name": "Did Section 87A change in Budget 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Budget 2025 made a major revision under the new regime: the rebate threshold rose from ₹7 lakh to ₹12 lakh, and the maximum rebate from ₹25,000 to ₹60,000. Marginal relief was retained. The old regime rebate of ₹12,500 for income up to ₹5 lakh was unchanged. These changes apply from FY 2025-26 (AY 2026-27) onwards for all eligible resident individuals."
          }
        },
        {
          "@type": "Question",
          "name": "Will Section 87A continue under the Income Tax Act 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The substance of Section 87A is preserved under Section 156 of the Income Tax Act 2025, which becomes effective from 1 April 2026 (Tax Year 2026-27). For FY 2025-26 returns filed in 2026, the existing Section 87A of the 1961 Act applies. Thresholds and rebate amounts may be updated in subsequent Finance Acts; verify current numbers each filing year."
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
        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        .toc-nav {
            background: var(--primary-dark);
            position: sticky;
            top: 0;
            z-index: 100;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        .toc-nav-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 0;
        }
        .toc-nav a {
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            padding: 12px 16px;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
            display: inline-block;
        }
        .toc-nav a:hover, .toc-nav a.active {
            color: #fff;
            border-bottom-color: var(--accent);
        }

        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        .hero {
            max-width: 1200px;
            margin: 0 auto;
            padding: 32px 20px 24px;
        }
        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        .badge-updated {
            background: var(--primary);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 20px;
            letter-spacing: 0.3px;
        }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }

        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span { color: var(--accent); display: inline; }

        .tldr {
            background: var(--card);
            border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 20px 24px;
            margin: 0 auto 32px;
            max-width: 1200px;
            box-shadow: var(--shadow-sm);
        }
        .tldr-label {
            font-family: var(--font-mono);
            font-size: 12px;
            font-weight: 700;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }

        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }
        @media (min-width: 768px) {
            .main-layout { grid-template-columns: 1fr 320px; gap: 40px; }
        }
        .content-col, .sidebar-col { min-width: 0; }

        .calc-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 32px;
            margin-bottom: 40px;
            border: 1px solid var(--border);
        }
        .calc-card h2 {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 8px;
        }
        .calc-intro {
            font-size: 14px;
            color: var(--text-secondary);
            margin-bottom: 24px;
            line-height: 1.65;
        }

        .calc-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }

        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            color: var(--text);
            background: var(--surface);
            transition: border-color 0.2s;
        }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] {
            font-family: var(--font-mono);
            font-size: 18px;
            font-weight: 700;
        }

        .toggle-group {
            display: flex;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
            gap: 4px;
        }
        .toggle-btn {
            flex: 1;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 14px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            -webkit-tap-highlight-color: transparent;
        }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active {
            background: var(--card);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .btn-calculate {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            margin-top: 8px;
        }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .eligibility-banner {
            padding: 16px 20px;
            border-radius: var(--radius);
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .eligibility-banner.eligible {
            background: #D1FAE5;
            color: #065F46;
            border: 1px solid #6EE7B7;
        }
        .eligibility-banner.partial {
            background: #FEF3C7;
            color: #92400E;
            border: 1px solid #FCD34D;
        }
        .eligibility-banner.not-eligible {
            background: #FEE2E2;
            color: #991B1B;
            border: 1px solid #FCA5A5;
        }
        .eligibility-banner .ico {
            font-size: 24px;
            flex-shrink: 0;
        }

        .result-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }
        @media (min-width: 500px) {
            .result-grid { grid-template-columns: 1fr 1fr; }
        }

        .result-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 16px 20px;
            border: 1px solid var(--border);
        }
        .result-card.highlight {
            background: var(--primary);
            border-color: var(--primary);
        }
        .result-card.highlight .result-label,
        .result-card.highlight .result-value { color: #fff; }
        .result-card.savings {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            border-color: var(--accent);
            grid-column: 1 / -1;
        }
        .result-card.savings .result-label { color: var(--primary-dark); font-weight: 700; }
        .result-card.savings .result-value { color: var(--primary-dark); font-size: 28px; }

        .result-label {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }
        .result-value {
            font-family: var(--font-mono);
            font-size: 22px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .result-breakdown {
            margin-top: 16px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 16px 20px;
        }
        .result-breakdown h4 {
            font-size: 14px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .breakdown-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            font-size: 14px;
        }
        .breakdown-row:not(:last-child) { border-bottom: 1px dashed var(--border); }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--text);
        }
        .breakdown-row.total {
            font-weight: 700;
            font-size: 15px;
            padding-top: 12px;
            border-top: 2px solid var(--border) !important;
            margin-top: 4px;
        }
        .breakdown-row.total .breakdown-label { color: var(--primary-dark); }
        .breakdown-row.total .breakdown-value { color: var(--primary-dark); }
        .breakdown-row.deduction .breakdown-value { color: var(--success); }

        .marginal-note {
            margin-top: 16px;
            padding: 14px 18px;
            background: #FFFBEB;
            border-left: 4px solid var(--accent);
            border-radius: 0 var(--radius) var(--radius) 0;
            font-size: 14px;
            color: #92400E;
        }
        .marginal-note strong { color: #78350F; }

        .btn-reset {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-top: 16px;
            padding: 8px 16px;
            border: 1px solid var(--border);
            border-radius: 8px;
            background: var(--card);
            color: var(--text-muted);
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }

        .content-section {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 32px;
            margin-bottom: 32px;
            border: 1px solid var(--border);
        }
        .content-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 16px;
            line-height: 1.3;
        }
        .content-section h3 {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-dark);
            margin: 20px 0 10px;
        }
        .content-section p {
            font-size: 15px;
            color: var(--text-secondary);
            margin-bottom: 14px;
            line-height: 1.75;
        }
        .content-section ul, .content-section ol {
            margin: 8px 0 16px 24px;
            color: var(--text-secondary);
            font-size: 15px;
            line-height: 1.75;
        }
        .content-section li { margin-bottom: 6px; }
        .content-section a {
            color: var(--primary-light);
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        .rate-table {
            width: 100%;
            border-collapse: collapse;
            margin: 16px 0;
            font-size: 14px;
        }
        .rate-table thead th {
            background: var(--primary);
            color: #fff;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td {
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            color: var(--text-secondary);
        }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }

        .formula-box {
            background: var(--primary-dark);
            color: #fff;
            border-radius: var(--radius);
            padding: 20px 24px;
            margin: 16px 0;
            font-family: var(--font-mono);
            font-size: 14px;
            line-height: 1.8;
            overflow-x: auto;
        }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }

        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }

        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        .faq-item {
            background: var(--surface);
            border-radius: var(--radius);
            margin-bottom: 10px;
            border: 1px solid var(--border);
            overflow: hidden;
            transition: box-shadow 0.2s;
        }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 16px 20px;
            border: none;
            background: none;
            font-family: var(--font-body);
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            cursor: pointer;
            text-align: left;
            line-height: 1.4;
            gap: 12px;
            -webkit-tap-highlight-color: transparent;
        }
        .faq-question * { pointer-events: none; }
        .faq-icon {
            flex-shrink: 0;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            transition: transform 0.3s;
        }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }
        .faq-item.open .faq-answer { max-height: 600px; }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        .sidebar-card {
            background: var(--card);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid var(--border);
        }
        .sidebar-card h3 {
            font-size: 16px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 14px;
        }
        .sidebar-link {
            display: block;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.2s;
            margin-bottom: 4px;
            -webkit-tap-highlight-color: rgba(0,0,0,0.05);
            touch-action: manipulation;
        }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--accent);
            color: var(--primary-dark);
            font-weight: 700;
            font-size: 14px;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.2s;
            -webkit-tap-highlight-color: rgba(0,0,0,0.1);
            touch-action: manipulation;
        }
        .cta-btn:hover { background: var(--accent-light); }

        .body-cta {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 32px;
            margin: 28px 0;
            text-align: center;
        }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }

        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }

        .footer {
            background: var(--primary-dark);
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            padding: 16px 20px;
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box {
            background: #FEE2E2;
            border: 2px solid #DC2626;
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
            color: #991B1B;
            font-weight: 600;
            margin-bottom: 20px;
        }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
        }
    
/* === PATRON CTA SYSTEM (4-placement architecture) === */
.brand-cta-bar { background: #FFEDD5; border-top: 1px solid #FED7AA; border-bottom: 1px solid #FED7AA; padding: 14px 20px; }
.brand-cta-bar-inner { max-width: 1200px; margin: 0 auto; display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
.brand-cta-bar-text { flex: 1 1 320px; font-size: 14px; color: var(--text); line-height: 1.45; }
.brand-cta-bar-text strong { color: var(--text); font-weight: 700; }
.brand-cta-bar-actions { display: flex; gap: 10px; flex-wrap: wrap; }
.brand-cta-btn { display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 11px 18px; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 700; text-decoration: none; border: 0; cursor: pointer; transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.2s ease; -webkit-tap-highlight-color: transparent; touch-action: manipulation; white-space: nowrap; line-height: 1.2; min-height: 44px; }
.brand-cta-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.12); }
.brand-cta-btn:active { transform: translateY(0); }
.brand-cta-btn .ico { width: 16px; height: 16px; flex-shrink: 0; }
.brand-cta-btn-call { background: var(--accent); color: #fff; }
.brand-cta-btn-call:hover { background: var(--accent-light); color: #fff; }
.brand-cta-btn-wa { background: #25D366; color: #fff; }
.brand-cta-btn-wa:hover { background: #1FB855; color: #fff; }
.brand-cta-btn-email { background: #fff; color: var(--text); border: 1px solid #E5D6C5; }
.brand-cta-btn-email:hover { background: #FAFAF8; color: var(--text); }
.brand-cta-stack { display: flex; flex-direction: column; gap: 8px; }
.brand-cta-stack .brand-cta-btn { width: 100%; }
.body-cta .brand-cta-bar-actions { justify-content: center; margin-top: 4px; }
.body-cta .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.body-cta .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }
.cta-card .brand-cta-btn-email { background: rgba(255,255,255,0.95); border-color: rgba(255,255,255,0.95); }
.cta-card .brand-cta-btn-email:hover { background: #fff; border-color: #fff; }
.post-result-cta { background: #FFF7ED; border: 1px solid #FED7AA; border-left: 4px solid var(--accent); border-radius: var(--radius); padding: 18px 20px; margin: 20px 0 4px; }
.post-result-cta-head { font-size: 15px; font-weight: 700; color: var(--text); margin-bottom: 4px; line-height: 1.4; }
.post-result-cta-sub { font-size: 13px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.55; }
.post-result-cta .brand-cta-bar-actions { gap: 8px; }

@media (max-width: 767px) {
    .brand-cta-bar { padding: 12px 14px; }
    .brand-cta-bar-text { font-size: 13px; flex-basis: 100%; }
    .brand-cta-bar-actions { width: 100%; gap: 8px; }
    .brand-cta-bar .brand-cta-btn { flex: 1 1 0; padding: 10px 8px; font-size: 12.5px; min-width: 0; min-height: 44px; }
    .brand-cta-bar .brand-cta-btn-call { flex: 1 1 100%; }
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta { padding: 16px; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}
@media (min-width: 768px) and (max-width: 950px) {
    .body-cta .brand-cta-bar-actions { flex-direction: column; }
    .body-cta .brand-cta-btn { width: 100%; }
    .post-result-cta .brand-cta-bar-actions { flex-direction: column; }
    .post-result-cta .brand-cta-btn { width: 100%; }
}

/* === A11y: visible keyboard focus rings (WCAG 2.4.7) — replaces removed focus-suppression === */
.form-group input:focus-visible, .form-group select:focus-visible { outline: 2px solid var(--primary-light); outline-offset: 2px; border-color: var(--primary-light); }
.brand-cta-btn:focus-visible, .cta-btn:focus-visible, button.faq-question:focus-visible, .toc-nav a:focus-visible, .sidebar-link:focus-visible, .breadcrumb a:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }

/* === A11y: reduced-motion (WCAG 2.3.3) === */
@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior: auto !important; }
}

/* === Print stylesheet (calculator working-paper output) === */
@media print {
    .toc-nav, .breadcrumb, .brand-cta-bar, .post-result-cta, .body-cta, .cta-card, .sidebar-card, .sidebar-col, .office-strip, .footer { display: none !important; }
    body { background: #fff !important; color: #000 !important; }
    .main-layout { display: block !important; }
    .content-col { width: 100% !important; max-width: none !important; }
    a { color: #000 !important; text-decoration: underline; }
    .calc-card, .result-section, .result-card, .working-paper, .formula-box { box-shadow: none !important; border: 1px solid #ccc !important; page-break-inside: avoid; }
}

/* === Office strip (Phase 5 — was missing from all 10 tools) === */
.office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
.office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
.office-strip .trust { color: var(--accent); font-weight: 600; }

/* === Mobile tap reliability — addresses keyboard-open + tap quirks on iOS Quick Look + reduces 300ms tap-delay === */
button, .toggle-btn, .toggle-btn.active, .faq-question, .sidebar-link, .toc-nav a, .breadcrumb a,
.cta-btn, .brand-cta-btn, .btn-calculate, .btn-recompute, .btn-reset, .btn-restart, .btn-back, .btn-next,
.option-btn, .next-btn, .reset-btn { touch-action: manipulation; -webkit-tap-highlight-color: rgba(0,0,0,0.05); }
/* Ensure no accidental ancestor blocks pointer events on toggle/faq containers */
.toggle-group, .toggle-btn, .faq-item, .faq-question { pointer-events: auto; }

/* === Responsive table wrapper (fix mobile horizontal overflow on schedule/rate/recon tables) === */
.table-scroll { overflow-x: auto; -webkit-overflow-scrolling: touch; max-width: 100%; margin: 16px 0; border-radius: var(--radius); }
.table-scroll > table { margin: 0; }
@media (max-width: 767px) {
    .table-scroll { box-shadow: inset -10px 0 8px -10px rgba(0,0,0,0.15); border: 1px solid var(--border); }
    .schedule-table, .rate-table, .recon-table { font-size: 12px; min-width: 480px; }
    .schedule-table thead th, .rate-table thead th, .recon-table thead th,
    .schedule-table tbody td, .rate-table tbody td, .recon-table tbody td { padding: 8px 10px; }
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
</style>
@section('content')

<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#both-regimes">Old vs New</a>
        <a href="#marginal-relief">Marginal Relief</a>
        <a href="#eligibility">Eligibility</a>
        <a href="#how-to-claim">Claim in ITR</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Section 87A Rebate Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Section 87A Rebate Calculator — <span>Old (₹12,500) &amp; New (₹60,000) Regime</span> for FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Eligible for the 87A rebate? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Section%2087A%20Rebate%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=Section%2087A%20Rebate%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Section%2087A%20Rebate%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20Section%2087A%20rebate%20eligibility.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Calculate your <strong>Section 87A tax rebate</strong> instantly under both regimes for FY 2025-26 (AY 2026-27). The old regime caps the rebate at <strong>₹12,500</strong> for income up to ₹5 lakh. Budget 2025 raised the new regime rebate to <strong>₹60,000</strong> for income up to ₹12 lakh, with marginal relief extending the benefit up to roughly ₹12.70 lakh of taxable income. The tool computes slab tax, applies the rebate, calculates marginal relief where applicable, and shows the final tax payable inclusive of the 4% health and education cess.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Calculate Your Section 87A Rebate</h2>
            <p class="calc-intro">Enter your total taxable income (after deductions) and choose your tax regime. The tool applies the correct rebate, marginal relief if applicable, and shows the final tax payable.</p>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or use the manual formulas in the content below.</div>
            </noscript>

            <div class="calc-row">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label>Financial Year</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="2025-26" onclick="setFY(this)">
                            FY 2025-26<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">AY 2026-27 · ITR filing now</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="2026-27" onclick="setFY(this)">
                            FY 2026-27<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">AY 2027-28 · current year planning</small>
                        </button>
                    </div>
                    <span class="helper" style="display:block;font-size:11px;color:var(--text-muted);font-weight:400;margin-top:6px;line-height:1.4;text-transform:none;letter-spacing:0;">Section 87A rebate amounts and slab rates are identical in both years (Budget 2026 made no changes). Toggle is for context — math output is the same.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Tax Regime</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="new" onclick="setRegime(this)">
                            New Regime<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Default for FY 2025-26</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="old" onclick="setRegime(this)">
                            Old Regime<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">With deductions</small>
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Resident Status</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="resident" onclick="setResidency(this)">
                            Resident<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Section 6 of IT Act</small>
                        </button>
                        <button type="button" class="toggle-btn" data-value="nri" onclick="setResidency(this)">
                            Non-Resident<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">NRI / RNOR</small>
                        </button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="income">Total Taxable Income (₹) — after deductions, before rebate</label>
                    <input type="text" id="income" placeholder="e.g. 1200000" autocomplete="off" inputmode="decimal">
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Rebate &amp; Tax</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="eligibility-banner" id="eligBanner">
                    <span class="ico" id="eligIco">✓</span>
                    <span id="eligText">—</span>
                </div>

                <div class="result-grid">
                    <div class="result-card">
                        <div class="result-label">Tax Before Rebate</div>
                        <div class="result-value" id="resTaxBefore">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Section 87A Rebate</div>
                        <div class="result-value" id="resRebate">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Tax After Rebate</div>
                        <div class="result-value" id="resTaxAfter">—</div>
                    </div>
                    <div class="result-card">
                        <div class="result-label">Health &amp; Education Cess (4%)</div>
                        <div class="result-value" id="resCess">—</div>
                    </div>
                    <div class="result-card highlight" style="grid-column: 1 / -1;">
                        <div class="result-label">Total Tax Payable</div>
                        <div class="result-value" id="resTotal">—</div>
                    </div>
                    <div class="result-card savings" id="savingsCard" style="display:none;">
                        <div class="result-label">You Saved via Section 87A</div>
                        <div class="result-value" id="resSavings">—</div>
                    </div>
                </div>

                <div class="result-breakdown" id="breakdown">
                    <h4>Slab-wise Tax Computation</h4>
                    <div id="slabRows"></div>
                </div>

                <div class="marginal-note" id="marginalNote" style="display:none;">
                    <strong>Marginal relief applied:</strong>
                    <span id="marginalText"></span>
                </div>

                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Section 87A Rebate Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Section%2087A%20Rebate%20Calculator.%20Please%20review%20my%20rebate%20eligibility%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%2087A%20Rebate%20Calculator%20%E2%80%94%20Review%20Request&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Section%2087A%20Rebate%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20Section%2087A%20rebate%20eligibility.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How Section 87A Rebate Works in Plain English</h2>
            <p>Section 87A is a direct tax credit, not a deduction. It does not reduce your taxable income — it reduces the tax you owe after slab rates have been applied. The mechanism is straightforward in three steps:</p>
            <ol>
                <li><strong>Compute slab tax.</strong> Apply the slab rates of your chosen regime to your total taxable income.</li>
                <li><strong>Apply the 87A rebate cap.</strong> The rebate is the lower of (a) the actual slab tax computed and (b) the regime ceiling — ₹12,500 under the old regime if income ≤ ₹5,00,000, or ₹60,000 under the new regime if income ≤ ₹12,00,000.</li>
                <li><strong>Add cess.</strong> Health and education cess of 4 percent applies on the residual tax after rebate. If rebate fully extinguishes the tax, cess is also nil.</li>
            </ol>
            <div class="formula-box">
                <span class="label">Old Regime (Income ≤ ₹5,00,000):</span> Rebate = min(Slab Tax, ₹12,500)<br>
                <span class="label">New Regime (Income ≤ ₹12,00,000):</span> Rebate = min(Slab Tax, ₹60,000)<br>
                <span class="label">Final Tax</span> = (Slab Tax − Rebate) + 4% Cess
            </div>
            <h3>Slab Rates Applied by This Calculator</h3>
            <p>Both regimes use the official slab structure for FY 2025-26 (AY 2026-27) as notified by the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Central Board of Direct Taxes (CBDT)</a>. The new regime is the default; you must explicitly opt for the old regime in your ITR if you want to claim deductions like 80C and HRA.</p>
            <div class="callout">
                <p><strong>CA Tip:</strong> Section 87A applies to tax computed at slab rates only. Capital gains taxed at special rates (Section 111A for STCG at 20%, Section 112A for LTCG at 12.5% above ₹1.25 lakh from 23 July 2024) and lottery income (Section 115BB at 30%) are excluded from the rebate. If you have such income, this calculator's rebate amount applies only to the portion of tax computed at slab rates.</p>
            </div>
        </section>

        <section class="content-section" id="both-regimes">
            <h2>Section 87A Under Old vs New Regime — Side by Side</h2>
            <p>The two regimes have very different rebate economics. The old regime offers a modest rebate that disappears beyond ₹5 lakh; the new regime offers a substantial rebate that, combined with marginal relief and standard deduction, makes salaried income up to ₹13.45 lakh effectively tax-free.</p>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Parameter</th><th>Old Regime</th><th>New Regime</th></tr>
                </thead>
                <tbody>
                    <tr><td>Income ceiling for rebate</td><td>₹5,00,000</td><td>₹12,00,000</td></tr>
                    <tr><td>Maximum rebate</td><td>₹12,500</td><td>₹60,000</td></tr>
                    <tr><td>Marginal relief above ceiling</td><td>Not available</td><td>Available up to ~₹12,70,588</td></tr>
                    <tr><td>Standard deduction (salaried)</td><td>₹50,000</td><td>₹75,000</td></tr>
                    <tr><td>Effective tax-free salary (gross)</td><td>₹5,50,000</td><td>₹13,45,588 (approx.)</td></tr>
                    <tr><td>Deductions allowed (80C, 80D, etc.)</td><td>Yes</td><td>Mostly no (limited to 80CCD(2), 80JJAA)</td></tr>
                    <tr><td>Default for FY 2025-26</td><td>Optional, must opt in</td><td>Default regime</td></tr>
                </tbody>
            </table></div>

            <h3>FY 2025-26 New Regime Slabs (Budget 2025)</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Income Slab</th><th>Tax Rate</th></tr>
                </thead>
                <tbody>
                    <tr><td>Up to ₹4,00,000</td><td>Nil</td></tr>
                    <tr><td>₹4,00,001 – ₹8,00,000</td><td>5%</td></tr>
                    <tr><td>₹8,00,001 – ₹12,00,000</td><td>10%</td></tr>
                    <tr><td>₹12,00,001 – ₹16,00,000</td><td>15%</td></tr>
                    <tr><td>₹16,00,001 – ₹20,00,000</td><td>20%</td></tr>
                    <tr><td>₹20,00,001 – ₹24,00,000</td><td>25%</td></tr>
                    <tr><td>Above ₹24,00,000</td><td>30%</td></tr>
                </tbody>
            </table></div>

            <h3>FY 2025-26 Old Regime Slabs (Individual Below 60)</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Income Slab</th><th>Tax Rate</th></tr>
                </thead>
                <tbody>
                    <tr><td>Up to ₹2,50,000</td><td>Nil</td></tr>
                    <tr><td>₹2,50,001 – ₹5,00,000</td><td>5%</td></tr>
                    <tr><td>₹5,00,001 – ₹10,00,000</td><td>20%</td></tr>
                    <tr><td>Above ₹10,00,000</td><td>30%</td></tr>
                </tbody>
            </table></div>
            <p>Senior citizens (60-80) and super seniors (above 80) in the old regime have higher basic exemption limits of ₹3,00,000 and ₹5,00,000 respectively. The new regime offers no age-based concessions.</p>
        </section>

        <section class="content-section" id="marginal-relief">
            <h2>Marginal Relief — The Cliff That Was Made a Slope</h2>
            <p>Without marginal relief, earning even ₹1 above the ₹12 lakh threshold in the new regime would knock out the entire ₹60,000 rebate, creating an absurd cliff where a ₹1 raise costs you ₹60,000 in tax. Section 87A as amended by Budget 2025 explicitly preserves marginal relief to soften this transition.</p>

            <h3>The Mechanic</h3>
            <p>If your taxable income is X (where X &gt; ₹12,00,000) and the slab tax computed on X is T, marginal relief caps your tax at the smaller of T and (X − ₹12,00,000). In effect, the additional tax payable can never exceed the additional income earned above the threshold.</p>
            <div class="formula-box">
                <span class="label">Excess Income (E)</span> = Taxable Income − ₹12,00,000<br>
                <span class="label">Slab Tax (T)</span> = computed on full taxable income<br>
                <span class="label">Tax Payable</span> = min(T, E)<br>
                <span class="label">Marginal Relief</span> = T − min(T, E)
            </div>

            <h3>Worked Examples — New Regime FY 2025-26</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Taxable Income</th><th>Slab Tax</th><th>Excess over ₹12L</th><th>Tax After Relief</th><th>Cess @ 4%</th><th>Total Payable</th></tr>
                </thead>
                <tbody>
                    <tr><td>₹12,00,000</td><td>₹60,000</td><td>—</td><td>₹0 (full rebate)</td><td>₹0</td><td><strong>₹0</strong></td></tr>
                    <tr><td>₹12,10,000</td><td>₹61,500</td><td>₹10,000</td><td>₹10,000 (capped at excess)</td><td>₹400</td><td><strong>₹10,400</strong></td></tr>
                    <tr><td>₹12,50,000</td><td>₹67,500</td><td>₹50,000</td><td>₹50,000 (capped at excess)</td><td>₹2,000</td><td><strong>₹52,000</strong></td></tr>
                    <tr><td>₹12,70,000</td><td>₹70,500</td><td>₹70,000</td><td>₹70,000 (capped at excess)</td><td>₹2,800</td><td><strong>₹72,800</strong></td></tr>
                    <tr><td>₹12,71,000</td><td>₹70,650</td><td>₹71,000</td><td>₹70,650 (slab tax lower)</td><td>₹2,826</td><td><strong>₹73,476</strong></td></tr>
                    <tr><td>₹13,00,000</td><td>₹75,000</td><td>—</td><td>₹75,000 (no relief)</td><td>₹3,000</td><td><strong>₹78,000</strong></td></tr>
                </tbody>
            </table></div>
            <p>The mathematical break-even is at ₹12,70,588 — beyond this, the slab tax is naturally lower than the excess over ₹12 lakh, so marginal relief becomes redundant. Salaried individuals with the ₹75,000 standard deduction effectively benefit up to gross salary of ₹13,45,588.</p>
            <div class="callout warn">
                <p><strong>Note:</strong> Marginal relief applies only under the new regime in FY 2025-26. The old regime has no marginal relief for Section 87A — if your income is even ₹1 above ₹5,00,000, you lose the entire ₹12,500 rebate. This is one of several reasons the new regime is now the default for most salaried taxpayers per <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> Budget 2025 announcements, with details available via <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB</a> press releases.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help Claiming Section 87A?</h3>
    <p>Patron's CAs verify your 87A eligibility, optimise across regimes, and file ITR with the rebate correctly claimed for AY 2026-27. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Section%2087A%20Rebate%20Calculator.%20I%20need%20help%20with%20Section%2087A%20rebate%20eligibility.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%2087A%20Rebate%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Section%2087A%20Rebate%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20Section%2087A%20rebate%20eligibility.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="eligibility">
            <h2>Who Qualifies for Section 87A Rebate</h2>
            <p>Section 87A is one of the most narrowly targeted reliefs in the <a href="https://www.indiacode.nic.in/handle/123456789/2435" target="_blank" rel="noopener">Income Tax Act 1961</a>. Only resident individuals qualify. Every other taxpayer category is excluded by construction. Patron Accounting's CAs, governed by the standards of the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>, recommend verifying eligibility against your residential status and income composition every year before filing.</p>

            <h3>Eligible</h3>
            <ul>
                <li><strong>Resident Individuals</strong> as defined under Section 6 of the Income Tax Act — must satisfy the 182-day or 60+365-day stay tests in India during the financial year.</li>
                <li><strong>Senior citizens (60-80) and super senior citizens (above 80)</strong>, provided they are residents. Higher basic exemption limits in the old regime mean the rebate may be moot for some, but eligibility remains intact.</li>
                <li><strong>Salaried, self-employed, pensioners, freelancers</strong> — no occupation restriction. Anyone filing as an individual taxpayer with income within the threshold qualifies.</li>
            </ul>

            <h3>Not Eligible</h3>
            <ul>
                <li><strong>Non-Resident Indians (NRIs)</strong> and <strong>RNOR</strong> taxpayers — the residency test must be satisfied under Section 6.</li>
                <li><strong>Hindu Undivided Families (HUFs)</strong>, even if their income is below the threshold.</li>
                <li><strong>Partnership firms, LLPs, AOPs, BOIs, companies</strong> — Section 87A is restricted to "individual" assessees only.</li>
                <li><strong>Deemed residents</strong> earning above ₹15 lakh from Indian sources without tax liability elsewhere — the residency provisions of Section 6(1A) deny ordinary resident status; verify with a CA before claiming.</li>
            </ul>

            <h3>Income Components Excluded From Rebate</h3>
            <p>Even if you qualify by residency, the rebate does not cover tax on income taxed at special rates. These include long-term capital gains under Section 112 and 112A, short-term capital gains on listed equity under Section 111A, lottery and game show winnings under Section 115BB, virtual digital asset gains under Section 115BBH, and income from carbon credits under Section 115BBG. The rebate applies only to the slab-rate portion of your tax liability.</p>
        </section>

        <section class="content-section" id="how-to-claim">
            <h2>How to Claim Section 87A Rebate in Your ITR</h2>
            <p>The good news: Section 87A is auto-computed by the Income Tax e-filing portal once you enter your income and select the regime. There is no separate field, no separate schedule, no documentary evidence required.</p>

            <ol>
                <li><strong>Log in</strong> to <a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">incometax.gov.in</a> and start your ITR filing for AY 2026-27.</li>
                <li><strong>Choose your tax regime</strong> at the start of the form. New regime is default; opt for old regime if it's beneficial after running scenarios. Salaried taxpayers can switch each year; business income earners face one-time switching restrictions.</li>
                <li><strong>Enter all income heads</strong> — salary, house property, capital gains, business/profession, other sources. Also reconcile against AIS using our <a href="/tools/ais-reconciliation-tool">AIS Reconciliation Tool</a> first.</li>
                <li><strong>Enter deductions</strong> (only available under old regime — Chapter VI-A: 80C, 80D, 80G, 80E, 80TTA, etc.).</li>
                <li><strong>Verify the Tax Computation Schedule.</strong> The portal shows "Tax Payable on Total Income" → "Rebate u/s 87A" → "Tax after Rebate". Cross-check the rebate amount matches what this calculator shows.</li>
                <li><strong>Check marginal relief applicability.</strong> If your income is between ₹12,00,001 and ₹12,70,588 (new regime), the portal should automatically apply marginal relief. If not shown, recompute using this tool and raise a portal grievance.</li>
                <li><strong>Submit and verify</strong> via Aadhaar OTP, net banking, or DSC. Always download the ITR-V and acknowledgement after submission.</li>
            </ol>

            <div class="callout">
                <p><strong>If you missed claiming the rebate</strong> in an already-filed ITR, you can file a revised return under Section 139(5) before 31 December 2026 for AY 2026-27. For arithmetic errors on rebate computation by CPC, file a rectification under Section 154 — see our <a href="/blog/section-154-rectification-how-to-correct-mistakes-in-your-income-tax-return">Section 154 rectification guide</a>.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions About Section 87A Rebate</h2>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is Section 87A and who can claim the rebate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 87A of the Income Tax Act 1961 grants a direct tax rebate to resident individuals whose total income falls within specified thresholds. Only resident individuals qualify — non-residents, HUFs, partnership firms, LLPs, and companies cannot claim it. The rebate reduces the tax payable directly, separately under the old and new regimes, and is applied before the 4 percent health and education cess is added.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Section 87A rebate amount under the new tax regime for FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under the new tax regime for FY 2025-26 (AY 2026-27), the maximum rebate is ₹60,000 for resident individuals whose total taxable income does not exceed ₹12,00,000. Budget 2025 raised the threshold from ₹7 lakh to ₹12 lakh and the rebate from ₹25,000 to ₹60,000. Effective tax liability becomes zero for income up to ₹12 lakh under the new regime.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is the Section 87A rebate amount under the old tax regime for FY 2025-26?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The old regime rebate for FY 2025-26 remains ₹12,500 for resident individuals with total taxable income up to ₹5,00,000 after all deductions under Chapter VI-A (80C, 80D, 80G, etc.). Budget 2025 did not change this. The rebate brings effective tax to zero for income up to ₹5 lakh under the old regime, but standard deduction and HRA exemptions reduce gross income further.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>What is marginal relief under Section 87A?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Marginal relief ensures that taxpayers whose income marginally exceeds the rebate threshold are not penalised disproportionately. Under the new regime, when income exceeds ₹12 lakh, the additional tax payable is capped at the excess income above ₹12 lakh. This prevents a cliff effect where earning one extra rupee triggers ₹60,000 of tax. The relief phases out around ₹12.70 lakh of taxable income.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Up to what income is marginal relief available under Section 87A?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Marginal relief is fully available between ₹12,00,001 and approximately ₹12,70,588 of taxable income under the new regime for FY 2025-26. Beyond this break-even point, normal slab tax becomes lower than the relief cap and standard slab rates apply. For salaried individuals with the ₹75,000 standard deduction, gross salary up to ₹13.45 lakh effectively benefits from marginal relief or full rebate.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can NRIs claim the Section 87A rebate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Section 87A is restricted to resident individuals as defined under Section 6 of the Income Tax Act 1961. Non-resident Indians (NRIs), residents but not ordinarily resident (RNOR), and any individual who fails the residency test for the financial year cannot claim the rebate, regardless of income level. NRIs must compute tax at full slab rates without any rebate adjustment under either regime.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can HUFs or firms claim Section 87A rebate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Section 87A explicitly limits the rebate to individuals only. Hindu Undivided Families (HUFs), partnership firms, Limited Liability Partnerships (LLPs), Association of Persons (AOPs), Body of Individuals (BOIs), and companies are all excluded. These entities pay tax at applicable rates without any 87A relief, even if their total income falls below the rebate threshold that applies to individuals.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Does Section 87A rebate apply to capital gains taxed at special rates?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The rebate applies to tax computed at slab rates only. Long-term capital gains on listed equity under Section 112A (12.5 percent above ₹1.25 lakh from 23 July 2024) and short-term capital gains under Section 111A (20 percent) are taxed at special rates and excluded from the 87A rebate. The same applies to lottery winnings under Section 115BB taxed at 30 percent.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Is the Section 87A rebate calculated before or after health and education cess?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The rebate is applied before the 4 percent health and education cess. Compute slab tax first, deduct the Section 87A rebate (subject to the maximum), then add cess at 4 percent on the net tax. If the rebate fully extinguishes the slab tax, cess is also zero. Surcharge, where applicable, is also added before cess but never on income covered by the rebate.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Can senior citizens claim Section 87A rebate?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, resident senior citizens (60 to 80 years) and super senior citizens (above 80) can claim Section 87A on the same income thresholds as other individuals. Under the old regime, super seniors already enjoy a basic exemption of ₹5 lakh, so the rebate is moot for income exactly at ₹5 lakh. Under the new regime, the ₹12 lakh threshold applies regardless of age band.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>How do I claim Section 87A rebate while filing my ITR?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The rebate is auto-calculated by the e-filing portal once you enter your total income and select the tax regime in your ITR. There is no separate field or form. Verify the computed rebate in the Tax Computation schedule of the ITR before submission. If the portal shows zero rebate but you qualify, recheck your residency declaration and special-rate income classification.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Did Section 87A change in Budget 2025?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Budget 2025 made a major revision under the new regime: the rebate threshold rose from ₹7 lakh to ₹12 lakh, and the maximum rebate from ₹25,000 to ₹60,000. Marginal relief was retained. The old regime rebate of ₹12,500 for income up to ₹5 lakh was unchanged. These changes apply from FY 2025-26 (AY 2026-27) onwards for all eligible resident individuals.</div></div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)"><span>Will Section 87A continue under the Income Tax Act 2025?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The substance of Section 87A is preserved under Section 156 of the Income Tax Act 2025, which becomes effective from 1 April 2026 (Tax Year 2026-27). For FY 2025-26 returns filed in 2026, the existing Section 87A of the 1961 Act applies. Thresholds and rebate amounts may be updated in subsequent Finance Acts; verify current numbers each filing year.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Reviewed 87A Filing</h3>
    <p>Eligibility check, regime comparison, full rebate claimed — done by a Chartered Accountant, fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Section%2087A%20Rebate%20Calculator.%20I%20need%20help%20with%20Section%2087A%20rebate%20eligibility.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Section%2087A%20Rebate%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Section%2087A%20Rebate%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20Section%2087A%20rebate%20eligibility.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers &amp; Professionals <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Assistance <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/tds-return/" class="sidebar-link">TDS Return Filing <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/old-vs-new-regime-calculator" class="sidebar-link">Old vs New Regime Calculator <span class="arrow">→</span></a>
            <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
            <a href="/tools/tds-on-salary-calculator" class="sidebar-link">TDS on Salary Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/old-regime-vs-regime-ay-2026-27" class="sidebar-link">Old vs New Regime AY 2026-27 <span class="arrow">→</span></a>
            <a href="/blog/income-tax-old-regime-2026-it-rules-changed-math" class="sidebar-link">Old Regime 2026 — Changed Math <span class="arrow">→</span></a>
            <a href="/blog/benefits-of-filing-itr" class="sidebar-link">Why You Should File Your ITR <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
/* === PATRON tolerant numeric parser (handles Indian comma format, ₹ symbol, whitespace) === */
function parseINR(raw) {
    if (raw === undefined || raw === null) return NaN;
    var cleaned = String(raw).replace(/[,\s\u20B9]/g, '');
    if (cleaned === '') return NaN;
    var n = parseFloat(cleaned);
    return isFinite(n) ? n : NaN;
}
function pickPositive(parsed, fallback) {
    return (isFinite(parsed) && parsed > 0) ? parsed : fallback;
}

    let regime = 'new';
    let residency = 'resident';
    let fy = '2025-26';

    function fmtINR(num) {
        if (!isFinite(num)) return '—';
        return '₹' + Math.round(num).toLocaleString('en-IN');
    }

    function setRegime(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        regime = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setResidency(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        residency = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setFY(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        fy = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
        // FY 2025-26 and 2026-27 use identical slabs and rebate per Budget 2026 — no math changes
    }

    // Slab tax computation — FY 2025-26 / AY 2026-27
    function taxOldRegime(income) {
        if (income <= 250000) return { tax: 0, slabs: [] };
        const slabs = [];
        let tax = 0;
        if (income > 250000) {
            const taxable = Math.min(income, 500000) - 250000;
            const t = taxable * 0.05;
            slabs.push({ range: '₹2,50,001 – ₹5,00,000', rate: '5%', taxable, tax: t });
            tax += t;
        }
        if (income > 500000) {
            const taxable = Math.min(income, 1000000) - 500000;
            const t = taxable * 0.20;
            slabs.push({ range: '₹5,00,001 – ₹10,00,000', rate: '20%', taxable, tax: t });
            tax += t;
        }
        if (income > 1000000) {
            const taxable = income - 1000000;
            const t = taxable * 0.30;
            slabs.push({ range: 'Above ₹10,00,000', rate: '30%', taxable, tax: t });
            tax += t;
        }
        return { tax, slabs };
    }

    function taxNewRegime(income) {
        if (income <= 400000) return { tax: 0, slabs: [] };
        const slabs = [];
        let tax = 0;
        if (income > 400000) {
            const taxable = Math.min(income, 800000) - 400000;
            const t = taxable * 0.05;
            slabs.push({ range: '₹4,00,001 – ₹8,00,000', rate: '5%', taxable, tax: t });
            tax += t;
        }
        if (income > 800000) {
            const taxable = Math.min(income, 1200000) - 800000;
            const t = taxable * 0.10;
            slabs.push({ range: '₹8,00,001 – ₹12,00,000', rate: '10%', taxable, tax: t });
            tax += t;
        }
        if (income > 1200000) {
            const taxable = Math.min(income, 1600000) - 1200000;
            const t = taxable * 0.15;
            slabs.push({ range: '₹12,00,001 – ₹16,00,000', rate: '15%', taxable, tax: t });
            tax += t;
        }
        if (income > 1600000) {
            const taxable = Math.min(income, 2000000) - 1600000;
            const t = taxable * 0.20;
            slabs.push({ range: '₹16,00,001 – ₹20,00,000', rate: '20%', taxable, tax: t });
            tax += t;
        }
        if (income > 2000000) {
            const taxable = Math.min(income, 2400000) - 2000000;
            const t = taxable * 0.25;
            slabs.push({ range: '₹20,00,001 – ₹24,00,000', rate: '25%', taxable, tax: t });
            tax += t;
        }
        if (income > 2400000) {
            const taxable = income - 2400000;
            const t = taxable * 0.30;
            slabs.push({ range: 'Above ₹24,00,000', rate: '30%', taxable, tax: t });
            tax += t;
        }
        return { tax, slabs };
    }

    function calculate() {
        const income = parseINR(document.getElementById('income').value);
        if (!isFinite(income) || income < 0) {
            alert('Please enter a valid taxable income amount.');
            return;
        }

        const isResident = residency === 'resident';
        const slabResult = regime === 'old' ? taxOldRegime(income) : taxNewRegime(income);
        const taxBefore = slabResult.tax;

        let rebate = 0;
        let marginalRelief = 0;
        let taxAfter = taxBefore;
        let eligStatus = 'eligible';
        let eligText = '';

        if (!isResident) {
            // NRI — no rebate
            eligStatus = 'not-eligible';
            eligText = 'Not eligible — Section 87A is restricted to resident individuals only. NRIs and RNOR taxpayers must pay full slab tax without any rebate.';
            rebate = 0;
            marginalRelief = 0;
            taxAfter = taxBefore;
        } else if (regime === 'old') {
            if (income <= 500000) {
                rebate = Math.min(taxBefore, 12500);
                taxAfter = taxBefore - rebate;
                eligStatus = 'eligible';
                eligText = 'Eligible for full Section 87A rebate (Old Regime, max ₹12,500). ' + (taxAfter === 0 ? 'Your tax liability is fully extinguished.' : '');
            } else {
                eligStatus = 'not-eligible';
                eligText = 'Not eligible — taxable income exceeds the ₹5,00,000 ceiling for the old regime. The old regime does not have marginal relief; rebate is fully lost above ₹5 lakh.';
            }
        } else {
            // New regime
            if (income <= 1200000) {
                rebate = Math.min(taxBefore, 60000);
                taxAfter = taxBefore - rebate;
                eligStatus = 'eligible';
                eligText = 'Eligible for full Section 87A rebate (New Regime, max ₹60,000). ' + (taxAfter === 0 ? 'Your tax liability is fully extinguished.' : '');
            } else {
                const excess = income - 1200000;
                if (taxBefore > excess) {
                    // Marginal relief applies
                    marginalRelief = taxBefore - excess;
                    taxAfter = excess;
                    eligStatus = 'partial';
                    eligText = 'Marginal relief applied — your income marginally exceeds the ₹12 lakh ceiling. Without relief, your tax would have been ' + fmtINR(taxBefore) + '. With marginal relief, tax is capped at the excess income above ₹12 lakh.';
                } else {
                    // No relief — slab tax already lower than excess
                    eligStatus = 'not-eligible';
                    eligText = 'Not eligible — taxable income is beyond the marginal relief break-even point of approximately ₹12,70,588. Standard slab tax applies in full.';
                }
            }
        }

        const cess = taxAfter * 0.04;
        const totalPayable = taxAfter + cess;

        // Compute "savings" vs no-rebate scenario
        const noRebateCess = taxBefore * 0.04;
        const noRebateTotal = taxBefore + noRebateCess;
        const savings = noRebateTotal - totalPayable;

        // Update banner
        const banner = document.getElementById('eligBanner');
        const ico = document.getElementById('eligIco');
        banner.className = 'eligibility-banner ' + eligStatus;
        ico.textContent = eligStatus === 'eligible' ? '✓' : (eligStatus === 'partial' ? '⚖' : '✕');
        document.getElementById('eligText').textContent = eligText;

        // Update result cards
        document.getElementById('resTaxBefore').textContent = fmtINR(taxBefore);
        document.getElementById('resRebate').textContent = fmtINR(rebate);
        document.getElementById('resTaxAfter').textContent = fmtINR(taxAfter);
        document.getElementById('resCess').textContent = fmtINR(cess);
        document.getElementById('resTotal').textContent = fmtINR(totalPayable);

        // Savings card
        const savingsCard = document.getElementById('savingsCard');
        if (savings > 0 && isResident) {
            savingsCard.style.display = 'block';
            document.getElementById('resSavings').textContent = fmtINR(savings);
        } else {
            savingsCard.style.display = 'none';
        }

        // Marginal relief note
        const margNote = document.getElementById('marginalNote');
        if (marginalRelief > 0) {
            margNote.style.display = 'block';
            document.getElementById('marginalText').textContent =
                ' Tax before marginal relief = ' + fmtINR(taxBefore) +
                '. Excess income above ₹12,00,000 = ' + fmtINR(income - 1200000) +
                '. Marginal relief = ' + fmtINR(marginalRelief) +
                '. Tax capped at ' + fmtINR(taxAfter) + '.';
        } else {
            margNote.style.display = 'none';
        }

        // Slab breakdown
        const slabRows = document.getElementById('slabRows');
        slabRows.innerHTML = '';
        if (slabResult.slabs.length === 0) {
            const div = document.createElement('div');
            div.className = 'breakdown-row';
            div.innerHTML = '<span class="breakdown-label">No tax — income below basic exemption</span><span class="breakdown-value">₹0</span>';
            slabRows.appendChild(div);
        } else {
            slabResult.slabs.forEach(s => {
                const div = document.createElement('div');
                div.className = 'breakdown-row';
                div.innerHTML = '<span class="breakdown-label">' + s.range + ' @ ' + s.rate + ' (on ' + fmtINR(s.taxable) + ')</span><span class="breakdown-value">' + fmtINR(s.tax) + '</span>';
                slabRows.appendChild(div);
            });
            const trow = document.createElement('div');
            trow.className = 'breakdown-row total';
            trow.innerHTML = '<span class="breakdown-label">Slab Tax (Before Rebate)</span><span class="breakdown-value">' + fmtINR(taxBefore) + '</span>';
            slabRows.appendChild(trow);
            if (rebate > 0) {
                const rrow = document.createElement('div');
                rrow.className = 'breakdown-row deduction';
                rrow.innerHTML = '<span class="breakdown-label">Less: Section 87A Rebate</span><span class="breakdown-value">−' + fmtINR(rebate) + '</span>';
                slabRows.appendChild(rrow);
            }
            if (marginalRelief > 0) {
                const mrow = document.createElement('div');
                mrow.className = 'breakdown-row deduction';
                mrow.innerHTML = '<span class="breakdown-label">Less: Marginal Relief</span><span class="breakdown-value">−' + fmtINR(marginalRelief) + '</span>';
                slabRows.appendChild(mrow);
            }
            const crow = document.createElement('div');
            crow.className = 'breakdown-row';
            crow.innerHTML = '<span class="breakdown-label">Add: Health &amp; Education Cess @ 4%</span><span class="breakdown-value">' + fmtINR(cess) + '</span>';
            slabRows.appendChild(crow);
            const fin = document.createElement('div');
            fin.className = 'breakdown-row total';
            fin.innerHTML = '<span class="breakdown-label">Total Tax Payable</span><span class="breakdown-value">' + fmtINR(totalPayable) + '</span>';
            slabRows.appendChild(fin);
        }

        // Show + scroll
        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => {
            rs.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }, 100);
    }

    function resetCalc() {
        document.getElementById('income').value = '';
        document.getElementById('resultSection').classList.remove('visible');
        regime = 'new';
        residency = 'resident';
        fy = '2025-26';
        document.querySelectorAll('.toggle-group').forEach(group => {
            const btns = group.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            btns[0].classList.add('active');
        });
        document.querySelector('.calc-card').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    document.getElementById('income').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') calculate();
    });

    const sections = document.querySelectorAll('[id]');
    const navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => {
            const top = s.offsetTop - 100;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });
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