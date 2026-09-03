@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">@section('meta')
    <title>Internal Audit in Kolkata – Scope, IFC, Risk &amp; Reporting</title>
    <meta name="description" content="CA-managed internal audit in Kolkata. Section 138 Companies Act. Financial controls, GST reconciliation, risk assessment. Quarterly reports. Call +91 945 945 6700.">
    <link rel="canonical" href="/internal-audit/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Internal Audit in Kolkata – Scope, IFC, Risk &amp; Reporting"><meta property="og:description" content="Internal audit Kolkata. Section 138. Controls risk compliance. Call +91 945 945 6700.">
    <meta property="og:url" content="/internal-audit/kolkata"><meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on"><meta name="twitter:card" content="summary_large_image">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Internal Audit in Kolkata",
          "description": "CA-managed internal audit in Kolkata. Section 138 Companies Act. Financial controls, GST reconciliation, risk assessment. Quarterly reports. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/internal-audit/kolkata",
          "serviceType": "Internal Audit in Kolkata",
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
            "url": "https://www.patronaccounting.com/internal-audit/kolkata",
            "price": "25000"
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
              "name": "Internal Audit",
              "item": "https://www.patronaccounting.com/internal-audit"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Internal Audit Kolkata",
              "item": "https://www.patronaccounting.com/internal-audit/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is internal audit mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Mandatory under Section 138 for listed companies, unlisted public turnover 200Cr or loans 100Cr, private companies same thresholds."
              }
            },
            {
              "@type": "Question",
              "name": "Who can be internal auditor?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "CA CMA or Board-approved professional. Can be employee or external. Cannot be statutory auditor Section 144b."
              }
            },
            {
              "@type": "Question",
              "name": "What does it cover?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Financial controls, process efficiency, compliance Companies Act IT Act GST Act, risk management, inventory, revenue recognition, fraud detection."
              }
            },
            {
              "@type": "Question",
              "name": "How often?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No prescribed frequency but quarterly recommended. Board or Audit Committee defines periodicity in audit charter."
              }
            },
            {
              "@type": "Question",
              "name": "Penalty?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 450. Rs 10,000 initial plus Rs 1,000 per day continuing default. Public companies must file MGT-14."
              }
            },
            {
              "@type": "Question",
              "name": "Different from statutory audit?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Internal audit evaluates controls processes risk reports to Board. Statutory audit examines financial statements reports to shareholders."
              }
            },
            {
              "@type": "Question",
              "name": "Cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Small Pvt Ltd Rs 25,000-75,000 annual. Mid-size Rs 75,000-2 lakh. Large or listed Rs 2-10 lakh. Manufacturing with inventory more."
              }
            },
            {
              "@type": "Question",
              "name": "Voluntary for SMEs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Growing Kolkata SMEs benefit from voluntary internal audit for better controls before Section 138 threshold is crossed."
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
                        Internal Audit Service in Kolkata: CA-Managed Compliance, Risk & Process Audit
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability::</span> Listed companies | Pvt Ltd (turnover ≥ Rs 200 Cr / loans ≥ Rs 100 Cr) | Unlisted public</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Also::</span> Voluntary for growing SMEs, VC-funded startups, NGOs with FCRA</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Auditor::</span> CA / CMA / Board-approved professional | Cannot be statutory auditor</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Authority::</span> Section 138, Companies Act 2013 | Audit Committee / Board | Quarterly recommended</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Internal Audit',
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
    'ctaText'    => 'Kolkata companies trust Patron for internal audit, GST reconciliation, and compliance management.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a>
<a href="#what-section" class="toc-btn">What Is Internal Audit</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Information</a>
<a href="#challenges-section" class="toc-btn">Common Issues</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Internal vs Statutory</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit in Kolkata: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Internal Audit Services at a Glance</strong></p>
                    <p>Internal audit in Kolkata is an independent review of financial controls, processes, risk management, and compliance - mandated under Section 138 Companies Act 2013 for specified companies. Internal auditor (CA/CMA/Board-approved) evaluates controls, detects irregularities, and recommends improvements. Scope defined by Audit Committee/Board. Penalty for non-compliance: Rs 10,000 + Rs 1,000/day.</p>
                </div>
                <p>Kolkata's corporate landscape - listed companies, growing Pvt Ltds at RoC Nizam Palace, Salt Lake IT approaching thresholds, Taratala manufacturers, Dalhousie BFSI, and FCRA NGOs - all benefit from internal audit as first line of defence. Learn more about <a href="/internal-audit">Internal Audit across India</a>.</p>
                <p>Patron provides integrated internal audit covering MCA (Section 138), tax audit coordination (Section 44AB), GST reconciliation (GSTR-9C), and operational process reviews. Same CA handles <a href="/gst-registration/kolkata">GST</a>, <a href="/zoho-books-accounting">accounting</a>, and <a href="/private-limited-company-registration/kolkata">Pvt Ltd compliance</a>.</p>
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
                    
                    <p>Internal audit is an independent examination of a company's financial controls, processes, risk management, and regulatory compliance to strengthen governance and prevent fraud, misstatement, and inefficiency.</p>
<p>Mandatory under Section 138 for listed companies, threshold-crossing public and private companies. Voluntary for growing SMEs. Auditor: CA, CMA, or Board-approved professional (not statutory auditor). Quarterly recommended.</p>
<p>For Kolkata: Salt Lake IT companies (revenue recognition), Taratala manufacturers (inventory controls), Dalhousie BFSI (regulatory compliance), Burrabazar traders (purchase verification), and FCRA NGOs (foreign contribution utilisation).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Internal Audit:</strong></p>
                    <ul>
<li><strong>Section 138:</strong> Companies Act mandate for internal audit</li>
<li><strong>I-LCD Test:</strong> Income ≥ 200 Cr | Loans ≥ 100 Cr | Capital ≥ 50 Cr (public) | Deposits ≥ 25 Cr (public)</li>
<li><strong>Audit Charter:</strong> Scope, periodicity, methodology document agreed with Board</li>
<li><strong>Risk Heat Map:</strong> Financial, operational, regulatory, reputational risk assessment</li>
<li><strong>Walk-Through Testing:</strong> End-to-end process verification</li>
<li><strong>GSTR-9C:</strong> GST reconciliation statement (self-certified > Rs 5 Cr turnover)</li>
<li><strong>Section 450:</strong> Penalty Rs 10,000 + Rs 1,000/day continuing default</li>
<li><strong>Section 144(b):</strong> Statutory auditor cannot be internal auditor</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Internal Audit illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Magnifying glass -->
                            <circle cx="85" cy="65" r="18" fill="#fff" stroke="#14365F" stroke-width="2"/>
                            <line x1="98" y1="78" x2="115" y2="95" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                            <!-- Checklist inside -->
                            <line x1="77" y1="58" x2="93" y2="58" stroke="#25D366" stroke-width="1.5"/>
                            <line x1="77" y1="65" x2="93" y2="65" stroke="#E8712C" stroke-width="1.5"/>
                            <line x1="77" y1="72" x2="93" y2="72" stroke="#25D366" stroke-width="1.5"/>
                            <!-- Chart bars -->
                            <rect x="120" y="50" width="8" height="30" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <rect x="132" y="60" width="8" height="20" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <rect x="144" y="45" width="8" height="35" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SECTION 138</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Internal Audit</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>SECTION 138</span>
                        <strong>Internal Audit</strong>
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
            <h2 class="section-title">Who Needs Internal Audit in Kolkata?</h2>
            <div class="content-text">
                
                <p><strong>Listed Companies:</strong> All Kolkata-listed companies on BSE/NSE must appoint internal auditor regardless of size.</p>
<p><strong>Unlisted Public Companies:</strong> Paid-up capital ≥ Rs 50 Cr OR turnover ≥ Rs 200 Cr OR loans ≥ Rs 100 Cr OR deposits ≥ Rs 25 Cr.</p>
<p><strong>Private Companies:</strong> Turnover ≥ Rs 200 Cr OR loans from banks/PFIs ≥ Rs 100 Cr.</p>
<p><strong>Growing Pvt Ltds/LLPs (Voluntary):</strong> Approaching Section 138 thresholds. Prepare controls before mandate kicks in.</p>
<p><strong>VC-Funded Startups (New Town):</strong> Investor-mandated internal audit requirements. Governance reporting to board.</p>
<p><strong>NGOs/Trusts (FCRA):</strong> Internal controls review for foreign contribution utilisation. FCRA audit support.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal Audit Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Financial Controls Audit</td><td>Accounting policies, revenue recognition, expense approvals, bank reconciliation, petty cash. Manufacturing: WIP, inventory costing</td></tr>
<tr><td>Process and Operational Audit</td><td>Procurement, sales, payroll, IT controls. Salt Lake IT: project billing, timesheet, SaaS revenue recognition</td></tr>
<tr><td>Compliance Audit</td><td>Companies Act (ROC filings), IT Act (TDS, advance tax), GST Act (GSTR reconciliation), industry-specific (FSSAI, Drug License)</td></tr>
<tr><td>Risk Assessment</td><td>Financial, operational, regulatory, reputational risk identification. Risk heat map. Mitigation strategies</td></tr>
<tr><td>Internal Control Testing</td><td>Design and operating effectiveness. Walk-through, substantive, exception reporting. Burrabazar: purchase verification</td></tr>
<tr><td>GST Reconciliation Review</td><td>GSTR-1/3B/2B vs books. ITC mismatches, reverse charge omissions. GSTR-9C for turnover > Rs 5 Cr</td></tr>
<tr><td>Tax Audit Coordination</td><td>Section 138 + Section 44AB alignment. Form 3CA/3CD coordination. Single-team efficiency</td></tr>
<tr><td>Board/Audit Committee Reporting</td><td>Quarterly reports. Executive summary, findings (High/Medium/Low), recommendations, management responses. Follow-up tracking</td></tr>

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
            <h2 class="section-title">Internal Audit Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From scope definition to fieldwork, reporting, and Board presentation - here's how Patron delivers internal audit for your Kolkata company.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Scope Definition with Audit Committee/Board</h3><p class="step-description">CA meets Audit Committee or Board to define scope, coverage areas, periodicity (quarterly/half-yearly), and methodology. Internal Audit Charter or Engagement Letter documented.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scope defined</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Charter signed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SCOPE</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">CHARTER</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DEFINED</text></svg></div><span class="illustration-label">Scope Set</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Risk Assessment and Audit Plan</h3><p class="step-description">Preliminary risk assessment by industry. IT: revenue recognition. Manufacturing: inventory. Trading: purchase verification. Annual plan with quarterly deliverables.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Risks assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Plan documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">RISK</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">HEAT MAP</text><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PLANNED</text></svg></div><span class="illustration-label">Plan Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Fieldwork - Testing and Evidence</h3><p class="step-description">On-site or remote (cloud accounting). Transaction testing, walk-through of processes, bank reconciliation, fixed asset register, inventory verification, compliance checklist. All findings documented.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fieldwork done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Evidence collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TESTING</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WALK-THROUGH</text><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Tested</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Draft Internal Audit Report</h3><p class="step-description">Executive Summary, Scope, Key Findings (High/Medium/Low severity), Root Cause Analysis, Management Recommendations, Compliance Status. Each finding with risk implication.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Report drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Findings categorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">REPORT</text><text x="60" y="38" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">HIGH</text><text x="60" y="50" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">MEDIUM</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">LOW</text></svg></div><span class="illustration-label">Report Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Management Discussion and Response</h3><p class="step-description">Draft shared with management. Responses and action plans for each finding incorporated. Disputed findings escalated to Audit Committee/Board.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Management responded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Actions planned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">MANAGEMENT</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">RESPONSE</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">ACTION PLANS</text></svg></div><span class="illustration-label">Reviewed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Final Report to Board + Follow-Up</h3><p class="step-description">Final report presented to Audit Committee/Board. Key findings and recommendations discussed. Action items assigned with timelines. CA tracks implementation in next cycle.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board presented</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Follow-up tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BOARD</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PRESENTED</text><text x="60" y="55" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">FOLLOW-UP</text></svg></div><span class="illustration-label">Cycle Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Information Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Financial Statements:</strong> Trial balance, P&L, balance sheet (current + prior year)</li>
<li><strong>Bank Statements:</strong> All bank accounts for the audit period</li>
<li><strong>GST Returns:</strong> GSTR-1, GSTR-3B, GSTR-2B for reconciliation</li>
<li><strong>TDS Returns:</strong> Form 24Q/26Q, challans, Form 26AS</li>
<li><strong>Statutory Registers:</strong> Board minutes, annual return, ROC filings</li>
<li><strong>Process Documentation:</strong> SOPs, approval matrices, policy manuals (if available)</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Kolkata-Specific Tip:</strong> Taratala and Howrah manufacturers should have physical stock records ready for inventory verification. Salt Lake IT companies should prepare timesheet and project billing data. Patron's CA coordinates document collection digitally via Zoho Books or Tally export.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Issues Found in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Weak Segregation of Duties</td><td>Same person handles cash, bank, and accounting</td><td>Role separation or compensating controls recommended</td></tr>
<tr><td>Inventory Discrepancies</td><td>Physical vs book stock variances in manufacturers</td><td>Surprise verification, shrinkage analysis, dead stock identification</td></tr>
<tr><td>GST Reconciliation Gaps</td><td>GSTR-1/3B/2B vs books mismatches</td><td>ITC over-claims, reverse charge omissions identified before scrutiny</td></tr>
<tr><td>TDS Non-Compliance</td><td>Late deduction, wrong section codes, incorrect Form 16</td><td>Full TDS compliance verification and Form 26AS reconciliation</td></tr>
<tr><td>Missing Board Resolution</td><td>Section 138 met but no internal auditor appointment</td><td>CA ensures proper appointment documentation and MGT-14 filing</td></tr>

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
            <h2 class="section-title">Internal Audit Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Pvt Ltd (Voluntary)</td><td>Rs 25,000-75,000 annual (quarterly review, key process testing)</td></tr>
<tr><td>Mid-size Pvt Ltd (Section 138)</td><td>Rs 75,000-2,00,000 annual (comprehensive, quarterly reports)</td></tr>
<tr><td>Large / Listed Company</td><td>Rs 2,00,000-10,00,000 annual (full-scope, multi-department, board presentations)</td></tr>
<tr><td>Manufacturing (with Inventory)</td><td>Rs 1,00,000-3,00,000 annual (includes stock verification, cost audit coordination)</td></tr>
<tr><td>NGO / Trust (FCRA)</td><td>Rs 50,000-1,50,000 annual (FCRA utilisation, donor compliance)</td></tr>
<tr><td>Tax Audit Coordination (add-on)</td><td>Rs 15,000-50,000 (aligned with internal audit, Form 3CA/3CD)</td></tr>
<tr><td>GST Reconciliation Review</td><td>Rs 15,000-40,000 (GSTR-1/3B/2B cross-verification)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Internal Audit consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Audit Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Scope Definition + Charter</td><td>Week 1-2 (with Audit Committee/Board)</td></tr>
<tr><td>Risk Assessment + Audit Plan</td><td>Week 2-3 (annual plan with quarterly deliverables)</td></tr>
<tr><td>Fieldwork + Testing</td><td>Week 3-6 (on-site or remote, process by process)</td></tr>
<tr><td>Draft Report</td><td>Week 6-7 (findings, root cause, recommendations)</td></tr>
<tr><td>Management Discussion</td><td>Week 7-8 (responses and action plans)</td></tr>
<tr><td>Final Report + Board Presentation</td><td>Week 8-10 (follow-up tracking begins)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Kolkata Processing Note:</strong> Internal audit is conducted on-site or remotely via cloud accounting (Zoho Books/Tally). Quarterly cycle recommended. Reports presented to Audit Committee/Board. CA tracks follow-up implementation in next audit cycle.</p>

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
            <h2 class="section-title">Why Choose Patron for Internal Audit in Kolkata?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Integrated Audit Approach</h3><p>MCA (Section 138) + Tax Audit (44AB) + GST reconciliation in one engagement. Not three separate exercises.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Industry-Specific Intelligence</h3><p>IT (Salt Lake): revenue recognition. Manufacturing (Taratala): inventory. Trading (Burrabazar): purchase verification. BFSI (Dalhousie): regulatory.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-location companies get coordinated internal audit across all sites.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Actionable Findings</h3><p>Not just checklists. Root cause analysis, management recommendations, and follow-up tracking. Board-ready reports quarterly.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Kolkata Companies</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron's internal audit caught GST reconciliation gaps worth Rs 12 lakh in ITC over-claims. Their quarterly reports are Board-ready and actionable. Tax audit is coordinated in the same engagement."</p><p style="font-weight:700;color:var(--blue);margin:0;">- CFO, Manufacturing Company, Taratala</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Internal vs Statutory vs Tax Audit</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Internal Audit</th><th>Statutory Audit</th><th>Tax Audit</th></tr></thead>
                    <tbody>
                        <tr><td>Authority</td><td>Board / Audit Committee</td><td>MCA (Section 143)</td><td>CBDT (Section 44AB)</td></tr>
<tr><td>Auditor</td><td>CA/CMA/Board-approved (not statutory auditor)</td><td>CA appointed by shareholders</td><td>CA (statutory auditor can do)</td></tr>
<tr><td>Focus</td><td>Controls, processes, risk, compliance</td><td>Financial statements accuracy</td><td>Tax compliance, income/expense</td></tr>
<tr><td>Frequency</td><td>Quarterly (recommended)</td><td>Annual</td><td>Annual</td></tr>
<tr><td>Report To</td><td>Audit Committee / Board</td><td>Shareholders via AGM</td><td>IT Department (e-filing)</td></tr>
<tr><td>Mandatory For</td><td>Listed + threshold companies</td><td>All companies</td><td>Turnover > Rs 1 Cr / Rs 10 Cr</td></tr>

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
<li><a href="/internal-audit">Internal Audit in India</a> - National services</li>
<li><a href="/zoho-books-accounting">Zoho Books Accounting in Kolkata</a> - Cloud bookkeeping</li>
<li><a href="/gst-registration/kolkata">GST Registration in Kolkata</a> - GST compliance</li>
<li><a href="/private-limited-company-registration/kolkata">Pvt Ltd in Kolkata</a> - Company compliance</li>
<li><a href="/payroll-services/kolkata">Payroll in Kolkata</a> - Salary TDS and statutory</li>
<li><a href="/income-tax-return/kolkata">ITR in Kolkata</a> - Tax filing</li>
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
<li>Section 138 Companies Act 2013 | Rule 13 Companies (Accounts) Rules 2014</li>
<li>I-LCD: Income ≥ 200 Cr | Loans ≥ 100 Cr | Capital ≥ 50 Cr (public) | Deposits ≥ 25 Cr (public)</li>
<li>Listed companies: always mandatory</li>
<li>Private: I or L threshold | Cannot be statutory auditor (Section 144(b))</li>
<li>Section 450: Rs 10,000 + Rs 1,000/day continuing default</li>
<li>ICAI 60-audit cap per CA from April 2026</li>
</ul>
<p><strong>Auditor:</strong> CA (practicing/non-practicing) | CMA | Board-approved professional | Employee or external consultant</p>
<p><strong>2026 Changes:</strong> ICAI 60-audit cap | IT Act 2025 effective 01.04.2026 | GSTR-9C self-certified > Rs 5 Cr</p>

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
                    <h2 class="faq-expanded__title">FAQs - Internal Audit in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about Section 138 applicability, auditor eligibility, scope, frequency, fees, and penalties for Kolkata companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Internal Audit',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is internal audit mandatory for my company?</h3>
                        <div class="faq-expanded__a"><p>Mandatory under Section 138 for: all listed companies, unlisted public (turnover ≥ Rs 200 Cr OR loans ≥ Rs 100 Cr OR capital ≥ Rs 50 Cr OR deposits ≥ Rs 25 Cr), private (turnover ≥ Rs 200 Cr OR loans ≥ Rs 100 Cr). Voluntary for others.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who can be internal auditor?</h3>
                        <div class="faq-expanded__a"><p>CA (practicing or non-practicing), CMA, or Board-approved professional. Employee or external consultant. Cannot be statutory auditor (Section 144(b)). Patron provides external CA-managed internal audit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What does internal audit cover?</h3>
                        <div class="faq-expanded__a"><p>Financial controls, process efficiency, compliance (Companies Act, IT Act, GST Act), risk management, inventory (manufacturers), revenue recognition (IT), and fraud detection. Scope defined by Board.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How often should it be done?</h3>
                        <div class="faq-expanded__a"><p>No prescribed frequency but quarterly recommended for timely detection and alignment with quarterly financial reporting. Board/Audit Committee defines periodicity in audit charter.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty?</h3>
                        <div class="faq-expanded__a"><p>Section 450: Rs 10,000 initial penalty for company and responsible officers. Rs 1,000 per day continuing default. Public companies must file MGT-14 for appointment resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is it different from statutory audit?</h3>
                        <div class="faq-expanded__a"><p>Yes. Internal audit evaluates controls, processes, and risk (reports to Board). Statutory audit examines financial statements (reports to shareholders). Different auditors required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What does it cost?</h3>
                        <div class="faq-expanded__a"><p>Small Pvt Ltd voluntary: Rs 25,000-75,000 annual. Mid-size Section 138: Rs 75,000-2 lakh. Large/listed: Rs 2-10 lakh. Manufacturing with inventory costs more.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can growing SMEs benefit from voluntary audit?</h3>
                        <div class="faq-expanded__a"><p>Yes. Preparing controls before Section 138 threshold is crossed ensures smooth transition. VC-funded startups often have investor-mandated audit requirements.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Internal audit kya hota hai?</strong> Company ke controls, processes, compliance ka independent review. Board ko report. Section 138 ke under kuch companies ke liye mandatory.</p>
<p><strong>Kya chhoti company ko zaroori hai?</strong> Turnover Rs 200 Cr / loans Rs 100 Cr se kam toh mandatory nahi. Voluntary karwana governance ke liye achha hai.</p>
<p><strong>Penalty?</strong> Section 450: Rs 10,000 + Rs 1,000 per day continuing default.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Start Internal Audit Today</h2>
            <div class="content-text">
                
                <p>Companies meeting Section 138 thresholds must comply within 6 months. Non-compliance: Rs 10,000 + Rs 1,000/day. Companies approaching thresholds should establish internal audit before mandate. 2026 audit season requires reports before statutory audit begins. Start with CA-managed internal audit today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Internal Audit in Kolkata</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Internal audit in Kolkata is mandatory under Section 138 for listed and threshold-crossing companies, and valuable voluntary governance for growing businesses.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Kolkata companies across Salt Lake, Dalhousie, Taratala, Howrah, New Town, and Burrabazar benefit from integrated audit covering MCA, tax, GST, and operational processes with actionable Board-ready findings.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Internal%20Audit&body=Hello%2C%20I%20just%20visited%20your%20Internal%20Audit%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Internal Audit Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-managed compliance and risk audit in 8 cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/internal-audit/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/internal-audit/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/internal-audit/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/internal-audit/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/internal-audit/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/internal-audit/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/internal-audit/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Kolkata</div><div class="pa-block-sub">End-to-end audit, accounting, and compliance</div><div class="pa-cross-grid">
<a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/payroll-services/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/trademark-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers internal audit in Kolkata including Section 138, I-LCD thresholds, financial controls, GST reconciliation, risk assessment, and Board reporting. Reviewed semi-annually. Freshness Tier 2.</p>
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
