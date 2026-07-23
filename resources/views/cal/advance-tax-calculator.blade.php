@extends('layouts.app')
@section('meta')
    <title>Advance Tax Calculator | 234B/234C FY 2025-26 & 2026-27</title>
    <meta name="description" content="Advance Tax Calculator: quarterly installments, due dates & Section 234B/234C interest for FY 2025-26 and FY 2026-27. Free CA-reviewed tool. Calculate now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/advance-tax-calculator">

    <meta property="og:title" content="Advance Tax Calculator — Schedule + 234B/234C FY 2025-26">
    <meta property="og:description" content="Compute quarterly advance tax installments and Section 234B/234C interest for FY 2025-26 with full regime and presumptive taxation support.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/advance-tax-calculator">
    <meta property="og:image" content="/tools/og/advance-tax-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advance Tax Calculator — Schedule + 234B/234C FY 2025-26">
    <meta name="twitter:description" content="Quarterly advance tax installments + Section 234B/234C interest for FY 2025-26. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/advance-tax-calculator.png">

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Advance Tax Calculator",
      "description": "Advance Tax Calculator computes quarterly advance tax installments, due dates under Section 211 of the Income Tax Act, and interest payable under Section 234B (default in payment of advance tax) and Section 234C (deferment of advance tax installments) for FY 2025-26 (AY 2026-27). Supports old and new tax regimes, salaried and business income, presumptive taxation under Sections 44AD/44ADA, and senior citizen exemptions. Provides a complete schedule with tolerance bands (12%/36%) for Q1 and Q2 plus exact 75%/100% thresholds for Q3/Q4.",
      "url": "/tools/advance-tax-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "Advance Tax Calculator", "item": "/tools/advance-tax-calculator"}
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
          "name": "What is advance tax and who needs to pay it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Advance tax is income tax paid in installments during the financial year on a pay-as-you-earn basis, instead of a single lump-sum at year-end. Under Section 208, you must pay advance tax if total tax liability after TDS exceeds ₹10,000 in a financial year. This applies to individuals, HUFs, partnership firms, companies, and professionals. Salaried persons usually have advance tax covered by employer TDS unless they have additional income from rent, capital gains, freelancing, or interest."
          }
        },
        {
          "@type": "Question",
          "name": "What are the advance tax due dates for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For FY 2025-26 (AY 2026-27), advance tax is paid in four installments under Section 211: 15th June 2025 (15% of total tax), 15th September 2025 (45% cumulative), 15th December 2025 (75% cumulative), and 15th March 2026 (100% of total tax). Any tax paid up to 31 March 2026 is still treated as advance tax for that year. Missing any deadline triggers interest under Section 234C."
          }
        },
        {
          "@type": "Question",
          "name": "How is Section 234B interest calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 234B applies if your total advance tax paid by 31 March is less than 90% of assessed tax. Interest is charged at 1% per month (simple interest) on the entire shortfall amount, calculated from 1 April of the assessment year until the date you pay the remaining tax or until self-assessment. Any part of a month counts as a full month under Rule 119A. The tax shortfall is rounded down to the nearest ₹100 before applying the rate."
          }
        },
        {
          "@type": "Question",
          "name": "How is Section 234C interest calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 234C levies interest for deferment of installments. For each of the first three installments (15 June, 15 September, 15 December), interest at 1% per month is charged for 3 months on the shortfall below the prescribed cumulative percentage. For the fourth installment (15 March), interest is charged for 1 month only. Tolerance bands apply: 12% paid by 15 June (instead of 15%) and 36% by 15 September (instead of 45%) avoid Section 234C interest for those quarters."
          }
        },
        {
          "@type": "Question",
          "name": "Are senior citizens exempt from advance tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, under Section 207(2), resident senior citizens aged 60 years or above with no income from business or profession are exempt from paying advance tax in installments. They can pay the entire tax in one shot before 31 March of the financial year. However, if a senior citizen has any business or professional income, advance tax rules apply normally with quarterly installments. Non-resident senior citizens do not qualify for this exemption."
          }
        },
        {
          "@type": "Question",
          "name": "How does advance tax work for presumptive taxpayers under Section 44AD or 44ADA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Taxpayers opting for presumptive taxation under Section 44AD (small businesses) or Section 44ADA (specified professionals) enjoy a simplified single-installment rule. Under Section 211(1)(b), the entire advance tax can be paid in one installment by 15 March of the financial year. No interest under Section 234C is charged for the first three quarters. However, Section 234B interest still applies if total advance tax paid is less than 90% of assessed tax by 31 March."
          }
        },
        {
          "@type": "Question",
          "name": "Is TDS counted toward advance tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. TDS deducted by your employer (Section 192), bank (Section 194A), or any other deductor is counted as tax already paid. Advance tax liability is computed on the net amount: total tax minus TDS. If TDS already covers your full liability, no advance tax is required. This is why most salaried taxpayers without additional income do not need to pay advance tax — their TDS is enough."
          }
        },
        {
          "@type": "Question",
          "name": "Can I pay advance tax in a single installment instead of four quarterly installments?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, you can pay the entire estimated tax in one shot before 15 March (or even earlier). However, this only avoids Section 234B interest. You will still incur Section 234C interest for the missed first three quarters because installments were deferred. The most economical approach is to follow the quarterly schedule. Exception: presumptive taxpayers under 44AD/44ADA and senior citizens without business income can pay in one installment without 234C interest."
          }
        },
        {
          "@type": "Question",
          "name": "What is Rule 119A and how does it affect interest calculation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 119A of the Income Tax Rules prescribes the standardised method for computing interest. Two key rules apply: (1) the tax amount is rounded down to the nearest multiple of ₹100, ignoring fractions below ₹100; and (2) any part of a month is treated as a full month. So if interest is due for 2 months and 5 days, you pay for 3 full months. These rules apply uniformly to Sections 234A, 234B, and 234C."
          }
        },
        {
          "@type": "Question",
          "name": "How do I pay advance tax online?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Advance tax is paid through the Income Tax e-filing portal (incometax.gov.in) using Challan No. 280. Steps: (1) Log in or visit the e-Pay Tax page; (2) Select Challan 280; (3) Choose 'Advance Tax (100)' as the payment type; (4) Enter PAN, assessment year, and amount; (5) Pay via net banking, debit card, UPI, or NEFT/RTGS. Save the challan receipt — it is required when filing your ITR. The tax department updates Form 26AS within a few days of payment."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I overpay advance tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Overpaid advance tax becomes a refund when you file your ITR. The Income Tax Department processes refunds along with interest under Section 244A at 0.5% per month from 1 April of the assessment year until refund is issued. Refunds are credited to the bank account pre-validated on the e-filing portal. There is no penalty for overpayment, and revising downward in subsequent installments is allowed if your income estimate reduces during the year."
          }
        },
        {
          "@type": "Question",
          "name": "How will advance tax change under the Income Tax Act 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Income Tax Act 2025, effective 1 April 2026, retains the substance of Sections 208 (advance tax liability), 211 (installment schedule), 234B and 234C (interest provisions) with renumbered references. The 15-15-30-30-25 quarterly percentages, ₹10,000 threshold, 1% monthly interest rate, 90% safe harbour, and senior citizen exemption all continue. For FY 2025-26 returns filed in 2026, the existing provisions apply. Tax Year 2026-27 onwards uses the corresponding sections under the 2025 Act."
          }
        }
      ]
    }
    </script>
