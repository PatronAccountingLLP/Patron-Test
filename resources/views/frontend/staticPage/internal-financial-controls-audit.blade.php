
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>Internal Financial Controls Audit - Sec 143</title>
    <meta name="description" content="Complete IFC audit guide under Sec 143(3)(i) - COSO 2013 framework, RCM, Test of Design and Operating Effectiveness, common deficiencies, Patron methodology.">
    <link rel="canonical" href="/internal-financial-controls-audit">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Internal Financial Controls Audit 2026 - Sec 143 | Patron">
    <meta property="og:description" content="Complete IFC audit guide under Sec 143(3)(i) - COSO 2013 framework, RCM, Test of Design and Operating Effectiveness, common deficiencies, Patron methodology.">
    <meta property="og:url" content="/internal-financial-controls-audit">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/internal-financial-controls-audit-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Internal Financial Controls Audit 2026 - Sec 143 | Patron">
    <meta name="twitter:description" content="Complete IFC audit guide under Sec 143(3)(i) - COSO 2013 framework, RCM, Test of Design and Operating Effectiveness, common deficiencies, Patron methodology.">
    <meta name="twitter:image" content="/images/internal-financial-controls-audit-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/internal-financial-controls-audit/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
        { "@type": "ListItem", "position": 3, "name": "Internal Financial Controls Audit", "item": "/internal-financial-controls-audit" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/internal-financial-controls-audit/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is internal financial controls audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Internal Financial Controls (IFC) audit under Section 143(3)(i) of the Companies Act 2013 is the statutory auditor's reasoned opinion on whether the company has adequate internal financial controls with reference to financial statements in place and whether such controls are operating effectively. The audit follows the COSO Internal Control - Integrated Framework (2013) with five components and seventeen principles, supported by ICAI Guidance Note on Audit of IFC over Financial Reporting (14 September 2015) and Implementation Guide (Revised 2018). The IFC audit report is Annexure B to the main audit report and is filed with Form AOC-4."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 143(3)(i) of the Companies Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 143(3)(i) of the Companies Act 2013 is the statutory provision requiring the auditor to state in the audit report whether the company has adequate internal financial controls with reference to financial statements (IFC-FR) in place and the operating effectiveness of such controls. Effective for audits of financial years commencing on or after 1 April 2015 (deferred to FY ending 31 March 2016). The scope is narrower than Section 134(5)(e) which covers a wider IFC definition including business controls; Section 143(3)(i) is restricted to controls with financial reporting impact only."
          }
        },
        {
          "@type": "Question",
          "name": "Is IFC applicable to private limited companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes with a conditional exemption. MCA Notification G.S.R. 583(E) dated 13 June 2017 exempts Pvt Ltd companies from Section 143(3)(i) reporting if they meet one of - OPC under Section 2(62), Small Company under Section 2(85), turnover does not exceed Rs 50 crore as per latest audited financial statement, or aggregate borrowings from banks, financial institutions, or any body corporate do not exceed Rs 25 crore at any point during the financial year. Critically, the exemption stands voided if the company has defaulted in filing financial statements under Section 137 (AOC-4) or annual return under Section 92 (MGT-7) with the Registrar of Companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is the COSO framework?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The COSO Internal Control - Integrated Framework (2013) is the globally adopted framework for designing and evaluating internal control systems, published by the Committee of Sponsoring Organizations of the Treadway Commission on 14 May 2013 replacing the 1992 framework. It contains five components - Control Environment, Risk Assessment, Control Activities, Information and Communication, Monitoring Activities - and seventeen explicit principles. For an internal control system to be effective under COSO 2013, each principle must be present and functioning and the five components must operate in an integrated manner. COSO is the foundation framework adopted in India for IFC reporting under Section 143(3)(i)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Section 143(3)(i) and Section 134(5)(e)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 143(3)(i) is the auditor's reporting requirement - restricted to IFC with reference to financial statements (IFC-FR), i.e. controls that have a financial reporting impact. Section 134(5)(e) is the Director Responsibility Statement requirement - covering a wider IFC definition including both business and financial controls (orderly and efficient conduct of business, safeguarding of assets, prevention and detection of frauds and errors, accuracy and completeness of accounting records, timely preparation of reliable financial information). The director's responsibility under Section 134(5)(e) applies even where the auditor's Section 143(3)(i) reporting is exempt."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Risk-Control-Matrix?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Risk-Control-Matrix (RCM) is the auditor's structured working file that maps each significant account balance and disclosure to the related financial-statement assertions (existence, completeness, accuracy, valuation, rights and obligations, presentation), the financial-reporting risks per assertion, and the management-implemented controls that address each risk. The RCM is the single source of truth for both Test of Design and Test of Operating Effectiveness. The audit program is structured around the RCM, with sample sizes calibrated to control frequency."
          }
        },
        {
          "@type": "Question",
          "name": "What is Test of Design and Test of Operating Effectiveness?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Test of Design (ToD) is the audit procedure to evaluate whether a control is suitably designed to prevent or detect material misstatements - typically performed through inquiry, observation, walkthrough of one or more transactions, and inspection of supporting evidence. Test of Operating Effectiveness (ToOE) is the audit procedure to evaluate whether the control operated as designed during the audit period - sample testing of multiple transactions across the period with sample size driven by control frequency (daily controls 25-60 samples, weekly 12-25, monthly 5-15, quarterly 3, annual 1 per ICAI Guidance Note). A control must pass both ToD and ToOE to be relied upon for the IFC opinion."
          }
        },
        {
          "@type": "Question",
          "name": "Does IFC reporting apply to consolidated financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - Section 129(4) of the Companies Act 2013 provides that provisions applicable to financial statements of a holding company apply mutatis mutandis to consolidated financial statements. IFC reporting under Section 143(3)(i) therefore applies to CFS as well. However it applies only for components that are companies under the Companies Act 2013. Where a component is an LLP, a foreign entity not subject to the Companies Act, or another vehicle, the parent auditor's CFS IFC opinion is limited to the parent-level entity controls, the consolidation controls, and the IFC of Companies Act component subsidiaries. Non-Act components are outside the CFS IFC scope."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/internal-financial-controls-audit/#service",
      "name": "Internal Financial Controls Audit Service - Section 143(3)(i)",
      "description": "Patron Accounting LLP's Internal Financial Controls audit service bundled within the statutory audit engagement under Section 143 of the Companies Act 2013 covering Section 143(3)(i) IFC with reference to financial statements (IFC-FR) opinion, Section 134(5)(e) Director Responsibility Statement IFC framework alignment, applicability determination under MCA Notification G.S.R. 583(E) dated 13 June 2017 for OPC under Section 2(62), Small Company under Section 2(85), and qualifying private limited companies (turnover up to Rs 50 crore as per latest audited financial statement OR aggregate borrowings from banks / financial institutions / body corporate up to Rs 25 crore at any point during financial year) conditional on no Section 137 (Form AOC-4) or Section 92 (Form MGT-7) ROC filing default, COSO Internal Control - Integrated Framework 2013 mapping across all five components (Control Environment, Risk Assessment, Control Activities, Information and Communication, Monitoring Activities) and seventeen explicit principles including Principle 8 fraud risk assessment and Principle 11 ITGC, bottom-up Risk-Control-Matrix (RCM) construction per significant account balance and disclosure with financial statement assertions mapping (existence, completeness, accuracy, valuation, rights and obligations, presentation), Test of Design through inquiry, observation, walkthrough and inspection of supporting evidence, mid-period and year-end Test of Operating Effectiveness through period-spread sampling with ICAI Guidance Note sample sizes (daily controls 25-60, weekly 12-25, monthly 5-15, quarterly 3, annual 1), IT General Controls (ITGC) testing covering access management, change management, computer operations, backup and recovery, SDLC and data centre security, deficiency classification per ICAI three-tier framework (Inconsequential, Significant Deficiency, Material Weakness with deficiency aggregation logic), Annexure B drafting per ICAI prescribed format with management responsibility paragraph, auditor responsibility paragraph and opinion paragraph (unmodified or material weakness), UDIN generation covering the complete signed package including Annexure A CARO 2020 and Annexure B IFC, MCA21 V3 portal Form AOC-4 filing within 30 days of AGM, KAM disclosure under SA 701 for listed entities and large unlisted entities, SA 600 component auditor coordination for CFS IFC, NFRA monitoring trigger management, and integration with CARO 2020 Clause 3(xiv) internal audit cross-reference under Section 138. Compliance with ICAI Guidance Note on Audit of IFC over FR (14 September 2015) and Implementation Guide (Revised 2018), SA 200 / 220 / 240 / 315 / 330 / 600 / 700 / 701 / 705 Standards on Auditing, Section 177(4)(vii) Audit Committee evaluation, Section 149(8) Schedule IV Independent Director affirmations, Rule 8(5)(viii) Companies (Accounts) Rules 2014 Board Report disclosure. Coverage from first-year-of-applicability Pvt Ltd companies crossing the Rs 50 crore turnover or Rs 25 crore borrowing threshold through mid-size groups, NBFC Base Layer / Middle Layer, family-owned business groups, India subsidiaries of foreign parents, and listed-entity NFRA-monitored audits with Material Weakness KAM disclosures. Industry verticals - manufacturing inventory cycle IFC + cost records, financial services lending IT controls + IRACP Directions, e-commerce revenue cycle ITGC + marketplace reconciliation. Pune, Mumbai, Delhi and Gurugram offices with pan-India remote engagement.",
      "serviceType": "Statutory Audit Internal Financial Controls Reporting under Section 143(3)(i) of Companies Act 2013",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
        { "@type": "Thing", "name": "Internal control", "sameAs": "https://en.wikipedia.org/wiki/Internal_control" },
        { "@type": "Thing", "name": "Committee of Sponsoring Organizations of the Treadway Commission", "sameAs": "https://en.wikipedia.org/wiki/Committee_of_Sponsoring_Organizations_of_the_Treadway_Commission" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Internal Financial Controls Audit Service Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "First-year Pvt Ltd crossing Rs 50 crore turnover OR Rs 25 crore borrowing threshold - statutory audit bundled with CARO 2020 Annexure A and IFC Section 143(3)(i) Annexure B (5 to 6 weeks)", "price": "175000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/internal-financial-controls-audit" },
          { "@type": "Offer", "name": "Mid-size Pvt Ltd (Rs 50 to 100 crore revenue) - full IFC audit with bottom-up RCM construction, period-spread ToOE sampling, ITGC testing, deficiency aggregation (6 to 7 weeks)", "price": "450000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/internal-financial-controls-audit" },
          { "@type": "Offer", "name": "Large unlisted Pvt Ltd (Rs 100 to 500 crore revenue) - comprehensive IFC audit with CFS IFC mutatis mutandis under Section 129(4), SA 600 component auditor coordination, multi-process RCM (7 to 10 weeks)", "price": "950000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/internal-financial-controls-audit" },
          { "@type": "Offer", "name": "Listed entity with KAM disclosure - NFRA-monitored audit with Material Weakness Key Audit Matter under SA 701, NSE / BSE compliance, SA 600 group audit (10 to 14 weeks)", "price": "2500000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/internal-financial-controls-audit" }
        ]
      }
    }
  ]
}
</script>
@endsection

