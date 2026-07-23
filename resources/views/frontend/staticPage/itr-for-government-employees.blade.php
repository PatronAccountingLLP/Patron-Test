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
    <title>ITR for Govt, PSU, Defence Employees: Section 10 Guide</title>
    <meta name="description" content="ITR for central + state government, PSU, defence personnel. Section 10(10AA), 80CCD(1B) NPS, defence allowances, Form 10E. Starts at Rs 2,499.">
    <link rel="canonical" href="/itr-for-government-employees">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Govt, PSU, Defence Employees: Section 10 Guide | Patron Accounting">
    <meta property="og:description" content="ITR for central + state government, PSU, defence personnel. Section 10(10AA), 80CCD(1B) NPS, defence allowances, Form 10E. Starts at Rs 2,499.">
    <meta property="og:url" content="/itr-for-government-employees/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/itr-for-government-employees-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Govt, PSU, Defence Employees: Section 10 Guide | Patron Accounting">
    <meta name="twitter:description" content="ITR for central + state government, PSU, defence personnel. Section 10(10AA), 80CCD(1B) NPS, defence allowances, Form 10E. Starts at Rs 2,499.">
    <meta name="twitter:image" content="/images/itr-for-government-employees-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/itr-for-government-employees/#breadcrumb",
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
          "name": "Income Tax Return Filing",
          "item": "/income-tax-return/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Government Employees",
          "item": "/itr-for-government-employees/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/itr-for-government-employees/#faq",
      "datePublished": "2026-05-11T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Are government employees fully exempt from leave encashment tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Central Government and State Government employees: YES, FULLY EXEMPT under Section 10(10AA)(i) on retirement, superannuation, or resignation. Includes IAS, IPS, IRS, IFS, Indian Forest Service, defence personnel, paramilitary, police, Indian Railways. Non-government employees including PSU employees (BHEL, NTPC, ONGC, Coal India), nationalized bank employees (SBI, PNB, BoB), LIC, statutory corporations - exemption capped at Rs 25 lakh under Section 10(10AA)(ii) per Notification S.O. 2276(E) dated 24 May 2023 (raised from Rs 3 lakh)."
          }
        },
        {
          "@type": "Question",
          "name": "Are PSU employees treated as government for tax purposes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "NO for Section 10(10AA), 10(10) and 10(10A) full exemption purposes. PSU employees, nationalized bank employees, statutory corporation employees, LIC employees, public sector insurance employees are treated as NON-GOVERNMENT - leave encashment capped at Rs 25 lakh, gratuity at Rs 20 lakh, commuted pension partial. PSU employees DO get Section 80CCD(2) NPS employer contribution at 10 percent of Basic plus DA (Central Government employees get 14 percent). This is the most common misclassification error in government employee ITRs."
          }
        },
        {
          "@type": "Question",
          "name": "How is disability pension taxed for armed forces?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FULLY EXEMPT per CBDT Instruction F.No. 200/51/99-ITA1. Both service component AND disability element of disability pension are exempt from income tax. Applies to armed forces personnel of all ranks who are (a) invalided out due to disability boarded by Release Medical Board, OR (b) whose disability is attributable to or aggravated by service. Documentation: Release Medical Board (RMB) report and disability pension order. Common error: claiming only the disability element - both components are exempt under the CBDT instruction."
          }
        },
        {
          "@type": "Question",
          "name": "Which defence allowances are exempt under Section 10(14)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 10(14) read with Rule 2BB exempts specific defence allowances within prescribed monthly limits: Siachen Allowance Rs 7,000 per month; High Altitude (9,000 to 15,000 ft) Rs 1,060 per month; High Altitude (above 15,000 ft) Rs 1,600 per month; Counter-Insurgency Rs 3,900 per month (JCO/OR) and Rs 4,200 per month (officers); High Active Field Area Rs 4,200 per month; Compensatory Field Area Rs 2,600 per month; Modified Field Area Rs 1,000 per month; Border/Remote Rs 200 to Rs 1,300 per month; Uniform/Kit Maintenance up to actual expenditure."
          }
        },
        {
          "@type": "Question",
          "name": "How is NPS contribution deducted for central government employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three layers. Section 80CCD(1) - 10 percent of Basic plus DA employee contribution within Section 80CCE Rs 1.5 lakh aggregate cap (with Section 80C, 80CCC). Section 80CCD(1B) - additional Rs 50,000 above the Rs 1.5 lakh cap; available BOTH old and new regimes. Section 80CCD(2) - employer contribution by Central Government up to 14 percent of Basic plus DA (10 percent for State Government and PSU); NOT subject to 80CCE cap; available BOTH regimes. Total potential NPS deduction for Central Government employee: Rs 1.5 lakh plus Rs 0.5 lakh plus 14 percent of (Basic plus DA)."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should a government employee use?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 (Sahaj) if you have salary income plus ONE house property plus interest income or agriculture income up to Rs 5,000, with total income up to Rs 50 lakh. ITR-2 if you have any capital gains, multiple house properties, foreign income, foreign assets, total income above Rs 50 lakh, or LTCG above Rs 1.25 lakh under Section 112A. Government employees with home loan and salary typically use ITR-1; defence officers with multi-asset HNI portfolios typically use ITR-2."
          }
        },
        {
          "@type": "Question",
          "name": "How to claim Section 89 relief for Pay Commission arrears?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Three steps. (1) Compute year-wise reallocation of the arrears to actual FYs of accrual using Rule 21A. (2) Compute Section 89 relief as current year tax with arrears minus current year tax without arrears minus sum of incremental hypothetical year-wise taxes. (3) File Form 10E ONLINE on incometax.gov.in BEFORE submitting your ITR; failure to file Form 10E first results in full disallowance of arrears relief regardless of underlying eligibility. Applies to 7th Pay Commission arrears, DA arrears, promotion-based pay fixation, MACP, NFU."
          }
        },
        {
          "@type": "Question",
          "name": "Old vs new regime - which is better for government employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "OLD regime is typically better for government employees due to abundant deduction stack: Section 16 standard deduction Rs 50,000 plus Section 80C Rs 1.5 lakh (GPF, PPF, ELSS, principal home loan) plus Section 80CCD(1B) Rs 50,000 NPS additional plus Section 80D Rs 25,000 to 50,000 plus HRA exemption (if rent paid) plus LTC exemption plus Section 24(b) Rs 2 lakh interest. Total typical deductions Rs 4 to 6 lakh. New regime: standard deduction Rs 75,000 plus Section 80CCD(2) employer NPS only - typically Rs 1 lakh deductions. For Central Government employees with home loan and family, OLD regime saves Rs 30,000 to Rs 1 lakh annually."
          }
        },
        {
          "@type": "Question",
          "name": "Sarkari naukri ITR kaise file karein AY 2026-27 ke liye? (How to file government job ITR for AY 2026-27)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "AY 2026-27 ke liye government employee ITR-1 ya ITR-2 file kar sakte hain. Last date 31 July 2026 hai. Central aur State government employees ko Section 10(10AA), Section 10(10) aur Section 10(10A) ke under FULL exemption milti hai retirement par - leave encashment, gratuity aur commuted pension par koi tax nahi. PSU employees aur nationalized bank employees (SBI, PNB) ko NON-government treatment milta hai - Rs 25 lakh leave encashment cap, Rs 20 lakh gratuity cap. Defence personnel ko Section 10(14) Rule 2BB ke under Siachen Rs 7,000 per month, high altitude Rs 1,060-1,600, counter-insurgency Rs 3,900-4,200 exempt hota hai. Disability pension CBDT F.No. 200/51/99-ITA1 ke under FULLY EXEMPT. Pay Commission arrears par Section 89 relief lene ke liye Form 10E ITR se PEHLE file karna zaroori hai - baad mein file kiya to relief disallowed ho jata hai. NPS Section 80CCD(2) employer contribution Central Government ke liye 14 percent hota hai, State aur PSU ke liye 10 percent. Old regime usually better hota hai government employees ke liye due to GPF, NPS, home loan, HRA stack. Patron Accounting Rs 2,499 se start hone wali filing offer karta hai. Call +91 945 945 6700."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/itr-for-government-employees/#service",
      "name": "ITR for Government Employees",
      "url": "/itr-for-government-employees/",
      "description": "End-to-end CA-assisted Income Tax Return filing for Central Government, State Government, PSU and Defence employees under Section 139 of the Income Tax Act 1961 for AY 2026-27. Covers the employer-class-specific exemption profile that differs substantially from private-sector salaried filings: Section 10(10AA)(i) FULL leave encashment exemption (Central and State government) versus the Rs 25 lakh cap for PSU and non-government employees per Notification S.O. 2276(E) dated 24 May 2023; Section 10(10) FULL gratuity exemption for government versus Rs 20 lakh cap under Payment of Gratuity Act 1972; Section 10(10A) FULL commuted pension exemption for government; Section 10(14) read with Rule 2BB defence allowances (Siachen Rs 7,000/month, high altitude tier, counter-insurgency, field area); CBDT Instruction F.No. 200/51/99-ITA1 disability pension full exemption; Section 10(18) gallantry award pension; Section 10(19) family pension to armed forces; NPS Section 80CCD(1B) Rs 50,000 additional plus Section 80CCD(2) employer contribution at 14 percent of Basic plus DA for Central Government (10 percent for State and PSU); Section 89 relief on 7th Pay Commission arrears with mandatory Form 10E filing BEFORE the ITR; and Form 16 reconciliation from PAO, PCDA(O) Pune, PCDA Allahabad, State Treasury or PSU HR depending on employer class.",
      "serviceType": "Government Employee Income Tax Return Filing",
      "areaServed": {
        "@type": "Country",
        "name": "India",
        "sameAs": "https://en.wikipedia.org/wiki/India"
      },
      "provider": {
        "@id": "/#organization"
      },
      "about": [
        {
          "@type": "Thing",
          "name": "Income tax in India",
          "sameAs": "https://en.wikipedia.org/wiki/Income_tax_in_India"
        },
        {
          "@type": "Thing",
          "name": "Public sector undertakings in India",
          "sameAs": "https://en.wikipedia.org/wiki/Public_sector_undertakings_in_India"
        },
        {
          "@type": "Thing",
          "name": "Indian Armed Forces",
          "sameAs": "https://en.wikipedia.org/wiki/Indian_Armed_Forces"
        },
        {
          "@type": "Thing",
          "name": "National Pension System",
          "sameAs": "https://en.wikipedia.org/wiki/National_Pension_System"
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Government Employee ITR Filing Tiers (AY 2026-27)",
        "itemListElement": [
          {
            "@type": "Offer",
            "name": "ITR-1 Government Employee Standard",
            "priceCurrency": "INR",
            "price": "2499",
            "description": "Form 16 reconciliation from PAO, PCDA, State Treasury or PSU HR; Section 10/16/80 deductions; NPS Section 80CCD; e-verification"
          },
          {
            "@type": "Offer",
            "name": "Family Pensioner ITR (Section 57 / Section 10(19))",
            "priceCurrency": "INR",
            "price": "2999",
            "description": "Family pension Section 57 standard deduction; armed forces operational-duty exemption under Section 10(19)"
          },
          {
            "@type": "Offer",
            "name": "Section 89 plus Form 10E Arrears Relief Filing",
            "priceCurrency": "INR",
            "price": "4499",
            "description": "7th Pay Commission, DA or promotion arrears year-wise reallocation under Rule 21A; Form 10E filed BEFORE ITR submission"
          },
          {
            "@type": "Offer",
            "name": "ITR-2 Government Employee with Capital Gains",
            "priceCurrency": "INR",
            "price": "4999",
            "description": "ITR-1 inclusions plus Schedule CG, Section 112A LTCG at 12.5 percent above Rs 1.25 lakh, multiple house property"
          },
          {
            "@type": "Offer",
            "name": "Defence Personnel ITR with Rule 2BB Allowances",
            "priceCurrency": "INR",
            "price": "4999",
            "description": "Siachen, high altitude, counter-insurgency, field area exemption optimization; posting reconciliation; PCDA Form 16 reconciliation"
          },
          {
            "@type": "Offer",
            "name": "Retirement-Year Filing (Full Exemption Stack)",
            "priceCurrency": "INR",
            "price": "6499",
            "description": "Leave encashment, gratuity, commuted pension, CGEGIS, Section 89 arrears co-ordination across PAO/PCDA settlements"
          },
          {
            "@type": "Offer",
            "name": "HNI Defence Officer Multi-Asset ITR",
            "priceCurrency": "INR",
            "price": "9999",
            "description": "ITR-2 with capital gains, ESOPs where applicable, Schedule HP, defence allowances, multi-asset portfolio"
          },
          {
            "@type": "Offer",
            "name": "Section 139(9) Defective Return Cure",
            "priceCurrency": "INR",
            "price": "1999",
            "description": "Re-file with correct Section 10 exemption stack within the 15-day cure window"
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
                        ITR Filing for Central, State, PSU, and Defence Employees
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA &amp; CS Team &middot; Patron Accounting LLP</span>
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAO Form 16 (Central), PCDA(O) or PCDA Allahabad Form 16 (Defence), State Treasury or PSU Form 16, NPS statement, CGEGIS</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 2,499 ITR-1; Rs 4,999 ITR-2 with capital gains; Rs 6,499 retirement-year stack; Rs 9,999 HNI defence officer</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Central/State government, PSU (BHEL, NTPC, ONGC, SBI), Defence (Army, Navy, Air Force), Paramilitary, Police, Pensioners</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 5 to 10 working days; due 31 July 2026; Form 10E filed BEFORE ITR for Section 89 arrears relief</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">4,500+ Government Employees Filed | 4.9 Google Rating | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20a%20free%20consultation%20for%20government%20employee%20ITR%20filing%20AY%202026-27." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Govt Employee ITR'/>
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
                                
                                <option value='ITR-1 Government Employee Standard' selected>ITR-1 Government Employee Standard</option>
                                <option value='ITR-2 with Capital Gains'>ITR-2 with Capital Gains</option>
                                <option value='Defence Personnel ITR (Rule 2BB Allowances)'>Defence Personnel ITR (Rule 2BB Allowances)</option>
                                <option value='Retirement-Year Filing (Full Exemption Stack)'>Retirement-Year Filing (Full Exemption Stack)</option>
                                <option value='Section 89 plus Form 10E Arrears Relief'>Section 89 plus Form 10E Arrears Relief</option>
                                <option value='Family Pensioner ITR'>Family Pensioner ITR</option>
                                <option value='HNI Defence Officer Multi-Asset ITR'>HNI Defence Officer Multi-Asset ITR</option>
                                <option value='Disability Pension Full Exemption Filing'>Disability Pension Full Exemption Filing</option>
                                <option value='Gallantry Award Pension (Section 10(18))'>Gallantry Award Pension (Section 10(18))</option>
                                <option value='Section 139(9) Defective Return Cure'>Section 139(9) Defective Return Cure</option>
                                <option value='Other'>Other</option>


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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Retired with 38 years service. Last 6 months at Siachen. Final settlement Rs 32 lakh leave encashment, Rs 26 lakh gratuity, Rs 12 lakh commuted pension. Initial CA showed Rs 9.4 lakh demand. Patron applied Section 10(10AA), Rule 2BB, Section 89. Refund of Rs 8.7 lakh.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Col R K Singh (Retd)</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Indian Army Officer (Pune)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Retired from PNB after 32 years. Rs 24 lakh leave encashment, Rs 21 lakh gratuity. Pre-Patron CA showed all retirement benefits as fully exempt assuming nationalized bank = government. Patron correctly applied Rs 25 lakh and Rs 20 lakh caps. Saved future scrutiny.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Mrs Sarita P.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">PNB Branch Manager (Retd) (Mumbai)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Retired Senior Joint Secretary IAS with 7th CPC arrears across 4 years. Patron filed Form 10E first with year-wise Rule 21A reallocation, then ITR with Section 89 relief. Tax saving Rs 11 lakh versus filing without Form 10E.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DN</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Dr Naresh K.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IAS (Retd) (Delhi)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Defence Lt Col with disability pension after invalidation. Earlier CA claimed only the disability element exempt. Patron extracted RMB report and applied CBDT F.No. 200/51/99-ITA1 - both service and disability components fully exempt. Refund of Rs 2.4 lakh.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AR</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Lt Col Arun R.</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Defence Officer (Bengaluru)</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
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
                    <p>Central + State government, Indian Railways, Defence (Army, Navy, Air Force), Paramilitary (CRPF, BSF, ITBP, CISF), Police, PSU (BHEL, NTPC, ONGC, SBI), retirees, pensioners. 4,500+ government employee ITRs filed since 2019. Rs 26 lakh saved across three retirement engagements in FY 2024-25.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Employer Classes</a>
            <a href="#services-section" class="toc-btn">Patron Services</a>
            <a href="#process-section" class="toc-btn">7-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#comparison-section" class="toc-btn">Old vs New Regime</a>
            <a href="#legal-section" class="toc-btn">Legal Framework</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>

        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Government Employee ITR for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Govt Employee ITR Services at a Glance</strong></p>
                    <p>Government employee ITR has a substantially different exemption profile from private salaried filings. Central and State government employees get FULL Section 10(10AA) leave encashment, FULL Section 10(10) gratuity, and FULL Section 10(10A) commuted pension exemption (vs Rs 25 lakh, Rs 20 lakh and partial caps for non-government). Defence personnel get Section 10(14) Siachen Rs 7,000 per month, high altitude Rs 1,060-1,600, counter-insurgency Rs 3,900-4,200 and disability pension exemptions under CBDT Instruction F.No. 200/51/99-ITA1. NPS Section 80CCD(2) employer contribution is 14 percent for Central Government and Indian Railways versus 10 percent for State and PSU. Form 10E mandatory BEFORE ITR for Section 89 Pay Commission arrears relief. Due date 31 July 2026.</p>
                </div>
                <p>Government employee ITR filing is the area where one Section 10 sub-clause makes a Rs 5 to 25 lakh difference at retirement. A Central Government employee retiring with Rs 18 lakh leave encashment pays ZERO tax on it under Section 10(10AA)(i); a PSU employee with the same encashment pays slab tax on the amount above Rs 25 lakh after the cap (post Notification S.O. 2276(E) dated 24 May 2023, raising the cap from the earlier Rs 3 lakh). Defence personnel get an additional layer - Siachen Rs 7,000 per month exemption, high altitude tiered exemption (Rs 1,060 for 9,000-15,000 ft, Rs 1,600 above 15,000 ft), counter-insurgency exemption per Rule 2BB, plus the CBDT F.No. 200/51/99-ITA1 disability pension full exemption that no private employee can access.</p>
                <p>NPS post-2004 entrants benefit from Section 80CCD(2) employer contribution that is 14 percent of Basic plus DA for Central Government and Indian Railways versus 10 percent for State Government and PSU - a 4 percentage-point gap worth Rs 60,000 to Rs 1.2 lakh annual deduction that DIY platforms routinely miss. Section 89 with Form 10E becomes critical in years with 7th Pay Commission arrears, DA arrears spread across years or promotion-based arrears - Form 10E must be filed online BEFORE the ITR is submitted, failure results in full relief disallowance regardless of underlying eligibility. Patron Accounting has filed government-employee ITRs for over 4,500 Central, State, PSU and Defence employees across India since 2019, with offices in Pune (PCDA(O), AFA Khadakwasla, Southern Command HQ), Mumbai (Western Naval Command, SBI HO, RBI), Delhi (South Block ministries, IRS, IB) and Gurugram (HUDA, MEA training).</p>
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
                <h2 class="section-title">What Is Government Employee ITR Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Government employee ITR filing means computing salary income with employer-class-specific exemptions under Section 10 sub-clauses (10AA, 10A, 10, 14, 18, 19), Section 16 standard deduction, Section 80CCD NPS deductions and Section 89 arrears relief via Form 10E - filed in ITR-1 (basic salary case) or ITR-2 (with capital gains or multiple houses) under Section 139(1) of the Income Tax Act, 1961.</p>
                    <p>Applies to Central Government employees (Cabinet Secretariat, IAS, IPS, IRS, IFS, Indian Forest Service, Group A/B/C, Indian Railways), State Government employees, Defence personnel (Indian Army, Navy, Air Force - serving and retired officers, JCOs, OR), Paramilitary forces (CRPF, BSF, ITBP, CISF, SSB, RPF), State police, PSU employees (BHEL, NTPC, ONGC, IOCL, BPCL, HPCL, GAIL, Coal India, SBI, LIC, Air India), CGEGIS subscribers, NPS subscribers (post 1 January 2004 entrants), CCS Pension recipients (pre 1 January 2004 entrants), UPS (Unified Pension Scheme) subscribers from 1 April 2025, family pensioners, disability pension recipients and gallantry award pensioners.</p>
                    <p>The critical distinction for AY 2026-27 is the employer-class boundary. Central Government and State Government employees get FULL Section 10(10AA)/10(10)/10(10A) exemptions on retirement benefits. PSU employees, nationalized bank employees (SBI, PNB, BoB), LIC employees, statutory corporation employees are treated as NON-GOVERNMENT for these full-exemption purposes - capped at Rs 25 lakh leave encashment, Rs 20 lakh gratuity, partial commuted pension. This is the most common misclassification error in government employee ITRs and the source of the largest tax swings at retirement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Govt Employee ITR:</strong></p>
                    <p><strong>Section 10(10AA)(i):</strong> FULL leave encashment exemption for Central and State Government employees on retirement, superannuation or resignation. Includes IAS, IPS, IRS, IFS, defence personnel, paramilitary, police, Indian Railways.</p>
                    <p><strong>Section 10(10AA)(ii):</strong> Leave encashment for non-government employees (PSU, nationalized banks, statutory corporations, LIC) capped at Rs 25 lakh per Notification S.O. 2276(E) dated 24 May 2023 (raised from Rs 3 lakh).</p>
                    <p><strong>Section 10(10):</strong> Gratuity - FULLY EXEMPT for Central and State Government; non-government covered under Payment of Gratuity Act 1972 with Rs 20 lakh cap.</p>
                    <p><strong>Section 10(10A):</strong> Commuted pension - FULLY EXEMPT for Central and State Government; non-government employees get 1/3 (with gratuity) or 1/2 (without gratuity) of normal commuted pension exempt.</p>
                    <p><strong>Section 10(14) read with Rule 2BB:</strong> Defence allowances - Siachen Rs 7,000 per month; High Altitude Rs 1,060 (9,000-15,000 ft) or Rs 1,600 (above 15,000 ft); Counter-Insurgency Rs 3,900 (JCO/OR) or Rs 4,200 (officers); High Active Field Area Rs 4,200; Compensatory Field Area Rs 2,600; Modified Field Area Rs 1,000; Border/Remote Rs 200-1,300; Uniform/Kit Maintenance up to actual expenditure.</p>
                    <p><strong>Section 10(18):</strong> Gallantry award pension - Param Vir Chakra, Maha Vir Chakra, Vir Chakra, Ashoka Chakra, Kirti Chakra, Shaurya Chakra recipients - FULLY EXEMPT including family pension to gallantry award family.</p>
                    <p><strong>Section 10(19):</strong> Family pension received by family of armed forces personnel killed in operational duty - FULLY EXEMPT.</p>
                    <p><strong>CBDT Instruction F.No. 200/51/99-ITA1:</strong> Disability pension for armed forces personnel - both service component AND disability element FULLY EXEMPT for invalided personnel and aggravated-disability cases certified by Release Medical Board.</p>
                    <p><strong>Section 80CCD(1B):</strong> NPS Tier-1 additional contribution - Rs 50,000 over and above Section 80CCE Rs 1.5 lakh aggregate cap; available in BOTH old and new regimes.</p>
                    <p><strong>Section 80CCD(2):</strong> NPS employer contribution - Central Government and Indian Railways: 14 percent of Basic plus DA; State Government, PSU and private: 10 percent of Basic plus DA; NOT subject to Section 80CCE cap; available in BOTH regimes.</p>
                    <p><strong>Section 89 read with Rule 21A:</strong> Relief on salary arrears (Pay Commission, DA, promotion, MACP, NFU) via year-wise reallocation; Form 10E mandatory online BEFORE ITR submission.</p>
                    <p><strong>CGEGIS (Central Government Employees Group Insurance Scheme):</strong> Insurance premium portion deductible under Section 80C; saving fund component paid back at retirement; insurance benefit on death tax-exempt under Section 10(10D).</p>
                    <p><strong>CCS Pension Rules 1972 vs NPS vs UPS:</strong> Government employees joining BEFORE 1 January 2004 - CCS Pension (defined benefit). AFTER 1 January 2004 - NPS (defined contribution). UPS from 1 April 2025 - optional hybrid scheme.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Govt Employee ITR</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Exemption Anchor</span>
                        <strong>Section 10</strong>
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
            <h2 class="section-title">Government Employer Classes and Tax Treatment</h2>
            <div class="content-text">
                
                <p>Government employee ITR filing applies under Section 139(1) of the Income Tax Act 1961 to the following employer classes for AY 2026-27. The Section 10(10AA)/10(10)/10(10A) full-exemption boundary is the most critical classification - getting this wrong produces tax swings of Rs 5 to 25 lakh at retirement.</p>
                <ul>
                    <li><strong>Central Government:</strong> Cabinet Secretariat, all Ministries, IAS, IPS, IRS, IFS, Indian Forest Service, Group A/B/C posts, Indian Railways, autonomous bodies under Central Government direct control. FULL Section 10(10AA)/10(10)/10(10A) exemption. NPS Section 80CCD(2) at 14 percent of Basic plus DA. Form 16 from Pay and Accounts Office (PAO).</li>
                    <li><strong>State Government:</strong> All State Ministries, State Cabinets, State PSC, State Police, State Treasury, autonomous bodies under State Government direct control. FULL Section 10(10AA)/10(10)/10(10A) exemption. NPS Section 80CCD(2) at 10 percent of Basic plus DA. Form 16 from State Treasury or State PAO.</li>
                    <li><strong>Defence (Armed Forces):</strong> Indian Army, Indian Navy, Indian Air Force - serving and retired officers, JCOs, OR. Treated as Central Government for Section 10 full-exemption purposes. PLUS Section 10(14) read with Rule 2BB defence allowances (Siachen, high altitude, counter-insurgency, field area). PLUS CBDT F.No. 200/51/99-ITA1 disability pension exemption. PLUS Section 10(18) gallantry awards. Form 16 from Principal CDA (Officers) PCDA(O) Pune for officers, PCDA Allahabad for OR/JCOs.</li>
                    <li><strong>Paramilitary Forces:</strong> CRPF, BSF, ITBP, CISF, SSB, RPF, Coast Guard. Treated as Central Government for Section 10 full-exemption purposes. Rule 2BB allowances applicable for field area, counter-insurgency, border posting.</li>
                    <li><strong>State Police and IPS:</strong> All State Police, IPS officers. Treated as State Government (for State Police personnel) or Central Government (for IPS officers seconded to Centre) for Section 10 full-exemption purposes.</li>
                    <li><strong>PSU and Nationalized Banks (NON-GOVERNMENT for Section 10):</strong> BHEL, NTPC, ONGC, IOCL, BPCL, HPCL, GAIL, Coal India, SBI, PNB, BoB, Canara Bank, Union Bank, LIC, GIC, public sector insurance companies, Air India, Indian Railways subsidiaries with separate legal entity status. Section 10(10AA) capped at Rs 25 lakh, Section 10(10) capped at Rs 20 lakh, Section 10(10A) partial. NPS Section 80CCD(2) at 10 percent of Basic plus DA. Form 16 from company HR.</li>
                    <li><strong>CCS Pension recipients (pre 1 Jan 2004 entrants):</strong> Defined-benefit pension under CCS (Pension) Rules 1972; not contributing to NPS; pension fully taxable as salary income but with full Section 10 retirement-benefit exemptions.</li>
                    <li><strong>NPS subscribers (post 1 Jan 2004 entrants):</strong> Defined-contribution National Pension System; Section 80CCD(1) employee 10 percent contribution, Section 80CCD(1B) Rs 50,000 additional, Section 80CCD(2) employer contribution at 14 percent (Central) or 10 percent (State/PSU).</li>
                    <li><strong>UPS subscribers (from 1 April 2025):</strong> Unified Pension Scheme - optional hybrid; Central Government employees can choose UPS over NPS; defined assured pension component plus NPS contribution refund.</li>
                    <li><strong>Family pensioners and disability pension recipients:</strong> Family pension under Section 57 with standard deduction; armed forces family pension under Section 10(19) if killed in operational duty (FULLY EXEMPT); disability pension under CBDT F.No. 200/51/99-ITA1 (FULLY EXEMPT both service and disability components); gallantry award pension under Section 10(18) (FULLY EXEMPT).</li>
                </ul>
                <p><strong>Statutory due dates for AY 2026-27:</strong> ITR-1 and ITR-2 non-audit cases - 31 July 2026. Form 10E filing for Section 89 arrears relief - BEFORE ITR submission (mandatory). Form 10-IEA for old regime opt-in - BEFORE ITR submission. Belated return under Section 139(4) - 31 December 2026 with Section 234F fee. Revised return under Section 139(5) - 31 March 2027.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Government Employee ITR Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>ITR-1 Government Employee Standard</strong></td><td>Form 16 reconciliation from PAO, PCDA, State Treasury or company HR. Section 16 standard deduction and professional tax. Section 10 sub-clause exemption application by employer class. Section 80C, 80D, 80CCD(1), 80CCD(1B), 80CCD(2). HRA exemption under Section 10(13A) where rent is paid (NOT for CCS-allotted accommodation). LTC exemption under Section 10(5) for declared journeys.</td><td>From Rs 2,499</td></tr>
                        <tr><td><strong>Defence Personnel ITR with Rule 2BB Allowances</strong></td><td>Siachen Rs 7,000 per month, high altitude tier (Rs 1,060 for 9,000-15,000 ft, Rs 1,600 above 15,000 ft), counter-insurgency Rs 3,900-4,200, field area Rs 4,200, compensatory field area Rs 2,600 - per posting verification against TA-DA bills. Uniform/kit maintenance up to actual expenditure. PCDA(O) Pune or PCDA Allahabad Form 16 reconciliation.</td><td>From Rs 4,999</td></tr>
                        <tr><td><strong>Retirement-Year Filing (Full Exemption Stack)</strong></td><td>Leave encashment Section 10(10AA), gratuity Section 10(10), commuted pension Section 10(10A), CGEGIS settlement (Section 80C/Section 10(10D) split), Section 89 arrears co-ordination across PAO/PCDA settlements. Full Section 10 stack application for retirement-year filers.</td><td>From Rs 6,499</td></tr>
                        <tr><td><strong>Section 89 plus Form 10E Arrears Relief</strong></td><td>Year-wise reallocation under Rule 21A of 7th Pay Commission arrears, DA arrears, promotion-based pay fixation arrears, MACP, NFU. Form 10E filed online BEFORE the ITR submission (mandatory - late Form 10E results in full relief disallowance).</td><td>From Rs 4,499</td></tr>
                        <tr><td><strong>Family Pensioner ITR (Section 57 plus Section 10(19))</strong></td><td>Family pension under Section 57 with Rs 15,000 or one-third of pension (whichever lower) standard deduction. Armed forces family pension under Section 10(19) for personnel killed in operational duty - FULLY EXEMPT. Gallantry award family pension under Section 10(18).</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>Disability Pension Full Exemption Filing</strong></td><td>CBDT Instruction F.No. 200/51/99-ITA1 application - both service component AND disability element FULLY EXEMPT. Documentation: Release Medical Board (RMB) report and disability pension order. Common error rectified: claiming only the disability element.</td><td>From Rs 2,999</td></tr>
                        <tr><td><strong>HNI Defence Officer Multi-Asset ITR</strong></td><td>ITR-2 with capital gains across equity (Sections 111A and 112A), ESOPs (where applicable for retired officers in advisory roles), Schedule HP for multiple house properties, defence allowances for active service portion, multi-asset portfolio reconciliation.</td><td>From Rs 9,999</td></tr>
                        <tr><td><strong>Section 139(9) Defective Return Cure</strong></td><td>Re-file with the correct Section 10 exemption stack within the 15-day cure window. Common defective-return triggers for government employees: wrong employer class (PSU treated as government), missed Form 10E for Section 89, missed Rule 2BB allowances, ITR-1 with capital gains.</td><td>From Rs 1,999</td></tr>


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
            <h2 class="section-title">7-Step Government Employee ITR Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The Patron workflow runs on the Income Tax e-filing portal covering employer-class identification, Form 16 reconciliation from PAO/PCDA/State Treasury/PSU, Section 10 exemption application, NPS deductions, Section 89 Form 10E for arrears, regime selection and e-verification. Each step is owned by a named CA with documented hand-off.</p>
        </div>
        <div class="steps-container">
            
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Employer Class Identification</h3>
                    <p class="step-description">Verify employer class against Form 16 source - PAO (Central), PCDA(O) Pune or PCDA Allahabad (Defence), State Treasury (State), company HR (PSU). Confirm CCS Pension (pre 1 Jan 2004) vs NPS (post 1 Jan 2004) vs UPS (from 1 Apr 2025) classification. This single step determines Section 10(10AA)/10(10)/10(10A) full vs capped exemption.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Class identified</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scheme verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Employer</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Form 16 Collection and Reconciliation</h3>
                    <p class="step-description">Receive Form 16 Part A and Part B. For mid-year transfers or deputation periods, collect BOTH outgoing PAO and incoming PAO Form 16s. Reconcile TDS already deducted across both Form 16s to avoid double-counting. Match against Form 26AS and AIS.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All Form 16 received</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS reconciled</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Forms</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Section 10 Exemption Application</h3>
                    <p class="step-description">Apply employer-class-specific exemptions - Section 10(10AA) full vs Rs 25 lakh cap; Section 10(10) full vs Rs 20 lakh cap; Section 10(10A) full vs partial. For defence: Section 10(14) Rule 2BB allowances per posting, CBDT F.No. 200/51/99-ITA1 disability pension, Section 10(18) gallantry, Section 10(19) family pension.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exemptions applied</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rule 2BB done</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Section 10</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">NPS and Deductions</h3>
                    <p class="step-description">Section 80CCD(1) 10 percent of Basic plus DA within Section 80CCE Rs 1.5 lakh cap. Section 80CCD(1B) Rs 50,000 additional (both regimes). Section 80CCD(2) employer contribution at 14 percent (Central Government) or 10 percent (State/PSU) - no cap, both regimes. Section 80C, 80D, 80E for old regime.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NPS 3 layers</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deductions stacked</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">NPS</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Section 89 Form 10E Filing</h3>
                    <p class="step-description">If Pay Commission, DA, promotion, MACP or NFU arrears exist - compute year-wise reallocation under Rule 21A. File Form 10E ONLINE on incometax.gov.in BEFORE the ITR submission. Failure to file Form 10E first results in full disallowance of arrears relief regardless of underlying eligibility.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 10E filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Arrears reallocated</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Form 10E</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Regime Selection and Form Choice</h3>
                    <p class="step-description">Compare old regime stack (Rs 4-6 lakh deductions typical) vs new regime (Rs 1 lakh - standard deduction plus Section 80CCD(2) only). Old regime usually wins for government employees with home loan plus GPF plus NPS plus HRA. ITR-1 if salary plus 1 house property plus interest; ITR-2 if capital gains, multiple houses or LTCG above Rs 1.25 lakh.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regime locked</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form selected</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Regime</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Submission and E-Verification</h3>
                    <p class="step-description">File the return electronically before the 31 July 2026 due date under Section 139(1). E-verify within 30 days per CBDT Notification 5/2022 via Aadhaar OTP, net banking, bank account EVC or demat account EVC. Track ITR-V acknowledgement with 15-digit number.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Filed</span>
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> e-Verified</span>
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="50" x2="85" y2="50" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="62" x2="70" y2="62" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div>
                        <span class="illustration-label">Submitted</span>
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
            <h2 class="section-title">Documents Checklist by Employer Class</h2>
            <div class="content-text">
                
                <p>The Patron document checklist for government employee ITR is segmented by employer class - Central, State, Defence, PSU - plus scenario-specific additions for retirement year, Section 89 arrears, disability pension, gallantry awards, and family pension.</p>
                <p><strong>Universal (all government employees):</strong></p>
                <ul>
                    <li>PAN and Aadhaar (linked under Section 139AA).</li>
                    <li>Form 16 Part A (TDS summary) and Part B (salary breakup) for FY 2025-26.</li>
                    <li>AIS (Annual Information Statement) download and Form 26AS.</li>
                    <li>Bank account details for refund credit; primary account flagged.</li>
                    <li>NPS contribution statement showing Section 80CCD(1), 80CCD(1B) and 80CCD(2) breakup.</li>
                    <li>Last 3 years' ITR acknowledgements for carry-forward continuity.</li>
                </ul>
                <p><strong>By Employer Class:</strong></p>
                <ul>
                    <li><strong>Central Government:</strong> Form 16 from Pay and Accounts Office (PAO) with employer name showing Ministry/Department; GPF passbook for Section 80C; CGEGIS contribution statement; CGHS contribution receipts.</li>
                    <li><strong>State Government:</strong> Form 16 from State Treasury or State PAO; State PF/GPF statement; State Government Group Insurance Scheme (where applicable); State professional tax certificate.</li>
                    <li><strong>Defence Officers:</strong> Form 16 from Principal CDA (Officers) PCDA(O) Pune; posting orders showing Siachen, high altitude, counter-insurgency, field area deployment with dates; TA-DA bills with allowance breakup; AGIF (Army Group Insurance Fund) statement.</li>
                    <li><strong>Defence OR/JCOs:</strong> Form 16 from PCDA Allahabad; posting orders; allowance certificates; AGIF/NGIF/AFGIS statement; canteen card or service category certificate.</li>
                    <li><strong>PSU/Nationalized Bank:</strong> Form 16 from company HR with employer name showing PSU; PSU PF or CPF statement; PSU Group Insurance scheme receipts; nationalized bank LFC/LTC claim records.</li>
                </ul>
                <p><strong>Retirement-Year Filers (Full Section 10 Stack):</strong></p>
                <ul>
                    <li>Final settlement statement from PAO/PCDA/State Treasury showing leave encashment, gratuity, commuted pension, CGEGIS settlement break-up.</li>
                    <li>Pension Payment Order (PPO) with first pension credit date.</li>
                    <li>Section 89 Pay Commission arrears statement (if 7th CPC arrears spread across FY 2015-16 onwards).</li>
                    <li>CGHS card and final medical settlement.</li>
                </ul>
                <p><strong>Section 89 Form 10E Arrears Cases:</strong></p>
                <ul>
                    <li>Year-wise Pay Commission, DA, promotion, MACP or NFU arrears statement with FY of accrual.</li>
                    <li>Salary slips from earlier FYs (if available) to substantiate the year-wise reallocation.</li>
                    <li>Form 10E filed online BEFORE the ITR submission (Patron handles the filing).</li>
                </ul>
                <p><strong>Disability Pension and Gallantry Award Cases:</strong></p>
                <ul>
                    <li>Release Medical Board (RMB) report certifying invalidation or aggravated disability.</li>
                    <li>Disability pension order showing service component and disability element.</li>
                    <li>Gallantry award gazette notification (PVC, MVC, VrC, AC, KC, SC).</li>
                    <li>Family pension order for armed forces operational-duty cases under Section 10(19).</li>
                </ul>
                <p><strong>Key Outputs You Receive:</strong> Filed ITR-1 or ITR-2 acknowledgement with e-verification confirmation. Old vs new regime tax comparison memo with employer-class-specific deduction stack. Section 10 exemption working showing employer-class boundary (Central/State govt full vs PSU capped). Section 89 working with Form 10E reference and year-wise tax incremental computation. Loss carry-forward schedule where applicable.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Government Employee ITR Mistakes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        
                        <tr><td><strong>PSU employee classified as Central Government for Section 10 full exemption</strong></td><td>Most common misclassification error. Nationalized bank employees (SBI, PNB, BoB), LIC employees, public sector insurance, statutory corporation employees, PSU like BHEL/NTPC/ONGC are NOT government for Section 10(10AA)/10(10)/10(10A) full-exemption purposes. Filing with full-exemption assumption produces Section 143(2) scrutiny notice and Section 270A under-reporting penalty.</td><td>Patron verifies employer class against Form 16 source. PAO Form 16 = Central Government. PCDA Form 16 = Defence (Central). State Treasury Form 16 = State Government. Company HR Form 16 from PSU = NON-government with Rs 25 lakh/20 lakh caps.</td></tr>
                        <tr><td><strong>Defence allowance optimization missed under Rule 2BB</strong></td><td>DIY platforms miss the high altitude tier distinction (Rs 1,060 for 9,000-15,000 ft vs Rs 1,600 above 15,000 ft), the JCO/OR vs officer rate distinction in counter-insurgency (Rs 3,900 vs Rs 4,200), and the actual-expenditure rule for uniform maintenance. Result: tax on Rs 1.5-3 lakh per FY that should be exempt.</td><td>Patron verifies each allowance against posting orders and TA-DA bills. Siachen Rs 7,000 per month, high altitude tier, counter-insurgency rank-specific rate, field area Rs 4,200 - all confirmed against deployment records before claim.</td></tr>
                        <tr><td><strong>Disability pension - only disability element claimed exempt, service component taxed</strong></td><td>CBDT Instruction F.No. 200/51/99-ITA1 specifies BOTH service component AND disability element are exempt for invalided personnel and aggravated-disability cases. Common DIY error: claim only the disability portion as exempt, treat the service portion as taxable pension. Tax overpayment of Rs 1-3 lakh per FY.</td><td>Patron extracts Release Medical Board (RMB) report and disability pension order; applies BOTH service and disability components as fully exempt under the CBDT instruction. Documented working paper retained for scrutiny defence.</td></tr>
                        <tr><td><strong>Form 10E filed AFTER ITR for Section 89 arrears</strong></td><td>Common DIY error: file ITR first, realize arrears relief is needed, then file Form 10E. The portal accepts the late Form 10E but the relief is fully disallowed at processing. Section 89 relief is lost regardless of underlying year-wise computation validity. Loss of Rs 30,000 to Rs 2 lakh in typical Pay Commission arrears cases.</td><td>Patron Section 89 workflow: compute year-wise reallocation under Rule 21A first; file Form 10E online BEFORE the ITR; then file ITR with the Section 89 relief claimed against the Form 10E acknowledgement.</td></tr>
                        <tr><td><strong>NPS Section 80CCD(2) at 10 percent instead of 14 percent for Central Government</strong></td><td>DIY platforms apply blanket 10 percent across all government employees. Central Government and Indian Railways employer NPS contribution is 14 percent of Basic plus DA - 4 percentage points higher than State/PSU 10 percent. For a Rs 15 lakh Basic plus DA, this is Rs 60,000 additional Section 80CCD(2) deduction missed annually.</td><td>Patron classifies NPS employer rate by employer class. Central Government + Indian Railways = 14 percent. State + PSU = 10 percent. Section 80CCD(2) deduction sized correctly.</td></tr>
                        <tr><td><strong>New regime selected by government employee with home loan and 80C maxed</strong></td><td>Portal default is new regime. A government employee with GPF Rs 1.5 lakh, NPS Rs 50,000 additional, Section 80D Rs 50,000, HRA exemption, Section 24(b) Rs 2 lakh home loan interest forfeits Rs 30,000 to Rs 1.2 lakh annual tax savings versus old regime.</td><td>Patron runs old vs new regime comparison memo every year. Old regime typically wins for government employees due to abundant deduction stack (Rs 4-6 lakh deductions vs Rs 1 lakh in new regime). Old regime opt-in done directly in ITR (no Form 10-IEA needed for salaried).</td></tr>
                        <tr><td><strong>Mid-year transfer or deputation - double-counted TDS or missed Form 16</strong></td><td>Government employees on deputation or mid-year transfer get TWO Form 16s - outgoing PAO and incoming PAO. DIY platforms aggregate salary but may double-count TDS or miss one Form 16 entirely. Results in tax demand notice or under-claim of TDS credit.</td><td>Patron collects Form 16 from both outgoing and incoming PAO. TDS reconciled by TAN across the two Form 16s. Schedule TDS-1 reports each TAN separately to avoid double-counting.</td></tr>
                        <tr><td><strong>CGEGIS savings component misclassified as fully exempt</strong></td><td>CGEGIS premium has insurance and saving fund components. The insurance portion qualifies under Section 80C and the death benefit is tax-exempt under Section 10(10D). The savings component is paid back at retirement and is partially exempt only for the insurance-related portion - not the full savings settlement.</td><td>Patron CGEGIS workflow splits the settlement into insurance and savings components against the contribution statement. Correct Section 80C deduction for premium portion. Section 10(10D) exemption applied only to the insurance-related component.</td></tr>


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
            <h2 class="section-title">Government Employee ITR Fees (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        
                        <tr><td>ITR-1 Government Employee Standard</td><td>Form 16 reconciliation, Section 10/16/80 deductions, NPS Section 80CCD, e-verification</td><td class="table-amount">Rs 2,499</td></tr>
                        <tr><td>Family Pensioner ITR (Section 57, Section 10(19))</td><td>Family pension Section 57 standard deduction; armed forces operational-duty exemption under Section 10(19)</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>Disability Pension Full Exemption Filing</td><td>CBDT Instruction F.No. 200/51/99-ITA1 application - both service and disability components fully exempt</td><td class="table-amount">Rs 2,999</td></tr>
                        <tr><td>Section 89 plus Form 10E Arrears Relief Filing</td><td>7th CPC, DA or promotion arrears year-wise reallocation; Form 10E filed BEFORE ITR submission</td><td class="table-amount">Rs 4,499</td></tr>
                        <tr><td>ITR-2 Government Employee with Capital Gains</td><td>ITR-1 plus Schedule CG, Section 112A LTCG, Section 111A STCG, multiple house property</td><td class="table-amount">Rs 4,999</td></tr>
                        <tr><td>Defence Personnel ITR with Rule 2BB Allowances</td><td>Siachen, high altitude, counter-insurgency, field area exemption optimization; PCDA Form 16; posting reconciliation</td><td class="table-amount">Rs 4,999</td></tr>
                        <tr><td>Retirement-Year Filing (Full Exemption Stack)</td><td>Leave encashment, gratuity, commuted pension, CGEGIS, Section 89 arrears co-ordination</td><td class="table-amount">Rs 6,499</td></tr>
                        <tr><td>HNI Defence Officer Multi-Asset ITR</td><td>ITR-2 with capital gains, ESOPs where applicable, Schedule HP, defence allowances</td><td class="table-amount">Rs 9,999</td></tr>
                        <tr><td>Section 139(9) Defective Return Cure</td><td>Re-file with correct Section 10 exemption stack within 15-day cure window</td><td class="table-amount">Rs 1,999</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees</strong></td><td>Defence personnel and pensioners with disability or gallantry award exemption - special pricing on request; multi-year backlog discounts available</td><td class="table-amount"><strong>Starting from INR 2,499 (Excl. GST and Govt. Charges)</strong></td></tr>


                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;"><strong>Disclaimer:</strong> All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;"><strong>Get a free Govt Employee ITR consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20government%20employee%20ITR%20filing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        
                        <tr><td><strong>Patron Engagement Turnaround</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Standard government employee ITR-1</td><td class="table-amount">3 to 5 working days</td></tr>
                        <tr><td>ITR-2 with capital gains</td><td class="table-amount">5 to 7 working days</td></tr>
                        <tr><td>Defence personnel with Rule 2BB allowances</td><td class="table-amount">5 to 7 working days</td></tr>
                        <tr><td>Retirement-year filing with full Section 10 stack</td><td class="table-amount">7 to 10 working days</td></tr>
                        <tr><td>Section 89 plus Form 10E arrears relief</td><td class="table-amount">7 to 10 working days</td></tr>
                        <tr><td>Family pensioner ITR</td><td class="table-amount">3 to 5 working days</td></tr>
                        <tr><td>HNI defence officer multi-asset</td><td class="table-amount">10 to 14 working days</td></tr>
                        <tr><td>Section 139(9) defective return cure</td><td class="table-amount">2 to 3 working days</td></tr>
                        <tr><td><strong>Statutory Deadlines AY 2026-27</strong></td><td class="table-amount">&nbsp;</td></tr>
                        <tr><td>Form 10E for Section 89 arrears - BEFORE ITR</td><td class="table-amount">Before Section 139(1) due date</td></tr>
                        <tr><td>ITR-1 and ITR-2 non-audit cases</td><td class="table-amount">31 July 2026</td></tr>
                        <tr><td>E-verification window per CBDT Notification 5/2022</td><td class="table-amount">30 days from filing</td></tr>
                        <tr><td>Belated return Section 139(4) with Section 234F fee</td><td class="table-amount">31 December 2026</td></tr>
                        <tr><td>Revised return Section 139(5)</td><td class="table-amount">31 March 2027</td></tr>
                        <tr><td>Updated Return ITR-U Section 139(8A) - 48 months</td><td class="table-amount">31 March 2031</td></tr>


                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    Form 10E for Section 89 arrears relief MUST be filed online BEFORE the ITR is submitted. Form 10E filed AFTER the ITR results in full disallowance of arrears relief regardless of underlying eligibility. For retirement-year filers, gather PAO/PCDA settlement statements, leave encashment break-up, gratuity calculation, commuted pension order, CGEGIS settlement and final pension order EARLY - delays in pension first credit or CGHS card finalization do not extend the 31 July 2026 ITR deadline. Late filing triggers Section 234F fee up to Rs 5,000 plus Section 234A interest at 1 percent per month from 1 August 2026.

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
            <h2 class="section-title">Why Government Employees Hire a CA Instead of DIY</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><h3>Employer Class Boundary Locked</h3><p>Section 10(10AA)/10(10)/10(10A) full exemption applies to Central + State Government ONLY, NOT PSU, nationalized banks, statutory corporations. We verify against Form 16 source and apply the correct cap (full vs Rs 25 lakh/Rs 20 lakh).</p></article>
    <article class="feature-card"><h3>Defence Allowance Rule 2BB Optimization</h3><p>Each defence allowance has specific monthly limits and conditions. We verify Siachen, high altitude tier (9-15K vs above 15K), counter-insurgency rank rate, field area against posting orders and TA-DA bills.</p></article>
    <article class="feature-card"><h3>Disability Pension Both Components Exempt</h3><p>CBDT F.No. 200/51/99-ITA1 - service component AND disability element BOTH exempt. We extract RMB report and apply full exemption to both, not just the disability portion.</p></article>
    <article class="feature-card"><h3>Section 89 Form 10E Sequencing</h3><p>Form 10E filed online BEFORE ITR (mandatory). Year-wise reallocation under Rule 21A. We compute the relief and file Form 10E first to preserve eligibility.</p></article>
    <article class="feature-card"><h3>NPS 14 percent Section 80CCD(2) for Central Government</h3><p>Central Government and Indian Railways employer NPS at 14 percent of Basic plus DA (vs 10 percent for State/PSU). The 4 percentage-point gap is worth Rs 60,000 to Rs 1.2 lakh annual deduction missed by DIY platforms.</p></article>
    <article class="feature-card"><h3>Old Regime Optimization for Government Stack</h3><p>Government employees with GPF + NPS 80CCD(1B) + Section 80D + HRA + Section 24(b) typically save Rs 30,000 to Rs 1.2 lakh annually under old regime versus default new regime.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 4,500+ Government Employees Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <p>Retired with 38 years service from Pune. Last 6 months posted at Siachen as part of training inspection. Final settlement included Rs 32 lakh leave encashment, Rs 26 lakh gratuity, Rs 12 lakh commuted pension, plus Pay Commission arrears spread across 4 years. My initial CA filed ITR with all retirement benefits as taxable salary - tax demand notice for Rs 9.4 lakh. Patron rebuilt the position - applied Section 10(10AA)(i) FULL exemption (Defence falls under government class), Section 10(10) full gratuity, Section 10(10A) full commuted pension, Section 10(14) Rule 2BB Siachen and high altitude exemptions for the last 6 months, plus Section 89 plus Form 10E for the 4-year arrears split. Refund of Rs 8.7 lakh issued instead of Rs 9.4 lakh demand. Net swing approximately Rs 18 lakh. - Col R K Singh (Retd), Indian Army officer, Pune.</p>
                <p>Retired from Punjab National Bank in December 2025 after 32 years. Final settlement Rs 24 lakh leave encashment, Rs 21 lakh gratuity, Rs 6 lakh CGEGIS savings. My pre-Patron CA showed all retirement benefits as fully exempt - assuming nationalized bank counts as government. Patron correctly identified PSU/nationalized bank classification - Section 10(10AA)(ii) Rs 25 lakh cap applied (no excess), Section 10(10) Rs 20 lakh cap (Rs 1 lakh excess taxable). Saved me from a future scrutiny notice and recomputed taxable correctly. - Mrs Sarita P, PNB Branch Manager (Retd), Mumbai.</p>
                <p><strong>Outcome Proof:</strong> Rs 26 lakh saved across three government employee retirement engagements in FY 2024-25 closing - (a) Pune retired Army Lt Col with Siachen posting - Rule 2BB allowances plus Section 10(10AA) plus Section 89 saving Rs 8.7 lakh refund swing, (b) Delhi retired Senior Joint Secretary IAS - full Section 10 stack with 7th CPC arrears Section 89 relief saving Rs 11 lakh tax, (c) Mumbai retired SBI Deputy GM - correct PSU classification preventing future scrutiny notice plus Section 89 reducing effective tax by Rs 6 lakh.</p>
                <p><strong>With offices in Pune (PCDA(O), AFA Khadakwasla, Southern Command HQ), Mumbai (Western Naval Command, SBI HO, RBI), Delhi (South Block ministries, IRS, IB) and Gurugram (HUDA, MEA training), Patron Accounting serves government employees across India - in-person and remotely.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Old Regime vs New Regime - Government Employees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Deduction or Exemption</th>
                            <th>Old Tax Regime</th>
                            <th>New Tax Regime (Section 115BAC) - Default</th>
                        </tr>
</thead>
                    <tbody>
                        
                        <tr><td><strong>Section 16 Standard Deduction</strong></td><td>Rs 50,000</td><td>Rs 75,000 (FY 2025-26 onwards)</td></tr>
                        <tr><td><strong>Section 16(iii) Professional Tax</strong></td><td>Allowed (varies by State, typical Rs 200 per month)</td><td>NOT allowed</td></tr>
                        <tr><td><strong>Section 80C (GPF, PPF, ELSS, LIC, principal home loan)</strong></td><td>Rs 1.5 lakh</td><td>NOT allowed</td></tr>
                        <tr><td><strong>Section 80CCD(1) NPS Employee Contribution</strong></td><td>Within Section 80CCE Rs 1.5 lakh cap</td><td>NOT allowed</td></tr>
                        <tr><td><strong>Section 80CCD(1B) NPS Additional</strong></td><td>Rs 50,000 over and above 80CCE</td><td>Rs 50,000 ALLOWED (both regimes)</td></tr>
                        <tr><td><strong>Section 80CCD(2) NPS Employer Contribution</strong></td><td>14 percent (Central + Railways) or 10 percent (State + PSU); no cap</td><td>14 percent (Central + Railways) or 10 percent (State + PSU); no cap; ALLOWED both regimes</td></tr>
                        <tr><td><strong>Section 80D Health Insurance</strong></td><td>Rs 25,000 self plus Rs 50,000 senior parents</td><td>NOT allowed</td></tr>
                        <tr><td><strong>HRA Exemption Section 10(13A)</strong></td><td>Allowed if rent paid (NOT for CCS-allotted government quarters)</td><td>NOT allowed</td></tr>
                        <tr><td><strong>LTC/LTA Section 10(5)</strong></td><td>Allowed - 4 LTCs in 4-year block under CCS</td><td>NOT allowed</td></tr>
                        <tr><td><strong>Section 10(10AA) Leave Encashment</strong></td><td>FULL (govt) / Rs 25 lakh cap (non-govt)</td><td>FULL (govt) / Rs 25 lakh cap (non-govt) - RETAINED in both</td></tr>
                        <tr><td><strong>Section 10(10) Gratuity</strong></td><td>FULL (govt) / Rs 20 lakh cap (non-govt)</td><td>FULL (govt) / Rs 20 lakh cap (non-govt) - RETAINED in both</td></tr>
                        <tr><td><strong>Section 10(10A) Commuted Pension</strong></td><td>FULL (govt) / partial (non-govt)</td><td>FULL (govt) / partial (non-govt) - RETAINED in both</td></tr>
                        <tr><td><strong>Section 10(14) Defence Allowances (Rule 2BB)</strong></td><td>Siachen, high altitude, counter-insurgency, field area as per Rule 2BB limits</td><td>Rule 2BB limits - RETAINED in both</td></tr>
                        <tr><td><strong>Section 10(18) Gallantry Award Pension</strong></td><td>FULL exemption</td><td>FULL exemption - RETAINED in both</td></tr>
                        <tr><td><strong>Section 24(b) Home Loan Interest (Self-Occupied)</strong></td><td>Rs 2 lakh</td><td>NOT allowed</td></tr>
                        <tr><td><strong>Section 87A Rebate</strong></td><td>Rs 12,500 (zero tax up to Rs 5 lakh)</td><td>Rs 60,000 (zero tax up to Rs 12 lakh)</td></tr>
                        <tr><td><strong>Recommendation for Government Employees</strong></td><td>PREFERRED if Section 80C plus 80CCD(1B) plus 80D plus HRA plus 24(b) exceeds Rs 4 lakh</td><td>PREFERRED only if minimal deductions (rare for government employees with home loan, GPF, NPS, HRA)</td></tr>


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
                    <li><strong><a href="/income-tax-return/">Income Tax Return Filing Master Hub</a></strong> - hub-and-spoke routing across all 7 ITR forms and 14 sub-services including individual, business, professional, capital gains, F and O, crypto, NRI and company filings.</li>
                    <li><strong><a href="/itr-for-salary/">ITR for Salary (Private Sector Salaried)</a></strong> - sibling service for private-sector salaried employees with single-employer ITR-1, multi-Form-16 consolidation, ESOP and RSU perquisite, capital gains overlay. Different exemption profile from government employees.</li>
                    <li><strong><a href="/itr-for-capital-gains/">ITR for Capital Gains (HNI Multi-Asset)</a></strong> - for government employees with multi-asset portfolios; STCG Section 111A, LTCG Section 112A, mutual funds, property, gold.</li>
                    <li><strong><a href="/itr-for-property-sale/">ITR for Property Sale</a></strong> - for government employees disposing of second/inherited house property; Section 54, 54EC, 54F reinvestment exemption planning.</li>
                    <li><strong><a href="/tax-planning-services/">Tax Planning Services</a></strong> - regime selection, advance tax planning, Section 89 arrears strategy, GPF vs NPS vs UPS choice for government employees.</li>
                    <li><strong><a href="/income-tax-notice-for-defective-return/">Income Tax Notice for Defective Return (Section 139(9))</a></strong> - 15-day cure window for defective returns; common for government employees with wrong Section 10 exemption stack or missed Form 10E.</li>
                    <li><strong><a href="/income-tax-notice/">Income Tax Notice Response (Sections 143, 148)</a></strong> - representation for Section 143(1) demand, Section 143(2) scrutiny, Section 148 reassessment notices.</li>
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
                    <li><strong>Income Tax Act, 1961</strong> - governing statute for AY 2026-27 government employee returns. The new Income Tax Act 2025 applies to FY 2026-27 income (Tax Year 2026-27 returns due in 2027) and retains substantive provisions for government employee taxation. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Department e-filing portal</a>.</li>
                    <li><strong>Section 10(5)</strong> - Leave Travel Concession; CCS LTC under government rules; tax exemption on economy class air or AC first class rail to declared home town and any place in India; 4 LTCs in 4-year block.</li>
                    <li><strong>Section 10(7)</strong> - Foreign service allowance; government employees on foreign posting (diplomats, attaches) - allowances and perquisites FULLY EXEMPT.</li>
                    <li><strong>Section 10(10)</strong> - Gratuity; Central and State Government FULLY EXEMPT; non-government under Payment of Gratuity Act 1972 capped at Rs 20 lakh.</li>
                    <li><strong>Section 10(10A)</strong> - Commuted pension; Central and State Government FULLY EXEMPT; non-government - 1/3 (with gratuity) or 1/2 (without gratuity) of normal commuted pension exempt.</li>
                    <li><strong>Section 10(10AA)</strong> - Leave encashment; Section 10(10AA)(i) Central and State Government FULLY EXEMPT; Section 10(10AA)(ii) non-government capped Rs 25 lakh per Notification S.O. 2276(E) dated 24 May 2023 (raised from Rs 3 lakh).</li>
                    <li><strong>Section 10(13A)</strong> - House Rent Allowance; available to government employees who pay rent for own accommodation; NOT applicable for CCS-allotted government quarters.</li>
                    <li><strong>Section 10(14) read with Rule 2BB of Income Tax Rules 1962</strong> - Special allowances including Siachen Rs 7,000 per month, High Altitude Rs 1,060-1,600, Counter-Insurgency Rs 3,900-4,200, High Active Field Area Rs 4,200, Compensatory Field Area Rs 2,600, Modified Field Area Rs 1,000, Border/Remote Rs 200-1,300, Transport for disabled employee Rs 3,200, Uniform/Kit Maintenance up to actual expenditure.</li>
                    <li><strong>Section 10(18)</strong> - Gallantry award pension; Param Vir Chakra, Maha Vir Chakra, Vir Chakra, Ashoka Chakra, Kirti Chakra, Shaurya Chakra recipients - FULLY EXEMPT including family pension.</li>
                    <li><strong>Section 10(19)</strong> - Family pension received by family of armed forces personnel killed in operational duty - FULLY EXEMPT.</li>
                    <li><strong>CBDT Instruction F.No. 200/51/99-ITA1</strong> - Disability pension for armed forces personnel; both service component and disability element FULLY EXEMPT for invalided personnel and aggravated-disability cases.</li>
                    <li><strong>Section 16(ia)</strong> - Standard deduction Rs 50,000 (old regime) or Rs 75,000 (new regime FY 2025-26 onwards).</li>
                    <li><strong>Section 16(iii)</strong> - Professional tax deduction (old regime only); varies by State.</li>
                    <li><strong>Section 17</strong> - Definition of salary including basic, DA, allowances, bonus, perquisites and profits in lieu of salary.</li>
                    <li><strong>Section 80C</strong> - Up to Rs 1.5 lakh deduction (GPF, PPF, ELSS, principal home loan, life insurance, ULIP) - old regime only.</li>
                    <li><strong>Section 80CCD(1)</strong> - NPS Tier-1 employee contribution at 10 percent of Basic plus DA within Section 80CCE Rs 1.5 lakh cap (old regime).</li>
                    <li><strong>Section 80CCD(1B)</strong> - NPS additional contribution Rs 50,000 over and above Section 80CCE - ALLOWED in both old and new regimes.</li>
                    <li><strong>Section 80CCD(2)</strong> - NPS employer contribution; 14 percent of Basic plus DA for Central Government and Indian Railways; 10 percent for State Government and PSU; not subject to Section 80CCE cap; ALLOWED in both regimes.</li>
                    <li><strong>Section 80CCE</strong> - aggregate Rs 1.5 lakh cap covering Sections 80C, 80CCC and 80CCD(1).</li>
                    <li><strong>Section 80D</strong> - Health insurance premium - Rs 25,000 self plus Rs 50,000 for senior parents (old regime only).</li>
                    <li><strong>Section 80E</strong> - Education loan interest deduction - old regime only.</li>
                    <li><strong>Section 87A</strong> - Rebate Rs 60,000 new regime (zero tax up to Rs 12 lakh) or Rs 12,500 old regime (zero tax up to Rs 5 lakh); Resident individuals only.</li>
                    <li><strong>Section 89 read with Rule 21A</strong> - Relief on salary arrears via year-wise reallocation; Form 10E mandatory online BEFORE ITR submission.</li>
                    <li><strong>Section 111A</strong> - STCG on listed equity at 20 percent (post Budget 2024).</li>
                    <li><strong>Section 112A</strong> - LTCG on listed equity at 12.5 percent above Rs 1.25 lakh (post Budget 2024).</li>
                    <li><strong>Section 115BAC</strong> - New tax regime (default for non-business taxpayers from AY 2024-25); salaried opt-in for old regime done directly in ITR (no Form 10-IEA needed).</li>
                    <li><strong>Section 139(1)</strong> - Mandatory return filing for income above basic exemption; AY 2026-27 due date 31 July 2026 for ITR-1 and ITR-2.</li>
                    <li><strong>Section 139(9)</strong> - Defective return notice; 15-day cure window.</li>
                    <li><strong>Section 234F</strong> - Late filing fee Rs 5,000 (Rs 1,000 if total income up to Rs 5 lakh).</li>
                    <li><strong>Section 234A</strong> - Interest at 1 percent per month from 1 August 2026 on unpaid tax.</li>
                    <li><strong>CCS (Pension) Rules 1972</strong> - Defined-benefit pension scheme for Central Government employees joining before 1 January 2004.</li>
                    <li><strong>National Pension System (NPS)</strong> - Defined-contribution scheme for Central Government employees joining on or after 1 January 2004; PFRDA-regulated.</li>
                    <li><strong>Unified Pension Scheme (UPS)</strong> - Effective 1 April 2025; optional hybrid scheme for Central Government employees; defined assured pension component plus NPS contribution refund.</li>
                    <li><strong>Notification S.O. 2276(E) dated 24 May 2023</strong> - Raised Section 10(10AA)(ii) non-government leave encashment cap from Rs 3 lakh to Rs 25 lakh.</li>
                    <li><strong>Payment of Gratuity Act 1972</strong> - Section 10(10) gratuity cap for non-government employees at Rs 20 lakh.</li>
                    <li><strong>CBDT Notification 5/2022 dated 29 July 2022</strong> - 30-day e-verification window post-ITR submission.</li>
                    <li><strong>Central Board of Direct Taxes (CBDT)</strong> - administrative authority. <a href="https://incometaxindia.gov.in/Pages/communications/notifications.aspx" target="_blank" rel="noopener">CBDT Notifications</a>.</li>
                    <li><strong>Defence Accounts Department</strong> - Controller General of Defence Accounts (CGDA), Principal CDA (Officers) PCDA(O) Pune for defence officers, PCDA Allahabad for OR/JCOs Form 16 issuance.</li>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions</h2>
                    <p class="faq-expanded__lead">Long-tail answers on government employee ITR filing for AY 2026-27 - Section 10(10AA) leave encashment full exemption, PSU vs government classification, disability pension, defence allowances under Rule 2BB, NPS Section 80CCD(2), ITR form selection, Section 89 Form 10E sequencing and old vs new regime decision.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Are government employees fully exempt from leave encashment tax?</h3>
                        <div class="faq-expanded__a"><p>Central Government and State Government employees: YES, FULLY EXEMPT under Section 10(10AA)(i) on retirement, superannuation, or resignation. Includes IAS, IPS, IRS, IFS, Indian Forest Service, defence personnel, paramilitary, police, Indian Railways. Non-government employees including PSU employees (BHEL, NTPC, ONGC, Coal India), nationalized bank employees (SBI, PNB, BoB), LIC, statutory corporations - exemption capped at Rs 25 lakh under Section 10(10AA)(ii) per Notification S.O. 2276(E) dated 24 May 2023 (raised from Rs 3 lakh).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Are PSU employees treated as government for tax purposes?</h3>
                        <div class="faq-expanded__a"><p>NO for Section 10(10AA), 10(10) and 10(10A) full exemption purposes. PSU employees, nationalized bank employees, statutory corporation employees, LIC employees, public sector insurance employees are treated as NON-GOVERNMENT - leave encashment capped at Rs 25 lakh, gratuity at Rs 20 lakh, commuted pension partial. PSU employees DO get Section 80CCD(2) NPS employer contribution at 10 percent of Basic plus DA (Central Government employees get 14 percent). This is the most common misclassification error in government employee ITRs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How is disability pension taxed for armed forces?</h3>
                        <div class="faq-expanded__a"><p>FULLY EXEMPT per CBDT Instruction F.No. 200/51/99-ITA1. Both service component AND disability element of disability pension are exempt from income tax. Applies to armed forces personnel of all ranks who are (a) invalided out due to disability boarded by Release Medical Board, OR (b) whose disability is attributable to or aggravated by service. Documentation: Release Medical Board (RMB) report and disability pension order. Common error: claiming only the disability element - both components are exempt under the CBDT instruction.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Which defence allowances are exempt under Section 10(14)?</h3>
                        <div class="faq-expanded__a"><p>Section 10(14) read with Rule 2BB exempts specific defence allowances within prescribed monthly limits: Siachen Allowance Rs 7,000 per month; High Altitude (9,000 to 15,000 ft) Rs 1,060 per month; High Altitude (above 15,000 ft) Rs 1,600 per month; Counter-Insurgency Rs 3,900 per month (JCO/OR) and Rs 4,200 per month (officers); High Active Field Area Rs 4,200 per month; Compensatory Field Area Rs 2,600 per month; Modified Field Area Rs 1,000 per month; Border/Remote Rs 200 to Rs 1,300 per month; Uniform/Kit Maintenance up to actual expenditure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is NPS contribution deducted for central government employees?</h3>
                        <div class="faq-expanded__a"><p>Three layers. Section 80CCD(1) - 10 percent of Basic plus DA employee contribution within Section 80CCE Rs 1.5 lakh aggregate cap (with Section 80C, 80CCC). Section 80CCD(1B) - additional Rs 50,000 above the Rs 1.5 lakh cap; available BOTH old and new regimes. Section 80CCD(2) - employer contribution by Central Government up to 14 percent of Basic plus DA (10 percent for State Government and PSU); NOT subject to 80CCE cap; available BOTH regimes. Total potential NPS deduction for Central Government employee: Rs 1.5 lakh plus Rs 0.5 lakh plus 14 percent of (Basic plus DA).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Which ITR form should a government employee use?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 (Sahaj) if you have salary income plus ONE house property plus interest income or agriculture income up to Rs 5,000, with total income up to Rs 50 lakh. ITR-2 if you have any capital gains, multiple house properties, foreign income, foreign assets, total income above Rs 50 lakh, or LTCG above Rs 1.25 lakh under Section 112A. Government employees with home loan and salary typically use ITR-1; defence officers with multi-asset HNI portfolios typically use ITR-2.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How to claim Section 89 relief for Pay Commission arrears?</h3>
                        <div class="faq-expanded__a"><p>Three steps. (1) Compute year-wise reallocation of the arrears to actual FYs of accrual using Rule 21A. (2) Compute Section 89 relief as current year tax with arrears minus current year tax without arrears minus sum of incremental hypothetical year-wise taxes. (3) File Form 10E ONLINE on incometax.gov.in BEFORE submitting your ITR; failure to file Form 10E first results in full disallowance of arrears relief regardless of underlying eligibility. Applies to 7th Pay Commission arrears, DA arrears, promotion-based pay fixation, MACP, NFU.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Old vs new regime - which is better for government employees?</h3>
                        <div class="faq-expanded__a"><p>OLD regime is typically better for government employees due to abundant deduction stack: Section 16 standard deduction Rs 50,000 plus Section 80C Rs 1.5 lakh (GPF, PPF, ELSS, principal home loan) plus Section 80CCD(1B) Rs 50,000 NPS additional plus Section 80D Rs 25,000 to 50,000 plus HRA exemption (if rent paid) plus LTC exemption plus Section 24(b) Rs 2 lakh interest. Total typical deductions Rs 4 to 6 lakh. New regime: standard deduction Rs 75,000 plus Section 80CCD(2) employer NPS only - typically Rs 1 lakh deductions. For Central Government employees with home loan and family, OLD regime saves Rs 30,000 to Rs 1 lakh annually.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Sarkari naukri ITR kaise file karein AY 2026-27 ke liye? (How to file government job ITR for AY 2026-27)</h3>
                        <div class="faq-expanded__a"><p>AY 2026-27 ke liye government employee ITR-1 ya ITR-2 file kar sakte hain. Last date 31 July 2026 hai. Central aur State government employees ko Section 10(10AA), Section 10(10) aur Section 10(10A) ke under FULL exemption milti hai retirement par - leave encashment, gratuity aur commuted pension par koi tax nahi. PSU employees aur nationalized bank employees (SBI, PNB) ko NON-government treatment milta hai - Rs 25 lakh leave encashment cap, Rs 20 lakh gratuity cap. Defence personnel ko Section 10(14) Rule 2BB ke under Siachen Rs 7,000 per month, high altitude Rs 1,060-1,600, counter-insurgency Rs 3,900-4,200 exempt hota hai. Disability pension CBDT F.No. 200/51/99-ITA1 ke under FULLY EXEMPT. Pay Commission arrears par Section 89 relief lene ke liye Form 10E ITR se PEHLE file karna zaroori hai - baad mein file kiya to relief disallowed ho jata hai. NPS Section 80CCD(2) employer contribution Central Government ke liye 14 percent hota hai, State aur PSU ke liye 10 percent. Old regime usually better hota hai government employees ke liye due to GPF, NPS, home loan, HRA stack. Patron Accounting Rs 2,499 se start hone wali filing offer karta hai. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Section 10(10AA) full exemption?</strong> Central + State government employees only. PSU, nationalized banks, statutory corporations - capped Rs 25 lakh per Notification S.O. 2276(E).</li>
                    <li><strong>Section 10(10) gratuity?</strong> Government FULLY EXEMPT. Non-government - Rs 20 lakh cap under Payment of Gratuity Act 1972.</li>
                    <li><strong>Section 10(18) gallantry pension?</strong> PVC/MVC/VrC/AC/KC/SC pensioners FULLY EXEMPT. Family pension to gallantry family also exempt.</li>
                    <li><strong>NPS Section 80CCD(2) employer rate?</strong> 14 percent of Basic plus DA for Central Government and Indian Railways. 10 percent for State Government and PSU.</li>
                    <li><strong>Section 89 arrears Form 10E?</strong> Form 10E MUST be filed online BEFORE ITR. Late Form 10E results in full relief disallowance.</li>
                    <li><strong>Defence Siachen exemption?</strong> Rs 7,000 per month under Section 10(14) read with Rule 2BB. Plus high altitude tier Rs 1,060 (9-15K ft) or Rs 1,600 (above 15K ft).</li>
                    <li><strong>Disability pension tax?</strong> FULLY EXEMPT per CBDT F.No. 200/51/99-ITA1 - both service and disability components.</li>
                    <li><strong>ITR form for government?</strong> ITR-1 for salary plus 1 house property plus interest. ITR-2 for capital gains, multiple houses or foreign income.</li>
                    <li><strong>When is ITR due?</strong> 31 July 2026 for ITR-1 and ITR-2 non-audit cases.</li>
                    <li><strong>Old or new regime for government?</strong> Old regime usually wins - government deduction stack typically Rs 4-6 lakh vs Rs 1 lakh in new regime.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">AY 2026-27 Government Employee ITR Countdown</h2>
            <div class="content-text">
                
                Government employees face four firm dates for AY 2026-27. Form 10E filing BEFORE ITR submission is mandatory for any Section 89 arrears relief on 7th Pay Commission, DA, promotion, MACP or NFU - late Form 10E results in full relief disallowance regardless of underlying eligibility. ITR-1 and ITR-2 non-audit cases under Section 139(1) due 31 July 2026. Belated return under Section 139(4) until 31 December 2026 with Section 234F fee up to Rs 5,000 and Section 234A interest at 1 percent per month. Revised return under Section 139(5) until 31 March 2027. Retirement-year filers should gather PAO/PCDA settlement statements, leave encashment break-up, gratuity calculation, commuted pension order, CGEGIS settlement and final pension order EARLY - delays in pension first credit do not extend the deadline. <strong>Call +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 15-minute Form 16 review with a CA - we respond within 2 hours.

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron for AY 2026-27 Government Employee ITR</h2>
            <div class="content-text" style="text-align:left;">
                
                <p>Government employee ITR is the area where one Section 10 sub-clause makes a Rs 5 to 25 lakh difference at retirement - and where DIY platforms applying generic salaried-employee logic systematically mis-state the tax. A Central Government retiree with Rs 18 lakh leave encashment shown as taxable salary in Form 16 pays Rs 5.6 lakh tax that should be ZERO under Section 10(10AA)(i). A defence officer posted at Siachen for 9 months without Rule 2BB allowance optimization pays tax on Rs 1.5 lakh that should be exempt. A PSU employee misclassified as full-exemption government class faces a future Section 143(2) scrutiny notice and Section 270A penalty. A 7th Pay Commission arrears claim filed without Form 10E first results in full relief disallowance.</p>
                <p>Patron Accounting has filed government-employee ITRs for over 4,500 Central, State, PSU and Defence employees since 2019. Whether your employer is Indian Railways, the Indian Army, BHEL or the Pune State Treasury, the correct answer always begins with employer-class identification and Section 10 sub-clause matching. With offices in Pune (PCDA(O), AFA Khadakwasla, Southern Command HQ), Mumbai (Western Naval Command, SBI HO, RBI), Delhi (South Block ministries, IRS, IB) and Gurugram (HUDA, MEA training) and remote consultations across all states.</p>
                <p>Ready to file your AY 2026-27 government employee ITR? <strong>Call CA Sundaram Gupta at +91 945 945 6700</strong> or <strong>WhatsApp us</strong> for a free 15-minute Form 16 review. We respond within 2 hours during business hours.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20please%20share%20a%20written%20quote%20for%20my%20government%20employee%20ITR%20filing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
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
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pan-India Coverage and Related Patron Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Government employee ITR filing is delivered remotely from our Pune, Mumbai, Delhi and Gurugram offices to government employees across India. Indian Railways, BSF, ITBP, CRPF, defence services personnel served via remote consultations across all states. Explore the master ITR hub and adjacent compliance services below.</p>
            
            
            <div class="pa-cross-block">
                <h3 class="pa-cross-title">Related Patron Services</h3>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR Filing Master Hub</strong><span>All 7 ITR forms; 14 sub-services</span></div>
                    </a>
                    <a href="/itr-for-salary/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Salary (Private Sector)</strong><span>Sibling - private sector salaried</span></div>
                    </a>
                    <a href="/itr-for-capital-gains/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Capital Gains</strong><span>HNI multi-asset; Sections 111A, 112A</span></div>
                    </a>
                    <a href="/itr-for-property-sale/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>ITR for Property Sale</strong><span>Section 54, 54EC, 54F reinvestment</span></div>
                    </a>
                    <a href="/tax-planning-services/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Tax Planning Services</strong><span>Regime, advance tax, Section 89</span></div>
                    </a>
                    <a href="/income-tax-notice-for-defective-return/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Defective Return Notice</strong><span>Section 139(9) - 15-day cure window</span></div>
                    </a>
                    <a href="/income-tax-notice/" class="pa-cross-card">
                        <div class="pa-cross-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                        <div class="pa-cross-text"><strong>Income Tax Notice Response</strong><span>Sections 143, 148 response</span></div>
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
            <p><strong>Content Created:</strong> 11 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 11 November 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team &middot; Patron Accounting LLP</p>
            <p>Tier 1 quarterly review during ITR season plus post-Budget and post-CBDT/DPIIT/Defence MoD notification refresh. Triggers for review: Section 10(10AA) cap notification updates, defence allowance limit revisions per Rule 2BB, NPS contribution cap changes under Section 80CCD, CBDT disability pension instruction amendments, gallantry award updates, Pay Commission/MACP/NFU arrears notifications, CCS Pension Rules / NPS / UPS scheme changes, new Income Tax Act 2025 transitional rules and Section 234F/234A interest rate changes. Sources: Income Tax Department portal (incometax.gov.in), CBDT notifications (incometaxindia.gov.in), Defence Accounts Department CGDA circulars, PCDA(O) Pune and PCDA Allahabad notifications, Department of Pension and Pensioners' Welfare and Ministry of Defence.</p>
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
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
