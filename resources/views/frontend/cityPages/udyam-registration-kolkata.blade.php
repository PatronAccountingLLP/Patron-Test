
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Udyam Registration in Kolkata – MSME Certificate &amp; Benefits</title>
    <meta name="description" content="CA-assisted Udyam MSME registration in Kolkata. Free govt process. CGTMSE loans, GeM, subsidies. Serving Burrabazar, Salt Lake. Call +91 945 945 6700.">
    <link rel="canonical" href="/udyam-registration/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Udyam Registration in Kolkata – MSME Certificate &amp; Benefits">
    <meta property="og:description" content="CA-assisted Udyam MSME registration in Kolkata. Free govt process. CGTMSE loans, GeM, subsidies. Serving Burrabazar, Salt Lake. Call +91 945 945 6700.">
    <meta property="og:url" content="/udyam-registration/kolkata">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Udyam Registration in Kolkata – MSME Certificate &amp; Benefits">
    <meta name="twitter:description" content="CA-assisted Udyam MSME registration in Kolkata. Free govt process. CGTMSE loans, GeM, subsidies. Serving Burrabazar, Salt Lake. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Udyam MSME Registration Services in Kolkata",
          "description": "CA-assisted Udyam MSME registration in Kolkata. Free govt process. CGTMSE loans, GeM, subsidies. Serving Burrabazar, Salt Lake. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/udyam-registration/kolkata",
          "serviceType": "Udyam MSME Registration Services in Kolkata",
          "areaServed": {
            "@type": "City",
            "name": "Kolkata"
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
            "url": "https://www.patronaccounting.com/udyam-registration/kolkata",
            "price": "1999"
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
              "name": "Udyam Registration",
              "item": "https://www.patronaccounting.com/udyam-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Udyam Registration in Kolkata",
              "item": "https://www.patronaccounting.com/udyam-registration/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to register for Udyam in Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Visit the official Udyam portal (udyamregistration.gov.in). Enter Aadhaar, verify OTP, enter PAN and GSTIN, provide business details and NIC code, and submit. Free, paperless, and instant."
              }
            },
            {
              "@type": "Question",
              "name": "Is Udyam registration free in Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Udyam registration on the official government portal is completely free. Beware of private websites that charge fees."
              }
            },
            {
              "@type": "Question",
              "name": "What are the benefits of Udyam for Kolkata businesses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CGTMSE collateral-free loans up to Rs 2 crore, priority bank lending, GeM seller registration, 45-day payment protection under MSMED Act, WB Banglashree subsidies, MUDRA loans, and tender EMD exemptions."
              }
            },
            {
              "@type": "Question",
              "name": "What is the MSME classification?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Micro: Investment up to Rs 1 Cr + Turnover up to Rs 5 Cr. Small: up to Rs 10 Cr + up to Rs 50 Cr. Medium: up to Rs 50 Cr + up to Rs 250 Cr. Export turnover is excluded."
              }
            },
            {
              "@type": "Question",
              "name": "Is Udyam registration mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not legally mandatory, but essential for accessing MSME benefits like CGTMSE loans, GeM, payment protection, and government subsidies."
              }
            },
            {
              "@type": "Question",
              "name": "How long does Udyam registration take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Typically instant - URN and certificate generated within minutes to hours. In some cases, verification may take 1-3 working days."
              }
            },
            {
              "@type": "Question",
              "name": "Does Udyam registration expire?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Udyam registration has lifetime validity with no renewal requirement. Investment and turnover figures should be updated annually."
              }
            },
            {
              "@type": "Question",
              "name": "Can wholesale traders in Kolkata get Udyam?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Since July 2021, wholesale and retail trade is covered under MSME classification. Burrabazar traders and other Kolkata trading businesses can register."
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
                        Udyam Registration in Kolkata - CA-Assisted MSME Certificate for Every Business
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Aadhaar, PAN, GSTIN (if any), business details</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Completely FREE (no govt fee) - CA fee from Rs 1,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All MSMEs - manufacturing, services, trading</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Same day to 1-3 working days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'Udyam Registration in Kolkata',
                                            'city'     => 'Kolkata',
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
    'ctaText'    => 'Join 10,000+ businesses who trust Patron Accounting',
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
            <a href="#overview-section" class="toc-btn">Overview</a>
                <a href="#what-is-section" class="toc-btn">What is Udyam</a>
                <a href="#who-section" class="toc-btn">Who Needs It</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Timeline</a>
                <a href="#benefits-section" class="toc-btn">Benefits</a>
                <a href="#comparison-section" class="toc-btn">Comparison</a>
                <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration in Kolkata - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Udyam Registration in Kolkata Services at a Glance</strong></p>
                    <p><p>Udyam registration in Kolkata is the official process of registering a business as a Micro, Small, or Medium Enterprise (MSME) with the Ministry of MSME through the Udyam portal (udyamregistration.gov.in). The registration is free, 100% online, paperless, and based on Aadhaar OTP verification. Once registered, the enterprise receives a permanent Udyam Registration Number (URN) starting with UDYAM-WB and a digital certificate with QR code - unlocking collateral-free bank loans, government tender preference, delayed payment protection, and state/central subsidies.</p></p>
                </div>
                <p><p>Kolkata's MSME ecosystem is one of eastern India's largest. Burrabazar hosts thousands of wholesale traders in textiles, spices, FMCG, and jute products. Taratala and Howrah have a dense concentration of small and medium manufacturers in engineering, auto components, plastics, and food processing. Salt Lake Sector V and New Town house IT and services firms ranging from startups to mid-sized enterprises. Park Street and College Street have retail and services businesses. Kolkata Port and Netaji Subhas Dock support export-oriented MSMEs. Learn more about <a href="/udyam-registration">Udyam Registration across India</a>.</p></p>
                <p><p>Udyam registration transforms these businesses from informal operators to formally recognised MSMEs - unlocking CGTMSE collateral-free loans up to Rs 2 crore, MUDRA loans, priority lending from banks at lower interest rates, GeM seller registration for government procurement, 45-day payment protection under the MSMED Act, and West Bengal's Banglashree capital subsidy scheme for manufacturers. After Udyam registration, you may also need <a href="/gst-registration">GST Registration</a> and <a href="/accounting-services">Accounting Services</a> for your MSME.</p></p>
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
                <h2 class="section-title">What is Udyam Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Udyam registration is the official government process of registering a business as a Micro, Small, or Medium Enterprise under the MSMED Act, 2006 through the Udyam portal, providing a permanent Udyam Registration Number and digital certificate.</p>
                <p>Launched on 1 July 2020, Udyam registration replaced the earlier Udyog Aadhaar (UAM) system. It is fully online, paperless, free, and Aadhaar-based. The portal auto-verifies enterprise data by pulling PAN-linked investment and turnover figures from the Income Tax and GST databases. No documents need to be uploaded. The enterprise is classified as Micro, Small, or Medium based on composite criteria of investment in plant and machinery/equipment and annual turnover. Export turnover is excluded from the turnover calculation - a significant advantage for Kolkata exporters.</p>
                <p>For Kolkata businesses - whether a family-owned textile trading firm in Burrabazar, a precision engineering workshop in Howrah, a SaaS startup in New Town, a Bengali sweet manufacturer in Bhowanipore, or a freelance IT consultant in Salt Lake - Udyam registration provides formal MSME identity that banks, government platforms, and corporate buyers recognise and trust.</p>
                <p>If your business also needs <a href="/gst-registration">GST Registration</a> or <a href="/trademark-registration">Trademark Registration</a>, Patron handles these alongside Udyam as part of an integrated compliance package.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Udyam Registration in Kolkata:</strong></p>
                    <ul>
                    <li><strong>Udyam Registration Number (URN):</strong> Permanent MSME identifier in format UDYAM-WB-XX-XXXXXXX</li>
                    <li><strong>MSME Classification:</strong> Micro (Investment up to Rs 1 Cr + Turnover up to Rs 5 Cr), Small (up to Rs 10 Cr + up to Rs 50 Cr), Medium (up to Rs 50 Cr + up to Rs 250 Cr)</li>
                    <li><strong>NIC Code:</strong> 5-digit National Industrial Classification code for business activity identification</li>
                    <li><strong>CGTMSE:</strong> Credit Guarantee Fund Trust providing collateral-free loans up to Rs 2 crore</li>
                    <li><strong>GeM:</strong> Government e-Marketplace for selling to government departments</li>
                    <li><strong>MSME Samadhaan:</strong> Portal for filing delayed payment complaints (45-day protection)</li>
                    <li><strong>Banglashree:</strong> WB state scheme for manufacturing MSME capital subsidies</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Udyam Registration in Kolkata</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>MSME Certified</span>
                        <strong>Udyam Certificate</strong>
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
            <h2 class="section-title">Who Needs Udyam Registration in Kolkata?</h2>
            <div class="content-text">
                
                <p>Any enterprise in Kolkata involved in manufacturing, services, or trading with investment and turnover within MSME limits should register under Udyam. While not legally mandatory, Udyam is essential for accessing MSME-specific benefits.</p>
                <ul>
                    <li><strong>Manufacturers in Taratala and Howrah</strong> producing engineering goods, auto components, plastics, food products need Udyam for CGTMSE loans, WB Banglashree subsidies, and GeM procurement orders</li>
                    <li><strong>Wholesale traders in Burrabazar</strong> dealing in textiles, spices, jute, FMCG products need Udyam for 45-day payment protection under MSMED Act Section 15</li>
                    <li><strong>IT and services firms in Salt Lake and New Town</strong> including SaaS companies, consulting firms, digital agencies, and freelancers need Udyam for priority bank lending and GeM registration</li>
                    <li><strong>Export-oriented MSMEs</strong> benefit from export turnover exclusion - a Kolkata jute exporter with Rs 100 Cr export and Rs 10 Cr domestic turnover stays in Small category</li>
                    <li><strong>Retail businesses in College Street and Park Street</strong> can register since July 2021 when wholesale and retail trade was included in MSME classification</li>
                    <li><strong>Home-based businesses and freelancers</strong> qualify as Micro enterprises and access MUDRA loans and priority lending</li>
                </ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>MSME Classification Assessment</td><td>CA assesses investment and turnover to determine Micro, Small, or Medium classification. For multi-activity businesses, primary activity identified for NIC code.</td></tr>
                        <tr><td>NIC Code Selection</td><td>Correct 5-digit NIC code mapped to Kolkata business activity - textile trading (47531), software (62011), food manufacturing (10710), engineering (25990).</td></tr>
                        <tr><td>Udyam Portal Application</td><td>Complete filing on official udyamregistration.gov.in. Aadhaar OTP, PAN validation, GSTIN linkage, business details entered. Paperless - no uploads.</td></tr>
                        <tr><td>Udyam Certificate Download</td><td>Digital certificate with QR code and URN (UDYAM-WB format) downloaded and provided for bank loans and tenders.</td></tr>
                        <tr><td>CGTMSE Loan Facilitation</td><td>CA prepares CGTMSE-linked collateral-free loan application (up to Rs 2 Cr) with Udyam certificate, financials, and business plan.</td></tr>
                        <tr><td>GeM Seller Registration</td><td>MSME registered as seller on Government e-Marketplace for direct access to government procurement orders.</td></tr>
                        <tr><td>MSME Samadhaan Advisory</td><td>Guidance on filing delayed payment complaints. Buyers liable for compound interest at 3x RBI bank rate under Section 16 MSMED Act.</td></tr>
                        <tr><td>WB MSME Policy Advisory</td><td>Banglashree capital subsidies, electricity rebates, DIC Kolkata facilitation, Shilpa Sathi single-window portal access.</td></tr>
                        <tr><td>Annual Udyam Update</td><td>Investment and turnover figures updated annually. Category reclassification handled automatically when figures change.</td></tr>

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
            <h2 class="section-title">Udyam Registration Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team handles the complete Udyam registration for Kolkata businesses - from classification assessment to benefit activation. Filed entirely online on the official Udyam portal.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Gather Business Details and Verify Aadhaar</h3>
        <p class="step-description">Your CA collects business details: legal name, type, PAN, GSTIN, bank account, Kolkata address, employees, investment in plant/machinery, and annual turnover. Aadhaar must have linked mobile for OTP.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar + PAN ready</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN linked (if applicable)</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="28" x2="90" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="42" x2="80" y2="42" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Details Collection</span><span class="step-number-large">01</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Determine MSME Classification and NIC Code</h3>
        <p class="step-description">The CA assesses investment and turnover to classify as Micro, Small, or Medium. Correct NIC code selected - wholesale trade for Burrabazar, software for Salt Lake, manufacturing for Taratala. Export turnover excluded.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Accurate classification</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NIC-2008 code mapping</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="40" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="40" y="44" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NIC</text><rect x="60" y="30" width="30" height="8" rx="2" fill="#E8712C" opacity="0.2"/><rect x="60" y="42" width="25" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Classification</span><span class="step-number-large">02</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">File Application on Official Udyam Portal</h3>
        <p class="step-description">CA files on udyamregistration.gov.in (ONLY official portal). Aadhaar OTP verified, PAN validated against IT database, GSTIN linked for turnover auto-verification. No fee, no document uploads.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Official portal only</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Zero government fee</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="30" y="36" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="30" y="48" width="40" height="6" rx="2" fill="#14365F" opacity="0.15"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Portal Filing</span><span class="step-number-large">03</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Receive Udyam Registration Number and Certificate</h3>
        <p class="step-description">URN in UDYAM-WB-XX-XXXXXXX format allotted immediately or within 1-3 working days. Digital Udyam Certificate with QR code generated. QR code verifiable online by anyone.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Instant to 3 days</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Lifetime validity</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M48 32l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="55" width="60" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="64" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UDYAM-WB</text></svg></div><span class="illustration-label">Certificate</span><span class="step-number-large">04</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Register on GeM and Activate MSME Benefits</h3>
        <p class="step-description">CA registers the MSME as seller on GeM for government procurement. CGTMSE-linked loan applications prepared for SBI, BoB, PNB. WB Banglashree subsidies connected through DIC Kolkata.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GeM + CGTMSE activated</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>WB state subsidies</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="35" height="28" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="50" y="15" width="35" height="28" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="50" width="35" height="28" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="27" y="33" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GeM</text><text x="67" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CGTMSE</text><text x="47" y="68" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Subsidy</text></svg></div><span class="illustration-label">Benefits</span><span class="step-number-large">05</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Annual Update and Ongoing MSME Advisory</h3>
        <p class="step-description">CA updates Udyam data annually with current investment and turnover. Category changes (Micro to Small, etc.) handled automatically. TReDS, ZED certification, and MSME Samadhaan advisory provided.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Annual data update</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payment protection</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="none" stroke="#E8712C" stroke-width="2"/><line x1="60" y1="22" x2="60" y2="35" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="60" y1="35" x2="70" y2="40" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Annual Update</span><span class="step-number-large">06</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents / Information Required for Udyam Registration in Kolkata</h2>
            <div class="content-text">
                
                <p>Udyam registration is paperless - no physical documents need to be uploaded. However, the following information must be accurately provided:</p>
                <ul>
                    <li><strong>Aadhaar number:</strong> Of the proprietor, managing partner/director. Mobile must be linked for OTP.</li>
                    <li><strong>PAN:</strong> Enterprise PAN (company/LLP) or individual PAN (proprietorship). Auto-verified from IT database.</li>
                    <li><strong>GSTIN (if GST-registered):</strong> Turnover data auto-fetched from GST database. Not mandatory if below GST threshold.</li>
                    <li><strong>Business details:</strong> Legal name, type of organisation, date of commencement, Kolkata address, primary activity.</li>
                    <li><strong>NIC Code:</strong> 5-digit National Industrial Classification code. CA selects from the NIC dropdown.</li>
                    <li><strong>Bank account details:</strong> Account number, IFSC code, bank name. Must match enterprise name.</li>
                    <li><strong>Investment in plant and machinery/equipment:</strong> Current value (excluding land, building). Self-declared.</li>
                    <li><strong>Annual turnover:</strong> As per latest ITR or self-declaration. Export turnover excluded.</li>
                    <li><strong>Number of employees:</strong> Current employee count. Self-declared.</li>
                </ul>
                <p><strong>Kolkata-Specific Tip:</strong> Many Burrabazar traders operate as proprietorships without PAN or GSTIN. The Udyam portal allows Aadhaar-only registration, but benefits like CGTMSE loans require PAN and bank account. The CA advises on obtaining PAN and opening a business bank account before or alongside Udyam registration.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Udyam Registration Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Wrong NIC Code Selection</td><td>Affects scheme eligibility and bank loan classification</td><td>CA selects correct code from NIC-2008 directory for the specific Kolkata business activity</td></tr>
                        <tr><td>Investment/Turnover Mismatch</td><td>Portal auto-verifies against IT/GST data; discrepancies cause issues</td><td>CA reconciles figures with IT/GST records before filing</td></tr>
                        <tr><td>Multiple Registration Attempts</td><td>Only one Udyam per enterprise (PAN/Aadhaar linked)</td><td>Multiple activities added within same registration using multiple NIC codes</td></tr>
                        <tr><td>Fake Portal Registrations</td><td>Private websites charge for a free service</td><td>CA ensures filing only on udyamregistration.gov.in (official portal)</td></tr>
                        <tr><td>Exporter Misclassification</td><td>Including export turnover inflates MSME category</td><td>CA calculates correct domestic-only turnover for accurate classification</td></tr>

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
            <h2 class="section-title">Udyam Registration Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Udyam Portal)</td><td>FREE - No charge on official portal</td></tr>
                        <tr><td>Professional Fee (Patron CA)</td><td>Rs 1,999 - Rs 3,999</td></tr>
                        <tr><td>GeM Seller Registration</td><td>Included in post-registration activation</td></tr>
                        <tr><td>CGTMSE Loan Application Assistance</td><td>Rs 3,000 - Rs 5,000</td></tr>
                        <tr><td>WB MSME Policy Advisory</td><td>Included (Banglashree, DIC Kolkata linkage)</td></tr>
                        <tr><td>Annual Udyam Update</td><td>Rs 999 - Rs 1,999</td></tr>
                        <tr><td>Total (Registration)</td><td>Rs 1,999 - Rs 3,999 (one-time)</td></tr>
                        <tr><td>Total (Full MSME Package)</td><td>Rs 5,999 - Rs 10,000</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Udyam Registration in Kolkata consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration Timeline in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Business Details Collection</td><td>Day 1</td></tr>
                        <tr><td>Classification + NIC Code</td><td>Day 1 (CA assesses Micro/Small/Medium)</td></tr>
                        <tr><td>Udyam Portal Filing</td><td>Day 1 (Aadhaar OTP + PAN + submission)</td></tr>
                        <tr><td>URN + Certificate</td><td>Same day to Day 3 (instant or 1-3 working days)</td></tr>
                        <tr><td>GeM + CGTMSE Activation</td><td>Day 3-7 (post-registration benefit setup)</td></tr>
                        <tr><td>Total</td><td>Same day to 3 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> Udyam registration is filed entirely online on the official portal. No visit to any government office, DIC, or bank is required for the registration itself. Your dedicated CA/expert from Patron's pan-India team handles the complete application and post-registration benefit activation.</p>

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
            <h2 class="section-title">Why Choose Patron for Udyam Registration in Kolkata</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Accurate MSME Classification</h3><p class="feature-text">CA assesses investment and turnover for correct Micro/Small/Medium category. Export turnover excluded for Kolkata exporters.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">NIC Code Mapping</h3><p class="feature-text">Correct NIC-2008 code for Burrabazar traders, Salt Lake IT firms, Taratala manufacturers, and export businesses.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">CGTMSE Loan Facilitation</h3><p class="feature-text">Collateral-free loan applications up to Rs 2 crore prepared with Udyam certificate, financials, and business plan.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3 class="feature-title">GeM Seller Onboarding</h3><p class="feature-text">Government e-Marketplace registration for selling products and services directly to central and state departments.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Payment Protection</h3><p class="feature-text">45-day payment enforcement under MSMED Act. MSME Samadhaan portal for delayed payment complaints with penal interest.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3 class="feature-title">WB State Benefits</h3><p class="feature-text">Banglashree capital subsidies, DIC Kolkata facilitation, electricity rebates, and Shilpa Sathi portal access.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p>
                <blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;margin-bottom:8px;">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle."</p><p style="font-weight:700;font-size:13px;color:var(--blue);">- Startup Founder, Pune</p></blockquote>
                <blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;margin-bottom:8px;">"Our GST and compliance filings are always on time since we moved to Patron."</p><p style="font-weight:700;font-size:13px;color:var(--blue);">- CFO, Manufacturing, Maharashtra</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Udyam Agents in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Udyam Agent</th></tr></thead>
                    <tbody>
                        <tr><td>Service Model</td><td>CA-managed - classification + NIC code + portal filing + benefit activation</td><td>Portal data entry only</td></tr>
                        <tr><td>NIC Code</td><td>CA selects correct code from NIC-2008 directory for Kolkata business activity</td><td>Generic code; errors affect loans/schemes</td></tr>
                        <tr><td>CGTMSE/Loans</td><td>CA prepares CGTMSE-linked loan application with Udyam + financials</td><td>Not included</td></tr>
                        <tr><td>GeM Registration</td><td>Seller onboarding included</td><td>Not included</td></tr>
                        <tr><td>WB State Benefits</td><td>Banglashree, DIC Kolkata, state subsidies advisory</td><td>No state benefit awareness</td></tr>
                        <tr><td>Pricing</td><td>From Rs 1,999; full package from Rs 5,999</td><td>Rs 500-1,000 for form only</td></tr>

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
                
                <p>Complete your MSME compliance with these related services:</p>
                <ul>
                    <li><a href="/udyam-registration"><strong>Udyam Registration in India</strong></a> - National-level MSME registration overview and process</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for businesses above GST threshold</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Book-keeping and financial management for MSMEs</li>
                    <li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly GST return filing</li>
                    <li><a href="/iec-registration">IEC Registration</a> - Import Export Code for Kolkata exporters</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand protection for MSMEs</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Udyam Registration - Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Micro, Small and Medium Enterprises Development (MSMED) Act, 2006; Ministry of MSME notification dated 26 June 2020</p>
                <p><strong>Key Sections:</strong> Section 7 - MSME classification; Section 8 - registration; Section 15 - buyer payment within 45 days; Section 16 - penal interest at 3x RBI bank rate; Section 17 - MSME Facilitation Council; Section 27 - punishment for false information</p>
                <p><strong>Portal:</strong> <a href="https://udyamregistration.gov.in" target="_blank" rel="noopener">udyamregistration.gov.in</a> (ONLY official portal); GeM - <a href="https://gem.gov.in" target="_blank" rel="noopener">gem.gov.in</a>; MSME Samadhaan - samadhaan.msme.gov.in</p>
                <p><strong>WB State Benefits:</strong> Banglashree scheme - capital subsidy for manufacturing MSMEs; WB MSME & Textiles Department incentives; DIC Kolkata facilitation; Shilpa Sathi single-window portal</p>
                <p><strong>Classification:</strong> Micro: Investment up to Rs 1 Cr + Turnover up to Rs 5 Cr | Small: up to Rs 10 Cr + up to Rs 50 Cr | Medium: up to Rs 50 Cr + up to Rs 250 Cr. Composite criteria. Export turnover excluded.</p>
                <p><strong>Penalties:</strong> Misrepresentation under Section 27 MSMED Act - cancellation and legal action.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Udyam Registration in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about Udyam MSME registration for Kolkata businesses</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Udyam Registration in Kolkata',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to register for Udyam in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Visit udyamregistration.gov.in. Enter Aadhaar, verify OTP, enter PAN and GSTIN, provide business details and NIC code, and submit. Free, paperless, and instant. Patron's CA handles the complete filing with accurate classification and NIC code selection.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is Udyam registration free in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes. Udyam registration on the official portal is completely free. Beware of private websites that charge fees. Patron's CA fee covers classification assessment, NIC code mapping, and post-registration benefit activation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the benefits of Udyam for Kolkata businesses?</h3>
                        <div class="faq-expanded__a"><p>CGTMSE collateral-free loans up to Rs 2 crore, priority bank lending at lower interest rates, GeM seller registration, 45-day payment protection under MSMED Act, WB Banglashree capital subsidies, MUDRA loans for micro businesses, and tender EMD exemptions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the MSME classification for my Kolkata business?</h3>
                        <div class="faq-expanded__a"><p>Micro: up to Rs 1 Cr investment + up to Rs 5 Cr turnover. Small: up to Rs 10 Cr + up to Rs 50 Cr. Medium: up to Rs 50 Cr + up to Rs 250 Cr. Export turnover is excluded. Patron's CA assesses your exact classification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is Udyam registration mandatory?</h3>
                        <div class="faq-expanded__a"><p>Not legally mandatory, but essential for accessing MSME benefits - CGTMSE loans, GeM, payment protection, and government subsidies. Without Udyam, banks treat you as non-MSME for lending.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does Udyam registration take in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Typically instant - URN and certificate generated within minutes to hours. In some cases, verification may take 1-3 working days. CA files accurate data for instant processing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Does Udyam registration expire?</h3>
                        <div class="faq-expanded__a"><p>No. Udyam registration has lifetime validity with no renewal. The CA updates investment and turnover figures annually for accurate classification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can wholesale traders in Kolkata get Udyam?</h3>
                        <div class="faq-expanded__a"><p>Yes. Since July 2021, wholesale and retail trade is covered under MSME classification. Burrabazar traders, College Street retailers, and other Kolkata trading businesses can register.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Udyam registration kya hai?</strong> Udyam registration se aapka business officially MSME ban jaata hai - government ke Udyam portal pe. Free hai, online hai, aur lifetime valid hai. Certificate mil jaata hai QR code ke saath.</p>
                <p><strong>Kolkata mein Udyam kaise banwayein?</strong> Patron Accounting se sampark karein - +91 945 945 6700. CA udyamregistration.gov.in pe Aadhaar OTP se register karta hai. Same day certificate.</p>
                <p><strong>Kya Udyam free hai?</strong> Haan. Government portal pe bilkul free hai. Koi govt fee nahi.</p>
                <p><strong>Udyam se kya fayda?</strong> CGTMSE se Rs 2 crore tak bina collateral loan, bank se kam interest, GeM pe government orders, 45 din payment protection, WB subsidies.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Udyam Registration</h2>
            <div class="content-text">
                
                <p>Without Udyam, Kolkata businesses cannot access CGTMSE loans, priority bank lending, GeM procurement, or 45-day payment protection. Banks increasingly require the Udyam certificate for MSME-tagged loan products. For manufacturers applying for WB Banglashree subsidies, Udyam is a prerequisite.</p>
                <p>The registration is free and instant - there is no reason to delay. Start the process with CA support to ensure correct classification and maximum benefit access.</p>
                <p><strong>Get Udyam registration done from Kolkata with Patron's CA team. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Udyam MSME Registration in Kolkata - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Udyam registration in Kolkata is the free, online process of obtaining official MSME recognition from the Ministry of MSME. The Udyam certificate with permanent URN unlocks collateral-free bank loans, government procurement access, delayed payment protection, and state/central subsidies.</p>
                <p style="color:rgba(255,255,255,0.85);">Kolkata MSMEs across Burrabazar, Salt Lake, Taratala, Howrah, New Town, and Park Street benefit from CA-managed registration including accurate MSME classification, NIC code mapping, and post-registration activation of CGTMSE loans, GeM, and WB Banglashree scheme.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP is a multi-office CA firm with 15+ years of practice, 10,000+ businesses served, and a 4.9 Google rating. The firm's pan-India CA team delivers Udyam registration for Kolkata MSMEs through a digital-first model.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Udyam%20Registration%20in%20Kolkata&body=Hello%2C%20I%20just%20visited%20your%20Udyam%20Registration%20in%20Kolkata%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Udyam Registration Across Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted Udyam MSME registration in all major cities across India</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-city-grid">
                            <a href="/udyam-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="/udyam-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="/udyam-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/udyam-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                            <a href="/udyam-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                            <a href="/udyam-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                            <a href="/udyam-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services</div>
                        <div class="pa-block-sub">End-to-end MSME support in Kolkata</div>
                        <div class="pa-cross-grid">
                            <a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/startup-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/trademark-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/iec-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/pan-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed by our CA and CS team every 6 months. MSME classification limits, Udyam portal updates, and CGTMSE guidelines are verified against the Ministry of MSME and updated on the published date shown above.</p>
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
