@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Depreciation Calculator | Companies Act Sch II + IT Act</title>
    <meta name="description" content="Free depreciation calculator: SLM/WDV under Companies Act Schedule II plus IT Act block rates, with year-wise schedule and journal entry. CA-reviewed tool.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/depreciation-calculator/">
    <meta property="og:title" content="Depreciation Calculator (Schedule II + IT Act) — FY 2025-26">
    <meta property="og:description" content="Compute SLM/WDV depreciation under Companies Act Schedule II and IT Act FY 2025-26. Year-wise schedule, journal entry, side-by-side comparison.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/depreciation-calculator">
    <meta property="og:image" content="/tools/og/depreciation-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Depreciation Calculator (Schedule II + IT Act) — FY 2025-26">
    <meta name="twitter:description" content="SLM/WDV under Schedule II + IT Act. Year-wise schedule, journal entry. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/depreciation-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Depreciation Calculator (Schedule II + IT Act)",
      "description": "Depreciation Calculator computes annual depreciation under Companies Act 2013 Schedule II and Income Tax Act 1961 Section 32 / Section 33 (IT Act 2025) for Indian companies, LLPs, firms and proprietors. The tool supports 13 standard asset categories with prescribed useful lives — buildings (RCC, non-RCC, factory), plant and machinery (general, continuous process), furniture and fittings, office equipment, computers (servers, end-user devices), motor vehicles (cars, trucks), laboratory equipment and electrical installations — plus custom useful life override. Both Straight Line Method (SLM) and Written Down Value (WDV) methods are supported with computed rates per Schedule II Part C formula (1 minus residual divided by useful life for SLM, 1 minus the n-th root of residual over cost for WDV). Output includes year-wise schedule, comparison with IT Act block rate, half-rate rule for assets used less than 180 days, additional depreciation under Section 32(1)(iia), and journal entry. Aligned with AS 10 Property Plant and Equipment and Ind AS 16 Property Plant and Equipment for component-wise depreciation.",
      "url": "/tools/depreciation-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "Depreciation Calculator", "item": "/tools/depreciation-calculator"}
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
          "name": "What is Schedule II of the Companies Act 2013?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Schedule II of the Companies Act, 2013 read with Section 123 prescribes useful lives for tangible assets, replacing the rate-based Schedule XIV of the Companies Act, 1956. Effective from 1 April 2014, it lists indicative useful lives across 14 asset categories. Companies derive the SLM or WDV rate from useful life and a residual value capped at 5% of original cost. Deviations from prescribed useful lives require disclosure with technical justification supported by competent professional advice."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between SLM and WDV depreciation methods?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Straight Line Method (SLM) charges equal depreciation each year — Cost minus Residual Value divided by Useful Life. Written Down Value (WDV) charges depreciation at a fixed percentage on the asset's reducing book value, producing higher depreciation in early years and lower in later years. SLM gives uniform expense and is suited to assets like buildings; WDV reflects accelerated wear and is the default under the Income Tax Act. Both methods are permitted under Schedule II."
          }
        },
        {
          "@type": "Question",
          "name": "How is depreciation different between Companies Act and Income Tax Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Companies Act Schedule II uses asset useful life with SLM or WDV at the company's choice, considering 5% residual value. Income Tax Act Section 32 (Section 33 from FY 2026-27) uses prescribed WDV rates applied to a Block of Assets — buildings 10%, plant and machinery 15%, computers 40%, furniture 10%, intangibles 25%. Tax depreciation is mandatory and front-loaded; book depreciation is policy-driven. The timing difference creates deferred tax assets or liabilities under Ind AS 12."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company use a useful life shorter than Schedule II?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Schedule II Part C is indicative — companies may adopt a different useful life if justified by technical evaluation of the asset's expected pattern of consumption, industry practice, intended use and obsolescence factors. Notes to accounts must disclose the deviation with technical advice supporting the chosen life. Auditors review the justification under SA 540 (Auditing Accounting Estimates) and may qualify the audit report if the deviation is unsupported. Most listed companies follow Schedule II for ease."
          }
        },
        {
          "@type": "Question",
          "name": "What is residual value under Schedule II?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Residual value is the estimated amount obtainable from disposal of an asset at the end of its useful life, less estimated costs of disposal. Schedule II caps residual value at 5% of original cost — companies adopting a higher residual value must justify it with technical advice and disclose the same in notes to accounts. The Schedule II rate tables (1.58%, 6.33%, 31.67% etc.) are derived assuming exactly 5% residual value over the prescribed useful life."
          }
        },
        {
          "@type": "Question",
          "name": "What is component accounting under AS 10 / Ind AS 16?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Component accounting under AS 10 and Ind AS 16 requires that each part of an asset with a cost significant relative to total cost and a different useful life from the remaining asset be depreciated separately. Common examples include aircraft engines and airframe, building parts (roof, lift, HVAC), and ship hull and engine. Schedule II Note 4 incorporates component accounting — it is mandatory for companies preparing Ind AS financial statements and recommended for AS 10 preparers."
          }
        },
        {
          "@type": "Question",
          "name": "How is depreciation calculated for partial year usage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Schedule II, depreciation is computed pro-rata from date of capitalisation to date of disposal, using actual days in the financial year. Income Tax Act Section 32 follows a different rule — if the asset is put to use for less than 180 days during the year of acquisition, only 50% of the prescribed depreciation rate is allowed for that year. Full rate applies if used 180 days or more."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Block of Assets concept under the Income Tax Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Block of Assets under Section 2(11) of the Income Tax Act, 1961 groups assets of the same nature carrying the same depreciation rate into a single block. Individual assets lose their identity once added to a block. Depreciation is computed on the block's WDV — opening WDV plus additions less sale proceeds of disposed assets — at the prescribed rate. The block-of-assets approach simplifies tracking but means individual asset gains or losses are not separately recognised for tax."
          }
        },
        {
          "@type": "Question",
          "name": "What is additional depreciation under Section 32(1)(iia)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Additional depreciation under Section 32(1)(iia) of the Income Tax Act, 1961 (Section 33 from FY 2026-27) allows an extra 20% of actual cost on new plant and machinery acquired and installed by manufacturing or power generation businesses. The asset must be brand-new — second-hand machinery does not qualify. If used less than 180 days, additional depreciation is restricted to 10% in year one and the balance 10% allowed in year two. Office equipment, vehicles and ships are excluded."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between AS 10 and Ind AS 16?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AS 10 (Indian GAAP) and Ind AS 16 (IFRS-converged) both govern Property, Plant and Equipment but differ on revaluation, component accounting and decommissioning costs. Ind AS 16 mandates component accounting for significant parts; AS 10 recommends it. Ind AS 16 requires capitalisation of decommissioning provisions in asset cost; AS 10 does not. Both permit cost or revaluation models, but Ind AS 16 requires regular revaluation if the model is chosen. AS 10 applies to non-Ind AS companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is the half-rate rule under Income Tax Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The half-rate rule under Section 32 of the Income Tax Act applies when an asset is acquired and put to use for less than 180 days during the financial year of acquisition — the assessee may claim only 50% of the prescribed depreciation rate for that asset block in year one. The full prescribed rate applies from the next year onwards. The 180-day count starts from the date of putting to use, not the date of purchase or invoice."
          }
        },
        {
          "@type": "Question",
          "name": "Are intangible assets eligible for depreciation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the Income Tax Act, specified intangible assets — patents, copyrights, trademarks, licences, franchises and similar business or commercial rights — are depreciable at 25% WDV under the block of assets concept. Goodwill was excluded from depreciable intangibles by Finance Act 2021 effective FY 2020-21. Under accounting standards, intangibles are governed by AS 26 (Indian GAAP) or Ind AS 38, which require systematic amortisation over useful life or a default 10-year period if useful life is indeterminate."
          }
        },
        {
          "@type": "Question",
          "name": "What changed with the Income Tax Act 2025 from 1 April 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Act, 2025 (effective 1 April 2026) reorganises depreciation provisions — Section 32 of the 1961 Act becomes Section 33 of the 2025 Act, Rule 5 of IT Rules becomes Rule 25 of Draft IT Rules 2026, and Appendix I-A (SLM rates for power) becomes Appendix II. Substantive provisions remain unchanged — WDV method, block concept, prescribed rates, 180-day rule and additional depreciation continue. A new 40% depreciation cap applies to taxpayers under the concessional tax regime."
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
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
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
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .schedule-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 12px; }
        .schedule-table thead th { background: var(--primary); color: #fff; padding: 10px 8px; text-align: right; font-weight: 600; font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; }
        .schedule-table thead th:first-child { text-align: left; border-radius: 6px 0 0 0; }
        .schedule-table thead th:last-child { border-radius: 0 6px 0 0; }
        .schedule-table tbody td { padding: 8px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .schedule-table tbody td:first-child { text-align: left; font-family: var(--font-body); font-weight: 600; color: var(--primary-dark); }
        .schedule-table tbody tr:nth-child(even) { background: var(--surface); }
        .schedule-table tfoot td { padding: 10px 8px; background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); font-size: 12px; text-align: right; font-family: var(--font-mono); }
        .schedule-table tfoot td:first-child { text-align: left; font-family: var(--font-body); }
        @media (max-width: 600px) {
            .schedule-table { font-size: 10px; }
            .schedule-table thead th, .schedule-table tbody td, .schedule-table tfoot td { padding: 6px 4px; }
        }

        .journal-entry { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 13px; line-height: 1.9; margin: 14px 0; overflow-x: auto; }
        .journal-entry .je-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 6px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .journal-entry .je-row { display: grid; grid-template-columns: 1fr 90px 90px; gap: 8px; }
        .journal-entry .je-amt { text-align: right; }
        @media (max-width: 600px) {
            .journal-entry { font-size: 11px; padding: 14px 16px; }
            .journal-entry .je-row { grid-template-columns: 1fr 70px 70px; }
        }

        .compare-grid { display: grid; grid-template-columns: 1fr; gap: 14px; margin: 14px 0; }
        @media (min-width: 600px) { .compare-grid { grid-template-columns: 1fr 1fr; } }
        .compare-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 16px 18px; }
        .compare-card.coact { border-left: 4px solid var(--primary); }
        .compare-card.itact { border-left: 4px solid var(--accent); }
        .compare-card h4 { font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 8px; font-family: var(--font-mono); }
        .compare-card.coact h4 { color: var(--primary); }
        .compare-card .ttl-label { font-size: 11px; color: var(--text-muted); margin: 6px 0 2px; }
        .compare-card .ttl-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); }

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
            .verdict-grid-value { font-size: 18px; }
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
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#schedule-ii-rates">Schedule II Rates</a>
        <a href="#it-act-rates">IT Act Rates</a>
        <a href="#additional-dep">Additional Dep.</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Depreciation Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Depreciation Calculator <span>(Schedule II + IT Act)</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Depreciation under Indian law follows two parallel regimes — Schedule II of the Companies Act 2013 (useful-life based, SLM or WDV at company's choice, 5% residual cap) for book accounting under AS 10 / Ind AS 16, and Section 32 of the Income Tax Act 1961 (Section 33 from FY 2026-27 onwards) using prescribed WDV rates on Block of Assets for tax computation. This calculator handles 13 standard asset categories with auto-mapped useful lives, computes both rates side-by-side, generates a year-wise schedule, and supports the IT Act 180-day half-rate rule plus Section 32(1)(iia) additional depreciation.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Calculate Depreciation</h2>
            <p class="calc-intro">Pick an asset category — useful life and IT Act block rate auto-populate. Enter cost and computation runs instantly. Custom useful life override is available for assets with technical justification.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Asset Profile</div>

            <div class="form-group" style="margin-bottom:20px;">
                <label for="assetCategory">Asset Category (Schedule II)</label>
                <select id="assetCategory">
                    <option value="bldg_rcc">Buildings — RCC, non-factory (60 yrs)</option>
                    <option value="bldg_nonrcc">Buildings — non-RCC / Factory (30 yrs)</option>
                    <option value="pm_general" selected>Plant & Machinery — General (15 yrs)</option>
                    <option value="pm_continuous">Plant & Machinery — Continuous Process (25 yrs)</option>
                    <option value="furniture">Furniture & Fittings (10 yrs)</option>
                    <option value="office_eq">Office Equipment (5 yrs)</option>
                    <option value="comp_server">Computers — Servers & Networks (6 yrs)</option>
                    <option value="comp_enduser">Computers — End-User Devices (3 yrs)</option>
                    <option value="motor_car">Motor Cars — non-commercial (8 yrs)</option>
                    <option value="motor_truck">Motor Cars — commercial / Trucks (6 yrs)</option>
                    <option value="lab_eq">Laboratory Equipment (10 yrs)</option>
                    <option value="elec_install">Electrical Installations (10 yrs)</option>
                    <option value="custom">Custom — manual useful life</option>
                </select>
                <span class="helper" id="categoryHelper">Useful life: 15 years | SLM: 6.33% | WDV: 18.10% (assuming 5% residual)</span>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="cost">Original Cost (₹)</label>
                    <input type="number" id="cost" min="0" step="any" placeholder="100000" inputmode="decimal">
                    <span class="helper">Total acquisition cost — purchase price, freight, installation, capitalised borrowing costs.</span>
                </div>
                <div class="form-group">
                    <label for="purchaseDate">Date of Purchase / Capitalisation</label>
                    <input type="date" id="purchaseDate">
                    <span class="helper">Used for pro-rata Year 1 depreciation under Schedule II.</span>
                </div>
            </div>

            <div class="calc-section-title">Method & Estimates</div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Method (Companies Act)</label>
                    <div class="toggle-group" id="methodGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="slm" role="tab" aria-selected="true">SLM</button>
                        <button type="button" class="toggle-btn" data-value="wdv" role="tab" aria-selected="false">WDV</button>
                    </div>
                    <span class="helper">SLM: equal annual charge. WDV: declining balance (front-loaded).</span>
                </div>
                <div class="form-group">
                    <label for="residual">Residual Value (% of Cost)</label>
                    <input type="number" id="residual" min="0" max="100" step="0.01" value="5" inputmode="decimal">
                    <span class="helper">Default 5% per Schedule II. Higher residual requires technical justification.</span>
                </div>
            </div>

            <div class="form-group" id="customLifeGroup" style="display:none;margin-bottom:20px;">
                <label for="customLife">Custom Useful Life (Years)</label>
                <input type="number" id="customLife" min="1" max="60" step="0.5" placeholder="e.g. 12" inputmode="decimal">
                <span class="helper">Override Schedule II useful life. Disclosure with technical justification required in notes to accounts.</span>
            </div>

            <div class="calc-section-title">Income Tax Act Comparison</div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Show IT Act Comparison</label>
                    <div class="toggle-group" id="itActGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="yes" role="tab" aria-selected="true">Yes</button>
                        <button type="button" class="toggle-btn" data-value="no" role="tab" aria-selected="false">No</button>
                    </div>
                    <span class="helper">IT Act uses WDV at prescribed Block of Assets rate.</span>
                </div>
                <div class="form-group">
                    <label>Asset Used &lt; 180 Days in Year 1?</label>
                    <div class="toggle-group" id="halfRateGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="no" role="tab" aria-selected="true">No (Full Rate)</button>
                        <button type="button" class="toggle-btn" data-value="yes" role="tab" aria-selected="false">Yes (Half Rate)</button>
                    </div>
                    <span class="helper">If yes, IT Act allows only 50% of the prescribed rate in Year 1.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate Depreciation</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card">
                    <div class="verdict-label" id="verdictLabel">Annual Depreciation (Year 1)</div>
                    <div class="verdict-headline" id="verdictHeadline">Schedule II — SLM</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Year 1 Depreciation</div>
                            <div class="verdict-grid-value" id="annualDep">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Computed Rate</div>
                            <div class="verdict-grid-value" id="computedRate">0%</div>
                        </div>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner info" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Year-wise Depreciation Schedule (Companies Act)</h3>
                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:8px;">Schedule capped at useful life. WDV reaches residual value at end of life; SLM produces equal annual charge.</p>
                <div style="overflow-x:auto;">
                    <table class="schedule-table" id="scheduleTable">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Op. WDV</th>
                                <th>Depreciation</th>
                                <th>Cl. WDV</th>
                            </tr>
                        </thead>
                        <tbody id="scheduleBody"></tbody>
                        <tfoot id="scheduleFoot"></tfoot>
                    </table>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;" id="compareHeading">Companies Act vs Income Tax Act</h3>
                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:8px;">The difference creates a timing difference for deferred tax computation under Ind AS 12 / AS 22.</p>
                <div class="compare-grid" id="compareGrid"></div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Journal Entry — Year-End</h3>
                <div class="journal-entry" id="journalEntry"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The tool runs your asset profile through both regulatory regimes simultaneously — Companies Act Schedule II for book depreciation and Income Tax Act for tax depreciation — using the standard formulas prescribed in each framework.</p>

            <h3>Step 1 — Determine Useful Life</h3>
            <p>The tool maps your asset category to the Schedule II Part C useful life. For example, plant and machinery (general) has a useful life of 15 years; computers (end-user devices) have 3 years; buildings (RCC, non-factory) have 60 years. You can override the prescribed life with a custom value if technical justification exists — this requires disclosure under Schedule II Part A read with notes to accounts.</p>

            <h3>Step 2 — Compute Companies Act Rate</h3>
            <div class="formula-box">
<span class="label">SLM Rate</span> = (1 − Residual%) ÷ Useful Life × 100
<span class="label">WDV Rate</span> = (1 − (Residual ÷ Cost)^(1 ÷ Useful Life)) × 100
<span class="label">SLM Annual Dep</span> = (Cost − Residual Value) ÷ Useful Life
<span class="label">WDV Annual Dep</span> = Opening WDV × WDV Rate
            </div>

            <p>For SLM, the same depreciation amount applies every year. For WDV, the depreciation declines progressively because the rate is applied to a reducing balance — at the end of useful life, the carrying amount equals the residual value.</p>

            <h3>Step 3 — Apply Pro-rata for Partial Year</h3>
            <p>If the date of purchase is provided and falls within the current financial year (April-March), Year 1 depreciation is pro-rated based on actual days from capitalisation to financial year-end. For Year 2 onwards, the full annual rate applies. This follows Schedule II Part C's pro-rata rule for additions during the year.</p>

            <h3>Step 4 — Compute IT Act Rate</h3>
            <p>The Income Tax Act applies prescribed WDV rates on the Block of Assets. The tool maps your Schedule II category to the corresponding tax block — for example, plant and machinery (general or continuous) maps to the 15% block; computers map to 40%; buildings map to 10%; furniture maps to 10%; vehicles to 15% (or 30% for commercial use). If the asset is used less than 180 days in the year of acquisition, only 50% of the prescribed rate applies for that year.</p>

            <h3>Step 5 — Generate Year-wise Schedule</h3>
            <p>The schedule shows opening WDV, depreciation charge, and closing WDV for each year of the asset's useful life. SLM reaches residual value through equal annual reductions; WDV approaches residual value asymptotically through proportional reductions. Total depreciation over the useful life equals (Cost − Residual Value) under both methods.</p>
        </section>

        <section class="content-section" id="schedule-ii-rates">
            <h2>Schedule II Rate Chart — Quick Reference</h2>
            <p>Schedule II Part C of the Companies Act, 2013 prescribes useful lives. The SLM and WDV rates below are derived assuming 5% residual value — the maximum permitted under Schedule II without separate technical justification.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Asset Category</th><th>Useful Life</th><th>SLM Rate</th><th>WDV Rate</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Buildings — RCC, non-factory</strong></td><td>60 years</td><td>1.58%</td><td>4.87%</td></tr>
                    <tr><td><strong>Buildings — non-RCC / Factory</strong></td><td>30 years</td><td>3.17%</td><td>9.50%</td></tr>
                    <tr><td><strong>Bridges, Roads (RCC)</strong></td><td>30 years</td><td>3.17%</td><td>9.50%</td></tr>
                    <tr><td><strong>Plant & Machinery (general)</strong></td><td>15 years</td><td>6.33%</td><td>18.10%</td></tr>
                    <tr><td><strong>P&M — Continuous Process</strong></td><td>25 years</td><td>3.80%</td><td>11.29%</td></tr>
                    <tr><td><strong>Aircraft / Helicopter</strong></td><td>20 years</td><td>4.75%</td><td>13.91%</td></tr>
                    <tr><td><strong>Office Equipment</strong></td><td>5 years</td><td>19.00%</td><td>45.07%</td></tr>
                    <tr><td><strong>Computers — Servers & Networks</strong></td><td>6 years</td><td>15.83%</td><td>39.30%</td></tr>
                    <tr><td><strong>Computers — End-User Devices</strong></td><td>3 years</td><td>31.67%</td><td>63.16%</td></tr>
                    <tr><td><strong>Furniture & Fittings</strong></td><td>10 years</td><td>9.50%</td><td>25.89%</td></tr>
                    <tr><td><strong>Lab Equipment (general)</strong></td><td>10 years</td><td>9.50%</td><td>25.89%</td></tr>
                    <tr><td><strong>Electrical Installations</strong></td><td>10 years</td><td>9.50%</td><td>25.89%</td></tr>
                    <tr><td><strong>Motor Cars (non-commercial)</strong></td><td>8 years</td><td>11.88%</td><td>31.23%</td></tr>
                    <tr><td><strong>Motor Cars (commercial) / Trucks</strong></td><td>6 years</td><td>15.83%</td><td>39.30%</td></tr>
                    <tr><td><strong>Motor Cycles / Two-wheelers</strong></td><td>10 years</td><td>9.50%</td><td>25.89%</td></tr>
                    <tr><td><strong>Power Generation Plants</strong></td><td>40 years</td><td>2.38%</td><td>7.22%</td></tr>
                    <tr><td><strong>Wind Power Generation</strong></td><td>22 years</td><td>4.32%</td><td>12.73%</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>NESD — No Extra Shift Depreciation:</strong> Most asset categories (buildings, bridges, computers, office equipment, electrical installations, lab equipment, etc.) are flagged NESD in Schedule II Part C — depreciation does not increase for double-shift or triple-shift usage. For other assets, double-shift adds 50% and triple-shift adds 100% to the prescribed rate for the period of such usage.</p>
            </div>

            <p>Refer to the official notification at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA portal</a> and the underlying Companies Act provisions on <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>
        </section>

        <section class="content-section" id="it-act-rates">
            <h2>Income Tax Act Rates — FY 2025-26 / AY 2026-27</h2>
            <p>The Income Tax Act, 1961 (and Income Tax Act, 2025 from FY 2026-27 onwards) prescribes WDV rates on Block of Assets — assets of the same nature with the same depreciation rate are pooled into a single block. The default method is WDV; only power generation undertakings can opt for SLM under Appendix I-A (Appendix II from FY 2026-27).</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Block of Assets</th><th>WDV Rate (FY 2025-26)</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Buildings — non-residential / general</strong></td><td>10%</td></tr>
                    <tr><td><strong>Buildings — residential</strong></td><td>5%</td></tr>
                    <tr><td><strong>Furniture & Fittings</strong></td><td>10%</td></tr>
                    <tr><td><strong>Plant & Machinery (general)</strong></td><td>15%</td></tr>
                    <tr><td><strong>Motor Cars (non-commercial)</strong></td><td>15%</td></tr>
                    <tr><td><strong>Trucks / Buses (commercial hire)</strong></td><td>30%</td></tr>
                    <tr><td><strong>Computers + Software + Mobile Phones</strong></td><td>40%</td></tr>
                    <tr><td><strong>Books (annual publications)</strong></td><td>40%</td></tr>
                    <tr><td><strong>Pollution Control / Renewable Energy</strong></td><td>40% (cap)</td></tr>
                    <tr><td><strong>Electric Vehicles (EV)</strong></td><td>40%</td></tr>
                    <tr><td><strong>Intangibles — patents, copyrights, licences</strong></td><td>25%</td></tr>
                </tbody>
            </table>

            <h3>Key Rules Under IT Act</h3>
            <ul>
                <li><strong>180-day rule:</strong> Asset put to use less than 180 days in year of acquisition gets 50% of prescribed rate</li>
                <li><strong>Block continues:</strong> Even if last asset in a block is sold, block continues with WDV until reduced to nil</li>
                <li><strong>Mandatory claim:</strong> Depreciation is treated as deemed allowed even if not claimed (from AY 2002-03)</li>
                <li><strong>Goodwill excluded:</strong> Not depreciable from FY 2020-21 onwards (Finance Act 2021)</li>
                <li><strong>Land never depreciable</strong> — only the building component qualifies</li>
                <li><strong>40% cap (new):</strong> From FY 2026-27, taxpayers under concessional regime face a 40% cap on depreciation rates</li>
            </ul>

            <p>Reference: <a href="https://incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> — Section 32 of Income Tax Act 1961 read with Rule 5 and Appendix I, transitioning to Section 33 read with Rule 25 and Appendix I from FY 2026-27. The accounting standards governing book depreciation — AS 10, AS 22 (timing differences), Ind AS 12 (deferred tax) and Ind AS 16 — are issued by the <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>. For the comprehensive update, see Patron's blog on <a href="/blog/depreciation-rules-2026-rates-block-assets" target="_blank" rel="noopener">depreciation rules from FY 2026-27</a>.</p>
        </section>

        <div class="body-cta">
            <h3>Need a CA-Reviewed Fixed Asset Register?</h3>
            <p>Patron Accounting LLP builds and maintains audit-ready fixed asset registers with component accounting, Schedule II compliance, IT Act block tracking and deferred tax reconciliation — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Depreciation%20Calculator.%20I%20need%20help%20with%20fixed%20asset%20register%20and%20depreciation%20accounting.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="additional-dep">
            <h2>Additional Depreciation — Section 32(1)(iia)</h2>
            <p>Section 32(1)(iia) of the Income Tax Act, 1961 (continuing as a sub-clause under Section 33 from FY 2026-27) allows an additional 20% depreciation on actual cost of new plant and machinery acquired and installed by manufacturing or power generation businesses — over and above the normal block rate.</p>

            <h3>Eligibility Conditions</h3>
            <ul>
                <li>The asset must be <strong>brand-new</strong> — second-hand machinery does not qualify</li>
                <li>The business must be engaged in <strong>manufacture or production of any article or thing</strong>, OR generation, transmission or distribution of power</li>
                <li>The asset must be <strong>plant and machinery</strong> — office equipment, vehicles, ships, aircraft and assets installed in office premises or residential accommodation are excluded</li>
                <li>The asset must be acquired AND installed AND put to use during the year</li>
            </ul>

            <h3>180-Day Restriction</h3>
            <p>If the new plant and machinery is put to use for less than 180 days in the year of acquisition, only 10% (half of 20%) is allowed as additional depreciation in year one. The balance 10% can be claimed in the following year — this is a deferred allowance, not lost. The normal block depreciation also follows the half-rate rule for that year.</p>

            <h3>Worked Example</h3>
            <p>Manufacturing company buys new machinery for ₹1 crore on 1 December 2025 (used 121 days, less than 180):</p>
            <ul>
                <li>Normal block rate (15%) at half: ₹1 crore × 15% × 50% = <strong>₹7,50,000</strong></li>
                <li>Additional depreciation at half: ₹1 crore × 20% × 50% = <strong>₹10,00,000</strong></li>
                <li>Year 1 total: ₹17,50,000</li>
                <li>Year 2 carry-forward additional: ₹10,00,000 (balance 10%) + 15% on reduced WDV</li>
            </ul>

            <div class="callout">
                <p><strong>Investment-linked deduction — not stackable:</strong> Additional depreciation is not available if the assessee has claimed Section 35AD or other investment-linked deductions on the same asset. Review Section 35AD applicability before claiming additional depreciation.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Schedule II of the Companies Act 2013?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Schedule II of the Companies Act, 2013 read with Section 123 prescribes useful lives for tangible assets, replacing the rate-based Schedule XIV of the Companies Act, 1956. Effective from 1 April 2014, it lists indicative useful lives across 14 asset categories. Companies derive the SLM or WDV rate from useful life and a residual value capped at 5% of original cost. Deviations from prescribed useful lives require disclosure with technical justification supported by competent professional advice.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between SLM and WDV depreciation methods?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Straight Line Method (SLM) charges equal depreciation each year — Cost minus Residual Value divided by Useful Life. Written Down Value (WDV) charges depreciation at a fixed percentage on the asset's reducing book value, producing higher depreciation in early years and lower in later years. SLM gives uniform expense and is suited to assets like buildings; WDV reflects accelerated wear and is the default under the Income Tax Act. Both methods are permitted under Schedule II.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is depreciation different between Companies Act and Income Tax Act?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Companies Act Schedule II uses asset useful life with SLM or WDV at the company's choice, considering 5% residual value. Income Tax Act Section 32 (Section 33 from FY 2026-27) uses prescribed WDV rates applied to a Block of Assets — buildings 10%, plant and machinery 15%, computers 40%, furniture 10%, intangibles 25%. Tax depreciation is mandatory and front-loaded; book depreciation is policy-driven. The timing difference creates deferred tax assets or liabilities under Ind AS 12.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Can a company use a useful life shorter than Schedule II?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Schedule II Part C is indicative — companies may adopt a different useful life if justified by technical evaluation of the asset's expected pattern of consumption, industry practice, intended use and obsolescence factors. Notes to accounts must disclose the deviation with technical advice supporting the chosen life. Auditors review the justification under SA 540 (Auditing Accounting Estimates) and may qualify the audit report if the deviation is unsupported. Most listed companies follow Schedule II for ease.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is residual value under Schedule II?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Residual value is the estimated amount obtainable from disposal of an asset at the end of its useful life, less estimated costs of disposal. Schedule II caps residual value at 5% of original cost — companies adopting a higher residual value must justify it with technical advice and disclose the same in notes to accounts. The Schedule II rate tables (1.58%, 6.33%, 31.67% etc.) are derived assuming exactly 5% residual value over the prescribed useful life.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is component accounting under AS 10 / Ind AS 16?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Component accounting under AS 10 and Ind AS 16 requires that each part of an asset with a cost significant relative to total cost and a different useful life from the remaining asset be depreciated separately. Common examples include aircraft engines and airframe, building parts (roof, lift, HVAC), and ship hull and engine. Schedule II Note 4 incorporates component accounting — it is mandatory for companies preparing Ind AS financial statements and recommended for AS 10 preparers.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is depreciation calculated for partial year usage?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Schedule II, depreciation is computed pro-rata from date of capitalisation to date of disposal, using actual days in the financial year. Income Tax Act Section 32 follows a different rule — if the asset is put to use for less than 180 days during the year of acquisition, only 50% of the prescribed depreciation rate is allowed for that year. Full rate applies if used 180 days or more.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the Block of Assets concept under the Income Tax Act?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Block of Assets under Section 2(11) of the Income Tax Act, 1961 groups assets of the same nature carrying the same depreciation rate into a single block. Individual assets lose their identity once added to a block. Depreciation is computed on the block's WDV — opening WDV plus additions less sale proceeds of disposed assets — at the prescribed rate. The block-of-assets approach simplifies tracking but means individual asset gains or losses are not separately recognised for tax.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is additional depreciation under Section 32(1)(iia)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Additional depreciation under Section 32(1)(iia) of the Income Tax Act, 1961 (Section 33 from FY 2026-27) allows an extra 20% of actual cost on new plant and machinery acquired and installed by manufacturing or power generation businesses. The asset must be brand-new — second-hand machinery does not qualify. If used less than 180 days, additional depreciation is restricted to 10% in year one and the balance 10% allowed in year two. Office equipment, vehicles and ships are excluded.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between AS 10 and Ind AS 16?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">AS 10 (Indian GAAP) and Ind AS 16 (IFRS-converged) both govern Property, Plant and Equipment but differ on revaluation, component accounting and decommissioning costs. Ind AS 16 mandates component accounting for significant parts; AS 10 recommends it. Ind AS 16 requires capitalisation of decommissioning provisions in asset cost; AS 10 does not. Both permit cost or revaluation models, but Ind AS 16 requires regular revaluation if the model is chosen. AS 10 applies to non-Ind AS companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the half-rate rule under Income Tax Act?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The half-rate rule under Section 32 of the Income Tax Act applies when an asset is acquired and put to use for less than 180 days during the financial year of acquisition — the assessee may claim only 50% of the prescribed depreciation rate for that asset block in year one. The full prescribed rate applies from the next year onwards. The 180-day count starts from the date of putting to use, not the date of purchase or invoice.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Are intangible assets eligible for depreciation?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under the Income Tax Act, specified intangible assets — patents, copyrights, trademarks, licences, franchises and similar business or commercial rights — are depreciable at 25% WDV under the block of assets concept. Goodwill was excluded from depreciable intangibles by Finance Act 2021 effective FY 2020-21. Under accounting standards, intangibles are governed by AS 26 (Indian GAAP) or Ind AS 38, which require systematic amortisation over useful life or a default 10-year period if useful life is indeterminate.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What changed with the Income Tax Act 2025 from 1 April 2026?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Income Tax Act, 2025 (effective 1 April 2026) reorganises depreciation provisions — Section 32 of the 1961 Act becomes Section 33 of the 2025 Act, Rule 5 of IT Rules becomes Rule 25 of Draft IT Rules 2026, and Appendix I-A (SLM rates for power) becomes Appendix II. Substantive provisions remain unchanged — WDV method, block concept, prescribed rates, 180-day rule and additional depreciation continue. A new 40% depreciation cap applies to taxpayers under the concessional tax regime.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Fixed Asset Register Service</h3>
            <p>Schedule II + IT Act compliant FAR with component accounting, deferred tax reconciliation, audit working papers — fixed-fee.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Depreciation%20Calculator.%20I%20need%20help%20with%20fixed%20asset%20register%20and%20depreciation%20accounting.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return<span class="arrow">→</span></a>
            <a href="/business-set-up-services" class="sidebar-link">Business Setup<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Accounting (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ifc-testing-checklist" class="sidebar-link">IFC Testing Checklist<span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/depreciation-rules-2026-rates-block-assets" class="sidebar-link">Depreciation Rules from FY 2026-27<span class="arrow">→</span></a>
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

    // ===== ASSET MASTER DATA =====
    const ASSETS = {
        bldg_rcc:      {label: 'Buildings — RCC, non-factory',      life: 60, slm: 1.58,  wdv: 4.87,  itRate: 10, itLabel: 'Buildings (general) 10%'},
        bldg_nonrcc:   {label: 'Buildings — non-RCC / Factory',     life: 30, slm: 3.17,  wdv: 9.50,  itRate: 10, itLabel: 'Buildings (general) 10%'},
        pm_general:    {label: 'Plant & Machinery — General',       life: 15, slm: 6.33,  wdv: 18.10, itRate: 15, itLabel: 'P&M (general) 15%'},
        pm_continuous: {label: 'Plant & Machinery — Continuous',    life: 25, slm: 3.80,  wdv: 11.29, itRate: 15, itLabel: 'P&M (general) 15%'},
        furniture:     {label: 'Furniture & Fittings',              life: 10, slm: 9.50,  wdv: 25.89, itRate: 10, itLabel: 'Furniture 10%'},
        office_eq:     {label: 'Office Equipment',                  life: 5,  slm: 19.00, wdv: 45.07, itRate: 15, itLabel: 'P&M (general) 15%'},
        comp_server:   {label: 'Computers — Servers & Networks',    life: 6,  slm: 15.83, wdv: 39.30, itRate: 40, itLabel: 'Computers 40%'},
        comp_enduser:  {label: 'Computers — End-User Devices',      life: 3,  slm: 31.67, wdv: 63.16, itRate: 40, itLabel: 'Computers 40%'},
        motor_car:     {label: 'Motor Cars (non-commercial)',       life: 8,  slm: 11.88, wdv: 31.23, itRate: 15, itLabel: 'Motor Cars 15%'},
        motor_truck:   {label: 'Motor Cars (commercial) / Trucks',  life: 6,  slm: 15.83, wdv: 39.30, itRate: 30, itLabel: 'Trucks/Buses (commercial) 30%'},
        lab_eq:        {label: 'Laboratory Equipment',              life: 10, slm: 9.50,  wdv: 25.89, itRate: 15, itLabel: 'P&M (general) 15%'},
        elec_install:  {label: 'Electrical Installations',          life: 10, slm: 9.50,  wdv: 25.89, itRate: 15, itLabel: 'P&M (general) 15%'},
        custom:        {label: 'Custom',                            life: 0,  slm: 0,     wdv: 0,     itRate: 15, itLabel: 'P&M (general) 15% (default)'}
    };

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

    setupToggleGroup('methodGroup');
    setupToggleGroup('itActGroup');
    setupToggleGroup('halfRateGroup');

    // ===== CATEGORY CHANGE HANDLER =====
    const categorySelect = document.getElementById('assetCategory');
    const categoryHelper = document.getElementById('categoryHelper');
    const customLifeGroup = document.getElementById('customLifeGroup');

    function updateCategoryUI() {
        const cat = categorySelect.value;
        const a = ASSETS[cat];
        if (cat === 'custom') {
            categoryHelper.textContent = 'Custom — enter useful life below. SLM/WDV rates computed from your inputs.';
            customLifeGroup.style.display = 'block';
        } else {
            categoryHelper.textContent = 'Useful life: ' + a.life + ' years | SLM: ' + a.slm + '% | WDV: ' + a.wdv + '% (assuming 5% residual)';
            customLifeGroup.style.display = 'none';
        }
    }
    categorySelect.addEventListener('change', updateCategoryUI);
    updateCategoryUI();

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

    // ===== READ INPUTS =====
    function readInputs() {
        const cat = categorySelect.value;
        const a = ASSETS[cat];
        const customLife = parseFloat(document.getElementById('customLife').value) || 0;
        const useLife = (cat === 'custom') ? customLife : a.life;

        return {
            category: cat,
            categoryLabel: a.label,
            usefulLife: useLife,
            cost: parseFloat(document.getElementById('cost').value) || 0,
            purchaseDate: document.getElementById('purchaseDate').value,
            method: getActiveValue('methodGroup') || 'slm',
            residualPct: parseFloat(document.getElementById('residual').value) || 5,
            showItAct: getActiveValue('itActGroup') === 'yes',
            halfRate: getActiveValue('halfRateGroup') === 'yes',
            itRate: a.itRate,
            itLabel: a.itLabel
        };
    }

    function validateInputs(inp) {
        if (!inp.cost || inp.cost <= 0) return 'Please enter a positive original cost.';
        if (inp.usefulLife <= 0) return inp.category === 'custom' ? 'Please enter a positive custom useful life (years).' : 'Asset category not properly mapped.';
        if (inp.residualPct < 0 || inp.residualPct >= 100) return 'Residual value must be between 0% and 100%.';
        return null;
    }

    // ===== PRO-RATA CALC =====
    function getProRataFactor(purchaseDateStr) {
        if (!purchaseDateStr) return 1.0;
        const d = new Date(purchaseDateStr);
        if (isNaN(d.getTime())) return 1.0;

        // Indian FY: April 1 to March 31
        const month = d.getMonth(); // 0-indexed
        const year = d.getFullYear();
        const fyStart = (month >= 3) ? new Date(year, 3, 1) : new Date(year - 1, 3, 1);
        const fyEnd = new Date(fyStart.getFullYear() + 1, 2, 31);

        const daysInFY = Math.round((fyEnd - fyStart) / (1000 * 60 * 60 * 24)) + 1;
        const daysUsed = Math.round((fyEnd - d) / (1000 * 60 * 60 * 24)) + 1;
        return Math.max(0, Math.min(1, daysUsed / daysInFY));
    }

    // ===== CORE COMPUTATION =====
    function computeDep(inp) {
        const cost = inp.cost;
        const residual = cost * (inp.residualPct / 100);
        const life = inp.usefulLife;
        const proRata = getProRataFactor(inp.purchaseDate);

        // Companies Act rates
        const slmRate = (1 - inp.residualPct / 100) / life * 100;
        const wdvRateDecimal = 1 - Math.pow(inp.residualPct / 100, 1 / life);
        const wdvRate = wdvRateDecimal * 100;

        // Year-wise schedule (Companies Act)
        const schedule = [];
        const fullYears = Math.ceil(life);
        let openWdv = cost;
        let totalDep = 0;

        if (inp.method === 'slm') {
            const annualSlm = (cost - residual) / life;
            for (let y = 1; y <= fullYears; y++) {
                let dep = annualSlm;
                if (y === 1) dep = annualSlm * proRata;
                if (y === fullYears && fullYears > life) {
                    // Partial last year
                    dep = annualSlm * (life - (fullYears - 1));
                }
                if (openWdv - dep < residual) dep = openWdv - residual;
                if (dep < 0) dep = 0;
                const closeWdv = openWdv - dep;
                schedule.push({year: y, opening: openWdv, dep: dep, closing: closeWdv});
                openWdv = closeWdv;
                totalDep += dep;
            }
        } else {
            // WDV
            for (let y = 1; y <= fullYears; y++) {
                let yrFraction = 1;
                if (y === 1) yrFraction = proRata;
                let dep = openWdv * wdvRateDecimal * yrFraction;
                if (openWdv - dep < residual) dep = openWdv - residual;
                if (dep < 0) dep = 0;
                const closeWdv = openWdv - dep;
                schedule.push({year: y, opening: openWdv, dep: dep, closing: closeWdv});
                openWdv = closeWdv;
                totalDep += dep;
            }
        }

        // IT Act schedule (always WDV)
        const itRateDecimal = inp.itRate / 100;
        const itSchedule = [];
        let itOpenWdv = cost;
        let itTotalDep = 0;
        const itYears = Math.min(fullYears + 5, 30); // IT Act can run longer (block continues)
        for (let y = 1; y <= itYears; y++) {
            let yrFraction = 1;
            if (y === 1 && inp.halfRate) yrFraction = 0.5;
            let dep = itOpenWdv * itRateDecimal * yrFraction;
            if (dep < 0) dep = 0;
            const closeWdv = itOpenWdv - dep;
            itSchedule.push({year: y, opening: itOpenWdv, dep: dep, closing: closeWdv});
            itOpenWdv = closeWdv;
            itTotalDep += dep;
            if (itOpenWdv < 1) break;
        }

        return {
            inp: inp,
            cost: cost,
            residual: residual,
            slmRate: slmRate,
            wdvRate: wdvRate,
            proRata: proRata,
            schedule: schedule,
            totalDep: totalDep,
            itRate: inp.itRate,
            itSchedule: itSchedule,
            itTotalDep: itTotalDep,
            itYear1Dep: itSchedule[0] ? itSchedule[0].dep : 0
        };
    }

    // ===== RENDER =====
    function renderResult(r) {
        const inp = r.inp;
        const isWdv = inp.method === 'wdv';
        const year1 = r.schedule[0];
        const computedRate = isWdv ? r.wdvRate : r.slmRate;

        document.getElementById('verdictHeadline').textContent = 'Schedule II — ' + (isWdv ? 'WDV Method' : 'SLM Method') + (r.proRata < 1 ? ' (Year 1 pro-rata)' : '');
        document.getElementById('annualDep').textContent = fmtINR(year1 ? year1.dep : 0);
        document.getElementById('computedRate').textContent = computedRate.toFixed(2) + '%';

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const summary = [
            {label: 'Original Cost', value: fmtINR(r.cost), highlight: true},
            {label: 'Residual Value', value: fmtINR(r.residual)},
            {label: 'Useful Life', value: inp.usefulLife + ' years'},
            {label: 'SLM Rate', value: r.slmRate.toFixed(2) + '%'},
            {label: 'WDV Rate', value: r.wdvRate.toFixed(2) + '%'},
            {label: 'Pro-rata Factor', value: (r.proRata * 100).toFixed(1) + '%'}
        ];
        summary.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '<strong>Companies Act:</strong> ' + (isWdv ? 'WDV depreciation declines each year as base reduces.' : 'SLM produces equal annual depreciation.') + ' Total depreciation over ' + inp.usefulLife + ' years = ₹' + fmtINRDecimal(r.totalDep) + ' (Cost − Residual).';
        if (r.proRata < 1) {
            advHtml += '<br><strong>Pro-rata Year 1:</strong> ' + (r.proRata * 100).toFixed(1) + '% of full year (based on date of capitalisation).';
        }
        if (inp.halfRate) {
            advHtml += '<br><strong>IT Act Half-Rate Year 1:</strong> Asset used &lt; 180 days, only 50% rate applied.';
        }
        advisory.innerHTML = advHtml;

        // Basis
        let basis = inp.categoryLabel + '. SLM Rate = (1 − ' + inp.residualPct + '%) ÷ ' + inp.usefulLife + ' = ' + r.slmRate.toFixed(3) + '%. WDV Rate = 1 − (' + inp.residualPct + '/100)^(1/' + inp.usefulLife + ') = ' + r.wdvRate.toFixed(3) + '%. ';
        basis += 'Computed per Schedule II Part C of Companies Act 2013 read with Section 123. ';
        if (inp.showItAct) basis += 'IT Act rate: ' + inp.itLabel + ', applied WDV per Section 32 (Section 33 from FY 2026-27).';
        document.getElementById('basisText').innerHTML = basis;

        // Schedule
        const tbody = document.getElementById('scheduleBody');
        const tfoot = document.getElementById('scheduleFoot');
        tbody.innerHTML = '';
        r.schedule.forEach(function(row) {
            const tr = document.createElement('tr');
            tr.innerHTML =
                '<td>Y' + row.year + '</td>' +
                '<td>' + fmtINRDecimal(row.opening) + '</td>' +
                '<td>' + fmtINRDecimal(row.dep) + '</td>' +
                '<td>' + fmtINRDecimal(row.closing) + '</td>';
            tbody.appendChild(tr);
        });
        tfoot.innerHTML =
            '<tr><td>Total</td><td>—</td>' +
            '<td>' + fmtINRDecimal(r.totalDep) + '</td>' +
            '<td>' + fmtINRDecimal(r.cost - r.totalDep) + '</td></tr>';

        // Compare grid
        const compareGrid = document.getElementById('compareGrid');
        const compareHeading = document.getElementById('compareHeading');
        if (inp.showItAct) {
            compareHeading.style.display = 'block';
            compareGrid.style.display = 'grid';
            compareGrid.innerHTML =
                '<div class="compare-card coact">' +
                '<h4>Companies Act (Schedule II)</h4>' +
                '<div class="ttl-label">Method & Rate</div>' +
                '<div class="ttl-value">' + (isWdv ? 'WDV' : 'SLM') + ' @ ' + computedRate.toFixed(2) + '%</div>' +
                '<div class="ttl-label">Year 1 Depreciation</div>' +
                '<div class="ttl-value">' + fmtINR(year1 ? year1.dep : 0) + '</div>' +
                '<div class="ttl-label">Total Over Useful Life</div>' +
                '<div class="ttl-value">' + fmtINR(r.totalDep) + '</div>' +
                '<div style="font-size:11px;color:var(--text-muted);margin-top:8px;line-height:1.5;">Useful life: ' + inp.usefulLife + ' yrs. Reaches residual value at end of life.</div>' +
                '</div>' +
                '<div class="compare-card itact">' +
                '<h4>IT Act (Sec 32 / 33)</h4>' +
                '<div class="ttl-label">Method & Rate</div>' +
                '<div class="ttl-value">WDV @ ' + r.itRate + '%' + (inp.halfRate ? ' (½ Y1)' : '') + '</div>' +
                '<div class="ttl-label">Year 1 Depreciation</div>' +
                '<div class="ttl-value">' + fmtINR(r.itYear1Dep) + '</div>' +
                '<div class="ttl-label">Block</div>' +
                '<div class="ttl-value" style="font-size:13px;">' + inp.itLabel + '</div>' +
                '<div style="font-size:11px;color:var(--text-muted);margin-top:8px;line-height:1.5;">Block continues — WDV reduced annually until disposal or block exhausted.</div>' +
                '</div>';
        } else {
            compareHeading.style.display = 'none';
            compareGrid.style.display = 'none';
        }

        // Journal entry
        const je = document.getElementById('journalEntry');
        const y1Dep = year1 ? year1.dep : 0;
        let jeHtml = '<span class="je-label">Year-End Depreciation Entry (Year 1, Companies Act)</span>';
        jeHtml += '<div class="je-row"><span>Depreciation A/c &nbsp;Dr.</span><span class="je-amt">' + fmtINRDecimal(y1Dep) + '</span><span></span></div>';
        jeHtml += '<div class="je-row"><span>&nbsp;&nbsp;&nbsp;&nbsp;To Accumulated Depreciation A/c</span><span></span><span class="je-amt">' + fmtINRDecimal(y1Dep) + '</span></div>';
        jeHtml += '<div class="je-row" style="opacity:0.7;"><span>(Being depreciation on ' + inp.categoryLabel + ' — ' + (isWdv ? 'WDV' : 'SLM') + ' method per Schedule II)</span><span></span><span></span></div>';
        if (inp.showItAct) {
            jeHtml += '<div class="je-row" style="margin-top:14px;"><span>P&L Charge per Cos Act:</span><span class="je-amt">' + fmtINRDecimal(y1Dep) + '</span><span></span></div>';
            jeHtml += '<div class="je-row"><span>Tax Deduction per IT Act:</span><span class="je-amt">' + fmtINRDecimal(r.itYear1Dep) + '</span><span></span></div>';
            jeHtml += '<div class="je-row"><span>Timing Difference (DTA/DTL trigger):</span><span class="je-amt">' + fmtINRDecimal(r.itYear1Dep - y1Dep) + '</span><span></span></div>';
        }
        je.innerHTML = jeHtml;

        // Show
        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        setTimeout(function() {
            section.scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnCalculate').addEventListener('click', function() {
        const inp = readInputs();
        const err = validateInputs(inp);
        if (err) { alert(err); return; }
        const r = computeDep(inp);
        renderResult(r);
    });

    document.getElementById('btnReset').addEventListener('click', function() {
        ['cost', 'purchaseDate', 'customLife'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        document.getElementById('residual').value = '5';
        categorySelect.value = 'pm_general';
        updateCategoryUI();
        const defaults = {methodGroup: 'slm', itActGroup: 'yes', halfRateGroup: 'no'};
        Object.keys(defaults).forEach(function(gid) {
            const g = document.getElementById(gid);
            if (!g) return;
            g.querySelectorAll('.toggle-btn').forEach(function(b) {
                const isDefault = b.dataset.value === defaults[gid];
                b.classList.toggle('active', isDefault);
                b.setAttribute('aria-selected', isDefault ? 'true' : 'false');
            });
        });
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('input[type="number"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalculate').click();
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
