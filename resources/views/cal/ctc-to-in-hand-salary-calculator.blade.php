@extends('layouts.app')
@section('meta')
    <title>CTC to In-Hand Salary Calculator | Take-Home FY 2025-26</title>
    <meta name="description" content="CTC to in-hand salary calculator: convert your CTC to monthly take-home pay after EPF, gratuity, professional tax and income tax for FY 2025-26. Free, instant!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ctc-to-in-hand-salary-calculator">
    <meta property="og:title" content="CTC to In-Hand Salary Calculator — Take Home Pay 2026">
    <meta property="og:description" content="Convert CTC to monthly take-home salary after EPF, gratuity, professional tax and income tax for FY 2025-26.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_IN">
    <meta property="og:url" content="/tools/ctc-to-in-hand-salary-calculator">
    <meta property="og:image" content="/tools/ctc-to-in-hand-salary-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CTC to In-Hand Salary Calculator — Take Home Pay 2026">
    <meta name="twitter:description" content="Convert CTC to in-hand salary for FY 2025-26. EPF, tax, gratuity deductions. Free!">
    <meta name="twitter:image" content="/tools/ctc-to-in-hand-salary-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "CTC to In-Hand Salary Calculator India",
      "description": "CTC to In-Hand Salary Calculator converts annual Cost to Company into monthly take-home salary after deducting employer PF, gratuity, employee PF, professional tax, and income tax under both old and new tax regimes for FY 2025-26. Shows complete salary breakup with Basic, HRA, Special Allowance, and all statutory deductions for Indian employees.",
      "url": "/tools/ctc-to-in-hand-salary-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "CTC to In-Hand Salary Calculator", "item": "/tools/ctc-to-in-hand-salary-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "How is in-hand salary calculated from CTC?", "acceptedAnswer": { "@type": "Answer", "text": "In-hand salary is calculated by first deriving gross salary from CTC by subtracting employer PF contribution and gratuity. Then employee deductions like EPF (12% of basic), professional tax (up to Rs 2,500 per year), and income tax (TDS) are subtracted from gross salary. The resulting amount is your monthly take-home or in-hand salary. Typically in-hand salary is 60-70% of CTC." } },
      { "@type": "Question", "name": "What is the difference between CTC and in-hand salary?", "acceptedAnswer": { "@type": "Answer", "text": "CTC (Cost to Company) is the total annual expenditure by the employer including basic salary, allowances, employer PF, gratuity, insurance, and bonuses. In-hand salary is the net amount credited to your bank account after deducting employee PF, professional tax, income tax (TDS), and other deductions. CTC includes components like employer PF and gratuity that never reach your bank account directly." } },
      { "@type": "Question", "name": "What percentage of CTC is basic salary?", "acceptedAnswer": { "@type": "Answer", "text": "Basic salary typically ranges from 40% to 50% of CTC in India. There is no statutory minimum for basic salary in the private sector, but it impacts HRA calculation, PF contribution, and gratuity amount. A higher basic means higher PF and gratuity but also higher tax liability. Most companies set basic at 40% of gross salary to balance tax efficiency and retirement benefits." } },
      { "@type": "Question", "name": "What is EPF contribution and how does it affect salary?", "acceptedAnswer": { "@type": "Answer", "text": "Both employer and employee contribute 12% of basic salary (capped at Rs 15,000 per month) to the Employee Provident Fund. The employee contribution of Rs 1,800 per month is deducted from gross salary. The employer contribution is part of CTC but does not appear in your in-hand salary. Of the employer 12%, 8.33% goes to Employees Pension Scheme (EPS) and 3.67% to EPF account." } },
      { "@type": "Question", "name": "What is professional tax and which states charge it?", "acceptedAnswer": { "@type": "Answer", "text": "Professional tax is a state-level employment tax with a maximum limit of Rs 2,500 per year. States that levy it include Maharashtra, Karnataka, West Bengal, Andhra Pradesh, Telangana, Tamil Nadu, Gujarat, Madhya Pradesh, Kerala, Meghalaya, Tripura, Assam, and Odisha. The rate varies by state and salary slab. Delhi, Haryana, Rajasthan, UP, and Punjab do not levy professional tax." } },
      { "@type": "Question", "name": "How is HRA calculated and what is the tax exemption?", "acceptedAnswer": { "@type": "Answer", "text": "HRA is typically 50% of basic salary for metro cities (Mumbai, Delhi, Kolkata, Chennai) and 40% for non-metro cities. HRA tax exemption under Section 10(13A) is the lowest of actual HRA received, rent paid minus 10% of basic salary, or 50% of basic for metro (40% for non-metro). If you do not live in rented accommodation, the entire HRA is fully taxable." } },
      { "@type": "Question", "name": "What are the income tax slabs under the new regime for FY 2025-26?", "acceptedAnswer": { "@type": "Answer", "text": "Under the new tax regime for FY 2025-26: income up to Rs 4 lakh is nil, Rs 4-8 lakh at 5%, Rs 8-12 lakh at 10%, Rs 12-16 lakh at 15%, Rs 16-20 lakh at 20%, Rs 20-24 lakh at 25%, and above Rs 24 lakh at 30%. Standard deduction of Rs 75,000 applies. Tax rebate under Section 87A makes income up to Rs 12 lakh effectively tax-free under the new regime." } },
      { "@type": "Question", "name": "What is gratuity and how is it calculated?", "acceptedAnswer": { "@type": "Answer", "text": "Gratuity is a retirement benefit payable after 5 years of continuous service under the Payment of Gratuity Act, 1972. It is calculated as: Basic Salary times 15 divided by 26 times Years of Service. For CTC purposes, employers typically provision gratuity at 4.81% of basic salary annually. Gratuity is part of CTC but is paid only upon separation after completing 5 years of service." } },
      { "@type": "Question", "name": "Should I choose old or new tax regime for higher take-home salary?", "acceptedAnswer": { "@type": "Answer", "text": "The new regime is beneficial if you do not have significant deductions under 80C, 80D, HRA exemption, and home loan interest. For salaries up to Rs 12 lakh, the new regime gives zero tax with the rebate. For higher salaries, compare both regimes by calculating total deductions and exemptions available under the old regime. Use our calculator to compare both and pick the one giving higher take-home." } },
      { "@type": "Question", "name": "What is the maximum limit for EPF contribution?", "acceptedAnswer": { "@type": "Answer", "text": "EPF contribution is calculated on basic salary capped at Rs 15,000 per month. Both employee and employer contribute 12% each, which is Rs 1,800 per month. If basic salary exceeds Rs 15,000, some employers restrict PF to the statutory limit while others contribute on actual basic. The choice affects both in-hand salary and retirement corpus. Voluntary PF above the limit is allowed." } },
      { "@type": "Question", "name": "What components are included in CTC but not in in-hand salary?", "acceptedAnswer": { "@type": "Answer", "text": "Components in CTC but not in monthly in-hand salary include employer PF contribution (12% of basic), gratuity provision (4.81% of basic), employer ESI contribution (3.25% of gross if applicable), group health insurance premium, performance bonus or variable pay (paid quarterly or annually, not monthly), and any other employer-borne benefits like food coupons or company car lease." } },
      { "@type": "Question", "name": "How does variable pay or bonus affect in-hand salary?", "acceptedAnswer": { "@type": "Answer", "text": "Variable pay or performance bonus is part of CTC but not part of monthly fixed salary. It is typically paid quarterly or annually based on performance targets. When calculating monthly in-hand salary, exclude variable pay since it is not guaranteed. Our calculator lets you enter the bonus component separately so your monthly take-home reflects only the fixed guaranteed portion of your package." } },
      { "@type": "Question", "name": "Can a CA help with salary structuring for tax efficiency?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a Chartered Accountant can restructure your salary to maximise take-home pay legally. This includes optimising HRA, setting basic salary at the right percentage, utilising meal vouchers and NPS employer contribution, and advising on the best tax regime. Patron Accounting provides salary structuring advisory and complete payroll management services for Indian businesses." } }
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
    
        .salary-breakdown { margin-top: 20px; }
        .sb-row { display: flex; justify-content: space-between; padding: 10px 16px; font-size: 14px; border-bottom: 1px solid var(--border); }
        .sb-row:hover { background: var(--surface); }
        .sb-row.section-head { background: var(--primary); color: #fff; font-weight: 700; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; border-radius: var(--radius) var(--radius) 0 0; border-bottom: none; }
        .sb-row.section-head:not(:first-child) { border-radius: 0; margin-top: 8px; }
        .sb-row.subtotal { background: var(--surface-alt); font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary-light); }
        .sb-row.grand-total { background: var(--primary); color: #fff; font-weight: 700; font-size: 16px; border-radius: 0 0 var(--radius) var(--radius); }
        .sb-label { color: var(--text-secondary); }
        .sb-row.section-head .sb-label, .sb-row.grand-total .sb-label { color: inherit; }
        .sb-value { font-family: var(--font-mono); font-weight: 700; }
        .sb-row.subtotal .sb-label { color: var(--primary-dark); }
        .regime-compare { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 20px; }
        @media (max-width: 500px) { .regime-compare { grid-template-columns: 1fr; } }
        .regime-card { background: var(--card); border: 2px solid var(--border); border-radius: var(--radius); padding: 20px; text-align: center; }
        .regime-card.winner { border-color: var(--success); background: rgba(5,150,105,0.04); }
        .regime-card h4 { font-size: 14px; color: var(--text-secondary); margin-bottom: 8px; }
        .regime-card .regime-amount { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .regime-card.winner .regime-amount { color: var(--success); }
        .regime-card .regime-tag { display: inline-block; margin-top: 8px; padding: 3px 10px; border-radius: 20px; font-size: 11px; font-weight: 700; }
        .regime-card.winner .regime-tag { background: #D1FAE5; color: #059669; }
    
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
        <a href="#components">Salary Components</a>
        <a href="#tax-slabs">Tax Slabs 2026</a>
        <a href="#tips">Tax Saving Tips</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        CTC to In-Hand Salary Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA & CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>CTC to In-Hand Salary Calculator — <span>Take Home Pay 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This CTC to In-Hand Salary Calculator converts your annual Cost to Company (CTC) into monthly take-home pay. It breaks down your salary into Basic, HRA, Special Allowance, and deducts employer PF, gratuity, employee PF, professional tax, and income tax under both old and new regimes for FY 2025-26. Shows which tax regime gives you higher take-home. Updated with Budget 2025 slabs and &#8377;75,000 standard deduction.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Your In-Hand Salary</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the salary formulas below.</div></noscript>

                <div class="calc-row">
                    <div class="form-group"><label for="annualCTC">Annual CTC (&#8377;)</label><input type="number" id="annualCTC" placeholder="e.g. 1000000" min="0" step="1" autocomplete="off"></div>
                    <div class="form-group"><label for="bonus">Annual Bonus in CTC (&#8377;)</label><input type="number" id="bonus" placeholder="e.g. 50000 (0 if none)" min="0" step="1" value="0" autocomplete="off"></div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="basicPct">Basic Salary (% of Gross)</label>
                        <select id="basicPct">
                            <option value="40">40% (Common)</option>
                            <option value="50">50%</option>
                            <option value="35">35%</option>
                            <option value="45">45%</option>
                            <option value="60">60%</option>
                        </select>
                    </div>
                    <div class="form-group"><label>City Type (for HRA)</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="metro" onclick="setCity(this)">Metro<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">50% of Basic</small></button>
                            <button type="button" class="toggle-btn" data-value="nonmetro" onclick="setCity(this)">Non-Metro<br><small style="font-weight:400;font-size:11px;color:inherit;opacity:0.7">40% of Basic</small></button>
                        </div>
                    </div>
                </div>

                <div class="calc-row">
                    <div class="form-group"><label for="pfOption">EPF Contribution</label>
                        <select id="pfOption">
                            <option value="statutory">Statutory (12% of &#8377;15,000 cap)</option>
                            <option value="actual">Actual (12% of full Basic)</option>
                            <option value="none">No PF (Opted out)</option>
                        </select>
                    </div>
                    <div class="form-group"><label for="ptState">Professional Tax State</label>
                        <select id="ptState">
                            <option value="2400">Maharashtra (&#8377;2,400/yr)</option>
                            <option value="2400">Karnataka (&#8377;2,400/yr)</option>
                            <option value="2500">West Bengal (&#8377;2,500/yr)</option>
                            <option value="2500">Telangana (&#8377;2,500/yr)</option>
                            <option value="2500">Andhra Pradesh (&#8377;2,500/yr)</option>
                            <option value="2400">Tamil Nadu (&#8377;2,400/yr)</option>
                            <option value="2500">Gujarat (&#8377;2,500/yr)</option>
                            <option value="2500">Kerala (&#8377;2,500/yr)</option>
                            <option value="2400">Madhya Pradesh (&#8377;2,400/yr)</option>
                            <option value="0">Delhi / Haryana / UP / Punjab (No PT)</option>
                            <option value="0">Rajasthan (No PT)</option>
                            <option value="2500">Other State (&#8377;2,500/yr)</option>
                        </select>
                    </div>
                </div>

                <button class="btn-calculate" onclick="calculateSalary()">Calculate In-Hand Salary</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="salaryOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <!-- Content sections -->
            <section class="content-section" id="how-it-works">
                <h2>How CTC to In-Hand Salary Calculation Works</h2>
                <p>Your CTC (Cost to Company) is not what you receive in your bank account. The actual in-hand salary is typically 60-70% of CTC after various deductions. Here is the step-by-step process:</p>

                <div class="formula-box">
                    <span class="label">Step 1: Derive Gross Salary</span><br>
                    Gross Salary = CTC &minus; Employer PF &minus; Gratuity &minus; Bonus (if any)<br><br>
                    <span class="label">Step 2: Split Gross into Components</span><br>
                    Basic = Gross &times; Basic% (typically 40-50%)<br>
                    HRA = Basic &times; 50% (metro) or 40% (non-metro)<br>
                    Special Allowance = Gross &minus; Basic &minus; HRA<br><br>
                    <span class="label">Step 3: Calculate Deductions</span><br>
                    Employee PF = 12% of Basic (capped at &#8377;15,000/mo)<br>
                    Professional Tax = State-specific (max &#8377;2,500/yr)<br>
                    Income Tax = As per chosen tax regime slabs<br><br>
                    <span class="label">Step 4: In-Hand Salary</span><br>
                    Monthly In-Hand = (Gross &minus; Employee PF &minus; Prof Tax &minus; Income Tax) &divide; 12
                </div>

                <div class="callout">
                    <p><strong>CA Tip:</strong> When comparing job offers, always calculate the in-hand salary rather than comparing CTC. A &#8377;15 LPA offer with 20% variable pay will often give lower monthly in-hand than a &#8377;13 LPA offer with 100% fixed pay. Our calculator excludes variable/bonus from the monthly calculation since it is not guaranteed every month. Verify with the <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">EPFO portal</a> for your PF contribution details.</p>
                </div>
            </section>

            <section class="content-section" id="components">
                <h2>Understanding Salary Components</h2>

                <h3>Basic Salary</h3>
                <p>The core fixed component, typically 40-50% of gross salary. It is fully taxable and determines HRA, PF, and gratuity calculations. A higher basic increases retirement benefits but also increases tax liability. Most companies set basic at 40% to balance tax efficiency with employee benefits. There is no statutory minimum for basic in the private sector, though the <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">Code on Wages, 2019</a> proposes that basic should be at least 50% of gross — though implementation rules are still pending.</p>

                <h3>House Rent Allowance (HRA)</h3>
                <p>Provided to employees living in rented accommodation. HRA is 50% of basic for metro cities (Mumbai, Delhi, Kolkata, Chennai) and 40% for non-metro cities. Tax exemption under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 10(13A)</a> is the minimum of: actual HRA received, rent paid minus 10% of basic, or 50%/40% of basic. If you do not live in rented housing, the entire HRA is fully taxable.</p>

                <h3>Employee Provident Fund (EPF)</h3>
                <p>Both employer and employee contribute 12% of basic salary to EPF. The statutory cap is &#8377;15,000 per month basic — meaning maximum contribution is &#8377;1,800/month each. Of the employer's 12%, 8.33% goes to EPS (Employees' Pension Scheme) and 3.67% to the EPF account. Employee contribution qualifies for Section 80C deduction. Check your balance at <a href="https://www.epfindia.gov.in/" target="_blank" rel="noopener">epfindia.gov.in</a>.</p>

                <h3>Gratuity</h3>
                <p>A retirement benefit under the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Payment of Gratuity Act, 1972</a> payable after 5 years of continuous service. For CTC purposes, employers provision approximately 4.81% of basic salary annually. Formula: (Basic &times; 15 &divide; 26) &times; Years of Service. Gratuity is part of CTC but is not paid monthly — it is paid only on separation after completing 5 years.</p>

                <h3>Professional Tax</h3>
                <p>A state-level employment tax with a constitutional maximum of &#8377;2,500 per year. Rates vary by state — Maharashtra charges &#8377;2,400/year for salaries above &#8377;10,000/month, Karnataka charges &#8377;2,400/year, West Bengal charges &#8377;2,500/year. States like Delhi, Haryana, UP, Rajasthan, and Punjab do not levy professional tax. It is deductible from taxable income under Section 16(iii).</p>

                <div class="callout warn">
                    <p><strong>Note:</strong> ESI (Employee State Insurance) applies if gross salary is &#8377;21,000/month or below. Employee contributes 0.75% and employer 3.25%. For most mid-to-senior salaries, ESI does not apply. If your gross salary is above &#8377;21,000/month, ESI contribution is zero. Check eligibility at <a href="https://www.esic.gov.in/" target="_blank" rel="noopener">esic.gov.in</a>.</p>
                </div>
            </section>

            <section class="content-section" id="tax-slabs">
                <h2>Income Tax Slabs FY 2025-26 (AY 2026-27)</h2>
                <p>The Union Budget 2025 introduced revised slabs for the new tax regime. The new regime is the default unless the employee specifically opts for the old regime. Here are both sets of slabs:</p>

                <h3>New Tax Regime (Default) — FY 2025-26</h3>
                <table class="rate-table">
                    <thead><tr><th>Income Slab</th><th>Tax Rate</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;4,00,000</td><td><span class="rate-badge r0">Nil</span></td></tr>
                        <tr><td>&#8377;4,00,001 &ndash; &#8377;8,00,000</td><td><span class="rate-badge r5">5%</span></td></tr>
                        <tr><td>&#8377;8,00,001 &ndash; &#8377;12,00,000</td><td><span class="rate-badge r12">10%</span></td></tr>
                        <tr><td>&#8377;12,00,001 &ndash; &#8377;16,00,000</td><td><span class="rate-badge r18">15%</span></td></tr>
                        <tr><td>&#8377;16,00,001 &ndash; &#8377;20,00,000</td><td><span class="rate-badge r18">20%</span></td></tr>
                        <tr><td>&#8377;20,00,001 &ndash; &#8377;24,00,000</td><td><span class="rate-badge r28">25%</span></td></tr>
                        <tr><td>Above &#8377;24,00,000</td><td><span class="rate-badge r28">30%</span></td></tr>
                    </tbody>
                </table>
                <p>Standard deduction: &#8377;75,000. Rebate under 87A: tax payable is nil if taxable income does not exceed &#8377;12,00,000. No HRA exemption, 80C, 80D, or home loan deductions allowed under new regime.</p>

                <h3>Old Tax Regime (Optional) — FY 2025-26</h3>
                <table class="rate-table">
                    <thead><tr><th>Income Slab</th><th>Tax Rate</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;2,50,000</td><td><span class="rate-badge r0">Nil</span></td></tr>
                        <tr><td>&#8377;2,50,001 &ndash; &#8377;5,00,000</td><td><span class="rate-badge r5">5%</span></td></tr>
                        <tr><td>&#8377;5,00,001 &ndash; &#8377;10,00,000</td><td><span class="rate-badge r18">20%</span></td></tr>
                        <tr><td>Above &#8377;10,00,000</td><td><span class="rate-badge r28">30%</span></td></tr>
                    </tbody>
                </table>
                <p>Standard deduction: &#8377;50,000. Allows deductions under 80C (&#8377;1.5L), 80D (health insurance), HRA exemption, home loan interest (&#8377;2L), NPS employer contribution, and other sections.</p>
            </section>

            <section class="content-section" id="tips">
                <h2>Tax Saving Tips for Salaried Employees</h2>
                <h3>Under Old Regime</h3>
                <p>Maximise Section 80C (&#8377;1.5L via EPF, PPF, ELSS, life insurance), claim HRA exemption with rent receipts, use Section 80D for health insurance (&#8377;25K self + &#8377;50K parents), home loan interest under Section 24(b), and NPS contribution under 80CCD(1B) for additional &#8377;50K deduction.</p>
                <h3>Under New Regime</h3>
                <p>The new regime offers lower tax rates but no deductions except standard deduction (&#8377;75K) and employer NPS contribution under 80CCD(2). For employees without significant investments or home loans, the new regime often gives better results for salaries up to &#8377;12-15 LPA. The rebate under Section 87A makes income up to &#8377;12L effectively tax-free.</p>
                <h3>Salary Restructuring</h3>
                <p>Ask your employer to restructure salary to include NPS employer contribution (tax-free up to 14% of basic under new regime), meal vouchers (&#8377;50/meal, tax-free under old regime), and car lease (reduces taxable perquisite). A CA can help optimise your salary structure legally. <a href="/payroll-services" target="_blank" rel="noopener">Patron Accounting payroll services &rarr;</a></p>

                <div class="callout">
                    <p><strong>Need Payroll or Tax Planning Help?</strong> Patron Accounting provides payroll processing, salary structuring, TDS computation, and tax planning advisory for employees and businesses across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20salary%20structuring%20and%20tax%20planning.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get expert payroll help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About CTC and In-Hand Salary</h2>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is in-hand salary calculated from CTC?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Derive gross salary by subtracting employer PF and gratuity from CTC. Then subtract employee PF (12% of basic), professional tax (up to &#8377;2,500/year), and income tax from gross salary. The result divided by 12 is your monthly in-hand salary. Typically 60-70% of CTC reaches your bank account — the rest goes to PF, gratuity, and taxes.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the difference between CTC and in-hand salary?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">CTC is the total annual cost to the employer including basic, allowances, employer PF, gratuity, and insurance. In-hand salary is the net amount credited monthly after deducting employee PF, professional tax, and income tax. CTC includes components like employer PF and gratuity that never reach your bank. A &#8377;10L CTC typically yields &#8377;60-65K monthly in-hand.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What percentage of CTC is basic salary?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Basic salary typically ranges from 40-50% of CTC. There is no statutory minimum in the private sector. Higher basic increases PF contributions (better for retirement) but also increases tax liability. Most companies set basic at 40% of gross to balance tax efficiency with employee benefits. The proposed Code on Wages mandates 50% minimum but rules are pending.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is EPF contribution and how does it affect salary?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Both employer and employee contribute 12% of basic salary (capped at &#8377;15,000/month basic = &#8377;1,800/month each). Employee contribution is deducted from gross salary. Employer contribution is part of CTC but goes directly to your EPF account, not your bank. Of employer 12%, 8.33% goes to EPS (pension) and 3.67% to EPF. Employee PF qualifies for 80C deduction.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is professional tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Professional tax is a state-level employment tax capped at &#8377;2,500/year constitutionally. Maharashtra and Karnataka charge &#8377;2,400/year, West Bengal and Telangana &#8377;2,500/year. Delhi, Haryana, UP, Rajasthan, and Punjab do not levy it. The amount varies by salary slab within each state. It is deductible from taxable income under Section 16(iii) of the Income Tax Act.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is HRA calculated?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">HRA is typically 50% of basic for metro cities (Mumbai, Delhi, Kolkata, Chennai) and 40% for non-metro. Tax exemption under Section 10(13A) is the lowest of: actual HRA received, rent paid minus 10% of basic, or 50%/40% of basic. If you don't live in rented accommodation, the entire HRA is fully taxable. Submit rent receipts to claim the exemption.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What are the new tax regime slabs for FY 2025-26?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">New regime FY 2025-26: up to &#8377;4L nil, &#8377;4-8L at 5%, &#8377;8-12L at 10%, &#8377;12-16L at 15%, &#8377;16-20L at 20%, &#8377;20-24L at 25%, above &#8377;24L at 30%. Standard deduction &#8377;75,000. Rebate under 87A makes income up to &#8377;12L effectively tax-free. No HRA, 80C, 80D deductions allowed — only standard deduction and employer NPS.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is gratuity?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Gratuity is a retirement benefit under the Payment of Gratuity Act, 1972, payable after 5 years of service. Formula: Basic &times; 15 &divide; 26 &times; Years of Service. Employers provision ~4.81% of basic annually in CTC. It is not paid monthly — only on separation after 5 years. Gratuity up to &#8377;20 lakhs is tax-exempt. It is part of CTC but not part of monthly in-hand salary.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Old vs new tax regime — which gives more take-home?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">New regime is better if you lack significant deductions (80C, 80D, HRA, home loan). For income up to &#8377;12L, new regime gives zero tax via rebate. For higher incomes, compare total deductions available in old regime against lower rates in new regime. Use our calculator to compare both — it shows in-hand salary under each regime side by side.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the EPF contribution cap?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">EPF is calculated on basic salary capped at &#8377;15,000/month — meaning maximum mandatory contribution is &#8377;1,800/month each (employer and employee). If basic exceeds &#8377;15,000, some employers restrict PF to statutory limit while others contribute on actual basic. Higher PF means lower in-hand but larger retirement corpus. Voluntary PF above the cap is allowed.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What CTC components don't reach my bank?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Components in CTC but not in monthly in-hand: employer PF (12% of basic), gratuity provision (~4.81% of basic), employer ESI (3.25% if applicable), group health insurance premium, variable pay or bonus (paid quarterly/annually, not monthly), food coupons, and company car lease. These are real costs to the employer but do not appear in your monthly bank credit.</div></div></div>
                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with salary structuring?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes — a CA can restructure salary to maximise take-home legally. This includes optimising basic percentage, HRA, meal vouchers, NPS employer contribution, car lease perquisite, and advising on the best tax regime. Patron Accounting provides salary structuring advisory and complete payroll management for Indian businesses across all entity types.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need Payroll Help?</h3>
                <p>Our CAs handle payroll processing, TDS computation, salary structuring, and compliance for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20payroll%20and%20salary%20structuring.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/payroll-processing-and-management-services" class="sidebar-link">Payroll Management <span class="arrow">&rarr;</span></a>
                <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
                <a href="/income-tax-return" class="sidebar-link">Income Tax Return <span class="arrow">&rarr;</span></a>
                <a href="/itr-filing-for-salary" class="sidebar-link">ITR for Salaried <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/gst-calculator" class="sidebar-link">GST Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/tds-rate-finder-calculator" class="sidebar-link">TDS Rate Finder <span class="arrow">&rarr;</span></a>
                <a href="/tools/profit-loss-generator" class="sidebar-link">P&L Generator <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>From the Blog</h3>
                <a href="/blog/cost-to-company-ctc-components-calculation-and-salary-breakup-explained" class="sidebar-link">CTC Components Explained <span class="arrow">&rarr;</span></a>
                <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Guide <span class="arrow">&rarr;</span></a>
                <a href="/blog/income-tax-scrutiny-and-assessment-representation-sections-1432-1433-and-144-explained" class="sidebar-link">Income Tax Scrutiny Guide <span class="arrow">&rarr;</span></a>
            </div>
        </aside>
    </div>

<script>
        let cityType = 'metro';
        function setCity(btn) { const el=btn.closest('.toggle-btn')||btn;cityType=el.dataset.value;el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));el.classList.add('active'); }

        function calcTaxNew(taxableIncome) {
            // New Regime FY 2025-26 slabs
            const sd = 75000;
            let ti = taxableIncome - sd;
            if (ti <= 0) return 0;
            // Rebate 87A: if taxable income (after SD) <= 12L, tax = 0
            if (ti <= 1200000) return 0;
            let tax = 0;
            const slabs = [[400000,0],[400000,0.05],[400000,0.10],[400000,0.15],[400000,0.20],[400000,0.25],[Infinity,0.30]];
            let remaining = ti;
            for (const [limit, rate] of slabs) {
                if (remaining <= 0) break;
                const taxable = Math.min(remaining, limit);
                tax += taxable * rate;
                remaining -= taxable;
            }
            tax += tax * 0.04; // 4% cess
            return Math.round(tax);
        }

        function calcTaxOld(taxableIncome, empPF) {
            // Old Regime FY 2025-26
            const sd = 50000;
            const sec80c = Math.min(empPF, 150000); // PF counts towards 80C
            let ti = taxableIncome - sd - sec80c;
            if (ti <= 0) return 0;
            if (ti <= 500000) { let t = 0; if(ti>250000) t=(ti-250000)*0.05; if(t<=12500) return 0; return Math.round(t*1.04); }
            let tax = 0;
            if (ti > 250000) tax += Math.min(ti - 250000, 250000) * 0.05;
            if (ti > 500000) tax += Math.min(ti - 500000, 500000) * 0.20;
            if (ti > 1000000) tax += (ti - 1000000) * 0.30;
            tax += tax * 0.04;
            return Math.round(tax);
        }

        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function calculateSalary() {
            const ctc = parseFloat(document.getElementById('annualCTC').value);
            if (isNaN(ctc) || ctc <= 0) { alert('Please enter a valid annual CTC.'); return; }

            const bonus = parseFloat(document.getElementById('bonus').value) || 0;
            const basicPct = parseInt(document.getElementById('basicPct').value) / 100;
            const pfOption = document.getElementById('pfOption').value;
            const ptAnnual = parseInt(document.getElementById('ptState').value);
            const hraPct = cityType === 'metro' ? 0.50 : 0.40;

            // Employer PF: 12% of basic (capped at 15000/mo basic for statutory)
            // Gratuity: ~4.81% of basic
            // We need to solve: CTC = Gross + EmployerPF + Gratuity + Bonus
            // Gross = Basic + HRA + Special
            // Basic = Gross * basicPct
            // EmployerPF = 12% of min(Basic, 15000*12) for statutory, 12% of Basic for actual
            // Gratuity = 4.81% of Basic

            // Iterative approach: Gross = CTC - Bonus - EmployerPF - Gratuity
            // Since EPF and Gratuity depend on Basic which depends on Gross, iterate
            let gross = ctc - bonus;
            for (let i = 0; i < 10; i++) {
                const basic = gross * basicPct;
                const pfBase = pfOption === 'statutory' ? Math.min(basic, 15000 * 12) : (pfOption === 'actual' ? basic : 0);
                const employerPF = pfBase * 0.12;
                const gratuity = basic * 0.0481;
                gross = ctc - bonus - employerPF - gratuity;
            }

            const basic = gross * basicPct;
            const hra = basic * hraPct;
            const specialAllowance = gross - basic - hra;

            const pfBase = pfOption === 'statutory' ? Math.min(basic, 15000 * 12) : (pfOption === 'actual' ? basic : 0);
            const employerPF = pfBase * 0.12;
            const employeePF = pfBase * 0.12;
            const gratuity = basic * 0.0481;

            // Income tax - both regimes
            const taxNew = calcTaxNew(gross);
            const taxOld = calcTaxOld(gross, employeePF);

            const annualDeductionsNew = employeePF + ptAnnual + taxNew;
            const annualDeductionsOld = employeePF + ptAnnual + taxOld;
            const annualInHandNew = gross - annualDeductionsNew;
            const annualInHandOld = gross - annualDeductionsOld;
            const monthlyInHandNew = annualInHandNew / 12;
            const monthlyInHandOld = annualInHandOld / 12;

            const betterRegime = monthlyInHandNew >= monthlyInHandOld ? 'new' : 'old';
            const bestMonthly = Math.max(monthlyInHandNew, monthlyInHandOld);

            let h = '';

            // Regime comparison
            h += '<div class="regime-compare">';
            h += '<div class="regime-card ' + (betterRegime === 'new' ? 'winner' : '') + '"><h4>New Tax Regime</h4><div class="regime-amount">' + fmt(monthlyInHandNew) + '/mo</div>' + (betterRegime === 'new' ? '<span class="regime-tag">\u2713 Better for you</span>' : '') + '</div>';
            h += '<div class="regime-card ' + (betterRegime === 'old' ? 'winner' : '') + '"><h4>Old Tax Regime</h4><div class="regime-amount">' + fmt(monthlyInHandOld) + '/mo</div>' + (betterRegime === 'old' ? '<span class="regime-tag">\u2713 Better for you</span>' : '') + '</div>';
            h += '</div>';

            // Summary cards
            h += '<div class="result-grid" style="margin-top:16px;">';
            h += '<div class="result-card"><div class="result-label">Annual CTC</div><div class="result-value">' + fmt(ctc) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Annual Gross</div><div class="result-value">' + fmt(gross) + '</div></div>';
            h += '<div class="result-card highlight" style="grid-column:1/-1;"><div class="result-label">Best Monthly In-Hand</div><div class="result-value" style="font-size:28px;">' + fmt(bestMonthly) + '</div></div>';
            h += '</div>';

            // Detailed breakdown (using better regime)
            const tax = betterRegime === 'new' ? taxNew : taxOld;
            const annualInHand = betterRegime === 'new' ? annualInHandNew : annualInHandOld;
            const monthlyInHand = betterRegime === 'new' ? monthlyInHandNew : monthlyInHandOld;

            h += '<div class="salary-breakdown">';
            h += '<div class="sb-row section-head"><span class="sb-label">EARNINGS (Annual)</span><span class="sb-value">Amount</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Basic Salary</span><span class="sb-value">' + fmt(basic) + '</span></div>';
            h += '<div class="sb-row"><span class="sb-label">HRA (' + (cityType === 'metro' ? '50%' : '40%') + ' of Basic)</span><span class="sb-value">' + fmt(hra) + '</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Special Allowance</span><span class="sb-value">' + fmt(specialAllowance) + '</span></div>';
            if (bonus > 0) h += '<div class="sb-row"><span class="sb-label">Bonus / Variable Pay</span><span class="sb-value">' + fmt(bonus) + '</span></div>';
            h += '<div class="sb-row subtotal"><span class="sb-label">Gross Salary</span><span class="sb-value">' + fmt(gross) + '</span></div>';

            h += '<div class="sb-row section-head"><span class="sb-label">EMPLOYER CONTRIBUTIONS (Not in bank)</span><span class="sb-value">Amount</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Employer PF</span><span class="sb-value">' + fmt(employerPF) + '</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Gratuity Provision</span><span class="sb-value">' + fmt(gratuity) + '</span></div>';
            if (bonus > 0) h += '<div class="sb-row"><span class="sb-label">Bonus</span><span class="sb-value">' + fmt(bonus) + '</span></div>';
            h += '<div class="sb-row subtotal"><span class="sb-label">Total CTC</span><span class="sb-value">' + fmt(ctc) + '</span></div>';

            h += '<div class="sb-row section-head"><span class="sb-label">DEDUCTIONS (From Gross)</span><span class="sb-value">Amount</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Employee PF</span><span class="sb-value">' + fmt(employeePF) + '</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Professional Tax</span><span class="sb-value">' + fmt(ptAnnual) + '</span></div>';
            h += '<div class="sb-row"><span class="sb-label">Income Tax + Cess (' + (betterRegime === 'new' ? 'New' : 'Old') + ' Regime)</span><span class="sb-value">' + fmt(tax) + '</span></div>';
            h += '<div class="sb-row subtotal"><span class="sb-label">Total Deductions</span><span class="sb-value">' + fmt(employeePF + ptAnnual + tax) + '</span></div>';

            h += '<div class="sb-row grand-total"><span class="sb-label">Annual In-Hand Salary</span><span class="sb-value">' + fmt(annualInHand) + '</span></div>';
            h += '<div class="sb-row grand-total"><span class="sb-label">Monthly In-Hand Salary</span><span class="sb-value">' + fmt(monthlyInHand) + '</span></div>';
            h += '</div>';

            document.getElementById('salaryOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() { document.getElementById('annualCTC').value='';document.getElementById('bonus').value='0';document.getElementById('basicPct').value='40';document.getElementById('pfOption').value='statutory';document.getElementById('ptState').value='2400';cityType='metro';document.querySelectorAll('.toggle-btn').forEach((b,i)=>b.classList.toggle('active',i===0));document.getElementById('resultSection').classList.remove('visible'); }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('annualCTC').addEventListener('keydown', function(e) { if (e.key === 'Enter') calculateSalary(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});
    </script>

@endsection    
