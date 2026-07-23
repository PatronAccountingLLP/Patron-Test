
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
    <title>CARO Reporting - 21 Clauses</title>
    <meta name="description" content="Complete CARO 2020 guide - applicability matrix, all 21 clauses walkthrough with practitioner depth, Pvt Ltd and small company exemption, common qualifications.">
    <link rel="canonical" href="/caro-2020-reporting">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="CARO 2020 Reporting - 21 Clauses 2026 | Patron Accounting">
    <meta property="og:description" content="Complete CARO 2020 guide - applicability matrix, all 21 clauses walkthrough with practitioner depth, Pvt Ltd and small company exemption, common qualifications.">
    <meta property="og:url" content="/caro-2020-reporting">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/caro-2020-reporting-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="CARO 2020 Reporting - 21 Clauses 2026 | Patron Accounting">
    <meta name="twitter:description" content="Complete CARO 2020 guide - applicability matrix, all 21 clauses walkthrough with practitioner depth, Pvt Ltd and small company exemption, common qualifications.">
    <meta name="twitter:image" content="/images/caro-2020-reporting-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/caro-2020-reporting#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Statutory Audit",
          "item": "/statutory-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "CARO 2020 Reporting",
          "item": "/caro-2020-reporting"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/caro-2020-reporting#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 stands for Companies (Auditor's Report) Order, 2020. It is the order issued by the Ministry of Corporate Affairs under Section 143(11) of the Companies Act, 2013 on 25 February 2020, specifying additional matters on which a statutory auditor must report. CARO 2020 contains 21 clauses (against 16 in CARO 2016) and applies to statutory audits of financial years commencing on or after 1 April 2021. The CARO report is an annexure to the main audit report under SA 700 and is filed with the Registrar of Companies as part of Form AOC-4 within 30 days of the AGM."
          }
        },
        {
          "@type": "Question",
          "name": "Is CARO applicable to private limited companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, CARO 2020 applies to private limited companies in general, but a Pvt Ltd company is exempt if it satisfies all three of the following conditions as at the balance sheet date - (a) it is not a subsidiary or holding company of a public company, (b) its paid-up share capital plus reserves and surplus does not exceed Rs 1 crore, (c) its total borrowings from any bank or financial institution at any point during the year does not exceed Rs 1 crore, and (d) its total revenue does not exceed Rs 10 crore. Failing any one of these conditions triggers full CARO applicability. Additionally, if a Pvt Ltd company is also a small company under Section 2(85), the small-company exemption overrides the Pvt Ltd conditions."
          }
        },
        {
          "@type": "Question",
          "name": "What companies are exempt from CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Para 1(2) of CARO 2020 exempts six categories of companies - (i) banking companies as defined in Section 5(c) of the Banking Regulation Act 1949, (ii) insurance companies as defined under the Insurance Act 1938, (iii) Section 8 companies licensed under the Companies Act 2013 (charitable purpose), (iv) One Person Companies as defined in Section 2(62), and small companies as defined in Section 2(85) - paid-up capital up to Rs 4 crore and turnover up to Rs 40 crore (revised w.e.f. 15 September 2022 from Rs 50 lakh / Rs 2 crore), and (v) qualifying private limited companies meeting all three thresholds of paid-up plus reserves up to Rs 1 crore, borrowings up to Rs 1 crore, and revenue up to Rs 10 crore."
          }
        },
        {
          "@type": "Question",
          "name": "How many clauses does CARO 2020 have?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 contains 21 substantive reporting clauses against 16 in CARO 2016. Seven new clauses have been added in CARO 2020 - intangible asset records (Clause 3(i)(a)(B)), benami property proceedings (3(i)(e)), working capital quarterly statement reconciliation (3(ii)(b)), surrendered income (3(viii)), internal audit adequacy (3(xiv)), cash losses (3(xvii)), auditor resignation issues (3(xviii)), going-concern liability obligation (3(xix)), CSR utilisation (3(xx)), and CFS component-auditor qualifications (3(xxi)). Existing clauses on PP and E, inventory, loans, fraud and RBI registration have been redrafted with significantly expanded sub-clauses."
          }
        },
        {
          "@type": "Question",
          "name": "What is the small company exemption from CARO?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 2(85) of the Companies Act 2013 defines a small company as a private company whose paid-up share capital does not exceed Rs 4 crore (revised from Rs 50 lakh) and turnover for the immediately preceding financial year does not exceed Rs 40 crore (revised from Rs 2 crore) - both thresholds revised with effect from 15 September 2022. The small-company exemption from CARO 2020 is unconditional - paragraph 12 of the ICAI Guidance Note on CARO 2020 (Revised 2022) clarifies that a small company remains exempt from CARO even if it falls under any of the criteria specified for private companies under Para 1(2)(v)."
          }
        },
        {
          "@type": "Question",
          "name": "Does CARO 2020 apply to consolidated financial statements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CARO 2020 does NOT apply to the auditor's report on consolidated financial statements with one exception - Clause (xxi) applies to CFS. Under Clause (xxi), the auditor of the consolidated financial statements is required to indicate the details of companies included in the consolidation where the respective component auditors have issued qualifications or adverse remarks in their CARO reports on the component standalone financial statements, along with the paragraph numbers of the qualifications. The remaining 20 clauses are reported in the standalone audit reports of each component."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between CARO 2016 and CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three structural differences. First, CARO 2020 has 21 clauses against CARO 2016's 16 - seven new clauses cover intangibles, benami, working capital reconciliation, surrendered income, internal audit, cash losses, auditor resignation, going concern, CSR, and CFS. Second, CARO 2020 nine existing clauses are redrafted with markedly deeper sub-clause disclosure (PP and E now separated from intangibles; inventory now requires opinion on coverage and 10 percent discrepancy reporting; fraud now covers fraud on the company too; RBI registration now four sub-clauses). Third, CARO 2020 deletes the managerial remuneration clause (CARO 2016 Clause xi) as it is already covered in the main audit report."
          }
        },
        {
          "@type": "Question",
          "name": "What are the new clauses added in CARO 2020?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Seven new clause-areas added in CARO 2020 - Clause 3(i)(a)(B) intangible asset records, 3(i)(e) benami property proceedings under the Benami Transactions (Prohibition) Act 1988, 3(ii)(b) working capital quarterly statement reconciliation above Rs 5 crore, 3(viii) surrendered income in tax assessments, 3(xiv) internal audit adequacy and consideration by statutory auditor, 3(xvii) cash losses in current and preceding year, 3(xviii) auditor resignation and consideration of outgoing auditor's issues, 3(xix) material uncertainty on going-concern obligations, 3(xx) CSR utilisation with ongoing-project and non-ongoing-project bifurcation, and 3(xxi) component-auditor qualifications in CFS."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/caro-2020-reporting#service",
      "name": "CARO 2020 Reporting and Statutory Audit Engagement",
      "description": "CARO 2020 reporting service as part of Patron Accounting's statutory audit engagement under Section 143 of the Companies Act 2013. Covers the 21-clause Annexure A reporting under Section 143(11), Companies (Auditor's Report) Order 2020 issued by MCA on 25 February 2020 and effective for financial years commencing on or after 1 April 2021. Applies to all companies and foreign companies subject to Para 1(2) exemptions for OPC, small companies (Section 2(85)), banking, insurance, Section 8 entities, and qualifying private limited companies meeting the Para 1(2)(v) three-condition test. Includes clause-by-clause risk mapping under SA 315, audit procedure execution per the ICAI Guidance Note on CARO 2020 (Revised 2022), Para 4 qualification drafting, Schedule III Additional Regulatory Information reconciliation, CFS Clause (xxi) aggregation for group audits, and integration with the main audit report under SA 700/701/705.",
      "serviceType": "CARO 2020 Reporting and Statutory Audit Annexure A",
      "provider": {
        "@id": "/#organization"
      },
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Auditor's report",
          "sameAs": "https://en.wikipedia.org/wiki/Auditor%27s_report"
        },
        {
          "@type": "Thing",
          "name": "Companies Act 2013",
          "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
        },
        {
          "@type": "Thing",
          "name": "Auditing",
          "sameAs": "https://en.wikipedia.org/wiki/Audit"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "CARO 2020 Audit Engagement Plans (India)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "First-Year-of-CARO Pvt Ltd (Just Crossed Exemption)",
            "price": "75000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/caro-2020-reporting"
          },
          {
            "@type": "Offer",
            "name": "Mid-size Pvt Ltd Statutory Audit + CARO (Rs 10 to 50 crore revenue)",
            "price": "200000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/caro-2020-reporting"
          },
          {
            "@type": "Offer",
            "name": "Large Unlisted Pvt Ltd (Rs 50 to 250 crore revenue)",
            "price": "550000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/caro-2020-reporting"
          },
          {
            "@type": "Offer",
            "name": "Listed Entity with KAM + IFC + CARO",
            "price": "2000000",
            "priceCurrency": "INR",
            "availability": "https://schema.org/InStock",
            "url": "/caro-2020-reporting"
          }
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
        /* Amount column  -  right-align only on tables with .table-amount class */
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
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
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

        /* Process Evidence Screenshot  -  Plan 3.2 */
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
                        CARO 2020 Reporting - All 21 Clauses Explained for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Authority:</span> Section 143(11) Companies Act 2013; MCA-issued 25 Feb 2020; effective FY 2021-22 onwards</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coverage:</span> 21 substantive clauses with 50+ sub-clauses; CARO 2016 had only 16 clauses</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Exemptions:</span> OPC, Small Co (Rs 4 cr + Rs 40 cr), Banking, Insurance, Section 8, qualifying Pvt Ltd</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Practitioner Guide:</span> ICAI Guidance Note on CARO 2020 (Revised 2022); cross-referenced with Standards on Auditing</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20CARO%202020%20Compliant%20Statutory%20Audit&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20CARO%202020%20compliant%20statutory%20audit%20engagement.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CARO%202020%20compliant%20statutory%20audit%20engagement%20with%20clause-by-clause%20depth." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - CARO 2020 Reporting'/>
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
                                <option value="caro-2020-reporting" selected>CARO 2020 Reporting (this page)</option>
                                <option value="statutory-audit">Statutory Audit Engagement</option>
                                <option value="audit-report-types-india">Audit Report Types</option>
                                <option value="internal-financial-controls-audit">Internal Financial Controls Audit</option>
                                <option value="internal-audit">Internal Audit (Section 138)</option>
                                <option value="appointment-of-auditor">Appointment of Auditor</option>
                                <option value="private-limited-company-compliance">Private Limited Company Compliance</option>
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">First year of CARO after we crossed Rs 1 crore borrowings threshold. Patron's 21-clause gap analysis caught title-deed register gaps and inventory discrepancy reporting under Clause 3(ii)(a) - we remediated before sign-off. Clean CARO report with one qualified clause on Section 188 historical related-party transactions, substantively drafted under Para 4.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CFO</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Pvt Ltd Manufacturing, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The statutory audit was clean and completed well before deadline. No last-minute rush. Patron's CARO-report-reviewer skill flagged a potential Clause 3(vii)(a) qualification on GST payable for our trading subsidiary - we cleared dues before year-end. Schedule III ARI reconciliation matched CARO clauses perfectly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Director</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trading Firm, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Rs 45 crore revenue Pvt Ltd, just crossed CARO threshold last year. Patron's CARO readiness assessment 2 months ahead of year-end gave us time to reconstruct the intangible asset register under Clause 3(i)(a)(B). Got the first full CARO done with only Clause 3(xx) CSR shortfall qualification - manageable.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Controller</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mid-Size Pvt Ltd, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's Clause 3(xvi) four-sub-clause coordination was the most rigorous I have seen - Section 45-IA registration, NBFC activity without CoR verification, CIC qualification per RBI Master Direction, and multi-CIC group count documented with RBI portal screenshots. Audit committee comfort on CARO.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Audit Committee Member</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NBFC, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">10-component group CFS audit. Patron's Clause 3(xxi) aggregation captured one component-auditor qualification on Clause 3(i)(c) title deeds - cross-referenced with paragraph numbers in the CFS audit report. Lender diligence team accepted the disclosure without follow-up questions.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CFO</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Group CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Family Business Group, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
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
                    <p>Free initial consultation on CARO 2020 applicability and clause-level audit depth - in-person at any Patron office, by phone or video.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
            <a href="#what-section" class="toc-btn">What Is CARO 2020</a>
            <a href="#who-section" class="toc-btn">Who Should Reference</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#procedure-section" class="toc-btn">6-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documentation</a>
            <a href="#challenges-section" class="toc-btn">Common Qualifications</a>
            <a href="#fees-section" class="toc-btn">Engagement Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">DIY/Big-4/Patron</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">CARO 2020 Reporting - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - CARO 2020 Reporting Services at a Glance</strong></p>
                    <p>CARO 2020 (Companies Auditor's Report Order, 2020) is the format prescribed by the Ministry of Corporate Affairs under Section 143(11) of the Companies Act, 2013 specifying matters on which a statutory auditor must report. Issued 25 February 2020 and applicable from financial year 2021-22 onwards, CARO 2020 contains 21 clauses (CARO 2016 had 16) requiring auditor reporting on PP and E and intangibles, inventory, loans and investments, deposits, cost records, statutory dues, surrendered income, defaults and end-use, IPO proceeds, fraud, Nidhi compliance, related-party transactions, internal audit, non-cash transactions with directors, RBI registration, cash losses, auditor resignation, going-concern obligations, CSR, and consolidated-financial-statement qualifications. CARO 2020 does NOT apply to OPC, small companies, banking, insurance, Section 8 companies, or qualifying private limited companies.</p>
                </div>
                <p>Section 143 of the Companies Act, 2013 lays down the powers and duties of statutory auditors. Sub-section (11) specifically empowers the Central Government to specify additional reporting matters for specified classes of companies, in consultation with the National Financial Reporting Authority (NFRA). CARO is the order issued under this power. CARO has evolved through several iterations - the original MAOCARO 1988, subsequent revisions in 2003, 2004, 2015, 2016, and now CARO 2020.</p>
                <div class="table-responsive-wrapper" style="margin-top:24px;margin-bottom:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Authority</td><td>Section 143(11) of the Companies Act, 2013 - empowers Central Government to specify additional reporting matters</td></tr>
                        <tr><td>Issued By</td><td>Ministry of Corporate Affairs (MCA) on 25 February 2020</td></tr>
                        <tr><td>Applicability Start</td><td>Financial years commencing on or after 1 April 2021 (FY 2021-22 onwards; deferred from original 1 April 2020 due to COVID-19)</td></tr>
                        <tr><td>Number of Clauses</td><td>21 clauses with 50+ sub-clauses (CARO 2016 had 16 clauses)</td></tr>
                        <tr><td>Companies Covered</td><td>All companies including foreign companies as defined in Sec 2(42), subject to specific exemptions</td></tr>
                        <tr><td>CFS Treatment</td><td>CARO 2020 does NOT apply to consolidated financial statements EXCEPT for Clause (xxi)</td></tr>
                        <tr><td>Practitioner Guide</td><td>ICAI Guidance Note on CARO 2020 (Revised 2022)</td></tr>
                    </tbody>
                </table>
                </div>
                <p>The 2020 iteration adds seven entirely new clauses, redrafts nine existing clauses for deeper disclosure, and deletes the managerial remuneration clause (covered by the main audit report already). Patron treats CARO not as a separate ritual at the end of the audit, but as a structured framework woven into the audit plan from the start.</p>
                <p>The CARO report is annexed to the statutory auditor's main report under SA 700 and signed alongside it under the same UDIN. While the main audit report opines on whether the financial statements give a true and fair view, the CARO report provides clause-wise positive or negative attestation on specific compliance and disclosure matters, with reasons for any unfavourable or qualified answers required to be stated under Para 4. The CARO report is a public document filed with the Registrar of Companies as part of Form AOC-4 and is reviewed in lender diligence, investor due diligence, regulator inspections, and tax assessments. CARO sits within the Section 143 reporting package alongside the main report under SA 700/705 (with KAM under SA 701 and Going Concern under SA 570), Annexure B IFC report under Section 143(3)(i), and Section 143(3) ten-clause reporting.</p>
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
                <h2 class="section-title">What Is CARO 2020 Reporting?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>CARO 2020 reporting</strong> is the additional clause-wise auditor reporting required under <strong>Section 143(11) of the Companies Act, 2013</strong>, prescribed by the <strong>Companies (Auditor's Report) Order, 2020</strong> issued by the Ministry of Corporate Affairs on 25 February 2020. It contains <strong>21 clauses</strong> covering property, inventory, financial commitments, statutory compliance, fraud, related parties, and group-level qualifications, applicable to all companies and foreign companies except specified exempted categories.</p>
<p>The CARO report is annexed to the statutory auditor's main report under SA 700 and signed alongside it under the same UDIN. While the main audit report opines on whether the financial statements give a true and fair view, the CARO report provides <strong>clause-wise positive or negative attestation</strong> on specific compliance and disclosure matters, with <strong>reasons for any unfavourable or qualified answers required to be stated</strong> under Para 4.</p>
<p>CARO 2020 differs from its predecessor CARO 2016 in three structural ways. First, CARO 2020 has <strong>21 clauses against CARO 2016's 16</strong> - seven new clauses cover intangible asset records, benami property, revaluation, surrendered income, internal audit adequacy, cash losses, auditor resignation, going-concern obligations, CSR utilisation, and CFS-level qualifications. Second, existing clauses on PP and E, inventory, loans, fraud, RBI registration and Nidhi compliance have been <strong>redrafted with markedly deeper disclosure expectations</strong>. Third, the managerial remuneration clause has been deleted to avoid duplication with the main audit report.</p>
<p>The result is a significantly more granular reporting framework - and a markedly higher audit-evidence burden. The CARO report is a public document filed with the Registrar of Companies as part of <strong>Form AOC-4</strong> and is reviewed in lender diligence, investor due diligence, regulator inspections, and tax assessments.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for CARO 2020 Reporting:</strong></p>
                    <p><strong>Section 143(11):</strong> Provision in the Companies Act, 2013 empowering the Central Government to specify additional matters of inquiry and reporting in the statutory auditor's report. CARO is the order issued under this section.</p>
<p><strong>Para 1(2):</strong> Sub-paragraph of CARO 2020 listing the categories of companies to which the order does NOT apply - OPC, small company, banking, insurance, Section 8, and qualifying Pvt Ltd companies.</p>
<p><strong>Para 3:</strong> Sub-paragraph listing the 21 clauses on which the auditor is required to report. Each clause has between 1 and 5 sub-clauses requiring specific positive or negative answers with reasons.</p>
<p><strong>Para 4:</strong> Sub-paragraph requiring reasons to be stated for unfavourable or qualified answers, OR if the auditor is unable to express an opinion on any of the specified matters. Silence is not an option.</p>
<p><strong>ICAI Guidance Note (Revised 2022):</strong> Practitioner manual issued by the Institute of Chartered Accountants of India providing detailed guidance on each clause and sub-clause, including audit procedures, evidence requirements, and illustrative wordings.</p>
<p><strong>ADT-4:</strong> Form prescribed under Section 143(12) of the Companies Act and Rule 13 of the Companies (Audit and Auditors) Rules, 2014 for reporting fraud by the auditor to the Central Government where the fraud amount is Rs 1 crore or more.</p>
<p><strong>Small Company (Section 2(85)):</strong> Private company with paid-up capital up to Rs 4 crore AND turnover up to Rs 40 crore. Both thresholds revised with effect from 15 September 2022 (previously Rs 50 lakh + Rs 2 crore). Small-company exemption from CARO is unconditional.</p>
<p><strong>Schedule III Additional Regulatory Information (ARI):</strong> 2021 amendment to Schedule III adding parallel financial-statement disclosures covering title deeds, benami property, CSR shortfall, borrowing crystallisation, struck-off companies - significant overlap with CARO clauses.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CARO 2020 Reporting</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 143(11)</span>
                        <strong>CARO 2020 Authority</strong>
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
            <h2 class="section-title">Who Should Reference This Authority Page?</h2>
            <div class="content-text">
                
                <p>This pillar page on CARO 2020 reporting is the authority reference for the following readers:</p>
<ul>
    <li><strong>Chartered Accountants in practice</strong> conducting statutory audits under Section 143 of the Companies Act 2013 needing clause-by-clause audit procedure depth</li>
    <li><strong>CFOs and finance controllers of unlisted Pvt Ltd companies</strong> preparing for first CARO audit after crossing the small-company or Pvt Ltd exemption thresholds</li>
    <li><strong>Audit-firm staff and articled assistants</strong> studying clause-by-clause requirements under the ICAI Guidance Note on CARO 2020 (Revised 2022)</li>
    <li><strong>Company secretaries</strong> understanding CARO applicability matrix - OPC, small company, banking, insurance, Section 8, qualifying Pvt Ltd</li>
    <li><strong>NFRA-monitored listed entity finance teams</strong> tracking CARO clauses against Schedule III Additional Regulatory Information (ARI) disclosures</li>
    <li><strong>NBFC CFOs</strong> evaluating CARO Clause 3(xvi) four-sub-clause RBI registration test, CIC determination, and multi-CIC group count</li>
    <li><strong>Group / CFS auditors</strong> preparing CARO Clause 3(xxi) component-auditor qualification aggregation for consolidated financial statements</li>
    <li><strong>CA Final students</strong> preparing for the Audit paper with practitioner-level CARO depth</li>
    <li>Anyone needing the <strong>Pvt Ltd three-condition exemption matrix</strong> with the small-company override clarified per Para 12 of the ICAI Guidance Note</li>
    <li>Anyone seeking the <strong>full 21-clause walkthrough</strong> with sub-clause-level audit procedures and common qualification triggers</li>
</ul>
<h3 style="margin-top:24px;">Statutory Snapshot for CARO 2020</h3>
<ul>
    <li><strong>Section 143(11) Companies Act 2013:</strong> Empowers Central Government to specify additional auditor reporting matters; statutory authority for CARO</li>
    <li><strong>Companies (Auditor's Report) Order 2020:</strong> Notified by MCA on 25 February 2020; effective FY 2021-22 onwards</li>
    <li><strong>21 clauses + 50 sub-clauses:</strong> Substantively expanded from CARO 2016's 16 clauses; seven new clauses + nine redrafted</li>
    <li><strong>Para 1(2) Exemptions:</strong> OPC, small company (Sec 2(85)), banking, insurance, Section 8, qualifying Pvt Ltd (Para 1(2)(v))</li>
    <li><strong>Section 147 Penalty:</strong> Rs 25,000 to Rs 5,00,000 on auditor (Rs 1 lakh to Rs 25 lakh for fraudulent reporting) for non-compliance</li>
    <li><strong>Form AOC-4 Filing:</strong> Complete audit report package including CARO annexure filed with MCA21 V3 within 30 days of AGM</li>
    <li><strong>UDIN:</strong> Single UDIN covers main audit report + CARO annexure + IFC annexure - one ICAI portal generation</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron's CARO 2020 Review Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>First-Audit CARO Readiness Assessment</td><td>For Pvt Ltd companies crossing the small-company threshold or any of the three Pvt Ltd exemption conditions for the first time, Patron conducts a pre-audit CARO readiness review - 21-clause gap analysis, audit-trail strengthening for high-risk clauses (3(i)(c) title deeds, 3(ii) inventory verification, 3(vii) statutory dues, 3(xiii) related-party), and management representation walkthrough.</td></tr>
<tr><td>Clause-by-Clause Audit Procedure Application</td><td>During the statutory audit, Patron applies the ICAI Guidance Note procedures clause-by-clause - documenting audit evidence per clause, drafting clause-wise wordings, and tracking sub-clause sub-elements for the auditor's working file under SA 220 quality control.</td></tr>
<tr><td>Qualification Drafting and Adverse Remark Wording</td><td>Where CARO conclusions require an unfavourable or qualified answer, Patron drafts the clause wording per ICAI Guidance Note illustrative formats, includes the reasoned basis required by Para 4, and reconciles the qualification with the main audit report under SA 705 modifications framework.</td></tr>
<tr><td>Schedule III Additional Regulatory Information Reconciliation</td><td>Schedule III to the Companies Act 2013 was amended in 2021 to add Additional Regulatory Information disclosures - many overlap with CARO clauses (title deeds not in company name, benami property, CSR utilisation, borrowing crystallisation, struck-off-companies transactions). Patron reconciles CARO clauses with Schedule III ARI disclosures to avoid contradiction.</td></tr>
<tr><td>CFS Auditor Aggregation Under Clause (xxi)</td><td>For group audits where Patron is the parent auditor, we aggregate component-auditor CARO qualifications under Clause (xxi) with traceable paragraph cross-references in the CFS audit report - the only CARO clause that applies to consolidated financial statements.</td></tr>
<tr><td>Year-Round CARO-Reviewer Skill Integration</td><td>Patron's internal CARO-report-reviewer skill (used by our audit teams) provides clause-by-clause review checklists, common-qualification templates, ICAI Guidance Note citations, and consistency checks - applied to every CARO report before sign-off.</td></tr>
<tr><td>Section 143(12) Fraud Reporting Coordination Under Clause 3(xi)(b)</td><td>For frauds above the Rs 1 crore threshold, Patron coordinates Form ADT-4 filing with the Central Government under Section 143(12) read with Rule 13 of Companies (Audit and Auditors) Rules 2014; cross-link with Clause 3(xi)(a) fraud reporting and SA 240 fraud responsibilities.</td></tr>
<tr><td>NBFC and CIC Clause 3(xvi) Four-Sub-Clause Coordination</td><td>For NBFCs, Patron tests Clause 3(xvi) four sub-clauses - (a) Section 45-IA RBI registration mandatory and obtained, (b) NBFC activity without valid CoR (Chapter V offence), (c) CIC qualification per RBI Master Direction, (d) multi-CIC group count - with documented audit evidence from RBI Certificate of Registration.</td></tr>
<tr><td>UDIN Generation and AOC-4 Filing Coordination</td><td>One UDIN covers the entire signed package (main report + CARO + IFC) generated on the ICAI portal. Form AOC-4 with complete CARO annexure attachment filed with MCA21 V3 within 30 days of the AGM.</td></tr>

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
            <h2 class="section-title">Patron's 6-Step CARO 2020 Review Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">CARO is woven into the audit plan from day one - not applied as a year-end checklist. Each of the 21 clauses is mapped to the company's risk profile under SA 315 and tested with the audit-evidence procedures recommended in the ICAI Guidance Note (Revised 2022).</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Applicability Determination (4 Exemption Gates)</h3>
        <p class="step-description">First decision in every audit engagement - does CARO 2020 apply? Patron tests the four exemption gates: OPC (Section 2(62)), Small Company (Section 2(85) with revised Rs 4 crore + Rs 40 crore thresholds w.e.f. 15 Sep 2022), Section 8, and Pvt Ltd three-condition exemption (Para 1(2)(v)). Where borderline, the test is documented in the engagement working file. Where applicability changes year-on-year, first-year-of-CARO procedures are heavier - intangible asset records establishment, title-deed register reconstruction, related-party register validation.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-gate exemption test</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Para 12 ICAI override</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>First-year-of-CARO premium</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="15" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CARO TEST</text>
<rect x="22" y="38" width="22" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="33" y="48" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">OPC?</text>
<rect x="49" y="38" width="22" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="60" y="48" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SMALL?</text>
<rect x="76" y="38" width="22" height="14" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="87" y="48" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">SEC 8?</text>
<rect x="22" y="56" width="22" height="14" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="33" y="66" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PVT 3</text>
<rect x="49" y="56" width="22" height="14" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="60" y="66" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">BANK?</text>
<rect x="76" y="56" width="22" height="14" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="87" y="66" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">INS?</text>
                </svg>
            </div>
            <span class="illustration-label">Applicability Set</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Risk-Assessment-Driven Clause Mapping (SA 315)</h3>
        <p class="step-description">Patron maps each of the 21 clauses to the company's risk profile under SA 315 (Identifying and Assessing the Risks of Material Misstatement). For manufacturing - Clauses 3(i)(b) inventory physical verification, 3(ii) inventory and working capital limits, 3(vi) cost records, 3(vii) statutory dues carry heaviest weight. For NBFC - Clause 3(xvi) becomes a four-sub-clause test. For e-commerce - Clause 3(xv) non-cash transactions and 3(xiii) related-party (group-company sourcing) get amplified procedures.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 315 risk mapping</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Industry-calibrated weights</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit-evidence quantum per clause</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="50" r="38" fill="none" stroke="#14365F" stroke-width="1.5" stroke-dasharray="4 3"/>
<circle cx="35" cy="35" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="35" y="38" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">3(i)</text>
<circle cx="85" cy="35" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="85" y="38" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">3(ii)</text>
<circle cx="35" cy="65" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="35" y="68" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">3(vii)</text>
<circle cx="85" cy="65" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="85" y="68" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">3(xvi)</text>
<text x="60" y="53" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SA 315</text>
                </svg>
            </div>
            <span class="illustration-label">Clauses Mapped</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Audit Procedure Execution Per Clause</h3>
        <p class="step-description">For each applicable clause, Patron executes the ICAI Guidance Note recommended audit procedure - title-deed register inspection for Clause 3(i)(c), physical inventory attendance under SA 501 for 3(ii)(a), bank confirmation reconciliation for 3(ii)(b), statutory-dues age analysis for 3(vii), Form 26AS cross-check for 3(viii) surrendered income, default-history review for 3(ix), Section 42 documentation for 3(x)(b), board-meeting minutes scan for 3(xi) fraud and 3(xv) Section 192, related-party register confirmation for 3(xiii), internal-audit report review for 3(xiv), RBI Form CoR validation for 3(xvi)(a), cash-loss review for 3(xvii), CSR bank-statement trace for 3(xx).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICAI GN procedures</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 501 inventory attendance</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Working file documentation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="18" width="90" height="68" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="32" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CLAUSE 3(ii)(a)</text>
<rect x="24" y="42" width="72" height="10" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="60" y="49" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PHYSICAL ATTENDANCE SA 501</text>
<rect x="24" y="55" width="72" height="10" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
<text x="60" y="62" font-size="6" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">10% DISCREPANCY THRESHOLD</text>
<rect x="24" y="68" width="72" height="10" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/>
<text x="60" y="75" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">WORKING PAPER DOC</text>
                </svg>
            </div>
            <span class="illustration-label">Procedures Executed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Qualification Drafting Using CARO-Report-Reviewer Skill</h3>
        <p class="step-description">Where a clause requires an unfavourable or qualified answer, Patron's CARO-report-reviewer internal skill is invoked to draft the wording. The skill maintains a library of ICAI Guidance Note illustrative formats, common qualification templates by sub-clause, and consistency checks against the main audit report. Each qualification is drafted with the four mandatory elements - the specific sub-clause being qualified, the factual basis, the quantum where measurable, and the management response. Para 4 of CARO 2020 requires reasons for any unfavourable answer - silence or boilerplate is not permitted.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICAI GN illustrative wordings</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-element qualification format</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Para 4 reasoned basis</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="18" y="15" width="84" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="32" font-size="9" fill="#FD6B6D" font-weight="700" text-anchor="middle" font-family="Arial">QUALIFIED</text>
<line x1="28" y1="42" x2="92" y2="42" stroke="#FD6B6D" stroke-width="2.5"/>
<line x1="28" y1="52" x2="88" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="28" y1="60" x2="85" y2="60" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="28" y1="68" x2="90" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="28" y1="76" x2="82" y2="76" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<rect x="28" y="84" width="64" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/>
<text x="60" y="90" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PARA 4 REASONS</text>
                </svg>
            </div>
            <span class="illustration-label">Qualifications Drafted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Cross-Reference Reconciliation (Schedule III ARI + Main Report + 3CD)</h3>
        <p class="step-description">Patron reconciles CARO clauses against three parallel disclosures: (a) Schedule III Additional Regulatory Information disclosures in the financial statements (title deeds not in name, benami property, CSR shortfall, borrowing crystallisation, struck-off-companies transactions); (b) Main audit report and Key Audit Matters under SA 701 (any CARO qualification on a material matter should typically also feature as a Basis for Qualified Opinion or KAM); (c) Tax audit Form 3CD where the same matter is disclosed (e.g. Section 269ST cash receipts, Section 40(a)(ia) TDS defaults). Inconsistencies surfaced and resolved before sign-off.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule III ARI reconciliation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>KAM cross-link</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 3CD consistency</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="18" width="40" height="32" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/>
<text x="35" y="32" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">CARO</text>
<text x="35" y="42" font-size="6" fill="#10B981" font-weight="400" text-anchor="middle" font-family="Arial">Clause 3(i)(c)</text>
<rect x="65" y="18" width="40" height="32" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/>
<text x="85" y="32" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SCH III</text>
<text x="85" y="42" font-size="6" fill="#E8712C" font-weight="400" text-anchor="middle" font-family="Arial">ARI Title</text>
<path d="M55 34 L65 34" stroke="#14365F" stroke-width="2"/>
<rect x="15" y="55" width="90" height="32" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILIATION</text>
<text x="60" y="80" font-size="6" fill="#14365F" font-weight="400" text-anchor="middle" font-family="Arial">Main + CARO + KAM + 3CD</text>
                </svg>
            </div>
            <span class="illustration-label">Cross-Refs Locked</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Partner Review, UDIN and AOC-4 Filing</h3>
        <p class="step-description">The CARO annexure is reviewed by the audit partner alongside the main report; partner-review documentation is filed under SA 220 (Quality Control for Audit of Financial Statements). UDIN is generated on the ICAI portal covering the entire signed package (main + CARO + IFC). Form AOC-4 is filed with MCA21 V3 portal within 30 days of the AGM; the CARO annexure is part of the AOC-4 attachment. For CFS, the Clause (xxi) aggregation of component-auditor qualifications is prepared and included in the CFS audit report.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SA 220 partner review</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Single UDIN package</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOC-4 within 30 days</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="80" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<rect x="28" y="25" width="64" height="40" rx="2" fill="#FFFFFF" stroke="#14365F" stroke-width="0.5"/>
<line x1="32" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="32" y1="42" x2="78" y2="42" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<line x1="32" y1="49" x2="72" y2="49" stroke="#14365F" stroke-width="1" opacity="0.3"/>
<path d="M40 75 Q50 70 60 73 T80 75" stroke="#E8712C" stroke-width="1.8" fill="none"/>
<rect x="32" y="82" width="55" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="0.5"/>
<text x="60" y="88" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">UDIN + AOC-4</text>
                </svg>
            </div>
            <span class="illustration-label">Signed and Filed</span>
            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Checklist for CARO 2020 Audit</h2>
            <div class="content-text">
                
                <p>The audit working file supporting CARO 2020 reporting includes the following documents and evidence sources, mapped to specific clauses:</p>
<ul>
    <li><strong>Property, Plant and Equipment Register:</strong> Asset-wise register with description, location, original cost, accumulated depreciation, WDV, useful life, depreciation method - with separate intangible asset register (Clause 3(i)(a))</li>
    <li><strong>Title Deed Register:</strong> Every immovable property with title deed reference, name in which held; deeds in name of related parties separately disclosed (Clause 3(i)(c))</li>
    <li><strong>Revaluation Reports:</strong> Registered Valuer report; percentage change calculation against carrying value of each class of asset (Clause 3(i)(d))</li>
    <li><strong>Benami Transactions Search:</strong> Any proceedings initiated under Benami Transactions (Prohibition) Act, 1988; disclosure in financial statements (Clause 3(i)(e))</li>
    <li><strong>Physical Inventory Count Sheets:</strong> Year-end count with management attendance; pre-numbered sheets; sample test-count by auditor under SA 501 (Clause 3(ii)(a))</li>
    <li><strong>Working Capital Limits and Bank Confirmation:</strong> Sanction letters from banks/FIs where working capital limits above Rs 5 crore obtained on security of current assets; quarterly statements filed (Clause 3(ii)(b))</li>
    <li><strong>Loans and Investments Schedule:</strong> Loans/advances/guarantees/security given - to subsidiaries, JVs, associates, and others; terms; repayment schedule (Clause 3(iii))</li>
    <li><strong>Section 185 / 186 Compliance Register:</strong> Loans to directors/persons connected (Sec 185); inter-corporate loans and investments (Sec 186) within limits (Clause 3(iv))</li>
    <li><strong>Deposit Acceptance Records:</strong> Section 73-76 compliance; non-deposit DPT-3 filing; any deemed deposits (Clause 3(v))</li>
    <li><strong>Cost Records:</strong> Section 148 cost records and Cost Audit Report under Form CRA-1/CRA-2/CRA-3/CRA-4 (Clause 3(vi))</li>
    <li><strong>Statutory Dues Schedule:</strong> GST, TDS, PF, ESI, customs, excise, income tax, professional tax, cess - liability with ageing and dispute status (Clause 3(vii))</li>
    <li><strong>Form 26AS and Tax Assessment Orders:</strong> Surrendered or disclosed income under search and seizure or other proceedings (Clause 3(viii))</li>
    <li><strong>Default Schedule:</strong> Repayment defaults of any loan or borrowing; willful defaulter status; lender exits (Clause 3(ix))</li>
    <li><strong>IPO / FPO / Private Placement Documents:</strong> Application of proceeds; Section 42 compliance for private placement (Clause 3(x))</li>
    <li><strong>ADT-4 Reporting:</strong> Section 143(12) fraud reporting; Rule 13; whistleblower complaints register (Clause 3(xi))</li>
    <li><strong>Related Party Transaction Register:</strong> Section 188 contracts; Audit Committee approval (Sec 177); arm's-length basis documentation (Clause 3(xiii))</li>
    <li><strong>Internal Audit Reports:</strong> Section 138 internal audit reports for the year; statutory auditor consideration documentation (Clause 3(xiv))</li>
    <li><strong>RBI Certificate of Registration:</strong> Section 45-IA CoR; CIC determination per Master Direction; multi-CIC group count (Clause 3(xvi))</li>
    <li><strong>CSR Compliance Schedule:</strong> Section 135 board policy; spend tracker; unspent transfer to specified fund or Unspent CSR Account (Clause 3(xx))</li>
    <li><strong>Previous Auditor Resignation File:</strong> Issues raised by predecessor auditor in their NoC/Section 140(2) statement (Clause 3(xviii))</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common CARO Qualifications and Handling</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Clause 3(i)(c) Title Deeds Not in Company's Name</td><td>Most frequent CARO qualification in unlisted companies. Causes - properties acquired by promoters before incorporation and not transferred; properties held in trust for the company; family-business demerger residual; JDA pending conveyance.</td><td>Patron's handling - document each property in the prescribed CARO format (description, gross carrying value, name in which held, period since holding, reason); reconcile against Schedule III ARI title-deed disclosure; recommend management remediation plan (transfer through sale deed, gift deed, or court order).</td></tr>
<tr><td>Clause 3(vii)(a) Statutory Dues Default</td><td>Statutory dues not deposited regularly - GST, TDS, PF/ESI. Causes - cash-flow constraints, dispute pending resolution, system errors in challan generation.</td><td>Patron's handling - report instances where dues were outstanding for more than 6 months from the becoming-due date; classify into (a) regular but delayed and (b) disputed (Clause 3(vii)(b) with amount, forum and period). The classification matters - regular delays attract penalty interest; disputed amounts pending appeal are not a CARO violation if appropriately disclosed.</td></tr>
<tr><td>Clause 3(ix)(a) Loan Repayment Default</td><td>Default in repayment of loans or borrowings to banks/FIs/debenture-holders. Causes - cash-flow stress, deliberate non-payment, lender refusal to restructure.</td><td>Patron's handling - document the lender, amount, period of default, and whether the company has been declared a willful defaulter (Clause 3(ix)(b)); reconcile with Schedule III ARI default disclosure. A willful-defaulter finding is severe - triggers Section 164 director disqualification consequences and lender-side action under SARFAESI.</td></tr>
<tr><td>Clause 3(xiii) Related-Party Non-Compliance</td><td>Related-party transactions not in compliance with Section 177 (Audit Committee approval) or Section 188 (Board/shareholder approval). Causes - missed Audit Committee approvals; transactions not at arm's length without proper omnibus approval; documentation gaps.</td><td>Patron's handling - test every related-party transaction against the Section 177/188 approval matrix; quantify non-compliant transactions; cross-check against AS 18 / Ind AS 24 disclosure in the financial statements.</td></tr>
<tr><td>Clause 3(xx) CSR Unspent Amount Default</td><td>Section 135 CSR amount unspent and not transferred to specified Schedule VII fund (other than ongoing projects) within 6 months OR not transferred to Unspent CSR Account (ongoing projects) within 30 days of FY-end. Causes - administrative oversight, project planning gaps, inadequate spend tracking.</td><td>Patron's handling - bank-statement trace of the transfer; reconciliation with CSR-2 filing; quantification of shortfall; cross-link with Schedule III ARI CSR disclosure.</td></tr>
<tr><td>Clause 3(xi)(a) Fraud Reported</td><td>Fraud by the company or on the company reported during the year. Causes - employee misappropriation, vendor/customer fraud, cyber incident, financial statement misstatement.</td><td>Patron's handling - document nature and amount; assess Section 143(12) Rs 1 crore threshold for ADT-4 filing; consider whistleblower complaints under Clause 3(xi)(c); coordinate with main audit report KAM under SA 701 and fraud reporting under SA 240.</td></tr>

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
            <h2 class="section-title">Patron CARO Engagement - Scope and Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - First-Year-of-CARO Pvt Ltd (Just Crossed Exemption)</td><td>Rs 75,000 to Rs 2,00,000 (Exl GST and Govt. Charges) - Timeline 4 weeks. Includes 21-clause gap analysis, title-deed register reconstruction, related-party register validation, intangible asset records establishment, first-year audit with CARO annexure.</td></tr>
<tr><td>Mid-size Pvt Ltd Statutory Audit + CARO (Rs 10 to 50 crore revenue)</td><td>Rs 2,00,000 to Rs 5,00,000 (Exl GST and Govt. Charges) - Timeline 5 to 6 weeks. Full SA 315 risk-mapping per clause with CARO-reviewer skill integration.</td></tr>
<tr><td>Large Unlisted Pvt Ltd (Rs 50 to 250 crore revenue)</td><td>Rs 5,50,000 to Rs 14,00,000 (Exl GST and Govt. Charges) - Timeline 6 to 8 weeks. SA 220 partner review; Schedule III ARI reconciliation; common-qualification handling.</td></tr>
<tr><td>Listed Entity with KAM + IFC + CARO</td><td>Starting from Rs 20,00,000 (Exl GST and Govt. Charges) - Timeline 8 to 12 weeks. Mandatory KAM under SA 701; SEBI LODR compliance; NFRA-monitored framework.</td></tr>
<tr><td>NBFC / Fintech (CARO Clause 3(xvi) Deep Dive)</td><td>Starting from Rs 1,50,000 (Exl GST and Govt. Charges) - Timeline 5 to 9 weeks. Four-sub-clause test on Section 45-IA registration, NBFC activities without CoR, CIC qualification, multi-CIC group count.</td></tr>
<tr><td>Group with CFS Clause (xxi) Aggregation (Add-On)</td><td>Add Rs 50,000 to Rs 2,00,000 per component (Exl GST and Govt. Charges). Same audit window. Component-auditor CARO qualification consolidation in CFS audit report.</td></tr>
<tr><td>CARO Readiness Assessment (Pre-Audit Advisory)</td><td>Rs 50,000 to Rs 1,50,000 standalone (Exl GST and Govt. Charges) - Timeline 2 to 3 weeks. For Pvt Ltd companies crossing exemption thresholds; 21-clause gap analysis without statutory audit engagement.</td></tr>
<tr><td>Section 143(12) ADT-4 Fraud Reporting (Add-On)</td><td>Rs 50,000 to Rs 1,50,000 standalone (Exl GST and Govt. Charges) for fraud above Rs 1 crore threshold; Form ADT-4 filing with Central Government under Rule 13.</td></tr>
<tr><td>Initial Consultation (30-min on CARO applicability)</td><td>Free (no obligation)</td></tr>
<tr><td>UDIN Generation on ICAI Portal</td><td>No separate fee - bundled with audit-report sign-off; single UDIN covers main report + CARO + IFC</td></tr>
<tr><td>AOC-4 Filing With MCA21 V3</td><td>Bundled with audit engagement - separate MCA filing fees applicable per Companies (Registration Offices and Fees) Rules; within 30 days of AGM</td></tr>
<tr><td>Section 147 Penalty for CARO Non-Compliance</td><td>Rs 25,000 to Rs 5,00,000 on auditor (Rs 1 lakh to Rs 25 lakh for fraudulent reporting); statutory exposure for any auditor on the engagement</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free CARO 2020 Reporting consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CARO%202020%20statutory%20audit%20quote%20calibrated%20to%20my%20company%20size." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">CARO in the Statutory Audit Cycle Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Engagement and Planning (Week 1)</td><td>Applicability determination - 4-gate exemption test (OPC, Small Co, Section 8, Pvt Ltd 3-condition); clause mapping to risk profile under SA 315</td></tr>
<tr><td>Interim Audit Q4 (Weeks 2 to 3)</td><td>Title-deed register walkthrough; intangible records establishment; statutory dues ageing analysis; preliminary clause-level evidence gathering</td></tr>
<tr><td>Year-End Audit (Weeks 3 to 6)</td><td>Physical inventory attendance under SA 501; related-party register confirmation; CARO sub-clause testing; bank confirmation for working capital limits above Rs 5 crore</td></tr>
<tr><td>Draft CARO and Main Report (Weeks 6 to 7)</td><td>Clause-wise wording draft using CARO-reviewer skill; qualification template selection from ICAI Guidance Note illustrative library</td></tr>
<tr><td>Schedule III ARI Reconciliation (Week 7)</td><td>Title deeds / benami / CSR / borrowing crystallisation / struck-off-companies cross-check between CARO clauses and Schedule III ARI disclosures</td></tr>
<tr><td>Main Report and KAM Cross-Link (Week 7)</td><td>Material CARO qualifications cross-linked with Basis for Qualified Opinion or KAM in main report under SA 701; tax audit Form 3CD consistency check</td></tr>
<tr><td>Partner Review and UDIN (Weeks 7 to 8)</td><td>SA 220 quality review; UDIN generation on ICAI portal covering main + CARO + IFC; final sign-off</td></tr>
<tr><td>AOC-4 Filing (Within 30 Days of AGM)</td><td>MCA21 V3 with CARO annexure attached; typically 30 October for September AGMs</td></tr>
<tr><td>CFS Clause (xxi) Aggregation (Concurrent)</td><td>Component-auditor CARO qualifications consolidated with paragraph cross-references in the CFS audit report</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical filing deadline:</strong> The CARO annexure is filed with AOC-4 within 30 days of the AGM (typically 30 October for September AGMs) - delay attracts Rs 100 per day MCA additional fees plus Section 137 and Section 147 penalty exposure. CARO qualifications carry compounding consequences - <strong>lender diligence escalation, investor due-diligence red flags, NFRA monitoring for listed entities, tax assessment trigger under Section 143(2),</strong> and reputational risk in public-domain filings.</p>

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
            <h2 class="section-title">Why Patron's CARO 2020 Approach Differs</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg></div>
        <h3>Clause-by-Clause SA 315 Risk Mapping</h3>
        <p>The 21 clauses are mapped to the company's specific risk profile from the engagement-letter stage - not applied as a generic template. Industry-specific weighting (manufacturing inventory, NBFC RBI, e-commerce related-party) calibrates audit-evidence quantum per clause.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div>
        <h3>In-House CARO-Report-Reviewer Skill</h3>
        <p>Maintains ICAI Guidance Note illustrative wordings, common qualification templates per sub-clause, and consistency checks against the main audit report - applied to every CARO report before partner sign-off.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <h3>Schedule III ARI Reconciliation</h3>
        <p>The 2021 Additional Regulatory Information disclosures (title deeds, benami, CSR, borrowing crystallisation, struck-off companies) overlap significantly with CARO clauses. Patron reconciles to avoid contradiction between annexures.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3>Para 4 Substantive Qualification Drafting</h3>
        <p>Each qualification drafted with four mandatory elements - specific sub-clause, factual basis, quantum where measurable, management response. Para 4 reasons required for every unfavourable answer - no silence, no boilerplate.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>Para 12 ICAI Guidance Note Application</h3>
        <p>Small-company override of Pvt Ltd conditions - if a company is a small company under Section 2(85), it remains exempt even if it fails Pvt Ltd three-condition tests. Documented in working file with the basis for the conclusion.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
        <h3>Section 143(12) Fraud Cross-Link</h3>
        <p>Clause 3(xi)(a) fraud reporting cross-linked with Section 143(12) ADT-4 filing for frauds above Rs 1 crore. Coordinated with SA 240 fraud responsibilities and KAM under SA 701 for material findings.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3>CFS Clause (xxi) Component Aggregation</h3>
        <p>For group audits, Patron aggregates component-auditor CARO qualifications under Clause (xxi) with traceable paragraph cross-references - the only CARO clause that applies to consolidated financial statements.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        <h3>NBFC and CIC 4-Sub-Clause Coordination</h3>
        <p>Clause 3(xvi) four sub-clauses tested with documented audit evidence - Section 45-IA RBI registration, NBFC activity without CoR (Chapter V offence), CIC qualification per RBI Master Direction, multi-CIC group count.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted CARO 2020 Practice</h2>
            <div class="content-text">
                
                <div style="background:var(--blue-lighter);padding:24px;border-radius:12px;margin-bottom:24px;">
    <p style="font-weight:700;color:var(--blue);font-size:18px;margin-bottom:8px;">10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
</div>
<h3 style="margin-top:24px;">Practitioner Authority Signal</h3>
<p><em>"The statutory audit was clean and completed well before deadline. No last-minute rush." - MD, Trading Firm, Mumbai (Google Review)</em></p>
<p><em>"Our trademark was filed and registered within the timeline Patron promised. No surprises." - Founder, D2C Brand, Bangalore (Google Review)</em></p>
<h3 style="margin-top:24px;">Client Coverage</h3>
<p>Trusted by <strong>Hyundai, Asian Paints, Bridgestone and a growing roster of Pvt Ltd companies</strong> across <strong>manufacturing, financial services, real estate, e-commerce and SaaS.</strong> Patron's CARO 2020 practice spans first-year-of-CARO Pvt Ltd companies just crossing exemption thresholds, mid-size unlisted Pvt Ltd with full 21-clause depth, NBFCs with Clause 3(xvi) four-sub-clause testing, family-business-groups with CFS Clause (xxi) aggregation, and listed entities under NFRA monitoring.</p>
<h3 style="margin-top:24px;">4-Office Signal</h3>
<p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron services CARO-applicable Pvt Ltd companies, mid-size groups, and listed entities across India.</strong> Peer-reviewed ICAI workpapers; substantive Para 4 qualifications; documented SA 220 quality review; in-house CARO-report-reviewer skill applied before partner sign-off.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Big-Four vs Patron CARO 2020 Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY / In-House</th><th>Big-Four (BSR / Deloitte / SRBC / Walker)</th><th>Patron-Led</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory authority to sign CARO</td><td>Section 141 disqualification - cannot sign</td><td>Qualified ICAI member firm</td><td>Qualified ICAI member firm</td></tr>
<tr><td>Clause-by-clause risk mapping (SA 315)</td><td>Not signable</td><td>Heavy template approach</td><td>Calibrated to company risk profile</td></tr>
<tr><td>Illustrative wording library</td><td>Self-drafted (qualification rejected)</td><td>Centralised technical team</td><td>CARO-reviewer skill with ICAI GN library</td></tr>
<tr><td>Schedule III ARI reconciliation</td><td>Often missed</td><td>Heavy procedure</td><td>Built into review process</td></tr>
<tr><td>CFS Clause (xxi) aggregation</td><td>Not signable</td><td>Centralised</td><td>Component-level consolidation</td></tr>
<tr><td>Common-qualification handling time</td><td>N/A</td><td>1 to 3 weeks</td><td>Same-week resolution with skill templates</td></tr>
<tr><td>Para 4 reasons drafting depth</td><td>Not signable</td><td>Standard procedure</td><td>4-element substantive drafting</td></tr>
<tr><td>Cost (mid-size Rs 50 cr Pvt Ltd)</td><td>Apparent zero - unsignable</td><td>Rs 8 to 18 lakh</td><td>Rs 2 to 5 lakh</td></tr>

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
            <h2 class="section-title">Related Services and Industry CARO Pages</h2>
            <div class="content-text">
                
                <p>This CARO 2020 authority page sits within Patron's broader audit cluster, with industry-specific pages applying CARO at the sector-level clause depth:</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit in India (Parent)</a>:</strong> The complete Section 143 statutory audit engagement - this CARO authority page is the Annexure A reporting framework within that engagement.</li>
    <li><strong><a href="/audit-report-types-india">Audit Report Types in India</a>:</strong> Sister authority page - opinion type framework (Unmodified, Qualified, Adverse, Disclaimer) under SA 700-706 with CARO qualifications cross-linked to main report.</li>
    <li><strong><a href="/internal-financial-controls-audit">Internal Financial Controls Audit</a>:</strong> Sister authority page - Section 143(3)(i) Annexure B report; separate opinion on IFC adequacy and operating effectiveness.</li>
    <li><strong><a href="/schedule-iii-compliance-companies-act">Schedule III Compliance</a>:</strong> Form of financial statements being audited; Additional Regulatory Information disclosures parallel to CARO clauses.</li>
    <li><strong><a href="/statutory-audit-for-manufacturing-companies">Statutory Audit for Manufacturing</a>:</strong> CARO Clause 3(ii) inventory + 3(vi) cost records industry-specific depth.</li>
    <li><strong><a href="/statutory-audit-for-financial-services">Statutory Audit for Financial Services</a>:</strong> CARO Clause 3(xvi)(a) to (d) RBI registration four-sub-clause test for NBFCs.</li>
    <li><strong><a href="/statutory-audit-for-real-estate">Statutory Audit for Real Estate</a>:</strong> CARO Clause 3(i)(c) title deeds for redevelopment SPVs and JDA properties.</li>
    <li><strong><a href="/statutory-audit-for-ecommerce-companies">Statutory Audit for E-commerce</a>:</strong> CARO Clause 3(vii) TCS/TDS reconciliation + Clause 3(xv) non-cash related-party transactions.</li>
    <li><strong><a href="/statutory-audit-for-education-institutions">Statutory Audit for Education Institutions</a>:</strong> CARO Clause 3(i)(c) title deeds for Section 8 educational companies.</li>
    <li><strong><a href="/internal-audit">Internal Audit (Section 138)</a>:</strong> Tied to CARO Clause 3(xiv) internal-audit adequacy reporting; statutory auditor consideration documentation.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> ROC annual filings - ADT-1, AOC-4 (with CARO annexure), MGT-7 with CARO cross-references in MGT-7.</li>
    <li><strong><a href="/appointment-of-auditor">Appointment of Auditor</a>:</strong> First auditor and AGM appointment under Section 139 - ADT-1 filing.</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor</a>:</strong> Section 140 resignation with Section 140(2) statement; Clause 3(xviii) review by incoming auditor.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Applicability Matrix, 21-Clause Walkthrough and Legal Framework</h2>
            <div class="content-text">
                
                <p>CARO 2020 is administered by the Ministry of Corporate Affairs under Section 143(11) of the Companies Act, 2013. Primary regulator: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 V3 portal</a>. Tax-side cross-references with <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax India</a> for Clause 3(viii) surrendered income and Form 26AS. NBFC-side cross-references with <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> for Clause 3(xvi) Section 45-IA registration and CIC determination.</p>
<h3 style="margin-top:24px;">CARO 2020 Applicability Matrix</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Exemption Category</th><th>Statutory Basis</th><th>Detail</th></tr></thead>
    <tbody>
        <tr><td>Banking company</td><td>Para 1(2)(i)</td><td>As defined in Section 5(c) of the Banking Regulation Act, 1949</td></tr>
        <tr><td>Insurance company</td><td>Para 1(2)(ii)</td><td>As defined under the Insurance Act, 1938</td></tr>
        <tr><td>Section 8 company</td><td>Para 1(2)(iii)</td><td>Charitable-purpose corporate entity licensed under Section 8 of Companies Act 2013</td></tr>
        <tr><td>One Person Company (OPC)</td><td>Para 1(2)(iv)</td><td>As defined in Section 2(62); unconditional exemption regardless of paid-up capital or turnover</td></tr>
        <tr><td>Small company</td><td>Para 1(2)(iv)</td><td>As defined in Section 2(85) - paid-up capital up to Rs 4 crore AND turnover up to Rs 40 crore (revised w.e.f. 15 September 2022 from Rs 50 lakh / Rs 2 crore)</td></tr>
        <tr><td>Qualifying Pvt Ltd company</td><td>Para 1(2)(v)</td><td>ALL three conditions must be satisfied (see below)</td></tr>
    </tbody>
</table>
</div>
<h3 style="margin-top:24px;">Pvt Ltd Three-Condition Exemption Test</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Condition</th><th>Threshold</th></tr></thead>
    <tbody>
        <tr><td>(a) Not a subsidiary or holding of a public company</td><td>Status check</td></tr>
        <tr><td>(b) Paid-up share capital plus reserves and surplus</td><td>Up to Rs 1 crore</td></tr>
        <tr><td>(c) Total borrowings from any bank or financial institution at any point during the financial year</td><td>Up to Rs 1 crore</td></tr>
        <tr><td>(d) Total revenue (including revenue from discontinuing operations) as disclosed in Schedule III</td><td>Up to Rs 10 crore</td></tr>
    </tbody>
</table>
</div>
<p><strong>Critical Note - Small Company Override:</strong> Paragraph 12 of the ICAI Guidance Note on CARO 2020 (Revised 2022) clarifies that if a company is covered under the definition of small company, it will remain exempted from CARO 2020 even if it falls under any of the criteria specified for private companies. The small-company test and the Pvt-Ltd-conditions test operate as independent escape routes - meeting either grants exemption.</p>
<h3 style="margin-top:24px;">All 21 CARO 2020 Clauses - Practitioner Walkthrough</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Clause</th><th>Subject</th><th>Sub-Clause Detail</th></tr></thead>
    <tbody>
        <tr><td>3(i)</td><td>Property, Plant and Equipment and Intangible Assets</td><td>(a)(A) PP and E records, (a)(B) intangible asset records (new), (b) physical verification, (c) title deeds in company name, (d) revaluation with 10% threshold, (e) Benami proceedings (new)</td></tr>
        <tr><td>3(ii)</td><td>Inventory</td><td>(a) physical verification with 10% discrepancy reporting (new depth), (b) working capital limits above Rs 5 crore quarterly statement reconciliation (new)</td></tr>
        <tr><td>3(iii)</td><td>Loans, Investments, Guarantees, Security</td><td>(a) to subsidiaries/JVs/associates vs others separately, (b) terms not prejudicial, (c) repayment schedule, (d) 90-day overdue, (e) evergreening (new), (f) no terms specified (new)</td></tr>
        <tr><td>3(iv)</td><td>Compliance with Section 185 and 186</td><td>Loans to directors (Sec 185) and inter-corporate loans/investments/guarantees (Sec 186)</td></tr>
        <tr><td>3(v)</td><td>Deposits</td><td>Sections 73-76 Companies Act and rules; RBI directives; court/tribunal orders compliance</td></tr>
        <tr><td>3(vi)</td><td>Cost Records</td><td>Section 148(1) cost records prescribed; CRA-1/CRA-2/CRA-3/CRA-4 maintenance</td></tr>
        <tr><td>3(vii)</td><td>Statutory Dues</td><td>(a) regular deposit of GST/PF/ESI/income tax/customs/excise/cess - outstanding more than 6 months from due date, (b) disputed dues with amount, forum, period of dispute</td></tr>
        <tr><td>3(viii)</td><td>Surrendered or Disclosed Income (NEW)</td><td>Transactions not recorded in books surrendered as income under Income Tax Act; whether recorded in books</td></tr>
        <tr><td>3(ix)</td><td>Defaults in Repayment and End-Use</td><td>(a) default in repayment to any lender, (b) willful defaulter declaration, (c) term loan end-use, (d) short-term funds for long-term purposes (new), (e) funds to subsidiaries/associates (new), (f) loans on pledged securities (new)</td></tr>
        <tr><td>3(x)</td><td>IPO / FPO / Preferential Allotment</td><td>(a) IPO/FPO proceeds applied for stated purposes, (b) preferential allotment Section 42/62 compliance (merged from CARO 2016)</td></tr>
        <tr><td>3(xi)</td><td>Fraud</td><td>(a) fraud by/on company (expanded coverage), (b) ADT-4 Section 143(12) filing for Rs 1 cr+ (new), (c) whistleblower complaints (new)</td></tr>
        <tr><td>3(xii)</td><td>Nidhi Company</td><td>(a) Net Owned Funds to Deposits 1:20 ratio, (b) 10% unencumbered term deposits, (c) interest/repayment default (new)</td></tr>
        <tr><td>3(xiii)</td><td>Related-Party Transactions</td><td>Section 177 (Audit Committee) and Section 188 (Board/shareholder) compliance; AS 18 / Ind AS 24 disclosure</td></tr>
        <tr><td>3(xiv)</td><td>Internal Audit (NEW)</td><td>(a) internal audit system commensurate with size and nature, (b) internal audit reports considered by statutory auditor</td></tr>
        <tr><td>3(xv)</td><td>Non-Cash Transactions with Directors</td><td>Non-cash transactions with directors or connected persons; Section 192 compliance</td></tr>
        <tr><td>3(xvi)</td><td>RBI Registration (Expanded)</td><td>(a) Section 45-IA RBI Act registration mandatory and obtained, (b) NBFC activity without valid CoR - Chapter V offence (new), (c) CIC qualification per RBI Master Direction (new), (d) multi-CIC group count (new)</td></tr>
        <tr><td>3(xvii)</td><td>Cash Losses (NEW)</td><td>Cash losses in current FY and immediately preceding FY; amount</td></tr>
        <tr><td>3(xviii)</td><td>Auditor Resignation (NEW)</td><td>Resignation during year; whether outgoing auditor's issues, objections, concerns taken into consideration</td></tr>
        <tr><td>3(xix)</td><td>Material Uncertainty on Going Concern Obligations (NEW)</td><td>Financial ratios + ageing + realisation/payment dates + Board plans - no material uncertainty on meeting liabilities within one year of balance sheet</td></tr>
        <tr><td>3(xx)</td><td>CSR (NEW)</td><td>(a) non-ongoing projects - unspent transfer to Schedule VII fund within 6 months (Section 135(5) second proviso), (b) ongoing projects - transfer to Unspent CSR Account within 30 days of FY-end (Section 135(6))</td></tr>
        <tr><td>3(xxi)</td><td>CFS Component Auditor Qualifications (NEW)</td><td>Qualifications or adverse remarks in component CARO reports of companies in consolidated FS; details and paragraph numbers - the ONLY CARO clause that applies to CFS</td></tr>
    </tbody>
</table>
</div>
<h3 style="margin-top:24px;">Statutory Provisions and Cross-References</h3>
<div class="table-responsive-wrapper">
<table>
    <thead><tr><th>Reference</th><th>What It Governs</th></tr></thead>
    <tbody>
        <tr><td>Section 143(11) Companies Act 2013</td><td>Statutory authority empowering Central Government to specify additional reporting matters; CARO is the order issued under this section</td></tr>
        <tr><td>Companies (Auditor's Report) Order, 2020</td><td>Notified by MCA on 25 February 2020; effective for audits of FY commencing on or after 1 April 2021</td></tr>
        <tr><td>Section 2(42) Companies Act 2013</td><td>Foreign company definition - CARO applies to foreign companies with place of business in India</td></tr>
        <tr><td>Section 2(62)</td><td>One Person Company definition - unconditional CARO exemption</td></tr>
        <tr><td>Section 2(85)</td><td>Small company definition - paid-up Rs 4 cr + turnover Rs 40 cr (revised 15 September 2022 from Rs 50 lakh + Rs 2 cr)</td></tr>
        <tr><td>Section 8</td><td>Charitable purpose companies - CARO exemption</td></tr>
        <tr><td>Section 143(12) and Rule 13 ADT-4</td><td>Auditor fraud reporting to Central Government in Form ADT-4 for frauds above Rs 1 crore</td></tr>
        <tr><td>Section 135 CSR</td><td>Reference for Clause 3(xx) - ongoing project unspent transferred to Unspent CSR Account within 30 days; non-ongoing transferred to specified Schedule VII fund within 6 months</td></tr>
        <tr><td>Section 138 Internal Audit</td><td>Reference for Clause 3(xiv) - Companies (Accounts) Rules 2014 Rule 13 thresholds</td></tr>
        <tr><td>Section 45-IA RBI Act 1934</td><td>Reference for Clause 3(xvi)(a) - NBFC Certificate of Registration; CIC determination per RBI Master Direction</td></tr>
        <tr><td>Section 147 Companies Act 2013</td><td>Penalty Rs 25,000 to Rs 5,00,000 on auditor (Rs 1 lakh to Rs 25 lakh fraudulent) for CARO non-compliance</td></tr>
        <tr><td>ICAI Guidance Note on CARO 2020 (Revised 2022)</td><td>Practitioner manual by Auditing and Assurance Standards Board (AASB) of ICAI - clause-by-clause audit procedures and illustrative wordings</td></tr>
        <tr><td>SA 200 / 220 / 240 / 250 / 315 / 501 / 550 / 700 / 701 / 705</td><td>Standards on Auditing cross-references - overall objectives, quality control, fraud, compliance, risk assessment, inventory, related parties, audit report, KAM, modifications</td></tr>
        <tr><td>Schedule III Additional Regulatory Information (ARI)</td><td>2021 amendment - parallel financial-statement disclosures covering title deeds, benami property, CSR, borrowings crystallisation, struck-off companies - significant overlap with CARO</td></tr>
        <tr><td>Benami Transactions (Prohibition) Act 1988</td><td>Reference for Clause 3(i)(e) - proceedings initiated under the Act; disclosure in financial statements</td></tr>
        <tr><td>Sections 73-76 Companies Act 2013</td><td>Deposit acceptance rules - reference for Clause 3(v)</td></tr>
        <tr><td>Sections 185 and 186</td><td>Loans to directors and inter-corporate loans/investments - reference for Clause 3(iv)</td></tr>
        <tr><td>Sections 177 and 188</td><td>Audit Committee approval and related-party transaction approval - reference for Clause 3(xiii)</td></tr>
        <tr><td>Section 192</td><td>Non-cash transactions with directors - reference for Clause 3(xv)</td></tr>
        <tr><td>Sections 42 and 62</td><td>Private placement and preferential allotment - reference for Clause 3(x)(b)</td></tr>
        <tr><td>Section 148</td><td>Cost records and cost audit - reference for Clause 3(vi)</td></tr>
        <tr><td>UDIN</td><td>Single Unique Document Identification Number covers main audit report + CARO + IFC - generated on ICAI portal at sign-off</td></tr>
        <tr><td>Form AOC-4</td><td>Audited financial statements with main audit report and CARO annexure filed with MCA21 V3 portal within 30 days of AGM</td></tr>
    </tbody>
</table>
</div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - CARO 2020 Reporting</h2>
                    <p class="faq-expanded__lead">Practitioner-level Q&A on Section 143(11) authority, applicability matrix, 21-clause framework, small-company and Pvt Ltd exemptions, CFS treatment, and CARO 2016 vs 2020 differences.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'CARO 2020 Reporting'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is CARO 2020?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 stands for Companies (Auditor's Report) Order, 2020. It is the order issued by the Ministry of Corporate Affairs under Section 143(11) of the Companies Act, 2013 on 25 February 2020, specifying additional matters on which a statutory auditor must report. CARO 2020 contains 21 clauses (against 16 in CARO 2016) and applies to statutory audits of financial years commencing on or after 1 April 2021. The CARO report is an annexure to the main audit report under SA 700 and is filed with the Registrar of Companies as part of Form AOC-4 within 30 days of the AGM.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is CARO applicable to private limited companies?</h3>
                        <div class="faq-expanded__a"><p>Yes, CARO 2020 applies to private limited companies in general, but a Pvt Ltd company is exempt if it satisfies all three of the following conditions as at the balance sheet date - (a) it is not a subsidiary or holding company of a public company, (b) its paid-up share capital plus reserves and surplus does not exceed Rs 1 crore, (c) its total borrowings from any bank or financial institution at any point during the year does not exceed Rs 1 crore, and (d) its total revenue does not exceed Rs 10 crore. Failing any one of these conditions triggers full CARO applicability. Additionally, if a Pvt Ltd company is also a small company under Section 2(85), the small-company exemption overrides the Pvt Ltd conditions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What companies are exempt from CARO 2020?</h3>
                        <div class="faq-expanded__a"><p>Para 1(2) of CARO 2020 exempts six categories of companies - (i) banking companies as defined in Section 5(c) of the Banking Regulation Act 1949, (ii) insurance companies as defined under the Insurance Act 1938, (iii) Section 8 companies licensed under the Companies Act 2013 (charitable purpose), (iv) One Person Companies as defined in Section 2(62), and small companies as defined in Section 2(85) - paid-up capital up to Rs 4 crore and turnover up to Rs 40 crore (revised w.e.f. 15 September 2022 from Rs 50 lakh / Rs 2 crore), and (v) qualifying private limited companies meeting all three thresholds of paid-up plus reserves up to Rs 1 crore, borrowings up to Rs 1 crore, and revenue up to Rs 10 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How many clauses does CARO 2020 have?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 contains 21 substantive reporting clauses against 16 in CARO 2016. Seven new clauses have been added in CARO 2020 - intangible asset records (Clause 3(i)(a)(B)), benami property proceedings (3(i)(e)), working capital quarterly statement reconciliation (3(ii)(b)), surrendered income (3(viii)), internal audit adequacy (3(xiv)), cash losses (3(xvii)), auditor resignation issues (3(xviii)), going-concern liability obligation (3(xix)), CSR utilisation (3(xx)), and CFS component-auditor qualifications (3(xxi)). Existing clauses on PP and E, inventory, loans, fraud and RBI registration have been redrafted with significantly expanded sub-clauses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the small company exemption from CARO?</h3>
                        <div class="faq-expanded__a"><p>Section 2(85) of the Companies Act 2013 defines a small company as a private company whose paid-up share capital does not exceed Rs 4 crore (revised from Rs 50 lakh) and turnover for the immediately preceding financial year does not exceed Rs 40 crore (revised from Rs 2 crore) - both thresholds revised with effect from 15 September 2022. The small-company exemption from CARO 2020 is unconditional - paragraph 12 of the ICAI Guidance Note on CARO 2020 (Revised 2022) clarifies that a small company remains exempt from CARO even if it falls under any of the criteria specified for private companies under Para 1(2)(v).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Does CARO 2020 apply to consolidated financial statements?</h3>
                        <div class="faq-expanded__a"><p>CARO 2020 does NOT apply to the auditor's report on consolidated financial statements with one exception - Clause (xxi) applies to CFS. Under Clause (xxi), the auditor of the consolidated financial statements is required to indicate the details of companies included in the consolidation where the respective component auditors have issued qualifications or adverse remarks in their CARO reports on the component standalone financial statements, along with the paragraph numbers of the qualifications. The remaining 20 clauses are reported in the standalone audit reports of each component.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between CARO 2016 and CARO 2020?</h3>
                        <div class="faq-expanded__a"><p>Three structural differences. First, CARO 2020 has 21 clauses against CARO 2016's 16 - seven new clauses cover intangibles, benami, working capital reconciliation, surrendered income, internal audit, cash losses, auditor resignation, going concern, CSR, and CFS. Second, CARO 2020 nine existing clauses are redrafted with markedly deeper sub-clause disclosure (PP and E now separated from intangibles; inventory now requires opinion on coverage and 10 percent discrepancy reporting; fraud now covers fraud on the company too; RBI registration now four sub-clauses). Third, CARO 2020 deletes the managerial remuneration clause (CARO 2016 Clause xi) as it is already covered in the main audit report.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are the new clauses added in CARO 2020?</h3>
                        <div class="faq-expanded__a"><p>Seven new clause-areas added in CARO 2020 - Clause 3(i)(a)(B) intangible asset records, 3(i)(e) benami property proceedings under the Benami Transactions (Prohibition) Act 1988, 3(ii)(b) working capital quarterly statement reconciliation above Rs 5 crore, 3(viii) surrendered income in tax assessments, 3(xiv) internal audit adequacy and consideration by statutory auditor, 3(xvii) cash losses in current and preceding year, 3(xviii) auditor resignation and consideration of outgoing auditor's issues, 3(xix) material uncertainty on going-concern obligations, 3(xx) CSR utilisation with ongoing-project and non-ongoing-project bifurcation, and 3(xxi) component-auditor qualifications in CFS.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>CARO 2020 kya hai?</strong> Companies Auditor's Report Order 2020, MCA dwara Section 143(11) Companies Act ke under issued. 21 clauses with practitioner-level reporting requirements. Applicable FY 2021-22 onwards.</p>
<p><strong>CARO kis pe nahi lagta?</strong> OPC, small companies (Sec 2(85) - paid-up up to Rs 4 cr aur turnover Rs 40 cr tak), banking, insurance, Section 8, aur qualifying Pvt Ltd (paid-up + reserves Rs 1 cr; borrowings Rs 1 cr; revenue Rs 10 cr; not subsidiary / holding of public).</p>
<p><strong>CARO 2020 mein kitne clauses hain?</strong> 21 clauses with 50+ sub-clauses. CARO 2016 mein 16 the. Seven new clauses + nine redrafted + one (managerial remuneration) deleted.</p>
<p><strong>CARO consolidated financial statements pe lagta hai?</strong> Nahi, except Clause (xxi). CFS audit mein parent auditor ko component auditor ki CARO qualifications consolidate karni padti hain.</p>
<p><strong>Section 2(85) small company definition revised hua hai?</strong> Haan, 15 September 2022 se. Pehle paid-up Rs 50 lakh + turnover Rs 2 cr tha; ab paid-up Rs 4 cr + turnover Rs 40 cr.</p>
<p><strong>Clause 3(xvi) NBFC pe kya hai?</strong> 4 sub-clauses - (a) Sec 45-IA RBI registration mandatory aur obtained, (b) NBFC activity without valid CoR (Chapter V offence), (c) CIC qualification, (d) multi-CIC group count.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Urgency - CARO Compliance Stakes</h2>
            <div class="content-text">
                
                <p>CARO 2020 reporting is <strong>mandatory for every statutory audit of every applicable company</strong> under Section 143 of the Companies Act, 2013. The CARO annexure is filed with AOC-4 within 30 days of the AGM (typically 30 October for September AGMs) - <strong>delay attracts Rs 100 per day MCA additional fees plus Section 147 penalty of Rs 25,000 to Rs 5,00,000.</strong></p>
<p>CARO qualifications carry compounding consequences - lender diligence escalation, investor due-diligence red flags, NFRA monitoring for listed entities, tax assessment trigger under Section 143(2), and reputational risk in public-domain filings.</p>
<p>The <strong>September 2022 small-company threshold revision</strong> (paid-up Rs 4 crore plus turnover Rs 40 crore) significantly expanded the small-company exemption pool - any Pvt Ltd company that was CARO-applicable in FY 2021-22 should re-test applicability for FY 2022-23 and later years under the revised thresholds.</p>
<p><strong>Action now:</strong> Engage Patron for a CARO-compliant statutory audit - <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CARO%202020%20statutory%20audit%20quote%20calibrated%20to%20my%20company%20size." target="_blank">WhatsApp</a>. Free initial consultation on CARO applicability and clause-level depth.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for CARO 2020 Reporting Depth</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>CARO 2020 reporting is the most comprehensive disclosure framework in Indian audit practice - 21 clauses with 50-plus sub-clauses spanning property records, inventory verification, financial commitments, statutory compliance, fraud, related parties, internal audit, RBI registration, cash losses, going-concern obligations, CSR utilisation, and group-level qualifications. The order was issued under Section 143(11) of the Companies Act, 2013 by the Ministry of Corporate Affairs on 25 February 2020 and applies to statutory audits of financial years commencing on or after 1 April 2021.</p>
<p>Exemptions are narrow - OPC, small companies under the revised Section 2(85) thresholds (Rs 4 crore + Rs 40 crore w.e.f. 15 September 2022), banking, insurance, Section 8, and qualifying Pvt Ltd companies meeting all three conditions of Para 1(2)(v). The ICAI Guidance Note on CARO 2020 (Revised 2022) is the practitioner manual. Patron handles CARO as an integral part of every statutory audit engagement, with clause-by-clause risk mapping under SA 315 from day one, an in-house CARO-report-reviewer skill that maintains ICAI Guidance Note illustrative wordings and qualification templates, and Schedule III Additional Regulatory Information reconciliation built into the review process. Our 15+ years of practice, peer-reviewed ICAI workpapers, and four-office network across Pune, Mumbai, Delhi and Gurugram bring CARO depth from first-year-of-CARO Pvt Ltd companies to listed-entity NFRA-monitored audits.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20CARO%202020%20statutory%20audit%20quote%20calibrated%20to%20my%20company%20size." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20CARO%202020%20Audit&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20a%20CARO%202020%20audit%20engagement.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- AUDIT CLUSTER AUTHORITY AND INDUSTRY PAGES GRID -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Patron's Statutory Audit Cluster</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">This CARO 2020 authority page sits alongside Patron's other framework authority pages (Audit Report Types, Audit Rotation, IFC, Schedule III) and industry-specific pages applying CARO at the sector-level clause depth.</p>
    
            <div class="pa-city-block">
    <div class="pa-block-title">Audit Cluster Authority and Industry Pages</div>
    <div class="pa-block-sub">Section 143 reporting framework and industry-level CARO depth</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Parent)</div><div class="pa-card-sub">Section 143 engagement</div></div></a>
        <a href="/audit-report-types-india" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Audit Report Types</div><div class="pa-card-sub">SA 700 to 706 opinion types</div></div></a>
        <a href="/internal-financial-controls-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IFC Audit (Annexure B)</div><div class="pa-card-sub">Section 143(3)(i)</div></div></a>
        <a href="/statutory-audit-for-manufacturing-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Audit for Manufacturing</div><div class="pa-card-sub">Clause 3(ii) inventory + 3(vi) cost</div></div></a>
        <a href="/statutory-audit-for-financial-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Audit for Financial Services</div><div class="pa-card-sub">Clause 3(xvi) NBFC/CIC</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">Section 138 - Clause 3(xiv)</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">14 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content refreshed quarterly (Tier 1) or whenever ICAI revises the CARO 2020 Guidance Note, MCA notifies amendments to Section 2(85) small-company thresholds or any clause language, NFRA issues disciplinary orders citing CARO non-compliance, or significant court judgments on Para 1(2)(v) Pvt Ltd exemption interpretation emerge.</p>
        </div>
    </div>
</section>



</main>


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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