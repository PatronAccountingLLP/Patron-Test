@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Payroll Outsourcing ROI Calculator | In-House vs Vendor</title>
    <meta name="description" content="Calculate payroll outsourcing ROI for Indian SMEs: in-house cost (HR FTE + software + CA + risk) vs vendor PEPM fee. Net savings + break-even count + verdict.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/payroll-outsourcing-roi-calculator/">
    <meta property="og:title" content="Payroll Outsourcing ROI Calculator — In-House vs Vendor">
    <meta property="og:description" content="Decide between in-house payroll team and outsourced vendor. Computes total cost both ways, net savings, ROI multiple, break-even employee count, decision verdict.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/payroll-outsourcing-roi-calculator">
    <meta property="og:image" content="/tools/og/payroll-outsourcing-roi-calculator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Outsourcing ROI Calculator — In-House vs Vendor">
    <meta name="twitter:description" content="In-house payroll cost vs vendor cost. Net savings, ROI, break-even. Free CA tool for Indian SMEs.">
    <meta name="twitter:image" content="/tools/og/payroll-outsourcing-roi-calculator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "Payroll Outsourcing ROI Calculator (In-House vs Vendor)",
      "description": "Payroll Outsourcing ROI Calculator computes the net savings, return on investment percentage, and break-even employee count when an Indian employer compares running payroll in-house against engaging a payroll outsourcing vendor on a per-employee per-month or fixed-fee basis. The tool computes the total annual in-house payroll cost across labour cost (proportionate full-time equivalent allocation of payroll executive multiplied by the executive's annual cost to company), payroll software cost on a per-employee per-month basis applicable to leading Indian platforms such as Keka, GreytHR, Zoho Payroll and RazorpayX Payroll, external Chartered Accountant or Cost Accountant quarterly review fee for compliance assurance, statutory compliance penalty risk reserve representing the expected value of late filing penalties and interest on delayed Provident Fund Electronic Challan-cum-Return submission, Employees State Insurance contribution, Tax Deducted at Source on salary under Section 192 of the Income-tax Act, professional tax remittance and quarterly Form 24Q return, and the proportionate management oversight cost. The tool computes the total annual outsourced payroll cost across vendor service fee on a per-employee per-month basis or fixed monthly retainer, one-time setup fee amortised across the expected engagement tenure of thirty-six months, residual in-house oversight cost typically representing one-tenth of one full-time equivalent for vendor relationship management, and integration software cost where the vendor charges separately for portal access. The tool computes the net annual savings, the return on investment expressed as a percentage of the outsourced annual cost, and the break-even employee count at which the total in-house cost equals the total outsourced cost. The tool incorporates the four Labour Codes effective from 21 November 2025 — the Code on Wages, 2019, the Industrial Relations Code, 2020, the Code on Social Security, 2020 and the Occupational Safety, Health and Working Conditions Code, 2020 — and reflects the heightened compliance risk under the Digital Personal Data Protection Act, 2023 enforcement regime where payroll data fiduciary obligations rest with the employer regardless of outsourcing arrangement.",
      "url": "/tools/payroll-outsourcing-roi-calculator",
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
        {"@type": "ListItem", "position": 3, "name": "Payroll Outsourcing ROI Calculator", "item": "/tools/payroll-outsourcing-roi-calculator"}
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
          "name": "How much does payroll outsourcing cost in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Payroll outsourcing in India costs between ₹150 and ₹2,500 per employee per month in 2026 depending on service tier. Basic processing covering salary calculation and payslips runs ₹150-₹400 PEPM. Standard service with full statutory compliance for PF, ESI, professional tax and TDS runs ₹300-₹800 PEPM. Full-service managed payroll with HR support runs ₹800-₹2,500 PEPM. Most mid-market Indian companies pay ₹300-₹800 PEPM. Volume discounts of 15-30% kick in above 500 employees."
          }
        },
        {
          "@type": "Question",
          "name": "When does payroll outsourcing make economic sense?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Payroll outsourcing makes economic sense for most Indian companies under 100 employees, where the fixed cost of an in-house payroll executive cannot be efficiently amortised. Between 100 and 500 employees, the decision depends on operational complexity, multi-state presence and compliance risk tolerance. Above 500 employees a hybrid model is usually optimal — in-house payroll team for processing with vendor support for filings and audit. Most outsourcing arrangements yield 30-40% savings versus in-house for SMEs."
          }
        },
        {
          "@type": "Question",
          "name": "What costs go into in-house payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In-house payroll costs comprise five components: salary of payroll executive at proportionate full-time equivalent allocation (₹3-15 lakh per year), payroll software at ₹50-₹200 per employee per month (Keka, GreytHR, Zoho), external CA quarterly review fee at ₹15,000-₹50,000 per quarter, statutory compliance penalty risk reserve based on historical late filing experience, and management oversight overhead. The total typically runs 1.5-3% of total payroll for SMEs and falls to 0.5-1% for larger organisations."
          }
        },
        {
          "@type": "Question",
          "name": "What hidden costs are in payroll outsourcing contracts?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common hidden costs in payroll outsourcing include one-time setup fees of ₹10,000-₹50,000 for data migration and system configuration, off-cycle payroll processing at ₹2,000-₹10,000 per off-cycle run, custom report generation at ₹5,000-₹25,000 per report, multi-state compliance surcharges at 15-30% above base PEPM, year-end Form 16 distribution charges at ₹100-₹300 per employee, audit support charges, and HRMS integration fees. Always demand a detailed sample invoice before signing the master service agreement."
          }
        },
        {
          "@type": "Question",
          "name": "Does outsourcing transfer compliance liability to the vendor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The Indian employer remains the principal employer and data fiduciary for all statutory compliance, including PF, ESI, TDS, professional tax and Labour Welfare Fund. The vendor acts as a service provider on the employer's behalf. Penalties for non-compliance fall on the employer, who can recover damages from the vendor under contract. Reputable vendors maintain professional indemnity insurance covering errors and omissions. The Digital Personal Data Protection Act 2023 strengthens this — employer is the data fiduciary regardless of outsourcing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the typical break-even employee count?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typical break-even where in-house payroll cost equals vendor cost falls in the 30-50 employee range for SMEs in tier-1 cities and 50-80 employees in tier-2 cities where executive salaries are lower. Below 30 employees, outsourcing almost always wins because the in-house executive's fixed cost cannot be spread thin enough. Above 80-100 employees, an in-house team becomes economically viable but compliance complexity often justifies retaining a vendor as a hybrid arrangement."
          }
        },
        {
          "@type": "Question",
          "name": "How does the four Labour Codes change the outsourcing calculus?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The four Labour Codes effective 21 November 2025 increase compliance complexity through unified wage definitions requiring basic to be at least 50% of CTC, expanded gratuity coverage to fixed-term employees after one year, and impending two-day full-and-final settlement timelines. Manual or Excel-based in-house payroll struggles with these complexities. Established outsourcing vendors update their systems and processes proactively, making outsourcing more attractive for companies without robust internal compliance capabilities. The Codes have raised the cost-of-error meaningfully."
          }
        },
        {
          "@type": "Question",
          "name": "Can I outsource only part of payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, hybrid arrangements are common. Typical splits include: in-house team for permanent employees with vendor handling contract employees, in-house headquarters payroll with vendor for branch offices, in-house processing with vendor for compliance filings, or in-house calculation with vendor for software and statutory portal management. Hybrid setups suit companies with 100-500 employees that have invested in in-house capability but want vendor expertise for specific challenges. Cost typically falls between full-in-house and full-outsource."
          }
        },
        {
          "@type": "Question",
          "name": "What is the typical setup time for payroll outsourcing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Setup time for payroll outsourcing in India typically ranges from 2 to 6 weeks. Basic setup with simple salary structures and single-state operations completes in 2 weeks, including data migration, salary structure configuration, parallel payroll testing and go-live. Complex setups with multi-state operations, intricate salary structures, integrations with HRMS and existing systems, and multiple legal entities take 4-6 weeks. Reputable vendors run 1-2 parallel payroll cycles before full cutover to ensure accuracy and identify edge cases."
          }
        },
        {
          "@type": "Question",
          "name": "How do I evaluate payroll vendors in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Evaluate payroll vendors on six dimensions: pricing transparency including all hidden charges, compliance accuracy track record with client references, data security including ISO 27001 certification and DPDP Act readiness, scalability across employee count and multi-state operations, response time for queries (typically 24 hours for non-urgent, 4 hours for urgent), and exit clause flexibility allowing data portability and parallel running during transition. Always ask for a sample invoice and parallel-run the vendor's calculations against current in-house processing before signing."
          }
        },
        {
          "@type": "Question",
          "name": "What compliance penalties apply to payroll errors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Payroll error penalties stack quickly. Late TDS deposit attracts 1.5% per month interest plus 30% expense disallowance under Section 40(a)(ia). Late PF deposit attracts 12% interest plus 5-25% damages under Section 14B. Late ESI similarly. Form 24Q late filing attracts ₹200/day u/s 234E plus penalty up to ₹1 lakh u/s 271H. POSH report non-filing attracts up to ₹50,000 plus business licence cancellation. Missing one month of compliance for a 50-employee company can accumulate ₹15K-₹40K in 6 months."
          }
        },
        {
          "@type": "Question",
          "name": "Is software-only payroll cheaper than full outsourcing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Software-only payroll appears cheaper at ₹50-₹200 per employee per month versus ₹300-₹800 PEPM for managed services, but the savings are illusory if the company lacks dedicated payroll expertise. Software automates calculation but does not file PF, ESI, TDS or PT returns — that requires human attention to deadlines and forms. For companies under 50 employees without a dedicated payroll executive, software-only typically incurs hidden costs through compliance errors and missed deadlines that exceed the savings versus managed outsourcing."
          }
        },
        {
          "@type": "Question",
          "name": "Should startups outsource payroll from day one?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most Indian startups should outsource payroll from day one until reaching 30-40 employees, then evaluate. The reasoning: founder time is expensive, compliance errors at small scale create disproportionate distraction, vendor pricing of ₹3,000-₹10,000 per month for under 20 employees is far cheaper than founder or executive time spent on payroll. Once the team reaches 30-40 employees and warrants a dedicated HR person, the equation can be reassessed based on the HR person's bandwidth and compliance complexity."
          }
        },
        {
          "@type": "Question",
          "name": "What is included in basic vs full-service payroll outsourcing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Basic payroll outsourcing covers salary calculation, payslip generation and bank file preparation only. Standard payroll adds full statutory compliance — PF and ESI challan and ECR submission, TDS deduction and Form 24Q filing, professional tax remittance and returns, Labour Welfare Fund contribution. Full-service adds employee helpdesk for payroll queries, leave and reimbursement management, Form 16 distribution, audit support, and statutory compliance advisory. Most mid-market companies opt for Standard tier; full-service suits companies without internal HR capability."
          }
        },
        {
          "@type": "Question",
          "name": "How does multi-state operation affect outsourcing cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multi-state operations increase payroll outsourcing cost by 15-30% above the base PEPM rate. Each state has different professional tax slabs, Labour Welfare Fund schedules, Shops and Establishments Act requirements, and minimum wage rules. Vendors charge for the additional compliance complexity including multi-state PT registration tracking, separate LWF remittance schedules, state-specific Form 24Q filings, and multi-state minimum wage monitoring. For 3+ state operations, the surcharge often reaches 25-40% but eliminates the in-house need for state-specific compliance expertise."
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
        .calc-section-title.inhouse { color: var(--info); }
        .calc-section-title.vendor { color: var(--success); }

        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"], input[type="text"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group input[type="range"] { padding: 0; height: 8px; background: var(--surface-alt); border: none; cursor: pointer; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

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
        .verdict-grid-value.pos { color: var(--success); }
        .verdict-grid-value.neg { color: var(--danger); }

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

        .compare-card { background: var(--card); border: 2px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 18px; }
        .compare-card h4 { font-size: 14px; color: var(--primary-dark); margin-bottom: 12px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .compare-table { width: 100%; border-collapse: collapse; font-size: 13px; }
        .compare-table th { padding: 10px 8px; text-align: left; color: var(--text-muted); font-weight: 600; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px; border-bottom: 2px solid var(--border); }
        .compare-table th.num, .compare-table td.num { text-align: right; font-family: var(--font-mono); font-weight: 700; }
        .compare-table td { padding: 10px 8px; color: var(--text-secondary); border-bottom: 1px solid var(--border); }
        .compare-table tr.subtotal td { font-weight: 700; color: var(--primary-dark); border-bottom: 2px solid var(--border); }
        .compare-table tr.total td { font-weight: 700; font-size: 14px; background: var(--surface); padding: 12px 8px; }
        .compare-table tr.savings td { background: #DCE8F5; padding: 12px 8px; color: var(--success); font-weight: 700; font-size: 14px; }
        .compare-table tr.savings.neg td { background: #FEE2E2; color: var(--danger); }

        .visual-bar { background: var(--surface); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 18px; }
        .visual-bar h4 { font-size: 13px; color: var(--text-secondary); margin-bottom: 12px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 1px; }
        .compare-bars { display: flex; flex-direction: column; gap: 8px; }
        .compare-bar-row { display: grid; grid-template-columns: 100px 1fr 100px; gap: 12px; align-items: center; }
        .compare-bar-label { font-size: 13px; font-weight: 700; color: var(--primary-dark); }
        .compare-bar-track { background: var(--surface-alt); height: 28px; border-radius: 6px; overflow: hidden; position: relative; }
        .compare-bar-fill { height: 100%; transition: width 0.5s; border-radius: 6px; }
        .compare-bar-fill.inhouse { background: linear-gradient(90deg, var(--info), #38BDF8); }
        .compare-bar-fill.vendor { background: linear-gradient(90deg, var(--success), #34D399); }
        .compare-bar-value { font-family: var(--font-mono); font-size: 13px; font-weight: 700; color: var(--primary-dark); text-align: right; }

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
            .compare-bar-row { grid-template-columns: 80px 1fr 80px; }
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
        <a href="#in-house-cost">In-House Cost</a>
        <a href="#vendor-cost">Vendor Cost</a>
        <a href="#decision-tiers">Decision Tiers</a>
        <a href="#service-tiers">Service Tiers</a>
        <a href="#evaluation">Evaluation Framework</a>
        <a href="#hidden-costs">Hidden Costs</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Payroll Outsourcing ROI Calculator
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Payroll Outsourcing ROI Calculator — <span>In-House vs Vendor</span> Net Savings (FY 2025-26)</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Payroll%20Outsourcing%20ROI%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This calculator answers the question every Indian CFO eventually faces: <strong>"Should we outsource payroll?"</strong> It computes total annual cost both ways — <strong>in-house</strong> (HR/payroll executive FTE + payroll software + CA quarterly review + statutory penalty risk reserve) versus <strong>outsourced</strong> (vendor PEPM fee + setup amortisation + 0.1 FTE oversight). Output: <strong>net annual savings</strong>, <strong>ROI multiple</strong>, <strong>break-even employee count</strong>, and a <strong>Strongly Outsource / Outsource / Hybrid / Stay In-House</strong> verdict. Indian SMEs typically save 30-40% by outsourcing payroll for headcounts under 100. Updated for the four <strong>Labour Codes effective 21 November 2025</strong> and DPDP Act 2023 enforcement. Pair with our <a href="/tools/payroll-compliance-calendar">Payroll Compliance Calendar</a> for compliance load context.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Payroll Outsourcing ROI Calculator</h2>
            <p class="calc-intro">Enter your employee count, current in-house payroll cost components, and a vendor proposal. The calculator computes total annual cost both ways, net savings, ROI on outsourced cost, the break-even employee count, and a clear decision verdict.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calculator.</div></noscript>

            <div class="calc-section-title">Company Profile</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="employees">Number of Employees on Payroll</label>
                    <input type="text" id="employees" value="50" min="1" max="5000" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Total active payroll headcount across all locations.</span>
                </div>
                <div class="form-group">
                    <label>Multi-State Operations</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn active" data-states="single">Single State</button>
                        <button type="button" class="toggle-btn" data-states="multi">2-3 States</button>
                        <button type="button" class="toggle-btn" data-states="many">4+ States</button>
                    </div>
                    <span class="helper">Multi-state adds 15-30% to vendor fee for compliance complexity.</span>
                </div>
            </div>

            <div class="calc-section-title inhouse">In-House Payroll Cost (Current State)</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="exec-fte">Payroll Executive FTE Allocation (%)</label>
                    <input type="text" id="exec-fte" value="50" min="0" max="500" step="5" inputmode="decimal" autocomplete="off">
                    <span class="helper">% of one full-time person. 50% = half-time, 200% = 2 full-time.</span>
                </div>
                <div class="form-group">
                    <label for="exec-salary">Executive Annual CTC (₹)</label>
                    <input type="text" id="exec-salary" value="600000" min="0" step="10000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Junior payroll exec: ₹3-6L. Senior HR/payroll mgr: ₹8-15L.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="software-pepm">Payroll Software (₹/employee/month)</label>
                    <input type="text" id="software-pepm" value="100" min="0" step="10" inputmode="decimal" autocomplete="off">
                    <span class="helper">Keka, GreytHR, Zoho Payroll: ₹50-200 PEPM. Razorpay X: ₹150+.</span>
                </div>
                <div class="form-group">
                    <label for="ca-quarterly">CA Quarterly Review Fee (₹)</label>
                    <input type="text" id="ca-quarterly" value="20000" min="0" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Compliance review + sign-off. Mid-tier CA-led accounting firm: ₹15K-50K/qtr.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="penalty-reserve">Compliance Penalty Reserve (₹/year)</label>
                    <input type="text" id="penalty-reserve" value="25000" min="0" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Expected late filing penalties + interest. Use last 12-month actual.</span>
                </div>
                <div class="form-group">
                    <label for="oversight-pct">Oversight Overhead (% of executive)</label>
                    <input type="text" id="oversight-pct" value="15" min="0" max="50" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">CFO / HR head time spent reviewing payroll. Typical 10-20%.</span>
                </div>
            </div>

            <div class="calc-section-title vendor">Vendor Proposal (Target State)</div>

            <div class="form-group" style="margin-bottom: 14px;">
                <label>Vendor Service Tier</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-tier="basic">Basic (~₹250 PEPM)</button>
                    <button type="button" class="toggle-btn active" data-tier="standard">Standard (~₹500 PEPM)</button>
                    <button type="button" class="toggle-btn" data-tier="full">Full-Service (~₹1,200 PEPM)</button>
                    <button type="button" class="toggle-btn" data-tier="custom">Custom Rate</button>
                </div>
                <span class="helper">Basic = salary + payslip only. Standard adds full statutory compliance. Full-service adds HR helpdesk, audit support.</span>
            </div>

            <div class="calc-row">
                <div class="form-group" id="custom-pepm-group" style="display: none;">
                    <label for="custom-pepm">Custom Vendor PEPM (₹/employee/month)</label>
                    <input type="text" id="custom-pepm" value="500" min="0" step="50" inputmode="decimal" autocomplete="off">
                    <span class="helper">Per-employee per-month rate negotiated with vendor.</span>
                </div>
                <div class="form-group">
                    <label for="setup-fee">One-Time Setup Fee (₹)</label>
                    <input type="text" id="setup-fee" value="25000" min="0" step="1000" inputmode="decimal" autocomplete="off">
                    <span class="helper">Data migration, salary structure config. Often waived for ≥100 emp.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btn-calculate">Compute ROI &amp; Decision</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset to Default</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdict">
                    <div class="verdict-label">Outsourcing Decision Verdict</div>
                    <div class="verdict-headline" id="verdict-headline">—</div>
                    <div class="verdict-sub" id="verdict-sub">—</div>
                    <div class="verdict-grid">
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Net Annual Savings</div>
                            <div class="verdict-grid-value" id="v-savings">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Savings %</div>
                            <div class="verdict-grid-value" id="v-pct">—</div>
                        </div>
                        <div class="verdict-grid-item">
                            <div class="verdict-grid-label">Break-Even Headcount</div>
                            <div class="verdict-grid-value" id="v-be">—</div>
                        </div>
                    </div>
                </div>

                <div id="alerts"></div>

                <div class="visual-bar">
                    <h4>Annual Cost Comparison</h4>
                    <div class="compare-bars">
                        <div class="compare-bar-row">
                            <div class="compare-bar-label">In-House</div>
                            <div class="compare-bar-track"><div class="compare-bar-fill inhouse" id="bar-inhouse" style="width: 0%;"></div></div>
                            <div class="compare-bar-value" id="bar-inhouse-val">—</div>
                        </div>
                        <div class="compare-bar-row">
                            <div class="compare-bar-label">Outsourced</div>
                            <div class="compare-bar-track"><div class="compare-bar-fill vendor" id="bar-vendor" style="width: 0%;"></div></div>
                            <div class="compare-bar-value" id="bar-vendor-val">—</div>
                        </div>
                    </div>
                </div>

                <div class="compare-card">
                    <h4>Detailed Cost Comparison (Annual)</h4>
                    <table class="compare-table">
                        <thead>
                            <tr><th>Component</th><th class="num">In-House</th><th class="num">Outsourced</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Payroll Executive (labour)</td><td class="num" id="r1-ih">—</td><td class="num" id="r1-os">—</td></tr>
                            <tr><td>Software / Vendor Fee</td><td class="num" id="r2-ih">—</td><td class="num" id="r2-os">—</td></tr>
                            <tr><td>External CA Advisory</td><td class="num" id="r3-ih">—</td><td class="num" id="r3-os">—</td></tr>
                            <tr><td>Compliance Penalty Reserve</td><td class="num" id="r4-ih">—</td><td class="num" id="r4-os">—</td></tr>
                            <tr><td>Management Oversight</td><td class="num" id="r5-ih">—</td><td class="num" id="r5-os">—</td></tr>
                            <tr><td>Setup Amortisation</td><td class="num" id="r6-ih">—</td><td class="num" id="r6-os">—</td></tr>
                            <tr class="total"><td>Total Annual Cost</td><td class="num" id="r-total-ih">—</td><td class="num" id="r-total-os">—</td></tr>
                            <tr class="savings" id="r-savings-row"><td>Net Annual Savings (Outsource)</td><td class="num" colspan="2" id="r-savings">—</td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">In-House Cost / Employee</div>
                        <div class="summary-value" id="s-ih-per-emp">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Vendor Cost / Employee</div>
                        <div class="summary-value" id="s-os-per-emp">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Effective PEPM Equivalent</div>
                        <div class="summary-value" id="s-pepm">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">% of Total Payroll Cost</div>
                        <div class="summary-value" id="s-pct-of-payroll">—</div>
                    </div>
                    <div class="summary-card success" id="card-roi">
                        <div class="summary-label">ROI on Outsourcing</div>
                        <div class="summary-value" id="s-roi">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Recommended Path</div>
                        <div class="summary-value" id="s-rec">—</div>
                    </div>
                </div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Payroll Outsourcing ROI Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Payroll%20Outsourcing%20ROI%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Payroll%20Outsourcing%20ROI%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How the Calculator Works</h2>
            <p>The calculator builds two parallel cost stacks — in-house and outsourced — and compares them annually. Each stack reflects realistic cost components observed across our client engagements during FY 2025-26 with the four <a href="https://www.pib.gov.in/PressReleseDetailm.aspx?PRID=2192463&reg=3&lang=2" rel="noopener" target="_blank">Labour Codes</a> effective from 21 November 2025.</p>
            <h3>In-House Cost Stack</h3>
            <div class="formula-box">
                <span class="label">IN-HOUSE ANNUAL COST =</span><br>
                Executive FTE % × Annual CTC<br>
                <span class="label">+</span> Software PEPM × Employees × 12<br>
                <span class="label">+</span> CA Quarterly Fee × 4<br>
                <span class="label">+</span> Compliance Penalty Reserve<br>
                <span class="label">+</span> Oversight % × Executive cost
            </div>
            <h3>Outsourced Cost Stack</h3>
            <div class="formula-box">
                <span class="label">OUTSOURCED ANNUAL COST =</span><br>
                Vendor PEPM × Employees × 12<br>
                × Multi-State Multiplier (1.0 / 1.20 / 1.30)<br>
                <span class="label">+</span> Setup Fee ÷ 3 (amortise 36 mo)<br>
                <span class="label">+</span> 10% × Executive CTC (residual oversight)<br>
                <span class="label">+</span> Reduced penalty reserve (vendor liability)
            </div>
            <h3>Decision Outputs</h3>
            <p><strong>Net Savings</strong> = In-House Cost − Outsourced Cost. <strong>Savings %</strong> = Net Savings ÷ In-House Cost. <strong>Break-Even Headcount</strong> = the employee count at which the two stacks cross. <strong>Verdict</strong> = four-band recommendation: Strongly Outsource (savings ≥ 30%), Outsource (savings 10-30%), Hybrid Toss-Up (savings -10% to +10%), Stay In-House (cost increase &gt; 10%).</p>
            <h3>Caveats</h3>
            <p>The calculator outputs a financial comparison. Non-financial factors include: vendor data security and DPDP Act compliance, vendor reputation and stability, ease of exit at contract end, integration with existing HRMS, multi-state expertise, and culture fit with internal HR. A vendor offering 5% lower cost but with poor support quality should be deprioritised over a slightly costlier vendor with strong references.</p>
        </section>

        <section class="content-section" id="in-house-cost">
            <h2>In-House Payroll Cost — Hidden Components</h2>
            <p>In-house payroll cost is rarely captured fully in finance dashboards. Most companies track only the dedicated payroll executive's salary and miss the indirect components. The five-component framework below captures all material costs.</p>
            <h3>Component 1: Payroll Executive Labour</h3>
            <p>The dedicated person or persons running payroll. For under-50 companies, typically a fractional executive (30-50% FTE allocation) at ₹3-6 lakh annual cost. For 50-200 companies, one dedicated person at ₹6-10 lakh. For 200-500, two people at ₹15-20 lakh combined. For 500+, three to five people scaling. Include the loaded cost — basic + statutory + benefits + overhead — not just CTC. Use our <a href="/tools/india-employee-total-cost-calculator">Employee Total Cost Calculator</a> for the loaded figure.</p>
            <h3>Component 2: Payroll Software</h3>
            <p>India's payroll software market in 2026 has clear pricing tiers. Basic platforms (Razorpay X Payroll, Zoho Payroll) start at ₹50-100 PEPM. Mid-tier platforms (GreytHR, Keka, Paybooks) run ₹100-200 PEPM with HR features bundled. Enterprise platforms (Darwinbox, SAP SuccessFactors) cost ₹300-800 PEPM with full HCM functionality. Software fees scale linearly with employee count, providing no economies of scale. Refer to the <a href="https://www.epfindia.gov.in/" rel="noopener" target="_blank">EPFO Unified Portal</a> for direct PF filing — many companies attempt to skip dedicated payroll software using free portals, but this fails above 30 employees.</p>
            <h3>Component 3: External CA Advisory</h3>
            <p>Even with a dedicated payroll executive, most companies retain external CA support for compliance review, statutory return sign-off, and audit assistance. Quarterly review fee: ₹15,000-₹50,000 depending on complexity. Year-end audit support: ₹50,000-₹2,00,000. POSH committee external member: ₹25,000-₹50,000 annual. The CA's role is risk reduction — catching errors before they become penalties.</p>
            <h3>Component 4: Compliance Penalty Reserve</h3>
            <p>The expected value of late filing penalties and interest accruing across the year. Even well-run in-house teams encounter occasional misses — late TDS deposits during March year-end rush, missed PT payments during executive transitions, delayed PF challans during long weekends. Reserve realistically based on last 12 months' actual experience. SMEs typically reserve ₹20,000-₹50,000; mid-market ₹50,000-₹2,00,000.</p>
            <h3>Component 5: Management Oversight</h3>
            <p>The proportionate time of CFO, HR head and senior management spent reviewing payroll, signing approvals, addressing employee queries, and managing escalations. Typically 10-20% of the dedicated executive's time-equivalent at senior management cost rate. For a CFO drawing ₹40 lakh CTC spending 5% time on payroll = ₹2 lakh annual cost allocated. This component is universally under-counted in finance dashboards.</p>
        </section>


        <div class="body-cta">
            <h3>Outsource Payroll to Patron Accounting</h3>
            <p>Patron Accounting runs end-to-end payroll for 200+ Indian companies — payslip generation, TDS deduction and deposit, PF/ESI/PT remittance, statutory returns, Form 16 issuance. Fixed-fee monthly engagement starting ₹250 PEPM with named CA point of contact and 99.5% accuracy SLA.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Payroll%20Outsourcing%20ROI%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="vendor-cost">
            <h2>Vendor Cost Stack — What You Actually Pay</h2>
            <p>Vendor pricing in India follows a Per-Employee-Per-Month (PEPM) model, with three standard service tiers. Headline PEPM is the start of the conversation, not the end — actual annual cost includes setup fees, multi-state surcharges, off-cycle processing, and integration costs.</p>
            <h3>Service Tier Pricing 2026</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Tier</th><th>PEPM Range</th><th>Inclusions</th><th>Best Fit</th></tr>
                </thead>
                <tbody>
                    <tr><td>Basic</td><td>₹150-₹400</td><td>Salary calc, payslip, bank file</td><td>Companies with internal compliance team</td></tr>
                    <tr><td>Standard</td><td>₹300-₹800</td><td>Basic + full statutory (PF/ESI/TDS/PT)</td><td>Most SMEs (most popular)</td></tr>
                    <tr><td>Full-Service</td><td>₹800-₹2,500</td><td>Standard + helpdesk + Form 16 + audit support</td><td>Companies without internal HR</td></tr>
                </tbody>
            </table>
            <h3>Multi-State Surcharge</h3>
            <p>Operations across multiple states attract a 15-30% surcharge on PEPM. Each state has different professional tax slabs, Labour Welfare Fund schedules, Shops and Establishments Act registrations, and minimum wage rules. Vendors price the additional compliance complexity. The calculator above auto-applies multipliers: 1.0× for single-state, 1.20× for 2-3 states, 1.30× for 4+ states.</p>
            <h3>Setup &amp; Integration Cost</h3>
            <p>One-time setup fee covers data migration from existing system, salary structure configuration, parallel payroll run for verification, and go-live. Range: ₹10,000-₹50,000 for SMEs, ₹50,000-₹2,00,000 for mid-market. Often waived for ≥100 employee commitments. Integration with HRMS (Keka, GreytHR) typically free; integration with custom systems may cost ₹25,000-₹1,00,000. Amortise across the expected engagement tenure (typically 36 months) for accurate ROI computation.</p>
            <h3>Residual In-House Cost</h3>
            <p>Outsourcing does not eliminate all internal payroll cost. Retain approximately 0.1 FTE for vendor relationship management, employee escalation handling, monthly data validation, and audit liaison. This residual cost typically equals 10% of what the dedicated payroll executive would have cost in-house. The calculator includes this in the outsourced stack.</p>
        </section>

        <section class="content-section" id="decision-tiers">
            <h2>Decision Tiers by Headcount</h2>
            <p>The break-even point varies with company size, complexity, and the specific cost components. Below are general guidelines refined by the calculator above.</p>
            <h3>Tier 1: Under 25 Employees — Outsource Almost Always</h3>
            <p>For companies under 25 employees, outsourcing is the rational default. The fixed cost of an in-house payroll executive (₹3-6 lakh annual) cannot be amortised efficiently. Vendor pricing of ₹3,000-₹15,000 per month for under-25 employees beats every reasonable in-house configuration. Founder time is too valuable to spend on payroll execution. Compliance errors at small scale create disproportionate distraction from product/market work.</p>
            <h3>Tier 2: 25-100 Employees — Outsource Usually Wins</h3>
            <p>The 25-100 range is where outsourcing typically saves 30-40% versus in-house. A dedicated executive becomes economically justifiable but not yet productive at full scale. Software costs scale linearly without economies. Vendors at ₹300-₹500 PEPM (₹7,500-₹50,000 monthly) usually beat the loaded in-house cost. Hybrid models become attractive — basic vendor for processing, internal HR for employee management.</p>
            <h3>Tier 3: 100-500 Employees — Decision Tightens</h3>
            <p>Above 100 employees, an in-house payroll team of 1-2 executives can be productive enough to compete on cost. Vendor PEPM × 100 emp × 12 = ₹6-9 lakh annual, against in-house team of ₹15-25 lakh — vendors win on direct cost. But hybrid models — vendor for filings + in-house for processing and queries — often optimal. Multi-state operations swing the calculus toward outsourcing.</p>
            <h3>Tier 4: 500+ Employees — Hybrid Optimal</h3>
            <p>Above 500 employees, in-house payroll teams scale to 3-5 dedicated executives. Vendor pricing at ₹400-₹700 PEPM × 500 = ₹24-42 lakh annual is comparable to in-house team cost. Hybrid models are typical: in-house team for processing + employee support, vendor for compliance filings and audit support, separate HRMS platform. Pure outsourcing rare; pure in-house attracts compliance risk concentration.</p>
            <h3>Tier 5: 2,000+ Employees — Enterprise HCM In-House</h3>
            <p>Above 2,000 employees, the economics shift to enterprise HCM platforms (SAP SuccessFactors, Workday, Darwinbox) with dedicated in-house teams. Outsourcing partial functions like statutory filings or specific subsidiary payrolls remains common. Total payroll cost as % of payroll typically falls to 0.3-0.5% at this scale.</p>
        </section>

        <section class="content-section" id="service-tiers">
            <h2>Vendor Service Tiers Compared</h2>
            <p>Choose the right tier based on internal capability and risk tolerance. Most Indian SMEs find the Standard tier matches their needs at the right price point.</p>
            <h3>Basic Tier (~₹250 PEPM)</h3>
            <p>Limited to salary calculation, payslip generation, and bank transfer file preparation. Statutory compliance — PF challan, ESI, TDS, professional tax filings — remains the employer's responsibility. Best fit when the employer has a strong in-house compliance team and only needs processing automation. Risk: any compliance error attributable to in-house team, not vendor.</p>
            <h3>Standard Tier (~₹500 PEPM)</h3>
            <p>The most popular tier. Adds full statutory compliance to Basic — PF Electronic Challan-cum-Return upload, ESIC challan, TDS deduction and Form 24Q filing, professional tax remittance and quarterly returns, Labour Welfare Fund. Vendor takes operational responsibility for accurate filings; employer retains principal compliance liability per <a href="https://www.epfindia.gov.in/" rel="noopener" target="_blank">EPFO regulations</a> and <a href="https://www.esic.gov.in/" rel="noopener" target="_blank">ESIC norms</a>. Suits companies with internal HR but limited dedicated payroll capability.</p>
            <h3>Full-Service Tier (~₹1,200 PEPM)</h3>
            <p>Standard + employee helpdesk for payroll queries, leave and reimbursement management, Form 16 distribution to all employees by 15 June, audit support during income tax / labour audits, and statutory compliance advisory on changes. Best fit for companies without dedicated HR capability — typical buyers include foreign-owned subsidiaries, fast-growing startups, and SMEs preferring zero-touch payroll.</p>
            <h3>Comparison Across Tiers</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Function</th><th>Basic</th><th>Standard</th><th>Full</th></tr>
                </thead>
                <tbody>
                    <tr><td>Salary calculation + payslip</td><td>✓</td><td>✓</td><td>✓</td></tr>
                    <tr><td>Bank file preparation</td><td>✓</td><td>✓</td><td>✓</td></tr>
                    <tr><td>PF / ESI challan filing</td><td>—</td><td>✓</td><td>✓</td></tr>
                    <tr><td>TDS deduction + Form 24Q</td><td>—</td><td>✓</td><td>✓</td></tr>
                    <tr><td>Professional tax + LWF</td><td>—</td><td>✓</td><td>✓</td></tr>
                    <tr><td>Form 16 issuance</td><td>—</td><td>+ extra fee</td><td>✓</td></tr>
                    <tr><td>Employee helpdesk</td><td>—</td><td>—</td><td>✓</td></tr>
                    <tr><td>Audit support</td><td>—</td><td>+ extra fee</td><td>✓</td></tr>
                    <tr><td>Compliance advisory</td><td>—</td><td>—</td><td>✓</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="evaluation">
            <h2>Vendor Evaluation Framework</h2>
            <p>Six-dimension framework for evaluating payroll outsourcing vendors before signing. Each dimension carries roughly equal weight; a vendor scoring poorly on any one should be deprioritised.</p>
            <h3>Dimension 1: Pricing Transparency</h3>
            <p>Demand a sample invoice for one employee at your salary band before signing. Verify each line item — base PEPM, multi-state surcharge, off-cycle processing fee, year-end Form 16 charges, audit support hourly rate, integration fees, and any setup fees. Reputable vendors disclose all line items upfront. Hidden fees can add 20-30% to the headline PEPM.</p>
            <h3>Dimension 2: Compliance Track Record</h3>
            <p>Ask for client references in your industry and size band. Specifically inquire about late filing incidents in the past 24 months, accuracy rate in payroll calculations, and resolution time for errors. Reputable vendors maintain 99%+ accuracy and 1-2 errors per 1000 payslips. Visit the <a href="https://www.incometax.gov.in/iec/foportal/" rel="noopener" target="_blank">Income Tax portal</a> to verify the vendor has clean TAN-level compliance.</p>
            <h3>Dimension 3: Data Security &amp; DPDP Compliance</h3>
            <p>India's Digital Personal Data Protection Act 2023 has elevated payroll data security from optional to mandatory. The employer remains the data fiduciary regardless of outsourcing — vendors are data processors. Verify vendor's ISO 27001 certification, SOC 2 Type II audit, encryption at rest and in transit, role-based access controls, and breach notification protocol. Multi-tenancy architectures with proper data segregation matter.</p>
            <h3>Dimension 4: Scalability</h3>
            <p>Confirm the vendor can handle your projected 3-year headcount growth without forcing a platform migration. Verify multi-state coverage if you operate or plan to operate beyond a single state. Check for multi-entity capability if you have or will have multiple legal entities. Ask about handling of contractor payments alongside employee payroll under unified workflow.</p>
            <h3>Dimension 5: Response Time SLA</h3>
            <p>Lock in service levels: 24-hour response for non-urgent queries, 4-hour response for urgent issues, named account manager (not generic ticket queue), monthly QBR / quarterly business review, and clear escalation matrix. Reputable vendors maintain 1 dedicated person per 40-50 client employees for personalized service.</p>
            <h3>Dimension 6: Exit Clause</h3>
            <p>Lock in exit terms upfront: 30-60 day notice period, full data portability in standard format (Excel + JSON), no exit penalty, parallel-run support during transition to new vendor or in-house team, retention of historical data for 7 years per Income Tax Act requirements. Vendors with multi-year lock-ins and exit penalties signal weak product-market fit.</p>
        </section>

        <section class="content-section" id="hidden-costs">
            <h2>Hidden Costs &amp; Risks</h2>
            <p>Beyond the headline PEPM and obvious line items, several costs can creep into the final bill. Awareness upfront avoids budget surprises.</p>
            <h3>Off-Cycle Payroll Surcharges</h3>
            <p>Standard pricing covers one regular monthly payroll cycle. Off-cycle runs — bonuses, severance, mid-month adjustments, retroactive corrections — typically cost ₹2,000-₹10,000 per off-cycle. Most companies need 2-4 off-cycle runs per year. Negotiate inclusion of 2-3 off-cycles in the annual contract, or push the rate down to ₹1,000-₹2,000 per off-cycle.</p>
            <h3>Compliance Surcharges</h3>
            <p>Year-end Form 16 distribution: ₹100-₹300 per employee. POSH annual report support: ₹15,000-₹50,000. Income tax audit support: ₹50,000-₹2,00,000 per audit. Labour audit support: ₹25,000-₹1,00,000. Some vendors include all in Full-Service tier; others charge separately. Always confirm in the master service agreement.</p>
            <h3>Integration Cost</h3>
            <p>HRMS integration with existing platforms (Keka, GreytHR, custom systems) typically free for standard connectors but ₹25,000-₹1,00,000 for custom integrations. ERP integration (SAP, Oracle) costs ₹1-3 lakh as project. Always test integration during the trial period before committing to the full engagement.</p>
            <h3>DPDP Act Risk Premium</h3>
            <p>Under the Digital Personal Data Protection Act 2023, the employer remains the data fiduciary even after outsourcing. Vendors are data processors. A breach at the vendor exposes the employer to penalty up to ₹250 crore under the DPDP Act. Verify vendor's DPDP readiness, breach notification protocol, and indemnity clauses in the contract. This is non-negotiable in 2026.</p>
            <h3>Vendor Concentration Risk</h3>
            <p>Single-vendor dependency creates concentration risk. If the vendor faces operational failure, financial distress, or compliance issues, your payroll continuity is impaired. Diversify by maintaining basic in-house capability, retaining 12 months of historical payroll data offline, and having a backup vendor identified in advance. The 2-week parallel-run capability with an alternate vendor is worth the modest extra cost.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How much does payroll outsourcing cost in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Payroll outsourcing in India costs between ₹150 and ₹2,500 per employee per month in 2026 depending on service tier. Basic processing covering salary calculation and payslips runs ₹150-₹400 PEPM. Standard service with full statutory compliance for PF, ESI, professional tax and TDS runs ₹300-₹800 PEPM. Full-service managed payroll with HR support runs ₹800-₹2,500 PEPM. Most mid-market Indian companies pay ₹300-₹800 PEPM. Volume discounts of 15-30% kick in above 500 employees.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When does payroll outsourcing make economic sense?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Payroll outsourcing makes economic sense for most Indian companies under 100 employees, where the fixed cost of an in-house payroll executive cannot be efficiently amortised. Between 100 and 500 employees, the decision depends on operational complexity, multi-state presence and compliance risk tolerance. Above 500 employees a hybrid model is usually optimal — in-house payroll team for processing with vendor support for filings and audit. Most outsourcing arrangements yield 30-40% savings versus in-house for SMEs.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What costs go into in-house payroll?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">In-house payroll costs comprise five components: salary of payroll executive at proportionate full-time equivalent allocation (₹3-15 lakh per year), payroll software at ₹50-₹200 per employee per month (Keka, GreytHR, Zoho), external CA quarterly review fee at ₹15,000-₹50,000 per quarter, statutory compliance penalty risk reserve based on historical late filing experience, and management oversight overhead. The total typically runs 1.5-3% of total payroll for SMEs and falls to 0.5-1% for larger organisations.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What hidden costs are in payroll outsourcing contracts?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Common hidden costs in payroll outsourcing include one-time setup fees of ₹10,000-₹50,000 for data migration and system configuration, off-cycle payroll processing at ₹2,000-₹10,000 per off-cycle run, custom report generation at ₹5,000-₹25,000 per report, multi-state compliance surcharges at 15-30% above base PEPM, year-end Form 16 distribution charges at ₹100-₹300 per employee, audit support charges, and HRMS integration fees. Always demand a detailed sample invoice before signing the master service agreement.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Does outsourcing transfer compliance liability to the vendor?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. The Indian employer remains the principal employer and data fiduciary for all statutory compliance, including PF, ESI, TDS, professional tax and Labour Welfare Fund. The vendor acts as a service provider on the employer's behalf. Penalties for non-compliance fall on the employer, who can recover damages from the vendor under contract. Reputable vendors maintain professional indemnity insurance covering errors and omissions. The Digital Personal Data Protection Act 2023 strengthens this — employer is the data fiduciary regardless of outsourcing.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the typical break-even employee count?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Typical break-even where in-house payroll cost equals vendor cost falls in the 30-50 employee range for SMEs in tier-1 cities and 50-80 employees in tier-2 cities where executive salaries are lower. Below 30 employees, outsourcing almost always wins because the in-house executive's fixed cost cannot be spread thin enough. Above 80-100 employees, an in-house team becomes economically viable but compliance complexity often justifies retaining a vendor as a hybrid arrangement.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does the four Labour Codes change the outsourcing calculus?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The four Labour Codes effective 21 November 2025 increase compliance complexity through unified wage definitions requiring basic to be at least 50% of CTC, expanded gratuity coverage to fixed-term employees after one year, and impending two-day full-and-final settlement timelines. Manual or Excel-based in-house payroll struggles with these complexities. Established outsourcing vendors update their systems and processes proactively, making outsourcing more attractive for companies without robust internal compliance capabilities. The Codes have raised the cost-of-error meaningfully.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Can I outsource only part of payroll?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes, hybrid arrangements are common. Typical splits include: in-house team for permanent employees with vendor handling contract employees, in-house headquarters payroll with vendor for branch offices, in-house processing with vendor for compliance filings, or in-house calculation with vendor for software and statutory portal management. Hybrid setups suit companies with 100-500 employees that have invested in in-house capability but want vendor expertise for specific challenges. Cost typically falls between full-in-house and full-outsource.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the typical setup time for payroll outsourcing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Setup time for payroll outsourcing in India typically ranges from 2 to 6 weeks. Basic setup with simple salary structures and single-state operations completes in 2 weeks, including data migration, salary structure configuration, parallel payroll testing and go-live. Complex setups with multi-state operations, intricate salary structures, integrations with HRMS and existing systems, and multiple legal entities take 4-6 weeks. Reputable vendors run 1-2 parallel payroll cycles before full cutover to ensure accuracy and identify edge cases.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How do I evaluate payroll vendors in India?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Evaluate payroll vendors on six dimensions: pricing transparency including all hidden charges, compliance accuracy track record with client references, data security including ISO 27001 certification and DPDP Act readiness, scalability across employee count and multi-state operations, response time for queries (typically 24 hours for non-urgent, 4 hours for urgent), and exit clause flexibility allowing data portability and parallel running during transition. Always ask for a sample invoice and parallel-run the vendor's calculations against current in-house processing before signing.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What compliance penalties apply to payroll errors?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Payroll error penalties stack quickly. Late TDS deposit attracts 1.5% per month interest plus 30% expense disallowance under Section 40(a)(ia). Late PF deposit attracts 12% interest plus 5-25% damages under Section 14B. Late ESI similarly. Form 24Q late filing attracts ₹200/day u/s 234E plus penalty up to ₹1 lakh u/s 271H. POSH report non-filing attracts up to ₹50,000 plus business licence cancellation. Missing one month of compliance for a 50-employee company can accumulate ₹15K-₹40K in 6 months.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Is software-only payroll cheaper than full outsourcing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Software-only payroll appears cheaper at ₹50-₹200 per employee per month versus ₹300-₹800 PEPM for managed services, but the savings are illusory if the company lacks dedicated payroll expertise. Software automates calculation but does not file PF, ESI, TDS or PT returns — that requires human attention to deadlines and forms. For companies under 50 employees without a dedicated payroll executive, software-only typically incurs hidden costs through compliance errors and missed deadlines that exceed the savings versus managed outsourcing.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Should startups outsource payroll from day one?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Most Indian startups should outsource payroll from day one until reaching 30-40 employees, then evaluate. The reasoning: founder time is expensive, compliance errors at small scale create disproportionate distraction, vendor pricing of ₹3,000-₹10,000 per month for under 20 employees is far cheaper than founder or executive time spent on payroll. Once the team reaches 30-40 employees and warrants a dedicated HR person, the equation can be reassessed based on the HR person's bandwidth and compliance complexity.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is included in basic vs full-service payroll outsourcing?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Basic payroll outsourcing covers salary calculation, payslip generation and bank file preparation only. Standard payroll adds full statutory compliance — PF and ESI challan and ECR submission, TDS deduction and Form 24Q filing, professional tax remittance and returns, Labour Welfare Fund contribution. Full-service adds employee helpdesk for payroll queries, leave and reimbursement management, Form 16 distribution, audit support, and statutory compliance advisory. Most mid-market companies opt for Standard tier; full-service suits companies without internal HR capability.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How does multi-state operation affect outsourcing cost?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Multi-state operations increase payroll outsourcing cost by 15-30% above the base PEPM rate. Each state has different professional tax slabs, Labour Welfare Fund schedules, Shops and Establishments Act requirements, and minimum wage rules. Vendors charge for the additional compliance complexity including multi-state PT registration tracking, separate LWF remittance schedules, state-specific Form 24Q filings, and multi-state minimum wage monitoring. For 3+ state operations, the surcharge often reaches 25-40% but eliminates the in-house need for state-specific compliance expertise.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Outsource Payroll?</h3>
            <p>Patron Accounting runs payroll for 200+ companies. Fixed-fee engagement starting ₹250 PEPM with named CA point of contact.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Payroll%20Outsourcing%20ROI%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Payroll%20Outsourcing%20ROI%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/payroll-management-services" class="sidebar-link">Payroll Management<span class="arrow">→</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing<span class="arrow">→</span></a>
            <a href="/pf-registration" class="sidebar-link">PF Registration<span class="arrow">→</span></a>
            <a href="/esi-registration" class="sidebar-link">ESI Registration<span class="arrow">→</span></a>
            <a href="/professional-tax-registration" class="sidebar-link">Professional Tax<span class="arrow">→</span></a>
            <a href="/payroll-services-for-it-and-software-industry" class="sidebar-link">IT/SaaS Payroll<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/payroll-compliance-calendar" class="sidebar-link">Payroll Compliance Calendar<span class="arrow">→</span></a>
            <a href="/tools/india-employee-total-cost-calculator" class="sidebar-link">Employee Total Cost Calculator<span class="arrow">→</span></a>
            <a href="/tools/india-eor-cost-calculator" class="sidebar-link">India EOR Cost Calculator<span class="arrow">→</span></a>
            <a href="/tools/take-home-salary-calculator" class="sidebar-link">Take-Home Salary Calculator<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/payroll-setup-india-comprehensive-guide-for-businesses" class="sidebar-link">Payroll Setup Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/esic-registration-online-india-2025" class="sidebar-link">ESIC Registration Online<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026" class="sidebar-link">Annual Compliance Calendar<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune · Mumbai · Delhi · Gurugram</div>
    <div class="trust">200+ Indian companies trust Patron for payroll outsourcing</div>
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
        var sign = v < 0 ? '−' : '';
        return sign + '₹' + Math.abs(v).toLocaleString('en-IN');
    }

    // Vendor service tier defaults (PEPM in INR)
    var TIER_PEPM = {
        'basic': 250,
        'standard': 500,
        'full': 1200,
        'custom': 0  // user provides
    };

    // Multi-state multiplier
    var STATE_MULTIPLIER = {
        'single': 1.0,
        'multi': 1.20,
        'many': 1.30
    };
    var STATE_LABEL = {
        'single': 'Single state',
        'multi': '2-3 states',
        'many': '4+ states'
    };

    var TIER_LABEL = {
        'basic': 'Basic',
        'standard': 'Standard',
        'full': 'Full-Service',
        'custom': 'Custom'
    };

    var state = {
        tier: 'standard',
        states: 'single'
    };

    // Toggle handlers
    document.querySelectorAll('.toggle-btn[data-tier]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-tier]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.tier = btn.getAttribute('data-tier');
            $('custom-pepm-group').style.display = state.tier === 'custom' ? '' : 'none';
        });
    });
    document.querySelectorAll('.toggle-btn[data-states]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-states]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            state.states = btn.getAttribute('data-states');
        });
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
        var employees = parseInt($('employees').value) || 0;
        var execFte = parseINR($('exec-fte').value) || 0;
        var execSalary = parseINR($('exec-salary').value) || 0;
        var softwarePepm = parseINR($('software-pepm').value) || 0;
        var caQuarterly = parseINR($('ca-quarterly').value) || 0;
        var penaltyReserve = parseINR($('penalty-reserve').value) || 0;
        var oversightPct = parseINR($('oversight-pct').value) || 0;
        var setupFee = parseINR($('setup-fee').value) || 0;
        var customPepm = parseINR($('custom-pepm').value) || 0;

        if (employees <= 0) {
            alert('Please enter a valid employee count.');
            return;
        }

        // Vendor PEPM
        var vendorPepm = state.tier === 'custom' ? customPepm : TIER_PEPM[state.tier];
        var stateMult = STATE_MULTIPLIER[state.states];
        var effectiveVendorPepm = vendorPepm * stateMult;

        // ============ IN-HOUSE COST ============
        var labourCost = (execFte / 100) * execSalary;
        var softwareCost = softwarePepm * employees * 12;
        var caCost = caQuarterly * 4;
        var oversightCost = (oversightPct / 100) * execSalary;
        var inHouseTotal = labourCost + softwareCost + caCost + penaltyReserve + oversightCost;

        // ============ OUTSOURCED COST ============
        var vendorFee = effectiveVendorPepm * employees * 12;
        var setupAmort = setupFee / 3; // amortise over 36 months
        var residualOversight = 0.10 * execSalary; // 10% of executive cost retained
        var reducedPenalty = penaltyReserve * 0.20; // vendor reduces 80% of risk
        var outsourcedTotal = vendorFee + setupAmort + residualOversight + reducedPenalty;

        // ============ ANALYSIS ============
        var netSavings = inHouseTotal - outsourcedTotal;
        var savingsPct = inHouseTotal > 0 ? (netSavings / inHouseTotal) * 100 : 0;
        var roi = outsourcedTotal > 0 ? (netSavings / outsourcedTotal) * 100 : 0;

        // Break-even calculation
        // Solve: inHouseFixed + softwarePepm × N × 12 = outsourceFixed + vendorPepm × N × 12 × mult
        // N = (inHouseFixed - outsourceFixed) / (vendorPepm × 12 × mult - softwarePepm × 12)
        var inHouseFixed = labourCost + caCost + penaltyReserve + oversightCost;
        var outsourceFixed = setupAmort + residualOversight + reducedPenalty;
        var perEmpDiff = (effectiveVendorPepm - softwarePepm) * 12;
        var breakEven = '—';
        if (perEmpDiff > 0) {
            var be = (inHouseFixed - outsourceFixed) / perEmpDiff;
            if (be > 0) breakEven = Math.ceil(be);
            else breakEven = '< current';
        } else if (perEmpDiff < 0) {
            breakEven = 'Always outsource';
        }

        // Per-employee costs
        var ihPerEmp = inHouseTotal / employees;
        var osPerEmp = outsourcedTotal / employees;
        var effectivePepm = osPerEmp / 12;

        // Verdict
        var verdictClass = '';
        var verdictHeadline = '';
        var verdictSub = '';
        var recommendation = '';
        if (savingsPct >= 30) {
            verdictClass = '';
            verdictHeadline = 'STRONGLY OUTSOURCE — ' + fmtINR(netSavings) + ' annual savings';
            verdictSub = 'Outsourced cost is ' + savingsPct.toFixed(1) + '% lower than in-house. Strong financial case for outsourcing at current headcount.';
            recommendation = 'OUTSOURCE';
        } else if (savingsPct >= 10) {
            verdictClass = '';
            verdictHeadline = 'OUTSOURCE — Modest ' + fmtINR(netSavings) + ' savings';
            verdictSub = 'Outsourcing saves ' + savingsPct.toFixed(1) + '%. Confirm vendor reliability and exit terms before signing.';
            recommendation = 'OUTSOURCE';
        } else if (savingsPct >= -10) {
            verdictClass = 'amber';
            verdictHeadline = 'HYBRID / TOSS-UP — ' + fmtINR(Math.abs(netSavings)) + ' difference';
            verdictSub = 'In-house and vendor are nearly equal. Consider hybrid (vendor for filings + in-house for processing) or pick on non-financial factors.';
            recommendation = 'HYBRID';
        } else {
            verdictClass = 'blue';
            verdictHeadline = 'STAY IN-HOUSE — ' + fmtINR(Math.abs(netSavings)) + ' cheaper internally';
            verdictSub = 'In-house is ' + Math.abs(savingsPct).toFixed(1) + '% cheaper. Keep current setup; revisit if headcount, complexity or vendor pricing changes.';
            recommendation = 'IN-HOUSE';
        }

        // Alerts
        var alerts = [];
        if (employees < 25) {
            alerts.push({type: 'success', html: '<strong>Small team advantage:</strong> Below 25 employees, outsourcing almost always wins. The fixed cost of an in-house payroll executive cannot be amortised efficiently. Expect 30-50% savings versus dedicating internal capacity.'});
        }
        if (employees > 200) {
            alerts.push({type: 'info', html: '<strong>Large team threshold:</strong> Above 200 employees, an in-house payroll team becomes economically viable. Consider hybrid models — vendor for specific challenges (multi-state filings, year-end Form 16, audit support) with internal team for routine processing.'});
        }
        if (state.states !== 'single') {
            alerts.push({type: 'warn', html: '<strong>Multi-state surcharge applied:</strong> ' + STATE_LABEL[state.states] + ' operations attract a ' + ((stateMult - 1) * 100).toFixed(0) + '% surcharge on vendor PEPM. Each state adds professional tax slabs, LWF schedules, S&E Act registrations and minimum wage rules to track. Outsourcing reduces this complexity but at a price.'});
        }
        if (penaltyReserve >= 50000) {
            alerts.push({type: 'warn', html: '<strong>High penalty exposure:</strong> Compliance penalty reserve of ' + fmtINR(penaltyReserve) + '/year suggests recurring late filing issues. Outsourcing typically reduces this by 80% through dedicated calendar management. Factor the avoided penalty into ROI calculation.'});
        }
        if (vendorPepm > 1500 && state.tier === 'custom') {
            alerts.push({type: 'warn', html: '<strong>Premium PEPM rate — verify value:</strong> ' + fmtINR(vendorPepm) + ' PEPM is at the top of the market range. Premium pricing is justified only for full-service tier with dedicated account management, named CA point of contact, and substantial advisory bandwidth. Compare with Standard tier (₹400-₹700 PEPM) before committing.'});
        }
        if (execFte < 30 && employees > 50) {
            alerts.push({type: 'warn', html: '<strong>Under-resourced in-house payroll:</strong> ' + execFte + '% FTE allocation for ' + employees + ' employees suggests the executive is overloaded. Compliance errors are likely under this configuration. Either increase FTE allocation or outsource — current setup carries hidden compliance risk not fully captured in the penalty reserve.'});
        }
        if (employees > 0 && employees <= 100 && savingsPct >= 30) {
            alerts.push({type: 'success', html: '<strong>Sweet spot for outsourcing:</strong> At ' + employees + ' employees with ' + savingsPct.toFixed(0) + '% savings, you are in the most favourable band for outsourcing. The decision is rarely closer than this — proceed with vendor evaluation.'});
        }
        if (savingsPct < -20 && employees > 200) {
            alerts.push({type: 'info', html: '<strong>Scale advantage:</strong> Your in-house team has scaled efficiently. At ' + employees + ' employees, the economies of running internal payroll have surpassed vendor pricing. Continue in-house but consider vendor support for specific functions like year-end Form 16 or audit support.'});
        }

        // Render verdict
        $('verdict').className = 'verdict-card' + (verdictClass ? ' ' + verdictClass : '');
        $('verdict-headline').textContent = verdictHeadline;
        $('verdict-sub').textContent = verdictSub;
        $('v-savings').textContent = fmtINR(netSavings);
        $('v-savings').className = 'verdict-grid-value' + (netSavings >= 0 ? ' pos' : ' neg');
        $('v-pct').textContent = (savingsPct >= 0 ? '+' : '') + savingsPct.toFixed(1) + '%';
        $('v-pct').className = 'verdict-grid-value' + (savingsPct >= 0 ? ' pos' : ' neg');
        $('v-be').textContent = breakEven === '—' || typeof breakEven === 'string' ? breakEven : breakEven + ' emp';

        // Alerts
        var ah = '';
        for (var a = 0; a < alerts.length; a++) ah += '<div class="info-banner ' + alerts[a].type + '">' + alerts[a].html + '</div>';
        $('alerts').innerHTML = ah;

        // Visual bars (relative scaling)
        var maxCost = Math.max(inHouseTotal, outsourcedTotal);
        $('bar-inhouse').style.width = ((inHouseTotal / maxCost) * 100) + '%';
        $('bar-vendor').style.width = ((outsourcedTotal / maxCost) * 100) + '%';
        $('bar-inhouse-val').textContent = fmtINR(inHouseTotal);
        $('bar-vendor-val').textContent = fmtINR(outsourcedTotal);

        // Comparison table
        $('r1-ih').textContent = fmtINRfull(labourCost);
        $('r1-os').textContent = '—';
        $('r2-ih').textContent = fmtINRfull(softwareCost);
        $('r2-os').textContent = fmtINRfull(vendorFee);
        $('r3-ih').textContent = fmtINRfull(caCost);
        $('r3-os').textContent = '—';
        $('r4-ih').textContent = fmtINRfull(penaltyReserve);
        $('r4-os').textContent = fmtINRfull(reducedPenalty);
        $('r5-ih').textContent = fmtINRfull(oversightCost);
        $('r5-os').textContent = fmtINRfull(residualOversight);
        $('r6-ih').textContent = '—';
        $('r6-os').textContent = fmtINRfull(setupAmort);
        $('r-total-ih').textContent = fmtINRfull(inHouseTotal);
        $('r-total-os').textContent = fmtINRfull(outsourcedTotal);

        var savingsRow = $('r-savings-row');
        if (netSavings >= 0) {
            savingsRow.className = 'savings';
            $('r-savings').textContent = '+ ' + fmtINRfull(netSavings) + ' (' + savingsPct.toFixed(1) + '% saved)';
        } else {
            savingsRow.className = 'savings neg';
            $('r-savings').textContent = '− ' + fmtINRfull(Math.abs(netSavings)) + ' (' + savingsPct.toFixed(1) + '% increase)';
        }

        // Summary cards
        $('s-ih-per-emp').textContent = fmtINR(ihPerEmp) + '/yr';
        $('s-os-per-emp').textContent = fmtINR(osPerEmp) + '/yr';
        $('s-pepm').textContent = '₹' + Math.round(effectivePepm).toLocaleString('en-IN') + ' PEPM';
        $('s-pct-of-payroll').textContent = (((Math.min(inHouseTotal, outsourcedTotal)) / (employees * 600000 + 1)) * 100).toFixed(1) + '%';
        $('s-roi').textContent = roi >= 0 ? '+' + roi.toFixed(1) + '%' : roi.toFixed(1) + '%';
        $('s-rec').textContent = recommendation;

        $('card-roi').className = 'summary-card ' + (roi >= 30 ? 'success' : (roi >= 0 ? '' : 'danger'));

        // Show
        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        $('employees').value = '50';
        $('exec-fte').value = '50';
        $('exec-salary').value = '600000';
        $('software-pepm').value = '100';
        $('ca-quarterly').value = '20000';
        $('penalty-reserve').value = '25000';
        $('oversight-pct').value = '15';
        $('setup-fee').value = '25000';
        $('custom-pepm').value = '500';
        document.querySelectorAll('.toggle-btn[data-tier]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-tier="standard"]').classList.add('active');
        state.tier = 'standard';
        $('custom-pepm-group').style.display = 'none';
        document.querySelectorAll('.toggle-btn[data-states]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-states="single"]').classList.add('active');
        state.states = 'single';
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
