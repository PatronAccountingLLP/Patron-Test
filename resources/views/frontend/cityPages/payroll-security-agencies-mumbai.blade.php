
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Security Agency Payroll Mumbai - ESIC, PF & Wage Register</title>
    <meta name="description" content="CA-led security agency payroll in Mumbai. Guard wages, VDA revision, site-wise processing, PF/ESI, PSARA compliance, CLRA documentation for BKC, Andheri, Navi Mumbai. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-security-agencies/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Security Agency Payroll Mumbai - ESIC, PF & Wage Register">
    <meta property="og:description" content="CA-led security agency payroll in Mumbai. Guard wages, VDA revision, site-wise processing, PF/ESI, PSARA compliance, CLRA documentation for BKC, Andheri, Navi Mumbai. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-security-agencies/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Security Agency Payroll Mumbai - ESIC, PF & Wage Register">
    <meta name="twitter:description" content="CA-led security agency payroll in Mumbai. Guard wages, VDA revision, site-wise processing, PF/ESI, PSARA compliance, CLRA documentation for BKC, Andheri, Navi Mumbai. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Security Agency Payroll Mumbai - ESIC, PF & Wage Register",
      "description": "CA-led security agency payroll in Mumbai. Guard wages, VDA revision, site-wise processing, PF/ESI, PSARA compliance, CLRA documentation for BKC, Andheri, Navi Mumbai. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-security-agencies/mumbai",
      "serviceType": "Security Agency Payroll Mumbai - ESIC, PF & Wage Register",
      "areaServed": {
        "@type": "City",
        "name": "Mumbai",
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
        "url": "https://www.patronaccounting.com/payroll-security-agencies/mumbai",
        "price": "5000"
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
          "name": "Payroll Security Agencies",
          "item": "https://www.patronaccounting.com/payroll-security-agencies"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Security Agency Payroll Mumbai - ESIC, PF & Wage Register",
          "item": "https://www.patronaccounting.com/payroll-security-agencies/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What payroll compliance applies to security agencies in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PSARA 2005 (licence + records), PF (mandatory, all agencies 20+, 12%+12%), ESI (wages ≤ Rs 21,000, virtually all guards, 3.25%+0.75%), Maharashtra min wages Security Guard with VDA revised Apr/Oct, Maharashtra PT, Payment of Wages/Bonus/Gratuity, CLRA 1970 (principal employer documentation). Non-compliance risks PSARA licence cancellation."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF and ESI mandatory for security guards?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. PF mandatory - all agencies have 20+ employees. 12%+12% on Basic+VDA. ESI applies - most guards earn below Rs 21,000. 3.25%+0.75%. Deposited by 15th. PSARA licence renewal requires PF/ESI compliance proof. Principal employer clients demand challan copies as CLRA verification."
          }
        },
        {
          "@type": "Question",
          "name": "How are guard wages structured with Basic + VDA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra min wage: Basic pay (fixed) + VDA (revised Apr/Oct per CPI). Guards categorised unskilled/semi-skilled/skilled. Mumbai zone rates. PF/ESI on Basic+VDA. Each VDA revision = recalculate all guard wages + PF/ESI + client billing. Patron auto-updates wage tables upon notification."
          }
        },
        {
          "@type": "Question",
          "name": "What is PSARA requirement for payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PSARA licence renewal requires: min wages payment proof (wage register with Basic+VDA), PF/ESI registration + regular deposit (challan copies), police verification for deployed guards, and 100-hour training records. Below min wages or PF/ESI gaps = Maharashtra Home Dept can refuse renewal or cancel."
          }
        },
        {
          "@type": "Question",
          "name": "What is principal employer's liability for guard wages?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CLRA S.21: if agency fails to pay wages, client (principal employer) must pay and recover. Clients with 20+ contract guards register as principal employer (Form I). Mumbai corporates demand monthly compliance documentation: PF ECR + guard UAN, ESI challan, wage register, attendance. Patron generates site-wise packs."
          }
        }
      ]
    }
  ]
}</script>
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
                        Payroll Services for Security Agencies in Mumbai: CA-Led Guard Wages, VDA Revision, PSARA Compliance, and Site-Wise Processing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PSARA licence, PF/ESI codes, CLRA registration, guard master roll, site deployment register, Maharashtra min wage notification, arms licence (armed guards)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000/month for small agencies (<50 guards)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> PSARA-licensed security agencies, facility management companies, armed security, event security, and all private security businesses in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding 5-7 days; guard wages by 7th; PF/ESI by 15th; VDA revision auto-processed</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 5,000/month</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Security%20Agency%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Security Agency Payroll in Mumbai',
                                            'city'     => 'Mumbai',
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
    'ctaText'    => 'CA-led security agency payroll with site-wise processing, VDA revision, PSARA compliance, CLRA documentation, and client billing reconciliation for Mumbai agencies.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Agency Type</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Security Agency Payroll in Mumbai Services at a Glance</strong></p>
                    <p>Security agency payroll covers <strong>site-wise guard wages</strong> (Basic + VDA per Maharashtra min wage), <strong>VDA revision auto-processing</strong> (twice yearly Apr/Oct), <strong>24/7 shift + reliever</strong> computation, <strong>overtime at double wages</strong>, <strong>PF/ESI</strong>, <strong>PSARA compliance</strong> for licence renewal, <strong>CLRA S.21</strong> principal employer documentation, <strong>client billing reconciliation</strong>, and <strong>armed guard/DGR</strong> premium.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>PSARA 2005; Maharashtra Min Wages (VDA Apr/Oct); EPF/ESI Acts; CLRA 1970; Maharashtra PT; Code on Wages</td></tr><tr><td>Applicable To</td><td>PSARA-licensed agencies, facility management, armed security, event security, RWA security</td></tr><tr><td>Timeline</td><td>Guard wages by 7th; PF/ESI by 15th; VDA revision auto-processed; PSARA renewal documentation</td></tr><tr><td>Cost From</td><td>Rs 5,000/month (small agency &lt;50 guards)</td></tr><tr><td>Key Challenge</td><td>VDA revision for 1,000+ guards; site-wise payroll; reliever allocation; PSARA; 40-60% attrition</td></tr><tr><td>Authority</td><td>Maharashtra Home Dept (PSARA); EPFO Mumbai; ESIC Mumbai; Labour Commissioner</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai deploys hundreds of thousands of security guards across <strong>BKC corporate towers, Nariman Point offices, Andheri/Powai IT parks, Navi Mumbai industrial, Bhiwandi warehouses, JNPT port, residential societies</strong>. VDA revised twice yearly, site-wise payroll, PSARA compliance, CLRA documentation = unique complexity. Learn more about <a href="/payroll-services-for-security-agencies">Security Agency Payroll across India</a>.</p>
                <p>Patron's Marine Lines office handles security-specific payroll with VDA auto-processing and PSARA compliance documentation. Also see <a href="/payroll-services">Payroll Services</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is Security Agency Payroll</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialised <strong>site-wise wage processing</strong> for security guards deployed across client locations. Each guard mapped to site, post, and shift. Wages per <strong>Maharashtra minimum wage</strong> (Basic + VDA). <strong>VDA revised twice yearly</strong> (Apr/Oct). 24/7 shift rotation with <strong>reliever computation</strong>. Overtime at double wages. <strong>PSARA compliance</strong> for licence. <strong>CLRA documentation</strong> for principal employers.</p><p>Unlike standard payroll: <strong>per-site-per-employee</strong> processing (not just per-employee). <strong>VDA revision</strong> = recalculate wages for all guards + PF/ESI + client billing simultaneously. <strong>Reliever</strong>: 1 per 6 guards for weekly off coverage, allocated proportionally across sites. <strong>40-60% annual attrition</strong> = constant onboarding/exit. <strong>Client billing reconciliation</strong>: man-days × billing rate must match payroll + statutory + margin. <strong>PSARA licence</strong>: PF/ESI proof + min wages + police verification + training. <strong>CLRA S.21</strong>: clients demand site-wise compliance packs.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Security Agency Payroll in Mumbai:</strong></p>
                    <p><strong>VDA:</strong> Variable Dearness Allowance. Revised Apr/Oct per CPI. Each revision = recalculate all guard wages + PF/ESI + billing. Arrears if retrospective.</p><p><strong>PSARA 2005:</strong> Private Security Agencies Regulation Act. Licence from Maharashtra Home Dept. Requires PF/ESI + min wages + police verification + training proof.</p><p><strong>Site-Wise Payroll:</strong> Guard → site → post → shift. Transfer split payroll. Reliever allocated proportionally. CLRA registers per site.</p><p><strong>Reliever:</strong> 1 per 6 guards (24/7 posts). Covers weekly offs. Wages allocated across sites served. Reflected in client billing.</p><p><strong>CLRA S.21:</strong> Principal employer (client) liable if agency defaults. Clients with 20+ guards demand monthly compliance documentation.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Security Agency Payroll in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>PSARA + VDA + Site-Wise</span>
                        <strong>Security Payroll</strong>
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
            <h2 class="section-title">Who Needs Security Agency Payroll in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Large National Agencies (SIS, Checkmate, Topsgrup):</strong> 5,000-50,000+ guards across Mumbai. Multi-site. VDA for thousands simultaneously.</p><p><strong>Mid-Size Regional Agencies:</strong> 500-5,000 guards across Mumbai and Maharashtra. 50-200 client sites.</p><p><strong>Small Local Agencies:</strong> 50-500 guards. Residential complexes, offices, shops. PSARA compliance critical.</p><p><strong>Armed Security (Cash-in-Transit, VIP):</strong> Weapon licence compliance. Premium wages. DGR ex-servicemen rates.</p><p><strong>Facility Management (ISS, OCS, BVG):</strong> Integrated security + housekeeping divisions. Combined payroll.</p><p><strong>Event Security:</strong> Temporary guards for exhibitions, concerts, corporate events. Rapid onboarding/settlement.</p><p><strong>IT Park / Hospital / Port Security:</strong> BKC/Powai/Andheri IT access control. Hospital security. JNPT/Mumbai Port/Bhiwandi warehouse.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Site-Wise Guard Wage Processing</td><td>Guard mapped to site/post/shift. Monthly per attendance at deployed site. Guard transfer split. Multi-site register: site, guard, days, shift (morning/afternoon/night), overtime, reliever days. Maharashtra min wage Basic + VDA. Pay slips with site details. Bank transfer.</td></tr><tr><td>VDA Revision Processing (Apr/Oct)</td><td>Auto-update wage tables upon notification. All guard wages recalculated. Arrears computed (if retrospective). PF/ESI on new Basic+VDA. Client billing rate updated (statutory pass-through). Revised pay slips. For 1,000+ guards: major payroll event handled automatically.</td></tr><tr><td>24/7 Shift and Reliever Processing</td><td>Three 8-hr shifts: morning/afternoon/night. Shift rotation tracked per guard. Night allowance 10-15%. Reliever: 1 per 6 guards for weekly offs. Reliever wages allocated across sites proportionally. Double-duty computation.</td></tr><tr><td>Overtime at Double Wages</td><td>Beyond 8 hrs/day or 48 hrs/week = double ordinary wage. Client extra guard requests, festival extended hours, absent guard relief, double-duty. Per guard per site tracking. Separate pay slip line item.</td></tr><tr><td>PF/ESI Registration and Filing</td><td>EPFO Mumbai: all agencies have 20+, 12%+12% on Basic+VDA, ECR by 15th. ESIC Mumbai: virtually all guards under Rs 21,000, 3.25%+0.75%. UAN generation for new guards. PF transfer (frequent due to 40-60% attrition). Guard-wise PF/ESI for PSARA renewal.</td></tr><tr><td>PSARA Compliance Documentation</td><td>Payroll in PSARA-compliant format: guard wage register Basic+VDA, PF/ESI challans linked to guard UAN/ESIC IP, attendance/deployment registers. For Maharashtra Home Dept/Commissioner of Police inspection during licence renewal/audit.</td></tr><tr><td>CLRA Principal Employer Documentation</td><td>Form V (register of contract workers), Form XII (wages), Form XIII (muster roll) per client site. Site-wise compliance packs for principal employer audits. S.21: clients demand proof agency pays wages + PF/ESI. Competitive differentiator for agencies pitching to corporate clients.</td></tr><tr><td>Client Billing Reconciliation + PT/Bonus/Gratuity</td><td>Man-days × billing rate = invoice. Billing = wage + employer PF (13%) + ESI (3.25%) + bonus (8.33%) + gratuity + margin. Payroll reconciled with billing monthly. Maharashtra PT. Bonus 8.33-20%. Gratuity (5+ yrs). Armed guard/DGR premium computation.</td></tr>

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
            <h2 class="section-title">6-Step Security Agency Payroll Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office. Files with EPFO, ESIC, Maharashtra Home Dept, and Labour Commissioner.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Agency Assessment</h3><p class="step-description">CA reviews PSARA licence, guard strength, client sites, deployment pattern (24/7 vs day/night), guard categories (unarmed/armed/supervisor), wage structure vs Maharashtra min wage, PF/ESI, CLRA, client billing. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Guard database mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sites catalogued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Payroll Structure and Compliance Setup</h3><p class="step-description">Wage library per Maharashtra min wage (Basic+VDA by category). Site master with deployment. Shift patterns + reliever ratios. PF/ESI codes. PSARA templates. CLRA registers (Form V/XII/XIII) per site. Client billing reconciliation template.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>VDA library configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CLRA registers created</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">VDA + Sites + PSARA + CLRA</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Live</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Site-Wise Data (by 3rd)</h3><p class="step-description">Site-wise duty rosters from biometric/muster. Overtime approvals. Reliever deployment logs. Guard transfers between sites. New joiners (UAN, police verification). Exits (F&amp;F). VDA revision notification check (Apr/Oct).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rosters compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>VDA checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Collected</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Sites + Shifts + Relievers</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">All Inputs Ready</text></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Wage Processing (by 5th)</h3><p class="step-description">Site-wise: Basic + VDA + night allowance + overtime 2x. PF (12%) + ESI (0.75%) + TDS (supervisors) + PT deducted. Reliever wages allocated across sites. Net computed. Pay slips with site + shift details. Bank file. Register site-wise + consolidated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Guard wages computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Relievers allocated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Processed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Site-Wise + VDA + Relievers</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">By 7th Every Month</text></svg></div><span class="illustration-label">Processed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Filing and Client Documentation (by 7th-15th)</h3><p class="step-description">Guard wages by 7th. PF ECR by 15th. ESI by 15th. TDS by 7th. PT monthly. CLRA registers updated per site. PSARA file updated. Client billing reconciliation. Site-wise compliance pack for principal employers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All filings done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Client packs ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Filed</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PF + ESI + CLRA + PSARA</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Client Compliance Packs</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End and PSARA Renewal</h3><p class="step-description">Form 16 (officers/supervisors). Annual PF return. Bonus 8.33-20%. Gratuity provisioning. VDA arrears. PSARA licence renewal: PF/ESI proof + min wage proof + training records + police verification. Annual MIS: guard cost, site-wise labour, PF/ESI/TDS, attrition, overtime, billing reconciliation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PSARA renewal ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">PSARA Renewed + Bonus + MIS</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Security Agency Payroll</h2>
            <div class="content-text">
                
                <ul><li>PSARA Licence Certificate</li><li>PF Establishment Code + ESI Code</li><li>Shops &amp; Establishment Licence + CLRA Registration Form I + Form IV</li><li>Guard Master Roll (Name/Post/Site/DL/Police Verification)</li><li>Site Deployment Register</li><li>Maharashtra Minimum Wage Notification (current)</li><li>Guard Aadhaar + PAN + Bank Details</li><li>Client Service Agreements + Arms Licence (armed guards)</li><li>Maharashtra PT Registration + Previous PF/ESI Challans</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> PSARA licence from Maharashtra Home Dept/Commissioner of Police Mumbai. Latest Maharashtra min wage notification for Security Guard/Watchman. Mumbai Police NOC for armed guard deployment. BMC trade licence for agency office.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Security Agency Payroll Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>VDA Revision for Thousands of Guards</td><td>Maharashtra revises VDA twice yearly. Each = recalculate wages for every guard + PF/ESI + arrears (if retrospective) + client billing rates. 2,000 guards = 2,000 simultaneous wage revisions. Many agencies delay = arrears liability + labour inspector risk.</td><td>Patron auto-updates wage tables upon notification. Arrears processed same payroll cycle. Client billing rates updated with statutory pass-through documentation.</td></tr><tr><td>Site-Wise Payroll for 50-500+ Sites</td><td>Each guard's attendance, shift, overtime, leave is per-site. Mid-month transfers = split payroll. Relievers across multiple sites = proportional allocation. Generic providers process per-employee, not per-site-per-employee. Lose site-level detail for billing + CLRA.</td><td>Full site-wise processing: per-site attendance, shift, overtime. Transfer split handled. Reliever proportional allocation. CLRA Form V/XII/XIII per site. Client billing reconciliation at site level.</td></tr><tr><td>Reliever Cost Allocation</td><td>24/7: 1 reliever per 6 guards for weekly off coverage. Reliever wages distributed across sites. Must reflect in billing (separate line or included in rate). Incorrect allocation = under-billing clients or under-paying relievers.</td><td>Patron computes reliever ratio, allocates wages proportionally, and reflects in client billing template. Transparent allocation documented.</td></tr><tr><td>40-60% Annual Guard Attrition</td><td>Guards move between agencies for small wage differences. Each exit: F&amp;F (2 days), PF transfer, PSARA de-registration. Each joiner: UAN, ESI, police verification, PSARA entry, site assignment. 1,000 guards with 50% = 500 exits + 500 joiners/year (~10/week).</td><td>Bulk onboarding/exit workflows. UAN generation pipeline. PF transfer facilitated. PSARA register auto-updated. 7-10 day F&amp;F cycle.</td></tr><tr><td>Principal Employer Client Compliance</td><td>CLRA S.21: clients liable if agency doesn't pay. Mumbai corporates (banks, IT, hospitals, malls) demand monthly proof: PF ECR with guard UAN, ESI challan, wage register, attendance. Non-compliance = agency loses contract.</td><td>Patron generates site-wise compliance packs: PF ECR + guard UAN list, ESI challan, wage register, attendance muster. Ready for client audit by 20th monthly.</td></tr>

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
            <h2 class="section-title">Security Agency Payroll Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Agency (&lt;50 guards, &lt;10 sites)</td><td>Rs 5,000 - Rs 15,000/month (3-5 days onboarding)</td></tr><tr><td>Mid-Size Agency (50-500 guards, 10-50 sites)</td><td>Rs 15,000 - Rs 50,000/month (5-7 days)</td></tr><tr><td>Large Agency (500-2,000 guards, 50-200 sites)</td><td>Rs 40,000 - Rs 1,50,000/month (7-10 days)</td></tr><tr><td>Enterprise Agency (2,000-10,000+ guards)</td><td>Rs 1,00,000 - Rs 4,00,000/month (10-15 days)</td></tr><tr><td>Facility Management (security division)</td><td>Rs 25,000 - Rs 1,00,000/month (7 days)</td></tr><tr><td>Armed Guard/DGR Processing (add-on)</td><td>Rs 3,000 - Rs 10,000/month</td></tr><tr><td>Client Compliance Pack (per site, add-on)</td><td>Rs 500 - Rs 1,000/site/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Security Agency Payroll in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Security%20Agency%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Security Agency Payroll Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding (+ guard master + site mapping)</td><td>5-7 days (Marine Lines Mumbai)</td></tr><tr><td>Monthly Site-Wise Attendance</td><td>By 3rd (duty rosters + overtime + relievers)</td></tr><tr><td>Wage Processing</td><td>By 5th (Basic+VDA + night + OT + reliever)</td></tr><tr><td>Guard Wage Disbursement</td><td>By 7th (Payment of Wages Act)</td></tr><tr><td>PF ECR + ESI</td><td>By 15th</td></tr><tr><td>Client Compliance Packs</td><td>By 20th (site-wise for principal employers)</td></tr><tr><td>VDA Revision Processing</td><td>Within payroll cycle of notification (Apr/Oct)</td></tr><tr><td>PSARA Renewal Documentation</td><td>Before licence expiry date</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF late: 12% interest + 25% damages. ESI late: 12% interest. PSARA non-compliance: licence suspension/cancellation. Min wages not paid: prosecution + back wages. VDA not implemented: arrears + labour complaint. Overtime not paid double: labour court. CLRA registers missing: S.21 liability on client = agency loses contract. Guard attrition not processed: PF/ESI mismatch flags. F&amp;F delayed: new code violation.</p>

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
            <h2 class="section-title">Why Choose Patron for Security Agency Payroll in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in from BKC, Nariman Point, Andheri, Powai, Navi Mumbai, Bhiwandi guard deployment zones. Files with EPFO, ESIC, Maharashtra Home Dept.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Site-Wise + VDA + PSARA + CLRA</h3><p class="feature-text">Per-site guard payroll + VDA auto-revision + PSARA licence documentation + CLRA principal employer packs + client billing reconciliation. No other Mumbai firm bundles all security payroll layers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">50 Guards to 10,000+</h3><p class="feature-text">Small local agency to SIS/Checkmate-scale enterprise. Armed guard DGR premium. Facility management. Event security. All from one team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including security agencies, facility management companies, and corporate principal employers across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including security agencies, facility management, and corporate clients across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll by Security Agency Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Agency Type</th><th>Payroll Scope</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Large National Agency</td><td>5,000-50,000 guards, 200+ sites, VDA for thousands, enterprise MIS, PSARA multi-state</td><td>SIS/Checkmate/Topsgrup; pan-Mumbai deployment; corporate clients</td></tr><tr><td>Mid-Size Regional</td><td>500-5,000 guards, 50-200 sites, VDA, reliever, CLRA per site, client billing</td><td>Mumbai + Maharashtra; growing client base; PSARA renewal critical</td></tr><tr><td>Small Local Agency</td><td>50-500 guards, &lt;50 sites, Basic+VDA, PF/ESI, PSARA, client compliance</td><td>Residential/offices/shops; PSARA compliance often neglected; attrition highest</td></tr><tr><td>Armed Security</td><td>Weapon licence, premium wages, DGR ex-servicemen rates, enhanced documentation</td><td>Cash-in-transit, VIP, bank ATM; Mumbai Police NOC required</td></tr><tr><td>Facility Management</td><td>Integrated security + housekeeping, combined payroll, multi-service client billing</td><td>ISS/OCS/BVG; corporate/hospital/IT park; bundled compliance</td></tr><tr><td>Event Security</td><td>Temporary guards, rapid onboarding, per-event settlement, short-term PF/ESI assessment</td><td>Exhibitions/concerts/corporate; seasonal; quick F&amp;F</td></tr>

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
            <h2 class="section-title">Related Payroll and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/payroll-services-for-security-agencies">Security Agency Payroll in India</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/statutory-audit">Statutory Audit</a></li></ul>

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
                
                <p><strong>PSARA 2005:</strong> Licence from Maharashtra Home Dept/Commissioner of Police. Valid 5 years. Requires guard deployment records, police verification, 100-hour training, PF/ESI proof, min wages proof. Non-compliance: cancellation/prosecution.</p><p><strong>Maharashtra Min Wages - Security Guard:</strong> Basic + VDA. VDA revised Apr/Oct per CPI. Unskilled/semi-skilled/skilled categories. Mumbai zone rates. Always verify latest notification. Patron maintains current wage library.</p><p><strong>PF/ESI:</strong> All agencies have 20+: PF 12%+12% on Basic+VDA, ECR by 15th. ESI: virtually all guards under Rs 21,000, 3.25%+0.75%.</p><p><strong>CLRA 1970:</strong> Principal employer (client) Form I for 20+ guards. Agency Form IV. Forms V/XII/XIII per site. S.21: client pays if agency defaults.</p><p><strong>Portals:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://mahakamgar.maharashtra.gov.in" target="_blank" rel="noopener">Maharashtra Labour</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Security Agency Payroll in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Security Agency Payroll in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What payroll compliance applies to security agencies in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>PSARA 2005 (licence + records), PF (mandatory, all agencies 20+, 12%+12%), ESI (wages ≤ Rs 21,000, virtually all guards, 3.25%+0.75%), Maharashtra min wages Security Guard with VDA revised Apr/Oct, Maharashtra PT, Payment of Wages/Bonus/Gratuity, CLRA 1970 (principal employer documentation). Non-compliance risks PSARA licence cancellation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is PF and ESI mandatory for security guards?</h3>
                        <div class="faq-expanded__a"><p>Yes. PF mandatory - all agencies have 20+ employees. 12%+12% on Basic+VDA. ESI applies - most guards earn below Rs 21,000. 3.25%+0.75%. Deposited by 15th. PSARA licence renewal requires PF/ESI compliance proof. Principal employer clients demand challan copies as CLRA verification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does security agency payroll cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Small agency (<50 guards): Rs 5,000-15,000/month. Mid-size (50-500): Rs 15,000-50,000. Large (500-2,000): Rs 40,000-1,50,000. Enterprise (2,000-10,000+): Rs 1,00,000-4,00,000. Facility management: Rs 25,000-1,00,000. Client compliance pack: Rs 500-1,000/site/month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How are guard wages structured with Basic + VDA?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra min wage: Basic pay (fixed) + VDA (revised Apr/Oct per CPI). Guards categorised unskilled/semi-skilled/skilled. Mumbai zone rates. PF/ESI on Basic+VDA. Each VDA revision = recalculate all guard wages + PF/ESI + client billing. Patron auto-updates wage tables upon notification.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is PSARA requirement for payroll?</h3>
                        <div class="faq-expanded__a"><p>PSARA licence renewal requires: min wages payment proof (wage register with Basic+VDA), PF/ESI registration + regular deposit (challan copies), police verification for deployed guards, and 100-hour training records. Below min wages or PF/ESI gaps = Maharashtra Home Dept can refuse renewal or cancel.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is principal employer's liability for guard wages?</h3>
                        <div class="faq-expanded__a"><p>CLRA S.21: if agency fails to pay wages, client (principal employer) must pay and recover. Clients with 20+ contract guards register as principal employer (Form I). Mumbai corporates demand monthly compliance documentation: PF ECR + guard UAN, ESI challan, wage register, attendance. Patron generates site-wise packs.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Security guard ka salary kaise?</strong> Maharashtra min wages: Basic + VDA. VDA saal mein do baar revise (Apr/Oct). PF 12%+12% katta hai, ESI 3.25%+0.75% katta hai (Rs 21,000 se kam pe - mostly sab guards). Overtime pe double wages 8 ghante se zyada pe.</p><p><strong>PSARA licence ke liye payroll compliance kyon zaroori?</strong> Licence renewal pe Home Dept check karta hai min wages, PF/ESI, police verification, training. Agar payroll mein gap toh licence cancel.</p><p><strong>Client ko kya documents dene padte hain?</strong> CLRA S.21 ke under client principal employer hai. PF ECR + guard names, ESI challan, wage register, attendance muster demand karte hain. Patron site-wise compliance pack banata hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">VDA Not Updated = Arrears Liability + PSARA Risk. Start Today.</h2>
            <div class="content-text">
                
                <p>PF late: 12% interest + 25% damages. PSARA non-compliance: licence cancellation. Min wages not paid: prosecution + back wages. VDA not implemented: arrears + labour complaint. Overtime not double: labour court. CLRA registers missing: client liability → agency loses contract. Guard attrition unprocessed: PF/ESI mismatch.</p><p><strong>Patron onboards in 5-7 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Security%20Agency%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. From Rs 5,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Guards, Every Site Compliant, PSARA-Ready</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Security agency payroll in Mumbai ensures site-wise guard wages per Maharashtra min wages with VDA auto-revision, 24/7 shift + reliever processing, overtime at double wages, PF/ESI by 15th, PSARA licence documentation, CLRA site-wise compliance packs, and client billing reconciliation. For BKC, Nariman Point, Andheri, Powai, Navi Mumbai, Bhiwandi, JNPT deployment zones.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. Site-wise payroll, VDA auto-processing, PSARA compliance, CLRA documentation. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Security%20Agency%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Security%20Agency%20Payroll%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Security%20Agency%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Security Agency Payroll Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led security agency payroll in 8 major cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-security-agencies/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services-for-security-agencies/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services-for-security-agencies/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Payroll and security compliance</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Mumbai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect VDA revisions (April/October), PSARA norm changes, PF/ESI rate updates, and Maharashtra minimum wage notifications. Next review: June 2026.</p>
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
