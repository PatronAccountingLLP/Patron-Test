
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
    <title>Qualified vs Unqualified Audit</title>
    <meta name="description" content="Complete guide - qualified vs unqualified audit opinion, qualification triggers, lender and investor impact, removal roadmap, Patron prevention methodology.">
    <link rel="canonical" href="/qualified-vs-unqualified-audit-opinion">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Qualified vs Unqualified Audit 2026 | Patron Accounting">
    <meta property="og:description" content="Complete guide - qualified vs unqualified audit opinion, qualification triggers, lender and investor impact, removal roadmap, Patron prevention methodology.">
    <meta property="og:url" content="/qualified-vs-unqualified-audit-opinion">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/qualified-vs-unqualified-audit-opinion-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Qualified vs Unqualified Audit 2026 | Patron Accounting">
    <meta name="twitter:description" content="Complete guide - qualified vs unqualified audit opinion, qualification triggers, lender and investor impact, removal roadmap, Patron prevention methodology.">
    <meta name="twitter:image" content="/images/qualified-vs-unqualified-audit-opinion-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/qualified-vs-unqualified-audit-opinion#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Statutory Audit", "item": "/statutory-audit" },
            { "@type": "ListItem", "position": 3, "name": "Qualified vs Unqualified Audit Opinion", "item": "/qualified-vs-unqualified-audit-opinion" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/qualified-vs-unqualified-audit-opinion#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the difference between qualified and unqualified audit opinion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "An unqualified opinion (Unmodified Opinion under SA 700) is the clean audit report - the auditor concludes that financial statements give a true and fair view under AS or Ind AS. A qualified opinion under SA 705 is issued when the auditor concludes that the financial statements give a true and fair view EXCEPT FOR a specific matter that is material but NOT pervasive. The 'except for' wording is the distinguishing feature; SA 705 prohibits softer phrases like 'subject to'."
              }
            },
            {
              "@type": "Question",
              "name": "When is a qualified opinion issued?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A qualified opinion is issued under SA 705 when either (a) financial statements are materially misstated but the misstatement is NOT pervasive (auditor has sufficient appropriate audit evidence), OR (b) the auditor is unable to obtain sufficient appropriate audit evidence on a matter that is material but NOT pervasive. The four trigger categories are departure from accounting standards; insufficient audit evidence on a specific material matter; scope limitation imposed by management or circumstances; significant uncertainty including going concern."
              }
            },
            {
              "@type": "Question",
              "name": "What is the meaning of 'except for' in an audit report?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The phrase 'except for' is the prescribed SA 705 wording for qualified opinions - 'In our opinion, except for the effects of the matter described in the Basis for Qualified Opinion section, the financial statements give a true and fair view'. It signals that the statements are largely fair, but the auditor has identified a specific matter for the user to consider. SA 705 prohibits softer phrases like 'subject to' as not clear or forceful enough."
              }
            },
            {
              "@type": "Question",
              "name": "How does a qualified opinion affect bank loans and credit lines?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Banks and non-bank lenders read every audit report during loan origination and at annual review. A qualified opinion triggers additional diligence - lenders typically require management to explain the cause, provide remediation roadmap and possibly engage forensic specialists. Many loan covenants include 'no qualified opinion' as a representation; a qualified opinion can trigger covenant breach requiring lender waiver or cure period. Worse outcomes include accelerated repayment demands and stricter pricing on subsequent renewals (50 to 200 basis point spread increases)."
              }
            },
            {
              "@type": "Question",
              "name": "How does a qualified opinion affect investor confidence and valuation?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Private equity, venture capital and strategic acquirers conduct intensive financial diligence on every transaction. A qualified opinion in target audit reports triggers additional commercial diligence cost (typically Rs 5 to 25 lakh additional advisory fees), valuation adjustments (PE houses commonly apply 5 to 15 percent valuation discounts for unresolved qualifications), escrow conditions on transaction close (typically 5 to 15 percent of consideration held until qualification is removed in subsequent audit) and in serious cases transaction failure."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take to remove an audit qualification?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Removal typically takes one to three audit cycles depending on cause. Departure from accounting standards can be removed in the next audit through corrective accounting and AS 5 or Ind AS 8 prior-period correction. Insufficient audit evidence resolves once predecessor cooperation or alternative procedures provide evidence. Scope limitation removes once management releases the limitation. Significant uncertainty including going concern is timeline-dependent on business turnaround and may take 1 to 3 cycles."
              }
            },
            {
              "@type": "Question",
              "name": "What are the most common reasons for qualified opinions in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "In unlisted Pvt Ltd audits the common qualification triggers are inventory cut-off failures around 31 March; related-party non-disclosure under Section 188 and Ind AS 24; Section 269ST cash receipts above Rs 2 lakh and Section 269SS cash loans / deposits above Rs 20,000 (triggering statutory dues default under CARO 3(vii)); IFC Material Weakness under Section 143(3)(i); going concern uncertainty under SA 570 with inadequate disclosure; first-year opening balance issues under SA 510 where predecessor cooperation is limited."
              }
            },
            {
              "@type": "Question",
              "name": "How can companies prevent qualified opinions?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Prevention requires year-round process rather than year-end exercise. Patron's seven-step approach - (1) Pre-Audit Issue Identification (PAII) review 6 months before year-end testing high-risk qualification triggers; (2) Mid-engagement triggering event flag - any potential qualification trigger escalated immediately to engagement partner and TCWG under SA 260; (3) Remediation window evaluation before audit report drafting; (4) Audit Committee communication on identified matters; (5) Qualified opinion drafting only where remediation impossible; (6) Sign-off with UDIN; (7) Year-over-year removal planning."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/qualified-vs-unqualified-audit-opinion#service",
          "name": "Qualified vs Unqualified Audit Opinion - Prevention and Removal Service",
          "url": "/qualified-vs-unqualified-audit-opinion",
          "description": "Patron's qualification-prevention statutory audit and qualification-removal advisory for Indian companies - covering SA 700 (Revised) unmodified opinion framework, SA 705 (Revised) qualified opinion triggers, the four trigger categories (GAAP departure, insufficient evidence, scope limitation, significant uncertainty including going concern), pre-audit issue identification six months before year-end, mid-engagement remediation window under SA 260 TCWG communication, and Year-1-to-Year-2 qualification removal roadmap with AS 5 / Ind AS 8 prior-period correction. Starting from INR 14,999.",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "serviceType": "Qualification-Prevention Statutory Audit and Qualification-Removal Advisory",
          "about": [
            { "@type": "Thing", "name": "Auditor's report", "sameAs": "https://en.wikipedia.org/wiki/Auditor%27s_report" },
            { "@type": "Thing", "name": "Companies Act 2013", "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013" },
            { "@type": "Thing", "name": "Audit", "sameAs": "https://en.wikipedia.org/wiki/Audit" }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Qualification Prevention and Removal Engagements",
            "itemListElement": [
              { "@type": "Offer", "name": "Statutory Audit plus Qualification Prevention (Pvt Ltd under Rs 50 cr revenue) - bundled engagement with PAII review 6 months before year-end", "price": "175000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-vs-unqualified-audit-opinion" },
              { "@type": "Offer", "name": "Mid-Size Pvt Ltd Statutory Audit plus Qualification Prevention (Rs 50 to 100 cr revenue)", "price": "450000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-vs-unqualified-audit-opinion" },
              { "@type": "Offer", "name": "Pre-Audit Issue Identification (PAII) Standalone Advisory Review", "price": "100000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-vs-unqualified-audit-opinion" },
              { "@type": "Offer", "name": "Year-Over-Year Qualification Removal Engagement plus AS 5 / Ind AS 8 prior period correction support", "price": "200000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/qualified-vs-unqualified-audit-opinion" }
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
                        Qualified vs Unqualified Audit Opinion - India Guide for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Practitioner Framework:</span> Sister to the qualified opinion handling guide - this page is the practitioner depth on when qualified opinions are issued, why issued, business impact, prevention and removal mechanics</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Statutory audit plus qualification prevention from Rs 1,75,000 (Pvt Ltd under Rs 50 cr); PAII standalone from Rs 1,00,000; Year-over-year removal advisory from Rs 2,00,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every Indian company audit - listed, unlisted Pvt Ltd, NBFC, bank, insurance; tax audit reports under Section 44AB follow the same SA 705 wording framework</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Anchor:</span> SA 700 (Revised) unmodified opinion; SA 705 (Revised) "except for" modifications; Companies Act Sections 143, 143(3)(b), 145, 134(3)(f), 147, 141</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India - 15+ years of qualification-prevention practice across Pvt Ltd entities, listed entities, NBFCs and pre-IPO transitions - rated 4.9 on Google.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20qualification-prevention%20statutory%20audit%20quote%20from%20Patron%20Accounting." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Qualified vs Unqualified Audit Opinion'/>
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
                                
<option value="qualified-vs-unqualified-audit-opinion" selected>Qualified vs Unqualified Audit Opinion</option>
<option value="statutory-audit">Statutory Audit (National Hub)</option>
<option value="qualified-audit-opinion-handling-guide">Qualified Opinion Handling Guide</option>
<option value="statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</option>
<option value="appointment-of-auditor">Appointment of Auditor</option>
<option value="change-of-auditor">Change of Auditor</option>
<option value="private-limited-company-compliance">Pvt Ltd Compliance</option>
<option value="tax-audit">Tax Audit</option>
<option value="internal-audit">Internal Audit</option>
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
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our merchant banker flagged a likely qualification on inventory cut-off and Section 188 related-party disclosure during pre-IPO diligence. Patron came in 6 months before year-end with the PAII review, identified both issues, redesigned the cut-off process and got Section 188 ratifications through the Board. Clean SA 700 unmodified opinion delivered - the IPO went through without an audit overhang.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Pre-IPO SaaS Pvt Ltd, Bengaluru</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our prior auditor had qualified the opinion on Sec 269ST cash receipt limits. Patron took the Year-over-Year removal engagement - cause analysis, remediation plan, full Sec 269ST tracker implementation through Razorpay reconciliation, AS 5 prior period correction route. Next year clean opinion with comparative restatement audited. PE diligence pass-through within 3 weeks.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha D.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, D2C Pvt Ltd, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">NFRA inspection had flagged boilerplate Section 134(3)(f) Board Report explanations in our peer-group last year. We engaged Patron for the qualification-prevention statutory audit. The PAII review caught two IFC Material Weakness risks 6 months early, the Board Report 134(3)(f) substantive drafting was NFRA-review-grade. Last quarter NFRA review passed without observation.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram R.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Audit Committee Chair, Listed Mid-Cap, Hyderabad</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We have 7 entities across the group with one Material Weakness IFC qualification carrying for 3 years from our prior auditor. Patron mapped the Year-over-Year removal roadmap across all 7 entities, scheduled PAII reviews 6 months before each year-end and worked AS 5 / Ind AS 8 prior period correction route for the comparatives. 5 entities got clean opinions in FY 2024-25; remaining 2 targeted for FY 2025-26.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Akash T.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Group CFO, Family Business Group, Delhi NCR</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Going concern uncertainty under SA 570 was looming for our FY 2024-25 - covenant breach risk on a Rs 80 crore term loan. Patron 12-month forward review caught it 5 months early, presented mitigating management plans (Rs 25 cr equity infusion timeline, covenant waiver path, debt restructuring under RBI Master Direction), and got the enhanced SA 570 disclosure cleared without modification. Clean opinion with Emphasis of Matter under SA 706 instead of qualification.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PB</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya B.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, NBFC Pvt Ltd, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">First-year audit with Patron after a 3-year-back-dated incorporation cleanup - SA 510 opening balance issue was the highest qualification risk. Patron worked predecessor cooperation channels, designed alternative procedures where predecessor working files were not available, and got the SA 510 procedures documented to NFRA-review standard. Unmodified opinion delivered with full SA 230 workpaper archive ready for any future ICAI quality review.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Harish S.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Promoter, Mid-Cap Pvt Ltd, Pune</div>
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
                    <p>Talk to a Patron CA team specialising in qualification-prevention statutory audit - PAII review 6 months before year-end, mid-engagement remediation window under SA 260 TCWG communication, Section 134(3)(f) substantive drafting and Year-over-Year qualification removal with AS 5 / Ind AS 8 prior period correction.</p>
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
<a href="#what-section" class="toc-btn">Definition</a>
<a href="#who-section" class="toc-btn">When Issued</a>
<a href="#services-section" class="toc-btn">Patron Services</a>
<a href="#procedure-section" class="toc-btn">7-Step Prevention</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Business Impact</a>
<a href="#fees-section" class="toc-btn">Pricing</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Benefits</a>
<a href="#comparison-section" class="toc-btn">DIY vs Patron</a>
<a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview of Qualified vs Unqualified Audit Opinion</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Qualified vs Unqualified Audit Opinion Services at a Glance</strong></p>
                    <p>An unqualified opinion (technically Unmodified Opinion under the revised SA 700) is the clean audit report - the auditor concludes that the financial statements give a true and fair view in accordance with the applicable financial reporting framework (AS or Ind AS). A qualified opinion under SA 705 is issued when the auditor concludes that either (a) financial statements are materially misstated but the misstatement is NOT pervasive, or (b) auditor is unable to obtain sufficient appropriate audit evidence on a matter that is material but NOT pervasive. The "except for" wording is the distinguishing feature; SA 705 prohibits softer phrases like "subject to". Removal typically takes 1 to 3 audit cycles.</p>
                </div>
                <p>The four trigger categories are - departure from accounting standards (GAAP), insufficient audit evidence, scope limitations and significant uncertainty including going concern. Business impact is severe and disproportionate to the technical mildness - stricter loan covenants and additional lender diligence, equity investor scrutiny with 5 to 15 percent valuation discounts, potential breach of existing covenants triggering accelerated repayment, listed-entity stock price drops (Victoria PLC fell 24.6 percent on a Hanover Flooring qualification), NFRA regulatory scrutiny and audit-committee escalation. Section 134(3)(f) Board Report substantive explanation is MANDATORY on every qualification.</p>
                <p>Patron Accounting LLP delivers qualification-prevention as a year-round managed engagement - not a reactive exercise during audit fieldwork. Our CA-led pod runs the Pre-Audit Issue Identification (PAII) review six months before year-end, mid-engagement remediation window under SA 260 TCWG communication, and Year-over-Year removal roadmap with AS 5 / Ind AS 8 prior-period correction where applicable. Cross-sell to /statutory-audit (parent hub), /statutory-audit-private-limited-company, /qualified-audit-opinion-handling-guide (CFO post-receipt handling sister page), /appointment-of-auditor, /change-of-auditor, /tax-audit and /internal-audit delivers a single CA pod across the audit cluster.</p>
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
                <h2 class="section-title">Qualified vs Unqualified Audit Opinion - Definition and Boundary</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>A qualified opinion under SA 705 of the Standards on Auditing is an audit opinion issued when the auditor concludes that the financial statements give a true and fair view EXCEPT FOR a specific matter that is material but NOT pervasive. An unqualified opinion - technically called Unmodified Opinion under the revised SA 700 - is the clean audit report without any such carve-out. The "except for" wording is the distinguishing feature of qualified opinions; SA 705 specifically prohibits softer phrases like "subject to" or "with the foregoing explanation" which the standard considers not clear or forceful enough.</p>

<p>The boundary between qualified and unqualified opinions is the materiality threshold. Materiality is judged from the perspective of users of financial statements - whether the matter could reasonably influence economic decisions taken on the basis of the financial statements. A misstatement or scope limitation below the materiality threshold does not require modification - the audit report can be unmodified. Once the materiality threshold is crossed, the next question is <strong>pervasiveness</strong> - if material but NOT pervasive, the opinion is qualified; if material AND pervasive, the opinion becomes adverse (for misstatements with evidence) or disclaimer (for inability to obtain evidence).</p>

<p>In Indian practice, the most common qualification triggers in unlisted Pvt Ltd company audits are - inventory cut-off failures around 31 March (revenue recognised one side, inventory recognised the other side, with year-end cut-off errors); related-party transaction non-disclosure under Section 188 and Ind AS 24; Sec 269ST cash receipts above Rs 2 lakh and Sec 269SS cash loans / deposits above Rs 20,000 (which trigger Income Tax penalty under Sec 271DA / 271D and CARO 3(vii) statutory dues default reporting); Material Weakness in Internal Financial Controls under Section 143(3)(i); and going concern uncertainty under SA 570. Listed entities additionally face qualifications on revenue recognition timing under Ind AS 115, ECL provisioning under Ind AS 109 and complex financial instrument valuation.</p>

<p>This page is the practitioner-and-CFO depth on qualified opinions specifically (when issued, why issued, business impact, prevention methodology and the one-to-three-audit-cycle removal roadmap). The sister page on qualified opinion handling covers post-receipt CFO operational response - the 7-day immediate response playbook, 5-stakeholder communication, Section 134(3)(f) drafting, AOC-4 filing and AGM coordination. The two pages complement each other - this one for framework understanding; the handling guide for operational handling.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Qualified vs Unqualified Audit Opinion:</strong></p>
                    
<ul>
    <li><strong>Unqualified / Unmodified Opinion (SA 700 Revised):</strong> Clean audit report - auditor concludes financial statements give true and fair view. No "except for" carve-out. Effective for audits of financial statements for periods beginning on or after 1 April 2018.</li>
    <li><strong>Qualified Opinion (SA 705 Revised):</strong> Modified opinion for material BUT NOT pervasive misstatement or inability to obtain SAAE. Uses "except for" wording. Effective 1 April 2018.</li>
    <li><strong>Material Misstatement (SA 320 / SA 450):</strong> Difference between recorded amount, classification, presentation or disclosure and what is required under the applicable financial reporting framework; assessed against materiality which is judged from users' perspective.</li>
    <li><strong>Pervasive (SA 705):</strong> Effects that (a) are not confined to specific elements, accounts or items; (b) if so confined, represent or could represent a substantial proportion of the financial statements; or (c) in relation to disclosures, are fundamental to users' understanding.</li>
    <li><strong>Basis for Qualified Opinion:</strong> The paragraph immediately before the Opinion paragraph that describes the matter giving rise to qualification, the financial-statement-level effect with amounts where quantifiable and (where applicable) management's response.</li>
    <li><strong>Scope Limitation:</strong> A restriction on the auditor's work - imposed by management (e.g. refusal to allow physical inventory verification) or by circumstances (e.g. records destroyed in fire). Management-imposed scope limitations frequently trigger SA 705 modification.</li>
    <li><strong>Four Qualification Triggers:</strong> (1) Departure from AS or Ind AS; (2) Insufficient audit evidence (inability to obtain SAAE); (3) Scope limitation by management or circumstances; (4) Significant uncertainty including going concern under SA 570.</li>
    <li><strong>Patron PAII Review:</strong> Pre-Audit Issue Identification - a 2-3 day focused review six months before year-end testing high-risk qualification triggers; not a full interim audit but a targeted scoping exercise with full remediation window.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Qualified vs Unqualified Audit Opinion</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Built for Practitioners</span>
                        <strong>SA 700 + SA 705 Framework Authority</strong>
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
            <h2 class="section-title">When Are Qualified Opinions Issued - 4 Trigger Categories</h2>
            <div class="content-text">
                
                
<p>Qualified opinions are issued in two distinct scenarios under SA 705 - (a) the auditor HAS sufficient appropriate audit evidence and concludes the financial statements ARE materially misstated but the misstatement is NOT pervasive (the "except for" qualification on misstatement); or (b) the auditor was UNABLE to obtain sufficient appropriate audit evidence on a matter that is material but NOT pervasive (the "except for" qualification on inability to obtain evidence). These two scenarios map to the four trigger categories.</p>

<p><strong>Trigger Category 1 - Departure from Accounting Standards (AS or Ind AS):</strong> The financial statements depart from the applicable financial reporting framework in a specific material respect that does not pervade the entire financial statements. Examples - inventory valued at cost rather than lower of cost or net realisable value; warranty or ECL provision inconsistent with the underlying Ind AS; revenue recognition timing for a specific contract type inconsistent with Ind AS 115; lease accounting not aligned with Ind AS 116. Patron approach - identified through PAII review; usually remediable through accounting correction before audit report signing.</p>

<p><strong>Trigger Category 2 - Insufficient Audit Evidence:</strong> The auditor was unable to obtain sufficient appropriate audit evidence on a specific material matter despite performing alternative audit procedures. Examples - opening balances unverifiable for a first-year audit under SA 510 because predecessor declined to share working files; specific receivable confirmation not obtainable with alternative procedures inadequate; physical inventory verification not possible at year-end. Patron approach - alternative procedures designed mid-engagement; qualification avoided where alternative procedures provide SAAE.</p>

<p><strong>Trigger Category 3 - Scope Limitation (Client or Circumstances):</strong> A specific limitation on auditor's work preventing SAAE - management refuses physical inventory observation; management denies access to specific accounting records; management imposes time restrictions; or circumstances such as fire or theft. Management-imposed scope limitations are particularly serious - the Victoria PLC / Hanover Flooring qualified opinion (24.6 percent stock drop) was specifically driven by management-imposed scope limitation. Patron approach - escalated to TCWG under SA 260 before sign-off.</p>

<p><strong>Trigger Category 4 - Significant Uncertainty (Including Going Concern under SA 570):</strong> Material uncertainty related to going concern under SA 570 (minimum 12 months forward review from audit report date) where management disclosure is inadequate; significant uncertainty on outcome of pending litigation, regulatory proceedings, tax assessment disputes; significant uncertainty on accounting estimate sensitivity (e.g. impairment of goodwill, deferred tax asset realisation). Patron approach - early identification through PAII review; remediation through enhanced disclosure or substantive mitigation evidence.</p>

<p style="margin-top:16px;"><strong>Common Indian Pvt Ltd Qualification Triggers Snapshot:</strong></p>
<div style="overflow-x:auto;">
<table style="width:100%;border-collapse:collapse;margin-top:8px;">
    <thead>
        <tr style="background:var(--blue);color:#fff;">
            <th style="padding:10px;text-align:left;font-size:13px;">Trigger</th>
            <th style="padding:10px;text-align:left;font-size:13px;">SA Reference</th>
            <th style="padding:10px;text-align:left;font-size:13px;">Statutory Anchor</th>
            <th style="padding:10px;text-align:left;font-size:13px;">Trigger Category</th>
        </tr>
    </thead>
    <tbody>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Inventory cut-off failure around 31 March</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">SA 501</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">AS 2 / Ind AS 2</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">1 - GAAP departure</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Related-party non-disclosure</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">SA 550</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Sec 188; AS 18 / Ind AS 24</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">1 - GAAP departure</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Sec 269ST / 269SS cash limits breach</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">SA 250</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">IT Act Sec 269ST/SS, 271DA/D</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">1 - GAAP / statutory dues</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">IFC Material Weakness</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">SA 315 / 330</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Sec 143(3)(i)</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">1 - GAAP / IFC</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Opening balance unverifiable</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">SA 510</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">First-year audits</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">2 - Insufficient evidence</td></tr>
        <tr><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Management denies physical inventory</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">SA 501</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">Management-imposed</td><td style="padding:10px;font-size:13px;border-bottom:1px solid #e5e7eb;">3 - Scope limitation</td></tr>
        <tr><td style="padding:10px;font-size:13px;">Going concern uncertainty disclosure inadequate</td><td style="padding:10px;font-size:13px;">SA 570</td><td style="padding:10px;font-size:13px;">12-month forward review</td><td style="padding:10px;font-size:13px;">4 - Significant uncertainty</td></tr>
    </tbody>
</table>
</div>

<p style="margin-top:16px;"><strong>Where Qualification Appears in the Audit Report Package:</strong></p>
<ul>
    <li>Main audit report under SA 700 / 705 - Qualified Opinion paragraph + Basis for Qualified Opinion paragraph immediately before it; signed under Section 145 with UDIN</li>
    <li>Key Audit Matter (KAM) section under SA 701 (listed entities) - qualifying matter typically also reported as KAM</li>
    <li>Material Uncertainty Related to Going Concern section under SA 570 (where applicable)</li>
    <li>Annexure A CARO 2020 - matter giving rise to qualification frequently aligns with a CARO clause (e.g. 3(xiii) related party, 3(vii)(a) statutory dues)</li>
    <li>Annexure B IFC audit report under Section 143(3)(i) - IFC Material Weakness may itself be the qualification trigger</li>
    <li>Board Report under Section 134(3)(f) - MANDATORY substantive explanation of every qualification by the auditor</li>
    <li>Form AOC-4 - audited financial statements with main report (qualified), CARO Annexure A, IFC Annexure B and Board Report filed with MCA21 V3 within 30 days of AGM</li>
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
            <h2 class="section-title">Patron's Qualification Prevention and Removal Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Statutory Audit with Qualification Prevention (Bundled Engagement)</td><td>Pvt Ltd / unlisted public / listed entity statutory audit under Section 139 of Companies Act 2013, conducted with structured PAII review six months before year-end, mid-engagement remediation window and SA 260 TCWG communication - designed to deliver unmodified (clean) opinion through proactive issue identification.</td></tr>
<tr><td>Pre-Audit Issue Identification (PAII) Standalone Advisory</td><td>2-3 day focused review six months before year-end testing high-risk qualification triggers - inventory cut-off, revenue cut-off, related-party documentation, statutory dues compliance, cash receipt limits, IFC weakness, going concern indicators. Issues identified with full remediation window.</td></tr>
<tr><td>Year-Over-Year Qualification Removal Engagement</td><td>For companies engaging Patron after a prior auditor qualification - cause analysis, remediation plan, AS 5 or Ind AS 8 prior-period correction route evaluation, interim verification 6 months before next year-end, drafting of target language for next year audit report referencing remediation.</td></tr>
<tr><td>AS 5 / Ind AS 8 Prior Period Correction Support</td><td>Where qualification was driven by misstatement requiring restatement of comparatives - correction items identification, restated comparatives preparation, working paper documentation and coordination with next year auditor for comparative restatement audit.</td></tr>
<tr><td>Section 134(3)(f) Board Report Explanation Drafting</td><td>Bundled within audit engagement - substantive Board Report explanation of every qualification, reservation, adverse remark or disclaimer made by the auditor. NFRA-review-grade content rather than boilerplate.</td></tr>
<tr><td>SA 705 Modified Opinion Drafting (Where Unavoidable)</td><td>Where qualification cannot be avoided despite remediation efforts, Patron drafts the Basis for Qualified Opinion paragraph following SA 705 illustrative formats - matter description, financial-statement-level effect with amounts, management response.</td></tr>
<tr><td>Going Concern Assessment under SA 570</td><td>12-month forward review from audit report date; cash flow projection; debt service coverage; covenant compliance; mitigating management plans. Avoids inadequate-disclosure qualifications under Trigger Category 4.</td></tr>
<tr><td>First-Year Audit Opening Balance Procedures under SA 510</td><td>Predecessor working file review where available; alternative procedures design where predecessor cooperation limited; SA 510 documented procedures to avoid insufficient-evidence qualifications under Trigger Category 2.</td></tr>
<tr><td>Lender and Investor Communication Support</td><td>Lender briefing pack alongside the audit report; investor mitigating-context briefing; M&amp;A pre-transaction qualification removal services to remove qualifications before deal announcement.</td></tr>


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
            <h2 class="section-title">Patron's 7-Step Qualification Prevention Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured CA-led prevention process beginning 6 months before year-end with the Pre-Audit Issue Identification review, continuing through mid-engagement remediation window with SA 260 TCWG communication, and concluding with sign-off and Year-over-Year removal planning.</p>
        </div>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Pre-Audit Issue Identification (6 Months Before YE)</h3>
        <p class="step-description">Six months before year-end (October for March year-end), Patron performs a focused 2-3 day review of qualification-trigger areas - inventory cut-off, revenue cut-off, related-party documentation, statutory dues compliance, cash receipt limits, IFC weakness, going concern indicators. Issues identified with full remediation window.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            6-month early window
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            High-risk triggers tested
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Full remediation runway
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="32" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/><text x="60" y="48" font-size="18" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">PAII</text><text x="60" y="66" font-size="11" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">-6 MO</text></svg>
            </div>
            <span class="illustration-label">PAII Review</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Mid-Engagement Triggering Event Flag</h3>
        <p class="step-description">During audit fieldwork, any potential qualification trigger is escalated immediately to engagement partner and TCWG - not held back for the audit closing memo. Examples - inventory cut-off error discovered during physical observation; related-party transaction missing from Ind AS 24 disclosure; bank covenant breach not reflected in Notes.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Immediate escalation
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Engagement partner loop
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Maximum remediation time
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="48" y="20" width="3" height="64" fill="#14365F"/><polygon points="51,20 96,20 86,38 96,56 51,56" fill="#F5A623" stroke="#E8712C" stroke-width="1.3"/><text x="73" y="42" font-size="9" fill="#fff" font-weight="800" text-anchor="middle" font-family="Arial">FLAG</text></svg>
            </div>
            <span class="illustration-label">Issue Flagged</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Remediation Window Evaluation (Pre-Draft)</h3>
        <p class="step-description">Before drafting the audit report, Patron evaluates whether identified issues can be remediated within the audit window - through corrective accounting entries, additional documentation procurement, release of scope limitation or enhanced disclosure. Each path is evaluated for SA 705 sufficiency.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Corrective accounting paths
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Documentation procurement
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SA 705 sufficiency check
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="22" width="80" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><rect x="30" y="32" width="20" height="14" rx="2" fill="#10B981"/><text x="40" y="42" font-size="8" fill="#fff" font-weight="800" text-anchor="middle" font-family="Arial">FIX</text><rect x="55" y="32" width="35" height="3" fill="#14365F" opacity="0.4"/><rect x="55" y="40" width="30" height="3" fill="#14365F" opacity="0.4"/><rect x="30" y="52" width="60" height="2" fill="#14365F" opacity="0.4"/><rect x="30" y="60" width="50" height="2" fill="#14365F" opacity="0.4"/><rect x="30" y="68" width="40" height="2" fill="#14365F" opacity="0.4"/></svg>
            </div>
            <span class="illustration-label">Fix Window</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Audit Committee Communication Under SA 260</h3>
        <p class="step-description">Where remediation is being considered, Patron communicates with Those Charged with Governance under SA 260 (Revised) - presenting the identified matter, remediation options, implications of not remediating (qualified opinion drafting) and implications of remediating (route to unmodified opinion). TCWG decision drives the remediation pathway.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SA 260 TCWG dialogue
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Options presented
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Decision-grade governance
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="40" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><circle cx="60" cy="32" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><circle cx="85" cy="40" r="9" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><rect x="20" y="58" width="80" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="60" y="73" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">SA 260 TCWG</text></svg>
            </div>
            <span class="illustration-label">SA 260</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Qualified Opinion Drafting Where Unavoidable</h3>
        <p class="step-description">Where qualification cannot be avoided despite remediation efforts, Patron drafts the Basis for Qualified Opinion paragraph following SA 705 illustrative formats - matter description, financial-statement-level effect with amounts, management response. Section 134(3)(f) Board Report explanation prepared in parallel.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SA 705 illustrative formats
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            "Except for" wording
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Sec 134(3)(f) parallel draft
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="14" width="84" height="76" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="10" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">EXCEPT FOR</text><rect x="28" y="42" width="64" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="50" width="56" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="58" width="60" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="66" width="48" height="2" fill="#14365F" opacity="0.4"/><rect x="28" y="74" width="40" height="2" fill="#14365F" opacity="0.4"/></svg>
            </div>
            <span class="illustration-label">"Except For" Draft</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Sign-Off Under Section 145 With UDIN</h3>
        <p class="step-description">Audit report (with or without qualification) signed by the appointed auditor under Section 145 with UDIN generated on ICAI portal. Date and place of signing stated; partner review under SA 220 documented; engagement quality control review performed for KAM-disclosing entities. Form AOC-4 filing follows within 30 days of AGM.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Section 145 sign-off
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            UDIN on ICAI portal
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SA 220 partner review
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12c-12 0-20 14-20 28v18l-8 8 8 4 4-2v8h32v-8l4 2 8-4-8-8V40c0-14-8-28-20-28z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="60" y="42" font-size="8" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">UDIN</text><text x="60" y="68" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 145</text></svg>
            </div>
            <span class="illustration-label">Sign-Off</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Year-Over-Year Qualification Removal Planning</h3>
        <p class="step-description">Where a qualification has been issued (Patron audit or predecessor auditor audit), Patron immediately starts the removal roadmap - cause analysis, remediation design, interim verification 6 months before next year-end, AS 5 / Ind AS 8 prior-period correction where applicable and drafting target language for next year clean opinion.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Removal roadmap at sign-off
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            AS 5 / Ind AS 8 route
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Target clean Y+1 opinion
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="22" width="80" height="56" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="60" y="40" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">Y+1</text><circle cx="40" cy="58" r="6" fill="#10B981"/><path d="M37 58l2 2 4-4" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/><text x="72" y="62" font-size="9" fill="#14365F" font-weight="700" font-family="Arial">CLEAN</text></svg>
            </div>
            <span class="illustration-label">Y+1 Clean</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Qualification Prevention Documentation Checklist</h2>
            <div class="content-text">
                
                
<p>Patron uses the following working papers and registers during the qualification-prevention engagement - shared with client at PAII onboarding and progressively built through the audit cycle:</p>

<ul>
    <li><strong>Pre-Audit Issue Identification Memo:</strong> Six-month-before-year-end review of qualification triggers; identified issues with remediation status, owner and target close date</li>
    <li><strong>Inventory Cut-Off Working Paper:</strong> Last-shipment-out and last-receipt-in records around 31 March; reconciliation with year-end physical count; cut-off entry sample testing</li>
    <li><strong>Revenue Cut-Off Working Paper:</strong> Performance obligation completion as at 31 March under Ind AS 115; invoice dates; cut-off entry review</li>
    <li><strong>Section 188 Related Party Schedule:</strong> All related-party transactions with each party; Section 188 approval status; Ind AS 24 / AS 18 disclosure preparation</li>
    <li><strong>Sec 269ST / Sec 269SS Compliance Tracker:</strong> Cash receipt log above Rs 2 lakh tested against Sec 269ST; cash loan / deposit log above Rs 20,000 tested against Sec 269SS; Sec 271DA / 271D exposure assessment</li>
    <li><strong>Statutory Dues Status:</strong> PF, ESI, TDS, GST, ROC filing dues at month-end and year-end; cross-reference to CARO 3(vii)(a) statutory dues default reporting</li>
    <li><strong>IFC Deficiency Tracker:</strong> Identified IFC deficiencies; Material Weakness classification; remediation plan with quarterly milestones</li>
    <li><strong>Going Concern Twelve-Month Forward Assessment:</strong> Cash flow projection from audit report date; debt service coverage; covenant compliance; mitigating management plans under SA 570</li>
    <li><strong>Subsequent Events Memo under SA 560:</strong> Events between balance sheet date and audit report date with qualification implications</li>
    <li><strong>Audit Committee Briefing Pack:</strong> Identified matters; remediation options; recommended TCWG decisions under SA 260</li>
    <li><strong>Section 134(3)(f) Draft Board Report Content:</strong> For any matter that may result in qualification - draft explanation language for Board approval</li>
    <li><strong>Year-Over-Year Remediation Roadmap:</strong> For prior qualifications - cause analysis, remediation plan, AS 5 / Ind AS 8 prior-period correction route if applicable</li>
</ul>

<p style="margin-top:16px;">Share your prior audit reports (last 3 years) and trial balance via WhatsApp at <a href="https://wa.me/919459456700">+91 945 945 6700</a> and Patron will revert with a PAII scoping note within 48 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Business Impact of Qualified Opinions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr>
    <td>Bank Lender Diligence and Loan Covenants</td>
    <td>Banks and non-bank lenders read every audit report during loan origination and at each annual review. Most loan covenants include "no qualified opinion" as a representation and warranty. A qualified opinion triggers additional diligence and covenant breach - requiring lender waiver, cure period or stricter pricing.</td>
    <td>Patron supports management in preparing the lender briefing pack alongside the audit report - qualification context, financial-statement-level effect, remediation plan, proposed waiver terms. Typical outcomes - 90 to 180 day cure period, pricing increase of 50 to 200 basis points, covenant relaxation tied to remediation milestone reporting.</td>
</tr>
<tr>
    <td>Equity Investor Confidence and Valuation</td>
    <td>Private equity, venture capital and strategic acquirers conduct intensive financial diligence on every transaction. A qualified opinion triggers additional commercial diligence cost (Rs 5 to 25 lakh additional advisory fees), valuation adjustments (5 to 15 percent typical discounts), escrow conditions on transaction close (5 to 15 percent of consideration) and in serious cases transaction failure.</td>
    <td>Patron provides pre-transaction audit remediation services to remove qualifications before deal announcement - cause analysis, AS 5 / Ind AS 8 prior-period correction route evaluation, structured remediation roadmap with milestone-based escrow proposals tied to specific remediation deliverables rather than blanket holdback.</td>
</tr>
<tr>
    <td>Listed Entity Stock Price</td>
    <td>Listed entities face immediate stock price reaction on qualified opinion disclosure. Victoria PLC (UK listed flooring) dropped 24.6 percent on a Hanover Flooring subsidiary qualification driven by management-imposed scope limitation. Indian listed entities face 5 to 15 percent typical reactions, larger on going concern modifications or scope limitations.</td>
    <td>Patron coordinates qualification disclosure with management, investor relations and stock exchange notification timing. SEBI LODR Regulation 30 24-hour notification handled; analyst conference call within 48 hours; CFO talking points for media; passive fund flow analysis - to mitigate the typical 5-15 percent reaction.</td>
</tr>
<tr>
    <td>Regulatory and NFRA Scrutiny</td>
    <td>NFRA reviews audit files of listed and prescribed-class entities; qualified opinions attract higher scrutiny. SEBI may issue queries to listed entities with qualifications. ROC may scrutinise the Section 134(3)(f) Board Report explanation. CARO 2020 Clause 3(xv) whistleblower and 3(xx) CSR may interact with the qualification basis.</td>
    <td>Audit working files for qualified opinion engagements are prepared with NFRA review standard from the outset - documentation depth on materiality assessment, remediation consideration under SA 260, TCWG decision-trail evidence, partner review under SA 220 (Quality Control).</td>
</tr>
<tr>
    <td>Director Personal Exposure and Officer-in-Default</td>
    <td>Section 134(5) Director Responsibility Statement requires directors to confirm adequate IFC. IFC Material Weakness driving Annexure B IFC qualification creates tension with Section 134(5)(e). Personal exposure under Section 147 - Rs 10,000 to Rs 1,00,000 officer-in-default penalty. Listed entities face additional SEBI exposure under LODR Regulation 33.</td>
    <td>Patron drafts Section 134(5) language carefully calibrated to the qualification year - acknowledging IFC observations factually, documenting remediation steps and quarterly milestones, ensuring the Director Responsibility Statement does not contradict the audit report. Joint review by audit partner and CS team.</td>
</tr>
<tr>
    <td>Auditor Re-Appointment and Section 140 Considerations</td>
    <td>While qualified opinions do not by themselves trigger Section 140 removal, management may consider auditor change at next AGM. Section 140 has specific procedural requirements - Central Government approval for removal during term, special resolution at AGM, predecessor right to file Section 140(2) statement of reasons. CARO 2020 Clause 3(xviii) reporting by incoming auditor.</td>
    <td>Patron auditor-transition policy provides complete predecessor cooperation including Section 140(2) statement honesty and full handover of working files. Where Patron is the incoming auditor, SA 510 Initial Engagement procedures on opening balances with maximum predecessor cooperation under ICAI inter-firm guidance.</td>
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
            <h2 class="section-title">Patron Qualification Prevention and Removal Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td><strong>Statutory Audit + Qualification Prevention</strong></td><td>Pvt Ltd under Rs 50 cr revenue, bundled engagement with PAII 6 months before year-end - <strong>Rs 1,75,000 to Rs 4,00,000</strong> | Timeline: 5 to 6 weeks</td></tr>
<tr><td>Mid-Size Pvt Ltd (Rs 50 to 100 cr revenue)</td><td>Statutory audit + qualification prevention - <strong>Rs 4,50,000 to Rs 9,00,000</strong> | Timeline: 6 to 7 weeks</td></tr>
<tr><td>Pre-Audit Issue Identification (PAII Standalone Advisory)</td><td>2-3 day focused review of qualification triggers - <strong>Rs 1,00,000 to Rs 3,50,000</strong> | Timeline: 2 to 3 weeks</td></tr>
<tr><td>Year-Over-Year Qualification Removal Engagement</td><td>Advisory for companies engaging Patron after a prior auditor qualification - <strong>Rs 2,00,000 to Rs 7,50,000</strong> | Timeline: 3 to 5 weeks</td></tr>
<tr><td>AS 5 / Ind AS 8 Prior Period Correction Support</td><td>Restatement of comparatives in next year financial statements - <strong>Rs 1,50,000 to Rs 5,00,000</strong> | Timeline: 3 to 4 weeks</td></tr>
<tr><td>Section 134(3)(f) Board Report Explanation Drafting</td><td>Substantive explanation following 4-element standard - <strong>Bundled with audit engagement</strong> | Timeline: Within audit window</td></tr>
<tr><td>Lender / Investor Communication Support</td><td>Lender briefing pack alongside audit report; investor mitigating-context briefing - <strong>From Rs 1,00,000</strong> | Timeline: 1 to 2 weeks</td></tr>
<tr><td>Listed Entity / NFRA-Monitored Engagement Premium</td><td>SEBI LODR coordination, NFRA-review-grade documentation, KAM under SA 701 - 15 to 25 percent premium on base audit fee</td></tr>
<tr><td>One-Time Setup</td><td>Included in the engagement - no separate setup charge</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Qualified vs Unqualified Audit Opinion consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20Patron%20consultation%20on%20qualified%20vs%20unqualified%20audit%20opinions." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline - Qualification Prevention Across the Audit Cycle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>6 months before year-end (October for March YE)</td><td>Pre-Audit Issue Identification (PAII) review; high-risk qualification triggers tested; remediation window scoping</td></tr>
<tr><td>3 months before year-end (January for March YE)</td><td>Interim audit; mid-year qualification-trigger update; management remediation status review</td></tr>
<tr><td>Year-end close (April)</td><td>Year-end balance verification; cut-off testing; subsequent events review; final qualification-trigger assessment</td></tr>
<tr><td>Audit fieldwork (April-May, Weeks 2 to 5)</td><td>Substantive testing; CARO and IFC testing; KAM identification for listed; going concern assessment under SA 570</td></tr>
<tr><td>Audit Committee / Board pre-sign-off briefing (Week 6)</td><td>SA 260 communication; remediation options presentation; TCWG decision on qualification triggers</td></tr>
<tr><td>Audit report drafting (Week 7)</td><td>Unmodified OR qualified opinion drafting based on remediation outcome; Section 134(3)(f) Board Report content</td></tr>
<tr><td>Sign-off and UDIN (Week 8)</td><td>Section 145 sign-off; UDIN generation; Form AOC-4 within 30 days of AGM under Section 137</td></tr>
<tr><td>Year-over-year qualification removal planning (concurrent with sign-off)</td><td>If qualification issued - removal roadmap immediately initiated for next audit cycle with AS 5 / Ind AS 8 evaluation</td></tr>
<tr><td><strong>Total Engagement (Tier 1)</strong></td><td><strong>~8 weeks from PAII onboarding to signed report</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
<p><strong>Year-Over-Year Removal Roadmap (where prior qualification exists):</strong></p>
<ul>
    <li>Day 0 (prior audit sign-off) - cause analysis memo; root cause identification of qualification trigger</li>
    <li>Months 1-2 - remediation plan design; accounting / process / disclosure changes; timeline</li>
    <li>Month 2-3 - AS 5 / Ind AS 8 prior period correction evaluation</li>
    <li>Months 3-8 - remediation implementation; corrective accounting; process changes; documentation procurement</li>
    <li>6 months before next year-end - Patron PAII review tests remediation effectiveness</li>
    <li>1 month before next year-end - pre-audit cleanup</li>
    <li>Next year audit - clean opinion drafting; comparative restatement audited if AS 5 / Ind AS 8 route taken</li>
</ul>


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
            <h2 class="section-title">8 Benefits of Patron's Qualification-Prevention Audit</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">6-Month Early Window</h3>
        <p class="feature-desc">PAII review six months before year-end identifies high-risk qualification triggers with full remediation runway - vastly more time than the typical fieldwork-discovery window.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3 class="feature-title">Clean SA 700 Unmodified Opinion</h3>
        <p class="feature-desc">Target outcome of the qualification-prevention engagement - clean SA 700 unmodified opinion in the current cycle, supporting lender renewals, investor diligence and pre-IPO transition.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
        <h3 class="feature-title">SA 260 TCWG Governance</h3>
        <p class="feature-desc">Mid-engagement SA 260 communication with Audit Committee or Board presents identified matters, remediation options and implications - TCWG decision drives the remediation pathway with full governance trail.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
        <h3 class="feature-title">Substantive Sec 134(3)(f) Drafting</h3>
        <p class="feature-desc">Where qualification is unavoidable, Patron drafts the Section 134(3)(f) Board Report substantive explanation using the 4-element standard - NFRA-review-grade content rather than boilerplate.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
        <h3 class="feature-title">Year-Over-Year Removal Roadmap</h3>
        <p class="feature-desc">For prior qualifications - cause analysis, remediation plan, AS 5 / Ind AS 8 prior period correction evaluation, interim verification 6 months before next year-end - targeting clean opinion in 1 to 3 cycles.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3 class="feature-title">Diligence-Ready Workpapers</h3>
        <p class="feature-desc">SA 230 workpaper archive retained for the regulatory minimum 8 years - prepared with NFRA review standard from the outset; ready for ICAI quality review and M&amp;A diligence on demand.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
        <h3 class="feature-title">Lender + Investor Communication</h3>
        <p class="feature-desc">Lender briefing pack alongside audit report; investor mitigating-context briefing; pre-transaction audit remediation services to remove qualifications before deal announcement.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Four-Office National Coverage</h3>
        <p class="feature-desc">Patron offices in Pune, Mumbai, Delhi and Gurugram with travel coverage for inventory observation, factory verification and listed-entity / NFRA-monitored entity engagements across India.</p>
    </article>
</div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Social Proof and Trust Signals</h2>
            <div class="content-text">
                
                
<p style="font-size:18px;font-weight:600;color:var(--blue);margin-bottom:12px;">10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 500+ Statutory Audits Completed &nbsp;|&nbsp; 15+ Years Experience</p>

<p>Trusted by CFOs, audit committees, founders and Board chairs across SaaS, D2C, manufacturing, healthcare, NBFC, listed entities, family-business groups and pre-IPO transitions. Patron qualification-prevention teams operate from offices in Pune, Mumbai, Delhi and Gurugram with national coverage for PAII review onboarding within 7 days of enquiry.</p>

<p><strong>Why CFOs and founders choose Patron:</strong> Qualification prevention requires year-round process rather than year-end exercise. Big-Four firms typically begin fieldwork close to year-end, which leaves limited remediation window for qualification triggers identified mid-engagement. For Pvt Ltd companies preparing for investor diligence, lender renewals or pre-IPO transitions where clean unmodified opinions are essential, a senior partner-led mid-tier firm with structured PAII methodology delivers superior qualification prevention at lower fees than Big-Four.</p>

<p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves qualification-prevention engagements across India - both in-person and remotely.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Big-Four vs Patron - Qualification Prevention</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Dimension</th><th>In-House Self-Audit</th><th>Big-Four Audit Firm</th><th>Patron Structured Prevention</th></tr></thead>
                    <tbody>
                        
<tr><td>Statutory Eligibility (Sec 141)</td><td>Not permitted - Section 141 disqualification</td><td>Permitted</td><td><span class="badge-included">Permitted</span> Independent CA firm</td></tr>
<tr><td>Pre-Audit Issue Identification (PAII) 6 Months Before YE</td><td>N/A</td><td>Limited; typically fieldwork-window only</td><td><span class="badge-included">Standard</span> 2-3 day focused review</td></tr>
<tr><td>Mid-Engagement Remediation Window</td><td>N/A</td><td>Compressed; close-to-year-end fieldwork</td><td><span class="badge-included">Standard</span> SA 260 TCWG flag with full window</td></tr>
<tr><td>SA 260 Audit Committee Communication</td><td>N/A</td><td>Generally only at closing memo</td><td><span class="badge-included">Standard</span> Mid-engagement plus closing</td></tr>
<tr><td>Section 134(3)(f) Substantive Drafting</td><td>Internal compliance team</td><td>Limited (auditor scope)</td><td><span class="badge-included">Included</span> 4-element substantive standard</td></tr>
<tr><td>Year-Over-Year Removal Engagement</td><td>N/A</td><td>Engagement-specific</td><td><span class="badge-included">Standard</span> Roadmap with AS 5 / Ind AS 8</td></tr>
<tr><td>Lender / Investor Communication Support</td><td>N/A</td><td>Limited</td><td><span class="badge-included">Bundled</span> with engagement</td></tr>
<tr><td>Senior CA Partner Review</td><td>N/A</td><td>Standard but partner availability varies</td><td><span class="badge-included">Standard</span> Senior partner on every engagement</td></tr>
<tr><td>Cost for Mid-Size Pvt Ltd (Rs 100 cr)</td><td>Apparent zero - unsignable</td><td>Rs 12 to 25 lakh</td><td>Rs 4.5 to 9 lakh</td></tr>


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
            <h2 class="section-title">Related Patron Services for Audit Cluster</h2>
            <div class="content-text">
                
                
<p>Qualified vs unqualified audit opinion framework connects to several Patron service lines across the audit cluster - all delivered by the same CA and CS team for a single point of accountability.</p>
<ul>
    <li><strong><a href="/statutory-audit">Statutory Audit (Parent Hub)</a>:</strong> National statutory audit topical authority hub - methodology, applicability matrix across all entity types and Patron-vs-commodity comparison.</li>
    <li><strong><a href="/qualified-audit-opinion-handling-guide">Qualified Audit Opinion Handling Guide (Sister Page)</a>:</strong> CFO post-receipt operational playbook - 7-day immediate response, 5-stakeholder communication, Section 134(3)(f) drafting, AOC-4 filing and AGM coordination after a qualified opinion is received.</li>
    <li><strong><a href="/statutory-audit-private-limited-company">Pvt Ltd Statutory Audit</a>:</strong> Pvt Ltd entity-specific spoke covering CARO 2020 four-criteria exemption, Section 143(3)(i) IFC under G.S.R. 583(E), Section 139(2) rotation under Rule 5.</li>
    <li><strong><a href="/appointment-of-auditor">Appointment of Auditor</a>:</strong> ADT-1 filing service for first and subsequent auditor appointments under Sections 139(6) and 139(1).</li>
    <li><strong><a href="/change-of-auditor">Change of Auditor</a>:</strong> Section 140 procedural compliance where qualification disagreement triggers auditor change; Section 140(2) statement of reasons; CARO 2020 Clause 3(xviii) reporting.</li>
    <li><strong><a href="/private-limited-company-compliance">Private Limited Company Compliance</a>:</strong> Annual retainer covering MGT-7 / MGT-7A, AOC-4 with qualified report attachment, audit coordination and ongoing ROC obligations.</li>
    <li><strong><a href="/tax-audit">Tax Audit</a>:</strong> Section 44AB tax audit - tax audit reports follow the same SA 705 wording framework; parallel engagement where statutory audit qualification has tax adjustment implications.</li>
    <li><strong><a href="/internal-audit">Internal Audit</a>:</strong> Section 138 preventative internal audit findings reduce qualification risk; ESOP impact and key-talent retention assessment as part of employee-stakeholder communication.</li>
    <li><strong><a href="/gst-audit">GST Audit</a>:</strong> Section 35(5) CGST audit and Form 9C reconciliation - GST adjustment items can trigger statutory audit qualifications.</li>
    <li><strong><a href="/roc-notice">ROC Notice Response</a>:</strong> Defence and reply support for MCA / ROC adjudication on AOC-4 filings with qualified reports.</li>
    <li><strong><a href="/secretarial-audit">Secretarial Audit</a>:</strong> Section 204 secretarial audit for prescribed companies; parallel audit cluster engagement.</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework Governing Qualified vs Unqualified Opinions</h2>
            <div class="content-text">
                
                
<p><strong>SA 700 (Revised) - Unmodified Opinion (<a href="https://www.icai.org" target="_blank" rel="noopener">ICAI Portal</a>):</strong> Forming an Opinion and Reporting on Financial Statements - effective for audits of financial statements for periods beginning on or after 1 April 2018; the framework for clean opinions.</p>

<p><strong>SA 705 (Revised) - Modifications:</strong> Modifications to the Opinion in the Independent Auditor's Report - effective 1 April 2018. Three modified opinion types - Qualified, Adverse, Disclaimer. Material vs pervasive decision matrix. "Except for" wording for qualified opinions. <strong>Prohibited phrases</strong> - "subject to" and "with the foregoing explanation" are NOT clear or forceful enough.</p>

<p><strong>SA 706 (Revised) - Emphasis of Matter:</strong> Emphasis of Matter and Other Matter Paragraphs - do NOT modify opinion; complementary to qualification analysis.</p>

<p><strong>SA 570 (Revised) - Going Concern:</strong> Material Uncertainty Related to Going Concern - separate section where applicable; minimum 12-month forward review from audit report date; common qualification trigger when disclosure inadequate.</p>

<p><strong>SA 260 (Revised) - Communication with TCWG:</strong> Auditor pre-sign-off communication with Those Charged with Governance - the remediation window mechanism.</p>

<p><strong>SA 450 - Evaluation of Misstatements:</strong> Aggregation of identified misstatements; evaluation against materiality threshold. <strong>SA 320 - Materiality:</strong> Materiality threshold setting; performance materiality; clearly trivial threshold. <strong>SA 510 - Initial Engagements:</strong> Opening balances - frequent qualification source for first-year audits where predecessor working files unavailable.</p>

<p><strong>SA 550 - Related Parties:</strong> Related-party identification and disclosure - frequent Pvt Ltd qualification source. <strong>SA 540 - Estimates:</strong> Accounting estimates evaluation - departure from estimate methodology can trigger qualification.</p>

<p><strong>Section 143, Companies Act 2013 (<a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a>):</strong> Auditor report contents - the statutory anchor for qualifications. <strong>Section 143(3)(b)</strong> - auditor report to state whether financial statements comply with applicable accounting standards. <strong>Section 145</strong> - auditor to sign audit reports under UDIN. <strong>Section 134(3)(f)</strong> - Board Report MUST contain explanations or comments on every qualification - MANDATORY disclosure. <strong>Section 134(5)</strong> - Director Responsibility Statement. <strong>Section 147</strong> - penalty Rs 25,000 to Rs 5,00,000 (Rs 1 lakh to Rs 25 lakh fraudulent); officer in default Rs 10,000 to Rs 1,00,000. <strong>Section 141</strong> - auditor disqualification.</p>

<p><strong>Section 140 - Removal, Resignation:</strong> Section 140(2) statement of outgoing auditor - relevant when qualification disagreement triggers auditor change.</p>

<p><strong>CARO 2020 Clause 3(xviii) (<a href="https://www.nfra.gov.in" target="_blank" rel="noopener">NFRA Portal</a>):</strong> Auditor reporting on resignation of statutory auditors during the year - including whether the auditor has taken into consideration issues, objections or concerns raised by outgoing auditors. NFRA monitors listed-entity audit files with qualifications.</p>

<p><strong>Income Tax Act 1961:</strong> Section 269ST - cash receipt above Rs 2 lakh penalty under Section 271DA; Section 269SS - cash loan / deposit above Rs 20,000 penalty under Section 271D; Section 40A(3) - cash payment limits.</p>

<p><strong>AS 5 / Ind AS 8:</strong> Prior period correction route for qualification remediation - comparatives restated in next year financial statements where prior period correction route taken.</p>

<p><strong>RBI Master Direction on Loan Classification:</strong> Lender covenant context where qualified opinion triggers covenant breach.</p>

<p style="margin-top:20px;"><strong>Penalty Snapshot</strong></p>
<ul>
    <li>Section 147 - auditor default Rs 25,000 to Rs 5,00,000; fraudulent Rs 1 lakh to Rs 25 lakh; officer in default Rs 10,000 to Rs 1,00,000</li>
    <li>Section 141 - auditor disqualification on independence breach</li>
    <li>Income Tax Section 271DA - Sec 269ST cash receipt breach penalty up to amount received</li>
    <li>Income Tax Section 271D - Sec 269SS cash loan / deposit breach penalty up to amount of loan</li>
    <li>SEBI LODR Regulation 30 non-compliance - SEBI adjudication and stock exchange disciplinary action (listed entities)</li>
    <li>NFRA inspection findings - independent penalty framework on auditor in egregious cases</li>
</ul>


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
                    <h2 class="faq-expanded__title">Qualified vs Unqualified Audit Opinion FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on the boundary between qualified and unqualified opinions under SA 705 and SA 700, the four qualification triggers, business impact on lenders and investors, 1-to-3-cycle removal roadmap and Patron's qualification-prevention methodology - answered by the Patron CA team.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Qualified vs Unqualified Audit Opinion FAQs'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the difference between qualified and unqualified audit opinion?</h3>
                        <div class="faq-expanded__a"><p>An unqualified opinion (technically Unmodified Opinion under SA 700) is the clean audit report - the auditor concludes that the financial statements give a true and fair view in accordance with the applicable financial reporting framework (AS or Ind AS) without qualification. A qualified opinion under SA 705 is issued when the auditor concludes that the financial statements give a true and fair view EXCEPT FOR a specific matter that is material but NOT pervasive. The &quot;except for&quot; wording is the distinguishing feature; SA 705 prohibits softer phrases like &quot;subject to&quot; which the standard considers not clear or forceful enough.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">When is a qualified opinion issued?</h3>
                        <div class="faq-expanded__a"><p>A qualified opinion is issued under SA 705 when the auditor concludes that either (a) financial statements are materially misstated but the misstatement is NOT pervasive (auditor has sufficient appropriate audit evidence), OR (b) the auditor is unable to obtain sufficient appropriate audit evidence on a matter that is material but NOT pervasive. The four trigger categories are departure from accounting standards (AS or Ind AS); insufficient audit evidence on a specific material matter; scope limitation imposed by management or circumstances; significant uncertainty including going concern where disclosure is inadequate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the meaning of "except for" in an audit report?</h3>
                        <div class="faq-expanded__a"><p>The phrase &quot;except for&quot; is the prescribed SA 705 wording for qualified opinions - &quot;In our opinion, except for the effects of the matter described in the Basis for Qualified Opinion section, the financial statements give a true and fair view&quot;. The phrase indicates that the financial statements are largely fair, but the auditor has identified a specific matter that the user should consider before relying on the financial statements as a whole. SA 705 prohibits softer phrases like &quot;subject to&quot; or &quot;with the foregoing explanation&quot; as not clear or forceful enough.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How does a qualified opinion affect bank loans and credit lines?</h3>
                        <div class="faq-expanded__a"><p>Banks and non-bank lenders read every audit report during loan origination and at annual review. A qualified opinion triggers additional diligence - lenders typically require management to explain the cause, provide remediation roadmap and possibly engage forensic specialists. Many loan covenants include &quot;no qualified opinion&quot; as a representation; a qualified opinion can trigger covenant breach requiring lender waiver or cure. Worse outcomes include accelerated repayment demands and stricter pricing on subsequent renewals (typically 50 to 200 basis point spread increases). New lender relationships may face lower facility approval or rejection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does a qualified opinion affect investor confidence and valuation?</h3>
                        <div class="faq-expanded__a"><p>Private equity, venture capital and strategic acquirers conduct intensive financial diligence on every transaction. A qualified opinion in target audit reports triggers additional commercial diligence cost (typically Rs 5 to 25 lakh additional advisory fees), valuation adjustments (PE houses commonly apply 5 to 15 percent valuation discounts for unresolved qualifications), escrow conditions on transaction close (typically 5 to 15 percent of consideration held until qualification is removed in subsequent audit) and in serious cases transaction failure. Listed entities face immediate 5 to 15 percent stock price reactions typically.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does it take to remove an audit qualification?</h3>
                        <div class="faq-expanded__a"><p>Removal typically takes one to three audit cycles depending on the cause. Departure from accounting standards (Trigger 1) can usually be removed in the next audit through corrective accounting and AS 5 or Ind AS 8 prior-period correction. Insufficient audit evidence (Trigger 2) usually resolves in the next audit cycle once predecessor cooperation or alternative procedures provide evidence. Scope limitation (Trigger 3) removes once management releases the limitation. Significant uncertainty (Trigger 4) including going concern is timeline-dependent on business turnaround and may take 1 to 3 cycles.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the most common reasons for qualified opinions in India?</h3>
                        <div class="faq-expanded__a"><p>In unlisted Pvt Ltd audits the most common qualification triggers are inventory cut-off failures around 31 March; related-party transaction non-disclosure under Section 188 and Ind AS 24; Section 269ST cash receipts above Rs 2 lakh and Section 269SS cash loans / deposits above Rs 20,000 (triggering statutory dues default reporting under CARO 3(vii)); Material Weakness in Internal Financial Controls under Section 143(3)(i); going concern uncertainty under SA 570 with inadequate disclosure; first-year audit opening balance issues under SA 510 where predecessor cooperation is limited; Schedule III non-compliance with the 2021 amendment disclosures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How can companies prevent qualified opinions?</h3>
                        <div class="faq-expanded__a"><p>Prevention requires year-round process rather than year-end exercise. Patron seven-step approach - (1) Pre-Audit Issue Identification (PAII) review 6 months before year-end testing high-risk qualification triggers; (2) Mid-engagement triggering event flag - any potential trigger escalated immediately to engagement partner and TCWG under SA 260; (3) Remediation window evaluation before audit report drafting; (4) Audit Committee communication on identified matters and options; (5) Qualified opinion drafting only where remediation impossible; (6) Sign-off with UDIN under Section 145; (7) Year-over-year removal planning where issued.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Q: Qualified opinion ka matlab kya hai?</strong><br>Audit report jisme &quot;except for&quot; wording use hoti hai - financial statements true and fair view dete hain except for specific matter jo material hai par pervasive nahi. SA 705 ke under issue hota hai.</p>
<p><strong>Q: Qualified opinion kab issue hota hai?</strong><br>Char triggers - AS / Ind AS departure, insufficient audit evidence, scope limitation, significant uncertainty (going concern bhi). Sab cases mein matter material hona chahiye par pervasive nahi.</p>
<p><strong>Q: "Except for" kya hota hai audit report mein?</strong><br>SA 705 ka prescribed phrase qualified opinion ke liye. &quot;Subject to&quot; aur &quot;with the foregoing explanation&quot; prohibited hain. &quot;Except for&quot; is clear and forceful enough.</p>
<p><strong>Q: Bank loan pe kya impact hota hai?</strong><br>Additional diligence, possible covenant breach, stricter pricing (50-200 bps spread increase), worst case accelerated repayment. Loan covenants mein &quot;no qualified opinion&quot; representation common hai.</p>
<p><strong>Q: Investor confidence pe kya asar padta hai?</strong><br>Additional diligence cost, valuation discount (typically 5-15%), escrow conditions, possible deal failure. Listed entities ke liye Victoria PLC 24.6% gira tha Hanover Flooring qualification pe.</p>
<p><strong>Q: Audit qualification kaise hatayein?</strong><br>Typical 1-3 audit cycles. Cause analysis, remediation plan, AS 5 / Ind AS 8 prior-period correction agar applicable, implementation, interim verification 6 months before next year-end, next year clean opinion. Patron 7-step process follow karta hai.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Prevention Is Far Cheaper Than Removal</h2>
            <div class="content-text">
                
                
<p>Qualified opinions are technically a milder modification than adverse opinions or disclaimers, but the business impact is disproportionate. Lender covenant triggers, equity investor valuation discounts (5 to 15 percent), escrow conditions on M&amp;A transaction close (5 to 15 percent of consideration), listed-entity stock price reactions (Victoria PLC dropped 24.6 percent on a single Hanover Flooring qualification), NFRA regulatory scrutiny and Section 147 penalty all flow from a qualified opinion. The Section 134(3)(f) Board Report explanation is mandatory and substantive - boilerplate &quot;matter has been noted&quot; explanations attract scrutiny in NFRA inspections.</p>

<p style="margin-top:16px;">Prevention is far cheaper than removal - Patron Pre-Audit Issue Identification review (Rs 1 lakh to Rs 3.5 lakh) six months before year-end identifies trigger areas with full remediation window; the same issues identified during fieldwork may be impossible to remediate. For Pvt Ltd companies preparing for institutional investment, lender renewals or pre-IPO transition, qualified opinions are the single largest preventable obstacle in the financial reporting cycle.</p>

<p style="margin-top:16px;"><strong>Action now:</strong> book a Patron PAII review 6 months before your year-end - October for March year-end, December for September year-end. Call <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700">WhatsApp us</a>.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Audit the Qualification-Prevention Way</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#fff;">The boundary between a qualified opinion and an unqualified (unmodified) opinion is one of the most consequential thresholds in Indian audit reporting. A qualified opinion under SA 705 uses &quot;except for&quot; language to signal that the financial statements give a true and fair view EXCEPT FOR a specific matter that is material but not pervasive; an unmodified opinion under SA 700 is the clean baseline. The four trigger categories - departure from accounting standards, insufficient audit evidence, scope limitation and significant uncertainty including going concern - cover the full landscape of qualification causes.</p>
<p style="color:#fff;margin-top:12px;">The business impact is severe and disproportionate to the technical mildness - lender covenant triggers, investor valuation discounts, M&amp;A escrow conditions, listed-entity stock price reactions (Victoria PLC 24.6 percent benchmark), NFRA regulatory scrutiny and mandatory Section 134(3)(f) Board Report explanation. Prevention is far cheaper than remediation - Patron seven-step qualification prevention process begins six months before year-end with the Pre-Audit Issue Identification review, continues through mid-engagement remediation window under SA 260, and concludes with audit report drafting that captures all remediation work performed.</p>
<p style="color:#fff;margin-top:12px;">Where a qualification has already been issued (by Patron or predecessor auditor), the Year-Over-Year removal roadmap with AS 5 / Ind AS 8 prior-period correction where applicable typically achieves clean unmodified opinion within one to three audit cycles. This page sits alongside the sister CFO handling guide at /qualified-audit-opinion-handling-guide (operational post-receipt response) and the broader audit cluster - statutory audit, Pvt Ltd statutory audit, appointment of auditor, change of auditor, tax audit, internal audit, GST audit and ROC notice response.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20Patron%20consultation%20on%20qualified%20vs%20unqualified%20audit%20opinions." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Qualified%20vs%20Unqualified%20Audit%20Opinion&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Patron%27s%20qualification-prevention%20statutory%20audit%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Explore Related Audit and Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end Patron support for the audit cluster - same CA pod, single engagement letter across statutory audit, qualification prevention, opinion handling and audit-related ROC compliance.</p>
          
            
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Adjacent compliance workflows for Pvt Ltd entities, listed entities, NBFCs, family-business groups and pre-IPO transitions.</div>
    <div class="pa-cross-grid">
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">National Hub</div></div></a>
        <a href="/qualified-audit-opinion-handling-guide" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><div><div class="pa-card-title">Qualified Opinion Handling</div><div class="pa-card-sub">India - Sister Page</div></div></a>
        <a href="/statutory-audit-private-limited-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">Pvt Ltd Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/appointment-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="pa-card-title">Appointment of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a>
        <a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/internal-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">Internal Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 3 months by the Patron CA &amp; CS team to capture ICAI Standards on Auditing amendments, SA 705 / SA 700 illustrative format updates, NFRA inspection observations on Section 134(3)(f) Board Report explanations, AS 5 / Ind AS 8 prior period correction guidance and Companies Act 2013 amendment cycles.</p>
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