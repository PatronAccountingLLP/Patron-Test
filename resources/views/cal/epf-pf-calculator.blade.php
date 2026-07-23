@extends('layouts.app')
@section('meta')
    <title>EPF Calculator India | PF Contribution &amp; Maturity</title>
    <meta name="description" content="EPF calculator for India: get the monthly PF contribution split (employee, employer, EPS) and project your retirement corpus at 8.25% interest. Calculate now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/epf-pf-calculator">
    <meta property="og:title" content="EPF Calculator India &mdash; PF Contribution & Maturity 2026">
    <meta property="og:description" content="Calculate monthly EPF contribution and project retirement corpus at 8.25% interest for FY 2025-26.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/epf-pf-calculator">
    <meta property="og:image" content="/tools/epf-pf-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="EPF Calculator India &mdash; PF Contribution & Maturity 2026">
    <meta name="twitter:description" content="Monthly EPF split + retirement corpus projection at 8.25%. FY 2025-26 updated!">
    <meta name="twitter:image" content="/tools/epf-pf-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "EPF/PF Calculator India",
      "description": "EPF Calculator computes the monthly Employee Provident Fund contribution split between employee share, employer EPF share, and EPS share. Also projects the total retirement corpus with compound interest at 8.25 percent per annum for FY 2025-26. Supports both statutory cap and actual basic salary PF calculations for Indian salaried employees.",
      "url": "/tools/epf-pf-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "EPF/PF Calculator", "item": "/tools/epf-pf-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "How is EPF contribution calculated?", "acceptedAnswer": { "@type": "Answer", "text": "EPF contribution is calculated on Basic Salary plus Dearness Allowance. Employee contributes 12 percent which goes entirely to the EPF account. Employer also contributes 12 percent, but this is split as 8.33 percent to EPS (Employees Pension Scheme) capped at Rs 15,000 basic and the remaining 3.67 percent to the EPF account. Both contributions are mandatory under the EPF and MP Act 1952." } },
      { "@type": "Question", "name": "What is the EPF interest rate for FY 2025-26?", "acceptedAnswer": { "@type": "Answer", "text": "The EPF interest rate for FY 2025-26 is 8.25 percent per annum as declared by EPFO. Interest is calculated monthly on the running EPF balance using a rate of 8.25 divided by 12 which equals 0.6875 percent per month. However, interest is credited to the account only once at the end of the financial year on 31st March. The rate is reviewed annually by the Central Board of Trustees." } },
      { "@type": "Question", "name": "What is the difference between EPF and EPS?", "acceptedAnswer": { "@type": "Answer", "text": "EPF (Employee Provident Fund) is the savings component where both employee and employer contribute. The accumulated amount with interest is paid on retirement or resignation. EPS (Employee Pension Scheme) provides a monthly pension after retirement. Only the employer contributes 8.33 percent of basic salary (capped at Rs 15,000) to EPS. Employees need 10 years of service to qualify for EPS pension." } },
      { "@type": "Question", "name": "What is the statutory wage ceiling for EPF?", "acceptedAnswer": { "@type": "Answer", "text": "The current statutory wage ceiling for EPF is Rs 15,000 per month for basic salary plus dearness allowance. Employees earning above Rs 15,000 basic can still be EPF members with contributions calculated on actual basic or restricted to the ceiling based on employer policy. For EPS pension calculation, the ceiling is strictly Rs 15,000 making maximum EPS contribution Rs 1,250 per month." } },
      { "@type": "Question", "name": "Can I withdraw EPF before retirement?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, partial EPF withdrawal is allowed for specific purposes. You can withdraw for home purchase or construction after 5 years, medical emergencies without service requirement, marriage after 7 years, education of children after 7 years, and home loan repayment after 10 years. Full withdrawal is allowed after 2 months of unemployment or at age 58. Withdrawals within 5 years are taxable." } },
      { "@type": "Question", "name": "Is EPF contribution eligible for tax deduction?", "acceptedAnswer": { "@type": "Answer", "text": "Employee EPF contribution qualifies for tax deduction under Section 80C up to Rs 1.5 lakh per year. Employer contribution is tax-exempt for the employee. Interest earned on EPF is tax-free up to Rs 2.5 lakh of annual employee contribution. For contributions exceeding Rs 2.5 lakh in a year, interest on the excess is taxable. These rules apply under both old and new tax regimes for 80C." } },
      { "@type": "Question", "name": "How do I check my EPF balance online?", "acceptedAnswer": { "@type": "Answer", "text": "You can check EPF balance through the EPFO portal by logging in with your UAN (Universal Account Number) and downloading the e-Passbook. Other methods include sending an SMS with UAN to 7738299899, giving a missed call to 011-22901406 from your registered mobile number, or using the UMANG app. Your employer provides the UAN which links all your PF accounts across different employers." } },
      { "@type": "Question", "name": "What is VPF and how does it work?", "acceptedAnswer": { "@type": "Answer", "text": "VPF (Voluntary Provident Fund) allows employees to contribute more than the mandatory 12 percent to their EPF account up to 100 percent of basic salary. VPF earns the same 8.25 percent interest rate as EPF. The employer is not required to match VPF contributions. VPF contributions qualify for Section 80C deduction. It is a safe investment option for risk-averse individuals seeking guaranteed returns." } },
      { "@type": "Question", "name": "What happens to EPF when I change jobs?", "acceptedAnswer": { "@type": "Answer", "text": "When you change jobs, your EPF account can be transferred to the new employer through UAN-based online transfer on the EPFO portal. The process takes approximately 10 to 20 days. You do not need to withdraw and lose the continuity benefit. If you withdraw before 5 years of total service, the amount becomes taxable. It is always recommended to transfer rather than withdraw to maintain the tax-free status." } },
      { "@type": "Question", "name": "How is EPF interest calculated monthly?", "acceptedAnswer": { "@type": "Answer", "text": "EPF interest is calculated monthly on the running balance. The annual rate of 8.25 percent is divided by 12 to get 0.6875 percent monthly rate. Each month the opening balance plus that month contributions earn interest at this rate. Interest is accumulated monthly but credited to the account only on 31st March. No interest is earned in the first month of contribution." } },
      { "@type": "Question", "name": "What is the maximum EPS pension amount?", "acceptedAnswer": { "@type": "Answer", "text": "EPS pension is calculated as: Pensionable Salary times Pensionable Service divided by 70. With the current Rs 15,000 wage ceiling, maximum pensionable salary is Rs 15,000 and maximum pensionable service is 35 years. This gives a maximum monthly pension of Rs 7,500. The Supreme Court in 2022 allowed employees who opted for higher pension to contribute on actual salary, potentially increasing the pension amount." } },
      { "@type": "Question", "name": "Who is eligible for EPF in India?", "acceptedAnswer": { "@type": "Answer", "text": "EPF is mandatory for establishments with 20 or more employees under the EPF and Miscellaneous Provisions Act, 1952. All employees earning basic salary plus DA up to Rs 15,000 per month must be enrolled. Employees earning above Rs 15,000 can be enrolled with employer consent. Once enrolled, an employee cannot opt out during the same employment. International workers in India are also covered." } },
      { "@type": "Question", "name": "Can a CA help with EPF compliance for my business?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a Chartered Accountant handles EPF registration, monthly contribution calculation, ECR filing on the EPFO portal, annual returns, and ensures compliance with the EPF Act. Patron Accounting provides complete payroll processing including EPF, ESI, professional tax computation, and monthly filing for businesses across India. We also assist with PF transfer and settlement claims for employees." } }
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
    
        .dual-calc { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 700px) { .dual-calc { grid-template-columns: 1fr 1fr; } }
        .calc-mode-tab { display: flex; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; margin-bottom: 24px; }
        .mode-btn { flex: 1; padding: 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 14px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; text-align: center; }
        .mode-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .pie-chart-container { text-align: center; margin: 16px 0; }
        .pie-chart-container svg { max-width: 220px; }
    
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
        <a href="#how-epf-works">How EPF Works</a>
        <a href="#contribution-split">Contribution Split</a>
        <a href="#interest-rates">Interest Rates</a>
        <a href="#withdrawal">Withdrawal Rules</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        EPF/PF Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>EPF Calculator India &mdash; <span>PF Contribution & Maturity 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This EPF Calculator does two things: (1) computes your monthly PF contribution split &mdash; employee share (12%), employer EPF share (3.67%), and EPS share (8.33%) &mdash; and (2) projects your total retirement corpus with compound interest at 8.25% p.a. (FY 2025-26 rate). Enter your basic salary, age, and expected annual increment to see exactly how much your PF will grow by retirement. Updated with the latest EPFO rates.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Your EPF</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the EPF formulas below.</div></noscript>

                <div class="calc-mode-tab">
                    <button class="mode-btn active" onclick="setMode(this, 'contribution')">Monthly Contribution</button>
                    <button class="mode-btn" onclick="setMode(this, 'corpus')">Retirement Corpus</button>
                </div>

                <!-- Mode 1: Monthly Contribution -->
                <div id="modeContribution">
                    <div class="calc-row">
                        <div class="form-group"><label for="basicSalary">Basic Salary + DA (&#8377;/month)</label><input type="number" id="basicSalary" placeholder="e.g. 25000" min="0" step="1" autocomplete="off"></div>
                        <div class="form-group"><label>PF on</label>
                            <div class="toggle-group">
                                <button type="button" class="toggle-btn active" data-value="statutory" onclick="setPfBase(this)">Statutory Cap<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">&#8377;15,000 ceiling</small></button>
                                <button type="button" class="toggle-btn" data-value="actual" onclick="setPfBase(this)">Actual Basic<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Full 12%</small></button>
                            </div>
                        </div>
                    </div>
                    <button class="btn-calculate" onclick="calcContribution()">Calculate Monthly PF</button>
                </div>

                <!-- Mode 2: Retirement Corpus -->
                <div id="modeCorpus" style="display:none;">
                    <div class="calc-row">
                        <div class="form-group"><label for="corpusBasic">Current Basic + DA (&#8377;/month)</label><input type="number" id="corpusBasic" placeholder="e.g. 30000" min="0" step="1" autocomplete="off"></div>
                        <div class="form-group"><label for="currentAge">Your Current Age</label><input type="number" id="currentAge" placeholder="e.g. 28" min="18" max="58" step="1" autocomplete="off"></div>
                    </div>
                    <div class="calc-row">
                        <div class="form-group"><label for="retireAge">Retirement Age</label>
                            <select id="retireAge"><option value="58" selected>58 years</option><option value="60">60 years</option><option value="55">55 years (early)</option></select>
                        </div>
                        <div class="form-group"><label for="annualIncrement">Expected Annual Increment (%)</label><input type="number" id="annualIncrement" placeholder="e.g. 5" min="0" max="25" step="0.5" value="5" autocomplete="off"></div>
                    </div>
                    <div class="calc-row">
                        <div class="form-group"><label for="interestRate">EPF Interest Rate (% p.a.)</label><input type="number" id="interestRate" value="8.25" min="0" max="15" step="0.01" autocomplete="off"></div>
                        <div class="form-group"><label for="existingBalance">Existing EPF Balance (&#8377;)</label><input type="number" id="existingBalance" placeholder="0" min="0" step="1" value="0" autocomplete="off"></div>
                    </div>
                    <button class="btn-calculate" onclick="calcCorpus()">Calculate Retirement Corpus</button>
                </div>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="epfOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <!-- Content sections -->
            <section class="content-section" id="how-epf-works">
                <h2>How the Employee Provident Fund Works</h2>
                <p>The Employee Provident Fund (EPF) is India's largest social security scheme, managed by the <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">Employees' Provident Fund Organisation (EPFO)</a>. It is a mandatory retirement savings scheme for establishments with 20 or more employees under the <a href="https://www.indiacode.nic.in/handle/123456789/1399" target="_blank" rel="noopener">EPF and Miscellaneous Provisions Act, 1952</a>. The scheme is overseen by the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Ministry of Labour & Employment</a>.</p>

                <h3>The Basics</h3>
                <p>Every month, 12% of your basic salary plus dearness allowance (DA) is deducted from your pay and deposited into your EPF account. Your employer contributes an equal 12%, but this is split &mdash; 3.67% goes to your EPF account and 8.33% goes to the Employees' Pension Scheme (EPS). The combined contributions accumulate with compound interest, building a substantial retirement corpus over your working years.</p>

                <div class="formula-box">
                    <span class="label">Monthly EPF Contribution Breakdown</span><br><br>
                    Employee Contribution = 12% of (Basic + DA) &rarr; goes to EPF account<br>
                    Employer Contribution = 12% of (Basic + DA), split as:<br>
                    &nbsp;&nbsp;&rarr; 8.33% to EPS (capped at &#8377;15,000 basic = max &#8377;1,250/mo)<br>
                    &nbsp;&nbsp;&rarr; 3.67% to EPF account<br><br>
                    <span class="label">Example:</span> Basic + DA = &#8377;25,000<br>
                    Employee EPF = &#8377;3,000 | Employer EPS = &#8377;1,250 | Employer EPF = &#8377;1,750<br>
                    Total to EPF account = &#8377;3,000 + &#8377;1,750 = <span class="label">&#8377;4,750/month</span>
                </div>

                <h3>Why EPF Matters</h3>
                <p>EPF is one of the safest long-term investments in India &mdash; government-backed, tax-efficient under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 80C</a>, and offers a competitive 8.25% interest rate (FY 2025-26) which is higher than most bank fixed deposits. The power of compound interest over a 30+ year career can turn modest monthly contributions into a substantial retirement fund. A &#8377;25,000 basic salary with 5% annual increments can grow to over &#8377;1 crore in EPF alone over 30 years.</p>

                <div class="callout">
                    <p><strong>CA Tip:</strong> If your basic salary exceeds &#8377;15,000, confirm with your HR whether PF is calculated on the statutory cap (&#8377;15,000) or on your actual basic. The choice significantly impacts both your in-hand salary and retirement corpus. Contributing on actual basic builds a larger corpus but reduces monthly take-home. Use both options in our calculator above to compare the impact.</p>
                </div>
            </section>

            <section class="content-section" id="contribution-split">
                <h2>Understanding the EPF Contribution Split</h2>
                <p>The 12% employer contribution is not straightforward &mdash; it gets split across multiple sub-accounts as prescribed by the <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a>. The <a href="https://www.epfindia.gov.in/site_docs/PDFs/MiscPDFs/EPS95.pdf" target="_blank" rel="noopener">Employees' Pension Scheme, 1995</a> governs the pension component, while the <a href="https://www.epfindia.gov.in/site_docs/PDFs/MiscPDFs/EDLI_Scheme_1976.pdf" target="_blank" rel="noopener">EDLI Scheme, 1976</a> provides life insurance cover:</p>

                <table class="rate-table">
                    <thead><tr><th>Component</th><th>Rate</th><th>Ceiling</th><th>Where It Goes</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Employee Share</strong></td><td>12% of Basic+DA</td><td>No ceiling (on actual basic)</td><td>EPF Account</td></tr>
                        <tr><td><strong>Employer &rarr; EPF</strong></td><td>3.67% of Basic+DA</td><td>No ceiling</td><td>EPF Account</td></tr>
                        <tr><td><strong>Employer &rarr; EPS</strong></td><td>8.33% of Basic+DA</td><td>Capped at &#8377;15,000 basic (max &#8377;1,250/mo)</td><td>Pension Scheme</td></tr>
                        <tr><td><strong>Employer &rarr; EDLI</strong></td><td>0.50% of Basic+DA</td><td>Capped at &#8377;15,000</td><td>Insurance Fund</td></tr>
                        <tr><td><strong>Admin Charges</strong></td><td>0.50% of Basic+DA</td><td>Min &#8377;75/mo</td><td>EPFO Administration</td></tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Important:</strong> When basic salary exceeds &#8377;15,000, the employer's 8.33% EPS contribution is capped at &#8377;1,250 (8.33% of &#8377;15,000). The excess goes to the EPF account. For example, if basic is &#8377;30,000: Employer total = &#8377;3,600 (12%), EPS = &#8377;1,250 (capped), EPF = &#8377;3,600 &minus; &#8377;1,250 = &#8377;2,350. This is why the "Employer EPF" share increases as salary rises above the ceiling.</p>
                </div>
            </section>

            <section class="content-section" id="interest-rates">
                <h2>EPF Interest Rates &mdash; Historical Trend</h2>
                <p>The EPF interest rate is declared annually by <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO's Central Board of Trustees</a> and approved by the Ministry of Finance. The rate for FY 2025-26 is 8.25% p.a.</p>

                <table class="rate-table">
                    <thead><tr><th>Financial Year</th><th>Interest Rate</th></tr></thead>
                    <tbody>
                        <tr><td><strong>FY 2025-26</strong></td><td><span class="rate-badge r12">8.25%</span></td></tr>
                        <tr><td>FY 2024-25</td><td>8.25%</td></tr>
                        <tr><td>FY 2023-24</td><td>8.25%</td></tr>
                        <tr><td>FY 2022-23</td><td>8.15%</td></tr>
                        <tr><td>FY 2021-22</td><td>8.10%</td></tr>
                        <tr><td>FY 2020-21</td><td>8.50%</td></tr>
                        <tr><td>FY 2019-20</td><td>8.50%</td></tr>
                        <tr><td>FY 2018-19</td><td>8.65%</td></tr>
                    </tbody>
                </table>

                <div class="formula-box">
                    <span class="label">Monthly Interest Calculation</span><br>
                    Monthly Rate = Annual Rate &divide; 12 = 8.25% &divide; 12 = <span class="label">0.6875%</span><br><br>
                    Interest for Month N = (Opening Balance + Contributions in Month N) &times; 0.6875%<br>
                    Note: No interest earned in the first month of contribution<br>
                    Interest is accumulated monthly but credited to account on 31st March
                </div>

                <p>EPF interest earned on employee contributions up to &#8377;2.5 lakh per year is tax-free. For contributions exceeding &#8377;2.5 lakh (or &#8377;5 lakh for government employees), the interest on the excess amount is taxable as income from other sources per <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">CBDT notification</a> dated August 2021. This rule was introduced from FY 2021-22 to limit tax-free benefits for high-income earners contributing heavily through VPF. The proposed <a href="https://www.indiacode.nic.in/handle/123456789/13839" target="_blank" rel="noopener">Code on Social Security, 2020</a> aims to consolidate EPF, EPS, and EDLI under a unified framework, though implementation rules remain pending.</p>
            </section>

            <section class="content-section" id="withdrawal">
                <h2>EPF Withdrawal Rules</h2>
                <h3>Full Withdrawal</h3>
                <p>You can withdraw the entire EPF balance (employee share + employer share + interest) in these cases: retirement at age 58, unemployment for 2 continuous months (with self-declaration), permanent migration abroad, or permanent disability. Full withdrawal after 5 years of continuous PF membership is completely tax-free under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 10(11) of the Income Tax Act</a>. Withdrawal before 5 years is taxable &mdash; TDS at 10% is deducted if PAN is furnished (30% without PAN).</p>

                <h3>Partial Withdrawal (Advances)</h3>
                <p>EPFO allows partial withdrawals for specific life events without closing the account:</p>
                <table class="rate-table">
                    <thead><tr><th>Purpose</th><th>Service Required</th><th>Maximum Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Medical emergency</td><td>No minimum</td><td>6 months basic + DA or employee share + interest (whichever is less)</td></tr>
                        <tr><td>Home purchase / construction</td><td>5 years</td><td>24 months basic + DA or 90% of balance</td></tr>
                        <tr><td>Home loan repayment</td><td>10 years</td><td>36 months basic + DA</td></tr>
                        <tr><td>Marriage (self/children/siblings)</td><td>7 years</td><td>50% of employee share</td></tr>
                        <tr><td>Education (self/children)</td><td>7 years</td><td>50% of employee share</td></tr>
                        <tr><td>1 year before retirement</td><td>54 years age</td><td>90% of total balance</td></tr>
                    </tbody>
                </table>

                <div class="callout">
                    <p><strong>Need EPF Compliance Help?</strong> Patron Accounting handles EPF registration, monthly ECR filing, contribution computation, and employee PF transfer/settlement claims for businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20EPF%20compliance%20and%20payroll.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get payroll help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About EPF</h2>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is EPF contribution calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EPF is calculated on Basic Salary + DA. Employee contributes 12% entirely to EPF. Employer contributes 12% split as 8.33% to EPS (capped at &#8377;15,000 basic = max &#8377;1,250/month) and 3.67% to EPF. Total monthly EPF credit = employee 12% + employer 3.67%. Both contributions are mandatory under the EPF & MP Act, 1952 for establishments with 20+ employees.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the EPF interest rate for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The EPF interest rate for FY 2025-26 is 8.25% per annum as declared by EPFO. Monthly calculation rate is 0.6875% (8.25% &divide; 12). Interest is computed monthly on the running balance but credited to the account only on 31st March. No interest is earned in the first month of contribution. The rate is reviewed annually by the Central Board of Trustees.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between EPF and EPS?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EPF is the savings component &mdash; employee and employer both contribute, and the lump sum with interest is paid on retirement. EPS is the pension component &mdash; only the employer contributes 8.33% (capped at &#8377;15,000 basic) providing monthly pension after retirement. You need minimum 10 years of service to qualify for EPS pension. EPF balance is fully withdrawable; EPS provides lifelong monthly pension.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the statutory wage ceiling for EPF?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The statutory EPF wage ceiling is &#8377;15,000/month basic + DA. Employees earning above this can still be EPF members &mdash; contributions can be on actual basic or restricted to ceiling based on employer policy. For EPS, the ceiling is strictly &#8377;15,000 making maximum monthly EPS contribution &#8377;1,250. There are ongoing discussions to raise this ceiling to &#8377;21,000 or &#8377;25,000 but no notification yet.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can I withdraw EPF before retirement?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; partial withdrawal is allowed for medical emergencies (no service requirement), home purchase (5 years), home loan repayment (10 years), marriage and education (7 years), and pre-retirement (age 54, up to 90% balance). Full withdrawal is allowed after 2 months of unemployment or at age 58. Withdrawals within 5 years of total PF membership are taxable. Apply online via EPFO portal using UAN.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is EPF contribution eligible for tax deduction?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Employee EPF contribution qualifies for Section 80C deduction up to &#8377;1.5 lakh/year under the old tax regime. Employer contribution is exempt for the employee. Interest is tax-free on contributions up to &#8377;2.5 lakh/year &mdash; interest on excess is taxable from FY 2021-22. Under the new tax regime, 80C deduction is not available but employer NPS contribution remains deductible.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How do I check my EPF balance online?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Check via EPFO portal (epfindia.gov.in) by logging in with UAN and downloading e-Passbook. Or SMS your UAN to 7738299899, give a missed call to 011-22901406 from your registered mobile, or use the UMANG app. Your UAN links all PF accounts across different employers. Ensure your Aadhaar, bank account, and mobile number are linked to UAN for seamless access.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is VPF and how does it work?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">VPF (Voluntary Provident Fund) lets you contribute beyond the mandatory 12% &mdash; up to 100% of basic salary. It earns the same 8.25% interest as EPF. The employer does not match VPF contributions. VPF qualifies for 80C deduction. It is ideal for risk-averse investors wanting guaranteed, tax-efficient returns. Inform HR in writing to start or stop VPF contributions at any time.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens to EPF when I change jobs?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Transfer your EPF to the new employer via UAN-based online transfer on the EPFO portal &mdash; takes 10-20 days. Do not withdraw &mdash; if you withdraw before 5 years total PF service, the amount is taxable. Transfer preserves continuity and tax-free status. Both old and new employers must approve the transfer. Your UAN remains the same across all employers throughout your career.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is EPF interest calculated monthly?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Monthly rate = 8.25% &divide; 12 = 0.6875%. Each month, opening balance plus that month's contributions earn interest at this rate. Interest accumulates monthly but is credited to the account only on 31st March annually. No interest in the first month. This compounding effect means early-career contributions have the most impact on the final retirement corpus.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the maximum EPS pension?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EPS pension formula: Pensionable Salary &times; Pensionable Service &divide; 70. With the &#8377;15,000 ceiling and maximum 35 years service, maximum monthly pension is &#8377;7,500. The Supreme Court (2022) allowed higher pension for those who opted for it &mdash; they can contribute EPS on actual salary above &#8377;15,000. Minimum pension is &#8377;1,000/month guaranteed by the government.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Who is eligible for EPF?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EPF is mandatory for establishments with 20+ employees under the EPF & MP Act, 1952. All employees earning basic + DA up to &#8377;15,000/month must enroll. Those earning above &#8377;15,000 can join with employer consent. Once enrolled, you cannot opt out during the same employment. Smaller establishments can register voluntarily. International workers in India are also covered under the scheme.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with EPF compliance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a CA handles EPF registration, monthly contribution computation, ECR (Electronic Challan cum Return) filing on EPFO portal, annual returns, and employee PF transfer/settlement claims. Patron Accounting provides complete payroll processing including EPF, ESI, professional tax, and TDS computation and filing for businesses across India.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Payroll & EPF Help?</h3>
                <p>Our team handles EPF registration, monthly ECR filing, contribution computation, and PF transfers for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20EPF%20compliance%20and%20payroll.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/pf-calculator" class="sidebar-link">PF Calculator Service <span class="arrow">&rarr;</span></a>
                <a href="/esic-calculation-and-compliance-services" class="sidebar-link">ESIC Compliance <span class="arrow">&rarr;</span></a>
                <a href="/gratuity-calculation-and-compliance-services" class="sidebar-link">Gratuity Services <span class="arrow">&rarr;</span></a>
                <a href="/professional-tax-pt-inr-calculator-compliance-services" class="sidebar-link">Professional Tax <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/tds-rate-finder-calculator" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a>
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
        let pfBase = 'statutory';
        let calcMode = 'contribution';

        function setMode(btn, mode) {
            calcMode = mode;
            document.querySelectorAll('.mode-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById('modeContribution').style.display = mode === 'contribution' ? '' : 'none';
            document.getElementById('modeCorpus').style.display = mode === 'corpus' ? '' : 'none';
            document.getElementById('resultSection').classList.remove('visible');
        }

        function setPfBase(btn) {
            const el = btn.closest('.toggle-btn') || btn;
            pfBase = el.dataset.value;
            el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
            el.classList.add('active');
        }

        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function calcContribution() {
            const basic = parseFloat(document.getElementById('basicSalary').value);
            if (isNaN(basic) || basic <= 0) { alert('Please enter a valid basic salary.'); return; }

            const pfBasic = pfBase === 'statutory' ? Math.min(basic, 15000) : basic;
            const epsBase = Math.min(basic, 15000);

            const empEPF = Math.round(pfBasic * 0.12);
            const epsContrib = Math.round(epsBase * 0.0833);
            const employerEPF = Math.round(pfBasic * 0.12) - epsContrib;
            const totalToEPF = empEPF + employerEPF;
            const totalEmployer = Math.round(pfBasic * 0.12);

            let h = '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Employee \u2192 EPF</div><div class="result-value">' + fmt(empEPF) + '<small style="display:block;font-size:12px;color:var(--text-muted);font-family:var(--font-body);font-weight:400;">/month (12%)</small></div></div>';
            h += '<div class="result-card"><div class="result-label">Employer \u2192 EPF</div><div class="result-value">' + fmt(employerEPF) + '<small style="display:block;font-size:12px;color:var(--text-muted);font-family:var(--font-body);font-weight:400;">/month (3.67%)</small></div></div>';
            h += '<div class="result-card"><div class="result-label">Employer \u2192 EPS</div><div class="result-value">' + fmt(epsContrib) + '<small style="display:block;font-size:12px;color:var(--text-muted);font-family:var(--font-body);font-weight:400;">/month (8.33%)</small></div></div>';
            h += '<div class="result-card highlight"><div class="result-label">Total EPF Credit/Month</div><div class="result-value">' + fmt(totalToEPF) + '<small style="display:block;font-size:12px;color:rgba(255,255,255,0.7);font-family:var(--font-body);font-weight:400;">Employee + Employer EPF</small></div></div>';
            h += '</div>';

            h += '<div class="result-breakdown" style="margin-top:16px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label">Basic + DA</span><span class="breakdown-value">' + fmt(basic) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">PF calculated on</span><span class="breakdown-value">' + fmt(pfBasic) + '/mo' + (pfBase === 'statutory' && basic > 15000 ? ' (capped)' : '') + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employee EPF (12%)</span><span class="breakdown-value">' + fmt(empEPF) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employer EPF (3.67%)</span><span class="breakdown-value">' + fmt(employerEPF) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Employer EPS (8.33%, capped)</span><span class="breakdown-value">' + fmt(epsContrib) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Total Employer (12%)</strong></span><span class="breakdown-value"><strong>' + fmt(totalEmployer) + '</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Total to EPF Account</strong></span><span class="breakdown-value"><strong>' + fmt(totalToEPF) + '/mo</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Annual EPF Credit</strong></span><span class="breakdown-value"><strong>' + fmt(totalToEPF * 12) + '/yr</strong></span></div>';
            h += '</div>';

            if (basic > 15000 && pfBase === 'statutory') {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>Note:</strong> Your basic ('+fmt(basic)+') exceeds the statutory cap of \u20B915,000. PF is being calculated on \u20B915,000. Switch to "Actual Basic" above to see the contribution on your full basic salary \u2014 this gives a larger retirement corpus but reduces monthly in-hand salary.</p></div>';
            }

            document.getElementById('epfOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function calcCorpus() {
            const basic = parseFloat(document.getElementById('corpusBasic').value);
            const age = parseInt(document.getElementById('currentAge').value);
            const retireAge = parseInt(document.getElementById('retireAge').value);
            const increment = parseFloat(document.getElementById('annualIncrement').value) / 100;
            const annualRate = parseFloat(document.getElementById('interestRate').value) / 100;
            const existingBal = parseFloat(document.getElementById('existingBalance').value) || 0;

            if (isNaN(basic) || basic <= 0) { alert('Please enter a valid basic salary.'); return; }
            if (isNaN(age) || age < 18 || age > 58) { alert('Please enter a valid age (18-58).'); return; }
            if (age >= retireAge) { alert('Current age must be less than retirement age.'); return; }

            const years = retireAge - age;
            const monthlyRate = annualRate / 12;

            let balance = existingBal;
            let totalEmpContrib = 0;
            let totalEmplrContrib = 0;
            let totalInterest = 0;
            let currentBasic = basic;

            for (let yr = 0; yr < years; yr++) {
                const pfBasic = Math.min(currentBasic, 15000);
                const epsBase = Math.min(currentBasic, 15000);
                const empMonthly = Math.round(pfBasic * 0.12);
                const epsMonthly = Math.round(epsBase * 0.0833);
                const emplrEpfMonthly = Math.round(pfBasic * 0.12) - epsMonthly;
                const totalMonthly = empMonthly + emplrEpfMonthly;

                for (let mo = 0; mo < 12; mo++) {
                    balance += totalMonthly;
                    totalEmpContrib += empMonthly;
                    totalEmplrContrib += emplrEpfMonthly;
                    const interest = balance * monthlyRate;
                    balance += interest;
                    totalInterest += interest;
                }
                currentBasic = Math.round(currentBasic * (1 + increment));
            }

            balance = Math.round(balance);
            totalEmpContrib = Math.round(totalEmpContrib);
            totalEmplrContrib = Math.round(totalEmplrContrib);
            totalInterest = Math.round(totalInterest);
            const totalContrib = totalEmpContrib + totalEmplrContrib + existingBal;

            let h = '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Your Contributions</div><div class="result-value">' + fmt(totalEmpContrib) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Employer EPF Share</div><div class="result-value">' + fmt(totalEmplrContrib) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Interest Earned</div><div class="result-value">' + fmt(totalInterest) + '</div></div>';
            h += '<div class="result-card highlight" style="grid-column:1/-1;text-align:center;"><div class="result-label">Total Retirement Corpus at Age ' + retireAge + '</div><div class="result-value" style="font-size:28px;">' + fmt(balance) + '</div></div>';
            h += '</div>';

            h += '<div class="result-breakdown" style="margin-top:16px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label">Current Basic + DA</span><span class="breakdown-value">' + fmt(basic) + '/mo</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Years to Retirement</span><span class="breakdown-value">' + years + ' years</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Annual Increment</span><span class="breakdown-value">' + (increment * 100) + '%</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Interest Rate</span><span class="breakdown-value">' + (annualRate * 100) + '% p.a.</span></div>';
            if (existingBal > 0) h += '<div class="breakdown-row"><span class="breakdown-label">Existing EPF Balance</span><span class="breakdown-value">' + fmt(existingBal) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Total Employee Contributions</span><span class="breakdown-value">' + fmt(totalEmpContrib) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Total Employer EPF Contributions</span><span class="breakdown-value">' + fmt(totalEmplrContrib) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Total Interest Earned</span><span class="breakdown-value">' + fmt(totalInterest) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Retirement Corpus</strong></span><span class="breakdown-value"><strong>' + fmt(balance) + '</strong></span></div>';
            h += '</div>';

            // Insight
            const interestPct = Math.round((totalInterest / balance) * 100);
            h += '<div class="callout" style="margin-top:16px;"><p><strong>Insight:</strong> ' + interestPct + '% of your retirement corpus comes from compound interest \u2014 not your contributions. This is the power of compounding over ' + years + ' years. Starting early and maintaining PF continuity across job changes is the single most impactful step for your retirement security.</p></div>';

            document.getElementById('epfOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() {
            document.getElementById('basicSalary').value = '';
            document.getElementById('corpusBasic').value = '';
            document.getElementById('currentAge').value = '';
            document.getElementById('annualIncrement').value = '5';
            document.getElementById('interestRate').value = '8.25';
            document.getElementById('existingBalance').value = '0';
            pfBase = 'statutory';
            document.querySelectorAll('.toggle-btn').forEach((b, i) => b.classList.toggle('active', i === 0));
            document.getElementById('resultSection').classList.remove('visible');
        }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('basicSalary').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcContribution(); });
        document.getElementById('corpusBasic').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcCorpus(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>
@endsection