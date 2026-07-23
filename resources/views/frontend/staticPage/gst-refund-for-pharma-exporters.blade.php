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
    <title>GST Refund for Pharma Exporters — LUT, IGST, IDS Routes</title>
    <meta name="description" content="GST refund for pharma exporters under LUT and Rule 89(5). API 18% to formulation 5% IDS. CDSCO certification. CGST Instruction 6/2025. Rs 25,000+.">
    <link rel="canonical" href="/gst-refund-for-pharma-exporters">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund for Pharma Exporters — LUT, IGST, IDS Routes">
    <meta property="og:description" content="GST refund for pharma exporters under LUT and Rule 89(5). API 18% to formulation 5% IDS. CDSCO certification. CGST Instruction 6/2025. Rs 25,000+.">
    <meta property="og:url" content="/gst-refund-for-pharma-exporters/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-for-pharma-exporters-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund for Pharma Exporters — LUT, IGST, IDS Routes">
    <meta name="twitter:description" content="GST refund for pharma exporters under LUT and Rule 89(5). API 18% to formulation 5% IDS. CDSCO certification. CGST Instruction 6/2025. Rs 25,000+.">
    <meta name="twitter:image" content="/images/gst-refund-for-pharma-exporters-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-for-pharma-exporters/#breadcrumb",
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
          "name": "GST Refund for Pharma Exporters",
          "item": "/gst-refund-for-pharma-exporters/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-for-pharma-exporters/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is GST refund for pharma exporters and what are the available routes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian pharma exporters can claim GST refund through 6 distinct revenue routes - LUT goods exports under Rule 96A (Form RFD-11 plus RFD-01 with Statement 3), IGST-paid exports under Rule 96 (automatic via Shipping Bill auto-flow on ICEGATE), IDS API-to-formulation under Rule 89(5) with Statement 1A, IDS bulk-drug-to-formulation for integrated manufacturers, deemed exports under EOU and Advance Authorisation per Notification 48/2017-CT with Statement 5, and international tender supplies (UN, Global Fund, Gavi, UNICEF, PEPFAR) typically structured as LUT exports. Most exporters use 2 to 4 routes simultaneously."
          }
        },
        {
          "@type": "Question",
          "name": "How did GST 2.0 (22 September 2025) change pharma IDS for exporters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 56th GST Council on 3 September 2025 recommended GST 2.0 rate rationalisation effective 22 September 2025. Most formulations under HSN 3003 and 3004 moved from 12 percent to 5 percent (Schedule I of Notification 1/2017-CT(R)); APIs maintained at 18 percent (Schedule III). The IDS gap widened from 6 percentage points (12 to 5) to 13 percentage points (18 to 5) - more than doubling refund quantum for typical formulation manufacturers. Combined with CGST Instruction 6/2025 90 percent provisional refund within 7 days of RFD-02, this provides material working capital relief."
          }
        },
        {
          "@type": "Question",
          "name": "Pharma exporter ka GST refund kaise milta hai - LUT route ya IDS route?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian pharma exporters multiple routes use karte hain. Most common 2 routes - Route 1 LUT exports (Form RFD-11 LUT plus RFD-01 Statement 3 quarterly) for foreign buyers ko formulation/API export, and Route 3 IDS API-to-formulation (Rule 89(5) Statement 1A) for domestic formulation sales. GST 2.0 22 September 2025 ke baad APIs 18 percent pe maintained but formulations 5 percent me chale gaye - IDS gap 13 percentage points ho gaya (pehle 6 tha). Working capital ke liye dono routes use karna optimal. CGST Instruction 6/2025 ke baad 90 percent provisional refund 7 din me mil jata hai pharma sector ko."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between LUT export and IDS API-to-formulation refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LUT export (Route 1) - export of formulations or APIs to foreign buyers under Form RFD-11; refund of accumulated ITC under Section 54(3)(i) using Rule 89(4) Net ITC formula which includes both inputs and input services on zero-rated supplies. IDS API-to-formulation (Route 3) - domestic sale of formulations made from APIs where input rate exceeds output rate; refund under Section 54(3)(ii) using Rule 89(5) formula where Net ITC is INPUTS ONLY post VKC Footsteps SC 2021 (excludes input services and capital goods). Different formulas, different documentary requirements (Statement 3 vs Statement 1A)."
          }
        },
        {
          "@type": "Question",
          "name": "Are CDSCO export certification documents required for GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CDSCO documents are required for valid export shipment under Drugs and Cosmetics Act 1940 read with Rules 1945 but they do NOT directly affect GST refund computation. The required documents include Form 9 (wholesale licence), Form 13 (manufacturing licence), Form 28-D (export NOC for drugs not approved in India), Certificate of Pharmaceutical Product (CoPP) in WHO format, WHO-GMP certification, and Free Sale Certificate. Patron coordinates these through SUGAM portal parallel to GST refund. Where CDSCO documentation has gaps, shipping bill clearance is delayed - downstream impact on GST refund cycle."
          }
        },
        {
          "@type": "Question",
          "name": "How do international tender supplies (UN, Global Fund, Gavi) qualify for refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "International tender supplies to UN procurement agencies (UNICEF, UNDP), Global Fund (HIV/TB/malaria drugs), Gavi (vaccines), PEPFAR, and foreign Ministry of Health tenders are treated as exports under Section 16(1)(a) IGST Act when shipped outside India with foreign exchange realisation. The route is typically LUT (Form RFD-11 plus RFD-01 with Statement 3) since tender prices include all-inclusive pricing. Documents include tender award letter, structured invoice per tender terms, FIRC realisation, country-specific export certifications, and CDSCO Form 28-D for unapproved-in-India drugs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 7-day refund window for pharma sector?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pharmaceutical sector is one of four priority sectors (textiles, chemicals, pharmaceuticals, fertilisers) identified in CGST Instruction 6/2025 dated 3 October 2025 (read with Notification 13/2025-CT) for accelerated refund processing. Low-risk applicants assessed under 8-factor risk audit are entitled to 90 percent provisional refund (Form RFD-04) within 7 days of RFD-02 acknowledgement under Rule 91(2). The 8 risk factors include clean GSTR filing record, supplier compliance score, GSTR-2B match rate, no DRC-03 in pendency, complete documentation, no past adverse orders, consistent claim pattern, registered tenure."
          }
        },
        {
          "@type": "Question",
          "name": "Can deemed export benefits under EOU or Advance Authorisation be combined with refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Section 147 of CGST Act 2017 read with Notification 48/2017-CT and Notification 49/2017-CT provides deemed export framework for supplies to EOU, Advance Authorisation holder, and EPCG holder. Either the supplier or the recipient can claim refund (election-based). For pharma the common pattern is API supplier to formulation EOU exporter. Statement 5/5A/5B with Form A intimation and Form B receipt evidence. Important - same supply cannot be claimed twice; election documentation between supplier and recipient prevents disputes. Patron coordinates the election process."
          }
        },
        {
          "@type": "Question",
          "name": "What documentation is needed for pharma cluster (Hyderabad, Ahmedabad, Vizag) refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard pharma cluster documentation - Form GST RFD-01 and RFD-11 LUT for exports; Statement 1A (IDS), Statement 3 (LUT exports), Statement 5 (deemed exports) per route; GSTR-1, GSTR-3B, GSTR-2B reconciliation; HSN-wise rate reconciliation under post-GST-2.0 Schedule I (5%) and Schedule III (18%); shipping bill, BRC, EGM for goods exports; FIRC for international tender supplies; CDSCO Form 28-D, CoPP, WHO-GMP for unapproved-in-India drugs; tender award letters for international supplies; supplier-recipient election evidence for deemed exports; PFMS bank account validation. Cluster-specific - Hyderabad/Vizag bulk drug exports prioritise Form 28-D; Mumbai/Tarapur formulation exports prioritise CoPP and tender documentation."
          }
        },
        {
          "@type": "Question",
          "name": "What if my pharma refund was rejected on HSN classification or VKC Footsteps grounds?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two common rejection grounds for pharma refunds. HSN classification dispute - Department reclassifies medicament as nutraceutical, cosmetic, or food supplement causing different rate. Patron cure - CDSCO Form 13 manufacturing licence as drug, drug registration evidence, therapeutic indication documentation, technical opinion if needed. VKC Footsteps SC 2021 grounds - Department rejects Net ITC inclusion of input services like freight, R&D, analytical charges. Patron cure - re-compute Net ITC excluding input services per Rule 89(5); include input services only for Rule 89(4) LUT exports. Section 107 first appeal within 3 months with appropriate citation framework. Settlement rate above 80 percent."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-for-pharma-exporters/#service",
      "name": "GST Refund for Pharma Exporters",
      "description": "Patron Accounting LLP handles GST refund for Indian pharma exporters across 6 revenue routes - LUT goods exports under Rule 96A, IGST-paid exports under Rule 96, IDS API-to-formulation under Rule 89(5) post GST 2.0 rate rationalisation effective 22.09.2025, IDS bulk-drug-to-formulation, deemed exports under EOU and Advance Authorisation per Notification 48/2017-CT, and international tender supplies (UN procurement, Global Fund, Gavi, UNICEF, PEPFAR). Coverage includes CDSCO export documentation coordination (Form 9, Form 13, Form 28-D, CoPP, WHO-GMP) and CGST Instruction 6/2025 7-day provisional refund.",
      "serviceType": "GST Refund Filing Service",
      "url": "/gst-refund-for-pharma-exporters/",
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
                        GST Refund for Pharma Exporters
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form RFD-11 LUT, RFD-01 with Statement 1A/3/5, FIRC/BRC, shipping bill/EGM, CDSCO Form 28-D NOC, CoPP, WHO-GMP, CDSCO Form 9/13</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 25,000 per quarter for single-route pharma exporter plus 18 percent GST</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any GST-registered pharma manufacturer, formulation maker, API producer with exports or IDS accumulation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Refund filing 7-14 days; sanction 22-60 days under CGST Instruction 6/2025 7-day pharma window</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of Pharma Sector GST Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Pharma%20Exporters%20-%20LUT%2C%20IDS%2C%20deemed%20exports%2C%20or%20international%20tender." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Pharma Exporter Refund'/>
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
                                <option value="gst-refund-for-pharma-exporters" selected>Pharma Exporter Refund</option>
                                <option value="gst-refund">GST Refund</option>
                                <option value="gstat-appeal-exporters">GSTAT Appeal - Exporters</option>
                                <option value="gstat-appeal-filing">GSTAT Appeal Filing</option>
                                <option value="gst-registration">GST Registration</option>
                                <option value="gst-returns">GST Returns</option>
                                <option value="gst-annual-returns">GST Annual Returns</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron recovered Rs 4.5 crore quarterly multi-route refund for our Hyderabad integrated pharma manufacturing in March 2026 - across LUT exports, IGST exports, IDS API-to-formulation, deemed exports to EOU, and Global Fund tender supply. Provisional 90 percent Rs 4.05 crore disbursed within 22 days of ARN under CGST Instruction 6/2025 pharma 7-day window. CDSCO documentation parallel coordination ensured zero shipment delay.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rakesh Kapoor</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO / Hyderabad Integrated Pharma Manufacturer</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Our Vizag API exporting unit had IDS gap post GST 2.0 of 13 percent versus 6 percent earlier - more than doubled our quarterly refund quantum. Patron's GST 2.0 impact assessment and CGST Instruction 6/2025 risk optimisation got us 7-day provisional sanction every cycle. Material working capital impact.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director / Vizag API Bulk Drug Manufacturer</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a Mumbai formulation exporter to UN procurement and Global Fund, our tender documentation was scattered across multiple agencies. Patron's tender-specific invoicing, FIRC reconciliation, CDSCO Form 28-D coordination for unapproved-in-India drugs, and CoPP in WHO format procurement - integrated. Rs 1.2 crore international tender refund cycle sanctioned in 40 days end-to-end.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO / Mumbai Formulation Exporter to International Tenders</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Pune branded generic formulation exporter had a refund rejection on VKC Footsteps grounds - Department challenged Net ITC inclusion of R&D and analytical services. Patron's appeal pack with Rule 89(4) vs Rule 89(5) distinction for LUT vs IDS routes, Section 107 first appeal pack, got Rs 78 lakh sanctioned. Multi-route discipline now standard practice.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head / Pune Branded Generic Formulation Exporter</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Bengaluru biosimilar manufacturer had GST 2.0 transition issues - invoices straddling 22.09.2025 with rate change. Patron's transition framework, ITC reconciliation across the change date, GSTR-1 / GSTR-3B adjustments, and post-transition refund optimisation got Rs 2.1 crore Gavi vaccine tender refund cleanly through 7-day provisional path. CDSCO CoPP renewal coordinated parallel.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Gaur</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director / Bengaluru Biosimilar Manufacturer (Gavi Vaccine Supplier)</div>
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
                    <p>From LUT filing through to multi-route quarterly refund, GST 2.0 IDS gap optimisation, CDSCO documentation parallel coordination, and international tender refund - Patron handles the full pharma exporter refund pipeline with CA-led discipline across all 6 revenue routes.</p>
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
                <a href="#what-section" class="toc-pill">6 Revenue Routes</a>
                <a href="#who-section" class="toc-pill">Who Needs This</a>
                <a href="#services-section" class="toc-pill">What We Deliver</a>
                <a href="#procedure-section" class="toc-pill">8 Sequential Steps</a>
                <a href="#documents-section" class="toc-pill">Documents Required</a>
                <a href="#challenges-section" class="toc-pill">Challenges and Solutions</a>
                <a href="#fees-section" class="toc-pill">Fees and Pricing</a>
                <a href="#timeline-section" class="toc-pill">Timeline</a>
                <a href="#benefits-section" class="toc-pill">Why CA-Led</a>
                <a href="#comparison-section" class="toc-pill">LUT vs IGST vs IDS</a>
                <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pharma Exporter GST Refund Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Pharma Exporter Refund Services at a Glance</strong></p>
                    <p>Indian pharma exporters operate across 6 distinct GST refund routes - LUT goods exports under Rule 96A, IGST-paid exports under Rule 96, IDS API-to-formulation under Rule 89(5) (now 18 percent input to 5 percent output post GST 2.0), IDS bulk-drug-to-formulation, deemed exports under EOU and Advance Authorisation, and international tender supplies. The 56th GST Council on 3 September 2025 recommended GST 2.0 effective 22 September 2025 - moving formulations from 12 to 5 percent while APIs remained at 18 percent, widening IDS gap to 13 points. CGST Instruction 6/2025 dated 3 October 2025 extends 90 percent provisional refund within 7 days of RFD-02 to IDS. Pharma is one of 4 priority sectors with 7-day refund window.</p>
                </div>
                <p>The Indian pharmaceutical industry is the world's third-largest by volume and the largest provider of generic medicines globally - covering bulk drugs (Active Pharmaceutical Ingredients or APIs), formulations, biologics and biosimilars, vaccines, medical devices, nutraceuticals, and ayurvedic preparations. Major manufacturing clusters include Hyderabad and Visakhapatnam (bulk drug hubs accounting for over 40 percent of national API production), Ahmedabad-Vatva-Ankleshwar-Vapi (intermediates and APIs), Mumbai-Tarapur (formulations and biologics), Sikkim/HP/Uttarakhand (formulation excise zones), Pune-Goa (Sun Pharma, Lupin, Cipla), Chennai-Hosur (formulations and CMO), and Bengaluru (biotech and biosimilars). The sector exports to over 200 countries and serves international tenders from WHO procurement, Global Fund, Gavi, UNICEF, PEPFAR, and foreign Ministry of Health bilateral arrangements.</p>
                <p>GST refund opportunities span 6 distinct revenue routes - LUT goods exports under Rule 96A, IGST-paid goods exports under Rule 96, inverted duty structure (IDS) API-to-formulation under Rule 89(5) with Statement 1A (dominant cash route post the 56th GST Council recommendation effective 22 September 2025), IDS bulk-drug-to-formulation for integrated manufacturers, deemed exports under EOU and Advance Authorisation per Notification 48/2017-CT and Notification 49/2017-CT, and international tender supplies (UN, Global Fund, Gavi, UNICEF, PEPFAR). The widened IDS gap from 6 to 13 percentage points (18 percent on APIs to 5 percent on formulations post GST 2.0) more than doubles ITC accumulation for typical formulation manufacturers. CGST Instruction 6/2025 dated 3 October 2025 layers 90 percent provisional refund within 7 days of RFD-02 onto this larger refund pool - Patron Accounting LLP serves 50+ active pharma clients across all major clusters.<div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Foundational Provision</td><td>Section 16(1) IGST Act + Section 54(3) CGST Act + Rule 89(4) / 89(5) CGST Rules</td></tr>
                            <tr><td>LUT Route</td><td>Form GST RFD-11 under Rule 96A; valid full FY; renewed annually before 31 March</td></tr>
                            <tr><td>IGST Route</td><td>Pay IGST on export; refund under Rule 96 via Shipping Bill auto-flow on ICEGATE</td></tr>
                            <tr><td>IDS Route</td><td>Rule 89(5) Net ITC formula; inputs only post VKC Footsteps SC 2021</td></tr>
                            <tr><td>GST 2.0 Impact</td><td>Effective 22.09.2025 - formulations 12% to 5%; APIs maintained at 18%; IDS gap widened from 6 to 13 percentage points</td></tr>
                            <tr><td>7-Day Refund Window</td><td>Pharma is one of 4 priority sectors (textiles, chemicals, pharma, fertilisers)</td></tr>
                            <tr><td>Provisional Refund</td><td>CGST Instruction 6/2025 (03.10.2025) - 90 percent in 7 days of RFD-02 for low-risk applicants</td></tr>
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
                <h2 class="section-title">6 Pharma Refund Revenue Routes</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Patron's pharma refund practice maps every export and IDS opportunity to one of 6 revenue routes. Each route has distinct documentation, formula, and timeline. Most pharma exporters operate 2 to 4 routes simultaneously - the diagnostic begins with route allocation based on product mix (API vs formulation), customer profile (foreign buyer vs domestic vs international tender), and integration profile (standalone vs EOU vs integrated).</p>
                    <p>For primary source materials see the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC notifications</a>, <a href="https://cdscoonline.gov.in" target="_blank" rel="noopener">CDSCO SUGAM portal</a>, <a href="https://pharmexcil.com" target="_blank" rel="noopener">Pharmexcil</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>
                    <h3 style="margin-top:24px;">6 Revenue Route Matrix</h3>
                    <div class="table-responsive-wrapper">
                        <table>
                            <thead><tr><th>Route</th><th>Statutory Basis</th><th>Form / Statement</th></tr></thead>
                            <tbody>
                                <tr><td>Route 1 - LUT Goods Exports</td><td>Section 16(1)(a) IGST + Section 54(3)(i) CGST + Rule 96A</td><td>Form RFD-11 LUT (annual) + Form RFD-01 with Statement 3</td></tr>
                                <tr><td>Route 2 - IGST-Paid Goods Exports</td><td>Section 16(3)(b) IGST + Rule 96</td><td>Shipping Bill auto-flow via ICEGATE (no RFD-01)</td></tr>
                                <tr><td>Route 3 - IDS API-to-Formulation</td><td>Section 54(3)(ii) CGST + Rule 89(5)</td><td>Form RFD-01 with Statement 1A; Net ITC inputs only</td></tr>
                                <tr><td>Route 4 - IDS Bulk-Drug-to-Formulation (Integrated)</td><td>Section 54(3)(ii) CGST + Rule 89(5)</td><td>Statement 1A; internal cost-allocation methodology</td></tr>
                                <tr><td>Route 5 - Deemed Exports (EOU / Advance Authorisation)</td><td>Section 147 CGST + Notification 48/2017-CT + Notification 49/2017-CT</td><td>Form RFD-01 with Statement 5/5A/5B; Form A intimation, Form B receipt</td></tr>
                                <tr><td>Route 6 - International Tender Supplies (UN/Global Fund/Gavi)</td><td>Section 16(1)(a) IGST + Section 54(3)(i) CGST + Rule 96A</td><td>Form RFD-11 LUT + RFD-01 with Statement 3; tender award letter; CDSCO Form 28-D</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Pharma Exporter Refund:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;">
                        <table>
                            <thead><tr><th>Term</th><th>Plain Meaning</th></tr></thead>
                            <tbody>
                                <tr><td>Section 16(1) IGST Act 2017</td><td>Zero-rated supply framework - exports and SEZ supplies</td></tr>
                                <tr><td>Section 54(3) CGST Act 2017</td><td>Refund of accumulated ITC - (i) zero-rated supplies; (ii) inverted duty structure</td></tr>
                                <tr><td>Rule 89(4) CGST Rules</td><td>Net ITC formula for accumulated ITC refund on zero-rated supplies (includes input services)</td></tr>
                                <tr><td>Rule 89(5) CGST Rules</td><td>FOUNDATIONAL - IDS refund formula; inputs only post VKC Footsteps SC 2021</td></tr>
                                <tr><td>Rule 96 / Rule 96A</td><td>Rule 96 - IGST-paid export refund via Shipping Bill auto-flow; Rule 96A - LUT framework</td></tr>
                                <tr><td>Statement 1A / 3 / 5</td><td>Statement 1A - IDS (Rule 89(2)(h)); Statement 3 - goods exports (Rule 89(2)(b)); Statement 5 - deemed exports (Rule 89(2)(g))</td></tr>
                                <tr><td>GST 2.0 (Effective 22.09.2025)</td><td>56th GST Council rate rationalisation - formulations 12% to 5%; APIs maintained at 18%; IDS gap widened from 6 to 13 percentage points</td></tr>
                                <tr><td>CGST Instruction 6/2025 (03.10.2025)</td><td>90 percent provisional refund extension to IDS effective 01.10.2025; pharma is 1 of 4 priority sectors with 7-day window</td></tr>
                                <tr><td>HSN Chapter 30</td><td>Pharmaceutical products - medicaments; HSN 3003 mixed medicaments; HSN 3004 measured doses/retail packing</td></tr>
                                <tr><td>HSN 2941 / 2933 / 2934 / 2935</td><td>API categories - antibiotics (2941), heterocyclic compounds (2933/2934), sulphonamides (2935) at 18%</td></tr>
                                <tr><td>CDSCO</td><td>Central Drugs Standard Control Organization - drug regulator under Drugs and Cosmetics Act 1940</td></tr>
                                <tr><td>CDSCO Form 28-D</td><td>Export NOC for drugs not approved for use in India; issued by Drugs Controller General of India via SUGAM portal</td></tr>
                                <tr><td>CoPP / WHO-GMP</td><td>Certificate of Pharmaceutical Product (WHO format export certification) and WHO Good Manufacturing Practices certification</td></tr>
                                <tr><td>EOU / Advance Authorisation</td><td>Deemed export recipient categories under Notification 48/2017-CT</td></tr>
                                <tr><td>Global Fund / Gavi / PEPFAR</td><td>International procurement agencies - HIV/TB/malaria drugs, vaccines, ARV procurement</td></tr>
                                <tr><td>VKC Footsteps SC 2021</td><td>FOUNDATIONAL - Net ITC narrowing to inputs only for Rule 89(5) IDS refund</td></tr>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Pharma Exporter Refund</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Routes</span>
                        <strong>6 Pharma Revenue Routes</strong>
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
            <h2 class="section-title">Who Needs This Service - 7 Pharma Cluster Profiles</h2>
            <div class="content-text">
                
                <p>The service applies to Indian pharma manufacturers and exporters across 7 major manufacturing clusters and 6 distinct revenue routes. Each cluster has dominant route profile.</p>
                <ul>
                    <li><strong>Hyderabad and Vizag (Telangana, Andhra Pradesh)</strong> - bulk drug / API hub accounting for over 40 percent of national API production; dominant routes - LUT API exports (Route 1), IDS where formulation arm exists (Route 3 and 4); quarterly Rs 50 lakh to Rs 5 crore typical</li>
                    <li><strong>Ahmedabad / Vatva / Ankleshwar / Vapi (Gujarat)</strong> - intermediates, API, agrochemicals overlap; dominant routes - LUT exports (Route 1), deemed exports to EOU formulation manufacturers (Route 5); quarterly Rs 30 lakh to Rs 3 crore typical</li>
                    <li><strong>Mumbai / Tarapur / Boisar (Maharashtra)</strong> - formulations, biologics, vaccines; dominant routes - LUT formulation exports (Route 1), IDS (Route 3), international tenders (Route 6); quarterly Rs 25 lakh to Rs 4 crore typical</li>
                    <li><strong>Sikkim / Himachal Pradesh / Uttarakhand (Northern excise zones)</strong> - formulations in legacy excise zone manufacturing units; significant IDS post GST 2.0; quarterly Rs 15 lakh to Rs 1.5 crore typical</li>
                    <li><strong>Pune / Goa (Maharashtra, Goa)</strong> - formulations with Sun Pharma, Lupin, Cipla anchors; premium branded generic exports plus major Global Fund and Gavi suppliers; quarterly Rs 30 lakh to Rs 5 crore typical</li>
                    <li><strong>Chennai / Hosur (Tamil Nadu)</strong> - formulations, biotech, contract manufacturing; mid-size formulation exports with CMO arrangements; quarterly Rs 20 lakh to Rs 2 crore typical</li>
                    <li><strong>Bengaluru (Karnataka)</strong> - biotech, biosimilars, vaccines; biosimilar and vaccine exports with UN procurement as major channel; quarterly Rs 25 lakh to Rs 3 crore typical</li>
                </ul>
                <p style="margin-top:16px;"><strong>Threshold and pre-condition:</strong> GST registration is mandatory once aggregate turnover crosses Rs 40 lakh for goods suppliers (Rs 20 lakh in Special Category States) under Section 22 CGST Act. If the pharma manufacturer is not registered, complete <a href="/gst-registration/">GST registration</a> before claiming refund. LUT (Form RFD-11) under Rule 96A is required for export without IGST. CDSCO Form 13 manufacturing licence under Drugs and Cosmetics Act 1940 read with Rules 1945 is required for valid manufacturing. CDSCO Form 28-D NOC is required for export of drugs not approved for use in India.</p>

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
                        <tr><td>Multi-Route Pharma Refund Pipeline (All 6 Routes)</td><td>LUT goods exports under Rule 96A, IGST-paid exports under Rule 96, IDS API-to-formulation under Rule 89(5), IDS bulk-drug-to-formulation, deemed exports under EOU and Advance Authorisation, and international tender supplies. Quarterly refund cycle covering all applicable routes; consolidated reporting. End-to-end 7 to 14 days from data share to ARN.</td></tr>
                        <tr><td>GST 2.0 Rate Rationalisation Impact Assessment</td><td>Post-22.09.2025 GST 2.0 - IDS gap widened from 6 to 13 percentage points for most formulation manufacturers. Patron quantifies new refund quantum, recalibrates working capital model, restructures pricing and ITC absorption strategy, and ensures CGST Instruction 6/2025 90 percent provisional refund optimisation.</td></tr>
                        <tr><td>CDSCO Export Documentation Coordination</td><td>Parallel CDSCO compliance - Form 9 wholesale licence, Form 13 manufacturing licence, Form 28-D export NOC for drugs not approved in India, Certificate of Pharmaceutical Product (CoPP) in WHO format, WHO-GMP certification, Free Sale Certificate. SUGAM portal submission end-to-end.</td></tr>
                        <tr><td>International Tender Documentation and Refund Coordination</td><td>UN procurement, Global Fund (HIV/TB/malaria), Gavi (vaccines), UNICEF, PEPFAR, foreign Ministry of Health tenders - tender award letter integration, structured invoicing per tender terms, FIRC realisation tracking, CDSCO Form 28-D for unapproved drugs, country-specific export certifications, LUT route refund filing.</td></tr>
                        <tr><td>Cluster-Specific Refund Optimisation</td><td>7-cluster framework covering Hyderabad/Vizag bulk drug, Ahmedabad/Ankleshwar/Vapi intermediates, Mumbai/Tarapur formulations, Sikkim/HP/Uttarakhand excise zones, Pune/Goa formulations, Chennai/Hosur formulations, and Bengaluru biotech. Each cluster has distinct dominant route mix; Patron pipelines tuned per cluster.</td></tr>
                        <tr><td>Section 107 Appeal for Pharma-Specific Rejections</td><td>HSN classification rejections (medicament vs nutraceutical vs cosmetic), CoPP/CDSCO documentary issues, deemed export categorisation, international tender structure, VKC Footsteps Net ITC computation. APL-01 with 10 percent pre-deposit, defence pack with citation framework. Settlement rate above 80 percent.</td></tr>
                        <tr><td>VKC Footsteps Net ITC Discipline for Rule 89(5)</td><td>For IDS routes - Net ITC restricted to INPUTS ONLY post VKC Footsteps SC 2021 (excludes input services like freight, R&D, analytical charges and capital goods). Patron's discipline ensures correct Net ITC computation per route - inputs+services for Rule 89(4) LUT vs inputs only for Rule 89(5) IDS.</td></tr>

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
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron's pharma refund pipeline runs through 8 sequential steps. Each step is anchored to a specific section, rule, notification, or circular - allowing pharma finance teams to audit each handoff with documentary clarity.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Route Identification and Multi-Route Allocation</h3>
                    <p class="step-description">Identify which of the 6 revenue routes apply - LUT exports, IGST exports, IDS API-to-formulation, IDS bulk-drug-to-formulation, deemed exports (EOU/AA), international tenders (UN/Global Fund/Gavi). Most pharma exporters operate 2 to 4 routes. Allocate quarterly turnover and ITC to each route. Identify priority by quantum and ease of recovery. (Day 1 to Day 2.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>6 routes mapped to turnover</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Most use 2-4 routes simultaneously</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Priority by quantum</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="4" y="12" width="36" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="22" y="22" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">LUT</text><text x="22" y="30" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">R1</text><rect x="44" y="12" width="36" height="22" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="62" y="22" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IGST</text><text x="62" y="30" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">R2</text><rect x="84" y="12" width="32" height="22" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="100" y="22" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">IDS</text><text x="100" y="30" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">R3</text><rect x="4" y="40" width="36" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="22" y="50" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Bulk</text><text x="22" y="58" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">R4</text><rect x="44" y="40" width="36" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="62" y="50" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">EOU</text><text x="62" y="58" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">R5</text><rect x="84" y="40" width="32" height="22" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="100" y="50" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">UN</text><text x="100" y="58" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">R6</text><text x="60" y="80" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">6 Route Map</text></svg>
                        </div>
                        <span class="illustration-label">Routes Identified</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">LUT Filing in Form RFD-11 (Annual)</h3>
                    <p class="step-description">File Form GST RFD-11 LUT under Rule 96A on the GST portal annually for FY 2026-27 and subsequent years. Standard 3-business-hour turnaround. Annual renewal calendar maintained; pre-31 March reminder. Witness coordination, authorised signatory designation, DSC/EVC submission. (Day 1 to Day 2.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form RFD-11 portal filing</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual FY 2026-27</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 96A pre-31 March</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-11 LUT</text><rect x="28" y="38" width="64" height="9" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="45" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Annual FY</text><rect x="28" y="49" width="64" height="9" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="56" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Rule 96A</text><text x="60" y="72" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">No IGST on export</text></svg>
                        </div>
                        <span class="illustration-label">LUT Filed</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">HSN Classification and Rate Reconciliation Post GST 2.0</h3>
                    <p class="step-description">Identify HSN codes for inputs (APIs HSN 2941, intermediates HSN 2933/2934/2935, excipients, packaging) and outputs (formulations HSN 3003/3004, biologics HSN 30). Confirm GST rate per HSN post-22.09.2025 GST 2.0 - APIs 18%, formulations 5%. Identify IDS situations. Map to Schedule I (5%) and Schedule III (18%) of Notification 1/2017-CT(R). (Day 3 to Day 4.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN Chapter 30 mapping</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule I (5%) vs III (18%)</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Post GST 2.0 rates</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="6" y="20" width="50" height="22" rx="3" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="31" y="32" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">APIs 18%</text><text x="31" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">HSN 2941</text><rect x="62" y="20" width="50" height="22" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="87" y="32" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Form. 5%</text><text x="87" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">HSN 3003/3004</text><text x="60" y="56" font-size="11" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">IDS gap 13%</text><text x="60" y="76" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">GST 2.0 22.09.2025</text></svg>
                        </div>
                        <span class="illustration-label">HSN Mapped</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Statement 1A / 3 / 5 Preparation per Route</h3>
                    <p class="step-description">For LUT exports - Statement 3 with shipping bill, BRC, EGM (Rule 89(2)(b)). For IGST exports - shipping bill auto-flow (no Statement). For IDS - Statement 1A with inputs/outputs invoice register (Rule 89(2)(h)). For deemed exports - Statement 5/5A/5B with Form A intimation and Form B receipt evidence (Rule 89(2)(g)). (Day 5 to Day 8.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(2)(b)/(h)/(g) Statements</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per-route documentation</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cross-route reconciliation</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Statement 1A/3/5</text><line x1="20" y1="34" x2="100" y2="34" stroke="#F5A623" stroke-width="1"/><text x="30" y="46" font-size="5" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">1A=IDS</text><text x="60" y="46" font-size="5" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">3=Goods</text><text x="90" y="46" font-size="5" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">5=Deemed</text><text x="60" y="62" font-size="6" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">Rule 89(2)(h)(b)(g)</text><text x="60" y="78" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Per-route prep</text></svg>
                        </div>
                        <span class="illustration-label">Statements Built</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Net ITC Computation per Route</h3>
                    <p class="step-description">For LUT exports under Rule 89(4) - Net ITC includes all eligible inputs AND input services on zero-rated supplies. For IDS under Rule 89(5) - Net ITC is INPUTS ONLY post VKC Footsteps SC 2021 (excludes input services and capital goods). Different formulas applied per route. Reconcile to GSTR-2B. (Day 8 to Day 9.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(4) - inputs + services</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(5) - inputs only</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>VKC Footsteps SC 2021</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="80" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="26" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Net ITC per Route</text><text x="60" y="44" font-size="7" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">Rule 89(4): inputs+services</text><text x="60" y="58" font-size="7" font-weight="700" fill="#E8712C" text-anchor="middle" font-family="Arial">Rule 89(5): inputs only</text><text x="60" y="78" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">VKC Footsteps SC 2021</text></svg>
                        </div>
                        <span class="illustration-label">Net ITC Calculated</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">CDSCO Documentation Parallel Coordination</h3>
                    <p class="step-description">Where international tender or unapproved-in-India drug export is involved - parallel CDSCO documentation including Form 28-D NOC, CoPP procurement, WHO-GMP currency check, country-specific certifications. SUGAM portal coordination. Documentation maintained in refund file though not directly part of refund computation. (Day 5 to Day 10.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 28-D NOC + CoPP</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>WHO-GMP + Free Sale Certificate</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SUGAM portal end-to-end</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="30" font-size="10" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">CDSCO Docs</text><rect x="28" y="38" width="64" height="9" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="45" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Form 28-D NOC</text><rect x="28" y="49" width="64" height="9" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="56" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">CoPP / WHO-GMP</text><text x="60" y="74" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">SUGAM portal</text></svg>
                        </div>
                        <span class="illustration-label">CDSCO Coordinated</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Form RFD-01 Portal Filing per Route</h3>
                    <p class="step-description">Login to GST portal. Services > Refunds > Application for Refund. Select appropriate refund category per route. Upload relevant Statement (1A, 3, 5). Upload supporting documents. Submit with DSC/EVC. Multi-route filings may require sequential application for separate categories. ARN generated. (Day 11 to Day 12.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form RFD-01 per route</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statement upload per category</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN generated</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-01</text><rect x="28" y="40" width="64" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="60" y="47" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Per-route filing</text><rect x="28" y="51" width="64" height="9" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><text x="60" y="58" font-size="6" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">DSC/EVC</text><text x="60" y="74" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">ARN generated</text></svg>
                        </div>
                        <span class="illustration-label">RFD-01 Filed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">RFD-02 Acknowledgement and 7-Day Provisional Refund</h3>
                    <p class="step-description">RFD-02 expected within 15 days of ARN under Rule 90(2). CGST Instruction 6/2025 8-factor risk audit - low-risk pharma applicants get 90 percent provisional refund (RFD-04) within 7 days of RFD-02. Pharma is one of 4 priority sectors with 7-day refund window. RFD-06 final sanction within 60 days under Section 54(7). Section 56 interest if delayed. (Day 13 to Day 80.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7-day refund window</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-04 90% provisional</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CGST Instruction 6/2025</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><text x="60" y="30" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Pharma 7-Day</text><text x="60" y="44" font-size="11" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">90% Provisional</text><circle cx="60" cy="58" r="5" fill="#25D366"/><path d="M57 58l2 2 4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" fill="none"/><text x="60" y="88" font-size="7" font-weight="700" fill="#F5A623" text-anchor="middle" font-family="Arial">CGST Instr 6/2025</text></svg>
                        </div>
                        <span class="illustration-label">Refund Credited</span>
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
            <h2 class="section-title">Documents Required for Pharma Exporter Refund</h2>
            <div class="content-text">
                
                <ul>
                    <li>GSTIN certificate of the pharma manufacturer or exporter</li>
                    <li>Letter of Undertaking (Form GST RFD-11) acknowledgement under Rule 96A for the financial year (for LUT routes)</li>
                    <li>CDSCO Form 13 manufacturing licence under Drugs and Cosmetics Act 1940 read with Rules 1945</li>
                    <li>CDSCO Form 9 wholesale licence (where applicable for stocking and distribution)</li>
                    <li>CDSCO Form 28-D export NOC for drugs not approved for use in India (via SUGAM portal)</li>
                    <li>Certificate of Pharmaceutical Product (CoPP) in WHO format for international tender supplies and unapproved-in-India exports</li>
                    <li>WHO-GMP certification (currency check annually)</li>
                    <li>Free Sale Certificate (FSC) confirming product is freely sold in India</li>
                    <li>Tax invoice with HSN code per Schedule I (5%) or Schedule III (18%) of Notification 1/2017-CT(R) post GST 2.0</li>
                    <li>Shipping bill, BRC (Bank Realisation Certificate), and EGM (Export General Manifest) for goods exports</li>
                    <li>FIRC (Foreign Inward Remittance Certificate) with BSR code for international tender supplies</li>
                    <li>GSTR-1, GSTR-3B (Table 6A for exports), and GSTR-2B for the refund period</li>
                    <li>Statement 1A under Rule 89(2)(h) for IDS; Statement 3 under Rule 89(2)(b) for goods exports; Statement 5/5A/5B under Rule 89(2)(g) for deemed exports</li>
                    <li>HSN-rate reconciliation working sheet matching inputs and outputs against Schedule I/III</li>
                    <li>For deemed exports - Form A intimation, Form B receipt evidence under Notification 49/2017-CT</li>
                    <li>For international tenders - tender award letter, country-specific export certifications, structured invoice per tender terms</li>
                    <li>CA certificate in Annexure 2 of RFD-01 where refund exceeds Rs 2 lakh</li>
                    <li>Net ITC working sheet - Rule 89(4) for LUT exports (inputs + services); Rule 89(5) for IDS (inputs only post VKC Footsteps SC 2021)</li>
                </ul>
                <h3 style="margin-top:24px;">Worked Example - Hyderabad Integrated Pharma Manufacturer Multi-Route Refund</h3>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Route / Stage</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Profile</td><td>Hyderabad-based integrated pharma manufacturer; Q3 FY 2025-26 turnover Rs 45 crore across 5 routes</td></tr>
                            <tr><td>Route 1 - LUT formulation exports (US/UK/EU)</td><td>Rs 18 crore; Rule 89(4) Net ITC; refund estimate Rs 1.6 crore</td></tr>
                            <tr><td>Route 2 - IGST-paid exports (LATAM/Africa)</td><td>Rs 7 crore; Rule 96 ICEGATE auto-flow; IGST refund Rs 35 lakh</td></tr>
                            <tr><td>Route 3 - IDS API-to-formulation (domestic 5%)</td><td>Rs 12 crore; Rule 89(5) Net ITC inputs only; IDS gap 13 percentage points post GST 2.0; refund estimate Rs 1.4 crore</td></tr>
                            <tr><td>Route 5 - Deemed exports to EOU (Rs 5 cr)</td><td>Statement 5; Notification 48/2017-CT and 49/2017-CT; refund estimate Rs 90 lakh</td></tr>
                            <tr><td>Route 6 - Global Fund tender supply (Rs 3 cr LUT)</td><td>Rule 89(4); CDSCO Form 28-D and CoPP documentation; refund estimate Rs 25 lakh</td></tr>
                            <tr><td>Total quarterly refund (all 5 active routes)</td><td>Approximately Rs 4.5 crore</td></tr>
                            <tr><td>Provisional 90 percent under CGST Instruction 6/2025</td><td>Rs 4.05 crore expected within Day 22 of ARN (pharma 7-day window)</td></tr>
                            <tr><td>Balance 10 percent at RFD-06 final sanction</td><td>Rs 45 lakh within 50 days</td></tr>
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
            <h2 class="section-title">Common Pharma Refund Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>HSN classification dispute - medicament vs nutraceutical vs cosmetic</td><td>Department contests pharma classification under HSN 30 (medicaments) and reclassifies as nutraceutical (different rate), cosmetic (18 percent), or food supplement - refund quantum reduced or rejected</td><td>Patron's defence pack - CDSCO Form 13 manufacturing licence as drug, drug registration evidence, therapeutic indication documentation, technical opinion from medical practitioner where needed, HSN classification per General Interpretative Rules, Section 107 appeal with industry technical references</td></tr>
                        <tr><td>VKC Footsteps Net ITC including input services for IDS</td><td>DIY filings include freight, R&D services, analytical charges, professional services as Net ITC under Rule 89(5); Department rejects citing VKC Footsteps SC 2021 (inputs only for IDS)</td><td>Patron re-computes Net ITC excluding input services; resubmits with corrected Statement 1A; if Department persists - Section 107 first appeal with citation framework. For Rule 89(4) LUT exports, input services are includible.</td></tr>
                        <tr><td>CDSCO Form 28-D delay for unapproved-in-India drug exports</td><td>Drugs not approved for use in India (tropical disease drugs, generics under foreign approval but not yet Indian) require CDSCO Form 28-D NOC; processing delays affect shipping bill clearance and downstream GST refund</td><td>Patron SUGAM portal coordination, advance Form 28-D pipeline 6 to 8 weeks before shipment, CDSCO liaison through Patron's regulatory affairs partner, customs amendment under Section 149 Customs Act 1962 where needed</td></tr>
                        <tr><td>Global Fund / UN tender invoice structure issues</td><td>International tender invoices often have specific structure (multilateral procurement, INCOTERMS, advance payment) not aligned with standard GST tax invoice format; FIRC reconciliation complications</td><td>Patron tender-compliant tax invoice structure, FIRC reconciliation specific to multilateral payment terms, parallel UN agency documentation, country-specific export certifications, structured advance/milestone billing</td></tr>
                        <tr><td>Sikkim / HP / Uttarakhand excise zone manufacturing - captive vs sale</td><td>Legacy excise zone manufacturers face questions on captive consumption vs sale, branch transfer to other states, and ITC availability under Section 17</td><td>Patron branch transfer ITC framework, captive consumption documentation, Section 15 valuation alignment, e-way bill reconciliation, intra-GSTIN movement vs sale classification</td></tr>
                        <tr><td>Deemed export refund - recipient vs supplier election</td><td>For supply to EOU or Advance Authorisation holder, refund can be claimed by either recipient or supplier under Notification 49/2017-CT; disputes arise where both attempt to claim or election is unclear</td><td>Patron clear election documentation between supplier and recipient, Form A intimation and Form B receipt reconciliation, Section 107 appeal pack if rejection on election grounds with supplier-recipient agreement evidence</td></tr>
                        <tr><td>GST 2.0 transition - rate change effective date disputes</td><td>Invoices straddling 22.09.2025 GST 2.0 effective date - which rate applies to invoice issued before 22.09 but goods supplied after, or vice versa; ITC accumulation calculation across transition</td><td>Patron transitional period framework - time of supply per Section 12/13 CGST Act, invoice date vs supply date analysis, ITC reconciliation across 22.09.2025 transition, GSTR-1 / GSTR-3B adjustment in transition month</td></tr>

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
            <h2 class="section-title">Pharma Exporter Refund Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (LUT Filing - Annual)</td><td class="table-amount">Starting from Rs 5,000 per LUT (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Single Route Pharma Refund Quarterly (LUT OR IDS OR Deemed)</td><td class="table-amount">Rs 25,000 per quarter per route (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>2-Route Pharma Refund Quarterly Bundle (LUT + IDS most common)</td><td class="table-amount">Rs 42,000 per quarter (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>3-Route Pharma Refund Quarterly Bundle</td><td class="table-amount">Rs 58,000 per quarter (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>4-6 Route Multi-Route Bundle (Integrated Manufacturer)</td><td class="table-amount">Rs 85,000 to Rs 1,40,000 per quarter (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST 2.0 Impact Assessment and Working Capital Recalibration</td><td class="table-amount">Rs 35,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>CDSCO Export Documentation Coordination (Form 28-D, CoPP, WHO-GMP, FSC)</td><td class="table-amount">Rs 22,000 per export documentation cycle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>International Tender Documentation and Refund (UN / Global Fund / Gavi)</td><td class="table-amount">Rs 45,000 per tender refund cycle (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Deemed Export Coordination (EOU / Advance Authorisation)</td><td class="table-amount">Rs 25,000 per quarter add-on (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Multi-GSTIN Group Pharma Refund</td><td class="table-amount">Rs 1.5 lakh to Rs 4 lakh per quarter (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 107 Appeal Against Pharma Refund Rejection</td><td class="table-amount">Rs 45,000 per appeal (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Annual Bundle - Standard Pharma Manufacturer (4 Quarters)</td><td class="table-amount">Rs 1,50,000 to Rs 4,50,000 per annum (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Government / Statutory Fees</td><td class="table-amount">No separate government fee for RFD-11 or RFD-01 filing; CDSCO fees per Drugs and Cosmetics Rules</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Pharma Exporter Refund consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Pharma%20Exporters.%20Please%20contact%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pharma Exporter Refund Timeline by Stage</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>LUT filing (Form RFD-11) and ARN generation</td><td>Same day to 1 working day</td></tr>
                        <tr><td>Route identification and multi-route allocation</td><td>1 to 2 working days</td></tr>
                        <tr><td>Statement 1A / 3 / 5 preparation per route</td><td>5 to 10 working days for multi-route</td></tr>
                        <tr><td>HSN classification and rate reconciliation post GST 2.0</td><td>1 to 3 working days</td></tr>
                        <tr><td>Net ITC computation per route (Rule 89(4) vs 89(5))</td><td>1 to 2 working days</td></tr>
                        <tr><td>CDSCO Form 28-D NOC issuance (SUGAM portal)</td><td>15 to 45 days (CDSCO timeline)</td></tr>
                        <tr><td>CoPP issuance from CDSCO</td><td>30 to 90 days (CDSCO timeline)</td></tr>
                        <tr><td>Form RFD-01 portal filing</td><td>Same day from data ready</td></tr>
                        <tr><td>RFD-02 acknowledgement</td><td>Within 15 days of ARN under Rule 90(2)</td></tr>
                        <tr><td>RFD-04 90 percent provisional (low-risk pharma)</td><td>Within 7 days of RFD-02 post 01.10.2025 (CGST Instruction 6/2025)</td></tr>
                        <tr><td>RFD-06 final sanction</td><td>Within 60 days of RFD-02 under Section 54(7)</td></tr>
                        <tr><td>Bank credit after RFD-05</td><td>1 to 5 days</td></tr>
                        <tr><td>End-to-end best-case multi-route quarterly cycle</td><td>30 to 50 days from quarter end to bank credit</td></tr>
                        <tr><td>Section 107 appeal cycle (where rejection)</td><td>8 to 18 months end-to-end</td></tr>
                        <tr><td>Interest if refund delayed beyond 60 days</td><td>6 percent per annum (Section 56); 9 percent for appellate orders</td></tr>
                        <tr><td>Statutory time limit (Section 54(1))</td><td>2 years from relevant date</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note on the parallel statutory clocks:</strong> Section 54(6) of the CGST Act 2017 read with Rule 91(2) of CGST Rules 2017 (as amended by Notification 13/2025-CT effective 01.10.2025) mandates 90 percent provisional refund within 7 days of RFD-02 for low-risk applicants. CGST Instruction 6/2025 dated 3 October 2025 extended this framework to inverted duty structure refunds and identified pharmaceuticals as one of four priority sectors with the 7-day window. Four statutory clocks run together: 9-month FEMA window for FX realisation; 2-year refund limitation under Section 54(1); LUT validity under Rule 96A for each financial year; CDSCO Form 28-D pre-shipment requirement for unapproved-in-India drugs.</p>

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
            <h2 class="section-title">4 Reasons Why CA-Led Pharma Refund Beats DIY</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M2 12h20"/></svg>
                    </div>
                    <h3>Multi-Route Allocation Discipline Preventing Mis-Categorisation</h3>
                    <p>DIY filings often misallocate ITC across routes - LUT exports vs IDS vs deemed exports. Each route has different Net ITC formula (Rule 89(4) inputs+services vs Rule 89(5) inputs only) and documentary requirements (Statement 3 vs 1A vs 5). Patron's multi-route allocation discipline prevents 90 percent of route-mismatch rejections. Critical for integrated manufacturers operating 4 to 6 routes simultaneously.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <h3>GST 2.0 IDS Gap Optimisation (13 Percent Post 22.09.2025)</h3>
                    <p>Post 22 September 2025 GST 2.0, IDS gap widened from 6 percentage points (12 to 5) to 13 percentage points (18 to 5) - more than doubling refund quantum for typical formulation manufacturers. DIY filings continue with pre-GST-2.0 quantum estimates. Patron's post-22.09.2025 recalibration captures the doubled IDS refund quantum - material working capital impact of Rs 20 to Rs 200 lakh per month for mid-sized formulation manufacturers.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                    </div>
                    <h3>CDSCO Documentation Parallel Coordination</h3>
                    <p>DIY exporters frequently delay shipments because CDSCO Form 28-D or CoPP not ready - blocking customs clearance and downstream GST refund. Patron's parallel SUGAM portal coordination and CDSCO liaison through regulatory affairs partner ensures GST refund and export shipment timelines are synchronised. Critical for international tender supplies and unapproved-in-India drug exports where CDSCO timelines are 15 to 45 days for Form 28-D and 30 to 90 days for CoPP.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>CGST Instruction 6/2025 7-Day Refund Window Optimisation</h3>
                    <p>Pharma is one of 4 priority sectors (textiles, chemicals, pharma, fertilisers) with 7-day refund window under CGST Instruction 6/2025. Patron's pre-filing 8-factor risk audit ensures every application qualifies as low-risk - 90 percent provisional refund within 7 days of RFD-02 versus 60+ days for high-risk applicants. The 8 risk factors include GSTR-2B match rate, supplier compliance, DRC-03 pendency, claim pattern consistency, registered tenure.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Pharma Exporters</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Pharma Sector GST Compliance Experience</strong></p>
                <h3>Trusted By</h3>
                <p>Hyundai, Asian Paints, Bridgestone, and 50+ Indian pharmaceutical exporters including Hyderabad bulk drug manufacturers, Vizag API producers, Ahmedabad intermediate suppliers, Mumbai formulation exporters, Sikkim/HP/Uttarakhand excise zone manufacturers, Pune/Goa branded generic exporters, Chennai/Hosur formulation makers, and Bengaluru biotech and biosimilar firms with active multi-route GST refund pipelines handled by Patron Accounting LLP.</p>
                <h3>Outcome Proof</h3>
                <p>A Hyderabad integrated pharma manufacturer recovered Rs 4.5 crore quarterly multi-route refund in March 2026 across 5 routes - LUT formulation exports Rs 1.6 crore, IGST exports Rs 35 lakh, IDS API-to-formulation Rs 1.4 crore (more than doubled post GST 2.0 from pre-22.09.2025 estimate of Rs 65 lakh), deemed exports to EOU formulation manufacturer Rs 90 lakh, and Global Fund tender supply of antiretrovirals Rs 25 lakh. Provisional 90 percent Rs 4.05 crore disbursed within 22 days of ARN under CGST Instruction 6/2025; balance Rs 45 lakh within 50 days. Multi-route Form RFD-01 filings with Statement 1A, 3, 5 - all accepted on first attempt. CDSCO documentation parallel coordination ensured zero export shipment delay.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves pharma manufacturers across India - both in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">LUT vs IGST vs IDS Refund Routes for Pharma</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>LUT Route (Route 1)</th><th>IGST Route (Route 2)</th><th>IDS Route (Route 3/4)</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory Basis</td><td>Section 16(1)(a) IGST + Section 54(3)(i) CGST + Rule 96A</td><td>Section 16(3)(b) IGST + Rule 96</td><td>Section 54(3)(ii) CGST + Rule 89(5)</td></tr>
                        <tr><td>Filing Form</td><td>Form GST RFD-11 LUT + Form RFD-01 with Statement 3</td><td>Shipping Bill auto-flow on ICEGATE (no RFD-01)</td><td>Form GST RFD-01 with Statement 1A</td></tr>
                        <tr><td>Tax Payment Timing</td><td>No IGST upfront; refund of accumulated ITC</td><td>Pay IGST upfront; refund automatic via ICEGATE</td><td>Tax already paid on output; refund of accumulated ITC</td></tr>
                        <tr><td>Net ITC Scope</td><td>Rule 89(4) - inputs PLUS input services on zero-rated supplies</td><td>Not applicable (refund of IGST paid)</td><td>Rule 89(5) - INPUTS ONLY post VKC Footsteps SC 2021</td></tr>
                        <tr><td>Cash Flow Impact</td><td>Best - no working capital blockage on export</td><td>Worst - upfront IGST payment till ICEGATE refund</td><td>Moderate - depends on output tax offset capacity</td></tr>
                        <tr><td>Documentation</td><td>LUT, Statement 3, shipping bill, BRC, EGM</td><td>Tax invoice with IGST, shipping bill, EGM</td><td>Statement 1A, GSTR-1/3B/2B, HSN-rate reconciliation</td></tr>
                        <tr><td>Best For</td><td>Most pharma exporters with high ITC accumulation</td><td>Niche - small exporters or where 90% provisional via IGST is acceptable</td><td>Domestic-focused manufacturers with IDS gap</td></tr>
                        <tr><td>Provisional Refund</td><td>Available under CGST Instruction 6/2025</td><td>90% automatic at shipping bill stage</td><td>Available under CGST Instruction 6/2025 - 7 days for pharma</td></tr>
                        <tr><td>Patron Usage</td><td>Default for 80% of pharma exporters</td><td>Niche - small exporters with limited ITC</td><td>All formulation manufacturers post GST 2.0 22.09.2025</td></tr>

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
            <h2 class="section-title">Related GST and Pharma Compliance Services</h2>
            <div class="content-text">
                
                <p>Pharma exporter refund work integrates with the broader GST refund and compliance stack. Most pharma manufacturers need adjacent compliance running in parallel:</p>
                <ul>
                    <li><a href="/gst-refund/">GST Refund</a> - parent practice covering all Section 54 refund categories beyond pharma exports such as excess balance, tax paid in error, or appeal-related refunds</li>
                    <li><a href="/gst-returns/">GST Returns</a> - monthly GSTR-1 (Table 6A for exports) and GSTR-3B (Table 3.1(b)) that anchor every pharma refund claim across all 6 routes</li>
                    <li><a href="/gst-annual-returns/">GST Annual Returns</a> - GSTR-9 and GSTR-9C reconciliation that must precede any refund audit in a financial year</li>
                    <li><a href="/gst-audit/">GST Audit</a> - for pharma exporters above the prescribed turnover threshold; departmental GSTR-9C reconciliation; pre-audit documentation pack</li>
                    <li><a href="/gst-registration/">GST Registration</a> - mandatory under Section 22 CGST Act once aggregate turnover crosses Rs 40 lakh for goods (Rs 20 lakh in Special Category States)</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT Appeal - Exporters</a> - escalation route when Section 107 appeal on pharma refund rejection is adverse; pre-deposit and grounds preparation for HSN classification, VKC Footsteps Net ITC, deemed export disputes</li>
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
                
                <h3>Section 16 of IGST Act 2017 - Zero-Rated Supply</h3>
                <p>(1) 'Zero-rated supply' means export of goods or services or both, or supply for authorised operations to SEZ developer or unit. (3) A registered person making zero-rated supply may claim refund under either of two options - (a) supply under LUT/bond without payment of IGST and claim refund of unutilised ITC; or (b) supply on payment of IGST and claim refund of IGST paid. Pharma exporters typically use option (a) LUT for high-ITC scenarios and option (b) IGST for niche cases.</p>
                <h3>Section 54(3) of CGST Act 2017 - Refund of Accumulated ITC</h3>
                <p>A registered person may claim refund of any unutilised input tax credit at the end of any tax period. Refund of unutilised ITC shall be allowed only in cases of - (i) zero-rated supplies made without payment of tax; or (ii) where credit has accumulated on account of rate of tax on inputs being higher than rate of tax on output supplies (other than nil-rated or fully exempt supplies). Pharma exporters invoke clause (i) for LUT exports (Routes 1 and 6) and clause (ii) for IDS API-to-formulation (Routes 3 and 4).</p>
                <h3>56th GST Council Recommendation (3 September 2025) - GST 2.0 Pharma Rate Rationalisation</h3>
                <p>The GST Council at its 56th meeting recommended sweeping rate rationalisation effective 22 September 2025. For pharmaceuticals - most formulations under HSN 3003 and 3004 moved from 12 percent to 5 percent (Schedule I of Notification 1/2017-CT(R)); specified life-saving drugs moved to 0 percent (Nil); APIs under HSN 2941 and other categories maintained at 18 percent (Schedule III); excipients, packaging materials, and analytical services maintained at 18 percent. Industry impact - inverted duty structure gap for formulation manufacturers widened from 6 percentage points to 13 percentage points, increasing ITC accumulation and refund quantum significantly.</p>
                <h3>CGST Instruction 6/2025 dated 3 October 2025 - 90 Percent Provisional for Pharma</h3>
                <p>The Central Board of Indirect Taxes and Customs issued Instruction No. 6/2025-GST extending the 90 percent provisional refund framework under Notification 13/2025-Central Tax dated 17 September 2025 (effective 01 October 2025) to refund applications filed under the inverted duty structure category. Pharmaceutical sector is one of four priority sectors (textiles, chemicals, pharmaceuticals, fertilisers) with 7-day refund window. Low-risk applicants assessed under 8-factor risk audit are entitled to 90 percent provisional refund within 7 days of RFD-02 acknowledgement under Rule 91(2).</p>
                <h3>Rule 89(5) of CGST Rules 2017 - IDS Net ITC Formula</h3>
                <p>In case of refund on account of inverted duty structure, refund of input tax credit shall be granted as per the formula - Maximum Refund Amount = ((Turnover of inverted rated supply of goods and services) x Net ITC / Adjusted Total Turnover) minus tax payable on such inverted rated supply of goods and services x (Net ITC / ITC availed on inputs and input services). Per Notification 26/2018-CT and Union of India v VKC Footsteps India Pvt Ltd (Supreme Court, 2021), Net ITC is restricted to inputs only (excludes input services and capital goods).</p>
                <h3>Union of India v VKC Footsteps India Pvt Ltd (Supreme Court, 2021)</h3>
                <p>FOUNDATIONAL - The Supreme Court held that Rule 89(5) of CGST Rules 2017 as amended by Notification 26/2018-CT is intra vires and does not discriminate between inputs and input services. Refund of unutilised ITC under Section 54(3)(ii) for IDS is restricted to input goods only - excluding input services such as freight, R&D services, analytical charges, professional services, and capital goods. The judgment governs Net ITC computation for all IDS refunds across sectors including pharma.</p>
                <h3>Drugs and Cosmetics Act 1940 read with Drugs and Cosmetics Rules 1945 - CDSCO Framework</h3>
                <p>Pharma exports require parallel CDSCO regulatory compliance. Form 9 - wholesale licence for stocking and distribution. Form 13 - manufacturing licence for production. Form 28-D - export NOC for drugs not approved for use in India (tropical disease drugs, generics under foreign approval but not yet Indian); issued by Drugs Controller General of India through SUGAM portal. Form 26 - manufacturing licence in lieu of export for products meant exclusively for export markets. Certificate of Pharmaceutical Product (CoPP) - WHO-format export certification; typical validity 2 years. WHO-GMP certification - Good Manufacturing Practices compliance evidence. Free Sale Certificate (FSC). These documents do not directly affect GST refund computation but are required for valid export shipment.</p>
                <h3>Notification 48/2017-Central Tax - Deemed Exports Framework</h3>
                <p>The Central Government notified specified categories of supplies as deemed exports - (a) supply against Advance Authorisation; (b) supply of capital goods against EPCG Authorisation; (c) supply to Export Oriented Unit; (d) supply of gold by bank or PSU against AA. Pharma manufacturers commonly use category (a) and (c) - API supplier to EOU formulation manufacturer is typical pattern. Notification 49/2017-CT specifies conditions including supplier-recipient election for refund claim.</p>
                <h3>Notification 1/2017-CT(R) - Pharma Rate Schedule (As Amended Post 22.09.2025)</h3>
                <p>Schedule I (5 percent) covers most medicaments under HSN 3003 (multi-constituent) and HSN 3004 (measured doses or retail packing) post GST 2.0; specified ayurvedic, homeopathic, biochemic, unani medicines; menstrual hygiene products. Schedule III (18 percent) covers APIs and bulk drugs under HSN 2941 (antibiotics), specified entries under HSN 2933, 2934, 2935 (heterocyclic compounds and sulphonamides); excipients; medical equipment, and other categories. Pre-22.09.2025 the formulation rate was 12 percent under Schedule II (now repositioned).</p>

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
                    <p class="faq-expanded__lead">Common questions about GST refund for Indian pharma exporters - covering the 6 revenue routes (LUT, IGST, IDS API-to-formulation, IDS bulk-drug, deemed exports, international tenders), 56th GST Council 22 September 2025 rate rationalisation widening IDS gap from 6 to 13 percentage points, CDSCO export documentation (Form 28-D, CoPP, WHO-GMP) coordination, international procurement routes (UN, Global Fund, Gavi, UNICEF, PEPFAR), VKC Footsteps SC 2021 Net ITC discipline, and CGST Instruction 6/2025 7-day refund window for the 4 priority sectors.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GST refund for pharma exporters and what are the available routes?</h3>
                        <div class="faq-expanded__a"><p>Indian pharma exporters can claim GST refund through 6 distinct revenue routes - LUT goods exports under Rule 96A (Form RFD-11 plus RFD-01 with Statement 3), IGST-paid exports under Rule 96 (automatic via Shipping Bill auto-flow on ICEGATE), IDS API-to-formulation under Rule 89(5) with Statement 1A, IDS bulk-drug-to-formulation for integrated manufacturers, deemed exports under EOU and Advance Authorisation per Notification 48/2017-CT with Statement 5, and international tender supplies (UN, Global Fund, Gavi, UNICEF, PEPFAR) typically structured as LUT exports. Most exporters use 2 to 4 routes simultaneously.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How did GST 2.0 (22 September 2025) change pharma IDS for exporters?</h3>
                        <div class="faq-expanded__a"><p>The 56th GST Council on 3 September 2025 recommended GST 2.0 rate rationalisation effective 22 September 2025. Most formulations under HSN 3003 and 3004 moved from 12 percent to 5 percent (Schedule I of Notification 1/2017-CT(R)); APIs maintained at 18 percent (Schedule III). The IDS gap widened from 6 percentage points (12 to 5) to 13 percentage points (18 to 5) - more than doubling refund quantum for typical formulation manufacturers. Combined with CGST Instruction 6/2025 90 percent provisional refund within 7 days of RFD-02, this provides material working capital relief.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Pharma exporter ka GST refund kaise milta hai - LUT route ya IDS route?</h3>
                        <div class="faq-expanded__a"><p>Indian pharma exporters multiple routes use karte hain. Most common 2 routes - Route 1 LUT exports (Form RFD-11 LUT plus RFD-01 Statement 3 quarterly) for foreign buyers ko formulation/API export, and Route 3 IDS API-to-formulation (Rule 89(5) Statement 1A) for domestic formulation sales. GST 2.0 22 September 2025 ke baad APIs 18 percent pe maintained but formulations 5 percent me chale gaye - IDS gap 13 percentage points ho gaya (pehle 6 tha). Working capital ke liye dono routes use karna optimal. CGST Instruction 6/2025 ke baad 90 percent provisional refund 7 din me mil jata hai pharma sector ko.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between LUT export and IDS API-to-formulation refund?</h3>
                        <div class="faq-expanded__a"><p>LUT export (Route 1) - export of formulations or APIs to foreign buyers under Form RFD-11; refund of accumulated ITC under Section 54(3)(i) using Rule 89(4) Net ITC formula which includes both inputs and input services on zero-rated supplies. IDS API-to-formulation (Route 3) - domestic sale of formulations made from APIs where input rate exceeds output rate; refund under Section 54(3)(ii) using Rule 89(5) formula where Net ITC is INPUTS ONLY post VKC Footsteps SC 2021 (excludes input services and capital goods). Different formulas, different documentary requirements (Statement 3 vs Statement 1A).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are CDSCO export certification documents required for GST refund?</h3>
                        <div class="faq-expanded__a"><p>CDSCO documents are required for valid export shipment under Drugs and Cosmetics Act 1940 read with Rules 1945 but they do NOT directly affect GST refund computation. The required documents include Form 9 (wholesale licence), Form 13 (manufacturing licence), Form 28-D (export NOC for drugs not approved in India), Certificate of Pharmaceutical Product (CoPP) in WHO format, WHO-GMP certification, and Free Sale Certificate. Patron coordinates these through SUGAM portal parallel to GST refund. Where CDSCO documentation has gaps, shipping bill clearance is delayed - downstream impact on GST refund cycle.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How do international tender supplies (UN, Global Fund, Gavi) qualify for refund?</h3>
                        <div class="faq-expanded__a"><p>International tender supplies to UN procurement agencies (UNICEF, UNDP), Global Fund (HIV/TB/malaria drugs), Gavi (vaccines), PEPFAR, and foreign Ministry of Health tenders are treated as exports under Section 16(1)(a) IGST Act when shipped outside India with foreign exchange realisation. The route is typically LUT (Form RFD-11 plus RFD-01 with Statement 3) since tender prices include all-inclusive pricing. Documents include tender award letter, structured invoice per tender terms, FIRC realisation, country-specific export certifications, and CDSCO Form 28-D for unapproved-in-India drugs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the 7-day refund window for pharma sector?</h3>
                        <div class="faq-expanded__a"><p>Pharmaceutical sector is one of four priority sectors (textiles, chemicals, pharmaceuticals, fertilisers) identified in CGST Instruction 6/2025 dated 3 October 2025 (read with Notification 13/2025-CT) for accelerated refund processing. Low-risk applicants assessed under 8-factor risk audit are entitled to 90 percent provisional refund (Form RFD-04) within 7 days of RFD-02 acknowledgement under Rule 91(2). The 8 risk factors include clean GSTR filing record, supplier compliance score, GSTR-2B match rate, no DRC-03 in pendency, complete documentation, no past adverse orders, consistent claim pattern, registered tenure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can deemed export benefits under EOU or Advance Authorisation be combined with refund?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 147 of CGST Act 2017 read with Notification 48/2017-CT and Notification 49/2017-CT provides deemed export framework for supplies to EOU, Advance Authorisation holder, and EPCG holder. Either the supplier or the recipient can claim refund (election-based). For pharma the common pattern is API supplier to formulation EOU exporter. Statement 5/5A/5B with Form A intimation and Form B receipt evidence. Important - same supply cannot be claimed twice; election documentation between supplier and recipient prevents disputes. Patron coordinates the election process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What documentation is needed for pharma cluster (Hyderabad, Ahmedabad, Vizag) refund?</h3>
                        <div class="faq-expanded__a"><p>Standard pharma cluster documentation - Form GST RFD-01 and RFD-11 LUT for exports; Statement 1A (IDS), Statement 3 (LUT exports), Statement 5 (deemed exports) per route; GSTR-1, GSTR-3B, GSTR-2B reconciliation; HSN-wise rate reconciliation under post-GST-2.0 Schedule I (5%) and Schedule III (18%); shipping bill, BRC, EGM for goods exports; FIRC for international tender supplies; CDSCO Form 28-D, CoPP, WHO-GMP for unapproved-in-India drugs; tender award letters for international supplies; supplier-recipient election evidence for deemed exports; PFMS bank account validation. Cluster-specific - Hyderabad/Vizag bulk drug exports prioritise Form 28-D; Mumbai/Tarapur formulation exports prioritise CoPP and tender documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">What if my pharma refund was rejected on HSN classification or VKC Footsteps grounds?</h3>
                        <div class="faq-expanded__a"><p>Two common rejection grounds for pharma refunds. HSN classification dispute - Department reclassifies medicament as nutraceutical, cosmetic, or food supplement causing different rate. Patron cure - CDSCO Form 13 manufacturing licence as drug, drug registration evidence, therapeutic indication documentation, technical opinion if needed. VKC Footsteps SC 2021 grounds - Department rejects Net ITC inclusion of input services like freight, R&D, analytical charges. Patron cure - re-compute Net ITC excluding input services per Rule 89(5); include input services only for Rule 89(4) LUT exports. Section 107 first appeal within 3 months with appropriate citation framework. Settlement rate above 80 percent.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Foundational provisions?</strong> Section 16(1) IGST Act + Section 54(3) CGST Act + Rule 89(4) / 89(5).</li>
                    <li><strong>6 routes available?</strong> LUT, IGST, IDS API-to-formulation, IDS bulk drug, deemed exports, international tenders.</li>
                    <li><strong>Most common routes?</strong> LUT exports plus IDS API-to-formulation (typical 2-route mix).</li>
                    <li><strong>GST 2.0 impact?</strong> Effective 22.09.2025 - formulations 12% to 5%; APIs 18% maintained; IDS gap widened from 6 to 13 percentage points.</li>
                    <li><strong>CDSCO documents?</strong> Form 9, Form 13, Form 28-D, CoPP, WHO-GMP, Free Sale Certificate.</li>
                    <li><strong>7-day refund window?</strong> Pharma is 1 of 4 priority sectors per CGST Instruction 6/2025 dated 03.10.2025.</li>
                    <li><strong>International tenders?</strong> UN, Global Fund, Gavi, UNICEF, PEPFAR via LUT route with tender-specific documentation.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pharma Exporter Refund Statutory Deadlines and 5 Parallel Clocks</h2>
            <div class="content-text">
                
                <p>Five statutory clocks run together for a pharma manufacturer/exporter. Miss any one and the consequences differ but each is material:</p>
                <ul>
                    <li><strong>LUT FY 2026-27 renewal</strong> - before 31 March 2026 (or first export of FY 2026-27); every export from 1 April 2026 attracts IGST upfront if LUT not on record under Rule 96A</li>
                    <li><strong>2-year refund limitation under Section 54(1)</strong> - counted from relevant date (typically end of FY); statutory bar; no condonation under Section 54</li>
                    <li><strong>9-month FEMA window for FX realisation</strong> - RBI Master Direction on Export of Goods and Services; without timely realisation or RBI extension, refund eligibility lapses</li>
                    <li><strong>CDSCO Form 28-D pre-shipment</strong> - for drugs not approved for use in India; customs hold if missed; shipping delay cascades into GST refund cycle</li>
                    <li><strong>CoPP renewal</strong> - every 2 years typical; validity expiry blocks tender participation</li>
                    <li><strong>WHO-GMP currency check</strong> - annual; tender disqualification if expired</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of ARN under Rule 90(2); escalate via grievance if officer fails</li>
                    <li><strong>RFD-04 provisional 90 percent</strong> - within 7 days of RFD-02 for low-risk pharma applicants under CGST Instruction 6/2025 effective 01.10.2025</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 under Section 54(7); 6 percent Section 56 interest if delayed; 9 percent for appellate orders</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of RFD-06; +1 month condonable under Section 107(4); 10 percent pre-deposit</li>
                </ul>
                <p><strong>Engage Patron Accounting for pharma exporter compliance retainer - share GSTIN, primary product mix (API/formulation/biologic), export markets, monthly turnover, and cluster location. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20pharma%20exporter%20GST%20refund%20help%20-%20LUT%2C%20IDS%2C%20deemed%20exports%2C%20or%20international%20tender." target="_blank">WhatsApp us now</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Pharma Exporter Refund Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Indian pharmaceutical exporters operate across 6 distinct GST refund routes - LUT goods exports under Rule 96A, IGST-paid exports under Rule 96, IDS API-to-formulation under Rule 89(5) post the widened 22.09.2025 gap, IDS bulk-drug-to-formulation for integrated manufacturers, deemed exports under EOU and Advance Authorisation per Notification 48/2017-CT and Notification 49/2017-CT, and international tender supplies to UN procurement, Global Fund (HIV/TB/malaria), Gavi (vaccines), UNICEF, PEPFAR, and foreign Ministry of Health bilateral arrangements.</p>
                <p style="color:rgba(255,255,255,0.92);">The 56th GST Council meeting on 3 September 2025 recommended GST 2.0 rate rationalisation effective 22 September 2025 - moving most formulations under HSN 3003 and 3004 from 12 percent to 5 percent under Schedule I of Notification 1/2017-CT(R) while leaving APIs under HSN 2941 and other categories at 18 percent under Schedule III. This widened the inverted duty structure gap from 6 percentage points to 13 percentage points - dramatically increasing ITC accumulation. CGST Instruction 6/2025 dated 3 October 2025 (read with Notification 13/2025-CT) extended the 90 percent provisional refund framework within 7 days of RFD-02 to IDS - identifying pharma as one of 4 priority sectors with accelerated processing. Net ITC under Rule 89(5) is restricted to inputs only post Union of India v VKC Footsteps India Pvt Ltd Supreme Court 2021. Parallel CDSCO documentation under Drugs and Cosmetics Act 1940 read with Rules 1945 includes Form 9, Form 13, Form 28-D, CoPP in WHO format, WHO-GMP, and FSC.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP brings 15+ years of pharma sector GST refund experience covering all 6 revenue routes, GST 2.0 rate rationalisation impact analysis (22.09.2025), CGST Instruction 6/2025 risk-based provisional refund optimisation, CDSCO export documentation coordination through SUGAM portal, international tender procurement frameworks (UN, Global Fund, Gavi, UNICEF, PEPFAR), deemed export coordination under EOU and Advance Authorisation, 7-cluster pharma refund optimisation across Hyderabad/Vizag bulk drug hubs, Ahmedabad/Ankleshwar/Vapi intermediates, Mumbai/Tarapur formulations, Sikkim/HP/Uttarakhand excise zones, Pune/Goa branded generic formulations, Chennai/Hosur formulations, and Bengaluru biotech and biosimilars, VKC Footsteps SC 2021 Net ITC discipline, and Section 107 appeal experience for 50+ active pharma exporter clients with four physical offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20for%20Pharma%20Exporters.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20for%20Pharma%20Exporters&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20refund%20services%20for%20Indian%20pharma%20exporters%20-%20LUT%2C%20IGST%2C%20IDS%2C%20deemed%20exports%2C%20or%20international%20tender%20routes.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related GST and Pharma Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end GST refund and pharma exporter compliance coverage - from LUT filing through to GSTAT Section 112 escalation for pharma refund rejection appeals.</p>
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for GST Refund for Pharma Exporters</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-annual-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>Reviewed every 3 months under Tier 1 freshness cycle. HIGHLY FRESH due to GST 2.0 rate rationalisation effective 22.09.2025 widening IDS gap. Triggers for earlier review: GST Council recommendation on pharma rate alignment (Pharmexcil advocacy), new HC/SC ruling on pharma HSN classification or IDS, CDSCO regulatory amendments to Form 28-D or CoPP framework, international tender procurement framework changes (WHO/Global Fund/Gavi), or CGST Instruction amendments to risk-based refund framework.</p>
        </div>
    </div>
</section>

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
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}
slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';
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
@endsection

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
