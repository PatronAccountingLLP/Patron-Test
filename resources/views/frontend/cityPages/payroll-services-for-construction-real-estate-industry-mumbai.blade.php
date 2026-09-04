
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@include('partials.page-css', ['file' => 'css/site.css'])
@endpush








@section('meta')
    <title>Construction & Real Estate Accounting Mumbai - RERA & GST</title>
    <meta name="description" content="CA-led construction and real estate payroll in Mumbai. BOCW cess, CLRA contract labour, PF/ESI, site worker wages, MahaRERA compliance, multi-site payroll. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-construction-real-estate-industry/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Construction & Real Estate Accounting Mumbai - RERA & GST">
    <meta property="og:description" content="CA-led construction and real estate payroll in Mumbai. BOCW cess, CLRA contract labour, PF/ESI, site worker wages, MahaRERA compliance, multi-site payroll. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-construction-real-estate-industry/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Construction & Real Estate Accounting Mumbai - RERA & GST">
    <meta name="twitter:description" content="CA-led construction and real estate payroll in Mumbai. BOCW cess, CLRA contract labour, PF/ESI, site worker wages, MahaRERA compliance, multi-site payroll. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Construction & Real Estate Accounting Mumbai - RERA & GST",
      "description": "CA-led construction and real estate payroll in Mumbai. BOCW cess, CLRA contract labour, PF/ESI, site worker wages, MahaRERA compliance, multi-site payroll. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry/mumbai",
      "serviceType": "Construction & Real Estate Accounting Mumbai - RERA & GST",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry/mumbai",
        "price": "15000"
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
          "name": "Payroll Construction Real Estate",
          "item": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Construction & Real Estate Accounting Mumbai - RERA & GST",
          "item": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What payroll compliance applies to construction companies in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "BOCW Act (1% cess, 10+ workers). CLRA 1970 (principal employer registration, 20+ contract). PF (12%+12%). ESI (3.25%+0.75% for ≤ Rs 21,000). Maharashtra minimum wages by construction skill category. Payment of Wages Act (by 7th/10th). Gratuity Act. Maharashtra PT. MahaRERA project documentation."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF and ESI mandatory for site workers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. PF mandatory for 20+ employees. Contract labour covered under contractor's or principal employer's code. ESI for 10+ in construction, wages ≤ Rs 21,000. Both remitted by 15th. Principal employer liable if contractor defaults on contributions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the BOCW Act and how does it affect payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Building and Other Construction Workers Act 1996. 10+ workers = Maharashtra BOCW Board registration + 1% welfare cess on project cost. Worker registration for benefits. Safety mandatory. Overtime at double rate. BOCW cess and worker welfare are payroll compliance items."
          }
        },
        {
          "@type": "Question",
          "name": "How is contract labour payroll managed on sites?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Contractor maintains Form V/XII/XIII, processes wages per Maharashtra min wages, files PF/ESI. Principal employer verifies monthly. If contractor defaults, developer pays under S.21 CLRA. Patron audits contractors monthly - muster rolls, wage registers, PF/ESI challans, min wage compliance."
          }
        },
        {
          "@type": "Question",
          "name": "Do MahaRERA projects have payroll obligations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MahaRERA requires project-level financial records. 70% of funds in escrow. Labour costs from project funds documented for RERA audit. QPR includes construction expenditure. Patron provides payroll documentation aligned with MahaRERA project accounting."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        Payroll Services for Construction and Real Estate in Mumbai: CA-Led Compliance for Sites, Contractors, and Corporate Offices
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> BOCW registration, CLRA licence, PF/ESI codes, contractor agreements, worker muster rolls, site attendance, MahaRERA registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 15,000/month for single-site construction payroll</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Builders, developers, contractors, sub-contractors, real estate firms, infrastructure companies in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding 7-10 days; monthly payroll by 7th; PF/ESI by 15th</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 15,000/month</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Construction%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Construction Payroll in Mumbai',
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
    'ctaText'    => 'CA-led construction payroll with BOCW, CLRA, PF/ESI, contractor audit, and MahaRERA compliance for Mumbai builders and developers.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Workforce</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction & Real Estate Payroll in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Construction Payroll in Mumbai Services at a Glance</strong></p>
                    <p>Construction payroll covers <strong>BOCW Act 1996</strong> (1% cess, worker registration), <strong>CLRA 1970</strong> (contract labour, principal employer S.21 liability), <strong>PF</strong> (12%+12%) and <strong>ESI</strong> (3.25%+0.75%), <strong>Maharashtra minimum wages</strong> (by skill category), multi-site muster roll, <strong>contractor payroll audit</strong>, <strong>TDS S.194C</strong>, and <strong>MahaRERA</strong> project compliance.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>BOCW 1996; CLRA 1970; EPF Act; ESI Act; Payment of Wages; Min Wages Maharashtra; RERA 2016</td></tr><tr><td>Applicable To</td><td>Builders, developers, contractors, sub-contractors, infrastructure, SRA, real estate offices</td></tr><tr><td>Timeline</td><td>Wages by 7th/10th; PF/ESI by 15th; TDS by 7th; BOCW cess with registration</td></tr><tr><td>Cost From</td><td>Rs 15,000/month (single-site)</td></tr><tr><td>Key Obligations</td><td>BOCW 1% cess; PF 12%+12%; ESI 3.25%+0.75%; Maharashtra min wages; CLRA Form V</td></tr><tr><td>Authority</td><td>Maharashtra BOCW Board; EPFO Mumbai; ESIC Mumbai; Labour Commissioner; MahaRERA</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai is India's largest construction market. <strong>MMRDA projects, Mumbai Metro, coastal road, MTHL, SRA redevelopment, Navi Mumbai airport</strong> - thousands of active sites. BOCW requires 1% cess. CLRA S.21 = principal employer liability. Maharashtra minimum wages by skill category. Learn more about <a href="/payroll-services-for-construction-real-estate-industry">Construction Payroll across India</a>.</p>
                <p>Patron's Marine Lines office files with EPFO Mumbai, ESIC Mumbai, Maharashtra BOCW Board, and Labour Commissioner. Also see <a href="/payroll-services">Payroll Services</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is Construction & Real Estate Payroll</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialised wage processing and labour law compliance for the <strong>layered construction workforce</strong>: direct employees (engineers, managers), contract labour (site workers via contractors), and daily-wage labourers. Must comply with <strong>BOCW Act 1996, CLRA 1970</strong>, site-specific attendance, <strong>Maharashtra minimum wages</strong> by skill category, and <strong>MahaRERA</strong> project-level cost allocation.</p><p>Workers move between sites. PF/ESI managed per establishment code. Maharashtra minimum wages differ by skill: unskilled ≠ skilled mason ≠ crane operator. Overtime at <strong>double rate</strong> (BOCW). Migrant labourers from UP/Bihar/Rajasthan need KYC/UAN. <strong>Principal employer liable for contractor default</strong> (CLRA S.21). For MahaRERA projects: 70% in escrow, labour costs documented. Real estate companies also need <strong>corporate office payroll</strong> for sales teams, architects, finance.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Construction Payroll in Mumbai:</strong></p>
                    <p><strong>BOCW Act 1996:</strong> 10+ workers = registration + 1% welfare cess on project cost. Worker registration for healthcare/education/pension. Safety standards. Overtime at double rate.</p><p><strong>CLRA S.21:</strong> Principal employer (builder) liable if contractor defaults on wages/PF/ESI. Monthly contractor audit = only protection.</p><p><strong>Maharashtra Min Wages:</strong> Unskilled, Semi-Skilled, Skilled, Highly-Skilled categories. Periodically revised. VDA updated separately.</p><p><strong>PF/ESI:</strong> PF 12%+12% on Basic+DA. ESI 3.25%+0.75% for ≤ Rs 21,000/month. ECR by 15th. Both mandatory for construction.</p><p><strong>MahaRERA:</strong> 70% in escrow. Labour costs documented. QPR includes construction expenditure.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Construction Payroll in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>BOCW + CLRA + PF/ESI</span>
                        <strong>Construction Payroll</strong>
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
            <h2 class="section-title">Who Needs Construction Payroll in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Large Developers (BKC, Lower Parel):</strong> 10-50+ active sites across Mumbai/Thane/Navi Mumbai. Multi-site payroll consolidation. BOCW per site. Corporate office payroll.</p><p><strong>General Contractors and EPC Firms:</strong> MMRDA infrastructure, Mumbai Metro, coastal road, MTHL. Thousands of workers across multiple labour contractors.</p><p><strong>Specialised Sub-Contractors (Electrical, Plumbing, HVAC, Steel):</strong> Workers deployed across multiple builder sites. CLRA licence. Contractor-level PF/ESI management.</p><p><strong>SRA Redevelopment Projects:</strong> Complex developer-SRA-tenant dynamics. Dedicated BOCW compliance for each SRA project.</p><p><strong>Real Estate Sales and Brokerage:</strong> Commission-heavy payroll. Incentive calculations. TDS on commission.</p><p><strong>Labour Contractors:</strong> CLRA licence. Worker register. Muster roll. Timely wage disbursement. PF/ESI filing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>BOCW Act 1996 Compliance</td><td>Project registration with Maharashtra BOCW Board (10+ workers). 1% cess on project cost. Worker registration for welfare (healthcare, education, pension, housing). Safety documentation. Accident reporting.</td></tr><tr><td>CLRA 1970 (Contract Labour)</td><td>Principal employer registration (Form I, 20+ workers). Contractor licence (Form IV). Form V (register), Form XII (muster), Form XIII (wages). S.21 compliance: contractor audit to protect developer from liability.</td></tr><tr><td>PF and ESI for Site Workers</td><td>EPFO Mumbai: 12%+12% on Basic+DA. Monthly ECR. ESI Mumbai: 3.25%+0.75% for ≤ Rs 21,000. UAN generation. KYC linking. Transfer/withdrawal for migrant workers.</td></tr><tr><td>Maharashtra Minimum Wages</td><td>Category-wise computation: Unskilled/Semi-Skilled/Skilled/Highly-Skilled. VDA updates applied. Overtime at double rate (BOCW). Wage slips issued. Payment by 7th/10th.</td></tr><tr><td>Multi-Site Payroll Management</td><td>Site-wise muster roll. Worker deployment across Mumbai/Thane/Navi Mumbai. Site-wise PF/ESI. Project-wise labour cost. Consolidated reporting. MahaRERA cost tracking.</td></tr><tr><td>TDS on Contractors (S.194C)</td><td>1% individual / 2% others on &gt; Rs 30K single or Rs 1L annual. Deposited by 7th. 26Q quarterly. Form 16A to contractors. S.194IA for property purchases.</td></tr><tr><td>Corporate Office Payroll</td><td>CTC-based: sales (commission + incentives), architects, engineers, finance. PF/ESI. TDS S.192. Maharashtra PTRC. Form 16. Bonus + increments.</td></tr><tr><td>Gratuity and Full & Final</td><td>Gratuity for 5+ years (salary × 15/26 × years). F&amp;F: pending wages, leave, bonus, gratuity, PF withdrawal. Notice pay/recovery.</td></tr>

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
            <h2 class="section-title">6-Step Construction Payroll Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office. Files with EPFO Mumbai, ESIC Mumbai, Maharashtra BOCW Board, and Labour Commissioner.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Site and Workforce Assessment</h3><p class="step-description">CA reviews active sites, workforce (direct vs contract vs daily), contractor agreements, BOCW/CLRA status, PF/ESI codes, MahaRERA registrations. Payroll structure designed per entity and site. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sites mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Workforce classified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Registration and Compliance Setup</h3><p class="step-description">BOCW per site (10+ workers). CLRA principal employer (20+ contract). Contractor licences verified. PF/ESI codes with EPFO/ESIC Mumbai. Maharashtra PT. Worker master: Aadhaar, bank, UAN, skill category.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registrations done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Worker data collected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Registered</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">BOCW + CLRA + PF + ESI</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Live</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Attendance and Wage Computation</h3><p class="step-description">Site-wise muster roll. Worker days computed. Wages per Maharashtra min wage + skill category. Overtime at double rate. PF (12%) + ESI (0.75%) deducted. Advances recovered. Net payable per worker. Wage slips.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wages computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Overtime calculated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Computed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Min Wage + PF + ESI + OT</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Net Pay Ready</text></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Wage Disbursement and Statutory Filing</h3><p class="step-description">Wages by 7th/10th. Bank transfers. PF ECR by 15th. ESI by 15th. TDS S.194C on contractors by 7th. Maharashtra PT monthly. BOCW cess per schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wages paid on time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PF/ESI filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Disbursed + Filed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Wages + ECR + ESI + TDS</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">All Deadlines Met</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Contractor Payroll Audit</h3><p class="step-description">Monthly: muster rolls (Form XII), wage registers (Form XIII), PF/ESI challans, minimum wage verification. S.21 CLRA liability check. Discrepancies flagged. Inspection-ready documentation maintained.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Contractors audited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>S.21 protected</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Audited</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Muster + Wages + PF/ESI</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Principal Employer Protected</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Reporting and Year-End</h3><p class="step-description">Monthly MIS: site-wise labour cost, contractor deployment, PF/ESI summary. Quarterly TDS 26Q. Annual bonus. Gratuity. Form 16/16A. Full &amp; final settlements. MahaRERA project cost reporting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-end closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">TDS + Bonus + Gratuity + F&amp;F</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Construction Payroll</h2>
            <div class="content-text">
                
                <ul><li>BOCW Project Registration Certificate</li><li>CLRA Principal Employer Registration / Contractor Licence</li><li>PF Establishment Code + ESI Code</li><li>Contractor Agreements</li><li>Worker Aadhaar + Bank Details</li><li>Site Muster Rolls / Attendance Records</li><li>Previous PF/ESI Challans</li><li>MahaRERA Project Registration (for developers)</li><li>Maharashtra PT Registration + Corporate Employee CTC (for office)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> Maharashtra BOCW Board registration. Latest Maharashtra minimum wage notification. MMRDA NOCs for infrastructure. SRA project documents. Multiple PF/ESI codes for multi-site developers.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Construction Payroll Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Principal Employer Liability (CLRA S.21)</td><td>If contractor fails to pay wages/PF/ESI, developer is liable. Labour inspectors hold builder responsible. Surprise liabilities when contractors default.</td><td>Monthly contractor payroll audit: muster rolls, wage registers, PF/ESI challans verified. Discrepancies flagged immediately. S.21 protection documented.</td></tr><tr><td>Migrant Worker Documentation</td><td>Workers from UP/Bihar/Rajasthan/Odisha lack Aadhaar-bank linking, incomplete KYC, PF accounts with other employers. UAN/KYC/bank account needed before payroll.</td><td>Patron facilitates UAN generation, KYC verification, bank account opening. Inter-State Migrant Workmen Act compliance managed.</td></tr><tr><td>Multi-Site Multi-Contractor Reconciliation</td><td>10+ sites, 3-5 contractors each, 50-200 workers per contractor. 2,000-5,000+ workers across multiple PF/ESI codes, BOCW registrations, CLRA licences.</td><td>Centralised payroll management with site-wise drill-down. Every contractor tracked. Site-wise labour costs for project accounting.</td></tr><tr><td>Minimum Wage and Labour Inspector Visits</td><td>Maharashtra revises construction min wages periodically. Non-payment triggers complaints. Labour inspectors conduct surprise visits. Non-compliance = prosecution + back wages.</td><td>Maharashtra min wage updates tracked and applied immediately. Wage registers and muster rolls inspection-ready at all times.</td></tr><tr><td>MahaRERA Labour Cost Documentation</td><td>70% in escrow. Labour costs from project funds must be documented. QPR includes construction expenditure. Undocumented costs = adverse MahaRERA observation.</td><td>Payroll documentation aligned with MahaRERA project accounting. Site-wise labour cost reports for QPR. Escrow compliance verified.</td></tr>

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
            <h2 class="section-title">Construction Payroll Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Single-Site Contractor (&lt;50 workers)</td><td>Rs 10,000 - Rs 20,000/month (5-7 days onboarding)</td></tr><tr><td>Single-Site Developer (50-200 workers)</td><td>Rs 20,000 - Rs 40,000/month (7-10 days)</td></tr><tr><td>Multi-Site Developer (200-1000 workers)</td><td>Rs 40,000 - Rs 1,00,000/month (10 days)</td></tr><tr><td>Large Developer / Infrastructure (1000+)</td><td>Rs 1,00,000 - Rs 3,00,000/month (10-15 days)</td></tr><tr><td>Real Estate Corporate Office Only</td><td>Rs 15,000 - Rs 35,000/month (5-7 days)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Construction Payroll in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Construction%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction Payroll Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding + Assessment</td><td>7-10 days (Marine Lines Mumbai)</td></tr><tr><td>Monthly Wage Computation</td><td>By 5th of following month</td></tr><tr><td>Wage Disbursement</td><td>By 7th (&lt;1000) or 10th (1000+)</td></tr><tr><td>PF ECR + ESI</td><td>By 15th monthly</td></tr><tr><td>TDS on Contractors</td><td>By 7th monthly + 26Q quarterly</td></tr><tr><td>Contractor Payroll Audit</td><td>Monthly (ongoing)</td></tr><tr><td>Year-End (Bonus, Gratuity, F&amp;F)</td><td>15-30 days annual</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF late: 12% interest + Rs 5/day. ESI late: 12% interest. Min wage non-payment: prosecution + back wages. BOCW non-registration: Rs 2,000 fine + imprisonment risk. CLRA S.21 default: developer pays. Labour inspector visit without records: stop-work order. Start today.</p>

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
            <h2 class="section-title">Why Choose Patron for Construction Payroll in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in from BKC, Lower Parel developer HQs, Andheri, Thane, Navi Mumbai. Files with EPFO, ESIC, BOCW Board, Labour Commissioner.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">BOCW + CLRA + PF/ESI + MahaRERA</h3><p class="feature-text">All construction labour laws bundled. Contractor payroll audit for S.21 protection. Multi-site consolidation. Site + office payroll from one team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Contractor Audit = S.21 Shield</h3><p class="feature-text">Monthly verification of every contractor: muster rolls, wage registers, PF/ESI challans, min wage compliance. Developer protected from surprise liabilities.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including builders, developers, contractors, and infrastructure firms across Mumbai, Thane, and Navi Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including builders, developers, general contractors, sub-contractors, and real estate firms across Mumbai, Thane, and Navi Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll by Construction Workforce Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Workforce Type</th><th>Payroll Scope</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Direct Employees (Engineers, PMs)</td><td>CTC payroll, PF/ESI, TDS S.192, Maharashtra PT, Form 16</td><td>Developer corporate office; standard compliance</td></tr><tr><td>Contract Labour (Site Workers)</td><td>CLRA Form V/XII/XIII, Maharashtra min wages, PF/ESI, S.21 audit</td><td>Bulk of site workforce; principal employer liability critical</td></tr><tr><td>Daily-Wage Labourers</td><td>Muster-roll based wages, min wage per skill, BOCW registration</td><td>Migrant workers; UAN/KYC challenges; cash payment documentation</td></tr><tr><td>Sub-Contractor Workers</td><td>CLRA, PF/ESI under sub-contractor code, min wages, TDS S.194C</td><td>Electrical/plumbing/HVAC specialists; multiple site deployment</td></tr><tr><td>Sales and Marketing (Real Estate)</td><td>Commission-heavy CTC, incentives, TDS, Maharashtra PT</td><td>Brokerage and developer sales teams; variable pay structures</td></tr><tr><td>Security Guards (Site)</td><td>CLRA, ESI mandatory, PF, min wages for security category</td><td>Through security agencies; principal employer liability applies</td></tr>

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
                
                <ul><li><a href="/payroll-services-for-construction-real-estate-industry">Construction Payroll in India</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/statutory-audit">Statutory Audit</a></li></ul>

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
                
                <p><strong>BOCW Act 1996:</strong> 10+ workers = registration with Maharashtra BOCW Board. 1% cess on project cost. Worker registration. Safety standards. Overtime at double rate. Accident reporting.</p><p><strong>CLRA 1970:</strong> Principal employer registration (Form I, 20+ contract). Contractor licence (Form IV). Forms V/XII/XIII. S.21: principal employer pays if contractor defaults. Canteen/rest/sanitation.</p><p><strong>PF/ESI:</strong> PF: 20+ employees, 12%+12% on Basic+DA, ECR by 15th. ESI: 10+ (construction), 3.25%+0.75% for ≤ Rs 21,000. UAN + KYC mandatory.</p><p><strong>Maharashtra Min Wages:</strong> Unskilled/Semi-Skilled/Skilled/Highly-Skilled. VDA separately. Overtime double rate. Revised periodically.</p><p><strong>Portals:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://bocw.maharashtra.gov.in" target="_blank" rel="noopener">BOCW Maharashtra</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Construction Payroll in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Construction Payroll in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What payroll compliance applies to construction companies in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>BOCW Act (1% cess, 10+ workers). CLRA 1970 (principal employer registration, 20+ contract). PF (12%+12%). ESI (3.25%+0.75% for ≤ Rs 21,000). Maharashtra minimum wages by construction skill category. Payment of Wages Act (by 7th/10th). Gratuity Act. Maharashtra PT. MahaRERA project documentation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is PF and ESI mandatory for site workers?</h3>
                        <div class="faq-expanded__a"><p>Yes. PF mandatory for 20+ employees. Contract labour covered under contractor's or principal employer's code. ESI for 10+ in construction, wages ≤ Rs 21,000. Both remitted by 15th. Principal employer liable if contractor defaults on contributions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does construction payroll cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Single-site contractor (<50 workers): Rs 10,000-20,000/month. Single-site developer (50-200): Rs 20,000-40,000. Multi-site (200-1000): Rs 40,000-1,00,000. Large developer (1000+): Rs 1,00,000-3,00,000. Corporate office only: Rs 15,000-35,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the BOCW Act and how does it affect payroll?</h3>
                        <div class="faq-expanded__a"><p>Building and Other Construction Workers Act 1996. 10+ workers = Maharashtra BOCW Board registration + 1% welfare cess on project cost. Worker registration for benefits. Safety mandatory. Overtime at double rate. BOCW cess and worker welfare are payroll compliance items.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is contract labour payroll managed on sites?</h3>
                        <div class="faq-expanded__a"><p>Contractor maintains Form V/XII/XIII, processes wages per Maharashtra min wages, files PF/ESI. Principal employer verifies monthly. If contractor defaults, developer pays under S.21 CLRA. Patron audits contractors monthly - muster rolls, wage registers, PF/ESI challans, min wage compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do MahaRERA projects have payroll obligations?</h3>
                        <div class="faq-expanded__a"><p>MahaRERA requires project-level financial records. 70% of funds in escrow. Labour costs from project funds documented for RERA audit. QPR includes construction expenditure. Patron provides payroll documentation aligned with MahaRERA project accounting.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Construction site pe PF/ESI lagta hai?</strong> Haan - 20+ pe PF (12%+12%), 10+ pe ESI (3.25%+0.75%). Contract workers bhi covered. Contractor ya principal employer ka code.</p><p><strong>BOCW cess kitna?</strong> Project cost ka 1%. Maharashtra BOCW Board ko pay. 10+ workers pe mandatory.</p><p><strong>Contractor ne PF nahi bhara toh builder pe aayega?</strong> Haan - CLRA S.21 ke under principal employer liable. Isliye monthly contractor audit zaroori.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Contractor Default = Developer Pays. Protect with Monthly Audit.</h2>
            <div class="content-text">
                
                <p>PF late: 12% interest + Rs 5/day. ESI late: 12% interest. Min wage non-payment: prosecution + back wages. BOCW non-registration: fine + imprisonment. CLRA S.21: developer pays contractor's default. Labour inspector visit without records: stop-work order. MahaRERA undocumented costs: adverse observation.</p><p><strong>Patron onboards in 7-10 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Construction%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. From Rs 15,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Sites, Workers, and Contractors - Fully Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Construction payroll in Mumbai ensures BOCW (1% cess, worker registration), CLRA (contractor audit, S.21 protection), PF/ESI (timely ECR), Maharashtra minimum wages, and MahaRERA documentation. For builders, developers, contractors across BKC, Lower Parel, Andheri, Thane, Navi Mumbai.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. Multi-site payroll, contractor audit, and full statutory compliance. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Construction%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Construction%20Payroll%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Construction%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Construction Payroll Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led construction payroll in 8 major cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-construction-real-estate-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services-for-construction-real-estate-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services-for-construction-real-estate-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Payroll, accounting, and compliance</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a><a href="/actuarial-valuation-services-for-employee-benefits/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Actuarial Valuation</div><div class="pa-card-sub">Mumbai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect Maharashtra minimum wage revisions, BOCW/CLRA amendments, PF/ESI rate changes, and MahaRERA compliance updates. Next review: June 2026.</p>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
