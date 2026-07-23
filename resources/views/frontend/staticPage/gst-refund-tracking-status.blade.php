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
    <title>GST Refund Status Tracking — ARN and RFD-02 to RFD-06</title>
    <meta name="description" content="Track GST refund status by ARN. RFD-02, RFD-04, RFD-05, RFD-06 form lifecycle. Portal walkthrough. PFMS bank validation. Escalation. Rs 5,000+.">
    <link rel="canonical" href="/gst-refund-tracking-status">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund Status Tracking — ARN and RFD-02 to RFD-06">
    <meta property="og:description" content="Track GST refund status by ARN. RFD-02, RFD-04, RFD-05, RFD-06 form lifecycle. Portal walkthrough. PFMS bank validation. Escalation. Rs 5,000+.">
    <meta property="og:url" content="/gst-refund-tracking-status/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-tracking-status-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Status Tracking — ARN and RFD-02 to RFD-06">
    <meta name="twitter:description" content="Track GST refund status by ARN. RFD-02, RFD-04, RFD-05, RFD-06 form lifecycle. Portal walkthrough. PFMS bank validation. Escalation. Rs 5,000+.">
    <meta name="twitter:image" content="/images/gst-refund-tracking-status-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-tracking-status/#breadcrumb",
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
          "name": "Status Tracking",
          "item": "/gst-refund-tracking-status/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-tracking-status/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I track my GST refund status on the portal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two modes available. Pre-login - go to GST portal at gst.gov.in > Services > Track Application Status > Refund > Enter ARN > SEARCH. Status visible without login. Post-login - login with GSTIN credentials > Services > Refunds > Track Application Status > Enter ARN or Filing Year > SEARCH. Post-login mode shows full lifecycle with color-coded stages, downloadable RFD-* form PDFs, and PFMS validation status. Patron's standard workflow uses post-login for full visibility."
          }
        },
        {
          "@type": "Question",
          "name": "What does each RFD form mean in the refund lifecycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "RFD-01 is your application; RFD-02 is acknowledgement (Day 15); RFD-03 is deficiency memo (Day 15); RFD-04 is provisional refund 90 percent (Day 22 if low-risk); RFD-05 is payment advice (after sanction); RFD-06 is final sanction or rejection (Day 60); RFD-07A is complete adjustment against demand; RFD-07B is withholding under Section 54(10)/(11); RFD-08 is SCN for proposed rejection; RFD-09 is reply to RFD-08; RFD-01W is withdrawal; PMT-03 is re-credit order."
          }
        },
        {
          "@type": "Question",
          "name": "GST refund status kaise check karein - kya ARN se check ho jaata hai? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Haan bilkul. Do tarike hain. Pre-login - GST portal (gst.gov.in) pe jaayein, login mat karein, Services > Track Application Status > Refund select karein, ARN dalein, SEARCH par click karein. Post-login - apna GSTIN se login karein, Services > Refunds > Track Application Status > ARN ya Filing Year dalein. Post-login me color-coded stage indicators dikhte hain plus RFD-* form ke PDFs download kar sakte hain. PFMS bank validation alag se PFMS portal pe check hota hai. RFD-02 15 din me, RFD-04 22 din me (low-risk), RFD-06 60 din me milna chahiye."
          }
        },
        {
          "@type": "Question",
          "name": "What is PFMS validation and how do I check it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PFMS (Public Financial Management System) is the Govt of India payment infrastructure. Bank account validation runs at two stages - Stage 1 at RFD-01 filing (PFMS portal > GST Registered tab > enter GSTIN or Account Number > View Report) and Stage 2 at RFD-05 issuance (PFMS portal > GST Successfully Processed tab). If Stage 1 fails, refund cannot proceed; UPDATE BANK ACCOUNT via Track Application Status. If Stage 2 fails after RFD-05, the tax officer must re-issue RFD-05 to corrected account."
          }
        },
        {
          "@type": "Question",
          "name": "What if RFD-02 acknowledgement is not issued within 15 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Day 16 onwards - the Department's right to raise deficiency under Rule 90(3) has lapsed per Jian International v. Commissioner of Delhi GST (Delhi HC, W.P.(C) 4205/2020). The application is deemed complete. Patron's Tier 1 escalation - file portal grievance under Rule 90, copy email to Range officer with Jian International citation. Where status persists, written representation. The 60-day Section 54(7) clock effectively shifts but interest accrual under Section 56 may still trigger from extended Day 60 reference."
          }
        },
        {
          "@type": "Question",
          "name": "What if RFD-04 provisional refund is not credited within 7 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Post 01 October 2025, low-risk applicants are entitled to 90 percent provisional refund within 7 days of RFD-02 under Rule 91(2) as amended by Notification 13/2025-CT and CGST Instruction 6/2025. If RFD-04 is not issued by Day 22 of original ARN (Day 7 of RFD-02), Patron's Tier 2 escalation - email to Range officer citing 7-day mandatory timeline; PFMS Stage 2 validation watch concurrent. Rare to escalate beyond Tier 2 for low-risk classification cases."
          }
        },
        {
          "@type": "Question",
          "name": "What if RFD-06 final sanction is delayed beyond 60 days?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 56 of CGST Act 2017 mandates interest at 6 percent per annum (9 percent if appellate) from Day 61 of RFD-02. Per Raghav Ventures Delhi HC, the interest is mandatory and statutory - no separate claim needed. Patron's discipline - track Day 61 onwards; compute accrued interest; ensure RFD-05 includes interest. Where RFD-06 omits interest, rectification application; if denied, Section 107 appeal. Tier 3 to Tier 4 escalation based on delay duration."
          }
        },
        {
          "@type": "Question",
          "name": "Can I escalate a delayed refund and how?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - Patron's Day-graduated escalation matrix has 6 tiers. Tier 1 (Day 16) portal grievance under Rule 90. Tier 2 (Day 23) Range officer email. Tier 3 (Day 60) Section 56 interest documentation. Tier 4 (Day 75) Division supervising officer representation. Tier 5 (Day 90) Section 107 appeal with 10 percent pre-deposit. Tier 6 (Day 180+) Article 226 writ petition before jurisdictional High Court. Each tier has citation framework with Jian International, Raghav Ventures, Vineet Polyfab, Tata Steel precedents."
          }
        },
        {
          "@type": "Question",
          "name": "When can I file Section 107 appeal vs Article 226 writ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 107 appeal lies against an adverse RFD-06 (rejection) or RFD-07B (withholding) order; must be filed within 3 months with 10 percent pre-deposit of disputed tax. Article 226 writ lies for high-pendency cases where Department has been recalcitrant despite repeated representation, or where the inaction itself violates statutory framework. Patron's typical practice - prefer Section 107 for adverse orders; prefer Article 226 for inaction beyond Day 180. Tata Steel Jharkhand HC directed disposal within 12 weeks."
          }
        },
        {
          "@type": "Question",
          "name": "Section 56 interest kaise calculate hota hai aur kab milta hai? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 56 interest sanctioned refund amount par Day 61 of RFD-02 se actual disbursement date tak 6 percent per annum (appellate ya court-ordered refunds ke liye 9 percent) calculate hota hai. Yeh interest mandatory aur statutory hai - separate claim nahi karna padta. RFD-06 me principal plus interest add hota hai, aur RFD-05 (payment advice) dono cover karta hai. Agar interest miss ho jaaye to rectification application 6 mahine ke andar file karein. Rectification deny hone par Section 107 appeal me interest claim ko ground bana sakte hain. Raghav Ventures Delhi HC aur Vineet Polyfab Gujarat HC rulings ke under interest deny nahi kiya ja sakta technical ya administrative grounds par."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-tracking-status/#service",
      "name": "GST Refund Status Tracking - ARN Monitoring and Escalation",
      "description": "Patron Accounting LLP handles end-to-end GST refund status tracking - daily ARN status capture via Services > Refunds > Track Application Status, PFMS 2-stage bank validation monitoring, RFD-02 to RFD-06 form lifecycle coordination, Section 56 interest auto-trigger watch, and 6-tier Day-graduated escalation from portal grievance under Rule 90 through Section 107 appeal to Article 226 writ. Citation framework includes Jian International Delhi HC, Raghav Ventures Delhi HC, Tata Steel Jharkhand HC, and Vineet Polyfab Gujarat HC.",
      "serviceType": "GST Refund Tracking and Escalation Service",
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

<!-- BREADCRUMB -->
<div role="navigation" aria-label="Breadcrumb" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
    <div style="max-width:1320px;margin:0 auto;">
        <ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    Home
                </a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li style="display:flex;align-items:center;gap:8px;">
                <a href="/gst-refund/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">GST Refund</a>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);"><path d="M9 5l7 7-7 7"/></svg>
            </li>
            <li><span style="color:var(--orange);font-weight:600;">Status Tracking Services</span></li>
        </ol>
    </div>
