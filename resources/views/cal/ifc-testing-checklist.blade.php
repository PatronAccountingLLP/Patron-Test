@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>IFC Testing Checklist &amp; Control Testing Templates</title>
    <meta name="description" content="IFC testing checklist generator: check applicability and get 12-process control testing templates for Section 143(3)(i) ICFR audits. Free CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ifc-testing-checklist/">
    <meta property="og:title" content="IFC Testing Checklist &amp; Templates — Sec 143(3)(i) — FY 2025-26">
    <meta property="og:description" content="Generate process-wise IFC testing checklists with key controls, test methods and sample sizes. Covers P2P, O2C, R2R, Inventory, Payroll, ITGC and 6 more.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/ifc-testing-checklist">
    <meta property="og:image" content="/tools/og/ifc-testing-checklist.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IFC Testing Checklist &amp; Templates — Sec 143(3)(i) — FY 2025-26">
    <meta name="twitter:description" content="Process-wise IFC testing templates with key controls + sample sizes. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/ifc-testing-checklist.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "IFC Testing Checklist & Templates Generator",
      "description": "IFC Testing Checklist & Templates Generator is a tool for Indian companies and statutory auditors to determine applicability of Internal Financial Controls reporting under Section 143(3)(i) of the Companies Act, 2013 read with MCA notification G.S.R. 583(E) dated 13 June 2017, and to generate process-wise control testing checklists. The applicability engine evaluates entity type (Listed, Public Unlisted, Private Limited, OPC, Small Company), turnover and borrowings thresholds (₹50 crore turnover, ₹25 crore aggregate borrowings), and Section 137 and 92 filing default status. The checklist generator produces test plans for twelve standard processes — Procure-to-Pay, Order-to-Cash, Record-to-Report, Inventory, Fixed Assets, Payroll, Treasury, Direct Tax, GST, Statutory Compliance, Revenue Recognition (Ind AS 115) and IT General Controls — with significant accounts mapped, key risks identified, control objectives stated, test methods recommended (walkthrough, inquiry, observation, inspection, reperformance) and sample sizes per ICAI Guidance Note on Audit of Internal Financial Controls Over Financial Reporting.",
      "url": "/tools/ifc-testing-checklist",
      "applicationCategory": "UtilityApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-07T08:00:00+05:30",
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
        {"@type": "ListItem", "position": 3, "name": "IFC Testing Checklist", "item": "/tools/ifc-testing-checklist"}
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
          "name": "What are Internal Financial Controls under Companies Act 2013?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Internal Financial Controls are policies and procedures adopted by a company under Section 134(5)(e) of the Companies Act, 2013 to ensure orderly and efficient conduct of business, adherence to company policies, safeguarding of assets, prevention and detection of frauds and errors, accuracy and completeness of accounting records, and timely preparation of reliable financial information. Section 143(3)(i) requires the statutory auditor to report on the adequacy and operating effectiveness of these controls."
          }
        },
        {
          "@type": "Question",
          "name": "Which private companies are exempt from auditor IFC reporting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MCA notification G.S.R. 583(E) dated 13 June 2017 exempted private companies from Section 143(3)(i) auditor reporting if they are an OPC, a Small Company, have turnover below ₹50 crore as per latest audited financial statements, or have aggregate borrowings from banks, financial institutions or any body corporate below ₹25 crore at any point during the year. The exemption is lost if the company defaulted in Section 137 or Section 92 filings."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between IFC under Sec 134 and Sec 143(3)(i)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 134(5)(e) requires the Board of Directors of every listed company to state in the Director's Responsibility Statement that adequate IFC have been laid down and are operating effectively. Section 143(3)(i) is narrower — it requires the statutory auditor to report only on Internal Financial Controls Over Financial Reporting (ICFR), not the entire IFC framework. Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014 extends similar disclosure to the Board's Report of all companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ICAI Guidance Note on IFC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ICAI issued the Guidance Note on Audit of Internal Financial Controls Over Financial Reporting on 14 September 2015 to support auditor reporting under Section 143(3)(i). The Guidance Note adopts the COSO 2013 Internal Control Integrated Framework, prescribes a top-down risk-based approach, defines design and operating effectiveness, lays down sample size guidance based on control frequency, and provides illustrative documentation templates for walkthrough, inquiry, observation, inspection and reperformance procedures."
          }
        },
        {
          "@type": "Question",
          "name": "Is IFC the same as Internal Audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Internal Audit under Section 138 of the Companies Act, 2013 is an independent assurance function that evaluates risk management, control and governance processes for management. IFC under Section 134(5)(e) and Section 143(3)(i) is the system of controls itself. The Internal Auditor often performs IFC testing as part of management's assessment, but the statutory auditor must form an independent opinion on IFC adequacy and operating effectiveness."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between design and operating effectiveness?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Design effectiveness assesses whether the control, as designed, would prevent or detect a material misstatement if operated by a person with the necessary authority and competence. Operating effectiveness assesses whether the control actually operated as designed throughout the audit period. Design is typically tested through walkthrough and inquiry; operating effectiveness requires inspection of evidence and reperformance of the control activity over a sample of transactions."
          }
        },
        {
          "@type": "Question",
          "name": "What test methods are used in IFC audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The five standard test methods recognised in the ICAI Guidance Note are inquiry of personnel, observation of control performance, inspection of relevant documents and reports, reperformance of the control by the auditor, and walkthrough. Walkthroughs combine inquiry, observation and inspection to trace a transaction from origination through processing to recording. Higher-risk controls require evidence-based methods (inspection or reperformance) rather than inquiry alone."
          }
        },
        {
          "@type": "Question",
          "name": "How is sample size determined for IFC testing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ICAI Guidance Note recommends sample sizes based on control frequency: daily controls 25 to 40 occurrences, weekly controls 8 to 15, monthly controls 2 to 5, quarterly controls 2, semi-annual controls 1 to 2, and annual controls 1. Sample size increases for controls with higher risk of failure, controls reliant on judgment, automated controls in changed IT environments, and the first year of testing. Sample selection should cover the entire audit period."
          }
        },
        {
          "@type": "Question",
          "name": "What documentation is required for IFC testing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IFC working papers must document the entity-level controls assessment, process narratives or flowcharts, identification of significant accounts and risks of material misstatement, key controls mapped to assertions, test of design (walkthrough), test of operating effectiveness with sample selection rationale, evidence of testing performed, deficiencies noted, severity classification, and management's remediation. Standards on Auditing 230 governs audit documentation requirements."
          }
        },
        {
          "@type": "Question",
          "name": "What are IT General Controls and why are they important?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT General Controls (ITGC) are foundational IT controls that ensure the reliability of automated application controls and IT-dependent reports used in financial reporting. The four ITGC domains are logical access management, change management, IT operations including backup and recovery, and program development. ITGCs are pervasive — if they fail, automated controls in business processes cannot be relied upon, forcing the auditor to perform substantive procedures or test more sample size."
          }
        },
        {
          "@type": "Question",
          "name": "What is a material weakness in IFC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A material weakness is a deficiency or combination of deficiencies in internal financial controls such that there is a reasonable possibility that a material misstatement of the financial statements will not be prevented or detected on a timely basis. The auditor must communicate material weaknesses to those charged with governance, modify the audit report under Section 143(3)(i) with an adverse or qualified opinion on IFC, and consider impact on the financial statement audit opinion."
          }
        },
        {
          "@type": "Question",
          "name": "Does IFC reporting apply to consolidated financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 143(3)(i) read with the ICAI Guidance Note, the auditor of consolidated financial statements must report on IFC over financial reporting at the consolidated level. The parent auditor relies on the work of component auditors for IFC testing of subsidiaries, joint ventures and associates included in consolidation, applying SA 600 and the principles of group audit. Component auditor representations on IFC must be obtained and reviewed."
          }
        },
        {
          "@type": "Question",
          "name": "What is the COSO 2013 framework?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The COSO 2013 Internal Control Integrated Framework, issued by the Committee of Sponsoring Organizations of the Treadway Commission, is the global benchmark for internal control assessment adopted by the ICAI Guidance Note for IFC audits in India. It defines internal control through five integrated components: control environment, risk assessment, control activities, information and communication, and monitoring activities, supported by 17 underlying principles."
          }
        }
      ]
    }
    </script>
