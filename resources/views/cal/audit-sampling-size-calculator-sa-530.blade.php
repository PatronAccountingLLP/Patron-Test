@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Audit Sampling Size Calculator SA 530 | Attribute & MUS</title>
    <meta name="description" content="Free audit sampling size calculator under SA 530: tests of controls (attribute) and tests of details (MUS) sample sizes. ICAI-aligned, CA-reviewed. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/audit-sampling-size-calculator-sa-530/">
    <meta property="og:title" content="Audit Sampling Size Calculator (SA 530) — FY 2025-26">
    <meta property="og:description" content="Compute audit sample size per SA 530: Tests of Controls + Tests of Details (MUS). AICPA-aligned tables. Free CA-reviewed tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/audit-sampling-size-calculator-sa-530">
    <meta property="og:image" content="/tools/og/audit-sampling-size-calculator-sa-530.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Audit Sampling Size Calculator (SA 530) — FY 2025-26">
    <meta name="twitter:description" content="Tests of Controls + MUS Tests of Details. AICPA tables. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/audit-sampling-size-calculator-sa-530.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Audit Sampling Size Calculator (SA 530)",
      "description": "Audit Sampling Size Calculator computes statistical sample sizes per Standard on Auditing 530 (SA 530) Audit Sampling issued by the Institute of Chartered Accountants of India, converged with International Standard on Auditing 530. The tool supports two modes — Tests of Controls using attribute sampling with tolerable deviation rate and expected population deviation rate inputs, and Tests of Details using Monetary Unit Sampling (MUS) with population book value, tolerable misstatement linked to performance materiality under SA 320, expected misstatement and reliability factor inputs. Sample size tables are aligned with AICPA Audit Sampling Guide and ICAI Implementation Guide on SA 530, supporting 90% and 95% confidence levels. Output includes recommended sample size, frequency-based alternative for infrequent controls, stratification suggestion for variable populations, working paper text aligned with SA 530 Para 7 documentation requirements, and selection method guidance (random, systematic, haphazard, MUS, block). Suitable for statutory audit, tax audit, internal audit, IFC testing, SOC engagements and forensic audit.",
      "url": "/tools/audit-sampling-size-calculator-sa-530",
      "applicationCategory": "UtilityApplication",
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
        {"@type": "ListItem", "position": 3, "name": "Audit Sampling Size Calculator (SA 530)", "item": "/tools/audit-sampling-size-calculator-sa-530"}
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
          "name": "What is SA 530 Audit Sampling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard on Auditing 530 (SA 530) Audit Sampling is the ICAI standard governing the auditor's use of sampling when designing and selecting samples, performing audit procedures, and evaluating the results. Converged with ISA 530 issued by IAASB, the standard requires the auditor to determine sample size sufficient to reduce sampling risk to acceptably low levels, considering tolerable misstatement, expected misstatement, and the desired level of assurance. Both statistical and non-statistical sampling approaches are permitted."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between statistical and non-statistical sampling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statistical sampling uses random selection and probability theory to evaluate sample results — sampling risk can be quantified and the auditor can mathematically project results to the population. Non-statistical sampling uses professional judgement to select items and evaluate results — sampling risk cannot be quantified mathematically. Both are permitted under SA 530. Statistical sampling provides defensible audit conclusions for regulators and peer reviews; non-statistical sampling is faster but requires more documented judgement."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Tests of Controls and Tests of Details?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tests of Controls examine the operating effectiveness of internal controls — using attribute sampling with deviation rates. The auditor tests whether a control operated as designed (e.g., approval signatures, three-way match). Tests of Details examine balances and transactions for monetary misstatement — using variable sampling or Monetary Unit Sampling (MUS). The auditor tests whether amounts are correctly recorded. Both contribute to overall audit assurance under SA 330, but the sampling methodology differs significantly."
          }
        },
        {
          "@type": "Question",
          "name": "How is sample size determined under SA 530?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 530 Para 7 requires sample size to reduce sampling risk to acceptably low levels. Key factors per Appendix 2 and 3: tolerable rate or misstatement (lower → larger sample), expected rate or misstatement (higher → larger sample), assessed risk of material misstatement, level of assurance desired, and population size for small populations. ICAI Implementation Guide on SA 530 provides reference tables. AICPA Audit Sampling Guide is also widely used by Indian auditors as practical guidance."
          }
        },
        {
          "@type": "Question",
          "name": "What is Monetary Unit Sampling (MUS)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Monetary Unit Sampling (MUS) is a variable sampling method where the sampling unit is each individual rupee in the population rather than each item. Larger items have proportionally higher selection probability. Sample size = (Population Book Value × Reliability Factor) ÷ (Tolerable Misstatement − Expected Misstatement × Expansion Factor). MUS is preferred for accounts with overstated values like receivables, inventory and revenue. It is less effective for understatement testing — alternative substantive procedures may be needed."
          }
        },
        {
          "@type": "Question",
          "name": "What is Tolerable Misstatement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tolerable Misstatement under SA 530 Para 5(i) is the application of performance materiality determined under SA 320 to a particular sampling procedure. It is the maximum misstatement the auditor will accept while still concluding the audit objective has been achieved. Tolerable misstatement may equal performance materiality or may be set lower for sensitive accounts. The lower the tolerable misstatement, the larger the sample size required to provide sufficient assurance."
          }
        },
        {
          "@type": "Question",
          "name": "What is Expected Population Deviation Rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Expected Population Deviation Rate (EPDR) is the deviation rate the auditor expects to find in the control, based on prior audits, control environment understanding and pilot testing. Common EPDR values are 0% to 3% — controls with higher expected deviation may not be relied upon. Per ICAI Implementation Guide on SA 530, an EPDR of 2-3% is typical for an effective control. EPDR is directly related to sample size — higher EPDR drives larger sample."
          }
        },
        {
          "@type": "Question",
          "name": "What sample sizes does ICAI recommend for IFC testing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ICAI Guidance Note on Audit of Internal Financial Controls aligns with SA 530 sampling principles. Practical sample sizes by control frequency: Many-times-daily controls 25-90 items; Daily controls 25-30 items; Weekly controls 5-15 items; Monthly controls 2-5 items; Quarterly controls 2 items; Annual controls 1 item with additional procedures. For automated controls, single-instance testing with IT general controls assurance is acceptable. The exact sample varies by risk assessment under SA 315."
          }
        },
        {
          "@type": "Question",
          "name": "What do NFRA inspections say about audit sampling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NFRA inspection reports of listed company audits routinely flag audit sampling deficiencies — sample sizes determined without documented basis, no link to performance materiality, missing population definition, untested non-statistical sampling assumptions, and inadequate evaluation of sampling errors found. NFRA expects detailed working papers showing how SA 530 Para 6-7 factors were considered, the sampling method chosen and why, projection of misstatements per Para 14, and re-evaluation if errors exceed tolerable misstatement."
          }
        },
        {
          "@type": "Question",
          "name": "How does materiality affect audit sample size?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Performance Materiality determined under SA 320 directly drives Tolerable Misstatement under SA 530 Para 5(i). Lower performance materiality means lower tolerable misstatement which means larger required sample size. The relationship is inverse — halving tolerable misstatement approximately doubles required sample size. This is why first-year audits, high-risk engagements, and listed company audits typically have larger sample sizes — performance materiality is set conservatively at 50-65% of overall materiality, driving up sample sizes across the engagement."
          }
        },
        {
          "@type": "Question",
          "name": "What is stratification in audit sampling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Stratification under SA 530 Appendix 1 divides the population into homogeneous sub-populations (strata) based on monetary value or other characteristics, then samples each stratum separately. Common approach: examine all items above a threshold (high-value strata 100% tested), sample from medium-value strata, and statistically sample low-value strata. Stratification reduces overall sample size while maintaining audit assurance, particularly effective when there is wide variability in monetary size of items in the population."
          }
        },
        {
          "@type": "Question",
          "name": "What documentation is required under SA 530?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 530 read with SA 230 requires documentation of: the sampling method chosen (statistical or non-statistical), basis for sample size including tolerable rate or misstatement and expected rate or misstatement, sample selection method (random, systematic, haphazard, MUS, block), specific items tested, deviations or misstatements found, projection of results to the population, and conclusion on whether sample provides reasonable basis. Bare sample sizes without documented rationale are routinely flagged by NFRA and peer reviewers."
          }
        },
        {
          "@type": "Question",
          "name": "When should an auditor not use sampling?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 530 Para A3 notes situations where audit sampling is not applicable — auditor inquiries, observation, analytical procedures, and tests of 100% of items. 100% testing is appropriate for small populations (typically under 50 items), high-value items above a threshold, items at significant risk, atypical or unusual transactions, and items where alternative procedures are more efficient. Annual or one-time controls (e.g., year-end physical inventory count) are tested as single events rather than sampled."
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
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 14px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 16px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-group.stacked-mobile { flex-direction: column; }
        @media (min-width: 600px) { .toggle-group.stacked-mobile { flex-direction: row; } }
        .approach-toggle { background: linear-gradient(135deg, #F0FDFA 0%, #ECFDF5 100%); border: 2px solid var(--primary-light); padding: 6px; gap: 6px; margin-bottom: 24px; }
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
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); }
        .verdict-card.large-sample { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
        .verdict-card.full-test { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .sample-mega { font-family: var(--font-mono); font-size: 64px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -2px; }
        .sample-mega-suffix { font-size: 16px; color: var(--text-muted); margin-left: 8px; font-family: var(--font-body); font-weight: 500; }
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

        .wp-text { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 12px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre-wrap; }
        .wp-text .wp-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 6px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }

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
        .rate-table.numeric tbody td:not(:first-child) { text-align: right; font-family: var(--font-mono); font-weight: 600; }
        .rate-table.numeric thead th:not(:first-child) { text-align: right; }
        .formula-box { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
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
            .sample-mega { font-size: 48px; }
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
        <a href="#sampling-tables">Sampling Tables</a>
        <a href="#frequency-shortcuts">Frequency Shortcuts</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Audit Sampling Size Calculator (SA 530)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Audit Sampling Size Calculator <span>(SA 530)</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Standard on Auditing 530 (SA 530) Audit Sampling, issued by ICAI and converged with ISA 530, governs how auditors determine sample sizes for both Tests of Controls and Tests of Details. This calculator implements both methods — attribute sampling (deviation rate based) for control testing and Monetary Unit Sampling (MUS) for substantive testing — with reference tables aligned to AICPA Audit Sampling Guide and ICAI Implementation Guide on SA 530. Output includes recommended sample size, working paper text per Para 7 documentation requirements, and selection method guidance.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute Audit Sample Size</h2>
            <p class="calc-intro">Tests of Controls — for attribute sampling on internal controls (deviation rates). Tests of Details — for monetary substantive testing using MUS, linked to performance materiality from SA 320.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="toggle-group approach-toggle" id="modeGroup" role="tablist" aria-label="Sampling mode">
                <button type="button" class="toggle-btn active" data-value="toc" role="tab" aria-selected="true">Tests of Controls (Attribute)</button>
                <button type="button" class="toggle-btn" data-value="tod" role="tab" aria-selected="false">Tests of Details (MUS)</button>
            </div>

            <!-- TESTS OF CONTROLS -->
            <div class="approach-block active" id="tocBlock">
                <div class="calc-section-title">Control Profile</div>

                <div class="form-group" style="margin-bottom:18px;">
                    <label for="control_freq">Control Frequency</label>
                    <select id="control_freq">
                        <option value="manyDaily">Many times daily (continuous)</option>
                        <option value="daily" selected>Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                        <option value="quarterly">Quarterly</option>
                        <option value="annually">Annually / Once-off</option>
                    </select>
                    <span class="helper" id="freqHelper">Determines population frequency. ICAI Guidance Note on IFC links sample size to operating frequency.</span>
                </div>

                <div class="form-group" style="margin-bottom:18px;">
                    <label>Risk Level</label>
                    <div class="toggle-group" id="tocRiskGroup" role="tablist">
                        <button type="button" class="toggle-btn" data-value="low" role="tab" aria-selected="false">Low Risk</button>
                        <button type="button" class="toggle-btn active" data-value="medium" role="tab" aria-selected="true">Medium Risk</button>
                        <button type="button" class="toggle-btn" data-value="high" role="tab" aria-selected="false">High Risk</button>
                    </div>
                    <span class="helper" id="tocRiskHelper">Medium risk: TDR 7%, Confidence 95%. Auto-defaults below — override if needed.</span>
                </div>

                <div class="calc-section-title">Sampling Parameters (SA 530 Para 7)</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="tdr">Tolerable Deviation Rate (%)</label>
                        <input type="number" id="tdr" min="1" max="20" step="0.1" placeholder="7" inputmode="decimal">
                        <span class="helper">Max deviation rate the auditor accepts. Lower TDR → larger sample. Range 4-15%.</span>
                    </div>
                    <div class="form-group">
                        <label for="epdr">Expected Population Deviation Rate (%)</label>
                        <input type="number" id="epdr" min="0" max="10" step="0.1" placeholder="1" inputmode="decimal">
                        <span class="helper">Deviation rate auditor expects from prior years / pilot test. Typical 0-3%.</span>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom:18px;">
                    <label>Confidence Level</label>
                    <div class="toggle-group" id="tocConfGroup" role="tablist">
                        <button type="button" class="toggle-btn" data-value="90" role="tab" aria-selected="false">90% Confidence</button>
                        <button type="button" class="toggle-btn active" data-value="95" role="tab" aria-selected="true">95% Confidence</button>
                    </div>
                    <span class="helper">95% standard for high-risk / listed company audits. 90% for low-risk routine controls.</span>
                </div>

                <button type="button" class="btn-calculate" id="btnCalcToc">Compute Sample Size</button>
                <button type="button" class="btn-reset" id="btnResetToc">Reset</button>
            </div>

            <!-- TESTS OF DETAILS (MUS) -->
            <div class="approach-block" id="todBlock">
                <div class="calc-section-title">Population & Materiality</div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="popValue">Population Book Value (₹)</label>
                        <input type="number" id="popValue" min="0" step="any" placeholder="e.g. 100000000" inputmode="decimal">
                        <span class="helper">Total ₹ value of the account or class being tested (e.g. trade receivables).</span>
                    </div>
                    <div class="form-group">
                        <label for="popItems">Number of Items in Population</label>
                        <input type="number" id="popItems" min="1" step="1" placeholder="e.g. 5000" inputmode="numeric">
                        <span class="helper">Item count helps assess if 100% testing is more efficient (small populations &lt;50).</span>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group">
                        <label for="perfMat">Performance Materiality (₹)</label>
                        <input type="number" id="perfMat" min="0" step="any" placeholder="e.g. 500000" inputmode="decimal">
                        <span class="helper">From SA 320 — typically 50-75% of overall materiality. <a href="/tools/audit-materiality-calculator-sa-320" style="color:var(--primary-light);">Compute first ↗</a></span>
                    </div>
                    <div class="form-group">
                        <label for="tmPct">Tolerable Misstatement (% of PM)</label>
                        <input type="number" id="tmPct" min="50" max="100" step="1" value="75" inputmode="numeric">
                        <span class="helper">% of PM applied to this account. Default 75%. Lower for sensitive accounts.</span>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom:18px;">
                    <label for="expMisstmt">Expected Misstatement (₹)</label>
                    <input type="number" id="expMisstmt" min="0" step="any" placeholder="0" inputmode="decimal">
                    <span class="helper">Expected from prior audits or risk assessment. Higher EM → larger sample. Enter 0 for no expected.</span>
                </div>

                <div class="calc-section-title">Risk & Reliability</div>

                <div class="form-group" style="margin-bottom:18px;">
                    <label>Risk of Material Misstatement</label>
                    <div class="toggle-group" id="todRiskGroup" role="tablist">
                        <button type="button" class="toggle-btn" data-value="low" role="tab" aria-selected="false">Low (RF 1.61)</button>
                        <button type="button" class="toggle-btn active" data-value="medium" role="tab" aria-selected="true">Medium (RF 2.31)</button>
                        <button type="button" class="toggle-btn" data-value="high" role="tab" aria-selected="false">High (RF 3.00)</button>
                    </div>
                    <span class="helper" id="todRiskHelper">Medium risk: 90% confidence, RF 2.31. Drives reliability factor in MUS formula.</span>
                </div>

                <button type="button" class="btn-calculate" id="btnCalcTod">Compute MUS Sample Size</button>
                <button type="button" class="btn-reset" id="btnResetTod">Reset</button>
            </div>

            <!-- RESULT -->
            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Recommended Sample Size</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="sample-mega"><span id="sampleVal">0</span><span class="sample-mega-suffix">items</span></div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis & Method</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Working Paper Text — SA 530 Documentation</h3>
                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:8px;">Copy this narrative into your audit working papers. Customise the entity-specific reasoning before finalising.</p>
                <div class="wp-text" id="workingPaperText"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The calculator implements both sampling methods permitted under SA 530 — attribute sampling for Tests of Controls (deviation rates) and Monetary Unit Sampling (MUS) for Tests of Details (monetary misstatements). Sample sizes align with AICPA Audit Sampling Guide reference tables widely cited in ICAI Implementation Guides.</p>

            <h3>Tests of Controls — Attribute Sampling</h3>
            <p>For testing operating effectiveness of internal controls, the auditor specifies three parameters:</p>
            <ul>
                <li><strong>Tolerable Deviation Rate (TDR)</strong> — maximum rate of deviation the auditor will accept while still relying on the control. Typical 5-10%</li>
                <li><strong>Expected Population Deviation Rate (EPDR)</strong> — auditor's estimate of actual deviation rate based on prior audits. Typical 0-3%</li>
                <li><strong>Confidence Level</strong> — sampling risk tolerance. 95% (sampling risk 5%) is standard for listed companies; 90% acceptable for low-risk private companies</li>
            </ul>
            <p>The calculator looks up the AICPA standard table for the (TDR, EPDR, Confidence) combination. If EPDR approaches TDR, sample size grows rapidly — meaning the control should not be relied upon and substantive procedures should expand.</p>

            <h3>Tests of Details — Monetary Unit Sampling</h3>
            <p>For substantive testing of balances, MUS uses each rupee in the population as a sampling unit. Larger items have proportionally higher selection probability. The formula is:</p>

            <div class="formula-box">
<span class="label">Sample Size</span> = (Population Book Value × Reliability Factor) ÷ Tolerable Misstatement

<span class="label">Where</span>:
   Reliability Factor = 1.61 (Low Risk, 80% conf.)
                       2.31 (Medium Risk, 90% conf.)
                       3.00 (High Risk, 95% conf.)

   Tolerable Misstatement = Performance Materiality × % allocation

<span class="label">If Expected Misstatement &gt; 0</span>:
   Adjusted denominator = Tolerable − (Expected × 1.6 expansion)
            </div>

            <h3>Reliability Factor by Risk</h3>
            <table class="rate-table numeric">
                <thead>
                    <tr><th>Risk / Confidence</th><th>0 errors</th><th>1 error</th><th>2 errors</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Low (80%)</strong></td><td>1.61</td><td>3.00</td><td>4.28</td></tr>
                    <tr><td><strong>Medium (90%)</strong></td><td>2.31</td><td>3.89</td><td>5.33</td></tr>
                    <tr><td><strong>High (95%)</strong></td><td>3.00</td><td>4.75</td><td>6.30</td></tr>
                    <tr><td><strong>Very High (99%)</strong></td><td>4.61</td><td>6.64</td><td>8.41</td></tr>
                </tbody>
            </table>

            <h3>When NOT to Use Sampling</h3>
            <p>SA 530 Para A3 lists situations where 100% testing or alternative procedures are more appropriate:</p>
            <ul>
                <li>Small populations (typically under 50 items) — sampling is less efficient</li>
                <li>High-value items above a stratification threshold — test 100% above the threshold</li>
                <li>Items at significant risk under SA 315</li>
                <li>Atypical or unusual transactions identified by analytical procedures</li>
                <li>Annual or once-off controls (e.g., year-end physical inventory count)</li>
                <li>Computer-assisted audit techniques (CAATs) testing 100% of transactions</li>
            </ul>
        </section>

        <section class="content-section" id="sampling-tables">
            <h2>Sampling Tables — AICPA / ICAI Reference</h2>
            <p>The following tables provide reference sample sizes from the AICPA Audit Sampling Guide, widely cited in ICAI Implementation Guide on SA 530. They assume large populations (over 250 items); for smaller populations, the tables overstate required sample size and audit judgement may reduce them.</p>

            <h3>Tests of Controls — 95% Confidence Level</h3>
            <table class="rate-table numeric">
                <thead>
                    <tr><th>Tolerable Deviation Rate</th><th>EPDR 0%</th><th>EPDR 1%</th><th>EPDR 2%</th><th>EPDR 3%</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>4%</strong></td><td>74</td><td>99</td><td>—</td><td>—</td></tr>
                    <tr><td><strong>5%</strong></td><td>59</td><td>78</td><td>124</td><td>—</td></tr>
                    <tr><td><strong>6%</strong></td><td>49</td><td>64</td><td>100</td><td>158</td></tr>
                    <tr><td><strong>7%</strong></td><td>42</td><td>55</td><td>88</td><td>116</td></tr>
                    <tr><td><strong>8%</strong></td><td>36</td><td>48</td><td>77</td><td>100</td></tr>
                    <tr><td><strong>9%</strong></td><td>32</td><td>42</td><td>66</td><td>88</td></tr>
                    <tr><td><strong>10%</strong></td><td>29</td><td>38</td><td>58</td><td>77</td></tr>
                    <tr><td><strong>15%</strong></td><td>19</td><td>25</td><td>38</td><td>50</td></tr>
                    <tr><td><strong>20%</strong></td><td>14</td><td>18</td><td>27</td><td>36</td></tr>
                </tbody>
            </table>

            <h3>Tests of Controls — 90% Confidence Level</h3>
            <table class="rate-table numeric">
                <thead>
                    <tr><th>Tolerable Deviation Rate</th><th>EPDR 0%</th><th>EPDR 1%</th><th>EPDR 2%</th><th>EPDR 3%</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>5%</strong></td><td>45</td><td>64</td><td>—</td><td>—</td></tr>
                    <tr><td><strong>6%</strong></td><td>38</td><td>55</td><td>89</td><td>—</td></tr>
                    <tr><td><strong>7%</strong></td><td>32</td><td>46</td><td>72</td><td>—</td></tr>
                    <tr><td><strong>8%</strong></td><td>28</td><td>40</td><td>62</td><td>91</td></tr>
                    <tr><td><strong>10%</strong></td><td>22</td><td>30</td><td>46</td><td>62</td></tr>
                    <tr><td><strong>15%</strong></td><td>15</td><td>20</td><td>30</td><td>40</td></tr>
                    <tr><td><strong>20%</strong></td><td>11</td><td>14</td><td>22</td><td>28</td></tr>
                </tbody>
            </table>

            <p>Tables sourced from AICPA Audit Sampling Guide. ICAI Implementation Guide on SA 530 endorses similar tables. For full SA 530 text, refer to <a href="https://kb.icai.org/" target="_blank" rel="noopener">ICAI Knowledge Bank</a> and <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> portal. The international equivalent ISA 530 is published by IAASB under <a href="https://www.iaasb.org/" target="_blank" rel="noopener">IAASB</a>. The underlying Companies Act audit framework is available at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> portal and <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>
        </section>

        <section class="content-section" id="frequency-shortcuts">
            <h2>Frequency-Based Sample Sizes (IFC / Routine Controls)</h2>
            <p>For testing routine internal controls in IFC engagements, the following pragmatic sample sizes are widely used in Indian audit practice — aligned with ICAI Guidance Note on Audit of Internal Financial Controls and AICPA SOC sampling guidance.</p>

            <table class="rate-table numeric">
                <thead>
                    <tr><th>Control Frequency</th><th>Population</th><th>Low Risk</th><th>Medium Risk</th><th>High Risk</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Many times daily</strong></td><td>~10,000+</td><td>25</td><td>40</td><td>60</td></tr>
                    <tr><td><strong>Daily</strong></td><td>~250</td><td>20</td><td>25</td><td>30</td></tr>
                    <tr><td><strong>Weekly</strong></td><td>52</td><td>5</td><td>10</td><td>15</td></tr>
                    <tr><td><strong>Monthly</strong></td><td>12</td><td>2</td><td>3</td><td>5</td></tr>
                    <tr><td><strong>Quarterly</strong></td><td>4</td><td>2</td><td>2</td><td>2</td></tr>
                    <tr><td><strong>Annually</strong></td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                </tbody>
            </table>

            <h3>Selection Methods Permitted</h3>
            <ul>
                <li><strong>Random Selection</strong> — using random number generators or audit software (preferred for statistical sampling)</li>
                <li><strong>Systematic Selection</strong> — every Nth item starting from a random point (efficient for large populations)</li>
                <li><strong>Haphazard Selection</strong> — without conscious bias; used in non-statistical sampling</li>
                <li><strong>Monetary Unit Sampling (MUS)</strong> — probability proportional to size; preferred for tests of details</li>
                <li><strong>Block Selection</strong> — contiguous items; least preferred, may miss systemic issues</li>
            </ul>

            <div class="callout warn">
                <p><strong>NFRA inspection alert:</strong> Recent <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspection reports flag sample sizes determined without documented basis, missing link to performance materiality, untested non-statistical assumptions, and inadequate evaluation of sampling errors. Bare sample sizes — even if reasonable — without working paper rationale are routinely cited as deficiencies.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help with Audit Sampling & SA 530 Documentation?</h3>
            <p>Patron Accounting LLP supports audit firms and audit committees with SA 530 sampling design, MUS implementation, working paper preparation, NFRA-compliant audit documentation, and CAATs deployment — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Audit%20Sampling%20Calculator.%20I%20need%20help%20with%20SA%20530%20sampling%20design%20and%20documentation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is SA 530 Audit Sampling?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Standard on Auditing 530 (SA 530) Audit Sampling is the ICAI standard governing the auditor's use of sampling when designing and selecting samples, performing audit procedures, and evaluating the results. Converged with ISA 530 issued by IAASB, the standard requires the auditor to determine sample size sufficient to reduce sampling risk to acceptably low levels, considering tolerable misstatement, expected misstatement, and the desired level of assurance. Both statistical and non-statistical sampling approaches are permitted.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between statistical and non-statistical sampling?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Statistical sampling uses random selection and probability theory to evaluate sample results — sampling risk can be quantified and the auditor can mathematically project results to the population. Non-statistical sampling uses professional judgement to select items and evaluate results — sampling risk cannot be quantified mathematically. Both are permitted under SA 530. Statistical sampling provides defensible audit conclusions for regulators and peer reviews; non-statistical sampling is faster but requires more documented judgement.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between Tests of Controls and Tests of Details?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Tests of Controls examine the operating effectiveness of internal controls — using attribute sampling with deviation rates. The auditor tests whether a control operated as designed (e.g., approval signatures, three-way match). Tests of Details examine balances and transactions for monetary misstatement — using variable sampling or Monetary Unit Sampling (MUS). The auditor tests whether amounts are correctly recorded. Both contribute to overall audit assurance under SA 330, but the sampling methodology differs significantly.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is sample size determined under SA 530?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 530 Para 7 requires sample size to reduce sampling risk to acceptably low levels. Key factors per Appendix 2 and 3: tolerable rate or misstatement (lower → larger sample), expected rate or misstatement (higher → larger sample), assessed risk of material misstatement, level of assurance desired, and population size for small populations. ICAI Implementation Guide on SA 530 provides reference tables. AICPA Audit Sampling Guide is also widely used by Indian auditors as practical guidance.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Monetary Unit Sampling (MUS)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Monetary Unit Sampling (MUS) is a variable sampling method where the sampling unit is each individual rupee in the population rather than each item. Larger items have proportionally higher selection probability. Sample size = (Population Book Value × Reliability Factor) ÷ (Tolerable Misstatement − Expected Misstatement × Expansion Factor). MUS is preferred for accounts with overstated values like receivables, inventory and revenue. It is less effective for understatement testing — alternative substantive procedures may be needed.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Tolerable Misstatement?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Tolerable Misstatement under SA 530 Para 5(i) is the application of performance materiality determined under SA 320 to a particular sampling procedure. It is the maximum misstatement the auditor will accept while still concluding the audit objective has been achieved. Tolerable misstatement may equal performance materiality or may be set lower for sensitive accounts. The lower the tolerable misstatement, the larger the sample size required to provide sufficient assurance.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is Expected Population Deviation Rate?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Expected Population Deviation Rate (EPDR) is the deviation rate the auditor expects to find in the control, based on prior audits, control environment understanding and pilot testing. Common EPDR values are 0% to 3% — controls with higher expected deviation may not be relied upon. Per ICAI Implementation Guide on SA 530, an EPDR of 2-3% is typical for an effective control. EPDR is directly related to sample size — higher EPDR drives larger sample.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What sample sizes does ICAI recommend for IFC testing?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">ICAI Guidance Note on Audit of Internal Financial Controls aligns with SA 530 sampling principles. Practical sample sizes by control frequency: Many-times-daily controls 25-90 items; Daily controls 25-30 items; Weekly controls 5-15 items; Monthly controls 2-5 items; Quarterly controls 2 items; Annual controls 1 item with additional procedures. For automated controls, single-instance testing with IT general controls assurance is acceptable. The exact sample varies by risk assessment under SA 315.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What do NFRA inspections say about audit sampling?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">NFRA inspection reports of listed company audits routinely flag audit sampling deficiencies — sample sizes determined without documented basis, no link to performance materiality, missing population definition, untested non-statistical sampling assumptions, and inadequate evaluation of sampling errors found. NFRA expects detailed working papers showing how SA 530 Para 6-7 factors were considered, the sampling method chosen and why, projection of misstatements per Para 14, and re-evaluation if errors exceed tolerable misstatement.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How does materiality affect audit sample size?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Performance Materiality determined under SA 320 directly drives Tolerable Misstatement under SA 530 Para 5(i). Lower performance materiality means lower tolerable misstatement which means larger required sample size. The relationship is inverse — halving tolerable misstatement approximately doubles required sample size. This is why first-year audits, high-risk engagements, and listed company audits typically have larger sample sizes — performance materiality is set conservatively at 50-65% of overall materiality, driving up sample sizes across the engagement.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is stratification in audit sampling?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Stratification under SA 530 Appendix 1 divides the population into homogeneous sub-populations (strata) based on monetary value or other characteristics, then samples each stratum separately. Common approach: examine all items above a threshold (high-value strata 100% tested), sample from medium-value strata, and statistically sample low-value strata. Stratification reduces overall sample size while maintaining audit assurance, particularly effective when there is wide variability in monetary size of items in the population.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What documentation is required under SA 530?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 530 read with SA 230 requires documentation of: the sampling method chosen (statistical or non-statistical), basis for sample size including tolerable rate or misstatement and expected rate or misstatement, sample selection method (random, systematic, haphazard, MUS, block), specific items tested, deviations or misstatements found, projection of results to the population, and conclusion on whether sample provides reasonable basis. Bare sample sizes without documented rationale are routinely flagged by NFRA and peer reviewers.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">When should an auditor not use sampling?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 530 Para A3 notes situations where audit sampling is not applicable — auditor inquiries, observation, analytical procedures, and tests of 100% of items. 100% testing is appropriate for small populations (typically under 50 items), high-value items above a threshold, items at significant risk, atypical or unusual transactions, and items where alternative procedures are more efficient. Annual or one-time controls (e.g., year-end physical inventory count) are tested as single events rather than sampled.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>SA 530 Sampling Support</h3>
            <p>Sampling design, MUS implementation, working papers, NFRA-aligned documentation — fixed-fee.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Audit%20Sampling%20Calculator.%20I%20need%20help%20with%20SA%20530%20sampling%20design%20and%20documentation.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/secretarial-audit" class="sidebar-link">Secretarial Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/audit-materiality-calculator-sa-320" class="sidebar-link">Audit Materiality (SA 320)<span class="arrow">→</span></a>
            <a href="/tools/ifc-testing-checklist" class="sidebar-link">IFC Testing Checklist<span class="arrow">→</span></a>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ecl-calculator-ind-as-109" class="sidebar-link">ECL Calculator (Ind AS 109)<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
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

    // ===== HELPERS =====
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
    function fmtINRDecimal(num) {
        return num.toLocaleString('en-IN', {maximumFractionDigits: 0, minimumFractionDigits: 0});
    }
    function v(id) {
        return parseFloat(document.getElementById(id).value) || 0;
    }

    // ===== TOC LOOKUP TABLES =====
    // 95% confidence (sampling risk 5%)
    const TOC_TABLE_95 = {
        4:  {0: 74, 1: 99},
        5:  {0: 59, 1: 78, 2: 124},
        6:  {0: 49, 1: 64, 2: 100, 3: 158},
        7:  {0: 42, 1: 55, 2: 88,  3: 116},
        8:  {0: 36, 1: 48, 2: 77,  3: 100},
        9:  {0: 32, 1: 42, 2: 66,  3: 88},
        10: {0: 29, 1: 38, 2: 58,  3: 77},
        15: {0: 19, 1: 25, 2: 38,  3: 50},
        20: {0: 14, 1: 18, 2: 27,  3: 36}
    };
    const TOC_TABLE_90 = {
        5:  {0: 45, 1: 64},
        6:  {0: 38, 1: 55, 2: 89},
        7:  {0: 32, 1: 46, 2: 72},
        8:  {0: 28, 1: 40, 2: 62, 3: 91},
        10: {0: 22, 1: 30, 2: 46, 3: 62},
        15: {0: 15, 1: 20, 2: 30, 3: 40},
        20: {0: 11, 1: 14, 2: 22, 3: 28}
    };

    function tocLookup(tdrPct, epdrPct, conf) {
        const table = conf == 95 ? TOC_TABLE_95 : TOC_TABLE_90;
        // Find nearest TDR (round to closest table value)
        const tdrKeys = Object.keys(table).map(Number).sort((a, b) => a - b);
        let nearestTdr = tdrKeys[0];
        for (const k of tdrKeys) {
            if (k <= tdrPct) nearestTdr = k;
        }
        const epdrKeys = Object.keys(table[nearestTdr]).map(Number).sort((a, b) => a - b);
        let nearestEpdr = epdrKeys[0];
        for (const k of epdrKeys) {
            if (k <= epdrPct) nearestEpdr = k;
        }
        const result = table[nearestTdr][nearestEpdr];
        return {sampleSize: result, tdrUsed: nearestTdr, epdrUsed: nearestEpdr, exact: (nearestTdr === tdrPct && nearestEpdr === epdrPct)};
    }

    // ===== RISK DEFAULTS =====
    const TOC_RISK_DEFAULTS = {
        low:    {tdr: 10, epdr: 1, conf: 90},
        medium: {tdr: 7,  epdr: 1, conf: 95},
        high:   {tdr: 5,  epdr: 0, conf: 95}
    };
    const TOD_RISK_RF = {
        low:    {rf: 1.61, conf: 80},
        medium: {rf: 2.31, conf: 90},
        high:   {rf: 3.00, conf: 95}
    };
    const FREQ_DATA = {
        manyDaily:  {label: 'Many times daily', popLabel: '~10,000+ instances', shortcut: {low: 25, medium: 40, high: 60}},
        daily:      {label: 'Daily', popLabel: '~250 instances', shortcut: {low: 20, medium: 25, high: 30}},
        weekly:     {label: 'Weekly', popLabel: '52 instances', shortcut: {low: 5, medium: 10, high: 15}},
        monthly:    {label: 'Monthly', popLabel: '12 instances', shortcut: {low: 2, medium: 3, high: 5}},
        quarterly:  {label: 'Quarterly', popLabel: '4 instances', shortcut: {low: 2, medium: 2, high: 2}},
        annually:   {label: 'Annually', popLabel: '1 instance', shortcut: {low: 1, medium: 1, high: 1}}
    };

    // ===== SETUP =====
    setupToggleGroup('modeGroup', function() {
        const v = getActiveValue('modeGroup');
        document.getElementById('tocBlock').classList.toggle('active', v === 'toc');
        document.getElementById('todBlock').classList.toggle('active', v === 'tod');
        document.getElementById('resultSection').classList.remove('visible');
    });

    setupToggleGroup('tocRiskGroup', function() {
        const risk = getActiveValue('tocRiskGroup');
        const d = TOC_RISK_DEFAULTS[risk];
        document.getElementById('tdr').placeholder = d.tdr;
        document.getElementById('epdr').placeholder = d.epdr;
        const helpText = {
            low: 'Low risk: TDR 10%, EPDR 1%, Confidence 90%. Routine controls with strong control environment.',
            medium: 'Medium risk: TDR 7%, EPDR 1%, Confidence 95%. Standard private company audits.',
            high: 'High risk: TDR 5%, EPDR 0%, Confidence 95%. Listed companies, fraud-sensitive areas.'
        };
        document.getElementById('tocRiskHelper').textContent = helpText[risk];
        // Auto-set confidence
        document.querySelectorAll('#tocConfGroup .toggle-btn').forEach(function(b) {
            const isActive = parseInt(b.dataset.value) === d.conf;
            b.classList.toggle('active', isActive);
            b.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });
    });
    setupToggleGroup('tocConfGroup');
    setupToggleGroup('todRiskGroup', function() {
        const risk = getActiveValue('todRiskGroup');
        const d = TOD_RISK_RF[risk];
        const helpText = {
            low: 'Low risk: ' + d.conf + '% confidence, RF ' + d.rf + '. Strong controls relied upon, low inherent risk.',
            medium: 'Medium risk: ' + d.conf + '% confidence, RF ' + d.rf + '. Standard substantive testing.',
            high: 'High risk: ' + d.conf + '% confidence, RF ' + d.rf + '. Fraud-sensitive, no control reliance.'
        };
        document.getElementById('todRiskHelper').textContent = helpText[risk];
    });

    document.getElementById('control_freq').addEventListener('change', function(e) {
        const f = FREQ_DATA[e.target.value];
        if (f) {
            document.getElementById('freqHelper').textContent = 'Population: ' + f.popLabel + '. Use frequency-shortcut table or compute via TDR/EPDR below.';
        }
    });

    // ===== COMPUTE TOC =====
    function computeToc() {
        const freq = document.getElementById('control_freq').value;
        const risk = getActiveValue('tocRiskGroup');
        const conf = parseInt(getActiveValue('tocConfGroup'));
        const defaults = TOC_RISK_DEFAULTS[risk];
        const tdr = v('tdr') || defaults.tdr;
        const epdr = v('epdr') !== 0 ? v('epdr') : defaults.epdr;

        if (tdr <= 0 || tdr > 25) { alert('TDR must be between 1 and 20%.'); return; }
        if (epdr < 0 || epdr >= tdr) { alert('EPDR must be 0% or higher and lower than TDR.'); return; }

        // Frequency-based shortcut for low-judgement scenarios
        const freqShortcut = FREQ_DATA[freq].shortcut[risk];

        // AICPA table lookup
        const lookup = tocLookup(tdr, epdr, conf);

        // For low-frequency controls, use the shortcut (table values can over-state)
        let recommendedSize, method;
        if (['monthly', 'quarterly', 'annually'].includes(freq)) {
            recommendedSize = freqShortcut;
            method = 'Frequency-based (small population)';
        } else if (freq === 'weekly' && lookup.sampleSize > 52) {
            recommendedSize = Math.min(lookup.sampleSize, 52);
            method = 'Capped at population (52)';
        } else {
            recommendedSize = lookup.sampleSize;
            method = 'AICPA Audit Sampling Guide table (' + conf + '% confidence)';
        }

        renderTocResult({
            mode: 'toc',
            freq: freq,
            risk: risk,
            tdr: tdr,
            epdr: epdr,
            conf: conf,
            sampleSize: recommendedSize,
            tableSize: lookup.sampleSize,
            tableTdr: lookup.tdrUsed,
            tableEpdr: lookup.epdrUsed,
            tableExact: lookup.exact,
            freqShortcut: freqShortcut,
            method: method
        });
    }

    // ===== COMPUTE TOD (MUS) =====
    function computeTod() {
        const popValue = v('popValue');
        const popItems = v('popItems');
        const perfMat = v('perfMat');
        const tmPct = v('tmPct') || 75;
        const expMisstmt = v('expMisstmt');
        const risk = getActiveValue('todRiskGroup');
        const rfData = TOD_RISK_RF[risk];

        if (popValue <= 0) { alert('Please enter population book value.'); return; }
        if (perfMat <= 0) { alert('Please enter performance materiality.'); return; }
        if (tmPct < 1 || tmPct > 100) { alert('Tolerable misstatement % must be between 1 and 100.'); return; }

        const tolerableMisstmt = perfMat * (tmPct / 100);

        if (expMisstmt >= tolerableMisstmt) {
            alert('Expected misstatement must be less than tolerable misstatement (₹' + fmtINRDecimal(tolerableMisstmt) + '). Otherwise sampling will not provide reasonable basis — consider 100% testing.');
            return;
        }

        // MUS Sample Size Formula
        const expansionFactor = expMisstmt > 0 ? 1.6 : 1.0;
        const adjustedDenom = tolerableMisstmt - (expMisstmt * expansionFactor);
        const sampleSize = Math.ceil((popValue * rfData.rf) / adjustedDenom);

        // Check if 100% testing more efficient (small populations)
        const fullTestThreshold = 50;
        const isSmallPop = popItems > 0 && popItems <= fullTestThreshold;
        const isSampleNearPop = popItems > 0 && sampleSize > popItems * 0.5;

        renderTodResult({
            mode: 'tod',
            popValue: popValue,
            popItems: popItems,
            perfMat: perfMat,
            tmPct: tmPct,
            tolerableMisstmt: tolerableMisstmt,
            expMisstmt: expMisstmt,
            risk: risk,
            rf: rfData.rf,
            conf: rfData.conf,
            expansionFactor: expansionFactor,
            sampleSize: Math.min(sampleSize, popItems > 0 ? popItems : sampleSize),
            rawSampleSize: sampleSize,
            isSmallPop: isSmallPop,
            isSampleNearPop: isSampleNearPop
        });
    }

    // ===== RENDER TOC =====
    function renderTocResult(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card';
        if (r.sampleSize > 90) card.className = 'verdict-card large-sample';

        document.getElementById('verdictLabel').textContent = 'Tests of Controls — Attribute Sampling';
        document.getElementById('verdictHeadline').textContent = FREQ_DATA[r.freq].label + ' Control — ' + r.risk.charAt(0).toUpperCase() + r.risk.slice(1) + ' Risk';
        document.getElementById('sampleVal').textContent = r.sampleSize;

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Sample Size', value: r.sampleSize, highlight: true},
            {label: 'Method', value: r.method.length > 30 ? r.method.substring(0, 28) + '...' : r.method},
            {label: 'TDR / EPDR', value: r.tdr + '% / ' + r.epdr + '%'},
            {label: 'Confidence', value: r.conf + '%'},
            {label: 'Frequency', value: FREQ_DATA[r.freq].label},
            {label: 'Frequency Shortcut', value: r.freqShortcut + ' items'}
        ];
        items.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '<strong>Sample size determined per SA 530.</strong> ';
        if (!r.tableExact) {
            advHtml += 'Inputs (TDR ' + r.tdr + '%, EPDR ' + r.epdr + '%) approximated to nearest table value (TDR ' + r.tableTdr + '%, EPDR ' + r.tableEpdr + '%). ';
        }
        if (r.epdr > 0 && (r.epdr / r.tdr) > 0.5) {
            advHtml += '<br><br><strong>EPDR/TDR ratio above 50%:</strong> Consider whether the control is sufficiently effective to be relied upon. High expected deviation suggests substantive procedures may need to expand.';
            advisory.className = 'info-banner warn';
        } else {
            advisory.className = 'info-banner success';
        }
        advisory.innerHTML = advHtml;

        // Basis text
        let basis = '<strong>Method:</strong> ' + r.method + '. ';
        basis += 'TDR ' + r.tdr + '%, EPDR ' + r.epdr + '%, Confidence ' + r.conf + '%. ';
        basis += 'Frequency-shortcut table value: ' + r.freqShortcut + '. AICPA table value: ' + r.tableSize + '. ';
        basis += '<br><br><em>Selection method:</em> Random or systematic preferred. Document selection technique in working papers per SA 530 Para 14.';
        document.getElementById('basisText').innerHTML = basis;

        // Working paper text
        const wp = document.getElementById('workingPaperText');
        let wpHtml = '<span class="wp-label">Sampling Memo — Tests of Controls</span>';
        wpHtml += 'Per SA 530 Audit Sampling:\n\n';
        wpHtml += 'A. SAMPLING APPROACH\n';
        wpHtml += '   Type:           Tests of Controls (Attribute Sampling)\n';
        wpHtml += '   Method:         ' + r.method + '\n';
        wpHtml += '   Control:        [Describe specific control being tested]\n';
        wpHtml += '   Frequency:      ' + FREQ_DATA[r.freq].label + '\n\n';
        wpHtml += 'B. SAMPLING PARAMETERS (SA 530 Para 7)\n';
        wpHtml += '   Tolerable Deviation Rate:  ' + r.tdr + '%\n';
        wpHtml += '   Expected Deviation Rate:   ' + r.epdr + '%\n';
        wpHtml += '   Confidence Level:          ' + r.conf + '%\n';
        wpHtml += '   Sampling Risk Acceptable:  ' + (100 - r.conf) + '%\n\n';
        wpHtml += 'C. SAMPLE SIZE\n';
        wpHtml += '   Recommended Size:          ' + r.sampleSize + ' items\n';
        wpHtml += '   AICPA Table Reference:     ' + r.tableSize + ' (TDR ' + r.tableTdr + '%, EPDR ' + r.tableEpdr + '%)\n';
        wpHtml += '   Risk Assessment:           ' + r.risk.charAt(0).toUpperCase() + r.risk.slice(1) + '\n\n';
        wpHtml += 'D. SELECTION METHOD\n';
        wpHtml += '   [Random / Systematic / Haphazard / Block — circle one]\n';
        wpHtml += '   Selection Tool:            [e.g., Excel RANDBETWEEN, audit software CAATs]\n\n';
        wpHtml += 'E. EVALUATION\n';
        wpHtml += '   Deviations Found:          [Document]\n';
        wpHtml += '   Sample Deviation Rate:     [Computed]\n';
        wpHtml += '   Conclusion:                [Reliance / No reliance / Expand sample]\n\n';
        wpHtml += 'Prepared by: [Engagement Team]   Reviewed by: [Engagement Partner]   Date: [DD-MMM-YYYY]';
        wp.innerHTML = wpHtml;

        showResults();
    }

    // ===== RENDER TOD =====
    function renderTodResult(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card';
        if (r.isSmallPop) card.className = 'verdict-card full-test';
        else if (r.sampleSize > 200) card.className = 'verdict-card large-sample';

        document.getElementById('verdictLabel').textContent = 'Tests of Details — Monetary Unit Sampling';
        let headline = r.risk.charAt(0).toUpperCase() + r.risk.slice(1) + ' Risk MUS — ' + r.conf + '% Confidence';
        if (r.isSmallPop) headline = 'Small Population — Consider 100% Testing';
        document.getElementById('verdictHeadline').textContent = headline;
        document.getElementById('sampleVal').textContent = r.isSmallPop ? r.popItems : r.sampleSize;

        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const items = [
            {label: 'Sample Size', value: r.isSmallPop ? r.popItems + ' (100%)' : r.sampleSize, highlight: true},
            {label: 'Population Value', value: fmtINR(r.popValue)},
            {label: 'Tolerable Misstatement', value: fmtINR(r.tolerableMisstmt)},
            {label: 'Expected Misstatement', value: fmtINR(r.expMisstmt)},
            {label: 'Reliability Factor', value: r.rf.toFixed(2)},
            {label: 'Confidence', value: r.conf + '%'}
        ];
        items.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '';
        if (r.isSmallPop) {
            advisory.className = 'info-banner danger';
            advHtml = '<strong>Small population detected (' + r.popItems + ' items ≤ 50).</strong> Per SA 530 Para A3, sampling may not be efficient for small populations. Consider 100% testing of all ' + r.popItems + ' items, or stratify by value (test high-value items 100% + sample low-value).';
        } else if (r.isSampleNearPop) {
            advisory.className = 'info-banner warn';
            advHtml = '<strong>Sample size approaches population size.</strong> Computed sample (' + r.rawSampleSize + ') is more than half of population (' + r.popItems + ' items). 100% testing may be more efficient. Consider stratification — test all high-value items + sample remainder.';
        } else {
            advisory.className = 'info-banner success';
            advHtml = '<strong>MUS sample size determined per SA 530.</strong> Sample selection: random selection from population using rupee-based intervals. Items above ₹' + fmtINRDecimal(r.popValue / r.sampleSize) + ' will likely all be selected (high-value strata effect inherent in MUS).';
        }
        if (r.expMisstmt > 0) {
            advHtml += '<br><br><strong>Expected misstatement adjustment:</strong> Expansion factor of ' + r.expansionFactor.toFixed(1) + ' applied. If actual misstatement found exceeds expected, evaluate whether sampling provides reasonable basis per SA 530 Para 15.';
        }
        advisory.innerHTML = advHtml;

        let basis = '<strong>MUS Formula:</strong> Sample = (Population × RF) ÷ (Tolerable − Expected × Expansion). ';
        basis += 'Sample = (₹' + fmtINRDecimal(r.popValue) + ' × ' + r.rf.toFixed(2) + ') ÷ ';
        basis += '(₹' + fmtINRDecimal(r.tolerableMisstmt) + ' − ₹' + fmtINRDecimal(r.expMisstmt) + ' × ' + r.expansionFactor.toFixed(1) + ') ';
        basis += '= <strong>' + r.rawSampleSize + ' items</strong>. ';
        basis += '<br><br><em>Tolerable Misstatement = ' + r.tmPct + '% of Performance Materiality (₹' + fmtINRDecimal(r.perfMat) + ') = ₹' + fmtINRDecimal(r.tolerableMisstmt) + '.</em>';
        document.getElementById('basisText').innerHTML = basis;

        const wp = document.getElementById('workingPaperText');
        let wpHtml = '<span class="wp-label">Sampling Memo — Tests of Details (MUS)</span>';
        wpHtml += 'Per SA 530 Audit Sampling:\n\n';
        wpHtml += 'A. SAMPLING APPROACH\n';
        wpHtml += '   Type:           Tests of Details (Substantive)\n';
        wpHtml += '   Method:         Monetary Unit Sampling (MUS)\n';
        wpHtml += '   Account:        [e.g., Trade Receivables, Inventory]\n\n';
        wpHtml += 'B. POPULATION & MATERIALITY (SA 530 Para 6, SA 320 Para 11)\n';
        wpHtml += '   Population Book Value:    Rs. ' + fmtINRDecimal(r.popValue) + '\n';
        wpHtml += '   Number of Items:          ' + (r.popItems || '[Not provided]') + '\n';
        wpHtml += '   Performance Materiality:  Rs. ' + fmtINRDecimal(r.perfMat) + '\n';
        wpHtml += '   Tolerable Misstatement:   Rs. ' + fmtINRDecimal(r.tolerableMisstmt) + ' (' + r.tmPct + '% of PM)\n';
        wpHtml += '   Expected Misstatement:    Rs. ' + fmtINRDecimal(r.expMisstmt) + '\n\n';
        wpHtml += 'C. RELIABILITY & RISK\n';
        wpHtml += '   Risk of Material Misstatement:  ' + r.risk.charAt(0).toUpperCase() + r.risk.slice(1) + '\n';
        wpHtml += '   Reliability Factor:             ' + r.rf.toFixed(2) + '\n';
        wpHtml += '   Confidence Level:               ' + r.conf + '%\n';
        wpHtml += '   Expansion Factor:               ' + r.expansionFactor.toFixed(1) + '\n\n';
        wpHtml += 'D. SAMPLE SIZE\n';
        wpHtml += '   Computed (MUS Formula):         ' + r.rawSampleSize + ' items\n';
        wpHtml += '   Recommended:                    ' + (r.isSmallPop ? r.popItems + ' (100% — small population)' : r.sampleSize + ' items') + '\n\n';
        wpHtml += 'E. SELECTION METHOD\n';
        wpHtml += '   MUS interval:                   Rs. ' + fmtINRDecimal(r.popValue / r.sampleSize) + '\n';
        wpHtml += '   Selection technique:            [Random start + systematic interval]\n\n';
        wpHtml += 'F. EVALUATION (SA 530 Para 14-15)\n';
        wpHtml += '   Misstatements Found:            [Document]\n';
        wpHtml += '   Projected Misstatement:         [Computed using sample ratio]\n';
        wpHtml += '   Conclusion vs Tolerable:        [Pass / Fail / Expand]\n\n';
        wpHtml += 'Prepared by: [Engagement Team]   Reviewed by: [Engagement Partner]   Date: [DD-MMM-YYYY]';
        wp.innerHTML = wpHtml;

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
    document.getElementById('btnCalcToc').addEventListener('click', computeToc);
    document.getElementById('btnCalcTod').addEventListener('click', computeTod);

    document.getElementById('btnResetToc').addEventListener('click', function() {
        ['tdr', 'epdr'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        document.getElementById('control_freq').value = 'daily';
        // Reset toggles
        const defaults = {tocRiskGroup: 'medium', tocConfGroup: '95'};
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

    document.getElementById('btnResetTod').addEventListener('click', function() {
        ['popValue', 'popItems', 'perfMat', 'expMisstmt'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        document.getElementById('tmPct').value = '75';
        document.querySelectorAll('#todRiskGroup .toggle-btn').forEach(function(b) {
            const isDefault = b.dataset.value === 'medium';
            b.classList.toggle('active', isDefault);
            b.setAttribute('aria-selected', isDefault ? 'true' : 'false');
        });
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('input[type="number"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const mode = getActiveValue('modeGroup');
                if (mode === 'toc') document.getElementById('btnCalcToc').click();
                else document.getElementById('btnCalcTod').click();
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
