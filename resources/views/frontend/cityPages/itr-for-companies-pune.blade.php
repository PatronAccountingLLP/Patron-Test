

@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR Filing for Companies in Pune – ITR-6, MAT &amp; AMT</title>
    <meta name="description" content="CA-assisted ITR-6 filing for companies in Pune. Pvt Ltd, OPC, public company. 115BAA/115BAB regime, MAT, statutory audit, and transfer pricing. Serving Hinjewadi, MIDC, Baner. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-companies/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR Filing for Companies in Pune – ITR-6, MAT &amp; AMT">
    <meta property="og:description" content="CA-assisted ITR-6 filing for companies in Pune. Pvt Ltd, OPC, public company. 115BAA/115BAB regime, MAT, statutory audit, and transfer pricing. Serving Hinjewadi, MIDC, Baner. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-companies/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR Filing for Companies in Pune – ITR-6, MAT &amp; AMT">
    <meta name="twitter:description" content="CA-assisted ITR-6 filing for companies in Pune. Pvt Ltd, OPC, public company. 115BAA/115BAB regime, MAT, statutory audit, and transfer pricing. Serving Hinjewadi, MIDC, Baner. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Companies in Pune 2026 | ITR-6 Filing | Patron Accounting",
      "description": "CA-assisted ITR-6 filing for companies in Pune. Pvt Ltd, OPC, public company. 115BAA/115BAB regime, MAT, statutory audit, and transfer pricing. Serving Hinjewadi, MIDC, Baner. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-companies/pune",
      "serviceType": "ITR for Companies in Pune 2026 | ITR-6 Filing | Patron Accounting",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
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
        "url": "https://www.patronaccounting.com/itr-for-companies/pune"
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
          "name": "ITR For Companies",
          "item": "https://www.patronaccounting.com/itr-for-companies/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": []
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
                        ITR for Companies in Pune - File ITR-6 Accurately, Choose the Right Regime
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Audited financials, tax audit report, Form 26AS/AIS, GST returns, TDS certificates, board resolution</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> No government fee for filing | Professional fee Rs 10,000 - Rs 50,000 depending on turnover and complexity</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All companies registered under Companies Act - Pvt Ltd, OPC, public company, Section 8 (non-Sec 11)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> ITR-6 due: 31 October 2026 | Tax Audit: 30 September 2026 | Transfer Pricing: 30 November 2026</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Company%20ITR-6%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Companies in Pune',
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
    'ctaText'    => 'From IT companies to manufacturing units, Pune businesses trust Patron for company ITR and corporate tax compliance.',
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
            <a href="#what-section" class="toc-btn">What is ITR-6</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">Filing Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Deadlines</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Tax Regimes</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Companies in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Companies in Pune Services at a Glance</strong></p>
                    <p>Every company registered under the Companies Act in India - private limited, OPC, public limited, and Section 8 (except those claiming Section 11 exemption) - must file ITR-6 annually on incometax.gov.in, regardless of turnover or profitability. The due date is 31 October 2026 for FY 2025-26. Companies must choose their tax regime: 22% under Section 115BAA (file Form 10-IC), 15% under Section 115BAB for new manufacturing (file Form 10-ID), 25% for turnover up to Rs 400 crore, or 30% under the old regime with exemptions and deductions. Companies under 115BAA/115BAB are exempt from MAT. Even loss-making and dormant companies must file.</p>
                </div>
                <p>Pune is home to thousands of registered companies across every sector. The <strong>Hinjewadi-Kharadi IT corridor</strong> houses software companies ranging from bootstrapped startups to subsidiaries of Fortune 500 MNCs. <strong>MIDC Bhosari, Chakan, and Ranjangaon</strong> host manufacturing companies that may qualify for 15% tax under Section 115BAB. <strong>Baner and Kharadi</strong> are hubs for newly incorporated startups filing loss-making ITR-6 returns to carry forward losses. The <strong>Income Tax Office, Pune</strong> and <strong>CIT (Pune)</strong> jurisdiction administer ITR compliance. Learn more about <a href="/itr-for-companies">ITR for Companies across India</a>.</p>
                <p>Each company faces a critical annual decision: which tax regime to choose. The difference between 22% (115BAA) and 30% (old regime) can amount to lakhs or crores in tax. Filing ITR-6 with the correct regime selection, accurate financial disclosures, proper audit reports, and timely Form 10-IC/10-ID submission is essential. After ITR filing, companies benefit from Annual ROC Filing and <a href="/accounting-services">Accounting Services</a>.</p>
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
                <h2 class="section-title">What Is ITR for Companies (ITR-6)</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR-6 is the income tax return form prescribed for all companies registered under the Companies Act, 2013 to file their annual income tax return on incometax.gov.in, declaring total income, allowable deductions, tax liability, MAT computation, and taxes paid for the financial year.</p>
