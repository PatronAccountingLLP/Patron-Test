
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>TAN Registration Gurugram - Form 49B, Process & Fees</title>
    <meta name="description" content="CA-assisted TAN registration in Gurugram. Form 49B, Rs 77 fee. TDS compliance for employers, businesses. Serving Cyber City, Udyog Vihar. Call +91 945 945 6700.">
    <link rel="canonical" href="/tan-registration/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TAN Registration Gurugram - Form 49B, Process & Fees">
    <meta property="og:description" content="CA-assisted TAN registration in Gurugram. Form 49B, Rs 77 fee. TDS compliance for employers, businesses. Serving Cyber City, Udyog Vihar. Call +91 945 945 6700.">
    <meta property="og:url" content="/tan-registration/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TAN Registration Gurugram - Form 49B, Process & Fees">
    <meta name="twitter:description" content="CA-assisted TAN registration in Gurugram. Form 49B, Rs 77 fee. TDS compliance for employers, businesses. Serving Cyber City, Udyog Vihar. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "TAN Registration in Gurugram",
      "description": "CA-assisted TAN registration in Gurugram. Form 49B, Rs 77 fee. TDS compliance for employers, businesses. Serving Cyber City, Udyog Vihar. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/tan-registration/gurugram",
      "serviceType": "TAN Registration in Gurugram",
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
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/tan-registration/gurugram",
        "price": "77"
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
          "name": "TAN Registration: Process and Fee",
          "item": "https://www.patronaccounting.com/tan-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "TAN Registration in Gurugram",
          "item": "https://www.patronaccounting.com/tan-registration/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I get TAN in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "File Form 49B on Protean TIN portal (tin.tin.nsdl.com) with entity details, Gurugram address, correct AO code, and Rs 77 fee. TAN allotted 7-15 working days. SPICe+ companies already have TAN - verify and register on incometax.gov.in. Patron handles complete process."
          }
        },
        {
          "@type": "Question",
          "name": "What is TAN and who needs it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TAN is the 10-digit Tax Deduction and Collection Account Number mandatory for every entity deducting TDS or collecting TCS. Employers, businesses above TDS thresholds, and TCS collectors all need TAN. Penalty Rs 10,000 under Section 272BB for non-compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the fee for TAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Government fee Rs 77 (inclusive of GST) - one-time on Protean portal. Lifetime validity, no renewal. Through Patron from Rs 999 all-inclusive covering Form 49B filing, AO code determination, and acknowledgment handling."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between TAN and PAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PAN is universal tax identity for all financial transactions. TAN is specifically for TDS/TCS deductors - filing returns, depositing tax, issuing Form 16/16A. Every business needs PAN. Only those deducting TDS/collecting TCS need TAN. Both needed, different purposes."
          }
        },
        {
          "@type": "Question",
          "name": "How long does TAN take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "7-15 working days from Form 49B submission. SPICe+ companies get TAN at incorporation (same day as COI). The incometax.gov.in registration (for e-filing) must be done separately post-allotment. Patron activates TDS e-filing capability within 1 day."
          }
        },
        {
          "@type": "Question",
          "name": "Is TAN auto-allotted to companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - companies via SPICe+ with RoC Delhi get TAN at incorporation alongside PAN. No separate Form 49B. But auto-allotted TAN must be registered on incometax.gov.in for TDS e-filing. LLPs do NOT get TAN via FiLLiP - must apply separately."
          }
        },
        {
          "@type": "Question",
          "name": "What happens without TAN?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "TDS returns rejected, Challan 281 invalid, Form 16/16A cannot be issued. Penalty Rs 10,000 per default (Section 272BB). TDS not deposited = 1.5%/month interest (Section 201(1A)). Cascading compliance failures for Gurugram employers."
          }
        },
        {
          "@type": "Question",
          "name": "What are TDS return filing deadlines?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Quarterly: Q1 (Apr-Jun) by July 31, Q2 (Jul-Sep) by October 31, Q3 (Oct-Dec) by January 31, Q4 (Jan-Mar) by May 31. Late fee Rs 200/day under Section 234E. Form 16 to employees by June 15 annually. Patron files all as part of bundled package. Quick Answers TAN kya hai aur kisko chahiye? TDS katne wale har business ko chahiye. Employee salary, rent, contractor payment par TDS katne ke liye TAN zaruri hai. TAN kitne mein banta hai? Govt fee Rs 77. Lifetime valid. Patron Rs 999 se start. Company ko alag se TAN apply karna padta hai? Nahi agar SPICe+ se incorporation hua hai. Lekin incometax.gov.in par register karna zaruri hai."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
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
/* ============================================
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
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
                        TAN Registration in Gurugram: Tax Deduction Account Number for Employers and Businesses
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> No documents needed with Form 49B - only entity details, AO code, and deductor category</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Rs 77 (inclusive of GST) - one-time government fee</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every person or entity responsible for deducting TDS or collecting TCS</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-15 working days from application | SPICe+ companies: at incorporation</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20TAN%20Registration%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20TAN%20registration%20in%20Gurugram.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'TAN Registration in Gurugram',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with TAN registration, TDS compliance, and quarterly return filing. Gurugram employers trust us for AO code expertise and bundled TDS infrastructure.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">TAN vs PAN</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TAN Registration in Gurugram Services at a Glance</strong></p>
                    <p>TAN (Tax Deduction and Collection Account Number) is a mandatory 10-digit code from the Income Tax Department for every entity deducting TDS or collecting TCS. Without TAN: no TDS returns, no Challan 281, no Form 16/16A. Gurugram has 500+ employers in Cyber City alone. Applied via Form 49B on Protean (NSDL) TIN portal for Rs 77 one-time. SPICe+ companies get TAN at incorporation but must register on incometax.gov.in. Patron bundles TAN with quarterly TDS return filing (24Q/26Q) and Form 16/16A issuance.</p>
                </div>
                <p>Gurugram is one of India's largest employer hubs. DLF Cyber City houses hundreds of IT/BPO/MNC offices deducting salary TDS. Udyog Vihar and Manesar have thousands of businesses with contractor/professional payments above thresholds. Every one needs TAN. Learn more about <a href="/tan-registration">TAN Registration across India</a>.</p>
                <p>TAN is the TDS compliance backbone - without it, Challan 281, quarterly returns, and Form 16/16A are impossible. Rs 10,000 penalty under Section 272BB. Patron's Gurugram office on Golf Course Extension Road provides CA-assisted TAN with correct AO code and bundled TDS compliance. Also see <a href="/payroll-services/gurugram">Payroll Services in Gurugram</a> and <a href="/pan-registration/gurugram">PAN Registration</a>.</p>
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
                <h2 class="section-title">What Is TAN Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>TAN registration is the process of obtaining a unique 10-digit alphanumeric identification number from the Income Tax Department under Section 203A of the Income Tax Act, 1961, by filing Form 49B on the <a href="https://tin.tin.nsdl.com/" target="_blank" rel="noopener">Protean (NSDL) TIN portal</a>, that enables an entity to deduct TDS, collect TCS, deposit tax, file returns, and issue deduction certificates.</p>
                    <p>TAN structure: four letters, five digits, one letter (e.g., DELP12345A). First three = jurisdiction (DEL for Delhi covering Gurugram). Fourth = deductor name initial. Lifetime validity, no renewal. A single TAN covers both TDS and TCS. Branches in different locations can have separate TANs.</p>
                    <p>Companies via SPICe+ (RoC Delhi) get TAN auto-allotted but must register on <a href="https://incometax.gov.in/" target="_blank" rel="noopener">incometax.gov.in</a> for e-filing. Bundle with <a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration</a> for automatic TAN allotment.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TAN Registration in Gurugram:</strong></p>
                    <p><strong>TAN:</strong> 10-digit alphanumeric code for TDS/TCS compliance. Lifetime validity. Rs 77 one-time fee.</p>
                    <p><strong>AO Code:</strong> Assessing Officer jurisdictional code. Must match Gurugram address. Wrong AO code = #1 Form 49B error.</p>
                    <p><strong>Form 24Q:</strong> Quarterly salary TDS return (Section 192). Due: Jul 31 / Oct 31 / Jan 31 / May 31.</p>
                    <p><strong>Form 26Q:</strong> Quarterly non-salary TDS return (rent, professional fees, contractors). Same deadlines.</p>
                    <p><strong>Section 272BB:</strong> Penalty Rs 10,000 for failure to obtain or quote TAN in prescribed documents.</p>
                    <p><strong>Challan 281:</strong> TDS/TCS deposit challan. TDS due by 7th of following month (30th April for March).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN Registration in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gurugram Employer Hub</span>
                        <strong>TDS Ready</strong>
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
            <h2 class="section-title">Who Needs TAN Registration in Gurugram?</h2>
            <div class="content-text">
                
                <p><strong>Employers Deducting Salary TDS (Section 192):</strong> Every entity with payroll employees. DLF Cyber City 500+ employers, Golf Course Road, Udyog Vihar. First salaried employee = TAN required. SPICe+ companies get auto-allotment.</p>
                <p><strong>Businesses Above TDS Thresholds:</strong> Rent > Rs 2.4 lakh/yr (194I), professional fees > Rs 30,000 (194J), contractor > Rs 30,000/txn or Rs 1 lakh/yr (194C), commission > Rs 15,000 (194H). Most Gurugram businesses cross at least one.</p>
                <p><strong>Startups Hiring First Employees:</strong> SaaS on Sohna Road, fintech in Cyber City, deeptech in Manesar. First hire = TAN needed. Patron bundles with <a href="/startup-registration/gurugram">company registration</a> and <a href="/payroll-services/gurugram">payroll setup</a>.</p>
                <p><strong>LLPs, Firms, Proprietorships:</strong> Professional services, consulting, trading making sub-contractor/rent/staff payments. LLPs do NOT get TAN via FiLLiP - must apply separately via Form 49B.</p>
                <p><strong>Trusts, Societies, TCS Collectors:</strong> NGOs paying salaries/consulting fees need TAN. E-commerce operators collecting TCS (Section 206C). Same TAN works for both TDS and TCS.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration Services Included by Patron in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>AO Code Determination</td><td>Correct Assessing Officer code for your specific Gurugram locality (Cyber City, Sohna Road, Udyog Vihar, Manesar). The #1 Form 49B error prevented</td></tr>
                        <tr><td>Form 49B Filing (Online)</td><td>Complete filing on <a href="https://tin.tin.nsdl.com/" target="_blank" rel="noopener">Protean TIN portal</a>. Entity details, deductor category, AO code. Rs 77 paid online. No documents needed</td></tr>
                        <tr><td>SPICe+ TAN Verification</td><td>For companies via RoC Delhi: verify auto-allotted TAN and register on incometax.gov.in for e-filing. The critical step most startups miss</td></tr>
                        <tr><td>incometax.gov.in Registration</td><td>Post-allotment registration of TAN on Income Tax e-filing portal to enable online TDS/TCS return filing</td></tr>
                        <tr><td>Quarterly TDS Return Filing (Bundled)</td><td>Calendar setup: Form 24Q (salary) + Form 26Q (non-salary). Due Jul 31 / Oct 31 / Jan 31 / May 31. Bundled quarterly filing available</td></tr>
                        <tr><td>Form 16/16A Issuance Setup</td><td>Form 16 (salary, due June 15) and Form 16A (non-salary, 15 days post-return) generated from TRACES portal</td></tr>
                        <tr><td>Challan 281 Payment Setup</td><td>Monthly TDS deposit configuration. Due by 7th of following month (30th April for March)</td></tr>
                        <tr><td>TAN Correction/Modification</td><td>Name, address, or AO code changes filed on Protean portal when needed</td></tr>

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
            <h2 class="section-title">TAN Registration Process in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete TDS compliance chain - from TAN application to quarterly return filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine If TAN Is Needed</h3><p class="step-description">CA assesses: (a) employees on payroll? (b) payments above TDS thresholds (rent, professional, contractor, commission)? (c) TCS collection? If yes to any, TAN is mandatory. SPICe+ companies: Patron verifies auto-allotment status from RoC Delhi.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Need Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Trigger Identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS?</text><text x="60" y="52" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Yes</text><circle cx="85" cy="22" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M81 22L84 25L90 19" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Confirmed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Identify Correct AO Code</h3><p class="step-description">Assessing Officer code determined from Gurugram address - area code, AO type, range code, AO number. Wrong AO code = #1 Form 49B error. Patron maps exact code for your locality: DLF Cyber City, Sohna Road, Udyog Vihar, Manesar, Golf Course Road.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AO Code Found</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Jurisdiction Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="8" rx="4" fill="#E8EDF4"/><rect x="25" y="38" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="38" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">AO Mapped</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form 49B on Protean TIN Portal</h3><p class="step-description">Online at tin.tin.nsdl.com: deductor category, entity name, Gurugram address, AO code, responsible person details. No documents needed. Rs 77 (incl GST) paid online. 14-digit acknowledgment generated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 49B Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 77 Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">TAN Allotment (7-15 Working Days)</h3><p class="step-description">Protean processes application. TAN communicated via email and physical letter to Gurugram address. Format: DELP12345A (DEL = Delhi jurisdiction covering Gurugram). Lifetime validity, no renewal. Patron tracks via acknowledgment number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TAN Allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Letter Received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">TAN</text><text x="60" y="52" font-size="8" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Allotted</text></svg></div><span class="illustration-label">TAN Active</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Register TAN on incometax.gov.in</h3><p class="step-description">Critical step most businesses miss: allotted TAN registered on Income Tax e-filing portal with organisation details. Without this, TDS returns cannot be e-filed. Patron activates within 1 day of TAN allotment. Enables online 24Q/26Q filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal Registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-Filing Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="37" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">e-Filing</text><rect x="68" y="15" width="40" height="55" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="88" y="47" font-size="7" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">Active</text></svg></div><span class="illustration-label">Activated</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Activate TDS Compliance Infrastructure</h3><p class="step-description">Quarterly return calendar: 24Q (salary) + 26Q (non-salary) with Jul 31/Oct 31/Jan 31/May 31 deadlines. Challan 281 monthly deposit by 7th. Form 16 (salary, June 15) and Form 16A (non-salary) via TRACES. Complete TDS infrastructure from day one.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Returns Scheduled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Challan Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">TDS Compliant</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Information Required for TAN Registration in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>No documents required.</strong> Form 49B does not require supporting documents - only accurate entity information:</p>
                <ul><li>Deductor Category (Company, Firm, Individual/HUF, Government, etc.)</li><li>Entity Name (exactly as per PAN records)</li><li>Complete Gurugram Address (including PIN code - determines AO jurisdiction)</li><li>AO Code (Area Code + AO Type + Range Code + AO Number - Patron determines this)</li><li>Responsible Person Details (name, designation, PAN, Aadhaar)</li><li>Contact Details (phone, email for TAN communication)</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>SPICe+ companies tip:</strong> If incorporated via SPICe+ with RoC Delhi, TAN was auto-allotted. Check your SPICe+ approval email. Do NOT file Form 49B separately. However, you MUST register this TAN on incometax.gov.in for TDS e-filing. Many Gurugram startups miss this activation step. Patron verifies and activates.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common TAN Registration Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Wrong AO Code Selection</td><td>Most common Form 49B error. Gurugram businesses select Delhi codes or incorrect Haryana ranges. Delays or jurisdictional mismatches</td><td>AO code finder tool + IT office cross-verification. Exact code for your specific Gurugram locality</td></tr>
                        <tr><td>SPICe+ TAN Not on E-Filing Portal</td><td>Auto-allotted TAN exists but not registered on incometax.gov.in. First TDS deadline = cannot file. Very common with Gurugram startups</td><td>TAN registered on portal immediately after verification. E-filing activated within 1 day</td></tr>
                        <tr><td>No TAN Before First TDS Payment</td><td>Hire employees or engage contractors before TAN. Deducted TDS cannot be deposited (Challan 281 needs TAN). Interest under Section 201(1A)</td><td>TAN obtained before or simultaneously with first hiring/payment event</td></tr>
                        <tr><td>TDS Return Filing Errors</td><td>Complex data: PAN verification, rate application, challan matching. Errors generate CPC-TDS demand notices</td><td>Bundled quarterly TDS filing with professional PAN verification and challan matching</td></tr>
                        <tr><td>Multiple TANs Unnecessarily</td><td>Single TAN covers TDS and TCS at one location. Some apply for separate TDS/TCS TANs creating confusion</td><td>Correct number of TANs assessed based on business structure and locations</td></tr>

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
            <h2 class="section-title">TAN Registration Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (Form 49B)</td><td>Rs 77 (inclusive of GST) - one-time</td></tr>
                        <tr><td>Patron Fee (TAN Registration)</td><td>From Rs 999 (Form 49B + AO code + acknowledgment)</td></tr>
                        <tr><td>Patron Fee (TAN + TDS Compliance Package)</td><td>From Rs 4,999 (TAN + portal + first quarter returns)</td></tr>
                        <tr><td>Quarterly TDS Return Filing (24Q + 26Q)</td><td>From Rs 1,999/quarter (ongoing)</td></tr>
                        <tr><td>Form 16 Issuance (Annual)</td><td>From Rs 999/year</td></tr>
                        <tr><td>Form 16A Issuance</td><td>Included in quarterly filing</td></tr>
                        <tr><td>TAN Correction/Modification</td><td>From Rs 499</td></tr>
                        <tr><td>TDS Challan 281 Payment Setup</td><td>Included in TAN package</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TAN Registration in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AO Code Determination</td><td>1 day</td></tr><tr><td>Form 49B Filing + Payment</td><td>1 day</td></tr><tr><td>Acknowledgment Dispatch (non-DSC)</td><td>1-2 days</td></tr><tr><td>TAN Allotment</td><td>7-15 working days</td></tr><tr><td>incometax.gov.in Registration</td><td>1 day (post-allotment)</td></tr><tr><td>SPICe+ Companies (Already Allotted)</td><td>Portal registration only - 1 day</td></tr><tr><td><strong>Total End-to-End</strong></td><td><strong>7-15 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Every month without TAN while deducting TDS = accumulating liability. TDS must be deposited by 7th via Challan 281 (needs TAN). Without TAN: deducted amount sits as govt liability, interest 1.5%/month (Section 201(1A)), quarterly returns cannot be filed (Rs 200/day penalty under Section 234E), employees cannot get Form 16. At Rs 77 and 7-15 days, TAN is the cheapest and fastest compliance. Register now.</p>

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
            <h2 class="section-title">Why Choose Patron for TAN Registration in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">AO Code Expertise</h3><p class="feature-desc">The #1 Form 49B error prevented. Correct AO code for DLF Cyber City, Sohna Road, Udyog Vihar, Manesar, Golf Course Road. No jurisdictional mismatches.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">SPICe+ TAN Activation</h3><p class="feature-desc">For companies via RoC Delhi: TAN verified and registered on incometax.gov.in for e-filing. The step most Gurugram startups miss. TDS filing capability within 1 day.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Bundled TDS Compliance</h3><p class="feature-desc">TAN + quarterly returns (24Q/26Q) + Form 16/16A + Challan 281. Complete TDS infrastructure. CPC-TDS notice prevention through accurate filing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Gurugram Office + Track Record</h3><p class="feature-desc">Golf Course Extension Road. Understands employer dynamics - salary TDS for IT, contractor TDS for manufacturers, professional fee TDS for consulting. 10,000+ businesses, 15+ years.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Employers Across Gurugram</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs | 15+ Years</strong></p><p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle." - Startup Founder, Pune</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN vs PAN - When Do You Need What?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>TAN</th><th>PAN</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Tax Deduction and Collection Account Number</td><td>Permanent Account Number</td></tr>
                        <tr><td>Purpose</td><td>TDS/TCS deduction, deposit, returns, certificates</td><td>Universal tax identity for all financial transactions</td></tr>
                        <tr><td>Who Needs</td><td>Only entities deducting TDS or collecting TCS</td><td>Every individual and entity</td></tr>
                        <tr><td>Fee</td><td>Rs 77 (incl GST)</td><td>Rs 101-107 / FREE instant e-PAN</td></tr>
                        <tr><td>Key Documents</td><td>TDS returns (24Q/26Q), Form 16/16A, Challan 281</td><td>ITR, GST, bank accounts, IEC</td></tr>
                        <tr><td>SPICe+ Auto</td><td>Yes (for companies)</td><td>Yes (for companies)</td></tr>
                        <tr><td>Penalty</td><td>Rs 10,000 (Section 272BB)</td><td>Rs 10,000 (Section 272B)</td></tr>

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
                
                <p>Patron offers complete tax compliance in Gurugram:</p><ul>
                    <li><a href="/tan-registration">TAN Registration in India</a></li>
                    <li><a href="/pan-registration/gurugram">PAN Registration in Gurugram</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration in Gurugram</a></li>
                    <li><a href="/payroll-services/gurugram">Payroll Services in Gurugram</a></li>
                    <li><a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services in Gurugram</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for TAN in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Section 203A, IT Act 1961 - TAN mandatory for every TDS/TCS deductor</li>
                    <li>Section 272BB - Rs 10,000 penalty for non-compliance</li>
                    <li>Section 200(3) - Quarterly TDS returns: 24Q/26Q/27Q/27EQ</li>
                    <li>Section 234E - Late filing fee Rs 200/day (max = TDS amount)</li>
                    <li>Section 201(1A) - Interest on late deposit: 1%/month non-deduction, 1.5%/month non-deposit</li></ul>
                <p><strong>Key Portal:</strong> <a href="https://tin.tin.nsdl.com/" target="_blank" rel="noopener">Protean TIN portal</a> (Form 49B) | incometax.gov.in (e-filing) | TRACES (Form 16/16A)</p>
                <p><strong>Deadlines:</strong> TDS deposit by 7th monthly (Challan 281). Returns: Q1 Jul 31, Q2 Oct 31, Q3 Jan 31, Q4 May 31. Form 16 by June 15.</p>

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
                    <h2 class="faq-expanded__title">FAQs - TAN Registration in Gurugram</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about TAN registration in Gurugram.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TAN Registration in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I get TAN in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>File Form 49B on Protean TIN portal (tin.tin.nsdl.com) with entity details, Gurugram address, correct AO code, and Rs 77 fee. TAN allotted 7-15 working days. SPICe+ companies already have TAN - verify and register on incometax.gov.in. Patron handles complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is TAN and who needs it?</h3>
                        <div class="faq-expanded__a"><p>TAN is the 10-digit Tax Deduction and Collection Account Number mandatory for every entity deducting TDS or collecting TCS. Employers, businesses above TDS thresholds, and TCS collectors all need TAN. Penalty Rs 10,000 under Section 272BB for non-compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for TAN?</h3>
                        <div class="faq-expanded__a"><p>Government fee Rs 77 (inclusive of GST) - one-time on Protean portal. Lifetime validity, no renewal. Through Patron from Rs 999 all-inclusive covering Form 49B filing, AO code determination, and acknowledgment handling.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the difference between TAN and PAN?</h3>
                        <div class="faq-expanded__a"><p>PAN is universal tax identity for all financial transactions. TAN is specifically for TDS/TCS deductors - filing returns, depositing tax, issuing Form 16/16A. Every business needs PAN. Only those deducting TDS/collecting TCS need TAN. Both needed, different purposes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does TAN take?</h3>
                        <div class="faq-expanded__a"><p>7-15 working days from Form 49B submission. SPICe+ companies get TAN at incorporation (same day as COI). The incometax.gov.in registration (for e-filing) must be done separately post-allotment. Patron activates TDS e-filing capability within 1 day.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is TAN auto-allotted to companies?</h3>
                        <div class="faq-expanded__a"><p>Yes - companies via SPICe+ with RoC Delhi get TAN at incorporation alongside PAN. No separate Form 49B. But auto-allotted TAN must be registered on incometax.gov.in for TDS e-filing. LLPs do NOT get TAN via FiLLiP - must apply separately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens without TAN?</h3>
                        <div class="faq-expanded__a"><p>TDS returns rejected, Challan 281 invalid, Form 16/16A cannot be issued. Penalty Rs 10,000 per default (Section 272BB). TDS not deposited = 1.5%/month interest (Section 201(1A)). Cascading compliance failures for Gurugram employers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What are TDS return filing deadlines?</h3>
                        <div class="faq-expanded__a"><p>Quarterly: Q1 (Apr-Jun) by July 31, Q2 (Jul-Sep) by October 31, Q3 (Oct-Dec) by January 31, Q4 (Jan-Mar) by May 31. Late fee Rs 200/day under Section 234E. Form 16 to employees by June 15 annually. Patron files all as part of bundled package.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>TAN kya hai aur kisko chahiye?</strong> TDS katne wale har business ko chahiye. Employee salary, rent, contractor payment par TDS katne ke liye TAN zaruri hai.</p><p><strong>TAN kitne mein banta hai?</strong> Govt fee Rs 77. Lifetime valid. Patron Rs 999 se start.</p><p><strong>Company ko alag se TAN apply karna padta hai?</strong> Nahi agar SPICe+ se incorporation hua hai. Lekin incometax.gov.in par register karna zaruri hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get TAN for Your Gurugram Business Before the Next TDS Deadline</h2>
            <div class="content-text">
                
                <p>Every month without TAN while deducting TDS = accumulating liability. Challan 281 needs TAN. Interest 1.5%/month on un-deposited TDS. Quarterly returns cannot be filed (Rs 200/day penalty). Employees cannot get Form 16. At Rs 77 and 7-15 days, this is the cheapest compliance you will ever obtain.</p><p><strong>Register now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get TAN Registration in Gurugram with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">TAN is the TDS compliance backbone for every Gurugram employer and business - from IT companies in DLF Cyber City to manufacturers in Manesar to startups on Sohna Road. Rs 77, 7-15 days, lifetime validity. But TAN alone is not enough - you need e-filing portal registration, quarterly returns, Challan 281, and Form 16/16A.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Gurugram office on Golf Course Extension Road provides the complete TDS compliance chain: TAN + AO code + e-filing portal + quarterly returns + Form 16/16A + Challan setup. One engagement from TAN to TDS compliance. 15+ years, 10,000+ businesses served.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20TAN%20Registration%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20TAN%20registration%20in%20Gurugram.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">TAN Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides TAN registration in 8 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/tan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/tan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/tan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/tan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/tan-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/tan-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/tan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end tax compliance in Gurugram</div><div class="pa-cross-grid"><a href="/pan-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate TDS rate changes, return filing deadline updates, Form 49B fee revisions, and CPC-TDS procedural changes. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
