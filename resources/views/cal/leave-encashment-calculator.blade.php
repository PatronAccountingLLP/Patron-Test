@extends('layouts.app')
@section('meta')
    <title>Leave Encashment Calculator | Exemption u/s 10(10AA)</title>
    <meta name="description" content="Leave encashment calculator: compute the encashment amount and tax exemption under Section 10(10AA) for government and private employees. Free, instant!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/leave-encashment-calculator">
    <meta property="og:title" content="Leave Encashment Calculator &mdash; Tax Exemption u/s 10(10AA)">
    <meta property="og:description" content="Calculate leave encashment and tax exemption under Section 10(10AA) for retirement.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/leave-encashment-calculator">
    <meta property="og:image" content="/tools/leave-encashment-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Leave Encashment Calculator &mdash; Tax Exemption u/s 10(10AA)">
    <meta name="twitter:description" content="Leave encashment + tax exemption under Section 10(10AA). Govt & private. Calculate!">
    <meta name="twitter:image" content="/tools/leave-encashment-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "Leave Encashment Calculator",
      "description": "Leave Encashment Calculator computes the monetary value of unused earned leave and calculates tax exemption under Section 10(10AA) of the Income Tax Act. Supports government employees with full exemption and private sector employees with the 4-factor exemption computation including the Rs 25 lakh limit. Handles both retirement encashment and during-service encashment with correct tax treatment.",
      "url": "/tools/leave-encashment-calculator",
      "applicationCategory": "UtilityApplication", "operatingSystem": "Any",
      "datePublished": "2026-03-05", "dateModified": "2026-03-05",
      "offers": { "@type": "Offer", "price": "0", "priceCurrency": "INR" },
      "author": { "@type": "Person", "@id": "/#team", "name": "CA & CS Patron Accounting Team", "jobTitle": "Chartered Accountants & Company Secretaries", "url": "/contact-page", "sameAs": ["https://www.linkedin.com/company/patron-accounting"], "hasCredential": [{ "@type": "EducationalOccupationalCredential", "credentialCategory": "Professional Certification", "name": "Chartered Accountant (CA)", "recognizedBy": { "@type": "Organization", "name": "Institute of Chartered Accountants of India", "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India" } }] },
      "publisher": { "@type": "Organization", "name": "Patron Accounting LLP", "url": "/", "logo": { "@type": "ImageObject", "url": "/logo.png" } },
      "provider": { "@id": "/#organization" }
    }
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [
      {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
      {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
      {"@type": "ListItem", "position": 3, "name": "Leave Encashment Calculator", "item": "/tools/leave-encashment-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "How is leave encashment calculated?", "acceptedAnswer": { "@type": "Answer", "text": "Leave encashment is calculated using the formula: (Basic Salary plus DA) divided by 30 multiplied by the number of unused earned leave days. For example, if Basic plus DA is Rs 40,000 per month and you have 120 unused leave days, the encashment is Rs 40,000 divided by 30 times 120 equals Rs 1,60,000. Only earned leave or privilege leave is encashable \u2014 casual leave and sick leave are generally not." } },
      { "@type": "Question", "name": "Is leave encashment taxable in India?", "acceptedAnswer": { "@type": "Answer", "text": "It depends on when you receive it. Leave encashment received during employment is fully taxable as salary income with no exemption. Leave encashment received on retirement or resignation is partially exempt under Section 10(10AA). Government employees get 100 percent exemption. Private employees get exemption up to the least of 4 computed amounts with a maximum limit of Rs 25 lakhs lifetime." } },
      { "@type": "Question", "name": "What is Section 10(10AA) exemption for leave encashment?", "acceptedAnswer": { "@type": "Answer", "text": "Section 10(10AA) provides tax exemption on leave encashment received at retirement. For government employees, the entire amount is exempt. For private employees, the exempt amount is the least of: actual amount received, Rs 25 lakhs, 10 months average salary of last 10 months before retirement, and cash equivalent of unused leave at 30 days per completed year of service. This is a lifetime limit across all employers." } },
      { "@type": "Question", "name": "What is the maximum leave encashment exemption limit?", "acceptedAnswer": { "@type": "Answer", "text": "The maximum exemption limit was increased from Rs 3 lakhs to Rs 25 lakhs by the Finance Budget 2023-24 effective from 1st April 2023. This Rs 25 lakh limit is a lifetime aggregate across all employers. If you received Rs 10 lakhs exemption from your previous employer, you can claim only Rs 15 lakhs from subsequent employers combined. Government employees have no monetary ceiling on exemption." } },
      { "@type": "Question", "name": "How many leave days can be encashed?", "acceptedAnswer": { "@type": "Answer", "text": "Government employees can encash a maximum of 300 days (10 months) of earned leave at retirement. For private sector employees, the number depends on the employer leave policy. However, for tax exemption computation under Section 10(10AA), the maximum considered is 30 days per completed year of service. If you served 20 years, the maximum considered is 600 days even if your balance is higher." } },
      { "@type": "Question", "name": "What salary is used for leave encashment calculation?", "acceptedAnswer": { "@type": "Answer", "text": "Leave encashment is calculated on Basic Salary plus Dearness Allowance (DA that forms part of retirement benefits) plus Commission if received as a fixed percentage of turnover. HRA, special allowances, and other components are not included. For the Section 10(10AA) exemption computation, the average salary of the last 10 months immediately preceding retirement is used." } },
      { "@type": "Question", "name": "Is leave encashment on resignation exempt from tax?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, leave encashment received on resignation is eligible for exemption under Section 10(10AA), same as retirement. The exemption is calculated using the same 4-factor method with Rs 25 lakh lifetime limit. However, leave encashment received on termination due to misconduct may not qualify. The key distinction is between encashment during ongoing employment (fully taxable) versus at separation (partially exempt)." } },
      { "@type": "Question", "name": "Can I claim leave encashment exemption under the new tax regime?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, the exemption under Section 10(10AA) for leave encashment on retirement or resignation is available under both old and new tax regimes. This is because Section 10 exemptions are not regime-specific deductions \u2014 they apply before computing taxable income. So even if you have opted for the new tax regime, your leave encashment on retirement qualifies for the same exemption computation." } },
      { "@type": "Question", "name": "What happens to leave encashment if an employee dies?", "acceptedAnswer": { "@type": "Answer", "text": "Leave encashment received by the legal heirs or nominee of a deceased employee is completely tax-free. There is no monetary limit or exemption computation required. The full amount is exempt in the hands of the legal heir regardless of whether the employee was in government or private sector service. The nominee should be updated in the employment records to avoid settlement delays." } },
      { "@type": "Question", "name": "How is leave encashment shown in Form 16?", "acceptedAnswer": { "@type": "Answer", "text": "Leave encashment is shown in Part B of Form 16 under the salary details. The total leave encashment amount appears under gross salary, and the exempt portion under Section 10(10AA) is shown separately in the exemption section. The difference (taxable portion) is included in the taxable salary. If your employer did not apply the exemption, you can claim it while filing your ITR and get the excess TDS refunded." } },
      { "@type": "Question", "name": "Can I claim Section 89 relief on leave encashment?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, if leave encashment is received during employment and is fully taxable, you can claim relief under Section 89 read with Rule 21A to reduce the tax burden. You must complete at least 5 years of continuous service. File Form 10E online on the income tax portal before filing your ITR. Section 89 relief ensures you are not pushed into a higher tax bracket due to the lump sum receipt." } },
      { "@type": "Question", "name": "What is the difference between earned leave and privilege leave encashment?", "acceptedAnswer": { "@type": "Answer", "text": "Earned Leave (EL) and Privilege Leave (PL) are essentially the same \u2014 different names used by different organisations and states. Both refer to paid leave earned through service that can be accumulated and encashed. Under the Factories Act, workers earn 1 day of leave for every 20 days worked. The nomenclature varies but the encashment calculation and tax treatment are identical for both." } },
      { "@type": "Question", "name": "Can a CA help with leave encashment tax planning?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a CA can compute the exact exemption under Section 10(10AA), advise on optimal timing of encashment for tax efficiency, file Form 10E for Section 89 relief, ensure correct reporting in ITR, and plan the encashment across multiple employers to maximise the Rs 25 lakh lifetime exemption. Patron Accounting provides ITR filing and tax planning services for salaried individuals across India." } }
    ]}
    </script>
