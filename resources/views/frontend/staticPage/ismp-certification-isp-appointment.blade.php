
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
    <title>ISMP Certification and ISP Appointment India</title>
    <meta name="description" content="ISMP Principal Officer and ISP appointment for IMF - 50-hour PO training, 25-hour ISP training, IRDAI exam, Fit and Proper. From Rs 15,000.">
    <link rel="canonical" href="/ismp-certification-isp-appointment">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ISMP Certification and ISP Appointment India 2026 | Patron">
    <meta property="og:description" content="ISMP Principal Officer and ISP appointment for IMF - 50-hour PO training, 25-hour ISP training, IRDAI exam, Fit and Proper. From Rs 15,000.">
    <meta property="og:url" content="/ismp-certification-isp-appointment">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/ismp-certification-isp-appointment-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ISMP Certification and ISP Appointment India 2026 | Patron">
    <meta name="twitter:description" content="ISMP Principal Officer and ISP appointment for IMF - 50-hour PO training, 25-hour ISP training, IRDAI exam, Fit and Proper. From Rs 15,000.">
    <meta name="twitter:image" content="/images/ismp-certification-isp-appointment-og.webp">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/ismp-certification-isp-appointment/#breadcrumb",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
        { "@type": "ListItem", "position": 2, "name": "Insurance Marketing Firm Registration", "item": "/insurance-marketing-firm-registration" },
        { "@type": "ListItem", "position": 3, "name": "ISMP Certification and ISP Appointment", "item": "/ismp-certification-isp-appointment" }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/ismp-certification-isp-appointment/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is ISMP certification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ISMP (Insurance Sales and Marketing Person) is the industry term for the Principal Officer of an Insurance Marketing Firm under Regulation 4 IRDAI IMF Regulations 2015. Certification involves a 50-hour training programme from an IRDAI-approved institute (Insurance Institute of India, National Insurance Academy, College of Insurance and others), followed by an IRDAI certification examination. The Principal Officer heads the IMF, bears compliance responsibility, supervises ISPs, and maintains Fit and Proper status under Schedule II."
          }
        },
        {
          "@type": "Question",
          "name": "How to become a Principal Officer of an IMF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Step 1 - Verify eligibility (Indian resident, 18+ years, degree holder, Fit and Proper, typically director or senior employee of IMF). Step 2 - Enrol in 50-hour PO programme at IRDAI-approved institute (typical fee Rs 8,000-15,000). Step 3 - Complete training (2-3 weeks). Step 4 - Sit IRDAI Principal Officer certification examination. Step 5 - Patron prepares appointment paperwork including Board Resolution, Fit and Proper declaration, Code of Conduct Undertaking. Step 6 - IRDAI portal notification or inclusion in initial IMF application package."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ISP exam for IRDAI?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Insurance Sales Person (ISP) exam is an IRDAI certification examination conducted after the 25-hour sectoral training programme. Three sectoral specialisations - Life Insurance, General Insurance, Health Insurance - each requires its own 25-hour training plus exam. ISPs can hold multiple sectoral certifications. Exam is online proctored or in-person with multiple-choice questions; pass mark typically 50-60 percent; results within 7-10 days. Pass certificate per sector forms part of IMF registration documentation."
          }
        },
        {
          "@type": "Question",
          "name": "What are IRDAI-approved training institutes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Principal IRDAI-approved institutes - Insurance Institute of India (III) Mumbai with regional centres; National Insurance Academy (NIA) Pune; College of Insurance Mumbai; Birla Institute of Insurance Studies; ICICI Lombard Training Academy; HDFC ERGO Learning Centre; Reliance Insurance Academy; LIC Management Development Centre. Programmes delivered classroom and online. Patron coordinates with the appropriate institute based on candidate location, sectoral focus, timing and cost considerations."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between ISMP and ISP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ISMP (Principal Officer) heads the IMF; one per entity; 50-hour training; IRDAI certification examination; Fit and Proper under Schedule II; responsible for compliance, IRDAI liaison, ISP supervision, code of conduct adherence. ISP (Insurance Sales Person) is front-line distributor; multiple per IMF (typically 2 to 50+); 25-hour sectoral training; sectoral exam per specialisation (Life, General, Health); Fit and Proper certification by Principal Officer; responsible for customer solicitation, product education, application submission."
          }
        },
        {
          "@type": "Question",
          "name": "What are sectoral specialisations for ISP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three sectoral specialisations per IRDAI framework - Life Insurance ISP (term, endowment, ULIP, pension, group life); General Insurance ISP (motor, fire, marine, engineering, liability, property, miscellaneous); Health Insurance ISP (individual, family floater, group, critical illness, super top-up from standalone health insurers and general insurers). Each requires separate 25-hour training and sectoral exam. ISPs can hold multiple sectoral certifications - common for senior ISPs serving diverse customer base."
          }
        },
        {
          "@type": "Question",
          "name": "What does Patron do in ISMP certification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron's coordination scope - institute selection based on candidate location, sector and timing; enrolment coordination with IRDAI-approved institute; examination scheduling support; Fit and Proper documentation drafting under Schedule II with regulatory background check; Board Resolution for PO appointment under Section 173 Companies Act 2013; IRDAI portal notification for PO change; Code of Conduct Undertaking drafting; customer disclosure templates; annual CPD tracking calendar. Patron does NOT deliver the training itself - that is the IRDAI-approved institute's role."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/ismp-certification-isp-appointment/#service",
      "name": "ISMP Certification and ISP Appointment Coordination in India",
      "description": "Patron Accounting LLP's coordination and appointment paperwork support service for Principal Officer (also known as ISMP or Insurance Sales and Marketing Person) and Insurance Sales Persons (ISPs) of an Insurance Marketing Firm under IRDAI (Registration of Insurance Marketing Firm) Regulations 2015 notified 21 January 2015. Coverage includes IRDAI-approved training institute identification and enrolment coordination for the 50-hour Principal Officer programme under Regulation 4 (covering insurance fundamentals, IMF Regulations 2015, code of conduct under Schedule I, product knowledge across life / general / health insurance lines, premium collection rules under Manner of Receipt of Premium Regulations 2002, customer protection and grievance redressal, compliance and audit framework, AML / KYC obligations, tie-up agreements with insurers under open architecture model, risk management and Fit and Proper criteria) and 25-hour Insurance Sales Person programme under Regulation 12 across three sectoral specialisations (Life Insurance ISP covering term / endowment / ULIP / pension / group life, General Insurance ISP covering motor / fire / marine / engineering / liability / property / miscellaneous, Health Insurance ISP covering individual / family floater / group / critical illness / super top-up from standalone health insurers and general insurers) with multi-sector ISPs holding two or three sectoral certifications. Coordination with IRDAI-approved training institutes including Insurance Institute of India (III) Mumbai with regional centres, National Insurance Academy (NIA) Pune, College of Insurance Mumbai, Birla Institute of Insurance Studies, ICICI Lombard Training Academy, HDFC ERGO Learning Centre, Reliance Insurance Academy, LIC Management Development Centre and others as per IRDAI Master Circular on Insurance Intermediaries approved list. IRDAI Principal Officer and ISP certification examination scheduling (online proctored or in-person with multiple-choice questions, pass mark 50-60 percent, results within 7-10 days, re-examination available if failed). Fit and Proper documentation drafting under Schedule II IMF Regulations 2015 covering integrity and reputation (no convictions in last 5 years, no regulatory adverse orders), financial soundness (no insolvency, no NPA defaults), appropriate qualifications and experience, with regulatory background check across IRDAI / SEBI / RBI / FIU databases. Board Resolution drafting for PO appointment under Section 173 Companies Act 2013, Form MGT-14 filing where PO is also a director appointed via Special Resolution under Section 117(2) Companies Act 2013 within 30 days, Explanatory Statement preparation under Section 102 Companies Act 2013 for Special Business at EGM where applicable. ISP Consent Letter drafting, ISP Fit and Proper Certification by Principal Officer, ISP Code of Conduct Undertaking under Schedule I, ISP onboarding in IMF internal register, insurer-specific ISP code generation coordination in tie-up insurer back-office systems, customer disclosure template preparation. IRDAI portal notification for PO change for existing IMFs (initial PO appointment captured in IMF registration application). Annual Continuing Professional Development (CPD) tracking calendar setup - 25 hours per year for PO, 15 hours per year per sectoral certification for ISPs - with annual reminders, CPD certificate retention for IRDAI inspection. Patron does NOT deliver the training itself - that is the role of IRDAI-approved institutes; Patron's clear scope boundary is coordination plus appointment paperwork. 4-tier fixed-fee engagement Rs 15,000 to Rs 50,000 covering standalone PO coordination through combined PO plus 10 ISPs plus CPD setup, plus annual onboarding retainer Rs 30,000 to Rs 45,000 per year for ongoing IMF operations. Section 42D and Section 42E Insurance Act 1938 intermediary framework alignment. Distinct from IMF registration hub services /insurance-marketing-firm-registration, /imf-incorporation-services and /imf-irdai-registration-process. Pune, Mumbai, Delhi and Gurugram offices with pan-India remote engagement.",
      "serviceType": "Insurance Marketing Firm Principal Officer and Sales Person Certification and Appointment Coordination",
      "provider": { "@id": "/#organization" },
      "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
      "about": [
        { "@type": "Thing", "name": "Insurance Regulatory and Development Authority of India", "sameAs": "https://en.wikipedia.org/wiki/Insurance_Regulatory_and_Development_Authority" },
        { "@type": "Thing", "name": "Professional Certification", "sameAs": "https://en.wikipedia.org/wiki/Professional_certification" }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "ISMP and ISP Coordination Engagement Tiers",
        "itemListElement": [
          { "@type": "Offer", "name": "Tier 1 - PO Coordination and Appointment (Standalone) - institute selection, training enrolment coordination, examination scheduling, Fit and Proper documentation under Schedule II, Board Resolution under Section 173 Companies Act 2013, IRDAI portal notification, Code of Conduct Undertaking", "price": "15000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/ismp-certification-isp-appointment" },
          { "@type": "Offer", "name": "Tier 2 - ISP Coordination per ISP Onboarding - per-ISP institute selection and enrolment per sectoral specialisation, examination scheduling, Fit and Proper certification by PO, Code of Conduct Undertaking, IMF register onboarding, insurer-specific code generation", "price": "5000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/ismp-certification-isp-appointment" },
          { "@type": "Offer", "name": "Tier 3 - Combined PO and Up-to-5 ISPs Onboarding - all Tier 1 deliverables for PO plus Tier 2 deliverables for up to 5 ISPs with varied sectoral specialisations plus comprehensive Fit and Proper documentation for all roles", "price": "35000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/ismp-certification-isp-appointment" },
          { "@type": "Offer", "name": "Tier 4 - Combined PO and Up-to-10 ISPs Plus CPD Setup - all Tier 3 deliverables expanded to 10 ISPs plus annual CPD tracking calendar setup plus initial compliance manual plus customer disclosure templates plus first-year quarterly returns template for ISP onboarding tracking", "price": "45000", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/ismp-certification-isp-appointment" }
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
                        ISMP Certification and ISP Appointment
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>ISMP / Principal Officer:</span> 50-hour training at IRDAI-approved institute, IRDAI certification examination, Fit and Proper documentation under Schedule II IMF Regulations 2015.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>ISP / Insurance Sales Person:</span> 25-hour sectoral training, IRDAI examination per sector, sectoral specialisations across Life / General / Health Insurance; multiple sectoral certifications possible.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Coordination Scope:</span> Patron does NOT conduct training (IRDAI-approved institutes do); Patron handles institute selection, enrolment coordination, appointment paperwork and IRDAI portal filing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 15,000 to Rs 50,000 fixed-fee tiers depending on PO + ISP count and scope; annual onboarding retainer Rs 30,000 to Rs 45,000 per year.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ISMP%20Certification%20and%20ISP%20Appointment&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20would%20like%20coordination%20support%20for%20ISMP%20%2F%20Principal%20Officer%20certification%20and%20ISP%20appointment%20under%20IRDAI%20IMF%20Regulations%202015.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20coordination%20support%20for%20ISMP%20%2F%20Principal%20Officer%20certification%20and%20ISP%20appointment%20under%20IRDAI%20IMF%20Regulations%202015." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - ISMP Certification and ISP Appointment'/>
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
                                                                <option value="ismp-certification-isp-appointment" selected>ISMP Certification and ISP Appointment</option>
                                <option value="insurance-marketing-firm-registration">IMF Registration (Hub)</option>
                                <option value="imf-incorporation-services">IMF Incorporation Services</option>
                                <option value="imf-irdai-registration-process">IRDAI IMF Registration Process</option>
                                <option value="imf-compliance-retainer-services">IMF Compliance Retainer</option>
                                <option value="private-limited-company-registration">Private Limited Company Registration</option>
                                <option value="llp-registration">LLP Registration</option>
                                <option value="statutory-audit">Statutory Audit</option>
                                <option value="income-tax-return-filing">Income Tax Return Filing</option>
                                <option value="accounting-and-bookkeeping">Accounting and Bookkeeping</option>
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

<!-- TESTIMONIALS (self-contained auto-scroll carousel, vanilla JS, no Slick) -->
<section class="imf-testi-sec">
    <style>
        .imf-testi-sec { padding: 24px 32px 8px; background: var(--white,#fff); overflow: hidden; }
        .imf-testi-sec .imf-testi-inner { max-width: 1320px; margin: 0 auto; }
        .imf-testi-sec .imf-testi-head { text-align: center; margin-bottom: 20px; }
        .imf-testi-sec .imf-testi-head h2 { font-size: clamp(26px,3.5vw,34px); font-weight: 800; color: var(--blue,#152238); margin: 0 0 8px; }
        .imf-testi-sec .imf-testi-head p { font-size: 15px; color: var(--text-muted,#6B7280); margin: 0; }
        .imf-testi-viewport { overflow: hidden; }
        .imf-testi-track { display: flex; gap: 20px; align-items: stretch; }
        .imf-testi-track > div { flex: 0 0 calc((100% - 60px) / 4); min-width: 0; }
        @media (max-width:1024px){ .imf-testi-track > div { flex: 0 0 calc((100% - 20px) / 2); } }
        @media (max-width:600px){ .imf-testi-track > div { flex: 0 0 100%; } }
        .imf-testi-sec .testi-video-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); overflow: hidden; height: 340px; display: flex; flex-direction: column; transition: all .25s ease; }
        .imf-testi-sec .testi-video-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-video-area { position: relative; height: 230px; overflow: hidden; cursor: pointer; flex-shrink: 0; }
        .imf-testi-sec .testi-video-area video { width: 100%; height: 100%; object-fit: cover; display: block; }
        .imf-testi-sec .testi-play-overlay { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,.25); transition: opacity .3s; pointer-events: none; }
        .imf-testi-sec .testi-video-area.playing .testi-play-overlay { opacity: 0; }
        .imf-testi-sec .testi-play-btn { width: 56px; height: 56px; background: rgba(232,113,44,.85); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,.3); }
        .imf-testi-sec .testi-play-btn svg { width: 22px; height: 22px; color: #fff; margin-left: 3px; }
        .imf-testi-sec .testi-star-badge { position: absolute; bottom: 12px; left: 12px; display: flex; gap: 2px; }
        .imf-testi-sec .testi-star-badge svg { width: 16px; height: 16px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-quote-card { background: var(--white,#fff); border: 1px solid var(--gray-200,#E5E7EB); border-radius: var(--radius-lg,12px); padding: 24px; height: 340px; display: flex; flex-direction: column; justify-content: space-between; transition: all .25s ease; }
        .imf-testi-sec .testi-quote-card:hover { border-color: var(--orange,#E8712C); box-shadow: var(--shadow-md,0 4px 12px rgba(0,0,0,.08)); }
        .imf-testi-sec .testi-quote-icon { color: var(--orange,#E8712C); opacity: .25; margin-bottom: 8px; }
        .imf-testi-sec .testi-quote-icon svg { width: 24px; height: 24px; }
        .imf-testi-sec .testi-quote-text { font-size: 14px; line-height: 1.65; color: var(--text-secondary,#374151); flex: 1; display: -webkit-box; -webkit-line-clamp: 6; -webkit-box-orient: vertical; overflow: hidden; margin: 0; }
        .imf-testi-sec .testi-footer { display: flex; flex-direction: column; gap: 8px; padding-top: 16px; border-top: 1px solid var(--gray-100,#F3F4F6); }
        .imf-testi-sec .testi-author { display: flex; align-items: center; gap: 10px; }
        .imf-testi-sec .testi-avatar { width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 14px; font-weight: 700; color: #fff; flex-shrink: 0; overflow: hidden; background: var(--orange,#E8712C); }
        .imf-testi-sec .testi-avatar img { width: 100%; height: 100%; object-fit: cover; }
        .imf-testi-sec .testi-avatar.blue { background: var(--blue,#152238); }
        .imf-testi-sec .testi-avatar.teal { background: #0D9488; }
        .imf-testi-sec .testi-avatar.purple { background: #7C3AED; }
        .imf-testi-sec .testi-name { font-size: 14px; font-weight: 700; color: var(--text-primary,#111827); line-height: 1.2; }
        .imf-testi-sec .testi-role { font-size: 12px; color: var(--text-muted,#6B7280); }
        .imf-testi-sec .testi-rating-row { display: flex; align-items: center; justify-content: space-between; }
        .imf-testi-sec .testi-stars { display: flex; gap: 1px; }
        .imf-testi-sec .testi-stars svg { width: 12px; height: 12px; fill: #FFC107; color: #FFC107; }
        .imf-testi-sec .testi-google-badge { width: 22px; height: 22px; }
        .imf-testi-sec .testi-google-badge img { width: 100%; height: 100%; }
        .imf-testi-cta { margin-top: 20px; background: var(--blue,#152238); border-radius: 12px; padding: 22px 26px; display: flex; align-items: center; justify-content: space-between; gap: 18px; flex-wrap: wrap; }
        .imf-testi-cta h3 { color: #fff; margin: 0 0 6px; font-size: 20px; font-weight: 800; }
        .imf-testi-cta p { color: rgba(255,255,255,.85); margin: 0; font-size: 14px; max-width: 760px; }
        .imf-testi-cta a { background: var(--orange,#E8712C); color: #fff; padding: 12px 26px; border-radius: 50px; font-weight: 700; text-decoration: none; white-space: nowrap; flex-shrink: 0; }
        @media (max-width:768px){ .imf-testi-sec { padding: 16px 16px 8px; } .imf-testi-cta { flex-direction: column; text-align: center; } }
    </style>
    <div class="imf-testi-inner">
        <div class="imf-testi-head">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, and stay in control.</p>
        </div>
        <div class="imf-testi-viewport">
            <div class="imf-testi-track" id="imfTestiTrack">
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"><source src="/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg" alt="Sunny Ashpal"></div>
                            <div><div class="testi-name">Sunny Ashpal</div><div class="testi-role">Director - Demandify Media</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Really a fantastic experience with Patron Accounting especially Shubham. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">Very proficient and professional staff. Do a fantastic job with instant response. Strongly recommended for all accounting needs, especially for startups and growing businesses.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar ">A</div><div><div class="testi-name">Anita Gaur</div><div class="testi-role">5 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-video-card">
                        <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                            <video preload="metadata" poster="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"><source src="/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4" type="video/mp4"></video>
                            <div class="testi-play-overlay"><div class="testi-play-btn"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
                            <div class="testi-star-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div>
                        </div>
                        <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                            <div class="testi-avatar"><img src="/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg" alt="Anjanay Srivastava"></div>
                            <div><div class="testi-name">Anjanay Srivastava</div><div class="testi-role">Founder - Hunarsource Consulting</div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I contacted them to file the ITR. Shubham was the POC for me and he was really very professional, giving prompt responses. Highly recommend them for tax and compliance work.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar blue">P</div><div><div class="testi-name">Pankaj Arvikar</div><div class="testi-role">1 month ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">From the very beginning their approach has been highly professional, prompt and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar teal">P</div><div><div class="testi-name">Preeti Singh Rathor</div><div class="testi-role">3 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testi-quote-card">
                        <div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div>
                        <p class="testi-quote-text">I called Patron to file ITR for my family members. I worked with Shubham and Amin Jain and it was a smooth process. They understand the basics very well and respond promptly.</p>
                        <div class="testi-footer">
                            <div class="testi-author"><div class="testi-avatar purple">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div>
                            <div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imf-testi-cta">
            <div>
                <h3>Join 10,000+ Satisfied Businesses</h3>
                <p>From SEBI RIAs to mutual fund distributors and corporate agents, businesses across India trust Patron for compliant IMF setup and IRDAI registration.</p>
            </div>
            <a href="tel:+919459456700">Talk to an Expert &rarr;</a>
        </div>
    </div>
</section>
<script>
function toggleTestiVideo(area){
    var v=area.querySelector('video'); if(!v) return;
    if(v.paused){ document.querySelectorAll('.testi-video-area video').forEach(function(x){ x.pause(); x.closest('.testi-video-area').classList.remove('playing'); }); v.play(); area.classList.add('playing'); }
    else { v.pause(); area.classList.remove('playing'); }
}
(function(){
    var track=document.getElementById('imfTestiTrack'); if(!track) return;
    var vp=track.parentElement, paused=false, animating=false;
    vp.addEventListener('mouseenter',function(){ paused=true; });
    vp.addEventListener('mouseleave',function(){ paused=false; });
    function step(){
        if(paused||animating||track.children.length<2) return;
        if(track.querySelector('.testi-video-area.playing')) return;
        var first=track.children[0];
        var w=first.getBoundingClientRect().width+20;
        animating=true;
        track.style.transition='transform .6s ease';
        track.style.transform='translateX(-'+w+'px)';
        window.setTimeout(function(){
            track.style.transition='none';
            track.appendChild(first);
            track.style.transform='translateX(0)';
            animating=false;
        },640);
    }
    window.setInterval(step,3000);
})();
</script>

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
            <button class="toc-btn" onclick="document.getElementById('what-section').scrollIntoView({behavior:'smooth',block:'start'});">ISMP and ISP Explained</button>
            <button class="toc-btn" onclick="document.getElementById('who-section').scrollIntoView({behavior:'smooth',block:'start'});">Who Needs This</button>
            <button class="toc-btn" onclick="document.getElementById('services-section').scrollIntoView({behavior:'smooth',block:'start'});">Patron Coordination Scope</button>
            <button class="toc-btn" onclick="document.getElementById('procedure-section').scrollIntoView({behavior:'smooth',block:'start'});">7-Phase Workflow</button>
            <button class="toc-btn" onclick="document.getElementById('documents-section').scrollIntoView({behavior:'smooth',block:'start'});">Appointment Paperwork</button>
            <button class="toc-btn" onclick="document.getElementById('challenges-section').scrollIntoView({behavior:'smooth',block:'start'});">Common Mistakes</button>
            <button class="toc-btn" onclick="document.getElementById('fees-section').scrollIntoView({behavior:'smooth',block:'start'});">4-Tier Fees</button>
            <button class="toc-btn" onclick="document.getElementById('timeline-section').scrollIntoView({behavior:'smooth',block:'start'});">Training to Appointment</button>
            <button class="toc-btn" onclick="document.getElementById('benefits-section').scrollIntoView({behavior:'smooth',block:'start'});">Why Patron</button>
            <button class="toc-btn" onclick="document.getElementById('comparison-section').scrollIntoView({behavior:'smooth',block:'start'});">Patron vs Institute</button>
            <button class="toc-btn" onclick="document.getElementById('faq-section').scrollIntoView({behavior:'smooth',block:'start'});">FAQs</button>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>








<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview - ISMP and ISP Coordination</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ISMP Certification and ISP Appointment Services at a Glance</strong></p>
                    <p>Every Insurance Marketing Firm operates through two regulatory roles - a Principal Officer (referred to in industry as ISMP or Insurance Sales and Marketing Person) who heads the IMF and is responsible for compliance, and Insurance Sales Persons (ISPs) who undertake the actual solicitation and procurement of insurance business. Both roles require IRDAI-approved certification under IMF Regulations 2015 - 50 hours of training and IRDAI examination for the Principal Officer (Regulation 4); 25 hours of training and IRDAI examination for each ISP (Regulation 12). Training is delivered by IRDAI-approved institutes including Insurance Institute of India (III), National Insurance Academy (NIA), College of Insurance and others. ISPs typically pursue sectoral specialisations - Life Insurance ISP, General Insurance ISP, Health Insurance ISP - and can hold multiple certifications. Patron does NOT conduct the training itself; Patron coordinates institute enrolment, scheduling, Fit and Proper documentation under Schedule II, IRDAI appointment paperwork, Board Resolutions, Code of Conduct undertakings and ongoing compliance. Fees Rs 15,000 to Rs 50,000 fixed-fee tiers.</p>
                </div>
                <p>The Insurance Marketing Firm framework relies on two regulatory roles. The Principal Officer (called ISMP in industry parlance) heads the IMF and bears overall compliance responsibility, including liaison with IRDAI, supervision of insurance solicitation, code of conduct adherence and Fit and Proper maintenance. Insurance Sales Persons (ISPs) are the front-line distributors who actually solicit and procure insurance business from customers across life, general and health insurance products. Both roles require IRDAI-approved certification before the IMF can commence operations.</p>
                <p>Patron's coordination engagement bridges between the IMF entity and the IRDAI-approved training institutes (Insurance Institute of India, National Insurance Academy and others) - we identify the right institute and training programme, enrol candidates, track examinations, prepare Fit and Proper documentation under Schedule II IMF Regulations 2015, file appointment paperwork with IRDAI, draft Board Resolutions, prepare Code of Conduct undertakings, and set up Continuing Professional Development tracking. Patron does NOT deliver the training itself - that is the role of IRDAI-approved institutes. Verify framework through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India (IRDAI)</a>; intermediary training framework at the <a href="https://www.insuranceinstituteofindia.com" target="_blank" rel="noopener">Insurance Institute of India (III)</a>; executive education at the <a href="https://www.niapune.org.in" target="_blank" rel="noopener">National Insurance Academy (NIA) Pune</a>; corporate filings for Board Resolution and MGT-14 at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>.</p>
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
                <h2 class="section-title">ISMP / Principal Officer and ISP / Insurance Sales Person</h2>
                <div class="content-text what-is-definition">
                    
                                        <p><strong>ISMP / Principal Officer - The 50-Hour Programme:</strong> Under Regulation 4 IRDAI IMF Regulations 2015, every IMF must have a Principal Officer responsible for compliance and supervision. The PO completes a 50-hour training programme covering insurance fundamentals (principles, products, market structure), IRDAI regulatory framework, Code of Conduct under Schedule I, product knowledge across life / general / health insurance, premium collection rules under Manner of Receipt of Premium Regulations 2002, customer protection and grievance redressal, compliance and audit framework, AML / KYC obligations, tie-up agreements under open architecture, and risk management. The PO sits an IRDAI certification examination (online proctored or in-person, multiple-choice questions, pass mark 50-60 percent, results within 7-10 days). Eligibility - Indian resident, 18+ years, degree holder, sufficient experience or qualification in insurance / finance / business, Fit and Proper under Schedule II (no convictions in last 5 years, no regulatory adverse orders, no insolvency, no NPA defaults), member or employee of the IMF. One PO per IMF - the role cannot be split or shared.</p>
                    <p><strong>ISP / Insurance Sales Person - The 25-Hour Programme:</strong> Under Regulation 12 IRDAI IMF Regulations 2015, Insurance Sales Persons are the front-line distributors of an IMF. Each ISP completes a 25-hour training programme and IRDAI certification examination per sectoral specialisation. ISP eligibility - minimum Class 12 pass for general (urban) areas; Class 10 pass acceptable for rural areas; Indian resident, 18+ years; Fit and Proper certification by Principal Officer of the IMF; member or employee of the IMF entity; no prior IRDAI adverse action or cancellation; no criminal conviction in last 5 years.</p>
                    <p><strong>Three Sectoral Specialisations:</strong> Life Insurance ISP (term, endowment, ULIP, pension, group life products); General Insurance ISP (motor, fire, marine, engineering, liability, property, miscellaneous); Health Insurance ISP (individual, family floater, group, critical illness, super top-up from standalone health insurers and general insurers). Each requires separate 25-hour training plus sectoral examination. Multi-Sector ISPs combine two or three sectoral certifications - common for senior ISPs serving diverse customer base.</p>
                    <p><strong>IRDAI-Approved Training Institutes:</strong> Training for both ISMP and ISP must be obtained from IRDAI-approved institutes. Training delivered by non-approved institutes is NOT recognised. Principal approved institutes include - Insurance Institute of India (III) Mumbai with regional centres across India (PO certification, ISP certification all 3 sectors, CPD courses, broker exams), National Insurance Academy (NIA) Pune (PO and ISP certification, executive education, research programmes), College of Insurance Mumbai, Birla Institute of Insurance Studies, ICICI Lombard Training Academy, HDFC ERGO Learning Centre, Reliance Insurance Academy, LIC Management Development Centre. Typical institute fees - Rs 8,000 to Rs 15,000 for PO programme; Rs 3,000 to Rs 5,000 per sectoral ISP programme. Examination fees Rs 500 to Rs 1,500 separately. IRDAI publishes the authoritative updated list.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ISMP Certification and ISP Appointment:</strong></p>
                                        <ul style="margin-top:12px;">
                        <li><strong>ISMP (Insurance Sales and Marketing Person):</strong> Industry term for the Principal Officer of an IMF under Regulation 4 IRDAI IMF Regulations 2015. Heads the IMF, bears compliance responsibility, supervises ISPs.</li>
                        <li><strong>Principal Officer (PO):</strong> Official regulatory term in Regulation 4. ISMP and PO are synonymous in usage.</li>
                        <li><strong>ISP (Insurance Sales Person):</strong> Front-line distributor of an IMF under Regulation 12. Multiple per IMF (typically 2 to 50+). 25-hour sectoral training; sectoral exam per specialisation.</li>
                        <li><strong>Regulation 4 IMF Regulations 2015:</strong> 50-hour Principal Officer training, IRDAI certification examination, Fit and Proper criteria.</li>
                        <li><strong>Regulation 12 IMF Regulations 2015:</strong> 25-hour Insurance Sales Person sectoral training, IRDAI examination, sectoral specialisations.</li>
                        <li><strong>Schedule I IMF Regulations 2015:</strong> Code of Conduct for IMFs, Principal Officers and ISPs - mandatory undertaking from PO and each ISP.</li>
                        <li><strong>Schedule II IMF Regulations 2015 - Fit and Proper:</strong> Criteria for Principal Officer, directors and major shareholders (10 percent or more) - integrity and reputation (no convictions, no regulatory adverse orders), financial soundness (no insolvency, no NPA defaults), appropriate qualifications and experience.</li>
                        <li><strong>50-Hour Programme:</strong> Principal Officer training covering insurance fundamentals, IMF Regulations, code of conduct, product knowledge (life / general / health), premium collection rules, AML / KYC, tie-up agreements, risk management.</li>
                        <li><strong>25-Hour Programme:</strong> Insurance Sales Person sectoral training covering insurance product fundamentals (sector-specific), customer needs analysis, Insurance Act 1938 and IRDAI regulatory framework, Code of Conduct, product features / exclusions / premium structures, claims process, anti-mis-selling and customer protection, documentation and KYC.</li>
                        <li><strong>Sectoral Specialisation:</strong> Life Insurance ISP, General Insurance ISP, Health Insurance ISP. ISPs may hold multiple sectoral certifications.</li>
                        <li><strong>CPD (Continuing Professional Development):</strong> Annual training hours requirement to maintain certification - typically 25 hours per year for PO, 15 hours per year per sectoral certification for ISPs.</li>
                        <li><strong>Section 173 Companies Act 2013:</strong> Board appointment authority for Principal Officer - resolution required.</li>
                        <li><strong>Section 117(2) Companies Act 2013:</strong> Form MGT-14 filing within 30 days where PO is also a director appointed via Special Resolution.</li>
                        <li><strong>Section 42D and 42E Insurance Act 1938:</strong> Intermediary registration framework and functions / obligations of intermediaries.</li>
                        <li><strong>Insurer-Specific ISP Code:</strong> Each tie-up insurer requires ISP code generation in its back-office system before policies can be issued under that ISP.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ISMP Certification and ISP Appointment</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Regulation 4 + 12</span>
                        <strong>PO 50hr + ISP 25hr - IRDAI Certified</strong>
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
            <h2 class="section-title">Who Needs ISMP Certification and ISP Appointment Coordination</h2>
            <div class="content-text">
                
                                <p>ISMP / Principal Officer certification and ISP / Insurance Sales Person appointment coordination is required when one or more of the following apply:</p>
                <ul>
                    <li>You are forming a new Insurance Marketing Firm and need PO + initial ISPs in place before IRDAI IMF registration application can be filed.</li>
                    <li>You are an existing IMF and your Principal Officer has resigned, retired, or is otherwise changing - you have 60 days to onboard a new PO with IRDAI portal notification.</li>
                    <li>You are an existing IMF onboarding new ISPs - whether sectoral expansion (adding Health Insurance ISP to a Life-only setup) or volume scale-up (4 new General Insurance ISPs across regions).</li>
                    <li>You are a sub-broker, corporate agent or other insurance distribution entity migrating staff to ISP roles under the IMF framework.</li>
                    <li>You are an HR team needing certification roadmaps and appointment paperwork support for insurance distribution personnel.</li>
                    <li>You are an IMF founder/director who needs to be appointed as Principal Officer yourself - and need Patron to coordinate institute enrolment, Fit and Proper documentation, Board Resolution, and IRDAI portal notification.</li>
                    <li>You are due for IMF Registration renewal and need PO and ISP Fit and Proper refresh certifications.</li>
                    <li>You have ISPs whose certification is expiring and need Continuing Professional Development (CPD) tracking to prevent lapse.</li>
                    <li>You have Code of Conduct undertaking gaps (Schedule I) in your IMF compliance file flagged in audit.</li>
                    <li>You are signing a new tie-up insurer and need ISP code generation coordinated with the insurer back office.</li>
                    <li>You are operating in Pune, Mumbai, Delhi, Gurugram or anywhere in India - Patron supports pan-India coordination both in-person at office locations and fully remote.</li>
                </ul>
                <p><strong>Statutory Deadline Snapshot:</strong> Principal Officer training (50 hours) typically 2-3 weeks contact. PO IRDAI examination - online proctored or in-person at approved exam centres; result within 7-10 days. ISP training (25 hours per sector). Form MGT-14 if PO is director appointed via Special Resolution - filed within 30 days under Section 117(2) Companies Act 2013. IRDAI portal PO change notification - immediate on PO change. Annual CPD hours - 25 hours for PO, 15 hours per sectoral certification for ISPs. IMF Registration cycle - 3 years; PO certification re-verified at each renewal.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Coordination Scope - What We Do and Do Not Do</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Training Institute Selection</td>
                            <td>Recommend the right IRDAI-approved institute based on candidate location, sectoral focus, timing preferences and cost considerations - across III Mumbai, NIA Pune, College of Insurance and others.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Training Enrolment Coordination</td>
                            <td>Liaise on candidate behalf with the chosen IRDAI-approved institute for prompt enrolment in the 50-hour PO programme or 25-hour ISP sectoral programme.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>50-Hour PO Training Delivery</td>
                            <td>Delivered by IRDAI-approved institute (Insurance Institute of India, National Insurance Academy, College of Insurance and others). Patron does NOT deliver training.</td>
                            <td><span class="badge-included">Institute</span></td>
                        </tr>
                        <tr>
                            <td>25-Hour ISP Sectoral Training Delivery</td>
                            <td>Delivered by IRDAI-approved institute including insurer-specific academies (ICICI Lombard, HDFC ERGO, Reliance, LIC). Patron does NOT deliver training.</td>
                            <td><span class="badge-included">Institute</span></td>
                        </tr>
                        <tr>
                            <td>IRDAI Examination Scheduling Support</td>
                            <td>Support candidate booking of online proctored or in-person examination at approved exam centres; track candidate through examination and result.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Pass Certificate Issuance</td>
                            <td>Institute issues pass certificate on behalf of IRDAI on successful examination completion (result within 7-10 days).</td>
                            <td><span class="badge-included">Institute</span></td>
                        </tr>
                        <tr>
                            <td>Fit and Proper Documentation</td>
                            <td>Draft Schedule II declarations for PO, directors and major shareholders (10 percent or more) covering integrity, reputation, financial soundness, qualifications and experience; regulatory background check across IRDAI / SEBI / RBI / FIU databases.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Board Resolution for PO Appointment</td>
                            <td>Draft Board Resolution per Section 173 Companies Act 2013; PO Consent Letter; Form MGT-14 filing where PO is also director appointed via Special Resolution under Section 117(2) Companies Act 2013 within 30 days.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>IRDAI Portal Notification for PO Change</td>
                            <td>File PO change notification through IMF portal with new PO credentials, training certificate, IRDAI exam pass certificate, Fit and Proper declaration.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>ISP Onboarding Paperwork</td>
                            <td>ISP Consent Letter, Fit and Proper Certification by PO, Code of Conduct Undertaking per Schedule I, IMF internal register update, qualifications package indexing.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Code of Conduct Undertaking Drafting</td>
                            <td>Draft and obtain signed Schedule I Code of Conduct undertaking from Principal Officer and each ISP - mandatory for compliance file.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Insurer-Specific ISP Code Generation</td>
                            <td>Coordinate with each tie-up insurer back office for ISP code generation - critical to enable policy issuance under that ISP and start revenue.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Annual CPD Tracking Calendar</td>
                            <td>Calendar maintained for PO (25 hours per year) and ISPs (15 hours per sectoral certification per year); annual reminders; CPD certificate retention.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Compliance Manual Drafting</td>
                            <td>Internal compliance manual aligned with PO obligations under IMF Regulations 2015; customer disclosure templates.</td>
                            <td><span class="badge-included">Patron Handles</span></td>
                        </tr>
                        <tr>
                            <td>Ongoing IMF Compliance (Quarterly Returns etc.)</td>
                            <td>Separate engagement via Patron IMF Compliance Retainer Services - quarterly returns, annual audit, renewal cycle support.</td>
                            <td><span class="badge-included">Separate</span></td>
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
            <h2 class="section-title">7-Phase ISMP and ISP Coordination Workflow</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured 60-day workflow from institute selection through final IRDAI appointment - institute enrolment, parallel PO and ISP training tracks, examinations, Fit and Proper documentation, Board Resolution drafting under Section 173 Companies Act 2013, IRDAI portal notification, and insurer-specific code generation.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 1</span>
                    <h3 class="step-title">Selection - Institute Recommendation and Eligibility Check</h3>
                    <p class="step-description">
                        Days 1-5. Patron recommends the right IRDAI-approved institute based on candidate location, sectoral focus, timing and cost. KYC and eligibility verified - degree certificate, Class 12 / 10 pass certificate for ISP, Fit and Proper preliminary screen. Engagement letter signed; fee tier confirmed.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Institute selected
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Engagement live
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="22" fill="none" stroke="#14365F" stroke-width="2"/>
                                <line x1="68" y1="68" x2="92" y2="92" stroke="#F5A623" stroke-width="4" stroke-linecap="round"/>
                                <text x="50" y="55" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">III/NIA</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Selection</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 2</span>
                    <h3 class="step-title">Enrolment - Institute Registration and Payment</h3>
                    <p class="step-description">
                        Days 5-10. Institute enrolment processed for PO 50-hour programme and / or ISP 25-hour sectoral programmes; institute training fee paid (typical Rs 8,000-15,000 PO; Rs 3,000-5,000 ISP per sector); examination fees Rs 500-1,500 separately. Access credentials issued.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Enrolment confirmed
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Credentials issued
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="44" font-size="11" fill="#14365F" text-anchor="middle" font-weight="700">ENROL</text>
                                <text x="60" y="62" font-size="9" fill="#F5A623" text-anchor="middle" font-weight="700">PAID</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Enrolled</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 3</span>
                    <h3 class="step-title">PO 50-Hour Training (Parallel ISP 25-Hour Training)</h3>
                    <p class="step-description">
                        Days 10-35. PO completes 50-hour programme (typically 2-3 weeks contact) covering insurance fundamentals, IMF Regulations 2015, code of conduct under Schedule I, product knowledge across life / general / health, premium collection rules, AML / KYC. ISP candidates start their 25-hour sectoral programmes in parallel - Life / General / Health.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            50hr PO in progress
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ISP parallel tracks
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="15" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="60" y="32" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">50 HR</text>
                                <line x1="30" y1="42" x2="90" y2="42" stroke="#F5A623" stroke-width="3"/>
                                <line x1="30" y1="55" x2="80" y2="55" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                                <line x1="30" y1="65" x2="85" y2="65" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                                <line x1="30" y1="75" x2="75" y2="75" stroke="#14365F" stroke-width="1" opacity="0.4"/>
                            </svg>
                        </div>
                        <span class="illustration-label">Training</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 4</span>
                    <h3 class="step-title">PO IRDAI Certification Examination</h3>
                    <p class="step-description">
                        Days 35-45. Principal Officer sits IRDAI certification examination - online proctored or in-person at approved exam centres; multiple-choice questions covering 50-hour syllabus; pass mark typically 50-60 percent. Result typically within 7-10 days. Pass certificate issued by training institute on behalf of IRDAI; forms part of IRDAI IMF application package.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            PO exam cleared
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Pass certificate
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="30" y="15" width="60" height="70" rx="4" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <text x="60" y="35" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">EXAM</text>
                                <circle cx="60" cy="55" r="14" fill="#F0F4F8" stroke="#F5A623" stroke-width="2"/>
                                <path d="M52 55 L58 61 L70 49" stroke="#F5A623" stroke-width="3" stroke-linecap="round" fill="none"/>
                                <text x="60" y="80" font-size="8" fill="#F5A623" text-anchor="middle" font-weight="700">PASS</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Certified</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 5</span>
                    <h3 class="step-title">ISP Sectoral Examinations</h3>
                    <p class="step-description">
                        Days 25-50 (parallel to PO track). Each ISP completes 25-hour sectoral training and sits IRDAI sectoral certification examination - Life Insurance / General Insurance / Health Insurance. Multi-sector ISPs may complete 2 or 3 sectoral exams sequentially. Pass certificate issued per sector; ISP can hold multiple certifications.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            ISP sectoral passes
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Per-sector certs
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="20" y="20" width="80" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                <text x="40" y="42" font-size="8" fill="#14365F" text-anchor="middle" font-weight="700">LIFE</text>
                                <text x="60" y="42" font-size="8" fill="#F5A623" text-anchor="middle" font-weight="700">GEN</text>
                                <text x="80" y="42" font-size="8" fill="#14365F" text-anchor="middle" font-weight="700">HLTH</text>
                                <line x1="40" y1="78" x2="80" y2="78" stroke="#F5A623" stroke-width="3"/>
                                <text x="60" y="58" font-size="9" fill="#14365F" text-anchor="middle" font-weight="700">25 HR</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Sectoral</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 6</span>
                    <h3 class="step-title">Documentation - Fit and Proper, Board Resolutions, Consents</h3>
                    <p class="step-description">
                        Days 45-55. Fit and Proper declarations drafted under Schedule II for PO, directors and major shareholders. Board Resolution for PO appointment drafted under Section 173 Companies Act 2013; PO Consent Letter. ISP Consent Letters, Fit and Proper Certifications by PO, Code of Conduct Undertakings under Schedule I drafted and signatures obtained.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            F&amp;P + Board Res
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Code of Conduct
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="30" y="15" width="60" height="70" rx="4" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <line x1="38" y1="30" x2="82" y2="30" stroke="#14365F" stroke-width="2"/>
                                <line x1="38" y1="42" x2="78" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="38" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="38" y1="62" x2="75" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <line x1="38" y1="72" x2="78" y2="72" stroke="#14365F" stroke-width="1.5" opacity="0.5"/>
                                <text x="60" y="80" font-size="8" fill="#F5A623" text-anchor="middle" font-weight="700">DOCS</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Drafted</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 7</span>
                    <h3 class="step-title">Appointment Filing - IRDAI Portal and Insurer Codes</h3>
                    <p class="step-description">
                        Days 55-60. IRDAI portal notification filed for PO change (existing IMFs) or PO captured in initial IMF registration package. ISP onboarded in IMF internal register. Form MGT-14 filed within 30 days if PO is also director appointed via Special Resolution. Insurer-specific ISP code generation coordinated with each tie-up insurer back office to enable policy issuance.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            IRDAI portal filed
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Insurer codes live
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
                        <span class="illustration-label">Appointed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Phase 8</span>
                    <h3 class="step-title">CPD Tracking Setup and Ongoing Maintenance</h3>
                    <p class="step-description">
                        Ongoing post Day 60. CPD tracking calendar set up for PO (25 hours per year) and ISPs (15 hours per sectoral certification per year); annual reminders scheduled. Fit and Proper status maintenance reviewed. PO change processing if applicable. Annual Code of Conduct undertaking refresh. Compliance manual updates aligned with IRDAI circular changes.
                    </p>
                    <div class="step-highlights">
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            CPD calendar live
                        </span>
                        <span class="highlight-tag">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                            Annual refresh
                        </span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="25" y="20" width="70" height="55" rx="4" fill="#FEF4EE" stroke="#F5A623" stroke-width="2"/>
                                <line x1="35" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="2"/>
                                <text x="60" y="50" font-size="10" fill="#14365F" text-anchor="middle" font-weight="700">CPD</text>
                                <text x="60" y="65" font-size="8" fill="#F5A623" text-anchor="middle" font-weight="700">25/15 HR</text>
                            </svg>
                        </div>
                        <span class="illustration-label">Ongoing</span>
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
            <h2 class="section-title">Appointment Paperwork - PO and ISP Documents</h2>
            <div class="content-text">
                
                                <p>Once certification is obtained, the appointment must be formalised with IRDAI through the IMF portal. Patron drafts and files the following appointment paperwork. Documents shared via WhatsApp +91 945 945 6700, secure file transfer, e-mail or in-person at Pune / Mumbai / Delhi / Gurugram offices.</p>
                <p><strong>Principal Officer Appointment Paperwork:</strong></p>
                <ul>
                    <li><strong>Board Resolution appointing the Principal Officer</strong> - drafted under Section 173 Companies Act 2013; Special Resolution where required.</li>
                    <li><strong>PO Consent Letter</strong> - acceptance of role and obligations under IMF Regulations 2015.</li>
                    <li><strong>PO Fit and Proper Declaration</strong> - personal declaration under Schedule II IMF Regulations 2015 with KYC verification and regulatory background check (IRDAI / SEBI / RBI / FIU databases).</li>
                    <li><strong>PO Qualifications Package</strong> - degree certificate, 50-hour training certificate from IRDAI-approved institute, IRDAI exam pass certificate, PAN / Aadhaar / address proof.</li>
                    <li><strong>PO Code of Conduct Undertaking</strong> - signed undertaking per Schedule I IMF Regulations 2015.</li>
                    <li><strong>IRDAI Portal Update</strong> - PO change notification through IMF portal if not initial registration; uploaded with PO qualifications package.</li>
                    <li><strong>Form MGT-14</strong> - filed within 30 days under Section 117(2) Companies Act 2013 where PO is also a director appointed via Special Resolution; Explanatory Statement under Section 102 attached.</li>
                </ul>
                <p><strong>ISP Appointment Paperwork (Per ISP):</strong></p>
                <ul>
                    <li><strong>ISP Consent Letter</strong> - signed by individual accepting ISP role and obligations.</li>
                    <li><strong>ISP Fit and Proper Certification by Principal Officer</strong> - PO certifies the ISP meets eligibility and integrity standards.</li>
                    <li><strong>ISP Code of Conduct Undertaking</strong> - signed undertaking per Schedule I IMF Regulations 2015.</li>
                    <li><strong>ISP Qualifications Package</strong> - education certificate (Class 12 urban / Class 10 rural), 25-hour training certificate per sector, IRDAI exam pass certificate per sector, KYC documents.</li>
                    <li><strong>ISP Onboarding in IMF Internal Register</strong> - structured register maintained for IRDAI inspection with ISP name, sectoral certifications, joining date, insurer-specific codes.</li>
                    <li><strong>Insurer-Specific Onboarding</strong> - each tie-up insurer requires ISP code generation in its back-office system; policy assignment under that ISP enabled only after code generation.</li>
                    <li><strong>Customer Disclosure Templates</strong> - ISP details made available to customers as per Code of Conduct - mandatory pre-sale disclosure.</li>
                </ul>
                <p style="margin-top:16px;">Verify framework through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India (IRDAI)</a>; intermediary training framework at the <a href="https://www.insuranceinstituteofindia.com" target="_blank" rel="noopener">Insurance Institute of India</a>; executive education at the <a href="https://www.niapune.org.in" target="_blank" rel="noopener">National Insurance Academy</a>; corporate filings at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA21 portal</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Certification and Appointment Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Training from a Non-IRDAI-Approved Institute</td>
                            <td>Some candidates enrol in unrelated insurance courses thinking it satisfies the IRDAI requirement. Only IRDAI-approved institutes' programmes are recognised - training delivered outside the approved list is NOT recognised.</td>
                            <td>Patron verifies institute approval status before enrolment - cross-checked against IRDAI's authoritative list of approved institutes maintained by the Authority.</td>
                        </tr>
                        <tr>
                            <td>PO Certification Without Sectoral Coverage</td>
                            <td>Some training programmes focus narrowly on one insurance sector. PO programme must cover all three sectors (life, general, health) for the open architecture model to function - narrow programmes leave compliance gaps.</td>
                            <td>Patron selects comprehensive programmes - III, NIA and College of Insurance offer full 3-sector PO programmes covering life / general / health product knowledge.</td>
                        </tr>
                        <tr>
                            <td>ISP Sectoral Certification Mismatched with Business Plan</td>
                            <td>Onboarding only Life Insurance ISPs while the business plan emphasises health insurance creates capability gap and customer-experience friction; insurer tie-up agreements may be underutilised.</td>
                            <td>Patron aligns sectoral mix with business plan and insurer tie-ups at intake stage - mapping insurer products to sectoral ISP coverage before enrolment.</td>
                        </tr>
                        <tr>
                            <td>Fit and Proper Declaration Not Signed by Candidate</td>
                            <td>PO Fit and Proper declaration is a personal undertaking by the candidate; an HR or company-attested version is insufficient under Schedule II. Schedule II violation triggers IMF registration suspension risk.</td>
                            <td>Patron ensures personal signature with KYC verification - regulatory background check across IRDAI, SEBI, RBI, FIU databases included in documentation pack.</td>
                        </tr>
                        <tr>
                            <td>ISP Certification Expired Without Renewal CPD</td>
                            <td>ISPs require annual CPD hours (15 hours per sectoral certification); lapse may not be flagged until IMF Registration renewal cycle. CPD lapse triggers re-certification requirement.</td>
                            <td>Patron sets up CPD tracking calendar with annual reminders - CPD certificate retention organised for IRDAI inspection.</td>
                        </tr>
                        <tr>
                            <td>Code of Conduct Undertaking Missing for ISPs</td>
                            <td>Each ISP must sign a Code of Conduct undertaking per Schedule I IMF Regulations 2015; missing undertakings create compliance audit gaps and Schedule I violation exposure.</td>
                            <td>Patron drafts Code of Conduct Undertakings during onboarding and obtains signed copies; maintained in IMF compliance file for IRDAI inspection.</td>
                        </tr>
                        <tr>
                            <td>ISP Code Generation with Insurer Back Office Delayed</td>
                            <td>Each tie-up insurer requires ISP code generation in its back-office system before policies can be issued under that ISP. Delays in code generation block early revenue and create customer experience friction.</td>
                            <td>Patron coordinates code generation in parallel with ISP onboarding - liaison with each tie-up insurer back office to enable policy issuance within days of ISP appointment.</td>
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
            <h2 class="section-title">Patron 4-Tier Engagement Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Free Coordination Scoping Call</td>
                            <td>Free - 30-minute scoping call to identify PO and ISP needs, sectoral mix, timing and engagement tier; response within 4 hours; in-person at any Patron office or by phone / video / WhatsApp</td>
                        </tr>
                        <tr>
                            <td>Patron Accounting Professional Fees (entry-level diagnostic add-on)</td>
                            <td>Starting from INR 2,999 (Exl GST and Govt. Charges) for initial scoping document including institute recommendation and certification roadmap; credited if Tier 1 / 2 / 3 / 4 engagement signed within 30 days</td>
                        </tr>
                        <tr>
                            <td>Tier 1 - PO Coordination and Appointment (Standalone)</td>
                            <td>Rs 15,000 to Rs 20,000 (excl. GST; training and exam fees pass-through) - PO institute selection, training enrolment, examination scheduling, Fit and Proper documentation under Schedule II, Board Resolution under Section 173 Companies Act 2013, IRDAI portal notification, Code of Conduct Undertaking</td>
                        </tr>
                        <tr>
                            <td>Tier 2 - ISP Coordination and Appointment (Per ISP)</td>
                            <td>Rs 5,000 to Rs 8,000 per ISP (excl. GST) - per-ISP institute selection per sectoral specialisation, examination scheduling, Fit and Proper certification by PO, Code of Conduct Undertaking, IMF register onboarding, insurer-specific code generation. Typically combined with Tier 1 or Tier 3</td>
                        </tr>
                        <tr>
                            <td>Tier 3 - Combined PO and Up-to-5 ISPs Onboarding</td>
                            <td>Rs 35,000 to Rs 45,000 (excl. GST and pass-through training fees) - all Tier 1 deliverables for PO plus Tier 2 deliverables for up to 5 ISPs with varied sectoral specialisations plus comprehensive Fit and Proper documentation for all roles plus Board Resolution and IRDAI portal updates</td>
                        </tr>
                        <tr>
                            <td>Tier 4 - Combined PO and Up-to-10 ISPs Plus Annual CPD Setup</td>
                            <td>Rs 45,000 to Rs 50,000 (excl. GST and pass-through training fees) - all Tier 3 deliverables expanded to 10 ISPs plus annual CPD tracking calendar setup plus initial compliance manual drafting plus customer disclosure templates plus first-year quarterly returns template for ISP onboarding tracking</td>
                        </tr>
                        <tr>
                            <td>Annual ISP Onboarding Retainer (Ongoing IMFs)</td>
                            <td>Rs 30,000 to Rs 45,000 per year (excl. GST) - up to 10 new ISP onboardings per year plus PO change processing if applicable plus annual CPD tracking and reminders plus Fit and Proper refresh certifications. Cost-effective for active IMFs</td>
                        </tr>
                        <tr>
                            <td>Institute Pass-Through Training Fees (Indicative)</td>
                            <td>PO 50-hour programme - Rs 8,000 to Rs 15,000; ISP 25-hour programme - Rs 3,000 to Rs 5,000 per sector. Examination fees Rs 500 to Rs 1,500 separately. Paid directly to institute - Patron does NOT mark up</td>
                        </tr>
                        <tr>
                            <td>PO Change Mid-Cycle (Standalone Engagement)</td>
                            <td>Rs 18,000 to Rs 25,000 (excl. GST) - new PO onboarding for existing IMF including candidate eligibility check, institute enrolment, examination scheduling, IRDAI portal PO change notification, Board Resolution, Fit and Proper redocumentation</td>
                        </tr>
                        <tr>
                            <td>Combined with IMF Registration Engagement (Add-On)</td>
                            <td>Bundled at discount when combined with /imf-incorporation-services or /imf-irdai-registration-process engagement - seamless handoff from PO / ISP certification to IRDAI IMF registration filing</td>
                        </tr>
                        <tr>
                            <td>Bombay HC / High Court IRDAI Adverse Order Appeal Advisory</td>
                            <td>Separate engagement - Rs 1.5 lakh to Rs 5 lakh - advisory on IRDAI adverse order appeals at Bombay HC / Delhi HC under Article 226; senior counsel engagement separately invoiced</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ISMP Certification and ISP Appointment consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20coordination%20support%20for%20ISMP%20%2F%20Principal%20Officer%20certification%20and%20ISP%20appointment%20-%20please%20share%20availability%20for%20free%20scoping%20call." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Training to Appointment Timeline - 60 Days Total</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Phase 1 - Selection</td>
                            <td>Days 1-5 - Patron recommends institute; KYC and eligibility verified; engagement letter signed. Deliverable: Selection memo; engagement letter</td>
                        </tr>
                        <tr>
                            <td>Phase 2 - Enrolment</td>
                            <td>Days 5-10 - Institute enrolment; payment of training fee; access credentials issued. Deliverable: Enrolment confirmation</td>
                        </tr>
                        <tr>
                            <td>Phase 3 - PO 50-Hour Training</td>
                            <td>Days 10-35 - PO completes 50-hour programme (2-3 weeks contact); ISP candidates start 25-hour programmes in parallel. Deliverable: Training in progress</td>
                        </tr>
                        <tr>
                            <td>Phase 4 - PO Examination</td>
                            <td>Days 35-45 - PO sits IRDAI examination; result typically within 7-10 days. Deliverable: PO Pass Certificate</td>
                        </tr>
                        <tr>
                            <td>Phase 5 - ISP Examinations</td>
                            <td>Days 25-50 - Each ISP completes 25-hour training and sectoral examination. Deliverable: ISP Pass Certificates (per ISP per sector)</td>
                        </tr>
                        <tr>
                            <td>Phase 6 - Documentation</td>
                            <td>Days 45-55 - Fit and Proper declarations, Board Resolution, Consent Letters, Code of Conduct Undertakings drafted. Deliverable: Documentation pack</td>
                        </tr>
                        <tr>
                            <td>Phase 7 - Appointment Filing</td>
                            <td>Days 55-60 - IRDAI portal notification (if PO change); ISP onboarding in IMF register; insurer-specific code generation. Deliverable: Appointment complete</td>
                        </tr>
                        <tr>
                            <td>Total - Standard Combined Engagement</td>
                            <td>60 days for PO + 2-3 ISPs coordination - all certifications and appointments in place. Larger volumes proportionate</td>
                        </tr>
                        <tr>
                            <td>Form MGT-14 Filing</td>
                            <td>Within 30 days of Special Resolution under Section 117(2) Companies Act 2013 - applicable where PO is also a director appointed via Special Resolution</td>
                        </tr>
                        <tr>
                            <td>IRDAI Portal PO Change Notification</td>
                            <td>Immediate on PO change for existing IMF; new PO credentials, training certificate, IRDAI exam pass certificate, Fit and Proper declaration uploaded</td>
                        </tr>
                        <tr>
                            <td>Annual CPD Hours - PO</td>
                            <td>25 hours per year ongoing - CPD courses from same IRDAI-approved institutes; certificate retained for IRDAI inspection</td>
                        </tr>
                        <tr>
                            <td>Annual CPD Hours - ISP</td>
                            <td>15 hours per year per sectoral certification - Code of Conduct undertaking refreshed annually; Fit and Proper status maintained continuously</td>
                        </tr>
                        <tr>
                            <td>IMF Registration Renewal Cycle</td>
                            <td>3-year cycle - PO and ISP certifications re-verified afresh at renewal as part of Fit and Proper refresh</td>
                        </tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Parallel Tracks Save Time:</strong> When the engagement covers PO + multiple ISPs simultaneously, Phase 3 PO training and Phase 5 ISP sectoral training run in parallel - condensing the total timeline from theoretical 90+ days to a practical 60 days. <strong>PO Change Urgency:</strong> When a Principal Officer resigns or transitions out, the IMF has tight regulatory expectations to onboard a successor with IRDAI portal notification; gap exposure during PO transition is a compliance risk. <strong>Insurer Code Generation - Revenue Impact:</strong> Each tie-up insurer requires ISP code generation in its back-office system; delays in code generation post ISP onboarding block policy issuance under that ISP and delay early revenue. Patron coordinates code generation in parallel with ISP onboarding to compress the revenue-on date.</p>

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
            <h2 class="section-title">Why Patron for ISMP and ISP Coordination</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </div>
                <h3 class="feature-title">Clear Scope Boundary - Coordination Not Training</h3>
                <p class="feature-description">Patron coordinates institute enrolment plus appointment paperwork. Training delivered by IRDAI-approved institutes - III Mumbai, NIA Pune, College of Insurance and others. Transparent scope means no fee inflation for training delivery and clean accountability for what Patron handles vs what the institute handles.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 class="feature-title">Institute Network Relationships</h3>
                <p class="feature-description">Active relationships with Insurance Institute of India (III), National Insurance Academy (NIA), College of Insurance and other IRDAI-approved institutes for prompt enrolment, scheduling support, and result tracking. Familiarity with each institute's programme calendar, format and assessment methodology.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3 class="feature-title">Fit and Proper Documentation Depth</h3>
                <p class="feature-description">Schedule II IMF Regulations 2015 declarations with regulatory background checks across IRDAI, SEBI, RBI and FIU databases. Personal signature with KYC verification (not HR-attested). Documentation depth designed to withstand IRDAI scrutiny at registration and renewal.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <h3 class="feature-title">4-Tier Fixed-Fee Transparency</h3>
                <p class="feature-description">Rs 15,000 to Rs 50,000 covers PO plus varying ISP counts. Annual onboarding retainer Rs 30,000 to Rs 45,000 per year for ongoing IMFs. No hidden charges; institute and examination fees pass-through directly. Cost-effective compared to in-house HR-led coordination.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg>
                </div>
                <h3 class="feature-title">CPD Tracking Calendar Setup</h3>
                <p class="feature-description">Annual CPD calendar maintained for PO (25 hours per year) and each ISP (15 hours per sectoral certification per year). Annual reminders scheduled; CPD certificate retention organised for IRDAI inspection. Prevents lapse-driven compliance gaps and avoids re-certification cost.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 class="feature-title">Insurer Code Generation Coordination</h3>
                <p class="feature-description">Liaison with each tie-up insurer back office for ISP code generation - critical to enable policy issuance under that ISP and start revenue. Parallel coordination with ISP onboarding compresses revenue-on date. Reduces revenue delay post ISP appointment.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by IMFs at Registration Stage and During Ongoing Operations</h2>
            <div class="content-text">
                
                                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years in Practice</p>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;margin-top:24px;">
                    <div style="padding:20px;background:var(--orange-lighter);border-left:4px solid var(--orange);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"We had been running our IMF for 18 months and needed to add 4 new ISPs across general and health insurance. Patron coordinated enrolment with III, tracked all four through examination, prepared Fit and Proper certifications and got our insurer back-office codes generated within 8 weeks."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Operations Manager, IMF in Maharashtra</p>
                    </div>
                    <div style="padding:20px;background:var(--blue-lighter);border-left:4px solid var(--blue);border-radius:var(--radius-md);">
                        <p style="color:var(--text-primary);font-style:italic;margin-bottom:12px;">"Our Principal Officer resigned and we needed to onboard a new PO within 60 days. Patron handled everything - candidate eligibility check, NIA enrolment, exam scheduling, IRDAI portal notification, Board Resolution and Fit and Proper redocumentation. New PO active in 55 days at Rs 18,000 Patron fee."</p>
                        <p style="color:var(--blue);font-weight:700;margin:0;font-size:14px;">- Company Secretary, IMF in Karnataka</p>
                    </div>
                </div>

                <p style="margin-top:24px;"><strong>Client Coverage:</strong> Trusted by IMF clients at registration stage (new founders requiring PO + initial ISPs before IRDAI application can be filed), during ongoing operations (existing IMFs adding new ISPs for sectoral expansion or volume scale-up), at PO succession events (resignation, retirement or other transition), at IMF Registration renewal cycle (PO and ISP Fit and Proper refresh), and for sub-broker / corporate agent firms migrating staff to ISP roles under the IMF framework. Coverage includes sectoral-specialised ISPs across Life, General and Health Insurance with insurer-specific code generation coordinated with each tie-up insurer back office.</p>

                <p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves businesses across India - both in-person and remotely. Pune is the NIA hub city; Mumbai is the III hub city and IRDAI HQ city - active relationships with both institutes for prompt enrolment scheduling. Hyundai, Asian Paints, Bridgestone and a growing roster of IMF clients across manufacturing, financial services and distribution.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Coordination vs IRDAI-Approved Training Institute - Clear Scope Boundary</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Activity</th><th>Patron Handles</th><th>Training Institute Handles</th></tr></thead>
                    <tbody>
                                                <tr>
                            <td>Training Institute Selection</td>
                            <td>Yes - recommend right institute based on location, sector, timing, cost</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Training Enrolment Coordination</td>
                            <td>Yes - liaise on candidate behalf with III / NIA / College of Insurance / others</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>50-Hour PO Training Delivery</td>
                            <td>No</td>
                            <td>Yes - III, NIA, College of Insurance, etc.</td>
                        </tr>
                        <tr>
                            <td>25-Hour ISP Training Delivery</td>
                            <td>No</td>
                            <td>Yes - same institutes plus insurer academies (ICICI Lombard, HDFC ERGO, Reliance, LIC)</td>
                        </tr>
                        <tr>
                            <td>IRDAI Examination Scheduling</td>
                            <td>Yes - support candidate booking</td>
                            <td>Yes - actual exam delivery (online proctored / in-person at approved centres)</td>
                        </tr>
                        <tr>
                            <td>Examination Preparation</td>
                            <td>Limited (referrals only)</td>
                            <td>Yes - through institute mock tests, study material</td>
                        </tr>
                        <tr>
                            <td>Pass Certificate Issuance</td>
                            <td>No</td>
                            <td>Yes - institute issues on behalf of IRDAI</td>
                        </tr>
                        <tr>
                            <td>Fit and Proper Documentation</td>
                            <td>Yes - draft declarations, verify with KYC, regulatory background check (IRDAI / SEBI / RBI / FIU)</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Board Resolution for PO Appointment</td>
                            <td>Yes - draft per Section 173 Companies Act 2013; Form MGT-14 within 30 days if applicable</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>IRDAI Portal Notification for PO Change</td>
                            <td>Yes - file through IMF portal</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>ISP Onboarding Paperwork</td>
                            <td>Yes - Consent Letter, F&amp;P certification by PO, Code of Conduct undertaking</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Code of Conduct Undertaking Drafting</td>
                            <td>Yes - per Schedule I IMF Regulations 2015</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Annual CPD Tracking</td>
                            <td>Yes - calendar maintained for PO (25 hrs) and ISPs (15 hrs per sectoral cert)</td>
                            <td>Yes - CPD courses delivered</td>
                        </tr>
                        <tr>
                            <td>Insurer-Specific ISP Code Generation</td>
                            <td>Yes - coordinate with each tie-up insurer back office</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Compliance Manual Drafting</td>
                            <td>Yes - internal manual aligned with PO obligations under IMF Regulations 2015</td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Ongoing IMF Compliance (Quarterly Returns etc.)</td>
                            <td>Yes (separate engagement via IMF Compliance Retainer)</td>
                            <td>No</td>
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
            <h2 class="section-title">Related Patron Services</h2>
            <div class="content-text">
                
                                <p>ISMP certification and ISP appointment coordination links to several adjacent IMF cluster workflows - all delivered by Patron's IMF specialist team for a seamless handoff between certification, registration, ongoing compliance and entity-level audit / tax / accounting needs.</p>
                <ul>
                    <li>Parent service: <a href="/insurance-marketing-firm-registration">Insurance Marketing Firm Registration (Hub)</a> - master hub covering all IMF cluster services.</li>
                    <li><a href="/imf-incorporation-services">IMF Incorporation Services</a> - combined MCA Pvt Ltd / LLP plus IRDAI registration for new founders; ISMP / ISP coordination handoff streamlined.</li>
                    <li><a href="/imf-irdai-registration-process">IRDAI IMF Registration Process</a> - standalone IRDAI registration for existing entities; ISMP / ISP certifications are prerequisite documentation.</li>
                    <li><a href="/imf-compliance-retainer-services">IMF Compliance Retainer Services</a> - quarterly returns, annual audit prep, renewal cycle support; complements the ISMP / ISP certification engagement.</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Pvt Ltd incorporation for IMF entity formation.</li>
                    <li><a href="/llp-registration">LLP Registration</a> - LLP route as alternative IMF entity.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - annual audit including PO and ISP register verification per IMF Regulations 2015.</li>
                    <li><a href="/income-tax-return-filing">Income Tax Return Filing</a> - ITR for IMF entity and Principal Officer.</li>
                    <li><a href="/accounting-and-bookkeeping">Accounting and Bookkeeping</a> - ongoing accounting including ISP commission tracking, insurer-wise revenue reconciliation.</li>
                </ul>
                <p style="margin-top:16px;">Verify framework through the <a href="https://irdai.gov.in" target="_blank" rel="noopener">Insurance Regulatory and Development Authority of India (IRDAI)</a>; IMF Portal at <a href="https://irdai.gov.in/department/insurance-marketing-firm" target="_blank" rel="noopener">IRDAI IMF Portal</a>; Insurance Institute of India at <a href="https://www.insuranceinstituteofindia.com" target="_blank" rel="noopener">insuranceinstituteofindia.com</a>; National Insurance Academy Pune at <a href="https://www.niapune.org.in" target="_blank" rel="noopener">niapune.org.in</a>; Corporate filings (MGT-14 for PO appointment via Special Resolution) at the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA21)</a>.</p>

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
                
                                <p><strong>Governing Statutes and Regulations:</strong> Insurance Act 1938; Insurance Regulatory and Development Authority of India Act 1999; IRDAI (Registration of Insurance Marketing Firm) Regulations 2015 notified 21 January 2015; IRDAI Master Circular on Insurance Intermediaries; Companies Act 2013; Manner of Receipt of Premium Regulations 2002.</p>
                <ul>
                    <li><strong>IRDAI Act 1999:</strong> Establishment of Insurance Regulatory and Development Authority; regulatory framework for insurance intermediaries.</li>
                    <li><strong>Insurance Act 1938 Section 42D:</strong> Intermediary registration framework.</li>
                    <li><strong>Insurance Act 1938 Section 42E:</strong> Functions and obligations of intermediaries.</li>
                    <li><strong>IRDAI (Registration of Insurance Marketing Firm) Regulations 2015:</strong> Notified 21 January 2015; comprehensive framework for IMF registration and operation.</li>
                    <li><strong>Regulation 4 IMF Regulations 2015:</strong> Principal Officer (ISMP) requirements - eligibility (Indian resident, 18+ years, degree holder), 50-hour training at IRDAI-approved institute, IRDAI certification examination, Fit and Proper criteria.</li>
                    <li><strong>Regulation 12 IMF Regulations 2015:</strong> Insurance Sales Persons - 25-hour sectoral training and IRDAI certification; per-sector specialisation (Life / General / Health).</li>
                    <li><strong>Schedule I IMF Regulations 2015:</strong> Code of Conduct for IMFs, Principal Officers and ISPs - mandatory undertaking from PO and each ISP; covers customer protection, anti-mis-selling, fair dealing.</li>
                    <li><strong>Schedule II IMF Regulations 2015 - Fit and Proper:</strong> Criteria for Principal Officer, directors and major shareholders (10 percent or more) - integrity and reputation (no convictions in last 5 years, no regulatory adverse orders), financial soundness (no insolvency, no NPA defaults), appropriate qualifications and experience. Declaration required at application; refreshed at renewal.</li>
                    <li><strong>IRDAI Master Circular on Insurance Intermediaries:</strong> Training institute approval framework and Continuing Professional Development requirements.</li>
                    <li><strong>IRDAI Approved Training Institute List:</strong> Updated periodically by Authority; includes Insurance Institute of India, National Insurance Academy, College of Insurance, Birla Institute of Insurance Studies, ICICI Lombard Training Academy, HDFC ERGO Learning Centre, Reliance Insurance Academy, LIC Management Development Centre and others. Training outside the approved list is not recognised.</li>
                    <li><strong>Insurance Institute of India:</strong> Established 1955 as the principal training body for insurance industry intermediaries; affiliated with IRDAI.</li>
                    <li><strong>National Insurance Academy:</strong> Pune-based; IRDAI training partner; executive education and research programmes alongside intermediary certification.</li>
                    <li><strong>Manner of Receipt of Premium Regulations 2002:</strong> Premium collection rules covered in 50-hour PO programme.</li>
                    <li><strong>Section 173 Companies Act 2013:</strong> Board appointment authority for Principal Officer; resolution required at duly convened Board Meeting.</li>
                    <li><strong>Section 117(2) Companies Act 2013:</strong> Form MGT-14 filing within 30 days if PO is also a director appointed via Special Resolution.</li>
                    <li><strong>Section 102 Companies Act 2013:</strong> Explanatory Statement for Special Business at EGM where PO appointment requires Special Resolution.</li>
                    <li><strong>Continuing Professional Development (CPD) Framework:</strong> IRDAI-prescribed annual hours - 25 hours per year for Principal Officer; 15 hours per year per sectoral certification for ISPs; CPD certificate retained for IRDAI inspection.</li>
                    <li><strong>IRDAI Examination:</strong> Online proctored examination conducted by approved exam bodies; multiple-choice questions; pass mark typically 50-60 percent; results within 7-10 days.</li>
                    <li><strong>3-Year IMF Registration Cycle:</strong> PO certification linked to registration cycle; PO and ISP Fit and Proper status maintained continuously throughout; renewal cycle re-verifies certifications afresh.</li>
                </ul>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on number of PO and ISPs, sectoral mix, urgency, institute selected, examination cycle timing, Fit and Proper documentation complexity, and statutory pass-through fees (institute training fees, examination fees, IRDAI portal fees, MCA filing fees for MGT-14). IRDAI Master Circular updates may affect specific training framework details.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - ISMP and ISP</h2>
                    <p class="faq-expanded__lead">Answers to the most common questions on ISMP / Principal Officer certification and ISP / Insurance Sales Person appointment - 50-hour and 25-hour training programmes, IRDAI-approved institutes, sectoral specialisations (Life / General / Health), eligibility criteria, Patron coordination scope, and certification validity.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'ISMP and ISP'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is ISMP certification?</h3>
                        <div class="faq-expanded__a"><p>ISMP (Insurance Sales and Marketing Person) is the industry term for the Principal Officer of an Insurance Marketing Firm under Regulation 4 IRDAI IMF Regulations 2015. Certification involves a 50-hour training programme from an IRDAI-approved institute (Insurance Institute of India, National Insurance Academy, College of Insurance and others), followed by an IRDAI certification examination. The PO / ISMP heads the IMF, bears compliance responsibility, supervises ISPs, and maintains Fit and Proper status under Schedule II throughout the engagement.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How to become a Principal Officer of an IMF?</h3>
                        <div class="faq-expanded__a"><p>Step 1 - Verify eligibility: Indian resident, 18+ years, degree holder, Fit and Proper (no convictions in last 5 years, no regulatory adverse orders, no insolvency); typically a director, founder or senior employee of the IMF. Step 2 - Enrol in 50-hour PO programme at IRDAI-approved institute (typical fee Rs 8,000-15,000). Step 3 - Complete training (typically 2-3 weeks contact). Step 4 - Sit IRDAI Principal Officer certification examination; result within 7-10 days. Step 5 - Patron prepares appointment paperwork including Board Resolution, Fit and Proper declaration, Code of Conduct Undertaking. Step 6 - IRDAI portal notification (for PO change) or inclusion in initial IMF application package.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the ISP exam for IRDAI?</h3>
                        <div class="faq-expanded__a"><p>The Insurance Sales Person (ISP) exam is an IRDAI certification examination conducted after the 25-hour sectoral training programme. Three sectoral specialisations - Life Insurance, General Insurance, Health Insurance - each requires its own 25-hour training plus exam. ISPs can hold multiple sectoral certifications. Exam is online proctored or in-person at approved centres with multiple-choice questions; pass mark typically 50-60 percent; results within 7-10 days. Re-examination available if failed. Pass certificate per sector forms part of IMF registration documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are IRDAI-approved training institutes?</h3>
                        <div class="faq-expanded__a"><p>Principal IRDAI-approved institutes - Insurance Institute of India (III) Mumbai with regional centres; National Insurance Academy (NIA) Pune; College of Insurance Mumbai; Birla Institute of Insurance Studies; ICICI Lombard Training Academy; HDFC ERGO Learning Centre; Reliance Insurance Academy; LIC Management Development Centre; and others as IRDAI maintains updated list. Programmes delivered classroom and online. Patron coordinates with the appropriate institute based on candidate location, sectoral focus, timing preferences and cost considerations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between ISMP and ISP?</h3>
                        <div class="faq-expanded__a"><p>ISMP (Principal Officer) - heads the IMF; one per entity; 50-hour training; IRDAI certification examination; Fit and Proper under Schedule II; responsible for IMF compliance, IRDAI liaison, ISP supervision, code of conduct adherence. ISP (Insurance Sales Person) - front-line distributor; multiple per IMF (typically 2 to 50+); 25-hour sectoral training; sectoral exam per specialisation (Life, General, Health); Fit and Proper certification by PO; responsible for customer solicitation, product education, application submission. PO has supervisory role over ISPs; ISPs report to PO operationally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are sectoral specialisations for ISP?</h3>
                        <div class="faq-expanded__a"><p>Three sectoral specialisations per IRDAI framework - (1) Life Insurance ISP: term, endowment, ULIP, pension, group life products; covers life insurance companies; (2) General Insurance ISP: motor, fire, marine, engineering, liability, property, miscellaneous products; covers general insurance companies; (3) Health Insurance ISP: health products from standalone health insurers and from general insurers; individual, family floater, group, critical illness, super top-up. Each requires separate 25-hour training and sectoral exam. ISPs can hold multiple sectoral certifications - common for senior ISPs serving diverse customer base.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What does Patron do in ISMP certification?</h3>
                        <div class="faq-expanded__a"><p>Patron's coordination scope - (1) Institute selection based on candidate location, sector and timing; (2) Enrolment coordination with IRDAI-approved institute; (3) Examination scheduling support; (4) Fit and Proper documentation drafting (Schedule II declarations with regulatory background check across IRDAI, SEBI, RBI, FIU databases); (5) Board Resolution for PO appointment (Section 173 Companies Act 2013); (6) IRDAI portal notification for PO change; (7) Code of Conduct Undertaking drafting (Schedule I); (8) Customer disclosure templates; (9) Annual CPD tracking calendar. Patron does NOT deliver the training itself - that is the role of the IRDAI-approved institute.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long is ISMP certification valid?</h3>
                        <div class="faq-expanded__a"><p>The Principal Officer certification is intrinsically linked to the 3-year IMF Registration cycle. The PO must maintain Fit and Proper status throughout (Schedule II IMF Regulations 2015), complete annual Continuing Professional Development hours (typically 25 hours per year), and remain employed by or associated with the IMF. PO change during the 3-year cycle requires IRDAI portal notification and new PO certification. At IMF Registration renewal, PO certification is verified afresh as part of Fit and Proper refresh.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                                <ul style="margin-top:12px;">
                    <li><strong>Can a non-resident be a Principal Officer?</strong> No. PO must be Indian resident under Regulation 4 IMF Regulations 2015.</li>
                    <li><strong>How many POs per IMF?</strong> One Principal Officer per IMF - the role cannot be split or shared.</li>
                    <li><strong>Can one ISP serve multiple IMFs?</strong> Typically no - ISP appointment is to a specific IMF entity; cross-IMF arrangements are rare and require IRDAI clarity.</li>
                    <li><strong>Can ISPs sell across all three sectors?</strong> Only if certified for each sector. Each sectoral specialisation requires separate 25-hour training and IRDAI examination.</li>
                    <li><strong>How long does PO certification take?</strong> 50-hour training programme typically 2-3 weeks contact; examination scheduled separately; results within 7-10 days; full PO certification typically 30-45 days end-to-end.</li>
                    <li><strong>How long does ISP certification take?</strong> 25-hour sectoral training typically 1-2 weeks; examination and result; full ISP certification per sector typically 15-25 days.</li>
                    <li><strong>What is the institute fee?</strong> Rs 8,000-15,000 for PO programme; Rs 3,000-5,000 per sectoral ISP programme; Rs 500-1,500 examination fees separately. Paid directly to institute - Patron does NOT mark up.</li>
                    <li><strong>ISMP exam ki taiyari kaise karein?</strong> ISMP / Principal Officer exam ki taiyari ke liye IRDAI-approved institute mein enrol karein 50-hour programme ke liye - Insurance Institute of India (III), National Insurance Academy (NIA), ya College of Insurance, fee Rs 8,000-15,000. Training mein insurance fundamentals, IMF Regulations 2015, Code of Conduct, product knowledge (life / general / health) cover hote hain. Institute ki study material aur mock tests use karein. Online proctored exam mein multiple-choice questions hote hain, pass mark typically 50-60 percent; result 7-10 din mein milta hai. Patron Rs 15,000-20,000 charge karta hai institute selection, F&amp;P documentation, Board Resolution aur IRDAI portal paperwork ke liye. Call +91 945 945 6700.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Three Time-Critical Coordination Triggers</h2>
            <div class="content-text">
                
                                <p>ISMP and ISP coordination is rarely just nice-to-have - three common triggers make timing critical.</p>
                <p><strong>First, PO Resignation or Transition:</strong> When a Principal Officer resigns, retires or otherwise transitions, the IMF has tight regulatory expectations to onboard a successor with IRDAI portal notification. Gap exposure during PO transition is a compliance risk - IRDAI adverse action possible if extended. Patron handles new PO eligibility check, institute enrolment, exam scheduling, IRDAI portal notification, Board Resolution and Fit and Proper redocumentation in 55-60 days end-to-end.</p>
                <p><strong>Second, New IMF Registration:</strong> Initial IMF registration application cannot be filed without PO + initial ISPs in place with certifications. Founders waiting for IRDAI registration approval cannot start operations - including signing tie-up agreements with insurers - until the PO and ISP layer is complete. Patron's Tier 3 / Tier 4 combined engagement compresses parallel tracks to 58-60 days for PO + 5-10 ISPs.</p>
                <p><strong>Third, CPD Lapse Prevention:</strong> ISP certification lapse without renewal CPD (15 hours per sectoral certification per year) may not be flagged until renewal cycle - by which time re-certification may be required. Patron's CPD tracking calendar setup at engagement and annual onboarding retainer (Rs 30,000-45,000 per year) prevent lapse-driven re-certification costs.</p>
                <p><strong>Action Now:</strong> Call <a href="tel:+919459456700">+91 945 945 6700</a>, WhatsApp Patron, or visit any Patron office (Pune, Mumbai, Delhi, Gurugram). Free 30-minute ISMP and ISP coordination scoping call - response within 4 hours. Patron's 4-tier fixed-fee engagement Rs 15,000 to Rs 50,000 with clear scope boundary (coordination not training delivery).</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Engage Patron for ISMP and ISP Coordination</h2>
            <div class="content-text" style="text-align:left;">
                
                                <p style="color:rgba(255,255,255,0.92);">ISMP (Principal Officer) certification and ISP (Insurance Sales Person) appointment are the foundational personnel layer of every Insurance Marketing Firm. The Principal Officer completes a 50-hour training programme and IRDAI certification examination under Regulation 4 IMF Regulations 2015; Insurance Sales Persons complete 25-hour sectoral training and IRDAI examination under Regulation 12 - per Life, General or Health Insurance specialisation. Training is delivered by IRDAI-approved institutes (Insurance Institute of India, National Insurance Academy, College of Insurance and others) - Patron does NOT deliver training.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron coordinates the institute selection, enrolment, Fit and Proper documentation under Schedule II, Board Resolutions for PO appointment under Section 173 Companies Act 2013, IRDAI portal notifications for PO changes, ISP onboarding paperwork, Code of Conduct Undertakings under Schedule I, insurer-specific code generation with tie-up insurer back offices, and annual Continuing Professional Development tracking.</p>
                <p style="color:rgba(255,255,255,0.92);">The 4-tier fixed-fee engagement Rs 15,000 to Rs 50,000 covers standalone PO coordination through combined PO plus 10 ISP onboarding plus CPD setup; annual onboarding retainer Rs 30,000 to Rs 45,000 per year supports ongoing IMF operations. The firm serves IMF clients across Pune, Mumbai, Delhi and Gurugram with pan-India remote engagement; active relationships with III Mumbai (the establishment for insurance industry intermediary training since 1955) and NIA Pune for prompt enrolment scheduling. Combined with <a href="/imf-incorporation-services" style="color:#fff;text-decoration:underline;">IMF Incorporation</a> or <a href="/imf-irdai-registration-process" style="color:#fff;text-decoration:underline;">IRDAI Registration</a> engagement for seamless handoff from PO / ISP certification to IRDAI filing.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20coordination%20support%20for%20ISMP%20%2F%20Principal%20Officer%20certification%20and%20ISP%20appointment%20-%20please%20share%20availability%20for%20free%20scoping%20call." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20ISMP%20Certification%20and%20ISP%20Appointment&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20would%20like%20coordination%20support%20for%20ISMP%20%2F%20Principal%20Officer%20certification%20and%20ISP%20appointment%20under%20IRDAI%20IMF%20Regulations%202015.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IMF Cluster - Related Pages</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Parent IMF registration hub plus sister services - incorporation, IRDAI registration, compliance retainer, entity formation, statutory audit and ITR / accounting for Insurance Marketing Firms.</p>
              <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">IMF Cluster - Related Pages</div>
                <div class="pa-block-sub">Parent hub for Insurance Marketing Firm registration plus sister services including incorporation, IRDAI registration, compliance retainer and entity formation</div>
                <div class="pa-cross-grid">
                    <a href="/insurance-marketing-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">IMF Registration Hub</div><div class="pa-card-sub">Master cluster</div></div></a>
                    <a href="/imf-incorporation-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">IMF Incorporation</div><div class="pa-card-sub">MCA + IRDAI combined</div></div></a>
                    <a href="/imf-irdai-registration-process" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="20 6 9 17 4 12"/></svg></div><div><div class="pa-card-title">IRDAI Registration</div><div class="pa-card-sub">Standalone IRDAI</div></div></a>
                    <a href="/imf-compliance-retainer-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><div><div class="pa-card-title">IMF Compliance Retainer</div><div class="pa-card-sub">Quarterly returns</div></div></a>
                    <a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">IMF entity formation</div></div></a>
                    <a href="/llp-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="7" r="4"/><path d="M5 22v-2a7 7 0 0114 0v2"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Alternative IMF route</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Annual IMF audit</div></div></a>
                    <a href="/accounting-and-bookkeeping" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">Accounting and Bookkeeping</div><div class="pa-card-sub">ISP commission tracking</div></div></a>
                </div>
            </div>

            <div class="pa-city-block">
                <div class="pa-block-title">Patron Offices</div>
                <div class="pa-block-sub">4-office network with pan-India ISMP and ISP coordination engagement</div>
                <div class="pa-city-grid">
                    <a href="/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">NIA hub city</div></div></a>
                    <a href="/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">III + IRDAI HQ city</div></div></a>
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
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This service page is reviewed quarterly (Tier 2 - 3 months) and immediately on IRDAI Approved Training Institute list updates, exam syllabus changes, CPD requirement revisions, new sectoral specialisations introduced, or IMF Regulations 2015 amendments affecting Principal Officer or ISP certification framework.</p>
        </div>
    </div>
</section>


</main>




<!-- Google Maps Places Library (for GMB reviews) -->




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