@endsection

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
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 20px; margin-bottom: 20px; }
        @media (min-width: 600px) {
            .calc-row { grid-template-columns: 1fr 1fr; }
            .calc-row.three-col { grid-template-columns: 1fr 1fr 1fr; }
        }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; outline: none; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="number"] { font-family: var(--font-mono); font-size: 18px; font-weight: 700; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .toggle-group { display: flex; flex-wrap: wrap; background: var(--surface-alt); border-radius: var(--radius); padding: 4px; gap: 4px; }
        .toggle-btn { flex: 1 1 auto; padding: 10px 12px; border: none; border-radius: 8px; font-family: var(--font-body); font-size: 13px; font-weight: 600; color: var(--text-muted); background: transparent; cursor: pointer; transition: all 0.25s; -webkit-tap-highlight-color: transparent; min-width: 0; }
        .toggle-btn * { pointer-events: none; }
        .toggle-btn.active { background: var(--card); color: var(--primary); box-shadow: var(--shadow-sm); }
        .toggle-group.stacked-mobile { flex-direction: column; }
        @media (min-width: 600px) { .toggle-group.stacked-mobile { flex-direction: row; } }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px; margin-bottom: 20px; border-left: 6px solid; }
        .verdict-card.applicable { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.exempt { background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); border-left-color: var(--success); }
        .verdict-card.governance { background: linear-gradient(135deg, #FFF7ED 0%, #FED7AA 100%); border-left-color: var(--accent); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .verdict-sub { font-size: 14px; color: var(--text-secondary); }
        .summary-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 20px; }
        @media (min-width: 500px) { .summary-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .summary-grid { grid-template-columns: repeat(3, 1fr); } }
        .summary-card { background: var(--surface); border-radius: var(--radius); padding: 16px; border: 1px solid var(--border); }
        .summary-card.highlight { background: var(--primary); border-color: var(--primary); }
        .summary-card.highlight .summary-label, .summary-card.highlight .summary-value { color: #fff; }
        .summary-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .summary-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #D1FAE5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .process-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-top: 8px; }
        @media (min-width: 600px) { .process-grid { grid-template-columns: 1fr 1fr 1fr; } }
        .process-chip { display: flex; align-items: center; gap: 8px; padding: 10px 12px; border: 1.5px solid var(--border); border-radius: var(--radius); cursor: pointer; transition: all 0.2s; background: var(--surface); -webkit-tap-highlight-color: transparent; user-select: none; }
        .process-chip * { pointer-events: none; }
        .process-chip:hover { border-color: var(--primary-light); background: var(--card); }
        .process-chip.selected { border-color: var(--primary); background: #ECFDF5; }
        .process-chip-checkbox { width: 18px; height: 18px; border-radius: 4px; border: 2px solid var(--border); flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: var(--card); transition: all 0.2s; }
        .process-chip.selected .process-chip-checkbox { background: var(--primary); border-color: var(--primary); }
        .process-chip.selected .process-chip-checkbox::after { content: "✓"; color: #fff; font-size: 12px; font-weight: 700; }
        .process-chip-label { font-size: 13px; font-weight: 600; color: var(--text); flex: 1; line-height: 1.3; }
        .process-chip.selected .process-chip-label { color: var(--primary-dark); }

        .process-actions { display: flex; gap: 10px; margin-top: 12px; flex-wrap: wrap; }
        .process-btn { padding: 8px 14px; font-size: 12px; font-weight: 600; border-radius: 8px; cursor: pointer; border: 1px solid var(--border); background: var(--card); color: var(--primary); font-family: var(--font-body); transition: all 0.2s; }
        .process-btn:hover { background: var(--surface-alt); }

        .process-card { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); margin-bottom: 12px; overflow: hidden; transition: box-shadow 0.2s; border-left: 4px solid var(--primary); }
        .process-card:hover { box-shadow: var(--shadow-sm); }
        .process-header { display: flex; justify-content: space-between; align-items: center; padding: 14px 18px; gap: 12px; cursor: pointer; -webkit-tap-highlight-color: transparent; user-select: none; background: linear-gradient(to right, #F0FDFA 0%, var(--card) 100%); }
        .process-header * { pointer-events: none; }
        .process-header-left { display: flex; align-items: center; gap: 12px; flex: 1; min-width: 0; }
        .process-tag { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: #fff; background: var(--primary); padding: 4px 10px; border-radius: 6px; letter-spacing: 0.5px; flex-shrink: 0; }
        .process-name { font-size: 15px; font-weight: 700; color: var(--primary-dark); line-height: 1.4; }
        .process-meta { font-size: 11px; color: var(--text-muted); font-family: var(--font-mono); flex-shrink: 0; }
        .process-toggle { color: var(--primary); font-size: 22px; line-height: 1; transition: transform 0.25s; padding-left: 4px; flex-shrink: 0; }
        .process-card.open .process-toggle { transform: rotate(45deg); }
        .process-body { max-height: 0; overflow: hidden; transition: max-height 0.5s ease; padding: 0 18px; }
        .process-card.open .process-body { max-height: 5000px; padding: 0 18px 16px; }
        .process-body h4 { font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin: 14px 0 6px; font-family: var(--font-mono); }
        .process-body p { font-size: 13px; color: var(--text-secondary); line-height: 1.65; margin-bottom: 8px; }
        .process-body ul { margin: 4px 0 8px 18px; }
        .process-body li { font-size: 13px; color: var(--text-secondary); padding: 3px 0; line-height: 1.6; }

        .controls-table { width: 100%; border-collapse: collapse; margin: 8px 0; font-size: 12px; }
        .controls-table thead th { background: var(--primary-dark); color: #fff; padding: 8px 10px; text-align: left; font-weight: 600; font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; }
        .controls-table thead th:first-child { border-radius: 6px 0 0 0; }
        .controls-table thead th:last-child { border-radius: 0 6px 0 0; }
        .controls-table tbody td { padding: 8px 10px; border-bottom: 1px solid var(--border); color: var(--text-secondary); font-size: 12px; line-height: 1.5; vertical-align: top; }
        .controls-table tbody td.method { font-family: var(--font-mono); font-size: 11px; }
        .controls-table tbody td.sample { font-family: var(--font-mono); font-size: 11px; color: var(--primary-dark); font-weight: 700; text-align: center; }
        .controls-table tbody td .ctrl-num { display: inline-block; font-family: var(--font-mono); font-size: 10px; font-weight: 700; color: var(--primary); background: var(--surface-alt); padding: 1px 5px; border-radius: 3px; margin-right: 4px; }
        @media (max-width: 600px) {
            .controls-table { font-size: 11px; }
            .controls-table thead th, .controls-table tbody td { padding: 6px 7px; }
            .controls-table thead th:nth-child(3), .controls-table tbody td:nth-child(3) { display: none; }
        }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(42,122,95,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E0F2F1; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; }
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
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: var(--primary-dark); font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        .conditional-row { display: none; }
        .conditional-row.show { display: grid; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .process-tag { font-size: 10px; padding: 3px 8px; }
            .process-name { font-size: 13px; }
            .process-meta { display: none; }
        }
    </style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#checker">Checklist</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#applicability">Applicability</a>
        <a href="#sample-sizes">Sample Sizes</a>
        <a href="#test-methods">Test Methods</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    IFC Testing Checklist
</nav>

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>IFC Testing Checklist <span>&amp; Templates</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Internal Financial Controls reporting under Section 143(3)(i) of the Companies Act, 2013 applies to all listed and public unlisted companies, and to private companies that exceed ₹50 crore turnover or ₹25 crore aggregate borrowings. This tool determines applicability based on MCA notification G.S.R. 583(E) dated 13 June 2017 and generates a process-wise testing checklist for 12 standard processes — P2P, O2C, R2R, Inventory, Fixed Assets, Payroll, Treasury, Direct Tax, GST, Statutory Compliance, Revenue Recognition and ITGC — with key controls, test methods and sample sizes per the ICAI Guidance Note on IFC.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Generate Your IFC Testing Plan</h2>
            <p class="calc-intro">Select your entity profile and the processes in scope. The tool checks applicability under Section 143(3)(i) and generates a testing checklist with key controls, recommended test methods and sample sizes for each selected process.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this checklist generator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Entity Profile</div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Entity Type</label>
                <div class="toggle-group" id="entityTypeGroup" role="tablist" aria-label="Entity type">
                    <button type="button" class="toggle-btn active" data-value="listed" role="tab" aria-selected="true">Listed</button>
                    <button type="button" class="toggle-btn" data-value="public" role="tab" aria-selected="false">Public Unlisted</button>
                    <button type="button" class="toggle-btn" data-value="pvtltd" role="tab" aria-selected="false">Pvt Ltd</button>
                    <button type="button" class="toggle-btn" data-value="opc" role="tab" aria-selected="false">OPC</button>
                    <button type="button" class="toggle-btn" data-value="small" role="tab" aria-selected="false">Small Co</button>
                </div>
            </div>

            <div class="calc-row conditional-row" id="rowPvtThresholds">
                <div class="form-group">
                    <label for="turnover">Turnover (Latest Audited FS)</label>
                    <input type="number" id="turnover" min="0" step="0.01" placeholder="e.g. 35" inputmode="decimal">
                    <span class="helper">In ₹ crore — exemption if &lt; ₹50 crore.</span>
                </div>
                <div class="form-group">
                    <label for="borrowings">Aggregate Borrowings</label>
                    <input type="number" id="borrowings" min="0" step="0.01" placeholder="e.g. 18" inputmode="decimal">
                    <span class="helper">Banks/FIs/body corporate, any point during FY (₹ crore) — exemption if &lt; ₹25 crore.</span>
                </div>
            </div>

            <div class="form-group conditional-row" id="rowDefault" style="margin-bottom:20px;">
                <label>Default in Section 137 (FS) or Section 92 (Annual Return) filings?</label>
                <div class="toggle-group stacked-mobile" id="defaultGroup" role="tablist">
                    <button type="button" class="toggle-btn active" data-value="no" role="tab" aria-selected="true">No</button>
                    <button type="button" class="toggle-btn" data-value="yes" role="tab" aria-selected="false">Yes — defaulted</button>
                </div>
                <span class="helper">A default in Sec 137 or Sec 92 filings forfeits the private company exemption from auditor IFC reporting.</span>
            </div>

            <div class="calc-section-title">Processes in Scope (Select All That Apply)</div>

            <div class="process-grid" id="processGrid">
                <div class="process-chip selected" data-process="p2p"><div class="process-chip-checkbox"></div><div class="process-chip-label">P2P (Purchase)</div></div>
                <div class="process-chip selected" data-process="o2c"><div class="process-chip-checkbox"></div><div class="process-chip-label">O2C (Sales)</div></div>
                <div class="process-chip selected" data-process="r2r"><div class="process-chip-checkbox"></div><div class="process-chip-label">R2R (GL &amp; Close)</div></div>
                <div class="process-chip selected" data-process="inv"><div class="process-chip-checkbox"></div><div class="process-chip-label">Inventory</div></div>
                <div class="process-chip selected" data-process="fa"><div class="process-chip-checkbox"></div><div class="process-chip-label">Fixed Assets</div></div>
                <div class="process-chip selected" data-process="pay"><div class="process-chip-checkbox"></div><div class="process-chip-label">Payroll</div></div>
                <div class="process-chip" data-process="tre"><div class="process-chip-checkbox"></div><div class="process-chip-label">Treasury &amp; Cash</div></div>
                <div class="process-chip" data-process="dt"><div class="process-chip-checkbox"></div><div class="process-chip-label">Direct Tax</div></div>
                <div class="process-chip" data-process="gst"><div class="process-chip-checkbox"></div><div class="process-chip-label">GST / Indirect Tax</div></div>
                <div class="process-chip" data-process="comp"><div class="process-chip-checkbox"></div><div class="process-chip-label">Statutory Compliance</div></div>
                <div class="process-chip" data-process="rev"><div class="process-chip-checkbox"></div><div class="process-chip-label">Revenue Recognition</div></div>
                <div class="process-chip" data-process="itgc"><div class="process-chip-checkbox"></div><div class="process-chip-label">ITGC</div></div>
            </div>

            <div class="process-actions">
                <button type="button" class="process-btn" id="btnSelectAll">Select All 12</button>
                <button type="button" class="process-btn" id="btnSelectNone">Clear All</button>
                <button type="button" class="process-btn" id="btnSelectCore">Core 6 (P2P, O2C, R2R, Inv, FA, Pay)</button>
            </div>

            <button type="button" class="btn-calculate" id="btnGenerate" style="margin-top:18px;">Generate IFC Testing Checklist</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>
                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Verdict</div>
                    <div class="verdict-headline" id="verdictHeadline"></div>
                    <div class="verdict-sub" id="verdictSub"></div>
                </div>

                <div class="summary-grid" id="summaryGrid"></div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="basis-block">
                    <div class="basis-label">Legal Basis</div>
                    <div class="basis-text" id="basisText"></div>
                </div>

                <div id="processOutput"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Tool Works</h2>
            <p>The tool runs your entity profile through the IFC reporting applicability test under Section 143(3)(i) of the Companies Act, 2013 read with MCA notification G.S.R. 583(E) dated 13 June 2017, then generates the process-wise testing checklist based on the ICAI Guidance Note on Audit of Internal Financial Controls Over Financial Reporting.</p>

            <h3>Step 1 — Applicability Cascade</h3>
            <p>For listed and public unlisted companies, IFC auditor reporting under Section 143(3)(i) is mandatory with no size-based exemption. For private companies, the tool checks the four exemption gateways: OPC, Small Company, turnover below ₹50 crore, or aggregate borrowings below ₹25 crore — meeting any one of these qualifies for exemption, provided no default exists in Section 137 or Section 92 filings.</p>

            <h3>Step 2 — Process Selection</h3>
            <p>Pick the processes in scope for your audit. The tool offers 12 standard processes covering most Indian companies: Procure-to-Pay, Order-to-Cash, Record-to-Report, Inventory, Fixed Assets, Payroll, Treasury, Direct Tax, GST, Statutory Compliance, Revenue Recognition under Ind AS 115, and IT General Controls (ITGC). A "Core 6" preset covers the most common processes.</p>

            <h3>Step 3 — Testing Checklist Generation</h3>
            <p>For each selected process, the tool generates a structured checklist containing significant financial statement accounts impacted, key risks of material misstatement, 5 to 7 key controls with control objectives, recommended test method per control (walkthrough, inquiry, observation, inspection or reperformance), and ICAI-aligned sample size based on control frequency.</p>

            <h3>Step 4 — Documentation</h3>
            <p>The output gives you a working paper-ready outline. Combine it with your entity-level controls assessment, fraud risk assessment, materiality determination and audit response strategy under SA 315 (Identifying and Assessing the Risks of Material Misstatement) and SA 330 (The Auditor's Responses to Assessed Risks) to complete the IFC audit file.</p>
        </section>

        <section class="content-section" id="applicability">
            <h2>Applicability Decoded — Sec 134(5)(e) vs Sec 143(3)(i)</h2>
            <p>The Companies Act, 2013 deals with Internal Financial Controls in two distinct provisions that are often confused. Understanding the difference is essential to scoping the audit correctly.</p>

            <h3>Section 134(5)(e) — Director's Responsibility</h3>
            <p>Section 134(5)(e) requires the directors of every <strong>listed company</strong> to state in the Director's Responsibility Statement that they have laid down internal financial controls and that such controls are adequate and operating effectively. <a href="https://www.mca.gov.in/Ministry/pdf/CompaniesAccountsRules2014.pdf" target="_blank" rel="noopener">Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014</a> extends a similar disclosure to the Board's Report of all companies — meaning every company's Board's Report must comment on adequacy of IFC with reference to financial statements.</p>

            <h3>Section 143(3)(i) — Auditor's Reporting</h3>
            <p>Section 143(3)(i) is narrower in scope. It requires the statutory auditor to report on adequacy and operating effectiveness of <strong>Internal Financial Controls Over Financial Reporting</strong> (ICFR), not the entire IFC framework. Originally applicable to all companies, MCA exempted certain private companies via notification G.S.R. 583(E) dated 13 June 2017.</p>

            <h3>Auditor IFC Reporting — Applicability Matrix</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Entity Type</th><th>Applicability</th><th>Basis</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Listed Company</strong></td><td>Mandatory</td><td>Sec 143(3)(i) — no exemption</td></tr>
                    <tr><td><strong>Public Unlisted Company</strong></td><td>Mandatory</td><td>Sec 143(3)(i) — no size carve-out</td></tr>
                    <tr><td><strong>OPC</strong></td><td>Exempt</td><td>G.S.R. 583(E) dated 13.06.2017</td></tr>
                    <tr><td><strong>Small Company</strong></td><td>Exempt</td><td>G.S.R. 583(E) dated 13.06.2017</td></tr>
                    <tr><td><strong>Pvt Ltd — turnover &lt; ₹50 cr</strong></td><td>Exempt</td><td>G.S.R. 583(E) — turnover threshold</td></tr>
                    <tr><td><strong>Pvt Ltd — borrowings &lt; ₹25 cr</strong></td><td>Exempt</td><td>G.S.R. 583(E) — borrowings threshold</td></tr>
                    <tr><td><strong>Pvt Ltd — defaulted in Sec 137 / 92</strong></td><td>Mandatory</td><td>Exemption forfeited on default</td></tr>
                </tbody>
            </table>

            <div class="callout warn">
                <p><strong>Common misinterpretation:</strong> The exemption test for private companies uses <em>OR</em> between turnover and borrowings — meeting <em>either</em> threshold is sufficient. Some practitioners read it as <em>AND</em>, which is more restrictive. The literal text of G.S.R. 583(E) supports the <em>OR</em> reading, but the Board's Report disclosure under Rule 8(5)(viii) still applies regardless.</p>
            </div>

            <p>The Institute of Chartered Accountants of India has published a <a href="https://kb.icai.org/" target="_blank" rel="noopener">Guidance Note on Audit of Internal Financial Controls Over Financial Reporting</a> with detailed methodology, illustrative tests of controls, and documentation templates. The Guidance Note draws heavily on the <a href="https://www.coso.org/guidance-on-ic" target="_blank" rel="noopener">COSO 2013 Internal Control Integrated Framework</a> and is the primary standard for IFC audits in India. For listed companies, additional governance requirements flow from the <a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a> Listing Obligations and Disclosure Requirements (LODR) Regulations 2015.</p>

            <p>Refer to the official notification at <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA portal</a> and the underlying Companies Act provisions on <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">India Code</a>.</p>
        </section>

        <section class="content-section" id="sample-sizes">
            <h2>Sample Size Guidance — ICAI Framework</h2>
            <p>The ICAI Guidance Note on Audit of Internal Financial Controls Over Financial Reporting prescribes sample sizes for testing operating effectiveness based on control frequency. These are minimum guidelines — increase sample size for higher-risk controls, controls reliant on judgment, or first-year testing.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Control Frequency</th><th>Population per Year</th><th>Recommended Sample Size</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Multiple times per day / Daily</strong></td><td>250+</td><td>25 to 40</td></tr>
                    <tr><td><strong>Weekly</strong></td><td>52</td><td>8 to 15</td></tr>
                    <tr><td><strong>Monthly</strong></td><td>12</td><td>2 to 5</td></tr>
                    <tr><td><strong>Quarterly</strong></td><td>4</td><td>2</td></tr>
                    <tr><td><strong>Semi-Annually</strong></td><td>2</td><td>1 to 2</td></tr>
                    <tr><td><strong>Annually / Ad-hoc</strong></td><td>1</td><td>1 (whole population)</td></tr>
                </tbody>
            </table>

            <h3>Factors That Increase Sample Size</h3>
            <ul>
                <li>First year of testing the control or after a significant process change</li>
                <li>Control involves significant management judgment or estimation</li>
                <li>Higher inherent risk of fraud or error in the underlying transaction</li>
                <li>Past audit findings of control failure or deficiency</li>
                <li>Automated controls in IT environments with weak ITGCs</li>
                <li>Period of operation less than full year (e.g., new entity, acquisition mid-year)</li>
            </ul>

            <p>Sample sizes apply to operating effectiveness testing only. Design effectiveness is typically assessed through one walkthrough per process per audit period, supplemented by inquiry of personnel responsible for each control activity.</p>
        </section>

        <div class="body-cta">
            <h3>Need Help Setting Up Your IFC Framework?</h3>
            <p>Patron Accounting LLP designs IFC frameworks aligned to the ICAI Guidance Note and COSO 2013 — risk and control matrices, walkthrough documentation, testing programs and remediation roadmaps for Pune, Mumbai, Delhi, Gurugram and pan-India clients.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IFC%20Testing%20Checklist%20tool.%20I%20need%20help%20with%20IFC%20design%20and%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="test-methods">
            <h2>The Five Test Methods</h2>
            <p>The ICAI Guidance Note recognises five test methods for IFC audit. Selection depends on control type, risk, and the nature of evidence required.</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Method</th><th>Description</th><th>Best For</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Inquiry</strong></td><td>Asking personnel about control performance</td><td>Understanding the process; corroborative evidence only — never sufficient alone</td></tr>
                    <tr><td><strong>Observation</strong></td><td>Watching a control activity being performed</td><td>Cycle counts, segregation of duties verification, physical security checks</td></tr>
                    <tr><td><strong>Inspection</strong></td><td>Examining documents, reports or system evidence</td><td>Approval signatures, reconciliations, exception reports — most common method</td></tr>
                    <tr><td><strong>Reperformance</strong></td><td>Auditor independently performs the control</td><td>Three-way matches, recalculations, system access reviews — strongest evidence</td></tr>
                    <tr><td><strong>Walkthrough</strong></td><td>Trace one transaction end-to-end through all controls</td><td>Design effectiveness — combines inquiry, observation and inspection</td></tr>
                </tbody>
            </table>

            <p>For high-risk controls and key automated controls, inspection or reperformance is the primary method. Inquiry is used as a secondary or corroborative procedure. Observation is appropriate only for controls that occur during the testing window. Refer to <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI's Standards on Auditing</a> — particularly SA 315 and SA 330 — for the framework on linking risks to test responses.</p>

            <div class="callout">
                <p><strong>Audit quality note:</strong> The <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA inspection reports</a> for listed company audits routinely flag over-reliance on inquiry without corroborating inspection or reperformance as a serious deficiency. Always pair inquiry with at least one evidence-based procedure.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are Internal Financial Controls under Companies Act 2013?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Internal Financial Controls are policies and procedures adopted by a company under Section 134(5)(e) of the Companies Act, 2013 to ensure orderly and efficient conduct of business, adherence to company policies, safeguarding of assets, prevention and detection of frauds and errors, accuracy and completeness of accounting records, and timely preparation of reliable financial information. Section 143(3)(i) requires the statutory auditor to report on the adequacy and operating effectiveness of these controls.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which private companies are exempt from auditor IFC reporting?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">MCA notification G.S.R. 583(E) dated 13 June 2017 exempted private companies from Section 143(3)(i) auditor reporting if they are an OPC, a Small Company, have turnover below ₹50 crore as per latest audited financial statements, or have aggregate borrowings from banks, financial institutions or any body corporate below ₹25 crore at any point during the year. The exemption is lost if the company defaulted in Section 137 or Section 92 filings.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between IFC under Sec 134 and Sec 143(3)(i)?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Section 134(5)(e) requires the Board of Directors of every listed company to state in the Director's Responsibility Statement that adequate IFC have been laid down and are operating effectively. Section 143(3)(i) is narrower — it requires the statutory auditor to report only on Internal Financial Controls Over Financial Reporting (ICFR), not the entire IFC framework. Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014 extends similar disclosure to the Board's Report of all companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the ICAI Guidance Note on IFC?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The ICAI issued the Guidance Note on Audit of Internal Financial Controls Over Financial Reporting on 14 September 2015 to support auditor reporting under Section 143(3)(i). The Guidance Note adopts the COSO 2013 Internal Control Integrated Framework, prescribes a top-down risk-based approach, defines design and operating effectiveness, lays down sample size guidance based on control frequency, and provides illustrative documentation templates for walkthrough, inquiry, observation, inspection and reperformance procedures.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Is IFC the same as Internal Audit?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. Internal Audit under Section 138 of the Companies Act, 2013 is an independent assurance function that evaluates risk management, control and governance processes for management. IFC under Section 134(5)(e) and Section 143(3)(i) is the system of controls itself. The Internal Auditor often performs IFC testing as part of management's assessment, but the statutory auditor must form an independent opinion on IFC adequacy and operating effectiveness.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the difference between design and operating effectiveness?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Design effectiveness assesses whether the control, as designed, would prevent or detect a material misstatement if operated by a person with the necessary authority and competence. Operating effectiveness assesses whether the control actually operated as designed throughout the audit period. Design is typically tested through walkthrough and inquiry; operating effectiveness requires inspection of evidence and reperformance of the control activity over a sample of transactions.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What test methods are used in IFC audit?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The five standard test methods recognised in the ICAI Guidance Note are inquiry of personnel, observation of control performance, inspection of relevant documents and reports, reperformance of the control by the auditor, and walkthrough. Walkthroughs combine inquiry, observation and inspection to trace a transaction from origination through processing to recording. Higher-risk controls require evidence-based methods (inspection or reperformance) rather than inquiry alone.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How is sample size determined for IFC testing?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">ICAI Guidance Note recommends sample sizes based on control frequency: daily controls 25 to 40 occurrences, weekly controls 8 to 15, monthly controls 2 to 5, quarterly controls 2, semi-annual controls 1 to 2, and annual controls 1. Sample size increases for controls with higher risk of failure, controls reliant on judgment, automated controls in changed IT environments, and the first year of testing. Sample selection should cover the entire audit period.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What documentation is required for IFC testing?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">IFC working papers must document the entity-level controls assessment, process narratives or flowcharts, identification of significant accounts and risks of material misstatement, key controls mapped to assertions, test of design (walkthrough), test of operating effectiveness with sample selection rationale, evidence of testing performed, deficiencies noted, severity classification, and management's remediation. Standards on Auditing 230 governs audit documentation requirements.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are IT General Controls and why are they important?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">IT General Controls (ITGC) are foundational IT controls that ensure the reliability of automated application controls and IT-dependent reports used in financial reporting. The four ITGC domains are logical access management, change management, IT operations including backup and recovery, and program development. ITGCs are pervasive — if they fail, automated controls in business processes cannot be relied upon, forcing the auditor to perform substantive procedures or test more sample size.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is a material weakness in IFC?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">A material weakness is a deficiency or combination of deficiencies in internal financial controls such that there is a reasonable possibility that a material misstatement of the financial statements will not be prevented or detected on a timely basis. The auditor must communicate material weaknesses to those charged with governance, modify the audit report under Section 143(3)(i) with an adverse or qualified opinion on IFC, and consider impact on the financial statement audit opinion.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does IFC reporting apply to consolidated financial statements?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Under Section 143(3)(i) read with the ICAI Guidance Note, the auditor of consolidated financial statements must report on IFC over financial reporting at the consolidated level. The parent auditor relies on the work of component auditors for IFC testing of subsidiaries, joint ventures and associates included in consolidation, applying SA 600 and the principles of group audit. Component auditor representations on IFC must be obtained and reviewed.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the COSO 2013 framework?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">The COSO 2013 Internal Control Integrated Framework, issued by the Committee of Sponsoring Organizations of the Treadway Commission, is the global benchmark for internal control assessment adopted by the ICAI Guidance Note for IFC audits in India. It defines internal control through five integrated components: control environment, risk assessment, control activities, information and communication, and monitoring activities, supported by 17 underlying principles.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need IFC Audit Sign-off?</h3>
            <p>Get a CA-led IFC audit with risk and control matrices, walkthrough documentation, sample-based testing and management letter — for FY 2025-26.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20IFC%20Testing%20Checklist%20tool.%20I%20need%20help%20with%20IFC%20design%20and%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/secretarial-audit" class="sidebar-link">Secretarial Audit<span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Accounting Services<span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/caro-2020-checklist-generator" class="sidebar-link">CARO 2020 Checklist Generator<span class="arrow">→</span></a>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/deferred-tax-calculator" class="sidebar-link">Deferred Tax Calculator<span class="arrow">→</span></a>
            <a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Due Date Calendar<span class="arrow">→</span></a>
            <a href="/tools/llp-compliance-checklist" class="sidebar-link">LLP Compliance Checklist<span class="arrow">→</span></a>
            <a href="/tools/dir-3-kyc-reminder" class="sidebar-link">DIR-3 KYC Reminder<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements<span class="arrow">→</span></a>
            <a href="/blog/what-is-a-small-company-under-the-companies-act-2013" class="sidebar-link">Small Company Definition<span class="arrow">→</span></a>
            <a href="/blog/loan-to-directors-rules-under-companies-act-2013" class="sidebar-link">Loans to Directors — Sec 185<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

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

    // ===== PROCESS MASTER DATA =====
    const PROCESSES = {
        p2p: {
            tag: 'P2P', name: 'Procure-to-Pay (P2P)',
            accounts: 'Trade Payables, Purchases, Inventory, Operating Expenses, Cash/Bank, GST Input',
            risks: ['Unauthorised purchases', 'Ghost vendors and fictitious invoices', 'Duplicate or split payments to evade DOA', 'Overstatement of expenses', 'Incorrect GST input credit claim', 'Cut-off errors at year-end'],
            controls: [
                {desc: 'Vendor master maintenance with segregation of duties (creator vs approver)', method: 'Inspection + Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Three-way match: PO + GRN + Vendor Invoice before payment', method: 'Reperformance', sample: '25-40 (daily)'},
                {desc: 'Purchase requisition approval per Delegation of Authority (DOA) matrix', method: 'Inspection', sample: '25-40 (daily)'},
                {desc: 'Payment authorisation with maker-checker per DOA limits', method: 'Inspection', sample: '25-40 (daily)'},
                {desc: 'Monthly vendor reconciliation (vendor SOA vs ledger)', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Aged payable analysis review by Finance Head', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'GSTR-2B vs purchase register reconciliation for ITC', method: 'Reperformance', sample: '2-5 (monthly)'}
            ]
        },
        o2c: {
            tag: 'O2C', name: 'Order-to-Cash (O2C)',
            accounts: 'Trade Receivables, Revenue, Cash/Bank, Provision for Doubtful Debts, GST Output',
            risks: ['Revenue cut-off manipulation', 'Fictitious sales / channel stuffing', 'Credit exposure beyond approved limits', 'Unauthorised write-offs', 'Pricing errors and unauthorised discounts'],
            controls: [
                {desc: 'Customer master with credit limit set per credit policy approval', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Sales order release subject to credit limit / advance receipt check', method: 'Reperformance', sample: '25-40 (daily)'},
                {desc: 'Invoice generation with automated price master pull (no manual override)', method: 'Reperformance', sample: '25-40 (daily)'},
                {desc: 'Bank reconciliation matching collections to invoices/customers', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Aged receivable review with collection action tracking', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Provision for doubtful debts policy applied consistently', method: 'Reperformance', sample: '1 (annual)'},
                {desc: 'Revenue cut-off testing — last 5 days of FY and first 5 days of new FY', method: 'Inspection + Reperformance', sample: '10-20 invoices either side'}
            ]
        },
        r2r: {
            tag: 'R2R', name: 'Record-to-Report (GL & Closing)',
            accounts: 'All P&L and Balance Sheet accounts via journal entries, Trial Balance, Financial Statements',
            risks: ['Manual journal entry override of system controls', 'Incorrect period close', 'Unsupported estimates and provisions', 'Inadequate review of financial statements', 'Inconsistent application of accounting policies'],
            controls: [
                {desc: 'Manual journal entry approval with maker-checker workflow', method: 'Inspection', sample: '25-40 (daily)'},
                {desc: 'Monthly balance sheet reconciliations (BSR) for all GL accounts', method: 'Inspection + Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Period-end close checklist signed off by Finance Controller', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Financial statement review by CFO with variance analysis', method: 'Inspection', sample: '2 (quarterly)'},
                {desc: 'Significant estimates supported by management memo', method: 'Inspection', sample: '1 (annual)'},
                {desc: 'Accounting policy consistency review at year-end', method: 'Inspection', sample: '1 (annual)'}
            ]
        },
        inv: {
            tag: 'INV', name: 'Inventory Management',
            accounts: 'Raw Material, WIP, Finished Goods, COGS, Provision for Obsolescence',
            risks: ['Theft and misappropriation', 'Incorrect valuation (cost vs NRV)', 'Cut-off errors at year-end', 'Slow-moving and obsolete inventory not provided for', 'Goods-in-transit treatment errors'],
            controls: [
                {desc: 'Goods Receipt Note (GRN) at warehouse with QC sign-off', method: 'Inspection', sample: '25-40 (daily)'},
                {desc: 'Annual physical verification with management certificate + perpetual cycle counts', method: 'Observation + Inspection', sample: '1 annual + 4 quarterly cycles'},
                {desc: 'Inventory movement document authorisation (issue notes, transfer notes)', method: 'Inspection', sample: '25-40 (daily)'},
                {desc: 'Costing method consistency (FIFO/Weighted Avg) and variance analysis', method: 'Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Slow-moving / obsolete review every quarter with provision update', method: 'Inspection + Reperformance', sample: '2 (quarterly)'},
                {desc: 'Year-end cut-off testing (last GRN/issue numbers)', method: 'Reperformance', sample: '10-20 documents either side'}
            ]
        },
        fa: {
            tag: 'FA', name: 'Fixed Assets / PPE',
            accounts: 'PPE, Capital Work-in-Progress, Accumulated Depreciation, Intangible Assets',
            risks: ['Capitalisation vs revenue expense misclassification', 'Incorrect depreciation calculation', 'Disposals / retirements not recorded', 'Impairment indicators ignored', 'Capex without authorisation'],
            controls: [
                {desc: 'Capex authorisation per DOA matrix (board for items above threshold)', method: 'Inspection', sample: '5-10 capex'},
                {desc: 'Capitalisation criteria checklist (capital vs revenue distinction)', method: 'Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Fixed asset register reconciliation with GL monthly', method: 'Inspection + Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Depreciation calculation per Schedule II / IT Act in mass run', method: 'Reperformance', sample: '2 (quarterly review)'},
                {desc: 'Annual physical verification of PPE with fixed asset tags', method: 'Observation', sample: '1 (annual)'},
                {desc: 'Impairment indicator review at year-end (Ind AS 36 / AS 28)', method: 'Inspection', sample: '1 (annual)'},
                {desc: 'Disposal authorisation with gain/loss computation', method: 'Inspection + Reperformance', sample: 'All disposals'}
            ]
        },
        pay: {
            tag: 'PAY', name: 'Payroll',
            accounts: 'Salary expense, PF/ESI/PT/Gratuity payable, TDS payable u/s 192',
            risks: ['Ghost employees on payroll', 'Incorrect salary calculations', 'Statutory dues remittance lapses', 'Unauthorised final settlements', 'Master data tampering'],
            controls: [
                {desc: 'New hire authorisation with appointment letter and HR onboarding', method: 'Inspection', sample: 'All new hires'},
                {desc: 'Payroll master data maintenance with segregation (HR vs Finance)', method: 'Inspection + Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Time and attendance review with biometric/leave records', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Payroll computation review by HR Head before disbursement', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Statutory remittance reconciliation (PF, ESI, TDS, PT) within due dates', method: 'Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Full and final settlement (FFS) authorisation with clearance form', method: 'Inspection', sample: 'All FFS cases'}
            ]
        },
        tre: {
            tag: 'TRE', name: 'Treasury & Cash Management',
            accounts: 'Cash, Bank balances, Short-term investments, Loans payable, FX gains/losses',
            risks: ['Cash misappropriation', 'Unauthorised investments or borrowings', 'FX exposure unmanaged', 'Liquidity shortfalls', 'Bank reconciliation errors'],
            controls: [
                {desc: 'Daily cash position review by Treasury Head', method: 'Inspection', sample: '25-40 (daily)'},
                {desc: 'Monthly bank reconciliation with all entries cleared', method: 'Inspection + Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Surprise cash count by Internal Audit (quarterly)', method: 'Observation', sample: '2 (quarterly)'},
                {desc: 'Investment authorisation per board-approved policy with limits', method: 'Inspection', sample: 'All investments'},
                {desc: 'FX hedging policy compliance with monthly position report', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Borrowing authorisation with board/shareholder approval per Sec 180', method: 'Inspection', sample: 'All new borrowings'}
            ]
        },
        dt: {
            tag: 'DT', name: 'Direct Tax (Income Tax)',
            accounts: 'Current Tax Provision, Deferred Tax, Tax Receivable/Payable, MAT Credit',
            risks: ['Underprovision of current tax', 'Missed advance tax instalments', 'Incorrect deferred tax computation', 'Non-compliance with TDS provisions', 'Pending tax notices not tracked'],
            controls: [
                {desc: 'Quarterly advance tax computation review by CFO before payment', method: 'Inspection + Reperformance', sample: '4 (quarterly)'},
                {desc: 'Monthly TDS compliance dashboard with payment and return status', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Tax provision reconciliation (current + deferred) at quarter-end', method: 'Reperformance', sample: '2 (quarterly)'},
                {desc: 'Deferred tax computation review by Tax Head with policy alignment', method: 'Reperformance', sample: '1 (annual)'},
                {desc: 'Tax notice tracking register with response status', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Annual tax return review by external tax consultant before filing', method: 'Inspection', sample: '1 (annual)'}
            ]
        },
        gst: {
            tag: 'GST', name: 'Indirect Tax (GST)',
            accounts: 'GST Output Liability, GST Input Credit (ITC), Cash Ledger, RCM Liability',
            risks: ['ITC mismatch with GSTR-2B', 'Late filing attracting interest and late fee', 'Wrong HSN classification and rate', 'RCM non-compliance', 'E-invoicing thresholds breached'],
            controls: [
                {desc: 'GSTR-1 vs sales register reconciliation before filing', method: 'Reperformance', sample: '2-5 (monthly)'},
                {desc: 'GSTR-3B vs GSTR-2B reconciliation for ITC eligibility', method: 'Reperformance', sample: '2-5 (monthly)'},
                {desc: 'Monthly GST return filing tracker (GSTR-1, 3B, 9, 9C)', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'ITC eligibility review (Sec 16, 17 ineligible categories)', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'RCM compliance review (notified services + import of services)', method: 'Inspection + Reperformance', sample: '2-5 (monthly)'},
                {desc: 'E-invoicing compliance for B2B (turnover above ₹5 cr threshold)', method: 'Inspection', sample: '25-40 (daily)'}
            ]
        },
        comp: {
            tag: 'COMP', name: 'Statutory Compliance',
            accounts: 'Provisions for known liabilities, Contingent liabilities (disclosed in notes)',
            risks: ['Penalties for missed compliances', 'Contingent liabilities not disclosed', 'Litigation exposure unmonitored', 'Industry-specific compliance lapses (FEMA, FSSAI, environment)'],
            controls: [
                {desc: 'Master compliance calendar (MCA, IT, GST, Labour, FEMA, industry-specific)', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Quarterly compliance report tabled at audit committee', method: 'Inspection', sample: '2 (quarterly)'},
                {desc: 'Penalty / late fee tracker with root cause analysis', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Contingent liability review at quarter-end with legal opinion', method: 'Inspection', sample: '2 (quarterly)'},
                {desc: 'Litigation database with status, exposure, and provision evaluation', method: 'Inspection', sample: '2 (quarterly)'}
            ]
        },
        rev: {
            tag: 'REV', name: 'Revenue Recognition (Ind AS 115)',
            accounts: 'Revenue, Trade Receivables, Deferred Revenue, Contract Assets, Contract Liabilities',
            risks: ['Incorrect contract identification', 'Incorrect performance obligation determination', 'Variable consideration misestimation', 'Principal vs agent error', 'Revenue cut-off manipulation'],
            controls: [
                {desc: 'Contract review per Ind AS 115 5-step model with management memo', method: 'Inspection + Reperformance', sample: 'All material contracts'},
                {desc: 'Performance obligation tracking system for percentage-of-completion', method: 'Inspection', sample: '2-5 (monthly)'},
                {desc: 'Variable consideration estimation with documented methodology', method: 'Inspection + Reperformance', sample: '1 (annual)'},
                {desc: 'Revenue cut-off testing 5 days either side of period-end', method: 'Reperformance', sample: '10-20 invoices'},
                {desc: 'Contract modification log with revenue restatement impact', method: 'Inspection', sample: 'All modifications'},
                {desc: 'Monthly revenue trend analysis with variance investigation', method: 'Inspection', sample: '2-5 (monthly)'}
            ]
        },
        itgc: {
            tag: 'ITGC', name: 'IT General Controls (ITGC)',
            accounts: 'All — pervasive impact across financial reporting',
            risks: ['Unauthorised system access', 'Data integrity loss from change failures', 'Backup and recovery failure', 'Inadequate segregation of duties (SoD) in ERP', 'Privileged access misuse'],
            controls: [
                {desc: 'User provisioning / deprovisioning workflow with HR trigger and IT approval', method: 'Inspection + Reperformance', sample: '25-40 (daily for joiners/leavers)'},
                {desc: 'Privileged access (admin, super-user) management with quarterly review', method: 'Inspection', sample: '2 (quarterly)'},
                {desc: 'Change management approval workflow (CAB, testing, production move)', method: 'Inspection', sample: 'All production changes'},
                {desc: 'Backup execution log review and quarterly restoration test', method: 'Observation + Inspection', sample: '2 quarterly + monthly logs'},
                {desc: 'Periodic user access reviews (quarterly) by business owners', method: 'Inspection', sample: '2 (quarterly)'},
                {desc: 'Segregation of duties (SoD) matrix maintained and tested in ERP', method: 'Reperformance', sample: '1 (annual)'},
                {desc: 'System Development Lifecycle (SDLC) compliance for new systems', method: 'Inspection', sample: 'All new system go-lives'}
            ]
        }
    };

    // ===== TOGGLE GROUP HELPER =====
    function setupToggleGroup(id, onChange) {
        const group = document.getElementById(id);
        if (!group) return;
        group.addEventListener('click', function(e) {
            const btn = e.target.closest('.toggle-btn');
            if (!btn || !group.contains(btn)) return;
            group.querySelectorAll('.toggle-btn').forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            btn.classList.add('active');
            btn.setAttribute('aria-selected', 'true');
            if (onChange) onChange();
        });
    }

    function getActiveValue(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    function updateConditionalFields() {
        const entity = getActiveValue('entityTypeGroup');
        document.getElementById('rowPvtThresholds').classList.toggle('show', entity === 'pvtltd');
        document.getElementById('rowDefault').classList.toggle('show', entity === 'pvtltd');
    }

    setupToggleGroup('entityTypeGroup', updateConditionalFields);
    setupToggleGroup('defaultGroup');

    updateConditionalFields();

    // ===== PROCESS CHIP SELECTION =====
    document.querySelectorAll('.process-chip').forEach(function(chip) {
        chip.addEventListener('click', function() {
            chip.classList.toggle('selected');
        });
    });

    document.getElementById('btnSelectAll').addEventListener('click', function() {
        document.querySelectorAll('.process-chip').forEach(c => c.classList.add('selected'));
    });
    document.getElementById('btnSelectNone').addEventListener('click', function() {
        document.querySelectorAll('.process-chip').forEach(c => c.classList.remove('selected'));
    });
    document.getElementById('btnSelectCore').addEventListener('click', function() {
        const core = ['p2p', 'o2c', 'r2r', 'inv', 'fa', 'pay'];
        document.querySelectorAll('.process-chip').forEach(c => {
            c.classList.toggle('selected', core.indexOf(c.dataset.process) >= 0);
        });
    });

    function getSelectedProcesses() {
        const selected = [];
        document.querySelectorAll('.process-chip.selected').forEach(function(chip) {
            selected.push(chip.dataset.process);
        });
        return selected;
    }

    // ===== APPLICABILITY ENGINE =====
    function computeApplicability() {
        const entity = getActiveValue('entityTypeGroup');
        const turnover = parseFloat(document.getElementById('turnover').value) || 0;
        const borrowings = parseFloat(document.getElementById('borrowings').value) || 0;
        const inDefault = getActiveValue('defaultGroup') === 'yes';
        const selectedProcesses = getSelectedProcesses();

        let v = {
            entity: entity, turnover: turnover, borrowings: borrowings, inDefault: inDefault,
            selectedProcesses: selectedProcesses,
            verdictClass: '', label: '', headline: '', sub: '',
            advisory: '', advisoryClass: 'info',
            basis: '',
            summary: [],
            showChecklist: true
        };

        if (entity === 'listed' || entity === 'public') {
            v.verdictClass = 'applicable';
            v.label = 'Applicable';
            v.headline = (entity === 'listed' ? 'Listed company' : 'Public unlisted company') + ' — Sec 143(3)(i) IFC reporting mandatory';
            v.sub = 'No size-based exemption available; full IFC audit and reporting required.';
            v.advisory = '<strong>Full IFC audit required.</strong> The auditor must report on adequacy and operating effectiveness of Internal Financial Controls Over Financial Reporting (ICFR). Use the process-wise testing checklist below to plan walkthrough, design and operating effectiveness procedures.';
            v.advisoryClass = 'danger';
            v.basis = 'Section 143(3)(i), Companies Act, 2013 read with Rule 10A of Companies (Audit and Auditors) Rules, 2014. ICAI Guidance Note on Audit of Internal Financial Controls Over Financial Reporting (14 September 2015) governs methodology. MCA notification G.S.R. 583(E) dated 13 June 2017 exempts only certain private companies — not listed or unlisted public companies.';
            v.summary = [
                {label: 'Entity Type', value: entity === 'listed' ? 'Listed Co' : 'Public Unlisted Co'},
                {label: 'Sec 143(3)(i)', value: 'Mandatory'},
                {label: 'Processes Selected', value: selectedProcesses.length + ' of 12'}
            ];
            return v;
        }

        if (entity === 'opc' || entity === 'small') {
            v.verdictClass = 'governance';
            v.label = 'Auditor Reporting: Exempt | Governance: Applicable';
            v.headline = (entity === 'opc' ? 'OPC' : 'Small Company') + ' — Auditor IFC reporting exempt';
            v.sub = 'Sec 143(3)(i) auditor reporting waived; Board\'s Report disclosure under Rule 8(5)(viii) still required.';
            v.advisory = '<strong>Hybrid status.</strong> The statutory auditor is not required to report on IFC under Section 143(3)(i). However, Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014 requires the Board\'s Report to disclose adequacy of IFC with reference to financial statements. Internal Financial Controls remain a governance obligation under Section 134(5)(e). Use the checklist below for governance-grade documentation.';
            v.advisoryClass = 'warn';
            v.basis = 'MCA notification G.S.R. 583(E) dated 13 June 2017, paragraph (i): the proviso to Section 143(3)(i) shall not apply to a private company which is one-person company or small company. Rule 8(5)(viii) of Companies (Accounts) Rules, 2014 still requires Board\'s Report disclosure on IFC adequacy.';
            v.summary = [
                {label: 'Entity Type', value: entity === 'opc' ? 'OPC' : 'Small Company'},
                {label: 'Auditor Reporting', value: 'Exempt'},
                {label: 'Governance Disclosure', value: 'Required'}
            ];
            return v;
        }

        // Pvt Ltd path
        if (entity === 'pvtltd') {
            const turnoverExempt = turnover > 0 && turnover < 50;
            const borrowingsExempt = borrowings >= 0 && borrowings < 25;
            const eligibleForExemption = (turnoverExempt || borrowingsExempt);

            if (inDefault) {
                v.verdictClass = 'applicable';
                v.label = 'Applicable — Exemption Forfeited';
                v.headline = 'Pvt Ltd — Sec 143(3)(i) IFC reporting mandatory due to filing default';
                v.sub = 'Default in Sec 137 (FS) or Sec 92 (Annual Return) forfeits the size-based exemption.';
                v.advisory = '<strong>Exemption blocked by default.</strong> The MCA notification G.S.R. 583(E) explicitly conditions the private company exemption on no default in Section 137 or Section 92 filings. Once the default is rectified and a clean filing track record is restored, the exemption can be claimed in subsequent years.';
                v.advisoryClass = 'danger';
                v.basis = 'Proviso to Section 143(3)(i), Companies Act, 2013 read with G.S.R. 583(E) dated 13 June 2017: "Provided that the exemption shall be available only if the private company has not committed any default in filing financial statements under Section 137 or annual return under Section 92".';
                v.summary = [
                    {label: 'Entity Type', value: 'Private Limited'},
                    {label: 'Filing Status', value: 'In Default'},
                    {label: 'Sec 143(3)(i)', value: 'Mandatory'}
                ];
                return v;
            }

            if (eligibleForExemption) {
                v.verdictClass = 'governance';
                v.label = 'Auditor Reporting: Exempt | Governance: Applicable';
                v.headline = 'Pvt Ltd — Auditor IFC reporting exempt under G.S.R. 583(E)';
                let trigger = '';
                if (turnoverExempt) trigger = 'turnover < ₹50 cr';
                if (borrowingsExempt) trigger = (trigger ? trigger + ' AND ' : '') + 'borrowings < ₹25 cr';
                v.sub = 'Exemption triggered: ' + trigger + '. Board\'s Report disclosure still required.';
                v.advisory = '<strong>Hybrid status.</strong> The statutory auditor is not required to report on IFC under Section 143(3)(i). However, Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014 requires the Board\'s Report to disclose adequacy of IFC with reference to financial statements. Internal Financial Controls remain a governance obligation under Section 134(5)(e). The processes selected below can be used for governance-grade documentation.';
                v.advisoryClass = 'warn';
                v.basis = 'MCA notification G.S.R. 583(E) dated 13 June 2017, paragraph (ii): proviso to Section 143(3)(i) shall not apply to a private company which has turnover < ₹50 crore as per latest audited FS OR aggregate borrowings from banks/FIs/body corporates < ₹25 crore at any point during FY. Exemption available only if no default in Sec 137 or 92 filings.';
                v.summary = [
                    {label: 'Entity Type', value: 'Private Limited'},
                    {label: 'Turnover', value: '₹' + turnover + ' cr'},
                    {label: 'Borrowings', value: '₹' + borrowings + ' cr'},
                    {label: 'Auditor Reporting', value: 'Exempt'},
                    {label: 'Governance Disclosure', value: 'Required'},
                    {label: 'Trigger', value: trigger}
                ];
                return v;
            }

            // Pvt Ltd above thresholds
            v.verdictClass = 'applicable';
            v.label = 'Applicable';
            v.headline = 'Pvt Ltd — Sec 143(3)(i) IFC reporting mandatory';
            v.sub = 'Both thresholds breached (turnover ≥ ₹50 cr AND borrowings ≥ ₹25 cr).';
            v.advisory = '<strong>Full IFC audit required.</strong> The private company exemption requires meeting at least one threshold (turnover < ₹50 cr OR borrowings < ₹25 cr). Since both are breached, the auditor must report on IFC under Sec 143(3)(i). Use the process-wise testing checklist for audit planning.';
            v.advisoryClass = 'danger';
            v.basis = 'Section 143(3)(i), Companies Act, 2013. The exemption under G.S.R. 583(E) dated 13 June 2017 is unavailable because the private company exceeds both turnover (₹50 cr) and borrowings (₹25 cr) thresholds simultaneously.';
            v.summary = [
                {label: 'Entity Type', value: 'Private Limited'},
                {label: 'Turnover', value: '₹' + turnover + ' cr'},
                {label: 'Borrowings', value: '₹' + borrowings + ' cr'},
                {label: 'Sec 143(3)(i)', value: 'Mandatory'},
                {label: 'Processes Selected', value: selectedProcesses.length + ' of 12'}
            ];
            return v;
        }

        // Fallback
        v.verdictClass = 'governance';
        v.label = 'Review Required';
        v.headline = 'Please complete entity profile to determine applicability';
        v.sub = '';
        v.advisory = 'Select an entity type to run the applicability cascade.';
        v.advisoryClass = 'info';
        v.basis = '';
        v.showChecklist = false;
        return v;
    }

    // ===== GENERATE PROCESS OUTPUT =====
    function generateProcessOutput(v) {
        if (v.selectedProcesses.length === 0) {
            return '<div class="info-banner info" style="margin-top:18px;"><strong>No processes selected.</strong> Choose at least one process from the grid above to generate the testing checklist.</div>';
        }

        let html = '<h3 style="font-size:18px;color:var(--primary-dark);margin:24px 0 6px;">Process-wise Testing Checklist (' + v.selectedProcesses.length + ' processes)</h3>';
        html += '<p style="font-size:13px;color:var(--text-secondary);margin-bottom:14px;">Tap any process card to expand the significant accounts, key risks, controls, test methods and sample sizes. Use this as your audit planning template.</p>';

        v.selectedProcesses.forEach(function(pid) {
            const p = PROCESSES[pid];
            if (!p) return;
            html += '<div class="process-card">';
            html += '<div class="process-header" tabindex="0" role="button" aria-expanded="false">';
            html += '<div class="process-header-left">';
            html += '<span class="process-tag">' + p.tag + '</span>';
            html += '<span class="process-name">' + p.name + '</span>';
            html += '</div>';
            html += '<span class="process-meta">' + p.controls.length + ' key controls</span>';
            html += '<span class="process-toggle">+</span>';
            html += '</div>';
            html += '<div class="process-body">';
            html += '<h4>Significant FS Accounts</h4>';
            html += '<p>' + p.accounts + '</p>';
            html += '<h4>Key Risks of Material Misstatement</h4>';
            html += '<ul>';
            p.risks.forEach(function(r) { html += '<li>' + r + '</li>'; });
            html += '</ul>';
            html += '<h4>Key Controls &amp; Test Plan</h4>';
            html += '<table class="controls-table"><thead><tr><th>Key Control</th><th>Test Method</th><th>Sample Size</th></tr></thead><tbody>';
            p.controls.forEach(function(c, idx) {
                html += '<tr>';
                html += '<td><span class="ctrl-num">C' + (idx + 1) + '</span>' + c.desc + '</td>';
                html += '<td class="method">' + c.method + '</td>';
                html += '<td class="sample">' + c.sample + '</td>';
                html += '</tr>';
            });
            html += '</tbody></table>';
            html += '</div></div>';
        });

        return html;
    }

    // ===== RENDER =====
    function renderResult(v) {
        const card = document.getElementById('verdictCard');
        const label = document.getElementById('verdictLabel');
        const headline = document.getElementById('verdictHeadline');
        const sub = document.getElementById('verdictSub');
        const summaryGrid = document.getElementById('summaryGrid');
        const advisory = document.getElementById('advisoryBanner');
        const basisText = document.getElementById('basisText');
        const processOutput = document.getElementById('processOutput');

        card.className = 'verdict-card ' + v.verdictClass;
        label.textContent = v.label;
        headline.textContent = v.headline;
        sub.textContent = v.sub;

        summaryGrid.innerHTML = '';
        v.summary.forEach(function(s, idx) {
            const c = document.createElement('div');
            c.className = 'summary-card' + (idx === 0 ? ' highlight' : '');
            c.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            summaryGrid.appendChild(c);
        });

        advisory.className = 'info-banner ' + v.advisoryClass;
        advisory.innerHTML = v.advisory;
        basisText.innerHTML = v.basis;
        processOutput.innerHTML = v.showChecklist ? generateProcessOutput(v) : '';

        // Wire up process card toggles
        document.querySelectorAll('.process-header').forEach(function(h) {
            h.addEventListener('click', function() {
                h.parentElement.classList.toggle('open');
                h.setAttribute('aria-expanded', h.parentElement.classList.contains('open') ? 'true' : 'false');
            });
            h.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    h.click();
                }
            });
        });

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        setTimeout(function() {
            section.scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // ===== EVENT HANDLERS =====
    document.getElementById('btnGenerate').addEventListener('click', function() {
        const v = computeApplicability();
        renderResult(v);
    });

    document.getElementById('btnReset').addEventListener('click', function() {
        ['turnover', 'borrowings'].forEach(id => document.getElementById(id).value = '');
        ['entityTypeGroup', 'defaultGroup'].forEach(function(gid) {
            const g = document.getElementById(gid);
            if (!g) return;
            g.querySelectorAll('.toggle-btn').forEach(function(b, i) {
                b.classList.toggle('active', i === 0);
                b.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
            });
        });
        // Reset processes to default 6
        const defaultSelected = ['p2p', 'o2c', 'r2r', 'inv', 'fa', 'pay'];
        document.querySelectorAll('.process-chip').forEach(c => {
            c.classList.toggle('selected', defaultSelected.indexOf(c.dataset.process) >= 0);
        });
        document.getElementById('resultSection').classList.remove('visible');
        updateConditionalFields();
    });

    // Enter key support
    document.querySelectorAll('input[type="number"]').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnGenerate').click();
            }
        });
    });

    // FAQ accordion
    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    // TOC active link
    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) {
            if (s.offsetTop <= scrollPos) active = s.id;
        });
        tocLinks.forEach(function(l) {
            l.classList.toggle('active', l.getAttribute('href') === '#' + active);
        });
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