<p><strong>Who Files ITR-6:</strong> Every domestic company (Pvt Ltd, OPC, public limited) and every foreign company with income taxable in India. Companies claiming exemption under Section 11 file ITR-7 instead. There is no turnover or income threshold - even dormant, loss-making, and nil-income companies must file ITR-6.</p>
<p><strong>Corporate Tax Regime Options:</strong> Section 115BAA at 22% (25.17% effective, no deductions, no MAT, irrevocable, file Form 10-IC). Section 115BAB at 15% (17.16% effective, new manufacturing only, file Form 10-ID). Turnover-based 25% for companies with FY 2018-19 turnover up to Rs 400 crore (with deductions, MAT applicable). Old regime at 30% (all deductions available, MAT applicable).</p>
<p><strong>Minimum Alternate Tax (MAT):</strong> 15% of book profit. Applicable under old regime and turnover-based 25%. Exempt under 115BAA and 115BAB. MAT credit carried forward for 15 years.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Companies in Pune:</strong></p>
                    <p><strong>ITR-6:</strong> Income tax return form for all companies (except Section 11 exempt). Filed on incometax.gov.in with mandatory DSC.</p>
<p><strong>Section 115BAA:</strong> 22% tax rate (25.17% effective). No Chapter VI-A deductions (except 80JJAA/80M). No MAT. Irrevocable. File Form 10-IC.</p>
<p><strong>Section 115BAB:</strong> 15% tax rate (17.16% effective). For new manufacturing companies incorporated after 1 Oct 2019. File Form 10-ID.</p>
<p><strong>MAT (Section 115JB):</strong> Minimum Alternate Tax at 15% of book profit. Applicable under old/turnover regime only. MAT credit carried forward 15 years.</p>
<p><strong>Form 10-IC/10-ID:</strong> Declaration forms for opting into 115BAA or 115BAB regime. Must be filed before the ITR due date.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Companies in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>115BAA Rate</span>
                        <strong>25.17% Effective</strong>
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
            <h2 class="section-title">Which Companies in Pune Need to File ITR-6</h2>
            <div class="content-text">
                
                <p><strong>All Private Limited Companies</strong> - Every Pvt Ltd with its place of business in Pune must file ITR-6. This includes Hinjewadi IT companies, Baner startups, MIDC manufacturers, and Camp trading companies. Even companies with zero revenue or losses must file. See <a href="/private-limited-company-registration/pune">Private Limited Company Registration in Pune</a>.</p>
