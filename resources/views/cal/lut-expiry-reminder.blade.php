@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

@section('meta')
    <title>LUT Expiry Reminder | GST Form RFD-11 Renewal Calendar</title>
    <meta name="description" content="Free LUT expiry reminder for GST exporters: track Form RFD-11 validity for FY 2026-27, get milestone alerts and an ICS calendar download. Free CA tool. Try now!">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/tools/lut-expiry-reminder/">
    <meta property="og:title" content="LUT Expiry Reminder + Renewal Calendar — RFD-11 2026">
    <meta property="og:description" content="Track GST LUT validity, milestone reminders for renewal, ICS calendar download. Form RFD-11 under Rule 96A. Free CA tool.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="/tools/lut-expiry-reminder">
    <meta property="og:image" content="/tools/og/lut-expiry-reminder.png">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:locale" content="en_IN">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LUT Expiry Reminder + Renewal Calendar — RFD-11 2026">
    <meta name="twitter:description" content="Track GST LUT validity, renewal milestones, ICS calendar download. Free CA tool.">
    <meta name="twitter:image" content="/tools/og/lut-expiry-reminder.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="theme-color" content="#15365f">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "LUT Expiry Reminder + Renewal Calendar",
      "description": "LUT Expiry Reminder + Renewal Calendar tracks the validity of a Letter of Undertaking filed in Form GST RFD-11 under Rule 96A of the Central Goods and Services Tax Rules 2017 read with Notification 37/2017-Central Tax. The tool computes the LUT expiry date which is uniformly 31 March of the financial year for which it was filed, identifies days remaining until expiry with five status bands (Safe, Attention, Renewal Due, Urgent, Expired), and generates a milestone calendar with four key reminder dates: 90 days before expiry for documentation preparation, 60 days before expiry for renewal filing window opening, 30 days before expiry for urgency escalation, and 1 April of the new financial year when the new LUT must be in place before any export. The tool also generates an ICS calendar file that can be imported into Google Calendar, Apple Calendar, or Microsoft Outlook to receive automated reminders. Designed for GST-registered exporters of goods and services, suppliers to Special Economic Zone units and developers, and CA practitioners managing client compliance calendars. The tool incorporates current statutory framework including Circular 40/14/2018-GST on automatic deemed approval upon ARN generation, Notification 37/2017 eligibility requirement excluding persons prosecuted for tax evasion of two and a half crore rupees or more, the 18 percent interest consequence under Rule 96A(1) where export commitment fails within 3 months for goods or 1 year for foreign exchange realisation on services, and authorized signatory requirements covering working partners managing directors company secretaries proprietors and board-authorised persons. Suitable for export-focused businesses exporters of services SEZ suppliers manufacturing exporters software exporters and accounting firms managing client portfolios.",
      "url": "/tools/lut-expiry-reminder",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "Any",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "INR"},
      "author": {
        "@type": "Person",
        "@id": "/#founder",
        "name": "CA Sundram Gupta",
        "jobTitle": "Founder & Chartered Accountant",
        "url": "/contact-page",
        "sameAs": ["https://www.linkedin.com/in/ca-sundram-gupta"],
        "hasCredential": [{
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "Professional Certification",
          "name": "Chartered Accountant (CA)",
          "recognizedBy": {
            "@type": "Organization",
            "name": "Institute of Chartered Accountants of India",
            "sameAs": "https://en.wikipedia.org/wiki/Institute_of_Chartered_Accountants_of_India"
          }
        }]
      },
      "publisher": { "@id": "/#organization" },
      "provider": { "@id": "/#organization" }
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "/"},
        {"@type": "ListItem", "position": 2, "name": "Free Tools", "item": "/tools/"},
        {"@type": "ListItem", "position": 3, "name": "LUT Expiry Reminder", "item": "/tools/lut-expiry-reminder"}
      ]
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "datePublished": "2026-05-08T08:00:00+05:30",
      "dateModified": "2026-05-08T08:00:00+05:30",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a Letter of Undertaking under GST?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Letter of Undertaking under Rule 96A of the CGST Rules 2017 is a document filed in Form GST RFD-11 by a registered exporter who wishes to export goods or services without payment of integrated tax. The LUT is the exporter's commitment to fulfill export obligations within the prescribed timelines and to pay IGST with 18 percent interest if the commitment fails. It replaced the older bond-with-bank-guarantee mechanism for most exporters under Notification 37/2017-Central Tax dated 4 October 2017."
          }
        },
        {
          "@type": "Question",
          "name": "How long is an LUT valid?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An LUT is valid for one financial year only, expiring on 31 March of the relevant FY. For example, an LUT filed in October 2025 for FY 2025-26 is valid till 31 March 2026. A fresh LUT must be filed before the first export of the next financial year. The LUT does not auto-renew. Practitioners typically file the new FY LUT in March before financial year-end to ensure continuity. Filing late means paying IGST on intervening exports and claiming refund."
          }
        },
        {
          "@type": "Question",
          "name": "Who is eligible to furnish an LUT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Per Notification 37/2017-Central Tax, any registered person engaged in zero-rated supply (export of goods or services, or supplies to SEZ units or developers) is eligible to furnish an LUT — except those prosecuted for tax evasion of two and a half crore rupees or more under the CGST Act, IGST Act, or any earlier indirect tax law. Eligibility test is at the time of filing. The exporter declares eligibility in the LUT itself. Subsequent disqualification can lead to retroactive rejection."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my LUT expires?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If your LUT expires and you continue exports, the supply loses its zero-rated benefit under Rule 96A. You must pay full IGST on each export and claim refund subsequently through Form GST RFD-01 under Section 54. This blocks working capital, adds compliance burden, and risks departmental scrutiny on the period of non-compliance. The department may also issue notices under Section 73 or 74 demanding IGST plus 18 percent interest on past LUT-less exports if not voluntarily remedied."
          }
        },
        {
          "@type": "Question",
          "name": "How do I file Form GST RFD-11?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to the GST Portal, navigate to Services then User Services then Furnish Letter of Undertaking. Select the financial year for which the LUT applies. Upload the previous year's LUT acknowledgment if any. Provide details of two witnesses with PAN, address, and occupation. Sign using DSC for companies and LLPs or EVC for proprietorships and individuals. Submit the application. The ARN is generated immediately and per Circular 40/14/2018-GST the LUT is deemed approved on ARN generation."
          }
        },
        {
          "@type": "Question",
          "name": "When should I file the LUT for the new financial year?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Best practice is to file the new FY LUT in March before financial year-end, ideally by 25 March to allow buffer for portal issues. The new LUT must be in place before the first export of the new FY (1 April onwards). Many practitioners build a recurring March-end task in their compliance calendar. Filing post 31 March means any export between 1 April and the LUT filing date triggers IGST liability."
          }
        },
        {
          "@type": "Question",
          "name": "What are the export timelines under Rule 96A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rule 96A imposes strict timelines on LUT-covered exports. Goods must be exported within three months from the date of invoice; if not, IGST plus 18 percent interest becomes payable from invoice date. For services, foreign exchange must be received within one year from invoice date. The Commissioner may extend these timelines on application. Failure to export within timeline triggers Rule 96A(1) consequence — IGST recovery with interest. Documentation of timelines is essential during audits and refund verification."
          }
        },
        {
          "@type": "Question",
          "name": "Does LUT cover all types of zero-rated supplies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LUT covers two zero-rated categories under Section 16 IGST Act: export of goods or services outside India, and supplies to SEZ units or developers for authorised operations. The LUT does not cover deemed exports under Section 147 — those follow a different refund mechanism. Per Circular 45/19/2018-GST, LUT or bond is not required for export of non-GST goods or exempted supplies that are zero-rated by other provisions. Verify the specific category before relying on LUT cover."
          }
        },
        {
          "@type": "Question",
          "name": "Can I download a calendar reminder for LUT renewal?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Patron LUT Expiry Reminder tool generates an ICS calendar file that can be downloaded and imported into Google Calendar, Apple Calendar, Microsoft Outlook, or any standard calendar application. The ICS file contains four reminder events at 90, 60, and 30 days before expiry, plus a final reminder on 1 April for the new FY filing. Each event includes context on the action required and a link back to the GST Portal LUT filing page for one-click access."
          }
        },
        {
          "@type": "Question",
          "name": "Who must sign the LUT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The LUT must be signed by an authorised signatory of the registered person. For companies, this is typically the Managing Director, whole-time director, or Company Secretary. For LLPs and partnerships, a working partner. For proprietorships, the proprietor. For other entities, a person duly authorised by the board or governing body through resolution. The signatory must be active on the GST Portal as authorised signatory at the time of filing. DSC is mandatory for companies and LLPs."
          }
        },
        {
          "@type": "Question",
          "name": "What is the witness requirement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form GST RFD-11 requires details of two independent witnesses. For each witness, the LUT must capture the name, address, and occupation. Witnesses are typically employees, professional advisors, or business associates of the exporter. They are not required to physically sign the online form, but their details are part of the legal commitment. In case of dispute, witnesses may be summoned to confirm the existence and execution of the undertaking. Maintain witness consent letters in your records."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file LUT mid-year if I missed the financial-year filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. An LUT can be filed at any time during the financial year. However, exports made before the LUT filing date are not covered — IGST becomes payable on those exports with refund claim subsequently. The LUT becomes operative from its filing date and remains valid till 31 March of the same FY. Practitioners advise filing the LUT as the very first compliance step when starting export operations during the year. Waiting damages working capital."
          }
        },
        {
          "@type": "Question",
          "name": "Is the LUT auto-approved?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, under Circular 40/14/2018-GST dated 6 April 2018, an LUT is automatically deemed approved on generation of the Application Reference Number. No separate manual approval is required. The system generates a deemed approval order with RFD-11A acknowledgment. However, this deemed approval is subject to subsequent verification of eligibility — if the proper officer later finds the exporter ineligible (such as evidence of tax evasion prosecution above the threshold), the LUT can be rejected retroactively from filing date."
          }
        }
      ]
    }
    </script>
