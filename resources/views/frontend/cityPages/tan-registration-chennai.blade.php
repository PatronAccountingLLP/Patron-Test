
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>TAN Registration in Chennai – Form 49B, Process &amp; Fees</title>
    <meta name="description" content="CA-assisted TAN registration in Chennai. Form 49B filing, TDS compliance, quarterly returns. Serving OMR, Ambattur, T. Nagar businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/tan-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="TAN Registration in Chennai – Form 49B, Process &amp; Fees">
    <meta property="og:description" content="CA-assisted TAN registration in Chennai. Form 49B filing, TDS compliance, quarterly returns. Serving OMR, Ambattur, T. Nagar businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/tan-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TAN Registration in Chennai – Form 49B, Process &amp; Fees">
    <meta name="twitter:description" content="CA-assisted TAN registration in Chennai. Form 49B filing, TDS compliance, quarterly returns. Serving OMR, Ambattur, T. Nagar businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "TAN Registration in Chennai",
          "description": "CA-assisted TAN registration in Chennai. Form 49B filing, TDS compliance, quarterly returns. Serving OMR, Ambattur, T. Nagar businesses. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/tan-registration/chennai",
          "serviceType": "TAN Registration in Chennai",
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
            "url": "https://www.patronaccounting.com/tan-registration/chennai",
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
              "name": "TAN Registration",
              "item": "https://www.patronaccounting.com/tan-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "TAN Registration Chennai",
              "item": "https://www.patronaccounting.com/tan-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Who needs TAN registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Any entity deducting TDS needs TAN - companies paying salaries, businesses paying contractors, tenants paying rent above Rs 2.4 lakh per year, entities paying professional fees above Rs 30,000, and property buyers for transactions above Rs 50 lakh."
              }
            },
            {
              "@type": "Question",
              "name": "Can I apply for TAN online from Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Form 49B is filed online on the Protean NSDL portal at tin.tin.nsdl.com. Fee of Rs 77 paid online. TAN certificate dispatched to Chennai address within 7-10 working days. No office visit required."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for TAN registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Government fee is Rs 65 plus 18 percent GST totalling Rs 77. One-time fee paid at Form 49B submission. Patron all-inclusive professional fee is Rs 499 covering filing document preparation and TRACES setup."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not having TAN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Failure to obtain TAN attracts Rs 10,000 penalty under Section 272BB. Without TAN you cannot file TDS returns attracting Rs 200 per day penalty under Section 234E. TDS deposited without quoting TAN is not credited properly."
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
                        TAN Registration in Chennai: CA-Managed TDS Compliance from Day One
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof, business registration proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> TAN registration govt fee Rs 77 (incl GST). Patron all-inclusive Rs 499</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All entities deducting TDS - companies, LLPs, firms, trusts, individuals</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-10 working days for TAN allotment</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'TAN Registration in Chennai',
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
    'ctaText'    => 'Get expert CA assistance for TAN registration in Chennai. From Form 49B to quarterly TDS returns, we handle everything.',
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
            <a href="#overview-section" class="toc-pill">Overview</a><a href="#what-section" class="toc-pill">What Is TAN</a><a href="#who-section" class="toc-pill">Who Needs It</a><a href="#services-section" class="toc-pill">Services</a><a href="#procedure-section" class="toc-pill">6-Step Process</a><a href="#documents-section" class="toc-pill">Documents</a><a href="#challenges-section" class="toc-pill">Challenges</a><a href="#fees-section" class="toc-pill">Fees</a><a href="#timeline-section" class="toc-pill">Timeline</a><a href="#benefits-section" class="toc-pill">Why Patron</a><a href="#comparison-section" class="toc-pill">TAN vs PAN</a><a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration in Chennai: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - TAN Registration in Chennai Services at a Glance</strong></p>
                    <p>TAN (Tax Deduction and Collection Account Number) is a mandatory 10-digit alphanumeric identifier issued by the Income Tax Department for any entity deducting or collecting tax at source (TDS/TCS). Applied via Form 49B on the Protean (NSDL) portal, TAN must be quoted on all TDS challans, returns, and certificates. Without TAN, TIN-FCs will not accept TDS returns, and the entity faces Rs 10,000 penalty under Section 272BB.</p>
                </div>
                <p>Chennai is home to thousands of businesses that must deduct TDS - IT companies on OMR deducting TDS on employee salaries under Section 192, manufacturing units in Ambattur and Guindy deducting TDS on contractor payments under Section 194C, commercial landlords on Anna Salai receiving rent with TDS under Section 194I, and property buyers deducting 1% TDS on purchases above Rs 50 lakh under Section 194IA.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody>
                    <tr><td>Governing Law</td><td>Income Tax Act, 1961 - Section 203A</td></tr>
                    <tr><td>Authority</td><td>Income Tax Department | Protean (NSDL) | UTIITSL</td></tr>
                    <tr><td>Form</td><td>Form 49B (online via tin.tin.nsdl.com or offline at TIN-FC)</td></tr>
                    <tr><td>TAN Format</td><td>10-digit: 3 letters (jurisdiction) + 1 letter (entity initial) + 5 digits + 1 letter</td></tr>
                    <tr><td>Govt Fee</td><td>Rs 65 + 18% GST = Rs 77</td></tr>
                    <tr><td>Timeline</td><td>7-10 working days</td></tr>
                    <tr><td>Mandatory For</td><td>All entities deducting TDS on salary, rent, contractor payments, professional fees, commissions</td></tr>
                    <tr><td>Must Quote On</td><td>TDS/TCS returns, challans, certificates (Form 16/16A), all IT correspondence</td></tr>
                    <tr><td>Penalty (No TAN)</td><td>Rs 10,000 under Section 272BB</td></tr>
                    <tr><td>TRACES Portal</td><td>tdscpc.gov.in (TDS return filing, certificate download)</td></tr>
                </tbody></table></div><p</p>
                <p>Every entity deducting TDS needs a valid TAN before making the first deduction. Without TAN, the entity cannot deposit TDS with the government, cannot file quarterly returns on TRACES, and cannot issue TDS certificates (Form 16/16A). Patron Accounting's CA team handles the complete <a href="/tan-registration">TAN registration</a> lifecycle - from Form 49B filing, TAN allotment tracking, TRACES registration, quarterly TDS return filing (24Q for salary, 26Q for non-salary, 27Q for NRI payments), and TDS certificate issuance. Post-registration, the same CA manages ongoing TDS compliance including <a href="/tds-return">TDS returns</a> and <a href="/payroll-services">payroll services</a>.</p>
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
                    
                    <p>TAN registration is the process of obtaining a Tax Deduction and Collection Account Number from the Income Tax Department by filing Form 49B, enabling an entity to legally deduct tax at source (TDS) and collect tax at source (TCS) on specified payments.</p>
                    <p>Under Section 203A of the Income Tax Act 1961, every person responsible for deducting or collecting tax at source must obtain TAN. The TAN is a 10-digit alphanumeric code: the first three letters represent the jurisdiction (e.g., CHE for Chennai), the fourth letter is the initial of the entity name, followed by five unique digits and one check letter. TAN must be quoted on every TDS/TCS return, every challan for depositing TDS, every TDS certificate, and all correspondence with the Income Tax Department.</p>
                    <p>For Chennai, TAN registration is critical because TDS obligations are pervasive: IT companies on OMR with 50+ employees must deduct salary TDS under Section 192, manufacturing businesses in Ambattur paying contractors must deduct under Section 194C, landlords of commercial properties on Anna Salai must ensure tenants deduct rent TDS under Section 194I, and anyone purchasing property above Rs 50 lakh must deduct 1% TDS under Section 194IA. The Chennai jurisdiction code in TAN is typically 'CHE' or 'MDS'.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for TAN Registration in Chennai:</strong></p>
                    <ul>
                        <li><strong>TAN:</strong> Tax Deduction and Collection Account Number - 10-digit identifier for TDS/TCS deductors.</li>
                        <li><strong>TDS:</strong> Tax Deducted at Source - tax deducted by the payer on salary, rent, contractor fees, professional fees.</li>
                        <li><strong>Form 49B:</strong> Application form for TAN registration filed on Protean (NSDL) portal.</li>
                        <li><strong>TRACES:</strong> TDS Reconciliation Analysis and Correction Enabling System - IT portal for TDS return filing.</li>
                        <li><strong>Form 16/16A:</strong> TDS certificates issued to employees (16) and non-salary deductees (16A).</li>
                        <li><strong>Challan 281:</strong> Payment form for depositing deducted TDS with the government.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TAN Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Rs 77 Govt Fee</span>
                        <strong>TAN in 7-10 Days</strong>
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
            <h2 class="section-title">Who Needs TAN Registration in Chennai?</h2>
            <div class="content-text">
                
                <h3>IT Companies and Employers on OMR</h3><p>Any company paying salaries must deduct TDS under Section 192 based on employee tax slabs. OMR's IT corridor has thousands of companies with payroll TDS obligations. TAN is required before the first salary payment. Patron handles TAN alongside <a href="/payroll-services/chennai">payroll services in Chennai</a>.</p>
                <h3>Manufacturers and Contractors in Ambattur and Guindy</h3><p>Businesses paying contractors, sub-contractors, and labour supply agencies must deduct TDS at 1-2% under Section 194C. Manufacturing units in Ambattur SIDCO and Guindy Industrial Estate with extensive contractor networks need TAN from day one.</p>
                <h3>Landlords and Tenants of Commercial Property</h3><p>Tenants paying rent above Rs 2.4 lakh per year must deduct TDS at 10% under Section 194I. Commercial tenants on Anna Salai, T. Nagar, and OMR must have TAN.</p>
                <h3>Property Buyers in Chennai</h3><p>Anyone purchasing property above Rs 50 lakh must deduct TDS at 1% under Section 194IA and deposit via Form 26QB. Regular property dealers need TAN for systematic TDS management.</p>
                <h3>Businesses Paying Professional Fees</h3><p>Companies paying professional/technical fees above Rs 30,000/year must deduct TDS at 10% under Section 194J. Chennai's consulting, legal, and accounting ecosystem generates significant 194J obligations.</p>
                <h3>NGOs and Trusts</h3><p>Charitable trusts and Section 8 companies paying salaries, contractor fees, or rent must obtain TAN. NGOs often overlook TAN registration leading to non-compliance.</p>

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
                        <tr><td>Form 49B Filing</td><td>Complete online application on Protean (NSDL) portal with entity details, PAN, and address</td></tr>
                        <tr><td>Document Preparation</td><td>PAN card, Aadhaar of authorised signatory, business registration proof, Chennai address proof</td></tr>
                        <tr><td>TAN Allotment and Certificate</td><td>10-digit TAN allotted within 7-10 working days. Certificate delivered to Chennai address</td></tr>
                        <tr><td>TRACES Registration</td><td>Registration on TRACES portal for TDS return filing, certificate download, and compliance tracking</td></tr>
                        <tr><td>Quarterly TDS Return Filing</td><td>24Q (salary TDS), 26Q (non-salary TDS), 27Q (NRI payments) filed quarterly by due dates</td></tr>
                        <tr><td>TDS Certificate Issuance</td><td>Form 16 (salary) and Form 16A (non-salary) generated and issued to employees and vendors via TRACES</td></tr>
                        <tr><td>TDS Challan Management</td><td>Monthly TDS deposit via Challan 281 by 7th of following month. Timely deposit to avoid interest</td></tr>
                        <tr><td>Annual Compliance</td><td>Lower deduction certificate applications, TDS on property (26QB), annual TDS reconciliation</td></tr>

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
            <h2 class="section-title">TAN Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA handles the complete TAN registration and TDS compliance setup online. No Income Tax office visit required.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine TDS Obligation and TAN Requirement</h3><p class="step-description">Your CA evaluates your Chennai business to identify TDS obligations: salary TDS (Section 192), contractor TDS (Section 194C), rent TDS (Section 194I), professional fees TDS (Section 194J). If any TDS obligation exists, TAN is mandatory. The CA also determines if multiple TANs are needed for separate Chennai branches.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS Assessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sections Identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Obligation Mapped</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Prepare Documents and Identify Authorised Signatory</h3><p class="step-description">Documents compiled: PAN card of the entity, Aadhaar and PAN of the authorised signatory (director/partner/trustee), business registration proof, and Chennai address proof (TNEB bill + rent agreement). The authorised signatory who will sign all TDS returns and challans is identified.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Documents Ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Signatory Identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="60" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="30" y="45" width="60" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><circle cx="60" cy="88" r="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M57 88l3 3 5-5" stroke="#25D366" stroke-width="2"/></svg></div><span class="illustration-label">Docs Verified</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Form 49B on Protean (NSDL) Portal</h3><p class="step-description">Patron's CA accesses the Protean portal and selects Online Application for TAN (Form 49B). The form captures entity category, name, Chennai address, PAN, and contact details. Government fee of Rs 77 paid online. A 14-digit acknowledgment number is generated for tracking.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 49B Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rs 77 Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="40" width="50" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><rect x="35" y="75" width="50" height="15" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="86" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 77</text></svg></div><span class="illustration-label">Application Submitted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Verification and TAN Allotment</h3><p class="step-description">Protean verifies the Form 49B application and processes TAN allotment. The 10-digit TAN is allotted within 7-10 working days. TAN certificate dispatched to your Chennai address. Patron tracks status using the acknowledgment number.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TAN Allotted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Dispatched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M52 37l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="72" width="60" height="18" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="60" y="84" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CHE-X-12345-A</text></svg></div><span class="illustration-label">TAN Issued</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Register on TRACES Portal</h3><p class="step-description">With TAN allotted, Patron registers your entity on the TRACES portal (tdscpc.gov.in). TRACES enables: filing quarterly TDS returns (24Q, 26Q, 27Q), downloading Form 16/16A certificates, viewing TDS credit statements (26AS), and managing compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRACES Active</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Returns Enabled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TRACES</text><rect x="30" y="38" width="60" height="6" rx="3" fill="#F5A623"/><rect x="30" y="50" width="40" height="6" rx="3" fill="#25D366"/><circle cx="90" cy="75" r="15" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M84 75l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Portal Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Set Up TDS Compliance Calendar</h3><p class="step-description">Patron establishes: monthly TDS deposit via Challan 281 by 7th of following month, quarterly TDS return filing (24Q/26Q/27Q by 15th of month following quarter), Form 16 issuance by 15th June, Form 16A within 15 days of quarterly return, and annual TDS reconciliation with 26AS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Calendar Set</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Penalties Avoided</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="30" x2="85" y2="30" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="35" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="35" y1="54" x2="85" y2="54" stroke="#14365F" stroke-width="1" opacity="0.2"/><circle cx="42" cy="36" r="4" fill="#F5A623"/><circle cx="60" cy="48" r="4" fill="#25D366"/><circle cx="78" cy="24" r="4" fill="#E8712C"/></svg></div><span class="illustration-label">Compliance Active</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for TAN Registration in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card of Entity:</strong> Company/LLP/Firm/Trust PAN. Individual PAN if sole proprietor deducting TDS.</li><li><strong>Aadhaar of Authorised Signatory:</strong> Director/partner/trustee authorised to sign TDS returns.</li><li><strong>Business Registration Proof:</strong> Certificate of Incorporation, LLP Agreement, Partnership Deed, Trust Deed, or Society Registration Certificate.</li><li><strong>Address Proof of Chennai Premises:</strong> TNEB electricity bill, rent agreement, or property deed for the registered/branch office.</li><li><strong>Passport-Size Photograph:</strong> Of the authorised signatory.</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> Chennai companies with multiple offices (e.g., OMR for IT operations and Ambattur for manufacturing) can apply for separate TANs for each branch if TDS is deducted and deposited separately. Patron advises on single vs multiple TAN strategy based on your payroll and vendor payment structure.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common TAN Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>TAN Not Obtained Before First Salary</td><td>Cannot deposit TDS, file returns, or issue Form 16</td><td>Recommends TAN application during company incorporation itself</td></tr>
                        <tr><td>Quarterly TDS Return Filing Missed</td><td>Rs 200/day penalty under Section 234E (capped at total TDS amount)</td><td>Files all quarterly returns (24Q/26Q/27Q) within due dates</td></tr>
                        <tr><td>TDS Not Deposited by 7th</td><td>Interest at 1.5%/month under Section 201(1A)</td><td>Sets up automated deposit reminders and challan management</td></tr>
                        <tr><td>TAN vs PAN Confusion</td><td>Business owners confuse the two; both needed but different purposes</td><td>Clarifies both and handles applications sequentially</td></tr>
                        <tr><td>Property TDS (194IA) Not Filed</td><td>Interest and penalty for Chennai property above Rs 50 lakh without 26QB</td><td>Manages property TDS compliance for Chennai real estate transactions</td></tr>

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
            <h2 class="section-title">TAN Registration Fees in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (TAN - Form 49B)</td><td>Rs 77 (Rs 65 + 18% GST)</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 499 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>TAN + TRACES Registration</td><td>Rs 1,499</td></tr>
                        <tr><td>TAN + First Quarter TDS Return</td><td>Rs 2,999</td></tr>
                        <tr><td>TAN + Annual TDS Return Filing (4 quarters)</td><td>Rs 7,999-14,999</td></tr>
                        <tr><td>TAN + Payroll TDS + Vendor TDS + Returns</td><td>Rs 14,999-24,999/year</td></tr>
                        <tr><td>TAN Correction/Change</td><td>Rs 999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free TAN Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Chennai.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Collection</td><td>1-2 days</td></tr><tr><td>Form 49B Filing</td><td>Same day</td></tr><tr><td>Protean Processing</td><td>7-10 working days</td></tr><tr><td>TRACES Registration</td><td>1-2 days</td></tr><tr><td>First TDS Deposit Setup</td><td>1-2 days</td></tr><tr><td><strong>Total</strong></td><td><strong>7-10 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Processing Note (Group B):</strong> The entire TAN registration is online on the Protean portal. No visit to any Income Tax office or TIN-FC required. TAN certificate dispatched by post. Patron handles all filing and TRACES registration digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for TAN Registration in Chennai?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>CA-Led TDS Lifecycle Management</h3><p>TAN + quarterly returns (24Q/26Q/27Q) + challan deposits + Form 16/16A issuance + TRACES management. Registration portals deliver TAN and disappear.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-branch companies with TDS across states get centralised compliance management.</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Chennai TDS Expertise</h3><p>Familiar with OMR salary TDS computation, Ambattur contractor TDS, Anna Salai rent TDS, and Chennai property TDS (Section 194IA).</p></article>
            <article class="feature-card"><div class="feature-icon" style="background:var(--orange-light);"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Payroll Integration</h3><p>TAN linked to payroll services. Salary TDS computed monthly per employee slabs, deposited via Challan 281, reported in quarterly 24Q - all from one CA team.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;"><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div><div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div></div><p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai through a digital-first CA team. We combine TAN registration with quarterly TDS returns, challan management, Form 16/16A issuance, and payroll integration from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">TAN vs PAN: Key Differences</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>TAN</th><th>PAN</th></tr></thead>
                    <tbody>
                        <tr><td>Full Form</td><td>Tax Deduction and Collection Account Number</td><td>Permanent Account Number</td></tr><tr><td>Purpose</td><td>Deducting/collecting tax at source (TDS/TCS)</td><td>Income tax identity for entity/individual</td></tr><tr><td>Mandatory For</td><td>All TDS/TCS deductors</td><td>All taxpayers, financial transactions</td></tr><tr><td>Format</td><td>10-digit (CHE-X-12345-A)</td><td>10-digit (AAAPL-1234-C)</td></tr><tr><td>Application Form</td><td>Form 49B</td><td>Form 93/94/95 (from April 2026)</td></tr><tr><td>Govt Fee</td><td>Rs 77</td><td>Rs 107 (physical card)</td></tr><tr><td>Used On</td><td>TDS challans, returns, certificates</td><td>ITR, bank KYC, property registration</td></tr><tr><td>Multiple Allowed</td><td>Yes (different branches)</td><td>No (one PAN per entity)</td></tr><tr><td>Chennai Example</td><td>IT company TAN for salary TDS on OMR</td><td>Same company's PAN for ITR filing</td></tr>

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
                
                <ul><li><a href="/tan-registration">TAN Registration in India</a> - Parent national service page</li><li><a href="/tds-return">TDS Returns</a> - Quarterly TDS return filing (24Q/26Q/27Q)</li><li><a href="/payroll-services">Payroll Services</a> - Salary TDS computation and compliance</li><li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - Tax compliance for entities</li><li><a href="/gst-registration">GST Registration</a> - GSTIN required alongside TAN for businesses</li><li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Company incorporation</li></ul>

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
                
                <ul><li>Income Tax Act, 1961 - Section 203A (TAN mandatory for TDS/TCS deductors)</li><li>Section 192 (TDS on salary), Section 194C (contractors), Section 194I (rent)</li><li>Section 194J (professional/technical fees), Section 194IA (property purchase above Rs 50 lakh)</li><li>Section 194H (commission/brokerage), Section 195 (NRI payments)</li><li>Section 272BB (penalty Rs 10,000 for failure to obtain TAN)</li><li>Section 234E (penalty Rs 200/day for late TDS return filing)</li><li>Section 201(1A) (interest 1.5%/month for late TDS deposit)</li></ul>
                <h3>Key Compliance Dates</h3><ul><li>TDS deposit: 7th of following month (30th April for March)</li><li>Q1 return (April-June): Due 15th July</li><li>Q2 return (July-September): Due 15th October</li><li>Q3 return (October-December): Due 15th January</li><li>Q4 return (January-March): Due 15th May</li><li>Form 16 to employees: By 15th June</li><li>Form 16A to deductees: Within 15 days of quarterly return filing</li></ul>
                <h3>Penalties</h3><ul><li>No TAN: Rs 10,000 under Section 272BB</li><li>Late TDS return: Rs 200/day under Section 234E (max = total TDS)</li><li>Late TDS deposit: Interest 1.5%/month under Section 201(1A)</li><li>TDS not deducted: Entity liable to pay TDS amount + interest</li></ul>
                <p><strong>Authority:</strong> TRACES - <a href="https://tdscpc.gov.in" target="_blank" rel="noopener">tdscpc.gov.in</a> | Protean TAN - <a href="https://tin.tin.nsdl.com/tan" target="_blank" rel="noopener">tin.tin.nsdl.com/tan</a> | Income Tax - <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: TAN Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about TAN registration in Chennai, covering Form 49B, TDS compliance, fees, and penalties.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'TAN Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who needs TAN registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Any entity deducting TDS needs TAN - companies paying salaries (Section 192), businesses paying contractors (194C), tenants paying rent above Rs 2.4 lakh/year (194I), entities paying professional fees above Rs 30,000 (194J), and property buyers for transactions above Rs 50 lakh (194IA).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I apply for TAN online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. Form 49B is filed online on the Protean (NSDL) portal at tin.tin.nsdl.com. Fee of Rs 77 paid online. TAN certificate dispatched to your Chennai address within 7-10 working days. No visit to any Income Tax office required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for TAN registration?</h3>
                        <div class="faq-expanded__a"><p>Government fee is Rs 65 plus 18% GST totalling Rs 77. One-time fee paid at Form 49B submission. Patron all-inclusive professional fee is Rs 499 covering filing, document preparation, allotment tracking, and TRACES setup.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does TAN registration take?</h3>
                        <div class="faq-expanded__a"><p>TAN allotment takes 7-10 working days from Form 49B submission. Document collection takes 1-2 days and filing is same day. After TAN allotment, TRACES registration takes 1-2 additional days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for not having TAN?</h3>
                        <div class="faq-expanded__a"><p>Rs 10,000 under Section 272BB. Additionally, without TAN you cannot file TDS returns - attracting Rs 200/day penalty under Section 234E. TDS deposited without quoting TAN is not credited properly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is TAN same as PAN?</h3>
                        <div class="faq-expanded__a"><p>No. PAN is for income tax identity - ITR filing, bank KYC. TAN is specifically for TDS/TCS operations - deducting tax, depositing with government, filing returns. A Chennai business needs both.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What TDS returns must I file after getting TAN?</h3>
                        <div class="faq-expanded__a"><p>Quarterly returns: 24Q (salary TDS) and 26Q (non-salary TDS). If NRI payments, also 27Q. Due by 15th of month following each quarter (July, October, January, May). Patron files all returns and issues Form 16/16A.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I have multiple TANs for different Chennai offices?</h3>
                        <div class="faq-expanded__a"><p>Yes. An entity can have different TANs for different branches if TDS is deducted and deposited separately. Each entity can only hold one TAN per branch. Patron advises on optimal TAN structure.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>TAN registration kya hai?</strong> TAN ek 10-digit number hai jo Income Tax Department deta hai TDS/TCS deduct karne wale entities ko. Form 49B se online apply hota hai, Rs 77 fees hai.</p><p><strong>TAN aur PAN mein kya fark hai?</strong> PAN income tax identity ke liye hai (ITR filing, bank KYC). TAN TDS deduct karne ke liye hai (salary, rent, contractor payments par tax katne ke liye).</p><p><strong>TDS return kab file karna hota hai?</strong> Har quarter mein - 15 July, 15 October, 15 January, 15 May. Late filing par Rs 200/din penalty lagti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your TAN Registration in Chennai</h2>
            <div class="content-text">
                
                <p>Deducting TDS without TAN attracts Rs 10,000 penalty under Section 272BB. Not depositing TDS by the 7th triggers 1.5% monthly interest under Section 201(1A). Missing even one quarterly TDS return deadline attracts Rs 200/day under Section 234E. For a Chennai IT company with 50 employees, one missed quarter could mean Rs 18,000+ in penalties. TAN registration takes just 7-10 days and costs Rs 77. Get TAN before your first salary payment or contractor invoice.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get TAN Registration in Chennai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">TAN registration in Chennai is mandatory for every entity deducting TDS on salaries, contractor payments, rent, professional fees, and property purchases. Filed as Form 49B on the Protean portal with a Rs 77 fee, TAN enables legal TDS deduction, government deposit, quarterly return filing, and certificate issuance.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting serves Chennai businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles TAN registration, TRACES setup, quarterly TDS returns, challan management, and Form 16/16A issuance.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20TAN%20Registration%20in%20Chennai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20TAN%20Registration%20in%20Chennai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20TAN%20Registration%20in%20Chennai.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted TAN registration and TDS compliance services in major cities across India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                    <a href="/tan-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/tan-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/tan-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/tan-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/tan-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/tan-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
                    <a href="/tan-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div></div>
            <div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for TAN Registration in Chennai</div><div class="pa-cross-grid">
                    <a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/private-limited-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/llp-incorporation/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed bi-annually. TAN registration rules and TDS compliance requirements are subject to change via CBDT notifications. Freshness Tier 2.</p>
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
