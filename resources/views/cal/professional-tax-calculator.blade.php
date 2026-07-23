@extends('layouts.app')
@section('meta')
    <title>Professional Tax Calculator | State-Wise PT Slabs 2026</title>
    <meta name="description" content="Professional Tax Calculator: compute monthly &amp; annual PT for all Indian states, with gender-specific Maharashtra slabs and special-month rates. Calculate free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/professional-tax-calculator">
    <meta property="og:title" content="Professional Tax Calculator &mdash; State-Wise PT Slabs 2026">
    <meta property="og:description" content="Calculate Professional Tax for all Indian states with correct slabs, gender rules, and special months.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/professional-tax-calculator">
    <meta property="og:image" content="/tools/professional-tax-calculator/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Professional Tax Calculator &mdash; State-Wise PT Slabs 2026">
    <meta name="twitter:description" content="Monthly & annual Professional Tax for all Indian states. Gender slabs, special months. Free!">
    <meta name="twitter:image" content="/tools/professional-tax-calculator/og-image.png">
@endsection

@section('schema')
<script type="application/ld+json">
    {
      "@context": "https://schema.org", "@type": "WebApplication",
      "name": "Professional Tax Calculator India",
      "description": "Professional Tax Calculator computes monthly and annual Professional Tax liability for all Indian states including Maharashtra gender-specific slabs, Karnataka and Maharashtra special month rates, and identifies states with no PT. Covers Article 276 constitutional limit of Rs 2500 per year with state-wise slab tables for FY 2025-26.",
      "url": "/tools/professional-tax-calculator",
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
      {"@type": "ListItem", "position": 3, "name": "Professional Tax Calculator", "item": "/tools/professional-tax-calculator"}
    ]}
    </script>
