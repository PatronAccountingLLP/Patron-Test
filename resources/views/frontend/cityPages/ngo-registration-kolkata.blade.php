@extends('layouts.service-app')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@section('meta')
    <title>NGO Registration in Kolkata – Trust, Society &amp; Section 8 Co.</title>
    <meta name="description" content="CA-assisted NGO registration in Kolkata. Trust, Society (WB Act 1961), Section 8 Company. 12A, 80G, FCRA, CSR-1. Rs 4,999. Call +91 945 945 6700.">
    <link rel="canonical" href="/ngo-registration/kolkata">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO Registration in Kolkata – Trust, Society &amp; Section 8 Co.">
    <meta property="og:description" content="NGO registration Kolkata. Trust, Society, Section 8. 12A 80G FCRA. Rs 4,999. Call +91 945 945 6700.">
    <meta property="og:url" content="/ngo-registration/kolkata">
    <meta property="og:type" content="website"><meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "NGO Registration in Kolkata",
          "description": "CA-assisted NGO registration in Kolkata. Trust, Society (WB Act 1961), Section 8 Company. 12A, 80G, FCRA, CSR-1. Rs 4,999. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/ngo-registration/kolkata",
          "serviceType": "NGO Registration in Kolkata",
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
            "url": "https://www.patronaccounting.com/ngo-registration/kolkata",
            "price": "4999"
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
              "name": "NGO Registration",
              "item": "https://www.patronaccounting.com/ngo-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "NGO Kolkata",
              "item": "https://www.patronaccounting.com/ngo-registration/kolkata"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which office registers societies in Kolkata?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Registrar of Firms Societies and Non-Trading Corporations WB under WB Societies Registration Act 1961. Filed via e-District portal."
              }
            },
            {
              "@type": "Question",
              "name": "Can NGO be registered online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Society via WB e-District. Section 8 via MCA. Trust needs one Sub-Registrar visit. All preparation handled by CA online."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trust from Rs 4,999. Society Rs 150 govt fee plus CA fee. Section 8 Rs 15,000-35,000. 12A 80G Rs 3,000-5,000 each."
              }
            },
            {
              "@type": "Question",
              "name": "How long does it take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trust 10-15 days. Society 20-30 days. Section 8 15-30 days. 12A 80G 1-3 months additional."
              }
            },
            {
              "@type": "Question",
              "name": "How many members needed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Trust minimum 2. Society minimum 7 under WB Act. Section 8 minimum 2 directors plus 2 members."
              }
            },
            {
              "@type": "Question",
              "name": "Is 12A 80G mandatory?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "12A essential for tax exemption. 80G enables donor deductions. Both filed with CIT Kolkata. Valid 5 years."
              }
            },
            {
              "@type": "Question",
              "name": "Can foreigners join NGO?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes as members trustees or directors. FCRA registration needed if receiving foreign contributions."
              }
            },
            {
              "@type": "Question",
              "name": "What is CSR-1?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "MCA registration to receive corporate CSR funds under Section 135. Enables Kolkata NGOs to access Salt Lake IT company CSR."
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
                        NGO Registration in Kolkata: CA-Assisted Trust, Society, and Section 8 Company Setup
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents::</span> PAN, Aadhaar, MOA, Trust Deed, address proof</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees::</span> Starting Rs 4,999 | Timeline: 10-30 working days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility::</span> Min 2 trustees / 7 society members / 2 directors</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Compliance::</span> 12A/80G (IT Act), FCRA (foreign contributions), CSR-1 (CSR funds)</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'NGO Registration',
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
<a href="#what-section" class="toc-btn">What Is NGO Reg</a>
<a href="#who-section" class="toc-btn">Who Needs It</a>
<a href="#services-section" class="toc-btn">Services</a>
<a href="#procedure-section" class="toc-btn">Process</a>
<a href="#documents-section" class="toc-btn">Documents</a>
<a href="#challenges-section" class="toc-btn">Challenges</a>
<a href="#fees-section" class="toc-btn">Fees</a>
<a href="#timeline-section" class="toc-btn">Timeline</a>
<a href="#benefits-section" class="toc-btn">Why Patron</a>
<a href="#comparison-section" class="toc-btn">Trust vs Society</a>
<a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration in Kolkata: Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Registration Services at a Glance</strong></p>
                    <p>NGO registration in Kolkata establishes a non-profit as Trust, Society, or Section 8 Company. Trusts via Sub-Registrar Kolkata, societies via Registrar of Societies WB under WB Societies Registration Act 1961, Section 8 via RoC Kolkata Nizam Palace. Post-registration: 12A (tax exemption), 80G (donor deduction), FCRA (foreign contributions), CSR-1 (corporate CSR funds).</p>
                </div>
                <p>Kolkata has one of India's most active NGO ecosystems - education in South Kolkata and Jadavpur, healthcare near Salt Lake and EM Bypass, Sundarbans environmental conservation, and cultural preservation along College Street and Park Street. Learn more about <a href="/ngo-registration">NGO Registration across India</a>.</p>
                <p>The Registrar of Societies WB handles society registrations via e-District portal. Trust via Sub-Registrar. Section 8 via RoC Kolkata at Nizam Palace. A CA-managed service ensures correct structure, proper drafting, and timely 12A/80G/FCRA/CSR-1 filing. Same CA handles 12A/80G, <a href="/section8-company-registration/kolkata">Section 8</a>, and Society registration.</p>
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
                <h2 class="section-title">What Is NGO Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO registration is the legal process of establishing a non-governmental organisation as a Trust, Society, or Section 8 Company under the applicable Act, providing legal identity, tax exemption eligibility, and access to government/corporate funding.</p>
<p>Trusts under Indian Trusts Act 1882. Societies under WB Societies Registration Act 1961. Section 8 under Companies Act 2013. Post-registration: 12A for tax exemption, 80G for donor deduction, FCRA for foreign contributions, CSR-1 for corporate CSR funds.</p>
<p>For Kolkata: education NGOs in Jadavpur, healthcare near EM Bypass, Sundarbans environmental groups, Durga Puja cultural societies, and CSR implementation arms of Salt Lake IT companies all need registration with the correct structure and compliance setup.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Registration:</strong></p>
                    <ul>
<li><strong>Trust:</strong> Indian Trusts Act 1882. Min 2 trustees. Registered with Sub-Registrar Kolkata</li>
<li><strong>Society:</strong> WB Societies Registration Act 1961. Min 7 members. Registrar of Societies WB</li>
<li><strong>Section 8:</strong> Companies Act 2013. Min 2 directors + 2 members. RoC Kolkata Nizam Palace</li>
<li><strong>12A:</strong> Tax exemption for NGO income under IT Act. CIT Kolkata. 5-year validity</li>
<li><strong>80G:</strong> Donor tax deduction on donations. Requires 12A first. CIT Kolkata</li>
<li><strong>FCRA:</strong> Foreign Contribution Regulation Act 2010. Ministry of Home Affairs</li>
<li><strong>CSR-1:</strong> MCA registration for receiving corporate CSR funds (Section 135)</li>
<li><strong>e-District:</strong> WB government portal for society registration (wbedistrict.gov.in)</li>
</ul>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- NGO/Charitable illustration -->
                            <rect x="30" y="35" width="140" height="95" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Heart/hands -->
                            <path d="M100 55C100 47 92 44 88 48C84 44 76 47 76 55C76 65 88 75 88 75C88 75 100 65 100 55Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <!-- People -->
                            <circle cx="55" cy="60" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <circle cx="120" cy="60" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                            <!-- Document -->
                            <rect x="65" y="80" width="70" height="25" rx="4" fill="#fff" stroke="#14365F" stroke-width="1"/>
                            <text x="100" y="92" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">12A + 80G</text>
                            <text x="100" y="101" font-size="4" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">FCRA + CSR-1</text>
                            <!-- Tag -->
                            <rect x="30" y="112" width="55" height="14" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="57" y="122" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRUST|SOCIETY|S8</text>
                            <!-- Label -->
                            <text x="100" y="150" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>12A + 80G + FCRA</span>
                        <strong>NGO Registration</strong>
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
            <h2 class="section-title">Who Needs NGO Registration in Kolkata?</h2>
            <div class="content-text">
                
                <p><strong>Education NGOs (South Kolkata / Jadavpur):</strong> Schools, coaching, scholarship programmes. Trust or Society for simpler compliance. 80G for donor tax benefits.</p>
<p><strong>Healthcare NGOs (EM Bypass / Salt Lake):</strong> Free/subsidised medical services. Section 8 Company for CSR funding access from Sector V IT companies.</p>
<p><strong>Environmental Groups (Sundarbans / New Town):</strong> Mangrove conservation, river cleanup, urban greening. Society under WB Act for state government grants.</p>
<p><strong>Cultural Societies (College Street / Kumartuli):</strong> Temple maintenance, Durga Puja community events, Bengali arts. Society structure suits community participation with AGM governance.</p>
<p><strong>CSR Implementation Arms:</strong> Salt Lake and New Town corporates with Section 135 CSR obligations. Section 8 Company as dedicated CSR entity.</p>
<p><strong>NRI/Diaspora Charitable Activities:</strong> Trust or Section 8 to channel foreign contributions via FCRA-approved structures.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>Trust Deed drafting, WB stamp duty, Sub-Registrar filing. Min 2 trustees. Indian Trusts Act 1882</td></tr>
<tr><td>Society Registration (WB Act)</td><td>MOA + Bye-Laws per WB Act 1961. e-District portal filing. Min 7 members. Rs 150 govt fee</td></tr>
<tr><td>Section 8 Company</td><td>RUN name, DSC/DIN, MOA/AOA, Section 8 licence, SPICe+. RoC Kolkata Nizam Palace. Min 2 directors</td></tr>
<tr><td>12A Registration</td><td>Form 10A with CIT Kolkata. Tax exemption on NGO income. 5-year validity. Provisional at inception</td></tr>
<tr><td>80G Registration</td><td>Form 10G with CIT Kolkata. Donor tax deduction. Requires 12A first. 5-year validity</td></tr>
<tr><td>FCRA Registration</td><td>Ministry of Home Affairs. 3-year track record for regular. Prior permission for new NGOs</td></tr>
<tr><td>CSR-1 Registration</td><td>MCA portal registration for corporate CSR funds under Section 135</td></tr>
<tr><td>Annual Compliance</td><td>Society annual return (WB Act Section 17), Section 8 MGT-7/AOC-4, Trust ITR-7, 12A/80G renewal</td></tr>

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
            <h2 class="section-title">NGO Registration Process in Kolkata</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From structure selection to document drafting, filing, registration certificate, and 12A/80G compliance - here's how Patron registers your Kolkata NGO.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Choose NGO Structure</h3><p class="step-description">CA assesses objectives, member count, funding plans. Trust for small charitable groups. Society (WB Act) for 7+ members. Section 8 for large-scale with CSR/FCRA access.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Structure selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Funding aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRUST</text><text x="60" y="38" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SOCIETY</text><text x="60" y="50" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SECTION 8</text><text x="60" y="62" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SELECT</text></svg></div><span class="illustration-label">Structure Chosen</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Name Selection and Document Drafting</h3><p class="step-description">Trust Deed on WB stamp paper. Society MOA + Bye-Laws per WB Act format. Section 8 RUN name + MOA/AOA with non-profit objects. CA drafts all documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> WB compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">TRUST DEED</text><text x="60" y="38" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">MOA</text><text x="60" y="54" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">BYE-LAWS</text><text x="60" y="68" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">DRAFTED</text></svg></div><span class="illustration-label">Documents Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">DSC/DIN (Section 8) or Stamp Paper (Trust)</h3><p class="step-description">Section 8: DSC and DIN for directors. Trust: stamp paper per WB rates. Society: MOA on plain paper. CA handles procurement and calculation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Prerequisites ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Stamp duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">DSC</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">STAMP</text><text x="60" y="56" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">WB RATES</text></svg></div><span class="illustration-label">Filing Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Registration Application</h3><p class="step-description">Trust: Sub-Registrar Kolkata with witnesses. Society: e-District portal (wbedistrict.gov.in), Rs 150. Section 8: SPICe+ via MCA with Section 8 licence. CA handles all filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Application filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Authority mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">e-DISTRICT</text><text x="60" y="42" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">MCA</text><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Registration Certificate</h3><p class="step-description">Trust: registered Trust Deed in 10-15 days. Society: Certificate from Registrar WB in 20-30 days. Section 8: COI with PAN/TAN from RoC Kolkata in 15-30 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> NGO registered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CERTIFICATE</text><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial, sans-serif">REGISTERED</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Registration: 12A, 80G, FCRA, CSR-1</h3><p class="step-description">12A (Form 10A) and 80G (Form 10G) filed with CIT Kolkata. FCRA if foreign funding planned. CSR-1 for corporate CSR access. PAN/TAN obtained. Annual compliance calendar set.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 12A/80G filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Donor-ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="26" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">12A ✓</text><text x="60" y="38" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80G ✓</text><text x="60" y="50" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FCRA ✓</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CSR-1 ✓</text></svg></div><span class="illustration-label">Fully Compliant</span><span class="step-number-large">06</span></div></div></div>


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
<li><strong>PAN and Aadhaar:</strong> Of all trustees/members/directors</li>
<li><strong>Photographs:</strong> Passport-size of all members</li>
<li><strong>Address Proof:</strong> Passport/Voter ID of members</li>
<li><strong>Registered Office Proof:</strong> Utility bill + NOC/rent agreement for Kolkata address</li>
<li><strong>Trust Deed / MOA / AOA:</strong> Drafted by CA based on NGO type and objectives</li>
<li><strong>Stamp Paper (Trust):</strong> Non-judicial stamp paper per WB stamp duty rates</li>
</ul>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Kolkata-Specific Tip:</strong> Societies under WB Act 1961 require minimum 7 members - a common confusion with the central Act (which also needs 7 but through a different process). Ensure filing is through the WB e-District portal, not the central registrar. Patron's CA files under the correct WB Act.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Trust vs Society vs Section 8 Confusion</td><td>Founders unsure which structure fits objectives and funding</td><td>CA assesses objectives, members, funding to recommend optimal structure</td></tr>
<tr><td>WB Act vs Central Act Confusion</td><td>Online platforms guide to central Act instead of WB Societies Act 1961</td><td>Patron files under correct WB Act via e-District portal</td></tr>
<tr><td>Trust Deed Stamp Duty</td><td>Underestimated WB stamp duty causes Sub-Registrar rejection</td><td>CA calculates exact WB stamp duty and procures correct denomination</td></tr>
<tr><td>Delayed 12A/80G Approval</td><td>Incomplete Form 10A/10G or unclear charitable objects</td><td>CA prepares complete application with all annexures. Follows up with CIT Kolkata</td></tr>
<tr><td>FCRA for New NGOs</td><td>3-year track record needed for regular registration</td><td>CA advises prior permission route for new NGOs receiving foreign funding</td></tr>

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
            <h2 class="section-title">NGO Registration Fees in Kolkata</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Trust Registration</td><td>Sub-Registrar fee (varies) + WB stamp duty + Patron Rs 4,999-10,000</td></tr>
<tr><td>Society Registration (WB Act)</td><td>Rs 150 govt fee + Patron Rs 4,999-10,000</td></tr>
<tr><td>Section 8 Company</td><td>MCA fees Rs 500-5,000 + DSC + Patron Rs 10,000-20,000</td></tr>
<tr><td>12A Application</td><td>NIL govt fee + Patron Rs 3,000-5,000</td></tr>
<tr><td>80G Application</td><td>NIL govt fee + Patron Rs 3,000-5,000</td></tr>
<tr><td>Total (Trust/Society)</td><td>Rs 8,000-20,000 estimated</td></tr>
<tr><td>Total (Section 8)</td><td>Rs 15,000-35,000 estimated</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
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
                        <tr><td>Document Drafting</td><td>3-7 days (Trust Deed / MOA / AOA)</td></tr>
<tr><td>Trust Registration</td><td>10-15 working days (Sub-Registrar Kolkata)</td></tr>
<tr><td>Society Registration</td><td>20-30 working days (Registrar of Societies WB)</td></tr>
<tr><td>Section 8 Registration</td><td>15-30 working days (RoC Kolkata Nizam Palace)</td></tr>
<tr><td>12A Application</td><td>1-3 months (CIT Kolkata)</td></tr>
<tr><td>80G Application</td><td>1-3 months (CIT Kolkata, requires 12A first)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Kolkata Processing Note:</strong> Society registration via WB e-District is online. Section 8 via MCA is fully online. Trust requires one Sub-Registrar visit for deed execution. All preparation, drafting, and compliance handled remotely by Patron's CA team.</p>

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
            <h2 class="section-title">Why Choose Patron for NGO Registration in Kolkata?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Structure Advisory</h3><p>CA assesses your objectives, members, and funding to recommend Trust, Society, or Section 8. Not a one-size-fits-all approach.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>WB Jurisdictional Expertise</h3><p>WB Societies Act 1961 via e-District, Sub-Registrar Kolkata, RoC Nizam Palace, CIT Kolkata for 12A/80G. Local compliance, national platform.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>4-Office Authority</h3><p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state NGOs get coordinated registration and compliance.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>12A/80G/FCRA/CSR-1</h3><p>Post-registration compliance from Day 1. Tax exemption, donor benefits, foreign funding, and CSR access activated.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Kolkata NGOs</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</strong></p>
<blockquote style="border-left:4px solid var(--orange);padding:16px 20px;background:var(--orange-lighter);border-radius:0 var(--radius-md) var(--radius-md) 0;margin:20px 0;"><p style="font-style:italic;color:var(--text-primary);margin-bottom:8px;">"Patron registered our education trust in South Kolkata in 12 days. 12A and 80G filed immediately. Donors now get tax deduction. They also manage our annual compliance and audit."</p><p style="font-weight:700;color:var(--blue);margin:0;">- Education Trust, Jadavpur</p></blockquote>
<p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Kolkata through a digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trust vs Society vs Section 8 for Kolkata NGOs</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Trust</th><th>Society (WB Act)</th><th>Section 8 Company</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Indian Trusts Act, 1882</td><td>WB Societies Registration Act, 1961</td><td>Companies Act, 2013</td></tr>
<tr><td>Minimum Members</td><td>2 trustees</td><td>7 members</td><td>2 directors + 2 members</td></tr>
<tr><td>Governing Document</td><td>Trust Deed</td><td>MOA + Bye-Laws</td><td>MOA + AOA</td></tr>
<tr><td>Registration Authority</td><td>Sub-Registrar, Kolkata</td><td>Registrar of Societies, WB (e-District)</td><td>RoC Kolkata (MCA)</td></tr>
<tr><td>Amendment</td><td>Difficult (court intervention)</td><td>Possible via AGM resolution</td><td>Board/member resolution + RoC</td></tr>
<tr><td>Compliance Load</td><td>Low - ITR-7, audit if > Rs 2.5L</td><td>Medium - annual return, AGM, audit</td><td>High - AGM, MGT-7, AOC-4, ITR-7</td></tr>
<tr><td>FCRA Eligibility</td><td>Yes</td><td>Yes</td><td>Yes (preferred by MHA)</td></tr>
<tr><td>CSR Funding</td><td>Yes (with CSR-1)</td><td>Yes (with CSR-1)</td><td>Yes (preferred by corporates)</td></tr>

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
<li><a href="/ngo-registration">NGO Registration in India</a> - National NGO services</li>
<li>12A/80G Registration in Kolkata - Tax exemption</li>
<li><a href="/section8-company-registration/kolkata">Section 8 Company in Kolkata</a> - Non-profit incorporation</li>
<li>Society Registration in Kolkata - WB Societies Act</li>
<li><a href="/gst-registration/kolkata">GST Registration in Kolkata</a> - If applicable</li>
<li><a href="/accounting-services">Accounting Services</a> - NGO bookkeeping</li>
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
<li>Indian Trusts Act, 1882 (trusts)</li>
<li>WB Societies Registration Act, 1961 (societies in West Bengal)</li>
<li>Companies Act, 2013 Section 8 (non-profit companies)</li>
<li>IT Act 1961, Sections 12A, 80G (tax exemption)</li>
<li>FCRA 2010 (foreign contributions)</li>
<li>Companies Act Section 135 + CSR Rules (CSR funding)</li>
</ul>
<p><strong>Key Forms:</strong> Form 10A (12A) | Form 10G (80G) | ITR-7 | FC-3 (FCRA annual) | CSR-1 | MGT-7/AOC-4 (Section 8) | WB Form VI (society annual return)</p>
<p><strong>Authority:</strong> Sub-Registrar Kolkata (Trust) | Registrar of Societies WB (<a href="https://wbedistrict.gov.in" target="_blank" rel="noopener">e-District</a>) | RoC Kolkata Nizam Palace (Section 8) | CIT Kolkata (12A/80G)</p>

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
                    <h2 class="faq-expanded__title">FAQs - NGO Registration in Kolkata</h2>
                    <p class="faq-expanded__lead">Common questions about Trust, Society, Section 8, 12A/80G, FCRA, and CSR-1 for Kolkata NGOs.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'NGO Registration',
                        'city'     => 'Kolkata',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office registers societies in Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Registrar of Firms, Societies and Non-Trading Corporations, WB under WB Societies Registration Act, 1961. Applications filed through e-District portal (wbedistrict.gov.in). Patron handles complete filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can NGO be registered online from Kolkata?</h3>
                        <div class="faq-expanded__a"><p>Society via WB e-District and Section 8 via MCA are fully online. Trust requires one Sub-Registrar visit for deed execution. All preparation handled online by Patron's CA.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the NGO registration fee?</h3>
                        <div class="faq-expanded__a"><p>Trust from Rs 4,999 + stamp duty. Society Rs 150 govt + CA fee. Section 8 Rs 15,000-35,000. 12A and 80G Rs 3,000-5,000 each additional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does registration take?</h3>
                        <div class="faq-expanded__a"><p>Trust: 10-15 days. Society: 20-30 days. Section 8: 15-30 days. 12A/80G: 1-3 months additional from CIT Kolkata.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How many members needed?</h3>
                        <div class="faq-expanded__a"><p>Trust: 2 (1 settlor + 1 trustee). Society: 7 under WB Act 1961. Section 8: 2 directors + 2 members. CA advises based on your group size.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is 12A and 80G mandatory?</h3>
                        <div class="faq-expanded__a"><p>12A essential for tax exemption (without it, all income taxable). 80G enables donor tax deduction - critical for fundraising. Both filed with CIT Kolkata, valid 5 years.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can foreign nationals join a Kolkata NGO?</h3>
                        <div class="faq-expanded__a"><p>Yes as members, trustees, or directors. FCRA registration required if receiving foreign contributions. Prior permission route available for new NGOs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is CSR-1 registration?</h3>
                        <div class="faq-expanded__a"><p>MCA portal registration making NGO eligible for corporate CSR funds under Section 135. Enables access to Salt Lake IT company, Taratala manufacturing, and Dalhousie BFSI CSR budgets.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>NGO kya hota hai?</strong> Non-profit sansthan - Trust, Society, ya Section 8 Company ke roop mein register hota hai. Charitable, educational, healthcare activities ke liye.</p>
<p><strong>Kolkata mein NGO kaise register karein?</strong> Patron se call karein +91 945 945 6700. CA Trust Deed, Society MOA, ya Section 8 filing sab handle karta hai.</p>
<p><strong>Kitna time lagta hai?</strong> Trust 10-15 din, Society 20-30 din, Section 8 15-30 din. 12A/80G mein 1-3 mahine aur.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - Register Your NGO Today</h2>
            <div class="content-text">
                
                <p>12A and 80G must be filed promptly to ensure tax exemption from Year 1. Society annual returns are mandatory under WB Act. Section 8 late filings attract penalties. 12A/80G are now 5-year validity and must be renewed. Start early so your Kolkata NGO is legally operational and donor-ready from Day 1.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with NGO Registration in Kolkata</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">NGO registration in Kolkata provides legal identity, tax exemption, and funding access for charitable, educational, healthcare, environmental, and cultural organisations across South Kolkata, Salt Lake, New Town, College Street, and beyond.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years. Digital-first NGO registration combining non-profit expertise with ongoing compliance support.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20registration%20in%20Kolkata.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Registration&body=Hello%20Patron%20Team%2C%0AI%20need%20NGO%20registration%20in%20Kolkata.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-assisted NGO registration in 8 cities. Select your city.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/ngo-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/ngo-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/ngo-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
<a href="/ngo-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
<a href="/ngo-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
<a href="/ngo-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
<a href="/ngo-registration/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
<div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services in Kolkata</div><div class="pa-block-sub">End-to-end NGO registration and compliance</div><div class="pa-cross-grid">
<a href="/section8-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/gst-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/income-tax-return/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Kolkata</div></div></a>
<a href="/private-limited-company-registration/kolkata" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Kolkata</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content covers NGO registration in Kolkata including Trust, Society (WB Act 1961), Section 8, 12A, 80G, FCRA, CSR-1, and annual compliance. Reviewed semi-annually. Freshness Tier 2.</p>
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
