<!--
╔══════════════════════════════════════════════════════════════════════════════╗
║                PATRON ACCOUNTING - CUSTOM 410 (GONE) PAGE                    ║
║                Purpose: Shown when a discontinued service URL is requested   ║
║                Design tokens: synced with Master Service Page Template v2.0  ║
║                Fonts: Barlow + DM Sans | Colors: #E8712C orange, #1B365D blue║
║                                                                              ║
║                URL SOURCE OF TRUTH:                                          ║
║                  HTML_URL_recon (xlsx) - India (National) Pages sheet        ║
║                  All 27 services are "Live" status, filters cleared          ║
║                  Includes 19 starred services + 8 key non-starred            ║
║                  (Drug License removed - service discontinued)               ║
║                                                                              ║
║                CONTACT (pulled from live patronaccounting.com):              ║
║                  Phone / WhatsApp : +91 945 945 6700 (9459456700)            ║
║                  Email            : sales@patronaccounting.com                ║
╚══════════════════════════════════════════════════════════════════════════════╝
-->

@extends('layouts.app')

<!-- External Dependencies (loaded by master layout in production; safe for preview) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Service No Longer Available | Patron Accounting</title>
    <meta name="description" content="This service has been discontinued by Patron Accounting. Browse our current CA, CS, tax, GST, company registration and audit services in India.">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="Status" content="410 Gone">
    <link rel="canonical" href="/gone">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Service No Longer Available | Patron Accounting">
    <meta property="og:description" content="This service has been discontinued. Explore our current CA, CS, tax, GST, company registration and audit services in India.">
    <meta property="og:url" content="/gone">
    <meta property="og:site_name" content="Patron Accounting">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Service No Longer Available | Patron Accounting">
    <meta name="twitter:description" content="This service has been discontinued. Explore our current services at patronaccounting.com.">
@endsection

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "/gone#webpage",
  "url": "/gone",
  "name": "Service No Longer Available - Patron Accounting",
  "description": "This service has been discontinued by Patron Accounting. Explore our current services below.",
  "inLanguage": "en-IN",
  "isPartOf": {
    "@type": "WebSite",
    "@id": "/#website",
    "url": "/",
    "name": "Patron Accounting"
  },
  "publisher": {
    "@type": "ProfessionalService",
    "@id": "/#organization",
    "name": "Patron Accounting LLP",
    "url": "/",
    "telephone": "+91-9459456700",
    "email": "sales@patronaccounting.com"
  },
  "author": {
    "@id": "/#team",
    "@type": "Organization",
    "name": "CA and CS Team, Patron Accounting LLP"
  },
  "significantLink": [
    "/gst-registration",
    "/private-limited-company-registration",
    "/llp-incorporation",
    "/trademark-registration",
    "/income-tax-return",
    "/gst-returns",
    "/startup-registration",
    "/udyam-registration",
    "/iec-registration",
    "/fssai-registration",
    "/zoho-books-accounting",
    "/payroll-services",
    "/internal-audit",
    "/tax-audit"
  ],
  "mainContentOfPage": {
    "@type": "WebPageElement",
    "cssSelector": ".pa-gone-main"
  }
}
</script>
@endsection

@section('content')

