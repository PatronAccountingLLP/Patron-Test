@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('meta')
    <title>TAN Registration in Hyderabad – Form 49B, Process &amp; Fees</title>
    <meta name="description" content="CA-assisted TAN registration in Hyderabad. Form 49B, TDS compliance, Challan 281, quarterly returns. HYD jurisdiction. Call +91 945 945 6700.">
    <link rel="canonical" href="/tan-registration/hyderabad">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TAN Registration in Hyderabad – Form 49B, Process &amp; Fees">
    <meta property="og:description" content="CA-assisted TAN registration Hyderabad. Form 49B, TDS, Challan 281. HYD code. Call +91 945 945 6700.">
    <meta property="og:url" content="/tan-registration/hyderabad">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="TAN Registration in Hyderabad – Form 49B, Process &amp; Fees">
    <meta name="twitter:description" content="TAN registration Hyderabad. Form 49B, TDS. Rs 77. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "TAN Registration in Hyderabad",
          "description": "CA-assisted TAN registration in Hyderabad. Form 49B, TDS compliance, Challan 281, quarterly returns. HYD jurisdiction. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/tan-registration/hyderabad",
          "serviceType": "TAN Registration in Hyderabad",
          "areaServed": {
            "@type": "City",
            "name": "Hyderabad"
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
            "url": "https://www.patronaccounting.com/tan-registration/hyderabad",
            "price": "999"
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
              "name": "TAN Registration",
              "item": "https://www.patronaccounting.com/tan-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "TAN Registration Hyderabad",
              "item": "https://www.patronaccounting.com/tan-registration/hyderabad"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to apply for TAN in Hyderabad?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File Form 49B on Protean TIN portal. Pay Rs 77. TAN with HYD code allotted in 5-7 days. Register on IT e-filing portal."
              }
            },
            {
              "@type": "Question",
              "name": "What is TAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "10-digit Tax Deduction Account Number mandatory for all TDS/TCS deductors. Hyderabad TANs start with HYD. Penalty Rs 10,000 without."
              }
            },
            {
              "@type": "Question",
              "name": "How much does TAN cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 65 plus GST equals approximately Rs 77. New companies get TAN free via SPICe+ during incorporation."
              }
            },
            {
              "@type": "Question",
              "name": "Is TAN mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes under Section 203A for all TDS/TCS deductors. Employers, companies paying professional fees, property buyers above Rs 50 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "What is penalty without TAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 10,000 under Section 272BB. Plus late TDS deposit 1.5% monthly interest. Late return Rs 200 per day."
              }
            },
            {
              "@type": "Question",
              "name": "Is TAN same as PAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. TAN for TDS/TCS deduction and deposit. PAN for income tax identification. Both needed by businesses."
              }
            },
            {
              "@type": "Question",
              "name": "When to deposit TDS?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "By 7th of following month via Challan 281. March deadline 30th April. Late attracts 1.5% monthly interest."
              }
            },
            {
              "@type": "Question",
              "name": "Can company have multiple TANs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes if different persons responsible at different locations. But illegal to have multiple TANs for same deducting authority."
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
                        TAN Registration in Hyderabad: Tax Deduction Account Number for TDS Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section::</span> 203A of Income Tax Act | Mandatory for all TDS/TCS deductors</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form::</span> 49B | Portal: Protean (NSDL) TIN | Fee: Rs 65 + GST (~Rs 77)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TAN Format::</span> 10-digit alphanumeric (HYD + initial + 5 digits + check) for Hyderabad</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty::</span> Rs 10,000 for not obtaining or not quoting TAN</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TAN%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'TAN Registration',
                                            'city'     => 'Hyderabad',
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
    'ctaText'    => 'Hyderabad employers trust Patron for TAN registration, TDS compliance, and Form 16 management.',
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
<a href="#what-section" class="toc-btn">What Is TAN</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">TAN vs PAN</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration in Hyderabad: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TAN Registration Services at a Glance</strong></p>
                    <p>TAN (Tax Deduction and Collection Account Number) is a 10-digit alphanumeric code mandatory for every person or entity responsible for deducting TDS or collecting TCS. Hyderabad TANs start with 'HYD' (jurisdiction code). TAN is obtained by filing Form 49B on the Protean (NSDL) TIN portal for Rs 65 + GST. Without TAN, TDS cannot be deposited, returns cannot be filed, and Form 16/16A cannot be issued. Penalty for not obtaining TAN: Rs 10,000.</p>
                </div>
                <p>TAN is essential for Hyderabad's business ecosystem. HITEC City IT companies must deduct TDS on salary (Section 192). Gachibowli tech firms paying freelancers deduct TDS on professional fees (194J). Property buyers in Banjara Hills above Rs 50 lakh deduct 1% TDS (194-IA). Secunderabad traders collect TCS on goods. Even NGOs paying salaries need TAN. Learn more about <a href="/tan-registration">TAN Registration across India</a>.</p>
                <p>New companies via RoC Hyderabad get TAN auto-generated via SPICe+. For existing businesses, Patron files Form 49B, registers TAN on IT e-filing portal, and manages the complete TDS lifecycle - from TAN to Challan 281, quarterly returns, Form 16, and annual reconciliation. Same CA handles <a href="/payroll-services/hyderabad">payroll</a>, <a href="/income-tax-return/hyderabad">ITR</a>, and accounting.</p>
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
                    
                    <p>TAN registration is the process of obtaining a Tax Deduction and Collection Account Number under Section 203A of the Income Tax Act by filing Form 49B, mandatory for every person responsible for deducting TDS or collecting TCS from specified payments.</p>
<p>TAN must be quoted on: TDS/TCS challans (Challan 281), returns (24Q, 26Q, 27Q, 27EQ), certificates (Form 16, 16A, 27D), and all IT Department correspondence. The TAN format for Hyderabad is HYDX12345B - HYD (jurisdiction), X (initial), 5 serial digits, check letter.</p>
<p>For Hyderabad businesses, TAN triggers a monthly cycle: deduct TDS, deposit via Challan 281 by 7th, file quarterly returns, issue Form 16/16A, and reconcile with Form 26AS. Patron manages this entire cycle after TAN registration.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TAN Registration:</strong></p>
                    <ul>
<li><strong>TAN:</strong> 10-digit Tax Deduction and Collection Account Number (HYD for Hyderabad)</li>
<li><strong>Form 49B:</strong> Application form for TAN allotment on Protean portal</li>
<li><strong>Challan 281:</strong> TDS/TCS deposit challan, due by 7th of following month</li>
<li><strong>Form 24Q:</strong> Quarterly TDS return for salary deductions</li>
<li><strong>Form 26Q:</strong> Quarterly TDS return for non-salary deductions</li>
<li><strong>Form 16:</strong> Annual TDS certificate for employees (by 15 June)</li>
<li><strong>Form 16A:</strong> TDS certificate for non-salary deductions</li>
<li><strong>Section 203A:</strong> Mandatory TAN provision in Income Tax Act</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- TAN/TDS illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- TAN card -->
                            <rect x="45" y="48" width="110" height="60" rx="6" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="45" y="48" width="110" height="16" rx="6" fill="#14365F"/>
                            <text x="100" y="60" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN</text>
                            <!-- TAN number -->
                            <text x="100" y="80" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="monospace">HYDX12345B</text>
                            <!-- Challan icon -->
                            <rect x="55" y="90" width="30" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="70" y="100" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">281</text>
                            <!-- Return icon -->
                            <rect x="95" y="90" width="30" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="110" y="100" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">24Q</text>
                            <!-- Tag -->
                            <rect x="30" y="112" width="50" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="55" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SECTION 203A</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 203A</span>
                        <strong>TAN Registration</strong>
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
            <h2 class="section-title">Who Needs TAN Registration in Hyderabad?</h2>
            <div class="content-text">
                
                <p><strong>Employers (HITEC City IT Companies):</strong> Salary TDS under Section 192. Companies with 50-5,000+ employees have significant monthly TDS obligations. Quarterly 24Q and annual Form 16 mandatory.</p>
<p><strong>Companies Paying Professional Fees:</strong> TDS on professional/technical fees above Rs 30,000 (Section 194J at 10%). Tech companies paying CA/CS/consultant fees.</p>
<p><strong>Property Buyers (Banjara Hills/Jubilee Hills):</strong> Buyers above Rs 50 lakh deduct 1% TDS under Section 194-IA.</p>
<p><strong>New Pvt Ltd/LLP Companies:</strong> New companies get TAN via SPICe+. LLPs and partnerships file separate Form 49B. Needed from first salary payment.</p>
<p><strong>Traders Collecting TCS (Secunderabad):</strong> Goods sellers above Rs 50 lakh collect TCS at 0.1% under Section 206C(1H). TAN needed for deposit and Form 27EQ.</p>
<p><strong>NGOs and Trusts:</strong> Hyderabad NGOs paying salaries or professional fees must deduct TDS. Even 12A/80G registered NGOs need TAN.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Form 49B Filing (Protean Portal)</td><td>Complete form with entity details, Hyderabad AO code, category. Rs 77 paid online. Acknowledgement generated</td></tr>
<tr><td>TAN Allotment and Certificate</td><td>10-digit TAN (HYD code) allotted in 5-7 days. Allotment letter dispatched to Hyderabad address</td></tr>
<tr><td>IT e-Filing Portal Registration</td><td>TAN registered on incometax.gov.in for e-TDS returns. DSC configured. Login credentials created</td></tr>
<tr><td>Challan 281 Setup</td><td>TDS deposit configured via Challan 281. Monthly deposit by 7th tracked and processed</td></tr>
<tr><td>TDS Return Filing (24Q/26Q/27Q)</td><td>Quarterly returns prepared and filed: salary TDS, non-salary TDS, NRI payments</td></tr>
<tr><td>Form 16/16A Generation</td><td>Annual Form 16 for employees and Form 16A for non-salary. Generated from TRACES portal</td></tr>
<tr><td>TDS Compliance Calendar</td><td>Monthly Challan 281 (7th) + quarterly returns (Jul/Oct/Jan/May) + annual Form 16 (15 June) tracked</td></tr>

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
            <h2 class="section-title">TAN Registration Process in Hyderabad</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From AO code identification to Form 49B filing, TAN allotment, and TDS compliance setup - here's how Patron gets your Hyderabad business TDS-compliant.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Entity Details and Determine AO Code</h3><p class="step-description">Entity name, PAN, Hyderabad address, deductor category. Patron identifies correct Assessing Officer details - area code, AO type, range code, AO number for Hyderabad IT jurisdiction.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AO code identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Details compiled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">AO CODE</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">HYDERABAD</text><text x="60" y="58" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">JURISDICTION</text></svg></div><span class="illustration-label">AO Code Set</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File Form 49B on Protean Portal</h3><p class="step-description">Form 49B on tin.tin.nsdl.com: entity name, address, PAN, category, AO details. Rs 65 + GST paid online. 14-digit acknowledgement number generated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Online filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 77 paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM 49B</text><text x="60" y="44" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PROTEAN</text><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Form Filed</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Sign and Submit Acknowledgement</h3><p class="step-description">Acknowledgement signed by authorized person. For DSC-based applications, no physical docs needed. Patron coordinates the most efficient submission route.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC preferred</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Paperless option</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SIGNED</text><text x="60" y="46" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DSC / PHYSICAL</text></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Receive TAN Allotment</h3><p class="step-description">IT Department allots TAN in 5-7 working days. 10-digit TAN starting with HYD (Hyderabad jurisdiction). Details emailed and letter dispatched to Hyderabad address.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> HYD code issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 5-7 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN ALLOTTED</text><text x="60" y="42" font-size="9" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">HYD</text><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">X12345B</text></svg></div><span class="illustration-label">TAN Allotted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Register TAN on IT e-Filing Portal</h3><p class="step-description">TAN registered on incometax.gov.in: TAN user type, organisation details, OTP verification. Login credentials and DSC configured for e-TDS return filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC linked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">e-FILING</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PORTAL</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DSC LINKED</text></svg></div><span class="illustration-label">e-Filing Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Set Up TDS Deposit and Return Calendar</h3><p class="step-description">Challan 281 deposit by 7th monthly. Quarterly returns: Q1 (31 Jul), Q2 (31 Oct), Q3 (31 Jan), Q4 (31 May). Annual Form 16 by 15 June. For employers, payroll TDS integrated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Monthly tracking</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero penalties</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CHALLAN 281</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">24Q / 26Q</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM 16</text><circle cx="90" cy="62" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M85 62l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required</h2>
            <div class="content-text">
                
                <ul>
<li><strong>For TAN Application (Form 49B):</strong> No supporting documents required. Only the form and fee. PAN and AO details needed to fill the form accurately</li>
<li><strong>For IT e-Filing Registration:</strong> TAN allotment details, organization name, contact person, email, and mobile</li>
<li><strong>For First TDS Deposit (Challan 281):</strong> TAN, PAN, assessment year, payment type, and amount</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Hyderabad-Specific Tip:</strong> HITEC City companies with multiple offices (HITEC City + Gachibowli + Madhapur) may need separate TANs if TDS is deducted by different persons at each location. Patron advises on single vs multiple TANs based on your structure.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>TAN Not Obtained Before First TDS</td><td>TDS deposited without TAN attracts Rs 10,000 penalty</td><td>Patron obtains TAN before first salary or vendor payment</td></tr>
<tr><td>Wrong AO Code in Form 49B</td><td>TAN assigned to wrong jurisdiction, correction needed</td><td>Patron verifies correct Hyderabad AO code before filing</td></tr>
<tr><td>TDS Returns Not Filed After TAN</td><td>Late filing: Rs 200/day penalty capped at TDS amount</td><td>Patron files quarterly returns within deadlines</td></tr>
<tr><td>Form 16 Not Issued to Employees</td><td>HITEC City employees need Form 16 by 15 June for ITR</td><td>Patron generates from TRACES and distributes on time</td></tr>
<tr><td>Property TDS Confusion (194-IA)</td><td>Buyers unaware of 1% TDS on property above Rs 50 lakh</td><td>Patron advises correct approach per buyer type</td></tr>

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
            <h2 class="section-title">TAN Registration Fees in Hyderabad</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>TAN Application (Form 49B)</td><td>Rs 65 + GST (~Rs 77) | Patron Rs 999-1,499</td></tr>
<tr><td>TAN + IT e-Filing Registration</td><td>Rs 77 | Patron Rs 1,499-1,999</td></tr>
<tr><td>TAN + TDS Return Filing (Quarterly)</td><td>Rs 77 (TAN) | Patron Rs 2,999-4,999/quarter</td></tr>
<tr><td>TAN + TDS + Payroll Bundle</td><td>Rs 77 | Patron Rs 4,999-9,999/month</td></tr>
<tr><td>TAN + Form 16 Generation</td><td>Rs 77 | Patron Rs 1,999-2,999 (annual)</td></tr>
<tr><td>Complete TDS Package</td><td>Rs 77 | Patron Rs 9,999-14,999/year</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TAN Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TAN%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Registration Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Form 49B Filing</td><td>1 day (online on Protean TIN portal)</td></tr>
<tr><td>TAN Allotment</td><td>5-7 working days (emailed + letter dispatched)</td></tr>
<tr><td>IT e-Filing Registration</td><td>1 day (post-TAN allotment)</td></tr>
<tr><td>First Challan 281</td><td>Same month as first TDS (by 7th of next month)</td></tr>
<tr><td>First TDS Return</td><td>End of first quarter (24Q/26Q by quarterly deadline)</td></tr>
<tr><td>Company TAN via SPICe+</td><td>Same day as COI (auto-generated with Agile-PRO)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Hyderabad Processing Note (Group B):</strong> Form 49B filing is entirely online. TAN allotment letter dispatched to Hyderabad address. IT e-filing registration is online. No physical visit to any IT office required. Patron handles all filing remotely.</p>

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
            <h2 class="section-title">Why Choose Patron for TAN in Hyderabad?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led TDS Lifecycle</h3><p>TAN → Challan 281 → quarterly returns → Form 16/16A → annual reconciliation. One CA team from TAN to Form 16.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Payroll + TDS Integration</h3><p>For HITEC City employers: salary TDS computed in payroll, deposited via Challan 281, reported in 24Q, reflected in Form 16.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-branch companies get separate TANs with coordinated TDS filing.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Zero Penalty Guarantee</h3><p>Every deadline tracked: 7th monthly deposit, quarterly returns, 15 June Form 16. Zero late filings, zero penalties.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Hyderabad Employers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron got our TAN in 5 days and now manages TDS for 85 employees. Challan 281, quarterly 24Q, and Form 16 - all handled. Zero penalty in 2 years."</p><p style="font-weight:700;color:var(--blue);margin:0;">- IT Company, HITEC City</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Hyderabad through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN vs PAN - Understanding the Difference</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>TAN</th><th>PAN</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Tax Deduction and Collection Account Number</td><td>Permanent Account Number</td></tr>
<tr><td>Purpose</td><td>TDS/TCS deduction, deposit, returns</td><td>Income tax identification and filing</td></tr>
<tr><td>Who Needs It</td><td>Employers, companies deducting TDS, property buyers</td><td>All individuals and entities with income</td></tr>
<tr><td>Where Quoted</td><td>Challan 281, TDS returns, Form 16/16A</td><td>ITR, bank accounts, property, investments</td></tr>
<tr><td>Format</td><td>HYD + initial + 5 digits + check</td><td>3 letters + type + initial + 4 digits + check</td></tr>
<tr><td>Form</td><td>49B</td><td>93/94/95/96 (from April 2026)</td></tr>
<tr><td>Both Needed?</td><td colspan="2">Yes - TAN for TDS obligations, PAN for income tax. Different purposes</td></tr>

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
<li><a href="/tan-registration">TAN Registration in India</a> - National TAN registration</li>

<li><a href="/payroll-services/hyderabad">Payroll Services in Hyderabad</a> - Salary + TDS integration</li>
<li><a href="/private-limited-company-registration/hyderabad">Pvt Ltd Registration in Hyderabad</a> - Company formation with auto TAN</li>
<li><a href="/income-tax-return/hyderabad">Income Tax Return in Hyderabad</a> - ITR filing</li>

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
<li>Income Tax Act - Section 203A (mandatory TAN)</li>
<li>Form 49B (TAN application) | Protean TIN portal</li>
<li>TAN jurisdiction code: HYD for Hyderabad</li>
</ul>
<p><strong>TDS Sections (Key for Hyderabad):</strong></p>
<ul>
<li>Section 192: Salary (HITEC City employers)</li>
<li>Section 194C: Contractor payments | 194I: Rent</li>
<li>Section 194J: Professional/technical fees (10%)</li>
<li>Section 194-IA: Property above Rs 50 lakh (1%)</li>
<li>Section 206C(1H): TCS on goods above Rs 50 lakh (0.1%)</li>
</ul>
<p><strong>TDS Calendar:</strong> Monthly Challan 281 by 7th | Quarterly 24Q/26Q by Jul/Oct/Jan/May | Annual Form 16 by 15 June</p>
<p><strong>Penalties:</strong> No TAN: Rs 10,000 | Late deposit: 1.5%/month | Late return: Rs 200/day | Non-deduction: equal to TDS amount</p>
<p><strong>Authority:</strong> IT Dept | <a href="https://tin.tin.nsdl.com" target="_blank" rel="noopener">Protean TIN</a> | <a href="https://www.tdscpc.gov.in" target="_blank" rel="noopener">TRACES</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - TAN Registration in Hyderabad</h2>
                    <p class="faq-expanded__lead">Common questions about TAN, Form 49B, TDS compliance, Challan 281, and HYD jurisdiction code.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TAN Registration',
                        'city'     => 'Hyderabad',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to apply for TAN in Hyderabad?</h3>
                        <div class="faq-expanded__a"><p>File Form 49B on Protean TIN portal with entity details, Hyderabad address, AO code. Pay Rs 77. TAN with HYD code allotted in 5-7 days. Register on IT e-filing portal for e-TDS returns. Patron handles complete process.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is TAN?</h3>
                        <div class="faq-expanded__a"><p>10-digit Tax Deduction and Collection Account Number mandatory for all TDS/TCS deductors. Hyderabad TANs start with HYD. Must be quoted on challans, returns, and certificates. Penalty Rs 10,000 without.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does TAN cost?</h3>
                        <div class="faq-expanded__a"><p>Rs 65 + GST = approximately Rs 77. Paid online on Protean portal. New companies get TAN free via SPICe+ during incorporation. Patron all-inclusive: Rs 999-1,499.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is TAN mandatory?</h3>
                        <div class="faq-expanded__a"><p>Yes under Section 203A for all TDS/TCS deductors. Employers, companies paying professional fees, property buyers above Rs 50 lakh, traders collecting TCS. Penalty Rs 10,000 for non-compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty without TAN?</h3>
                        <div class="faq-expanded__a"><p>Rs 10,000 under Section 272BB. Additionally, late TDS deposit attracts 1.5% monthly interest. Late return attracts Rs 200/day. Non-deduction penalty equals TDS amount.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is TAN same as PAN?</h3>
                        <div class="faq-expanded__a"><p>No. TAN for TDS/TCS deduction and deposit. PAN for income tax identification. Both are 10-digit alphanumeric but serve different purposes. Every business needs both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When to deposit TDS after TAN?</h3>
                        <div class="faq-expanded__a"><p>By 7th of the following month via Challan 281. March deductions by 30th April. Late deposit attracts 1.5% per month interest. Patron ensures all deposits before the 7th.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can a company have multiple TANs?</h3>
                        <div class="faq-expanded__a"><p>Yes if different persons responsible at different locations. But illegal to have multiple TANs for same deducting authority. Patron advises on single vs multiple for HITEC City companies with branches.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>TAN kya hai?</strong> TDS/TCS deduct karne wale ka 10-digit number. Hyderabad ka TAN 'HYD' se start hota hai. Bina TAN ke TDS deposit nahi ho sakta. Rs 10,000 penalty.</p>
<p><strong>TAN kab chahiye?</strong> Pehli salary ya pehla TDS deduction se pehle. New company ko SPICe+ se automatic mil jaata hai.</p>
<p><strong>TDS kab jama karna hai?</strong> Har mahine 7 tarikh tak Challan 281 se. March ka 30 April tak. Late hua toh 1.5%/month interest.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Get Your TAN Today</h2>
            <div class="content-text">
                
                <p>Every TDS deduction without TAN is a compliance violation. Rs 10,000 penalty for not obtaining TAN. 1.5% monthly interest on late TDS deposit. Rs 200/day for late returns. HITEC City companies deducting salary TDS every month need TAN immediately. Registration takes just 5-7 days for Rs 77. Register now before your next payroll cycle.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with TAN Registration in Hyderabad</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">TAN registration in Hyderabad is mandatory for every employer, company, and entity deducting TDS or collecting TCS. With HYD jurisdiction code, TAN enables compliant deposits, quarterly returns, and Form 16 generation. Quick (5-7 days), affordable (Rs 77), and essential for avoiding Rs 10,000+ penalties.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting serves Hyderabad businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles Form 49B, IT e-filing, monthly deposits, quarterly returns, and annual Form 16.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20TAN%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20TAN%20Registration&body=Hello%2C%20I%20just%20visited%20your%20TAN%20Registration%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-assisted TAN registration in 8 cities. Select your city.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/tan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/tan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/tan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/tan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/tan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
<a href="/tan-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<a href="/tan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Hyderabad</div><div class="pa-block-sub">End-to-end tax compliance and employer services</div><div class="pa-cross-grid"><a href="/payroll-services/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/private-limited-company-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/income-tax-return/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Hyderabad</div></div></a>
<div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Hyderabad</div></div>
<a href="/gst-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
<a href="/pan-registration/hyderabad" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Hyderabad</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers TAN registration in Hyderabad including Form 49B, HYD jurisdiction code, TDS compliance, Challan 281, quarterly returns, and Form 16. Reviewed semi-annually. Freshness Tier 2.</p>
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
