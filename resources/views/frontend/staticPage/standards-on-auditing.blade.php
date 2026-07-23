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
    <title>Standards on Auditing (SAs)</title>
    <meta name="description" content="Standards on Auditing (SAs) issued by ICAI under Section 143(10) Companies Act 2013. SA 700 audit report, SA 701 KAM, SA 600 component. From Rs 25,000.">
    <link rel="canonical" href="/standards-on-auditing">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Standards on Auditing (SAs) 2026 | Patron Accounting">
    <meta property="og:description" content="Standards on Auditing (SAs) issued by ICAI under Section 143(10) Companies Act 2013. SA 700 audit report, SA 701 KAM, SA 600 component. From Rs 25,000.">
    <meta property="og:url" content="/standards-on-auditing">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/standards-on-auditing-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Standards on Auditing (SAs) 2026 | Patron Accounting">
    <meta name="twitter:description" content="Standards on Auditing (SAs) issued by ICAI under Section 143(10) Companies Act 2013. SA 700 audit report, SA 701 KAM, SA 600 component. From Rs 25,000.">
    <meta name="twitter:image" content="/images/standards-on-auditing-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/standards-on-auditing#breadcrumb",
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
              "name": "Standards on Auditing",
              "item": "/standards-on-auditing"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/standards-on-auditing#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What gives Standards on Auditing the force of law in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 143(10) of the Companies Act 2013 expressly states that every auditor shall comply with the auditing standards. The auditing standards are those notified by the Central Government in consultation with NFRA, and the notification incorporates the Standards on Auditing issued by the Auditing and Assurance Standards Board (AASB) of ICAI. Failure to comply can result in NFRA monetary penalties under Section 132 (up to 10 times audit fees and 10-year debarment), ICAI disciplinary action under the Chartered Accountants Act 1949, and qualification of audit opinions being challenged."
              }
            },
            {
              "@type": "Question",
              "name": "When is SA 701 (Key Audit Matters) mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SA 701 is mandatory for audit reports of all listed companies on Indian stock exchanges (BSE, NSE, MSEI) and certain other entities. Key Audit Matters are matters that, in the auditor professional judgement, were of most significance in the audit of the current period financial statements - typically revenue recognition, valuation of significant estimates, going concern, business combinations, impairment testing. Each KAM is described with why it was a KAM and how the audit addressed it. NFRA and SEBI pay close attention to KAM quality in listed company audit reports."
              }
            },
            {
              "@type": "Question",
              "name": "What is the role of NFRA in Standards on Auditing compliance?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The National Financial Reporting Authority (NFRA), constituted under Section 132 of the Companies Act 2013, oversees auditors of Public Interest Entities (PIEs) - listed companies, banks, NBFCs above thresholds, insurance companies, and large unlisted companies. NFRA conducts financial reporting quality reviews of audited financial statements and the underlying audit working papers. SA compliance is a key focus area - particularly SA 230 documentation, SA 315 (Revised) risk assessment, SA 540 fair value estimates, SA 600 component auditor work, and SA 701 KAM drafting. NFRA can impose penalties up to 10 times audit fees plus 10-year debarment."
              }
            },
            {
              "@type": "Question",
              "name": "How is SA 600 applied to consolidated audits?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SA 600 Using the Work of Another Auditor (Component Auditor) governs principal auditor reliance on the work of auditors of components - subsidiaries, JVs, branches, associates - in a consolidated financial statement audit. Principal auditor must assess component auditor professional competence and independence; communicate clearly the scope and timing of work; review the component auditor working papers for material components; document the reliance basis. For MNCs with foreign component auditors, the procedures include accounting framework differences and language coordination."
              }
            },
            {
              "@type": "Question",
              "name": "What is SQC 1 and which audit firms must comply?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SQC 1 Standard on Quality Control 1 is the firm-level quality control standard issued by ICAI. It requires every audit firm in India to establish and maintain a system of quality control covering 6 elements - leadership responsibilities; relevant ethical requirements (independence); acceptance and continuance of client relationships; human resources; engagement performance; monitoring. SQC 1 compliance is mandatory for all CA firms in practice regardless of size; Peer Review verifies SQC 1 implementation."
              }
            },
            {
              "@type": "Question",
              "name": "What is ICAI Peer Review and when is it required?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ICAI Peer Review is conducted under the Peer Review Board framework - mandatory for audit firms auditing listed companies and other Public Interest Entities. Peer Review covers the firm SQC 1 quality control system and a sample of audit engagements. A Peer Reviewer (an experienced CA from another firm) examines working papers, interviews partners and staff, and issues a Peer Review Certificate which is required for the audit firm to continue auditing PIEs. Patron Peer Review preparation service helps audit firms close gaps before submission."
              }
            },
            {
              "@type": "Question",
              "name": "Do SAs apply to tax audit under Section 44AB?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Although Section 44AB of the Income Tax Act 1961 is the legal authority for tax audit (turnover Rs 1 crore or Rs 10 crore digital, or professional Rs 50 lakh), the audit itself is conducted by a Chartered Accountant in practice who is bound by the SAs. Form 3CA (where statutory audit is conducted) or Form 3CB (where no statutory audit is required), accompanied by Form 3CD, must be issued under the SA framework. UDIN through the ICAI portal is mandatory for tax audit reports too."
              }
            },
            {
              "@type": "Question",
              "name": "How are SAs different from Standards on Internal Audit (SIAs)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SAs are issued by ICAI Auditing and Assurance Standards Board for external (statutory and tax) audit. SIAs are issued separately by ICAI Internal Audit Standards Board (IASB) and apply to internal audit conducted under Section 138 of the Companies Act 2013. SIAs include SIA 110 Nature of Assurance, SIA 240 Using Work of Another Internal Auditor, SIA 350 Review and Supervision. The two frameworks are complementary - SAs for external assurance, SIAs for internal assurance. Some entities use external CA firms to conduct internal audit, which would apply SIAs not SAs."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/standards-on-auditing#service",
          "name": "Standards on Auditing (SAs) Advisory Services",
          "description": "CA-led Standards on Auditing advisory under Section 143(10) Companies Act 2013 - SA gap assessment for Audit Committees and M&A diligence buyers; NFRA inspection response (company-side and audit-firm-side); SQC 1 quality control implementation for audit firms; ICAI Peer Review preparation; audit firm staff training on SA 315 Revised, SA 540, SA 600, SA 701 KAM; and SA-compliant statutory audit conducted by Patron with documented working papers.",
          "serviceType": "Standards on Auditing Advisory",
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
              "name": "International Standards on Auditing",
              "sameAs": "https://en.wikipedia.org/wiki/International_Standards_on_Auditing"
            },
            {
              "@type": "Thing",
              "name": "Institute of Chartered Accountants of India",
              "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
            }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Standards on Auditing Service Packages",
            "itemListElement": [
              {
                "@type": "Offer",
                "name": "Peer Review Preparation (Small Audit Firm)",
                "priceCurrency": "INR",
                "price": "25000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "SA Gap Assessment (Single Engagement)",
                "priceCurrency": "INR",
                "price": "100000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "NFRA Inspection Response (Audit Firm)",
                "priceCurrency": "INR",
                "price": "500000",
                "availability": "https://schema.org/InStock"
              },
              {
                "@type": "Offer",
                "name": "SQC 1 Implementation for Audit Firm",
                "priceCurrency": "INR",
                "price": "50000",
                "availability": "https://schema.org/InStock"
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
                        Standards on Auditing (SAs): ICAI Framework Explained
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Audit engagement letter (SA 210), planning memo (SA 300), working paper file (SA 230), MRL (SA 580), Audit Report (SA 700 Revised), KAM (SA 701)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Peer Review preparation Rs 25,000 to Rs 1 lakh; SA gap assessment Rs 1 lakh to Rs 10 lakh; NFRA inspection response Rs 1 lakh to Rs 50 lakh; SQC 1 Rs 50,000 to Rs 5 lakh</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Mandatory for every audit by a Chartered Accountant in practice; Section 143(10) Companies Act 2013; ICAI Council notification gives binding authority</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> SA gap assessment 2 to 4 weeks; NFRA inspection response 4 to 12 weeks; SQC 1 firm implementation 4 to 8 weeks; Peer Review prep 4 to 6 weeks</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20Standards%20on%20Auditing%20engagement%20-%20please%20share%20a%20fixed-fee%20scoping%20memo." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Standards on Auditing'/>
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
                                
<option value="standards-on-auditing" selected>Standards on Auditing (SAs)</option>
<option value="statutory-audit">Statutory Audit</option>
<option value="statutory-audit-for-listed-companies">Statutory Audit (Listed Companies)</option>
<option value="statutory-audit-private-limited-company">Statutory Audit (Pvt Ltd)</option>
<option value="statutory-audit-llp">Statutory Audit (LLP)</option>
<option value="tax-audit">Tax Audit (Section 44AB)</option>
<option value="internal-audit">Internal Audit</option>
<option value="accounting-standards">Accounting Standards</option>
<option value="ind-as">Ind AS</option>
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
        
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">After our audit firm faced an NFRA query on SA 540 and SA 600 compliance, Patron team did a working paper remediation across 4 group audits in 12 weeks. Each SA paragraph gap was closed with new procedures, supplemental working papers, and revised technical memos.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">EP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Engagement Partner</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mid-tier Audit Firm</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron 4-week independent SA gap assessment of our continuing statutory auditor identified 3 critical gaps and 6 significant ones. Used the findings to require working paper supplements before signing the next year ADT-1. Audit firm subsequently strengthened SA 315 procedures.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AC</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Audit Committee Chair</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Listed Mid-Cap Company, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron SQC 1 implementation took us 6 weeks - client acceptance procedures, engagement performance manuals, and monitoring system fully documented. Cleared our Peer Review without findings in the next cycle.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Partner</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CA Firm, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our consolidated audit involves 11 component auditors across 4 countries. Patron SA 600 review identified gaps in the principal auditor coordination - communication protocols, working paper review depth, and group reporting alignment. Improved audit quality and reduced NFRA risk exposure.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Group CFO</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Conglomerate, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron SA gap review on a Rs 1,200 crore acquisition target identified prior year audit quality concerns - templated SA 315 risk assessment and boilerplate SA 701 KAMs. Informed our purchase price adjustment and rep-and-warranty insurance scope.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PE</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Partner</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">PE Fund M&A Diligence Team, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron audit firm staff training programme on SA 315 Revised and SA 540 was case-study-based using current NFRA observations. 18 of our staff went through the half-week programme. Tangible improvement in working paper quality on the next audit cycle.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AF</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Audit Firm Senior Partner</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Practice in Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div>
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
                    <p>SA gap assessment, NFRA inspection response, SQC 1 implementation, Peer Review preparation, and audit firm staff training - delivered with senior partner CA involvement on every engagement and a starting fee of Rs 25,000.</p>
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
            
                <a href="#overview-section" class="toc-btn">Overview</a>
                <a href="#what-section" class="toc-btn">What Are SAs</a>
                <a href="#who-section" class="toc-btn">SA Framework</a>
                <a href="#services-section" class="toc-btn">Our Services</a>
                <a href="#procedure-section" class="toc-btn">Procedure</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">NFRA Issues</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timelines</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Big 4 vs Patron</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Standards on Auditing in India: A Snapshot</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Standards on Auditing Services at a Glance</strong></p>
                    <p>Standards on Auditing (SAs) are mandatory procedural standards issued by the Auditing and Assurance Standards Board of ICAI, given legal force under Section 143(10) of the Companies Act 2013. Currently 39+ SAs covering audit objectives, engagement acceptance, planning, risk assessment, audit evidence, audit conclusions, and reporting. Listed companies face additional SA 701 (Key Audit Matters), and quarterly limited reviews under SRE 2410. Audit firms must implement SQC 1 for firm-level quality control and undergo ICAI Peer Review for engagements involving PIEs.</p>
                </div>
                <p><strong>Quick-Reference Summary Table</strong></p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Issuing Authority</td><td>Auditing and Assurance Standards Board (AASB) of ICAI under Council notification</td></tr><tr><td>Legal Authority</td><td>Section 143(10) Companies Act 2013 - every auditor shall comply with the auditing standards</td></tr><tr><td>Standards Count</td><td>39+ SAs across 7 categories - general principles, planning, evidence, using work of others, conclusions and reporting, specialised engagements, related services</td></tr><tr><td>Quality Control</td><td>SQC 1 (firm-level quality control standard) issued by ICAI Council</td></tr><tr><td>Listed Company Special</td><td>SA 701 mandatory Key Audit Matters; SRE 2410 quarterly limited review under SEBI LODR Reg 33</td></tr><tr><td>Peer Review</td><td>ICAI Peer Review Board - mandatory for firms auditing listed companies and other PIEs</td></tr><tr><td>Regulator Oversight</td><td>NFRA (HQ Delhi) for PIE audits; ICAI Quality Review Board for non-PIE audits</td></tr><tr><td>Penalty for Non-compliance</td><td>ICAI disciplinary action under CA Act 1949; NFRA penalties under Section 132 + NFRA Rules 2018 (up to 10x of fees + 10-year debarment)</td></tr></tbody></table></div><p>Standards on Auditing are not optional best practice - they are mandatory under Section 143(10) of the Companies Act 2013, which states that every auditor shall comply with the auditing standards.</p>
                <p>Failure to follow SAs can result in qualified or adverse opinions being challenged, NFRA financial reporting quality review findings, ICAI disciplinary action, audit firm Peer Review failure, and where the audit relates to listed companies or banks, SEBI or RBI sanctions. SAs are the foundation of audit quality - they define what an audit must achieve (SA 200), how to plan it (SA 300), what evidence to gather (SA 500), and how to report findings (SA 700 Revised). Patron services start at Rs 25,000 for small firm Peer Review preparation.</p>
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
                <h2 class="section-title">What Are Standards on Auditing?</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Standards on Auditing (SAs) are written procedural standards prescribed by the Auditing and Assurance Standards Board of the Institute of Chartered Accountants of India and approved by the ICAI Council. They define the minimum professional and technical requirements that a Chartered Accountant in practice must follow when conducting an audit of financial statements.</p>
<p>SAs cover the entire audit lifecycle - from acceptance of engagement (SA 210) through audit planning (SA 300), risk assessment (SA 315 Revised), gathering audit evidence (SA 500), using the work of other auditors (SA 600) and experts (SA 620), to forming an opinion (SA 700 Revised) and reporting Key Audit Matters (SA 701).</p>
<p>Indian SAs are converged with the International Standards on Auditing (ISAs) issued by the IAASB - the international counterpart. Convergence means Indian SAs are substantially the same as ISAs with limited modifications for the Indian context. The legal force comes from Section 143(10) of the Companies Act 2013 which mandates compliance for company audits, and from Section 44AB of the Income Tax Act 1961 which requires tax audits to follow SAs. Source: <a href="https://www.icai.org/" target="_blank" rel="noopener">ICAI</a>.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Standards on Auditing:</strong></p>
                    
<p><strong>AASB:</strong> The Auditing and Assurance Standards Board of ICAI - the technical board that drafts Standards on Auditing for approval by the ICAI Council and notification by MCA under Section 143(10).</p>
<p><strong>Section 143(10) Companies Act 2013:</strong> Statutory provision making compliance with auditing standards mandatory - every auditor shall comply with the auditing standards notified by the Central Government in consultation with NFRA.</p>
<p><strong>SQC 1 (Standard on Quality Control 1):</strong> Firm-level quality control standard covering 6 elements - leadership, ethical requirements, client acceptance and continuance, human resources, engagement performance, and monitoring. Mandatory for every CA firm in practice.</p>
<p><strong>SA 701 Key Audit Matters (KAM):</strong> Mandatory reporting in audit reports of all listed companies of matters that, in the auditor judgement, were of most significance in the audit - typically revenue recognition, valuation of significant estimates, going concern, business combinations, impairment testing.</p>
<p><strong>NFRA (National Financial Reporting Authority):</strong> Independent regulator under Section 132 Companies Act 2013 - oversees auditors of Public Interest Entities; conducts financial reporting quality reviews; can impose penalties up to 10 times audit fees plus 10-year debarment.</p>
<p><strong>ICAI Peer Review:</strong> Periodic working paper review of audit firms by an experienced CA Peer Reviewer - mandatory for firms auditing listed companies and other PIEs; cycle of 3-5 years depending on firm category.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Standards on Auditing</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Statutory Authority</span>
                        <strong>Section 143(10) + ICAI AASB + NFRA</strong>
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
            <h2 class="section-title">SA Framework: 7 Category Hierarchy</h2>
            <div class="content-text">
                
                
<p>Standards on Auditing are organised in 7 numbered categories, each covering a distinct phase or aspect of the audit. The structure is identical to the international ISA numbering convention adopted by IAASB. This hierarchical structure helps auditors navigate the framework systematically through the audit cycle.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Number Range</th><th>Category</th><th>Coverage</th></tr></thead>
<tbody>
<tr><td>SA 100 to 199</td><td>Introductory Matters</td><td>General introductory material (currently no standalone SA in this range; principles embedded in SA 200)</td></tr>
<tr><td>SA 200 to 299</td><td>General Principles and Responsibilities</td><td>Overall objectives (SA 200), engagement terms (SA 210), quality control (SA 220), documentation (SA 230), fraud (SA 240), laws and regulations (SA 250), governance communication (SA 260), internal control deficiencies (SA 265), joint audit (SA 299)</td></tr>
<tr><td>SA 300 to 499</td><td>Risk Assessment and Response</td><td>Audit planning (SA 300), risk identification and assessment (SA 315 Revised), materiality (SA 320), responses to assessed risks (SA 330), service organisation considerations (SA 402), evaluation of misstatements (SA 450)</td></tr>
<tr><td>SA 500 to 599</td><td>Audit Evidence</td><td>Audit evidence (SA 500), specific items (SA 501), external confirmations (SA 505), opening balances (SA 510), analytical procedures (SA 520), audit sampling (SA 530), accounting estimates (SA 540), related parties (SA 550), subsequent events (SA 560), going concern (SA 570), written representations (SA 580)</td></tr>
<tr><td>SA 600 to 699</td><td>Using Work of Others</td><td>Component auditors (SA 600), internal auditors (SA 610), auditor experts (SA 620)</td></tr>
<tr><td>SA 700 to 799</td><td>Audit Conclusions and Reporting</td><td>Forming opinion and reporting (SA 700 Revised), Key Audit Matters (SA 701), modifications to opinion (SA 705 Revised), Emphasis of Matter (SA 706 Revised), comparative information (SA 710), Other Information (SA 720 Revised)</td></tr>
<tr><td>SA 800 to 899</td><td>Specialised Engagements</td><td>Special purpose frameworks (SA 800), single financial statement or element (SA 805), summary financial statements (SA 810)</td></tr>
</tbody>
</table>
</div>
<h3>Adjacent Standards Beyond SAs</h3>
<ul>
<li><strong>SQC 1 (Standard on Quality Control 1):</strong> Firm-level quality control - mandatory for all audit firms</li>
<li><strong>SRE (Standards on Review Engagements):</strong> SRE 2400 review of historical financial statements; SRE 2410 review of interim financial information (SEBI LODR Reg 33 quarterly limited review)</li>
<li><strong>SAE (Standards on Assurance Engagements):</strong> SAE 3400 prospective financial information; SAE 3402 controls at service organisation; SAE 3410 greenhouse gas statements</li>
<li><strong>SRS (Standards on Related Services):</strong> SRS 4400 agreed-upon procedures; SRS 4410 compilation engagements</li>
</ul>
<h3>Most Consequential SAs</h3>
<p><strong>SA 200</strong> sets overarching objectives - reasonable assurance and professional scepticism. <strong>SA 230</strong> mandates audit documentation enabling an experienced auditor to understand procedures performed; audit file assembled within 60 days of the audit report. <strong>SA 315 (Revised)</strong>, effective FY 2022-23, requires entity-specific risk assessment including IT environment, with inherent and control risk separated. <strong>SA 600</strong> governs principal auditor reliance on component auditors for consolidated audits. <strong>SA 700 (Revised)</strong> prescribes audit report format with Opinion first, Basis, KAM, Management Responsibility, Auditor Responsibility. <strong>SA 701</strong> mandates Key Audit Matters for all listed company audits. <strong>SA 720 (Revised)</strong> requires reading Director Report and MD&amp;A for inconsistencies.</p>


            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Standards on Auditing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>SA Gap Assessment for Audit Committees and Boards</td><td>Independent SA-compliance review of an existing audit engagement (whether Patron or another firm performed the audit) - examining engagement letter (SA 210), planning memo (SA 300), risk assessment (SA 315 Revised), audit evidence (SA 500), and reporting (SA 700 Revised, SA 701, SA 720 Revised); written gap report with paragraph-level references.</td></tr>
<tr><td>SA Gap Assessment for M&amp;A Diligence Buyers</td><td>Pre-acquisition diligence on target company prior audit quality - identifying SA compliance gaps that may indicate audit risk or hidden financial reporting issues; informs purchase price adjustments and representation and warranty insurance.</td></tr>
<tr><td>NFRA Inspection Response (Company-Side)</td><td>Drafting written representations on accounting policy positions and audit findings; coordination with statutory audit firm on joint response; technical positions backed by SA paragraph references and ICAI guidance.</td></tr>
<tr><td>NFRA Inspection Response (Audit-Firm-Side)</td><td>For audit firms facing NFRA inspection - working paper review and remediation, SA compliance gap closure, written response drafting, technical position memos, post-inspection action plan.</td></tr>
<tr><td>SQC 1 Implementation for Audit Firms</td><td>Firm-level Quality Control system design and implementation - leadership and tone at top, ethical requirements monitoring, client acceptance and continuance procedures, human resources policies, engagement performance manuals, monitoring and remediation.</td></tr>
<tr><td>ICAI Peer Review Preparation</td><td>Audit working paper review against SA framework; gap closure; representation drafting; mock Peer Review walk-through; coordination with assigned Peer Reviewer.</td></tr>
<tr><td>Audit Firm Staff Training on SAs</td><td>Customised training programmes for newly qualified CAs and audit firm staff - SA 315 Revised risk assessment, SA 540 fair value estimates, SA 600 group audit, SA 701 KAM drafting; case-study-based with current NFRA inspection findings as learning material.</td></tr>
<tr><td>SA-Compliant Statutory Audit (Patron Own)</td><td>All Patron statutory audits are conducted in compliance with SAs - documented audit file (SA 230), planning memo (SA 300), risk assessment (SA 315 Revised), substantive testing (SA 500), audit report (SA 700 Revised), KAM for listed clients (SA 701).</td></tr>


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
        <header class="section-header" style="text-align:center;margin-bottom:48px;">
            <span class="section-eyebrow">Our Process</span>
            <h2 class="section-title">Our 6-Step SA Compliance Engagement Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron follows a structured 6-step process for every Standards on Auditing engagement. Each step is documented against specific SA paragraphs and ICAI Implementation Guides so deliverables withstand future NFRA inspection or Peer Review scrutiny.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Engagement Scoping and Engagement Letter</h3>
        <p class="step-description">30-minute partner discovery call to understand the engagement type - SA gap assessment, NFRA inspection response, SQC 1 implementation, Peer Review preparation, or audit firm training. Fixed-fee quote and engagement letter under SA 210 framework within 24 hours.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Partner call
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 210 letter
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Fixed-fee quote
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="15" y="10" width="90" height="18" rx="6" fill="#14365F"/>
        <text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA 210</text>
        <line x1="25" y1="40" x2="80" y2="40" stroke="#F5A623" stroke-width="2"/>
        <line x1="25" y1="52" x2="90" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="25" y1="64" x2="75" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="95" cy="74" r="9" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
        <path d="M91 74l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Scoped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Working Paper File Review</h3>
        <p class="step-description">For SA gap assessment, Patron reviews the existing audit working paper file - engagement letter (SA 210), planning memo (SA 300), risk assessment (SA 315 Revised), audit evidence (SA 500-580), management representation letter (SA 580), and audit report (SA 700 Revised); mapped against SA paragraph-level requirements.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 230 audit file
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                SA 315 risk
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Paragraph-level
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="15" width="80" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="20" y="15" width="80" height="12" fill="#14365F"/>
        <line x1="30" y1="38" x2="90" y2="38" stroke="#F5A623" stroke-width="2"/>
        <line x1="30" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="30" y1="62" x2="85" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <line x1="30" y1="72" x2="75" y2="72" stroke="#14365F" stroke-width="1.5" opacity="0.3"/>
        <circle cx="100" cy="40" r="10" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/>
        <circle cx="97" cy="37" r="5" fill="none" stroke="#14365F" stroke-width="1.5"/>
                </svg>
            </div>
            <span class="illustration-label">File Reviewed</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Gap Identification</h3>
        <p class="step-description">Written list of SA compliance gaps with severity rating (critical, significant, minor); each gap referenced to specific SA paragraph; potential consequences (qualification of opinion, NFRA inspection risk, Peer Review failure, ICAI disciplinary action) documented.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Severity rating
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Paragraph cite
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Consequences mapped
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <circle cx="30" cy="40" r="6" fill="#DC2626"/>
        <text x="30" y="44" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">!</text>
        <circle cx="60" cy="40" r="6" fill="#F5A623"/>
        <text x="60" y="44" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">!</text>
        <circle cx="90" cy="40" r="6" fill="#E8712C"/>
        <line x1="20" y1="58" x2="100" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
        <line x1="20" y1="68" x2="80" y2="68" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Gaps Identified</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Remediation Plan</h3>
        <p class="step-description">Detailed remediation plan with responsible person, timeline, and supporting evidence required; coordinated with audit firm (where applicable) for working paper supplements; technical memos drafted for material judgemental areas.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Owner assigned
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Timeline locked
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Evidence list
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <rect x="30" y="30" width="60" height="6" rx="2" fill="#F5A623"/>
        <rect x="30" y="42" width="50" height="6" rx="2" fill="#14365F" opacity="0.5"/>
        <rect x="30" y="54" width="55" height="6" rx="2" fill="#E8712C" opacity="0.7"/>
        <rect x="30" y="66" width="45" height="6" rx="2" fill="#14365F" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Plan Set</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Stakeholder Communication</h3>
        <p class="step-description">For company-side engagements - Audit Committee briefing; for audit-firm-side engagements - partner team briefing; for NFRA inspection - drafting of written representations and supporting working papers; clear positioning on SA paragraph compliance.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Audit Committee
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Written reps
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Partner brief
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="20" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <circle cx="30" cy="38" r="5" fill="#F5A623"/>
        <circle cx="48" cy="38" r="5" fill="#14365F"/>
        <circle cx="66" cy="38" r="5" fill="#E8712C"/>
        <circle cx="84" cy="38" r="5" fill="#14365F"/>
        <line x1="20" y1="52" x2="100" y2="52" stroke="#14365F" stroke-width="1" opacity="0.4"/>
        <line x1="20" y1="62" x2="80" y2="62" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                </svg>
            </div>
            <span class="illustration-label">Briefed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Implementation and Documentation</h3>
        <p class="step-description">Implementation of remediation actions; SQC 1 firm policies rolled out (where applicable); Peer Review submission package prepared (where applicable); NFRA inspection response submitted with supporting working papers; post-engagement debrief with lessons-learned memo.</p>
        <div class="step-highlights">
            <span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Remediation done
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Submitted
            </span>
<span class="highlight-tag">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Lessons memo
            </span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
        <path d="M30 50 L48 65 L92 30" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        <text x="60" y="78" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SA COMPLIANT</text>
                </svg>
            </div>
            <span class="illustration-label">Closed</span>
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
            <h2 class="section-title">Documents Required for SA Compliance Engagement</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents to scope and execute a Standards on Auditing engagement. The exact list depends on whether the engagement is SA gap assessment, NFRA inspection response, SQC 1 implementation, Peer Review preparation, or audit firm training.</p>
<h3>For SA Gap Assessment</h3>
<ul>
<li>Audit engagement letter (SA 210)</li>
<li>Audit planning memo (SA 300)</li>
<li>Risk assessment documentation (SA 315 Revised)</li>
<li>Materiality determination (SA 320)</li>
<li>Audit programmes and substantive testing working papers (SA 500-580)</li>
<li>Management representation letter (SA 580)</li>
<li>Audit report with UDIN (SA 700 Revised, SA 701 where applicable)</li>
</ul>
<h3>For NFRA Inspection Response</h3>
<ul>
<li>NFRA query letter and supporting documents requested by NFRA</li>
<li>Prior year working papers and audit firm internal review notes</li>
<li>Quality control documentation</li>
<li>UDIN registration printouts</li>
</ul>
<h3>For SQC 1 Implementation (Audit Firm)</h3>
<ul>
<li>Firm partnership deed; current quality control policies</li>
<li>Client acceptance procedures; engagement letter template</li>
<li>Audit programme templates; staff training records</li>
<li>Existing monitoring procedures</li>
</ul>
<h3>For Peer Review Preparation (Audit Firm)</h3>
<ul>
<li>List of audit engagements for the Peer Review period</li>
<li>Working paper files for sample engagements</li>
<li>Firm quality control policies; partner CVs and CA membership numbers</li>
<li>Prior Peer Review reports (if any)</li>
</ul>
<h3>For M&amp;A Diligence SA Review</h3>
<ul>
<li>Target company prior 3-year audit reports and signed financial statements</li>
<li>Auditor engagement letter; auditor KAM section (if target is listed)</li>
<li>Management representation letter</li>
<li>Any qualified opinions or modifications history</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common SA Compliance Issues from NFRA Inspections</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr><td>Inadequate SA 315 (Revised) risk assessment documentation</td><td>NFRA financial reporting quality reviews frequently identify SA 315 (Revised) gaps - audit firms documenting risk assessment in a templated checklist without entity-specific risk factor analysis, inadequate understanding of IT environment, missing inherent vs control risk separation. SA 315 (Revised) effective from FY 2022-23 onwards has significantly raised the bar.</td><td>Entity-specific risk assessment template with IT environment walkthrough, separated inherent and control risk components, and documented procedures responsive to each identified risk.</td></tr>
<tr><td>SA 540 fair value and accounting estimates inadequacy</td><td>Fair value measurements under Ind AS 113 - particularly Level 3 inputs for unlisted investments, business combinations, impairment testing - require detailed SA 540 procedures. NFRA inspections find common gaps - audit firms accepting management valuation models without independent challenge, missing sensitivity analysis, inadequate use of auditor expert under SA 620.</td><td>SA 540 procedures matrix with prescribed sensitivity testing, independent valuation challenge protocols, and SA 620 expert involvement where Level 3 inputs are used.</td></tr>
<tr><td>SA 600 component auditor inadequate review</td><td>Consolidated audits of MNCs and large groups require principal auditor to assess and review component auditor work under SA 600. NFRA findings include missing instructions to component auditor, inadequate scope of review of working papers, group reporting package not aligned with component audit work.</td><td>Standardised SA 600 communication and review protocol, group reporting package template, and documented review of component auditor working papers for material components.</td></tr>
<tr><td>SA 701 KAM drafting quality</td><td>For listed company audits, KAMs under SA 701 must be entity-specific, describing why the matter was significant and how the audit addressed it. NFRA inspections frequently find boilerplate KAMs - revenue recognition described generically without entity-specific risk factors and procedures.</td><td>KAM library with entity-specific drafting and review protocol; mock NFRA review before sign-off; SEBI and NFRA pay close attention to KAM quality in listed company reports.</td></tr>
<tr><td>SA 230 audit documentation completeness</td><td>Audit file assembly within 60 days of audit report under SA 230 - common gaps include missing date-stamps on working papers, incomplete cross-references between procedures and findings, post-archival changes without proper documentation.</td><td>Pre-archival completeness checklist with mandatory items by SA reference; NFRA treats missing documentation as if the procedure was not performed.</td></tr>
<tr><td>SA 720 (Revised) Other Information procedures</td><td>SA 720 (Revised) requires auditor to read other information (Director Report, MD&amp;A, Corporate Governance Report) and identify material inconsistencies with financial statements. Common gap - auditor not reading or only superficially reading the Director Report; missing Other Information paragraph in audit report.</td><td>SA 720 procedure with structured comparison of Director Report vs audited financials; mandatory Other Information paragraph in every audit report under SA 700 Revised.</td></tr>


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
            <h2 class="section-title">Standards on Auditing Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 25,000 (Exl GST and Govt. Charges)</td></tr>
<tr><td>Peer Review Preparation (Small Audit Firm)</td><td>Rs 25,000 to Rs 1,00,000 - working paper file review for selected engagements; gap closure list; representation drafting; coordination with Peer Reviewer</td></tr>
<tr><td>SA Gap Assessment - Single Engagement</td><td>Rs 1,00,000 to Rs 5,00,000 - written SA-by-SA gap report with paragraph references; severity rating; remediation plan</td></tr>
<tr><td>SA Gap Assessment - Large Group with Subsidiaries</td><td>Rs 5,00,000 to Rs 15,00,000 - holding company plus sample subsidiaries; SA 600 component auditor review; CFS audit working paper review</td></tr>
<tr><td>M&amp;A Diligence SA Review (Pre-Acquisition)</td><td>Rs 1,50,000 to Rs 7,50,000 - target company 3-year audit quality review; risk areas identified; KAM analysis</td></tr>
<tr><td>NFRA Inspection Response (Company-Side)</td><td>Rs 1,00,000 to Rs 10,00,000 - written representation drafting; technical position memos; coordination with audit firm</td></tr>
<tr><td>NFRA Inspection Response (Audit-Firm-Side)</td><td>Rs 5,00,000 to Rs 50,00,000+ - working paper remediation; SA compliance gap closure; response drafting; post-inspection action plan</td></tr>
<tr><td>SQC 1 Implementation (Audit Firm)</td><td>Rs 50,000 to Rs 5,00,000 one-time - firm QC policy manual; client acceptance procedures; engagement performance protocols; monitoring system</td></tr>
<tr><td>Audit Firm Staff Training (Per Programme)</td><td>Rs 25,000 to Rs 5,00,000 - customised curriculum; case-study-based; current NFRA observations integrated</td></tr>
<tr><td>Government and ICAI Filing Fees</td><td>ICAI Peer Review Board fees and NFRA filing fees billed at actuals</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Standards on Auditing consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20Standards%20on%20Auditing%20fixed-fee%20quote%20-%20SA%20gap%20assessment%20%2F%20NFRA%20response%20%2F%20SQC%201%20%2F%20Peer%20Review." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Engagement Timelines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Peer Review Preparation (Small Firm)</td><td>4 to 6 weeks - Weeks 1-2 file review; Weeks 3-4 gap closure; Weeks 5-6 mock review and submission</td></tr>
<tr><td>SA Gap Assessment - Single Engagement</td><td>2 to 4 weeks - Week 1 data; Weeks 2-3 review; Week 4 report and Audit Committee briefing</td></tr>
<tr><td>SA Gap Assessment - Large Group</td><td>6 to 12 weeks - includes holding company plus sample subsidiaries; SA 600 component auditor review</td></tr>
<tr><td>M&amp;A Diligence SA Review</td><td>3 to 6 weeks - aligned with overall diligence calendar</td></tr>
<tr><td>NFRA Inspection Response (Company-Side)</td><td>4 to 8 weeks - query analysis; technical position drafting; auditor coordination; submission</td></tr>
<tr><td>NFRA Inspection Response (Audit-Firm-Side)</td><td>8 to 16 weeks - working paper review; gap closure; response drafting; submission; appearance preparation</td></tr>
<tr><td>SQC 1 Implementation (Audit Firm)</td><td>4 to 8 weeks - Weeks 1-2 current state assessment; Weeks 3-5 policy drafting; Weeks 6-8 roll-out and training</td></tr>
<tr><td>Audit Firm Training</td><td>1 to 4 weeks per programme - half-day to 5-day customised programmes</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Standards on Auditing compliance is not a once-a-year tick box.</strong> Peer Review cycles run 3 to 5 years; NFRA inspections happen periodically and unannounced; SA gap assessment is best done before signing the next year ADT-1. Patron is engaged year-round - from quick assessments to multi-month NFRA inspection responses.</p>

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
            <h2 class="section-title">Why Choose Patron for Standards on Auditing</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">Senior Partner CA on Every Engagement</h3>
        <p class="feature-description">15+ years of audit practice including direct experience with NFRA inspection response and ICAI Peer Review across multiple firms. Partner-led, not delegated to juniors.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3 class="feature-title">SA-by-SA Paragraph-Level Depth</h3>
        <p class="feature-description">Every deliverable references specific SA paragraphs and ICAI Implementation Guides; not template-based checklists. Designed to withstand NFRA, Peer Reviewer, or any regulatory scrutiny.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3 class="feature-title">Independence for SA Gap Assessment</h3>
        <p class="feature-description">Patron is independent of the audit firm being reviewed - clean SA 220 and Section 141 independence for company-side reviews and Audit Committee assignments.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Integrated Framework Cluster</h3>
        <p class="feature-description">SA reviews integrate with Patron Accounting Standards and Ind AS services - same partner CA handles audit framework and reporting framework questions in a single engagement.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3 class="feature-title">4-Office Pan-India Presence</h3>
        <p class="feature-description">Marine Lines Mumbai, Wagholi Pune, Rohini Delhi, Golf Course Extension Road Gurugram - direct on-site availability for audit firm workshops and Audit Committee meetings.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
        <h3 class="feature-title">Fixed-Fee Transparency</h3>
        <p class="feature-description">Written scoping memo and fixed-fee quote within 24 hours. No surprise overruns even on multi-week engagements like NFRA inspection response or SQC 1 implementation.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
        <h3 class="feature-title">NFRA-Inspection-Grade Audit Files</h3>
        <p class="feature-description">All Patron statutory audits are conducted in compliance with SAs - documented audit file (SA 230), risk assessment (SA 315 Revised), substantive testing (SA 500), audit report (SA 700 Revised).</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">Year-Round SA Engagement</h3>
        <p class="feature-description">From quick Peer Review preparation to multi-month NFRA inspection responses, Patron is engaged year-round with audit firms, Audit Committees, CFOs, and M&amp;A diligence teams.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Audit Committees, CFOs and Audit Firms</h2>
            <div class="content-text">
                
                
<p><strong>10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of Practice</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:12px 20px;background:var(--orange-lighter);margin:24px 0;font-style:italic;color:var(--text-secondary);">
    "After our audit firm faced an NFRA query on SA 540 and SA 600 compliance, Patron team did a working paper remediation across 4 group audits in 12 weeks. Each SA paragraph gap was closed with new procedures, supplemental working papers, and revised technical memos. The NFRA response was submitted with confidence and well-received."
    <footer style="margin-top:8px;font-size:13px;color:var(--text-muted);font-style:normal;">- Engagement Partner, Mid-tier audit firm</footer>
</blockquote>
<p>Trusted by Audit Committees of listed companies, Group CFOs, mid-tier audit firms, and Big 4 M&amp;A diligence teams. Patron operates in the mid-market and audit-firm-services niche.</p>
<p style="margin-top:16px;"><strong>Anonymised engagement:</strong> A listed-company Audit Committee engaged Patron for an independent SA gap assessment of their continuing statutory auditor. The 4-week review identified 9 SA gaps - 3 critical (SA 315 Revised risk assessment templating, SA 540 Level 3 fair value challenge, SA 701 boilerplate KAMs) and 6 significant. The Committee used the findings to require working paper supplements before signing the next year ADT-1 - and the audit firm subsequently strengthened its SA 315 procedures across all listed-company engagements.</p>
<p style="margin-top:16px;"><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves audit firms and Audit Committees across India - both in-person and remotely.</strong></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Big 4 vs Patron for SA Compliance Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Big 4 / Top Firm</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        
<tr><td>Fee level (single engagement SA gap)</td><td>Rs 5 lakh to Rs 25 lakh</td><td>Rs 1 lakh to Rs 5 lakh</td></tr>
<tr><td>Fee level (NFRA inspection audit-firm-side)</td><td>Rs 25 lakh to Rs 2 crore</td><td>Rs 5 lakh to Rs 50 lakh</td></tr>
<tr><td>Partner involvement</td><td>Director or partner rare for mid-market</td><td>Senior partner CA on every engagement</td></tr>
<tr><td>Independence for SA gap assessment</td><td>Conflict if Big 4 is parent firm auditor</td><td>Clean independence under SA 220 and Section 141</td></tr>
<tr><td>Audit firm SQC 1 implementation</td><td>Generally not offered to other audit firms (competitor concerns)</td><td>Yes - dedicated audit firm services line</td></tr>
<tr><td>Audit firm staff training</td><td>Internal only</td><td>External training for other audit firms</td></tr>
<tr><td>Engagement model</td><td>Brand plus global IFRS audit network</td><td>Partner attention plus audit firm services niche plus fixed fees</td></tr>
<tr><td>NFRA inspection response speed</td><td>4 to 16 weeks with layered review</td><td>4 to 12 weeks with direct partner drafting</td></tr>
<tr><td>M&amp;A diligence SA review</td><td>Offered for Big 4 audit clients only</td><td>Open to any acquirer or PE fund regardless of target auditor</td></tr>


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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                
<p>Standards on Auditing is the audit methodology framework. It pairs naturally with the audit service pages (where SAs are applied) and with the reporting framework pages (what is being audited).</p>
<ul>
<li><a href="/statutory-audit"><strong>Statutory Audit:</strong></a> SA-compliant statutory audit under Section 139 - the service where SAs are applied</li>
<li><a href="/statutory-audit-for-listed-companies"><strong>Statutory Audit for Listed Companies:</strong></a> SA 701 KAM mandatory; SRE 2410 quarterly review; NFRA oversight</li>
<li><a href="/statutory-audit-private-limited-company"><strong>Statutory Audit for Private Limited Company:</strong></a> SA framework applied to Pvt Ltd audits</li>
<li><a href="/statutory-audit-llp"><strong>Statutory Audit for LLP:</strong></a> SAs apply to LLP audit under Rule 24(8) LLP Rules</li>
<li><a href="/tax-audit"><strong>Tax Audit (Section 44AB):</strong></a> SAs apply to tax audit; Form 3CA/3CB and 3CD</li>
<li><a href="/internal-audit"><strong>Internal Audit (Section 138):</strong></a> Internal audit uses SIAs (Standards on Internal Audit) - separate framework from SAs</li>
<li><a href="/accounting-standards"><strong>Accounting Standards:</strong></a> AS plus Ind AS - what to report (SAs are how to audit that)</li>
<li><a href="/ind-as"><strong>Ind AS:</strong></a> Ind AS deep dive - audited under the SA framework</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for SAs</h2>
            <div class="content-text">
                
                
<p>Standards on Auditing draw their legal authority from the Companies Act 2013, the Chartered Accountants Act 1949, and the NFRA Rules 2018. The Income Tax Act 1961 extends SA compliance to tax audits under Section 44AB.</p>
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Provision / Authority</th><th>Detail</th></tr></thead>
<tbody>
<tr><td>Section 143(10) Companies Act 2013</td><td>Every auditor shall comply with the auditing standards - the primary legal authority for SAs</td></tr>
<tr><td>Section 143(11) Companies Act 2013</td><td>Central Government to prescribe additional matters to be reported under CARO; CARO 2020 currently notified</td></tr>
<tr><td>Section 143(12) Companies Act 2013</td><td>Fraud reporting - above Rs 1 crore to Central Government per Rule 13; below to Audit Committee or Board</td></tr>
<tr><td>Section 142 Companies Act 2013</td><td>Remuneration of auditors - reference to compliance with auditing standards</td></tr>
<tr><td>Companies (Audit and Auditors) Rules 2014</td><td>Rule 12 on duties of auditor; Rule 13 on fraud reporting; procedural requirements</td></tr>
<tr><td>Chartered Accountants Act 1949</td><td>ICAI mandate to issue auditing standards through AASB; disciplinary mechanism under Schedule</td></tr>
<tr><td>NFRA Rules 2018</td><td>National Financial Reporting Authority to oversee compliance with auditing standards by auditors of Public Interest Entities</td></tr>
<tr><td>Section 132 Companies Act 2013</td><td>NFRA constitution and powers - including investigation, monetary penalties up to 10x of fees and 10-year debarment for non-compliance</td></tr>
<tr><td>ICAI Peer Review Board</td><td>Mandatory Peer Review for audit firms auditing listed companies and certain other PIEs; cycle of 3-5 years depending on firm category</td></tr>
<tr><td>ICAI Quality Review Board (QRB)</td><td>QRB oversight on audit quality for non-PIE audits</td></tr>
<tr><td>SEBI LODR 2015 Regulation 33</td><td>Quarterly limited review under SRE 2410 for listed company audits</td></tr>
<tr><td>Section 44AB Income Tax Act 1961</td><td>Tax audit by Chartered Accountant - SAs apply to tax audit as well</td></tr>
<tr><td>Form 3CA / 3CB and Form 3CD</td><td>Tax audit report formats issued under Income Tax Rules; signed under UDIN</td></tr>
<tr><td>UDIN (Unique Document Identification Number)</td><td>ICAI requirement - every audit report signed by a Chartered Accountant must have UDIN generated through the ICAI UDIN portal</td></tr>
</tbody>
</table>
</div>
<p style="margin-top:12px;font-size:13px;color:var(--text-muted);">External references: <a href="https://www.icai.org/" target="_blank" rel="noopener">Institute of Chartered Accountants of India (ICAI)</a> | <a href="https://nfra.gov.in/" target="_blank" rel="noopener">National Financial Reporting Authority (NFRA)</a> | <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA)</a> | <a href="https://www.indiacode.nic.in/" target="_blank" rel="noopener">India Code (Companies Act 2013 + Chartered Accountants Act 1949)</a></p>


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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Common questions on the legal force of Standards on Auditing, SA 701 Key Audit Matters, NFRA oversight, SA 600 component auditor work, SQC 1 quality control, ICAI Peer Review, tax audit, and the distinction between SAs and Standards on Internal Audit.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What gives Standards on Auditing the force of law in India?</h3>
                        <div class="faq-expanded__a"><p>Section 143(10) of the Companies Act 2013 expressly states that every auditor shall comply with the auditing standards. The auditing standards are those notified by the Central Government in consultation with NFRA, and the notification incorporates the Standards on Auditing issued by the Auditing and Assurance Standards Board (AASB) of ICAI. Failure to comply can result in NFRA monetary penalties under Section 132 (up to 10 times audit fees and 10-year debarment), ICAI disciplinary action under the Chartered Accountants Act 1949, and qualification of audit opinions being challenged.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">When is SA 701 (Key Audit Matters) mandatory?</h3>
                        <div class="faq-expanded__a"><p>SA 701 is mandatory for audit reports of all listed companies on Indian stock exchanges (BSE, NSE, MSEI) and certain other entities. Key Audit Matters are matters that, in the auditor professional judgement, were of most significance in the audit of the current period financial statements - typically revenue recognition, valuation of significant estimates, going concern, business combinations, impairment testing. Each KAM is described with why it was a KAM and how the audit addressed it. NFRA and SEBI pay close attention to KAM quality in listed company audit reports.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the role of NFRA in Standards on Auditing compliance?</h3>
                        <div class="faq-expanded__a"><p>The National Financial Reporting Authority (NFRA), constituted under Section 132 of the Companies Act 2013, oversees auditors of Public Interest Entities (PIEs) - listed companies, banks, NBFCs above thresholds, insurance companies, and large unlisted companies. NFRA conducts financial reporting quality reviews of audited financial statements and the underlying audit working papers. SA compliance is a key focus area - particularly SA 230 documentation, SA 315 (Revised) risk assessment, SA 540 fair value estimates, SA 600 component auditor work, and SA 701 KAM drafting. NFRA can impose penalties up to 10 times audit fees plus 10-year debarment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is SA 600 applied to consolidated audits?</h3>
                        <div class="faq-expanded__a"><p>SA 600 Using the Work of Another Auditor (Component Auditor) governs principal auditor reliance on the work of auditors of components - subsidiaries, JVs, branches, associates - in a consolidated financial statement audit. Principal auditor must assess component auditor professional competence and independence; communicate clearly the scope and timing of work; review the component auditor working papers for material components; document the reliance basis. For MNCs with foreign component auditors, the procedures include accounting framework differences (Ind AS vs IFRS vs local GAAP) and language coordination.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is SQC 1 and which audit firms must comply?</h3>
                        <div class="faq-expanded__a"><p>SQC 1 Standard on Quality Control 1 is the firm-level quality control standard issued by ICAI. It requires every audit firm in India to establish and maintain a system of quality control covering 6 elements - leadership responsibilities; relevant ethical requirements (independence); acceptance and continuance of client relationships; human resources; engagement performance; monitoring. SQC 1 compliance is mandatory for all CA firms in practice regardless of size; Peer Review verifies SQC 1 implementation. Patron SQC 1 implementation service helps audit firms design and roll out a documented quality control system.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is ICAI Peer Review and when is it required?</h3>
                        <div class="faq-expanded__a"><p>ICAI Peer Review is conducted under the Peer Review Board framework - mandatory for audit firms auditing listed companies and other Public Interest Entities. Peer Review covers the firm SQC 1 quality control system and a sample of audit engagements. A Peer Reviewer (an experienced CA from another firm) examines working papers, interviews partners and staff, and issues a Peer Review Certificate which is required for the audit firm to continue auditing PIEs. Patron Peer Review preparation service helps audit firms close gaps before submission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do SAs apply to tax audit under Section 44AB?</h3>
                        <div class="faq-expanded__a"><p>Yes. Although Section 44AB of the Income Tax Act 1961 is the legal authority for tax audit (turnover Rs 1 crore or Rs 10 crore digital, or professional Rs 50 lakh), the audit itself is conducted by a Chartered Accountant in practice who is bound by the SAs. Form 3CA (where statutory audit is conducted) or Form 3CB (where no statutory audit is required), accompanied by Form 3CD, must be issued under the SA framework. UDIN through the ICAI portal is mandatory for tax audit reports too.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How are SAs different from Standards on Internal Audit (SIAs)?</h3>
                        <div class="faq-expanded__a"><p>SAs are issued by ICAI Auditing and Assurance Standards Board for external (statutory and tax) audit. SIAs are issued separately by ICAI Internal Audit Standards Board (IASB) and apply to internal audit conducted under Section 138 of the Companies Act 2013. SIAs include SIA 110 Nature of Assurance, SIA 240 Using Work of Another Internal Auditor, SIA 350 Review and Supervision. The two frameworks are complementary - SAs for external assurance, SIAs for internal assurance. Some entities use external CA firms to conduct internal audit, which would apply SIAs not SAs.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Who issues SAs?</strong> Auditing and Assurance Standards Board (AASB) of ICAI, approved by ICAI Council.</p>
<p><strong>Legal force?</strong> Section 143(10) Companies Act 2013 - mandatory compliance for every auditor.</p>
<p><strong>Number of SAs?</strong> 39+ SAs across 7 numbered categories from SA 100 to SA 810.</p>
<p><strong>SA 701 mandatory for?</strong> All listed company audits plus certain other entities; KAM disclosure required.</p>
<p><strong>SQC 1 applies to?</strong> Every CA firm in practice regardless of size - firm-level quality control.</p>
<p><strong>NFRA penalty range?</strong> Up to 10 times audit fees plus 10-year debarment under Section 132 and NFRA Rules 2018.</p>
<p><strong>Patron starting fee?</strong> Rs 25,000 for small firm Peer Review preparation.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NFRA Inspections Are Periodic and Unannounced</h2>
            <div class="content-text">
                
                
<p>Standards on Auditing compliance is the primary basis for NFRA inspection findings, ICAI Peer Review outcomes, and audit firm professional indemnity exposure. For audit firms auditing listed companies and other Public Interest Entities, Peer Review cycles run 3-5 years with mandatory submission to ICAI Peer Review Board; NFRA inspections happen periodically and unannounced. For Audit Committees and Boards, SA gap assessment of an incoming statutory auditor or a continuing engagement is best practice before signing the next year ADT-1.</p>
<p><strong>For M&amp;A diligence buyers, SA gap review of target company audits identifies hidden audit quality risk before deal closure.</strong></p>
<p style="margin-top:16px;"><strong>Get a fixed-fee Standards on Auditing engagement quote - </strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20Standards%20on%20Auditing%20scoping%20memo." target="_blank" rel="noopener">WhatsApp us</a>. Partner CA response with written scoping memo within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">SA Framework. NFRA Inspection. Peer Review. One Specialist.</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#FFFFFF;">Standards on Auditing are the procedural backbone of every statutory audit, tax audit, and assurance engagement performed by a Chartered Accountant in India. Section 143(10) of the Companies Act 2013 makes compliance mandatory; NFRA enforces compliance for Public Interest Entities with penalties of up to 10 times audit fees plus 10-year debarment; ICAI Peer Review Board enforces compliance through periodic working paper review; ICAI disciplinary mechanism enforces compliance through complaint-based proceedings. The SA framework is comprehensive - covering audit objectives (SA 200), engagement acceptance (SA 210), planning (SA 300), risk assessment (SA 315 Revised), audit evidence (SA 500-580), using work of others (SA 600-620), and reporting (SA 700-720 Revised) - with adjacent standards SQC 1, SRE, SAE, and SRS.</p>
<p style="color:#FFFFFF;margin-top:14px;">Patron Accounting offers a dedicated Standards on Auditing service line - SA gap assessment for Audit Committees, Boards, and M&amp;A diligence buyers; NFRA inspection response for both company and audit firm sides; SQC 1 implementation for audit firms; ICAI Peer Review preparation; and audit firm staff training. Our own statutory audits are NFRA-inspection-grade SA-compliant. With 15+ years of practice, 4-office pan-India presence, senior partner CA involvement on every engagement, and fixed-fee transparency, Patron is the specialist counsel for Standards on Auditing compliance in India.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20Standards%20on%20Auditing%20fixed-fee%20quote%20-%20SA%20gap%20assessment%20%2F%20NFRA%20response%20%2F%20SQC%201%20%2F%20Peer%20Review." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="/cdn-cgi/l/email-protection#4c25222a230c3c2d383e23222d2f2f2339223825222b622f2321" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Standards on Auditing Advisory Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron serves Audit Committees, audit firms, and Group CFOs across India - both in-person from our four offices and remotely everywhere else.</p>
            
            
<div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-block-title">Our Offices Across India</div>
    <div class="pa-block-sub">In-person SA gap assessment, NFRA inspection response, and audit firm workshops in our four offices, remote coverage everywhere else.</div>
    <div class="pa-city-grid">
        <a href="/statutory-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/statutory-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/statutory-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Audit services where SAs are applied and reporting framework counterparts</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/statutory-audit-for-listed-companies" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit (Listed Cos)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit (Section 44AB)</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/accounting-standards" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Standards</div><div class="pa-card-sub">India</div></div></a>
        <a href="/ind-as" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Ind AS</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 14 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 14 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2 - Audit and Assurance). Triggers for earlier review include ICAI AASB notification of new or revised SA, NFRA Rules 2018 amendment, ICAI Peer Review Board guidelines update, Section 143(10) Companies Act amendment, SEBI LODR Reg 33 review cadence change affecting SRE 2410, UDIN portal procedural changes, new SQC 1 amendments, or Chartered Accountants Act 1949 disciplinary mechanism amendment.</p>
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