<style>
    /* ============================================
       PATRON ACCOUNTING - 410 PAGE STYLES
       (isolated under .pa-gone-* prefix to avoid
        global CSS collisions with layouts.master)
       ============================================ */
    .pa-gone-main {
        --pa-orange: #E8712C;
        --pa-orange-dark: #D4621F;
        --pa-orange-light: #FEF4EE;
        --pa-orange-lighter: #FFF9F5;
        --pa-blue: #1B365D;
        --pa-blue-light: #2A4A7A;
        --pa-blue-lighter: #F4F7FB;
        --pa-white: #FFFFFF;
        --pa-cream: #FDFCFB;
        --pa-gray-50: #F9FAFB;
        --pa-gray-100: #F3F4F6;
        --pa-gray-200: #E5E7EB;
        --pa-gray-300: #D1D5DB;
        --pa-gray-500: #6B7280;
        --pa-gray-600: #4B5563;
        --pa-text-primary: #1F2937;
        --pa-text-secondary: #4B5563;
        --pa-text-muted: #6B7280;
        --pa-green: #10B981;
        --pa-red: #DC2626;
        --pa-red-light: #FEE2E2;
        --pa-shadow-sm: 0 1px 2px rgba(0,0,0,0.04);
        --pa-shadow-md: 0 4px 12px rgba(0,0,0,0.06);
        --pa-shadow-lg: 0 12px 32px rgba(0,0,0,0.08);

        font-family: 'Barlow', -apple-system, BlinkMacSystemFont, sans-serif;
        color: var(--pa-text-primary);
        background: var(--pa-white);
        line-height: 1.6;
    }
    .pa-gone-main * { box-sizing: border-box; }

    /* -------- Hero / 410 Message -------- */
    .pa-gone-hero {
        background: linear-gradient(135deg, #FFF9F5 0%, #F4F7FB 100%);
        padding: 80px 0 72px;
        position: relative;
        overflow: hidden;
    }
    .pa-gone-hero::before {
        content: '';
        position: absolute;
        top: -120px; right: -120px;
        width: 340px; height: 340px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(232,113,44,0.10) 0%, transparent 70%);
        pointer-events: none;
    }
    .pa-gone-hero::after {
        content: '';
        position: absolute;
        bottom: -160px; left: -100px;
        width: 400px; height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(27,54,93,0.08) 0%, transparent 70%);
        pointer-events: none;
    }
    .pa-gone-hero-inner {
        position: relative;
        z-index: 2;
        max-width: 820px;
        margin: 0 auto;
        text-align: center;
        padding: 0 20px;
    }
    .pa-gone-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        background: var(--pa-red-light);
        color: var(--pa-red);
        border-radius: 50px;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 24px;
        box-shadow: var(--pa-shadow-sm);
    }
    .pa-gone-badge svg { width: 14px; height: 14px; }
    .pa-gone-hero h1 {
        font-family: 'Barlow', sans-serif;
        font-size: clamp(28px, 4.5vw, 44px);
        font-weight: 800;
        color: var(--pa-blue);
        line-height: 1.15;
        margin-bottom: 20px;
        letter-spacing: -0.02em;
    }
    .pa-gone-hero h1 span { color: var(--pa-orange); }
    .pa-gone-hero .lead {
        font-size: 17px;
        color: var(--pa-text-secondary);
        max-width: 640px;
        margin: 0 auto 14px;
        line-height: 1.6;
    }
    .pa-gone-hero .sub-lead {
        font-size: 15px;
        color: var(--pa-text-muted);
        max-width: 620px;
        margin: 0 auto 28px;
    }
    .pa-gone-hero .consult-note {
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        color: var(--pa-text-muted);
        margin: 16px 0 0;
    }
    .pa-gone-hero .consult-note strong { color: var(--pa-blue); font-weight: 600; }

    /* -------- Hero CTAs -------- */
    .pa-gone-hero-ctas {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
        margin-top: 24px;
    }
    .pa-btn-primary, .pa-btn-secondary, .pa-btn-outline {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 22px;
        border-radius: 10px;
        font-family: 'Barlow', sans-serif;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.2s ease;
        border: 1.5px solid transparent;
        cursor: pointer;
    }
    .pa-btn-primary {
        background: var(--pa-orange);
        color: #fff !important;
    }
    .pa-btn-primary:hover {
        background: var(--pa-orange-dark);
        transform: translateY(-1px);
        box-shadow: 0 6px 18px rgba(232,113,44,0.25);
    }
    .pa-btn-secondary {
        background: #25D366;
        color: #fff !important;
    }
    .pa-btn-secondary:hover {
        background: #1FAF54;
        transform: translateY(-1px);
        box-shadow: 0 6px 18px rgba(37,211,102,0.28);
    }
    .pa-btn-outline {
        background: #fff;
        color: var(--pa-blue) !important;
        border-color: var(--pa-gray-300);
    }
    .pa-btn-outline:hover {
        border-color: var(--pa-orange);
        color: var(--pa-orange) !important;
        background: var(--pa-orange-light);
    }
    .pa-btn-primary svg, .pa-btn-secondary svg, .pa-btn-outline svg {
        width: 16px; height: 16px;
    }

    /* -------- Services Section -------- */
    .pa-gone-services {
        padding: 72px 20px;
        background: var(--pa-white);
    }
    .pa-gone-services-inner {
        max-width: 1180px;
        margin: 0 auto;
    }
    .pa-gone-section-head {
        text-align: center;
        margin-bottom: 44px;
    }
    .pa-gone-section-head .eyebrow {
        display: inline-block;
        padding: 6px 14px;
        background: var(--pa-orange-light);
        color: var(--pa-orange);
        border-radius: 50px;
        font-family: 'DM Sans', sans-serif;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        margin-bottom: 14px;
    }
    .pa-gone-section-head h2 {
        font-family: 'Barlow', sans-serif;
        font-size: clamp(24px, 3.2vw, 34px);
        font-weight: 800;
        color: var(--pa-blue);
        margin-bottom: 12px;
        letter-spacing: -0.01em;
    }
    .pa-gone-section-head p {
        font-size: 15px;
        color: var(--pa-text-secondary);
        max-width: 620px;
        margin: 0 auto;
    }

    /* -------- Category Groups -------- */
    .pa-gone-category { margin-bottom: 44px; }
    .pa-gone-category:last-child { margin-bottom: 0; }

    .pa-gone-category-head {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
        padding-bottom: 14px;
        border-bottom: 2px solid var(--pa-gray-100);
    }
    .pa-gone-category-icon {
        width: 42px; height: 42px;
        border-radius: 10px;
        background: var(--pa-blue-lighter);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .pa-gone-category-icon svg {
        width: 22px; height: 22px;
        color: var(--pa-blue);
    }
    .pa-gone-category-title {
        font-family: 'Barlow', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: var(--pa-blue);
        margin: 0;
        line-height: 1.2;
    }
    .pa-gone-category-count {
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        font-weight: 500;
        color: var(--pa-text-muted);
        margin-left: auto;
    }

    /* -------- Service Card Grid -------- */
    .pa-gone-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
    }
    .pa-gone-card {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 18px;
        border-radius: 12px;
        background: var(--pa-white);
        border: 1.5px solid var(--pa-gray-200);
        text-decoration: none !important;
        transition: all 0.22s ease;
        position: relative;
    }
    .pa-gone-card:hover {
        border-color: var(--pa-orange);
        background: var(--pa-orange-lighter);
        transform: translateY(-2px);
        box-shadow: var(--pa-shadow-md);
    }
    .pa-gone-card-icon {
        width: 38px; height: 38px;
        border-radius: 8px;
        background: var(--pa-orange-light);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: background 0.22s ease;
    }
    .pa-gone-card-icon svg {
        width: 18px; height: 18px;
        color: var(--pa-orange);
    }
    .pa-gone-card:hover .pa-gone-card-icon { background: var(--pa-orange); }
    .pa-gone-card:hover .pa-gone-card-icon svg { color: #fff; }
    .pa-gone-card-text { flex: 1; min-width: 0; }
    .pa-gone-card-name {
        display: block;
        font-family: 'Barlow', sans-serif;
        font-size: 14.5px;
        font-weight: 600;
        color: var(--pa-text-primary);
        line-height: 1.3;
        margin-bottom: 2px;
    }
    .pa-gone-card:hover .pa-gone-card-name { color: var(--pa-blue); }
    .pa-gone-card-sub {
        display: block;
        font-family: 'DM Sans', sans-serif;
        font-size: 12px;
        color: var(--pa-text-muted);
    }
    .pa-gone-card-arrow {
        width: 16px; height: 16px;
        color: var(--pa-gray-300);
        flex-shrink: 0;
        transition: all 0.22s ease;
    }
    .pa-gone-card:hover .pa-gone-card-arrow {
        color: var(--pa-orange);
        transform: translateX(3px);
    }

    /* -------- Contact CTA Strip -------- */
    .pa-gone-contact {
        background: linear-gradient(135deg, var(--pa-blue) 0%, var(--pa-blue-light) 100%);
        padding: 60px 20px;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    .pa-gone-contact::before {
        content: '';
        position: absolute;
        top: -80px; right: -80px;
        width: 300px; height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(232,113,44,0.18) 0%, transparent 70%);
        pointer-events: none;
    }
    .pa-gone-contact-inner {
        max-width: 980px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        text-align: center;
    }
    .pa-gone-contact h2 {
        font-family: 'Barlow', sans-serif;
        font-size: clamp(22px, 3vw, 30px);
        font-weight: 800;
        color: #fff;
        margin-bottom: 12px;
        letter-spacing: -0.01em;
    }
    .pa-gone-contact p {
        font-size: 16px;
        color: rgba(255,255,255,0.85);
        max-width: 620px;
        margin: 0 auto 26px;
    }
    .pa-gone-contact-ctas {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
    }
    .pa-gone-contact .pa-btn-primary { background: var(--pa-orange); }
    .pa-gone-contact .pa-btn-outline {
        background: transparent;
        color: #fff !important;
        border-color: rgba(255,255,255,0.35);
    }
    .pa-gone-contact .pa-btn-outline:hover {
        background: #fff;
        color: var(--pa-blue) !important;
        border-color: #fff;
    }
    .pa-gone-contact-footnote {
        margin-top: 22px;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        color: rgba(255,255,255,0.7);
    }

    /* -------- Footer Note -------- */
    .pa-gone-footnote {
        padding: 28px 20px;
        background: var(--pa-gray-50);
        text-align: center;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        color: var(--pa-text-muted);
    }
    .pa-gone-footnote a {
        color: var(--pa-orange);
        text-decoration: none;
        font-weight: 600;
    }
    .pa-gone-footnote a:hover { text-decoration: underline; }

    /* -------- Responsive -------- */
    @media (max-width: 960px) {
        .pa-gone-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 600px) {
        .pa-gone-hero { padding: 56px 0 48px; }
        .pa-gone-services { padding: 48px 16px; }
        .pa-gone-contact { padding: 44px 16px; }
        .pa-gone-grid { grid-template-columns: 1fr; }
        .pa-gone-category-head { flex-wrap: wrap; }
        .pa-gone-category-count { margin-left: 54px; }
        .pa-btn-primary, .pa-btn-secondary, .pa-btn-outline {
            padding: 11px 18px;
            font-size: 14px;
        }
    }
</style>

<main class="pa-gone-main">

    <!-- HERO / 410 MESSAGE -->
    <section class="pa-gone-hero">
        <div class="pa-gone-hero-inner">
            <span class="pa-gone-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="15" y1="9" x2="9" y2="15"/>
                    <line x1="9" y1="9" x2="15" y2="15"/>
                </svg>
                410 - Gone
            </span>

            <h1>This Service Is <span>No Longer Available</span></h1>

            <p class="lead">
                We have stopped offering this service and the page you were looking for has been retired. Your time is valuable, so we have listed our most requested services below to help you get to the right place quickly.
            </p>
            <p class="sub-lead">
                If you had an ongoing engagement with us for this service, please reach out and our team will guide you on next steps.
            </p>

            <div class="pa-gone-hero-ctas">
                <a href="tel:+919459456700" class="pa-btn-primary">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    Call +91 945 945 6700
                </a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20landed%20on%20a%20discontinued%20service%20page.%20Please%20help%20me%20find%20the%20right%20service."
                   class="pa-btn-secondary" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.52 3.48A11.78 11.78 0 0012.06 0C5.5 0 .18 5.31.18 11.87a11.8 11.8 0 001.6 5.94L0 24l6.38-1.67a11.88 11.88 0 005.68 1.44h.01c6.56 0 11.88-5.31 11.88-11.87 0-3.17-1.24-6.15-3.43-8.42zM12.07 21.8h-.01a9.9 9.9 0 01-5.04-1.38l-.36-.21-3.78.99 1.01-3.69-.24-.38a9.88 9.88 0 01-1.52-5.27c0-5.46 4.45-9.9 9.95-9.9 2.65 0 5.15 1.03 7.02 2.9a9.84 9.84 0 012.9 7.01c0 5.46-4.45 9.93-9.93 9.93zm5.45-7.42c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15s-.77.97-.94 1.17c-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.89-.79-1.49-1.77-1.66-2.07-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51l-.57-.01c-.2 0-.52.07-.79.37s-1.04 1.02-1.04 2.49 1.07 2.89 1.22 3.09c.15.2 2.1 3.21 5.09 4.5.71.31 1.27.5 1.7.63.72.23 1.37.2 1.89.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>
                    </svg>
                    WhatsApp Us
                </a>
                <a href="mailto:sales@patronaccounting.com?subject=Help%20finding%20the%20right%20service&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20landed%20on%20a%20page%20that%20is%20no%20longer%20available.%20Could%20you%20please%20help%20me%20identify%20the%20correct%20service%20for%20my%20requirement%3F%0A%0AThank%20you."
                   class="pa-btn-outline">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                        <path d="M22 7l-10 6L2 7"/>
                    </svg>
                    Email Us
                </a>
            </div>

            <p class="consult-note"><strong>Book a Free Consultation</strong> - No Obligation.</p>
        </div>
    </section>

    <!-- SERVICES WE CURRENTLY OFFER -->
    <section class="pa-gone-services">
        <div class="pa-gone-services-inner">

            <div class="pa-gone-section-head">
                <span class="eyebrow">Services We Currently Offer</span>
                <h2>Explore Our Most Requested Services</h2>
                <p>27 flagship services across registrations, filings, accounting, audit and compliance. Click any card to continue.</p>
            </div>

            <!-- CATEGORY 1: BUSINESS & COMPANY REGISTRATION -->
            <div class="pa-gone-category">
                <div class="pa-gone-category-head">
                    <span class="pa-gone-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 21h18"/>
                            <path d="M5 21V7l7-4 7 4v14"/>
                            <path d="M9 9h1M9 13h1M9 17h1M14 9h1M14 13h1M14 17h1"/>
                        </svg>
                    </span>
                    <h3 class="pa-gone-category-title">Business & Company Registration</h3>
                    <span class="pa-gone-category-count">6 services</span>
                </div>
                <div class="pa-gone-grid">
                    <a href="/private-limited-company-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="6" width="18" height="15" rx="2"/><path d="M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Private Limited Company Registration</span>
                            <span class="pa-gone-card-sub">MCA incorporation for startups</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/llp-incorporation" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">LLP Registration</span>
                            <span class="pa-gone-card-sub">Limited Liability Partnership</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/ngo-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">NGO Registration</span>
                            <span class="pa-gone-card-sub">Trust / Society / Section 8</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/section8-company-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3 7h7l-5.5 4 2 7L12 16l-6.5 4 2-7L2 9h7z"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Section 8 Company Registration</span>
                            <span class="pa-gone-card-sub">Not-for-profit company</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/society-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"/><path d="M17 11a3 3 0 100-6"/><path d="M3 21v-2a4 4 0 014-4h4a4 4 0 014 4v2"/><path d="M21 21v-2a4 4 0 00-3-3.87"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Society Registration</span>
                            <span class="pa-gone-card-sub">Societies Registration Act</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/startup-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5C3 18 3 21 3 21s3 0 4.5-1.5S9 16 9 15s-3-1.5-4.5 1.5z"/><path d="M12 15l-3-3a22 22 0 019-9 3.6 3.6 0 013 3 22 22 0 01-9 9z"/><path d="M9 12H4s.5-3 2-4 5 0 5 0"/><path d="M12 15v5s3-.5 4-2 0-5 0-5"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Startup India Registration</span>
                            <span class="pa-gone-card-sub">DPIIT recognition for startups</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

            <!-- CATEGORY 2: TAX & GST REGISTRATIONS -->
            <div class="pa-gone-category">
                <div class="pa-gone-category-head">
                    <span class="pa-gone-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 12l4-10h12l4 10"/>
                            <path d="M2 12h20v8a2 2 0 01-2 2H4a2 2 0 01-2-2v-8z"/>
                            <line x1="12" y1="6" x2="12" y2="12"/>
                            <line x1="12" y1="16" x2="12" y2="18"/>
                        </svg>
                    </span>
                    <h3 class="pa-gone-category-title">Tax & GST Registrations</h3>
                    <span class="pa-gone-category-count">5 services</span>
                </div>
                <div class="pa-gone-grid">
                    <a href="/gst-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">GST Registration</span>
                            <span class="pa-gone-card-sub">GSTIN in 7-10 working days</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/pan-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">PAN Registration</span>
                            <span class="pa-gone-card-sub">Individual & entity PAN</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/tan-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="15" y2="17"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">TAN Registration</span>
                            <span class="pa-gone-card-sub">For TDS / TCS deductors</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/iec-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Import Export Code (IEC)</span>
                            <span class="pa-gone-card-sub">DGFT 10-digit IEC</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/udyam-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Udyam (MSME) Registration</span>
                            <span class="pa-gone-card-sub">Free Udyam certificate</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

            <!-- CATEGORY 3: EMPLOYER & STATUTORY REGISTRATIONS -->
            <div class="pa-gone-category">
                <div class="pa-gone-category-head">
                    <span class="pa-gone-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                            <path d="M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </span>
                    <h3 class="pa-gone-category-title">Employer & Statutory Registrations</h3>
                    <span class="pa-gone-category-count">3 services</span>
                </div>
                <div class="pa-gone-grid">
                    <a href="/esic-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">ESIC Registration</span>
                            <span class="pa-gone-card-sub">Employee state insurance</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/pf-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="12" rx="2"/><path d="M7 8V6a4 4 0 118 0v2"/><circle cx="12" cy="14" r="2"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Provident Fund (PF) Registration</span>
                            <span class="pa-gone-card-sub">EPFO employer code</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/dsc-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><path d="M9 15l2 2 4-4"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Digital Signature Certificate</span>
                            <span class="pa-gone-card-sub">DSC Class 3 - 2 or 3 year</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

            <!-- CATEGORY 4: TRADEMARK, LICENSES & NGO APPROVALS -->
            <div class="pa-gone-category">
                <div class="pa-gone-category-head">
                    <span class="pa-gone-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="7"/>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                        </svg>
                    </span>
                    <h3 class="pa-gone-category-title">Trademark, Licenses & NGO Approvals</h3>
                    <span class="pa-gone-category-count">4 services</span>
                </div>
                <div class="pa-gone-grid">
                    <a href="/trademark-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Trademark Registration</span>
                            <span class="pa-gone-card-sub">Brand protection in India</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/fssai-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">FSSAI Registration</span>
                            <span class="pa-gone-card-sub">Food license basic / state / central</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/12a-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L3 7l9 5 9-5-9-5z"/><path d="M3 17l9 5 9-5"/><path d="M3 12l9 5 9-5"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">12A Registration</span>
                            <span class="pa-gone-card-sub">NGO income tax exemption</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/80g-registration" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/><path d="M12 8v6M9 11h6"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">80G Registration</span>
                            <span class="pa-gone-card-sub">Donor tax deduction for NGOs</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

            <!-- CATEGORY 5: TAX FILING & RETURNS -->
            <div class="pa-gone-category">
                <div class="pa-gone-category-head">
                    <span class="pa-gone-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <line x1="10" y1="9" x2="8" y2="9"/>
                        </svg>
                    </span>
                    <h3 class="pa-gone-category-title">Tax Filing & Returns</h3>
                    <span class="pa-gone-category-count">3 services</span>
                </div>
                <div class="pa-gone-grid">
                    <a href="/income-tax-return" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Income Tax Return (ITR) Filing</span>
                            <span class="pa-gone-card-sub">Salary, business, capital gains</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/gst-returns" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">GST Returns Filing</span>
                            <span class="pa-gone-card-sub">GSTR-1, 3B, 4, 9 monthly</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/tds-return-filing" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">TDS Return Filing</span>
                            <span class="pa-gone-card-sub">24Q, 26Q, Form 16/16A</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

            <!-- CATEGORY 6: ACCOUNTING, PAYROLL & AUDIT -->
            <div class="pa-gone-category">
                <div class="pa-gone-category-head">
                    <span class="pa-gone-category-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="20" x2="18" y2="10"/>
                            <line x1="12" y1="20" x2="12" y2="4"/>
                            <line x1="6" y1="20" x2="6" y2="14"/>
                            <line x1="3" y1="20" x2="21" y2="20"/>
                        </svg>
                    </span>
                    <h3 class="pa-gone-category-title">Accounting, Payroll & Audit</h3>
                    <span class="pa-gone-category-count">6 services</span>
                </div>
                <div class="pa-gone-grid">
                    <a href="/zoho-books-accounting" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Zoho Books Accounting</span>
                            <span class="pa-gone-card-sub">Cloud bookkeeping</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/payroll-services" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><circle cx="12" cy="12" r="3"/><line x1="6" y1="12" x2="6.01" y2="12"/><line x1="18" y1="12" x2="18.01" y2="12"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Payroll Services</span>
                            <span class="pa-gone-card-sub">End-to-end payroll & compliance</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/internal-audit" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Internal Audit</span>
                            <span class="pa-gone-card-sub">Risk & control reviews</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/stock-audit" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Stock Audit</span>
                            <span class="pa-gone-card-sub">Bank stock audits pan-India</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/secretarial-audit" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l9 4v5c0 5-3.5 9-9 10-5.5-1-9-5-9-10V7l9-4z"/><path d="M9 12l2 2 4-4"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Secretarial Audit</span>
                            <span class="pa-gone-card-sub">Section 204 MR-3 audit</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="/tax-audit" class="pa-gone-card">
                        <span class="pa-gone-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="8" y1="9" x2="16" y2="9"/><line x1="8" y1="13" x2="16" y2="13"/><line x1="8" y1="17" x2="12" y2="17"/></svg></span>
                        <span class="pa-gone-card-text">
                            <span class="pa-gone-card-name">Tax Audit</span>
                            <span class="pa-gone-card-sub">Section 44AB under IT Act</span>
                        </span>
                        <svg class="pa-gone-card-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTACT CTA STRIP -->
    <section class="pa-gone-contact">
        <div class="pa-gone-contact-inner">
            <h2>Still cannot find what you are looking for?</h2>
            <p>Our CA and CS team is happy to point you in the right direction. Reach out and we will respond with the most relevant service and a clear quote.</p>
            <div class="pa-gone-contact-ctas">
                <a href="tel:+919459456700" class="pa-btn-primary">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    Call +91 945 945 6700
                </a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20landed%20on%20a%20discontinued%20service%20page.%20Please%20help%20me%20find%20the%20right%20service."
                   class="pa-btn-outline" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.52 3.48A11.78 11.78 0 0012.06 0C5.5 0 .18 5.31.18 11.87a11.8 11.8 0 001.6 5.94L0 24l6.38-1.67a11.88 11.88 0 005.68 1.44h.01c6.56 0 11.88-5.31 11.88-11.87 0-3.17-1.24-6.15-3.43-8.42zM12.07 21.8h-.01a9.9 9.9 0 01-5.04-1.38l-.36-.21-3.78.99 1.01-3.69-.24-.38a9.88 9.88 0 01-1.52-5.27c0-5.46 4.45-9.9 9.95-9.9 2.65 0 5.15 1.03 7.02 2.9a9.84 9.84 0 012.9 7.01c0 5.46-4.45 9.93-9.93 9.93zm5.45-7.42c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15s-.77.97-.94 1.17c-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.89-.79-1.49-1.77-1.66-2.07-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51l-.57-.01c-.2 0-.52.07-.79.37s-1.04 1.02-1.04 2.49 1.07 2.89 1.22 3.09c.15.2 2.1 3.21 5.09 4.5.71.31 1.27.5 1.7.63.72.23 1.37.2 1.89.12.58-.09 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z"/>
                    </svg>
                    WhatsApp Us
                </a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20from%20410%20page&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20landed%20on%20a%20page%20that%20is%20no%20longer%20available.%20Please%20help%20me%20with%20the%20right%20service.%0A%0AThank%20you."
                   class="pa-btn-outline">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"/>
                        <path d="M22 7l-10 6L2 7"/>
                    </svg>
                    sales@patronaccounting.com
                </a>
            </div>
            <p class="pa-gone-contact-footnote">Book a Free Consultation - No Obligation. Offices in Pune, Mumbai, Delhi and Gurugram.</p>
        </div>
    </section>

    <!-- FOOTER NOTE -->
    <div class="pa-gone-footnote">
        Reviewed by the <a href="/about-us">CA and CS Team, Patron Accounting LLP</a>. You can also browse the full <a href="/">list of services on our homepage</a>.
    </div>

</main>

@endsection
