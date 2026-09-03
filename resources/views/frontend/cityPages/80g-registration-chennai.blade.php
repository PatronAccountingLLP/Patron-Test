
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>80G Registration in Chennai – Form 10A &amp; Donor Tax Deduction</title>
    <meta name="description" content="CA-assisted 80G registration in Chennai. Form 10A filing with CIT Exemptions Chennai for trusts, societies, Section 8 companies. Call +91 945 945 6700.">
    <link rel="canonical" href="/80g-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="80G Registration in Chennai – Form 10A &amp; Donor Tax Deduction">
    <meta property="og:description" content="CA-assisted 80G registration in Chennai. Form 10A filing with CIT Exemptions Chennai for trusts, societies, Section 8 companies. Call +91 945 945 6700.">
    <meta property="og:url" content="/80g-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="80G Registration in Chennai – Form 10A &amp; Donor Tax Deduction">
    <meta name="twitter:description" content="CA-assisted 80G registration in Chennai. Form 10A filing with CIT Exemptions Chennai for trusts, societies, Section 8 companies. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "80G Registration in Chennai",
          "description": "CA-assisted 80G registration in Chennai. Form 10A filing with CIT Exemptions Chennai for trusts, societies, Section 8 companies. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/80g-registration/chennai",
          "serviceType": "80G Registration in Chennai",
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
            "url": "https://www.patronaccounting.com/80g-registration/chennai",
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
              "name": "80G Registration",
              "item": "https://www.patronaccounting.com/80g-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "80G Registration in Chennai",
              "item": "https://www.patronaccounting.com/80g-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which office processes 80G registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "80G registration is processed by the Commissioner of Income Tax Exemptions Chennai. Form 10A is filed online on incometax.gov.in."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for 80G registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "There is no government fee. Professional charges range from Rs 4,999 to Rs 7,999 for standalone 80G. Combined 12A plus 80G costs Rs 8,999 to Rs 14,999."
              }
            },
            {
              "@type": "Question",
              "name": "How long does 80G registration take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Provisional 80G takes 20-40 working days. Regular 80G takes 30-60 working days including CIT Exemptions Chennai processing."
              }
            },
            {
              "@type": "Question",
              "name": "Is 12A required before 80G?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. 12A or 12AB registration is mandatory prerequisite. Without 12A the Form 10A for 80G will be rejected by CIT Exemptions Chennai."
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
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
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
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
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
                        80G Registration in Chennai: Enable Tax Deduction for Your Donors
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> NGO registration certificate, PAN, 12A certificate, audited accounts, activity report</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> 80G registration in Chennai starts from Rs 4,999 (no government fee)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Trusts, societies, Section 8 companies with 12A registration and charitable objects</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional 80G in 15-30 days | Regular 80G after 3 years of operation</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2080G%20Registration%20in%20Chennai&body=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => '80G Registration in Chennai',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration in Chennai: Overview and TL;DR</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 80G Registration in Chennai Services at a Glance</strong></p>
                    <p><p>80G registration under Section 80G of the Income Tax Act 1961 enables donors to your Chennai NGO to claim a 50% tax deduction on their donations. Filed via Form 10A on the Income Tax e-filing portal, 80G is processed by the Commissioner of Income Tax (Exemptions), Chennai. 12A registration is a prerequisite. New NGOs receive provisional 80G for 3 years; regular 80G is valid for 5 years.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Law</td><td>Income Tax Act, 1961 Section 80G</td></tr><tr><td>Processing Authority</td><td>Commissioner of Income Tax (Exemptions), Chennai</td></tr><tr><td>Application Form</td><td>Form 10A (filed online on incometax.gov.in)</td></tr><tr><td>Government Fee</td><td>NIL (no government fee)</td></tr><tr><td>Prerequisite</td><td>12A/12AB registration must be obtained first</td></tr><tr><td>Provisional 80G</td><td>Valid for 3 years</td></tr><tr><td>Regular 80G</td><td>Valid for 5 years (after provisional or re-registration)</td></tr><tr><td>Donor Benefit</td><td>50% tax deduction on donations under Section 80G</td></tr></tbody></table></div></p>
                </div>
                <p>Chennai's non-profit ecosystem includes thousands of trusts, societies, and Section 8 companies. The OMR IT Corridor hosts 1,200+ firms with mandatory CSR spending under Section 135 - creating a massive funding pipeline for registered NGOs. Most corporate and individual donors prefer 80G-registered organisations because it provides them a direct tax benefit. Learn more about 12A and 80G Registration across India.</p>
                <p>Without 80G registration, your Chennai NGO loses this critical donor incentive. A CA-managed 80G registration ensures your Form 10A is filed correctly with the Commissioner of Income Tax (Exemptions), Chennai, with activity descriptions precisely matching Section 2(15) of the Income Tax Act.</p>
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
                <h2 class="section-title">What Is 80G Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>80G registration is the process of obtaining approval under Section 80G of the Income Tax Act, 1961 from the Commissioner of Income Tax (Exemptions), enabling donors to claim a 50% tax deduction on donations made to the registered non-profit organisation.</p><p>When a donor contributes to an 80G-registered NGO, they can deduct 50% of the donated amount from their Gross Total Income. Under the Finance Act 2020 amendments, new NGOs receive provisional 80G for 3 years, followed by regular 80G for 5 years.</p><p>For Chennai NGOs, 80G is the gateway to corporate CSR funding. IT firms on OMR prioritise 80G-registered organisations because donations give both CSR compliance and tax deduction. For <a href="/ngo-registration">NGO Registration</a> options, see our dedicated page.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 80G Registration in Chennai:</strong></p>
                    <p><strong>80G Registration:</strong> Approval enabling donors to claim 50% tax deduction on donations under Section 80G of Income Tax Act.</p><p><strong>Form 10A:</strong> Online application filed on incometax.gov.in for 80G registration.</p><p><strong>CIT(E):</strong> Commissioner of Income Tax (Exemptions) - authority processing 80G applications for Chennai NGOs.</p><p><strong>NGO Darpan:</strong> NITI Aayog government directory of NGOs - registration required before filing Form 10A.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">80G Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Donor Tax Benefit</span>
                        <strong>80G Certificate</strong>
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
            <h2 class="section-title">Who Needs 80G Registration in Chennai?</h2>
            <div class="content-text">
                
                <p><strong>Educational Trusts and Foundations:</strong> Trusts running schools and scholarship programmes in Adyar, Kodambakkam, and Mylapore. 80G enables donors to claim tax deductions - increasing donation volume significantly.</p><p><strong>Healthcare and Medical NGOs:</strong> Organisations conducting free medical camps in Ambattur, Guindy, and Perungudi. 80G attracts CSR funding from pharmaceutical companies.</p><p><strong>Cultural Preservation Societies:</strong> Mylapore-based societies promoting Carnatic music and Bharatanatyam. Donors funding Margazhi festival claim 50% tax deduction.</p><p><strong>Environmental Conservation Bodies:</strong> Groups focused on Adyar River conservation and Pallikaranai marsh restoration. Auto manufacturers direct environmental CSR funding to 80G-registered organisations.</p><p><strong>Section 8 Companies Seeking CSR:</strong> <a href="/section8-company-registration">Section 8 companies</a> targeting CSR funding from OMR IT firms - 80G is often the deciding factor for corporate CSR committees.</p><p><strong>Social Welfare Groups:</strong> Organisations supporting self-help groups, child welfare, elderly care. HNIs in Chennai prefer 80G-registered NGOs for philanthropy.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Filing Assessment</td><td>CA verifies active 12A/12AB, PAN, audited accounts, and charitable objects qualifying under Section 2(15)</td></tr><tr><td>NGO Darpan Registration</td><td>Registration on NITI Aayog NGO Darpan portal (ngodarpan.gov.in) - completed within 3 working days</td></tr><tr><td>Form 10A Filing</td><td>Complete Form 10A with activity descriptions, financial projections, filed on incometax.gov.in with DSC</td></tr><tr><td>Activity Report Drafting</td><td>Detailed statement of charitable activities - the Commissioner reviews this for 80G eligibility</td></tr><tr><td>CIT(E) Chennai Coordination</td><td>Application tracking, query responses, and follow-up with Commissioner of IT (Exemptions) Chennai</td></tr><tr><td>80G Certificate Delivery</td><td>Provisional or regular 80G certificate delivered with donor receipt format guidance</td></tr><tr><td>Donor Receipt Template</td><td>80G-compliant donation receipt with NGO name, 80G number, PAN, donor details, amount, date</td></tr><tr><td>Annual Compliance</td><td>ITR-7 filing, audited accounts, activity report, 80G renewal tracking</td></tr>

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
            <h2 class="section-title">80G Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The entire 80G registration is filed online on incometax.gov.in. No physical visit to any Income Tax office is required. The 80G certificate is issued electronically.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify 12A/12AB Registration and NGO Eligibility</h3><p class="step-description">80G requires valid 12A/12AB as prerequisite. Your CA verifies active 12A certificate, valid PAN, and objects qualifying under Section 2(15) - education, medical relief, preservation of environment, and advancement of general public utility. If 12A is not yet obtained, Patron files 12A first.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>12A status verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 2(15) confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">12A</text><circle cx="60" cy="50" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M56 50l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Eligibility Confirmed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Complete NGO Darpan Registration on NITI Aayog Portal</h3><p class="step-description">Before filing Form 10A, the NGO must be registered on ngodarpan.gov.in - the government directory of all NGOs. Patron completes Darpan registration within 3 working days with your NGO details, bank information, and activity profile.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Darpan ID obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-day completion</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Darpan</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">NITI Aayog</text></svg></div><span class="illustration-label">Darpan Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare and File Form 10A on Income Tax Portal</h3><p class="step-description">Patron's CA prepares Form 10A with precise activity descriptions matching Section 2(15), financial projections, donor engagement plan, and charitable objects. Filed on incometax.gov.in with the digital signature of the authorised signatory. Application routed to CIT(E), Chennai.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Activity descriptions precise</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed with DSC</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="32" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 10A</text><line x1="30" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><text x="60" y="55" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">incometax.gov.in</text></svg></div><span class="illustration-label">Form 10A Filed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">CIT(E) Chennai Review and Query Response</h3><p class="step-description">The Commissioner of Income Tax (Exemptions), Chennai reviews the application, verifies charitable purpose, examines financial statements, and may request additional documents. Patron's CA handles all query responses within prescribed timelines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Timely query response</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Supporting docs provided</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CIT(E)</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Chennai</text></svg></div><span class="illustration-label">Queries Resolved</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive 80G Certificate</h3><p class="step-description">Upon approval, CIT(E) Chennai issues the 80G certificate - provisional (3 years for new NGOs) or regular (5 years for established NGOs). The certificate includes the 80G registration number used on all donor receipts.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>80G number issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital certificate</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="30" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80G</text><circle cx="60" cy="48" r="10" fill="#FFF" stroke="#25D366" stroke-width="1.5"/><path d="M55 48l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">80G Granted</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Set Up Donor Receipts and Annual Compliance</h3><p class="step-description">Patron provides 80G-compliant donation receipt template with NGO name, 80G number, PAN, donor details, and amount. Annual compliance calendar: ITR-7 filing, audited accounts, activity report, and 80G renewal tracking (6 months before expiry).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Receipt template provided</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Renewal tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9"/><rect x="55" y="20" width="25" height="40" rx="3" fill="#FFF3E0"/><text x="37" y="48" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Receipt</text><text x="67" y="45" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITR-7</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for 80G Registration in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>NGO Registration Certificate</strong> - trust registration, society certificate, or Section 8 COI</li><li><strong>12A/12AB Certificate</strong> - mandatory prerequisite for 80G</li><li><strong>PAN Card of NGO</strong> - required for Form 10A filing</li><li><strong>Audited Accounts (3 years)</strong> - or since inception for newer entities</li><li><strong>Bank Statements (3 years)</strong> - showing donation receipts and programme expenditure</li><li><strong>Activity Report</strong> - detailed charitable activities with beneficiary details</li><li><strong>Trust Deed / MOA / AOA</strong> - founding document with charitable objects</li><li><strong>Board of Trustees/Governing Body Details</strong> - names, addresses, PAN of all members</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> The CIT(E) Chennai scrutinises whether your NGO's actual activities match the charitable objects in your trust deed/MOA. Generic activity reports like "conducted social welfare activities" are insufficient. Patron's CA prepares detailed reports with specific programme names, beneficiary counts, and expenditure breakdowns.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common 80G Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>12A Not Obtained First</td><td>Form 10A for 80G rejected without valid 12A/12AB</td><td>CA verifies 12A status and files 12A first if missing</td></tr><tr><td>Vague Activity Descriptions</td><td>CIT(E) rejects applications with generic charitable descriptions</td><td>Detailed activity reports with programme names, beneficiaries, and expenditure</td></tr><tr><td>NGO Darpan Not Registered</td><td>Form 10A cannot be processed without Darpan ID</td><td>Darpan registration completed within 3 days as first step</td></tr><tr><td>Provisional to Regular Conversion Missed</td><td>NGOs assume provisional 80G (3 years) is permanent</td><td>Form 10AB filed within 6 months of activity commencement or before expiry</td></tr><tr><td>Objects Not Qualifying Under Section 2(15)</td><td>CIT(E) rejects if objects do not match charitable purpose definition</td><td>CA reviews and suggests MOA amendment before Form 10A filing</td></tr>

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
            <h2 class="section-title">80G Registration Fees in Chennai: 2026 Cost Breakdown</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>80G Registration (Standalone)</td><td>Rs 4,999 - 7,999 - Form 10A filing, activity report, CIT(E) follow-up (no govt fee)</td></tr><tr><td>12A + 80G Combined</td><td>Rs 8,999 - 14,999 - both registrations filed together for new NGOs</td></tr><tr><td>NGO Darpan Registration</td><td>Rs 999 - 1,999 - NITI Aayog portal registration (prerequisite)</td></tr><tr><td>80G Renewal (5-Year Cycle)</td><td>Rs 3,999 - 5,999 - Form 10AB filing before expiry</td></tr><tr><td>Provisional to Regular Conversion</td><td>Rs 4,999 - 7,999 - Form 10AB after 3 years of operation</td></tr><tr><td>Government Fee</td><td>NIL - no government fee for 80G application</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 80G Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">80G Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>12A Verification</td><td>1-2 days - CA confirms active 12A status</td></tr><tr><td>NGO Darpan Registration</td><td>2-3 days - NITI Aayog portal</td></tr><tr><td>Form 10A Preparation</td><td>3-5 days - activity report, financial statements, documents</td></tr><tr><td>Form 10A Filing</td><td>1 day - filed on incometax.gov.in with DSC</td></tr><tr><td>CIT(E) Chennai Processing</td><td>15-30 days (provisional) | 30-60 days (regular)</td></tr><tr><td>80G Certificate</td><td>Included above - issued digitally on IT portal</td></tr><tr><td>Total (Provisional)</td><td>20-40 working days for new Chennai NGOs</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>CSR Timing:</strong> Most Chennai corporates disburse CSR funds in Q3-Q4 (October-March). Starting 80G registration now ensures your NGO is certified before the next CSR funding cycle.</p>

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
            <h2 class="section-title">Why Choose Patron for 80G Registration in Chennai?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div><h3 class="feature-title">CA-Led Tax Expertise</h3><p class="feature-text">80G is a tax compliance process requiring Section 2(15) knowledge and CIT(E) processing expertise. Registration portals cannot provide this CA-level advisory.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4z"/></svg></div><h3 class="feature-title">CIT(E) Chennai Familiarity</h3><p class="feature-text">Your file is handled by a CA/expert familiar with the Commissioner of Income Tax (Exemptions), Chennai processing practices and documentation expectations.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">End-to-End NGO Lifecycle</h3><p class="feature-text">Patron manages NGO registration + 12A + 80G + ITR-7 + audit + renewal from one CA team. No handoffs between providers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">4-Office Pan-India Reach</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, Gurugram. NRI philanthropists establishing Chennai NGOs get coordinated 80G filing across time zones.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p><p><strong>4-Office Signal:</strong> Offices in Pune, Mumbai, Delhi, Gurugram serving Chennai NGOs through digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A vs 80G Registration: Understanding the Difference</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>12A/12AB Registration</th><th>80G Registration</th></tr></thead>
                    <tbody>
                        <tr><td>Purpose</td><td>Tax exemption for the NGO's income</td><td>Tax deduction for donors</td></tr><tr><td>Benefit To</td><td>The NGO itself - income not taxed</td><td>Donors - 50% deduction on donations</td></tr><tr><td>Prerequisite</td><td>NGO must be registered</td><td>12A must be obtained first</td></tr><tr><td>Section</td><td>Section 12A/12AB of IT Act</td><td>Section 80G of IT Act</td></tr><tr><td>Form</td><td>Form 10A</td><td>Form 10A (same form, different section)</td></tr><tr><td>Authority</td><td>CIT(E) Chennai</td><td>CIT(E) Chennai</td></tr><tr><td>Validity (Provisional)</td><td>5 years</td><td>3 years</td></tr><tr><td>Validity (Regular)</td><td>5 years</td><td>5 years</td></tr><tr><td>Filing Sequence</td><td>Filed first</td><td>Filed after 12A approval</td></tr>

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
            <h2 class="section-title">Related Services for Chennai NGOs</h2>
            <div class="content-text">
                
                <p>If you need 80G registration in Chennai, you may also benefit from:</p><ul><li><a href="/ngo-registration">NGO Registration</a> - trust, society, or Section 8 setup</li><li><a href="/income-tax-return">Income Tax Return Filing</a> - ITR-7 for NGOs</li><li><a href="/statutory-audit">Statutory Audit</a> - mandatory audit for qualifying NGOs</li><li><a href="/accounting-services">Accounting Services</a> - CA-managed accounting</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for 80G in Chennai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul><li>Income Tax Act, 1961 Section 80G (donor tax deduction)</li><li>Income Tax Act Section 12A/12AB (NGO income exemption - prerequisite)</li><li>Income Tax Act Section 2(15) (definition of charitable purpose)</li><li>Income Tax Rules Rule 17A (Form 10A filing procedure)</li><li>Finance Act, 2020 (provisional registration regime)</li><li>Finance Act, 2021 (re-registration requirement)</li></ul><p><strong>Key Compliance:</strong></p><ul><li>ITR-7 filing mandatory annually</li><li>Audited accounts required for regular 80G (3 years)</li><li>Provisional 80G: Convert to regular within 6 months of activity commencement or before 3-year expiry</li><li>Regular 80G: Renew every 5 years via Form 10AB</li><li>Donation receipts must include 80G number, validity, donor PAN (above Rs 50,000)</li></ul><p><strong>Penalties:</strong></p><ul><li>80G revocation: Donors cannot claim deductions</li><li>Non-filing of ITR-7: Rs 5,000 under Section 234F</li><li>Issuing false 80G receipts: Prosecution under IT Act</li></ul><p><strong>Authority:</strong> Commissioner of IT (Exemptions), Chennai | <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - 80G Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to common questions about 80G donor tax deduction registration, fees, validity, and compliance in Chennai.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '80G Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office processes 80G registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>80G registration is processed by the Commissioner of Income Tax (Exemptions), Chennai. Form 10A is filed online on incometax.gov.in. The CIT(E) reviews the application and issues the 80G certificate upon satisfaction. Patron's CA tracks the application and responds to all queries.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get 80G registration online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. The entire process is online. Form 10A is filed on the Income Tax portal using a Digital Signature Certificate. All documents are uploaded digitally. The 80G certificate is issued electronically. No physical visit to any office is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for 80G registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for 80G registration. Professional charges range from Rs 4,999 to Rs 7,999 for standalone 80G. Combined 12A + 80G costs Rs 8,999 to Rs 14,999. These include all documentation, filing, and approval tracking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does 80G registration take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Provisional 80G for new NGOs takes 20-40 working days. Regular 80G for established NGOs takes 30-60 working days. CIT(E) Chennai typically processes provisional applications faster.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is 12A required before 80G?</h3>
                        <div class="faq-expanded__a"><p>Yes. 12A/12AB registration is mandatory prerequisite. Without 12A, the Form 10A for 80G will be rejected by CIT(E) Chennai. Patron verifies 12A status and files 12A first if not obtained.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the validity of 80G registration?</h3>
                        <div class="faq-expanded__a"><p>Provisional 80G is valid for 3 years. Regular 80G (after 3 years of operation) is valid for 5 years. Renewal via Form 10AB must be filed 6 months before expiry.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a trust registered in Chennai get 80G?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any trust, society, or Section 8 company with charitable objects qualifying under Section 2(15), valid 12A, and no profit distribution can obtain 80G. Patron handles 80G for all Chennai NGO types.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How does 80G benefit Chennai corporate donors?</h3>
                        <div class="faq-expanded__a"><p>When a corporate donates to an 80G-registered NGO, they claim 50% of the donation as tax deduction under Section 80G. For OMR IT firms with Rs 50 lakh+ CSR budgets, this means Rs 25 lakh+ in tax savings - making 80G-registered NGOs the preferred choice.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>80G registration kya hai?</strong> 80G registration se donors ko 50% tax deduction milta hai jab wo aapke NGO ko donate karte hain. Income Tax Act Section 80G ke under hota hai.</p><p><strong>80G ke liye 12A zaruri hai kya?</strong> Haan. Pehle 12A registration lena padta hai, uske baad hi 80G ke liye apply kar sakte hain.</p><p><strong>80G mein government fee lagti hai kya?</strong> Nahi. 80G registration mein koi government fee nahi hai. Sirf professional charges lagte hain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Delay Your 80G Registration in Chennai</h2>
            <div class="content-text">
                
                <p>Without 80G registration, your Chennai NGO loses the most powerful donor incentive under Indian tax law. Corporate donors on OMR and individual philanthropists actively prefer 80G-registered organisations. Provisional 80G must be converted to regular within 6 months of commencing activities. Every month without 80G is a month of lost donations and reduced fundraising capacity.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to start your 80G registration today.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your 80G Registration in Chennai Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">80G registration in Chennai enables your NGO's donors to claim a 50% tax deduction - the single most effective fundraising tool available to Indian NGOs. Filed via Form 10A with the Commissioner of Income Tax (Exemptions), Chennai, 80G requires active 12A status and charitable objects qualifying under Section 2(15).</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting serves Chennai NGOs through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles Form 10A filing, CIT(E) coordination, donor receipt setup, and annual compliance.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2080G%20Registration%20in%20Chennai&body=Hello%2C%20I%20just%20visited%20your%2080G%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">80G Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert 80G donor tax deduction registration in 8 major cities</p>
    
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available Cities</div><div class="pa-block-sub">80G registration with local tax authority expertise</div><div class="pa-city-grid"><a href="/80g-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/80g-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/80g-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/80g-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for NGO donor compliance in Chennai</div><div class="pa-cross-grid"><a href="/section8-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Chennai</div></div><a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect changes in Income Tax Act amendments, Form 10A updates, 80G framework changes, and CIT(E) processing procedures. Next review: October 2026.</p>
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