</div>

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
                        GST Refund Status Tracking - ARN, RFD-02 to RFD-06 Lifecycle, Escalation
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Original RFD-01 ARN, GSTIN credentials (optional for post-login), tax period, refund category, filing date.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 5,000 per ARN tracking engagement plus 18 percent GST; bulk multi-ARN bundles available.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any GST taxpayer with active RFD-01 ARN; pre-login tracking requires only the ARN - no GSTIN login needed.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Daily ARN status capture; weekly summary; immediate alert on adverse status; escalation triggered per Day-tier matrix.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20tracking%20my%20GST%20refund%20status.%20Please%20share%20a%20free%20ARN%20diagnostic." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Status Tracking'/>
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
                                                                <option value="gst-refund-tracking-status" selected>GST Refund Tracking</option>
                                <option value="gst-refund">GST Refund (General)</option>
                                <option value="gst-refund-rfd-01-filing">GST RFD-01 Filing</option>
                                <option value="gst-refund-rfd-03-deficiency-response">RFD-03 Deficiency Response</option>
                                <option value="gst-refund-provisional-90-percent">90% Provisional Refund</option>
                                <option value="gst-refund-rfd-06-order-analysis">RFD-06 Order Analysis</option>
                                <option value="gst-returns">GST Returns Filing</option>
                                <option value="gst-registration">GST Registration</option>
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Rs 14 lakh refund was stuck past Day 90 with no RFD-06 despite repeated reminders. Patron's Tier 4 representation to Division supervising officer with Section 56 interest worksheet, Raghav Ventures Delhi HC and Vineet Polyfab Gujarat HC citations triggered RFD-06 issuance within 14 days. Total Rs 14.56 lakh including interest disbursed by Day 110.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjeev Kohli</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Pune Engineering Exporter</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">PFMS Stage 1 validation kept failing despite our bank account being active. Patron caught it on Day 3, triggered Amendment of Registration, re-ran PFMS validation - cleared by Day 7. RFD-02 came on Day 14, RFD-04 90 percent on Day 19. Without the daily PFMS watch we would have lost 15 days easily.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RJ</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rashmi Joshi</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, Mumbai Pharma Exporter</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">12 active ARNs across 4 quarters. Patron's consolidated tracking dashboard captures every status change daily. Two ARNs hit Tier 3 escalation simultaneously - Section 56 interest worksheet for both triggered RFD-06 within 18 days each. Multi-ARN coordination saved us 6 to 8 weeks of internal back-and-forth.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DM</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Deepa Murthy</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Chennai Textile Exporter</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">RFD-08 SCN came on Day 35 with vague grounds. Patron's RFD-09 reply on Day 4 with documentary support pack and hearing representation flipped the matter - RFD-06 sanctioned within 22 days of reply. Without their hearing prep we would have headed to Section 107 with 10 percent pre-deposit.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AR</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Ashok Ramesh</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Bengaluru Electronics Exporter</div>
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
                    <p>From pharma, IT services, engineering, textile, electronics, and chemical exporters to IDS manufacturers and SEZ-feeding DTA suppliers - we track 200+ active ARNs with daily status capture, PFMS 2-stage validation, and Day-graduated 6-tier escalation discipline.</p>
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
            <a href="#what-section" class="toc-pill">What Is Tracking</a>
            <a href="#who-section" class="toc-pill">15-Status Taxonomy</a>
            <a href="#services-section" class="toc-pill">Our Services</a>
            <a href="#procedure-section" class="toc-pill">8-Step Pipeline</a>
            <a href="#documents-section" class="toc-pill">Documents</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Benefits</a>
            <a href="#comparison-section" class="toc-pill">Pre vs Post-Login</a>
            <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Status Tracking Services at a Glance</strong></p>
                    <p>GST refund status tracking is the post-RFD-01 monitoring discipline that confirms each stage of the refund lifecycle - acknowledgement (RFD-02), provisional sanction (RFD-04), payment advice (RFD-05), and final sanction (RFD-06). Tracking is done via the GST portal at Services > Refunds > Track Application Status using ARN (pre-login) or ARN/Filing Year (post-login). Where timelines slip, graduated escalation applies - from Day 15 grievance to Day 180+ Article 226 writ.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Tracking Modes</strong></td><td>Pre-login (ARN only) plus Post-login (ARN or Filing Year)</td></tr>
                            <tr><td><strong>Portal Path</strong></td><td>Services &gt; Refunds &gt; Track Application Status</td></tr>
                            <tr><td><strong>RFD-02 Timeline</strong></td><td>Within 15 days of ARN under Rule 90(2)</td></tr>
                            <tr><td><strong>RFD-04 Timeline (90% provisional)</strong></td><td>Within 7 days of RFD-02 (post 01.10.2025 risk-based path)</td></tr>
                            <tr><td><strong>RFD-06 Timeline (final sanction)</strong></td><td>Within 60 days of RFD-02 under Section 54(7)</td></tr>
                            <tr><td><strong>PFMS Validation</strong></td><td>Two stages - at RFD-01 filing and at RFD-05 issuance</td></tr>
                            <tr><td><strong>Section 56 Interest Trigger</strong></td><td>Day 61 of RFD-02 - 6% default; 9% if appellate</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>GST refund status tracking is the discipline of monitoring every stage of the post-RFD-01 lifecycle - from ARN generation immediately on submission to final bank credit. The track flow is intentionally transparent - the GST portal at gst.gov.in exposes ARN-based tracking through Services > Refunds > Track Application Status (with or without login). Pre-login tracking allows accountants and consultants to monitor status using just the ARN; post-login tracking provides additional details like Filing Year search, color-coded stage indicators, and direct access to RFD-* form PDFs as they are issued.</p>
                <p>The tracking discipline is not passive. Each stage has a statutory or practical timeline; missed timelines have remedies. RFD-02 acknowledgement must issue within 15 days of ARN under Rule 90(2) of the CGST Rules 2017; if not, the Jian International Delhi HC precedent bars the Department from raising deficiency thereafter. The 90 percent provisional refund (Form RFD-04) for low-risk applicants must issue within 7 days of RFD-02 under Rule 91(2) as amended by Notification 13/2025-CT effective 01.10.2025. Final sanction (Form RFD-06) must issue within 60 days of RFD-02 under Section 54(7) - failure beyond Day 60 triggers automatic Section 56 interest per the Raghav Ventures Delhi HC precedent. Patron Accounting runs daily ARN status capture for 200+ active refund claims with automatic Day-tier escalation from informal portal grievance to Article 226 writ for high-pendency cases.</p>
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
                <h2 class="section-title">What Is GST Refund Status Tracking?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund status tracking is the structured discipline of monitoring an active refund application (Form RFD-01 ARN) through the post-filing lifecycle until bank credit. It involves checking portal status, capturing each RFD-* form as issued by the proper officer, verifying PFMS bank validation at the two prescribed stages, and triggering escalation when statutory timelines slip. The tracking is the bridge between filing (covered by Form RFD-01) and recovery (covered by Form RFD-06 final sanction).</p>
                    <p>Two tracking modes are available - <strong>pre-login</strong> (accessible without GSTIN credentials, requires only the ARN, status visibility only) and <strong>post-login</strong> (requires GSTIN credentials, provides Filing Year search, color-coded stage indicators, and direct download of RFD-* form PDFs plus PFMS bank validation status). Patron's standard tracking workflow uses post-login mode for full visibility and pre-login mode as fallback when portal credentials are temporarily unavailable.</p>
                    <p><strong>Complete RFD-* form lifecycle:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                    <table>
                        <thead><tr><th>Form</th><th>Purpose</th><th>Statutory Timeline</th></tr></thead>
                        <tbody>
                            <tr><td><strong>RFD-01</strong></td><td>Refund Application (filed by applicant)</td><td>Day 0 - ARN generated</td></tr>
                            <tr><td><strong>RFD-02</strong></td><td>Acknowledgement</td><td>Within 15 days of ARN under Rule 90(2)</td></tr>
                            <tr><td><strong>RFD-03</strong></td><td>Deficiency Memo</td><td>Within 15 days of ARN under Rule 90(3)</td></tr>
                            <tr><td><strong>RFD-04</strong></td><td>Provisional Refund Order (90%)</td><td>Within 7 days of RFD-02 (low-risk path)</td></tr>
                            <tr><td><strong>RFD-05</strong></td><td>Payment Advice</td><td>Same day or next day after sanction</td></tr>
                            <tr><td><strong>RFD-06</strong></td><td>Final Refund Sanction or Rejection</td><td>Within 60 days of RFD-02 under Section 54(7)</td></tr>
                            <tr><td><strong>RFD-07A / 07B</strong></td><td>Adjustment / Withholding Order</td><td>After RFD-06 sanction</td></tr>
                            <tr><td><strong>RFD-08 / 09</strong></td><td>SCN for Proposed Rejection / Reply</td><td>Day 30-50 / 15 days of RFD-08</td></tr>
                            <tr><td><strong>RFD-01W</strong></td><td>Withdrawal Application</td><td>Anytime before RFD-06</td></tr>
                            <tr><td><strong>PMT-03</strong></td><td>Re-credit Order</td><td>After rejection or withdrawal</td></tr>
                        </tbody>
                    </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Status Tracking:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>ARN (Application Reference Number):</strong> Unique number generated immediately on RFD-01 submission - the master tracking identifier.</li>
                        <li><strong>Pre-Login Tracking:</strong> Track Application Status accessible without GSTIN credentials - ARN-only access; status visibility only.</li>
                        <li><strong>Post-Login Tracking:</strong> Track Application Status accessible after GSTIN login - full visibility including RFD-* form PDFs and color-coded stages.</li>
                        <li><strong>Filing Year Search:</strong> Post-login feature to search by FY when ARN is not at hand.</li>
                        <li><strong>PFMS (Public Financial Management System):</strong> Govt of India payment infrastructure used for refund disbursement validation and credit.</li>
                        <li><strong>PFMS Stage 1 Validation:</strong> Bank account validation at RFD-01 filing - GST Registered tab on PFMS portal.</li>
                        <li><strong>PFMS Stage 2 Validation:</strong> Bank account validation at RFD-05 issuance - GST Successfully Processed tab on PFMS portal.</li>
                        <li><strong>Color-Coded Stage Indicators:</strong> Portal visual indicators - typically green for done, blue for in-progress, red for action required.</li>
                        <li><strong>Bank Account Update:</strong> Where PFMS validation fails - update bank account via Track Application Status > UPDATE BANK ACCOUNT button.</li>
                        <li><strong>Section 56 Interest Auto-Trigger:</strong> Mandatory 6 percent per annum interest from Day 61 of RFD-02 if final sanction delayed - per Raghav Ventures Delhi HC.</li>
                        <li><strong>Day-Graduated Escalation Matrix:</strong> Patron's tier-based remediation - grievance to Range to Division to Section 107 to Article 226 - matched to delay duration.</li>
                        <li><strong>Jian International Delhi HC W.P.(C) 4205/2020:</strong> Precedent barring Department from raising deficiency beyond Rule 90(3) 15-day window.</li>
                        <li><strong>Raghav Ventures Delhi HC (2024):</strong> Section 56 interest is statutory and automatic; no separate claim required.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Status Tracking</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ARN to Bank</span>
                        <strong>Full Lifecycle Watch</strong>
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
            <h2 class="section-title">15-Status Portal Taxonomy (What Each Status Means)</h2>
            <div class="content-text">
                
                <p>The GST portal exposes the refund application through 15 distinct statuses across the lifecycle. Patron's tracking discipline maps each status to next action.</p>
                <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                <table>
                    <thead><tr><th>Status</th><th>What It Means</th><th>Patron Next Action</th></tr></thead>
                    <tbody>
                        <tr><td><strong>1. Submitted</strong></td><td>RFD-01 just filed; ARN issued; not yet picked by officer</td><td>Wait; daily monitoring starts</td></tr>
                        <tr><td><strong>2. Pending for Processing</strong></td><td>Officer has the application; reviewing for completeness</td><td>No action; RFD-02 expected within 15 days</td></tr>
                        <tr><td><strong>3. Pending for Order by Tax Officer</strong></td><td>Application complete; processing for sanction underway</td><td>RFD-04 expected if low-risk; RFD-06 within 60 days</td></tr>
                        <tr><td><strong>4. Acknowledged</strong></td><td>Form GST RFD-02 issued</td><td>60-day clock starts; track for RFD-04 next</td></tr>
                        <tr><td><strong>5. Deficiency Memo Issued</strong></td><td>Form GST RFD-03 issued; original ARN voided</td><td>Fresh RFD-01 required (not reply); auto-credit verification</td></tr>
                        <tr><td><strong>6. Provisional Refund Order Issued</strong></td><td>Form GST RFD-04 issued for 90 percent</td><td>PFMS Stage 2 watch; bank credit expected in days</td></tr>
                        <tr><td><strong>7. Provisional Refund Disbursed</strong></td><td>90 percent credited to bank account via PFMS</td><td>Confirm bank credit; track for RFD-06</td></tr>
                        <tr><td><strong>8. Refund Order Issued</strong></td><td>Form GST RFD-06 issued (final sanction or rejection)</td><td>If sanction - PFMS watch; if rejection - Section 107 appeal route</td></tr>
                        <tr><td><strong>9. SCN Issued</strong></td><td>Form GST RFD-08 issued; rejection proposed</td><td>RFD-09 reply within 15 days; hearing representation</td></tr>
                        <tr><td><strong>10. Reply Received</strong></td><td>Form GST RFD-09 reply submitted</td><td>Watch for RFD-06 sanction or final rejection</td></tr>
                        <tr><td><strong>11. Refund Withheld</strong></td><td>Form GST RFD-07B withholding order issued</td><td>Section 107 appeal; demand offset audit</td></tr>
                        <tr><td><strong>12. Bank Account Validation Pending</strong></td><td>PFMS Stage 1 not yet completed</td><td>Wait; monitor PFMS portal directly</td></tr>
                        <tr><td><strong>13. Bank Account Validation Failed</strong></td><td>PFMS Stage 1 or Stage 2 failed - account closed, IFSC change, name mismatch</td><td>UPDATE BANK ACCOUNT via Track Application Status; Amendment of Registration</td></tr>
                        <tr><td><strong>14. Refund Disbursed</strong></td><td>Sanctioned amount credited to bank account</td><td>Confirm bank credit; close tracking</td></tr>
                        <tr><td><strong>15. Refund Withdrawn</strong></td><td>Form GST RFD-01W filed by applicant</td><td>ECL re-credit verification; fresh RFD-01 readiness if needed</td></tr>
                    </tbody>
                </table>
                </div>
                <p>For the upstream RFD-01 filing mechanics (the form whose ARN we track), see <a href="/gst-refund-rfd-01-filing/">GST RFD-01 filing step-by-step</a> covering the 11-Statement matrix. For RFD-03 deficiency response, see <a href="/gst-refund-rfd-03-deficiency-response/">GST RFD-03 deficiency response</a>. For 90 percent provisional refund mechanics (the Day 22 watch), see <a href="/gst-refund-provisional-90-percent/">GST 90 percent provisional refund</a>. For RFD-06 final order analysis and Section 107 appeal pathway, see <a href="/gst-refund-rfd-06-order-analysis/">GST RFD-06 order analysis</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for Refund Tracking</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Daily ARN Status Capture + Weekly Summary Report</strong></td><td>Patron's tracking pipeline checks every active client ARN daily on the GST portal - status change captured in CRM, weekly summary report sent to client with timeline, status changes, expected next stage, and any flags. Multi-period and multi-GSTIN clients get consolidated reports. <span class="badge-included">Standard</span></td></tr>
                        <tr><td><strong>PFMS 2-Stage Bank Validation Monitoring</strong></td><td>Stage 1 watch from Day 1 to Day 7 of RFD-01; Stage 2 watch from RFD-05 issuance. Where either stage fails, Patron triggers immediate UPDATE BANK ACCOUNT via portal or Amendment of Registration if the bank change is structural. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>RFD-* Form Capture and Archive</strong></td><td>Each RFD-* form issued by the proper officer (RFD-02, RFD-04, RFD-05, RFD-06, RFD-08) is downloaded and archived with timestamp. Used for audit trail, escalation pack drafting, and Section 56 interest computation evidence. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Day-Graduated Escalation Discipline (6 Tiers)</strong></td><td>Day 15 grievance under Rule 90; Day 22 7-day provisional follow-up; Day 60 Section 56 interest auto-trigger; Day 90 Section 107 appeal preparation; Day 180+ Article 226 writ representation with citation framework. <span class="badge-included">Strategic</span></td></tr>
                        <tr><td><strong>Jurisdictional Officer Liaison + Hearing Representation</strong></td><td>Where RFD-08 SCN is issued, Patron drafts RFD-09 reply within 15 days, attends hearing on behalf of client (under Power of Attorney), and represents at Range/Division supervising officer level for stuck refunds. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Section 56 Interest Computation and Recovery</strong></td><td>Where final sanction crosses Day 60 of RFD-02, Section 56 interest at 6 percent (or 9 percent if appellate) is automatically due. Patron's interest computation worksheet plus Raghav Ventures Delhi HC citation pack ensures interest is included in final disbursement. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Section 107 Appeal Coordination (Tier 5)</strong></td><td>10 percent pre-deposit calculation, Form APL-01 with detailed grounds in APL-01A, hearing representation, Order-in-Appeal APL-04 recovery. <span class="badge-addon">Escalation</span></td></tr>
                        <tr><td><strong>Article 226 Writ Coordination (Tier 6)</strong></td><td>For Day 180+ high-pendency cases - drafting brief for HC counsel, evidence pack, hearing coordination citing Tata Steel Jharkhand HC 12-week direction precedent. <span class="badge-addon">Litigation</span></td></tr>

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
            <h2 class="section-title">8-Step Tracking Pipeline</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's refund tracking pipeline runs the eight sequential stages below from ARN capture to bank credit confirmation, with Day-graduated escalation triggers built in.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">ARN Capture and Tracking Setup</h3>
                    <p class="step-description">On RFD-01 submission, capture ARN, filing date, refund category, claim amount, and bank account into Patron's tracking dashboard. Set Day-15, Day-22, Day-60, Day-90 alerts. Multi-ARN clients get consolidated dashboards with bulk escalation.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Day-tier alerts armed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-ARN dashboard ready</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ARN Capture</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><rect x="28" y="42" width="64" height="6" rx="1" fill="#FFF3E0"/><text x="60" y="47" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">AAxxxxxxxxxxxx</text><circle cx="32" cy="58" r="2" fill="#F5A623"/><text x="38" y="60" font-size="5" fill="#14365F" font-family="Arial">D-15 alert</text><circle cx="32" cy="66" r="2" fill="#F5A623"/><text x="38" y="68" font-size="5" fill="#14365F" font-family="Arial">D-22 alert</text><circle cx="32" cy="74" r="2" fill="#F5A623"/><text x="38" y="76" font-size="5" fill="#14365F" font-family="Arial">D-60 alert</text></svg></div>
                        <span class="illustration-label">ARN Captured</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Pre-Login or Post-Login Portal Tracking</h3>
                    <p class="step-description">Pre-login - gst.gov.in > Services > Track Application Status > Refund > Enter ARN > SEARCH. Post-login - login > Services > Refunds > Track Application Status > Enter ARN or Filing Year > SEARCH. Daily check for status change.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Daily portal check</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Post-login for full visibility</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="14" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="25" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="30" y="38" width="60" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623"/><text x="60" y="44" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Track App Status</text><rect x="30" y="50" width="60" height="8" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.5"/><text x="60" y="56" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Enter ARN</text><rect x="38" y="64" width="44" height="14" rx="3" fill="#E8712C"/><text x="60" y="73" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">SEARCH</text></svg></div>
                        <span class="illustration-label">Status Captured</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">PFMS Stage 1 Validation Watch (Day 1 to Day 7)</h3>
                    <p class="step-description">Track PFMS portal > GST Registered tab for Stage 1 bank validation. Where successful - proceed; where failed - immediate UPDATE BANK ACCOUNT via Track Application Status or Amendment of Registration if the change is structural.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Registered tab watched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UPDATE BANK ACCOUNT ready</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="60" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="34" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PFMS Stage 1</text><text x="60" y="46" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">GST Registered tab</text><circle cx="60" cy="62" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M55 62l4 4 6-7" stroke="#25D366" stroke-width="2" fill="none"/></svg></div>
                        <span class="illustration-label">PFMS Cleared</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">RFD-02 Acknowledgement Watch (Day 1 to Day 15)</h3>
                    <p class="step-description">Daily check for RFD-02 issuance. Day 16 - if not issued, file portal grievance under Rule 90; Jian International Delhi HC W.P.(C) 4205/2020 citation prepared barring Department from raising deficiency thereafter.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 90(2) 15-day watch</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Jian International ready</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="32" font-size="10" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">RFD-02</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Acknowledgement</text><circle cx="60" cy="62" r="11" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="60" y="60" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">15</text><text x="60" y="68" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Days</text><text x="60" y="80" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Rule 90(2)</text></svg></div>
                        <span class="illustration-label">RFD-02 Issued</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">RFD-04 Provisional Refund Watch (Day 16 to Day 22)</h3>
                    <p class="step-description">For low-risk eligible applicants - watch for RFD-04 within 7 days of RFD-02 post 01.10.2025 risk-based path. Day 23 - escalation to Range officer with 7-day Rule 91(2) timeline citation. PFMS Stage 2 monitoring concurrent.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7-day mandatory window</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notification 13/2025-CT cited</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="32" font-size="10" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RFD-04</text><circle cx="60" cy="55" r="13" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="58" font-size="11" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">90%</text><text x="60" y="80" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">7 Days of RFD-02</text></svg></div>
                        <span class="illustration-label">RFD-04 Credited</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">RFD-06 Final Sanction Watch (Day 23 to Day 60)</h3>
                    <p class="step-description">Monitor for RFD-06 final sanction within 60-day Section 54(7) window. Where RFD-08 SCN intervenes - draft RFD-09 reply within 15 days. Where RFD-06 issued - PFMS Stage 2 plus bank credit watch.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 54(7) 60-day watch</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-08 SCN response ready</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="32" font-size="10" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">RFD-06</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Final Sanction</text><circle cx="60" cy="62" r="11" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="60" y="60" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">60</text><text x="60" y="68" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Days</text><text x="60" y="80" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Section 54(7)</text></svg></div>
                        <span class="illustration-label">RFD-06 Issued</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Section 56 Interest Auto-Trigger Watch (Day 61+)</h3>
                    <p class="step-description">From Day 61 - Section 56 interest at 6 percent (or 9 percent if appellate) is mandatory per Raghav Ventures Delhi HC. Compute interest amount; ensure RFD-05 includes interest; if not, file rectification or representation.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Raghav Ventures cited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Interest worksheet attached</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="60" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="34" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Section 56</text><circle cx="35" cy="56" r="11" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/><text x="35" y="59" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">6%</text><text x="35" y="75" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Default</text><circle cx="85" cy="56" r="11" fill="#FFF" stroke="#F5A623" stroke-width="1.5"/><text x="85" y="59" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">9%</text><text x="85" y="75" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Appellate</text></svg></div>
                        <span class="illustration-label">Interest Accrued</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">Bank Credit Confirmation and Tracking Closure</h3>
                    <p class="step-description">Daily check of bank account for actual credit. Where credited - reconcile with RFD-05 amount, archive all RFD-* forms, close tracking. Where not credited within 5 days of RFD-05 - PFMS Stage 2 troubleshoot; tax officer follow-up.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-05 reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All forms archived</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="60" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M30 50 L45 50 L45 40 L75 40 L75 50 L90 50 L90 65 L30 65 Z" fill="#FFF" stroke="#25D366" stroke-width="1.2"/><text x="60" y="58" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">CREDITED</text><circle cx="100" cy="35" r="6" fill="#25D366"/><path d="M97 35l2 2 4-4" stroke="#FFF" stroke-width="1.5" fill="none"/></svg></div>
                        <span class="illustration-label">Credit Confirmed</span>
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
            <h2 class="section-title">Document Checklist for Refund Tracking</h2>
            <div class="content-text">
                
                <p>Keep the following ready before engaging Patron's tracking pipeline. Most are already on file with the applicant from the original RFD-01 submission.</p>
                <p><strong>Mandatory inputs for tracking setup:</strong></p>
                <ul>
                    <li>Original RFD-01 ARN (Application Reference Number).</li>
                    <li>Filing date and refund category (LUT, IGST-paid, IDS, SEZ, etc.).</li>
                    <li>Claim amount and tax-head split.</li>
                    <li>Tax period or Filing Year reference.</li>
                    <li>Bank account details (for PFMS validation reconciliation).</li>
                    <li>GSTIN credentials (optional - for post-login tracking with full visibility).</li>
                </ul>
                <p><strong>For PFMS validation troubleshooting:</strong></p>
                <ul>
                    <li>Current bank account number, IFSC code, and account holder name.</li>
                    <li>Latest bank confirmation letter (if account recently changed).</li>
                    <li>Amendment of Registration evidence (if bank change is structural).</li>
                </ul>
                <p><strong>For escalation (Tier 1 to Tier 6):</strong></p>
                <ul>
                    <li>RFD-02 PDF (if issued) - for citation evidence in escalation.</li>
                    <li>RFD-04 PDF (if issued) - for PFMS Stage 2 watch.</li>
                    <li>RFD-08 SCN PDF (if issued) - for RFD-09 reply drafting.</li>
                    <li>RFD-06 PDF (if issued) - for Section 56 interest computation.</li>
                    <li>Power of Attorney (POA) for hearing representation at officer or appellate level.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Tracking Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Portal Status Frozen at "Pending for Processing" Beyond Day 15</strong></td><td>RFD-02 not issued and status not updated. Patron's cure - portal grievance under Rule 90 from Day 16; Jian International Delhi HC citation showing officer cannot raise deficiency thereafter; if status persists, written representation to Range officer with timeline.</td></tr>
                        <tr><td><strong>PFMS Stage 1 Failure Despite Successful Bank Validation Previously</strong></td><td>Bank account active but Stage 1 fails - typically due to PFMS database lag, IFSC code change, or name mismatch refresh. Patron's cure - immediate Amendment of Registration, fresh PFMS validation request, UPDATE BANK ACCOUNT via Track Application Status. Adds 3 to 7 days but prevents disbursement failure.</td></tr>
                        <tr><td><strong>RFD-04 Provisional Issued But No Bank Credit</strong></td><td>Sanction confirmed but bank credit not received. Typically PFMS Stage 2 lag, intermediate banking holiday, or bank-side reconciliation issue. Patron's cure - PFMS GST Successfully Processed tab check; bank statement reconciliation; if delay above 5 days, escalation to PFMS helpdesk plus tax officer.</td></tr>
                        <tr><td><strong>RFD-08 SCN Issued After Day 30 Without Specific Grounds</strong></td><td>SCN cites vague grounds like "documents incomplete" or "further verification required". Patron's cure - immediate RFD-09 reply within 15 days citing specific compliance with all RFD-01 requirements; documentary support pack; hearing representation under POA.</td></tr>
                        <tr><td><strong>RFD-06 Issued With Section 56 Interest Omitted</strong></td><td>Final sanction crosses Day 60 but RFD-06 only includes principal refund - no interest. Patron's cure - rectification application citing Raghav Ventures Delhi HC (interest is mandatory and statutory); interest computation worksheet; if rectification denied, Section 107 appeal with interest claim as ground.</td></tr>
                        <tr><td><strong>Multiple ARN Tracking Coordination</strong></td><td>High-volume exporter with 12+ active ARNs across periods. Patron's cure - consolidated tracking dashboard; weekly summary report covering all ARNs; escalation tier matrix applied per ARN; bulk grievance or representation where multiple ARNs hit same delay.</td></tr>

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
            <h2 class="section-title">Fees for Refund Tracking Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (Portal Tracking)</strong></td><td class="table-amount">Nil - GST portal tracking is free</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund Cluster</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>Standard Single ARN Tracking</strong></td><td class="table-amount">Rs 5,000 per ARN plus GST</td></tr>
                        <tr><td><strong>Multi-ARN Bulk Tracking (up to 10 ARNs)</strong></td><td class="table-amount">Rs 25,000 bundle plus GST</td></tr>
                        <tr><td><strong>Tier 1 to Tier 3 Escalation Bundle</strong></td><td class="table-amount">Rs 12,000 add-on plus GST</td></tr>
                        <tr><td><strong>Tier 4 Division Officer Representation</strong></td><td class="table-amount">Rs 18,000 per case plus GST</td></tr>
                        <tr><td><strong>RFD-08 SCN Defence + RFD-09 Reply</strong></td><td class="table-amount">Rs 18,000 per case plus GST</td></tr>
                        <tr><td><strong>Section 107 Appeal Filing (Tier 5)</strong></td><td class="table-amount">Rs 35,000 per case plus GST</td></tr>
                        <tr><td><strong>Article 226 Writ Petition Coordination (Tier 6)</strong></td><td class="table-amount">Rs 75,000 plus court fees plus GST</td></tr>
                        <tr><td><strong>Section 56 Interest Recovery Standalone</strong></td><td class="table-amount">Rs 8,000 add-on plus GST</td></tr>
                        <tr><td><strong>End-to-End ARN Filing + Tracking Bundle</strong></td><td class="table-amount">Rs 18,000 bundle plus GST</td></tr>
                        <tr><td><strong>Success Fee (Tier 4-6 Recoveries)</strong></td><td class="table-amount">0.5 to 2 percent of refund recovered</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Most tracking cycles close at Tier 1 or Tier 2 escalation; Tier 4+ used only for contested or systemically delayed refunds.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Status Tracking consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20refund%20tracking%20with%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long Refund Tracking Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>ARN-based portal tracking setup</strong></td><td>Same day from data share</td><td>Dashboard armed with Day-tier alerts</td></tr>
                        <tr><td><strong>Pre-login status check</strong></td><td>30 seconds per query</td><td>ARN-only, no login</td></tr>
                        <tr><td><strong>Post-login status check (with PDFs)</strong></td><td>2 to 3 minutes per query</td><td>Full visibility</td></tr>
                        <tr><td><strong>PFMS Stage 1 validation watch</strong></td><td>Day 1 to Day 7</td><td>GST Registered tab</td></tr>
                        <tr><td><strong>RFD-02 acknowledgement window</strong></td><td>Within 15 days of ARN</td><td>Rule 90(2) statutory</td></tr>
                        <tr><td><strong>RFD-04 provisional window (low-risk)</strong></td><td>Within 7 days of RFD-02</td><td>Post 01.10.2025 risk-based path</td></tr>
                        <tr><td><strong>RFD-05 payment advice</strong></td><td>Same day or next day after sanction</td><td>PFMS Stage 2 trigger</td></tr>
                        <tr><td><strong>RFD-06 final sanction window</strong></td><td>Within 60 days of RFD-02</td><td>Section 54(7) statutory ceiling</td></tr>
                        <tr><td><strong>Bank credit after RFD-05</strong></td><td>1 to 5 days</td><td>PFMS Stage 2 + bank reconciliation</td></tr>
                        <tr><td><strong>End-to-end best-case (low-risk)</strong></td><td>22 to 30 days from RFD-01 to bank credit</td><td>Clean cycle, no escalation</td></tr>
                        <tr><td><strong>End-to-end with one Tier 1-2 escalation</strong></td><td>30 to 60 days</td><td>Portal grievance or Range officer</td></tr>
                        <tr><td><strong>End-to-end with Tier 4 representation</strong></td><td>75 to 120 days</td><td>Division supervising officer</td></tr>
                        <tr><td><strong>End-to-end with Section 107 appeal</strong></td><td>180 to 365 days</td><td>Tier 5 escalation</td></tr>
                        <tr><td><strong>End-to-end with Article 226 writ</strong></td><td>120 to 240 days</td><td>HC may direct disposal</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Day-graduated escalation matrix is the differentiator:</strong> Most DIY trackers escalate randomly via phone calls or single emails. Patron's 6-tier framework matches each delay duration to a specific remedy with citation framework - Tier 1 portal grievance from Day 16 (Jian International Delhi HC), Tier 3 Section 56 interest auto-trigger from Day 61 (Raghav Ventures Delhi HC), Tier 4 Division representation from Day 75 (Vineet Polyfab Gujarat HC), Tier 5 Section 107 appeal, Tier 6 Article 226 writ (Tata Steel Jharkhand HC 12-week direction). Each tier has a citation-backed legal compulsion that DIY phone calls cannot replicate.

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
            <h2 class="section-title">Why CA-Led Tracking Beats DIY</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">Daily Watch Instead of Monthly Check</h3>
                <p class="feature-description">DIY exporters check status weekly or monthly; miss critical Day-15 / Day-22 windows. Patron's daily ARN capture catches every status change same-day; escalation triggered automatically per Day-tier matrix - preventing the 7 to 15 day slippage typical with passive monitoring.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">PFMS 2-Stage Validation Discipline</h3>
                <p class="feature-description">Most DIY trackers do not even know PFMS validation is two stages. Patron monitors both - Stage 1 at RFD-01 and Stage 2 at RFD-05 - preventing disbursement failure that adds 7 to 15 days to the refund cycle. UPDATE BANK ACCOUNT is triggered immediately on any validation failure.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Day-Graduated Escalation With Citation Framework</h3>
                <p class="feature-description">DIY exporters resort to phone calls or single emails - rarely cite case law. Patron's tier-based remediation with Jian International, Raghav Ventures, Vineet Polyfab, and Tata Steel citations gives officer concrete legal compulsion at each tier rather than informal nagging.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">Section 56 Interest Auto-Trigger Discipline</h3>
                <p class="feature-description">Most DIY claims close without claiming Section 56 interest even when due. Patron tracks Day 61+ for every ARN; computation worksheet ensures interest is included in final disbursement, not forgotten. Raghav Ventures Delhi HC framework - interest is mandatory and statutory.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3 class="feature-title">Multi-ARN Consolidated Dashboard</h3>
                <p class="feature-description">High-volume exporters with 12+ active ARNs lose track of which is at which tier. Patron's consolidated dashboard captures every status change daily across all ARNs; weekly summary report covers all open ARNs with tier-appropriate next actions. Saves 6 to 8 weeks of internal back-and-forth.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg></div>
                <h3 class="feature-title">RFD-08 SCN Defence Within 15-Day Window</h3>
                <p class="feature-description">RFD-08 reply via RFD-09 within 15 days is the substantive opportunity to prevent adverse RFD-06. Patron drafts Day-1 reply with documentary support pack and hearing representation under POA. Prevents 70 percent of preventable adverse orders that would otherwise require Section 107 appeal.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Businesses for Refund Tracking</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of GST Compliance</strong></p>
                <p><strong>Outcome proof:</strong> A Pune engineering exporter recovered Rs 14 lakh stuck refund within 14 days through Tier 4 Division supervising officer representation in March 2026. Original RFD-01 was October 2025; RFD-06 not issued by Day 90 despite reminders. Patron's representation with Section 56 interest worksheet (Rs 56,000 accrued by Day 90), Raghav Ventures Delhi HC and Vineet Polyfab Gujarat HC citations triggered RFD-06 issuance. Total Rs 14,56,000 disbursed by Day 110.</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 200+ Indian businesses including pharma, IT services, engineering, textile, electronics, and chemical exporters with active ARN tracking. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pre-Login vs Post-Login Tracking Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Pre-Login Tracking</th><th>Post-Login Tracking</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Login required</strong></td><td>No - ARN only</td><td>Yes - GSTIN credentials</td></tr>
                        <tr><td><strong>Portal path</strong></td><td>Services &gt; Track Application Status &gt; Refund &gt; Enter ARN</td><td>Login &gt; Services &gt; Refunds &gt; Track Application Status &gt; ARN or Filing Year</td></tr>
                        <tr><td><strong>Search by ARN</strong></td><td>Yes</td><td>Yes</td></tr>
                        <tr><td><strong>Search by Filing Year</strong></td><td>No</td><td>Yes</td></tr>
                        <tr><td><strong>Status visibility</strong></td><td>Current status only</td><td>Full lifecycle with color-coded stages</td></tr>
                        <tr><td><strong>RFD-* form PDFs accessible</strong></td><td>No</td><td>Yes - direct download</td></tr>
                        <tr><td><strong>PFMS validation status</strong></td><td>Limited</td><td>Full visibility with UPDATE BANK ACCOUNT button</td></tr>
                        <tr><td><strong>Multi-ARN view</strong></td><td>One ARN at a time</td><td>Filing Year search shows all ARNs in FY</td></tr>
                        <tr><td><strong>Typical use</strong></td><td>Quick status check, third-party consultant access</td><td>Full tracking, document archive, escalation trigger</td></tr>
                        <tr><td><strong>Patron usage</strong></td><td>Fallback when credentials temporarily unavailable</td><td>Standard daily tracking workflow</td></tr>

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
            <h2 class="section-title">Partner Services Across the Refund Lifecycle</h2>
            <div class="content-text">
                
                <p>Tracking ties the entire refund cluster together. Common bundles below:</p>
                <ul>
                    <li><a href="/gst-refund/">GST refund (general)</a> - the parent practice covering Section 54 refund spectrum across all 8 refund categories.</li>
                    <li><a href="/gst-refund-rfd-01-filing/">GST RFD-01 filing step-by-step</a> - the form whose ARN we track; covers 11-Statement matrix and PAF workflow.</li>
                    <li><a href="/gst-refund-rfd-03-deficiency-response/">GST RFD-03 deficiency response</a> - a tracking detour requiring fresh RFD-01 within Rule 90(3) window.</li>
                    <li><a href="/gst-refund-provisional-90-percent/">GST 90 percent provisional refund</a> - the Day 22 watch under amended Rule 91(2) and CGST Instruction 6/2025.</li>
                    <li><a href="/gst-refund-rfd-06-order-analysis/">GST RFD-06 order analysis</a> - the final sanction or rejection order; Section 107 appeal pathway.</li>
                    <li><a href="/gst-refund-service-exports/">GST refund service exports</a> - service exporters tracking LUT route refunds under Section 2(6) IGST.</li>
                    <li><a href="/gst-refund-inverted-duty-structure/">GST refund inverted duty structure</a> - manufacturing sector ITC refund tracking.</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT appeal for exporters</a> - Section 112 second-tier appellate route where Section 107 is unsuccessful.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework (India)</h2>
            <div class="content-text">
                
                <p><strong>Section 54(7) of CGST Act 2017:</strong> The proper officer shall issue the order under sub-section (5) within sixty days from the date of receipt of application complete in all respects. The 60-day clock starts from the date of RFD-02 acknowledgement, not from RFD-01 ARN.</p>
                <p><strong>Section 56 of CGST Act 2017 - Interest on Delayed Refund:</strong> If any tax ordered to be refunded under sub-section (5) of section 54 is not refunded within sixty days from the date of receipt of application under sub-section (1) of that section, interest at such rate not exceeding six per cent as may be specified in the notification issued by the Government on the recommendations of the Council shall be payable from the date immediately after the expiry of sixty days till the date of refund. The proviso increases the rate to nine per cent for refund arising from order of adjudicating authority or appellate authority.</p>
                <p><strong>Rule 90(2) of CGST Rules 2017:</strong> The application for refund shall be forwarded to the proper officer who shall, within a period of fifteen days of filing of the said application, scrutinize the application for its completeness and where the application is found to be complete in terms of sub-rule (2), (3) and (4) of rule 89, an acknowledgement in FORM GST RFD-02 shall be made available to the applicant through the common portal electronically.</p>
                <p><strong>Rule 91(2) as amended by Notification 13/2025-Central Tax dated 17.09.2025:</strong> Effective 01 October 2025, the proper officer shall grant provisional refund of ninety per cent of the total amount so claimed within seven days from the date of acknowledgement under sub-rule (2) of rule 90 to applicants identified as low-risk based on data analytics, risk parameters, and other parameters as may be specified by the Board. CGST Instruction 6/2025 dated 03.10.2025 extends this to inverted duty structure refund category.</p>
                <p><strong>Jian International v. Commissioner of Delhi GST (Delhi HC, W.P.(C) 4205/2020):</strong> Rules 90 and 91 of the CGST Rules provide a complete code with regard to acknowledgement, scrutiny and grant of refund. Within fifteen days from the date of filing of the refund application, the respondent has to either point out discrepancy in FORM GST RFD-03 or acknowledge the refund application in FORM GST RFD-02. To allow the respondent to issue a deficiency memo beyond this period would amount to enabling the Respondent to process the refund application beyond the statutory timelines. The respondent has lost the right to point out any deficiency at this belated stage.</p>
                <p><strong>Raghav Ventures v. Commissioner of Delhi (Delhi HC, 2024):</strong> Interest under Section 56 of CGST Act is statutory and automatic. The applicant is not required to make a separate claim for interest in Form RFD-01 - interest accrues by operation of law from Day 61 of refund application. Where final disbursement omits the interest component, rectification is the correct route; failing rectification, Section 107 appeal lies.</p>
                <p><strong>Tata Steel v. State of Jharkhand (Jharkhand HC, W.P.(T) 2900 of 2024):</strong> Article 226 direction for refund disposal within 12 weeks plus interest - leading writ-route precedent for high-pendency refund cases.</p>
                <p><strong>Vineet Polyfab Pvt Ltd v. UOI (Gujarat HC, 2025):</strong> Mandatory Section 56 interest regardless of technical glitch - administrative explanations for delay do not defeat the statutory entitlement.</p>
                <p><strong>PFMS 2-Stage Validation Architecture:</strong> Bank account validation runs at two stages. Stage 1 - on filing of RFD-01, the bank account auto-populated from registration is validated against PFMS database via the GST Registered tab. Stage 2 - on issuance of RFD-05 payment advice, re-validation occurs via the GST Successfully Processed tab. Either failure triggers SMS and email alerts; UPDATE BANK ACCOUNT button via Track Application Status enables remediation.</p>
                <p><strong>Government references:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal Track Application Status</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST circulars and instructions</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (CGST Act 2017)</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the questions taxpayers most often ask about GST refund status tracking, PFMS validation, RFD-* form lifecycle, and 6-tier escalation - including Hinglish variants for stakeholders comfortable in mixed language.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I track my GST refund status on the portal?</h3>
                        <div class="faq-expanded__a"><p>Two modes available. Pre-login - go to GST portal at gst.gov.in > Services > Track Application Status > Refund > Enter ARN > SEARCH. Status visible without login. Post-login - login with GSTIN credentials > Services > Refunds > Track Application Status > Enter ARN or Filing Year > SEARCH. Post-login mode shows full lifecycle with color-coded stages, downloadable RFD-* form PDFs, and PFMS validation status. Patron's standard workflow uses post-login for full visibility.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What does each RFD form mean in the refund lifecycle?</h3>
                        <div class="faq-expanded__a"><p>RFD-01 is your application; RFD-02 is acknowledgement (Day 15); RFD-03 is deficiency memo (Day 15); RFD-04 is provisional refund 90 percent (Day 22 if low-risk); RFD-05 is payment advice (after sanction); RFD-06 is final sanction or rejection (Day 60); RFD-07A is complete adjustment against demand; RFD-07B is withholding under Section 54(10)/(11); RFD-08 is SCN for proposed rejection; RFD-09 is reply to RFD-08; RFD-01W is withdrawal; PMT-03 is re-credit order.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">GST refund status kaise check karein - kya ARN se check ho jaata hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Haan bilkul. Do tarike hain. Pre-login - GST portal (gst.gov.in) pe jaayein, login mat karein, Services > Track Application Status > Refund select karein, ARN dalein, SEARCH par click karein. Post-login - apna GSTIN se login karein, Services > Refunds > Track Application Status > ARN ya Filing Year dalein. Post-login me color-coded stage indicators dikhte hain plus RFD-* form ke PDFs download kar sakte hain. PFMS bank validation alag se PFMS portal pe check hota hai. RFD-02 15 din me, RFD-04 22 din me (low-risk), RFD-06 60 din me milna chahiye.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is PFMS validation and how do I check it?</h3>
                        <div class="faq-expanded__a"><p>PFMS (Public Financial Management System) is the Govt of India payment infrastructure. Bank account validation runs at two stages - Stage 1 at RFD-01 filing (PFMS portal > GST Registered tab > enter GSTIN or Account Number > View Report) and Stage 2 at RFD-05 issuance (PFMS portal > GST Successfully Processed tab). If Stage 1 fails, refund cannot proceed; UPDATE BANK ACCOUNT via Track Application Status. If Stage 2 fails after RFD-05, the tax officer must re-issue RFD-05 to corrected account.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What if RFD-02 acknowledgement is not issued within 15 days?</h3>
                        <div class="faq-expanded__a"><p>Day 16 onwards - the Department's right to raise deficiency under Rule 90(3) has lapsed per Jian International v. Commissioner of Delhi GST (Delhi HC, W.P.(C) 4205/2020). The application is deemed complete. Patron's Tier 1 escalation - file portal grievance under Rule 90, copy email to Range officer with Jian International citation. Where status persists, written representation. The 60-day Section 54(7) clock effectively shifts but interest accrual under Section 56 may still trigger from extended Day 60 reference.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What if RFD-04 provisional refund is not credited within 7 days?</h3>
                        <div class="faq-expanded__a"><p>Post 01 October 2025, low-risk applicants are entitled to 90 percent provisional refund within 7 days of RFD-02 under Rule 91(2) as amended by Notification 13/2025-CT and CGST Instruction 6/2025. If RFD-04 is not issued by Day 22 of original ARN (Day 7 of RFD-02), Patron's Tier 2 escalation - email to Range officer citing 7-day mandatory timeline; PFMS Stage 2 validation watch concurrent. Rare to escalate beyond Tier 2 for low-risk classification cases.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What if RFD-06 final sanction is delayed beyond 60 days?</h3>
                        <div class="faq-expanded__a"><p>Section 56 of CGST Act 2017 mandates interest at 6 percent per annum (9 percent if appellate) from Day 61 of RFD-02. Per Raghav Ventures Delhi HC, the interest is mandatory and statutory - no separate claim needed. Patron's discipline - track Day 61 onwards; compute accrued interest; ensure RFD-05 includes interest. Where RFD-06 omits interest, rectification application; if denied, Section 107 appeal. Tier 3 to Tier 4 escalation based on delay duration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I escalate a delayed refund and how?</h3>
                        <div class="faq-expanded__a"><p>Yes - Patron's Day-graduated escalation matrix has 6 tiers. Tier 1 (Day 16) portal grievance under Rule 90. Tier 2 (Day 23) Range officer email. Tier 3 (Day 60) Section 56 interest documentation. Tier 4 (Day 75) Division supervising officer representation. Tier 5 (Day 90) Section 107 appeal with 10 percent pre-deposit. Tier 6 (Day 180+) Article 226 writ petition before jurisdictional High Court. Each tier has citation framework with Jian International, Raghav Ventures, Vineet Polyfab, Tata Steel precedents.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">When can I file Section 107 appeal vs Article 226 writ?</h3>
                        <div class="faq-expanded__a"><p>Section 107 appeal lies against an adverse RFD-06 (rejection) or RFD-07B (withholding) order; must be filed within 3 months with 10 percent pre-deposit of disputed tax. Article 226 writ lies for high-pendency cases where Department has been recalcitrant despite repeated representation, or where the inaction itself violates statutory framework. Patron's typical practice - prefer Section 107 for adverse orders; prefer Article 226 for inaction beyond Day 180. Tata Steel Jharkhand HC directed disposal within 12 weeks.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Section 56 interest kaise calculate hota hai aur kab milta hai? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Section 56 interest sanctioned refund amount par Day 61 of RFD-02 se actual disbursement date tak 6 percent per annum (appellate ya court-ordered refunds ke liye 9 percent) calculate hota hai. Yeh interest mandatory aur statutory hai - separate claim nahi karna padta. RFD-06 me principal plus interest add hota hai, aur RFD-05 (payment advice) dono cover karta hai. Agar interest miss ho jaaye to rectification application 6 mahine ke andar file karein. Rectification deny hone par Section 107 appeal me interest claim ko ground bana sakte hain. Raghav Ventures Delhi HC aur Vineet Polyfab Gujarat HC rulings ke under interest deny nahi kiya ja sakta technical ya administrative grounds par.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Tracking modes?</strong> Pre-login (ARN only) and Post-login (ARN or Filing Year).</li>
                    <li><strong>Portal path?</strong> Services &gt; Refunds &gt; Track Application Status.</li>
                    <li><strong>RFD-02 timeline?</strong> Within 15 days of ARN under Rule 90(2).</li>
                    <li><strong>RFD-04 timeline (low-risk)?</strong> Within 7 days of RFD-02 (post 01.10.2025).</li>
                    <li><strong>RFD-06 timeline?</strong> Within 60 days of RFD-02 under Section 54(7).</li>
                    <li><strong>Interest auto-trigger?</strong> Day 61 of RFD-02 - 6 percent default; 9 percent appellate.</li>
                    <li><strong>Escalation tiers?</strong> 6 tiers - grievance to Range to Division to Section 107 to Article 226.</li>
                    <li><strong>PFMS validation?</strong> Two stages - Stage 1 at RFD-01; Stage 2 at RFD-05.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Tracking Deadlines That Determine Your Refund</h2>
            <div class="content-text">
                
                <p>Refund tracking deadlines run off the lifecycle clock. Patron tracks each milestone:</p>
                <ol>
                    <li><strong>RFD-02 acknowledgement window</strong> - within 15 days of ARN. Tier 1 grievance from Day 16; Jian International citation prepared.</li>
                    <li><strong>RFD-04 provisional 90 percent (low-risk)</strong> - within 7 days of RFD-02 post 01.10.2025. Tier 2 escalation from Day 23 of ARN.</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 under Section 54(7). Tier 3 escalation from Day 61; Section 56 interest auto-accrues.</li>
                    <li><strong>Section 56 interest auto-trigger</strong> - Day 61 onwards. Mandatory per Raghav Ventures Delhi HC; 6 percent default, 9 percent appellate.</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of adverse RFD-06 or RFD-07B. Pre-deposit 10 percent of disputed tax.</li>
                    <li><strong>Article 226 writ</strong> - reasonable time post Day 180+. HC may direct disposal within fixed period.</li>
                    <li><strong>RFD-09 reply to RFD-08</strong> - within 15 days of RFD-08. Patron Day-1 reply pack.</li>
                    <li><strong>Bank account update on PFMS failure</strong> - immediate via Track Application Status. Adds 3 to 7 days to refund cycle.</li>
                </ol>
                <p><strong>Get your free ARN status diagnostic now. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20tracking%20my%20GST%20refund%20status." target="_blank" rel="noopener">WhatsApp us</a>. Portal status, PFMS validation, escalation tier, and remediation roadmap within 4 business hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Track Every Refund From ARN to Bank Credit</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">GST refund status tracking is the post-RFD-01 monitoring discipline that confirms each stage of the refund lifecycle from ARN generation to bank credit. Tracking is performed via the GST portal at Services > Refunds > Track Application Status using ARN (pre-login) or ARN/Filing Year (post-login). The full RFD-* form lifecycle covers 12 forms - RFD-01 (application), RFD-02 (acknowledgement), RFD-03 (deficiency), RFD-04 (provisional 90 percent), RFD-05 (payment advice), RFD-06 (final sanction), RFD-07A and 07B (adjustment and withholding), RFD-08 (SCN), RFD-09 (SCN reply), RFD-01W (withdrawal), and PMT-03 (re-credit).</p>
                <p style="color:#FFFFFF;">Statutory timelines are tight - RFD-02 within 15 days under Rule 90(2); RFD-04 within 7 days for low-risk applicants under Notification 13/2025-CT effective 01.10.2025; RFD-06 within 60 days under Section 54(7). Where timelines slip, Section 56 mandatory interest accrues automatically from Day 61 per Raghav Ventures Delhi HC. PFMS bank validation runs at two stages - at RFD-01 and at RFD-05. Patron Accounting LLP brings 15+ years of refund tracking, PFMS troubleshooting, RFD-* lifecycle coordination, Section 56 interest computation, and Day-graduated 6-tier escalation discipline with Jian International (Delhi HC), Raghav Ventures (Delhi HC), Tata Steel (Jharkhand HC), and Vineet Polyfab (Gujarat HC) precedent invocation - for 200+ exporters and IDS manufacturers with four physical offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20refund%20tracking%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20GST%20Refund%20Tracking&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20tracking%20my%20GST%20refund%20status%20and%20would%20like%20your%20help%20with%20ARN%20monitoring%20and%20escalation.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Services Across the Refund Cluster</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Tracking sits at the centre of the refund cluster. Most clients run these services in parallel for end-to-end recovery.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end GST refund pipeline from filing through tracking to litigation</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-01-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST RFD-01 Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-03-deficiency-response/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg></div><div><div class="pa-card-title">RFD-03 Deficiency Response</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-provisional-90-percent/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">90% Provisional Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-06-order-analysis/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">RFD-06 Order Analysis</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-service-exports/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/></svg></div><div><div class="pa-card-title">Service Exports Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-inverted-duty-structure/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div><div><div class="pa-card-title">Inverted Duty Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 8 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 8 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Tier 2 freshness - core tracking architecture stable since 2017; PFMS 2-stage validation framework stable; periodic portal UI refreshes). Review triggers include CBIC notifications amending Form RFD-* lifecycle, PFMS validation framework changes, Track Application Status portal flow updates, or escalation framework precedents from new HC or SC rulings.</p>
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