<p><strong>One Person Companies (OPC)</strong> - OPCs registered under Section 2(62) of the Companies Act file ITR-6. Many solo founders at Kharadi and Baner operate as OPCs.</p>
<p><strong>Public Limited Companies</strong> - Listed and unlisted public companies with operations in Pune file ITR-6. Large manufacturing companies at Pimpri-Chinchwad and publicly listed entities with Pune offices fall under this category.</p>
<p><strong>Foreign Companies with Indian Income</strong> - Foreign companies with income earned or received in India, including branch offices in Pune, file ITR-6 at 40% tax rate.</p>
<p><strong>Loss-Making and Dormant Companies</strong> - Companies with zero revenue, operating losses, or dormant status must still file ITR-6. Loss carry-forward is only permitted if ITR is filed within the due date. Baner and Kharadi startups in their early years must not skip filing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company ITR Filing Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-6 Preparation and Filing</td><td>End-to-end preparation including all schedules (BP, P&L, BS, CG, MAT, depreciation) and filing on incometax.gov.in with DSC</td></tr>
<tr><td>Tax Regime Advisory (115BAA / 115BAB / Old)</td><td>Detailed analysis of which regime is most beneficial based on profits, deductions, MAT credit balance, and future plans</td></tr>
<tr><td>Statutory Audit Coordination</td><td>Coordination with statutory auditor for timely completion; preparation of financial statements and schedules for audit</td></tr>
<tr><td>Tax Audit (Section 44AB)</td><td>Tax audit report preparation in Form 3CA-3CD; filing on e-filing portal by 30 September 2026</td></tr>
<tr><td>Transfer Pricing Documentation and Filing</td><td>TP study, benchmarking, Form 3CEB preparation and filing for Hinjewadi IT subsidiaries with international transactions</td></tr>
<tr><td>Advance Tax Computation and Payment</td><td>Quarterly advance tax estimation and deposit (15 Jun, 15 Sep, 15 Dec, 15 Mar) for interest-free compliance</td></tr>
<tr><td>MAT Credit Management</td><td>Tracking MAT credit carried forward from prior years; optimal utilisation against regular tax liability</td></tr>
<tr><td>Form 10-IC / 10-ID Filing</td><td>Declaration filing for 115BAA or 115BAB regime before the ITR due date</td></tr>

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
            <h2 class="section-title">Company ITR Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step guide for company ITR-6 compliance with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Complete Statutory Audit and Finalise Financial Statements</h3><p class="step-description">Every company must get its accounts audited by a practising CA (statutory auditor). Finalise audited P&L, balance sheet, cash flow statement, and notes to accounts. For Pune companies, the AGM (where financials are approved) must be held by 30 September 2026. The statutory auditor signs the audit report, which forms the basis of ITR-6 filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit Completed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AGM by 30 September</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="60" x2="60" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Financials Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Select Tax Regime and File Form 10-IC / 10-ID</h3><p class="step-description">Analyse whether Section 115BAA (22%, no deductions), Section 115BAB (15%, manufacturing), turnover-based 25%, or old 30% regime gives the lowest effective tax. File Form 10-IC (for 115BAA) or Form 10-ID (for 115BAB) on incometax.gov.in before the ITR due date. Once 115BAA/115BAB is opted, the company cannot revert. For Baner startups with no deductions, 115BAA at 25.17% is typically optimal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regime Analysed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 10-IC/10-ID Filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="32" y="45" text-anchor="middle" fill="#E8712C" font-size="9" font-weight="bold">22%</text><text x="87" y="45" text-anchor="middle" fill="#14365F" font-size="9" font-weight="bold">30%</text></svg></div><span class="illustration-label">Regime Selected</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Get Tax Audit Done and Filed (if applicable)</h3><p class="step-description">If company turnover exceeds Rs 1 crore (Rs 10 crore for 95%+ digital), file tax audit report in Form 3CA-3CD by 30 September 2026. The tax auditor reports on compliance with income tax provisions, transfer pricing, ICDS, and specific disclosures. Patron's Pune CA team handles both statutory and tax audit coordination.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3CA-3CD by 30 Sept</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ICDS Compliance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="45" y="34" text-anchor="middle" fill="#E8712C" font-size="8" font-weight="bold">CA</text><rect x="30" y="50" width="60" height="15" rx="4" fill="#10B981" opacity="0.15"/><line x1="30" y1="57" x2="75" y2="57" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Tax Audit Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare and Compute ITR-6</h3><p class="step-description">Fill all applicable schedules: Schedule BP with business income computation, depreciation schedules (DPM, DOA, DEP), Schedule CG for capital gains, Schedule MAT for book profit computation (if old regime), Schedule 80G/80JJAA/80M for eligible deductions, and Schedule SH/AL for shareholding and assets-liabilities. Reconcile with Form 26AS/AIS for TDS/TCS credits. For Hinjewadi IT companies, include Schedule TP details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Schedules Filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>26AS Reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="32" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="46" width="30" height="8" rx="2" fill="#E8712C"/></svg></div><span class="illustration-label">ITR-6 Prepared</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR-6 with DSC by 31 October 2026</h3><p class="step-description">Upload the completed ITR-6 on incometax.gov.in. Company ITR must be verified using DSC (Digital Signature Certificate) of the authorised signatory (director). EVC is not available for companies. Submit by 31 October 2026 (or 30 November 2026 for transfer pricing cases). Pay any self-assessment tax shortfall before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Self-Assessment Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FEF4EE" stroke="#10B981" stroke-width="2"/><path d="M52 42l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">ITR-6 Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Reconcile, Verify, and Maintain Records</h3><p class="step-description">After filing, verify the acknowledgement. Reconcile ITR turnover with GST annual return (GSTR-9) to prevent mismatch notices. Cross-check TDS credits with Form 26AS. Maintain all working papers, audit reports, and supporting documents for 8 years (audit cases). Patron runs a post-filing reconciliation for every Pune company client.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST-ITR Reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>8-Year Records</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L95 30V55C95 75 60 90 60 90S25 75 25 55V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Secured</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Company ITR Filing in Pune</h2>
            <div class="content-text">
                
                <p><strong>Audited Financial Statements:</strong> P&L, balance sheet, cash flow statement, notes to accounts, and directors' report signed by statutory auditor and directors.</p>
