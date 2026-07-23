@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>India Entity vs EOR Calculator | Cost Comparison TCO</title>
    <meta name="description" content="Free India entity vs EOR cost calculator: 36-month TCO, breakeven point, 15-criteria comparison and 4 Labour Codes 2025 side by side. Free CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/india-entity-vs-eor-comparison/">
    <meta property="og:title" content="India Entity vs EOR Comparison Calculator — 2026">
    <meta property="og:description" content="Compare cost of setting up India entity (WOS / LLP) vs hiring through EOR. 36-month TCO, breakeven analysis, side-by-side comparison.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/india-entity-vs-eor-comparison">
    <meta property="og:image" content="/tools/og/india-entity-vs-eor-comparison.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="India Entity vs EOR Comparison Calculator">
    <meta name="twitter:description" content="Compare cost of India entity vs EOR. 36-month TCO + breakeven analysis. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/india-entity-vs-eor-comparison.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "India Entity vs EOR Comparison Calculator",
      "description": "India Entity vs EOR Comparison Calculator is a strategic decision-support tool for foreign companies hiring in India. The tool models total cost of ownership over twelve to thirty-six months for two market-entry routes: setting up an Indian legal entity such as a wholly-owned subsidiary or limited liability partnership versus engaging an Employer of Record service. Inputs include planned headcount of one to one hundred employees, average gross monthly salary per employee from one lakh to ten lakh rupees, hiring city across Bangalore Hyderabad Pune Mumbai Delhi-NCR or Chennai, EOR provider tier from India-focused budget at six thousand to fifteen thousand rupees per employee per month to mid-market global at twenty-five thousand to forty thousand rupees to enterprise white-glove at forty thousand to sixty thousand rupees, and time horizon of twelve twenty-four or thirty-six months. The tool computes salary cost, statutory employer burden of fifteen to twenty-two percent covering Provident Fund employer contribution at twelve percent of basic wages, Employee State Insurance at three point two five percent for eligible employees earning up to twenty-one thousand rupees monthly, gratuity accrual at four point eight one percent under the Payment of Gratuity Act 1972, statutory bonus, and professional tax. For the entity route the tool factors in one-time incorporation cost of three lakh fifty thousand rupees including incorporation fees Foreign Direct Investment reporting under Form FC-GPR Reserve Bank of India compliance and registrations for GST income tax and shops and establishments and ongoing monthly compliance of forty thousand rupees covering payroll processing CA fees ROC annual filings transfer pricing study and statutory audit. For the EOR route the tool applies the selected provider tier per-employee per-month fee. Output includes total cost comparison cumulative cost curves over the time horizon breakeven employee count where entity becomes cheaper than EOR side-by-side fifteen-criteria comparison covering setup time compliance burden permanent establishment risk control intellectual property rights customer billing capability visa sponsorship banking access termination flexibility long-term scalability tax treatment equity grants and the four New Labour Codes effective twenty-first November 2025 covering Wages Industrial Relations Social Security and Occupational Safety. Suitable for foreign company finance teams entering India global mobility teams CFOs evaluating India expansion strategy and corporate development teams structuring cross-border hiring.",
      "url": "/tools/india-entity-vs-eor-comparison",
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
        {"@type": "ListItem", "position": 3, "name": "India Entity vs EOR Comparison", "item": "/tools/india-entity-vs-eor-comparison"}
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
          "name": "What is the difference between an Indian entity and an EOR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Indian entity is a legal vehicle owned by the foreign parent — typically a wholly-owned subsidiary under the Companies Act 2013 or an LLP. The entity directly employs the workforce, files its own taxes, and operates as a permanent India presence. An Employer of Record is a third-party Indian company that legally employs your team while you direct the work. The EOR handles payroll, compliance, contracts, and termination through its own entity."
          }
        },
        {
          "@type": "Question",
          "name": "When does an Indian entity become cheaper than an EOR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most foreign companies find an Indian entity becomes cost-effective at ten to fifteen employees over a thirty-six month horizon. The breakeven depends on EOR fee tier — for budget India-focused EOR at six to fifteen thousand rupees per employee per month, breakeven sits around fifteen to twenty employees. For mid-market EOR at thirty thousand rupees, breakeven is around eight to twelve employees. The Patron calculator computes precise breakeven for your specific employee count, salary level, and provider tier."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to set up a wholly-owned subsidiary in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Operational readiness for a foreign-owned subsidiary in India typically takes ten to sixteen weeks. Digital incorporation through the Ministry of Corporate Affairs runs one to two weeks. The remaining timeline covers FDI reporting through Form FC-GPR with the Reserve Bank of India, opening a foreign-owned bank account requiring Apostilled documents and KYC checks, GST registration with physical office verification, and Shops and Establishments registration at the state level. EOR onboarding typically takes one to three days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the statutory employer burden in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Statutory employer contributions in India typically add fifteen to twenty-two percent on top of gross salary. Components include Employee Provident Fund employer share at twelve percent of basic wages, Employee State Insurance at three point two five percent for employees earning up to twenty-one thousand rupees, gratuity accrual under the Payment of Gratuity Act 1972 at approximately four point eight one percent, statutory bonus, and state-level Professional Tax. The burden applies identically across both routes."
          }
        },
        {
          "@type": "Question",
          "name": "Can an EOR sponsor work visas for foreign nationals?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EOR services typically cannot sponsor employment visas for foreign nationals coming into India. Visa sponsorship requires the sponsoring entity to be the legal employer with established Indian presence and visa quota authorization. For hiring foreign nationals to work in India, a wholly-owned subsidiary or branch office is generally required. EOR is suitable for hiring Indian residents only. Some EOR providers offer business visa support for short-duration project visits, but employment visa sponsorship is an entity-only capability."
          }
        },
        {
          "@type": "Question",
          "name": "What are the four New Labour Codes effective from November 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The four New Labour Codes effective 21 November 2025 are: Code on Wages 2019 covering minimum wages and equal remuneration, Industrial Relations Code 2020 covering trade unions and dispute resolution, Code on Social Security 2020 covering EPF ESI and gratuity, and Occupational Safety Health and Working Conditions Code 2020. The four codes consolidate twenty-nine earlier labour laws. Both entities and EORs must comply — this is a compliance update, not a structural shift."
          }
        },
        {
          "@type": "Question",
          "name": "Does using an EOR create permanent establishment risk?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Permanent Establishment risk under Indian tax treaties is a key consideration for foreign companies. EOR arrangements are generally structured to avoid creating PE — the EOR is a separate Indian taxpayer, employees report to the foreign parent only on work direction, and there is no fixed place of business. However, decision-making authority residing with India-based personnel or contract execution can create dependent-agent PE. Obtain tax opinions on PE exposure where India team takes commercial decisions."
          }
        },
        {
          "@type": "Question",
          "name": "Can a foreign company bill Indian customers through an EOR?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. An EOR cannot issue invoices to Indian customers on behalf of the foreign company. Customer-facing revenue in India requires GST registration, which in turn requires an Indian legal entity with a registered place of business. If your India operations include serving Indian customers and collecting INR revenues, you need a wholly-owned subsidiary or branch office. EOR is suitable for offshore-only operations where India team works on global products served from outside India to overseas customers."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between WOS and LLP in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Wholly-Owned Subsidiary is a private limited company under the Companies Act 2013 with the foreign parent holding 100 percent shares. WOS is the most common vehicle, allows automatic 100 percent FDI in most sectors, and offers limited liability with clear governance. An LLP is governed by the LLP Act 2008 — lower compliance, no minimum capital, but FDI in LLP requires automatic-route eligibility and government approval in restricted sectors. WOS is preferred for most operating businesses."
          }
        },
        {
          "@type": "Question",
          "name": "How does an EOR handle terminations in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EORs handle terminations in compliance with notice requirements and gratuity provisions under the Payment of Gratuity Act 1972. Standard notice is thirty to ninety days depending on the contract and applicable Shops and Establishments Act. Full and final settlements cover pending salary, leave encashment, statutory bonus, and gratuity. The foreign company can request termination but must respect the EOR contract terms. Wrongful termination claims are filed against the EOR as legal employer."
          }
        },
        {
          "@type": "Question",
          "name": "Can I switch from EOR to entity later?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Many companies start with EOR for market entry then transition to a wholly-owned subsidiary as the team scales. The transition involves incorporating the entity, registering as an employer with EPF and ESI, transferring employment contracts from EOR to the new entity with employee consent, and ensuring continuity of statutory benefits including gratuity service. The Patron team handles end-to-end transitions including dual payroll for transition month, employee communications, and documentation transfer with no service interruption."
          }
        },
        {
          "@type": "Question",
          "name": "What ongoing compliance does an Indian subsidiary have?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Indian subsidiary has multi-layered ongoing compliance: monthly GST returns and payroll filings, quarterly TDS returns, annual statutory audit under Companies Act 2013, annual income tax return, transfer pricing study and Form 3CEB if related-party transactions exceed one crore rupees, annual ROC filings (AOC-4 and MGT-7), annual FDI compliance through Form FLA filing with RBI, and ongoing labour law compliance. Total ongoing fees typically run thirty to sixty thousand rupees per month."
          }
        },
        {
          "@type": "Question",
          "name": "Is EOR or entity better for protecting intellectual property?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Indian entity provides cleaner IP ownership — the subsidiary directly employs the developers and IP assignment flows from employee to subsidiary to parent through inter-company agreements. EOR arrangements require careful IP assignment drafting since the legal employment relationship sits with the EOR. Most reputable EORs have standard IP assignment clauses transferring rights to the foreign company. For IP-critical operations like core product development, an entity is generally preferred despite the higher cost."
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
            --entity-color: #15365f;
            --eor-color: #f26522;
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
        .toggle-group { display: grid; grid-template-columns: repeat(3, 1fr); gap: 6px; }
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

        /* Verdict / recommendation card */
        .verdict-card { border-radius: var(--radius-lg); padding: 28px; border-left: 6px solid; margin-bottom: 22px; }
        .verdict-card.entity { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--entity-color); }
        .verdict-card.eor { background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); border-left-color: var(--eor-color); }
        .verdict-card.either { background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%); border-left-color: var(--info); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 8px; }
        .verdict-headline { font-size: 24px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; margin-bottom: 6px; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; color: #fff; margin-bottom: 16px; }
        .verdict-pill.entity { background: var(--entity-color); }
        .verdict-pill.eor { background: var(--eor-color); color: var(--primary-dark); }
        .verdict-pill.either { background: var(--info); }
        .verdict-summary { font-size: 15px; color: var(--text-secondary); line-height: 1.7; margin-bottom: 0; }

        /* Cost comparison cards */
        .cost-grid { display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 22px; }
        @media (min-width: 700px) { .cost-grid { grid-template-columns: 1fr 1fr; } }
        .cost-card { background: var(--card); border: 2px solid var(--border); border-radius: var(--radius); padding: 22px 20px; }
        .cost-card.entity { border-color: var(--entity-color); }
        .cost-card.eor { border-color: var(--eor-color); }
        .cost-card-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; }
        .cost-card-title { font-size: 17px; font-weight: 700; color: var(--primary-dark); }
        .cost-card-pill { font-family: var(--font-mono); font-size: 10px; font-weight: 700; padding: 4px 10px; border-radius: 20px; text-transform: uppercase; letter-spacing: 0.5px; color: #fff; }
        .cost-card-pill.entity { background: var(--entity-color); }
        .cost-card-pill.eor { background: var(--eor-color); color: var(--primary-dark); }
        .cost-total { font-family: var(--font-mono); font-size: 32px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin-bottom: 4px; }
        .cost-total-label { font-size: 12px; color: var(--text-muted); margin-bottom: 14px; }
        .cost-breakdown { font-size: 13px; color: var(--text-secondary); line-height: 1.7; border-top: 1px solid var(--border); padding-top: 12px; }
        .cost-breakdown-row { display: flex; justify-content: space-between; padding: 3px 0; }
        .cost-breakdown-row .l { color: var(--text-muted); }
        .cost-breakdown-row .v { font-family: var(--font-mono); font-weight: 700; color: var(--primary-dark); }
        .cost-savings { background: var(--card); border-radius: var(--radius); padding: 16px 20px; margin-bottom: 22px; border-left: 4px solid var(--success); }
        .cost-savings-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--success); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
        .cost-savings-value { font-family: var(--font-mono); font-size: 22px; font-weight: 700; color: var(--primary-dark); }
        .cost-savings-sub { font-size: 12px; color: var(--text-muted); margin-top: 4px; }

        /* Breakeven chart */
        .chart-card { background: var(--surface); border-radius: var(--radius); padding: 22px; margin-bottom: 22px; border: 1px solid var(--border); }
        .chart-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px; }
        .chart-container { width: 100%; overflow-x: auto; }
        .chart-svg { width: 100%; min-width: 300px; height: 240px; }
        .chart-legend { display: flex; gap: 18px; justify-content: center; margin-top: 12px; flex-wrap: wrap; font-size: 12px; }
        .chart-legend-item { display: flex; align-items: center; gap: 6px; }
        .chart-legend-dot { width: 12px; height: 12px; border-radius: 50%; }
        .chart-breakeven { background: var(--surface-alt); padding: 10px 14px; border-radius: 6px; margin-top: 10px; font-size: 12px; color: var(--text-secondary); text-align: center; }
        .chart-breakeven strong { color: var(--primary-dark); font-family: var(--font-mono); }

        /* Side-by-side comparison */
        .compare-table { width: 100%; border-collapse: collapse; font-size: 13px; margin-bottom: 22px; }
        .compare-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .compare-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .compare-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .compare-table thead th.entity-col { background: var(--entity-color); }
        .compare-table thead th.eor-col { background: var(--eor-color); color: var(--primary-dark); }
        .compare-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; line-height: 1.5; }
        .compare-table tbody tr:nth-child(even) { background: var(--surface); }
        .compare-table tbody td.criterion { font-weight: 600; color: var(--primary-dark); width: 22%; }
        .compare-table tbody td .check { color: var(--success); font-weight: 700; }
        .compare-table tbody td .cross { color: var(--danger); font-weight: 700; }
        .compare-table tbody td .partial { color: var(--accent); font-weight: 700; }

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
            .rate-table, .compare-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th, .compare-table tbody td, .compare-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 20px; }
            .cost-total { font-size: 26px; }
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
        <a href="#routes">Market Entry Routes</a>
        <a href="#cost-framework">Cost Framework</a>
        <a href="#labour-codes">Labour Codes 2025</a>
        <a href="#decision">Decision Factors</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    India Entity vs EOR Comparison
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>India Entity vs EOR <span>Comparison</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Entity%20vs%20EOR%20Comparison%20Calculator%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Foreign companies hiring in India typically choose between two routes: setting up an <strong>Indian entity</strong> (wholly-owned subsidiary or LLP) at ₹2-5 lakh setup + ₹40K/month compliance over 10-16 weeks, or engaging an <strong>Employer of Record</strong> (EOR) at ₹8-60K per employee per month with 1-3 day onboarding. This calculator models 36-month total cost of ownership for both routes, finds the breakeven employee count, and produces a 15-criterion side-by-side comparison covering setup time, compliance, IP rights, customer billing, visa sponsorship, and the four <strong>New Labour Codes</strong> effective 21 November 2025. Most companies find entity becomes cost-effective at <strong>10-15 employees</strong> over 24-36 months — earlier with mid-market or enterprise EOR providers.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Compare Total Cost — Entity vs EOR</h2>
            <p class="calc-intro">Enter your planned headcount, salary level, and time horizon. The tool computes 36-month TCO for both routes, identifies breakeven, and produces a side-by-side comparison.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Hiring Plan</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="employees">Number of Employees</label>
                    <input type="number" id="employees" value="10" min="1" max="200" step="1">
                    <span class="helper">Planned headcount over the time horizon (1-200).</span>
                </div>
                <div class="form-group">
                    <label for="salary">Avg Gross Monthly Salary (₹)</label>
                    <input type="number" id="salary" value="150000" min="20000" max="2000000" step="5000">
                    <span class="helper">CTC per employee per month. Default ₹1.5 lakh (~mid-level engineer).</span>
                </div>
            </div>

            <div class="calc-row">
                <div class="form-group">
                    <label>Time Horizon</label>
                    <div class="toggle-group" id="horizonGroup">
                        <button type="button" class="toggle-btn" data-val="12">12 months</button>
                        <button type="button" class="toggle-btn active" data-val="24">24 months</button>
                        <button type="button" class="toggle-btn" data-val="36">36 months</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city">Hiring City</label>
                    <select id="city">
                        <option value="bangalore">Bangalore (premium tier)</option>
                        <option value="mumbai">Mumbai (premium tier)</option>
                        <option value="delhi">Delhi-NCR / Gurugram</option>
                        <option value="hyderabad">Hyderabad</option>
                        <option value="pune" selected>Pune</option>
                        <option value="chennai">Chennai</option>
                        <option value="other">Other tier-2/3 cities</option>
                    </select>
                    <span class="helper">Determines Professional Tax slab and ESI applicability.</span>
                </div>
            </div>

            <div class="calc-section-title">EOR Provider Tier</div>

            <div class="calc-row" style="grid-template-columns: 1fr;">
                <div class="form-group">
                    <label>EOR Service Tier</label>
                    <div class="toggle-group" id="tierGroup" style="grid-template-columns: 1fr 1fr 1fr;">
                        <button type="button" class="toggle-btn active" data-val="budget">Budget ₹8K/mo</button>
                        <button type="button" class="toggle-btn" data-val="mid">Mid ₹25K/mo</button>
                        <button type="button" class="toggle-btn" data-val="enterprise">Enterprise ₹45K/mo</button>
                    </div>
                    <span class="helper">India-focused providers ($99-200) vs global mid-market ($300-500) vs enterprise ($488-700+).</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Comparison</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label">Recommendation</div>
                    <span class="verdict-pill" id="verdictPill">—</span>
                    <div class="verdict-headline" id="verdictHeadline">—</div>
                    <div class="verdict-summary" id="verdictSummary">—</div>
                </div>

                <div class="cost-grid">
                    <div class="cost-card entity">
                        <div class="cost-card-header">
                            <div class="cost-card-title">Indian Entity (WOS / LLP)</div>
                            <span class="cost-card-pill entity">Entity</span>
                        </div>
                        <div class="cost-total" id="entityTotal">₹—</div>
                        <div class="cost-total-label" id="entityHorizonLbl">Total cost over horizon</div>
                        <div class="cost-breakdown" id="entityBreakdown"></div>
                    </div>
                    <div class="cost-card eor">
                        <div class="cost-card-header">
                            <div class="cost-card-title">Employer of Record (EOR)</div>
                            <span class="cost-card-pill eor">EOR</span>
                        </div>
                        <div class="cost-total" id="eorTotal">₹—</div>
                        <div class="cost-total-label" id="eorHorizonLbl">Total cost over horizon</div>
                        <div class="cost-breakdown" id="eorBreakdown"></div>
                    </div>
                </div>

                <div class="cost-savings" id="savingsCard">
                    <div class="cost-savings-label">Savings (Cheaper Route)</div>
                    <div class="cost-savings-value" id="savingsValue">₹—</div>
                    <div class="cost-savings-sub" id="savingsSub">over the time horizon</div>
                </div>

                <div class="chart-card">
                    <div class="chart-title">Cumulative Cost Over Time</div>
                    <div class="chart-container">
                        <svg class="chart-svg" id="chartSvg" viewBox="0 0 600 240" preserveAspectRatio="none"></svg>
                    </div>
                    <div class="chart-legend">
                        <div class="chart-legend-item"><span class="chart-legend-dot" style="background: var(--entity-color);"></span>Entity</div>
                        <div class="chart-legend-item"><span class="chart-legend-dot" style="background: var(--eor-color);"></span>EOR</div>
                    </div>
                    <div class="chart-breakeven" id="chartBreakeven"></div>
                </div>

                <div class="chart-card">
                    <div class="chart-title">15-Criterion Side-by-Side Comparison</div>
                    <div class="chart-container">
                        <table class="compare-table">
                            <thead>
                                <tr>
                                    <th>Criterion</th>
                                    <th class="entity-col">Indian Entity</th>
                                    <th class="eor-col">EOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td class="criterion">Setup Time</td><td>10-16 weeks (operational)</td><td>1-3 days</td></tr>
                                <tr><td class="criterion">Setup Cost</td><td>₹2-5 lakh (incorporation, FDI, registrations)</td><td>₹0 (or ₹4K-40K one-time)</td></tr>
                                <tr><td class="criterion">Monthly Compliance Fee</td><td>₹30K-60K per month</td><td>Included in EOR fee</td></tr>
                                <tr><td class="criterion">Per-Employee EOR Fee</td><td><span class="cross">N/A</span></td><td>₹8K-60K/employee/month</td></tr>
                                <tr><td class="criterion">Statutory Burden</td><td>15-22% on top of gross salary</td><td>15-22% on top of gross salary</td></tr>
                                <tr><td class="criterion">Compliance Burden</td><td>Owned in-house or by retained CA</td><td><span class="check">Fully managed by EOR</span></td></tr>
                                <tr><td class="criterion">Permanent Establishment Risk</td><td><span class="cross">Yes — direct PE</span></td><td><span class="check">Generally No</span> if structured</td></tr>
                                <tr><td class="criterion">Customer Billing in INR</td><td><span class="check">Yes</span> — GST registration possible</td><td><span class="cross">No</span> — cannot raise customer invoices</td></tr>
                                <tr><td class="criterion">Visa Sponsorship for Foreign Nationals</td><td><span class="check">Yes</span></td><td><span class="cross">No (Indian residents only)</span></td></tr>
                                <tr><td class="criterion">Direct Banking Access (INR)</td><td><span class="check">Yes</span> — own current account</td><td><span class="cross">No</span></td></tr>
                                <tr><td class="criterion">Equity Grants to India Team</td><td><span class="check">Direct</span> via parent ESOP / RSU</td><td><span class="partial">Indirect</span> through phantom equity / cash</td></tr>
                                <tr><td class="criterion">IP Ownership</td><td><span class="check">Direct</span> via employment + parent agreement</td><td><span class="partial">Indirect</span> via EOR contract assignment</td></tr>
                                <tr><td class="criterion">Termination Flexibility</td><td>Per Shops &amp; Establishments + ID Code 2020</td><td>Per EOR contract — typically flexible</td></tr>
                                <tr><td class="criterion">Long-Term Scalability</td><td><span class="check">Excellent</span> — fixed cost dilutes</td><td><span class="partial">Linear</span> — cost scales with headcount</td></tr>
                                <tr><td class="criterion">Labour Code Readiness (Nov 2025)</td><td>Owned compliance project</td><td><span class="check">Provider-managed</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — India Entity vs EOR Comparison Calculator validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Entity%20vs%20EOR%20Comparison%20Calculator%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="routes">
            <h2>Market Entry Routes — Entity Options</h2>

            <p>Foreign companies hiring in India typically evaluate three categories of vehicles. Two are entity-based (with ownership and direct legal employer status); the third is contractual (EOR / staff augmentation).</p>

            <h3>Wholly-Owned Subsidiary (WOS)</h3>
            <p>A private limited company under the Companies Act 2013, with the foreign parent holding 100 percent shares. Most common vehicle for foreign companies. Allows automatic 100 percent FDI in most sectors per the consolidated FDI Policy (2020 onwards), administered by the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs</a>. Subject to Indian corporate tax at 25.17 percent (with surcharge and cess for new manufacturing companies; 30 percent base rate for others). Requires statutory audit, transfer pricing study if related-party transactions exceed ₹1 crore, annual ROC filings, and FDI compliance through Form FC-GPR with the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a>.</p>

            <h3>Limited Liability Partnership (LLP)</h3>
            <p>Governed by the LLP Act 2008. Lower compliance burden than WOS, no minimum capital, partner-level liability. FDI allowed via automatic route subject to sector caps. LLPs are taxed at 30 percent flat. Restricted partner structure makes WOS preferred for most operating businesses. LLP works for advisory firms, professional services, and JV holding structures.</p>

            <h3>Branch Office / Liaison Office / Project Office</h3>
            <p>Branch Office permits trading and consultancy with RBI approval. Liaison Office is a representative role only — cannot engage in revenue-earning activity. Project Office is for specific project execution. All three require RBI <a href="https://www.rbi.org.in" target="_blank" rel="noopener">approval under FEMA</a> and have restricted scope. Most foreign companies prefer WOS for full operational flexibility.</p>

            <h3>Employer of Record (EOR)</h3>
            <p>A contractual arrangement, not an entity. The EOR is a separate Indian company that legally employs your team. You direct the work; the EOR handles employment law, payroll, and statutory compliance. Setup is 1-3 days with no capital requirement. EOR is suitable for offshore-only operations (no Indian customers, no INR billing). India-focused EORs charge $99-200 per employee per month; mid-market global EORs charge $300-500; enterprise EORs charge $488-700+.</p>

            <div class="callout">
                <p><strong>Hybrid path.</strong> Many foreign companies start with EOR for the first 1-15 employees during market validation, then transition to WOS once headcount and India-specific operational complexity justify the entity infrastructure. Patron's transition team handles end-to-end conversion with no service interruption.</p>
            </div>
        </section>

        <section class="content-section" id="cost-framework">
            <h2>Cost Framework — What Drives the Numbers</h2>

            <h3>Statutory Employer Burden (Identical Across Both Routes)</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Component</th><th>Rate / Basis</th><th>Notes</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Provident Fund (Employer)</strong></td><td>12% of basic wages</td><td>Mandatory if basic ≤ ₹15,000; voluntary above</td></tr>
                    <tr><td><strong>Employee State Insurance</strong></td><td>3.25% of gross</td><td>For employees earning ≤ ₹21,000/month gross</td></tr>
                    <tr><td><strong>Gratuity Accrual</strong></td><td>~4.81% of basic</td><td>Payment of Gratuity Act 1972</td></tr>
                    <tr><td><strong>Statutory Bonus</strong></td><td>8.33% to 20% of basic</td><td>Payment of Bonus Act 1965, scaled by profit</td></tr>
                    <tr><td><strong>Professional Tax</strong></td><td>State-specific</td><td>₹200/mo most states; up to ₹2,500/mo Maharashtra</td></tr>
                    <tr><td><strong>Group Health Insurance</strong></td><td>₹5K-15K/year per employee</td><td>Voluntary but standard market practice</td></tr>
                </tbody>
            </table>

            <p>Total statutory burden typically lands at <strong>15-22% on top of gross salary</strong>. The exact figure varies by salary structure (basic vs allowances split), state of employment, and benefits package — see <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> guidance for tax-side and <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> rates for the social-security side.</p>

            <h3>Entity Setup &amp; Compliance Costs</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Cost Component</th><th>Range (INR)</th><th>Frequency</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Incorporation (MCA)</strong></td><td>₹50,000 - ₹1,00,000</td><td>One-time</td></tr>
                    <tr><td><strong>FDI Reporting (RBI)</strong></td><td>₹50,000 - ₹1,00,000</td><td>One-time + annual FLA</td></tr>
                    <tr><td><strong>Tax Registrations (GST, IT, PAN, TAN)</strong></td><td>₹30,000 - ₹50,000</td><td>One-time</td></tr>
                    <tr><td><strong>Bank Account Opening (Foreign-Owned)</strong></td><td>₹50,000 - ₹1,00,000 advisory</td><td>One-time, 6-10 weeks</td></tr>
                    <tr><td><strong>Office Lease + Set-up</strong></td><td>₹2,00,000+ (varies by city)</td><td>One-time + ongoing</td></tr>
                    <tr><td><strong>Monthly Compliance (Payroll, GST, ROC, Audit)</strong></td><td>₹30,000 - ₹60,000</td><td>Monthly</td></tr>
                    <tr><td><strong>Annual Statutory Audit</strong></td><td>₹50,000 - ₹2,00,000</td><td>Annual</td></tr>
                    <tr><td><strong>Transfer Pricing Study + Form 3CEB</strong></td><td>₹50,000 - ₹3,00,000</td><td>Annual if RPT > ₹1 Cr</td></tr>
                </tbody>
            </table>

            <h3>EOR Pricing Tiers</h3>

            <table class="rate-table">
                <thead>
                    <tr><th>Tier</th><th>Per-Employee Per-Month</th><th>Examples</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>India-Focused Budget</strong></td><td>$99-200 (₹8,000-15,000)</td><td>Wisemonk, Kaamwork, Paybooks</td></tr>
                    <tr><td><strong>Global Mid-Market</strong></td><td>$300-500 (₹25,000-40,000)</td><td>Multiplier, Skuad, Remote People</td></tr>
                    <tr><td><strong>Enterprise White-Glove</strong></td><td>$488-700+ (₹40,000-60,000+)</td><td>Deel, Oyster, AYP Group, Atlas HXM</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>Watch for hidden EOR costs.</strong> Most providers add 4-10 line items below the headline fee — setup, security deposit (1-2 months total cost, refundable), FX markup (1-3% on currency conversion), off-cycle payroll, termination fees, benefits broker markup, equipment shipping. Get a sample invoice before signing and confirm scope.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Considering India entity setup or EOR transition?</h3>
            <p>Patron's cross-border team has supported 200+ foreign companies entering India — incorporation, FDI compliance, payroll, transfer pricing, EOR-to-WOS transitions. Fixed-fee, transparent pricing.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Entity%20vs%20EOR%20Comparison%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="labour-codes">
            <h2>The Four New Labour Codes (Effective 21 November 2025)</h2>

            <p>The <a href="https://en.wikipedia.org/wiki/Labour_law_of_India" target="_blank" rel="noopener">labour law of India</a> consolidated 29 legacy laws into four streamlined codes, effective 21 November 2025. Both entities and EORs must comply — this is a compliance update, not a structural shift between routes. The codes were long-pending after parliamentary passage in 2019-2020 and were eventually notified after extensive central and state-level rule preparation.</p>

            <h3>1. Code on Wages, 2019</h3>
            <p>Consolidates four laws: Payment of Wages Act, Minimum Wages Act, Payment of Bonus Act, and Equal Remuneration Act. Universalises minimum wage coverage to all employees regardless of wage threshold. Standardises the definition of "wages" across statutes. Significant implication for salary structuring — basic salary must be at least 50 percent of total CTC, affecting PF and gratuity computation upward for many employees.</p>

            <h3>2. Industrial Relations Code, 2020</h3>
            <p>Consolidates three laws: Industrial Disputes Act, Trade Unions Act, and Industrial Employment (Standing Orders) Act. Raises the threshold for prior government approval for retrenchment and closure to 300 workers (from 100). Introduces fixed-term employment formally. Establishes a streamlined dispute resolution mechanism. Important for CFOs — flexibility on workforce restructuring at sub-300 headcount has improved.</p>

            <h3>3. Code on Social Security, 2020</h3>
            <p>Consolidates nine laws including EPF Act, ESI Act, Payment of Gratuity Act, and Maternity Benefit Act. Extends EPF and ESI to gig and platform workers in phased manner. Reduces gratuity continuous-service requirement for fixed-term employees from five years to one. Consolidates benefit administration. Both entities and EORs must update payroll systems and contribution computations to align with new code provisions.</p>

            <h3>4. Occupational Safety, Health and Working Conditions Code, 2020</h3>
            <p>Consolidates 13 laws including Factories Act, Contract Labour Act, and Inter-State Migrant Workmen Act. Introduces a single licence and registration regime. Mandates appointment letters for all employees. Sets standard working hours and overtime provisions. Important for entities with manufacturing operations, but relevant compliance updates also affect office-based employers.</p>

            <div class="callout">
                <p><strong>Compliance readiness check.</strong> Both routes — entity and EOR — must demonstrate Labour Code readiness. For entities, this means salary structure recalibration and policy updates. For EOR users, ask the provider for their Labour Code transition plan and statutory contribution recomputation evidence.</p>
            </div>
        </section>

        <section class="content-section" id="decision">
            <h2>Decision Factors Beyond Cost</h2>

            <h3>Customer-Facing Operations</h3>
            <p>If you plan to invoice Indian customers in INR or operate retail / B2B sales in India, an entity is required. EORs cannot raise GST invoices on the foreign company's behalf. The need to issue India-side invoices is the single most decisive factor pushing companies to entity over EOR.</p>

            <h3>Visa Sponsorship</h3>
            <p>If you plan to bring foreign nationals to work in India (not just Indian residents), an entity is generally required. Employment visa sponsorship requires the legal employer to be the sponsoring entity with established Indian presence and visa quota authorisation. EORs typically cannot sponsor employment visas — they handle Indian residents only.</p>

            <h3>Equity Compensation</h3>
            <p>Granting parent-company equity (ESOP / RSU / stock options) is cleaner through an entity — the Indian subsidiary employs the team and equity assignments flow through standard cross-border ESOP frameworks. Through EOR, equity grants are often structured as phantom equity or cash bonuses linked to parent-stock value, which has different tax and accounting treatment.</p>

            <h3>IP-Critical Operations</h3>
            <p>For core product development with high-value IP, entity ownership is generally preferred. The subsidiary directly employs developers, IP assignment flows from employee to subsidiary to parent through inter-company agreements. Reputable EORs offer IP assignment through their contracts, but the legal pathway is one step longer. For most operations IP through EOR works well; for the most sensitive IP, entity is preferred despite higher cost.</p>

            <h3>Permanent Establishment Risk</h3>
            <p>EOR arrangements are generally structured to avoid creating PE under Indian tax treaties. Sustained operations, decision-making authority residing with India-based personnel, or contract execution in India can create dependent-agent PE — even with EOR. Obtain a tax opinion from an <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a>-empanelled CA if your India team has commercial decision authority. Entity formally creates PE but is preferable to inadvertent dependent-agent PE risk.</p>

            <h3>Long-Term Scalability</h3>
            <p>Beyond 20-30 employees, entity costs become essentially fixed (compliance fees do not scale linearly), while EOR costs continue to scale per-employee. The entity gradually amortises its setup and compliance overhead as headcount grows. Plan the breakeven analysis based on your 36-month headcount forecast, not the year-1 number.</p>

            <h3>Exit Flexibility</h3>
            <p>Closing an Indian entity takes 6-18 months — strike-off via Form STK-2 if simple, voluntary winding-up if complex, with capital repatriation and tax clearances. EOR exit is contract-based — typically 30-90 day notice. For uncertain market entry where you may exit if pilot fails, EOR's quick-exit profile is operationally valuable.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>India Market Entry</h3>
            <p>Patron handles WOS incorporation, FDI compliance, EOR services, and full transitions — all with fixed-fee transparent pricing.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=India%20Entity%20vs%20EOR%20Comparison%20Calculator%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20India%20Entity%20vs%20EOR%20Comparison%20Calculator.%20I%20need%20help%20with%20India%20payroll%2C%20EOR%20setup%2C%20Code%20on%20Wages%20compliance%20and%20statutory%20filings.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/wholly-owned-subsidiary-registration" class="sidebar-link">WOS Registration<span class="arrow">→</span></a>
            <a href="/eor-services" class="sidebar-link">EOR Services<span class="arrow">→</span></a>
            <a href="/llp-registration" class="sidebar-link">LLP Registration<span class="arrow">→</span></a>
            <a href="/fema-compliance" class="sidebar-link">FEMA &amp; FDI Compliance<span class="arrow">→</span></a>
            <a href="/transfer-pricing" class="sidebar-link">Transfer Pricing Study<span class="arrow">→</span></a>
            <a href="/payroll-services" class="sidebar-link">Payroll Services<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/payroll-cost-calculator" class="sidebar-link">Payroll Cost Calculator<span class="arrow">→</span></a>
            <a href="/tools/ctc-to-in-hand-calculator" class="sidebar-link">CTC to In-Hand<span class="arrow">→</span></a>
            <a href="/tools/gratuity-calculator" class="sidebar-link">Gratuity Calculator<span class="arrow">→</span></a>
            <a href="/tools/pf-calculator" class="sidebar-link">PF Calculator<span class="arrow">→</span></a>
            <a href="/tools/esi-calculator" class="sidebar-link">ESI Calculator<span class="arrow">→</span></a>
            <a href="/tools/hra-calculator" class="sidebar-link">HRA Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/foreign-company-india-entry" class="sidebar-link">Foreign Company India Entry<span class="arrow">→</span></a>
            <a href="/blog/wos-vs-llp-india" class="sidebar-link">WOS vs LLP in India<span class="arrow">→</span></a>
            <a href="/blog/new-labour-codes-2025" class="sidebar-link">New Labour Codes 2025<span class="arrow">→</span></a>
            <a href="/blog/permanent-establishment-india" class="sidebar-link">PE Risk in India<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the difference between an Indian entity and an EOR?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">An Indian entity is a legal vehicle owned by the foreign parent — typically a wholly-owned subsidiary under the Companies Act 2013 or an LLP. The entity directly employs the workforce, files its own taxes, and operates as a permanent India presence. An Employer of Record is a third-party Indian company that legally employs your team while you direct the work. The EOR handles payroll, compliance, contracts, and termination through its own entity.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">When does an Indian entity become cheaper than an EOR?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Most foreign companies find an Indian entity becomes cost-effective at ten to fifteen employees over a thirty-six month horizon. The breakeven depends on EOR fee tier — for budget India-focused EOR at six to fifteen thousand rupees per employee per month, breakeven sits around fifteen to twenty employees. For mid-market EOR at thirty thousand rupees, breakeven is around eight to twelve employees. The Patron calculator computes precise breakeven for your specific employee count, salary level, and provider tier.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How long does it take to set up a wholly-owned subsidiary in India?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Operational readiness for a foreign-owned subsidiary in India typically takes ten to sixteen weeks. Digital incorporation through the Ministry of Corporate Affairs runs one to two weeks. The remaining timeline covers FDI reporting through Form FC-GPR with the Reserve Bank of India, opening a foreign-owned bank account requiring Apostilled documents and KYC checks, GST registration with physical office verification, and Shops and Establishments registration at the state level. EOR onboarding typically takes one to three days.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the statutory employer burden in India?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Statutory employer contributions in India typically add fifteen to twenty-two percent on top of gross salary. Components include Employee Provident Fund employer share at twelve percent of basic wages, Employee State Insurance at three point two five percent for employees earning up to twenty-one thousand rupees, gratuity accrual under the Payment of Gratuity Act 1972 at approximately four point eight one percent, statutory bonus, and state-level Professional Tax. The burden applies identically across both routes.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can an EOR sponsor work visas for foreign nationals?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">EOR services typically cannot sponsor employment visas for foreign nationals coming into India. Visa sponsorship requires the sponsoring entity to be the legal employer with established Indian presence and visa quota authorization. For hiring foreign nationals to work in India, a wholly-owned subsidiary or branch office is generally required. EOR is suitable for hiring Indian residents only. Some EOR providers offer business visa support for short-duration project visits, but employment visa sponsorship is an entity-only capability.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What are the four New Labour Codes effective from November 2025?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The four New Labour Codes effective 21 November 2025 are: Code on Wages 2019 covering minimum wages and equal remuneration, Industrial Relations Code 2020 covering trade unions and dispute resolution, Code on Social Security 2020 covering EPF ESI and gratuity, and Occupational Safety Health and Working Conditions Code 2020. The four codes consolidate twenty-nine earlier labour laws. Both entities and EORs must comply — this is a compliance update, not a structural shift.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does using an EOR create permanent establishment risk?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Permanent Establishment risk under Indian tax treaties is a key consideration for foreign companies. EOR arrangements are generally structured to avoid creating PE — the EOR is a separate Indian taxpayer, employees report to the foreign parent only on work direction, and there is no fixed place of business. However, decision-making authority residing with India-based personnel or contract execution can create dependent-agent PE. Obtain tax opinions on PE exposure where India team takes commercial decisions.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can a foreign company bill Indian customers through an EOR?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">No. An EOR cannot issue invoices to Indian customers on behalf of the foreign company. Customer-facing revenue in India requires GST registration, which in turn requires an Indian legal entity with a registered place of business. If your India operations include serving Indian customers and collecting INR revenues, you need a wholly-owned subsidiary or branch office. EOR is suitable for offshore-only operations where India team works on global products served from outside India to overseas customers.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the difference between WOS and LLP in India?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">A Wholly-Owned Subsidiary is a private limited company under the Companies Act 2013 with the foreign parent holding 100 percent shares. WOS is the most common vehicle, allows automatic 100 percent FDI in most sectors, and offers limited liability with clear governance. An LLP is governed by the LLP Act 2008 — lower compliance, no minimum capital, but FDI in LLP requires automatic-route eligibility and government approval in restricted sectors. WOS is preferred for most operating businesses.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How does an EOR handle terminations in India?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">EORs handle terminations in compliance with notice requirements and gratuity provisions under the Payment of Gratuity Act 1972. Standard notice is thirty to ninety days depending on the contract and applicable Shops and Establishments Act. Full and final settlements cover pending salary, leave encashment, statutory bonus, and gratuity. The foreign company can request termination but must respect the EOR contract terms. Wrongful termination claims are filed against the EOR as legal employer.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I switch from EOR to entity later?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. Many companies start with EOR for market entry then transition to a wholly-owned subsidiary as the team scales. The transition involves incorporating the entity, registering as an employer with EPF and ESI, transferring employment contracts from EOR to the new entity with employee consent, and ensuring continuity of statutory benefits including gratuity service. The Patron team handles end-to-end transitions including dual payroll for transition month, employee communications, and documentation transfer with no service interruption.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What ongoing compliance does an Indian subsidiary have?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">An Indian subsidiary has multi-layered ongoing compliance: monthly GST returns and payroll filings, quarterly TDS returns, annual statutory audit under Companies Act 2013, annual income tax return, transfer pricing study and Form 3CEB if related-party transactions exceed one crore rupees, annual ROC filings (AOC-4 and MGT-7), annual FDI compliance through Form FLA filing with RBI, and ongoing labour law compliance. Total ongoing fees typically run thirty to sixty thousand rupees per month.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is EOR or entity better for protecting intellectual property?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">An Indian entity provides cleaner IP ownership — the subsidiary directly employs the developers and IP assignment flows from employee to subsidiary to parent through inter-company agreements. EOR arrangements require careful IP assignment drafting since the legal employment relationship sits with the EOR. Most reputable EORs have standard IP assignment clauses transferring rights to the foreign company. For IP-critical operations like core product development, an entity is generally preferred despite the higher cost.</div></div>
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

    // EOR pricing tiers (₹ per employee per month)
    const EOR_TIERS = {
        budget:     { fee: 8000,  label: 'India-focused (₹8K/mo)' },
        mid:        { fee: 25000, label: 'Mid-market global (₹25K/mo)' },
        enterprise: { fee: 45000, label: 'Enterprise (₹45K/mo)' }
    };

    // Statutory employer burden (% of gross)
    const STAT_BURDEN_PCT = 0.18; // ~18% blended (PF 12% basic + ESI partial + gratuity 4.81% + bonus + PT)

    // Entity costs (INR)
    const ENTITY_SETUP_COST = 350000;     // one-time: incorp + FDI + tax registrations
    const ENTITY_MONTHLY_COMP = 45000;    // monthly: payroll + GST + ROC + audit + TP

    // State chosen city (just labels — same costs apply)
    let horizon = 24;
    let tier = 'budget';

    function fmtINR(n) {
        if (n >= 10000000) return '₹' + (n/10000000).toFixed(2) + ' Cr';
        if (n >= 100000) return '₹' + (n/100000).toFixed(2) + ' L';
        if (n >= 1000) return '₹' + (n/1000).toFixed(0) + 'K';
        return '₹' + Math.round(n).toLocaleString('en-IN');
    }

    function fmtINRfull(n) {
        return '₹' + Math.round(n).toLocaleString('en-IN');
    }

    function compute() {
        const employees = parseInt(document.getElementById('employees').value);
        const salary = parseInt(document.getElementById('salary').value);

        if (!employees || employees < 1 || !salary || salary < 1) {
            alert('Please enter valid employee count and salary.');
            return;
        }

        const months = horizon;
        const eorFee = EOR_TIERS[tier].fee;

        // Salary cost (identical for both)
        const salaryCost = salary * employees * months;
        const statutoryCost = salaryCost * STAT_BURDEN_PCT;

        // Entity total cost
        const entitySetup = ENTITY_SETUP_COST;
        const entityCompliance = ENTITY_MONTHLY_COMP * months;
        const entityTotal = salaryCost + statutoryCost + entitySetup + entityCompliance;

        // EOR total cost
        const eorTotalFee = eorFee * employees * months;
        const eorTotal = salaryCost + statutoryCost + eorTotalFee;

        // Breakeven: at what employee count does entity cost = EOR cost?
        // Entity = salary*N*M + 0.18*salary*N*M + 350K + 45K*M
        // EOR    = salary*N*M + 0.18*salary*N*M + EOR_fee*N*M
        // Setting equal: 350K + 45K*M = EOR_fee*N*M
        // N = (350K + 45K*M) / (EOR_fee*M)
        const breakevenEmployees = (entitySetup + ENTITY_MONTHLY_COMP * months) / (eorFee * months);

        // Determine recommendation
        let verdict, headline, summary;
        const cheaper = entityTotal < eorTotal ? 'entity' : 'eor';
        const savings = Math.abs(entityTotal - eorTotal);
        const savingsPct = (savings / Math.max(entityTotal, eorTotal)) * 100;

        if (employees < 5 && months <= 12) {
            verdict = 'eor';
            headline = 'EOR Recommended — Pilot / Market Entry';
            summary = 'For under 5 employees over 12 months, EOR is operationally faster (1-3 days vs 10-16 weeks) and avoids the ₹3.5L+ setup cost. Once headcount grows or you need INR billing / visa sponsorship, transition to WOS.';
        } else if (employees < 8 && months <= 24) {
            verdict = 'eor';
            headline = 'EOR Recommended — Early-Stage India Team';
            summary = 'For small teams in 12-24 month horizon, EOR remains cheaper and operationally simpler. Your breakeven crosses around ' + breakevenEmployees.toFixed(0) + ' employees at this provider tier — plan the transition when you cross that.';
        } else if (employees >= breakevenEmployees && months >= 24) {
            verdict = 'entity';
            headline = 'Indian Entity (WOS) Recommended';
            summary = 'At ' + employees + ' employees over ' + months + ' months, entity is ' + fmtINR(savings) + ' cheaper than EOR (' + savingsPct.toFixed(0) + '% savings). The 10-16 week setup pays back through dilution of fixed compliance costs over your headcount. Plus the entity unlocks INR billing, visa sponsorship, and direct equity grants.';
        } else if (employees >= breakevenEmployees * 0.8) {
            verdict = 'either';
            headline = 'Either Route Workable — Consider Strategic Factors';
            summary = 'Your scenario is near breakeven (' + breakevenEmployees.toFixed(0) + ' employees). Cost difference is minor (' + fmtINR(savings) + '). Decide based on strategic factors: INR billing capability, visa sponsorship needs, IP critically, exit flexibility, and long-term scalability beyond 36 months.';
        } else {
            verdict = 'eor';
            headline = 'EOR Recommended — Below Breakeven';
            summary = 'At ' + employees + ' employees and ' + months + ' month horizon, EOR is ' + fmtINR(savings) + ' cheaper. Entity becomes cheaper at ' + breakevenEmployees.toFixed(0) + ' employees. Transition to entity once headcount and time horizon justify the fixed costs.';
        }

        renderResult({
            employees, salary, months, eorFee, tier,
            salaryCost, statutoryCost,
            entitySetup, entityCompliance, entityTotal,
            eorTotalFee, eorTotal,
            breakevenEmployees, savings, savingsPct, cheaper,
            verdict, headline, summary
        });
    }

    function renderResult(r) {
        // Verdict
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + r.verdict;
        const pill = document.getElementById('verdictPill');
        pill.className = 'verdict-pill ' + r.verdict;
        const pillText = {entity: '✓ Entity (WOS)', eor: '✓ EOR', either: '⚖ Either Workable'};
        pill.textContent = pillText[r.verdict];
        document.getElementById('verdictHeadline').textContent = r.headline;
        document.getElementById('verdictSummary').textContent = r.summary;

        // Cost cards
        document.getElementById('entityTotal').textContent = fmtINR(r.entityTotal);
        document.getElementById('eorTotal').textContent = fmtINR(r.eorTotal);
        document.getElementById('entityHorizonLbl').textContent = 'Total over ' + r.months + ' months';
        document.getElementById('eorHorizonLbl').textContent = 'Total over ' + r.months + ' months';

        document.getElementById('entityBreakdown').innerHTML =
            '<div class="cost-breakdown-row"><span class="l">Salary cost</span><span class="v">' + fmtINR(r.salaryCost) + '</span></div>' +
            '<div class="cost-breakdown-row"><span class="l">Statutory (~18%)</span><span class="v">' + fmtINR(r.statutoryCost) + '</span></div>' +
            '<div class="cost-breakdown-row"><span class="l">Setup (one-time)</span><span class="v">' + fmtINR(r.entitySetup) + '</span></div>' +
            '<div class="cost-breakdown-row"><span class="l">Compliance (monthly)</span><span class="v">' + fmtINR(r.entityCompliance) + '</span></div>';

        document.getElementById('eorBreakdown').innerHTML =
            '<div class="cost-breakdown-row"><span class="l">Salary cost</span><span class="v">' + fmtINR(r.salaryCost) + '</span></div>' +
            '<div class="cost-breakdown-row"><span class="l">Statutory (~18%)</span><span class="v">' + fmtINR(r.statutoryCost) + '</span></div>' +
            '<div class="cost-breakdown-row"><span class="l">EOR fee (' + EOR_TIERS[r.tier].label + ')</span><span class="v">' + fmtINR(r.eorTotalFee) + '</span></div>' +
            '<div class="cost-breakdown-row"><span class="l">Setup</span><span class="v">₹0</span></div>';

        // Savings card
        const cheaperLabel = r.cheaper === 'entity' ? 'Indian Entity is' : 'EOR is';
        document.getElementById('savingsValue').textContent = fmtINR(r.savings) + ' (' + r.savingsPct.toFixed(0) + '%)';
        document.getElementById('savingsSub').textContent = cheaperLabel + ' cheaper over ' + r.months + ' months for your inputs';

        // Chart — cumulative cost over time
        renderChart(r);

        // Breakeven note
        document.getElementById('chartBreakeven').innerHTML =
            'Entity becomes cheaper than EOR at <strong>' + r.breakevenEmployees.toFixed(0) +
            ' employees</strong> over ' + r.months + ' months at ' + EOR_TIERS[r.tier].label + '.';

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    function renderChart(r) {
        const svg = document.getElementById('chartSvg');
        const W = 600, H = 240, P = 40;

        // Compute cumulative costs by month
        const points = [];
        const monthlySalaryCost = r.salary * r.employees * (1 + STAT_BURDEN_PCT);
        for (let m = 1; m <= r.months; m++) {
            const cumSalary = monthlySalaryCost * m;
            const entity = cumSalary + r.entitySetup + (ENTITY_MONTHLY_COMP * m);
            const eor = cumSalary + (r.eorFee * r.employees * m);
            points.push({m, entity, eor});
        }

        const maxCost = Math.max(...points.map(p => Math.max(p.entity, p.eor)));
        const xStep = (W - 2*P) / (r.months - 1);

        function px(m) { return P + (m-1) * xStep; }
        function py(v) { return H - P - (v / maxCost) * (H - 2*P); }

        let entityPath = 'M ' + px(1) + ' ' + py(points[0].entity);
        let eorPath = 'M ' + px(1) + ' ' + py(points[0].eor);
        for (let i = 1; i < points.length; i++) {
            entityPath += ' L ' + px(points[i].m) + ' ' + py(points[i].entity);
            eorPath += ' L ' + px(points[i].m) + ' ' + py(points[i].eor);
        }

        // Find where lines cross (if any)
        let crossX = null;
        for (let i = 1; i < points.length; i++) {
            const prev = points[i-1], curr = points[i];
            if ((prev.entity > prev.eor && curr.entity < curr.eor) ||
                (prev.entity < prev.eor && curr.entity > curr.eor)) {
                // linear interpolation
                const t = Math.abs(prev.entity - prev.eor) / (Math.abs(prev.entity - prev.eor) + Math.abs(curr.entity - curr.eor));
                crossX = px(prev.m + t);
                break;
            }
        }

        // Y-axis labels (4 ticks)
        let yLabels = '';
        for (let i = 0; i <= 4; i++) {
            const y = H - P - i * (H - 2*P) / 4;
            const v = (maxCost * i / 4);
            yLabels += '<line x1="' + (P-4) + '" y1="' + y + '" x2="' + P + '" y2="' + y + '" stroke="#999"/>' +
                       '<text x="' + (P-8) + '" y="' + (y+4) + '" font-family="\'Space Mono\',monospace" font-size="10" fill="#888" text-anchor="end">' + fmtINR(v) + '</text>';
        }

        // X-axis labels (start, mid, end)
        const xMid = Math.ceil(r.months / 2);
        let xLabels = '';
        [1, xMid, r.months].forEach(function(m) {
            const x = px(m);
            xLabels += '<line x1="' + x + '" y1="' + (H-P) + '" x2="' + x + '" y2="' + (H-P+4) + '" stroke="#999"/>' +
                       '<text x="' + x + '" y="' + (H-P+18) + '" font-family="\'Space Mono\',monospace" font-size="10" fill="#888" text-anchor="middle">M' + m + '</text>';
        });

        let crossLine = '';
        if (crossX !== null) {
            crossLine = '<line x1="' + crossX + '" y1="' + P + '" x2="' + crossX + '" y2="' + (H-P) + '" stroke="#888" stroke-dasharray="4,3"/>' +
                        '<text x="' + crossX + '" y="' + (P-6) + '" font-family="\'Space Mono\',monospace" font-size="10" fill="#15365f" font-weight="700" text-anchor="middle">Breakeven</text>';
        }

        svg.innerHTML =
            // Axes
            '<line x1="' + P + '" y1="' + P + '" x2="' + P + '" y2="' + (H-P) + '" stroke="#bbb" stroke-width="1"/>' +
            '<line x1="' + P + '" y1="' + (H-P) + '" x2="' + (W-P) + '" y2="' + (H-P) + '" stroke="#bbb" stroke-width="1"/>' +
            yLabels +
            xLabels +
            crossLine +
            '<path d="' + entityPath + '" fill="none" stroke="#15365f" stroke-width="2.5"/>' +
            '<path d="' + eorPath + '" fill="none" stroke="#f26522" stroke-width="2.5"/>';
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        document.getElementById('employees').value = 10;
        document.getElementById('salary').value = 150000;
        document.getElementById('city').value = 'pune';
        horizon = 24;
        tier = 'budget';
        document.querySelectorAll('#horizonGroup .toggle-btn').forEach(b => b.classList.toggle('active', b.dataset.val === '24'));
        document.querySelectorAll('#tierGroup .toggle-btn').forEach(b => b.classList.toggle('active', b.dataset.val === 'budget'));
        document.getElementById('resultSection').classList.remove('visible');
    });

    document.querySelectorAll('#horizonGroup .toggle-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('#horizonGroup .toggle-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            horizon = parseInt(btn.dataset.val);
        });
    });

    document.querySelectorAll('#tierGroup .toggle-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('#tierGroup .toggle-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            tier = btn.dataset.val;
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
