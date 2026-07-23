@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Code on Wages Compliance Checker | 13-Point Audit</title>
    <meta name="description" content="Free Code on Wages compliance checker: 13-dimension audit of the 50% rule, floor wage, equal pay, deductions, records, bonus and overtime. CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/code-on-wages-compliance-checker/">
    <meta property="og:title" content="Code on Wages Compliance Checker 2026">
    <meta property="og:description" content="13-dimension audit of Code on Wages 2019 compliance — 50% rule, floor wage, equal pay, deductions, bonus, overtime, records.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/code-on-wages-compliance-checker">
    <meta property="og:image" content="/tools/og/code-on-wages-compliance-checker.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Code on Wages Compliance Checker 2026">
    <meta name="twitter:description" content="13-dimension Code on Wages compliance audit. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/code-on-wages-compliance-checker.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Code on Wages Compliance Checker",
      "description": "Code on Wages Compliance Checker is a thirteen-dimension audit tool that evaluates an employer's adherence to the Code on Wages 2019 effective 21 November 2025 which consolidated the Payment of Wages Act 1936 Minimum Wages Act 1948 Payment of Bonus Act 1965 and Equal Remuneration Act 1976 into a single unified framework. The tool reviews compliance across thirteen statutory dimensions: the 50 percent wage definition rule under Section 2(y) requiring basic plus dearness allowance plus retaining allowance to constitute at least half of total CTC, state minimum wage adherence under Section 6 against state-notified rates ranging from approximately 11000 rupees per month for unskilled workers in lower-rate states to 20000 rupees per month in Delhi for unskilled scheduled employments, national floor wage compliance under Section 9 currently at 178 rupees per day below which no state minimum wage can fall, equal remuneration under Section 3 prohibiting discrimination based on gender including transgender for same or similar work, wage period definition under Section 16 limited to daily weekly fortnightly or monthly cycles, time of payment under Section 17 mandating salary payment by the seventh of the following month and full and final settlement within two working days of termination, mode of payment compliance preferring electronic transfer credit to bank accounts, deductions cap under Section 18 limiting total deductions to fifty percent of wages or seventy-five percent if cooperative society payment is included with fines limited to three percent, records and wage slip mandate under Section 50 requiring monthly wage slips and the integrated Form Q wage register, statutory bonus eligibility under Section 26 covering employees up to twenty-one thousand rupees per month at minimum 8.33 percent and maximum 20 percent of wages payable within eight months of accounting year close, overtime wages under Section 14 at twice the ordinary rate of wages, fixed-term employee gratuity parity under Code on Social Security 2020 reducing the continuous-service requirement from five to one year and ensuring identical EPF ESI medical insurance and leave benefits as permanent employees, and appointment letter issuance under Occupational Safety Health and Working Conditions Code 2020 mandatory for all employees specifying job details wages and social security entitlements. Each dimension produces a Pass Warning or Fail status with specific remediation actions and references to the applicable statutory section. The tool generates an overall compliance percentage score and risk level Low Medium High along with a remediation checklist for non-compliant dimensions. Suitable for HR teams running self-audit before EPFO or Labour Department inspection CFOs assessing compliance posture company secretaries preparing labour law returns and external auditors validating payroll compliance.",
      "url": "/tools/code-on-wages-compliance-checker",
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
        {"@type": "ListItem", "position": 3, "name": "Code on Wages Compliance Checker", "item": "/tools/code-on-wages-compliance-checker"}
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
          "name": "What is the Code on Wages 2019?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Code on Wages 2019 is one of four New Labour Codes effective 21 November 2025. It consolidates four earlier laws — Payment of Wages Act 1936, Minimum Wages Act 1948, Payment of Bonus Act 1965, and Equal Remuneration Act 1976 — into a single framework applying to all employees regardless of wage threshold. Key features include uniform wage definition with the 50 percent rule, national floor wage, timely payment, and gender pay equity."
          }
        },
        {
          "@type": "Question",
          "name": "What is the National Floor Wage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The National Floor Level Minimum Wage under Section 9 of the Code on Wages 2019 is set by the Central Government as the statutory baseline below which no state minimum wage can fall. Currently the NFLMW stands at 178 rupees per day, set in 2019 and not formally revised. State governments may set higher minimum wages based on skill level, geography, and industry. Multi-state employers must apply the higher of central floor wage or state rate."
          }
        },
        {
          "@type": "Question",
          "name": "What are the state minimum wages in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "State minimum wages vary significantly. As of 2026, monthly minimum wage for unskilled workers ranges from approximately 11389 rupees in Punjab to 19846 rupees in Delhi. Maharashtra Karnataka Tamil Nadu Telangana sit in the 13000 to 14000 range. Higher rates apply for semi-skilled, skilled, and highly skilled categories. Central sphere workers earn 783 to 1035 rupees per day depending on skill. Rates are revised periodically based on Consumer Price Index movement."
          }
        },
        {
          "@type": "Question",
          "name": "When must wages be paid each month?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 17 of the Code on Wages 2019 mandates monthly wages be paid by the seventh of the following month. Weekly wages are paid on the last working day. Daily wages at the end of the shift. Full and final settlement on termination must be made within two working days. Late payment attracts penalty under Section 56 with damages and interest. Most employers structure payroll for the fifth or seventh of next month."
          }
        },
        {
          "@type": "Question",
          "name": "What is the maximum permissible deduction from wages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 18 of the Code on Wages 2019 caps total authorized deductions at 50 percent of wages payable. Where deductions include payment to a cooperative society or insurance scheme the cap rises to 75 percent. Authorized deductions cover statutory items like Provident Fund Employee State Insurance income tax professional tax recoveries advances and authorized fines. Fines on the employee cannot exceed three percent of wages. Unauthorized deductions even if disclosed in the contract are illegal."
          }
        },
        {
          "@type": "Question",
          "name": "Is a wage slip mandatory under the Code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 50 of the Code on Wages 2019 read with Rule 50 of the Central Rules makes monthly wage slips mandatory for all employees. The wage slip must show details of basic pay dearness allowance other allowances total wages all deductions and net amount paid. Wage slips can be issued in physical or electronic form. The integrated Form Q wage register replaces multiple registers required under earlier laws and serves as the single record-keeping format for inspection."
          }
        },
        {
          "@type": "Question",
          "name": "What is the equal remuneration requirement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 3 of the Code on Wages 2019 prohibits discrimination based on gender (including transgender identity) in wages and conditions of employment for the same or similar work. The Code expanded protection from the earlier Equal Remuneration Act 1976 which covered only male-female parity. Employers must conduct pay equity audits, document the absence of gender wage gaps, and ensure gender-neutral recruitment. Violation attracts penalty under Section 56."
          }
        },
        {
          "@type": "Question",
          "name": "What is the overtime rate under the Code?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 14 of the Code on Wages 2019 mandates overtime wages at twice the ordinary rate for work beyond normal working hours fixed by the appropriate Government. Standard working hours are typically nine hours per day or forty-eight hours per week. The 2x rate applies to all eligible workers without distinction of skill level. Failure to pay overtime at the prescribed rate is a violation under Section 56 with penalty up to one lakh rupees."
          }
        },
        {
          "@type": "Question",
          "name": "Who is eligible for statutory bonus?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 26 of the Code on Wages 2019 retains the bonus framework from the Payment of Bonus Act 1965. Employees earning up to 21000 rupees per month basic plus DA in establishments employing twenty or more persons are eligible for bonus between 8.33 percent (minimum) and 20 percent (maximum) of wages depending on the employer's allocable surplus. Bonus must be paid within eight months of the accounting year close. Employees not eligible may still receive ex-gratia bonus at employer discretion."
          }
        },
        {
          "@type": "Question",
          "name": "Are fixed-term employees entitled to gratuity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Code on Social Security 2020 reduced the continuous-service requirement for fixed-term employees from five years to one year. Fixed-term employees who complete one year of continuous service are now entitled to gratuity computed on basic plus DA at 15 days wages per year of service. Fixed-term employees must also receive identical EPF Employee State Insurance medical insurance and leave benefits as permanent employees per Section 30 OSH Code reflecting the codes pro-parity stance."
          }
        },
        {
          "@type": "Question",
          "name": "Is an appointment letter mandatory under the Codes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Occupational Safety Health and Working Conditions Code 2020 mandates appointment letters for all employees specifying job details wages and social security entitlements. The appointment letter must be issued at the time of joining and serves as primary evidence of the employment relationship. For multi-state operations the letter must specify the state of employment for purpose of state minimum wage applicability. Failure to issue an appointment letter is a violation that compromises subsequent compliance defences."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for Code on Wages violations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 56 of the Code on Wages 2019 prescribes graded penalties: first violation attracts fine up to 50000 rupees, second or subsequent violation within five years attracts imprisonment up to three months and fine up to one lakh rupees. Underpayment of minimum wages can attract ten times the underpayment as compensation under Section 56(1) read with Rule 60. The new Inspector-cum-Facilitator role under Section 51 emphasizes guidance over prosecution but penalties apply for persistent non-compliance."
          }
        },
        {
          "@type": "Question",
          "name": "How often should I run a Code on Wages audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Best practice is to run a comprehensive Code on Wages audit annually before the financial year close in March, with quarterly checks on key dimensions like minimum wage adherence and timely payment. State minimum wage rates are revised by various states twice a year so multi-state employers should set up alerts on each state Labour Department notification. Additional ad-hoc audits should be triggered before EPFO inspections statutory audits or planned restructuring of salary components."
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
        .toggle-group.three { grid-template-columns: 1fr 1fr 1fr; }
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

        /* Score gauge */
        .score-card { display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 22px; }
        @media (min-width: 700px) { .score-card { grid-template-columns: 1fr 2fr; align-items: center; } }
        .score-gauge { background: var(--card); border-radius: var(--radius); padding: 24px; text-align: center; border: 2px solid var(--border); }
        .score-gauge.high { border-color: var(--success); background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); }
        .score-gauge.medium { border-color: var(--accent); background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); }
        .score-gauge.low { border-color: var(--danger); background: linear-gradient(135deg, #FEE2E2 0%, #FECACA 100%); }
        .score-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); margin-bottom: 6px; }
        .score-value { font-family: var(--font-mono); font-size: 56px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin-bottom: 4px; }
        .score-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; color: #fff; }
        .score-pill.high { background: var(--success); }
        .score-pill.medium { background: var(--accent); color: var(--primary-dark); }
        .score-pill.low { background: var(--danger); }
        .score-summary-text { background: var(--card); border-radius: var(--radius); padding: 20px 22px; border: 1px solid var(--border); }
        .score-summary-text h3 { font-size: 17px; color: var(--primary-dark); margin-bottom: 8px; }
        .score-summary-text p { font-size: 14px; color: var(--text-secondary); line-height: 1.65; margin-bottom: 0; }

        /* Dimensions grid */
        .dim-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 768px) { .dim-grid { grid-template-columns: 1fr 1fr; } }
        .dim-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 16px 18px; border-left: 4px solid; }
        .dim-card.pass { border-left-color: var(--success); }
        .dim-card.warn { border-left-color: var(--accent); }
        .dim-card.fail { border-left-color: var(--danger); }
        .dim-header { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px; gap: 10px; }
        .dim-title { font-size: 14px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; flex: 1; }
        .dim-badge { font-family: var(--font-mono); font-size: 10px; font-weight: 700; padding: 3px 10px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.5px; color: #fff; white-space: nowrap; }
        .dim-badge.pass { background: var(--success); }
        .dim-badge.warn { background: var(--accent); color: var(--primary-dark); }
        .dim-badge.fail { background: var(--danger); }
        .dim-section { font-size: 11px; color: var(--text-muted); font-family: var(--font-mono); margin-bottom: 6px; }
        .dim-finding { font-size: 13px; color: var(--text-secondary); line-height: 1.5; margin-bottom: 6px; }
        .dim-action { font-size: 12px; color: var(--text); line-height: 1.5; padding-top: 6px; border-top: 1px solid var(--border); }
        .dim-action strong { color: var(--primary); }

        /* Remediation block */
        .remediation { background: var(--surface); border-radius: var(--radius); padding: 22px; border: 1px solid var(--border); margin-bottom: 22px; }
        .remediation-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; }
        .remediation-list { list-style: none; counter-reset: rem-c; }
        .remediation-list li { counter-increment: rem-c; padding: 10px 0 10px 36px; position: relative; font-size: 14px; color: var(--text-secondary); line-height: 1.6; border-bottom: 1px solid var(--border); }
        .remediation-list li:last-child { border-bottom: none; }
        .remediation-list li::before { content: counter(rem-c); position: absolute; left: 0; top: 11px; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; font-size: 11px; font-weight: 700; display: flex; align-items: center; justify-content: center; }
        .remediation-empty { color: var(--success); font-size: 14px; padding: 12px; text-align: center; font-weight: 600; }

        /* Content sections */
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
            .score-value { font-size: 44px; }
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
        <a href="#calculator">Audit Tool</a>
        <a href="#dimensions">13 Dimensions</a>
        <a href="#minimum-wages">State Min Wages</a>
        <a href="#penalties">Penalties</a>
        <a href="#audit-prep">Audit Prep</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Code on Wages Compliance Checker
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Code on Wages <span>Compliance Checker</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Code%20on%20Wages%20Compliance%20Checker.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Code%20on%20Wages%20Compliance%20Checker%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Code%20on%20Wages%20Compliance%20Checker.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>The <strong>Code on Wages 2019</strong> (effective 21 November 2025) consolidated four older laws — Payment of Wages Act, Minimum Wages Act, Payment of Bonus Act, Equal Remuneration Act — into a single framework with universal applicability. This 13-dimension audit tool checks compliance across <strong>50% wage rule, state minimum wage adherence, equal pay, wage period, payment timing, payment mode, deductions cap, wage slips, statutory bonus, overtime, fixed-term parity, appointment letters,</strong> and EPFO/ESIC compliance. Generates an overall compliance score, flags Pass/Warn/Fail per dimension, and produces a remediation checklist for non-compliant dimensions. Built for HR self-audit before EPFO inspection and statutory audit prep.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Run a 13-Dimension Audit</h2>
            <p class="calc-intro">Enter the parameters of a representative employee and your company-level practices. The tool runs through 13 statutory dimensions, scores each as Pass/Warn/Fail, and produces an overall compliance score with remediation actions.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Sample Employee Compensation</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="ctc">Monthly CTC (₹)</label>
                    <input type="text" id="ctc" value="50000" min="5000" max="2000000" step="500" inputmode="decimal" autocomplete="off">
                    <span class="helper">Take a representative employee from your payroll.</span>
                </div>
                <div class="form-group">
                    <label for="basicPct">Basic % of CTC</label>
                    <input type="text" id="basicPct" value="35" min="20" max="60" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Current basic percentage. Code requires ≥50%.</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="state">State (for Minimum Wage)</label>
                    <select id="state">
                        <option value="DL">Delhi</option>
                        <option value="MH" selected>Maharashtra</option>
                        <option value="KA">Karnataka</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="GJ">Gujarat</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="HR">Haryana</option>
                        <option value="WB">West Bengal</option>
                        <option value="PB">Punjab</option>
                        <option value="OTHER">Other / lower-rate states</option>
                    </select>
                    <span class="helper">State of employment determines applicable minimum wage.</span>
                </div>
                <div class="form-group">
                    <label for="skill">Skill Category</label>
                    <select id="skill">
                        <option value="unskilled">Unskilled</option>
                        <option value="semi">Semi-skilled</option>
                        <option value="skilled" selected>Skilled</option>
                        <option value="highly">Highly Skilled</option>
                    </select>
                    <span class="helper">State minimum wages vary by skill level.</span>
                </div>
            </div>

            <div class="calc-section-title">Compliance Practices</div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Wage Payment Day (of next month)</label>
                    <input type="text" id="payDay" value="7" min="1" max="31" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Section 17 requires payment by 7th of next month.</span>
                </div>
                <div class="form-group">
                    <label>Wage Payment Mode</label>
                    <div class="toggle-group three" id="modeGroup">
                        <button type="button" class="toggle-btn" data-val="cash">Cash</button>
                        <button type="button" class="toggle-btn active" data-val="cheque">Cheque</button>
                        <button type="button" class="toggle-btn" data-val="electronic">Electronic</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Total Deductions (% of wages)</label>
                    <input type="text" id="deductPct" value="40" min="0" max="100" step="1" inputmode="decimal" autocomplete="off">
                    <span class="helper">Section 18 caps total deductions at 50% (75% with cooperative).</span>
                </div>
                <div class="form-group">
                    <label>Overtime Rate</label>
                    <div class="toggle-group three" id="otGroup">
                        <button type="button" class="toggle-btn" data-val="1">1× (none)</button>
                        <button type="button" class="toggle-btn" data-val="1.5">1.5×</button>
                        <button type="button" class="toggle-btn active" data-val="2">2×</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Wage Slips Issued (Form Q)</label>
                    <div class="toggle-group" id="slipGroup">
                        <button type="button" class="toggle-btn active" data-val="yes">Yes</button>
                        <button type="button" class="toggle-btn" data-val="no">No</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Equal Pay Audit Documented</label>
                    <div class="toggle-group" id="equalGroup">
                        <button type="button" class="toggle-btn" data-val="yes">Yes</button>
                        <button type="button" class="toggle-btn active" data-val="no">No</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Bonus Paid Within 8 Months</label>
                    <div class="toggle-group" id="bonusGroup">
                        <button type="button" class="toggle-btn active" data-val="yes">Yes</button>
                        <button type="button" class="toggle-btn" data-val="no">No</button>
                        <button type="button" class="toggle-btn" data-val="na">N/A</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Fixed-term Gratuity After 1 Year</label>
                    <div class="toggle-group three" id="fixedGroup">
                        <button type="button" class="toggle-btn active" data-val="yes">Yes</button>
                        <button type="button" class="toggle-btn" data-val="no">No</button>
                        <button type="button" class="toggle-btn" data-val="na">No FTE</button>
                    </div>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Appointment Letters Issued</label>
                    <div class="toggle-group" id="apptGroup">
                        <button type="button" class="toggle-btn active" data-val="yes">Yes</button>
                        <button type="button" class="toggle-btn" data-val="no">No</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>EPFO ECR Filed Monthly</label>
                    <div class="toggle-group" id="epfoGroup">
                        <button type="button" class="toggle-btn active" data-val="yes">Yes</button>
                        <button type="button" class="toggle-btn" data-val="no">No</button>
                    </div>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Run Compliance Audit</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="score-card">
                    <div class="score-gauge" id="scoreGauge">
                        <div class="score-label">Overall Compliance</div>
                        <div class="score-value" id="scoreValue">—</div>
                        <span class="score-pill" id="scorePill">—</span>
                    </div>
                    <div class="score-summary-text">
                        <h3 id="scoreHeadline">—</h3>
                        <p id="scoreSummary">—</p>
                    </div>
                </div>

                <div class="dim-grid" id="dimGrid"></div>

                <div class="remediation">
                    <div class="remediation-title">Remediation Checklist</div>
                    <ol class="remediation-list" id="remediationList"></ol>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Code on Wages Compliance Checker validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Code%20on%20Wages%20Compliance%20Checker.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Code%20on%20Wages%20Compliance%20Checker%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Code%20on%20Wages%20Compliance%20Checker%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="dimensions">
            <h2>13 Compliance Dimensions Explained</h2>

            <p>The Code on Wages 2019 is comprehensive but its compliance footprint extends beyond the headline 50% rule. The 13 dimensions checked by the Patron audit tool span statutory definitions, payment mechanics, recordkeeping, equal-pay obligations, and adjacent codes. Below is the practitioner-grade breakdown.</p>

            <h3>1. Wage Definition (50% Rule) — Section 2(y)</h3>
            <p>Basic + DA + Retaining Allowance must constitute at least 50% of total CTC. Excluded items (HRA, conveyance, overtime, bonus) cannot exceed 50%. Where excluded items exceed 50%, the excess is automatically added back to wages and triggers higher PF and gratuity. Use the Patron <a href="/tools/ctc-structure-calculator">CTC Structure Calculator</a> for component-by-component analysis.</p>

            <h3>2. State Minimum Wage Adherence — Section 6</h3>
            <p>Every employee must be paid at least the state-notified minimum wage applicable to their skill category and location. Rates are revised periodically based on CPI movement. Multi-state employers must apply each state's rate for that location. Underpayment can attract 10x compensation under Section 56(1).</p>

            <h3>3. National Floor Wage — Section 9</h3>
            <p>Currently ₹178 per day (set 2019). State minimum wages must be ≥ floor wage. The Code introduces this <a href="https://en.wikipedia.org/wiki/Minimum_wage_in_India" target="_blank" rel="noopener">minimum wage</a> concept to set a baseline below which no state can fall. The <a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour and Employment</a> revises this periodically based on living-cost analysis.</p>

            <h3>4. Equal Remuneration — Section 3</h3>
            <p>No gender-based (including transgender) discrimination in wages or employment conditions for the same or similar work. Document equal-pay audits annually. Pay equity is a statutory obligation, not best practice.</p>

            <h3>5. Wage Period — Section 16</h3>
            <p>Wage period must be defined as daily, weekly, fortnightly, or monthly only. Specify in the employment contract. Most office employees are on monthly wage period.</p>

            <h3>6. Time of Payment — Section 17</h3>
            <p>Monthly wages by 7th of next month. Weekly wages on last working day. Daily wages at end of shift. Full and final settlement within 2 working days of termination. Late payment attracts penalty under Section 56 plus interest.</p>

            <h3>7. Mode of Payment — Section 15</h3>
            <p>Permitted: coin, currency notes, cheque, electronic transfer, or credit to bank account. Government may notify electronic-only for certain categories. Most modern employers use direct bank credit (compliant with <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a> digital-first guidance); cash is being progressively phased out.</p>

            <h3>8. Deductions Cap — Section 18</h3>
            <p>Total authorised deductions cannot exceed 50% of wages payable, or 75% if including payment to a cooperative society or insurance scheme. Authorised deductions include statutory items (PF, ESI, IT, PT), recoveries, advances, and authorised fines (capped at 3% of wages).</p>

            <h3>9. Records & Wage Slips — Section 50</h3>
            <p>Monthly wage slip mandatory in physical or electronic form. Single integrated wage register (Form Q) replaces multiple older registers. Wage slip must show basic, DA, allowances, deductions, and net amount paid.</p>

            <h3>10. Statutory Bonus — Section 26</h3>
            <p>Employees earning up to ₹21,000/month basic + DA in establishments with 20+ employees are eligible. Minimum 8.33%, maximum 20% of wages. Must be paid within 8 months of accounting year close.</p>

            <h3>11. Overtime Wages — Section 14</h3>
            <p>Overtime work attracts twice (2x) the ordinary rate of wages. Standard working hours are typically 9 hours/day or 48 hours/week. Overtime exceeds these.</p>

            <h3>12. Fixed-term Employee Parity</h3>
            <p>Code on Social Security 2020 reduced the gratuity continuous-service requirement from 5 years to 1 year for fixed-term employees. Plus identical EPF, ESI, medical insurance, and leave benefits as permanent employees per the OSH Code.</p>

            <h3>13. Appointment Letter — OSH Code</h3>
            <p>Mandatory for all employees. Specifies job details, wages, and social security entitlements. Issued at the time of joining. Failure compromises subsequent compliance defences.</p>
        </section>

        <section class="content-section" id="minimum-wages">
            <h2>State Minimum Wages — Quick Reference (2026)</h2>

            <p>State minimum wages vary by state, industry, and skill category. The table below shows indicative monthly minimum wages for unskilled and skilled workers in scheduled employments under the Shops & Establishments framework. <strong>Verify current rates against your state Labour Department notification</strong> before relying on these for compliance — rates are revised semi-annually or annually based on CPI movement.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>State</th><th>Unskilled (₹/month)</th><th>Skilled (₹/month)</th><th>Highly Skilled (₹/month)</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Delhi</strong></td><td>₹19,846</td><td>₹23,757</td><td>₹26,143</td></tr>
                    <tr><td><strong>Maharashtra</strong></td><td>₹13,500 - ₹14,500</td><td>₹16,000 - ₹17,500</td><td>₹17,500 - ₹19,000</td></tr>
                    <tr><td><strong>Karnataka</strong></td><td>₹13,000 - ₹14,000</td><td>₹15,500 - ₹16,500</td><td>₹17,500 - ₹19,000</td></tr>
                    <tr><td><strong>Tamil Nadu</strong></td><td>₹13,500 - ₹14,500</td><td>₹16,500 - ₹17,500</td><td>₹18,500 - ₹20,000</td></tr>
                    <tr><td><strong>Telangana</strong></td><td>₹13,500</td><td>₹16,000</td><td>₹17,500</td></tr>
                    <tr><td><strong>Gujarat</strong></td><td>₹12,000 - ₹13,000</td><td>₹14,500 - ₹15,500</td><td>₹16,000 - ₹17,000</td></tr>
                    <tr><td><strong>Haryana</strong></td><td>₹13,500 - ₹14,500</td><td>₹16,000 - ₹17,000</td><td>₹18,000 - ₹19,500</td></tr>
                    <tr><td><strong>Uttar Pradesh</strong></td><td>₹11,500 - ₹12,500</td><td>₹13,500 - ₹14,500</td><td>₹15,500 - ₹16,500</td></tr>
                    <tr><td><strong>West Bengal</strong></td><td>₹10,500 - ₹11,500</td><td>₹13,000 - ₹14,000</td><td>₹14,500 - ₹15,500</td></tr>
                    <tr><td><strong>Punjab</strong></td><td>₹11,389</td><td>₹13,500</td><td>₹14,500</td></tr>
                    <tr><td><strong>Central Sphere</strong></td><td>₹783/day</td><td>₹957/day</td><td>₹1,035/day</td></tr>
                </tbody>
            </table>

            <p><em>Indicative figures based on aggregated state notifications as of early 2026. State rates are revised by various state Labour Departments at different schedules — verify each state's current notification before relying on these for payroll.</em></p>

            <div class="callout warn">
                <p><strong>Multi-state operators — set up notification alerts.</strong> Each state has different revision schedules. A company operating across Delhi + Karnataka + Maharashtra + Gujarat needs four separate rate-tracking processes. Underpayment exposure compounds across states with 10x compensation penalty plus 12-15% interest.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need a comprehensive Code on Wages compliance audit?</h3>
            <p>Patron's labour-law team handles end-to-end compliance audits, salary restructuring, EPFO compliance, equal-pay documentation, and statutory return filings. Fixed-fee, transparent pricing, audit-ready output.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Code%20on%20Wages%20Compliance%20Checker.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Code%20on%20Wages%20Compliance%20Checker%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Code%20on%20Wages%20Compliance%20Checker.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="penalties">
            <h2>Penalties for Non-Compliance — Section 56</h2>

            <p>The Code on Wages 2019 prescribes graded penalties under Section 56. The new <strong>Inspector-cum-Facilitator</strong> role under Section 51 emphasises guidance over prosecution, but persistent non-compliance triggers the full penalty framework.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Violation Type</th><th>First Offence</th><th>Subsequent (within 5 years)</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Underpayment of wages</strong></td><td>Fine up to ₹50,000</td><td>3 months imprisonment + ₹1,00,000 fine</td></tr>
                    <tr><td><strong>Failure to maintain records</strong></td><td>Fine up to ₹10,000</td><td>Fine up to ₹25,000</td></tr>
                    <tr><td><strong>Other violations</strong></td><td>Fine up to ₹20,000</td><td>1 month imprisonment + ₹40,000 fine</td></tr>
                    <tr><td><strong>Underpayment compensation</strong></td><td colspan="2">10x the underpayment per Section 56(1) read with Rule 60</td></tr>
                </tbody>
            </table>

            <h3>Inspector-cum-Facilitator Powers</h3>
            <p>Section 51 introduces the dual role. The Inspector-cum-Facilitator may:</p>
            <ul>
                <li>Issue advisory and guidance notes before prosecution</li>
                <li>Allow employers a remedial window for first-instance non-compliance</li>
                <li>Conduct surveys and inspections of premises</li>
                <li>Examine records and statutory registers</li>
                <li>Issue notices for production of documents</li>
                <li>Prosecute for persistent or wilful non-compliance</li>
            </ul>

            <p>Practitioners report a more collaborative inspection environment than under the legacy regime, but employers should not assume immunity — wilful non-compliance still attracts the full penalty.</p>

            <h3>EPFO & ESIC Adjacent Penalties</h3>
            <p>Underpayment of PF on the higher (50%-rule-corrected) basic attracts <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a>-related tax adjustments and the following EPFO penalties:</p>
            <ul>
                <li><strong>EPF Section 7Q</strong>: Interest at 12% on unpaid contribution</li>
                <li><strong>EPF Section 14B</strong>: Damages up to 100% of arrears</li>
                <li><strong>ESI Act Section 85</strong>: Imprisonment up to 1 year + fine</li>
            </ul>
        </section>

        <section class="content-section" id="audit-prep">
            <h2>Audit Preparation Best Practices</h2>

            <h3>Annual Self-Audit Cycle</h3>
            <p>Run a comprehensive Code on Wages audit annually before March year-end, with quarterly checks on key dimensions:</p>
            <ul>
                <li><strong>Q1 (Apr-Jun)</strong>: Salary structure compliance + wage period documentation</li>
                <li><strong>Q2 (Jul-Sep)</strong>: Bonus payment verification (within 8 months of FY close) + state minimum wage updates</li>
                <li><strong>Q3 (Oct-Dec)</strong>: Equal-pay audit + records inspection readiness</li>
                <li><strong>Q4 (Jan-Mar)</strong>: Annual full-spectrum audit + remediation closure before year-end</li>
            </ul>

            <h3>Document Bundle for EPFO Inspection</h3>
            <p>When EPFO Inspector-cum-Facilitator arrives (engage an <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-empanelled CA for audit defence), the standard ask is:</p>
            <ol>
                <li>Form Q (integrated wage register) for last 12 months</li>
                <li>Wage slips sample (5-10 employees across grade levels)</li>
                <li>Salary structure breakdown showing 50% wage rule compliance</li>
                <li>Monthly ECR filings + payment challans</li>
                <li>EPF allocation statements (basic-wages, PF computed, employer share)</li>
                <li>Equal-pay audit report (most recent)</li>
                <li>Appointment letter samples</li>
                <li>Fixed-term employee gratuity policy + register</li>
                <li>Bonus payment register with cheque/bank-credit references</li>
                <li>Overtime register with computation worksheets</li>
            </ol>

            <h3>Documenting the Restructuring Decision</h3>
            <p>Maintain a dossier showing:</p>
            <ul>
                <li>Pre-restructuring salary structure (component-wise)</li>
                <li>Code on Wages gap analysis</li>
                <li>Restructuring methodology (CTC-constant vs CTC-increase)</li>
                <li>Employee communication artefacts (memos, FAQs, individual letters)</li>
                <li>Employee acknowledgments where take-home reduced</li>
                <li>Updated payroll software configuration screenshots</li>
                <li>HR/Legal sign-off on the restructured framework</li>
            </ul>

            <div class="callout">
                <p><strong>Use the Patron toolset together.</strong> Use the <a href="/tools/ctc-structure-calculator">CTC Structure Calculator</a> first to redesign salaries, then this Compliance Checker to audit the broader posture, then the <a href="/tools/gratuity-calculator">Gratuity Calculator</a> to model the increased liability. The three tools cover the full Code on Wages compliance arc.</p>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Compliance Audit</h3>
            <p>Patron handles end-to-end Code on Wages audits, gap analysis, salary restructuring, EPFO compliance, and remediation.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Code%20on%20Wages%20Compliance%20Checker.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Code%20on%20Wages%20Compliance%20Checker%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Code%20on%20Wages%20Compliance%20Checker.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/labour-law-compliance" class="sidebar-link">Labour Law Compliance<span class="arrow">→</span></a>
            <a href="/payroll-services" class="sidebar-link">Payroll Services<span class="arrow">→</span></a>
            <a href="/payroll-audit" class="sidebar-link">Payroll Audit<span class="arrow">→</span></a>
            <a href="/pf-esi-registration" class="sidebar-link">PF / ESI Registration<span class="arrow">→</span></a>
            <a href="/hr-advisory" class="sidebar-link">HR Advisory<span class="arrow">→</span></a>
            <a href="/eor-services" class="sidebar-link">EOR Services<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ctc-structure-calculator" class="sidebar-link">CTC Structure Calculator<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/pf-calculator" class="sidebar-link">PF Calculator<span class="arrow">→</span></a>
            <a href="/tools/esi-calculator" class="sidebar-link">ESI Calculator<span class="arrow">→</span></a>
            <a href="/tools/ctc-to-in-hand-calculator" class="sidebar-link">CTC to In-Hand<span class="arrow">→</span></a>
            <a href="/tools/india-entity-vs-eor-comparison" class="sidebar-link">Entity vs EOR<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/code-on-wages-2019" class="sidebar-link">Code on Wages 2019 Guide<span class="arrow">→</span></a>
            <a href="/blog/new-labour-codes-2025" class="sidebar-link">New Labour Codes 2025<span class="arrow">→</span></a>
            <a href="/blog/state-minimum-wages-india" class="sidebar-link">State Minimum Wages<span class="arrow">→</span></a>
            <a href="/blog/epfo-inspection-readiness" class="sidebar-link">EPFO Inspection Readiness<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the Code on Wages 2019?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The Code on Wages 2019 is one of four New Labour Codes effective 21 November 2025. It consolidates four earlier laws — Payment of Wages Act 1936, Minimum Wages Act 1948, Payment of Bonus Act 1965, and Equal Remuneration Act 1976 — into a single framework applying to all employees regardless of wage threshold. Key features include uniform wage definition with the 50 percent rule, national floor wage, timely payment, and gender pay equity.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the National Floor Wage?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The National Floor Level Minimum Wage under Section 9 of the Code on Wages 2019 is set by the Central Government as the statutory baseline below which no state minimum wage can fall. Currently the NFLMW stands at 178 rupees per day, set in 2019 and not formally revised. State governments may set higher minimum wages based on skill level, geography, and industry. Multi-state employers must apply the higher of central floor wage or state rate.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What are the state minimum wages in India?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">State minimum wages vary significantly. As of 2026, monthly minimum wage for unskilled workers ranges from approximately 11389 rupees in Punjab to 19846 rupees in Delhi. Maharashtra Karnataka Tamil Nadu Telangana sit in the 13000 to 14000 range. Higher rates apply for semi-skilled, skilled, and highly skilled categories. Central sphere workers earn 783 to 1035 rupees per day depending on skill. Rates are revised periodically based on Consumer Price Index movement.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">When must wages be paid each month?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 17 of the Code on Wages 2019 mandates monthly wages be paid by the seventh of the following month. Weekly wages are paid on the last working day. Daily wages at the end of the shift. Full and final settlement on termination must be made within two working days. Late payment attracts penalty under Section 56 with damages and interest. Most employers structure payroll for the fifth or seventh of next month.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the maximum permissible deduction from wages?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 18 of the Code on Wages 2019 caps total authorized deductions at 50 percent of wages payable. Where deductions include payment to a cooperative society or insurance scheme the cap rises to 75 percent. Authorized deductions cover statutory items like Provident Fund Employee State Insurance income tax professional tax recoveries advances and authorized fines. Fines on the employee cannot exceed three percent of wages. Unauthorized deductions even if disclosed in the contract are illegal.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is a wage slip mandatory under the Code?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Section 50 of the Code on Wages 2019 read with Rule 50 of the Central Rules makes monthly wage slips mandatory for all employees. The wage slip must show details of basic pay dearness allowance other allowances total wages all deductions and net amount paid. Wage slips can be issued in physical or electronic form. The integrated Form Q wage register replaces multiple registers required under earlier laws and serves as the single record-keeping format for inspection.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the equal remuneration requirement?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 3 of the Code on Wages 2019 prohibits discrimination based on gender (including transgender identity) in wages and conditions of employment for the same or similar work. The Code expanded protection from the earlier Equal Remuneration Act 1976 which covered only male-female parity. Employers must conduct pay equity audits, document the absence of gender wage gaps, and ensure gender-neutral recruitment. Violation attracts penalty under Section 56.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the overtime rate under the Code?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 14 of the Code on Wages 2019 mandates overtime wages at twice the ordinary rate for work beyond normal working hours fixed by the appropriate Government. Standard working hours are typically nine hours per day or forty-eight hours per week. The 2x rate applies to all eligible workers without distinction of skill level. Failure to pay overtime at the prescribed rate is a violation under Section 56 with penalty up to one lakh rupees.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Who is eligible for statutory bonus?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 26 of the Code on Wages 2019 retains the bonus framework from the Payment of Bonus Act 1965. Employees earning up to 21000 rupees per month basic plus DA in establishments employing twenty or more persons are eligible for bonus between 8.33 percent (minimum) and 20 percent (maximum) of wages depending on the employer's allocable surplus. Bonus must be paid within eight months of the accounting year close. Employees not eligible may still receive ex-gratia bonus at employer discretion.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are fixed-term employees entitled to gratuity?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The Code on Social Security 2020 reduced the continuous-service requirement for fixed-term employees from five years to one year. Fixed-term employees who complete one year of continuous service are now entitled to gratuity computed on basic plus DA at 15 days wages per year of service. Fixed-term employees must also receive identical EPF Employee State Insurance medical insurance and leave benefits as permanent employees per Section 30 OSH Code reflecting the codes pro-parity stance.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is an appointment letter mandatory under the Codes?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The Occupational Safety Health and Working Conditions Code 2020 mandates appointment letters for all employees specifying job details wages and social security entitlements. The appointment letter must be issued at the time of joining and serves as primary evidence of the employment relationship. For multi-state operations the letter must specify the state of employment for purpose of state minimum wage applicability. Failure to issue an appointment letter is a violation that compromises subsequent compliance defences.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What are the penalties for Code on Wages violations?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Section 56 of the Code on Wages 2019 prescribes graded penalties: first violation attracts fine up to 50000 rupees, second or subsequent violation within five years attracts imprisonment up to three months and fine up to one lakh rupees. Underpayment of minimum wages can attract ten times the underpayment as compensation under Section 56(1) read with Rule 60. The new Inspector-cum-Facilitator role under Section 51 emphasizes guidance over prosecution but penalties apply for persistent non-compliance.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How often should I run a Code on Wages audit?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Best practice is to run a comprehensive Code on Wages audit annually before the financial year close in March, with quarterly checks on key dimensions like minimum wage adherence and timely payment. State minimum wage rates are revised by various states twice a year so multi-state employers should set up alerts on each state Labour Department notification. Additional ad-hoc audits should be triggered before EPFO inspections statutory audits or planned restructuring of salary components.</div></div>
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

    // State minimum wages (₹/month, for skilled tier — middle of typical band)
    const MIN_WAGE_BY_STATE = {
        DL:    {unskilled: 19846, semi: 21789, skilled: 23757, highly: 26143},
        MH:    {unskilled: 14000, semi: 15500, skilled: 16700, highly: 18250},
        KA:    {unskilled: 13500, semi: 15000, skilled: 16000, highly: 18000},
        TN:    {unskilled: 14000, semi: 15500, skilled: 17000, highly: 19000},
        TG:    {unskilled: 13500, semi: 15000, skilled: 16000, highly: 17500},
        GJ:    {unskilled: 12500, semi: 14000, skilled: 15000, highly: 16500},
        UP:    {unskilled: 12000, semi: 13000, skilled: 14000, highly: 16000},
        HR:    {unskilled: 14000, semi: 15500, skilled: 16500, highly: 18750},
        WB:    {unskilled: 11000, semi: 12500, skilled: 13500, highly: 15000},
        PB:    {unskilled: 11389, semi: 12500, skilled: 13500, highly: 14500},
        OTHER: {unskilled: 10500, semi: 11500, skilled: 12500, highly: 14000}
    };
    const FLOOR_WAGE_DAILY = 178;
    const FLOOR_WAGE_MONTHLY = FLOOR_WAGE_DAILY * 26;  // ~₹4,628

    let payMode = 'cheque';
    let otRate = '2';
    let slipFlag = 'yes';
    let equalFlag = 'no';
    let bonusFlag = 'yes';
    let fixedFlag = 'yes';
    let apptFlag = 'yes';
    let epfoFlag = 'yes';

    function compute() {
        const ctc = parseInt(document.getElementById('ctc').value);
        const basicPct = parseINR(document.getElementById('basicPct').value);
        const state = document.getElementById('state').value;
        const skill = document.getElementById('skill').value;
        const payDay = parseInt(document.getElementById('payDay').value);
        const deductPct = parseINR(document.getElementById('deductPct').value);

        if (!ctc || ctc < 5000) { alert('Please enter monthly CTC of at least ₹5,000.'); return; }
        if (!basicPct || basicPct < 20) { alert('Basic % must be at least 20.'); return; }

        const basicAmount = ctc * basicPct / 100;
        const stateMinWage = MIN_WAGE_BY_STATE[state][skill];

        // Run 13 checks
        const checks = [];

        // 1. Wage Definition (50% Rule)
        if (basicPct >= 50) {
            checks.push({
                name: 'Wage Definition (50% Rule)', section: 'Section 2(y)',
                status: 'pass', finding: 'Basic at ' + basicPct + '% meets the 50% threshold.',
                action: 'Maintain current structure. Re-validate after any salary revision.'
            });
        } else {
            checks.push({
                name: 'Wage Definition (50% Rule)', section: 'Section 2(y)',
                status: 'fail', finding: 'Basic at ' + basicPct + '% is below the 50% statutory floor. Excluded items exceed 50% cap.',
                action: 'Restructure salary so Basic + DA ≥ 50% of CTC. Use the Patron CTC Structure Calculator for component reallocation.'
            });
        }

        // 2. State Minimum Wage
        if (ctc >= stateMinWage) {
            checks.push({
                name: 'State Minimum Wage', section: 'Section 6',
                status: 'pass', finding: 'CTC ₹' + ctc.toLocaleString('en-IN') + ' exceeds ' + state + ' ' + skill + ' minimum wage of ₹' + stateMinWage.toLocaleString('en-IN') + '/mo.',
                action: 'Verify wages remain above minimum after deductions. Re-check on each state notification revision.'
            });
        } else {
            const shortfall = stateMinWage - ctc;
            checks.push({
                name: 'State Minimum Wage', section: 'Section 6',
                status: 'fail', finding: 'CTC ₹' + ctc.toLocaleString('en-IN') + ' is below ' + state + ' ' + skill + ' minimum wage ₹' + stateMinWage.toLocaleString('en-IN') + '/mo. Shortfall ₹' + shortfall.toLocaleString('en-IN') + '/mo.',
                action: 'Increase wages to at least minimum wage. Pay arrears for non-compliant period. Risk: 10× compensation under Section 56(1).'
            });
        }

        // 3. National Floor Wage
        if (ctc >= FLOOR_WAGE_MONTHLY) {
            checks.push({
                name: 'National Floor Wage', section: 'Section 9',
                status: 'pass', finding: 'CTC well above floor wage of ₹178/day (~₹4,628/mo).',
                action: 'Floor wage compliance is automatic given state-rate adherence. No further action.'
            });
        } else {
            checks.push({
                name: 'National Floor Wage', section: 'Section 9',
                status: 'fail', finding: 'CTC below national floor wage of ₹178/day.',
                action: 'Immediately raise wages to floor minimum.'
            });
        }

        // 4. Equal Remuneration
        if (equalFlag === 'yes') {
            checks.push({
                name: 'Equal Remuneration', section: 'Section 3',
                status: 'pass', finding: 'Annual pay equity audit documented.',
                action: 'Refresh audit annually. Document recruitment and promotion practices.'
            });
        } else {
            checks.push({
                name: 'Equal Remuneration', section: 'Section 3',
                status: 'fail', finding: 'No documented equal-pay audit.',
                action: 'Run annual gender pay-equity audit. Document role-by-role analysis. Issue policy statement.'
            });
        }

        // 5. Wage Period (assumed monthly — basic compliance)
        checks.push({
            name: 'Wage Period Definition', section: 'Section 16',
            status: 'pass', finding: 'Assumed monthly wage period — standard for office employees.',
            action: 'Confirm wage period is specified in employment contracts.'
        });

        // 6. Time of Payment (by 7th)
        if (payDay <= 7) {
            checks.push({
                name: 'Time of Payment', section: 'Section 17',
                status: 'pass', finding: 'Wages paid by ' + payDay + 'th of next month — within statutory deadline.',
                action: 'Maintain current payment cycle. Have backup processes for bank holidays.'
            });
        } else if (payDay <= 10) {
            checks.push({
                name: 'Time of Payment', section: 'Section 17',
                status: 'warn', finding: 'Wages paid by ' + payDay + 'th — past 7-day Code on Wages requirement (was permitted under older Payment of Wages Act).',
                action: 'Move payment to 7th of next month. Update payroll calendar.'
            });
        } else {
            checks.push({
                name: 'Time of Payment', section: 'Section 17',
                status: 'fail', finding: 'Wages paid by ' + payDay + 'th — significantly past statutory deadline.',
                action: 'Restructure payroll cycle to pay by 7th of next month. Risk: penalty + interest on delayed wages.'
            });
        }

        // 7. Mode of Payment
        if (payMode === 'electronic') {
            checks.push({
                name: 'Mode of Payment', section: 'Section 15',
                status: 'pass', finding: 'Electronic transfer to bank account — best practice.',
                action: 'Maintain electronic payment infrastructure.'
            });
        } else if (payMode === 'cheque') {
            checks.push({
                name: 'Mode of Payment', section: 'Section 15',
                status: 'warn', finding: 'Cheque payment — permitted but transitioning to electronic.',
                action: 'Migrate to direct bank transfer. Cheque adds reconciliation overhead and clearance delay.'
            });
        } else {
            checks.push({
                name: 'Mode of Payment', section: 'Section 15',
                status: 'fail', finding: 'Cash payment — being phased out, may be restricted in your industry.',
                action: 'Switch to direct bank transfer. Cash payments lack audit trail and may attract scrutiny.'
            });
        }

        // 8. Deductions Cap
        if (deductPct <= 50) {
            checks.push({
                name: 'Deductions Cap', section: 'Section 18',
                status: 'pass', finding: 'Total deductions at ' + deductPct + '% — within 50% statutory cap.',
                action: 'Monitor deductions on case-by-case basis. Avoid loan recoveries that push above 50%.'
            });
        } else if (deductPct <= 75) {
            checks.push({
                name: 'Deductions Cap', section: 'Section 18',
                status: 'warn', finding: 'Total deductions at ' + deductPct + '% — only permitted if including cooperative society payment.',
                action: 'Verify cooperative-society component. Otherwise restructure deductions below 50%.'
            });
        } else {
            checks.push({
                name: 'Deductions Cap', section: 'Section 18',
                status: 'fail', finding: 'Total deductions at ' + deductPct + '% exceeds even the 75% extended cap.',
                action: 'Immediately restructure deductions. Risk of legal challenge from employee + Section 56 penalty.'
            });
        }

        // 9. Wage Slips
        if (slipFlag === 'yes') {
            checks.push({
                name: 'Wage Slips & Records', section: 'Section 50',
                status: 'pass', finding: 'Monthly wage slips issued.',
                action: 'Verify Form Q (integrated wage register) is maintained. Sample-check 5-10 wage slips quarterly.'
            });
        } else {
            checks.push({
                name: 'Wage Slips & Records', section: 'Section 50',
                status: 'fail', finding: 'No monthly wage slips issued.',
                action: 'Implement wage slip generation immediately. Most payroll software (Keka, GreytHR, Zoho) include this.'
            });
        }

        // 10. Statutory Bonus
        if (bonusFlag === 'yes' || bonusFlag === 'na') {
            checks.push({
                name: 'Statutory Bonus', section: 'Section 26',
                status: 'pass', finding: bonusFlag === 'na' ? 'No bonus-eligible employees in scope.' : 'Bonus paid within 8-month deadline.',
                action: 'Track bonus eligibility for employees crossing ₹21K threshold under new wage code.'
            });
        } else {
            checks.push({
                name: 'Statutory Bonus', section: 'Section 26',
                status: 'fail', finding: 'Bonus not paid within 8 months of accounting year close.',
                action: 'Pay outstanding bonus immediately with interest. Implement annual bonus calendar.'
            });
        }

        // 11. Overtime
        if (otRate === '2') {
            checks.push({
                name: 'Overtime Wages', section: 'Section 14',
                status: 'pass', finding: 'Overtime paid at 2× ordinary rate — Code-compliant.',
                action: 'Maintain overtime register with computation worksheets per employee.'
            });
        } else if (otRate === '1.5') {
            checks.push({
                name: 'Overtime Wages', section: 'Section 14',
                status: 'fail', finding: 'Overtime at 1.5× — below the 2× statutory rate.',
                action: 'Increase overtime rate to 2× of ordinary wages. Pay arrears for past underpayment period.'
            });
        } else {
            checks.push({
                name: 'Overtime Wages', section: 'Section 14',
                status: 'warn', finding: 'No overtime paid — verify whether overtime work has occurred.',
                action: 'If overtime work occurs, must pay at 2× rate. If no OT work, no action needed.'
            });
        }

        // 12. Fixed-term Parity
        if (fixedFlag === 'yes' || fixedFlag === 'na') {
            checks.push({
                name: 'Fixed-term Employee Parity', section: 'Code on Social Security 2020',
                status: 'pass', finding: fixedFlag === 'na' ? 'No fixed-term employees in scope.' : 'Fixed-term gratuity at 1-year service — Code-compliant.',
                action: 'Document parity in EPF, ESI, medical insurance, and leave for fixed-term employees.'
            });
        } else {
            checks.push({
                name: 'Fixed-term Employee Parity', section: 'Code on Social Security 2020',
                status: 'fail', finding: 'Fixed-term gratuity at 5-year requirement — outdated under new code.',
                action: 'Update gratuity policy: 1-year continuous service triggers entitlement for fixed-term employees.'
            });
        }

        // 13. Appointment Letter + EPFO
        if (apptFlag === 'yes' && epfoFlag === 'yes') {
            checks.push({
                name: 'Appointment Letters & EPFO', section: 'OSH Code + EPF Act',
                status: 'pass', finding: 'Appointment letters issued + monthly ECR filed.',
                action: 'Maintain document archive for 7 years. Run quarterly reconciliation.'
            });
        } else if (apptFlag === 'no' && epfoFlag === 'yes') {
            checks.push({
                name: 'Appointment Letters & EPFO', section: 'OSH Code + EPF Act',
                status: 'warn', finding: 'EPFO compliance OK but appointment letters not consistently issued.',
                action: 'Issue appointment letters to all current employees. Make it part of onboarding for new hires.'
            });
        } else {
            checks.push({
                name: 'Appointment Letters & EPFO', section: 'OSH Code + EPF Act',
                status: 'fail', finding: 'Appointment letter or EPFO ECR compliance gap detected.',
                action: 'Issue appointment letters + ensure monthly ECR filing. EPFO non-compliance attracts Section 7Q interest + 14B damages.'
            });
        }

        // Compute overall score
        let passCount = 0, warnCount = 0, failCount = 0;
        checks.forEach(c => {
            if (c.status === 'pass') passCount++;
            else if (c.status === 'warn') warnCount++;
            else failCount++;
        });
        const score = Math.round((passCount + warnCount * 0.5) / checks.length * 100);
        let scoreLevel, headline, summary;
        if (score >= 80) {
            scoreLevel = 'high';
            headline = 'Strong Compliance Posture';
            summary = score + '% of compliance dimensions are passing or near-passing. Address ' + failCount + ' failure' + (failCount === 1 ? '' : 's') + ' and ' + warnCount + ' warning' + (warnCount === 1 ? '' : 's') + ' to reach full compliance. Eligible for routine Inspector-cum-Facilitator advisory rather than prosecution.';
        } else if (score >= 50) {
            scoreLevel = 'medium';
            headline = 'Moderate Compliance Risk';
            summary = score + '% score with ' + failCount + ' failure' + (failCount === 1 ? '' : 's') + ' and ' + warnCount + ' warning' + (warnCount === 1 ? '' : 's') + '. Significant gaps exist — address before next EPFO inspection or statutory audit. Risk of Section 56 penalties and EPFO Section 7Q interest.';
        } else {
            scoreLevel = 'low';
            headline = 'High Compliance Risk — Immediate Action Required';
            summary = score + '% score with ' + failCount + ' critical failure' + (failCount === 1 ? '' : 's') + '. Multiple statutory violations. Prioritise the failed dimensions for immediate remediation. Risk of Section 56 prosecution, 10× wage compensation, and EPFO penalties.';
        }

        renderResult({score, scoreLevel, headline, summary, checks, passCount, warnCount, failCount});
    }

    function renderResult(r) {
        const gauge = document.getElementById('scoreGauge');
        gauge.className = 'score-gauge ' + r.scoreLevel;
        document.getElementById('scoreValue').textContent = r.score + '%';
        const pill = document.getElementById('scorePill');
        pill.className = 'score-pill ' + r.scoreLevel;
        const pillText = {high: '✓ Low Risk', medium: '⚠ Medium Risk', low: '✗ High Risk'};
        pill.textContent = pillText[r.scoreLevel];
        document.getElementById('scoreHeadline').textContent = r.headline;
        document.getElementById('scoreSummary').textContent = r.summary;

        // Dimension cards
        const grid = document.getElementById('dimGrid');
        grid.innerHTML = '';
        r.checks.forEach(c => {
            const card = document.createElement('div');
            card.className = 'dim-card ' + c.status;
            const badgeText = {pass: '✓ Pass', warn: '⚠ Warn', fail: '✗ Fail'};
            card.innerHTML = '<div class="dim-header">' +
                '<div class="dim-title">' + c.name + '</div>' +
                '<span class="dim-badge ' + c.status + '">' + badgeText[c.status] + '</span>' +
                '</div>' +
                '<div class="dim-section">' + c.section + '</div>' +
                '<div class="dim-finding">' + c.finding + '</div>' +
                '<div class="dim-action"><strong>Action:</strong> ' + c.action + '</div>';
            grid.appendChild(card);
        });

        // Remediation list (failures + warnings only)
        const list = document.getElementById('remediationList');
        list.innerHTML = '';
        const remediations = r.checks.filter(c => c.status !== 'pass');
        if (remediations.length === 0) {
            list.innerHTML = '<div class="remediation-empty">✓ No remediation items — all 13 dimensions passing!</div>';
        } else {
            remediations.forEach(c => {
                const li = document.createElement('li');
                li.innerHTML = '<strong>' + c.name + ':</strong> ' + c.action;
                list.appendChild(li);
            });
        }

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        document.getElementById('ctc').value = 50000;
        document.getElementById('basicPct').value = 35;
        document.getElementById('state').value = 'MH';
        document.getElementById('skill').value = 'skilled';
        document.getElementById('payDay').value = 7;
        document.getElementById('deductPct').value = 40;
        payMode = 'cheque'; otRate = '2';
        slipFlag = 'yes'; equalFlag = 'no'; bonusFlag = 'yes';
        fixedFlag = 'yes'; apptFlag = 'yes'; epfoFlag = 'yes';
        ['modeGroup', 'otGroup', 'slipGroup', 'equalGroup', 'bonusGroup', 'fixedGroup', 'apptGroup', 'epfoGroup'].forEach(function(gid) {
            document.querySelectorAll('#' + gid + ' .toggle-btn').forEach(b => b.classList.remove('active'));
        });
        document.querySelector('#modeGroup .toggle-btn[data-val="cheque"]').classList.add('active');
        document.querySelector('#otGroup .toggle-btn[data-val="2"]').classList.add('active');
        document.querySelector('#slipGroup .toggle-btn[data-val="yes"]').classList.add('active');
        document.querySelector('#equalGroup .toggle-btn[data-val="no"]').classList.add('active');
        document.querySelector('#bonusGroup .toggle-btn[data-val="yes"]').classList.add('active');
        document.querySelector('#fixedGroup .toggle-btn[data-val="yes"]').classList.add('active');
        document.querySelector('#apptGroup .toggle-btn[data-val="yes"]').classList.add('active');
        document.querySelector('#epfoGroup .toggle-btn[data-val="yes"]').classList.add('active');
        document.getElementById('resultSection').classList.remove('visible');
    });

    // Wire toggle groups
    function wireToggle(gid, setter) {
        document.querySelectorAll('#' + gid + ' .toggle-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.querySelectorAll('#' + gid + ' .toggle-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                setter(btn.dataset.val);
            });
        });
    }
    wireToggle('modeGroup', v => payMode = v);
    wireToggle('otGroup', v => otRate = v);
    wireToggle('slipGroup', v => slipFlag = v);
    wireToggle('equalGroup', v => equalFlag = v);
    wireToggle('bonusGroup', v => bonusFlag = v);
    wireToggle('fixedGroup', v => fixedFlag = v);
    wireToggle('apptGroup', v => apptFlag = v);
    wireToggle('epfoGroup', v => epfoFlag = v);

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
