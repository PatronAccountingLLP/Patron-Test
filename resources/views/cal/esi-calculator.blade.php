@extends('layouts.app')
@section('meta')
    <title>ESI Calculator India | ESIC Contribution &amp; Eligibility</title>
    <meta name="description" content="ESI calculator for India: compute employee (0.75%) and employer (3.25%) ESIC contributions on gross wages up to the Rs 21,000 ceiling. Check eligibility now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/esi-calculator">
    <meta property="og:title" content="ESI Calculator &mdash; ESIC Contribution & Eligibility 2026">
    <meta property="og:description" content="Calculate ESI contributions &mdash; 0.75% employee + 3.25% employer on wages up to &#8377;21,000 ceiling.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/esi-calculator">
    <meta property="og:image" content="/tools/esi-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESI Calculator &mdash; ESIC Contribution & Eligibility 2026">
    <meta name="twitter:description" content="ESI employee 0.75% + employer 3.25% on wages up to &#8377;21,000. Calculate instantly!">
    <meta name="twitter:image" content="/tools/esi-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "ESI Calculator India",
      "description": "ESI Calculator computes monthly Employee State Insurance contributions for both employee at 0.75 percent and employer at 3.25 percent of gross wages. Checks eligibility against the Rs 21,000 wage ceiling, calculates contribution period totals, shows annual employer cost, and explains ESIC benefits including sickness, maternity, disability, and dependant benefits under the ESI Act 1948.",
      "url": "/tools/esi-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "ESI Calculator", "item": "/tools/esi-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "What is ESI and who is eligible?", "acceptedAnswer": { "@type": "Answer", "text": "ESI (Employee State Insurance) is a social security scheme under the ESI Act 1948 managed by ESIC. It applies to establishments with 10 or more employees (20 in some states). All employees earning gross wages up to Rs 21,000 per month are covered. For persons with disability the ceiling is Rs 25,000. Once covered in a contribution period, the employee remains covered even if wages exceed the ceiling mid-period." } },
      { "@type": "Question", "name": "What are the current ESI contribution rates?", "acceptedAnswer": { "@type": "Answer", "text": "Since July 2019, the employee contributes 0.75 percent and the employer contributes 3.25 percent of gross wages, totalling 4 percent. Employees earning a daily average wage of Rs 176 or below are exempt from their 0.75 percent contribution but the employer must still pay the 3.25 percent share. These rates apply uniformly across all states where ESI is implemented." } },
      { "@type": "Question", "name": "What is the ESI wage ceiling?", "acceptedAnswer": { "@type": "Answer", "text": "The ESI wage ceiling is Rs 21,000 per month for regular employees and Rs 25,000 for persons with disability. Wages for ESI include basic pay, dearness allowance, city compensatory allowance, HRA, incentive allowance, attendance bonus, and meal allowance. Overtime wages, conveyance allowance, and annual bonus or gratuity are excluded from ESI wage calculation." } },
      { "@type": "Question", "name": "How is ESI calculated on salary?", "acceptedAnswer": { "@type": "Answer", "text": "ESI is calculated on gross wages which include basic salary, DA, HRA, city compensatory allowance, and other applicable allowances. Employee contribution equals 0.75 percent of gross wages. Employer contribution equals 3.25 percent of gross wages. For example, on Rs 18,000 gross wages: employee pays Rs 135, employer pays Rs 585, total Rs 720 per month. Contributions are rounded to the nearest rupee." } },
      { "@type": "Question", "name": "What are ESI contribution periods and benefit periods?", "acceptedAnswer": { "@type": "Answer", "text": "ESI divides the year into two contribution periods of six months each: April to September and October to March. Each has a corresponding benefit period: contributions from April to September provide benefits from January to June of the next year, and October to March contributions provide benefits from July to December. If wages cross Rs 21,000 during a period, contributions continue till the period ends." } },
      { "@type": "Question", "name": "What benefits does ESI provide to employees?", "acceptedAnswer": { "@type": "Answer", "text": "ESI provides sickness benefit at 70 percent of wages for up to 91 days per year, maternity benefit at full wages for 26 weeks, temporary disablement benefit at 90 percent of wages during injury recovery, permanent disablement benefit at 90 percent of wages proportionate to disability percentage, dependant benefit at 90 percent of wages to family on death due to employment injury, and funeral expenses of Rs 15,000." } },
      { "@type": "Question", "name": "What is included and excluded in ESI wages?", "acceptedAnswer": { "@type": "Answer", "text": "Included in ESI wages: basic pay, dearness allowance, city compensatory allowance, HRA, incentive allowance, attendance bonus, meal allowance, and suspension allowance. Excluded from ESI wages: annual bonus, retrenchment compensation, encashment of leave, gratuity, overtime wages, conveyance allowance paid for duty, washing allowance, and employer PF contribution." } },
      { "@type": "Question", "name": "What happens if ESI contribution is paid late?", "acceptedAnswer": { "@type": "Answer", "text": "Late payment of ESI contributions attracts simple interest at 12 percent per annum from the due date until actual payment. The employer is liable for both the employer and employee share. Additionally, ESIC can initiate recovery proceedings, impose penalties, and in severe cases prosecute the employer under Section 85 of the ESI Act. Payment must be made within 15 days of the month end." } },
      { "@type": "Question", "name": "Is ESI applicable if an employee earns above Rs 21,000?", "acceptedAnswer": { "@type": "Answer", "text": "If an employee earns above Rs 21,000 from the date of joining, ESI is not applicable. However, if wages cross Rs 21,000 during a contribution period (April to September or October to March) after initially being below the ceiling, the employee continues to be covered till the end of that contribution period. ESI deduction continues on the actual wages including the increased amount." } },
      { "@type": "Question", "name": "How do employers register for ESI?", "acceptedAnswer": { "@type": "Answer", "text": "Employers register online at the ESIC portal (esic.gov.in) by filing Form 1 with establishment details, PAN, address proof, registration certificate, and employee list. ESIC issues a 17-digit unique code number after verification. Registration must be done within 15 days of the Act becoming applicable. Each employee receives an ESI card or Pehchan card with their insurance number for availing benefits." } },
      { "@type": "Question", "name": "Can ESI and medical insurance coexist?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, ESI and private medical insurance can coexist. ESI provides basic medical coverage through ESIC dispensaries and hospitals. Private medical insurance provides coverage for private hospitals, higher room categories, and wider network. Many employers offer group health insurance in addition to ESI as an employee benefit. ESI premiums paid by the employer are not deductible from employee salary for income tax purposes." } },
      { "@type": "Question", "name": "How can I check my ESI balance and claim status?", "acceptedAnswer": { "@type": "Answer", "text": "Check ESI balance through the ESIC portal by logging in with your insurance number, through the UMANG app by searching for ESIC and selecting Claim Status, or by visiting the nearest ESIC branch office. Your employer provides the insurance number at the time of registration. Contribution details are updated monthly after the employer files the challan. Download the ESIC e-Pehchan card from the portal." } },
      { "@type": "Question", "name": "Can a CA help with ESIC compliance for my business?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a CA handles ESIC registration, monthly contribution calculation for all employees, challan generation and payment, half-yearly return filing, and ensures compliance with the ESI Act. Patron Accounting provides complete payroll processing including ESI, EPF, Professional Tax, and TDS for businesses across India. We also assist with ESIC inspections and dispute resolution." } }
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
        .benefit-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px; margin: 16px 0; }
        .benefit-card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius); padding: 16px; }
        .benefit-card h4 { font-size: 14px; color: var(--primary-dark); margin-bottom: 6px; }
        .benefit-card .benefit-pct { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary); }
        .benefit-card p { font-size: 12px; color: var(--text-muted); margin: 0; }
        .wage-bar { display: flex; height: 36px; border-radius: 8px; overflow: hidden; margin: 16px 0; font-size: 12px; font-weight: 700; }
        .wage-bar .emp-share { background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; }
        .wage-bar .empr-share { background: var(--accent); color: var(--primary-dark); display: flex; align-items: center; justify-content: center; }
    
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
        <a href="#how-esi-works">How ESI Works</a>
        <a href="#wages">Wage Components</a>
        <a href="#benefits">Benefits</a>
        <a href="#compliance">Compliance</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        ESI Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>ESI Calculator &mdash; <span>ESIC Contribution & Eligibility 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This ESI Calculator computes your monthly Employee State Insurance contributions &mdash; employee pays 0.75% and employer pays 3.25% of gross wages (total 4%). Applicable only if gross wages are &#8377;21,000/month or below (&#8377;25,000 for disabled persons). Enter your gross salary to instantly see the split, check eligibility, and get the half-yearly and annual totals. Also shows employer CTC impact and the 6 ESIC benefits you're entitled to.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate ESI Contribution</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the ESI formulas below.</div></noscript>

                <div class="calc-row">
                    <div class="form-group"><label for="grossWages">Gross Monthly Wages (&#8377;)</label><input type="number" id="grossWages" placeholder="e.g. 18000" min="0" step="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Basic + DA + HRA + CCA + applicable allowances</div></div>
                    <div class="form-group"><label for="numEmployees">Number of Employees (for employer cost)</label><input type="number" id="numEmployees" placeholder="e.g. 15" min="1" step="1" value="1" autocomplete="off"><div style="font-size:11px;color:var(--text-muted);margin-top:2px;">Total ESI-eligible employees</div></div>
                </div>

                <div class="form-group">
                    <label>Person with Disability?</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-value="no" onclick="setPWD(this)">No<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Ceiling &#8377;21,000</small></button>
                        <button type="button" class="toggle-btn" data-value="yes" onclick="setPWD(this)">Yes<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Ceiling &#8377;25,000</small></button>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calcESI()">Calculate ESI</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="esiOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <section class="content-section" id="how-esi-works">
                <h2>How Employee State Insurance Works</h2>
                <p>The <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">Employee State Insurance (ESI)</a> scheme is a self-financing social security programme under the <a href="https://www.indiacode.nic.in/handle/123456789/1554" target="_blank" rel="noopener">ESI Act, 1948</a>. It provides medical care and cash benefits to employees and their families during sickness, maternity, disability, and death due to employment injury. The scheme is managed by ESIC under the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Ministry of Labour & Employment</a>.</p>

                <div class="formula-box">
                    <span class="label">ESI Contribution Rates (w.e.f. 01.07.2019)</span><br><br>
                    Employee Contribution: <span class="label">0.75%</span> of gross wages<br>
                    Employer Contribution: <span class="label">3.25%</span> of gross wages<br>
                    Total: <span class="label">4.00%</span> of gross wages<br><br>
                    <span class="label">Wage Ceiling:</span> &#8377;21,000/month (&#8377;25,000 for PwD)<br>
                    <span class="label">Applicability:</span> 10+ employees (20+ in some states)<br>
                    <span class="label">Low Wage Exemption:</span> Daily avg wage &le; &#8377;176 &rarr; employee exempt, employer still pays
                </div>

                <h3>Contribution Periods & Benefit Periods</h3>
                <p>ESIC divides the year into two six-month contribution periods, each linked to a benefit period:</p>
                <table class="rate-table">
                    <thead><tr><th>Contribution Period</th><th>Benefit Period</th></tr></thead>
                    <tbody>
                        <tr><td>April &ndash; September</td><td>January &ndash; June (next year)</td></tr>
                        <tr><td>October &ndash; March</td><td>July &ndash; December (same year)</td></tr>
                    </tbody>
                </table>
                <p>If an employee's wages cross &#8377;21,000 during a contribution period, ESI deduction continues till the end of that period on the actual (higher) wages. The employee remains eligible for benefits during the corresponding benefit period.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> The contribution period linkage is critical for employees who get mid-year salary hikes. If wages cross &#8377;21,000 in July, ESI continues through September (end of Apr-Sep period). But if wages were already above &#8377;21,000 when the employee joined in July, ESI never applies. Verify the joining date and initial salary carefully. Check the <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">ESIC portal</a> for current implementation areas.</p>
                </div>
            </section>

            <section class="content-section" id="wages">
                <h2>What Counts as Wages for ESI?</h2>
                <p>Not all salary components are included in the ESI wage calculation. The <a href="https://www.indiacode.nic.in/handle/123456789/1554" target="_blank" rel="noopener">ESI Act</a> defines wages specifically:</p>

                <h3>Included in ESI Wages</h3>
                <p>Basic salary, dearness allowance (DA), city compensatory allowance (CCA), house rent allowance (HRA), incentive allowance, attendance bonus, meal/tiffin/food allowance, suspension allowance, lay-off compensation, children education allowance, and any other regular monthly payment that is part of the employment terms.</p>

                <h3>Excluded from ESI Wages</h3>
                <p>Annual bonus, retrenchment compensation, encashment of leave, gratuity, overtime wages, conveyance allowance paid exclusively for duty performance, washing allowance, employer PF contribution, ESIC contribution, and any ad-hoc or irregular payments. Understanding this distinction is essential &mdash; including wrong components inflates contributions, excluding valid ones risks non-compliance during <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">ESIC inspections</a>.</p>

                <div class="callout warn">
                    <p><strong>Important:</strong> If your establishment provides food allowance through a canteen or as a reimbursement (not cash), it may be excluded from ESI wages. However, if it is paid as a fixed monthly cash allowance, it is included. The treatment depends on the nature of payment, not the label. When in doubt, include it &mdash; under-reporting wages attracts penalties and back-contributions with 12% interest during ESIC audits.</p>
                </div>
            </section>

            <section class="content-section" id="benefits">
                <h2>ESIC Benefits for Employees</h2>
                <p>The ESI scheme provides six categories of benefits, making it one of the most comprehensive social security programmes for Indian workers:</p>

                <div class="benefit-cards">
                    <div class="benefit-card"><h4>Sickness Benefit</h4><div class="benefit-pct">70%</div><p>of wages for up to 91 days/year during certified illness</p></div>
                    <div class="benefit-card"><h4>Maternity Benefit</h4><div class="benefit-pct">100%</div><p>of wages for 26 weeks (full pay during maternity leave)</p></div>
                    <div class="benefit-card"><h4>Temporary Disability</h4><div class="benefit-pct">90%</div><p>of wages during recovery from employment injury</p></div>
                    <div class="benefit-card"><h4>Permanent Disability</h4><div class="benefit-pct">90%</div><p>of wages proportionate to disability % (lifelong)</p></div>
                    <div class="benefit-card"><h4>Dependant Benefit</h4><div class="benefit-pct">90%</div><p>of wages to family on death due to employment injury</p></div>
                    <div class="benefit-card"><h4>Funeral Expenses</h4><div class="benefit-pct">&#8377;15,000</div><p>lump sum towards funeral expenses on death</p></div>
                </div>

                <p>Additionally, ESIC provides free medical treatment at ESIC hospitals and dispensaries for the insured person and their family members. The <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">ESIC network</a> includes 159 hospitals, 42 annexes, and 1,500+ dispensaries across India. Employees can also access treatment at empanelled private hospitals through the ESIC tie-up hospital network.</p>
            </section>

            <section class="content-section" id="compliance">
                <h2>ESIC Compliance for Employers</h2>

                <h3>Registration</h3>
                <p>Employers must register on the <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">ESIC portal</a> within 15 days of the Act becoming applicable (10+ employees with at least one earning &le;&#8377;21,000). File Form 1 with establishment details, PAN, address proof, and employee list. ESIC issues a 17-digit unique code number. Each employee receives an ESI card (Pehchan card) for availing benefits.</p>

                <h3>Monthly Payment</h3>
                <p>Employers must deduct the employee contribution (0.75%) from wages, add the employer contribution (3.25%), and deposit the combined amount within 15 days of the month-end via the ESIC portal. Payment through SBI and other authorised banks is also accepted. Late payment attracts 12% simple interest per annum.</p>

                <h3>Return Filing</h3>
                <p>Half-yearly returns must be filed: by 12th November for the April-September period and by 12th May for the October-March period. The return includes wages paid, contributions made, and employee details for the period. Non-filing attracts penalties under <a href="https://www.indiacode.nic.in/handle/123456789/1554" target="_blank" rel="noopener">Section 85 of the ESI Act</a>.</p>

                <div class="callout">
                    <p><strong>Need ESIC Compliance Help?</strong> Patron Accounting handles ESIC registration, monthly challan computation and payment, half-yearly return filing, employee onboarding, and ESIC inspection support for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20ESIC%20compliance%20and%20payroll.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get ESIC compliance help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About ESI</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is ESI and who is eligible?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ESI is a social security scheme under the ESI Act 1948 managed by ESIC. It applies to establishments with 10+ employees (20+ in some states). All employees earning gross wages up to &#8377;21,000/month are covered (&#8377;25,000 for disabled persons). Once covered in a contribution period, coverage continues even if wages cross the ceiling mid-period.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the current ESI contribution rates?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Since July 2019: employee contributes 0.75% and employer contributes 3.25% of gross wages, totalling 4%. Employees earning daily average &le;&#8377;176 are exempt from the 0.75% but the employer must still pay 3.25%. These rates apply uniformly across all ESI-implemented states and areas.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the ESI wage ceiling?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">&#8377;21,000/month for regular employees, &#8377;25,000 for persons with disability. Wages include basic, DA, HRA, CCA, incentive allowance, meal allowance. Excluded: overtime, conveyance for duty, annual bonus, gratuity, employer PF, and irregular payments. ESI is calculated on the full gross wages (included components), not just basic salary.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is ESI calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">ESI is calculated on gross wages (included components). Employee: 0.75% of gross wages. Employer: 3.25% of gross wages. Example on &#8377;18,000 wages: employee pays &#8377;135, employer pays &#8377;585, total &#8377;720/month. Contributions are rounded to the nearest rupee. The employer deducts the employee share from salary and deposits both shares with ESIC.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are contribution and benefit periods?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Two contribution periods: April-September and October-March. Corresponding benefit periods: January-June (next year) and July-December (same year). If wages cross &#8377;21,000 during a contribution period, deductions continue till the period ends on actual wages. The employee remains covered for benefits during the corresponding benefit period.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What benefits does ESI provide?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Six benefits: sickness (70% wages, up to 91 days/year), maternity (100% wages, 26 weeks), temporary disablement (90% wages during injury recovery), permanent disablement (90% proportionate to disability), dependant benefit (90% to family on death from employment injury), and funeral expenses (&#8377;15,000 lump sum). Plus free medical care at ESIC hospitals for employee and family.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is included and excluded in ESI wages?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Included: basic, DA, CCA, HRA, incentive allowance, attendance bonus, meal allowance, suspension allowance. Excluded: annual bonus, gratuity, retrenchment compensation, leave encashment, overtime, conveyance for duty, washing allowance, employer PF. The distinction depends on nature of payment, not the label &mdash; cash food allowance is included, canteen facility is excluded.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens if ESI is paid late?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Late payment attracts 12% simple interest per annum from due date until payment. The employer is liable for both shares. ESIC can initiate recovery proceedings, impose penalties, and prosecute under Section 85. Payment must be within 15 days of month-end. During ESIC inspections, under-reporting wages or delayed payments are the most common findings.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is ESI applicable above &#8377;21,000 salary?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">If an employee earns above &#8377;21,000 from joining date, ESI does not apply. But if wages cross &#8377;21,000 during a contribution period (mid-year hike), ESI continues till the period ends on actual wages. After the period ends, if wages are still above the ceiling, ESI stops from the next contribution period. The employee retains benefit eligibility for the corresponding benefit period.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How do employers register for ESI?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Register online at esic.gov.in by filing Form 1 with establishment details, PAN, address proof, registration certificate, and employee list. ESIC issues a 17-digit code number. Register within 15 days of applicability. Each employee gets an ESI card (Pehchan card) with their insurance number for availing medical and cash benefits at ESIC facilities.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can ESI and medical insurance coexist?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; ESI provides basic coverage through ESIC hospitals and dispensaries. Private medical insurance covers private hospitals, higher room categories, and wider network. Many employers offer group health insurance alongside ESI. They serve different purposes &mdash; ESI is statutory social security while private insurance is a voluntary employee benefit. Both can be claimed simultaneously for different treatments.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How can I check my ESI balance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Check via ESIC portal with your insurance number, through the UMANG app (search ESIC &rarr; Claim Status), or visit the nearest ESIC branch. Your employer provides the insurance number at registration. Contribution details update monthly after employer files the challan. Download your e-Pehchan card from the ESIC portal for a digital copy of your ESI card.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with ESIC compliance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a CA handles ESIC registration, monthly contribution calculation, challan payment, half-yearly return filing, and ESIC inspection support. Patron Accounting provides complete payroll including ESI, EPF, Professional Tax, and TDS for businesses across India. We also assist with ESIC dispute resolution and benefit claims for employees.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need ESIC Compliance Help?</h3>
                <p>Our team handles ESIC registration, monthly challan filing, return submission, and inspections for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20ESIC%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/esic-calculation-and-compliance-services" class="sidebar-link">ESIC Compliance <span class="arrow">&rarr;</span></a>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/pf-calculator" class="sidebar-link">PF Compliance <span class="arrow">&rarr;</span></a>
                <a href="/professional-tax-pt-inr-calculator-compliance-services" class="sidebar-link">Professional Tax <span class="arrow">&rarr;</span></a>
                <a href="/gratuity-calculation-and-compliance-services" class="sidebar-link">Gratuity Services <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/epf-pf-calculator" class="sidebar-link">EPF/PF Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/professional-tax-calculator" class="sidebar-link">Professional Tax Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/cost-to-company-ctc-components-calculation-and-salary-breakup-explained" class="sidebar-link">CTC Components Explained <span class="arrow">&rarr;</span></a>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
                <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

<script>
        let isPWD = false;

        function setPWD(btn) { const el=btn.closest('.toggle-btn')||btn;isPWD=el.dataset.value==='yes';el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));el.classList.add('active'); }

        function fmt(n) { return '\u20B9' + n.toLocaleString('en-IN', {minimumFractionDigits:0, maximumFractionDigits:0}); }
        function fmt2(n) { return '\u20B9' + n.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2}); }

        function calcESI() {
            const wages = parseFloat(document.getElementById('grossWages').value);
            const numEmp = parseInt(document.getElementById('numEmployees').value) || 1;
            if (isNaN(wages) || wages <= 0) { alert('Please enter gross monthly wages.'); return; }

            const ceiling = isPWD ? 25000 : 21000;
            const eligible = wages <= ceiling;
            const dailyAvg = wages / 26; // approx working days
            const empExempt = dailyAvg <= 176;

            const empRate = 0.0075;
            const emprRate = 0.0325;

            const empContrib = eligible ? (empExempt ? 0 : Math.round(wages * empRate)) : 0;
            const emprContrib = eligible ? Math.round(wages * emprRate) : 0;
            const totalMonthly = empContrib + emprContrib;
            const halfYearly = totalMonthly * 6;
            const annual = totalMonthly * 12;
            const emprAnnualTotal = emprContrib * 12 * numEmp;

            let h = '';

            // Eligibility badge
            if (eligible) {
                h += '<div style="text-align:center;margin-bottom:16px;"><span class="eligibility-badge eligible">\u2713 ESI Applicable \u2014 wages within ' + fmt(ceiling) + ' ceiling</span></div>';
            } else {
                h += '<div style="text-align:center;margin-bottom:16px;"><span class="eligibility-badge not-eligible">\u2717 ESI Not Applicable \u2014 wages exceed ' + fmt(ceiling) + ' ceiling</span></div>';
                h += '<div class="callout" style="margin-top:12px;"><p>Gross wages of ' + fmt(wages) + ' exceed the ESI ceiling of ' + fmt(ceiling) + '/month. ESI contributions are not required. If the employee was previously covered and wages crossed the ceiling mid-period, ESI continues till the contribution period ends.</p></div>';
                document.getElementById('esiOutput').innerHTML = h;
                document.getElementById('resultSection').classList.add('visible');
                document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                return;
            }

            // Visual bar
            h += '<div class="wage-bar">';
            h += '<div class="emp-share" style="width:18.75%;">Employee 0.75%</div>';
            h += '<div class="empr-share" style="width:81.25%;">Employer 3.25%</div>';
            h += '</div>';

            // Result cards
            h += '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Employee (0.75%)</div><div class="result-value">' + fmt(empContrib) + '<small style="display:block;font-size:11px;color:rgba(255,255,255,0.7);font-family:var(--font-body);font-weight:400;">/month' + (empExempt ? ' (exempt \u2014 daily avg \u2264\u20B9176)' : '') + '</small></div></div>';
            h += '<div class="result-card"><div class="result-label">Employer (3.25%)</div><div class="result-value">' + fmt(emprContrib) + '<small style="display:block;font-size:11px;color:rgba(255,255,255,0.7);font-family:var(--font-body);font-weight:400;">/month</small></div></div>';
            h += '<div class="result-card highlight"><div class="result-label">Total ESI/Month</div><div class="result-value">' + fmt(totalMonthly) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Half-Yearly (6 months)</div><div class="result-value">' + fmt(halfYearly) + '</div></div>';
            h += '</div>';

            // Detailed breakdown
            h += '<div class="result-breakdown" style="margin-top:16px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label">Gross Wages</span><span class="breakdown-value">' + fmt(wages) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">ESI Ceiling</span><span class="breakdown-value">' + fmt(ceiling) + '/mo' + (isPWD ? ' (PwD)' : '') + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employee Share (0.75%)</span><span class="breakdown-value">' + fmt(empContrib) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employer Share (3.25%)</span><span class="breakdown-value">' + fmt(emprContrib) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Total Monthly ESI</strong></span><span class="breakdown-value"><strong>' + fmt(totalMonthly) + '</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Annual ESI (12 months)</strong></span><span class="breakdown-value"><strong>' + fmt(annual) + '</strong></span></div>';
            if (numEmp > 1) {
                h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Employer Annual Cost (' + numEmp + ' employees)</strong></span><span class="breakdown-value"><strong>' + fmt(emprAnnualTotal) + '</strong></span></div>';
            }
            h += '<div class="breakdown-row"><span class="breakdown-label">Salary After ESI Deduction</span><span class="breakdown-value">' + fmt(wages - empContrib) + '/mo</span></div>';
            h += '</div>';

            if (empExempt) {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>Low Wage Benefit:</strong> Your daily average wage (' + fmt2(dailyAvg) + ') is below \u20B9176. You are exempt from the 0.75% employee contribution. However, your employer must still pay 3.25%. You receive the same ESIC benefits as all other insured employees.</p></div>';
            }

            document.getElementById('esiOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() { document.getElementById('grossWages').value='';document.getElementById('numEmployees').value='1';isPWD=false;document.querySelectorAll('.toggle-btn').forEach((b,i)=>b.classList.toggle('active',i===0));document.getElementById('resultSection').classList.remove('visible'); }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('grossWages').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcESI(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>
@endsection