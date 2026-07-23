@extends('layouts.service-app')
<!-- External Dependencies (loaded by master layout in production) -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&amp;display=swap" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
@section('meta')
<title>ITR for Real Estate Investors India: Section 24, 50C, 54</title>
<meta content="ITR for property investors with rental income and sales. Schedule HP, Section 24(b), Section 50C SDV rule, Section 54 reinvestment. Starts at Rs 5,999." name="description"/>
<link href="/itr-for-real-estate-investors/" rel="canonical"/>
<meta content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" name="robots"/>
<meta content="ITR for Real Estate Investors India: Section 24, 50C, 54 | Patron Accounting" property="og:title"/>
<meta content="ITR for property investors with rental income and sales. Schedule HP, Section 24(b), Section 50C SDV rule, Section 54 reinvestment. Starts at Rs 5,999." property="og:description"/>
<meta content="/itr-for-real-estate-investors/" property="og:url"/>
<meta content="website" property="og:type"/>
<meta content="Patron Accounting" property="og:site_name"/>
<meta content="/images/itr-for-real-estate-investors-og.webp" property="og:image"/>
<meta content="summary_large_image" name="twitter:card"/>
<meta content="ITR for Real Estate Investors India: Section 24, 50C, 54 | Patron Accounting" name="twitter:title"/>
<meta content="ITR for property investors with rental income and sales. Schedule HP, Section 24(b), Section 50C SDV rule, Section 54 reinvestment. Starts at Rs 5,999." name="twitter:description"/>
<meta content="/images/itr-for-real-estate-investors-og.webp" name="twitter:image"/>
@endsection
@section('schema')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "/itr-for-real-estate-investors/#breadcrumb",
                "itemListElement": [
                    {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
                    {"@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "/income-tax-return/"},
                    {"@type": "ListItem", "position": 3, "name": "ITR for Real Estate Investors", "item": "/itr-for-real-estate-investors/"}
                ]
            },
            {
                "@type": "FAQPage",
                "@id": "/itr-for-real-estate-investors/#faq",
                "datePublished": "2026-05-11T08:00:00+05:30",
                "dateModified": "2026-05-11T08:00:00+05:30",
                "mainEntity": [
                    {"@type": "Question", "name": "How is rental income from multiple properties taxed in India?", "acceptedAnswer": {"@type": "Answer", "text": "Rental income from multiple properties is taxed under the Income from House Property head (Sections 22-27 ITA 1961), filed in Schedule HP of ITR-2. Each property is reported separately. Self-occupied properties (max 2 post Finance Act 2019) have NIL Annual Value. Let-out properties take Annual Value as higher of expected rent or actual rent. From Annual Value, deduct municipal taxes paid (Net Annual Value), then 30 percent under Section 24(a) standard deduction, then home loan interest under Section 24(b) - full deduction for let-out, Rs 2 lakh cap for self-occupied old regime."}},
                    {"@type": "Question", "name": "How many properties can be claimed as self-occupied in 2026?", "acceptedAnswer": {"@type": "Answer", "text": "Up to TWO properties under Section 23(2) post Finance Act 2019 amendment. Both have Annual Value = NIL. The aggregate Section 24(b) home loan interest deduction across both self-occupied properties is capped at Rs 2 lakh (old regime only; ZERO under new regime). The third self-occupied-style property onwards is automatically treated as DEEMED LET-OUT and taxed at notional rent. Even if you genuinely live in 3 houses, the third onwards must be classified as deemed let-out."}},
                    {"@type": "Question", "name": "What is the difference between Section 24(b) for self-occupied and let-out?", "acceptedAnswer": {"@type": "Answer", "text": "Self-occupied property: Section 24(b) interest deduction is capped at Rs 2 lakh per FY (aggregate across all SOPs); available only under old regime. Reduced to Rs 30,000 if loan was for repair/renovation/reconstruction OR if construction not completed within 5 years. Let-out property: Section 24(b) FULL interest deduction with no upper cap; available under both old and new regimes. However, under new regime any resulting house property loss cannot be set off against salary or other income heads (intra-head only)."}},
                    {"@type": "Question", "name": "When does Section 50C stamp duty value rule apply on property sale?", "acceptedAnswer": {"@type": "Answer", "text": "Section 50C applies when actual sale consideration is LESS than the Stamp Duty Value (SDV) by MORE than 10 percent (safe harbour from AY 2020-21 per Finance Act 2020). If yes, the SDV is deemed full value of consideration for capital gains computation under Section 48. If SDV is within 110 percent of sale price, actual sale price is accepted. Mitigation: agreement-date SDV available if part payment received via cheque/RTGS/UPI before registration; Section 50C(2) DVO reference available if taxpayer disputes SDV."}},
                    {"@type": "Question", "name": "How is deemed rent computed on a vacant third property?", "acceptedAnswer": {"@type": "Answer", "text": "For third property onwards (when 2 are self-occupied), expected rent under Section 23 is computed as the higher of Municipal Value (assigned by local body for property tax) and Fair Rent (rent that similar property in same locality would fetch). If the property is in a Rent Control Act state (Maharashtra, Delhi, Karnataka, Tamil Nadu etc.), the expected rent cannot exceed the Standard Rent fixed under that Act. From this notional rent, deduct municipal taxes, take 30 percent Section 24(a) standard deduction, then full Section 24(b) interest (if any loan)."}},
                    {"@type": "Question", "name": "What is the Rs 2 lakh house property loss set-off cap?", "acceptedAnswer": {"@type": "Answer", "text": "Section 71(3A) caps house property loss inter-head set-off at Rs 2 lakh per FY against income from other heads (salary, business, capital gains, other sources). Available only under old regime. Excess loss is carried forward under Section 71B for 8 assessment years against future HP income only. Under the new regime (Section 115BAC), inter-head set-off of HP loss is BLOCKED entirely - the loss can only adjust within the HP head or carry forward. This is the single largest tradeoff for high-interest borrowers between old and new regimes."}},
                    {"@type": "Question", "name": "How to claim Section 54, 54F, 54EC reinvestment exemptions?", "acceptedAnswer": {"@type": "Answer", "text": "Section 54 (residential to residential): reinvest LTCG in 1 (or 2 if LTCG up to Rs 2 crore once-in-lifetime) residential house within 1 year before or 2 years after sale (3 years if construction). Section 54F (any LTCG to residential): reinvest entire NET sale consideration in 1 residential house for full exemption (pro-rata for partial). Section 54EC: invest LTCG up to Rs 50 lakh in NHAI/REC/PFC/IRFC bonds within 6 months of sale; 5-year lock-in. If reinvestment not utilized by ITR due date, deposit unutilized amount in Capital Gains Account Scheme (CGAS)."}},
                    {"@type": "Question", "name": "Can I claim home loan interest under the new tax regime?", "acceptedAnswer": {"@type": "Answer", "text": "Partially. For SELF-OCCUPIED property: NO - Section 115BAC explicitly disallows Section 24(b) interest deduction. For LET-OUT or DEEMED LET-OUT property: YES - full interest deduction allowed; however, any net loss from house property cannot be set off against other heads under new regime. The interest deduction on let-out property is restricted to extinguishing the rental income from that property (intra-head). Excess loss can only carry forward under Section 71B against future HP income."}}
                ]
            },
            {
                "@type": "Service",
                "@id": "/itr-for-real-estate-investors/#service",
                "name": "ITR for Real Estate Investors",
                "url": "/itr-for-real-estate-investors/",
                "description": "End-to-end CA-assisted Income Tax Return filing for individual real estate investors with multi-property portfolios under the Income Tax Act 1961 for AY 2026-27. Covers Schedule HP filing across self-occupied (max 2 under Section 23(2) post Finance Act 2019), let-out under Section 23(1) and deemed let-out (third property onwards at notional rent) classifications. Section 24(a) 30 percent standard deduction on Net Annual Value (Gross Annual Value minus municipal taxes paid by owner). Section 24(b) home loan interest deduction at Rs 2 lakh aggregate cap for self-occupied (old regime only) or unlimited for let-out (both regimes); pre-construction interest in 5 equal installments; Rs 30,000 reduced cap if construction not completed within 5 years. Section 26 co-ownership share-wise computation; Section 27 deemed ownership with Section 64 clubbing. Capital gains side: Section 48 computation with resident-individual choice between 12.5 percent without indexation or 20 percent with indexation for pre-23 July 2024 property under Finance (No. 2) Act 2024; Section 50C stamp duty value rule with 10 percent safe harbour post Finance Act 2020; agreement-date SDV via Section 50C(2) and Departmental Valuation Officer reference; Section 54 (residential to residential, 1 or 2 houses if LTCG up to Rs 2 crore once-in-lifetime), Section 54F (any LTCG to residential with NET consideration rule), Section 54EC (Rs 50 lakh NHAI/REC/PFC/IRFC bonds within 6 months, 5-year lock-in) reinvestment exemptions; Capital Gains Account Scheme (CGAS) deposit for unutilized reinvestment. Section 71(3A) Rs 2 lakh HP loss inter-head set-off cap (old regime only); new regime under Section 115BAC blocks inter-head set-off entirely; Section 71B 8-year HP loss carry-forward (unique exception - available even with late filing). Section 194-I, 194-IA and 194-IB rental and purchase TDS reconciliation against Form 26AS and AIS.",
                "serviceType": "Real Estate Investor Income Tax Return Filing",
                "areaServed": {"@type": "Country", "name": "India", "sameAs": "https://en.wikipedia.org/wiki/India"},
                "provider": {"@id": "/#organization"},
                "about": [
                    {"@type": "Thing", "name": "Real estate in India", "sameAs": "https://en.wikipedia.org/wiki/Real_estate_in_India"},
                    {"@type": "Thing", "name": "Income tax in India", "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"},
                    {"@type": "Thing", "name": "Capital gains tax in India", "sameAs": "https://en.wikipedia.org/wiki/Capital_gains_tax_in_India"},
                    {"@type": "Thing", "name": "Renting", "sameAs": "https://en.wikipedia.org/wiki/Renting"}
                ],
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Real Estate Investor ITR Filing Tiers (AY 2026-27)",
                    "itemListElement": [
                        {"@type": "Offer", "name": "Section 139(9) Defective Return Cure (HP loss in ITR-1)", "priceCurrency": "INR", "price": "3999", "description": "Re-file as ITR-2 within 15-day cure window; common defective trigger for multi-property investors who filed ITR-1"},
                        {"@type": "Offer", "name": "Two-Property ITR-2 (1 self-occupied plus 1 let-out)", "priceCurrency": "INR", "price": "5999", "description": "Schedule HP both properties, Section 24(a) 30 percent standard deduction, Section 24(b) interest claim, Form 26AS rental TDS reconciliation under Section 194-I and 194-IB"},
                        {"@type": "Offer", "name": "Three to Four Property Portfolio with Deemed Let-Out", "priceCurrency": "INR", "price": "7499", "description": "Section 23(2) optimal SOP election (max 2 self-occupied); deemed rent computation for third onwards; full Section 24 deductions"},
                        {"@type": "Offer", "name": "Joint Owner / Co-Owner ITR (per spouse)", "priceCurrency": "INR", "price": "8999", "description": "Section 26 share-wise computation; joint loan interest split; both regimes comparison; separate filings for each co-owner"},
                        {"@type": "Offer", "name": "Multi-Property ITR-2 with Sale plus Section 54 / 54F", "priceCurrency": "INR", "price": "9999", "description": "Section 48 indexation choice (12.5 percent without or 20 percent with for pre-23-Jul-2024 property); Section 50C reconciliation; reinvestment exemption claim; CGAS instructions"},
                        {"@type": "Offer", "name": "Returning NRI with Indian Property Portfolio", "priceCurrency": "INR", "price": "9999", "description": "Section 6 residency memo; Section 195 sale TDS coordination with buyer (Form 27Q); NRO/NRE/RFC routing; Section 197 Form 13 Lower TDS"},
                        {"@type": "Offer", "name": "Section 50C Valuation Officer Reference plus Appeal", "priceCurrency": "INR", "price": "12999", "description": "Section 50C(2) Departmental Valuation Officer reference; supporting market evidence preparation; AO and CIT(A) representation"},
                        {"@type": "Offer", "name": "HNI 5-plus Property Portfolio with Multiple Sales", "priceCurrency": "INR", "price": "14999", "description": "Full portfolio review; multi-sale capital gains aggregation; Section 54EC plus 54F plus 54 stacking; surcharge cap analysis"}
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

        /* --- toc-pill (alias of toc-btn for legacy HTML markup) --- */
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

        /* ============================================================
           PHASE 2 PATCH — cluster-wide fixes (applied to every page)
           ============================================================ */

        /* --- toc-link alias (insurance for any HTML still using legacy class) --- */
        .toc-link {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 10px 18px; font-family: 'Barlow', sans-serif; font-size: 13px; font-weight: 600;
            color: var(--text-secondary); background: var(--white);
            border: 1.5px solid var(--gray-200); border-radius: 50px;
            cursor: pointer; transition: all 0.25s ease; white-space: nowrap; text-decoration: none;
        }
        .toc-link:hover { border-color: var(--orange); color: var(--orange); background: var(--orange-lighter); }
        .toc-link.active { background: var(--orange); border-color: var(--orange); color: var(--white); }

        /* --- Dark CTA section: white-on-dark text scoping (was only on hub before) --- */
        .content-section[style*="var(--blue)"] .content-text,
        .content-section[style*="--blue"] .content-text { color: rgba(255,255,255,0.92); }
        .content-section[style*="var(--blue)"] .content-text p,
        .content-section[style*="--blue"] .content-text p { color: rgba(255,255,255,0.92); }
        .content-section[style*="var(--blue)"] .content-text strong,
        .content-section[style*="--blue"] .content-text strong { color: #FFFFFF; font-weight: 700; }
        .content-section[style*="var(--blue)"] .content-text a,
        .content-section[style*="--blue"] .content-text a { color: #FFB682; }
        .content-section[style*="var(--blue)"] .content-text a:hover,
        .content-section[style*="--blue"] .content-text a:hover { color: #FFFFFF; }
        .content-section[style*="var(--blue)"] .section-title,
        .content-section[style*="--blue"] .section-title { color: #FFFFFF; }

        /* --- pa-cross-card text/icon overrides (was only on hub before) --- */
        .pa-cross-card { color: var(--text-primary); }
        .pa-cross-card .pa-cross-icon {
            width: 36px; height: 36px; background: var(--orange-light);
            color: var(--orange);
            border-radius: var(--radius-sm); display: flex; align-items: center;
            justify-content: center; flex-shrink: 0;
        }
        .pa-cross-card .pa-cross-icon svg { width: 18px; height: 18px; }
        .pa-cross-card .pa-cross-text { display: flex; flex-direction: column; line-height: 1.35; }
        .pa-cross-card .pa-cross-text strong {
            font-size: 14px; font-weight: 700; color: var(--blue); margin-bottom: 2px;
        }
        .pa-cross-card .pa-cross-text span {
            font-size: 12px; color: var(--text-muted); font-weight: 400;
        }
        .pa-cross-card:hover .pa-cross-text strong { color: var(--orange); }
        .pa-cross-title {
            font-size: 18px; font-weight: 700; color: var(--blue);
            margin-bottom: 12px; margin-top: 0;
        }

        /* --- Related Services grid + cards (used on sub-pages) --- */
        .related-services-grid {
            display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;
            margin-top: 8px;
        }
        @media (max-width: 768px) { .related-services-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 480px) { .related-services-grid { grid-template-columns: 1fr; } }
        .related-service-card {
            display: block; padding: 20px 22px;
            background: var(--white);
            border: 1.5px solid var(--gray-200);
            border-radius: var(--radius-md);
            text-decoration: none;
            transition: all 0.25s ease;
            color: var(--text-secondary);
        }
        .related-service-card:hover {
            border-color: var(--orange);
            box-shadow: 0 6px 20px rgba(232,113,44,0.12);
            transform: translateY(-2px);
        }
        .related-service-card h4 {
            font-size: 16px; font-weight: 700; color: var(--blue);
            margin: 0 0 8px 0; line-height: 1.3;
        }
        .related-service-card p {
            font-size: 13px; color: var(--text-muted);
            margin: 0; line-height: 1.5;
        }
        .related-service-card:hover h4 { color: var(--orange); }

        /* --- Challenges section: visual hierarchy for h3 (question) + p (solution) --- */
        .content-text h3 {
            font-size: 18px; font-weight: 700; color: var(--blue);
            margin: 28px 0 12px 0; line-height: 1.4;
            padding-left: 16px; border-left: 4px solid var(--orange);
        }
        .content-text h3:first-child { margin-top: 0; }
        .content-text h4 {
            font-size: 15px; font-weight: 700; color: var(--blue);
            margin: 20px 0 10px 0; line-height: 1.4;
        }
        .content-text h4:first-child { margin-top: 0; }

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
<!-- BREADCRUMB -->
<div aria-label="Breadcrumb" role="navigation" style="background:var(--gray-50);border-bottom:1px solid var(--gray-200);padding:10px 16px;">
<div style="max-width:1320px;margin:0 auto;">
<ol style="display:flex;align-items:center;gap:8px;list-style:none;padding:0;margin:0;font-size:13px;font-family:'Barlow',sans-serif;">
<li style="display:flex;align-items:center;gap:8px;">
<a href="/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">
<svg fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;vertical-align:middle;margin-right:2px;" viewbox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    Home
                </a>
<svg fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);" viewbox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
</li>
<li style="display:flex;align-items:center;gap:8px;">
<a href="/income-tax-return/" style="color:var(--text-muted);text-decoration:none;font-weight:500;">Income Tax Return Filing</a>
<svg fill="none" stroke="currentColor" stroke-width="2.5" style="width:12px;height:12px;color:var(--gray-400);" viewbox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
</li>
<li><span style="color:var(--orange);font-weight:600;">ITR for Real Estate Investors</span></li>
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
<svg fill="currentColor" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trusted by 10,000+ Businesses
                    </div>
<h1 class="display-5 fw-bold text-dark mb-4 private-registration-heading">
                        Multi-Property ITR Filing for Real Estate Investors
                    </h1>
<div class="expert-attribution-box">
<span class="eab-check"><svg fill="currentColor" height="16" viewbox="0 0 24 24" width="16"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
<span class="eab-title">Reviewed by CA &amp; CS Team · Patron Accounting LLP</span>
<span class="eab-meta">
<span>ICAI &amp; ICSI Registered</span><span class="eab-sep">|</span>
<span>15+ Years Experience</span><span class="eab-sep">|</span>
<span>Last Updated: <span id="lastUpdated">11 May 2026</span></span>
</span>
<a class="eab-link" href="/authorhub/ca-sundaram-gupta">Verify Credentials →</a>
</div>
<div class="mb-4">
<div class="d-flex align-items-start mb-3">
<span class="check-icon me-2"><svg fill="none" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg></span>
<p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Rent agreements, Form 26AS for Section 194-I/194-IB TDS, Form 16A from tenants, municipal tax receipts, home loan interest certificates, sale and purchase deeds with SDV</p>
</div>
<div class="d-flex align-items-start mb-3">
<span class="check-icon me-2"><svg fill="none" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg></span>
<p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 5,999 for 2-property portfolio; Rs 9,999 with property sale and Section 54 reinvestment; Rs 14,999 for HNI 5+ property portfolio</p>
</div>
<div class="d-flex align-items-start mb-3">
<span class="check-icon me-2"><svg fill="none" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg></span>
<p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Individuals with 2+ residential or commercial properties; second-home owners; recurring rental income; flippers; NRI investors with Indian properties</p>
</div>
<div class="d-flex align-items-start mb-3">
<span class="check-icon me-2"><svg fill="none" stroke="currentColor" stroke-width="3" viewbox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg></span>
<p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7 to 14 working days; due 31 July 2026; Section 54EC bond investment within 6 months of sale; CGAS deposit by 31 July</p>
</div>
</div>
<p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,800+ Real Estate Investors Served | 4.9 Google Rating | 15+ Years | Pune Mumbai Delhi NCR Bengaluru Chennai Hyderabad</p>
<div class="hero-cta">
<a class="btn-video text-decoration-none" href="tel:+919459456700">
<span class="play-circle"><svg fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff" viewbox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></span>
                            Call +91 945 945 6700
                        </a>
<a class="btn-sample text-decoration-none" href="mailto:info@patronaccounting.com">
<svg fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;" viewbox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,12 2,6"></polyline></svg>
                            Email Us
                        </a>
<a class="btn-sample text-decoration-none" href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20multi-property%20ITR%20filing%20AY%202026-27." target="_blank">
<svg fill="currentColor" style="width:18px;height:18px;color:#25D366" viewbox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path></svg>
                            WhatsApp Us
                        </a>
</div>
<div class="trust-section">
<div class="trust-row">
<div class="trust-item">
<div class="trust-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg></div>
<div class="trust-text"><strong>15+ Years</strong>Industry Experience</div>
</div>
<div class="trust-item">
<div class="trust-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
<div class="trust-text"><strong>CA &amp; CS</strong>Certified Experts</div>
</div>
</div>
<div class="google-rating">
<div class="rating-content">
<div class="rating-stars">
<svg viewbox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
<svg viewbox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
<svg viewbox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
<svg viewbox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
<svg viewbox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
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
<iframe id="hidden208810000001209168Frame" name="hidden208810000001209168Frame" src="about:blank" style="display:none;"></iframe>
<form accept-charset="UTF-8" action="https://bigin.zoho.in/crm/WebToRecordForm" enctype="multipart/form-data" id="BiginWebToRecordForm208810000001209168" method="POST" name="BiginWebToRecordForm208810000001209168" onsubmit='javascript:document.charset="UTF-8"; return validateConsultationForm() &amp;&amp; checkMandatory208810000001209168()' target="hidden208810000001209168Frame">
<input name="xnQsjsdp" style="display:none;" type="text" value="e400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79"/>
<input id="zc_gad" name="zc_gad" type="hidden" value=""/>
<input name="xmIwtLD" style="display:none;" type="text" value="2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843"/>
<input name="actionType" style="display:none;" type="text" value="UG90ZW50aWFscw=="/>
<input id="rmsg" name="rmsg" type="hidden" value="true"/>
<input name="returnURL" style="display:none;" type="text" value="null"/>
<input id="dealNameField" name="Potential Name" type="hidden" value="Website Enquiry - Real Estate Investor ITR"/>
<input name="Pipeline" type="hidden" value="Sales Pipeline Standard"/>
<input name="Stage" type="hidden" value="Qualification"/>
<input id="pageSourceField" name="Contacts.Lead Source" type="hidden" value=""/>
<div class="form-group">
<label class="form-label">Full Name</label>
<input class="form-input" id="consultFullName" maxlength="80" name="Contacts.Last Name" oninput="clearFieldError(this)" placeholder="Your name" type="text"/>
</div>
<div class="form-group">
<label class="form-label">Phone Number</label>
<div class="phone-group" id="phoneGroup">
<div class="country-code-dropdown" id="countryCodeDropdown" onclick="toggleCountryDropdown(event)">
<span class="selected-flag" id="selectedFlag">🇮🇳</span>
<span class="selected-code" id="selectedCode">+91</span>
<svg class="dropdown-arrow" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24"><path d="M6 9l6 6 6-6"></path></svg>
<div class="country-dropdown-list" id="countryDropdownList">
<input class="country-search-input" id="countrySearchInput" onclick="event.stopPropagation()" oninput="filterCountries(this.value)" placeholder="Search country..." type="text"/>
<div class="country-options" id="countryOptions"></div>
</div>
</div>
<input class="form-input phone-input" id="phoneNumberInput" maxlength="15" onblur="validatePhoneOnBlur(this)" oninput='this.value = this.value.replace(/[^0-9]/g, ""); clearFieldError(this); document.getElementById("phoneGroup").classList.remove("input-error"); document.getElementById("phoneError").style.display="none";' placeholder="Enter phone number" type="text"/>
<div id="phoneError" style="display:none;font-size:12px;color:#FD6B6D;margin-top:4px;padding-left:2px;"></div>
</div>
<input id="combinedMobileField" name="Contacts.Mobile" type="hidden" value=""/>
</div>
<div class="form-group">
<label class="form-label">City</label>
<input class="form-input" id="consultCity" maxlength="100" name="Contacts.Mailing City" oninput="clearFieldError(this)" placeholder="Enter your city" type="text"/>
</div>
<div class="form-group">
<label class="form-label">Service Needed</label>
<select class="form-select" id="consultService" name="Contacts.Description" onchange="clearFieldError(this)">
<option disabled="" selected="" value="">Select a service</option>
<option selected="" value="Two-Property ITR-2 (1 SOP + 1 Let-Out)">Two-Property ITR-2 (1 SOP + 1 Let-Out)</option>
<option value="Three to Four Property with Deemed Let-Out">Three to Four Property with Deemed Let-Out</option>
<option value="Multi-Property ITR with Sale + Section 54/54F">Multi-Property ITR with Sale + Section 54/54F</option>
<option value="Section 50C Valuation Officer Reference">Section 50C Valuation Officer Reference</option>
<option value="HNI 5+ Property Portfolio">HNI 5+ Property Portfolio</option>
<option value="Returning NRI with Indian Property Portfolio">Returning NRI with Indian Property Portfolio</option>
<option value="Joint Owner / Co-Owner ITR">Joint Owner / Co-Owner ITR</option>
<option value="Pre-Construction Interest 5-Year Window">Pre-Construction Interest 5-Year Window</option>
<option value="Section 54EC Bond Investment Planning">Section 54EC Bond Investment Planning</option>
<option value="Section 139(9) Defective Return Cure">Section 139(9) Defective Return Cure</option>
<option value="Other">Other</option>
</select>
</div>
<button class="btn-submit" id="formSubmitBtn" type="submit">Get Free Quote →</button>
</form>
<p class="form-response-note">Our team will get back to you shortly. No spam.</p>
<div class="form-footer">
<span class="form-footer-item">
<svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            100% Secure
                        </span>
<span class="form-footer-item">
<svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                            No Spam
                        </span>
<span class="form-footer-item">
<svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
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
<p>Hear how teams across industries use Patron to save time, cut costs, &amp; stay in control.</p>
</div>
<div class="testi-loading" id="testiLoading" style="display:none !important;">
<div class="spinner"></div>
            Fetching latest Google reviews…
        </div>
<div class="testimonial-slider" id="testimonialSlider" style="display:block;">

<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
<div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">“</div>
<div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">3 properties - self-occupied Kothrud, let-out Aundh, inherited Nashik. Earlier CA showed all as self-occupied. Patron flagged Section 23(2) post-2019 cap at 2. Nashik recomputed as deemed let-out. Prevented Rs 60,000 future Section 270A penalty.</div>
<div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
<div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div>
<div>
<div style="font-weight:700;font-size:13px;color:var(--blue);">Rohan S.</div>
<div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Multi-Property Investor (Pune)</div>
<div style="color:var(--orange);font-size:12px;">★★★★★</div>
</div>
<div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
</div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
<div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">“</div>
<div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Sold Andheri flat for Rs 1.85 crore. SDV was Rs 2.05 crore - Section 50C kicked in by Rs 15 lakh. Patron applied for DVO reference with comparable sales. DVO finalized Rs 1.92 crore. Saved Rs 4 lakh capital gains tax.</div>
<div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
<div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
<div>
<div style="font-weight:700;font-size:13px;color:var(--blue);">Anjali S.</div>
<div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HNI Investor (Mumbai)</div>
<div style="color:var(--orange);font-size:12px;">★★★★★</div>
</div>
<div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
</div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
<div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">“</div>
<div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Rs 18 lakh salary plus let-out Bengaluru flat with Rs 4 lakh rent and Rs 5.5 lakh interest. Patron showed old regime saves Rs 70,000 vs new regime - Section 71(3A) Rs 2 lakh HP loss set-off preserved. Section 71B carry forward Rs 91,000.</div>
<div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
<div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div>
<div>
<div style="font-weight:700;font-size:13px;color:var(--blue);">Prakash G.</div>
<div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Salaried Investor (Bengaluru)</div>
<div style="color:var(--orange);font-size:12px;">★★★★★</div>
</div>
<div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
</div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
<div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">“</div>
<div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">HNI portfolio - 5 commercial shops Mumbai, 2 residential Pune, 1 NRI rental Gurugram. Patron stacked Section 54EC bonds Rs 50 lakh plus Section 54F residential reinvestment plus Section 54 residential rollover. Saved Rs 8 lakh total tax.</div>
<div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
<div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HD</div>
<div>
<div style="font-weight:700;font-size:13px;color:var(--blue);">Hardik D.</div>
<div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HNI 5+ Property Investor (Mumbai)</div>
<div style="color:var(--orange);font-size:12px;">★★★★★</div>
</div>
<div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
</div>
</div>
</div>
<div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
<div class="reviews-cta-content">
<div class="reviews-cta-icon">
<svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg>
</div>
<div class="reviews-cta-text">
<h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
<p>Multi-property investors across Pune, Mumbai, Delhi NCR, Bengaluru, Hyderabad and Chennai. 2-property to HNI 5-plus portfolio, residential and commercial, recurring rental plus occasional sales, Section 50C valuation references, Section 54/54F/54EC reinvestment stacking, returning NRI scenarios. 1,800+ engagements since 2019.</p>
</div>
</div>
<a class="btn-cta" href="tel:+919459456700">
                Talk to an Expert
                <svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"></path></svg>
</a>
</div>
</div>
</section>
<!-- STATS BAR -->
<div class="stats-bar">
<div class="stats-container">
<div class="stat-item">
<div class="stat-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"></path></svg></div>
<div class="stat-content"><span class="stat-value">10,000+</span><span class="stat-label">Businesses Served</span><span class="stat-desc">GST compliance and litigation support across India.</span></div>
</div>
<div class="stat-item">
<div class="stat-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><rect height="14" rx="2" width="20" x="2" y="3"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
<div class="stat-content"><span class="stat-value">15+</span><span class="stat-label">Years Experience</span><span class="stat-desc">Deep expertise in IP registration, GST &amp; business compliance.</span></div>
</div>
<div class="stat-item">
<div class="stat-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path><path d="M14 2v6h6M16 13H8M16 17H8"></path></svg></div>
<div class="stat-content"><span class="stat-value">50,000+</span><span class="stat-label">Documents Filed</span><span class="stat-desc">Returns, appeals, and filings handled accurately.</span></div>
</div>
<div class="stat-item">
<div class="stat-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><circle cx="12" cy="8" r="7"></circle><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"></path></svg></div>
<div class="stat-content"><span class="stat-value">4.9★</span><span class="stat-label">Client Rating</span><span class="stat-desc">Trusted by entrepreneurs, startups, and growing businesses.</span></div>
</div>
<div class="certifications">
<div class="cert-item"><svg fill="none" stroke="#10B981" stroke-width="2" viewbox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>ISO Certified<span class="cert-desc">Professional standards and documented processes.</span></div>
<div class="cert-item"><svg fill="none" stroke="#3B82F6" stroke-width="2" viewbox="0 0 24 24"><rect height="11" rx="2" width="18" x="3" y="11"></rect><path d="M7 11V7a5 5 0 0110 0v4"></path></svg>SSL Secure<span class="cert-desc">Your financial and business data is fully protected.</span></div>
</div>
</div>
</div>
<!-- TOC NAVIGATION -->
<div class="toc-section">
<div class="toc-container">
<button class="toc-arrow left" id="tocLeft">❮</button>
<div class="toc-wrapper" id="tocWrapper">
<a class="toc-btn" href="#overview-section">Overview</a>
<a class="toc-btn" href="#what-section">What Is It</a>
<a class="toc-btn" href="#who-section">Who Files</a>
<a class="toc-btn" href="#services-section">Patron Services</a>
<a class="toc-btn" href="#process-section">8-Step Process</a>
<a class="toc-btn" href="#documents-section">Documents</a>
<a class="toc-btn" href="#challenges-section">Common Mistakes</a>
<a class="toc-btn" href="#fees-section">Fees</a>
<a class="toc-btn" href="#timeline-section">Timeline</a>
<a class="toc-btn" href="#comparison-section">SOP vs Let-Out</a>
<a class="toc-btn" href="#legal-section">Legal Framework</a>
<a class="toc-btn" href="#faq-section">FAQs</a>
</div>
<button class="toc-arrow right" id="tocRight">❯</button>
</div>
</div>
<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">Multi-Property Real Estate Investor ITR for AY 2026-27</h2>
<div class="content-text">
<div class="highlight-box" style="margin-bottom:20px;">
<p><strong>📌 TL;DR - Real Estate Investor ITR Services at a Glance</strong></p>
<p>Multi-property investors file ITR-2 with Schedule HP for rental income (Section 22 charging head, Section 23 annual value, Section 24 deductions) plus Schedule CG for any sales. Up to two properties qualify as self-occupied (Annual Value = NIL post Finance Act 2019); third onwards taxed at deemed rent. Section 24(b) gives Rs 2 lakh interest cap for self-occupied (old regime only) or unlimited for let-out (both regimes). Sales attract Section 50C stamp duty value rule (10 percent safe harbour) and Section 54/54F/54EC reinvestment exemptions. Section 71(3A) caps HP loss inter-head set-off at Rs 2 lakh under old regime; new regime under Section 115BAC blocks entirely.</p>
</div>
<p>Real estate investor ITR is the area where reading the bare Act sections (22 to 27) without applying the post-2019 amendments and post-23 July 2024 capital gains regime produces systematically wrong answers. The mechanics are layered: Section 22 charges annual value of property to tax; Section 23 splits annual value into self-occupied (Annual Value = NIL, max 2 properties post Finance Act 2019), let-out (higher of municipal value, fair rent or actual rent), and deemed let-out (third onwards, notional rent); Section 24(a) gives a 30 percent standard deduction on Net Annual Value; Section 24(b) deducts loan interest with a Rs 2 lakh cap for self-occupied (old regime only) versus unlimited for let-out (both regimes).</p>
<p>Sales add Section 48 cost computation (with the resident-individual choice between 12.5 percent without indexation or 20 percent with indexation for property acquired before 23 July 2024 under Finance (No. 2) Act 2024), Section 50C deemed-consideration if stamp duty value exceeds 110 percent of sale price, and Section 54/54F/54EC reinvestment exemptions. Section 71(3A) caps house property loss inter-head set-off at Rs 2 lakh under the old regime; new regime under Section 115BAC blocks inter-head set-off entirely. Patron Accounting has filed multi-property ITRs for over 1,800 individual real estate investors across Pune, Mumbai, Delhi NCR, Bengaluru, Chennai and Hyderabad since 2019. With offices in Pune, Mumbai, Delhi and Gurugram, every multi-property ITR comes with optimal Section 23(2) self-occupied election, regime arbitrage memo, Section 50C reconciliation and 12 months of post-filing Section 139(9), 143(1)(a), 142(1) and 148 notice support.</p>
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
<h2 class="section-title">What Is Real Estate Investor ITR Filing</h2>
<div class="content-text what-is-definition">
<p>Real estate investor ITR filing means computing house property income across multiple properties (Sections 22 to 27 of the Income Tax Act 1961) plus any sale-side capital gains (Sections 48, 50C, 54 family) and reporting in ITR-2 with Schedule HP, Schedule CG and Schedule CYLA/BFLA for loss set-off. Applies to individuals with two or more properties, recurring rental income, or occasional sales.</p>
<p>The filing covers the full real estate investor lifecycle: (1) Schedule HP for multi-property rental income with self-occupied vs let-out vs deemed let-out classification per Section 23; (2) Section 24(a) 30 percent standard deduction on Net Annual Value; (3) Section 24(b) interest deduction with Rs 2 lakh cap for self-occupied (old regime only) vs unlimited for let-out (both regimes); (4) post-2019 Section 23(2) max 2 self-occupied with deemed rent on third onwards; (5) Section 71(3A) Rs 2 lakh inter-head HP loss cap and Section 71B 8-year carry forward; (6) Section 50C SDV rule with 10 percent safe harbour and agreement-date valuation; (7) Section 48 indexation grandfathering choice (12.5 percent without indexation vs 20 percent with) for pre-23 July 2024 property; (8) Section 54 / 54F / 54EC reinvestment with CGAS deposit; (9) Section 26 co-ownership computation; (10) regime arbitrage between old and new for property investors.</p>
<p>ITR-1 (Sahaj) is NOT allowed for investors with 2-plus properties or any HP loss; filing ITR-1 with multi-property data triggers a Section 139(9) defective return notice within weeks with a 15-day cure window. ITR-2 is mandatory.</p>
</div>
<div class="highlight-box" style="margin-top:20px;">
<p><strong>Key Terms for Real Estate Investor ITR:</strong></p>
<p><strong>Section 22 - Charging Section:</strong> Income from House Property head; annual value of property is taxable irrespective of actual rent received (except own-business-use under Section 22 proviso).</p>
<p><strong>Section 23(2) - Self-Occupied Annual Value:</strong> Up to 2 properties at NIL annual value (post Finance Act 2019 amendment, raised from 1); third onwards = deemed let-out at notional rent.</p>
<p><strong>Section 23(1) - Let-Out Annual Value:</strong> Higher of expected rent (Municipal Value or Fair Rent, capped by Standard Rent under Rent Control Acts) and actual rent received.</p>
<p><strong>Section 23(1)(c) - Vacancy Reduction:</strong> Proportionate reduction of expected rent if let-out property was vacant for part of FY.</p>
<p><strong>Section 24(a) - 30 Percent Standard Deduction:</strong> Flat 30 percent of Net Annual Value (NAV = Gross Annual Value minus municipal taxes paid by owner); available both regimes for let-out and deemed let-out; NIL for self-occupied (since NAV = NIL).</p>
<p><strong>Section 24(b) - Interest on Borrowed Capital:</strong> Self-occupied Rs 2 lakh aggregate cap across all SOPs (old regime only); let-out unlimited (both regimes); pre-construction interest in 5 equal installments from FY of completion; Rs 30,000 reduced cap if loan for repair/renovation OR construction not completed within 5 years.</p>
<p><strong>Section 26 - Co-Ownership:</strong> Each co-owner taxed individually on share; each gets the full Rs 2 lakh self-occupied cap proportionate to share; joint loan interest split per ownership ratio.</p>
<p><strong>Section 27 - Deemed Ownership:</strong> Spouse/minor/HUF members may be deemed owners; clubbing of income under Section 64.</p>
<p><strong>Section 48 - Capital Gains Computation:</strong> Sale price minus indexed cost; resident-individual pre-23 July 2024 property: choice of 12.5 percent without indexation or 20 percent with indexation under Finance (No. 2) Act 2024.</p>
<p><strong>Section 50C - Stamp Duty Value Rule:</strong> SDV is full value of consideration if SDV exceeds 110 percent of sale price (10 percent safe harbour from AY 2020-21 per Finance Act 2020); agreement-date SDV available with documented advance via cheque/RTGS/UPI.</p>
<p><strong>Section 50C(2) - DVO Reference:</strong> Departmental Valuation Officer reference if taxpayer disputes SDV; lower of DVO value or SDV is used.</p>
<p><strong>Section 54 - Residential to Residential:</strong> LTCG on residential house exempted on reinvestment in 1 (or 2 if LTCG up to Rs 2 crore once-in-lifetime) residential house within 1 year before/2 years after sale (3 years if under construction).</p>
<p><strong>Section 54F - Any LTCG to Residential:</strong> Any LTCG (other than residential house sale) exempted on reinvestment of NET sale consideration in 1 residential house; pro-rata exemption for partial reinvestment.</p>
<p><strong>Section 54EC - Capital Gains Bonds:</strong> LTCG on land/building exempted up to Rs 50 lakh on investment in NHAI, REC, PFC or IRFC bonds within 6 months of sale; 5-year lock-in.</p>
<p><strong>Section 56(2)(x)(b) - Buyer-Side Tax:</strong> If SDV exceeds purchase price by more than Rs 50,000, the difference is taxed as Other Sources in the buyer's hands.</p>
<p><strong>Section 71(3A) - HP Loss Inter-Head Cap:</strong> Rs 2 lakh per FY cap against other heads (salary, business, capital gains, other sources); available only under old regime.</p>
<p><strong>Section 71B - HP Loss Carry Forward:</strong> 8 AYs against future HP income only; unique exception - available even with late filing.</p>
<p><strong>Section 115BAC - New Tax Regime:</strong> No SOP interest deduction; let-out interest restricted to intra-head only; no inter-head HP loss set-off.</p>
<p><strong>Capital Gains Account Scheme (CGAS):</strong> For unutilized Section 54/54F reinvestment; deposit unused capital gains in CGAS before ITR due date; subsequent investment within the reinvestment window.</p>
<p><strong>Section 194-I, 194-IA, 194-IB:</strong> 194-I - business tenant TDS at 10 percent above Rs 2.4 lakh annual rent. 194-IA - property buyer TDS at 1 percent above Rs 50 lakh consideration. 194-IB - individual tenant TDS at 5 percent above Rs 50,000 monthly rent.</p>
</div>
</div>
<div class="column-image">
<div class="illustration-placeholder">
<div class="illustration-icon" style="max-width:240px;">
<svg fill="none" viewbox="0 0 200 180" xmlns="http://www.w3.org/2000/svg">
<!-- Building / Tribunal -->
<rect fill="#F0F4F8" height="100" rx="6" stroke="#14365F" stroke-width="1.5" width="120" x="40" y="50"></rect>
<!-- Roof / Pediment -->
<path d="M30 52L100 15L170 52" fill="#E8EDF4" stroke="#14365F" stroke-width="2"></path>
<!-- Columns -->
<rect fill="#D4DCE8" height="80" rx="2" stroke="#14365F" stroke-width="0.8" width="8" x="55" y="60"></rect>
<rect fill="#D4DCE8" height="80" rx="2" stroke="#14365F" stroke-width="0.8" width="8" x="80" y="60"></rect>
<rect fill="#D4DCE8" height="80" rx="2" stroke="#14365F" stroke-width="0.8" width="8" x="112" y="60"></rect>
<rect fill="#D4DCE8" height="80" rx="2" stroke="#14365F" stroke-width="0.8" width="8" x="137" y="60"></rect>
<!-- Door -->
<rect fill="#14365F" height="35" opacity="0.15" rx="12" stroke="#14365F" stroke-width="1" width="24" x="88" y="105"></rect>
<!-- Scale of Justice icon -->
<circle cx="100" cy="78" fill="#FFF3E0" r="14" stroke="#F5A623" stroke-width="1.2"></circle>
<line stroke="#14365F" stroke-width="1.5" x1="100" x2="100" y1="70" y2="86"></line>
<line stroke="#14365F" stroke-width="1.5" x1="90" x2="110" y1="76" y2="76"></line>
<path d="M90 76L87 83H93Z" fill="#E8712C" opacity="0.6"></path>
<path d="M110 76L107 83H113Z" fill="#E8712C" opacity="0.6"></path>
<!-- Green check badge -->
<circle cx="152" cy="42" fill="#E8F5E9" r="18" stroke="#25D366" stroke-width="1.5"></circle>
<path d="M144 42l5 5 10-10" stroke="#25D366" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"></path>
<!-- APL-05 tag -->
<rect fill="#FFF3E0" height="18" rx="4" stroke="#F5A623" stroke-width="1" width="42" x="30" y="120"></rect>
<text fill="#14365F" font-family="Arial, sans-serif" font-size="8" font-weight="700" text-anchor="middle" x="51" y="132.5">APL-05</text>
<!-- Label -->
<text fill="#14365F" font-family="Arial, sans-serif" font-size="10" font-weight="700" text-anchor="middle" x="100" y="170">Real Estate Investor ITR</text>
</svg>
</div>
<div class="illustration-badge">
<span>Charging Section</span>
<strong>Section 22</strong>
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
<h2 class="section-title">Who Files Multi-Property ITR for AY 2026-27</h2>
<div class="content-text">
<p>Multi-property real estate investor ITR filing applies under Section 139(1) of the Income Tax Act 1961 for AY 2026-27. ITR-2 is mandatory for 2-plus properties or any capital gains; ITR-1 cannot be used and triggers a Section 139(9) defective return notice. Filing is mandatory if rental income or sale gains push total income above the basic exemption limit, or if you wish to carry forward HP loss under Section 71B.</p>
<ul>
<li><strong>Individual investors with 2 to 5-plus properties</strong> - residential and commercial mix across Pune, Mumbai, Delhi NCR, Bengaluru, Hyderabad, Chennai; need Schedule HP per property with Section 23(2) optimal self-occupied election.</li>
<li><strong>Second-home owners</strong> - vacation home plus primary residence; both qualify as self-occupied under Section 23(2) post Finance Act 2019; no deemed rent on either.</li>
<li><strong>Investors with 3-plus properties</strong> - mandatory third-property classification as deemed let-out at notional rent; cannot be reported as additional self-occupied.</li>
<li><strong>Investors with recurring rental income</strong> - Form 26AS TDS under Section 194-I (10 percent business tenant on rent above Rs 2.4 lakh annual) or Section 194-IB (5 percent individual tenant above Rs 50,000 monthly); ITR reconciliation against rent agreements.</li>
<li><strong>Occasional flippers and sellers</strong> - Section 48 capital gains computation; Section 50C SDV rule check; Section 54/54F/54EC reinvestment planning.</li>
<li><strong>Joint owners and co-owners</strong> - Section 26 share-wise computation; separate ITR filing for each co-owner with proportionate income and interest; each gets full Rs 2 lakh SOP cap.</li>
<li><strong>NRI property investors with Indian portfolios</strong> - Section 195 buyer TDS at 12.5 percent LTCG or 30 percent STCG on full sale value; Section 197 Form 13 Lower TDS Certificate planning; NRO/NRE/RFC routing.</li>
<li><strong>HUF property investors</strong> - HUF can own properties separately from individual members; HUF ITR-2 filing required if HUF has independent property income.</li>
<li><strong>Investors with HP loss</strong> - Section 71B 8-year carry forward against future HP income; unique exception preserved even with late filing under Section 139(4).</li>
</ul>
<p><strong>Statutory due dates for AY 2026-27:</strong> ITR-2 non-audit cases - 31 July 2026. CGAS deposit deadline for unutilized Section 54/54F reinvestment - 31 July 2026 (with ITR). Section 54EC bond investment - within 6 months of sale (independent of ITR filing). Section 54 reinvestment window - 1 year before or 2 years after sale (3 years if under construction). Belated return under Section 139(4) - 31 December 2026 with Section 234F fee (HP loss carry-forward preserved). Revised return under Section 139(5) - 31 March 2027. Updated Return (ITR-U) under Section 139(8A) - 31 March 2031.</p>
</div>
</div>
</div>

</section>
<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">Patron Real Estate Investor ITR Services</h2>
<div class="content-text">
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Service</th><th>What We Do</th><th>Details</th></tr></thead>
<tbody>
<tr><td><strong>Two-Property ITR-2 (1 SOP plus 1 Let-Out)</strong></td><td>Schedule HP for both properties. Section 24(a) 30 percent standard deduction on Net Annual Value. Section 24(b) home loan interest claim with regime arbitrage. Form 26AS rental TDS reconciliation under Section 194-I (business tenant) and Section 194-IB (individual tenant).</td><td>From Rs 5,999</td></tr>
<tr><td><strong>Three to Four Property Portfolio with Deemed Let-Out</strong></td><td>Section 23(2) optimal self-occupied election (which 2 properties get SOP status to minimize tax). Deemed rent computation for third property onwards using municipal value, fair rent and Standard Rent ceiling under Rent Control Acts. Full Section 24 deductions.</td><td>From Rs 7,499</td></tr>
<tr><td><strong>Joint Owner / Co-Owner ITR (per spouse separate filing)</strong></td><td>Section 26 share-wise computation; joint loan interest split per ownership ratio; both regimes comparison for each co-owner. Each co-owner gets full Rs 2 lakh self-occupied cap proportionate to share.</td><td>From Rs 8,999</td></tr>
<tr><td><strong>Multi-Property ITR-2 with Sale plus Section 54/54F</strong></td><td>Section 48 indexation choice (12.5 percent without indexation vs 20 percent with for pre-23-Jul-2024 property under Finance (No. 2) Act 2024). Section 50C SDV reconciliation with 10 percent safe harbour check. Section 54, 54F or 54EC reinvestment exemption claim with CGAS deposit instructions where reinvestment is incomplete.</td><td>From Rs 9,999</td></tr>
<tr><td><strong>Returning NRI with Indian Property Portfolio</strong></td><td>Section 6 residency memo (RNOR window). Section 195 sale TDS coordination with buyer using Form 27Q (NOT Form 26QB). Section 197 Form 13 Lower TDS Certificate application BEFORE sale. NRO/NRE/RFC routing for sale proceeds.</td><td>From Rs 9,999</td></tr>
<tr><td><strong>Section 50C Valuation Officer Reference plus Appeal</strong></td><td>Section 50C(2) Departmental Valuation Officer reference application. Supporting market evidence preparation (comparable sale data, broker valuations, structural reports). AO and CIT(A) representation if scrutiny escalates.</td><td>From Rs 12,999</td></tr>
<tr><td><strong>HNI 5-plus Property Portfolio with Multiple Sales</strong></td><td>Full portfolio review across residential and commercial. Multi-sale capital gains aggregation. Section 54EC plus 54F plus 54 reinvestment stacking. Surcharge cap analysis (15 percent / 25 percent / 37 percent surcharge tiers).</td><td>From Rs 14,999</td></tr>
<tr><td><strong>Section 139(9) Defective Return Cure</strong></td><td>Re-file as ITR-2 within 15-day cure window. Common defective trigger for multi-property investors who filed ITR-1 with HP loss or multiple properties.</td><td>From Rs 3,999</td></tr>
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
<h2 class="section-title">8-Step Multi-Property ITR Procedure</h2>
<p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs on the Income Tax e-filing portal covering property classification under Section 23, Schedule HP computation, regime arbitrage, capital gains for any sales, Section 50C SDV reconciliation, reinvestment exemption planning, validation and e-verification. Each step is owned by a named CA with documented hand-off.</p>
</div>
<div class="steps-container">
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 1</span>
<h3 class="step-title">Portfolio Classification under Section 23</h3>
<p class="step-description">Receive property list with locations, ownership type and usage status. Apply Section 23(2) optimal self-occupied election - which 2 properties get SOP status (NIL annual value) and which become let-out or deemed let-out. The choice minimizes tax across the portfolio.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Portfolio mapped</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> SOP election locked</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Classify</span>
<span class="step-number-large">01</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 2</span>
<h3 class="step-title">Document Collection</h3>
<p class="step-description">Receive rent agreements per property, Form 26AS for Section 194-I/194-IB TDS, Form 16A from tenants, municipal tax receipts, home loan interest certificates from lenders, sale and purchase deeds with stamp duty value mentioned. For sales: agreement to sell with advance payment proof for Section 50C agreement-date claim.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Documents in</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Deeds catalogued</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Documents</span>
<span class="step-number-large">02</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 3</span>
<h3 class="step-title">Schedule HP Computation</h3>
<p class="step-description">For each property: Gross Annual Value (per Section 23(1) for let-out, NIL for SOP, notional for deemed let-out), municipal taxes paid (NAV computation), Section 24(a) 30 percent standard deduction, Section 24(b) home loan interest. Pre-construction interest in 5 equal installments under Section 24(b) proviso.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> HP income computed</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Per-property working</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Schedule HP</span>
<span class="step-number-large">03</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 4</span>
<h3 class="step-title">Regime Arbitrage Analysis</h3>
<p class="step-description">Compare old vs new regime. Old regime: full Section 24(b) interest deduction with Rs 2 lakh inter-head set-off cap under Section 71(3A). New regime under Section 115BAC: NO SOP interest deduction; let-out interest restricted to intra-head only. For high-interest borrowers, old regime usually wins by Rs 50,000 to Rs 1 lakh annually.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Regime compared</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Best chosen</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Regime</span>
<span class="step-number-large">04</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 5</span>
<h3 class="step-title">Capital Gains and Section 50C (if any sale)</h3>
<p class="step-description">For property sold in FY: Section 48 computation with indexation choice for pre-23-Jul-2024 property (12.5 percent without or 20 percent with). Section 50C check - if SDV exceeds 110 percent of sale price, SDV becomes deemed consideration. Agreement-date SDV mitigation if part payment via banking channel pre-registration.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Gains computed</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Section 50C done</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Capital Gains</span>
<span class="step-number-large">05</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 6</span>
<h3 class="step-title">Reinvestment Exemption Planning</h3>
<p class="step-description">For LTCG: Section 54 (residential to residential, 1 or 2 houses if LTCG up to Rs 2 crore once-in-lifetime), Section 54F (any LTCG to residential with NET consideration rule), Section 54EC (Rs 50 lakh in NHAI/REC bonds within 6 months, 5-year lock-in). If reinvestment not utilized by 31 July 2026, deposit unutilized amount in Capital Gains Account Scheme (CGAS).</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Exemptions claimed</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> CGAS if needed</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Reinvest</span>
<span class="step-number-large">06</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 7</span>
<h3 class="step-title">Loss Set-Off and Validation</h3>
<p class="step-description">Apply Section 71(3A) Rs 2 lakh inter-head HP loss cap under old regime (or block under new regime). Excess loss carried forward under Section 71B for 8 AYs against future HP income only. Schedule CYLA and BFLA reconciliation. Run portal validator and resolve every error.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Set-off applied</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Carry forward locked</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Loss Set-Off</span>
<span class="step-number-large">07</span>
</div>
</div>
</div>
<div class="step-card">
<div class="step-content">
<span class="step-badge">Step 8</span>
<h3 class="step-title">Submission and E-Verification</h3>
<p class="step-description">File the return electronically before the 31 July 2026 due date under Section 139(1). E-verify within 30 days per CBDT Notification 5/2022 via Aadhaar OTP, net banking, bank account EVC or DSC. Track ITR-V acknowledgement with 15-digit number.</p>
<div class="step-highlights">
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> Filed</span>
<span class="highlight-tag"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg> e-Verified</span>
</div>
</div>
<div class="step-visual">
<div class="step-illustration">
<div class="illustration-icon"><svg fill="none" viewbox="0 0 120 100" xmlns="http://www.w3.org/2000/svg"><rect fill="#F0F4F8" height="70" rx="6" stroke="#14365F" stroke-width="1.5" width="90" x="15" y="5"></rect><line stroke="#F5A623" stroke-linecap="round" stroke-width="3" x1="30" x2="90" y1="22" y2="22"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="80" y1="38" y2="38"></line><line opacity="0.3" stroke="#14365F" stroke-linecap="round" stroke-width="2" x1="30" x2="85" y1="50" y2="50"></line><line stroke="#E8712C" stroke-linecap="round" stroke-width="2" x1="30" x2="70" y1="62" y2="62"></line></svg></div>
<span class="illustration-label">Submitted</span>
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
<h2 class="section-title">Documents Checklist by Scenario</h2>
<div class="content-text">
<p>The Patron document checklist for multi-property ITR is segmented across rental side, sale side, reinvestment and reference. Universal documents apply to all multi-property filers; scenario-specific documents are added by transaction type.</p>
<p><strong>Universal (all real estate investors):</strong></p>
<ul>
<li>PAN and Aadhaar (linked under Section 139AA).</li>
<li>Bank account details for refund credit; primary account flagged on the e-filing portal.</li>
<li>Property list with locations, classifications (residential/commercial), usage status (self-occupied/let-out/deemed let-out) and ownership type (sole/joint/HUF).</li>
<li>AIS (Annual Information Statement) and Form 26AS for FY 2025-26.</li>
</ul>
<p><strong>Rental-Side Documents (let-out properties):</strong></p>
<ul>
<li>Rent agreement per property with monthly rent, tenant name and PAN, lease term.</li>
<li>Form 16A from business tenants under Section 194-I (10 percent TDS on rent above Rs 2.4 lakh annual).</li>
<li>Form 16C from individual tenants under Section 194-IB (5 percent TDS on rent above Rs 50,000 monthly).</li>
<li>Bank statements showing rent receipts (for vacancy reduction under Section 23(1)(c) if let-out part of year).</li>
<li>Municipal tax receipts paid by owner (deductible from GAV for NAV computation).</li>
</ul>
<p><strong>Home Loan Documents (Section 24(b) claim):</strong></p>
<ul>
<li>Home loan provisional interest certificate from bank or HFC for FY 2025-26 per property.</li>
<li>Home loan sanction letter (for pre-construction interest 5-year window check under Section 24(b) proviso).</li>
<li>Joint loan co-owner share documents (for Section 26 co-ownership computation).</li>
<li>Construction completion timeline proof (5-year rule under Section 24(b) - if not completed, interest cap reduces to Rs 30,000).</li>
</ul>
<p><strong>Sale-Side Documents (if any property sold during FY):</strong></p>
<ul>
<li>Sale deed with stamp duty value mentioned.</li>
<li>Agreement to sell (if dated earlier than registration with part payment via cheque/RTGS/UPI - for Section 50C agreement-date SDV claim).</li>
<li>Bank statements showing sale consideration receipt.</li>
<li>Buyer's TDS certificate under Section 194-IA (Form 16B) at 1 percent on sale price above Rs 50 lakh.</li>
<li>Stamp duty receipt and registration receipt.</li>
<li>Original purchase deed for cost of acquisition computation.</li>
<li>Improvement cost bills with dates (for indexed cost under Section 48).</li>
<li>Brokerage and legal fees receipts (for net consideration computation).</li>
</ul>
<p><strong>Reinvestment Documents (Section 54/54F/54EC claim):</strong></p>
<ul>
<li>New property purchase agreement (Section 54 or Section 54F).</li>
<li>Construction agreement and progress certificates (3-year window from sale date).</li>
<li>NHAI/REC/PFC/IRFC bond certificate (Section 54EC) within 6 months of sale with 5-year lock-in.</li>
<li>Capital Gains Account Scheme (CGAS) deposit receipt - if reinvestment not yet utilized by ITR due date.</li>
</ul>
<p><strong>Key Outputs You Receive:</strong> Filed ITR-2 acknowledgement with e-verification confirmation. Per-property Schedule HP working with Section 23 classification, NAV computation, Section 24(a) and 24(b) deductions, regime arbitrage memo. Schedule CG capital gains working with Section 48 indexation choice and Section 50C reconciliation. Reinvestment exemption working with Section 54/54F/54EC mapping. Loss set-off and carry-forward schedule under Section 71(3A) and Section 71B.</p>
</div>
</div>
</div>
</section>
<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">Common Real Estate Investor ITR Mistakes</h2>
<div class="content-text">
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
<tbody>
<tr><td><strong>Three properties all classified as self-occupied</strong></td><td>Post Finance Act 2019, Section 23(2) caps self-occupied at TWO properties. Third onwards is treated as deemed let-out at notional rent (higher of municipal value or fair rent, capped by Standard Rent under Rent Control Acts). Common error among investors with 3-plus properties even when family lives in all of them.</td><td>Patron recomputes with Section 23(2) optimal election - select the 2 properties giving NIL annual value to minimize tax. Third onwards reported as deemed let-out at notional rent. Additional Rs 80,000 to Rs 1.5 lakh income but offset if interest exceeds Rs 2 lakh self-occupied cap.</td></tr>
<tr><td><strong>Sale at price below 110 percent of SDV - Section 50C deemed consideration</strong></td><td>If actual sale price is less than 90.9 percent of stamp duty value (i.e., SDV exceeds 110 percent of sale price), Section 50C kicks in and SDV becomes the deemed full value of consideration for capital gains. Common error: report actual sale price; demand notice arrives later with Section 50C addition plus interest and penalty.</td><td>Patron applies the 10 percent safe harbour check at planning stage. If breached, mitigation routes: (a) agreement-date SDV via documented advance via cheque/RTGS/UPI before registration; (b) Section 50C(2) Departmental Valuation Officer reference; (c) Section 54/54F reinvestment to absorb the additional notional gain.</td></tr>
<tr><td><strong>New regime selected by high-interest borrower with let-out property</strong></td><td>Under new regime Section 115BAC, HP loss is intra-head only - cannot offset salary, business or capital gains income. A let-out property with Rs 5 lakh interest and Rs 4 lakh rent has Rs 2 lakh HP loss after Section 24(a) deduction. Old regime: Rs 2 lakh offsets salary saving Rs 60,000. New regime: Rs 2 lakh trapped against future HP income only.</td><td>Patron old vs new regime comparison memo with HP loss inter-head set-off impact quantified. Old regime usually wins for high-interest borrowers by Rs 50,000 to Rs 1.5 lakh annually depending on slab.</td></tr>
<tr><td><strong>Section 54F partial reinvestment - full exemption assumed</strong></td><td>Section 54F requires reinvestment of the ENTIRE NET sale consideration (not just LTCG) in 1 residential house for FULL exemption. Partial reinvestment gives only pro-rata exemption. Common error: reinvest only the LTCG portion and claim full Section 54F - scrutiny notice arrives at processing.</td><td>Patron computes net consideration (sale price minus brokerage and transfer expenses) and reinvestment amount. Pro-rata exemption applied where partial. CGAS deposit recommended for shortfall to preserve future reinvestment.</td></tr>
<tr><td><strong>Pre-construction interest claimed in single FY instead of 5 installments</strong></td><td>Section 24(b) proviso requires pre-construction interest (interest from loan date to end of FY before completion) to be claimed in 5 EQUAL INSTALLMENTS starting from FY of completion. Common error: claim full pre-construction interest in FY of completion - scrutiny addition plus Section 270A under-reporting penalty.</td><td>Patron computes pre-construction interest separately, splits across 5 FYs starting from completion year. Each year's installment added to current-year Section 24(b) interest within applicable cap.</td></tr>
<tr><td><strong>Co-owner files individually claiming full Rs 2 lakh SOP cap</strong></td><td>Section 26 requires share-wise computation. If property is jointly owned 50-50, each co-owner reports 50 percent of income and 50 percent of interest. Each co-owner gets Rs 2 lakh self-occupied cap proportionate to share. Common error: each co-owner claims full Rs 2 lakh cap on entire interest - over-claim disallowed at scrutiny.</td><td>Patron Section 26 share-wise workflow. Joint loan interest split per ownership ratio. Each co-owner gets full Rs 2 lakh cap on their share of interest. Family-package discount where 2-plus members file together.</td></tr>
<tr><td><strong>Section 54EC bond investment delayed beyond 6 months</strong></td><td>Section 54EC requires investment in NHAI, REC, PFC or IRFC bonds within 6 months of sale (not from ITR due date). Common error: assume the deadline is ITR due date - bond invested 4 months after ITR filed, exemption disallowed.</td><td>Patron Section 54EC calendar - bond investment scheduled within 6-month window from sale closing date. Rs 50 lakh per FY cap across all sales. 5-year lock-in tracked for future maturity reinvestment.</td></tr>
<tr><td><strong>HP loss in ITR-1 - Section 139(9) defective return</strong></td><td>ITR-1 (Sahaj) does not permit HP loss or multiple properties. Filing ITR-1 with let-out property losing money or with 2-plus properties triggers a Section 139(9) defective return notice within weeks with a 15-day cure window. Late cure makes the return invalid.</td><td>Patron auto-routes multi-property investors to ITR-2 from day one. Schedule HP with per-property working. Schedule CYLA, BFLA and CFL for loss set-off and carry-forward documentation.</td></tr>
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
<h2 class="section-title">Real Estate Investor ITR Filing Fees (AY 2026-27)</h2>
<div class="content-text">
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Fee Component</th><th>Description</th><th>Amount</th></tr></thead>
<tbody>
<tr><td>Section 139(9) defective return cure (HP loss in ITR-1)</td><td>Re-file as ITR-2 within 15-day cure window; common defective trigger for multi-property investors</td><td class="table-amount">Rs 3,999</td></tr>
<tr><td>Two-property ITR-2 (1 SOP plus 1 let-out)</td><td>Schedule HP both properties, Section 24(a)/(b), Form 26AS rental TDS reconciliation</td><td class="table-amount">Rs 5,999</td></tr>
<tr><td>Three to four property portfolio with deemed let-out</td><td>Section 23(2) optimal SOP election, deemed rent computation, full Section 24 deductions</td><td class="table-amount">Rs 7,499</td></tr>
<tr><td>Joint owner / co-owner ITR (per spouse)</td><td>Section 26 share-wise computation, joint loan interest split, both regimes comparison</td><td class="table-amount">Rs 8,999</td></tr>
<tr><td>Multi-property ITR-2 with property sale plus Section 54/54F</td><td>Section 48 indexation choice, Section 50C reconciliation, reinvestment exemption claim, CGAS instructions</td><td class="table-amount">Rs 9,999</td></tr>
<tr><td>Returning NRI with Indian property portfolio</td><td>Section 6 residency memo; Section 195 sale TDS coordination with buyer (Form 27Q); NRO/NRE/RFC routing</td><td class="table-amount">Rs 9,999</td></tr>
<tr><td>Section 50C valuation officer reference plus appeal</td><td>Section 50C(2) DVO reference application; market evidence preparation; AO and CIT(A) representation</td><td class="table-amount">Rs 12,999</td></tr>
<tr><td>HNI 5-plus property portfolio with multiple sales</td><td>Full portfolio review; multi-sale CG aggregation; Section 54EC + 54F + 54 stacking; surcharge cap analysis</td><td class="table-amount">Rs 14,999</td></tr>
<tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Standard starting price for two-property ITR-2; multi-year backlog discounts; family-package discount where 2-plus members file together</td><td class="table-amount"><strong>Starting from INR 5,999 (Excl. GST and Govt. Charges)</strong></td></tr>
</tbody>
</table>
</div>
<p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
<p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
<p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
<p style="margin-top:16px;"><strong>Get a free Real Estate Investor ITR consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20real%20estate%20investor%20ITR%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
</div>
</div>
</div>
</section>
<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">Timeline and Statutory Deadlines</h2>
<div class="content-text">
<div class="table-responsive-wrapper">
<table>
<thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
<tbody>
<tr><td><strong>Patron Engagement Turnaround</strong></td><td class="table-amount"> </td></tr>
<tr><td>Two-property simple Schedule HP</td><td class="table-amount">5 to 7 working days</td></tr>
<tr><td>Three to four property with deemed let-out</td><td class="table-amount">7 to 10 working days</td></tr>
<tr><td>Multi-property with sale plus Section 54/54F reinvestment</td><td class="table-amount">10 to 14 working days</td></tr>
<tr><td>Section 50C valuation officer reference</td><td class="table-amount">21 to 45 working days</td></tr>
<tr><td>HNI 5-plus property portfolio</td><td class="table-amount">14 to 21 working days</td></tr>
<tr><td>Returning NRI with Indian property plus sale</td><td class="table-amount">14 to 21 working days</td></tr>
<tr><td>Section 139(9) defective return cure</td><td class="table-amount">2 to 3 working days</td></tr>
<tr><td><strong>Statutory Deadlines AY 2026-27</strong></td><td class="table-amount"> </td></tr>
<tr><td>Section 54EC bond investment from sale closing date</td><td class="table-amount">Within 6 months of sale</td></tr>
<tr><td>ITR-2 non-audit cases plus CGAS deposit deadline</td><td class="table-amount">31 July 2026</td></tr>
<tr><td>E-verification window per CBDT Notification 5/2022</td><td class="table-amount">30 days from filing</td></tr>
<tr><td>Belated return Section 139(4) with Section 234F fee</td><td class="table-amount">31 December 2026</td></tr>
<tr><td>Revised return Section 139(5)</td><td class="table-amount">31 March 2027</td></tr>
<tr><td>Section 54 reinvestment window (purchase)</td><td class="table-amount">2 years from sale date</td></tr>
<tr><td>Section 54 reinvestment window (construction)</td><td class="table-amount">3 years from sale date</td></tr>
<tr><td>Updated Return ITR-U Section 139(8A)</td><td class="table-amount">31 March 2031</td></tr>
</tbody>
</table>
</div>
<div class="highlight-box" style="margin-top:16px;">
                    
                    Multi-property investors face FIVE firm dates for AY 2026-27. (1) Section 54EC bond investment - within 6 months of sale, independent of ITR filing. (2) 31 July 2026 - non-audit ITR-2 under Section 139(1) AND CGAS deposit deadline for unutilized Section 54/54F reinvestment. (3) 31 December 2026 - belated return Section 139(4) with Section 234F fee (HP loss carry-forward IS preserved - unique Section 71B exception). (4) 2-year (purchase) and 3-year (construction) reinvestment windows under Section 54/54F running from sale date, NOT from ITR due date. (5) Section 234B/234C advance tax interest applies if property sale gain pushes annual tax liability above Rs 10,000 - particularly relevant for Q4 FY sales. For ongoing rental income with significant Form 26AS TDS under Section 194-I or 194-IB, advance tax pre-payment may be needed.

                </div>
</div>
</div>
</div>
</section>
<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
<div class="section-container">
<div style="text-align:center;margin-bottom:48px;">
<div class="section-eyebrow"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg> Key Benefits</div>
<h2 class="section-title">Why Real Estate Investors Hire a CA</h2>
</div>
<div class="features-grid">
<article class="feature-card"><h3>Section 23(2) Optimal SOP Election</h3><p>Up to 2 self-occupied properties at NIL annual value. We select the optimal 2 to minimize tax across portfolio. Third onwards classified as deemed let-out at notional rent, preventing wrong-classification scrutiny.</p></article>
<article class="feature-card"><h3>Old vs New Regime Memo for Property Investors</h3><p>Old regime gives Rs 2 lakh inter-head HP loss set-off under Section 71(3A); new regime under Section 115BAC blocks entirely. Side-by-side computation with HP loss impact quantified - usually saves Rs 50,000 to Rs 1.5 lakh annually.</p></article>
<article class="feature-card"><h3>Section 50C 10 Percent Safe Harbour Mitigation</h3><p>If SDV exceeds 110 percent of sale price, SDV becomes deemed consideration. We apply mitigation routes - agreement-date SDV via documented advance, Section 50C(2) DVO reference, Section 54/54F reinvestment to absorb additional notional gain.</p></article>
<article class="feature-card"><h3>Section 54 / 54F / 54EC Reinvestment Stacking</h3><p>Section 54 (residential), Section 54F (any LTCG to residential, NET consideration), Section 54EC (Rs 50 lakh bonds). We stack exemptions where multiple sales occur and arrange CGAS deposit for unutilized reinvestment.</p></article>
<article class="feature-card"><h3>Indexation Choice for Pre-23-Jul-2024 Property</h3><p>Finance (No. 2) Act 2024 - resident individuals get choice of 12.5 percent without indexation or 20 percent with indexation. We run both computations and pick the lower tax outcome.</p></article>
<article class="feature-card"><h3>Section 71B HP Loss Carry-Forward (Late-Filing Exception)</h3><p>8-year carry-forward against future HP income; unique exception preserved even with belated return under Section 139(4). We document the carry-forward schedule across years.</p></article>
<article class="feature-card"><h3>Section 194-I and 194-IB Rental TDS Reconciliation</h3><p>Business tenant TDS at 10 percent above Rs 2.4 lakh annual; individual tenant TDS at 5 percent above Rs 50,000 monthly. We reconcile Form 26AS against rent agreements to prevent under-reporting.</p></article>
<article class="feature-card"><h3>Section 26 Co-Owner Share-Wise Computation</h3><p>Each co-owner files separately with proportionate income, interest and full Rs 2 lakh SOP cap. Family-package discount where 2-plus members file together.</p></article>
</div>
</div>
</section>
<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">Trusted by 1,800+ Real Estate Investors</h2>
<div class="content-text">
<p><strong>1,800+ Real Estate Investors Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years | Pune Mumbai Delhi NCR Bengaluru Chennai Hyderabad</strong></p>
<p>I own a self-occupied flat in Pune Kothrud, a let-out flat in Aundh, and an inherited ancestral house in Nashik that stays vacant. My previous CA showed all three under self-occupied. Patron flagged this as wrong post Finance Act 2019 - Section 23(2) caps self-occupied at TWO. Nashik recomputed as deemed let-out at notional Rs 1.4 lakh per annum with 30 percent Section 24(a) deduction. Filing was correct, no demand notice. Saved a Rs 60,000 future Section 270A penalty exposure. - Multi-property investor, Pune.</p>
<p>Sold my Mumbai Andheri flat in February 2026 for Rs 1.85 crore. Stamp duty value at registration was Rs 2.05 crore. Section 50C kicked in by Rs 15 lakh. Patron applied for Section 50C(2) DVO reference with comparable sale data and structural condition report - DVO finalized value at Rs 1.92 crore. Saved Rs 4 lakh capital gains tax versus the SDV figure. - HNI investor, Mumbai.</p>
<p>Salary of Rs 18 lakh plus let-out Bengaluru flat with Rs 4 lakh rent and Rs 5.5 lakh home loan interest. Patron showed old regime saves Rs 70,000 versus new regime because Section 71(3A) Rs 2 lakh inter-head HP loss set-off is preserved under old, blocked under new. Carry forward Rs 91,000 under Section 71B for 8 AYs. - Salaried investor, Bengaluru.</p>
<p><strong>Outcome Proof:</strong> Rs 14 lakh saved across three multi-property engagements in FY 2024-25 closing - (a) Pune Section 23(2) recomputation preventing future scrutiny, (b) Mumbai Section 50C DVO reference saving Rs 4 lakh, (c) HNI 5-property portfolio Section 54EC plus 54F stacking saving Rs 8 lakh capital gains tax.</p>
<p><strong>With offices in Pune, Mumbai, Delhi and Gurugram, Patron Accounting serves real estate investors across India.</strong></p>
</div>
</div>
</div>
</section>
<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">Self-Occupied vs Let-Out vs Deemed Let-Out - Compared</h2>
<div class="content-text">
<div class="table-responsive-wrapper">
<table>
<thead>
<tr>
<th>Aspect</th>
<th>Self-Occupied (1st or 2nd)</th>
<th>Let-Out</th>
<th>Deemed Let-Out (3rd onwards)</th>
</tr>
</thead>
<tbody>
<tr><td><strong>Annual Value</strong></td><td>NIL (Section 23(2))</td><td>Higher of expected rent or actual rent (Section 23(1))</td><td>Notional - higher of municipal value or fair rent (capped by Standard Rent under Rent Control Acts)</td></tr>
<tr><td><strong>Maximum Properties</strong></td><td>2 (post Finance Act 2019)</td><td>No limit</td><td>All properties beyond 2 self-occupied</td></tr>
<tr><td><strong>Municipal Tax Deduction</strong></td><td>Not applicable (NAV = NIL)</td><td>Yes, paid basis only</td><td>Yes, paid basis only</td></tr>
<tr><td><strong>Section 24(a) 30 percent Standard Deduction</strong></td><td>NIL (no NAV)</td><td>30 percent of Net Annual Value</td><td>30 percent of Net Annual Value</td></tr>
<tr><td><strong>Section 24(b) Interest Deduction</strong></td><td>Rs 2 lakh aggregate cap (old regime only); ZERO new regime</td><td>FULL deduction (no cap, both regimes)</td><td>FULL deduction (no cap, both regimes)</td></tr>
<tr><td><strong>Pre-Construction Interest</strong></td><td>In 5 installments, within Rs 2 lakh cap</td><td>In 5 installments, no cap</td><td>In 5 installments, no cap</td></tr>
<tr><td><strong>Vacancy Reduction Section 23(1)(c)</strong></td><td>Not applicable</td><td>Available if let-out part of year and vacant for balance</td><td>Not applicable (always notional)</td></tr>
<tr><td><strong>Old Regime - Inter-Head Loss Set-Off</strong></td><td>Up to Rs 2 lakh against salary etc. (Section 71(3A))</td><td>Up to Rs 2 lakh against salary etc. (Section 71(3A))</td><td>Up to Rs 2 lakh against salary etc. (Section 71(3A))</td></tr>
<tr><td><strong>New Regime - Inter-Head Loss Set-Off</strong></td><td>Blocked entirely (Section 115BAC)</td><td>Blocked - intra-head only</td><td>Blocked - intra-head only</td></tr>
<tr><td><strong>Carry Forward Section 71B</strong></td><td>8 AYs against future HP income only</td><td>8 AYs against future HP income only</td><td>8 AYs against future HP income only</td></tr>
<tr><td><strong>Co-Ownership Section 26</strong></td><td>Each co-owner gets full Rs 2 lakh cap proportionate</td><td>Each co-owner taxed on share</td><td>Each co-owner taxed on share</td></tr>
<tr><td><strong>Capital Gains on Sale</strong></td><td>Section 48 plus Section 50C apply equally</td><td>Section 48 plus Section 50C apply equally</td><td>Section 48 plus Section 50C apply equally</td></tr>
<tr><td><strong>ITR Form</strong></td><td>ITR-2 if 2-plus properties total</td><td>ITR-2</td><td>ITR-2</td></tr>
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
<h2 class="section-title">Adjacent Patron Services</h2>
<div class="content-text">
<ul>
<li><strong><a href="/income-tax-return/">Income Tax Return Filing Master Hub</a></strong> - hub-and-spoke routing across all 7 ITR forms and 14 sub-services.</li>
<li><strong><a href="/itr-for-property-sale/">ITR for Property Sale (Single Transaction Focus)</a></strong> - for one-time property sale scenarios; complements this multi-property service for investors with a single sale event.</li>
<li><strong><a href="/itr-for-capital-gains/">ITR for Capital Gains (HNI Multi-Asset)</a></strong> - for investors with capital gains across equity, mutual funds, gold, bonds alongside property.</li>
<li><strong><a href="/itr-for-nris/">ITR for NRIs (Returning NRI with Indian Properties)</a></strong> - Section 6 residency, Section 195 property TDS, NRO/NRE/RFC routing for NRI property investors.</li>
<li><strong><a href="/itr-for-salary/">ITR for Salaries (Salaried Investors with Side Property Income)</a></strong> - for salaried employees with side property portfolio; Schedule HP plus Schedule S filing.</li>
<li><strong><a href="/tax-planning-services/">Tax Planning Services</a></strong> - regime selection, HUF tagging, advance tax planning, pre-sale Section 54EC bond timing.</li>
<li><strong><a href="/income-tax-notice-for-defective-return/">Income Tax Notice for Defective Return (Section 139(9))</a></strong> - 15-day cure window for HP-loss-in-ITR-1 defective returns and similar Schedule HP misclassifications.</li>
<li><strong><a href="/income-tax-notice/">Income Tax Notice Response (Sections 143, 148)</a></strong> - Section 50C scrutiny, Section 23(2) classification challenges, deemed rent disputes representation.</li>
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
<ul>
<li><strong>Income Tax Act, 1961</strong> - governing statute for AY 2026-27 multi-property returns (FY 2025-26 income) per Section 536(2)(c) of Income Tax Act 2025. <a href="https://www.incometax.gov.in" rel="noopener" target="_blank">Income Tax Department e-filing portal</a>.</li>
<li><strong>Income Tax Act, 2025</strong> - applies to Tax Year 2026-27 onwards (FY 2026-27 income from 1 April 2026); house property provisions retained substantively.</li>
<li><strong>Section 22</strong> - charging section for Income from House Property; annual value of property is taxable irrespective of actual rent received.</li>
<li><strong>Section 23(1)</strong> - annual value for let-out property; higher of expected rent (MV/FR capped by SR) and actual rent received.</li>
<li><strong>Section 23(2)</strong> - self-occupied annual value; up to 2 properties at NIL annual value post Finance Act 2019 (raised from 1 effective AY 2020-21); third onwards = deemed let-out.</li>
<li><strong>Section 23(1)(c)</strong> - vacancy reduction; proportionate reduction of expected rent if let-out property was vacant for part of FY.</li>
<li><strong>Section 24(a)</strong> - 30 percent standard deduction; flat 30 percent of Net Annual Value; available both regimes for let-out and deemed let-out.</li>
<li><strong>Section 24(b)</strong> - interest on borrowed capital; self-occupied Rs 2 lakh cap (old regime only); let-out unlimited (both regimes); pre-construction interest in 5 equal installments; Rs 30,000 cap if construction not completed within 5 years.</li>
<li><strong>Section 25</strong> - disallowance; interest payable outside India without TDS not deductible.</li>
<li><strong>Section 26</strong> - co-ownership; each co-owner taxed individually on share; each gets full Rs 2 lakh self-occupied cap proportionate.</li>
<li><strong>Section 27</strong> - deemed ownership; spouse/minor/HUF members may be deemed owners; clubbing under Section 64.</li>
<li><strong>Section 48</strong> - capital gains computation; sale price minus indexed cost; resident pre-23 July 2024 property: choice of 12.5 percent without indexation or 20 percent with indexation under Finance (No. 2) Act 2024.</li>
<li><strong>Section 50C</strong> - stamp duty value rule; SDV is full value of consideration if SDV exceeds 110 percent of sale price (10 percent safe harbour post Finance Act 2020); agreement-date SDV with documented advance via banking channel.</li>
<li><strong>Section 50C(2)</strong> - Departmental Valuation Officer reference; if taxpayer disputes SDV, lower of DVO value or SDV is used.</li>
<li><strong>Section 54</strong> - residential to residential rollover; LTCG on residential house exempted on reinvestment in 1 (or 2 if LTCG up to Rs 2 crore once-in-lifetime) residential house within 1 year before / 2 years after sale (3 years if construction).</li>
<li><strong>Section 54F</strong> - any LTCG to residential; any LTCG (other than residential house sale) exempted on reinvestment of NET sale consideration in 1 residential house; pro-rata for partial.</li>
<li><strong>Section 54EC</strong> - capital gains bonds; LTCG on land/building exempted up to Rs 50 lakh on investment in NHAI, REC, PFC or IRFC bonds within 6 months of sale; 5-year lock-in.</li>
<li><strong>Section 56(2)(x)(b)</strong> - buyer-side tax; if SDV exceeds purchase price by more than Rs 50,000, the difference taxed as Other Sources for buyer.</li>
<li><strong>Section 71(3A)</strong> - HP loss inter-head set-off; Rs 2 lakh per FY cap against other heads (old regime only); excess carried forward under Section 71B.</li>
<li><strong>Section 71B</strong> - carry forward HP loss; 8 AYs against HP income only; available even with late filing (unique exception).</li>
<li><strong>Section 115BAC</strong> - new tax regime; no SOP interest deduction; let-out interest restricted to intra-head; no inter-head HP loss set-off.</li>
<li><strong>Section 139(1)</strong> - mandatory return filing; AY 2026-27 due date 31 July 2026 for ITR-2.</li>
<li><strong>Section 139(9)</strong> - defective return notice; 15-day cure window; common for HP loss or multiple properties in ITR-1.</li>
<li><strong>Section 194-I</strong> - business tenant TDS at 10 percent on rent above Rs 2.4 lakh annually (paid to landlord).</li>
<li><strong>Section 194-IA</strong> - property buyer TDS at 1 percent on property purchase price above Rs 50 lakh.</li>
<li><strong>Section 194-IB</strong> - individual tenant TDS at 5 percent on rent above Rs 50,000 per month.</li>
<li><strong>Section 195</strong> - TDS on payments to non-residents; buyer deducts 12.5 percent LTCG or 30 percent STCG on full sale value when seller is NRI; Form 27Q.</li>
<li><strong>Section 197</strong> - Lower Deduction Certificate; Form 13 application BEFORE sale to limit TDS to actual liability.</li>
<li><strong>Section 234F</strong> - late filing fee Rs 5,000 (Rs 1,000 if income up to Rs 5 lakh).</li>
<li><strong>Sections 234A, 234B, 234C</strong> - interest on tax and advance tax shortfall.</li>
<li><strong>Section 270A</strong> - 50 percent under-reporting penalty; 200 percent mis-reporting.</li>
<li><strong>Capital Gains Account Scheme (CGAS) 1988</strong> - deposit scheme for unutilized Section 54/54F reinvestment; deposit by ITR due date.</li>
<li><strong>Income Tax Rules 1962</strong> - Rule 5 standard deduction, Rule 4 unrealised rent computation.</li>
<li><strong>Finance Act 2019</strong> - Section 23(2) raised from 1 to 2 self-occupied properties from AY 2020-21.</li>
<li><strong>Finance Act 2020</strong> - Section 50C tolerance increased from 5 percent to 10 percent from AY 2020-21.</li>
<li><strong>Finance (No. 2) Act 2024</strong> - Section 48 resident pre-23 July 2024 property gets choice of 12.5 percent without indexation or 20 percent with.</li>
<li><strong>CBDT Notification 70/2025 - CII for FY 2025-26 = 363</strong> - indexation factor for Section 48 indexed cost computation; base year FY 2001-02 = 100.</li>
<li><strong>CBDT Circular 8/2018</strong> - Section 50C agreement-date valuation clarification.</li>
<li><strong>State Stamp Acts</strong> - Maharashtra Stamp Act, Delhi Stamp Act, Karnataka Stamp Act etc.; governs SDV.</li>
<li><strong>Rent Control Acts</strong> - Maharashtra Rent Control Act 1999, Delhi Rent Control Act, Tamil Nadu Buildings Lease and Rent Control Act etc.; cap standard rent.</li>
<li><strong>Transfer of Property Act 1882</strong> - Section 53A part-performance for deemed ownership under Section 27.</li>
<li><strong>Central Board of Direct Taxes (CBDT)</strong> - administrative authority. <a href="https://incometaxindia.gov.in/Pages/communications/notifications.aspx" rel="noopener" target="_blank">CBDT Notifications</a>.</li>
</ul>
</div>
</div>
</div>
</section>
<!-- FAQ SECTION -->
<section class="content-section" id="faq-section" style="background-color: #ffffff;">
<div class="content-container">
<div class="text-content">
            <div class="faq-expanded">
                <aside class="faq-expanded__aside">
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Long-tail answers on multi-property ITR filing for AY 2026-27 - rental income across properties, Section 23(2) self-occupied limit, Section 24(b) interest deduction, Section 50C stamp duty value rule, deemed rent, Section 71(3A) inter-head set-off cap, Section 54/54F/54EC reinvestment exemptions and new regime impact.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is rental income from multiple properties taxed in India?</h3>
                        <div class="faq-expanded__a"><p>Rental income from multiple properties is taxed under the Income from House Property head (Sections 22-27 ITA 1961), filed in Schedule HP of ITR-2. Each property is reported separately. Self-occupied properties (max 2 post Finance Act 2019) have NIL Annual Value. Let-out properties take Annual Value as higher of expected rent or actual rent. From Annual Value, deduct municipal taxes paid (Net Annual Value), then 30 percent under Section 24(a) standard deduction, then home loan interest under Section 24(b) - full deduction for let-out, Rs 2 lakh cap for self-occupied old regime.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How many properties can be claimed as self-occupied in 2026?</h3>
                        <div class="faq-expanded__a"><p>Up to TWO properties under Section 23(2) post Finance Act 2019 amendment. Both have Annual Value = NIL. The aggregate Section 24(b) home loan interest deduction across both self-occupied properties is capped at Rs 2 lakh (old regime only; ZERO under new regime). The third self-occupied-style property onwards is automatically treated as DEEMED LET-OUT and taxed at notional rent. Even if you genuinely live in 3 houses, the third onwards must be classified as deemed let-out.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between Section 24(b) for self-occupied and let-out?</h3>
                        <div class="faq-expanded__a"><p>Self-occupied property: Section 24(b) interest deduction is capped at Rs 2 lakh per FY (aggregate across all SOPs); available only under old regime. Reduced to Rs 30,000 if loan was for repair/renovation/reconstruction OR if construction not completed within 5 years. Let-out property: Section 24(b) FULL interest deduction with no upper cap; available under both old and new regimes. However, under new regime any resulting house property loss cannot be set off against salary or other income heads (intra-head only).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">When does Section 50C stamp duty value rule apply on property sale?</h3>
                        <div class="faq-expanded__a"><p>Section 50C applies when actual sale consideration is LESS than the Stamp Duty Value (SDV) by MORE than 10 percent (safe harbour from AY 2020-21 per Finance Act 2020). If yes, the SDV is deemed full value of consideration for capital gains computation under Section 48. If SDV is within 110 percent of sale price, actual sale price is accepted. Mitigation: agreement-date SDV available if part payment received via cheque/RTGS/UPI before registration; Section 50C(2) DVO reference available if taxpayer disputes SDV.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is deemed rent computed on a vacant third property?</h3>
                        <div class="faq-expanded__a"><p>For third property onwards (when 2 are self-occupied), expected rent under Section 23 is computed as the higher of Municipal Value (assigned by local body for property tax) and Fair Rent (rent that similar property in same locality would fetch). If the property is in a Rent Control Act state (Maharashtra, Delhi, Karnataka, Tamil Nadu etc.), the expected rent cannot exceed the Standard Rent fixed under that Act. From this notional rent, deduct municipal taxes, take 30 percent Section 24(a) standard deduction, then full Section 24(b) interest (if any loan).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the Rs 2 lakh house property loss set-off cap?</h3>
                        <div class="faq-expanded__a"><p>Section 71(3A) caps house property loss inter-head set-off at Rs 2 lakh per FY against income from other heads (salary, business, capital gains, other sources). Available only under old regime. Excess loss is carried forward under Section 71B for 8 assessment years against future HP income only. Under the new regime (Section 115BAC), inter-head set-off of HP loss is BLOCKED entirely - the loss can only adjust within the HP head or carry forward. This is the single largest tradeoff for high-interest borrowers between old and new regimes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How to claim Section 54, 54F, 54EC reinvestment exemptions?</h3>
                        <div class="faq-expanded__a"><p>Section 54 (residential to residential): reinvest LTCG in 1 (or 2 if LTCG up to Rs 2 crore once-in-lifetime) residential house within 1 year before or 2 years after sale (3 years if construction). Section 54F (any LTCG to residential): reinvest entire NET sale consideration in 1 residential house for full exemption (pro-rata for partial). Section 54EC: invest LTCG up to Rs 50 lakh in NHAI/REC/PFC/IRFC bonds within 6 months of sale; 5-year lock-in. If reinvestment not utilized by ITR due date, deposit unutilized amount in Capital Gains Account Scheme (CGAS).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I claim home loan interest under the new tax regime?</h3>
                        <div class="faq-expanded__a"><p>Partially. For SELF-OCCUPIED property: NO - Section 115BAC explicitly disallows Section 24(b) interest deduction. For LET-OUT or DEEMED LET-OUT property: YES - full interest deduction allowed; however, any net loss from house property cannot be set off against other heads under new regime. The interest deduction on let-out property is restricted to extinguishing the rental income from that property (intra-head). Excess loss can only carry forward under Section 71B against future HP income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Multiple property pe tax kaise lagta hai aur deemed rent kya hota hai? (How is tax on multiple properties applied and what is deemed rent)</h3>
                        <div class="faq-expanded__a"><p>Multiple property wale individual investors ko ITR-2 file karna padta hai Schedule HP ke saath. Finance Act 2019 ke baad Section 23(2) ke under maximum 2 properties self-occupied claim kar sakte hain (Annual Value NIL) - third property onwards automatically deemed let-out hota hai aur notional rent par tax lagta hai. Deemed rent calculate hota hai municipal value aur fair rent mein se jo zyada ho - Rent Control Act state mein Standard Rent cap apply hota hai. Section 24(a) 30 percent standard deduction aur Section 24(b) home loan interest milta hai. Self-occupied par Rs 2 lakh interest cap hai (old regime only), let-out par unlimited. New regime Section 115BAC mein SOP interest deduction NAHI milta aur inter-head loss set-off bhi block hai. Section 50C ke under sale price ka 110 percent se zyada agar SDV hai to SDV ko sale value maana jata hai capital gains ke liye. Section 54, 54F, 54EC ke under reinvestment se exemption mil sakti hai. Last date 31 July 2026 hai. Patron Accounting Rs 5,999 se start hone wali filing offer karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>

<!-- Quick Answers -->
<div class="highlight-box" style="margin-top:32px;">
<p><strong>Quick Answers</strong></p>
<ul>
<li><strong>ITR form for multi-property investors?</strong> ITR-2 mandatory for 2-plus properties or any capital gains. ITR-1 NOT allowed for HP loss or multiple properties.</li>
<li><strong>Self-occupied property limit?</strong> 2 properties under Section 23(2) post Finance Act 2019. Third onwards = deemed let-out at notional rent.</li>
<li><strong>Section 24(a) standard deduction?</strong> 30 percent of Net Annual Value (NAV = Gross Annual Value minus municipal taxes paid). Both regimes for let-out.</li>
<li><strong>Section 24(b) interest cap?</strong> Rs 2 lakh aggregate for self-occupied (old regime only). FULL deduction for let-out (both regimes).</li>
<li><strong>Section 71(3A) loss cap?</strong> Rs 2 lakh inter-head set-off per FY against other income heads. Old regime only. New regime blocks entirely.</li>
<li><strong>Section 50C safe harbour?</strong> 10 percent post Finance Act 2020. If SDV exceeds 110 percent of sale price, SDV becomes deemed sale value.</li>
<li><strong>Section 54EC bond cap?</strong> Rs 50 lakh per FY across all sales. NHAI, REC, PFC, IRFC bonds. 5-year lock-in. Within 6 months of sale.</li>
<li><strong>CGAS deposit deadline?</strong> Before ITR due date (31 July 2026 for AY 2026-27 non-audit). For unutilized Section 54/54F reinvestment.</li>
<li><strong>Section 71B carry-forward?</strong> 8 AYs against HP income only. Unique exception - available even with late filing under Section 139(4).</li>
<li><strong>Pre-construction interest?</strong> 5 equal installments starting from FY of completion under Section 24(b) proviso.</li>
</ul>
</div>
</div>
</div>
</section>
<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
<div class="content-container">
<div class="text-content">
<h2 class="section-title">AY 2026-27 Multi-Property ITR Countdown - Engage by 15 July 2026</h2>
<div class="content-text">
                
                Multi-property investors face five firm dates for AY 2026-27. Section 54EC bond investment must be made within 6 months of sale (independent of ITR filing) - missed window = full exemption disallowance. 31 July 2026 is the ITR-2 due date AND the CGAS deposit deadline for unutilized Section 54/54F reinvestment. Late filing under Section 139(4) until 31 December 2026 triggers Section 234F fee up to Rs 5,000 plus Section 234A interest at 1 percent per month from 1 August 2026 - Section 71B HP loss carry-forward IS preserved (unique exception). For Q4 FY sales, Section 234B/234C advance tax interest applies if gain pushes liability above Rs 10,000. For NRI property sellers, Section 197 Form 13 must be obtained BEFORE sale closing. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 15-minute portfolio review - we respond within 2 hours.

            </div>
</div>
</div>
</section>
<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
<div class="content-container">
<div class="text-content">
<h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 Multi-Property ITR</h2>
<div class="content-text" style="text-align:left;">
<p>Multi-property ITR is the area where Section-by-Section literal reading produces the largest classification errors. A third self-occupied property labelled as such because the family genuinely lives in it converts NIL annual value into Rs 1.5 lakh deemed rent - a Rs 30,000 to Rs 60,000 tax difference at typical slab. A new regime election by a high-interest borrower with let-out property forfeits the Rs 2 lakh inter-head loss set-off - costing Rs 40,000 to Rs 70,000 annually for the entire loan tenure. A property sale at Rs 5 crore against Rs 5.6 crore SDV triggers Section 50C deeming a Rs 60 lakh notional gain on top of actual; without the agreement-date or DVO mitigation, additional tax is Rs 7.5 lakh.</p>
<p>Patron Accounting has filed multi-property ITRs for individual real estate investors across Pune, Mumbai, Delhi NCR, Bengaluru, Hyderabad and Chennai since 2019. Whether your portfolio is 2 flats and 1 inherited house, a 5-shop commercial bouquet in Mumbai, or a 12-property HUF spread across 3 cities, the correct answer always begins with Section 23 classification and the Standard Rent ceiling. With offices in Pune, Mumbai, Delhi and Gurugram, every engagement includes optimal Section 23(2) self-occupied election, regime arbitrage memo, Section 50C reconciliation, reinvestment exemption planning and 12 months of post-filing Section 139(9), 143(1)(a), 142(1) and 148 notice support.</p>
<p>Ready to file your AY 2026-27 multi-property ITR? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 15-minute portfolio review. We respond within 2 hours during business hours.</p>
</div>
<div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
<a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">📞 Call +91 945 945 6700</a>
<a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20real%20estate%20investor%20ITR%20filing." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" target="_blank">💬 WhatsApp Us</a>
<a href="/cdn-cgi/l/email-protection#4c25222a230c3c2d383e23222d2f2f2339223825222b622f2321" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">✉️ Email Us</a>
</div>
<p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
</div>
</div>
</section>
<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
<div class="content-container">
<div class="text-content">
<h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pan-India Coverage and Related Patron Services</h2>
<p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Multi-property ITR filing is delivered from our Pune, Mumbai, Delhi and Gurugram offices to real estate investors across India - Pune, Mumbai, Delhi NCR, Bengaluru, Hyderabad, Chennai, Kolkata. Remote consultations across all states. Indian POA holders can attend in-person at any of our four offices on the investor's behalf. Explore the master ITR hub and adjacent compliance services below.</p>
<div class="pa-cross-block">
<h3 class="pa-cross-title">Related Patron Services</h3>
<div class="pa-cross-grid">
<a class="pa-cross-card" href="/income-tax-return/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>ITR Filing Master Hub</strong><span>All 7 ITR forms; 14 sub-services</span></div>
</a>
<a class="pa-cross-card" href="/itr-for-property-sale/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>ITR for Property Sale</strong><span>Single transaction focus</span></div>
</a>
<a class="pa-cross-card" href="/itr-for-capital-gains/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>ITR for Capital Gains</strong><span>HNI multi-asset across all classes</span></div>
</a>
<a class="pa-cross-card" href="/itr-for-nris/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>ITR for NRIs</strong><span>NRI property investor with Indian assets</span></div>
</a>
<a class="pa-cross-card" href="/itr-for-salary/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>ITR for Salary</strong><span>Salaried investors with side property</span></div>
</a>
<a class="pa-cross-card" href="/tax-planning-services/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>Tax Planning Services</strong><span>Regime, HUF tagging, advance tax</span></div>
</a>
<a class="pa-cross-card" href="/income-tax-notice-for-defective-return/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>Defective Return Notice</strong><span>Section 139(9) 15-day cure</span></div>
</a>
<a class="pa-cross-card" href="/income-tax-notice/">
<div class="pa-cross-icon"><svg fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
<div class="pa-cross-text"><strong>Income Tax Notice Response</strong><span>143/148 plus Section 50C scrutiny</span></div>
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
<p><strong>Content Created:</strong> 11 May 2026  |  <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span>  |  <strong>Next Review:</strong> 11 November 2026  |  <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
<p>Tier 1 annual review plus post-Budget and post-CBDT notification refresh. Triggers for review: Section 23(2) self-occupied limit, Section 24(b) interest caps, Section 50C safe harbour percentage, Section 54/54F/54EC reinvestment thresholds, CBDT Cost Inflation Index notifications (CII for FY 2025-26 = 363 per CBDT Notification 70/2025), CBDT circulars on Section 50C agreement-date valuation, Section 234F late filing fees, Section 115BAC new regime amendments, Income Tax Act 2025 transition for Tax Year 2026-27, Finance Act amendments to capital gains indexation under Section 48 and Rent Control Act updates affecting Standard Rent computation. Sources: Income Tax Department portal (incometax.gov.in), CBDT notifications (incometaxindia.gov.in), Finance Act 2026, ICAI Direct Tax Committee publications and State Stamp Acts.</p>
</div>
</div>
</section>
<!-- STICKY WHATSAPP BAR -->
@include('layouts.itr-season-strip')
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
<script id="wf_script" src="https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79"></script>
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection