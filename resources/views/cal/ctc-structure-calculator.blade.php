@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>CTC Structure Calculator | Code on Wages 50% Basic Rule</title>
    <meta name="description" content="Free CTC structure calculator for the Code on Wages 50% basic rule: see PF, gratuity and take-home pay before vs after restructuring. CA-built tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ctc-structure-calculator/">
    <meta property="og:title" content="CTC Structure Calculator — Code on Wages 2025">
    <meta property="og:description" content="Restructure CTC under the 50% basic rule. Compare old vs new salary structure — PF, gratuity, take-home, employer cost.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/ctc-structure-calculator">
    <meta property="og:image" content="/tools/og/ctc-structure-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CTC Structure Calculator — Code on Wages 2025">
    <meta name="twitter:description" content="Restructure CTC under 50% basic rule. Old vs new comparison. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/ctc-structure-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "CTC Structure Calculator (Code on Wages 2025)",
      "description": "CTC Structure Calculator restructures employee compensation under the Code on Wages 2019 effective 21 November 2025 which mandates that basic pay plus dearness allowance plus retaining allowance must constitute at least fifty percent of total cost to company. The tool takes monthly or annual CTC city classification metro or non-metro old basic percentage typically thirty to forty percent and applicable Provident Fund and Employee State Insurance settings as inputs and produces a side-by-side comparison of old structure versus new compliant structure. The old structure uses the legacy split of low basic (twenty-five to forty percent) high HRA and high special allowance designed to minimize Provident Fund liability under the Employees Provident Funds and Miscellaneous Provisions Act 1952 and gratuity accrual under Payment of Gratuity Act 1972. The new structure recalibrates basic to fifty percent of CTC adjusts HRA to fifty percent of basic for metro cities Mumbai Delhi Kolkata Chennai or forty percent for non-metro cities reduces special allowance accordingly and recomputes employer Provident Fund contribution at twelve percent of basic capped at fifteen thousand rupees for mandatory tier and uncapped at actual basic for voluntary above-threshold tier and gratuity accrual at four point eight one percent of basic. The tool computes employee Provident Fund deduction at twelve percent of basic professional tax based on state slab Maharashtra two hundred or two thousand five hundred rupees per month other states two hundred rupees and TDS estimate using new tax regime slabs for FY 2025-26 and FY 2026-27. Output displays old versus new monthly basic HRA special allowance gratuity employer Provident Fund total CTC employee Provident Fund deduction in-hand monthly salary employer total cost and impact summary covering take-home reduction usually five to seven percent monthly employer cost increase usually five to fifteen percent annual gratuity accrual increase and twenty-five-year PF corpus impact at eight percent compounded interest. Suitable for HR and payroll teams restructuring salary frameworks for Code on Wages compliance CFOs budgeting for the cost increase and individual employees understanding the impact on take-home pay.",
      "url": "/tools/ctc-structure-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
      "author": {
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
      "provider": { "@id": "/#organization" }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "CTC Structure Calculator", "item": "/tools/ctc-structure-calculator"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the 50 percent basic rule under Code on Wages 2019?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Code on Wages 2019 effective 21 November 2025 mandates that basic pay plus dearness allowance plus retaining allowance must constitute at least 50 percent of total CTC. Excluded items such as HRA conveyance overtime bonus and employer Provident Fund cannot exceed 50 percent of total remuneration. Where excluded items exceed 50 percent the excess is automatically added back to wages and treated as basic for Provident Fund and gratuity computation. This effectively floors basic at 50 percent."
          }
        },
        {
          "@type": "Question",
          "name": "Why does take-home salary drop under the new wage code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When basic increases from typical 30 percent to mandated 50 percent of CTC the employee Provident Fund deduction also increases since PF is computed at 12 percent of basic. For an employee with 10 lakh CTC the basic moves from 3 lakh to 5 lakh annually and PF deduction increases from 36000 to 60000 reducing monthly take-home by approximately 4500 to 5500 rupees. The amount goes into the EPF retirement corpus where it earns interest annually."
          }
        },
        {
          "@type": "Question",
          "name": "How does the wage code affect employer cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Employer statutory cost typically increases by 5 to 15 percent depending on existing salary structure. The increase comes from higher employer Provident Fund at 12 percent on the new higher basic and higher gratuity accrual at 4.81 percent on the new basic. Companies with low basic structures around 25 to 30 percent of CTC see the largest cost increase. CFOs should budget at least 5 percent buffer in compensation lines."
          }
        },
        {
          "@type": "Question",
          "name": "What components count as wages and which are excluded?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Wages under the Code on Wages 2019 include basic pay dearness allowance and retaining allowance. Excluded items are statutory bonus House Rent Allowance conveyance allowance sum paid for special expenses overtime allowance commission accommodation amenities gratuity payable on termination Provident Fund and Pension Fund contributions employer social security contributions and one-time gifts. The exclusion cap is 50 percent of total remuneration above which excess flows back into wages and triggers higher PF and gratuity."
          }
        },
        {
          "@type": "Question",
          "name": "How is gratuity affected by the new wage code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gratuity is computed on basic pay plus dearness allowance under the Payment of Gratuity Act 1972. With basic increasing to 50 percent of CTC the gratuity entitlement on separation increases proportionately. For an employee with 10 lakh CTC completing 10 years of service gratuity rises from approximately 1.73 lakh to 2.88 lakh. The Code on Social Security 2020 also reduced the continuous-service requirement from five to one year for fixed-term employees making more workers eligible."
          }
        },
        {
          "@type": "Question",
          "name": "Is HRA still allowed in the new structure?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes HRA continues as a salary component under the new wage code. HRA is among the excluded items that fall outside wages so it does not contribute to PF or gratuity computation. Best-practice HRA is 50 percent of basic for metro cities Mumbai Delhi Kolkata Chennai and 40 percent of basic for non-metro cities. HRA exemption under Section 10(13A) of the Income Tax Act continues to be available against rent paid subject to lowest-of-three computation."
          }
        },
        {
          "@type": "Question",
          "name": "Does PF apply to all employees under the new code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Provident Fund is mandatory for employees with basic salary up to 15000 rupees per month. Above this threshold PF is voluntary at employee election but most large employers continue PF at actual basic. Under the new wage code with mandated 50 percent basic many employees who were previously below 15000 now cross the threshold making them mandatorily covered. PF can be capped at 15000 or on actual basic depending on company policy."
          }
        },
        {
          "@type": "Question",
          "name": "What is the deadline for restructuring salaries?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Code on Wages 2019 came into force on 21 November 2025 and applies to all wage payments from that date. However transitional implementation has been gradual due to state rules notification timelines. Most employers are restructuring salaries with effect from the appraisal cycle in April 2026 when annual increments are processed. The EPFO can audit and recalculate PF wages with retrospective effect for non-compliant structures so early restructuring is recommended."
          }
        },
        {
          "@type": "Question",
          "name": "How do small companies handle the wage code transition?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Small companies with low headcount can implement the wage code transition through their next payroll cycle. The standard approach is to keep gross CTC unchanged and reallocate components to comply with the 50 percent basic rule. This protects total compensation while ensuring statutory compliance. Companies needing payroll software updates should engage their vendor for Code on Wages compliance patches. The Patron payroll team handles transitions for companies of all sizes."
          }
        },
        {
          "@type": "Question",
          "name": "Are existing employee contracts affected?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes existing employment contracts must be aligned with the new wage definition. The standard practice is to issue revised salary breakup letters showing the new component-wise structure while keeping the gross CTC unchanged. Employee consent is generally required where the take-home pay reduces materially. Most courts have upheld restructuring done in good faith for statutory compliance even where take-home reduces. HR teams should communicate transparently and provide clear before-and-after comparisons to employees."
          }
        },
        {
          "@type": "Question",
          "name": "Does the wage code change income tax computation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The wage code does not change income tax slabs or rates but it indirectly affects taxable income. Higher employee Provident Fund deduction reduces net taxable income since PF contribution up to 1.5 lakh qualifies under Section 80C in the old regime. Higher employer Provident Fund contribution above 7.5 lakh annually became taxable as perquisite per Finance Act 2020. Employees on the new tax regime where 80C is unavailable may see slightly higher tax outgo as the PF benefit is forgone."
          }
        },
        {
          "@type": "Question",
          "name": "How is statutory bonus calculated under the new code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statutory bonus under the Payment of Bonus Act 1965 continues as before but is computed on the wage definition under the Code on Wages. Employees earning up to 21000 rupees per month basic plus DA are eligible for bonus between 8.33 percent and 20 percent of wages. Under the new wage code more employees may cross the 21000 threshold and become bonus-ineligible. Net effect varies by salary structure."
          }
        },
        {
          "@type": "Question",
          "name": "Can an employer keep the old structure if employees consent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The 50 percent basic rule under the Code on Wages 2019 is a statutory minimum and cannot be waived by employee consent or contract. The Employees Provident Fund Organisation can recalculate PF wages on the higher basic and demand the difference with interest under Section 7Q of the EPF Act if structures are non-compliant. Penalty under Section 14B can also apply. Employers must restructure to comply regardless of employee preference for higher take-home."
          }
        }
      ]
    }
    </script>
