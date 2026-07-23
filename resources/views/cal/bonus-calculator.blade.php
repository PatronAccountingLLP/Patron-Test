@extends('layouts.app')
@section('meta')
    <title>Bonus Calculator | Payment of Bonus Act Statutory Bonus</title>
    <meta name="description" content="Free statutory bonus calculator under the Payment of Bonus Act, 1965, from minimum 8.33% to maximum 20%, with eligibility and pro-rata working. Calculate now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/bonus-calculator">
    <meta property="og:title" content="Bonus Calculator — Payment of Bonus Act Statutory Bonus">
    <meta property="og:description" content="Calculate statutory bonus under the Payment of Bonus Act — 8.33% to 20% with eligibility check.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/bonus-calculator">
    <meta property="og:image" content="/tools/bonus-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bonus Calculator — Payment of Bonus Act Statutory Bonus">
    <meta name="twitter:description" content="Statutory bonus 8.33%-20% under the Bonus Act. Eligibility + pro-rata + tax. Calculate!">
    <meta name="twitter:image" content="/tools/bonus-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "Bonus Calculator \u2014 Payment of Bonus Act",
      "description": "Bonus Calculator computes statutory bonus under the Payment of Bonus Act, 1965 for eligible employees. Calculates minimum bonus at 8.33 percent and maximum at 20 percent of salary capped at Rs 7,000 per month or minimum wage whichever is higher. Checks eligibility against the Rs 21,000 salary ceiling, handles pro-rata for partial year service, and shows employer total cost for multiple employees.",
      "url": "/tools/bonus-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "Bonus Calculator", "item": "/tools/bonus-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "What is statutory bonus under the Payment of Bonus Act?", "acceptedAnswer": { "@type": "Answer", "text": "Statutory bonus is a mandatory payment by employers to eligible employees under the Payment of Bonus Act, 1965. The minimum is 8.33 percent of salary (Basic plus DA) and maximum is 20 percent. It applies to establishments with 20 or more employees. Employees earning up to Rs 21,000 per month are eligible if they have worked for at least 30 days in the accounting year. It must be paid within 8 months of year-end." } },
      { "@type": "Question", "name": "How is statutory bonus calculated?", "acceptedAnswer": { "@type": "Answer", "text": "Bonus is calculated on salary capped at Rs 7,000 per month or the applicable minimum wage, whichever is higher. If actual salary is below this cap, bonus is calculated on actual salary. Minimum bonus equals 8.33 percent of the calculation salary times 12 months. For partial year service, it is computed proportionately based on working days out of total working days. The minimum payable amount is Rs 100." } },
      { "@type": "Question", "name": "Who is eligible for statutory bonus in India?", "acceptedAnswer": { "@type": "Answer", "text": "Employees earning Basic plus DA up to Rs 21,000 per month who have worked at least 30 days in the accounting year are eligible. The Act applies to factories with 10 or more employees and other establishments with 20 or more employees. Once applicable, the Act continues even if employee count drops below the threshold. Employees dismissed for fraud, misconduct, or sabotage are disqualified." } },
      { "@type": "Question", "name": "What is the salary ceiling for bonus calculation?", "acceptedAnswer": { "@type": "Answer", "text": "There are two ceilings: the eligibility ceiling is Rs 21,000 per month (Basic plus DA) \u2014 employees above this are not covered by the Act. The calculation ceiling is Rs 7,000 per month or the applicable minimum wage, whichever is higher. Even if an employee earns Rs 18,000, the bonus is calculated on Rs 7,000 only. This means the maximum minimum bonus is Rs 6,996 per year (Rs 7,000 times 12 times 8.33 percent)." } },
      { "@type": "Question", "name": "Is statutory bonus paid on gross salary or basic salary?", "acceptedAnswer": { "@type": "Answer", "text": "Statutory bonus is calculated on Basic Salary plus Dearness Allowance only, not on gross salary. HRA, special allowances, overtime, and other components are excluded from the bonus calculation base. The calculation base is further capped at Rs 7,000 per month or the applicable minimum wage for scheduled employment, whichever is higher. This cap applies regardless of the actual Basic plus DA earned." } },
      { "@type": "Question", "name": "What is the difference between minimum and maximum bonus?", "acceptedAnswer": { "@type": "Answer", "text": "Minimum bonus of 8.33 percent is mandatory regardless of whether the company made profits or losses. Maximum bonus of 20 percent depends on the allocable surplus from the company profits. Allocable surplus is 60 percent of available surplus for non-banking companies and 67 percent for banking companies. If profits permit, the employer must pay up to 20 percent. The actual percentage depends on surplus computation under Sections 4 and 5 of the Act." } },
      { "@type": "Question", "name": "How does pro-rata bonus work for partial year employment?", "acceptedAnswer": { "@type": "Answer", "text": "If an employee worked for less than the full accounting year, bonus is calculated proportionately. The formula is: Full Year Bonus times Actual Working Days divided by Total Working Days in the year (usually 240 or 260 depending on the establishment). An employee who worked 180 days out of 240 would receive 75 percent of the full year bonus. Employees must complete at least 30 days to be eligible." } },
      { "@type": "Question", "name": "When must statutory bonus be paid?", "acceptedAnswer": { "@type": "Answer", "text": "The bonus must be paid within 8 months from the close of the accounting year. For companies with a March year-end, this means payment by 30th November. If a dispute is pending before any authority, the bonus must be paid within 1 month of the award becoming enforceable. Many employers include bonus as part of monthly CTC by dividing the annual bonus by 12, but the legal obligation is annual payment." } },
      { "@type": "Question", "name": "Is statutory bonus taxable?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, statutory bonus is fully taxable as salary income in the hands of the employee. It is added to total salary for the year and taxed at the applicable income tax slab rate. TDS is deducted by the employer when paying the bonus. There is no separate exemption for statutory bonus under the Income Tax Act. The employer can claim bonus paid as a business expenditure deduction under Section 36(1)(ii)." } },
      { "@type": "Question", "name": "What is the set-on and set-off concept in bonus calculation?", "acceptedAnswer": { "@type": "Answer", "text": "Set-on means carrying forward excess allocable surplus from a profitable year to the next year. Set-off means adjusting deficiency in allocable surplus from a loss year against future surplus. These adjustments are tracked over a rolling 4-year period. Employers maintain Form A for surplus computation and Form B for set-on and set-off details. This mechanism ensures employees benefit from cyclical profitability." } },
      { "@type": "Question", "name": "What are the penalties for non-payment of bonus?", "acceptedAnswer": { "@type": "Answer", "text": "Non-payment of statutory bonus can result in imprisonment for up to 6 months or a fine up to Rs 1,000 or both under Section 28 of the Act. Additionally, the Chief Labour Commissioner can direct the employer to pay the bonus with interest. Employees can file complaints with the labour department. Employers must maintain Form A, B, C registers and file Form D annual return by 1st February each year." } },
      { "@type": "Question", "name": "Does the bonus apply to contract or temporary employees?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, contract and temporary employees are eligible for statutory bonus if they meet the eligibility criteria: salary up to Rs 21,000, worked at least 30 days, and the establishment has 20 or more employees. Under the Code on Social Security 2020, even fixed-term employees are entitled to bonus on a pro-rata basis. The principal employer is liable for bonus of contract workers deployed through contractors." } },
      { "@type": "Question", "name": "Can a CA help with bonus computation and compliance?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a CA handles bonus calculation including allocable surplus computation, set-on and set-off adjustments, Form A B C register maintenance, Form D annual return filing, and ensures timely payment within the 8-month deadline. Patron Accounting provides complete payroll compliance including bonus calculation, EPF, ESI, and TDS for businesses across India." } }
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
    
        .eligibility-badge { display: inline-block; padding: 6px 14px; border-radius: 20px; font-size: 13px; font-weight: 700; }
        .eligibility-badge.eligible { background: #D1FAE5; color: #065F46; }
        .eligibility-badge.not-eligible { background: #FEE2E2; color: #991B1B; }
        .bonus-range { display: flex; gap: 16px; margin: 16px 0; }
        @media (max-width: 500px) { .bonus-range { flex-direction: column; } }
        .bonus-range .range-card { flex: 1; background: var(--surface); border: 2px solid var(--border); border-radius: var(--radius); padding: 16px; text-align: center; }
        .bonus-range .range-card.highlight { border-color: var(--primary); background: rgba(27,77,62,0.04); }
        .bonus-range .range-card .range-label { font-size: 12px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .bonus-range .range-card .range-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .bonus-range .range-card .range-pct { font-size: 13px; color: var(--primary-light); font-weight: 600; margin-top: 4px; }
    
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
        <a href="#eligibility">Eligibility</a>
        <a href="#set-on-off">Set-On & Set-Off</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Bonus Calculator — <span>Payment of Bonus Act Statutory Bonus</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This Bonus Calculator computes statutory bonus under the Payment of Bonus Act, 1965. Eligible employees (Basic + DA &le; &#8377;21,000/month, 30+ working days) receive a minimum of 8.33% and maximum of 20% of salary capped at &#8377;7,000/month or minimum wage. Enter your salary and working days to see both minimum and maximum bonus, pro-rata for partial year, and the employer's total bonus liability for the team. Payment deadline: within 8 months of year-end.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Statutory Bonus</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the bonus formula below.</div></noscript>

                <div class="calc-row">
                    <div class="form-group"><label for="basicDA">Monthly Basic + DA (&#8377;)</label><input type="number" id="basicDA" placeholder="e.g. 15000" min="0" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Basic Salary + Dearness Allowance only</div></div>
                    <div class="form-group"><label for="workingDays">Working Days in Year</label><input type="number" id="workingDays" placeholder="e.g. 240" min="30" max="365" step="1" value="240" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Total days worked (incl. leave with pay)</div></div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="totalWorkDays">Total Working Days in Establishment</label><input type="number" id="totalWorkDays" value="240" min="240" max="365" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Usually 240 (factories) or 260 (offices)</div></div>
                    <div class="form-group"><label for="numEmployees">Number of Eligible Employees</label><input type="number" id="numEmployees" value="1" min="1" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">For total employer liability</div></div>
                </div>

                <button class="btn-calculate" onclick="calcBonus()">Calculate Bonus</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="bonusOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <section class="content-section" id="how-it-works">
                <h2>How Statutory Bonus Is Calculated</h2>
                <p>The <a href="https://www.indiacode.nic.in/handle/123456789/1548" target="_blank" rel="noopener">Payment of Bonus Act, 1965</a> prescribes a specific calculation method that involves salary capping, minimum and maximum rates, and pro-rata adjustments:</p>

                <div class="formula-box">
                    <span class="label">Step 1: Determine Calculation Salary</span><br>
                    If Basic + DA &le; &#8377;7,000 &rarr; use actual Basic + DA<br>
                    If Basic + DA > &#8377;7,000 &rarr; use &#8377;7,000 (or minimum wage, whichever is higher)<br><br>
                    <span class="label">Step 2: Calculate Annual Bonus</span><br>
                    Minimum Bonus = Calculation Salary &times; 12 &times; 8.33% (or &#8377;100, whichever is higher)<br>
                    Maximum Bonus = Calculation Salary &times; 12 &times; 20%<br><br>
                    <span class="label">Step 3: Pro-Rata (if partial year)</span><br>
                    Pro-Rata Bonus = Full Year Bonus &times; (Working Days &divide; Total Working Days)<br><br>
                    <span class="label">Eligibility:</span> Basic + DA &le; &#8377;21,000/mo + worked 30+ days
                </div>

                <h3>Worked Example</h3>
                <p>Ramesh earns Basic + DA of &#8377;15,000/month and worked for 200 days in a 240-day establishment:</p>
                <table class="rate-table">
                    <thead><tr><th>Step</th><th>Calculation</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility</td><td>&#8377;15,000 &le; &#8377;21,000</td><td>&#10003; Eligible</td></tr>
                        <tr><td>Calculation Salary</td><td>&#8377;15,000 > &#8377;7,000 &rarr; capped at &#8377;7,000</td><td>&#8377;7,000/mo</td></tr>
                        <tr><td>Annual Calculation Base</td><td>&#8377;7,000 &times; 12</td><td>&#8377;84,000</td></tr>
                        <tr><td>Min Bonus (full year)</td><td>&#8377;84,000 &times; 8.33%</td><td>&#8377;6,997</td></tr>
                        <tr><td>Pro-Rata Min Bonus</td><td>&#8377;6,997 &times; (200 &divide; 240)</td><td><strong>&#8377;5,831</strong></td></tr>
                        <tr><td>Max Bonus (full year)</td><td>&#8377;84,000 &times; 20%</td><td>&#8377;16,800</td></tr>
                        <tr><td>Pro-Rata Max Bonus</td><td>&#8377;16,800 &times; (200 &divide; 240)</td><td><strong>&#8377;14,000</strong></td></tr>
                    </tbody>
                </table>

                <div class="callout">
                    <p><strong>CA Tip:</strong> The &#8377;7,000 salary cap for bonus calculation has not been revised since 2015, despite the eligibility ceiling being raised to &#8377;21,000. This means employees earning &#8377;7,001 to &#8377;21,000 all receive the same bonus amount — a significant gap that benefits employers but limits employee bonus. Track minimum wage notifications from the <a href="https://clc.gov.in/" target="_blank" rel="noopener">Chief Labour Commissioner</a> as minimum wage can override the &#8377;7,000 cap for scheduled employments.</p>
                </div>
            </section>

            <section class="content-section" id="eligibility">
                <h2>Eligibility Criteria</h2>
                <h3>Employee Eligibility</h3>
                <p>Under <a href="https://www.indiacode.nic.in/handle/123456789/1548" target="_blank" rel="noopener">Section 8</a> of the Act, an employee must satisfy two conditions: monthly Basic + DA must not exceed &#8377;21,000, and they must have worked for at least 30 days in the accounting year. Days on leave with pay, lay-off, and absence due to employment injury or maternity leave count as working days.</p>

                <h3>Establishment Eligibility</h3>
                <p>The Act applies to every factory with 10 or more employees and every other establishment with 20 or more employees on any day during the accounting year. Once applicable, the Act continues even if employee count drops below the threshold in subsequent years. Certain establishments are exempt: the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a>, LIC, non-profit organisations, hospitals, educational institutions, and government departments.</p>

                <h3>Disqualification</h3>
                <p>An employee is disqualified from receiving bonus in that accounting year if dismissed for fraud or misconduct, violent behaviour, theft or misappropriation of employer property, or sabotage of establishment property. The disqualification applies only for the year of the offence — the employee remains eligible in other years. Under the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Code on Social Security, 2020</a>, fixed-term employees are also entitled to pro-rata bonus after 1 year.</p>
            </section>

            <section class="content-section" id="set-on-off">
                <h2>Set-On and Set-Off Explained</h2>
                <p>Sections 15 and 16 of the Act introduce a carry-forward mechanism for allocable surplus:</p>

                <h3>Set-On (Carry Forward Surplus)</h3>
                <p>If in any year the allocable surplus exceeds the maximum bonus (20%) payable, the excess is carried forward (set-on) to the next year. This surplus can be used to pay bonus in future years when the allocable surplus is insufficient. Set-on can be carried forward for up to 4 years.</p>

                <h3>Set-Off (Carry Forward Deficiency)</h3>
                <p>If in any year the allocable surplus is less than the minimum bonus (8.33%), the employer must still pay the minimum bonus. The deficiency (difference between minimum bonus paid and the allocable surplus) is set-off against future years' surplus. Set-off is also limited to 4 years.</p>

                <p>Employers must maintain <strong>Form A</strong> (surplus computation) and <strong>Form B</strong> (set-on/set-off record) under the Payment of Bonus Rules, 1975. These registers are inspected during <a href="https://clc.gov.in/" target="_blank" rel="noopener">labour inspections</a> and must be kept for 8 years.</p>
            </section>

            <section class="content-section" id="compliance">
                <h2>Bonus Compliance for Employers</h2>

                <table class="rate-table">
                    <thead><tr><th>Obligation</th><th>Requirement</th></tr></thead>
                    <tbody>
                        <tr><td>Payment Deadline</td><td>Within 8 months of accounting year close (by 30th November for March year-end)</td></tr>
                        <tr><td>Form A</td><td>Computation of allocable surplus</td></tr>
                        <tr><td>Form B</td><td>Set-on and set-off register</td></tr>
                        <tr><td>Form C</td><td>Bonus payable, deductions, and disbursement details per employee</td></tr>
                        <tr><td>Form D (Annual Return)</td><td>Filed on the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Ministry of Labour portal</a> by 1st February each year</td></tr>
                        <tr><td>Penalty for Non-Payment</td><td>Up to 6 months imprisonment or &#8377;1,000 fine or both (Section 28)</td></tr>
                        <tr><td>Record Retention</td><td>8 years from the date of last entry</td></tr>
                    </tbody>
                </table>

                <div class="callout">
                    <p><strong>Need Bonus Computation Help?</strong> Patron Accounting calculates allocable surplus, maintains Forms A/B/C/D, computes employee-wise bonus with pro-rata adjustments, and files annual returns. We handle full payroll compliance for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20statutory%20bonus%20calculation%20and%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get bonus compliance help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Statutory Bonus</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is statutory bonus?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Statutory bonus is a mandatory payment under the Payment of Bonus Act, 1965. Minimum 8.33% and maximum 20% of salary (Basic + DA) capped at &#8377;7,000/month or minimum wage. Applies to establishments with 20+ employees. Eligible employees earn up to &#8377;21,000/month and must have worked 30+ days. Must be paid within 8 months of accounting year close.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is bonus calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Bonus is calculated on salary capped at &#8377;7,000/month or minimum wage (whichever is higher). If actual Basic + DA is below &#8377;7,000, use actual. Annual calculation base = capped salary &times; 12. Minimum bonus = base &times; 8.33% (or &#8377;100, whichever is higher). Maximum = base &times; 20%. For partial year: Full bonus &times; (actual working days &divide; total working days). The actual percentage depends on the company's allocable surplus.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Who is eligible for statutory bonus?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Employees earning Basic + DA up to &#8377;21,000/month who worked at least 30 days in the year. Establishments must have 20+ employees (10+ for factories). Leave with pay, lay-off days, and maternity absence count as working days. Employees dismissed for fraud, misconduct, theft, or sabotage in that year are disqualified. Contract and temporary employees are also eligible if criteria are met.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the salary ceiling for bonus?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Two ceilings: eligibility at &#8377;21,000/month (above this, not covered by the Act) and calculation at &#8377;7,000/month or minimum wage (whichever is higher). Even if salary is &#8377;18,000, bonus is calculated on &#8377;7,000. Maximum minimum bonus = &#8377;7,000 &times; 12 &times; 8.33% = &#8377;6,997/year. The &#8377;7,000 cap hasn't changed since 2015 despite the eligibility ceiling rising to &#8377;21,000.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is bonus calculated on gross or basic salary?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">On Basic Salary + Dearness Allowance only — not gross. HRA, special allowances, overtime, conveyance, and other components are excluded. The calculation base is further capped at &#8377;7,000/month or minimum wage. This distinction is critical — many employers incorrectly calculate on gross salary, either overpaying or using the wrong base for compliance purposes.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is minimum vs maximum bonus?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Minimum 8.33% is mandatory regardless of profit or loss. Maximum 20% depends on allocable surplus — 60% of available surplus for non-banking companies, 67% for banks. If surplus permits up to 20%, the employer must pay that amount. The actual percentage between 8.33% and 20% is determined by the surplus computation under Sections 4 and 5 of the Act each year.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does pro-rata bonus work?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For partial year employment: Full Year Bonus &times; (Actual Working Days &divide; Total Working Days). An employee working 180 out of 240 days gets 75% of full bonus. You must work at least 30 days to qualify. Days on paid leave, lay-off, and maternity count as working days. An employee who joins mid-year and works 180+ days gets a proportionately higher bonus than one working only 30 days.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>When must bonus be paid?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Within 8 months of accounting year close — by 30th November for March year-end companies. If a dispute is pending, within 1 month of the award. Many employers include bonus in monthly CTC (dividing annual amount by 12) — this is an advance payment which is permissible. However, the final reconciliation must happen per the Act's computation formula after year-end.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is statutory bonus taxable?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — fully taxable as salary income. Added to total salary for the year and taxed at applicable slab rates. TDS is deducted by the employer when paying. No separate exemption exists. The employer can claim bonus paid as a business expenditure under Section 36(1)(ii) of the Income Tax Act. Bonus received in arrears can be claimed for relief under Section 89(1).</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is set-on and set-off?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Set-on: excess allocable surplus (above 20% bonus) carried forward up to 4 years for future bonus payments. Set-off: deficiency when allocable surplus is below minimum bonus — the shortfall is carried forward and adjusted against future surplus, also up to 4 years. Employers maintain Form A (surplus) and Form B (set-on/set-off). This ensures employees benefit from cyclical profitability over time.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are penalties for non-payment?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Up to 6 months imprisonment or &#8377;1,000 fine or both under Section 28. The Chief Labour Commissioner can direct payment with interest. Employees can file complaints with the labour department. Employers must maintain Forms A, B, C and file Form D annual return by 1st February. Records must be retained for 8 years. Non-compliance during labour inspections leads to immediate show-cause notices.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Does bonus apply to contract workers?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — contract and temporary employees are eligible if they meet the criteria: salary up to &#8377;21,000, worked 30+ days, and establishment has 20+ employees. Under the Code on Social Security 2020, fixed-term employees get pro-rata bonus. The principal employer is liable for contract workers' bonus if the contractor fails to pay. This is often overlooked in compliance audits.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with bonus compliance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — a CA computes allocable surplus, maintains Forms A/B/C/D, calculates employee-wise bonus with pro-rata, files annual returns with the labour department, and ensures timely payment. Patron Accounting provides complete payroll compliance including bonus, EPF, ESI, PT, and TDS for businesses across Pune, Mumbai, Delhi, and Gurugram.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Bonus Compliance Help?</h3>
                <p>We compute allocable surplus, maintain registers, calculate employee-wise bonus, and file Form D returns.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20statutory%20bonus%20computation.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/pf-calculator" class="sidebar-link">PF Compliance <span class="arrow">&rarr;</span></a>
                <a href="/esic-calculation-and-compliance-services" class="sidebar-link">ESIC Compliance <span class="arrow">&rarr;</span></a>
                <a href="/gratuity-calculation-and-compliance-services" class="sidebar-link">Gratuity Services <span class="arrow">&rarr;</span></a>
                <a href="/professional-tax-pt-inr-calculator-compliance-services" class="sidebar-link">Professional Tax <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/payroll-cost-calculator" class="sidebar-link">Payroll Cost Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/epf-pf-calculator" class="sidebar-link">EPF/PF Calculator <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/cost-to-company-ctc-components-calculation-and-salary-breakup-explained" class="sidebar-link">CTC Components Explained <span class="arrow">&rarr;</span></a>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

<script>
        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function calcBonus() {
            const basicDA = parseFloat(document.getElementById('basicDA').value);
            const workDays = parseInt(document.getElementById('workingDays').value);
            const totalDays = parseInt(document.getElementById('totalWorkDays').value);
            const numEmp = Math.max(1, parseInt(document.getElementById('numEmployees').value) || 1);

            if (isNaN(basicDA) || basicDA <= 0) { alert('Please enter monthly Basic + DA.'); return; }
            if (isNaN(workDays) || workDays < 30) { alert('Working days must be at least 30 to be eligible.'); return; }

            const eligible = basicDA <= 21000;

            let h = '';

            if (!eligible) {
                h += '<div style="text-align:center;margin-bottom:16px;"><span class="eligibility-badge not-eligible">\u2717 Not Eligible \u2014 Basic + DA exceeds \u20B921,000/month</span></div>';
                h += '<div class="callout"><p>Your salary of ' + fmt(basicDA) + '/month exceeds the \u20B921,000 eligibility ceiling under the Payment of Bonus Act, 1965. Statutory bonus is not applicable. Your employer may still pay an ex-gratia or performance bonus at their discretion, but it is not legally mandated.</p></div>';
                document.getElementById('bonusOutput').innerHTML = h;
                document.getElementById('resultSection').classList.add('visible');
                document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                return;
            }

            h += '<div style="text-align:center;margin-bottom:16px;"><span class="eligibility-badge eligible">\u2713 Eligible for Statutory Bonus under the Payment of Bonus Act, 1965</span></div>';

            // Calculation salary cap
            const calcSalary = Math.min(basicDA, 7000);
            const annualBase = calcSalary * 12;
            const proRataFactor = workDays / totalDays;

            const minBonusFull = Math.max(100, Math.round(annualBase * 0.0833));
            const maxBonusFull = Math.round(annualBase * 0.20);
            const minBonusProRata = Math.max(100, Math.round(minBonusFull * proRataFactor));
            const maxBonusProRata = Math.round(maxBonusFull * proRataFactor);

            const isProRata = workDays < totalDays;

            // Range cards
            h += '<div class="bonus-range">';
            h += '<div class="range-card highlight"><div class="range-label">Minimum Bonus (8.33%)</div><div class="range-value">' + fmt(isProRata ? minBonusProRata : minBonusFull) + '</div><div class="range-pct">' + (isProRata ? 'Pro-rata' : 'Full year') + '</div></div>';
            h += '<div class="range-card"><div class="range-label">Maximum Bonus (20%)</div><div class="range-value">' + fmt(isProRata ? maxBonusProRata : maxBonusFull) + '</div><div class="range-pct">' + (isProRata ? 'Pro-rata' : 'If surplus permits') + '</div></div>';
            h += '</div>';

            // Summary cards
            h += '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Actual Basic + DA</div><div class="result-value">' + fmt(basicDA) + '/mo</div></div>';
            h += '<div class="result-card"><div class="result-label">Calculation Salary</div><div class="result-value">' + fmt(calcSalary) + '/mo' + (basicDA > 7000 ? ' (capped)' : '') + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Annual Base</div><div class="result-value">' + fmt(annualBase) + '</div></div>';
            if (isProRata) h += '<div class="result-card"><div class="result-label">Pro-Rata Factor</div><div class="result-value">' + workDays + '/' + totalDays + ' (' + Math.round(proRataFactor * 100) + '%)</div></div>';
            h += '</div>';

            // Breakdown
            h += '<div class="result-breakdown" style="margin-top:16px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label">Monthly Basic + DA</span><span class="breakdown-value">' + fmt(basicDA) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Eligibility Ceiling</span><span class="breakdown-value">\u20B921,000 \u2713</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Calculation Salary (capped)</span><span class="breakdown-value">' + fmt(calcSalary) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Annual Calculation Base</span><span class="breakdown-value">' + fmt(annualBase) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Working Days</span><span class="breakdown-value">' + workDays + ' of ' + totalDays + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Minimum Bonus (8.33%)</strong></span><span class="breakdown-value"><strong>' + fmt(isProRata ? minBonusProRata : minBonusFull) + '/yr</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Maximum Bonus (20%)</strong></span><span class="breakdown-value"><strong>' + fmt(isProRata ? maxBonusProRata : maxBonusFull) + '/yr</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Monthly Equivalent (Min)</span><span class="breakdown-value">' + fmt((isProRata ? minBonusProRata : minBonusFull) / 12) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Payment Deadline</span><span class="breakdown-value">30th November 2026</span></div>';
            h += '</div>';

            // Team cost
            if (numEmp > 1) {
                const teamMin = (isProRata ? minBonusProRata : minBonusFull) * numEmp;
                const teamMax = (isProRata ? maxBonusProRata : maxBonusFull) * numEmp;
                h += '<div style="background:linear-gradient(135deg,var(--primary-dark),var(--primary));color:#fff;border-radius:var(--radius-lg);padding:24px;margin-top:20px;">';
                h += '<h3 style="color:#fff;margin-bottom:8px;">Employer Bonus Liability \u2014 ' + numEmp + ' Employees</h3>';
                h += '<div style="font-family:var(--font-mono);font-size:24px;font-weight:700;color:var(--accent-light);">' + fmt(teamMin) + ' \u2013 ' + fmt(teamMax) + '</div>';
                h += '<p style="color:rgba(255,255,255,0.8);font-size:14px;margin-top:8px;">Minimum to maximum annual bonus liability (assuming same salary for all)</p>';
                h += '</div>';
            }

            if (basicDA > 7000) {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>Salary Cap Applied:</strong> Your Basic + DA of ' + fmt(basicDA) + ' exceeds the \u20B97,000 calculation cap. Bonus is calculated on \u20B97,000 only (or minimum wage if higher). All employees earning \u20B97,001\u2013\u20B921,000 receive the same bonus amount regardless of actual salary. This is a deliberate design of the Act.</p></div>';
            }

            document.getElementById('bonusOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() { document.getElementById('basicDA').value='';document.getElementById('workingDays').value='240';document.getElementById('totalWorkDays').value='240';document.getElementById('numEmployees').value='1';document.getElementById('resultSection').classList.remove('visible'); }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('basicDA').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcBonus(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>

 @endsection   
