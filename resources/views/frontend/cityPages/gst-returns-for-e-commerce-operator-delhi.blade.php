
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
/* Amount column — right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) — Plan 3.1
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
/* ============================================
           TOC NAVIGATION — Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>GST Returns for E-Commerce in Delhi – GSTR-8 &amp; TCS</title>
    <meta name="description" content="GSTR-8 TCS filing for e-commerce operators in Delhi. Section 52 TCS 0.5% + Section 9(5) deemed supplier. Monthly by 10th. Patron +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns-for-e-commerce-operator/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Returns for E-Commerce in Delhi – GSTR-8 &amp; TCS">
    <meta property="og:description" content="GSTR-8 TCS filing for e-commerce operators in Delhi. Section 52 TCS 0.5% + Section 9(5) deemed supplier. Monthly by 10th. Patron +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns-for-e-commerce-operator/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Returns for E-Commerce in Delhi – GSTR-8 &amp; TCS">
    <meta name="twitter:description" content="GSTR-8 TCS filing for e-commerce operators in Delhi. Section 52 TCS 0.5% + Section 9(5) deemed supplier. Monthly by 10th. Patron +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Returns for E-commerce Operator Filing Services in Delhi",
      "description": "GSTR-8 TCS filing for e-commerce operators in Delhi. Section 52 TCS 0.5% + Section 9(5) deemed supplier. Monthly by 10th. Patron +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator/delhi",
      "serviceType": "GST Returns for E-commerce Operator Filing Services in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi"
      },
      "provider": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/",
        "logo": "https://www.patronaccounting.com/images/site-logo.svg"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator/delhi",
        "price": "1499"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.patronaccounting.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "GST Returns for E-commerce Operator",
          "item": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Returns for E-commerce Operator in Delhi",
          "item": "https://www.patronaccounting.com/gst-returns-for-e-commerce-operator/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is GSTR-8 and who must file it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-8 is monthly TCS statement filed by e-commerce operators under Section 52. Due 10th of following month. Every ECO collecting consideration on behalf of suppliers must file."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Section 52 and Section 9(5)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 52 requires ECO to collect TCS 0.5% from supplier payments. Section 9(5) deems ECO as supplier for restaurant cab accommodation services paying full GST. Reported in different returns."
          }
        },
        {
          "@type": "Question",
          "name": "Can GSTR-8 be revised after filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. GSTR-8 cannot be revised once filed. Errors are permanent and affect suppliers GSTR-2A. Pre-filing verification is critical."
          }
        },
        {
          "@type": "Question",
          "name": "What is the TCS rate for e-commerce operators in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "0.5% consisting of 0.25% CGST plus 0.25% SGST or 0.5% IGST effective 10 July 2024. Computed on net value excluding Section 9(5) services."
          }
        }
      ]
    }
  ]
}</script>

@endsection

@section('content')
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
                        GST Returns for E-commerce Operator in Delhi: TCS and Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-8 (TCS Statement):</span> Monthly by 10th - TCS at 0.5% on net taxable supply value</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 9(5):</span> ECO deemed supplier for restaurant, cab, accommodation - full GST payable</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Compulsory under Section 24 - no threshold exemption for ECOs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Rs 200/day (max Rs 5,000) + 18% interest on delayed TCS deposits</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ GSTR-8 Returns Filed | 200+ E-commerce Clients | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=E-commerce%20GST%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20E%20Commerce%20Operator%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20E%20Commerce%20Operator%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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

                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'GST Returns for E-commerce Operator in Delhi',
                                            'city'     => 'Delhi',
                                        ])

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
@include('partials.testimonials', [
    'heading'    => 'Real Stories from Real People',
    'lead'       => 'Hear how teams across industries use Patron to save time, cut costs, & stay in control.',
    'ctaTitle'   => 'Join 10,000+ Satisfied Businesses',
    'ctaText'    => 'Specialised e-commerce GST compliance. 10,000+ GSTR-8 returns filed. 99%+ on-time.',
])

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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Are ECO Returns</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Filing Process</a><a href="#documents-section" class="toc-btn">Returns Schedule</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Calendar</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns for E-commerce Operators in Delhi: Dual Obligation Under S.52 and S.9(5)</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns for E-commerce Operator in Delhi Services at a Glance</strong></p>
                    <p>E-commerce operators (ECOs) in Delhi face two distinct GST obligations. Under Section 52, ECOs must collect TCS at 0.5% on net value of taxable supplies by third-party sellers, filing GSTR-8 by the 10th monthly. Under Section 9(5), ECOs are deemed suppliers for notified services - restaurant (including cloud kitchens), motor cabs, accommodation, and housekeeping - paying full GST in cash (no ITC offset). ECOs must register under Section 24 regardless of turnover, in every state. Returns include GSTR-8 (TCS), GSTR-1, GSTR-3B, and GSTR-9B. GSTR-8 cannot be revised after filing. Patron handles e-commerce GST compliance for Delhi operators from our Rohini office.</p>
                </div>
                <p>Delhi NCR is India's e-commerce capital. Major marketplace platforms (Amazon India, Flipkart, Meesho), food delivery aggregators (Zomato, Swiggy), cab aggregators (Ola, Uber), hotel platforms (OYO, MakeMyTrip), and hundreds of niche marketplace startups operate from Delhi. Delhi also has India's densest cloud kitchen ecosystem in Okhla, Nehru Place, and South Delhi. Learn more about <a href="/gst-returns-for-e-commerce-operator">GST Returns for E-commerce Operators across India</a>.</p>
                <p>Patron Accounting's Delhi office provides specialised e-commerce GST compliance: GSTR-8 TCS computation across multiple GSTINs, Section 9(5) deemed supplier liability management, GSTR-1 and GSTR-3B with correct table segregation, multi-state GSTIN management for pan-India ECOs, and platform data reconciliation. With integrated <a href="/gst-returns">monthly GST filing</a> and <a href="/gst-registration">GST registration</a>, Patron is the compliance partner for Delhi's e-commerce ecosystem.</p>
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
                <h2 class="section-title">What Are E-commerce GST Returns: TCS, Deemed Supplier, and Regular Compliance</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST returns for e-commerce operators encompass a unique set of filing obligations beyond regular business GST compliance. The primary additional return is GSTR-8 - a monthly TCS statement under Section 52 capturing outward supplies through the ECO and TCS collected, credited to suppliers' electronic cash ledger. The TCS rate was reduced from 1% to 0.5% effective 10 July 2024.</p><p>Separately, under Section 9(5), the ECO is treated as deemed supplier for notified services: restaurant (including cloud kitchens and food delivery), motor cab/transportation, accommodation, and housekeeping. For these, the ECO pays full GST directly (not TCS) - in cash, without ITC offset. These two obligations create a dual compliance layer unique to ECOs.</p><p>For Delhi-based ECOs - whether a marketplace platform in Connaught Place, a food delivery app with 50,000+ Delhi restaurant partners, a cab aggregator processing lakhs of Delhi rides, or a hotel booking platform - GSTR-8 accuracy directly impacts thousands of sellers' ITC. Errors cascade across the supply chain, causing mismatches for sellers who rely on TCS credit in their GSTR-2A.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns for E-commerce Operator in Delhi:</strong></p>
                    <p><strong>GSTR-8:</strong> Monthly TCS statement filed by ECOs under Section 52 by the 10th. Non-revisable after filing.</p><p><strong>Section 52 TCS:</strong> Tax Collected at Source at 0.5% on net value of taxable supplies by third-party sellers through the platform.</p><p><strong>Section 9(5):</strong> ECO deemed supplier for restaurant, cab, accommodation, housekeeping. Full GST payable in cash.</p><p><strong>ECO:</strong> E-commerce Operator - person who owns, operates, or manages a digital platform for electronic commerce.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Returns for E-commerce Operator in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 52/9(5) CGST Act</span>
                        <strong>E-commerce GST</strong>
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
            <h2 class="section-title">Who Must File E-commerce GST Returns in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Marketplace platforms</strong> - Amazon India, Flipkart, Meesho, and Delhi-based marketplace startups facilitating third-party seller transactions. TCS under Section 52 on all taxable supplies.</li><li><strong>Food delivery platforms</strong> - Zomato, Swiggy, Delhi-based food delivery apps. Dual obligation: TCS (S.52) AND deemed supplier for restaurant services including cloud kitchens (S.9(5)).</li><li><strong>Cab and transportation aggregators</strong> - Ola, Uber, Delhi-based ride-hailing platforms. Section 9(5) liability for motor cab services.</li><li><strong>Accommodation and hotel platforms</strong> - OYO, MakeMyTrip, Goibibo. Section 9(5) liability for accommodation services.</li><li><strong>Niche marketplace startups</strong> - Delhi NCR B2B marketplaces, service aggregators, rental platforms facilitating third-party supplies.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-commerce GST Return Services: What Patron Handles</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-8 TCS Computation and Filing</td><td>TCS at 0.5% on net taxable supplies per GSTIN. Filed by 10th. Multi-GSTIN filing for pan-India ECOs headquartered in Delhi.</td></tr><tr><td>Section 9(5) Deemed Supplier Compliance</td><td>Full GST on notified services reported in GSTR-3B Table 3.1.1(i) and GSTR-1 Table 15. Cash payment only (no ITC offset).</td></tr><tr><td>GSTR-1 with ECO-Specific Tables</td><td>Table 14 (supplies through ECO with TCS), Table 15 (Section 9(5) deemed supplier), plus standard B2B/B2C for own supplies.</td></tr><tr><td>GSTR-3B with Dual Liability</td><td>Table 3.1.1(i) for Section 9(5) cash payment, Table 3.1(a) for own supplies, Table 4 for ITC on own operations.</td></tr><tr><td>Multi-GSTIN Management</td><td>Pan-India ECOs with 30+ GSTINs get centralised GSTR-8, GSTR-1, GSTR-3B filing from Delhi office.</td></tr><tr><td>Platform Data Reconciliation</td><td>Transaction data (OMS, payment gateway) reconciled with GST filings. TCS matches settlement reports. S.9(5) matches orders.</td></tr><tr><td>GSTR-9B Annual Statement</td><td>Annual statement consolidating monthly GSTR-8 with GSTR-1 and GSTR-3B. Filed by 31 December.</td></tr>

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
            <h2 class="section-title">E-commerce GST Return Filing Process: 6 Monthly Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Delhi-based ECOs with pan-India operations file GSTR-8 per state GSTIN. Delhi GSTIN captures Delhi-state supplies and TCS. Patron manages multi-GSTIN filing from our Rohini office.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Extract Platform Transaction Data</h3><p class="step-description">At month end, extract all taxable supplies (seller-wise, state-wise), returns/refunds, Section 9(5) service orders (restaurant, cab, accommodation), and payment settlement details. Patron integrates with platform data systems for automated extraction.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Automated extraction</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Seller-wise data</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Data Extracted</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compute TCS Under Section 52</h3><p class="step-description">Calculate TCS at 0.5% on net value: aggregate taxable supply minus returns, excluding Section 9(5) services. Split: 0.25% CGST + 0.25% SGST (intra-state) or 0.5% IGST (inter-state). Patron computes TCS per GSTIN for multi-state Delhi ECOs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>0.5% net value</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Per GSTIN split</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TCS</text><text x="60" y="50" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">0.5%</text></svg></div><span class="illustration-label">TCS Computed</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Section 9(5) GST Liability</h3><p class="step-description">For food delivery, cab, and accommodation platforms, calculate full GST on notified services: restaurant at 5%/18%, motor cab at 5%/12%, accommodation at 12%/18%. This liability must be paid in cash - ITC cannot be used. Patron computes S.9(5) separately from TCS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Full GST payable</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash only - no ITC</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.9(5)</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Cash GST</text></svg></div><span class="illustration-label">Liability Set</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File GSTR-8 by 10th</h3><p class="step-description">Enter supplier-wise taxable supply details and TCS collected on GST portal. GSTR-8 cannot be revised after filing - accuracy at submission is critical. TCS data auto-populates suppliers' GSTR-2A. Patron files by 7th-8th for Delhi ECOs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Non-revisable</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed by 7th-8th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25L60 45" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 35l10-10 10 10" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="55" width="40" height="10" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">GSTR-8 Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File GSTR-1 by 11th with ECO Tables</h3><p class="step-description">File GSTR-1 with Table 14 (supplies through ECO - supplier perspective), Table 15 (Section 9(5) deemed supplier supplies), and standard B2B/B2C for own platform services. Patron ensures correct table segregation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tables 14 + 15</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct segregation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="35" x2="75" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="50" x2="65" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M85 60l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">GSTR-1 Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File GSTR-3B by 20th with Dual Liability</h3><p class="step-description">File summary return: Table 3.1.1(i) for Section 9(5) deemed supplier liability (cash payment), Table 3.1(a) for own outward supplies (excluding S.9(5)), Table 4 for ITC on own operations. Pay total tax via electronic cash and credit ledgers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual liability managed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cash + ITC split</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M48 40l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">All Filed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Returns Filed by E-commerce Operators in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>GSTR-8 (Monthly by 10th)</strong> - TCS collected, supplier-wise supply details.</li><li><strong>GSTR-1 (Monthly by 11th)</strong> - Outward supplies with Tables 14, 15 for ECO-specific data.</li><li><strong>GSTR-3B (Monthly by 20th)</strong> - Summary: own liability + Section 9(5) liability + ITC.</li><li><strong>GSTR-9 (Annual by 31 Dec)</strong> - Annual return (if turnover > Rs 2 crore).</li><li><strong>GSTR-9B (Annual by 31 Dec)</strong> - Annual statement for ECOs.</li><li><strong>GSTR-9C (Annual by 31 Dec)</strong> - Reconciliation statement (if turnover > Rs 5 crore).</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common E-commerce GST Challenges in Delhi: 5 Issues and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-8 Non-Revisable</td><td>Incorrect TCS, wrong supplier GSTINs, or misclassified values are permanent after filing, impacting suppliers' GSTR-2A</td><td>Patron's multi-point verification against platform data before filing prevents errors</td></tr><tr><td>S.52 vs S.9(5) Confusion</td><td>Food delivery and cab platforms confuse TCS with deemed supplier obligations, misreporting in different tables</td><td>Patron maintains clear segregation: S.52 in GSTR-8, S.9(5) in GSTR-3B Table 3.1.1(i)</td></tr><tr><td>Multi-GSTIN Complexity</td><td>Pan-India ECOs with 30+ state GSTINs need separate GSTR-8, GSTR-1, GSTR-3B per state</td><td>Centralised management from Delhi with state-wise data disaggregation</td></tr><tr><td>Cloud Kitchen S.9(5)</td><td>S.9(5) liability falls on delivery platform, not cloud kitchen, but both must report correctly</td><td>Patron handles both ECO-side and supplier-side reporting for Delhi cloud kitchens</td></tr><tr><td>TCS Credit Reconciliation</td><td>Delhi sellers rely on TCS credit from ECOs in GSTR-2A; late or incorrect GSTR-8 affects seller ITC</td><td>Patron files GSTR-8 accurately by 7th-8th to protect Delhi seller ecosystem</td></tr>

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
            <h2 class="section-title">E-commerce GST Return Filing Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-8 Monthly Filing (per GSTIN)</td><td>From INR 1,999/month</td></tr><tr><td>Complete ECO Package (GSTR-8 + 1 + 3B per GSTIN)</td><td>From INR 3,999/month</td></tr><tr><td>Section 9(5) Compliance (Deemed Supplier)</td><td>From INR 4,999/month</td></tr><tr><td>Multi-GSTIN Package (5+ GSTINs)</td><td>Custom pricing</td></tr><tr><td>GSTR-9B Annual Statement</td><td>From INR 7,999</td></tr><tr><td>Platform Data Reconciliation</td><td>Included</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 1,499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns for E-commerce Operator in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20E%20Commerce%20Operator%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Monthly Compliance Calendar for Delhi E-commerce Operators</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>7th-8th</td><td>Patron files GSTR-8 (buffer before 10th deadline)</td></tr><tr><td>10th</td><td>GSTR-8 due (TCS statement - non-revisable)</td></tr><tr><td>11th</td><td>GSTR-1 due (Tables 14, 15 for ECO-specific data)</td></tr><tr><td>20th</td><td>GSTR-3B due (summary + tax including S.9(5) cash payment)</td></tr><tr><td>31st Dec</td><td>GSTR-9, GSTR-9B, GSTR-9C annual filings</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> GSTR-8 has the earliest deadline (10th) in the monthly GST cycle. Delhi ECOs processing millions of transactions must extract, compute, verify, and file within 10 days of month end. Non-revisable nature makes first-attempt accuracy critical.</p>

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
            <h2 class="section-title">Why Choose Patron for E-commerce GST in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>10,000+ GSTR-8 Returns Filed</h3><p>200+ e-commerce clients with 99%+ on-time filing. Deep understanding of platform data structures and reconciliation challenges.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>S.52 + S.9(5) Dual Expertise</h3><p>Both TCS collection and deemed supplier liability managed without confusion. Food delivery, cab, and accommodation platforms get unified compliance.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Multi-GSTIN Central Management</h3><p>Pan-India ECOs headquartered in Delhi get centralised filing across all state GSTINs from one office, one contact.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Non-Revisable Return Accuracy</h3><p>Multi-point verification against platform data, settlement reports, and accounting records ensures first-attempt accuracy for GSTR-8.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 200+ E-commerce Clients</h2>
            <div class="content-text">
                
                <p><strong>10,000+ GSTR-8 Returns Filed | 200+ E-commerce Clients | 99%+ On-Time | 4.9 Google Rating</strong></p><p>"Patron manages our GSTR-8 across 12 GSTINs with zero mismatches. Their reconciliation engine catches discrepancies before they become notices. The TCS rate transition in July 2024 was handled seamlessly." - E-commerce Platform, Delhi</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Self-Filing: E-commerce GST Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Filing</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-8 Accuracy</td><td>Multi-point verification, non-revisable safe</td><td>Errors permanent after filing</td></tr><tr><td>S.52 vs S.9(5)</td><td>Clear segregation in all returns</td><td>Often confused and misreported</td></tr><tr><td>Multi-GSTIN</td><td>Centralised filing across states</td><td>Per-state manual effort</td></tr><tr><td>Platform Reconciliation</td><td>Automated data matching</td><td>Manual, incomplete</td></tr><tr><td>Rate Changes</td><td>Tracked and applied (TCS 0.5% from Jul 2024)</td><td>Often missed</td></tr><tr><td>Pricing</td><td>From INR 1,499/month per GSTIN</td><td>Free but supply chain impact risk</td></tr>

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
            <h2 class="section-title">Related GST and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-returns-for-e-commerce-operator">GST Returns for E-commerce Operator (India)</a> - National-level ECO GST compliance.</li><li><a href="/gst-returns">GST Returns</a> - Monthly GSTR-1/3B for regular taxpayers.</li><li><a href="/gst-registration">GST Registration</a> - New GST registration including ECO compulsory registration.</li><li><a href="/gst-annual-returns">GST Annual Returns</a> - GSTR-9/9B/9C annual filing.</li><li><a href="/gst-notice">GST Notice</a> - GST notice response services.</li><li><a href="/accounting-services">Accounting Services</a> - Integrated bookkeeping and compliance.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: E-commerce GST Under CGST Act 2017</h2>
            <div class="content-text">
                
                <p><strong>ECO Definition:</strong> Section 2(45) - person who owns, operates, or manages digital platform for e-commerce.</p><p><strong>Compulsory Registration:</strong> Section 24(x) - no threshold exemption for ECOs.</p><p><strong>TCS (Section 52):</strong> 0.5% on net taxable supply value. Effective 10 July 2024 (reduced from 1%). GSTR-8 by 10th monthly. Non-revisable.</p><p><strong>Deemed Supplier (Section 9(5)):</strong> Full GST for restaurant, cab, accommodation, housekeeping. Cash only. GSTR-3B Table 3.1.1(i) + GSTR-1 Table 15.</p><p><strong>GSTR-9B:</strong> Annual ECO statement by 31 December.</p><p><strong>Late Fee:</strong> Rs 200/day (max Rs 5,000) + 18% interest on delayed TCS.</p><p><strong>Source:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>, <a href="https://gstcouncil.gov.in" target="_blank" rel="noopener">gstcouncil.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: E-commerce GST Returns in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about GSTR-8, TCS, Section 9(5), and ECO compliance for Delhi e-commerce operators.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns for E-commerce Operator in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is GSTR-8 and who must file it?</h3>
                        <div class="faq-expanded__a"><p>GSTR-8 is the monthly TCS statement filed by e-commerce operators under Section 52 CGST Act. It captures details of outward supplies by third-party sellers and TCS collected at 0.5%. Due by the 10th of the following month. Every ECO that collects consideration on behalf of suppliers must file, including marketplaces, food delivery, cab, and accommodation platforms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the difference between Section 52 and Section 9(5)?</h3>
                        <div class="faq-expanded__a"><p>Section 52 requires ECOs to collect TCS at 0.5% from supplier payments on all platform supplies - reported in GSTR-8. Section 9(5) deems the ECO as the supplier for notified services (restaurant, cab, accommodation, housekeeping) - ECO pays full GST in cash, reported in GSTR-3B Table 3.1.1(i) and GSTR-1 Table 15. The two are separate obligations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can GSTR-8 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>No. GSTR-8 cannot be revised once filed on the GST portal. Errors in TCS amounts, supplier GSTINs, or supply values are permanent for that month. Discrepancies are communicated to both parties for reconciliation. This non-revisable nature makes pre-filing verification absolutely critical.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the TCS rate for e-commerce operators in 2026?</h3>
                        <div class="faq-expanded__a"><p>The TCS rate is 0.5% (0.25% CGST + 0.25% SGST/UTGST for intra-state or 0.5% IGST for inter-state), effective 10 July 2024. Computed on net value of taxable supplies minus returns, excluding Section 9(5) service supplies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do Delhi cloud kitchens need to file GST separately if they sell through Zomato/Swiggy?</h3>
                        <div class="faq-expanded__a"><p>Yes, but with specific reporting. For restaurant services through food delivery platforms, the Section 9(5) liability falls on the platform, not the cloud kitchen. The cloud kitchen reports in GSTR-3B Table 3.1.1(ii) but does not pay GST on those supplies. Patron handles both ECO and supplier-side reporting.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if an ECO fails to collect or deposit TCS?</h3>
                        <div class="faq-expanded__a"><p>Interest at 18% per annum on delayed amount under Section 52(6). Additional penalties under Section 122 may apply. Late GSTR-8 attracts Rs 200/day (max Rs 5,000). Persistent non-compliance can trigger recovery proceedings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is registration compulsory for e-commerce operators?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 24(x) of the CGST Act, ECOs must register in every state of operation regardless of turnover. No threshold exemption applies. Delhi-based ECOs with pan-India operations need GSTINs in every state where they facilitate supplies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does e-commerce GST compliance cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron's services start from INR 1,499/month per GSTIN for GSTR-8 only, Rs 3,999/month for complete ECO package (GSTR-8 + GSTR-1 + GSTR-3B). Custom pricing for multi-GSTIN (5+ states). GSTR-9B from Rs 7,999. 10,000+ GSTR-8 returns filed. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>E-commerce operator ko kaun se GST returns file karne hote hain?</strong> GSTR-8 (TCS) har mahine 10 tarikh tak. GSTR-1 (outward supplies) 11 tarikh tak. GSTR-3B (summary + tax) 20 tarikh tak. GSTR-9B (annual) 31 December tak.</p><p><strong>Section 52 aur Section 9(5) mein kya fark hai?</strong> S.52 mein ECO seller ke payment se TCS (0.5%) collect karta hai. S.9(5) mein ECO khud supplier maana jata hai restaurant, cab, hotel services ke liye aur pura GST pay karta hai.</p><p><strong>GSTR-8 revise ho sakta hai?</strong> Nahi. File hone ke baad revise nahi ho sakta. Data verify karna bahut zaroori hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">E-commerce GST Deadline: 10th of Every Month</h2>
            <div class="content-text">
                
                <p>The 10th-of-the-month GSTR-8 deadline is the earliest GST filing deadline in the monthly cycle. Delhi ECOs processing millions of transactions must extract, compute, verify, and file within 10 days of month end. The non-revisable nature of GSTR-8 means errors are permanent and cascade to thousands of sellers' ITC statements.</p><p><strong>Contact Patron's Delhi office for systematic e-commerce GST compliance - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20E%20Commerce%20Operator%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Set Up E-commerce GST Compliance in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST returns for e-commerce operators in Delhi represent the most complex layer of GST compliance - combining TCS under Section 52, deemed supplier liability under Section 9(5), multi-GSTIN state-level filing, non-revisable GSTR-8, and platform data reconciliation across millions of transactions.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting provides specialised e-commerce GST filing from our Rohini office - GSTR-8 TCS computation, Section 9(5) compliance, GSTR-1/3B with ECO table segregation, multi-GSTIN management, platform reconciliation, and GSTR-9B. With 10,000+ GSTR-8 returns filed, 200+ clients, and 99%+ on-time rate, Patron is Delhi's e-commerce compliance partner.</p><p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA & CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20E%20Commerce%20Operator%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=E-commerce%20GST%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20E%20Commerce%20Operator%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">E-commerce GST Services: Available Across 4 Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional GSTR-8 and e-commerce GST compliance in Pune, Mumbai, Delhi, and Gurugram.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/gst-returns-for-e-commerce-operator/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-e-commerce-operator/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/gst-returns-for-e-commerce-operator/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">End-to-end GST and e-commerce compliance</div><div class="pa-cross-grid"><a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a><a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a><a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly to ensure TCS rates, Section 9(5) notified services, GSTR-8 procedures, and CBIC notifications are current. Verified against gst.gov.in and gstcouncil.gov.in.</p>
        </div>
    </div>
</section>

<!-- STICKY WHATSAPP BAR -->
{{--
<div class="wa-sticky-bar" id="waBar">
    <div class="wa-sticky-bar-content">
        <div class="wa-sticky-bar-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </div>
        <span class="wa-sticky-bar-text"><strong>Join 5,000+ business owners.</strong> Get compliance due date alerts on WhatsApp.</span>
        <a href="https://wa.me/919459456700?text=Hi%2C%20please%20add%20me%20to%20your%20compliance%20due%20date%20reminders%20on%20WhatsApp." target="_blank" rel="noopener" class="wa-sticky-bar-btn">
            <span>Join Free &rarr;</span>
        </a>
        <button class="wa-sticky-bar-close" id="waBarClose" aria-label="Close">&times;</button>
    </div>
</div> 
--}}
@include('layouts.itr-season-strip')

</main>






<!-- ============================================
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
     ============================================ -->


<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
