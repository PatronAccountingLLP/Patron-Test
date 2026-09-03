@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('meta')
    <title>Payroll Services in Kolkata – Salary, PF, ESI &amp; TDS | Patron</title>
    <meta name="description" content="CA-managed payroll in Kolkata. Salary processing, PF, ESI, WB Professional Tax, Labour Welfare Fund, TDS, Form 16. Salt Lake, Burrabazar. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Services in Kolkata – Salary, PF, ESI &amp; TDS | Patron">
    <meta property="og:description" content="CA-managed payroll Kolkata. PF, ESI, WB PT, LWF, TDS. From Rs 1,500/month. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services/kolkata">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Payroll Services in Kolkata – Salary, PF, ESI &amp; TDS | Patron">
    <meta name="twitter:description" content="Payroll Kolkata. PF ESI WB PT TDS. Rs 1,500/month. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll Services in Kolkata",
          "description": "CA-managed payroll in Kolkata. Salary processing, PF, ESI, WB Professional Tax, Labour Welfare Fund, TDS, Form 16. Salt Lake, Burrabazar. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/payroll-services/kolkata",
          "serviceType": "Payroll Services in Kolkata",
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
            "url": "https://www.patronaccounting.com/payroll-services/kolkata",
            "price": "1500"
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
              "name": "Payroll Services",
              "item": "https://www.patronaccounting.com/payroll-services"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Payroll Kolkata",
              "item": "https://www.patronaccounting.com/payroll-services/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What does payroll service include?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Salary computation PF ESI WB PT LWF TDS payslips Form 16 bonus gratuity full and final settlement. All managed by CA."
              }
            },
            {
              "@type": "Question",
              "name": "What is WB Professional Tax?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Monthly deduction Rs 110 to Rs 200 based on salary slab under WB PT Act 1979. Max Rs 2,500 per year. Filed via GRIPS portal."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Starting Rs 1,500 per month for up to 10 employees. Scales with count and complexity. Setup Rs 3,000-10,000 one-time."
              }
            },
            {
              "@type": "Question",
              "name": "How long does setup take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "3-5 working days for go-live. PF ESI registration if new may take 2-5 days additional."
              }
            },
            {
              "@type": "Question",
              "name": "What is WB Labour Welfare Fund?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Employer Rs 30 per employee per half-year. Employee Rs 3. Due June 30 and December 31. WB LWF Act 1974."
              }
            },
            {
              "@type": "Question",
              "name": "When are PF ESI due?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "PF ECR and ESI challan by 15th of following month. Late PF attracts 12% interest plus damages up to 100%."
              }
            },
            {
              "@type": "Question",
              "name": "When is Form 16 issued?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "By June 15 after financial year end. Auto-generated from quarterly Form 24Q data. Patron ensures timely delivery."
              }
            },
            {
              "@type": "Question",
              "name": "Can payroll be done online from Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes 100% online. Dedicated CA handles everything remotely. Payslips via email or portal. No physical visits."
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
                        Payroll Services in Kolkata: CA-Managed Salary Processing and Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents::</span> PAN, employee list, salary structure, bank details</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees::</span> Starting Rs 1,500/month | Setup in 3-5 working days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Compliance::</span> EPF Act 1952, ESI Act 1948, WB PT Act 1979, WB LWF Act 1974, IT Act 1961</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Offices::</span> EPFO Sub-Regional Office Kolkata | ESIC Regional Office | WB Commissioner PT</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Payroll Services',
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
    'ctaText'    => 'Kolkata employers trust Patron for payroll processing, WB PT compliance, and PF/ESI filing.',
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
<a href="#what-section" class="toc-btn">What Is Payroll</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">In-House vs Outsourced</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services in Kolkata: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Services Services at a Glance</strong></p>
                    <p>Payroll services in Kolkata cover end-to-end salary processing, statutory compliance (PF, ESI, WB Professional Tax, Labour Welfare Fund, TDS), payslip generation, and Form 16 issuance - managed by a dedicated CA. Businesses across Salt Lake Sector V, New Town, Burrabazar, and Dalhousie use this service to eliminate manual payroll errors and meet every statutory deadline.</p>
                </div>
                <p>Kolkata's workforce spans IT professionals in Salt Lake Sector V, wholesale traders in Burrabazar with seasonal workers, manufacturers in Taratala/Howrah with shift-based overtime, and BFSI firms along Dalhousie Square. Each generates distinct compliance requirements under central statutes (EPF, ESI, TDS) and WB state laws (PT, LWF, Shops Act). Learn more about <a href="/payroll-services">Payroll Services across India</a>.</p>
                <p>The EPFO Sub-Regional Office Kolkata processes PF registrations. WB Commissioner of PT mandates monthly deductions Rs 110-200 per employee. WB Labour Welfare Board requires half-yearly Rs 30/employee contributions. A CA-managed payroll ensures all deductions and filings happen on schedule. Same CA handles <a href="/gst-registration/kolkata">GST</a>, <a href="/zoho-books-accounting">Zoho Books accounting</a>, and <a href="/income-tax-return/kolkata">ITR</a>.</p>
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
                <h2 class="section-title">What Is Payroll Service?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll service is a CA-managed process covering salary computation, statutory deductions (PF, ESI, Professional Tax, TDS), payslip generation, bank disbursement, compliance filing, and Form 16 issuance.</p>
<p>Operates under EPF Act 1952, ESI Act 1948, IT Act 1961 (TDS Section 192), and applicable state laws. In West Bengal: WB PT Act 1979 and WB LWF Act 1974 additionally apply.</p>
<p>For Kolkata businesses - IT companies in Salt Lake with 200+ salaried employees needing structured CTC, Burrabazar trading firms with daily-wage workers, Taratala manufacturers with overtime calculations - Patron's CA handles the complete payroll lifecycle every month.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Services:</strong></p>
                    <ul>
<li><strong>EPF:</strong> 12% employee + 12% employer contribution. EPFO Sub-Regional Office Kolkata</li>
<li><strong>ESI:</strong> 0.75% employee + 3.25% employer (up to Rs 21,000 salary). ESIC Regional Office Kolkata</li>
<li><strong>WB PT:</strong> Rs 110-200/month per employee slab. Max Rs 2,500/year. WB PT Act 1979</li>
<li><strong>WB LWF:</strong> Rs 30 employer + Rs 3 employee per half-year. WB LWF Act 1974</li>
<li><strong>TDS Section 192:</strong> Monthly income tax deduction on salary</li>
<li><strong>Form 24Q:</strong> Quarterly TDS return for salary payments</li>
<li><strong>Form 16:</strong> Annual TDS certificate issued to employees by June 15</li>
<li><strong>GRIPS:</strong> WB e-payment portal for Professional Tax filing</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Payroll/Salary illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Payslip -->
                            <rect x="50" y="45" width="100" height="65" rx="6" fill="#fff" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="50" y="45" width="100" height="16" rx="6" fill="#14365F"/>
                            <text x="100" y="57" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAYSLIP</text>
                            <text x="60" y="74" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">Basic</text>
                            <text x="60" y="84" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">EPF</text>
                            <text x="60" y="94" font-size="5" fill="#14365F" font-weight="600" font-family="Arial, sans-serif">WB PT</text>
                            <text x="130" y="74" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">₹</text>
                            <text x="130" y="84" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">12%</text>
                            <text x="130" y="94" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">₹200</text>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF+ESI+PT</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>WB PT + EPF + ESI</span>
                        <strong>Payroll Services</strong>
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
            <h2 class="section-title">Who Needs Payroll Services in Kolkata?</h2>
            <div class="content-text">
                
                <p><strong>IT/ITeS Companies (Salt Lake / New Town):</strong> Structured CTCs with HRA, LTA, NPS. EPF 12%+12%, ESI if applicable. WB PT deduction. TDS Section 192. Form 16 by May-end for ITR filing.</p>
<p><strong>Wholesale Traders (Burrabazar):</strong> Seasonal daily-wage workers. Minimum wages per WB Labour Dept notification. PF if 20+ employees. Wage slips under Payment of Wages Act.</p>
<p><strong>Manufacturing (Taratala / Howrah):</strong> Shift-based operations. Overtime at 2x under Factories Act Section 59. EPF, ESI, WB PT. Bonus under Payment of Bonus Act (8.33%-20%).</p>
<p><strong>Export Firms (Netaji Subhas Dock):</strong> Forex payroll, expatriate salaries. EPF, ESI, WB PT, TDS. Cross-border salary structuring.</p>
<p><strong>DPIIT Startups (New Town):</strong> TDS Section 192 on every salaried employee. Quarterly Form 24Q. Tax-efficient CTC structuring with flexi-pay and NPS.</p>
<p><strong>Retail and Hospitality (Park Street / New Market):</strong> WB Shops and Establishments Act. WB LWF mandatory for 10+ employees. Rs 30/employee half-yearly contribution.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Salary Computation and CTC Structuring</td><td>Gross salary, basic, HRA, allowances, performance-linked components. Tax-efficient structuring for Kolkata professionals</td></tr>
<tr><td>PF Registration and Monthly Filing</td><td>EPFO Sub-Regional Office Kolkata. Monthly ECR by 15th. 12% + 12% including 8.33% EPS computed</td></tr>
<tr><td>ESI Registration and Compliance</td><td>ESIC Kolkata. 0.75% employee + 3.25% employer for salary up to Rs 21,000. Monthly filing</td></tr>
<tr><td>WB Professional Tax Deduction</td><td>Monthly slabs Rs 110-200 under WB PT Act 1979. Annual return via GRIPS portal at wbcomtax.gov.in</td></tr>
<tr><td>WB Labour Welfare Fund</td><td>Employer Rs 30 + employee Rs 3 per half-year. Due June 30 / Dec 31. WB LWF Act 1974</td></tr>
<tr><td>TDS on Salary and Form 16</td><td>Monthly TDS per Section 192. Quarterly Form 24Q. Annual Form 16 by June 15. Form 12BA for perquisites</td></tr>
<tr><td>Payslip and Bank Disbursement</td><td>Branded payslips with all deductions. NEFT/RTGS bank file for Kolkata accounts</td></tr>
<tr><td>Bonus, Gratuity, Full & Final</td><td>Statutory bonus 8.33%-20%. Gratuity after 5 years. F&F with leave encashment and PF withdrawal assist</td></tr>

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
            <h2 class="section-title">How Payroll Services Work in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From employee data collection to salary processing, statutory filing, and Form 16 delivery - here's how Patron manages your Kolkata payroll.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Employee Data Collection and Compliance Mapping</h3><p class="step-description">CA collects employee master: names, PAN, Aadhaar, bank, CTC, joining dates. Maps to EPF (EPFO Kolkata), ESI (ESIC Kolkata), WB PT (Commissioner PT), and WB LWF. PF/ESI codes verified or new registrations initiated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PF/ESI verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">EMPLOYEES</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><text x="60" y="48" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">PF + ESI</text><text x="60" y="60" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WB PT + LWF</text></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Salary Structure Design and Tax Planning</h3><p class="step-description">Tax-efficient CTC for each category. Salt Lake IT: HRA optimisation, NPS 80CCD(2), flexi-pay. Taratala manufacturing: shift allowance, overtime, minimum wage compliance. Investment declarations collected for TDS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax-efficient CTC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> HRA optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="55" rx="5" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="35" y="32" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CTC</text><text x="35" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DESIGN</text><rect x="65" y="10" width="40" height="55" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="85" y="32" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAX</text><text x="85" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">SAVINGS</text></svg></div><span class="illustration-label">Structure Set</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Attendance and Input Integration</h3><p class="step-description">Attendance, leave, overtime, variable pay collected by 25th. Biometric data from New Town offices or Howrah factories imported. LOP deductions and arrears computed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inputs collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Attendance verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ATTENDANCE</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">LEAVE + OT</text><circle cx="85" cy="60" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M80 60l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Inputs Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Payroll Processing and Statutory Deductions</h3><p class="step-description">Gross salary computed. EPF 12%+12%, ESI 0.75%+3.25%, WB PT per slab, TDS Section 192, loan recovery applied. Net salary calculated. Bank disbursement file prepared for NEFT/RTGS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAYROLL</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">EPF + ESI + PT</text><text x="60" y="55" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NET SALARY</text></svg></div><span class="illustration-label">Payroll Done</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Filing and Challan Payment</h3><p class="step-description">PF ECR by 15th. ESI by 15th. WB PT via GRIPS. TDS by 7th. WB LWF half-yearly by June/Dec. Quarterly Form 24Q. All challans archived in compliance dashboard.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All filed on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero penalties</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PF ✓ 15th</text><text x="60" y="38" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESI ✓ 15th</text><text x="60" y="50" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TDS ✓ 7th</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">WB PT ✓</text></svg></div><span class="illustration-label">Compliance Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Payslip Distribution, Reporting, and Form 16</h3><p class="step-description">Payslips via email/portal. Monthly registers: salary, PF/ESI, PT, TDS. Year-end: Form 16, Form 12BA, annual PF return. WB LWF annual return by January 15. Statutory audit data provided.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">PAYSLIPS</text><text x="60" y="42" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FORM 16</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DELIVERED</text></svg></div><span class="illustration-label">Fully Managed</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Payroll Setup</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Employee Master:</strong> Names, PAN, Aadhaar, bank details, CTC structure, joining dates</li>
<li><strong>PF/ESI Details:</strong> Existing establishment codes or new registration documents</li>
<li><strong>Salary Structure:</strong> CTC breakup, allowance details, variable pay components</li>
<li><strong>Attendance System:</strong> Biometric/manual attendance records, leave policy</li>
<li><strong>Investment Declarations:</strong> 80C, 80D, HRA, home loan for TDS computation</li>
<li><strong>Bank Details:</strong> Company current account and employee salary accounts for NEFT/RTGS</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Kolkata-Specific Tip:</strong> Ensure WB Professional Tax registration is current. Employers with employees earning above Rs 10,000/month must deduct PT monthly. Slab ranges from Rs 110 to Rs 200. Patron's CA verifies slab accuracy during setup and configures auto-deduction.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Payroll Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>WB Professional Tax Slab Errors</td><td>Wrong slab = under-deduction and penalties from Commissioner PT</td><td>Patron configures exact WB PT slabs per salary range. Auto-deduction verified monthly</td></tr>
<tr><td>WB Labour Welfare Fund Missed</td><td>June/Dec deadlines missed for Rs 30/employee contribution</td><td>Patron tracks half-yearly due dates and files through lwf.wblabour.gov.in</td></tr>
<tr><td>Multi-Location PF Code Issues</td><td>Salt Lake + New Town or Taratala + Howrah under single code</td><td>Patron ensures correct establishment-wise employee mapping for EPFO Kolkata</td></tr>
<tr><td>Delayed Form 16</td><td>Batch processing delays Form 16 past May-end</td><td>Patron auto-generates from quarterly 24Q. Ready by May for timely ITR filing</td></tr>
<tr><td>Seasonal Labour Payroll (Burrabazar)</td><td>Minimum wage, PF for 20+ workers, wage slips not maintained</td><td>Patron tracks seasonal workers with correct compliance per Payment of Wages Act</td></tr>

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
            <h2 class="section-title">Payroll Services Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll Setup + Configuration</td><td>Rs 3,000-10,000 (one-time) | Includes PF/ESI registration if needed</td></tr>
<tr><td>Monthly Payroll (up to 10 employees)</td><td>Rs 1,500-3,000 | Salary + PF + ESI + PT + TDS</td></tr>
<tr><td>Monthly Payroll (11-50 employees)</td><td>Rs 3,000-7,000 | Full compliance package</td></tr>
<tr><td>Monthly Payroll (51-200 employees)</td><td>Rs 7,000-15,000 | Includes MIS + audit support</td></tr>
<tr><td>WB Labour Welfare Fund Filing</td><td>Included in monthly fee | Half-yearly compliance</td></tr>
<tr><td>Form 16 Generation (Annual)</td><td>Included | Auto-generated from quarterly 24Q data</td></tr>
<tr><td>Full and Final Settlement (per exit)</td><td>Rs 500-1,500 | Leave encashment + gratuity + PF withdrawal</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Setup Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Employee Data + Compliance Mapping</td><td>Day 1-2 (CA maps PF/ESI/PT/LWF for each employee)</td></tr>
<tr><td>PF/ESI Registration (if new)</td><td>Day 2-5 (EPFO/ESIC Kolkata)</td></tr>
<tr><td>Salary Structure + Configuration</td><td>Day 3-5 (CTC breakup, tax planning, WB PT slab mapping)</td></tr>
<tr><td>First Payroll Trial Run</td><td>Day 5-6 (test computation, deduction verification)</td></tr>
<tr><td>Go-Live + First Disbursement</td><td>Day 7 (bank file processed, payslips distributed)</td></tr>
<tr><td>First Statutory Filing</td><td>By 15th of following month (all challans paid and archived)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Kolkata Processing Note:</strong> 100% online. Dedicated CA handles salary processing, compliance filing, and reporting remotely. Payslips via email or portal. No physical visits required. Patron manages EPFO Kolkata, ESIC Kolkata, and WB PT filings digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for Payroll in Kolkata?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Managed, Not Software-Only</h3><p>Chartered Accountant responsible for every computation, deduction, and filing. Not a payroll app - a complete service with human expertise.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Kolkata Compliance Expertise</h3><p>EPFO Sub-Regional Office Kolkata, WB PT slabs, WB LWF half-yearly, ESIC Regional Office. Local compliance, national platform.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-location companies get coordinated payroll across all sites.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Integrated with Accounting</h3><p>Payroll data auto-reconciled with Zoho Books/Tally. Salary expenses, PF/ESI liabilities correctly reflected in P&L and Balance Sheet.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Kolkata Employers</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron manages payroll for our 120 employees in Salt Lake. PF and ESI filed on time every month. WB Professional Tax configured correctly - no more manual slab errors. Form 16 ready by May. Excellent."</p><p style="font-weight:700;color:var(--blue);margin:0;">- IT Company, Salt Lake Sector V</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Outsourced Payroll (CA-Managed)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>In-House (Self-Managed)</th><th>Outsourced to Patron (CA-Managed)</th></tr></thead>
                    <tbody>
                        <tr><td>Setup Cost</td><td>Software + HR hire + training</td><td>One-time Rs 3,000-10,000</td></tr>
<tr><td>Monthly Cost</td><td>HR salary + software + CA retainer</td><td>Fixed monthly from Rs 1,500</td></tr>
<tr><td>Compliance Risk</td><td>High - must track WB PT slabs, LWF, PF/ESI changes</td><td>Low - CA tracks all regulatory changes</td></tr>
<tr><td>Error Rate</td><td>5-10% manual; 2-5% software-only</td><td>Under 0.5% with CA verification</td></tr>
<tr><td>Form 16 Timeline</td><td>Often delayed (batch TDS processing)</td><td>Auto-generated from quarterly 24Q by May</td></tr>
<tr><td>Accounting Integration</td><td>Manual journal entries</td><td>Auto-reconciled with Zoho Books/Tally</td></tr>
<tr><td>Audit Readiness</td><td>Separate preparation needed</td><td>Built-in - CA prepares audit-ready registers</td></tr>
<tr><td>Scalability</td><td>Requires additional HR headcount</td><td>Scales with employee count - no additional hires</td></tr>

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
<li><a href="/payroll-services">Payroll Services in India</a> - National payroll services</li>
<li><a href="/gst-registration/kolkata">GST Registration in Kolkata</a> - Tax compliance</li>
<li><a href="/zoho-books-accounting">Zoho Books Accounting in Kolkata</a> - Cloud bookkeeping</li>
<li><a href="/income-tax-return/kolkata">Income Tax Return in Kolkata</a> - ITR filing</li>

<li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Quarterly 24Q/26Q</li>
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
<li>EPF Act 1952 (12%+12% contribution, ECR by 15th)</li>
<li>ESI Act 1948 (0.75%+3.25% for salary up to Rs 21,000)</li>
<li>IT Act 1961, Section 192 (TDS on salary, Form 24Q quarterly)</li>
<li>WB Professional Tax Act, 1979 (Rs 110-200/month, max Rs 2,500/year)</li>
<li>WB Labour Welfare Fund Act, 1974 (Rs 30+3 per employee half-yearly)</li>
<li>Payment of Bonus Act, 1965 (8.33%-20%)</li>
<li>Payment of Gratuity Act, 1972 (5 years completion)</li>
<li>WB Shops and Establishments Act, 1963</li>
</ul>
<p><strong>Penalties:</strong> Late PF: 12% interest + damages up to 100% | Late ESI: 12% interest | Late WB PT: 1%/month | Late TDS: 1.5%/month | WB LWF non-payment: prosecution</p>
<p><strong>WB PT Slabs:</strong> Nil (≤ Rs 10K) | Rs 110 (10K-15K) | Rs 130 (15K-25K) | Rs 150 (25K-40K) | Rs 200 (> Rs 40K)</p>
<p><strong>Authority:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://wbcomtax.gov.in" target="_blank" rel="noopener">WB PT</a> | <a href="https://lwf.wblabour.gov.in" target="_blank" rel="noopener">WB LWF</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Payroll Services in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about payroll processing, WB Professional Tax, Labour Welfare Fund, PF/ESI, TDS, and Form 16 for Kolkata businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Payroll Services',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What does payroll service include?</h3>
                        <div class="faq-expanded__a"><p>Salary computation, PF, ESI, WB PT, WB LWF, TDS Section 192, payslips, Form 16, bonus, gratuity, and full & final settlement. All managed by a dedicated CA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is WB Professional Tax?</h3>
                        <div class="faq-expanded__a"><p>Monthly deduction from Rs 110 to Rs 200 based on salary slab under WB PT Act 1979. Maximum Rs 2,500/year. Filed annually via GRIPS portal. Patron auto-configures correct slabs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the payroll fee in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Starting Rs 1,500/month for up to 10 employees. Rs 3,000-7,000 for 11-50. Rs 7,000-15,000 for 51-200. Setup Rs 3,000-10,000 one-time. Includes all statutory compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does payroll setup take?</h3>
                        <div class="faq-expanded__a"><p>3-5 working days for go-live. PF/ESI registration (if new) may take 2-5 additional days. Trial run on Day 5-6. First salary disbursement by Day 7.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is WB Labour Welfare Fund?</h3>
                        <div class="faq-expanded__a"><p>Employer contributes Rs 30 per employee per half-year. Employee Rs 3. Due June 30 and December 31. Returns by July 15 and January 15. WB LWF Act 1974. Patron tracks and files.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When are PF and ESI due?</h3>
                        <div class="faq-expanded__a"><p>PF ECR and ESI challan by 15th of following month. Late PF: 12% interest + damages up to 100%. Late ESI: 12% interest. Patron files on time every month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">When is Form 16 issued?</h3>
                        <div class="faq-expanded__a"><p>By June 15 after financial year end. Auto-generated from validated quarterly Form 24Q data. Patron ensures Form 16 is ready by May for employees' ITR filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can payroll be managed online from Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Yes, 100% online. Dedicated CA handles salary processing, compliance filing, and reporting remotely. Payslips via email or portal. No physical visits required.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Payroll ka matlab kya hota hai?</strong> Salary calculate karna, PF ESI PT TDS katna, government ko file karna, payslip dena. Sab CA manage karta hai.</p>
<p><strong>WB Professional Tax kitna kata hai?</strong> Rs 110 se Rs 200/month salary slab ke hisaab se. Maximum Rs 2,500/year. GRIPS portal par file hota hai.</p>
<p><strong>PF ka paisa monthly jama karna padta hai?</strong> Haan. 15th tak ECR file karna mandatory. Late hone par 12% interest + damages.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Start Payroll Today</h2>
            <div class="content-text">
                
                <p>PF ECR is due by the 15th every month. Late deposit attracts 12% interest plus damages up to 100%. TDS by 7th - late triggers 1.5%/month interest. WB PT monthly, WB LWF half-yearly. Every missed deadline means penalties. A CA-managed payroll ensures every deadline is met. Start today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Payroll Services in Kolkata</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Payroll services in Kolkata provide CA-managed salary processing, statutory compliance (PF, ESI, WB PT, LWF, TDS), payslip generation, and Form 16 - all handled online by a dedicated Chartered Accountant for Salt Lake IT, Burrabazar traders, Taratala manufacturers, and more.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP is a multi-office CA firm with 15+ years, 10,000+ businesses, and 4.9 Google rating. Digital-first payroll combining labour law expertise with CA-managed compliance precision.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services&body=Hello%2C%20I%20just%20visited%20your%20Payroll%20Services%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-managed payroll services in 8 cities. Select your city.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/payroll-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/payroll-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/payroll-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/payroll-services/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/payroll-services/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/payroll-services/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Kolkata</div><div class="pa-block-sub">End-to-end payroll and compliance</div><div class="pa-cross-grid"><a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
<a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers payroll services in Kolkata including PF, ESI, WB Professional Tax, WB Labour Welfare Fund, TDS Section 192, Form 16, and CTC structuring. Reviewed semi-annually. Freshness Tier 2.</p>
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