@endsection

<style>
        :root {
            --primary: #15365f;
            --primary-light: #1f4a7a;
            --primary-dark: #0a2240;
            --accent: #f26522;
            --accent-light: #ff8347;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #414042;
            --text-secondary: #555555;
            --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669;
            --info: #0EA5E9;
            --danger: #DC2626;
            --warning: #D97706;
            --old-color: #888888;
            --new-color: #15365f;
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
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 14px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: grid; grid-template-columns: 1fr 1fr; gap: 6px; }
        .toggle-btn { padding: 10px 8px; background: var(--surface); border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-secondary); cursor: pointer; text-align: center; transition: all 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.05); }
        .toggle-btn.active { background: var(--primary); color: #fff; border-color: var(--primary); }
        .toggle-btn:hover:not(.active) { border-color: var(--primary-light); }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        /* Compliance status banner */
        .compliance-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 22px; font-size: 14px; line-height: 1.6; }
        .compliance-banner.compliant { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .compliance-banner.non-compliant { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .compliance-banner strong { color: var(--primary-dark); }

        /* Side-by-side comparison cards */
        .struct-grid { display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 22px; }
        @media (min-width: 700px) { .struct-grid { grid-template-columns: 1fr 1fr; } }
        .struct-card { background: var(--card); border: 2px solid var(--border); border-radius: var(--radius); padding: 22px 20px; }
        .struct-card.old { border-color: var(--old-color); opacity: 0.95; }
        .struct-card.new { border-color: var(--new-color); }
        .struct-card-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 14px; padding-bottom: 12px; border-bottom: 1px solid var(--border); }
        .struct-card-title { font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; }
        .struct-card-pill { font-family: var(--font-mono); font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.5px; color: #fff; white-space: nowrap; }
        .struct-card-pill.old { background: var(--old-color); }
        .struct-card-pill.new { background: var(--new-color); }
        .struct-row { display: flex; justify-content: space-between; align-items: baseline; padding: 8px 0; font-size: 14px; }
        .struct-row.subtotal { border-top: 1px solid var(--border); margin-top: 4px; padding-top: 12px; font-weight: 600; }
        .struct-row.total { border-top: 2px solid var(--primary); margin-top: 4px; padding-top: 12px; font-weight: 700; font-size: 15px; }
        .struct-row .l { color: var(--text-secondary); }
        .struct-row .v { font-family: var(--font-mono); color: var(--primary-dark); font-weight: 600; }
        .struct-row.total .v { color: var(--primary); font-size: 17px; }
        .struct-section { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin: 12px 0 4px; padding-top: 8px; }
        .struct-section:first-child { margin-top: 0; padding-top: 0; }

        /* Impact summary */
        .impact-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 600px) { .impact-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 900px) { .impact-grid { grid-template-columns: repeat(4, 1fr); } }
        .impact-card { background: var(--card); border-radius: var(--radius); padding: 14px 16px; border: 1px solid var(--border); border-left: 4px solid var(--primary); }
        .impact-card.up { border-left-color: var(--success); }
        .impact-card.down { border-left-color: var(--danger); }
        .impact-card.neutral { border-left-color: var(--info); }
        .impact-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .impact-value { font-family: var(--font-mono); font-size: 18px; font-weight: 700; color: var(--primary-dark); line-height: 1.2; }
        .impact-value.up { color: var(--success); }
        .impact-value.down { color: var(--danger); }
        .impact-value.neutral { color: var(--info); }
        .impact-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }

        /* Visual stack chart */
        .stack-chart { background: var(--surface); border-radius: var(--radius); padding: 22px; margin-bottom: 22px; border: 1px solid var(--border); }
        .stack-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; }
        .stack-row { display: grid; grid-template-columns: 70px 1fr; gap: 12px; align-items: center; margin-bottom: 12px; }
        .stack-label { font-size: 12px; font-weight: 600; color: var(--text-secondary); font-family: var(--font-mono); }
        .stack-bar { height: 32px; border-radius: 6px; display: flex; overflow: hidden; background: var(--surface-alt); position: relative; }
        .stack-segment { display: flex; align-items: center; justify-content: center; font-size: 10px; font-weight: 700; color: #fff; transition: width 0.6s; min-width: 0; }
        .stack-segment.basic { background: var(--primary-dark); }
        .stack-segment.hra { background: var(--primary-light); }
        .stack-segment.special { background: var(--accent); color: var(--primary-dark); }
        .stack-segment.other { background: var(--info); }
        .stack-legend { display: flex; gap: 14px; flex-wrap: wrap; margin-top: 12px; font-size: 11px; }
        .stack-legend-item { display: flex; align-items: center; gap: 6px; color: var(--text-secondary); }
        .stack-legend-dot { width: 10px; height: 10px; border-radius: 2px; }

        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(31,74,122,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .callout.danger { background: #FEF2F2; border-left-color: var(--danger); }
        .callout.danger p { color: #991B1B; }
        .callout.danger strong { color: #7F1D1D; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 700px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
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
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .struct-card { padding: 18px 16px; }
            .impact-value { font-size: 16px; }
        }
    
/* ===== Patron CTA system v1 (4 placements x 3 channels) ===== */
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px;}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap;}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45;}
.brand-cta-bar-text strong{color:var(--text);font-weight:700;}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap;}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px;}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.12);}
.brand-cta-btn:active{transform:translateY(0);}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0;}
.brand-cta-btn-call{background:var(--accent);color:#fff;}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff;}
.brand-cta-btn-wa{background:#25D366;color:#fff;}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff;}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5;}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text);}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px;}
.brand-cta-stack .brand-cta-btn{width:100%;}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px;}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px;}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4;}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55;}
.post-result-cta .brand-cta-bar-actions{gap:8px;}
@media (max-width:767px){
 .brand-cta-bar{padding:12px 14px;}
 .brand-cta-bar-text{font-size:13px;flex-basis:100%;}
 .brand-cta-bar-actions{width:100%;gap:8px;}
 .brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0;min-height:44px;}
 .brand-cta-bar .brand-cta-btn-call{flex:1 1 100%;}
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta{padding:16px;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
@media (min-width:768px) and (max-width:950px){
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
/* ===== A11y: focus-visible (WCAG 2.4.7) ===== */
.form-group input,.form-group select{outline:2px solid transparent;outline-offset:2px;}
.form-group input:focus-visible,.form-group select:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}
a:focus-visible,button:focus-visible,.toggle-btn:focus-visible,.brand-cta-btn:focus-visible,.faq-question:focus-visible,.cta-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px;}
/* ===== Reduced motion (WCAG 2.3.3) ===== */
@media (prefers-reduced-motion:reduce){
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important;scroll-behavior:auto!important;}
}
/* ===== Print stylesheet (working-paper output) ===== */
@media print{
 .toc-nav,.brand-cta-bar,.body-cta,.cta-card,.post-result-cta,.wa-sticky-bar,.sidebar-col,.faq-section{display:none!important;}
 body{background:#fff;color:#000;}
 a[href]::after{content:"";}
 .container,.main-col{max-width:100%!important;width:100%!important;}
}

</style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#code-on-wages">Code on Wages</a>
        <a href="#components">Salary Components</a>
        <a href="#impact">Impact Analysis</a>
        <a href="#transition">Transition Steps</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    CTC Structure Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>CTC Structure <span>Calculator</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20CTC%20Structure%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=CTC%20Structure%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20CTC%20Structure%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The <strong>Code on Wages 2019</strong> (effective <strong>21 November 2025</strong>) mandates that <em>Basic + DA + Retaining Allowance must be at least 50% of total CTC</em>. Most Indian companies historically structured salaries with basic at 25-40% to minimise PF and gratuity outgo — that is no longer permitted. This calculator restructures any monthly CTC under the 50% basic rule and shows the side-by-side comparison: <strong>old structure</strong> vs <strong>new compliant structure</strong>, monthly impact on take-home pay (typically ↓5-7%), employer total cost (typically ↑5-15%), and gratuity entitlement on separation. Built for HR teams running the April 2026 appraisal-cycle restructuring and CFOs budgeting for the cost increase.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Restructure CTC Under the 50% Basic Rule</h2>
            <p class="calc-intro">Enter the monthly CTC, current basic percentage, and city. The tool computes the old structure, generates a Code-compliant new structure with basic at 50% of CTC, and shows the side-by-side impact on take-home, employer cost, and gratuity.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Compensation Inputs</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="monthlyCTC">Monthly Gross CTC (₹)</label>
                    <input type="text" id="monthlyCTC" value="100000" min="15000" max="2000000" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total cost to company per month including all components.</span>
                </div>
                <div class="form-group">
                    <label for="oldBasicPct">Current Basic % of CTC</label>
                    <input type="text" id="oldBasicPct" value="35" min="20" max="60" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Existing basic percentage. Typical Indian range 25-40%.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>City Type (HRA Tier)</label>
                    <div class="toggle-group" id="cityGroup">
                        <button type="button" class="toggle-btn active" data-val="metro">Metro (50% HRA)</button>
                        <button type="button" class="toggle-btn" data-val="non-metro">Non-Metro (40% HRA)</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>PF on Above-Threshold Basic</label>
                    <div class="toggle-group" id="pfGroup">
                        <button type="button" class="toggle-btn active" data-val="capped">Capped at ₹15K basic</button>
                        <button type="button" class="toggle-btn" data-val="actual">On actual basic</button>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Structure Comparison</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="compliance-banner" id="complianceBanner"></div>

                <div class="struct-grid">
                    <div class="struct-card old">
                        <div class="struct-card-header">
                            <div class="struct-card-title">Old Structure (Pre-Code)</div>
                            <span class="struct-card-pill old">Old</span>
                        </div>
                        <div id="oldStruct"></div>
                    </div>
                    <div class="struct-card new">
                        <div class="struct-card-header">
                            <div class="struct-card-title">New Structure (Code on Wages 2025)</div>
                            <span class="struct-card-pill new">Compliant</span>
                        </div>
                        <div id="newStruct"></div>
                    </div>
                </div>

                <div class="stack-chart">
                    <div class="stack-title">Visual Composition Comparison</div>
                    <div class="stack-row">
                        <div class="stack-label">OLD</div>
                        <div class="stack-bar" id="stackOld"></div>
                    </div>
                    <div class="stack-row">
                        <div class="stack-label">NEW</div>
                        <div class="stack-bar" id="stackNew"></div>
                    </div>
                    <div class="stack-legend">
                        <div class="stack-legend-item"><span class="stack-legend-dot" style="background: var(--primary-dark);"></span>Basic + DA</div>
                        <div class="stack-legend-item"><span class="stack-legend-dot" style="background: var(--primary-light);"></span>HRA</div>
                        <div class="stack-legend-item"><span class="stack-legend-dot" style="background: var(--accent);"></span>Special Allowance</div>
                        <div class="stack-legend-item"><span class="stack-legend-dot" style="background: var(--info);"></span>Other (Gratuity, Employer PF)</div>
                    </div>
                </div>

                <div class="impact-grid" id="impactGrid"></div>

                <div class="basis-block">
                    <div class="basis-label">Statutory Basis & Computation</div>
                    <div class="basis-text" id="basisText">—</div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — CTC Structure Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20CTC%20Structure%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=CTC%20Structure%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20CTC%20Structure%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="code-on-wages">
            <h2>The Code on Wages 2019 — What Changed</h2>

            <p>The <a href="https://en.wikipedia.org/wiki/Code_on_Wages,_2019" target="_blank" rel="noopener">Code on Wages 2019</a> — one of four New Labour Codes — came into force on 21 November 2025. It consolidates four earlier laws (Payment of Wages Act, Minimum Wages Act, Payment of Bonus Act, Equal Remuneration Act) and introduces a single uniform definition of "wages" applicable across all labour and social-security statutes including the EPF Act, ESI Act, and Payment of Gratuity Act.</p>

            <h3>The New Definition of Wages</h3>
            <p>Section 2(y) of the Code defines "wages" as comprising three components:</p>
            <ol>
                <li><strong>Basic pay</strong> (the contractual base salary)</li>
                <li><strong>Dearness allowance</strong> (cost-of-living adjustment, where applicable)</li>
                <li><strong>Retaining allowance</strong> (where applicable)</li>
            </ol>

            <h3>The 50% Floor — How It Operates</h3>
            <p>The Code places a statutory floor on the wage component. Items <em>excluded</em> from wages (HRA, conveyance, overtime, bonus, employer PF, accommodation amenities, etc.) cannot exceed 50% of total remuneration. Where the excluded items <strong>do exceed 50%</strong>, the excess is automatically <em>added back</em> to wages. The practical effect: <strong>wages must always be at least 50% of total CTC</strong>.</p>

            <div class="formula-box"><span class="label">// 50% Floor Test:</span>
IF (HRA + Conveyance + Special + Other Excluded) &gt; 50% of CTC
THEN Excess is treated as Wages (Basic)
RESULT: Wages always &gt;= 50% of CTC

<span class="label">// Implication:</span>
PF Computation Base = Wages = max(Stated Basic, 50% of CTC)
Gratuity Computation Base = Wages = max(Stated Basic, 50% of CTC)</div>

            <h3>What's Included vs Excluded</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Component</th><th>Treatment</th><th>Effect</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Basic Pay</strong></td><td>Wages (included)</td><td>Triggers PF + gratuity</td></tr>
                    <tr><td><strong>Dearness Allowance (DA)</strong></td><td>Wages (included)</td><td>Triggers PF + gratuity</td></tr>
                    <tr><td><strong>Retaining Allowance</strong></td><td>Wages (included)</td><td>Triggers PF + gratuity</td></tr>
                    <tr><td><strong>House Rent Allowance (HRA)</strong></td><td>Excluded (50% cap)</td><td>No PF / gratuity unless 50% exceeded</td></tr>
                    <tr><td><strong>Conveyance Allowance</strong></td><td>Excluded (50% cap)</td><td>No PF / gratuity unless 50% exceeded</td></tr>
                    <tr><td><strong>Overtime Allowance</strong></td><td>Excluded (50% cap)</td><td>No PF / gratuity unless 50% exceeded</td></tr>
                    <tr><td><strong>Statutory Bonus</strong></td><td>Excluded (50% cap)</td><td>No PF / gratuity</td></tr>
                    <tr><td><strong>Employer PF Contribution</strong></td><td>Excluded</td><td>Not part of wages</td></tr>
                    <tr><td><strong>Gratuity Payout</strong></td><td>Excluded</td><td>Not part of wages</td></tr>
                    <tr><td><strong>Commission / Variable Pay</strong></td><td>Excluded (50% cap)</td><td>No PF / gratuity unless 50% exceeded</td></tr>
                    <tr><td><strong>Special Allowance (residual)</strong></td><td>Excluded (50% cap)</td><td>No PF / gratuity unless 50% exceeded</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>EPFO recalculation power.</strong> The <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> can audit and recalculate PF wages on the higher basic with retrospective effect for non-compliant structures. Section 7Q allows interest recovery; Section 14B permits damages up to 100%. Early restructuring is recommended to avoid past-period exposure.</p>
            </div>
        </section>

        <section class="content-section" id="components">
            <h2>Salary Components — Old vs New</h2>

            <h3>Typical Old Structure (Pre-Code)</h3>
            <p>For decades, Indian salary structures were optimised to minimise PF and gratuity outgo. A typical mid-level salary had:</p>
            <ul>
                <li><strong>Basic + DA</strong>: 30-35% of CTC</li>
                <li><strong>HRA</strong>: 40-50% of basic (depending on metro/non-metro)</li>
                <li><strong>Special Allowance</strong>: residual ~25-35% of CTC</li>
                <li><strong>LTA</strong>: 1-2 months basic per annum (in some structures)</li>
                <li><strong>Conveyance</strong>: ₹1,600/month (now subsumed in standard deduction)</li>
                <li><strong>Other tax-efficient allowances</strong>: meal vouchers, fuel, books, telephone</li>
            </ul>

            <h3>New Code-Compliant Structure</h3>
            <p>Under Code on Wages 2019, the same total CTC is reallocated:</p>
            <ul>
                <li><strong>Basic + DA</strong>: 50% of CTC (statutory minimum)</li>
                <li><strong>HRA</strong>: 50% of basic (metro) or 40% of basic (non-metro) per Section 10(13A) IT Act exemption framework</li>
                <li><strong>Special Allowance</strong>: residual (now smaller)</li>
                <li><strong>Tax-efficient allowances</strong>: continue but cannot exceed 50% in aggregate</li>
            </ul>

            <h3>HRA — Metro vs Non-Metro</h3>
            <p>HRA continues as a salary component and remains tax-exempt under Section 10(13A) of the <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act</a>. The lowest of three is exempt: actual HRA received, rent paid minus 10% of basic, or 50% of basic for metro cities (Mumbai, Delhi, Kolkata, Chennai) / 40% for non-metro. The Patron <a href="/tools/hra-calculator">HRA Calculator</a> handles the exemption computation.</p>

            <h3>PF Wage Cap — ₹15,000 vs Actual Basic</h3>
            <p>Under the EPF Act, PF is mandatory for employees with basic wages up to ₹15,000/month. Above this threshold, PF is voluntary at the employee's election. Most large employers operate two policies:</p>
            <ul>
                <li><strong>Capped at ₹15K basic</strong>: PF = 12% × ₹15,000 = ₹1,800/month employer + ₹1,800/month employee. Cheaper for employer, lower retirement corpus for employee.</li>
                <li><strong>On actual basic</strong>: PF = 12% × actual basic. Higher employer cost, higher employee deduction, higher retirement corpus.</li>
            </ul>
            <p>The choice affects the calculator's output significantly — try both toggles to see the difference.</p>
        </section>

        <div class="body-cta">
            <h3>Restructuring CTC for Code on Wages compliance?</h3>
            <p>Patron's payroll team handles end-to-end CTC restructuring — communications to employees, salary breakup letters, payroll system reconfiguration, EPFO compliance audits, and employer cost re-budgeting. Fixed-fee, transparent pricing.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20CTC%20Structure%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=CTC%20Structure%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20CTC%20Structure%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="impact">
            <h2>Financial Impact — Detailed Analysis</h2>

            <h3>Impact on Employee Take-Home</h3>
            <p>Take-home pay typically <strong>drops 5-7% per month</strong> for employees moving from 30% basic to 50% basic. The reduction is the increased employee PF deduction (12% of higher basic). For a ₹10 lakh CTC employee with PF on actual basic, monthly take-home may drop from ~₹67,000 to ~₹62,000 — about ₹5,000/month decrease.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Annual CTC</th><th>Old Take-Home (Approx)</th><th>New Take-Home (Approx)</th><th>Monthly Change</th></tr>
                </thead>
                <tbody>
                    <tr><td>₹7 lakh</td><td>₹49,000/month</td><td>₹45,500/month</td><td>↓ ₹3,500-4,000</td></tr>
                    <tr><td>₹10 lakh</td><td>₹67,000/month</td><td>₹62,000/month</td><td>↓ ₹4,500-5,500</td></tr>
                    <tr><td>₹15 lakh</td><td>₹1,00,000/month</td><td>₹94,000/month</td><td>↓ ₹6,000-7,000</td></tr>
                    <tr><td>₹25 lakh</td><td>₹1,65,000/month</td><td>₹1,55,000/month</td><td>↓ ₹10,000-12,000</td></tr>
                </tbody>
            </table>

            <p><em>Indicative figures. Actual depends on city HRA tier, PF capping policy, professional tax slab, and tax regime selected.</em></p>

            <h3>Impact on Employer Total Cost</h3>
            <p>Employer total cost typically <strong>rises 5-15%</strong> for companies with low-basic legacy structures. The increase comes from:</p>
            <ul>
                <li><strong>Higher employer PF</strong>: 12% on the new (higher) basic, capped at ₹15K or actual</li>
                <li><strong>Higher gratuity accrual</strong>: 4.81% on the new basic adds to balance-sheet liability</li>
                <li><strong>Higher statutory bonus</strong>: where applicable, computed on the new wage base</li>
                <li><strong>Higher leave encashment</strong>: linked to basic, so accruals scale up</li>
            </ul>

            <h3>Impact on Gratuity Entitlement</h3>
            <p>Gratuity is computed under the <a href="https://www.labour.gov.in" target="_blank" rel="noopener">Payment of Gratuity Act 1972</a> at <strong>15 days of basic per year of service</strong>. With basic moving from 30% to 50% of CTC, gratuity payout on separation increases proportionately. The Code on Social Security 2020 also reduced the continuous-service threshold from 5 years to 1 year for fixed-term employees, expanding eligibility.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Annual CTC</th><th>Old Gratuity (10 yrs)</th><th>New Gratuity (10 yrs)</th><th>Increase</th></tr>
                </thead>
                <tbody>
                    <tr><td>₹7 lakh</td><td>₹1,21,000</td><td>₹2,01,000</td><td>+₹80,000</td></tr>
                    <tr><td>₹10 lakh</td><td>₹1,73,000</td><td>₹2,88,000</td><td>+₹1,15,000</td></tr>
                    <tr><td>₹15 lakh</td><td>₹2,60,000</td><td>₹4,33,000</td><td>+₹1,73,000</td></tr>
                </tbody>
            </table>

            <h3>Impact on Long-Term Retirement Corpus</h3>
            <p>The 8% PF interest compounded over a 25-year career creates a meaningful retirement-corpus boost. An employee whose PF deduction rises by ₹2,000/month sees a corpus increase of approximately ₹18 lakh over 25 years at 8% — meaningful for retirement security. This is why the Code is positioned as pro-employee despite the take-home reduction.</p>
        </section>

        <section class="content-section" id="transition">
            <h2>Transition Steps for HR & Payroll Teams</h2>

            <h3>1. Audit Current Salary Structures</h3>
            <p>Pull a payroll-wide report of basic-as-percentage-of-CTC. Flag every employee with basic below 50% of total CTC. Most companies discover 60-80% of their workforce is non-compliant. Build a workbook with employee ID, current basic %, and target basic = 50% of CTC.</p>

            <h3>2. Re-Budget Employer Cost</h3>
            <p>Compute the increment in employer PF (12% on the gap between old and new basic) and gratuity accrual (4.81% on same gap) for each non-compliant employee. Aggregate to get the total monthly and annual cost increase. CFOs should add at least 5% buffer to compensation cost lines for FY 2026-27 and onward.</p>

            <h3>3. Decide CTC Treatment Approach</h3>
            <p>Two approaches exist:</p>
            <ul>
                <li><strong>Hold CTC constant</strong>: Reallocate components to reach 50% basic. Employee take-home drops by the increased PF deduction. Most companies choose this.</li>
                <li><strong>Increase CTC to maintain take-home</strong>: Add the increased PF deduction back as additional CTC. Employer absorbs full cost increase. Premium employers / talent retention scenarios.</li>
            </ul>

            <h3>4. Communicate to Employees</h3>
            <p>Issue a CTC restructuring communication explaining the regulatory driver, the structure change, the impact on take-home, and the long-term benefit (retirement corpus, gratuity). Provide a personalised before-and-after summary to each employee. Manage expectations carefully — take-home reduction can be perceived as a salary cut without context.</p>

            <h3>5. Update Salary Breakup Letters</h3>
            <p>Issue revised salary breakup letters showing the new component-wise structure. Most labour-law commentators advise obtaining employee acknowledgment of the revised structure to avoid disputes. An <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-empanelled CA can provide signed templates and end-to-end coordination, including the Patron team.</p>

            <h3>6. Reconfigure Payroll Software</h3>
            <p>Engage your payroll software vendor for the Code-on-Wages compliance patch — most major vendors registered with the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> have already issued updates. Most major vendors (Keka, GreytHR, Zoho People, ZingHR) have already issued updates. For SAP / Oracle / customised payroll systems, configuration changes are needed in the wage-type structure and PF computation logic.</p>

            <h3>7. Update EPFO Filings</h3>
            <p>Ensure monthly ECR filings reflect the new wage base. EPFO portal should show consistent wages-as-percentage-of-total-pay for audit defence. Run reconciliation between Form 26AS, GSTR-1 turnover, and payroll wages quarterly to catch any drift.</p>

            <div class="callout">
                <p><strong>Timing the transition.</strong> Most companies are running the restructuring along with the April 2026 appraisal cycle, treating it as part of the annual increment letter. This frames the change favourably and avoids a separate disruptive communication. CFOs should plan for the cost increase in FY 2026-27 budgets.</p>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Payroll Restructuring</h3>
            <p>Patron handles end-to-end CTC restructuring, employee comms, salary letters, EPFO compliance, and CFO budget re-modelling.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20CTC%20Structure%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=CTC%20Structure%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20CTC%20Structure%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/payroll-services" class="sidebar-link">Payroll Services<span class="arrow">→</span></a>
            <a href="/labour-law-compliance" class="sidebar-link">Labour Law Compliance<span class="arrow">→</span></a>
            <a href="/pf-esi-registration" class="sidebar-link">PF / ESI Registration<span class="arrow">→</span></a>
            <a href="/payroll-audit" class="sidebar-link">Payroll Audit<span class="arrow">→</span></a>
            <a href="/hr-advisory" class="sidebar-link">HR Advisory<span class="arrow">→</span></a>
            <a href="/eor-services" class="sidebar-link">EOR Services<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ctc-to-in-hand-calculator" class="sidebar-link">CTC to In-Hand<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/pf-calculator" class="sidebar-link">PF Calculator<span class="arrow">→</span></a>
            <a href="/tools/hra-calculator" class="sidebar-link">HRA Calculator<span class="arrow">→</span></a>
            <a href="/tools/esi-calculator" class="sidebar-link">ESI Calculator<span class="arrow">→</span></a>
            <a href="/tools/india-entity-vs-eor-comparison" class="sidebar-link">Entity vs EOR<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/code-on-wages-2019" class="sidebar-link">Code on Wages 2019 Guide<span class="arrow">→</span></a>
            <a href="/blog/new-labour-codes-2025" class="sidebar-link">New Labour Codes 2025<span class="arrow">→</span></a>
            <a href="/blog/payroll-restructuring-india" class="sidebar-link">Payroll Restructuring Guide<span class="arrow">→</span></a>
            <a href="/blog/epfo-compliance" class="sidebar-link">EPFO Compliance<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the 50 percent basic rule under Code on Wages 2019?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The Code on Wages 2019 effective 21 November 2025 mandates that basic pay plus dearness allowance plus retaining allowance must constitute at least 50 percent of total CTC. Excluded items such as HRA conveyance overtime bonus and employer Provident Fund cannot exceed 50 percent of total remuneration. Where excluded items exceed 50 percent the excess is automatically added back to wages and treated as basic for Provident Fund and gratuity computation. This effectively floors basic at 50 percent.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Why does take-home salary drop under the new wage code?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">When basic increases from typical 30 percent to mandated 50 percent of CTC the employee Provident Fund deduction also increases since PF is computed at 12 percent of basic. For an employee with 10 lakh CTC the basic moves from 3 lakh to 5 lakh annually and PF deduction increases from 36000 to 60000 reducing monthly take-home by approximately 4500 to 5500 rupees. The amount goes into the EPF retirement corpus where it earns interest annually.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does the wage code affect employer cost?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Employer statutory cost typically increases by 5 to 15 percent depending on existing salary structure. The increase comes from higher employer Provident Fund at 12 percent on the new higher basic and higher gratuity accrual at 4.81 percent on the new basic. Companies with low basic structures around 25 to 30 percent of CTC see the largest cost increase. CFOs should budget at least 5 percent buffer in compensation lines.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What components count as wages and which are excluded?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Wages under the Code on Wages 2019 include basic pay dearness allowance and retaining allowance. Excluded items are statutory bonus House Rent Allowance conveyance allowance sum paid for special expenses overtime allowance commission accommodation amenities gratuity payable on termination Provident Fund and Pension Fund contributions employer social security contributions and one-time gifts. The exclusion cap is 50 percent of total remuneration above which excess flows back into wages and triggers higher PF and gratuity.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How is gratuity affected by the new wage code?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Gratuity is computed on basic pay plus dearness allowance under the Payment of Gratuity Act 1972. With basic increasing to 50 percent of CTC the gratuity entitlement on separation increases proportionately. For an employee with 10 lakh CTC completing 10 years of service gratuity rises from approximately 1.73 lakh to 2.88 lakh. The Code on Social Security 2020 also reduced the continuous-service requirement from five to one year for fixed-term employees making more workers eligible.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is HRA still allowed in the new structure?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes HRA continues as a salary component under the new wage code. HRA is among the excluded items that fall outside wages so it does not contribute to PF or gratuity computation. Best-practice HRA is 50 percent of basic for metro cities Mumbai Delhi Kolkata Chennai and 40 percent of basic for non-metro cities. HRA exemption under Section 10(13A) of the Income Tax Act continues to be available against rent paid subject to lowest-of-three computation.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does PF apply to all employees under the new code?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Provident Fund is mandatory for employees with basic salary up to 15000 rupees per month. Above this threshold PF is voluntary at employee election but most large employers continue PF at actual basic. Under the new wage code with mandated 50 percent basic many employees who were previously below 15000 now cross the threshold making them mandatorily covered. PF can be capped at 15000 or on actual basic depending on company policy.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the deadline for restructuring salaries?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The Code on Wages 2019 came into force on 21 November 2025 and applies to all wage payments from that date. However transitional implementation has been gradual due to state rules notification timelines. Most employers are restructuring salaries with effect from the appraisal cycle in April 2026 when annual increments are processed. The EPFO can audit and recalculate PF wages with retrospective effect for non-compliant structures so early restructuring is recommended.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How do small companies handle the wage code transition?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Small companies with low headcount can implement the wage code transition through their next payroll cycle. The standard approach is to keep gross CTC unchanged and reallocate components to comply with the 50 percent basic rule. This protects total compensation while ensuring statutory compliance. Companies needing payroll software updates should engage their vendor for Code on Wages compliance patches. The Patron payroll team handles transitions for companies of all sizes.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are existing employee contracts affected?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes existing employment contracts must be aligned with the new wage definition. The standard practice is to issue revised salary breakup letters showing the new component-wise structure while keeping the gross CTC unchanged. Employee consent is generally required where the take-home pay reduces materially. Most courts have upheld restructuring done in good faith for statutory compliance even where take-home reduces. HR teams should communicate transparently and provide clear before-and-after comparisons to employees.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does the wage code change income tax computation?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The wage code does not change income tax slabs or rates but it indirectly affects taxable income. Higher employee Provident Fund deduction reduces net taxable income since PF contribution up to 1.5 lakh qualifies under Section 80C in the old regime. Higher employer Provident Fund contribution above 7.5 lakh annually became taxable as perquisite per Finance Act 2020. Employees on the new tax regime where 80C is unavailable may see slightly higher tax outgo as the PF benefit is forgone.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How is statutory bonus calculated under the new code?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Statutory bonus under the Payment of Bonus Act 1965 continues as before but is computed on the wage definition under the Code on Wages. Employees earning up to 21000 rupees per month basic plus DA are eligible for bonus between 8.33 percent and 20 percent of wages. Under the new wage code more employees may cross the 21000 threshold and become bonus-ineligible. Net effect varies by salary structure.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can an employer keep the old structure if employees consent?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. The 50 percent basic rule under the Code on Wages 2019 is a statutory minimum and cannot be waived by employee consent or contract. The Employees Provident Fund Organisation can recalculate PF wages on the higher basic and demand the difference with interest under Section 7Q of the EPF Act if structures are non-compliant. Penalty under Section 14B can also apply. Employers must restructure to comply regardless of employee preference for higher take-home.</div></div>
    </div>
</section>

<div class="office-strip">
    <div class="offices">Pune | Mumbai | Delhi | Gurugram</div>
    <div class="trust">25,000+ Businesses Trust Us</div>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}

    let cityType = 'metro';
    let pfMode = 'capped';

    function fmtINR(n) {
        return '₹' + Math.round(n).toLocaleString('en-IN');
    }

    function compute() {
        const monthlyCTC = parseInt(document.getElementById('monthlyCTC').value);
        const oldBasicPct = parseINR(document.getElementById('oldBasicPct').value);

        if (!monthlyCTC || monthlyCTC < 15000) { alert('Please enter monthly CTC of at least ₹15,000.'); return; }
        if (!oldBasicPct || oldBasicPct < 20 || oldBasicPct > 60) { alert('Old basic % should be between 20 and 60.'); return; }

        const hraPct = cityType === 'metro' ? 0.50 : 0.40;
        const PF_RATE = 0.12;
        const PF_CAP_BASIC = 15000;
        const GRATUITY_RATE = 0.0481;

        // OLD STRUCTURE
        const oldBasic = monthlyCTC * (oldBasicPct / 100);
        const oldHRA = oldBasic * hraPct;

        // Compute PF on basic
        const oldPfBasic = pfMode === 'capped' ? Math.min(oldBasic, PF_CAP_BASIC) : oldBasic;
        const oldEmployerPF = oldPfBasic * PF_RATE;
        const oldEmployeePF = oldPfBasic * PF_RATE;
        const oldGratuity = oldBasic * GRATUITY_RATE;

        // Special allowance = remaining (excluded items capped at 50%)
        const oldSpecial = monthlyCTC - oldBasic - oldHRA - oldEmployerPF - oldGratuity;

        const oldGross = oldBasic + oldHRA + Math.max(0, oldSpecial); // gross excludes employer contributions
        const oldInHand = oldGross - oldEmployeePF;  // simplified (exclude PT/TDS for tool clarity)
        const oldEmployerCost = oldBasic + oldHRA + Math.max(0, oldSpecial) + oldEmployerPF + oldGratuity;

        // NEW STRUCTURE — 50% basic
        const newBasic = monthlyCTC * 0.50;
        const newHRA = newBasic * hraPct;
        const newPfBasic = pfMode === 'capped' ? Math.min(newBasic, PF_CAP_BASIC) : newBasic;
        const newEmployerPF = newPfBasic * PF_RATE;
        const newEmployeePF = newPfBasic * PF_RATE;
        const newGratuity = newBasic * GRATUITY_RATE;

        const newSpecial = monthlyCTC - newBasic - newHRA - newEmployerPF - newGratuity;
        const newGross = newBasic + newHRA + Math.max(0, newSpecial);
        const newInHand = newGross - newEmployeePF;
        const newEmployerCost = newBasic + newHRA + Math.max(0, newSpecial) + newEmployerPF + newGratuity;

        // Compliance check
        const oldExcludedPct = ((oldHRA + Math.max(0, oldSpecial)) / monthlyCTC) * 100;
        const isOldCompliant = oldExcludedPct <= 50;

        // Annual figures
        const annualGratuityOld = oldGratuity * 12;
        const annualGratuityNew = newGratuity * 12;
        const grat10yrOld = (oldBasic * 15 / 26) * 10; // 15 days basic per year, 26 working days/month
        const grat10yrNew = (newBasic * 15 / 26) * 10;

        // 25-year corpus impact (8% compounded, monthly contribution)
        function fvAnnuity(monthly, years, rate) {
            const r = rate / 12;
            const n = years * 12;
            return monthly * ((Math.pow(1 + r, n) - 1) / r);
        }
        const totalPfMonthlyOld = oldEmployerPF + oldEmployeePF;
        const totalPfMonthlyNew = newEmployerPF + newEmployeePF;
        const corpus25Old = fvAnnuity(totalPfMonthlyOld, 25, 0.08);
        const corpus25New = fvAnnuity(totalPfMonthlyNew, 25, 0.08);

        renderResult({
            monthlyCTC, oldBasicPct, hraPct, cityType, pfMode,
            old: {
                basic: oldBasic, hra: oldHRA, special: Math.max(0, oldSpecial),
                employerPF: oldEmployerPF, employeePF: oldEmployeePF, gratuity: oldGratuity,
                gross: oldGross, inHand: oldInHand, employerCost: oldEmployerCost,
                excludedPct: oldExcludedPct, isCompliant: isOldCompliant
            },
            new: {
                basic: newBasic, hra: newHRA, special: Math.max(0, newSpecial),
                employerPF: newEmployerPF, employeePF: newEmployeePF, gratuity: newGratuity,
                gross: newGross, inHand: newInHand, employerCost: newEmployerCost
            },
            impact: {
                inHandDelta: newInHand - oldInHand,
                inHandDeltaPct: ((newInHand - oldInHand) / oldInHand) * 100,
                employerCostDelta: newEmployerCost - oldEmployerCost,
                employerCostDeltaPct: ((newEmployerCost - oldEmployerCost) / oldEmployerCost) * 100,
                gratuity10yrDelta: grat10yrNew - grat10yrOld,
                corpus25Delta: corpus25New - corpus25Old
            }
        });
    }

    function renderResult(r) {
        // Compliance banner
        const banner = document.getElementById('complianceBanner');
        if (r.old.isCompliant) {
            banner.className = 'compliance-banner compliant';
            banner.innerHTML = '<strong>✓ Already compliant.</strong> Your current basic of ' + r.oldBasicPct + '% (excluded items: ' + r.old.excludedPct.toFixed(1) + '%) meets the 50% wage rule. Minimal restructuring required.';
        } else {
            banner.className = 'compliance-banner non-compliant';
            banner.innerHTML = '<strong>✗ Non-compliant.</strong> Your current basic of ' + r.oldBasicPct + '% means excluded items account for ' + r.old.excludedPct.toFixed(1) + '% of CTC — exceeding the 50% Code on Wages cap. Restructuring is required.';
        }

        // OLD struct table
        const oldEl = document.getElementById('oldStruct');
        oldEl.innerHTML =
            '<div class="struct-section">Earnings (Wages component)</div>' +
            '<div class="struct-row"><span class="l">Basic + DA</span><span class="v">' + fmtINR(r.old.basic) + '</span></div>' +
            '<div class="struct-section">Excluded Allowances</div>' +
            '<div class="struct-row"><span class="l">HRA (' + (r.hraPct * 100) + '% basic)</span><span class="v">' + fmtINR(r.old.hra) + '</span></div>' +
            '<div class="struct-row"><span class="l">Special Allowance</span><span class="v">' + fmtINR(r.old.special) + '</span></div>' +
            '<div class="struct-row subtotal"><span class="l">Gross Salary</span><span class="v">' + fmtINR(r.old.gross) + '</span></div>' +
            '<div class="struct-section">Employer Contributions</div>' +
            '<div class="struct-row"><span class="l">Employer PF (12%)</span><span class="v">' + fmtINR(r.old.employerPF) + '</span></div>' +
            '<div class="struct-row"><span class="l">Gratuity (4.81%)</span><span class="v">' + fmtINR(r.old.gratuity) + '</span></div>' +
            '<div class="struct-row total"><span class="l">Total CTC</span><span class="v">' + fmtINR(r.old.employerCost) + '</span></div>' +
            '<div class="struct-section">Employee Deduction</div>' +
            '<div class="struct-row"><span class="l">Employee PF (12%)</span><span class="v">- ' + fmtINR(r.old.employeePF) + '</span></div>' +
            '<div class="struct-row total"><span class="l">In-Hand (excl. PT/TDS)</span><span class="v">' + fmtINR(r.old.inHand) + '</span></div>';

        // NEW struct table
        const newEl = document.getElementById('newStruct');
        newEl.innerHTML =
            '<div class="struct-section">Earnings (Wages component)</div>' +
            '<div class="struct-row"><span class="l">Basic + DA (50%)</span><span class="v">' + fmtINR(r.new.basic) + '</span></div>' +
            '<div class="struct-section">Excluded Allowances</div>' +
            '<div class="struct-row"><span class="l">HRA (' + (r.hraPct * 100) + '% basic)</span><span class="v">' + fmtINR(r.new.hra) + '</span></div>' +
            '<div class="struct-row"><span class="l">Special Allowance</span><span class="v">' + fmtINR(r.new.special) + '</span></div>' +
            '<div class="struct-row subtotal"><span class="l">Gross Salary</span><span class="v">' + fmtINR(r.new.gross) + '</span></div>' +
            '<div class="struct-section">Employer Contributions</div>' +
            '<div class="struct-row"><span class="l">Employer PF (12%)</span><span class="v">' + fmtINR(r.new.employerPF) + '</span></div>' +
            '<div class="struct-row"><span class="l">Gratuity (4.81%)</span><span class="v">' + fmtINR(r.new.gratuity) + '</span></div>' +
            '<div class="struct-row total"><span class="l">Total CTC</span><span class="v">' + fmtINR(r.new.employerCost) + '</span></div>' +
            '<div class="struct-section">Employee Deduction</div>' +
            '<div class="struct-row"><span class="l">Employee PF (12%)</span><span class="v">- ' + fmtINR(r.new.employeePF) + '</span></div>' +
            '<div class="struct-row total"><span class="l">In-Hand (excl. PT/TDS)</span><span class="v">' + fmtINR(r.new.inHand) + '</span></div>';

        // Stack charts
        renderStack('stackOld', r.old, r.monthlyCTC);
        renderStack('stackNew', r.new, r.monthlyCTC);

        // Impact grid
        const grid = document.getElementById('impactGrid');
        grid.innerHTML = '';
        const items = [
            {
                label: 'Take-Home Δ',
                value: (r.impact.inHandDelta >= 0 ? '+' : '') + fmtINR(r.impact.inHandDelta),
                sub: r.impact.inHandDeltaPct.toFixed(1) + '% / month',
                cls: r.impact.inHandDelta < 0 ? 'down' : 'up'
            },
            {
                label: 'Employer Cost Δ',
                value: (r.impact.employerCostDelta >= 0 ? '+' : '') + fmtINR(r.impact.employerCostDelta),
                sub: r.impact.employerCostDeltaPct.toFixed(1) + '% / month',
                cls: r.impact.employerCostDelta > 0 ? 'down' : 'up'
            },
            {
                label: 'Gratuity (10 yrs) Δ',
                value: '+' + fmtINR(r.impact.gratuity10yrDelta),
                sub: 'On separation after 10 years',
                cls: 'up'
            },
            {
                label: '25-Year PF Corpus Δ',
                value: '+' + fmtINR(r.impact.corpus25Delta),
                sub: 'At 8% compounded interest',
                cls: 'up'
            }
        ];
        items.forEach(function(it) {
            const card = document.createElement('div');
            card.className = 'impact-card ' + it.cls;
            card.innerHTML = '<div class="impact-label">' + it.label + '</div>' +
                             '<div class="impact-value ' + it.cls + '">' + it.value + '</div>' +
                             '<div class="impact-sub">' + it.sub + '</div>';
            grid.appendChild(card);
        });

        // Basis text
        let basis = '<strong>Code on Wages 2019, Section 2(y):</strong> Wages = Basic + DA + Retaining Allowance. ';
        basis += 'Excluded items (HRA, conveyance, overtime, bonus, commission, employer PF) cannot exceed 50% of total CTC. ';
        basis += '<br><br><strong>Your CTC:</strong> ' + fmtINR(r.monthlyCTC) + '/month. ';
        basis += '<strong>Old basic:</strong> ' + r.oldBasicPct + '% (' + fmtINR(r.old.basic) + '). ';
        basis += '<strong>New basic:</strong> 50% (' + fmtINR(r.new.basic) + '). ';
        basis += '<br><br><strong>PF basis:</strong> ' + (r.pfMode === 'capped' ? '12% of basic capped at ₹15,000' : '12% of actual basic') + '. ';
        basis += '<strong>Gratuity:</strong> 4.81% accrual on basic per Payment of Gratuity Act 1972. ';
        basis += '<strong>HRA:</strong> ' + (r.cityType === 'metro' ? '50% of basic (metro)' : '40% of basic (non-metro)') + '. ';
        basis += '<br><br><em>Note: Tool excludes professional tax, TDS, voluntary deductions, and tax-regime impact for clarity. Actual in-hand will be 5-10% lower after these.</em>';
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    function renderStack(id, data, total) {
        const el = document.getElementById(id);
        const components = [
            {name: 'basic', value: data.basic, pct: (data.basic / total) * 100},
            {name: 'hra', value: data.hra, pct: (data.hra / total) * 100},
            {name: 'special', value: data.special, pct: (data.special / total) * 100},
            {name: 'other', value: data.employerPF + data.gratuity, pct: ((data.employerPF + data.gratuity) / total) * 100}
        ];
        el.innerHTML = components.map(function(c) {
            return '<div class="stack-segment ' + c.name + '" style="width: ' + c.pct + '%;">' +
                   (c.pct >= 12 ? c.pct.toFixed(0) + '%' : '') +
                   '</div>';
        }).join('');
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        document.getElementById('monthlyCTC').value = 100000;
        document.getElementById('oldBasicPct').value = 35;
        cityType = 'metro';
        pfMode = 'capped';
        document.querySelectorAll('#cityGroup .toggle-btn').forEach(b => b.classList.toggle('active', b.dataset.val === 'metro'));
        document.querySelectorAll('#pfGroup .toggle-btn').forEach(b => b.classList.toggle('active', b.dataset.val === 'capped'));
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('#cityGroup .toggle-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('#cityGroup .toggle-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            cityType = btn.dataset.val;
        });
    });

    document.querySelectorAll('#pfGroup .toggle-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('#pfGroup .toggle-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            pfMode = btn.dataset.val;
        });
    });

    document.querySelectorAll('input').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalc').click();
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
        });
    });

    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) { if (s.offsetTop <= scrollPos) active = s.id; });
        tocLinks.forEach(function(l) { l.classList.toggle('active', l.getAttribute('href') === '#' + active); });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();
})();
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
