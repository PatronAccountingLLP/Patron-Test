@extends('layouts.app')
@section('meta')
    <title>Gratuity Calculator India | Eligibility &amp; Payout</title>
    <meta name="description" content="Gratuity calculator: compute your payout under the Payment of Gratuity Act, 1972 using the 15/26 formula, plus eligibility and tax exemption. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/gratuity-calculator">
    <meta property="og:title" content="Gratuity Calculator India &mdash; Eligibility & Payout 2026">
    <meta property="og:description" content="Calculate gratuity payout per Payment of Gratuity Act using the 15/26 formula. Check eligibility and tax exemption.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/gratuity-calculator">
    <meta property="og:image" content="/tools/gratuity-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gratuity Calculator India &mdash; Eligibility & Payout 2026">
    <meta name="twitter:description" content="Gratuity payout calculator per Payment of Gratuity Act 1972. 15/26 formula. Try now!">
    <meta name="twitter:image" content="/tools/gratuity-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "Gratuity Calculator India",
      "description": "Gratuity Calculator computes the gratuity payout amount for Indian employees using the 15/26 formula under the Payment of Gratuity Act, 1972 for covered establishments and the 15/30 formula for non-covered establishments. Shows eligibility check, tax exemption computation under Section 10(10), and year rounding rules.",
      "url": "/tools/gratuity-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "Gratuity Calculator", "item": "/tools/gratuity-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "How is gratuity calculated in India?", "acceptedAnswer": { "@type": "Answer", "text": "For establishments covered under the Payment of Gratuity Act 1972, gratuity is calculated as Last Drawn Salary (Basic plus DA) multiplied by 15, multiplied by Completed Years of Service, divided by 26. The divisor 26 represents working days in a month excluding Sundays. For establishments not covered under the Act, the divisor is 30 instead of 26, resulting in a lower payout amount." } },
      { "@type": "Question", "name": "Who is eligible for gratuity in India?", "acceptedAnswer": { "@type": "Answer", "text": "An employee is eligible for gratuity after completing 5 years of continuous service with the same employer. The 5-year rule is waived in cases of death or disablement. Under the new Labour Codes, fixed-term contract employees become eligible after just 1 year if they have worked more than 240 days. The Act applies to establishments with 10 or more employees on any day in the preceding 12 months." } },
      { "@type": "Question", "name": "What is the maximum gratuity amount in India?", "acceptedAnswer": { "@type": "Answer", "text": "The maximum tax-exempt gratuity limit is Rs 20 lakh for private sector employees under Section 10(10)(ii) of the Income Tax Act. For central and state government employees, the limit is Rs 25 lakh. Any gratuity received above these limits is treated as taxable income. The Rs 20 lakh limit applies across your entire working life, not per employer, so cumulative gratuity from multiple employers is considered." } },
      { "@type": "Question", "name": "What does 15/26 mean in gratuity calculation?", "acceptedAnswer": { "@type": "Answer", "text": "The fraction 15 over 26 is the core of the gratuity formula. The number 15 represents half a month of wages (15 days of salary) as reward for each completed year of service. The number 26 represents the working days in a month excluding Sundays. This gives a slightly higher per-day rate than dividing by 30. For non-covered establishments, 15 over 30 is used instead." } },
      { "@type": "Question", "name": "How are years of service rounded for gratuity?", "acceptedAnswer": { "@type": "Answer", "text": "If service in the final year exceeds 6 months, it is rounded up to the next full year. For example, 7 years and 8 months becomes 8 years for gratuity calculation. If it is 7 years and 4 months, it remains 7 years. Continuous service includes periods of leave, sickness, accident, layoff, and strikes. An employee is considered in continuous service if they have worked 240 days in a year or 190 days for underground workers." } },
      { "@type": "Question", "name": "Is gratuity taxable in India?", "acceptedAnswer": { "@type": "Answer", "text": "For government employees, gratuity is fully exempt from income tax under Section 10(10)(i). For private sector employees covered under the Gratuity Act, the least of actual gratuity received, Rs 20 lakh, or the calculated eligible amount is tax-exempt under Section 10(10)(ii). For employees not covered under the Act, the least of actual gratuity, Rs 20 lakh, or half month salary for each year of service is exempt." } },
      { "@type": "Question", "name": "Can an employer deny or forfeit gratuity?", "acceptedAnswer": { "@type": "Answer", "text": "An employer can forfeit gratuity partially or wholly under Section 4(6) of the Payment of Gratuity Act if the employee is terminated for wilful omission or negligence causing damage to employer property, or for riotous or disorderly conduct, or for any act that constitutes a criminal offence involving moral turpitude committed during the course of employment. In all other cases, gratuity cannot be denied." } },
      { "@type": "Question", "name": "What is the gratuity formula for employees not covered under the Act?", "acceptedAnswer": { "@type": "Answer", "text": "For employees whose employer is not covered under the Payment of Gratuity Act (establishments with fewer than 10 employees), the formula is: Last Drawn Salary (Basic plus DA) multiplied by 15, multiplied by Years of Service, divided by 30. The divisor is 30 (calendar days) instead of 26 (working days), resulting in approximately 13 percent lower gratuity compared to covered employees." } },
      { "@type": "Question", "name": "When must the employer pay gratuity?", "acceptedAnswer": { "@type": "Answer", "text": "Under Section 7(3) of the Payment of Gratuity Act, the employer must pay gratuity within 30 days from the date it becomes due. If the employer delays payment beyond 30 days, they must pay simple interest on the gratuity amount from the due date until the date of actual payment. The interest rate is notified by the government and is currently at 10 percent per annum on the delayed amount." } },
      { "@type": "Question", "name": "Is gratuity part of CTC?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, most employers include gratuity as a component of CTC (Cost to Company), typically provisioned at 4.81 percent of basic salary annually. However, gratuity is not part of your monthly in-hand salary. It is a deferred benefit paid only upon separation after completing 5 years. For CTC to in-hand conversion, gratuity is subtracted along with employer PF to arrive at gross salary." } },
      { "@type": "Question", "name": "What happens to gratuity if an employee dies before 5 years?", "acceptedAnswer": { "@type": "Answer", "text": "The 5-year continuous service requirement is waived in case of employee death or disablement due to accident or disease. Gratuity is paid to the nominee or legal heirs of the deceased employee based on the actual period of service, even if it is less than 5 years. The employer must make this payment within 30 days. Nomination must be filed in Form F within 30 days of completing one year of service." } },
      { "@type": "Question", "name": "How does the new Labour Code affect gratuity?", "acceptedAnswer": { "@type": "Answer", "text": "Under the Code on Social Security 2020 and the proposed new Labour Codes, fixed-term contract employees become eligible for gratuity after just 1 year of service (compared to 5 years for permanent employees) if they have worked more than 240 days. The Code also proposes that basic salary must be at least 50 percent of gross wages, which would increase the gratuity calculation base for many employees." } },
      { "@type": "Question", "name": "Can a CA help with gratuity calculation and compliance?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a Chartered Accountant computes gratuity liability for financial statements per AS-15 or Ind AS 19, ensures actuarial valuation for gratuity provisioning, handles Form I filing for gratuity payment, and advises on tax implications. Patron Accounting provides complete payroll and gratuity compliance services for Indian businesses including actuarial valuations and exit settlement processing." } }
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
    
        .elig-badge { display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-bottom: 16px; }
        .elig-badge.eligible { background: #D1FAE5; color: #065F46; }
        .elig-badge.not-eligible { background: #FEE2E2; color: #991B1B; }
        .tax-box { background: var(--surface-alt); border-radius: var(--radius); padding: 16px; margin-top: 16px; }
        .tax-row { display: flex; justify-content: space-between; padding: 8px 0; font-size: 14px; border-bottom: 1px dashed var(--border); }
        .tax-row:last-child { border-bottom: none; }
        .tax-row .tax-label { color: var(--text-secondary); }
        .tax-row .tax-value { font-family: var(--font-mono); font-weight: 700; }
        .tax-row.highlight { background: rgba(5,150,105,0.06); border-radius: 6px; padding: 8px 12px; margin: 4px -12px; }
    
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
        <a href="#formula">Formula</a>
        <a href="#eligibility">Eligibility</a>
        <a href="#taxation">Taxation</a>
        <a href="#forfeiture">Forfeiture Rules</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        Gratuity Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Gratuity Calculator India &mdash; <span>Eligibility & Payout 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This Gratuity Calculator computes your gratuity payout using the 15/26 formula under the <a href="https://www.indiacode.nic.in/handle/123456789/1598" target="_blank" rel="noopener">Payment of Gratuity Act, 1972</a>. Enter your last drawn salary (Basic + DA), years and months of service, and whether your employer is covered under the Act. The tool checks eligibility (5-year rule with rounding), calculates the gratuity amount, and shows the tax-exempt portion under Section 10(10). Max tax-free limit: &#8377;20 lakh (private) / &#8377;25 lakh (govt).</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Your Gratuity</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the gratuity formula below.</div></noscript>

                <div class="calc-row">
                    <div class="form-group"><label for="lastSalary">Last Drawn Monthly Salary &mdash; Basic + DA (&#8377;)</label><input type="number" id="lastSalary" placeholder="e.g. 50000" min="0" step="1" autocomplete="off"></div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="serviceYears">Years of Service</label><input type="number" id="serviceYears" placeholder="e.g. 10" min="0" max="50" step="1" autocomplete="off"></div>
                    <div class="form-group"><label for="serviceMonths">Additional Months</label>
                        <select id="serviceMonths"><option value="0">0 months</option><option value="1">1 month</option><option value="2">2 months</option><option value="3">3 months</option><option value="4">4 months</option><option value="5">5 months</option><option value="6">6 months</option><option value="7">7 months</option><option value="8">8 months</option><option value="9">9 months</option><option value="10">10 months</option><option value="11">11 months</option></select>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label>Covered under Gratuity Act?</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="yes" onclick="setCoverage(this)">Yes<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">10+ employees (&divide; 26)</small></button>
                            <button type="button" class="toggle-btn" data-value="no" onclick="setCoverage(this)">No<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">&lt; 10 employees (&divide; 30)</small></button>
                        </div>
                    </div>
                    <div class="form-group"><label>Employee Type</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="private" onclick="setEmpType(this)">Private Sector<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">&#8377;20L tax-free cap</small></button>
                            <button type="button" class="toggle-btn" data-value="govt" onclick="setEmpType(this)">Government<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">Fully exempt</small></button>
                        </div>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calcGratuity()">Calculate Gratuity</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="gratOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <!-- Formula -->
            <section class="content-section" id="formula">
                <h2>Gratuity Calculation Formula</h2>
                <p>The <a href="https://www.indiacode.nic.in/handle/123456789/1598" target="_blank" rel="noopener">Payment of Gratuity Act, 1972</a> prescribes two formulas depending on whether the employer is covered under the Act:</p>

                <div class="formula-box">
                    <span class="label">Covered under the Act (10+ employees)</span><br>
                    Gratuity = (Basic + DA) &times; 15 &times; Years of Service &divide; <span class="label">26</span><br><br>
                    <span class="label">Not covered under the Act (&lt; 10 employees)</span><br>
                    Gratuity = (Basic + DA) &times; 15 &times; Years of Service &divide; <span class="label">30</span><br><br>
                    <span class="label">Why 26?</span> 26 = working days in a month (excluding Sundays)<br>
                    <span class="label">Why 15?</span> 15 days of wages as reward per completed year of service
                </div>

                <h3>Year Rounding Rule</h3>
                <p>If service in the final year exceeds 6 months, it is rounded up to the next full year. For example, 7 years and 8 months = 8 years. But 7 years and 4 months = 7 years. This rounding can make a significant difference &mdash; for a &#8377;50,000 salary, one extra year adds approximately &#8377;28,846 to the gratuity amount.</p>

                <h3>Worked Example</h3>
                <p>Suppose Priya earns &#8377;60,000 (Basic + DA), has worked for 12 years and 7 months, and her employer is covered under the Act:</p>
                <div class="formula-box">
                    <span class="label">Step 1:</span> Round service: 12 years 7 months &rarr; <span class="label">13 years</span> (> 6 months)<br>
                    <span class="label">Step 2:</span> Gratuity = &#8377;60,000 &times; 15 &times; 13 &divide; 26<br>
                    = &#8377;60,000 &times; 195 &divide; 26<br>
                    = <span class="label">&#8377;4,50,000</span><br><br>
                    Tax-exempt: &#8377;4,50,000 (below &#8377;20L limit) &rarr; <span class="label">Fully tax-free</span>
                </div>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Gratuity is calculated on Basic + DA only &mdash; not on HRA, special allowance, or other components. If your salary structure has a low basic (e.g., 20-30% of CTC), your gratuity will be proportionally lower. Employees negotiating salary should consider requesting a higher basic component to maximise retirement benefits. Refer to <a href="https://labour.gov.in/" target="_blank" rel="noopener">labour.gov.in</a> for the latest notifications on the proposed Labour Code changes to basic salary floors.</p>
                </div>
            </section>

            <!-- Eligibility -->
            <section class="content-section" id="eligibility">
                <h2>Gratuity Eligibility Rules</h2>
                <p>Under <a href="https://www.indiacode.nic.in/handle/123456789/1598" target="_blank" rel="noopener">Section 4(1) of the Payment of Gratuity Act</a>, gratuity is payable when:</p>

                <table class="rate-table">
                    <thead><tr><th>Condition</th><th>Service Required</th><th>Notes</th></tr></thead>
                    <tbody>
                        <tr><td>Superannuation (retirement)</td><td>5 years</td><td>Normal retirement age</td></tr>
                        <tr><td>Resignation</td><td>5 years</td><td>Voluntary separation</td></tr>
                        <tr><td>Death</td><td>No minimum</td><td>5-year rule waived; paid to nominee/legal heirs</td></tr>
                        <tr><td>Disablement (accident/disease)</td><td>No minimum</td><td>5-year rule waived</td></tr>
                        <tr><td>Termination by employer</td><td>5 years</td><td>Unless forfeited for misconduct</td></tr>
                        <tr><td>Fixed-term contract (new Labour Code)</td><td>1 year</td><td>If worked 240+ days; proposed under Code on Social Security 2020</td></tr>
                    </tbody>
                </table>

                <h3>What Counts as Continuous Service?</h3>
                <p>An employee is considered in continuous service if they have worked 240 days in a year (190 days for underground mine workers). Periods of leave, sickness, accident, layoff, strike, lockout, and cessation of work not due to employee fault are all counted as continuous service. The <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO</a> records and employer attendance data are typically used to verify service continuity during disputes.</p>

                <h3>Which Establishments Are Covered?</h3>
                <p>The Act applies to every factory, mine, oilfield, plantation, port, railway, company, or shop where 10 or more employees are employed or were employed on any day in the preceding 12 months. Once covered, the obligation continues even if the employee count drops below 10. The <a href="https://labour.gov.in/" target="_blank" rel="noopener">Ministry of Labour</a> can also extend coverage to other establishments by notification.</p>
            </section>

            <!-- Taxation -->
            <section class="content-section" id="taxation">
                <h2>Taxation of Gratuity</h2>
                <p>Gratuity taxation depends on the employee category under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 10(10) of the Income Tax Act, 1961</a>:</p>

                <table class="rate-table">
                    <thead><tr><th>Employee Category</th><th>Tax Exemption</th><th>Limit</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Government employees</strong></td><td>Fully exempt under Section 10(10)(i)</td><td>&#8377;25 lakh</td></tr>
                        <tr><td><strong>Private &mdash; covered under Act</strong></td><td>Least of: actual gratuity, &#8377;20L, or formula amount</td><td>&#8377;20 lakh (lifetime)</td></tr>
                        <tr><td><strong>Private &mdash; not covered</strong></td><td>Least of: actual gratuity, &#8377;20L, or half-month salary per year</td><td>&#8377;20 lakh (lifetime)</td></tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Important:</strong> The &#8377;20 lakh limit is cumulative across your entire working life &mdash; not per employer. If you received &#8377;8 lakh gratuity from Employer A and &#8377;14 lakh from Employer B, only &#8377;12 lakh from Employer B is tax-exempt (total &#8377;20 lakh). The remaining &#8377;2 lakh is taxable as salary income. File your return accurately using Form 10E on the <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Income Tax portal</a>.</p>
                </div>
            </section>

            <!-- Forfeiture -->
            <section class="content-section" id="forfeiture">
                <h2>When Can Gratuity Be Forfeited?</h2>
                <p>Under Section 4(6) of the Act, an employer can forfeit gratuity partially or wholly only if the employee is terminated for:</p>

                <h3>Grounds for Forfeiture</h3>
                <p>Riotous or disorderly conduct, or any act of violence on the premises. Any act that constitutes an offence involving moral turpitude committed during the course of employment (provided the employee is convicted for such offence). Wilful omission or negligence causing damage or loss to employer property (forfeiture limited to the extent of damage/loss).</p>

                <h3>When Forfeiture Is NOT Allowed</h3>
                <p>An employer cannot deny gratuity for poor performance, voluntary resignation after 5 years, retrenchment, or any reason other than the three specified grounds above. Employees who believe their gratuity has been wrongfully denied can file a complaint with the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Controlling Authority (Assistant Labour Commissioner)</a> under Section 7 of the Act.</p>

                <div class="callout">
                    <p><strong>Need Gratuity Compliance Help?</strong> Patron Accounting handles gratuity computation, actuarial valuations (AS-15/Ind AS 19), Form I filing, and exit settlement processing for companies across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20gratuity%20calculation%20and%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert assistance &rarr;</a></p>
                </div>
            </section>

            <!-- FAQ -->
            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Gratuity</h2>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is gratuity calculated in India?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For employers covered under the Act: (Basic + DA) &times; 15 &times; Years &divide; 26. For those not covered: (Basic + DA) &times; 15 &times; Years &divide; 30. The 26 represents working days (excluding Sundays) and 15 represents half-month wages per year of service. Salary means last drawn basic plus dearness allowance only &mdash; HRA and other allowances are excluded from the calculation.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Who is eligible for gratuity?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Employees who complete 5 years of continuous service with the same employer. The 5-year rule is waived for death or disablement. Under the new Labour Codes, fixed-term employees qualify after 1 year (if 240+ working days). The Act covers establishments with 10+ employees. Once covered, the obligation continues even if headcount later drops below 10.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the maximum gratuity amount?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Maximum tax-exempt gratuity is &#8377;20 lakh for private employees and &#8377;25 lakh for government employees. Employers can pay more than &#8377;20 lakh, but the excess is called ex-gratia and is fully taxable. The &#8377;20 lakh limit is cumulative across your entire career &mdash; not per employer. So gratuity from all employers combined must not exceed &#8377;20 lakh for full tax exemption.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What does 15/26 mean in the formula?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">15 = half-month wages (15 days of salary) as reward per completed year of service. 26 = working days in a month (excluding Sundays). This gives a higher per-day rate than dividing by 30 (calendar days). For non-covered establishments, the divisor is 30, resulting in approximately 13% lower gratuity. The 15/26 fraction is the standardisation factor across the Act.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How are years of service rounded?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">If the final year has more than 6 months of service, it rounds up to the next full year. Example: 10 years 7 months = 11 years for calculation. 10 years 5 months = 10 years. This rounding can add significant value &mdash; for a &#8377;40,000 basic, one extra year adds ~&#8377;23,077. Always check your exact service dates against this rounding rule before accepting a gratuity settlement.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is gratuity taxable?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Government employees: fully exempt. Private employees covered under Act: least of actual gratuity, &#8377;20L, or formula amount is exempt. Not covered: least of actual, &#8377;20L, or half-month salary per year. The &#8377;20L limit is lifetime cumulative. Any excess is taxed as salary income at your applicable slab rate. File Form 10E on the Income Tax portal for relief under Section 89.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can an employer deny gratuity?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Only in three cases: riotous/disorderly conduct, offence involving moral turpitude (with conviction), or wilful negligence causing property damage (forfeiture limited to damage value). Poor performance, simple resignation, or retrenchment are NOT valid grounds for denial. File a complaint with the Assistant Labour Commissioner under Section 7 if gratuity is wrongfully denied.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What about employees not covered under the Act?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">For employers with fewer than 10 employees, gratuity is not statutory but may be paid as per company policy. The formula uses 30 (calendar days) as divisor instead of 26. Tax exemption under Section 10(10)(iii) applies: least of actual gratuity, &#8377;20L, or half-month salary per year of service. Some employers voluntarily follow the Act even when not legally required.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>When must the employer pay gratuity?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Within 30 days from the date gratuity becomes due (last working day, retirement, or death). Delay beyond 30 days attracts simple interest at 10% per annum. The employee or nominee must apply in Form I. The employer pays using Form L. If there is a dispute, the Controlling Authority (Assistant Labour Commissioner) resolves it within 2-3 months typically.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is gratuity part of CTC?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; most employers include gratuity in CTC at approximately 4.81% of basic salary annually. However, it is not paid monthly. It is a deferred benefit paid only on separation after 5 years of service. When converting CTC to in-hand salary, gratuity is subtracted along with employer PF to arrive at gross salary. Use our CTC to In-Hand Calculator for the full breakup.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens if an employee dies before 5 years?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The 5-year rule is waived for death or disablement. Gratuity is paid to the nominee (Form F) or legal heirs based on actual service period. Employer must pay within 30 days of the death. The nominee must apply in Form J. If no nomination exists, payment goes to legal heirs. Gratuity received by nominee on death of employee is fully exempt from income tax.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does the new Labour Code affect gratuity?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">The Code on Social Security, 2020 makes fixed-term employees eligible after 1 year (240+ working days) instead of 5 years. It also proposes basic salary must be at least 50% of gross wages &mdash; increasing the gratuity base for many employees. Implementation rules are still pending as of March 2026. Once enforced, gratuity liabilities for employers will increase significantly.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with gratuity compliance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a CA computes gratuity liability for financial statements (AS-15/Ind AS 19), arranges actuarial valuations, handles Form I filing, and advises on tax implications for both employer and employee. Patron Accounting provides complete payroll, gratuity, EPF, and ESI compliance services for businesses across India including exit settlement processing.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Gratuity Help?</h3>
                <p>Our team handles gratuity computation, actuarial valuations, and full payroll compliance for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20gratuity%20calculation%20and%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/gratuity-calculation-and-compliance-services" class="sidebar-link">Gratuity Compliance <span class="arrow">&rarr;</span></a>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/esic-calculation-and-compliance-services" class="sidebar-link">ESIC Compliance <span class="arrow">&rarr;</span></a>
                <a href="/professional-tax-pt-inr-calculator-compliance-services" class="sidebar-link">Professional Tax <span class="arrow">&rarr;</span></a>
                <a href="/pf-calculator" class="sidebar-link">PF Services <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/epf-pf-calculator" class="sidebar-link">EPF/PF Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
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
        let coveredUnderAct = true;
        let empType = 'private';

        function setCoverage(btn) { const el=btn.closest('.toggle-btn')||btn; coveredUnderAct=el.dataset.value==='yes'; el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active')); el.classList.add('active'); }
        function setEmpType(btn) { const el=btn.closest('.toggle-btn')||btn; empType=el.dataset.value; el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active')); el.classList.add('active'); }

        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function calcGratuity() {
            const salary = parseFloat(document.getElementById('lastSalary').value);
            const years = parseInt(document.getElementById('serviceYears').value);
            const months = parseInt(document.getElementById('serviceMonths').value);

            if (isNaN(salary) || salary <= 0) { alert('Please enter a valid salary.'); return; }
            if (isNaN(years) || years < 0) { alert('Please enter valid years of service.'); return; }

            // Round years: if months > 6, round up
            const effectiveYears = months > 6 ? years + 1 : years;
            const totalMonths = years * 12 + months;
            const eligible = totalMonths >= 60; // 5 years = 60 months

            const divisor = coveredUnderAct ? 26 : 30;
            const gratuity = Math.round((salary * 15 * effectiveYears) / divisor);

            // Tax exemption
            let taxFreeLimit = empType === 'govt' ? 2500000 : 2000000;
            let taxExempt, taxable;
            if (empType === 'govt') {
                taxExempt = Math.min(gratuity, taxFreeLimit);
                taxable = Math.max(0, gratuity - taxFreeLimit);
            } else {
                taxExempt = Math.min(gratuity, taxFreeLimit);
                taxable = Math.max(0, gratuity - taxFreeLimit);
            }

            let h = '';

            // Eligibility badge
            if (eligible) {
                h += '<div class="elig-badge eligible">\u2705 Eligible for gratuity \u2014 ' + (years > 0 ? years + ' year' + (years > 1 ? 's' : '') : '') + (months > 0 ? ' ' + months + ' month' + (months > 1 ? 's' : '') : '') + ' of service (\u2265 5 years)</div>';
            } else {
                h += '<div class="elig-badge not-eligible">\u26A0 Not yet eligible \u2014 ' + (years > 0 ? years + ' year' + (years > 1 ? 's' : '') : '') + (months > 0 ? ' ' + months + ' month' + (months > 1 ? 's' : '') : '') + ' of service (need 5 years). Exception: death or disablement waives the 5-year rule.</div>';
            }

            // Result cards
            h += '<div class="result-grid">';
            h += '<div class="result-card highlight" style="grid-column:1/-1;text-align:center;"><div class="result-label">Gratuity Amount</div><div class="result-value" style="font-size:28px;">' + fmt(gratuity) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Effective Years</div><div class="result-value">' + effectiveYears + ' yr' + (effectiveYears !== 1 ? 's' : '') + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Formula Used</div><div class="result-value" style="font-size:14px;">15/' + divisor + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Tax-Free Portion</div><div class="result-value" style="color:var(--success);">' + fmt(taxExempt) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Taxable Portion</div><div class="result-value" style="color:' + (taxable > 0 ? 'var(--danger)' : 'var(--success)') + ';">' + fmt(taxable) + '</div></div>';
            h += '</div>';

            // Calculation breakdown
            h += '<div class="tax-box">';
            h += '<div class="tax-row"><span class="tax-label">Last Drawn Salary (Basic + DA)</span><span class="tax-value">' + fmt(salary) + '/mo</span></div>';
            h += '<div class="tax-row"><span class="tax-label">Actual Service</span><span class="tax-value">' + years + ' yr' + (months > 0 ? ' ' + months + ' mo' : '') + '</span></div>';
            if (months > 6) {
                h += '<div class="tax-row"><span class="tax-label">Rounded Up (months > 6)</span><span class="tax-value">' + effectiveYears + ' years</span></div>';
            }
            h += '<div class="tax-row"><span class="tax-label">Formula</span><span class="tax-value">' + fmt(salary) + ' \u00D7 15 \u00D7 ' + effectiveYears + ' \u00F7 ' + divisor + '</span></div>';
            h += '<div class="tax-row highlight"><span class="tax-label"><strong>Gratuity Payable</strong></span><span class="tax-value"><strong>' + fmt(gratuity) + '</strong></span></div>';
            h += '<div class="tax-row"><span class="tax-label">Tax-Free Limit (' + (empType === 'govt' ? 'Govt: \u20B925L' : 'Private: \u20B920L') + ')</span><span class="tax-value">' + fmt(taxFreeLimit) + '</span></div>';
            h += '<div class="tax-row"><span class="tax-label">Tax-Exempt Amount</span><span class="tax-value" style="color:var(--success);">' + fmt(taxExempt) + '</span></div>';
            if (taxable > 0) {
                h += '<div class="tax-row"><span class="tax-label">Taxable Amount (at your slab rate)</span><span class="tax-value" style="color:var(--danger);">' + fmt(taxable) + '</span></div>';
            }
            h += '</div>';

            // Monthly equivalent insight
            const monthlyEquiv = Math.round(gratuity / totalMonths);
            h += '<div class="callout" style="margin-top:16px;"><p><strong>Insight:</strong> Your gratuity of ' + fmt(gratuity) + ' works out to approximately ' + fmt(monthlyEquiv) + ' per month of service. ' + (coveredUnderAct ? 'Being covered under the Act (\u00F726) gives you ~13% more than the non-covered formula (\u00F730) would.' : 'If your employer were covered under the Act (\u00F726), your gratuity would be ' + fmt(Math.round((salary * 15 * effectiveYears) / 26)) + ' \u2014 approximately 13% higher.') + '</p></div>';

            document.getElementById('gratOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() {
            document.getElementById('lastSalary').value = '';
            document.getElementById('serviceYears').value = '';
            document.getElementById('serviceMonths').value = '0';
            coveredUnderAct = true; empType = 'private';
            document.querySelectorAll('.toggle-group').forEach(g => { const btns = g.querySelectorAll('.toggle-btn'); btns.forEach((b, i) => b.classList.toggle('active', i === 0)); });
            document.getElementById('resultSection').classList.remove('visible');
        }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('lastSalary').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcGratuity(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>
@endsection