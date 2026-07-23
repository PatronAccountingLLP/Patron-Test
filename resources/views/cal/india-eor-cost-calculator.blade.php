@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>India EOR Cost Calculator | True Cost of Hiring</title>
    <meta name="description" content="India EOR cost calculator: compute the total cost of hiring via Employer of Record, covering statutory PF, ESI, gratuity, provider fees, insurance, break-even.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/india-eor-cost-calculator/">
    <meta property="og:title" content="India EOR Cost Calculator — True Cost of Hiring 2026">
    <meta property="og:description" content="Computes the all-in cost of hiring an employee in India through an Employer of Record. Statutory + provider fees + insurance + EOR vs subsidiary break-even.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/india-eor-cost-calculator">
    <meta property="og:image" content="/tools/og/india-eor-cost-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="India EOR Cost Calculator — True Cost of Hiring 2026">
    <meta name="twitter:description" content="Total India hiring cost: statutory + EOR fees + insurance. EOR vs subsidiary break-even. Updated for 4 Labour Codes 2025.">
    <meta name="twitter:image" content="/tools/og/india-eor-cost-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "India EOR Cost Calculator (True Cost of Hiring)",
      "description": "India EOR Cost Calculator computes the total annual and monthly cost incurred by a foreign company hiring an employee in India through an Employer of Record arrangement, capturing the gross salary, statutory employer contributions and the EOR provider service fee. The tool incorporates the four Labour Codes which came into force on 21 November 2025 — the Code on Wages, 2019, the Industrial Relations Code, 2020, the Code on Social Security, 2020 and the Occupational Safety, Health and Working Conditions Code, 2020 — replacing twenty-nine pre-existing labour statutes. The tool reflects the unified definition of wages under Section 2(y) of the Code on Wages requiring that basic wage components (basic pay plus dearness allowance plus retaining allowance) constitute at least fifty per cent of the total remuneration, with the excess of allowances over fifty per cent deemed to be wages for the purpose of statutory contribution computation. The tool computes Employees Provident Fund employer contribution at twelve per cent of wages with statutory ceiling computation, Employees State Insurance employer contribution at three point two five per cent of gross wages where the gross wage is at or below twenty one thousand rupees per month, gratuity provision at four point eight one per cent of wages on the actuarial accrual basis, statutory bonus at eight point three three per cent of wages under the Payment of Bonus Act, 1965 where applicable, professional tax at state-specific rates capped at two thousand five hundred rupees per annum under Article 276 of the Constitution of India, Labour Welfare Fund contribution at state-specific annual rates, and group health insurance at standard market premium bands. The tool incorporates four EOR provider pricing tiers: India-specialist providers ranging from ninety nine to two hundred United States Dollars per employee per month, mid-market global platforms in the range of two hundred to four hundred United States Dollars per employee per month, premium enterprise platforms in the range of five hundred ninety nine to seven hundred United States Dollars per employee per month, and a custom percentage-of-payroll model. The tool computes the break-even employee count for the EOR arrangement versus setting up a wholly owned subsidiary in India based on incorporation costs, recurring compliance overhead and per-employee statutory burden.",
      "url": "/tools/india-eor-cost-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "India EOR Cost Calculator", "item": "/tools/india-eor-cost-calculator"}
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
          "name": "What is an Employer of Record (EOR) in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Employer of Record is a third-party entity legally registered in India that hires employees on behalf of a foreign company without an Indian subsidiary. The EOR holds the formal employment contract, runs payroll, deducts TDS, remits statutory contributions like PF and ESI, and ensures Labour Code compliance. The foreign company directs the day-to-day work while the EOR carries the legal employer obligations. EORs let foreign companies hire in India in days rather than the months required for entity setup."
          }
        },
        {
          "@type": "Question",
          "name": "What does an EOR cost per employee in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EOR provider fees in India range from approximately ₹8,000 to ₹58,000 per employee per month in 2026. India-specialist providers like Wisemonk and Pamgro charge $99 to $200 per month. Mid-market global platforms like Multiplier and Skuad charge $200 to $400. Premium global platforms like Deel and Oyster charge $599 to $700. The provider fee is added on top of gross salary and statutory contributions. Total true cost equals salary plus statutory plus provider fee plus insurance."
          }
        },
        {
          "@type": "Question",
          "name": "What statutory contributions does an India employer pay?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "India employer statutory contributions include Provident Fund at 12% of wages (employer share including EDLI and admin charges), Employees State Insurance at 3.25% of gross wages where the wage is at or below ₹21,000 per month, gratuity provision at 4.81% of wages, statutory bonus at 8.33% to 20% of wages where applicable under the Payment of Bonus Act, professional tax at state-specific rates capped at ₹2,500 per year, and Labour Welfare Fund contribution at state-specific annual rates."
          }
        },
        {
          "@type": "Question",
          "name": "How did the new Labour Codes 2025 change EOR costs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The four Labour Codes effective 21 November 2025 introduced a unified wages definition requiring basic pay plus dearness allowance to be at least 50% of total remuneration. For salary structures earlier loaded with allowances, this raises the PF and gratuity calculation base substantially. Industry estimates suggest gratuity liabilities will jump 25-50% across most companies. Fixed-term employees now qualify for gratuity after one year instead of five. EOR providers have absorbed these changes by adjusting salary structures upon onboarding."
          }
        },
        {
          "@type": "Question",
          "name": "When does it make sense to set up a subsidiary instead of using EOR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EOR is generally cheaper for 1-10 employees. The break-even point typically lies in the 10-15 employee range, where the fixed costs of subsidiary setup (₹5-15 lakh one-time, ₹50,000 to ₹1 lakh per month recurring) are amortised over enough employees to beat the per-employee EOR fee. Beyond 15 employees, a subsidiary is usually cheaper but adds compliance complexity. The EOR Cost Calculator computes the precise break-even based on your salary level and provider tier."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between EOR and an independent contractor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An independent contractor is engaged directly by the foreign company under a service agreement without employment relationship — no PF, no ESI, no statutory benefits. The contractor handles their own taxes via Section 194J or 194O TDS at 10% to 20%. The risk is misclassification — Indian courts regularly recharacterise long-term contractors as employees, exposing the foreign company to retrospective PF, ESI, gratuity and tax liabilities. EOR is the safe path for ongoing relationships exceeding 6 months."
          }
        },
        {
          "@type": "Question",
          "name": "Are EOR fees negotiable?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, EOR provider fees are typically negotiable for hires of five or more employees. Common negotiation points include waiver of one-time setup fees, reduction of security deposits from two months to one month, FX markup compression from 2-3% to 1%, multi-year discount of 10-20%, and waiver of off-cycle payroll surcharges. Always request a detailed sample invoice with all line items before signing the master service agreement. Hidden fees can add 15-30% to the headline monthly fee."
          }
        },
        {
          "@type": "Question",
          "name": "Does the EOR fee include health insurance and benefits?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "It varies by provider. India-specialist EORs typically bundle basic group health insurance at no extra cost. Mid-market and premium global platforms usually charge insurance separately at ₹500 to ₹1,500 per employee per month depending on coverage. Self-only coverage starts around ₹5,000 per year, employee-plus-spouse around ₹8,000, and family floater around ₹15,000. Always confirm whether the quoted EOR fee includes insurance, equipment costs, off-cycle payments, and statutory remittance fees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the typical onboarding timeline for an EOR hire in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An EOR onboarding in India typically takes 24-72 hours from offer acceptance to active employment, assuming the employee has KYC documents and bank details ready. India-specialist providers offer faster timelines (under 24 hours) than global platforms. Background verification adds 3-5 working days. Compare this with subsidiary setup which takes 4-6 months including company incorporation, GST registration, EPF and ESI registrations, opening bank accounts, and obtaining state-specific labour licences."
          }
        },
        {
          "@type": "Question",
          "name": "What is the EPF contribution structure for high-earning employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For employees with basic salary above ₹15,000 per month, EPF contribution can either be capped at ₹15,000 (statutory ceiling) yielding employer EPF of ₹1,800 per month, or computed on the full basic salary if the employee opts in. Employees with international worker status have no ceiling and contribute 12% on full basic. The employer share of 12% splits as 8.33% to EPS (capped at ₹15,000 wage), 3.67% to EPF, plus 0.5% EDLI and 0.5% admin charges."
          }
        },
        {
          "@type": "Question",
          "name": "Is professional tax applicable in all Indian states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Professional tax is levied only by certain states under Article 276 of the Constitution, capped at ₹2,500 per year. States imposing professional tax include Maharashtra, Karnataka, Tamil Nadu, Telangana, West Bengal, Gujarat, Andhra Pradesh, Odisha and Madhya Pradesh. States not imposing professional tax include Delhi, Haryana, Punjab, Uttar Pradesh, Uttarakhand and Rajasthan. The rate varies by salary slab and is paid by the employer to the state government on behalf of the employee."
          }
        },
        {
          "@type": "Question",
          "name": "What hidden costs should I watch for in EOR contracts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common hidden EOR costs include: one-time setup fees (₹0 to ₹40,000 per hire), security deposit equivalent to one to three months of total cost (refundable but ties up cash), FX markup of 1-3% on currency conversion when paying from USD, off-cycle payroll surcharges of ₹5,000 to ₹15,000 per payment, termination handling fees, equipment shipping of ₹15,000 to ₹40,000 per laptop, and benefits broker markups of 10-15% on insurance premiums. Insist on a sample invoice."
          }
        },
        {
          "@type": "Question",
          "name": "How is gratuity calculated under the new Labour Code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gratuity equals last drawn wages times 15 divided by 26 times completed years of service. Under the Code on Social Security 2020 effective 21 November 2025, the wages base is broadened — basic plus dearness allowance plus retaining allowance, with the 50% rule: allowances exceeding 50% of CTC are added to wages. Fixed-term employees become eligible after one year (down from five). Companies must accrue 4.81% of wages per month as gratuity provision in financial statements."
          }
        },
        {
          "@type": "Question",
          "name": "Can I terminate an India EOR employee easily?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Termination requires compliance with notice periods specified in the employment contract — typically 30 to 90 days for white-collar roles. The Industrial Relations Code 2020 requires written notice and payment in lieu of notice if waived. Severance includes accrued leave encashment, pro-rata bonus, gratuity if eligible, and any contractual severance. EOR providers handle the formal termination process but the foreign company decides timing and pays the costs. Termination cost typically equals one to three months of total compensation."
          }
        },
        {
          "@type": "Question",
          "name": "Does an EOR help with India equity grants like ESOPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EOR providers typically do not directly administer foreign-parent ESOPs but coordinate with the foreign company to capture ESOP perquisite value in monthly payroll for TDS purposes under Section 17(2)(vi). The employee pays tax on the perquisite value (FMV at exercise less exercise price) at applicable income tax slab rates. The EOR ensures correct TDS deduction and Form 16 reporting. ESOPs are paid in cash by the foreign company; the EOR books the perquisite, deducts tax, and remits."
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
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; gap: 0; }
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
        .calc-section-title.statutory { color: var(--info); }
        .calc-section-title.provider { color: var(--primary-light); }
        .calc-section-title.benefits { color: var(--success); }

        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="range"] { padding: 0; height: 8px; background: var(--surface-alt); border: none; cursor: pointer; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .form-group .range-meta { display: flex; justify-content: space-between; font-family: var(--font-mono); font-size: 11px; color: var(--text-muted); margin-top: 4px; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; margin-bottom: 8px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid var(--primary); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); }
        .verdict-card.amber { border-left-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); }
        .verdict-card.red { border-left-color: var(--danger); background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); }
        .verdict-card.blue { border-left-color: var(--info); background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); margin-bottom: 8px; }
        .verdict-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 14px; margin-top: 14px; }
        @media (max-width: 600px) { .verdict-grid { grid-template-columns: 1fr; } }
        .verdict-grid-item { background: rgba(255,255,255,0.65); border-radius: 8px; padding: 14px 16px; }
        .verdict-grid-label { font-size: 11px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .verdict-grid-value { font-family: var(--font-mono); font-size: 20px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-card.success { background: #DCE8F5; border-color: var(--success); }
        .summary-card.success .summary-label { color: #065F46; }
        .summary-card.success .summary-value { color: var(--success); }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 14px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .info-banner strong { font-weight: 700; }

        .breakdown-card { background: linear-gradient(135deg, #EFF6FF, #DBEAFE); border: 2px solid var(--info); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .breakdown-card h4 { font-size: 14px; color: #1E3A8A; margin-bottom: 10px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .breakdown-row { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid rgba(30,64,175,0.15); font-family: var(--font-mono); font-size: 13px; color: #1E3A8A; }
        .breakdown-row:last-child { border-bottom: none; font-weight: 700; padding-top: 12px; }
        .breakdown-row.total { background: rgba(255,255,255,0.7); margin-top: 10px; padding: 12px 14px; border-radius: 8px; font-size: 15px; }
        .breakdown-row.subtotal { font-weight: 600; border-top: 1px solid rgba(30,64,175,0.3); padding-top: 10px; margin-top: 4px; }

        .compare-card { background: var(--card); border: 2px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .compare-card h4 { font-size: 14px; color: var(--primary-dark); margin-bottom: 12px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .compare-row { display: grid; grid-template-columns: 1fr auto; gap: 12px; padding: 10px 0; border-bottom: 1px dashed var(--border); align-items: center; }
        .compare-row:last-child { border-bottom: none; }
        .compare-name { font-size: 13px; color: var(--text-secondary); font-weight: 600; }
        .compare-name .sub { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 2px; }
        .compare-value { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); font-size: 15px; text-align: right; }
        .compare-value.best { color: var(--success); }
        .compare-value.warn { color: var(--accent); }
        .compare-tag { display: inline-block; font-size: 10px; font-weight: 700; padding: 2px 8px; border-radius: 12px; margin-left: 6px; vertical-align: middle; }
        .compare-tag.best { background: var(--success); color: #fff; }
        .compare-tag.risk { background: var(--danger); color: #fff; }

        .body-cta { background: linear-gradient(135deg, var(--primary-dark), var(--primary)); color: #fff; border-radius: var(--radius-lg); padding: 28px 32px; margin: 32px 0; }
        .body-cta h3 { color: #fff; font-size: 20px; margin-bottom: 8px; }
        .body-cta p { color: rgba(255,255,255,0.88); margin-bottom: 16px; font-size: 15px; }
        .body-cta .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .body-cta .cta-btn:hover { background: var(--accent-light); }

        .content-section { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 24px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary-dark); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 14px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.7; }
        .content-section li strong { color: var(--primary-dark); }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-underline-offset: 2px; }
        .content-section a:hover { color: var(--primary); }

        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 16px; text-align: left; font-weight: 600; font-size: 13px; text-transform: uppercase; letter-spacing: 0.3px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 16px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody tr:hover { background: var(--surface-alt); }
        @media (max-width: 600px) { .rate-table { font-size: 12px; } .rate-table thead th, .rate-table tbody td { padding: 8px 10px; } }

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
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
        .faq-item.open .faq-answer { max-height: 800px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }

        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; }
        .cta-btn:hover { background: var(--accent-light); }

        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .footer a { color: rgba(255,255,255,0.7); text-decoration: none; }
        .footer a:hover { color: #fff; }

        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; }

        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .body-cta { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
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
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#statutory">Statutory Costs</a>
        <a href="#labour-codes">Labour Codes 2025</a>
        <a href="#provider-tiers">Provider Tiers</a>
        <a href="#vs-subsidiary">EOR vs Subsidiary</a>
        <a href="#vs-contractor">EOR vs Contractor</a>
        <a href="#hidden-costs">Hidden Costs</a>
        <a href="#timeline">Onboarding Timeline</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    India EOR Cost Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>India EOR Cost Calculator — <span>True Cost of Hiring</span> in India via Employer of Record (FY 2025-26)</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20India%20EOR%20Cost%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20EOR%20Cost%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20India%20EOR%20Cost%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This India EOR Cost Calculator computes the all-in cost a foreign company pays to hire an employee in India through an Employer of Record. The total has four components: <strong>gross salary</strong> (paid to employee), <strong>statutory employer contributions</strong> (PF, ESI, gratuity, bonus, professional tax, LWF), <strong>EOR provider fee</strong> ($99-$700 per month depending on tier), and <strong>group health insurance</strong>. The calculator reflects the four <strong>Labour Codes effective 21 November 2025</strong> — basic must be ≥50% of CTC, raising PF and gratuity bases; fixed-term employees qualify for gratuity after 1 year. The output includes the EOR vs subsidiary break-even (typically 10-15 employees) and EOR vs independent contractor risk comparison. Pair with our <a href="/tools/working-capital-calculator">Working Capital Calculator</a> for full cost-of-expansion modelling.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>India EOR Cost Calculator</h2>
            <p class="calc-intro">Enter the employee's gross monthly salary, choose the state of work, EOR provider tier and insurance preference. The calculator computes statutory employer contributions, provider fees, total monthly and annual cost, the effective load percentage on gross salary, and the break-even point against setting up your own subsidiary.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calculator.</div></noscript>

            <div class="calc-section-title">Employee Profile</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="gross">Monthly Gross Salary (₹)</label>
                    <input type="text" id="gross" value="200000" min="0" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">CTC offered to employee, excluding employer-side statutory.</span>
                </div>
                <div class="form-group">
                    <label for="basic-pct">Basic % of Gross <span style="font-family: var(--font-mono); color: var(--primary); float: right;" id="basic-pct-val">50%</span></label>
                    <input type="range" id="basic-pct" min="40" max="60" value="50" step="5">
                    <div class="range-meta"><span>40% (legacy)</span><span>50% (Code-compliant)</span><span>60%</span></div>
                    <span class="helper">Per Wages Code 2019, basic must be ≥50% of total remuneration. Drives PF + gratuity base.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="state">State of Work</label>
                    <select id="state">
                        <option value="MH" selected>Maharashtra (Mumbai/Pune)</option>
                        <option value="KA">Karnataka (Bengaluru)</option>
                        <option value="TN">Tamil Nadu (Chennai)</option>
                        <option value="TG">Telangana (Hyderabad)</option>
                        <option value="DL">Delhi NCR</option>
                        <option value="HR">Haryana (Gurugram)</option>
                        <option value="UP">Uttar Pradesh (Noida)</option>
                        <option value="WB">West Bengal (Kolkata)</option>
                        <option value="GJ">Gujarat (Ahmedabad)</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="OR">Odisha</option>
                        <option value="MP">Madhya Pradesh</option>
                    </select>
                    <span class="helper">Drives professional tax and LWF rates; Bengaluru salary band differs from Pune.</span>
                </div>
                <div class="form-group">
                    <label for="employees">Planned Employee Count</label>
                    <input type="text" id="employees" value="3" min="1" max="200" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Used for EOR vs subsidiary break-even computation.</span>
                </div>
            </div>

            <div class="calc-section-title provider">EOR Provider Tier</div>

            <div class="form-group" style="margin-bottom: 10px;">
                <label>Provider Pricing Tier</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn active" data-tier="india-spec">India-Specialist (~$140/m)</button>
                    <button type="button" class="toggle-btn" data-tier="mid-market">Mid-Market (~$300/m)</button>
                    <button type="button" class="toggle-btn" data-tier="premium">Premium Global (~$650/m)</button>
                    <button type="button" class="toggle-btn" data-tier="custom">Custom %</button>
                </div>
                <span class="helper">India specialists (Wisemonk, Pamgro) typically lowest. Premium global (Deel, Oyster) charge 4-5× more for same India compliance.</span>
            </div>

            <div class="calc-row">
                <div class="form-group" id="custom-pct-group" style="display: none;">
                    <label for="custom-pct">Custom Fee % of Gross</label>
                    <input type="text" id="custom-pct" value="10" min="0" max="30" step="0.5" inputmode="decimal" autocomplete="off">
                    <span class="helper">Some providers charge 8-15% of gross instead of flat fee.</span>
                </div>
                <div class="form-group">
                    <label for="setup-fee">One-Time Setup Fee (₹)</label>
                    <input type="text" id="setup-fee" value="0" min="0" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Background check, contract drafting. Often waived for ≥5 hires.</span>
                </div>
            </div>

            <div class="calc-section-title benefits">Benefits & Insurance</div>

            <div class="form-group" style="margin-bottom: 10px;">
                <label>Group Health Insurance</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-ins="none">None</button>
                    <button type="button" class="toggle-btn active" data-ins="self">Self only</button>
                    <button type="button" class="toggle-btn" data-ins="plus-one">+ Spouse</button>
                    <button type="button" class="toggle-btn" data-ins="family">Family floater</button>
                </div>
                <span class="helper">Group health typical: Self ₹5K/yr, +Spouse ₹8K/yr, Family ₹15K/yr per employee.</span>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Compute True Hiring Cost</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset to Default</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">Hiring Cost Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Total Monthly</div>
                            <div class="verdict-grid-value" id="v-monthly">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Effective Load %</div>
                            <div class="verdict-grid-value" id="v-load">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Annual Cost</div>
                            <div class="verdict-grid-value" id="v-annual">—</div>
                        </div>
                    </div>
                </div>

                <div id="alerts"></div>

                <div class="breakdown-card">
                    <h4>Cost Breakdown (Monthly)</h4>
                    <div class="breakdown-row"><span>Gross Salary (paid to employee)</span><span id="b-gross">—</span></div>
                    <div class="breakdown-row subtotal"><span>+ Statutory Employer Contributions</span><span id="b-stat-total">—</span></div>
                    <div class="breakdown-row" style="padding-left: 16px;"><span>· Provident Fund (12%)</span><span id="b-pf">—</span></div>
                    <div class="breakdown-row" style="padding-left: 16px;"><span>· ESI (3.25% if gross ≤ ₹21K)</span><span id="b-esi">—</span></div>
                    <div class="breakdown-row" style="padding-left: 16px;"><span>· Gratuity provision (4.81%)</span><span id="b-grat">—</span></div>
                    <div class="breakdown-row" style="padding-left: 16px;"><span>· Statutory Bonus (8.33%)</span><span id="b-bonus">—</span></div>
                    <div class="breakdown-row" style="padding-left: 16px;"><span>· Professional Tax</span><span id="b-pt">—</span></div>
                    <div class="breakdown-row" style="padding-left: 16px;"><span>· Labour Welfare Fund</span><span id="b-lwf">—</span></div>
                    <div class="breakdown-row subtotal"><span>+ EOR Provider Fee</span><span id="b-eor">—</span></div>
                    <div class="breakdown-row subtotal"><span>+ Group Health Insurance</span><span id="b-ins">—</span></div>
                    <div class="breakdown-row total"><span>= Total Monthly Cost</span><span id="b-total">—</span></div>
                </div>

                <div class="compare-card">
                    <h4>EOR vs Alternatives — Per Employee Cost</h4>
                    <div class="compare-row">
                        <div class="compare-name">EOR Arrangement<span class="sub">Statutory + Provider fee + Insurance</span></div>
                        <div class="compare-value" id="c-eor">—</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-name">Wholly-Owned Subsidiary<span class="sub">Setup amortised + monthly compliance + statutory</span></div>
                        <div class="compare-value" id="c-sub">—</div>
                    </div>
                    <div class="compare-row">
                        <div class="compare-name">Independent Contractor<span class="sub">Service fee + 10% TDS, no statutory <span class="compare-tag risk">MISCLASS RISK</span></span></div>
                        <div class="compare-value" id="c-cont">—</div>
                    </div>
                    <div class="compare-row" style="border-top: 2px solid var(--border); margin-top: 6px; padding-top: 12px;">
                        <div class="compare-name"><strong>Break-Even (EOR vs Subsidiary)</strong><span class="sub">Number of employees at which subsidiary becomes cheaper</span></div>
                        <div class="compare-value" id="c-be">—</div>
                    </div>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Statutory Total</div>
                        <div class="summary-value" id="s-stat">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">EOR Provider Fee</div>
                        <div class="summary-value" id="s-eor">—</div>
                    </div>
                    <div class="summary-card success">
                        <div class="summary-label">Cost / USD Equivalent</div>
                        <div class="summary-value" id="s-usd">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">PF Wage Base</div>
                        <div class="summary-value" id="s-pfbase">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Annual Bonus Provision</div>
                        <div class="summary-value" id="s-bonus">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Recommended Model</div>
                        <div class="summary-value" id="s-model">—</div>
                    </div>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — India EOR Cost Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20India%20EOR%20Cost%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20EOR%20Cost%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20India%20EOR%20Cost%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How the Calculator Works</h2>
            <p>The calculator combines four cost layers to produce the true cost of hiring an employee in India through an EOR arrangement. Each layer reflects current regulatory and market reality as of FY 2025-26 with the four <a href="https://www.pib.gov.in/PressReleseDetailm.aspx?PRID=2192463&reg=3&lang=2" rel="noopener" target="_blank">Labour Codes</a> effective from 21 November 2025.</p>
            <h3>Layer 1: Gross Salary</h3>
            <p>The cash CTC offered to the employee. Indian salary structures consist of basic pay, dearness allowance, house rent allowance, special allowance and variable components. Under the Wages Code 2019 effective 21 November 2025, basic plus dearness allowance plus retaining allowance must constitute at least 50% of the total remuneration — the famous "50% wage rule" that increases the calculation base for statutory contributions.</p>
            <h3>Layer 2: Statutory Employer Contributions</h3>
            <p>Mandatory employer-side contributions on top of gross salary, computed on the wage base as defined under the Code on Social Security 2020. Six components: <strong>Provident Fund</strong> at 12% of wages; <strong>Employees State Insurance</strong> at 3.25% of gross where gross ≤ ₹21,000; <strong>gratuity provision</strong> at 4.81% of wages; <strong>statutory bonus</strong> at 8.33% to 20% of wages where applicable; <strong>professional tax</strong> at state-specific rates; and <strong>Labour Welfare Fund</strong> at state-specific rates.</p>
            <h3>Layer 3: EOR Provider Fee</h3>
            <p>The fee charged by the EOR for legal employment infrastructure, payroll administration, statutory compliance, and HR support. Four pricing models in the Indian market: India-specialist providers ($99-$200/month), mid-market global platforms ($200-$400/month), premium global enterprises ($599-$700/month), and custom percentage-of-payroll arrangements (typically 8-15% of gross).</p>
            <h3>Layer 4: Group Health Insurance</h3>
            <p>Optional but expected by employees in India. Self-only coverage typically costs ₹5,000 per year, employee-plus-spouse ₹8,000, family floater ₹15,000. Some EOR providers bundle basic insurance in their fee; most charge separately. Premium coverage with critical illness, term life, and out-patient benefits adds another ₹5,000-₹10,000 per year per employee.</p>
        </section>

        <section class="content-section" id="statutory">
            <h2>India Statutory Employer Contributions Explained</h2>
            <p>Six statutory cost components apply to most India employees. Each has its own threshold, base, and remittance schedule. EOR providers handle remittance and reporting; the foreign company pays the cost as part of the monthly EOR invoice.</p>
            <h3>Provident Fund (EPF)</h3>
            <p>Governed by the Employees Provident Funds and Miscellaneous Provisions Act 1952, now subsumed under the Code on Social Security 2020. Both employee and employer contribute 12% of "wages" (as defined under the Wages Code 2019). Employee 12% goes wholly to EPF. Employer 12% splits as 8.33% to Employees Pension Scheme (capped at 8.33% of ₹15,000 = ₹1,250/month), 3.67% to EPF, plus 0.5% Employees Deposit Linked Insurance (capped at 0.5% of ₹15,000 = ₹75/month) and 0.5% admin charges. Effective employer burden is approximately 13% of the wage base. International workers have no ₹15,000 ceiling. Refer to <a href="https://www.epfindia.gov.in/" rel="noopener" target="_blank">EPFO India</a> for current contribution schedules.</p>
            <h3>Employees State Insurance (ESI)</h3>
            <p>Applies to employees with gross monthly wage of ₹21,000 or less. Employer contributes 3.25% of gross; employee contributes 0.75%. Provides medical benefits, disability cover, maternity benefits and dependent benefits via the <a href="https://www.esic.gov.in/" rel="noopener" target="_blank">ESIC portal</a>. For most knowledge-economy employees with gross above ₹21,000, ESI does not apply. Note: the Code on Social Security retains the ₹21,000 threshold pending finalisation of central rules.</p>
            <h3>Gratuity</h3>
            <p>Lump-sum benefit payable on termination, retirement or death after five years of continuous service (one year for fixed-term employees under the new Code). Computed as: <em>Last drawn wages × 15 ÷ 26 × completed years of service</em>. Statutory ceiling is ₹20,00,000. Most companies provision 4.81% of monthly wages as accrual to be tax-deductible under Section 36(1)(v). The Code on Social Security's broader wage definition has increased this base by 25-50% across most companies.</p>
            <h3>Statutory Bonus</h3>
            <p>Under the <a href="https://labour.gov.in/sites/default/files/payment_of_bonus_act_1965.pdf" rel="noopener" target="_blank">Payment of Bonus Act 1965</a>, applies to establishments with 20 or more employees. Bonus eligibility threshold: salary ≤ ₹21,000 per month. Minimum bonus: 8.33% of salary; maximum: 20% of salary. Computed and paid annually within 8 months of FY end. For most senior employees with salary above ₹21,000, statutory bonus does not apply but companies typically still provide ex-gratia or performance bonus.</p>
            <h3>Professional Tax</h3>
            <p>State-level tax under Article 276 of the Constitution, capped at ₹2,500 per year per employee. Levied by some states only. Maharashtra, Karnataka, Tamil Nadu, Telangana, West Bengal, Gujarat, Andhra Pradesh, Odisha and Madhya Pradesh impose professional tax. Delhi, Haryana, Punjab, Uttar Pradesh, Uttarakhand and Rajasthan do not. Typical rate is ₹200 per month (₹2,400 per year) for salaries above ₹15,000-₹20,000 depending on state slabs.</p>
            <h3>Labour Welfare Fund (LWF)</h3>
            <p>State-administered welfare fund for unorganised workers' education, health and welfare. Rates vary widely: Maharashtra ₹36/year (employer), Karnataka ₹40/year, Tamil Nadu ₹20/year, Gujarat ₹12/year. Many states do not have an LWF. Total cost is nominal — typically ₹40-100 per year per employee.</p>
        </section>

        <section class="content-section" id="labour-codes">
            <h2>Labour Codes 2025 — What Changed for EOR Costs</h2>
            <p>The four Labour Codes — Wages Code 2019, Industrial Relations Code 2020, Code on Social Security 2020, and Occupational Safety, Health and Working Conditions Code 2020 — became enforceable on 21 November 2025, consolidating 29 pre-existing labour statutes. Three changes materially affect EOR cost structure for foreign employers.</p>
            <h3>Change 1: Unified "Wages" Definition with 50% Rule</h3>
            <p>Section 2(y) of the Wages Code 2019 defines wages uniformly across all four codes. Wages = basic pay + dearness allowance + retaining allowance, with limited exclusions for HRA, conveyance, statutory bonus, overtime, gratuity and similar items. Critically, the excluded allowances cannot exceed 50% of total remuneration; the excess is deemed to be wages. This forces a structural recalibration of Indian salary packages — basic + DA must be at least 50% of CTC. Prior structures with 30-35% basic and 65-70% allowances are no longer compliant.</p>
            <h3>Change 2: Higher PF and Gratuity Bases</h3>
            <p>Because PF, ESI, gratuity and statutory bonus are computed on "wages", the broader definition raises the calculation base substantially. Companies with low basic structures (30-35% of CTC) see PF contributions increase by 30-50%. Gratuity liability under Ind AS 19 jumps 25-50% across most companies as the actuarial valuation incorporates the new wages base. Existing employee severance reserves may be inadequate; companies must remeasure and book past service cost in the P&L for the period 21 November 2025 onwards.</p>
            <h3>Change 3: Fixed-Term Employees Get Gratuity at 1 Year</h3>
            <p>Under the Code on Social Security 2020, fixed-term contract employees become eligible for gratuity after just one year of continuous service, down from five years. This eliminates the cost advantage of fixed-term over permanent employment. EOR providers have absorbed this change but it materially affects the economics of project-based hiring. For roles expected to last 12-24 months, the gratuity-at-1-year rule means termination cost rises by 8-12% versus the old framework.</p>
            <div class="callout warn">
                <p><strong>Compliance buffer in EOR cost:</strong> Most EOR providers have built a 5-8% buffer into their statutory cost computation to absorb the Labour Code transition impact. Foreign employers should verify with the EOR whether quoted statutory burden reflects the new 50% wages rule. Quotes from before mid-2025 may understate costs by 10-15%.</p>
            </div>
        </section>


        <div class="body-cta">
            <h3>Need Help Hiring in India?</h3>
            <p>Patron Accounting helps foreign companies pick between EOR and subsidiary, set up Indian entities, register PF/ESI/GST, and run compliant payroll. Fixed-fee engagement model with transparent pricing.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20EOR%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20EOR%20Cost%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20EOR%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="provider-tiers">
            <h2>EOR Provider Tiers — Pricing Reality</h2>
            <p>India EOR pricing in 2026 spans an order of magnitude — from $99 per employee per month at the low end to $1,500 at the premium end. Same statutory compliance, same legal employer entity, same PF/ESI/TDS remittance. The fee differential reflects positioning, scale, country coverage, and service depth — not better India compliance.</p>
            <h3>Tier 1: India-Specialist Providers ($99-$200/month)</h3>
            <p>Examples: Wisemonk, Pamgro, Kaamwork. Wholly-owned Indian entity, in-house payroll team, dedicated HR manager per client. Best fit when India is the only or primary hiring location. Pricing typically flat-fee per employee per month regardless of salary level. Setup fees often waived. Insurance frequently bundled in the headline fee. Limitations: usually do not support hiring outside India.</p>
            <h3>Tier 2: Mid-Market Global Platforms ($200-$400/month)</h3>
            <p>Examples: Multiplier, Skuad, Remofirst, Borderless AI. Multi-country coverage (typically 80-150 countries) with India as a major market. Self-service portal-driven onboarding, ticket-based support. Best fit when India is one of multiple hiring countries (US + UK + India + Mexico). Pricing often flat-fee with country surcharges. Setup fees and security deposits more common.</p>
            <h3>Tier 3: Premium Global Enterprises ($599-$700/month)</h3>
            <p>Examples: Deel, Oyster, Atlas HXM, Justworks Global. Comprehensive multi-country coverage (140-185+ countries). Dedicated account managers, quarterly business reviews, embedded HR consulting. Best fit for companies hiring 50+ globally with India as one market. White-glove service justifies premium pricing for HR-heavy organisations. Equipment procurement and benefits broker support typically included.</p>
            <h3>Tier 4: Custom Percentage Models</h3>
            <p>Some providers charge 8-15% of gross salary instead of flat fee. Attractive for low-salary roles (5-8% of $30K is cheaper than $300/month flat) but punishing for senior hires (15% of $120K = $18,000/year extra versus $4,800 flat). Calculate both flat and percentage models across your salary bands before signing. Hybrid arrangements — flat fee for senior roles, percentage for junior — often optimal.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Tier</th><th>Monthly Fee Range</th><th>Best Fit</th><th>India Coverage Quality</th></tr>
                </thead>
                <tbody>
                    <tr><td>India-Specialist</td><td>$99-$200 (₹8,000-₹17,000)</td><td>India-only or India-primary hiring</td><td>Excellent — local expertise</td></tr>
                    <tr><td>Mid-Market Global</td><td>$200-$400 (₹17,000-₹33,000)</td><td>Multi-country teams, 5-50 employees</td><td>Good — standardised processes</td></tr>
                    <tr><td>Premium Global</td><td>$599-$700 (₹50,000-₹58,000)</td><td>Enterprise, 50+ globally</td><td>Excellent — dedicated team</td></tr>
                    <tr><td>Custom %</td><td>8-15% of gross</td><td>Mixed seniority levels</td><td>Varies by provider</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="vs-subsidiary">
            <h2>EOR vs Wholly-Owned Subsidiary — When to Switch</h2>
            <p>The classic build-vs-buy question. EOR offers speed and zero infrastructure. Subsidiary offers control, brand identity in India, and lower marginal cost per employee at scale. The break-even calculation depends on three variables: total fixed cost of subsidiary, marginal compliance cost per employee, and EOR provider fee.</p>
            <h3>Subsidiary Cost Structure</h3>
            <ul>
                <li><strong>Setup cost</strong>: ₹5-15 lakh one-time. Includes private limited company incorporation (₹15,000-₹50,000) via the <a href="https://www.mca.gov.in/" rel="noopener" target="_blank">MCA portal</a>, GST registration, EPF and ESI registrations, PAN/TAN, professional tax registration, opening bank accounts, drafting employment contracts and HR policies, professional fees for company secretary and CA support during setup.</li>
                <li><strong>Recurring compliance</strong>: ₹50,000-₹1,00,000 per month. Includes monthly payroll processing, GST returns, TDS returns, PF returns (ECR + Form 24Q), ESI returns, professional tax returns, ROC annual filings (AOC-4, MGT-7), audit fees amortised, transfer pricing documentation if applicable.</li>
                <li><strong>Per-employee statutory</strong>: Same as EOR (PF, ESI, gratuity, bonus, PT, LWF) — governed by law not by the employer's structure.</li>
                <li><strong>Subsidiary CFO/HR overhead</strong>: ₹10-25 lakh annual for a CFO + 1 HR person, scaling with team size.</li>
            </ul>
            <h3>Break-Even Math</h3>
            <p>Set subsidiary monthly cost equal to EOR monthly cost. Subsidiary cost = (Setup ÷ 12 amortised) + Compliance + (N × Statutory). EOR cost = N × (EOR Fee + Statutory). Solve for N. Typical break-even falls in the 8-15 employees range depending on EOR tier and salary level. The calculator above computes this automatically.</p>
            <h3>Beyond the Numbers — Strategic Factors</h3>
            <ul>
                <li><strong>Speed</strong>: EOR onboards in 24-72 hours; subsidiary takes 4-6 months. For testing the India market or rapid hiring, EOR wins.</li>
                <li><strong>Brand presence</strong>: Subsidiary lets you sign contracts in India, register trademarks, lease office space in your name. Long-term India bets need a subsidiary.</li>
                <li><strong>Equity grants</strong>: Indian subsidiary can offer ESOPs of the parent or local equity. EOR cannot directly administer foreign-parent ESOPs (only book the perquisite).</li>
                <li><strong>Compliance burden</strong>: Subsidiary brings monthly returns, audits, TP documentation, transfer pricing, FEMA reporting. EOR offloads this entirely.</li>
                <li><strong>Exit cost</strong>: Closing a subsidiary in India takes 18-24 months. Closing an EOR relationship takes 60-90 days notice. Hedge accordingly.</li>
            </ul>
        </section>

        <section class="content-section" id="vs-contractor">
            <h2>EOR vs Independent Contractor — The Misclassification Risk</h2>
            <p>The cheapest option on paper is to engage Indian talent as independent contractors. No PF, no ESI, no gratuity, no bonus, no labour code compliance. Pay through wire transfer, deduct 10% TDS under Section 194J or 194O, issue Form 16A annually, done. So why don't all foreign companies do this?</p>
            <h3>The Risk: Substance over Form</h3>
            <p>Indian courts and the <a href="https://www.incometax.gov.in/iec/foportal/" rel="noopener" target="_blank">Income Tax Department</a>, GST authorities, and the EPFO regularly recharacterise long-term contractor relationships as employment. The substance-over-form test asks: Does the foreign company control the working hours? Provide equipment? Direct day-to-day work? Pay regular monthly amounts? Restrict the worker from working for others? If yes, the contractor is functionally an employee — and the foreign company is liable for retrospective PF, ESI, gratuity, bonus, professional tax, plus interest and penalties going back up to 7 years.</p>
            <h3>Quantifying the Risk</h3>
            <p>For a contractor earning ₹2 lakh per month treated as employee: retrospective PF for 24 months = ₹4.32 lakh + interest at 12% = ₹4.84 lakh. Retrospective gratuity = ₹0.50 lakh. Penalties under Section 14B EPF Act up to ₹1 lakh per month per employee. ESI penalties similar. Aggregate retrospective exposure for one misclassified worker over 2 years can exceed ₹6-8 lakh — far more than 24 months of EOR fees ($3,000-$15,000).</p>
            <h3>Safe Cases for Contractor Engagement</h3>
            <ul>
                <li><strong>Genuine project-based work</strong>: Defined scope, defined deliverables, defined end date. Less than 6 months. Worker has other clients.</li>
                <li><strong>Specialist consulting</strong>: Strategy advice, design work, legal opinion, accounting work where worker brings independent professional judgment.</li>
                <li><strong>Outcome-based engagements</strong>: Payment tied to milestones, not hours. Worker uses own equipment and infrastructure.</li>
                <li><strong>Multi-client visible relationship</strong>: Public-facing work for multiple companies, not exclusive engagement.</li>
            </ul>
            <p>For ongoing relationships of 6+ months with day-to-day direction, EOR is the safe path. The cost differential of ~$200-$500 per month is tiny compared to the misclassification exposure.</p>
        </section>

        <section class="content-section" id="hidden-costs">
            <h2>Hidden Costs in EOR Contracts</h2>
            <p>The headline EOR fee is the start of the conversation, not the end. Across published EOR contracts and our experience supporting foreign clients in India, the actual invoice contains 4-10 line items beyond the headline fee. Understanding these upfront prevents budget surprises.</p>
            <h3>Common Hidden Cost Lines</h3>
            <ul>
                <li><strong>Setup fee</strong>: ₹0-₹40,000 per new employee. Covers background check, contract drafting, compliance onboarding. Negotiable to zero for ≥5-employee commitments.</li>
                <li><strong>Security deposit</strong>: 1-3 months of total cost (refundable). Held against severance, statutory, and termination liabilities. Negotiable down to 1 month for low-risk countries.</li>
                <li><strong>FX markup</strong>: 1-3% on USD-to-INR conversion when paying from USD. Often invisible in the invoice — embedded in the exchange rate offered. Get a benchmark FX rate confirmed in writing.</li>
                <li><strong>Off-cycle payment fee</strong>: ₹5,000-₹15,000 per off-cycle payment. Applies to bonuses, severance, mid-month adjustments. Push for standard inclusion of 2-3 off-cycles per year per employee.</li>
                <li><strong>Termination handling</strong>: ₹10,000-₹30,000 per termination. Covers final settlement, gratuity calculation, exit interview, EPF transfer support.</li>
                <li><strong>Equipment shipping</strong>: ₹15,000-₹40,000 per laptop. Most EORs procure and ship; alternative is to ship from US/UK with import duty and timeline risk.</li>
                <li><strong>Benefits broker markup</strong>: 10-15% on insurance premiums. Negotiate this to direct premium plus a fixed admin fee.</li>
                <li><strong>Year-end filing</strong>: Form 16, Form 24Q final, Form 26Q final — usually included but verify in MSA.</li>
            </ul>
            <h3>Negotiation Checklist Before Signing</h3>
            <p>Request a sample invoice for one employee at your target salary band. Verify each line item, ask which are bundled and which are extra. Request fee waivers for ≥5-hire commitments. Lock the FX rate methodology in writing — quarterly recalibration is fairer than at-invoice spot rate. Push for one free off-cycle per quarter and one free termination per year. Cap the security deposit at one month and confirm the refund timeline.</p>
        </section>

        <section class="content-section" id="timeline">
            <h2>Onboarding Timeline — EOR vs Subsidiary</h2>
            <p>Time-to-hire is often the deciding factor for foreign companies. EOR collapses the onboarding window from months to days because the legal employment infrastructure already exists.</p>
            <h3>EOR Onboarding (24-72 Hours Typical)</h3>
            <ol>
                <li><strong>Day 0</strong>: Foreign company sends offer to EOR with terms. EOR drafts compliant Indian employment contract.</li>
                <li><strong>Day 1</strong>: Candidate signs offer. EOR initiates background verification (3-5 working days).</li>
                <li><strong>Day 1-2</strong>: KYC document collection — PAN, Aadhaar, bank details, prior employment proof, education proof.</li>
                <li><strong>Day 2-3</strong>: PF/ESI/UAN registration if first job; otherwise UAN transfer. Salary structuring per Wages Code 50% rule. Insurance enrolment.</li>
                <li><strong>Day 3</strong>: Active employment. Equipment shipped. Day 1 of work.</li>
            </ol>
            <h3>Subsidiary Setup (4-6 Months Typical)</h3>
            <ol>
                <li><strong>Months 1-2</strong>: Company incorporation. Reserve name, file SPICe+, obtain Certificate of Incorporation, PAN, TAN.</li>
                <li><strong>Month 2</strong>: GST registration. Open current account. Apply for Importer Exporter Code if applicable.</li>
                <li><strong>Months 2-3</strong>: PF registration on Shram Suvidha portal. ESI registration. Professional tax registration in operating states. Labour Welfare Fund registration where applicable.</li>
                <li><strong>Month 3-4</strong>: Draft employment contracts, HR policies, leave policy, code of conduct, POSH committee constitution. Set up payroll infrastructure or engage payroll vendor.</li>
                <li><strong>Months 4-5</strong>: First hires onboarded. First payroll run with PF challan, ESI challan, TDS challan, professional tax challan.</li>
                <li><strong>Months 5-6</strong>: Steady-state operations. Annual filings infrastructure (ROC, income tax, GST annual return, TDS annual return).</li>
            </ol>
            <p>For most foreign companies entering India, the path is: start with EOR for first 6-18 months, validate market fit and team, then transition to subsidiary at 10-15 employees when economics flip. Patron Accounting supports both phases — EOR vendor evaluation and subsidiary setup with full compliance handover.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is an Employer of Record (EOR) in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An Employer of Record is a third-party entity legally registered in India that hires employees on behalf of a foreign company without an Indian subsidiary. The EOR holds the formal employment contract, runs payroll, deducts TDS, remits statutory contributions like PF and ESI, and ensures Labour Code compliance. The foreign company directs the day-to-day work while the EOR carries the legal employer obligations. EORs let foreign companies hire in India in days rather than the months required for entity setup.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What does an EOR cost per employee in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EOR provider fees in India range from approximately ₹8,000 to ₹58,000 per employee per month in 2026. India-specialist providers like Wisemonk and Pamgro charge $99 to $200 per month. Mid-market global platforms like Multiplier and Skuad charge $200 to $400. Premium global platforms like Deel and Oyster charge $599 to $700. The provider fee is added on top of gross salary and statutory contributions. Total true cost equals salary plus statutory plus provider fee plus insurance.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What statutory contributions does an India employer pay?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">India employer statutory contributions include Provident Fund at 12% of wages (employer share including EDLI and admin charges), Employees State Insurance at 3.25% of gross wages where the wage is at or below ₹21,000 per month, gratuity provision at 4.81% of wages, statutory bonus at 8.33% to 20% of wages where applicable under the Payment of Bonus Act, professional tax at state-specific rates capped at ₹2,500 per year, and Labour Welfare Fund contribution at state-specific annual rates.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How did the new Labour Codes 2025 change EOR costs?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The four Labour Codes effective 21 November 2025 introduced a unified wages definition requiring basic pay plus dearness allowance to be at least 50% of total remuneration. For salary structures earlier loaded with allowances, this raises the PF and gratuity calculation base substantially. Industry estimates suggest gratuity liabilities will jump 25-50% across most companies. Fixed-term employees now qualify for gratuity after one year instead of five. EOR providers have absorbed these changes by adjusting salary structures upon onboarding.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When does it make sense to set up a subsidiary instead of using EOR?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EOR is generally cheaper for 1-10 employees. The break-even point typically lies in the 10-15 employee range, where the fixed costs of subsidiary setup (₹5-15 lakh one-time, ₹50,000 to ₹1 lakh per month recurring) are amortised over enough employees to beat the per-employee EOR fee. Beyond 15 employees, a subsidiary is usually cheaper but adds compliance complexity. The EOR Cost Calculator computes the precise break-even based on your salary level and provider tier.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between EOR and an independent contractor?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An independent contractor is engaged directly by the foreign company under a service agreement without employment relationship — no PF, no ESI, no statutory benefits. The contractor handles their own taxes via Section 194J or 194O TDS at 10% to 20%. The risk is misclassification — Indian courts regularly recharacterise long-term contractors as employees, exposing the foreign company to retrospective PF, ESI, gratuity and tax liabilities. EOR is the safe path for ongoing relationships exceeding 6 months.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Are EOR fees negotiable?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, EOR provider fees are typically negotiable for hires of five or more employees. Common negotiation points include waiver of one-time setup fees, reduction of security deposits from two months to one month, FX markup compression from 2-3% to 1%, multi-year discount of 10-20%, and waiver of off-cycle payroll surcharges. Always request a detailed sample invoice with all line items before signing the master service agreement. Hidden fees can add 15-30% to the headline monthly fee.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Does the EOR fee include health insurance and benefits?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">It varies by provider. India-specialist EORs typically bundle basic group health insurance at no extra cost. Mid-market and premium global platforms usually charge insurance separately at ₹500 to ₹1,500 per employee per month depending on coverage. Self-only coverage starts around ₹5,000 per year, employee-plus-spouse around ₹8,000, and family floater around ₹15,000. Always confirm whether the quoted EOR fee includes insurance, equipment costs, off-cycle payments, and statutory remittance fees.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the typical onboarding timeline for an EOR hire in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">An EOR onboarding in India typically takes 24-72 hours from offer acceptance to active employment, assuming the employee has KYC documents and bank details ready. India-specialist providers offer faster timelines (under 24 hours) than global platforms. Background verification adds 3-5 working days. Compare this with subsidiary setup which takes 4-6 months including company incorporation, GST registration, EPF and ESI registrations, opening bank accounts, and obtaining state-specific labour licences.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the EPF contribution structure for high-earning employees?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For employees with basic salary above ₹15,000 per month, EPF contribution can either be capped at ₹15,000 (statutory ceiling) yielding employer EPF of ₹1,800 per month, or computed on the full basic salary if the employee opts in. Employees with international worker status have no ceiling and contribute 12% on full basic. The employer share of 12% splits as 8.33% to EPS (capped at ₹15,000 wage), 3.67% to EPF, plus 0.5% EDLI and 0.5% admin charges.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is professional tax applicable in all Indian states?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Professional tax is levied only by certain states under Article 276 of the Constitution, capped at ₹2,500 per year. States imposing professional tax include Maharashtra, Karnataka, Tamil Nadu, Telangana, West Bengal, Gujarat, Andhra Pradesh, Odisha and Madhya Pradesh. States not imposing professional tax include Delhi, Haryana, Punjab, Uttar Pradesh, Uttarakhand and Rajasthan. The rate varies by salary slab and is paid by the employer to the state government on behalf of the employee.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What hidden costs should I watch for in EOR contracts?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Common hidden EOR costs include: one-time setup fees (₹0 to ₹40,000 per hire), security deposit equivalent to one to three months of total cost (refundable but ties up cash), FX markup of 1-3% on currency conversion when paying from USD, off-cycle payroll surcharges of ₹5,000 to ₹15,000 per payment, termination handling fees, equipment shipping of ₹15,000 to ₹40,000 per laptop, and benefits broker markups of 10-15% on insurance premiums. Insist on a sample invoice.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is gratuity calculated under the new Labour Code?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Gratuity equals last drawn wages times 15 divided by 26 times completed years of service. Under the Code on Social Security 2020 effective 21 November 2025, the wages base is broadened — basic plus dearness allowance plus retaining allowance, with the 50% rule: allowances exceeding 50% of CTC are added to wages. Fixed-term employees become eligible after one year (down from five). Companies must accrue 4.81% of wages per month as gratuity provision in financial statements.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I terminate an India EOR employee easily?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Termination requires compliance with notice periods specified in the employment contract — typically 30 to 90 days for white-collar roles. The Industrial Relations Code 2020 requires written notice and payment in lieu of notice if waived. Severance includes accrued leave encashment, pro-rata bonus, gratuity if eligible, and any contractual severance. EOR providers handle the formal termination process but the foreign company decides timing and pays the costs. Termination cost typically equals one to three months of total compensation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Does an EOR help with India equity grants like ESOPs?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">EOR providers typically do not directly administer foreign-parent ESOPs but coordinate with the foreign company to capture ESOP perquisite value in monthly payroll for TDS purposes under Section 17(2)(vi). The employee pays tax on the perquisite value (FMV at exercise less exercise price) at applicable income tax slab rates. The EOR ensures correct TDS deduction and Form 16 reporting. ESOPs are paid in cash by the foreign company; the EOR books the perquisite, deducts tax, and remits.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need EOR or Subsidiary Help?</h3>
            <p>Patron Accounting helps foreign companies decide between EOR and subsidiary, set up Indian entities, and run compliant payroll.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20EOR%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20EOR%20Cost%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20EOR%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/private-limited-company-registration" class="sidebar-link">Private Limited Co. Registration<span class="arrow">→</span></a>
            <a href="/payroll-management-services" class="sidebar-link">Payroll Management<span class="arrow">→</span></a>
            <a href="/pf-registration" class="sidebar-link">PF Registration<span class="arrow">→</span></a>
            <a href="/esi-registration" class="sidebar-link">ESI Registration<span class="arrow">→</span></a>
            <a href="/professional-tax-registration" class="sidebar-link">Professional Tax Registration<span class="arrow">→</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/take-home-salary-calculator" class="sidebar-link">Take-Home Salary Calculator<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/working-capital-calculator" class="sidebar-link">Working Capital Calculator<span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/hra-calculator" class="sidebar-link">HRA Calculator<span class="arrow">→</span></a>
            <a href="/tools/ctc-to-in-hand-calculator" class="sidebar-link">CTC to In-Hand Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/payroll-setup-india-comprehensive-guide-for-businesses" class="sidebar-link">Payroll Setup in India: Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/esic-registration-online-india-2025" class="sidebar-link">ESIC Registration Online India<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026" class="sidebar-link">Annual Compliance Calendar 2025-26<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune · Mumbai · Delhi · Gurugram</div>
    <div class="trust">Trusted by 50+ foreign companies for India payroll & compliance</div>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function(){
    'use strict';
    function parseINR(raw){if(raw===undefined||raw===null)return NaN;var c=String(raw).replace(/[,\s₹]/g,'');if(c==='')return NaN;var n=parseFloat(c);return isFinite(n)?n:NaN;}
    function pickPositive(p,f){return (isFinite(p)&&p>0)?p:f;}
    var $ = function(id){ return document.getElementById(id); };

    var USD_INR = 83.5;

    function fmtINR(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n));
        var sign = v < 0 ? '−' : '';
        v = Math.abs(v);
        if (v >= 10000000) return sign + '₹' + (v/10000000).toFixed(2) + ' Cr';
        if (v >= 100000)   return sign + '₹' + (v/100000).toFixed(2) + ' L';
        return sign + '₹' + v.toLocaleString('en-IN');
    }
    function fmtINRfull(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n));
        return '₹' + v.toLocaleString('en-IN');
    }
    function fmtUSD(n){
        if (n === null || n === undefined || isNaN(n)) return '—';
        var v = Math.round(Number(n) / USD_INR);
        return '$' + v.toLocaleString('en-US');
    }

    // State-specific rates
    var PT_RATE = {
        'MH': 200, 'KA': 200, 'TN': 208, 'TG': 200, 'WB': 200,
        'GJ': 200, 'AP': 200, 'OR': 200, 'MP': 200,
        'DL': 0, 'HR': 0, 'UP': 0
    };
    var LWF_ANNUAL = {
        'MH': 36, 'KA': 40, 'TN': 20, 'WB': 18, 'GJ': 12,
        'AP': 60, 'OR': 24, 'MP': 24,
        'TG': 0, 'DL': 0, 'HR': 0, 'UP': 0
    };
    var STATE_LABEL = {
        'MH': 'Maharashtra', 'KA': 'Karnataka', 'TN': 'Tamil Nadu',
        'TG': 'Telangana', 'DL': 'Delhi', 'HR': 'Haryana',
        'UP': 'Uttar Pradesh', 'WB': 'West Bengal', 'GJ': 'Gujarat',
        'AP': 'Andhra Pradesh', 'OR': 'Odisha', 'MP': 'Madhya Pradesh'
    };

    // EOR fee by tier (INR/month)
    var EOR_FEES = {
        'india-spec': 11700,   // ~$140
        'mid-market': 25000,   // ~$300
        'premium': 54000,      // ~$650
        'custom': 0  // computed dynamically
    };
    var TIER_LABEL = {
        'india-spec': 'India-Specialist',
        'mid-market': 'Mid-Market Global',
        'premium': 'Premium Global',
        'custom': 'Custom %'
    };

    // Insurance annual (INR/year)
    var INSURANCE_ANNUAL = {
        'none': 0, 'self': 5000, 'plus-one': 8000, 'family': 15000
    };

    // State for toggles
    var state = {
        tier: 'india-spec',
        insurance: 'self'
    };

    // Toggle handlers
    function bindToggles(selector, attr, stateKey, onChange){
        document.querySelectorAll(selector + ' .toggle-btn').forEach(function(btn){
            btn.addEventListener('click', function(){
                document.querySelectorAll(selector + ' .toggle-btn').forEach(function(b){ b.classList.remove('active'); });
                btn.classList.add('active');
                state[stateKey] = btn.getAttribute(attr);
                if (onChange) onChange();
            });
        });
    }

    // Tier selection
    document.querySelectorAll('.toggle-btn[data-tier]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-tier]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.tier = btn.getAttribute('data-tier');
            $('custom-pct-group').style.display = state.tier === 'custom' ? '' : 'none';
        });
    });

    // Insurance selection
    document.querySelectorAll('.toggle-btn[data-ins]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-ins]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.insurance = btn.getAttribute('data-ins');
        });
    });

    // Basic % range slider
    $('basic-pct').addEventListener('input', function(){
        $('basic-pct-val').textContent = $('basic-pct').value + '%';
    });

    // FAQ accordion
    document.querySelectorAll('.faq-item').forEach(function(item){
        var btn = item.querySelector('.faq-question');
        if (!btn) return;
        btn.addEventListener('click', function(){
            item.classList.toggle('open');
            btn.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
        });
    });

    // TOC active state
    var tocLinks = document.querySelectorAll('.toc-nav a');
    var tocSections = [];
    tocLinks.forEach(function(a){
        var id = a.getAttribute('href').replace('#','');
        var s = document.getElementById(id);
        if (s) tocSections.push({el: s, link: a});
    });
    function updateTocActive(){
        var scrollY = window.scrollY + 100;
        var current = tocSections[0];
        for (var i = 0; i < tocSections.length; i++){
            if (tocSections[i].el.offsetTop <= scrollY) current = tocSections[i];
        }
        tocLinks.forEach(function(l){ l.classList.remove('active'); });
        if (current && current.link) current.link.classList.add('active');
    }
    window.addEventListener('scroll', updateTocActive, {passive: true});
    updateTocActive();

    function compute(){
        var gross = parseINR($('gross').value) || 0;
        var basicPct = parseINR($('basic-pct').value) || 50;
        var stateCode = $('state').value;
        var employees = parseInt($('employees').value) || 1;
        var setupFee = parseINR($('setup-fee').value) || 0;
        var customPct = parseINR($('custom-pct').value) || 0;

        if (gross <= 0) {
            alert('Please enter a valid gross salary.');
            return;
        }

        // Basic salary
        var basic = gross * basicPct / 100;
        // PF wage base (capped at ₹15,000 per default; foreign employees often opt for full)
        var pfBase = Math.min(basic, 15000);
        // PF employer share = 12% of pfBase + ~0.5% EDLI capped + 0.5% admin = ~13% effective
        // For simplicity, use 12% of pfBase + 1% admin/EDLI on min(basic, 15000)
        var pf = pfBase * 0.13;

        // ESI: 3.25% if gross ≤ ₹21,000 (per Code on Social Security)
        var esi = gross <= 21000 ? gross * 0.0325 : 0;

        // Gratuity: 4.81% of basic (provision under Payment of Gratuity Act / Social Security Code)
        var gratuity = basic * 0.0481;

        // Statutory bonus: 8.33% of min(basic, 7000) IF gross <= ₹21,000 (Bonus Act eligibility threshold)
        var bonus = gross <= 21000 ? Math.min(basic, 7000) * 0.0833 : 0;

        // PT (state-specific)
        var pt = PT_RATE[stateCode] || 0;
        // PT capped at 2,500/year — most monthly rates of ₹200 = ₹2,400/year, fine

        // LWF (state-specific, annual converted to monthly)
        var lwf = (LWF_ANNUAL[stateCode] || 0) / 12;

        var statutoryTotal = pf + esi + gratuity + bonus + pt + lwf;

        // EOR fee
        var eorFee;
        if (state.tier === 'custom') {
            eorFee = gross * customPct / 100;
        } else {
            eorFee = EOR_FEES[state.tier];
        }

        // Insurance (annual / 12)
        var insurance = (INSURANCE_ANNUAL[state.insurance] || 0) / 12;

        // Setup fee amortised over 12 months
        var setupAmort = setupFee / 12;

        // Total monthly cost (per employee)
        var totalMonthly = gross + statutoryTotal + eorFee + insurance + setupAmort;
        var totalAnnual = totalMonthly * 12;

        // Effective load %
        var loadPct = ((statutoryTotal + eorFee + insurance + setupAmort) / gross) * 100;

        // Subsidiary alternative
        // Setup: ₹10 lakh one-time + ₹75K/month compliance overhead
        var SUBSIDIARY_SETUP = 1000000; // ₹10 L
        var SUBSIDIARY_MONTHLY_FIXED = 75000; // ₹75K/month compliance
        var subFixedMonthly = (SUBSIDIARY_SETUP / 12) + SUBSIDIARY_MONTHLY_FIXED;
        // Per-employee subsidiary cost = (subFixedMonthly / N) + gross + statutory
        var subPerEmp = (subFixedMonthly / employees) + gross + statutoryTotal;
        // Insurance optional, similar rate
        subPerEmp += insurance;

        // EOR per-employee cost (already computed)
        var eorPerEmp = totalMonthly;

        // Contractor alternative (10% TDS, no statutory, MISCLASS risk)
        // For comparison, compute equivalent gross (10% TDS = 90% net to contractor)
        // Foreign company effectively pays gross / 0.90 to net same amount
        // But really, contractor cost ≈ gross (no statutory) plus 10% TDS that's deducted
        var contractorCost = gross + (gross * 0.05); // assume small handling 5% margin

        // Break-even N: when subsidiary per-employee = EOR per-employee
        // Both have gross + statutory + insurance baseline; differ by:
        //   EOR adds: eorFee + setupAmort
        //   Subsidiary adds: subFixedMonthly / N
        // Set equal: eorFee + setupAmort = subFixedMonthly / N
        // N = subFixedMonthly / (eorFee + setupAmort)
        var perEmpEorOverhead = eorFee + setupAmort;
        var breakEvenN = perEmpEorOverhead > 0 ? Math.ceil(subFixedMonthly / perEmpEorOverhead) : 999;

        // Decision
        var verdictClass = '';
        var verdictHeadline = '';
        var verdictSub = '';
        var recommendedModel = '';

        if (employees <= 3) {
            verdictClass = '';
            verdictHeadline = 'EOR is the right choice — ' + fmtINR(totalMonthly) + '/month per hire';
            verdictSub = 'For 1-3 employees, EOR is dramatically cheaper than subsidiary setup. Onboard in days, not months.';
            recommendedModel = 'EOR';
        } else if (employees < breakEvenN) {
            verdictClass = '';
            verdictHeadline = 'EOR still cheaper at ' + employees + ' employees';
            verdictSub = 'Switch to subsidiary at ~' + breakEvenN + ' employees. Until then, EOR saves on fixed compliance cost.';
            recommendedModel = 'EOR';
        } else if (employees < breakEvenN + 3) {
            verdictClass = 'amber';
            verdictHeadline = 'Crossover zone — Evaluate subsidiary at ' + employees + ' employees';
            verdictSub = 'You are at or near break-even. Run a 3-year TCO comparison — subsidiary brings setup cost upfront but saves long-term.';
            recommendedModel = 'EVALUATE';
        } else {
            verdictClass = 'blue';
            verdictHeadline = 'Subsidiary likely cheaper — ' + fmtINR(subPerEmp) + '/employee vs ' + fmtINR(eorPerEmp);
            verdictSub = 'At ' + employees + ' employees, the fixed costs of subsidiary are amortised efficiently. Plan a transition over 6-12 months.';
            recommendedModel = 'SUBSIDIARY';
        }

        // Alerts
        var alerts = [];

        if (basicPct < 50) {
            alerts.push({type: 'warn', html: '<strong>Non-compliant salary structure:</strong> Basic at ' + basicPct + '% violates the Wages Code 2019 50% rule effective 21 November 2025. Restructure to basic ≥50% of CTC. EOR providers will adjust automatically on onboarding, which may slightly reduce employee take-home but is mandatory.'});
        }
        if (gross <= 21000) {
            alerts.push({type: 'info', html: '<strong>ESI applicable:</strong> Gross of ' + fmtINR(gross) + ' is at or below the ₹21,000 ESI threshold. Employer ESI of 3.25% applies, plus statutory bonus eligibility under the Payment of Bonus Act with 8.33% minimum on basic up to ₹7,000.'});
        }
        if (basic > 15000) {
            alerts.push({type: 'info', html: '<strong>PF capped at statutory ceiling:</strong> Basic of ' + fmtINR(basic) + ' exceeds the ₹15,000 PF wage ceiling. Employer PF computed on capped ₹15,000 = ₹1,950 (12% + admin). For international workers or voluntary uncapped PF, the employer share would scale to full basic.'});
        }
        if (PT_RATE[stateCode] === 0) {
            alerts.push({type: 'info', html: '<strong>No professional tax in ' + STATE_LABEL[stateCode] + ':</strong> ' + STATE_LABEL[stateCode] + ' does not levy professional tax. Saves ₹2,400 per year per employee versus PT-imposing states.'});
        }
        if (state.tier === 'premium') {
            alerts.push({type: 'warn', html: '<strong>Premium tier — verify value:</strong> At ' + fmtINR(eorFee) + '/month, the premium tier costs 4-5× more than India-specialist providers for the same statutory compliance. Premium pricing is justified only if you need multi-country EOR (50+ employees globally) with dedicated account management.'});
        }
        if (gross > 200000 && state.tier === 'custom' && customPct > 8) {
            alerts.push({type: 'warn', html: '<strong>Percentage model expensive at this salary:</strong> At gross ' + fmtINR(gross) + ' and ' + customPct + '% custom fee = ' + fmtINR(eorFee) + '/month. Most flat-fee providers would be cheaper. Compare flat-fee tiers before committing to percentage model for senior hires.'});
        }
        if (employees >= breakEvenN) {
            alerts.push({type: 'info', html: '<strong>Subsidiary becomes cost-effective at ' + breakEvenN + ' employees:</strong> Beyond this count, the fixed costs of incorporation and recurring compliance are amortised efficiently. Plan a 6-12 month transition with overlap period to ensure compliance continuity.'});
        }
        if (gross >= 100000 && employees === 1) {
            alerts.push({type: 'info', html: '<strong>High-salary single hire:</strong> For a single senior hire at ' + fmtINR(gross) + '/month gross, EOR is overwhelmingly the right model. Subsidiary setup makes no economic sense for one employee. Add the second hire and reassess at 5-employee count.'});
        }

        // Render verdict
        $('verdict').className = 'verdict-card' + (verdictClass ? ' ' + verdictClass : '');
        $('verdict-headline').textContent = verdictHeadline;
        $('verdict-sub').textContent = verdictSub;
        $('v-monthly').textContent = fmtINR(totalMonthly);
        $('v-load').textContent = loadPct.toFixed(1) + '%';
        $('v-annual').textContent = fmtINR(totalAnnual);

        // Alerts
        var ah = '';
        for (var a = 0; a < alerts.length; a++) ah += '<div class="info-banner ' + alerts[a].type + '">' + alerts[a].html + '</div>';
        $('alerts').innerHTML = ah;

        // Breakdown
        $('b-gross').textContent = fmtINRfull(gross);
        $('b-stat-total').textContent = fmtINRfull(statutoryTotal);
        $('b-pf').textContent = fmtINRfull(pf);
        $('b-esi').textContent = fmtINRfull(esi);
        $('b-grat').textContent = fmtINRfull(gratuity);
        $('b-bonus').textContent = fmtINRfull(bonus);
        $('b-pt').textContent = fmtINRfull(pt);
        $('b-lwf').textContent = fmtINRfull(lwf);
        $('b-eor').textContent = fmtINRfull(eorFee + setupAmort);
        $('b-ins').textContent = fmtINRfull(insurance);
        $('b-total').textContent = fmtINRfull(totalMonthly);

        // Compare card
        $('c-eor').textContent = fmtINR(eorPerEmp) + '/mo';
        $('c-eor').className = 'compare-value' + (recommendedModel === 'EOR' ? ' best' : '');
        $('c-sub').textContent = fmtINR(subPerEmp) + '/mo';
        $('c-sub').className = 'compare-value' + (recommendedModel === 'SUBSIDIARY' ? ' best' : '');
        $('c-cont').textContent = fmtINR(contractorCost) + '/mo';
        $('c-cont').className = 'compare-value warn';
        $('c-be').textContent = breakEvenN + ' employees';

        // Summary
        $('s-stat').textContent = fmtINR(statutoryTotal) + '/mo';
        $('s-eor').textContent = fmtINR(eorFee) + '/mo';
        $('s-usd').textContent = fmtUSD(totalMonthly) + '/mo';
        $('s-pfbase').textContent = fmtINR(pfBase);
        $('s-bonus').textContent = fmtINR(bonus * 12);
        $('s-model').textContent = recommendedModel === 'EVALUATE' ? 'Evaluate Both' : recommendedModel;

        // Show
        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        $('gross').value = '200000';
        $('basic-pct').value = '50';
        $('basic-pct-val').textContent = '50%';
        $('state').value = 'MH';
        $('employees').value = '3';
        $('setup-fee').value = '0';
        $('custom-pct').value = '10';
        // Reset toggles
        document.querySelectorAll('.toggle-btn[data-tier]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-tier="india-spec"]').classList.add('active');
        state.tier = 'india-spec';
        $('custom-pct-group').style.display = 'none';
        document.querySelectorAll('.toggle-btn[data-ins]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-ins="self"]').classList.add('active');
        state.insurance = 'self';
        $('results').classList.remove('visible');
    }

    $('btn-calculate').addEventListener('click', compute);
    $('btn-reset').addEventListener('click', reset);
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
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
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
