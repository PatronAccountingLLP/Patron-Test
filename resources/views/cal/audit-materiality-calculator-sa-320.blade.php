@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Audit Materiality Calculator SA 320 | Overall & Performance</title>
    <meta name="description" content="Free audit materiality calculator under SA 320: compute overall materiality, performance materiality and clearly trivial threshold. ICAI-aligned. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/audit-materiality-calculator-sa-320/">
    <meta property="og:title" content="Audit Materiality Calculator (SA 320) — FY 2025-26">
    <meta property="og:description" content="Compute overall materiality, performance materiality & clearly trivial threshold per SA 320. Benchmark guidance + working paper text.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/audit-materiality-calculator-sa-320">
    <meta property="og:image" content="/tools/og/audit-materiality-calculator-sa-320.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Audit Materiality Calculator (SA 320) — FY 2025-26">
    <meta name="twitter:description" content="Overall + performance materiality + clearly trivial threshold per SA 320. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/audit-materiality-calculator-sa-320.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Audit Materiality Calculator (SA 320)",
      "description": "Audit Materiality Calculator computes overall materiality, performance materiality and clearly trivial threshold per Standard on Auditing 320 (SA 320) issued by the Institute of Chartered Accountants of India, converged with International Standard on Auditing 320. The tool supports benchmark selection across profit before tax, revenue/turnover, gross profit, total assets, net assets/equity and total expenses with auto-defaulted percentage ranges (PBT 5%, revenue 0.5-1%, gross profit 3%, assets 1%, equity 2%) per SA 320 Para A4-A6 application guidance. Performance materiality auto-adjusts based on assessed audit risk (Low 75%, Medium 65%, High 50% of overall materiality). Clearly trivial threshold defaults to 5% of overall materiality. Output includes documented justification narrative for working papers under SA 230, specific materiality for particular classes of transactions or disclosures, and revision triggers under SA 320 Para 12. Suitable for statutory audit, tax audit, internal audit and limited review engagements of Indian companies, LLPs, firms and not-for-profit entities.",
      "url": "/tools/audit-materiality-calculator-sa-320",
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
        {"@type": "ListItem", "position": 3, "name": "Audit Materiality Calculator (SA 320)", "item": "/tools/audit-materiality-calculator-sa-320"}
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
          "name": "What is materiality under SA 320?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 320 Materiality in Planning and Performing an Audit defines material misstatements as those which, individually or in aggregate, could reasonably be expected to influence the economic decisions of users taken on the basis of the financial statements. Issued by the ICAI and converged with ISA 320, the standard guides auditors on setting materiality levels at the planning stage to scope audit procedures and at the evaluation stage to assess uncorrected misstatements under SA 450."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between overall, performance and specific materiality?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Overall materiality is the threshold for the financial statements as a whole. Performance materiality is set lower than overall materiality to reduce the probability that aggregate uncorrected and undetected misstatements exceed overall materiality. Specific materiality is set even lower for particular classes of transactions, account balances or disclosures where misstatements of smaller amounts could reasonably influence users — for example, related party transactions, director remuneration or sensitive disclosures."
          }
        },
        {
          "@type": "Question",
          "name": "How is the benchmark selected for materiality?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 320 Para A4 requires the auditor to consider what users focus on in the financial statements, the nature of the entity, its industry and lifecycle stage, ownership structure and benchmark volatility. Profit-oriented entities typically use profit before tax from continuing operations; not-for-profits use total revenue or total expenses; debt-financed entities focus on net assets; entities with volatile profits use gross profit or revenue. The choice requires professional judgment and documented justification."
          }
        },
        {
          "@type": "Question",
          "name": "What percentage is applied to profit before tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 320 Para A6 cites 5% of profit before tax from continuing operations as an indicative benchmark for a profit-oriented manufacturing entity. The acceptable range commonly applied in practice is 3% to 10%, with 5% being most common. Higher percentages (5-10%) suit stable, low-risk entities; lower percentages (3-5%) suit volatile profits, public interest entities, or higher assessed risk. SA 320 emphasises that the percentage requires professional judgment, not mechanical application."
          }
        },
        {
          "@type": "Question",
          "name": "What percentage is applied to revenue or total assets?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Revenue or turnover typically attracts a lower percentage than profit-based benchmarks because the absolute amount is larger — common ranges are 0.5% to 3%, with 1% as the most frequent. SA 320 Para A6 illustrates 1% of total revenue or total expenses for a not-for-profit entity. Total assets typically attract 0.5% to 2%, often 1%, used for asset-heavy or debt-financed entities. Net assets or equity typically attracts 1% to 5%, often 2%."
          }
        },
        {
          "@type": "Question",
          "name": "What is performance materiality typically set at?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Performance materiality is commonly set at 50% to 75% of overall materiality. SA 320 Para 11 requires the auditor to consider risk of material misstatement and prior period uncorrected misstatements. Practice ranges: 75% for low-risk repeat audits with strong controls and few prior period adjustments; 65% for medium-risk; 50% for first-year audits, weak controls, or high-risk areas. Lower performance materiality means more substantive procedures and larger sample sizes."
          }
        },
        {
          "@type": "Question",
          "name": "What is the clearly trivial threshold?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Clearly trivial under SA 450 Para 5 is the amount below which misstatements need not be accumulated because the auditor expects them to be inconsequential individually and in aggregate. Practice typically sets clearly trivial at 5% of overall materiality, with a range of 1% to 5%. Clearly trivial differs from immaterial — even individually trivial items must be considered for qualitative impact, regulatory disclosures, or pattern indicating fraud."
          }
        },
        {
          "@type": "Question",
          "name": "How is materiality determined for not-for-profit entities?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Not-for-profit entities typically use total revenue, total expenses or total funds inflow as the benchmark since profit is not the primary metric. SA 320 Para A6 illustrates 1% of total revenue or expenses. For pension or charity audits, total fund value or annual contributions may be more relevant. Public sector entities may use total expenditure if cost recovery is the focus. The benchmark must align with the primary information needs of users — donors, beneficiaries or regulators."
          }
        },
        {
          "@type": "Question",
          "name": "When should materiality be revised during the audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 320 Para 12 requires revision of overall materiality (and consequently performance materiality) when the auditor becomes aware of information during the audit that would have caused a different initial determination. Common triggers include significant change in benchmark figure (actuals materially different from interim used at planning), discovery of new circumstances, change in auditor's understanding of entity, or unexpectedly high level of misstatements. Revisions must be documented per Para 14."
          }
        },
        {
          "@type": "Question",
          "name": "What documentation is required under SA 320?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 320 Para 14 mandates documentation of overall materiality with benchmark and percentage rationale, materiality levels for particular classes of transactions or disclosures (specific materiality), performance materiality with risk-based justification, and any revisions made as the audit progressed with reasons. Documentation should support engagement quality reviews, peer reviews and NFRA inspections — bare numerical thresholds without judgement narrative are typically flagged as deficient."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between SA 320 and SA 450?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SA 320 deals with setting materiality levels at the planning and execution stages — overall, performance, and specific. SA 450 Evaluation of Misstatements deals with accumulating misstatements identified during the audit, evaluating their effect, and concluding whether financial statements are materially misstated. Together they form the materiality framework — SA 320 sets the thresholds, SA 450 measures actuals against them. Both standards apply concurrently throughout an audit engagement."
          }
        },
        {
          "@type": "Question",
          "name": "How is materiality determined for group audits under SA 600?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under SA 600 Using the Work of Another Auditor (and SA 720 in revised framework), the group engagement team sets group materiality at the consolidated financial statement level using SA 320 principles. Component materiality is then set lower than group materiality (typically 50-75%) to allow for aggregation risk across components. Component materiality must consider individual significance of the component, qualitative factors and prior period misstatements. Documentation flows through component instructions."
          }
        },
        {
          "@type": "Question",
          "name": "What do NFRA inspection reports say about materiality?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NFRA inspection reports of listed company audits routinely flag deficient materiality documentation — bare formulas without judgement narrative, performance materiality set as a default percentage without risk justification, materiality not revised when benchmark changes materially during audit, and inadequate consideration of qualitative factors. NFRA expects detailed working papers showing how SA 320 Para A4 factors were considered, why the chosen benchmark fits the entity, and how risk assessment shaped performance materiality."
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
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .wp-text { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 12px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre-wrap; }
        .wp-text .wp-label { color: var(--accent-light); font-weight: 700; display: block; margin-bottom: 6px; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }

        .conditional-row { display: none; }
        .conditional-row.show { display: grid; }
        .conditional-block { display: none; }
        .conditional-block.show { display: block; }

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
        <a href="#benchmarks">Benchmarks</a>
        <a href="#performance">Performance Materiality</a>
        <a href="#documentation">Documentation</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Audit Materiality Calculator (SA 320)
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Audit Materiality Calculator <span>(SA 320)</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Standard on Auditing 320 (SA 320) issued by the ICAI requires auditors to determine overall materiality for the financial statements as a whole, performance materiality at a lower amount to account for aggregation risk, and clearly trivial threshold below which misstatements need not be accumulated. This calculator computes all three thresholds using SA 320 Para A4-A6 benchmark guidance — auto-defaulting percentages by benchmark type (PBT 5%, revenue 1%, assets 1%, equity 2%) and adjusting performance materiality based on assessed audit risk. Output includes documented working paper text aligned with SA 320 Para 14 and SA 230 audit documentation requirements.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Compute Your Materiality Levels</h2>
            <p class="calc-intro">Pick the entity type and benchmark — the tool defaults the percentage from SA 320 application guidance and lets you override based on professional judgement. Risk level adjusts performance materiality automatically.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this calculator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Entity Profile</div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Entity Type</label>
                <div class="toggle-group" id="entityTypeGroup" role="tablist" aria-label="Entity type">
                    <button type="button" class="toggle-btn active" data-value="listed" role="tab" aria-selected="true">Listed</button>
                    <button type="button" class="toggle-btn" data-value="public" role="tab" aria-selected="false">Public Unlisted</button>
                    <button type="button" class="toggle-btn" data-value="private" role="tab" aria-selected="false">Private</button>
                    <button type="button" class="toggle-btn" data-value="npo" role="tab" aria-selected="false">Not-for-Profit</button>
                </div>
                <span class="helper">Entity type informs benchmark selection and risk profile under SA 320 Para A4.</span>
            </div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Audit Engagement Type</label>
                <div class="toggle-group stacked-mobile" id="engagementGroup" role="tablist">
                    <button type="button" class="toggle-btn" data-value="firstyear" role="tab" aria-selected="false">First-Year Audit</button>
                    <button type="button" class="toggle-btn active" data-value="repeat" role="tab" aria-selected="true">Repeat Engagement</button>
                </div>
                <span class="helper">First-year audits typically require lower performance materiality due to limited prior knowledge.</span>
            </div>

            <div class="calc-section-title">Benchmark Selection (SA 320 Para A4)</div>

            <div class="form-group" style="margin-bottom:20px;">
                <label for="benchmark">Primary Benchmark</label>
                <select id="benchmark">
                    <option value="pbt" selected>Profit Before Tax (Continuing Ops) — 5% default</option>
                    <option value="revenue">Revenue / Turnover — 1% default</option>
                    <option value="gp">Gross Profit — 3% default</option>
                    <option value="assets">Total Assets — 1% default</option>
                    <option value="equity">Total Equity / Net Assets — 2% default</option>
                    <option value="expenses">Total Expenses (NPO) — 1% default</option>
                    <option value="custom">Custom — manual %</option>
                </select>
                <span class="helper" id="benchmarkHelper">Default 5% of PBT — most common for profit-oriented entities per SA 320 Para A6.</span>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="benchmarkValue">Benchmark Value (₹)</label>
                    <input type="number" id="benchmarkValue" min="0" step="any" placeholder="e.g. 50000000" inputmode="decimal">
                    <span class="helper">Enter total amount in ₹ (use full figures, not lakhs/crores).</span>
                </div>
                <div class="form-group">
                    <label for="materialityPct">Materiality % (override)</label>
                    <input type="number" id="materialityPct" min="0.01" max="20" step="0.01" placeholder="5" inputmode="decimal">
                    <span class="helper">Auto-fills from benchmark default. Override if professional judgement differs.</span>
                </div>
            </div>

            <div class="calc-section-title">Risk Assessment & Performance Materiality</div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Assessed Audit Risk Level</label>
                    <div class="toggle-group" id="riskGroup" role="tablist">
                        <button type="button" class="toggle-btn" data-value="low" data-pm="75" role="tab" aria-selected="false">Low (PM 75%)</button>
                        <button type="button" class="toggle-btn active" data-value="medium" data-pm="65" role="tab" aria-selected="true">Medium (PM 65%)</button>
                        <button type="button" class="toggle-btn" data-value="high" data-pm="50" role="tab" aria-selected="false">High (PM 50%)</button>
                    </div>
                    <span class="helper">Risk drives performance materiality — higher risk reduces PM, requiring more extensive procedures.</span>
                </div>
                <div class="form-group">
                    <label for="pmOverride">Performance Materiality % (override)</label>
                    <input type="number" id="pmOverride" min="30" max="90" step="1" placeholder="65" inputmode="decimal">
                    <span class="helper">% of overall materiality. Auto-fills from risk level. Range 50-75% in practice.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="trivialPct">Clearly Trivial Threshold (%)</label>
                    <input type="number" id="trivialPct" min="0.5" max="10" step="0.1" value="5" inputmode="decimal">
                    <span class="helper">% of overall materiality. Default 5% per SA 450 application guidance.</span>
                </div>
                <div class="form-group">
                    <label>Specific Materiality (Optional)</label>
                    <div class="toggle-group" id="specificGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="no" role="tab" aria-selected="true">No</button>
                        <button type="button" class="toggle-btn" data-value="yes" role="tab" aria-selected="false">Yes — set</button>
                    </div>
                    <span class="helper">For sensitive disclosures (related party, KMP remuneration etc.).</span>
                </div>
            </div>

            <div class="conditional-row" id="specificRow">
                <div class="form-group">
                    <label for="specificAmount">Specific Materiality Amount (₹)</label>
                    <input type="number" id="specificAmount" min="0" step="any" placeholder="100000" inputmode="decimal">
                    <span class="helper">Lower threshold for sensitive areas. Should be less than overall materiality.</span>
                </div>
                <div class="form-group">
                    <label for="specificReason">Reason for Specific Materiality</label>
                    <input type="text" id="specificReason" placeholder="e.g. Related party transactions">
                    <span class="helper">SA 320 Para 10 — items where smaller misstatements could influence users.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalculate">Calculate Materiality</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card">
                    <div class="verdict-label" id="verdictLabel">Materiality Levels (SA 320)</div>
                    <div class="verdict-headline" id="verdictHeadline">Three-Tier Threshold</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Overall Materiality</div>
                            <div class="verdict-grid-value" id="overallMat">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Performance Materiality</div>
                            <div class="verdict-grid-value" id="perfMat">₹0</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Clearly Trivial</div>
                            <div class="verdict-grid-value" id="trivialMat">₹0</div>
                        </div>
                    </div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner info" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Calculation Basis & Justification</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Working Paper Text — SA 320 Documentation</h3>
                <p style="font-size:13px;color:var(--text-secondary);margin-bottom:8px;">Copy this narrative into your audit working papers. Customise the entity-specific reasoning before finalising.</p>
                <div class="wp-text" id="workingPaperText"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Calculator Works</h2>
            <p>The calculator mirrors the three-step materiality process required by SA 320 — set overall materiality at planning, derive performance materiality based on assessed risk, and document the clearly trivial threshold for misstatement accumulation under SA 450.</p>

            <h3>Step 1 — Choose the Right Benchmark</h3>
            <p>SA 320 Para A4 lists factors influencing benchmark choice — what users focus on, the entity's nature and lifecycle, ownership and financing structure, and benchmark volatility. Profit-oriented entities typically anchor on profit before tax from continuing operations. Not-for-profits use total revenue or expenses. Asset-heavy or debt-financed entities use total assets or net assets. The tool's dropdown maps these standard cases.</p>

            <h3>Step 2 — Apply the Percentage</h3>
            <p>SA 320 does not prescribe specific percentages — Para A6 illustrates 5% of PBT for a profit-oriented manufacturer and 1% of revenue or expenses for a not-for-profit. Practice has converged on these defaults with adjustment ranges based on risk and entity stability. The tool auto-defaults from benchmark choice; override is available for documented professional judgement.</p>

            <div class="formula-box">
<span class="label">Overall Materiality</span> = Benchmark Value × Materiality %
<span class="label">Performance Materiality</span> = Overall Materiality × PM % (50% to 75%)
<span class="label">Clearly Trivial</span> = Overall Materiality × Trivial % (typically 5%)
            </div>

            <h3>Step 3 — Adjust for Risk</h3>
            <p>Performance materiality is set lower than overall materiality to reduce the probability that aggregate uncorrected and undetected misstatements exceed overall materiality. SA 320 Para 11 requires consideration of risk of material misstatement and prior period uncorrected misstatements. The tool applies 75% for low-risk audits, 65% for medium, and 50% for high — these are practitioner conventions reflecting the rule of thumb that lower PM means more extensive substantive testing.</p>

            <h3>Step 4 — Document the Judgement</h3>
            <p>SA 320 Para 14 read with SA 230 mandates documentation of the benchmark, percentage, performance materiality calculation, specific materiality (if any) and any revisions during the audit. The tool generates a working paper text block that captures these elements — customise the entity-specific narrative before finalising.</p>
        </section>

        <section class="content-section" id="benchmarks">
            <h2>Benchmark Selection Guide (SA 320 Para A4)</h2>
            <p>The following table summarises common benchmarks, default percentages, and the entity types they typically suit. Selection is a matter of professional judgement, not formula — the auditor must justify the choice in the working papers.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Benchmark</th><th>% Range</th><th>Default</th><th>Typical Use Case</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Profit Before Tax (Continuing)</strong></td><td>3% to 10%</td><td>5%</td><td>Profit-oriented, stable manufacturing/services</td></tr>
                    <tr><td><strong>Revenue / Turnover</strong></td><td>0.5% to 3%</td><td>1%</td><td>Volatile profits, growth-stage, IT/SaaS</td></tr>
                    <tr><td><strong>Gross Profit</strong></td><td>2% to 5%</td><td>3%</td><td>Trading entities, consistent GP margins</td></tr>
                    <tr><td><strong>Total Assets</strong></td><td>0.5% to 2%</td><td>1%</td><td>Asset-heavy, financial institutions, real estate</td></tr>
                    <tr><td><strong>Total Equity / Net Assets</strong></td><td>1% to 5%</td><td>2%</td><td>Debt-financed, holding companies, investment entities</td></tr>
                    <tr><td><strong>Total Expenses</strong></td><td>0.5% to 1%</td><td>1%</td><td>Not-for-profits, charities, public sector</td></tr>
                </tbody>
            </table>

            <h3>When to Use Which Benchmark</h3>
            <ul>
                <li><strong>Profit Before Tax</strong> works when profits are stable, the entity is profit-oriented, and shareholders focus on earnings. Avoid when PBT is volatile, near break-even, or distorted by exceptional items</li>
                <li><strong>Revenue</strong> is preferred for early-stage or growth companies where profitability is volatile but top-line scale matters to users (lenders, investors)</li>
                <li><strong>Gross Profit</strong> can be used as a stable substitute when PBT is volatile but operating fundamentals are intact</li>
                <li><strong>Total Assets</strong> suits asset-heavy entities — banks, NBFCs, real estate, infrastructure — where balance sheet is the user focus</li>
                <li><strong>Net Assets / Equity</strong> works for holding companies, investment vehicles, and debt-financed entities where shareholders focus on book value</li>
                <li><strong>Total Expenses</strong> is the standard for not-for-profits where revenue equals contributions and the focus is on resource utilisation</li>
            </ul>

            <div class="callout warn">
                <p><strong>Owner-managed businesses:</strong> SA 320 Para A7 notes that when profit before tax is consistently nominal because the owner takes much of the profit as remuneration, profit before remuneration and tax may be more relevant. This is common in Indian SME family businesses where promoter salary depresses PBT.</p>
            </div>

            <p>For the official text of SA 320, refer to the <a href="https://kb.icai.org/" target="_blank" rel="noopener">ICAI Knowledge Bank</a>. The international equivalent ISA 320 is published by the <a href="https://www.iaasb.org/" target="_blank" rel="noopener">IAASB</a> under <a href="https://www.ifac.org/" target="_blank" rel="noopener">IFAC</a>.</p>
        </section>

        <section class="content-section" id="performance">
            <h2>Performance Materiality & Risk</h2>
            <p>Performance materiality (PM) is the auditor's working threshold during fieldwork — it is set lower than overall materiality to provide a buffer against aggregation of uncorrected and undetected misstatements. The lower PM is set, the more extensive the substantive procedures and sample sizes required.</p>

            <h3>Risk-Based Performance Materiality</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Risk Profile</th><th>PM Range</th><th>Default</th><th>Typical Indicators</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Low Risk</strong></td><td>70% to 75%</td><td>75%</td><td>Repeat client, strong controls, no prior misstatements, stable industry</td></tr>
                    <tr><td><strong>Medium Risk</strong></td><td>60% to 70%</td><td>65%</td><td>Some control deficiencies, moderate prior misstatements, growth phase</td></tr>
                    <tr><td><strong>High Risk</strong></td><td>50% to 60%</td><td>50%</td><td>First-year audit, weak controls, significant prior misstatements, restructuring</td></tr>
                </tbody>
            </table>

            <h3>Factors Lowering Performance Materiality</h3>
            <ul>
                <li>First-year audit — auditor lacks prior cumulative knowledge</li>
                <li>Material weaknesses in internal controls identified</li>
                <li>Prior year financial statements had significant uncorrected misstatements</li>
                <li>Significant changes in entity structure (M&A, demerger, new business lines)</li>
                <li>Industry experiencing high regulatory or economic volatility</li>
                <li>Going concern indicators present</li>
                <li>Fraud risk factors identified under SA 240</li>
            </ul>

            <h3>Specific Materiality (SA 320 Para 10)</h3>
            <p>For particular classes of transactions, account balances or disclosures, the auditor sets specific (lower) materiality where misstatements of smaller amounts could reasonably influence users. Common cases include:</p>
            <ul>
                <li>Related party transactions — listed company audit committees scrutinise these closely</li>
                <li>Director and key management personnel (KMP) remuneration — SEBI and Section 197 disclosure</li>
                <li>Statutory dues compliance — interest under MSMED Act, TDS under Income Tax Act</li>
                <li>Disclosures triggering debt covenant ratios — current ratio, debt-equity</li>
                <li>Fraud-prone areas — cash, inventory, revenue cut-off</li>
            </ul>
        </section>

        <div class="body-cta">
            <h3>Need Help with Audit Planning & SA 320 Documentation?</h3>
            <p>Patron Accounting LLP supports audit firms and audit committees with SA 320 working papers, materiality memos, NFRA-compliant audit documentation and quality reviews — for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Audit%20Materiality%20Calculator.%20I%20need%20help%20with%20SA%20320%20documentation%20and%20audit%20planning.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="documentation">
            <h2>Documentation Under SA 320 Para 14</h2>
            <p>SA 320 Para 14 read with SA 230 (Audit Documentation) requires the working papers to capture the auditor's judgement on materiality. NFRA inspections of listed company audits routinely flag bare formulas without justification — documentation must be evidence-based, entity-specific, and updated through the audit cycle.</p>

            <h3>Mandatory Documentation Items</h3>
            <ol>
                <li><strong>Overall Materiality:</strong> The benchmark used (with figure), percentage applied, and rationale for benchmark and percentage selection considering SA 320 Para A4 factors</li>
                <li><strong>Specific Materiality:</strong> Identification of any classes of transactions, account balances or disclosures requiring lower materiality, with specific amounts and rationale</li>
                <li><strong>Performance Materiality:</strong> Amount and percentage of overall materiality, justified based on assessed risks of material misstatement and prior period uncorrected misstatements</li>
                <li><strong>Clearly Trivial Threshold:</strong> The amount below which misstatements are not accumulated (typically 5% of overall materiality)</li>
                <li><strong>Revisions:</strong> Any revisions made during the audit with reasons — for example, change in benchmark figure between planning and final, new circumstances becoming known</li>
            </ol>

            <h3>NFRA Inspection Findings</h3>
            <p>Recent <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA</a> inspection reports of listed company audits have flagged the following materiality documentation deficiencies:</p>
            <ul>
                <li>Bare numerical materiality without narrative justification of why the benchmark was chosen</li>
                <li>Performance materiality set as a default percentage without considering specific risk factors</li>
                <li>Failure to revise materiality when actual benchmark figure differed materially from planning estimate</li>
                <li>No specific materiality set despite presence of significant related party transactions</li>
                <li>Materiality identical year-on-year despite changes in entity circumstances</li>
                <li>Inadequate consideration of qualitative factors influencing materiality assessment</li>
            </ul>

            <p>Refer to the official Companies Act framework on <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a> and <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> notifications. For listed company audits, additional governance considerations flow from <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Regulations.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is materiality under SA 320?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 320 Materiality in Planning and Performing an Audit defines material misstatements as those which, individually or in aggregate, could reasonably be expected to influence the economic decisions of users taken on the basis of the financial statements. Issued by the ICAI and converged with ISA 320, the standard guides auditors on setting materiality levels at the planning stage to scope audit procedures and at the evaluation stage to assess uncorrected misstatements under SA 450.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between overall, performance and specific materiality?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Overall materiality is the threshold for the financial statements as a whole. Performance materiality is set lower than overall materiality to reduce the probability that aggregate uncorrected and undetected misstatements exceed overall materiality. Specific materiality is set even lower for particular classes of transactions, account balances or disclosures where misstatements of smaller amounts could reasonably influence users — for example, related party transactions, director remuneration or sensitive disclosures.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is the benchmark selected for materiality?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 320 Para A4 requires the auditor to consider what users focus on in the financial statements, the nature of the entity, its industry and lifecycle stage, ownership structure and benchmark volatility. Profit-oriented entities typically use profit before tax from continuing operations; not-for-profits use total revenue or total expenses; debt-financed entities focus on net assets; entities with volatile profits use gross profit or revenue. The choice requires professional judgment and documented justification.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What percentage is applied to profit before tax?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 320 Para A6 cites 5% of profit before tax from continuing operations as an indicative benchmark for a profit-oriented manufacturing entity. The acceptable range commonly applied in practice is 3% to 10%, with 5% being most common. Higher percentages (5-10%) suit stable, low-risk entities; lower percentages (3-5%) suit volatile profits, public interest entities, or higher assessed risk. SA 320 emphasises that the percentage requires professional judgment, not mechanical application.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What percentage is applied to revenue or total assets?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Revenue or turnover typically attracts a lower percentage than profit-based benchmarks because the absolute amount is larger — common ranges are 0.5% to 3%, with 1% as the most frequent. SA 320 Para A6 illustrates 1% of total revenue or total expenses for a not-for-profit entity. Total assets typically attract 0.5% to 2%, often 1%, used for asset-heavy or debt-financed entities. Net assets or equity typically attracts 1% to 5%, often 2%.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is performance materiality typically set at?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Performance materiality is commonly set at 50% to 75% of overall materiality. SA 320 Para 11 requires the auditor to consider risk of material misstatement and prior period uncorrected misstatements. Practice ranges: 75% for low-risk repeat audits with strong controls and few prior period adjustments; 65% for medium-risk; 50% for first-year audits, weak controls, or high-risk areas. Lower performance materiality means more substantive procedures and larger sample sizes.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the clearly trivial threshold?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Clearly trivial under SA 450 Para 5 is the amount below which misstatements need not be accumulated because the auditor expects them to be inconsequential individually and in aggregate. Practice typically sets clearly trivial at 5% of overall materiality, with a range of 1% to 5%. Clearly trivial differs from immaterial — even individually trivial items must be considered for qualitative impact, regulatory disclosures, or pattern indicating fraud.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is materiality determined for not-for-profit entities?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Not-for-profit entities typically use total revenue, total expenses or total funds inflow as the benchmark since profit is not the primary metric. SA 320 Para A6 illustrates 1% of total revenue or expenses. For pension or charity audits, total fund value or annual contributions may be more relevant. Public sector entities may use total expenditure if cost recovery is the focus. The benchmark must align with the primary information needs of users — donors, beneficiaries or regulators.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">When should materiality be revised during the audit?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 320 Para 12 requires revision of overall materiality (and consequently performance materiality) when the auditor becomes aware of information during the audit that would have caused a different initial determination. Common triggers include significant change in benchmark figure (actuals materially different from interim used at planning), discovery of new circumstances, change in auditor's understanding of entity, or unexpectedly high level of misstatements. Revisions must be documented per Para 14.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What documentation is required under SA 320?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 320 Para 14 mandates documentation of overall materiality with benchmark and percentage rationale, materiality levels for particular classes of transactions or disclosures (specific materiality), performance materiality with risk-based justification, and any revisions made as the audit progressed with reasons. Documentation should support engagement quality reviews, peer reviews and NFRA inspections — bare numerical thresholds without judgement narrative are typically flagged as deficient.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between SA 320 and SA 450?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">SA 320 deals with setting materiality levels at the planning and execution stages — overall, performance, and specific. SA 450 Evaluation of Misstatements deals with accumulating misstatements identified during the audit, evaluating their effect, and concluding whether financial statements are materially misstated. Together they form the materiality framework — SA 320 sets the thresholds, SA 450 measures actuals against them. Both standards apply concurrently throughout an audit engagement.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is materiality determined for group audits under SA 600?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under SA 600 Using the Work of Another Auditor (and SA 720 in revised framework), the group engagement team sets group materiality at the consolidated financial statement level using SA 320 principles. Component materiality is then set lower than group materiality (typically 50-75%) to allow for aggregation risk across components. Component materiality must consider individual significance of the component, qualitative factors and prior period misstatements. Documentation flows through component instructions.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What do NFRA inspection reports say about materiality?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">NFRA inspection reports of listed company audits routinely flag deficient materiality documentation — bare formulas without judgement narrative, performance materiality set as a default percentage without risk justification, materiality not revised when benchmark changes materially during audit, and inadequate consideration of qualitative factors. NFRA expects detailed working papers showing how SA 320 Para A4 factors were considered, why the chosen benchmark fits the entity, and how risk assessment shaped performance materiality.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Audit Planning Support</h3>
            <p>SA 320 working papers, materiality memos, NFRA-aligned documentation and engagement quality reviews — fixed-fee.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Audit%20Materiality%20Calculator.%20I%20need%20help%20with%20SA%20320%20documentation%20and%20audit%20planning.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
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
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist<span class="arrow">→</span></a>
            <a href="/tools/ifc-testing-checklist" class="sidebar-link">IFC Testing Checklist<span class="arrow">→</span></a>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/lease-accounting-calculator-ind-as-116" class="sidebar-link">Lease Accounting (Ind AS 116)<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
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

    // ===== BENCHMARK DEFAULTS =====
    const BENCHMARKS = {
        pbt:      {label: 'Profit Before Tax (Continuing Ops)', defaultPct: 5,    range: '3% to 10%', basis: 'Profit-oriented entity per SA 320 Para A6'},
        revenue:  {label: 'Revenue / Turnover',                  defaultPct: 1,    range: '0.5% to 3%', basis: 'Volatile profits or growth-stage entity'},
        gp:       {label: 'Gross Profit',                        defaultPct: 3,    range: '2% to 5%',   basis: 'Stable substitute when PBT volatile'},
        assets:   {label: 'Total Assets',                        defaultPct: 1,    range: '0.5% to 2%', basis: 'Asset-heavy or financial institution'},
        equity:   {label: 'Total Equity / Net Assets',           defaultPct: 2,    range: '1% to 5%',   basis: 'Debt-financed or holding company'},
        expenses: {label: 'Total Expenses',                      defaultPct: 1,    range: '0.5% to 1%', basis: 'Not-for-profit per SA 320 Para A6'},
        custom:   {label: 'Custom',                              defaultPct: null, range: 'user-defined', basis: 'Custom benchmark requires technical justification'}
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
    function getActiveData(groupId, attr) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset[attr] : null;
    }

    setupToggleGroup('entityTypeGroup');
    setupToggleGroup('engagementGroup');
    setupToggleGroup('riskGroup', function() {
        const pm = getActiveData('riskGroup', 'pm');
        if (pm) document.getElementById('pmOverride').placeholder = pm;
    });
    setupToggleGroup('specificGroup', function() {
        const v = getActiveValue('specificGroup');
        document.getElementById('specificRow').classList.toggle('show', v === 'yes');
    });

    // ===== BENCHMARK CHANGE HANDLER =====
    const benchmarkSelect = document.getElementById('benchmark');
    const benchmarkHelper = document.getElementById('benchmarkHelper');
    const materialityPctInput = document.getElementById('materialityPct');

    function updateBenchmarkUI() {
        const b = BENCHMARKS[benchmarkSelect.value];
        if (b.defaultPct !== null) {
            benchmarkHelper.textContent = 'Default ' + b.defaultPct + '% — range ' + b.range + '. ' + b.basis + '.';
            materialityPctInput.placeholder = b.defaultPct;
        } else {
            benchmarkHelper.textContent = 'Custom benchmark — enter your % below with documented justification.';
            materialityPctInput.placeholder = 'e.g. 1.5';
        }
    }
    benchmarkSelect.addEventListener('change', updateBenchmarkUI);
    updateBenchmarkUI();

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
        const benchmarkKey = benchmarkSelect.value;
        const b = BENCHMARKS[benchmarkKey];
        const enteredPct = parseFloat(document.getElementById('materialityPct').value);
        const matPct = enteredPct || b.defaultPct || 0;

        const enteredPm = parseFloat(document.getElementById('pmOverride').value);
        const defaultPm = parseFloat(getActiveData('riskGroup', 'pm') || 65);
        const pmPct = enteredPm || defaultPm;

        return {
            entityType: getActiveValue('entityTypeGroup'),
            engagement: getActiveValue('engagementGroup'),
            benchmarkKey: benchmarkKey,
            benchmarkLabel: b.label,
            benchmarkBasis: b.basis,
            benchmarkValue: parseFloat(document.getElementById('benchmarkValue').value) || 0,
            matPct: matPct,
            risk: getActiveValue('riskGroup'),
            pmPct: pmPct,
            trivialPct: parseFloat(document.getElementById('trivialPct').value) || 5,
            specificEnabled: getActiveValue('specificGroup') === 'yes',
            specificAmount: parseFloat(document.getElementById('specificAmount').value) || 0,
            specificReason: document.getElementById('specificReason').value || ''
        };
    }

    function validateInputs(inp) {
        if (!inp.benchmarkValue || inp.benchmarkValue <= 0) return 'Please enter a positive benchmark value.';
        if (!inp.matPct || inp.matPct <= 0) return 'Please enter a positive materiality percentage.';
        if (inp.matPct > 20) return 'Materiality % above 20% is unusual — please verify.';
        if (inp.pmPct < 30 || inp.pmPct > 95) return 'Performance materiality should be between 30% and 95% of overall.';
        if (inp.specificEnabled && (!inp.specificAmount || inp.specificAmount <= 0)) return 'Please enter a positive specific materiality amount or disable specific materiality.';
        return null;
    }

    // ===== CORE COMPUTATION =====
    function computeMateriality(inp) {
        const overall = inp.benchmarkValue * (inp.matPct / 100);
        const performance = overall * (inp.pmPct / 100);
        const trivial = overall * (inp.trivialPct / 100);
        return {
            inp: inp,
            overall: overall,
            performance: performance,
            trivial: trivial,
            specific: inp.specificEnabled ? inp.specificAmount : null
        };
    }

    function entityTypeLabel(t) {
        return {listed: 'Listed Company', public: 'Public Unlisted Company', private: 'Private Company', npo: 'Not-for-Profit Entity'}[t] || t;
    }
    function riskLabel(r) {
        return {low: 'Low', medium: 'Medium', high: 'High'}[r] || r;
    }

    // ===== RENDER =====
    function renderResult(r) {
        const inp = r.inp;

        document.getElementById('overallMat').textContent = fmtINR(r.overall);
        document.getElementById('perfMat').textContent = fmtINR(r.performance);
        document.getElementById('trivialMat').textContent = fmtINR(r.trivial);

        // Summary grid
        const grid = document.getElementById('summaryGrid');
        grid.innerHTML = '';
        const summary = [
            {label: 'Benchmark', value: inp.benchmarkLabel.replace(' (Continuing Ops)', '').replace(' / Net Assets', ''), highlight: true},
            {label: 'Benchmark Value', value: fmtINR(inp.benchmarkValue)},
            {label: 'Materiality %', value: inp.matPct + '%'},
            {label: 'Performance Materiality %', value: inp.pmPct + '%'},
            {label: 'Risk Level', value: riskLabel(inp.risk)},
            {label: 'Engagement', value: inp.engagement === 'firstyear' ? 'First-Year' : 'Repeat'}
        ];
        if (r.specific !== null) {
            summary.push({label: 'Specific Materiality', value: fmtINR(r.specific)});
        }
        summary.forEach(function(s) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (s.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            grid.appendChild(c);
        });

        // Advisory banner
        const advisory = document.getElementById('advisoryBanner');
        let advHtml = '<strong>Materiality framework set.</strong> Misstatements above ₹' + fmtINRDecimal(r.overall) + ' are material to the financial statements as a whole. Performance materiality of ₹' + fmtINRDecimal(r.performance) + ' (' + inp.pmPct + '% of overall) acts as the working threshold during fieldwork. Misstatements below ₹' + fmtINRDecimal(r.trivial) + ' (' + inp.trivialPct + '% of overall) need not be accumulated under SA 450 Para 5.';
        if (inp.engagement === 'firstyear' && parseFloat(getActiveData('riskGroup', 'pm')) > 60) {
            advHtml += '<br><br><strong>First-year audit consideration:</strong> Consider lowering performance materiality to 50-60% of overall given limited prior cumulative knowledge of the entity.';
        }
        advisory.innerHTML = advHtml;

        // Basis text
        let basis = '<strong>' + entityTypeLabel(inp.entityType) + '</strong> — Benchmark: ' + inp.benchmarkLabel + ' (₹' + fmtINRDecimal(inp.benchmarkValue) + '). ';
        basis += 'Applied materiality at ' + inp.matPct + '% per SA 320 Para A6. ';
        basis += 'Performance materiality at ' + inp.pmPct + '% of overall, reflecting ' + riskLabel(inp.risk).toLowerCase() + ' assessed risk. ';
        basis += 'Clearly trivial threshold at ' + inp.trivialPct + '% of overall per SA 450 Para 5 application. ';
        basis += '<br><br><em>Justification:</em> ' + inp.benchmarkBasis + '. ';
        if (inp.engagement === 'firstyear') {
            basis += 'First-year audit — heightened scrutiny over opening balances per SA 510. ';
        }
        if (r.specific !== null) {
            basis += 'Specific materiality of ₹' + fmtINRDecimal(r.specific) + ' applied for: ' + (inp.specificReason || 'sensitive disclosures') + ' (SA 320 Para 10).';
        }
        document.getElementById('basisText').innerHTML = basis;

        // Working paper text
        const wp = document.getElementById('workingPaperText');
        let wpHtml = '<span class="wp-label">Materiality Memo — ' + entityTypeLabel(inp.entityType) + '</span>';
        wpHtml += 'Per SA 320 Materiality in Planning and Performing an Audit:\n\n';
        wpHtml += '1. OVERALL MATERIALITY\n';
        wpHtml += '   Benchmark:        ' + inp.benchmarkLabel + '\n';
        wpHtml += '   Benchmark Value:  Rs. ' + fmtINRDecimal(inp.benchmarkValue) + '\n';
        wpHtml += '   Materiality %:    ' + inp.matPct + '%\n';
        wpHtml += '   Overall Materiality: Rs. ' + fmtINRDecimal(r.overall) + '\n';
        wpHtml += '   Rationale:        ' + inp.benchmarkBasis + '. Percentage applied within range commonly accepted in practice.\n\n';
        wpHtml += '2. PERFORMANCE MATERIALITY (SA 320 Para 11)\n';
        wpHtml += '   PM as % of Overall: ' + inp.pmPct + '%\n';
        wpHtml += '   Performance Materiality: Rs. ' + fmtINRDecimal(r.performance) + '\n';
        wpHtml += '   Risk Assessment:    ' + riskLabel(inp.risk) + '\n';
        wpHtml += '   Engagement:         ' + (inp.engagement === 'firstyear' ? 'First-Year Audit' : 'Repeat Engagement') + '\n\n';
        wpHtml += '3. CLEARLY TRIVIAL THRESHOLD (SA 450 Para 5)\n';
        wpHtml += '   Threshold % of Overall: ' + inp.trivialPct + '%\n';
        wpHtml += '   Clearly Trivial Amount: Rs. ' + fmtINRDecimal(r.trivial) + '\n';
        if (r.specific !== null) {
            wpHtml += '\n4. SPECIFIC MATERIALITY (SA 320 Para 10)\n';
            wpHtml += '   Specific Threshold: Rs. ' + fmtINRDecimal(r.specific) + '\n';
            wpHtml += '   Applied To: ' + (inp.specificReason || '[describe specific class of transactions or disclosure]') + '\n';
        }
        wpHtml += '\nMateriality will be revised if circumstances change materially during the audit (SA 320 Para 12).\n';
        wpHtml += '\nPrepared by: [Engagement Team Member]    Reviewed by: [Engagement Partner]    Date: [DD-MMM-YYYY]';
        wp.innerHTML = wpHtml;

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
        const r = computeMateriality(inp);
        renderResult(r);
    });

    document.getElementById('btnReset').addEventListener('click', function() {
        ['benchmarkValue', 'materialityPct', 'pmOverride', 'specificAmount', 'specificReason'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        document.getElementById('trivialPct').value = '5';
        benchmarkSelect.value = 'pbt';
        updateBenchmarkUI();
        const defaults = {
            entityTypeGroup: 'listed',
            engagementGroup: 'repeat',
            riskGroup: 'medium',
            specificGroup: 'no'
        };
        Object.keys(defaults).forEach(function(gid) {
            const g = document.getElementById(gid);
            if (!g) return;
            g.querySelectorAll('.toggle-btn').forEach(function(b) {
                const isDefault = b.dataset.value === defaults[gid];
                b.classList.toggle('active', isDefault);
                b.setAttribute('aria-selected', isDefault ? 'true' : 'false');
            });
        });
        document.getElementById('specificRow').classList.remove('show');
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
