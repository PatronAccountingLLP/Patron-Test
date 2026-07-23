@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>CARO 2020 Checklist Generator | 21-Clause Audit Report</title>
    <meta name="description" content="CARO 2020 checklist generator: instant applicability plus the clause-wise auditor reporting checklist for Pvt Ltd, Public & Foreign Cos. Free CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/caro-2020-checklist-generator/">
    <meta property="og:title" content="CARO 2020 Clause-wise Checklist Generator — FY 2025-26">
    <meta property="og:description" content="Check CARO 2020 applicability for your company & generate the 21-clause auditor reporting checklist instantly. Standalone & consolidated covered.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/caro-2020-checklist-generator">
    <meta property="og:image" content="/tools/og/caro-2020-checklist-generator.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CARO 2020 Clause-wise Checklist Generator — FY 2025-26">
    <meta name="twitter:description" content="Instant CARO 2020 applicability + 21-clause auditor reporting checklist. Pvt Ltd, Public, Foreign Cos. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/caro-2020-checklist-generator.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "CARO 2020 Clause-wise Checklist Generator",
      "description": "CARO 2020 Clause-wise Checklist Generator is a decision-tree tool that determines whether the Companies (Auditor's Report) Order, 2020 applies to a company under Section 143(11) of the Companies Act, 2013, and generates the 21-clause auditor reporting checklist with statutory references, documents required and conditional clauses (Nidhi, NBFC/CIC, CSR, IPO/FPO, Consolidated FS). The tool evaluates entity type (Private Limited, Public Limited, OPC, Section 8, Banking, Insurance, Foreign Company, LLP), Small Company test under Section 2(85), Private Limited specific exemption thresholds (paid-up capital plus reserves and surplus ₹1 crore, total borrowings ₹1 crore, total revenue ₹10 crore) and consolidated financial statement carve-out for Clause (xxi).",
      "url": "/tools/caro-2020-checklist-generator",
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
        {"@type": "ListItem", "position": 3, "name": "CARO 2020 Checklist Generator", "item": "/tools/caro-2020-checklist-generator"}
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
          "name": "What is CARO 2020 and which Act notifies it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 is the Companies (Auditor's Report) Order, 2020, notified by the Ministry of Corporate Affairs vide S.O. 849(E) dated 25 February 2020 under Section 143(11) of the Companies Act, 2013. It supersedes CARO 2016 and is effective for statutory audits of financial years commencing on or after 1 April 2021. The Order requires the statutory auditor to report on 21 specified matters with 50 sub-clauses in the audit report."
          }
        },
        {
          "@type": "Question",
          "name": "Which companies are exempt from CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 does not apply to a banking company, an insurance company, a Section 8 company, a One Person Company, a Small Company under Section 2(85), and a Private Limited Company that meets all three thresholds: paid-up capital plus reserves and surplus up to ₹1 crore on balance sheet date, total borrowings up to ₹1 crore from banks or financial institutions any time during the financial year, and total revenue up to ₹10 crore as per Schedule III."
          }
        },
        {
          "@type": "Question",
          "name": "Does CARO 2020 apply to LLPs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. CARO 2020 is issued under Section 143(11) of the Companies Act, 2013 and applies only to companies registered under that Act, including foreign companies under Section 2(42). Limited Liability Partnerships are governed by the LLP Act, 2008 and are outside the scope of CARO. Partnership firms, sole proprietorships, HUFs and trusts are also outside CARO 2020 since they are not companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Small Company under the Companies Act 2013?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 2(85) of the Companies Act, 2013 read with the Companies (Specification of Definitions Details) Amendment Rules, 2022, a Small Company is a private company (other than a holding or subsidiary of a public company, a Section 8 company or a body corporate notified under Section 462) with paid-up share capital not exceeding ₹4 crore and turnover not exceeding ₹40 crore as per the latest profit and loss account."
          }
        },
        {
          "@type": "Question",
          "name": "How many clauses are there in CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 contains 21 clauses with 50 sub-clauses, compared to 16 clauses in CARO 2016. Seven new clauses were inserted, several existing clauses were redrafted and the clause on managerial remuneration was removed since it is now covered separately in the audit report. The new reporting topics include intangible assets, benami property, undisclosed income surrendered to the Income Tax Department, internal audit, cash losses, auditor resignation, going concern and consolidated CARO."
          }
        },
        {
          "@type": "Question",
          "name": "From which financial year is CARO 2020 effective?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 was originally to apply from FY 2019-20. It was deferred to FY 2020-21 by MCA order dated 24 March 2020 and further deferred to FY 2021-22 by order dated 17 December 2020 due to COVID-19 disruption. Therefore, CARO 2020 applies to all statutory audit reports for financial years commencing on or after 1 April 2021, including FY 2025-26 audits being signed in 2026."
          }
        },
        {
          "@type": "Question",
          "name": "Does CARO 2020 apply to consolidated financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 does not apply to the auditor's report on consolidated financial statements except for Clause 3(xxi). Under Clause (xxi), the parent auditor must report any qualifications or adverse remarks made by component auditors in their respective standalone CARO reports, along with the names of those companies and the specific paragraph numbers of the CARO report containing such remarks."
          }
        },
        {
          "@type": "Question",
          "name": "Is CARO 2020 applicable to foreign companies in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. CARO 2020 applies to foreign companies as defined under Section 2(42) of the Companies Act, 2013, namely a company or body corporate incorporated outside India that has a place of business in India and conducts any business activity in India. The Order does not provide any size-based exemption for foreign companies, so the auditor of an Indian branch or project office of a foreign company must comply with all 21 clauses to the extent applicable."
          }
        },
        {
          "@type": "Question",
          "name": "What are the new clauses introduced in CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 introduced reporting on intangible asset records, benami property proceedings, working capital limits over ₹5 crore from banks reconciled with quarterly returns, undisclosed income surrendered in income-tax search or survey, willful defaulter status, internal audit system adequacy, cash losses in current and previous year, statutory auditor resignation, financial ratios for going concern assessment, CSR unspent transfer compliance and consolidated CARO reporting under Clause (xxi)."
          }
        },
        {
          "@type": "Question",
          "name": "Which clauses are conditional in CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Several CARO 2020 clauses are conditional. Clause (vi) on cost records applies only if the Central Government has prescribed maintenance under Section 148(1). Clause (x) applies only if the company raised IPO, FPO or preferential allotment funds. Clause (xii) applies only to Nidhi companies. Clause (xvi) applies only to NBFCs, HFCs and CICs. Clause (xx) applies only if Section 135 CSR is triggered. Clause (xxi) applies only to consolidated financial statements."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if a company is a holding or subsidiary of a public company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If a private limited company is a holding company or subsidiary of a public company, it cannot claim the Private Limited specific exemption under CARO 2020 even if its paid-up capital, borrowings and revenue are within the ₹1 crore, ₹1 crore and ₹10 crore thresholds. Such a private company is also disqualified from being a Small Company under Section 2(85), so CARO 2020 will apply in full unless another entity-based exemption is available."
          }
        },
        {
          "@type": "Question",
          "name": "Does CARO 2020 apply to branches of a company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. CARO 2020 applies to the audit of branches of a company because under Section 143(8) of the Companies Act, 2013, a branch auditor has the same duties as the company auditor in respect of the branch. The branch auditor must report on the matters specified in CARO 2020 to the extent they are applicable to the branch operations, and the principal company auditor consolidates these into the main CARO report."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for non-reporting under CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 itself does not prescribe a separate penalty, but failure to report or false reporting attracts consequences under Section 143(15) of the Companies Act, 2013, and professional misconduct proceedings under the Chartered Accountants Act, 1949 before the Disciplinary Committee of ICAI. The National Financial Reporting Authority can also take action against the auditor under Section 132. Penalties can include monetary fines, debarment and removal from the auditor panel."
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
        .verdict-card.consol { background: linear-gradient(135deg, #FFF7ED 0%, #FED7AA 100%); border-left-color: var(--accent); }
        .verdict-card.exempt { background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); border-left-color: var(--success); }
        .verdict-card.notapplicable { background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-left-color: var(--info); }
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
        .clause-list { display: flex; flex-direction: column; gap: 10px; margin-top: 8px; }
        .clause-item { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); overflow: hidden; transition: box-shadow 0.2s; }
        .clause-item:hover { box-shadow: var(--shadow-sm); }
        .clause-item.na { opacity: 0.55; }
        .clause-item.conditional { border-left: 3px solid var(--accent); }
        .clause-item.applies { border-left: 3px solid var(--success); }
        .clause-item.na { border-left: 3px solid var(--text-muted); }
        .clause-header { display: flex; justify-content: space-between; align-items: flex-start; padding: 14px 18px; gap: 12px; cursor: pointer; -webkit-tap-highlight-color: transparent; user-select: none; }
        .clause-header * { pointer-events: none; }
        .clause-num { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--primary); background: var(--surface-alt); padding: 4px 10px; border-radius: 6px; letter-spacing: 0.5px; flex-shrink: 0; }
        .clause-title { font-size: 14px; font-weight: 600; color: var(--text); flex: 1; line-height: 1.45; }
        .clause-status { font-family: var(--font-mono); font-size: 10px; font-weight: 700; padding: 4px 9px; border-radius: 4px; text-transform: uppercase; letter-spacing: 0.5px; flex-shrink: 0; }
        .clause-status.applies { background: #D1FAE5; color: #065F46; }
        .clause-status.conditional { background: #FEF3C7; color: #92400E; }
        .clause-status.na { background: var(--surface-alt); color: var(--text-muted); }
        .clause-toggle { color: var(--text-muted); flex-shrink: 0; font-size: 18px; line-height: 1; transition: transform 0.25s; padding-left: 4px; }
        .clause-item.open .clause-toggle { transform: rotate(45deg); }
        .clause-body { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; padding: 0 18px; }
        .clause-item.open .clause-body { max-height: 1500px; padding: 0 18px 16px; }
        .clause-body h4 { font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin: 12px 0 6px; font-family: var(--font-mono); }
        .clause-body p { font-size: 13px; color: var(--text-secondary); line-height: 1.7; margin-bottom: 8px; }
        .clause-body ul { margin: 4px 0 8px 18px; }
        .clause-body li { font-size: 13px; color: var(--text-secondary); padding: 3px 0; line-height: 1.6; }
        .clause-body .stat-ref { font-family: var(--font-mono); font-size: 11px; color: var(--primary); background: var(--surface); padding: 2px 6px; border-radius: 4px; font-weight: 600; }
        .clause-body .conditional-note { background: #FEF3C7; border-left: 3px solid var(--accent); padding: 10px 12px; border-radius: 0 8px 8px 0; font-size: 12px; color: #78350F; margin: 8px 0; }
        .clause-actions { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 18px; }
        .clause-btn { padding: 8px 14px; font-size: 12px; font-weight: 600; border-radius: 8px; cursor: pointer; transition: all 0.2s; border: 1px solid var(--border); background: var(--card); color: var(--primary); font-family: var(--font-body); }
        .clause-btn:hover { background: var(--surface-alt); }
        .clause-btn.expand-all { background: var(--primary); color: #fff; border-color: var(--primary); }
        .clause-btn.expand-all:hover { background: var(--primary-light); border-color: var(--primary-light); }
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
            .clause-num { font-size: 11px; padding: 3px 8px; }
            .clause-title { font-size: 13px; }
            .clause-status { font-size: 9px; padding: 3px 7px; }
        }
    </style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#checker">Checklist</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#applicability">Applicability</a>
        <a href="#clauses-overview">21 Clauses</a>
        <a href="#mistakes">Common Mistakes</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    CARO 2020 Checklist Generator
</nav>

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 7 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>CARO 2020 Clause-wise <span>Checklist Generator</span></h1>
</header>

<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>CARO 2020 — the Companies (Auditor's Report) Order, 2020 notified by MCA on 25 February 2020 — applies to all statutory audits of companies for FY commencing on or after 1 April 2021, with 21 clauses and 50 sub-clauses to be reported. Banking, insurance, Section 8, OPC, Small Companies and certain Pvt Ltd companies are exempt. This tool checks applicability for your entity and generates the clause-wise auditor reporting checklist with statutory references and document requirements.</p>
</aside>

<main class="main-layout">
    <div class="content-col">

        <div class="calc-card" id="tool">
            <h2>Generate Your CARO 2020 Checklist</h2>
            <p class="calc-intro">Answer the questions below to check if CARO 2020 applies to your company and generate the 21-clause auditor reporting checklist customised to your entity profile.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to run this checklist generator. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">Entity Profile</div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Entity Type</label>
                <div class="toggle-group" id="entityTypeGroup" role="tablist" aria-label="Entity type">
                    <button type="button" class="toggle-btn active" data-value="pvtltd" role="tab" aria-selected="true">Pvt Ltd</button>
                    <button type="button" class="toggle-btn" data-value="public" role="tab" aria-selected="false">Public Ltd</button>
                    <button type="button" class="toggle-btn" data-value="opc" role="tab" aria-selected="false">OPC</button>
                    <button type="button" class="toggle-btn" data-value="sec8" role="tab" aria-selected="false">Section 8</button>
                    <button type="button" class="toggle-btn" data-value="banking" role="tab" aria-selected="false">Banking</button>
                    <button type="button" class="toggle-btn" data-value="insurance" role="tab" aria-selected="false">Insurance</button>
                    <button type="button" class="toggle-btn" data-value="foreign" role="tab" aria-selected="false">Foreign Co</button>
                    <button type="button" class="toggle-btn" data-value="llp" role="tab" aria-selected="false">LLP / Other</button>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Financial Statement Type</label>
                <div class="toggle-group stacked-mobile" id="fsTypeGroup" role="tablist" aria-label="FS type">
                    <button type="button" class="toggle-btn active" data-value="standalone" role="tab" aria-selected="true">Standalone FS</button>
                    <button type="button" class="toggle-btn" data-value="consol" role="tab" aria-selected="false">Consolidated FS</button>
                </div>
            </div>

            <div class="form-group conditional-row show" id="rowGroupStatus" style="margin-bottom:20px;">
                <label>Is this company a holding or subsidiary of a public company?</label>
                <div class="toggle-group stacked-mobile" id="groupStatusGroup" role="tablist">
                    <button type="button" class="toggle-btn active" data-value="no" role="tab" aria-selected="true">No</button>
                    <button type="button" class="toggle-btn" data-value="yes" role="tab" aria-selected="false">Yes — holding/subsidiary of a public company</button>
                </div>
                <span class="helper">Disqualifies the Pvt Ltd specific exemption and the Small Company exemption.</span>
            </div>

            <div class="calc-section-title" id="financialThresholds">Financial Thresholds <span style="color:var(--text-muted);font-weight:400;text-transform:none;letter-spacing:0;">(₹ in crore)</span></div>

            <div class="calc-row conditional-row show" id="rowSmallCo">
                <div class="form-group">
                    <label for="paidUpCapital">Paid-up Share Capital</label>
                    <input type="number" id="paidUpCapital" min="0" step="0.01" placeholder="e.g. 2.5" inputmode="decimal">
                    <span class="helper">For Small Company test under Section 2(85) — threshold ₹4 crore.</span>
                </div>
                <div class="form-group">
                    <label for="turnover">Turnover (Latest P&L)</label>
                    <input type="number" id="turnover" min="0" step="0.01" placeholder="e.g. 30" inputmode="decimal">
                    <span class="helper">For Small Company test — threshold ₹40 crore.</span>
                </div>
            </div>

            <div class="calc-row conditional-row show" id="rowPvtTest">
                <div class="form-group">
                    <label for="pucPlusReserves">Paid-up Capital + Reserves & Surplus</label>
                    <input type="number" id="pucPlusReserves" min="0" step="0.01" placeholder="e.g. 0.8" inputmode="decimal">
                    <span class="helper">As on balance sheet date — Pvt Ltd test threshold ₹1 crore.</span>
                </div>
                <div class="form-group">
                    <label for="totalBorrowings">Total Borrowings (Banks/FIs)</label>
                    <input type="number" id="totalBorrowings" min="0" step="0.01" placeholder="e.g. 0.5" inputmode="decimal">
                    <span class="helper">Highest at any point during FY — threshold ₹1 crore.</span>
                </div>
            </div>

            <div class="calc-row conditional-row show" id="rowRevenue">
                <div class="form-group">
                    <label for="totalRevenue">Total Revenue (Schedule III)</label>
                    <input type="number" id="totalRevenue" min="0" step="0.01" placeholder="e.g. 8" inputmode="decimal">
                    <span class="helper">Including discontinuing operations — Pvt Ltd test threshold ₹10 crore.</span>
                </div>
                <div class="form-group" style="display:flex;align-items:flex-end;">
                    <span class="helper" style="font-style:italic;">All three Pvt Ltd thresholds must be met simultaneously to claim the exemption.</span>
                </div>
            </div>

            <div class="calc-section-title">Industry & Conditional Clause Triggers</div>

            <div class="form-group" style="margin-bottom:20px;">
                <label>Sector</label>
                <div class="toggle-group" id="sectorGroup" role="tablist">
                    <button type="button" class="toggle-btn active" data-value="standard" role="tab" aria-selected="true">Standard</button>
                    <button type="button" class="toggle-btn" data-value="nbfc" role="tab" aria-selected="false">NBFC / HFC / CIC</button>
                    <button type="button" class="toggle-btn" data-value="nidhi" role="tab" aria-selected="false">Nidhi</button>
                </div>
                <span class="helper">Triggers Clause (xvi) for NBFC/HFC/CIC and Clause (xii) for Nidhi.</span>
            </div>

            <div class="calc-row" style="margin-bottom:8px;">
                <div class="form-group">
                    <label>Listed on Stock Exchange?</label>
                    <div class="toggle-group stacked-mobile" id="listedGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="no" role="tab" aria-selected="true">No</button>
                        <button type="button" class="toggle-btn" data-value="yes" role="tab" aria-selected="false">Yes</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>CSR Applicable u/s 135?</label>
                    <div class="toggle-group stacked-mobile" id="csrGroup" role="tablist">
                        <button type="button" class="toggle-btn active" data-value="no" role="tab" aria-selected="true">No</button>
                        <button type="button" class="toggle-btn" data-value="yes" role="tab" aria-selected="false">Yes</button>
                    </div>
                    <span class="helper">Triggers Clause (xx) — CSR unspent transfer compliance.</span>
                </div>
            </div>

            <div class="form-group" style="margin-top:14px;">
                <label>Funds Raised in This FY?</label>
                <div class="toggle-group" id="fundsGroup" role="tablist">
                    <button type="button" class="toggle-btn active" data-value="none" role="tab" aria-selected="true">None</button>
                    <button type="button" class="toggle-btn" data-value="ipo" role="tab" aria-selected="false">IPO / FPO</button>
                    <button type="button" class="toggle-btn" data-value="pref" role="tab" aria-selected="false">Pref. Allotment / Private Placement</button>
                    <button type="button" class="toggle-btn" data-value="both" role="tab" aria-selected="false">Both</button>
                </div>
                <span class="helper">Triggers Clause (x) reporting on application of issue proceeds.</span>
            </div>

            <button type="button" class="btn-calculate" id="btnGenerate">Generate Checklist</button>
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

                <div id="checklistContainer"></div>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How This Tool Works</h2>
            <p>The checklist generator runs your entity profile through the four-step CARO 2020 applicability cascade laid down in Paragraph 1(2) of the Order, then maps the 21 reporting clauses of Paragraph 3 to your specific situation.</p>
            <h3>Step 1 — Entity Type Filter</h3>
            <p>CARO 2020 explicitly excludes banking companies, insurance companies, Section 8 companies and One Person Companies regardless of size. LLPs are outside scope altogether because they are governed by the Limited Liability Partnership Act, 2008 and not by the Companies Act, 2013.</p>
            <h3>Step 2 — Small Company Test</h3>
            <p>If the entity is a Private Limited or unlisted Public Limited company that is not a holding or subsidiary of a public company, the tool tests it against the Small Company definition under Section 2(85) of the Companies Act read with the 2022 amendment rules: paid-up capital not exceeding ₹4 crore and turnover not exceeding ₹40 crore.</p>
            <h3>Step 3 — Pvt Ltd Specific Exemption</h3>
            <p>For Private Limited companies that are not holding or subsidiary of a public company, the tool checks the three cumulative thresholds in Paragraph 1(2)(iv) of CARO 2020: paid-up capital plus reserves and surplus up to ₹1 crore, total borrowings up to ₹1 crore at any time during the year, and total revenue up to ₹10 crore. All three must be met for the exemption.</p>
            <h3>Step 4 — Consolidated FS Carve-out</h3>
            <p>If you select Consolidated Financial Statements, the tool returns only Clause (xxi) — the requirement to report qualifications or adverse remarks made by component auditors in their respective standalone CARO reports. All other clauses are not applicable to consolidated audit reports.</p>
            <h3>Step 5 — Conditional Clause Mapping</h3>
            <p>If CARO applies, the tool generates the full 21-clause checklist and then deactivates clauses that are not relevant to your entity: Clause (xii) only applies to Nidhi companies, Clause (xvi) to NBFCs, HFCs and CICs, Clause (xx) only when CSR under Section 135 is triggered, Clause (x) only when fund-raising occurred during the year, and Clause (vi) flags whether cost records under Section 148(1) are mandated for your industry.</p>
        </section>

        <section class="content-section" id="applicability">
            <h2>Applicability & Exemptions Decoded</h2>
            <p>CARO 2020 was issued under Section 143(11) of the Companies Act, 2013 and applies to every report made by an auditor under Section 143 on the accounts of every company including a foreign company as defined in Section 2(42). The applicability is to standalone financial statements; consolidated reporting is governed only by Clause (xxi).</p>

            <h3>Entities Categorically Exempt</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Entity Type</th><th>Statutory Basis</th><th>Reason</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Banking Company</strong></td><td>Section 5(c), Banking Regulation Act, 1949</td><td>Separate audit framework under <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a></td></tr>
                    <tr><td><strong>Insurance Company</strong></td><td>Section 2(7A), Insurance Act, 1938</td><td>Separate audit framework under <a href="https://www.irdai.gov.in/" target="_blank" rel="noopener">IRDAI</a></td></tr>
                    <tr><td><strong>Section 8 Company</strong></td><td>Section 8, Companies Act, 2013</td><td>Charitable purpose, not-for-profit</td></tr>
                    <tr><td><strong>One Person Company (OPC)</strong></td><td>Section 2(62), Companies Act, 2013</td><td>Single-shareholder simplified regime</td></tr>
                    <tr><td><strong>Small Company</strong></td><td>Section 2(85), Companies Act, 2013</td><td>Paid-up capital ≤ ₹4 cr AND turnover ≤ ₹40 cr</td></tr>
                </tbody>
            </table>

            <h3>Pvt Ltd Specific Exemption — All Three Cumulative</h3>
            <p>A private limited company that is not a holding or subsidiary of a public company can claim exemption from CARO 2020 only if it meets all three of the following conditions simultaneously, as per Paragraph 1(2)(iv) of the Order:</p>
            <ol>
                <li><strong>Paid-up capital plus reserves and surplus</strong> not more than ₹1 crore as on the balance sheet date</li>
                <li><strong>Total borrowings</strong> not exceeding ₹1 crore from any bank or financial institution at any point of time during the financial year</li>
                <li><strong>Total revenue</strong> as disclosed under Schedule III (including revenue from discontinuing operations) not exceeding ₹10 crore during the financial year</li>
            </ol>
            <div class="callout warn">
                <p><strong>Trap to avoid:</strong> The borrowings test is "at any point of time during the year", not just on the balance sheet date. A private company that touched ₹1.2 crore borrowings on 30 September and repaid by 31 March still fails the test.</p>
            </div>

            <h3>LLPs, Partnerships and Other Entities</h3>
            <p>CARO 2020 does not extend to Limited Liability Partnerships, partnership firms, sole proprietorships, Hindu Undivided Families or trusts, since these are not "companies" under the Companies Act, 2013. The auditor of these entities reports under different audit frameworks — the LLP Act, 2008 for LLPs and the Income-tax Act, 1961 (Section 44AB) for tax audits of other forms.</p>

            <p>For the original notification, see the <a href="https://www.mca.gov.in/Ministry/pdf/Order_25022020.pdf" target="_blank" rel="noopener">MCA Order S.O. 849(E) dated 25 February 2020</a> and the subsequent deferral orders. The complete <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013 text</a> is available on India Code.</p>
        </section>

        <section class="content-section" id="clauses-overview">
            <h2>The 21 Clauses: A Complete Map</h2>
            <p>Paragraph 3 of CARO 2020 contains 21 clauses with 50 sub-clauses covering property, plant and equipment, inventory, loans, statutory dues, fraud, related parties, internal audit, going concern, CSR and consolidated reporting. Below is a topic-wise map of what each clause requires the auditor to report.</p>

            <table class="rate-table">
                <thead>
                    <tr><th style="width:80px;">Clause</th><th>Topic</th><th>Conditional?</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>3(i)</strong></td><td>Property, Plant & Equipment + Intangible Assets (records, physical verification, title deeds, revaluation, benami)</td><td>No</td></tr>
                    <tr><td><strong>3(ii)</strong></td><td>Inventory verification + Working capital limits over ₹5 crore reconciled with quarterly returns</td><td>No</td></tr>
                    <tr><td><strong>3(iii)</strong></td><td>Loans, advances, investments, guarantees, security</td><td>No</td></tr>
                    <tr><td><strong>3(iv)</strong></td><td>Compliance with Sec 185 and Sec 186 (loans to directors, investments)</td><td>No</td></tr>
                    <tr><td><strong>3(v)</strong></td><td>Public deposits and deemed deposits (Sec 73 to 76)</td><td>No</td></tr>
                    <tr><td><strong>3(vi)</strong></td><td>Maintenance of cost records under Section 148(1)</td><td>Industry-specific</td></tr>
                    <tr><td><strong>3(vii)</strong></td><td>Statutory dues — regularity of payment + disputed amounts</td><td>No</td></tr>
                    <tr><td><strong>3(viii)</strong></td><td>Income surrendered or disclosed in Income Tax search/survey</td><td>If applicable</td></tr>
                    <tr><td><strong>3(ix)</strong></td><td>Default in repayment of loans, willful defaulter, end-use of funds</td><td>If borrower</td></tr>
                    <tr><td><strong>3(x)</strong></td><td>IPO, FPO, preferential allotment, private placement compliance</td><td>If raised funds</td></tr>
                    <tr><td><strong>3(xi)</strong></td><td>Fraud — by or on the company, ADT-4, whistleblower complaints</td><td>No</td></tr>
                    <tr><td><strong>3(xii)</strong></td><td>Nidhi-specific compliance (Net Owned Funds, deposits)</td><td>Nidhi only</td></tr>
                    <tr><td><strong>3(xiii)</strong></td><td>Related party transactions — Sec 177 audit committee + Sec 188</td><td>No</td></tr>
                    <tr><td><strong>3(xiv)</strong></td><td>Internal audit system adequacy + reports considered</td><td>No</td></tr>
                    <tr><td><strong>3(xv)</strong></td><td>Non-cash transactions with directors (Sec 192)</td><td>No</td></tr>
                    <tr><td><strong>3(xvi)</strong></td><td>NBFC / HFC / CIC registration with RBI under Sec 45-IA</td><td>NBFC only</td></tr>
                    <tr><td><strong>3(xvii)</strong></td><td>Cash losses in current and immediately preceding FY</td><td>No</td></tr>
                    <tr><td><strong>3(xviii)</strong></td><td>Statutory auditor resignation — issues raised by outgoing auditor</td><td>If resigned</td></tr>
                    <tr><td><strong>3(xix)</strong></td><td>Material uncertainty on going concern — financial ratios, ageing</td><td>No</td></tr>
                    <tr><td><strong>3(xx)</strong></td><td>CSR unspent transfer to specified fund and special account</td><td>If Sec 135 applies</td></tr>
                    <tr><td><strong>3(xxi)</strong></td><td>Consolidated CARO — qualifications/adverse remarks of component auditors</td><td>Consol FS only</td></tr>
                </tbody>
            </table>

            <p>The Institute of Chartered Accountants of India has published a <a href="https://resource.cdn.icai.org/68213aasb55054.pdf" target="_blank" rel="noopener">Guidance Note on CARO 2020</a> with an illustrative checklist (Appendix V) and clause-by-clause comparison with CARO 2016 (Appendix II). The <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a> Auditing and Assurance Standards Board updates this Guidance Note periodically with FAQs.</p>
        </section>

        <div class="body-cta">
            <h3>Need a CA Firm to Sign Your Statutory Audit?</h3>
            <p>Patron Accounting LLP delivers CARO 2020-compliant statutory audit reports for Pvt Ltd, Public Ltd and foreign companies — with documented working papers, ICAI Guidance Note alignment and NFRA-grade quality control.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20CARO%202020%20Checklist%20Generator.%20I%20need%20help%20with%20statutory%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">Talk to a CA on WhatsApp</a>
        </div>

        <section class="content-section" id="mistakes">
            <h2>Common Mistakes Auditors and Companies Make</h2>
            <p>The Quality Review Board of ICAI and the National Financial Reporting Authority have flagged several recurring CARO 2020 reporting deficiencies in their inspection reports. Avoiding these protects both the auditor and the company.</p>

            <h3>1. Treating "At Any Point" as "At Year-End"</h3>
            <p>For both the Pvt Ltd specific exemption (₹1 crore borrowings test) and Clause 3(ii)(b) on working capital limits over ₹5 crore, the threshold check is at any point during the financial year, not just the balance sheet date. Companies that temporarily breach the limit mid-year still trigger the reporting obligation.</p>

            <h3>2. Missing the Working Capital Quarterly Return Reconciliation</h3>
            <p>Clause 3(ii)(b) requires the auditor to verify that quarterly returns or statements filed with banks or financial institutions for working capital limits over ₹5 crore agree with the books of account. Mismatches must be reported with details. This is one of the most frequently missed reporting items in first-year CARO 2020 audits.</p>

            <h3>3. Ignoring Title Deed Format Specified in Clause 3(i)(c)</h3>
            <p>Clause 3(i)(c) requires reporting on title deeds of immovable property in a specified tabular format with description, gross carrying value, holder name, period held, related-party status and reason for non-holding. A narrative comment is not compliant — the format is mandatory.</p>

            <h3>4. Confusing Consolidated and Standalone Reporting</h3>
            <p>CARO 2020 applies only to standalone financial statements except for Clause (xxi). Auditors sometimes incorrectly include the full 21-clause report in consolidated audit reports, or omit the Clause (xxi) reporting in consolidated reports altogether. Both are deviations from Paragraph 2 of the Order.</p>

            <h3>5. Skipping Going Concern Ratio Disclosure</h3>
            <p>Clause 3(xix) requires the auditor to consider key financial ratios, ageing and expected dates of realisation of financial assets and payment of financial liabilities, and to confirm that no material uncertainty exists on the company meeting its liabilities for one year from the balance sheet date. Generic going concern statements without ratio analysis are inadequate.</p>

            <h3>6. Overlooking Auditor Resignation Disclosure</h3>
            <p>Under Clause 3(xviii), if the statutory auditors resigned during the year, the incoming auditor must report whether the issues, objections or concerns raised by the outgoing auditors were considered. ICAI Code of Ethics also requires the incoming auditor to communicate with the outgoing auditor before accepting the engagement.</p>

            <p>The <a href="https://www.nfra.gov.in/" target="_blank" rel="noopener">NFRA inspection reports</a> and ICAI Quality Review Board publications regularly highlight these deficiencies. Reviewing them before each CARO sign-off is a practical safeguard.</p>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is CARO 2020 and which Act notifies it?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 is the Companies (Auditor's Report) Order, 2020, notified by the Ministry of Corporate Affairs vide S.O. 849(E) dated 25 February 2020 under Section 143(11) of the Companies Act, 2013. It supersedes CARO 2016 and is effective for statutory audits of financial years commencing on or after 1 April 2021. The Order requires the statutory auditor to report on 21 specified matters with 50 sub-clauses in the audit report.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which companies are exempt from CARO 2020?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 does not apply to a banking company, an insurance company, a Section 8 company, a One Person Company, a Small Company under Section 2(85), and a Private Limited Company that meets all three thresholds: paid-up capital plus reserves and surplus up to ₹1 crore on balance sheet date, total borrowings up to ₹1 crore from banks or financial institutions any time during the financial year, and total revenue up to ₹10 crore as per Schedule III.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does CARO 2020 apply to LLPs?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">No. CARO 2020 is issued under Section 143(11) of the Companies Act, 2013 and applies only to companies registered under that Act, including foreign companies under Section 2(42). Limited Liability Partnerships are governed by the LLP Act, 2008 and are outside the scope of CARO. Partnership firms, sole proprietorships, HUFs and trusts are also outside CARO 2020 since they are not companies.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is a Small Company under the Companies Act 2013?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Under Section 2(85) of the Companies Act, 2013 read with the Companies (Specification of Definitions Details) Amendment Rules, 2022, a Small Company is a private company (other than a holding or subsidiary of a public company, a Section 8 company or a body corporate notified under Section 462) with paid-up share capital not exceeding ₹4 crore and turnover not exceeding ₹40 crore as per the latest profit and loss account.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">How many clauses are there in CARO 2020?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 contains 21 clauses with 50 sub-clauses, compared to 16 clauses in CARO 2016. Seven new clauses were inserted, several existing clauses were redrafted and the clause on managerial remuneration was removed since it is now covered separately in the audit report. The new reporting topics include intangible assets, benami property, undisclosed income surrendered to the Income Tax Department, internal audit, cash losses, auditor resignation, going concern and consolidated CARO.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">From which financial year is CARO 2020 effective?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 was originally to apply from FY 2019-20. It was deferred to FY 2020-21 by MCA order dated 24 March 2020 and further deferred to FY 2021-22 by order dated 17 December 2020 due to COVID-19 disruption. Therefore, CARO 2020 applies to all statutory audit reports for financial years commencing on or after 1 April 2021, including FY 2025-26 audits being signed in 2026.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does CARO 2020 apply to consolidated financial statements?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 does not apply to the auditor's report on consolidated financial statements except for Clause 3(xxi). Under Clause (xxi), the parent auditor must report any qualifications or adverse remarks made by component auditors in their respective standalone CARO reports, along with the names of those companies and the specific paragraph numbers of the CARO report containing such remarks.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Is CARO 2020 applicable to foreign companies in India?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. CARO 2020 applies to foreign companies as defined under Section 2(42) of the Companies Act, 2013, namely a company or body corporate incorporated outside India that has a place of business in India and conducts any business activity in India. The Order does not provide any size-based exemption for foreign companies, so the auditor of an Indian branch or project office of a foreign company must comply with all 21 clauses to the extent applicable.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What are the new clauses introduced in CARO 2020?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 introduced reporting on intangible asset records, benami property proceedings, working capital limits over ₹5 crore from banks reconciled with quarterly returns, undisclosed income surrendered in income-tax search or survey, willful defaulter status, internal audit system adequacy, cash losses in current and previous year, statutory auditor resignation, financial ratios for going concern assessment, CSR unspent transfer compliance and consolidated CARO reporting under Clause (xxi).</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Which clauses are conditional in CARO 2020?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Several CARO 2020 clauses are conditional. Clause (vi) on cost records applies only if the Central Government has prescribed maintenance under Section 148(1). Clause (x) applies only if the company raised IPO, FPO or preferential allotment funds. Clause (xii) applies only to Nidhi companies. Clause (xvi) applies only to NBFCs, HFCs and CICs. Clause (xx) applies only if Section 135 CSR is triggered. Clause (xxi) applies only to consolidated financial statements.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What happens if a company is a holding or subsidiary of a public company?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">If a private limited company is a holding company or subsidiary of a public company, it cannot claim the Private Limited specific exemption under CARO 2020 even if its paid-up capital, borrowings and revenue are within the ₹1 crore, ₹1 crore and ₹10 crore thresholds. Such a private company is also disqualified from being a Small Company under Section 2(85), so CARO 2020 will apply in full unless another entity-based exemption is available.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">Does CARO 2020 apply to branches of a company?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. CARO 2020 applies to the audit of branches of a company because under Section 143(8) of the Companies Act, 2013, a branch auditor has the same duties as the company auditor in respect of the branch. The branch auditor must report on the matters specified in CARO 2020 to the extent they are applicable to the branch operations, and the principal company auditor consolidates these into the main CARO report.</div></div>
            </div>

            <div class="faq-item">
                <button type="button" class="faq-question" aria-expanded="false">What is the penalty for non-reporting under CARO 2020?<span class="faq-icon">+</span></button>
                <div class="faq-answer"><div class="faq-answer-inner">CARO 2020 itself does not prescribe a separate penalty, but failure to report or false reporting attracts consequences under Section 143(15) of the Companies Act, 2013, and professional misconduct proceedings under the Chartered Accountants Act, 1949 before the Disciplinary Committee of ICAI. The National Financial Reporting Authority can also take action against the auditor under Section 132. Penalties can include monetary fines, debarment and removal from the auditor panel.</div></div>
            </div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Need CARO 2020 Compliant Audit?</h3>
            <p>Get your statutory audit signed by a Chartered Accountant — full clause-wise CARO 2020 working papers, NFRA-grade documentation, fixed-fee engagement.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20CARO%202020%20Checklist%20Generator.%20I%20need%20help%20with%20statutory%20audit.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="cta-btn">WhatsApp a CA</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit<span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit<span class="arrow">→</span></a>
            <a href="/tax-audit" class="sidebar-link">Tax Audit<span class="arrow">→</span></a>
            <a href="/secretarial-audit" class="sidebar-link">Secretarial Audit<span class="arrow">→</span></a>
            <a href="/appointment-of-auditor" class="sidebar-link">Appointment of Auditor<span class="arrow">→</span></a>
            <a href="/change-of-auditor" class="sidebar-link">Change of Auditor<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/ind-as-applicability-checker" class="sidebar-link">Ind AS Applicability Checker<span class="arrow">→</span></a>
            <a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Due Date Calendar<span class="arrow">→</span></a>
            <a href="/tools/business-structure-comparison" class="sidebar-link">Business Structure Comparison<span class="arrow">→</span></a>
            <a href="/tools/llp-compliance-checklist" class="sidebar-link">LLP Compliance Checklist<span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator<span class="arrow">→</span></a>
            <a href="/tools/dir-3-kyc-reminder" class="sidebar-link">DIR-3 KYC Reminder<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/statutory-audit-requirements-for-companies-what-every-business-must-know" class="sidebar-link">Statutory Audit Requirements for Companies<span class="arrow">→</span></a>
            <a href="/blog/what-is-a-small-company-under-the-companies-act-2013" class="sidebar-link">Small Company Definition Explained<span class="arrow">→</span></a>
            <a href="/blog/loan-to-directors-rules-under-companies-act-2013" class="sidebar-link">Loans to Directors — Sec 185 Rules<span class="arrow">→</span></a>
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

    // CARO 2020 Clause Master Data
    const CLAUSES = [
        {
            num: '3(i)',
            title: 'Property, Plant & Equipment and Intangible Assets',
            statRef: 'Para 3(i)(a) to (e), CARO 2020',
            reports: [
                'Maintenance of proper records with full particulars of PPE (quantitative + situation)',
                'Maintenance of proper records with full particulars of intangible assets',
                'Physical verification of PPE at reasonable intervals; coverage and procedure',
                'Title deeds of immovable property in specified tabular format (description, gross carrying value, holder, period, related-party status)',
                'Revaluation of PPE/intangibles by registered valuer; whether change exceeds 10% of net carrying value of class',
                'Disclosure of benami property proceedings initiated or pending'
            ],
            docs: [
                'PPE register, intangibles register',
                'Physical verification report and discrepancy reconciliation',
                'Title deed copies and lease agreements',
                'Registered valuer report (if revaluation)',
                'Management representation on benami property'
            ],
            condType: 'always'
        },
        {
            num: '3(ii)',
            title: 'Inventory and Working Capital Limits',
            statRef: 'Para 3(ii)(a)-(b), CARO 2020',
            reports: [
                'Physical verification of inventory at reasonable intervals; coverage and procedure',
                'Discrepancies of 10% or more in any class of inventory; treatment in books',
                'Working capital limits in excess of ₹5 crore in aggregate from banks/FIs at any point during year — based on security of current assets',
                'Whether quarterly returns/statements filed with banks/FIs agree with books of account; if not, details of discrepancies'
            ],
            docs: [
                'Inventory verification report; stock register',
                'Bank sanction letters and stock statements',
                'Quarterly returns filed with banks (DP statements)',
                'Reconciliation between quarterly returns and books'
            ],
            condType: 'always'
        },
        {
            num: '3(iii)',
            title: 'Loans, Advances, Investments, Guarantees, Security',
            statRef: 'Para 3(iii)(a)-(f), CARO 2020',
            reports: [
                'Loans/advances/guarantees/security to subsidiaries, JVs, associates and others — aggregate amount + balance outstanding',
                'Whether terms of loans/investments/guarantees/security are not prejudicial to the company',
                'Repayment schedule regularity; principal and interest stipulated and received',
                'Overdue amounts more than 90 days; reasonable steps for recovery',
                'Loans/advances renewed/extended or fresh loans granted to settle existing overdue',
                'Loans/advances repayable on demand or without specifying terms — aggregate + party-wise (Promoters/Related/Others)'
            ],
            docs: [
                'Loan register, investment register',
                'Loan agreements with repayment schedules',
                'Aging analysis of overdue loans',
                'Board resolutions for loan terms'
            ],
            condType: 'always'
        },
        {
            num: '3(iv)',
            title: 'Compliance with Sec 185 and Sec 186 — Loans, Investments, Guarantees',
            statRef: 'Para 3(iv), CARO 2020 read with Sec 185, 186 of Companies Act 2013',
            reports: [
                'Compliance with Section 185 — loans/guarantees/security to directors or persons in whom director is interested',
                'Compliance with Section 186 — limits, board approval, special resolution, register of investments',
                'Details of non-compliance: nature, maximum amount outstanding, balance sheet date amount'
            ],
            docs: [
                'Form MBP-1 and Section 189 register',
                'Board and shareholder resolutions',
                'Register of loans, investments, guarantees, security (Form MBP-2)'
            ],
            condType: 'always'
        },
        {
            num: '3(v)',
            title: 'Public Deposits and Deemed Deposits',
            statRef: 'Para 3(v), CARO 2020 read with Sec 73 to 76 of Companies Act 2013',
            reports: [
                'Compliance with Sections 73 to 76 of the Act and the Deposit Rules',
                'Whether RBI directives have been complied with',
                'Details of non-compliance and amounts of deposits accepted in contravention',
                'Whether any order has been passed by Company Law Board, NCLT, RBI or any other tribunal'
            ],
            docs: [
                'Deposit register and DPT-3 filing',
                'Auditor certificate for deposit acceptance',
                'Bank statements for deposit repayment',
                'Tribunal/regulatory orders if any'
            ],
            condType: 'always'
        },
        {
            num: '3(vi)',
            title: 'Maintenance of Cost Records',
            statRef: 'Para 3(vi), CARO 2020 read with Sec 148(1) of Companies Act 2013',
            reports: [
                'Whether maintenance of cost records prescribed by Central Government under Sec 148(1)',
                'Whether prescribed cost records have been made and maintained',
                'NOT required to verify accuracy of records — only existence'
            ],
            docs: [
                'Companies (Cost Records and Audit) Rules, 2014 — Tables A & B',
                'Cost accounting records (CRA-1)',
                'Cost audit report (CRA-3) if applicable'
            ],
            condType: 'industry',
            condNote: 'Applicable only if your industry is listed in Companies (Cost Records and Audit) Rules, 2014. Verify with management whether Sec 148(1) prescription applies.'
        },
        {
            num: '3(vii)',
            title: 'Statutory Dues',
            statRef: 'Para 3(vii)(a)-(b), CARO 2020',
            reports: [
                'Regularity in deposit of undisputed statutory dues — GST, PF, ESI, IT, customs, cess, other dues',
                'Outstanding undisputed dues of more than 6 months as at balance sheet date',
                'Disputed dues not deposited — amount + forum where pending'
            ],
            docs: [
                'GST returns, TDS returns, PF/ESI challans',
                'Income tax demand notices and appeal records',
                'Statutory dues reconciliation'
            ],
            condType: 'always'
        },
        {
            num: '3(viii)',
            title: 'Income Surrendered or Disclosed in Income Tax Search/Survey',
            statRef: 'Para 3(viii), CARO 2020',
            reports: [
                'Whether any transactions not recorded in books were surrendered/disclosed as income during tax assessments under Income Tax Act, 1961',
                'Whether such surrendered income has been properly recorded in books during the year'
            ],
            docs: [
                'Income tax assessment orders',
                'Search/survey records (if applicable)',
                'Books reconciliation for disclosed income'
            ],
            condType: 'always'
        },
        {
            num: '3(ix)',
            title: 'Loan Defaults, Willful Defaulter, End-Use of Funds',
            statRef: 'Para 3(ix)(a)-(f), CARO 2020',
            reports: [
                'Default in repayment of loans/borrowings/interest to lenders — nature, amount, period',
                'Whether company declared willful defaulter by any bank/FI/lender',
                'Term loans applied for the purpose obtained',
                'Short-term funds used for long-term purposes',
                'Funds taken on account of subsidiaries/associates/JVs',
                'Loans raised on pledge of securities held in subsidiaries/JVs/associates'
            ],
            docs: [
                'Loan agreements, sanction letters',
                'Bank statements showing fund utilisation',
                'CIBIL/willful defaulter list check',
                'CMA data and project monitoring reports'
            ],
            condType: 'always'
        },
        {
            num: '3(x)',
            title: 'IPO, FPO, Preferential Allotment, Private Placement',
            statRef: 'Para 3(x)(a)-(b), CARO 2020 read with Sec 42, 62 of Companies Act 2013',
            reports: [
                'Whether IPO/FPO funds raised were applied for the purpose stated in the prospectus; details of delay or default',
                'Whether preferential allotment/private placement complied with Sec 42 and Sec 62; whether funds raised used for purpose stated'
            ],
            docs: [
                'Prospectus / offer document / explanatory statement',
                'Use of proceeds monitoring agency report',
                'PAS-3 (Return of Allotment) filings',
                'Bank statements for application money'
            ],
            condType: 'funds',
            condNote: 'Applicable only if the company raised funds through IPO, FPO, preferential allotment or private placement during the year.'
        },
        {
            num: '3(xi)',
            title: 'Fraud — by or on the Company',
            statRef: 'Para 3(xi)(a)-(c), CARO 2020 read with Sec 143(12) of Companies Act 2013',
            reports: [
                'Fraud by company or on the company noticed/reported during year — nature and amount',
                'Whether Form ADT-4 has been filed with Central Government for frauds ≥ ₹1 crore (Rule 13 of Audit Rules)',
                'Whistleblower complaints received during the year — nature and management response'
            ],
            docs: [
                'Internal control documentation',
                'Form ADT-4 filed (if any)',
                'Whistleblower / vigil mechanism records',
                'Audit committee minutes on fraud reports'
            ],
            condType: 'always'
        },
        {
            num: '3(xii)',
            title: 'Nidhi Company Specific Compliance',
            statRef: 'Para 3(xii)(a)-(c), CARO 2020 read with Nidhi Rules, 2014',
            reports: [
                'Net Owned Funds (NOF) to deposits ratio more than 1:20 as on balance sheet date',
                'Maintenance of 10% unencumbered term deposits to meet liability',
                'Defaults in payment of interest on deposits or repayment thereof — period and amount'
            ],
            docs: [
                'NDH-1, NDH-2, NDH-3 filings',
                'Deposit register and unencumbered FD certificates',
                'Default register if any'
            ],
            condType: 'nidhi',
            condNote: 'Applicable only to Nidhi Companies registered under Section 406 of the Companies Act, 2013.'
        },
        {
            num: '3(xiii)',
            title: 'Related Party Transactions',
            statRef: 'Para 3(xiii), CARO 2020 read with Sec 177, 188 of Companies Act 2013',
            reports: [
                'Compliance with Section 177 — Audit Committee approval (if applicable)',
                'Compliance with Section 188 — board/shareholder approval',
                'Disclosure in financial statements as required by applicable accounting standards (AS 18 / Ind AS 24)'
            ],
            docs: [
                'Form AOC-2 (Related Party Transactions disclosure)',
                'Board minutes for RPT approvals',
                'Audit committee minutes',
                'Sec 188 register'
            ],
            condType: 'always'
        },
        {
            num: '3(xiv)',
            title: 'Internal Audit System',
            statRef: 'Para 3(xiv)(a)-(b), CARO 2020 read with Sec 138 of Companies Act 2013',
            reports: [
                'Whether company has internal audit system commensurate with size and nature of business',
                'Whether reports of internal auditor for the period under audit have been considered by statutory auditor'
            ],
            docs: [
                'Internal audit appointment letter (Sec 138)',
                'Internal audit reports for the year',
                'Audit committee minutes considering IA reports',
                'Statutory auditor working paper on IA reliance'
            ],
            condType: 'always'
        },
        {
            num: '3(xv)',
            title: 'Non-Cash Transactions with Directors',
            statRef: 'Para 3(xv), CARO 2020 read with Sec 192 of Companies Act 2013',
            reports: [
                'Whether company entered into non-cash transactions with directors or persons connected with him',
                'Whether provisions of Section 192 (prior approval by special resolution) have been complied with'
            ],
            docs: [
                'Special resolution u/s 192 (if applicable)',
                'Valuation report for assets transferred',
                'Board minutes and explanatory statement'
            ],
            condType: 'always'
        },
        {
            num: '3(xvi)',
            title: 'NBFC / HFC / CIC Registration with RBI',
            statRef: 'Para 3(xvi)(a)-(d), CARO 2020 read with Sec 45-IA of RBI Act 1934',
            reports: [
                'Whether company required to be registered under Section 45-IA of RBI Act, 1934 — registration obtained or not',
                'Whether company conducted Non-Banking Financial or Housing Finance activities without valid Certificate of Registration from RBI',
                'Whether company is a Core Investment Company (CIC) — exempted/unregistered, continues to fulfil CIC criteria',
                'Group with more than one CIC — total number of CICs in the group'
            ],
            docs: [
                'RBI Certificate of Registration (CoR)',
                'Principal business test computation',
                'CIC compliance certificate',
                'NBS / DNBS returns to RBI'
            ],
            condType: 'nbfc',
            condNote: 'Applicable to NBFCs, Housing Finance Companies and Core Investment Companies.'
        },
        {
            num: '3(xvii)',
            title: 'Cash Losses',
            statRef: 'Para 3(xvii), CARO 2020',
            reports: [
                'Whether company incurred cash losses in current FY and immediately preceding FY',
                'Quantum of cash losses if any'
            ],
            docs: [
                'Profit & loss account (current and preceding year)',
                'Cash loss computation working',
                'Reconciliation with reported financial ratios'
            ],
            condType: 'always'
        },
        {
            num: '3(xviii)',
            title: 'Resignation of Statutory Auditors',
            statRef: 'Para 3(xviii), CARO 2020',
            reports: [
                'Whether there has been any resignation of statutory auditors during the year',
                'Whether issues, objections or concerns raised by outgoing auditors have been considered by incoming auditor'
            ],
            docs: [
                'Resignation letter from outgoing auditor',
                'ADT-3 filing with ROC',
                'Communication with outgoing auditor (NOC)',
                'Documentation of issues raised and consideration thereof'
            ],
            condType: 'resign',
            condNote: 'Reportable only if auditor resignation occurred during the year.'
        },
        {
            num: '3(xix)',
            title: 'Material Uncertainty on Going Concern',
            statRef: 'Para 3(xix), CARO 2020',
            reports: [
                'On the basis of financial ratios, ageing and expected dates of realisation of financial assets and payment of financial liabilities, whether material uncertainty exists',
                'Auditor opinion on company\'s capability to meet liabilities existing at balance sheet date as and when they fall due within one year',
                'Caveat: this opinion is not a guarantee'
            ],
            docs: [
                'Liquidity ratios (current ratio, quick ratio, debt service coverage)',
                'Receivables and payables ageing',
                'Cash flow projections (one year forward)',
                'Management\'s going concern assessment'
            ],
            condType: 'always'
        },
        {
            num: '3(xx)',
            title: 'CSR — Unspent Transfer Compliance',
            statRef: 'Para 3(xx)(a)-(b), CARO 2020 read with Sec 135 of Companies Act 2013',
            reports: [
                'Unspent CSR amount (other than ongoing projects) transferred to Fund specified in Schedule VII within 6 months of FY end',
                'Unspent CSR amount for ongoing projects transferred to special account within 30 days of FY end (Sec 135(6))'
            ],
            docs: [
                'CSR-1, CSR-2 filings',
                'Board CSR Committee minutes',
                'Bank statement for CSR special account',
                'Transfer challans to Schedule VII fund'
            ],
            condType: 'csr',
            condNote: 'Applicable only if the company is required to spend CSR under Section 135 (net worth ≥ ₹500 cr OR turnover ≥ ₹1,000 cr OR net profit ≥ ₹5 cr in immediately preceding FY).'
        },
        {
            num: '3(xxi)',
            title: 'Consolidated CARO — Component Auditor Remarks',
            statRef: 'Para 3(xxi), CARO 2020',
            reports: [
                'Whether qualifications or adverse remarks made by respective auditors in the CARO reports of companies included in consolidated financial statements',
                'If yes — name of companies, paragraph numbers of CARO reports containing qualifications/adverse remarks'
            ],
            docs: [
                'Standalone CARO reports of all components',
                'Consolidation working papers',
                'Component auditor representations',
                'Materiality assessment for consol reporting'
            ],
            condType: 'consol',
            condNote: 'Applicable only when reporting on Consolidated Financial Statements. This is the ONLY clause that applies to consol audit reports.'
        }
    ];

    // Toggle group helper
    function setupToggleGroup(id) {
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
            updateConditionalFields();
        });
    }

    function getActiveValue(groupId) {
        const group = document.getElementById(groupId);
        if (!group) return null;
        const active = group.querySelector('.toggle-btn.active');
        return active ? active.dataset.value : null;
    }

    setupToggleGroup('entityTypeGroup');
    setupToggleGroup('fsTypeGroup');
    setupToggleGroup('groupStatusGroup');
    setupToggleGroup('sectorGroup');
    setupToggleGroup('listedGroup');
    setupToggleGroup('csrGroup');
    setupToggleGroup('fundsGroup');

    function updateConditionalFields() {
        const entity = getActiveValue('entityTypeGroup');
        const fs = getActiveValue('fsTypeGroup');

        const rowGroupStatus = document.getElementById('rowGroupStatus');
        const rowSmallCo = document.getElementById('rowSmallCo');
        const rowPvtTest = document.getElementById('rowPvtTest');
        const rowRevenue = document.getElementById('rowRevenue');

        // Hide all financial-threshold fields if entity type is exempt by classification or LLP/foreign
        const requiresFinancials = (entity === 'pvtltd' || entity === 'public');

        rowGroupStatus.classList.toggle('show', entity === 'pvtltd');
        rowSmallCo.classList.toggle('show', requiresFinancials);
        rowPvtTest.classList.toggle('show', entity === 'pvtltd');
        rowRevenue.classList.toggle('show', entity === 'pvtltd');
    }

    updateConditionalFields();

    // Compute Applicability
    function computeApplicability() {
        const entity = getActiveValue('entityTypeGroup');
        const fs = getActiveValue('fsTypeGroup');
        const groupStatus = getActiveValue('groupStatusGroup');
        const sector = getActiveValue('sectorGroup');
        const listed = getActiveValue('listedGroup');
        const csr = getActiveValue('csrGroup');
        const funds = getActiveValue('fundsGroup');

        const paidUp = parseFloat(document.getElementById('paidUpCapital').value) || 0;
        const turnover = parseFloat(document.getElementById('turnover').value) || 0;
        const pucReserves = parseFloat(document.getElementById('pucPlusReserves').value) || 0;
        const borrowings = parseFloat(document.getElementById('totalBorrowings').value) || 0;
        const totalRev = parseFloat(document.getElementById('totalRevenue').value) || 0;

        let v = {
            entity, fs, groupStatus, sector, listed, csr, funds,
            paidUp, turnover, pucReserves, borrowings, totalRev,
            verdictClass: '', label: '', headline: '', sub: '',
            advisory: '', advisoryClass: 'info',
            basis: '',
            summary: [],
            showChecklist: true
        };

        // Step 0: LLP / Other
        if (entity === 'llp') {
            v.verdictClass = 'notapplicable';
            v.label = 'Not Applicable';
            v.headline = 'CARO 2020 does not apply to LLPs or non-corporate entities';
            v.sub = 'LLPs are governed by the LLP Act, 2008 — outside Companies Act, 2013';
            v.advisory = '<strong>Outside scope.</strong> CARO 2020 applies only to entities registered under the Companies Act, 2013 (including foreign companies under Section 2(42)). LLP statutory audit is governed by the LLP Act, 2008. Partnership firms and proprietorships follow the Income Tax Act, 1961 audit requirements (Section 44AB) instead.';
            v.advisoryClass = 'info';
            v.basis = 'Section 143(11), Companies Act, 2013 — CARO is issued under this section and applies only to companies under the Act. LLP Act, 2008 governs LLPs separately.';
            v.summary = [
                {label: 'Entity Type', value: 'LLP / Non-Corporate'},
                {label: 'Status', value: 'Outside CARO'},
                {label: 'Audit Framework', value: 'LLP Act / IT Act'}
            ];
            v.showChecklist = false;
            return v;
        }

        // Step 1: Entity-Type Categorical Exemptions
        const exemptByEntity = {
            'banking': {label: 'Banking Company', basis: 'Sec 5(c), Banking Regulation Act, 1949'},
            'insurance': {label: 'Insurance Company', basis: 'Sec 2(7A), Insurance Act, 1938'},
            'sec8': {label: 'Section 8 Company', basis: 'Sec 8, Companies Act, 2013'},
            'opc': {label: 'One Person Company', basis: 'Sec 2(62), Companies Act, 2013'}
        };

        if (exemptByEntity[entity]) {
            const ex = exemptByEntity[entity];
            v.verdictClass = 'exempt';
            v.label = 'Exempt';
            v.headline = 'CARO 2020 does not apply — exempt by entity type';
            v.sub = ex.label + ' — categorically exempt under Para 1(2) of the Order';
            v.advisory = '<strong>Categorical exemption.</strong> Your entity is exempt from CARO 2020 reporting based on its classification under the Companies Act and applicable special statutes. The statutory audit must still be conducted under Section 143 of the Companies Act, but the auditor\'s report will not contain CARO 2020 clauses.';
            v.advisoryClass = 'success';
            v.basis = ex.basis + '. CARO 2020 Para 1(2) explicitly excludes these entity types from its scope.';
            v.summary = [
                {label: 'Entity Type', value: ex.label},
                {label: 'Status', value: 'Exempt'},
                {label: 'CARO Applicable', value: 'No'}
            ];
            v.showChecklist = false;
            return v;
        }

        // Step 2: Foreign Company — always applies
        if (entity === 'foreign') {
            // Foreign Company always covered, no size exemption
            // BUT respect FS type
            if (fs === 'consol') {
                v.verdictClass = 'consol';
                v.label = 'Applicable — Consolidated';
                v.headline = 'Only Clause 3(xxi) applies to Consolidated Financial Statements';
                v.sub = 'Para 2 of CARO 2020 carves out consolidated reports except Clause (xxi)';
                v.advisory = '<strong>Consolidated FS carve-out.</strong> CARO 2020 does not apply to consolidated financial statements except for Clause (xxi). The parent company auditor must report any qualifications or adverse remarks made by component auditors in their respective standalone CARO reports, along with company names and paragraph numbers.';
                v.advisoryClass = 'warn';
                v.basis = 'Paragraph 2 of CARO 2020 — "This Order shall not apply to the auditor\'s report on consolidated financial statements except clause (xxi) of paragraph 3."';
                v.summary = [
                    {label: 'Entity Type', value: 'Foreign Company'},
                    {label: 'FS Type', value: 'Consolidated'},
                    {label: 'Applicable Clauses', value: 'Only 3(xxi)'}
                ];
                return v;
            }
            v.verdictClass = 'applicable';
            v.label = 'Applicable';
            v.headline = 'CARO 2020 fully applies to your Foreign Company';
            v.sub = 'No size-based exemption available for foreign companies under Sec 2(42)';
            v.advisory = '<strong>Full applicability.</strong> Foreign companies as defined in Section 2(42) of the Companies Act, 2013 are within the scope of CARO 2020 with no size-based carve-out. The auditor of the Indian branch or project office must report on all 21 clauses to the extent relevant to the Indian operations.';
            v.advisoryClass = 'danger';
            v.basis = 'Section 2(42), Companies Act, 2013 + Para 1(2) of CARO 2020 — foreign companies are explicitly within scope. Exemptions under Para 1(2)(i)-(v) do not extend to foreign companies.';
            v.summary = [
                {label: 'Entity Type', value: 'Foreign Company'},
                {label: 'FS Type', value: 'Standalone'},
                {label: 'Applicable Clauses', value: 'All 21 (as relevant)'}
            ];
            return v;
        }

        // Step 3: Pvt Ltd / Public Ltd — Small Company Test
        // Small Company is only available to private companies (and only if not holding/subsidiary of public)
        const isHoldSubOfPublic = (groupStatus === 'yes');

        // Small Company test — only for private companies that are NOT holding/subsidiary of public
        if (entity === 'pvtltd' && !isHoldSubOfPublic) {
            if (paidUp > 0 && turnover > 0 && paidUp <= 4 && turnover <= 40) {
                v.verdictClass = 'exempt';
                v.label = 'Exempt — Small Company';
                v.headline = 'CARO 2020 does not apply — Small Company exemption';
                v.sub = 'Sec 2(85) thresholds met: Paid-up ≤ ₹4 cr AND Turnover ≤ ₹40 cr';
                v.advisory = '<strong>Small Company exemption.</strong> Your private company qualifies as a Small Company under Section 2(85) of the Companies Act, 2013 (read with the 2022 amendment rules). CARO 2020 does not apply. Note that the company is also entitled to several other relaxations — fewer board meetings, no cash flow statement, simpler annual return, abridged Director\'s Report.';
                v.advisoryClass = 'success';
                v.basis = 'Section 2(85), Companies Act, 2013 read with Companies (Specification of Definitions Details) Amendment Rules, 2022. Para 1(2)(iv) of CARO 2020 excludes Small Companies.';
                v.summary = [
                    {label: 'Entity Type', value: 'Private Limited'},
                    {label: 'Paid-up Capital', value: '₹' + paidUp + ' cr'},
                    {label: 'Turnover', value: '₹' + turnover + ' cr'},
                    {label: 'Sec 2(85) Test', value: 'Passed'},
                    {label: 'Status', value: 'Small Company'},
                    {label: 'CARO Applicable', value: 'No'}
                ];
                v.showChecklist = false;
                return v;
            }
        }

        // Step 4: Pvt Ltd Specific Exemption — three cumulative thresholds
        if (entity === 'pvtltd' && !isHoldSubOfPublic) {
            if (pucReserves > 0 && pucReserves <= 1 && borrowings <= 1 && totalRev > 0 && totalRev <= 10) {
                v.verdictClass = 'exempt';
                v.label = 'Exempt — Pvt Ltd Threshold';
                v.headline = 'CARO 2020 does not apply — Pvt Ltd specific exemption';
                v.sub = 'All three thresholds met: PUC+R&S ≤ ₹1 cr, Borrowings ≤ ₹1 cr, Revenue ≤ ₹10 cr';
                v.advisory = '<strong>Pvt Ltd specific exemption.</strong> Your private company meets all three cumulative thresholds under Para 1(2)(iv) of CARO 2020. CARO does not apply. <strong>Caution:</strong> The borrowings test is at any point during the year, not just balance sheet date — verify mid-year balances before relying on this exemption. Also confirm the company is not a holding or subsidiary of a public company.';
                v.advisoryClass = 'success';
                v.basis = 'Para 1(2)(iv), CARO 2020 — Private Limited Company (other than holding/subsidiary of public company) with all three thresholds met: paid-up capital + reserves and surplus ≤ ₹1 cr on balance sheet date AND borrowings ≤ ₹1 cr from banks/FIs at any point during FY AND total revenue ≤ ₹10 cr (Schedule III, including discontinuing operations).';
                v.summary = [
                    {label: 'Entity Type', value: 'Private Limited'},
                    {label: 'PUC + R&S', value: '₹' + pucReserves + ' cr'},
                    {label: 'Borrowings', value: '₹' + borrowings + ' cr'},
                    {label: 'Total Revenue', value: '₹' + totalRev + ' cr'},
                    {label: 'Pvt Ltd Test', value: 'Passed'},
                    {label: 'CARO Applicable', value: 'No'}
                ];
                v.showChecklist = false;
                return v;
            }
        }

        // Step 5: Consolidated FS Carve-out
        if (fs === 'consol') {
            v.verdictClass = 'consol';
            v.label = 'Applicable — Consolidated';
            v.headline = 'Only Clause 3(xxi) applies to Consolidated Financial Statements';
            v.sub = 'Para 2 of CARO 2020 carves out consolidated reports except Clause (xxi)';
            v.advisory = '<strong>Consolidated FS carve-out.</strong> CARO 2020 does not apply to consolidated financial statements except Clause (xxi). The parent auditor must report any qualifications or adverse remarks made by component auditors in their respective standalone CARO reports, along with names of those companies and paragraph numbers of the qualifications/adverse remarks.';
            v.advisoryClass = 'warn';
            v.basis = 'Paragraph 2 of CARO 2020 — "This Order shall not apply to the auditor\'s report on consolidated financial statements except clause (xxi) of paragraph 3."';
            v.summary = [
                {label: 'Entity Type', value: entityLabel(entity)},
                {label: 'FS Type', value: 'Consolidated'},
                {label: 'Applicable Clauses', value: 'Only 3(xxi)'}
            ];
            return v;
        }

        // Step 6: CARO 2020 Fully Applies — Standalone
        v.verdictClass = 'applicable';
        v.label = 'Applicable';
        v.headline = 'CARO 2020 applies — generate the 21-clause checklist';
        let exemptBlocked = '';
        if (entity === 'pvtltd' && isHoldSubOfPublic) {
            exemptBlocked = ' (Pvt Ltd exemption blocked: holding/subsidiary of public co)';
        } else if (entity === 'pvtltd') {
            exemptBlocked = ' (Pvt Ltd thresholds not met)';
        } else if (entity === 'public') {
            exemptBlocked = ' (Public company — no size exemption available)';
        }
        v.sub = 'Standalone audit — full clause-wise reporting required' + exemptBlocked;
        v.advisory = '<strong>Full CARO 2020 reporting required.</strong> Your statutory audit report must include all 21 clauses of Paragraph 3 to the extent applicable. Conditional clauses (vi), (x), (xii), (xvi), (xviii) and (xx) have been mapped below based on your inputs. Use the checklist for working paper documentation and reporting.';
        v.advisoryClass = 'danger';
        v.basis = 'Section 143(11), Companies Act, 2013 + CARO 2020 (S.O. 849(E) dated 25.02.2020) effective for FYs commencing on or after 1 April 2021. Entity does not qualify for any of the exemptions in Para 1(2).';
        v.summary = [
            {label: 'Entity Type', value: entityLabel(entity)},
            {label: 'FS Type', value: 'Standalone'},
            {label: 'Sector', value: sectorLabel(sector)},
            {label: 'Listed', value: listed === 'yes' ? 'Yes' : 'No'},
            {label: 'CSR Applicable', value: csr === 'yes' ? 'Yes' : 'No'},
            {label: 'Total Clauses', value: '21'}
        ];
        return v;
    }

    function entityLabel(e) {
        return ({
            pvtltd: 'Private Limited',
            public: 'Public Limited',
            opc: 'OPC',
            sec8: 'Section 8',
            banking: 'Banking',
            insurance: 'Insurance',
            foreign: 'Foreign Company',
            llp: 'LLP / Other'
        })[e] || e;
    }
    function sectorLabel(s) {
        return ({standard: 'Standard', nbfc: 'NBFC / HFC / CIC', nidhi: 'Nidhi'})[s] || s;
    }

    // Generate clause-wise checklist HTML
    function generateChecklist(v) {
        if (!v.showChecklist) return '';

        // For consolidated FS, only show clause xxi
        const consolOnly = (v.fs === 'consol');

        let html = '<div style="margin-top:24px;"><h3 style="font-size:18px;color:var(--primary-dark);margin-bottom:6px;">Clause-wise Auditor Reporting Checklist</h3>';
        html += '<p style="font-size:13px;color:var(--text-secondary);margin-bottom:12px;">Tap any clause to expand the reporting requirements and document checklist. Conditional clauses are flagged based on your inputs.</p>';
        html += '<div class="clause-actions"><button type="button" class="clause-btn expand-all" id="btnExpandAll">Expand All</button><button type="button" class="clause-btn" id="btnCollapseAll">Collapse All</button></div>';
        html += '<div class="clause-list">';

        CLAUSES.forEach(function(c) {
            // Determine applicability
            let applies = true;
            let condReason = '';
            let statusLabel = 'Applies';
            let statusClass = 'applies';
            let itemClass = 'applies';

            if (consolOnly) {
                if (c.condType !== 'consol') {
                    applies = false;
                    statusLabel = 'N/A — Consol';
                    statusClass = 'na';
                    itemClass = 'na';
                    condReason = 'Not applicable to consolidated FS — Para 2 of CARO 2020.';
                }
            } else {
                // Standalone — check conditional types
                if (c.condType === 'consol') {
                    applies = false;
                    statusLabel = 'N/A — Standalone';
                    statusClass = 'na';
                    itemClass = 'na';
                    condReason = 'Applies only to Consolidated FS.';
                } else if (c.condType === 'nidhi' && v.sector !== 'nidhi') {
                    applies = false;
                    statusLabel = 'N/A — Not Nidhi';
                    statusClass = 'na';
                    itemClass = 'na';
                    condReason = 'Applies only to Nidhi Companies.';
                } else if (c.condType === 'nbfc' && v.sector !== 'nbfc') {
                    applies = false;
                    statusLabel = 'N/A — Not NBFC';
                    statusClass = 'na';
                    itemClass = 'na';
                    condReason = 'Applies only to NBFCs, HFCs and CICs.';
                } else if (c.condType === 'csr' && v.csr !== 'yes') {
                    applies = false;
                    statusLabel = 'N/A — No CSR';
                    statusClass = 'na';
                    itemClass = 'na';
                    condReason = 'Sec 135 CSR not triggered for this entity.';
                } else if (c.condType === 'funds' && v.funds === 'none') {
                    applies = false;
                    statusLabel = 'N/A — No fund-raise';
                    statusClass = 'na';
                    itemClass = 'na';
                    condReason = 'No IPO/FPO/preferential allotment/private placement during the year.';
                } else if (c.condType === 'industry') {
                    statusLabel = 'Conditional';
                    statusClass = 'conditional';
                    itemClass = 'conditional';
                } else if (c.condType === 'resign') {
                    statusLabel = 'If Resigned';
                    statusClass = 'conditional';
                    itemClass = 'conditional';
                } else if (c.condType === 'consol' && v.fs === 'consol') {
                    statusLabel = 'Applies (Consol)';
                }
            }

            html += '<div class="clause-item ' + itemClass + '">';
            html += '<div class="clause-header" tabindex="0" role="button" aria-expanded="false">';
            html += '<span class="clause-num">' + c.num + '</span>';
            html += '<span class="clause-title">' + c.title + '</span>';
            html += '<span class="clause-status ' + statusClass + '">' + statusLabel + '</span>';
            html += '<span class="clause-toggle">+</span>';
            html += '</div>';

            html += '<div class="clause-body">';
            if (condReason) {
                html += '<div class="conditional-note"><strong>Why marked N/A:</strong> ' + condReason + '</div>';
            } else if (c.condNote && (statusClass === 'conditional' || statusClass === 'applies')) {
                html += '<div class="conditional-note"><strong>Note:</strong> ' + c.condNote + '</div>';
            }
            html += '<h4>Statutory Reference</h4>';
            html += '<p><span class="stat-ref">' + c.statRef + '</span></p>';
            html += '<h4>What the Auditor Must Report</h4>';
            html += '<ul>';
            c.reports.forEach(function(r) { html += '<li>' + r + '</li>'; });
            html += '</ul>';
            html += '<h4>Documents / Evidence Required</h4>';
            html += '<ul>';
            c.docs.forEach(function(d) { html += '<li>' + d + '</li>'; });
            html += '</ul>';
            html += '</div>';
            html += '</div>';
        });

        html += '</div></div>';
        return html;
    }

    // Render verdict
    function renderResult(v) {
        const card = document.getElementById('verdictCard');
        const label = document.getElementById('verdictLabel');
        const headline = document.getElementById('verdictHeadline');
        const sub = document.getElementById('verdictSub');
        const summaryGrid = document.getElementById('summaryGrid');
        const advisory = document.getElementById('advisoryBanner');
        const basisText = document.getElementById('basisText');
        const checklistContainer = document.getElementById('checklistContainer');

        card.className = 'verdict-card ' + v.verdictClass;
        label.textContent = v.label;
        headline.textContent = v.headline;
        sub.textContent = v.sub;

        summaryGrid.innerHTML = '';
        v.summary.forEach(function(s, idx) {
            const card = document.createElement('div');
            card.className = 'summary-card' + (idx === 0 ? ' highlight' : '');
            card.innerHTML = '<div class="summary-label">' + s.label + '</div><div class="summary-value">' + s.value + '</div>';
            summaryGrid.appendChild(card);
        });

        advisory.className = 'info-banner ' + v.advisoryClass;
        advisory.innerHTML = v.advisory;
        basisText.innerHTML = v.basis;

        checklistContainer.innerHTML = generateChecklist(v);

        // Wire up clause toggles
        document.querySelectorAll('.clause-header').forEach(function(h) {
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

        const expandBtn = document.getElementById('btnExpandAll');
        const collapseBtn = document.getElementById('btnCollapseAll');
        if (expandBtn) {
            expandBtn.addEventListener('click', function() {
                document.querySelectorAll('.clause-item').forEach(function(it) { it.classList.add('open'); });
            });
        }
        if (collapseBtn) {
            collapseBtn.addEventListener('click', function() {
                document.querySelectorAll('.clause-item').forEach(function(it) { it.classList.remove('open'); });
            });
        }

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        setTimeout(function() {
            section.scrollIntoView({behavior: 'smooth', block: 'start'});
        }, 100);
    }

    // Generate handler
    document.getElementById('btnGenerate').addEventListener('click', function() {
        const v = computeApplicability();
        renderResult(v);
    });

    // Reset handler
    document.getElementById('btnReset').addEventListener('click', function() {
        ['paidUpCapital', 'turnover', 'pucPlusReserves', 'totalBorrowings', 'totalRevenue'].forEach(function(id) {
            document.getElementById(id).value = '';
        });
        // Reset toggles to first option
        ['entityTypeGroup', 'fsTypeGroup', 'groupStatusGroup', 'sectorGroup', 'listedGroup', 'csrGroup', 'fundsGroup'].forEach(function(gid) {
            const g = document.getElementById(gid);
            if (!g) return;
            g.querySelectorAll('.toggle-btn').forEach(function(b, i) {
                b.classList.toggle('active', i === 0);
                b.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
            });
        });
        document.getElementById('resultSection').classList.remove('visible');
        updateConditionalFields();
    });

    // Enter key support on number inputs
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