@endsection
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
        .calc-section-title:first-child { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
            .calc-row.four-col { grid-template-columns: 1fr 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(4, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); }
        .schedule-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 13px; }
        .schedule-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; }
        .schedule-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .schedule-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .schedule-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .schedule-table tbody tr:nth-child(even) { background: var(--surface); }
        .schedule-table .due-date { font-weight: 600; color: var(--primary-dark); white-space: nowrap; }
        .schedule-table .pct { font-family: var(--font-mono); font-weight: 700; color: var(--accent); }
        .schedule-table .amount { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); white-space: nowrap; }
        .schedule-table tfoot td { padding: 12px 14px; background: var(--primary-dark); color: #fff; font-weight: 700; font-size: 13px; }
        .schedule-table tfoot td:first-child { border-radius: 0 0 0 var(--radius); }
        .schedule-table tfoot td:last-child { border-radius: 0 0 var(--radius) 0; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .interest-wizard { margin-top: 16px; border: 2px solid var(--accent); border-radius: var(--radius); overflow: hidden; background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .interest-details summary { list-style: none; cursor: pointer; padding: 16px 20px; display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--primary-dark); user-select: none; }
        .interest-details summary::-webkit-details-marker { display: none; }
        .interest-details[open] summary { border-bottom: 1px solid #FDE68A; }
        .iw-icon { font-size: 22px; flex-shrink: 0; }
        .iw-title { flex: 1; font-size: 15px; }
        .iw-arrow { font-size: 14px; color: var(--accent); transition: transform 0.2s; }
        .interest-details[open] .iw-arrow { transform: rotate(180deg); }
        .interest-body { padding: 20px; background: var(--card); }
        .interest-intro { font-size: 13px; color: var(--text-secondary); margin-bottom: 18px; line-height: 1.6; }
        .quarterly-input { background: var(--surface); border-radius: var(--radius); padding: 14px 16px; margin-bottom: 12px; border: 1px solid var(--border); }
        .quarterly-input label { font-size: 12px; font-weight: 600; color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.3px; display: block; margin-bottom: 4px; }
        .quarterly-input .due-date-tag { display: inline-block; background: var(--primary); color: #fff; font-size: 10px; padding: 2px 8px; border-radius: 10px; margin-left: 8px; font-family: var(--font-mono); }
        .quarterly-input input { width: 100%; padding: 10px 14px; border: 1.5px solid var(--border); border-radius: 8px; font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--text); background: var(--card); transition: border-color 0.2s; }
        .quarterly-input input:focus { border-color: var(--primary); }
        .btn-recompute { display: block; width: 100%; padding: 12px; background: var(--accent); color: var(--primary-dark); border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 700; cursor: pointer; margin-top: 12px; transition: background 0.2s; }
        .btn-recompute:hover { background: var(--accent-light); }
        .interest-result { margin-top: 16px; background: linear-gradient(135deg, #FEE2E2 0%, #FECACA 100%); border-radius: var(--radius); padding: 16px 20px; }
        .interest-result.no-interest { background: linear-gradient(135deg, #D1FAE5 0%, #A7F3D0 100%); }
        .ir-head { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: #991B1B; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 10px; }
        .interest-result.no-interest .ir-head { color: #065F46; }
        .ir-row { display: flex; justify-content: space-between; font-size: 13px; padding: 4px 0; }
        .ir-row .lbl { color: #7F1D1D; }
        .ir-row .val { font-family: var(--font-mono); font-weight: 700; color: #7F1D1D; }
        .interest-result.no-interest .ir-row .lbl, .interest-result.no-interest .ir-row .val { color: #065F46; }
        .ir-total { margin-top: 10px; padding-top: 10px; border-top: 1px solid #FCA5A5; font-size: 15px; font-weight: 700; text-align: center; color: #7F1D1D; }
        .interest-result.no-interest .ir-total { border-top-color: #6EE7B7; color: #064E3B; }
        .ir-total .amount { font-family: var(--font-mono); font-size: 18px; }
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
            .schedule-table { font-size: 12px; }
            .schedule-table tbody td, .schedule-table thead th { padding: 8px 10px; }
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
        <a href="#schedule">Schedule</a>
        <a href="#interest">Interest Rules</a>
        <a href="#examples">Examples</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Advance Tax Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Advance Tax Calculator — <span>Quarterly Schedule + 234B/234C</span> FY 2025-26 & 2026-27</h1>
</header>

<div class="brand-cta-bar" role="complementary" aria-label="Quick contact">
    <div class="brand-cta-bar-inner">
        <div class="brand-cta-bar-text">
            Missed an instalment? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.
        </div>
        <div class="brand-cta-bar-actions">
            <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                +91 945 945 6700
            </a>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Advance%20Tax%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="Chat with us on WhatsApp" rel="noopener">
                <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
                WhatsApp
            </a>
            <a href="mailto:sales@patronaccounting.com?subject=Advance%20Tax%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Advance%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20advance%20tax%20planning.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting">
                <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Email
            </a>
        </div>
    </div>
</div>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Pay advance tax in 4 quarterly installments if your tax liability after TDS exceeds <strong>₹10,000</strong>. Schedule under Section 211: <strong>15% by 15 June, 45% by 15 September, 75% by 15 December, 100% by 15 March</strong>. Missing any installment triggers <strong>Section 234C interest</strong> at 1% per month for 3 months (1 month for Q4). If total advance tax paid by 31 March is below 90%, <strong>Section 234B interest</strong> at 1% per month also applies. Resident senior citizens (60+) without business income are exempt. Presumptive taxpayers under 44AD/44ADA pay 100% in one installment by 15 March.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Advance Tax + Section 234B/234C Calculator</h2>
            <p class="calc-intro">Enter your estimated income to compute the quarterly advance tax schedule. To check 234B/234C interest on missed installments, expand the interest wizard after computing.</p>

            <noscript>
                <div class="noscript-box">This calculator requires JavaScript. Please enable JavaScript or use the formulas below.</div>
            </noscript>

            <div class="calc-section-title">Step 1 — Tax Liability Estimation</div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Financial Year</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="2025-26" onclick="setFY(this)">FY 2025-26<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">AY 2026-27 · ITR filing now</small></button>
                        <button type="button" class="toggle-btn" data-value="2026-27" onclick="setFY(this)">FY 2026-27<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">AY 2027-28 · Q1 due 15 Jun 2026</small></button>
                    </div>
                    <span class="helper">Slab rates and 87A rebate are identical in both years (Budget 2026 made no changes). Only dates differ.</span>
                </div>
                <div class="form-group">
                    <!-- Spacer to balance grid; income input will appear below -->
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="totalIncome">Estimated Total Income (₹)</label>
                    <input type="text" id="totalIncome" placeholder="e.g. 1500000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Annual income from all sources (salary, business, rent, capital gains, interest)</span>
                </div>
                <div class="form-group">
                    <label for="salaryIncome">Of which Salary (₹) — optional</label>
                    <input type="text" id="salaryIncome" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Used for standard deduction (₹75K new / ₹50K old) — leave 0 if no salary</span>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label>Tax Regime</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="new" onclick="setRegime(this)">New</button>
                        <button type="button" class="toggle-btn" data-value="old" onclick="setRegime(this)">Old</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Age Group</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="below60" onclick="setAge(this)">&lt;60</button>
                        <button type="button" class="toggle-btn" data-value="senior" onclick="setAge(this)">60-80</button>
                        <button type="button" class="toggle-btn" data-value="supersenior" onclick="setAge(this)">80+</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Taxpayer Type</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="regular" onclick="setTaxpayerType(this)">Regular</button>
                        <button type="button" class="toggle-btn" data-value="senior_no_biz" onclick="setTaxpayerType(this)">Senior&nbsp;(no biz)</button>
                        <button type="button" class="toggle-btn" data-value="presumptive" onclick="setTaxpayerType(this)">Presumptive&nbsp;44AD/ADA</button>
                    </div>
                    <span class="helper">"Senior (no biz)" and "Presumptive" use single-installment rules</span>
                    <span class="helper" style="margin-top: 4px; color: var(--text-muted); font-size: 12px; font-style: italic;">⚠ Presumptive eligibility: Sec 44AD = Individual/HUF/Firm-non-LLP; Sec 44ADA = Individual/Firm-non-LLP only (HUF NOT eligible); Sec 44AE = Individual/HUF/Firm/AOP/BOI. NOT for LLP, AOP/BOI (44AD/ADA), Trust, Co-op Society, Company.</span>
                </div>
            </div>

            <div class="calc-row three-col">
                <div class="form-group">
                    <label for="ded80c">Section 80C (₹)</label>
                    <input type="text" id="ded80c" placeholder="0" value="0" max="150000" autocomplete="off" inputmode="decimal">
                    <span class="helper">Max ₹1.5L (old regime only)</span>
                </div>
                <div class="form-group">
                    <label for="ded80d">Section 80D (₹)</label>
                    <input type="text" id="ded80d" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Old regime only</span>
                </div>
                <div class="form-group">
                    <label for="dedOther">Other 80E/80G/80CCD(1B) (₹)</label>
                    <input type="text" id="dedOther" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Old regime only</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="tdsDeducted">TDS Already Deducted / Expected (₹)</label>
                    <input type="text" id="tdsDeducted" placeholder="0" value="0" autocomplete="off" inputmode="decimal">
                    <span class="helper">Sum of TDS from all sources (employer, bank, freelance clients). Reduces advance tax liability.</span>
                </div>
            </div>

            <button class="btn-calculate" onclick="calculate()">Calculate Advance Tax Schedule</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="info-banner" id="liabilityBanner"></div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Estimated Tax Liability</div>
                        <div class="summary-value" id="resTotalTax">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Less: TDS</div>
                        <div class="summary-value" id="resTDS">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Advance Tax Payable</div>
                        <div class="summary-value" id="resAdvTax">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Mode</div>
                        <div class="summary-value" id="resMode" style="font-size: 14px;">—</div>
                    </div>
                </div>

                <h4 style="font-size:14px;font-weight:700;color:var(--primary-dark);margin:18px 0 10px;text-transform:uppercase;letter-spacing:0.5px;">Quarterly Installment Schedule</h4>
                <div style="overflow-x:auto;">
                    <div class="table-scroll"><table class="schedule-table" id="scheduleTable">
                        <thead>
                            <tr>
                                <th>Installment</th>
                                <th>Due Date</th>
                                <th>Cumulative %</th>
                                <th>Amount Due (Cumulative)</th>
                                <th>This Installment</th>
                            </tr>
                        </thead>
                        <tbody id="scheduleBody"></tbody>
                        <tfoot id="scheduleFoot"></tfoot>
                    </table></div>
                </div>

                <div class="interest-wizard" id="interestWizard">
                    <details class="interest-details">
                        <summary>
                            <span class="iw-icon">⚠</span>
                            <span class="iw-title">Compute Section 234B / 234C Interest (if installments missed)</span>
                            <span class="iw-arrow">▾</span>
                        </summary>
                        <div class="interest-body">
                            <p class="interest-intro">Enter the actual amount of advance tax paid by each due date. Interest is computed at 1% per month on shortfalls. Tolerance bands of 12% (Q1) and 36% (Q2) avoid 234C interest for those quarters per the Income Tax Act provisos.</p>

                            <div class="quarterly-input">
                                <label for="paidQ1">Q1 — Paid by <span id="lblQ1Date">15 June 2025</span> (₹) <span class="due-date-tag">Required: 15%</span></label>
                                <input type="text" id="paidQ1" placeholder="0" value="0" inputmode="decimal" autocomplete="off">
                            </div>
                            <div class="quarterly-input">
                                <label for="paidQ2">Q2 — Paid by <span id="lblQ2Date">15 September 2025</span> (₹, cumulative) <span class="due-date-tag">Required: 45%</span></label>
                                <input type="text" id="paidQ2" placeholder="0" value="0" inputmode="decimal" autocomplete="off">
                            </div>
                            <div class="quarterly-input">
                                <label for="paidQ3">Q3 — Paid by <span id="lblQ3Date">15 December 2025</span> (₹, cumulative) <span class="due-date-tag">Required: 75%</span></label>
                                <input type="text" id="paidQ3" placeholder="0" value="0" inputmode="decimal" autocomplete="off">
                            </div>
                            <div class="quarterly-input">
                                <label for="paidQ4">Q4 — Paid by <span id="lblQ4Date">15 March 2026</span> (₹, cumulative) <span class="due-date-tag">Required: 100%</span></label>
                                <input type="text" id="paidQ4" placeholder="0" value="0" inputmode="decimal" autocomplete="off">
                            </div>
                            <div class="quarterly-input">
                                <label for="finalDate">Final Payment Date (for 234B end period)</label>
                                <input type="date" id="finalDate" value="2026-07-31">
                                <span style="display:block;font-size:11px;color:var(--text-muted);margin-top:4px;" id="lbl234BHint">Default: ITR filing due date 31 July 2026. 234B interest accrues from 1 April 2026 till this date.</span>
                            </div>

                            <button class="btn-recompute" onclick="computeInterest()">Calculate 234B / 234C Interest</button>

                            <div class="interest-result" id="interestResult" style="display:none;">
                                <div class="ir-head" id="irHead"></div>
                                <div id="irRows"></div>
                                <div class="ir-total" id="irTotal"></div>
                            </div>
                        </div>
                    </details>
                </div>

                <button class="btn-reset" onclick="resetCalc()">↺ Reset Calculator</button>
            
                <div class="post-result-cta" id="postResultCTA">
    <div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div>
    <div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Advance Tax Calculator validation, professional documentation, no obligation.</div>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Advance%20Tax%20Calculator.%20Please%20review%20my%20instalment%20plan%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Advance%20Tax%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Advance%20Tax%20Calculator%20and%20would%20like%20a%20Chartered%20Accountant%20to%20review%20my%20output%20before%20I%20act%20on%20it.%0A%0APlease%20advise%20on%20next%20steps%20for%20advance%20tax%20planning.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How Advance Tax Works in India</h2>
            <p>Advance tax is income tax paid in installments during the financial year on a "pay-as-you-earn" basis. Instead of paying the full tax at year-end, the Income Tax Act mandates spreading payments across the year for liabilities exceeding ₹10,000. The framework is governed by Sections 207 to 219 of the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Income Tax Act 1961</a>, administered by the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax Department</a>, and applied per the standards of the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>. The structure was last refined by the <a href="https://www.finmin.nic.in/" target="_blank" rel="noopener">Ministry of Finance</a> through Budget 2016 and has been the subject of multiple <a href="https://www.pib.gov.in/" target="_blank" rel="noopener">PIB notifications</a> on compliance and interest provisions.</p>

            <h3>The Three Components</h3>
            <ol>
                <li><strong>Total tax liability</strong> — your estimated income tax for the financial year, computed under either the old or new regime, including 4% cess and any applicable surcharge.</li>
                <li><strong>Less: TDS already deducted</strong> — tax withheld by your employer (Section 192), bank (Section 194A), or any other deductor counts as advance tax already paid.</li>
                <li><strong>Equals: Advance tax payable</strong> — this is what you must pay in quarterly installments under Section 211.</li>
            </ol>

            <h3>Who Must Pay Advance Tax?</h3>
            <p>Per Section 208, advance tax is required when your total tax liability after TDS exceeds <strong>₹10,000</strong> in a financial year. This threshold applies to all types of taxpayers:</p>
            <ul>
                <li>Salaried individuals with significant income outside salary (rent, capital gains, interest, freelance)</li>
                <li>Self-employed professionals and freelancers</li>
                <li>Business owners and partnership firms</li>
                <li>Companies (corporate advance tax follows the same schedule)</li>
                <li>Hindu Undivided Families (HUFs)</li>
                <li>Capital gains earners (advance tax on capital gains is due in the installment immediately following the sale, per the proviso to Section 234C)</li>
            </ul>
            <p><strong>Exempt:</strong> Resident senior citizens (60+) without business or professional income — they can pay the entire tax in one shot before 31 March.</p>
        </section>

        <section class="content-section" id="schedule">
            <h2>Quarterly Installment Schedule (FY 2025-26)</h2>

            <div class="table-scroll"><table class="rate-table">
                <thead>
                    <tr><th>Installment</th><th>Due Date</th><th>Cumulative %</th><th>This Installment %</th><th>234C Tolerance</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Q1</strong></td><td>15 June 2025</td><td>15%</td><td>15%</td><td>≥12% no interest</td></tr>
                    <tr><td><strong>Q2</strong></td><td>15 September 2025</td><td>45%</td><td>30%</td><td>≥36% no interest</td></tr>
                    <tr><td><strong>Q3</strong></td><td>15 December 2025</td><td>75%</td><td>30%</td><td>Exact 75% required</td></tr>
                    <tr><td><strong>Q4</strong></td><td>15 March 2026</td><td>100%</td><td>25%</td><td>Exact 100% required</td></tr>
                </tbody>
            </table></div>

            <h3>Tolerance Bands for Q1 and Q2</h3>
            <p>The Income Tax Act recognises that estimating annual income early in the year is difficult. Two relaxations apply:</p>
            <ul>
                <li><strong>Q1 (15 June):</strong> Paying at least <strong>12%</strong> avoids Section 234C interest, even though the prescribed amount is 15%.</li>
                <li><strong>Q2 (15 September):</strong> Paying at least <strong>36%</strong> cumulative avoids interest, even though the prescribed amount is 45%.</li>
            </ul>
            <p>For Q3 and Q4, no tolerance applies — the cumulative percentages of 75% and 100% must be paid in full to avoid interest.</p>

            <h3>Special Schedule for Presumptive Taxpayers</h3>
            <p>Per the second proviso to Section 211(1), taxpayers opting for presumptive taxation under <a href="/tools/section-44ada-calculator">Section 44ADA</a> (professionals) or Section 44AD (small businesses) can pay 100% of advance tax in a single installment by 15 March of the financial year. No Section 234C interest applies for the missed first three quarters in this case. This is a significant compliance simplification — particularly valuable for freelancers and consultants whose income is uneven.</p>

            <div class="callout">
                <p><strong>Important:</strong> Any tax paid up to <strong>31 March</strong> of the financial year is still treated as advance tax for that year. Paying after 15 March but before 31 March still counts toward the 100% target — though you may incur Section 234C interest for the Q4 shortfall on 15 March.</p>
            </div>
        </section>

        <section class="content-section" id="interest">
            <h2>Section 234B and 234C Interest</h2>

            <h3>Section 234B — Default in Payment of Advance Tax</h3>
            <p>Section 234B applies if total advance tax paid by 31 March is less than <strong>90% of assessed tax</strong>. Interest is charged at <strong>1% per month</strong> (simple) on the entire shortfall, calculated from 1 April of the assessment year until the date you pay the remaining tax (or until self-assessment is complete).</p>
            <div class="formula-box">
                <span class="label">234B Interest</span> = Shortfall × 1% × Months (from 1 April to payment date)<br>
                where Shortfall = Assessed Tax − Total Advance Tax Paid<br>
                applied only if Total Advance Tax Paid &lt; 90% of Assessed Tax
            </div>
            <p>Per Rule 119A, the shortfall is rounded down to the nearest ₹100, and any part of a month is treated as a full month.</p>

            <h3>Section 234C — Default in Installment</h3>
            <p>Section 234C levies interest for deferment of installments — i.e., when you pay less than the prescribed cumulative percentage by any installment due date. Interest is charged at <strong>1% per month</strong> for:</p>
            <ul>
                <li><strong>3 months</strong> for shortfalls in Q1, Q2, and Q3</li>
                <li><strong>1 month</strong> for shortfall in Q4 (15 March)</li>
            </ul>
            <div class="formula-box">
                <span class="label">234C Interest (per quarter)</span><br>
                Q1: Shortfall × 1% × 3 (only if cumulative paid &lt; 12%)<br>
                Q2: Shortfall × 1% × 3 (only if cumulative paid &lt; 36%)<br>
                Q3: Shortfall × 1% × 3 (only if cumulative paid &lt; 75%)<br>
                Q4: Shortfall × 1% × 1 (only if cumulative paid &lt; 100%)
            </div>

            <h3>Combined 234B + 234C</h3>
            <p>Both sections can apply simultaneously. 234C captures interest for missing individual quarterly deadlines during the year. 234B captures interest for the residual shortfall persisting beyond 31 March. They are not mutually exclusive — a taxpayer who misses every installment AND pays less than 90% by 31 March owes interest under both sections.</p>

            <div class="callout warn">
                <p><strong>Capital gains exception:</strong> If capital gains arise unexpectedly mid-year, Section 234C provides relief — no interest applies if the tax on those gains is paid in the installment immediately following the gain (or by 15 March if gain is in Q4). This protects taxpayers from being penalised for income they could not have foreseen at earlier installment dates.</p>
            </div>
        </section>

        <div class="body-cta">
    <h3>Need Help with Advance Tax Planning?</h3>
    <p>Patron's CAs map your AY 2026-27 income, compute 234B/234C-safe instalments, and file your challans on time. We support Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
    <div class="brand-cta-bar-actions">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Advance%20Tax%20Calculator.%20I%20need%20help%20with%20advance%20tax%20planning.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Advance%20Tax%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Advance%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20advance%20tax%20planning.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <section class="content-section" id="examples">
            <h2>Worked Examples</h2>

            <h3>Example 1 — Freelancer with ₹15L Income (New Regime)</h3>
            <p>A consultant estimates ₹15,00,000 income for FY 2025-26 with ₹50,000 TDS already deducted by clients. Under the new regime, slab tax on ₹15L is ₹1,05,000 (no rebate as income exceeds ₹12L). With 4% cess: ₹1,09,200. Advance tax payable = ₹1,09,200 − ₹50,000 = <strong>₹59,200</strong>.</p>
            <div class="table-scroll"><table class="rate-table">
                <thead><tr><th>Quarter</th><th>Due Date</th><th>Cumulative</th><th>Amount (Cumulative)</th></tr></thead>
                <tbody>
                    <tr><td>Q1</td><td>15 Jun 2025</td><td>15%</td><td>₹8,880</td></tr>
                    <tr><td>Q2</td><td>15 Sep 2025</td><td>45%</td><td>₹26,640 (incremental ₹17,760)</td></tr>
                    <tr><td>Q3</td><td>15 Dec 2025</td><td>75%</td><td>₹44,400 (incremental ₹17,760)</td></tr>
                    <tr><td>Q4</td><td>15 Mar 2026</td><td>100%</td><td>₹59,200 (incremental ₹14,800)</td></tr>
                </tbody>
            </table></div>

            <h3>Example 2 — Salaried with Side Capital Gains (Old Regime)</h3>
            <p>Salary income ₹12,00,000 with TDS ₹85,000 fully covering salary tax. Capital gain of ₹3,00,000 from equity sale on 10 December 2025. Additional tax @ 12.5% on ₹1,75,000 (after ₹1.25L exemption) = ₹21,875 + cess ₹875 = ₹22,750.</p>
            <p>Per the Section 234C capital gains proviso, this ₹22,750 must be paid in the installment immediately following the gain — i.e., by 15 March 2026 — to avoid Section 234C interest. Paying it by 31 March would still incur 234C interest for the Q4 missed installment.</p>

            <h3>Example 3 — Section 234C Interest on Missed Q1</h3>
            <p>Tax liability ₹1,00,000 for FY 2025-26. Required Q1 (15 June) cumulative payment: ₹15,000 (or ₹12,000 with tolerance). Actual paid: ₹5,000 — below the 12% tolerance, so 234C applies. Per the Income Tax Act, when tolerance is breached, interest is computed on the shortfall vs the <em>prescribed</em> amount (15%), not vs the tolerance threshold (12%).</p>
            <ul>
                <li>Shortfall: ₹15,000 − ₹5,000 = ₹10,000 (rounded to ₹10,000 per Rule 119A)</li>
                <li>Interest: ₹10,000 × 1% × 3 months = <strong>₹300</strong></li>
            </ul>

            <h3>Example 4 — Section 234B on Total Shortfall</h3>
            <p>Assessed tax ₹2,00,000. Total advance tax paid by 31 March 2026: ₹1,50,000 (75% of assessed tax — below 90% safe harbour). Tax remaining: ₹50,000, paid on 31 July 2026 along with ITR filing.</p>
            <ul>
                <li>Shortfall: ₹50,000 (rounded to ₹50,000)</li>
                <li>Period: 1 April 2026 to 31 July 2026 = 4 months (any part of month counts as full)</li>
                <li>234B Interest: ₹50,000 × 1% × 4 = <strong>₹2,000</strong></li>
            </ul>

            <div class="callout">
                <p><strong>CA Tip:</strong> If you anticipate variable income (consulting, investments, capital gains), pay slightly more than required at each installment. Excess advance tax becomes a refund with interest under Section 244A — better than under-paying and incurring 1% per month penalty interest. Patron's <a href="/income-tax-return">Income Tax Return Filing service</a> includes quarterly advance tax estimation for clients.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is advance tax and who needs to pay it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Advance tax is income tax paid in installments during the financial year on a pay-as-you-earn basis, instead of a single lump-sum at year-end. Under Section 208 of the Income Tax Act, you must pay advance tax if your total tax liability after TDS exceeds ₹10,000 in a financial year. This applies to individuals, HUFs, partnership firms, companies, and professionals. Salaried persons usually have advance tax covered by employer TDS unless they have additional income from rent, capital gains, freelancing, or interest.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the advance tax due dates for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For FY 2025-26 (AY 2026-27), advance tax is paid in four installments under Section 211: 15th June 2025 (15% of total tax), 15th September 2025 (45% cumulative), 15th December 2025 (75% cumulative), and 15th March 2026 (100% of total tax). Any tax paid up to 31 March 2026 is still treated as advance tax for that year. Missing any deadline triggers interest under Section 234C.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is Section 234B interest calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 234B applies if your total advance tax paid by 31 March is less than 90% of assessed tax. Interest is charged at 1% per month (simple interest) on the entire shortfall amount, calculated from 1 April of the assessment year until the date you pay the remaining tax or until self-assessment. Any part of a month counts as a full month under Rule 119A. The tax shortfall is rounded down to the nearest ₹100 before applying the rate.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is Section 234C interest calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Section 234C levies interest for deferment of installments. For each of the first three installments (15 June, 15 September, 15 December), interest at 1% per month is charged for 3 months on the shortfall below the prescribed cumulative percentage. For the fourth installment (15 March), interest is charged for 1 month only. Tolerance bands apply: 12% paid by 15 June (instead of 15%) and 36% by 15 September (instead of 45%) avoid Section 234C interest for those quarters.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are senior citizens exempt from advance tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, under Section 207(2), resident senior citizens aged 60 years or above with no income from business or profession are exempt from paying advance tax in installments. They can pay the entire tax in one shot before 31 March of the financial year. However, if a senior citizen has any business or professional income, advance tax rules apply normally with quarterly installments. Non-resident senior citizens do not qualify for this exemption.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does advance tax work for presumptive taxpayers under Section 44AD or 44ADA?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Taxpayers opting for presumptive taxation under Section 44AD (small businesses) or Section 44ADA (specified professionals) enjoy a simplified single-installment rule. Under Section 211(1)(b), the entire advance tax can be paid in one installment by 15 March of the financial year. No interest under Section 234C is charged for the first three quarters. However, Section 234B interest still applies if total advance tax paid is less than 90% of assessed tax by 31 March.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is TDS counted toward advance tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. TDS deducted by your employer (Section 192), bank (Section 194A), or any other deductor is counted as tax already paid. Advance tax liability is computed on the net amount: total tax minus TDS. If TDS already covers your full liability, no advance tax is required. This is why most salaried taxpayers without additional income do not need to pay advance tax — their TDS is enough.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I pay advance tax in a single installment instead of four quarterly installments?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes, you can pay the entire estimated tax in one shot before 15 March (or even earlier). However, this only avoids Section 234B interest. You will still incur Section 234C interest for the missed first three quarters because installments were deferred. The most economical approach is to follow the quarterly schedule. Exception: presumptive taxpayers under 44AD/44ADA and senior citizens without business income can pay in one installment without 234C interest.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is Rule 119A and how does it affect interest calculation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Rule 119A of the Income Tax Rules prescribes the standardised method for computing interest. Two key rules apply: (1) the tax amount is rounded down to the nearest multiple of ₹100, ignoring fractions below ₹100; and (2) any part of a month is treated as a full month. So if interest is due for 2 months and 5 days, you pay for 3 full months. These rules apply uniformly to Sections 234A, 234B, and 234C.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How do I pay advance tax online?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Advance tax is paid through the Income Tax e-filing portal (incometax.gov.in) using Challan No. 280. Steps: (1) Log in or visit the e-Pay Tax page; (2) Select Challan 280; (3) Choose 'Advance Tax (100)' as the payment type; (4) Enter PAN, assessment year, and amount; (5) Pay via net banking, debit card, UPI, or NEFT/RTGS. Save the challan receipt — it is required when filing your ITR. The tax department updates Form 26AS within a few days of payment.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens if I overpay advance tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Overpaid advance tax becomes a refund when you file your ITR. The Income Tax Department processes refunds along with interest under Section 244A at 0.5% per month from 1 April of the assessment year until refund is issued. Refunds are credited to the bank account pre-validated on the e-filing portal. There is no penalty for overpayment, and revising downward in subsequent installments is allowed if your income estimate reduces during the year.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How will advance tax change under the Income Tax Act 2025?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The Income Tax Act 2025, effective 1 April 2026, retains the substance of Sections 208 (advance tax liability), 211 (installment schedule), 234B and 234C (interest provisions) with renumbered references. The 15-15-30-30-25 quarterly percentages, ₹10,000 threshold, 1% monthly interest rate, 90% safe harbour, and senior citizen exemption all continue. For FY 2025-26 returns filed in 2026, the existing provisions apply. Tax Year 2026-27 onwards uses the corresponding sections under the 2025 Act.</div></div></div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
    <h3>CA-Filed Advance Tax</h3>
    <p>Avoid 234B/234C interest. We compute, schedule and file your instalments — fixed-fee.</p>
    <div class="brand-cta-stack">
        <a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call us at +91 945 945 6700">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            +91 945 945 6700
        </a>
        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Advance%20Tax%20Calculator.%20I%20need%20help%20with%20advance%20tax%20planning.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" target="_blank" aria-label="WhatsApp us" rel="noopener">
            <svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>
            WhatsApp
        </a>
        <a href="mailto:sales@patronaccounting.com?subject=Advance%20Tax%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Advance%20Tax%20Calculator.%0A%0APlease%20connect%20me%20with%20a%20Chartered%20Accountant%20who%20can%20advise%20on%20advance%20tax%20planning.%0A%0AThank%20you." class="brand-cta-btn brand-cta-btn-email" aria-label="Email us">
            <svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email
        </a>
    </div>
</div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/income-tax-return" class="sidebar-link">Income Tax Return Filing <span class="arrow">→</span></a>
            <a href="/itr-filing-for-freelancers-professionals" class="sidebar-link">ITR for Freelancers & Professionals <span class="arrow">→</span></a>
            <a href="/itr-for-capital-gains" class="sidebar-link">ITR for Capital Gains <span class="arrow">→</span></a>
            <a href="/income-tax-notice" class="sidebar-link">Income Tax Notice Help <span class="arrow">→</span></a>
            <a href="/zoho-books-accounting" class="sidebar-link">Zoho Books Accounting <span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Tax Audit Services <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-87a-rebate-calculator" class="sidebar-link">Section 87A Rebate Calculator <span class="arrow">→</span></a>
            <a href="/tools/section-44ada-calculator" class="sidebar-link">Section 44ADA Calculator <span class="arrow">→</span></a>
            <a href="/tools/capital-gains-calculator" class="sidebar-link">Capital Gains Calculator <span class="arrow">→</span></a>
            <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/itr-3-filing-complete-guide-for-business-and-professional-income" class="sidebar-link">ITR-3 Filing — Business & Professional <span class="arrow">→</span></a>
            <a href="/blog/itr-freelancers-professionals-complex-scenarios-edge-cases" class="sidebar-link">ITR for Freelancers — Edge Cases <span class="arrow">→</span></a>
            <a href="/blog/do-i-need-to-file-itr-if-tds-is-already-deducted" class="sidebar-link">Do I Need to File ITR if TDS Deducted? <span class="arrow">→</span></a>
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
    let ageGroup = 'below60';
    let taxpayerType = 'regular';
    let fy = '2025-26';
    let lastResult = null;

    // FY-specific dates and config — slabs are identical across years (Budget 2026 = no change)
    const FY_CONFIG = {
        '2025-26': {
            ay: 'AY 2026-27',
            q1Date: '15 Jun 2025', q1DateLong: '15 June 2025',
            q2Date: '15 Sep 2025', q2DateLong: '15 September 2025',
            q3Date: '15 Dec 2025', q3DateLong: '15 December 2025',
            q4Date: '15 Mar 2026', q4DateLong: '15 March 2026',
            yearEnd: '31 March 2026',
            apr1NextYear: '2026-04-01',
            defaultFinalDate: '2026-07-31',
            apr1Long: '1 April 2026',
            jul31Long: '31 July 2026'
        },
        '2026-27': {
            ay: 'AY 2027-28',
            q1Date: '15 Jun 2026', q1DateLong: '15 June 2026',
            q2Date: '15 Sep 2026', q2DateLong: '15 September 2026',
            q3Date: '15 Dec 2026', q3DateLong: '15 December 2026',
            q4Date: '15 Mar 2027', q4DateLong: '15 March 2027',
            yearEnd: '31 March 2027',
            apr1NextYear: '2027-04-01',
            defaultFinalDate: '2027-07-31',
            apr1Long: '1 April 2027',
            jul31Long: '31 July 2027'
        }
    };

    function setFY(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        fy = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
        // Update wizard labels and default final date
        const cfg = FY_CONFIG[fy];
        const q1 = document.getElementById('lblQ1Date');
        const q2 = document.getElementById('lblQ2Date');
        const q3 = document.getElementById('lblQ3Date');
        const q4 = document.getElementById('lblQ4Date');
        if (q1) q1.textContent = cfg.q1DateLong;
        if (q2) q2.textContent = cfg.q2DateLong;
        if (q3) q3.textContent = cfg.q3DateLong;
        if (q4) q4.textContent = cfg.q4DateLong;
        const finalDate = document.getElementById('finalDate');
        if (finalDate) finalDate.value = cfg.defaultFinalDate;
        const hint = document.getElementById('lbl234BHint');
        if (hint) hint.textContent = 'Default: ITR filing due date ' + cfg.jul31Long + '. 234B interest accrues from ' + cfg.apr1Long + ' till this date.';
    }

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

    function setAge(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        ageGroup = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setTaxpayerType(btn) {
        const el = btn.closest('.toggle-btn') || btn;
        taxpayerType = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function computeSlabTax(income, regimeIn, ageIn) {
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
            let exempt;
            if (ageIn === 'supersenior') exempt = 500000;
            else if (ageIn === 'senior') exempt = 300000;
            else exempt = 250000;
            const slabs = [[exempt, 0], [500000, 0.05], [1000000, 0.20], [Infinity, 0.30]];
            let prev = 0;
            for (const [limit, rate] of slabs) {
                if (limit < prev) continue;
                if (income <= limit) {
                    tax += Math.max(0, income - Math.max(prev, 0)) * rate;
                    break;
                }
                tax += Math.max(0, limit - Math.max(prev, 0)) * rate;
                prev = limit;
            }
        }
        return tax;
    }

    function applyRebate87A(income, taxBeforeRebate, regimeIn) {
        if (regimeIn === 'new' && income <= 1200000) {
            const rebate = Math.min(60000, taxBeforeRebate);
            return Math.max(0, taxBeforeRebate - rebate);
        } else if (regimeIn === 'old' && income <= 500000) {
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

    function calculate() {
        const totalIncome = parseINR(document.getElementById('totalIncome').value);
        const salaryIncome = parseINR(document.getElementById('salaryIncome').value) || 0;
        const ded80c = parseINR(document.getElementById('ded80c').value) || 0;
        const ded80d = parseINR(document.getElementById('ded80d').value) || 0;
        const dedOther = parseINR(document.getElementById('dedOther').value) || 0;
        const tdsDeducted = parseINR(document.getElementById('tdsDeducted').value) || 0;

        if (!isFinite(totalIncome) || totalIncome < 0) {
            alert('Please enter a valid total income.');
            return;
        }

        // Standard deduction (only if salary income > 0)
        let stdDeduction = 0;
        if (salaryIncome > 0) {
            stdDeduction = (regime === 'new') ? 75000 : 50000;
        }

        // Compute taxable income
        let taxableIncome = totalIncome - stdDeduction;
        if (regime === 'old') {
            taxableIncome -= Math.min(150000, ded80c) + ded80d + dedOther;
        }
        taxableIncome = Math.max(0, taxableIncome);

        // Compute tax
        const baseTax = computeSlabTax(taxableIncome, regime, ageGroup);
        const afterRebate = applyRebate87A(taxableIncome, baseTax, regime);
        const cess = afterRebate * 0.04;
        const totalTax = Math.round(afterRebate + cess);

        // Advance tax payable
        const advanceTaxPayable = Math.max(0, totalTax - tdsDeducted);

        lastResult = { totalTax, tdsDeducted, advanceTaxPayable, taxableIncome };

        // Display summary
        document.getElementById('resTotalTax').textContent = fmtINR(totalTax);
        document.getElementById('resTDS').textContent = fmtINR(tdsDeducted);
        document.getElementById('resAdvTax').textContent = fmtINR(advanceTaxPayable);

        const banner = document.getElementById('liabilityBanner');
        const wizard = document.getElementById('interestWizard');
        const modeEl = document.getElementById('resMode');

        // Liability check + mode
        if (advanceTaxPayable < 10000) {
            banner.className = 'info-banner success';
            banner.innerHTML = '<strong>✓ No Advance Tax Required.</strong> Your tax liability after TDS is ' + fmtINR(advanceTaxPayable) + ' — below the ₹10,000 threshold under Section 208. No quarterly installments needed.';
            modeEl.textContent = 'Not applicable';
            wizard.style.display = 'none';
            document.getElementById('scheduleBody').innerHTML = '<tr><td colspan="5" style="text-align:center;color:var(--text-muted);font-style:italic;padding:24px;">Advance tax not applicable</td></tr>';
            document.getElementById('scheduleFoot').innerHTML = '';
        } else {
            wizard.style.display = 'block';
            renderSchedule(advanceTaxPayable);
        }

        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    function renderSchedule(advanceTax) {
        const body = document.getElementById('scheduleBody');
        const foot = document.getElementById('scheduleFoot');
        const banner = document.getElementById('liabilityBanner');
        const modeEl = document.getElementById('resMode');
        const cfg = FY_CONFIG[fy];

        if (taxpayerType === 'senior_no_biz') {
            modeEl.textContent = 'Senior — single payment';
            banner.className = 'info-banner info';
            banner.innerHTML = '<strong>Senior Citizen Mode (Section 207(2)).</strong> Resident senior citizens (60+) without business or professional income are exempt from quarterly installments. You can pay the entire ' + fmtINR(advanceTax) + ' in one shot before ' + cfg.yearEnd + '.';
            body.innerHTML = '<tr><td colspan="5" style="text-align:center;color:var(--primary-dark);font-weight:600;padding:24px;">Single payment of ' + fmtINR(advanceTax) + ' before <strong>' + cfg.yearEnd + '</strong></td></tr>';
            foot.innerHTML = '';
            return;
        }

        if (taxpayerType === 'presumptive') {
            modeEl.textContent = 'Presumptive — single installment';
            banner.className = 'info-banner info';
            banner.innerHTML = '<strong>Presumptive Mode (Section 211(1)(b)).</strong> Taxpayers under Sections 44AD/44ADA pay 100% of advance tax in one installment by ' + cfg.q4Date + '. No Section 234C interest applies for the first three quarters.';
            body.innerHTML = '<tr><td><strong>Single Installment</strong></td><td class="due-date">' + cfg.q4Date + '</td><td class="pct">100%</td><td class="amount">' + fmtINR(advanceTax) + '</td><td class="amount">' + fmtINR(advanceTax) + '</td></tr>';
            foot.innerHTML = '<tr><td colspan="4">Total Advance Tax</td><td>' + fmtINR(advanceTax) + '</td></tr>';
            return;
        }

        // Regular mode — 4 quarterly installments
        modeEl.textContent = 'Regular — 4 quarterly';
        banner.className = 'info-banner success';
        banner.innerHTML = '<strong>✓ Advance Tax Applicable (FY ' + fy + ').</strong> Pay ' + fmtINR(advanceTax) + ' in four quarterly installments per Section 211. Missing any deadline triggers Section 234C interest at 1% per month.';

        const quarters = [
            ['Q1', cfg.q1Date, 0.15],
            ['Q2', cfg.q2Date, 0.45],
            ['Q3', cfg.q3Date, 0.75],
            ['Q4', cfg.q4Date, 1.00]
        ];

        let html = '';
        let prevAmt = 0;
        for (const [q, date, pct] of quarters) {
            const cumulative = Math.round(advanceTax * pct);
            const installment = cumulative - prevAmt;
            html += '<tr>';
            html += '<td><strong>' + q + '</strong></td>';
            html += '<td class="due-date">' + date + '</td>';
            html += '<td class="pct">' + (pct * 100) + '%</td>';
            html += '<td class="amount">' + fmtINR(cumulative) + '</td>';
            html += '<td class="amount">' + fmtINR(installment) + '</td>';
            html += '</tr>';
            prevAmt = cumulative;
        }
        body.innerHTML = html;
        foot.innerHTML = '<tr><td colspan="4">Total Advance Tax</td><td>' + fmtINR(advanceTax) + '</td></tr>';
    }

    function computeInterest() {
        if (!lastResult || lastResult.advanceTaxPayable < 10000) {
            alert('Please calculate the schedule first.');
            return;
        }
        const advanceTax = lastResult.advanceTaxPayable;
        const totalTax = lastResult.totalTax;
        const cfg = FY_CONFIG[fy];

        const paidQ1 = parseINR(document.getElementById('paidQ1').value) || 0;
        const paidQ2 = parseINR(document.getElementById('paidQ2').value) || 0;
        const paidQ3 = parseINR(document.getElementById('paidQ3').value) || 0;
        const paidQ4 = parseINR(document.getElementById('paidQ4').value) || 0;
        const finalDateStr = document.getElementById('finalDate').value;

        // Helper: round down to nearest 100
        const roundDown100 = (n) => Math.floor(Math.max(0, n) / 100) * 100;

        // Section 234C — installment shortfall interest
        let interest234C = 0;
        const breakdown234C = [];

        if (taxpayerType === 'regular') {
            // Q1: tolerance 12% (instead of 15%)
            const q1Required = advanceTax * 0.12;
            if (paidQ1 < q1Required) {
                const shortfall = roundDown100(advanceTax * 0.15 - paidQ1);
                const intr = shortfall * 0.01 * 3;
                interest234C += intr;
                breakdown234C.push({ q: 'Q1 (' + cfg.q1Date + ')', shortfall, months: 3, intr });
            }
            // Q2: tolerance 36% (instead of 45%)
            const q2Required = advanceTax * 0.36;
            if (paidQ2 < q2Required) {
                const shortfall = roundDown100(advanceTax * 0.45 - paidQ2);
                const intr = shortfall * 0.01 * 3;
                interest234C += intr;
                breakdown234C.push({ q: 'Q2 (' + cfg.q2Date + ')', shortfall, months: 3, intr });
            }
            // Q3: exact 75%
            const q3Required = advanceTax * 0.75;
            if (paidQ3 < q3Required) {
                const shortfall = roundDown100(advanceTax * 0.75 - paidQ3);
                const intr = shortfall * 0.01 * 3;
                interest234C += intr;
                breakdown234C.push({ q: 'Q3 (' + cfg.q3Date + ')', shortfall, months: 3, intr });
            }
            // Q4: exact 100%
            if (paidQ4 < advanceTax) {
                const shortfall = roundDown100(advanceTax - paidQ4);
                const intr = shortfall * 0.01 * 1;
                interest234C += intr;
                breakdown234C.push({ q: 'Q4 (' + cfg.q4Date + ')', shortfall, months: 1, intr });
            }
        }
        // Presumptive and senior_no_biz: only Q4 matters
        else {
            if (paidQ4 < advanceTax) {
                const shortfall = roundDown100(advanceTax - paidQ4);
                const intr = shortfall * 0.01 * 1;
                interest234C += intr;
                breakdown234C.push({ q: 'Single Installment (' + cfg.q4Date + ')', shortfall, months: 1, intr });
            }
        }

        // Section 234B — 90% safe harbour
        let interest234B = 0;
        let safeHarbour = totalTax * 0.90;
        // Total advance tax paid by year-end = max of paid amounts (paidQ4 should be cumulative)
        const totalAdvancePaid = Math.max(paidQ4, paidQ3, paidQ2, paidQ1, 0);
        if (totalAdvancePaid < safeHarbour) {
            const shortfall = roundDown100(totalTax - totalAdvancePaid - lastResult.tdsDeducted);
            // Compute months from 1 April of AY to final date
            let months = 1;
            if (finalDateStr) {
                try {
                    const finalDate = new Date(finalDateStr);
                    const startDate = new Date(cfg.apr1NextYear);
                    if (finalDate >= startDate) {
                        const yearDiff = finalDate.getFullYear() - startDate.getFullYear();
                        const monthDiff = finalDate.getMonth() - startDate.getMonth();
                        const dayPart = finalDate.getDate() > startDate.getDate() ? 1 : 0;
                        months = Math.max(1, yearDiff * 12 + monthDiff + dayPart);
                    }
                } catch (e) { months = 1; }
            }
            interest234B = shortfall > 0 ? shortfall * 0.01 * months : 0;
            breakdown234C._234B = { shortfall, months, intr: interest234B, startDate: cfg.apr1Long };
        }

        renderInterestResult(interest234C, interest234B, breakdown234C);
    }

    function renderInterestResult(intC, intB, breakdown) {
        const result = document.getElementById('interestResult');
        const head = document.getElementById('irHead');
        const rows = document.getElementById('irRows');
        const total = document.getElementById('irTotal');

        const totalInt = intC + intB;
        result.style.display = 'block';

        if (totalInt === 0) {
            result.className = 'interest-result no-interest';
            head.textContent = '✓ No Interest Payable';
            rows.innerHTML = '<div class="ir-row"><span class="lbl">All installments meet the prescribed thresholds.</span></div>';
            total.innerHTML = 'No 234B / 234C interest applies.';
            return;
        }

        result.className = 'interest-result';
        head.textContent = 'Interest Payable — Section 234B + 234C';

        let html = '';
        const breakdownArr = breakdown.filter(b => typeof b === 'object' && b.q);
        if (breakdownArr.length > 0) {
            html += '<div class="ir-row"><span class="lbl"><strong>Section 234C</strong></span><span class="val"></span></div>';
            for (const b of breakdownArr) {
                html += '<div class="ir-row"><span class="lbl">' + b.q + ' shortfall ' + fmtINR(b.shortfall) + ' × 1% × ' + b.months + 'mo</span><span class="val">' + fmtINR(b.intr) + '</span></div>';
            }
            html += '<div class="ir-row" style="margin-top:6px; padding:8px 10px; background:#FEF3C7; border-left:3px solid #D97706; border-radius:4px;"><span class="lbl" style="font-size:12px; color:#78350F; line-height:1.5;"><strong>How shortfall is computed (per IT Act 234C):</strong> The 12% (Q1) and 36% (Q2) tolerance bands are <em>trigger thresholds</em> — they decide IF interest applies, not the shortfall basis. When triggered, shortfall is computed against the FULL prescribed installment (15% Q1, 45% Q2, 75% Q3, 100% Q4). Shortfall is rounded down to nearest ₹100 per Rule 119A.</span></div>';
        }
        if (breakdown._234B && breakdown._234B.intr > 0) {
            html += '<div class="ir-row" style="margin-top:8px;"><span class="lbl"><strong>Section 234B</strong></span><span class="val"></span></div>';
            html += '<div class="ir-row"><span class="lbl">Shortfall ' + fmtINR(breakdown._234B.shortfall) + ' × 1% × ' + breakdown._234B.months + 'mo (from ' + (breakdown._234B.startDate || '1 Apr') + ')</span><span class="val">' + fmtINR(breakdown._234B.intr) + '</span></div>';
        }
        rows.innerHTML = html;

        total.innerHTML = 'Total Interest Payable: <span class="amount">' + fmtINR(totalInt) + '</span>';
    }

    function resetCalc() {
        ['totalIncome', 'salaryIncome', 'ded80c', 'ded80d', 'dedOther', 'tdsDeducted', 'paidQ1', 'paidQ2', 'paidQ3', 'paidQ4'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = (id === 'totalIncome' || id === 'salaryIncome') ? '' : '0';
        });
        document.getElementById('finalDate').value = FY_CONFIG['2025-26'].defaultFinalDate;
        document.getElementById('resultSection').classList.remove('visible');
        document.getElementById('interestResult').style.display = 'none';
        regime = 'new'; ageGroup = 'below60'; taxpayerType = 'regular'; fy = '2025-26';
        document.querySelectorAll('.toggle-group').forEach(g => {
            const btns = g.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            btns[0].classList.add('active');
        });
        // Reset wizard labels to FY 2025-26 defaults
        const cfg = FY_CONFIG['2025-26'];
        const q1 = document.getElementById('lblQ1Date');
        const q2 = document.getElementById('lblQ2Date');
        const q3 = document.getElementById('lblQ3Date');
        const q4 = document.getElementById('lblQ4Date');
        if (q1) q1.textContent = cfg.q1DateLong;
        if (q2) q2.textContent = cfg.q2DateLong;
        if (q3) q3.textContent = cfg.q3DateLong;
        if (q4) q4.textContent = cfg.q4DateLong;
        const hint = document.getElementById('lbl234BHint');
        if (hint) hint.textContent = 'Default: ITR filing due date ' + cfg.jul31Long + '. 234B interest accrues from ' + cfg.apr1Long + ' till this date.';
        lastResult = null;
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

    ['totalIncome', 'salaryIncome', 'ded80c', 'ded80d', 'dedOther', 'tdsDeducted'].forEach(id => {
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