@endsection

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        body {
            font-family: var(--font-body);
            background: var(--surface);
            color: var(--text);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }

        /* ====== STICKY TOC NAV ====== */
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

        /* ====== BREADCRUMB ====== */
        .breadcrumb {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 20px 0;
            font-size: 13px;
            color: var(--text-muted);
        }
        .breadcrumb a {
            color: var(--primary-light);
            text-decoration: none;
        }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }

        /* ====== HERO ====== */
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
        .author-byline {
            font-size: 13px;
            color: var(--text-secondary);
        }
        .author-byline strong { color: var(--primary); font-weight: 600; }

        .hero h1 {
            font-size: clamp(28px, 5vw, 42px);
            font-weight: 700;
            color: var(--primary-dark);
            line-height: 1.2;
            margin-bottom: 16px;
        }
        .hero h1 span {
            color: var(--accent);
            display: inline;
        }

        /* ====== TL;DR SUMMARY ====== */
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
        .tldr p {
            font-size: 15px;
            color: var(--text-secondary);
            line-height: 1.7;
        }

        /* ====== LAYOUT ====== */
        .main-layout {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px 40px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }

        @media(min-width:900px) {
            .main-layout {
                grid-template-columns: 1fr 320px;
                gap: 40px;
            }
        }

        .content-col { min-width: 0; }
        .sidebar-col { min-width: 0; }

        /* ====== CALCULATOR CARD ====== */
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
            margin-bottom: 24px;
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

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--border);
            border-radius: var(--radius);
            font-family: var(--font-body);
            font-size: 16px;
            color: var(--text);
            background: var(--surface);
            transition: border-color 0.2s;
            outline: none;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--primary);
        }
        .form-group input[type="number"] {
            font-family: var(--font-mono);
            font-size: 18px;
            font-weight: 700;
        }

        /* Toggle switch for inclusive/exclusive */
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

        /* Transaction type toggle */
        .txn-toggle {
            display: flex;
            gap: 4px;
            background: var(--surface-alt);
            border-radius: var(--radius);
            padding: 4px;
        }
        .txn-btn {
            flex: 1;
            padding: 10px 12px;
            border: none;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 13px;
            font-weight: 600;
            color: var(--text-muted);
            background: transparent;
            cursor: pointer;
            transition: all 0.25s;
            text-align: center;
            -webkit-tap-highlight-color: transparent;
        }
        .txn-btn * { pointer-events: none; }
        .txn-btn.active {
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

        /* Results */
        .result-section {
            margin-top: 28px;
            display: none;
        }
        .result-section.visible { display: block; }

        .result-divider {
            height: 1px;
            background: var(--border);
            margin-bottom: 24px;
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
        .breakdown-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            font-size: 14px;
        }
        .breakdown-row:not(:last-child) {
            border-bottom: 1px dashed var(--border);
        }
        .breakdown-label { color: var(--text-secondary); }
        .breakdown-value {
            font-family: var(--font-mono);
            font-weight: 700;
            color: var(--text);
        }

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

        /* ====== CONTENT SECTIONS ====== */
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
        .content-section a {
            color: var(--primary-light);
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .content-section a:hover { color: var(--primary); }

        /* GST Rate Table */
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
        .rate-badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 20px;
            font-family: var(--font-mono);
            font-weight: 700;
            font-size: 13px;
        }
        .rate-badge.r5 { background: #DBEAFE; color: #1D4ED8; }
        .rate-badge.r12 { background: #D1FAE5; color: #059669; }
        .rate-badge.r18 { background: #FEF3C7; color: #B45309; }
        .rate-badge.r28 { background: #FEE2E2; color: #DC2626; }
        .rate-badge.r0 { background: #F3F4F6; color: #6B7280; }
        .rate-badge.r3 { background: #EDE9FE; color: #7C3AED; }

        /* Formula Box */
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
        .formula-box .label {
            color: var(--accent-light);
            font-weight: 700;
        }

        /* Info callout */
        .callout {
            background: #EFF6FF;
            border-left: 4px solid var(--info);
            border-radius: 0 var(--radius) var(--radius) 0;
            padding: 16px 20px;
            margin: 16px 0;
        }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }

        .callout.warn {
            background: #FFFBEB;
            border-left-color: var(--accent);
        }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }

        /* ====== FAQ ACCORDION ====== */
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
            transition: max-height 0.35s ease, padding 0.35s ease;
        }
        .faq-item.open .faq-answer {
            max-height: 500px;
        }
        .faq-answer-inner {
            padding: 0 20px 16px;
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.75;
        }

        /* ====== SIDEBAR ====== */
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
        .sidebar-link:hover {
            background: var(--surface-alt);
            color: var(--primary);
        }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }

        .cta-card {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            color: #fff;
            border-radius: var(--radius-lg);
            padding: 28px 24px;
            margin-bottom: 24px;
            text-align: center;
        }
        .cta-card h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 10px;
        }
        .cta-card p {
            font-size: 14px;
            color: rgba(255,255,255,0.85);
            margin-bottom: 16px;
            line-height: 1.6;
        }
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

        /* ====== FOOTER ====== */
        .office-strip {
            background: var(--primary-dark);
            text-align: center;
            padding: 20px;
            color: rgba(255,255,255,0.7);
            font-size: 14px;
        }
        .office-strip .offices {
            font-weight: 600;
            color: #fff;
            margin-bottom: 4px;
        }
        .office-strip .trust {
            color: var(--accent);
            font-weight: 600;
        }

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

        /* ====== NOSCRIPT ====== */
        .noscript-box {
            background: #FEE2E2;
            border: 2px solid #DC2626;
            border-radius: var(--radius);
            padding: 20px;
            text-align: center;
            color: #991B1B;
            font-weight: 600;
        }

        /* ====== RESPONSIVE ====== */
        @media (max-width: 899px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
        }
    
        .exempt-box { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; margin: 16px 0; }
        @media (max-width: 500px) { .exempt-box { grid-template-columns: 1fr; } }
        .exempt-item { background: var(--surface); border: 2px solid var(--border); border-radius: var(--radius); padding: 14px; text-align: center; transition: all 0.3s; }
        .exempt-item.winner { border-color: var(--success); background: rgba(5,150,105,0.05); }
        .exempt-item .exempt-label { font-size: 11px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .exempt-item .exempt-value { font-family: var(--font-mono); font-size: 17px; font-weight: 700; color: var(--primary-dark); }
        .exempt-item.winner .exempt-value { color: var(--success); }
        .exempt-item .exempt-tag { display: inline-block; margin-top: 4px; padding: 2px 8px; border-radius: 12px; font-size: 10px; font-weight: 700; background: #D1FAE5; color: #059669; }
        .tax-split { display: flex; gap: 16px; margin: 16px 0; }
        @media (max-width: 500px) { .tax-split { flex-direction: column; } }
        .tax-split .split-card { flex: 1; border-radius: var(--radius); padding: 20px; text-align: center; }
        .tax-split .split-card.exempt { background: #D1FAE5; border: 1px solid #6EE7B7; }
        .tax-split .split-card.taxable { background: #FEE2E2; border: 1px solid #FCA5A5; }
        .tax-split .split-card .split-label { font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
        .tax-split .split-card.exempt .split-label { color: #065F46; }
        .tax-split .split-card.taxable .split-label { color: #991B1B; }
        .tax-split .split-card .split-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; }
        .tax-split .split-card.exempt .split-value { color: #059669; }
        .tax-split .split-card.taxable .split-value { color: #DC2626; }
    
/* ====== RESPONSIVE - SIDEBAR STACK (max 899px) ====== */
@media(max-width:899px){.main-layout{grid-template-columns:1fr!important;gap:24px}.sidebar-col{order:2}.content-col{order:1}}

/* ====== RESPONSIVE - TABLET (max 1024px) ====== */
@media(max-width:1024px){
.main-layout{padding:0 16px 32px}
.hero{padding:28px 16px 20px}
.tldr{margin-left:16px;margin-right:16px}
.calc-card{padding:28px}
.content-section{padding:28px}
}

/* ====== RESPONSIVE - SMALL TABLET (max 899px) ====== */
@media(max-width:899px){
.hero h1{font-size:26px}
.calc-card{padding:20px}
.content-section{padding:20px}
.toc-nav a{padding:10px 12px;font-size:12px}
.toggle-group{flex-wrap:wrap}
.toggle-btn{flex:1 1 auto;min-width:0;padding:10px 12px;font-size:13px}
.toggle-btn small{display:none}
.rate-table thead th{padding:10px 12px;font-size:11px}
.rate-table tbody td{padding:10px 12px;font-size:13px}
.result-value{font-size:18px}
.sidebar-col{order:2}
.formula-box{padding:16px 18px;font-size:13px}
}

/* ====== RESPONSIVE - MOBILE (max 480px) ====== */
@media(max-width:480px){
.hero{padding:20px 14px 16px}
.hero h1{font-size:22px}
.hero-meta{gap:8px}
.badge-updated{font-size:11px;padding:3px 10px}
.author-byline{font-size:12px}
.tldr{padding:16px 18px;margin-left:14px;margin-right:14px}
.tldr p{font-size:14px}
.main-layout{padding:0 14px 24px;gap:24px}
.calc-card{padding:16px;margin-bottom:24px}
.calc-card h2{font-size:19px;margin-bottom:16px}
.content-section{padding:16px;margin-bottom:24px}
.content-section h2{font-size:20px}
.content-section h3{font-size:16px}
.content-section p{font-size:14px}
.toggle-group{flex-direction:column}
.toggle-btn{padding:12px 14px;font-size:14px;text-align:center}
.toggle-btn small{display:inline}
.calc-row{gap:14px;margin-bottom:14px}
.form-group label{font-size:12px}
.form-group input,.form-group select{padding:10px 14px;font-size:15px}
.form-group input[type="number"]{font-size:16px}
.btn-calculate{padding:12px;font-size:15px}
.rate-table{font-size:12px}
.rate-table thead th{padding:8px 10px;font-size:10px;letter-spacing:0}
.rate-table tbody td{padding:8px 10px;font-size:12px}
.formula-box{padding:14px 16px;font-size:12px;line-height:1.7}
.callout{padding:14px 16px}
.callout p{font-size:13px}
.faq-question{padding:14px 16px;font-size:14px}
.faq-answer-inner{padding:0 16px 14px;font-size:13px}
.faq-icon{width:22px;height:22px;font-size:14px}
.sidebar-card{padding:20px}
.sidebar-card h3{font-size:15px}
.sidebar-link{padding:8px 12px;font-size:13px}
.cta-card{padding:22px 20px}
.cta-card h3{font-size:16px}
.cta-card p{font-size:13px}
.cta-btn{padding:10px 24px;font-size:13px}
.breadcrumb{font-size:12px;padding:12px 14px 0}
.toc-nav a{padding:8px 10px;font-size:11px}
.result-value{font-size:18px}
}

/* ====== RESPONSIVE - VERY SMALL (max 360px) ====== */
@media(max-width:360px){
.hero h1{font-size:20px}
.calc-card{padding:14px}
.content-section{padding:14px}
.content-section h2{font-size:18px}
.rate-table thead th{font-size:9px;padding:6px 8px}
.rate-table tbody td{font-size:11px;padding:6px 8px}
.toggle-btn{font-size:13px;padding:10px 12px}
}
</style>
@section('content')
<nav class="toc-nav" aria-label="Page Navigation"><div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#exemption">Tax Exemption</a>
        <a href="#scenarios">Scenarios</a>
        <a href="#employer-policy">For Employers</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        Leave Encashment Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Leave Encashment Calculator &mdash; <span>Tax Exemption u/s 10(10AA)</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This Leave Encashment Calculator computes the monetary value of your unused earned leave and the tax exemption under Section 10(10AA). Government employees get 100% exemption. Private employees get exemption up to the least of: actual amount, &#8377;25 lakhs, 10 months average salary, or cash equivalent of leave at 30 days/year. Encashment during service is fully taxable &mdash; only retirement/resignation encashment qualifies for exemption. Updated with the &#8377;25 lakh limit from Budget 2023.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Leave Encashment & Tax</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the formula below.</div></noscript>

                <div class="calc-row">
                    <div class="form-group"><label>Employee Type</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn" data-value="govt" onclick="setEmpType(this)">Government<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7;">100% exempt</small></button>
                            <button type="button" class="toggle-btn active" data-value="private" onclick="setEmpType(this)">Private Sector<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7;">Partial exempt</small></button>
                        </div>
                    </div>
                    <div class="form-group"><label>Encashment Timing</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="retirement" onclick="setTiming(this)">Retirement / Resignation<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7;">Exempt u/s 10(10AA)</small></button>
                            <button type="button" class="toggle-btn" data-value="during" onclick="setTiming(this)">During Service<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7;">Fully taxable</small></button>
                        </div>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="basicDA">Monthly Basic + DA (&#8377;)</label><input type="number" id="basicDA" placeholder="e.g. 40000" min="0" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Basic + DA (forming part of retirement benefits)</div></div>
                    <div class="form-group"><label for="avgSalary">Avg Monthly Salary &mdash; Last 10 Months (&#8377;)</label><input type="number" id="avgSalary" placeholder="e.g. 38000" min="0" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Average of Basic+DA for 10 months before retirement</div></div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="unusedLeave">Unused Leave Days (at retirement)</label><input type="number" id="unusedLeave" placeholder="e.g. 180" min="0" step="1" autocomplete="off"></div>
                    <div class="form-group"><label for="yearsService">Completed Years of Service</label><input type="number" id="yearsService" placeholder="e.g. 20" min="0" max="60" step="1" autocomplete="off"></div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="leavePerYear">Leave Entitled Per Year (days)</label><input type="number" id="leavePerYear" placeholder="e.g. 30" min="1" max="60" step="1" value="30" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Earned/Privilege leave per year (max 30 for exemption)</div></div>
                    <div class="form-group" id="prevExemptGroup"><label for="prevExempt">Previous Exemption Claimed (&#8377;)</label><input type="number" id="prevExempt" placeholder="0" min="0" step="1" value="0" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">From previous employers (&#8377;25L is lifetime limit)</div></div>
                </div>

                <button class="btn-calculate" onclick="calcLeave()">Calculate Leave Encashment</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="leaveOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <section class="content-section" id="how-it-works">
                <h2>How Leave Encashment Is Calculated</h2>
                <p>Leave encashment converts your unused earned leave (EL) or privilege leave (PL) into a monetary payment. Under the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Factories Act, 1948</a>, workers earn 1 day of leave for every 20 days worked. The calculation is straightforward:</p>

                <div class="formula-box">
                    <span class="label">Leave Encashment Amount</span><br>
                    = (Basic Salary + DA) &divide; 30 &times; Number of Unused Leave Days<br><br>
                    <span class="label">Example:</span> Basic + DA = &#8377;40,000/mo, Unused Leave = 150 days<br>
                    = &#8377;40,000 &divide; 30 &times; 150 = <span class="label">&#8377;2,00,000</span><br><br>
                    <span class="label">Salary for this purpose:</span><br>
                    Basic + DA (forming part of retirement benefits) + Commission (fixed % of turnover)<br>
                    HRA, special allowances, and other components are excluded
                </div>

                <h3>Government vs Private Employees</h3>
                <p>Central and state government employees can encash a maximum of 300 days (10 months) of earned leave at retirement. The entire amount is 100% tax-exempt under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 10(10AA)(i)</a> with no monetary ceiling.</p>
                <p>Private sector employees can encash leave as per their employer's policy &mdash; there is no statutory cap on the number of days. However, the tax exemption under Section 10(10AA)(ii) is limited to the least of 4 computed amounts, with a lifetime ceiling of &#8377;25 lakhs (raised from &#8377;3 lakhs in Budget 2023).</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Leave encashment received during active employment (not on retirement or resignation) is fully taxable as salary income with no Section 10(10AA) exemption. If your employer offers annual leave encashment, it will be added to your taxable salary. For tax efficiency, accumulate leave and encash on retirement when the exemption applies. Claim <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 89</a> relief via Form 10E if encashment during service pushes you into a higher tax bracket.</p>
                </div>
            </section>

            <section class="content-section" id="exemption">
                <h2>Section 10(10AA) Tax Exemption &mdash; Detailed Rules</h2>
                <p>The tax exemption under <a href="https://www.indiacode.nic.in/handle/123456789/1362" target="_blank" rel="noopener">Section 10(10AA)</a> of the Income Tax Act applies only to leave encashment received at the time of retirement (including superannuation) or resignation &mdash; not during service. Multiple rulings by the <a href="https://itat.gov.in/" target="_blank" rel="noopener">Income Tax Appellate Tribunal (ITAT)</a> have upheld that resignation encashment qualifies for the same exemption as retirement.</p>

                <h3>Government Employees &mdash; Section 10(10AA)(i)</h3>
                <p>The entire leave encashment amount received by Central and State Government employees at retirement is fully exempt from income tax. There is no monetary limit. The maximum encashable leave is 300 days under government rules.</p>

                <h3>Private Employees &mdash; Section 10(10AA)(ii)</h3>
                <p>The exempt amount is the <strong>least</strong> of these four:</p>
                <table class="rate-table">
                    <thead><tr><th>#</th><th>Component</th><th>How It Is Computed</th></tr></thead>
                    <tbody>
                        <tr><td><strong>A</strong></td><td>Actual leave encashment received</td><td>The lump sum paid by the employer</td></tr>
                        <tr><td><strong>B</strong></td><td>&#8377;25,00,000</td><td>Lifetime limit across all employers (from Budget 2023)</td></tr>
                        <tr><td><strong>C</strong></td><td>10 months average salary</td><td>Average of last 10 months Basic + DA before retirement</td></tr>
                        <tr><td><strong>D</strong></td><td>Cash equivalent of unused leave</td><td>Salary/day &times; (30 days &times; completed years &minus; leave taken). Max 30 days/year considered</td></tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Lifetime Limit:</strong> The &#8377;25 lakh exemption is a lifetime aggregate. If you received &#8377;8 lakhs exempt leave encashment from your previous employer, your remaining exemption balance is &#8377;17 lakhs for all future employers combined. Track this carefully across job changes. The <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">CBDT</a> raised this from &#8377;3 lakhs to &#8377;25 lakhs effective 1st April 2023.</p>
                </div>

                <h3>Key Points</h3>
                <p>This exemption is available under both old and new tax regimes &mdash; Section 10 exemptions are not regime-specific. Leave encashment received by legal heirs of a deceased employee is fully tax-free with no limit. Only earned leave (EL) or privilege leave (PL) is encashable &mdash; casual leave and sick leave are generally not. File Form 10E on the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">income tax portal</a> if claiming Section 89 relief for during-service encashment.</p>
            </section>

            <section class="content-section" id="scenarios">
                <h2>Common Scenarios & Tax Planning</h2>

                <h3>Scenario 1: Retirement After Long Service</h3>
                <p>An employee retiring after 25 years with &#8377;50,000 Basic+DA and 300 unused leave days would receive &#8377;5,00,000 as encashment. The exemption computation would likely result in most or all being exempt if it falls within the &#8377;25 lakh limit and is below 10 months average salary. This is the most tax-efficient scenario.</p>

                <h3>Scenario 2: Early Resignation</h3>
                <p>Resignation after 5 years with fewer unused leaves qualifies for the same Section 10(10AA) exemption. However, the "30 days per completed year" component limits the exempt leave calculation to 150 days maximum (5 years &times; 30). This makes early resignation less tax-efficient than retirement for encashment purposes.</p>

                <h3>Scenario 3: Multiple Employers</h3>
                <p>If you received exempt encashment from Employer A and now receive encashment from Employer B, the &#8377;25 lakh limit is reduced by the amount already claimed from Employer A. Track all previous exemptions carefully and report them in your ITR. CAs recommend maintaining a leave encashment exemption tracker across your career.</p>

                <h3>Scenario 4: Encashment During Service</h3>
                <p>Some employers allow annual encashment of unused leave. This is fully taxable &mdash; no Section 10(10AA) exemption. If you receive a large lump sum, claim Section 89 relief through Form 10E. Strategically, it is better to accumulate leave and encash at retirement for the tax benefit.</p>

                <div class="callout">
                    <p><strong>Need Leave Encashment Tax Help?</strong> Patron Accounting computes your exact exemption, files Form 10E for Section 89 relief, ensures correct ITR reporting, and plans encashment timing for maximum tax efficiency. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20leave%20encashment%20tax%20computation.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get tax planning help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="employer-policy">
                <h2>Leave Encashment Policy for Employers</h2>
                <p>Employers designing leave encashment policies must balance employee benefit with financial provisioning and compliance. Here is what HR managers and CFOs should know:</p>

                <h3>Structuring Leave Policy</h3>
                <p>Most private employers offer 15-30 earned leave days per year. The <a href="https://labour.gov.in/" target="_blank" rel="noopener">Factories Act, 1948</a> mandates 1 day per 20 days worked (approximately 15 days/year). State-specific Shops & Establishments Acts may prescribe different minimums. The policy should clearly define: which leave types are encashable (EL/PL only, not CL/SL), maximum accumulation limit, whether annual encashment is allowed, and the encashment formula (typically Basic+DA &divide; 30 &times; days).</p>

                <h3>Accounting Treatment &mdash; AS-15 / Ind AS 19</h3>
                <p>Leave encashment is a defined benefit obligation under <a href="https://www.icai.org/" target="_blank" rel="noopener">AS-15 (Employee Benefits)</a> for companies following Indian AS, and Ind AS 19 for Ind AS companies. Employers must obtain an actuarial valuation of the leave encashment liability at each balance sheet date. The actuarial gain or loss is recognised in the P&L (AS-15) or in Other Comprehensive Income (Ind AS 19). This is not optional &mdash; the statutory auditor will qualify the report if the provision is not actuarially valued.</p>

                <h3>Annual Provisioning</h3>
                <p>Employers should provision for leave encashment liability monthly or quarterly, not just at year-end. The provision is based on accumulated unused leave &times; per-day salary for each employee. For a company with 50 employees averaging 30 unused leave days at &#8377;1,500/day, the liability is &#8377;22.5 lakhs &mdash; a material amount that impacts the balance sheet. Proper provisioning avoids cash flow shocks when employees retire or resign.</p>

                <h3>Tax Deduction for Employers</h3>
                <p>Under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 43B(f)</a> of the Income Tax Act, leave encashment expenditure is deductible by the employer only on actual payment basis &mdash; not on accrual or provision basis. This means the provision created in the books is added back while computing taxable income, and the deduction is available only in the year the amount is actually paid to the employee. This creates a timing difference between book profit and taxable profit.</p>

                <div class="callout">
                    <p><strong>Need Leave Policy Setup?</strong> Patron Accounting helps employers design compliant leave policies, obtain actuarial valuations for AS-15/Ind AS 19, compute monthly provisions, and handle the tax treatment of leave encashment under Section 43B(f). <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20leave%20encashment%20provisioning%20and%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get employer compliance help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Leave Encashment</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is leave encashment calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Formula: (Basic + DA) &divide; 30 &times; Unused Leave Days. Only earned/privilege leave is encashable &mdash; not casual or sick leave. For example, &#8377;40,000 Basic+DA with 150 unused days = &#8377;40,000 &divide; 30 &times; 150 = &#8377;2,00,000. Government employees can encash up to 300 days. Private sector limits depend on employer policy.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is leave encashment taxable?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">During service: fully taxable as salary income, no exemption. On retirement/resignation: partially exempt under Section 10(10AA). Government employees get 100% exemption. Private employees get exemption up to the least of 4 computed amounts with &#8377;25 lakh lifetime cap. Available under both old and new tax regimes. Encashment to legal heirs on death is fully tax-free.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is Section 10(10AA) exemption?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Tax exemption on leave encashment at retirement. Government: fully exempt, no limit. Private: exempt up to the least of actual amount received, &#8377;25 lakhs (lifetime), 10 months average salary (last 10 months before retirement), and cash equivalent of unused leave at 30 days per completed year. The taxable portion is the amount exceeding this exemption.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the maximum exemption limit?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">&#8377;25 lakhs &mdash; raised from &#8377;3 lakhs by Budget 2023-24 effective 1st April 2023. This is a lifetime aggregate across all employers. If you claimed &#8377;10 lakhs from Employer A, only &#8377;15 lakhs remains for Employer B and beyond. Government employees have no monetary ceiling &mdash; the entire amount is exempt regardless of quantum.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How many days can be encashed?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Government: max 300 days (10 months) at retirement. Private: as per employer policy, no statutory cap. But for tax exemption under 10(10AA), the computation considers max 30 days per completed year of service. So for 20 years of service, maximum considered is 600 days even if actual balance is higher. The actual encashment can be more but the excess is taxable.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What salary is used for calculation?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Basic Salary + DA (that forms part of retirement benefits) + Commission (fixed % of turnover). HRA, special allowances, and other components are excluded. For encashment computation: salary at retirement date. For Section 10(10AA) exemption: average of last 10 months' salary before retirement. The two numbers may differ if you got a hike in the last 10 months.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is resignation encashment exempt?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; leave encashment on resignation qualifies for the same Section 10(10AA) exemption as retirement. The 4-factor computation applies identically. However, the "30 days per completed year" factor limits the exempt amount for shorter tenures. Termination for misconduct may not qualify &mdash; check with a CA for specific circumstances.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Does it work under the new tax regime?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; Section 10(10AA) exemption applies under both old and new tax regimes. Section 10 exemptions are not regime-specific deductions; they apply before computing taxable income. Whether you opted for the old or new regime, your leave encashment on retirement qualifies for the same exemption computation. This is confirmed by CBDT.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens on employee death?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Leave encashment received by the legal heir or nominee is 100% tax-free &mdash; no limit, no exemption computation needed. This applies to both government and private sector. Ensure your nomination is updated with your employer, especially after marriage or birth of children. The full amount is exempt in the nominee's hands regardless of quantum.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is it shown in Form 16?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Part B of Form 16 shows the total leave encashment under gross salary and the exempt portion under Section 10(10AA) exemptions. The taxable portion is included in net taxable salary. If your employer didn't apply the exemption correctly, claim it in your ITR and get excess TDS refunded. Keep your leave balance certificate and salary certificate as supporting documents.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I claim Section 89 relief?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; for leave encashment during service (fully taxable), Section 89 relief with Rule 21A reduces tax if the lump sum pushes you into a higher bracket. Requires 5+ years of service. File Form 10E online before filing ITR. For encashment on retirement, Section 10(10AA) exemption applies first; Section 89 applies only on the remaining taxable portion if received in arrears.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Earned leave vs privilege leave &mdash; any difference?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No practical difference &mdash; earned leave (EL) and privilege leave (PL) are the same concept with different names across organisations and states. Both are paid leave earned through service, can be accumulated, and can be encashed. The calculation formula and tax treatment are identical. Under the Factories Act, workers earn 1 day per 20 days worked annually.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with leave encashment tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a CA computes exact Section 10(10AA) exemption, advises on optimal encashment timing, files Form 10E for Section 89 relief, ensures correct ITR reporting, and tracks the &#8377;25 lakh lifetime limit across employers. Patron Accounting provides ITR filing and tax planning for salaried individuals across India including leave encashment, gratuity, and retirement benefit planning.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Tax Planning Help?</h3>
                <p>We compute Section 10(10AA) exemptions, file Form 10E, and ensure correct ITR reporting for leave encashment.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20leave%20encashment%20tax%20computation.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Tax Services</h3>
                <a href="/income-tax-return" class="sidebar-link">Income Tax Return <span class="arrow">&rarr;</span></a>
                <a href="/itr-filing-for-salary" class="sidebar-link">ITR for Salaried <span class="arrow">&rarr;</span></a>
                <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/gratuity-calculation-and-compliance-services" class="sidebar-link">Gratuity Services <span class="arrow">&rarr;</span></a>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/epf-pf-calculator" class="sidebar-link">EPF/PF Calculator <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/cost-to-company-ctc-components-calculation-and-salary-breakup-explained" class="sidebar-link">CTC Components Explained <span class="arrow">&rarr;</span></a>
                <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Income Tax Scrutiny Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

<script>
        let empType = 'private';
        let timing = 'retirement';

        function setEmpType(btn) { const el=btn.closest('.toggle-btn')||btn;empType=el.dataset.value;el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));el.classList.add('active'); }
        function setTiming(btn) { const el=btn.closest('.toggle-btn')||btn;timing=el.dataset.value;el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));el.classList.add('active'); }
        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function calcLeave() {
            const basicDA = parseFloat(document.getElementById('basicDA').value);
            const avgSalary = parseFloat(document.getElementById('avgSalary').value) || basicDA;
            const unusedLeave = parseInt(document.getElementById('unusedLeave').value);
            const yearsService = parseInt(document.getElementById('yearsService').value);
            const leavePerYear = Math.min(30, parseInt(document.getElementById('leavePerYear').value) || 30);
            const prevExempt = parseFloat(document.getElementById('prevExempt').value) || 0;

            if (isNaN(basicDA) || basicDA <= 0) { alert('Please enter Basic + DA.'); return; }
            if (isNaN(unusedLeave) || unusedLeave <= 0) { alert('Please enter unused leave days.'); return; }
            if (isNaN(yearsService) || yearsService <= 0) { alert('Please enter years of service.'); return; }

            const perDay = basicDA / 30;
            const encashmentAmount = Math.round(perDay * unusedLeave);

            let h = '';

            // During service \u2014 fully taxable
            if (timing === 'during') {
                h += '<div class="tax-split"><div class="split-card taxable" style="flex:1;"><div class="split-label">Fully Taxable</div><div class="split-value">' + fmt(encashmentAmount) + '</div><p style="font-size:12px;color:#991B1B;margin-top:8px;">No Section 10(10AA) exemption during service</p></div></div>';

                h += '<div class="result-grid" style="margin-top:16px;">';
                h += '<div class="result-card"><div class="result-label">Per Day Rate</div><div class="result-value">' + fmt(perDay) + '</div></div>';
                h += '<div class="result-card"><div class="result-label">Unused Leave</div><div class="result-value">' + unusedLeave + ' days</div></div>';
                h += '<div class="result-card highlight"><div class="result-label">Encashment Amount</div><div class="result-value">' + fmt(encashmentAmount) + '</div></div>';
                h += '</div>';

                h += '<div class="callout warn" style="margin-top:16px;"><p><strong>Fully Taxable:</strong> Leave encashment during service has no Section 10(10AA) exemption. The entire ' + fmt(encashmentAmount) + ' is added to your salary income and taxed at your slab rate. Consider claiming Section 89 relief via Form 10E if this pushes you into a higher bracket. For tax efficiency, accumulate leave and encash at retirement instead.</p></div>';

                document.getElementById('leaveOutput').innerHTML = h;
                document.getElementById('resultSection').classList.add('visible');
                document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                return;
            }

            // Government \u2014 fully exempt
            if (empType === 'govt') {
                h += '<div class="tax-split"><div class="split-card exempt" style="flex:1;"><div class="split-label">100% Tax Exempt</div><div class="split-value">' + fmt(encashmentAmount) + '</div><p style="font-size:12px;color:#065F46;margin-top:8px;">Section 10(10AA)(i) \u2014 Government employee</p></div></div>';

                h += '<div class="result-grid" style="margin-top:16px;">';
                h += '<div class="result-card"><div class="result-label">Per Day Rate</div><div class="result-value">' + fmt(perDay) + '</div></div>';
                h += '<div class="result-card"><div class="result-label">Unused Leave</div><div class="result-value">' + unusedLeave + ' days (max 300)</div></div>';
                h += '<div class="result-card"><div class="result-label">Years of Service</div><div class="result-value">' + yearsService + ' years</div></div>';
                h += '<div class="result-card highlight"><div class="result-label">Encashment (Fully Exempt)</div><div class="result-value">' + fmt(encashmentAmount) + '</div></div>';
                h += '</div>';

                document.getElementById('leaveOutput').innerHTML = h;
                document.getElementById('resultSection').classList.add('visible');
                document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                return;
            }

            // Private \u2014 4-factor exemption
            const factorA = encashmentAmount;
            const factorB = Math.max(0, 2500000 - prevExempt);
            const factorC = Math.round(avgSalary * 10);
            const maxLeaveDays = Math.min(leavePerYear, 30) * yearsService;
            const factorD = Math.round(perDay * Math.min(unusedLeave, maxLeaveDays));

            const exemption = Math.min(factorA, factorB, factorC, factorD);
            const taxable = Math.max(0, encashmentAmount - exemption);

            const factors = [factorA, factorB, factorC, factorD];
            const winnerIdx = factors.indexOf(exemption);
            const labels = ['A. Actual Amount', 'B. \u20B925L Limit', 'C. 10 Months Avg Salary', 'D. Leave Cash Equiv'];

            // Tax split
            h += '<div class="tax-split">';
            h += '<div class="split-card exempt"><div class="split-label">Exempt u/s 10(10AA)</div><div class="split-value">' + fmt(exemption) + '</div></div>';
            h += '<div class="split-card taxable"><div class="split-label">Taxable as Salary</div><div class="split-value">' + fmt(taxable) + '</div></div>';
            h += '</div>';

            // 4-factor display
            h += '<div class="exempt-box">';
            for (let i = 0; i < 4; i++) {
                const isWinner = i === winnerIdx;
                h += '<div class="exempt-item ' + (isWinner ? 'winner' : '') + '">';
                h += '<div class="exempt-label">' + labels[i] + '</div>';
                h += '<div class="exempt-value">' + fmt(factors[i]) + '</div>';
                if (isWinner) h += '<span class="exempt-tag">\u2713 Lowest = Exempt</span>';
                h += '</div>';
            }
            h += '</div>';

            // Result cards
            h += '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Encashment Amount</div><div class="result-value">' + fmt(encashmentAmount) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Per Day Rate</div><div class="result-value">' + fmt(perDay) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Max Exempt Leave Days</div><div class="result-value">' + maxLeaveDays + ' days<small style="display:block;font-size:11px;color:rgba(255,255,255,0.7);font-family:var(--font-body);font-weight:400;">' + Math.min(leavePerYear, 30) + ' \u00D7 ' + yearsService + ' yrs</small></div></div>';
            h += '<div class="result-card"><div class="result-label">Remaining \u20B925L Limit</div><div class="result-value">' + fmt(Math.max(0, factorB - exemption)) + '</div></div>';
            h += '</div>';

            // Breakdown
            h += '<div class="result-breakdown" style="margin-top:16px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label">Basic + DA (current)</span><span class="breakdown-value">' + fmt(basicDA) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Avg Salary (last 10 months)</span><span class="breakdown-value">' + fmt(avgSalary) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Per Day Rate (\u00F7 30)</span><span class="breakdown-value">' + fmt(perDay) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Unused Leave Days</span><span class="breakdown-value">' + unusedLeave + ' days</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Years of Service</span><span class="breakdown-value">' + yearsService + ' years</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Leave Entitlement/Year</span><span class="breakdown-value">' + leavePerYear + ' days (max 30 for exemption)</span></div>';
            if (prevExempt > 0) h += '<div class="breakdown-row"><span class="breakdown-label">Previous Exemption Used</span><span class="breakdown-value">' + fmt(prevExempt) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Total Encashment</strong></span><span class="breakdown-value"><strong>' + fmt(encashmentAmount) + '</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Exempt Amount</strong></span><span class="breakdown-value"><strong style="color:#059669;">' + fmt(exemption) + '</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Taxable Amount</strong></span><span class="breakdown-value"><strong style="color:#DC2626;">' + fmt(taxable) + '</strong></span></div>';
            h += '</div>';

            if (taxable > 0) {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>Tax Impact:</strong> The taxable portion of ' + fmt(taxable) + ' will be added to your salary income for the year and taxed at your applicable slab rate. If this was received in arrears, consider claiming Section 89 relief via Form 10E to reduce the tax burden.</p></div>';
            }

            document.getElementById('leaveOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() { document.getElementById('basicDA').value='';document.getElementById('avgSalary').value='';document.getElementById('unusedLeave').value='';document.getElementById('yearsService').value='';document.getElementById('leavePerYear').value='30';document.getElementById('prevExempt').value='0';empType='private';timing='retirement';document.querySelectorAll('.toggle-group').forEach(g=>{g.querySelectorAll('.toggle-btn').forEach((b,i)=>{if(g.parentElement.querySelector('label') && g.parentElement.querySelector('label').textContent.includes('Employee')){b.classList.toggle('active',i===1);}else{b.classList.toggle('active',i===0);}});});document.getElementById('resultSection').classList.remove('visible'); }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('basicDA').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcLeave(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>
@endsection    
