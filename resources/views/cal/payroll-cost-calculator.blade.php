@extends('layouts.app')
@section('meta')
    <title>Payroll Cost Calculator | Employer Cost in India</title>
    <meta name="description" content="Payroll cost calculator shows the true employer cost of hiring in India: CTC, EPF, ESI, gratuity, bonus and professional tax in one clear view. Budget now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/payroll-cost-calculator">
    <meta property="og:title" content="Payroll Cost Calculator &mdash; Employer Cost India 2026">
    <meta property="og:description" content="See the true cost of hiring &mdash; CTC, EPF, ESI, gratuity, bonus, and professional tax in one calculator.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/payroll-cost-calculator">
    <meta property="og:image" content="/tools/payroll-cost-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Cost Calculator &mdash; Employer Cost India 2026">
    <meta name="twitter:description" content="True cost of hiring in India: CTC + EPF + ESI + gratuity + bonus + PT. Plan now!">
    <meta name="twitter:image" content="/tools/payroll-cost-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "Payroll Cost Calculator India",
      "description": "Payroll Cost Calculator computes the total employer cost of hiring in India including CTC breakdown, employer EPF contribution (12% of basic), employer ESI contribution (3.25% if applicable), gratuity provision (4.81% of basic), statutory bonus, professional tax, and EDLI charges. Shows per-employee and multi-employee cost projections for budgeting and workforce planning.",
      "url": "/tools/payroll-cost-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "Payroll Cost Calculator", "item": "/tools/payroll-cost-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "What is the total employer cost beyond CTC in India?", "acceptedAnswer": { "@type": "Answer", "text": "The total employer cost in India is typically 18 to 22 percent above the employee gross salary. This includes employer EPF at 12 percent of basic plus admin charges at 0.5 percent, employer ESI at 3.25 percent of gross wages if applicable, gratuity provision at 4.81 percent of basic, EDLI contribution at 0.5 percent, and statutory bonus at 8.33 percent of basic where applicable. These are in addition to the CTC amount." } },
      { "@type": "Question", "name": "How is employer EPF contribution calculated?", "acceptedAnswer": { "@type": "Answer", "text": "Employer EPF contribution is 12 percent of basic salary plus dearness allowance. Of this, 8.33 percent goes to Employee Pension Scheme capped at Rs 15,000 basic and 3.67 percent to the EPF account. Additionally, employers pay 0.5 percent towards EDLI insurance and 0.5 percent as EPF administrative charges. The total employer liability towards EPF ecosystem is approximately 13 percent of basic salary." } },
      { "@type": "Question", "name": "When is ESI applicable and how much does the employer pay?", "acceptedAnswer": { "@type": "Answer", "text": "ESI is applicable when gross wages are Rs 21,000 or below per month for establishments with 10 or more employees. The employer pays 3.25 percent of gross wages as ESI contribution. For a Rs 18,000 salary employee, the employer ESI cost is Rs 585 per month or Rs 7,020 per year. ESI is not applicable for employees earning above the ceiling from the date of joining." } },
      { "@type": "Question", "name": "What is gratuity provision and how does it affect payroll cost?", "acceptedAnswer": { "@type": "Answer", "text": "Gratuity provision is approximately 4.81 percent of basic salary provisioned annually by the employer. The formula is Basic times 15 divided by 26 for each year of service. Although gratuity is paid only after 5 years of service at separation, employers must provision the cost annually in their books per accounting standards. For a Rs 25,000 basic salary employee, the annual gratuity provision is approximately Rs 14,423." } },
      { "@type": "Question", "name": "Is statutory bonus part of employer payroll cost?", "acceptedAnswer": { "@type": "Answer", "text": "Under the Payment of Bonus Act 1965, employers must pay a minimum bonus of 8.33 percent of basic salary plus DA (or Rs 7,000, whichever is higher) to employees earning up to Rs 21,000 per month. The maximum bonus is 20 percent. This is a direct employer cost that is typically included in CTC. For employees above the bonus threshold, employers may still pay ex gratia or performance bonuses at their discretion." } },
      { "@type": "Question", "name": "How does professional tax affect payroll cost?", "acceptedAnswer": { "@type": "Answer", "text": "Professional tax is actually an employee deduction, not an employer cost. The employer deducts PT from the employee salary and deposits it with the state government. However, some employers bear the PT cost as a benefit, making it an additional employer cost of up to Rs 2,500 per employee per year. The employer must register for PT in each state where employees are located and file monthly or quarterly returns." } },
      { "@type": "Question", "name": "What is the cost difference between a Rs 5 lakh and Rs 15 lakh CTC employee?", "acceptedAnswer": { "@type": "Answer", "text": "For a Rs 5 lakh CTC employee, employer additional costs include EPF at around Rs 28,800, ESI at around Rs 15,600 (if eligible), gratuity at around Rs 9,600, totalling approximately Rs 54,000 additional. For a Rs 15 lakh employee, EPF is around Rs 21,600 (capped), no ESI (above ceiling), gratuity around Rs 28,800, totalling approximately Rs 50,400. The percentage overhead decreases as CTC increases due to PF and ESI capping." } },
      { "@type": "Question", "name": "What are EDLI and EPF admin charges?", "acceptedAnswer": { "@type": "Answer", "text": "EDLI (Employees Deposit Linked Insurance) is 0.5 percent of basic salary capped at Rs 15,000 contributing to a life insurance fund that pays Rs 7 lakh maximum on death during service. EPF administrative charges are 0.5 percent of basic salary with a minimum of Rs 75 per month. Both are employer-only contributions paid along with the monthly EPF challan. These are often overlooked but add to the total employer cost." } },
      { "@type": "Question", "name": "How do I calculate payroll cost for multiple employees?", "acceptedAnswer": { "@type": "Answer", "text": "Enter the number of employees and average CTC in our calculator to get the aggregate annual payroll cost. For a team of 10 employees at Rs 6 lakh average CTC, total employer cost would include the aggregate CTC plus total employer EPF, ESI, gratuity, admin charges, and any employer-borne benefits. Our calculator multiplies per-employee costs by headcount and shows the total annual payroll budget needed." } },
      { "@type": "Question", "name": "What payroll compliance deadlines must employers follow?", "acceptedAnswer": { "@type": "Answer", "text": "Key monthly deadlines: TDS deposit by 7th of next month, EPF and ESI contribution by 15th of next month, professional tax as per state rules. Quarterly: TDS return in Form 24Q within 31 days of quarter end. Annual: Form 16 issuance by 15th June, EPF annual return, ESI half-yearly returns by 12th November and 12th May, gratuity computation for eligible employees, and bonus payment per the Payment of Bonus Act." } },
      { "@type": "Question", "name": "How do the new Labour Codes affect payroll costs?", "acceptedAnswer": { "@type": "Answer", "text": "The Code on Wages mandates that basic salary plus DA must be at least 50 percent of CTC. This increases the EPF and gratuity base, raising employer statutory costs by 3 to 5 percent of CTC. Employee take-home decreases but retirement benefits increase significantly. The Code on Social Security consolidates EPF, ESI, and gratuity under one framework. Implementation rules are being notified by states progressively." } },
      { "@type": "Question", "name": "Should I outsource payroll or manage it in-house?", "acceptedAnswer": { "@type": "Answer", "text": "For companies with fewer than 50 employees, outsourcing payroll to a CA firm is usually more cost-effective \u2014 outsourced payroll costs Rs 200 to 600 per employee per month versus hiring a dedicated payroll person at Rs 25,000 to 50,000 per month. Outsourcing also ensures compliance across EPF, ESI, PT, and TDS without the employer needing to track changing regulations. Patron Accounting provides end-to-end payroll outsourcing for Indian businesses." } },
      { "@type": "Question", "name": "Can Patron Accounting handle my payroll?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, Patron Accounting provides complete payroll processing including salary computation, EPF and ESI challan filing, TDS computation and deposit, professional tax compliance across multiple states, Form 16 generation, and payslip distribution. We handle payroll for startups to mid-size companies across India with offices in Pune, Mumbai, Delhi, and Gurugram. Monthly payroll processing starts at competitive rates." } }
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
    
        .cost-stack { margin-top: 20px; }
        .cost-bar { display: flex; align-items: center; margin-bottom: 6px; }
        .cost-bar-label { width: 180px; font-size: 13px; color: var(--text-secondary); flex-shrink: 0; }
        @media (max-width: 500px) { .cost-bar-label { width: 120px; font-size: 12px; } }
        .cost-bar-fill { height: 28px; border-radius: 6px; display: flex; align-items: center; padding: 0 10px; font-size: 12px; font-weight: 700; color: #fff; min-width: 60px; transition: width 0.5s ease; }
        .cost-bar-fill.basic { background: var(--primary); }
        .cost-bar-fill.hra { background: #0284C7; }
        .cost-bar-fill.special { background: #7C3AED; }
        .cost-bar-fill.epf { background: #059669; }
        .cost-bar-fill.esi { background: #D97706; }
        .cost-bar-fill.gratuity { background: #DC2626; }
        .cost-bar-fill.bonus { background: #DB2777; }
        .cost-bar-fill.edli { background: #6B7280; }
        .team-multiplier { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 24px; margin-top: 20px; }
        .team-multiplier h3 { color: #fff; margin-bottom: 12px; }
        .team-multiplier .team-amount { font-family: var(--font-mono); font-size: 28px; font-weight: 700; color: var(--accent-light); }
    
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
        <a href="#breakdown">Cost Breakdown</a>
        <a href="#compliance">Compliance</a>
        <a href="#outsource">Outsource vs In-House</a>
        <a href="#faqs">FAQs</a>
    </div></nav>
{{-- 
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        Payroll Cost Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Payroll Cost Calculator &mdash; <span>Employer Cost India 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This Payroll Cost Calculator shows the true cost of employing someone in India &mdash; not just CTC, but the full picture: employer EPF (12% + admin), ESI (3.25% if applicable), gratuity (4.81%), EDLI (0.5%), statutory bonus, and professional tax. Enter the gross salary and team size to see per-employee and total annual payroll cost. Employer statutory costs typically add 18-22% above gross salary. Built for HR managers, founders, and CFOs planning workforce budgets.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Total Employer Payroll Cost</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the employer cost formulas below.</div></noscript>

                <div class="calc-row">
                    <div class="form-group"><label for="grossSalary">Monthly Gross Salary (&#8377;)</label><input type="number" id="grossSalary" placeholder="e.g. 30000" min="0" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Fixed monthly salary (excl. bonus/variable)</div></div>
                    <div class="form-group"><label for="basicPct">Basic Salary (% of Gross)</label>
                        <select id="basicPct">
                            <option value="50">50% (New Labour Code compliant)</option>
                            <option value="40">40% (Common current practice)</option>
                            <option value="45">45%</option>
                            <option value="35">35%</option>
                        </select>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="pfOption">EPF Contribution</label>
                        <select id="pfOption">
                            <option value="statutory">Statutory (12% of &#8377;15,000 cap)</option>
                            <option value="actual">Actual (12% of full Basic)</option>
                        </select>
                    </div>
                    <div class="form-group"><label for="ptState">Professional Tax State</label>
                        <select id="ptState">
                            <option value="2500">Maharashtra / Karnataka / WB (&#8377;2,400-2,500/yr)</option>
                            <option value="2500">Tamil Nadu / Gujarat / AP / Telangana</option>
                            <option value="0">Delhi / Haryana / UP / Punjab (No PT)</option>
                        </select>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="numEmployees">Number of Employees</label><input type="number" id="numEmployees" value="1" min="1" max="10000" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">For total team cost projection</div></div>
                    <div class="form-group"><label>Include Statutory Bonus?</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="yes" onclick="setBonus(this)">Yes<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">8.33% of Basic</small></button>
                            <button type="button" class="toggle-btn" data-value="no" onclick="setBonus(this)">No<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Exempt / above ceiling</small></button>
                        </div>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calcPayroll()">Calculate Employer Cost</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="payrollOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <section class="content-section" id="breakdown">
                <h2>Understanding Employer Payroll Costs in India</h2>
                <p>When you hire an employee in India, the actual cost to the company extends well beyond the gross salary. The <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>, <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">ESIC</a>, and various labour laws mandate contributions that typically add 18-22% to the gross salary. Here is what makes up the total employer cost:</p>

                <div class="formula-box">
                    <span class="label">Total Employer Cost = Gross Salary + Employer Contributions</span><br><br>
                    Employer EPF: 12% of Basic (3.67% to EPF + 8.33% to EPS)<br>
                    EPF Admin Charges: 0.5% of Basic (min &#8377;75/mo)<br>
                    EDLI: 0.5% of Basic (capped at &#8377;15,000)<br>
                    Employer ESI: 3.25% of Gross (if wages &le; &#8377;21,000)<br>
                    Gratuity Provision: ~4.81% of Basic<br>
                    Statutory Bonus: 8.33% of Basic (if applicable)<br><br>
                    <span class="label">Typical overhead: 18-22% above gross salary</span>
                </div>

                <h3>Why CTC &ne; Total Employer Cost</h3>
                <p>CTC (Cost to Company) as stated in offer letters usually includes employer EPF, gratuity, and bonus. But it often excludes EPF admin charges (0.5%), EDLI (0.5%), and sometimes ESI employer share. The true employer cost can be 2-5% higher than the stated CTC. This matters when budgeting for new hires, especially at scale. Under the new <a href="https://labour.gov.in/" target="_blank" rel="noopener">Code on Wages</a>, basic salary must be at least 50% of CTC, increasing the EPF and gratuity base and further raising statutory costs.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> When comparing hiring costs across India versus other countries, always use the total employer cost &mdash; not CTC or gross salary. A &#8377;12 LPA CTC employee actually costs the employer approximately &#8377;13.5-14 LPA when including all statutory overheads, admin charges, and compliance costs. Factor this into your annual workforce budget. Verify current rates at the <a href="https://www.epfindia.gov.in/site_docs/PDFs/MiscPDFs/ContributionRate.pdf" target="_blank" rel="noopener">EPFO contribution rate chart</a>.</p>
                </div>
            </section>

            <section class="content-section" id="compliance">
                <h2>Monthly Payroll Compliance Deadlines</h2>
                <p>Missing deadlines attracts penalties and interest. Here are the critical dates every employer must track:</p>

                <table class="rate-table">
                    <thead><tr><th>Obligation</th><th>Deadline</th><th>Penalty for Delay</th></tr></thead>
                    <tbody>
                        <tr><td>Salary Payment</td><td>7th of next month (< 1,000 employees)</td><td>Prosecution under Payment of Wages Act</td></tr>
                        <tr><td>TDS Deposit</td><td>7th of next month</td><td>1.5%/month interest + &#8377;200/day penalty</td></tr>
                        <tr><td>EPF/EDLI Payment</td><td>15th of next month</td><td>12% p.a. interest + damages up to 100%</td></tr>
                        <tr><td>ESI Payment</td><td>15th of next month</td><td>12% p.a. simple interest</td></tr>
                        <tr><td>Professional Tax</td><td>State-specific (usually month-end)</td><td>1-1.5%/month interest + penalty</td></tr>
                        <tr><td>TDS Return (24Q)</td><td>31 days after quarter-end</td><td>&#8377;200/day late fee</td></tr>
                        <tr><td>Form 16</td><td>15th June annually</td><td>&#8377;100/day per employee</td></tr>
                    </tbody>
                </table>

                <p>Employers operating in multiple states must track different professional tax rates, minimum wages, and Shops & Establishments Act requirements for each location. This is where <a href="/payroll-services" target="_blank" rel="noopener">professional payroll services</a> provide significant value &mdash; ensuring compliance across jurisdictions without the employer needing to track changing regulations in each state.</p>
            </section>

            <section class="content-section" id="outsource">
                <h2>Outsource Payroll vs In-House: Cost Comparison</h2>
                <p>For most Indian SMEs, outsourcing payroll to a <a href="https://www.icai.org/" target="_blank" rel="noopener">CA firm</a> or payroll provider is more cost-effective than managing it in-house:</p>

                <table class="rate-table">
                    <thead><tr><th>Factor</th><th>In-House</th><th>Outsourced (CA Firm)</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll Person</td><td>&#8377;25,000-50,000/mo</td><td>Included</td></tr>
                        <tr><td>Software</td><td>&#8377;50,000-2,00,000/yr</td><td>Included</td></tr>
                        <tr><td>Per Employee Cost</td><td>&#8377;500-1,500/mo (amortised)</td><td>&#8377;200-600/mo</td></tr>
                        <tr><td>Multi-State PT</td><td>Manual tracking</td><td>Automated</td></tr>
                        <tr><td>Compliance Risk</td><td>Owner bears penalty</td><td>Shared accountability</td></tr>
                        <tr><td>Best For</td><td>50+ employees</td><td>5-50 employees</td></tr>
                    </tbody>
                </table>

                <div class="callout">
                    <p><strong>Let Us Handle Your Payroll.</strong> Patron Accounting provides end-to-end payroll processing &mdash; salary computation, EPF/ESI challan filing, TDS deposit, professional tax across states, Form 16, and payslip generation. We serve startups to mid-size companies across Pune, Mumbai, Delhi, and Gurugram. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20payroll%20processing%20services.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get a payroll quote &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Payroll Costs</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the total employer cost beyond CTC?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Employer costs add 18-22% above gross salary: EPF at 12% of basic + 0.5% admin charges, ESI at 3.25% of gross (if eligible), gratuity at 4.81% of basic, EDLI at 0.5%, and statutory bonus at 8.33%. Some of these are included in CTC, but admin charges and EDLI are often excluded, making the true cost 2-5% higher than stated CTC.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is employer EPF contribution calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Employer EPF is 12% of basic + DA: 8.33% to EPS (capped at &#8377;15,000 basic = max &#8377;1,250/mo) and 3.67% to EPF. Plus 0.5% EDLI insurance and 0.5% admin charges (min &#8377;75/mo). Total employer EPF ecosystem cost is approximately 13% of basic. All paid via the monthly EPFO ECR challan by the 15th of next month.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>When does ESI apply?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ESI applies when gross wages are &#8377;21,000/month or below for establishments with 10+ employees. Employer pays 3.25% of gross wages. For a &#8377;18,000 salary, that is &#8377;585/month or &#8377;7,020/year per employee. ESI does not apply if the employee earns above the ceiling from the joining date &mdash; this is a significant cost factor when structuring salaries just above or below the threshold.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is gratuity provision?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Gratuity provision is ~4.81% of basic salary set aside annually. Formula: Basic &times; 15 &divide; 26 per year of service. Though paid only after 5 years at separation, employers must provision it annually per accounting standards. For &#8377;25,000 basic, the annual provision is ~&#8377;14,423. Under the new Labour Codes, gratuity may apply after just 1 year for fixed-term contracts.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is statutory bonus part of payroll cost?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; under the Payment of Bonus Act, minimum 8.33% of basic (or &#8377;7,000, whichever is higher) must be paid to employees earning up to &#8377;21,000/month. Maximum is 20%. This is usually included in CTC but is a real employer cost. Employees above the threshold may receive ex-gratia bonus at the employer's discretion, which is an additional optional cost.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does professional tax affect cost?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">PT is an employee deduction (max &#8377;2,500/year), not an employer cost. However, some employers bear it as a benefit &mdash; adding &#8377;2,500/year per employee. The real employer cost is the compliance burden: registration in each state, monthly deduction computation, timely deposit, and return filing. For multi-state companies, this is significant.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are EDLI and EPF admin charges?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EDLI (Employees Deposit Linked Insurance) is 0.5% of basic (capped at &#8377;15,000) providing life insurance of up to &#8377;7 lakh on death during service. EPF admin charges are 0.5% of basic (min &#8377;75/mo). Both are employer-only costs paid with the EPF challan. They are often excluded from CTC but are real costs that add to the employer's total payroll liability.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How do I calculate cost for multiple employees?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Enter the headcount in our calculator to multiply per-employee costs. For a team of 10 at &#8377;30,000 gross, the total annual cost includes 10 &times; gross salary + 10 &times; employer EPF + 10 &times; ESI (if applicable) + 10 &times; gratuity + bonus + EDLI. The team multiplier at the bottom of our results shows the total annual payroll budget needed for your entire workforce.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the payroll compliance deadlines?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Monthly: salary by 7th, TDS deposit by 7th, EPF/ESI by 15th, PT per state rules. Quarterly: TDS return (24Q) within 31 days. Annual: Form 16 by 15th June, EPF annual return, ESI half-yearly returns by 12th Nov/May. Late EPF attracts 12% interest + damages up to 100%. Late TDS attracts 1.5%/month interest + &#8377;200/day penalty.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How do new Labour Codes affect costs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Code on Wages mandates basic + DA &ge; 50% of CTC, increasing the EPF and gratuity base by 10-25% for companies currently at 40% basic. This raises employer statutory costs by 3-5% of CTC. Employee take-home decreases but retirement corpus grows significantly. States are progressively notifying implementation rules &mdash; check your state's status.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Outsource payroll or manage in-house?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For fewer than 50 employees, outsourcing is typically cheaper: &#8377;200-600/employee/month vs hiring a dedicated payroll person at &#8377;25,000-50,000/month. Outsourcing also covers compliance across EPF, ESI, PT, and TDS without the employer tracking regulatory changes. For 50+ employees, in-house with payroll software may become viable. Many companies use a hybrid model.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can Patron Accounting handle my payroll?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; we provide end-to-end payroll: salary computation, EPF/ESI challan filing, TDS deposit, multi-state PT, Form 16, payslips, and compliance calendar management. We serve startups to mid-size companies across Pune, Mumbai, Delhi, and Gurugram. Monthly payroll processing with full statutory compliance at competitive rates.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Outsource Your Payroll</h3>
                <p>From &#8377;200/employee/month. EPF, ESI, PT, TDS &mdash; all handled. Focus on business, not compliance.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20payroll%20processing%20services%20for%20my%20team.%20Please%20share%20pricing." target="_blank" rel="noopener" class="cta-btn">Get Payroll Quote &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/payroll-processing-and-management-services" class="sidebar-link">Payroll Management <span class="arrow">&rarr;</span></a>
                <a href="/pf-calculator" class="sidebar-link">PF Compliance <span class="arrow">&rarr;</span></a>
                <a href="/esic-calculation-and-compliance-services" class="sidebar-link">ESIC Compliance <span class="arrow">&rarr;</span></a>
                <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/epf-pf-calculator" class="sidebar-link">EPF/PF Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/esi-calculator" class="sidebar-link">ESI Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/professional-tax-calculator" class="sidebar-link">Professional Tax Calculator <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/cost-to-company-ctc-components-calculation-and-salary-breakup-explained" class="sidebar-link">CTC Components Explained <span class="arrow">&rarr;</span></a>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

<script>
        let includeBonus = true;
        function setBonus(btn) { const el=btn.closest('.toggle-btn')||btn;includeBonus=el.dataset.value==='yes';el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));el.classList.add('active'); }
        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function calcPayroll() {
            const gross = parseFloat(document.getElementById('grossSalary').value);
            if (isNaN(gross) || gross <= 0) { alert('Please enter gross monthly salary.'); return; }
            const basicPct = parseInt(document.getElementById('basicPct').value) / 100;
            const pfOption = document.getElementById('pfOption').value;
            const ptAnnual = parseInt(document.getElementById('ptState').value);
            const numEmp = Math.max(1, parseInt(document.getElementById('numEmployees').value) || 1);

            const basic = gross * basicPct;
            const hra = basic * 0.50;
            const specialAllow = gross - basic - hra;

            // Employer EPF
            const pfBase = pfOption === 'statutory' ? Math.min(basic, 15000) : basic;
            const employerEPF = Math.round(pfBase * 0.12);
            const epsContrib = Math.round(Math.min(basic, 15000) * 0.0833);
            const employerEPFActual = employerEPF; // total 12% from employer
            const edli = Math.round(Math.min(basic, 15000) * 0.005);
            const adminCharges = Math.max(75, Math.round(pfBase * 0.005));

            // ESI (if gross <= 21000)
            const esiApplicable = gross <= 21000;
            const employerESI = esiApplicable ? Math.round(gross * 0.0325) : 0;
            const employeeESI = esiApplicable ? Math.round(gross * 0.0075) : 0;

            // Gratuity
            const gratuity = Math.round(basic * 0.0481);

            // Statutory Bonus
            const bonus = includeBonus ? Math.round(basic * 0.0833) : 0;

            // Employee deductions
            const employeePF = Math.round(pfBase * 0.12);
            const ptMonthly = Math.round(ptAnnual / 12);

            // Totals (monthly)
            const employerCosts = employerEPFActual + edli + adminCharges + employerESI + gratuity + bonus;
            const totalCTC = gross + employerCosts;
            const employeeInHand = gross - employeePF - employeeESI - ptMonthly; // before income tax
            const annualCTC = totalCTC * 12;
            const annualEmployerCosts = employerCosts * 12;
            const annualGross = gross * 12;

            // Overhead percentage
            const overheadPct = ((employerCosts / gross) * 100).toFixed(1);

            // Max bar width reference
            const maxVal = totalCTC;

            let h = '';

            // Summary cards
            h += '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Monthly Gross</div><div class="result-value">' + fmt(gross) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Employer Statutory Cost</div><div class="result-value">+' + fmt(employerCosts) + '<small style="display:block;font-size:11px;color:rgba(255,255,255,0.7);font-family:var(--font-body);font-weight:400;">+' + overheadPct + '% overhead</small></div></div>';
            h += '<div class="result-card highlight"><div class="result-label">Total CTC / Month</div><div class="result-value">' + fmt(totalCTC) + '</div></div>';
            h += '<div class="result-card highlight"><div class="result-label">Total CTC / Year</div><div class="result-value">' + fmt(annualCTC) + '</div></div>';
            h += '</div>';

            // Visual cost bars
            h += '<div class="cost-stack">';
            h += '<div style="font-size:13px;font-weight:700;color:var(--primary-dark);margin-bottom:10px;">MONTHLY COST BREAKDOWN</div>';
            const barData = [
                ['Basic Salary', basic, 'basic'],
                ['HRA', hra, 'hra'],
                ['Special Allowance', specialAllow > 0 ? specialAllow : 0, 'special'],
                ['Employer EPF (12%)', employerEPFActual, 'epf'],
                ['EDLI + Admin', edli + adminCharges, 'edli'],
                ['Gratuity (4.81%)', gratuity, 'gratuity'],
            ];
            if (esiApplicable) barData.push(['Employer ESI (3.25%)', employerESI, 'esi']);
            if (bonus > 0) barData.push(['Statutory Bonus (8.33%)', bonus, 'bonus']);

            barData.forEach(([label, val, cls]) => {
                const pct = Math.max(5, (val / maxVal) * 100);
                h += '<div class="cost-bar"><span class="cost-bar-label">' + label + '</span><div class="cost-bar-fill ' + cls + '" style="width:' + pct + '%;">' + fmt(val) + '</div></div>';
            });
            h += '</div>';

            // Detailed breakdown
            h += '<div class="result-breakdown" style="margin-top:20px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label" style="font-weight:700;">EMPLOYEE EARNINGS</span><span class="breakdown-value"></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Basic Salary (' + (basicPct*100) + '%)</span><span class="breakdown-value">' + fmt(basic) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">HRA (50% of Basic)</span><span class="breakdown-value">' + fmt(hra) + '</span></div>';
            if (specialAllow > 0) h += '<div class="breakdown-row"><span class="breakdown-label">Special Allowance</span><span class="breakdown-value">' + fmt(specialAllow) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Gross Salary</strong></span><span class="breakdown-value"><strong>' + fmt(gross) + '/mo</strong></span></div>';

            h += '<div class="breakdown-row" style="margin-top:12px;"><span class="breakdown-label" style="font-weight:700;">EMPLOYER CONTRIBUTIONS</span><span class="breakdown-value"></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employer EPF (12%)</span><span class="breakdown-value">' + fmt(employerEPFActual) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">EDLI (0.5%)</span><span class="breakdown-value">' + fmt(edli) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">EPF Admin (0.5%)</span><span class="breakdown-value">' + fmt(adminCharges) + '</span></div>';
            if (esiApplicable) h += '<div class="breakdown-row"><span class="breakdown-label">Employer ESI (3.25%)</span><span class="breakdown-value">' + fmt(employerESI) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Gratuity (~4.81%)</span><span class="breakdown-value">' + fmt(gratuity) + '</span></div>';
            if (bonus > 0) h += '<div class="breakdown-row"><span class="breakdown-label">Statutory Bonus (8.33%)</span><span class="breakdown-value">' + fmt(bonus) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Total Employer Cost</strong></span><span class="breakdown-value"><strong>+' + fmt(employerCosts) + '/mo</strong></span></div>';

            h += '<div class="breakdown-row" style="margin-top:12px;"><span class="breakdown-label" style="font-weight:700;">EMPLOYEE DEDUCTIONS</span><span class="breakdown-value"></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employee EPF (12%)</span><span class="breakdown-value">\u2212' + fmt(employeePF) + '</span></div>';
            if (esiApplicable) h += '<div class="breakdown-row"><span class="breakdown-label">Employee ESI (0.75%)</span><span class="breakdown-value">\u2212' + fmt(employeeESI) + '</span></div>';
            if (ptMonthly > 0) h += '<div class="breakdown-row"><span class="breakdown-label">Professional Tax</span><span class="breakdown-value">\u2212' + fmt(ptMonthly) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Pre-Tax In-Hand (approx)</strong></span><span class="breakdown-value"><strong>' + fmt(employeeInHand) + '/mo</strong></span></div>';
            h += '</div>';

            // Team multiplier
            if (numEmp > 1) {
                h += '<div class="team-multiplier">';
                h += '<h3>Team Cost \u2014 ' + numEmp + ' Employees</h3>';
                h += '<div class="team-amount">' + fmt(annualCTC * numEmp) + '/year</div>';
                h += '<p style="color:rgba(255,255,255,0.8);font-size:14px;margin-top:8px;">Monthly payroll outflow: ' + fmt(totalCTC * numEmp) + ' | Employer statutory overhead: ' + fmt(employerCosts * numEmp) + '/mo</p>';
                h += '</div>';
            }

            if (!esiApplicable) {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>ESI Not Applicable:</strong> Gross salary of ' + fmt(gross) + ' exceeds the \u20B921,000 ESI ceiling. Employer ESI cost of 3.25% is not applicable, saving ' + fmt(Math.round(gross * 0.0325)) + '/month. Consider providing group health insurance as an alternative employee benefit.</p></div>';
            }

            document.getElementById('payrollOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() { document.getElementById('grossSalary').value='';document.getElementById('numEmployees').value='1';document.getElementById('basicPct').value='50';document.getElementById('pfOption').value='statutory';document.getElementById('ptState').value='2500';includeBonus=true;document.querySelectorAll('.toggle-btn').forEach((b,i)=>b.classList.toggle('active',i===0));document.getElementById('resultSection').classList.remove('visible'); }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('grossSalary').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcPayroll(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>
@endsection