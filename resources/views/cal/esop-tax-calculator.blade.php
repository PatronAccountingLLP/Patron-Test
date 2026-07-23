@extends('layouts.service-app')

@section('content')
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#15365f">
    <title>ESOP Tax Calculator FY 2025-26 | Perquisite + Gains</title>
    <meta name="description" content="ESOP tax calculator for FY 2025-26 (AY 2026-27): perquisite tax at exercise plus capital gains at sale, with startup deferral check. Free CA-reviewed tool!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/esop-tax-calculator">

    <meta property="og:title" content="ESOP Tax Calculator — Perquisite + Capital Gains FY 2025-26">
    <meta property="og:description" content="Compute ESOP perquisite tax at exercise plus capital gains at sale for FY 2025-26 with startup deferral handling and post-July-2024 capital gains rates.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/esop-tax-calculator">
    <meta property="og:image" content="/tools/og/esop-tax-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Tax Calculator — Perquisite + Capital Gains FY 2025-26">
    <meta name="twitter:description" content="Two-stage ESOP tax: perquisite at exercise + capital gains at sale, with startup deferral handling for FY 2025-26.">
    <meta name="twitter:image" content="/tools/og/esop-tax-calculator.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "ESOP Tax Calculator",
      "description": "ESOP Tax Calculator computes the two-stage tax on Employee Stock Option Plans for FY 2025-26 (AY 2026-27): perquisite tax at exercise (FMV minus exercise price taxed as salary at slab rates under old or new regime) and capital gains tax at sale (Section 111A STCG or Section 112A LTCG for listed equity, slab or 12.5% for unlisted) with date-driven holding period detection, startup deferral check under Section 80-IAC for DPIIT-recognised startups, and pre-23-July-2024 versus post-pivot capital gains regime handling.",
      "url": "/tools/esop-tax-calculator",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Any",
      "inLanguage": "en-IN",
      "isAccessibleForFree": true,
      "datePublished": "2026-05-06T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
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
        {"@type": "ListItem", "position": 3, "name": "ESOP Tax Calculator", "item": "/tools/esop-tax-calculator"}
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
          "name": "How are ESOPs taxed in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOPs in India are taxed in two stages. First, at exercise — the perquisite value (FMV on exercise date minus exercise price) is taxed as salary income at slab rates with TDS deducted by employer under Section 192. Second, at sale — capital gains arise on the difference between sale price and FMV at exercise. For listed equity, LTCG above ₹1.25L is taxed at 12.5%, STCG at 20%. For unlisted shares, holding period thresholds and rates differ."
          }
        },
        {
          "@type": "Question",
          "name": "What is the FMV used for ESOP perquisite calculation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For listed shares, FMV is the average of the highest and lowest prices on the recognised stock exchange on the exercise date. If shares are not traded that day, the previous trading day's average is used. For unlisted shares, FMV must be determined by a Category I SEBI-registered merchant banker as on the date of exercise. The merchant banker's valuation report is mandatory and the employer relies on it for TDS computation under Rule 3(8) of the Income Tax Rules."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESOP tax deferral for startup employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 192(1C), employees of eligible startups can defer ESOP perquisite tax. Tax becomes due at the earliest of: 48 months from end of assessment year of allotment, sale of shares, or cessation of employment. Eligibility requires the employer to be both DPIIT-recognised AND certified under Section 80-IAC by the Inter-Ministerial Board. Approximately 4,000 of 1.97 lakh DPIIT-recognised startups currently qualify. Tax is computed at allotment-year rates, not trigger-year rates."
          }
        },
        {
          "@type": "Question",
          "name": "How is capital gains computed when ESOP shares are sold?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Capital gains equal sale price minus the FMV at exercise (which already paid perquisite tax). Holding period starts from the allotment date, not grant or vest. For listed shares: holding over 12 months gives LTCG taxed at 12.5% above ₹1.25L; under 12 months gives STCG at 20% under Section 111A. For unlisted shares: holding over 24 months gives LTCG at 12.5% no indexation; under 24 months gives STCG taxed at slab rates."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I exercised ESOPs before 23 July 2024 and sold after?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Finance Act 2024 changed capital gains rates effective 23 July 2024. For sales on or after this date, the new rates apply: 12.5% LTCG and 20% STCG for listed equity, 12.5% no-indexation for property and unlisted shares. The exercise date does not matter for the capital gains regime — only the sale date determines which rates apply. Your perquisite tax was paid at exercise time at then-applicable slab rates, and capital gains are computed using the sale-date rules."
          }
        },
        {
          "@type": "Question",
          "name": "Are ESOPs from foreign parent companies taxed differently?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Foreign company ESOPs follow the same two-stage taxation structure but with additional reporting. Perquisite at exercise uses FMV on exercise date converted to INR at SBI reference rate. Capital gains use FMV at exercise as cost basis. Foreign shares must additionally be reported in Schedule FA of the ITR. Non-disclosure can trigger penalties under the Black Money Act. Foreign tax credit may be available under DTAA — file Form 67 before ITR to claim TDS deducted abroad."
          }
        },
        {
          "@type": "Question",
          "name": "Is RSU taxation the same as ESOP taxation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RSUs (Restricted Stock Units) follow similar two-stage taxation but with key differences. There is no exercise event for RSUs — perquisite arises at vesting (no exercise price paid). The full FMV at vesting becomes the perquisite value taxed as salary. Capital gains at sale use FMV at vesting as cost basis. RSUs are common in MNCs and listed companies, ESOPs more common in startups. Holding period for capital gains starts from the vesting date for RSUs."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I file when I have ESOP income?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you have only salary including ESOP perquisite (already in Form 16), file ITR-1 only if all of the following are true: total income below ₹50 lakh, no capital gains, no holding of unlisted equity shares any time during the year, and no ESOP tax deferral availed. Most startup ESOP holders are disqualified from ITR-1 because startup shares are typically unlisted — even if you have not sold any shares yet, merely holding them disqualifies ITR-1. If you sold ESOP shares during the year, file ITR-2 (or HUF) to report capital gains. If you availed startup ESOP tax deferral under Section 80-IAC, file ITR-2 even if otherwise eligible for ITR-1. If you have business income or are a partner in a firm with ESOP income from another company, file ITR-3. For foreign company ESOPs, ITR-2 or ITR-3 with Schedule FA disclosure is mandatory regardless of income level."
          }
        },
        {
          "@type": "Question",
          "name": "Can I claim Section 87A rebate against ESOP perquisite tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes for the perquisite portion. The perquisite is taxed as salary at slab rates and is eligible for Section 87A rebate if your total taxable income is within the rebate threshold. New regime FY 2025-26: rebate up to ₹60,000 if income is at or below ₹12,00,000. Old regime: ₹12,500 if income is at or below ₹5,00,000. However, Section 87A rebate cannot be claimed against capital gains taxed at special rates under Sections 111A and 112A."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need to pay advance tax on ESOP gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes if your total tax liability after TDS exceeds ₹10,000. Perquisite tax at exercise is typically covered by employer TDS. However, capital gains at sale are not subject to TDS for residents, so you must include them in advance tax estimates. Per the Section 234C capital gains proviso, tax on unforeseen gains can be paid in the installment immediately following the sale to avoid interest. Use Patron's Advance Tax Calculator to plan installments."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost of acquisition for ESOP capital gains?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The cost of acquisition is the FMV on the exercise date — the same FMV used to compute the perquisite. This is critical to avoid double taxation. Using the exercise price (amount actually paid) instead of FMV is a common mistake that taxes the perquisite portion twice. Section 49(2AA) explicitly states this rule. Form 16 from the year of exercise shows the FMV — keep it for capital gains computation when you sell."
          }
        },
        {
          "@type": "Question",
          "name": "How will ESOP taxation change under the Income Tax Act 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Act 2025, effective 1 April 2026, retains the substantive ESOP taxation framework with renumbered references. Section 17(2) perquisite treatment continues, Section 80-IAC startup deferral continues, and capital gains rates under Sections 111A/112A remain unchanged. The Tax Year concept replaces separate FY and AY for filings from April 2026 onwards. For FY 2025-26 returns, existing 1961 Act provisions apply."
          }
        }
      ]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #15365f; --primary-light: #1f4a7a; --primary-dark: #0a2240;
            --accent: #f26522; --accent-light: #ff8347;
            --surface: #FAFAF8; --surface-alt: #F0EFEB; --card: #FFFFFF;
            --text: #414042; --text-secondary: #555555; --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669; --info: #0EA5E9; --danger: #DC2626;
            --radius: 12px; --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06); --shadow-md: 0 4px 16px rgba(0,0,0,0.08); --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif; --font-mono: 'Space Mono', monospace;
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
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="date"] { font-family: var(--font-mono); font-size: 15px; font-weight: 600; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .checkbox-group { display: flex; align-items: flex-start; gap: 10px; padding: 12px 14px; background: var(--surface); border: 1.5px solid var(--border); border-radius: var(--radius); cursor: pointer; transition: border-color 0.2s; }
        .checkbox-group:hover { border-color: var(--primary-light); }
        .checkbox-group input[type="checkbox"] { width: 18px; height: 18px; flex-shrink: 0; margin-top: 2px; cursor: pointer; }
        .checkbox-group label { font-size: 13px; font-weight: 500; color: var(--text); margin: 0; cursor: pointer; line-height: 1.5; text-transform: none; letter-spacing: 0; }
        .checkbox-group label small { display: block; font-size: 11px; color: var(--text-muted); margin-top: 2px; font-weight: 400; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .stage-card { background: var(--surface); border-radius: var(--radius); padding: 20px; margin-bottom: 16px; border: 2px solid var(--border); }
        .stage-card.exercise { border-color: var(--info); background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); }
        .stage-card.sale { border-color: var(--success); background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); }
        .stage-card.deferred { border-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .stage-head { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; }
        .stage-tag { font-family: var(--font-mono); font-size: 11px; font-weight: 700; padding: 4px 10px; border-radius: 12px; letter-spacing: 0.5px; color: #fff; }
        .stage-tag.exercise { background: var(--info); }
        .stage-tag.sale { background: var(--success); }
        .stage-tag.deferred { background: var(--accent); color: var(--primary-dark); }
        .stage-title { font-size: 15px; font-weight: 700; color: var(--primary-dark); flex: 1; }
        .stage-row { display: flex; justify-content: space-between; padding: 5px 0; font-size: 13px; color: var(--text-secondary); }
        .stage-row .lbl { flex: 1; }
        .stage-row .val { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); }
        .stage-row.total { font-weight: 700; padding-top: 10px; border-top: 1px solid rgba(0,0,0,0.1); margin-top: 8px; font-size: 14px; }
        .stage-row.total .lbl, .stage-row.total .val { color: var(--primary-dark); font-size: 15px; }
        .holding-period-pill { display: inline-block; padding: 4px 10px; border-radius: 12px; font-size: 11px; font-weight: 700; font-family: var(--font-mono); margin-left: 8px; }
        .holding-period-pill.ltcg { background: #D1FAE5; color: #065F46; }
        .holding-period-pill.stcg { background: #FEE2E2; color: #991B1B; }
        .total-summary { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 24px 28px; margin-top: 18px; }
        .total-summary .ts-head { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
        .total-summary .ts-grid { display: grid; grid-template-columns: 1fr; gap: 6px; }
        @media (min-width: 500px) { .total-summary .ts-grid { grid-template-columns: 1fr 1fr; } }
        .total-summary .ts-row { display: flex; justify-content: space-between; font-size: 13px; color: rgba(255,255,255,0.85); padding: 4px 0; }
        .total-summary .ts-row .val { font-family: var(--font-mono); font-weight: 700; color: #fff; }
        .total-summary .ts-grand { margin-top: 14px; padding-top: 14px; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center; }
        .total-summary .ts-grand .lbl { font-size: 14px; font-weight: 700; color: rgba(255,255,255,0.95); }
        .total-summary .ts-grand .val { font-family: var(--font-mono); font-size: 24px; font-weight: 700; color: var(--accent-light); }
        .btn-reset { display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; padding: 8px 16px; border: 1px solid var(--border); border-radius: 8px; background: var(--card); color: var(--text-muted); font-family: var(--font-body); font-size: 13px; font-weight: 500; cursor: pointer; transition: all 0.2s; }
        .btn-reset:hover { border-color: var(--danger); color: var(--danger); }
        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 8px 0 16px 24px; color: var(--text-secondary); font-size: 15px; line-height: 1.75; }
        .content-section li { margin-bottom: 6px; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 600px; }
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
    </style>
</head>
<body>

<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">Two-Stage Tax</a>
        <a href="#perquisite">Perquisite</a>
        <a href="#capital-gains">Capital Gains</a>
        <a href="#deferral">Startup Deferral</a>
        <a href="#examples">Examples</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    ESOP Tax Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>ESOP Tax Calculator — <span>Perquisite + Capital Gains</span> FY 2025-26</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Exercised ESOPs this year? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20ESOP%20Tax%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Tax%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ESOP%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20ESOP%20perquisite%20%2B%20capital%20gains%20taxation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>ESOPs are taxed in <strong>two stages</strong>. Stage 1 — at <strong>exercise</strong>: perquisite = (FMV − exercise price) × shares, taxed as <strong>salary at slab rates</strong> with TDS by employer. Stage 2 — at <strong>sale</strong>: capital gains = (sale price − FMV at exercise) × shares, taxed at <strong>special rates</strong> (12.5% LTCG / 20% STCG for listed equity above ₹1.25L exemption). Holding period starts from <strong>allotment date</strong>. Eligible startup employees (DPIIT + 80-IAC) can <strong>defer perquisite tax</strong> up to 48 months. The cost basis for capital gains is <strong>FMV at exercise</strong>, not exercise price — using exercise price causes double taxation.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>ESOP Two-Stage Tax Calculator</h2>
            <p class="calc-intro">Enter your exercise details and (optionally) sale details. The calculator auto-detects holding period, applies the correct LTCG/STCG regime based on sale date, and flags the startup deferral case.</p>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or use the manual formulas in the content below.</div>
            </noscript>

            <div class="calc-section-title">Stage 1 — Exercise Details</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="exerciseDate">Exercise / Allotment Date</label>
                    <input type="date" id="exerciseDate" autocomplete="off">
                    <span class="helper">When you exercised the option and shares were allotted</span>
                </div>
                <div class="form-group">
                    <label for="numShares">Number of Shares Exercised</label>
                    <input type="text" id="numShares" placeholder="e.g. 1000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Total ESOP shares exercised in this transaction</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="exercisePrice">Exercise Price per Share (₹)</label>
                    <input type="text" id="exercisePrice" placeholder="e.g. 50" autocomplete="off" inputmode="decimal">
                    <span class="helper">The fixed strike price you paid per share</span>
                </div>
                <div class="form-group">
                    <label for="fmvExercise">FMV per Share at Exercise (₹)</label>
                    <input type="text" id="fmvExercise" placeholder="e.g. 500" autocomplete="off" inputmode="decimal">
                    <span class="helper">Listed: closing price on exercise day. Unlisted: merchant banker valuation.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Tax Regime</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="new" onclick="setRegime(this)">New Regime<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Default, lower rates</small></button>
                        <button type="button" class="toggle-btn" data-value="old" onclick="setRegime(this)">Old Regime<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">With 80C/80D etc.</small></button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="otherSalary">Other Salary Income (₹) — annual</label>
                    <input type="text" id="otherSalary" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Your base salary excluding this ESOP perquisite. Used for accurate slab tax.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <div class="checkbox-group">
                        <input type="checkbox" id="startupDeferral">
                        <label for="startupDeferral">
                            Eligible startup deferral (Section 80-IAC)
                            <small>Check this if your employer is BOTH DPIIT-recognised AND IMB-certified under Section 80-IAC. Defers perquisite tax up to 48 months. Only ~4,000 of 1.97 lakh DPIIT startups qualify.</small>
                        </label>
                    </div>
                </div>
            </div>

            <div class="calc-section-title">Stage 2 — Sale Details (Optional)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="saleDate">Sale Date (leave empty if not sold yet)</label>
                    <input type="date" id="saleDate" autocomplete="off">
                    <span class="helper">When you sold the shares. Determines holding period and capital gains regime.</span>
                </div>
                <div class="form-group">
                    <label for="salePrice">Sale Price per Share (₹)</label>
                    <input type="text" id="salePrice" placeholder="e.g. 800" autocomplete="off" inputmode="decimal">
                    <span class="helper">Net sale price after brokerage</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="numSharesSold">Number of Shares Sold</label>
                    <input type="text" id="numSharesSold" placeholder="0 = none sold yet" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Defaults to 0 (exercise-and-hold). Enter how many of the exercised shares you sold. Cannot exceed shares exercised.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Share Type</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="listed" onclick="setShareType(this)">Listed Equity<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">NSE/BSE/Foreign exchange</small></button>
                        <button type="button" class="toggle-btn" data-value="unlisted" onclick="setShareType(this)">Unlisted<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Private startup shares</small></button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="otherLTCG">Other LTCG already used in ₹1.25L exemption (₹)</label>
                    <input type="text" id="otherLTCG" placeholder="0" value="0" max="125000" autocomplete="off" inputmode="decimal">
                    <span class="helper">If you already claimed part of the ₹1.25L Sec 112A exemption from other equity sales this FY</span>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate ESOP Tax</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div id="bannerArea"></div>

                <div id="stageArea"></div>

                <div class="total-summary" id="totalSummary" style="display:none;">
                    <div class="ts-head">Total Tax Impact</div>
                    <div class="ts-grid" id="totalGrid"></div>
                    <div class="ts-grand">
                        <span class="lbl">Total Tax Payable</span>
                        <span class="val" id="totalGrandVal">—</span>
                    </div>
                </div>

                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — ESOP Tax Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20ESOP%20Tax%20Calculator.%20Please%20review%20my%20perquisite%20%2B%20capital%20gains%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Tax%20Calculator%20%E2%80%94%20Review%20Request&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20ESOP%20Tax%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20ESOP%20perquisite%20%2B%20capital%20gains%20taxation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How ESOP Taxation Works in India</h2>
            <p>Employee Stock Option Plans (ESOPs) align employee incentives with company growth, but their taxation is one of the most complex areas of personal income tax in India. The framework is governed by Section 17(2)(vi) of the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Income Tax Act 1961</a>, administered by the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>, and applied per the standards prescribed by the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>. The startup deferral mechanism was introduced by the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> via Finance Act 2020 and refined through subsequent <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB notifications</a>.</p>

            <h3>The Four-Stage ESOP Lifecycle</h3>
            <ol>
                <li><strong>Grant</strong> — Company awards options to employee at fixed exercise price. <em>No tax.</em></li>
                <li><strong>Vest</strong> — Options become exercisable after vesting period (typically 1-4 years). <em>No tax.</em></li>
                <li><strong>Exercise</strong> — Employee pays exercise price, shares allotted. <em>Stage 1 tax: perquisite as salary.</em></li>
                <li><strong>Sale</strong> — Employee sells the shares for cash. <em>Stage 2 tax: capital gains.</em></li>
            </ol>

            <p>Two distinct taxable events create two tax liabilities. Understanding the cost-basis flow between them is critical to avoid double taxation.</p>
        </section>

        <section class="content-section" id="perquisite">
            <h2>Stage 1 — Perquisite at Exercise</h2>
            <p>When you exercise vested options, a perquisite arises immediately. The perquisite value is taxed as salary income in the financial year of exercise.</p>

            <div class="formula-box">
                <span class="label">Perquisite Value</span> = (FMV at Exercise − Exercise Price) × Number of Shares<br>
                <span class="label">Tax</span> = Slab Tax on (Other Salary + Perquisite Value) under chosen regime
            </div>

            <h3>Determining FMV</h3>
            <ul>
                <li><strong>Listed shares (NSE/BSE/Foreign exchange):</strong> The average of the highest and lowest prices on the recognised stock exchange on the exercise date. If shares aren't traded that day, use the previous trading day's average.</li>
                <li><strong>Unlisted shares (private startup):</strong> Determined by a Category I SEBI-registered merchant banker as on the exercise date. The valuation report is mandatory and the employer relies on it for TDS computation under Rule 3(8) of the Income Tax Rules.</li>
                <li><strong>Foreign parent ESOPs (MNC):</strong> FMV in foreign currency on exercise date converted to INR at SBI reference rate.</li>
            </ul>

            <h3>TDS Treatment</h3>
            <p>The employer deducts TDS on the perquisite under Section 192 in the same financial year as exercise. The perquisite appears in your Form 16 (or new Form 130 from FY 2026-27 onwards). If TDS is short-deducted, you pay the balance as advance tax or self-assessment tax.</p>

            <div class="callout warn">
                <p><strong>Cash-flow trap:</strong> Perquisite tax is due on FMV − exercise price even though you haven't sold the shares yet. For a ₹9 lakh perquisite at 30% slab, you owe ₹2.7 lakh in cash with zero liquidity from the shares themselves. This is exactly the problem the startup deferral solves for eligible startups.</p>
            </div>
        </section>

        <section class="content-section" id="capital-gains">
            <h2>Stage 2 — Capital Gains at Sale</h2>
            <p>When you sell ESOP shares, capital gains tax applies on the appreciation between exercise FMV and sale price. The cost of acquisition is the FMV at exercise (already taxed as perquisite), <strong>not the exercise price</strong>.</p>

            <div class="formula-box">
                <span class="label">Capital Gains</span> = (Sale Price − FMV at Exercise) × Number of Shares<br>
                <span class="label">Holding Period</span> = Sale Date − Allotment Date<br>
                <span class="label">Tax</span> = STCG or LTCG rate depending on holding period and share type
            </div>

            <h3>Classification &amp; Rates (Sale on or after 23 July 2024)</h3>
            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Share Type</th><th>Holding Period</th><th>Classification</th><th>Section</th><th>Tax Rate</th></tr>
                </thead>
                <tbody>
                    <tr><td>Listed Equity</td><td>≤ 12 months</td><td>STCG</td><td>111A</td><td>20% flat</td></tr>
                    <tr><td>Listed Equity</td><td>&gt; 12 months</td><td>LTCG</td><td>112A</td><td>12.5% on gains above ₹1.25L</td></tr>
                    <tr><td>Unlisted</td><td>≤ 24 months</td><td>STCG</td><td>—</td><td>Slab rate</td></tr>
                    <tr><td>Unlisted</td><td>&gt; 24 months</td><td>LTCG</td><td>112</td><td>12.5% no indexation</td></tr>
                </tbody>
            </table></div>

            <h3>Critical: Cost Basis Rule</h3>
            <p>Section 49(2AA) explicitly states the cost of acquisition for capital gains is the FMV used for perquisite computation — i.e., the FMV at exercise. Using the exercise price (the cash you actually paid) is a common error that results in paying tax on the perquisite portion <em>twice</em>. Always reference the FMV from your Form 16 of the exercise year.</p>

            <div class="callout">
                <p><strong>Capital gains regime change:</strong> Finance Act 2024 changed rates effective <strong>23 July 2024</strong>. For sales before this date, old rates applied (10% LTCG, 15% STCG, ₹1L exemption, indexation for unlisted). For sales on or after 23 July 2024, the calculator uses the new rates shown above. Exercise date is irrelevant — only sale date determines the regime.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help with ESOP Taxation?</h3>
    <p>Patron's CAs compute your perquisite tax at exercise, capital gains at sale, FMV reporting, and DTAA relief on foreign ESOPs. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ESOP%20Tax%20Calculator.%20I%20need%20help%20with%20ESOP%20perquisite%20%2B%20capital%20gains%20taxation.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Tax%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ESOP%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20ESOP%20perquisite%20%2B%20capital%20gains%20taxation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="deferral">
            <h2>Startup Tax Deferral (Section 80-IAC)</h2>
            <p>Section 192(1C) of the Income Tax Act allows employees of eligible startups to defer perquisite tax. This solves the cash-flow problem of paying tax at exercise on illiquid shares.</p>

            <h3>Eligibility — All Three Required</h3>
            <ol>
                <li>The employer is <strong>DPIIT-recognised</strong> under Startup India.</li>
                <li>The employer holds <strong>IMB certification under Section 80-IAC</strong> by the Inter-Ministerial Board.</li>
                <li>The employer has opted into the deferral scheme.</li>
            </ol>
            <p>As of April 2026, only about 4,000 of 1.97 lakh DPIIT-recognised startups hold IMB certification. DPIIT recognition alone is not sufficient.</p>

            <h3>Trigger Events — Earliest of Three</h3>
            <p>Deferred tax becomes payable at the <strong>earliest</strong> of:</p>
            <ol>
                <li><strong>48 months from end of assessment year of allotment</strong> (effectively ~5 years from exercise)</li>
                <li><strong>Date of share sale</strong></li>
                <li><strong>Date of leaving the startup</strong> (cessation of employment)</li>
            </ol>

            <h3>Tax Rate at Trigger</h3>
            <p>Critical detail: tax is computed at <strong>allotment-year rates</strong>, not trigger-year rates. If you exercised in FY 2025-26 and the trigger occurs in FY 2029-30, the tax uses FY 2025-26 slabs and rebate amounts.</p>

            <div class="callout warn">
                <p><strong>Common misconception:</strong> The deferral is a <em>postponement</em>, not a waiver. The tax is still owed — just paid later. Budget for the eventual outflow when the trigger event approaches. Patron's <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac">guide on ESOP deferral</a> explains the mechanism in detail.</p>
            </div>
        </section>

        <section class="content-section" id="examples">
            <h2>Worked Examples</h2>

            <h3>Example 1 — Listed Company ESOP, Held 18 Months</h3>
            <p>Exercise on 1 April 2024: 1,000 shares at ₹50 strike, FMV ₹500. Perquisite = (500−50) × 1000 = ₹4,50,000. Other salary ₹15L, new regime. Sold on 1 October 2025 at ₹800 (held 18 months → LTCG).</p>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Stage</th><th>Computation</th><th>Tax</th></tr></thead>
                <tbody>
                    <tr><td>Perquisite (FY 2024-25)</td><td>Total salary = ₹15L + ₹4.5L = ₹19.5L. Slab tax under FY 2024-25 new regime + 4% cess. Already paid via employer TDS in March 2025.</td><td>~₹3,07,000 approx</td></tr>
                    <tr><td>Capital Gains (FY 2025-26)</td><td>LTCG = (800−500) × 1000 = ₹3,00,000. Less ₹1.25L Sec 112A exemption: ₹1,75,000 taxable. 12.5% × ₹1,75,000 = ₹21,875. Cess 4% = ₹875.</td><td>₹22,750</td></tr>
                </tbody>
            </table></div>
            <p><em>Note: If you exercised in FY 2025-26 instead, the calculator above (which uses FY 2025-26 slabs) gives perquisite tax of ₹88,400 incremental on the ₹4.5L perquisite over the ₹15L base salary.</em></p>

            <h3>Example 2 — Startup ESOP with Deferral</h3>
            <p>Exercise on 1 June 2025 in DPIIT-certified 80-IAC startup: 2,000 shares at ₹10 strike, FMV ₹500. Perquisite = ₹9,80,000. Employer doesn't deduct TDS due to deferral. Employee pays no tax now.</p>
            <p>If the employee leaves the startup on 1 June 2027 (trigger event), tax becomes due — computed at <strong>FY 2025-26 slab rates</strong>, not FY 2027-28 rates. Assuming other income ₹15L:</p>
            <ul>
                <li>Salary in FY 2025-26 = ₹15L + ₹9.8L perquisite = ₹24.8L</li>
                <li>New regime tax on ₹24.8L (incl. 4% cess) = ₹3,36,960</li>
                <li>Less: tax on base ₹15L alone = ₹1,09,200</li>
                <li>Incremental perquisite tax = <strong>₹2,27,760</strong> — paid in FY 2027-28 but at FY 2025-26 rates</li>
                <li>If shares are sold later, capital gains regime applies based on sale-date rules</li>
            </ul>

            <h3>Example 3 — Foreign Parent (MNC) ESOPs</h3>
            <p>Indian employee of US tech company. Exercise on 1 January 2025: 100 RSUs at $0 strike (RSU = no exercise price), FMV $500/share, USD/INR ₹83. Perquisite = $500 × 100 × 83 = ₹41,50,000.</p>
            <p>Salary becomes ₹15L base + ₹41.5L = ₹56.5L. New regime tax including 10% surcharge ≈ ₹15,79,800. Sold 14 months later at $700/share, USD/INR ₹86 → LTCG = ($700 × 86 − $500 × 83) × 100 = ₹19,70,000 × 100 = ₹19,70,000. Tax 12.5% above ₹1.25L exemption = ₹2,30,625 + cess.</p>
            <p><strong>Schedule FA disclosure mandatory</strong> — non-disclosure of foreign shares triggers Black Money Act penalties up to ₹10L per year.</p>

            <div class="callout">
                <p><strong>Pre-23-July-2024 sale warning:</strong> If you sold ESOP shares between 1 April 2024 and 22 July 2024, the old capital gains regime applied (10% LTCG above ₹1L for listed; 20% with indexation for unlisted). This calculator uses post-pivot rates only — for pre-pivot sales, consult a CA. Patron's <a href="/itr-for-capital-gains">capital gains ITR service</a> handles both regimes.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How are ESOPs taxed in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ESOPs in India are taxed in two stages. First, at exercise — the perquisite value (FMV on exercise date minus exercise price) is taxed as salary income at slab rates with TDS deducted by employer under Section 192. Second, at sale — capital gains arise on the difference between sale price and FMV at exercise. For listed equity, LTCG above ₹1.25L is taxed at 12.5%, STCG at 20%. For unlisted shares, holding period thresholds and rates differ.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the FMV used for ESOP perquisite calculation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For listed shares, FMV is the average of the highest and lowest prices on the recognised stock exchange on the exercise date. If shares are not traded that day, the previous trading day's average is used. For unlisted shares, FMV must be determined by a Category I SEBI-registered merchant banker as on the date of exercise. The merchant banker's valuation report is mandatory and the employer relies on it for TDS computation under Rule 3(8) of the Income Tax Rules.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the ESOP tax deferral for startup employees?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Under Section 192(1C), employees of eligible startups can defer ESOP perquisite tax. Tax becomes due at the earliest of: 48 months from end of assessment year of allotment, sale of shares, or cessation of employment. Eligibility requires the employer to be both DPIIT-recognised AND certified under Section 80-IAC by the Inter-Ministerial Board. Approximately 4,000 of 1.97 lakh DPIIT-recognised startups currently qualify. Tax is computed at allotment-year rates, not trigger-year rates.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is capital gains computed when ESOP shares are sold?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Capital gains equal sale price minus the FMV at exercise (which already paid perquisite tax). Holding period starts from the allotment date, not grant or vest. For listed shares: holding over 12 months gives LTCG taxed at 12.5% above ₹1.25L; under 12 months gives STCG at 20% under Section 111A. For unlisted shares: holding over 24 months gives LTCG at 12.5% no indexation; under 24 months gives STCG taxed at slab rates.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens if I exercised ESOPs before 23 July 2024 and sold after?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The Finance Act 2024 changed capital gains rates effective 23 July 2024. For sales on or after this date, the new rates apply: 12.5% LTCG and 20% STCG for listed equity, 12.5% no-indexation for property and unlisted shares. The exercise date does not matter for the capital gains regime — only the sale date determines which rates apply. Your perquisite tax was paid at exercise time at then-applicable slab rates, and capital gains are computed using the sale-date rules.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are ESOPs from foreign parent companies taxed differently?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Foreign company ESOPs follow the same two-stage taxation structure but with additional reporting. Perquisite at exercise uses FMV on exercise date converted to INR at SBI reference rate. Capital gains use FMV at exercise as cost basis. Foreign shares must additionally be reported in Schedule FA of the ITR. Non-disclosure can trigger penalties under the Black Money Act. Foreign tax credit may be available under DTAA — file Form 67 before ITR to claim TDS deducted abroad.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is RSU taxation the same as ESOP taxation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">RSUs (Restricted Stock Units) follow similar two-stage taxation but with key differences. There is no exercise event for RSUs — perquisite arises at vesting (no exercise price paid). The full FMV at vesting becomes the perquisite value taxed as salary. Capital gains at sale use FMV at vesting as cost basis. RSUs are common in MNCs and listed companies, ESOPs more common in startups. Holding period for capital gains starts from the vesting date for RSUs.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which ITR form should I file when I have ESOP income?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">If you have only salary including ESOP perquisite (already in Form 16), file ITR-1 only if all of the following are true: total income below ₹50 lakh, no capital gains, no holding of unlisted equity shares any time during the year, and no ESOP tax deferral availed. Most startup ESOP holders are disqualified from ITR-1 because startup shares are typically unlisted — even if you have not sold any shares yet, merely holding them disqualifies ITR-1. If you sold ESOP shares during the year, file ITR-2 (or HUF) to report capital gains. If you availed startup ESOP tax deferral under Section 80-IAC, file ITR-2 even if otherwise eligible for ITR-1. If you have business income or are a partner in a firm with ESOP income from another company, file ITR-3. For foreign company ESOPs, ITR-2 or ITR-3 with Schedule FA disclosure is mandatory regardless of income level.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim Section 87A rebate against ESOP perquisite tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes for the perquisite portion. The perquisite is taxed as salary at slab rates and is eligible for Section 87A rebate if your total taxable income is within the rebate threshold. New regime FY 2025-26: rebate up to ₹60,000 if income is at or below ₹12,00,000. Old regime: ₹12,500 if income is at or below ₹5,00,000. However, Section 87A rebate cannot be claimed against capital gains taxed at special rates under Sections 111A and 112A.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Do I need to pay advance tax on ESOP gains?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes if your total tax liability after TDS exceeds ₹10,000. Perquisite tax at exercise is typically covered by employer TDS. However, capital gains at sale are not subject to TDS for residents, so you must include them in advance tax estimates. Per the Section 234C capital gains proviso, tax on unforeseen gains can be paid in the installment immediately following the sale to avoid interest. Use Patron's Advance Tax Calculator to plan installments.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the cost of acquisition for ESOP capital gains?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The cost of acquisition is the FMV on the exercise date — the same FMV used to compute the perquisite. This is critical to avoid double taxation. Using the exercise price (amount actually paid) instead of FMV is a common mistake that taxes the perquisite portion twice. Section 49(2AA) explicitly states this rule. Form 16 from the year of exercise shows the FMV — keep it for capital gains computation when you sell.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How will ESOP taxation change under the Income Tax Act 2025?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The Income Tax Act 2025, effective 1 April 2026, retains the substantive ESOP taxation framework with renumbered references. Section 17(2) perquisite treatment continues, Section 80-IAC startup deferral continues, and capital gains rates under Sections 111A/112A remain unchanged. The Tax Year concept replaces separate FY and AY for filings from April 2026 onwards. For FY 2025-26 returns, existing 1961 Act provisions apply.</div></div></div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Reviewed ESOP Tax</h3>
    <p>Two-stage ESOP tax computed and filed — perquisite + capital gains, including foreign listings — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20ESOP%20Tax%20Calculator.%20I%20need%20help%20with%20ESOP%20perquisite%20%2B%20capital%20gains%20taxation.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=ESOP%20Tax%20Calculator%20%E2%80%94%20Query&amp;body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20ESOP%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20ESOP%20perquisite%20%2B%20capital%20gains%20taxation.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/itr-filing-for-salary" class="sidebar-link">ITR Filing for Salary <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Help <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers / Professionals <span class="arrow">→</span></a>
            <a href="/zoho-books-accounting" class="sidebar-link">Zoho Books Accounting <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/old-vs-new-regime-calculator" class="sidebar-link">Old vs New Regime Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/esop-taxation-rules-2026-when-how-stock-options-taxed-rules" class="sidebar-link">ESOP Taxation Rules 2026 <span class="arrow">→</span></a>
            <a href="/blog/esop-tax-deferral-startup-employees-dpiit-section-80-iac" class="sidebar-link">ESOP Tax Deferral for Startups <span class="arrow">→</span></a>
            <a href="/blog/how-to-declare-rsus-esops-in-your-income-tax-return-in-india" class="sidebar-link">How to Declare RSUs / ESOPs in ITR <span class="arrow">→</span></a>
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
    let shareType = 'listed';

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

    function setShareType(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        shareType = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    // FY 2025-26 slab tax computation
    function computeSlabTax(income, regimeIn) {
        if (income <= 0) return 0;
        let tax = 0;
        if (regimeIn === 'new') {
            const slabs = [[400000, 0], [800000, 0.05], [1200000, 0.10], [1600000, 0.15], [2000000, 0.20], [2400000, 0.25], [Infinity, 0.30]];
            let prev = 0;
            for (const [limit, rate] of slabs) {
                if (income <= limit) { tax += (income - prev) * rate; break; }
                tax += (limit - prev) * rate;
                prev = limit;
            }
        } else {
            const slabs = [[250000, 0], [500000, 0.05], [1000000, 0.20], [Infinity, 0.30]];
            let prev = 0;
            for (const [limit, rate] of slabs) {
                if (income <= limit) { tax += (income - prev) * rate; break; }
                tax += (limit - prev) * rate;
                prev = limit;
            }
        }
        return tax;
    }

    function applyRebate87A(income, taxBeforeRebate, regimeIn) {
        if (regimeIn === 'new' && income <= 1200000) {
            const rebate = Math.min(60000, taxBeforeRebate);
            return Math.max(0, taxBeforeRebate - rebate);
        }
        if (regimeIn === 'old' && income <= 500000) {
            const rebate = Math.min(12500, taxBeforeRebate);
            return Math.max(0, taxBeforeRebate - rebate);
        }
        // Marginal relief for new regime above ₹12L
        if (regimeIn === 'new' && income > 1200000 && income <= 1300000) {
            const excess = income - 1200000;
            if (taxBeforeRebate > excess) return excess;
        }
        return taxBeforeRebate;
    }

    function applySurcharge(tax, income, regimeIn) {
        // FY 2025-26 surcharge — applies on tax before cess
        // New regime: capped at 25%
        // Old regime: 10%/15%/25%/37%
        let rate = 0;
        if (income > 50000000) rate = (regimeIn === 'new') ? 0.25 : 0.37;
        else if (income > 20000000) rate = 0.25;
        else if (income > 10000000) rate = 0.15;
        else if (income > 5000000) rate = 0.10;
        return tax * (1 + rate);
    }

    function calculate() {
        const exerciseDate = document.getElementById('exerciseDate').value;
        const numShares = parseINR(document.getElementById('numShares').value);
        const exercisePrice = parseINR(document.getElementById('exercisePrice').value);
        const fmvExercise = parseINR(document.getElementById('fmvExercise').value);
        const otherSalary = parseINR(document.getElementById('otherSalary').value) || 0;
        const startupDeferral = document.getElementById('startupDeferral').checked;
        const saleDate = document.getElementById('saleDate').value;
        const salePrice = parseINR(document.getElementById('salePrice').value);
        const otherLTCGUsed = parseINR(document.getElementById('otherLTCG').value) || 0;
        // numSharesSold defaults to 0 if blank/missing — exercise-and-hold scenario
        const numSharesSoldRaw = document.getElementById('numSharesSold').value;
        let numSharesSold = parseINR(numSharesSoldRaw);
        if (!isFinite(numSharesSold) || numSharesSold < 0) numSharesSold = 0;

        // Validation
        if (!exerciseDate || !isFinite(numShares) || numShares <= 0 || !isFinite(exercisePrice) || !isFinite(fmvExercise)) {
            alert('Please fill in all Stage 1 fields: exercise date, number of shares, exercise price, and FMV.');
            return;
        }
        if (numSharesSold > numShares) {
            alert('Number of Shares Sold cannot exceed Number of Shares Exercised. Please correct the value.');
            return;
        }

        const banner = document.getElementById('bannerArea');
        const stages = document.getElementById('stageArea');
        const totalSummary = document.getElementById('totalSummary');
        banner.innerHTML = '';
        stages.innerHTML = '';
        totalSummary.style.display = 'none';

        let bannersHtml = '';
        let stageHtml = '';
        let totalTax = 0;
        let perquisiteTax = 0;
        let capitalGainsTax = 0;

        // ===== STAGE 1 — PERQUISITE =====
        const perquisitePerShare = fmvExercise - exercisePrice;
        const totalPerquisite = perquisitePerShare * numShares;
        const totalSalary = otherSalary + totalPerquisite;

        // Slab tax
        const taxableIncome = totalSalary; // simplified — assumes no other deductions
        const baseTax = computeSlabTax(taxableIncome, regime);
        const afterRebate = applyRebate87A(taxableIncome, baseTax, regime);
        const afterSurcharge = applySurcharge(afterRebate, taxableIncome, regime);
        const cess = afterSurcharge * 0.04;
        const totalSlabTax = Math.round(afterSurcharge + cess);

        // Tax attributable to perquisite (incremental approach)
        const baseSalaryOnly = otherSalary;
        const baseSalaryTax = computeSlabTax(baseSalaryOnly, regime);
        const baseSalaryAfterRebate = applyRebate87A(baseSalaryOnly, baseSalaryTax, regime);
        const baseSalaryAfterSurcharge = applySurcharge(baseSalaryAfterRebate, baseSalaryOnly, regime);
        const baseSalaryTotal = Math.round(baseSalaryAfterSurcharge * 1.04);
        perquisiteTax = totalSlabTax - baseSalaryTotal;

        // Banner: deferral note
        if (startupDeferral) {
            bannersHtml += '<div class="info-banner warn"><strong>⚠ Startup Deferral Applied (Section 80-IAC).</strong> Perquisite tax of ' + fmtINR(perquisiteTax) + ' is deferred — no immediate cash outflow. Tax becomes due at the earliest of: 48 months from end of AY of allotment, sale of shares, or cessation of employment. Tax is computed at allotment-year rates (FY 2025-26), not trigger-year rates.</div>';
        }

        // Exercise date warning
        const exDateObj = new Date(exerciseDate);
        const fy2526Start = new Date('2025-04-01');
        const fy2526End = new Date('2026-03-31');
        if (exDateObj < fy2526Start) {
            const exFY = exDateObj.getFullYear() + (exDateObj.getMonth() < 3 ? 0 : 1);
            bannersHtml += '<div class="info-banner info"><strong>ℹ Exercise in earlier FY.</strong> Calculator uses FY 2025-26 slab rates for illustration. For accurate computation of historical perquisite tax (FY ' + (exFY - 1) + '-' + String(exFY).slice(-2) + ' or earlier), slab rates and 87A thresholds may differ — consult a CA for the year of actual exercise.</div>';
        }

        const stageClass = startupDeferral ? 'deferred' : 'exercise';
        const stageTagClass = startupDeferral ? 'deferred' : 'exercise';
        const stageLabel = startupDeferral ? 'STAGE 1 — DEFERRED' : 'STAGE 1 — PERQUISITE';
        stageHtml += '<div class="stage-card ' + stageClass + '">';
        stageHtml += '<div class="stage-head"><span class="stage-tag ' + stageTagClass + '">' + stageLabel + '</span><span class="stage-title">Perquisite at Exercise</span></div>';
        stageHtml += '<div class="stage-row"><span class="lbl">Perquisite per share (FMV − Exercise Price)</span><span class="val">' + fmtINR(perquisitePerShare) + '</span></div>';
        stageHtml += '<div class="stage-row"><span class="lbl">Number of shares</span><span class="val">' + numShares.toLocaleString('en-IN') + '</span></div>';
        stageHtml += '<div class="stage-row"><span class="lbl">Total Perquisite Value</span><span class="val">' + fmtINR(totalPerquisite) + '</span></div>';
        stageHtml += '<div class="stage-row"><span class="lbl">Total Salary (Other + Perquisite)</span><span class="val">' + fmtINR(totalSalary) + '</span></div>';
        stageHtml += '<div class="stage-row"><span class="lbl">Slab Tax on Total (' + (regime === 'new' ? 'New' : 'Old') + ' Regime, incl. cess)</span><span class="val">' + fmtINR(totalSlabTax) + '</span></div>';
        stageHtml += '<div class="stage-row total"><span class="lbl">Tax attributable to Perquisite' + (startupDeferral ? ' <em>(deferred)</em>' : '') + '</span><span class="val">' + fmtINR(perquisiteTax) + '</span></div>';
        stageHtml += '</div>';

        // ===== STAGE 2 — CAPITAL GAINS =====
        let cgInfo = null;
        // Only run Stage 2 if shares were actually sold AND sale details provided.
        if (numSharesSold === 0) {
            // Exercise-and-hold scenario — Stage 2 not yet applicable
            stageHtml += '<div class="stage-card" style="border-left: 4px solid #94A3B8;">';
            stageHtml += '<div class="stage-head"><span class="stage-tag" style="background:#F1F5F9; color:#475569;">STAGE 2 — NOT YET</span><span class="stage-title">Capital Gains on Sale</span></div>';
            stageHtml += '<div class="stage-row" style="padding-top:8px;"><span class="lbl" style="color:#475569; line-height:1.6;">You exercised <strong>' + numShares.toLocaleString('en-IN') + '</strong> shares but have not sold any yet. <strong>Capital gains tax (Stage 2) will apply only when you sell.</strong> When you do, return to this calculator and enter the number of shares sold to compute the capital gains liability.</span></div>';
            stageHtml += '<div class="stage-row" style="padding-top:6px;"><span class="lbl" style="color:#64748B; font-size:13px; font-style:italic;">Holding period for STCG/LTCG classification will be measured from the exercise date (' + exerciseDate + ') to the sale date.</span></div>';
            stageHtml += '</div>';
        } else if (saleDate && isFinite(salePrice) && salePrice > 0) {
            const saleDateObj = new Date(saleDate);
            if (saleDateObj <= exDateObj) {
                bannersHtml += '<div class="info-banner danger"><strong>✕ Invalid sale date.</strong> Sale date must be after exercise date.</div>';
            } else {
                // Pre-pivot warning
                const pivotDate = new Date('2024-07-23');
                const isPrePivot = saleDateObj < pivotDate;
                if (isPrePivot) {
                    bannersHtml += '<div class="info-banner warn"><strong>⚠ Pre-23-July-2024 sale.</strong> Sale occurred before the Finance Act 2024 capital gains regime change. Old rates apply (10% LTCG above ₹1L for listed equity, 20% with indexation for unlisted). This calculator uses post-pivot rates only — capital gains figure below is an approximation. Consult a CA for accurate pre-pivot computation.</div>';
                }

                // Holding period in days
                const diffMs = saleDateObj - exDateObj;
                const diffDays = Math.floor(diffMs / (1000 * 60 * 60 * 24));
                const diffMonths = Math.floor(diffDays / 30.44); // avg
                const holdingThresholdDays = (shareType === 'listed') ? 365 : 730; // 12mo / 24mo
                const isLTCG = diffDays > holdingThresholdDays;

                const cgPerShare = salePrice - fmvExercise;
                const totalCG = cgPerShare * numSharesSold;
                let cgTax = 0;
                let cgRate = 0;
                let cgSection = '';
                let exemption = 0;
                let taxableCG = 0;

                if (totalCG > 0) {
                    if (shareType === 'listed') {
                        if (isLTCG) {
                            // Section 112A — 12.5% above ₹1.25L exemption
                            cgSection = 'Section 112A';
                            cgRate = 12.5;
                            exemption = Math.max(0, 125000 - otherLTCGUsed);
                            taxableCG = Math.max(0, totalCG - exemption);
                            cgTax = Math.round(taxableCG * 0.125);
                        } else {
                            // Section 111A — 20%
                            cgSection = 'Section 111A';
                            cgRate = 20;
                            taxableCG = totalCG;
                            cgTax = Math.round(totalCG * 0.20);
                        }
                    } else {
                        // Unlisted
                        if (isLTCG) {
                            cgSection = 'Section 112';
                            cgRate = 12.5;
                            taxableCG = totalCG;
                            cgTax = Math.round(totalCG * 0.125);
                        } else {
                            // STCG on unlisted = slab. Compute incremental.
                            cgSection = 'Slab Rate (STCG unlisted)';
                            cgRate = 0; // displayed differently
                            taxableCG = totalCG;
                            const incrementalTax = computeSlabTax(otherSalary + totalPerquisite + totalCG, regime) - computeSlabTax(otherSalary + totalPerquisite, regime);
                            cgTax = Math.round(incrementalTax * 1.04); // simplified, no surcharge
                        }
                    }
                }

                const cgCess = Math.round(cgTax * 0.04);
                const totalCGTax = cgTax + cgCess;
                capitalGainsTax = totalCGTax;
                cgInfo = { isLTCG, totalCG, cgSection, cgTax, cgCess, totalCGTax, exemption, taxableCG, holdingMonths: diffMonths };

                stageHtml += '<div class="stage-card sale">';
                stageHtml += '<div class="stage-head"><span class="stage-tag sale">STAGE 2 — CAPITAL GAINS</span><span class="stage-title">Sale of Shares <span class="holding-period-pill ' + (isLTCG ? 'ltcg' : 'stcg') + '">' + (isLTCG ? 'LTCG' : 'STCG') + ' · ' + diffMonths + ' months</span></span></div>';
                stageHtml += '<div class="stage-row"><span class="lbl">Number of shares sold (of ' + numShares.toLocaleString('en-IN') + ' exercised)</span><span class="val">' + numSharesSold.toLocaleString('en-IN') + '</span></div>';
                stageHtml += '<div class="stage-row"><span class="lbl">Sale price per share</span><span class="val">' + fmtINR(salePrice) + '</span></div>';
                stageHtml += '<div class="stage-row"><span class="lbl">Cost basis (FMV at exercise)</span><span class="val">' + fmtINR(fmvExercise) + '</span></div>';
                stageHtml += '<div class="stage-row"><span class="lbl">Capital gains per share</span><span class="val">' + fmtINR(cgPerShare) + '</span></div>';
                stageHtml += '<div class="stage-row"><span class="lbl">Total Capital Gains</span><span class="val">' + fmtINR(totalCG) + '</span></div>';
                if (totalCG > 0) {
                    if (exemption > 0) {
                        stageHtml += '<div class="stage-row"><span class="lbl">Less: Section 112A exemption (₹1.25L)</span><span class="val">−' + fmtINR(exemption) + '</span></div>';
                    }
                    stageHtml += '<div class="stage-row"><span class="lbl">Taxable gains under ' + cgSection + '</span><span class="val">' + fmtINR(taxableCG) + '</span></div>';
                    if (cgRate > 0) {
                        stageHtml += '<div class="stage-row"><span class="lbl">Tax at ' + cgRate + '%</span><span class="val">' + fmtINR(cgTax) + '</span></div>';
                    } else {
                        stageHtml += '<div class="stage-row"><span class="lbl">Slab tax on STCG (incremental)</span><span class="val">' + fmtINR(cgTax) + '</span></div>';
                    }
                    stageHtml += '<div class="stage-row"><span class="lbl">Cess (4%)</span><span class="val">' + fmtINR(cgCess) + '</span></div>';
                }
                stageHtml += '<div class="stage-row total"><span class="lbl">Total Capital Gains Tax</span><span class="val">' + fmtINR(totalCGTax) + '</span></div>';
                stageHtml += '</div>';
            }
        } else {
            stageHtml += '<div class="stage-card"><div class="stage-head"><span class="stage-title" style="color:var(--text-muted);font-style:italic;">Stage 2 — Sale Details Not Provided</span></div><div class="stage-row"><span class="lbl" style="color:var(--text-muted);">Enter sale date and price above to compute capital gains tax.</span></div></div>';
        }

        banner.innerHTML = bannersHtml;
        stages.innerHTML = stageHtml;

        // Total summary
        totalTax = perquisiteTax + capitalGainsTax;
        if (totalTax > 0 || perquisiteTax > 0 || capitalGainsTax > 0) {
            let summaryRows = '';
            summaryRows += '<div class="ts-row"><span class="lbl">Stage 1 — Perquisite Tax' + (startupDeferral ? ' (deferred)' : '') + '</span><span class="val">' + fmtINR(perquisiteTax) + '</span></div>';
            if (cgInfo) {
                summaryRows += '<div class="ts-row"><span class="lbl">Stage 2 — Capital Gains Tax</span><span class="val">' + fmtINR(capitalGainsTax) + '</span></div>';
            }
            document.getElementById('totalGrid').innerHTML = summaryRows;
            document.getElementById('totalGrandVal').textContent = fmtINR(totalTax);
            totalSummary.style.display = 'block';
        }

        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    function resetCalc() {
        ['exerciseDate', 'numShares', 'exercisePrice', 'fmvExercise', 'otherSalary', 'saleDate', 'salePrice', 'numSharesSold', 'otherLTCG'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = (id === 'otherSalary' || id === 'otherLTCG' || id === 'numSharesSold') ? '0' : '';
        });
        document.getElementById('startupDeferral').checked = false;
        regime = 'new'; shareType = 'listed';
        document.querySelectorAll('.toggle-group').forEach(g => {
            const btns = g.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            btns[0].classList.add('active');
        });
        document.getElementById('resultSection').classList.remove('visible');
        document.querySelector('.calc-card').scrollIntoView({behavior:'smooth',block:'start'});
    }

    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    ['exerciseDate', 'numShares', 'exercisePrice', 'fmvExercise', 'otherSalary', 'saleDate', 'salePrice', 'numSharesSold', 'otherLTCG'].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.addEventListener('keydown', e => { if (e.key === 'Enter') calculate(); });
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

</body>
</html>
@endsection