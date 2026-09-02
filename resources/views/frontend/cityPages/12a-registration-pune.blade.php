
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>12A Registration in Pune - Form 10A & Tax Exemption</title>
    <meta name="description" content="CA-assisted 12A registration in Pune. Form 10A/10AB filing under Section 12AB. Trust, society, Section 8 NGOs. 80G, CSR-1 included. Call +91 945 945 6700.">
    <link rel="canonical" href="/12a-registration/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="12A Registration in Pune - Form 10A & Tax Exemption">
    <meta property="og:description" content="CA-assisted 12A registration in Pune. Form 10A/10AB filing under Section 12AB. Trust, society, Section 8 NGOs. 80G, CSR-1 included. Call +91 945 945 6700.">
    <meta property="og:url" content="/12a-registration/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="12A Registration in Pune - Form 10A & Tax Exemption">
    <meta name="twitter:description" content="CA-assisted 12A registration in Pune. Form 10A/10AB filing under Section 12AB. Trust, society, Section 8 NGOs. 80G, CSR-1 included. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "12A Registration in Pune - Form 10A & Tax Exemption",
      "description": "CA-assisted 12A registration in Pune. Form 10A/10AB filing under Section 12AB. Trust, society, Section 8 NGOs. 80G, CSR-1 included. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/12a-registration/pune",
      "serviceType": "12A Registration in Pune - Form 10A & Tax Exemption",
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
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock",
        "url": "https://www.patronaccounting.com/12a-registration/pune",
        "price": "7999"
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
          "name": "12A Registration for NGOs - Form 10A & Income Tax Exemption",
          "item": "https://www.patronaccounting.com/12a-registration"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "12A Registration in Pune - Form 10A & Tax Exemption",
          "item": "https://www.patronaccounting.com/12a-registration/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does 12A registration cost in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There is no government fee for 12A registration - the Income Tax Department does not charge for Form 10A or Form 10AB. Professional fees from Patron start at Rs 7,999 covering document preparation, Form 10A submission, and PCIT liaison. The 12A + 80G bundle costs Rs 11,999. Entity registration is charged separately if not yet registered."
          }
        },
        {
          "@type": "Question",
          "name": "How long does 12A registration take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For existing registered organisations, provisional 12A via Form 10A takes 15-30 days from filing. The PCIT (Exemptions), Pune must pass the order within 1 month. Form 10AB (renewal) takes up to 6 months. Total timeline for a new organisation (entity registration + 12A) is 30-60 days."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between 12A and 80G?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "12A registration (Section 12AB) provides income tax exemption to the organisation itself - it does not pay tax on income applied towards charitable purposes. 80G provides a tax deduction benefit to donors - individuals and companies can claim 50% of donation as deduction. Both filed via Form 10A and typically applied simultaneously."
          }
        },
        {
          "@type": "Question",
          "name": "Is 12A registration mandatory for all NGOs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Without 12A under Section 12AB, surplus income of any trust, society, or Section 8 company is taxed at normal rates regardless of charitable purpose. Additionally, donors cannot claim 80G deduction, and government grants and CSR funding require valid 12A certification."
          }
        },
        {
          "@type": "Question",
          "name": "What is the validity of 12A under Section 12AB?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "New organisations receive provisional registration for 3 years via Form 10A. Regular registration is 5 years via Form 10AB. From FY 2025-26, small trusts with income below Rs 5 crore receive 10-year validity upon renewal. Renewal application must be filed at least 6 months before expiry."
          }
        },
        {
          "@type": "Question",
          "name": "When is the 12A renewal deadline for 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Registrations revalidated in 2021 under Finance Act 2020 expire on 31 March 2026. Form 10AB for renewal was due by 30 September 2025 (6 months before expiry). Organisations that missed this deadline should file immediately. Patron's CA team prepares remedial applications with the PCIT (Exemptions), Pune."
          }
        },
        {
          "@type": "Question",
          "name": "Can a trust get 12A without 80G?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. 12A and 80G are separate registrations serving different purposes. A trust can hold 12A without 80G - its income is tax-exempt, but donors do not get deductions. However, both are recommended simultaneously. CSR donors under Section 135 require the receiving organisation to have both 12A and 80G."
          }
        },
        {
          "@type": "Question",
          "name": "Does a Pune trust need Charity Commissioner registration before 12A?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. In Maharashtra, all charitable and religious trusts must be registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950 before filing Form 10A. The certificate must be attached. The Joint Charity Commissioner, Pune is at 45/2, Dhole Patil Marg, Opp. Wadia College, Pune 411 001."
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
                        12A Registration in Pune: Income Tax Exemption for Trusts, Societies, and Section 8 Companies
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Trust deed/MOA, PAN of NGO, registration certificate, 3-year accounts, activity report</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 7,999 (all-inclusive: Form 10A filing + CA charges + 80G application)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Charitable trusts, registered societies, Section 8 companies with non-profit objectives</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Provisional registration (Form 10A) in 15-30 days | Renewal (Form 10AB) in 30-60 days</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2012A%20Registration%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%2012A%20registration%20in%20Pune.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2012A%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => '12A Registration in Pune',
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
    'ctaText'    => 'Patron has helped 10,000+ organisations with 12A registration, 80G compliance, and annual NGO filings. Pune non-profits trust us for CA-managed tax exemption with Maharashtra-specific expertise.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">12A vs 80G</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A Registration in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - 12A Registration in Pune Services at a Glance</strong></p>
                    <p>12A registration grants income tax exemption to charitable and religious organisations under Section 12AB of the Income Tax Act, 1961. In Pune, trusts registered under the Bombay Public Trusts Act 1950, societies under the Societies Registration Act 1860, and Section 8 companies must file Form 10A on the Income Tax e-Filing portal with the PCIT (Exemptions), Pune at Aaykar Bhavan, Sadhuwasvani Road. New organisations get provisional registration for 3 years; renewal via Form 10AB grants 5 years (or 10 years for small trusts with income below Rs 5 crore from FY 2025-26).</p>
                </div>
                <p>Pune's non-profit sector is anchored by legacy institutions like Deccan Education Society, Savitribai Phule Pune University's affiliated trusts, and hundreds of cultural, educational, sports, environmental, and religious organisations. Maharashtra adds a prerequisite layer: trusts must first register with the Joint Charity Commissioner under the Bombay PT Act 1950 before the IT Department accepts Form 10A. Learn more about <a href="/12a-registration">12A Registration across India</a>.</p>
                <p><strong style="color:#c0392b;">URGENT: Registrations revalidated in 2021 under Finance Act 2020 expire on 31 March 2026. If your NGO's 12A/12AB was renewed in 2021, Form 10AB was due by 30 September 2025. Contact Patron immediately for remedial filing.</strong> Patron Accounting handles the entire chain from our Pune office - entity registration, Charity Commissioner filing, Form 10A submission, PCIT coordination, and post-registration <a href="/80g-registration">80G</a> + CSR-1 + annual ITR-7 filing.</p>
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
                <h2 class="section-title">What Is 12A Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>12A registration is the process of registering a charitable or religious trust, society, or Section 8 company under Section 12AB of the Income Tax Act, 1961, by filing Form 10A with the Principal Commissioner of Income Tax (Exemptions) to claim income tax exemption on surplus income under Sections 11 and 12.</p>
                    <p>Without 12A, even a purely charitable organisation in Pune - running schools, hospitals, or environmental programmes - must pay income tax on its surplus. With 12A, income applied towards charitable purposes is exempt, provided conditions under Sections 11, 12, and 13 are met. The Finance Act 2020 replaced permanent registration with time-bound registration under Section 12AB (effective 1 April 2021). From FY 2025-26, small trusts with income below Rs 5 crore receive 10-year validity upon renewal.</p>
                    <p>In Maharashtra, trusts must first be registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950, and societies must complete dual registration (Societies Act + Bombay PT Act) before the <a href="https://incometaxindiaefiling.gov.in/" target="_blank" rel="noopener">Income Tax Department</a> will accept Form 10A. CA-managed 12A registration ensures founding documents align with Section 2(15) of the IT Act's definition of 'charitable purpose'.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for 12A Registration in Pune:</strong></p>
                    <p><strong>Section 12AB:</strong> New regime replacing 12A/12AA from 1 April 2021 with time-bound registration (3-year provisional, 5-10 year regular).</p>
                    <p><strong>Form 10A:</strong> Application for new/provisional registration - 3-year validity.</p>
                    <p><strong>Form 10AB:</strong> Renewal application - 5 years (10 years for income below Rs 5 crore from FY 2025-26). Filed 6 months before expiry.</p>
                    <p><strong>PCIT (Exemptions) Pune:</strong> Aaykar Bhavan, 12, Sadhuwasvani Road, Pune 411 001 - processes all 12A applications.</p>
                    <p><strong>Bombay Public Trusts Act 1950:</strong> Maharashtra prerequisite - Charity Commissioner registration mandatory before Form 10A.</p>
                    <p><strong>URN:</strong> 16-digit Unique Registration Number issued via Form 10AC (provisional) or Form 10AD (regular).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">12A Registration in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune NGO Hub</span>
                        <strong>12A Registered</strong>
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
            <h2 class="section-title">Who Needs 12A Registration in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Charitable Trusts:</strong> Trusts under Bombay PT Act 1950 - educational trusts running schools and colleges affiliated to SPPU, healthcare trusts, environmental trusts working on river conservation and tree plantation. Trust deed must specify objects under Section 2(15) of the IT Act.</p>
                <p><strong>Registered Societies:</strong> Under Societies Registration Act 1860 (Maharashtra) - cultural societies organising Ganesh festivals, sports societies at Balewadi and Deccan Gymkhana, professional associations, alumni networks. Societies need dual registration (Societies Act + Bombay PT Act). </p>
                <p><strong>Section 8 Companies:</strong> Registered with RoC Pune for non-profit purposes - large-scale NGOs, institutional CSR arms. Do not need Charity Commissioner registration but must have INC-12 licence.</p>
                <p><strong>Religious Trusts:</strong> Temples, gurudwaras, mosques, religious educational institutions in Pune. Income applied to religious purposes exempt under Section 11.</p>
                <p><strong>Expiring 12A/12AB Organisations:</strong> All registrations revalidated in 2021 expire 31 March 2026. Form 10AB was due by 30 September 2025. Immediate remedial filing needed. Also see <a href="/ngo-registration/pune">NGO Registration in Pune</a> for entity setup.</p>
                <p><strong>CSR-Funded NGOs:</strong> Over 200 companies in Hinjewadi IT Park, Kharadi, and Chakan are mandated to spend 2% on CSR - they can only fund organisations with valid 12A + 80G + CSR-1.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A Registration Services Included by Patron in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Entity Registration (if needed)</td><td>Trust (deed + Charity Commissioner under Bombay PT Act) / Society (dual registration: Societies Act + Bombay PT Act) / Section 8 (INC-12 + SPICe+ with RoC Pune)</td></tr>
                        <tr><td>Form 10A Filing (New/Provisional)</td><td>Complete preparation and filing on <a href="https://incometaxindiaefiling.gov.in/" target="_blank" rel="noopener">Income Tax e-Filing portal</a>. 3-year provisional registration under Section 12AB. Filed with PCIT (Exemptions), Pune</td></tr>
                        <tr><td>Form 10AB Filing (Renewal)</td><td>Regular registration (5 years, or 10 years for income below Rs 5 crore). Must be filed 6 months before expiry</td></tr>
                        <tr><td>80G Registration (Bundled)</td><td>Simultaneous Form 10A for 80G enabling donors to claim 50% tax deduction. Critical for CSR funding from Hinjewadi/Kharadi companies</td></tr>
                        <tr><td>CSR-1 + NGO Darpan</td><td>MCA portal filing for CSR implementing agency status + NITI Aayog NGO Darpan for government grant eligibility</td></tr>
                        <tr><td>PAN and TAN Application</td><td>PAN and TAN for the NGO if not already obtained - mandatory prerequisites for Form 10A</td></tr>
                        <tr><td>Annual ITR-7 Filing</td><td>Mandatory annual return for all 12A-registered organisations. Non-filing attracts penalty under Section 234F</td></tr>
                        <tr><td>Form 10B/10BB Audit</td><td>CA audit report - Form 10B (income above Rs 5 crore), Form 10BB (below Rs 5 crore). Mandatory for maintaining 12A</td></tr>
                        <tr><td>Form 10BD/10BE Donor Reporting</td><td>Statement of donations (Form 10BD) and Certificate (Form 10BE) - due 31 May each year. Rs 200/day penalty for non-filing</td></tr>

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
            <h2 class="section-title">12A Registration Process in Pune - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron manages the complete 12A registration chain - from Maharashtra entity registration to PCIT coordination and annual compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Complete Entity Registration (Maharashtra Prerequisite)</h3><p class="step-description">Before Form 10A, the organisation must be legally registered. Trusts: trust deed + Charity Commissioner registration at 45/2, Dhole Patil Marg, Pune under Bombay PT Act 1950. Societies: dual registration (Societies Act + Bombay PT Act). Section 8: INC-12 licence + SPICe+ with RoC Pune. Patron handles complete entity registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Entity Registered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Charity Comm. Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="35" cy="35" r="10" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="60" cy="35" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><circle cx="85" cy="35" r="10" fill="#E8EDF4" stroke="#14365F" stroke-width="1"/><line x1="35" y1="55" x2="85" y2="55" stroke="#10B981" stroke-width="2" stroke-dasharray="4,2"/></svg></div><span class="illustration-label">Prerequisite Met</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain PAN for the Organisation</h3><p class="step-description">If no PAN, Patron files Form 49A linked to trust deed/MOA and Pune registered office. PAN is mandatory for Form 10A. Parallel processing with document preparation to save time.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> PAN Applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Linked to Entity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="70" height="8" rx="4" fill="#E8EDF4"/><rect x="25" y="38" width="30" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="38" width="30" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/></svg></div><span class="illustration-label">PAN Ready</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Supporting Documents</h3><p class="step-description">CA team compiles: trust deed/MOA, registration certificates (including Charity Commissioner), existing 12A order (if renewal), 3-year accounts, audit reports, activity report with progress, trustee/governing body KYC, investment details, DARPAN details. All digitised per IT Department specs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Docs Compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Digitised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="90" cy="68" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M84 68L88 72L96 64" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Ready to File</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form 10A on Income Tax e-Filing Portal</h3><p class="step-description">Online filing on incometaxindiaefiling.gov.in verified with DSC or EVC. For new organisations, select provisional registration under Section 12AB(1)(ac)(vi). For conversion from old 12A/12AA, select conversion option. Portal generates acknowledgment number. Patron handles entire filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 10A Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Ack Generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35L57 40L68 29" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">PCIT (Exemptions), Pune Processes Application</h3><p class="step-description">PCIT at Aaykar Bhavan, 12, Sadhuwasvani Road, Pune 411 001 processes. May request additional documents, inquiry into genuineness, or clarification on objects. Patron responds within prescribed timeframe. Provisional order within 1 month; renewal within 6 months.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Queries Answered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Processing</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="39" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PCIT</text><path d="M40 72L60 62L80 72" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"/></svg></div><span class="illustration-label">Under Review</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive 12A Certificate and Set Up Compliance</h3><p class="step-description">PCIT issues Form 10AC (provisional) or 10AD (regular) with 16-digit URN. Patron immediately files 80G, CSR-1 on MCA portal, NGO Darpan. Annual compliance configured: ITR-7, Form 10B/10BB audit, Form 10BD/10BE donor reporting (by 31 May), renewal reminder (6 months before expiry).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> URN Issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="45" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="25" width="31" height="6" rx="2" fill="#10B981" opacity="0.4"/><rect x="22" y="36" width="31" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="22" y="47" width="31" height="6" rx="2" fill="#14365F" opacity="0.2"/><rect x="68" y="15" width="40" height="55" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><circle cx="88" cy="42" r="12" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M83 42L86 45L93 38" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">12A Registered</span><span class="step-number-large">06</span></div></div></div>
            

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for 12A Registration in Pune</h2>
            <div class="content-text">
                
                <ul><li>Self-certified copy of trust deed (trusts) / Registration Certificate + MOA (societies) / COI + MOA + AOA (Section 8)</li><li>Self-certified copy of Charity Commissioner registration certificate (mandatory for Maharashtra trusts and societies)</li><li>PAN Card of the organisation</li><li>Existing 12A/12AA/12AB registration order (if renewal/conversion)</li><li>Annual accounts (audited) for preceding 3 financial years (or since inception)</li><li>Audit report under Section 44AB for preceding 3 years (if business income)</li><li>Documents evidencing adoption or modification of objects</li><li>Notes on activities with progress report</li><li>List of trustees/governing body with full KYC (PAN + Aadhaar)</li><li>Details of investments and deposits</li><li>DARPAN registration details (if registered on ngodarpan.gov.in)</li><li>FCRA registration copy (if registered under FCRA 2010)</li><li>DSC or EVC credentials of authorised signatory</li></ul>
                <div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> For trusts under Bombay PT Act, the Charity Commissioner registration certificate is mandatory for Form 10A. If missing, PCIT (Exemptions), Pune will raise a deficiency query. For Maharashtra societies, BOTH the Societies Act certificate AND Charity Commissioner certificate must be attached. Patron ensures both are obtained before filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common 12A Registration Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Missing Charity Commissioner Registration</td><td>Most common rejection for Pune trusts/societies. Online services outside Maharashtra are unaware of Bombay PT Act prerequisite</td><td>Patron ensures Charity Commissioner registration is complete before Form 10A filing</td></tr>
                        <tr><td>Expired 12AB (March 2026 Deadline)</td><td>Registrations revalidated in 2021 expire 31 March 2026. Form 10AB was due by 30 Sept 2025. Loss of exemption from 1 April 2026</td><td>Remedial applications filed with PCIT (Exemptions), Pune for condonation of delay</td></tr>
                        <tr><td>Trust Deed Objects Mismatch</td><td>Objects don't match Section 2(15) IT Act definition. Vague or profit-making objects queried by PCIT</td><td>CS team reviews and recommends trust deed amendments before filing Form 10A</td></tr>
                        <tr><td>Non-Filing of Annual ITR-7</td><td>PCIT checks filing history during renewal. Gaps create compliance backlogs and potential refusal</td><td>Annual ITR-7 managed as part of 12A package. Zero filing gaps</td></tr>
                        <tr><td>Wrong Form (10A vs 10AB)</td><td>Form 10A for new/provisional/conversion. Form 10AB for renewal. Wrong form = rejection</td><td>Correct form selection based on entity status and registration history</td></tr>

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
            <h2 class="section-title">12A Registration Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>12A Registration (Government Fee)</td><td>NIL - no govt fee for Form 10A or 10AB</td></tr>
                        <tr><td>Patron 12A Registration (Provisional)</td><td>Rs 7,999 (Form 10A filing + document preparation + PCIT liaison)</td></tr>
                        <tr><td>12A + 80G Bundle</td><td>Rs 11,999 (both Form 10A filings + document preparation)</td></tr>
                        <tr><td>12A + 80G + CSR-1 + NGO Darpan</td><td>Rs 14,999 (complete NGO tax compliance setup)</td></tr>
                        <tr><td>12AB Renewal (Form 10AB)</td><td>Rs 9,999 (renewal + 3-year accounts + PCIT liaison)</td></tr>
                        <tr><td>Annual ITR-7 Filing</td><td>Rs 4,999/year</td></tr>
                        <tr><td>Form 10B/10BB Audit Report</td><td>Rs 4,999/year</td></tr>
                        <tr><td>Form 10BD/10BE Donor Reporting</td><td>Rs 2,999/year (due 31 May)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free 12A Registration in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2012A%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A Registration Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Entity Registration (if needed)</td><td>15-30 days</td></tr><tr><td>PAN Application (if needed)</td><td>7-10 days</td></tr><tr><td>Document Preparation</td><td>3-5 days</td></tr><tr><td>Form 10A/10AB Filing</td><td>1-2 days</td></tr><tr><td>PCIT Processing (Provisional)</td><td>15-30 days</td></tr><tr><td>PCIT Processing (Renewal)</td><td>30-60 days</td></tr><tr><td><strong>Total (New Organisation)</strong></td><td><strong>30-60 days</strong></td></tr><tr><td><strong>Total (Existing Organisation)</strong></td><td><strong>15-30 days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>URGENT:</strong> Registrations revalidated in 2021 expire 31 March 2026. Form 10AB was due by 30 September 2025. Organisations that missed this deadline face loss of tax exemption from 1 April 2026. Contact Patron immediately for remedial filing with PCIT (Exemptions), Pune. Non-filing of ITR-7: penalty under Section 234F. Non-filing of Form 10BD/10BE: Rs 200/day under Section 271K.</p>

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
            <h2 class="section-title">Why Choose Patron for 12A Registration in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office with PCIT Access</h3><p class="feature-desc">RTC Silver, Wagholi - within reach of PCIT (Exemptions) at Aaykar Bhavan and Joint Charity Commissioner at Dhole Patil Marg. Direct experience with PCIT documentation expectations and query patterns.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Maharashtra Prerequisite Handled</h3><p class="feature-desc">Unlike online portals that file Form 10A without Bombay PT Act registration, Patron delivers complete entity setup: Charity Commissioner + 12A + 80G + CSR-1 as a single engagement.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Complete Annual Compliance</h3><p class="feature-desc">ITR-7, Form 10B/10BB audit, Form 10BD/10BE donor reporting, and renewal tracking included. Zero tax exemption lapses. Renewal filed 6 months before expiry.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:24px;height:24px;color:var(--orange);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Track Record</h3><p class="feature-desc">10,000+ businesses served. 4.9 Google rating. 50,000+ documents filed. 15+ years. Direct experience with PCIT (Exemptions), Pune processing requirements.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by NGOs Across Pune</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</p><p><strong>Trusted by Hyundai, Asian Paints, Bridgestone and businesses across India.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">12A vs 80G vs 10(23C) - Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>12A (Section 12AB)</th><th>80G</th><th>10(23C)</th></tr></thead>
                    <tbody>
                        <tr><td>Purpose</td><td>Income tax exemption for the NGO</td><td>Tax deduction for donors (50%)</td><td>Exemption for educational/hospital institutions</td></tr>
                        <tr><td>Beneficiary</td><td>The NGO/trust/society</td><td>Donors to the NGO</td><td>Specified educational/medical institutions</td></tr>
                        <tr><td>Form</td><td>Form 10A (new) / 10AB (renewal)</td><td>Form 10A (new) / 10AB (renewal)</td><td>Form 10A / Form 10AB</td></tr>
                        <tr><td>Authority</td><td>PCIT (Exemptions), Pune</td><td>PCIT (Exemptions), Pune</td><td>PCIT (Exemptions), Pune</td></tr>
                        <tr><td>Validity</td><td>3 years (prov.) / 5-10 years (regular)</td><td>3 years (prov.) / 5 years (regular)</td><td>3 years / 5 years</td></tr>
                        <tr><td>Can Hold Both?</td><td>Yes (with 80G)</td><td>Yes (with 12A)</td><td>No - cannot hold 12A and 10(23C) simultaneously</td></tr>
                        <tr><td>Best For Pune</td><td>All charitable/religious organisations</td><td>All organisations accepting donations</td><td>Universities, hospitals with income above Rs 5 Cr</td></tr>

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
                
                <p>Patron offers comprehensive NGO registration and compliance in Pune:</p><ul>
                    <li><a href="/12a-registration">12A Registration in India</a> - National 12A services</li>
                    <li><a href="/80g-registration">80G Registration</a> - Donor tax deduction (bundled with 12A)</li>
                    <li><a href="/ngo-registration/pune">NGO Registration in Pune</a> - Trust, Society, Section 8 setup</li>
                    <li>Society Registration in Pune - Societies Act + Bombay PT Act</li>
                    <li><a href="#">Trust Registration</a> - Trust deed + Charity Commissioner</li>
                    <li><a href="/fcra-registration">FCRA Registration</a> - Foreign donation compliance</li>
                    <li><a href="/income-tax-return">Income Tax Return</a> - ITR-7 for non-profits</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Form 10B/10BB</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for 12A Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul>
                    <li>Income Tax Act, 1961 - Section 12AB, 11, 12, 13, 2(15)</li>
                    <li>Finance Act, 2020 - Section 12AB regime (3-year provisional, 5-year regular)</li>
                    <li>Finance Act, 2025 - Extended 10-year validity for small trusts (income below Rs 5 crore)</li>
                    <li>Bombay Public Trusts Act, 1950 - Maharashtra prerequisite for trusts and societies</li>
                    <li>Societies Registration Act, 1860 - Prerequisite for societies (dual registration in Maharashtra)</li></ul>
                <p><strong>Key Portals:</strong></p><ul>
                    <li><a href="https://incometaxindiaefiling.gov.in/" target="_blank" rel="noopener">Income Tax e-Filing</a> - Form 10A, Form 10AB, ITR-7</li>
                    <li><a href="https://charity.maharashtra.gov.in/" target="_blank" rel="noopener">Charity Commissioner Maharashtra</a></li>
                    <li><a href="https://ngodarpan.gov.in/" target="_blank" rel="noopener">NGO Darpan</a> - ngodarpan.gov.in</li></ul>
                <p><strong>Penalties:</strong></p><ul>
                    <li>Non-filing of ITR-7: Penalty under Section 234F (up to Rs 10,000/year)</li>
                    <li>Non-filing of Form 10BD/10BE: Rs 200/day under Section 271K</li>
                    <li>Operating without 12A: Entire income taxed at normal rates</li></ul>

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
                    <h2 class="faq-expanded__title">FAQs - 12A Registration in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to common questions about 12A registration in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => '12A Registration in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How much does 12A registration cost in Pune?</h3>
                        <div class="faq-expanded__a"><p>There is no government fee for 12A registration - the Income Tax Department does not charge for Form 10A or Form 10AB. Professional fees from Patron start at Rs 7,999 covering document preparation, Form 10A submission, and PCIT liaison. The 12A + 80G bundle costs Rs 11,999. Entity registration is charged separately if not yet registered.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How long does 12A registration take in Pune?</h3>
                        <div class="faq-expanded__a"><p>For existing registered organisations, provisional 12A via Form 10A takes 15-30 days from filing. The PCIT (Exemptions), Pune must pass the order within 1 month. Form 10AB (renewal) takes up to 6 months. Total timeline for a new organisation (entity registration + 12A) is 30-60 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between 12A and 80G?</h3>
                        <div class="faq-expanded__a"><p>12A registration (Section 12AB) provides income tax exemption to the organisation itself - it does not pay tax on income applied towards charitable purposes. 80G provides a tax deduction benefit to donors - individuals and companies can claim 50% of donation as deduction. Both filed via Form 10A and typically applied simultaneously.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is 12A registration mandatory for all NGOs?</h3>
                        <div class="faq-expanded__a"><p>Yes. Without 12A under Section 12AB, surplus income of any trust, society, or Section 8 company is taxed at normal rates regardless of charitable purpose. Additionally, donors cannot claim 80G deduction, and government grants and CSR funding require valid 12A certification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the validity of 12A under Section 12AB?</h3>
                        <div class="faq-expanded__a"><p>New organisations receive provisional registration for 3 years via Form 10A. Regular registration is 5 years via Form 10AB. From FY 2025-26, small trusts with income below Rs 5 crore receive 10-year validity upon renewal. Renewal application must be filed at least 6 months before expiry.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When is the 12A renewal deadline for 2026?</h3>
                        <div class="faq-expanded__a"><p>Registrations revalidated in 2021 under Finance Act 2020 expire on 31 March 2026. Form 10AB for renewal was due by 30 September 2025 (6 months before expiry). Organisations that missed this deadline should file immediately. Patron's CA team prepares remedial applications with the PCIT (Exemptions), Pune.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a trust get 12A without 80G?</h3>
                        <div class="faq-expanded__a"><p>Yes. 12A and 80G are separate registrations serving different purposes. A trust can hold 12A without 80G - its income is tax-exempt, but donors do not get deductions. However, both are recommended simultaneously. CSR donors under Section 135 require the receiving organisation to have both 12A and 80G.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does a Pune trust need Charity Commissioner registration before 12A?</h3>
                        <div class="faq-expanded__a"><p>Yes. In Maharashtra, all charitable and religious trusts must be registered with the Joint Charity Commissioner under the Bombay Public Trusts Act 1950 before filing Form 10A. The certificate must be attached. The Joint Charity Commissioner, Pune is at 45/2, Dhole Patil Marg, Opp. Wadia College, Pune 411 001.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>12A registration ke liye government fees kitni hai?</strong> Zero. Income Tax Department koi fee nahi leta Form 10A ya Form 10AB ke liye. Sirf CA professional fees lagti hain.</p><p><strong>12A aur 80G mein kya fark hai?</strong> 12A se NGO ka income tax-free hota hai. 80G se donor ko tax deduction milti hai. Dono saath mein lena best hai.</p><p><strong>Maharashtra mein Charity Commissioner registration zaroori hai kya?</strong> Haan. Pune mein trust ya society ke liye Bombay PT Act ke under Charity Commissioner registration pehle hona chahiye, tabhi Form 10A file kar sakte hain.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your 12A Registration in Pune</h2>
            <div class="content-text">
                
                <p><strong style="color:#e74c3c;">URGENT:</strong> Registrations revalidated in 2021 expire 31 March 2026. Any Pune NGO that has not filed Form 10AB loses tax exemption from 1 April 2026. Without valid 12A, entire surplus becomes taxable, donors lose 80G, and CSR funding pipelines are disrupted. Over 200 companies in Hinjewadi, Kharadi, and Chakan can only fund organisations with valid 12A + 80G + CSR-1.</p><p><strong>File now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2012A%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get 12A Registration in Pune with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">12A registration in Pune provides income tax exemption to charitable trusts, registered societies, and Section 8 companies under Section 12AB. In Maharashtra, the Bombay PT Act 1950 registration with the Charity Commissioner is a mandatory prerequisite before filing Form 10A with the PCIT (Exemptions), Pune.</p><p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi serves educational trusts affiliated with SPPU, cultural and sports societies, healthcare and environmental NGOs, and Section 8 companies at Hinjewadi, Kharadi, and Magarpatta. With 10,000+ businesses served, a 4.9 Google rating, and direct PCIT experience, Patron delivers complete 12A registration with entity setup, 80G, CSR-1, and ongoing annual compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%2012A%20Registration%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%2012A%20Registration%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%2012A%20registration%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">12A Registration Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides 12A registration services across major cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/12a-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/12a-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/12a-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/12a-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/12a-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end NGO and business registration in Pune</div><div class="pa-cross-grid"><a href="/ngo-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to incorporate 12AB renewal deadlines, Finance Act amendments, Form 10A/10AB changes, and PCIT processing updates. Content accuracy is verified by CA &amp; CS Team, Patron Accounting LLP.</p>
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
