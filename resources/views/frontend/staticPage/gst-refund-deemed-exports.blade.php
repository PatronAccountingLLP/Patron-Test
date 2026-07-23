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
    <title>GST Refund on Deemed Exports — Section 147 & Notif 48</title>
    <meta name="description" content="Deemed export refund under Section 147 CGST + Notification 48/2017. Advance Authorisation, EPCG, EOU recovery. Form RFD-01. Rs 10,000+ fees.">
    <link rel="canonical" href="/gst-refund-deemed-exports">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund on Deemed Exports — Section 147 & Notif 48">
    <meta property="og:description" content="Deemed export refund under Section 147 CGST + Notification 48/2017. Advance Authorisation, EPCG, EOU recovery. Form RFD-01. Rs 10,000+ fees.">
    <meta property="og:url" content="/gst-refund-deemed-exports/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-deemed-exports-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund on Deemed Exports — Section 147 & Notif 48">
    <meta name="twitter:description" content="Deemed export refund under Section 147 CGST + Notification 48/2017. Advance Authorisation, EPCG, EOU recovery. Form RFD-01. Rs 10,000+ fees.">
    <meta name="twitter:image" content="/images/gst-refund-deemed-exports-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-deemed-exports/#breadcrumb",
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
          "name": "Deemed Exports",
          "item": "/gst-refund-deemed-exports/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-deemed-exports/#faq",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are deemed exports under Section 147 of CGST Act 2017?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Deemed exports are domestic supplies of goods notified under Section 147 of the CGST Act 2017 that the law treats as exports for refund purposes even though the goods do not leave India. Notification 48/2017-Central Tax dated 18 October 2017 notifies four categories - supplies against Advance Authorisation, supplies of capital goods against EPCG Authorisation, supplies to EOU/EHTP/STP/BTP, and supplies of gold by banks/PSUs against AA. Goods must be manufactured in India and the supplier must charge GST at the applicable rate (cannot supply under LUT/Bond)."
          }
        },
        {
          "@type": "Question",
          "name": "Which categories are notified as deemed exports under Notification 48/2017-CT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Four categories - (1) supply of goods by registered person against Advance Authorisation, (2) supply of capital goods by registered person against EPCG Authorisation, (3) supply of goods by registered person to EOU/EHTP/STP/BTP units, and (4) supply of gold by a bank or Public Sector Undertaking specified in Notification 50/2017-Customs against Advance Authorisation. The four categories are bounded by FTP 2015-20 (now FTP 2023) Chapter 4, 5, and 6 definitions."
          }
        },
        {
          "@type": "Question",
          "name": "Who can claim refund on deemed exports - the supplier or the recipient?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Either - but not both. Rule 89(1) third proviso of CGST Rules 2017 grants the unique either-or filing right for deemed export refund. The recipient can file by default. The supplier can file in cases where the recipient does not avail ITC on the deemed export supplies and furnishes an undertaking to the effect that the supplier may claim the refund. The chosen filer must obtain the non-filer party's undertaking before filing."
          }
        },
        {
          "@type": "Question",
          "name": "Are deemed exports zero-rated supplies under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Deemed exports are NOT zero-rated supplies. Zero-rated supplies are defined under Section 16 of IGST Act 2017 - exports out of India and supplies to SEZ units/developers. Deemed exports under Section 147 of CGST Act are taxed at the applicable GST rate at the time of supply; the refund mechanism allows recovery of the tax later. This is the primary structural difference between the two regimes."
          }
        },
        {
          "@type": "Question",
          "name": "Can deemed exports be made under LUT or Bond without payment of tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Unlike zero-rated supplies, deemed exports cannot be made under LUT or Bond. The supplier must pay GST at the applicable rate at the time of supply. The refund of this tax is then claimed by either the supplier or the recipient under Rule 89(1) third proviso. This is one of the most distinctive features of the deemed export regime and a structural difference from zero-rated supply treatment under Section 16 of IGST Act."
          }
        },
        {
          "@type": "Question",
          "name": "What is the merchant exporter 0.1 percent scheme under Notifications 40/2017 and 41/2017?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The merchant exporter scheme under Notifications 40/2017-Central Tax (Rate) and 41/2017-Integrated Tax (Rate) both dated 23 October 2017 is a SEPARATE concessional rate scheme - NOT a deemed export. Goods supplied to a merchant exporter (registered with EPC or Commodity Board) for export attract 0.1 percent IGST or 0.05 percent CGST plus 0.05 percent SGST, subject to conditions including export within 90 days of tax invoice. The merchant exporter must export under LUT/Bond only (Rule 96(10) bars IGST-paid export). Refund path is Rule 89(4B) accumulated ITC for the supplier."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for deemed export refund under Notification 49/2017?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Notification 49/2017-Central Tax prescribes - (a) for AA/EPCG, acknowledgement by jurisdictional GST officer of the AA/EPCG holder confirming receipt of deemed export supplies; (b) for EOU/EHTP/STP/BTP, copy of tax invoice signed by recipient confirming receipt along with Form A prior intimation per Circular 14/14/2017-GST; (c) recipient's undertaking that no ITC has been claimed on the deemed export supplies; (d) recipient's undertaking that recipient shall not claim refund in respect of such supplies; (e) Statement 5B in RFD-01."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit for claiming deemed export refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "2 years from the date relevant return is filed under Section 54(1) of CGST Act 2017. The relevant date for deemed exports is the date when the relevant return relating to such deemed export supplies is furnished. Patron Accounting tracks the limitation period in the engagement memo and ensures filing well within the window. For multi-quarter consolidated claims, the earliest invoice's relevant date governs the limitation for the entire claim."
          }
        },
        {
          "@type": "Question",
          "name": "Deemed exports ka GST refund kaise milta hai - kya documents lagte hain?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 147 CGST Act ke under aur Notification 48/2017 me notified kiye gaye AA, EPCG, EOU, ya gold-against-AA categories ke liye refund milta hai. Form GST RFD-01 file karna hota hai - reason 'On account of Deemed Exports' aur Statement 5B me invoices ki list. Either supplier ya recipient file kar sakta hai (Rule 89(1) third proviso). EOU supplies ke liye Form A prior intimation pehle Development Commissioner ko bhejna hota hai. AA/EPCG ke liye recipient ke jurisdictional GST officer ka endorsement chahiye. Tax invoice par poora GST charge karna hai - LUT route allowed nahi hai."
          }
        },
        {
          "@type": "Question",
          "name": "Can a merchant exporter claim deemed export refund under Section 147?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. The merchant exporter scheme is governed by Notifications 40/2017-CT(R) and 41/2017-IT(R) under Section 11 of CGST Act, NOT under Section 147 of CGST Act. The two schemes are structurally separate. Merchant exporter procures at concessional 0.1 percent rate; deemed export supplier charges full applicable GST rate. The merchant exporter's refund path is Rule 89(4B) for accumulated ITC. Patron's first diagnostic always confirms which scheme applies before initiating refund."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-deemed-exports/#service",
      "name": "GST Refund - Deemed Exports (Section 147 plus Notification 48/2017)",
      "description": "Patron Accounting LLP files and recovers GST refund on deemed export supplies under Section 147 of CGST Act 2017 read with Notification 48/2017-Central Tax dated 18 October 2017. Services include Notification 48/2017 categorisation diagnostic, Rule 89(1) third proviso filer recommendation, Form A prior intimation coordination per Circular 14/14/2017-GST, jurisdictional officer endorsement liaison, Form GST RFD-01 with Statement 5B filing, Rule 89(4A) recipient companion refund, and merchant exporter 0.1 percent scheme advisory under Notifications 40/2017 and 41/2017.",
      "serviceType": "GST Refund Filing Service",
      "url": "/gst-refund-deemed-exports/",
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
            <li><span style="color:var(--orange);font-weight:600;">Deemed Exports Refund Services</span></li>
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
                        GST Refund - Deemed Exports (Section 147 CGST + Notification 48/2017)
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Tax invoice, Advance Authorisation/EPCG/LOA copy, Form A prior intimation, jurisdictional officer endorsement, recipient undertakings, Statement 5B</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 10,000 per RFD-01 cycle plus 18 percent GST</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> GST-registered supplier of goods OR registered recipient (AA holder, EPCG holder, EOU/EHTP/STP/BTP unit) - either may file under Rule 89(1) third proviso</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30 to 60 days for RFD-01 sanction; 90 percent provisional in 7 days for low-risk filings under CGST Instruction 6/2025</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years of GST Compliance Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:info@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20on%20Deemed%20Exports%20under%20Section%20147%20and%20Notification%2048%2F2017." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - Deemed Exports Refund'/>
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
                                <option value="gst-refund-deemed-exports" selected>Deemed Exports Refund</option>
                                <option value="gst-refund">GST Refund</option>
                                <option value="gstat-appeal-exporters">GSTAT Appeal - Exporters</option>
                                <option value="gstat-appeal-filing">GSTAT Appeal Filing</option>
                                <option value="gst-notice">GST Notice</option>
                                <option value="gst-audit">GST Audit</option>
                                <option value="gst-annual-returns">GST Annual Returns</option>
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
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron recovered Rs 27 lakh in deemed export refund for our supplies to a Hyderabad EOU. The supplier-as-filer recommendation under Rule 89(1) third proviso saved us months of ITC reconciliation. RFD-04 provisional in 30 days.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rakesh Kapoor</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO / Pune Engineering Components</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. Patron caught a merchant exporter 0.1 percent misclassification before we filed - routed us to Inverted Duty refund under Rule 89(4B) instead. Saved a wasted RFD-01 cycle.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director / Textile Manufacturer</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Form A coordination with DC office is the kind of pre-procurement discipline most consultants miss. Patron's checklist saved our EOU recipient from a refund rejection that would have hit Rs 15 lakh.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head / Pharma EOU</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had three years of EPCG capital goods deemed export filings sitting on the table. Patron bundled them into a multi-quarter consolidated RFD-01 - recovered Rs 1.4 crore in 90 days end to end.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD / Capital Goods Supplier</div>
                    <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div>
            </div>
        </div>
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
            <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
            <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Rule 89(4A) companion refund is something we had completely missed for two years. Patron's recipient-side audit caught Rs 35 lakh in additional ITC refund on top of our deemed export refund. Real money on the table.</div>
            <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AG</div>
                <div>
                    <div style="font-weight:700;font-size:13px;color:var(--blue);">Anita Gaur</div>
                    <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Finance / AA Holder</div>
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
                    <p>From AA/EPCG/LOP verification to RFD-06 bank credit - Patron handles the full Section 147 deemed export refund pipeline with CA-led categorisation and Form A coordination.</p>
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
                <a href="#what-section" class="toc-pill">What Are Deemed Exports</a>
                <a href="#who-section" class="toc-pill">Three Schemes Compared</a>
                <a href="#services-section" class="toc-pill">What We Deliver</a>
                <a href="#procedure-section" class="toc-pill">8 Sequential Steps</a>
                <a href="#documents-section" class="toc-pill">Documents Required</a>
                <a href="#challenges-section" class="toc-pill">Challenges and Solutions</a>
                <a href="#fees-section" class="toc-pill">Fees and Pricing</a>
                <a href="#timeline-section" class="toc-pill">Timeline</a>
                <a href="#benefits-section" class="toc-pill">Why CA-Led</a>
                <a href="#comparison-section" class="toc-pill">Deemed vs Other Refunds</a>
                <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deemed Exports Refund Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Deemed Exports Refund Services at a Glance</strong></p>
                    <p>Deemed exports are domestic supplies of goods notified under Section 147 of the CGST Act 2017 that the law treats as exports for refund purposes even though the goods do not leave India. Notification 48/2017-Central Tax dated 18 October 2017 notifies four categories - supplies against Advance Authorisation, supplies of capital goods against EPCG Authorisation, supplies to EOU/EHTP/STP/BTP, and supplies of gold by banks/PSUs against AA. Unlike zero-rated supplies, deemed exports cannot be made under LUT/Bond - GST must be paid first and refunded later. Either the supplier OR the recipient (not both) may file Form GST RFD-01 under Rule 89(1) third proviso.</p>
                </div>
                <p>Section 147 of the CGST Act 2017 enables the Central Government to notify certain supplies of goods as deemed exports - supplies where the goods stay in India but the transaction is treated as export for indirect tax neutrality. The legislative purpose is to remove GST as a cost in the export-linked supply chain - particularly for domestic manufacturers feeding Advance Authorisation holders, EPCG capital goods recipients, and EOU/EHTP/STP/BTP units that ultimately push their output abroad. Without Section 147, every domestic input feeding an export would carry a GST cost component that distorts price competitiveness against duty-free imported alternatives.</p>
                <p>The four categories notified under Notification 48/2017-Central Tax dated 18 October 2017 are bounded by Foreign Trade Policy 2015-20 definitions (now read with FTP 2023). Advance Authorisation is the DGFT-issued duty-free input procurement licence under Chapter 4 of FTP. EPCG covers capital goods under Chapter 5 of FTP. EOU/EHTP/STP/BTP units operate under Chapter 6 of FTP. The fourth category covers gold supplied by banks and PSUs against AA under Notification 50/2017-Customs. Notification 49/2017-Central Tax sets the evidentiary requirements; Circular 14/14/2017-GST dated 06 November 2017 prescribes the Form A prior intimation procedure for EOU recipients. Rule 89(1) third proviso of CGST Rules 2017 grants the unique either-supplier-or-recipient filing right - distinguishing deemed exports from every other refund category. Patron Accounting LLP files, defends, and recovers deemed export refunds for 200+ AA and EPCG holders, EOU units, and DTA suppliers.<div class="table-responsive-wrapper" style="margin-top:24px;">
                    <table>
                        <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                        <tbody>
                            <tr><td>Governing Provision</td><td>Section 147 of CGST Act 2017 read with Notification 48/2017-Central Tax dated 18.10.2017</td></tr>
                            <tr><td>Goods Only</td><td>Deemed exports apply ONLY to goods, not services</td></tr>
                            <tr><td>Manufactured in India</td><td>Goods must be manufactured or produced in India</td></tr>
                            <tr><td>No LUT/Bond Route</td><td>GST must be paid at time of supply; refund follows - cannot be supplied without payment of tax</td></tr>
                            <tr><td>Filing Form</td><td>Form GST RFD-01 - reason 'On account of Deemed Exports'</td></tr>
                            <tr><td>Who Files</td><td>Either supplier OR recipient (not both) under Rule 89(1) third proviso of CGST Rules 2017</td></tr>
                            <tr><td>Time Limit</td><td>2 years from date relevant return is filed under Section 54(1)</td></tr>
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
                <h2 class="section-title">What Are GST Deemed Exports Under Section 147 and Notification 48/2017</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Deemed exports are domestic supplies of goods - specifically the four categories notified under Notification 48/2017-Central Tax pursuant to Section 147 of the CGST Act 2017 - that are treated as exports for GST refund purposes even though the goods do not leave India. The GST treatment of deemed exports is structurally different from zero-rated supplies under Section 16 of the IGST Act 2017 - deemed exports attract GST at the applicable rate at the time of supply (cannot be supplied under LUT or Bond), and the refund is claimed afterwards by either the supplier or the recipient under Rule 89(1) third proviso.</p>
                    <p>The legislative architecture sits at the intersection of GST law and Foreign Trade Policy. Section 147 of CGST Act enables notification of deemed exports. Notification 48/2017-Central Tax notifies the four eligible categories - Advance Authorisation supplies (Chapter 4 FTP), EPCG capital goods supplies (Chapter 5 FTP), EOU/EHTP/STP/BTP supplies (Chapter 6 FTP), and gold-against-AA bank/PSU supplies. The FTP definitions of AA, EPCG, EOU, EHTP, STP, and BTP are imported by reference into the GST notification. DGFT issues the underlying authorisations (AA, EPCG) and Letter of Permission (LOP) for EOU. Notification 49/2017-Central Tax prescribes the documentary evidence required for the refund claim. Circular 14/14/2017-GST dated 06 November 2017 sets the procedural workflow for EOU/EHTP/STP/BTP supplies - including Form A prior intimation and Form B record-keeping by the recipient.</p>
                    <p>For primary source materials see the official <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC notifications and circulars</a>, <a href="https://www.dgft.gov.in" target="_blank" rel="noopener">DGFT</a>, and reference materials at <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">India Code</a>.</p>
                    <h3 style="margin-top:24px;">Four Notified Categories under Notification 48/2017-CT</h3>
                    <div class="table-responsive-wrapper">
                        <table>
                            <thead><tr><th>Category</th><th>Supply Description</th><th>Recipient Eligibility</th><th>Key Endorsement</th></tr></thead>
                            <tbody>
                                <tr><td>Category 1</td><td>Supply of goods by registered person against Advance Authorisation (AA)</td><td>AA holder under FTP 2015-20 Chapter 4</td><td>Acknowledgement by jurisdictional tax officer of AA holder</td></tr>
                                <tr><td>Category 2</td><td>Supply of capital goods by registered person against EPCG Authorisation</td><td>EPCG holder under FTP 2015-20 Chapter 5</td><td>Acknowledgement by jurisdictional tax officer of EPCG holder</td></tr>
                                <tr><td>Category 3</td><td>Supply of goods by registered person to EOU/EHTP/STP/BTP</td><td>EOU/EHTP/STP/BTP unit under FTP 2015-20 Chapter 6</td><td>Tax invoice copy signed by recipient + Form A prior intimation per Circular 14/14/2017-GST</td></tr>
                                <tr><td>Category 4</td><td>Supply of gold by bank or PSU specified in Notification 50/2017-Customs against AA</td><td>AA holder receiving gold from notified bank/PSU</td><td>Acknowledgement by jurisdictional tax officer + Customs Notification 50/2017 reference</td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Deemed Exports Refund:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;">
                        <table>
                            <thead><tr><th>Term</th><th>Plain Meaning</th></tr></thead>
                            <tbody>
                                <tr><td>Section 147 CGST Act 2017</td><td>Enabling provision empowering Central Government to notify supplies of goods as deemed exports</td></tr>
                                <tr><td>Notification 48/2017-Central Tax</td><td>Dated 18.10.2017; notifies the four eligible categories of deemed exports</td></tr>
                                <tr><td>Notification 49/2017-Central Tax</td><td>Dated 18.10.2017; prescribes the documentary evidence for deemed export refund</td></tr>
                                <tr><td>Circular 14/14/2017-GST</td><td>Dated 06.11.2017; procedural workflow for EOU/EHTP/STP/BTP supplies including Form A and Form B</td></tr>
                                <tr><td>Advance Authorisation (AA)</td><td>DGFT-issued authorisation under Chapter 4 of FTP for duty-free input procurement</td></tr>
                                <tr><td>EPCG Authorisation</td><td>DGFT-issued authorisation under Chapter 5 of FTP for capital goods at concessional duty</td></tr>
                                <tr><td>EOU / EHTP / STP / BTP</td><td>Export Oriented Unit / Electronic Hardware / Software / Bio-Technology Park under FTP Chapter 6</td></tr>
                                <tr><td>Form A (under Circular 14/14/2017)</td><td>Prior intimation form filed by EOU/EHTP/STP/BTP recipient before procurement</td></tr>
                                <tr><td>Rule 89(1) third proviso</td><td>Unique to deemed exports - either supplier OR recipient (not both) may file refund</td></tr>
                                <tr><td>Rule 89(4A)</td><td>Recipient of deemed exports - refund of ITC on OTHER inputs used in zero-rated supplies</td></tr>
                                <tr><td>Statement 5B (in RFD-01)</td><td>Specific statement format for deemed export refund - lists invoices for refund</td></tr>
                                <tr><td>Merchant Exporter 0.1 Percent Scheme</td><td>SEPARATE concessional scheme under Notifications 40/2017-CT(R) and 41/2017-IT(R); NOT a deemed export</td></tr>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Deemed Exports Refund</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Form</span>
                        <strong>RFD-01 + Stmt 5B</strong>
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
            <h2 class="section-title">Deemed Exports vs Merchant Exporter 0.1 Percent Scheme vs Zero-Rated Supply</h2>
            <div class="content-text">
                
                <p>Three distinct domestic-export incentive routes exist in GST. They are routinely confused in practice. The Patron-curated comparison below clarifies each.</p>
                <div class="table-responsive-wrapper">
                    <table>
                        <thead><tr><th>Parameter</th><th>Deemed Exports</th><th>Merchant Exporter 0.1 percent</th><th>Zero-Rated Supply</th></tr></thead>
                        <tbody>
                            <tr><td>Statutory basis</td><td>Section 147 CGST + Notification 48/2017-CT</td><td>Notifications 40/2017-CT(R) + 41/2017-IT(R)</td><td>Section 16 IGST Act</td></tr>
                            <tr><td>Tax treatment</td><td>GST PAID at applicable rate; refund claimed later</td><td>Concessional 0.1 percent IGST OR 0.05 percent CGST + 0.05 percent SGST</td><td>Tax not collected (LUT/Bond) OR IGST paid then refunded</td></tr>
                            <tr><td>LUT/Bond route</td><td>NOT available - tax must be paid</td><td>Not applicable to supplier; merchant exporter must export under LUT only</td><td>AVAILABLE - LUT for export under bond</td></tr>
                            <tr><td>Eligible recipient</td><td>AA holder, EPCG holder, EOU/EHTP/STP/BTP unit, gold-AA case</td><td>Merchant exporter registered with EPC or Commodity Board</td><td>Foreign buyer (export) or SEZ unit/developer</td></tr>
                            <tr><td>Goods leave India</td><td>NO - stay in India</td><td>YES - within 90 days of tax invoice</td><td>YES (export) or NO but treated as export (SEZ)</td></tr>
                            <tr><td>Time limit for export</td><td>Per FTP authorisation conditions</td><td>90 days from supplier's tax invoice</td><td>Per Customs procedure</td></tr>
                            <tr><td>Refund claim filer</td><td>Either supplier OR recipient under Rule 89(1) third proviso</td><td>Merchant exporter (recipient) under Rule 89(4B) - Inverted Duty path for supplier</td><td>Supplier exporter</td></tr>
                            <tr><td>Refund form / category</td><td>RFD-01 - On account of Deemed Exports - Statement 5B</td><td>RFD-01 under Any Other category for accumulated ITC</td><td>RFD-01 - Export of goods/services or shipping bill auto-route for IGST-paid</td></tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top:16px;"><strong>Most Common Confusion:</strong> Suppliers often think supplying to a merchant exporter at 0.1 percent IGST is a deemed export - it is NOT. Merchant exporter scheme is a concessional rate notification under Section 11 of CGST Act, not under Section 147. The recipient cannot file deemed-export refund - the supplier with accumulated ITC may claim Inverted Duty Structure refund. Conversely, supplies to AA/EPCG/EOU recipients are deemed exports under Section 147 plus Notification 48/2017 - tax is fully payable at applicable rate (not 0.1 percent), and refund is claimed back.</p>

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
                        <tr><td>Notification 48/2017 Categorisation Diagnostic</td><td>Free 30-minute review confirming whether the supply qualifies under one of the four notified categories - AA, EPCG, EOU/EHTP/STP/BTP, or gold-against-AA. Many suppliers miss-classify merchant exporter 0.1 percent supplies as deemed exports. Patron's diagnostic prevents wasted RFD-01 filings.</td></tr>
                        <tr><td>Either-or Filing Recommendation (Supplier vs Recipient)</td><td>Rule 89(1) third proviso allows either supplier OR recipient to file. Patron analyses cash-flow, ITC accumulation pattern, undertaking exposure, and recipient AA/EPCG cycle to recommend which party files for maximum recovery speed and least friction.</td></tr>
                        <tr><td>Form A Prior Intimation Coordination (Circular 14/14/2017)</td><td>For EOU/EHTP/STP/BTP supplies, Form A prior intimation is mandatory - copies to jurisdictional officers of supplier and recipient and to Development Commissioner. Patron prepares Form A, secures DGFT/DC acknowledgement, and links it to subsequent RFD-01.</td></tr>
                        <tr><td>Form GST RFD-01 with Statement 5B</td><td>Online RFD-01 filing under reason 'On account of Deemed Exports'. Statement 5B preparation listing invoices, head-wise mapping, jurisdictional officer endorsement evidence (for AA/EPCG) or signed tax invoice (for EOU), recipient undertakings, CA Certificate above Rs 2 lakh, declarations under Rule 89(2)(l) and 89(2)(m).</td></tr>
                        <tr><td>Rule 89(4A) Recipient Refund Coordination</td><td>For deemed export recipients (AA/EPCG/EOU) who themselves have zero-rated supplies, Rule 89(4A) allows refund of ITC availed on OTHER inputs and input services - separate from the deemed export refund. Patron handles this companion claim.</td></tr>
                        <tr><td>Merchant Exporter 0.1 Percent Scheme Advisory</td><td>For suppliers eligible to issue 0.1 percent IGST (or 0.05 percent CGST + 0.05 percent SGST) invoices to merchant exporters under Notifications 40/2017-CT(R) and 41/2017-IT(R), Patron handles end-to-end - shipping bill GSTIN reference, 90-day export timeline tracking, post-export proof submission, and Inverted Duty Structure refund claim under Rule 89(5).</td></tr>

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
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's deemed export refund pipeline runs the steps below. Each step cites the relevant Act, Section, Rule, Notification, Form, or Circular so finance teams can audit each handoff.</p>
        </div>
        <div class="steps-container">
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">Authorisation / LOP Verification and Notification 48/2017 Categorisation</h3>
                    <p class="step-description">Obtain copy of recipient's Advance Authorisation, EPCG Authorisation, or EOU/EHTP/STP/BTP Letter of Permission (LOP). Confirm one of the four Notification 48/2017-CT categories applies. Confirm goods are manufactured in India and not services. Patron's first diagnostic catches merchant-exporter mis-classifications before any RFD-01 work begins. (1 to 2 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AA / EPCG / LOP copy verified</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category 1-4 confirmed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Goods (not services) check</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="50" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="50" y="33" font-size="7" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">AA / EPCG</text><line x1="25" y1="48" x2="95" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="25" y1="58" x2="80" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="93" cy="68" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M89 68l3 3 6-6" stroke="#25D366" stroke-width="1.5" stroke-linecap="round" fill="none"/></svg>
                        </div>
                        <span class="illustration-label">Categorisation</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Form A Prior Intimation (For EOU/EHTP/STP/BTP Only)</h3>
                    <p class="step-description">Per Circular 14/14/2017-GST, the recipient EOU/EHTP/STP/BTP files Form A prior intimation - copies to jurisdictional GST officer of supplier, jurisdictional officer of recipient, and Development Commissioner. Form A must be filed BEFORE procurement; this is the single most common rejection ground. Patron prepares Form A and secures DC acknowledgement. (1 to 5 days depending on DC office.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form A drafted</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DC acknowledgement secured</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pre-procurement timing</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="40" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="50" y="34" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Form A</text><line x1="30" y1="48" x2="85" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/><line x1="30" y1="58" x2="75" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/><circle cx="80" cy="30" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="80" y="33" font-size="6" font-weight="700" fill="#25D366" text-anchor="middle" font-family="Arial">EOU</text></svg>
                        </div>
                        <span class="illustration-label">Form A Intimation</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Filer Decision - Supplier vs Recipient</h3>
                    <p class="step-description">Apply Rule 89(1) third proviso decision logic. Document the choice in a memo. Obtain the undertaking from the non-filing party. Recipient must avail ITC if recipient files; recipient must NOT avail ITC if supplier files. Patron's standard templates align to Notification 49/2017-CT requirements. (Same day.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(1) memo prepared</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Non-filer undertaking signed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash-flow optimised</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="35" cy="50" r="14" fill="#FEF4EE" stroke="#E8712C" stroke-width="2"/><text x="35" y="54" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">SUP</text><circle cx="85" cy="50" r="14" fill="#F4F7FB" stroke="#1B365D" stroke-width="2"/><text x="85" y="54" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">REC</text><path d="M50 50h20" stroke="#F5A623" stroke-width="2" stroke-linecap="round" stroke-dasharray="4 2"/><text x="60" y="44" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="700">OR</text></svg>
                        </div>
                        <span class="illustration-label">Filer Memo</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Tax Invoice Issuance with Full GST</h3>
                    <p class="step-description">Supplier raises tax invoice with applicable GST rate (NOT under LUT, NOT at concessional rate). Recipient pays the supplier including the GST element. Cannot be issued under Bond/LUT. This is the structural difference from zero-rated supplies and from merchant exporter 0.1 percent scheme. (Same day as invoice.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Full GST charged</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No LUT / Bond route</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Recipient pays incl. GST</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="32" x2="95" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="48" font-size="14" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GST 18%</text><line x1="25" y1="60" x2="95" y2="60" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Tax Invoice</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">Recipient ITC and GSTR Reconciliation</h3>
                    <p class="step-description">If recipient is claiming refund, recipient avails ITC and reflects in GSTR-2B and GSTR-3B. If supplier is claiming, recipient does NOT avail ITC. GSTR-1 of supplier reports the deemed export invoice in Table 6C. Patron's reconciliation catches wrong ITC claims before filing - if recipient mistakenly availed, recipient reverses ITC via DRC-03 with interest. (1 to 2 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1 Table 6C populated</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-3B reconciled</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC path confirmed</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="10" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-1 Table 6C</text><line x1="30" y1="45" x2="90" y2="45" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="60" font-size="10" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">GSTR-3B</text><line x1="30" y1="70" x2="90" y2="70" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/></svg>
                        </div>
                        <span class="illustration-label">GSTR Reconciliation</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Jurisdictional Officer Endorsement / Signed Invoice</h3>
                    <p class="step-description">For AA/EPCG, obtain acknowledgement by jurisdictional GST officer of the recipient that deemed export supplies have been received. For EOU/EHTP/STP/BTP, signed copy of tax invoice from recipient confirming receipt. Endorsement timing varies (5 to 30 days by commissionerate); Patron escalates citing Section 54(7) 60-day sanction window.</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AA/EPCG endorsement on file</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EOU signed invoice copy</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Commissionerate liaison</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M35 42l4 4 7-7" stroke="#F5A623" stroke-width="2" stroke-linecap="round" fill="none"/><text x="75" y="38" font-size="8" font-weight="700" fill="#14365F" font-family="Arial">JURISDIC.</text><text x="75" y="48" font-size="8" font-weight="700" fill="#14365F" font-family="Arial">OFFICER</text><line x1="30" y1="62" x2="90" y2="62" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">Endorsement</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Form GST RFD-01 with Statement 5B Filing</h3>
                    <p class="step-description">Login to GST portal. Services > Refunds > Application for Refund. Reason - 'On account of Deemed Exports'. Statement 5B with invoice details. Attach AA/EPCG/LOP copy, jurisdictional officer endorsement OR signed invoice, recipient undertakings (no ITC, no refund), Form A copy (EOU), CA Certificate above Rs 2 lakh, declarations under Rule 89(2)(l), 89(2)(m). Sign with DSC or EVC. (1 day.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-01 + Statement 5B filed</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All annexures attached</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC / EVC signed</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="12" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-01</text><rect x="28" y="44" width="64" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="52" font-size="8" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">Statement 5B</text><line x1="30" y1="64" x2="80" y2="64" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg>
                        </div>
                        <span class="illustration-label">RFD-01 Filed</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">RFD-02 Acknowledgement, Provisional and Final Sanction</h3>
                    <p class="step-description">RFD-02 within 15 days under Rule 90(2). RFD-04 90 percent provisional within 7 days for low-risk filings under amended Rule 91(2) and CGST Instruction 6/2025. RFD-06 final sanction within 60 days under Section 54(7). PFMS bank credit 1 to 3 working days after sanction. Section 56 interest at 6 percent if delayed beyond 60 days. (Within 60 days.)</p>
                    <div class="step-highlights">
                        <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-02 in 15 days</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-04 90 percent provisional</span>
                <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-06 final within 60 days</span>
                
                    </div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon">
                            <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="22" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M48 40l10 10 18-18" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/><rect x="22" y="76" width="76" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="87" font-size="9" font-weight="700" fill="#14365F" text-anchor="middle" font-family="Arial">RFD-04 / RFD-06</text></svg>
                        </div>
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
            <h2 class="section-title">Documents Required for Deemed Export Refund</h2>
            <div class="content-text">
                
                <h3>Mandatory Documents (All Categories)</h3>
                <ul>
                    <li>Tax invoice with full GST (not LUT, not 0.1 percent concessional)</li>
                    <li>Recipient's authorisation copy - AA, EPCG, or EOU/EHTP/STP/BTP LOP</li>
                    <li>GSTR-1 of relevant period showing deemed export in Table 6C</li>
                    <li>GSTR-3B of relevant period showing tax payment</li>
                    <li>Statement 5B in RFD-01 prescribed format</li>
                    <li>Filer decision memo (supplier vs recipient under Rule 89(1) third proviso)</li>
                    <li>Non-filer party's undertaking (no ITC and no refund OR supplier-may-claim-refund)</li>
                    <li>Declarations under Rule 89(2)(l) - non-prosecution</li>
                    <li>Declarations under Rule 89(2)(m) - tax incidence not passed (CA Certificate above Rs 2 lakh)</li>
                </ul>
                <h3>For Advance Authorisation (Category 1) and EPCG (Category 2)</h3>
                <ul>
                    <li>Acknowledgement by jurisdictional GST officer of AA/EPCG holder confirming receipt of deemed export supplies</li>
                    <li>AA/EPCG export obligation period and value details</li>
                    <li>DGFT EDI / online endorsement reference where applicable</li>
                </ul>
                <h3>For EOU/EHTP/STP/BTP (Category 3)</h3>
                <ul>
                    <li>Form A prior intimation by recipient EOU - copies to jurisdictional officers of supplier and recipient and to Development Commissioner (per Circular 14/14/2017-GST)</li>
                    <li>Form B record-keeping of receipt, use, and removal maintained by EOU</li>
                    <li>Tax invoice copy signed by EOU recipient confirming receipt of deemed export supplies</li>
                    <li>EOU LOP and Authorised Operations list</li>
                </ul>
                <h3>For Gold by Bank/PSU against AA (Category 4)</h3>
                <ul>
                    <li>Customs Notification 50/2017 reference for the supplying bank/PSU</li>
                    <li>AA holder details and DGFT acknowledgement</li>
                    <li>Acknowledgement by jurisdictional GST officer of AA holder</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Deemed Export Refund Challenges and Patron Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Notification 48/2017 category misclassification</td><td>Merchant exporter 0.1 percent supplies treated as deemed exports - wrong refund path; RFD-01 rejected; wasted procedural time</td><td>Patron's first diagnostic confirms category - then routes to deemed export RFD-01 OR merchant exporter Inverted Duty refund under Rule 89(4B) OR no refund as applicable</td></tr>
                        <tr><td>Form A prior intimation missed for EOU supplies</td><td>Most common rejection ground for EOU deemed export refund - Circular 14/14/2017-GST mandates Form A BEFORE procurement; missing it disqualifies the refund</td><td>Patron retroactively files where possible; where not, structures the RFD-01 with cover note explaining the procedural cure</td></tr>
                        <tr><td>Either-or filing confusion - both parties file</td><td>Both supplier and recipient file separate RFD-01s for the same invoice - second is rejected, first is delayed; cash trapped</td><td>Rule 89(1) third proviso requires ONE party to file with the other's undertaking; Patron's filing memo documents the choice and freezes both parties to that path</td></tr>
                        <tr><td>Recipient ITC claim when supplier is filing</td><td>If supplier files refund, recipient must NOT have availed ITC; where recipient mistakenly availed in GSTR-3B, supplier's refund is disqualified</td><td>Patron's reconciliation catches this before filing - if recipient has wrongly availed ITC, recipient reverses ITC via DRC-03 with interest, then supplier files</td></tr>
                        <tr><td>Jurisdictional officer endorsement delay (AA/EPCG)</td><td>Endorsement can take 30 to 90 days in some commissionerates; Section 54(7) 60-day sanction window slips; Section 56 interest accrues</td><td>Patron escalates via written representation citing Section 54(7) and follows up till endorsement is on record</td></tr>
                        <tr><td>Rule 89(4A) companion refund missed by recipient</td><td>AA/EPCG/EOU recipients with zero-rated supplies skip refund of ITC on OTHER inputs - money left on the table</td><td>Patron's recipient-side audit captures both claims - deemed export refund plus Rule 89(4A) companion refund - in parallel filings</td></tr>

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
            <h2 class="section-title">Deemed Export Refund Fees and Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Standard Deemed Export Refund - Single Quarter)</td><td class="table-amount">Starting from Rs 10,000 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Multi-Quarter Annual Deemed Export Refund</td><td class="table-amount">Rs 22,000 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>High-Value Deemed Export Refund (above Rs 1 crore turnover)</td><td class="table-amount">Rs 40,000 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>EOU / EHTP / STP / BTP Form A Coordination</td><td class="table-amount">Rs 15,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Either-or Filing Decision Memo + Undertaking Pack</td><td class="table-amount">Rs 8,000 standalone (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Rule 89(4A) Recipient Companion Refund (separate filing)</td><td class="table-amount">Rs 18,000 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Merchant Exporter 0.1 Percent Advisory + Inverted Duty Refund</td><td class="table-amount">Rs 25,000 per filing (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Show Cause Notice (RFD-08) Response</td><td class="table-amount">Rs 22,000 per response (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 107 Appeal (RFD-06 Rejection)</td><td class="table-amount">Rs 60,000 plus success fee (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Success Fee (Discretionary)</td><td class="table-amount">1 to 3 percent of refund sanctioned (on actual recovery)</td></tr>
                        <tr><td>Government / Statutory Fees</td><td class="table-amount">No separate government fee for RFD-01 filing</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Deemed Exports Refund consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20on%20Deemed%20Exports.%20Please%20contact%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deemed Export Refund Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AA/EPCG/LOP verification and categorisation</td><td>1 to 2 working days from data share</td></tr>
                        <tr><td>Form A prior intimation (EOU only)</td><td>Must be filed BEFORE procurement; DC acknowledgement 1 to 5 days</td></tr>
                        <tr><td>Filer-decision memo and undertaking drafting</td><td>Same day</td></tr>
                        <tr><td>GSTR-1 Table 6C and GSTR-3B reporting</td><td>By 11th and 20th of following month</td></tr>
                        <tr><td>Jurisdictional officer endorsement (AA/EPCG)</td><td>5 to 30 working days (varies by commissionerate)</td></tr>
                        <tr><td>Signed tax invoice from EOU recipient</td><td>1 to 10 working days post receipt</td></tr>
                        <tr><td>Statement 5B preparation</td><td>1 to 2 working days</td></tr>
                        <tr><td>RFD-01 filing and ARN</td><td>Same day after sign-off</td></tr>
                        <tr><td>RFD-02 acknowledgement</td><td>Within 15 days of RFD-01 (Rule 90(2))</td></tr>
                        <tr><td>RFD-04 provisional sanction (90 percent low-risk)</td><td>Within 7 days of RFD-02 (CGST Instruction 6/2025)</td></tr>
                        <tr><td>RFD-06 final sanction</td><td>Within 60 days of RFD-02 (Section 54(7))</td></tr>
                        <tr><td>Time limit to file under Section 54(1)</td><td>2 years from date relevant return is filed</td></tr>
                        <tr><td>Interest if refund delayed beyond 60 days</td><td>6 percent per annum under Section 56 (9 percent for appellate orders)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note on the 2-year limitation under Section 54(1):</strong> The relevant date for deemed exports is the date when the relevant return relating to such deemed export supplies is furnished. The 2-year clock runs from that date. Patron's engagement memo tracks this internally and surfaces 30-day and 60-day reminders before lapse. For multi-quarter bunching, the earliest invoice's relevant date governs the limitation for the consolidated claim.</p>

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
            <h2 class="section-title">4 Reasons Why CA-Led Deemed Export Refund Beats DIY</h2>
        </div>
        <div class="features-grid">
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    </div>
                    <h3>Notification 48/2017 vs 40-41/2017 Categorisation Discipline</h3>
                    <p>DIY filers routinely confuse deemed exports (Section 147) with merchant exporter 0.1 percent (Section 11 concessional rate). The two have fundamentally different refund paths. Patron's categorisation diagnostic is the first line of defence - misclassification derails 30 percent of attempted refund claims.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <h3>Filer Optimisation under Rule 89(1) Third Proviso</h3>
                    <p>DIY filers default to whichever party first thinks of it - often suboptimal. Patron's analysis weighs cash flow, ITC accumulation, undertaking exposure, and authorisation cycle to recommend the optimal filer for fastest recovery and least friction with the non-filing counterparty.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                    </div>
                    <h3>Form A Coordination for EOU Procurement</h3>
                    <p>Form A prior intimation under Circular 14/14/2017-GST is the single most overlooked compliance step in EOU deemed export refund. Patron's standard pre-procurement checklist enforces Form A - and where missed, structures retrospective filings with covering note explaining the procedural cure.</p>
                </article>
                <article class="feature-card">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/><circle cx="12" cy="12" r="10"/></svg>
                    </div>
                    <h3>Rule 89(4A) Companion Refund Capture</h3>
                    <p>AA/EPCG/EOU recipients with zero-rated outward supplies have a separate Rule 89(4A) refund right on OTHER inputs ITC. Patron captures both - deemed export refund AND Rule 89(4A) companion claim - in parallel filings. 70 percent of recipients leave this money on the table doing DIY.</p>
                </article>
            </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by AA/EPCG Holders, EOU Units, and DTA Suppliers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of GST and FTP Compliance</strong></p>
                <h3>Trusted By</h3>
                <p>Hyundai, Asian Paints, Bridgestone, and 200+ AA holders, EPCG holders, EOU units, and DTA suppliers across pharma, engineering, textile, electronics, and gems and jewellery feeding deemed export supply chains.</p>
                <h3>Outcome Proof</h3>
                <p>A Pune engineering component manufacturer recovered Rs 27,00,000 in deemed export refund for FY 2025-26 supplies to a Hyderabad EOU in March 2026. EOU recipient issued no-ITC undertaking enabling supplier-as-filer route. Patron prepared Form A coordination, secured DC acknowledgement, drafted undertaking pack, and filed RFD-01 with full Statement 5B - RFD-04 provisional Rs 24.3 lakh credited in 30 days; RFD-06 balance Rs 2.7 lakh in 70 days end-to-end.</p>
                <p><strong>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves AA/EPCG holders, EOU units, and DTA suppliers across India.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deemed Exports Refund vs 3 Other GST Refund Categories</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Deemed Exports</th><th>Goods Export (IGST-Paid)</th><th>SEZ Supplies</th><th>Excess Cash Ledger</th></tr></thead>
                    <tbody>
                        <tr><td>Statutory basis</td><td>Section 147 + Notification 48/2017</td><td>Section 16 IGST + Rule 96</td><td>Section 16 IGST + Rule 89(2)</td><td>Section 49(6) CGST</td></tr>
                        <tr><td>LUT/Bond available</td><td>NO - tax must be paid</td><td>Optional (Rule 96 IGST-paid skips LUT)</td><td>Yes for LUT route</td><td>Not applicable</td></tr>
                        <tr><td>Either-or filing</td><td>YES (supplier or recipient under Rule 89(1) third proviso)</td><td>Only supplier exporter</td><td>Only supplier exporter</td><td>Only ECL holder</td></tr>
                        <tr><td>Goods leave India</td><td>NO</td><td>YES</td><td>NO (SEZ deemed export-equivalent)</td><td>Not applicable</td></tr>
                        <tr><td>Filing form / category</td><td>RFD-01 - Deemed Exports - Statement 5B</td><td>Shipping bill (auto-route)</td><td>RFD-01 - SEZ With/Without Tax</td><td>RFD-01 - Excess ECL</td></tr>
                        <tr><td>Time limit</td><td>2 years from return filing date</td><td>2 years from ship leaves India</td><td>2 years from relevant date</td><td>NO time limit</td></tr>
                        <tr><td>Common rejection trigger</td><td>Form A missed (EOU); recipient ITC wrongly availed; category misclassification</td><td>SB005 invoice mismatch</td><td>Specified Officer endorsement missing</td><td>GSTR-3B unfiled</td></tr>
                        <tr><td>Special documentation</td><td>Form A, jurisdictional officer endorsement, recipient undertakings, Statement 5B</td><td>Shipping bill + EGM via ICEGATE</td><td>Specified Officer endorsement, Rule 89(2)(f) declaration</td><td>ECL auto-population only</td></tr>

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
            <h2 class="section-title">Related GST and Litigation Services</h2>
            <div class="content-text">
                
                <p>Deemed export refund work integrates with Patron's broader GST refund and litigation stack. Explore related services below:</p>
                <ul>
                    <li><a href="/gst-refund/">GST Refund</a> - parent practice covering the full Section 54 refund spectrum, RFD-01 filing, RFD-06 sanction or rejection, and refund category mechanics</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT Appeal - Exporters (Refund Rejection)</a> - escalation route where deemed export RFD-06 is rejected and APL-04 Order-in-Appeal is also adverse</li>
                    <li><a href="/gstat-appeal-filing/">GSTAT Appeal Filing</a> - second appeal under Section 112 in Form APL-05 for any refund-related dispute</li>
                    <li><a href="/gst-notice/">GST Notice</a> - covers Section 73, 74, and 74A demand notices and RFD-08 SCN replies before they crystallise into RFD-06 rejection</li>
                    <li><a href="/gst-audit/">GST Audit</a> - Section 65 departmental audit and forensic-style internal audit support for AA/EPCG/EOU compliance</li>
                    <li><a href="/gst-annual-returns/">GST Annual Returns</a> - GSTR-9 and GSTR-9C compliance feeding into refund reconciliation</li>
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
                
                <h3>Section 147 of CGST Act 2017</h3>
                <p>The Government may, on the recommendations of the Council, notify certain supplies of goods as deemed exports, where goods supplied do not leave India, and payment for such supplies is received either in Indian rupees or in convertible foreign exchange, if such goods are manufactured in India.</p>
                <h3>Notification 48/2017-Central Tax dated 18 October 2017</h3>
                <p>Notifies four categories of supply of goods as deemed exports under Section 147 - (1) supply of goods by registered person against AA, (2) supply of capital goods by registered person against EPCG, (3) supply of goods by registered person to EOU/EHTP/STP/BTP, (4) supply of gold by bank/PSU specified in Notification 50/2017-Customs against AA.</p>
                <h3>Notification 49/2017-Central Tax dated 18 October 2017</h3>
                <p>Prescribes the documentary evidence required for deemed export refund - including jurisdictional officer acknowledgement, signed tax invoice copies, and recipient undertakings.</p>
                <h3>Rule 89(1) Third Proviso of CGST Rules 2017</h3>
                <p>In respect of supplies regarded as deemed exports, the application may be filed by - (a) the recipient of deemed export supplies; or (b) the supplier of deemed export supplies in cases where the recipient does not avail of input tax credit on such supplies and furnishes an undertaking to the effect that the supplier may claim the refund.</p>
                <h3>Rule 89(4A) of CGST Rules 2017</h3>
                <p>Inserted by Notification 75/2017-Central Tax dated 29 December 2017 with retrospective effect from 23 October 2017. The recipient of deemed export supplies can claim refund of ITC availed in respect of OTHER inputs or input services used in making zero-rated supply of goods or services.</p>
                <h3>Circular 14/14/2017-GST dated 06 November 2017</h3>
                <p>Procedure for supplies to EOU/EHTP/STP/BTP units. Form A prior intimation by recipient before procurement - copies to jurisdictional officers of supplier and recipient and to Development Commissioner. Form B record-keeping by recipient for receipt, use, and removal.</p>
                <h3>Notification 40/2017-Central Tax (Rate) and Notification 41/2017-Integrated Tax (Rate)</h3>
                <p>Both dated 23 October 2017. Merchant exporter scheme - 0.05 percent CGST plus 0.05 percent SGST for intra-state and 0.1 percent IGST for inter-state supplies to merchant exporters meeting prescribed conditions. SEPARATE from deemed exports under Section 147; refund path is Rule 89(4B) accumulated ITC.</p>
                <h3>Rule 96(10) of CGST Rules 2017</h3>
                <p>Bars IGST-paid export refund where supplier availed merchant exporter concessional rate. Exporter must export under LUT only. Frequently relevant when reconciling deemed export vs merchant exporter scheme treatment of the same supply chain.</p>
                <h3>Section 54(1) and Section 54(7) of CGST Act 2017</h3>
                <p>Section 54(1) prescribes a 2-year limitation from the relevant date for filing refund applications - for deemed exports, the date when the relevant return is furnished. Section 54(7) requires the proper officer to issue final refund order within 60 days of receipt of complete application. Section 56 interest at 6 percent per annum (9 percent for appellate orders) applies for delays.</p>
                <h3>Foreign Trade Policy 2015-20 (now FTP 2023)</h3>
                <p>Chapter 4 defines Advance Authorisation; Chapter 5 defines EPCG; Chapter 6 defines EOU/EHTP/STP/BTP. Definitions imported into Notification 48/2017 by reference.</p>

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
                    <p class="faq-expanded__lead">Common questions about deemed export refund under Section 147 CGST and Notification 48/2017 - covering categorisation, filer rights, documentation, and the merchant exporter scheme distinction.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What are deemed exports under Section 147 of CGST Act 2017?</h3>
                        <div class="faq-expanded__a"><p>Deemed exports are domestic supplies of goods notified under Section 147 of the CGST Act 2017 that the law treats as exports for refund purposes even though the goods do not leave India. Notification 48/2017-Central Tax dated 18 October 2017 notifies four categories - supplies against Advance Authorisation, supplies of capital goods against EPCG Authorisation, supplies to EOU/EHTP/STP/BTP, and supplies of gold by banks/PSUs against AA. Goods must be manufactured in India and the supplier must charge GST at the applicable rate (cannot supply under LUT/Bond).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which categories are notified as deemed exports under Notification 48/2017-CT?</h3>
                        <div class="faq-expanded__a"><p>Four categories - (1) supply of goods by registered person against Advance Authorisation, (2) supply of capital goods by registered person against EPCG Authorisation, (3) supply of goods by registered person to EOU/EHTP/STP/BTP units, and (4) supply of gold by a bank or Public Sector Undertaking specified in Notification 50/2017-Customs against Advance Authorisation. The four categories are bounded by FTP 2015-20 (now FTP 2023) Chapter 4, 5, and 6 definitions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can claim refund on deemed exports - the supplier or the recipient?</h3>
                        <div class="faq-expanded__a"><p>Either - but not both. Rule 89(1) third proviso of CGST Rules 2017 grants the unique either-or filing right for deemed export refund. The recipient can file by default. The supplier can file in cases where the recipient does not avail ITC on the deemed export supplies and furnishes an undertaking to the effect that the supplier may claim the refund. The chosen filer must obtain the non-filer party's undertaking before filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Are deemed exports zero-rated supplies under GST?</h3>
                        <div class="faq-expanded__a"><p>No. Deemed exports are NOT zero-rated supplies. Zero-rated supplies are defined under Section 16 of IGST Act 2017 - exports out of India and supplies to SEZ units/developers. Deemed exports under Section 147 of CGST Act are taxed at the applicable GST rate at the time of supply; the refund mechanism allows recovery of the tax later. This is the primary structural difference between the two regimes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can deemed exports be made under LUT or Bond without payment of tax?</h3>
                        <div class="faq-expanded__a"><p>No. Unlike zero-rated supplies, deemed exports cannot be made under LUT or Bond. The supplier must pay GST at the applicable rate at the time of supply. The refund of this tax is then claimed by either the supplier or the recipient under Rule 89(1) third proviso. This is one of the most distinctive features of the deemed export regime and a structural difference from zero-rated supply treatment under Section 16 of IGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the merchant exporter 0.1 percent scheme under Notifications 40/2017 and 41/2017?</h3>
                        <div class="faq-expanded__a"><p>The merchant exporter scheme under Notifications 40/2017-Central Tax (Rate) and 41/2017-Integrated Tax (Rate) both dated 23 October 2017 is a SEPARATE concessional rate scheme - NOT a deemed export. Goods supplied to a merchant exporter (registered with EPC or Commodity Board) for export attract 0.1 percent IGST or 0.05 percent CGST plus 0.05 percent SGST, subject to conditions including export within 90 days of tax invoice. The merchant exporter must export under LUT/Bond only (Rule 96(10) bars IGST-paid export). Refund path is Rule 89(4B) accumulated ITC for the supplier.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What documents are required for deemed export refund under Notification 49/2017?</h3>
                        <div class="faq-expanded__a"><p>Notification 49/2017-Central Tax prescribes - (a) for AA/EPCG, acknowledgement by jurisdictional GST officer of the AA/EPCG holder confirming receipt of deemed export supplies; (b) for EOU/EHTP/STP/BTP, copy of tax invoice signed by recipient confirming receipt along with Form A prior intimation per Circular 14/14/2017-GST; (c) recipient's undertaking that no ITC has been claimed on the deemed export supplies; (d) recipient's undertaking that recipient shall not claim refund in respect of such supplies; (e) Statement 5B in RFD-01.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the time limit for claiming deemed export refund?</h3>
                        <div class="faq-expanded__a"><p>2 years from the date relevant return is filed under Section 54(1) of CGST Act 2017. The relevant date for deemed exports is the date when the relevant return relating to such deemed export supplies is furnished. Patron Accounting tracks the limitation period in the engagement memo and ensures filing well within the window. For multi-quarter consolidated claims, the earliest invoice's relevant date governs the limitation for the entire claim.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">Deemed exports ka GST refund kaise milta hai - kya documents lagte hain?</h3>
                        <div class="faq-expanded__a"><p>Section 147 CGST Act ke under aur Notification 48/2017 me notified kiye gaye AA, EPCG, EOU, ya gold-against-AA categories ke liye refund milta hai. Form GST RFD-01 file karna hota hai - reason 'On account of Deemed Exports' aur Statement 5B me invoices ki list. Either supplier ya recipient file kar sakta hai (Rule 89(1) third proviso). EOU supplies ke liye Form A prior intimation pehle Development Commissioner ko bhejna hota hai. AA/EPCG ke liye recipient ke jurisdictional GST officer ka endorsement chahiye. Tax invoice par poora GST charge karna hai - LUT route allowed nahi hai.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Can a merchant exporter claim deemed export refund under Section 147?</h3>
                        <div class="faq-expanded__a"><p>No. The merchant exporter scheme is governed by Notifications 40/2017-CT(R) and 41/2017-IT(R) under Section 11 of CGST Act, NOT under Section 147 of CGST Act. The two schemes are structurally separate. Merchant exporter procures at concessional 0.1 percent rate; deemed export supplier charges full applicable GST rate. The merchant exporter's refund path is Rule 89(4B) for accumulated ITC. Patron's first diagnostic always confirms which scheme applies before initiating refund.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul>
                    <li><strong>Statutory provisions?</strong> Section 147 CGST + Notification 48/2017-CT + Notification 49/2017-CT + Circular 14/14/2017-GST.</li>
                    <li><strong>Filing form?</strong> Form GST RFD-01, reason 'On account of Deemed Exports', Statement 5B.</li>
                    <li><strong>Who files?</strong> Either supplier OR recipient under Rule 89(1) third proviso (with undertaking from non-filer).</li>
                    <li><strong>LUT/Bond available?</strong> NO - tax must be paid at applicable rate; refund follows.</li>
                    <li><strong>Time limit?</strong> 2 years from relevant return filing date under Section 54(1).</li>
                    <li><strong>Notification 48/2017 categories?</strong> AA, EPCG, EOU/EHTP/STP/BTP, gold-against-AA bank/PSU.</li>
                    <li><strong>Different from merchant exporter 0.1 percent?</strong> YES - merchant exporter scheme under Notif 40/2017 and 41/2017 is separate; refund path is Rule 89(4B).</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deemed Export Refund Statutory Deadlines</h2>
            <div class="content-text">
                
                <p>Deemed export refund deadlines run off Section 54(1), Form A pre-procurement timing, and authorisation export obligation cycles. Missing any of the following deadlines can permanently extinguish your refund right or delay recovery by months:</p>
                <ul>
                    <li><strong>Form A prior intimation (EOU)</strong> - BEFORE procurement per Circular 14/14/2017-GST; refund rejected if Form A missed</li>
                    <li><strong>Refund time limit under Section 54(1)</strong> - 2 years from relevant return filing date; permanent loss of refund right beyond limitation</li>
                    <li><strong>GSTR-1 Table 6C reporting</strong> - by 11th of following month; refund processing blocked without it</li>
                    <li><strong>GSTR-3B tax payment</strong> - by 20th of following month; cannot file refund without tax discharge</li>
                    <li><strong>AA/EPCG export obligation period</strong> - per FTP and authorisation conditions; underlying authorisation may be revoked</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of RFD-01 (Rule 90(2)); escalate via grievance under Rule 90 if delayed</li>
                    <li><strong>RFD-04 90 percent provisional sanction</strong> - within 7 days of RFD-02 (low-risk); officer must record reasons in writing if withheld</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 (Section 54(7)); 6 percent interest under Section 56 if delayed</li>
                    <li><strong>Section 107 appeal</strong> - within 3 months of RFD-06 refund rejection; 10 percent pre-deposit required</li>
                </ul>
                <p><strong>Engage Patron Accounting before EOU procurement for full Form A discipline, or share AA/EPCG/LOP copy and last 3 months invoices for free categorisation diagnostic. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20deemed%20export%20refund%20advice%20under%20Section%20147." target="_blank">WhatsApp us now</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Talk to Patron's Deemed Export Refund Team</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.92);">Deemed exports under Section 147 of the CGST Act 2017 read with Notification 48/2017-Central Tax dated 18 October 2017 are the GST law's mechanism for ensuring tax neutrality on domestic supplies feeding the export-linked supply chain - Advance Authorisation holders (FTP Chapter 4), EPCG capital goods recipients (FTP Chapter 5), EOU/EHTP/STP/BTP units (FTP Chapter 6), and gold supplied by banks or PSUs against AA. Unlike zero-rated supplies under Section 16 of IGST Act 2017, deemed exports cannot be made under LUT or Bond - GST must be paid at the applicable rate at time of supply, and the refund is claimed afterwards.</p>
                <p style="color:rgba(255,255,255,0.92);">The unique procedural feature is the either-supplier-or-recipient filing right under Rule 89(1) third proviso of CGST Rules 2017 - no other refund category has this. Notification 49/2017-Central Tax prescribes the documentary evidence; Circular 14/14/2017-GST sets the Form A prior intimation procedure for EOU/EHTP/STP/BTP recipients. Rule 89(4A) gives the recipient a companion refund right for OTHER inputs ITC used in zero-rated supplies. The merchant exporter 0.1 percent scheme under Notifications 40/2017-Central Tax (Rate) and 41/2017-Integrated Tax (Rate) dated 23 October 2017 is a SEPARATE concessional rate regime, not a deemed export - misclassifying the two is the most common source of failed refund claims.</p>
                <p style="color:rgba(255,255,255,0.92);">Patron Accounting LLP brings 15+ years of Section 147 deemed exports, Notification 48/2017 categorisation, FTP Chapters 4 to 6 compliance, Form A coordination, jurisdictional officer endorsement liaison, and Rule 89(4A) and 89(4B) refund experience for 200+ AA holders, EPCG holders, EOU units, and DTA suppliers across pharma, engineering, textile, electronics, and gems and jewellery, with four physical offices in Pune, Mumbai, Delhi, and Gurugram. Suppliers and recipients gain CA-led categorisation discipline, optimal filer recommendation, complete Notification 49/2017 evidence pack, Form A coordination, and merchant exporter scheme advisory where applicable.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Refund%20on%20Deemed%20Exports.%20Please%20contact%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20Deemed%20Export%20Refund%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20deemed%20export%20refund%20services%20under%20Section%20147%20and%20Notification%2048%2F2017%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Related GST and Litigation Services</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">End-to-end GST refund coverage - from RFD-01 filing through to GSTAT Section 112 escalation for refund rejection appeals.</p>
            <div class="pa-city-block">
                    <div class="pa-block-title">Related Services</div>
                    <div class="pa-block-sub">End-to-end support for GST Refund - Deemed Exports</div>
                    <div class="pa-cross-grid">
                        <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-exporters/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal - Exporters</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gstat-appeal-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GSTAT Appeal Filing</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-notice/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a>
                        <a href="/gst-audit/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
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
            <p><strong>Content Created:</strong> 7 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 7 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>Reviewed every 3 months under Tier 1 freshness cycle. Triggers for earlier review: any DGFT notification, FTP amendment, CBIC circular successor to Circular 14/14/2017, Rule 89(4A)/(4B) amendment, merchant exporter scheme rate change, or Notification 48/2017 category expansion.</p>
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