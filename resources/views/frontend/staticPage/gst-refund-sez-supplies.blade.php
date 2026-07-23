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
    <title>GST Refund on SEZ Supplies — Section 16 IGST and Rule 89</title>
    <meta name="description" content="Claim GST refund on SEZ supplies under Section 16 IGST + Rule 89(2)(f). Specified officer endorsement via DSPF. Authorised operations focus. Rs 8,000+.">
    <link rel="canonical" href="/gst-refund-sez-supplies">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund on SEZ Supplies — Section 16 IGST and Rule 89">
    <meta property="og:description" content="Claim GST refund on SEZ supplies under Section 16 IGST + Rule 89(2)(f). Specified officer endorsement via DSPF. Authorised operations focus. Rs 8,000+.">
    <meta property="og:url" content="/gst-refund-sez-supplies/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/gst-refund-sez-supplies-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund on SEZ Supplies — Section 16 IGST and Rule 89">
    <meta name="twitter:description" content="Claim GST refund on SEZ supplies under Section 16 IGST + Rule 89(2)(f). Specified officer endorsement via DSPF. Authorised operations focus. Rs 8,000+.">
    <meta name="twitter:image" content="/images/gst-refund-sez-supplies-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BreadcrumbList",
      "@id": "/gst-refund-sez-supplies/#breadcrumb",
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
          "name": "SEZ Supplies",
          "item": "/gst-refund-sez-supplies/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "/gst-refund-sez-supplies/#faq",
      "datePublished": "2026-05-07T08:00:00+05:30",
      "dateModified": "2026-05-11T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is GST refund on SEZ supplies under Section 16 of the IGST Act?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Supplies of goods or services from a Domestic Tariff Area (DTA) supplier to a Special Economic Zone (SEZ) unit or developer are zero-rated under Section 16(1)(b) of the IGST Act 2017. The DTA supplier (not the SEZ unit) claims refund of either accumulated ITC under LUT route (Rule 89) or IGST paid under IGST-paid route (RFD-01). Section 26 of the SEZ Act 2005 provides the substantive exemption; the GST refund mechanism gives effect to it."
          }
        },
        {
          "@type": "Question",
          "name": "Who can claim refund on supplies to SEZ - the DTA supplier or the SEZ unit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The DTA supplier files RFD-01. The SEZ unit is the recipient and is exempt from paying any duties or taxes under Section 26 of the SEZ Act 2005, so the SEZ unit has no GST refund entitlement on inputs from DTA. Per second proviso to Rule 89(1) of CGST Rules 2017, the application for refund in respect of supplies to SEZ shall be filed by the supplier of goods (after admission) or supplier of services (with endorsement)."
          }
        },
        {
          "@type": "Question",
          "name": "SEZ supply ka GST refund kaise milta hai - kya documents lagte hain? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "DTA supplier ko Form RFD-01 file karna hota hai GST portal par. Pehle SEZ customer se Specified Officer endorsement lena hota hai - goods ke liye admission certificate, services ke liye DSPF acknowledgement on SEZ Online. Phir LOA ke Authorised Operations list ke saath invoices map karne hote hain. Statement 4 (IGST-paid route) ya Statement 5 (LUT route) banakar Rule 89(4) formula apply karke refund quantum calculate karna hota hai. Annexure 2 me Rule 89(2)(f) declaration lagani hoti hai ki tax SEZ se collect nahi kiya."
          }
        },
        {
          "@type": "Question",
          "name": "What is the role of the Specified Officer endorsement under Rule 89(1) second proviso?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Specified Officer (or Authorised Officer) of the SEZ - defined under Rule 2 of SEZ Rules 2006 - certifies that the goods or services received from DTA are for the SEZ unit's Authorised Operations as listed in its Letter of Approval (LOA). For goods, the Specified Officer endorses admission of goods in full. For services, the Specified Officer electronically endorses the invoice via the DSPF module on SEZ Online. Without this endorsement, refund is not admissible."
          }
        },
        {
          "@type": "Question",
          "name": "How does the DSPF module on SEZ Online work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Live since October 2023, DSPF is the electronic endorsement mechanism for service supplies. The SEZ unit logs into SEZ Online, uploads invoice details (Excel template), maps each invoice to a service in the LOA-approved Authorised Services list, attaches LUT number, payment proof, and supplier details. The form auto-routes to the Authorised Officer who either approves or refers to the Specified Officer. Once endorsed, an acknowledgement is sent to the DTA supplier's email - this is the endorsement evidence under Rule 89(2)(e)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Rule 89(2)(f) declaration and when is it required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 89(2)(f) of CGST Rules 2017 requires the DTA supplier to declare in Annexure 2 of Form GST RFD-01 that tax has not been collected from the SEZ unit or developer in respect of the supplies covered under the refund claim. This declaration is the SEZ-specific manifestation of the unjust enrichment doctrine in Section 54(8) of CGST Act 2017. Required for every SEZ supply refund. Officer challenges to this declaration are the third most common rejection ground."
          }
        },
        {
          "@type": "Question",
          "name": "Is endorsement required for both goods and services supplied to SEZ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes for both, but in different forms. For goods, the requirement is admission of goods in full into the SEZ for Authorised Operations as endorsed by the Specified Officer (per Rule 89(1)(a)). For services, the requirement is evidence of receipt of services for Authorised Operations as endorsed by the Specified Officer (per Rule 89(1)(b)) - this evidence is now obtained via DSPF since October 2023. Some rulings have held that for goods refund where ITC is adjusted against taxable supplies and no refund is sought, endorsement is not required."
          }
        },
        {
          "@type": "Question",
          "name": "How does Rule 30 of SEZ Rules 2006 interact with GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 30 of SEZ Rules 2006 prescribes the procurement procedure for SEZ units from DTA, including the documentation and endorsement requirements. Rule 30(4) specifically deals with the endorsement compliance. Rule 30 is the SEZ-side basis; second proviso to Rule 89(1) of CGST Rules 2017 is the GST-side requirement that operationalises the endorsement for refund purposes. Both must be satisfied."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for SEZ supply refund under Rule 89(2)(e)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 89(2)(e) requires (1) statement containing number and date of invoices, (2) evidence regarding the endorsement specified in second proviso to Rule 89(1) - the DSPF acknowledgement for services or admission certificate for goods, (3) details of payment along with proof made by the recipient SEZ to the DTA supplier for Authorised Operations as defined under SEZ Act 2005. All three are submitted in Annexure to RFD-01."
          }
        },
        {
          "@type": "Question",
          "name": "Specified Officer endorsement nahi mil rahi - kya karein? (Hinglish)",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pehle check karein ki invoice LOA Authorised Operations ke saath map hai. Agar specific service LOA me listed nahi hai to broader category (jaise facility management ya IT enabled support) ke under fit karna possible hai. Phir SEZ unit ke procurement team ke saath coordinate karke DSPF re-submit karein with corrected mapping. Agar Authorised Officer refuse kar raha hai to Specified Officer ko written representation. Agar wahan bhi stuck hai to Section 11 SEZ Act 2005 ke under Development Commissioner ko escalate karein - yeh fast-tracking lever rarely use hota hai par effective hai."
          }
        }
      ]
    },
    {
      "@type": "Service",
      "@id": "/gst-refund-sez-supplies/#service",
      "name": "GST Refund on SEZ Supplies (Section 16 IGST Act + Rule 89(2)(f))",
      "description": "Patron Accounting LLP files GST refund on supplies to SEZ units and developers under Section 16(1)(b) of IGST Act 2017 read with Rule 89 of CGST Rules 2017 and Section 26 of SEZ Act 2005. Services include LOA-to-invoice Authorised Operations mapping, DSPF endorsement coordination on SEZ Online, Specified Officer liaison, Form GST RFD-01 with Statement 4 or Statement 5, Rule 89(2)(e) endorsement evidence pack, Rule 89(2)(f) declaration drafting and litigation defence, and endorsement gap recovery for past 2 financial years.",
      "serviceType": "GST Refund Filing Service",
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
            <li><span style="color:var(--orange);font-weight:600;">SEZ Supplies Services</span></li>
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
                        GST Refund on SEZ Supplies (Section 16 IGST + Rule 89(2)(f))
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Tax invoice, LOA copy, Specified Officer endorsement, GSTR-1 Table 6B, GSTR-3B Table 3.1(b).</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starts at Rs 8,000 per RFD-01 cycle plus 18 percent GST; success fee 1 to 3 percent on recovery.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> DTA supplier registered under GST making zero-rated supply to SEZ unit or developer for Authorised Operations.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30 to 60 days for RFD-01 sanction; 90 percent provisional in 7 days for low-risk filings.</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20refund%20on%20SEZ%20supplies.%20Please%20share%20a%20free%20eligibility%20check." target="_blank" class="btn-sample text-decoration-none">
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
                        <input type='hidden' name='Potential Name' id='dealNameField' value='Website Enquiry - SEZ Supplies'/>
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
                                                                <option value="gst-refund-sez-supplies" selected>GST Refund SEZ Supplies</option>
                                <option value="gst-refund">GST Refund (General)</option>
                                <option value="gst-refund-rfd-01-filing">GST RFD-01 Filing</option>
                                <option value="gst-refund-service-exports">GST Refund Service Exports</option>
                                <option value="gst-returns">GST Returns Filing</option>
                                <option value="gst-annual-returns">GST Annual Returns</option>
                                <option value="gst-audit">GST Audit</option>
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
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had 18 invoices stuck across 2024 and 2025 to a Hyderabad pharma SEZ unit. Endorsements were all missing. Patron coordinated fresh DSPF submissions, mapped each invoice to LOA Authorised Services, secured Specified Officer endorsement in 22 days, and filed fresh RFD-01s. RFD-06 sanctioned within 41 days - Rs 2.1 crore recovered.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Vivek Kapoor</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Mumbai Pharma DTA Supplier</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Authorised Officer at the Hyderabad SEZ kept refusing our IT facility management invoices saying the service was not in LOA. Patron's LOA Annex re-mapping showed facility management fell under broader IT enabled support category. Endorsement came through in 2 weeks; Rs 38 lakh refund credited within 45 days of RFD-01.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SR</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh Reddy</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Pune IT Services DTA</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">RFD-08 SCN challenged our Rule 89(2)(f) declaration alleging IGST was built into pricing. Patron showed LUT-route invoice with zero IGST, GSTR-3B Table 3.1(b) zero-rated reporting, and SEZ unit confirmation letter. Officer accepted - Rs 67 lakh refund sanctioned. Litigation defence without going to Section 107.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NB</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Bhatia</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Noida Engineering DTA</div>
                        <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    </div>
                    <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
                </div>
            </div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">DSPF was stuck pending for 3 months at the Chennai SEZ. Patron escalated to the Development Commissioner with Section 11 SEZ Act framework, got endorsement within 10 days, and filed RFD-01. Section 56 interest claimed from Day 61 of original RFD-02. Combined recovery of Rs 84 lakh including interest.</div>
                <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                    <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div>
                    <div>
                        <div style="font-weight:700;font-size:13px;color:var(--blue);">Anand Thakkar</div>
                        <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, Chennai Biotech DTA</div>
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
                    <p>From pharma, IT, engineering, biotech, electronics, and gems and jewellery DTA suppliers feeding SEZ units in Hyderabad, Pune, Mumbai, Chennai, Bengaluru, and Noida - we handle 200+ SEZ refund cycles annually with deep Specified Officer liaison capability.</p>
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
            <a href="#what-section" class="toc-pill">What Is SEZ Refund</a>
            <a href="#who-section" class="toc-pill">Eligible Claimants</a>
            <a href="#services-section" class="toc-pill">Our Services</a>
            <a href="#procedure-section" class="toc-pill">8-Step Pipeline</a>
            <a href="#documents-section" class="toc-pill">Documents</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Benefits</a>
            <a href="#comparison-section" class="toc-pill">SEZ vs Goods vs Service</a>
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
                    <p><strong>&#128204; TL;DR - SEZ Supplies Services at a Glance</strong></p>
                    <p>Supplies made by a Domestic Tariff Area (DTA) supplier to a Special Economic Zone (SEZ) unit or developer are zero-rated under Section 16(1)(b) of the IGST Act 2017. The DTA supplier (not the SEZ unit) claims refund of either accumulated ITC under LUT route (Rule 89) or IGST paid under IGST-paid route. Specified Officer endorsement under Rule 89(1) second proviso plus Rule 89(2)(f) declaration that tax has not been collected from SEZ are mandatory.</p>
                    <div class="table-responsive-wrapper" style="margin-top:16px;">
                    <table>
                        <thead><tr><th>Quick Reference</th><th>Details</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Governing Provision</strong></td><td>Section 16(1)(b) and 16(3) of IGST Act 2017 read with Rule 89 of CGST Rules 2017 and Section 26 of SEZ Act 2005</td></tr>
                            <tr><td><strong>Who Claims</strong></td><td>DTA supplier (not the SEZ unit) - SEZ unit is the recipient and exempt from tax under Section 26 SEZ Act</td></tr>
                            <tr><td><strong>Filing Form</strong></td><td>Form GST RFD-01 with Statement 4 (IGST-paid) or Statement 5 (LUT route)</td></tr>
                            <tr><td><strong>Key Documentary Requirement</strong></td><td>Specified Officer endorsement on tax invoice via SEZ Online DSPF for services; admission certificate for goods; Rule 89(2)(f) declaration</td></tr>
                            <tr><td><strong>Time Limit</strong></td><td>2 years from relevant date under Section 54(1) of CGST Act 2017</td></tr>
                            <tr><td><strong>Authorised Operations Linkage</strong></td><td>Mandatory - supply must be used for SEZ unit's Authorised Operations as per LOA</td></tr>
                            <tr><td><strong>Authority</strong></td><td>Specified Officer / Authorised Officer (SEZ); DSPF on sezonline-ndml.com; GST jurisdictional officer for RFD-01</td></tr>
                        </tbody>
                    </table>
                    </div>
                    <p style="display:none;"></p>
                </div>
                <p>SEZ supply refund is the most documentation-heavy GST refund category. Section 26 of the SEZ Act 2005 exempts SEZ units and developers from payment of any duties or taxes on goods or services procured from the Domestic Tariff Area for Authorised Operations. The GST regime implements this by treating supplies to SEZ units and developers as zero-rated under Section 16(1)(b) of the IGST Act 2017 - the DTA supplier raises a zero-tax invoice (LUT route) or pays IGST and claims refund (IGST-paid route). Either way, the DTA supplier - not the SEZ unit - is the claimant.</p>
                <p>The substantive gate that distinguishes SEZ refund from goods or service exports is the Specified Officer endorsement requirement under the second proviso to Rule 89(1) of CGST Rules 2017 read with Rule 30 of SEZ Rules 2006. For supplies of goods, the goods must be admitted in full into the SEZ for Authorised Operations as endorsed by the Specified Officer. For supplies of services, evidence of receipt of services for Authorised Operations must be obtained from the Specified Officer. Since October 2023, the SEZ Online portal's DTA Service Procurement Form (DSPF) module enables electronic endorsement for services. Patron Accounting LLP files, defends, and recovers SEZ supply refunds for 200+ DTA suppliers across IT, pharma, engineering, biotech, gems and jewellery, and electronics.</p>
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
                <h2 class="section-title">What Is GST Refund on SEZ Supplies?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund on SEZ supplies is the refund mechanism by which a Domestic Tariff Area (DTA) supplier recovers the GST that would otherwise stick as cost on supplies made to a Special Economic Zone (SEZ) unit or developer. <strong>Section 16(1)(b) of the IGST Act 2017</strong> categorises supplies to SEZ units and developers as zero-rated supply, and Section 16(3) gives the DTA supplier two refund routes - export under LUT or bond without payment of IGST and claim refund of accumulated ITC under Rule 89, or charge IGST on the invoice and claim refund of tax paid via Form RFD-01.</p>
                    <p>The structural anchor is <strong>Section 26 of the Special Economic Zones Act 2005</strong>, which exempts SEZ units and developers from payment of any duties or taxes on goods or services procured from the DTA, provided the procurement is for Authorised Operations as defined in the LOA (Letter of Approval) issued by the SEZ Development Commissioner. Rule 30 of the SEZ Rules 2006 prescribes the documentation requirement, including the Specified Officer endorsement. Rule 89(1) second proviso of CGST Rules 2017 mirrors this requirement on the GST refund side, and Rule 89(2)(e) and 89(2)(f) prescribe the specific evidentiary documents and declarations required in Form RFD-01.</p>
                    <p><strong>Specified Officer endorsement workflow - goods vs services:</strong></p>
                    <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                    <table>
                        <thead><tr><th>Supply Type</th><th>Endorsement Path</th><th>Statutory Hook</th></tr></thead>
                        <tbody>
                            <tr><td><strong>Goods Supplied to SEZ</strong></td><td>Bill of Entry filed on SEZ Online; Specified Officer endorses admission of goods in full into the SEZ for Authorised Operations</td><td>Rule 89(1)(a) second proviso + Rule 30 SEZ Rules 2006</td></tr>
                            <tr><td><strong>Services Supplied to SEZ</strong></td><td>DSPF (DTA Service Procurement Form) on SEZ Online - live since October 2023; SEZ unit uploads invoice details, maps to LOA Authorised Services, AO/SO electronically endorses</td><td>Rule 89(1)(b) second proviso + Rule 89(2)(e)</td></tr>
                            <tr><td><strong>Goods + Services Bundle</strong></td><td>Apply Section 8 IGST Act principal supply test; endorsement required for service component via DSPF; goods component via admission certificate</td><td>Section 8 IGST + Rule 89(1) second proviso</td></tr>
                        </tbody>
                    </table>
                    </div>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for SEZ Supplies:</strong></p>
                    <ul style="margin-bottom:0;">
                        <li><strong>SEZ (Special Economic Zone):</strong> Geographically defined duty-free enclave under SEZ Act 2005 treated as foreign territory for trade and tariff purposes.</li>
                        <li><strong>DTA (Domestic Tariff Area):</strong> Whole of India outside SEZs and Free Trade Warehousing Zones - the source of supplies into SEZ.</li>
                        <li><strong>SEZ Unit / Developer:</strong> Unit set up in an SEZ for manufacturing or service activity / entity that develops the SEZ infrastructure.</li>
                        <li><strong>LOA (Letter of Approval):</strong> Approval letter issued by SEZ Development Commissioner specifying the Authorised Operations the unit is permitted to undertake.</li>
                        <li><strong>Authorised Operations:</strong> Operations specified in LOA - supply must be linked to these to qualify for zero-rated treatment under Section 16(1)(b).</li>
                        <li><strong>Specified Officer (SEZ):</strong> Authority defined under SEZ Rules 2006 Rule 2 - endorses receipt of goods or services for Authorised Operations.</li>
                        <li><strong>Authorised Officer (SEZ):</strong> Same as Specified Officer for GST refund purposes per Explanation to Rule 89(1) of CGST Rules 2017.</li>
                        <li><strong>DSPF (DTA Service Procurement Form):</strong> Module on SEZ Online portal for electronic submission and Specified Officer endorsement of service invoices to SEZ. Live since October 2023.</li>
                        <li><strong>Zero-Rated Supply (Section 16 IGST):</strong> Exports and SEZ supplies; tax at 0 percent with full ITC eligibility and refund.</li>
                        <li><strong>Rule 89(2)(e):</strong> Statement of invoices with endorsement evidence required for service supplies to SEZ.</li>
                        <li><strong>Rule 89(2)(f):</strong> Mandatory declaration in Annexure 2 of RFD-01 - supplier declares tax has not been collected from SEZ unit or developer.</li>
                        <li><strong>Section 26 of SEZ Act 2005:</strong> Statutory tax exemption for SEZ units and developers on goods or services from DTA for Authorised Operations.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SEZ Supplies</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 16(1)(b)</span>
                        <strong>SEZ Zero-Rated Refund</strong>
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
            <h2 class="section-title">Eligible Claimants - Who Files and When</h2>
            <div class="content-text">
                
                <p>The most common confusion in SEZ refund is who claims - the DTA supplier or the SEZ unit. The answer is structural - the DTA supplier files RFD-01 because the SEZ unit is exempt from paying GST under Section 26 of SEZ Act 2005 and therefore has no GST refund entitlement on inputs from DTA.</p>
                <p><strong>Eligible claimants - DTA suppliers:</strong></p>
                <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                <table>
                    <thead><tr><th>Scenario</th><th>Verdict</th></tr></thead>
                    <tbody>
                        <tr><td><strong>DTA Manufacturer Supplying Goods to SEZ Unit</strong></td><td>PASSES under Section 16(1)(b); requires goods admission endorsement by Specified Officer under Rule 89(1) second proviso(a)</td></tr>
                        <tr><td><strong>DTA Service Provider Supplying Services to SEZ Unit</strong></td><td>PASSES under Section 16(1)(b); requires DSPF endorsement on SEZ Online for each invoice</td></tr>
                        <tr><td><strong>DTA Service Provider Supplying Services to SEZ Developer</strong></td><td>PASSES under Section 16(1)(b); same DSPF route</td></tr>
                        <tr><td><strong>DTA Supplier of Goods + Services Bundle</strong></td><td>Apply Section 8 IGST Act principal supply test; endorsement required for the service component</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Not eligible - common misconceptions:</strong></p>
                <div class="table-responsive-wrapper" style="margin-top:12px;margin-bottom:16px;">
                <table>
                    <thead><tr><th>Ineligible Scenario</th><th>Reason</th></tr></thead>
                    <tbody>
                        <tr><td><strong>SEZ Unit Itself</strong></td><td>SEZ unit is the recipient and exempt under Section 26 SEZ Act 2005 - no refund entitlement on procurement</td></tr>
                        <tr><td><strong>DTA-to-DTA Sale That Transits SEZ Warehouse</strong></td><td>Free Trade Warehousing Zone (FTWZ) traders selling to DTA - not zero-rated</td></tr>
                        <tr><td><strong>Supply Not Linked to Authorised Operations</strong></td><td>If the supply is for non-LOA-listed activities (canteen, employee transport), refund denied even if SEZ-located</td></tr>
                        <tr><td><strong>Goods Not Admitted in Full to SEZ</strong></td><td>If only partial admission, only the admitted portion qualifies for refund</td></tr>
                        <tr><td><strong>IGST Already Refunded Through Customs Route</strong></td><td>Cannot double-claim under Rule 96 and Rule 89</td></tr>
                    </tbody>
                </table>
                </div>
                <p>For the upstream RFD-01 filing mechanics, see <a href="/gst-refund-rfd-01-filing/">GST RFD-01 filing step-by-step</a> covering the 11-Statement matrix. For service exports under Section 2(6) IGST (different from SEZ), see <a href="/gst-refund-service-exports/">GST refund service exports</a>. For inverted duty structure refund (a different Section 54 category common in manufacturing), see <a href="/gst-refund-inverted-duty-structure/">GST refund inverted duty structure</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Services for SEZ Supply Refund</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>LOA-to-Invoice Authorised Operations Mapping</strong></td><td>Free 30-minute review of SEZ customer's LOA against the DTA supplier's invoice line items to confirm Authorised Operations linkage. Documented memo for officer reference. <span class="badge-included">Free</span></td></tr>
                        <tr><td><strong>DSPF Endorsement Coordination on SEZ Online</strong></td><td>End-to-end coordination with SEZ unit's procurement team and Specified/Authorised Officer for DSPF submission, LOA mapping, payment proof, LUT verification, follow-up till endorsement acknowledgement reaches DTA. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Form GST RFD-01 End-to-End Filing</strong></td><td>Online RFD-01 filing under LUT route (Statement 5) or IGST-paid route (Statement 4). Declarations under Rule 89(2)(e), 89(2)(f), 89(2)(l), 89(2)(m); CA certificate above Rs 2 lakh. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Rule 89(4) Computation for SEZ Turnover</strong></td><td>Net ITC of inputs and input services; Adjusted Total Turnover; SEZ supply turnover segregation; CA-certified worksheet. <span class="badge-included">Included</span></td></tr>
                        <tr><td><strong>Endorsement Gap Recovery (Past 2 Financial Years)</strong></td><td>Audit past 2 FYs of SEZ supplies under Section 54(1) limitation. Identify invoices where endorsement is missing. Coordinate fresh DSPF, secure endorsement, file fresh RFD-01. Success-fee model. <span class="badge-addon">Recovery Project</span></td></tr>
                        <tr><td><strong>Rule 89(2)(f) Declaration + Litigation Defence</strong></td><td>Mandatory declaration drafting and substantiation; defends against RFD-08 SCN where officer alleges tax was collected; Section 107 / 109 appeal preparation. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>RFD-08 SCN Response With Hearing</strong></td><td>Show Cause Notice reply within 15 days; documentary defence pack citing CBIC Circular 48/22/2018-GST; personal hearing representation. <span class="badge-addon">Add-on</span></td></tr>
                        <tr><td><strong>Specified Officer Escalation to Development Commissioner</strong></td><td>Where DSPF stuck or endorsement refused - written representation under Section 11 SEZ Act 2005 to Development Commissioner. <span class="badge-addon">Add-on</span></td></tr>

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
            <h2 class="section-title">8-Step SEZ Supply Refund Pipeline</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting's SEZ supply refund pipeline runs the eight sequential stages below. Each step cites the relevant Act, Section, Rule, Form, or Circular for traceability.</p>
        </div>
        <div class="steps-container">
                        <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 1</span>
                    <h3 class="step-title">LOA Verification and Authorised Operations Mapping</h3>
                    <p class="step-description">Obtain copy of SEZ unit's Letter of Approval (LOA). Map each invoice line item to a specific Authorised Operation listed in the LOA. Without this mapping, Specified Officer endorsement will be denied. Patron documents the mapping in a memo for officer reference.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>LOA Annex mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Each invoice line tagged</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">LOA Mapping</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><circle cx="32" cy="44" r="2" fill="#F5A623"/><text x="38" y="46" font-size="5" fill="#14365F" font-family="Arial">Auth Op A</text><circle cx="32" cy="52" r="2" fill="#F5A623"/><text x="38" y="54" font-size="5" fill="#14365F" font-family="Arial">Auth Op B</text><circle cx="32" cy="60" r="2" fill="#F5A623"/><text x="38" y="62" font-size="5" fill="#14365F" font-family="Arial">Auth Op C</text><rect x="38" y="68" width="44" height="10" rx="2" fill="#E8712C"/><text x="60" y="75" font-size="6" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">INVOICE</text></svg></div>
                        <span class="illustration-label">Mapping Done</span>
                        <span class="step-number-large">01</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 2</span>
                    <h3 class="step-title">Route Selection - LUT (Rule 89) vs IGST-Paid</h3>
                    <p class="step-description">LUT route - supply to SEZ without IGST under Form RFD-11 (Rule 96A); claim refund of accumulated ITC under Rule 89. IGST-paid route - charge IGST on invoice; claim refund of tax paid via RFD-01. LUT preferred where ITC accumulation is significant; IGST-paid preferred for small refund amounts.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statement 5 (LUT) or Statement 4</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash-flow optimised</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="25" width="40" height="50" rx="4" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="35" y="40" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LUT</text><text x="35" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Stmt 5</text><text x="60" y="55" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OR</text><rect x="65" y="25" width="40" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="85" y="40" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">IGST</text><text x="85" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Stmt 4</text></svg></div>
                        <span class="illustration-label">Route Selected</span>
                        <span class="step-number-large">02</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 3</span>
                    <h3 class="step-title">Invoice Issuance and e-Invoice Reporting</h3>
                    <p class="step-description">Raise tax invoice with SEZ unit GSTIN (deemed inter-state supply). Report on IRP if turnover above Rs 5 crore for IRN and QR code. Mark invoice as Supply to SEZ Without Payment of Tax (LUT) or Supply to SEZ With Payment of Tax.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>e-Invoice with IRN/QR</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Marked SEZ supply</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Tax Invoice</text><line x1="28" y1="34" x2="92" y2="34" stroke="#14365F" stroke-width="1" opacity="0.4"/><rect x="28" y="42" width="64" height="5" rx="1" fill="#F0F4F8"/><rect x="28" y="50" width="50" height="5" rx="1" fill="#F0F4F8"/><rect x="68" y="56" width="28" height="20" rx="2" fill="#FFF3E0" stroke="#F5A623"/><text x="82" y="68" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">IRN</text><text x="82" y="76" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">QR</text></svg></div>
                        <span class="illustration-label">Invoice Raised</span>
                        <span class="step-number-large">03</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 4</span>
                    <h3 class="step-title">Endorsement - Goods Admission OR DSPF Service Endorsement</h3>
                    <p class="step-description">For goods: SEZ unit files Bill of Entry on SEZ Online; Specified Officer endorses admission for Authorised Operations. For services: SEZ unit submits DSPF on SEZ Online with invoice details mapped to LOA Authorised Services; AO or SO endorses electronically; acknowledgement sent to DTA supplier email.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSPF acknowledgement (services)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Admission certificate (goods)</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="14" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="25" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">SEZ Online DSPF</text><rect x="30" y="38" width="60" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623"/><text x="60" y="44" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Invoice + LOA Map</text><path d="M30 52 L60 56 L90 52" stroke="#14365F" stroke-width="1" fill="none"/><text x="60" y="64" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AO/SO Approve</text><circle cx="100" cy="75" r="6" fill="#25D366"/><text x="100" y="78" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">OK</text></svg></div>
                        <span class="illustration-label">Endorsed</span>
                        <span class="step-number-large">04</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 5</span>
                    <h3 class="step-title">GSTR-1 Table 6B + GSTR-3B Reconciliation</h3>
                    <p class="step-description">Report SEZ invoices in GSTR-1 Table 6B (Supplies to SEZ With Payment of Tax) or Table 6B flagged as Without Payment for LUT route. Confirm GSTR-3B Table 3.1(b) - Outward Taxable Supplies (Zero-Rated) - matches Table 6B.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 6B vs 3.1(b) matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatch prevented</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="40" height="60" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="35" y="34" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="35" y="46" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">Table 6B</text><path d="M58 50l8 0M64 46l4 4-4 4" stroke="#25D366" stroke-width="2" fill="none"/><rect x="65" y="20" width="40" height="60" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="85" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><text x="85" y="46" font-size="5" fill="#14365F" font-family="Arial" text-anchor="middle">3.1(b)</text></svg></div>
                        <span class="illustration-label">GSTRs Aligned</span>
                        <span class="step-number-large">05</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 6</span>
                    <h3 class="step-title">Rule 89(4) Computation - Statement 4 or Statement 5</h3>
                    <p class="step-description">Maximum Refund under Rule 89(4) = (Turnover of Zero-Rated SEZ Supply x Net ITC) divided by Adjusted Total Turnover. Statement 4 for SEZ supplies with IGST payment; Statement 5 for SEZ supplies without IGST (LUT). CA-certified worksheet.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rule 89(4) formula applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA-certified worksheet</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="60" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><text x="60" y="34" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rule 89(4) Max Refund</text><line x1="25" y1="48" x2="95" y2="48" stroke="#14365F" stroke-width="1"/><text x="60" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SEZ Turnover x Net ITC</text><text x="60" y="62" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Adj Total Turnover</text></svg></div>
                        <span class="illustration-label">Formula Computed</span>
                        <span class="step-number-large">06</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 7</span>
                    <h3 class="step-title">Form GST RFD-01 Online Filing With Annexures</h3>
                    <p class="step-description">Login to GST portal, navigate Services > Refunds > Application for Refund. Upload Statement 4 or 5, endorsement evidence, declarations under Rule 89(2)(e), 89(2)(f) (tax not collected from SEZ), 89(2)(l), 89(2)(m), CA certificate above Rs 2 lakh. Submit and capture ARN.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All declarations attached</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN captured</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="70" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="14" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="25" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01 + Stmt 4/5</text><rect x="30" y="38" width="60" height="6" rx="1" fill="#FFF3E0"/><text x="60" y="43" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rule 89(2)(e)</text><rect x="30" y="48" width="60" height="6" rx="1" fill="#FFF3E0"/><text x="60" y="53" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">Rule 89(2)(f)</text><rect x="38" y="62" width="44" height="14" rx="3" fill="#E8712C"/><text x="60" y="71" font-size="7" fill="#FFF" font-weight="700" text-anchor="middle" font-family="Arial">SUBMIT</text></svg></div>
                        <span class="illustration-label">ARN Generated</span>
                        <span class="step-number-large">07</span>
                    </div>
                </div>
            </div>
            <div class="step-card">
                <div class="step-content">
                    <span class="step-badge">Step 8</span>
                    <h3 class="step-title">RFD-02, Provisional Sanction, Final Sanction</h3>
                    <p class="step-description">RFD-02 acknowledgement within 15 days under Rule 90(2). Risk-based system identification under amended Rule 91(2). For low-risk filings, 90 percent provisional refund via RFD-04 within 7 days under CGST Instruction 6/2025. Final sanction RFD-06 within 60 days of RFD-02.</p>
                    <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-04 90% in 7 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RFD-06 final in 60 days</span></div>
                </div>
                <div class="step-visual">
                    <div class="step-illustration">
                        <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="25" width="90" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-04 + RFD-06</text><circle cx="40" cy="58" r="8" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><text x="40" y="62" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">90%</text><circle cx="80" cy="58" r="8" fill="#FFF" stroke="#E8712C" stroke-width="1.5"/><text x="80" y="62" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">10%</text><text x="60" y="92" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">7 + 60 Days</text></svg></div>
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
            <h2 class="section-title">Document Checklist for SEZ Supply Refund</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before filing each SEZ supply refund cycle. Patron Accounting maintains a digital document vault per client tracking invoice-to-endorsement chain.</p>
                <p><strong>Mandatory documents (for every SEZ supply refund):</strong></p>
                <ul>
                    <li>Letter of Approval (LOA) of SEZ unit or developer with Authorised Operations and Authorised Services listing.</li>
                    <li>Tax invoice (e-invoice with IRN and QR code if turnover above Rs 5 crore) marked as Supply to SEZ With or Without Payment of Tax.</li>
                    <li>Specified Officer or Authorised Officer endorsement - admission certificate for goods OR DSPF acknowledgement for services.</li>
                    <li>GSTR-1 Table 6B with SEZ invoice details for the refund period.</li>
                    <li>GSTR-3B Table 3.1(b) showing zero-rated supplies for the refund period.</li>
                    <li>Form RFD-11 (LUT) reference number for LUT route filings.</li>
                    <li>Statement 4 (IGST-paid) or Statement 5 (LUT) with invoice details.</li>
                    <li>Declaration under Rule 89(2)(e) - statement of invoices and endorsement evidence.</li>
                    <li>Declaration under Rule 89(2)(f) - tax has not been collected from SEZ unit or developer (Annexure 2 of RFD-01).</li>
                    <li>Declaration under Rule 89(2)(l) - applicant has not been prosecuted.</li>
                    <li>Declaration under Rule 89(2)(m) - no other refund claim under any other provision.</li>
                </ul>
                <p><strong>Conditional documents (above Rs 2 lakh):</strong></p>
                <ul>
                    <li>CA or Cost Accountant certificate on unjust enrichment under Section 54(8) read with Rule 89(2)(m).</li>
                    <li>Computation sheet with HSN-wise rate map.</li>
                    <li>Bank statement evidencing IGST paid on outward supplies (IGST-paid route only).</li>
                    <li>Reconciliation between GSTR-3B Net ITC and books of account.</li>
                </ul>
                <p><strong>For disputed or litigated cases:</strong></p>
                <ul>
                    <li>MoU or service agreement with SEZ unit explicitly covering Authorised Operations.</li>
                    <li>SEZ unit's confirmation letter that supply was used for Authorised Operations.</li>
                    <li>Bill of Entry (for goods) showing admission into SEZ in full.</li>
                    <li>Customs export-equivalent documentation where required.</li>
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
                                                <tr><td><strong>Specified Officer Endorsement Delayed or Refused</strong></td><td>Most common rejection trigger. Officers refuse endorsement where payment is not yet made by SEZ unit (despite Rule 89 not requiring this), where invoice does not match LOA-listed service exactly, or where physical invoice copy is not produced. Patron coordinates 3-step escalation - re-submission with corrected LOA mapping, representation to Authorised Officer, escalation to Development Commissioner under Section 11 SEZ Act.</td></tr>
                        <tr><td><strong>Authorised Operations Linkage Disputed</strong></td><td>Officer rules that the supply (canteen services, transport, employee welfare) is not for Authorised Operations and refuses endorsement. Patron analyses LOA Annex carefully, identifies the broader Authorised Service category (facility management) under which the supply may legitimately fall, and re-submits with covering note.</td></tr>
                        <tr><td><strong>Rule 89(2)(f) Declaration Challenged - Tax Was Collected Alleged</strong></td><td>Officer reads invoice as having IGST element built into pricing and alleges tax was collected from SEZ. Patron demonstrates LUT route (zero IGST on invoice), provides GSTR-3B Table 3.1(b) evidence of zero-rated treatment, and produces SEZ unit confirmation that no IGST element was built into pricing.</td></tr>
                        <tr><td><strong>DSPF Module Not Functioning or Endorsement Stuck</strong></td><td>DSPF technical issues, AO or SO unavailable, or endorsement stuck in pending state. Patron coordinates with SEZ Online helpdesk (NDML), files written representation to the Specified Officer with cc to Development Commissioner, and uses Section 11 of SEZ Act 2005 fast-tracking provisions where applicable.</td></tr>
                        <tr><td><strong>e-Invoicing Dual Reporting Burden</strong></td><td>Same invoice has to be reported on IRP (for IRN and QR) and again on SEZ Online DSPF. Officers sometimes question why physical invoice differs from IRN data (currency conversion timing, rounding). Patron generates IRP-aligned PDF with IRN reference and uses it as primary endorsement document.</td></tr>
                        <tr><td><strong>Endorsement Received But RFD-08 SCN Issued</strong></td><td>GST officer questions endorsement validity, alleges Authorised Operations not satisfied, or rejects on Rule 89(2)(f) grounds. Patron drafts comprehensive reply citing CBIC Circular 48/22/2018-GST clarifying SEZ refund procedure, attaches DSPF acknowledgement, LOA Annex mapping, and SEZ unit confirmation.</td></tr>

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
            <h2 class="section-title">Fees for SEZ Supply Refund Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Government Fee (RFD-01 filing)</strong></td><td class="table-amount">Nil (no statutory portal fee)</td></tr>
                        <tr><td><strong>Patron Accounting Professional Fees - GST Refund Cluster</strong></td><td class="table-amount">Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td><strong>Single Quarter SEZ Supply Refund (turnover up to Rs 5 crore)</strong></td><td class="table-amount">Rs 8,000 per filing plus GST</td></tr>
                        <tr><td><strong>Multi-Quarter / Annual SEZ Supply Refund</strong></td><td class="table-amount">Rs 18,000 per filing plus GST</td></tr>
                        <tr><td><strong>High-Value Annual Refund (turnover above Rs 25 crore)</strong></td><td class="table-amount">Rs 35,000 per filing plus GST</td></tr>
                        <tr><td><strong>DSPF Endorsement Coordination (per quarter)</strong></td><td class="table-amount">Rs 12,000 standalone plus GST</td></tr>
                        <tr><td><strong>Endorsement Gap Recovery (past 2 FYs)</strong></td><td class="table-amount">Rs 25,000 base + Rs 1,500 per invoice plus GST</td></tr>
                        <tr><td><strong>Show Cause Notice (RFD-08) Response on Rule 89(2)(f)</strong></td><td class="table-amount">Rs 25,000 per response plus GST</td></tr>
                        <tr><td><strong>Section 107 / 109 Appeal</strong></td><td class="table-amount">Rs 50,000 to Rs 1,00,000 plus success fee</td></tr>
                        <tr><td><strong>Development Commissioner Escalation</strong></td><td class="table-amount">Rs 15,000 standalone plus GST</td></tr>
                        <tr><td><strong>Success Fee on Refund Recovery</strong></td><td class="table-amount">1 to 3 percent of refund sanctioned</td></tr>
                        <tr><td colspan="2" style="background:var(--orange-lighter);font-size:13px;color:var(--text-muted);"><em>All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved. Government fees are payable separately at actuals.</em></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free SEZ Supplies consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20SEZ%20supply%20refund%20with%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">How Long SEZ Supply Refund Takes</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>LOA verification + Authorised Operations mapping</strong></td><td>1 to 2 working days</td><td>From data share</td></tr>
                        <tr><td><strong>e-invoice generation and IRP reporting</strong></td><td>Same day as invoice</td><td>If turnover above Rs 5 crore</td></tr>
                        <tr><td><strong>DSPF submission by SEZ unit</strong></td><td>1 to 5 working days</td><td>Depends on SEZ unit procurement cycle</td></tr>
                        <tr><td><strong>Specified Officer / Authorised Officer endorsement</strong></td><td>5 to 15 working days</td><td>Varies by SEZ zone</td></tr>
                        <tr><td><strong>GSTR-1 Table 6B + GSTR-3B Table 3.1(b) filing</strong></td><td>By 11th and 20th of following month</td><td>Monthly compliance</td></tr>
                        <tr><td><strong>Rule 89(4) computation + Statement 4/5</strong></td><td>2 to 3 working days</td><td>CA-certified worksheet</td></tr>
                        <tr><td><strong>RFD-01 filing + ARN</strong></td><td>Same day after sign-off</td><td>System-driven</td></tr>
                        <tr><td><strong>RFD-02 acknowledgement</strong></td><td>Within 15 days of RFD-01</td><td>Rule 90(2) CGST Rules</td></tr>
                        <tr><td><strong>RFD-04 provisional refund (90% low-risk)</strong></td><td>Within 7 days of RFD-02</td><td>CGST Instruction 6/2025</td></tr>
                        <tr><td><strong>RFD-06 final sanction</strong></td><td>Within 60 days of RFD-02</td><td>Section 54(7) statutory ceiling</td></tr>
                        <tr><td><strong>Time limit to file under Section 54(1)</strong></td><td>2 years from relevant date</td><td>CGST Act 2017</td></tr>
                        <tr><td><strong>Interest if refund delayed beyond 60 days</strong></td><td>6% per annum under Section 56</td><td>9% for appellate orders</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <strong>Tier 1 freshness on DSPF evolution:</strong> This page is reviewed every 3 months because the SEZ Online DSPF module is actively evolving since October 2023 launch, e-invoicing-DSPF integration is pending, and NASSCOM advocacy with Department of Commerce on endorsement bottlenecks is ongoing. Notification 13/2025-CT and 14/2025-CT amended Rule 91(2) for risk-based provisional refund effective 01.10.2025. Patron tracks every CBIC clarification, SEZ Online module update, and Department of Commerce circular for impact on SEZ supply refund eligibility.

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
            <h2 class="section-title">Why CA-Led SEZ Refund Filing Beats DIY or Software-Only</h2>
        </div>
                <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <h3 class="feature-title">CA-Led LOA-to-Invoice Mapping</h3>
                <p class="feature-description">Software cannot read a LOA Annex. Patron's CAs map each invoice line item to a specific Authorised Operation listed in the LOA - without this mapping, Specified Officer endorsement will be denied. Critical for ambiguous services like facility management, advisory, IT enabled support.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                <h3 class="feature-title">DSPF Coordination + SEZ Unit Liaison</h3>
                <p class="feature-description">DSPF requires the SEZ unit to submit on its login (not the DTA supplier's). Patron coordinates with the SEZ unit's procurement team, prepares pre-mapped Excel templates, and pushes for endorsement. DTA suppliers operating alone routinely face 2-3 month delays.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h3 class="feature-title">Rule 89(2)(f) Declaration + Litigation Defence</h3>
                <p class="feature-description">The mandatory declaration in Annexure 2 of RFD-01 - tax has not been collected from SEZ - is the third most common rejection ground. Patron drafts the declaration with supporting evidence (LUT-route invoice, GSTR-3B zero-rated reporting, SEZ unit confirmation) and defends against RFD-08 SCN.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h3 class="feature-title">Risk Pre-Audit For 90% Provisional Path</h3>
                <p class="feature-description">Patron simulates the 90 percent provisional refund risk score before filing - testing GSTR-1 vs 3B match, endorsement completeness, Rule 89(2)(f) alignment, and Notification 14/2025-CT exclusions - to maximise low-risk classification under amended Rule 91(2).</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h3 class="feature-title">Endorsement Gap Recovery (Past 2 FYs)</h3>
                <p class="feature-description">Many DTA suppliers have stuck invoices with missing endorsement going back 2 years. Patron audits past 2 FYs under Section 54(1) limitation, coordinates fresh DSPF submissions, secures retrospective endorsement, and files fresh RFD-01s on a success-fee model - recovering capital previously written off.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg></div>
                <h3 class="feature-title">Development Commissioner Escalation Lever</h3>
                <p class="feature-description">Where DSPF is stuck or endorsement refused, Patron escalates under Section 11 of SEZ Act 2005 fast-tracking provisions - written representation to Development Commissioner with cc to Specified Officer. This lever is rarely used by DIY filers but routinely unlocks 2-3 month-old pending endorsements.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by DTA Suppliers Feeding SEZ Units</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses  |  4.9 Google Rating  |  50,000+ Documents Filed  |  15+ Years of GST and SEZ Compliance</strong></p>
                <p><strong>Outcome proof:</strong> A Mumbai-based pharma DTA supplier recovered Rs 2.1 crore in stuck SEZ supply refunds in March 2026 covering 18 invoices to a Hyderabad pharma SEZ unit between 2024 and 2025. Original endorsements were missing; Patron coordinated fresh DSPF submissions, mapped each invoice to LOA Authorised Services, secured Specified Officer endorsement within 22 days, and filed fresh RFD-01s. RFD-06 sanctioned within 41 days.</p>
                <p>Trusted by Hyundai, Asian Paints, Bridgestone, and 200+ DTA suppliers across IT, pharma, engineering, biotech, gems and jewellery, and electronics feeding SEZ units in Hyderabad, Pune, Mumbai, Chennai, Bengaluru, and Noida. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron Accounting serves DTA suppliers feeding SEZ units across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SEZ Supply vs Goods Export vs Service Export - Refund Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>SEZ Supply</th><th>Goods Export</th><th>Service Export</th></tr></thead>
                    <tbody>
                                                <tr><td><strong>Statutory basis</strong></td><td>Section 16(1)(b) IGST + Section 26 SEZ Act 2005</td><td>Section 16(1)(a) IGST</td><td>Section 16(1)(a) IGST + Section 2(6) IGST</td></tr>
                        <tr><td><strong>Refund mechanism</strong></td><td>Manual RFD-01 (no auto-route)</td><td>Auto via shipping bill (Rule 96)</td><td>Manual RFD-01</td></tr>
                        <tr><td><strong>Special documentation</strong></td><td>Specified Officer endorsement, LOA mapping, Rule 89(2)(f)</td><td>Shipping bill + EGM via ICEGATE</td><td>FIRC, FIRA, eBRC for forex</td></tr>
                        <tr><td><strong>Time limit</strong></td><td>2 years from relevant date (Section 54(1))</td><td>2 years from date ship or aircraft leaves India</td><td>2 years from FX receipt or invoice, whichever later</td></tr>
                        <tr><td><strong>Processing time</strong></td><td>30 to 60 days from RFD-01</td><td>7 to 15 days auto-credit</td><td>30 to 60 days from RFD-01</td></tr>
                        <tr><td><strong>Common rejection trigger</strong></td><td>Missing endorsement; Rule 89(2)(f) declaration mismatch</td><td>SB005 invoice mismatch</td><td>Section 2(6)(v) distinct person; FIRC missing</td></tr>
                        <tr><td><strong>LUT requirement</strong></td><td>Yes for LUT route (Form RFD-11)</td><td>Optional (Rule 96 IGST-paid skips LUT)</td><td>Yes for LUT route</td></tr>

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
            <h2 class="section-title">Partner Services for DTA Suppliers Feeding SEZ</h2>
            <div class="content-text">
                
                <p>SEZ supply refund work integrates with Patron Accounting's broader GST and zero-rated supply compliance stack. DTA suppliers feeding SEZ commonly bundle the services below:</p>
                <ul>
                    <li><a href="/gst-refund/">GST refund (general)</a> - the parent practice covering Section 54 refund spectrum across all 8 refund categories.</li>
                    <li><a href="/gst-refund-rfd-01-filing/">GST RFD-01 filing step-by-step</a> - the form whose mechanics underpin every SEZ supply refund.</li>
                    <li><a href="/gst-refund-rfd-03-deficiency-response/">GST RFD-03 deficiency response</a> - for pre-processing deficiency memos on filed RFD-01.</li>
                    <li><a href="/gst-refund-service-exports/">GST refund service exports</a> - for service exporters claiming refund under Section 2(6) IGST (a different zero-rated category).</li>
                    <li><a href="/gst-refund-inverted-duty-structure/">GST refund inverted duty structure</a> - accumulated ITC refund under Section 54(3)(ii) for manufacturing sectors.</li>
                    <li><a href="/gst-returns/">GST returns filing</a> - monthly GSTR-1 and GSTR-3B underpinning Table 6B and 3.1(b) reporting.</li>
                    <li><a href="/gst-registration/">GST registration</a> - for new DTA suppliers needing GSTIN before initiating any SEZ supply cycle.</li>
                    <li><a href="/gstat-appeal-exporters/">GSTAT appeal for exporters</a> - second-tier appellate route where Section 107 appeal on SEZ refund is unsuccessful.</li>
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
                
                <p><strong>Section 16(1)(b) of IGST Act 2017:</strong> Supplies of goods or services or both to a Special Economic Zone developer or a Special Economic Zone unit are zero-rated supply. Read with Section 16(3) which gives the two refund routes.</p>
                <p><strong>Section 16(3) of IGST Act 2017:</strong> Registered person making zero-rated supply may supply under bond or Letter of Undertaking without IGST and claim refund of unutilised ITC, OR supply on payment of IGST and claim refund of tax paid.</p>
                <p><strong>Section 26 of SEZ Act 2005:</strong> Substantive exemption - SEZ unit and developer are exempt from payment of any duties or taxes on goods or services procured from DTA for Authorised Operations. The refund mechanism under GST gives effect to this exemption.</p>
                <p><strong>Rule 30 of SEZ Rules 2006:</strong> Procedure for procurement from DTA - prescribes the endorsement requirement on tax invoice. Sub-rule (4) covers the specific compliance.</p>
                <p><strong>Rule 89(1) second proviso of CGST Rules 2017:</strong> (a) For goods - refund filed only after goods admitted in full into SEZ for Authorised Operations as endorsed by Specified Officer. (b) For services - refund filed with evidence of receipt of services for Authorised Operations as endorsed by Specified Officer.</p>
                <p><strong>Rule 89(2)(e) of CGST Rules 2017:</strong> Statement containing number and date of invoices, evidence of endorsement, and details of payment from SEZ recipient to DTA supplier for Authorised Operations - required for service supplies to SEZ.</p>
                <p><strong>Rule 89(2)(f) of CGST Rules 2017:</strong> Mandatory declaration in Annexure 2 of Form GST RFD-01 - I hereby declare that tax has not been collected from the Special Economic Zone unit or the Special Economic Zone developer in respect of supply of goods or services or both covered under this refund claim.</p>
                <p><strong>Rule 89(4) of CGST Rules 2017:</strong> Maximum Refund Amount = (Turnover of Zero-Rated Supply x Net ITC) divided by Adjusted Total Turnover. Same formula as goods or service exports.</p>
                <p><strong>Section 54(1) of CGST Act 2017:</strong> 2-year time limit from relevant date. For SEZ supplies, relevant date follows the Explanation 2 categories applicable to the supply type.</p>
                <p><strong>Section 54(8) of CGST Act 2017:</strong> Unjust enrichment doctrine - Rule 89(2)(f) declaration that tax not collected from SEZ is the SEZ-specific manifestation of this principle.</p>
                <p><strong>Circular 48/22/2018-GST dated 14 June 2018:</strong> Clarification on SEZ supply refund procedure including endorsement requirements.</p>
                <p><strong>Notification 13/2025-CT dated 17.09.2025:</strong> Amended Rule 91(2) for risk-based provisional refund effective 01.10.2025.</p>
                <p><strong>CGST Instruction 6/2025 dated 03.10.2025:</strong> 90 percent provisional refund mechanism for zero-rated supplies including SEZ.</p>
                <p><strong>SEZ Online DSPF Module (October 2023):</strong> DTA Service Procurement Form for electronic Specified Officer endorsement of service invoices to SEZ.</p>
                <p><strong>e-Invoicing Mandate (01.01.2023):</strong> Mandatory IRP reporting for taxpayers above Rs 5 crore turnover; applies to SEZ supplies.</p>
                <p><strong>Form GST RFD-11 (LUT):</strong> Letter of Undertaking for export and SEZ supply without IGST payment - valid one financial year (1 April to 31 March).</p>
                <p><strong>Form GST RFD-01 with Statement 4 or Statement 5:</strong> Statement 4 for SEZ supplies With Payment of Tax; Statement 5 for SEZ supplies Without Payment of Tax (LUT route).</p>
                <p><strong>Government references:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST portal</a>, <a href="https://www.sezonline-ndml.com" target="_blank" rel="noopener">SEZ Online DSPF</a>, <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">CBIC GST circulars</a>, and <a href="https://www.indiacode.nic.in" target="_blank" rel="noopener">indiacode.nic.in (CGST Act 2017, IGST Act 2017, SEZ Act 2005)</a>.</p>

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
                    <p class="faq-expanded__lead">Plain-English answers to the questions DTA suppliers most often ask about SEZ supply refund - Specified Officer endorsement, DSPF workflow, and Rule 89(2)(f) declaration - including Hinglish variants for stakeholders comfortable in mixed language.</p>
                    @include('partials.faq-enquiry-form')
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GST refund on SEZ supplies under Section 16 of the IGST Act?</h3>
                        <div class="faq-expanded__a"><p>Supplies of goods or services from a Domestic Tariff Area (DTA) supplier to a Special Economic Zone (SEZ) unit or developer are zero-rated under Section 16(1)(b) of the IGST Act 2017. The DTA supplier (not the SEZ unit) claims refund of either accumulated ITC under LUT route (Rule 89) or IGST paid under IGST-paid route (RFD-01). Section 26 of the SEZ Act 2005 provides the substantive exemption; the GST refund mechanism gives effect to it.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can claim refund on supplies to SEZ - the DTA supplier or the SEZ unit?</h3>
                        <div class="faq-expanded__a"><p>The DTA supplier files RFD-01. The SEZ unit is the recipient and is exempt from paying any duties or taxes under Section 26 of the SEZ Act 2005, so the SEZ unit has no GST refund entitlement on inputs from DTA. Per second proviso to Rule 89(1) of CGST Rules 2017, the application for refund in respect of supplies to SEZ shall be filed by the supplier of goods (after admission) or supplier of services (with endorsement).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">SEZ supply ka GST refund kaise milta hai - kya documents lagte hain? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>DTA supplier ko Form RFD-01 file karna hota hai GST portal par. Pehle SEZ customer se Specified Officer endorsement lena hota hai - goods ke liye admission certificate, services ke liye DSPF acknowledgement on SEZ Online. Phir LOA ke Authorised Operations list ke saath invoices map karne hote hain. Statement 4 (IGST-paid route) ya Statement 5 (LUT route) banakar Rule 89(4) formula apply karke refund quantum calculate karna hota hai. Annexure 2 me Rule 89(2)(f) declaration lagani hoti hai ki tax SEZ se collect nahi kiya.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the role of the Specified Officer endorsement under Rule 89(1) second proviso?</h3>
                        <div class="faq-expanded__a"><p>The Specified Officer (or Authorised Officer) of the SEZ - defined under Rule 2 of SEZ Rules 2006 - certifies that the goods or services received from DTA are for the SEZ unit's Authorised Operations as listed in its Letter of Approval (LOA). For goods, the Specified Officer endorses admission of goods in full. For services, the Specified Officer electronically endorses the invoice via the DSPF module on SEZ Online. Without this endorsement, refund is not admissible.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How does the DSPF module on SEZ Online work?</h3>
                        <div class="faq-expanded__a"><p>Live since October 2023, DSPF is the electronic endorsement mechanism for service supplies. The SEZ unit logs into SEZ Online, uploads invoice details (Excel template), maps each invoice to a service in the LOA-approved Authorised Services list, attaches LUT number, payment proof, and supplier details. The form auto-routes to the Authorised Officer who either approves or refers to the Specified Officer. Once endorsed, an acknowledgement is sent to the DTA supplier's email - this is the endorsement evidence under Rule 89(2)(e).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the Rule 89(2)(f) declaration and when is it required?</h3>
                        <div class="faq-expanded__a"><p>Rule 89(2)(f) of CGST Rules 2017 requires the DTA supplier to declare in Annexure 2 of Form GST RFD-01 that tax has not been collected from the SEZ unit or developer in respect of the supplies covered under the refund claim. This declaration is the SEZ-specific manifestation of the unjust enrichment doctrine in Section 54(8) of CGST Act 2017. Required for every SEZ supply refund. Officer challenges to this declaration are the third most common rejection ground.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is endorsement required for both goods and services supplied to SEZ?</h3>
                        <div class="faq-expanded__a"><p>Yes for both, but in different forms. For goods, the requirement is admission of goods in full into the SEZ for Authorised Operations as endorsed by the Specified Officer (per Rule 89(1)(a)). For services, the requirement is evidence of receipt of services for Authorised Operations as endorsed by the Specified Officer (per Rule 89(1)(b)) - this evidence is now obtained via DSPF since October 2023. Some rulings have held that for goods refund where ITC is adjusted against taxable supplies and no refund is sought, endorsement is not required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does Rule 30 of SEZ Rules 2006 interact with GST refund?</h3>
                        <div class="faq-expanded__a"><p>Rule 30 of SEZ Rules 2006 prescribes the procurement procedure for SEZ units from DTA, including the documentation and endorsement requirements. Rule 30(4) specifically deals with the endorsement compliance. Rule 30 is the SEZ-side basis; second proviso to Rule 89(1) of CGST Rules 2017 is the GST-side requirement that operationalises the endorsement for refund purposes. Both must be satisfied.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-9">
                        <h3 class="faq-expanded__q">What documents are needed for SEZ supply refund under Rule 89(2)(e)?</h3>
                        <div class="faq-expanded__a"><p>Rule 89(2)(e) requires (1) statement containing number and date of invoices, (2) evidence regarding the endorsement specified in second proviso to Rule 89(1) - the DSPF acknowledgement for services or admission certificate for goods, (3) details of payment along with proof made by the recipient SEZ to the DTA supplier for Authorised Operations as defined under SEZ Act 2005. All three are submitted in Annexure to RFD-01.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-10">
                        <h3 class="faq-expanded__q">Specified Officer endorsement nahi mil rahi - kya karein? (Hinglish)</h3>
                        <div class="faq-expanded__a"><p>Pehle check karein ki invoice LOA Authorised Operations ke saath map hai. Agar specific service LOA me listed nahi hai to broader category (jaise facility management ya IT enabled support) ke under fit karna possible hai. Phir SEZ unit ke procurement team ke saath coordinate karke DSPF re-submit karein with corrected mapping. Agar Authorised Officer refuse kar raha hai to Specified Officer ko written representation. Agar wahan bhi stuck hai to Section 11 SEZ Act 2005 ke under Development Commissioner ko escalate karein - yeh fast-tracking lever rarely use hota hai par effective hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <ul style="margin-bottom:0;">
                    <li><strong>Statutory basis?</strong> Section 16(1)(b) of IGST Act 2017 + Section 26 of SEZ Act 2005.</li>
                    <li><strong>Who files?</strong> DTA supplier (not the SEZ unit) - Form GST RFD-01.</li>
                    <li><strong>Refund routes?</strong> LUT (Statement 5) or IGST-paid (Statement 4).</li>
                    <li><strong>Endorsement?</strong> Specified Officer endorsement via DSPF on SEZ Online (services) or admission certificate (goods).</li>
                    <li><strong>Declaration?</strong> Rule 89(2)(f) - tax has not been collected from SEZ (Annexure 2 of RFD-01).</li>
                    <li><strong>Time limit?</strong> 2 years from relevant date under Section 54(1).</li>
                    <li><strong>Authorised Operations?</strong> Mandatory linkage to LOA-listed operations - supply must be for these.</li>
                    <li><strong>Provisional refund?</strong> 90 percent under CGST Instruction 6/2025 within 7 days for low-risk.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Statutory Deadlines That Determine Your Refund</h2>
            <div class="content-text">
                
                <p>SEZ supply refund deadlines run off Section 54(1) and the DSPF endorsement cycle. Patron tracks each milestone:</p>
                <ol>
                    <li><strong>Refund time limit under Section 54(1)</strong> - 2 years from relevant date. Permanent loss of refund right if missed.</li>
                    <li><strong>LUT renewal in Form RFD-11</strong> - before first SEZ supply of new FY (preferably by 31 March). SEZ supplies without LUT attract IGST.</li>
                    <li><strong>e-Invoice IRP reporting</strong> - mandatory if turnover above Rs 5 crore. Same day as invoice.</li>
                    <li><strong>GSTR-1 Table 6B reporting</strong> - by 11th of following month. Refund processing blocked until reported.</li>
                    <li><strong>GSTR-3B Table 3.1(b) reporting</strong> - by 20th of following month. Refund processing blocked until filed.</li>
                    <li><strong>Specified Officer endorsement</strong> - target within 15 working days of DSPF submission. Escalation to Development Commissioner under Section 11 SEZ Act if delayed.</li>
                    <li><strong>RFD-02 acknowledgement</strong> - within 15 days of RFD-01 (Rule 90(2)). Escalate via grievance if delayed.</li>
                    <li><strong>RFD-04 provisional sanction</strong> - within 7 days of RFD-02 (low-risk).</li>
                    <li><strong>RFD-06 final sanction</strong> - within 60 days of RFD-02 (Section 54(7)). 6 percent interest under Section 56 if delayed.</li>
                </ol>
                <p><strong>Get your free SEZ refund eligibility check now. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20refund%20on%20SEZ%20supplies." target="_blank" rel="noopener">WhatsApp us</a>. Refund quantum and endorsement gap report within 4 business hours.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Recover SEZ Supply Refunds With Endorsement Discipline</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:#FFFFFF;">SEZ supply refund is the most documentation-heavy GST refund category. Section 26 of the SEZ Act 2005 exempts SEZ units and developers from payment of duties or taxes on goods or services procured from DTA for Authorised Operations - and the GST regime implements this through zero-rated treatment under Section 16(1)(b) of the IGST Act 2017. The DTA supplier (not the SEZ unit) claims refund via Form GST RFD-01 under LUT route (Statement 5) or IGST-paid route (Statement 4). The substantive gate is the Specified Officer endorsement requirement under the second proviso to Rule 89(1) of CGST Rules 2017 read with Rule 30 of SEZ Rules 2006.</p>
                <p style="color:#FFFFFF;">For goods, admission certificate from Specified Officer is required. For services, the DSPF (DTA Service Procurement Form) module on SEZ Online - live since October 2023 - provides electronic endorsement. The Rule 89(2)(f) declaration that tax has not been collected from the SEZ unit is the SEZ-specific manifestation of the unjust enrichment doctrine. Patron Accounting LLP brings 15+ years of GST and SEZ compliance experience for 200+ DTA suppliers across IT, pharma, engineering, biotech, gems and jewellery, and electronics with four physical offices in Pune, Mumbai, Delhi, and Gurugram. DTA suppliers gain CA-led LOA-to-invoice mapping, DSPF endorsement coordination with the SEZ unit, Rule 89(2)(f) declaration drafting and litigation defence, endorsement gap recovery for past 2 financial years, and Development Commissioner escalation lever under Section 11 SEZ Act.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20discuss%20SEZ%20supply%20refund%20with%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:info@patronaccounting.com?subject=Enquiry%20for%20SEZ%20Supply%20Refund&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20to%20file%20GST%20refund%20on%20SEZ%20supplies%20and%20would%20like%20your%20help%20with%20Specified%20Officer%20endorsement%20and%20RFD-01%20filing.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Adjacent Services for DTA Suppliers</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">SEZ supply refund integrates with the broader GST refund and zero-rated supply stack. Most DTA suppliers run these services in parallel for end-to-end compliance.</p>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services</div>
                <div class="pa-block-sub">End-to-end GST refund and compliance support for DTA suppliers</div>
                <div class="pa-cross-grid">
                    <a href="/gst-refund/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path d="M9 12l2 2 4-4"/></svg></div><div><div class="pa-card-title">GST Refund (General)</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-01-filing/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div><div><div class="pa-card-title">GST RFD-01 Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-rfd-03-deficiency-response/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/></svg></div><div><div class="pa-card-title">RFD-03 Deficiency Response</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-service-exports/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></div><div><div class="pa-card-title">Service Exports Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-refund-inverted-duty-structure/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div><div><div class="pa-card-title">Inverted Duty Refund</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-returns/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div><div><div class="pa-card-title">GST Returns Filing</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 11l3 3L22 4M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
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
            <p><strong>Content Created:</strong> 7 May 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 May 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 7 August 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team · Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months (Tier 1 freshness - SEZ Online DSPF module is actively evolving since October 2023 launch, e-invoicing-DSPF integration pending, and NASSCOM advocacy with Department of Commerce on endorsement bottlenecks ongoing). Review triggers include CBIC notifications on Rule 89, SEZ Rules amendments, DSPF module updates, and Department of Commerce circulars.</p>
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
