
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Return Filing in Chennai – ITR Forms &amp; Due Dates</title>
    <meta name="description" content="CA-assisted income tax return filing in Chennai. ITR-1 to ITR-7 on e-filing portal. HRA optimisation, capital gains, NRI returns. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-return/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Return Filing in Chennai – ITR Forms &amp; Due Dates">
    <meta property="og:description" content="CA-assisted income tax return filing in Chennai. ITR-1 to ITR-7 on e-filing portal. HRA optimisation, capital gains, NRI returns. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-return/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Return Filing in Chennai – ITR Forms &amp; Due Dates">
    <meta name="twitter:description" content="CA-assisted income tax return filing in Chennai. ITR-1 to ITR-7 on e-filing portal. HRA optimisation, capital gains, NRI returns. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR Filing in Chennai",
          "description": "CA-assisted income tax return filing in Chennai. ITR-1 to ITR-7 on e-filing portal. HRA optimisation, capital gains, NRI returns. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/income-tax-return/chennai",
          "serviceType": "ITR Filing in Chennai",
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
            "url": "https://www.patronaccounting.com/income-tax-return/chennai",
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
              "name": "Income Tax Return",
              "item": "https://www.patronaccounting.com/income-tax-return"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "ITR Filing Chennai",
              "item": "https://www.patronaccounting.com/income-tax-return/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to file ITR in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Log in to incometax.gov.in with PAN or Aadhaar. Select Assessment Year choose correct ITR form fill income and deduction details verify against Form 26AS and submit with e-verification. Patron handles the complete process digitally."
              }
            },
            {
              "@type": "Question",
              "name": "What is the due date for ITR filing in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "For AY 2026-27: 31 July 2026 for individuals 31 August 2026 for business non-audit 31 October 2026 for audit cases. Belated return until 31 December 2026 with Rs 5,000 penalty."
              }
            },
            {
              "@type": "Question",
              "name": "Is Chennai eligible for 50 percent HRA exemption?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Chennai is a metro city eligible for 50 percent HRA exemption under Section 10(13A) of the Income Tax Act in the old tax regime. Salaried employees can claim minimum of actual HRA 50 percent basic or rent minus 10 percent basic."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late ITR filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late filing after 31 July attracts Rs 5,000 penalty under Section 234F reduced to Rs 1,000 if income below Rs 5 lakh. Plus 1 percent per month interest on tax due. Loss carry-forward forfeited."
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
                        Income Tax Return Filing in Chennai: CA-Managed ITR with Tax Planning
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 16, bank statements, investment proofs, property documents, Form 26AS/AIS</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> ITR filing from Rs 499 (salaried) to Rs 14,999 (business/company)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 July 2026 (individuals) | 31 October 2026 (audit cases)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Portal:</span> incometax.gov.in (e-filing with Aadhaar e-verification)</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20Filing%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR Filing in Chennai',
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
            <a href="#overview-section" class="toc-pill">Overview</a><a href="#what-section" class="toc-pill">What Is ITR</a><a href="#who-section" class="toc-pill">Who Should File</a><a href="#services-section" class="toc-pill">Services</a><a href="#procedure-section" class="toc-pill">6-Step Process</a><a href="#documents-section" class="toc-pill">Documents</a><a href="#challenges-section" class="toc-pill">Challenges</a><a href="#fees-section" class="toc-pill">Fees</a><a href="#timeline-section" class="toc-pill">Due Dates</a><a href="#benefits-section" class="toc-pill">Why Patron</a><a href="#comparison-section" class="toc-pill">ITR Forms</a><a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing in Chennai: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing in Chennai Services at a Glance</strong></p>
                    <p>Income tax return (ITR) filing in Chennai is the annual process of declaring your income, claiming deductions, and computing tax payable or refundable on the e-filing portal (incometax.gov.in). Chennai is one of India's 4 original metro cities qualifying for 50% HRA exemption - critical for OMR's lakhs of salaried IT professionals. For AY 2026-27 (FY 2025-26), the Income Tax Act 1961 applies. From Tax Year 2026-27, the new Income Tax Act 2025 takes effect.</p>
                </div>
                <p>Chennai's diverse taxpayer base includes over 20 lakh IT professionals on OMR claiming HRA exemption, thousands of business owners in T. Nagar and Parry's Corner, property owners in Adyar and Nungambakkam, freelancers billing domestic and international clients, and NRIs receiving rental income from Chennai apartments.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                    <tr><td>Governing Law</td><td>Income Tax Act, 1961 (for FY 2025-26) | Income Tax Act, 2025 (from FY 2026-27)</td></tr>
                    <tr><td>Portal</td><td>incometax.gov.in</td></tr>
                    <tr><td>ITR Forms</td><td>ITR-1 (Sahaj), ITR-2, ITR-3, ITR-4 (Sugam), ITR-5, ITR-6, ITR-7</td></tr>
                    <tr><td>Due Date - Individuals</td><td>31 July 2026 (AY 2026-27)</td></tr>
                    <tr><td>Due Date - Audit Cases</td><td>31 October 2026</td></tr>
                    <tr><td>Late Filing Penalty</td><td>Rs 5,000 (Rs 1,000 if income below Rs 5 lakh) under Section 234F</td></tr>
                    <tr><td>New Tax Regime</td><td>Default regime - opt out for old regime before due date</td></tr>
                    <tr><td>Chennai HRA</td><td>50% of basic salary exempt (metro city benefit)</td></tr>
                    <tr><td>Verification</td><td>Aadhaar OTP / net banking / bank ATM / signed ITR-V</td></tr>
                </tbody></table></div><p</p>
                <p>The transition from Income Tax Act 1961 to Income Tax Act 2025 adds complexity. Patron Accounting's CA team handles <a href="/income-tax-return">ITR filing</a> for all Chennai taxpayer categories - from simple salaried ITR-1 to complex business ITR-3 and company ITR-6 - with tax planning, advance tax computation, HRA optimisation, capital gains calculation, and refund tracking. Post-filing, the same CA manages <a href="/accounting-services">accounting</a>, <a href="/gst-returns">GST returns</a>, and <a href="/tds-return">TDS compliance</a>.</p>
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
                <h2 class="section-title">What Is ITR Filing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Income Tax Return (ITR) filing is the annual process of declaring total income, claiming eligible deductions and exemptions, computing tax liability, and reporting it to the Income Tax Department through the e-filing portal.</p>
                    <p>Every individual, HUF, firm, company, or other entity whose income exceeds the basic exemption limit must file ITR. The correct ITR form depends on income type: ITR-1 for simple salaried, ITR-2 for capital gains, ITR-3 for business income, ITR-4 for presumptive income, ITR-5 for firms, ITR-6 for companies, ITR-7 for trusts.</p>
                    <p>For Chennai taxpayers, ITR filing carries city-specific implications. Chennai is classified as a metro city for HRA purposes - salaried employees can claim 50% of basic salary as HRA exemption under Section 10(13A) (old regime). Property sellers must compute capital gains based on Chennai guideline value. NRIs with Chennai property must file ITR even for only rental income. The Commissioner of Income Tax (CIT), Chennai and ITAT Chennai handle assessments and appeals.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing in Chennai:</strong></p>
                    <ul>
                        <li><strong>ITR-1 (Sahaj):</strong> For salaried individuals with income up to Rs 50 lakh, one house property, and interest income.</li>
                        <li><strong>Form 26AS/AIS:</strong> Annual tax statement showing TDS credits, SFT transactions, and financial data for verification.</li>
                        <li><strong>Section 10(13A):</strong> HRA exemption provision - 50% of basic salary for Chennai metro employees (old regime).</li>
                        <li><strong>Section 234F:</strong> Late filing penalty - Rs 5,000 (or Rs 1,000 if income below Rs 5 lakh).</li>
                        <li><strong>New Tax Regime:</strong> Default regime with lower slab rates and fewer deductions. Old regime has higher rates but more deductions.</li>
                        <li><strong>Income Tax Act 2025:</strong> New Act replacing IT Act 1961, effective from FY 2026-27 onwards.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>50% HRA Metro City</span>
                        <strong>Due: 31 July 2026</strong>
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
            <h2 class="section-title">Who Needs ITR Filing in Chennai?</h2>
            <div class="content-text">
                
                <h3>Salaried IT Professionals on OMR</h3><p>Chennai's OMR IT Corridor employs lakhs at TCS, Infosys, Cognizant, Wipro, HCL. Patron optimises HRA claims (50% metro), Section 80C, 80D, NPS, and home loan interest.</p>
                <h3>Freelancers and Consultants</h3><p>IT freelancers, content writers, designers billing domestic and international clients. File ITR-3 or ITR-4 (presumptive). Advance tax computed quarterly.</p>
                <h3>Business Owners in T. Nagar and Parry's Corner</h3><p>Retail, wholesale, restaurant operators with business income. File ITR-3 or ITR-4. Patron manages accounting in Chennai and ITR together.</p>
                <h3>Property Owners and Sellers</h3><p>Rental income from Adyar, Nungambakkam, OMR apartments. Property sellers compute capital gains with Chennai guideline value. Section 54/54F exemptions require reinvestment planning.</p>
                <h3>NRIs with Chennai Property and Income</h3><p>NRIs must file ITR for rental income, NRO interest, and capital gains from Chennai property. Banks deduct TDS at 30% on NRI income. Patron files NRI ITR and claims TDS refunds.</p>
                <h3>Companies, LLPs, and Trusts</h3><p>Pvt Ltd companies (ITR-6), LLPs (ITR-5), and trusts (ITR-7) registered in Chennai. Company ITR requires audited statements. Patron handles accounting -> audit -> ITR filing. Consider <a href="/gst-registration/chennai">GST Registration in Chennai</a> for complete compliance.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Tax Regime Selection (Old vs New)</td><td>CA analyses Chennai income profile for optimal regime - old (with 80C/80D/HRA/Section 24) vs new (lower slabs, fewer deductions)</td></tr>
                        <tr><td>Form 26AS/AIS Reconciliation</td><td>CA reconciles AIS and Form 26AS with actual income - TDS credits, bank interest, property transactions verified</td></tr>
                        <tr><td>ITR Form Selection and Filing</td><td>Correct form (ITR-1 to ITR-7) selected and filed on incometax.gov.in with complete income, deduction, and tax computation</td></tr>
                        <tr><td>HRA Optimisation for Chennai Metro</td><td>50% HRA metro benefit maximised under Section 10(13A) based on rent paid, salary structure, and tenure</td></tr>
                        <tr><td>Capital Gains Computation</td><td>Property, mutual fund, equity CG computed with indexation, Section 54/54F/54EC planning, Chennai guideline value</td></tr>
                        <tr><td>Advance Tax Computation</td><td>Quarterly advance tax (15 June/Sep/Dec/Mar) computed to avoid Section 234B/C interest</td></tr>
                        <tr><td>Refund Tracking</td><td>Post-filing refund status monitored. Bank pre-validation ensured for direct credit (20-45 days)</td></tr>
                        <tr><td>Tax Notice Response</td><td>CIT Chennai / CPC notices (143(1), 148, defective return) responded within prescribed timeline</td></tr>

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
            <h2 class="section-title">ITR Filing Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA handles the complete ITR filing on incometax.gov.in with year-round tax planning. No Income Tax office visit required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect Documents and Verify Form 26AS/AIS</h3><p class="step-description">CA collects Form 16, bank statements, investment proofs, property documents, loan statements, mutual fund/equity statements. Form 26AS and AIS downloaded from e-filing portal to verify TDS credits, SFT transactions, and financial data match actual income.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS Matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Data Verified</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Determine Tax Regime and Compute Tax</h3><p class="step-description">CA prepares dual computation: old regime (with 80C, 80D, HRA, Section 24, NPS) vs new regime (standard deduction Rs 75,000, lower slabs). For Chennai IT employees with significant HRA (50% metro) and 80C - old regime often results in lower tax. CA recommends optimal regime.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual Computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Optimal Selected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="32" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OLD</text><rect x="65" y="10" width="45" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="87" y="40" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEW</text><path d="M55 35h10" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">vs</text></svg></div><span class="illustration-label">Regime Decided</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Select Correct ITR Form</h3><p class="step-description">Based on income: ITR-1 for simple salaried (under Rs 50L, one house). ITR-2 for capital gains, multiple properties. ITR-3 for business. ITR-4 for presumptive. ITR-5 for firms. ITR-6 for companies. ITR-7 for trusts. Wrong form leads to defective return notice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form Selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Error-Free</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="22" width="50" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-1</text><rect x="35" y="38" width="50" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="46" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-2</text></svg></div><span class="illustration-label">Correct Form</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File ITR on e-Filing Portal</h3><p class="step-description">CA logs into incometax.gov.in, fills all income schedules, deduction schedules, tax computation, TDS credits, advance tax, and self-assessment tax. Pre-filled AIS data validated and corrected. Return filed online with DSC or Aadhaar EVC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax Computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="40" width="50" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M60 72v12" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="88" r="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/></svg></div><span class="illustration-label">Return Submitted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">E-Verify the Return</h3><p class="step-description">E-verification mandatory within 30 days: Aadhaar OTP, net banking, bank account EVC, or physical ITR-V to CPC Bengaluru. Without verification, return treated as not filed. Patron completes e-verification immediately after filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Return Valid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="15" width="60" height="45" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="41" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text><path d="M40 75l20-8 20 8" stroke="#25D366" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Track Processing, Refund, and Respond to Notices</h3><p class="step-description">Patron monitors return processing. CPC issues Section 143(1) intimation within 1-3 months. Refund credited to pre-validated bank account in 20-45 days. If notice issued, CA responds within prescribed timeline. For CIT Chennai jurisdiction matters, handled at Chennai office.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund Tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notices Handled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="41" font-size="10" fill="#25D366" font-weight="900" text-anchor="middle" font-family="Arial">Rs</text><rect x="30" y="72" width="60" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REFUND</text></svg></div><span class="illustration-label">Filing Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ITR Filing in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>Form 16 (Salaried):</strong> TDS certificate from employer showing salary, deductions, and tax deducted.</li><li><strong>Bank Statements:</strong> All Chennai bank accounts for interest income and transaction verification.</li><li><strong>Investment Proofs:</strong> 80C (ELSS, PPF, LIC, tuition), 80D (health insurance), 80CCD (NPS), 80E (education loan).</li><li><strong>Form 26AS / AIS:</strong> Downloaded from e-filing portal for TDS credits and SFT transactions.</li><li><strong>Property Documents:</strong> Rental agreement (rental income), sale deed (capital gains), home loan statement (Section 24).</li><li><strong>Capital Gains Statements:</strong> Mutual fund, equity, property sale CG statements.</li><li><strong>Rent Receipts (HRA):</strong> For 50% HRA exemption - landlord PAN mandatory if rent exceeds Rs 1 lakh/year.</li><li><strong>PAN and Aadhaar:</strong> Linked PAN-Aadhaar for e-filing login and e-verification.</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> OMR IT employees claiming HRA at 50% (Chennai metro rate) must maintain rent receipts with landlord PAN. Many employees share flats and split rent - the HRA claim must match individual rent share, not total apartment rent. Patron verifies HRA computation against actual rent paid.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ITR Filing Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>HRA Claim Errors for OMR Employees</td><td>Over-claiming HRA or claiming while owning house in same city triggers CPC notices</td><td>Computes HRA precisely: minimum of (actual HRA, 50% basic, rent minus 10% basic)</td></tr><tr><td>Wrong ITR Form Selection</td><td>Salaried with mutual fund CG filing ITR-1 instead of ITR-2 leads to defective return</td><td>Selects correct form based on complete income profile</td></tr><tr><td>Capital Gains from Chennai Property</td><td>Chennai guideline value as deemed consideration, indexation, Section 54 planning needed</td><td>Computes CG with Chennai-specific guideline values and exemption planning</td></tr><tr><td>NRI ITR Non-Filing</td><td>NRIs assume TDS is final tax - miss refund of excess TDS (30% vs actual rate)</td><td>Files NRI ITR and processes refund claims</td></tr><tr><td>Missed 31 July Deadline</td><td>Rs 5,000 penalty + interest + loss carry-forward forfeited</td><td>Initiates filing from April to avoid last-minute rush</td></tr>

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
            <h2 class="section-title">ITR Filing Fees in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (ITR e-Filing)</td><td>NIL - Free on incometax.gov.in</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 499 (Exl GST and Govt. Charges)</td></tr><tr><td>ITR-1 (Salaried, simple)</td><td>Rs 999-1,999</td></tr><tr><td>ITR-2 (Capital gains, multiple properties)</td><td>Rs 2,999-4,999</td></tr><tr><td>ITR-3 (Business/Professional)</td><td>Rs 4,999-9,999</td></tr><tr><td>ITR-4 (Presumptive)</td><td>Rs 1,999-3,999</td></tr><tr><td>ITR-5/6 (Firms/Companies)</td><td>Rs 4,999-14,999</td></tr><tr><td>NRI ITR</td><td>Rs 4,999-9,999</td></tr><tr><td>Tax Notice Response</td><td>Rs 2,999-9,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20Filing%20in%20Chennai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Due Dates (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Individuals (non-audit)</td><td>31 July 2026</td></tr><tr><td>Business (non-audit)</td><td>31 August 2026</td></tr><tr><td>Audit cases</td><td>31 October 2026</td></tr><tr><td>Transfer pricing</td><td>30 November 2026</td></tr><tr><td>Belated return</td><td>31 December 2026 (with Rs 5,000 penalty)</td></tr><tr><td>Revised return</td><td>31 March 2027</td></tr><tr><td>Updated return (ITR-U)</td><td>31 March 2031 (with additional tax)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Processing Note (Group B):</strong> ITR filing is 100% online on incometax.gov.in. No visit to any Income Tax office required. Patron handles all filing, e-verification, and notice responses digitally from Chennai.</p>

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
            <h2 class="section-title">Why Choose Patron for ITR Filing in Chennai?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led Tax Planning + Filing</h3><p>Year-round regime optimisation, HRA (50% Chennai metro), 80C investments, NPS, home loan, and capital gains exemptions planned BEFORE filing.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Income Tax Act 2025 Readiness</h3><p>Current year filing (old Act) done accurately while preparing for new Act's provisions, form changes, and compliance from FY 2026-27.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-city income consolidated accurately in one ITR.</p></article><article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>CIT Chennai Notice Handling</h3><p>Familiar with CIT Chennai jurisdiction, ITAT Chennai appeal procedures, and CPC processing. Notices responded promptly.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;"><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div></div><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai taxpayers through a digital-first CA team. We combine ITR filing with tax planning, HRA optimisation, capital gains computation, and notice handling from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Form Selection: Chennai Quick Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>ITR Form</th><th>Who Should File in Chennai</th><th>Key Conditions</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (Sahaj)</td><td>OMR salaried, pensioners, simple interest</td><td>Income below Rs 50L, 1 house, no CG, no business</td></tr><tr><td>ITR-2</td><td>Salaried + MF/property CG, NRIs, foreign assets</td><td>No business income, multiple properties</td></tr><tr><td>ITR-3</td><td>Freelancers, business owners, professionals</td><td>Business/profession income, turnover above Rs 2 Cr</td></tr><tr><td>ITR-4 (Sugam)</td><td>Small traders T. Nagar, professionals below Rs 75L</td><td>Presumptive 44AD/44ADA, income below Rs 50L</td></tr><tr><td>ITR-5</td><td>Partnership firms, LLPs</td><td>Firm/LLP income</td></tr><tr><td>ITR-6</td><td>Pvt Ltd companies (RoC Chennai)</td><td>Company income (non-Section 11)</td></tr><tr><td>ITR-7</td><td>Trusts, NGOs, societies, Section 8 companies</td><td>139(4A)-(4D) entities</td></tr>

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
                
                <ul><li><a href="/income-tax-return">Income Tax Return (ITR) Filing in India</a> - Parent national service page</li><li><a href="/accounting-services">Accounting Services</a> - Bookkeeping for accurate ITR filing</li><li><a href="/gst-returns">GST Return Filing</a> - GST compliance for business taxpayers</li><li><a href="/tds-return">TDS Returns</a> - TDS compliance and Form 16 issuance</li><li><a href="/tax-audit">Tax Audit</a> - Audit for businesses with turnover above threshold</li><li><a href="/income-tax-return">Income Tax Return</a> - National ITR filing services</li></ul>

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
                
                <ul><li>Income Tax Act, 1961 (applicable for FY 2025-26 / AY 2026-27)</li><li>Income Tax Act, 2025 (effective from FY 2026-27 / Tax Year 2026-27)</li><li>Section 139 - Due dates and mandatory filing</li><li>Section 234A/B/C - Interest for late filing, late payment, advance tax shortfall</li><li>Section 234F - Late filing fee (Rs 5,000 / Rs 1,000)</li><li>Section 10(13A) - HRA exemption (50% for Chennai metro)</li><li>Chapter VI-A - Deductions (80C, 80D, 80CCD, 80E, 80G)</li><li>Section 54/54F - Capital gains reinvestment exemption</li></ul><h3>Penalties</h3><ul><li>Late filing: Rs 5,000 (Rs 1,000 if income below Rs 5 lakh)</li><li>Interest (234A): 1% per month on tax due from due date</li><li>Interest (234B/C): 1% per month for advance tax shortfall</li><li>Non-filing: Prosecution under Section 276CC</li></ul><p><strong>Authority:</strong> Income Tax Department - <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | CIT Chennai | ITAT Chennai</p>

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
                    <h2 class="faq-expanded__title">FAQs: ITR Filing in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about income tax return filing in Chennai, covering due dates, forms, HRA, and the new Income Tax Act 2025.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR Filing in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to file ITR in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Log in to incometax.gov.in with PAN/Aadhaar. Select Assessment Year, choose correct ITR form, fill income and deduction details, verify against Form 26AS/AIS, and submit with e-verification. Patron handles the complete process digitally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for ITR filing in Chennai?</h3>
                        <div class="faq-expanded__a"><p>For AY 2026-27: 31 July 2026 for individuals, 31 August 2026 for business (non-audit), 31 October 2026 for audit cases. Belated return until 31 December 2026 with Rs 5,000 penalty.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which ITR form should Chennai salaried employees use?</h3>
                        <div class="faq-expanded__a"><p>Most OMR salaried employees file ITR-1 if income below Rs 50 lakh with salary, one house, and interest. If capital gains from mutual funds/property or foreign assets, file ITR-2. Freelancers file ITR-3 or ITR-4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is Chennai eligible for 50% HRA exemption?</h3>
                        <div class="faq-expanded__a"><p>Yes. Chennai is a metro city eligible for 50% HRA exemption under Section 10(13A) in old tax regime. Claim is lowest of: actual HRA received, 50% of basic salary, or rent paid minus 10% of basic.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late ITR filing?</h3>
                        <div class="faq-expanded__a"><p>Rs 5,000 under Section 234F (Rs 1,000 if income below Rs 5 lakh). Plus 1% per month interest on tax due under Section 234A. Loss carry-forward forfeited for belated returns.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the new Income Tax Act 2025?</h3>
                        <div class="faq-expanded__a"><p>Income Tax Act 1961 repealed effective 01 April 2026. New Act applies from Tax Year 2026-27. Current filing (FY 2025-26) still under old Act. New Act simplifies rules with updated forms and compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can NRIs file ITR from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs with Indian income (Chennai rental, NRO interest, property CG) must file ITR online. NRIs often have excess TDS (30%) - filing enables refund claims. Patron handles NRI ITR remotely.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need a CA to file ITR in Chennai?</h3>
                        <div class="faq-expanded__a"><p>CA recommended for complex income (capital gains, business), HRA optimisation (50% metro), regime selection, and notice response. CA-filed returns have lower rejection rates. Patron provides CA filing from Rs 499.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein ITR kab tak file karna hai?</strong> Individuals ke liye 31 July 2026 (AY 2026-27). Audit cases ke liye 31 October 2026. Late file karne par Rs 5,000 penalty lagti hai.</p><p><strong>Chennai mein HRA ka 50% exemption milta hai kya?</strong> Haan. Chennai metro city hai - old tax regime mein salaried employees ko basic ka 50% HRA exempt milta hai.</p><p><strong>NRI ko ITR file karna padta hai kya?</strong> Haan, agar India mein rental income, property sale, ya NRO interest hai toh ITR mandatory hai. TDS refund bhi claim hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the ITR Filing Deadline in Chennai</h2>
            <div class="content-text">
                
                <p>The ITR filing deadline for AY 2026-27 is 31 July 2026. Late filing attracts Rs 5,000 penalty, 1% per month interest on tax due, and loss carry-forward forfeiture. For Chennai IT employees, early filing means faster refund processing (20-45 days). For property sellers, delayed filing means interest accumulation. For NRIs, excess TDS stays stuck with the government. Start document collection in April and file by June.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get ITR Filing in Chennai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Income tax return filing in Chennai covers every taxpayer - from OMR salaried employees claiming 50% HRA metro exemption to T. Nagar business owners, Adyar property sellers, and NRIs with Chennai rental income. With the Income Tax Act 2025 taking effect from FY 2026-27, accurate filing and transition preparation are both critical.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting serves Chennai taxpayers through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles tax planning, ITR filing, HRA optimisation, capital gains computation, refund tracking, and notice response.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20Filing%20in%20Chennai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR%20Filing%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20ITR%20Filing%20in%20Chennai.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted income tax return filing services in major cities across India.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/income-tax-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/income-tax-return/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/income-tax-return/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/income-tax-return/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end tax and compliance support in Chennai</div><div class="pa-cross-grid"><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/private-limited-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/tan-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/pan-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. ITR forms, due dates, and tax rules change annually via CBDT notifications. Updated for AY 2026-27. Freshness Tier 1.</p>
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