<p><strong>Tax Audit Report (3CA-3CD):</strong> If tax audit applicable. Filed on e-filing portal by 30 September.</p>
<p><strong>Form 26AS / Annual Information Statement (AIS):</strong> For TDS/TCS credit verification and income cross-check.</p>
<p><strong>GST Returns (GSTR-3B, GSTR-9):</strong> For turnover reconciliation with ITR.</p>
<p><strong>Board Resolution:</strong> Authorising the director to file ITR on behalf of the company.</p>
<p><strong>DSC (Digital Signature Certificate):</strong> Valid Class 3 DSC of the authorised signatory.</p>
<p><strong>Form 10-IC / 10-ID:</strong> If opting for Section 115BAA or 115BAB regime.</p>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-Specific Tip:</strong> Hinjewadi IT subsidiaries of foreign parent companies must ensure transfer pricing documentation (TP study, benchmarking analysis, Form 3CEB) is ready before ITR-6 filing. ROC Pune and the Income Tax Department cross-verify company financials - ensure consistency between MCA filings (AOC-4) and ITR-6 figures.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Company ITR Filing in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Regime Selection Error</td><td>Opting for 115BAA without realising significant startup deductions (80IAC) would reduce tax below 25.17% under old regime</td><td>Quantified 4-regime comparison modelling MAT credit, deductions, and future business plans before Form 10-IC filing</td></tr>
<tr><td>MAT Credit Stranded on Regime Switch</td><td>Companies with accumulated MAT credit permanently lose it when switching to 115BAA; MIDC companies most affected</td><td>MAT credit vs regime switch cost-benefit analysis before making irrevocable 115BAA/115BAB election</td></tr>
<tr><td>ITR-GST Turnover Mismatch</td><td>Automatic cross-check between ITR-6 turnover and GSTR-9 triggers mismatch notices; timing and exempt supply differences</td><td>Pre-filing GST-ITR turnover reconciliation covering accrual vs cash, exempt supplies, and reverse charge adjustments</td></tr>
<tr><td>Transfer Pricing Non-Compliance</td><td>Hinjewadi IT subsidiaries missing TP documentation and Form 3CEB; penalty 2% of each international transaction value</td><td>End-to-end TP compliance: study, benchmarking, Form 3CEB filing by 31 October, and TP assessment representation</td></tr>
<tr><td>Loss-Making Companies Skipping Filing</td><td>Baner/Kharadi startups defer ITR believing no tax liability; lose 8-year loss carry-forward worth potentially crores</td><td>Mandatory filing within due date (31 October) to preserve loss carry-forward; ITR-6 even for nil/loss returns</td></tr>

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
            <h2 class="section-title">Company ITR Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (Company ITR)</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>
