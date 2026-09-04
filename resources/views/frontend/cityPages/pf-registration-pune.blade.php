
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>PF Registration in Pune - EPFO Process & 20-Employee Rule</title>
    <meta name="description" content="CA-assisted PF registration in Pune. EPFO employer registration, ECR filing, UAN generation, ESI integration. Serving Hinjewadi, Chakan, MIDC employers. Call +91 945 945 6700.">
    <link rel="canonical" href="/pf-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="PF Registration in Pune - EPFO Process & 20-Employee Rule">
    <meta property="og:description" content="CA-assisted PF registration in Pune. EPFO employer registration, ECR filing, UAN generation, ESI integration. Serving Hinjewadi, Chakan, MIDC employers. Call +91 945 945 6700.">
    <meta property="og:url" content="/pf-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PF Registration in Pune - EPFO Process & 20-Employee Rule">
    <meta name="twitter:description" content="CA-assisted PF registration in Pune. EPFO employer registration, ECR filing, UAN generation, ESI integration. Serving Hinjewadi, Chakan, MIDC employers. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PF Registration in Pune - EPFO Process & 20-Employee Rule",
      "description": "CA-assisted PF registration in Pune. EPFO employer registration, ECR filing, UAN generation, ESI integration. Serving Hinjewadi, Chakan, MIDC employers. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/pf-registration/pune",
      "serviceType": "PF Registration in Pune - EPFO Process & 20-Employee Rule",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
        "containedInPlace": {
          "@type": "State",
          "name": "Maharashtra"
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
          "name": "Provident Fund Registration",
          "item": "https://www.patronaccounting.com/pf-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "PF Registration in Pune - EPFO Process & 20-Employee Rule",
          "item": "https://www.patronaccounting.com/pf-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is PF registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF registration is registering an establishment with EPFO under the EPF & MP Act 1952. It enrolls the business in the EPF scheme where employer and employee each contribute 12% of basic wages + DA monthly towards retirement savings, pension, and life insurance. EPFO allots an Establishment Code and employees receive UANs."
          }
        },
        {
          "@type": "Question",
          "name": "When is PF registration mandatory?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory when an establishment employs 20 or more persons - includes permanent, contractual, temporary, and part-time. Register within 1 month of crossing the threshold. Once registered, coverage continues even if workforce drops below 20. Voluntary registration available for fewer than 20 employees."
          }
        },
        {
          "@type": "Question",
          "name": "How to register for PF in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Visit EPFO Unified Portal (USSP), create employer account, fill registration form with establishment and employee details, upload documents, authenticate with DSC, submit. EPFO allots Establishment Code in 3-7 working days. Patron handles the complete process from Pune."
          }
        },
        {
          "@type": "Question",
          "name": "What is the employer PF contribution rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Employer contributes 12% of basic wages + DA, split as 3.67% to EPF and 8.33% to EPS (capped at Rs 15,000 wage for EPS). Additionally: 0.5% EDLI and 0.5% admin charges. Total employer cost: 13% of basic + DA per employee per month."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for PF registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Establishment PAN, proprietor/partner/director PAN and Aadhaar, incorporation certificate, GST certificate, Maharashtra Shops & Establishment certificate, address proof (recent utility bill), cancelled cheque, Class 3 DSC, and complete employee list with Aadhaar, PAN, salary, and joining date."
          }
        },
        {
          "@type": "Question",
          "name": "How long does PF registration take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form filing: 1-2 days. EPFO review and Establishment Code: 3-7 working days. UAN generation and employee onboarding: 2-5 additional days. Total: 7-15 working days from application to first ECR readiness. Complete documents and current employee list speeds up the process."
          }
        },
        {
          "@type": "Question",
          "name": "What are penalties for not registering for PF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late registration: backdated contributions + 12% interest (Section 7Q) + damages up to 25% (Section 14B). Non-registration: prosecution under Section 14(1) with imprisonment up to 1 year and Rs 5,000 fine. Deducting PF without depositing: criminal misappropriation under IPC Section 405/406."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company with less than 20 employees register for PF?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Voluntary registration under Section 1(4) with EPFO approval and mutual consent. Once granted, cannot be cancelled - same compliance applies. Popular among Pune startups to offer competitive benefits and attract talent."
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
                        Provident Fund (PF) Registration in Pune: CA-Assisted Employer Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> Mandatory for 20+ employees (permanent, contractual, temporary) under EPF & MP Act 1952</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadline:</span> Register with EPFO within 1 month of crossing the 20-employee threshold</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution:</span> Employer 12% + Employee 12% of basic + DA; employer also pays 0.5% EDLI + 0.5% admin</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Monthly Filing:</span> ECR by 15th of following month; late payment attracts 12% interest + up to 25% damages</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - Call +91 945 945 6700</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PF%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'PF Registration in Pune',
                                            'city'     => 'Pune',
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
    'ctaText'    => 'Get CA-assisted PF registration with monthly ECR filing, ESI integration, payroll processing, and salary structuring from Patron\'s Pune office.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Choose Us</a><a href="#comparison-section" class="toc-btn">Contribution Breakdown</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration in Pune</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - PF Registration in Pune Services at a Glance</strong></p>
                    <p>PF registration is mandatory for every establishment employing 20+ persons (permanent, contractual, temporary) under the EPF & MP Act 1952. Register within 1 month. Employer and employee each contribute 12% of basic + DA. Monthly ECR by 15th. Late payment: 12% interest (S7Q) + 25% damages (S14B). EPFO Regional Office Pune at Shram Siddhi Bhavan, 2 Bund Garden Road.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Legal Basis</td><td>EPF & MP Act 1952</td></tr><tr><td>Mandatory Threshold</td><td>20+ employees (all types counted)</td></tr><tr><td>Deadline</td><td>Within 1 month of crossing 20 employees</td></tr><tr><td>Contribution</td><td>Employee 12% + Employer 12% (3.67% EPF + 8.33% EPS) + 0.5% EDLI + 0.5% Admin</td></tr><tr><td>Monthly Filing</td><td>ECR by 15th of following month</td></tr><tr><td>Penalties</td><td>12% interest (S7Q) + up to 25% damages (S14B) + imprisonment up to 1 year (S14(1))</td></tr><tr><td>EPFO Pune</td><td>Shram Siddhi Bhavan, 2 Bund Garden Road, Pune 411001; Sub-Regional Office PCMC</td></tr></tbody></table></div></p>
                </div>
                <p>Pune's employer ecosystem is active in PF - Hinjewadi/Kharadi SaaS startups rapidly crossing 20 employees during funding rounds, Chakan auto manufacturing with thousands of workers, MIDC Bhosari manufacturing, hospitality scaling in Koregaon Park/FC Road, logistics, and construction. EPFO Regional Office at Bund Garden Road with Sub-Regional at PCMC. Learn more about <a href="#">PF Registration across India</a>.</p>
                <p>Patron provides PF registration alongside ESI, payroll processing, and accounting for Pune employers - ensuring PF, ESI, payroll, GST, and ITR are all integrated into a single compliance framework. Voluntary registration available for startups with fewer than 20 employees wanting to attract talent.</p>
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
                <h2 class="section-title">What Is PF Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>PF registration is formally registering an establishment with EPFO under the EPF & MP Act 1952. The scheme covers 6+ crore active subscribers with Rs 18+ lakh crore corpus. Three components: EPF (retirement savings), EPS (pension after 10 years), EDLI (life insurance up to Rs 7 lakh).</p><p>Mandatory at 20+ employees. Register within 1 month. Once registered, continues even if headcount drops. EPFO allots an Establishment Code; employees get Universal Account Numbers (UANs). Employer deducts 12% from employee's basic + DA and matches with own 12% plus EDLI and admin.</p><p>Monthly ECR filing by 15th. Voluntary registration available for smaller establishments. Related: <a href="/payroll-processing-and-management-services/pune">Payroll Processing in Pune</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for PF Registration in Pune:</strong></p>
                    <ul><li><strong>20-Employee Threshold:</strong> All types counted - permanent, contractual, temporary, part-time. Register within 1 month</li><li><strong>12% + 12%:</strong> Employee 12% of basic + DA. Employer 12% (3.67% EPF + 8.33% EPS) + 0.5% EDLI + 0.5% admin = 13% total</li><li><strong>ECR:</strong> Electronic Challan cum Return filed monthly by 15th on EPFO portal with employee-wise details</li><li><strong>UAN:</strong> Universal Account Number - constant throughout career across employers</li><li><strong>Section 7Q/14B:</strong> 12% interest + up to 25% damages for late payment. Section 14(1): imprisonment up to 1 year</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>20+ Employees + 12% + ECR</span>
                        <strong>PF Registration</strong>
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
            <h2 class="section-title">Who Needs PF Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>IT/SaaS Startups (Hinjewadi, Kharadi):</strong> Rapidly scaling past 20 during funding rounds. 1-month deadline starts when 20th employee joins. Related: <a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a>.</p><p><strong>Manufacturers (Chakan, PCMC, MIDC Bhosari):</strong> Large workforces including contract labour. Principal employer responsible for contract workers. Complex salary structures.</p><p><strong>Hospitality (Koregaon Park, FC Road, Viman Nagar):</strong> Hotels, restaurants, QSRs, catering companies crossing 20 during expansion. Construction companies with large site workforces.</p><p><strong>Logistics, Warehousing, Any Pune Employer:</strong> Anyone approaching 20 employees should plan PF as part of compliance roadmap from incorporation. Related: <a href="#">ESI Registration</a> (10+ employees, separate scheme).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>EPFO/USSP Registration</td><td>USSP account creation, form filling, document upload, DSC authentication, submission</td></tr><tr><td>Establishment Code</td><td>Follow-up with EPFO for PF Establishment Code allotment within 3-7 working days</td></tr><tr><td>Employee Onboarding</td><td>UAN generation, Form 11, KYC verification (Aadhaar-PAN-bank linking) for all employees</td></tr><tr><td>Monthly ECR Filing</td><td>Employee-wise contribution calculation, ECR generation, upload, challan payment by 15th</td></tr><tr><td>ESI Registration</td><td>Concurrent ESI filing for establishments with 10+ employees below Rs 21,000 wages</td></tr><tr><td>Payroll Integration</td><td>PF contribution computed within monthly payroll ensuring correct basic wage calculation</td></tr><tr><td>Salary Structuring</td><td>CTC structured for optimal PF + tax compliance within legal limits</td></tr><tr><td>Transfer/Withdrawal Support</td><td>Form 13 (transfers), Form 19/10C (withdrawals) for employee life events</td></tr><tr><td>Compliance Calendar</td><td>PF + ESI + GST + TDS + Maharashtra PT integrated with deadline alerts</td></tr>

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
            <h2 class="section-title">How to Register for PF from Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">PF registration is online via EPFO/USSP portal. EPFO Regional Office at Shram Siddhi Bhavan, Bund Garden Road, Pune 411001. Sub-Regional Office at PCMC. Patron handles all from Wagholi.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Applicability and Prepare Documents</h3><p class="step-description">Patron verifies that the Pune establishment has crossed (or will cross) the 20-employee threshold. Count includes permanent, contractual, temporary, part-time. Documents: PAN, Aadhaar, GST certificate, Shops & Establishment certificate (Maharashtra Act 2017), address proof, cancelled cheque, incorporation certificate, complete employee list with salary details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20+ Confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">20+ Employees?</text><line x1="20" y1="30" x2="100" y2="30" stroke="#14365F" stroke-width="0.8"/><text x="25" y="44" font-size="6" fill="#14365F" font-family="Arial">Permanent Counted</text><text x="25" y="56" font-size="6" fill="#14365F" font-family="Arial">Contract Counted</text><text x="25" y="68" font-size="6" fill="#14365F" font-family="Arial">Docs Collected</text><path d="M92 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M92 54l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M92 66l3 3 6-6" stroke="#10B981" stroke-width="1.5"/></svg></div><span class="illustration-label">Applicable</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Create USSP Account</h3><p class="step-description">Patron creates the employer account on Unified Shram Suvidha Portal (unifiedportal-emp.epfindia.gov.in) using establishment PAN and authorised signatory details. USSP is the gateway for both PF and ESI - Patron typically files both simultaneously. Related: <a href="#">ESI Registration</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>USSP Account Created</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN Authenticated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">USSP Portal</text><rect x="25" y="38" width="70" height="12" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="47" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Employer Account Created</text><rect x="25" y="56" width="70" height="12" rx="4" fill="#10B981" opacity="0.15"/><text x="60" y="65" font-size="5" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="600">PAN + DSC Authenticated</text></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Fill Registration Form on EPFO Portal</h3><p class="step-description">Patron completes the EPFO registration form with all sections: Establishment Details (name, type, PAN, Pune address), eContacts, Contact Person (signatory with Aadhaar), Identifiers (GST, Shops & Establishment, Factory license), Employee Details (all 20+ with Aadhaar, PAN, salary, joining date), and Branch/Division details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form Completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Employee Data Entered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Registration Form</text><line x1="20" y1="30" x2="100" y2="30" stroke="#14365F" stroke-width="0.8"/><rect x="20" y="36" width="80" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Establishment Details</text><rect x="20" y="50" width="80" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">20+ Employee Details</text><rect x="20" y="64" width="80" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="70" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">GST + Shops Act Cert</text></svg></div><span class="illustration-label">Form Ready</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Upload Documents and Apply DSC</h3><p class="step-description">All supporting documents uploaded in PDF format (under 2 MB each). Application authenticated with Class 3 DSC. PF coverage date entered - typically when 20th employee joined. Patron verifies all details match across PAN, GST, Shops & Establishment, and bank account before submission.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC Applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Details Verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">DSC + Submit</text><rect x="25" y="35" width="70" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="45" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Class 3 DSC Applied</text><rect x="25" y="56" width="70" height="14" rx="4" fill="#10B981" opacity="0.15"/><text x="60" y="66" font-size="6" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="600">Application Submitted</text></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">EPFO Review and Establishment Code Allotment</h3><p class="step-description">EPFO reviews application and allots a PF Establishment Code within 3-7 working days. This unique identifier is used in all PF filings. Patron monitors status and responds to EPFO queries. Upon code allotment, employer portal login credentials are activated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Code Allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="12" width="80" height="35" rx="4" fill="#10B981" opacity="0.15"/><text x="60" y="33" font-size="8" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">Code Allotted</text><rect x="25" y="58" width="70" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="68" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">EPFO Establishment Code</text><text x="60" y="78" font-size="5" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="600">3-7 Working Days</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Registration: UAN, ECR, and Compliance</h3><p class="step-description">UAN generated for all employees. Form 11 submitted. KYC verification (Aadhaar-UAN-PAN-bank linking). First ECR filed with employee-wise contributions by 15th. ESI filed if applicable. Integrated with <a href="/payroll-processing-and-management-services/pune">payroll</a>, <a href="/gst-registration">GST</a>, TDS, Maharashtra PT, and <a href="/income-tax-return">ITR</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>UAN Generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ECR Calendar Set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="35" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="43" y="15" width="35" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="81" y="15" width="34" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="22" y="35" font-size="5" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="600">UAN</text><text x="60" y="35" font-size="5" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="600">ECR</text><text x="98" y="35" font-size="5" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="600">ESI+PT</text><text x="22" y="52" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Generated</text><text x="60" y="52" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">By 15th</text><text x="98" y="52" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Bundled</text></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for PF Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card:</strong> Establishment</li><li><strong>PAN and Aadhaar:</strong> Proprietor/all partners/all directors</li><li><strong>Certificate of Incorporation:</strong> Or partnership deed or proprietorship proof</li><li><strong>GST Registration Certificate</strong></li><li><strong>Shops & Establishment Certificate:</strong> Maharashtra Shops & Establishments Act 2017</li><li><strong>Address Proof:</strong> Electricity/water/telephone bill (not older than 2 months) for Pune premises</li><li><strong>Cancelled Cheque:</strong> Or bank statement of entity's current account</li><li><strong>Class 3 DSC:</strong> Of the authorised signatory</li><li><strong>Employee List:</strong> Name, Aadhaar, PAN, father's/spouse's name, DOB, joining date, basic + DA, bank account</li><li><strong>Factory License:</strong> If applicable (MIDC, Chakan, PCMC manufacturing units)</li></ul><p style="margin-top:16px;"><strong>Pune tip:</strong> Have the complete employee list ready before initiating registration. EPFO requires employee details at submission. For startups hiring rapidly, maintain a real-time headcount tracker to know exactly when you cross 20.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for Pune Employers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing 1-Month Deadline</td><td>Startups hire in batches. 20th hire triggers deadline. Late = backdated contributions + 12% interest + 25% damages</td><td>Patron monitors client headcount and initiates registration proactively at trigger point</td></tr><tr><td>Not Counting Contract Workers</td><td>Threshold includes ALL types - permanent, contract, temporary, part-time. 10 permanent + 15 contract = 25 = mandatory</td><td>Total workforce audited including contract labour for accurate assessment</td></tr><tr><td>Incorrect Wage Calculation</td><td>Low basic + high allowances to reduce PF liability. EPFO can reclassify disguised basic pay (Surya Roshni ruling)</td><td>PF-compliant salary components structured within legal boundaries</td></tr><tr><td>Late ECR Filing</td><td>Must file by 15th monthly. Even 1 day late = 12% interest. Persistent delays = 25% damages + prosecution</td><td>ECR automated within monthly payroll cycle. Zero missed deadlines</td></tr><tr><td>PF Deducted Not Deposited</td><td>Criminal misappropriation under IPC S405/406. EPFO actively investigates. Most serious compliance failure</td><td>Deductions deposited via ECR before 15th without exception</td></tr>

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
            <h2 class="section-title">Fees for PF Registration in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>PF Registration (EPFO)</td><td>No government fee</td></tr><tr><td>Professional Fees (Registration)</td><td>Rs 4,999 - Rs 7,999</td></tr><tr><td>PF + ESI Package</td><td>Rs 7,999 - Rs 12,999</td></tr><tr><td>Monthly ECR Filing</td><td>Rs 1,999 - Rs 4,999/month</td></tr><tr><td>Payroll + PF + ESI Monthly</td><td>Rs 4,999 - Rs 14,999/month</td></tr><tr><td>Registration + 3-Month Payroll Setup</td><td>Rs 14,999 - Rs 24,999</td></tr><tr><td>Annual PF Compliance Package</td><td>Rs 24,999 - Rs 59,999/year</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free PF Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PF%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for PF Registration in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>1 day</td></tr><tr><td>Document Preparation</td><td>1-3 days</td></tr><tr><td>USSP Registration and Form Filing</td><td>1-2 days</td></tr><tr><td>EPFO Review</td><td>3-7 working days</td></tr><tr><td>UAN Generation and Onboarding</td><td>2-5 days</td></tr><tr><td>First ECR Filing</td><td>By 15th of following month</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Total: 7-15 working days from application to first ECR filing.</strong> The 1-month registration deadline is a hard legal requirement. EPFO cross-references GST, ESI, and IT data to identify unregistered establishments. Register as soon as you cross or approach 20 employees.</p>

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
            <h2 class="section-title">Why Choose Patron for PF in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">All Pune Sectors</h3><p class="feature-text">Serving Hinjewadi startups, Chakan manufacturers, MIDC Bhosari, Koregaon Park hospitality, logistics, and construction companies.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">ECR by 15th, Every Month</h3><p class="feature-text">Monthly contribution calculated, ECR generated, challan deposited on time. Zero late fees. 12% interest and 25% damages avoided.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Proactive Registration</h3><p class="feature-text">Client headcount monitored. Registration triggered before 1-month deadline. No backdated contributions or penalties.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Integrated Compliance</h3><p class="feature-text">PF + ESI + payroll + Maharashtra PT + TDS + GST + ITR as unified engagement. Not just registration.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years. 50,000+ documents filed. Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">From Rs 4,999</h3><p class="feature-text">PF registration (no govt fee). PF + ESI from Rs 7,999. Complete payroll package from Rs 4,999/month.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Employers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team."</em> - Startup Founder, Pune</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and hundreds of Pune-based employers.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">PF Contribution Breakdown</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Component</th><th>Employee Share</th><th>Employer Share</th></tr></thead>
                    <tbody>
                        <tr><td>EPF (Provident Fund)</td><td>12% of basic + DA</td><td>3.67% of basic + DA</td></tr><tr><td>EPS (Pension Scheme)</td><td>Nil</td><td>8.33% of basic + DA (capped at Rs 15,000)</td></tr><tr><td>EDLI (Insurance)</td><td>Nil</td><td>0.50% of basic + DA</td></tr><tr><td>Admin Charges</td><td>Nil</td><td>0.50% of basic + DA</td></tr><tr><td>Total</td><td>12%</td><td>13%</td></tr><tr><td>Combined</td><td colspan="2">25% of basic + DA per employee per month via ECR by 15th</td></tr>

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
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="#">PF Registration in India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="#">ESI Registration in Pune</a> (10+ employees)</li><li><a href="/payroll-processing-and-management-services/pune">Payroll Processing in Pune</a></li><li><a href="/private-limited-company-registration/pune">Pvt Ltd Registration in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="/gst-registration">GST Registration</a></li><li><a href="/income-tax-return">Income Tax Return</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/posh-compliance-services">Compliance Services</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for PF Registration</h2>
            <div class="content-text">
                
                <p><strong>EPF & MP Act 1952:</strong> Governs EPF, EPS, and EDLI schemes. Administered by EPFO under Ministry of Labour. Source: <a href="https://epfindia.gov.in" target="_blank" rel="noopener">epfindia.gov.in</a></p><p><strong>Registration:</strong> Within 1 month of 20+ employees (Section 1(3)). ECR by 15th monthly. UAN for every employee. Maintain records 6 years.</p><p><strong>Contribution:</strong> Employee 12% + Employer 12% (3.67% EPF + 8.33% EPS) + 0.5% EDLI + 0.5% admin. EPS capped at Rs 15,000 wage.</p><p><strong>Penalties:</strong> Section 7Q: 12% interest. Section 14B: up to 25% damages. Section 14(1): imprisonment up to 1 year + Rs 5,000 fine. IPC 405/406 if deducted but not deposited. Source: <a href="https://unifiedportal-emp.epfindia.gov.in" target="_blank" rel="noopener">USSP Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - PF Registration in Pune</h2>
                    <p class="faq-expanded__lead">Answers about PF applicability, contribution rates, registration process, documents, timeline, penalties, and voluntary registration for Pune employers.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'PF Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is PF registration?</h3>
                        <div class="faq-expanded__a"><p>PF registration is registering an establishment with EPFO under the EPF & MP Act 1952. It enrolls the business in the EPF scheme where employer and employee each contribute 12% of basic wages + DA monthly towards retirement savings, pension, and life insurance. EPFO allots an Establishment Code and employees receive UANs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">When is PF registration mandatory?</h3>
                        <div class="faq-expanded__a"><p>Mandatory when an establishment employs 20 or more persons - includes permanent, contractual, temporary, and part-time. Register within 1 month of crossing the threshold. Once registered, coverage continues even if workforce drops below 20. Voluntary registration available for fewer than 20 employees.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to register for PF in Pune?</h3>
                        <div class="faq-expanded__a"><p>Visit EPFO Unified Portal (USSP), create employer account, fill registration form with establishment and employee details, upload documents, authenticate with DSC, submit. EPFO allots Establishment Code in 3-7 working days. Patron handles the complete process from Pune.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the employer PF contribution rate?</h3>
                        <div class="faq-expanded__a"><p>Employer contributes 12% of basic wages + DA, split as 3.67% to EPF and 8.33% to EPS (capped at Rs 15,000 wage for EPS). Additionally: 0.5% EDLI and 0.5% admin charges. Total employer cost: 13% of basic + DA per employee per month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What documents are needed for PF registration?</h3>
                        <div class="faq-expanded__a"><p>Establishment PAN, proprietor/partner/director PAN and Aadhaar, incorporation certificate, GST certificate, Maharashtra Shops & Establishment certificate, address proof (recent utility bill), cancelled cheque, Class 3 DSC, and complete employee list with Aadhaar, PAN, salary, and joining date.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How long does PF registration take?</h3>
                        <div class="faq-expanded__a"><p>Form filing: 1-2 days. EPFO review and Establishment Code: 3-7 working days. UAN generation and employee onboarding: 2-5 additional days. Total: 7-15 working days from application to first ECR readiness. Complete documents and current employee list speeds up the process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are penalties for not registering for PF?</h3>
                        <div class="faq-expanded__a"><p>Late registration: backdated contributions + 12% interest (Section 7Q) + damages up to 25% (Section 14B). Non-registration: prosecution under Section 14(1) with imprisonment up to 1 year and Rs 5,000 fine. Deducting PF without depositing: criminal misappropriation under IPC Section 405/406.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a company with less than 20 employees register for PF?</h3>
                        <div class="faq-expanded__a"><p>Yes. Voluntary registration under Section 1(4) with EPFO approval and mutual consent. Once granted, cannot be cancelled - same compliance applies. Popular among Pune startups to offer competitive benefits and attract talent.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>PF registration kab karna padta hai?</strong> 20+ employees (permanent, contract, temporary sab) ho jaayein tab 1 mahine ke andar EPFO portal pe register karna mandatory hai. Late pe interest + damages lagte hain.</p><p><strong>PF kitna katega salary se?</strong> Employee ka 12% basic + DA. Employer bhi 12% (3.67% EPF + 8.33% EPS) + 0.5% EDLI + 0.5% admin. ECR se monthly 15th tak deposit.</p><p><strong>Startup ko bhi PF register karna padta hai?</strong> Haan, agar 20 employees ho gaye. Voluntarily bhi kar sakte ho 20 se kam pe - talent retain karne ke liye.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Register for PF Before EPFO Flags Your Business</h2>
            <div class="content-text">
                
                <p>PF registration is a hard 1-month deadline. Late registration means backdated contributions for every month, 12% interest, and up to 25% damages. EPFO cross-references GST, ESI, and IT data to find unregistered establishments. For 25 employees at Rs 15,000 basic, each month of delay costs Rs 9,375 in employer contributions plus penalties. Register now.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PF%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get PF Compliant with Patron</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">PF registration is mandatory for every Pune establishment with 20+ employees. With rapid hiring across IT, manufacturing, hospitality, and services, PF is one of the most common and time-sensitive compliance events.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office serves startups, manufacturers, hospitality, logistics, and construction - complete PF lifecycle from registration to monthly ECR to annual returns.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">15+ years. 10,000+ businesses. 4.9 Google rating. The only Pune CA firm bundling PF with ESI, payroll, ECR, salary structuring, Maharashtra PT, TDS, GST, and ITR.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20PF%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20PF%20Registration%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20PF%20Registration%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">PF Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides PF registration in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local PF registration</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/pf-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Complete employer compliance in Pune</div><div class="pa-cross-grid"><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESI Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/payroll-processing-and-management-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Filing</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers PF registration in Pune. EPF & MP Act 1952, contribution rates, ECR filing requirements, EPFO Pune Regional Office, and penalties verified. Freshness Tier 2.</p>
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
