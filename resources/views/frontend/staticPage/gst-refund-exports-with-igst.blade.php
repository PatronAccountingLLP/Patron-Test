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
    <title>GST Refund on Exports With IGST Payment — Rule 96 CGST</title>
    <meta name="description" content="Claim IGST refund on exports under Rule 96. Shipping bill = application. ICEGATE auto-refund in 7-15 days. SB005 SB003 EGM fixes. From Rs 8,000.">
    <link rel="canonical" href="/gst-refund-exports-with-igst">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund on Exports With IGST Payment — Rule 96 CGST">
    <meta property="og:description" content="Claim IGST refund on exports under Rule 96. Shipping bill = application. ICEGATE auto-refund in 7-15 days. SB005 SB003 EGM fixes. From Rs 8,000.">
    <meta property="og:url" content="/gst-refund-exports-with-igst/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-exports-with-igst-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund on Exports With IGST Payment — Rule 96 CGST">
    <meta name="twitter:description" content="Claim IGST refund on exports under Rule 96. Shipping bill = application. ICEGATE auto-refund in 7-15 days. SB005 SB003 EGM fixes. From Rs 8,000.">
    <meta name="twitter:image" content="/images/gst-refund-exports-with-igst-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-exports-with-igst/#breadcrumb",
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
          "name": "GST Refund",
          "item": "/gst-refund/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Exports With IGST",
          "item": "/gst-refund-exports-with-igst/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-exports-with-igst/#faq",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is GST refund under Rule 96 for exports with IGST payment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 96 of the CGST Rules 2017 provides for automatic refund of IGST paid on goods exported out of India. The shipping bill electronically filed on ICEGATE is deemed to be the refund application under Rule 96(1). The application is deemed filed only when (a) the carrier files the Export General Manifest under Section 41 of the Customs Act 1962 and (b) the exporter furnishes a valid GSTR-3B with the IGST amount in Table 3.1(b). Refund is auto-credited to the registered bank account via PFMS in 7 to 15 days."
          }
        },
        {
          "@type": "Question",
          "name": "How does the shipping bill function as a refund application?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Rule 96(1) of the CGST Rules 2017, the shipping bill is treated as the refund application. ICES (Indian Customs EDI System) runs an automated invoice-level match against the GSTR-1 Table 6A data transmitted by GSTN once both GSTR-1 and GSTR-3B are filed. A successful match yields response code SB000 and triggers PFMS disbursement. No separate Form RFD-01 is required for goods exports under this route."
          }
        },
        {
          "@type": "Question",
          "name": "What is the role of EGM and ICEGATE in IGST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EGM (Export General Manifest) is filed by the carrier (shipping line, airline) under Section 41 of the Customs Act 1962 confirming goods have left India. Without a valid EGM, the shipping bill cannot be deemed the refund application under Rule 96(1)(b), and SB002 or SB006 error codes appear. ICEGATE (https://www.icegate.gov.in) is the customs portal where shipping bills are filed and refund status is tracked in the IGST Integration Status Report under NewMIS role."
          }
        },
        {
          "@type": "Question",
          "name": "What are the ICEGATE error codes SB001 to SB006 and how to fix them?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "SB000 means successfully validated. SB001 means SB number, date, or port code mismatch (fix via Form 9A amendment). SB002 means EGM not filed (follow up with shipping line). SB003 means GSTIN mismatch (fix via Form 9A). SB004 means duplicate transmission already validated (no action). SB005 means invalid invoice number (fix via Form 9A or officer interface under Customs Circular 5/2018). SB006 means gateway EGM not available for ICD shipments (file Train/Truck Summary)."
          }
        },
        {
          "@type": "Question",
          "name": "When can an exporter NOT use the IGST-paid route under Rule 96(10)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 96(10) of the CGST Rules 2017 bars the IGST-paid route if the exporter has availed CGST/SGST/IGST drawback (only Basic Customs Duty drawback is compatible), procured inputs at the concessional 0.1 percent rate under Notification 40/2017-CT (Rate) or 41/2017-IT (Rate), or imported inputs under Advance Authorisation or EPCG. Such exporters must use the LUT route under Rule 89 instead."
          }
        },
        {
          "@type": "Question",
          "name": "How long does ICEGATE take to credit IGST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Typically 7 to 15 days from the later of EGM filing or GSTR-3B filing. The pipeline is GSTN to ICES data transmission (within 2 days of GSTR-3B), ICES validation (within 5 days), PFMS scroll generation, gateway port officer approval, final scroll, and bank credit. SB000 success status can be tracked on ICEGATE login under IGST Integration Status Report. Any SB error code blocks the refund until rectified."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Rule 96 and Rule 89 export refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 96 is the IGST-paid auto-refund route - shipping bill is deemed the refund application; refund of tax paid; 7 to 15 days; no separate RFD-01 for goods. Rule 89 is the LUT route - export without IGST payment; refund of accumulated ITC via manual RFD-01; 30 to 60 days; full documentation including BRC for services. Rule 96(10) bars IGST route for exporters who availed drawback, Advance Authorisation, EPCG, or concessional 0.1 percent. Rule 89 is open to all except prosecuted exporters."
          }
        },
        {
          "@type": "Question",
          "name": "How do I rectify SB005 invoice mismatch error?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If SB005 is due to a typo in GSTR-1, amend GSTR-1 via Table 9A (Form 9A) with correct invoice details in the next filing cycle. If SB005 is because the exporter used a separate invoice number in the shipping bill versus GSTR-1 (two-invoice scenario), Form 9A amendment is not possible after EGM is filed. The exporter must escalate to the officer interface module in ICES under Customs Circular 5/2018 dated 23.02.2018 read with Circular 8/2018 dated 23.03.2018 and Circular 5/2021 dated 17.02.2021. The gateway port customs officer manually validates and sanctions refund."
          }
        },
        {
          "@type": "Question",
          "name": "IGST refund kaise track kare ICEGATE par?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ICEGATE par login karke IGST Integration Status Report dekhe NewMIS role me. Hare shipping bill ke samne SB000 to SB006 ke beech response code aata hai. SB000 matlab refund process ho raha hai - 7 se 15 din me PFMS ke through bank account me credit ho jayega. SB001 to SB006 koi error hai jise fix karna padega - typically GSTR-1 me Table 9A amendment se ya shipping line se EGM filing follow up se. SB005 sabse common error hai - invoice number mismatch."
          }
        },
        {
          "@type": "Question",
          "name": "What if my IGST refund is rejected or stuck for over 60 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If refund is delayed beyond 60 days from the deemed filing date (later of EGM and GSTR-3B), interest at 6 percent per annum accrues under Section 56 of the CGST Act 2017. The first remedy is escalation to the gateway port Pr. Commissioner or Commissioner of Customs with supporting reconciliation. If still not resolved, an appeal lies under Section 107 of the CGST Act 2017 to the Appellate Authority within 3 months with 10 percent pre-deposit. Patron handles the entire chain."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-exports-with-igst/#service",
      "name": "GST Refund - Exports With IGST Payment (Rule 96 of CGST Rules 2017)",
      "description": "Patron Accounting LLP recovers IGST refund on goods exports under Rule 96 of CGST Rules 2017 and Section 16 of IGST Act 2017. Services include pre-export Rule 96(10) eligibility audit, GSTR-1 Table 6A and GSTR-3B Table 3.1(b) reconciliation, ICEGATE SB000-SB006/SB104/SB009 error rectification via Form 9A or officer interface under Customs Circular 5/2018, 8/2018, and 5/2021, EGM gateway port follow-up, PFMS bank validation, and bulk held-up refund recovery from past 2 financial years.",
      "serviceType": "GST Refund Filing Service",
      "url": "/gst-refund-exports-with-igst/",
      "provider": {
        "@id": "/#organization"
      },
      "areaServed": "India"
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
        .toc-pill {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-pill:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-pill.active { background: var(--orange); border-color: var(--orange); color: var(--white); }
        .toc-pill.active:hover { background: var(--orange-dark); border-color: var(--orange-dark); }
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
            background: #25D366;
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
            padding: 8px 22px; background: #fff; color: #25D366;
            font-family: 'Barlow', sans-serif; font-size: 14px; font-weight: 700;
            border: none; border-radius: 50px; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease; flex-shrink: 0;
        }
        .wa-sticky-bar-btn:hover { background: #f0fdf4; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
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
            .wa-sticky-bar-btn::before { content: 'Join Community'; }
            .wa-sticky-bar-btn span { display: none; }
        }
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
                        GST Refund - Exports With IGST Payment (Rule 96)
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team · Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundaram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> GSTR-1 Table 6A, GSTR-3B Table 3.1(b), Shipping Bill, EGM, BRC for FEMA closure</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 8,000 per filing plus 18 percent GST; held-up refund recovery on success-fee model</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Goods exporter who paid IGST on export invoice (no LUT route); Rule 96(10) exclusions apply</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 15 days auto-credit via ICEGATE and PFMS where SB000 success status achieved</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of GST and Customs Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20on%20Exports%20with%20IGST%20Payment%20under%20Rule%2096%20and%20ICEGATE%20SB%20error%20rectification." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Exports With IGST Refund'/>
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
                                <option value="gst-refund-exports-with-igst" selected>Exports With IGST Refund</option>
                                <option value="gst-refund">GST Refund</option>
                                <option value="gstat-appeal-exporters">GSTAT Appeal - Exporters</option>
                                <option value="gstat-appeal-filing">GSTAT Appeal Filing</option>
                                <option value="gst-registration">GST Registration</option>
                                <option value="gst-returns">GST Returns</option>
                                <option value="gst-notice">GST Notice</option>
                                <option value="gst-audit">GST Audit</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron recovered Rs 2.4 crore in held-up IGST refunds for 47 stuck SBs at SB005 between 2023 and 2025. Form 9A cleared 31 SBs; the rest cleared via officer interface under Customs Circular 5/2018. The dual-invoice expertise is rare.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rakesh Kapoor</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO / Ahmedabad Pharma Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Patron caught a Rule 96(10) restriction (advance authorisation) before we did the export. Switched us to LUT route and avoided a Section 73 demand notice that would have been ugly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director / Engineering Goods Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">SB006 gateway EGM issue on our ICD shipments stuck Rs 48 lakh for 8 months. Patron coordinated with shipping line for Train Summary and got the gateway EGM fixed. Refund hit our account in 21 days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Logistics Head / Textile Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">PFMS bank validation failed three times because of IFSC mismatch after our bank merger. Patron updated bank details in ICES with the gateway port officer and got the refund retried successfully. Rs 22 lakh credited in 12 days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO / Gems and Jewellery Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">DGARM-flagged risky exporter status under Notification 14/2025 blocked our provisional refund. Patron prepared the reconciliation pack, responded to verification notices, and got us de-flagged in 35 days. Refund came through normally after that.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Gaur</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Finance / Chemicals Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
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
                    <p>From pre-EGM SB000 reconciliation through to officer interface escalation under Customs Circular 5/2018 - Patron handles the full Rule 96 IGST-paid export refund pipeline with CA-led ICEGATE expertise.</p>
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
            <a href="#overview-section" class="toc-pill">Overview</a>
                <a href="#what-section" class="toc-pill">What Is Rule 96 Refund</a>
                <a href="#who-section" class="toc-pill">Rule 96(10) Eligibility</a>
                <a href="#services-section" class="toc-pill">What We Deliver</a>
                <a href="#procedure-section" class="toc-pill">8 Sequential Steps</a>
                <a href="#documents-section" class="toc-pill">Documents Required</a>
                <a href="#challenges-section" class="toc-pill">Challenges and Solutions</a>
                <a href="#fees-section" class="toc-pill">Fees and Pricing</a>
                <a href="#timeline-section" class="toc-pill">Timeline</a>
                <a href="#benefits-section" class="toc-pill">Why CA-Led</a>
                <a href="#comparison-section" class="toc-pill">Rule 96 vs Rule 89</a>
                <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Exports With IGST Refund Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Exports With IGST Refund Services at a Glance</strong></p>
                    <p>GST refund of IGST paid on exports of goods is automatic under Rule 96 of the CGST Rules 2017. The shipping bill filed on ICEGATE is deemed to be the refund application once the Export General Manifest is filed and a valid GSTR-3B is filed. Refund is auto-credited via PFMS to the registered bank account in 7 to 15 days when error code SB000 is achieved.</p>
                </div>
                <p>IGST-paid export refund is the simplest GST refund route in design but the most error-prone in execution. Section 16 of the IGST Act 2017 makes exports zero-rated and gives the exporter two routes: supply under LUT or bond without payment of IGST and claim refund of accumulated ITC under Rule 89, or pay IGST on the export invoice and claim refund of the tax paid under Rule 96. The Rule 96 route is automatic - the shipping bill electronically filed on ICEGATE (Indian Customs Electronic Commerce Gateway) is treated as the refund application once two further conditions are met: the carrier files the Export General Manifest (EGM) and the exporter files a valid GSTR-3B with the IGST amount in Table 3.1(b).</p>
                <p>The Indian Customs EDI System (ICES) then runs an automated invoice-level match between the shipping bill and the GSTR-1 Table 6A data transmitted by GSTN. A successful match produces SB000; any mismatch produces an SB error code (SB001 to SB006, SB104, SB009) that blocks the refund. Customs Circulars 5/2018, 8/2018, and 5/2021 set out the officer interface module in ICES for manual rectification where automated correction (Form 9A amendment of GSTR-1) is not possible. The Public Financial Management System (PFMS) finally credits the refund to the exporter's registered bank account. Patron Accounting LLP files, recovers, and rectifies stuck IGST refunds for 200+ Indian exporters with 15+ years of customs Rule 96, ICEGATE, and PFMS reconciliation experience.<div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Provision</td><td>Section 16 of IGST Act 2017 read with Rule 96 of CGST Rules 2017</td></tr>
                            <tr><td>Applicable To</td><td>Goods exporters who pay IGST on export invoice (LUT route holders use Rule 89 instead)</td></tr>
                            <tr><td>Refund Application</td><td>Shipping bill itself - no separate RFD-01 for goods exported with IGST payment</td></tr>
                            <tr><td>Mandatory Pre-conditions</td><td>GSTR-1 Table 6A export invoice, GSTR-3B Table 3.1(b) IGST paid, EGM filed by carrier, PFMS bank account validated</td></tr>
                            <tr><td>Refund Channel</td><td>ICES (customs) validates against GSTN data; PFMS disburses to bank</td></tr>
                            <tr><td>Time Limit</td><td>Auto-refund 7 to 15 days; statutory time limit 2 years from relevant date under Section 54(1)</td></tr>
                            <tr><td>Authority</td><td>ICEGATE (https://www.icegate.gov.in), Customs jurisdiction, CBIC, PFMS</td></tr>
                        </tbody>
                    </table>
                </div></p>
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
                <h2 class="section-title">What Is GST Refund of IGST on Exports Under Rule 96</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund of IGST paid on exports of goods under Rule 96 of the CGST Rules 2017 is an automatic refund mechanism where the shipping bill itself is deemed to be the refund application. Section 16 of the IGST Act 2017 categorises exports as zero-rated supplies and Section 16(3) gives the exporter two routes - supply without payment of IGST under LUT (refund of ITC under Rule 89) or supply with payment of IGST and claim refund of tax paid (Rule 96).</p>
                    <p>Under Rule 96(1) of the CGST Rules 2017, the shipping bill filed by an exporter is deemed to be an application for refund of integrated tax paid on goods exported, and such application is deemed filed only when (a) the person in charge of the conveyance carrying the export goods files a valid Export General Manifest under the Customs Act 1962 covering the shipping bill, and (b) the applicant has furnished a valid return in Form GSTR-3B. ICES at the customs side and GSTN at the GST side run an automated matching algorithm. A successful match (SB000) triggers automatic refund processing through PFMS to the bank account registered on the GST portal. The refund is typically credited in 7 to 15 days from EGM filing, making this the fastest of all GST refund categories.</p>
                    <p>For primary source materials see the official <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://www.icegate.gov.in" target="_blank" rel="noopener">ICEGATE Customs portal</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC notifications and circulars</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>
                    <h3 style="margin-top:24px;">ICEGATE SB Error Code Diagnostic Matrix</h3>
                    <div class="table-responsive-wrapper">
                        <table>
                            <thead><tr><th>Error Code</th><th>Meaning</th><th>Corrective Action</th></tr></thead>
                            <tbody>
                                <tr><td>SB000</td><td>Successfully validated</td><td>No action - refund credited via PFMS in 7 to 15 days</td></tr>
                                <tr><td>SB001</td><td>SB number / date / port code mismatch</td><td>Amend GSTR-1 via Form 9A with correct SB details</td></tr>
                                <tr><td>SB002</td><td>EGM not filed by carrier</td><td>Approach shipping line / airline / carrier to file EGM under Section 41 Customs Act 1962</td></tr>
                                <tr><td>SB003</td><td>GSTIN mismatch (SB GSTIN differs from GSTR-1/3B GSTIN)</td><td>Amend GSTR-1 via Form 9A with correct GSTIN</td></tr>
                                <tr><td>SB004</td><td>Duplicate transmission already validated</td><td>No action - earlier transmission validated</td></tr>
                                <tr><td>SB005</td><td>Invalid invoice number (GSTR-1 versus SB mismatch)</td><td>Form 9A amendment if typo; officer interface under Customs Circular 5/2018 + 8/2018 + 5/2021 for dual-invoice cases</td></tr>
                                <tr><td>SB006</td><td>Gateway EGM not available (ICD shipments)</td><td>File Train/Truck Summary; shipping line includes ICD SB in gateway port EGM</td></tr>
                                <tr><td>SB104</td><td>Port code not valid</td><td>Contact GSTN helpdesk; amend GSTR-1 via Form 9A with correct port code</td></tr>
                                <tr><td>SB009</td><td>SB cancelled</td><td>Approach jurisdictional Customs - cancelled SB cannot generate refund</td></tr>
                                <tr><td>PFMS Error</td><td>Bank account not validated (IFSC, account number, name mismatch)</td><td>Submit correct bank details to proper officer at gateway port; ICES will update</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Exports With IGST Refund:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;">
                        <table>
                            <thead><tr><th>Term</th><th>Plain Meaning</th></tr></thead>
                            <tbody>
                                <tr><td>Zero-Rated Supply (Section 16 IGST Act)</td><td>Exports of goods or services and supplies to SEZ - taxed at zero percent with full ITC eligibility</td></tr>
                                <tr><td>Rule 96 vs Rule 89</td><td>Rule 96 = IGST-paid auto-refund (shipping bill as application). Rule 89 = LUT route refund of accumulated ITC (manual RFD-01 filing)</td></tr>
                                <tr><td>Shipping Bill</td><td>Customs document filed by exporter on ICEGATE; under Rule 96(1) it is deemed the refund application for IGST</td></tr>
                                <tr><td>EGM (Export General Manifest)</td><td>Document filed by carrier (shipping line, airline) under Section 41 of Customs Act 1962 confirming goods left India - mandatory pre-condition for refund</td></tr>
                                <tr><td>ICEGATE</td><td>Indian Customs Electronic Commerce Gateway - customs portal where shipping bills are filed and refund status tracked</td></tr>
                                <tr><td>ICES</td><td>Indian Customs EDI System - back-end system where automated SB-vs-GSTR-1 matching runs</td></tr>
                                <tr><td>PFMS</td><td>Public Financial Management System - government disbursement engine that credits refund to exporter's bank account</td></tr>
                                <tr><td>SB Error Codes</td><td>ICEGATE response codes SB000 (success) through SB006, SB104, SB009 indicating match status</td></tr>
                                <tr><td>Form 9A (Table 9A of GSTR-1)</td><td>Amendment table in GSTR-1 used to correct invoice number, port code, GSTIN, and SB number errors</td></tr>
                                <tr><td>Officer Interface (ICES)</td><td>Manual rectification module under Customs Circular 5/2018 + 8/2018 + 5/2021 for SB005 errors that cannot be auto-corrected</td></tr>
                                <tr><td>Rule 96(10)</td><td>Restriction barring IGST-paid route for exporters who availed CGST/SGST/IGST drawback, advance authorisation, EPCG, or concessional 0.1 percent rate</td></tr>
                                <tr><td>BRC (Bank Realisation Certificate)</td><td>Bank-issued certificate confirming foreign exchange realisation - required for FEMA compliance, not for IGST refund itself</td></tr>
                            </tbody>
                        </table>
                    </div>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Exports With IGST Refund</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Auto-Route</span>
                        <strong>ICEGATE + PFMS</strong>
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
            <h2 class="section-title">Rule 96(10) Eligibility - Who Can and Cannot Use the IGST-Paid Route</h2>
            <div class="content-text">
                
                <p>The IGST-paid route under Rule 96 is the default for goods exporters who do not file an LUT. However, Rule 96(10) of the CGST Rules 2017 carves out specific categories that are barred from this route - they must use the LUT route under Rule 89 instead. Patron audits the eligibility before recommending the route.</p>
                <h3 style="margin-top:20px;">Eligible to Use Rule 96 IGST-Paid Route</h3>
                <ul>
                    <li>Goods exporters with GST registration who choose to pay IGST on the export invoice instead of filing LUT</li>
                    <li>Service exporters who paid IGST on the invoice (RFD-01 filing required for services even on this route - shipping bill mechanism applies only to goods)</li>
                    <li>Exporters with valid GSTR-1 Table 6A and GSTR-3B Table 3.1(b) entries matching shipping bill</li>
                    <li>Exporters whose carrier has filed the EGM under Section 41 of the Customs Act 1962</li>
                    <li>Exporters with a PFMS-validated bank account on the GST portal</li>
                </ul>
                <h3 style="margin-top:20px;">6 Categories NOT Eligible Under Rule 96(10) - Must Use LUT Route Instead</h3>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Restriction</th><th>Statutory Source</th><th>Patron Action</th></tr></thead>
                        <tbody>
                            <tr><td>Availed CGST/SGST/IGST drawback</td><td>Rule 96(10)(a)</td><td>Only Basic Customs Duty drawback is compatible with IGST-paid route</td></tr>
                            <tr><td>Inputs procured at concessional 0.1 percent rate</td><td>Notification 40/2017-CT (Rate) and 41/2017-IT (Rate)</td><td>Use LUT route only</td></tr>
                            <tr><td>Inputs imported under Advance Authorisation Scheme</td><td>Rule 96(10)(b)</td><td>Final product must be exported under LUT/bond</td></tr>
                            <tr><td>Inputs imported under EPCG Scheme</td><td>Rule 96(10)(b)</td><td>Final product must be exported under LUT/bond</td></tr>
                            <tr><td>Risky exporter under DGARM identification</td><td>Notification 14/2025-Central Tax dated 17.09.2025</td><td>Provisional refund not allowed; full scrutiny route applies</td></tr>
                            <tr><td>Person prosecuted for tax evasion above Rs 2.5 crore</td><td>Section 132 of CGST Act 2017</td><td>Bond requirement instead of LUT plus full scrutiny</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Patron Accounting Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Export Eligibility Check (Rule 96 vs Rule 89 Decision)</td><td>Free 30-minute review of duty drawback claims, advance authorisation usage, EPCG status, and 0.1 percent procurement to confirm whether Rule 96 IGST-paid route is open or whether Rule 96(10) forces the LUT route. Documented decision memo issued.</td></tr>
                        <tr><td>GSTR-1 Table 6A and GSTR-3B Table 3.1(b) Reconciliation</td><td>Pre-filing match of export invoice number, port code, GSTIN, shipping bill number, and IGST amount across GSTR-1 Table 6A, GSTR-3B Table 3.1(b), and ICEGATE shipping bill data. Catches SB001, SB003, SB005 errors before they happen.</td></tr>
                        <tr><td>ICEGATE SB Error Code Rectification</td><td>Diagnose SB000 to SB006, SB104, SB009 errors via ICEGATE login. Rectify SB005 via Form 9A amendment in GSTR-1, SB002 and SB006 via shipping line follow-up for EGM, SB003 via Form 9A GSTIN correction. Officer interface escalation under Customs Circular 5/2018 + 8/2018 + 5/2021 for irrecoverable SB005.</td></tr>
                        <tr><td>EGM Reconciliation and Gateway Port Follow-Up</td><td>Track EGM filing status on ICEGATE, reconcile container number and SB number mismatches under EGM error flags C and N, follow up with shipping line and gateway port customs to file supplementary EGMs. Critical for ICD shipments with SB006 errors.</td></tr>
                        <tr><td>PFMS Bank Account Validation and Disbursement Resolution</td><td>Resolve PFMS validation errors (incorrect IFSC, account name mismatch, invalid bank branch). Update bank details with proper officer in ICES. Track scroll generation, temporary scroll, final scroll, and bank credit.</td></tr>
                        <tr><td>Held-Up Refund Recovery - Past 2 Financial Years</td><td>Audit shipping bills filed in the past 2 financial years against the 2-year limitation under Section 54(1). Identify all stuck SBs at SB001 to SB006 and PFMS error states, prioritise by refund value, and recover via Form 9A amendments or officer interface escalation. Success-fee model.</td></tr>

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
            <h2 class="section-title">Refund Procedure (8 Sequential Steps)</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's IGST-paid export refund pipeline runs the steps below. Each step cites the relevant Act, Section, Rule, Form, or Circular so finance and tax teams can audit each handoff.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Pre-Export Eligibility Check Under Rule 96(10)</h3>
                    <p class="step-description">Confirm the exporter has not availed CGST/SGST/IGST drawback (Rule 96(10)(a)). Confirm no inputs at concessional 0.1 percent under Notification 40/2017-CT(R) or 41/2017-IT(R). Confirm no Advance Authorisation or EPCG inputs (Rule 96(10)(b)). If any restriction applies, route the export under LUT and use Rule 89 instead. (1 day.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No drawback / AA / EPCG</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No 0.1 percent procurement</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Decision memo issued</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Rule 96(10)</text><circle cx="35" cy="52" r="9" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M30 52l3 3 6-6" stroke="#25D366" stroke-width="2" fill="none" stroke-linecap="round"/><text x="65" y="48" font-size="7" font-weight="700" fill="#14365F" font-family="Arial">No DBK / AA</text><text x="65" y="58" font-size="7" font-weight="700" fill="#14365F" font-family="Arial">No EPCG / 0.1%</text><line x1="25" y1="70" x2="95" y2="70" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Eligibility Check</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Export Invoice and Shipping Bill Filing on ICEGATE</h3>
                    <p class="step-description">Raise export invoice with IGST charged at the applicable rate. File shipping bill on ICEGATE with all 15 mandatory fields including SB number, port code, GSTIN, invoice number, invoice date, IGST amount. Ensure invoice number matches the GSTR-1 invoice number exactly. (Same day as export.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IGST charged on invoice</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SB filed on ICEGATE</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15 fields populated</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Shipping Bill</text><line x1="25" y1="45" x2="95" y2="45" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="58" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IGST 18%</text><text x="60" y="68" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">ICEGATE</text></svg>
                        </div>
                        <span class="illustration-label">SB Filed</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">EGM Filing by Carrier Under Section 41 of Customs Act 1962</h3>
                    <p class="step-description">Carrier (shipping line, airline, freight forwarder) files EGM at the gateway port covering the SB. For ICD shipments, ensure gateway EGM is filed electronically (manual gateway EGM causes SB006). (Within 7 days of vessel sailing or aircraft departure.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Carrier files EGM</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 41 Customs Act</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gateway EGM for ICD</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="13" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">EGM</text><path d="M30 55c5-3 10-3 15 0s10 3 15 0s10-3 15 0s10 3 15 0" stroke="#F5A623" stroke-width="2" stroke-linecap="round" fill="none"/><text x="60" y="68" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Section 41 Customs Act</text></svg>
                        </div>
                        <span class="illustration-label">EGM Filed</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">GSTR-1 Filing With Table 6A Export Invoice Details</h3>
                    <p class="step-description">File GSTR-1 reporting the export invoice in Table 6A - Exports With Payment of Tax. All fields (invoice number, date, port code, SB number, SB date, IGST) must mirror the shipping bill exactly. (By 11th of the following month for monthly filers.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 6A populated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mirrors SB exactly</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>By 11th of month</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="33" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-1</text><rect x="28" y="40" width="64" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="48" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Table 6A</text><line x1="30" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/><line x1="30" y1="68" x2="85" y2="68" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/></svg>
                        </div>
                        <span class="illustration-label">GSTR-1 Filed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">GSTR-3B Filing With Table 3.1(b) IGST Payment</h3>
                    <p class="step-description">File GSTR-3B with the IGST amount in Table 3.1(b) - Outward Taxable Supplies (Zero-Rated). The IGST in Table 3.1(b) must be equal to or greater than the IGST in GSTR-1 Table 6A; otherwise GSTN will not transmit data to ICES. (By 20th of the following month for monthly filers.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 3.1(b) IGST entered</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Equals or exceeds Table 6A</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>By 20th of month</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="33" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-3B</text><rect x="28" y="40" width="64" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="48" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Table 3.1(b)</text><line x1="30" y1="60" x2="80" y2="60" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/><line x1="30" y1="68" x2="75" y2="68" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/></svg>
                        </div>
                        <span class="illustration-label">GSTR-3B Filed</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Automated ICES vs GSTN Validation</h3>
                    <p class="step-description">ICES runs invoice-level match against GSTN-transmitted data. Successful match triggers SB000; any mismatch triggers SB001 to SB006, SB104, or SB009. PFMS validates the bank account in parallel. (Automated within 2 to 5 days of GSTR-3B filing.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICES vs GSTN match</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SB000 = success</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PFMS bank validation</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="50" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="35" y="54" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">ICES</text><circle cx="85" cy="50" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="85" y="54" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTN</text><path d="M52 50h16" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><path d="M60 45l8 5-8 5" stroke="#25D366" stroke-width="2" stroke-linecap="round" fill="none"/><text x="60" y="38" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Auto-Match</text><text x="60" y="88" font-size="9" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">SB000</text></svg>
                        </div>
                        <span class="illustration-label">Auto-Match</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">PFMS Disbursement and Bank Credit</h3>
                    <p class="step-description">On SB000, ICES generates a temporary scroll, gateway port officer approves it, final scroll sent to PFMS. PFMS credits the IGST refund to the GST-registered bank account. (Within 7 to 15 days of EGM filing or GSTR-3B filing, whichever is later.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Temporary + final scroll</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PFMS bank credit</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7 to 15 day window</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><text x="60" y="35" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">PFMS</text><text x="60" y="50" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Bank Credit</text><circle cx="60" cy="60" r="6" fill="#25D366"/><path d="M57 60l2 2 4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" fill="none"/><text x="60" y="92" font-size="9" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">7-15 days</text></svg>
                        </div>
                        <span class="illustration-label">Bank Credited</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Error Rectification Where SB000 Not Achieved</h3>
                    <p class="step-description">For SB001, SB003, SB005, SB104 - amend GSTR-1 via Table 9A (Form 9A). For SB002, SB006 - shipping line follow-up to file or correct EGM. For SB005 with separate invoice numbers (cannot be auto-fixed) - escalate via officer interface under Customs Circular 5/2018 + 8/2018 + 5/2021. For PFMS errors - submit corrected bank details to gateway port officer. (5 to 30 days depending on error type.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 9A amendment</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Officer interface escalation</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Customs Circular 5/2018</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="42" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="36" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SB001</text><text x="36" y="43" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Form 9A</text><rect x="63" y="15" width="42" height="35" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="84" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SB005</text><text x="84" y="43" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Officer I/F</text><rect x="15" y="55" width="90" height="30" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="70" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Circ 5/2018 + 8/2018 + 5/2021</text></svg>
                        </div>
                        <span class="illustration-label">Error Rectified</span>
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
            <h2 class="section-title">Documents Required for Rule 96 IGST Refund</h2>
            <div class="content-text">
                
                <h3>Mandatory Documents (Filed Before EGM)</h3>
                <ul>
                    <li>Export Invoice with IGST charged at applicable rate (HSN-wise)</li>
                    <li>Shipping Bill on ICEGATE with all 15 mandatory fields populated</li>
                    <li>Packing List matching SB and invoice quantities</li>
                    <li>GST registration certificate, IEC code, and PAN card</li>
                    <li>Authorised signatory DSC for ICEGATE login</li>
                    <li>Bank account details registered on GST portal (must match PFMS)</li>
                </ul>
                <h3>Mandatory Filings (After Export)</h3>
                <ul>
                    <li>EGM filed by carrier under Section 41 of Customs Act 1962</li>
                    <li>GSTR-1 with Table 6A export invoice details exactly matching SB</li>
                    <li>GSTR-3B with Table 3.1(b) IGST amount equal to or greater than Table 6A</li>
                    <li>BRC / e-BRC for FEMA compliance (not refund condition but mandatory for export obligation closure)</li>
                </ul>
                <h3>For Held-Up Refund Recovery</h3>
                <ul>
                    <li>SB-wise IGST integration status report from ICEGATE login (NewMIS)</li>
                    <li>Form 9A amendments if SB001, SB003, SB005, SB104 errors</li>
                    <li>Letter to gateway port Customs Commissioner or Pr. Commissioner for grievance escalation</li>
                    <li>Officer interface application under Customs Circular 5/2018 + 8/2018 + 5/2021 for irrecoverable SB005</li>
                </ul>
                <h3>Worked Example - Engineering Goods Exporter to Germany</h3>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Stage</th><th>Date / Amount</th></tr></thead>
                        <tbody>
                            <tr><td>Export Invoice Value</td><td>Rs 50,00,000</td></tr>
                            <tr><td>IGST charged at 18 percent (paid via GSTR-3B Table 3.1(b))</td><td>Rs 9,00,000</td></tr>
                            <tr><td>Shipping Bill filed on ICEGATE</td><td>15 April 2026</td></tr>
                            <tr><td>EGM filed by carrier (Section 41 Customs Act 1962)</td><td>22 April 2026</td></tr>
                            <tr><td>GSTR-1 Table 6A filed with matching invoice</td><td>11 May 2026</td></tr>
                            <tr><td>GSTR-3B Table 3.1(b) filed with IGST Rs 9,00,000</td><td>20 May 2026</td></tr>
                            <tr><td>GSTN data transmitted to ICES</td><td>21 May 2026</td></tr>
                            <tr><td>ICES validation - SB000 success status</td><td>23 May 2026</td></tr>
                            <tr><td>PFMS scroll generation and bank credit</td><td>29 May 2026 (8 days from GSTR-3B)</td></tr>
                            <tr><td>Total time from EGM to bank credit</td><td>37 days (within 7 to 15 day window from GSTR-3B filing)</td></tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Rule 96 IGST Refund Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>SB005 Invoice Number Mismatch (most common error)</td><td>Caused by typo in GSTR-1 or two separate invoice number sets (one for GST, one for export); Form 9A amendment cannot fix dual-invoice cases after EGM is filed</td><td>Form 9A amendment for typo cases; officer interface escalation under Customs Circular 5/2018 + 8/2018 + 5/2021 for dual-invoice cases with shipping bill match certificate</td></tr>
                        <tr><td>SB006 Gateway EGM Not Available (ICD shipments)</td><td>Common where Inland Container Depot consignments use manual rather than electronic gateway EGM; refund stays blocked till gateway EGM is rectified</td><td>Patron coordinates with shipping line to file Train/Truck Summary post-departure and ensures gateway EGM electronically captures the ICD shipping bill with transference copy</td></tr>
                        <tr><td>Rule 96(10) Restriction Discovered After Export</td><td>Exporter who availed AA, EPCG, or 0.1 percent procurement is barred from Rule 96 IGST route; if discovered after IGST refund credited, Section 73 demand notice follows</td><td>Patron negotiates voluntary deposit, files Form DRC-03, and re-routes future exports via LUT to avoid recurrence</td></tr>
                        <tr><td>PFMS Bank Account Validation Failure</td><td>Refund stuck at PFMS due to IFSC mismatch, name mismatch, or closed account; temporary scroll generates but final scroll does not</td><td>Patron coordinates with jurisdictional Customs Commissionerate to update bank details in ICES with PFMS retry request</td></tr>
                        <tr><td>EGM Container Number Mismatch (Error Flag C or N)</td><td>Container number in SB differs from EGM; Flag C requires SB amendment; Flag N requires EGM amendment via delete request</td><td>Patron drafts the EGM amendment request and follows up with gateway port EDI section</td></tr>
                        <tr><td>Refund Withheld Due to DGARM Risk Flag (Notification 14/2025-CT)</td><td>Risky exporters identified by DGARM are barred from provisional refund; refund stays in scrutiny mode</td><td>Patron prepares supporting reconciliation pack, responds to verification notices, and pushes for de-flagging where the risk parameters are misclassified</td></tr>

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
            <h2 class="section-title">Rule 96 IGST Refund Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Single SB Diagnostic and SB000 Pre-Audit)</td><td class="table-amount">Starting from Rs 8,000 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Form 9A Amendment for Single SB Error</td><td class="table-amount">Rs 12,000 per amendment (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Bulk SB Recovery (10 to 50 SBs)</td><td class="table-amount">Rs 50,000 base + Rs 3,500 per SB (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Officer Interface Escalation (Customs Circular 5/2018, 8/2018, 5/2021)</td><td class="table-amount">Rs 25,000 per SB (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Rule 96(10) Demand Notice Defence</td><td class="table-amount">Rs 75,000 per response (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 107 Appeal to Appellate Authority</td><td class="table-amount">Rs 60,000 plus success fee (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Held-Up Refund Recovery (Success Fee)</td><td class="table-amount">1 to 3 percent of refund recovered (on actual recovery)</td></tr>
                        <tr><td>Government / Statutory Fees</td><td class="table-amount">No separate government fee for Rule 96 auto-refund; ICEGATE access free</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Exports With IGST Refund consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20on%20Exports%20With%20IGST%20Payment%20under%20Rule%2096.%20Please%20contact%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rule 96 IGST Refund Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-export eligibility check (Rule 96 vs Rule 89)</td><td>1 to 2 working days from data share</td></tr>
                        <tr><td>Shipping bill filing on ICEGATE</td><td>Same day as export</td></tr>
                        <tr><td>EGM filing by carrier</td><td>Within 7 days of vessel or aircraft departure</td></tr>
                        <tr><td>GSTR-1 Table 6A filing</td><td>By 11th of following month (monthly filers)</td></tr>
                        <tr><td>GSTR-3B Table 3.1(b) filing</td><td>By 20th of following month (monthly filers)</td></tr>
                        <tr><td>GSTN-to-ICES data transmission</td><td>Within 2 days of GSTR-3B filing</td></tr>
                        <tr><td>ICES SB000 validation</td><td>Within 5 days of data transmission</td></tr>
                        <tr><td>PFMS scroll generation and bank credit</td><td>Within 7 to 15 days of EGM or GSTR-3B (whichever later)</td></tr>
                        <tr><td>Form 9A amendment processing for SB error</td><td>Next monthly GSTR-1 cycle</td></tr>
                        <tr><td>Officer interface escalation processing</td><td>30 to 60 days</td></tr>
                        <tr><td>Time limit to claim under Section 54(1)</td><td>2 years from date ship/aircraft leaves India</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note on the 7 to 15 day window:</strong> The auto-credit window starts from the LATER of (a) EGM filing date or (b) GSTR-3B filing date. The pipeline is GSTN-to-ICES data transmission (2 days), ICES validation (5 days), PFMS scroll generation and bank credit (3 to 8 days). Any SB error code (SB001 to SB006, SB104, SB009) blocks the refund until rectified - rectification can take 5 to 30 days depending on error type. Held-up refunds beyond 2 years from ship departure are permanently lost under Section 54(1).</p>

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
            <h2 class="section-title">4 Reasons Why CA-Led Rule 96 Filing Beats DIY or Software-Only</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <h3>CA-Led Rule 96(10) Eligibility Audit Before Export</h3>
                    <p>DIY exporters often discover Rule 96(10) restriction (drawback, advance authorisation, EPCG, concessional 0.1 percent) only when a Section 73 demand arrives. Patron audits eligibility before the first IGST-paid export and routes the consignment via LUT where Rule 96(10) applies - preventing demand notices and recovery proceedings.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                    </div>
                    <h3>Pre-EGM SB000 Reconciliation</h3>
                    <p>Software auto-pulls SB and GSTR-1 data. Patron's CA team manually verifies invoice number, port code, GSTIN, SB number, and SB date alignment across SB, GSTR-1 Table 6A, and GSTR-3B Table 3.1(b) before EGM. SB005, SB001, SB003 errors are eliminated at the source instead of fought after the fact.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                    </div>
                    <h3>Officer Interface Escalation Expertise</h3>
                    <p>For SB005 errors with dual invoice numbering, no software can fix them. Only officer interface escalation under Customs Circular 5/2018 + 8/2018 + 5/2021 works. Patron has 200+ exporter experience navigating gateway port customs liaison, drafting interface applications, and securing manual sanction.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>Bulk SB Recovery for Past 2 Financial Years</h3>
                    <p>Most exporters have stuck SBs from 2023 to 2025 they have given up on. Patron audits the past 2-year window under Section 54(1) limitation, prioritises by refund value, and recovers via Form 9A or officer interface. Success-fee model aligns incentives - Patron is paid only on actual recovery.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Exporters</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of GST and Customs Compliance</strong></p>
                <h3>Trusted By</h3>
                <p>Hyundai, Asian Paints, Bridgestone, and 200+ Indian exporters across pharma, engineering, IT, gems and jewellery, textile, agro, and chemicals.</p>
                <h3>Outcome Proof</h3>
                <p>An Ahmedabad-based pharmaceutical exporter recovered Rs 2.4 crore in held-up IGST refunds in March 2026 covering 47 shipping bills stuck at SB005 between 2023 and 2025. Form 9A amendments cleared 31 SBs; officer interface route under Customs Circular 5/2018 cleared the remaining 16 with dual invoice numbering. Average recovery time per SB: 22 days.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves exporters across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rule 96 (IGST-Paid) vs Rule 89 (LUT) - Which Route to Choose</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Rule 96 (IGST-Paid)</th><th>Rule 89 (LUT)</th><th>Patron View</th></tr></thead>
                    <tbody>
                        <tr><td>Mechanism</td><td>IGST-paid auto-refund</td><td>LUT route ITC refund</td><td>Patron evaluates per consignment</td></tr>
                        <tr><td>Refund Application</td><td>Shipping bill deemed application (Rule 96(1))</td><td>RFD-01 manual filing (Rule 89)</td><td>Rule 96 simpler for goods</td></tr>
                        <tr><td>Working Capital Impact</td><td>IGST paid upfront, refunded later</td><td>No IGST upfront</td><td>LUT preserves cash; Rule 96 reliable speed</td></tr>
                        <tr><td>Processing Time</td><td>7 to 15 days from EGM (auto)</td><td>30 to 60 days (manual scrutiny)</td><td>Rule 96 faster on average</td></tr>
                        <tr><td>Documentation</td><td>GSTR-1 Table 6A, GSTR-3B Table 3.1(b), SB, EGM</td><td>GSTR-1 Table 6A, RFD-01, Statement 3, BRC for services</td><td>Rule 89 heavier paper</td></tr>
                        <tr><td>Eligibility Restriction</td><td>Rule 96(10) - no drawback, AA, EPCG, 0.1 percent</td><td>Open to all except prosecuted exporters</td><td>Patron audits before route choice</td></tr>
                        <tr><td>Common Failure Mode</td><td>SB005 invoice mismatch</td><td>RFD-08 deficiency memo on Net ITC</td><td>Both fixable with right expertise</td></tr>
                        <tr><td>Suitable For</td><td>Cash-rich goods exporters with clean drawback profile</td><td>Service exporters and AA / EPCG users</td><td>Patron decides per shipment</td></tr>

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
            <h2 class="section-title">Related GST and Export Compliance Services</h2>
            <div class="content-text">
                
                <p>IGST-paid export refund work integrates with Patron's broader GST compliance stack. Exporters commonly bundle the services below:</p>
                <ul>
                    <li><a href="/gst-refund/">GST Refund</a> - parent practice covering the full Section 54 refund spectrum including Rule 89 and Rule 96</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT Appeal - Exporters (Refund Rejection)</a> - escalation route where IGST refund is rejected and APL-04 Order-in-Appeal is also adverse on Rule 96 grounds</li>
                    <li><a href="/gstat-appeal-filing/">GSTAT Appeal Filing</a> - second appeal under Section 112 in Form APL-05 for any export refund dispute</li>
                    <li><a href="/gst-registration/">GST Registration</a> - end-to-end registration including IEC linkage and HSN classification for new exporters</li>
                    <li><a href="/gst-returns/">GST Returns</a> - monthly GSTR-1 Table 6A and GSTR-3B Table 3.1(b) filing, the single most important upstream control for Rule 96 refund success</li>
                    <li><a href="/gst-notice/">GST Notice</a> - covers Section 73, 74, and 74A demand notices including Rule 96(10) recovery proceedings</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <h3>Section 16 of IGST Act 2017</h3>
                <p>Zero-rated supply definition. Section 16(1)(a) covers exports of goods or services. Section 16(1)(b) covers supplies to SEZ units and developers. Section 16(3) gives the two refund routes - LUT (refund of accumulated ITC under Rule 89) or IGST-paid (refund of tax paid under Rule 96).</p>
                <h3>Section 54(1) of CGST Act 2017</h3>
                <p>2-year time limit from relevant date. For goods exports, relevant date under Explanation 2(a) is the date the ship or aircraft on which goods are loaded leaves India, or date goods pass the frontier. For services, date of receipt of foreign exchange or invoice date, whichever later.</p>
                <h3>Section 54(6) of CGST Act 2017</h3>
                <p>Provisional refund up to 90 percent for zero-rated supplies; system-driven under amended Rule 91(2) per Notification 13/2025-CT and CGST Instruction 6/2025.</p>
                <h3>Section 54(7) of CGST Act 2017</h3>
                <p>Final refund order within 60 days of receipt of complete application.</p>
                <h3>Section 56 of CGST Act 2017</h3>
                <p>Interest at 6 percent per annum on refund delayed beyond 60 days; 9 percent for refund pursuant to appellate orders.</p>
                <h3>Rule 96 of CGST Rules 2017</h3>
                <p>Shipping bill deemed to be application for refund of IGST paid on goods exported. Application deemed filed only when EGM filed (Section 41 Customs Act 1962) and valid GSTR-3B furnished.</p>
                <h3>Rule 96(10) of CGST Rules 2017</h3>
                <p>Bars IGST-paid route if exporter availed CGST/SGST/IGST drawback (Rule 96(10)(a)), or imported inputs at concessional rate under Notification 40/2017-CT(R) or 41/2017-IT(R) or under Advance Authorisation or EPCG (Rule 96(10)(b)).</p>
                <h3>Customs Act 1962 Section 41</h3>
                <p>Person in charge of conveyance to deliver Export General Manifest before departure - mandatory pre-condition for refund deemed filed under Rule 96(1)(b).</p>
                <h3>Customs Circular 5/2018-Cus (23.02.2018), 8/2018-Cus (23.03.2018), and 5/2021-Cus (17.02.2021)</h3>
                <p>Officer interface module in ICES for SB005 invoice mismatch where Form 9A amendment is not possible. The 5/2018 circular set up the original mechanism; 8/2018 extended it; 5/2021 further extended it for legacy SB005 cases.</p>
                <h3>Notification 40/2017-Central Tax (Rate) and Notification 41/2017-Integrated Tax (Rate)</h3>
                <p>Concessional 0.1 percent rate for inputs procured for export - availing this triggers Rule 96(10) restriction barring IGST-paid route.</p>
                <h3>Notification 13/2025-CT (17.09.2025), 14/2025-CT (17.09.2025), and CGST Instruction 6/2025</h3>
                <p>Amended Rule 91(2) for risk-based provisional refund. Notified class of taxpayers ineligible for provisional refund (DGARM-flagged risky exporters). 90 percent provisional refund mechanism confirmed and extended to inverted duty structure.</p>
                <h3>Notification 20/2024-Central Tax</h3>
                <p>Post-54th GST Council meeting simplification of Rule 96 and Rule 89 export refund procedure.</p>
                <h3>Form GSTR-1 Table 6A and Form GSTR-3B Table 3.1(b)</h3>
                <p>Table 6A reports export invoices with payment of tax including SB number, date, port code, IGST amount. Table 3.1(b) reports Outward Taxable Supplies (Zero-Rated). IGST in Table 3.1(b) must be equal to or greater than Table 6A IGST.</p>

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
                    <p class="faq-expanded__lead">Common questions about IGST-paid export refund under Rule 96 - covering shipping bill as application, EGM and ICEGATE, SB error codes, Rule 96(10) restrictions, and SB005 rectification via officer interface.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GST refund under Rule 96 for exports with IGST payment?</h3>
                        <div class="faq-expanded__a"><p>Rule 96 of the CGST Rules 2017 provides for automatic refund of IGST paid on goods exported out of India. The shipping bill electronically filed on ICEGATE is deemed to be the refund application under Rule 96(1). The application is deemed filed only when (a) the carrier files the Export General Manifest under Section 41 of the Customs Act 1962 and (b) the exporter furnishes a valid GSTR-3B with the IGST amount in Table 3.1(b). Refund is auto-credited to the registered bank account via PFMS in 7 to 15 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How does the shipping bill function as a refund application?</h3>
                        <div class="faq-expanded__a"><p>Under Rule 96(1) of the CGST Rules 2017, the shipping bill is treated as the refund application. ICES (Indian Customs EDI System) runs an automated invoice-level match against the GSTR-1 Table 6A data transmitted by GSTN once both GSTR-1 and GSTR-3B are filed. A successful match yields response code SB000 and triggers PFMS disbursement. No separate Form RFD-01 is required for goods exports under this route.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the role of EGM and ICEGATE in IGST refund?</h3>
                        <div class="faq-expanded__a"><p>EGM (Export General Manifest) is filed by the carrier (shipping line, airline) under Section 41 of the Customs Act 1962 confirming goods have left India. Without a valid EGM, the shipping bill cannot be deemed the refund application under Rule 96(1)(b), and SB002 or SB006 error codes appear. ICEGATE (https://www.icegate.gov.in) is the customs portal where shipping bills are filed and refund status is tracked in the IGST Integration Status Report under NewMIS role.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the ICEGATE error codes SB001 to SB006 and how to fix them?</h3>
                        <div class="faq-expanded__a"><p>SB000 means successfully validated. SB001 means SB number, date, or port code mismatch (fix via Form 9A amendment). SB002 means EGM not filed (follow up with shipping line). SB003 means GSTIN mismatch (fix via Form 9A). SB004 means duplicate transmission already validated (no action). SB005 means invalid invoice number (fix via Form 9A or officer interface under Customs Circular 5/2018). SB006 means gateway EGM not available for ICD shipments (file Train/Truck Summary).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When can an exporter NOT use the IGST-paid route under Rule 96(10)?</h3>
                        <div class="faq-expanded__a"><p>Rule 96(10) of the CGST Rules 2017 bars the IGST-paid route if the exporter has availed CGST/SGST/IGST drawback (only Basic Customs Duty drawback is compatible), procured inputs at the concessional 0.1 percent rate under Notification 40/2017-CT (Rate) or 41/2017-IT (Rate), or imported inputs under Advance Authorisation or EPCG. Such exporters must use the LUT route under Rule 89 instead.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does ICEGATE take to credit IGST refund?</h3>
                        <div class="faq-expanded__a"><p>Typically 7 to 15 days from the later of EGM filing or GSTR-3B filing. The pipeline is GSTN to ICES data transmission (within 2 days of GSTR-3B), ICES validation (within 5 days), PFMS scroll generation, gateway port officer approval, final scroll, and bank credit. SB000 success status can be tracked on ICEGATE login under IGST Integration Status Report. Any SB error code blocks the refund until rectified.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the difference between Rule 96 and Rule 89 export refund?</h3>
                        <div class="faq-expanded__a"><p>Rule 96 is the IGST-paid auto-refund route - shipping bill is deemed the refund application; refund of tax paid; 7 to 15 days; no separate RFD-01 for goods. Rule 89 is the LUT route - export without IGST payment; refund of accumulated ITC via manual RFD-01; 30 to 60 days; full documentation including BRC for services. Rule 96(10) bars IGST route for exporters who availed drawback, Advance Authorisation, EPCG, or concessional 0.1 percent. Rule 89 is open to all except prosecuted exporters.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How do I rectify SB005 invoice mismatch error?</h3>
                        <div class="faq-expanded__a"><p>If SB005 is due to a typo in GSTR-1, amend GSTR-1 via Table 9A (Form 9A) with correct invoice details in the next filing cycle. If SB005 is because the exporter used a separate invoice number in the shipping bill versus GSTR-1 (two-invoice scenario), Form 9A amendment is not possible after EGM is filed. The exporter must escalate to the officer interface module in ICES under Customs Circular 5/2018 dated 23.02.2018 read with Circular 8/2018 dated 23.03.2018 and Circular 5/2021 dated 17.02.2021. The gateway port customs officer manually validates and sanctions refund.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">IGST refund kaise track kare ICEGATE par?</h3>
                        <div class="faq-expanded__a"><p>ICEGATE par login karke IGST Integration Status Report dekhe NewMIS role me. Hare shipping bill ke samne SB000 to SB006 ke beech response code aata hai. SB000 matlab refund process ho raha hai - 7 se 15 din me PFMS ke through bank account me credit ho jayega. SB001 to SB006 koi error hai jise fix karna padega - typically GSTR-1 me Table 9A amendment se ya shipping line se EGM filing follow up se. SB005 sabse common error hai - invoice number mismatch.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">What if my IGST refund is rejected or stuck for over 60 days?</h3>
                        <div class="faq-expanded__a"><p>If refund is delayed beyond 60 days from the deemed filing date (later of EGM and GSTR-3B), interest at 6 percent per annum accrues under Section 56 of the CGST Act 2017. The first remedy is escalation to the gateway port Pr. Commissioner or Commissioner of Customs with supporting reconciliation. If still not resolved, an appeal lies under Section 107 of the CGST Act 2017 to the Appellate Authority within 3 months with 10 percent pre-deposit. Patron handles the entire chain.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Who can claim Rule 96 refund?</strong> Goods exporters under GST who paid IGST on the export invoice (LUT route holders use Rule 89 instead).</li>
                    <li><strong>Which form?</strong> No separate form for goods - shipping bill on ICEGATE is deemed the refund application under Rule 96(1).</li>
                    <li><strong>Which mandatory pre-conditions?</strong> EGM filed by carrier (Section 41 Customs Act 1962); GSTR-1 Table 6A and GSTR-3B Table 3.1(b) filed and matching.</li>
                    <li><strong>What is the time?</strong> 7 to 15 days auto-credit via ICEGATE and PFMS where SB000 status is achieved.</li>
                    <li><strong>What is excluded?</strong> Rule 96(10) - exporters who availed CGST/SGST/IGST drawback, AA, EPCG, or concessional 0.1 percent procurement.</li>
                    <li><strong>Most common error?</strong> SB005 invoice mismatch between GSTR-1 and shipping bill - fix via Form 9A or officer interface.</li>
                    <li><strong>Where does Patron file?</strong> ICEGATE for SB tracking; GST portal for Form 9A amendments; gateway port customs for officer interface escalation.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Rule 96 IGST Refund Procedural Deadlines</h2>
            <div class="content-text">
                
                <p>Rule 96 IGST-paid export refund has minimal statutory deadlines because the auto-refund happens fast. The recurring procedural deadlines are:</p>
                <ul>
                    <li><strong>GSTR-1 Table 6A filing</strong> - by 11th of following month (monthly filers); without filing, no refund transmission to ICES</li>
                    <li><strong>GSTR-3B Table 3.1(b) filing</strong> - by 20th of following month (monthly filers); without filing, refund deemed not filed under Rule 96(1)(b)</li>
                    <li><strong>EGM filing by carrier</strong> - before vessel/aircraft departure (Section 41 Customs Act 1962); without EGM, SB002 or SB006 error blocks refund</li>
                    <li><strong>Form 9A amendment for SB error</strong> - next monthly GSTR-1 cycle; delay = working capital lock</li>
                    <li><strong>Refund time limit under Section 54(1)</strong> - 2 years from date ship/aircraft leaves India; permanent loss of refund right</li>
                    <li><strong>Interest if refund delayed beyond 60 days</strong> - 6 percent per annum (Section 56); 9 percent for refund pursuant to appellate orders</li>
                    <li><strong>Section 107 appeal to Appellate Authority</strong> - within 3 months of refund rejection; pre-deposit 10 percent of disputed amount</li>
                    <li><strong>Section 112 appeal to GSTAT</strong> - within 3 months of Appellate Authority order; additional 10 percent pre-deposit; total cap Rs 25 crore CGST</li>
                </ul>
                <p><strong>Engage Patron Accounting for free SB error diagnostic - share SB number and ICEGATE error code, we return rectification path within 2 business hours. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IGST%20refund%20help%20under%20Rule%2096%20-%20SB%20error%20rectification." target="_blank">WhatsApp us now</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's IGST Refund Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">GST refund of IGST paid on exports of goods under Rule 96 of the CGST Rules 2017 is the fastest and simplest GST refund route by design - the shipping bill on ICEGATE is deemed the refund application, and PFMS auto-credits the bank within 7 to 15 days when SB000 status is achieved. The complexity is entirely in execution: SB001 to SB006 error codes block roughly 15 to 25 percent of refund applications and require either Form 9A amendment in GSTR-1 or officer interface escalation under Customs Circular 5/2018 + 8/2018 + 5/2021.</p>
                <p style="color:rgba(255,255,255,0.92);">Rule 96(10) carves out exporters who availed drawback, Advance Authorisation, EPCG, or concessional 0.1 percent procurement under Notification 40/2017-CT (Rate) and 41/2017-IT (Rate) - they must use the LUT route under Rule 89 instead. Notification 14/2025-Central Tax further bars DGARM-flagged risky exporters from provisional refund. Mis-routing under Rule 96(10) triggers Section 73 demand notices that recover the IGST refund credited plus 18 percent interest.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP brings 15+ years of GST refund, customs Rule 96, ICEGATE error code rectification, and EGM reconciliation experience across 200+ Indian exporters in pharma, engineering, IT, gems and jewellery, textile, agro, and chemicals - with four physical offices in Pune, Mumbai, Delhi, and Gurugram. Exporters gain CA-led pre-EGM reconciliation that prevents SB errors, expert officer interface escalation for stuck SB005 cases, and bulk recovery of held-up refunds from past 2 financial years on a success-fee model.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20on%20Exports%20With%20IGST%20Payment%20under%20Rule%2096.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20on%20Exports%20With%20IGST%20Payment&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20refund%20services%20for%20IGST-paid%20exports%20under%20Rule%2096%20-%20ICEGATE%20SB%20error%20rectification%20and%20held-up%20refund%20recovery.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related GST and Refund Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end GST refund coverage - from Rule 96 IGST-paid auto-refund through to GSTAT Section 112 escalation for refund rejection appeals.</p>
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for GST Refund - Exports With IGST Payment</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-notice/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 7 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 7 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>Reviewed every 3 months under Tier 1 freshness cycle. Triggers for earlier review: any CBIC instruction, ICEGATE advisory, customs circular under Rule 96, or notification amending Rule 96(10) or DGARM risk parameters.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>


@include('layouts.itr-season-strip')
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
        var phoneVal = phoneInput.value.trim();
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
    var tocBtns = Array.prototype.slice.call(document.querySelectorAll('.toc-pill'));
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


<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection