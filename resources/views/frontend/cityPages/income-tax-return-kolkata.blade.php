
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Income Tax Return Filing in Kolkata – ITR Forms &amp; Due Dates</title>
    <meta name="description" content="CA-assisted ITR filing in Kolkata. Salary, business, capital gains. New IT Act 2025 compliant. Salt Lake, Dalhousie. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-return/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Return Filing in Kolkata – ITR Forms &amp; Due Dates">
    <meta property="og:description" content="CA-assisted ITR filing in Kolkata. Salary, business, capital gains. New IT Act 2025 compliant. Salt Lake, Dalhousie. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-return/kolkata">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Return Filing in Kolkata – ITR Forms &amp; Due Dates">
    <meta name="twitter:description" content="CA-assisted ITR filing in Kolkata. Salary, business, capital gains. New IT Act 2025 compliant. Salt Lake, Dalhousie. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Income Tax Return Filing Services in Kolkata",
          "description": "CA-assisted ITR filing in Kolkata. Salary, business, capital gains. New IT Act 2025 compliant. Salt Lake, Dalhousie. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/income-tax-return/kolkata",
          "serviceType": "Income Tax Return Filing Services in Kolkata",
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
            "url": "https://www.patronaccounting.com/income-tax-return/kolkata",
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
              "name": "Income Tax Return",
              "item": "https://www.patronaccounting.com/income-tax-return"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "ITR Filing in Kolkata",
              "item": "https://www.patronaccounting.com/income-tax-return/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the ITR due date for Kolkata taxpayers in 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-1/ITR-2: 31 July 2026. ITR-3/ITR-4 (non-audit business): 31 August 2026 (extended per Budget 2026). Audit cases: 31 October 2026. Belated return: 31 December 2026."
              }
            },
            {
              "@type": "Question",
              "name": "Which ITR form for salaried employees in Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most salaried employees file ITR-1 if total income is up to Rs 50 lakh with salary, one house property, and other income. ITR-2 if you have capital gains, ESOPs, multiple properties, or foreign income."
              }
            },
            {
              "@type": "Question",
              "name": "Can I file ITR online from Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. ITR is filed 100% online on incometax.gov.in. The CA files the return and completes e-verification via Aadhaar OTP. No visit to any IT office required."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late ITR filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late fee Rs 5,000 under Section 234F (Rs 1,000 if income below Rs 5 lakh). Interest 1% per month under Section 234A on unpaid tax. Loss of carry-forward of certain losses."
              }
            },
            {
              "@type": "Question",
              "name": "Which ITR form for Kolkata business owners?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Business owners file ITR-3 if maintaining regular books or ITR-4 if using presumptive scheme under Section 44AD for turnover below Rs 3 crore."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need a CA for ITR filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "While ITR can be self-filed, a CA ensures correct form selection, maximum deductions, TDS mismatch resolution, GST reconciliation, and proper capital gains computation. CA-filed returns have lower notice rates."
              }
            },
            {
              "@type": "Question",
              "name": "What changed in Budget 2026 for ITR?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-3/ITR-4 due date extended to 31 August. Revised return deadline extended to 31 March. Income Tax Act 2025 effective from 01.04.2026 with new forms."
              }
            },
            {
              "@type": "Question",
              "name": "How long does ITR refund take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Refunds typically processed within 20-45 days of e-verification. Credited to registered bank account. Delays if TDS mismatches or outstanding demands exist."
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
                        Income Tax Return (ITR) Filing in Kolkata - CA-Assisted Filing for Salary, Business & Capital Gains
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 16, PAN, Aadhaar, bank statements, investment proofs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31 July 2026 (ITR-1/2) | 31 Aug 2026 (ITR-3/4)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Portal:</span> incometax.gov.in - 100% online e-filing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Rs 5,000 under Section 234F if filed after due date</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20Filing%20in%20Kolkata.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR Filing in Kolkata',
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
                <a href="#what-is-section" class="toc-btn">What is ITR</a>
                <a href="#who-section" class="toc-btn">Who Must File</a>
                <a href="#services-section" class="toc-btn">Services</a>
                <a href="#procedure-section" class="toc-btn">Process</a>
                <a href="#documents-section" class="toc-btn">Documents</a>
                <a href="#challenges-section" class="toc-btn">Challenges</a>
                <a href="#fees-section" class="toc-btn">Fees</a>
                <a href="#timeline-section" class="toc-btn">Due Dates</a>
                <a href="#benefits-section" class="toc-btn">Why Patron</a>
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
            <h2 class="section-title">Income Tax Return Filing in Kolkata - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing in Kolkata Services at a Glance</strong></p>
                    <p><p>Income tax return (ITR) filing in Kolkata is the annual process of declaring all income earned during the financial year, computing tax liability, claiming deductions, and filing the return on the Income Tax e-filing portal (incometax.gov.in). Every person in Kolkata whose total income exceeds the basic exemption limit (or who meets other mandatory filing criteria) must file an ITR by the prescribed due date.</p></p>
                </div>
                <p><p>Kolkata has a diverse taxpayer base. Salaried professionals in Salt Lake Sector V's IT corridor and Dalhousie's BFSI hub file ITR-1 or ITR-2. Business owners in Burrabazar (wholesale trade), Taratala (manufacturing), and Howrah (industrial) file ITR-3 or ITR-4. Freelancers in New Town file ITR-3. NRIs with Kolkata property file ITR-2. Startups and companies file ITR-6. Learn more about <a href="/income-tax-return">Income Tax Return Filing across India</a>.</p></p>
                <p><p>Budget 2026 introduced significant changes: ITR-3 and ITR-4 due dates extended to 31 August, revised return deadline extended to 31 March, and the Income Tax Act, 2025 takes effect from 01.04.2026. A CA-managed filing ensures correct form selection, maximum deductions under Section 80C/80D/HRA, TDS credit verification from Form 26AS/AIS, and timely filing. After ITR, you may also need <a href="/accounting-services">Accounting Services</a> and <a href="/gst-returns">GST Return Filing</a>.</p></p>
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
                <h2 class="section-title">What is ITR Filing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR filing is the annual declaration of income earned, tax liability computed, and taxes paid during a financial year, submitted to the Income Tax Department through the e-filing portal under the Income Tax Act.</p>
                <p>The ITR includes all income sources - salary, house property, business/profession, capital gains, and other sources - along with deductions (Chapter VI-A: Sections 80C, 80D, 80E, 80G, etc.), TDS credits (from Form 26AS and AIS), advance tax payments, and self-assessment tax. The Income Tax Department processes the return and issues a refund or demand notice.</p>
                <p>For Kolkata taxpayers, ITR filing serves purposes beyond compliance - bank loan approvals (SBI, HDFC, ICICI branches), visa applications (US B1/B2, UK, Schengen), property transactions, government tender eligibility, and financial credibility.</p>
                <p><strong>Budget 2026 Changes:</strong> ITR-3/ITR-4 due dates extended to 31 August (from 31 July). Revised return deadline extended to 31 March (from 31 December). The Income Tax Act, 2025 applies from Tax Year 2026-27 onwards. For your <a href="/startup-registration">Startup Registration</a> or <a href="/payroll-services">Payroll Services</a>, Patron handles these alongside ITR as an integrated package.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing in Kolkata:</strong></p>
                    <ul>
                    <li><strong>ITR-1 (Sahaj):</strong> For salaried individuals with income up to Rs 50 lakh, one house property</li>
                    <li><strong>ITR-2:</strong> For capital gains, multiple properties, NRI income, ESOPs</li>
                    <li><strong>ITR-3:</strong> For business/professional income with regular accounts</li>
                    <li><strong>ITR-4 (Sugam):</strong> For presumptive income under Section 44AD/44ADA</li>
                    <li><strong>Form 26AS:</strong> Annual tax statement showing all TDS deducted and taxes paid</li>
                    <li><strong>AIS/TIS:</strong> Annual Information Statement and Taxpayer Information Summary on the e-filing portal</li>
                    <li><strong>Section 80C:</strong> Deduction up to Rs 1.5 lakh for EPF, PPF, ELSS, insurance, tuition fees</li>
                    <li><strong>Section 234F:</strong> Late filing fee - Rs 5,000 (Rs 1,000 if income below Rs 5 lakh)</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing in Kolkata</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>E-Filed</span>
                        <strong>ITR Certificate</strong>
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
            <h2 class="section-title">Who Needs to File ITR in Kolkata?</h2>
            <div class="content-text">
                
                <p>ITR filing is mandatory for every Kolkata resident whose total income exceeds the basic exemption limit (Rs 3 lakh under new regime, Rs 2.5 lakh under old). Also mandatory for high-value transactions, TDS/TCS exceeding Rs 25,000, electricity bill above Rs 1 lakh, or foreign travel above Rs 2 lakh.</p>
                <ul>
                    <li><strong>Salaried professionals:</strong> IT employees in Salt Lake, banking staff in Dalhousie file ITR-1/ITR-2 with salary, HRA, and investment deductions</li>
                    <li><strong>Business owners and traders:</strong> Burrabazar wholesale, Taratala manufacturing, Howrah industrial file ITR-3 or ITR-4 with new 31 August deadline</li>
                    <li><strong>Freelancers and professionals:</strong> IT freelancers in New Town, consultants, doctors, lawyers file ITR-3 or ITR-4. Advance tax quarterly if liability exceeds Rs 10,000</li>
                    <li><strong>NRIs:</strong> Non-residents with Kolkata property rental income, capital gains from Rajarhat/New Town/Salt Lake property sale, or bank interest must file ITR-2</li>
                    <li><strong>Companies, LLPs, firms:</strong> File ITR-5/6/7 with mandatory audit if turnover exceeds Rs 1 crore</li>
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
            <h2 class="section-title">ITR Filing Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Form Selection</td><td>CA determines correct form (ITR-1 through ITR-7) based on income sources, entity type, and filing requirements.</td></tr>
                        <tr><td>Income Computation</td><td>All 5 income heads computed: salary (Form 16), house property, business/profession (P&L), capital gains (STCG/LTCG), other sources.</td></tr>
                        <tr><td>Deduction Maximisation</td><td>All eligible deductions claimed: 80C (Rs 1.5L), 80D (health insurance), 80E (education loan), 80G (donations), HRA, Section 24(b) (home loan).</td></tr>
                        <tr><td>TDS Credit Verification</td><td>Form 26AS, AIS, TIS cross-verified. Mismatches between Form 16 and 26AS identified and resolved before filing.</td></tr>
                        <tr><td>Advance Tax Reconciliation</td><td>Quarterly advance tax (Jun/Sep/Dec/Mar) reconciled with final liability. Section 234B/234C interest checked.</td></tr>
                        <tr><td>E-Filing and E-Verification</td><td>ITR filed on incometax.gov.in with e-verification via Aadhaar OTP, net banking, or DSC. ITR-V acknowledgement generated.</td></tr>
                        <tr><td>Refund Tracking</td><td>Refund status monitored. Typically processed in 20-45 days. Discrepancies and demands resolved.</td></tr>
                        <tr><td>Revised/Belated Return</td><td>Revised return by 31 March 2027 (extended per Budget 2026). Belated return by 31 December 2026 with late fee.</td></tr>
                        <tr><td>Old vs New Regime Advisory</td><td>CA advises optimal tax regime based on specific income and deduction profile for maximum tax savings.</td></tr>

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
            <h2 class="section-title">ITR Filing Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team handles the complete ITR filing for Kolkata taxpayers - from document collection to refund tracking. Filed entirely online on incometax.gov.in.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Collect Income Documents</h3><p class="step-description">The CA collects Form 16 (salary), Form 16A (non-salary TDS), bank interest certificates, capital gains statements (Zerodha, Groww), business P&L, GST returns, and investment proofs (80C, 80D, home loan). For Kolkata salaried professionals, Form 16 from the Salt Lake/Dalhousie employer is the primary document.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Complete document checklist</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All income sources covered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/></svg></div><span class="illustration-label">Documents</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Verify Form 26AS, AIS, and TIS</h3><p class="step-description">The CA downloads Form 26AS, AIS, and TIS from the e-filing portal showing all TDS, taxes paid, and high-value transactions. Discrepancies between Form 16 and Form 26AS are identified. For Kolkata property sellers, TDS under Section 194-IA is verified.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS credit verification</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatch resolution</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 35l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">26AS Check</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Select Correct ITR Form and Tax Regime</h3><p class="step-description">CA selects the appropriate form: ITR-1 for simple salary, ITR-2 for capital gains/NRI, ITR-3 for business, ITR-4 for presumptive. Advises on old regime (with 80C/80D/HRA deductions) vs new regime (lower rates, no deductions) for maximum savings.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Correct form guaranteed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regime optimisation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><rect x="65" y="10" width="40" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="35" y="42" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Old</text><text x="85" y="42" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">New</text></svg></div><span class="illustration-label">Form Selection</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compute Income, Deductions, and Tax Liability</h3><p class="step-description">CA computes total income under all 5 heads, claims all eligible deductions, calculates tax at slab rates, adds surcharge/cess, credits TDS and advance tax, and determines final tax payable or refund. For business owners, GST turnover is reconciled with ITR income.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Maximum deductions</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST-ITR reconciliation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="34" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs</text><line x1="35" y1="55" x2="85" y2="55" stroke="#14365F" stroke-width="1" opacity="0.2"/></svg></div><span class="illustration-label">Tax Computation</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR on E-Filing Portal</h3><p class="step-description">CA files on incometax.gov.in, selects the correct form under IT Act 1961 for AY 2026-27, enters computed data, validates, and submits. Self-assessment tax paid via integrated payment module if shortfall. Acknowledgement number generated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>incometax.gov.in</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-V generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="30" y="36" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><circle cx="90" cy="60" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M85 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">E-Filing</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">E-Verify and Track Refund</h3><p class="step-description">CA completes e-verification via Aadhaar OTP within 30 days. Return processed by CPC Bangalore. Refund tracked (20-45 days). Section 143(1) intimation reviewed. Demand notices responded to with rectification if needed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar OTP verification</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund tracking</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M48 32l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">VERIFIED</text></svg></div><span class="illustration-label">E-Verified</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ITR Filing in Kolkata</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card:</strong> Mandatory. Must be linked to Aadhaar.</li>
                    <li><strong>Aadhaar Card:</strong> For e-verification via OTP.</li>
                    <li><strong>Form 16 (salaried):</strong> TDS certificate from employer showing salary and TDS deducted.</li>
                    <li><strong>Form 16A:</strong> TDS certificates for interest, professional fees, rent.</li>
                    <li><strong>Bank statements / Interest certificates:</strong> All accounts. FD/RD interest. Savings interest.</li>
                    <li><strong>Investment proofs (80C/80D):</strong> EPF, PPF, ELSS, LIC premium, health insurance, tuition fee receipts.</li>
                    <li><strong>Home loan statement:</strong> Principal (80C) and interest (Section 24(b)) from bank.</li>
                    <li><strong>Capital gains statements:</strong> From broker (Zerodha, Groww). Mutual fund statements. Property sale deed.</li>
                    <li><strong>Rental income documents:</strong> Rent receipts, property tax paid, home loan interest for let-out property.</li>
                    <li><strong>Business P&L and Balance Sheet:</strong> For ITR-3/4 filers. Audited if turnover exceeds Rs 1 crore.</li>
                    <li><strong>GST returns (GSTR-3B/GSTR-1):</strong> For GST-registered businesses. Turnover reconciliation.</li>
                    <li><strong>Form 26AS / AIS / TIS:</strong> Downloaded from e-filing portal. CA verifies all TDS credits.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ITR Filing Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Wrong ITR Form Selection</td><td>Defective return notice from IT Department</td><td>CA ensures correct form based on all income sources, not just salary</td></tr>
                        <tr><td>TDS Mismatch (Form 16 vs 26AS)</td><td>Refund delays when employer TDS doesn't match deposit</td><td>CA identifies and resolves mismatches before filing</td></tr>
                        <tr><td>GST vs ITR Turnover Mismatch</td><td>IT Department scrutiny for business owners</td><td>CA reconciles GSTR-3B turnover with ITR business income</td></tr>
                        <tr><td>Capital Gains Errors</td><td>Incorrect tax on Kolkata property sales</td><td>CA computes with indexation, Section 54 exemption, STCG/LTCG correctly</td></tr>
                        <tr><td>Missing Due Date</td><td>Rs 5,000 late fee + loss of loss carry-forward</td><td>CA sends deadline reminders and files before due date</td></tr>

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
            <h2 class="section-title">ITR Filing Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (Simple Salary)</td><td>Rs 999 - Rs 2,499</td></tr>
                        <tr><td>ITR-2 (Salary + Capital Gains)</td><td>Rs 2,499 - Rs 4,999</td></tr>
                        <tr><td>ITR-3 (Business / Professional)</td><td>Rs 3,999 - Rs 8,999</td></tr>
                        <tr><td>ITR-4 (Presumptive)</td><td>Rs 1,999 - Rs 3,999</td></tr>
                        <tr><td>ITR-5/6 (Firm / Company)</td><td>Rs 5,999 - Rs 15,000</td></tr>
                        <tr><td>ITR-7 (Trust / NGO)</td><td>Rs 4,999 - Rs 9,999</td></tr>
                        <tr><td>Revised / Belated Return</td><td>Rs 1,500 - Rs 4,000</td></tr>
                        <tr><td>Tax Audit (Section 44AB)</td><td>Rs 10,000 - Rs 25,000</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 499 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing in Kolkata consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20Filing%20in%20Kolkata.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Due Dates for FY 2025-26 (AY 2026-27)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Salaried (ITR-1/ITR-2)</td><td>31 July 2026</td></tr>
                        <tr><td>Business/Professional Non-Audit (ITR-3/ITR-4)</td><td>31 August 2026 (NEW per Budget 2026)</td></tr>
                        <tr><td>Trusts/NGOs (ITR-7)</td><td>31 August 2026 (NEW per Budget 2026)</td></tr>
                        <tr><td>Audit Cases (ITR-5/ITR-6)</td><td>31 October 2026</td></tr>
                        <tr><td>Transfer Pricing Cases</td><td>30 November 2026</td></tr>
                        <tr><td>Belated Return (all)</td><td>31 December 2026 (Rs 5,000 late fee)</td></tr>
                        <tr><td>Revised Return (all)</td><td>31 March 2027 (extended per Budget 2026)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> ITR is filed entirely online on incometax.gov.in. No visit to any IT office in Kolkata is required. Your dedicated CA from Patron's pan-India team handles document collection, computation, filing, e-verification, and refund tracking.</p>

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
            <h2 class="section-title">Why Choose Patron for ITR Filing in Kolkata</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg></div><h3 class="feature-title">Correct Form Selection</h3><p class="feature-text">CA analyses all income sources to ensure the right ITR form. No defective return notices.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Maximum Deductions</h3><p class="feature-text">Every 80C/80D/80E/HRA/24(b) claim identified. Old vs new regime advisory for maximum tax savings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">TDS Mismatch Resolution</h3><p class="feature-text">Form 16 vs 26AS discrepancies identified and resolved before filing to prevent refund delays.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">GST-ITR Reconciliation</h3><p class="feature-text">GST turnover matched with ITR business income for Kolkata businesses. Prevents IT scrutiny.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Capital Gains Expertise</h3><p class="feature-text">Property, shares, mutual funds - STCG/LTCG computed with indexation, exemptions (54/54F), and grandfathering.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3 class="feature-title">Post-Filing Support</h3><p class="feature-text">Refund tracking, demand notice response, rectification filing. 10,000+ businesses served, 4.9 Google rating.</p></article>
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
                <blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;margin-bottom:8px;">"Patron found deductions I had been missing for 3 years. My refund doubled."</p><p style="font-weight:700;font-size:13px;color:var(--blue);">- IT Professional, Pune</p></blockquote>
                <blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;margin-bottom:8px;">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold."</p><p style="font-weight:700;font-size:13px;color:var(--blue);">- CFO, Manufacturing, Maharashtra</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Automated ITR Platforms</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Automated Platform</th></tr></thead>
                    <tbody>
                        <tr><td>Form Selection</td><td>CA analyses all income sources; ensures correct form</td><td>Auto-suggests based on limited inputs; errors common</td></tr>
                        <tr><td>Deduction Planning</td><td>CA identifies all 80C/80D/80E/HRA/24(b) claims; regime advisory</td><td>User self-selects; often misses deductions</td></tr>
                        <tr><td>TDS Mismatch</td><td>CA resolves Form 16 vs 26AS discrepancies before filing</td><td>User must identify and fix alone</td></tr>
                        <tr><td>GST Reconciliation</td><td>CA matches GST turnover with ITR business income</td><td>Not available; business owners risk scrutiny</td></tr>
                        <tr><td>Capital Gains</td><td>CA computes with indexation, exemptions (54/54F), grandfathering</td><td>Basic computation; misses complex scenarios</td></tr>
                        <tr><td>Post-Filing</td><td>Demand notice response, refund tracking, rectification</td><td>Filing only; no support for notices</td></tr>

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
                
                <p>Complete your tax compliance with these related services:</p>
                <ul>
                    <li><a href="/income-tax-return"><strong>Income Tax Return Filing India</strong></a> - National-level ITR filing overview and process</li>
                    <li><a href="/accounting-services">Accounting Services</a> - Book-keeping and financial statements for ITR</li>
                    <li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly GST filing with ITR reconciliation</li>
                    <li><a href="/payroll-services">Payroll Services</a> - TDS computation, Form 16 generation, payroll compliance</li>
                    <li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition with Section 80-IAC tax holiday</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing - Legal and Compliance Framework</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Income Tax Act, 1961 (for AY 2026-27); Income Tax Act, 2025 (for Tax Year 2026-27 onwards, effective 01.04.2026)</p>
                <p><strong>Key Sections:</strong> Section 139 (filing obligation); Section 234A (interest 1%/month on late filing); Section 234B/234C (advance tax interest); Section 234F (late fee Rs 5,000/Rs 1,000); Section 80C/80D (deductions); Section 44AB (tax audit if turnover exceeds Rs 1 crore)</p>
                <p><strong>Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> (e-filing portal). Form 26AS, AIS, TIS available on portal.</p>
                <p><strong>Penalties:</strong> Late fee Rs 5,000 (Rs 1,000 if income below Rs 5 lakh) under 234F. Interest 1%/month on unpaid tax under 234A. Prosecution under 276CC for wilful failure. Penalty 50%-200% on concealed income under 270A.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR Filing in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about income tax return filing for Kolkata taxpayers</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR Filing in Kolkata',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the ITR due date for Kolkata taxpayers in 2026?</h3>
                        <div class="faq-expanded__a"><p>ITR-1/ITR-2 (salaried, capital gains): 31 July 2026. ITR-3/ITR-4 (non-audit business, presumptive): 31 August 2026 (NEW per Budget 2026). Audit cases: 31 October 2026. Belated return: 31 December 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Which ITR form for salaried employees in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Most salaried employees in Salt Lake, Dalhousie, and Park Street file ITR-1 (Sahaj) if total income up to Rs 50 lakh with salary, one house property, and other income. ITR-2 if you have capital gains, ESOPs, multiple properties, or foreign income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Can I file ITR online from Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes. ITR is filed 100% online on incometax.gov.in. The CA files the return and completes e-verification via Aadhaar OTP. No visit to any IT office required. Call +91 945 945 6700 for CA-assisted filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the penalty for late ITR filing?</h3>
                        <div class="faq-expanded__a"><p>Late fee Rs 5,000 under Section 234F (Rs 1,000 if income below Rs 5 lakh). Interest 1% per month under Section 234A on unpaid tax. Loss of carry-forward of certain losses. Belated return can be filed until 31 December 2026.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which ITR form for Kolkata business owners?</h3>
                        <div class="faq-expanded__a"><p>Business owners in Burrabazar, Taratala, and Howrah file ITR-3 (regular books) or ITR-4 (presumptive under Section 44AD for turnover below Rs 3 crore). The CA advises on the optimal form.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need a CA for ITR filing?</h3>
                        <div class="faq-expanded__a"><p>While ITR can be self-filed, a CA ensures correct form, maximum deductions, TDS mismatch resolution, GST reconciliation, and proper capital gains computation. CA-filed returns have significantly lower notice rates.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What changed in Budget 2026 for ITR?</h3>
                        <div class="faq-expanded__a"><p>Key changes: ITR-3/ITR-4 due date extended to 31 August. Revised return deadline extended to 31 March. Income Tax Act 2025 effective from 01.04.2026 with new forms.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How long does ITR refund take?</h3>
                        <div class="faq-expanded__a"><p>Refunds typically processed within 20-45 days of e-verification. Credited to registered bank account. Delays if TDS mismatches, outstanding demands, or return selected for scrutiny.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ITR filing kya hai?</strong> ITR mein aap apni saal bhar ki income, deductions, aur tax paid ka hisaab Income Tax Department ko dete ho incometax.gov.in portal pe.</p>
                <p><strong>Kolkata mein ITR kaise file karein?</strong> Patron Accounting se sampark karein - +91 945 945 6700. CA Form 16, bank statements lekar sahi form pe ITR file karta hai.</p>
                <p><strong>ITR ki due date kya hai?</strong> ITR-1/2: 31 July 2026. ITR-3/4: 31 August 2026. Late filing pe Rs 5,000 penalty.</p>
                <p><strong>Kya salary pe bhi ITR zaroori hai?</strong> Haan. Agar income basic exemption limit se zyada hai toh mandatory hai - chahe TDS kat chuka ho.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss Your ITR Filing Deadline</h2>
            <div class="content-text">
                
                <p>ITR filing for FY 2025-26 opens in April 2026. Salaried taxpayers (ITR-1/2) must file by 31 July 2026 - missing it means Rs 5,000 late fee plus 1% monthly interest. Business owners (ITR-3/4) get until 31 August per Budget 2026, but early filing ensures faster refunds and avoids portal congestion.</p>
                <p><strong>Get ITR filing done from Kolkata. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ITR%20filing%20help%20in%20Kolkata." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get ITR Filing Done in Kolkata - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Income tax return filing in Kolkata is the annual compliance obligation for every individual and entity whose income exceeds the exemption limit. Returns are filed online on incometax.gov.in using the correct ITR form by the prescribed due date.</p>
                <p style="color:rgba(255,255,255,0.85);">Kolkata taxpayers across Salt Lake, Dalhousie, Burrabazar, New Town, and Howrah benefit from CA-managed ITR filing with correct form selection, maximum deductions, TDS resolution, and Budget 2026 compliance.</p>
                <p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP - 15+ years, 10,000+ businesses, 4.9 Google rating. Digital-first CA team for Kolkata taxpayers.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ITR%20Filing%20in%20Kolkata.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR%20Filing%20in%20Kolkata&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20help%20with%20Income%20Tax%20Return%20filing%20in%20Kolkata.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR Filing Across Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted ITR filing in all major cities across India</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                            <a href="/income-tax-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <a href="/income-tax-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/income-tax-return-filing/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                            <a href="/income-tax-return/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                            <a href="/income-tax-return/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                            <a href="/income-tax-return/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                        </div></div>
                    <div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end tax compliance in Kolkata</div><div class="pa-cross-grid">
                            <a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/pan-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/tan-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/startup-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                            <a href="/udyam-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
                        </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed quarterly by our CA and CS team. ITR forms, due dates, and Budget changes are verified against the Income Tax e-filing portal and updated on the published date shown above.</p>
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
