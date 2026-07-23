@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Employee Total Cost Calculator India | True CTC</title>
    <meta name="description" content="Calculate the true total cost of an India employee, covering salary, PF, ESI, gratuity, benefits and overhead. Reveals 10-20% hidden loading above CTC. Free!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/india-employee-total-cost-calculator/">
    <meta property="og:title" content="India Employee Total Cost Calculator — Actual CTC 2026">
    <meta property="og:description" content="Decompose the offer letter. Computes statutory loading + benefits + overhead beyond headline CTC. Surfaces true employer cost. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/india-employee-total-cost-calculator">
    <meta property="og:image" content="/tools/og/india-employee-total-cost-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="India Employee Total Cost Calculator — Actual CTC 2026">
    <meta name="twitter:description" content="True total cost of hiring in India: salary + statutory + benefits + overhead. Free CA-built tool.">
    <meta name="twitter:image" content="/tools/og/india-employee-total-cost-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "India Employee Total Cost Calculator (Actual CTC)",
      "description": "India Employee Total Cost Calculator computes the actual all-in cost incurred by an Indian employer for one full-time employee, broken down across the cash component paid to the employee, statutory employer contributions remitted under Indian law, and indirect overhead absorbed by the employer including benefits, equipment, office space, learning and development, and administrative allocation. The tool incorporates the four Labour Codes effective from 21 November 2025 — the Code on Wages, 2019, the Industrial Relations Code, 2020, the Code on Social Security, 2020 and the Occupational Safety, Health and Working Conditions Code, 2020 — replacing twenty-nine pre-existing labour statutes. The tool reflects the unified definition of wages under Section 2(y) of the Code on Wages requiring that basic pay, dearness allowance and retaining allowance constitute at least fifty per cent of the total remuneration, with allowances exceeding fifty per cent of the total deemed to be wages for the purpose of statutory contribution computation. The tool computes Employees Provident Fund employer contribution at twelve per cent of wages on the statutory ceiling basis, Employees State Insurance employer contribution at three point two five per cent of gross wages where the gross wage is at or below twenty one thousand rupees per month, gratuity provision at four point eight one per cent of wages on the actuarial accrual basis under the Code on Social Security, statutory bonus at eight point three three per cent of wages under the Payment of Bonus Act, 1965 where applicable, professional tax at state-specific rates capped at two thousand five hundred rupees per annum under Article 276 of the Constitution of India, and Labour Welfare Fund contribution at state-specific annual rates. The tool computes employer-borne indirect costs including group health insurance premium across self-only, employee-plus-spouse and family floater coverage, equipment amortisation for laptops and peripherals over a thirty-six month useful life, allocated office space cost on a per-desk basis where applicable to the working mode, learning and development allocation, variable pay accrual, and administrative overhead representing the proportionate share of human resources, payroll and finance team cost attributable to one employee. The tool computes the loading percentage representing the gap between the headline CTC offered to the candidate and the true total cost incurred by the employer.",
      "url": "/tools/india-employee-total-cost-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "India Employee Total Cost Calculator", "item": "/tools/india-employee-total-cost-calculator"}
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
          "name": "What is the difference between CTC and total cost of employment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CTC or Cost to Company is the headline number stated in the offer letter, typically including basic, dearness allowance, HRA, special allowance, and employer PF contribution. Total cost of employment goes further — it adds gratuity provision, statutory bonus, professional tax, Labour Welfare Fund, group health insurance, equipment amortisation, office space cost, learning and development budget, and proportionate HR and admin overhead. The gap between headline CTC and total cost typically ranges from 8% to 25%."
          }
        },
        {
          "@type": "Question",
          "name": "What hidden costs are not in the offer letter CTC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most offer letters exclude: gratuity provision at 4.81% of basic, statutory bonus where applicable, professional tax and Labour Welfare Fund, group health insurance premium of ₹500 to ₹1,500 per month, equipment amortisation of ₹1,500 to ₹3,000 per month for laptops and peripherals, allocated office space cost of ₹10,000 to ₹30,000 per month for office-based roles, learning and development budget of ₹1,000 to ₹5,000 per month, and 3 to 8 per cent administrative overhead representing HR, payroll and finance team allocation."
          }
        },
        {
          "@type": "Question",
          "name": "Why must basic salary be at least 50% of CTC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Wages Code 2019 effective 21 November 2025 mandates that basic pay plus dearness allowance plus retaining allowance constitute at least 50% of total remuneration. Where excluded allowances such as HRA, conveyance and special allowance exceed 50% of total CTC, the excess is deemed to be wages for statutory purposes. This forces employers to restructure salary packages — earlier structures with 30-35% basic and 65-70% allowances are no longer compliant. The change raises PF and gratuity calculation bases substantially."
          }
        },
        {
          "@type": "Question",
          "name": "What statutory contributions does an Indian employer pay?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian employer statutory contributions include Provident Fund at 12% of wages with EDLI and admin charges, Employees State Insurance at 3.25% of gross wages where gross is ₹21,000 per month or below, gratuity provision at 4.81% of wages on actuarial accrual basis, statutory bonus at 8.33% to 20% of wages under the Payment of Bonus Act for eligible employees, professional tax at state-specific rates capped at ₹2,500 per year, and Labour Welfare Fund contribution at state-specific annual rates."
          }
        },
        {
          "@type": "Question",
          "name": "How much should I budget for office space per employee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Office space allocation per employee depends on city and Grade. For Grade A office space, expect ₹15,000 to ₹30,000 per desk per month in Mumbai, Bengaluru and Gurugram; ₹10,000 to ₹20,000 in Pune, Hyderabad and Chennai; ₹6,000 to ₹12,000 in tier-2 cities. Coworking memberships start at ₹8,000 per seat per month with full amenities. The cost includes rent, utilities, meeting rooms and pantry. For hybrid setups with 3 days office, allocate 60-70% of full-time desk cost."
          }
        },
        {
          "@type": "Question",
          "name": "What is the typical equipment cost per employee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Equipment cost per employee in 2026 typically ranges from ₹60,000 to ₹1,50,000 depending on role. A standard knowledge worker laptop costs ₹70,000 to ₹1,00,000 with Windows or macOS. Add ₹15,000 to ₹25,000 for monitor, keyboard, mouse and headphones. Mobile allowances run ₹20,000 to ₹40,000 per phone every 2-3 years. Total equipment is typically amortised over 36 months, yielding ₹1,500 to ₹3,500 per month per employee. Premium roles or designers may need ₹1,50,000 to ₹2,50,000 setups."
          }
        },
        {
          "@type": "Question",
          "name": "How do I calculate the loading percentage on CTC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Loading percentage equals total cost minus headline CTC divided by headline CTC, expressed as a percentage. For a ₹15 lakh CTC employee with full benefits, office space and admin overhead, loading typically ranges from 12% to 22%, making the true cost ₹17 to ₹18.3 lakh per year. Remote employees with minimal benefits load at 5-8%; senior office-based employees with premium insurance load at 18-25%; junior employees in tier-2 cities load at 8-12%."
          }
        },
        {
          "@type": "Question",
          "name": "Should variable pay be included in total cost computation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, variable pay should be included in total cost computation as a budgetary provision, not as discretionary spend. The Income Tax Act treats variable pay as part of salary for TDS under Section 192. For accounting, the expected variable component should be accrued monthly per Ind AS 19 or AS 15. For headcount budgeting, assume 100% achievement at target level — most companies plan and pay close to target. Build a 5-15% variable component into the total cost number."
          }
        },
        {
          "@type": "Question",
          "name": "What is the impact of work-from-home on total cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Full work-from-home reduces total cost by 12-18% versus office-based employment by eliminating allocated office space cost. However, employers should add internet allowance of ₹1,000 to ₹3,000 per month and electricity allowance for full-remote employees. Equipment cost stays the same or slightly higher (need to ship setup to home). Hybrid arrangements with 3 days office save 30-40% of full-office cost. The tax treatment of these allowances depends on whether they qualify as reimbursement under specific Income Tax exemptions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the take-home pay for a ₹15 LPA CTC employee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For a ₹15 lakh CTC employee under the new tax regime FY 2025-26, monthly take-home is approximately ₹95,000 to ₹1,05,000. The gross monthly is ₹1,25,000. Deductions include employer PF ₹1,800 (excluded from gross), employee PF ₹1,800, professional tax ₹200 (state-dependent), and TDS under Section 192 of approximately ₹15,000-₹20,000 per month based on annual tax of ₹1.8-₹2.4 lakh. Old regime take-home is similar after standard deductions and 80C investments."
          }
        },
        {
          "@type": "Question",
          "name": "How is gratuity calculated for accounting provision?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gratuity provision is accounted at 4.81% of monthly wages, derived from the formula: 15 days wages divided by 26 working days, then divided by 12 months. This is the actuarial accrual matching the gratuity entitlement under the Payment of Gratuity Act 1972, now subsumed under the Code on Social Security 2020. Companies must accrue this as an unfunded liability or fund it through approved gratuity trust. Under Ind AS 19, the valuation captures full Defined Benefit Obligation."
          }
        },
        {
          "@type": "Question",
          "name": "What HR and admin overhead should I allocate per employee?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HR and admin overhead allocation depends on company size. For startups under 20 employees, allocate 5-8% of total salary cost. For mid-size companies of 20-200 employees, 3-5% is typical. For larger companies above 200 employees, the allocation drops to 2-3%. The overhead covers HR team salary, payroll software, recruitment fees amortised, training infrastructure, employee engagement programmes, and POSH committee operations."
          }
        },
        {
          "@type": "Question",
          "name": "Are statutory bonus and ex-gratia bonus the same?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Statutory bonus is mandated under the Payment of Bonus Act 1965, applies to employees with monthly salary up to ₹21,000, in establishments with 20 or more employees, at minimum 8.33% to maximum 20% of salary capped at ₹7,000 per month for computation. Ex-gratia bonus is voluntary, applied to employees above the ₹21,000 threshold or in establishments not covered by the Act. For total cost computation, statutory bonus is mandatory budget; ex-gratia is discretionary but customary in organised sector firms."
          }
        },
        {
          "@type": "Question",
          "name": "Should I budget for notice period buyout reserve?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, prudent employers budget a notice period reserve equal to 1-3 months of total compensation. This reserve covers terminated employees serving notice, employees who buy out notice, and replacement hire onboarding overlap. The reserve typically equals 8-15% of annual cost, expensed monthly as accrual. For high-attrition roles or fixed-term employees with gratuity obligations, reserve at the higher end of the range."
          }
        },
        {
          "@type": "Question",
          "name": "How does the new wages definition affect TDS computation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Code on Wages 2019 unified wages definition does not directly change Income Tax Act salary definition under Section 17. TDS under Section 192 continues to be computed on taxable salary including basic, allowances, perquisites and profits in lieu of salary. However, the Wages Code's broader base for PF and gratuity creates a higher PF contribution that the employee can claim as deduction, and a higher gratuity provision that affects the employee's eventual tax-free gratuity ceiling under Section 10(10)."
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
        .calc-section-title.benefits { color: var(--success); }
        .calc-section-title.overhead { color: var(--primary-light); }

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
        .verdict-grid-value.warn { color: var(--accent); }
        .verdict-grid-value.danger { color: var(--danger); }

        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-card.success { background: #DCE8F5; border-color: var(--success); }
        .summary-card.success .summary-label { color: #065F46; }
        .summary-card.success .summary-value { color: var(--success); }
        .summary-card.danger { background: #FEE2E2; border-color: var(--danger); }
        .summary-card.danger .summary-label { color: #991B1B; }
        .summary-card.danger .summary-value { color: var(--danger); }
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
        .breakdown-row.indent { padding-left: 16px; font-size: 12px; }

        .visual-bar { background: var(--surface); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 18px; }
        .visual-bar h4 { font-size: 13px; color: var(--text-secondary); margin-bottom: 12px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .stack-bar { display: flex; height: 36px; border-radius: 8px; overflow: hidden; background: var(--surface-alt); margin-bottom: 12px; }
        .stack-seg { display: flex; align-items: center; justify-content: center; font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: #fff; min-width: 0; transition: width 0.5s; }
        .stack-seg.salary { background: var(--primary); }
        .stack-seg.statutory { background: var(--info); }
        .stack-seg.benefits { background: var(--success); }
        .stack-seg.overhead { background: var(--accent); color: var(--primary-dark); }
        .legend { display: flex; flex-wrap: wrap; gap: 14px; font-size: 12px; color: var(--text-secondary); }
        .legend-item { display: flex; align-items: center; gap: 6px; }
        .legend-dot { width: 12px; height: 12px; border-radius: 3px; flex-shrink: 0; }
        .legend-dot.salary { background: var(--primary); }
        .legend-dot.statutory { background: var(--info); }
        .legend-dot.benefits { background: var(--success); }
        .legend-dot.overhead { background: var(--accent); }

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

        .formula-box { background: var(--primary-dark); color: #fff; border-radius: var(--radius); padding: 20px 24px; margin: 16px 0; font-family: var(--font-mono); font-size: 14px; line-height: 1.8; overflow-x: auto; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }

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
    
/* Fix: align ragged reference lists — fixed term column + description column */
section .content-text ul li:not(.nav-item){align-items:flex-start;}
section .content-text ul li:not(.nav-item) > strong:first-child{
  flex:0 0 300px;max-width:300px;display:inline-block;
}
@media (max-width:768px){
  section .content-text ul li:not(.nav-item){flex-wrap:wrap;}
  section .content-text ul li:not(.nav-item) > strong:first-child{flex:1 1 100%;max-width:100%;margin-bottom:2px;}
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
        <a href="#ctc-vs-tcoe">CTC vs True Cost</a>
        <a href="#statutory">Statutory Breakdown</a>
        <a href="#benefits">Benefits Cost</a>
        <a href="#overhead">Overhead Allocation</a>
        <a href="#take-home">Take-Home Estimate</a>
        <a href="#scenarios">Scenarios</a>
        <a href="#offer-letter">Offer Letter Hygiene</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    India Employee Total Cost Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>India Employee Total Cost Calculator — <span>Actual CTC vs Headline CTC</span> (FY 2025-26)</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20India%20Employee%20Total%20Cost%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Employee%20Total%20Cost%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20India%20Employee%20Total%20Cost%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This tool computes the <strong>true total cost of an India employee</strong> — what your business actually pays beyond the offer letter CTC. The headline CTC quoted to candidates typically excludes gratuity provision, statutory bonus, professional tax, group health insurance, equipment amortisation, allocated office space, learning &amp; development budget, and HR/admin overhead. The gap — the <strong>loading percentage</strong> — typically runs 8% (junior remote) to 25% (senior office-based with full benefits). For a ₹15 LPA employee, true cost is usually ₹17-18.3 LPA. Updated for the four <strong>Labour Codes effective 21 November 2025</strong> with the 50% basic-pay rule. Pair with our <a href="/tools/india-eor-cost-calculator">India EOR Cost Calculator</a> if you don't have an Indian entity.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>India Employee Total Cost Calculator</h2>
            <p class="calc-intro">Enter the employee's offer-letter CTC, salary structure, location and benefits package. The calculator returns the actual annual and monthly cost incurred by your business, the loading percentage above headline CTC, the breakdown across salary, statutory contributions, benefits and overhead, and a take-home estimate the employee will receive.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calculator.</div></noscript>

            <div class="calc-section-title">Salary Structure</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ctc">Annual CTC Offered (₹)</label>
                    <input type="text" id="ctc" value="1500000" min="0" step="10000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Headline CTC stated in offer letter (fixed component, excluding variable).</span>
                </div>
                <div class="form-group">
                    <label for="basic-pct">Basic % of CTC <span style="font-family: var(--font-mono); color: var(--primary); float: right;" id="basic-pct-val">50%</span></label>
                    <input type="range" id="basic-pct" min="40" max="60" value="50" step="5">
                    <div class="range-meta"><span>40% (legacy)</span><span>50% (Code-compliant)</span><span>60%</span></div>
                    <span class="helper">Wages Code 2019 mandates basic ≥50%. Drives PF + gratuity base.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="variable-pct">Variable Pay % (over fixed CTC)</label>
                    <input type="text" id="variable-pct" value="10" min="0" max="50" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Performance-linked bonus on top of fixed CTC. 0 if pure fixed.</span>
                </div>
                <div class="form-group">
                    <label for="state">State of Work</label>
                    <select id="state">
                        <option value="MH" selected>Maharashtra</option>
                        <option value="KA">Karnataka</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="DL">Delhi NCR</option>
                        <option value="HR">Haryana</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="WB">West Bengal</option>
                        <option value="GJ">Gujarat</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="OR">Odisha</option>
                        <option value="MP">Madhya Pradesh</option>
                    </select>
                    <span class="helper">Drives PT and LWF rates plus office space band.</span>
                </div>
            </div>

            <div class="calc-section-title benefits">Work Mode &amp; Benefits</div>

            <div class="form-group" style="margin-bottom: 14px;">
                <label>Working Mode</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-mode="remote">Full Remote</button>
                    <button type="button" class="toggle-btn active" data-mode="hybrid">Hybrid (3 days)</button>
                    <button type="button" class="toggle-btn" data-mode="office">Full Office</button>
                </div>
                <span class="helper">Drives office space allocation. Remote saves desk cost but adds internet allowance.</span>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="desk-cost">Office Cost / Desk (₹/month)</label>
                    <input type="text" id="desk-cost" value="15000" min="0" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Mumbai/BLR/Gurugram: ₹15K-30K. Tier-2 cities: ₹6K-12K. Coworking from ₹8K.</span>
                </div>
                <div class="form-group">
                    <label>Group Health Insurance</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn" data-ins="none">None</button>
                        <button type="button" class="toggle-btn active" data-ins="self">Self</button>
                        <button type="button" class="toggle-btn" data-ins="plus-one">+ Spouse</button>
                        <button type="button" class="toggle-btn" data-ins="family">Family</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="equipment">Equipment Cost (₹, one-time)</label>
                    <input type="text" id="equipment" value="80000" min="0" step="5000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Laptop + monitor + peripherals. Amortised over 36 months.</span>
                </div>
                <div class="form-group">
                    <label for="ld-budget">L&amp;D Budget (₹/year)</label>
                    <input type="text" id="ld-budget" value="20000" min="0" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Training, courses, certifications. Typical ₹15K-50K/year.</span>
                </div>
            </div>

            <div class="calc-section-title overhead">Admin Overhead</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="admin-pct">HR/Payroll/Admin Allocation (%)</label>
                    <input type="text" id="admin-pct" value="5" min="0" max="15" step="0.5" inputmode="decimal" autocomplete="off">
                    <span class="helper">Of fixed salary. Startups (≤20 emp): 5-8%. Mid (20-200): 3-5%. Large: 2-3%.</span>
                </div>
                <div class="form-group">
                    <label for="notice-months">Notice Period Reserve (months)</label>
                    <input type="text" id="notice-months" value="1" min="0" max="3" step="0.5" inputmode="decimal" autocomplete="off">
                    <span class="helper">Provision for buy-out + replacement overlap. Typical 1-2 months/year.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Compute Total Cost</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset to Default</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">True Cost Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Annual True Cost</div>
                            <div class="verdict-grid-value" id="v-annual">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Loading %</div>
                            <div class="verdict-grid-value" id="v-load">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Cost / Headline CTC</div>
                            <div class="verdict-grid-value" id="v-ratio">—</div>
                        </div>
                    </div>
                </div>

                <div id="alerts"></div>

                <div class="visual-bar">
                    <h4>Where Your Money Goes (Monthly)</h4>
                    <div class="stack-bar" id="stack-bar"></div>
                    <div class="legend">
                        <div class="legend-item"><span class="legend-dot salary"></span>Salary to Employee</div>
                        <div class="legend-item"><span class="legend-dot statutory"></span>Statutory Contributions</div>
                        <div class="legend-item"><span class="legend-dot benefits"></span>Benefits &amp; Equipment</div>
                        <div class="legend-item"><span class="legend-dot overhead"></span>Office &amp; Admin Overhead</div>
                    </div>
                </div>

                <div class="breakdown-card">
                    <h4>True Cost Breakdown (Monthly)</h4>
                    <div class="breakdown-row"><span>Cash Salary (gross to employee)</span><span id="b-gross">—</span></div>
                    <div class="breakdown-row subtotal"><span>+ Statutory Employer Cost</span><span id="b-stat-total">—</span></div>
                    <div class="breakdown-row indent"><span>· Provident Fund (12%)</span><span id="b-pf">—</span></div>
                    <div class="breakdown-row indent"><span>· ESI (3.25% if eligible)</span><span id="b-esi">—</span></div>
                    <div class="breakdown-row indent"><span>· Gratuity (4.81%)</span><span id="b-grat">—</span></div>
                    <div class="breakdown-row indent"><span>· Statutory Bonus</span><span id="b-bonus">—</span></div>
                    <div class="breakdown-row indent"><span>· Professional Tax + LWF</span><span id="b-pt">—</span></div>
                    <div class="breakdown-row subtotal"><span>+ Benefits</span><span id="b-ben-total">—</span></div>
                    <div class="breakdown-row indent"><span>· Group Health Insurance</span><span id="b-ins">—</span></div>
                    <div class="breakdown-row indent"><span>· Equipment Amortisation</span><span id="b-eq">—</span></div>
                    <div class="breakdown-row indent"><span>· L&amp;D Allocation</span><span id="b-ld">—</span></div>
                    <div class="breakdown-row subtotal"><span>+ Overhead &amp; Reserves</span><span id="b-oh-total">—</span></div>
                    <div class="breakdown-row indent"><span>· Office / Desk Cost</span><span id="b-desk">—</span></div>
                    <div class="breakdown-row indent"><span>· HR / Admin (% of salary)</span><span id="b-admin">—</span></div>
                    <div class="breakdown-row indent"><span>· Variable Pay Provision</span><span id="b-var">—</span></div>
                    <div class="breakdown-row indent"><span>· Notice Period Reserve</span><span id="b-notice">—</span></div>
                    <div class="breakdown-row total"><span>= Total True Cost</span><span id="b-total">—</span></div>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Headline CTC</div>
                        <div class="summary-value" id="s-ctc">—</div>
                    </div>
                    <div class="summary-card danger">
                        <div class="summary-label">Loading Above CTC</div>
                        <div class="summary-value" id="s-loading">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Annual True Cost</div>
                        <div class="summary-value" id="s-true">—</div>
                    </div>
                    <div class="summary-card success">
                        <div class="summary-label">Estimated Take-Home/mo</div>
                        <div class="summary-value" id="s-takehome">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Statutory % of Cost</div>
                        <div class="summary-value" id="s-stat-pct">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Per Day True Cost</div>
                        <div class="summary-value" id="s-perday">—</div>
                    </div>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — India Employee Total Cost Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20India%20Employee%20Total%20Cost%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Employee%20Total%20Cost%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20India%20Employee%20Total%20Cost%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How the Calculator Works</h2>
            <p>The calculator decomposes employer cost into four buckets. Each bucket is grounded in the four <a href="https://www.pib.gov.in/PressReleseDetailm.aspx?PRID=2192463&reg=3&lang=2" rel="noopener" target="_blank">Labour Codes</a> effective from 21 November 2025 plus standard accounting practice for compensation accruals under Ind AS 19.</p>
            <h3>Bucket 1: Cash Salary to Employee</h3>
            <p>The fixed monthly amount paid to the employee — basic, dearness allowance, house rent allowance, special allowance, conveyance allowance and any food allowance. This is roughly the offer-letter CTC divided by 12. The employee receives this less their own deductions (employee PF 12%, professional tax, income tax under Section 192).</p>
            <h3>Bucket 2: Statutory Employer Contributions</h3>
            <p>Mandatory contributions on top of cash salary. Six components: Provident Fund employer share (12% of wages); Employees State Insurance (3.25% if applicable); gratuity provision (4.81% of wages); statutory bonus (8.33%-20% if eligible); professional tax (state-specific); Labour Welfare Fund (state-specific). These are remitted to government accounts and don't reach the employee's bank but are part of total compensation cost.</p>
            <h3>Bucket 3: Benefits &amp; Equipment</h3>
            <p>Indirect employer-borne costs that benefit the employee. Group health insurance premium (₹5K-15K per year per employee depending on coverage); equipment amortisation (₹60K-1.5L laptop divided by 36 months); learning and development budget (₹15K-50K per year); life insurance and accident cover (₹2K-5K per year); meal vouchers, internet allowance and similar perks where provided.</p>
            <h3>Bucket 4: Overhead &amp; Reserves</h3>
            <p>Allocated organisational cost not directly visible to the employee. Office space cost per desk (₹6K-30K per month based on city and grade); HR, payroll and finance team allocation (3-8% of salary); variable pay accrual (5-20% of fixed); notice period reserve (1-3 months annual provision); recruitment fees amortised; engagement programme costs. These exist whether one specific employee is hired or not, but allocate proportionately for total cost computation.</p>
        </section>


        <section class="content-section" id="ctc-vs-tcoe">
            <h2>CTC vs Total Cost of Employment — The Hidden 10-25%</h2>
            <p>Indian offer letters typically state a single number — Cost to Company — that has become a quasi-standard in the labour market. The term "CTC" has evolved to represent different things at different companies, ranging from "fixed pay only" to "fixed + variable + employer PF + insurance estimate". The Total Cost of Employment goes further and captures every rupee the employer spends per employee.</p>
            <h3>What's Typically in CTC</h3>
            <ul>
                <li>Basic pay + dearness allowance</li>
                <li>House rent allowance (40-50% of basic in metro)</li>
                <li>Special allowance (residual after other heads)</li>
                <li>Conveyance / transport allowance</li>
                <li>Employer PF contribution (₹1,800 to ₹21,600 per year)</li>
                <li>Sometimes: gratuity provision, group health insurance value</li>
            </ul>
            <h3>What's Often Missing from CTC</h3>
            <ul>
                <li><strong>Gratuity provision</strong> at 4.81% of basic — often missed for short-tenure employees</li>
                <li><strong>Statutory bonus</strong> for eligible employees</li>
                <li><strong>Professional tax</strong> and Labour Welfare Fund — small but accumulate</li>
                <li><strong>Allocated office space</strong> — biggest hidden line for office-based roles</li>
                <li><strong>Equipment amortisation</strong> — laptop, monitor, chair, keyboard</li>
                <li><strong>L&amp;D budget</strong> — training, conferences, certifications</li>
                <li><strong>Variable pay accrual</strong> — 5-20% of fixed at target</li>
                <li><strong>HR / admin allocation</strong> — pro-rata of HR salary, payroll software, recruitment fees</li>
                <li><strong>Notice period reserve</strong> — provision for transition between employees</li>
            </ul>
            <h3>The Loading Curve by Role and Setup</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Profile</th><th>Headline CTC</th><th>True Cost</th><th>Loading %</th></tr>
                </thead>
                <tbody>
                    <tr><td>Junior, full-remote, no insurance</td><td>₹6,00,000</td><td>₹6,40,000</td><td>~7%</td></tr>
                    <tr><td>Mid-level, hybrid, self insurance</td><td>₹15,00,000</td><td>₹17,40,000</td><td>~16%</td></tr>
                    <tr><td>Mid-level, full office, family insurance</td><td>₹15,00,000</td><td>₹18,90,000</td><td>~26%</td></tr>
                    <tr><td>Senior, hybrid, family insurance, equity</td><td>₹35,00,000</td><td>₹40,50,000</td><td>~16%</td></tr>
                    <tr><td>Senior, full office, premium benefits</td><td>₹50,00,000</td><td>₹61,00,000</td><td>~22%</td></tr>
                </tbody>
            </table>
            <p>The pattern is clear: office-based roles load the heaviest because of desk costs (₹15K-30K per month per employee in Tier-1 cities). Remote roles load the lightest. Insurance scope matters — family floater triples the insurance cost versus self-only. For founders budgeting hires, the safe rule is to multiply headline CTC by <strong>1.18 to 1.22</strong> for office-based roles and <strong>1.07 to 1.12</strong> for remote roles.</p>
        </section>

        <div class="body-cta">
            <h3>Need a Compensation Audit?</h3>
            <p>Patron Accounting performs salary structure audits, total cost benchmarking against industry, and Wages Code 2019 compliance review for FY 2025-26. Identify cost leakage and structuring inefficiencies in your existing workforce.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20Employee%20Total%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Employee%20Total%20Cost%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20Employee%20Total%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="statutory">
            <h2>Statutory Employer Contributions — Detailed Breakdown</h2>
            <p>Six statutory cost components apply under Indian labour and social security laws. Each has its own threshold, base and remittance schedule. The total statutory loading on basic salary typically runs 15-18% for employees within ESI/bonus thresholds and 13-14% for employees above.</p>
            <h3>Provident Fund (EPF)</h3>
            <p>Governed by the Employees Provident Funds and Miscellaneous Provisions Act 1952, now under the Code on Social Security 2020. Employee and employer each contribute 12% of "wages". Employer 12% splits as 8.33% to Employees Pension Scheme (capped at ₹15,000 wage = ₹1,250/month maximum), 3.67% to EPF, plus 0.5% Employees Deposit Linked Insurance (max ₹75/month) and 0.5% admin charges. Effective employer burden is approximately 13% of the wage base. Visit <a href="https://www.epfindia.gov.in/" rel="noopener" target="_blank">EPFO India</a> for current contribution schedules.</p>
            <h3>Employees State Insurance (ESI)</h3>
            <p>Applies to employees with gross monthly wage of ₹21,000 or below. Employer contributes 3.25% of gross; employee 0.75%. Provides medical, disability, maternity and dependent benefits via the <a href="https://www.esic.gov.in/" rel="noopener" target="_blank">ESIC portal</a>. For most knowledge-economy roles with gross above ₹21,000, ESI does not apply. The Code on Social Security retains the threshold pending finalisation.</p>
            <h3>Gratuity</h3>
            <p>Lump-sum benefit on termination, retirement or death after five years (one year for fixed-term employees under the new Code). Computed as last drawn wages × 15 ÷ 26 × completed years. Statutory ceiling ₹20 lakh. Companies provision 4.81% of monthly wages as accrual. Under Ind AS 19, actuarial valuation captures full Defined Benefit Obligation. The Code on Social Security broader wage definition has raised this provisioning base by 25-50%.</p>
            <h3>Statutory Bonus</h3>
            <p>Under the <a href="https://labour.gov.in/sites/default/files/payment_of_bonus_act_1965.pdf" rel="noopener" target="_blank">Payment of Bonus Act 1965</a>, applies to establishments with 20+ employees. Eligibility: salary ≤ ₹21,000 per month. Minimum 8.33% of basic, maximum 20%. Computed annually within 8 months of FY end. For senior employees above ₹21,000, statutory bonus does not apply but most companies still provide ex-gratia or performance bonus.</p>
            <h3>Professional Tax &amp; LWF</h3>
            <p>Professional tax is a state-level levy under Article 276, capped at ₹2,500/year. Applicable in Maharashtra, Karnataka, Tamil Nadu, Telangana, West Bengal, Gujarat, Andhra Pradesh, Odisha and Madhya Pradesh — not in Delhi, Haryana, Punjab or Uttar Pradesh. Labour Welfare Fund is a state-administered fund — Maharashtra ₹36/year, Karnataka ₹40/year, Tamil Nadu ₹20/year. Combined PT + LWF is typically ₹2,400-₹2,500/year per employee.</p>
        </section>

        <section class="content-section" id="benefits">
            <h2>Benefits &amp; Equipment — The Visible Indirect Costs</h2>
            <p>Beyond statutory contributions, employer-borne benefits add another 3-8% to total cost. These are the line items that are visible to the employee but often escape rigorous budgeting at hiring time.</p>
            <h3>Group Health Insurance</h3>
            <p>India's group mediclaim market in 2026 has standard premium bands. Self-only coverage of ₹5 lakh sum insured costs ₹4,500-₹6,000 per year. Employee + spouse at ₹5 lakh costs ₹7,000-₹9,000. Family floater of ₹5 lakh covering employee + spouse + 2 children costs ₹13,000-₹17,000. Premium upgrades (₹10 lakh / ₹25 lakh sum insured, critical illness rider, OPD coverage) add 30-80% to the base premium. The total cost calculator uses ₹5K / ₹8K / ₹15K as standard benchmarks.</p>
            <h3>Equipment</h3>
            <p>Standard knowledge-worker setup: laptop ₹70,000-₹1,00,000 (Windows or macOS), monitor ₹15,000-₹25,000, peripherals ₹5,000-₹10,000, total ₹90,000-₹1,35,000. Premium setups for designers, developers and creative roles run ₹1,50,000-₹2,50,000. Equipment is amortised over 36 months for accounting, yielding ₹2,500-₹7,000 monthly per employee. Mobile allowance, internet reimbursement and conferencing tools add another ₹1,000-₹3,000 monthly.</p>
            <h3>Learning &amp; Development</h3>
            <p>L&amp;D budget per employee per year typically ranges from ₹15,000 (basic skill upgrades, free courses, internal training) to ₹50,000 (external certifications, conferences, paid bootcamps) to ₹2,00,000+ (executive education, MBA sponsorship). The mid-band average for mid-level knowledge workers is ₹20,000-₹40,000. This translates to ₹1,500-₹3,500 monthly per employee. Companies with formal L&amp;D programmes track utilisation rates of 60-80%; others see this budget unspent.</p>
        </section>

        <section class="content-section" id="overhead">
            <h2>Overhead Allocation — The Invisible Layer</h2>
            <p>The overhead bucket captures the proportionate share of organisational fixed costs allocated to each employee. These costs exist regardless of whether one specific employee is hired, but get included in total cost computation for accurate budgeting.</p>
            <h3>Office Space Allocation</h3>
            <p>The single biggest overhead item for office-based and hybrid roles. Per-desk monthly cost varies by city: Mumbai BKC / Bandra-Worli ₹25,000-₹35,000; Bengaluru Whitefield / Outer Ring Road ₹15,000-₹25,000; Pune Hinjewadi / Kharadi ₹10,000-₹18,000; Delhi NCR ₹15,000-₹28,000; Chennai OMR ₹10,000-₹18,000; Hyderabad HITEC City ₹12,000-₹22,000. Coworking spaces (WeWork, Awfis) start at ₹8,000 per dedicated seat including utilities, internet, printer access and meeting rooms.</p>
            <p>For hybrid setups (3 days office, 2 days remote), allocate 60-70% of full-time desk cost. For full remote, allocate zero desk cost but add ₹1,500-₹3,000 internet/utility allowance per month.</p>
            <h3>HR, Payroll &amp; Finance Allocation</h3>
            <p>HR team salaries, payroll software (typically ₹50-₹150 per employee per month for tools like Keka, GreytHR or Zoho Payroll), recruitment fees amortised over expected tenure, employee engagement programmes (annual offsites, festival celebrations, gifts), POSH committee operations, and compliance audits. As a percentage of salary, this allocation typically scales: startups under 20 employees absorb 5-8%, mid-size companies 3-5%, larger firms 2-3%.</p>
            <h3>Variable Pay Accrual</h3>
            <p>Performance-linked variable pay should be budgeted as expected accrual rather than treated as discretionary. Most companies pay close to target — assume 100% achievement at the target percentage in budgeting. For mid-level roles, target variable typically runs 10-15% of fixed CTC; senior management 20-30%; sales roles 30-50%. Accrue monthly per Ind AS 19 / AS 15 requirements. Under-budgeting variable creates year-end surprises and triggers retention risk.</p>
            <h3>Notice Period Reserve</h3>
            <p>For high-attrition industries (IT services, BFSI, consulting), reserve 1-2 months of total compensation per year as transition cost. The reserve covers: paid notice period without productive output, replacement hire onboarding overlap (typically 30 days), recruitment fees for backfilling, and induction training. For low-attrition roles or strategic hires, reserve 0-1 month is sufficient. The calculator allows custom input.</p>
        </section>

        <section class="content-section" id="take-home">
            <h2>Take-Home Pay Estimation</h2>
            <p>While the focus of this calculator is the employer's cost, candidates and employees primarily care about take-home pay. The take-home estimation in the summary card uses the new tax regime applicable for FY 2025-26 with standard deduction of ₹75,000 and revised slabs.</p>
            <h3>New Tax Regime Slabs FY 2025-26</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Income Range</th><th>Tax Rate</th></tr>
                </thead>
                <tbody>
                    <tr><td>Up to ₹3,00,000</td><td>Nil</td></tr>
                    <tr><td>₹3,00,001 to ₹7,00,000</td><td>5%</td></tr>
                    <tr><td>₹7,00,001 to ₹10,00,000</td><td>10%</td></tr>
                    <tr><td>₹10,00,001 to ₹12,00,000</td><td>15%</td></tr>
                    <tr><td>₹12,00,001 to ₹15,00,000</td><td>20%</td></tr>
                    <tr><td>Above ₹15,00,000</td><td>30%</td></tr>
                </tbody>
            </table>
            <p>Refer to <a href="https://www.incometax.gov.in/iec/foportal/" rel="noopener" target="_blank">incometax.gov.in</a> for the latest slabs and notifications.</p>
            <h3>Computing Take-Home</h3>
            <div class="formula-box">
                <span class="label">TAKE-HOME =</span><br>
                Gross Monthly Salary<br>
                <span class="label">−</span> Employee PF (12% × min(basic, ₹15,000))<br>
                <span class="label">−</span> Professional Tax (state-specific)<br>
                <span class="label">−</span> TDS u/s 192 (annual tax ÷ 12)<br>
                <span class="label">−</span> Employee ESI (0.75% if applicable)
            </div>
            <p>For a ₹15 LPA CTC employee under the new regime, monthly take-home is approximately ₹95,000-₹1,05,000 against gross of ₹1,25,000. The gap of ₹20,000-₹30,000 goes to employee PF (₹1,800), professional tax (₹200), and income tax TDS (₹15,000-₹25,000 depending on the exact CTC structure and HRA exemption claims).</p>
            <div class="callout">
                <p><strong>Old vs New Regime Decision:</strong> For most salaried employees with limited tax-saving investments (under ₹2 lakh of 80C + 80D + HRA exemption combined), the new regime yields lower tax liability. Old regime makes sense for employees with home loan interest, large 80C investments, HRA exemption claims and other deductions exceeding ₹3-4 lakh annually. The take-home shown in the summary uses the new regime as default.</p>
            </div>
        </section>

        <section class="content-section" id="scenarios">
            <h2>Worked Scenarios — Three Common Profiles</h2>
            <h3>Scenario A: Junior Remote Engineer (₹8 LPA)</h3>
            <p><strong>Setup:</strong> Bengaluru-based but full-remote, ₹8 lakh fixed CTC, 50% basic, 5% variable, self-only insurance, ₹70K laptop, no office desk, 8% HR/admin overhead (early-stage startup), 1 month notice reserve.</p>
            <ul>
                <li>Gross monthly salary: ₹66,667</li>
                <li>Statutory monthly: PF ₹1,950 + gratuity ₹1,604 + PT ₹200 + LWF ₹3 = <strong>₹3,757</strong></li>
                <li>Benefits monthly: insurance ₹417 + equipment ₹1,944 + L&amp;D ₹1,667 = <strong>₹4,028</strong></li>
                <li>Overhead monthly: 0 desk + 8% admin ₹5,333 + 5% variable ₹3,333 + notice ₹6,667 = <strong>₹15,333</strong></li>
                <li>Total monthly: ₹89,786 — Annual: <strong>₹10,77,431</strong> — Loading: <strong>34.7%</strong></li>
            </ul>
            <p>Notice the high loading despite remote setup — driven by aggressive notice reserve and admin overhead in early-stage company.</p>
            <h3>Scenario B: Mid-Level Hybrid Manager (₹18 LPA)</h3>
            <p><strong>Setup:</strong> Mumbai-based hybrid (3 days office), ₹18 lakh fixed CTC, 50% basic, 12% variable, family insurance, ₹1,00,000 laptop, ₹15,000/month office cost (60% allocated for hybrid = ₹9,000), 4% admin overhead (mid-size co), 1 month notice reserve.</p>
            <ul>
                <li>Gross monthly salary: ₹1,50,000</li>
                <li>Statutory monthly: PF ₹1,950 + gratuity ₹3,608 + PT ₹200 + LWF ₹3 = <strong>₹5,761</strong></li>
                <li>Benefits monthly: insurance ₹1,250 + equipment ₹2,778 + L&amp;D ₹2,500 = <strong>₹6,528</strong></li>
                <li>Overhead monthly: desk ₹9,000 + 4% admin ₹6,000 + 12% variable ₹18,000 + notice ₹15,000 = <strong>₹48,000</strong></li>
                <li>Total monthly: ₹2,10,289 — Annual: <strong>₹25,23,468</strong> — Loading: <strong>40.2%</strong></li>
            </ul>
            <p>The variable pay provision (12%) and notice reserve dominate. If variable were excluded as discretionary, loading drops to ~28%.</p>
            <h3>Scenario C: Senior Office-Based Director (₹50 LPA)</h3>
            <p><strong>Setup:</strong> Bengaluru full-office, ₹50 lakh fixed CTC, 50% basic, 25% variable target, family insurance with critical illness, ₹2,00,000 setup, ₹25,000 office cost full-time, 3% admin overhead (large co), 2 months notice reserve.</p>
            <ul>
                <li>Gross monthly salary: ₹4,16,667</li>
                <li>Statutory monthly: PF ₹1,950 (capped) + gratuity ₹10,021 + PT ₹200 + LWF ₹3 = <strong>₹12,174</strong></li>
                <li>Benefits monthly: insurance ₹1,500 (premium) + equipment ₹5,556 + L&amp;D ₹4,167 = <strong>₹11,222</strong></li>
                <li>Overhead monthly: desk ₹25,000 + 3% admin ₹12,500 + 25% variable ₹1,04,167 + notice ₹83,333 = <strong>₹2,25,000</strong></li>
                <li>Total monthly: ₹6,65,063 — Annual: <strong>₹79,80,758</strong> — Loading: <strong>59.6%</strong></li>
            </ul>
            <p>Director-level loading is dominated by variable (25% target) and notice reserve (2 months). Without variable provisioning, loading drops to ~35%.</p>
        </section>

        <section class="content-section" id="offer-letter">
            <h2>Offer Letter Hygiene — Closing the CTC Mismatch</h2>
            <p>The expectation gap between offer letter CTC and total employer cost creates two real problems: budget miscalculations at the company level (under-provisioning headcount cost in financial models), and candidate disappointment when actual take-home is lower than the headline number suggests. Both can be substantially mitigated with better offer letter hygiene.</p>
            <h3>Best Practice: Multi-Component Disclosure</h3>
            <ul>
                <li><strong>Section A — Cash CTC</strong>: Basic + DA + HRA + special allowance + conveyance + any food/medical allowance. This is what the candidate evaluates.</li>
                <li><strong>Section B — Statutory employer contributions</strong>: Employer PF, gratuity provision, statutory bonus where applicable. Disclosed but not part of cash CTC.</li>
                <li><strong>Section C — Indirect benefits</strong>: Group health insurance, equipment, L&amp;D, allocated office. Disclosed for total package transparency.</li>
                <li><strong>Section D — Variable pay structure</strong>: Target percentage, performance metrics, payout schedule, claw-back terms.</li>
                <li><strong>Section E — Take-home estimate</strong>: Approximate monthly bank credit amount under both old and new tax regimes.</li>
            </ul>
            <h3>Compliance Anchor: Wages Code 2019</h3>
            <p>The new wages definition under Section 2(y) of the Wages Code, effective 21 November 2025, requires basic + DA + retaining allowance to be at least 50% of total remuneration. Offer letters with basic at 30-40% of CTC are non-compliant. Restructure to 50% at the offer stage to avoid mid-year salary recalibration. Visit the <a href="https://labour.gov.in/" rel="noopener" target="_blank">Ministry of Labour</a> for rules.</p>
            <h3>Cap Table Implications for Startups</h3>
            <p>For startup founders modelling burn rate, multiplying headcount by headline CTC alone systematically understates monthly burn by 8-15%. Use the loading-adjusted true cost in cash flow projections. A team of 15 mid-level engineers at ₹15 LPA each is not ₹2.25 crore annual — it's closer to ₹2.6-₹2.7 crore once full loading is captured. Investor decks should reflect this reality.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the difference between CTC and total cost of employment?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CTC or Cost to Company is the headline number stated in the offer letter, typically including basic, dearness allowance, HRA, special allowance, and employer PF contribution. Total cost of employment goes further — it adds gratuity provision, statutory bonus, professional tax, Labour Welfare Fund, group health insurance, equipment amortisation, office space cost, learning and development budget, and proportionate HR and admin overhead. The gap between headline CTC and total cost typically ranges from 8% to 25%.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What hidden costs are not in the offer letter CTC?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Most offer letters exclude: gratuity provision at 4.81% of basic, statutory bonus where applicable, professional tax and Labour Welfare Fund, group health insurance premium of ₹500 to ₹1,500 per month, equipment amortisation of ₹1,500 to ₹3,000 per month for laptops and peripherals, allocated office space cost of ₹10,000 to ₹30,000 per month for office-based roles, learning and development budget of ₹1,000 to ₹5,000 per month, and 3 to 8 per cent administrative overhead representing HR, payroll and finance team allocation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Why must basic salary be at least 50% of CTC?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Wages Code 2019 effective 21 November 2025 mandates that basic pay plus dearness allowance plus retaining allowance constitute at least 50% of total remuneration. Where excluded allowances such as HRA, conveyance and special allowance exceed 50% of total CTC, the excess is deemed to be wages for statutory purposes. This forces employers to restructure salary packages — earlier structures with 30-35% basic and 65-70% allowances are no longer compliant. The change raises PF and gratuity calculation bases substantially.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What statutory contributions does an Indian employer pay?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Indian employer statutory contributions include Provident Fund at 12% of wages with EDLI and admin charges, Employees State Insurance at 3.25% of gross wages where gross is ₹21,000 per month or below, gratuity provision at 4.81% of wages on actuarial accrual basis, statutory bonus at 8.33% to 20% of wages under the Payment of Bonus Act for eligible employees, professional tax at state-specific rates capped at ₹2,500 per year, and Labour Welfare Fund contribution at state-specific annual rates.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How much should I budget for office space per employee?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Office space allocation per employee depends on city and Grade. For Grade A office space, expect ₹15,000 to ₹30,000 per desk per month in Mumbai, Bengaluru and Gurugram; ₹10,000 to ₹20,000 in Pune, Hyderabad and Chennai; ₹6,000 to ₹12,000 in tier-2 cities. Coworking memberships start at ₹8,000 per seat per month with full amenities. The cost includes rent, utilities, meeting rooms and pantry. For hybrid setups with 3 days office, allocate 60-70% of full-time desk cost.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the typical equipment cost per employee?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Equipment cost per employee in 2026 typically ranges from ₹60,000 to ₹1,50,000 depending on role. A standard knowledge worker laptop costs ₹70,000 to ₹1,00,000 with Windows or macOS. Add ₹15,000 to ₹25,000 for monitor, keyboard, mouse and headphones. Mobile allowances run ₹20,000 to ₹40,000 per phone every 2-3 years. Total equipment is typically amortised over 36 months, yielding ₹1,500 to ₹3,500 per month per employee. Premium roles or designers may need ₹1,50,000 to ₹2,50,000 setups.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How do I calculate the loading percentage on CTC?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Loading percentage equals total cost minus headline CTC divided by headline CTC, expressed as a percentage. For a ₹15 lakh CTC employee with full benefits, office space and admin overhead, loading typically ranges from 12% to 22%, making the true cost ₹17 to ₹18.3 lakh per year. Remote employees with minimal benefits load at 5-8%; senior office-based employees with premium insurance load at 18-25%; junior employees in tier-2 cities load at 8-12%.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should variable pay be included in total cost computation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, variable pay should be included in total cost computation as a budgetary provision, not as discretionary spend. The Income Tax Act treats variable pay as part of salary for TDS under Section 192. For accounting, the expected variable component should be accrued monthly per Ind AS 19 or AS 15. For headcount budgeting, assume 100% achievement at target level — most companies plan and pay close to target. Build a 5-15% variable component into the total cost number.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the impact of work-from-home on total cost?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Full work-from-home reduces total cost by 12-18% versus office-based employment by eliminating allocated office space cost. However, employers should add internet allowance of ₹1,000 to ₹3,000 per month and electricity allowance for full-remote employees. Equipment cost stays the same or slightly higher (need to ship setup to home). Hybrid arrangements with 3 days office save 30-40% of full-office cost. The tax treatment of these allowances depends on whether they qualify as reimbursement under specific Income Tax exemptions.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the take-home pay for a ₹15 LPA CTC employee?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">For a ₹15 lakh CTC employee under the new tax regime FY 2025-26, monthly take-home is approximately ₹95,000 to ₹1,05,000. The gross monthly is ₹1,25,000. Deductions include employer PF ₹1,800 (excluded from gross), employee PF ₹1,800, professional tax ₹200 (state-dependent), and TDS under Section 192 of approximately ₹15,000-₹20,000 per month based on annual tax of ₹1.8-₹2.4 lakh. Old regime take-home is similar after standard deductions and 80C investments.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How is gratuity calculated for accounting provision?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Gratuity provision is accounted at 4.81% of monthly wages, derived from the formula: 15 days wages divided by 26 working days, then divided by 12 months. This is the actuarial accrual matching the gratuity entitlement under the Payment of Gratuity Act 1972, now subsumed under the Code on Social Security 2020. Companies must accrue this as an unfunded liability or fund it through approved gratuity trust. Under Ind AS 19, the valuation captures full Defined Benefit Obligation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What HR and admin overhead should I allocate per employee?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">HR and admin overhead allocation depends on company size. For startups under 20 employees, allocate 5-8% of total salary cost. For mid-size companies of 20-200 employees, 3-5% is typical. For larger companies above 200 employees, the allocation drops to 2-3%. The overhead covers HR team salary, payroll software, recruitment fees amortised, training infrastructure, employee engagement programmes, and POSH committee operations.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Are statutory bonus and ex-gratia bonus the same?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Statutory bonus is mandated under the Payment of Bonus Act 1965, applies to employees with monthly salary up to ₹21,000, in establishments with 20 or more employees, at minimum 8.33% to maximum 20% of salary capped at ₹7,000 per month for computation. Ex-gratia bonus is voluntary, applied to employees above the ₹21,000 threshold or in establishments not covered by the Act. For total cost computation, statutory bonus is mandatory budget; ex-gratia is discretionary but customary in organised sector firms.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should I budget for notice period buyout reserve?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, prudent employers budget a notice period reserve equal to 1-3 months of total compensation. This reserve covers terminated employees serving notice, employees who buy out notice, and replacement hire onboarding overlap. The reserve typically equals 8-15% of annual cost, expensed monthly as accrual. For high-attrition roles or fixed-term employees with gratuity obligations, reserve at the higher end of the range.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does the new wages definition affect TDS computation?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Code on Wages 2019 unified wages definition does not directly change Income Tax Act salary definition under Section 17. TDS under Section 192 continues to be computed on taxable salary including basic, allowances, perquisites and profits in lieu of salary. However, the Wages Code's broader base for PF and gratuity creates a higher PF contribution that the employee can claim as deduction, and a higher gratuity provision that affects the employee's eventual tax-free gratuity ceiling under Section 10(10).</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Compensation Audit?</h3>
            <p>Patron Accounting reviews salary structures for Wages Code 2019 compliance, total cost benchmarking and PF/gratuity provisioning.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20Employee%20Total%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Employee%20Total%20Cost%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20Employee%20Total%20Cost%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/payroll-management-services" class="sidebar-link">Payroll Management<span class="arrow">→</span></a>
            <a href="/pf-registration" class="sidebar-link">PF Registration<span class="arrow">→</span></a>
            <a href="/esi-registration" class="sidebar-link">ESI Registration<span class="arrow">→</span></a>
            <a href="/professional-tax-registration" class="sidebar-link">Professional Tax Registration<span class="arrow">→</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing<span class="arrow">→</span></a>
            <a href="/private-limited-company-registration" class="sidebar-link">Pvt Ltd Registration<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/india-eor-cost-calculator" class="sidebar-link">India EOR Cost Calculator<span class="arrow">→</span></a>
            <a href="/tools/take-home-salary-calculator" class="sidebar-link">Take-Home Salary Calculator<span class="arrow">→</span></a>
            <a href="/tools/ctc-to-in-hand-calculator" class="sidebar-link">CTC to In-Hand Calculator<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/hra-calculator" class="sidebar-link">HRA Calculator<span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/payroll-setup-india-comprehensive-guide-for-businesses" class="sidebar-link">Payroll Setup in India: Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/esic-registration-online-india-2025" class="sidebar-link">ESIC Registration Online<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026" class="sidebar-link">Annual Compliance Calendar<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune · Mumbai · Delhi · Gurugram</div>
    <div class="trust">Trusted by 200+ Indian companies for payroll &amp; compliance</div>
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

    var INSURANCE_ANNUAL = {
        'none': 0, 'self': 5000, 'plus-one': 8000, 'family': 15000
    };

    // Office mode multipliers
    var MODE_MULTIPLIER = {
        'remote': 0,
        'hybrid': 0.65,
        'office': 1.0
    };

    var state = {
        mode: 'hybrid',
        insurance: 'self'
    };

    // Toggle handlers
    document.querySelectorAll('.toggle-btn[data-mode]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-mode]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.mode = btn.getAttribute('data-mode');
        });
    });
    document.querySelectorAll('.toggle-btn[data-ins]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-ins]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.insurance = btn.getAttribute('data-ins');
        });
    });

    // Range slider
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

    // New tax regime FY 2025-26 (annual taxable income)
    function computeTax(taxable) {
        if (taxable <= 0) return 0;
        var tax = 0;
        // Apply slabs
        if (taxable <= 300000) tax = 0;
        else if (taxable <= 700000) tax = (taxable - 300000) * 0.05;
        else if (taxable <= 1000000) tax = 20000 + (taxable - 700000) * 0.10;
        else if (taxable <= 1200000) tax = 50000 + (taxable - 1000000) * 0.15;
        else if (taxable <= 1500000) tax = 80000 + (taxable - 1200000) * 0.20;
        else tax = 140000 + (taxable - 1500000) * 0.30;

        // Section 87A rebate (taxable up to 7L = full rebate)
        if (taxable <= 700000) tax = 0;

        // Health & Education Cess 4%
        tax = tax * 1.04;
        return tax;
    }

    function compute(){
        var ctc = parseINR($('ctc').value) || 0;
        var basicPct = parseINR($('basic-pct').value) || 50;
        var variablePct = parseINR($('variable-pct').value) || 0;
        var stateCode = $('state').value;
        var deskCost = parseINR($('desk-cost').value) || 0;
        var equipment = parseINR($('equipment').value) || 0;
        var ldBudget = parseINR($('ld-budget').value) || 0;
        var adminPct = parseINR($('admin-pct').value) || 0;
        var noticeMonths = parseINR($('notice-months').value) || 0;

        if (ctc <= 0) {
            alert('Please enter a valid CTC amount.');
            return;
        }

        // Gross monthly = CTC / 12
        var gross = ctc / 12;
        var basic = gross * basicPct / 100;

        // PF
        var pfBase = Math.min(basic, 15000);
        var pf = pfBase * 0.13; // 12% + 1% admin/EDLI

        // ESI
        var esi = gross <= 21000 ? gross * 0.0325 : 0;

        // Gratuity
        var gratuity = basic * 0.0481;

        // Statutory bonus
        var bonus = gross <= 21000 ? Math.min(basic, 7000) * 0.0833 : 0;

        // PT + LWF
        var pt = (PT_RATE[stateCode] || 0) + ((LWF_ANNUAL[stateCode] || 0) / 12);
        var ptOnly = PT_RATE[stateCode] || 0;
        var lwfMonthly = (LWF_ANNUAL[stateCode] || 0) / 12;

        var statutoryTotal = pf + esi + gratuity + bonus + pt;

        // Benefits
        var insurance = (INSURANCE_ANNUAL[state.insurance] || 0) / 12;
        var equipmentMonthly = equipment / 36; // amortise over 36 months
        var ldMonthly = ldBudget / 12;
        var benefitsTotal = insurance + equipmentMonthly + ldMonthly;

        // Overhead
        var deskMonthly = deskCost * MODE_MULTIPLIER[state.mode];
        var adminMonthly = gross * adminPct / 100;
        var variableMonthly = gross * variablePct / 100;
        // Notice reserve: noticeMonths of (annualised cost so far) / 12
        var monthlySoFar = gross + statutoryTotal + benefitsTotal + deskMonthly + adminMonthly + variableMonthly;
        var noticeMonthly = (monthlySoFar * noticeMonths) / 12;
        var overheadTotal = deskMonthly + adminMonthly + variableMonthly + noticeMonthly;

        // Total
        var totalMonthly = gross + statutoryTotal + benefitsTotal + overheadTotal;
        var totalAnnual = totalMonthly * 12;

        // Loading
        var headlineMonthly = ctc / 12;
        var loadingPct = ((totalMonthly - headlineMonthly) / headlineMonthly) * 100;
        var ratio = totalMonthly / headlineMonthly;

        // Take-home (new tax regime, simplified)
        // Taxable income = CTC - standard deduction - employer PF (excluded)
        // Variable pay accrual NOT included in CTC for take-home purposes
        var employerPFAnnual = pfBase * 12 * 0.13;
        var taxableIncome = Math.max(0, ctc - 75000 - employerPFAnnual);
        var annualTax = computeTax(taxableIncome);
        var monthlyTax = annualTax / 12;
        var employeePF = pfBase * 0.12;
        var employeePT = ptOnly;
        var employeeESI = gross <= 21000 ? gross * 0.0075 : 0;
        var takeHome = gross - employeePF - employeePT - monthlyTax - employeeESI;

        // Statutory % of total cost
        var statPctOfCost = (statutoryTotal / totalMonthly) * 100;

        // Per day cost (assuming 22 working days/month)
        var perDay = totalMonthly / 22;

        // Verdict
        var verdictClass = '';
        var verdictHeadline = '';
        var verdictSub = '';

        if (loadingPct < 10) {
            verdictClass = '';
            verdictHeadline = 'Lean cost structure — ' + loadingPct.toFixed(1) + '% loading';
            verdictSub = 'True cost runs close to headline CTC. Common for full-remote roles with minimal benefits and lean overhead.';
        } else if (loadingPct < 20) {
            verdictClass = '';
            verdictHeadline = 'Standard cost structure — ' + loadingPct.toFixed(1) + '% loading';
            verdictSub = 'Typical loading for hybrid roles with standard benefits. Multiply offer-letter CTC by ~1.' + Math.round(loadingPct).toString().padStart(2,'0') + ' for true budget.';
        } else if (loadingPct < 30) {
            verdictClass = 'amber';
            verdictHeadline = 'Heavy cost structure — ' + loadingPct.toFixed(1) + '% loading';
            verdictSub = 'Office-based or premium-benefits roles. True cost is materially above headline CTC. Update headcount budget accordingly.';
        } else {
            verdictClass = 'red';
            verdictHeadline = 'Premium cost structure — ' + loadingPct.toFixed(1) + '% loading';
            verdictSub = 'Senior office-based with high variable + notice reserve. Reconsider variable provisioning if unrealistic at target.';
        }

        // Alerts
        var alerts = [];
        if (basicPct < 50) {
            alerts.push({type: 'warn', html: '<strong>Non-compliant salary structure:</strong> Basic at ' + basicPct + '% violates the Wages Code 2019 50% rule effective 21 November 2025. Restructure to basic ≥50% of CTC. Allowances exceeding 50% will be deemed wages and pull into PF/gratuity base anyway.'});
        }
        if (gross <= 21000) {
            alerts.push({type: 'info', html: '<strong>ESI applicable:</strong> Gross of ' + fmtINR(gross) + ' is at or below the ₹21,000 ESI threshold. Employer ESI of 3.25% applies, plus statutory bonus eligibility under the Payment of Bonus Act.'});
        }
        if (basic > 15000) {
            alerts.push({type: 'info', html: '<strong>PF capped at statutory ceiling:</strong> Basic of ' + fmtINR(basic) + ' exceeds the ₹15,000 PF wage ceiling. Employer PF computed on ₹15,000 = ₹1,950/month. For voluntary uncapped PF, the employer share would scale to full basic and could materially raise total cost.'});
        }
        if (PT_RATE[stateCode] === 0) {
            alerts.push({type: 'info', html: '<strong>No professional tax in ' + STATE_LABEL[stateCode] + ':</strong> ' + STATE_LABEL[stateCode] + ' does not levy professional tax. Saves ₹2,400 per year per employee versus PT-imposing states.'});
        }
        if (state.mode === 'office' && deskCost > 25000) {
            alerts.push({type: 'warn', html: '<strong>High office cost — verify allocation:</strong> Desk cost of ' + fmtINR(deskCost) + '/month is at the top of the city band. Confirm whether this is fully allocated per employee or shared. Coworking memberships at ₹8K-₹12K could materially reduce total cost.'});
        }
        if (variablePct > 20) {
            alerts.push({type: 'warn', html: '<strong>High variable pay provision:</strong> Variable at ' + variablePct + '% of fixed is steep. Most companies achieve 80-100% of target on average — but loading at 100% target overstates cost in low-payout years. Consider booking at expected achievement (typically 85-90%) for budgeting.'});
        }
        if (noticeMonths > 1.5) {
            alerts.push({type: 'info', html: '<strong>Notice reserve at ' + noticeMonths + ' months:</strong> Prudent for high-attrition industries (IT services, BFSI, consulting). For low-attrition roles or strategic hires, 0-1 month is usually adequate.'});
        }
        if (state.mode === 'remote' && deskCost > 0) {
            alerts.push({type: 'info', html: '<strong>Remote mode — desk cost ignored:</strong> You selected Full Remote, so the office desk cost (' + fmtINR(deskCost) + ') is not added. Consider adding a ₹1,500-₹3,000 monthly internet/utility allowance instead — currently not included.'});
        }
        if (loadingPct > 25 && variablePct > 15) {
            alerts.push({type: 'info', html: '<strong>Loading inflated by variable pay:</strong> Loading of ' + loadingPct.toFixed(1) + '% includes ' + variablePct + '% variable pay provision. If you exclude variable as discretionary, loading drops to ~' + (loadingPct - variablePct).toFixed(1) + '%. Use this lower number for fixed-cost budgeting.'});
        }

        // Render verdict
        $('verdict').className = 'verdict-card' + (verdictClass ? ' ' + verdictClass : '');
        $('verdict-headline').textContent = verdictHeadline;
        $('verdict-sub').textContent = verdictSub;
        $('v-annual').textContent = fmtINR(totalAnnual);
        $('v-load').textContent = loadingPct.toFixed(1) + '%';
        $('v-load').className = 'verdict-grid-value' + (loadingPct > 25 ? ' danger' : (loadingPct > 15 ? ' warn' : ''));
        $('v-ratio').textContent = ratio.toFixed(2) + 'x';

        // Alerts
        var ah = '';
        for (var a = 0; a < alerts.length; a++) ah += '<div class="info-banner ' + alerts[a].type + '">' + alerts[a].html + '</div>';
        $('alerts').innerHTML = ah;

        // Visual stack bar
        var sBar = $('stack-bar');
        sBar.innerHTML = '';
        var segs = [
            {cls: 'salary', val: gross, label: 'Salary'},
            {cls: 'statutory', val: statutoryTotal, label: 'Statutory'},
            {cls: 'benefits', val: benefitsTotal, label: 'Benefits'},
            {cls: 'overhead', val: overheadTotal, label: 'Overhead'}
        ];
        segs.forEach(function(s){
            var pct = (s.val / totalMonthly) * 100;
            if (pct < 0.5) return;
            var div = document.createElement('div');
            div.className = 'stack-seg ' + s.cls;
            div.style.width = pct + '%';
            div.textContent = pct >= 8 ? pct.toFixed(0) + '%' : '';
            sBar.appendChild(div);
        });

        // Breakdown
        $('b-gross').textContent = fmtINRfull(gross);
        $('b-stat-total').textContent = fmtINRfull(statutoryTotal);
        $('b-pf').textContent = fmtINRfull(pf);
        $('b-esi').textContent = fmtINRfull(esi);
        $('b-grat').textContent = fmtINRfull(gratuity);
        $('b-bonus').textContent = fmtINRfull(bonus);
        $('b-pt').textContent = fmtINRfull(pt);
        $('b-ben-total').textContent = fmtINRfull(benefitsTotal);
        $('b-ins').textContent = fmtINRfull(insurance);
        $('b-eq').textContent = fmtINRfull(equipmentMonthly);
        $('b-ld').textContent = fmtINRfull(ldMonthly);
        $('b-oh-total').textContent = fmtINRfull(overheadTotal);
        $('b-desk').textContent = fmtINRfull(deskMonthly);
        $('b-admin').textContent = fmtINRfull(adminMonthly);
        $('b-var').textContent = fmtINRfull(variableMonthly);
        $('b-notice').textContent = fmtINRfull(noticeMonthly);
        $('b-total').textContent = fmtINRfull(totalMonthly);

        // Summary
        $('s-ctc').textContent = fmtINR(ctc);
        $('s-loading').textContent = '+' + fmtINR(totalAnnual - ctc);
        $('s-true').textContent = fmtINR(totalAnnual);
        $('s-takehome').textContent = fmtINR(takeHome);
        $('s-stat-pct').textContent = statPctOfCost.toFixed(1) + '%';
        $('s-perday').textContent = fmtINR(perDay);

        // Show
        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        $('ctc').value = '1500000';
        $('basic-pct').value = '50';
        $('basic-pct-val').textContent = '50%';
        $('variable-pct').value = '10';
        $('state').value = 'MH';
        $('desk-cost').value = '15000';
        $('equipment').value = '80000';
        $('ld-budget').value = '20000';
        $('admin-pct').value = '5';
        $('notice-months').value = '1';
        document.querySelectorAll('.toggle-btn[data-mode]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-mode="hybrid"]').classList.add('active');
        state.mode = 'hybrid';
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
