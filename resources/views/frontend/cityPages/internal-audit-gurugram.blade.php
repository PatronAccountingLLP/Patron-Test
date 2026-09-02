

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Internal Audit Gurugram - Scope, IFC & Reporting</title>
    <meta name="description" content="CA-led internal audit in Gurugram. Section 138 compliance. Risk-based approach, process improvement. Serving Cyber City, Manesar, Udyog Vihar companies. Call +91 945 945 6700.">
    <link rel="canonical" href="/internal-audit/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Internal Audit Gurugram - Scope, IFC & Reporting">
    <meta property="og:description" content="CA-led internal audit in Gurugram. Section 138 compliance. Risk-based approach, process improvement. Serving Cyber City, Manesar, Udyog Vihar companies. Call +91 945 945 6700.">
    <meta property="og:url" content="/internal-audit/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Internal Audit Gurugram - Scope, IFC & Reporting">
    <meta name="twitter:description" content="CA-led internal audit in Gurugram. Section 138 compliance. Risk-based approach, process improvement. Serving Cyber City, Manesar, Udyog Vihar companies. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Internal Audit Gurugram - Scope, IFC & Reporting",
      "description": "CA-led internal audit in Gurugram. Section 138 compliance. Risk-based approach, process improvement. Serving Cyber City, Manesar, Udyog Vihar companies. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/internal-audit/gurugram",
      "serviceType": "Internal Audit Gurugram - Scope, IFC & Reporting",
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
        "url": "https://www.patronaccounting.com/internal-audit/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "25",
          "maxPrice": "200",
          "priceCurrency": "INR"
        }
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
          "name": "Internal Audit Services India - Process, Scope & Reporting",
          "item": "https://www.patronaccounting.com/internal-audit"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Internal Audit Gurugram - Scope, IFC & Reporting",
          "item": "https://www.patronaccounting.com/internal-audit/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is internal audit mandatory for my company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mandatory for all listed companies. Unlisted public if paid-up Rs 50 crore OR turnover Rs 200 crore OR loans Rs 100 crore OR deposits Rs 25 crore in preceding FY. Private if turnover Rs 200 crore OR loans Rs 100 crore. Patron assesses applicability based on your financials."
          }
        },
        {
          "@type": "Question",
          "name": "What is internal audit under Section 138?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 138 requires prescribed companies to appoint an internal auditor (CA, CMA, or other professional) to evaluate internal controls, financial processes, operational efficiency, and regulatory compliance. Scope defined by audit committee or Board. Reports findings and recommendations."
          }
        },
        {
          "@type": "Question",
          "name": "Who can be an internal auditor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CA (practising or not), CMA, or other professional decided by Board. Can be employee or external firm. CA and CMA firms eligible. Statutory auditor or associated firm cannot be internal auditor under Section 144. Patron provides external CA-led teams for Gurugram companies."
          }
        },
        {
          "@type": "Question",
          "name": "What are the thresholds for mandatory internal audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Listed: all mandatory (no threshold). Unlisted public: paid-up Rs 50 crore OR turnover Rs 200 crore OR loans Rs 100 crore OR deposits Rs 25 crore - any ONE in preceding FY. Private: turnover Rs 200 crore OR loans Rs 100 crore. Appointment within 6 months."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between internal audit and statutory audit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Internal audit evaluates controls, processes, and efficiency - reports to Board/audit committee. Statutory audit opines on truth of financial statements - reports to shareholders. Internal is risk-based and customised; statutory follows auditing standards. Same person cannot do both (Section 144)."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for non-compliance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 450: up to Rs 10,000 penalty + Rs 1,000/day for continuing default. Compoundable. Beyond penalties, non-compliance creates governance risk, potential statutory audit qualification, and impacts investor confidence and regulatory standing."
          }
        },
        {
          "@type": "Question",
          "name": "What does an internal audit cover?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scope defined by audit committee/Board with internal auditor. Common areas: financial controls, operational processes (procurement, revenue, payroll, inventory), regulatory compliance (Companies Act, GST, TDS, labour laws), IT general controls, and fraud risk assessment."
          }
        },
        {
          "@type": "Question",
          "name": "How often should internal audit be done?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Periodicity defined by audit committee or Board. Listed companies typically quarterly aligned with Board meetings. Unlisted commonly half-yearly or quarterly. Depends on size, risk profile, and regulatory requirements. Patron recommends quarterly for most Gurugram companies."
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
                        Internal Audit Services in Gurugram: CA-Led Risk Assessment, Process Audit and Section 138 Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicable To:</span> Listed (all), unlisted public (capital Rs 50Cr/turnover Rs 200Cr/loans Rs 100Cr/deposits Rs 25Cr), private (turnover Rs 200Cr/loans Rs 100Cr)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deliverables:</span> Risk assessment matrix, internal audit report, management letter with process improvement recommendations</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Standards:</span> ICAI Standards on Internal Audit (SIA) | CA/CMA-led teams</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Frequency:</span> Quarterly / half-yearly / annual (as defined by audit committee and board)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Internal%20Audit%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20internal%20audit%20services%20in%20Gurugram.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Internal%20Audit%20in%20Gurugram.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Internal Audit in Gurugram',
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
    'ctaText'    => 'Patron has helped 10,000+ businesses with internal audit, governance frameworks, and compliance. Gurugram companies trust us for CA-led risk-based audit with actionable management letters.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Internal vs Statutory</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Services in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Internal Audit in Gurugram Services at a Glance</strong></p>
                    <p>Internal audit is the independent evaluation of internal controls, financial processes, operational efficiency, risk management, and regulatory compliance. Under Section 138 of the Companies Act, 2013, it is mandatory for all listed companies and for unlisted public and private companies exceeding prescribed thresholds (turnover Rs 200 crore, loans Rs 100 crore, paid-up capital Rs 50 crore, or deposits Rs 25 crore). The internal auditor must be a CA, CMA, or other qualified professional (not the statutory auditor). Patron delivers risk-based audit with ICAI SIA methodology and actionable management letters.</p>
                </div>
                <p>Gurugram's corporate ecosystem spans the full Section 138 spectrum. DLF Cyber City houses listed IT companies and MNCs. Udyog Vihar and Manesar IMT have manufacturers crossing turnover thresholds. Golf Course Road hosts PE-backed companies with significant borrowings. Even growth-stage startups are adopting voluntary internal audit for investor readiness. Learn more about <a href="/internal-audit">Internal Audit across India</a>.</p>
                <p>Patron approaches internal audit differently - using ICAI SIA standards and risk-based methodology, our CA-led teams assess not just compliance but operational efficiency, process gaps, and fraud risk. Every engagement delivers a management letter with specific, actionable recommendations. Office on Golf Course Extension Road. Also see <a href="/accounting-services/gurugram">Accounting Services in Gurugram</a>.</p>
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
                <h2 class="section-title">What Is Internal Audit?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Internal audit is an independent, objective assurance and consulting activity designed to add value and improve an organisation's operations by systematically evaluating the effectiveness of risk management, internal controls, governance processes, and compliance with applicable laws and policies, conducted by a CA, CMA, or other professional appointed under Section 138 of the Companies Act, 2013.</p>
                    <p>Unlike statutory audit (truth and fairness of financial statements for external stakeholders), internal audit looks inward - examining how transactions are authorised, recorded, and reported, whether assets are safeguarded, whether processes operate efficiently, and whether regulatory requirements are met day-to-day. Reports to the audit committee (listed) or Board.</p>
                    <p>For Gurugram companies - IT firms in Cyber City, manufacturers in Manesar, PE-backed companies on Golf Course Road - internal audit is both a statutory obligation and a governance essential. Filed with <a href="https://www.mca.gov.in/" target="_blank" rel="noopener">RoC Delhi</a> if required.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Internal Audit in Gurugram:</strong></p>
                    <p><strong>Section 138:</strong> Companies Act provision mandating internal audit for prescribed classes of companies.</p>
                    <p><strong>Risk-Based Audit:</strong> Focus on highest-risk areas rather than uniform checklist. ICAI SIA aligned.</p>
                    <p><strong>Management Letter:</strong> Formal communication with findings, root cause analysis, and specific implementable recommendations.</p>
                    <p><strong>Audit Committee:</strong> Board committee (mandatory for listed) overseeing internal audit scope and reviewing reports.</p>
                    <p><strong>ICAI SIA:</strong> Standards on Internal Audit - professional framework for planning, fieldwork, reporting, and follow-up.</p>
                    <p><strong>Section 450:</strong> Penalty for non-compliance - up to Rs 10,000 + Rs 1,000/day continuing default. Compoundable.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Internal Audit in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Gurugram Governance</span>
                        <strong>Audit Ready</strong>
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
            <h2 class="section-title">Who Needs Internal Audit in Gurugram?</h2>
            <div class="content-text">
                
                <p><strong>Listed Companies (All - No Threshold):</strong> Every listed company must appoint internal auditor. DLF Cyber City hosts multiple listed IT, consulting, and financial services companies. SEBI LODR audit committee oversight defines scope and periodicity.</p>
                <p><strong>Unlisted Public Companies:</strong> If preceding FY: paid-up Rs 50 crore OR turnover Rs 200 crore OR loans Rs 100 crore OR deposits Rs 25 crore. Many MNC subsidiaries in Cyber City and large companies in Udyog Vihar qualify.</p>
                <p><strong>Private Companies:</strong> Turnover Rs 200 crore OR loans Rs 100 crore in preceding FY. Funded startups with venture debt and Manesar manufacturers crossing these thresholds. Must appoint within 6 months.</p>
                <p><strong>Growth Companies (Voluntary):</strong> PE-backed companies preparing for Series B/C, pre-IPO governance building, management transitions. Voluntary internal audit signals financial discipline to investors. Golf Course Road and Sohna Road startups.</p>
                <p><strong>Manufacturers (Process + Inventory Audit):</strong> Manesar IMT and Udyog Vihar - production process controls, inventory management, cost allocation, wastage monitoring, vendor payment controls. High inherent risk areas.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Services Included by Patron in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Section 138 Applicability Assessment</td><td>CA assessment of mandatory thresholds based on preceding FY financials. Written applicability report for your Gurugram company</td></tr>
                        <tr><td>Risk Assessment + Audit Planning</td><td>Enterprise risk assessment: financial, operational, compliance, strategic. Risk-based audit plan approved by audit committee or Board</td></tr>
                        <tr><td>Financial Controls Audit</td><td>Authorisation matrices, segregation of duties, bank reconciliation, journal entry controls, AP/AR ageing, financial reporting accuracy</td></tr>
                        <tr><td>Operational Process Audit</td><td>Procurement-to-payment, order-to-cash, hire-to-retire (payroll), inventory management (manufacturers), IT general controls (tech companies)</td></tr>
                        <tr><td>Compliance Audit</td><td>Companies Act, GST, TDS, ESI/PF, labour laws, industry-specific regulations, contractual obligations for Gurugram operations</td></tr>
                        <tr><td>IT General Controls Audit</td><td>User access management, change management, data backup/recovery, cybersecurity controls, IT governance. Critical for Cyber City tech companies</td></tr>
                        <tr><td>Internal Audit Report + Management Letter</td><td>Findings categorised by risk severity (high/medium/low), root cause analysis, specific actionable recommendations. Executive summary for Board</td></tr>
                        <tr><td>Audit Committee Presentations</td><td>Quarterly presentation of findings and management responses. Patron participates in audit committee meetings for listed companies</td></tr>

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
            <h2 class="section-title">How Internal Audit Works in Gurugram - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron delivers risk-based internal audit - from applicability assessment to continuous improvement across audit cycles.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Applicability Assessment and Appointment</h3><p class="step-description">Assess Section 138 thresholds based on preceding FY financials. If applicable (or voluntary), Patron appointed via Board resolution. Audit committee approves for listed companies. Written consent obtained. Scope, functioning, periodicity, and methodology defined.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Thresholds Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.138</text><text x="60" y="52" font-size="7" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Assessed</text><circle cx="85" cy="22" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M81 22L84 25L90 19" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Engaged</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Risk Assessment and Audit Planning</h3><p class="step-description">Enterprise-level risk assessment: financial, operational, compliance, strategic risks specific to your Gurugram operations. Risk-based plan prioritising high-risk areas - revenue recognition for IT (Cyber City), inventory for manufacturers (Manesar), vendor fraud for procurement-heavy companies. Plan approved by audit committee/Board.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Risks Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Plan Approved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="55" y="25" width="25" height="35" rx="3" fill="#E8EDF4" stroke="#14365F" stroke-width="0.5"/><rect x="85" y="25" width="15" height="35" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">Planned</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Fieldwork - Testing and Evaluation</h3><p class="step-description">On-site and remote: document review, transaction testing (sampling), process walkthroughs, interviews with process owners, data analytics, control testing. Conducted at Gurugram offices - Cyber City, Udyog Vihar, Manesar, or other locations. Covers the audit plan period (quarterly/half-yearly/annual).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Testing Done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Controls Evaluated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="90" cy="68" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M84 68L88 72L96 64" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Fieldwork Complete</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Findings, Root Cause Analysis, and Recommendations</h3><p class="step-description">Each finding: observation (what was found), risk implication (what could go wrong), root cause (why), specific recommendation (how to fix). Categorised high/medium/low risk. Management responses obtained. NOT a generic checklist - each recommendation is actionable and specific to your processes.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Findings Documented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Responses Obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><rect x="32" y="20" width="56" height="6" rx="2" fill="#F5A623" opacity="0.3"/><rect x="32" y="32" width="56" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="32" y="44" width="56" height="6" rx="2" fill="#10B981" opacity="0.3"/><text x="60" y="65" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">H / M / L</text></svg></div><span class="illustration-label">Analysis Done</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Internal Audit Report and Management Letter</h3><p class="step-description">Comprehensive report: executive summary, detailed findings, risk categorisation, management responses. Separate management letter to Board/audit committee with most critical control weaknesses and strategic recommendations. For listed companies: presented at quarterly audit committee meeting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Report Delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Letter Issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><text x="88" y="47" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Mgmt Letter</text></svg></div><span class="illustration-label">Reported</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Follow-Up and Continuous Improvement</h3><p class="step-description">Subsequent cycles: follow up on implementation status of previous recommendations. Unresolved high-risk findings escalated to audit committee. Creates continuous improvement cycle. Risk assessment and audit plan adjusted annually based on business changes, new risks, and regulatory updates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Follow-Up Done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Controls Strengthened</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Cycle Complete</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Internal Audit in Gurugram</h2>
            <div class="content-text">
                
                <ul><li>Company Financials (Preceding FY) - audited statements for applicability assessment</li><li>Organisation Structure - org chart, department structure, reporting lines, key process owners</li><li>Policy Documents - finance manual, procurement policy, HR policy, IT policy, delegation of authority matrix</li><li>Chart of Accounts - general ledger structure and account mapping</li><li>Previous Audit Reports - prior internal audit, statutory audit management letters, regulatory inspections</li><li>Process Documentation - SOPs for procurement, payments, payroll, revenue recognition, inventory</li><li>Bank and Financial Records - statements, loan agreements, FD receipts, bank reconciliation</li><li>Regulatory Filings - GST returns, TDS returns, ROC filings, ESI/PF returns</li><li>IT System Details - ERP/accounting software, user access lists, IT infrastructure overview</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Gurugram tip:</strong> For first-time internal audit, provide a complete delegation of authority matrix showing who approves transactions at each level. The most common weakness we find in Gurugram companies is missing or outdated authorisation matrices - especially in fast-growing startups scaled from 50 to 500 employees without updating approval workflows.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Internal Audit Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Treating Audit as Compliance Checkbox</td><td>Generic report with superficial findings filed without action. Wastes engagement fee, misses the entire purpose</td><td>Risk-based approach focusing on areas that matter to your business. Actionable recommendations that drive process improvement</td></tr>
                        <tr><td>Not Knowing Applicability Was Triggered</td><td>Companies cross Rs 200 crore turnover or Rs 100 crore loans without awareness. Must appoint within 6 months</td><td>Proactive applicability assessment for Gurugram clients as part of annual compliance planning</td></tr>
                        <tr><td>Statutory Auditor Conflicts</td><td>Section 144 prohibits statutory auditor from being internal auditor. Some inadvertently assign to associated entity</td><td>Complete independence - no conflict of interest with your statutory auditor</td></tr>
                        <tr><td>Inadequate Scope Definition</td><td>Audit committee or Board skips scope definition. Internal audit misses critical risk areas</td><td>Collaborate with audit committee to design risk-based plan covering actual risk profile</td></tr>
                        <tr><td>No Follow-Up on Findings</td><td>Findings without follow-up have zero impact. Reports filed and forgotten</td><td>Implementation status tracked every cycle. High-risk findings escalated. Accountability mechanism built in</td></tr>

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
            <h2 class="section-title">Internal Audit Fees in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Internal Audit)</td><td>Starting from INR 9,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Section 138 Compliance Audit (Small Listed/Threshold)</td><td>From Rs 50,000/quarter</td></tr>
                        <tr><td>Comprehensive Internal Audit (Turnover Rs 200-500 Cr)</td><td>From Rs 1,50,000/quarter</td></tr>
                        <tr><td>Enterprise Internal Audit (Turnover Rs 500 Cr+)</td><td>Custom pricing (quarterly/monthly)</td></tr>
                        <tr><td>Voluntary Internal Audit (Growth Stage/Pre-IPO)</td><td>From Rs 30,000/quarter</td></tr>
                        <tr><td>Process Audit - Manufacturing (Manesar/Udyog Vihar)</td><td>From Rs 75,000/audit cycle</td></tr>
                        <tr><td>IT General Controls Audit (Cyber City Tech)</td><td>From Rs 50,000/audit cycle</td></tr>
                        <tr><td>One-Time Applicability Assessment</td><td>From Rs 10,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Internal Audit in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Internal%20Audit%20in%20Gurugram.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Timeline in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>1-2 days</td></tr><tr><td>Appointment (Board Resolution)</td><td>1 Board meeting</td></tr><tr><td>Risk Assessment + Audit Planning</td><td>5-10 working days</td></tr><tr><td>Fieldwork (Per Quarter)</td><td>10-20 working days</td></tr><tr><td>Draft Report + Management Responses</td><td>5-7 working days</td></tr><tr><td>Final Report + Management Letter</td><td>3-5 working days</td></tr><tr><td>Audit Committee Presentation</td><td>1 meeting (quarterly)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> If your Gurugram company crossed Section 138 thresholds in the preceding FY, you must appoint an internal auditor within 6 months. Non-compliance: Section 450 penalties + statutory audit qualification + governance risk impacting investor confidence. The real cost of delayed internal audit is undetected fraud, unidentified inefficiency, control weakness leading to misstatement, or compliance gap triggering regulatory action.</p>

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
            <h2 class="section-title">Why Choose Patron for Internal Audit in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Risk-Based, Not Checklist</h3><p class="feature-desc">Highest-risk areas identified per company and industry. Revenue recognition for IT, inventory for manufacturers, vendor fraud for procurement. Audit resources directed where they matter most.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Actionable Management Letters</h3><p class="feature-desc">Every finding has root cause analysis + specific implementable recommendation. Not "improve controls" but "implement dual authorisation for payments above Rs 5 lakh with maker-checker in ERP."</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Gurugram Industry Expertise</h3><p class="feature-desc">IT companies (Cyber City), manufacturers (Manesar/Udyog Vihar), financial services (Golf Course Road). ICAI SIA compliance. Audit committee-grade reporting for listed companies.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Gurugram Office + Track Record</h3><p class="feature-desc">Golf Course Extension Road. On-site CA teams for fieldwork across Cyber City, Udyog Vihar, Manesar. 10,000+ businesses, 4.9 Google rating, 50,000+ documents filed, 15+ years.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Companies Across Gurugram</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle." - Startup Founder, Pune</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit vs Statutory Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Internal Audit</th><th>Statutory Audit</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Section</td><td>Section 138</td><td>Section 139</td></tr>
                        <tr><td>Purpose</td><td>Evaluate controls, processes, compliance, risk</td><td>Opine on truth and fairness of financial statements</td></tr>
                        <tr><td>Audience</td><td>Board / Audit Committee / Management</td><td>Shareholders / Regulators / Public</td></tr>
                        <tr><td>Auditor</td><td>CA / CMA / other professional</td><td>Practising CA / CA firm (independent)</td></tr>
                        <tr><td>Frequency</td><td>Quarterly / half-yearly / annual (defined by Board)</td><td>Annual (mandatory)</td></tr>
                        <tr><td>Scope</td><td>Risk-based, customised by audit committee</td><td>Financial statement focused, per auditing standards</td></tr>
                        <tr><td>Same Person?</td><td colspan="2">NO - Section 144 prohibits statutory auditor from being internal auditor</td></tr>

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
                
                <p>Patron offers complete corporate compliance in Gurugram:</p><ul>
                    <li><a href="/internal-audit">Internal Audit in India</a></li>
                    <li><a href="/accounting-services/gurugram">Accounting Services in Gurugram</a></li>
                    <li><a href="/gst-registration/gurugram">GST Registration in Gurugram</a></li>
                    <li><a href="/payroll-services/gurugram">Payroll Services in Gurugram</a></li>
                    <li><a href="/private-limited-company-registration/gurugram">Pvt Ltd Registration in Gurugram</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                    <li><a href="/startup-registration">Startup Registration</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Internal Audit in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul>
                    <li>Companies Act, 2013 - Section 138 (internal audit mandate), Section 144 (auditor independence), Section 177 (audit committee), Section 450 (penalty)</li>
                    <li>Rule 13, Companies (Accounts) Rules, 2014 - thresholds and manner of internal audit</li>
                    <li>SEBI LODR Regulation 18 - listed company audit committee must review internal audit quarterly</li>
                    <li>ICAI Standards on Internal Audit (SIA) - professional framework</li></ul>
                <p><strong>Key Portal:</strong></p><ul>
                    <li><a href="https://www.mca.gov.in/" target="_blank" rel="noopener">MCA</a> - Companies Act compliance, RoC Delhi filings</li></ul>
                <p><strong>Thresholds:</strong> Listed (all). Unlisted public (capital Rs 50Cr / turnover Rs 200Cr / loans Rs 100Cr / deposits Rs 25Cr). Private (turnover Rs 200Cr / loans Rs 100Cr). Preceding FY. Appoint within 6 months.</p>

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
                    <h2 class="faq-expanded__title">FAQs - Internal Audit in Gurugram</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about internal audit in Gurugram.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Internal Audit in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is internal audit mandatory for my company?</h3>
                        <div class="faq-expanded__a"><p>Mandatory for all listed companies. Unlisted public if paid-up Rs 50 crore OR turnover Rs 200 crore OR loans Rs 100 crore OR deposits Rs 25 crore in preceding FY. Private if turnover Rs 200 crore OR loans Rs 100 crore. Patron assesses applicability based on your financials.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is internal audit under Section 138?</h3>
                        <div class="faq-expanded__a"><p>Section 138 requires prescribed companies to appoint an internal auditor (CA, CMA, or other professional) to evaluate internal controls, financial processes, operational efficiency, and regulatory compliance. Scope defined by audit committee or Board. Reports findings and recommendations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Who can be an internal auditor?</h3>
                        <div class="faq-expanded__a"><p>CA (practising or not), CMA, or other professional decided by Board. Can be employee or external firm. CA and CMA firms eligible. Statutory auditor or associated firm cannot be internal auditor under Section 144. Patron provides external CA-led teams for Gurugram companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the thresholds for mandatory internal audit?</h3>
                        <div class="faq-expanded__a"><p>Listed: all mandatory (no threshold). Unlisted public: paid-up Rs 50 crore OR turnover Rs 200 crore OR loans Rs 100 crore OR deposits Rs 25 crore - any ONE in preceding FY. Private: turnover Rs 200 crore OR loans Rs 100 crore. Appointment within 6 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between internal audit and statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Internal audit evaluates controls, processes, and efficiency - reports to Board/audit committee. Statutory audit opines on truth of financial statements - reports to shareholders. Internal is risk-based and customised; statutory follows auditing standards. Same person cannot do both (Section 144).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the penalties for non-compliance?</h3>
                        <div class="faq-expanded__a"><p>Section 450: up to Rs 10,000 penalty + Rs 1,000/day for continuing default. Compoundable. Beyond penalties, non-compliance creates governance risk, potential statutory audit qualification, and impacts investor confidence and regulatory standing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What does an internal audit cover?</h3>
                        <div class="faq-expanded__a"><p>Scope defined by audit committee/Board with internal auditor. Common areas: financial controls, operational processes (procurement, revenue, payroll, inventory), regulatory compliance (Companies Act, GST, TDS, labour laws), IT general controls, and fraud risk assessment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How often should internal audit be done?</h3>
                        <div class="faq-expanded__a"><p>Periodicity defined by audit committee or Board. Listed companies typically quarterly aligned with Board meetings. Unlisted commonly half-yearly or quarterly. Depends on size, risk profile, and regulatory requirements. Patron recommends quarterly for most Gurugram companies.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Internal audit compulsory hai kya?</strong> Listed company = haan, bina threshold ke. Private: turnover Rs 200 crore ya loans Rs 100 crore preceding FY. Patron assess karta hai.</p><p><strong>Internal audit aur statutory audit mein kya fark hai?</strong> Internal = controls aur processes check, Board ko report. Statutory = financial statements ki sacchai, shareholders ko report. Dono ek person nahi kar sakta.</p><p><strong>Penalty kitni hai?</strong> Section 450: Rs 10,000 + Rs 1,000/day continuing default. Compoundable.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Internal Audit for Your Gurugram Company Before the Next Board Meeting</h2>
            <div class="content-text">
                
                <p>If your company crossed Section 138 thresholds, you must appoint within 6 months. Non-compliance: penalties + statutory audit qualification + governance risk. The real cost is undetected fraud, unidentified inefficiency, and compliance gaps. For companies preparing for funding rounds or IPOs, internal audit findings are the first thing diligence teams examine.</p><p><strong>Engage now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Internal%20Audit%20in%20Gurugram.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Internal Audit in Gurugram with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Internal audit is the governance backbone for Gurugram's corporate ecosystem. Whether mandated under Section 138 or adopted voluntarily for investor readiness, it delivers stronger controls, reduced fraud risk, process efficiency, and regulatory compliance. The key: risk-based approach over compliance checkbox.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-led internal audit with ICAI SIA methodology, industry-specific expertise (IT, manufacturing, financial services), actionable management letters, and audit committee-grade reporting. 15+ years, 10,000+ businesses served.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Internal%20Audit%20in%20Gurugram.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Internal%20Audit%20in%20Gurugram&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20internal%20audit%20services%20in%20Gurugram.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Internal Audit Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides internal audit in 8 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/internal-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/internal-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/internal-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/internal-audit/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/internal-audit/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/internal-audit/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/internal-audit/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end corporate compliance in Gurugram</div><div class="pa-cross-grid"><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/startup-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/iec-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (Freshness Tier 2) to incorporate Companies Act amendments, Section 138 threshold updates, ICAI SIA standard revisions, and SEBI LODR governance changes. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