@endsection

<style>
        :root {
            --primary: #15365f;
            --primary-light: #1f4a7a;
            --primary-dark: #0a2240;
            --accent: #f26522;
            --accent-light: #ff8347;
            --surface: #FAFAF8;
            --surface-alt: #F0EFEB;
            --card: #FFFFFF;
            --text: #414042;
            --text-secondary: #555555;
            --text-muted: #888888;
            --border: #E5E5E0;
            --success: #059669;
            --info: #0EA5E9;
            --danger: #DC2626;
            --warning: #D97706;
            --radius: 12px;
            --radius-lg: 20px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.06);
            --shadow-md: 0 4px 16px rgba(0,0,0,0.08);
            --shadow-lg: 0 8px 32px rgba(0,0,0,0.1);
            --font-body: 'DM Sans', sans-serif;
            --font-mono: 'Space Mono', monospace;
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: var(--font-body); background: var(--surface); color: var(--text); line-height: 1.65; -webkit-font-smoothing: antialiased; }
        .toc-nav { background: var(--primary-dark); position: sticky; top: 0; z-index: 100; overflow-x: auto; white-space: nowrap; -webkit-overflow-scrolling: touch; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .toc-nav-inner { max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; }
        .toc-nav a { color: rgba(255,255,255,0.75); text-decoration: none; font-size: 13px; font-weight: 500; padding: 12px 16px; transition: all 0.2s; border-bottom: 2px solid transparent; display: inline-block; }
        .toc-nav a:hover, .toc-nav a.active { color: #fff; border-bottom-color: var(--accent); }
        .breadcrumb { max-width: 1200px; margin: 0 auto; padding: 16px 20px 0; font-size: 13px; color: var(--text-muted); }
        .breadcrumb a { color: var(--primary-light); text-decoration: none; }
        .breadcrumb a:hover { text-decoration: underline; }
        .breadcrumb span { margin: 0 6px; }
        .hero { max-width: 1200px; margin: 0 auto; padding: 32px 20px 24px; }
        .hero-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 12px; margin-bottom: 16px; }
        .badge-updated { background: var(--primary); color: #fff; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; letter-spacing: 0.3px; }
        .author-byline { font-size: 13px; color: var(--text-secondary); }
        .author-byline strong { color: var(--primary); font-weight: 600; }
        .hero h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; color: var(--primary-dark); line-height: 1.2; margin-bottom: 16px; }
        .hero h1 span { color: var(--accent); display: inline; }
        .tldr { background: var(--card); border-left: 4px solid var(--accent); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 24px; margin: 0 auto 32px; max-width: 1200px; box-shadow: var(--shadow-sm); }
        .tldr-label { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .tldr p { font-size: 15px; color: var(--text-secondary); line-height: 1.7; }
        .main-layout { max-width: 1200px; margin: 0 auto; padding: 0 20px 40px; display: grid; grid-template-columns: 1fr; gap: 32px; }
        @media (min-width: 768px) { .main-layout { grid-template-columns: 1fr 320px; gap: 40px; } }
        .content-col, .sidebar-col { min-width: 0; }
        .calc-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 32px; margin-bottom: 40px; border: 1px solid var(--border); }
        .calc-card h2 { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 8px; }
        .calc-intro { font-size: 14px; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.65; }
        .calc-section-title { font-family: var(--font-mono); font-size: 12px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin: 24px 0 12px; padding-top: 16px; border-top: 1px solid var(--border); }
        .calc-section-title:first-of-type { margin-top: 0; padding-top: 0; border-top: none; }
        .calc-row { display: grid; grid-template-columns: 1fr; gap: 14px; margin-bottom: 14px; }
        @media (min-width: 600px) { .calc-row { grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 16px; } }
        .form-group label { display: block; font-size: 13px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
        .form-group input, .form-group select { width: 100%; padding: 12px 16px; border: 2px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; color: var(--text); background: var(--surface); transition: border-color 0.2s; }
        .form-group input:focus, .form-group select:focus { border-color: var(--primary); }
        .form-group input[type="date"] { font-family: var(--font-body); font-size: 15px; font-weight: 500; }
        .form-group .helper { display: block; font-size: 11px; color: var(--text-muted); font-weight: 400; margin-top: 4px; line-height: 1.4; text-transform: none; letter-spacing: 0; }
        .btn-calculate { width: 100%; padding: 14px; background: var(--primary); color: #fff; border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 16px; font-weight: 700; cursor: pointer; transition: background 0.2s, transform 0.1s; margin-top: 8px; }
        .btn-calculate:hover { background: var(--primary-light); }
        .btn-calculate:active { transform: scale(0.98); }
        .btn-reset { width: 100%; padding: 12px; background: transparent; color: var(--text-muted); border: 1px solid var(--border); border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.2s; margin-top: 14px; }
        .btn-reset:hover { background: var(--surface); color: var(--primary); }
        .result-section { margin-top: 28px; display: none; }
        .result-section.visible { display: block; }
        .result-divider { height: 1px; background: var(--border); margin-bottom: 24px; }
        .verdict-card { border-radius: var(--radius); padding: 24px 28px; margin-bottom: 20px; border-left: 6px solid; text-align: center; }
        .verdict-card.safe { background: linear-gradient(135deg, #F0F5FB 0%, #DCE8F5 100%); border-left-color: var(--success); }
        .verdict-card.attention { background: linear-gradient(135deg, #DBEAFE 0%, #BFDBFE 100%); border-left-color: var(--info); }
        .verdict-card.due { background: linear-gradient(135deg, #FEF3C7 0%, #ff8347 100%); border-left-color: var(--accent); }
        .verdict-card.urgent { background: linear-gradient(135deg, #FFEDD5 0%, #FED7AA 100%); border-left-color: var(--warning); }
        .verdict-card.expired { background: linear-gradient(135deg, #FEE2E2 0%, #FECACA 100%); border-left-color: var(--danger); }
        .verdict-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 6px; }
        .verdict-headline { font-size: 22px; font-weight: 700; color: var(--primary-dark); margin-bottom: 4px; line-height: 1.3; }
        .days-mega { font-family: var(--font-mono); font-size: 64px; font-weight: 700; color: var(--primary-dark); line-height: 1; margin: 14px 0 4px; letter-spacing: -2px; }
        .days-mega-suffix { font-size: 20px; color: var(--text-muted); margin-left: 4px; font-family: var(--font-body); font-weight: 500; vertical-align: middle; }
        .verdict-pill { display: inline-block; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 8px; color: #fff; }
        .verdict-pill.safe { background: var(--success); }
        .verdict-pill.attention { background: var(--info); }
        .verdict-pill.due { background: var(--accent); color: var(--primary-dark); }
        .verdict-pill.urgent { background: var(--warning); }
        .verdict-pill.expired { background: var(--danger); }

        /* Calendar/Timeline */
        .timeline { background: var(--surface); border-radius: var(--radius); padding: 24px; margin-bottom: 22px; border: 1px solid var(--border); }
        .timeline-title { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 16px; }
        .timeline-track { position: relative; height: 12px; background: var(--surface-alt); border-radius: 6px; margin: 36px 0 28px; }
        .timeline-fill { position: absolute; top: 0; left: 0; height: 100%; background: linear-gradient(90deg, var(--success) 0%, var(--accent) 60%, var(--danger) 100%); border-radius: 6px; transition: width 0.6s; }
        .timeline-marker { position: absolute; top: -6px; width: 24px; height: 24px; border-radius: 50%; background: var(--card); border: 3px solid var(--primary); transform: translateX(-50%); }
        .timeline-marker.today { background: var(--accent); border-color: var(--primary-dark); width: 28px; height: 28px; top: -8px; box-shadow: 0 2px 6px rgba(0,0,0,0.2); }
        .timeline-marker.expired { background: var(--danger); border-color: var(--primary-dark); }
        .timeline-marker-label { position: absolute; top: -34px; left: 50%; transform: translateX(-50%); font-size: 11px; font-weight: 700; color: var(--text); white-space: nowrap; font-family: var(--font-mono); background: var(--card); padding: 2px 6px; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .timeline-marker-date { position: absolute; top: 32px; left: 50%; transform: translateX(-50%); font-size: 10px; color: var(--text-muted); white-space: nowrap; font-family: var(--font-mono); }

        /* Milestone calendar grid */
        .milestone-grid { display: grid; grid-template-columns: 1fr; gap: 10px; margin-bottom: 22px; }
        @media (min-width: 600px) { .milestone-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 900px) { .milestone-grid { grid-template-columns: repeat(4, 1fr); } }
        .milestone-card { background: var(--card); border-radius: var(--radius); padding: 14px; border: 1px solid var(--border); border-left: 4px solid var(--primary); position: relative; }
        .milestone-card.passed { opacity: 0.6; border-left-color: var(--text-muted); }
        .milestone-card.active { border-left-color: var(--accent); background: #FFFBEB; }
        .milestone-card.future { border-left-color: var(--success); }
        .milestone-day { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .milestone-date { font-family: var(--font-mono); font-size: 13px; font-weight: 700; color: var(--primary-dark); margin-bottom: 6px; }
        .milestone-action { font-size: 12px; color: var(--text-secondary); line-height: 1.5; }
        .milestone-status { font-size: 10px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; margin-top: 6px; }
        .milestone-status.passed { color: var(--text-muted); }
        .milestone-status.active { color: var(--accent); }
        .milestone-status.future { color: var(--success); }

        .info-banner { padding: 14px 18px; border-radius: var(--radius); margin-bottom: 18px; font-size: 14px; line-height: 1.6; }
        .info-banner.success { background: #DCE8F5; color: #065F46; border-left: 4px solid var(--success); }
        .info-banner.warn { background: #FEF3C7; color: #92400E; border-left: 4px solid var(--accent); }
        .info-banner.info { background: #DBEAFE; color: #1E40AF; border-left: 4px solid var(--info); }
        .info-banner.danger { background: #FEE2E2; color: #991B1B; border-left: 4px solid var(--danger); }
        .basis-block { background: var(--card); border: 1px solid var(--border); border-radius: var(--radius); padding: 18px 20px; margin-bottom: 16px; }
        .basis-label { font-family: var(--font-mono); font-size: 11px; font-weight: 700; color: var(--accent); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .basis-text { font-size: 14px; color: var(--text-secondary); line-height: 1.7; }

        .ics-row { display: flex; gap: 12px; margin: 16px 0; }
        .btn-ics { flex: 1; padding: 12px 16px; background: var(--accent); color: var(--primary-dark); border: none; border-radius: var(--radius); font-family: var(--font-body); font-size: 14px; font-weight: 700; cursor: pointer; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); }
        .btn-ics:hover { background: var(--accent-light); }
        .btn-ics:disabled { background: var(--surface-alt); color: var(--text-muted); cursor: not-allowed; }
        .btn-ics .icon { display: inline-block; margin-right: 6px; }

        .breakdown-grid { display: grid; grid-template-columns: 1fr; gap: 12px; margin-bottom: 22px; }
        @media (min-width: 500px) { .breakdown-grid { grid-template-columns: 1fr 1fr; } }
        @media (min-width: 768px) { .breakdown-grid { grid-template-columns: repeat(3, 1fr); } }
        .breakdown-card { background: var(--surface); border-radius: var(--radius); padding: 14px; border: 1px solid var(--border); }
        .breakdown-card.highlight { background: var(--primary); border-color: var(--primary); }
        .breakdown-card.highlight .breakdown-label, .breakdown-card.highlight .breakdown-value, .breakdown-card.highlight .breakdown-sub { color: #fff; }
        .breakdown-card.highlight .breakdown-sub { color: rgba(255,255,255,0.8); }
        .breakdown-label { font-size: 11px; font-weight: 600; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 4px; }
        .breakdown-value { font-family: var(--font-mono); font-size: 16px; font-weight: 700; color: var(--primary-dark); line-height: 1.3; }
        .breakdown-sub { font-size: 11px; color: var(--text-muted); margin-top: 4px; line-height: 1.4; }

        .content-section { background: var(--card); border-radius: var(--radius-lg); padding: 32px; margin-bottom: 32px; border: 1px solid var(--border); }
        .content-section h2 { font-size: 26px; font-weight: 700; color: var(--primary-dark); margin-bottom: 16px; line-height: 1.3; }
        .content-section h3 { font-size: 18px; font-weight: 700; color: var(--primary); margin: 20px 0 10px; }
        .content-section p { font-size: 15px; color: var(--text-secondary); margin-bottom: 14px; line-height: 1.75; }
        .content-section ul, .content-section ol { margin: 12px 0 16px 22px; }
        .content-section li { font-size: 15px; color: var(--text-secondary); padding: 4px 0; line-height: 1.7; }
        .content-section a { color: var(--primary-light); text-decoration: underline; text-decoration-color: rgba(31,74,122,0.3); text-underline-offset: 2px; }
        .content-section a:hover { text-decoration-color: var(--primary-light); }
        .content-section strong { color: var(--text); font-weight: 600; }
        .rate-table { width: 100%; border-collapse: collapse; margin: 16px 0; font-size: 14px; }
        .rate-table thead th { background: var(--primary); color: #fff; padding: 12px 14px; text-align: left; font-weight: 600; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .rate-table thead th:first-child { border-radius: var(--radius) 0 0 0; }
        .rate-table thead th:last-child { border-radius: 0 var(--radius) 0 0; }
        .rate-table tbody td { padding: 12px 14px; border-bottom: 1px solid var(--border); color: var(--text-secondary); vertical-align: top; }
        .rate-table tbody tr:nth-child(even) { background: var(--surface); }
        .rate-table tbody td strong { color: var(--primary-dark); }
        .formula-box { background: var(--primary-dark); color: #E8EEF5; padding: 18px 22px; border-radius: var(--radius); font-family: var(--font-mono); font-size: 14px; line-height: 1.8; margin: 14px 0; overflow-x: auto; white-space: pre; }
        .formula-box .label { color: var(--accent-light); font-weight: 700; }
        .callout { background: #EFF6FF; border-left: 4px solid var(--info); border-radius: 0 var(--radius) var(--radius) 0; padding: 16px 20px; margin: 16px 0; }
        .callout p { color: #1E40AF; margin-bottom: 0; font-size: 14px; }
        .callout strong { color: #1E3A8A; }
        .callout.warn { background: #FFFBEB; border-left-color: var(--accent); }
        .callout.warn p { color: #92400E; }
        .callout.warn strong { color: #78350F; }
        .callout.danger { background: #FEF2F2; border-left-color: var(--danger); }
        .callout.danger p { color: #991B1B; }
        .callout.danger strong { color: #7F1D1D; }
        .faq-item { background: var(--surface); border-radius: var(--radius); margin-bottom: 10px; border: 1px solid var(--border); overflow: hidden; transition: box-shadow 0.2s; }
        .faq-item:hover { box-shadow: var(--shadow-sm); }
        .faq-question { display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 16px 20px; border: none; background: none; font-family: var(--font-body); font-size: 15px; font-weight: 600; color: var(--text); cursor: pointer; text-align: left; line-height: 1.4; gap: 12px; -webkit-tap-highlight-color: transparent; }
        .faq-question * { pointer-events: none; }
        .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; background: var(--primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: transform 0.3s; }
        .faq-item.open .faq-icon { transform: rotate(45deg); }
        .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
        .faq-item.open .faq-answer { max-height: 700px; }
        .faq-answer-inner { padding: 0 20px 16px; font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
        .sidebar-card { background: var(--card); border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); padding: 24px; margin-bottom: 24px; border: 1px solid var(--border); }
        .sidebar-card h3 { font-size: 16px; font-weight: 700; color: var(--primary-dark); margin-bottom: 14px; }
        .sidebar-link { display: block; padding: 10px 14px; border-radius: 8px; font-size: 14px; font-weight: 500; color: var(--text-secondary); text-decoration: none; transition: all 0.2s; margin-bottom: 4px; -webkit-tap-highlight-color: rgba(0,0,0,0.05); touch-action: manipulation; }
        .sidebar-link:hover { background: var(--surface-alt); color: var(--primary); }
        .sidebar-link .arrow { float: right; color: var(--text-muted); }
        .cta-card { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 28px 24px; margin-bottom: 24px; text-align: center; }
        .cta-card h3 { color: #fff; font-size: 18px; margin-bottom: 10px; }
        .cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin-bottom: 16px; line-height: 1.6; }
        .cta-btn { display: inline-block; padding: 12px 28px; background: var(--accent); color: #fff; font-weight: 700; font-size: 14px; border-radius: 8px; text-decoration: none; transition: background 0.2s; -webkit-tap-highlight-color: rgba(0,0,0,0.1); touch-action: manipulation; }
        .cta-btn:hover { background: var(--accent-light); }
        .body-cta { background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%); color: #fff; border-radius: var(--radius-lg); padding: 32px; margin: 28px 0; text-align: center; }
        .body-cta h3 { color: #fff; font-size: 22px; margin-bottom: 10px; }
        .body-cta p { font-size: 15px; color: rgba(255,255,255,0.9); margin-bottom: 20px; line-height: 1.65; }
        .office-strip { background: var(--primary-dark); text-align: center; padding: 20px; color: rgba(255,255,255,0.7); font-size: 14px; }
        .office-strip .offices { font-weight: 600; color: #fff; margin-bottom: 4px; }
        .office-strip .trust { color: var(--accent); font-weight: 600; }
        .footer { background: var(--primary-dark); border-top: 1px solid rgba(255,255,255,0.1); text-align: center; padding: 16px 20px; font-size: 13px; color: rgba(255,255,255,0.5); }
        .noscript-box { background: #FEE2E2; border: 2px solid #DC2626; border-radius: var(--radius); padding: 20px; text-align: center; color: #991B1B; font-weight: 600; margin-bottom: 20px; }
        @media (max-width: 767px) {
            .hero h1 { font-size: 26px; }
            .calc-card { padding: 20px; }
            .content-section { padding: 20px; }
            .toc-nav a { padding: 10px 12px; font-size: 12px; }
            .body-cta { padding: 24px 20px; }
            .body-cta h3 { font-size: 18px; }
            .rate-table { font-size: 12px; }
            .rate-table tbody td, .rate-table thead th { padding: 8px 10px; }
            .verdict-headline { font-size: 18px; }
            .days-mega { font-size: 44px; }
            .ics-row { flex-direction: column; }
        }
    
/* ===== Patron CTA system v1 (4 placements x 3 channels) ===== */
.brand-cta-bar{background:#FFEDD5;border-top:1px solid #FED7AA;border-bottom:1px solid #FED7AA;padding:14px 20px;}
.brand-cta-bar-inner{max-width:1200px;margin:0 auto;display:flex;align-items:center;gap:16px;flex-wrap:wrap;}
.brand-cta-bar-text{flex:1 1 320px;font-size:14px;color:var(--text);line-height:1.45;}
.brand-cta-bar-text strong{color:var(--text);font-weight:700;}
.brand-cta-bar-actions{display:flex;gap:10px;flex-wrap:wrap;}
.brand-cta-btn{display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:11px 18px;border-radius:8px;font-family:var(--font-body);font-size:14px;font-weight:700;text-decoration:none;border:0;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .2s ease;-webkit-tap-highlight-color:transparent;touch-action:manipulation;white-space:nowrap;line-height:1.2;min-height:44px;}
.brand-cta-btn:hover{transform:translateY(-1px);box-shadow:0 4px 12px rgba(0,0,0,.12);}
.brand-cta-btn:active{transform:translateY(0);}
.brand-cta-btn .ico{width:16px;height:16px;flex-shrink:0;}
.brand-cta-btn-call{background:var(--accent);color:#fff;}
.brand-cta-btn-call:hover{background:var(--accent-light);color:#fff;}
.brand-cta-btn-wa{background:#25D366;color:#fff;}
.brand-cta-btn-wa:hover{background:#1FB855;color:#fff;}
.brand-cta-btn-email{background:#fff;color:var(--text);border:1px solid #E5D6C5;}
.brand-cta-btn-email:hover{background:#FAFAF8;color:var(--text);}
.brand-cta-stack{display:flex;flex-direction:column;gap:8px;}
.brand-cta-stack .brand-cta-btn{width:100%;}
.body-cta .brand-cta-bar-actions{justify-content:center;margin-top:4px;}
.body-cta .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.body-cta .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.cta-card .brand-cta-btn-email{background:rgba(255,255,255,.95);border-color:rgba(255,255,255,.95);}
.cta-card .brand-cta-btn-email:hover{background:#fff;border-color:#fff;}
.post-result-cta{background:#FFF7ED;border:1px solid #FED7AA;border-left:4px solid var(--accent);border-radius:var(--radius);padding:18px 20px;margin:20px 0 4px;}
.post-result-cta-head{font-size:15px;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.4;}
.post-result-cta-sub{font-size:13px;color:var(--text-secondary);margin-bottom:14px;line-height:1.55;}
.post-result-cta .brand-cta-bar-actions{gap:8px;}
@media (max-width:767px){
 .brand-cta-bar{padding:12px 14px;}
 .brand-cta-bar-text{font-size:13px;flex-basis:100%;}
 .brand-cta-bar-actions{width:100%;gap:8px;}
 .brand-cta-bar .brand-cta-btn{flex:1 1 0;padding:10px 8px;font-size:12.5px;min-width:0;min-height:44px;}
 .brand-cta-bar .brand-cta-btn-call{flex:1 1 100%;}
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta{padding:16px;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
@media (min-width:768px) and (max-width:950px){
 .body-cta .brand-cta-bar-actions{flex-direction:column;}
 .body-cta .brand-cta-btn{width:100%;}
 .post-result-cta .brand-cta-bar-actions{flex-direction:column;}
 .post-result-cta .brand-cta-btn{width:100%;}
}
/* ===== A11y: focus-visible (WCAG 2.4.7) ===== */
.form-group input,.form-group select{outline:2px solid transparent;outline-offset:2px;}
.form-group input:focus-visible,.form-group select:focus-visible{outline:2px solid var(--accent);outline-offset:2px;}
a:focus-visible,button:focus-visible,.toggle-btn:focus-visible,.brand-cta-btn:focus-visible,.faq-question:focus-visible,.cta-btn:focus-visible{outline:2px solid var(--accent);outline-offset:2px;border-radius:4px;}
/* ===== Reduced motion (WCAG 2.3.3) ===== */
@media (prefers-reduced-motion:reduce){
 *,*::before,*::after{animation-duration:.001ms!important;animation-iteration-count:1!important;transition-duration:.001ms!important;scroll-behavior:auto!important;}
}
/* ===== Print stylesheet (working-paper output) ===== */
@media print{
 .toc-nav,.brand-cta-bar,.body-cta,.cta-card,.post-result-cta,.wa-sticky-bar,.sidebar-col,.faq-section{display:none!important;}
 body{background:#fff;color:#000;}
 a[href]::after{content:"";}
 .container,.main-col{max-width:100%!important;width:100%!important;}
}

</style>

@section('content')
<nav class="toc-nav" aria-label="Tool navigation">
    <div class="toc-nav-inner">
        <a href="#calculator">Calculator</a>
        <a href="#framework">LUT Framework</a>
        <a href="#filing">Filing Process</a>
        <a href="#consequences">Consequences</a>
        <a href="#case-law">Case Law</a>
        <a href="#faqs">FAQs</a>
    </div>
</nav>

<nav class="breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a><span>›</span>
    <a href="/tools/">Free Tools</a><span>›</span>
    LUT Expiry Reminder
</nav>

<header class="hero" id="calculator">
    <div class="hero-meta">
        <span class="badge-updated">Updated: 8 May 2026</span>
        <span class="author-byline">Reviewed by <strong>CA Sundram Gupta</strong> — Founder, Patron Accounting LLP</span>
    </div>
    <h1>LUT Expiry Reminder + <span>Renewal Calendar</span></h1>
</header>
<div class="brand-cta-bar" role="complementary" aria-label="Quick contact"><div class="brand-cta-bar-inner"><div class="brand-cta-bar-text">Need help picking? <strong>Talk to a CA in 30 seconds.</strong> Free consultation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20help%20with%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20Please%20connect%20me%20with%20a%20Chartered%20Accountant." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar%20%E2%80%94%20Query&body=Hi%20Patron%20Accounting%2C%0A%0AI%20need%20help%20with%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20Please%20get%20in%20touch.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div></div>


<aside class="tldr">
    <div class="tldr-label">TL;DR</div>
    <p>An <strong>LUT (Letter of Undertaking)</strong> filed in Form GST RFD-11 under Rule 96A allows GST-registered exporters to ship goods or services <strong>without paying IGST</strong>. The LUT is valid for one financial year only — it expires on <strong>31 March</strong>. A fresh LUT must be filed before the first export of the next FY. Failure means paying IGST on every export and claiming refund through RFD-01 — blocking working capital. This tool tracks your LUT expiry, generates a 4-milestone renewal calendar (90/60/30/0 days), and produces a <strong>downloadable .ics file</strong> for Google Calendar, Outlook, or Apple Calendar reminders.</p>
</aside>

<main class="main-layout">
    <div class="content-col">


        <div class="calc-card" id="tool">
            <h2>Track Your LUT Validity</h2>
            <p class="calc-intro">Select the financial year for which your LUT is filed. The tool computes expiry, days remaining, status, and generates a 4-milestone renewal calendar with downloadable .ics file for Google Calendar, Outlook, or Apple Calendar.</p>

            <noscript>
                <div class="noscript-box">JavaScript is required to use this tool. Please enable JavaScript in your browser.</div>
            </noscript>

            <div class="calc-section-title">LUT Details</div>

            <div class="calc-row">
                <div class="form-group">
                    <label for="financialYear">Financial Year of LUT</label>
                    <select id="financialYear">
                        <option value="">— Select FY —</option>
                        <option value="2024">FY 2024-25 (expires 31 Mar 2025)</option>
                        <option value="2025">FY 2025-26 (expires 31 Mar 2026)</option>
                        <option value="2026" selected>FY 2026-27 (expires 31 Mar 2027)</option>
                        <option value="2027">FY 2027-28 (expires 31 Mar 2028)</option>
                        <option value="2028">FY 2028-29 (expires 31 Mar 2029)</option>
                    </select>
                    <span class="helper">Each LUT is valid only for one FY ending 31 March.</span>
                </div>
                <div class="form-group">
                    <label for="filingDate">LUT Filing Date (optional)</label>
                    <input type="date" id="filingDate">
                    <span class="helper">Date you filed Form GST RFD-11 on the GST Portal. Used for record only.</span>
                </div>
            </div>

            <div class="calc-row" style="grid-template-columns: 1fr;">
                <div class="form-group">
                    <label for="businessName">Business Name (optional)</label>
                    <input type="text" id="businessName" placeholder="e.g. Acme Exports Pvt Ltd" maxlength="80">
                    <span class="helper">For personalisation in the calendar reminder file.</span>
                </div>
            </div>

            <button type="button" class="btn-calculate" id="btnCalc">Compute Expiry &amp; Generate Calendar</button>
            <button type="button" class="btn-reset" id="btnReset">Reset</button>

            <div class="result-section" id="resultSection" aria-live="polite">
                <div class="result-divider"></div>

                <div class="verdict-card safe" id="verdictCard">
                    <div class="verdict-label">LUT Validity Status</div>
                    <div class="verdict-headline" id="verdictHeadline">In-Time</div>
                    <div class="days-mega" id="daysVal">—<span class="days-mega-suffix">days</span></div>
                    <span class="verdict-pill safe" id="verdictPill">✓ Safe</span>
                </div>

                <div class="info-banner" id="advisoryBanner"></div>

                <div class="timeline">
                    <div class="timeline-title">FY Timeline (1 April → 31 March)</div>
                    <div class="timeline-track">
                        <div class="timeline-fill" id="timelineFill" style="width: 0%;"></div>
                        <div class="timeline-marker today" id="markerToday" style="left: 0%;">
                            <div class="timeline-marker-label" id="todayLabel">Today</div>
                            <div class="timeline-marker-date" id="todayDate"></div>
                        </div>
                    </div>
                </div>

                <div class="milestone-grid" id="milestoneGrid"></div>

                <div class="ics-row">
                    <button type="button" class="btn-ics" id="btnDownloadIcs"><span class="icon">📅</span>Download Calendar Reminders (.ics)</button>
                </div>

                <div class="breakdown-grid" id="breakdownGrid"></div>

                <div class="basis-block">
                    <div class="basis-label">Statutory Basis</div>
                    <div class="basis-text" id="basisText">—</div>
                </div>
            
<div class="post-result-cta" id="postResultCTA"><div class="post-result-cta-head">Want a CA to review this output before it goes into your file?</div><div class="post-result-cta-sub">Free 15-min review by a Chartered Accountant — LUT Expiry Reminder + Renewal Calendar validation, professional documentation, no obligation.</div><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20just%20used%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20Please%20review%20my%20output%20and%20advise%20on%20next%20steps." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar%20%E2%80%94%20Review%20Request&body=Hi%20Patron%20Accounting%2C%0A%0AI%20just%20used%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar%20and%20would%20like%20a%20CA%20to%20review%20the%20output.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>
</div>
        </div>

        <section class="content-section" id="framework">
            <h2>LUT Framework — Rule 96A &amp; Notification 37/2017</h2>

            <p>The Letter of Undertaking is a statutory mechanism that allows GST-registered exporters to make zero-rated supplies <em>without payment of integrated tax</em>. Filed in <a href="https://www.gst.gov.in" target="_blank" rel="noopener">Form GST RFD-11 on the GST Portal</a>, the LUT replaces the older bond-with-bank-guarantee mechanism for most exporters under <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> Notification 37/2017-Central Tax dated 4 October 2017.</p>

            <p>The legal architecture rests on three pillars: <strong>Section 16 of the IGST Act</strong> classifies exports and SEZ supplies as zero-rated, <strong>Rule 96A of the CGST Rules 2017</strong> prescribes the LUT/bond mechanism for exporters opting for the without-payment route, and <strong>Notification 37/2017</strong> liberalised LUT eligibility to most exporters. The LUT is the exporter's binding promise under the <a href="https://en.wikipedia.org/wiki/Goods_and_Services_Tax_(India)" target="_blank" rel="noopener">GST India</a> framework to fulfill export obligations within prescribed timelines and to pay IGST plus interest if the commitment fails.</p>

            <h3>Eligibility Criteria</h3>
            <p>Per Notification 37/2017, any registered person engaged in zero-rated supply is eligible to furnish an LUT — except those <strong>prosecuted for tax evasion of ₹2.5 crore or more</strong> under the CGST Act, IGST Act, or any earlier indirect tax law. The eligibility test is at the time of filing. The exporter declares eligibility in the LUT itself. Subsequent disqualification can lead to retroactive rejection of the LUT and recovery of IGST on past zero-rated exports.</p>

            <h3>Validity Period</h3>
            <p>The LUT is valid for <strong>one financial year only</strong>, expiring on 31 March of the relevant FY. An LUT filed on 30 September 2025 for FY 2025-26 expires on 31 March 2026. The validity does not auto-renew. A fresh LUT must be filed at the start of each new FY, ideally before the first export of 1 April. Practitioners commonly file the new FY LUT in March of the preceding year to ensure continuity. This is one of the most missed annual compliance items, especially for small exporters who may not realise the LUT is FY-bound.</p>

            <h3>Authorised Signatory</h3>
            <p>The LUT must be signed by an authorised signatory of the registered person. For companies and LLPs, this is typically the Managing Director, whole-time director, or Company Secretary using DSC. For partnerships, a working partner. For proprietorships, the proprietor. For other entities, a person duly authorised by the board or governing body through resolution. The signatory must be active on the GST Portal as authorised signatory at the time of filing.</p>

            <div class="callout warn">
                <p><strong>Witness requirement.</strong> Form GST RFD-11 requires details of two independent witnesses with name, address, and occupation. Witnesses are typically employees, professional advisors, or business associates. While not required to physically sign the online form, their details form part of the legal commitment. Maintain witness consent letters in your records.</p>
            </div>
        </section>

        <section class="content-section" id="filing">
            <h2>How to File Form GST RFD-11</h2>

            <h3>Step-by-Step Process</h3>
            <ol>
                <li>Log in to the <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> with your credentials</li>
                <li>Navigate to <strong>Services → User Services → Furnish Letter of Undertaking</strong></li>
                <li>Select the financial year for which the LUT is being filed</li>
                <li>Upload the previous year's LUT acknowledgment if any (system reference)</li>
                <li>Provide details of two independent witnesses — name, complete address, occupation</li>
                <li>Tick the three undertakings on the form (export within timeline, observe GST provisions, pay IGST with interest on failure)</li>
                <li>Sign using DSC for companies and LLPs, or EVC for proprietorships and individuals</li>
                <li>Submit the application — ARN is generated immediately</li>
                <li>Per Circular 40/14/2018-GST, the LUT is <strong>deemed approved on ARN generation</strong> — no manual approval typically required</li>
                <li>Download the RFD-11A acknowledgment for your records</li>
            </ol>

            <h3>Documents Needed</h3>
            <ul>
                <li>Previous year's LUT acknowledgment (if continuing)</li>
                <li>GST login credentials with valid DSC/EVC</li>
                <li>Witness 1 details — name, PAN-quality address, occupation</li>
                <li>Witness 2 details — name, PAN-quality address, occupation</li>
                <li>Authorised signatory details on GST Portal must be current</li>
            </ul>

            <h3>Auto-Approval Mechanism</h3>
            <p>The LUT was historically a manual-approval process. Following Circular 40/14/2018-GST dated 6 April 2018 (issued by <a href="https://www.cbic.gov.in" target="_blank" rel="noopener">CBIC</a> and noted in <a href="https://www.icai.org" target="_blank" rel="noopener">ICAI</a> guidance notes), the system was reformed to auto-approve LUT filings on ARN generation. The deemed approval is a system-generated order — no signature is needed. However, the deemed approval is conditional on subsequent eligibility verification by the proper officer. If post-filing the officer finds evidence of tax evasion prosecution above the ₹2.5 crore threshold, the LUT can be rejected ab initio with consequences for past exports. Exporters should confirm eligibility before filing rather than relying on auto-approval cushion.</p>

            <div class="callout">
                <p><strong>Filing window.</strong> Best practice is to file the new FY LUT in March of the preceding year — ideally by 25 March to allow buffer for portal issues. For FY 2026-27, file by 25 March 2026. The new LUT must be in place before the first export of 1 April. Many practitioners build a recurring March-end task in their compliance calendar.</p>
            </div>
        </section>

        <section class="content-section" id="consequences">
            <h2>Consequences of LUT Expiry or Failure</h2>

            <h3>What Happens if LUT Expires</h3>
            <p>If your LUT expires and you continue exports, the supply <strong>loses its zero-rated benefit</strong> under Rule 96A. You must pay full IGST on each export at the applicable rate (typically 18% for services, varies for goods). The IGST can be claimed back through Form GST RFD-01 under Section 54 of the CGST Act, but this:</p>
            <ul>
                <li>Blocks working capital for the refund processing period (typically 60 days minimum)</li>
                <li>Adds compliance burden — separate refund application per FY</li>
                <li>Risks departmental scrutiny on the period of non-compliance</li>
                <li>May trigger Section 73/74 demand notices for past LUT-less exports if not voluntarily remedied</li>
                <li>Damages relationship with overseas buyers due to invoice value changes</li>
            </ul>

            <h3>Failure to Export Within Rule 96A Timeline</h3>
            <p>Even with a valid LUT, the exporter must comply with strict export timelines:</p>

            <table class="rate-table">
                <thead>
                    <tr><th>Supply Type</th><th>Timeline</th><th>Trigger Date</th><th>Consequence of Failure</th></tr>
                </thead>
                <tbody>
                    <tr><td><strong>Goods</strong></td><td>3 months</td><td>Date of invoice</td><td>IGST + 18% interest from invoice date</td></tr>
                    <tr><td><strong>Services</strong></td><td>1 year (FE realisation)</td><td>Date of invoice</td><td>IGST + 18% interest from invoice date</td></tr>
                </tbody>
            </table>

            <p>Under Rule 96A(1), the Commissioner may extend these timelines on application supported by valid reasons. Common acceptable reasons include shipping delays, COVID-type disruptions, contractual force majeure, and overseas customer payment cycle issues. The extension must be applied for proactively — retroactive extensions are difficult to obtain.</p>

            <h3>Interest on Failed Export Commitment</h3>
            <p>Where the export commitment fails, the exporter must pay IGST plus interest at <strong>18% per annum</strong> from the date of invoice till the date of payment. The interest is non-condonable. The 18% rate is significantly higher than other GST interest rates (typically 18% for delayed payment per Section 50, but specific to LUT failure it operates as a recovery interest). Combined with the IGST liability, this can be a material business cost on a single failed export.</p>

            <div class="callout danger">
                <p><strong>Audit exposure.</strong> Departments routinely scan GSTR-1 export data against LUT records during audits. Any export between LUT expiry and re-filing date triggers automatic IGST liability flags. Use the calendar reminder feature to avoid this exposure.</p>
            </div>
        </section>

        <div class="body-cta">
            <h3>Need help filing your LUT or managing GST exports?</h3>
            <p>Patron's GST team handles LUT filings, RFD-01 refund applications, export documentation, BRC/FIRC reconciliation, and Section 56 interest claims. Pan-India support for goods and service exporters.</p><div class="brand-cta-bar-actions"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <section class="content-section" id="case-law">
            <h2>Key Case Law &amp; Departmental Guidance</h2>

            <h3>Position Confirmed by Indian Courts</h3>
            <p>While LUT is largely a procedural compliance, the substantive consequences of LUT failure (IGST recovery with 18 percent interest) have been consistently upheld by the <a href="https://main.sci.gov.in" target="_blank" rel="noopener">Supreme Court of India</a> in tax recovery jurisprudence such as Mafatlal Industries Ltd. The procedural deemed-approval and witness requirements have not been seriously challenged, and the operative framework remains the CBIC circulars described below.</p>

            <h3>Circular 40/14/2018-GST — Auto-Approval Reform</h3>
            <p>CBIC Circular 40/14/2018-GST dated 6 April 2018 reformed the LUT process by introducing automatic deemed approval on ARN generation. The reform addressed delays and discretionary rejection in the manual approval era. The circular clarified that the system-generated ARN itself constitutes acceptance of the LUT, and no separate manual order is required. However, the circular preserved the proper officer's right to subsequently verify eligibility and reject the LUT if disqualifying facts emerge. Practitioners rely on this circular for the deemed-approval position.</p>

            <h3>Circular 45/19/2018-GST — Non-GST and Exempt Goods</h3>
            <p>CBIC Circular 45/19/2018-GST dated 30 May 2018 clarified that LUT or bond is not required for export of non-GST goods (such as petroleum crude, motor spirit, high-speed diesel, natural gas, and aviation turbine fuel which are outside GST purview) or for exempted supplies that are zero-rated by other provisions. This narrowed the universe of supplies requiring LUT cover. Practitioners verifying LUT requirement should map the specific HSN against current GST coverage.</p>

            <h3>Circular 4/4/2017-GST — Original 12-Month Validity</h3>
            <p>The original Circular 4/4/2017 dated 7 July 2017 fixed LUT validity at 12 months. This was operationally aligned with financial year by Notification 37/2017 to expire on 31 March of the FY. The 12-month + FY-end alignment means an LUT filed on 30 September 2025 has only 6 months of utility before mandatory renewal. Practitioners often miss this short-cycle realisation, especially when first registering for export operations mid-year.</p>

            <h3>Practitioner Implications</h3>
            <ul>
                <li><strong>Build March-end LUT renewal task into compliance calendar.</strong> Treat it like financial year-end statutory tasks.</li>
                <li><strong>Verify eligibility before filing.</strong> Subsequent disqualification can void the LUT retroactively, exposing past exports to IGST liability.</li>
                <li><strong>Maintain witness consent letters.</strong> The two witnesses should sign supplementary consent confirming their role.</li>
                <li><strong>Track Rule 96A timelines per invoice.</strong> Build a tracker with invoice date, expected shipping/FE date, and 3-month/1-year cliff.</li>
                <li><strong>Apply for timeline extension proactively</strong> if export delays are anticipated. Retroactive extensions are difficult.</li>
                <li><strong>Reconcile export data quarterly</strong> against LUT validity to catch any misaligned exports early.</li>
                <li><strong>Don't rely solely on auto-approval.</strong> Subsequent verification by the proper officer can reverse the deemed approval if eligibility is questioned.</li>
            </ul>
        </section>

        <section class="content-section">
            <h2>Common Mistakes Exporters Make</h2>

            <h3>Forgetting to File New FY LUT</h3>
            <p>The single most common mistake — particularly for small exporters and first-time exporters — is forgetting that the LUT must be refiled annually. The previous year's LUT does not extend automatically. Exports made between 1 April and the new LUT filing date are technically without LUT cover and trigger IGST liability. The Patron LUT calendar tool is designed to prevent this through automated milestone reminders.</p>

            <h3>Filing LUT After First Export of FY</h3>
            <p>Even if the LUT is filed during the FY, exports made before the filing date are not retrospectively covered. Practitioners sometimes assume the LUT covers the entire FY uniformly — it does not. The LUT becomes operative only from its filing date. Exports between 1 April and filing date require IGST payment with subsequent refund through RFD-01.</p>

            <h3>Inadequate Witness Documentation</h3>
            <p>Witnesses are not just a formality. In disputes, the department may summon witnesses to confirm execution of the undertaking. Practitioners should obtain signed consent letters from witnesses, store witness PAN copies, and confirm witness availability before naming them in the LUT. Avoid using overseas-located witnesses or witnesses unrelated to the business.</p>

            <h3>Misjudging Rule 96A Timeline (RBI Master Direction Context)</h3>
            <p>For service exporters, the <a href="https://www.rbi.org.in" target="_blank" rel="noopener">Reserve Bank of India</a> Master Direction on Export of Goods and Services is the operative framework for what constitutes valid foreign-exchange receipt. INR receipts through Special Vostro Accounts of partner-country correspondent banks qualify; pure domestic INR does not. Misjudging this can defeat both LUT cover and refund eligibility.</p>
            <h3>Invoice-Date vs Shipping-Date Confusion</h3>
            <p>The 3-month timeline for goods export runs from invoice date, not shipping date. For complex export contracts where invoice precedes physical shipping by several weeks, this can cause unintended timeline pressure. Practitioners should align invoice timing with realistic export timeline and apply for extensions early where delays are anticipated. Similarly, the 1-year FE realisation timeline for services starts from invoice date, regardless of payment terms agreed with the client.</p>

            <h3>Ignoring Eligibility Threshold Changes</h3>
            <p>If the exporter is subsequently prosecuted for tax evasion of ₹2.5 crore or more, the LUT eligibility is lost — and the LUT can be revoked retroactively. Recent enforcement actions under CGST Sections 73/74 with criminal proceedings under Section 132 should trigger a fresh eligibility assessment. Practitioners advising on tax disputes should always consider impact on existing LUT status.</p>

            <h3>Using LUT Cover for Non-Eligible Supplies</h3>
            <p>The LUT covers exports and SEZ supplies under Section 16 IGST Act. It does not cover deemed exports under Section 147 (those follow a different refund mechanism with separate forms). Some exporters misclassify supplies and rely on LUT cover for transactions that needed deemed-export treatment. The mismatch surfaces during audits and can trigger IGST recovery.</p>

            <h3>Not Saving the RFD-11A Acknowledgment</h3>
            <p>The system-generated RFD-11A acknowledgment is the primary evidence of LUT filing. Some practitioners forget to download and archive it. During audits or refund verifications, the acknowledgment is the first document requested. Always download the RFD-11A immediately after filing and archive in the export compliance file.</p>
        </section>

    </div>

    <aside class="sidebar-col">

        <div class="cta-card">
            <h3>LUT Filing &amp; Renewal</h3>
            <p>Patron handles LUT filing, witness coordination, eligibility verification, and ARN tracking — fixed-fee, CA-signed.</p><div class="brand-cta-stack"><a href="tel:+919459456700" class="brand-cta-btn brand-cta-btn-call" aria-label="Call Patron Accounting at +91 945 945 6700"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>+91 945 945 6700</a><a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20found%20you%20through%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%20Please%20connect%20me%20with%20a%20CA." class="brand-cta-btn brand-cta-btn-wa" aria-label="Chat with us on WhatsApp" rel="noopener"><svg class="ico" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0 0 20.464 3.488"/></svg>WhatsApp</a><a href="mailto:sales@patronaccounting.com?subject=LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar%20%E2%80%94%20Consultation&body=Hi%20Patron%20Accounting%2C%0A%0AI%20found%20you%20through%20the%20LUT%20Expiry%20Reminder%20%2B%20Renewal%20Calendar.%20I%20need%20help%20with%20GST%20refund%20filing%2C%20RFD-01%20preparation%2C%20LUT%2Fexport%20refunds%20and%20departmental%20follow-up.%0A%0AThanks." class="brand-cta-btn brand-cta-btn-email" aria-label="Email Patron Accounting"><svg class="ico" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>Email</a></div></div>

        <div class="sidebar-card">
            <h3>Related Services</h3>
            <a href="/lut-filing" class="sidebar-link">LUT Filing Service<span class="arrow">→</span></a>
            <a href="/gst-refund" class="sidebar-link">GST Refund Services<span class="arrow">→</span></a>
            <a href="/gst-registration" class="sidebar-link">GST Registration<span class="arrow">→</span></a>
            <a href="/gst-return-filing" class="sidebar-link">GST Return Filing<span class="arrow">→</span></a>
            <a href="/gst-audit" class="sidebar-link">GST Audit<span class="arrow">→</span></a>
            <a href="/iec-code-registration" class="sidebar-link">IEC Code Registration<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>Related Tools</h3>
            <a href="/tools/gst-refund-eligibility-checker" class="sidebar-link">GST Refund Eligibility<span class="arrow">→</span></a>
            <a href="/tools/gst-refund-time-bar-calculator" class="sidebar-link">GST Refund Time-Bar (S.54)<span class="arrow">→</span></a>
            <a href="/tools/gst-refund-interest-calculator" class="sidebar-link">GST Refund Interest (S.56)<span class="arrow">→</span></a>
            <a href="/tools/gst-late-fee-calculator" class="sidebar-link">GST Late Fee Calculator<span class="arrow">→</span></a>
            <a href="/tools/gst-interest-calculator" class="sidebar-link">GST Interest Calculator<span class="arrow">→</span></a>
            <a href="/tools/itc-eligibility-calculator" class="sidebar-link">ITC Eligibility Calculator<span class="arrow">→</span></a>
        </div>

        <div class="sidebar-card">
            <h3>From the Blog</h3>
            <a href="/blog/letter-of-undertaking-lut-gst" class="sidebar-link">LUT under GST Guide<span class="arrow">→</span></a>
            <a href="/blog/zero-rated-supplies-under-gst" class="sidebar-link">Zero-Rated Supplies<span class="arrow">→</span></a>
            <a href="/blog/gst-refund-process-and-procedure" class="sidebar-link">GST Refund Process<span class="arrow">→</span></a>
            <a href="/blog/export-of-services-gst" class="sidebar-link">Export of Services GST<span class="arrow">→</span></a>
        </div>

    </aside>
</main>

<section class="content-section" id="faqs" style="max-width:1200px;margin:0 auto 40px;">
    <h2>Frequently Asked Questions</h2>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is a Letter of Undertaking under GST?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">A Letter of Undertaking under Rule 96A of the CGST Rules 2017 is a document filed in Form GST RFD-11 by a registered exporter who wishes to export goods or services without payment of integrated tax. The LUT is the exporter's commitment to fulfill export obligations within the prescribed timelines and to pay IGST with 18 percent interest if the commitment fails. It replaced the older bond-with-bank-guarantee mechanism for most exporters under Notification 37/2017-Central Tax dated 4 October 2017.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How long is an LUT valid?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">An LUT is valid for one financial year only, expiring on 31 March of the relevant FY. For example, an LUT filed in October 2025 for FY 2025-26 is valid till 31 March 2026. A fresh LUT must be filed before the first export of the next financial year. The LUT does not auto-renew. Practitioners typically file the new FY LUT in March before financial year-end to ensure continuity. Filing late means paying IGST on intervening exports and claiming refund.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Who is eligible to furnish an LUT?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Per Notification 37/2017-Central Tax, any registered person engaged in zero-rated supply (export of goods or services, or supplies to SEZ units or developers) is eligible to furnish an LUT — except those prosecuted for tax evasion of two and a half crore rupees or more under the CGST Act, IGST Act, or any earlier indirect tax law. Eligibility test is at the time of filing. The exporter declares eligibility in the LUT itself. Subsequent disqualification can lead to retroactive rejection.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What happens if my LUT expires?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">If your LUT expires and you continue exports, the supply loses its zero-rated benefit under Rule 96A. You must pay full IGST on each export and claim refund subsequently through Form GST RFD-01 under Section 54. This blocks working capital, adds compliance burden, and risks departmental scrutiny on the period of non-compliance. The department may also issue notices under Section 73 or 74 demanding IGST plus 18 percent interest on past LUT-less exports if not voluntarily remedied.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">How do I file Form GST RFD-11?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Log in to the GST Portal, navigate to Services then User Services then Furnish Letter of Undertaking. Select the financial year for which the LUT applies. Upload the previous year's LUT acknowledgment if any. Provide details of two witnesses with PAN, address, and occupation. Sign using DSC for companies and LLPs or EVC for proprietorships and individuals. Submit the application. The ARN is generated immediately and per Circular 40/14/2018-GST the LUT is deemed approved on ARN generation.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">When should I file the LUT for the new financial year?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Best practice is to file the new FY LUT in March before financial year-end, ideally by 25 March to allow buffer for portal issues. The new LUT must be in place before the first export of the new FY (1 April onwards). Many practitioners build a recurring March-end task in their compliance calendar. Filing post 31 March means any export between 1 April and the LUT filing date triggers IGST liability.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What are the export timelines under Rule 96A?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Rule 96A imposes strict timelines on LUT-covered exports. Goods must be exported within three months from the date of invoice; if not, IGST plus 18 percent interest becomes payable from invoice date. For services, foreign exchange must be received within one year from invoice date. The Commissioner may extend these timelines on application. Failure to export within timeline triggers Rule 96A(1) consequence — IGST recovery with interest. Documentation of timelines is essential during audits and refund verification.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Does LUT cover all types of zero-rated supplies?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">LUT covers two zero-rated categories under Section 16 IGST Act: export of goods or services outside India, and supplies to SEZ units or developers for authorised operations. The LUT does not cover deemed exports under Section 147 — those follow a different refund mechanism. Per Circular 45/19/2018-GST, LUT or bond is not required for export of non-GST goods or exempted supplies that are zero-rated by other provisions. Verify the specific category before relying on LUT cover.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I download a calendar reminder for LUT renewal?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. The Patron LUT Expiry Reminder tool generates an ICS calendar file that can be downloaded and imported into Google Calendar, Apple Calendar, Microsoft Outlook, or any standard calendar application. The ICS file contains four reminder events at 90, 60, and 30 days before expiry, plus a final reminder on 1 April for the new FY filing. Each event includes context on the action required and a link back to the GST Portal LUT filing page for one-click access.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Who must sign the LUT?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">The LUT must be signed by an authorised signatory of the registered person. For companies, this is typically the Managing Director, whole-time director, or Company Secretary. For LLPs and partnerships, a working partner. For proprietorships, the proprietor. For other entities, a person duly authorised by the board or governing body through resolution. The signatory must be active on the GST Portal as authorised signatory at the time of filing. DSC is mandatory for companies and LLPs.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">What is the witness requirement?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Form GST RFD-11 requires details of two independent witnesses. For each witness, the LUT must capture the name, address, and occupation. Witnesses are typically employees, professional advisors, or business associates of the exporter. They are not required to physically sign the online form, but their details are part of the legal commitment. In case of dispute, witnesses may be summoned to confirm the existence and execution of the undertaking. Maintain witness consent letters in your records.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Can I file LUT mid-year if I missed the financial-year filing?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes. An LUT can be filed at any time during the financial year. However, exports made before the LUT filing date are not covered — IGST becomes payable on those exports with refund claim subsequently. The LUT becomes operative from its filing date and remains valid till 31 March of the same FY. Practitioners advise filing the LUT as the very first compliance step when starting export operations during the year. Waiting damages working capital.</div></div>
    </div>

    <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Is the LUT auto-approved?<span class="faq-icon">+</span></button>
        <div class="faq-answer"><div class="faq-answer-inner">Yes, under Circular 40/14/2018-GST dated 6 April 2018, an LUT is automatically deemed approved on generation of the Application Reference Number. No separate manual approval is required. The system generates a deemed approval order with RFD-11A acknowledgment. However, this deemed approval is subject to subsequent verification of eligibility — if the proper officer later finds the exporter ineligible (such as evidence of tax evasion prosecution above the threshold), the LUT can be rejected retroactively from filing date.</div></div>
    </div>
</section>

<div class="office-strip">
    <div class="offices">Pune | Mumbai | Delhi | Gurugram</div>
    <div class="trust">25,000+ Businesses Trust Us</div>
</div>

<footer class="footer">
    © 2026 Patron Accounting LLP. All rights reserved.
</footer>

<script>
(function(){
    'use strict';

    function fmtDate(d) {
        if (!d) return '—';
        return d.toLocaleDateString('en-IN', {day: '2-digit', month: 'short', year: 'numeric'});
    }
    function fmtDateShort(d) {
        return d.toLocaleDateString('en-IN', {day: '2-digit', month: 'short'});
    }
    function daysBetween(d1, d2) {
        const ms = d2.getTime() - d1.getTime();
        return Math.round(ms / (1000 * 60 * 60 * 24));
    }
    function addDays(d, n) {
        const r = new Date(d);
        r.setDate(r.getDate() + n);
        return r;
    }
    function today() {
        const d = new Date();
        d.setHours(0, 0, 0, 0);
        return d;
    }
    function fmtNum(n) {
        return n.toLocaleString('en-IN');
    }
    function pad(n) {
        return n < 10 ? '0' + n : '' + n;
    }
    function toIcsDate(d) {
        return d.getUTCFullYear() + pad(d.getUTCMonth() + 1) + pad(d.getUTCDate()) + 'T' +
               pad(d.getUTCHours()) + pad(d.getUTCMinutes()) + pad(d.getUTCSeconds()) + 'Z';
    }
    function toIcsDateLocal(y, m, day) {
        return y + pad(m) + pad(day);
    }

    let currentResult = null;

    function compute() {
        const fyStart = parseInt(document.getElementById('financialYear').value);
        if (!fyStart) { alert('Please select the Financial Year for which the LUT is filed.'); return; }

        const fyEnd = fyStart + 1;
        const startDate = new Date(fyStart, 3, 1);  // 1 April of FY start
        const expiryDate = new Date(fyEnd, 2, 31);  // 31 March of FY end
        const newFyStart = new Date(fyEnd, 3, 1);   // 1 April of next FY
        const tdy = today();

        const filingDate = document.getElementById('filingDate').value ? new Date(document.getElementById('filingDate').value + 'T00:00:00') : null;
        const businessName = (document.getElementById('businessName').value || '').trim();

        const daysToExpiry = daysBetween(tdy, expiryDate);
        const fyDuration = daysBetween(startDate, expiryDate);
        const daysElapsed = daysBetween(startDate, tdy);

        let status, headline;
        if (daysToExpiry < 0) {
            status = 'expired';
            headline = 'EXPIRED — File New LUT Immediately';
        } else if (daysToExpiry <= 30) {
            status = 'urgent';
            headline = 'URGENT — File New LUT This Month';
        } else if (daysToExpiry <= 60) {
            status = 'due';
            headline = 'Renewal Due — File Before 31 March';
        } else if (daysToExpiry <= 90) {
            status = 'attention';
            headline = 'Plan Renewal — Begin Documentation';
        } else {
            status = 'safe';
            headline = 'In-Time — LUT Active';
        }

        // Milestones: 90, 60, 30 days before expiry, plus 1 April new FY
        const milestones = [
            {
                label: 'T-90', daysBeforeExpiry: 90, date: addDays(expiryDate, -90),
                action: 'Begin gathering documents — verify witness details, confirm DSC validity, pull previous LUT acknowledgment.'
            },
            {
                label: 'T-60', daysBeforeExpiry: 60, date: addDays(expiryDate, -60),
                action: 'Renewal filing window opens — schedule the LUT filing slot, draft witness consent letters.'
            },
            {
                label: 'T-30', daysBeforeExpiry: 30, date: addDays(expiryDate, -30),
                action: 'URGENT — file Form GST RFD-11 on the GST Portal. Reserve buffer for any portal issues or DSC errors.'
            },
            {
                label: 'NEW FY', daysBeforeExpiry: -1, date: newFyStart,
                action: 'New FY begins. Confirm fresh LUT for FY ' + fyEnd + '-' + ((fyEnd + 1) % 100) + ' is in place before first export.'
            }
        ];

        // Tag each milestone with its status relative to today
        milestones.forEach(function(m) {
            const diff = daysBetween(tdy, m.date);
            if (diff < 0) m.timeStatus = 'passed';
            else if (diff <= 14) m.timeStatus = 'active';
            else m.timeStatus = 'future';
            m.daysFromToday = diff;
        });

        currentResult = {
            fyStart, fyEnd, startDate, expiryDate, newFyStart,
            today: tdy, filingDate, businessName,
            daysToExpiry, fyDuration, daysElapsed,
            status, headline, milestones
        };

        renderResult();
    }

    function renderResult() {
        const r = currentResult;

        // Verdict card
        const card = document.getElementById('verdictCard');
        card.className = 'verdict-card ' + r.status;
        document.getElementById('verdictHeadline').textContent = r.headline;

        const daysVal = document.getElementById('daysVal');
        if (r.daysToExpiry < 0) {
            daysVal.innerHTML = Math.abs(r.daysToExpiry) + '<span class="days-mega-suffix">days expired</span>';
        } else {
            daysVal.innerHTML = fmtNum(r.daysToExpiry) + '<span class="days-mega-suffix">days remaining</span>';
        }

        const pill = document.getElementById('verdictPill');
        pill.className = 'verdict-pill ' + r.status;
        const pillText = {safe: '✓ Safe', attention: '⚠ Plan Ahead', due: '⏰ Renewal Due', urgent: '⏰ Urgent', expired: '✗ Expired'};
        pill.textContent = pillText[r.status];

        // Advisory
        const adv = document.getElementById('advisoryBanner');
        if (r.status === 'expired') {
            adv.className = 'info-banner danger';
            adv.innerHTML = '<strong>LUT expired ' + Math.abs(r.daysToExpiry) + ' days ago.</strong> Any exports made after expiry require IGST payment with subsequent refund through RFD-01. File the new FY LUT immediately and address any uncovered exports through Section 73 voluntary payment if applicable.';
        } else if (r.status === 'urgent') {
            adv.className = 'info-banner warn';
            adv.innerHTML = '<strong>File without delay.</strong> Only ' + r.daysToExpiry + ' days remain. File the new FY LUT this week to avoid risking exports without LUT cover after 31 March. Reserve buffer for portal issues.';
        } else if (r.status === 'due') {
            adv.className = 'info-banner warn';
            adv.innerHTML = '<strong>Begin renewal process.</strong> ' + r.daysToExpiry + ' days remain. Coordinate witness details, confirm DSC, and target LUT filing within the next 30 days for safety.';
        } else if (r.status === 'attention') {
            adv.className = 'info-banner info';
            adv.innerHTML = '<strong>Plan renewal preparation.</strong> ' + r.daysToExpiry + ' days remain. Start gathering witness documentation and confirm authorised signatory details on GST Portal.';
        } else {
            adv.className = 'info-banner success';
            adv.innerHTML = '<strong>Comfortable cushion.</strong> ' + r.daysToExpiry + ' days remain. Consider downloading the calendar reminder file below to ensure timely renewal.';
        }

        // Timeline
        const fillPct = Math.min(100, Math.max(0, (r.daysElapsed / r.fyDuration) * 100));
        document.getElementById('timelineFill').style.width = fillPct + '%';
        document.getElementById('markerToday').style.left = fillPct + '%';
        const todayLbl = r.daysToExpiry < 0 ? 'Expired' : 'Today';
        document.getElementById('todayLabel').textContent = todayLbl;
        document.getElementById('todayDate').textContent = fmtDateShort(r.today);
        if (r.status === 'expired') {
            document.getElementById('markerToday').classList.add('expired');
        } else {
            document.getElementById('markerToday').classList.remove('expired');
        }

        // Milestones
        const grid = document.getElementById('milestoneGrid');
        grid.innerHTML = '';
        r.milestones.forEach(function(m) {
            const card = document.createElement('div');
            card.className = 'milestone-card ' + m.timeStatus;
            const statusLabel = m.timeStatus === 'passed' ? 'Passed' : m.timeStatus === 'active' ? 'Active Now' : 'Upcoming';
            card.innerHTML = '<div class="milestone-day">' + m.label + (m.daysBeforeExpiry > 0 ? ' (' + m.daysBeforeExpiry + ' days before expiry)' : '') + '</div>' +
                             '<div class="milestone-date">' + fmtDate(m.date) + '</div>' +
                             '<div class="milestone-action">' + m.action + '</div>' +
                             '<div class="milestone-status ' + m.timeStatus + '">' + statusLabel + '</div>';
            grid.appendChild(card);
        });

        // Breakdown grid
        const bg = document.getElementById('breakdownGrid');
        bg.innerHTML = '';
        const items = [
            {label: 'Financial Year', value: 'FY ' + r.fyStart + '-' + ((r.fyEnd) % 100), sub: '1 Apr ' + r.fyStart + ' to 31 Mar ' + r.fyEnd, highlight: false},
            {label: 'LUT Expiry Date', value: fmtDate(r.expiryDate), sub: 'Always 31 March of FY', highlight: true},
            {label: r.daysToExpiry >= 0 ? 'Days Until Expiry' : 'Days Past Expiry', value: fmtNum(Math.abs(r.daysToExpiry)) + ' days', sub: 'From ' + fmtDate(r.today), highlight: false}
        ];
        items.forEach(function(it) {
            const c = document.createElement('div');
            c.className = 'breakdown-card' + (it.highlight ? ' highlight' : '');
            c.innerHTML = '<div class="breakdown-label">' + it.label + '</div><div class="breakdown-value">' + it.value + '</div><div class="breakdown-sub">' + it.sub + '</div>';
            bg.appendChild(c);
        });

        // Basis
        let basis = '<strong>LUT for FY ' + r.fyStart + '-' + (r.fyEnd % 100) + ':</strong> Form GST RFD-11 under Rule 96A of CGST Rules 2017 read with Notification 37/2017-Central Tax dated 4 October 2017.';
        basis += '<br><strong>Validity:</strong> 1 April ' + r.fyStart + ' to 31 March ' + r.fyEnd + ' (one financial year).';
        if (r.filingDate) {
            basis += '<br><strong>Your filing date:</strong> ' + fmtDate(r.filingDate) + ' — exports between 1 April ' + r.fyStart + ' and your filing date are not covered by LUT.';
        }
        basis += '<br><strong>Days to expiry:</strong> ';
        if (r.daysToExpiry >= 0) {
            basis += fmtNum(r.daysToExpiry) + ' days from today (' + fmtDate(r.today) + ').';
        } else {
            basis += 'Expired ' + fmtNum(Math.abs(r.daysToExpiry)) + ' days ago.';
        }
        basis += '<br><br><strong>Auto-approval:</strong> Per Circular 40/14/2018-GST, the LUT is deemed approved on ARN generation. File via <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> → Services → User Services → Furnish Letter of Undertaking.';
        document.getElementById('basisText').innerHTML = basis;

        const section = document.getElementById('resultSection');
        section.classList.add('visible');
        requestAnimationFrame(function(){requestAnimationFrame(function(){section.scrollIntoView({behavior:'smooth',block:'start'});});});
    }

    function downloadIcs() {
        if (!currentResult) { alert('Please compute first.'); return; }
        const r = currentResult;
        const businessName = r.businessName || 'My Business';
        const fyLabel = 'FY ' + r.fyStart + '-' + (r.fyEnd % 100);
        const nextFyLabel = 'FY ' + r.fyEnd + '-' + ((r.fyEnd + 1) % 100);

        const events = r.milestones.map(function(m, i) {
            let title, desc;
            if (m.label === 'NEW FY') {
                title = 'GST LUT Filing Due — ' + nextFyLabel + ' (' + businessName + ')';
                desc = 'New financial year begins. Confirm Form GST RFD-11 for ' + nextFyLabel + ' is filed and ARN downloaded BEFORE first export. Filing URL: https://www.gst.gov.in (Services > User Services > Furnish Letter of Undertaking). Tool: /tools/lut-expiry-reminder';
            } else {
                title = 'LUT Renewal ' + m.label + ' — ' + fyLabel + ' (' + businessName + ')';
                desc = m.action + ' GST Portal: https://www.gst.gov.in (Services > User Services > Furnish Letter of Undertaking). Tool: /tools/lut-expiry-reminder';
            }
            const dateStr = toIcsDateLocal(m.date.getFullYear(), m.date.getMonth() + 1, m.date.getDate());
            const endDateStr = toIcsDateLocal(m.date.getFullYear(), m.date.getMonth() + 1, m.date.getDate() + 1);
            return [
                'BEGIN:VEVENT',
                'UID:lut-reminder-' + r.fyStart + '-' + i + '@patronaccounting.com',
                'DTSTAMP:' + toIcsDate(new Date()),
                'DTSTART;VALUE=DATE:' + dateStr,
                'DTEND;VALUE=DATE:' + endDateStr,
                'SUMMARY:' + title,
                'DESCRIPTION:' + desc.replace(/\n/g, '\\n'),
                'BEGIN:VALARM',
                'TRIGGER:-PT9H',
                'ACTION:DISPLAY',
                'DESCRIPTION:' + title,
                'END:VALARM',
                'END:VEVENT'
            ].join('\r\n');
        });

        const ics = [
            'BEGIN:VCALENDAR',
            'VERSION:2.0',
            'PRODID:-//Patron Accounting//LUT Expiry Reminder//EN',
            'CALSCALE:GREGORIAN',
            'METHOD:PUBLISH',
            'X-WR-CALNAME:LUT Renewal — ' + fyLabel,
            'X-WR-TIMEZONE:Asia/Kolkata'
        ].concat(events).concat(['END:VCALENDAR']).join('\r\n');

        const blob = new Blob([ics], {type: 'text/calendar;charset=utf-8'});
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'lut-renewal-' + fyLabel.replace(/\s/g, '-').toLowerCase() + '.ics';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    }

    document.getElementById('btnCalc').addEventListener('click', compute);
    document.getElementById('btnReset').addEventListener('click', function() {
        document.getElementById('financialYear').value = '2026';
        document.getElementById('filingDate').value = '';
        document.getElementById('businessName').value = '';
        document.getElementById('resultSection').classList.remove('visible');
        currentResult = null;
    });
    document.getElementById('btnDownloadIcs').addEventListener('click', downloadIcs);

    document.querySelectorAll('input').forEach(function(el) {
        el.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                document.getElementById('btnCalc').click();
            }
        });
    });

    document.querySelectorAll('.faq-question').forEach(function(q) {
        q.addEventListener('click', function() {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            item.classList.toggle('open');
            q.setAttribute('aria-expanded', !isOpen ? 'true' : 'false');
        });
    });

    const sections = document.querySelectorAll('section[id], header[id]');
    const tocLinks = document.querySelectorAll('.toc-nav a');
    function updateActive() {
        const scrollPos = window.scrollY + 80;
        let active = '';
        sections.forEach(function(s) { if (s.offsetTop <= scrollPos) active = s.id; });
        tocLinks.forEach(function(l) { l.classList.toggle('active', l.getAttribute('href') === '#' + active); });
    }
    window.addEventListener('scroll', updateActive, {passive: true});
    updateActive();
})();
</script>


<style>
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
</style>

<!-- STICKY WHATSAPP BAR -->
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>AY 2026&ndash;27 ITR filing is live</strong> &mdash; get your taxes filed accurately by CAs.</span>
        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20would%20like%20to%20file%20my%20Income%20Tax%20Return%20for%20AY%202026-27%20with%20a%20qualified%20CA.%20Please%20share%20the%20process%2C%20documents%20required%2C%20and%20fees." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>CA-Assisted ITR Filing Open &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div>

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
