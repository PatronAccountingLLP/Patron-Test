
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
    <title>MGT-7 Filing Services</title>
    <meta name="description" content="MGT-7 and MGT-7A filing services for FY 2025-26. Section 92 annual return within 60 days of AGM. CA-reviewed. From Rs 6,000 standalone or Rs 35,000 bundled.">
    <link rel="canonical" href="/mgt-7-filing-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="MGT-7 Filing Services 2026 | Patron Accounting">
    <meta property="og:description" content="MGT-7 and MGT-7A filing services for FY 2025-26. Section 92 annual return within 60 days of AGM. CA-reviewed. From Rs 6,000 standalone or Rs 35,000 bundled.">
    <meta property="og:url" content="/mgt-7-filing-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/mgt-7-filing-services-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MGT-7 Filing Services 2026 | Patron Accounting">
    <meta name="twitter:description" content="MGT-7 and MGT-7A filing services for FY 2025-26. Section 92 annual return within 60 days of AGM. CA-reviewed. From Rs 6,000 standalone or Rs 35,000 bundled.">
    <meta name="twitter:image" content="/images/mgt-7-filing-services-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/mgt-7-filing-services#breadcrumb",
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
                        "name": "Private Limited Company Compliance",
                        "item": "/private-limited-company-compliance"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "MGT-7 Filing Services",
                        "item": "/mgt-7-filing-services"
                    }
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/mgt-7-filing-services#faq",
                "mainEntity": [
            {
                "@type": "Question",
                "name": "What is Form MGT-7 and who must file it?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form MGT-7 is the annual return filed with the Registrar of Companies under Section 92 of the Companies Act, 2013 read with Rule 11 of Companies (Management and Administration) Rules, 2014. It captures the company's structural and governance position as on 31 March - shareholding pattern, directors, KMP, charges, meetings, and remuneration. Every company registered under the Companies Act 2013 (Pvt Ltd, Public Ltd, OPC, Section 8) files an annual return every FY regardless of activity or turnover. Small companies under Section 2(85) and OPCs file the abridged MGT-7A."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between MGT-7 and MGT-7A?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MGT-7 is the full annual return filed by all regular private and public companies. MGT-7A is an abridged version with reduced disclosure (especially on shareholding pattern and indebtedness), available only to small companies under Section 2(85) (paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore per G.S.R. 880(E) dated 1 December 2025) and One Person Companies. MGT-7A is also self-certified by a director with DIN - no CS signature and no practising professional certification required. MGT-7 requires both CS signing and separate CA/CS/CMA practising professional certification."
                }
            },
            {
                "@type": "Question",
                "name": "What is the due date for MGT-7 filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "MGT-7 or MGT-7A must be filed within 60 days from the date of the Annual General Meeting under Rule 11 of Companies (Management and Administration) Rules, 2014. For regular companies with AGM by 30 September, MGT-7 / MGT-7A is typically due by 29 November. For One Person Companies which do not hold AGM under Section 96, MGT-7A is due within 60 days of completion of 180 days from the financial year end - approximately 28 November for FY ending 31 March."
                }
            },
            {
                "@type": "Question",
                "name": "Who can sign Form MGT-7?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Form MGT-7 must be signed by a Director with valid DIN PLUS the Company Secretary (if appointed) or a Company Secretary in practice (if no CS is appointed). Additionally, MGT-7 must be certified by a practising CA, CS, or CMA - a separate practising professional certification embedded in the form. For MGT-7A (small companies and OPCs), only a director with valid DIN needs to sign - no CS signature and no practising professional certification are required. This director-only signing for MGT-7A is the single biggest signing simplification for small companies."
                }
            },
            {
                "@type": "Question",
                "name": "When is MGT-8 certification required for MGT-7?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Under Section 92(2) of the Companies Act, 2013 read with Rule 11(2) of Companies (Management and Administration) Rules, 2014, MGT-8 certification by a Company Secretary in practice is required for: (a) listed companies; (b) companies with paid-up share capital of Rs 10 crore or more; and (c) companies with turnover of Rs 50 crore or more. Any ONE of these three triggers requires MGT-8. The CS in practice certifies that the annual return discloses facts correctly and the company has complied with the Companies Act, 2013. UDIN tagging is mandatory. Small companies and OPCs (filing MGT-7A) are exempt from MGT-8."
                }
            },
            {
                "@type": "Question",
                "name": "What is the penalty for late filing of MGT-7?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Late filing of MGT-7 / MGT-7A attracts two layered penalties post-Companies (Amendment) Act 2020. FIRST, an additional fee of Rs 100 per day per form with no upper cap on the daily fee under Section 403, effective 1 July 2018. SECOND, the substituted Section 92(5) penalty: company Rs 10,000 initial + Rs 100/day continuing, capped at Rs 2,00,000; each officer in default Rs 10,000 + Rs 100/day, capped at Rs 50,000. Substituted by Section 20 of Companies (Amendment) Act 2020 via Notification S.O. 4646(E) dated 21 December 2020 - replacing the earlier Rs 50,000 to Rs 5 lakh fine structure. Three consecutive years of non-filing additionally triggers Section 164(2) director disqualification for 5 years plus DIN deactivation."
                }
            },
            {
                "@type": "Question",
                "name": "What attachments are needed for MGT-7?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mandatory MGT-7 attachments include: list of shareholders and debenture holders (in the MCA prescribed Excel template with strict column ordering), list of directors and KMP, register of board / committee / general meetings with attendance, register of charges with CHG-1 / CHG-4 cross-references, register of related-party contracts under Section 188 with AOC-2 cross-reference, remuneration details for directors and KMP, AGM extension approval letter (if applicable under Section 96(1) proviso), MGT-8 certificate (for listed / Rs 10 cr+ / Rs 50 cr+ companies), and photograph of the registered office with name signage. MGT-7A requires the same data set but with reduced disclosure on shareholding pattern and indebtedness."
                }
            },
            {
                "@type": "Question",
                "name": "Can MGT-7 be revised after filing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. MGT-7 can be revised by filing a new annual return with updated information through the MCA V3 portal. The revision should be supported by a board resolution explaining the reasons for the revision. Government filing fees apply again on the revised filing. Material revisions reflecting fraud or misstatement may attract Section 447 / 448 consequences (imprisonment 6 months to 10 years for fraud) and Section 92(5) adjudication exposure for the company and officers. Patron recommends revising promptly on discovery to avoid downstream complications with bankers, investors, due-diligence reviewers, or regulators."
                }
            }
                ]
            },
            {
                "@type": "Service",
                "@id": "/mgt-7-filing-services#service",
                "name": "MGT-7 and MGT-7A Annual Return Filing Services",
                "url": "/mgt-7-filing-services",
                "description": "MGT-7 and MGT-7A annual return filing service under Section 92 of Companies Act 2013 read with Rule 11 of Companies (Management and Administration) Rules 2014. Filed within 60 days of AGM. MGT-7A for small companies under Section 2(85) (Rs 10 crore paid-up + Rs 100 crore turnover per G.S.R. 880(E) dated 1 December 2025) and OPCs; MGT-7 for all other regular companies. MGT-8 certification by CS-in-practice required for listed companies, paid-up capital Rs 10 crore+, or turnover Rs 50 crore+ under Section 92(2) + Rule 11(2). Post-Companies (Amendment) Act 2020 Section 92(5) substituted penalty: company cap Rs 2,00,000 / officer cap Rs 50,000 at Rs 100/day (substituted via Section 20 of Companies Amendment Act 2020 via S.O. 4646(E) dated 21 December 2020). Standalone Rs 6,000 to Rs 12,000 or full Pvt Ltd Annual Compliance bundle at Rs 35,000.",
                "serviceType": "Corporate Compliance / Annual Return Filing Service",
                "provider": { "@id": "/#organization" },
                "areaServed": {
                    "@type": "Country",
                    "name": "India",
                    "sameAs": "https://en.wikipedia.org/wiki/India"
                },
                "about": [
                    {
                        "@type": "Thing",
                        "name": "Annual report",
                        "sameAs": "https://en.wikipedia.org/wiki/Annual_report"
                    },
                    {
                        "@type": "Thing",
                        "name": "Ministry of Corporate Affairs",
                        "sameAs": "https://en.wikipedia.org/wiki/Ministry_of_Corporate_Affairs"
                    },
                    {
                        "@type": "Thing",
                        "name": "Companies Act 2013",
                        "sameAs": "https://en.wikipedia.org/wiki/Companies_Act_2013"
                    }
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "MGT-7 / MGT-7A Filing Packages",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "name": "MGT-7A (Small Company / OPC)",
                            "price": "6000",
                            "priceCurrency": "INR",
                            "description": "Abridged annual return for small companies under Section 2(85) (paid-up Rs 10 crore + turnover Rs 100 crore per G.S.R. 880(E)) and One Person Companies. Director self-certified with active DIN. No CS signature and no practising professional certification required. Reduced disclosure on shareholding pattern and indebtedness."
                        },
                        {
                            "@type": "Offer",
                            "name": "MGT-7 Regular (No MGT-8)",
                            "price": "8000",
                            "priceCurrency": "INR",
                            "description": "MGT-7 full annual return for regular private and public companies BELOW the MGT-8 threshold. Includes CS / CA / CMA practising professional certification embedded in the form. For companies with paid-up capital below Rs 10 crore AND turnover below Rs 50 crore (non-listed)."
                        },
                        {
                            "@type": "Offer",
                            "name": "MGT-7 with MGT-8 Certification",
                            "price": "12000",
                            "priceCurrency": "INR",
                            "description": "MGT-7 plus MGT-8 certification by Company Secretary in practice for listed companies and entities at paid-up capital Rs 10 crore+ OR turnover Rs 50 crore+ under Section 92(2) + Rule 11(2). UDIN tagged. MGT-8 CS fee charged separately at actuals."
                        },
                        {
                            "@type": "Offer",
                            "name": "Pvt Ltd Annual Compliance Bundle",
                            "price": "35000",
                            "priceCurrency": "INR",
                            "description": "Full Pvt Ltd Annual Compliance: MGT-7 / MGT-7A + AOC-4 + ADT-1 + DIR-3 KYC + DPT-3 + MSME-1 + statutory audit (where applicable) + ITR-6 + statutory registers + board minutes. Dedicated CS contact. Recommended path when filing multiple annual returns. Saves Rs 5,000 to Rs 15,000 vs piecemeal purchase."
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
                        MGT-7 Filing Services in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Basis:</span> Section 92 of Companies Act 2013 + Rule 11 of Companies (Management and Administration) Rules 2014. Within 60 days of AGM.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> MGT-7A Rs 6,000 | MGT-7 Rs 8,000 | MGT-7 + MGT-8 Rs 12,000 | Full Annual Bundle Rs 35,000 (covers 7 filings).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Variant Test:</span> MGT-7A for Small Cos (Section 2(85)) and OPCs | MGT-7 for all other regular Pvt Ltd / Public Ltd. Re-tested every FY.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>MGT-8 Threshold:</span> CS-in-practice MGT-8 certification at listed companies OR Rs 10 cr paid-up OR Rs 50 cr turnover under Section 92(2).</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses | 4.9 Google Rating | 1,200+ MGT-7 / MGT-7A Filed FY24-25 | 100% On-Time | Sub-1% MCA Query</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MGT-7%20or%20MGT-7A%20annual%20return%20filing%20support." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - MGT-7 Filing Services'/>
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
                                <option value="mgt-7-filing-services" selected>MGT-7 / MGT-7A Filing (this page)</option>
                                <option value="aoc-4-filing-services">AOC-4 Filing (Filed First)</option>
                                <option value="private-limited-company-annual-compliance">Pvt Ltd Annual Compliance Bundle</option>
                                <option value="small-company-annual-compliance">Small Company Annual Compliance</option>
                                <option value="private-limited-company-compliance">Pvt Ltd Compliance Hub</option>
                                <option value="adt-1-filing-services">ADT-1 Filing</option>
                                <option value="director-kyc">DIR-3 KYC</option>
                                <option value="roc-notice">ROC Notice Response</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professionalism, attention to detail, and timely communication made the process smooth. Patron filed MGT-7 with MGT-8 certification within 5 working days of data handover. UDIN tagged properly.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Pvt Ltd | Mumbai</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Our turnover had just crossed Rs 50 crore so MGT-8 became applicable - Patron caught it on intake and arranged UDIN-tagged CS certification. And it's not expensive at all.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT/SaaS Pvt Ltd | Pune</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were filing MGT-7 thinking we were still a small company - turnover had crossed Rs 100 crore. Patron re-classified us on intake under G.S.R. 880(E), shifted us to MGT-7 (not MGT-7A), and added MGT-8 certification. Saved us from rejection.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CS</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Consulting Pvt Ltd</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi | Variant re-classification</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Bundled into Rs 35,000 Pvt Ltd Annual Compliance - saved Rs 12,000 vs piecemeal MGT-7 + AOC-4 + ADT-1 + DIR-3 KYC + ITR-6. Single point of contact across the year. All deadlines hit ahead of time.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#F59E0B;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SU</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Startup Pvt Ltd</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Gurugram | Bundle FY24-25</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 weeks ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">OPC compliance - we file MGT-7A annually. Patron makes it simple - director-only signature, no CS or practising professional certification. Rs 6,000 fixed. No surprises. Done in 3 working days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">OP</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">OPC Founder</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bangalore | MGT-7A annual</div>
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
                    <p>Free 15-minute scoping call. MGT-7 vs MGT-7A variant test on intake (Section 2(85) + G.S.R. 880(E)). AOC-4-before-MGT-7 sequencing protocol applied. MGT-8 threshold tested for listed / Rs 10 cr+ / Rs 50 cr+ companies. Section 92(5) post-Companies (Amendment) Act 2020 penalty framework applied (substituted via S.O. 4646(E) dated 21 December 2020). CCFS-2026 amnesty window (15 April-15 July 2026) leveraged for backlog cleanup where applicable.</p>
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
            
                <a href="#overview-section" class="toc-btn">TL;DR</a>
                <a href="#what-section" class="toc-btn">What Is MGT-7</a>
                <a href="#who-section" class="toc-btn">MGT-7 vs MGT-7A</a>
                <a href="#services-section" class="toc-btn">What Patron Delivers</a>
                <a href="#procedure-section" class="toc-btn">7-Step Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Common Pitfalls</a>
                <a href="#fees-section" class="toc-btn">Pricing</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Why Use CA + CS</a>
                <a href="#comparison-section" class="toc-btn">MGT-7 vs AOC-4</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TL;DR: MGT-7 / MGT-7A Filing at a Glance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - MGT-7 Filing Services Services at a Glance</strong></p>
                    <p><strong>Form MGT-7</strong> is the annual return under <strong>Section 92 of the Companies Act, 2013</strong> read with <strong>Rule 11 of Companies (Management and Administration) Rules, 2014</strong>. Small companies and OPCs file the abridged <strong>MGT-7A</strong>. Both are due <strong>within 60 days of AGM</strong> (typically 29 November). Late fee Rs 100/day no cap PLUS Section 92(5) post-2020 substituted penalty: company cap <strong>Rs 2,00,000</strong> / officer cap <strong>Rs 50,000</strong> at Rs 100/day. Patron files standalone from <strong>Rs 6,000</strong> or <strong>Rs 35,000</strong> in the full annual bundle.</p>
                </div>
                <p>MGT-7 is filed separately from AOC-4 (financial statements). The two forms cover different domains: AOC-4 is the financial filing under Section 137, MGT-7 is the structural filing under Section 92. MGT-7 is filed AFTER AOC-4 because the annual return references the AOC-4 SRN. Filing in reverse sequence causes MGT-7 portal rejection.</p>
                <p>Below is the quick-reference summary covering governing provisions (Section 92, 92(2), 92(5) post-2020 substituted, 96, 164(2) + Rule 11, Rule 11(1), Rule 11(2)), variant selection (Section 2(85) small company + G.S.R. 880(E) dated 1 December 2025), MGT-8 certification threshold, AOC-4-before-MGT-7 sequencing rule, and Patron's standalone vs bundle pricing path.
                </p>
                <div class="table-responsive-wrapper" style="margin-top:24px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Act</td><td>Companies Act, 2013 (Sections 92, 92(2), 92(5) post-Companies (Amendment) Act 2020, 92(6) post-2020, 96, 164(2)) read with Rule 11, Rule 11(1), and Rule 11(2) of Companies (Management and Administration) Rules, 2014. Section 92(5) substituted by Section 20 of Companies (Amendment) Act 2020 via S.O. 4646(E) dated 21 December 2020.</td></tr>
                        <tr><td>Applicable To</td><td>Every company registered under Companies Act, 2013: Private Limited, Public Limited, OPC, Section 8 Company. Small companies under Section 2(85) (paid-up up to Rs 10 crore AND turnover up to Rs 100 crore per G.S.R. 880(E)) and OPCs file MGT-7A.</td></tr>
                        <tr><td>Timeline</td><td>Within <strong>60 days of AGM</strong> (typically by <strong>29 November</strong> for FY ending 31 March). For OPC MGT-7A: 60 days from completion of 180 days from FY end.</td></tr>
                        <tr><td>Cost (Patron)</td><td><strong>Standalone:</strong> Rs 6,000 (MGT-7A) to Rs 12,000 (MGT-7 with MGT-8). <strong>Bundled in full annual compliance:</strong> Rs 35,000 (covers AOC-4 + MGT-7 + ADT-1 + DIR-3 KYC + DPT-3 + MSME-1 + ITR-6 + audit).</td></tr>
                        <tr><td>Penalty (Post-2020)</td><td><strong>Additional fee:</strong> Rs 100 per day per form, no cap on daily fee. <strong>Section 92(5) post-Companies (Amendment) Act 2020</strong> substituted penalty: Rs 10,000 initial + Rs 100/day continuing, capped at <strong>Rs 2,00,000 for the company</strong> and <strong>Rs 50,000 for each officer in default</strong>. Section 92(6) post-2020 CS penalty: flat <strong>Rs 2,00,000</strong> for false MGT-8 certification.</td></tr>
                        <tr><td>Forms / Portal</td><td>MGT-7 (regular) | MGT-7A (small companies + OPCs) | MGT-8 (CS-in-practice certification - listed / Rs 10 cr+ / Rs 50 cr+) | MCA V3 portal (mca.gov.in)</td></tr>
                        <tr><td>Filing Sequence</td><td><strong>AOC-4 must be filed FIRST</strong> - MGT-7 / MGT-7A references the AOC-4 SRN. MGT-7 in reverse sequence triggers portal rejection.</td></tr>
                        <tr><td>CCFS-2026 Amnesty Coverage</td><td><strong>AVAILABLE</strong> for MGT-7 / MGT-7A backlog (Companies Act 2013 entities). General Circular 01/2026 dated 24 February 2026; window 15 April to 15 July 2026; 90% additional-fee waiver. (LLP Form 11 EXCLUDED.)</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;
</p>
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
                <h2 class="section-title">What Is Form MGT-7?</h2>
                <div class="content-text what-is-definition">
                    
                    
                    <p><strong>Form MGT-7</strong> is the MCA e-form used to file a company's annual return with the Registrar of Companies under <strong>Section 92 of the Companies Act, 2013</strong> read with <strong>Rule 11 of Companies (Management and Administration) Rules, 2014</strong>. It captures the company's structural and governance position as on 31 March of the financial year - shareholding pattern, directors, key managerial personnel, charges, meetings, and remuneration.</p>

                    <p style="margin-top:16px;"><strong>Form MGT-7A</strong> is the abridged version for small companies (under Section 2(85) of Companies Act 2013) and One Person Companies (OPCs). Introduced for FY 2020-21 onwards via Rule 11(1) amendment. Reduced disclosure on shareholding pattern and indebtedness. Director-only signing - no practising professional certification required.</p>

                    <div class="highlight-box" style="margin-top:24px;background:#FEF4EE;border-left:4px solid #E8712C;">
                        <p><strong>&#9888; AOC-4 must be filed BEFORE MGT-7 / MGT-7A.</strong> The MCA V3 portal enforces strict sequencing because the annual return references the AOC-4 SRN. Filing MGT-7 first triggers portal rejection. The two forms have different deadlines: AOC-4 within 30 days of AGM (end October typically); MGT-7 within 60 days of AGM (end November typically).</p>
                    </div>


                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for MGT-7 Filing Services:</strong></p>
                    
                    <p><strong>Form MGT-7 - Annual Return:</strong> Filed under Section 92 of Companies Act 2013 read with Rule 11 of Companies (Management and Administration) Rules 2014. Captures shareholding, directors, KMP, meetings, charges, remuneration, governance disclosures. <strong>Due within 60 days of AGM.</strong></p>
                    <p><strong>Form MGT-7A - Abridged Annual Return:</strong> For small companies under Section 2(85) and OPCs only. Reduced disclosure. Director self-certified with active DIN - no CS or practising professional signature required.</p>
                    <p><strong>Section 92(5) Post-Companies (Amendment) Act 2020:</strong> The substituted penalty provision (effective 21 December 2020 via Notification S.O. 4646(E)) provides: company and every officer in default liable to penalty Rs 10,000 + Rs 100/day continuing failure, capped at <strong>Rs 2,00,000 for the company</strong> and <strong>Rs 50,000 for each officer in default</strong>. Replaced the pre-2020 fine structure of Rs 50,000-Rs 5 lakh. Decriminalized framework parallel to Section 137(3) for AOC-4.</p>
                    <p><strong>Section 92(6) Post-2020 CS Penalty:</strong> Substituted by Companies (Amendment) Act 2020 - flat <strong>Rs 2,00,000 penalty</strong> on Company Secretary in practice for false MGT-8 certification. Replaced pre-2020 fine of Rs 50,000-Rs 5 lakh.</p>
                    <p><strong>Form MGT-8:</strong> CS-in-practice certification mandatory for: (a) listed companies, (b) companies with paid-up capital Rs 10 crore or more, (c) companies with turnover Rs 50 crore or more. Required under Section 92(2) read with Rule 11(2). UDIN tagging mandatory.</p>
                    <p><strong>Section 2(85) Small Company:</strong> Paid-up share capital up to Rs 10 crore AND turnover up to Rs 100 crore (post G.S.R. 880(E) dated 1 December 2025). Both thresholds. Cannot be a public company, holding company, subsidiary, Section 8 company, or company governed by special Act. Files MGT-7A.</p>
                    <p><strong>G.S.R. 880(E) dated 1 December 2025:</strong> Latest Small Company threshold revision. Increased turnover cap from Rs 40 crore to Rs 100 crore. Effective immediately. Re-tested every FY against prior FY data.</p>
                    <p><strong>AOC-4 SRN Sequencing:</strong> MCA V3 portal enforces that AOC-4 (financial statements under Section 137) must be filed before MGT-7. The MGT-7 form references the AOC-4 SRN. Reverse sequencing causes rejection.</p>
                    <p><strong>Section 164(2) Director Disqualification:</strong> 3 consecutive years of non-filing of annual returns or financial statements triggers 5-year disqualification + DIN deactivation for ALL directors of the defaulting company.</p>
                    <p><strong>CCFS-2026:</strong> Companies Compliance Facilitation Scheme 2026 - General Circular 01/2026 dated 24 February 2026. Window 15 April to 15 July 2026. 90% additional-fee waiver on Pvt Ltd / Public Ltd / OPC / Section 8 backlog. Note: LLP Form 11 backlog NOT covered by CCFS-2026.</p>
                    <p><strong>UDIN (Unique Document Identification Number):</strong> Mandatory tagging on MGT-8 certification by CS-in-practice per ICSI directive. Verifies authenticity of professional certification.</p>


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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MGT-7 Filing Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Annual Return</span>
                        <strong>MGT-7 (29 Nov) | MGT-7A (Small Co + OPC)</strong>
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
            <h2 class="section-title">MGT-7 vs MGT-7A: Which Form Applies to You?</h2>
            <div class="content-text">
                
                
                <p>The single most important MGT-7 question is which variant to file. Filing the wrong form triggers MCA rejection and re-filing with late fees accrued. Variant choice is determined by <strong>Section 2(85) Small Company classification</strong> (re-tested every FY).</p>

                <h3 style="margin-top:32px;">MGT-7 vs MGT-7A Comparison Matrix</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr><th>Parameter</th><th>MGT-7 (Regular)</th><th>MGT-7A (Abridged)</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Applicability</td><td>All private and public companies NOT classified as small companies or OPCs</td><td>Small companies under Section 2(85) AND One Person Companies (OPCs)</td></tr>
                        <tr><td>Introduced from</td><td>FY 2014-15 (Companies Act 2013 onset)</td><td>FY 2020-21 (per Rule 11(1) amendment)</td></tr>
                        <tr><td>Disclosure level</td><td>Full - detailed shareholding, KMP, indebtedness, related-party data</td><td>Abridged - reduced disclosure on shareholding pattern and indebtedness</td></tr>
                        <tr><td>Signing by company</td><td>Director + Company Secretary (or CS in practice if no CS appointed)</td><td>Director with DIN (no CS signature required)</td></tr>
                        <tr><td>Practising professional certification</td><td><strong>Required</strong> - CA / CS / CMA in practice signs the form</td><td><strong>NOT required</strong> - director self-certifies</td></tr>
                        <tr><td>MGT-8 certification trigger</td><td>Required if listed OR paid-up Rs 10 crore+ OR turnover Rs 50 crore+ (Section 92(2) + Rule 11(2))</td><td>Not applicable (exempt under Rule 11(2))</td></tr>
                        <tr><td>Auditor rotation impact</td><td>Standard 5-year auditor rotation under Section 139(2)</td><td>Small companies exempt from auditor rotation</td></tr>
                        <tr><td>Patron fee (standalone)</td><td>Rs 8,000 (without MGT-8) to Rs 12,000 (with MGT-8)</td><td>Rs 6,000</td></tr>
                    </tbody>
                </table>
                </div>

                <h3 style="margin-top:32px;">Who Must File MGT-7 or MGT-7A?</h3>
                <p>Every company registered under the Companies Act, 2013 must file an annual return every financial year, <strong>regardless of</strong>:</p>
                <ul>
                    <li><strong>Turnover</strong> - zero-turnover companies still file</li>
                    <li><strong>Profit or loss</strong> - loss-making companies file the same form</li>
                    <li><strong>Business activity</strong> - dormant companies file nil annual returns</li>
                    <li><strong>Number of shareholders or directors</strong></li>
                    <li><strong>Date of incorporation</strong> - first-year companies file by the next AGM cycle</li>
                </ul>

                <h3 style="margin-top:32px;">Section 2(85) Small Company Test (Post G.S.R. 880(E) dated 1 December 2025)</h3>
                <p>A small company is one where <strong>BOTH</strong> conditions are met:</p>
                <ul>
                    <li>Paid-up share capital does not exceed <strong>Rs 10 crore</strong></li>
                    <li>Turnover during the immediately preceding FY does not exceed <strong>Rs 100 crore</strong> (raised from Rs 40 crore via G.S.R. 880(E))</li>
                </ul>
                <p><strong>Excluded from Small Company status</strong> (must file MGT-7 regardless of size):</p>
                <ul>
                    <li>Public companies</li>
                    <li>Holding companies (even if size-wise small)</li>
                    <li>Subsidiary companies (even if size-wise small)</li>
                    <li>Section 8 (non-profit) companies</li>
                    <li>Companies governed by any special Act</li>
                </ul>

                <div class="highlight-box" style="margin-top:24px;">
                    <p><strong>&#9888; Annual recalculation required.</strong> Small company status is NOT permanent. The Section 2(85) test must be re-run every FY against the immediately preceding FY's paid-up capital and turnover. A company that was a small company last year may not qualify this year (or vice versa). Patron runs this check on intake every year - the variant is never carried forward without verification.</p>
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
            <h2 class="section-title">What Patron Delivers in MGT-7 / MGT-7A Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>1. Variant Selection and AOC-4 Sequence Check</strong></td><td>On intake we run the Section 2(85) small company classification check against G.S.R. 880(E) thresholds to lock the correct variant (MGT-7 vs MGT-7A). We also verify the AOC-4 SRN exists for the current FY - MGT-7 / MGT-7A cannot be filed before AOC-4 because the annual return references the AOC-4 SRN.</td></tr>
                        <tr><td><strong>2. Shareholder and KMP Data Reconciliation</strong></td><td>List of shareholders, debenture holders, and KMP compiled in the prescribed MCA Excel template. Changes during the year reconciled against MGT-14 (board resolutions), DIR-12 (director changes), PAS-3 (allotments), SH-4 (share transfers). Discrepancies cleared before form drafting to avoid portal rejection.</td></tr>
                        <tr><td><strong>3. Meeting and Attendance Register Preparation</strong></td><td>Details of board meetings, committee meetings (Audit, NRC, Stakeholders Relationship, CSR where applicable), and general meetings drafted with dates and attendance for each director. For companies under Section 178, committee composition validated. AGM date and EGM dates captured precisely.</td></tr>
                        <tr><td><strong>4. MGT-8 Certification (Where Applicable)</strong></td><td>For listed companies and companies with paid-up share capital of Rs 10 crore+ OR turnover of Rs 50 crore+, MGT-8 certification by Company Secretary in practice arranged under Section 92(2) + Rule 11(2). UDIN generated and linked to MGT-7. Post-2020 Section 92(6) flat Rs 2,00,000 penalty on CS for false certification - drafting reviewed by partner CS.</td></tr>
                        <tr><td><strong>5. Form Drafting, DSC Application, and MCA V3 Submission</strong></td><td>Form MGT-7 or MGT-7A drafted with all required disclosures (8 mandatory information categories under Section 92(1)). For MGT-7: signed by Director plus CS (or CS in practice). For MGT-7A: signed by Director with DIN only. Practising professional certification (CA / CS / CMA) embedded for MGT-7 (not required for MGT-7A). Filed via MCA V3 portal with SRN captured.</td></tr>
                        <tr><td><strong>6. Bundle Upgrade to Full Annual Compliance</strong></td><td>Where MGT-7 / MGT-7A is the entry, we map the rest of the annual cycle (AOC-4, ADT-1, DIR-3 KYC, DPT-3, MSME-1, ITR-6) and quote the full Rs 35,000 annual bundle which is materially cheaper than buying each form separately (Rs 30k-Rs 45k piecemeal).</td></tr>


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
            <h2 class="section-title">MGT-7 / MGT-7A Filing Process: 7-Step Protocol</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron runs every MGT-7 engagement through a tight 7-day protocol. Variant lock on Day 1, data collection and reconciliation through Day 4, MGT-8 arrangement parallel to drafting through Day 6, MCA V3 portal upload by Day 7. The narrow window matters because the Section 92(5) post-2020 penalty clock starts ticking on Day 61 after AGM.</p>
        </header>
        <div class="steps-container">
            
                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 1</span>
                        <h3 class="step-title">Variant Lock + AOC-4 Sequence Check (Day 1)</h3>
                        <p class="step-description">Section 2(85) small company test re-run against G.S.R. 880(E) thresholds (Rs 10 cr paid-up AND Rs 100 cr turnover - both required, neither breached). Public company / holding company / subsidiary / Section 8 exclusion check. Variant locked - MGT-7 vs MGT-7A. AOC-4 SRN verified for current FY - mandatory pre-requisite for MGT-7 filing.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 2(85) test
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                G.S.R. 880(E) thresholds
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-4 SRN verified
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="20" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
                                    <text x="40" y="42" font-size="4" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">REGULAR</text>
                                    <text x="62" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">vs</text>
                                    <rect x="68" y="22" width="32" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="84" y="35" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7A</text>
                                    <text x="84" y="42" font-size="4" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SMALL/OPC</text>
                                    <rect x="22" y="50" width="76" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="60" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 10 Cr Paid-up</text>
                                    <text x="60" y="68" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ Rs 100 Cr Turnover</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Variant Locked</span>
                            <span class="step-number-large">01</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 2</span>
                        <h3 class="step-title">Data Collection (Day 1-3)</h3>
                        <p class="step-description">Shareholder list with shareholding pattern as on 31 March (MCA Excel template). Debenture holder list. Director and KMP register with DIN of every director. Board meeting + committee meeting + general meeting register with dates and attendance. Charges register (CHG-1 / CHG-4 SRN). Related-party register (AOC-2). Remuneration details for directors and KMP. Photograph of registered office with name signage.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Shareholder Excel
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                8 information categories
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 188 RPT register
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="12" fill="#14365F"/>
                                    <text x="60" y="31" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">DATA COLLECTION</text>
                                    <line x1="30" y1="44" x2="90" y2="44" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/>
                                    <text x="60" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SHAREHOLDERS</text>
                                    <text x="60" y="64" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIRECTORS + KMP</text>
                                    <text x="60" y="72" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MEETINGS + CHARGES</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Data Captured</span>
                            <span class="step-number-large">02</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 3</span>
                        <h3 class="step-title">Year-End Reconciliation (Day 3-4)</h3>
                        <p class="step-description">Cross-check working file against MGT-14 (board / special resolutions), DIR-12 (director changes), PAS-3 (allotments), SH-4 (share transfers), CHG-1 / CHG-4 (charge filings). Resolve any data drift between statutory registers and the MGT-7 working file. Section 188 related-party contracts cross-referenced to AOC-2 from AOC-4 working papers.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MGT-14 reconciled
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                DIR-12 + PAS-3
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-2 cross-check
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="60" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILE</text>
                                    <rect x="28" y="42" width="20" height="10" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="38" y="49" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-14</text>
                                    <rect x="50" y="42" width="20" height="10" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="60" y="49" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-12</text>
                                    <rect x="72" y="42" width="20" height="10" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="82" y="49" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAS-3</text>
                                    <rect x="28" y="56" width="20" height="10" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="38" y="63" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SH-4</text>
                                    <rect x="50" y="56" width="20" height="10" rx="1" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="63" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHG-1</text>
                                    <rect x="72" y="56" width="20" height="10" rx="1" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="82" y="63" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AOC-2</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Reconciled</span>
                            <span class="step-number-large">03</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 4</span>
                        <h3 class="step-title">MGT-8 Applicability + Arrangement (Day 4-5, If Applicable)</h3>
                        <p class="step-description">For listed companies and entities at paid-up capital Rs 10 crore+ OR turnover Rs 50 crore+ (Section 92(2) + Rule 11(2)), MGT-8 certification arranged from CS in practice. UDIN generated per ICSI directive. Certification reviewed by partner CS to mitigate Section 92(6) post-2020 flat Rs 2,00,000 penalty risk on the certifying CS for false certification.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Listed / Rs 10cr / Rs 50cr
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                UDIN tagged
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 92(2)
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="36" height="42" rx="2" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <text x="40" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MGT-8</text>
                                    <text x="40" y="48" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rs 10 Cr</text>
                                    <text x="40" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OR Rs 50 Cr</text>
                                    <path d="M62 42l8 0M70 42l-3 -3M70 42l-3 3" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="74" y="22" width="28" height="42" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                                    <text x="88" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDIN</text>
                                    <text x="88" y="48" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CS CERT</text>
                                </svg>
                            </div>
                            <span class="illustration-label">MGT-8 Done</span>
                            <span class="step-number-large">04</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 5</span>
                        <h3 class="step-title">Form Drafting (Day 5-6)</h3>
                        <p class="step-description">MGT-7 or MGT-7A drafted with CIN, financial year, AGM date, and all required disclosures across the 8 mandatory information categories under Section 92(1) (registered office; principal activity; particulars of holding/subsidiary/associate; shareholders; promoters/directors/KMP; meetings; remuneration; penalties/compounding). Cross-check against signed AOC-4 working papers and AOC-2 RPT register.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Section 92(1)
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                8 info categories
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                AOC-4 cross-checked
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="55" rx="3" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="25" y="20" width="38" height="12" fill="#14365F"/>
                                    <text x="44" y="29" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">MGT-7</text>
                                    <text x="44" y="42" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ANNUAL</text>
                                    <text x="44" y="52" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RETURN</text>
                                    <text x="44" y="64" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DRAFT</text>
                                    <rect x="70" y="38" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                                    <text x="85" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEC 92</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Form Drafted</span>
                            <span class="step-number-large">05</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 6</span>
                        <h3 class="step-title">DSC + Certification (Day 6)</h3>
                        <p class="step-description">For MGT-7: Director with active DIN AND CS (or CS in practice) sign. Practising professional (CA / CS / CMA) certification embedded with membership number and FRN - this is a SEPARATE certification from MGT-8. For MGT-7A: Director with active DIN signs - no CS and no practising professional certification required. UDIN tagged for MGT-8 component.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Director DSC
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                CS / Prof certification
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                MGT-7A director-only
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <rect x="22" y="22" width="76" height="14" fill="#10B981"/>
                                    <text x="60" y="32" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">DIGITAL SIGN</text>
                                    <text x="60" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIRECTOR + CS</text>
                                    <text x="60" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ CA/CS/CMA CERT</text>
                                    <text x="60" y="68" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">+ UDIN (if MGT-8)</text>
                                </svg>
                            </div>
                            <span class="illustration-label">Signed</span>
                            <span class="step-number-large">06</span>
                        </div>
                    </div>
                </div>


                <div class="step-card">
                    <div class="step-content">
                        <span class="step-badge">Step 7</span>
                        <h3 class="step-title">MCA V3 Portal Upload + SRN Capture (Day 6-7)</h3>
                        <p class="step-description">Form uploaded via Patron's MCA V3 portal access. Government filing fee paid by nominal capital slab (Rs 200 for less than Rs 1 lakh; Rs 600 for Rs 1 crore+). SRN captured. Acknowledgement PDF downloaded and circulated to directors. Filing pack archived for 8-year retention period. Compliance calendar updated for next FY.</p>
                        <div class="step-highlights">
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Govt fee by capital slab
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                SRN captured
                            </span>
                            <span class="highlight-tag">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                8-year archive
                            </span>
                        </div>
                    </div>
                    <div class="step-visual">
                        <div class="step-illustration">
                            <div class="illustration-icon">
                                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                                    <rect x="22" y="22" width="76" height="55" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/>
                                    <text x="60" y="36" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MCA V3 PORTAL</text>
                                    <line x1="30" y1="46" x2="90" y2="46" stroke="#10B981" stroke-width="1"/>
                                    <text x="60" y="58" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SRN CAPTURED</text>
                                    <circle cx="60" cy="68" r="4" fill="#10B981"/>
                                    <path d="M57 68l2 2 4 -4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                </svg>
                            </div>
                            <span class="illustration-label">Filed</span>
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
            <h2 class="section-title">Document Checklist for MGT-7 / MGT-7A Filing</h2>
            <div class="content-text">
                
                
                <p>The MGT-7 attachment pack is detailed. Missing items trigger MCA portal rejection and penalty clock continuation. Patron uses a validated working file template per the MCA prescribed Excel format.</p>

                <h3 style="margin-top:24px;">Core Documents</h3>
                <ul>
                    <li><strong>Shareholder list with shareholding pattern</strong> as on 31 March (Excel template per MCA instruction kit - strict column ordering)</li>
                    <li><strong>Debenture holder list</strong> as on 31 March (Excel template)</li>
                    <li><strong>Director and KMP register</strong> with changes during the year and DIN of every director</li>
                    <li><strong>Board meeting register</strong> with dates and attendance for each director</li>
                    <li><strong>Committee meeting register</strong> (Audit, NRC, Stakeholders Relationship, CSR where applicable)</li>
                    <li><strong>General meeting register</strong> with AGM date, EGM dates, and member attendance</li>
                    <li><strong>Register of charges</strong> with CHG-1 / CHG-4 SRN cross-references</li>
                    <li><strong>Register of related-party contracts</strong> under Section 188 with AOC-2 cross-reference</li>
                    <li><strong>Remuneration details</strong> for directors and KMP</li>
                    <li><strong>Approval letter for AGM extension</strong> (if applicable) under Section 96(1) proviso</li>
                    <li><strong>MGT-8 certificate</strong> (if applicable) - for listed / Rs 10 crore capital / Rs 50 crore turnover companies</li>
                    <li><strong>Photograph of registered office</strong> (outside view with prominent name signage)</li>
                </ul>

                <h3 style="margin-top:24px;">Authentication Requirements</h3>
                <ul>
                    <li>Active DIN, DSC, and PAN of the Director signing the form</li>
                    <li>Active DSC and membership number of CS / CS-in-practice (for MGT-7) and of certifying professional (CA / CS / CMA)</li>
                    <li>UDIN of CS-in-practice for MGT-8 (where applicable)</li>
                    <li>AOC-4 SRN from current year filing (referenced in MGT-7 / MGT-7A)</li>
                    <li>Current-year DIR-3 KYC status for all directors (DIN deactivation blocks Form 11 / MGT-7 signing)</li>
                </ul>

                <p style="margin-top:16px;"><em>Note: MGT-7A requires the same data set but with reduced disclosure on shareholding pattern and indebtedness. The MCA Excel template differs slightly for MGT-7A.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common MGT-7 Pitfalls - and How Patron Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr>
                            <td><strong>1. Filing MGT-7 before AOC-4 - portal rejection</strong></td>
                            <td>The MCA V3 portal enforces strict sequencing: AOC-4 must be filed BEFORE MGT-7 / MGT-7A because the annual return references the AOC-4 SRN. Filing in reverse triggers rejection. The penalty clock continues running while you re-file in the correct sequence.</td>
                            <td>Patron always sequences AOC-4 first within its 30-day window (end October), captures the SRN, then drafts MGT-7 / MGT-7A within its 60-day window (end November). The 30-day gap between deadlines is built into the protocol.</td>
                        </tr>
                        <tr>
                            <td><strong>2. Wrong variant (MGT-7 vs MGT-7A) filed</strong></td>
                            <td>Founders often assume small company classification is permanent. It is recalculated each FY against the prior FY paid-up capital and turnover under Section 2(85) + G.S.R. 880(E). A company that was a small company last year may not qualify this year (or vice versa).</td>
                            <td>Patron runs the Section 2(85) check on intake every year. The variant is never carried forward without verification. Post G.S.R. 880(E) thresholds (Rs 10 cr paid-up + Rs 100 cr turnover) applied for FY 2025-26 onwards.</td>
                        </tr>
                        <tr>
                            <td><strong>3. Missing MGT-8 certification at Rs 10 cr / Rs 50 cr threshold</strong></td>
                            <td>Companies crossing the MGT-8 threshold (listed OR Rs 10 crore paid-up capital OR Rs 50 crore turnover) must arrange CS-in-practice certification under Section 92(2) + Rule 11(2). Many platforms file MGT-7 without MGT-8 and discover the rejection weeks later, with Section 92(5) penalty accrued.</td>
                            <td>Patron tests the MGT-8 threshold on intake and arranges UDIN-tagged certification in parallel with form drafting. Day 4-5 in the 7-step protocol. CS partner-reviewed to mitigate Section 92(6) post-2020 flat Rs 2,00,000 penalty risk on the certifying CS.</td>
                        </tr>
                        <tr>
                            <td><strong>4. Shareholder Excel template data drift</strong></td>
                            <td>The MCA prescribed Excel template for shareholder lists has strict column ordering and formatting. Manual data entry from internal registers regularly produces drift - blank PAN columns, incorrect folio sequencing, mismatched share counts.</td>
                            <td>Patron uses a validated working file with PAS-3 (allotment) and SH-4 (transfer) reconciliation to lock the shareholder list before template population. Pre-upload validation catches column-ordering issues.</td>
                        </tr>
                        <tr>
                            <td><strong>5. Stale pre-2020 penalty figures cited by competitors</strong></td>
                            <td>Many online articles and competitor platforms still cite pre-2020 Section 92(5) penalty "Rs 50,000 to Rs 5 lakh on company and officer". This is the SUPERSEDED text. Buyers walk in with wrong risk calibration.</td>
                            <td>Patron applies the current post-Companies (Amendment) Act 2020 framework: Rs 10,000 initial + Rs 100/day continuing, capped at Rs 2,00,000 for company / Rs 50,000 for officer in default. Substituted via S.O. 4646(E) dated 21 December 2020.</td>
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
            <h2 class="section-title">MGT-7 / MGT-7A Filing Pricing: Standalone vs Bundle</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td colspan="2" style="background:#F0F4F8 !important;"><strong>Path 1: Standalone MGT-7 / MGT-7A Filing</strong></td></tr>
                        <tr><td><strong>MGT-7A (Small Company / OPC)</strong> - Abridged annual return for small companies under Section 2(85) and OPCs. Director self-certified with DIN. No CS and no practising professional certification required. Reduced disclosure on shareholding pattern and indebtedness.</td><td class="text-end">Rs 6,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>MGT-7 Regular (No MGT-8)</strong> - MGT-7 full annual return for regular private and public companies BELOW the MGT-8 threshold. Includes CS / CA / CMA practising professional certification. For companies with paid-up &lt; Rs 10 crore AND turnover &lt; Rs 50 crore (non-listed).</td><td class="text-end">Rs 8,000 (Exl GST and Govt fees)</td></tr>
                        <tr><td><strong>MGT-7 with MGT-8</strong> - MGT-7 plus MGT-8 certification by CS in practice for listed companies and entities at paid-up Rs 10 crore+ OR turnover Rs 50 crore+. UDIN tagged. Section 92(2) + Rule 11(2) compliant.</td><td class="text-end">Rs 12,000 (Exl GST, Govt fees, MGT-8 CS fee at actuals)</td></tr>
                        <tr><td colspan="2" style="background:#E8F5E9 !important;"><strong>Path 2: Pvt Ltd Annual Compliance Bundle (Recommended)</strong></td></tr>
                        <tr><td><strong>Full Pvt Ltd Annual Compliance</strong> - MGT-7 / MGT-7A + AOC-4 + ADT-1 + DIR-3 KYC + DPT-3 + MSME-1 + statutory audit (where applicable) + ITR-6 + statutory registers + board minutes. Dedicated CS contact, partner-CA review, automated calendar. <strong>Saves Rs 5,000 to Rs 15,000 vs piecemeal purchase.</strong></td><td class="text-end">Rs 35,000 per year (Essential)</td></tr>
                        <tr><td><strong>Comprehensive Bundle</strong> - Everything in Essential plus quarterly TDS coordination, GST review, CSR-2 (where applicable), and event-based filings (MGT-14, DIR-12, PAS-3, SH-7, CHG-1 / CHG-4 as needed).</td><td class="text-end">Rs 50,000 per year (Comprehensive)</td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>Government Filing Fees by Nominal Capital Slab</strong></td></tr>
                        <tr><td>Less than Rs 1 lakh</td><td class="text-end">Rs 200 per document</td></tr>
                        <tr><td>Rs 1 lakh to Rs 4,99,999</td><td class="text-end">Rs 300 per document</td></tr>
                        <tr><td>Rs 5 lakh to Rs 24,99,999</td><td class="text-end">Rs 400 per document</td></tr>
                        <tr><td>Rs 25 lakh to Rs 99,99,999</td><td class="text-end">Rs 500 per document</td></tr>
                        <tr><td>Rs 1 crore or more</td><td class="text-end">Rs 600 per document</td></tr>
                        <tr><td>Company without share capital (Section 8)</td><td class="text-end">Rs 200 per document</td></tr>
                        <tr><td colspan="2" style="background:#FEF4EE !important;"><strong>Late-Filing Penalty Exposure (Post-Companies (Amendment) Act 2020)</strong></td></tr>
                        <tr><td>Additional fee under Section 403 (effective 1 July 2018)</td><td class="text-end">Rs 100/day per form, NO cap on daily fee</td></tr>
                        <tr><td><strong>Section 92(5) Post-2020 Substituted Penalty</strong> (via S.O. 4646(E) dated 21 December 2020)</td><td class="text-end"><strong>Company:</strong> Rs 10,000 + Rs 100/day, capped at <strong>Rs 2,00,000</strong> | <strong>Each Officer:</strong> Rs 10,000 + Rs 100/day, capped at <strong>Rs 50,000</strong></td></tr>
                        <tr><td><strong>Section 92(6) Post-2020 CS Penalty for False MGT-8 Certification</strong></td><td class="text-end">Flat <strong>Rs 2,00,000</strong> on the CS-in-practice (substituted from pre-2020 Rs 50k-Rs 5 lakh fine)</td></tr>
                        <tr><td>Section 164(2) Director Disqualification</td><td class="text-end">5-year disqualification + DIN deactivation after 3 consecutive years of non-filing</td></tr>
                        <tr><td>Section 248 Strike-off Risk</td><td class="text-end">ROC may initiate strike-off where annual filings pending for 2+ years</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 Amnesty (15 April-15 July 2026)</strong></td><td class="text-end"><strong>90% additional-fee waiver for Pvt Ltd MGT-7 / MGT-7A backlog</strong> (LLP Form 11 NOT covered)</td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free MGT-7 Filing Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20MGT-7%20%2F%20MGT-7A%20filing%20from%20Rs%206%2C000." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MGT-7 / MGT-7A Filing Timeline (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Financial year ends</td><td class="text-end">31 March 2026 (Section 2(41), Companies Act 2013)</td></tr>
                        <tr><td>Statutory audit completion (recommended)</td><td class="text-end">By August 2026 (Section 143)</td></tr>
                        <tr><td>Board meeting to approve audited financials</td><td class="text-end">Before AGM (Section 134)</td></tr>
                        <tr><td>Annual General Meeting deadline</td><td class="text-end">By 30 September 2026 (Section 96)</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>AOC-4 filing deadline (must be filed FIRST)</strong></td><td class="text-end"><strong>Within 30 days of AGM (by end October 2026)</strong> | Section 137 + Rule 12</td></tr>
                        <tr style="background:#FEF4EE !important;"><td><strong>MGT-7 / MGT-7A filing deadline - regular companies</strong></td><td class="text-end"><strong>Within 60 days of AGM (by 29 November 2026)</strong> | Section 92 + Rule 11</td></tr>
                        <tr><td>MGT-7A filing deadline - OPC</td><td class="text-end">60 days from completion of 180 days from FY end (by 28 November 2026) | Rule 11(1)</td></tr>
                        <tr><td>MGT-8 certification (if applicable)</td><td class="text-end">Concurrent with MGT-7 drafting (Section 92(2) + Rule 11(2))</td></tr>
                        <tr><td>Patron turnaround (data finalised to filing)</td><td class="text-end">5 to 7 working days (Internal SLA)</td></tr>
                        <tr style="background:#E8F5E9 !important;"><td><strong>CCFS-2026 amnesty window (Pvt Ltd MGT-7 backlog)</strong></td><td class="text-end"><strong>15 April to 15 July 2026</strong> | General Circular 01/2026 dated 24 February 2026</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    
                    <p><strong>&#9888; Post-Companies (Amendment) Act 2020 penalty framework applies.</strong> Section 92(5) substituted by Section 20 of Companies (Amendment) Act 2020 (effective 21 December 2020 via S.O. 4646(E)). The previous "Rs 50,000-Rs 5 lakh fine on company and officer" structure is SUPERSEDED. Current framework: Rs 10,000 initial + Rs 100/day continuing, capped at Rs 2,00,000 for the company and Rs 50,000 for each officer in default. This is decriminalized framework parallel to Section 137(3) (AOC-4) and Section 117(2) (MGT-14).</p>
                    <p style="margin-top:12px;">All Patron fees listed are indicative and do not constitute a binding offer. Final amounts depend on path chosen (standalone Rs 6k-12k vs bundle Rs 35k), MGT-8 applicability under Section 92(2), MGT-7 vs MGT-7A variant per Section 2(85) test, and any pending event filings (DIR-12, MGT-14, PAS-3, SH-4) needing reconciliation. Government fees, MGT-8 CS fee, and DSC charges billed separately at actuals.</p>


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
            <h2 class="section-title">Why Use a CA + CS Firm for MGT-7 Filing</h2>
        </div>
        
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3>Variant Lock Discipline (Re-Tested Every FY)</h3>
                <p>Filing MGT-7 when MGT-7A applies (or vice versa) triggers MCA portal rejection. The Section 2(85) Small Company test must be re-run every FY against the prior FY paid-up capital and turnover. Patron applies the post G.S.R. 880(E) (1 December 2025) Rs 10 cr / Rs 100 cr thresholds and never carries forward last year's classification without verification.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg></div>
                <h3>AOC-4 Before MGT-7 Sequencing</h3>
                <p>The MCA V3 portal enforces order: AOC-4 must be filed BEFORE MGT-7 because the annual return references the AOC-4 SRN. Filing MGT-7 first causes rejection. Patron's protocol sequences AOC-4 by end October (30-day window) and MGT-7 by 29 November (60-day window). The 30-day gap is built in.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3>MGT-8 Threshold Discipline</h3>
                <p>Companies crossing paid-up Rs 10 crore OR turnover Rs 50 crore (or listed) must arrange CS-in-practice MGT-8 certification under Section 92(2) + Rule 11(2). Patron tests on intake and arranges UDIN-tagged certification in parallel with form drafting. Post-2020 Section 92(6) flat Rs 2,00,000 penalty on the certifying CS for false certification - partner-CS reviewed.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3>Section 92(5) Post-2020 Personal Liability</h3>
                <p>Many online articles still cite stale pre-2020 figures ("Rs 50,000 to Rs 5 lakh on company and officer"). Post-Companies (Amendment) Act 2020 framework (substituted via S.O. 4646(E) dated 21 December 2020): Company cap Rs 2,00,000 / Officer cap Rs 50,000 at Rs 100/day. Patron applies the current framework for accurate risk calibration.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3>Section 164(2) Disqualification Awareness</h3>
                <p>Three consecutive years of non-filing of MGT-7 or AOC-4 triggers Section 164(2) 5-year disqualification of all directors + DIN deactivation. Compounds across multiple companies - disqualified directors lose Board seats across their portfolio. Patron's annual calendar prevents the slide into Section 164(2) exposure.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3>Continuity Across Annual Filings</h3>
                <p>MGT-7 is one of seven annual filings. A single firm holding MGT-7 + AOC-4 + ADT-1 + DIR-3 KYC + DPT-3 + MSME-1 + ITR-6 work catches anomalies and shareholder/director data drift that year-by-year freelance work cannot. Critical for investor diligence, lender review, MCA inspections, and any future Section 248 strike-off defence.</p>
            </article>
        </div>

    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Founders Across India</h2>
            <div class="content-text">
                
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>

                <h3 style="margin-top:24px;">MGT-7 / MGT-7A Outcome Proof - FY 2024-25 Internal Metrics</h3>
                <ul>
                    <li>Patron filed <strong>1,200+ MGT-7 / MGT-7A returns</strong> across small companies, regular Pvt Ltd / Public Ltd, and OPCs in FY 2024-25</li>
                    <li><strong>100 percent on-time rate</strong> within the 60-day-from-AGM window</li>
                    <li><strong>Sub-1 percent MCA query rate</strong> on filed forms (FY 2024-25)</li>
                    <li><strong>Zero MGT-8 certification mismatches</strong> on listed / Rs 10 cr+ / Rs 50 cr+ engagements</li>
                    <li>Average director time per filing cycle: 2-3 hours total for MGT-7; 1 hour for MGT-7A</li>
                </ul>

                <h3 style="margin-top:24px;">Pan-India Reach</h3>
                <p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron Accounting serves MGT-7 and MGT-7A filing engagements across India - both in-person and remotely. Trusted by Hyundai, Asian Paints, Bridgestone, and 500+ growing companies including manufacturing, IT/SaaS, consulting, real estate, family holding companies, and startup Pvt Ltd entities. Specialized practice for OPCs and Section 2(85) small companies (MGT-7A) and for MGT-8-threshold companies (paid-up Rs 10 crore+).</p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">MGT-7 vs AOC-4: How the Two Annual Filings Differ</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>MGT-7 / MGT-7A</th><th>AOC-4</th></tr></thead>
                    <tbody>
                        
                        <tr><td>Purpose</td><td>Annual return - structural and governance filing</td><td>Financial statements filing</td></tr>
                        <tr><td>Governing Section</td><td>Section 92 of Companies Act 2013</td><td>Section 137 of Companies Act 2013</td></tr>
                        <tr><td>Governing Rule</td><td>Rule 11, Companies (Management and Administration) Rules 2014</td><td>Rule 12, Companies (Accounts) Rules 2014</td></tr>
                        <tr><td>What it contains</td><td>Shareholding pattern, director details, KMP, charges, meetings, governance disclosures</td><td>Balance sheet, P&amp;L, auditor report, board report, AOC-1, AOC-2, CFS where applicable</td></tr>
                        <tr><td>Due date</td><td><strong>60 days from AGM</strong> (typically end November)</td><td><strong>30 days from AGM</strong> (typically end October)</td></tr>
                        <tr><td>Filing sequence</td><td>Filed SECOND - references AOC-4 SRN</td><td>Filed FIRST - provides SRN for MGT-7</td></tr>
                        <tr><td>Who signs (company)</td><td>Director + CS (or CS in practice). MGT-7A: Director with DIN only.</td><td>Director / CEO / CFO / Manager</td></tr>
                        <tr><td>Practising professional certification</td><td>Required for MGT-7. NOT required for MGT-7A.</td><td>Required - CA / CS / CMA in practice. Exempt for small companies and OPCs.</td></tr>
                        <tr><td>Additional certification at threshold</td><td>MGT-8 by CS in practice if listed, Rs 10 cr+ capital, or Rs 50 cr+ turnover</td><td>CSR-2 addendum if Section 135 applies</td></tr>
                        <tr><td>Daily late fee</td><td>Rs 100 per day per form, no cap on daily fee</td><td>Rs 100 per day per form, no cap on daily fee</td></tr>
                        <tr><td>Substituted post-2020 penalty (decriminalized)</td><td><strong>Section 92(5) post-2020:</strong> Company cap Rs 2L / Officer cap Rs 50k at Rs 100/day</td><td><strong>Section 137(3) post-2020:</strong> Company cap Rs 2L / Officer cap Rs 50k at Rs 100/day</td></tr>
                        <tr><td>Patron standalone fee</td><td>Rs 6,000 (MGT-7A) to Rs 12,000 (MGT-7 with MGT-8)</td><td>Rs 8,000 (Standard) to Rs 15,000 (CFS)</td></tr>


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
                
                
                <p>MGT-7 is one of seven annual filings. If you are filing MGT-7, you almost certainly need AOC-4 (filed first), ADT-1, DIR-3 KYC, DPT-3, MSME-1, and ITR-6 too.</p>
                <ul>
                    <li><a href="/aoc-4-filing-services"><strong>AOC-4 Filing Services</strong></a> - filed FIRST in the annual cycle, provides SRN referenced in MGT-7. Section 137 of Companies Act 2013.</li>
                    <li><a href="/private-limited-company-annual-compliance"><strong>Pvt Ltd Annual Compliance Bundle (Rs 35,000)</strong></a> - the full bundle covering MGT-7 / MGT-7A, AOC-4, ADT-1, DIR-3 KYC, DPT-3, MSME-1, audit, and ITR-6 at fixed fee. <strong>Recommended path</strong> if buying multiple filings.</li>
                    <li><a href="/small-company-annual-compliance"><strong>Small Company Annual Compliance</strong></a> - specialised package for Section 2(85) small companies (files MGT-7A).</li>
                    <li><a href="/private-limited-company-compliance"><strong>Pvt Ltd Compliance (Broader Hub)</strong></a> - including event-based filings (MGT-14, DIR-12, PAS-3, SH-7, CHG-1 / CHG-4).</li>
                    <li><a href="/adt-1-filing-services"><strong>ADT-1 Filing</strong></a> - mandatory auditor appointment notification per Companies (Audit and Auditors) Amendment Rules 2025 (G.S.R. 359(E)).</li>
                    <li><a href="/director-kyc"><strong>DIR-3 KYC for Directors</strong></a> - triennial filing per G.S.R. 943(E) regime.</li>
                    <li><a href="/roc-notice"><strong>ROC Notice Response</strong></a> - handling MCA notices, resubmission of rejected MGT-7, response to Section 92(5) adjudication.</li>
                </ul>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: Acts, Sections, Rules, and Notifications</h2>
            <div class="content-text">
                
                
                <h3>Governing Legislation</h3>
                <ul>
                    <li><strong>Companies Act, 2013</strong> - master statute. Section 92 (annual return obligation), Section 92(2) (MGT-8 certification at threshold), Section 92(5) post-Companies (Amendment) Act 2020 (substituted penalty), Section 92(6) post-2020 (substituted CS penalty), Section 96 (AGM requirement), Section 137 (financial statements - AOC-4), Section 139(2) (auditor rotation), Section 164(2) (director disqualification), Section 248 (strike-off).</li>
                    <li><strong>Companies (Amendment) Act, 2020</strong> - <strong>Notification S.O. 4646(E) dated 21 December 2020.</strong> Section 20 substituted Section 92(5) and Section 92(6) penalty structures. Decriminalized framework parallel to Section 137(3) for AOC-4 and Section 117(2) for MGT-14.</li>
                    <li><strong>Companies (Management and Administration) Rules, 2014</strong> - Rule 11 governs MGT-7 / MGT-7A procedure and timeline; Rule 11(1) defines MGT-7A applicability for small companies and OPCs (inserted by 2021 Amendment for FY 2020-21 onwards); Rule 11(2) defines MGT-8 certification threshold.</li>
                    <li><strong>Companies (Accounts) Rules, 2014</strong> - Rule 12 governs AOC-4 procedure (filed first - provides SRN for MGT-7).</li>
                    <li><strong>Companies (Registration Offices and Fees) Rules, 2014</strong> - government filing fees and additional fee slabs. Rs 100/day late filing additional fee effective 1 July 2018.</li>
                    <li><strong>G.S.R. 880(E) dated 1 December 2025</strong> - latest Small Company threshold revision under Section 2(85). Paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore. Governs MGT-7 vs MGT-7A variant selection.</li>
                    <li><strong>General Circular 01/2026 dated 24 February 2026 (CCFS-2026)</strong> - Companies Compliance Facilitation Scheme 2026. Window 15 April to 15 July 2026. 90% additional-fee waiver on Pvt Ltd MGT-7 / MGT-7A backlog. (LLP Form 11 NOT covered.)</li>
                </ul>

                <h3 style="margin-top:24px;">Key Sections</h3>
                <ul>
                    <li><strong>Section 92</strong> - obligation to file annual return within 60 days of AGM</li>
                    <li><strong>Section 92(1)</strong> - 8 mandatory information categories: registered office, principal activity, holding/subsidiary/associate, shareholders, promoters/directors/KMP, meetings, remuneration, penalties</li>
                    <li><strong>Section 92(2)</strong> - MGT-8 certification by CS-in-practice mandatory for listed / Rs 10 crore+ paid-up / Rs 50 crore+ turnover</li>
                    <li><strong>Section 92(5) POST-2020</strong> - substituted penalty: company Rs 10,000 + Rs 100/day capped at Rs 2,00,000; officer in default Rs 10,000 + Rs 100/day capped at Rs 50,000</li>
                    <li><strong>Section 92(6) POST-2020</strong> - substituted CS penalty: flat Rs 2,00,000 for false MGT-8 certification</li>
                    <li><strong>Section 96</strong> - AGM requirement within 6 months of FY end (9 months for first AGM)</li>
                    <li><strong>Section 137</strong> - AOC-4 financial statements filing within 30 days of AGM (filed before MGT-7)</li>
                    <li><strong>Section 164(2)</strong> - director disqualification for 5 years on 3 consecutive years of non-filing of MGT-7 or AOC-4; DIN deactivation</li>
                    <li><strong>Section 248</strong> - strike-off by Registrar where annual filings pending for 2 or more financial years</li>
                    <li><strong>Section 447 / 448</strong> - liability for fraud or false statement in MGT-7 (imprisonment 6 months to 10 years for fraud)</li>
                </ul>

                <h3 style="margin-top:24px;">Penalty Schedule (Post-Companies (Amendment) Act 2020)</h3>
                <ul>
                    <li><strong>Additional fee for late filing</strong> (Section 403): Rs 100 per day per form, no upper cap on daily fee. Effective 1 July 2018.</li>
                    <li><strong>Section 92(5) Post-2020 Substituted Penalty:</strong> Company Rs 10,000 + Rs 100/day, capped at <strong>Rs 2,00,000</strong>. Each officer in default Rs 10,000 + Rs 100/day, capped at <strong>Rs 50,000</strong>. Substituted via Section 20 of Companies (Amendment) Act 2020 (S.O. 4646(E) dated 21.12.2020).</li>
                    <li><strong>Section 92(6) Post-2020 CS Penalty:</strong> Flat <strong>Rs 2,00,000</strong> on Company Secretary in practice for false MGT-8 certification. Replaced pre-2020 fine Rs 50k-Rs 5 lakh + ICSI disciplinary action.</li>
                    <li><strong>Section 164(2) Director Disqualification:</strong> 5-year disqualification + DIN deactivation after 3 consecutive years of non-filing. Cross-portfolio impact - disqualified directors lose Board seats across all companies.</li>
                    <li><strong>Section 248 Strike-off:</strong> ROC may initiate strike-off where annual filings pending for 2 or more financial years.</li>
                    <li><strong>Section 447 / 448:</strong> Liability for fraud or false statement - imprisonment 6 months to 10 years for fraud.</li>
                    <li><strong>CCFS-2026:</strong> Available for Pvt Ltd / Public Ltd / OPC / Section 8 backlog. 90% additional-fee waiver. Window 15 April to 15 July 2026. Removes Rs 100/day exposure but adjudicated penalties under Section 92(5) (post-2020 caps) remain payable.</li>
                </ul>

                <h3 style="margin-top:24px;">Government Filing Fee by Nominal Capital Slab</h3>
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Nominal Share Capital</th><th>Filing Fee Per Document</th></tr></thead>
                    <tbody>
                        <tr><td>Less than Rs 1 lakh</td><td>Rs 200</td></tr>
                        <tr><td>Rs 1 lakh to Rs 4,99,999</td><td>Rs 300</td></tr>
                        <tr><td>Rs 5 lakh to Rs 24,99,999</td><td>Rs 400</td></tr>
                        <tr><td>Rs 25 lakh to Rs 99,99,999</td><td>Rs 500</td></tr>
                        <tr><td>Rs 1 crore or more</td><td>Rs 600</td></tr>
                        <tr><td>Company without share capital (Section 8)</td><td>Rs 200</td></tr>
                    </tbody>
                </table>
                </div>

                <p style="margin-top:16px;">Refer to the <a href="https://www.mca.gov.in" target="_blank" rel="noopener">Ministry of Corporate Affairs (MCA) V3 portal</a> for MGT-7 / MGT-7A filing, the <a href="https://www.mca.gov.in/content/mca/global/en/notifications.html" target="_blank" rel="noopener">MCA notifications page</a> for S.O. 4646(E) dated 21 December 2020 (Companies Amendment Act 2020 commencement), G.S.R. 880(E) dated 1 December 2025 (Small Company threshold revision), and General Circular 01/2026 (CCFS-2026), and the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> on India Code for full statutory text of Section 92.</p>


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
                    <p class="faq-expanded__lead">Real buyer questions on the MGT-7 vs MGT-7A distinction, 60-day-from-AGM deadline, Section 2(85) Small Company test (post G.S.R. 880(E) Rs 10 cr + Rs 100 cr thresholds), MGT-8 certification threshold under Section 92(2) + Rule 11(2), AOC-4-before-MGT-7 sequencing, Section 92(5) post-Companies (Amendment) Act 2020 substituted penalty caps (Rs 2L company / Rs 50k officer), Section 164(2) disqualification risk, and Patron's standalone Rs 6k-12k vs Rs 35k bundle pricing.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is Form MGT-7 and who must file it?</h3>
                        <div class="faq-expanded__a"><p>Form MGT-7 is the annual return filed with the Registrar of Companies under Section 92 of the Companies Act, 2013 read with Rule 11 of Companies (Management and Administration) Rules, 2014. It captures the company's structural and governance position as on 31 March - shareholding pattern, directors, KMP, charges, meetings, and remuneration. Every company registered under the Companies Act 2013 (Pvt Ltd, Public Ltd, OPC, Section 8) files an annual return every FY regardless of activity or turnover. Small companies under Section 2(85) and OPCs file the abridged MGT-7A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between MGT-7 and MGT-7A?</h3>
                        <div class="faq-expanded__a"><p>MGT-7 is the full annual return filed by all regular private and public companies. MGT-7A is an abridged version with reduced disclosure (especially on shareholding pattern and indebtedness), available only to small companies under Section 2(85) (paid-up capital up to Rs 10 crore AND turnover up to Rs 100 crore per G.S.R. 880(E) dated 1 December 2025) and One Person Companies. MGT-7A is also self-certified by a director with DIN - no CS signature and no practising professional certification required. MGT-7 requires both CS signing and separate CA/CS/CMA practising professional certification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the due date for MGT-7 filing?</h3>
                        <div class="faq-expanded__a"><p>MGT-7 or MGT-7A must be filed within 60 days from the date of the Annual General Meeting under Rule 11 of Companies (Management and Administration) Rules, 2014. For regular companies with AGM by 30 September, MGT-7 / MGT-7A is typically due by 29 November. For One Person Companies which do not hold AGM under Section 96, MGT-7A is due within 60 days of completion of 180 days from the financial year end - approximately 28 November for FY ending 31 March.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Who can sign Form MGT-7?</h3>
                        <div class="faq-expanded__a"><p>Form MGT-7 must be signed by a Director with valid DIN PLUS the Company Secretary (if appointed) or a Company Secretary in practice (if no CS is appointed). Additionally, MGT-7 must be certified by a practising CA, CS, or CMA - a separate practising professional certification embedded in the form. For MGT-7A (small companies and OPCs), only a director with valid DIN needs to sign - no CS signature and no practising professional certification are required. This director-only signing for MGT-7A is the single biggest signing simplification for small companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">When is MGT-8 certification required for MGT-7?</h3>
                        <div class="faq-expanded__a"><p>Under Section 92(2) of the Companies Act, 2013 read with Rule 11(2) of Companies (Management and Administration) Rules, 2014, MGT-8 certification by a Company Secretary in practice is required for: (a) listed companies; (b) companies with paid-up share capital of Rs 10 crore or more; and (c) companies with turnover of Rs 50 crore or more. Any ONE of these three triggers requires MGT-8. The CS in practice certifies that the annual return discloses facts correctly and the company has complied with the Companies Act, 2013. UDIN tagging is mandatory. Small companies and OPCs (filing MGT-7A) are exempt from MGT-8.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for late filing of MGT-7?</h3>
                        <div class="faq-expanded__a"><p>Late filing of MGT-7 / MGT-7A attracts two layered penalties post-Companies (Amendment) Act 2020. FIRST, an additional fee of Rs 100 per day per form with no upper cap on the daily fee under Section 403, effective 1 July 2018. SECOND, the substituted Section 92(5) penalty: company Rs 10,000 initial + Rs 100/day continuing, capped at Rs 2,00,000; each officer in default Rs 10,000 + Rs 100/day, capped at Rs 50,000. Substituted by Section 20 of Companies (Amendment) Act 2020 via Notification S.O. 4646(E) dated 21 December 2020 - replacing the earlier Rs 50,000 to Rs 5 lakh fine structure. Three consecutive years of non-filing additionally triggers Section 164(2) director disqualification for 5 years plus DIN deactivation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What attachments are needed for MGT-7?</h3>
                        <div class="faq-expanded__a"><p>Mandatory MGT-7 attachments include: list of shareholders and debenture holders (in the MCA prescribed Excel template with strict column ordering), list of directors and KMP, register of board / committee / general meetings with attendance, register of charges with CHG-1 / CHG-4 cross-references, register of related-party contracts under Section 188 with AOC-2 cross-reference, remuneration details for directors and KMP, AGM extension approval letter (if applicable under Section 96(1) proviso), MGT-8 certificate (for listed / Rs 10 cr+ / Rs 50 cr+ companies), and photograph of the registered office with name signage. MGT-7A requires the same data set but with reduced disclosure on shareholding pattern and indebtedness.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can MGT-7 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>Yes. MGT-7 can be revised by filing a new annual return with updated information through the MCA V3 portal. The revision should be supported by a board resolution explaining the reasons for the revision. Government filing fees apply again on the revised filing. Material revisions reflecting fraud or misstatement may attract Section 447 / 448 consequences (imprisonment 6 months to 10 years for fraud) and Section 92(5) adjudication exposure for the company and officers. Patron recommends revising promptly on discovery to avoid downstream complications with bankers, investors, due-diligence reviewers, or regulators.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                
                <p><strong>What is MGT-7?</strong> Annual return filing under Section 92 of the Companies Act, 2013, capturing shareholding, directors, KMP, meetings, charges, and governance disclosures.</p>
                <p><strong>MGT-7 vs MGT-7A - which applies?</strong> Small companies (Section 2(85) - paid-up Rs 10 cr + turnover Rs 100 cr per G.S.R. 880(E)) and OPCs file MGT-7A. All others file MGT-7. Re-tested every FY.</p>
                <p><strong>When is MGT-7 due?</strong> Within 60 days of AGM - typically 29 November for FY ending 31 March. OPC: 60 days from 180 days after FY end.</p>
                <p><strong>Filing sequence?</strong> AOC-4 first (within 30 days of AGM, end October) → MGT-7 second (within 60 days of AGM, end November). MCA V3 portal enforces this order.</p>
                <p><strong>Who signs MGT-7?</strong> MGT-7: Director + CS (or CS in practice) + practising professional certification (CA / CS / CMA). MGT-7A: Director with DIN only.</p>
                <p><strong>When is MGT-8 required?</strong> Listed companies OR Rs 10 crore+ paid-up capital OR Rs 50 crore+ turnover - certified by CS in practice with UDIN under Section 92(2) + Rule 11(2).</p>
                <p><strong>What does Patron charge?</strong> Standalone Rs 6,000 (MGT-7A) to Rs 12,000 (MGT-7 with MGT-8). Rs 35,000 in full annual compliance bundle (covers 7 forms + audit + ITR-6).</p>
                <p><strong>Penalty for late filing (post-2020)?</strong> Rs 100/day per form additional fee (no cap on daily fee) PLUS Section 92(5) substituted penalty: Company cap Rs 2,00,000 / Officer cap Rs 50,000 at Rs 100/day. Substituted via S.O. 4646(E) dated 21 December 2020.</p>
                <p><strong>Section 164(2) disqualification?</strong> 3 consecutive years of non-filing = 5-year director disqualification + DIN deactivation across all companies.</p>
                <p><strong>CCFS-2026 amnesty?</strong> AVAILABLE for Pvt Ltd MGT-7 / MGT-7A backlog. Window 15 April to 15 July 2026. 90% additional-fee waiver. (LLP Form 11 NOT covered.)</p>
                <p><strong>MGT-7 form kaise file kare?</strong> <em>MGT-7 hai company ka annual return - Section 92 ke under. AGM ke 60 din ke andar file karna padta hai (typically 29 November tak FY 2025-26 ke liye). Chhoti company (Section 2(85)) aur OPC MGT-7A bharti hain - jo abridged version hai. MGT-7 ke liye CS in practice ki signature chahiye, MGT-7A ke liye sirf director ki DIN signature kafi hai. Late fee Rs 100 per day - bina daily cap, post-2020 Section 92(5) ke under company cap Rs 2 lakh, officer cap Rs 50,000. Patron Rs 6,000 (MGT-7A) se Rs 12,000 (MGT-7 with MGT-8) mein file karta hai.</em></p>
                <p><strong>MGT-7 ya MGT-7A - kaunsa form chahiye?</strong> <em>MGT-7A sirf chhoti company (paid-up capital Rs 10 crore tak AUR turnover Rs 100 crore tak per G.S.R. 880(E)) aur OPC ke liye hai. Baki sab regular companies MGT-7 bhartin hain. Section 2(85) ka test har saal naya hota hai - pichhle saal chhoti company thi to is saal bhi chhoti rahegi yeh nahi maan sakte. Patron har saal classification check karta hai taki sahi variant file ho.</em></p>


            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Urgency: 29 November 2026 for FY 2025-26</h2>
            <div class="content-text">
                
                
                <p>For the financial year ending 31 March 2026, MGT-7 / MGT-7A is due <strong>within 60 days of the AGM</strong>. With AGM deadline of 30 September 2026, MGT-7 / MGT-7A typically falls due by <strong>29 November 2026</strong>. OPCs face a slightly different cycle - 60 days from 180 days after FY end (approximately 28 November 2026).</p>

                <p style="margin-top:16px;">Missing the deadline triggers:</p>
                <ul>
                    <li><strong>Rs 100 per day additional fee</strong> under Section 403 with no cap on the daily clock</li>
                    <li><strong>Section 92(5) post-Companies (Amendment) Act 2020 substituted penalty:</strong> Rs 10,000 initial + Rs 100/day continuing, capped at <strong>Rs 2,00,000 for the company</strong> and <strong>Rs 50,000 for each officer in default</strong></li>
                    <li><strong>Section 92(6) post-2020 CS penalty:</strong> flat <strong>Rs 2,00,000</strong> on CS-in-practice for false MGT-8 certification</li>
                    <li><strong>Section 164(2) Director Disqualification:</strong> 5-year disqualification + DIN deactivation after 3 consecutive years of non-filing</li>
                </ul>

                <p style="margin-top:16px;"><strong>Critical sequencing:</strong> File AOC-4 first (within 30 days of AGM, end October) - the AOC-4 SRN is referenced in MGT-7. Then MGT-7 within 60 days of AGM (end November). Reverse sequencing causes portal rejection.</p>

                <p style="margin-top:16px;"><strong>CCFS-2026 amnesty window 15 April to 15 July 2026</strong> - 90% additional-fee waiver available for past Pvt Ltd MGT-7 / MGT-7A backlog. This is the optimal time to clean up multi-year defaults before they trigger Section 164(2) disqualification.</p>

                <p style="margin-top:16px;"><strong>Get a Free Quote in 2 Hours -</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20MGT-7%20or%20MGT-7A%20filing%20-%20please%20quote%20from%20Rs%206%2C000." target="_blank">WhatsApp us</a>. Free 15-minute scoping call. We respond within 2 hours.</p>


            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Conclusion: MGT-7 Is the Structural Twin of AOC-4</h2>
            <div class="content-text" style="text-align:left;">
                
                
                <p style="color:rgba(255,255,255,0.9);">Form MGT-7 (or MGT-7A for small companies under Section 2(85) and OPCs) is the annual return filing under Section 92 of the Companies Act, 2013 - mandatory for every company every year, with a 60-day-from-AGM deadline. It is the structural twin of AOC-4 (financial statements under Section 137), and must be filed AFTER AOC-4 because the MGT-7 form references the AOC-4 SRN.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">Post-Companies (Amendment) Act 2020 framework (substituted via Notification S.O. 4646(E) dated 21 December 2020), Section 92(5) penalty is now Rs 10,000 + Rs 100/day capped at Rs 2,00,000 for the company and Rs 50,000 for each officer in default (replacing the earlier Rs 50,000-Rs 5 lakh fine). Section 92(6) post-2020 CS penalty is a flat Rs 2,00,000 for false MGT-8 certification. Three consecutive years of non-filing triggers Section 164(2) director disqualification for 5 years plus DIN deactivation - cross-portfolio impact.</p>
                <p style="color:rgba(255,255,255,0.9);margin-top:16px;">MGT-8 certification by CS-in-practice is required under Section 92(2) + Rule 11(2) for listed companies, paid-up capital Rs 10 crore+, OR turnover Rs 50 crore+. Section 2(85) small company test (post G.S.R. 880(E) dated 1 December 2025: paid-up Rs 10 crore + turnover Rs 100 crore) is re-tested every FY for MGT-7 vs MGT-7A variant selection. CCFS-2026 amnesty (General Circular 01/2026 dated 24 February 2026, window 15 April-15 July 2026) provides 90% additional-fee waiver on Pvt Ltd backlog (LLP Form 11 NOT covered). Patron files MGT-7 / MGT-7A standalone from Rs 6,000 (MGT-7A) to Rs 12,000 (MGT-7 with MGT-8), or bundles into the full Pvt Ltd Annual Compliance package at Rs 35,000 covering 7 MCA forms plus audit and ITR-6. 1,200+ MGT-7 / MGT-7A returns filed FY 2024-25 with 100 percent on-time rate and sub-1 percent MCA query rate.</p>


            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20quote%20Patron%27s%20MGT-7%20%2F%20MGT-7A%20filing%20from%20Rs%206%2C000." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">MGT-7 / MGT-7A Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting offices in Pune, Mumbai, Delhi, and Gurugram. MGT-7 and MGT-7A annual return filing delivered pan-India for Pvt Ltd, Public Ltd, OPC, Section 8 companies, family holding companies, manufacturing / IT-SaaS / consulting / real estate Pvt Ltd entities, and listed companies requiring MGT-8 certification.</p>
  
            <div class="pa-city-block">
                <div class="pa-block-title">City-Wise MGT-7 Filing Services</div>
                <div class="pa-block-sub">Local CA + CS team for annual return filing</div>
                <div class="pa-city-grid">
                    <a href="/mgt-7-filing-services/pune" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing in Pune</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/mgt-7-filing-services/mumbai" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing in Mumbai</div><div class="pa-card-sub">Maharashtra</div></div>
                    </a>
                    <a href="/mgt-7-filing-services/delhi" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing in Delhi</div><div class="pa-card-sub">NCT Delhi</div></div>
                    </a>
                    <a href="/mgt-7-filing-services/gurugram" class="pa-city-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg></div>
                        <div><div class="pa-card-title">MGT-7 Filing in Gurugram</div><div class="pa-card-sub">Haryana</div></div>
                    </a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Patron Services</div>
                <div class="pa-block-sub">Adjacent annual filings (sequence partner + bundle)</div>
                <div class="pa-cross-grid">
                    <a href="/aoc-4-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">AOC-4 Filing (Filed First)</div><div class="pa-card-sub">SRN Pre-requisite</div></div>
                    </a>
                    <a href="/private-limited-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Pvt Ltd Annual Bundle</div><div class="pa-card-sub">Rs 35,000 (Saves 30%+)</div></div>
                    </a>
                    <a href="/small-company-annual-compliance" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">Small Co Compliance</div><div class="pa-card-sub">MGT-7A Specific</div></div>
                    </a>
                    <a href="/adt-1-filing-services" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">ADT-1 Filing</div><div class="pa-card-sub">Auditor Appointment</div></div>
                    </a>
                    <a href="/director-kyc" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">DIR-3 KYC</div><div class="pa-card-sub">Director KYC</div></div>
                    </a>
                    <a href="/roc-notice" class="pa-cross-card">
                        <div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">Section 92(5) defense</div></div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>Content reviewed semi-annually. Next scheduled review: 12 November 2026 (after FY 2025-26 MGT-7 filing cycle peaks October-November). Review triggers include MCA amendment to Section 92 / Section 92(5) / Section 92(6) beyond the Companies (Amendment) Act 2020 (S.O. 4646(E) dated 21 December 2020), Companies (Management and Administration) Rules 2014 Rule 11 / 11(1) / 11(2) revisions, Section 2(85) Small Company threshold revisions beyond G.S.R. 880(E) dated 1 December 2025 (Rs 10 cr paid-up / Rs 100 cr turnover), MGT-8 certification threshold revisions, CCFS-2026 window extensions or successor amnesty schemes beyond General Circular 01/2026 dated 24 February 2026 (15 April-15 July 2026 window), Government filing fee revisions, and any amendment to Section 164(2) director disqualification framework.</p>
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