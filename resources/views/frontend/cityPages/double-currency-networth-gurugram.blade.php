
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
    <title>Double Currency Net Worth Cert. Gurugram - INR & USD</title>
    <meta name="description" content="CA-certified double currency networth certificate in Gurugram. INR + USD/CAD/GBP/EUR/AUD. VISA, immigration, PR, student visa. Same-day. Call +91 945 945 6700.">
    <link rel="canonical" href="/double-currency-networth/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Double Currency Net Worth Cert. Gurugram - INR & USD">
    <meta property="og:description" content="CA-certified double currency networth certificate in Gurugram. INR + USD/CAD/GBP/EUR/AUD. VISA, immigration, PR, student visa. Same-day. Call +91 945 945 6700.">
    <meta property="og:url" content="/double-currency-networth/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Double Currency Net Worth Cert. Gurugram - INR & USD">
    <meta name="twitter:description" content="CA-certified double currency networth certificate in Gurugram. INR + USD/CAD/GBP/EUR/AUD. VISA, immigration, PR, student visa. Same-day. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Double Currency Net Worth Cert. Gurugram - INR & USD",
      "description": "CA-certified double currency networth certificate in Gurugram. INR + USD/CAD/GBP/EUR/AUD. VISA, immigration, PR, student visa. Same-day. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/double-currency-networth/gurugram",
      "serviceType": "Double Currency Net Worth Cert. Gurugram - INR & USD",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
        }
      },
      "provider": {
        "@type": "Organization",
        "name": "Patron Accounting LLP",
        "url": "https://www.patronaccounting.com/",
        "logo": "https://www.patronaccounting.com/images/site-logo.svg"
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
          "name": "Double Currency Networth",
          "item": "https://www.patronaccounting.com/double-currency-networth"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Double Currency Net Worth Cert. Gurugram - INR & USD",
          "item": "https://www.patronaccounting.com/double-currency-networth/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a double currency networth certificate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CA-certified document showing total assets, liabilities, and networth in INR + a foreign currency at stated exchange rate. Used for VISA and immigration applications. UDIN mandatory."
          }
        },
        {
          "@type": "Question",
          "name": "Who can issue it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only practising CA with ICAI COP. On CA letterhead with seal, signature, and UDIN. Patron's CAs issue from Gurugram office with same-day turnaround."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN, Aadhaar/passport, bank statements (3-6 months), FD receipts, PPF/NPS/EPF, MF CAS, DEMAT, property docs, loan statements, ITR. Patron provides personalised checklist per VISA type."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard: same-day (scan within hours, hardcopy same/next day). Rush walk-in: 2-4 hours. Property valuation adds 2-5 days. Fastest: under 3 hours."
          }
        },
        {
          "@type": "Question",
          "name": "Is UDIN required?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ICAI mandates UDIN for all CA certificates. Embassy verifies at udin.icai.org. Without UDIN, certificate may be rejected. Patron generates UDIN for every certificate."
          }
        },
        {
          "@type": "Question",
          "name": "Which currencies are supported?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Any currency: USD, CAD, GBP, EUR, AUD, NZD, AED, SGD, JPY, and any other. Patron uses latest RBI reference rate or market rate."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Individual from Rs 2,499. Joint family from Rs 3,499. Student VISA from Rs 2,999. Investor VISA from Rs 4,999. Company/LLP from Rs 3,999."
          }
        },
        {
          "@type": "Question",
          "name": "Do I need property valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Only if embassy specifically requires independent valuation. Most accept registered value or market estimate. Patron coordinates with registered valuers when needed."
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
                        Double Currency Networth Certificate in Gurugram: CA-Certified, Embassy-Accepted
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">03 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>What It Is:</span> Networth certificate showing total assets and liabilities in INR + a foreign currency (USD, CAD, GBP, EUR, AUD)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Certified By:</span> Practising CA on letterhead with seal, signature, and UDIN (Unique Document Identification Number)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Used For:</span> Student VISA, PR VISA (Canada, Australia, NZ), work permit, investor VISA, tourist VISA, immigration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Turnaround:</span> Same-day or next-day delivery (digital scan + physical hardcopy courier)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Same-day double currency networth certificates for VISA, immigration, and education abroad from Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Double%20Currency%20Networth%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Double Currency Networth Certificate in Gurugram',
                                            'city'     => 'Gurugram',
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
    'ctaText'    => 'Same-day double currency networth certificates for VISA and immigration from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Contents</a><a href="#who-section" class="toc-btn">VISA Types</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Currencies</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Why Patron</a><a href="#benefits-section" class="toc-btn">Quality</a><a href="#comparison-section" class="toc-btn">Patron vs Others</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Double Currency Networth Certificate in Gurugram: Embassy-Accepted, UDIN-Verified</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Double Currency Networth Certificate in Gurugram Services at a Glance</strong></p>
                    <p>CA-certified networth in INR + foreign currency (USD/CAD/GBP/EUR/AUD). On CA letterhead with UDIN. Embassy/consulate accepted. Same-day delivery. Documents: PAN, bank statements, FDs, MF, property docs, loans. No government-prescribed format - CA uses embassy-accepted standard. UDIN mandatory for online verification at udin.icai.org.</p>
                </div>
                <p>Gurugram residents frequently need networth certificates for VISA applications. For a comprehensive overview, see our <a href="/net-worth-certificate-for-visa">Double Currency Networth</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>VISA Type</th><th>Typical Currency</th><th>Networth Focus</th></tr></thead><tbody><tr><td>Canada PR / Study</td><td>INR + CAD</td><td>Liquid assets + total networth</td></tr><tr><td>US H-1B / B-1/B-2</td><td>INR + USD</td><td>Financial stability proof</td></tr><tr><td>UK Student / Work</td><td>INR + GBP</td><td>Tuition + living expenses</td></tr><tr><td>Australia PR / Study</td><td>INR + AUD</td><td>Points-based financial proof</td></tr><tr><td>UAE Golden Visa</td><td>INR + AED</td><td>Investment capacity</td></tr><tr><td>Schengen Tourist</td><td>INR + EUR</td><td>Travel funding proof</td></tr></tbody></table></div><p</p>
                <p>Only practising CA with ICAI COP can certify. UDIN mandatory for embassy verification. Exchange rate from RBI reference rate. No government-prescribed format - embassy-accepted standard used. Patron provides same-day certificates from Gurugram office.</p>
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
                <h2 class="section-title">What the Certificate Contains</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Applicant Identity:</strong> Full name, PAN, Aadhaar (optional), address, nationality.</p><p><strong>Assets:</strong> Immovable (property, land) + Movable (bank, FD, PPF/NPS/EPF, MF, shares, insurance, gold, vehicles).</p><p><strong>Liabilities:</strong> Home loan, personal loans, credit card dues, other borrowings.</p><p><strong>Networth:</strong> Total Assets - Total Liabilities = Net Worth in INR and foreign currency.</p><p><strong>Exchange Rate:</strong> RBI reference rate or market rate with source and date clearly stated.</p><p><strong>CA Certification:</strong> On CA letterhead with membership number, firm registration, seal, signature, UDIN. Verifiable at udin.icai.org. See <a href="/accounting-services">Accounting Services</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Double Currency Networth Certificate in Gurugram:</strong></p>
                    <p><strong>UDIN:</strong> Unique Document Identification Number. ICAI-mandated for all CA certificates. Embassy verifies at udin.icai.org.</p><p><strong>Double Currency:</strong> Networth shown in INR (primary) + foreign currency (secondary) at stated exchange rate.</p><p><strong>"As On" Date:</strong> The date for which networth is calculated. Must be recent (within 1-3 months for most VISAs).</p><p><strong>RBI Reference Rate:</strong> Official exchange rate published by RBI daily. Preferred source for conversion.</p><p><strong>Embassy-Accepted Format:</strong> No statutory format exists. CA uses industry-standard format accepted by embassies worldwide.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Double Currency Networth Certificate in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Networth</span>
                        <strong>Dual Currency CA</strong>
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
            <h2 class="section-title">Common VISA Types Requiring Networth</h2>
            <div class="content-text">
                
                <p><strong>Canada PR (Express Entry):</strong> Proof of settlement funds in CAD. Joint family networth common. Liquid assets emphasis.</p><p><strong>Student VISA (US/UK/Canada/Australia):</strong> Parent-sponsored networth showing capacity to fund tuition + living. Education loan + liquid assets.</p><p><strong>US H-1B / L-1:</strong> Financial stability proof. Not always mandatory but strengthens application.</p><p><strong>Australia PR (Points-Based):</strong> Financial capacity proof in AUD. Property + investments + liquid assets.</p><p><strong>UAE Golden Visa:</strong> High-networth proof for investor/entrepreneur category. Investment capacity in AED.</p><p><strong>Schengen Tourist:</strong> Travel funding proof in EUR. Bank balance focus. Shorter validity required.</p><p><strong>Gurugram context:</strong> DLF Cyber City IT professionals (Canada PR, US H-1B), Golf Course Road executives (UK/US relocation), Sohna Road families (student VISA), Udyog Vihar business owners (UAE Golden Visa).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Networth Certificate Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Double Currency Networth (Individual)</td><td>INR + any foreign currency. CA letterhead, seal, signature, UDIN. Same-day delivery (scan + hardcopy)</td></tr><tr><td>Joint Family Networth</td><td>Combined networth of husband+wife or parent+child. For family PR VISA (Canada, Australia), dependent VISA</td></tr><tr><td>Student VISA (Parent-Sponsored)</td><td>Parents' networth showing capacity to fund education + living abroad. Double currency format</td></tr><tr><td>Investor/Entrepreneur VISA</td><td>High-networth certificate for investor categories (US E-2, Canada SUV, UK Innovator, UAE Golden Visa)</td></tr><tr><td>Company/LLP Networth</td><td>Business entity networth for foreign bank account, franchise, international tender, or licence</td></tr><tr><td>Property Valuation Coordination</td><td>Independent property valuation by registered valuer for immovable assets if required by embassy</td></tr>

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
            <h2 class="section-title">Certificate Preparation Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From document collection to same-day delivery with UDIN.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Documents + Asset Listing</h3><p class="step-description">Collect PAN, bank statements (3-6 months), FD receipts, MF CAS, DEMAT holdings, property documents, loan statements, ITR. List all assets and liabilities. Verify balances as on certification date.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Assets listed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">INR+USD</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Networth Computation + Conversion</h3><p class="step-description">Compute total assets, total liabilities, and networth in INR. Convert to foreign currency using RBI reference rate as on the certification date. Prepare certificate in embassy-accepted format on CA letterhead.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Converted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NW</text></svg></div><span class="illustration-label">Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Sign + UDIN + Deliver</h3><p class="step-description">CA signs certificate with seal. Generate UDIN from udin.icai.org and stamp on certificate. Deliver scanned copy via email/WhatsApp + physical hardcopy via courier. Embassy can verify UDIN online.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UDIN generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Delivered</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th><th>Notes</th></tr></thead><tbody><tr><td>PAN Card</td><td>Identity + tax verification</td><td>Mandatory</td></tr><tr><td>Aadhaar/Passport</td><td>Identity + address</td><td>Passport for VISA applicants</td></tr><tr><td>Bank Statements (all accounts)</td><td>Liquid asset verification</td><td>Latest 3-6 months</td></tr><tr><td>FD Receipts</td><td>Fixed deposit value</td><td>All banks</td></tr><tr><td>PPF/NPS/EPF Statements</td><td>Retirement savings</td><td>Latest balance</td></tr><tr><td>Mutual Fund CAS</td><td>MF portfolio value</td><td>Consolidated Account Statement</td></tr><tr><td>DEMAT Holdings</td><td>Share portfolio value</td><td>Latest holding statement</td></tr><tr><td>Property Documents (Sale Deed)</td><td>Immovable asset value</td><td>Market value or registered value</td></tr><tr><td>Loan Statements</td><td>Liability verification</td><td>All outstanding loans</td></tr><tr><td>Latest ITR Acknowledgment</td><td>Income verification</td><td>Supports networth claim</td></tr></tbody></table></div><div class="highlight-box" style="margin-top:20px;"><p><strong>Patron provides personalised checklist</strong> based on your VISA type. Not all documents above are always needed. Walk-in or WhatsApp documents for fastest turnaround.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Supported Currencies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>USD (US Dollar)</td><td>US VISA (H-1B, B-1/B-2, F-1, EB-5)</td><td>Most common secondary currency</td></tr><tr><td>CAD (Canadian Dollar)</td><td>Canada PR, Study Permit, LMIA</td><td>Settlement funds proof</td></tr><tr><td>GBP (British Pound)</td><td>UK Student, Tier 2/5, Innovator</td><td>Tuition + maintenance</td></tr><tr><td>EUR (Euro)</td><td>Schengen, Germany, France, Italy VISA</td><td>Travel/study funding</td></tr><tr><td>AUD (Australian Dollar)</td><td>Australia PR, Student, Business</td><td>Points-based financial</td></tr><tr><td>AED/NZD/SGD/JPY + Any Other</td><td>UAE, NZ, Singapore, Japan + any country</td><td>RBI or market rate used</td></tr>

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
            <h2 class="section-title">Networth Certificate Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Individual Double Currency Networth</td><td>Starting from Rs 2,499 (Exl GST) | Same-day delivery</td></tr><tr><td>Joint Family Networth (2 persons)</td><td>Starting from Rs 3,499 (Exl GST) | Same-day delivery</td></tr><tr><td>Student VISA (Parent-Sponsored)</td><td>Starting from Rs 2,999 (Exl GST) | Same-day delivery</td></tr><tr><td>Investor/Entrepreneur VISA</td><td>Starting from Rs 4,999 (Exl GST) | 1-2 days</td></tr><tr><td>Company/LLP Networth</td><td>Starting from Rs 3,999 (Exl GST) | 1-2 days</td></tr><tr><td>Property Valuation Coordination</td><td>Starting from Rs 2,999-9,999 (Exl GST) | 2-5 days</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Double Currency Networth Certificate in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Double%20Currency%20Networth%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Choose Patron Accounting in Gurugram?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Gurugram Office</td><td>Golf Course Extension Road - walk-in for same-day certificates. Cyber City, Golf Course Road, Sohna Road clients</td></tr><tr><td>Same-Day Delivery</td><td>Standard: scanned copy within hours + hardcopy courier. Rush: 2-4 hours for walk-in. Fastest under 3 hours</td></tr><tr><td>UDIN Every Time</td><td>Every certificate has UDIN. Embassy verifies at udin.icai.org. No rejection risk due to missing UDIN</td></tr><tr><td>Embassy-Accepted Format</td><td>Format accepted by US, Canada, UK, Australia, UAE, Schengen, and all other embassies. Industry standard</td></tr><tr><td>Any Currency</td><td>USD, CAD, GBP, EUR, AUD, AED, NZD, SGD, JPY, and any other currency. RBI reference rate used</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Urgent?</strong> Walk-in to Gurugram office for 2-4 hour turnaround. WhatsApp documents for remote processing. Same-day scan + next-day hardcopy. UDIN on every certificate. Embassy-accepted format. Any currency supported.</p>

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
            <h2 class="section-title">Patron vs Other Providers</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Patron: UDIN Always</h3><p class="feature-text">Every certificate has UDIN. Embassy verifies online. No rejection. ICAI compliant. Professional credibility.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 9v2m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Others: No UDIN</h3><p class="feature-text">Many skip UDIN. Embassy may reject. No online verification possible. Applicant has to redo. Time and money wasted.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Patron: Same-Day</h3><p class="feature-text">Standard same-day. Rush 2-4 hours. Walk-in at Gurugram office. Digital + physical delivery. Fastest under 3 hours.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Patron: Embassy Format</h3><p class="feature-text">Format accepted by all major embassies. Proper asset categorisation. Exchange rate source cited. Professional presentation.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Canada PR application - needed INR+CAD networth urgently. WhatsApped documents at 10am. Patron delivered scanned certificate by 2pm. UDIN verified by consultant same day."</p><p style="font-weight:700;font-size:14px;margin:0;">- IT Professional, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Son's UK university admission - parent-sponsored INR+GBP certificate. Patron included property valuation, FDs, MFs. Accepted by UKVI first time. No queries."</p><p style="font-weight:700;font-size:14px;margin:0;">- Parent, Sohna Road</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Others Detailed</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron</th><th>Others</th></tr></thead>
                    <tbody>
                        <tr><td>UDIN</td><td>Every certificate, always</td><td>Often skipped (rejection risk)</td></tr><tr><td>Turnaround</td><td>Same-day (rush: 2-4 hours)</td><td>2-5 days typically</td></tr><tr><td>Embassy Format</td><td>Industry standard, all embassies</td><td>Generic format (may need revision)</td></tr><tr><td>Exchange Rate</td><td>RBI reference rate, source cited</td><td>Often unstated or outdated</td></tr><tr><td>Property Valuation</td><td>Registered valuer coordination</td><td>Not offered</td></tr><tr><td>Pricing</td><td>From Rs 2,499 (individual)</td><td>Variable, often higher</td></tr>

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
            <h2 class="section-title">Related Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/net-worth-certificate-for-visa">Double Currency Networth (National)</a></li><li><a href="/income-tax-return">Income Tax Return</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/fdi-compliance">FDI Compliance</a></li><li><a href="/tax-planning-services">Tax Planning</a></li></ul>

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
                
                <p><strong>Certification:</strong> Only practising CA with ICAI COP can certify networth certificates in India.</p><p><strong>UDIN:</strong> Mandatory for all CA certificates. Generated at udin.icai.org. Embassy-verifiable online.</p><p><strong>Exchange Rate:</strong> RBI reference rate (rbi.org.in) or recognised market rate. Date must match "as on" date.</p><p><strong>Format:</strong> No government-prescribed format. Embassy-accepted industry standard used by CA.</p><p><strong>Validity:</strong> Most embassies accept certificates dated within 1-3 months of application.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Double Currency Networth in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about double currency networth certificates, UDIN, documents, and VISA requirements for Gurugram residents.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Double Currency Networth Certificate in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a double currency networth certificate?</h3>
                        <div class="faq-expanded__a"><p>CA-certified document showing total assets, liabilities, and networth in INR + a foreign currency at stated exchange rate. Used for VISA and immigration applications. UDIN mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can issue it?</h3>
                        <div class="faq-expanded__a"><p>Only practising CA with ICAI COP. On CA letterhead with seal, signature, and UDIN. Patron's CAs issue from Gurugram office with same-day turnaround.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are needed?</h3>
                        <div class="faq-expanded__a"><p>PAN, Aadhaar/passport, bank statements (3-6 months), FD receipts, PPF/NPS/EPF, MF CAS, DEMAT, property docs, loan statements, ITR. Patron provides personalised checklist per VISA type.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does it take?</h3>
                        <div class="faq-expanded__a"><p>Standard: same-day (scan within hours, hardcopy same/next day). Rush walk-in: 2-4 hours. Property valuation adds 2-5 days. Fastest: under 3 hours.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is UDIN required?</h3>
                        <div class="faq-expanded__a"><p>Yes. ICAI mandates UDIN for all CA certificates. Embassy verifies at udin.icai.org. Without UDIN, certificate may be rejected. Patron generates UDIN for every certificate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Which currencies are supported?</h3>
                        <div class="faq-expanded__a"><p>Any currency: USD, CAD, GBP, EUR, AUD, NZD, AED, SGD, JPY, and any other. Patron uses latest RBI reference rate or market rate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Individual from Rs 2,499. Joint family from Rs 3,499. Student VISA from Rs 2,999. Investor VISA from Rs 4,999. Company/LLP from Rs 3,999.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need property valuation?</h3>
                        <div class="faq-expanded__a"><p>Only if embassy specifically requires independent valuation. Most accept registered value or market estimate. Patron coordinates with registered valuers when needed.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Double currency networth kya hai?</strong> CA dwara certified document jismein aapki total assets aur liabilities INR + foreign currency (USD/CAD/GBP) mein dikhaayi jaati hain. VISA ke liye zaroori hai.</p><p><strong>Kitna time lagta hai?</strong> Same day. Rush walk-in: 2-4 ghante. WhatsApp par documents bhejo toh scan usi din milta hai.</p><p><strong>UDIN kya hai?</strong> ICAI ka unique number jo certificate par lagta hai. Embassy ise online verify kar sakti hai. Bina UDIN rejection ho sakta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Need Networth Certificate Today?</h2>
            <div class="content-text">
                
                <p>Same-day delivery. Rush: 2-4 hours walk-in. UDIN on every certificate. Embassy-accepted format. Any currency. WhatsApp documents or walk-in to Gurugram office. Digital scan + physical hardcopy.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Double%20Currency%20Networth%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Same-Day Networth Certificate in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Double currency networth certificate is essential for VISA, immigration, and education abroad. CA-certified, UDIN-authenticated, embassy-accepted. Same-day delivery from Gurugram office.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office provides same-day certificates: INR + any currency, embassy format, UDIN, digital + physical delivery. Walk-in or WhatsApp for fastest turnaround.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted financial certification partner across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Double%20Currency%20Networth%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Networth%20Certificate%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Double%20Currency%20Networth%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Double Currency Networth - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Same-day networth certificates across major Indian cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Networth Certificates</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/double-currency-networth-format/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/double-currency-networth/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/double-currency-networth/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">Financial services</div><div class="pa-cross-grid"><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/fdi-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/tax-planning-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Planning</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/legal-drafting/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Legal Drafting</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. UDIN requirements, embassy-accepted formats, exchange rate sources, and VISA documentation are verified.</p>
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