<tr><td>ITR-6 Filing (Turnover up to Rs 1 Cr)</td><td>Rs 10,000 - Rs 15,000 (Govt fee: Nil)</td></tr>
<tr><td>ITR-6 Filing (Turnover Rs 1-10 Cr)</td><td>Rs 15,000 - Rs 25,000</td></tr>
<tr><td>ITR-6 Filing (Turnover Rs 10-100 Cr)</td><td>Rs 25,000 - Rs 40,000</td></tr>
<tr><td>ITR-6 with Transfer Pricing</td><td>Rs 50,000 - Rs 1,50,000 (TP study + Form 3CEB)</td></tr>
<tr><td>Tax Audit (3CA-3CD)</td><td>Rs 15,000 - Rs 40,000</td></tr>
<tr><td>Regime Advisory (115BAA/115BAB)</td><td>Rs 5,000 - Rs 15,000</td></tr>
<tr><td>Advance Tax Computation (Annual)</td><td>Rs 5,000 - Rs 10,000</td></tr>
<tr><td>Government Fee</td><td>Nil for filing. Late fee: Section 234F (Rs 5,000)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Companies in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Company%20ITR-6%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Deadlines for Company ITR (FY 2025-26)</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>AGM (Approve Financials)</td><td>30 September 2026 (within 6 months of FY end)</td></tr>
<tr><td>Tax Audit Report (3CA-3CD)</td><td>30 September 2026 (if Section 44AB applicable)</td></tr>
<tr><td>Form 10-IC / 10-ID</td><td>Before ITR due date (for 115BAA/115BAB regime selection)</td></tr>
<tr><td>ITR-6 Filing</td><td>31 October 2026 (all companies - audit mandatory)</td></tr>
<tr><td>Transfer Pricing (3CEB)</td><td>31 October 2026 (for international/specified domestic transactions)</td></tr>
<tr><td>ITR-6 (TP cases)</td><td>30 November 2026 (companies with TP obligations)</td></tr>
<tr><td>Belated/Revised Return</td><td>31 December 2026 (with Rs 5,000 late filing fee; no loss carry-forward)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> All company ITR filing is online via incometax.gov.in with mandatory DSC. No physical submission required. Patron's Pune office at RTC Silver, Wagholi manages the complete process digitally. Critical: Loss-making companies must file by 31 October to preserve loss carry-forward. Form 10-IC/10-ID must be filed BEFORE the ITR due date - missing this means defaulting to the higher old-regime rate for that year.</p>

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
            <h2 class="section-title">Why Choose Patron for Company ITR in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office at Wagholi</h3><p>Walk-in consultations at RTC Silver, Wagholi - 30 minutes from Hinjewadi, Kharadi, MIDC Bhosari, Baner, and Camp - Pune's major company hubs.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Regime Optimisation</h3><p>Detailed 115BAA vs 115BAB vs old regime analysis for every company client. We quantify the tax impact of each option including MAT credit forfeiture before recommending a regime.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>All Company Types</h3><p>From Baner OPCs to Hinjewadi MNC subsidiaries to MIDC manufacturing companies. We file ITR-6 for companies across every turnover range and industry.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>Transfer Pricing</h3><p>Full TP compliance for Hinjewadi IT subsidiaries: TP study, benchmarking, Form 3CEB, and representation during TP assessments. Empanelled transfer pricing specialists.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Companies</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses across India. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves companies from OPCs to 5,000+ employee enterprises.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tax Regime Comparison for Pune Companies</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>115BAA (22%)</th><th>115BAB (15%)</th><th>Old Regime (25-30%)</th></tr></thead>
                    <tbody>
                        <tr><td>Effective Rate</td><td>25.17%</td><td>17.16%</td><td>~26-34.94%</td></tr>
