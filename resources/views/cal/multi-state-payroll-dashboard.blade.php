@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Multi-State Payroll Calculator | PT, PF & ESI by State 2026</title>
    <meta name="description" content="Free multi-state payroll dashboard: per-state employer cost, professional tax, PF, ESI and minimum wage compliance across 10+ Indian states. CA-built. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/multi-state-payroll-dashboard/">
    <meta property="og:title" content="Multi-State Payroll Dashboard 2026">
    <meta property="og:description" content="Track payroll across multiple Indian states — professional tax slabs, minimum wages, employer cost, compliance flags.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/multi-state-payroll-dashboard">
    <meta property="og:image" content="/tools/og/multi-state-payroll-dashboard.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Multi-State Payroll Dashboard 2026">
    <meta name="twitter:description" content="Track multi-state payroll: PT, min wage, employer cost. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/multi-state-payroll-dashboard.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Multi-State Payroll Dashboard",
      "description": "Multi-State Payroll Dashboard is a comprehensive payroll cost analysis tool for Indian companies operating across multiple states. The tool takes per-state headcount and average gross monthly salary inputs across ten major states (Maharashtra, Karnataka, Tamil Nadu, Telangana, Gujarat, Delhi, Uttar Pradesh, West Bengal, Haryana, Punjab) and computes per-state professional tax liability based on applicable slabs as of FY 2025-26, employer Provident Fund contribution at twelve percent of basic wages capped at fifteen thousand rupees or actual basic, Employee State Insurance employer share at three point two five percent for employees earning up to twenty-one thousand rupees per month, gratuity accrual at four point eight one percent under Payment of Gratuity Act 1972, and total monthly employer cost. The tool flags state-specific compliance issues including states without professional tax obligation (Delhi, Uttar Pradesh, Haryana, Rajasthan), states with gender-specific exemptions (Maharashtra women earning up to twenty-five thousand rupees exempt), states with February or March higher deduction (Maharashtra and Karnataka two hundred fifty rupees additional), states with half-yearly payment cycles (Kerala and Tamil Nadu), and minimum wage compliance against state-notified rates. The consolidated dashboard shows total employees across all states, total monthly and annual employer cost, average cost per employee, geographic cost distribution bar chart, per-state breakdown table with employees salary cost professional tax statutory burden and total monthly cost, top three cost-driver states, and compliance flags requiring attention including states where minimum wage is breached states without PTRC registration where required and states with unique compliance triggers like Maharashtra Labour Welfare Fund or Karnataka labour cess. Suitable for CFOs of multi-state operations Chief HR Officers managing distributed teams payroll managers running consolidated cost analysis and statutory auditors validating multi-state compliance.",
      "url": "/tools/multi-state-payroll-dashboard",
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
        {"@type": "ListItem", "position": 3, "name": "Multi-State Payroll Dashboard", "item": "/tools/multi-state-payroll-dashboard"}
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
          "name": "What is professional tax and which states levy it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional Tax is a state-level direct tax levied by state governments under Article 276 of the Constitution on salaries and professional income. It is currently applicable in 21 Indian states and one Union Territory including Maharashtra Karnataka Tamil Nadu Telangana Gujarat West Bengal and others. PT is not applicable in Delhi Uttar Pradesh Haryana Rajasthan and several northeastern states. The maximum annual PT any state can charge is twenty-five hundred rupees per Article 276."
          }
        },
        {
          "@type": "Question",
          "name": "What is the professional tax rate in Maharashtra?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra has gender-specific Professional Tax slabs. Men earning up to seven thousand five hundred rupees per month are exempt; one hundred seventy-five rupees per month between 7501 and 10000; two hundred per month above ten thousand with three hundred in February to reach annual cap of two thousand five hundred rupees. Women earning up to twenty-five thousand per month are fully exempt. Employers pay PT to Maharashtra State Tax Department monthly."
          }
        },
        {
          "@type": "Question",
          "name": "How does Karnataka professional tax work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Karnataka revised its Professional Tax slabs effective 1 April 2025. Employees earning below twenty-five thousand rupees per month are exempt. Above twenty-five thousand rupees the deduction is two hundred rupees per month for eleven months and three hundred rupees in February reaching the annual cap of two thousand five hundred rupees. Karnataka requires PT payment by the twentieth of the succeeding month. Late payment attracts 1.25 percent monthly interest. All GST-registered entities must obtain PTEC enrollment regardless of employee count."
          }
        },
        {
          "@type": "Question",
          "name": "Is professional tax applicable in Delhi or NCR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Professional Tax is not applicable in Delhi National Capital Territory. Companies headquartered in Delhi do not deduct PT for Delhi-based employees. However Delhi NCR operations span three different state jurisdictions — Delhi Haryana (Gurgaon Faridabad) and Uttar Pradesh (Noida Greater Noida Ghaziabad). Delhi and Haryana are PT-exempt but Uttar Pradesh introduced PT in some districts. Employers must apply state-specific rules based on actual work location of each employee not the registered office address."
          }
        },
        {
          "@type": "Question",
          "name": "What if I have employees across multiple states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Multi-state employers must obtain separate Professional Tax Registration Certificate in each PT-applicable state where employees work. Each state has its own slab structure deduction periodicity (monthly half-yearly or annual) and remittance deadlines. PT must be applied based on the work location state of each employee not the registered office. Failing to register in a state where employees work attracts late registration penalty plus penalty on all unpaid PT plus interest typically 1 to 1.25 percent per month."
          }
        },
        {
          "@type": "Question",
          "name": "How is Tamil Nadu professional tax different?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tamil Nadu Professional Tax is calculated on a half-yearly basis not monthly. Deductions are made twice a year in August (covering April-September) and January (covering October-March). The half-yearly slab is computed on six-month gross total not divided from monthly. Maximum half-yearly PT is twelve hundred fifty rupees totaling twenty-five hundred annually. Verify your payroll software handles the half-yearly slab correctly."
          }
        },
        {
          "@type": "Question",
          "name": "Are minimum wages different across states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. State minimum wages vary significantly by state, industry, and worker skill category. As of 2026 monthly unskilled worker minimum wages range from approximately eleven thousand rupees in Punjab to nineteen thousand eight hundred forty-six rupees in Delhi. State governments revise rates twice yearly or annually based on Consumer Price Index. Multi-state employers must apply each state rate for that location and revise on each notification. Underpayment attracts ten times compensation under Section 56(1) of Code on Wages plus interest."
          }
        },
        {
          "@type": "Question",
          "name": "What is Maharashtra Labour Welfare Fund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra Labour Welfare Fund Act 1953 requires employers with five or more employees in Maharashtra to contribute to the State Labour Welfare Fund. Contribution is twelve rupees per employee per six months by the employer plus six rupees by the employee. Payment is bi-annual by 30 June and 31 December. Similar Labour Welfare Fund schemes exist in Karnataka Tamil Nadu Gujarat Madhya Pradesh Punjab and other states with varying amounts."
          }
        },
        {
          "@type": "Question",
          "name": "Does PF and ESI apply uniformly across states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes Provident Fund under EPF Act 1952 and Employee State Insurance under ESI Act 1948 are central acts that apply uniformly across all Indian states. PF is mandatory for employees with basic wages up to fifteen thousand rupees per month with employer and employee both contributing twelve percent. ESI is mandatory for employees earning up to twenty-one thousand per month gross with employer contributing 3.25 percent and employee 0.75 percent."
          }
        },
        {
          "@type": "Question",
          "name": "What is Shops and Establishments Act registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Shops and Establishments Act registration is a state-level requirement under each state Shops and Establishments Act. Every commercial establishment must register within thirty days of commencing operations in that state. Each state has its own Act with different working hour limits leave entitlements overtime rules and inspection provisions. Multi-state employers need separate registration in each state where they have offices. Failure to register attracts state-specific penalties typically ranging from five to twenty-five thousand rupees plus per-day continuing fine."
          }
        },
        {
          "@type": "Question",
          "name": "How can I track minimum wage revisions across states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Track state Labour Department websites for notification updates. Most states revise minimum wages twice yearly typically on 1 April and 1 October based on CPI movement though revision schedules vary. Subscribe to state Labour Department email alerts and engage a labour-law compliance partner who tracks revisions across all relevant states. Multi-state operators commonly miss revisions resulting in retrospective compliance gaps. The Patron Accounting payroll team maintains a multi-state minimum wage tracker for client portfolios."
          }
        },
        {
          "@type": "Question",
          "name": "Should I centralize or decentralize multi-state payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Modern best practice is centralized payroll with state-aware logic. Use a single payroll software (Keka GreytHR Zoho People SAP SuccessFactors) configured with state-specific rule sets for PT slabs minimum wages MLWF and S&E Act provisions. The central team manages compliance while location-specific rules apply automatically based on each employee work location. Decentralized payroll with state-specific local processors increases coordination overhead and creates audit reconciliation challenges. Centralized with state-aware logic is the standard for companies above twenty employees."
          }
        },
        {
          "@type": "Question",
          "name": "What are the compliance risks of multi-state payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common multi-state payroll risks include applying registered office state PT to employees working in different states (back-payment plus interest), missing PTRC registration when first employee hired in new state (late registration penalty), using outdated minimum wage rates after state notification (10x compensation under Code on Wages), missing state-specific Labour Welfare Fund contributions (per-day fine), and inconsistent leave entitlements across states. Multi-state operators should run quarterly compliance audits and engage labour law specialists for new state expansion."
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

        /* State input grid */
        .state-grid { display: grid; gap: 10px; margin-bottom: 16px; }
        .state-row { background: var(--surface); border-radius: var(--radius); padding: 12px 16px; display: grid; grid-template-columns: 1.4fr 1fr 1fr; gap: 12px; align-items: center; border: 1px solid var(--border); }
        @media (max-width: 600px) { .state-row { grid-template-columns: 1fr 1fr; } .state-row .state-label { grid-column: 1 / -1; } }
        .state-label { font-size: 13px; font-weight: 600; color: var(--primary-dark); }
        .state-label small { display: block; font-size: 10px; color: var(--text-muted); font-weight: 400; margin-top: 2px; font-family: var(--font-mono); text-transform: uppercase; letter-spacing: 0.5px; }
        .state-input { padding: 10px 12px; border: 2px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 14px; background: var(--card); width: 100%; outline: 2px solid transparent; outline-offset: 2px; transition: border-color 0.2s; }
        .state-input:focus-visible { outline: 2px solid var(--accent); outline-offset: 2px; }
        .state-input:focus { border-color: var(--primary); }
        .state-input::placeholder { color: var(--text-muted); }

        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 18px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }

        /* Consolidated metrics */
        .metric-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 600px) { .metric-grid { grid-template-columns: repeat(4, 1fr); } }
        .metric-card { background: var(--card); border-radius: var(--radius); padding: 16px 18px; border: 1px solid var(--border); border-left: 4px solid var(--primary); }
        .metric-card.highlight { background: var(--primary); border-color: var(--primary); border-left-color: var(--accent); }
        .metric-card.highlight .metric-label, .metric-card.highlight .metric-value, .metric-card.highlight .metric-sub { color: #fff; }
        .metric-card.highlight .metric-sub { color: rgba(255,255,255,0.8); }
        .metric-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
        .metric-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); line-height: 1.1; }
        .metric-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }

        /* State breakdown table */
        .breakdown-table { background: var(--card); border-radius: var(--radius); padding: 18px; margin-bottom: 22px; border: 1px solid var(--border); overflow-x: auto; }
        .breakdown-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px; }
        .breakdown-table table { width: 100%; border-collapse: collapse; font-size: 13px; min-width: 700px; }
        .breakdown-table thead th { background: var(--primary-dark); color: #fff; padding: 10px 12px; text-align: left; font-weight: 600; font-size: 11px; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap; }
        .breakdown-table thead th:first-child { border-radius: 8px 0 0 0; }
        .breakdown-table thead th:last-child { border-radius: 0 8px 0 0; text-align: right; }
        .breakdown-table tbody td { padding: 10px 12px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .breakdown-table tbody td:first-child { font-weight: 600; color: var(--primary-dark); }
        .breakdown-table tbody td:not(:first-child) { font-family: var(--font-mono); text-align: right; }
        .breakdown-table tbody tr:nth-child(even) { background: var(--surface); }
        .breakdown-table tfoot td { padding: 12px; font-weight: 700; color: var(--primary-dark); border-top: 2px solid var(--primary); background: var(--surface-alt); }
        .breakdown-table tfoot td:not(:first-child) { font-family: var(--font-mono); text-align: right; }

        /* Bar chart */
        .chart-card { background: var(--surface); border-radius: var(--radius); padding: 22px; margin-bottom: 22px; border: 1px solid var(--border); }
        .chart-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; }
        .bar-row { display: grid; grid-template-columns: 90px 1fr 90px; gap: 10px; align-items: center; margin-bottom: 8px; font-size: 12px; }
        .bar-state { font-weight: 600; color: var(--primary-dark); }
        .bar-track { height: 24px; background: var(--surface-alt); border-radius: 4px; overflow: hidden; position: relative; }
        .bar-fill { height: 100%; background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%); transition: width 0.6s; }
        .bar-amount { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--primary-dark); text-align: right; }

        /* Compliance flags */
        .flags-card { background: var(--card); border-radius: var(--radius); padding: 22px; margin-bottom: 22px; border: 1px solid var(--border); }
        .flags-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; }
        .flag-item { padding: 12px 0; border-bottom: 1px solid var(--border); display: flex; gap: 12px; align-items: flex-start; font-size: 13px; }
        .flag-item:last-child { border-bottom: none; padding-bottom: 0; }
        .flag-icon { flex-shrink: 0; width: 22px; height: 22px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 12px; color: #fff; font-weight: 700; }
        .flag-icon.info { background: var(--info); }
        .flag-icon.warn { background: var(--accent); color: var(--primary-dark); }
        .flag-icon.danger { background: var(--danger); }
        .flag-icon.success { background: var(--success); }
        .flag-content strong { color: var(--primary-dark); display: block; font-size: 13px; margin-bottom: 2px; }
        .flag-content { color: var(--text-secondary); line-height: 1.5; }
        .flags-empty { padding: 20px; text-align: center; color: var(--success); font-weight: 600; font-size: 14px; }

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
            .metric-value { font-size: 18px; }
            .breakdown-table { padding: 12px; }
            .bar-row { grid-template-columns: 70px 1fr 70px; }
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
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Dashboard</a>
        <a href="#pt-states">PT by State</a>
        <a href="#min-wages">Minimum Wages</a>
        <a href="#mlwf">Labour Welfare Fund</a>
        <a href="#multi-state">Multi-State Setup</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    Multi-State Payroll Dashboard
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>Multi-State Payroll <span>Dashboard</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Multi-State%20Payroll%20Dashboard%20CA%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Companies operating across <strong>multiple Indian states</strong> face fragmented payroll compliance — different <strong>professional tax slabs</strong>, <strong>state minimum wages</strong>, <strong>Labour Welfare Fund contributions</strong>, and <strong>Shops &amp; Establishments registrations</strong>. This dashboard takes per-state headcount and salary inputs across 10 major states, computes per-state PT (with gender-exemption logic for Maharashtra and February higher-rate handling for Maharashtra/Karnataka), employer PF + ESI + gratuity, and total monthly cost. Generates consolidated metrics, geographic cost breakdown, and compliance flags for state-specific risks. Built for CFOs and HR teams managing distributed Indian operations.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Build Your Multi-State Payroll Dashboard</h2>
            <p class="calc-intro">Enter the number of employees and average gross monthly salary for each state where you operate. Leave blank for states with no employees. The dashboard computes per-state cost, professional tax, statutory burden, and consolidated employer total — plus state-specific compliance flags.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Per-State Headcount &amp; Average Salary</div>

            <div class="state-grid" id="stateGrid"></div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Multi-State Dashboard</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="metric-grid" id="metricGrid"></div>

                <div class="breakdown-table">
                    <div class="breakdown-title">Per-State Breakdown</div>
                    <table id="breakdownTable">
                        <thead>
                            <tr>
                                <th>State</th>
                                <th>Employees</th>
                                <th>Avg Salary</th>
                                <th>Salary Cost</th>
                                <th>Prof. Tax</th>
                                <th>Statutory*</th>
                                <th>Monthly Total</th>
                            </tr>
                        </thead>
                        <tbody id="breakdownBody"></tbody>
                        <tfoot id="breakdownFoot"></tfoot>
                    </table>
                    <div style="font-size:11px;color:var(--text-muted);margin-top:10px;line-height:1.4;">*Statutory = Employer PF (12% capped at ₹15K basic) + ESI (3.25% if avg salary ≤ ₹21K) + Gratuity (4.81% of basic, basic = 50% of CTC).</div>
                </div>

                <div class="chart-card">
                    <div class="chart-title">Geographic Cost Distribution (Monthly Total)</div>
                    <div id="barChart"></div>
                </div>

                <div class="flags-card">
                    <div class="flags-title">Compliance Flags &amp; Recommendations</div>
                    <div id="flagsList"></div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — Multi-State Payroll Dashboard CA validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Multi-State%20Payroll%20Dashboard%20CA%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20Multi-State%20Payroll%20Dashboard%20CA%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="pt-states">
            <h2>Professional Tax — State-Wise Slabs</h2>

            <p>Professional Tax is levied by state governments under <a href="https://en.wikipedia.org/wiki/Professional_tax" target="_blank" rel="noopener">Article 276 of the Constitution</a>. Maximum annual PT any state can charge is ₹2,500 per Article 276 cap. Currently 21 states + 1 UT levy PT; 14+ states do not. Multi-state employers must register separately in each PT-applicable state where they have employees.</p>

            <h3>States That Levy Professional Tax</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>State</th><th>Threshold</th><th>Monthly PT</th><th>Special Notes</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Maharashtra</strong></td><td>Men: ₹7,500<br>Women: ₹25,000</td><td>₹0 to ₹200<br>(₹300 in Feb)</td><td>Gender-specific. Annual cap ₹2,500.</td></tr>
                    <tr><td><strong>Karnataka</strong></td><td>₹25,000 (revised Apr 2025)</td><td>₹200 (₹300 in Feb)</td><td>All <a href="https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" target="_blank" rel="noopener">GST</a>-registered must enroll regardless of headcount.</td></tr>
                    <tr><td><strong>West Bengal</strong></td><td>₹10,000</td><td>₹110 to ₹200<br>(4 tiers)</td><td>Annual payment by 31 July. 1% interest on delay.</td></tr>
                    <tr><td><strong>Tamil Nadu</strong></td><td>₹21,000 (half-yearly)</td><td>Half-yearly slabs</td><td>Paid in August + January. Compute on 6-month total.</td></tr>
                    <tr><td><strong>Telangana / AP</strong></td><td>₹15,000</td><td>₹150 to ₹200</td><td>Standard monthly slabs.</td></tr>
                    <tr><td><strong>Gujarat</strong></td><td>₹12,000</td><td>₹150 to ₹200</td><td>Sliding monthly slabs.</td></tr>
                    <tr><td><strong>Madhya Pradesh</strong></td><td>₹15,000</td><td>₹208/mo</td><td>Above threshold flat rate.</td></tr>
                    <tr><td><strong>Kerala</strong></td><td>Half-yearly</td><td>₹150 to ₹208/mo equiv.</td><td>Half-yearly payment in Aug + Feb.</td></tr>
                    <tr><td><strong>Odisha</strong></td><td>₹14,000</td><td>₹125 to ₹200</td><td>Sliding monthly slabs.</td></tr>
                    <tr><td><strong>Punjab</strong></td><td>Income-based</td><td>₹200/mo flat</td><td>Levied on most salaried employees.</td></tr>
                </tbody>
            </table>

            <h3>States That Do NOT Levy Professional Tax</h3>
            <p>Professional Tax is <strong>not applicable</strong> in: <strong>Delhi</strong>, <strong>Uttar Pradesh</strong>, <strong>Haryana</strong>, <strong>Rajasthan</strong>, <strong>Chhattisgarh</strong>, <strong>Jharkhand</strong>, <strong>Uttarakhand</strong>, <strong>Himachal Pradesh</strong>, <strong>Jammu &amp; Kashmir</strong>, <strong>Goa</strong>, <strong>Arunachal Pradesh</strong>, and several other northeastern states. Companies headquartered in these states do not deduct PT for local employees but must apply PT for employees working in PT-applicable states.</p>

            <div class="callout warn">
                <p><strong>Watch-out: Delhi NCR spans 3 jurisdictions.</strong> Delhi (no PT), Uttar Pradesh — Noida/Greater Noida/Ghaziabad (PT introduced in some districts), Haryana — Gurgaon/Faridabad (no PT). Apply PT based on each employee's <em>actual work location</em>, not the registered office address. Multi-state operators commonly miss this.</p>
            </div>
        </section>

        <section class="content-section" id="min-wages">
            <h2>State Minimum Wages — 2026 Reference</h2>

            <p>State minimum wages are notified by state Labour Departments under Section 5 of the <a href="https://labour.gov.in" target="_blank" rel="noopener">Code on Wages 2019</a>. Rates vary by state, industry, and worker skill category. The table below shows indicative monthly minimum wages for unskilled and skilled workers under the Shops &amp; Establishments framework. Verify each state's current notification before payroll application.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>State</th><th>Unskilled (₹/mo)</th><th>Semi-Skilled (₹/mo)</th><th>Skilled (₹/mo)</th><th>Highly Skilled (₹/mo)</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Delhi</strong></td><td>₹19,846</td><td>₹21,789</td><td>₹23,757</td><td>₹26,143</td></tr>
                    <tr><td><strong>Maharashtra</strong></td><td>₹14,000</td><td>₹15,500</td><td>₹16,700</td><td>₹18,250</td></tr>
                    <tr><td><strong>Karnataka</strong></td><td>₹13,500</td><td>₹15,000</td><td>₹16,000</td><td>₹18,000</td></tr>
                    <tr><td><strong>Tamil Nadu</strong></td><td>₹14,000</td><td>₹15,500</td><td>₹17,000</td><td>₹19,000</td></tr>
                    <tr><td><strong>Telangana</strong></td><td>₹13,500</td><td>₹15,000</td><td>₹16,000</td><td>₹17,500</td></tr>
                    <tr><td><strong>Gujarat</strong></td><td>₹12,500</td><td>₹14,000</td><td>₹15,000</td><td>₹16,500</td></tr>
                    <tr><td><strong>Uttar Pradesh</strong></td><td>₹12,000</td><td>₹13,000</td><td>₹14,000</td><td>₹16,000</td></tr>
                    <tr><td><strong>Haryana</strong></td><td>₹14,000</td><td>₹15,500</td><td>₹16,500</td><td>₹18,750</td></tr>
                    <tr><td><strong>West Bengal</strong></td><td>₹11,000</td><td>₹12,500</td><td>₹13,500</td><td>₹15,000</td></tr>
                    <tr><td><strong>Punjab</strong></td><td>₹11,389</td><td>₹12,500</td><td>₹13,500</td><td>₹14,500</td></tr>
                </tbody>
            </table>

            <p><em>Indicative rates as of early 2026. State rates revised by various Labour Departments at different schedules — verify each state's current notification before relying on these for payroll.</em></p>

            <div class="callout">
                <p><strong>Multi-state minimum wage tracker.</strong> States revise rates twice yearly or annually based on CPI movement. A company operating across Delhi + Karnataka + Maharashtra + Gujarat needs four separate revision-tracking processes. Patron's payroll team — staffed by <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-empanelled CAs — maintains automated trackers for client portfolios with email alerts on each notification.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Multi-state operations? Patron handles it end-to-end.</h3>
            <p>Patron's payroll team manages multi-state PT registrations, minimum wage tracking, MLWF contributions, S&amp;E Act compliance, and consolidated payroll processing across 10+ states. Fixed-fee, audit-ready output.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Multi-State%20Payroll%20Dashboard%20CA%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="mlwf">
            <h2>Labour Welfare Fund (LWF) — State-Specific</h2>

            <p>Labour Welfare Fund is a state-level statutory contribution under each state's Labour Welfare Fund Act. The fund is used by State Labour Welfare Boards to finance welfare schemes — housing, medical, recreation, education for workers' children. Contributions are typically nominal but missing state-specific LWF is a common multi-state compliance gap.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>State</th><th>Employer Share</th><th>Employee Share</th><th>Frequency</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Maharashtra</strong></td><td>₹12 / 6 months</td><td>₹6 / 6 months</td><td>Bi-annual (Jun, Dec)</td></tr>
                    <tr><td><strong>Karnataka</strong></td><td>₹40 / year</td><td>₹20 / year</td><td>Annual (Jan)</td></tr>
                    <tr><td><strong>Tamil Nadu</strong></td><td>₹20 / year</td><td>₹10 / year</td><td>Annual (Jan)</td></tr>
                    <tr><td><strong>Andhra Pradesh / Telangana</strong></td><td>₹30 / year</td><td>₹2 / year</td><td>Annual (Jan)</td></tr>
                    <tr><td><strong>Gujarat</strong></td><td>₹6 / 6 months</td><td>₹3 / 6 months</td><td>Bi-annual</td></tr>
                    <tr><td><strong>Madhya Pradesh</strong></td><td>₹30 / 6 months</td><td>₹10 / 6 months</td><td>Bi-annual</td></tr>
                    <tr><td><strong>Delhi</strong></td><td>₹2.25 / month</td><td>₹0.75 / month</td><td>Monthly</td></tr>
                    <tr><td><strong>Punjab</strong></td><td>₹5 / month</td><td>₹5 / month</td><td>Monthly</td></tr>
                    <tr><td><strong>Haryana</strong></td><td>₹25 / month</td><td>₹10 / month</td><td>Monthly</td></tr>
                    <tr><td><strong>West Bengal</strong></td><td>₹15 / 6 months</td><td>₹3 / 6 months</td><td>Bi-annual</td></tr>
                </tbody>
            </table>

            <p>Many states have additional schemes — building &amp; construction welfare cess, contract labour welfare cess, etc. Verify state-specific applicability based on your industry classification.</p>
        </section>

        <section class="content-section" id="multi-state">
            <h2>Setting Up Multi-State Payroll</h2>

            <h3>Recommended Architecture</h3>
            <p>Modern best practice is centralized payroll with state-aware logic. Use a single payroll software (Keka, GreytHR, Zoho People, SAP SuccessFactors) configured with state-specific rule sets. The central team manages compliance while location-specific rules apply automatically based on each employee's work location.</p>

            <h3>Per-State Compliance Footprint</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Compliance Item</th><th>Scope</th><th>Frequency</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>PTRC Registration</strong></td><td>Per state (where PT applicable)</td><td>One-time + monthly/quarterly returns</td></tr>
                    <tr><td><strong>S&amp;E Act Registration</strong></td><td>Per state where office located</td><td>One-time + annual renewal</td></tr>
                    <tr><td><strong><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF</a> Sub-Code</strong></td><td>Per location (if separate)</td><td>One-time + monthly ECR</td></tr>
                    <tr><td><strong>ESIC Branch Code</strong></td><td>Per state with eligible employees</td><td>One-time + monthly contributions</td></tr>
                    <tr><td><strong>LWF Registration</strong></td><td>Per state (where applicable)</td><td>One-time + bi-annual/annual contribution</td></tr>
                    <tr><td><strong>Minimum Wage Tracker</strong></td><td>Per state</td><td>Monitor revisions (2x yearly typical)</td></tr>
                    <tr><td><strong>State Specific Returns</strong></td><td>Per state</td><td>Annual / bi-annual</td></tr>
                </tbody>
            </table>

            <h3>Top Pitfalls</h3>
            <ul>
                <li><strong>Wrong state PT applied</strong> — applying registered office state PT to employees working in different states</li>
                <li><strong>Missing PTRC registration</strong> when first employee hired in a new state — common during rapid expansion (also impacts <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> GST place-of-supply assessments)</li>
                <li><strong>Missing Karnataka February ₹300 / Maharashtra March ₹300</strong> — payroll software defaults to ₹200 for all 12 months</li>
                <li><strong>Not applying gender-specific exemption</strong> for women in Maharashtra (up to ₹25,000 exempt)</li>
                <li><strong>Outdated minimum wage rates</strong> after state notification — typical 6-month lag for unprepared employers</li>
                <li><strong>Missing Tamil Nadu half-yearly logic</strong> — TN PT computed on 6-month gross, not monthly</li>
                <li><strong>Missing state LWF contributions</strong> — small amounts but missing creates audit findings</li>
                <li><strong>Not deregistering on office closure</strong> — keeps liability open until formal closure</li>
            </ul>

            <div class="callout danger">
                <p><strong>Real-world cost.</strong> A company operating across 4 states discovered during an early-2026 audit that 2 states had October 2024 rates applied while 2 had October 2025 rates. Total underpayment was ₹4.3 lakh across 28 workers over 6 months — before interest and 10× compensation under Code on Wages Section 56. Multi-state PT or minimum wage drift is the single biggest payroll compliance risk for distributed operations.</p>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Multi-State Payroll</h3>
            <p>Patron handles PTRC + S&amp;E Act + LWF registrations, minimum wage tracking, and consolidated payroll across all Indian states.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=Multi-State%20Payroll%20Dashboard%20CA%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20Multi-State%20Payroll%20Dashboard%20CA.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/payroll-services" class="sidebar-link">Payroll Services<span class="arrow">→</span></a>
            <a href="/professional-tax-registration" class="sidebar-link">PT Registration<span class="arrow">→</span></a>
            <a href="/shops-establishments" class="sidebar-link">Shops &amp; Estab. Registration<span class="arrow">→</span></a>
            <a href="/labour-law-compliance" class="sidebar-link">Labour Law Compliance<span class="arrow">→</span></a>
            <a href="/pf-esi-registration" class="sidebar-link">PF / ESI Registration<span class="arrow">→</span></a>
            <a href="/payroll-audit" class="sidebar-link">Payroll Audit<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/code-on-wages-compliance-checker" class="sidebar-link">Code on Wages Checker<span class="arrow">→</span></a>
            <a href="/tools/ctc-structure-calculator" class="sidebar-link">CTC Structure Calculator<span class="arrow">→</span></a>
            <a href="/tools/professional-tax-calculator" class="sidebar-link">PT Calculator<span class="arrow">→</span></a>
            <a href="/tools/pf-calculator" class="sidebar-link">PF Calculator<span class="arrow">→</span></a>
            <a href="/tools/esi-calculator" class="sidebar-link">ESI Calculator<span class="arrow">→</span></a>
            <a href="/tools/india-entity-vs-eor-comparison" class="sidebar-link">Entity vs EOR<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/professional-tax-india" class="sidebar-link">Professional Tax Guide<span class="arrow">→</span></a>
            <a href="/blog/state-minimum-wages-india" class="sidebar-link">State Minimum Wages<span class="arrow">→</span></a>
            <a href="/blog/multi-state-payroll-india" class="sidebar-link">Multi-State Payroll Setup<span class="arrow">→</span></a>
            <a href="/blog/labour-welfare-fund" class="sidebar-link">Labour Welfare Fund<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is professional tax and which states levy it?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Professional Tax is a state-level direct tax levied by state governments under Article 276 of the Constitution on salaries and professional income. It is currently applicable in 21 Indian states and one Union Territory including Maharashtra Karnataka Tamil Nadu Telangana Gujarat West Bengal and others. PT is not applicable in Delhi Uttar Pradesh Haryana Rajasthan and several northeastern states. The maximum annual PT any state can charge is twenty-five hundred rupees per Article 276.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the professional tax rate in Maharashtra?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Maharashtra has gender-specific Professional Tax slabs. Men earning up to seven thousand five hundred rupees per month are exempt; one hundred seventy-five rupees per month between 7501 and 10000; two hundred per month above ten thousand with three hundred in February to reach annual cap of two thousand five hundred rupees. Women earning up to twenty-five thousand per month are fully exempt. Employers pay PT to Maharashtra State Tax Department monthly.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does Karnataka professional tax work?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Karnataka revised its Professional Tax slabs effective 1 April 2025. Employees earning below twenty-five thousand rupees per month are exempt. Above twenty-five thousand rupees the deduction is two hundred rupees per month for eleven months and three hundred rupees in February reaching the annual cap of two thousand five hundred rupees. Karnataka requires PT payment by the twentieth of the succeeding month. Late payment attracts 1.25 percent monthly interest. All GST-registered entities must obtain PTEC enrollment regardless of employee count.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is professional tax applicable in Delhi or NCR?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Professional Tax is not applicable in Delhi National Capital Territory. Companies headquartered in Delhi do not deduct PT for Delhi-based employees. However Delhi NCR operations span three different state jurisdictions — Delhi Haryana (Gurgaon Faridabad) and Uttar Pradesh (Noida Greater Noida Ghaziabad). Delhi and Haryana are PT-exempt but Uttar Pradesh introduced PT in some districts. Employers must apply state-specific rules based on actual work location of each employee not the registered office address.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What if I have employees across multiple states?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Multi-state employers must obtain separate Professional Tax Registration Certificate in each PT-applicable state where employees work. Each state has its own slab structure deduction periodicity (monthly half-yearly or annual) and remittance deadlines. PT must be applied based on the work location state of each employee not the registered office. Failing to register in a state where employees work attracts late registration penalty plus penalty on all unpaid PT plus interest typically 1 to 1.25 percent per month.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How is Tamil Nadu professional tax different?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Tamil Nadu Professional Tax is calculated on a half-yearly basis not monthly. Deductions are made twice a year in August (covering April-September) and January (covering October-March). The half-yearly slab is computed on six-month gross total not divided from monthly. Maximum half-yearly PT is twelve hundred fifty rupees totaling twenty-five hundred annually. Verify your payroll software handles the half-yearly slab correctly.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Are minimum wages different across states?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. State minimum wages vary significantly by state, industry, and worker skill category. As of 2026 monthly unskilled worker minimum wages range from approximately eleven thousand rupees in Punjab to nineteen thousand eight hundred forty-six rupees in Delhi. State governments revise rates twice yearly or annually based on Consumer Price Index. Multi-state employers must apply each state rate for that location and revise on each notification. Underpayment attracts ten times compensation under Section 56(1) of Code on Wages plus interest.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is Maharashtra Labour Welfare Fund?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Maharashtra Labour Welfare Fund Act 1953 requires employers with five or more employees in Maharashtra to contribute to the State Labour Welfare Fund. Contribution is twelve rupees per employee per six months by the employer plus six rupees by the employee. Payment is bi-annual by 30 June and 31 December. Similar Labour Welfare Fund schemes exist in Karnataka Tamil Nadu Gujarat Madhya Pradesh Punjab and other states with varying amounts.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does PF and ESI apply uniformly across states?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes Provident Fund under EPF Act 1952 and Employee State Insurance under ESI Act 1948 are central acts that apply uniformly across all Indian states. PF is mandatory for employees with basic wages up to fifteen thousand rupees per month with employer and employee both contributing twelve percent. ESI is mandatory for employees earning up to twenty-one thousand per month gross with employer contributing 3.25 percent and employee 0.75 percent.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is Shops and Establishments Act registration?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Shops and Establishments Act registration is a state-level requirement under each state Shops and Establishments Act. Every commercial establishment must register within thirty days of commencing operations in that state. Each state has its own Act with different working hour limits leave entitlements overtime rules and inspection provisions. Multi-state employers need separate registration in each state where they have offices. Failure to register attracts state-specific penalties typically ranging from five to twenty-five thousand rupees plus per-day continuing fine.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How can I track minimum wage revisions across states?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Track state Labour Department websites for notification updates. Most states revise minimum wages twice yearly typically on 1 April and 1 October based on CPI movement though revision schedules vary. Subscribe to state Labour Department email alerts and engage a labour-law compliance partner who tracks revisions across all relevant states. Multi-state operators commonly miss revisions resulting in retrospective compliance gaps. The Patron Accounting payroll team maintains a multi-state minimum wage tracker for client portfolios.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Should I centralize or decentralize multi-state payroll?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Modern best practice is centralized payroll with state-aware logic. Use a single payroll software (Keka GreytHR Zoho People SAP SuccessFactors) configured with state-specific rule sets for PT slabs minimum wages MLWF and S&E Act provisions. The central team manages compliance while location-specific rules apply automatically based on each employee work location. Decentralized payroll with state-specific local processors increases coordination overhead and creates audit reconciliation challenges. Centralized with state-aware logic is the standard for companies above twenty employees.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What are the compliance risks of multi-state payroll?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Common multi-state payroll risks include applying registered office state PT to employees working in different states (back-payment plus interest), missing PTRC registration when first employee hired in new state (late registration penalty), using outdated minimum wage rates after state notification (10x compensation under Code on Wages), missing state-specific Labour Welfare Fund contributions (per-day fine), and inconsistent leave entitlements across states. Multi-state operators should run quarterly compliance audits and engage labour law specialists for new state expansion.</div></div>
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

    // 10 major states with payroll metadata
    const STATES = [
        {code: 'MH',    name: 'Maharashtra',     city: 'Mumbai, Pune',         ptApplies: true,  minWage: 16700, mlwfYrEmployer: 24,  mlwfYrEmployee: 12, hasGenderSlab: true,  feb300: true, march300: false, halfYearly: false},
        {code: 'KA',    name: 'Karnataka',       city: 'Bangalore',            ptApplies: true,  minWage: 16000, mlwfYrEmployer: 40,  mlwfYrEmployee: 20, hasGenderSlab: false, feb300: true, march300: false, halfYearly: false},
        {code: 'TN',    name: 'Tamil Nadu',      city: 'Chennai',              ptApplies: true,  minWage: 17000, mlwfYrEmployer: 20,  mlwfYrEmployee: 10, hasGenderSlab: false, feb300: false, march300: false, halfYearly: true},
        {code: 'TG',    name: 'Telangana',       city: 'Hyderabad',            ptApplies: true,  minWage: 16000, mlwfYrEmployer: 30,  mlwfYrEmployee: 2,  hasGenderSlab: false, feb300: false, march300: false, halfYearly: false},
        {code: 'GJ',    name: 'Gujarat',         city: 'Ahmedabad',            ptApplies: true,  minWage: 15000, mlwfYrEmployer: 12,  mlwfYrEmployee: 6,  hasGenderSlab: false, feb300: false, march300: false, halfYearly: false},
        {code: 'DL',    name: 'Delhi NCT',       city: 'PT exempt',            ptApplies: false, minWage: 23757, mlwfYrEmployer: 27,  mlwfYrEmployee: 9,  hasGenderSlab: false, feb300: false, march300: false, halfYearly: false},
        {code: 'UP',    name: 'Uttar Pradesh',   city: 'PT exempt (Noida)',    ptApplies: false, minWage: 14000, mlwfYrEmployer: 0,   mlwfYrEmployee: 0,  hasGenderSlab: false, feb300: false, march300: false, halfYearly: false},
        {code: 'WB',    name: 'West Bengal',     city: 'Kolkata',              ptApplies: true,  minWage: 13500, mlwfYrEmployer: 30,  mlwfYrEmployee: 6,  hasGenderSlab: false, feb300: false, march300: false, halfYearly: false},
        {code: 'HR',    name: 'Haryana',         city: 'Gurgaon (PT exempt)',  ptApplies: false, minWage: 16500, mlwfYrEmployer: 300, mlwfYrEmployee: 120, hasGenderSlab: false, feb300: false, march300: false, halfYearly: false},
        {code: 'PB',    name: 'Punjab',          city: 'Chandigarh',           ptApplies: true,  minWage: 13500, mlwfYrEmployer: 60,  mlwfYrEmployee: 60, hasGenderSlab: false, feb300: false, march300: false, halfYearly: false}
    ];

    // PT computation per state (returns monthly PT in ₹)
    function computePT(stateCode, monthlySalary) {
        if (monthlySalary <= 0) return 0;
        switch (stateCode) {
            case 'MH':
                if (monthlySalary <= 7500) return 0;
                if (monthlySalary <= 10000) return 175;
                return 200;  // ₹300 in Feb but average to 200 for monthly view
            case 'KA':
                if (monthlySalary < 25000) return 0;
                return 200;
            case 'TN':
                if (monthlySalary < 21000) return 0;
                return 100;  // half-yearly equivalent simplified to monthly average
            case 'TG':
                if (monthlySalary <= 15000) return 0;
                if (monthlySalary <= 20000) return 150;
                return 200;
            case 'GJ':
                if (monthlySalary <= 12000) return 0;
                return 200;
            case 'WB':
                if (monthlySalary <= 10000) return 0;
                if (monthlySalary <= 15000) return 110;
                if (monthlySalary <= 25000) return 130;
                if (monthlySalary <= 40000) return 150;
                return 200;
            case 'PB':
                return monthlySalary > 5000 ? 200 : 0;
            default:
                return 0;  // DL, UP, HR exempt
        }
    }

    // Render state input grid on page load
    function renderStateGrid() {
        const grid = document.getElementById('stateGrid');
        STATES.forEach((s, i) => {
            const row = document.createElement('div');
            row.className = 'state-row';
            row.innerHTML =
                '<div class="state-label">' + s.name + '<small>' + s.city + '</small></div>' +
                '<input type="text" class="state-input" id="emp_' + s.code + '" placeholder="# employees" min="0" step="1" inputmode="decimal" autocomplete="off">' +
                '<input type="text" class="state-input" id="sal_' + s.code + '" placeholder="Avg gross ₹/mo" min="0" step="500" inputmode="decimal" autocomplete="off">';
            grid.appendChild(row);
        });
        // Pre-fill default scenario
        document.getElementById('emp_MH').value = 25;
        document.getElementById('sal_MH').value = 65000;
        document.getElementById('emp_KA').value = 18;
        document.getElementById('sal_KA').value = 75000;
        document.getElementById('emp_DL').value = 12;
        document.getElementById('sal_DL').value = 85000;
        document.getElementById('emp_TN').value = 8;
        document.getElementById('sal_TN').value = 60000;
    }

    function fmt(n) { return '₹' + Math.round(n).toLocaleString('en-IN'); }
    function fmtShort(n) {
        if (n >= 10000000) return '₹' + (n/10000000).toFixed(1) + 'Cr';
        if (n >= 100000) return '₹' + (n/100000).toFixed(1) + 'L';
        if (n >= 1000) return '₹' + (n/1000).toFixed(0) + 'K';
        return '₹' + Math.round(n);
    }

    function compute() {
        const stateData = [];
        let anyData = false;

        STATES.forEach(s => {
            const emp = parseInt(document.getElementById('emp_' + s.code).value) || 0;
            const sal = parseINR(document.getElementById('sal_' + s.code).value) || 0;
            if (emp > 0 && sal > 0) {
                anyData = true;
                const salaryCost = emp * sal;
                const ptPerEmp = computePT(s.code, sal);
                const ptTotal = ptPerEmp * emp;

                // Statutory: assume basic = 50% of CTC (Code on Wages compliant)
                const basic = sal * 0.50;
                const pfBasic = Math.min(basic, 15000);
                const employerPF = pfBasic * 0.12;
                const esi = sal <= 21000 ? sal * 0.0325 : 0;
                const gratuity = basic * 0.0481;
                const statutoryPerEmp = employerPF + esi + gratuity;
                const statutoryTotal = statutoryPerEmp * emp;

                const monthlyTotal = salaryCost + statutoryTotal;  // PT is employee-deducted, not employer cost
                stateData.push({
                    state: s, employees: emp, avgSalary: sal,
                    salaryCost, ptPerEmp, ptTotal, statutoryPerEmp, statutoryTotal, monthlyTotal,
                    employerPF, esi, gratuity
                });
            }
        });

        if (!anyData) {
            alert('Please enter data for at least one state.');
            return;
        }

        // Sort by monthly total descending
        stateData.sort((a, b) => b.monthlyTotal - a.monthlyTotal);

        // Consolidated metrics
        const totalEmp = stateData.reduce((s, d) => s + d.employees, 0);
        const totalMonthlyCost = stateData.reduce((s, d) => s + d.monthlyTotal, 0);
        const totalAnnualCost = totalMonthlyCost * 12;
        const avgPerEmp = totalMonthlyCost / totalEmp;
        const totalPT = stateData.reduce((s, d) => s + d.ptTotal, 0);
        const totalStatutory = stateData.reduce((s, d) => s + d.statutoryTotal, 0);

        renderResult({
            stateData, totalEmp, totalMonthlyCost, totalAnnualCost, avgPerEmp, totalPT, totalStatutory
        });
    }

    function renderResult(r) {
        // Metric cards
        const grid = document.getElementById('metricGrid');
        grid.innerHTML = '';
        const metrics = [
            {label: 'Total Employees', value: r.totalEmp.toLocaleString('en-IN'), sub: 'Across ' + r.stateData.length + ' state' + (r.stateData.length === 1 ? '' : 's'), highlight: false},
            {label: 'Monthly Cost', value: fmtShort(r.totalMonthlyCost), sub: 'Salary + Statutory', highlight: true},
            {label: 'Annual Cost', value: fmtShort(r.totalAnnualCost), sub: 'Projected at current rates', highlight: false},
            {label: 'Avg / Employee', value: fmtShort(r.avgPerEmp), sub: 'Per month employer cost', highlight: false}
        ];
        metrics.forEach(m => {
            const card = document.createElement('div');
            card.className = 'metric-card' + (m.highlight ? ' highlight' : '');
            card.innerHTML = '<div class="metric-label">' + m.label + '</div>' +
                             '<div class="metric-value">' + m.value + '</div>' +
                             '<div class="metric-sub">' + m.sub + '</div>';
            grid.appendChild(card);
        });

        // Breakdown table
        const tbody = document.getElementById('breakdownBody');
        tbody.innerHTML = '';
        r.stateData.forEach(d => {
            const tr = document.createElement('tr');
            tr.innerHTML = '<td>' + d.state.name + '</td>' +
                           '<td>' + d.employees + '</td>' +
                           '<td>' + fmt(d.avgSalary) + '</td>' +
                           '<td>' + fmt(d.salaryCost) + '</td>' +
                           '<td>' + fmt(d.ptTotal) + '</td>' +
                           '<td>' + fmt(d.statutoryTotal) + '</td>' +
                           '<td><strong>' + fmt(d.monthlyTotal) + '</strong></td>';
            tbody.appendChild(tr);
        });

        const tfoot = document.getElementById('breakdownFoot');
        tfoot.innerHTML = '<tr>' +
            '<td>Total</td>' +
            '<td>' + r.totalEmp + '</td>' +
            '<td>—</td>' +
            '<td>' + fmt(r.stateData.reduce((s, d) => s + d.salaryCost, 0)) + '</td>' +
            '<td>' + fmt(r.totalPT) + '</td>' +
            '<td>' + fmt(r.totalStatutory) + '</td>' +
            '<td>' + fmt(r.totalMonthlyCost) + '</td>' +
            '</tr>';

        // Bar chart (top 5 states by cost)
        const chartEl = document.getElementById('barChart');
        chartEl.innerHTML = '';
        const top = r.stateData.slice(0, Math.min(5, r.stateData.length));
        const max = top[0].monthlyTotal;
        top.forEach(d => {
            const row = document.createElement('div');
            row.className = 'bar-row';
            const pct = (d.monthlyTotal / max) * 100;
            row.innerHTML = '<div class="bar-state">' + d.state.code + '</div>' +
                            '<div class="bar-track"><div class="bar-fill" style="width: ' + pct + '%"></div></div>' +
                            '<div class="bar-amount">' + fmtShort(d.monthlyTotal) + '</div>';
            chartEl.appendChild(row);
        });

        // Compliance flags
        const flagsEl = document.getElementById('flagsList');
        flagsEl.innerHTML = '';
        const flags = [];

        r.stateData.forEach(d => {
            // Min wage check
            if (d.avgSalary < d.state.minWage) {
                flags.push({
                    type: 'danger', icon: '✗',
                    title: d.state.name + ': Minimum wage breach',
                    body: 'Avg salary ' + fmt(d.avgSalary) + ' is below skilled-tier minimum wage of ' + fmt(d.state.minWage) + '. Risk: 10× compensation under Code on Wages Section 56(1).'
                });
            }

            // Maharashtra gender exemption
            if (d.state.code === 'MH' && d.avgSalary <= 25000) {
                flags.push({
                    type: 'info', icon: 'i',
                    title: 'Maharashtra: Gender PT exemption',
                    body: 'Female employees earning up to ₹25,000/month are fully PT-exempt. Verify gender data in payroll to apply correctly.'
                });
            }

            // Maharashtra/Karnataka Feb higher rate
            if ((d.state.code === 'MH' || d.state.code === 'KA') && d.ptPerEmp >= 200) {
                flags.push({
                    type: 'warn', icon: '!',
                    title: d.state.name + ': February higher rate',
                    body: 'Apply ₹300 PT in February (₹200 other 11 months) to reach annual ₹2,500 cap. Common payroll software miss.'
                });
            }

            // Tamil Nadu half-yearly
            if (d.state.code === 'TN' && d.ptPerEmp > 0) {
                flags.push({
                    type: 'warn', icon: '!',
                    title: 'Tamil Nadu: Half-yearly PT',
                    body: 'TN PT is paid in August + January on 6-month gross total, NOT monthly. Compute on half-year aggregate.'
                });
            }

            // Karnataka GST-registered enrollment
            if (d.state.code === 'KA') {
                flags.push({
                    type: 'info', icon: 'i',
                    title: 'Karnataka: GST-registered enrollment',
                    body: 'All GST-registered entities must obtain PTEC enrollment in Karnataka regardless of employee count.'
                });
            }

            // Maharashtra MLWF
            if (d.state.code === 'MH') {
                flags.push({
                    type: 'info', icon: 'i',
                    title: 'Maharashtra: Labour Welfare Fund',
                    body: 'MLWF contribution: ₹12 employer + ₹6 employee per 6 months. Pay by 30 June and 31 December.'
                });
            }

            // PT-exempt state
            if (!d.state.ptApplies) {
                flags.push({
                    type: 'success', icon: '✓',
                    title: d.state.name + ': No PT applicable',
                    body: 'No Professional Tax in ' + d.state.name + '. Saves ₹2,500/employee/year compliance overhead.'
                });
            }

            // ESI applicability
            if (d.avgSalary <= 21000) {
                flags.push({
                    type: 'info', icon: 'i',
                    title: d.state.name + ': ESI applicable',
                    body: 'Avg salary ≤ ₹21K — ESI mandatory at 3.25% employer + 0.75% employee. Already factored in dashboard.'
                });
            }
        });

        // Multi-state coordination flag
        if (r.stateData.length >= 3) {
            flags.push({
                type: 'warn', icon: '!',
                title: 'Multi-state coordination required',
                body: 'Operating in ' + r.stateData.length + ' states — set up automated minimum wage tracking, separate PTRC + S&E Act registrations (note <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> GST place-of-supply linkage), state-specific LWF contributions, and quarterly compliance audits.'
            });
        }

        // Render flags
        if (flags.length === 0) {
            flagsEl.innerHTML = '<div class="flags-empty">✓ No compliance flags raised — clean payroll posture.</div>';
        } else {
            flags.forEach(f => {
                const item = document.createElement('div');
                item.className = 'flag-item';
                item.innerHTML = '<div class="flag-icon ' + f.type + '">' + f.icon + '</div>' +
                                 '<div class="flag-content"><strong>' + f.title + '</strong>' + f.body + '</div>';
                flagsEl.appendChild(item);
            });
        }

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        STATES.forEach(s => {
            document.getElementById('emp_' + s.code).value = '';
            document.getElementById('sal_' + s.code).value = '';
        });
        document.getElementById('resultSection').classList.remove('visible');
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

    // Initial render
    renderStateGrid();
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
