
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
    <title>Payroll for Education Sector India</title>
    <meta name="description" content="Education payroll India 2026: schools, trusts, ed-tech, 12A/80G, GST Entry 66 exemption, contract teaching. Rs 99-199/emp. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-education">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll for Education Sector India 2026 | Patron Accounting">
    <meta property="og:description" content="Education payroll India 2026: schools, trusts, ed-tech, 12A/80G, GST Entry 66 exemption, contract teaching. Rs 99-199/emp. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-education">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/payroll-services-for-education-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll for Education Sector India 2026 | Patron Accounting">
    <meta name="twitter:description" content="Education payroll India 2026: schools, trusts, ed-tech, 12A/80G, GST Entry 66 exemption, contract teaching. Rs 99-199/emp. Call +91 945 945 6700.">
    <meta name="twitter:image" content="/images/payroll-services-for-education-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BreadcrumbList",
          "@id": "/payroll-services-for-education#breadcrumb",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "/" },
            { "@type": "ListItem", "position": 2, "name": "Payroll Services", "item": "/payroll-services" },
            { "@type": "ListItem", "position": 3, "name": "Payroll Services for Education Sector", "item": "/payroll-services-for-education" }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "/payroll-services-for-education#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Are school fees exempt from GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Services provided by an educational institution to its students, faculty and staff are exempt under Entry 66 of Notification 12/2017-Central Tax (Rate) dated 28 June 2017, Heading 9992. An educational institution per Clause 2(y) is one providing pre-school to higher secondary education, education for a qualification recognised by law, or an approved vocational education course. Core education fees, hostel lodging, transportation and ancillary services are exempt. Private coaching and degree-college auxiliary services to outside parties are not exempt."
              }
            },
            {
              "@type": "Question",
              "name": "Is coaching for school students exempt from GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Per the AAR Gujarat ruling in Re Sanjaykumar Ishwerlal Sadadiwala dated 28 April 2026, supplementary coaching to Class 5 to 12 students under GSEB and CBSE curricula does not qualify under Entry 66 of Notification 12/2017-CT(R). Such services fall under SAC 999293 commercial training and coaching services under Heading 9992 and attract 18 percent GST (9 percent CGST plus 9 percent SGST). A school running an in-house weekend coaching programme must register for GST and bill that stream separately."
              }
            },
            {
              "@type": "Question",
              "name": "What is Section 12A registration for a school trust?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 12AB of the IT Act 1961 (replacing Section 12AA effective 1 April 2021) is the income-tax registration for a charitable trust, society or Section 8 company claiming exemption under Sections 11 and 12. A 12AB-registered school trust must apply at least 85 percent of annual receipts for charitable purposes including teacher salaries, infrastructure and scholarships. Section 13(8) caps business or commercial activity within 20 percent of total receipts. Registration runs on a 5-year cycle."
              }
            },
            {
              "@type": "Question",
              "name": "Are school transport and canteen exempt under GST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. If transport and canteen are provided by the educational institution to its students and staff, they fall under Entry 66 exemption. If provided to an institution offering pre-school to higher secondary by an outsourced agency, they are also exempt under Entry 66(b). However, for higher education (degree colleges, universities), auxiliary services from outside agencies are not exempt and attract 18 percent GST. A cafeteria run by an outside vendor at a degree college therefore charges 18 percent GST."
              }
            },
            {
              "@type": "Question",
              "name": "Is Section 192 TDS applicable to teachers paid by a trust?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 192 IT Act 1961 (Section 392 IT Act 2025 from 1 April 2026) applies to all salary payments regardless of whether the employer is a private company, partnership, LLP or charitable trust under Section 12AB. A school trust paying permanent teachers must deduct salary TDS at average slab rate, deposit by 7th of next month, file Form 24Q quarterly and issue Form 16 annually. Section 11 exemption does not exempt the trust from deductor duties."
              }
            },
            {
              "@type": "Question",
              "name": "How is RTE Act 25 percent reservation linked to payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 12(1)(c) of the Right to Education Act 2009 mandates 25 percent reservation in private unaided schools for economically weaker sections. The state government reimburses per-child cost (typically Rs 18,000 to Rs 30,000 per child per year per state notification). Payroll feeds the reimbursement claim: proportionate teacher salary, infrastructure depreciation and administrative overhead allocated per RTE student. Under-claiming is common, costing schools Rs 15,000 per child per year. Patron typically uplifts recovery by 40 to 70 percent."
              }
            },
            {
              "@type": "Question",
              "name": "Should visiting faculty TDS be Section 192 or Section 194J?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Visiting faculty, adjunct teachers, subject experts and paper-setters provide professional services rather than an employer-employee relationship, so their TDS is under Section 194J at 10 percent above Rs 50,000 per FY per payee (20 percent if PAN is not quoted). Section 192 applies only to permanent staff on monthly salary. Misclassification creates a Form 26AS mismatch and refund-claim issues on the visitor side. Patron sorts this classification at onboarding with a separate Section 194J batch."
              }
            },
            {
              "@type": "Question",
              "name": "What audit rules apply to a school trust?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Section 12AB-registered school trust above the prescribed receipts threshold must file Form 10B (or Form 10BB depending on category) as the trust audit report under Section 12A(1)(b), typically by 31 October of the assessment year. The audit reconciles application of income (85 percent threshold under Section 11), Section 13(8) 20 percent commercial cap and accumulation Form 10. Section 80G donors are separately reported in Form 10BD by 31 May. Patron payroll feeds the audit pod with pre-reconciled registers."
              }
            }
          ]
        },
        {
          "@type": "Service",
          "@id": "/payroll-services-for-education#service",
          "name": "Payroll Services for Education Sector in India",
          "description": "CA-led education payroll managed service for K-12 schools, colleges, universities, charitable trusts, Section 8 educational companies, ed-tech and coaching institutes - covers Section 192 permanent staff salary, Section 194J visiting faculty batches, Section 12AB application-of-income tagging, GST Entry 66 exemption tracking with split-stream invoicing, RTE Section 12(1)(c) 25 percent reservation register and Code on Wages Section 17 SLAs. Starting from INR 99 per employee per month with trust-form concessional pricing.",
          "provider": { "@id": "/#organization" },
          "areaServed": { "@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India" },
          "serviceType": "Education sector payroll and statutory compliance",
          "about": [
            { "@type": "Thing", "name": "Education in India", "sameAs": "https://en.wikipedia.org/wiki/Education_in_India" },
            { "@type": "Thing", "name": "Payroll", "sameAs": "https://en.wikipedia.org/wiki/Payroll" },
            { "@type": "Thing", "name": "Right of Children to Free and Compulsory Education Act, 2009", "sameAs": "https://en.wikipedia.org/wiki/Right_of_Children_to_Free_and_Compulsory_Education_Act,_2009" }
          ],
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Education Payroll Service Plans",
            "itemListElement": [
              { "@type": "Offer", "name": "Core (Trust Concessional) - up to 50 employees - permanent staff payroll, TDS, EPF, ESI, PT for a single school", "price": "199", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/payroll-services-for-education" },
              { "@type": "Offer", "name": "Plus - 51 to 200 employees - Core plus Section 194J visiting faculty batch plus RTE reservation register", "price": "169", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/payroll-services-for-education" },
              { "@type": "Offer", "name": "Scale - 201 to 1000 employees - Plus plus Section 12AB application-of-income tagging plus GST split-stream plus CLRA reconciliation", "price": "129", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/payroll-services-for-education" },
              { "@type": "Offer", "name": "Enterprise (multi-school chains) - 1000 plus employees - Scale plus dedicated CA-led pod plus trust audit linkage plus 12AB and 80G renewal coordination plus Form 10BD", "price": "99", "priceCurrency": "INR", "availability": "https://schema.org/InStock", "url": "/payroll-services-for-education" }
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
                        Payroll Services for Education Sector in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trust deed, Section 12AB certificate, 80G certificate, RTE register, salary scales</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 99 to Rs 199 per employee per month - includes Section 194J visiting faculty batch and trust audit linkage</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> K-12 schools, colleges, universities, ed-tech, coaching centres, charitable trusts and Section 8 companies</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 2 weeks to onboard, first cycle in month 1, trust audit alignment for AGM and 12AB renewal</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India - 15+ years in trust-form school payroll, 12A/80G compliance and GST Entry 66 - rated 4.9 on Google.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20would%20like%20an%20education%20payroll%20scoping%20call%20with%20Patron%20Accounting.%20Please%20share%20availability." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Education Payroll'/>
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
                                
<option value="payroll-services-for-education" selected>Payroll Services for Education Sector</option>
<option value="payroll-services">Payroll Services (Overview)</option>
<option value="12a-registration">12A Registration</option>
<option value="80g-registration">80G Registration</option>
<option value="society-registration">Society Registration</option>
<option value="statutory-audit">Statutory Audit</option>
<option value="gst-audit">GST Audit</option>
<option value="gst-returns">GST Returns</option>
<option value="pf-registration">PF Registration</option>
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
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Professionalism, attention to detail and timely communication made the onboarding smooth. Patron got our 12AB application-of-income mapping ready by cycle two.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Treasurer, Education Trust</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron sorted out our visiting faculty batch under Section 194J in week one - we had been deducting at slab rate for 18 months and 4 visiting professors had refund claims pending. The GST split-stream advice on our weekend coaching saved us a Section 73 notice. Trust audit reconciliation came in 11 days before the 31 October deadline.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Ramya K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Principal, CBSE School Trust</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We were sitting at 78 percent application-of-income heading into Q4 - a recipe for Section 11(2A) trouble. Patron spotted it in October, recommended Rs 11 lakh of additional scholarships and infrastructure spend, and we closed the year at 88 percent with the Form 10B audit going through cleanly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AV</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Anjali V.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Section 8 Education Company</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our coaching brand operates as a Section 8 company alongside a regular CBSE school. Patron set up split-stream GST registration, tagged 999293 invoices separately and now we run both streams in one engagement. The cost saving vs a separate GST advisor and trust auditor is huge.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya D.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Coaching Chain</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">The RTE 25 percent reservation reimbursement claim was always under Rs 8,000 per child for us. Patron rebuilt the per-child cost with proportionate salary attribution and infrastructure depreciation. We are now claiming Rs 22,000 per child - the state board has accepted it without query.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VN</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vinod N.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trustee, University Trust</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">For a hybrid ed-tech (taxable platform plus B2C tutoring) the GST treatment is non-trivial. Patron mapped Heading 9992 SAC 999293 correctly, set up the Section 194J visiting tutor batch, and the Form 26Q quarterly filing has been clean for four cycles now.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Sumita K.</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Head, Ed-Tech B2C</div>
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
                    <p>Talk to a Patron CA team specialising in education sector payroll - 12AB application-of-income, GST Entry 66, Section 194J visiting faculty and RTE Act reimbursement.</p>
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
<a href="#what-section" class="toc-btn">What Is</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">8-Step Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Pricing</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Benefits</a>
<a href="#comparison-section" class="toc-btn">Comparison</a>
<a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Overview of Education Sector Payroll Services</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Education Payroll Services at a Glance</strong></p>
                    <p>If you run a K-12 school, college, trust-form education institution or ed-tech with a mix of permanent teachers, visiting faculty and non-teaching staff, your payroll needs CA-led handling. Patron processes Section 192 salary, Section 194J visiting faculty, GST Entry 66 exemption tracking and trust application-of-income tagging - linked to trust audit and 12A/80G renewal. Starting Rs 99 per employee per month with trust-form concessional pricing.</p>
                </div>
                <p>Education sector payroll in India is structured around three corporate forms (charitable trust, society or Section 8 company under Section 12AB IT Act for K-12 and higher education; private limited company for ed-tech and coaching) and four payment streams (permanent teaching staff on monthly salary under Section 192, visiting faculty on professional fees under Section 194J, contract teachers and adjuncts on hourly or per-class rates, and non-teaching staff such as admin, hostel, transport, security and canteen on the Code on Wages baseline). The intersection of these structures with GST exemption rules, trust application-of-income mechanics and Right to Education Act reservation requirements creates a compliance surface that generic payroll software simply does not handle.</p>
                <p>Under Entry 66 of Notification 12/2017-CT(R) dated 28 June 2017, an educational institution providing pre-school to higher secondary, or education for a qualification recognised by law, or an approved vocational education course is GST-exempt on services to students, faculty and staff under Heading 9992. But supplementary coaching to school students is not exempt per the AAR Gujarat ruling of 28 April 2026 (SAC 999293 at 18 percent). Layer on Section 12AB trust application-of-income (85 percent under Sections 11 and 12), Section 80G renewal, Section 194J visiting faculty TDS at 10 percent, RTE Section 12(1)(c) 25 percent reservation reimbursement and Code on Wages Section 17 SLAs - and education payroll becomes a CA-led problem. Patron Accounting LLP runs it as a managed service starting from Rs 99 per employee per month.</p>
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
                <h2 class="section-title">What Is Education Sector Payroll Processing</h2>
                <div class="content-text what-is-definition">
                    
                    
<p>Education sector payroll processing is the monthly computation, statutory withholding and trust or company-form aligned reporting for an educational institution in India. Deliverables include permanent teacher and non-teaching staff salary under Section 192 (Section 392 IT Act 2025 from FY 2026-27), visiting faculty professional fees under Section 194J (Section 393 from FY 2026-27) at 10 percent above Rs 50,000 per FY per payee, contract teacher and adjunct daily-wage or per-class processing, EPF and ESI on the December 2025 uniform-wage base for schools with 20+ employees, state professional tax, RTE Act 25 percent reservation register update for state reimbursement claims, Code on Wages Section 17(2) 2-day FnF for exits, GST Entry 66 exemption tracking for split-stream institutions, and Section 12AB application-of-income tagging for trust-form payrolls.</p>

<p>What makes education payroll different from every other industry is the convergence of GST exemption, trust governance and a stratified workforce. A typical K-12 school running as a Section 12AB-registered charitable trust has 80 permanent teachers (Section 192 salary), 15 visiting subject experts paid per class (Section 194J professional fees), 40 non-teaching staff (Section 192 plus ESI), 25 contract daily-wage helpers and ayahs (Code on Wages plus ESI), 12 transport and security agency contractors (CLRA principal employer plus Section 194C TDS), and 18 cafeteria and catering vendors (Section 194C). Each stream hits different statute combinations, different TDS rates, different EPF / ESI applicability and different audit treatment.</p>

<p>The Section 12AB trust regime adds a second-order complexity. Under Sections 11 and 12 of the IT Act 1961, the trust must apply at least 85 percent of its annual receipts for charitable purposes; teacher salaries and infrastructure spending count toward this application. Section 13(8) restricts business or commercial activities to within 20 percent of total receipts. For payroll, every salary disbursement must be tagged to the application-of-income pool, the Form 10B audit report must reconcile to the payroll register, and any non-charitable activity (like commercial weekend coaching) must be ring-fenced with separate cost allocation. Misclassification can trigger Section 11(2A) loss of exemption and Section 80G cancellation - retroactive to the year of breach.</p>

<p>Patron Accounting LLP runs the entire education payroll compliance perimeter as a managed service. Our CA-led pod handles Section 192 permanent staff salary, Section 194J visiting faculty separation, contract teacher daily-wage processing, GST Entry 66 verification and split-stream invoicing where required, Section 12AB application-of-income tagging every cycle, RTE Section 12(1)(c) 25 percent reservation register with per-child cost computation, CLRA contractor reconciliation for transport, security, housekeeping and canteen agencies, Code on Wages SLAs and the statutory returns calendar across Form 24Q, Form 26Q (Form 138 and 139 from FY 2026-27), EPFO ECR, ESIC challan and state PT. Trust audit (Form 10B, Form 10BB) and Form 10BD 80G donor reporting are coordinated with our audit pod.</p>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Education Payroll:</strong></p>
                    
<ul>
    <li><strong>Educational Institution (GST Clause 2(y)):</strong> Institution providing (i) pre-school to higher secondary education, (ii) education for a qualification recognised by law, or (iii) an approved vocational education course per Notification 12/2017-CT(R).</li>
    <li><strong>Entry 66 Exemption:</strong> GST exemption under Notification 12/2017-CT(R) dated 28 June 2017 for services by an educational institution to students, faculty and staff, plus auxiliary services supplied to such an institution.</li>
    <li><strong>Section 12AB Registration:</strong> Income-tax registration for charitable trusts, societies and Section 8 companies effective 1 April 2021; 5-year cycle replacing the earlier Section 12AA framework.</li>
    <li><strong>Section 80G Certificate:</strong> Income-tax registration enabling donors to claim 50 or 100 percent deduction; renewable on a 5-year cycle aligned with Section 12AB; donors reported in Form 10BD.</li>
    <li><strong>Application of Income (Section 11):</strong> 12AB-registered trust must apply at least 85 percent of annual receipts for charitable purposes - including education, scholarships, infrastructure and salaries.</li>
    <li><strong>Section 194J Visiting Faculty:</strong> TDS at 10 percent on professional services to visiting faculty, adjuncts and subject experts above Rs 50,000 per FY per payee; non-salary batch.</li>
    <li><strong>Form 10B / Form 10BB:</strong> Trust audit report by a chartered accountant under Section 12A(1)(b); mandatory for 12AB-registered trusts with annual receipts above threshold; payroll register feeds the audit.</li>
    <li><strong>RTE 25 Percent Reservation:</strong> Section 12(1)(c) of the Right to Education Act 2009 mandates 25 percent reservation in private unaided schools; state government reimburses per-student cost.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Education Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Built for Schools</span>
                        <strong>12A + 80G + GST Entry 66 Cover</strong>
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
            <h2 class="section-title">Who Needs Specialist Education Sector Payroll</h2>
            <div class="content-text">
                
                
<p>Specialist education sector payroll is required when one or more of the following apply:</p>
<ul>
    <li>You run a K-12 school (CBSE, ICSE, IB, state board), college, university, polytechnic or technical institute.</li>
    <li>You are a charitable trust, society or Section 8 company registered under Section 12AB IT Act 1961.</li>
    <li>You hold a Section 80G donor-deduction certificate and report donors in Form 10BD by 31 May.</li>
    <li>Your workforce mix includes permanent teachers (Section 192), visiting faculty (Section 194J at 10 percent), contract teachers (daily-wage) and non-teaching staff (Section 192 plus ESI).</li>
    <li>You operate Entry 66 exempt streams (core education) and taxable streams (weekend coaching, ed-tech sales, sponsorship, B2B placement) - requiring split-stream accounting.</li>
    <li>You are an ed-tech company (B2C platform, B2B SaaS, coaching aggregator) under Section 8 company form or private limited form.</li>
    <li>You provide RTE Section 12(1)(c) 25 percent reservation in a private unaided school and claim state reimbursement.</li>
    <li>You engage transport, security, housekeeping and canteen agencies under the CLRA Act 1970 with principal-employer liability.</li>
    <li>You are restructuring CTC under the Code on Wages 50-percent-basic rule effective 21 November 2025.</li>
</ul>

<p><strong>Statutory Deadline Snapshot</strong></p>
<ul>
    <li>Monthly Section 192 / 392 salary TDS deposit - 7th of following month</li>
    <li>Monthly Section 194J / 393 visiting faculty TDS deposit - 7th of following month</li>
    <li>Monthly EPF ECR - 15th of following month (for schools with 20+ employees)</li>
    <li>Monthly ESIC challan - 15th of following month</li>
    <li>Quarterly Form 24Q / 138 (salary) - 31 July, 31 October, 31 January, 31 May</li>
    <li>Quarterly Form 26Q / 139 (194J visiting faculty) - same quarterly cycle</li>
    <li>Annual Form 16 / 130 (salary) by 15 June; Form 16A / 131 within 15 days of quarter-end</li>
    <li>Form 10B / Form 10BB trust audit report - 31 October of AY (per CBDT)</li>
    <li>Form 10BD 80G donor report - 31 May of next FY</li>
    <li>Section 12AB renewal - every 5 years (80G renewal aligned)</li>
    <li>Site / staff FnF settlement - 2 working days of last working day (Section 17(2) Code on Wages)</li>
    <li>Salary disbursement - within 7 days of period close (Section 17(1) Code on Wages)</li>
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
            <h2 class="section-title">What Patron Accounting Delivers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
<tr><td>Permanent Teacher and Non-Teaching Staff Salary Payroll</td><td>Computation of basic, HRA, conveyance, special allowance, hostel warden allowance and HOD or coordinator charge allowance; Section 192 (Section 392 from FY 2026-27) salary TDS at average slab; EPF on the Code on Wages-aligned base where 20+ employees; ESI for non-teaching staff below Rs 21,000 ceiling; state PT and LWF.</td></tr>
<tr><td>Section 194J Visiting Faculty and Subject Expert Batch</td><td>Visiting faculty, adjunct teachers, subject experts, examiners and paper-setters processed as a non-salary Section 194J (Section 393 from FY 2026-27) batch; TDS at 10 percent above Rs 50,000 per FY per payee; PAN / no-PAN logic (20 percent if PAN not quoted); Form 16A / 131 quarterly; Form 26Q (139) on TRACES.</td></tr>
<tr><td>Contract Teacher and Adjunct Daily-Wage Processing</td><td>Hourly or per-class rates for contract teachers, lab assistants, sports coaches, music and art instructors; biometric or attendance-linked computation; ESI applied where consolidated monthly wages cross Rs 21,000; EPF where the engagement crosses the threshold.</td></tr>
<tr><td>Section 12AB Trust Application-of-Income Tagging</td><td>Every payroll disbursement tagged to the application-of-income pool under Sections 11 and 12; teacher salaries, scholarships and infrastructure categorised for the 85 percent threshold; commercial activity (within Section 13(8) 20 percent cap) ring-fenced; Form 10B audit-ready reconciliation.</td></tr>
<tr><td>GST Entry 66 Exemption Tracking and Split-Stream Accounting</td><td>Verification of Entry 66 eligibility under Clause 2(y) Notification 12/2017-CT(R); split-stream accounting for core education (exempt) plus weekend coaching or B2B (18 percent under SAC 999293); GST registration decision support; cross-sell to GST returns and GST audit.</td></tr>
<tr><td>RTE Section 12(1)(c) 25 Percent Reservation Register</td><td>Maintenance of the RTE reservation register; per-student cost computation including teacher salary attribution, infrastructure depreciation and administrative overhead; state reimbursement claim preparation; reconciliation to payroll for state-government audit.</td></tr>
<tr><td>CLRA Contractor Reconciliation</td><td>Principal employer registration under CLRA Section 7; Form V to each transport, security, housekeeping, catering and laundry contractor; contractor licence (Form VI) verified at onboarding; quarterly review of wage register, PF and ESI challans; billing escrow on incomplete proof.</td></tr>
<tr><td>Code on Wages SLA Enforcement</td><td>Section 17(1) wages within 7 days of period close; Section 17(2) FnF within 2 working days of last working day for resigning staff and exits; Section 56 penalty exposure capped.</td></tr>
<tr><td>Statutory Returns and Trust Filings Co-Ordination</td><td>EPFO ECR, ESIC challan and half-yearly Return of Contributions, state PT, quarterly Form 24Q and Form 26Q (Form 138 and 139 from FY 2026-27), annual Form 16 / 130 with Form 12BA; co-ordination with the Patron trust audit pod for Form 10B and Form 10BD.</td></tr>


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
            <h2 class="section-title">Our 8-Step Education Payroll Onboarding Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">A structured CA-led handover from existing payroll to live Patron operations in 10 to 14 working days - covering Section 12AB application-of-income, GST Entry 66 split-stream, Section 194J visiting faculty separation and Code on Wages SLAs.</p>
        </div>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Scoping Call</h3>
        <p class="step-description">Patron CA team reviews institution form (trust / society / Section 8 / private / LLP), Section 12AB and 80G status, GST applicability (Entry 66 exempt vs split-stream), headcount split (permanent teachers / visiting faculty / contract / non-teaching / contractor), RTE applicability and ed-tech revenue streams.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            30-minute consultation
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Entity form and 12AB status
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            No-obligation engagement letter
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="35" y="15" width="50" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="78" r="3" fill="#14365F"/><rect x="42" y="25" width="36" height="44" rx="2" fill="#fff" stroke="#14365F" stroke-width="0.8"/><circle cx="60" cy="47" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.2"/><path d="M55 47l3 3 7-7" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Discovery Call</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Master Data Collection</h3>
        <p class="step-description">Entity PAN, TAN, GSTIN per state, Section 12AB certificate, 80G certificate, trust deed or Articles, employee master (PAN, Aadhaar, UAN, ESIC number, bank, designation - teaching / non-teaching, regime preference), visiting faculty master, contractor master.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            12AB and 80G certificates
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Teaching / non-teaching masters
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Visiting faculty PANs
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="18" y="12" width="60" height="74" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="44" height="3" rx="1.5" fill="#E8712C"/><rect x="28" y="32" width="40" height="2" rx="1" fill="#14365F" opacity="0.3"/><rect x="28" y="40" width="38" height="2" rx="1" fill="#14365F" opacity="0.3"/><rect x="28" y="48" width="42" height="2" rx="1" fill="#14365F" opacity="0.3"/><rect x="28" y="56" width="34" height="2" rx="1" fill="#14365F" opacity="0.3"/><rect x="68" y="8" width="40" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M78 28l4 4 10-10" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Data Inventory</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Statutory Baseline Check</h3>
        <p class="step-description">Section 12AB renewal date, 80G renewal date, GST registration status (split-stream check), EPFO sub-code (if 20+ employees), ESIC code, state PT registration, state Public Trust Act compliance, CLRA Principal Employer Registration.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            12AB / 80G renewal dates
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            EPFO and ESIC codes
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            State PT and Trust Act baseline
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12L30 22v22c0 18 13 33 30 38 17-5 30-20 30-38V22L60 12z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 17-17" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <span class="illustration-label">Compliance Audit</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Application-of-Income Mapping</h3>
        <p class="step-description">For trust-form payrolls, every employee is mapped to the charitable (85 percent application) pool or the commercial (Section 13(8) 20 percent cap) pool. Ring-fence ledger setup so the Form 10B trust audit reconciles cleanly to payroll registers from cycle one.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            85% application pool tagged
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Section 13(8) ring-fence
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Audit-ready trail
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="20" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><circle cx="40" cy="50" r="14" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="40" y="55" font-size="13" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">85%</text><rect x="62" y="35" width="32" height="6" rx="2" fill="#E8712C"/><rect x="62" y="48" width="28" height="4" rx="1.5" fill="#14365F" opacity="0.4"/><rect x="62" y="58" width="30" height="4" rx="1.5" fill="#14365F" opacity="0.4"/></svg>
            </div>
            <span class="illustration-label">Trust Allocation</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">GST Split-Stream Decision</h3>
        <p class="step-description">If the institution runs Entry 66 exempt education AND taxable streams (coaching, ed-tech, B2B), GST registration and selective invoicing setup; HSN / SAC 9992 (exempt education) vs 999293 (commercial coaching at 18 percent) mapping; cross-sell to GST returns.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Entry 66 verification
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            SAC 9992 vs 999293 mapping
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            GST registration setup
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="42" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="36" y="42" font-size="12" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">EXEMPT</text><text x="36" y="60" font-size="10" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Entry 66</text><rect x="63" y="20" width="42" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><text x="84" y="42" font-size="14" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">18%</text><text x="84" y="60" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SAC 999293</text></svg>
            </div>
            <span class="illustration-label">GST Split-Stream</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Section 194J Visiting Faculty Setup</h3>
        <p class="step-description">Separation of the Section 194J batch from Section 192 salary batch; quarterly Form 26Q (Form 139 from FY 2026-27) setup; PAN verification with 20 percent no-PAN rate logic; engagement letter templates carrying explicit Section 194J disclosure.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            194J batch separated
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Form 26Q ready
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Engagement letters refreshed
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="40" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><rect x="23" y="55" width="24" height="25" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><circle cx="85" cy="40" r="12" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="73" y="55" width="24" height="25" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><text x="35" y="44" font-size="9" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">192</text><text x="85" y="44" font-size="9" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">194J</text></svg>
            </div>
            <span class="illustration-label">Faculty Batch</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Parallel Run</h3>
        <p class="step-description">One cycle parallel with the existing system to reconcile salary, visiting faculty TDS, EPF, ESI, PT and application-of-income tagging; variance memo signed-off before go-live so trust audit and renewal cycles stay in step.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            One full parallel cycle
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Variance memo signed off
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Sign-off before go-live
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.3"/><rect x="65" y="20" width="40" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.3"/><line x1="25" y1="32" x2="48" y2="32" stroke="#14365F" stroke-width="1.5" opacity="0.6"/><line x1="25" y1="42" x2="48" y2="42" stroke="#14365F" stroke-width="1.5" opacity="0.6"/><line x1="25" y1="52" x2="48" y2="52" stroke="#14365F" stroke-width="1.5" opacity="0.6"/><line x1="25" y1="62" x2="48" y2="62" stroke="#14365F" stroke-width="1.5" opacity="0.6"/><line x1="75" y1="32" x2="98" y2="32" stroke="#E8712C" stroke-width="1.5" opacity="0.7"/><line x1="75" y1="42" x2="98" y2="42" stroke="#E8712C" stroke-width="1.5" opacity="0.7"/><line x1="75" y1="52" x2="98" y2="52" stroke="#E8712C" stroke-width="1.5" opacity="0.7"/><line x1="75" y1="62" x2="98" y2="62" stroke="#E8712C" stroke-width="1.5" opacity="0.7"/><path d="M55 50l5-5-5-5M65 50l-5-5 5-5" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
            </div>
            <span class="illustration-label">Parallel Cycle</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">Go-Live Cycle</h3>
        <p class="step-description">Month 1 live payroll; Section 192 and Section 194J TDS by 7th; EPF and ESI by 15th; PT by state due date; application-of-income reconciled to the trust audit pod monthly; Form 24Q and Form 26Q quarterly on TRACES with school-wise dashboards delivered.</p>
        <div class="step-highlights"><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            TDS by 7th, EPF / ESI by 15th
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            Monthly audit-pod reconciliation
        </span><span class="highlight-tag">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            School-wise dashboards live
        </span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12c-12 0-20 14-20 28v18l-8 8 8 4 4-2v8h32v-8l4 2 8-4-8-8V40c0-14-8-28-20-28z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="7" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M50 74l-5 12M70 74l5 12M60 80v8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg>
            </div>
            <span class="illustration-label">Go-Live</span>
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
            <h2 class="section-title">Documents Required to Onboard Education Payroll</h2>
            <div class="content-text">
                
                
<p>Patron requires the following documents and registers from the institution at onboarding:</p>
<ul>
    <li>Entity PAN, TAN and GSTIN per state of operation</li>
    <li>Section 12AB Registration Certificate (current 5-year cycle)</li>
    <li>Section 80G Registration Certificate (if applicable)</li>
    <li>Trust Deed, Society MoA and bye-laws, or Articles of Section 8 Company</li>
    <li>State Public Trust Act registration (Maharashtra Charity Commissioner, Karnataka, Gujarat etc.)</li>
    <li>State Board affiliation certificate (CBSE, ICSE, state board, university charter)</li>
    <li>RTE Act 25 percent reservation register (last 3 years) - for private unaided schools</li>
    <li>GST registration certificate per state (if Entry 66 split-stream)</li>
    <li>EPFO sub-code (if 20+ employees) and ESIC code</li>
    <li>State PT and LWF registrations</li>
    <li>CLRA Principal Employer Registration for transport, security, housekeeping and canteen contractors</li>
    <li>Permanent teacher master - PAN, Aadhaar, UAN, ESIC, bank, designation, joining date, regime preference</li>
    <li>Non-teaching staff master - same fields with hostel / transport / admin / security categorisation</li>
    <li>Visiting faculty master - PAN, address, engagement letter, hourly or per-class rate, GSTIN if registered</li>
    <li>Contract teacher master - identity proof, attendance basis, daily or hourly rate</li>
    <li>Last 12 months of EPF ECR, ESIC challans, PT challans, TDS challans (Section 192 and 194J), Form 24Q and Form 26Q acknowledgements</li>
    <li>Last 2 years of Form 10B trust audit report and Form 10BD 80G donor report</li>
</ul>

<p style="margin-top:16px;">If any of these documents are missing or expired, Patron handles the renewal or fresh registration within the onboarding window. Share the inventory via WhatsApp at <a href="https://wa.me/919459456700">+91 945 945 6700</a> and we will revert with a missing-document checklist within 24 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Education Payroll and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
<tr>
    <td>Visiting faculty misclassified as salary</td>
    <td>A college pays 12 visiting professors per-class fees through the regular salary batch with Section 192 TDS at average slab. Section 192 applies only to employer-employee relationships; visiting faculty is a professional services engagement under Section 194J at 10 percent flat. Form 26AS mismatch surfaces; visitors' ITRs show refund or interest issues.</td>
    <td>Visiting faculty batch separated at onboarding under Section 194J; TDS at 10 percent above Rs 50,000 per FY per payee; Form 16A / Form 131 quarterly; engagement letters carry explicit Section 194J disclosure.</td>
</tr>
<tr>
    <td>Weekend coaching revenue not GST-registered</td>
    <td>A 12AB-registered K-12 school runs evening and weekend coaching for Class 10 board prep, billing Rs 28 lakh annually. The institution treats this as exempt under Entry 66 - but the AAR Gujarat ruling of 28 April 2026 confirms supplementary coaching falls under SAC 999293 at 18 percent. CGST officer assesses Rs 5 lakh GST plus interest plus Section 73 penalty.</td>
    <td>Split-stream check at onboarding; GST registration triggered when coaching revenue is identifiable; separate invoicing for core education (exempt) vs coaching (18 percent); cross-sell to GST returns.</td>
</tr>
<tr>
    <td>Trust application-of-income below 85 percent</td>
    <td>A school trust receives Rs 4.2 crore in annual fees and donations; payroll plus infrastructure plus scholarships amount to Rs 3.2 crore (76 percent application) - below the 85 percent threshold under Section 11. Form 10B audit flags it; Section 11(2A) excess is taxable; the AO issues a notice.</td>
    <td>Application-of-income tracking monthly with year-end projection; deficit identified by Q3 with corrective spending plans (scholarships, infrastructure, teacher bonuses); accumulation under Section 11(2)(a) by filing Form 10 where 85 percent cannot be applied.</td>
</tr>
<tr>
    <td>RTE 25 percent reservation reimbursement under-claimed</td>
    <td>A private unaided CBSE school admits 36 students under RTE 25 percent quota; state reimbursement at notified per-child cost (around Rs 24,000 per child per year). The school's claim covers only book-and-uniform cost - not attributable teacher salary, infrastructure depreciation or admin overhead. Under-claim averages Rs 18,000 per child per year (Rs 6.5 lakh annually).</td>
    <td>RTE register linked to payroll cost allocation; per-child cost computation includes proportionate teacher salary, infrastructure depreciation and admin overhead; quarterly state reimbursement claim preparation.</td>
</tr>
<tr>
    <td>Code on Wages 2-day FnF missed for contract teacher exits</td>
    <td>A college with 60 percent visiting and contract faculty has 14 exits per academic year (mid-term and year-end). FnF settlements traditionally happen 25 to 60 days after exit. Section 17(2) Code on Wages effective 21 November 2025 mandates 2 working days. Section 56 penalty up to Rs 1 lakh per violation.</td>
    <td>HRIS-triggered FnF workflow for contract and visiting faculty; pro-rata wages, leave encashment and dues calculated within 24 hours; bank payment within 2 working days SLA tracked per exit.</td>
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
            <h2 class="section-title">Education Payroll Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
<tr><td>Core (Trust Concessional, up to 50 employees)</td><td>Rs 199 per employee per month - permanent staff payroll, TDS, EPF, ESI, PT for a single school</td></tr>
<tr><td>Plus (51 to 200 employees)</td><td>Rs 169 per employee per month - Core + Section 194J visiting faculty batch + RTE reservation register</td></tr>
<tr><td>Scale (201 to 1,000 employees)</td><td>Rs 129 per employee per month - Plus + Section 12AB application-of-income tagging + GST split-stream + CLRA reconciliation</td></tr>
<tr><td>Enterprise (multi-school chains, 1,000+ employees)</td><td>Rs 99 per employee per month - Scale + dedicated CA-led pod + trust audit linkage + 12AB / 80G renewal coordination + Form 10BD</td></tr>
<tr><td>One-Time Setup</td><td>Rs 25,000 to Rs 1,00,000 depending on entity form, school count, GST split-stream and data hygiene</td></tr>
<tr><td>Section 194J Visiting Faculty Batch</td><td>Up to 30 payees included; beyond, Rs 75 per payee per month</td></tr>
<tr><td>Year-End Form 16 / Form 130 with Form 12BA</td><td>Included</td></tr>
<tr><td>Form 10B Trust Audit Support</td><td>Rs 35,000 per trust per year (cross-sold from the Patron audit pod)</td></tr>
<tr><td>Form 10BD 80G Donor Report Preparation</td><td>Rs 12,000 per FY</td></tr>
<tr><td>EPF, ESI, PT, LWF, TRACES Fees (Statutory, Pass-Through)</td><td>Billed at actuals on monthly invoice</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Education Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20free%20education%20payroll%20consultation%20with%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Education Payroll Onboarding Timeline - 2 Weeks to First Live Cycle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
<tr><td>Scoping Call and Price Confirmation</td><td>1 to 2 working days</td></tr>
<tr><td>Engagement Letter, NDA and TRACES Authorisation</td><td>2 to 3 working days</td></tr>
<tr><td>Master Data Collection (entity, staff, faculty, contractors, RTE register)</td><td>3 to 5 working days</td></tr>
<tr><td>Statutory Baseline (12AB, 80G, GST, EPFO, ESIC, PT, CLRA, state Public Trust Act)</td><td>3 to 5 working days (parallel)</td></tr>
<tr><td>Application-of-Income Mapping (trust-form)</td><td>2 to 3 working days (parallel)</td></tr>
<tr><td>GST Split-Stream Decision and Setup</td><td>2 to 3 working days (parallel)</td></tr>
<tr><td>Section 194J Visiting Faculty Batch Setup</td><td>2 to 3 working days (parallel)</td></tr>
<tr><td>CTC Restructuring under Code on Wages (if needed)</td><td>5 to 10 working days (parallel)</td></tr>
<tr><td>Parallel Run Reconciliation</td><td>5 to 7 working days</td></tr>
<tr><td>Go-Live Cycle</td><td>Month 1 - 7th for TDS, 15th for EPF / ESI, application-of-income tagged from Day 1</td></tr>
<tr><td><strong>Total to First Live Payroll</strong></td><td><strong>10 to 14 working days</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
<p><strong>Recurring Monthly Cycle Deadlines (governing every cycle):</strong></p>
<ul>
    <li>Salary disbursement - 7th to 10th of month (Section 17(1) Code on Wages)</li>
    <li>FnF for exits - within 2 working days (Section 17(2) Code on Wages)</li>
    <li>Section 192 and Section 194J TDS deposit - by 7th of following month</li>
    <li>EPF ECR and ESIC challan - by 15th of following month</li>
    <li>State Professional Tax - per state due date</li>
    <li>Application-of-income tagging - reconciled to trust audit pod each cycle</li>
    <li>Form 24Q and Form 26Q (Form 138 / 139 from FY 2026-27) - quarterly on TRACES</li>
    <li>Form 10B / 10BB trust audit - 31 October of AY</li>
    <li>Form 10BD 80G donor report - 31 May of next FY</li>
    <li>Section 12AB and 80G renewal - every 5 years</li>
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
            <h2 class="section-title">8 Benefits of CA-Led Education Sector Payroll with Patron</h2>
        </div>
        
<div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
        <h3 class="feature-title">Section 194J Classification Fixed</h3>
        <p class="feature-desc">Visiting faculty correctly classified under Section 194J at 10 percent - no Section 192 misclassification, no Form 26AS mismatch, no refund-claim issues for the visitor.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div>
        <h3 class="feature-title">GST Entry 66 Split-Stream Tracking</h3>
        <p class="feature-desc">Selective GST registration and split-stream invoicing for weekend coaching, ed-tech and B2B placement revenue (SAC 999293 at 18 percent) - separately from Entry 66 exempt education.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3 class="feature-title">Section 12AB Application Tagging</h3>
        <p class="feature-desc">85 percent application-of-income tagged every cycle - no Section 11(2A) loss-of-exemption exposure; Section 13(8) 20 percent commercial cap ring-fenced.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
        <h3 class="feature-title">Section 80G Renewal Aligned</h3>
        <p class="feature-desc">80G renewal aligned with 12AB cycle; Form 10BD donor report prepared and filed by 31 May; no donor-deduction disallowance risk for past contributors.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        <h3 class="feature-title">RTE 25% Reimbursement Maximised</h3>
        <p class="feature-desc">Per-child cost includes proportionate teacher salary, infrastructure depreciation and admin overhead - state reimbursement uplifted by 40 to 70 percent vs typical school claims.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">Code on Wages Section 17 SLA</h3>
        <p class="feature-desc">Salary within 7 days of period close (Section 17(1)); FnF for every contract or visiting faculty exit within 2 working days (Section 17(2)) - no Section 56 violation.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
        <h3 class="feature-title">CLRA Contractor Reconciliation</h3>
        <p class="feature-desc">Quarterly contractor PF and ESIC verification for transport, security, housekeeping and canteen agencies; billing escrow on incomplete proof; Section 21 principal-employer cover.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
        <h3 class="feature-title">Trust-Form Concessional Pricing</h3>
        <p class="feature-desc">Rs 99 to Rs 199 per employee per month - lower than the Rs 149-249 industry band for trust-form K-12 schools, colleges and Section 8 educational companies.</p>
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
                
                
<p style="font-size:18px;font-weight:600;color:var(--blue);margin-bottom:12px;">10,000+ Businesses Served &nbsp;|&nbsp; 4.9 Google Rating &nbsp;|&nbsp; 50,000+ Documents Filed &nbsp;|&nbsp; 15+ Years Experience</p>

<p>Trusted by CBSE, ICSE, IB and state-board K-12 schools, autonomous and affiliated colleges, university trusts, Section 8 educational companies, charitable society schools, ed-tech B2C platforms, ed-tech B2B SaaS, coaching and test-prep chains and skill-development institutes across Pune, Mumbai, Delhi NCR, Bengaluru, Hyderabad, Chennai and Kolkata. Sector coverage spans single-school trusts, multi-school chains, private colleges, autonomous engineering institutes, ed-tech platforms and skill ITIs.</p>

<p><strong>Anonymised Outcome:</strong> A Pune-headquartered education trust running 3 CBSE schools (Maharashtra) with 220 permanent teachers, 38 visiting subject experts, 95 non-teaching staff and 4 contract agencies (transport, security, canteen, housekeeping) onboarded with Patron in Q3 2025. We separated the Section 194J batch from Section 192 salary, identified Rs 32 lakh of weekend-coaching revenue that needed GST registration, mapped application-of-income to the 85 percent pool (the trust was at 81 percent - corrective spending of Rs 14 lakh on scholarships brought it to 87 percent by year-end), prepared Form 10B trust audit and Form 10BD 80G donor report, and processed RTE 25 percent reservation reimbursement claims for 132 students across 3 schools (Rs 31 lakh recovered).</p>

<p><strong>4-Office Trust Signal:</strong> With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves schools, colleges and education trusts across India - both in-person and remotely.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House HR vs Software-Only vs Patron CA-Led Managed Service</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>In-House HR</th><th>Software-Only (Keka, Pocket HRMS, greytHR, school ERP)</th><th>Patron CA-Led Managed Service</th></tr></thead>
                    <tbody>
                        
<tr><td>Section 194J Visiting Faculty Separation</td><td>Often misclassified as salary</td><td>Configurable; classification on you</td><td><span class="badge-included">Included</span> Native separate batch; quarterly Form 26Q / 139</td></tr>
<tr><td>GST Entry 66 Split-Stream Tracking</td><td>Often missed; whole-trust treated as exempt</td><td>Not in HRMS scope</td><td><span class="badge-included">Included</span> Split-stream check; selective GST; invoicing</td></tr>
<tr><td>Section 12AB Application-of-Income</td><td>Manual at year-end</td><td>Not supported</td><td><span class="badge-included">Included</span> Tagged every cycle; 85% threshold tracked monthly</td></tr>
<tr><td>RTE 25 Percent Reservation Cost</td><td>Manual reimbursement claim</td><td>Not supported</td><td><span class="badge-included">Included</span> Per-child cost includes payroll attribution</td></tr>
<tr><td>CLRA Contractor Reconciliation</td><td>Manual or skipped</td><td>Limited contractor module</td><td><span class="badge-included">Included</span> Quarterly with billing escrow</td></tr>
<tr><td>Form 10B Trust Audit Reconciliation</td><td>Manual reconciliation to payroll</td><td>Not in HRMS scope</td><td><span class="badge-included">Included</span> Payroll pre-reconciled to audit pod</td></tr>
<tr><td>Form 10BD 80G Donor Report</td><td>Manual annual exercise</td><td>Not supported</td><td><span class="badge-included">Included</span> Coordinated with payroll cycle close</td></tr>
<tr><td>Cost (300 employees, trust-form)</td><td>Rs 14-20 L p.a. HR head + statutory exposure</td><td>Rs 100-350 per emp/month + trust audit firm + GST advisor + your time</td><td>Rs 129 per emp/month (Rs 4.6 L p.a.) all-inclusive</td></tr>
<tr><td>Accountability for 12AB / 80G / GST Miss</td><td>Internal</td><td>On the institution</td><td>On Patron under engagement letter</td></tr>


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
            <h2 class="section-title">Related Patron Services for Education Sector</h2>
            <div class="content-text">
                
                
<p>Education sector payroll links to several adjacent compliance workflows - all delivered by the same CA and CS team for a single point of accountability.</p>
<ul>
    <li><strong><a href="/payroll-services">Payroll Services (Parent Hub)</a>:</strong> Patron payroll hub across all industries - the umbrella under which education payroll sits.</li>
    <li><strong><a href="/12a-registration">12A Registration</a>:</strong> Section 12AB IT Act registration for charitable trusts, societies and Section 8 educational companies - initial registration and 5-year renewal.</li>
    <li><strong><a href="/80g-registration">80G Registration</a>:</strong> Section 80G donor-deduction certificate - initial registration and 5-year renewal aligned with 12AB.</li>
    <li><strong><a href="/society-registration">Society Registration</a>:</strong> Initial society registration under the Societies Registration Act 1860 or state-specific Society Acts for forming an educational society.</li>
    <li><strong><a href="/statutory-audit">Statutory Audit</a>:</strong> Companies Act and trust audit covering Section 12AB application-of-income (85 percent), Section 13(8) 20 percent commercial cap, gratuity provision, Form 10B and Form 10BB.</li>
    <li><strong><a href="/gst-audit">GST Audit</a>:</strong> Section 35(5) CGST audit for education institutions running split-stream operations (Entry 66 exempt education plus taxable coaching / B2B).</li>
    <li><strong><a href="/gst-returns">GST Returns</a>:</strong> Monthly GSTR-1, GSTR-3B and annual GSTR-9 for taxable streams (coaching, ed-tech sales, sponsorship) under HSN / SAC 999293.</li>
    <li><strong><a href="/pf-registration">PF Registration</a>:</strong> EPFO sub-code activation for schools with 20+ employees.</li>
</ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework Governing Education Payroll</h2>
            <div class="content-text">
                
                
<p><strong>Notification 12/2017-Central Tax (Rate) dated 28 June 2017 (<a href="https://gstcouncil.gov.in/sites/default/files/e-version-gst-flyers/GST_Education_Services.pdf" target="_blank" rel="noopener">GST Council flyer</a>):</strong> Entry 66 grants GST exemption to services by an educational institution to its students, faculty and staff under Heading 9992. Auxiliary services (transportation, catering, housekeeping, security, admission and examination) supplied to an institution providing pre-school to higher secondary are also exempt.</p>

<p><strong>Clause 2(y) Notification 12/2017-CT(R) - Educational Institution Definition:</strong> (i) Pre-school education and education up to higher secondary or equivalent; (ii) education for a qualification recognised by law for the time being in force; (iii) education as part of an approved vocational education course.</p>

<p><strong>AAR Gujarat in Re Sanjaykumar Ishwerlal Sadadiwala dated 28 April 2026:</strong> Supplementary coaching to Class 5 to 12 students (GSEB and CBSE curricula) does not qualify under Entry 66; classified under SAC 999293 commercial training and coaching services; liable to 18 percent GST.</p>

<p><strong>Section 12AB IT Act 1961 (<a href="https://www.incometax.gov.in/iec/foportal/" target="_blank" rel="noopener">Income Tax Department portal</a>):</strong> Revised registration regime for charitable trusts, societies and Section 8 companies effective 1 April 2021; 5-year renewal cycle; replaces Section 12AA.</p>

<p><strong>Section 80G IT Act 1961:</strong> Donor deduction certification; 50 or 100 percent deduction depending on category; renewable every 5 years aligned with 12AB; donors reported in Form 10BD by 31 May of next FY.</p>

<p><strong>Sections 11 and 12 IT Act 1961:</strong> Application of income for 12AB-registered trusts; at least 85 percent of annual receipts must be applied for charitable purposes; remainder may be accumulated under Section 11(2)(a) by filing Form 10.</p>

<p><strong>Section 13(8) IT Act 1961:</strong> Business / commercial activities of a charitable trust capped within 20 percent of total receipts; breach triggers loss of exemption.</p>

<p><strong>Section 10(23C) IT Act 1961:</strong> Income tax exemption for specific educational institutions - (iiiab) government-financed; (iiiad) annual receipts up to Rs 5 crore; (vi) approved by prescribed authority.</p>

<p><strong>Section 192 / Section 392 IT Act 1961 / 2025:</strong> Salary TDS at average slab rate for permanent teachers and non-teaching staff; monthly deposit by 7th.</p>

<p><strong>Section 194J / Section 393 IT Act 1961 / 2025:</strong> TDS at 10 percent on professional services to visiting faculty, adjuncts and subject experts above Rs 50,000 per FY per payee; 20 percent if PAN not quoted.</p>

<p><strong>Right of Children to Free and Compulsory Education Act, 2009 (<a href="https://dsel.education.gov.in/rte" target="_blank" rel="noopener">Department of School Education and Literacy</a>):</strong> Section 12(1)(c) mandates 25 percent reservation in private unaided schools for economically weaker sections; state government reimburses per-child cost (typically Rs 18,000 to Rs 30,000 per child per year).</p>

<p><strong>Code on Wages, 2019:</strong> Effective 21 November 2025; Section 6 basic at least 50 percent; Section 17(1) wages within 7 days; Section 17(2) FnF within 2 working days; Section 56 penalty up to Rs 1 lakh per violation.</p>

<p><strong>EPF Act 1952 and ESI Act 1948:</strong> EPF applies to schools with 20+ employees at 12 percent each side; ESI at 3.25 percent + 0.75 percent on wages up to Rs 21,000 - covers most non-teaching staff (clerks, ayahs, helpers, drivers).</p>

<p><strong>State Public Trust Acts:</strong> Maharashtra Public Trust Act 1950 (Charity Commissioner), Karnataka Societies Act 1960, Tamil Nadu Societies Act 1975, Gujarat Public Trust Act 1950 - governing law for school trusts including audit and annual filing.</p>

<p><strong>Societies Registration Act, 1860:</strong> Central law for society registration in states without state-specific society legislation.</p>

<p style="margin-top:20px;"><strong>Penalty Snapshot</strong></p>
<ul>
    <li>Section 11(2A) IT Act - loss of exemption on excess accumulation</li>
    <li>Section 12AB cancellation - retrospective from year of breach</li>
    <li>Section 80G cancellation - donor deductions disallowed retrospectively</li>
    <li>CGST Section 122 - penalty up to Rs 25,000 plus tax for incorrect exemption claim</li>
    <li>CGST Section 73 / 74 - tax, interest and penalty for under-payment</li>
    <li>Section 201 IT Act - 1 percent / 1.5 percent per month on TDS default</li>
    <li>Section 271C IT Act - penalty equal to TDS not deducted or deposited</li>
    <li>Code on Wages Section 56 - up to Rs 1 lakh per violation</li>
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
                    <h2 class="faq-expanded__title">Education Sector Payroll FAQs</h2>
                    <p class="faq-expanded__lead">Common questions on GST Entry 66 exemption, Section 12AB trust application-of-income, Section 194J visiting faculty TDS, RTE Act reimbursement and Code on Wages SLAs - answered by the Patron CA team.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Education Sector Payroll FAQs'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Are school fees exempt from GST?</h3>
                        <div class="faq-expanded__a"><p>Yes. Services provided by an educational institution to its students, faculty and staff are exempt under Entry 66 of Notification 12/2017-Central Tax (Rate) dated 28 June 2017, Heading 9992. An educational institution per Clause 2(y) is one providing pre-school to higher secondary education, education for a qualification recognised by law, or an approved vocational education course. Core education fees, hostel lodging, transportation by the institution and ancillary services are all exempt. Private coaching and degree-college auxiliary services to outside parties are NOT exempt.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is coaching for school students exempt from GST?</h3>
                        <div class="faq-expanded__a"><p>No. Per the AAR Gujarat ruling in Re Sanjaykumar Ishwerlal Sadadiwala dated 28 April 2026, supplementary coaching to Class 5 to 12 students under GSEB and CBSE curricula does NOT qualify under Entry 66 of Notification 12/2017-CT(R). Such services are classified under SAC 999293 "commercial training and coaching services" under Heading 9992 and are liable to 18 percent GST (9 percent CGST plus 9 percent SGST). A school running an in-house weekend coaching programme must register for GST and apply 18 percent on that revenue stream separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Visiting faculty ko Section 192 mein deduct karein ya 194J mein?</h3>
                        <div class="faq-expanded__a"><p>Visiting faculty, adjunct teachers, subject experts aur paper-setters professional services dete hain - employee-employer relationship nahi hai. Inka TDS Section 194J ke under deduct karna padta hai 10 percent flat rate pe (Rs 50,000 per FY per payee se zyaada pe). Section 192 sirf permanent staff (regular teachers, principal, admin staff) ke liye hai jo monthly salary lete hain. Misclassification se Form 26AS mismatch aata hai aur visiting faculty ki ITR mein interest mismatch hota hai. Patron yeh classification onboarding pe sort karta hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is Section 12A registration for a school trust?</h3>
                        <div class="faq-expanded__a"><p>Section 12AB of the IT Act 1961 (replacing the earlier Section 12AA effective 1 April 2021) is the income-tax registration for a charitable trust, society or Section 8 company that wants to claim exemption under Sections 11 and 12. A 12AB-registered school trust must apply at least 85 percent of annual receipts for charitable purposes (including teacher salaries, infrastructure, scholarships) to retain the exemption. Section 13(8) caps business or commercial activities within 20 percent of total receipts. Registration is for a 5-year cycle and is renewable.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Trust application-of-income kaise track karte hain?</h3>
                        <div class="faq-expanded__a"><p>Section 12AB-registered trust ko annual receipts ka kam-se-kam 85 percent charitable purposes pe apply karna padta hai under Section 11. Iska matlab: total annual fees + donations + interest income lekar, har month payroll, scholarships, infrastructure aur student welfare spending ko "application" pool mein tag karte hain. Patron payroll engine har disbursement (teacher salary, non-teaching wages, contractor payment) ko application-of-income pool mein automatically tag karta hai. Year-end pe agar 85 percent achieve nahi hua, toh Section 11(2)(a) ke under accumulation Form 10 file karke 5 years tak defer kar sakte hain.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Are school transport and canteen exempt under GST?</h3>
                        <div class="faq-expanded__a"><p>Yes - if these auxiliary services are provided BY the educational institution to its students and staff, they fall under Entry 66 exemption. If they are provided TO an institution offering pre-school to higher secondary education (outsourced agency providing transport or catering), they are also exempt under Entry 66(b). However, for institutions providing higher education (degree colleges, universities), auxiliary services from outside agencies are NOT exempt - those agencies must charge 18 percent GST. A cafeteria run by an outside vendor at a degree college therefore attracts 18 percent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is Section 192 TDS applicable to teachers paid by a trust?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 192 IT Act 1961 (Section 392 IT Act 2025 from 1 April 2026) applies to all salary payments regardless of whether the employer is a private company, partnership, LLP or charitable trust under Section 12AB. A school trust paying permanent teachers must deduct salary TDS at average slab rate, deposit by the 7th of the following month, file Form 24Q quarterly and issue Form 16 annually. The trust's Section 11 exemption does NOT exempt it from TDS deductor duties under Section 201.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How is RTE Act 25 percent reservation linked to payroll?</h3>
                        <div class="faq-expanded__a"><p>Section 12(1)(c) of the Right to Education Act 2009 mandates 25 percent reservation in private unaided schools for children from economically weaker sections. The state government reimburses per-child cost - typically Rs 18,000 to Rs 30,000 per child per year per state notification. Payroll feeds the reimbursement claim through per-child cost computation: proportionate teacher salary, infrastructure depreciation and administrative overhead allocated to each RTE student. Under-claiming on the reimbursement (which is common) costs schools Rs 15,000+ per child per year. Patron's reimbursement claim preparation typically uplifts recovery by 40 to 70 percent.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
<p><strong>Q: GST exemption notification for education?</strong><br>Notification 12/2017-CT(R) dated 28 June 2017, Entry 66, Heading 9992.</p>
<p><strong>Q: Educational institution definition?</strong><br>Clause 2(y) Notification 12/2017-CT(R) - pre-school to higher secondary; qualification recognised by law; approved vocational.</p>
<p><strong>Q: GST rate on supplementary coaching?</strong><br>18 percent under SAC 999293 - AAR Gujarat Re Sanjaykumar Ishwerlal Sadadiwala dated 28.04.2026.</p>
<p><strong>Q: Section 194J visiting faculty rate?</strong><br>10 percent above Rs 50,000 per FY per payee (20 percent if PAN not quoted).</p>
<p><strong>Q: Trust application-of-income threshold?</strong><br>85 percent of annual receipts under Section 11; commercial activity capped at 20 percent under Section 13(8).</p>
<p><strong>Q: Section 12AB renewal cycle?</strong><br>5 years; 80G renewal aligned.</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Four Active Transitions Hitting Education Payroll Right Now</h2>
            <div class="content-text">
                
                
<p>Four transitions hit education sector payroll right now. <strong>First</strong>, the AAR Gujarat ruling in Re Sanjaykumar Ishwerlal Sadadiwala dated 28 April 2026 has narrowed the Entry 66 exemption interpretation - any school running supplementary or weekend coaching alongside core education is now on borrowed time before assessment notices on the coaching revenue at 18 percent under SAC 999293. <strong>Second</strong>, the Code on Wages 2019 has been in force since 21 November 2025 - Section 17(2) 2-day FnF and Section 6 50-percent-basic both impact contract teacher and visiting faculty exits at term-end. <strong>Third</strong>, the December 2025 uniform wage definition under the Code on Social Security 2020 has expanded the PF and ESI base for non-teaching staff. <strong>Fourth</strong>, the Income Tax Act 2025 takes over from 1 April 2026 - Form 16 becomes Form 130, Form 16A becomes Form 131, Form 24Q becomes Form 138, Form 26Q becomes Form 139, Section 192 becomes Section 392 and Section 194J becomes Section 393.</p>

<p style="margin-top:16px;"><strong>Action now:</strong> book a payroll compliance review with Patron Accounting. We will run a free 30-minute audit covering GST Entry 66 split-stream exposure, Section 12AB application-of-income status, Section 194J visiting faculty classification and Section 192/194J to Section 392/393 transition readiness. Call <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700">WhatsApp us</a>.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Run Your Education Payroll the CA-Led Way</h2>
            <div class="content-text" style="text-align:left;">
                
                
<p style="color:#fff;">Education sector payroll in 2026 is the most form-and-status-dependent compliance surface in India. The corporate form (charitable trust under Section 12AB, society, Section 8 company, private limited) drives the income tax exemption framework. The activity mix (core education vs supplementary coaching vs ed-tech vs B2B placement) drives the GST regime split between Entry 66 exemption and 18 percent SAC 999293 commercial coaching. The workforce stratification (permanent teachers under Section 192, visiting faculty under Section 194J, contract daily-wage, non-teaching with ESI, agency contractors with CLRA) drives the payroll batch design.</p>
<p style="color:#fff;margin-top:12px;">Layered on this is the RTE Act 25 percent reservation reimbursement claim, Section 12AB application-of-income tracking and Section 80G donor reporting. Software-only platforms compute correctly when configured, but the trust application-of-income tagging, GST split-stream invoicing, RTE per-child cost allocation and Section 194J visiting faculty separation need CA-led handling.</p>
<p style="color:#fff;margin-top:12px;">Patron Accounting LLP - a CA and CS practice with 15+ years of regulatory experience and offices in Pune, Mumbai, Delhi and Gurugram - delivers payroll for schools, colleges, ed-tech and education trusts as a managed service starting at Rs 99 per employee per month (concessional trust-form pricing). The engagement includes Section 192 salary, Section 194J visiting faculty, contract teacher daily-wage, application-of-income tagging under Section 12AB, GST Entry 66 split-stream tracking, RTE reservation per-child cost computation, CLRA contractor reconciliation and Code on Wages SLAs. Trust audit, 12A and 80G registration and renewal, GST audit and ROC compliance cross-sell deliver a single point of accountability.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20book%20a%20free%20education%20payroll%20consultation%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Education%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Education%20Sector%20Payroll%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Explore Related Education, Trust and Compliance Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end Patron support for the education sector compliance perimeter - same CA pod, single engagement letter.</p>
         
            
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">Adjacent compliance workflows for schools, colleges, education trusts and ed-tech.</div>
    <div class="pa-cross-grid">
        <a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a>
        <a href="/12a-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/80g-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">80G Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/society-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><div><div class="pa-card-title">Society Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
        <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/payroll-processing-services-for-education-industry" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">Payroll Processing (Education)</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter"></span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months by the Patron CA &amp; CS team to capture GST education rulings, Section 12AB and 80G renewal cycle updates, Section 192 / 194J to Section 392 / 393 transition under the Income Tax Act 2025, RTE Act state notifications and Code on Wages state rules.</p>
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
@endsections