<tr><td>Eligibility</td><td>All domestic companies</td><td>New mfg (post Oct 2019)</td><td>All domestic companies</td></tr>
<tr><td>Chapter VI-A Deductions</td><td>Only 80JJAA, 80M</td><td>Only 80JJAA, 80M</td><td>All available</td></tr>
<tr><td>MAT</td><td>Exempt</td><td>Exempt</td><td>15% of book profit</td></tr>
<tr><td>Revocability</td><td>Irrevocable</td><td>Irrevocable</td><td>Can switch to 115BAA</td></tr>
<tr><td>Form Required</td><td>Form 10-IC</td><td>Form 10-ID</td><td>None</td></tr>
<tr><td>Best For</td><td>Most Hinjewadi IT companies with no major deductions</td><td>New MIDC manufacturing plants</td><td>Companies with heavy 80IA/80IB/80IAC deductions</td></tr>

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
            <h2 class="section-title">Related Services for Pune Companies</h2>
            <div class="content-text">
                
                <p>Pune companies managing ITR compliance often need complementary services:</p>
<ul style="list-style:disc;padding-left:20px;"><li style="margin-bottom:12px;padding:8px 0;"><a href="/itr-for-companies" style="font-weight:600;">ITR for Companies in India</a> - National company ITR filing services</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/gst-returns/pune">GST Returns in Pune</a> - GST compliance alongside ITR</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/tax-audit">Tax Audit</a> - Section 44AB tax audit report preparation</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/accounting-services">Accounting Services</a> - Year-round bookkeeping for companies</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Company ITR</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> Income Tax Act, 1961; Companies Act, 2013; Income Tax Rules, 1962.</p>
<p><strong>ITR Form:</strong> ITR-6 for all companies except Section 11 exempt (who file ITR-7). Online only with mandatory DSC.</p>
<p><strong>Due Date:</strong> 31 October 2026 for FY 2025-26. Transfer pricing: 30 November 2026. Belated: 31 December 2026.</p>
<p><strong>Tax Rates:</strong> 115BAA: 22% (25.17% effective). 115BAB: 15% (17.16%). Turnover-based: 25%. Old: 30%. Foreign: 40%.</p>
<p><strong>MAT (Section 115JB):</strong> 15% of book profit. Exempt under 115BAA/115BAB. MAT credit carried forward 15 years.</p>
<p><strong>Statutory Audit:</strong> Mandatory for all companies under Companies Act, 2013. AGM by 30 September.</p>
<p><strong>Tax Audit (Section 44AB):</strong> If turnover > Rs 1 crore (Rs 10 crore for 95%+ digital). Form 3CA-3CD by 30 September.</p>
<p><strong>Transfer Pricing:</strong> Mandatory for international transactions. Form 3CEB by 31 October. Penalty: 2% of transaction value.</p>
<p><strong>Late Filing:</strong> Rs 5,000 under Section 234F. Interest: 234A (1% p.m.), 234B (1% p.m.), 234C (1% p.m.). Loss carry-forward forfeited.</p>
<p><strong>Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a></p>
<p><strong>Jurisdictional Authority:</strong> CIT Pune; Principal CIT Pune; Assessing Officers, Pune Wards.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR for Companies in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about company ITR-6 filing, tax regimes, MAT, deadlines, and compliance in Pune</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Companies in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form do companies file?</h3>
                        <div class="faq-expanded__a"><p>All companies registered under the Companies Act - private limited, OPC, public limited, and Section 8 (except Section 11 exempt) - file ITR-6. This is mandatory regardless of turnover, profitability, or business activity. Even dormant and loss-making Pune companies must file ITR-6 annually. Companies claiming Section 11 exemption file ITR-7 instead.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the due date for company ITR?</h3>
                        <div class="faq-expanded__a"><p>For FY 2025-26 (AY 2026-27), the due date is 31 October 2026 for all companies (statutory audit is mandatory). Companies with transfer pricing obligations file by 30 November 2026. Belated returns can be filed until 31 December 2026 with Rs 5,000 late fee. Missing the due date prevents loss carry-forward.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between 115BAA and the old regime?</h3>
                        <div class="faq-expanded__a"><p>Section 115BAA offers 22% tax (25.17% effective) but the company cannot claim most Chapter VI-A deductions, additional depreciation, or SEZ benefits. It is exempt from MAT. The old regime charges 25-30% but allows all deductions. For most Pune IT companies without major deductions, 115BAA saves tax. For MIDC manufacturers with heavy depreciation and 80IA deductions, the old regime may be better.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is MAT applicable under Section 115BAA?</h3>
                        <div class="faq-expanded__a"><p>No. Companies opting for 115BAA or 115BAB are exempt from Minimum Alternate Tax. However, any MAT credit accumulated before switching is permanently forfeited. Pune companies with significant MAT credit balances should analyse the net benefit before filing Form 10-IC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a loss-making company skip ITR filing?</h3>
                        <div class="faq-expanded__a"><p>No. Every company must file ITR-6 regardless of profitability. Business losses can only be carried forward for set-off against future profits (up to 8 years) if the ITR is filed within the due date. Baner and Kharadi startups with operating losses must file by 31 October 2026 to preserve this right.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the penalty for late company ITR filing?</h3>
                        <div class="faq-expanded__a"><p>Late filing attracts Rs 5,000 under Section 234F. Interest at 1% per month applies under Sections 234A, 234B, and 234C. Loss carry-forward is forfeited if filed after the due date. Persistent non-filing can lead to prosecution under Section 276CC.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Company ka ITR kab file karna hai?</strong> 31 October 2026 tak (FY 2025-26). Transfer pricing cases: 30 November 2026. Late fee Rs 5,000 agar due date miss ho.</p>