<script type="application/ld+json">
    { "@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [
      { "@type": "Question", "name": "What is Professional Tax in India?", "acceptedAnswer": { "@type": "Answer", "text": "Professional Tax is a state-level direct tax levied on income earned from employment, profession, trade, or business. It is authorised under Article 276 of the Indian Constitution with a maximum limit of Rs 2,500 per year. Currently 21 states and 1 union territory levy PT. The employer deducts PT from salary and deposits it with the state government. It is deductible from taxable income under Section 16(iii) of the Income Tax Act." } },
      { "@type": "Question", "name": "Which states levy Professional Tax in India?", "acceptedAnswer": { "@type": "Answer", "text": "States levying PT include Maharashtra, Karnataka, West Bengal, Andhra Pradesh, Telangana, Tamil Nadu, Gujarat, Madhya Pradesh, Kerala, Assam, Bihar, Odisha, Jharkhand, Meghalaya, Tripura, Manipur, Sikkim, Chhattisgarh, Mizoram, Nagaland, and Puducherry. States like Delhi, Uttar Pradesh, Rajasthan, Haryana, Punjab, Uttarakhand, and Himachal Pradesh do not levy Professional Tax." } },
      { "@type": "Question", "name": "What is the maximum Professional Tax per year?", "acceptedAnswer": { "@type": "Answer", "text": "The maximum Professional Tax is Rs 2,500 per year per person as per Article 276(2) of the Indian Constitution. No state can charge more than this amount annually. Most states reach this cap for employees earning above certain thresholds. Maharashtra and Karnataka both charge Rs 2,500 per year for higher salary brackets by applying a special higher rate in one month \u2014 March for Maharashtra and February for Karnataka." } },
      { "@type": "Question", "name": "How is Professional Tax calculated in Maharashtra?", "acceptedAnswer": { "@type": "Answer", "text": "Maharashtra has gender-specific PT slabs. For males: salary up to Rs 7,500 is nil, Rs 7,501 to Rs 10,000 is Rs 175 per month, above Rs 10,000 is Rs 200 per month with Rs 300 in March. For females: salary up to Rs 25,000 is nil, above Rs 25,000 is Rs 200 per month with Rs 300 in March. Annual PT is Rs 2,500 for males above Rs 10,000 and Rs 2,500 for females above Rs 25,000." } },
      { "@type": "Question", "name": "Is Professional Tax deductible from income tax?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, Professional Tax paid during the year is fully deductible from salary income under Section 16(iii) of the Income Tax Act. This deduction is available under both old and new tax regimes. For an employee paying Rs 2,500 PT annually in the 30 percent tax bracket, this translates to approximately Rs 780 income tax saving including cess. The deduction is claimed automatically in the salary computation." } },
      { "@type": "Question", "name": "Are women exempt from Professional Tax in Maharashtra?", "acceptedAnswer": { "@type": "Answer", "text": "Women earning up to Rs 25,000 per month are fully exempt from Professional Tax in Maharashtra. This is a significantly higher threshold than the male exemption limit of Rs 7,500. Women earning above Rs 25,000 pay the same rates as men \u2014 Rs 200 per month with Rs 300 in March for a total of Rs 2,500 annually. This gender-specific benefit saves women earning between Rs 7,501 and Rs 25,000 up to Rs 2,500 per year." } },
      { "@type": "Question", "name": "Why is Maharashtra PT different in February or March?", "acceptedAnswer": { "@type": "Answer", "text": "Maharashtra charges Rs 300 instead of Rs 200 in March (the last month of the financial year) for employees earning above Rs 10,000. This is to reach the constitutional maximum of Rs 2,500 annually: Rs 200 times 11 months plus Rs 300 in March equals Rs 2,500. Karnataka follows a similar pattern but applies the Rs 300 rate in February instead of March. This special month adjustment is unique to these two states." } },
      { "@type": "Question", "name": "What happens if Professional Tax is not paid on time?", "acceptedAnswer": { "@type": "Answer", "text": "Late payment of Professional Tax attracts penalties and interest. In Maharashtra, interest at 1.25 percent per month is charged on the outstanding amount. Karnataka levies 1.25 percent monthly interest plus up to 50 percent penalty. Other states have similar penalty provisions. The employer is liable for non-deduction and non-payment \u2014 not the employee. Business licences may be suspended for persistent non-compliance." } },
      { "@type": "Question", "name": "Do self-employed professionals pay Professional Tax?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, self-employed professionals like doctors, lawyers, chartered accountants, architects, and business owners are liable for Professional Tax in states that levy it. They must obtain a Professional Tax Enrolment Certificate (PTEC) and pay PT directly to the state government. In Maharashtra, self-employed professionals earning above Rs 10,000 per month pay Rs 2,500 annually. The payment frequency varies by state." } },
      { "@type": "Question", "name": "How does remote work affect Professional Tax?", "acceptedAnswer": { "@type": "Answer", "text": "Professional Tax is generally levied based on where the employee works, not the employer location. If you work from home in Maharashtra but your company is headquartered in Delhi, you are liable for Maharashtra PT. The employer should register for PT in the state where remote employees are located. Multi-state PT compliance is one of the biggest payroll challenges for companies with distributed teams." } },
      { "@type": "Question", "name": "What is PTRC and PTEC in Maharashtra?", "acceptedAnswer": { "@type": "Answer", "text": "PTRC (Professional Tax Registration Certificate) is for employers who deduct PT from employee salaries. PTEC (Professional Tax Enrolment Certificate) is for individuals paying PT on their own income including self-employed professionals and business owners. Both are required registrations under the Maharashtra State Tax on Professions Act 1975. Registration is done online through the mahagst.gov.in portal within 30 days of liability." } },
      { "@type": "Question", "name": "Are senior citizens exempt from Professional Tax?", "acceptedAnswer": { "@type": "Answer", "text": "Exemptions for senior citizens vary by state. In some states, individuals above 65 years of age are exempt from Professional Tax regardless of income. Other exemptions may apply to parents or guardians of disabled children, members of armed forces, and individuals with permanent physical disability. Check your specific state PT Act for applicable exemptions. Our calculator flags common exemptions for each state." } },
      { "@type": "Question", "name": "Can a CA help with Professional Tax compliance?", "acceptedAnswer": { "@type": "Answer", "text": "Yes, a CA handles PT registration (PTRC and PTEC), monthly computation for all employees, timely payment and filing of returns, and ensures compliance across multiple states for companies with distributed teams. Patron Accounting provides complete payroll processing including multi-state PT calculation, EPF, ESI, and TDS compliance for businesses across India." } }
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
    
        .state-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 8px; margin-bottom: 20px; }
        .state-chip { padding: 10px 12px; border: 2px solid var(--border); border-radius: var(--radius); font-size: 13px; font-weight: 600; color: var(--text-secondary); background: var(--card); cursor: pointer; text-align: center; transition: all 0.2s; }
        .state-chip:hover { border-color: var(--primary-light); color: var(--primary); }
        .state-chip.selected { border-color: var(--primary); background: rgba(27,77,62,0.05); color: var(--primary); box-shadow: 0 0 0 1px var(--primary); }
        .state-chip.no-pt { border-color: var(--text-muted); color: var(--text-muted); opacity: 0.6; cursor: default; }
        .state-chip.no-pt:hover { border-color: var(--text-muted); color: var(--text-muted); }
        .state-chip .chip-sub { font-size: 10px; font-weight: 400; color: var(--text-muted); display: block; margin-top: 2px; }
        .gender-toggle { margin: 16px 0; }
        .slab-detail { margin-top: 16px; background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .slab-detail h4 { font-size: 14px; color: var(--primary-dark); margin-bottom: 8px; }
        .special-month-badge { display: inline-block; background: #FEF3C7; color: #92400E; font-size: 11px; font-weight: 700; padding: 3px 8px; border-radius: 12px; margin-left: 6px; }
    
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
        <a href="#what-is-pt">What is PT</a>
        <a href="#state-slabs">State Slabs</a>
        <a href="#compliance">Compliance</a>
        <a href="#remote-work">Remote Work</a>
        <a href="#faqs">FAQs</a>
    </div></nav>

    {{-- <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>&rsaquo;</span>
        <a href="/tools/">Free Tools</a><span>&rsaquo;</span>
        Professional Tax Calculator
    </nav> --}}

    <header class="hero" id="calculator">
        <div class="hero-meta">
            <span class="badge-updated">Last Updated: March 2026</span>
            <span class="author-byline">Reviewed by <strong>CA &amp; CS Team</strong> &middot; Patron Accounting LLP</span>
        </div>
        <h1>Professional Tax Calculator &mdash; <span>State-Wise PT Slabs 2026</span></h1>
    </header>

    <div class="tldr"><div class="tldr-label">TL;DR</div>
        <p>This Professional Tax Calculator computes your monthly and annual PT for any Indian state &mdash; including Maharashtra's gender-specific slabs and the special &#8377;300 month (March for Maharashtra, February for Karnataka). Select your state, enter gross salary, and get instant results with the applicable slab breakdown. Constitutional cap: &#8377;2,500/year. States like Delhi, UP, Rajasthan, Haryana, and Punjab don't levy PT at all.</p>
    </div>

    <div class="main-layout">
        <div class="content-col">

            <div class="calc-card">
                <h2>Calculate Your Professional Tax</h2>
                <noscript><div class="noscript-box">This calculator requires JavaScript. Refer to the state slab tables below.</div></noscript>

                <div class="section-label" style="display:inline-block;font-size:13px;margin-bottom:10px;">1. Select Your State</div>
                <div class="state-grid" id="stateGrid"></div>

                <div id="genderRow" style="display:none;">
                    <div class="form-group"><label>Gender (Maharashtra has different slabs)</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="male" onclick="setGender(this)">Male</button>
                            <button type="button" class="toggle-btn" data-value="female" onclick="setGender(this)">Female</button>
                        </div>
                    </div>
                </div>

                <div class="calc-row" style="margin-top:16px;">
                    <div class="form-group"><label for="grossSalary">Gross Monthly Salary (&#8377;)</label><input type="number" id="grossSalary" placeholder="e.g. 35000" min="0" step="1" autocomplete="off"></div>
                </div>

                <button class="btn-calculate" onclick="calcPT()">Calculate Professional Tax</button>

                <div class="result-section" id="resultSection">
                    <div class="result-divider"></div>
                    <div id="ptOutput"></div>
                    <button class="btn-reset" onclick="resetCalc()" style="margin-top:16px;">&#8634; Reset</button>
                </div>
            </div>

            <section class="content-section" id="what-is-pt">
                <h2>What Is Professional Tax?</h2>
                <p>Professional Tax (PT) is a state-level direct tax levied on individuals earning income from employment, profession, trade, or business. Despite the name, it applies to all salaried employees &mdash; not just professionals. It is authorised under <a href="https://www.indiacode.nic.in/handle/123456789/1362" target="_blank" rel="noopener">Article 276 of the Indian Constitution</a> with a constitutional ceiling of &#8377;2,500 per year per person.</p>
                <p>For salaried employees, the employer deducts PT from monthly salary and remits it to the state government &mdash; similar to TDS. Self-employed individuals pay PT directly. The amount varies by state and salary slab. PT paid is fully deductible from salary income under <a href="https://www.incometaxindia.gov.in/" target="_blank" rel="noopener">Section 16(iii)</a> of the Income Tax Act under both old and new tax regimes.</p>

                <div class="formula-box">
                    <span class="label">Professional Tax Basics</span><br><br>
                    Constitutional Maximum: <span class="label">&#8377;2,500/year</span> (Article 276)<br>
                    Levied by: State governments (21 states + 1 UT)<br>
                    Deducted by: Employer (from salary)<br>
                    Tax Deduction: Section 16(iii) &mdash; both old & new regime<br>
                    Tax Saving: &#8377;2,500 &times; 31.2% (30% slab + cess) = <span class="label">&#8377;780 saved</span>
                </div>

                <div class="callout">
                    <p><strong>CA Tip:</strong> Professional Tax is one of the few deductions available under the new tax regime (via Section 16(iii)). Even though &#8377;2,500 seems small, ensure your employer is deducting the correct amount &mdash; errors are common especially for Maharashtra female employees and for employees who changed states mid-year. Verify your Form 16 Part B against the applicable state slab. Reference the <a href="https://labour.gov.in/" target="_blank" rel="noopener">Ministry of Labour</a> for state-wise PT acts.</p>
                </div>
            </section>

            <section class="content-section" id="state-slabs">
                <h2>State-Wise Professional Tax Slabs (FY 2025-26)</h2>
                <p>Each state has its own PT Act with unique slabs, payment frequency, and exemptions. Below are the major states. Rates are indicative &mdash; always verify with the official state PT portal.</p>

                <h3>Maharashtra</h3>
                <p>Governed by the <a href="https://mahagst.gov.in/" target="_blank" rel="noopener">Maharashtra State Tax on Professions Act, 1975</a>. Maharashtra is unique for having gender-specific slabs with a higher exemption for women.</p>
                <table class="rate-table">
                    <thead><tr><th>Salary Slab (Monthly)</th><th>Male (&#8377;/month)</th><th>Female (&#8377;/month)</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;7,500</td><td>Nil</td><td>Nil</td></tr>
                        <tr><td>&#8377;7,501 &ndash; &#8377;10,000</td><td>&#8377;175</td><td>Nil</td></tr>
                        <tr><td>Above &#8377;10,000</td><td>&#8377;200 (&#8377;300 in March)</td><td>Nil</td></tr>
                        <tr><td>Above &#8377;25,000</td><td>&#8377;200 (&#8377;300 in March)</td><td>&#8377;200 (&#8377;300 in March)</td></tr>
                    </tbody>
                </table>
                <p>Annual PT: Males above &#8377;10,000 = &#8377;2,500 (&#8377;200 &times; 11 + &#8377;300). Females above &#8377;25,000 = &#8377;2,500. Females &#8377;10,001&ndash;&#8377;25,000 = &#8377;0 (exempt).</p>

                <h3>Karnataka</h3>
                <table class="rate-table">
                    <thead><tr><th>Salary Slab (Monthly)</th><th>PT (&#8377;/month)</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;25,000</td><td>Nil</td></tr>
                        <tr><td>Above &#8377;25,000</td><td>&#8377;200 (&#8377;300 in February)</td></tr>
                    </tbody>
                </table>
                <p>Annual PT: &#8377;2,500 (&#8377;200 &times; 11 + &#8377;300 in February). <a href="https://pt.kar.nic.in/" target="_blank" rel="noopener">Karnataka PT portal &rarr;</a></p>

                <h3>Tamil Nadu</h3>
                <table class="rate-table">
                    <thead><tr><th>Salary Slab (Half-Yearly)</th><th>PT (&#8377;/half-year)</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;21,000</td><td>Nil</td></tr>
                        <tr><td>&#8377;21,001 &ndash; &#8377;30,000</td><td>&#8377;135</td></tr>
                        <tr><td>&#8377;30,001 &ndash; &#8377;45,000</td><td>&#8377;315</td></tr>
                        <tr><td>&#8377;45,001 &ndash; &#8377;60,000</td><td>&#8377;690</td></tr>
                        <tr><td>&#8377;60,001 &ndash; &#8377;75,000</td><td>&#8377;1,025</td></tr>
                        <tr><td>Above &#8377;75,000</td><td>&#8377;1,250</td></tr>
                    </tbody>
                </table>

                <h3>West Bengal</h3>
                <table class="rate-table">
                    <thead><tr><th>Salary Slab (Monthly)</th><th>PT (&#8377;/month)</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;10,000</td><td>Nil</td></tr>
                        <tr><td>&#8377;10,001 &ndash; &#8377;15,000</td><td>&#8377;110</td></tr>
                        <tr><td>&#8377;15,001 &ndash; &#8377;25,000</td><td>&#8377;130</td></tr>
                        <tr><td>&#8377;25,001 &ndash; &#8377;40,000</td><td>&#8377;150</td></tr>
                        <tr><td>Above &#8377;40,000</td><td>&#8377;200</td></tr>
                    </tbody>
                </table>

                <h3>Gujarat</h3>
                <table class="rate-table">
                    <thead><tr><th>Salary Slab (Monthly)</th><th>PT (&#8377;/month)</th></tr></thead>
                    <tbody>
                        <tr><td>Up to &#8377;5,999</td><td>Nil</td></tr>
                        <tr><td>&#8377;6,000 &ndash; &#8377;8,999</td><td>&#8377;80</td></tr>
                        <tr><td>&#8377;9,000 &ndash; &#8377;11,999</td><td>&#8377;150</td></tr>
                        <tr><td>Above &#8377;12,000</td><td>&#8377;200</td></tr>
                    </tbody>
                </table>

                <div class="callout warn">
                    <p><strong>Note:</strong> PT slabs are periodically revised by state governments. The rates above are for FY 2025-26. Always verify with your official state PT portal before making deductions. Patron Accounting maintains updated multi-state PT tables as part of its <a href="/professional-tax-pt-inr-calculator-compliance-services" target="_blank" rel="noopener">PT compliance services</a>.</p>
                </div>
            </section>

            <section class="content-section" id="compliance">
                <h2>Professional Tax Compliance for Employers</h2>
                <h3>Registration Requirements</h3>
                <p>Employers must obtain a PT registration certificate (PTRC in Maharashtra, equivalent in other states) within 30 days of hiring their first employee in the state. Self-employed professionals need an enrolment certificate (PTEC). Registration is typically done online through the state's commercial tax or GST portal &mdash; for Maharashtra, this is <a href="https://mahagst.gov.in/" target="_blank" rel="noopener">mahagst.gov.in</a>.</p>

                <h3>Payment & Filing</h3>
                <p>Employers must deduct PT from employee salary monthly and deposit it with the state government by the specified due date &mdash; typically the last day of the following month. Annual returns are usually due by 31st March or 30th April depending on the state. In Maharashtra, monthly payment is due by the last date of the month for employers with more than 20 employees; quarterly for others.</p>

                <h3>Penalties for Non-Compliance</h3>
                <p>Late payment attracts interest at 1-1.5% per month on the outstanding amount in most states. Additional penalties range from 10% to 100% of the PT due depending on the state and duration of default. In Maharashtra, the penalty can be up to &#8377;5 per day of delay. Persistent non-compliance can result in prosecution and suspension of business licences.</p>

                <div class="callout">
                    <p><strong>Multi-State PT Compliance?</strong> If your company has employees across multiple states, each state's PT must be calculated and deposited separately. Patron Accounting handles multi-state PT registration, computation, payment, and filing for businesses with distributed teams across India. <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Professional%20Tax%20compliance%20across%20multiple%20states.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener">Get PT compliance help &rarr;</a></p>
                </div>
            </section>

            <section class="content-section" id="remote-work">
                <h2>Professional Tax for Remote Workers</h2>
                <p>Remote work creates interesting PT scenarios. The general rule: PT is levied based on where the employee works, not where the employer is registered. If you work from home in Maharashtra but your company is headquartered in Delhi (no PT state), you are liable for Maharashtra PT. Your employer should ideally register for PT in your state and deduct it from your salary.</p>
                <p>For employees who split time across states, the PT is typically based on the primary work location as declared to the employer. Multi-state PT compliance is one of the biggest payroll challenges for companies with distributed teams. Using professional payroll services that handle multi-state PT automatically is the most practical solution for growing companies.</p>
            </section>

            <section class="content-section" id="faqs">
                <h2>Frequently Asked Questions About Professional Tax</h2>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is Professional Tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Professional Tax is a state-level direct tax on income from employment, profession, or trade. Authorised under Article 276 of the Constitution with a &#8377;2,500/year maximum. Currently 21 states + Puducherry levy it. Employers deduct PT from salary and deposit with the state government. It is deductible from taxable income under Section 16(iii) &mdash; available under both old and new tax regimes.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which states levy Professional Tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">PT is levied in Maharashtra, Karnataka, West Bengal, Andhra Pradesh, Telangana, Tamil Nadu, Gujarat, Madhya Pradesh, Kerala, Assam, Bihar, Odisha, Jharkhand, Meghalaya, Tripura, Manipur, Sikkim, Chhattisgarh, Mizoram, Nagaland, and Puducherry. States without PT include Delhi, Uttar Pradesh, Rajasthan, Haryana, Punjab, Uttarakhand, Himachal Pradesh, and Jammu & Kashmir.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the maximum PT per year?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">&#8377;2,500 per year per person &mdash; constitutional ceiling under Article 276(2). No state can exceed this. Maharashtra and Karnataka both reach this cap by charging &#8377;200 for 11 months and &#8377;300 in one special month (March for Maharashtra, February for Karnataka). Most other states cap at &#8377;2,400 or &#8377;2,500 through their slab structures.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is PT calculated in Maharashtra?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Maharashtra has gender-specific slabs. Males: up to &#8377;7,500 nil, &#8377;7,501-&#8377;10,000 at &#8377;175/month, above &#8377;10,000 at &#8377;200/month (&#8377;300 in March). Females: up to &#8377;25,000 nil (much higher threshold!), above &#8377;25,000 at &#8377;200/month (&#8377;300 in March). Annual total for both: &#8377;2,500 when applicable. Women earning &#8377;10,001-&#8377;25,000 save &#8377;2,500/year vs men at the same salary.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is PT deductible from income tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; fully deductible under Section 16(iii) under both old and new tax regimes. For someone in the 30% bracket paying &#8377;2,500 PT annually, the income tax saving is approximately &#8377;780 (&#8377;2,500 &times; 30% &times; 1.04 cess). The effective PT cost after tax benefit is only &#8377;1,720. This deduction is applied automatically in salary income computation on your Form 16.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are women exempt from PT in Maharashtra?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Women earning up to &#8377;25,000/month are fully exempt in Maharashtra &mdash; compared to &#8377;7,500 for men. Women earning between &#8377;7,501 and &#8377;25,000 save up to &#8377;2,500/year compared to male colleagues. Above &#8377;25,000, both genders pay the same rates. This is one of the most generous gender-specific PT exemptions in India and is unique to Maharashtra.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Why is PT different in March/February?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Maharashtra charges &#8377;300 in March (instead of &#8377;200) to reach the &#8377;2,500 annual cap: &#8377;200 &times; 11 + &#8377;300 = &#8377;2,500. Karnataka does the same in February. This special month adjustment is unique to these two states. All other states either have flat monthly rates or different slab structures that naturally reach their annual caps without needing a special month.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What if PT is not paid on time?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Late payment attracts 1-1.5% monthly interest plus penalties of 10-100% depending on the state and duration. Maharashtra charges up to &#8377;5/day delay. The employer is liable for non-deduction &mdash; not the employee. Persistent non-compliance can lead to prosecution and business licence suspension. Always pay by the due date (typically last day of the following month).</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Do self-employed pay Professional Tax?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; self-employed professionals (doctors, lawyers, CAs, architects, business owners) must obtain a PTEC (Professional Tax Enrolment Certificate) and pay PT directly. In Maharashtra, self-employed above &#8377;10,000/month pay &#8377;2,500/year. Payment frequency varies by state &mdash; monthly, quarterly, or annually. Non-registration attracts penalties.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How does remote work affect PT?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">PT is based on work location, not employer location. Working from home in Maharashtra for a Delhi company means Maharashtra PT applies. The employer should register for PT in the employee's state. Multi-state compliance is a major payroll challenge &mdash; companies with distributed teams need systematic PT tracking for each state where employees are located.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is PTRC and PTEC?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">PTRC (Professional Tax Registration Certificate) is for employers who deduct PT from employee salaries. PTEC (Professional Tax Enrolment Certificate) is for individuals paying PT on their own income &mdash; self-employed, freelancers, business owners. Both are separate registrations required under the Maharashtra State Tax on Professions Act 1975. Apply online at mahagst.gov.in within 30 days of liability arising.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are senior citizens exempt?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Exemptions vary by state. In some states, individuals above 65 years are exempt regardless of income. Other common exemptions: parents/guardians of disabled children (40%+ disability), armed forces personnel, and individuals with permanent physical disability. Check your specific state's PT Act for applicable exemptions. Our calculator accounts for these where applicable.</div></div></div>

                <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a CA help with PT compliance?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes &mdash; a CA handles PTRC/PTEC registration, monthly computation for all employees across states, timely deposit and return filing, and multi-state compliance for distributed teams. Patron Accounting provides complete payroll including PT, EPF, ESI, and TDS computation and filing for businesses across India. We also handle PT registration for new branches in any state.</div></div></div>
            </section>

        </div>

        <aside class="sidebar-col">
            <div class="cta-card">
                <h3>Need PT Compliance Help?</h3>
                <p>Our team handles multi-state PT registration, computation, payment, and filing for businesses across India.</p>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20Professional%20Tax%20compliance.%20Please%20connect%20me%20with%20a%20CA." target="_blank" rel="noopener" class="cta-btn">Get Expert Help &rarr;</a>
            </div>
            <div class="sidebar-card">
                <h3>Payroll Services</h3>
                <a href="/professional-tax-pt-inr-calculator-compliance-services" class="sidebar-link">Professional Tax Services <span class="arrow">&rarr;</span></a>
                <a href="/payroll-services" class="sidebar-link">Payroll Processing <span class="arrow">&rarr;</span></a>
                <a href="/esic-calculation-and-compliance-services" class="sidebar-link">ESIC Compliance <span class="arrow">&rarr;</span></a>
                <a href="/pf-calculator" class="sidebar-link">PF Compliance <span class="arrow">&rarr;</span></a>
                <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing <span class="arrow">&rarr;</span></a>
            </div>
            <div class="sidebar-card">
                <h3>Related Tools</h3>
                <a href="/tools/ctc-to-in-hand-salary-calculator" class="sidebar-link">CTC to In-Hand Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/epf-pf-calculator" class="sidebar-link">EPF/PF Calculator <span class="arrow">&rarr;</span></a>
                <a href="/tools/hra-exemption-calculator" class="sidebar-link">HRA Exemption Calculator <span class="arrow">&rarr;</span></a>
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
        let selectedState = null;
        let gender = 'male';

        const states = {
            maharashtra: { name:'Maharashtra', hasGender:true, specialMonth:'March',
                slabs_m:[[7500,0],[10000,175],[Infinity,200]], specialRate_m:300,
                slabs_f:[[25000,0],[Infinity,200]], specialRate_f:300 },
            karnataka: { name:'Karnataka', specialMonth:'February',
                slabs:[[25000,0],[Infinity,200]], specialRate:300 },
            westbengal: { name:'West Bengal',
                slabs:[[10000,0],[15000,110],[25000,130],[40000,150],[Infinity,200]] },
            andhrapradesh: { name:'Andhra Pradesh',
                slabs:[[15000,0],[20000,150],[Infinity,200]] },
            telangana: { name:'Telangana',
                slabs:[[15000,0],[20000,150],[Infinity,200]] },
            tamilnadu: { name:'Tamil Nadu', halfYearly:true,
                slabs:[[21000,0],[30000,135],[45000,315],[60000,690],[75000,1025],[Infinity,1250]] },
            gujarat: { name:'Gujarat',
                slabs:[[5999,0],[8999,80],[11999,150],[Infinity,200]] },
            madhyapradesh: { name:'Madhya Pradesh', specialMonth:'March',
                slabs:[[18750,0],[25000,125],[33333,167],[Infinity,208]], specialRate:212 },
            kerala: { name:'Kerala', halfYearly:true,
                slabs:[[11999,0],[17999,120],[29999,180],[44999,300],[59999,450],[74999,600],[99999,750],[124999,1000],[Infinity,1250]] },
            assam: { name:'Assam',
                slabs:[[10000,0],[15000,150],[25000,180],[Infinity,208]] },
            bihar: { name:'Bihar', annual:true,
                slabs_annual:[[300000,0],[500000,1000],[1000000,2000],[Infinity,2500]] },
            odisha: { name:'Odisha',
                slabs:[[16000,0],[25000,125],[40000,150],[Infinity,200]] },
            jharkhand: { name:'Jharkhand',
                slabs:[[25000,0],[41666,100],[66666,150],[83333,175],[Infinity,208]] },
            meghalaya: { name:'Meghalaya',
                slabs:[[4166,0],[6250,12],[8333,20],[12500,30],[16666,42],[20833,55],[25000,75],[29166,92],[33333,108],[Infinity,125]] },
            tripura: { name:'Tripura',
                slabs:[[7500,0],[15000,150],[Infinity,208]] },
            chhattisgarh: { name:'Chhattisgarh',
                slabs:[[12500,0],[16666,75],[20833,125],[25000,167],[Infinity,208]] }
        };

        const noPTStates = ['Delhi','Uttar Pradesh','Rajasthan','Haryana','Punjab','Uttarakhand','Himachal Pradesh','J&K','Goa'];

        function buildStateGrid() {
            const grid = document.getElementById('stateGrid');
            let html = '';
            Object.keys(states).forEach(key => {
                const s = states[key];
                const maxPT = s.annual ? '\u20B92,500/yr' : s.halfYearly ? '\u20B92,500/yr' : (s.specialRate || s.specialRate_m ? '\u20B92,500/yr' : '\u20B92,400/yr');
                html += '<div class="state-chip" onclick="selectState(this, \''+key+'\')" data-state="'+key+'">'+s.name+'<span class="chip-sub">Max '+maxPT+'</span></div>';
            });
            noPTStates.forEach(s => {
                html += '<div class="state-chip no-pt">'+s+'<span class="chip-sub">No PT</span></div>';
            });
            grid.innerHTML = html;
        }

        function selectState(el, key) {
            document.querySelectorAll('.state-chip').forEach(c => c.classList.remove('selected'));
            el.classList.add('selected');
            selectedState = key;
            document.getElementById('genderRow').style.display = states[key].hasGender ? '' : 'none';
        }

        function setGender(btn) { const el=btn.closest('.toggle-btn')||btn;gender=el.dataset.value;el.parentElement.querySelectorAll('.toggle-btn').forEach(b=>b.classList.remove('active'));el.classList.add('active'); }

        function fmt(n) { return '\u20B9' + Math.round(n).toLocaleString('en-IN'); }

        function getMonthlyPT(salary, slabs) {
            for (const [limit, rate] of slabs) {
                if (salary <= limit) return rate;
            }
            return slabs[slabs.length-1][1];
        }

        function calcPT() {
            if (!selectedState) { alert('Please select your state.'); return; }
            const salary = parseFloat(document.getElementById('grossSalary').value);
            if (isNaN(salary) || salary <= 0) { alert('Please enter your gross monthly salary.'); return; }

            const s = states[selectedState];
            let monthlyPT, annualPT, specialMonthPT, specialMonthName;
            let slabUsed = '';

            if (s.annual) {
                // Bihar-type annual calculation
                const annualSalary = salary * 12;
                for (const [limit, rate] of s.slabs_annual) {
                    if (annualSalary <= limit) { annualPT = rate; break; }
                }
                monthlyPT = Math.round(annualPT / 12);
                specialMonthPT = null;
            } else if (s.halfYearly) {
                // TN/Kerala type
                const halfYearlyPT = getMonthlyPT(salary, s.slabs);
                annualPT = halfYearlyPT * 2;
                monthlyPT = Math.round(annualPT / 12);
                specialMonthPT = null;
            } else if (s.hasGender) {
                // Maharashtra
                const slabs = gender === 'male' ? s.slabs_m : s.slabs_f;
                monthlyPT = getMonthlyPT(salary, slabs);
                specialMonthPT = gender === 'male' ? s.specialRate_m : s.specialRate_f;
                specialMonthName = s.specialMonth;
                annualPT = monthlyPT > 0 ? (monthlyPT * 11) + (specialMonthPT || monthlyPT) : 0;
            } else {
                monthlyPT = getMonthlyPT(salary, s.slabs);
                if (s.specialRate && monthlyPT > 0) {
                    specialMonthPT = s.specialRate;
                    specialMonthName = s.specialMonth;
                    annualPT = (monthlyPT * 11) + specialMonthPT;
                } else {
                    annualPT = monthlyPT * 12;
                    specialMonthPT = null;
                }
            }

            const taxSaving = Math.round(annualPT * 0.312);

            let h = '<div class="result-grid">';
            h += '<div class="result-card"><div class="result-label">Monthly PT</div><div class="result-value">' + fmt(monthlyPT) + '</div></div>';
            if (specialMonthPT && monthlyPT > 0) {
                h += '<div class="result-card"><div class="result-label">' + specialMonthName + ' PT<span class="special-month-badge">Special Month</span></div><div class="result-value">' + fmt(specialMonthPT) + '</div></div>';
            }
            h += '<div class="result-card highlight"><div class="result-label">Annual PT</div><div class="result-value">' + fmt(annualPT) + '</div></div>';
            h += '<div class="result-card"><div class="result-label">Income Tax Saving</div><div class="result-value">' + fmt(taxSaving) + '<small style="display:block;font-size:11px;color:rgba(255,255,255,0.7);font-family:var(--font-body);font-weight:400;">Sec 16(iii) @ 31.2%</small></div></div>';
            h += '</div>';

            // Breakdown
            h += '<div class="result-breakdown" style="margin-top:16px;">';
            h += '<div class="breakdown-row"><span class="breakdown-label">State</span><span class="breakdown-value">' + s.name + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Gross Salary</span><span class="breakdown-value">' + fmt(salary) + '/mo</span></div>';
            if (s.hasGender) h += '<div class="breakdown-row"><span class="breakdown-label">Gender</span><span class="breakdown-value">' + (gender === 'male' ? 'Male' : 'Female') + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Regular Monthly PT</span><span class="breakdown-value">' + fmt(monthlyPT) + '</span></div>';
            if (specialMonthPT && monthlyPT > 0) h += '<div class="breakdown-row"><span class="breakdown-label">' + specialMonthName + ' PT (special)</span><span class="breakdown-value">' + fmt(specialMonthPT) + '</span></div>';
            if (s.halfYearly) h += '<div class="breakdown-row"><span class="breakdown-label">Half-Yearly PT</span><span class="breakdown-value">' + fmt(annualPT/2) + '</span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label"><strong>Annual PT</strong></span><span class="breakdown-value"><strong>' + fmt(annualPT) + '</strong></span></div>';
            h += '<div class="breakdown-row"><span class="breakdown-label">Effective PT (after tax benefit)</span><span class="breakdown-value">' + fmt(annualPT - taxSaving) + '/yr</span></div>';
            h += '</div>';

            if (annualPT === 0) {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>No PT payable!</strong> Your salary of ' + fmt(salary) + '/month falls below the taxable threshold in ' + s.name + '. Professional Tax will apply only when your salary exceeds the minimum slab limit.</p></div>';
            }

            if (s.hasGender && gender === 'female' && salary > 7500 && salary <= 25000) {
                h += '<div class="callout" style="margin-top:16px;"><p><strong>Maharashtra Female Benefit:</strong> You are exempt from PT because your salary is below the \u20B925,000 threshold for women. A male employee at the same salary would pay ' + fmt(getMonthlyPT(salary, s.slabs_m) * 11 + s.specialRate_m) + '/year. This saves you up to \u20B92,500 annually.</p></div>';
            }

            document.getElementById('ptOutput').innerHTML = h;
            document.getElementById('resultSection').classList.add('visible');
            document.getElementById('resultSection').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function resetCalc() { selectedState=null;gender='male';document.getElementById('grossSalary').value='';document.querySelectorAll('.state-chip').forEach(c=>c.classList.remove('selected'));document.querySelectorAll('.toggle-btn').forEach((b,i)=>b.classList.toggle('active',i===0));document.getElementById('genderRow').style.display='none';document.getElementById('resultSection').classList.remove('visible'); }

        function toggleFaq(e) { const b=e.closest?e.closest('.faq-question')||e:e;const i=b.closest('.faq-item');if(!i)return;const o=i.classList.contains('open');document.querySelectorAll('.faq-item').forEach(x=>x.classList.remove('open'));if(!o)i.classList.add('open'); }

        document.getElementById('grossSalary').addEventListener('keydown', function(e) { if (e.key === 'Enter') calcPT(); });

        const sections=document.querySelectorAll('[id]');const navLinks=document.querySelectorAll('.toc-nav a');
        window.addEventListener('scroll',()=>{let c='';sections.forEach(s=>{if(pageYOffset>=s.offsetTop-80)c=s.getAttribute('id');});navLinks.forEach(l=>{l.classList.toggle('active',l.getAttribute('href')==='#'+c);});});

        buildStateGrid();
    </script>
@endsection