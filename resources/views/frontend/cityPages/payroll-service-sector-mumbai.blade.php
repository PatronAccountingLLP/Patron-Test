
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>Service Sector Accounting Mumbai - Project Billing & GST</title>
    <meta name="description" content="CA-led service sector payroll in Mumbai. Professional CTC, consultant 194J, BPO shifts, partner draw, flexi-benefits, staffing compliance for Nariman Point, BKC firms. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-service-sector-businesses/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Service Sector Accounting Mumbai - Project Billing & GST">
    <meta property="og:description" content="CA-led service sector payroll in Mumbai. Professional CTC, consultant 194J, BPO shifts, partner draw, flexi-benefits, staffing compliance for Nariman Point, BKC firms. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-service-sector/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Service Sector Accounting Mumbai - Project Billing & GST">
    <meta name="twitter:description" content="CA-led service sector payroll in Mumbai. Professional CTC, consultant 194J, BPO shifts, partner draw, flexi-benefits, staffing compliance for Nariman Point, BKC firms. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Service Sector Accounting Mumbai - Project Billing & GST",
      "description": "CA-led service sector payroll in Mumbai. Professional CTC, consultant 194J, BPO shifts, partner draw, flexi-benefits, staffing compliance for Nariman Point, BKC firms. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-service-sector/mumbai",
      "serviceType": "Service Sector Accounting Mumbai - Project Billing & GST",
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
        "url": "https://www.patronaccounting.com/payroll-service-sector/mumbai",
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
          "name": "Payroll Service Sector",
          "item": "https://www.patronaccounting.com/payroll-service-sector"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Service Sector Accounting Mumbai - Project Billing & GST",
          "item": "https://www.patronaccounting.com/payroll-service-sector/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What payroll compliance applies to service companies in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF (20+, 12%+12%), ESI (10+, ≤ Rs 21,000 - mainly admin/support), TDS S.192 (salary) + S.194J (consultant 10%), Maharashtra PT, Maharashtra S&E Act, Payment of Wages/Gratuity/Bonus. BPO/ITES: Maharashtra IT/ITES notification for flexible hours. LLP/partnership: S.40(b) limits on partner remuneration."
          }
        },
        {
          "@type": "Question",
          "name": "How is consultant/freelancer payment handled alongside payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "S.194J: TDS 10% when aggregate > Rs 30K/year per payee. Separate from employee S.192. Quarterly 26Q (consultant TDS) separate from 24Q (salary). Annual Form 16A per consultant separate from Form 16 (employees). Patron processes both streams in same monthly cycle with automated threshold tracking."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF and ESI mandatory for service companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF mandatory for 20+ employees, 12%+12%. ESI for 10+, wages ≤ Rs 21,000 - in service sector mainly admin/support/BPO entry-level. Most professionals earn above Rs 21,000 (no ESI). Partners of LLPs are NOT employees - PF/ESI does not apply. Patron identifies eligible staff and manages compliance."
          }
        },
        {
          "@type": "Question",
          "name": "What is Section 44ADA for small professional firms?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Individual professionals and partnership firms with gross receipts ≤ Rs 75L (95%+ digital) can opt for presumptive taxation: 50% deemed profit, no books. Covers CA, CS, lawyer, architect, engineer, consultant. Affects proprietor draw structuring. Patron advises on eligibility and optimal draw."
          }
        },
        {
          "@type": "Question",
          "name": "Do service exporters have different payroll considerations?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Service exporters file LUT for zero-rated GST (Rule 96A). Payroll compliance (PF/ESI/TDS/PT) is same, but employee cost = critical input for service costing, transfer pricing (Form 3CEB for MNCs), and STPI/SEZ benefit tracking. Patron integrates payroll with export accounting."
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
                        Payroll Services for the Service Sector in Mumbai: CA-Led Professional CTC, Consultant TDS, BPO Shifts, and Partner Draw Processing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PF/ESI codes, TAN, S&E licence, LLP/partnership deed, consultant agreements, STPI registration (if applicable), GST registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000/month for small professional practices</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Consulting firms, CA/law practices, BPO/KPO, advertising agencies, staffing companies, media firms, and all service businesses in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding 5-7 days; salary by 7th; PF/ESI by 15th; 26Q quarterly for consultants</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Service%20Sector%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Service Sector Payroll in Mumbai',
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
    'ctaText'    => 'CA-led service sector payroll with consultant TDS, partner draw, BPO shift processing, flexi-CTC, and staffing compliance for Mumbai service firms.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Business Type</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Payroll in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Service Sector Payroll in Mumbai Services at a Glance</strong></p>
                    <p>Service sector payroll covers <strong>professional CTC</strong> (50% basic + flexi-benefits for Rs 20-100L+ staff), <strong>consultant/freelancer TDS S.194J</strong> (10%, 50-100+ freelancers), <strong>partner draw</strong> (S.40(b), no PF/ESI), <strong>BPO 24/7 shifts</strong> (night allowance, overtime), <strong>PF/ESI</strong>, <strong>dual tax regime</strong> TDS, <strong>S.44ADA</strong> advisory, <strong>service export LUT</strong>, <strong>staffing deployed staff</strong>, and <strong>Maharashtra PT</strong>.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>IT Act S.192/S.194J/S.40(b)/S.44ADA; EPF/ESI Acts; Maharashtra S&amp;E Act 2017; Maharashtra PT; Code on Wages</td></tr><tr><td>Applicable To</td><td>Consulting, CA/law firms, BPO/KPO, advertising/media, staffing, digital agencies, financial advisory</td></tr><tr><td>Timeline</td><td>Salary by 7th; TDS by 7th; PF/ESI by 15th; 24Q + 26Q quarterly; Form 16/16A by June 15</td></tr><tr><td>Cost From</td><td>Rs 5,000/month (small professional practice)</td></tr><tr><td>Key Challenge</td><td>194J volume; partner draw vs salary; flexi-CTC for high earners; BPO shifts; staffing dual payroll</td></tr><tr><td>Authority</td><td>EPFO Mumbai; ESIC Mumbai; Income Tax Dept; Maharashtra PT; Maharashtra S&amp;E</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai is India's services capital: <strong>Nariman Point consulting/legal, BKC corporate advisory, Fort CA/CS firms, Lower Parel media/advertising, Andheri BPO/KPO, Powai professional startups</strong>. Consultant 194J volume, partner draw, BPO shifts, flexi-CTC, staffing compliance = unique service sector payroll complexity. Learn more about <a href="#">Service Sector Payroll across India</a>.</p>
                <p>Patron's Marine Lines office handles service-specific payroll with consultant TDS + partner draw + BPO shift expertise. Also see <a href="/payroll-services">Payroll Services</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is Service Sector Payroll</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Multi-stream payroll for service businesses: <strong>employee salary</strong> (CTC with 50% basic + flexi-benefits), <strong>consultant/freelancer fees</strong> (S.194J TDS at 10%), and <strong>partner/proprietor draw</strong> (S.40(b), no PF/ESI). Also covers <strong>BPO 24/7 shift payroll</strong>, <strong>staffing deployed staff</strong>, and <strong>service export</strong> payroll integration.</p><p>Service sector uniqueness: <strong>high consultant volume</strong> (100+ freelancers per firm, each tracked for 194J threshold). <strong>Partner draw ≠ salary</strong>: no PF/ESI/PT/TDS, deductible under S.40(b) within limits. <strong>High-CTC professionals</strong>: Rs 20-100L+ need flexi-CTC (HRA 50% of basic, NPS, meal vouchers). <strong>BPO shifts</strong>: US/UK/Australia time zones, night allowance, IT/ITES notification. <strong>S.44ADA</strong>: presumptive for small practices (50% deemed profit, no books). <strong>Staffing</strong>: own + deployed staff dual payroll with CLRA.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Service Sector Payroll in Mumbai:</strong></p>
                    <p><strong>S.194J:</strong> Consultant/freelancer TDS 10% on professional fees &gt; Rs 30K/year per payee. Form 26Q quarterly. Form 16A annual. Separate from employee S.192.</p><p><strong>Partner Draw S.40(b):</strong> LLP/partnership profit share. No PF/ESI/PT/TDS. Firm deduction: first Rs 6L book profit → Rs 1.5L or 90%; balance → 60%. S.10(2A): partner profit share exempt.</p><p><strong>S.44ADA:</strong> Presumptive for professionals (CA/CS/lawyer/architect/engineer). Gross receipts ≤ Rs 75L (95% digital). 50% deemed profit. No books.</p><p><strong>BPO Shifts:</strong> 24/7 US/UK/Aus shifts. Night allowance 15-25%. Overtime double. Maharashtra IT/ITES notification: flexible hours + night shift.</p><p><strong>Staffing Deployed:</strong> Own employees + deployed at client sites. Per-client attendance. CLRA documentation. Client billing reconciliation.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Service Sector Payroll in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>194J + Partner Draw + BPO</span>
                        <strong>Service Payroll</strong>
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
            <h2 class="section-title">Who Needs Service Sector Payroll in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Big 4 and Management Consulting (BKC, Nariman Point):</strong> 1,000-10,000+ employees. Complex CTC. International mobility. High consultant volume.</p><p><strong>Boutique Consulting/Advisory:</strong> 10-200 employees. Partner draw + employee salary + consultant 194J in one firm.</p><p><strong>CA/CS/CMA Practices (Fort, Churchgate):</strong> Partner remuneration S.40(b). Articled clerks. Staff salary. S.44ADA for small practices.</p><p><strong>Law Firms (Nariman Point, BKC):</strong> Partner profit share S.10(2A). Associate salary. Paralegal wages.</p><p><strong>Advertising/Creative Agencies (Lower Parel, Andheri):</strong> 100+ freelancers (photographers, designers, copywriters). High 194J volume.</p><p><strong>BPO/KPO (Andheri, Goregaon, Navi Mumbai):</strong> 500-5,000+ agents. 24/7 shifts. Night allowance. 40-70% attrition.</p><p><strong>Staffing/Manpower Agencies:</strong> Own + deployed staff at 10-100+ client sites. Dual payroll with CLRA.</p><p><strong>Digital/Media/PR/Architecture/Event Management:</strong> Project-based teams. Freelancer-heavy. Seasonal surge.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Professional CTC + Flexi-Benefits</td><td>50% basic compliance. HRA (Mumbai 50% of basic). NPS employer 10% S.80CCD(2). Meal vouchers Rs 2,200. LTA. Broadband. Professional development. Car lease. Optimised for Rs 20-100L+ CTCs. BPO entry-level: Maharashtra min wage compliance.</td></tr><tr><td>Consultant/Freelancer TDS (S.194J)</td><td>10% TDS on professional fees &gt; Rs 30K/year per payee. PAN verification. Threshold tracking per consultant. Form 26Q quarterly. Form 16A annual. For 50-100+ freelancers per firm: automated lifecycle. Separate from employee S.192.</td></tr><tr><td>Partner/Proprietor Draw (S.40(b))</td><td>LLP/partnership profit draw: no PF/ESI/PT/TDS. S.40(b) limits: first Rs 6L book profit → Rs 1.5L or 90%; balance → 60%. Interest on capital ≤ 12%. Partner share exempt S.10(2A). Dual-stream: partner draw + employee salary same firm. S.44ADA advisory for small practices.</td></tr><tr><td>PF/ESI Registration and Filing</td><td>EPFO Mumbai: 20+, 12%+12%, ECR by 15th. ESIC Mumbai: 10+, ≤ Rs 21,000 (mainly admin/support/BPO entry). Most professionals above ESI. Partners excluded. Patron identifies eligible staff. UAN/KYC.</td></tr><tr><td>BPO/KPO 24/7 Shift Payroll</td><td>US/UK/Aus/India shifts. Night allowance 15-25%. Overtime double (9 hrs/day, 48/week). Maharashtra IT/ITES notification: flexible hours + night shift. Women permitted with safety. Biometric/swipe attendance. Roster management. High attrition bulk onboarding.</td></tr><tr><td>Dual Tax Regime TDS (S.192)</td><td>Old regime: HRA/80C/80D/80CCD/LTA exemptions. New regime: lower rates, Rs 75K std deduction. Mumbai professionals: HRA = biggest exemption (Rs 30K-60K rent/month). Regime comparison + advisory. 24Q quarterly. Form 16 by June 15. Proof verification Jan-Mar.</td></tr><tr><td>Service Export + Staffing Deployed</td><td>Export under LUT (Rule 96A) zero-rated GST. Payroll = input for service costing + transfer pricing. STPI tracking. Staffing: own + deployed staff dual payroll. Client-wise attendance. CLRA documentation (20+ at site). Client compliance packs. Billing reconciliation.</td></tr><tr><td>Maharashtra PT and S&amp;E Act</td><td>Monthly PT per Maharashtra PT Act 1975 slab. S&amp;E registration. Working hours 9/day, 48/week. Overtime double. BPO/ITES: flexible hours notification. PT registration, deduction, return filing.</td></tr>

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
            <h2 class="section-title">6-Step Service Sector Payroll Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office. Files with EPFO, ESIC, Income Tax, Maharashtra PT, and S&E Inspector.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Service Business Assessment</h3><p class="step-description">CA reviews business type (consulting, BPO, staffing, agency, practice), legal structure (company/LLP/partnership/proprietorship), employee count + CTC, consultant volume, partner draw, BPO shifts, service export, staffing deployment. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Firm structure mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Streams identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Payroll Structure and Compliance Setup</h3><p class="step-description">CTC restructured: 50% basic + flexi-benefits. Partner draw per S.40(b). Consultant 194J tracking configured. BPO shift patterns + night allowance. PF/ESI codes. Maharashtra PT. Dual regime declarations. S.44ADA eligibility assessed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CTC + draw + 194J configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All registrations verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">CTC + 194J + Draw + BPO</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Live</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Data Collection (by 3rd)</h3><p class="step-description">Employee attendance from HRMS. BPO shift rosters with hours. Consultant invoices for 194J. Partner draw amounts. Joiners/exits. Investment declarations. Deployed staff attendance from client sites. Variable pay inputs.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All inputs compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Consultant invoices logged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Collected</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Staff + Consultants + Partners</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">All Inputs Ready</text></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Salary, Draw, and Fee Processing (by 5th)</h3><p class="step-description">Employee: gross → PF + ESI + TDS S.192 + PT → net. BPO: shift + night allowance + overtime. Partner draw: transferred (no PF/ESI/PT/TDS). Consultant: TDS 194J (10%) deducted → net. Deployed staff: client-wise. Pay slips. Bank file.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Three streams processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pay slips ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Processed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Salary + Draw + 194J + BPO</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">By 7th Every Month</text></svg></div><span class="illustration-label">Processed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Filing (by 7th-15th)</h3><p class="step-description">Salary by 7th. TDS by 7th. PF ECR by 15th. ESI by 15th. PT monthly. 24Q (salary) quarterly. 26Q (consultant 194J) quarterly. CLRA records updated for staffing companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All filings done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>24Q + 26Q filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Filed</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PF + ESI + 24Q + 26Q + PT</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">All Deadlines Met</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End and Annual Compliance</h3><p class="step-description">Investment proof Jan-Mar. TDS recomputation. Form 16 (employees) + Form 16A (consultants) by June 15. Annual PF. Gratuity. Bonus 8.33-20%. Partner remuneration reconciliation. Annual MIS: department-wise, consultant fee summary, partner draw, BPO shift cost, deployed staff, PF/ESI/TDS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-end closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Form 16 + 16A + MIS</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Service Sector Payroll</h2>
            <div class="content-text">
                
                <ul><li>COI / LLP Agreement / Partnership Deed / Proprietor PAN</li><li>PF Establishment Code + ESI Code + TAN</li><li>Shops &amp; Establishment Licence</li><li>Employee CTC Letters + Consultant/Freelancer Agreements with PAN</li><li>Partner Deed (for LLP/partnership firms)</li><li>Employee Aadhaar + PAN + Bank Details</li><li>Previous Year PF/ESI/TDS Challans + Form 16</li><li>STPI Registration (if applicable) + GST Registration</li><li>Maharashtra PT Registration</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> Maharashtra S&amp;E registration. Maharashtra IT/ITES notification applicability (BPO). STPI Mumbai registration (service exporters). BMC trade licence / Gumasta licence.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Service Sector Payroll Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>High Consultant/Freelancer 194J Volume</td><td>Ad agency with 100 freelancers: PAN verify each, track Rs 30K threshold per year, deduct 10% TDS each payment, file Form 26Q quarterly (100 deductees), issue 100 Form 16A annually. Many firms miss 194J on smaller payments → TDS demand notices.</td><td>Patron manages entire freelancer TDS lifecycle. Automated threshold tracking per consultant. Zero demand notices. 26Q + Form 16A automated.</td></tr><tr><td>Partner Draw vs Employee Salary</td><td>CA/law/consulting LLPs: partners get draw (no PF/ESI/PT/TDS, S.40(b) limits) + employees get salary (all statutory deductions). Generic payroll treats everyone as employees → wrong PF enrolment for partners + wrong TDS.</td><td>Patron processes dual-stream: partner draw + employee salary in single monthly cycle. S.40(b) limits tracked. Partners correctly excluded from PF/ESI.</td></tr><tr><td>Flexi-CTC for High-Earning Professionals</td><td>Rs 50L CTC: 50% basic (Rs 25L) → PF Rs 3L/year employer. Remaining Rs 25L: HRA (Mumbai 50% basic), NPS 10% S.80CCD(2), meal vouchers, car lease, broadband. Optimal structure differs by tax regime. Generic payroll = no CTC advisory.</td><td>Patron designs CTC per regime choice: old (HRA/80C heavy) vs new (lower rates). Per-employee impact analysis. Take-home maximised.</td></tr><tr><td>BPO/KPO Shift Payroll</td><td>US/UK/Aus shifts: night 6:30pm-3:30am common. Night allowance 15-25%. Overtime double &gt;9 hrs/48 hrs. IT/ITES notification: women night shifts with safety. 40-70% attrition = constant onboarding/exit. 9-to-5 payroll systems cannot handle.</td><td>Shift-based processing with night allowance computation. Overtime tracked per agent. Bulk onboarding/exit for high-attrition. Maharashtra IT/ITES notification compliance.</td></tr><tr><td>Staffing Company Dual Payroll</td><td>Own employees (recruiters, admin) + deployed staff at 10-100+ client sites. Per-client attendance + billing reconciliation + CLRA (20+ at site). Two different payroll streams from one entity. Clients demand monthly compliance proof.</td><td>Patron manages both streams with client-wise compliance packs: PF ECR, ESI challan, wage register. Client billing reconciliation monthly. CLRA records per site.</td></tr>

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
            <h2 class="section-title">Service Sector Payroll Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Professional Practice (&lt;15 staff)</td><td>Rs 5,000 - Rs 12,000/month (3 days onboarding)</td></tr><tr><td>Mid-Size Service Firm (15-75)</td><td>Rs 12,000 - Rs 30,000/month (5 days)</td></tr><tr><td>Large Service Company (75-300)</td><td>Rs 30,000 - Rs 80,000/month (7 days)</td></tr><tr><td>BPO/KPO Centre (300-2,000+)</td><td>Rs 60,000 - Rs 2,50,000/month (10 days)</td></tr><tr><td>Staffing/Manpower Agency</td><td>Rs 20,000 - Rs 1,00,000/month (7 days)</td></tr><tr><td>Advertising/Creative Agency</td><td>Rs 15,000 - Rs 40,000/month (5 days)</td></tr><tr><td>Big 4 / Large Consulting (1,000+)</td><td>Rs 1,50,000 - Rs 5,00,000/month (10-15 days)</td></tr><tr><td>Consultant 194J Management 50+ (add-on)</td><td>Rs 5,000 - Rs 20,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Service Sector Payroll in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Service%20Sector%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Sector Payroll Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding (+ CTC + partner draw setup)</td><td>5-7 days (Marine Lines Mumbai)</td></tr><tr><td>Monthly Input Collection</td><td>By 3rd (attendance, consultant invoices, partner draw)</td></tr><tr><td>Salary + Draw + Fee Processing</td><td>By 5th (employee S.192 + partner + consultant S.194J)</td></tr><tr><td>Disbursement</td><td>By 7th (Payment of Wages Act)</td></tr><tr><td>PF/ESI Filing</td><td>By 15th (ECR + ESI contribution)</td></tr><tr><td>Form 24Q (salary TDS)</td><td>Quarterly</td></tr><tr><td>Form 26Q (consultant TDS)</td><td>Quarterly</td></tr><tr><td>Form 16 + Form 16A</td><td>By June 15 (annual)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF late: 12% interest + damages. TDS 194J missed on consultants: S.201 demand + 1.5%/month interest. Partner draw treated as salary: wrong PF enrolment + TDS mess. 50% basic non-compliance: EPFO scrutiny. BPO overtime not paid: S&amp;E inspector + back wages. Staffing CLRA gap: principal employer liability. S.44ADA not opted: unnecessary bookkeeping cost. Investment proof not verified: TDS shortfall.</p>

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
            <h2 class="section-title">Why Choose Patron for Service Sector Payroll in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in from Nariman Point, BKC, Fort, Lower Parel, Andheri, Powai, Goregaon service hubs. Files with EPFO, ESIC, Income Tax.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">194J + Partner Draw + BPO + Staffing</h3><p class="feature-text">Consultant TDS lifecycle + partner draw per S.40(b) + BPO shift payroll + staffing deployed staff. No other Mumbai firm handles all service sector streams.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Solo Practice to Big 4 Scale</h3><p class="feature-text">S.44ADA sole proprietor to Big 4 with 10,000+ employees. CA/law LLPs. BPO centres. Staffing agencies. Creative agencies. All from one team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including consulting firms, CA/law practices, BPO centres, and staffing agencies across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including consulting firms, professional practices, BPO centres, staffing agencies, and creative firms across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll by Service Business Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Business Type</th><th>Payroll Scope</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Big 4 / Large Consulting</td><td>1,000-10,000+ employees, complex CTC, international mobility, high consultant volume, dual regime</td><td>BKC/Nariman Point; enterprise MIS; transfer pricing integration</td></tr><tr><td>Boutique Consulting / Advisory</td><td>Partner draw S.40(b) + employee salary + consultant 194J in single engagement</td><td>Nariman Point/BKC/Fort; 10-200 staff; dual-stream processing</td></tr><tr><td>CA / CS / Law Practice</td><td>Partner remuneration S.40(b), articled clerks, staff salary, S.44ADA for small firms</td><td>Fort/Churchgate/Nariman Point; S.44ADA advisory; trust accounts</td></tr><tr><td>Advertising / Creative Agency</td><td>100+ freelancers 194J, project-based staff, high variable pay, seasonal surge</td><td>Lower Parel/Andheri/Bandra; photographers/designers/copywriters</td></tr><tr><td>BPO / KPO Centre</td><td>24/7 shift payroll, US/UK/Aus time zones, night allowance, 40-70% attrition, bulk processing</td><td>Andheri/Goregaon/Navi Mumbai; IT/ITES notification; 500-5,000+ agents</td></tr><tr><td>Staffing / Manpower Agency</td><td>Own + deployed dual payroll, per-client attendance, CLRA documentation, client compliance packs</td><td>Pan-Mumbai deployment; 10-100+ client sites; billing reconciliation</td></tr>

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
                
                <ul><li><a href="#">Service Sector Payroll in India</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/payroll-services-for-it-and-software-industry/mumbai">IT Software Payroll in Mumbai</a></li><li><a href="/statutory-audit">Statutory Audit</a></li></ul>

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
                
                <p><strong>Income Tax S.194J:</strong> TDS 10% on professional fees &gt; Rs 30K/year per payee. 26Q quarterly. Form 16A. S.192: salary TDS per dual regime. 24Q quarterly. Form 16.</p><p><strong>Partner Remuneration S.40(b):</strong> First Rs 6L book profit: Rs 1.5L or 90%. Balance: 60%. Interest on capital ≤ 12%. S.10(2A): partner profit share exempt.</p><p><strong>S.44ADA:</strong> Professionals ≤ Rs 75L (95% digital). 50% deemed profit. No books. CA/CS/lawyer/architect/engineer/consultant.</p><p><strong>PF/ESI:</strong> PF: 20+, 12%+12%. ESI: 10+, ≤ Rs 21,000 (mainly admin/support in service sector). Partners excluded.</p><p><strong>Maharashtra:</strong> S&amp;E Act 2017: 9 hrs/day, 48/week. IT/ITES notification: flexible hours + night. PT Act 1975. Min wages for applicable categories.</p><p><strong>Portals:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax</a> | <a href="https://mahakamgar.maharashtra.gov.in" target="_blank" rel="noopener">Maharashtra Labour</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Service Sector Payroll in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Service Sector Payroll in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What payroll compliance applies to service companies in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>PF (20+, 12%+12%), ESI (10+, ≤ Rs 21,000 - mainly admin/support), TDS S.192 (salary) + S.194J (consultant 10%), Maharashtra PT, Maharashtra S&E Act, Payment of Wages/Gratuity/Bonus. BPO/ITES: Maharashtra IT/ITES notification for flexible hours. LLP/partnership: S.40(b) limits on partner remuneration.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is consultant/freelancer payment handled alongside payroll?</h3>
                        <div class="faq-expanded__a"><p>S.194J: TDS 10% when aggregate &gt; Rs 30K/year per payee. Separate from employee S.192. Quarterly 26Q (consultant TDS) separate from 24Q (salary). Annual Form 16A per consultant separate from Form 16 (employees). Patron processes both streams in same monthly cycle with automated threshold tracking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does service sector payroll cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Small practice (<15): Rs 5,000-12,000/month. Mid-size (15-75): Rs 12,000-30,000. Large service (75-300): Rs 30,000-80,000. BPO/KPO (300-2,000+): Rs 60,000-2,50,000. Staffing: Rs 20,000-1,00,000. Ad agency: Rs 15,000-40,000. Consultant 194J add-on (50+): Rs 5,000-20,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is PF and ESI mandatory for service companies?</h3>
                        <div class="faq-expanded__a"><p>PF mandatory for 20+ employees, 12%+12%. ESI for 10+, wages ≤ Rs 21,000 - in service sector mainly admin/support/BPO entry-level. Most professionals earn above Rs 21,000 (no ESI). Partners of LLPs are NOT employees - PF/ESI does not apply. Patron identifies eligible staff and manages compliance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is Section 44ADA for small professional firms?</h3>
                        <div class="faq-expanded__a"><p>Individual professionals and partnership firms with gross receipts ≤ Rs 75L (95%+ digital) can opt for presumptive taxation: 50% deemed profit, no books. Covers CA, CS, lawyer, architect, engineer, consultant. Affects proprietor draw structuring. Patron advises on eligibility and optimal draw.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do service exporters have different payroll considerations?</h3>
                        <div class="faq-expanded__a"><p>Service exporters file LUT for zero-rated GST (Rule 96A). Payroll compliance (PF/ESI/TDS/PT) is same, but employee cost = critical input for service costing, transfer pricing (Form 3CEB for MNCs), and STPI/SEZ benefit tracking. Patron integrates payroll with export accounting.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Consultant ko payment pe TDS kaise?</strong> S.194J: 10% TDS professional fees pe agar saal mein Rs 30K+ ek consultant ko. 26Q quarterly + Form 16A annually. Employee salary ka TDS alag hai (S.192, 24Q, Form 16).</p><p><strong>LLP mein partner ka draw salary se alag kaise?</strong> Partner draw = profit share, uspe PF/ESI/PT/TDS nahi lagta. S.40(b) limits mein firm ko deduction milta hai. Employee salary pe sab statutory deductions lagte hain. Dono ek hi firm se par processing bilkul alag.</p><p><strong>BPO mein night shift allowance?</strong> Maharashtra IT/ITES notification ke under night shift chala sakte hain. 15-25% extra allowance. 9 ghante se zyada pe overtime double wages. Women ko bhi night shift allowed safety conditions ke saath.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">194J Missed = S.201 Demand. Get Consultant TDS Right Today.</h2>
            <div class="content-text">
                
                <p>PF late: 12% interest + damages. TDS 194J missed: S.201 demand + 1.5%/month. Partner draw as salary: wrong PF + TDS mess. 50% basic non-compliance: EPFO scrutiny. BPO overtime not paid: inspector penalty. Staffing CLRA gap: S.21 client liability. S.44ADA not opted: unnecessary cost. Investment proof not verified: TDS shortfall.</p><p><strong>Patron onboards in 5-7 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Service%20Sector%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. From Rs 5,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Firm, Every Stream Processed Correctly</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Service sector payroll in Mumbai ensures professional CTC with 50% basic + flexi-benefits, consultant 194J TDS at scale, partner draw per S.40(b), BPO 24/7 shift payroll, PF/ESI, Maharashtra PT, dual regime TDS, and staffing deployed staff compliance. For Nariman Point, BKC, Fort, Lower Parel, Andheri, Goregaon, Powai, Navi Mumbai service firms.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. CA-led multi-stream payroll: employee salary, consultant TDS, partner draw, BPO shifts, staffing. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Service%20Sector%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Service%20Sector%20Payroll%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Service%20Sector%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Service Sector Payroll Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led service sector payroll in 8 major cities.</p>
      
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services-for-service-sector-businesses/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Payroll and professional compliance</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services-for-it-and-software-industry/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Software Payroll</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Mumbai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect labour code implementation, tax regime updates, GST on services changes, and Maharashtra minimum wage revisions. Next review: June 2026.</p>
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