<p><strong>115BAA mein kitna tax lagta hai?</strong> 22% + 10% surcharge + 4% cess = 25.17% effective rate. Koi Chapter VI-A deduction nahi milta (except 80JJAA/80M). MAT nahi lagta.</p>
<p><strong>Loss-making company ko bhi ITR file karna padega?</strong> Haan, mandatory hai. Agar due date pe file nahi kiya toh loss carry forward nahi hoga - 8 saal tak ka loss set-off opportunity gaya.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Your Company ITR-6 Before 31 October 2026</h2>
            <div class="content-text">
                
                <p>Company ITR filing is not optional - every registered company must file ITR-6 by <strong>31 October 2026</strong>. A loss-making Baner startup that files even one day late permanently forfeits that year's loss carry-forward - potentially worth crores when the company becomes profitable.</p>
<p><strong>Companies that have not filed Form 10-IC before the due date lose the 115BAA regime benefit and default to the higher old-regime rate. Hinjewadi IT subsidiaries without TP documentation face penalties of 2% of each international transaction value. Professional filing at Rs 10,000-50,000 is a fraction of the regime selection errors and lost loss carry-forward that follow non-compliance.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Company ITR Filing in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">ITR-6 filing for companies in Pune is a mandatory annual obligation for every registered company - from Hinjewadi IT subsidiaries and Baner startups to MIDC manufacturing plants and Pune Camp trading entities. The choice between 115BAA, 115BAB, turnover-based 25%, and the old 30% regime has a direct and significant impact on your company's tax liability.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi provides dedicated company ITR filing services - from regime advisory and ITR-6 preparation to statutory audit coordination, transfer pricing compliance, and post-filing scrutiny support.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron Accounting LLP is a trusted CA and CS firm for corporate tax compliance across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Company%20ITR-6%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Company%20ITR%20Filing%20in%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20with%20company%20ITR-6%20filing%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Company ITR Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides company ITR-6 filing services in 4 major cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <a href="/itr-for-companies/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/itr-for-companies/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="/itr-for-companies/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end corporate compliance for Pune companies</div><div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ITR for Companies in Pune is reviewed monthly. Content covers Income Tax Act 1961, Section 115BAA/115BAB regime selection, MAT Section 115JB, Form 10-IC/10-ID, statutory and tax audit requirements, transfer pricing compliance, ITR-6 schedules, and CIT Pune jurisdiction. Freshness Tier 1.</p>
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
