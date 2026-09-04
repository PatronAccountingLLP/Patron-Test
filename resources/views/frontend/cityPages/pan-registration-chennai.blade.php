
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>PAN Card Registration in Chennai – Form 49A &amp; Process</title>
    <meta name="description" content="CA-assisted PAN card registration in Chennai. New Form 93/95, individual and company PAN, NRI PAN. Serving OMR, T. Nagar, Adyar. Call +91 945 945 6700.">
    <link rel="canonical" href="/pan-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PAN Card Registration in Chennai – Form 49A &amp; Process">
    <meta property="og:description" content="CA-assisted PAN card registration in Chennai. New Form 93/95, individual and company PAN, NRI PAN. Serving OMR, T. Nagar, Adyar. Call +91 945 945 6700.">
    <meta property="og:url" content="/pan-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PAN Card Registration in Chennai – Form 49A &amp; Process">
    <meta name="twitter:description" content="CA-assisted PAN card registration in Chennai. New Form 93/95, individual and company PAN, NRI PAN. Serving OMR, T. Nagar, Adyar. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "PAN Registration in Chennai",
          "description": "CA-assisted PAN card registration in Chennai. New Form 93/95, individual and company PAN, NRI PAN. Serving OMR, T. Nagar, Adyar. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/pan-registration/chennai",
          "serviceType": "PAN Registration in Chennai",
          "areaServed": {
            "@type": "City",
            "name": "Chennai"
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
            "url": "https://www.patronaccounting.com/pan-registration/chennai",
            "price": "499"
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
              "name": "PAN Registration",
              "item": "https://www.patronaccounting.com/pan-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "PAN Registration Chennai",
              "item": "https://www.patronaccounting.com/pan-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to apply for PAN card in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PAN can be applied online via incometax.gov.in for free instant e-PAN using Aadhaar, or through Protean or UTIITSL portals for physical PAN. From April 2026 use Form 93 for individuals or Form 94 for entities."
              }
            },
            {
              "@type": "Question",
              "name": "Can I get instant PAN online from Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Instant e-PAN is available free on the Income Tax e-filing portal using Aadhaar number and OTP verification. The e-PAN is issued within minutes as a PDF with QR code and is legally valid for all transactions."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for PAN card in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Instant e-PAN via Income Tax portal is free. Physical PAN card costs Rs 107 including GST for Indian addresses. Rs 1,017 for foreign addresses. Patron all-inclusive from Rs 499 for e-PAN and Rs 999 for physical card."
              }
            },
            {
              "@type": "Question",
              "name": "What are the new PAN rules from April 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "From April 2026 new forms apply. Form 93 replaces 49A for individuals and NRIs. Form 94 for entities. Form 95 for foreign citizens. Additional documents beyond Aadhaar are required and PAN name must match Aadhaar exactly."
              }
            }
          ]
        }
      ]
    }
</script>

