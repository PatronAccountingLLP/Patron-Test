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
    <title>GST Refund for Textile Manufacturers — Inverted Duty</title>
    <meta name="description" content="GST refund for textile manufacturers under Rule 89(5). Cotton, MMF, denim cluster coverage. Notification 20/2018, CGST Instruction 6/2025. Rs 22,000+.">
    <link rel="canonical" href="/gst-refund-for-textile-manufacturers">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund for Textile Manufacturers — Inverted Duty">
    <meta property="og:description" content="GST refund for textile manufacturers under Rule 89(5). Cotton, MMF, denim cluster coverage. Notification 20/2018, CGST Instruction 6/2025. Rs 22,000+.">
    <meta property="og:url" content="/gst-refund-for-textile-manufacturers/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-for-textile-manufacturers-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund for Textile Manufacturers — Inverted Duty">
    <meta name="twitter:description" content="GST refund for textile manufacturers under Rule 89(5). Cotton, MMF, denim cluster coverage. Notification 20/2018, CGST Instruction 6/2025. Rs 22,000+.">
    <meta name="twitter:image" content="/images/gst-refund-for-textile-manufacturers-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-for-textile-manufacturers/#breadcrumb",
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
          "name": "Textile Manufacturers",
          "item": "/gst-refund-for-textile-manufacturers/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-for-textile-manufacturers/#faq",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why does textile manufacturing have inverted duty structure and which fibres are affected?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Textile IDS arises because input rates exceed output rates. Most common pattern - MMF/polyester yarn (12 percent input GST) feeds into MMF fabric (5 percent output GST). Polyester chips/PSF (18 percent) feeding fabric (5 percent) is even sharper IDS. Dyes and chemicals (18 percent) used in cotton or MMF processing feeding fabric (5 percent) creates IDS for processing units. Cotton-to-cotton-fabric chain (5 to 5) has limited IDS - mainly chemicals/dyes ITC. Surat MMF cluster has the highest IDS, Bhiwandi powerloom moderate-to-high, Tirupur cotton knitwear moderate, Coimbatore cotton spinning generally none."
          }
        },
        {
          "@type": "Question",
          "name": "What is Notification 20/2018-CT(R) and how did it unblock textile IDS refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 20/2018-Central Tax (Rate) dated 26 July 2018 amended Notification 5/2017-CT(R) to allow refund of accumulated ITC on textile fabric on account of inverted tax structure with effect from 01 August 2018. Pre-amendment, textile fabric was on the restricted list (Serial Numbers 1 to 7 covering knitted, cotton woven, vegetable fibre, MMF woven, and staple fibre fabric). Post-amendment, the restriction was lifted prospectively. However, ITC accumulated for the period July 2017 to July 2018 had to LAPSE under the formula in Rule 89(5) mutatis mutandis - reported in GSTR-3B Column 4B(2) for August 2018 per Circular 56/30/2018-GST."
          }
        },
        {
          "@type": "Question",
          "name": "Textile manufacturer ka GST refund kaise milta hai - Surat saree ya Tirupur knitwear ke liye? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indian textile manufacturers ka GST refund Section 54(3) ke under Rule 89(5) formula se milta hai. Inverted duty structure jab input rate output rate se zyada ho - typically MMF yarn 12 percent input se MMF fabric 5 percent output (Surat saree manufacturers ke liye classic situation). Cotton-to-cotton-fabric me IDS minimal hota hai but dyes/chemicals (18 percent) se thoda accumulation hota hai (Tirupur knitwear ke liye). Form GST RFD-01 me Statement 1A ke saath quarterly file karte hain. Net ITC me sirf inputs (yarn, dyes, chemicals, packing) include hote hain - input services aur capital goods VKC Footsteps SC 2021 ke baad exclude hain. Notification 20/2018-CT(R) ne 01.08.2018 se textile IDS refund unblock kiya. CGST Instruction 6/2025 (03.10.2025) ke baad 90 percent provisional refund 7 din me mil jata hai low-risk applicants ko."
          }
        },
        {
          "@type": "Question",
          "name": "How is Rule 89(5) refund formula applied for textile manufacturers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 89(5) formula - Refund Amount = (Net ITC x Inverted Rated Turnover / Total Adjusted Turnover) MINUS Tax Payable on Inverted Rated Turnover. Net ITC = ITC on INPUTS only (cotton yarn, MMF yarn, dyes, chemicals, packing); excludes input services (freight, professional fees, repair) and capital goods (knitting machines, looms, dyeing machines) per VKC Footsteps SC 2021. Inverted Rated Turnover = turnover of fabric/yarn/made-up at lower output rate. Total Adjusted Turnover = aggregate turnover excluding exempt. Tax Payable = output GST on inverted-rated supplies."
          }
        },
        {
          "@type": "Question",
          "name": "Are textile job workers (dyeing, printing, embroidery) eligible for IDS refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Per Circular 94/12/2019-GST dated 28 March 2019, textile job workers providing dyeing, printing, processing, embroidery, finishing, and similar services to principal manufacturers are eligible for IDS refund where their job work attracts inverted rate. Job work service rate is typically 5 percent under Notification 11/2017-CT(R) S.No. 26. Inputs - dyes (18 percent), chemicals (18 percent), embroidery thread (12 percent), zari (12 percent) - exceed output rate, creating IDS. Form ITC-04 quarterly return for goods sent to/from job worker is required compliance. Statement 1A captures both inputs and inverted-rated job work output."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for textile IDS refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard pack - Form GST RFD-01, Statement 1A (inputs and outputs invoice register), GSTR-1 (output declaration), GSTR-3B (ITC availed and tax paid), GSTR-2B (supplier-confirmed ITC), HSN-wise rate reconciliation, Net ITC computation worksheet, output product samples or declaration where classification disputed, and bank account validation from PFMS portal. For job workers - additionally Form ITC-04, principal-job worker agreement, raw material receipt evidence. For past-period lapse reconstruction (Aug 2018) - Rule 89(5) mutatis mutandis worksheet, GSTR-3B Column 4B(2) entry, and Form DRC-03 if shortfall."
          }
        },
        {
          "@type": "Question",
          "name": "Can ITC on input services and capital goods be claimed in IDS refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Per Notification 26/2018-CT dated 13 June 2018 (retrospective effect from 01 July 2017) and Union of India v VKC Footsteps India Pvt Ltd (Supreme Court, 2021), Net ITC under Rule 89(5) is restricted to INPUTS ONLY. Excluded - input services (freight, professional fees, machine repair, security, legal, audit, electricity above threshold), capital goods (knitting machines, looms, dyeing machines, embroidery machines, vehicles, factory premises construction), and any services not directly forming part of inputs. Capital goods ITC and input services ITC must be utilised against future output tax - not refunded under IDS."
          }
        },
        {
          "@type": "Question",
          "name": "How does CGST Instruction 6/2025 help textile manufacturers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CGST Instruction 6/2025 dated 03 October 2025 read with Notification 13/2025-CT dated 17 September 2025 extends the 90 percent provisional refund framework to IDS category effective 01 October 2025. Pre-instruction, IDS refund applicants typically waited 30 to 60 days for full sanction. Post-instruction, low-risk applicants (assessed under 8-factor risk audit covering GSTR record, supplier compliance, GSTR-2B match, DRC-03 pendency, documentation, past orders, claim pattern, registered tenure) get 90 percent provisional refund within 7 days of RFD-02 acknowledgement. Dramatic cash flow improvement, particularly for high-IDS Surat MMF and Bhiwandi powerloom manufacturers."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cluster-wise IDS refund pattern for Tirupur, Surat, Bhiwandi, Panipat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tirupur (Tamil Nadu, cotton knitwear) - moderate IDS, mainly from dyes and chemicals; quarterly Rs 1.5L to Rs 12L per GSTIN typical. Surat (Gujarat, MMF/synthetic/polyester sarees) - HIGH IDS classic 12 percent yarn to 5 percent fabric; quarterly Rs 5L to Rs 50L per GSTIN typical; largest single sector for textile refund volume. Bhiwandi (Maharashtra, powerloom synthetic and PV) - HIGH IDS; quarterly Rs 3L to Rs 30L per GSTIN typical. Panipat (Haryana, home furnishings) - moderate IDS for synthetic; quarterly Rs 2L to Rs 25L per GSTIN typical. Patron's quarterly pipelines are tuned to each cluster profile."
          }
        },
        {
          "@type": "Question",
          "name": "Aug 2018 lapse reversal incomplete tha to ab kya karein? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 20/2018-CT(R) ke under textile fabric ITC accumulated July 2017 se July 2018 tak ka lapse-reversal August 2018 GSTR-3B Column 4B(2) me karna tha. Department 2025-26 me notice bhej raha hai puchhne ke liye ki lapse correctly compute hua tha ya nahi. Patron ka cure - Rule 89(5) mutatis mutandis reconstruct karte hain 13-month period ke liye, original GSTR-3B entry se reconcile karte hain, agar shortfall hai to DRC-03 file karte hain Section 50(1) interest ke saath (Aug 2018 GSTR-3B due date se actual reversal date tak). Department fir bhi reject kare to Section 107 first appeal with detailed worksheet."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-for-textile-manufacturers/#service",
      "name": "GST Refund Services for Textile Manufacturers",
      "description": "Patron Accounting LLP provides end-to-end GST refund services for Indian textile manufacturers facing inverted duty structure where input rates (12 percent MMF yarn or 18 percent dyes and chemicals) exceed output rates (5 percent fabric and made-ups). Services include quarterly Rule 89(5) refund pipeline under Section 54(3) of CGST Act 2017 with Form GST RFD-01 and Statement 1A, cluster-specific optimisation across Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Erode, and Coimbatore, Notification 20/2018-CT(R) framework application, Circular 94/12/2019-GST job worker treatment, VKC Footsteps SC 2021 Net ITC discipline, CGST Instruction 6/2025 risk-based provisional refund optimisation, past-period lapse reconstruction, and Section 107 appeal for textile IDS rejections.",
      "serviceType": "GST Refund Service for Textile Sector",
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
            <li><span style="color:var(--orange);font-weight:600;">Textile GST Refund Services</span></li>
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
                        GST Refund for Textile Manufacturers in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Statement 1A inputs invoice register, GSTR-1, GSTR-3B, GSTR-2B, output invoices, HSN-wise rate reconciliation, Net ITC computation worksheet.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 22,000 per quarter for single-GSTIN textile manufacturer plus 18 percent GST; cluster-specific tiers up to Rs 38,000 for Surat MMF.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Any GST-registered textile manufacturer with input rate exceeding output rate; classic case is MMF yarn 12 percent input feeding MMF fabric 5 percent output.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Refund filing 7 to 12 days; sanction 22 to 60 days under CGST Instruction 6/2025 risk-based provisional refund path.</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20refund%20for%20my%20textile%20manufacturing%20unit.%20Please%20share%20a%20free%20diagnostic." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Textile GST Refund'/>
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
                                                                <option value="gst-refund-for-textile-manufacturers" selected>GST Refund for Textile Manufacturers</option>
                                <option value="gst-refund">GST Refund (General)</option>
                                <option value="gst-returns">GST Returns Filing</option>
                                <option value="gst-annual-returns">GST Annual Returns</option>
                                <option value="gst-audit">GST Audit</option>
                                <option value="iec-registration">IEC Registration</option>
                                <option value="gstat-appeal-exporters">GSTAT Appeal for Exporters</option>
                                <option value="gst-notice">GST Notice Response</option>
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron recovered Rs 1.65 crore quarterly IDS refund for our polyester saree unit in March 2026 after RFD-08 SCN questioned Net ITC. Their HSN reclassification and VKC Footsteps SC 2021 framework alignment got full RFD-06 within 50 days. 90 percent provisional landed within 22 days.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Sanjay Patel</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Surat Polyester Saree Manufacturer</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it is not expensive at all. Our Tirupur knitwear unit gets quarterly refund cycles done in 30 days end-to-end. Patron handles dyes and chemicals ITC reconciliation flawlessly.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Tirupur Cotton Knitwear Unit</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had a Department notice in 2025 asking about our August 2018 lapse reversal under Notification 20/2018-CT(R). Patron reconstructed the Rule 89(5) mutatis mutandis computation and filed DRC-03 with Section 50 interest. The notice closed in 6 weeks - no penalty.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Anjali Sharma</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, Bhiwandi Powerloom Group</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a dyeing job worker, our refund applications were getting rejected on job work classification. Patron pulled together Form ITC-04, principal-job worker agreement, and Circular 94/12/2019 to win the appeal. We now file refund every quarter with clean rejection record.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Mohan Krishnan</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner, Tirupur Dyeing Job Worker</div>
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
                    <p>From Tirupur cotton knitwear to Surat MMF synthetic, Bhiwandi powerloom to Panipat home furnishings, we manage quarterly IDS refund cycles for 60+ textile manufacturer clients across India.</p>
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
            <a href="#what-section" class="toc-pill">7-Cluster Framework</a>
            <a href="#who-section" class="toc-pill">Who Needs It</a>
            <a href="#services-section" class="toc-pill">Our Services</a>
            <a href="#procedure-section" class="toc-pill">8-Step Procedure</a>
            <a href="#documents-section" class="toc-pill">Documents</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Benefits</a>
            <a href="#comparison-section" class="toc-pill">4-Fibre Matrix</a>
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
                    <p><strong>&#128204; TL;DR - Textile GST Refund Services at a Glance</strong></p>
                    <p>Indian textile manufacturers face inverted duty structure (IDS) where input rates exceed output rates - most commonly MMF/synthetic yarn (12 percent input) feeding into fabric (5 percent output), or dyes and chemicals (18 percent input) feeding into cotton fabric (5 percent output). Section 54(3) of CGST Act 2017 read with Rule 89(5) of CGST Rules 2017 provides refund of accumulated ITC under Form GST RFD-01 with Statement 1A. Notification 20/2018-CT(R) unblocked textile IDS refund from 01 August 2018. CGST Instruction 6/2025 extends 90 percent provisional refund within 7 days effective 01 October 2025.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Foundational Provision</strong></td><td>Section 54(3) of CGST Act 2017 read with Rule 89(5) of CGST Rules 2017</td></tr>
                            <tr><td><strong>Refund Form</strong></td><td>Form GST RFD-01 with Statement 1A on <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></td></tr>
                            <tr><td><strong>Net ITC Definition</strong></td><td>Inputs only post VKC Footsteps SC 2021 (excludes input services and capital goods)</td></tr>
                            <tr><td><strong>Textile-Specific Notification</strong></td><td>Notification 20/2018-CT(R) dated 26.07.2018, effective 01.08.2018</td></tr>
                            <tr><td><strong>Lapsing Clarification</strong></td><td>Circular 56/30/2018-GST - July 2017 to July 2018 ITC lapse</td></tr>
                            <tr><td><strong>Job Worker Coverage</strong></td><td>Circular 94/12/2019-GST - fabric and job worker refund</td></tr>
                            <tr><td><strong>Provisional Refund Boost</strong></td><td>CGST Instruction 6/2025 dated 03.10.2025 - 90 percent within 7 days</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>The Indian textile sector is the second largest employer after agriculture and contributes approximately 13 percent of total industrial production and 12 percent of total exports. The sector spans cotton (Tirupur knitwear, Coimbatore spinning, Erode home textiles), man-made fibre (MMF/synthetic dominated by Surat polyester sarees, Bhiwandi powerloom), wool and silk (Ludhiana hosiery), and blended/denim categories. The GST regime initially imposed an asymmetric rate structure - dyes, chemicals, MMF yarn, and other inputs at 12 to 18 percent feeding into fabric output at 5 percent - creating systematic IDS across the sector.</p>
                <p>Patron Accounting LLP serves 60+ active textile manufacturer clients across all major clusters - Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Erode, and Coimbatore - with quarterly IDS refund pipelines. Our CA-led team brings 15+ years of textile sector GST refund experience covering Notification 20/2018-CT(R) framework, Rule 89(5) Net ITC formula post VKC Footsteps SC 2021, Circular 94/12/2019 job worker treatment, and CGST Instruction 6/2025 risk-based provisional refund optimisation.</p>
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
                <h2 class="section-title">The 7-Cluster Textile Framework</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund for textile manufacturers is the statutory recovery under <strong>Section 54(3) of the CGST Act 2017</strong> read with <strong>Rule 89(5) of the CGST Rules 2017</strong> of accumulated input tax credit on supplies subject to inverted duty structure - the situation where the GST rate on inputs (MMF yarn, polyester chips, dyes, chemicals, packing) exceeds the GST rate on outputs (fabric, made-ups, garments).</p>
                    <p>Indian textile manufacturing is geographically clustered with each cluster having distinct raw material, output, and IDS profile. Patron's textile refund practice is structured around these seven clusters:</p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                    <table>
                        <thead><tr><th>Cluster</th><th>State</th><th>Activity</th><th>IDS Profile</th><th>Quarterly Refund Range</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Tirupur</strong></td><td>Tamil Nadu</td><td>Cotton knitwear / hosiery</td><td>Moderate - dyes/chemicals ITC</td><td>Rs 1.5L to Rs 12L</td></tr>
                            <tr><td><strong>Surat</strong></td><td>Gujarat</td><td>MMF / synthetic / polyester sarees</td><td>HIGH - classic 12% input to 5% output</td><td>Rs 5L to Rs 50L</td></tr>
                            <tr><td><strong>Bhiwandi</strong></td><td>Maharashtra</td><td>Powerloom (synthetic, PV blend)</td><td>HIGH - 12% input to 5% output</td><td>Rs 3L to Rs 30L</td></tr>
                            <tr><td><strong>Panipat</strong></td><td>Haryana</td><td>Home furnishings, blankets, towels</td><td>Moderate (synthetic); lower (cotton)</td><td>Rs 2L to Rs 25L</td></tr>
                            <tr><td><strong>Ludhiana</strong></td><td>Punjab</td><td>Hosiery, woollen, knitwear</td><td>Moderate (acrylic); mixed (blended)</td><td>Rs 1L to Rs 15L</td></tr>
                            <tr><td><strong>Erode</strong></td><td>Tamil Nadu</td><td>Home textiles, bedsheets, towels</td><td>Lower - mainly chemicals ITC</td><td>Rs 1L to Rs 10L</td></tr>
                            <tr><td><strong>Coimbatore</strong></td><td>Tamil Nadu</td><td>Cotton spinning, yarn manufacturing</td><td>Generally no IDS; capital goods only</td><td>Rs 50K to Rs 5L</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p>The 4-fibre rate matrix in Section 13 maps cotton, MMF/synthetic, blended (PV/PC), and denim to their HSN codes, typical IDS situation, and refund range.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Textile GST Refund:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>Section 54(3) CGST Act 2017:</strong> Foundational provision - refund of accumulated ITC on inverted duty structure.</li>
                        <li><strong>Rule 89(5) CGST Rules 2017:</strong> Net ITC formula for IDS refund computation.</li>
                        <li><strong>Net ITC:</strong> ITC on INPUTS only (not input services or capital goods) per Rule 89(5) post VKC Footsteps SC 2021.</li>
                        <li><strong>Statement 1A:</strong> Inputs and outputs invoice register for IDS refund (Rule 89(2)(h)).</li>
                        <li><strong>Notification 5/2017-CT(R) dated 28.06.2017:</strong> Original restriction on textile fabric IDS refund (S.Nos. 1-7).</li>
                        <li><strong>Notification 20/2018-CT(R) dated 26.07.2018:</strong> Unblocked textile IDS refund effective 01.08.2018.</li>
                        <li><strong>Notification 26/2018-CT dated 13.06.2018:</strong> Retrospective Rule 89(5) amendment - inputs only.</li>
                        <li><strong>Circular 56/30/2018-GST:</strong> Lapsing mechanic for July 2017 to July 2018 textile ITC.</li>
                        <li><strong>Circular 94/12/2019-GST:</strong> Fabric manufacturer and textile job worker refund clarification.</li>
                        <li><strong>CGST Instruction 6/2025 dated 03.10.2025:</strong> 90 percent provisional refund extension to IDS.</li>
                        <li><strong>VKC Footsteps SC 2021:</strong> Net ITC narrowing to inputs only - constitutional validity upheld.</li>
                        <li><strong>Job Work (Section 2(68) CGST):</strong> Treatment or process on goods belonging to another registered person.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Textile GST Refund</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IDS Refund</span>
                        <strong>Rule 89(5) CGST Rules</strong>
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
            <h2 class="section-title">Who Needs Textile IDS Refund Services?</h2>
            <div class="content-text">
                
                <p>Any GST-registered textile manufacturer accumulating ITC because input rates exceed output rates qualifies for IDS refund under Section 54(3) and Rule 89(5). The service applies across the fibre value chain:</p>
                <ul>
                    <li><strong>Surat polyester saree and dress material manufacturers</strong> - the classic IDS case (12 percent MMF yarn to 5 percent fabric).</li>
                    <li><strong>Bhiwandi powerloom operators</strong> - synthetic and PV blend fabric production with high yarn/chemicals ITC accumulation.</li>
                    <li><strong>Tirupur cotton knitwear units</strong> - dyes and chemicals ITC accumulation on cotton-to-cotton-fabric chain.</li>
                    <li><strong>Panipat home furnishing manufacturers</strong> - made-ups, blankets, towels, bed linen with mixed synthetic-cotton input profile.</li>
                    <li><strong>Ludhiana hosiery and woollen manufacturers</strong> - acrylic yarn and dyes ITC accumulation.</li>
                    <li><strong>Erode home textile units</strong> - bedsheets, towels, made-ups with chemicals ITC.</li>
                    <li><strong>Coimbatore cotton spinning mills</strong> - limited IDS but capital goods ITC on machinery.</li>
                    <li><strong>Textile job workers</strong> - dyeing, printing, processing, embroidery, finishing units under Circular 94/12/2019-GST.</li>
                </ul>
                <p><strong>Pre-condition:</strong> GST registration is mandatory for any textile manufacturer with turnover above Rs 40 lakh (goods) or Rs 20 lakh (services) under Section 22 CGST Act. If not yet registered, complete <a href="/gst-registration/">GST registration</a> before the first refund cycle. For exporters of textile goods, <a href="/iec-registration/">IEC registration</a> is also mandatory under the Foreign Trade Policy.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for Textile Manufacturers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Quarterly Textile IDS Refund Pipeline</strong></td><td>HSN-wise rate reconciliation, Rule 89(5) Net ITC computation, Statement 1A preparation, GSTR-1/3B/2B reconciliation, Form RFD-01 portal filing. 7 to 12 days end-to-end. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Cluster-Specific Refund Optimisation</strong></td><td>Tuned pipelines for all 7 clusters - Tirupur cotton knitwear, Surat MMF, Bhiwandi powerloom, Panipat home furnishings, Ludhiana hosiery, Erode home textiles, Coimbatore spinning. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Past Period Lapsing Reconstruction</strong></td><td>Rule 89(5) mutatis mutandis computation for July 2017 to July 2018 lapse under Notification 20/2018-CT(R); GSTR-3B Column 4B(2) reconciliation; DRC-03 with Section 50 interest if needed. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Textile Job Work Refund</strong></td><td>Dyeing, printing, processing, embroidery, finishing units under Circular 94/12/2019-GST. Form ITC-04 coordination with principal manufacturer. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>CGST Instruction 6/2025 Provisional Refund</strong></td><td>8-factor risk audit optimisation to qualify as low-risk - 90 percent provisional refund within 7 days of RFD-02 post 01.10.2025. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Section 107 Appeal for Textile Rejections</strong></td><td>APL-01 appeal with Notification 20/2018, Circular 94/12/2019, VKC Footsteps SC 2021, Safari Retreats SC 03.10.2024 citation pack. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>GSTR-2B Mismatch Resolution</strong></td><td>Three-way reconciliation, supplier follow-up, manual upload supplementary file. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>End-to-End IDS Setup for New Manufacturer</strong></td><td>HSN classification, ERP setup, internal controls, first refund cycle - one-time setup plus quarterly retainer. <span class="badge-addon">Add-on</span></td></tr>

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
            <h2 class="section-title">8-Step Textile IDS Refund Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's textile IDS refund pipeline runs the eight sequential steps below, anchored to Section 54(3), Rule 89(5), and the textile-specific notifications.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">HSN Classification and Rate Reconciliation</h3>
                    <p class="step-description">Identify HSN code for each input (yarn, fibre, dyes, chemicals, packing) and each output (yarn, fabric, made-up, garment). Confirm GST rate per HSN. Identify which inputs trigger IDS - typically MMF yarn (12%), polyester chips (18%), dyes/chemicals (18%) for fabric (5%) outputs.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN-wise rate mapping</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IDS pairs identified</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">HSN 5407</text><line x1="25" y1="42" x2="95" y2="42" stroke="#14365F" stroke-width="1" opacity="0.4"/><text x="60" y="55" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MMF Fabric</text><rect x="35" y="62" width="50" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="71" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">5% GST</text></svg></div>
                        <span class="illustration-label">HSN Mapped</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Cluster Profile and Refund Range Estimation</h3>
                    <p class="step-description">Map manufacturer to one of 7 cluster profiles (Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Erode, Coimbatore). Estimate quarterly refund range based on turnover and cluster-typical accumulation. Identify any sub-pattern such as powerloom vs processing in Bhiwandi.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7-cluster profile match</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund range estimate</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="30" cy="30" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="30" y="34" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUR</text><circle cx="60" cy="25" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="29" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TIR</text><circle cx="90" cy="35" r="10" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="90" y="39" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BHI</text><circle cx="35" cy="65" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="35" y="69" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN</text><circle cx="65" cy="70" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="65" y="74" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LUD</text><circle cx="95" cy="65" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="95" y="69" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ERO</text></svg></div>
                        <span class="illustration-label">Cluster Profile</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Statement 1A Invoice Register Preparation</h3>
                    <p class="step-description">For each input invoice in the quarter, capture invoice number, date, supplier GSTIN, supplier name, HSN, taxable value, tax rate, IGST/CGST/SGST amount, and GSTR-2B confirmation. For outputs, capture invoice number, customer GSTIN, HSN, taxable value, and tax rate. Consolidated reconciliation to GSTR-1, GSTR-3B, GSTR-2B.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Invoice-level register</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-2B reconciliation</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Statement 1A</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="46" x2="92" y2="46" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="58" x2="92" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="70" x2="92" y2="70" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="28" y1="82" x2="92" y2="82" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="50" cy="40" r="3" fill="#F5A623"/><circle cx="50" cy="52" r="3" fill="#F5A623"/><circle cx="50" cy="64" r="3" fill="#F5A623"/><circle cx="50" cy="76" r="3" fill="#F5A623"/></svg></div>
                        <span class="illustration-label">Statement 1A Built</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Net ITC Computation Under Rule 89(5)</h3>
                    <p class="step-description">Inputs only - exclude input services and capital goods per VKC Footsteps SC 2021. Identify each input invoice and confirm classification as input (not service or capital good). Aggregate to quarterly Net ITC. Reconcile to GSTR-2B.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inputs-only Net ITC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>VKC Footsteps SC 2021 discipline</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="25" width="80" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="44" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Net ITC</text><text x="60" y="58" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Inputs ONLY</text><line x1="30" y1="65" x2="90" y2="65" stroke="#FD6B6D" stroke-width="2"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EXCLUDED: Input Services + Capital Goods</text></svg></div>
                        <span class="illustration-label">Net ITC Computed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Refund Formula Application</h3>
                    <p class="step-description">Apply Rule 89(5) formula - Refund = (Net ITC x Inverted Rated Turnover / Total Adjusted Turnover) MINUS Tax Payable on Inverted Rated Turnover. Compute provisional refund (90 percent) under CGST Instruction 6/2025 if low-risk.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(5) formula applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Provisional 90% computed</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Refund =</text><text x="60" y="48" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">(Net ITC x Inv Rated TO)</text><line x1="20" y1="52" x2="100" y2="52" stroke="#14365F" stroke-width="1"/><text x="60" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Total Adj Turnover</text><text x="60" y="76" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">MINUS Tax Payable</text></svg></div>
                        <span class="illustration-label">Refund Computed</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Form RFD-01 Portal Filing with Statement 1A</h3>
                    <p class="step-description">Login to GST portal. Navigate Services > Refunds > Application for Refund. Select 'Refund of unutilised ITC on account of accumulation due to inverted tax structure'. Upload Statement 1A. Enter computation. Upload supporting documents. Submit with DSC/EVC. ARN generated.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-01 portal submission</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN generated</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="15" width="90" height="14" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="25" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">gst.gov.in</text><rect x="25" y="38" width="70" height="12" rx="2" fill="#FFF3E0"/><text x="60" y="46" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01</text><rect x="25" y="56" width="70" height="12" rx="2" fill="#E8F5E9"/><text x="60" y="64" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Statement 1A</text><rect x="40" y="72" width="40" height="10" rx="2" fill="#E8712C"/><text x="60" y="79" font-size="6" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">SUBMIT</text></svg></div>
                        <span class="illustration-label">RFD-01 Filed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">RFD-02 Acknowledgement and 90 Percent Provisional</h3>
                    <p class="step-description">RFD-02 expected within 15 days of ARN under Rule 90(2). Risk-based classification under CGST Instruction 6/2025 - 8-factor audit. Low-risk applicants - RFD-04 90 percent provisional within 7 days of RFD-02; PFMS Stage 2 validation; bank credit.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-02 within 15 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-04 provisional 90%</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="50" r="35" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><path d="M60 15v70M25 50h70" stroke="#14365F" stroke-width="0.5" opacity="0.3"/><path d="M60 50L80 30" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round"/><circle cx="60" cy="50" r="3" fill="#14365F"/><text x="60" y="92" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Low Risk = 90% in 7 days</text></svg></div>
                        <span class="illustration-label">Provisional Released</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">RFD-06 Final Sanction and Bank Credit</h3>
                    <p class="step-description">RFD-06 final sanction within 60 days of RFD-02 under Section 54(7). Balance 10 percent disbursed. Where final sanction crosses Day 60, Section 56 mandatory interest at 6 percent per annum auto-accrues per Raghav Ventures Delhi HC ruling.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 54(7) 60-day ceiling</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 56 interest auto-trigger</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="25" width="80" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="50" r="14" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="60" y="55" font-size="14" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">&#8377;</text><text x="60" y="92" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-06 Final Sanction</text></svg></div>
                        <span class="illustration-label">Refund Sanctioned</span>
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
            <h2 class="section-title">Document Checklist for Textile IDS Refund</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before filing each quarterly RFD-01 cycle. Patron Accounting maintains a digital document vault per client with HSN-tagged invoice library.</p>
                <ul>
                    <li>Form GST RFD-01 (system-generated on submission).</li>
                    <li>Statement 1A under Rule 89(2)(h) - inputs and outputs invoice register for the quarter.</li>
                    <li>GSTR-1 for each month of the quarter (output declaration with HSN-wise rate).</li>
                    <li>GSTR-3B for each month of the quarter (ITC availed and tax paid).</li>
                    <li>GSTR-2B for each month of the quarter (supplier-confirmed inward ITC).</li>
                    <li>HSN-wise rate reconciliation worksheet.</li>
                    <li>Net ITC computation worksheet (inputs only, per VKC Footsteps SC 2021).</li>
                    <li>Output product samples or declaration where HSN classification is disputed.</li>
                    <li>Bank account validation from PFMS portal.</li>
                    <li>For job workers - additionally Form ITC-04 and principal-job worker agreement.</li>
                    <li>For past-period lapse reconstruction (Aug 2018) - Rule 89(5) mutatis mutandis worksheet, GSTR-3B Column 4B(2) entry, and Form DRC-03 if shortfall.</li>
                    <li>CA certificate in Annexure 2 of RFD-01 where the refund amount exceeds Rs 2 lakh.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>RFD-06 rejection on Net ITC including input services</strong></td><td>DIY filings include freight, professional fees, machine repair. Patron re-computes Net ITC excluding input services per VKC Footsteps SC 2021; resubmits with corrected Statement 1A; Section 107 appeal if Department insists.</td></tr>
                        <tr><td><strong>HSN-rate mismatch for blended fabric (PV/PC)</strong></td><td>Polyester-Viscose or Polyester-Cotton blended fabric classification dispute. Patron arranges mill certificate confirming fibre composition; HSN classification per General Interpretative Rules; technical opinion and Section 107 appeal if needed.</td></tr>
                        <tr><td><strong>Past period lapse reversal incomplete (Aug 2018)</strong></td><td>Department issues 2025-26 notice questioning Notification 20/2018-CT(R) lapse reversal. Patron reconstructs Rule 89(5) mutatis mutandis computation; reconciles GSTR-3B Column 4B(2); files DRC-03 with Section 50 interest if shortfall.</td></tr>
                        <tr><td><strong>GSTR-2B mismatch for yarn suppliers</strong></td><td>Smaller yarn mills may have GSTR-1 filing delays. Patron runs three-way reconciliation (GSTR-2B, supplier GSTR-1, purchase register); supplier follow-up; manual upload supplementary file for mismatched but eligible ITC.</td></tr>
                        <tr><td><strong>Job work service classification dispute</strong></td><td>Department contests job work service (5%) vs manufacturing on own account (12% or 18%). Patron pulls principal-job worker agreement, Form ITC-04 trail, raw material ownership evidence, Section 2(68) CGST compliance, Circular 38/12/2018-GST.</td></tr>
                        <tr><td><strong>Capital goods ITC wrongly included or excluded</strong></td><td>Knitting machines, dyeing machines, looms are capital goods - their ITC is excluded from Net ITC under Rule 89(5). Patron applies clean input vs capital goods classification; capital goods ITC recovered through future output tax offset, not refund.</td></tr>

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
            <h2 class="section-title">Fees for Textile IDS Refund Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (RFD-01 filing)</strong></td><td class="table-amount">Nil (no statutory portal fee)</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>Tirupur Cotton Knitwear Quarterly Refund</strong></td><td class="table-amount">Rs 22,000 per quarter plus GST (single GSTIN, up to 200 input invoices)</td></tr>
                        <tr><td><strong>Surat MMF/Synthetic Quarterly Refund</strong></td><td class="table-amount">Rs 38,000 per quarter plus GST (high-volume IDS coverage, up to 300 invoices)</td></tr>
                        <tr><td><strong>Bhiwandi Powerloom Quarterly Refund</strong></td><td class="table-amount">Rs 28,000 per quarter plus GST (synthetic yarn and sizing chemicals focus)</td></tr>
                        <tr><td><strong>Panipat Home Furnishings Quarterly Refund</strong></td><td class="table-amount">Rs 25,000 per quarter plus GST (mixed cotton-synthetic profile)</td></tr>
                        <tr><td><strong>Ludhiana / Erode / Coimbatore Quarterly Refund</strong></td><td class="table-amount">Rs 22,000 per quarter plus GST (cluster-specific patterns)</td></tr>
                        <tr><td><strong>Multi-GSTIN Group Quarterly Refund</strong></td><td class="table-amount">Rs 60,000 to Rs 1.8 lakh per quarter plus GST (consolidated reporting)</td></tr>
                        <tr><td><strong>Textile Job Worker Quarterly Refund</strong></td><td class="table-amount">Rs 25,000 per quarter plus GST (Form ITC-04 coordination)</td></tr>
                        <tr><td><strong>Past Period Lapse Reconstruction (Aug 2018)</strong></td><td class="table-amount">Rs 35,000 per case plus GST</td></tr>
                        <tr><td><strong>Section 107 Appeal Against Textile Rejection</strong></td><td class="table-amount">Rs 40,000 per appeal plus GST</td></tr>
                        <tr><td><strong>Annual Bundle (4 Quarters) - Standard Manufacturer</strong></td><td class="table-amount">Rs 80,000 to Rs 1.4 lakh plus GST (5 to 8 percent discount)</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Government fees are payable separately at actuals.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Textile GST Refund consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20textile%20IDS%20refund%20with%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long the Textile IDS Refund Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>HSN classification + rate reconciliation</strong></td><td>1 to 2 working days</td><td>Patron pre-filing prep</td></tr>
                        <tr><td><strong>Statement 1A preparation (200 invoices)</strong></td><td>4 to 6 working days</td><td>Patron pipeline</td></tr>
                        <tr><td><strong>Net ITC computation under Rule 89(5)</strong></td><td>1 to 2 working days</td><td>VKC Footsteps SC 2021 discipline</td></tr>
                        <tr><td><strong>Form RFD-01 portal filing</strong></td><td>Same day from data ready</td><td>GST portal submission</td></tr>
                        <tr><td><strong>RFD-02 acknowledgement</strong></td><td>Within 15 days of ARN</td><td>Rule 90(2) CGST Rules</td></tr>
                        <tr><td><strong>RFD-04 provisional 90 percent (low-risk)</strong></td><td>Within 7 days of RFD-02</td><td>CGST Instruction 6/2025 post 01.10.2025</td></tr>
                        <tr><td><strong>RFD-06 final sanction</strong></td><td>Within 60 days of RFD-02</td><td>Section 54(7) statutory ceiling</td></tr>
                        <tr><td><strong>Section 56 interest (delay beyond 60 days)</strong></td><td>6 percent per annum from Day 61</td><td>Section 56 CGST Act, mandatory</td></tr>
                        <tr><td><strong>End-to-end quarterly cycle (best case)</strong></td><td>30 to 45 days from quarter end</td><td>Once cycle stabilised</td></tr>
                        <tr><td><strong>Section 107 appeal cycle (if rejection)</strong></td><td>8 to 18 months end-to-end</td><td>Form APL-01 plus appellate hearing</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>CGST Instruction 6/2025 cash flow boost:</strong> Post 01.10.2025, low-risk textile IDS applicants assessed under the 8-factor risk audit (clean GSTR record, supplier compliance, GSTR-2B match, no DRC-03 pendency, complete documentation, no past adverse orders, consistent claim pattern, registered tenure) receive 90 percent provisional refund within 7 days of RFD-02 - a dramatic improvement from the historic 30 to 60 day wait. Particularly transformative for high-IDS Surat MMF and Bhiwandi powerloom clusters.

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
            <h2 class="section-title">Why CA-Led Textile Refund Beats DIY</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">VKC Footsteps Net ITC Discipline</h3>
                <p class="feature-description">DIY filings frequently include input services (freight, professional fees, machine repair) in Net ITC, causing rejection. Patron's settled VKC Footsteps SC 2021 alignment ensures Net ITC covers inputs only. Rejection rate for Patron-filed quarterly IDS below 3 percent.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div>
                <h3 class="feature-title">7-Cluster HSN Mastery</h3>
                <p class="feature-description">Each cluster has subtle HSN classification and rate nuances - Tirupur cotton knitwear vs Surat MMF vs Bhiwandi PV blends. DIY filings often misclassify, especially for blended fabrics. Patron's cluster-specific mastery prevents 90 percent of HSN-rate disputes.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">CGST Instruction 6/2025 Low-Risk Optimisation</h3>
                <p class="feature-description">Post 01.10.2025, every textile IDS application is risk-classified under the 8-factor audit. Patron's pre-filing audit ensures all 8 factors pass. Result: 90 percent provisional refund within 7 days versus 60-plus days for high-risk applicants.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></div>
                <h3 class="feature-title">Past Period Lapse Reconstruction</h3>
                <p class="feature-description">Manufacturers facing 2025-26 departmental notices on August 2018 lapse-reversal need Rule 89(5) mutatis mutandis reconstruction. Patron's reconstruction worksheet, Section 50 interest computation, and DRC-03 voluntary payment prevents penalty escalation.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">Textile Job Work Specialism</h3>
                <p class="feature-description">Dyeing, printing, embroidery, finishing job workers eligible for IDS refund under Circular 94/12/2019-GST. Patron's pipeline covers Form ITC-04 coordination, principal-job worker agreements, and Section 2(68) CGST job work classification defence.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Section 107 Appeal Citation Pack</h3>
                <p class="feature-description">Citation-backed appeal pack with Notification 20/2018-CT(R), Circular 94/12/2019, VKC Footsteps SC 2021, Safari Retreats SC 03.10.2024, and cluster-specific defence. Most rejections resolve at Section 107 first appeal.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Indian Textile Manufacturers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of GST Compliance</strong></p>
                <p><strong>Outcome proof:</strong> A Surat polyester saree manufacturer recovered Rs 1.65 crore quarterly IDS refund plus Rs 4.95 lakh Section 56 interest in March 2026. Initial filing was rejected with RFD-08 SCN on Net ITC computation. Patron's RFD-09 reply with HSN reclassification, VKC Footsteps SC 2021 alignment, and CGST Instruction 6/2025 commentary triggered favourable RFD-06 within 50 days of RFD-02. 90 percent provisional Rs 1.485 crore disbursed within 22 days.</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 60+ Indian textile manufacturers - Tirupur cotton knitwear units, Surat polyester saree manufacturers, Bhiwandi powerloom factories, Panipat home furnishing exporters, Ludhiana hosiery firms, and Erode bedsheet manufacturers with active quarterly IDS refund pipelines. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves textile manufacturers across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4-Fibre Rate Matrix (Cotton / MMF / Blended / Denim)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Cotton</th><th>MMF / Synthetic</th><th>Blended (PV / PC)</th><th>Denim</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Raw fibre / fibre rate</strong></td><td>Cotton (5%)</td><td>Polyester chips/PSF (18%)</td><td>Mixed - typically 18% predominant</td><td>Cotton (5%)</td></tr>
                        <tr><td><strong>Yarn rate</strong></td><td>Cotton yarn (5%)</td><td>MMF/polyester yarn (12%)</td><td>Blended yarn (12%)</td><td>Cotton denim yarn (5%)</td></tr>
                        <tr><td><strong>Fabric rate</strong></td><td>Cotton fabric (5%)</td><td>MMF fabric (5%)</td><td>Blended fabric (5%)</td><td>Denim fabric (5%)</td></tr>
                        <tr><td><strong>Apparel rate (under Rs 1,000)</strong></td><td>5%</td><td>5%</td><td>5%</td><td>5%</td></tr>
                        <tr><td><strong>Apparel rate (above Rs 1,000)</strong></td><td>12%</td><td>12%</td><td>12%</td><td>12%</td></tr>
                        <tr><td><strong>Typical IDS situation</strong></td><td>Limited - mainly chemicals/dyes ITC</td><td>HIGH - 12% yarn to 5% fabric</td><td>Mixed - depends on dominant fibre</td><td>Limited - mainly chemicals/dyes ITC</td></tr>
                        <tr><td><strong>Refund range typical</strong></td><td>Rs 50K to Rs 8L per quarter</td><td>Rs 5L to Rs 50L per quarter</td><td>Rs 2L to Rs 25L per quarter</td><td>Rs 1L to Rs 12L per quarter</td></tr>
                        <tr><td><strong>Major clusters</strong></td><td>Tirupur, Coimbatore, Erode</td><td>Surat, Bhiwandi</td><td>Bhiwandi (PV), Tirupur (PC)</td><td>Ahmedabad, Indore</td></tr>
                        <tr><td><strong>HSN coverage</strong></td><td>5201-5212, 6001-6006</td><td>5402-5408, 5503-5516</td><td>5407-5408, 5512-5516</td><td>5209.42, 6203.42</td></tr>

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
            <h2 class="section-title">Partner Services for Textile Manufacturers</h2>
            <div class="content-text">
                
                <p>Textile manufacturer refund integrates with Patron's broader GST refund and compliance stack. Most textile manufacturers run these services in parallel:</p>
                <ul>
                    <li><a href="/gst-refund/">GST refund (general)</a> - the parent practice covering the full Section 54 refund spectrum beyond IDS.</li>
                    <li><a href="/gst-returns/">GST return filing</a> - monthly GSTR-1 and GSTR-3B that anchor every quarterly IDS refund claim.</li>
                    <li><a href="/gst-annual-returns/">GST annual return filing</a> - GSTR-9 reconciliation that ties together all quarterly IDS refunds for the financial year.</li>
                    <li><a href="/gst-audit/">GST audit support</a> - for textile manufacturers above the prescribed turnover threshold.</li>
                    <li><a href="/iec-registration/">IEC registration</a> - mandatory for textile exporters under the Foreign Trade Policy.</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT appeal for exporters</a> - where a textile refund order is rejected and Section 107 appeal does not resolve, appeal lies before the GST Appellate Tribunal.</li>
                    <li><a href="/gst-notice/">GST notice response</a> - for past-period scrutiny notices on August 2018 lapse-reversal or Rule 89(5) computation.</li>
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
                
                <p><strong>Section 54(3) of CGST Act 2017 - IDS Refund Right:</strong> Subject to sub-section (10), a registered person may claim refund of any unutilised input tax credit at the end of any tax period. Provided that no refund shall be allowed except in cases of zero-rated supplies without payment of tax; or where credit has accumulated on account of rate of tax on inputs being higher than the rate of tax on output supplies (other than nil-rated or fully exempt supplies), except supplies as may be notified by the Government on the recommendations of the Council. The second limb is the IDS refund right that textile manufacturers invoke.</p>
                <p><strong>Rule 89(5) of CGST Rules 2017 - IDS Refund Formula:</strong> Refund of ITC shall be granted as per the formula - Maximum Refund Amount = (Turnover of inverted rated supply x Net ITC / Adjusted Total Turnover) MINUS Tax payable on such inverted rated supply. 'Net ITC' means ITC availed on inputs during the relevant period. The retrospective amendment by Notification 26/2018-CT effective 01.07.2017 narrows 'inputs' to exclude input services and capital goods.</p>
                <p><strong>Notification 5/2017-CT(R) dated 28.06.2017 - Original Textile Restriction:</strong> Notified that no refund of unutilised ITC shall be allowed for goods specified in the Schedule (Serial Numbers 1 to 7 covering knitted/crocheted fabric under HSN 60, cotton woven fabric HSN 5208-5212, vegetable fibre HSN 5309-5311, MMF woven fabric HSN 5407-5408, and staple fibre fabric HSN 5512-5516).</p>
                <p><strong>Notification 20/2018-CT(R) dated 26.07.2018 - Textile IDS Unblock:</strong> Amended Notification 5/2017-CT(R) - the said notification shall not apply to ITC accumulated on supplies received on or after 01 August 2018. Further proviso - accumulated ITC lying unutilised after payment of tax for July 2018, on inward supplies received up to 31 July 2018, shall LAPSE. This unblocked IDS refund for textile fabric from 01.08.2018 with the past-period ITC lapsing.</p>
                <p><strong>Circular 56/30/2018-GST dated 24.08.2018 - Lapsing Mechanic:</strong> Amount of ITC to be lapsed shall be determined per Rule 89(5) formula mutatis mutandis for July 2017 to July 2018. Lapsed amount to be furnished in GSTR-3B Column 4B(2) for August 2018. Verification at first refund claim post-August 2018.</p>
                <p><strong>Circular 94/12/2019-GST dated 28.03.2019 - Fabric and Job Worker:</strong> Various refund-related issues clarified for fabric manufacturers and textile job workers - filing under correct category, reversal mechanism, Section 50 interest, treatment of dyeing/printing/processing/embroidery units with own ITC accumulation. Procedural backbone for textile refund administration.</p>
                <p><strong>Union of India v VKC Footsteps India Pvt Ltd (Supreme Court, 2021):</strong> Upheld constitutional validity of Notification 26/2018-CT restricting Net ITC to inputs only. Indian textile manufacturers must compute Net ITC strictly on inputs - excluding freight, professional fees, machine repair, and similar input services. Foundational SC ruling for Rule 89(5).</p>
                <p><strong>CGST Instruction 6/2025 dated 03.10.2025 - 90 Percent Provisional for IDS:</strong> CBIC extended the 90 percent provisional refund framework under Notification 13/2025-CT to IDS category effective 01.10.2025. Low-risk applicants (8-factor audit) get 90 percent provisional within 7 days of RFD-02 under Rule 91(2) as amended.</p>
                <p><strong>Government references:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST notifications and circulars</a>, <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (CGST Act 2017)</a>, and <a href="https://texmin.nic.in" target="_blank" rel="noopener">Ministry of Textiles</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the questions textile manufacturers most often ask about IDS refund - including Hinglish variants for owners comfortable in mixed language.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Why does textile manufacturing have inverted duty structure and which fibres are affected?</h3>
                        <div class="faq-expanded__a"><p>Textile IDS arises because input rates exceed output rates. Most common pattern - MMF/polyester yarn (12 percent input GST) feeds into MMF fabric (5 percent output GST). Polyester chips/PSF (18 percent) feeding fabric (5 percent) is even sharper IDS. Dyes and chemicals (18 percent) used in cotton or MMF processing feeding fabric (5 percent) creates IDS for processing units. Cotton-to-cotton-fabric chain (5 to 5) has limited IDS - mainly chemicals/dyes ITC. Surat MMF cluster has the highest IDS, Bhiwandi powerloom moderate-to-high, Tirupur cotton knitwear moderate, Coimbatore cotton spinning generally none.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Notification 20/2018-CT(R) and how did it unblock textile IDS refund?</h3>
                        <div class="faq-expanded__a"><p>Notification 20/2018-Central Tax (Rate) dated 26 July 2018 amended Notification 5/2017-CT(R) to allow refund of accumulated ITC on textile fabric on account of inverted tax structure with effect from 01 August 2018. Pre-amendment, textile fabric was on the restricted list (Serial Numbers 1 to 7 covering knitted, cotton woven, vegetable fibre, MMF woven, and staple fibre fabric). Post-amendment, the restriction was lifted prospectively. However, ITC accumulated for the period July 2017 to July 2018 had to LAPSE under the formula in Rule 89(5) mutatis mutandis - reported in GSTR-3B Column 4B(2) for August 2018 per Circular 56/30/2018-GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Textile manufacturer ka GST refund kaise milta hai - Surat saree ya Tirupur knitwear ke liye? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Indian textile manufacturers ka GST refund Section 54(3) ke under Rule 89(5) formula se milta hai. Inverted duty structure jab input rate output rate se zyada ho - typically MMF yarn 12 percent input se MMF fabric 5 percent output (Surat saree manufacturers ke liye classic situation). Cotton-to-cotton-fabric me IDS minimal hota hai but dyes/chemicals (18 percent) se thoda accumulation hota hai (Tirupur knitwear ke liye). Form GST RFD-01 me Statement 1A ke saath quarterly file karte hain. Net ITC me sirf inputs (yarn, dyes, chemicals, packing) include hote hain - input services aur capital goods VKC Footsteps SC 2021 ke baad exclude hain. Notification 20/2018-CT(R) ne 01.08.2018 se textile IDS refund unblock kiya. CGST Instruction 6/2025 (03.10.2025) ke baad 90 percent provisional refund 7 din me mil jata hai low-risk applicants ko.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is Rule 89(5) refund formula applied for textile manufacturers?</h3>
                        <div class="faq-expanded__a"><p>Rule 89(5) formula - Refund Amount = (Net ITC x Inverted Rated Turnover / Total Adjusted Turnover) MINUS Tax Payable on Inverted Rated Turnover. Net ITC = ITC on INPUTS only (cotton yarn, MMF yarn, dyes, chemicals, packing); excludes input services (freight, professional fees, repair) and capital goods (knitting machines, looms, dyeing machines) per VKC Footsteps SC 2021. Inverted Rated Turnover = turnover of fabric/yarn/made-up at lower output rate. Total Adjusted Turnover = aggregate turnover excluding exempt. Tax Payable = output GST on inverted-rated supplies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Are textile job workers (dyeing, printing, embroidery) eligible for IDS refund?</h3>
                        <div class="faq-expanded__a"><p>Yes. Per Circular 94/12/2019-GST dated 28 March 2019, textile job workers providing dyeing, printing, processing, embroidery, finishing, and similar services to principal manufacturers are eligible for IDS refund where their job work attracts inverted rate. Job work service rate is typically 5 percent under Notification 11/2017-CT(R) S.No. 26. Inputs - dyes (18 percent), chemicals (18 percent), embroidery thread (12 percent), zari (12 percent) - exceed output rate, creating IDS. Form ITC-04 quarterly return for goods sent to/from job worker is required compliance. Statement 1A captures both inputs and inverted-rated job work output.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What documents are needed for textile IDS refund?</h3>
                        <div class="faq-expanded__a"><p>Standard pack - Form GST RFD-01, Statement 1A (inputs and outputs invoice register), GSTR-1 (output declaration), GSTR-3B (ITC availed and tax paid), GSTR-2B (supplier-confirmed ITC), HSN-wise rate reconciliation, Net ITC computation worksheet, output product samples or declaration where classification disputed, and bank account validation from PFMS portal. For job workers - additionally Form ITC-04, principal-job worker agreement, raw material receipt evidence. For past-period lapse reconstruction (Aug 2018) - Rule 89(5) mutatis mutandis worksheet, GSTR-3B Column 4B(2) entry, and Form DRC-03 if shortfall.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can ITC on input services and capital goods be claimed in IDS refund?</h3>
                        <div class="faq-expanded__a"><p>No. Per Notification 26/2018-CT dated 13 June 2018 (retrospective effect from 01 July 2017) and Union of India v VKC Footsteps India Pvt Ltd (Supreme Court, 2021), Net ITC under Rule 89(5) is restricted to INPUTS ONLY. Excluded - input services (freight, professional fees, machine repair, security, legal, audit, electricity above threshold), capital goods (knitting machines, looms, dyeing machines, embroidery machines, vehicles, factory premises construction), and any services not directly forming part of inputs. Capital goods ITC and input services ITC must be utilised against future output tax - not refunded under IDS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does CGST Instruction 6/2025 help textile manufacturers?</h3>
                        <div class="faq-expanded__a"><p>CGST Instruction 6/2025 dated 03 October 2025 read with Notification 13/2025-CT dated 17 September 2025 extends the 90 percent provisional refund framework to IDS category effective 01 October 2025. Pre-instruction, IDS refund applicants typically waited 30 to 60 days for full sanction. Post-instruction, low-risk applicants (assessed under 8-factor risk audit covering GSTR record, supplier compliance, GSTR-2B match, DRC-03 pendency, documentation, past orders, claim pattern, registered tenure) get 90 percent provisional refund within 7 days of RFD-02 acknowledgement. Dramatic cash flow improvement, particularly for high-IDS Surat MMF and Bhiwandi powerloom manufacturers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What is the cluster-wise IDS refund pattern for Tirupur, Surat, Bhiwandi, Panipat?</h3>
                        <div class="faq-expanded__a"><p>Tirupur (Tamil Nadu, cotton knitwear) - moderate IDS, mainly from dyes and chemicals; quarterly Rs 1.5L to Rs 12L per GSTIN typical. Surat (Gujarat, MMF/synthetic/polyester sarees) - HIGH IDS classic 12 percent yarn to 5 percent fabric; quarterly Rs 5L to Rs 50L per GSTIN typical; largest single sector for textile refund volume. Bhiwandi (Maharashtra, powerloom synthetic and PV) - HIGH IDS; quarterly Rs 3L to Rs 30L per GSTIN typical. Panipat (Haryana, home furnishings) - moderate IDS for synthetic; quarterly Rs 2L to Rs 25L per GSTIN typical. Patron's quarterly pipelines are tuned to each cluster profile.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Aug 2018 lapse reversal incomplete tha to ab kya karein? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Notification 20/2018-CT(R) ke under textile fabric ITC accumulated July 2017 se July 2018 tak ka lapse-reversal August 2018 GSTR-3B Column 4B(2) me karna tha. Department 2025-26 me notice bhej raha hai puchhne ke liye ki lapse correctly compute hua tha ya nahi. Patron ka cure - Rule 89(5) mutatis mutandis reconstruct karte hain 13-month period ke liye, original GSTR-3B entry se reconcile karte hain, agar shortfall hai to DRC-03 file karte hain Section 50(1) interest ke saath (Aug 2018 GSTR-3B due date se actual reversal date tak). Department fir bhi reject kare to Section 107 first appeal with detailed worksheet.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Foundational provision?</strong> Section 54(3) of CGST Act 2017 read with Rule 89(5) of CGST Rules 2017.</li>
                    <li><strong>Refund form?</strong> Form GST RFD-01 with Statement 1A under Rule 89(2)(h).</li>
                    <li><strong>Net ITC?</strong> Inputs only post VKC Footsteps SC 2021 - excludes input services and capital goods.</li>
                    <li><strong>Textile-specific notification?</strong> Notification 20/2018-CT(R) dated 26.07.2018, effective 01.08.2018.</li>
                    <li><strong>Lapsing for past period?</strong> July 2017 to July 2018 ITC lapsed in GSTR-3B Aug 2018 Column 4B(2).</li>
                    <li><strong>Job worker refund?</strong> Yes - per Circular 94/12/2019-GST dated 28 March 2019.</li>
                    <li><strong>Provisional refund speed-up?</strong> CGST Instruction 6/2025 - 90 percent in 7 days of RFD-02 (low-risk).</li>
                    <li><strong>Time limit for refund?</strong> 2 years from end of FY in which IDS arose under Section 54(1) CGST Act.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines That Run Off Every Quarter</h2>
            <div class="content-text">
                
                <p>Textile IDS refund deadlines run off the quarter end:</p>
                <ol>
                    <li><strong>Section 54(1) limitation</strong> - 2 years from end of FY in which IDS arose. Statutory bar; no condonation possible.</li>
                    <li><strong>Quarterly refund filing</strong> - Patron's cadence is within 6 months of quarter end (18-month buffer for procedural slippage).</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of ARN under Rule 90(2). Tier 1 grievance from Day 16.</li>
                    <li><strong>RFD-04 90 percent provisional</strong> - within 7 days of RFD-02 for low-risk applicants per CGST Instruction 6/2025 (post 01.10.2025).</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 under Section 54(7). Section 56 interest auto-triggers Day 61.</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of RFD-06 (+1 month condonable). Statutory bar beyond 4 months.</li>
                </ol>
                <p><strong>Get your textile manufacturer refund diagnostic - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20refund%20for%20my%20textile%20manufacturing%20unit." target="_blank" rel="noopener">WhatsApp us</a>. Free 4-business-hour turnaround with ITC accumulation estimate, Rule 89(5) computation, and quarterly recovery roadmap.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Recover Every Rupee of Textile ITC - Cluster by Cluster</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">Indian textile manufacturers face systemic inverted duty structure where MMF/polyester yarn at 12 percent feeds into fabric at 5 percent (the Surat and Bhiwandi pattern) and dyes/chemicals at 18 percent feed cotton fabric or processed textile output at 5 percent (the Tirupur and Erode pattern). Section 54(3) of the CGST Act and Rule 89(5) of the CGST Rules together provide quarterly refund of accumulated ITC under Form GST RFD-01 with Statement 1A. The textile-specific evolution from Notification 5/2017-CT(R) restriction through Notification 20/2018-CT(R) unblock to CGST Instruction 6/2025's 90 percent provisional refund within 7 days makes 2026 the best year ever for textile cash flow recovery.</p>
                <p style="color:#FFFFFF;">Patron Accounting LLP brings 15+ years of textile sector experience covering Notification 20/2018-CT(R) framework, Rule 89(5) Net ITC formula post VKC Footsteps SC 2021, Circular 94/12/2019 job worker treatment, past-period lapse reconstruction, cluster-wise pipelines across Tirupur, Surat, Bhiwandi, Panipat, Ludhiana, Erode, and Coimbatore, and Section 107 appeal for 60+ active textile manufacturer clients. With offices in Pune, Mumbai, Delhi, and Gurugram, we serve textile manufacturers across India - both in-person and remotely.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20textile%20IDS%20refund%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Textile%20GST%20Refund%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Textile%20GST%20Refund%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Services for Textile Manufacturers</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Most textile manufacturers run these services in parallel with quarterly IDS refund cycles. End-to-end CA support across all of them.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end support for textile manufacturers across the GST and export compliance stack</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST Returns Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-annual-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><div class="pa-card-title">GST Annual Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-audit/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/iec-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-notice/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div><div><div class="pa-card-title">GST Notice Response</div><div class="pa-card-sub">India</div></div></a>
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
            <p>This page is reviewed every 6 months (Tier 2 freshness - core textile IDS framework is stable). Review triggers include GST Council decisions on textile rate restructuring, new High Court or Supreme Court rulings on textile IDS refund, CBIC instructions on textile-specific refund processing, and amendments to Notification 5/2017-CT(R) or Rule 89(5).</p>
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
