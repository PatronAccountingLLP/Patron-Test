@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>Ind AS Applicability Checker | Net Worth &amp; Phase Test</title>
    <meta name="description" content="Ind AS applicability checker: find if your company or NBFC must adopt Indian Accounting Standards by net worth, listing &amp; phase. Free CA-reviewed tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/ind-as-applicability-checker/">
    <meta property="og:title" content="Ind AS Applicability Checker — Companies &amp; NBFCs FY 2026-27">
    <meta property="og:description" content="Instantly check Ind AS mandatory applicability for your company or NBFC. Phase I/II/III/IV roadmap, group company test, voluntary adoption — CA-reviewed.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/ind-as-applicability-checker">
    <meta property="og:image" content="/tools/og/ind-as-applicability-checker.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ind AS Applicability Checker — Companies &amp; NBFCs FY 2026-27">
    <meta name="twitter:description" content="Check if your company or NBFC must adopt Ind AS — net worth, listing status, group rule, voluntary adoption. Free CA-reviewed tool.">
    <meta name="twitter:image" content="/tools/og/ind-as-applicability-checker.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Ind AS Applicability Checker",
      "description": "Ind AS Applicability Checker is a decision-tree tool that determines whether Indian Accounting Standards (Ind AS) apply to a company or NBFC under the Companies (Indian Accounting Standards) Rules, 2015 and subsequent amendments. The tool evaluates entity type, listing status (mainboard, SME Exchange, in process of listing, unlisted), net worth thresholds (₹250 crore and ₹500 crore), holding/subsidiary/JV/associate group rule under Rule 4(1)(iii)(b), prior adoption (irreversibility), and voluntary adoption eligibility from 1 April 2015. Covers Phase I (FY 2016-17), Phase II (FY 2017-18), NBFC Phase III (FY 2018-19), NBFC Phase IV (FY 2019-20), and 2025 Amendment Rules updates to Ind AS 21, 1, 7, 10, 12, 116.",
      "url": "/tools/ind-as-applicability-checker",
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
        {"@type": "ListItem", "position": 3, "name": "Ind AS Applicability Checker", "item": "/tools/ind-as-applicability-checker"}
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
          "name": "What is Ind AS and who notifies it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian Accounting Standards (Ind AS) are IFRS-converged accounting standards notified by the Ministry of Corporate Affairs (MCA) under Section 133 of the Companies Act, 2013. They are formulated by the Accounting Standards Board of ICAI in consultation with the National Financial Reporting Authority (NFRA). The Companies (Indian Accounting Standards) Rules, 2015 prescribe the phase-wise roadmap based on net worth, listing status and sector. Currently 39 Ind AS are in force after Ind AS 11 and Ind AS 18 were replaced by Ind AS 116 and Ind AS 115 respectively."
          }
        },
        {
          "@type": "Question",
          "name": "Which companies must mandatorily apply Ind AS in FY 2026-27?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory Ind AS applicability covers: (1) all companies with net worth of ₹500 crore or more (Phase I, FY 2016-17 onwards); (2) all listed companies on a mainboard exchange in India or abroad, plus unlisted companies with net worth ₹250–500 crore (Phase II, FY 2017-18 onwards); (3) NBFCs with net worth ≥ ₹500 crore (Phase III, FY 2018-19); and (4) listed NBFCs and unlisted NBFCs with net worth ₹250–500 crore (Phase IV, FY 2019-20). Holding, subsidiary, joint venture and associate companies of any covered entity are also automatically covered."
          }
        },
        {
          "@type": "Question",
          "name": "How is net worth calculated for Ind AS applicability?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net worth is computed under Section 2(57) of the Companies Act, 2013, based on the audited standalone balance sheet. It includes paid-up share capital and reserves created out of profits and securities premium. Excluded items: revaluation reserves, write-back of depreciation, amalgamation reserves, and miscellaneous expenditure not written off. Accumulated losses and deferred expenditure are deducted. The threshold is checked as on 31 March 2014 or any subsequent FY-end. If a company first crosses ₹250 crore or ₹500 crore in a later year, Ind AS applies from the immediately following financial year."
          }
        },
        {
          "@type": "Question",
          "name": "Are LLPs and partnership firms required to follow Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The Companies (Indian Accounting Standards) Rules, 2015 apply only to companies incorporated under the Companies Act, 2013 or 1956. Limited Liability Partnerships (LLPs), partnership firms, sole proprietorships, HUFs, AOPs, BOIs and trusts are outside the mandatory scope. They follow Accounting Standards (AS) issued by ICAI as applicable to non-corporate entities (Level I to IV classification). Voluntary Ind AS adoption is also not formally permitted for these entities under the current MCA framework."
          }
        },
        {
          "@type": "Question",
          "name": "Are subsidiaries automatically covered if the parent is on Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Rule 4(1)(iii)(b) read with the second proviso of the Companies (Indian Accounting Standards) Rules, 2015, once any company is covered under the Ind AS roadmap (mandatorily or voluntarily), its holding, subsidiary, joint venture and associate companies must also comply with Ind AS — regardless of their individual net worth or listing status. This ensures consistent group-level financial reporting. Overseas subsidiaries of an Indian company may continue with their jurisdictional GAAP for standalone financials but must report Ind AS-adjusted numbers for consolidation."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company voluntarily adopt Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Rule 4(1)(i) of the Companies (Indian Accounting Standards) Rules, 2015 permits voluntary adoption of Ind AS for any financial year beginning on or after 1 April 2015. There is no minimum net worth or listing threshold for voluntary adoption. However, once a company opts for Ind AS voluntarily, reversal to previous AS is not permitted under Rule 4(2). The company must also prepare comparative financial statements as per Ind AS for the immediately preceding period. Voluntary adoption is common for companies preparing for IPO, foreign listing, or PE investment."
          }
        },
        {
          "@type": "Question",
          "name": "Is Ind AS applicable to companies listed on SME Exchange?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Companies whose securities are listed (or in the process of being listed) on an SME Exchange are specifically excluded from mandatory Ind AS under Rule 4(1)(iii)(b)(i) of the Companies (Indian Accounting Standards) Rules, 2015. SME Exchange has the same meaning as in Chapter XB of the SEBI (ICDR) Regulations, 2009. These companies follow Accounting Standards under the Companies (Accounting Standards) Rules, 2021. They may, however, voluntarily adopt Ind AS. If they migrate to the mainboard, Ind AS becomes mandatory from the FY of migration onwards."
          }
        },
        {
          "@type": "Question",
          "name": "What is the status of Ind AS for Banks and Insurance companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scheduled Commercial Banks (excluding Regional Rural Banks) were originally required to adopt Ind AS from 1 April 2018. RBI deferred this to 1 April 2019 via press release dated 5 April 2018, and subsequently postponed implementation indefinitely through notification dated 22 March 2019, pending necessary legislative amendments to the Banking Regulation Act. For Insurance companies, IRDAI was to notify a separate set of Ind AS effective 1 April 2018 but implementation has been deferred pending IFRS 17 (Insurance Contracts) convergence. Both sectors continue with their respective regulator-prescribed accounting frameworks."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company revert to old Accounting Standards after adopting Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Rule 4(2) of the Companies (Indian Accounting Standards) Rules, 2015 categorically states that once a company starts following Ind AS — either mandatorily or voluntarily — it must continue to follow Ind AS for all subsequent financial years. There is no provision for reversal even if the company's net worth subsequently falls below the threshold or it delists from a stock exchange. This 'once Ind AS, always Ind AS' principle ensures continuity and comparability of financial reporting and prevents opportunistic switching between frameworks."
          }
        },
        {
          "@type": "Question",
          "name": "What changed under the Companies (Ind AS) Amendment Rules, 2025?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two amendment notifications were issued in 2025 — none changed the applicability roadmap. The first (G.S.R. 291(E) dated 7 May 2025) amended Ind AS 21 with guidance on currency exchangeability and exchange rate estimation. The second (G.S.R. 549(E) dated 13 August 2025) introduced changes across Ind AS 1 (current/non-current liability classification with covenants), Ind AS 7 and 107 (supplier finance disclosures), Ind AS 12 (OECD Pillar Two minimum tax exception), and technical updates to Ind AS 10, 28, 32, 101, 108, 109, 115, 116. Most provisions are effective from FY beginning 1 April 2025; some covenant-related amendments apply from 1 April 2026."
          }
        },
        {
          "@type": "Question",
          "name": "How many Indian Accounting Standards are currently in force?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "As of FY 2025-26, 39 Ind AS are in force. Originally 41 Ind AS were notified in February 2015. Two were superseded: Ind AS 11 (Construction Contracts) and Ind AS 18 (Revenue) were replaced by Ind AS 115 (Revenue from Contracts with Customers) effective 1 April 2018. Ind AS 17 (Leases) was replaced by Ind AS 116 (Leases) effective 1 April 2019. Ind AS standards are numbered following IFRS numbering — for example, Ind AS 109 corresponds to IFRS 9 (Financial Instruments). The list spans presentation, accounting policies, revenue, leases, financial instruments, business combinations, employee benefits, and disclosures."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my company crosses the net worth threshold mid-year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Net worth is tested as at the end of each financial year based on the audited standalone balance sheet. If the threshold of ₹250 crore (or ₹500 crore for Phase I) is first crossed in FY 2025-26, Ind AS becomes mandatory from FY 2026-27 onwards. The company must prepare comparative financial statements for FY 2025-26 also under Ind AS for the first Ind AS financial statements. Transition date is 1 April 2025 in this example. Once applicable, the company cannot revert even if net worth subsequently falls below the threshold."
          }
        },
        {
          "@type": "Question",
          "name": "Are foreign branches of Indian companies required to apply Ind AS?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Foreign operations of an Indian company — whether branches, subsidiaries, JVs or associates — may continue using their jurisdictional GAAP for standalone financial statements. They are not required to prepare separate Ind AS standalone financials. However, for the Indian parent's consolidated financial statements (CFS), these entities must report Ind AS-adjusted figures. This is per the Rule 4(1) proviso. Conversely, a branch of a foreign company in India is treated as an extension of the foreign parent and Ind AS does not apply to such branch standalone reporting in India."
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
        .verdict-card.mandatory { background: linear-gradient(135deg, #FEF2F2 0%, #FEE2E2 100%); border-left-color: var(--danger); }
        .verdict-card.continuing { background: linear-gradient(135deg, #FFF7ED 0%, #FED7AA 100%); border-left-color: var(--accent); }
        .verdict-card.voluntary { background: linear-gradient(135deg, #EFF6FF 0%, #DBEAFE 100%); border-left-color: var(--info); }
        .verdict-card.notreq { background: linear-gradient(135deg, #ECFDF5 0%, #D1FAE5 100%); border-left-color: var(--success); }
        .verdict-card.deferred { background: linear-gradient(135deg, #F5F3FF 0%, #EDE9FE 100%); border-left-color: #7C3AED; }
        .verdict-card.conditional { background: linear-gradient(135deg, #FFFBEB 0%, #FEF3C7 100%); border-left-color: var(--accent); }
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
        .notes-list { background: #F0FDFA; border: 1px solid #CCFBF1; border-radius: var(--radius); padding: 14px 18px; margin-bottom: 16px; }
        .notes-list-title { font-size: 13px; font-weight: 700; color: #115E59; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px; }
        .notes-list ul { list-style: none; padding: 0; margin: 0; }
        .notes-list li { font-size: 13px; color: #134E4A; padding: 6px 0 6px 22px; position: relative; line-height: 1.65; }
        .notes-list li::before { content: "▸"; position: absolute; left: 6px; color: var(--success); font-weight: 700; }
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
</style>

@section('content')
<nav class="toc-nav" aria-label="Page Navigation">
    <div class="toc-nav-inner">
        <a href="#checker">Checker</a>
        <a href="#how-it-works">How It Works</a>
        <a href="#roadmap">Roadmap</a>
        <a href="#networth">Net Worth</a>
        <a href="#amendments">2025 Updates</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>›</span>
    <a href="/tools/">Free Tools</a>
    <span>›</span>
    Ind AS Applicability Checker
</nav>

<header class="hero" id="checker">
    <div class="hero-meta">
        <span class="badge-updated">Last Updated: May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta, FCA</strong> · Founder, Patron Accounting LLP</span>
    </div>
    <h1>Ind AS Applicability Checker — <span>Indian Accounting Standards Roadmap</span> for Companies &amp; NBFCs</h1>
</header>

<div class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>Ind AS is mandatory for: (1) any company with net worth <strong>≥ ₹500 crore</strong> — Phase I; (2) all listed companies (mainboard) and unlisted companies with net worth <strong>≥ ₹250 crore</strong> — Phase II; (3) NBFCs with net worth <strong>≥ ₹500 crore</strong> from FY 2018-19; and (4) listed NBFCs and unlisted NBFCs with net worth ₹250–500 crore from FY 2019-20. Holding, subsidiary, JV and associate companies of any covered entity are also automatically covered. <strong>Banks and Insurance companies</strong> are deferred. <strong>SME Exchange</strong> listed companies and <strong>LLPs/non-corporates</strong> are excluded. Once Ind AS applies, reversal is not permitted.</p>
</div>

<div class="main-layout">
    <div class="content-col">

        <div class="calc-card">
            <h2>Ind AS Applicability Checker</h2>
            <p class="calc-intro">Answer six questions to determine whether Indian Accounting Standards (Ind AS) are mandatorily applicable to your entity, voluntarily available, or outside the framework. Logic is based on the Companies (Indian Accounting Standards) Rules, 2015 and all subsequent amendments through August 2025.</p>

            <noscript>
                <div class="noscript-box">This checker requires JavaScript. Please enable JavaScript or refer to the roadmap tables below.</div>
            </noscript>

            <div class="calc-section-title">Step 1 — Entity Type</div>
            <div class="calc-row">
                <div class="form-group" style="grid-column: 1 / -1;">
                    <label>What is your entity type?</label>
                    <div class="toggle-group stacked-mobile">
                        <button type="button" class="toggle-btn active" data-value="company" onclick="setEntityType(this)">Company<br><small style="font-weight:400;font-size:11px;opacity:0.7">Pvt Ltd / Public</small></button>
                        <button type="button" class="toggle-btn" data-value="nbfc" onclick="setEntityType(this)">NBFC<br><small style="font-weight:400;font-size:11px;opacity:0.7">RBI registered</small></button>
                        <button type="button" class="toggle-btn" data-value="bank" onclick="setEntityType(this)">Bank<br><small style="font-weight:400;font-size:11px;opacity:0.7">SCB / RRB / Coop</small></button>
                        <button type="button" class="toggle-btn" data-value="insurance" onclick="setEntityType(this)">Insurance<br><small style="font-weight:400;font-size:11px;opacity:0.7">Life / General</small></button>
                        <button type="button" class="toggle-btn" data-value="noncorp" onclick="setEntityType(this)">Non-Corp<br><small style="font-weight:400;font-size:11px;opacity:0.7">LLP / Firm / Trust</small></button>
                        <button type="button" class="toggle-btn" data-value="foreign" onclick="setEntityType(this)">Foreign<br><small style="font-weight:400;font-size:11px;opacity:0.7">Branch / Liaison</small></button>
                    </div>
                    <span class="helper">Ind AS applies only to corporates. LLPs, partnership firms, sole proprietorships, HUFs and trusts are outside the framework.</span>
                </div>
            </div>

            <div class="conditional-row show" id="row-listing">
                <div class="calc-section-title">Step 2 — Listing Status</div>
                <div class="calc-row">
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label>Is the entity listed or in process of listing on a stock exchange?</label>
                        <div class="toggle-group stacked-mobile">
                            <button type="button" class="toggle-btn active" data-value="unlisted" onclick="setListing(this)">Unlisted</button>
                            <button type="button" class="toggle-btn" data-value="listed" onclick="setListing(this)">Listed (Mainboard)</button>
                            <button type="button" class="toggle-btn" data-value="sme" onclick="setListing(this)">Listed (SME Exchange)</button>
                            <button type="button" class="toggle-btn" data-value="process" onclick="setListing(this)">In Process of Listing</button>
                        </div>
                        <span class="helper">Mainboard = NSE/BSE main exchange or any foreign stock exchange. SME Exchange = NSE Emerge / BSE SME platform — these are excluded from mandatory Ind AS.</span>
                    </div>
                </div>
            </div>

            <div class="conditional-row show" id="row-networth">
                <div class="calc-section-title">Step 3 — Net Worth</div>
                <div class="calc-row">
                    <div class="form-group">
                        <label for="netWorth">Highest Net Worth in Last 4 FYs (₹ in crore)</label>
                        <input type="number" id="netWorth" placeholder="e.g. 320" min="0" step="0.01" autocomplete="off" inputmode="decimal">
                        <span class="helper">Use audited standalone balance sheet. Net worth = Paid-up capital + Reserves (excl. revaluation) − Accumulated losses − Deferred expenditure.</span>
                    </div>
                    <div class="form-group">
                        <label>Crossed threshold for the first time?</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="historical" onclick="setThresholdTiming(this)">In a past FY</button>
                            <button type="button" class="toggle-btn" data-value="current" onclick="setThresholdTiming(this)">Current FY (2025-26)</button>
                        </div>
                        <span class="helper">Determines whether transition is current or already complete.</span>
                    </div>
                </div>
            </div>

            <div class="conditional-row show" id="row-group">
                <div class="calc-section-title">Step 4 — Group Company Test</div>
                <div class="calc-row">
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label>Is the entity a holding, subsidiary, joint venture or associate of any company already on Ind AS?</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="no" onclick="setGroup(this)">No / Not sure</button>
                            <button type="button" class="toggle-btn" data-value="yes" onclick="setGroup(this)">Yes — group with Ind AS entity</button>
                        </div>
                        <span class="helper">Per Rule 4(1)(iii)(b) second proviso — group entities of an Ind AS company are automatically covered, regardless of own size.</span>
                    </div>
                </div>
            </div>

            <div class="conditional-row show" id="row-prior">
                <div class="calc-section-title">Step 5 — Prior Adoption</div>
                <div class="calc-row">
                    <div class="form-group" style="grid-column: 1 / -1;">
                        <label>Has the entity already applied Ind AS in any prior financial year?</label>
                        <div class="toggle-group">
                            <button type="button" class="toggle-btn active" data-value="no" onclick="setPrior(this)">No</button>
                            <button type="button" class="toggle-btn" data-value="yes" onclick="setPrior(this)">Yes — already on Ind AS</button>
                        </div>
                        <span class="helper">Once Ind AS is adopted (mandatorily or voluntarily), reversal is prohibited under Rule 4(2).</span>
                    </div>
                </div>
            </div>

            <button class="btn-calculate" onclick="checkApplicability()">Check Ind AS Applicability →</button>

            <div class="result-section" id="resultSection">
                <div class="result-divider"></div>

                <div class="verdict-card" id="verdictCard">
                    <div class="verdict-label" id="verdictLabel">Verdict</div>
                    <div class="verdict-headline" id="verdictHeadline">—</div>
                    <div class="verdict-sub" id="verdictSub">—</div>
                </div>

                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="summary-label">Phase / Rule</div>
                        <div class="summary-value" id="resPhase">—</div>
                    </div>
                    <div class="summary-card">
                        <div class="summary-label">Effective FY</div>
                        <div class="summary-value" id="resEffective">—</div>
                    </div>
                    <div class="summary-card highlight">
                        <div class="summary-label">Standards Applicable</div>
                        <div class="summary-value" id="resStandards">—</div>
                    </div>
                </div>

                <div class="basis-block">
                    <div class="basis-label">Legal Basis</div>
                    <div class="basis-text" id="resBasis">—</div>
                </div>

                <div class="notes-list" id="notesList" style="display:none;">
                    <div class="notes-list-title">Compliance Notes</div>
                    <ul id="notesItems"></ul>
                </div>

                <div class="info-banner info" id="advisoryBanner" style="display:none;"></div>

                <button class="btn-reset" onclick="resetChecker()">↺ Reset Checker</button>
            </div>
        </div>

        <section class="content-section" id="how-it-works">
            <h2>How Ind AS Applicability Works in India</h2>
            <p>Indian Accounting Standards (Ind AS) are accounting standards converged with International Financial Reporting Standards (IFRS), notified by the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA)</a> under Section 133 of the Companies Act, 2013. They are formulated by the Accounting Standards Board of the <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a> in consultation with the <a href="https://nfra.gov.in/" target="_blank" rel="noopener">National Financial Reporting Authority (NFRA)</a>. Applicability is governed by the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Companies (Indian Accounting Standards) Rules, 2015</a> and amendments thereto. Sectoral exemptions and roadmaps for banks and NBFCs follow notifications from the <a href="https://www.rbi.org.in/" target="_blank" rel="noopener">Reserve Bank of India</a> and for insurers from the <a href="https://irdai.gov.in/" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India</a>.</p>

            <h3>The Three Tests of Applicability</h3>
            <ol>
                <li><strong>Entity type</strong> — Ind AS applies only to companies incorporated under the Companies Act. NBFCs follow a separate dated roadmap. Banks and insurers are governed by their sectoral regulators. LLPs, partnership firms, sole proprietorships and trusts are entirely outside the framework.</li>
                <li><strong>Quantitative threshold</strong> — Net worth of ₹500 crore (Phase I) or ₹250 crore (Phase II / NBFC Phase IV) computed on the audited standalone balance sheet. Listed companies on mainboard exchanges trigger Ind AS irrespective of net worth.</li>
                <li><strong>Group rule</strong> — Once any company is covered, its holding, subsidiary, joint venture and associate companies are automatically covered too — even if individually below threshold.</li>
            </ol>

            <h3>Once Ind AS, Always Ind AS</h3>
            <p>Rule 4(2) of the Companies (Indian Accounting Standards) Rules, 2015 makes Ind AS adoption irreversible. A company that crosses the net worth threshold and shifts to Ind AS cannot revert to Accounting Standards (AS) — even if its net worth subsequently falls below ₹250 crore or it delists from the exchange. The same applies to voluntary adopters. This principle ensures continuity and comparability of financial reporting and prevents opportunistic switching between frameworks.</p>

            <div class="callout">
                <p><strong>Important:</strong> Ind AS framework currently has <strong>39 standards</strong> in force. Originally 41 were notified in February 2015; Ind AS 11 (Construction Contracts) and Ind AS 18 (Revenue) were replaced by Ind AS 115 effective 1 April 2018, and Ind AS 17 (Leases) was replaced by Ind AS 116 effective 1 April 2019.</p>
            </div>
        </section>

        <section class="content-section" id="roadmap">
            <h2>Phase-Wise Ind AS Roadmap</h2>

            <h3>Corporate Roadmap (Companies other than Banks, NBFCs, Insurers)</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Phase</th><th>Effective From</th><th>Coverage</th><th>Net Worth Threshold</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Phase I</strong></td><td>FY 2016-17</td><td>All listed &amp; unlisted companies</td><td>≥ ₹500 crore</td></tr>
                    <tr><td><strong>Phase II</strong></td><td>FY 2017-18</td><td>All listed (mainboard) companies + Unlisted companies above threshold</td><td>≥ ₹250 crore but &lt; ₹500 crore (for unlisted); any net worth (for listed)</td></tr>
                    <tr><td><strong>Group rule</strong></td><td>Same FY as parent</td><td>Holding, subsidiary, JV, associate of covered entity</td><td>No threshold — automatic</td></tr>
                </tbody>
            </table>

            <h3>NBFC Roadmap</h3>
            <table class="rate-table">
                <thead>
                    <tr><th>Phase</th><th>Effective From</th><th>Coverage</th><th>Net Worth Threshold</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Phase III</strong></td><td>FY 2018-19</td><td>NBFCs (listed or unlisted)</td><td>≥ ₹500 crore</td></tr>
                    <tr><td><strong>Phase IV</strong></td><td>FY 2019-20</td><td>All listed NBFCs + Unlisted NBFCs above threshold</td><td>≥ ₹250 crore but &lt; ₹500 crore (for unlisted); any net worth (for listed)</td></tr>
                    <tr><td><strong>Group rule</strong></td><td>Same FY as parent</td><td>Holding, subsidiary, JV, associate of covered NBFC</td><td>No threshold — automatic</td></tr>
                </tbody>
            </table>

            <h3>Banks &amp; Insurance — Deferred</h3>
            <p>Scheduled Commercial Banks (excluding Regional Rural Banks) were originally notified to adopt Ind AS from 1 April 2018. Through a press release dated 5 April 2018 and notification dated 22 March 2019, the RBI deferred implementation indefinitely pending necessary amendments to the Banking Regulation Act. For Insurance companies, IRDAI was scheduled to notify Ind AS effective 1 April 2018 but implementation has been deferred pending IFRS 17 (Insurance Contracts) convergence. Both sectors continue with their respective regulator-prescribed accounting frameworks.</p>

            <h3>Excluded Entities</h3>
            <ul>
                <li><strong>SME Exchange listed companies</strong> — explicitly excluded under Rule 4(1)(iii)(b)(i). NSE Emerge and BSE SME listed entities continue with AS.</li>
                <li><strong>LLPs and partnership firms</strong> — outside the Companies Act framework, hence outside Ind AS scope.</li>
                <li><strong>Sole proprietorships, HUFs, AOPs, BOIs, Trusts</strong> — non-corporate entities; Ind AS does not apply.</li>
                <li><strong>Overseas subsidiaries of Indian companies</strong> — may continue jurisdictional GAAP for standalone purposes, but must report Ind AS-adjusted numbers for Indian parent's consolidation.</li>
                <li><strong>Branch offices of foreign companies</strong> — treated as extension of foreign parent; Ind AS does not apply to standalone branch reporting.</li>
            </ul>

            <div class="callout warn">
                <p><strong>Voluntary adoption window:</strong> Any company can voluntarily adopt Ind AS for any FY beginning on or after 1 April 2015 — irrespective of net worth, listing status or sector. However, once opted, Rule 4(2) prevents reversal. Voluntary adoption is common for IPO-bound companies, those seeking foreign listing, or PE/VC-backed entities preparing for global exits.</p>
            </div>
        </section>

        <section class="content-section" id="networth">
            <h2>Net Worth Calculation for Ind AS</h2>
            <p>Net worth is defined under Section 2(57) of the <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">Companies Act, 2013</a> and computed on the audited standalone balance sheet — not on consolidated financials. The threshold is checked as on 31 March 2014 (the original reference date) or any subsequent FY-end.</p>

            <div class="formula-box">
                <span class="label">Net Worth Formula</span><br>
                Net Worth = (Paid-up Share Capital + Reserves) − (Accumulated Losses + Deferred Expenditure + Misc. Expenses not written off)<br><br>
                <span class="label">Reserves Included</span> = Reserves created out of profits + Securities Premium Account + Capital Reserves from promoter contribution &amp; government grants<br><br>
                <span class="label">Reserves Excluded</span> = Revaluation Reserves + Reserves from write-back of depreciation + Reserves arising from amalgamation
            </div>

            <h3>Threshold Trigger Mechanism</h3>
            <p>If a company's net worth crosses ₹250 crore (or ₹500 crore) for the first time in any financial year, Ind AS becomes mandatory from the <strong>immediately following financial year</strong>. For example, if FY 2025-26 closing net worth crosses ₹250 crore, Ind AS applies from FY 2026-27 onwards. Comparative financial statements for FY 2025-26 must also be presented as per Ind AS in the first Ind AS financial statements, with the transition date being 1 April 2025.</p>

            <h3>Once-Met-Always-Applies Rule</h3>
            <p>Per Rule 3(2), once a company meets the net worth threshold in any FY, Ind AS applicability continues even if net worth subsequently falls. This is consistent with the broader irreversibility rule under Rule 4(2). The "highest net worth in the last 4 FYs" test is used to determine first-time applicability — companies cannot escape Ind AS by reducing net worth in later years through buy-backs or dividends.</p>

            <div class="callout warn">
                <p><strong>Practical tip:</strong> Net worth is computed using audited standalone numbers — not provisional or interim figures. Companies near the threshold should ensure annual audit closure timing accommodates Ind AS transition planning, since first-time adoption requires retrospective application of all standards as of the transition date.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need Help With Ind AS Transition or Compliance?</h3>
            <p>Patron's CAs handle Ind AS first-time adoption, transition adjustments, GAAP differences, IFRS-converged disclosures, statutory audits under Ind AS framework, and ongoing financial reporting compliance for companies and NBFCs.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Ind%20AS%20Applicability%20Checker.%20I%20need%20help%20with%20Ind%20AS%20transition%20and%20compliance.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." target="_blank" rel="noopener" class="cta-btn">Get CA Consultation →</a>
        </div>

        <section class="content-section" id="amendments">
            <h2>2025 Amendment Rules — What Changed</h2>
            <p>The MCA notified two sets of amendments in 2025. Neither changed the applicability roadmap — both updated specific Ind AS to align with IFRS developments.</p>

            <h3>First Amendment — G.S.R. 291(E) dated 7 May 2025</h3>
            <p>Amended <strong>Ind AS 21 (The Effects of Changes in Foreign Exchange Rates)</strong> by inserting paragraphs 8A–8B, 19A, 57A–57B and Appendix A. Provides detailed guidance on assessing whether a currency is exchangeable into another currency, estimating the spot exchange rate when not exchangeable, and required disclosures. Corresponding amendments made to Ind AS 101 paragraphs 31C and D27. Effective for annual reporting periods beginning on or after 1 April 2025.</p>

            <h3>Second Amendment — G.S.R. 549(E) dated 13 August 2025</h3>
            <ul>
                <li><strong>Ind AS 1 (Presentation):</strong> Clarifies classification of liabilities as current or non-current, particularly where covenants are involved. Right to defer settlement at reporting date governs classification.</li>
                <li><strong>Ind AS 7 &amp; Ind AS 107:</strong> New disclosure requirements for supplier finance arrangements (reverse factoring, supply chain finance) — improves transparency of impact on liabilities and cash flows.</li>
                <li><strong>Ind AS 12 (Income Taxes):</strong> Introduces exception for OECD Pillar Two global minimum tax — entities may forgo recognising or disclosing deferred tax related to Pillar Two, but must provide qualitative and quantitative disclosures of exposure.</li>
                <li><strong>Ind AS 116 (Leases):</strong> Enhanced transitional reliefs for first-time adopters with land and building lease components.</li>
                <li><strong>Ind AS 10:</strong> Replaces "provision" with "covenant" terminology for consistency, effective 1 April 2026.</li>
                <li><strong>Technical amendments:</strong> Cross-reference fixes in Ind AS 28, 32, 101, 108, 109, 115 — including replacement of references to superseded Ind AS 17 and 18.</li>
            </ul>

            <p>Most provisions are effective from 1 April 2025. The Ind AS 1 carve-out permitting non-current classification for waivers obtained after reporting date but before approval applies only for FY 2025-26 — from 1 April 2026, the carve-out is removed bringing India fully in line with IFRS.</p>

            <div class="callout">
                <p><strong>Source documents:</strong> Both amendment notifications are available on the <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA website</a>. Companies should review supplier finance programs, debt covenant compliance, and global minimum tax exposure (for multinationals) — and update accounting policy manuals to reflect the renumbered standard references.</p>
            </div>
        </section>

        <section class="content-section" id="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is Ind AS and who notifies it?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Indian Accounting Standards (Ind AS) are IFRS-converged accounting standards notified by the Ministry of Corporate Affairs (MCA) under Section 133 of the Companies Act, 2013. They are formulated by the Accounting Standards Board of ICAI in consultation with the National Financial Reporting Authority (NFRA). The Companies (Indian Accounting Standards) Rules, 2015 prescribe the phase-wise roadmap based on net worth, listing status and sector. Currently 39 Ind AS are in force after Ind AS 11 and Ind AS 18 were replaced by Ind AS 116 and Ind AS 115 respectively.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Which companies must mandatorily apply Ind AS in FY 2026-27?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Mandatory Ind AS applicability covers: (1) all companies with net worth of ₹500 crore or more — Phase I, FY 2016-17 onwards; (2) all listed companies on a mainboard exchange (in India or abroad), plus unlisted companies with net worth ₹250–500 crore — Phase II, FY 2017-18 onwards; (3) NBFCs with net worth ≥ ₹500 crore — Phase III, FY 2018-19; and (4) listed NBFCs and unlisted NBFCs with net worth ₹250–500 crore — Phase IV, FY 2019-20. Holding, subsidiary, joint venture and associate companies of any covered entity are also automatically covered, regardless of own size.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How is net worth calculated for Ind AS applicability?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Net worth is computed under Section 2(57) of the Companies Act, 2013, based on the audited standalone balance sheet. It includes paid-up share capital and reserves created out of profits and securities premium. Excluded items: revaluation reserves, write-back of depreciation, amalgamation reserves, and miscellaneous expenditure not written off. Accumulated losses and deferred expenditure are deducted. The threshold is checked as on 31 March 2014 or any subsequent FY-end. If a company first crosses ₹250 crore or ₹500 crore in a later year, Ind AS applies from the immediately following financial year.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are LLPs and partnership firms required to follow Ind AS?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. The Companies (Indian Accounting Standards) Rules, 2015 apply only to companies incorporated under the Companies Act, 2013 or 1956. Limited Liability Partnerships (LLPs), partnership firms, sole proprietorships, HUFs, AOPs, BOIs and trusts are outside the mandatory scope. They follow Accounting Standards (AS) issued by ICAI as applicable to non-corporate entities (Level I to IV classification under the ICAI scheme). Voluntary Ind AS adoption is also not formally permitted for these entities under the current MCA framework.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are subsidiaries automatically covered if the parent is on Ind AS?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. Under Rule 4(1)(iii)(b) read with the second proviso of the Companies (Indian Accounting Standards) Rules, 2015, once any company is covered under the Ind AS roadmap (mandatorily or voluntarily), its holding, subsidiary, joint venture and associate companies must also comply with Ind AS — regardless of their individual net worth or listing status. This ensures consistent group-level financial reporting. Overseas subsidiaries of an Indian company may continue with their jurisdictional GAAP for standalone financials but must report Ind AS-adjusted numbers for consolidation.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a company voluntarily adopt Ind AS?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Yes. Rule 4(1)(i) of the Companies (Indian Accounting Standards) Rules, 2015 permits voluntary adoption of Ind AS for any financial year beginning on or after 1 April 2015. There is no minimum net worth or listing threshold for voluntary adoption. However, once a company opts for Ind AS voluntarily, reversal to previous AS is not permitted under Rule 4(2). The company must also prepare comparative financial statements as per Ind AS for the immediately preceding period. Voluntary adoption is common for companies preparing for IPO, foreign listing, or PE investment exit.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Is Ind AS applicable to companies listed on SME Exchange?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. Companies whose securities are listed (or in the process of being listed) on an SME Exchange are specifically excluded from mandatory Ind AS under Rule 4(1)(iii)(b)(i) of the Companies (Indian Accounting Standards) Rules, 2015. SME Exchange has the same meaning as in Chapter XB of the SEBI (ICDR) Regulations — covering NSE Emerge and BSE SME platforms. These companies follow Accounting Standards under the Companies (Accounting Standards) Rules, 2021. They may, however, voluntarily adopt Ind AS. If they migrate to the mainboard, Ind AS becomes mandatory from the FY of migration onwards.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What is the status of Ind AS for Banks and Insurance companies?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Scheduled Commercial Banks (excluding Regional Rural Banks) were originally required to adopt Ind AS from 1 April 2018. RBI deferred this to 1 April 2019 via press release dated 5 April 2018, and subsequently postponed implementation indefinitely through notification dated 22 March 2019, pending necessary legislative amendments to the Banking Regulation Act. For Insurance companies, IRDAI was to notify a separate set of Ind AS effective 1 April 2018 but implementation has been deferred pending IFRS 17 (Insurance Contracts) convergence. Both sectors continue with their respective regulator-prescribed accounting frameworks.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Can a company revert to old Accounting Standards after adopting Ind AS?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">No. Rule 4(2) of the Companies (Indian Accounting Standards) Rules, 2015 categorically states that once a company starts following Ind AS — either mandatorily or voluntarily — it must continue to follow Ind AS for all subsequent financial years. There is no provision for reversal even if the company's net worth subsequently falls below the threshold or it delists from a stock exchange. This 'once Ind AS, always Ind AS' principle ensures continuity and comparability of financial reporting and prevents opportunistic switching between frameworks during favourable or unfavourable years.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What changed under the Companies (Ind AS) Amendment Rules, 2025?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Two amendment notifications were issued in 2025 — none changed the applicability roadmap. The first (G.S.R. 291(E) dated 7 May 2025) amended Ind AS 21 with guidance on currency exchangeability and exchange rate estimation. The second (G.S.R. 549(E) dated 13 August 2025) introduced changes across Ind AS 1 (current/non-current liability classification with covenants), Ind AS 7 and 107 (supplier finance disclosures), Ind AS 12 (OECD Pillar Two minimum tax exception), and technical updates to Ind AS 10, 28, 32, 101, 108, 109, 115, 116. Most provisions effective from FY beginning 1 April 2025; some covenant-related amendments apply from 1 April 2026.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>How many Indian Accounting Standards are currently in force?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">As of FY 2025-26, 39 Ind AS are in force. Originally 41 Ind AS were notified in February 2015. Two were superseded: Ind AS 11 (Construction Contracts) and Ind AS 18 (Revenue) were replaced by Ind AS 115 (Revenue from Contracts with Customers) effective 1 April 2018. Ind AS 17 (Leases) was replaced by Ind AS 116 (Leases) effective 1 April 2019. Ind AS standards are numbered following IFRS numbering — for example, Ind AS 109 corresponds to IFRS 9 (Financial Instruments). The list spans presentation, accounting policies, revenue, leases, financial instruments, business combinations, employee benefits, and disclosures.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>What happens if my company crosses the net worth threshold mid-year?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Net worth is tested as at the end of each financial year based on the audited standalone balance sheet — not interim or provisional figures. If the threshold of ₹250 crore (or ₹500 crore for Phase I) is first crossed in FY 2025-26, Ind AS becomes mandatory from FY 2026-27 onwards. The company must prepare comparative financial statements for FY 2025-26 also under Ind AS for the first Ind AS financial statements. Transition date is 1 April 2025 in this example. Once applicable, the company cannot revert even if net worth subsequently falls below the threshold.</div></div></div>

            <div class="faq-item"><button class="faq-question" onclick="toggleFaq(this)"><span>Are foreign branches of Indian companies required to apply Ind AS?</span><span class="faq-icon">+</span></button><div class="faq-answer"><div class="faq-answer-inner">Foreign operations of an Indian company — whether branches, subsidiaries, JVs or associates — may continue using their jurisdictional GAAP for standalone financial statements. They are not required to prepare separate Ind AS standalone financials. However, for the Indian parent's consolidated financial statements (CFS), these entities must report Ind AS-adjusted figures. This is per the Rule 4(1) proviso. Conversely, a branch of a foreign company in India is treated as an extension of the foreign parent and Ind AS does not apply to such branch standalone reporting in India.</div></div></div>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>Ind AS Transition &amp; Audit Support</h3>
            <p>Patron's CAs handle first-time adoption, transition adjustments, GAAP differences, and Ind AS statutory audits.</p>
            <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20Ind%20AS%20Applicability%20Checker.%20I%20need%20help%20with%20Ind%20AS%20transition%20and%20financial%20reporting.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." target="_blank" rel="noopener" class="cta-btn">Get Expert Help →</a>
        </div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/statutory-audit" class="sidebar-link">Statutory Audit Services <span class="arrow">→</span></a>
            <a href="/internal-audit" class="sidebar-link">Internal Audit Services <span class="arrow">→</span></a>
            <a href="/accounting-services" class="sidebar-link">Online Accountant Service <span class="arrow">→</span></a>
            <a href="/private-limited-company-compliance" class="sidebar-link">Private Limited Compliance <span class="arrow">→</span></a>
            <a href="/net-worth-certificate" class="sidebar-link">Net Worth Certificate <span class="arrow">→</span></a>
            <a href="/public-company-registration" class="sidebar-link">Public Company Registration <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/roc-filing-due-date-calendar" class="sidebar-link">ROC Filing Due Date Calendar <span class="arrow">→</span></a>
            <a href="/tools/business-structure-comparison" class="sidebar-link">Business Structure Comparison <span class="arrow">→</span></a>
            <a href="/tools/startup-india-eligibility-checker" class="sidebar-link">Startup India Eligibility <span class="arrow">→</span></a>
            <a href="/tools/depreciation-calculator" class="sidebar-link">Depreciation Calculator <span class="arrow">→</span></a>
            <a href="/tools/advance-tax-calculator" class="sidebar-link">Advance Tax Calculator <span class="arrow">→</span></a>
            <a href="/tools/ais-reconciliation-tool" class="sidebar-link">AIS Reconciliation Tool <span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/annual-compliance-requirements-for-companies-in-india" class="sidebar-link">Annual Compliance Requirements <span class="arrow">→</span></a>
            <a href="/blog/company-annual-filing-services-a-complete-guide-to-roc-filing-for-private-limited-companies-and-llps" class="sidebar-link">ROC Filing — Complete Guide <span class="arrow">→</span></a>
            <a href="/blog/understanding-holding-and-subsidiary-companies-a-complete-guide" class="sidebar-link">Holding &amp; Subsidiary Companies <span class="arrow">→</span></a>
        </div>

    </aside>
</div>

<div class="office-strip">
    <div class="offices">Pune &nbsp;|&nbsp; Mumbai &nbsp;|&nbsp; Delhi &nbsp;|&nbsp; Gurugram</div>
    <span class="trust">25,000+ Businesses Trust Us</span>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
    // ========== STATE ==========
    const state = {
        entityType: 'company',
        listing: 'unlisted',
        netWorth: 0,
        thresholdTiming: 'historical',
        groupCompany: 'no',
        priorAdoption: 'no'
    };

    // ========== TOGGLE HELPERS ==========
    function activateBtn(btn, key) {
        const el = btn.closest('.toggle-btn') || btn;
        state[key] = el.dataset.value;
        el.parentElement.querySelectorAll('.toggle-btn').forEach(b => b.classList.remove('active'));
        el.classList.add('active');
    }

    function setEntityType(btn) {
        activateBtn(btn, 'entityType');
        toggleConditionalRows();
    }
    function setListing(btn) { activateBtn(btn, 'listing'); }
    function setThresholdTiming(btn) { activateBtn(btn, 'thresholdTiming'); }
    function setGroup(btn) { activateBtn(btn, 'groupCompany'); }
    function setPrior(btn) { activateBtn(btn, 'priorAdoption'); }

    // ========== CONDITIONAL ROW VISIBILITY ==========
    function toggleConditionalRows() {
        const rowListing = document.getElementById('row-listing');
        const rowNetworth = document.getElementById('row-networth');
        const rowGroup = document.getElementById('row-group');
        const rowPrior = document.getElementById('row-prior');

        const t = state.entityType;
        // Listing & net worth & group only relevant for company and NBFC
        if (t === 'company' || t === 'nbfc') {
            rowListing.classList.add('show');
            rowNetworth.classList.add('show');
            rowGroup.classList.add('show');
            rowPrior.classList.add('show');
        } else {
            rowListing.classList.remove('show');
            rowNetworth.classList.remove('show');
            rowGroup.classList.remove('show');
            // Prior adoption still relevant for foreign (could be Ind AS adjusted reporting)
            if (t === 'foreign') {
                rowPrior.classList.add('show');
            } else {
                rowPrior.classList.remove('show');
            }
        }
    }

    // ========== CORE LOGIC ==========
    function checkApplicability() {
        // Read net worth
        const nwInput = document.getElementById('netWorth');
        state.netWorth = parseFloat(nwInput && nwInput.value) || 0;

        const result = computeApplicability();
        renderResult(result);

        const rs = document.getElementById('resultSection');
        rs.classList.add('visible');
        setTimeout(() => { rs.scrollIntoView({ behavior: 'smooth', block: 'start' }); }, 100);
    }

    function computeApplicability() {
        const t = state.entityType;
        const listing = state.listing;
        const nw = state.netWorth;
        const group = state.groupCompany === 'yes';
        const prior = state.priorAdoption === 'yes';
        const timing = state.thresholdTiming;

        // ============ NON-CORPORATE ============
        if (t === 'noncorp') {
            return {
                cls: 'notreq',
                label: 'Outside Framework',
                headline: 'Ind AS Not Applicable',
                sub: 'Ind AS applies only to companies incorporated under the Companies Act',
                phase: 'N/A',
                effective: 'N/A',
                standards: 'AS framework',
                basis: 'Ind AS applies only to companies incorporated under the Companies Act, 2013 (or 1956). Limited Liability Partnerships (LLPs), partnership firms, sole proprietorships, HUFs, trusts, AOPs and BOIs are outside the scope of the Companies (Indian Accounting Standards) Rules, 2015. They follow Accounting Standards (AS) issued by ICAI as applicable to non-corporate entities under the Level I-IV classification.',
                notes: [
                    'Voluntary adoption of Ind AS is not formally permitted for non-corporate entities under the current MCA framework.',
                    'LLPs follow ICAI Accounting Standards based on size criteria (turnover, borrowings, employees).',
                    'For converting an LLP/partnership to a private limited company, Ind AS may become applicable if the resulting company crosses thresholds.'
                ],
                advisory: 'If you are planning to incorporate as a private/public limited company, the Ind AS applicability test will need to be re-run post incorporation.'
            };
        }

        // ============ BANKS ============
        if (t === 'bank') {
            return {
                cls: 'deferred',
                label: 'Deferred Indefinitely',
                headline: 'Ind AS Not Currently Applicable',
                sub: 'RBI has deferred Ind AS implementation for banks indefinitely',
                phase: 'Banking Roadmap',
                effective: 'Deferred',
                standards: 'RBI framework',
                basis: 'Scheduled Commercial Banks (excluding Regional Rural Banks) were originally required to adopt Ind AS from 1 April 2018. RBI deferred this to 1 April 2019 via press release dated 5 April 2018, and subsequently postponed implementation indefinitely through notification dated 22 March 2019, pending necessary legislative amendments to the Banking Regulation Act. Banks currently follow RBI\'s prescribed accounting framework under the Third Schedule to the Banking Regulation Act, 1949.',
                notes: [
                    'Cooperative banks and Regional Rural Banks (RRBs) follow separate frameworks under their respective regulations.',
                    'RBI has issued operational guidelines and proforma Ind AS financial statements for banks to prepare for eventual transition.',
                    'Once notified, Ind AS implementation for banks is expected to follow a phased approach similar to corporates.'
                ],
                advisory: 'Banks should continue monitoring RBI notifications. Ind AS readiness exercises (proforma Ind AS reporting to RBI) remain ongoing for Public Sector and large Private Sector banks.'
            };
        }

        // ============ INSURANCE ============
        if (t === 'insurance') {
            return {
                cls: 'deferred',
                label: 'Deferred Pending IFRS 17',
                headline: 'Ind AS Not Currently Applicable',
                sub: 'IRDAI implementation deferred pending IFRS 17 convergence',
                phase: 'Insurance Roadmap',
                effective: 'Deferred',
                standards: 'IRDAI framework',
                basis: 'IRDAI was to notify a separate set of Ind AS for Insurance companies effective 1 April 2018. Implementation has been deferred pending IFRS 17 (Insurance Contracts) convergence. Insurance companies continue to follow IRDAI\'s prescribed accounting standards under the Insurance Regulatory and Development Authority of India (Preparation of Financial Statements and Auditor\'s Report of Insurance Companies) Regulations, 2002.',
                notes: [
                    'IFRS 17 became effective globally from 1 January 2023 — IRDAI has been studying convergence options.',
                    'Life and General insurance companies are both covered by the deferred Ind AS roadmap.',
                    'Standalone Health Insurance and Reinsurance companies follow the same regulatory framework.'
                ],
                advisory: 'Insurance entities should monitor IRDAI circulars and Exposure Drafts on Ind AS 117 (the Indian equivalent of IFRS 17).'
            };
        }

        // ============ FOREIGN COMPANY / BRANCH ============
        if (t === 'foreign') {
            const cfsImplication = prior
                ? 'Since you indicated prior Ind AS adoption, the entity must continue applying Ind AS — Rule 4(2) irreversibility applies even to foreign-incorporated entities that voluntarily adopted Ind AS.'
                : 'A branch office of a foreign company is treated as an extension of the foreign parent — the branch may continue using its jurisdictional accounting standards for standalone purposes.';

            return {
                cls: 'conditional',
                label: 'Conditional / CFS Only',
                headline: prior ? 'Continue Ind AS Reporting' : 'Standalone — Foreign GAAP Allowed',
                sub: prior ? 'Once adopted, Ind AS reversal is prohibited' : 'But Ind AS-adjusted numbers required for Indian parent CFS',
                phase: prior ? 'Continuing' : 'Conditional',
                effective: prior ? 'Continuing' : 'CFS only',
                standards: prior ? '39 Ind AS' : 'Foreign GAAP / IFRS',
                basis: cfsImplication + ' However, where the foreign entity is a holding, subsidiary, JV or associate of an Indian Ind AS company, it must report Ind AS-adjusted numbers to the Indian parent for consolidated financial statement (CFS) preparation, per the proviso to Rule 4(1) of the Companies (Indian Accounting Standards) Rules, 2015.',
                notes: [
                    'Branch offices of foreign companies in India follow foreign parent\'s GAAP for India operations standalone reporting.',
                    'Liaison offices do not prepare commercial financial statements requiring Ind AS — they file activity certificates with RBI.',
                    'Project offices follow standard accounting per nature of activities and parent\'s reporting requirements.',
                    'For CFS purposes, group reporting under Ind AS is mandatory if Indian parent is on Ind AS.'
                ],
                advisory: 'If acting as Indian parent\'s overseas subsidiary, Ind AS-adjusted P&L and balance sheet (with reconciliation to local GAAP) must be furnished annually for consolidation purposes.'
            };
        }

        // ============ ALREADY ADOPTED — IRREVERSIBILITY ============
        if (prior) {
            return {
                cls: 'continuing',
                label: 'Already on Ind AS — Continuing',
                headline: 'Continue Applying Ind AS',
                sub: 'Reversal to Accounting Standards is not permitted',
                phase: 'Continuing application',
                effective: 'All future FYs',
                standards: '39 Ind AS',
                basis: 'Per Rule 4(2) of the Companies (Indian Accounting Standards) Rules, 2015, once a company starts following Ind AS — either mandatorily (because it crossed a threshold) or voluntarily — it must continue to follow Ind AS for all subsequent financial years. There is no provision for reversal even if net worth falls below threshold or the company delists. This irreversibility is the "once Ind AS, always Ind AS" principle.',
                notes: [
                    'All subsequent Ind AS amendments (including 2025 Amendment Rules) automatically apply.',
                    'Holding, subsidiary, JV and associate companies remain covered as long as the parent applies Ind AS.',
                    'Ongoing statutory audit must be conducted under Ind AS framework with appropriate disclosures.',
                    'Watch the 2025 amendments to Ind AS 21, 1, 7, 12 effective FY 2025-26.'
                ],
                advisory: 'Ensure first-time adoption (Ind AS 101) was correctly executed in the year of transition. Any errors in retrospective application can compound annually.'
            };
        }

        // ============ COMPANY (non-NBFC) ============
        if (t === 'company') {
            // SME Exchange — explicit exclusion
            if (listing === 'sme') {
                return {
                    cls: 'notreq',
                    label: 'SME Exchange Excluded',
                    headline: 'Ind AS Not Mandatory',
                    sub: 'SME Exchange listed companies are excluded; voluntary adoption available',
                    phase: 'Excluded — Rule 4(1)(iii)(b)(i)',
                    effective: 'Optional',
                    standards: 'AS framework',
                    basis: 'Companies whose securities are listed (or in the process of being listed) on an SME Exchange are specifically excluded from mandatory Ind AS under Rule 4(1)(iii)(b)(i) of the Companies (Indian Accounting Standards) Rules, 2015. SME Exchange has the same meaning as in Chapter XB of the SEBI (ICDR) Regulations, 2009 — covering NSE Emerge and BSE SME platforms. The company continues with Accounting Standards under the Companies (Accounting Standards) Rules, 2021.',
                    notes: [
                        'Voluntary adoption of Ind AS is permitted from any FY beginning on or after 1 April 2015.',
                        'If the company migrates from SME platform to mainboard, Ind AS becomes mandatory from the FY of migration.',
                        'Group rule still applies — if a subsidiary or associate is on Ind AS due to mainboard listing, the SME-listed parent (if applicable) gets pulled in.',
                        'Once voluntarily adopted, reversal is not permitted under Rule 4(2).'
                    ],
                    advisory: 'Many SME platform companies voluntarily adopt Ind AS in preparation for mainboard migration to avoid sudden transition burden at IPO/listing-up stage.'
                };
            }

            // Group company rule — automatic coverage
            if (group) {
                return {
                    cls: 'mandatory',
                    label: 'Mandatory — Group Rule',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: 'Group company rule overrides individual size threshold',
                    phase: 'Group Rule — Rule 4(1)(iii)(b) 2nd proviso',
                    effective: 'Same FY as parent',
                    standards: '39 Ind AS',
                    basis: 'Once any company is covered under the Ind AS roadmap (mandatorily through Phase I/II or voluntarily), its holding, subsidiary, joint venture and associate companies must also comply with Ind AS — regardless of their individual net worth or listing status. This is per Rule 4(1)(iii)(b) read with the second proviso of the Companies (Indian Accounting Standards) Rules, 2015. The rule ensures consistent group-level financial reporting for consolidated financial statements.',
                    notes: [
                        'Effective FY is the same FY in which the parent first applied Ind AS — typically already past.',
                        'If joining the group later (e.g., new subsidiary acquired), Ind AS applies from the FY of becoming a related party.',
                        'Comparative figures for the prior period are required under Ind AS in the first Ind AS financial statements.',
                        'Once applied, the same irreversibility rule under Rule 4(2) prevents reversal.'
                    ],
                    advisory: 'Even if your standalone net worth is below threshold, group rule pulls you in. Plan transition exercise immediately if not already done.'
                };
            }

            // Phase I — net worth ≥ ₹500 cr
            if (nw >= 500) {
                const isCurrentTrigger = (timing === 'current');
                return {
                    cls: 'mandatory',
                    label: isCurrentTrigger ? 'Mandatory — First Trigger' : 'Mandatory — Phase I',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: 'Net worth threshold of ₹500 crore crossed',
                    phase: 'Phase I — Rule 4(1)(iii)(a)',
                    effective: isCurrentTrigger ? 'FY 2026-27 onwards (transition: 1 Apr 2025)' : 'FY 2016-17 onwards',
                    standards: '39 Ind AS',
                    basis: 'Phase I of the Ind AS roadmap — Rule 4(1)(iii)(a) of the Companies (Indian Accounting Standards) Rules, 2015. All listed and unlisted companies (other than banks, NBFCs and insurers) with net worth ≥ ₹500 crore in any of the relevant reference FYs must apply Ind AS from FY 2016-17. If the threshold is first crossed in a later year, Ind AS applies from the immediately following FY, with comparative information required for the preceding period.',
                    notes: [
                        '39 Indian Accounting Standards apply (after Ind AS 11/18 were replaced by Ind AS 116 and 115).',
                        'Holding, subsidiary, JV and associate companies are also automatically covered under the group rule.',
                        'First-time adoption under Ind AS 101 requires retrospective application as of the transition date.',
                        'Comparative period financial statements must also be presented under Ind AS in the first Ind AS year.',
                        '2025 Amendment Rules to Ind AS 21, 1, 7, 12, 116 apply automatically from FY 2025-26.'
                    ],
                    advisory: isCurrentTrigger
                        ? 'Plan transition immediately — engage CA for Ind AS 101 first-time adoption, opening balance sheet preparation, and audit committee briefing.'
                        : 'Continued compliance is mandatory. Ensure ongoing audit and disclosures under Ind AS framework.'
                };
            }

            // Phase II — listed (mainboard) or in process
            if (listing === 'listed' || listing === 'process') {
                return {
                    cls: 'mandatory',
                    label: 'Mandatory — Phase II (Listed)',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: 'Listed companies on mainboard exchanges — irrespective of net worth',
                    phase: 'Phase II — Rule 4(1)(iii)(b)(i)',
                    effective: 'FY 2017-18 onwards',
                    standards: '39 Ind AS',
                    basis: 'Phase II of the Ind AS roadmap — Rule 4(1)(iii)(b)(i) of the Companies (Indian Accounting Standards) Rules, 2015. All companies listed (or in the process of being listed) on a stock exchange in India or outside India — except SME Exchange — must apply Ind AS from FY 2017-18 onwards, irrespective of net worth.',
                    notes: [
                        'Listing on SME Exchange is excluded from this Phase II coverage.',
                        '"In process of listing" means draft offer document filed with SEBI/exchange.',
                        'If listing is on a foreign stock exchange (e.g., NYSE, LSE, SGX), Ind AS still applies.',
                        'Holding, subsidiary, JV and associate companies are also automatically covered.',
                        'Listed companies must file results in Ind AS format quarterly with stock exchanges.'
                    ],
                    advisory: 'IPO-bound companies should adopt Ind AS voluntarily before filing draft prospectus to avoid restating financials at the time of listing.'
                };
            }

            // Phase II — unlisted with NW ≥ 250 cr
            if (nw >= 250) {
                const isCurrentTrigger = (timing === 'current');
                return {
                    cls: 'mandatory',
                    label: isCurrentTrigger ? 'Mandatory — First Trigger' : 'Mandatory — Phase II',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: 'Net worth threshold of ₹250 crore crossed',
                    phase: 'Phase II — Rule 4(1)(iii)(b)(ii)',
                    effective: isCurrentTrigger ? 'FY 2026-27 onwards (transition: 1 Apr 2025)' : 'FY 2017-18 onwards',
                    standards: '39 Ind AS',
                    basis: 'Phase II of the Ind AS roadmap — Rule 4(1)(iii)(b)(ii) of the Companies (Indian Accounting Standards) Rules, 2015. Unlisted companies with net worth ≥ ₹250 crore but < ₹500 crore must apply Ind AS from FY 2017-18 onwards. If the threshold is first crossed in a later FY, Ind AS applies from the immediately following FY with comparative information for the preceding period.',
                    notes: [
                        '39 Indian Accounting Standards apply (after Ind AS 11/18 were replaced by Ind AS 116 and 115).',
                        'Holding, subsidiary, JV and associate companies are also automatically covered.',
                        'First-time adoption under Ind AS 101 requires retrospective application as of the transition date.',
                        'Once threshold is met, Rule 3(2) ensures continued applicability even if net worth subsequently falls.'
                    ],
                    advisory: isCurrentTrigger
                        ? 'Plan transition immediately — Ind AS 101 first-time adoption requires opening balance sheet at 1 April 2025 with full retrospective application.'
                        : 'Continued compliance is mandatory. Ensure 2025 amendments to Ind AS 21, 1, 7, 12 are applied for FY 2025-26 financial statements.'
                };
            }

            // Below all thresholds — voluntary available
            return {
                cls: 'voluntary',
                label: 'Voluntary Adoption Available',
                headline: 'Ind AS Not Mandatory',
                sub: 'Below ₹250 crore threshold and unlisted — voluntary adoption permitted',
                phase: 'Optional — Rule 4(1)(i)',
                effective: 'Any FY ≥ 1 Apr 2015',
                standards: 'AS / Ind AS (optional)',
                basis: 'The company\'s net worth is below ₹250 crore and it is not listed (or listed only on SME Exchange). Mandatory Ind AS does not apply. The company continues with Accounting Standards under the Companies (Accounting Standards) Rules, 2021. Rule 4(1)(i) of the Companies (Indian Accounting Standards) Rules, 2015 permits voluntary adoption of Ind AS for any FY beginning on or after 1 April 2015.',
                notes: [
                    'Voluntary adoption is irreversible per Rule 4(2) — once chosen, must continue.',
                    'If net worth crosses ₹250 crore in any subsequent FY, Ind AS becomes mandatory from the immediately following FY.',
                    'If listed on mainboard exchange or in process of listing, Phase II becomes triggered.',
                    'Comparative period financial statements must be prepared under Ind AS in the first Ind AS year of voluntary adoption.'
                ],
                advisory: 'Consider voluntary adoption if planning IPO in the next 2-3 years, raising international capital, or seeking PE/VC funding from global investors who prefer IFRS-converged reporting.'
            };
        }

        // ============ NBFC ============
        if (t === 'nbfc') {
            // Group rule
            if (group) {
                return {
                    cls: 'mandatory',
                    label: 'Mandatory — Group Rule',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: 'NBFC group company rule — covers regardless of individual size',
                    phase: 'NBFC Group Rule',
                    effective: 'Same FY as parent',
                    standards: '39 Ind AS',
                    basis: 'Holding, subsidiary, JV and associate companies of an NBFC already on the Ind AS roadmap (Phase III or IV) must also comply with Ind AS — regardless of their own net worth or listing status. This is per Rule 4(1)(iii)(b) read with the corresponding NBFC roadmap notification (G.S.R. 365(E) dated 30 March 2016).',
                    notes: [
                        'Effective FY is typically the same FY in which the parent NBFC first applied Ind AS.',
                        'NBFC subsidiaries of corporate Ind AS parents are also covered.',
                        'Once applied, irreversibility under Rule 4(2) ensures continued applicability.',
                        'Watch RBI sectoral regulations on financial instruments classification (Ind AS 109 ECL model).'
                    ],
                    advisory: 'NBFC-specific Ind AS implications include expected credit loss (ECL) under Ind AS 109 and revenue recognition timing differences. Engage specialist CA early.'
                };
            }

            // Phase III — NW ≥ 500 cr
            if (nw >= 500) {
                const isCurrentTrigger = (timing === 'current');
                return {
                    cls: 'mandatory',
                    label: isCurrentTrigger ? 'Mandatory — First Trigger' : 'Mandatory — NBFC Phase III',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: 'NBFC net worth ≥ ₹500 crore — Phase III',
                    phase: 'NBFC Phase III',
                    effective: isCurrentTrigger ? 'FY 2026-27 onwards (transition: 1 Apr 2025)' : 'FY 2018-19 onwards',
                    standards: '39 Ind AS',
                    basis: 'NBFC Roadmap Phase I — Companies (Indian Accounting Standards) Amendment Rules, 2016 (G.S.R. 365(E) dated 30 March 2016). NBFCs with net worth ≥ ₹500 crore (audited financials of any of the three preceding FYs from 2015-16 to 2017-18) must apply Ind AS from FY 2018-19. If threshold is first crossed in a later year, Ind AS applies from the immediately following FY.',
                    notes: [
                        'NBFCs follow Division III of Schedule III to the Companies Act for Ind AS-compliant financial statements format.',
                        'Ind AS 109 (Financial Instruments) is the most impactful — requires Expected Credit Loss (ECL) provisioning.',
                        'RBI prudential norms continue alongside Ind AS — both sets of disclosures may be required.',
                        'Holding, subsidiary, JV and associate companies are automatically covered.',
                        '2025 Amendment Rules apply automatically from FY 2025-26.'
                    ],
                    advisory: isCurrentTrigger
                        ? 'NBFC transition is more complex than corporate transition due to ECL modelling. Engage CA with Ind AS 109 expertise immediately.'
                        : 'Ongoing compliance includes ECL recalculation each reporting period and disclosure of provisioning differences vs RBI norms.'
                };
            }

            // Phase IV — listed (any) or unlisted with NW ≥ 250 cr
            if (listing === 'listed' || listing === 'process' || nw >= 250) {
                const isListed = (listing === 'listed' || listing === 'process');
                const isCurrentTrigger = (timing === 'current');
                return {
                    cls: 'mandatory',
                    label: 'Mandatory — NBFC Phase IV',
                    headline: 'Ind AS Mandatorily Applicable',
                    sub: isListed ? 'Listed NBFC — Phase IV' : 'NBFC net worth ₹250–500 crore — Phase IV',
                    phase: 'NBFC Phase IV',
                    effective: isCurrentTrigger ? 'FY 2026-27 onwards' : 'FY 2019-20 onwards',
                    standards: '39 Ind AS',
                    basis: 'NBFC Roadmap Phase II — All listed NBFCs (or in process of listing on a stock exchange in India or abroad) AND unlisted NBFCs with net worth ≥ ₹250 crore but < ₹500 crore must apply Ind AS from FY 2019-20 onwards. SME Exchange listed NBFCs are excluded.',
                    notes: [
                        'NBFC Phase IV covers all listed NBFCs irrespective of net worth.',
                        'Unlisted NBFCs above ₹250 crore but below ₹500 crore are also covered.',
                        'Holding, subsidiary, JV and associate companies are automatically covered.',
                        'Ind AS 109 ECL modelling is the core implementation challenge for NBFCs.'
                    ],
                    advisory: 'Listed NBFCs must publish quarterly results in Ind AS format. Ensure quarterly review processes accommodate ECL model run timelines.'
                };
            }

            // NBFC below thresholds and unlisted
            return {
                cls: 'voluntary',
                label: 'Voluntary Adoption Available',
                headline: 'Ind AS Not Mandatory for NBFC',
                sub: 'NBFC below ₹250 crore and unlisted — voluntary available',
                phase: 'Optional — Rule 4(1)(i)',
                effective: 'Any FY ≥ 1 Apr 2015',
                standards: 'AS / Ind AS (optional)',
                basis: 'The NBFC has net worth below ₹250 crore and is not listed (or listed only on SME Exchange). Mandatory Ind AS does not apply. The NBFC continues with Accounting Standards under the Companies (Accounting Standards) Rules, 2021 alongside RBI prudential norms.',
                notes: [
                    'Voluntary adoption available from any FY beginning on or after 1 April 2015.',
                    'If NBFC\'s net worth crosses ₹250 crore in any FY, Ind AS becomes mandatory from the next FY.',
                    'If NBFC gets listed on mainboard, Ind AS becomes mandatory under NBFC Phase IV.',
                    'Once voluntarily adopted, reversal is not permitted.'
                ],
                advisory: 'Consider voluntary adoption if planning to raise NCDs from foreign investors, going for IPO, or growing toward the ₹250 crore threshold.'
            };
        }

        // Fallback
        return {
            cls: 'notreq',
            label: 'Indeterminate',
            headline: 'Please review inputs',
            sub: 'Unable to determine applicability with given inputs',
            phase: '—',
            effective: '—',
            standards: '—',
            basis: 'Please ensure entity type and other relevant fields are filled.',
            notes: [],
            advisory: ''
        };
    }

    // ========== RENDER ==========
    function renderResult(r) {
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + r.cls;
        document.getElementById('verdictLabel').textContent = r.label;
        document.getElementById('verdictHeadline').textContent = r.headline;
        document.getElementById('verdictSub').textContent = r.sub;
        document.getElementById('resPhase').textContent = r.phase;
        document.getElementById('resEffective').textContent = r.effective;
        document.getElementById('resStandards').textContent = r.standards;
        document.getElementById('resBasis').textContent = r.basis;

        const notesList = document.getElementById('notesList');
        const notesItems = document.getElementById('notesItems');
        if (r.notes && r.notes.length > 0) {
            notesList.style.display = 'block';
            notesItems.innerHTML = r.notes.map(n => '<li>' + escapeHtml(n) + '</li>').join('');
        } else {
            notesList.style.display = 'none';
        }

        const advisory = document.getElementById('advisoryBanner');
        if (r.advisory) {
            advisory.style.display = 'block';
            advisory.innerHTML = '<strong>Advisory:</strong> ' + escapeHtml(r.advisory);
        } else {
            advisory.style.display = 'none';
        }
    }

    function escapeHtml(s) {
        if (!s) return '';
        return String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    }

    // ========== RESET ==========
    function resetChecker() {
        // Reset state
        state.entityType = 'company';
        state.listing = 'unlisted';
        state.netWorth = 0;
        state.thresholdTiming = 'historical';
        state.groupCompany = 'no';
        state.priorAdoption = 'no';

        // Reset toggles to first option active
        document.querySelectorAll('.toggle-group').forEach(g => {
            const btns = g.querySelectorAll('.toggle-btn');
            btns.forEach(b => b.classList.remove('active'));
            if (btns[0]) btns[0].classList.add('active');
        });

        // Reset net worth input
        const nw = document.getElementById('netWorth');
        if (nw) nw.value = '';

        // Reset visibility
        toggleConditionalRows();

        // Hide result section
        document.getElementById('resultSection').classList.remove('visible');

        document.querySelector('.calc-card').scrollIntoView({behavior: 'smooth', block: 'start'});
    }

    // ========== FAQ ACCORDION ==========
    function toggleFaq(e) {
        const btn = e.closest ? (e.closest('.faq-question') || e) : e;
        const item = btn.closest('.faq-item');
        if (!item) return;
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
        if (!isOpen) item.classList.add('open');
    }

    // ========== ENTER KEY ==========
    const nwInput = document.getElementById('netWorth');
    if (nwInput) {
        nwInput.addEventListener('keydown', e => { if (e.key === 'Enter') checkApplicability(); });
    }

    // ========== SCROLL SPY ==========
    const sections = document.querySelectorAll('[id]');
    const navLinks = document.querySelectorAll('.toc-nav a');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => {
            const top = s.offsetTop - 100;
            if (window.pageYOffset >= top) current = s.getAttribute('id');
        });
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + current);
        });
    });

    // ========== INITIAL VISIBILITY ==========
    toggleConditionalRows();
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