@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
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
                        PAN Registration in Chennai: CA-Assisted PAN Card Application Online
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar, address proof, date of birth proof, photographs (new rules from April 2026)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Instant e-PAN free via IT portal | Physical PAN Rs 107 | Patron all-inclusive Rs 499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All individuals, companies, LLPs, partnerships, trusts, HUFs, NRIs, foreign citizens</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Instant e-PAN (same day) | Physical PAN 7-15 working days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'PAN Registration in Chennai',
                                            'city'     => 'Chennai',
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
    'ctaText'    => 'Get expert CA assistance for PAN registration in Chennai. From application filing to post-PAN compliance, we handle everything.',
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
            <a href="#overview-section" class="toc-pill">Overview</a>
            <a href="#what-section" class="toc-pill">What Is PAN</a>
            <a href="#who-section" class="toc-pill">Who Needs It</a>
            <a href="#services-section" class="toc-pill">Services Included</a>
            <a href="#procedure-section" class="toc-pill">6-Step Process</a>
            <a href="#documents-section" class="toc-pill">Documents Required</a>
            <a href="#challenges-section" class="toc-pill">Common Challenges</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Why Patron</a>
            <a href="#comparison-section" class="toc-pill">Individual vs Entity PAN</a>
            <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration in Chennai: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PAN Registration in Chennai Services at a Glance</strong></p>
                    <p>PAN (Permanent Account Number) is a 10-digit alphanumeric identifier issued by the Income Tax Department, mandatory for filing income tax returns, opening bank accounts, purchasing property, and conducting financial transactions above specified limits. Individual PAN is applied via Form 93 (replacing Form 49A from April 2026) through the Protean or UTIITSL portals. Instant e-PAN is available free through the IT e-filing portal using Aadhaar.</p>
                </div>
                <p>Chennai's population of over 10 million includes millions of taxpayers, business owners, property investors, and financial services professionals - all requiring PAN. From salaried IT professionals on OMR filing ITR for the first time to startup founders incorporating companies in T. Nagar, NRIs purchasing apartments in Adyar, and freelancers billing international clients - PAN is the foundational identity for every financial transaction.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Income Tax Act, 1961 - Section 139A</td></tr>
                        <tr><td>Authority</td><td>Income Tax Department | Protean (formerly NSDL eGov) | UTIITSL</td></tr>
                        <tr><td>Forms (from April 2026)</td><td>Form 93 (individuals, HUF, NRI) | Form 94 (entities) | Form 95 (foreign citizens)</td></tr>
                        <tr><td>PAN Format</td><td>AAAPL1234C (5 letters + 4 digits + 1 letter)</td></tr>
                        <tr><td>Instant e-PAN</td><td>Free via incometax.gov.in using Aadhaar OTP</td></tr>
                        <tr><td>Physical PAN Fee</td><td>Rs 107 (Indian address) | Rs 1,017 (foreign address)</td></tr>
                        <tr><td>Timeline</td><td>Instant (e-PAN) | 7-15 working days (physical card)</td></tr>
                        <tr><td>PAN-Aadhaar Link</td><td>Mandatory under Section 139AA</td></tr>
                        <tr><td>One PAN Rule</td><td>One PAN per person/entity - penalty Rs 10,000 for duplicate PAN</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>PAN is mandatory for property transactions in Chennai (stamp duty of 7% requires PAN disclosure), opening bank accounts (RBI KYC norms), mutual fund investments, and any cash deposit above Rs 50,000. For businesses, PAN is required for GST registration, TDS compliance, company incorporation, and IEC application. Patron Accounting's CA team handles the complete <a href="/pan-registration">PAN registration</a> process - from form selection (new Forms 93/94/95 from April 2026), document preparation, Protean/UTIITSL portal filing, and Aadhaar-based verification. Post-PAN, the same CA manages <a href="/income-tax-return">ITR filing</a>, <a href="/gst-registration">GST registration</a>, and TDS compliance.</p>
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
                <h2 class="section-title">What Is PAN Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PAN registration is the process of applying for and obtaining a Permanent Account Number - a 10-digit alphanumeric identifier issued by the Income Tax Department under Section 139A of the Income Tax Act, 1961 - used as a universal financial identity for tax and transaction purposes.</p>
                    <p>The PAN is structured as five letters, four digits, and one letter (e.g., AAAPL1234C). The fourth character indicates the entity type: P for individual, C for company, F for firm, T for trust, H for HUF. PAN is issued through two authorised agencies: Protean (formerly NSDL eGov) and UTIITSL. From April 1, 2026, new application forms have been introduced - Form 93 replaces Form 49A for individuals and NRIs, Form 94 for entities, and Form 95 for foreign citizens.</p>
                    <p>For Chennai, PAN registration serves as the gateway to the formal financial system. Every property transaction registered with the Sub-Registrar in Chennai requires PAN disclosure - without it, the 7% stamp duty registration process cannot proceed. Banks in Chennai require PAN for account opening under RBI KYC norms. Chennai's IT professionals filing ITR for HRA claims, freelancers declaring professional income, and NRIs receiving rental income from Chennai properties all need PAN. Protean and UTIITSL operate multiple TIN-FCs across Chennai in T. Nagar, Anna Salai, and Adyar.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PAN Registration in Chennai:</strong></p>
                    <ul>
                        <li><strong>PAN:</strong> Permanent Account Number - 10-digit alphanumeric identifier from Income Tax Department.</li>
                        <li><strong>Form 93:</strong> New PAN application form for individuals, HUF, and NRIs (replacing Form 49A from April 2026).</li>
                        <li><strong>Form 94:</strong> New PAN application form for entities - companies, firms, trusts, LLPs.</li>
                        <li><strong>Form 95:</strong> New PAN application form for foreign citizens (replacing Form 49AA).</li>
                        <li><strong>e-PAN:</strong> Digital PAN card in PDF format with QR code, issued instantly via Income Tax portal.</li>
                        <li><strong>Section 139AA:</strong> Mandatory PAN-Aadhaar linking provision of Income Tax Act.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAN Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Instant e-PAN Free</span>
                        <strong>New Forms from April 2026</strong>
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
            <h2 class="section-title">Who Needs PAN Registration in Chennai?</h2>
            <div class="content-text">
                
                <h3>First-Time Taxpayers and Salaried Employees</h3>
                <p>Young professionals joining IT companies on OMR, BPOs in Ambattur, and banks on Anna Salai need PAN for TDS deduction and ITR filing. Employers require PAN at the time of joining for Form 16 issuance.</p>
                <h3>Startup Founders and Company Directors</h3>
                <p>Directors of newly incorporated companies and LLPs need individual PAN before company incorporation (PAN is mandatory for DIN application). Company PAN is issued as part of SPICe+ for new Pvt Ltd companies. Consider <a href="/private-limited-company-registration/chennai">Private Limited Company Registration in Chennai</a> alongside PAN.</p>
                <h3>NRIs with Chennai Property and Investments</h3>
                <p>NRIs purchasing apartments in Adyar, OMR, and Nungambakkam need PAN for property registration (7% stamp duty in Chennai mandates PAN disclosure). NRIs receiving rental income from Chennai properties need PAN for <a href="/income-tax-return/chennai">ITR filing in Chennai</a> and TDS compliance.</p>
                <h3>Freelancers and Professionals on OMR</h3>
                <p>IT freelancers, consultants, and gig workers billing clients need PAN for professional income declaration, advance tax payment, and <a href="/gst-registration/chennai">GST registration in Chennai</a>. Without PAN, higher TDS at 20% is deducted under Section 206AA.</p>
                <h3>Property Buyers and Sellers in Chennai</h3>
                <p>Any property transaction in Chennai requires PAN of both buyer and seller. The Sub-Registrar's office requires PAN for computing stamp duty and registration charges. Transactions above Rs 50 lakh mandate PAN quoting on Form 26QB.</p>
                <h3>Trusts, Societies, and NGOs</h3>
                <p>Charitable trusts, societies under TN Societies Registration Act, and Section 8 companies need entity PAN for 12A/80G registration, bank account opening, and ITR-7 filing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Form Selection (New 2026 Rules)</td><td>CA determines the correct form: Form 93 (individuals, HUF, NRI), Form 94 (companies, firms, trusts, LLPs), or Form 95 (foreign citizens)</td></tr>
                        <tr><td>Document Preparation</td><td>Aadhaar + additional ID proof (from April 2026), address proof, date of birth proof, photographs, and entity documents as applicable</td></tr>
                        <tr><td>Online Application Filing</td><td>Application filed on Protean or UTIITSL portal with complete details and document upload</td></tr>
                        <tr><td>Aadhaar-Based e-Verification</td><td>Aadhaar OTP-based verification to eliminate physical document submission. Instant e-PAN via incometax.gov.in</td></tr>
                        <tr><td>PAN Card Delivery</td><td>e-PAN delivered via email (PDF) within minutes for instant applications. Physical card dispatched to Chennai address in 7-15 working days</td></tr>
                        <tr><td>PAN-Aadhaar Linking</td><td>Mandatory linking under Section 139AA. Patron verifies linking status and completes linking if pending</td></tr>
                        <tr><td>Company/Entity PAN</td><td>For newly incorporated companies, PAN issued via SPICe+ by RoC Chennai. For firms, trusts, societies - separate application on Protean/UTIITSL</td></tr>
                        <tr><td>Post-PAN Compliance</td><td>ITR filing, GST registration, TAN application (for TDS), bank KYC update with new PAN details</td></tr>

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
            <h2 class="section-title">PAN Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA from Patron's pan-India team handles the complete PAN registration process online. No visit to any IT office or TIN-FC required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine Application Route and Form Type</h3>
        <p class="step-description">Your CA determines the optimal route: Instant e-PAN via Income Tax portal (free, using Aadhaar), or full application via Protean/UTIITSL portal (for physical card, entity PAN). From April 1, 2026, new forms apply: Form 93 for individuals and NRIs, Form 94 for entities, Form 95 for foreign citizens.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Route Selected</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct Form</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Route Selected</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Collect and Verify Documents per New 2026 Rules</h3>
        <p class="step-description">From April 2026, Aadhaar alone is not sufficient. Additional documents required: voter ID, passport, or birth certificate for DOB proof. Name on PAN must match Aadhaar exactly. CA collects: Aadhaar, one additional ID proof, address proof, DOB proof, and photographs. For company PAN: certificate of incorporation from RoC Chennai.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New 2026 Docs</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name Matching</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">Documents Verified</div>
            <span class="illustration-label"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="60" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="45" width="60" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><circle cx="60" cy="88" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M57 88l3 3 5-5" stroke="#25D366" stroke-width="2"/></svg></span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">File Application Online (Protean/UTIITSL/IT Portal)</h3>
        <p class="step-description">For instant e-PAN: filed on incometax.gov.in using Aadhaar and OTP. e-PAN issued within minutes as PDF with QR code. For physical or entity PAN: application filed on Protean portal with Form 93/94/95. Fee of Rs 107 paid online. Acknowledgment number generated for tracking.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Application Filed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fee Paid</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="40" width="50" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M60 72v12" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="88" r="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/></svg></div>
            <span class="illustration-label">Portal Filed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Aadhaar e-Verification or Document Submission</h3>
        <p class="step-description">For Aadhaar-based e-verification: OTP sent to Aadhaar-linked mobile. Upon successful verification, no physical documents needed. For non-Aadhaar route: signed application with documents sent to Protean/UTIITSL via courier within 15 days.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP Verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>No Courier Needed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="15" width="60" height="45" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="41" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text><path d="M40 75l20-8 20 8" stroke="#25D366" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Verified</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Receive PAN Number and e-PAN/Physical Card</h3>
        <p class="step-description">Instant e-PAN: PAN number allotted immediately, PDF emailed within minutes. Physical PAN: number allotted within 5-7 days, card dispatched to Chennai address within 7-15 working days. PAN number can be used immediately - e-PAN is legally valid.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN Allotted</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Card Dispatched</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 37l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="72" width="50" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAN CARD</text></svg></div>
            <span class="illustration-label">PAN Issued</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Complete PAN-Aadhaar Linking and Post-PAN Compliance</h3>
        <p class="step-description">Patron verifies PAN-Aadhaar linking (mandatory under Section 139AA). Post-PAN: ITR filing setup, TAN application, GST registration, bank KYC update with PAN, and property transaction readiness. For company PAN via SPICe+, complete compliance calendar established.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar Linked</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance Set</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="30" x2="85" y2="30" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="35" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="35" y1="54" x2="85" y2="54" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="42" cy="36" r="4" fill="#F5A623"/><circle cx="60" cy="48" r="4" fill="#25D366"/><circle cx="78" cy="24" r="4" fill="#E8712C"/></svg></div>
            <span class="illustration-label">Compliance Active</span>
            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for PAN Registration in Chennai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Aadhaar Card:</strong> Mandatory for e-verification and instant e-PAN. Name on PAN must match Aadhaar from April 2026.</li>
                    <li><strong>Additional ID Proof (from April 2026):</strong> Voter ID / Passport / Driving Licence - now required alongside Aadhaar.</li>
                    <li><strong>Date of Birth Proof:</strong> Birth certificate / passport / matriculation certificate / Aadhaar (if DOB printed).</li>
                    <li><strong>Address Proof:</strong> Aadhaar / voter ID / TNEB electricity bill / passport / bank statement with Chennai address.</li>
                    <li><strong>Passport-Size Photographs:</strong> Two recent colour photographs.</li>
                    <li><strong>For Company/LLP PAN:</strong> Certificate of Incorporation from RoC Chennai, MOA/AOA or LLP Agreement, registered office proof.</li>
                    <li><strong>For Trust/Society PAN:</strong> Trust deed / society registration certificate, registered office proof, PAN of trustees/members.</li>
                    <li><strong>For NRI PAN:</strong> Passport (mandatory), overseas address proof, Indian address proof (if applicable). Aadhaar not mandatory for NRIs.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Chennai-Specific Tip:</strong> Many Chennai residents have name variations between Aadhaar and other documents (initials expanded differently). From April 2026, PAN name must match Aadhaar exactly. Correct any Aadhaar name discrepancies at the nearest Aadhaar Enrolment Centre in Chennai before applying for PAN. Patron flags mismatches during document review.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common PAN Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>PAN-Aadhaar Name Mismatch</td><td>Initial-based vs expanded names causes linking failure and PAN becomes inoperative</td><td>Identifies and resolves mismatches before filing. Coordinates Aadhaar correction</td></tr>
                        <tr><td>New Form 93/95 Confusion (April 2026)</td><td>Old forms rejected after March 31, 2026. Many agents use outdated forms</td><td>Uses correct new forms for all applications from April 2026</td></tr>
                        <tr><td>Duplicate PAN Penalty</td><td>Rs 10,000 penalty under Section 272B for multiple PANs</td><td>Checks for existing PAN before new application; assists with duplicate surrender</td></tr>
                        <tr><td>NRI PAN for Chennai Property</td><td>Without PAN, Sub-Registrar applies 20% TDS on property under Section 206AA</td><td>Coordinates NRI PAN application remotely before property registration</td></tr>
                        <tr><td>Company PAN Delay After Incorporation</td><td>PAN activation on IT portal may take 2-3 weeks after CIN allotment - blocks GST registration</td><td>Tracks PAN activation and escalates if delayed</td></tr>

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
            <h2 class="section-title">PAN Registration Fees in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Instant e-PAN (via incometax.gov.in)</td><td>FREE (Govt) | Rs 499 Patron CA-assisted filing</td></tr>
                        <tr><td>Physical PAN Card (Indian address)</td><td>Rs 107 (Govt) | INR 499 (Exl GST and Govt. Charges) Patron Professional Fees</td></tr>
                        <tr><td>Physical PAN Card (Foreign address - NRI)</td><td>Rs 1,017 (Govt) | Rs 2,999 Patron all-inclusive</td></tr>
                        <tr><td>Company/LLP PAN (via SPICe+)</td><td>Included in incorporation package</td></tr>
                        <tr><td>Entity PAN (Trust/Society/Firm)</td><td>Rs 107 (Govt) | Rs 999 Patron</td></tr>
                        <tr><td>PAN Correction/Reprint</td><td>Rs 107 (Govt) | Rs 999 Patron</td></tr>
                        <tr><td>PAN-Aadhaar Linking</td><td>FREE on IT portal | Rs 499 if CA assistance needed</td></tr>
                        <tr><td>Duplicate PAN Surrender</td><td>FREE | Rs 499 Patron</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PAN Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PAN Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Instant e-PAN (IT portal)</td><td>Same day (minutes)</td></tr>
                        <tr><td>Physical PAN (Protean/UTIITSL)</td><td>7-15 working days</td></tr>
                        <tr><td>Company PAN (SPICe+)</td><td>Part of incorporation; IT portal activation 1-2 weeks</td></tr>
                        <tr><td>Entity PAN (Trust/Society)</td><td>7-15 working days</td></tr>
                        <tr><td>NRI PAN</td><td>10-21 working days</td></tr>
                        <tr><td>PAN Correction</td><td>7-15 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Processing Note (Group B):</strong> PAN registration is entirely online. No visit to any Income Tax office or TIN-FC required for e-PAN or Aadhaar-verified applications. Physical card is delivered to your Chennai address by post. Patron handles all filing digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for PAN Registration in Chennai?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led with Tax Integration</h3><p>PAN is the foundation for your entire tax life. Patron's CA connects PAN registration with ITR filing, GST registration, TDS compliance, and property transaction advisory.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>New 2026 Rules Compliance</h3><p>Patron uses correct Form 93/94/95 from April 2026, ensures new document requirements are met, and verifies PAN-Aadhaar name matching before filing.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. NRIs in the US, UK, and Middle East applying for Chennai property PAN get coordinated remote support.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/></svg></div><h3>Entity PAN Expertise</h3><p>Company, LLP, partnership, trust, and society PAN applications require specific entity documents and correct form selection. Patron handles entity PAN as part of comprehensive business setup.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;">
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div>
                </div>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai through a digital-first CA team. We combine PAN registration with ITR filing, GST, TDS, and property transaction advisory from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Individual PAN vs Entity PAN: Chennai Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Individual PAN</th><th>Company/Entity PAN</th></tr></thead>
                    <tbody>
                        <tr><td>Form</td><td>Form 93 (from April 2026)</td><td>Form 94 (from April 2026)</td></tr>
                        <tr><td>4th Character</td><td>P (Person)</td><td>C (Company), F (Firm), T (Trust), H (HUF)</td></tr>
                        <tr><td>Authority</td><td>Protean / UTIITSL / IT Portal</td><td>Protean / UTIITSL / RoC (via SPICe+)</td></tr>
                        <tr><td>Instant e-PAN</td><td>Yes (via incometax.gov.in with Aadhaar)</td><td>Not available - standard processing only</td></tr>
                        <tr><td>Documents</td><td>Aadhaar + additional ID (from April 2026)</td><td>Incorporation certificate + registered office proof</td></tr>
                        <tr><td>Chennai Use</td><td>ITR, bank KYC, property, salary</td><td>GST, company tax, TDS, contracts</td></tr>
                        <tr><td>Timeline</td><td>Instant to 15 days</td><td>7-15 days (or via SPICe+ with incorporation)</td></tr>

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
                
                <ul>
                    <li><a href="/pan-registration">PAN Registration in India</a> - Parent national service page for PAN registration across all states</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - ITR filing for individuals, businesses, and companies</li>
                    <li><a href="/gst-registration">GST Registration</a> - GSTIN required for businesses above threshold</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Company incorporation with PAN via SPICe+</li>
                    <li><a href="/tds-return">TDS Returns</a> - TDS compliance requiring PAN</li>
                    <li><a href="/llp-incorporation">LLP Registration</a> - LLP incorporation with entity PAN</li>
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
                    <li>Income Tax Act, 1961 - Section 139A (mandatory PAN)</li>
                    <li>Income Tax Act - Section 139AA (PAN-Aadhaar linking)</li>
                    <li>Income Tax Act - Section 206AA (higher TDS at 20% without PAN)</li>
                    <li>Income Tax Act - Section 272B (penalty Rs 10,000 for duplicate PAN)</li>
                    <li>New Forms 93, 94, 95 effective from April 1, 2026 (replacing 49A/49AA)</li>
                    <li>PAN 2.0 (upgraded PAN ecosystem announced by Government of India)</li>
                </ul>
                <h3>Transactions Requiring PAN</h3>
                <ul>
                    <li>ITR filing (mandatory)</li>
                    <li>Property purchase/sale above Rs 10 lakh (Chennai: 7% stamp duty registration requires PAN)</li>
                    <li>Bank account opening (RBI KYC norms)</li>
                    <li>Cash deposit above Rs 50,000 in bank</li>
                    <li>Mutual fund investments above Rs 50,000</li>
                    <li>GST registration and company/LLP incorporation (director DIN requires PAN)</li>
                </ul>
                <h3>Penalties</h3>
                <ul>
                    <li>Duplicate PAN: Rs 10,000 under Section 272B</li>
                    <li>Non-quoting of PAN: Higher TDS at 20% under Section 206AA</li>
                    <li>PAN-Aadhaar not linked: PAN becomes inoperative</li>
                </ul>
                <p><strong>Authority:</strong> Income Tax Department - <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | Protean - <a href="https://onlineservices.proteantech.in" target="_blank" rel="noopener">onlineservices.proteantech.in</a> | UTIITSL - <a href="https://pan.utiitsl.com" target="_blank" rel="noopener">pan.utiitsl.com</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: PAN Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about PAN card registration in Chennai, covering new 2026 rules, fees, timeline, and PAN-Aadhaar linking.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PAN Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to apply for PAN card in Chennai?</h3>
                        <div class="faq-expanded__a"><p>PAN card can be applied online through incometax.gov.in for instant free e-PAN using Aadhaar, or through Protean or UTIITSL portals for physical PAN card. From April 2026, use Form 93 (individuals) or Form 94 (entities). Patron handles the complete application digitally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get instant PAN online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Instant e-PAN is available free through the Income Tax e-filing portal using your Aadhaar number and OTP verification. The e-PAN is issued within minutes as a PDF with QR code and is legally valid for all financial transactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for PAN card in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Instant e-PAN via Income Tax portal is free. Physical PAN costs Rs 107 including GST for Indian addresses and Rs 1,017 for foreign addresses. Patron all-inclusive professional fee is Rs 499 for e-PAN and Rs 999 for physical PAN card processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does PAN card take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Instant e-PAN is issued within minutes using Aadhaar. Physical PAN takes 7-15 working days: 5-7 days for allotment and 7-10 days for card dispatch to your Chennai address. NRI PAN may take 10-21 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PAN-Aadhaar linking mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes. PAN-Aadhaar linking is mandatory under Section 139AA. Unlinked PAN becomes inoperative - you cannot file ITR, receive refunds, or use PAN for financial transactions. A late linking fee of Rs 1,000 applies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the new PAN rules from April 2026?</h3>
                        <div class="faq-expanded__a"><p>From April 2026, new forms apply: Form 93 (replacing 49A) for individuals and NRIs, Form 94 for entities, Form 95 (replacing 49AA) for foreign citizens. Additional documents beyond Aadhaar are required and PAN name must match Aadhaar exactly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can NRI get PAN card from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs can apply using Form 93 through Protean or UTIITSL portals. Aadhaar not required for NRIs. Documents needed: passport, overseas address proof. PAN is essential for Chennai property purchase, NRE/NRO accounts, and ITR filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if I have duplicate PAN?</h3>
                        <div class="faq-expanded__a"><p>Having more than one PAN attracts Rs 10,000 penalty under Section 272B. Surrender the additional PAN by filing a change request on Protean/UTIITSL portal. Patron identifies duplicates and manages the surrender process.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein PAN card kaise banaye?</strong> incometax.gov.in par Aadhaar se instant e-PAN free mil jaata hai. Physical card ke liye Protean/UTIITSL par Form 93 file karo - Rs 107 fee, 7-15 din mein card aata hai.</p>
                <p><strong>April 2026 se kya badla?</strong> Naye forms aaye hain - Form 93 (individual), Form 94 (company). Aadhaar ke saath additional document bhi chahiye ab. PAN naam Aadhaar se match hona zaroori hai.</p>
                <p><strong>PAN-Aadhaar link zaroori hai kya?</strong> Haan. Link nahi kiya toh PAN inoperative ho jaata hai - ITR file nahi hoga, refund nahi milega, bank transactions nahi honge.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your PAN Registration in Chennai</h2>
            <div class="content-text">
                
                <p>Without PAN, you cannot file income tax returns, open a bank account, purchase property in Chennai (7% stamp duty registration requires PAN), register for GST, or incorporate a company. Non-quoting of PAN triggers 20% TDS under Section 206AA. PAN-Aadhaar unlinking makes PAN inoperative. From April 2026, new form and document rules apply - using old forms leads to rejection. Every day without PAN is a day of financial transactions at higher TDS rates and blocked access to the formal financial system.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get PAN Registration in Chennai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">PAN registration in Chennai is the foundational step for every financial and tax-related transaction - from ITR filing and bank account opening to property registration and GST compliance. With instant free e-PAN available via the Income Tax portal and physical PAN at Rs 107, the process is accessible to every Chennai resident, business, and NRI investor.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting serves Chennai residents and businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles PAN application with the correct 2026 forms, PAN-Aadhaar verification, and ongoing ITR, GST, and TDS compliance.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PAN%20Registration%20in%20Chennai&body=Hello%2C%20I%20just%20visited%20your%20PAN%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PAN Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted PAN card registration services in major cities across India.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/pan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/pan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/pan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/pan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/pan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/pan-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/pan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Chennai</div>
                <div class="pa-block-sub">End-to-end support for PAN Registration in Chennai</div>
                <div class="pa-cross-grid">
                    <a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/private-limited-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/llp-incorporation/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly for accuracy. PAN registration rules, forms, and compliance requirements are subject to change via Income Tax notifications and CBDT circulars. Content updated to reflect new Forms 93/94/95 effective April 2026. Freshness Tier 1.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