@section('content')
<style>
        /* ============================================
           CSS VARIABLES
           ============================================ */
        :root {
            --orange: #E8712C;
            --orange-dark: #D4621F;
            --orange-light: #FEF4EE;
            --orange-lighter: #FFF9F5;
            --blue: #1B365D;
            --blue-light: #2A4A7A;
            --blue-lighter: #F4F7FB;
            --white: #FFFFFF;
            --cream: #FDFCFB;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-200: #E5E7EB;
            --gray-300: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-500: #6B7280;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --text-primary: #1F2937;
            --text-secondary: #4B5563;
            --text-muted: #6B7280;
            --green: #10B981;
            --gold: #F59E0B;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.06);
            --shadow-lg: 0 12px 32px rgba(0,0,0,0.08);
            --shadow-xl: 0 20px 48px rgba(0,0,0,0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; -webkit-font-smoothing: antialiased; }

        body {
            font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--white);
        }

        h2 {
            font-size: clamp(26px, 3vw, 32px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 24px;
            line-height: 1.25;
        }
        h3 { color: var(--blue); font-size: 1.5rem; }
        p { color: var(--text-secondary); }
        section a { color: var(--orange); text-decoration: none; font-weight: 500; transition: color 0.2s; }
        section a:hover { color: var(--orange-dark); }

        section ul { list-style: none; padding-left: 0; margin: 0; }
        section ul li:not(.nav-item) {
            display: flex; align-items: flex-start; gap: 12px;
            color: var(--text-secondary); line-height: 1.6; margin-bottom: 10px;
        }
        section ul li:not(.nav-item)::before {
            content: ""; width: 22px; height: 22px;
            background: var(--orange-light); border-radius: 50%; flex-shrink: 0; margin-top: 1px;
            display: flex; align-items: center; justify-content: center;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' fill='none' stroke='%23ff6600' stroke-width='3' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5 13l4 4L19 7'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: center; background-size: 12px;
        }
        main section h3 { color: #14365F !important; }
        main section table { width: 100% !important; font-family: 'Barlow', sans-serif; border-collapse: collapse; border-spacing: 0; }
        main section table thead tr th {
            border: none !important; color: #fff !important; font-size: 14px; font-weight: 700;
            background-color: #14365F !important; padding: 14px 18px; text-align: left;
        }
        main section table thead tr th:first-child { border-radius: 10px 0 0 0; }
        main section table thead tr th:last-child  { border-radius: 0 10px 0 0; }
        main section table tbody tr td {
            padding: 12px 18px; font-size: 14px;
            color: var(--text-secondary);
            background: var(--white);
            border: none !important;
            border-bottom: 1px solid var(--gray-200) !important;
            vertical-align: top;
        }
        main section table tbody tr:nth-child(even) td { background: #F9FAFB; }
        main section table tbody tr:hover td { background: var(--orange-lighter); transition: background 0.15s; }
        main section table tbody tr:last-child td { border-bottom: none !important; }
        main section table tbody tr td:first-child {
            font-weight: 700; color: var(--text-primary);
            min-width: 160px;
        }
        /* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
        /* Section 8 / primary entity highlight column in comparison tables */
        .table-comparison td:nth-child(2),
        .table-comparison th:nth-child(2) {
            background: rgba(20,54,95,0.04);
            border-left: 2px solid var(--blue) !important;
        }
        .table-comparison td:nth-child(2) { font-weight: 600; color: var(--blue); }
        /* Badge pills for service status cells */
        td .badge-included { display:inline-block; padding:2px 10px; background:#E8F5E9; color:#1B7A3A; border-radius:20px; font-size:12px; font-weight:700; }
        td .badge-addon    { display:inline-block; padding:2px 10px; background:#FFF3E0; color:#C05E10; border-radius:20px; font-size:12px; font-weight:700; }
        .table-responsive-wrapper { width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; margin: 20px 0; border-radius: var(--radius-md); border: 1px solid var(--gray-200); }
        .table-responsive-wrapper table { margin: 0; border: none; }
        .table-responsive-wrapper table thead tr th:first-child { border-top-left-radius: 0; }
        .table-responsive-wrapper table thead tr th:last-child { border-top-right-radius: 0; }
        .table-responsive-wrapper table td, .table-responsive-wrapper table th { border-left: none !important; border-right: none !important; }
        .table-responsive-wrapper table td { border-top: none !important; border-bottom: 1px solid var(--gray-200) !important; }
        .table-responsive-wrapper table tbody tr:last-child td { border-bottom: none !important; }

        /* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
           ============================================ */
        .expert-attribution-box {
            background: #F9F9F9;
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-md);
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        .expert-attribution-box .eab-check { color: var(--green); font-size: 16px; flex-shrink: 0; }
        .expert-attribution-box .eab-title { font-size: 13px; font-weight: 700; color: var(--text-primary); }
        .expert-attribution-box .eab-meta {
            font-size: 12px; color: var(--text-muted);
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
        }
        .expert-attribution-box .eab-meta .eab-sep { color: var(--gray-300); }
        .expert-attribution-box .eab-link {
            font-size: 12px; color: var(--orange); text-decoration: none;
            font-weight: 600; transition: color 0.2s;
        }
        .expert-attribution-box .eab-link:hover { color: var(--orange-dark); text-decoration: underline; }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--orange-light); padding: 8px 16px;
            border-radius: 50px; font-size: 13px; font-weight: 600; color: var(--orange); margin-bottom: 20px;
        }
        .hero-badge svg { width: 14px; height: 14px; }

        .private-registration-heading {
            font-family: 'Barlow', sans-serif !important;
            font-weight: 700 !important;
            font-size: 48px !important;
            line-height: 100% !important;
            color: #14365F !important;
            margin-bottom: 1.5rem !important;
        }
        @media (max-width: 768px) { .private-registration-heading { font-size: 32px !important; line-height: 110% !important; } }
        @media (max-width: 480px) { .private-registration-heading { font-size: 28px !important; } }

        .check-icon {
            width: 20px; height: 20px; display: flex; align-items: center; justify-content: center;
            background: rgba(16, 185, 129, 0.12); border-radius: 50%; flex-shrink: 0;
        }
        .check-icon svg { width: 12px; height: 12px; color: var(--green); }

        .benefit-paragraph { font-weight: 400; margin-top: 5px; font-size: 1rem; line-height: 100%; }
        .benefit-paragraph span { font-weight: 700; }

        /* Hero CTA Buttons */
        .hero-cta { display: flex; gap: 14px; margin-bottom: 36px; flex-wrap: wrap; }

        .btn-video {
            display: inline-flex; align-items: center; gap: 10px;
            padding: 12px 20px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-primary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-video:hover { border-color: var(--orange); background: var(--orange-lighter); color: var(--orange); }
        .btn-video .play-circle {
            width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;
            background: var(--orange); border-radius: 50%; transition: transform 0.25s ease;
        }
        .btn-video:hover .play-circle { transform: scale(1.08); }
        .btn-video .play-circle svg { width: 10px; height: 10px; color: var(--white); margin-left: 1px; }

        .btn-sample {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 20px; background: transparent;
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600;
            color: var(--text-secondary); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-sample:hover { border-color: var(--blue); background: var(--blue-lighter); color: var(--blue); }
        .btn-sample svg { width: 16px; height: 16px; }

        /* Trust Section */
        .trust-section { display: flex; flex-direction: column; gap: 20px; }
        .trust-row { display: flex; flex-wrap: wrap; gap: 28px; }
        .trust-item { display: flex; align-items: center; gap: 10px; }
        .trust-icon {
            width: 38px; height: 38px; display: flex; align-items: center; justify-content: center;
            background: var(--gray-50); border-radius: var(--radius-sm);
        }
        .trust-icon svg { width: 18px; height: 18px; color: var(--blue); }
        .trust-text { font-size: 12px; color: var(--text-muted); line-height: 1.3; }
        .trust-text strong { display: block; font-size: 14px; font-weight: 700; color: var(--text-primary); }

        .google-rating {
            display: inline-flex; align-items: center; gap: 12px;
            background: var(--white); border: 1px solid var(--gray-200);
            padding: 10px 16px; border-radius: var(--radius-md);
        }
        .rating-content { display: flex; flex-direction: column; gap: 2px; }
        .rating-stars { display: flex; align-items: center; gap: 2px; }
        .rating-stars svg { width: 14px; height: 14px; color: var(--gold); fill: var(--gold); }
        .rating-score { font-size: 13px; font-weight: 700; color: var(--text-primary); margin-left: 4px; }
        .rating-count { font-size: 11px; color: var(--text-muted); }

        /* ============================================
           FORM CARD
           ============================================ */
        .form-card {
            background: var(--white); border-radius: var(--radius-xl);
            padding: 32px; box-shadow: var(--shadow-lg); border: 1px solid var(--gray-100); position: relative;
            max-width: 420px; width: 100%;
            animation: fadeInForm 0.5s ease 0.2s forwards; opacity: 0;
            margin: 0 auto;
        }
        @keyframes fadeInForm { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        .form-card::before {
            content: ''; position: absolute; top: 0; left: 28px; right: 28px; height: 3px;
            background: linear-gradient(90deg, var(--orange), var(--blue)); border-radius: 0 0 3px 3px;
        }
        .form-header { margin-bottom: 24px; }
        .form-title { font-size: 22px; font-weight: 800; color: var(--blue); margin-bottom: 4px; }
        .form-subtitle { font-size: 13px; color: var(--text-muted); }
        .form-group { margin-bottom: 16px; }
        .form-label {
            display: block; font-family: 'Barlow', sans-serif; font-size: 11px; font-weight: 700;
            color: var(--blue); text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 6px;
        }
        .form-input {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); transition: all 0.2s ease;
        }
        .form-input::placeholder { color: var(--gray-400); }
        .form-input:hover { background: var(--gray-100); }
        .form-input:focus { outline: none; background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Select */
        .form-select {
            width: 100%; padding: 13px 16px; font-family: 'Barlow', sans-serif; font-size: 14px;
            color: var(--text-primary); background: var(--gray-50); border: 1.5px solid transparent;
            border-radius: var(--radius-md); cursor: pointer; appearance: none; -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%236B7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat; background-position: right 14px center; transition: all 0.2s ease;
        }
        .form-select:hover { background-color: var(--gray-100); }
        .form-select:focus { outline: none; background-color: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        /* Phone Group + Country Dropdown */
        .phone-group {
            min-height: 50px;
            display: flex; align-items: center; background: var(--gray-50); border-radius: var(--radius-md);
            border: 1.5px solid transparent; overflow: visible; transition: all 0.2s ease; position: relative;
        }
        .phone-group:hover { background: var(--gray-100); }
        .phone-group:focus-within { background: var(--white); border-color: var(--orange); box-shadow: 0 0 0 3px rgba(232,113,44,0.08); }

        .country-code-dropdown {
            display: flex; align-items: center; justify-content: flex-start; gap: 6px;
            padding: 13px 10px 13px 14px; cursor: pointer;
            border-right: 1px solid var(--gray-200); background: transparent; position: relative;
            min-width: 80px; user-select: none; flex-shrink: 0; transition: background 0.15s;
            box-sizing: border-box;
        }
        .country-code-dropdown:hover { background: rgba(0,0,0,0.03); }
        .selected-flag {
            font-size: 20px; line-height: 1; display:flex; align-items:center;
            width: 26px; overflow: hidden; flex-shrink: 0;
            /* On browsers where flag emoji renders as "IN" text, clip it */
            font-family: "Apple Color Emoji","Segoe UI Emoji","Noto Color Emoji",sans-serif;
        }
        .selected-code { font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 600; color: var(--text-secondary); white-space: nowrap; }
        .dropdown-arrow { transition: transform 0.25s ease; color: var(--gray-400); flex-shrink: 0; width: 12px; height: 12px; }
        .country-code-dropdown.open .dropdown-arrow { transform: rotate(180deg); }

        /* Country Dropdown List */
        .country-dropdown-list {
            display: none; position: absolute; top: calc(100% + 6px); left: 0; width: 300px; max-height: 320px;
            background: var(--white); border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl); z-index: 9999; overflow: hidden; flex-direction: column;
        }
        .country-code-dropdown.open .country-dropdown-list { display: flex; }
        .country-search-input {
            width: 100%; padding: 11px 14px; border: none; border-bottom: 1px solid var(--gray-200);
            font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
            background: var(--gray-50); outline: none;
        }
        .country-search-input::placeholder { color: var(--gray-400); }
        .country-options { overflow-y: auto; max-height: 260px; scrollbar-width: thin; }
        .country-options::-webkit-scrollbar { width: 5px; }
        .country-options::-webkit-scrollbar-track { background: transparent; }
        .country-options::-webkit-scrollbar-thumb { background: var(--gray-300); border-radius: 10px; }
        .country-option {
            display: flex; align-items: center; gap: 10px; padding: 10px 14px; cursor: pointer;
            transition: background 0.12s ease; font-family: 'Barlow', sans-serif; font-size: 13px; color: var(--text-primary);
        }
        .country-option:hover, .country-option.active { background: var(--orange-lighter); }
        .country-option .flag-emoji { font-size: 18px; line-height: 1; width: 24px; text-align: center; }
        .country-option .country-name { flex: 1; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-weight: 500; }
        .country-option .dial-code { color: var(--text-muted); font-weight: 600; font-size: 12px; flex-shrink: 0; }

        /* Phone Input Override */
        .phone-input { border: none !important; background: transparent !important; box-shadow: none !important; flex: 1; min-width: 0; padding-left: 12px !important; align-self: center; }
        .phone-input:focus { box-shadow: none !important; border: none !important; }

        /* Submit Button */
        .btn-submit {
            width: 100%; padding: 15px 24px; font-family: 'Barlow', sans-serif;
            font-size: 17px; font-weight: 700; color: var(--white); background: var(--orange);
            border: none; border-radius: 50px; cursor: pointer; transition: all 0.25s ease;
            display: flex; align-items: center; justify-content: center; gap: 8px; margin-top: 6px;
        }
        .btn-submit:hover { background: var(--orange-dark); transform: translateY(-2px); box-shadow: 0 10px 28px rgba(232,113,44,0.35); }
        .btn-submit:active { transform: translateY(0); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; box-shadow: none; }

        /* Form Footer */
        .form-response-note { text-align: center; font-size: 12px; color: var(--text-muted); margin-top: 14px; margin-bottom: 0; }
        .form-footer {
            display: flex; justify-content: center; gap: 16px; margin-top: 16px;
            padding-top: 16px; border-top: 1px solid var(--gray-100);
        }
        .form-footer-item { display: flex; align-items: center; gap: 5px; font-size: 11px; color: var(--text-muted); }
        .form-footer-item svg { width: 14px; height: 14px; color: var(--green); }

        /* Error States */
        .form-input.input-error, .form-select.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .phone-group.input-error { border-color: #FD6B6D !important; box-shadow: 0 0 0 2px rgba(253,107,109,0.12) !important; }
        .field-error-msg { font-size: 12px; color: #FD6B6D; margin-top: 4px; font-weight: 500; }

        /* Success State */
        .form-success { text-align: center; padding: 40px 20px; }
        .form-success-icon { width: 64px; height: 64px; background: rgba(16,185,129,0.12); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; }
        .form-success h3 { font-size: 22px; font-weight: 700; color: var(--blue); margin-bottom: 8px; }
        .form-success p { font-size: 14px; color: var(--text-muted); line-height: 1.6; }

        @media (max-width: 480px) {
            .form-card { padding: 24px 16px; border-radius: var(--radius-lg); max-width: 100%; }
            .form-title { font-size: 20px; }
            .country-dropdown-list { width: 260px; }
            .form-footer { flex-wrap: wrap; gap: 10px; }
            .btn-submit { font-size: 16px; padding: 14px 20px; }
        }

        /* ============================================
           STATS BAR
           ============================================ */
        .stats-bar { background: var(--white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 32px; }
        .stats-container {
            max-width: 1320px; margin: 0 auto;
            display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap;
        }
        .stat-item { display: flex; align-items: center; gap: 12px; }
        .stat-icon {
            width: 44px; height: 44px; display: flex; align-items: center; justify-content: center;
            background: var(--orange-light); border-radius: var(--radius-md);
        }
        .stat-icon svg { width: 20px; height: 20px; color: var(--orange); }
        .stat-content { display: flex; flex-direction: column; }
        .stat-value { font-size: 20px; font-weight: 800; color: var(--blue); line-height: 1.2; }
        .stat-label { font-size: 12px; color: var(--text-muted); }
        .certifications {
            display: flex; gap: 16px; padding-left: 32px; border-left: 1px solid var(--gray-200);
        }
        .cert-item { display: flex; align-items: center; gap: 6px; font-size: 12px; color: var(--text-muted); font-weight: 500; }
        .cert-item svg { width: 18px; height: 18px; }

        /* ============================================
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
        .toc-container {
            max-width: 1320px; margin: 0 auto; padding: 0 32px;
            display: flex; align-items: center;
        }
        .toc-wrapper {
            display: flex; align-items: center; gap: 10px;
            overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; padding-bottom: 4px;
        }
        .toc-wrapper::-webkit-scrollbar { display: none; }
        .toc-btn {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-btn:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-btn.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-btn.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
        .toc-arrow {
            border: none; cursor: pointer; font-size: 22px;
            width: 45px; height: 45px; border-radius: 50%; background: transparent;
        }
        .toc-arrow.left { margin-right: 8px; }
        .toc-arrow.right { margin-left: 8px; }

        /* ============================================
           CONTENT SECTIONS
           ============================================ */
        .content-section { padding: 64px 32px; background: var(--white); }
        .content-section:nth-child(even) { background: var(--gray-50); }
        .content-container { max-width: 1320px; margin: 0 auto; }
        .section-container { max-width: 1320px; margin: 0 auto; }
        .text-content { max-width: 100%; }

        .section-title {
            font-size: clamp(26px, 3vw, 32px); font-weight: 800;
            color: var(--blue); margin-bottom: 24px; line-height: 1.25;
        }
        .content-text { font-size: 15px; line-height: 1.8; color: var(--text-secondary); text-align: left; }
        .content-text p { margin-bottom: 16px; text-align: left; }
        .content-text strong { color: var(--text-primary); font-weight: 600; }
        .content-text a { color: var(--orange); text-decoration: none; font-weight: 500; }

        .two-column { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: start; }
        .column-content { max-width: 100%; }
        .column-image { display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 24px; }

        .highlight-box {
            background: var(--orange-lighter); border-left: 4px solid var(--orange);
            padding: 16px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin: 20px 0;
        }
        .highlight-box p { margin: 0 0 8px 0; font-size: 14px; color: var(--text-secondary); text-align: left; }
        .highlight-box p:last-child { margin-bottom: 0; }

        .illustration-placeholder {
            width: 100%; max-width: 420px; aspect-ratio: 4/3;
            background: linear-gradient(135deg, var(--blue-lighter) 0%, var(--orange-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 24px; position: relative; overflow: hidden;
        }
        .illustration-icon {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
        }
        .illustration-icon svg { width: 100%; height: 100%; color: var(--blue); }
        .illustration-badge {
            background: var(--white); padding: 12px 20px; border-radius: var(--radius-md);
            box-shadow: var(--shadow-md); text-align: center;
        }
        .illustration-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 2px; }
        .illustration-badge strong { font-size: 14px; font-weight: 700; color: var(--blue); }

        /* Section Eyebrow */
        .section-eyebrow {
            display: inline-flex; align-items: center; gap: 8px;
            font-size: 13px; font-weight: 600; color: var(--orange);
            text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
        }
        .section-eyebrow svg { width: 18px; height: 18px; }
        .section-subtitle { font-size: 15px; color: var(--text-muted); max-width: 600px; }

        /* Steps Section */
        .steps-section { padding: 72px 32px; background: var(--gray-50); }
        .steps-container { display: flex; flex-direction: column; gap: 32px; }
        .step-card {
            display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center;
            background: var(--white); border-radius: var(--radius-xl); padding: 40px;
            border: 1px solid var(--gray-200); transition: all 0.3s ease;
        }
        .step-card:hover { box-shadow: var(--shadow-lg); border-color: var(--gray-300); }
        .step-card:nth-child(even) { direction: rtl; }
        .step-card:nth-child(even) > * { direction: ltr; }
        .step-content { display: flex; flex-direction: column; }
        .step-badge {
            display: inline-flex; align-items: center; gap: 6px;
            background: var(--orange); color: var(--white);
            padding: 6px 14px; border-radius: 50px; font-size: 12px; font-weight: 700;
            text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; width: fit-content;
        }
        .step-title { font-size: clamp(20px, 2.5vw, 24px); font-weight: 800; color: var(--blue); margin-bottom: 14px; line-height: 1.3; }
        .step-description { font-size: 15px; color: var(--text-secondary); line-height: 1.75; text-align: left; }
        .step-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 18px; }
        .highlight-tag {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 6px 12px; background: var(--gray-50); border: 1px solid var(--gray-200);
            border-radius: 50px; font-size: 12px; font-weight: 600; color: var(--text-muted);
        }
        .highlight-tag svg { width: 12px; height: 12px; color: var(--green); }
        .step-visual { display: flex; justify-content: center; align-items: center; }
        .step-illustration {
            width: 100%; max-width: 280px; aspect-ratio: 1;
            background: linear-gradient(135deg, var(--orange-lighter) 0%, var(--blue-lighter) 100%);
            border-radius: var(--radius-xl); display: flex; flex-direction: column;
            align-items: center; justify-content: center; padding: 20px; position: relative; overflow: hidden;
        }
        .step-illustration .illustration-icon {
            width: 100%; max-width: 180px; aspect-ratio: 1; margin-bottom: 8px;
            background: none; box-shadow: none;
        }
        .step-illustration .illustration-icon svg { width: 100%; height: 100%; }
        .illustration-label { font-size: 13px; font-weight: 600; color: var(--text-muted); text-align: center; }
        .step-number-large {
            position: absolute; bottom: 16px; right: 20px;
            font-size: 64px; font-weight: 800; color: rgba(27,54,93,0.06); line-height: 1;
        }

        /* Process Evidence Screenshot - Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
        .process-screenshot-details summary {
            font-size: 13px; font-weight: 600; color: var(--orange); cursor: pointer;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .process-screenshot-details summary:hover { color: var(--orange-dark); }
        .process-screenshot-details .screenshot-img {
            max-width: 100%; border-radius: 8px; border: 1px solid var(--gray-200);
            box-shadow: var(--shadow-sm); margin-top: 10px;
        }
        .process-screenshot-details .screenshot-note {
            font-size: 11px; color: var(--text-muted); margin-top: 6px;
        }

        /* Why Choose Section */
        .why-choose-section { padding: 72px 32px; background: var(--gray-50); }
        .why-choose-header { text-align: center; margin-bottom: 48px; }
        .features-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
        .feature-card {
            background: var(--white); border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg); padding: 28px; transition: all 0.25s ease;
        }
        .feature-card:hover { box-shadow: var(--shadow-md); border-color: var(--orange); transform: translateY(-2px); }
        .feature-icon {
            width: 52px; height: 52px; background: var(--orange-light); border-radius: var(--radius-md);
            display: flex; align-items: center; justify-content: center; margin-bottom: 18px;
        }
        .feature-icon svg { width: 26px; height: 26px; color: var(--orange); }
        .feature-title { font-size: 17px; font-weight: 700; color: var(--blue); margin-bottom: 10px; }
        .feature-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; text-align: left; }

        /* Reviews CTA */
        .reviews-cta {
            margin-top: 40px; padding: 28px 32px; background: var(--blue);
            border-radius: var(--radius-lg); display: flex;
            align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;
        }
        .reviews-cta-content { display: flex; align-items: center; gap: 16px; }
        .reviews-cta-icon {
            width: 48px; height: 48px; background: rgba(255,255,255,0.1);
            border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center;
        }
        .reviews-cta-icon svg { width: 24px; height: 24px; color: var(--white); }
        .reviews-cta-text h3 { font-size: 18px; font-weight: 700; color: #FFFFFF !important; margin-bottom: 2px; margin-top: 0; }
        .reviews-cta-text p { font-size: 13px; color: rgba(255,255,255,0.7); margin: 0; }
        .btn-cta {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 12px 24px; font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            color: var(--blue); background: var(--white); border: none;
            border-radius: var(--radius-md); cursor: pointer; transition: all 0.25s ease; text-decoration: none;
        }
        .btn-cta:hover { background: var(--orange-light); color: var(--orange); }
        .btn-cta svg { width: 16px; height: 16px; }        @media (max-width: 640px) {        }

        /* ============================================
           CITY & CROSS-SELL GRID CARDS
           ============================================ */
        .pa-city-block { }
        .pa-block-title { font-size: 18px; font-weight: 700; color: var(--blue); margin-bottom: 6px; }
        .pa-block-sub   { font-size: 14px; color: var(--text-muted); margin-bottom: 16px; }
        .pa-city-grid, .pa-cross-grid { display: grid; gap: 12px; max-width: 1100px; }
        .pa-city-grid  { grid-template-columns: repeat(4, 1fr); }
        .pa-cross-grid { grid-template-columns: repeat(3, 1fr); }
        .pa-city-card, .pa-cross-card {
            display: flex; align-items: center; gap: 10px;
            padding: 14px 16px; background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: var(--radius-md);
            text-decoration: none; transition: all 0.25s ease;
        }
        .pa-city-card:hover, .pa-cross-card:hover { border-color: var(--orange); box-shadow: 0 4px 16px rgba(232,113,44,0.12); transform: translateY(-2px); }
        .pa-card-icon {
            width: 32px; height: 32px; background: var(--orange-light);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
        .pa-card-title  { font-size: 14px; font-weight: 700; color: var(--blue); }
        .pa-card-sub    { font-size: 11px; color: var(--text-muted); }
        @media (max-width: 768px) {
            .pa-city-grid  { grid-template-columns: repeat(2, 1fr); }
            .pa-cross-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 480px) {
            .pa-city-grid  { grid-template-columns: 1fr; }
            .pa-cross-grid { grid-template-columns: 1fr; }
        }
        .testimonials-section {
            padding: 24px 32px 0 32px;
            background: var(--white);
            overflow: hidden;
        }
        .testimonials-section .section-container {
            max-width: 1320px;
            margin: 0 auto;
        }
        .testimonials-section .section-header {
            text-align: center;
            margin-bottom: 16px;
        }
        .testimonials-section .section-header h2 {
            font-size: clamp(26px, 3.5vw, 34px);
            font-weight: 800;
            color: var(--blue);
            margin-bottom: 10px;
        }
        .testimonials-section .section-header p {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* Slick overrides */
        .testimonial-slider .slick-slide { padding: 0 10px; }
        .testimonial-slider .slick-list { margin: 0 -10px; overflow: hidden; }
        .testimonial-slider .slick-dots { bottom: -40px; }
        .testimonial-slider .slick-dots li button:before { font-size: 10px; color: var(--gray-300); opacity: 1; }
        .testimonial-slider .slick-dots li.slick-active button:before { color: var(--orange); }
        .testimonial-slider { margin-bottom: 0 !important; padding-bottom: 0 !important; }
        .testimonial-slider .slick-track { display: flex !important; }
        .testimonial-slider.slick-initialized { margin-bottom: 0; }

        /* Video Testimonial Card */
        .testi-video-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            overflow: hidden;
            height: 340px;
            display: flex;
            flex-direction: column;
            transition: all 0.25s ease;
        }
        .testi-video-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-video-area {
            position: relative;
            height: 230px;
            overflow: hidden;
            cursor: pointer;
            flex-shrink: 0;
        }
        .testi-video-area video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .testi-play-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0,0,0,0.25);
            transition: opacity 0.3s;
            pointer-events: none;
        }
        .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .testi-play-btn {
            width: 56px;
            height: 56px;
            background: rgba(232,113,44,0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .testi-play-btn svg { width: 22px; height: 22px; color: white; margin-left: 3px; }
        .testi-star-badge {
            position: absolute;
            bottom: 12px;
            left: 12px;
            display: flex;
            gap: 2px;
        }
        .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }

        /* Quote Testimonial Card */
        .testi-quote-card {
            background: var(--white);
            border: 1px solid var(--gray-200);
            border-radius: var(--radius-lg);
            padding: 24px;
            height: 340px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.25s ease;
        }
        .testi-quote-card:hover { border-color: var(--orange); box-shadow: var(--shadow-md); }
        .testi-quote-icon { color: var(--orange); opacity: 0.25; margin-bottom: 8px; }
        .testi-quote-icon svg { width: 24px; height: 24px; }
        .testi-quote-text {
            font-size: 14px;
            line-height: 1.65;
            color: var(--text-secondary);
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .testi-footer {
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-100);
        }
        .testi-author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .testi-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 700;
            color: var(--white);
            flex-shrink: 0;
            overflow: hidden;
            background: var(--orange);
        }
        .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .testi-avatar.blue { background: var(--blue); }
        .testi-avatar.teal { background: #0D9488; }
        .testi-avatar.purple { background: #7C3AED; }
        .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary); line-height: 1.2; }
        .testi-role { font-size: 12px; color: var(--text-muted); }
        .testi-rating-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .testi-stars { display: flex; gap: 1px; }
        .testi-stars svg { width: 12px; height: 12px; fill: var(--gold); color: var(--gold); }
        .testi-google-badge { width: 22px; height: 22px; }
        .testi-google-badge img { width: 100%; height: 100%; }

        /* Loading state */
        .testi-loading {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 0;
            color: var(--text-muted);
            font-size: 14px;
        }
        .testi-loading .spinner {
            width: 32px;
            height: 32px;
            border: 3px solid var(--gray-200);
            border-top-color: var(--orange);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }

        @media (max-width: 768px) {
            .testimonials-section { padding: 16px 20px 0 20px; }
        }
        @media (max-width: 576px) {

        }

        

        @media (max-width: 1024px) {
        }
        @media (max-width: 768px) {

        }
        @media (max-width: 480px) {


        }
        @media (max-width: 768px) {

        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .two-column { grid-template-columns: 1fr; gap: 40px; }
            .features-grid { grid-template-columns: repeat(2, 1fr); }
            .stats-container { gap: 32px; }
            .certifications { padding-left: 0; border-left: none; width: 100%; justify-content: center; padding-top: 16px; border-top: 1px solid var(--gray-200); }
        }
        @media (max-width: 900px) {
            .step-card { grid-template-columns: 1fr; gap: 32px; padding: 32px; }
            .step-card:nth-child(even) { direction: ltr; }
            .step-visual { order: -1; }
        }
        @media (max-width: 768px) {
            .content-section { padding: 40px 16px; }
            .hero-cta { flex-direction: column; }
            .btn-video, .btn-sample { width: 100%; justify-content: center; }
            .stats-container { flex-direction: column; gap: 20px; align-items: flex-start; padding: 0 16px; }
            .stat-item { width: 100%; }
            .features-grid { grid-template-columns: 1fr; gap: 16px; }
            .reviews-cta { flex-direction: column; text-align: center; }
            .reviews-cta-content { flex-direction: column; }
            .content-text { font-size: 14px; }
            .accordion-body { text-align: left; }
            main section table thead tr th { font-size: 13px !important; padding: 10px 12px !important; }
            main section table tbody tr td { padding: 10px 12px !important; font-size: 13px !important; }
            .table-responsive-wrapper { margin: 16px 0; border-radius: var(--radius-sm); }
            .col-lg-4 { margin-top: 24px; }
            .form-card { max-width: 100%; }
            .private-registration-heading { margin-bottom: 1rem !important; }
            .benefit-paragraph { font-size: 0.9rem; }
            .hero-badge { font-size: 12px; padding: 6px 12px; }
            .expert-attribution-box { padding: 10px 14px; }
            .expert-attribution-box .eab-title { font-size: 12px; }
            .expert-attribution-box .eab-meta { font-size: 11px; }
            .trust-section { gap: 12px; }
            .trust-row { gap: 16px; }
            .google-rating { width: 100%; }
            section ul li:not(.nav-item) { font-size: 14px; }
        }

        /* Smooth scroll offset */
        .content-section[id] { scroll-margin-top: 80px; }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
    
        /* Trust Badge Descriptions */
        .stat-desc { display: block; font-size: 11px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; font-weight: 400; }
        .cert-desc { display: block; font-size: 10px; color: var(--text-muted); line-height: 1.3; margin-top: 2px; }

        /* City Interlinking Grid */
        @media (max-width: 768px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 12px !important;
            }
        }
        @media (max-width: 480px) {
            .content-section [style*="grid-template-columns: repeat(4"] {
                grid-template-columns: 1fr !important;
            }
        }

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

/* Fix: dark CTA block body text -> white (low-contrast on navy #1B365D) */
section[style*="background: var(--blue)"] .content-text,
section[style*="background: var(--blue)"] .content-text p,
section[style*="background: var(--blue)"] .content-text li,
section[style*="background: var(--blue)"] .content-text strong{color:#FFFFFF !important;}
</style>
<main>


<!-- HERO SECTION -->
<section class="py-5" style="background: linear-gradient(180deg, var(--cream) 0%, var(--white) 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="pe-lg-5">
                    <div class="hero-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Internal Financial Controls Audit Under Section 143 of the Companies Act, 2013
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated"></span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Authority:</span> Section 143(3)(i) of the Companies Act, 2013 - auditor reports adequacy of IFC with reference to financial statements (IFC-FR) and operating effectiveness.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> All companies including foreign companies; specific Pvt Ltd exemption notified by MCA on 13 June 2017 conditional on Section 137 and Section 92 filing compliance.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Practitioner Guidance:</span> ICAI Guidance Note on Audit of IFC over Financial Reporting (14 September 2015) with Implementation Guide (Revised 2018); COSO Internal Control Integrated Framework (2013).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Patron Engagement:</span> Bundled within statutory audit; Rs 1.75 lakh starting for threshold-crossing Pvt Ltd; standalone IFC readiness review Rs 1 lakh to Rs 4 lakh.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Internal%20Financial%20Controls%20Audit&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20would%20like%20to%20engage%20Patron%20for%20an%20IFC-compliant%20statutory%20audit%20under%20Section%20143(3)(i)%20of%20the%20Companies%20Act%202013.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20to%20engage%20Patron%20for%20an%20IFC-compliant%20statutory%20audit%20under%20Section%20143(3)(i)." target="_blank" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="currentColor" style="width:18px;height:18px;color:#25D366"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                            WhatsApp Us
                        </a>
                    </div>

                    <div class="trust-section">
                        <div class="trust-row">
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div>
                                <div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
                            </div>
                            <div class="trust-item">
                                <div class="trust-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
                                <div class="trust-text"><strong>CA & CS</strong>Certified Experts</div>
                            </div>
                        </div>
                        <div class="google-rating">
                            <div class="rating-content">
                                <div class="rating-stars">
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <span class="rating-score">4.9</span>
                                </div>
                                <span class="rating-count">Based on 500+ reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-card" id="consultationFormCard">
                    <div class="form-header">
                        <h2 class="form-title">Get Free Consultation</h2>
                        <p class="form-subtitle">Talk to a CA/CS expert today</p>
                    </div>

                    <iframe name='hidden208810000001209168Frame' id='hidden208810000001209168Frame' style='display:none;' src='about:blank'></iframe>

                    <form id='BiginWebToRecordForm208810000001209168'
                          name='BiginWebToRecordForm208810000001209168'
                          action='https://bigin.zoho.in/crm/WebToRecordForm'
                          method='POST'
                          enctype='multipart/form-data'
                          target='hidden208810000001209168Frame'
                          onSubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() && checkMandatory208810000001209168()'
                          accept-charset='UTF-8'>

                        <input type='text' style='display:none;' name='xnQsjsdp' value='e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'/>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                        <input type='text' style='display:none;' name='xmIwtLD' value='2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843'/>
                        <input type='text' style='display:none;' name='actionType' value='UG90ZW50aWFscw=='/>
                        <input type='hidden' name='rmsg' id='rmsg' value='true'/>
                        <input type='text' style='display:none;' name='returnURL' value='null' />
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Internal Financial Controls Audit'/>
                        <input type='hidden' name='Pipeline' value='Sales Pipeline Standard'/>
                        <input type='hidden' name='Stage' value='Qualification'/>
                        <input type='hidden' name='Contacts.Lead Source' id='pageSourceField' value=''/>

                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input name='Contacts.Last Name' id='consultFullName' type='text' maxlength='80'
                                   class='form-input' placeholder='Your name' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <div class="phone-group" id="phoneGroup">
                                <div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
                                    <span class="selected-flag" id="selectedFlag">&#127470;&#127475;</span>
                                    <span class="selected-code" id="selectedCode">+91</span>
                                    <svg class="dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
                                    <div class="country-dropdown-list" id="countryDropdownList">
                                        <input type="text" class="country-search-input" id="countrySearchInput"
                                               placeholder="Search country..." onclick="event.stopPropagation()" oninput="filterCountries(this.value)"/>
                                        <div class="country-options" id="countryOptions"></div>
                                    </div>
                                </div>
                                <input type='text' class='form-input phone-input' id='phoneNumberInput' maxlength='15'
                                       placeholder='Enter phone number'
                                       oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";'
                                       onblur='validatePhoneOnBlur(this)'/>
                                <div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
                            </div>
                            <input type='hidden' name='Contacts.Mobile' id='combinedMobileField' value=''/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">City</label>
                            <input name='Contacts.Mailing City' id='consultCity' type='text' maxlength='100'
                                   class='form-input' placeholder='Enter your city' oninput='clearFieldError(this)'/>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Needed</label>
                            <select name='Contacts.Description' id='consultService' class='form-select' onchange='clearFieldError(this)'>
                                <option value='' disabled selected>Select a service</option>
                                                                <option value="internal-financial-controls-audit" selected>Internal Financial Controls Audit</option>
                                <option value="statutory-audit">Statutory Audit (Parent)</option>
                                <option value="caro-2020-reporting">CARO 2020 Reporting (Sister)</option>
                                <option value="statutory-audit-for-financial-services">Statutory Audit - Financial Services</option>
                                <option value="statutory-audit-for-manufacturing-companies">Statutory Audit - Manufacturing</option>
                                <option value="statutory-audit-for-ecommerce-companies">Statutory Audit - E-commerce</option>
                                <option value="internal-audit">Internal Audit (Section 138)</option>
                                <option value="tax-audit">Tax Audit (Section 44AB)</option>
                                <option value="private-limited-company-compliance">Pvt Ltd Compliance</option>
                                <option value="appointment-of-auditor">Appointment of Auditor</option>
                                <option value="change-of-auditor">Change of Auditor</option>
                                <option value="other">Other</option>

                            </select>
                        </div>

                        <button type='submit' class='btn-submit' id='formSubmitBtn'>Get Free Quote &rarr;</button>
                    </form>

                    <p class="form-response-note">Our team will get back to you shortly. No spam.</p>

                    <div class="form-footer">
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
                        <span class="form-footer-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            Quick Response
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The statutory audit was clean and completed well before deadline. No last-minute rush. Patron's bottom-up RCM approach surfaced two Significant Deficiencies in our procurement cycle early in the audit period - we had time to remediate before year-end. Annexure B came back unmodified.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">MD - Trading Firm</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai Rs 110 cr revenue Pvt Ltd</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">First-year IFC audit after crossing the Rs 50 crore turnover threshold - we had no RCM, no ITGC documentation, no fraud risk assessment. Patron's retro-fit approach within the audit period was structured - week-by-week deliverables, clear scope, no surprises on fee. Annexure B closed without Material Weakness.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO - D2C Brand</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bangalore first-year IFC retro-fit</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">NBFC Middle Layer lending IT controls - Patron's ITGC depth covered customer onboarding, KYC / AML, IRACP Directions, FLDG co-lending - critical for our NFRA monitoring exposure. Audit Committee under Section 177(4)(vii) got the deficiency dashboard they needed. Professional, knowledgeable, ethical.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CRO - NBFC Middle Layer</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai NBFC - IRACP + ITGC IFC</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Mid-period ToOE was a revelation. Big Four had given us a black-box year-end audit; Patron's interim ToOE in week 4-5 surfaced a Material Weakness candidate in revenue cut-off. We remediated mid-period - final Annexure B unmodified. Deficiency aggregation per ICAI Guidance Note properly documented. Worth the engagement.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Controller - SaaS</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pune Rs 180 cr revenue - revenue cut-off MW averted</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From first-year IFC retro-fits for Pvt Ltd companies crossing the threshold to NBFC Middle Layer lending IT controls and listed-entity KAM disclosure coordination - real Patron clients share how the bottom-up RCM approach, mid-period ToOE rollforward, and ICAI Guidance Note deficiency aggregation logic delivered unmodified Annexure B opinions.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- STATS BAR -->
<div class="stats-bar">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
            <div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
            <div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
        </div>
        <div class="stat-item">
            <div class="stat-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/></svg></div>
            <div class="stat-content"><span class="stat-value">4.9&#9733;</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
        </div>
        <div class="certifications">
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
            <div class="cert-item"><svg viewBox="0 0 24 24" fill="none" stroke="#3B82F6" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
        </div>
    </div>
</div>

<!-- TOC NAVIGATION -->
<div class="toc-section">
    <div class="toc-container">
        <button class="toc-arrow left" id="tocLeft">&#10094;</button>
        <div class="toc-wrapper" id="tocWrapper">
                        <button class="toc-btn active" onclick="document.getElementById('overview-section').scrollIntoView({behavior:'smooth',block:'start'});">Overview</button>
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">What Is IFC Audit</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Applicability Matrix</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Patron Deliverables</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">6-Step Methodology</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Documents Checklist</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Deficiencies</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">IFC Audit Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">Audit Timeline</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Patron Approach</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">DIY vs Big 4 vs Patron</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - Internal Financial Controls Audit</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Internal Financial Controls Audit Services at a Glance</strong></p>
                    <p>Internal Financial Controls (IFC) audit under Section 143(3)(i) of the Companies Act, 2013 is the statutory auditor's assessment of (a) adequacy of internal financial controls with reference to financial statements (IFC-FR) and (b) operating effectiveness of those controls, reported as Annexure B to the main audit report under SA 700. The audit framework follows the COSO Internal Control - Integrated Framework (2013) with five components and seventeen principles, supported by ICAI's Guidance Note (14 September 2015) and Implementation Guide (Revised 2018). Testing comprises Test of Design (ToD) to verify that controls are properly designed and Test of Operating Effectiveness (ToOE) to verify that controls operate as designed throughout the audit period. MCA Notification dated 13 June 2017 exempts OPC, small companies, and qualifying Pvt Ltd companies (turnover under Rs 50 crore OR aggregate borrowings under Rs 25 crore) provided no default in Section 137 or Section 92 ROC filings.</p>
                </div>
                <p>Section 143 of the Companies Act, 2013 deals with the powers and duties of statutory auditors. Sub-section (3) lists ten specific matters on which the auditor is required to report. Clause (i) of sub-section (3) - the IFC clause - was the most significant addition over the predecessor Companies Act 1956. For the first time in Indian audit law, auditors were required to attest to the design and operating effectiveness of management's control system - moving beyond the traditional financial-statement attestation into governance terrain. IFC reporting under Section 143(3)(i) is functionally similar to Section 404 of the US Sarbanes-Oxley Act (SOX) and triggered Indian audit firms to adopt the COSO 2013 framework that anchors most SOX 404 programs globally.</p>
                <p>Patron Accounting LLP is a peer-reviewed CA and CS practice handling Internal Financial Controls audit engagements end-to-end - applicability scoping under MCA Notification G.S.R. 583(E) dated 13 June 2017, COSO 2013 framework mapping, bottom-up Risk-Control-Matrix construction, Test of Design and Operating Effectiveness sampling, IT General Controls testing, deficiency aggregation per ICAI Guidance Note and Annexure B drafting integrated with Annexure A CARO 2020 reporting. Verify framework references through the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3 portal)</a>; auditing standards and guidance notes at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>; NFRA-monitored audit framework at the <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">National Financial Reporting Authority</a>.</p>
                <p>Content is reviewed quarterly for accuracy.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is Internal Financial Controls Audit</h2>
                <div class="content-text what-is-definition">
                    
                                        <p>Internal Financial Controls (IFC) audit under Section 143(3)(i) of the Companies Act, 2013 is the statutory auditor's reasoned opinion on whether the company has adequate internal financial controls with reference to financial statements in place and whether such controls are operating effectively. The audit follows the COSO Internal Control - Integrated Framework (2013) and applies Test of Design and Test of Operating Effectiveness procedures throughout the audit period.</p>
                    <p><strong>Reporting Placement and Opinion Mechanics:</strong> The IFC audit is performed concurrently with the financial statement audit and reported as Annexure B to the main audit report (<a href="/caro-2020-reporting">CARO 2020</a> is Annexure A). The auditor's IFC opinion is a separate opinion - it can be unmodified even where the main financial statement opinion is qualified, or vice versa. An unmodified IFC opinion means the auditor has reasonable assurance that the company has adequate IFC-FR and that such controls operated effectively in all material respects throughout the audit period; a modified opinion identifies specific material weaknesses that warrant disclosure.</p>
                    <p><strong>Testing Approach - The Key Distinction:</strong> Where IFC audit differs most from financial statement audit is in the testing approach. Financial statement audit can rely on substantive procedures (tracing balances, recalculating amounts, confirming with third parties). IFC audit requires Test of Design AND Test of Operating Effectiveness throughout the year - not just at year-end. The auditor cannot conclude that a control is effective merely because the year-end balance is correct; the control must have been designed appropriately AND must have operated as designed across the period. Sampling is structured around control frequency - daily, weekly, monthly, quarterly controls each demand minimum sample sizes per the ICAI Guidance Note.</p>
                    <p><strong>Sister Authority Page - CARO 2020:</strong> Both CARO 2020 (under Section 143(11)) and IFC audit (under Section 143(3)(i)) constitute the complete Section 143 reporting framework. CARO is Annexure A; IFC is Annexure B. Both are filed together with Form AOC-4 within 30 days of the AGM under a single UDIN. CARO 2020 Clause 3(xiv) requires the statutory auditor to report whether the company has an internal audit system commensurate with size and nature of business and whether reports of internal auditors were considered - a direct cross-link to IFC audit work product.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Internal Financial Controls Audit:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>IFC (Section 134(5)(e) definition):</strong> Internal Financial Controls means the policies and procedures adopted by the company for ensuring (a) orderly and efficient conduct of business including adherence to company's policies, (b) safeguarding of assets, (c) prevention and detection of frauds and errors, (d) accuracy and completeness of accounting records, and (e) timely preparation of reliable financial information. This wider definition applies to the Director's Responsibility Statement.</li>
                        <li><strong>IFC-FR (Section 143(3)(i) scope):</strong> IFC with reference to financial statements - a narrower scope than Section 134(5)(e). Only controls that have a financial reporting impact are within the audit scope. Business controls without financial reporting impact (e.g. HR onboarding workflow) are outside the auditor's Section 143(3)(i) opinion.</li>
                        <li><strong>COSO 2013 Framework:</strong> Internal Control - Integrated Framework issued by the Committee of Sponsoring Organizations of the Treadway Commission, released 14 May 2013 replacing the 1992 framework. Five components - Control Environment, Risk Assessment, Control Activities, Information and Communication, Monitoring Activities; seventeen explicit principles.</li>
                        <li><strong>Risk-Control-Matrix (RCM):</strong> The auditor's working file documenting each significant account balance and disclosure, the related financial-statement risks (existence, completeness, accuracy, valuation, presentation), and the controls management has implemented to address each risk; the audit programme is structured around the RCM.</li>
                        <li><strong>Test of Design (ToD):</strong> Audit procedure to evaluate whether a control is suitably designed to prevent or detect material misstatements - typically through inquiry, observation, walkthrough of one or more transactions, and inspection of supporting evidence.</li>
                        <li><strong>Test of Operating Effectiveness (ToOE):</strong> Audit procedure to evaluate whether the control operated as designed during the audit period - sample testing of multiple transactions across the period; sample size driven by control frequency.</li>
                        <li><strong>Material Weakness:</strong> Deficiency or combination of deficiencies in IFC-FR such that a reasonable possibility exists of a material misstatement of the financial statements not being prevented or detected on a timely basis. Triggers a modified IFC audit opinion.</li>
                        <li><strong>Significant Deficiency:</strong> Deficiency, or combination of deficiencies, that is less severe than a material weakness yet important enough to merit attention by those charged with governance.</li>
                        <li><strong>ITGC (IT General Controls):</strong> Foundational controls over the IT environment - access management, change management, computer operations, backup and recovery, SDLC. COSO Principle 11. Without ITGC, automated controls cannot be relied upon.</li>
                        <li><strong>Annexure B Report:</strong> The auditor's IFC opinion report, separate from the main audit report and Annexure A CARO 2020. Contains scope, management responsibility, auditor responsibility and opinion paragraphs per ICAI Guidance Note format.</li>
                        <li><strong>MCA Notification 13 June 2017 (G.S.R. 583(E)):</strong> The Pvt Ltd IFC exemption - OPC, Small Company, or Pvt Ltd with turnover up to Rs 50 crore OR aggregate borrowings up to Rs 25 crore, conditional on no Section 137 or Section 92 ROC filing default.</li>
                        <li><strong>UDIN (Unique Document Identification Number):</strong> ICAI-mandated unique identifier generated for every signed audit document; covers the complete signed package including main report, Annexure A CARO and Annexure B IFC.</li>
                    </ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="40" y="50" width="120" height="100" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Roof / Pediment -->
                            <path d="M30 52L100 15L170 52" stroke="#14365F" stroke-width="2" fill="#E8EDF4"/>
                            <!-- Columns -->
                            <rect x="55" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="112" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="137" y="60" width="8" height="80" rx="2" fill="#D4DCE8" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="88" y="105" width="24" height="35" rx="12" fill="#14365F" opacity="0.15" stroke="#14365F" stroke-width="1"/>
                            <!-- Scale of Justice icon -->
                            <circle cx="100" cy="78" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <line x1="100" y1="70" x2="100" y2="86" stroke="#14365F" stroke-width="1.5"/>
                            <line x1="90" y1="76" x2="110" y2="76" stroke="#14365F" stroke-width="1.5"/>
                            <path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"/>
                            <path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- APL-05 tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">APL-05</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Internal Financial Controls Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 143(3)(i)</span>
                        <strong>Annexure B - Statutory Authority</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: WHO CAN FILE -->
<section class="content-section" id="who-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IFC Audit Applicability Matrix</h2>
            <div class="content-text">
                
                                <p>Section 143(3)(i) applies to every company audited under the Companies Act, 2013 - including foreign companies under Section 2(42). The MCA Notification dated 13 June 2017 (G.S.R. 583(E)) carves out specific exemptions for smaller private companies, subject to conditions.</p>
                <ul>
                    <li><strong>Listed company (NSE / BSE):</strong> Mandatory. Section 143(3)(i) reporting standalone and CFS; KAM-level disclosure for material weakness under SA 701.</li>
                    <li><strong>Unlisted public company:</strong> Mandatory. Section 143(3)(i) full reporting.</li>
                    <li><strong>Pvt Ltd subsidiary or holding of listed company:</strong> Mandatory. Full IFC reporting; exemption not available.</li>
                    <li><strong>Pvt Ltd turnover above Rs 50 crore (latest audited):</strong> Mandatory. Threshold-based; latest audited financial statement as reference.</li>
                    <li><strong>Pvt Ltd aggregate borrowings above Rs 25 crore at any point during FY:</strong> Mandatory. Peak test - even a single-day borrowing above Rs 25 crore from banks / FIs / body corporate triggers applicability.</li>
                    <li><strong>Pvt Ltd turnover up to Rs 50 cr AND borrowings up to Rs 25 cr:</strong> Exempt (conditional) - subject to no Section 137 (financials) or Section 92 (annual return) ROC filing default.</li>
                    <li><strong>OPC under Section 2(62):</strong> Exempt - unconditional.</li>
                    <li><strong>Small Company under Section 2(85):</strong> Exempt - unconditional (paid-up up to Rs 4 crore and turnover up to Rs 40 crore from 15 September 2022).</li>
                    <li><strong>Section 8 company (charitable):</strong> Mandatory subject to size - same Pvt Ltd thresholds apply; exemption available if all conditions met.</li>
                    <li><strong>Foreign company under Section 2(42):</strong> Mandatory for Indian financial statements; Section 143(3)(i) applies through the appointed Indian auditor.</li>
                    <li><strong>Group with CFS under Section 129(4):</strong> Mandatory mutatis mutandis - IFC reporting applies to consolidated financial statements for Companies Act components only; LLP and non-Act components outside scope.</li>
                    <li><strong>NBFC Base Layer / Middle Layer / Upper Layer:</strong> Mandatory - NBFC IT controls (lending, IRACP Directions, customer onboarding) require deep ITGC review.</li>
                </ul>
                <p><strong>Critical Compliance Trap - Section 137 / Section 92 Default Voids the Exemption:</strong> Even where a Pvt Ltd company is otherwise eligible for the Section 143(3)(i) exemption (turnover up to Rs 50 crore AND borrowings up to Rs 25 crore), the exemption stands voided if the company has defaulted in filing its financial statements under Section 137 of the Companies Act, 2013 (Form AOC-4) or its annual return under Section 92 of the Companies Act, 2013 (Form MGT-7) with the Registrar of Companies. The default test is fresh each year - a one-year filing default reopens IFC reporting applicability for that year. Patron's first action on any new engagement is a Section 137 / Section 92 filing-compliance check before relying on the exemption.</p>
                <p><strong>Section 134(5)(e) Director Responsibility - Independent of Exemption:</strong> The Director Responsibility Statement under Section 134(5)(e) and the Board Report disclosure under Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014 apply to every company irrespective of the Section 143(3)(i) auditor exemption. Directors must confirm adequacy of IFC in the Board Report even where the auditor is exempt from Annexure B reporting.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron's IFC Audit Engagement Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Applicability Determination and Exemption Check</td>
                            <td>Section 143(3)(i) applicability test under MCA Notification G.S.R. 583(E) dated 13 June 2017 - turnover Rs 50 crore (latest audited) and aggregate borrowings Rs 25 crore peak test for the year. Section 137 (AOC-4) and Section 92 (MGT-7) ROC filing compliance check to confirm exemption is not voided.</td>
                            <td><span class="badge-included">Engagement Start</span></td>
                        </tr>
                        <tr>
                            <td>Entity-Level Controls (ELC) Evaluation</td>
                            <td>Board composition and oversight (COSO Principle 2); tone-at-the-top assessment (Principle 1); organisational structure and authority matrix (Principle 3); HR competency framework (Principle 4); accountability mechanism (Principle 5). ELC sets the foundation for transaction-level testing.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Risk-Control-Matrix (RCM) Construction</td>
                            <td>Bottom-up RCM build per significant account balance and disclosure; mapping to financial-statement assertions (existence, completeness, accuracy, valuation, rights and obligations, presentation); risk identification per assertion; management-implemented controls catalogued with descriptor, owner, frequency, evidence type. Not a templated checklist - each company's RCM is unique to its transaction cycles.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Test of Design (ToD) Through Walkthrough</td>
                            <td>For each significant control, inquiry of control owner, observation of control operation, walkthrough of one or more transactions, and inspection of supporting evidence. ToD conclusion - control is suitably designed to prevent or detect material misstatement.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Test of Operating Effectiveness (ToOE) Sampling</td>
                            <td>Period-spread sample testing per ICAI Guidance Note sample sizes - daily manual controls 25-60; weekly 12-25; monthly 5-15; quarterly 3; annual 1. Automated controls require smaller samples once ITGCs are tested. Sample selection covers the full audit period including before any control change.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>IT General Controls (ITGC) Audit</td>
                            <td>Access management (user provisioning, periodic access review, dormant account lockout, SoD enforcement); change management (production deploy approval, version control); computer operations (job scheduling, batch monitoring, incident management); backup and recovery (BCP / DR testing); SDLC; data centre security. ITGC failure breaks reliance on all automated application controls.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Fraud Risk Assessment Review (COSO Principle 8)</td>
                            <td>Annual fraud risk assessment review per business cycle covering management override, asset misappropriation, financial reporting fraud - the COSO fraud triangle (opportunity, pressure, rationalisation). Cross-reference to CARO 2020 Clause 3(xi) fraud reporting and Section 143(12) ADT-4 filing threshold.</td>
                            <td><span class="badge-included">Standard / Complex</span></td>
                        </tr>
                        <tr>
                            <td>Deficiency Evaluation and Aggregation</td>
                            <td>Per ICAI Guidance Note three-tier classification - Inconsequential, Significant Deficiency, Material Weakness. Deficiency aggregation - multiple Significant Deficiencies in the same process may aggregate to a Material Weakness; Patron's audit working file documents the aggregation analysis explicitly.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>CFS IFC Mutatis Mutandis (Section 129(4))</td>
                            <td>For groups - parent IFC, consolidation controls, and component-auditor coordination under SA 600 for Companies Act subsidiaries. Non-Act components (LLPs, foreign entities) excluded from CFS IFC scope but parent-level mapping controls in scope.</td>
                            <td><span class="badge-included">Group / Listed</span></td>
                        </tr>
                        <tr>
                            <td>KAM Disclosure Coordination (SA 701)</td>
                            <td>For listed entities and large unlisted entities - Material Weakness in IFC translates into Key Audit Matter (KAM) disclosure under SA 701. Patron coordinates KAM wording with main audit report partner and Audit Committee.</td>
                            <td><span class="badge-included">Listed / Large</span></td>
                        </tr>
                        <tr>
                            <td>Annexure B Drafting, UDIN and AOC-4 Filing</td>
                            <td>Annexure B drafted in ICAI Guidance Note format - title, audited entity identification, scope, management responsibility, auditor responsibility, opinion (unmodified or with material weakness paragraph), basis for opinion, management response. UDIN generated covering the complete signed package; Form AOC-4 filed on MCA21 V3 within 30 days of AGM.</td>
                            <td><span class="badge-included">All Tiers</span></td>
                        </tr>
                        <tr>
                            <td>Year-on-Year Remediation Tracking</td>
                            <td>Prior-year management letter deficiency tracking; current-year remediation status verification; deficiency trending across multiple audit periods; Audit Committee remediation calendar coordination under Section 177(4)(vii).</td>
                            <td><span class="badge-included">Mid-size+</span></td>
                        </tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: 7-STEP PROCESS -->
<section class="steps-section" id="procedure-section">
    <div class="section-container">
        <div class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">6-Step IFC Audit Methodology</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured workflow from applicability scoping through Annexure B filing - COSO 2013 mapping, bottom-up Risk-Control-Matrix construction, walkthrough-based Test of Design, period-spread Test of Operating Effectiveness with ICAI sample sizes, deficiency evaluation per the ICAI Guidance Note classification framework, and integrated Annexure B drafting with UDIN and MCA21 V3 AOC-4 filing.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Applicability Scoping and Engagement Setup</h3>
                    <p class="step-description">
                        Week 1. Section 143(3)(i) applicability test using turnover Rs 50 crore (latest audited) and aggregate borrowings Rs 25 crore peak test. MCA Notification G.S.R. 583(E) 13 June 2017 exemption check including Section 137 (AOC-4) and Section 92 (MGT-7) filing-compliance verification. Engagement letter signed; significant account scoping; entity-level controls walkthrough.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Applicability locked
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Significant accounts scoped
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
                                <line x1="68" y1="68" x2="92" y2="92" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                                <text x="50" y="55" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">SCOPE</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Scoping</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">COSO 2013 Mapping Across 5 Components and 17 Principles</h3>
                    <p class="step-description">
                        Weeks 1-2. Map company's control structure to the COSO 2013 framework - Control Environment (5 Principles), Risk Assessment (4 Principles), Control Activities (3 Principles), Information and Communication (3 Principles), Monitoring Activities (2 Principles). Each Principle is tested for "present and functioning" status. Principle 8 (fraud) and Principle 11 (ITGC) get extra depth.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            5 components mapped
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            17 principles checked
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="42" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">COSO</text>
                                <text x="60" y="58" font-size="9" fill="#F5A623" text-anchor="middle" font-weight="700">5 / 17</text>
                                <text x="60" y="72" font-size="7" fill="#14365F" text-anchor="middle">FRAMEWORK</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Framework</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Risk-Control-Matrix Construction and Walkthrough</h3>
                    <p class="step-description">
                        Weeks 2-4. For each significant account, decompose the relevant transaction cycle into process steps and identify controls at each step. Classify as Key, Process, or ITGC. Populate RCM with control descriptor, owner, frequency (daily / weekly / monthly / quarterly / event-driven), evidence type, and risk-assertion mapping. Walkthrough of one transaction per significant control completes Test of Design.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            RCM populated
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ToD complete
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3"/>
                                <line x1="60" y1="20" x2="60" y2="80" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                                <line x1="30" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                                <line x1="30" y1="54" x2="90" y2="54" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                                <line x1="30" y1="66" x2="90" y2="66" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                                <text x="60" y="92" font-size="8" fill="#F5A623" text-anchor="middle" font-weight="700">RCM</text>
                            </svg>
                        </div>
                        <span class="illustration-label">RCM Built</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Test of Operating Effectiveness Sampling</h3>
                    <p class="step-description">
                        Weeks 4-7. Statistically defensible sample of control operations across the audit period - not just at year-end. Sample sizes per ICAI Guidance Note - daily manual controls 25-60; weekly 12-25; monthly 5-15; quarterly 3; annual 1. Automated controls require smaller samples once ITGCs are tested. ToOE exceptions trigger root-cause analysis - was the exception isolated or systemic?
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Period-spread sampling
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Root cause analysed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="30" y="15" width="60" height="70" rx="4" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="30" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">ToOE</text>
                                <line x1="40" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="40" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="40" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="40" y1="70" x2="80" y2="70" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <text x="60" y="82" font-size="8" fill="#F5A623" text-anchor="middle" font-weight="700">SAMPLE</text>
                            </svg>
                        </div>
                        <span class="illustration-label">ToOE Done</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Deficiency Evaluation and Aggregation</h3>
                    <p class="step-description">
                        Week 7. Each ToD or ToOE deficiency classified per ICAI Guidance Note - Inconsequential (not severe enough), Significant Deficiency (merits attention by board), Material Weakness (reasonable possibility of material misstatement; triggers modified Annexure B opinion). Deficiencies aggregated across controls - multiple Significant Deficiencies in the same process may aggregate to a Material Weakness.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Tiered classification
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Aggregation analysed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <circle cx="60" cy="45" r="14" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="49" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">3-TIER</text>
                                <line x1="40" y1="78" x2="80" y2="78" stroke="#F5A623" stroke-width="3"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Classified</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Annexure B Drafting, UDIN and AOC-4 Filing</h3>
                    <p class="step-description">
                        Weeks 8 + 30-day AGM window. Annexure B drafted in ICAI prescribed format - title, audited entity identification, scope, management responsibility, auditor responsibility, opinion (unmodified or with material weakness paragraph), basis for opinion, management response. UDIN generated covering complete signed package (main report + Annexure A CARO + Annexure B IFC). Form AOC-4 filed on MCA21 V3 within 30 days of AGM.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Annexure B signed
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            AOC-4 filed
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="60" cy="50" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <path d="M42 50 L55 63 L80 38" stroke="#F5A623" stroke-width="4" stroke-linecap="round" fill="none"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">ITGC Concurrent Testing (Cross-Cutting)</h3>
                    <p class="step-description">
                        Concurrent with Steps 3-4. Access management (provisioning, periodic review, dormant lockout, SoD); change management (deploy approval, version control); computer operations (job scheduling, batch monitoring); backup and recovery (BCP / DR testing); SDLC; data centre security. ITGC failure breaks reliance on all automated application controls - so this stream runs alongside RCM-based testing.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Access / change / ops
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ITGC integrated
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="30" y="40" width="60" height="40" rx="2" fill="#14365F" stroke="#F5A623" stroke-width="2"/>
                                <path d="M30 40 Q60 20 90 40" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="65" font-size="9" fill="#F5A623" text-anchor="middle" font-weight="700">ITGC</text>
                            </svg>
                        </div>
                        <span class="illustration-label">IT Controls</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">KAM Coordination for Listed Entities (SA 701)</h3>
                    <p class="step-description">
                        Week 8. For listed entities and large unlisted entities - any Material Weakness in IFC translates into Key Audit Matter (KAM) disclosure under SA 701 in the main audit report. Patron coordinates KAM wording with main audit report partner, the Audit Committee under Section 177(4)(vii), Independent Directors (Schedule IV(ii)(4)), and NFRA where applicable.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            SA 701 KAM
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Audit Committee
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="40" width="70" height="45" rx="2" fill="#14365F" stroke="#F5A623" stroke-width="2"/>
                                <polygon points="60,15 35,40 85,40" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="68" font-size="9" fill="#F5A623" text-anchor="middle" font-weight="700">KAM</text>
                            </svg>
                        </div>
                        <span class="illustration-label">SA 701</span>
                        <span class="step-number-large">08</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for IFC Audit Engagement</h2>
            <div class="content-text">
                
                                <p>For an effective IFC audit engagement, the following documents should be shared. Patron accepts via WhatsApp +91 945 945 6700, secure file transfer, e-mail or in-person at Pune / Mumbai / Delhi / Gurugram offices.</p>
                <ul>
                    <li><strong>Section 134(5)(e) Board IFC Statement:</strong> Director Responsibility Statement confirming adequacy and operating effectiveness of IFC; signed by board.</li>
                    <li><strong>Section 177(4)(vii) Audit Committee Evaluation:</strong> Audit Committee minutes evaluating IFC; periodic IFC dashboard.</li>
                    <li><strong>Section 149(8) Independent Director Affirmations:</strong> Independent Director self-certification on integrity of financial information and robustness of controls per Schedule IV(ii)(4).</li>
                    <li><strong>Process Documentation (SOPs):</strong> Standard Operating Procedures for each significant business process - revenue, procurement, payroll, treasury, inventory, fixed assets, financial close, IT operations.</li>
                    <li><strong>Authority Matrix and Delegation:</strong> Approvals matrix - who can approve what; delegation of authority documentation.</li>
                    <li><strong>Risk Register:</strong> Enterprise risk register with financial-reporting risks identified.</li>
                    <li><strong>Fraud Risk Assessment:</strong> COSO Principle 8 - fraud risk identification per business cycle covering management override, asset misappropriation and financial reporting fraud.</li>
                    <li><strong>Internal Audit Reports (Section 138):</strong> Internal audit reports for the audit period; CARO 2020 Clause 3(xiv) cross-reference.</li>
                    <li><strong>ITGC Documentation:</strong> Access control policy, change management policy, system development life cycle (SDLC) documents, backup and recovery procedures, business continuity plan.</li>
                    <li><strong>ERP and Finance System Configuration:</strong> User access list with role assignments, segregation-of-duties matrix, system access logs, change history.</li>
                    <li><strong>Reconciliation Logs:</strong> Bank, GST, TDS, vendor, customer, inter-company, payroll, fixed-asset reconciliations - monthly with sign-offs.</li>
                    <li><strong>Period-End Close Calendar:</strong> Day-by-day close timeline; control sign-offs at each step; consolidation flow.</li>
                    <li><strong>Whistleblower Mechanism:</strong> Whistleblower policy; complaints register; investigation outcomes.</li>
                    <li><strong>Prior-Year Management Letter:</strong> Previous auditor's management letter with deficiencies; current-year remediation status.</li>
                    <li><strong>Section 137 / Section 92 Filing Compliance Proof:</strong> AOC-4 and MGT-7 filing acknowledgements for prior years (mandatory for any Pvt Ltd relying on MCA 13 June 2017 exemption).</li>
                </ul>
                <p style="margin-top:16px;">Verify framework references through the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3 portal)</a>; auditing standards and guidance notes at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>; NFRA-monitored audit framework at the <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">National Financial Reporting Authority</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common IFC Deficiencies and Remediation Patterns</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Inadequate Segregation of Duties (SoD)</td>
                            <td>Most-common Significant Deficiency in mid-size Pvt Ltd companies. Same person initiates, approves and records transactions - typical in lean finance teams of 3 to 5 people. COSO Principle 10 violation.</td>
                            <td>Implement two-person rule for high-value transactions; configure ERP roles to enforce SoD; introduce compensating monthly review by CFO or external accountant; document compensating control in the RCM. Where team is too small for full SoD, auditor accepts compensating controls but reports any control failure as Significant Deficiency.</td>
                        </tr>
                        <tr>
                            <td>Manual Revenue Cut-Off Failures</td>
                            <td>Material Weakness pattern - revenue recognised after performance obligation but invoiced and recorded in the wrong period. Common at the March-31 boundary where ERP customisations are imperfect. COSO Principle 12 (deploy controls through policies and procedures) and Principle 16 (monitoring) violation.</td>
                            <td>Implement automated revenue cut-off control in ERP using delivery confirmation date; introduce period-end revenue accrual review by CFO; reconcile sales register, delivery register and invoice register on cut-off date.</td>
                        </tr>
                        <tr>
                            <td>ITGC Weakness - Excessive Access</td>
                            <td>Frequent finding in growing companies that have not periodically reviewed user access. Former employees with active credentials, finance staff with developer access to production ERP, lack of segregation between IT support and IT change. COSO Principle 11 (technology controls) violation.</td>
                            <td>Quarterly access review by data owner; automated dormant-account lockout; production access change-control workflow with management approval; review IT support tickets touching financial data.</td>
                        </tr>
                        <tr>
                            <td>Bank Reconciliation Inadequacy</td>
                            <td>Monthly bank reconciliation prepared late, or prepared by the same person who records bank transactions. COSO Principle 12 violation.</td>
                            <td>Automate bank statement import via banking API or MT940 file; configure reconciliation in ERP with independent reviewer; introduce monthly reconciliation sign-off by CFO; review aged un-reconciled items above materiality threshold each month.</td>
                        </tr>
                        <tr>
                            <td>GST Reconciliation Gaps</td>
                            <td>Variations between books, GSTR-1, GSTR-3B, and GSTR-2A / 2B left unreconciled. COSO Principle 10 (control activities for tax) and Principle 16 (monitoring) violation. Material from FY 2024-25 onwards as GST scrutiny tightens.</td>
                            <td>Monthly automated reconciliation between books and GSTR with documented sign-off; ageing of unmatched items; quarterly review by CFO; cross-reference to CARO 2020 Clause 3(vii) on statutory dues.</td>
                        </tr>
                        <tr>
                            <td>Fraud Risk Assessment Missing</td>
                            <td>COSO Principle 8 - the entity considers the potential for fraud in assessing risks. Many Pvt Ltd companies have no documented fraud risk assessment.</td>
                            <td>Prepare annual fraud risk assessment per business cycle covering management override, asset misappropriation, financial reporting fraud (the COSO fraud triangle - opportunity, pressure, rationalisation); document anti-fraud controls; cross-reference with CARO 2020 Clause 3(xi) fraud reporting and Section 143(12) ADT-4 filing threshold.</td>
                        </tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 10: FEES -->
<section class="content-section" id="fees-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron IFC Audit Engagement - Scope and Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Free IFC Applicability Consultation</td>
                            <td>Free - 30-minute applicability scoping with Section 143(3)(i) trigger test and MCA 13 June 2017 exemption check; in-person at any Patron office or by phone / video</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (entry-level diagnostic add-on)</td>
                            <td>Starting from INR 2,999 (Exl GST and Govt. Charges) for initial scoping document with applicability indication and exemption status; credited if statutory audit engagement signed within 30 days</td>
                        </tr>
                        <tr>
                            <td>Tier 1 - Pvt Ltd Just Crossing Threshold (Rs 50 cr turnover / Rs 25 cr borrowing)</td>
                            <td>Rs 1,75,000 to Rs 4,00,000 (excl. GST) - bundled statutory audit + CARO 2020 Annexure A + IFC Section 143(3)(i) Annexure B; 5 to 6 weeks engagement; first-year IFC retro-fit including RCM construction, ITGC documentation, fraud risk assessment</td>
                        </tr>
                        <tr>
                            <td>Tier 2 - Mid-size Pvt Ltd (Rs 50 to 100 crore revenue)</td>
                            <td>Rs 4,50,000 to Rs 9,00,000 (excl. GST) - full IFC audit with bottom-up RCM construction, period-spread ToOE sampling, comprehensive ITGC testing, deficiency aggregation per ICAI Guidance Note; 6 to 7 weeks engagement</td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Large Unlisted Pvt Ltd (Rs 100 to 500 crore revenue)</td>
                            <td>Rs 9,50,000 to Rs 22,00,000 (excl. GST) - comprehensive IFC audit with CFS IFC mutatis mutandis under Section 129(4), SA 600 component auditor coordination, multi-process RCM, year-round engagement; 7 to 10 weeks</td>
                        </tr>
                        <tr>
                            <td>Tier 4 - Listed Entity with KAM Disclosure</td>
                            <td>From Rs 25,00,000 (excl. GST) - NFRA-monitored audit with Material Weakness Key Audit Matter under SA 701, NSE / BSE Listing Regulations compliance, SA 600 group audit, Audit Committee coordination under Section 177(4)(vii); 10 to 14 weeks engagement</td>
                        </tr>
                        <tr>
                            <td>NBFC / Fintech (Lending IT Controls Deep Dive)</td>
                            <td>From Rs 4,00,000 (excl. GST) - NBFC Base Layer / Middle Layer ITGC depth covering lending application, customer onboarding, KYC / AML, IRACP Directions, FLDG / co-lending; 7 to 11 weeks</td>
                        </tr>
                        <tr>
                            <td>Group with CFS IFC Mutatis Mutandis Component Add-On</td>
                            <td>Rs 75,000 to Rs 3,00,000 per component (Companies Act entity only) - additional per-component fee on top of Tier 1-4 parent fee; LLP and non-Act components excluded from scope</td>
                        </tr>
                        <tr>
                            <td>IFC Readiness Assessment (Standalone Advisory)</td>
                            <td>Rs 1,00,000 to Rs 4,00,000 (excl. GST) - pre-audit-period gap assessment for companies anticipating first-year IFC reporting; not a statutory audit; 3 to 5 weeks engagement; deficiency roadmap delivered</td>
                        </tr>
                        <tr>
                            <td>Manufacturing IFC (Inventory + Cost Records)</td>
                            <td>Bundled in Tier 1-4 fee - inventory cycle controls under COSO Principle 10, cost records under Section 148 cross-reference, perpetual / periodic inventory reconciliation; see <a href="/statutory-audit-for-manufacturing-companies">statutory audit for manufacturing</a></td>
                        </tr>
                        <tr>
                            <td>E-commerce IFC (Revenue Cycle ITGC)</td>
                            <td>Bundled in Tier 1-4 fee - revenue cycle controls covering marketplace reconciliation, payment gateway settlement, returns and refunds; see <a href="/statutory-audit-for-ecommerce-companies">statutory audit for e-commerce</a></td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Internal Financial Controls Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20to%20engage%20Patron%20for%20an%20IFC-compliant%20statutory%20audit%20under%20Section%20143(3)(i)%20-%20please%20share%20availability%20for%20free%20applicability%20consultation." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IFC in the Statutory Audit Cycle - Stage-Wise Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Engagement and Planning</td>
                            <td>Week 1 - applicability test under MCA G.S.R. 583(E); significant account scoping; entity-level controls walkthrough; engagement letter; significant account scoping</td>
                        </tr>
                        <tr>
                            <td>COSO 2013 Framework Mapping</td>
                            <td>Weeks 1 to 2 - mapping company control structure to 5 components and 17 principles; Principle 8 fraud and Principle 11 ITGC depth coverage</td>
                        </tr>
                        <tr>
                            <td>Pre-Year-End Interim Audit</td>
                            <td>Weeks 2 to 4 - RCM construction; walkthrough of each significant control; Test of Design conclusions per significant account</td>
                        </tr>
                        <tr>
                            <td>Mid-Period Test of Operating Effectiveness</td>
                            <td>Weeks 4 to 5 - sample testing across the first 8 to 9 months of audit period; reduces audit-evidence concentration risk</td>
                        </tr>
                        <tr>
                            <td>ITGC Audit (Concurrent)</td>
                            <td>Concurrent with ToOE - access, change, operations, backup and recovery testing; SDLC review; data centre security walkthrough</td>
                        </tr>
                        <tr>
                            <td>Year-End ToOE Rollforward</td>
                            <td>Weeks 5 to 7 - sample testing rollforward to year-end; remediation testing for re-implemented controls; period-end close calendar walkthrough</td>
                        </tr>
                        <tr>
                            <td>Deficiency Aggregation and Evaluation</td>
                            <td>Week 7 - Inconsequential / Significant Deficiency / Material Weakness classification per ICAI Guidance Note; aggregation analysis where multiple Significant Deficiencies relate to the same process</td>
                        </tr>
                        <tr>
                            <td>Management Response and Remediation Memo</td>
                            <td>Weeks 7 to 8 - management response on each deficiency; remediation roadmap with calendar; Audit Committee deficiency reporting under Section 177(4)(vii)</td>
                        </tr>
                        <tr>
                            <td>Annexure B Drafting and Partner Review</td>
                            <td>Week 8 - SA 220 quality review; KAM coordination if Material Weakness for listed / large entities under SA 701</td>
                        </tr>
                        <tr>
                            <td>UDIN Generation</td>
                            <td>Week 8 - UDIN generated covering complete signed package (main audit report + Annexure A CARO 2020 + Annexure B IFC + Section 143(3) reporting)</td>
                        </tr>
                        <tr>
                            <td>AOC-4 Filing on MCA21 V3</td>
                            <td>Within 30 days of AGM - MCA21 V3 with Annexure A (CARO) + Annexure B (IFC) attached; delay attracts Rs 100 per day MCA additional fees plus Section 147 penalty Rs 25,000 to Rs 5,00,000</td>
                        </tr>
                        <tr>
                            <td>Section 137 (AOC-4) / Section 92 (MGT-7) Filing Compliance Audit</td>
                            <td>Ongoing - critical for Pvt Ltd companies relying on MCA 13 June 2017 exemption; any year's filing default reopens IFC applicability for that year</td>
                        </tr>
                        <tr>
                            <td>Year-on-Year Remediation Tracking</td>
                            <td>Continuous - prior-year management letter deficiency tracking; current-year remediation status verification; Audit Committee remediation calendar review</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Section 137 Filing Compliance - The Exemption Trap:</strong> Pvt Ltd companies relying on the MCA 13 June 2017 exemption must re-test their Section 137 (AOC-4) and Section 92 (MGT-7) ROC filing-compliance status before each year's audit. A single year's filing default reopens IFC reporting applicability for that year - the exemption is not "once exempt, always exempt." This is the most commonly overlooked compliance trap. <strong>First-Year IFC Audit Burden:</strong> Pvt Ltd companies crossing either the Rs 50 crore turnover threshold or the Rs 25 crore borrowing threshold for the first time face a heavier first-year IFC audit - RCM construction, ITGC documentation, fraud risk assessment, and COSO mapping must all be retro-fitted within the audit period. <strong>Material Weakness Consequences:</strong> A Material Weakness in IFC carries compounding consequences - investor due-diligence red flag, lender covenant trigger, KAM disclosure under SA 701 (for listed entities and large unlisted ones), NFRA monitoring trigger, and reputational risk in public-domain filings.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Patron's IFC Audit Approach Differs</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">Year-Round Engagement, Not Year-End Exercise</h3>
                <p class="feature-description">Patron treats IFC audit as a year-round engagement rather than a year-end exercise. Pre-year-end interim audit covers RCM construction and Test of Design; mid-period ToOE covers the first 8-9 months; year-end rollforward closes the period. This compresses year-end audit risk and delivers earlier signals on the likely Annexure B opinion.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 class="feature-title">Bottom-Up Risk-Control-Matrix Build</h3>
                <p class="feature-description">RCM built bottom-up from significant accounts and assertions - not a templated checklist. Each company's RCM is unique to its transaction cycles and control environment. Controls classified as Key, Process, or ITGC with descriptor, owner, frequency and evidence type. Audit programme is structured around the RCM.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 class="feature-title">Mid-Period ToOE Rollforward (Not Year-End-Only)</h3>
                <p class="feature-description">Mid-period Test of Operating Effectiveness rather than year-end-only - reduces audit-evidence concentration risk, allows remediation within the audit period if deficiencies surface early, and delivers earlier signals on the likely Annexure B opinion. ICAI Guidance Note sample sizes - daily 25-60, weekly 12-25, monthly 5-15, quarterly 3, annual 1.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">Deficiency Aggregation Logic per ICAI GN</h3>
                <p class="feature-description">Per ICAI Guidance Note three-tier classification - Inconsequential, Significant Deficiency, Material Weakness. Multiple Significant Deficiencies in the same process can aggregate to a Material Weakness; Patron's audit working file documents the aggregation analysis explicitly. This is critical for KAM disclosure decisions for listed entities.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg>
                </div>
                <h3 class="feature-title">ITGC Integrated with RCM (Not Bolt-On)</h3>
                <p class="feature-description">IT General Controls (access, change, operations, backup and recovery) integrated with RCM rather than treated as a bolt-on stream. COSO Principle 11 coverage. ITGC failure breaks reliance on all automated application controls - Patron's audit working file maps each automated control to its underlying ITGC dependencies.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">Sister Page Integration with CARO 2020</h3>
                <p class="feature-description">Patron's IFC engagement is integrated with Annexure A <a href="/caro-2020-reporting" style="color:inherit;text-decoration:underline;">CARO 2020</a> reporting - together they form the complete Section 143 reporting framework. CARO 2020 Clause 3(xiv) on internal audit consideration is directly informed by IFC audit work product. UDIN covers the complete signed package.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pvt Ltd Companies Crossing the Threshold, NBFCs, SaaS, Listed Entities</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"The statutory audit was clean and completed well before deadline. No last-minute rush."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- MD, Trading Firm, Mumbai</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"First-year IFC retro-fit was structured - week-by-week deliverables, clear scope, no surprises on fee. Annexure B closed without Material Weakness."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- CFO, D2C Brand, Bangalore</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Coverage:</strong> Trusted by a growing roster of Pvt Ltd companies crossing the IFC threshold across manufacturing, financial services, real estate, e-commerce and SaaS, NBFC Base Layer and Middle Layer for lending IT controls and IRACP Directions IFC, family-owned business groups for CFS IFC under Section 129(4) mutatis mutandis, India subsidiaries of foreign parents for SA 600 component auditor coordination, and listed entities for NFRA-monitored audits with Material Weakness Key Audit Matter disclosures under SA 701.</p>

                <p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron services IFC-applicable Pvt Ltd companies, mid-size groups, and listed entities across India. Engagement options - in-person at any office, hybrid in-person plus remote portal-based deliverables, or full-remote secure file transfer with VC walkthroughs.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / In-House vs Big-Four vs Patron-Led IFC Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Statutory authority to sign Annexure B</td>
                            <td>Section 141 disqualification - cannot sign</td>
                            <td>Qualified - signed by audit partner</td>
                            <td>Qualified - signed by audit partner</td>
                        </tr>
                        <tr>
                            <td>COSO 2013 mapping (5 components, 17 principles)</td>
                            <td>Not signable - cannot self-audit</td>
                            <td>Heavy template-driven approach</td>
                            <td>Bottom-up from company facts</td>
                        </tr>
                        <tr>
                            <td>Risk-Control-Matrix build</td>
                            <td>N/A</td>
                            <td>Centralised technical team templates</td>
                            <td>Per significant account, partner-led</td>
                        </tr>
                        <tr>
                            <td>Mid-period ToOE rollforward</td>
                            <td>N/A</td>
                            <td>Standard procedure on listed audits; less common on mid-size</td>
                            <td>Standard procedure across all engagement tiers</td>
                        </tr>
                        <tr>
                            <td>Deficiency aggregation analysis</td>
                            <td>N/A</td>
                            <td>Heavy multi-layer review</td>
                            <td>ICAI Guidance Note aggregation logic explicitly documented in working file</td>
                        </tr>
                        <tr>
                            <td>ITGC access / change / operations</td>
                            <td>N/A</td>
                            <td>IT audit specialist team (separate billing)</td>
                            <td>ITGC integrated with RCM in single team</td>
                        </tr>
                        <tr>
                            <td>KAM disclosure coordination (SA 701)</td>
                            <td>N/A</td>
                            <td>Heavy partner / quality reviewer involvement</td>
                            <td>Partner-led KAM drafting and Audit Committee coordination</td>
                        </tr>
                        <tr>
                            <td>CFS IFC mutatis mutandis (Section 129(4))</td>
                            <td>N/A</td>
                            <td>SA 600 group audit infrastructure</td>
                            <td>SA 600 component auditor coordination with documented reliance</td>
                        </tr>
                        <tr>
                            <td>NFRA monitoring trigger management</td>
                            <td>N/A</td>
                            <td>Direct NFRA liaison capability</td>
                            <td>NFRA-monitored audit experience; quality control under SA 220</td>
                        </tr>
                        <tr>
                            <td>Cost (mid-size Pvt Ltd Rs 100 cr revenue)</td>
                            <td>Apparent zero - unsignable</td>
                            <td>Rs 18 to 35 lakh</td>
                            <td>Rs 4.5 to 9 lakh</td>
                        </tr>

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 14: RELATED SERVICES -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Related Patron Services and Industry IFC Pages</h2>
            <div class="content-text">
                
                                <p>Internal Financial Controls audit links to several adjacent Section 143 reporting and compliance workflows - all delivered by Patron's audit partner team for a single signed package and UDIN.</p>
                <ul>
                    <li>Parent service: <a href="/statutory-audit">Statutory Audit in India</a> - the parent India page covering the complete Section 143 statutory audit framework.</li>
                    <li>Sister authority page: <a href="/caro-2020-reporting">CARO 2020 Reporting</a> - the parallel Section 143 reporting framework (CARO under Section 143(11); IFC under Section 143(3)(i)). Together CARO and IFC form the complete Section 143 reporting framework.</li>
                    <li><strong>Industry IFC depth pages</strong> (process-level IFC application):
                        <ul>
                            <li><a href="/statutory-audit-for-manufacturing-companies">Statutory Audit for Manufacturing Companies</a> - inventory cycle IFC + cost records under Section 148 cross-reference.</li>
                            <li><a href="/statutory-audit-for-financial-services">Statutory Audit for Financial Services</a> - lending IT controls + IRACP Directions IFC for NBFCs.</li>
                            <li><a href="/statutory-audit-for-ecommerce-companies">Statutory Audit for E-commerce Companies</a> - revenue cycle ITGC + marketplace reconciliation.</li>
                        </ul>
                    </li>
                    <li><a href="/internal-audit">Internal Audit (Section 138)</a> - separate from IFC; complementary. Internal audit covers management's own controls; IFC audit is the statutory auditor's separate opinion.</li>
                    <li><a href="/tax-audit">Tax Audit (Section 44AB)</a> - typically engaged alongside statutory audit and IFC.</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Compliance</a> - ROC filings including ADT-1, AOC-4 (with Annexure A CARO and Annexure B IFC), MGT-7.</li>
                    <li><a href="/appointment-of-auditor">Appointment of Auditor</a> - first auditor and AGM appointment.</li>
                    <li><a href="/change-of-auditor">Change of Auditor</a> - Section 140 resignation with Section 140(2) statement.</li>
                </ul>
                <p style="margin-top:16px;">Verify framework references through the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21 V3 portal)</a>; auditing standards and guidance notes at the <a href="https://www.icai.org" target="_blank" rel="noopener">Institute of Chartered Accountants of India</a>; NFRA-monitored audit framework at the <a href="https://www.nfra.gov.in" target="_blank" rel="noopener">National Financial Reporting Authority</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework - Section 143 Reporting</h2>
            <div class="content-text">
                
                                <p><strong>Governing Statutes and Regulations:</strong> Companies Act 2013; Companies (Accounts) Rules 2014; Companies (Audit and Auditors) Rules 2014; MCA Notification G.S.R. 583(E) dated 13 June 2017; ICAI Guidance Note on Audit of IFC over Financial Reporting (14 September 2015) and Implementation Guide (Revised 2018); COSO Internal Control - Integrated Framework (2013); ICAI Standards on Auditing (SAs).</p>
                <ul>
                    <li><strong>Section 143(3)(i) Companies Act 2013:</strong> Auditor's report shall state whether the company has adequate internal financial controls with reference to financial statements in place and the operating effectiveness of such controls.</li>
                    <li><strong>Section 134(5)(e) Companies Act 2013:</strong> Director Responsibility Statement - directors had laid down internal financial controls and such controls are adequate and operating effectively. Wider IFC definition than Section 143(3)(i).</li>
                    <li><strong>Section 134(3)(q) Companies Act 2013:</strong> Board Report content - details of adequacy of IFC with reference to financial statements.</li>
                    <li><strong>Rule 8(5)(viii) Companies (Accounts) Rules 2014:</strong> Board Report of every company must state details of adequacy of IFC with reference to financial statements - mandatory irrespective of IFC audit exemption.</li>
                    <li><strong>Section 177(4)(vii) Companies Act 2013:</strong> Audit Committee terms of reference - evaluation of internal financial controls and risk management systems.</li>
                    <li><strong>Section 149(8) and Schedule IV(ii)(4) Companies Act 2013:</strong> Independent Directors shall satisfy themselves on integrity of financial information and that financial controls and systems of risk management are robust and defensible.</li>
                    <li><strong>Section 138 and Rule 13 Companies (Accounts) Rules 2014:</strong> Internal audit requirement - separate from IFC audit but provides input to it; CARO 2020 Clause 3(xiv) cross-reference.</li>
                    <li><strong>Section 129(4) Companies Act 2013:</strong> Provisions applicable to financial statements of holding company apply mutatis mutandis to CFS - IFC reporting applies to CFS for Companies Act components only.</li>
                    <li><strong>MCA Notification G.S.R. 583(E) dated 13 June 2017:</strong> Pvt Ltd exemption from Section 143(3)(i) - OPC, Small Company, or Pvt Ltd with turnover up to Rs 50 crore OR aggregate borrowings up to Rs 25 crore conditional on no Section 137 (AOC-4) or Section 92 (MGT-7) default.</li>
                    <li><strong>Section 137 Companies Act 2013:</strong> Filing of financial statements with ROC in Form AOC-4 within 30 days of AGM. Default voids the MCA 13 June 2017 IFC exemption.</li>
                    <li><strong>Section 92 Companies Act 2013:</strong> Filing of annual return with ROC in Form MGT-7 within 60 days of AGM. Default voids the MCA 13 June 2017 IFC exemption.</li>
                    <li><strong>Section 143(11) Companies Act 2013:</strong> CARO 2020 reporting - Annexure A to main audit report; sister provision to Section 143(3)(i).</li>
                    <li><strong>Section 143(12) Companies Act 2013:</strong> Fraud reporting by auditor - ADT-4 filing threshold for fraud above Rs 1 crore.</li>
                    <li><strong>Section 147 Companies Act 2013:</strong> Penalty for contraventions including Section 137 / 143 default - Rs 25,000 to Rs 5,00,000.</li>
                    <li><strong>ICAI Guidance Note on Audit of IFC over Financial Reporting (14 September 2015):</strong> The primary practitioner manual for Section 143(3)(i) audit work.</li>
                    <li><strong>ICAI Implementation Guide on Audit of IFC (Revised 2018):</strong> Illustrative wordings, sample sizes, deficiency evaluation framework.</li>
                    <li><strong>COSO Internal Control - Integrated Framework (2013):</strong> Released 14 May 2013 by the Committee of Sponsoring Organizations - 5 components, 17 principles; foundation framework for IFC reporting.</li>
                    <li><strong>SA 200 (Overall Objectives):</strong> Independent auditor's overall responsibilities including planning and performance.</li>
                    <li><strong>SA 220 (Quality Control for Audit):</strong> Engagement quality review including IFC working file review.</li>
                    <li><strong>SA 240 (Fraud):</strong> Auditor's responsibility for fraud risk including COSO Principle 8 cross-reference.</li>
                    <li><strong>SA 315 (Risk Assessment - including Internal Control component):</strong> Foundational for IFC scoping.</li>
                    <li><strong>SA 330 (Auditor Response to Assessed Risks):</strong> Procedures responsive to identified risks.</li>
                    <li><strong>SA 600 (Using Work of Component Auditors):</strong> For CFS IFC under Section 129(4).</li>
                    <li><strong>SA 700 / 701 / 705 (Audit Report and KAM):</strong> Main audit report structure; Key Audit Matter disclosure including Material Weakness in IFC.</li>
                    <li><strong>CARO 2020 Clause 3(xiv):</strong> Auditor to report whether company has internal audit system commensurate with size and nature of business and whether reports of internal auditors were considered by statutory auditor - direct cross-link to IFC audit work.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on company size, turnover and borrowings tier, control maturity, ITGC environment complexity, number of significant accounts, group structure under Section 129(4), KAM disclosure requirements for listed entities, NFRA monitoring exposure, and statutory pass-through fees. Companies Act 2013 amendments may affect specific section mapping.</p>

            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section id="faq-section" class="content-section" style="background-color: #ffffff;">
    <div class="content-container">
        <div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions - IFC Audit</h2>
                    <p class="faq-expanded__lead">Answers to the most common questions on Internal Financial Controls audit under Section 143(3)(i) of the Companies Act 2013 - statutory authority, COSO 2013 framework, Pvt Ltd exemption mechanics, Risk-Control-Matrix, Test of Design and Operating Effectiveness, CFS IFC mutatis mutandis, and Annexure B reporting.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'IFC Audit'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is internal financial controls audit?</h3>
                        <div class="faq-expanded__a"><p>Internal Financial Controls (IFC) audit under Section 143(3)(i) of the Companies Act, 2013 is the statutory auditor's reasoned opinion on whether the company has adequate internal financial controls with reference to financial statements in place and whether such controls are operating effectively. The audit follows the COSO Internal Control - Integrated Framework (2013) with five components and seventeen principles, supported by ICAI's Guidance Note on Audit of IFC over Financial Reporting (14 September 2015) and Implementation Guide (Revised 2018). The IFC audit report is Annexure B to the main audit report and is filed with Form AOC-4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Section 143(3)(i) of the Companies Act?</h3>
                        <div class="faq-expanded__a"><p>Section 143(3)(i) of the Companies Act, 2013 is the statutory provision requiring the auditor to state in the audit report whether the company has adequate internal financial controls with reference to financial statements (IFC-FR) in place and the operating effectiveness of such controls. Effective for audits of financial years commencing on or after 1 April 2015 (deferred to FY ending 31 March 2016). The scope is narrower than Section 134(5)(e) which covers a wider IFC definition including business controls; Section 143(3)(i) is restricted to controls with financial reporting impact only.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is IFC applicable to private limited companies?</h3>
                        <div class="faq-expanded__a"><p>Yes, with a conditional exemption. MCA Notification G.S.R. 583(E) dated 13 June 2017 exempts Pvt Ltd companies from Section 143(3)(i) reporting if they meet one of the following - (a) OPC under Section 2(62), (b) Small Company under Section 2(85), (c) turnover does not exceed Rs 50 crore as per the latest audited financial statement, or (d) aggregate borrowings from banks, financial institutions, or any body corporate do not exceed Rs 25 crore at any point during the financial year. Critically, the exemption stands voided if the company has defaulted in filing its financial statements under Section 137 (AOC-4) or annual return under Section 92 (MGT-7) with the Registrar of Companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the COSO framework?</h3>
                        <div class="faq-expanded__a"><p>The COSO Internal Control - Integrated Framework (2013) is the globally adopted framework for designing and evaluating internal control systems, published by the Committee of Sponsoring Organizations of the Treadway Commission on 14 May 2013 (replacing the 1992 framework). It contains five components - Control Environment, Risk Assessment, Control Activities, Information and Communication, Monitoring Activities - and seventeen explicit principles. For an internal control system to be effective under COSO 2013, each principle must be "present and functioning" and the five components must operate in an integrated manner. COSO is the foundation framework adopted in India for IFC reporting under Section 143(3)(i).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between Section 143(3)(i) and Section 134(5)(e)?</h3>
                        <div class="faq-expanded__a"><p>Section 143(3)(i) is the auditor's reporting requirement - restricted to IFC with reference to financial statements (IFC-FR), i.e. controls that have a financial reporting impact. Section 134(5)(e) is the Director Responsibility Statement requirement - covering a wider IFC definition including both business and financial controls (orderly and efficient conduct of business, safeguarding of assets, prevention and detection of frauds and errors, accuracy and completeness of accounting records, timely preparation of reliable financial information). The director's responsibility under Section 134(5)(e) applies even where the auditor's Section 143(3)(i) reporting is exempt; Rule 8(5)(viii) of the Companies (Accounts) Rules, 2014 makes the Board Report disclosure mandatory for all companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is a Risk-Control-Matrix?</h3>
                        <div class="faq-expanded__a"><p>A Risk-Control-Matrix (RCM) is the auditor's structured working file that maps each significant account balance and disclosure to (a) the related financial-statement assertions (existence, completeness, accuracy, valuation, rights and obligations, presentation), (b) the financial-reporting risks per assertion, and (c) the management-implemented controls that address each risk. The RCM is the single source of truth for both Test of Design (verifying control design adequacy) and Test of Operating Effectiveness (verifying control performance across the audit period). The audit program is structured around the RCM, with sample sizes calibrated to control frequency.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is Test of Design and Test of Operating Effectiveness?</h3>
                        <div class="faq-expanded__a"><p>Test of Design (ToD) is the audit procedure to evaluate whether a control is suitably designed to prevent or detect material misstatements - typically performed through inquiry, observation, walkthrough of one or more transactions, and inspection of supporting evidence. Test of Operating Effectiveness (ToOE) is the audit procedure to evaluate whether the control operated as designed during the audit period - sample testing of multiple transactions across the period with sample size driven by control frequency (daily controls 25-60 samples; weekly 12-25; monthly 5-15; quarterly 3; annual 1 per ICAI Guidance Note). A control must pass both ToD and ToOE to be relied upon for the IFC opinion.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does IFC reporting apply to consolidated financial statements?</h3>
                        <div class="faq-expanded__a"><p>Yes - Section 129(4) of the Companies Act, 2013 provides that provisions applicable to financial statements of a holding company apply mutatis mutandis to consolidated financial statements. IFC reporting under Section 143(3)(i) therefore applies to CFS as well. However, it applies only for components that are companies under the Companies Act, 2013. Where a component is an LLP, a foreign entity not subject to the Companies Act, or another vehicle, the parent auditor's CFS IFC opinion is limited to (a) the parent-level entity controls, (b) the consolidation controls, and (c) the IFC of Companies Act component subsidiaries (relying on component auditors per SA 600 where applicable). Non-Act components are outside the CFS IFC scope.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>IFC audit kya hota hai?</strong> Section 143(3)(i) Companies Act ke under statutory auditor ka opinion - company ka Internal Financial Controls financial statements ke saath adequately designed hai aur operating effectively hai ya nahi. COSO 2013 framework ka use hota hai with 5 components aur 17 principles.</li>
                    <li><strong>Pvt Ltd ko IFC reporting karni padti hai?</strong> Generally haan, lekin MCA Notification 13 June 2017 ke under exemption hai - OPC, Small Company, ya turnover Rs 50 cr tak / borrowings Rs 25 cr tak vali Pvt Ltd. Exemption ke liye Section 137 aur 92 ROC filings mein default nahi hona chahiye.</li>
                    <li><strong>Section 134(5)(e) aur 143(3)(i) mein kya farak hai?</strong> 134(5)(e) Director ki responsibility hai - wider definition with business + financial controls. 143(3)(i) Auditor ki reporting hai - narrower scope (only IFC-FR). Director ka statement har company ko dena padta hai per Rule 8(5)(viii).</li>
                    <li><strong>COSO framework mein kitne principles hain?</strong> 17 principles across 5 components - Control Environment (5), Risk Assessment (4), Control Activities (3), Information and Communication (3), Monitoring Activities (2). 2013 mein 1992 framework replace hua.</li>
                    <li><strong>Test of Design aur Test of Operating Effectiveness mein kya farak hai?</strong> Test of Design - control properly designed hai ya nahi (inquiry, walkthrough). Test of Operating Effectiveness - control year-bhar properly operate hua ya nahi (sample testing). Dono pass karne padte hain reliance ke liye.</li>
                    <li><strong>IFC report kahan jaata hai?</strong> Annexure B as part of main audit report. CARO 2020 Annexure A hota hai. Dono AOC-4 ke saath MCA21 V3 pe file hote hain, AGM ke 30 din ke andar.</li>
                    <li><strong>ITAT Mumbai / Delhi / Pune?</strong> IFC audit ka ITAT se direct connection nahi - IFC ek audit reporting hai, dispute resolution forum nahi. Material Weakness ka effect tax / SEBI / NFRA proceedings mein zaroor padta hai. Call +91 945 945 6700.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Time-Critical Reasons to Engage Early on IFC Audit</h2>
            <div class="content-text">
                
                                <p>IFC audit reporting under Section 143(3)(i) is mandatory for every statutory audit of every applicable company. Three time-critical reasons make early engagement essential.</p>
                <p><strong>First, AOC-4 Filing Window 30 Days of AGM:</strong> The Annexure B IFC report is filed with AOC-4 within 30 days of the AGM - delay attracts Rs 100 per day MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000.</p>
                <p><strong>Second, Material Weakness Compounding Consequences:</strong> A Material Weakness in IFC carries compounding consequences - investor due-diligence red flag, lender covenant trigger, KAM disclosure under SA 701 (for listed entities and large unlisted ones), NFRA monitoring trigger, and reputational risk in public-domain filings. Mid-period ToOE rather than year-end testing allows remediation within the audit period if deficiencies surface early.</p>
                <p><strong>Third, MCA 13 June 2017 Exemption is Conditional on Filing Compliance:</strong> The exemption is conditional on Section 137 (AOC-4) and Section 92 (MGT-7) ROC filing compliance - any Pvt Ltd company that was relying on the exemption should re-test its filing-compliance status before each year's audit; a single year's filing default reopens IFC reporting applicability for that year. Pvt Ltd companies crossing either the Rs 50 crore turnover threshold or the Rs 25 crore borrowing threshold for the first time face a heavier first-year IFC audit - RCM construction, ITGC documentation, fraud risk assessment, and COSO mapping must all be retro-fitted within the audit period.</p>
                <p><strong>Action Now:</strong> Engage Patron for an IFC-compliant statutory audit under Section 143(3)(i) - call <a href="tel:+919459456700">+91 945 945 6700</a>, WhatsApp, or visit any Patron office (Pune, Mumbai, Delhi, Gurugram). Free 30-minute applicability consultation - in-person, by phone or video. Patron's bundled statutory audit + CARO 2020 + IFC fee starts at Rs 1.75 lakh for Pvt Ltd just crossing the threshold.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for IFC-Compliant Statutory Audit</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">Internal Financial Controls audit under Section 143(3)(i) of the Companies Act, 2013 is the most demanding disclosure framework in Indian audit practice - the COSO 2013 framework with five components and seventeen principles, supported by ICAI's Guidance Note (14 September 2015) and Implementation Guide (Revised 2018), demands not just attestation of year-end financial balances but year-long evaluation of control design and operating effectiveness. The framework is functionally similar to US Section 404 SOX reporting and triggered Indian audit firms to adopt the COSO 2013 framework that anchors most SOX 404 programs globally.</p>
                <p style="color:rgba(255,255,255,0.92);">Applicability is broad - every company except OPC, Small Companies, and qualifying Pvt Ltd companies (turnover up to Rs 50 crore OR borrowings up to Rs 25 crore) - and the conditional MCA 13 June 2017 exemption stands voided by any Section 137 or Section 92 ROC filing default. Patron handles IFC as a year-round engagement with bottom-up Risk-Control-Matrix build, mid-period Test of Operating Effectiveness rollforward rather than year-end concentration, deficiency aggregation per the ICAI Guidance Note logic, and integrated ITGC capability covering ERP access, change management, and computer operations.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP - a peer-reviewed CA and CS practice with offices in Pune, Mumbai, Delhi and Gurugram - brings 15+ years of practice depth from first-year-of-applicability Pvt Ltd companies crossing the threshold to listed-entity NFRA-monitored audits with Material Weakness KAM disclosures. Together with our sister authority page on <a href="/caro-2020-reporting" style="color:#fff;text-decoration:underline;">CARO 2020 reporting</a>, IFC audit forms the complete Section 143 reporting framework on the site. Pricing Rs 1.75 lakh starting for threshold-crossing Pvt Ltd up to Rs 25 lakh+ for listed entities with KAM disclosure; IFC readiness standalone advisory Rs 1 lakh to Rs 4 lakh. Single UDIN, single signed package covering main audit report + Annexure A CARO + Annexure B IFC.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20to%20engage%20Patron%20for%20an%20IFC-compliant%20statutory%20audit%20under%20Section%20143(3)(i)%20-%20please%20share%20availability%20for%20free%20applicability%20consultation." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Internal%20Financial%20Controls%20Audit&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20would%20like%20to%20engage%20Patron%20for%20an%20IFC-compliant%20statutory%20audit%20under%20Section%20143(3)(i)%20of%20the%20Companies%20Act%202013.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Section 143 Reporting Framework - Related Pages</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Parent statutory audit hub, sister CARO 2020 authority page (Annexure A), industry IFC depth pages for manufacturing, financial services and e-commerce, internal audit (Section 138), tax audit (Section 44AB), and Pvt Ltd compliance services.</p>
           
                        <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Section 143 Reporting Framework - Related Pages</div>
                <div class="pa-block-sub">Parent statutory audit hub, sister CARO 2020 authority page, industry IFC depth pages and related compliance services</div>
                <div class="pa-cross-grid">
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Parent hub</div></div></a>
                    <a href="/caro-2020-reporting" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">CARO 2020 Reporting</div><div class="pa-card-sub">Sister - Annexure A</div></div></a>
                    <a href="/statutory-audit-for-financial-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><div><div class="pa-card-title">Financial Services Audit</div><div class="pa-card-sub">NBFC ITGC depth</div></div></a>
                    <a href="/statutory-audit-for-manufacturing-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">Manufacturing Audit</div><div class="pa-card-sub">Inventory + cost records</div></div></a>
                    <a href="/statutory-audit-for-ecommerce-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">E-commerce Audit</div><div class="pa-card-sub">Revenue cycle ITGC</div></div></a>
                    <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">Section 138</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Section 44AB</div></div></a>
                    <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">AOC-4 + MGT-7</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Offices</div>
                <div class="pa-block-sub">4-office network with pan-India IFC audit engagement</div>
                <div class="pa-city-grid">
                    <a href="/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This authority page is reviewed quarterly (Tier 1 - 3 months) and immediately on MCA notification updates affecting Section 143(3)(i) applicability or exemption thresholds, ICAI Guidance Note or Implementation Guide revisions, COSO framework updates, Standards on Auditing amendments (SA 200 / 220 / 240 / 315 / 330 / 600 / 700 / 701 / 705), CARO 2020 amendments, and NFRA monitoring circulars.</p>
        </div>
    </div>
</section>


</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
     function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

<!-- ============================================
     CONSULTATION FORM - Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7-15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
      var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

<script>

</script>

<script>
// TOC scroll arrows
const tocWrapper = document.getElementById('tocWrapper');
document.getElementById('tocLeft').addEventListener('click', function() { tocWrapper.scrollBy({ left: -200, behavior: 'smooth' }); });
document.getElementById('tocRight').addEventListener('click', function() { tocWrapper.scrollBy({ left: 200, behavior: 'smooth' }); });

// TOC active state on scroll — only tracks sections that have a matching TOC
// button, keeps the active pill scrolled into view, and stays correct at the
// very bottom of the page.
(function () {
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-btn'));
    var wrapper = document.getElementById('tocWrapper');
    if (!tocBtns.length) return;
    var entries = tocBtns.map(function (btn) {
        var id = (btn.getAttribute('href') || '').replace('#', '');
        return { btn: btn, section: document.getElementById(id) };
    }).filter(function (e) { return e.section; });
    if (!entries.length) return;
    var OFFSET = 200;
    var ticking = false;
    function setActive(entry) {
        tocBtns.forEach(function (b) { b.classList.remove('active'); });
        if (!entry) return;
        entry.btn.classList.add('active');
        if (wrapper) {
            var left = entry.btn.offsetLeft;
            var right = left + entry.btn.offsetWidth;
            if (left < wrapper.scrollLeft) {
                wrapper.scrollTo({ left: left - 16, behavior: 'smooth' });
            } else if (right > wrapper.scrollLeft + wrapper.clientWidth) {
                wrapper.scrollTo({ left: right - wrapper.clientWidth + 16, behavior: 'smooth' });
            }
        }
    }
    function onScroll() {
        ticking = false;
        var y = window.pageYOffset + OFFSET;
        var active = entries[0];
        for (var i = 0; i < entries.length; i++) {
            if (entries[i].section.offsetTop <= y) { active = entries[i]; }
        }
        if ((window.innerHeight + window.pageYOffset) >= (document.documentElement.scrollHeight - 2)) {
            active = entries[entries.length - 1];
        }
        setActive(active);
    }
    window.addEventListener('scroll', function () {
        if (!ticking) { window.requestAnimationFrame(onScroll); ticking = true; }
    }, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll();
})();
</script>

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');
    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>
<!-- External JS Dependencies (loaded by master layout in production) -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection