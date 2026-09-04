
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
    <title>Hotel & Restaurant Accounting in Mumbai - POS, OTA & GST</title>
    <meta name="description" content="CA-led hospitality payroll in Mumbai. Shift payroll, tips, service charge, PF/ESI, perquisite TDS, excise staff, seasonal workforce for Colaba, BKC, Bandra hotels. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-the-hospitality-industry/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Hotel & Restaurant Accounting in Mumbai - POS, OTA & GST">
    <meta property="og:description" content="CA-led hospitality payroll in Mumbai. Shift payroll, tips, service charge, PF/ESI, perquisite TDS, excise staff, seasonal workforce for Colaba, BKC, Bandra hotels. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-the-hospitality-industry/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hotel & Restaurant Accounting in Mumbai - POS, OTA & GST">
    <meta name="twitter:description" content="CA-led hospitality payroll in Mumbai. Shift payroll, tips, service charge, PF/ESI, perquisite TDS, excise staff, seasonal workforce for Colaba, BKC, Bandra hotels. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Hotel & Restaurant Accounting in Mumbai - POS, OTA & GST",
      "description": "CA-led hospitality payroll in Mumbai. Shift payroll, tips, service charge, PF/ESI, perquisite TDS, excise staff, seasonal workforce for Colaba, BKC, Bandra hotels. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry/mumbai",
      "serviceType": "Hotel & Restaurant Accounting in Mumbai - POS, OTA & GST",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry/mumbai",
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
          "name": "Payroll Hospitality",
          "item": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Hotel & Restaurant Accounting in Mumbai - POS, OTA & GST",
          "item": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What payroll compliance applies to hotels and restaurants in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra S&E Act (9 hrs/day, 48 hrs/week, overtime double, weekly off), PF (20+, 12%+12%), ESI (10+, ≤ Rs 21,000), TDS S.192 (including perquisites + service charge), Maharashtra PT, Payment of Wages/Gratuity/Bonus/Maternity Acts. Bar establishments: Maharashtra Excise Act. All food: FSSAI."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF and ESI mandatory for hotel and restaurant staff?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. PF for 20+ employees, 12%+12% on Basic+DA. ESI for 10+ employees, wages ≤ Rs 21,000 - covers most housekeeping, stewards, kitchen helpers, security, support. Even seasonal staff beyond thresholds may require PF/ESI. Remitted by 15th. Patron handles registration and filing."
          }
        },
        {
          "@type": "Question",
          "name": "How much does hospitality payroll cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Small restaurant/cafe: Rs 5,000-12,000/month. Mid-size restaurant/bar: Rs 12,000-25,000. Restaurant chain (5-20 outlets): Rs 25,000-75,000. Boutique/budget hotel: Rs 25,000-50,000. Business hotel: Rs 50,000-1,50,000. Luxury 5-star: Rs 1,00,000-4,00,000. Cloud kitchen/catering: Rs 10,000-30,000."
          }
        },
        {
          "@type": "Question",
          "name": "How is service charge distributed among staff?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Service charge (5-10% on bills) collected by establishment, distributed per policy as wages - subject to TDS S.192 (not voluntary tip). Must maintain: POS collection records, distribution formula, individual statements. Patron documents full trail from POS collection through pay slip disclosure."
          }
        },
        {
          "@type": "Question",
          "name": "How are tips and service charges taxed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tips (voluntary) = employee income, reportable under 'Other Sources' (direct) or 'Salary' (pooled by employer). Service charge distributed = salary income, TDS S.192. Both taxable for employee. Key: tips are voluntary employee's; service charges are establishment-collected and distributed as wages."
          }
        },
        {
          "@type": "Question",
          "name": "What are overtime rules for hotel staff in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra S&E Act: max 9 hrs/day, 48 hrs/week. Beyond = double ordinary wage. Spread-over max 12 hrs for restaurants. Weekly off mandatory (1 day/week); working on weekly off = overtime. Patron tracks actual hours vs limits and computes overtime automatically."
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
                        Payroll Services for Hotels and Restaurants in Mumbai: CA-Led Shift Payroll, Tips, Service Charge, and Statutory Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> S&E licence, FSSAI, Excise licence (bars), PF/ESI codes, shift rosters, tip/service charge policy, perquisite policy</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000/month for small restaurants and cafes</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Luxury hotels, restaurant chains, bars, cloud kitchens, QSRs, catering companies, cafes, and all hospitality establishments in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding 5-7 days; monthly payroll by 7th; PF/ESI by 15th</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Hospitality%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Hospitality Payroll in Mumbai',
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
    'ctaText'    => 'CA-led hospitality payroll with shifts, tips, service charge, perquisites, PF/ESI, and excise compliance for Mumbai hotels and restaurants.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Establishment</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Hospitality Payroll in Mumbai Services at a Glance</strong></p>
                    <p>Hospitality payroll covers <strong>24/7 shift payroll</strong> (night allowance, overtime double rate per Maharashtra S&amp;E Act), <strong>tips and service charge</strong> management with TDS trail, <strong>perquisite valuation</strong> (meals, accommodation, uniform), <strong>PF/ESI</strong>, <strong>seasonal/banquet staff</strong>, <strong>Maharashtra Excise</strong> (bar staff), department-wise cost tracking, and <strong>60-80% attrition</strong> processing.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>Maharashtra S&amp;E Act; EPF/ESI Acts; IT Act S.192/S.17(2); Maharashtra PT; Excise Act; FSSAI; Payment of Wages/Bonus/Gratuity</td></tr><tr><td>Applicable To</td><td>Luxury hotels, restaurant chains, bars, cloud kitchens, QSRs, catering, cafes</td></tr><tr><td>Timeline</td><td>Payroll by 7th; PF/ESI by 15th; TDS by 7th; PT monthly</td></tr><tr><td>Cost From</td><td>Rs 5,000/month (small restaurant/cafe)</td></tr><tr><td>Key Challenge</td><td>Tip/service charge TDS; shift overtime; perquisite valuation; 60-80% attrition; seasonal surges</td></tr><tr><td>Authority</td><td>EPFO Mumbai; ESIC Mumbai; Maharashtra S&amp;E Inspector; Maharashtra Excise; FSSAI</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai is India's hospitality capital: <strong>Taj, Oberoi, ITC Grand Central, JW Marriott, Trident BKC, Leela, Four Seasons</strong>. Thousands of restaurants, bars, cloud kitchens. Tips/service charge compliance, 24/7 shifts, perquisite valuation, seasonal workforce = unique payroll complexity. Learn more about <a href="#">Hospitality Payroll across India</a>.</p>
                <p>Patron's Marine Lines office handles hospitality-specific payroll with tip/service charge trail and perquisite TDS. Also see <a href="/payroll-services">Payroll Services</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is Hospitality Payroll</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialised salary processing for hotels, restaurants, bars, and food service: <strong>shift-based departmental payroll</strong> (front office, housekeeping, F&amp;B, kitchen, banquets, spa, maintenance, security, admin), <strong>tip pooling and service charge distribution</strong> with TDS trail, <strong>perquisite valuation</strong> (meals, accommodation, uniform), and <strong>seasonal/banquet workforce</strong> management. Must comply with <strong>Maharashtra S&amp;E Act</strong>, <strong>Excise Act</strong> (bars), and <strong>FSSAI</strong>.</p><p><strong>24/7 shifts</strong>: morning/evening/night with night allowance (10-25%) and overtime at double rate (&gt;9 hrs/day or &gt;48 hrs/week). <strong>Tips</strong> = voluntary, employee income. <strong>Service charge</strong> (5-10%) = collected by establishment, distributed as wages, TDS S.192. <strong>Perquisites</strong>: meals &gt; Rs 50/meal taxable; accommodation 15% of salary (Mumbai). <strong>60-80% annual attrition</strong> for line staff. <strong>Seasonal surges</strong>: wedding season, Diwali, Christmas/New Year.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Hospitality Payroll in Mumbai:</strong></p>
                    <p><strong>Tips vs Service Charge:</strong> Tips = voluntary, employee income. Service charge = establishment collects, distributes as wages, TDS S.192. Both taxable for employee.</p><p><strong>Perquisites:</strong> Meals &gt; Rs 50/meal taxable S.17(2). Accommodation: Mumbai = 15% salary (furnished). Uniform: exempt for duty.</p><p><strong>Shift/Overtime:</strong> Maharashtra S&amp;E: max 9 hrs/day, 48 hrs/week. Overtime = double wages. Spread-over: 12 hrs for restaurants. Weekly off mandatory.</p><p><strong>Excise (Bars):</strong> FL-III/FL-IV licence. Bar staff named on records. Excise inspection may verify staff.</p><p><strong>Seasonal:</strong> Wedding Nov-Feb. Festival peaks. Rapid banquet staff onboarding. Pro-rata wages. Quick F&amp;F.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Hospitality Payroll in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Shifts + Tips + Perquisites</span>
                        <strong>Hospitality Payroll</strong>
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
            <h2 class="section-title">Who Needs Hospitality Payroll in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Luxury 5-Star Hotels (Taj, Oberoi, ITC, JW Marriott, Trident, Leela, Four Seasons):</strong> 500-2,000+ staff across 10+ departments. Shift payroll, tip/service charge, perquisites, seasonal banquet.</p><p><strong>Business Hotels (BKC, Andheri, Powai):</strong> 100-500 staff. Corporate event seasonal peaks. Multi-department payroll.</p><p><strong>Fine-Dining Restaurants (Colaba, BKC, Lower Parel, Bandra):</strong> 30-100 staff. High-skill chefs. Service charge compliance. Tip pools.</p><p><strong>QSR and Casual-Dining Chains (50-200 outlets):</strong> High-volume, high-turnover hourly staff. Multi-outlet payroll. Outlet-wise cost tracking.</p><p><strong>Bars/Lounges/Pubs (Lower Parel, Andheri, Bandra):</strong> Maharashtra Excise compliance. Bar staff records. Night shift. Tip/service charge.</p><p><strong>Cloud Kitchens (Andheri, Powai, Navi Mumbai):</strong> Swiggy/Zomato brands. Kitchen staff. Delivery coordination. TCS S.52 reconciliation.</p><p><strong>Catering Companies and Banquet Halls:</strong> Wedding and corporate event surges. Seasonal staff. Rapid onboarding/settlement.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>24/7 Shift-Based Payroll</td><td>Morning/evening/night rotation. Night allowance 10-25%. Split shift tracking (restaurants). Overtime double rate (Maharashtra S&amp;E: &gt;9 hrs/day or &gt;48 hrs/week). Weekly off tracking. Department-wise: front office, housekeeping, F&amp;B, kitchen, banquets, spa, maintenance, security, admin.</td></tr><tr><td>Tips and Service Charge</td><td>Tip pooling per policy. Service charge (5-10%): collected → distributed as wages → TDS S.192. POS trail. Distribution formula. Staff acknowledgments. Monthly statements. GST: service charge not subject to GST (CBIC circular). Transparent allocation for retention.</td></tr><tr><td>Perquisite Valuation and TDS</td><td>Meals: &gt; Rs 50/meal taxable S.17(2)/Rule 3(7)(iii). Accommodation: Mumbai = 15% salary (furnished), 10% (unfurnished), minus rent recovered. Uniform: exempt for duty. All affect TDS S.192. Computed per staff category.</td></tr><tr><td>PF/ESI Registration and Filing</td><td>EPFO Mumbai: 20+ employees, 12%+12%, ECR by 15th. ESIC Mumbai: 10+ employees, ≤ Rs 21,000 (housekeeping, stewards, kitchen helpers, support). UAN + KYC. PF transfer for high-attrition. Multi-location codes per outlet structure.</td></tr><tr><td>Seasonal and Banquet Staff</td><td>Wedding season (Nov-Feb), festival peaks (Diwali, Christmas/New Year). Rapid onboarding: daily-wage banquet servers, event stewards, temp kitchen. Pro-rata wages. PF/ESI assessment. Quick F&amp;F. Payment of Wages Act compliance.</td></tr><tr><td>Overtime and Working Hours</td><td>Maharashtra S&amp;E: max 9 hrs/day, 48 hrs/week. Double wages for overtime. Spread-over max 12 hrs (restaurants). Night shift with safety conditions. Weekly off mandatory. Compensatory off if worked. Registers maintained for inspector.</td></tr><tr><td>Maharashtra Excise (Bar Staff)</td><td>FL-III (restaurant + bar), FL-IV (beer/wine bar). Bar staff named on records. Excise inspection staff verification. Payroll records available for licence renewal.</td></tr><tr><td>Gratuity, Bonus, Maharashtra PT</td><td>Gratuity 5+ years (15/26 × salary × years). Bonus 8.33-20%. Maharashtra PT per slab. High attrition = fewer reach 5-year gratuity but tracking essential. Fixed-term employees may be eligible under new labour codes.</td></tr>

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
            <h2 class="section-title">6-Step Hospitality Payroll Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office. Files with EPFO, ESIC, Maharashtra S&E Inspector, Excise Dept, and Income Tax.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Establishment Assessment</h3><p class="step-description">CA reviews hotel/restaurant type, departments, shifts, tip/service charge policy, seasonal pattern, excise licence (bar), FSSAI, staff categories, perquisite policies (meals, accommodation, uniform). Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Departments mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Policies documented</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Payroll Structure and Compliance</h3><p class="step-description">Department-wise salary. Shift patterns + night allowance. Tip pool/service charge formula. Perquisite rules per IT Act. PF/ESI codes. Maharashtra PT. Overtime rules per S&amp;E Act. Seasonal onboarding templates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shifts configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tip trail set up</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Shifts + Tips + Perquisites</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Live</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Attendance, Shift, and Roster</h3><p class="step-description">Department-wise biometric/POS/duty roster. Shift hours: morning/evening/night. Overtime against 9hr/48hr cap. Weekly off. Split shifts (restaurants). Casual/banquet staff days. Leave: earned, casual, sick, maternity.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Rosters compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Overtime flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Compiled</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">All Departments + OT</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Hours Tracked</text></svg></div><span class="illustration-label">Compiled</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Salary, Tip, and Fee Processing</h3><p class="step-description">Gross per department. Night allowance + overtime double wages added. PF (12%) + ESI (0.75%) + TDS S.192 (incl perquisites) + PT deducted. Tips distributed per pool. Service charge per policy. Net by 7th. Pay slips with shift/OT/tip breakdowns.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Salaries processed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tips distributed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Processed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Salary + Tips + Perquisites</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">By 7th Every Month</text></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Filing</h3><p class="step-description">PF ECR by 15th. ESI by 15th. TDS by 7th. PT monthly. 24Q quarterly. Excise staff records maintained. FSSAI food handler compliance tracked. Maharashtra S&amp;E registers updated.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All filings done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Excise records ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Filed</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PF + ESI + TDS + PT + Excise</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">All Compliance Covered</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End and MIS Reporting</h3><p class="step-description">Form 16 by June 15. Increments. Gratuity. Bonus 8.33-20%. Outlet-wise staff cost MIS (rooms, F&amp;B, banquets, spa, kitchen, admin). Overtime summary. Tip/service charge report. Seasonal cost. Attrition. Labour cost as % of revenue.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-end closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Form 16 + Gratuity + MIS</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Hospitality Payroll</h2>
            <div class="content-text">
                
                <ul><li>Shops &amp; Establishment Licence</li><li>FSSAI Licence + Maharashtra Excise Licence (bars)</li><li>BMC Eating House Licence</li><li>PF Establishment Code + ESI Code</li><li>Staff Appointment Letters with Department &amp; Grade</li><li>Shift Schedule / Duty Roster</li><li>Tip/Service Charge Distribution Policy</li><li>Perquisite Policy (meals/accommodation/uniform)</li><li>Staff Aadhaar + PAN + Bank Details</li><li>Maharashtra PT Registration + Previous PF/ESI Challans</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> BMC trade licence. Maharashtra Excise FL-III/FL-IV (bar). Tourism classification certificate (starred hotels). Maharashtra S&amp;E registration certificate.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Hospitality Payroll Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tip and Service Charge Compliance</td><td>Service charge (5-10%) distributed to staff = wages, subject to TDS S.192. Tips = employee income, often underdocumented. Many restaurants incorrectly treat service charge as exempt or miss TDS. DPIIT 2017: service charge voluntary for customers. CBIC: not subject to GST.</td><td>Patron documents full trail: POS collection → pool formula → individual distribution → TDS → pay slip. Zero compliance gaps.</td></tr><tr><td>Overtime and Split Shift Complexity</td><td>Split shifts: server works lunch + dinner with gap. Spread-over max 12 hrs. Overtime &gt;9 hrs/day = double wages. Understaffing pushes staff into overtime. Many don't compute or pay correctly = back-wage liability on inspector visit or complaint.</td><td>Patron tracks actual hours vs legal limits automatically. Overtime computed correctly. Registers maintained for inspector readiness.</td></tr><tr><td>Perquisite Valuation for TDS</td><td>Meals &gt; Rs 50/meal taxable. Chef eating 2 meals/day × 25 days = Rs 5,000/month added to income. Accommodation: 15% salary (Mumbai furnished). Most hospitality payroll providers ignore perquisites = TDS shortfall notices.</td><td>Patron computes perquisite per staff category: meals, accommodation, uniform. TDS includes all perquisites. No IT short-deduction notice.</td></tr><tr><td>High Attrition + Seasonal Workforce</td><td>60-80% annual turnover for line staff. Wedding season Nov-Feb = 30-50% additional banquet/event staff. 140+ exits and joiners per year for 200-staff hotel. Constant PF transfer, gratuity, F&amp;F processing.</td><td>Bulk onboarding/exit pipeline. Automated F&amp;F. PF transfer facilitated. Seasonal staff templates for rapid engagement. 7-10 day settlement.</td></tr><tr><td>Multi-Outlet Restaurant Chains</td><td>10-200 outlets. Each has own shift roster, tip pool, operational staff. Centralised payroll with outlet-wise processing. Staff transfers between outlets. Labour cost per outlet critical for restaurant economics.</td><td>Outlet-wise payroll processing with consolidated reporting. Per-outlet MIS: headcount, cost, overtime, tip distribution. Staff transfer without PF disruption.</td></tr>

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
            <h2 class="section-title">Hospitality Payroll Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Restaurant / Cafe (&lt;20 staff)</td><td>Rs 5,000 - Rs 12,000/month (3 days onboarding)</td></tr><tr><td>Mid-Size Restaurant / Bar (20-60)</td><td>Rs 12,000 - Rs 25,000/month (5 days)</td></tr><tr><td>Restaurant Chain (5-20 outlets)</td><td>Rs 25,000 - Rs 75,000/month (7 days)</td></tr><tr><td>Boutique / Budget Hotel (50-150)</td><td>Rs 25,000 - Rs 50,000/month (7 days)</td></tr><tr><td>Business Hotel (150-500)</td><td>Rs 50,000 - Rs 1,50,000/month (10 days)</td></tr><tr><td>Luxury 5-Star (500-2,000+)</td><td>Rs 1,00,000 - Rs 4,00,000/month (10-15 days)</td></tr><tr><td>Cloud Kitchen / Catering</td><td>Rs 10,000 - Rs 30,000/month (5 days)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Hospitality Payroll in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Hospitality%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding</td><td>5-7 days (Marine Lines Mumbai)</td></tr><tr><td>Monthly Duty Roster + Shifts</td><td>By 3rd (all departments; OT flagged)</td></tr><tr><td>Salary + Tip/SC Processing</td><td>By 5th (department-wise + service charge)</td></tr><tr><td>Disbursement</td><td>By 7th (Payment of Wages Act)</td></tr><tr><td>PF/ESI Filing</td><td>By 15th (ECR + ESI contribution)</td></tr><tr><td>Seasonal Staff F&amp;F</td><td>7-10 days per batch</td></tr><tr><td>Form 16</td><td>By June 15 (annual)</td></tr><tr><td>Outlet-wise MIS</td><td>Monthly (labour cost as % of revenue)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF late: 12% interest + damages. ESI late: 12% interest. TDS missed on service charge: demand + 1.5%/month. Overtime not paid: S&amp;E Inspector complaint + back wages + prosecution. Perquisite not valued: TDS short-deduction notice. Excise staff records missing: licence renewal jeopardised. Seasonal staff not settled: Payment of Wages violation. No outlet-wise cost tracking: revenue leakage.</p>

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
            <h2 class="section-title">Why Choose Patron for Hospitality Payroll in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in from Colaba, Juhu, Bandra, BKC, Lower Parel, Andheri hotel and restaurant clusters. Files with EPFO, ESIC, S&amp;E Inspector, Excise.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Shifts + Tips + Perquisites</h3><p class="feature-text">24/7 department payroll + tip/service charge TDS trail + perquisite valuation + seasonal staff. No other Mumbai firm bundles all hospitality payroll layers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Outlet-Wise MIS</h3><p class="feature-text">Labour cost as % of revenue per outlet (rooms, F&amp;B, banquets, spa). Department-wise overtime. Tip/service charge transparency. Attrition tracking.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including luxury hotels, restaurant chains, bars, cloud kitchens, and catering companies across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including hotels, restaurants, bars, cloud kitchens, and catering companies across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll by Hospitality Establishment Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Establishment Type</th><th>Payroll Scope</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Luxury 5-Star Hotel</td><td>10+ departments, 24/7 shifts, tips/SC, perquisites, seasonal banquet, excise (bar)</td><td>Taj/Oberoi/ITC/JW Marriott; 500-2,000+ staff; outlet-wise MIS</td></tr><tr><td>Business / Boutique Hotel</td><td>Departments, shifts, tips, perquisites, seasonal, PF/ESI</td><td>BKC/Andheri/Powai; 100-500 staff; corporate event peaks</td></tr><tr><td>Fine-Dining Restaurant</td><td>Chef + service staff + kitchen, tips/SC, split shifts, perquisites, excise</td><td>Colaba/BKC/Lower Parel/Bandra; 30-100 staff; high-skill chefs</td></tr><tr><td>QSR / Casual-Dining Chain</td><td>Multi-outlet, high-turnover hourly, outlet-wise cost, standardised payroll</td><td>50-200 outlets Mumbai; bulk onboarding/exit; outlet labour cost %</td></tr><tr><td>Bar / Lounge / Pub</td><td>Excise FL-III/FL-IV, bar staff records, night shifts, tips, PF/ESI</td><td>Lower Parel/Andheri/Bandra; excise compliance critical</td></tr><tr><td>Cloud Kitchen / Catering</td><td>Kitchen staff shifts, delivery coordination, seasonal event surges</td><td>Andheri/Powai/Navi Mumbai; Swiggy/Zomato TCS reconciliation</td></tr>

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
                
                <ul><li><a href="#">Hospitality Payroll in India</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/fssai-registration/mumbai">FSSAI Registration in Mumbai</a></li></ul>

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
                
                <p><strong>Maharashtra S&amp;E Act:</strong> Hotels and restaurants. Max 9 hrs/day, 48 hrs/week. Overtime double wages. Spread-over max 12 hrs (restaurants). Night shift permitted with safety. Weekly off mandatory. Registers for inspector.</p><p><strong>PF/ESI:</strong> 20+ employees: PF 12%+12%, ECR by 15th. 10+ employees: ESI 3.25%+0.75% for ≤ Rs 21,000. Covers most housekeeping, stewards, kitchen helpers, support.</p><p><strong>Tips/Service Charge:</strong> Tips = voluntary, employee income, reportable. Service charge = establishment distributes as wages, TDS S.192. Not subject to GST (CBIC). DPIIT 2017: voluntary for customers.</p><p><strong>Perquisites S.17(2):</strong> Meals &gt; Rs 50 taxable. Accommodation: Mumbai 15% salary (furnished). Uniform: exempt for duty.</p><p><strong>Excise:</strong> FL-III/FL-IV. Bar staff on records. Inspection verification.</p><p><strong>Portals:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Hospitality Payroll in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Hospitality Payroll in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What payroll compliance applies to hotels and restaurants in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra S&E Act (9 hrs/day, 48 hrs/week, overtime double, weekly off), PF (20+, 12%+12%), ESI (10+, ≤ Rs 21,000), TDS S.192 (including perquisites + service charge), Maharashtra PT, Payment of Wages/Gratuity/Bonus/Maternity Acts. Bar establishments: Maharashtra Excise Act. All food: FSSAI.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is PF and ESI mandatory for hotel and restaurant staff?</h3>
                        <div class="faq-expanded__a"><p>Yes. PF for 20+ employees, 12%+12% on Basic+DA. ESI for 10+ employees, wages ≤ Rs 21,000 - covers most housekeeping, stewards, kitchen helpers, security, support. Even seasonal staff beyond thresholds may require PF/ESI. Remitted by 15th. Patron handles registration and filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does hospitality payroll cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Small restaurant/cafe: Rs 5,000-12,000/month. Mid-size restaurant/bar: Rs 12,000-25,000. Restaurant chain (5-20 outlets): Rs 25,000-75,000. Boutique/budget hotel: Rs 25,000-50,000. Business hotel: Rs 50,000-1,50,000. Luxury 5-star: Rs 1,00,000-4,00,000. Cloud kitchen/catering: Rs 10,000-30,000.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is service charge distributed among staff?</h3>
                        <div class="faq-expanded__a"><p>Service charge (5-10% on bills) collected by establishment, distributed per policy as wages - subject to TDS S.192 (not voluntary tip). Must maintain: POS collection records, distribution formula, individual statements. Patron documents full trail from POS collection through pay slip disclosure.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How are tips and service charges taxed?</h3>
                        <div class="faq-expanded__a"><p>Tips (voluntary) = employee income, reportable under 'Other Sources' (direct) or 'Salary' (pooled by employer). Service charge distributed = salary income, TDS S.192. Both taxable for employee. Key: tips are voluntary employee's; service charges are establishment-collected and distributed as wages.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are overtime rules for hotel staff in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra S&E Act: max 9 hrs/day, 48 hrs/week. Beyond = double ordinary wage. Spread-over max 12 hrs for restaurants. Weekly off mandatory (1 day/week); working on weekly off = overtime. Patron tracks actual hours vs limits and computes overtime automatically.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Hotel staff ka overtime kaise?</strong> Maharashtra S&amp;E Act: 9 ghante/din ya 48 ghante/hafta se zyada = double wages. Night shift allowance alag 10-25%. Weekly off pe kaam = overtime rate.</p><p><strong>Service charge aur tip mein fark?</strong> Tip = customer voluntary deta hai, employee ka income. Service charge (5-10%) = restaurant collect karta hai, staff mein distribute = wages, TDS S.192 katta hai.</p><p><strong>Seasonal banquet staff ka PF?</strong> Agar 20+ employees hain toh PF applicability engagement terms pe depend. Short-term daily wage pe exemption ho sakti hai par documentation zaroori.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Service Charge TDS Missed = IT Demand Notice. Get Compliant Today.</h2>
            <div class="content-text">
                
                <p>PF late: 12% interest + damages. ESI late: 12% interest. TDS missed on service charge: demand + 1.5%/month. Overtime not paid: S&amp;E Inspector complaint + back wages. Perquisite not valued: TDS short-deduction. Excise staff records missing: licence risk. Seasonal staff not settled: Payment of Wages violation.</p><p><strong>Patron onboards in 5-7 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Hospitality%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. From Rs 5,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Hotel or Restaurant, Every Shift Compliant</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Hospitality payroll in Mumbai ensures 24/7 shift processing with night allowance and overtime, tip/service charge compliance with TDS trail, perquisite valuation (meals, accommodation, uniform), PF/ESI, Maharashtra S&amp;E and Excise Acts, and seasonal workforce management. For Colaba, Juhu, Bandra, BKC, Lower Parel, Andheri, Powai, Navi Mumbai hotels and restaurants.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. Sector-specific payroll, tip/service charge compliance, outlet-wise MIS, perquisite TDS. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Hospitality%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Hospitality%20Payroll%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20Hospitality%20Payroll%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Hospitality Payroll Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led hospitality payroll in 8 major cities.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Payroll and hospitality compliance</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/fssai-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect GST on restaurants, excise, minimum wage revisions, and hospitality labour compliance updates. Next review: June 2026.</p>
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
