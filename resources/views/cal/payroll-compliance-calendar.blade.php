@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Payroll Compliance Calendar India | Due Dates 2026</title>
    <meta name="description" content="Payroll compliance calendar India 2026: TDS, PF, ESI, professional tax, LWF &amp; Form 16 due dates by month and state, with late filing penalties. Free CA tool.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/payroll-compliance-calendar/">
    <meta property="og:title" content="India Payroll Compliance Calendar 2026 — Due Dates">
    <meta property="og:description" content="All India payroll compliance deadlines: TDS, PF, ESI, PT, LWF, Form 16, statutory bonus. State-wise filtering, urgency colour coding, late penalty info.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/payroll-compliance-calendar">
    <meta property="og:image" content="/tools/og/payroll-compliance-calendar.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="India Payroll Compliance Calendar 2026 — Due Dates">
    <meta name="twitter:description" content="All payroll compliance deadlines for India. TDS, PF, ESI, PT, LWF, Form 16, bonus. State-wise. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/payroll-compliance-calendar.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "India Payroll Compliance Calendar",
      "description": "India Payroll Compliance Calendar lists every statutory payroll due date applicable to an Indian employer through Financial Year 2025-26 and beyond, covering monthly, quarterly, half-yearly and annual filings under Indian labour and tax laws. The tool covers Tax Deducted at Source on salary under Section 192 of the Income-tax Act, 1961 (deposit by the seventh of the following month, with March deposits due by the thirtieth of April), Provident Fund Electronic Challan-cum-Return submission to the Employees Provident Fund Organisation by the fifteenth of the following month, Employees State Insurance contribution remittance by the fifteenth of the following month, professional tax remittance and return at state-specific rates and dates under Article 276 of the Constitution of India, Labour Welfare Fund contribution at state-specific half-yearly or annual rates, statutory bonus payment under the Payment of Bonus Act, 1965 within eight months of the close of the accounting year, Form 16 issuance to employees by the fifteenth of June for the immediately preceding financial year per Rule 31 of the Income-tax Rules, quarterly Form 24Q return for salary TDS by the thirty-first of July, October, January and May for the four quarters of the financial year, the annual report under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013 by the thirty-first of January, and the annual return ER-1 by the thirtieth of April. The tool incorporates state-specific variations across twelve major Indian states for professional tax remittance dates and Labour Welfare Fund schedules, the four Labour Codes effective from 21 November 2025 — the Code on Wages, 2019, the Industrial Relations Code, 2020, the Code on Social Security, 2020 and the Occupational Safety, Health and Working Conditions Code, 2020 — and the late filing penalty regime including interest at one and a half per cent per month on delayed TDS deposit under Section 201, twelve per cent per annum interest plus damages of five to twenty five per cent on delayed Provident Fund contribution under Section 14B of the Provident Funds Act, twelve per cent per annum simple interest on delayed Employees State Insurance contribution, and state-specific penalty rates for delayed professional tax remittance.",
      "url": "/tools/payroll-compliance-calendar",
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
        {"@type": "ListItem", "position": 3, "name": "Payroll Compliance Calendar", "item": "/tools/payroll-compliance-calendar"}
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
          "name": "When is TDS on salary due to be deposited?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS on salary deducted under Section 192 of the Income-tax Act 1961 is due to be deposited by the 7th of the following month. For example, TDS deducted from May salary must be deposited by 7 June. The exception is March TDS — for March salary, TDS deposit is due by 30 April rather than 7 April. Late deposit attracts interest at 1.5% per month under Section 201 plus penalty under Section 271C."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for PF monthly challan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Provident Fund Electronic Challan-cum-Return (ECR) is due by the 15th of the following month. For example, PF for May wages is due by 15 June. The ECR captures employee and employer contributions of 12% each, EDLI charges of 0.5% on capped wages and admin charges of 0.5% on capped wages. Late deposit attracts simple interest at 12% per annum under Section 7Q plus damages of 5% to 25% under Section 14B of the Employees Provident Funds Act."
          }
        },
        {
          "@type": "Question",
          "name": "When is the ESI monthly contribution due?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Employees State Insurance contribution is due by the 15th of the following month. For example, ESI for May wages is due by 15 June. The employer contributes 3.25% of gross wages and the employee contributes 0.75%, applicable to employees with gross monthly wages of ₹21,000 or below. Late payment attracts simple interest at 12% per annum, plus damages of 5% to 25% depending on the period of delay under Regulation 31 of the ESI General Regulations 1950."
          }
        },
        {
          "@type": "Question",
          "name": "What are the quarterly TDS return due dates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 24Q for salary TDS and Form 26Q for non-salary TDS are filed quarterly with these due dates: Quarter 1 covering April-June is due by 31 July; Quarter 2 covering July-September is due by 31 October; Quarter 3 covering October-December is due by 31 January; Quarter 4 covering January-March is due by 31 May. Late filing attracts a fee of ₹200 per day under Section 234E plus penalty under Section 271H ranging from ₹10,000 to ₹1,00,000."
          }
        },
        {
          "@type": "Question",
          "name": "When must Form 16 be issued to employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 16, the TDS certificate for salary, must be issued to employees by 15 June for the immediately preceding financial year ending 31 March, per Rule 31 of the Income-tax Rules 1962. Form 16 has two parts — Part A is generated from the TRACES portal containing TDS details, and Part B is prepared by the employer with salary breakup, deductions and tax computation. Late issuance attracts penalty of ₹100 per day per employee under Section 272A(2)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the deadline for paying statutory bonus?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 19 of the Payment of Bonus Act 1965, statutory bonus must be paid within 8 months of the close of the accounting year. For an accounting year ending 31 March, the bonus must be paid by 30 November. The minimum bonus is 8.33% and the maximum is 20% of basic plus dearness allowance, Applies to employees earning ≤₹21,000/month in 20+ employee establishments. Form D bonus return must be filed within 30 days of payment."
          }
        },
        {
          "@type": "Question",
          "name": "How do professional tax due dates vary by state?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional tax monthly remittance dates vary by state: Maharashtra by end of next month, Karnataka by 20th, Tamil Nadu half-yearly by 1 April and 1 October, Telangana by 10th, West Bengal by 21st, Gujarat by 15th, Andhra Pradesh by 10th, Odisha by 21st, Madhya Pradesh by 10th. Delhi, Haryana, Punjab and Uttar Pradesh do not levy professional tax. Late payment attracts interest at 1.25% to 2% per month and penalty up to 50% of tax due, varying by state legislation."
          }
        },
        {
          "@type": "Question",
          "name": "When is Labour Welfare Fund contribution due?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Labour Welfare Fund contribution dates vary by state. Maharashtra requires half-yearly remittance by 31 January (for July to December period) and 31 July (for January to June period). Karnataka requires annual remittance by 15 January for the previous calendar year. Tamil Nadu requires annual contribution by 31 January. Gujarat requires by 15 July. West Bengal requires half-yearly by 31 January and 31 July. Several states have no LWF — Delhi, Haryana and Uttar Pradesh."
          }
        },
        {
          "@type": "Question",
          "name": "What is the POSH annual report deadline?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The annual report under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act 2013 must be submitted to the District Officer by 31 January every year for complaints received in the previous calendar year ending 31 December. The report covers number of complaints filed, disposed of, pending beyond 90 days, and workshops conducted. Failure to submit attracts penalty up to ₹50,000, and repeat offences may lead to cancellation of business licence."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late TDS deposit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late TDS deposit attracts interest at 1.5% per month under Section 201(1A), calculated from the date of TDS deduction to the date of actual deposit, even for partial month. In addition, penalty under Section 271C may be imposed equal to the amount of TDS not deposited. Disallowance of expenditure under Section 40(a)(ia) may also apply for non-deduction or late deposit, disallowing 30% of the expense. Prosecution under Section 276B is possible for wilful default."
          }
        },
        {
          "@type": "Question",
          "name": "Are there separate TDS deposit dates for non-government deductors?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS deposit dates apply uniformly to all deductors except for government departments. Non-government deductors deposit TDS by the 7th of the following month, with March TDS due by 30 April. Government departments paying without challan deposit on the same day TDS is deducted; with challan, by the 7th of the following month. The unified date applies to all sections including 192 (salary), 194A (interest), 194C (contracts), 194J (professional fees), and 194Q (purchase of goods)."
          }
        },
        {
          "@type": "Question",
          "name": "When must investment proofs be submitted by employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Investment proof submission deadline is set internally by the employer, typically falling between 28 January and 28 February each year. Most employers issue a written investment declaration form in April-May for projected investments, then collect physical or digital proof in January-February before final tax computation for Form 16. Late submission means the employer must compute final TDS based on actual proofs submitted, often resulting in a tax shortfall recovered from March salary or refunded by the employee from their ITR."
          }
        },
        {
          "@type": "Question",
          "name": "Which payroll deadlines fall in March each year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "March is the busiest payroll month. Key deadlines include: 7 March for February TDS deposit; 15 March for February PF and ESI; 31 March for full-year PT in Maharashtra; 31 March for the financial year close requiring tax projection finalisation, investment proof verification, leave encashment provision, gratuity actuarial valuation, and bonus accrual booking. The very next month carries 30 April for March TDS deposit (year-end exception), and 30 April for the annual return ER-1."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I miss a payroll compliance deadline?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Missing payroll deadlines triggers cascading consequences: interest accrues on the unpaid amount at 12 to 18% per annum, late filing fees apply where return-based, statutory penalties apply under specific sections, expenditure disallowance under Section 40(a)(ia) for delayed TDS reduces the deductible expense by 30%, and repeat defaults can attract prosecution. The employee benefits get delayed — PF interest on contributions, gratuity service crediting and ESI claim eligibility. Always file even if late to stop the meter."
          }
        },
        {
          "@type": "Question",
          "name": "Has the new Labour Code 2025 changed payroll compliance dates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The four Labour Codes effective 21 November 2025 have not changed the existing payroll compliance dates for PF, ESI, TDS, professional tax, LWF or statutory bonus, which remain governed by the underlying source laws. The Codes have changed substantive aspects: the wages definition now requires basic to be at least 50% of CTC, raising PF and gratuity computation bases, and fixed-term employees become gratuity-eligible after 1 year. Compliance dates and forms continue under the existing schedule until further notification."
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

        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }

        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; margin-bottom: 8px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }

        .chip-group { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 8px; }
        .chip { padding: 8px 14px; background: var(--surface-alt); border: 2px solid transparent; border-radius: 20px; font-family: var(--font-body); font-size: 12px; font-weight: 600; color: var(--text-muted); cursor: pointer; transition: all 0.2s; -webkit-tap-highlight-color: transparent; user-select: none; }
        .chip * { pointer-events: none; }
        .chip:hover { background: var(--border); }
        .chip.active { background: var(--primary); color: #fff; border-color: var(--primary); }
        .chip.active.tds { background: var(--info); border-color: var(--info); }
        .chip.active.pf { background: var(--success); border-color: var(--success); }
        .chip.active.esi { background: var(--success); border-color: var(--success); }
        .chip.active.pt { background: var(--accent); color: var(--primary-dark); border-color: var(--accent); }
        .chip.active.lwf { background: var(--accent); color: var(--primary-dark); border-color: var(--accent); }
        .chip.active.bonus { background: var(--primary-light); border-color: var(--primary-light); }
        .chip.active.form16 { background: var(--info); border-color: var(--info); }
        .chip.active.annual { background: var(--primary-dark); border-color: var(--primary-dark); }

        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }

        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        .summary-stats { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 12px; margin-bottom: 24px; }
        @media (max-width: 600px) { .summary-stats { grid-template-columns: 1fr; } }
        .stat-card { background: var(--card); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); text-align: center; }
        .stat-card.urgent { background: #FEE2E2; border-color: var(--danger); }
        .stat-card.warning { background: #FEF3C7; border-color: var(--accent); }
        .stat-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .stat-value { font-family: var(--font-mono); font-size: 24px; font-weight: 700; color: var(--primary-dark); }
        .stat-card.urgent .stat-value { color: var(--danger); }
        .stat-card.warning .stat-value { color: #92400E; }

        .deadline-list { display: flex; flex-direction: column; gap: 12px; }
        .deadline-card { display: grid; grid-template-columns: 80px 1fr; gap: 16px; padding: 16px 18px; background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); border-left: 4px solid var(--info); transition: box-shadow 0.2s; }
        .deadline-card:hover { box-shadow: var(--shadow-sm); }
        .deadline-card.urgent { border-left-color: var(--danger); background: linear-gradient(135deg, #FEF2F2 0%, var(--card) 30%); }
        .deadline-card.warning { border-left-color: var(--accent); background: linear-gradient(135deg, #FFFBEB 0%, var(--card) 30%); }
        .deadline-card.normal { border-left-color: var(--success); }
        .deadline-card.tds { border-left-color: var(--info); }
        .deadline-card.pf { border-left-color: var(--success); }
        .deadline-card.esi { border-left-color: var(--success); }
        .deadline-card.pt { border-left-color: var(--accent); }
        .deadline-card.lwf { border-left-color: var(--accent); }
        .deadline-card.bonus { border-left-color: var(--primary-light); }
        .deadline-card.form16 { border-left-color: var(--info); }
        .deadline-card.annual { border-left-color: var(--primary-dark); }
        .deadline-date { text-align: center; padding: 8px 4px; }
        .deadline-day { font-family: var(--font-mono); font-size: 26px; font-weight: 700; color: var(--primary-dark); line-height: 1; }
        .deadline-month { font-family: var(--font-mono); font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 1px; margin-top: 4px; }
        .deadline-dow { font-family: var(--font-mono); font-size: 10px; color: var(--text-muted); margin-top: 2px; }
        .deadline-content { min-width: 0; }
        .deadline-tag { display: inline-block; font-family: var(--font-mono); font-size: 9px; font-weight: 700; padding: 3px 8px; border-radius: 10px; background: var(--surface-alt); color: var(--text-secondary); text-transform: uppercase; letter-spacing: 0.5px; margin-right: 6px; vertical-align: middle; }
        .deadline-tag.urgent { background: var(--danger); color: #fff; }
        .deadline-tag.warning { background: var(--accent); color: var(--primary-dark); }
        .deadline-name { font-size: 15px; font-weight: 700; color: var(--primary-dark); margin: 4px 0 6px; line-height: 1.3; }
        .deadline-desc { font-size: 13px; color: var(--text-secondary); margin-bottom: 8px; line-height: 1.5; }
        .deadline-meta { display: flex; flex-wrap: wrap; gap: 14px; font-size: 12px; color: var(--text-muted); }
        .deadline-meta span { display: inline-flex; align-items: center; gap: 4px; }
        .deadline-meta a { color: var(--primary-light); text-decoration: none; font-weight: 600; }
        .deadline-meta a:hover { text-decoration: underline; }
        .deadline-penalty { margin-top: 8px; font-size: 12px; color: var(--danger); padding-top: 8px; border-top: 1px dashed var(--border); }
        .deadline-penalty strong { color: var(--danger); }

        .empty-state { text-align: center; padding: 40px 20px; color: var(--text-muted); }
        .empty-state h3 { font-size: 18px; color: var(--text-secondary); margin-bottom: 8px; }

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
            .deadline-card { grid-template-columns: 70px 1fr; gap: 12px; padding: 12px 14px; }
            .deadline-day { font-size: 22px; }
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
        <a href="#calendar">Calendar</a>
        <a href="#monthly">Monthly Cycle</a>
        <a href="#quarterly">Quarterly Filings</a>
        <a href="#annual">Annual Events</a>
        <a href="#state-wise">State-wise PT/LWF</a>
        <a href="#penalties">Late Penalties</a>
        <a href="#march-rush">March/April Rush</a>
        <a href="#workflow">Workflow</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Payroll Compliance Calendar
</nav>

<header class="hero" id="calendar">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>India Payroll Compliance Calendar — <span>TDS, PF, ESI, PT &amp; More</span> Due Dates (FY 2025-26)</h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20India%20Payroll%20Compliance%20Calendar.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Payroll%20Compliance%20Calendar%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20India%20Payroll%20Compliance%20Calendar.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>This Payroll Compliance Calendar lists every statutory payroll due date applicable to an Indian employer through FY 2025-26 — <strong>monthly</strong> (TDS deposit by 7th, PF/ESI by 15th, professional tax state-wise), <strong>quarterly</strong> (Form 24Q on 31 Jul/Oct/Jan/May), <strong>half-yearly</strong> (LWF state-wise), and <strong>annual</strong> (Form 16 by 15 Jun, statutory bonus by 30 Nov, POSH report by 31 Jan, ER-1 by 30 Apr). The calendar is interactive — filter by state, by category (TDS/PF/ESI/PT/LWF/Bonus/Form 16/Annual), and by view window (next 30/60/90 days or full year). Each deadline card surfaces the form name, filing portal, and late filing penalty. Updated for the four <strong>Labour Codes effective 21 November 2025</strong>.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Compliance Calendar Filter</h2>
            <p class="calc-intro">Set your state, choose categories, and pick a view window. The calendar generates upcoming deadlines from today onwards with urgency colour coding (red for ≤7 days, amber for ≤14 days, green for further out). Each card includes the filing portal link and late penalty regime.</p>

            <noscript><div class="noscript-box">JavaScript is disabled. Please enable JavaScript to use this calendar.</div></noscript>

            <div class="calc-section-title">Configuration</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="state">State of Operation</label>
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
                    <span class="helper">Drives PT and LWF dates (state-specific). PF/ESI/TDS dates uniform.</span>
                </div>
                <div class="form-group">
                    <label>Employees in Establishment</label>
                    <div class="toggle-group">
                        <button type="button" class="toggle-btn" data-size="lt20">&lt; 20</button>
                        <button type="button" class="toggle-btn active" data-size="gte20">20+</button>
                    </div>
                    <span class="helper">Bonus Act + POSH apply at 20+ employees.</span>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 16px;">
                <label>View Window</label>
                <div class="toggle-group">
                    <button type="button" class="toggle-btn" data-window="30">Next 30 days</button>
                    <button type="button" class="toggle-btn active" data-window="90">Next 90 days</button>
                    <button type="button" class="toggle-btn" data-window="180">Next 6 months</button>
                    <button type="button" class="toggle-btn" data-window="365">Full year</button>
                </div>
            </div>

            <div class="calc-section-title">Categories</div>

            <div class="form-group" style="margin-bottom: 8px;">
                <div class="chip-group" id="cat-chips">
                    <button type="button" class="chip active tds" data-cat="tds">TDS</button>
                    <button type="button" class="chip active pf" data-cat="pf">PF</button>
                    <button type="button" class="chip active esi" data-cat="esi">ESI</button>
                    <button type="button" class="chip active pt" data-cat="pt">PT</button>
                    <button type="button" class="chip active lwf" data-cat="lwf">LWF</button>
                    <button type="button" class="chip active bonus" data-cat="bonus">Bonus</button>
                    <button type="button" class="chip active form16" data-cat="form16">Form 16</button>
                    <button type="button" class="chip active annual" data-cat="annual">Annual / POSH</button>
                </div>
                <span class="helper" style="display: block; font-size: 11px; color: var(--text-muted); margin-top: 4px;">Click chips to toggle categories. All active by default.</span>
            </div>

            <button type="button" class="btn-calculate" id="btn-generate">Generate Calendar</button>
            <button type="button" class="btn-reset" id="btn-reset">Reset Filters</button>

            <div class="result-section" id="results">
                <div class="result-divider"></div>

                <div class="summary-stats" id="summary-stats">
                    <div class="stat-card urgent" id="stat-urgent">
                        <div class="stat-label">Urgent (≤7 days)</div>
                        <div class="stat-value" id="v-urgent">0</div>
                    </div>
                    <div class="stat-card warning" id="stat-warning">
                        <div class="stat-label">Soon (≤14 days)</div>
                        <div class="stat-value" id="v-warning">0</div>
                    </div>
                    <div class="stat-card" id="stat-total">
                        <div class="stat-label">Total in Window</div>
                        <div class="stat-value" id="v-total">0</div>
                    </div>
                </div>

                <div class="deadline-list" id="deadline-list"></div>

            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — India Payroll Compliance Calendar validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20India%20Payroll%20Compliance%20Calendar.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Payroll%20Compliance%20Calendar%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20India%20Payroll%20Compliance%20Calendar%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="monthly">
            <h2>Monthly Compliance Cycle</h2>
            <p>Indian payroll has four compliance items that recur every single month for every active employer. Missing any of these triggers interest and penalty meters that are rarely worth the cash flow saved by delay.</p>
            <h3>7th of Following Month: TDS Deposit</h3>
            <p>TDS deducted from salary under Section 192 of the <a href="https://www.incometax.gov.in/iec/foportal/" rel="noopener" target="_blank">Income-tax Act 1961</a>, plus TDS deducted under all other sections (194A interest, 194C contracts, 194J professional fees, 194Q purchase of goods), must be deposited by the 7th of the following month via Challan ITNS-281. The exception is March TDS — for salary paid in March, the deposit is due by 30 April rather than 7 April. Use the e-Pay Tax facility on the income tax portal or authorised bank portals.</p>
            <h3>15th of Following Month: PF + ESI</h3>
            <p>The Provident Fund Electronic Challan-cum-Return (ECR) is uploaded to the <a href="https://www.epfindia.gov.in/" rel="noopener" target="_blank">EPFO Unified Portal</a> by the 15th of the following month. The ECR captures employee + employer 12% contribution, EDLI charges (0.5% capped) and admin charges (0.5% capped). Simultaneously, ESI contribution is filed on the <a href="https://www.esic.gov.in/" rel="noopener" target="_blank">ESIC portal</a> by the same date. These two filings together close the social security loop for the previous month's wages.</p>
            <h3>State-Specific: Professional Tax</h3>
            <p>Professional tax monthly remittance dates differ across states. Maharashtra and Karnataka are by the end of next month; Tamil Nadu is half-yearly (1 April / 1 October); Telangana / Andhra Pradesh / Madhya Pradesh by 10th; Gujarat by 15th; West Bengal / Odisha by 21st. Delhi, Haryana, Punjab and Uttar Pradesh do not levy professional tax. The calculator above uses your state to auto-populate the correct date.</p>
            <h3>If GST-Registered</h3>
            <p>For employers also registered under GST (most companies are), GSTR-1 is due by the 11th and GSTR-3B by the 20th of the following month. While not strictly "payroll" filings, these often run on the same calendar maintained by the finance team. Refer to our <a href="/tools/gst-late-fee-calculator">GST Late Fee Calculator</a> for penalty computation.</p>
        </section>

        <section class="content-section" id="quarterly">
            <h2>Quarterly Filings — Form 24Q &amp; Form 26Q</h2>
            <p>Beyond monthly TDS deposits, quarterly TDS returns must be filed to the income tax portal capturing all deductions made during the quarter. These returns enable Form 16 / 16A generation downstream and feed the annual income tax data for employees.</p>
            <table class="rate-table">
                <thead>
                    <tr><th>Quarter</th><th>Period</th><th>Form 24Q (Salary)</th><th>Form 26Q (Non-Salary)</th></tr>
                </thead>
                <tbody>
                    <tr><td>Q1</td><td>April – June</td><td>31 July</td><td>31 July</td></tr>
                    <tr><td>Q2</td><td>July – September</td><td>31 October</td><td>31 October</td></tr>
                    <tr><td>Q3</td><td>October – December</td><td>31 January</td><td>31 January</td></tr>
                    <tr><td>Q4</td><td>January – March</td><td>31 May</td><td>31 May</td></tr>
                </tbody>
            </table>
            <p>Form 27Q applies for TDS on payments to non-residents and follows the same quarterly calendar. Form 27EQ for TCS follows the same dates plus 15 days. All forms are filed at <a href="https://www.tin-nsdl.com" rel="noopener" target="_blank">TIN-NSDL</a> or through the TRACES portal of the Income Tax Department.</p>
            <h3>Late Filing Consequences</h3>
            <p>Late filing of TDS quarterly return attracts a fee of ₹200 per day under Section 234E, capped at the TDS amount. Penalty under Section 271H ranges from ₹10,000 to ₹1,00,000 for non-filing or incorrect filing. Most importantly, late or incorrect Form 24Q delays Form 16 generation, which delays employees' ITR filing and creates support escalations from the workforce.</p>
        </section>

        <div class="body-cta">
            <h3>Outsource Payroll Compliance</h3>
            <p>Patron Accounting runs end-to-end payroll for 200+ Indian companies — payslip generation, TDS deduction and deposit, PF/ESI/PT remittance, statutory returns, Form 16 issuance. Fixed-fee monthly engagement with named CA point of contact.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20Payroll%20Compliance%20Calendar.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Payroll%20Compliance%20Calendar%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20Payroll%20Compliance%20Calendar.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="annual">
            <h2>Annual Events — The Big Five</h2>
            <p>Five annual events drive year-end payroll workload. Spread across the year, each has a hard deadline backed by penalty.</p>
            <h3>15 June: Form 16 Issuance</h3>
            <p>Form 16 — the salary TDS certificate covering the previous financial year ending 31 March — must be issued to every employee by 15 June per Rule 31 of the Income-tax Rules 1962. Form 16 has Part A (TRACES-generated, capturing TDS deposits) and Part B (employer-prepared, capturing salary breakup, deductions and tax computation). Late issuance attracts ₹100 per day per employee penalty under Section 272A(2).</p>
            <h3>30 November: Statutory Bonus Payment</h3>
            <p>Under Section 19 of the Payment of Bonus Act 1965, statutory bonus must be paid within 8 months of the close of the accounting year. For accounting year ending 31 March 2026, the bonus is payable by 30 November 2026. Applicability: salary ≤ ₹21,000/month, in establishments with 20+ employees. Minimum 8.33% to maximum 20% of basic + DA capped at ₹7,000/month. Refer to <a href="https://labour.gov.in/sites/default/files/payment_of_bonus_act_1965.pdf" rel="noopener" target="_blank">Payment of Bonus Act 1965</a>. Form D bonus return must be filed within 30 days of payment.</p>
            <h3>31 January: POSH Annual Report</h3>
            <p>The annual report under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act 2013 must be submitted to the District Officer by 31 January for complaints received in the previous calendar year. Even nil reports must be filed. Failure attracts penalty up to ₹50,000 and repeat offences may lead to cancellation of business licence. POSH committee must comprise external member, woman chairperson, and minimum 4 members.</p>
            <h3>30 April: Annual Returns ER-1, Form 5 (PF), Form 11A (ESI)</h3>
            <p>The unified annual return ER-1 is due by 30 April for the financial year ending 31 March, covering shop and establishment information, employee count, wages paid, and statutory contributions. PF Form 5 and ESI Form 11A annual returns follow similar timing. From the Wages Code 2019 framework effective 21 November 2025, the Ministry of Labour has notified a single-window unified annual return mechanism — practical adoption is gradual through FY 2025-26. Refer to <a href="https://labour.gov.in/" rel="noopener" target="_blank">labour.gov.in</a> for current notifications.</p>
            <h3>15 January / 31 January: LWF Annual or Half-Yearly</h3>
            <p>Labour Welfare Fund schedule varies by state. Maharashtra and West Bengal: half-yearly (31 Jan + 31 Jul). Karnataka: 15 January for the previous calendar year. Tamil Nadu: 31 January. Gujarat: 15 July. The LWF rate is small (₹6 to ₹100 annual employer share per employee depending on state) but missing the deadline triggers state-specific late fees.</p>
        </section>


        <section class="content-section" id="state-wise">
            <h2>State-Wise Professional Tax &amp; LWF Schedule</h2>
            <p>Professional Tax and Labour Welfare Fund are state-administered levies with significant date and amount variation. The calendar above auto-applies your state. The reference tables below give the full picture.</p>
            <h3>Professional Tax Monthly Remittance</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>State</th><th>Rate (₹/month)</th><th>Remittance Date</th><th>Annual Cap</th></tr>
                </thead>
                <tbody>
                    <tr><td>Maharashtra</td><td>200 (300 in March)</td><td>End of next month</td><td>₹2,500</td></tr>
                    <tr><td>Karnataka</td><td>200</td><td>20th of next month</td><td>₹2,400</td></tr>
                    <tr><td>Tamil Nadu</td><td>208 (₹15K-25K) / 313 (&gt;₹25K)</td><td>Half-yearly: 1 Apr / 1 Oct</td><td>₹2,500</td></tr>
                    <tr><td>Telangana</td><td>200</td><td>10th of next month</td><td>₹2,400</td></tr>
                    <tr><td>West Bengal</td><td>200</td><td>21st of next month</td><td>₹2,400</td></tr>
                    <tr><td>Gujarat</td><td>200</td><td>15th of next month</td><td>₹2,400</td></tr>
                    <tr><td>Andhra Pradesh</td><td>200</td><td>10th of next month</td><td>₹2,400</td></tr>
                    <tr><td>Odisha</td><td>200</td><td>21st of next month</td><td>₹2,500</td></tr>
                    <tr><td>Madhya Pradesh</td><td>200</td><td>10th of next month</td><td>₹2,500</td></tr>
                    <tr><td>Delhi, Haryana, Punjab, UP, Uttarakhand, Rajasthan</td><td>NIL</td><td>Not applicable</td><td>—</td></tr>
                </tbody>
            </table>
            <h3>Labour Welfare Fund Schedule</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>State</th><th>Employer Share (₹/year)</th><th>Frequency</th><th>Due Dates</th></tr>
                </thead>
                <tbody>
                    <tr><td>Maharashtra</td><td>36</td><td>Half-yearly</td><td>31 January + 31 July</td></tr>
                    <tr><td>Karnataka</td><td>40</td><td>Annual</td><td>15 January</td></tr>
                    <tr><td>Tamil Nadu</td><td>20</td><td>Annual</td><td>31 January</td></tr>
                    <tr><td>West Bengal</td><td>18</td><td>Half-yearly</td><td>31 January + 31 July</td></tr>
                    <tr><td>Gujarat</td><td>12</td><td>Annual</td><td>15 July</td></tr>
                    <tr><td>Andhra Pradesh</td><td>60</td><td>Annual</td><td>31 January</td></tr>
                    <tr><td>Odisha</td><td>24</td><td>Annual</td><td>31 January</td></tr>
                    <tr><td>Madhya Pradesh</td><td>24</td><td>Annual</td><td>15 January</td></tr>
                    <tr><td>Telangana, Delhi, Haryana, UP</td><td>NIL</td><td>—</td><td>Not applicable</td></tr>
                </tbody>
            </table>
        </section>

        <section class="content-section" id="penalties">
            <h2>Late Filing Penalty Regime</h2>
            <p>Each statutory remittance has its own penalty meter that begins running from day one of delay. The combined exposure across PF, ESI, TDS and PT for a missed month can exceed the statutory amount itself within 12-18 months.</p>
            <h3>TDS Late Deposit / Late Filing</h3>
            <ul>
                <li><strong>Late deposit interest</strong>: 1.5% per month under Section 201(1A), calculated from date of deduction to date of deposit. Even partial month counts as full month.</li>
                <li><strong>Penalty</strong>: Up to amount of TDS not deposited under Section 271C.</li>
                <li><strong>Disallowance</strong>: 30% of expense disallowed under Section 40(a)(ia) for late deposit beyond due date for filing return.</li>
                <li><strong>Late filing fee</strong>: ₹200/day for late TDS quarterly return under Section 234E, capped at TDS amount.</li>
                <li><strong>Penalty for non-filing</strong>: ₹10,000 to ₹1,00,000 under Section 271H.</li>
                <li><strong>Prosecution</strong>: 3 months to 7 years imprisonment under Section 276B for wilful default.</li>
            </ul>
            <h3>PF Late Deposit</h3>
            <ul>
                <li><strong>Interest</strong>: 12% per annum simple interest under Section 7Q of the EPF Act.</li>
                <li><strong>Damages</strong>: Under Section 14B, 5% (delay up to 2 months), 10% (2-4 months), 15% (4-6 months), 25% (6+ months) of arrears.</li>
                <li><strong>Prosecution</strong>: Up to 1 year imprisonment for non-payment of employee deductions under Section 14.</li>
            </ul>
            <h3>ESI Late Deposit</h3>
            <ul>
                <li><strong>Interest</strong>: 12% per annum simple interest from due date to deposit date.</li>
                <li><strong>Damages</strong>: 5% (delay up to 2 months), 10% (2-4 months), 15% (4-6 months), 25% (6+ months).</li>
                <li><strong>Recovery</strong>: ESIC can attach bank accounts and assets for non-payment.</li>
            </ul>
            <h3>Professional Tax Late Payment</h3>
            <p>Penalty varies by state. Maharashtra: 1.25% per month interest. Karnataka: 1.25% per month + penalty up to 50% of tax. Tamil Nadu: 2% per month interest plus penalty up to 50%. State-specific simple interest charges apply, plus late filing penalty for the PT return.</p>
            <div class="callout warn">
                <p><strong>Compound exposure:</strong> Missing one month of PF + ESI + TDS + PT for a 50-employee company can accumulate ₹15,000-₹40,000 in interest and damages within 6 months. The cash flow saving from delay is rarely worth the penalty exposure. File and pay even if late — interest is on outstanding amount, so partial payment stops further accrual on paid portion.</p>
            </div>
        </section>

        <section class="content-section" id="march-rush">
            <h2>March – April Rush — The Year-End Crunch</h2>
            <p>The transition from one financial year to the next concentrates payroll workload across two months. Plan capacity accordingly.</p>
            <h3>March Activities</h3>
            <ul>
                <li><strong>7 March</strong>: February TDS deposit (regular monthly).</li>
                <li><strong>15 March</strong>: February PF and ESI challan.</li>
                <li><strong>20-31 March</strong>: Employee investment proof verification — collect physical/digital proof of 80C / 80D / HRA exemption / home loan interest claimed in declarations.</li>
                <li><strong>25 March</strong>: Last week to revise TDS calculations based on actual investment proofs vs declarations. Adjust March payslip TDS to true up the year.</li>
                <li><strong>31 March</strong>: Maharashtra PT annual cap (₹2,500) review. Year-end gratuity actuarial valuation. Bonus accrual booking. Leave encashment provision. Year-end Ind AS 19 disclosures.</li>
            </ul>
            <h3>April Activities</h3>
            <ul>
                <li><strong>7 April</strong>: NOT March TDS — note exception. April 7 due is for any non-March TDS deductions.</li>
                <li><strong>15 April</strong>: March PF and ESI challan.</li>
                <li><strong>30 April</strong>: <strong>March TDS deposit</strong> — the year-end exception when March deposit is one month delayed. Also annual return ER-1 due. Salary revision letters effective from 1 April typically issued mid-April.</li>
            </ul>
            <h3>May Activities</h3>
            <ul>
                <li><strong>7 May</strong>: April TDS deposit.</li>
                <li><strong>15 May</strong>: April PF and ESI challan.</li>
                <li><strong>31 May</strong>: Q4 TDS return Form 24Q for January-March quarter. This is the heaviest TDS return of the year — captures full FY data.</li>
            </ul>
            <h3>June Activities</h3>
            <ul>
                <li><strong>7 June</strong>: May TDS deposit.</li>
                <li><strong>15 June</strong>: May PF / ESI + <strong>Form 16 issuance</strong> to all employees. Also Form 12BA for perquisites.</li>
            </ul>
            <p>The March-April-May-June quartet defines the year-end payroll cycle. Most CA firms recommend completing investment proof collection by 28 February to allow buffer for verification before March payroll cut-off.</p>
        </section>

        <section class="content-section" id="workflow">
            <h2>Recommended Monthly Workflow</h2>
            <p>A repeatable monthly workflow eliminates surprises and reduces the mental overhead of tracking dates.</p>
            <h3>Days 1-3 of the Month</h3>
            <p>Run payroll for the previous month. Generate payslips. Disburse salaries. Compute TDS, PF, ESI per employee. Calculate professional tax based on state slabs. Reconcile gross-to-bank-credit numbers. Validate against the previous month's payroll register.</p>
            <h3>Days 4-7</h3>
            <p>Deposit TDS via Challan ITNS-281 by the 7th. Use the e-Pay Tax facility on income tax portal or authorised bank challan. Generate challan receipt and file in compliance folder. For year-end (March), this step is delayed to 30 April.</p>
            <h3>Days 8-15</h3>
            <p>Upload PF ECR to EPFO Unified Portal. Pay PF challan via authorised bank. Pay ESI challan on ESIC portal. Verify both challans show "Paid" status before the 15th. State-specific PT payment if state requires by 10th-15th.</p>
            <h3>Days 16-21</h3>
            <p>Pay PT in states requiring by 21st (West Bengal, Odisha). File state PT return where applicable. Update employee ledger with payment confirmations.</p>
            <h3>Days 22-30</h3>
            <p>Pay PT in Maharashtra and Karnataka (end of month). Reconcile bank statement against payroll bank credits. Close payroll books for the month. Begin preparation for next month — collect attendance, leave records, expense reimbursements.</p>
            <h3>Quarterly Add-On (Last Month of Quarter)</h3>
            <p>In June, September, December and March, add the quarterly TDS return preparation to the workflow. File Form 24Q + Form 26Q within 1 month of quarter end. Generate form summaries before filing to validate aggregate numbers against monthly totals.</p>
            <h3>Annual Add-Ons</h3>
            <p>April: ER-1 annual return, March TDS deposit. June: Form 16 issuance, Form 12BA. November: Statutory bonus payment for FY ended 31 March. January: POSH annual report, Q3 TDS return, LWF half-yearly (where applicable). May: Q4 TDS return.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When is TDS on salary due to be deposited?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">TDS on salary deducted under Section 192 of the Income-tax Act 1961 is due to be deposited by the 7th of the following month. For example, TDS deducted from May salary must be deposited by 7 June. The exception is March TDS — for March salary, TDS deposit is due by 30 April rather than 7 April. Late deposit attracts interest at 1.5% per month under Section 201 plus penalty under Section 271C.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the due date for PF monthly challan?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The Provident Fund Electronic Challan-cum-Return (ECR) is due by the 15th of the following month. For example, PF for May wages is due by 15 June. The ECR captures employee and employer contributions of 12% each, EDLI charges of 0.5% on capped wages and admin charges of 0.5% on capped wages. Late deposit attracts simple interest at 12% per annum under Section 7Q plus damages of 5% to 25% under Section 14B of the Employees Provident Funds Act.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When is the ESI monthly contribution due?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Employees State Insurance contribution is due by the 15th of the following month. For example, ESI for May wages is due by 15 June. The employer contributes 3.25% of gross wages and the employee contributes 0.75%, applicable to employees with gross monthly wages of ₹21,000 or below. Late payment attracts simple interest at 12% per annum, plus damages of 5% to 25% depending on the period of delay under Regulation 31 of the ESI General Regulations 1950.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What are the quarterly TDS return due dates?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form 24Q for salary TDS and Form 26Q for non-salary TDS are filed quarterly with these due dates: Quarter 1 covering April-June is due by 31 July; Quarter 2 covering July-September is due by 31 October; Quarter 3 covering October-December is due by 31 January; Quarter 4 covering January-March is due by 31 May. Late filing attracts a fee of ₹200 per day under Section 234E plus penalty under Section 271H ranging from ₹10,000 to ₹1,00,000.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When must Form 16 be issued to employees?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Form 16, the TDS certificate for salary, must be issued to employees by 15 June for the immediately preceding financial year ending 31 March, per Rule 31 of the Income-tax Rules 1962. Form 16 has two parts — Part A is generated from the TRACES portal containing TDS details, and Part B is prepared by the employer with salary breakup, deductions and tax computation. Late issuance attracts penalty of ₹100 per day per employee under Section 272A(2).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the deadline for paying statutory bonus?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Section 19 of the Payment of Bonus Act 1965, statutory bonus must be paid within 8 months of the close of the accounting year. For an accounting year ending 31 March, the bonus must be paid by 30 November. The minimum bonus is 8.33% and the maximum is 20% of basic plus dearness allowance, Applies to employees earning ≤₹21,000/month in 20+ employee establishments. Form D bonus return must be filed within 30 days of payment.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>How do professional tax due dates vary by state?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Professional tax monthly remittance dates vary by state: Maharashtra by end of next month, Karnataka by 20th, Tamil Nadu half-yearly by 1 April and 1 October, Telangana by 10th, West Bengal by 21st, Gujarat by 15th, Andhra Pradesh by 10th, Odisha by 21st, Madhya Pradesh by 10th. Delhi, Haryana, Punjab and Uttar Pradesh do not levy professional tax. Late payment attracts interest at 1.25% to 2% per month and penalty up to 50% of tax due, varying by state legislation.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When is Labour Welfare Fund contribution due?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Labour Welfare Fund contribution dates vary by state. Maharashtra requires half-yearly remittance by 31 January (for July to December period) and 31 July (for January to June period). Karnataka requires annual remittance by 15 January for the previous calendar year. Tamil Nadu requires annual contribution by 31 January. Gujarat requires by 15 July. West Bengal requires half-yearly by 31 January and 31 July. Several states have no LWF — Delhi, Haryana and Uttar Pradesh.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the POSH annual report deadline?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The annual report under the Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act 2013 must be submitted to the District Officer by 31 January every year for complaints received in the previous calendar year ending 31 December. The report covers number of complaints filed, disposed of, pending beyond 90 days, and workshops conducted. Failure to submit attracts penalty up to ₹50,000, and repeat offences may lead to cancellation of business licence.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What is the penalty for late TDS deposit?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Late TDS deposit attracts interest at 1.5% per month under Section 201(1A), calculated from the date of TDS deduction to the date of actual deposit, even for partial month. In addition, penalty under Section 271C may be imposed equal to the amount of TDS not deposited. Disallowance of expenditure under Section 40(a)(ia) may also apply for non-deduction or late deposit, disallowing 30% of the expense. Prosecution under Section 276B is possible for wilful default.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Are there separate TDS deposit dates for non-government deductors?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">TDS deposit dates apply uniformly to all deductors except for government departments. Non-government deductors deposit TDS by the 7th of the following month, with March TDS due by 30 April. Government departments paying without challan deposit on the same day TDS is deducted; with challan, by the 7th of the following month. The unified date applies to all sections including 192 (salary), 194A (interest), 194C (contracts), 194J (professional fees), and 194Q (purchase of goods).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>When must investment proofs be submitted by employees?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Investment proof submission deadline is set internally by the employer, typically falling between 28 January and 28 February each year. Most employers issue a written investment declaration form in April-May for projected investments, then collect physical or digital proof in January-February before final tax computation for Form 16. Late submission means the employer must compute final TDS based on actual proofs submitted, often resulting in a tax shortfall recovered from March salary or refunded by the employee from their ITR.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Which payroll deadlines fall in March each year?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">March is the busiest payroll month. Key deadlines include: 7 March for February TDS deposit; 15 March for February PF and ESI; 31 March for full-year PT in Maharashtra; 31 March for the financial year close requiring tax projection finalisation, investment proof verification, leave encashment provision, gratuity actuarial valuation, and bonus accrual booking. The very next month carries 30 April for March TDS deposit (year-end exception), and 30 April for the annual return ER-1.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>What happens if I miss a payroll compliance deadline?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Missing payroll deadlines triggers cascading consequences: interest accrues on the unpaid amount at 12 to 18% per annum, late filing fees apply where return-based, statutory penalties apply under specific sections, expenditure disallowance under Section 40(a)(ia) for delayed TDS reduces the deductible expense by 30%, and repeat defaults can attract prosecution. The employee benefits get delayed — PF interest on contributions, gratuity service crediting and ESI claim eligibility. Always file even if late to stop the meter.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false"><span>Has the new Labour Code 2025 changed payroll compliance dates?</span><span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The four Labour Codes effective 21 November 2025 have not changed the existing payroll compliance dates for PF, ESI, TDS, professional tax, LWF or statutory bonus, which remain governed by the underlying source laws. The Codes have changed substantive aspects: the wages definition now requires basic to be at least 50% of CTC, raising PF and gratuity computation bases, and fixed-term employees become gratuity-eligible after 1 year. Compliance dates and forms continue under the existing schedule until further notification.</div></div>
            </div>

        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Outsource Payroll?</h3>
            <p>Patron Accounting handles end-to-end payroll for 200+ Indian companies. Fixed-fee monthly engagement.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20Payroll%20Compliance%20Calendar.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Payroll%20Compliance%20Calendar%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20Payroll%20Compliance%20Calendar.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/payroll-management-services" class="sidebar-link">Payroll Management<span class="arrow">→</span></a>
            <a href="/tds-return-filing" class="sidebar-link">TDS Return Filing<span class="arrow">→</span></a>
            <a href="/pf-registration" class="sidebar-link">PF Registration<span class="arrow">→</span></a>
            <a href="/esi-registration" class="sidebar-link">ESI Registration<span class="arrow">→</span></a>
            <a href="/professional-tax-registration" class="sidebar-link">Professional Tax<span class="arrow">→</span></a>
            <a href="/income-tax-return-filing" class="sidebar-link">ITR Filing<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/india-employee-total-cost-calculator" class="sidebar-link">Employee Total Cost Calculator<span class="arrow">→</span></a>
            <a href="/tools/india-eor-cost-calculator" class="sidebar-link">India EOR Cost Calculator<span class="arrow">→</span></a>
            <a href="/tools/take-home-salary-calculator" class="sidebar-link">Take-Home Salary Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/income-tax-calculator" class="sidebar-link">Income Tax Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/payroll-setup-india-comprehensive-guide-for-businesses" class="sidebar-link">Payroll Setup in India: Complete Guide<span class="arrow">→</span></a>
            <a href="/blog/esic-registration-online-india-2025" class="sidebar-link">ESIC Registration Online<span class="arrow">→</span></a>
            <a href="/blog/annual-compliance-requirements-for-private-limited-companies-in-india-2025-2026" class="sidebar-link">Annual Compliance Calendar 2025-26<span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune · Mumbai · Delhi · Gurugram</div>
    <div class="trust">200+ Indian companies trust Patron for payroll &amp; compliance</div>
</div>

<footer class="footer">
    <p>© 2026 Patron Accounting LLP. All rights reserved.</p>
</footer>


<script>
(function(){
    'use strict';
    var $ = function(id){ return document.getElementById(id); };

    var STATE_LABEL = {
        'MH': 'Maharashtra', 'KA': 'Karnataka', 'TN': 'Tamil Nadu',
        'TG': 'Telangana', 'DL': 'Delhi', 'HR': 'Haryana',
        'UP': 'Uttar Pradesh', 'WB': 'West Bengal', 'GJ': 'Gujarat',
        'AP': 'Andhra Pradesh', 'OR': 'Odisha', 'MP': 'Madhya Pradesh'
    };

    var MONTH_SHORT = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var DAY_SHORT = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];

    // PT monthly due day by state (31 = last day of month)
    var PT_MONTHLY = {
        'MH': 31, 'KA': 20, 'TG': 10, 'WB': 21,
        'GJ': 15, 'AP': 10, 'OR': 21, 'MP': 10
    };

    var EVENTS = [
        {
            id: 'tds-monthly', cat: 'tds',
            name: 'TDS Salary + Other Deposit (Section 192/194)',
            desc: 'Deposit TDS deducted on salary and other payments via Challan ITNS-281',
            recur: 'monthly', dueDay: 7,
            yearEndOverride: { dueMonth: 4, dueDay: 30 },
            states: '*', minEmployees: 1,
            portal: 'https://www.incometax.gov.in',
            portalName: 'Income Tax Portal',
            authority: 'Income Tax Department',
            penalty: '1.5% per month interest u/s 201(1A); 30% expense disallowance u/s 40(a)(ia)'
        },
        {
            id: 'pf-monthly', cat: 'pf',
            name: 'PF Monthly Challan (ECR)',
            desc: 'Upload Electronic Challan-cum-Return for previous month wages',
            recur: 'monthly', dueDay: 15,
            states: '*', minEmployees: 1,
            portal: 'https://unifiedportal-emp.epfindia.gov.in/',
            portalName: 'EPFO Unified Portal',
            authority: 'EPFO',
            penalty: '12% p.a. interest u/s 7Q + 5-25% damages u/s 14B'
        },
        {
            id: 'esi-monthly', cat: 'esi',
            name: 'ESI Monthly Challan',
            desc: 'Pay ESI contribution: employer 3.25% + employee 0.75% (gross ≤ ₹21,000)',
            recur: 'monthly', dueDay: 15,
            states: '*', minEmployees: 1,
            portal: 'https://www.esic.gov.in',
            portalName: 'ESIC Portal',
            authority: 'ESIC',
            penalty: '12% p.a. interest + 5-25% damages'
        },
        {
            id: 'pt-monthly', cat: 'pt',
            name: 'Professional Tax Remittance',
            desc: 'Pay PT for previous month on state portal',
            recur: 'monthly-state',
            stateDueDays: PT_MONTHLY,
            states: Object.keys(PT_MONTHLY),
            minEmployees: 1,
            portalName: 'State PT Portal',
            authority: 'State Commercial Tax',
            penalty: '1.25-2% per month interest + up to 50% penalty (state-specific)'
        },
        {
            id: 'pt-tn-half', cat: 'pt',
            name: 'Professional Tax Half-Yearly (Tamil Nadu)',
            desc: 'TN PT for half-year period (Apr-Sep / Oct-Mar)',
            recur: 'fixed',
            dates: [{m: 4, d: 1, label: 'For Oct-Mar'}, {m: 10, d: 1, label: 'For Apr-Sep'}],
            states: ['TN'], minEmployees: 1,
            portal: 'https://tnreginet.gov.in',
            portalName: 'TN Reginet',
            authority: 'TN Commercial Tax',
            penalty: '2% per month + up to 50% penalty'
        },
        {
            id: 'lwf-mh', cat: 'lwf',
            name: 'Labour Welfare Fund — Maharashtra',
            desc: 'MH LWF half-yearly contribution (₹36/year employer share)',
            recur: 'fixed',
            dates: [{m: 1, d: 31, label: 'For Jul-Dec'}, {m: 7, d: 31, label: 'For Jan-Jun'}],
            states: ['MH'], minEmployees: 1,
            authority: 'MH LWF Board',
            penalty: 'State-specific late fee'
        },
        {
            id: 'lwf-ka', cat: 'lwf',
            name: 'Labour Welfare Fund — Karnataka',
            desc: 'KA LWF annual contribution (₹40/year employer share)',
            recur: 'fixed',
            dates: [{m: 1, d: 15, label: 'For previous CY'}],
            states: ['KA'], minEmployees: 1,
            authority: 'KA LWF Board',
            penalty: 'State-specific late fee'
        },
        {
            id: 'lwf-tn', cat: 'lwf',
            name: 'Labour Welfare Fund — Tamil Nadu',
            desc: 'TN LWF annual contribution (₹20/year)',
            recur: 'fixed',
            dates: [{m: 1, d: 31, label: 'For previous CY'}],
            states: ['TN'], minEmployees: 1,
            authority: 'TN LWF Board',
            penalty: 'State-specific late fee'
        },
        {
            id: 'lwf-wb', cat: 'lwf',
            name: 'Labour Welfare Fund — West Bengal',
            desc: 'WB LWF half-yearly contribution',
            recur: 'fixed',
            dates: [{m: 1, d: 31, label: 'For Jul-Dec'}, {m: 7, d: 31, label: 'For Jan-Jun'}],
            states: ['WB'], minEmployees: 1,
            authority: 'WB LWF Board',
            penalty: 'State-specific late fee'
        },
        {
            id: 'lwf-gj', cat: 'lwf',
            name: 'Labour Welfare Fund — Gujarat',
            desc: 'GJ LWF annual contribution (₹12/year)',
            recur: 'fixed',
            dates: [{m: 7, d: 15, label: 'For previous FY'}],
            states: ['GJ'], minEmployees: 1,
            authority: 'GJ LWF Board',
            penalty: 'State-specific late fee'
        },
        {
            id: 'lwf-ap-or-mp', cat: 'lwf',
            name: 'Labour Welfare Fund (AP/OR/MP)',
            desc: 'Annual LWF contribution',
            recur: 'fixed',
            dates: [{m: 1, d: 31, label: 'For previous CY'}],
            states: ['AP', 'OR', 'MP'], minEmployees: 1,
            authority: 'State LWF Board',
            penalty: 'State-specific late fee'
        },
        {
            id: 'tds-quarterly', cat: 'tds',
            name: 'Form 24Q Quarterly TDS Return',
            desc: 'File Form 24Q for previous quarter salary TDS',
            recur: 'fixed',
            dates: [
                {m: 7, d: 31, label: 'Q1 (Apr-Jun)'},
                {m: 10, d: 31, label: 'Q2 (Jul-Sep)'},
                {m: 1, d: 31, label: 'Q3 (Oct-Dec)'},
                {m: 5, d: 31, label: 'Q4 (Jan-Mar)'}
            ],
            states: '*', minEmployees: 1,
            portal: 'https://www.tin-nsdl.com',
            portalName: 'TIN-NSDL / TRACES',
            authority: 'Income Tax Department',
            penalty: '₹200/day u/s 234E + ₹10K-1L u/s 271H'
        },
        {
            id: 'form16-annual', cat: 'form16',
            name: 'Form 16 Issuance',
            desc: 'Issue Form 16 (TDS certificate) to every employee for FY ended 31 March',
            recur: 'fixed',
            dates: [{m: 6, d: 15, label: 'For FY ended Mar 31'}],
            states: '*', minEmployees: 1,
            portal: 'https://www.tdscpc.gov.in',
            portalName: 'TRACES Portal',
            authority: 'Income Tax Department',
            penalty: '₹100/day per employee u/s 272A(2)'
        },
        {
            id: 'bonus-payment', cat: 'bonus',
            name: 'Statutory Bonus Payment',
            desc: 'Pay bonus (8.33%-20% of basic+DA) to eligible employees for FY ended 31 March',
            recur: 'fixed',
            dates: [{m: 11, d: 30, label: 'Within 8 months of FY close'}],
            states: '*', minEmployees: 20,
            authority: 'Payment of Bonus Act 1965',
            penalty: 'Up to ₹1 lakh + 6 months imprisonment'
        },
        {
            id: 'bonus-form-d', cat: 'bonus',
            name: 'Form D Bonus Return',
            desc: 'File annual bonus return within 30 days of payment',
            recur: 'fixed',
            dates: [{m: 12, d: 30, label: 'Within 30 days of bonus payment'}],
            states: '*', minEmployees: 20,
            authority: 'Labour Commissioner',
            penalty: 'Up to ₹1,000 fine'
        },
        {
            id: 'posh-annual', cat: 'annual',
            name: 'POSH Annual Report',
            desc: 'Submit annual report under POSH Act 2013 to District Officer',
            recur: 'fixed',
            dates: [{m: 1, d: 31, label: 'For previous CY ended Dec 31'}],
            states: '*', minEmployees: 10,
            authority: 'District Officer',
            penalty: 'Up to ₹50,000 + repeat offence: licence cancellation'
        },
        {
            id: 'er1-annual', cat: 'annual',
            name: 'Annual Return ER-1',
            desc: 'File annual return for establishment for FY ended 31 March',
            recur: 'fixed',
            dates: [{m: 4, d: 30, label: 'For FY ended Mar 31'}],
            states: '*', minEmployees: 1,
            authority: 'Labour Department',
            penalty: 'State-specific late fee'
        },
        {
            id: 'pf-annual-3a', cat: 'annual',
            name: 'PF Annual Return Form 5/3A',
            desc: 'Annual PF return — increasingly auto-generated from monthly ECRs',
            recur: 'fixed',
            dates: [{m: 4, d: 30, label: 'For FY ended Mar 31'}],
            states: '*', minEmployees: 1,
            portal: 'https://www.epfindia.gov.in/',
            portalName: 'EPFO Portal',
            authority: 'EPFO',
            penalty: 'Late filing penalty + interest'
        }
    ];

    // State for filters
    var filterState = {
        catActive: ['tds','pf','esi','pt','lwf','bonus','form16','annual'],
        size: 'gte20',
        window: 90
    };

    // Toggle handlers
    document.querySelectorAll('.chip[data-cat]').forEach(function(chip){
        chip.addEventListener('click', function(){
            var cat = chip.getAttribute('data-cat');
            chip.classList.toggle('active');
            if (chip.classList.contains('active')) {
                if (filterState.catActive.indexOf(cat) < 0) filterState.catActive.push(cat);
            } else {
                filterState.catActive = filterState.catActive.filter(function(c){ return c !== cat; });
            }
        });
    });

    document.querySelectorAll('.toggle-btn[data-size]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-size]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            filterState.size = btn.getAttribute('data-size');
        });
    });

    document.querySelectorAll('.toggle-btn[data-window]').forEach(function(btn){
        btn.addEventListener('click', function(){
            document.querySelectorAll('.toggle-btn[data-window]').forEach(function(b){ b.classList.remove('active'); });
            btn.classList.add('active');
            filterState.window = parseInt(btn.getAttribute('data-window'));
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

    function lastDayOfMonth(year, month) {
        return new Date(year, month + 1, 0).getDate();
    }

    function generateInstances(event, fromDate, toDate, state, minEmployees) {
        // State filter
        if (event.states !== '*' && event.states.indexOf(state) < 0) return [];
        // Employee count filter
        if (event.minEmployees > minEmployees) return [];

        var instances = [];

        if (event.recur === 'monthly') {
            // Iterate over months in range
            var d = new Date(fromDate.getFullYear(), fromDate.getMonth(), 1);
            var endD = new Date(toDate.getFullYear(), toDate.getMonth() + 1, 1);
            while (d < endD) {
                var month = d.getMonth() + 1; // 1-12
                var dueDay = event.dueDay;
                // Year-end override (for TDS: March deductions due 30 April)
                if (event.yearEndOverride && month === event.yearEndOverride.dueMonth) {
                    dueDay = event.yearEndOverride.dueDay;
                }
                var due = new Date(d.getFullYear(), d.getMonth(), dueDay);
                if (due >= fromDate && due <= toDate) {
                    instances.push({
                        event: event,
                        date: due,
                        label: ''
                    });
                }
                d.setMonth(d.getMonth() + 1);
            }
        } else if (event.recur === 'monthly-state') {
            var stateDay = event.stateDueDays[state];
            if (!stateDay) return [];
            var d = new Date(fromDate.getFullYear(), fromDate.getMonth(), 1);
            var endD = new Date(toDate.getFullYear(), toDate.getMonth() + 1, 1);
            while (d < endD) {
                var actualDay = stateDay === 31 ? lastDayOfMonth(d.getFullYear(), d.getMonth()) : stateDay;
                var due = new Date(d.getFullYear(), d.getMonth(), actualDay);
                if (due >= fromDate && due <= toDate) {
                    instances.push({
                        event: event,
                        date: due,
                        label: ''
                    });
                }
                d.setMonth(d.getMonth() + 1);
            }
        } else if (event.recur === 'fixed') {
            // Iterate over each fixed date
            event.dates.forEach(function(date) {
                // Generate for current and next year (so window can span year boundary)
                for (var yearOffset = 0; yearOffset <= 2; yearOffset++) {
                    var year = fromDate.getFullYear() + yearOffset - 1;
                    if (year < fromDate.getFullYear() - 1) continue;
                    var due = new Date(year, date.m - 1, date.d);
                    if (due >= fromDate && due <= toDate) {
                        instances.push({
                            event: event,
                            date: due,
                            label: date.label || ''
                        });
                    }
                }
            });
        }
        return instances;
    }

    function generate(){
        var state = $('state').value;
        var minEmployees = filterState.size === 'gte20' ? 20 : 1;
        var windowDays = filterState.window;

        if (filterState.catActive.length === 0) {
            alert('Please select at least one category.');
            return;
        }

        var now = new Date();
        var today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
        var endDate = new Date(today.getTime() + windowDays * 24 * 3600 * 1000);

        var allInstances = [];
        EVENTS.forEach(function(event) {
            if (filterState.catActive.indexOf(event.cat) < 0) return;
            var ins = generateInstances(event, today, endDate, state, minEmployees);
            allInstances = allInstances.concat(ins);
        });

        // Sort by date
        allInstances.sort(function(a, b){ return a.date - b.date; });

        // Compute stats
        var urgentCount = 0;
        var warningCount = 0;
        allInstances.forEach(function(ins){
            var daysUntil = Math.ceil((ins.date - today) / (24 * 3600 * 1000));
            if (daysUntil <= 7) urgentCount++;
            else if (daysUntil <= 14) warningCount++;
        });

        $('v-urgent').textContent = urgentCount;
        $('v-warning').textContent = warningCount;
        $('v-total').textContent = allInstances.length;

        // Render deadline cards
        var html = '';
        if (allInstances.length === 0) {
            html = '<div class="empty-state"><h3>No deadlines in selected window</h3><p>Try expanding the view window or enabling more categories.</p></div>';
        } else {
            allInstances.forEach(function(ins) {
                var daysUntil = Math.ceil((ins.date - today) / (24 * 3600 * 1000));
                var urgencyClass = '';
                var urgencyTag = '';
                if (daysUntil <= 7) {
                    urgencyClass = 'urgent';
                    urgencyTag = '<span class="deadline-tag urgent">' + (daysUntil <= 0 ? 'TODAY' : daysUntil + 'd left') + '</span>';
                } else if (daysUntil <= 14) {
                    urgencyClass = 'warning';
                    urgencyTag = '<span class="deadline-tag warning">' + daysUntil + ' days</span>';
                } else {
                    urgencyClass = ins.event.cat;
                    urgencyTag = '<span class="deadline-tag">' + daysUntil + ' days</span>';
                }

                var dateStr = ins.date.getDate();
                var monthStr = MONTH_SHORT[ins.date.getMonth()];
                var dowStr = DAY_SHORT[ins.date.getDay()];
                var labelHtml = ins.label ? ' — ' + ins.label : '';
                var portalHtml = ins.event.portal ?
                    '<span>📍 <a href="' + ins.event.portal + '" rel="noopener" target="_blank">' + (ins.event.portalName || 'Portal') + '</a></span>' :
                    '';

                html += '<div class="deadline-card ' + urgencyClass + '">';
                html += '<div class="deadline-date">';
                html += '<div class="deadline-day">' + dateStr + '</div>';
                html += '<div class="deadline-month">' + monthStr + ' ' + ins.date.getFullYear() + '</div>';
                html += '<div class="deadline-dow">' + dowStr + '</div>';
                html += '</div>';
                html += '<div class="deadline-content">';
                html += urgencyTag;
                html += '<span class="deadline-tag">' + ins.event.cat.toUpperCase() + '</span>';
                html += '<div class="deadline-name">' + ins.event.name + labelHtml + '</div>';
                html += '<div class="deadline-desc">' + ins.event.desc + '</div>';
                html += '<div class="deadline-meta">';
                html += '<span>🏛️ ' + ins.event.authority + '</span>';
                html += portalHtml;
                html += '</div>';
                if (ins.event.penalty) {
                    html += '<div class="deadline-penalty"><strong>Late penalty:</strong> ' + ins.event.penalty + '</div>';
                }
                html += '</div></div>';
            });
        }
        $('deadline-list').innerHTML = html;

        $('results').classList.add('visible');
        $('results').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    function reset(){
        $('state').value = 'MH';
        document.querySelectorAll('.chip[data-cat]').forEach(function(c){ c.classList.add('active'); });
        filterState.catActive = ['tds','pf','esi','pt','lwf','bonus','form16','annual'];

        document.querySelectorAll('.toggle-btn[data-size]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-size="gte20"]').classList.add('active');
        filterState.size = 'gte20';

        document.querySelectorAll('.toggle-btn[data-window]').forEach(function(b){ b.classList.remove('active'); });
        document.querySelector('.toggle-btn[data-window="90"]').classList.add('active');
        filterState.window = 90;

        $('results').classList.remove('visible');
    }

    $('btn-generate').addEventListener('click', generate);
    $('btn-reset').addEventListener('click', reset);

    // Auto-generate on load to show useful default
    generate();
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
