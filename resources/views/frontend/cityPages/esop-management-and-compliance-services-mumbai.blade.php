
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ESOP Management - Vesting, Tax & Cap Table in Mumbai</title>
    <meta name="description" content="CA-led ESOP management and compliance in Mumbai. Scheme design, valuation, perquisite tax S.17(2)(vi), Ind AS 102, TDS, RoC for Powai, BKC, Nariman Point companies. Call +91 945 945 6700.">
    <meta name="keywords" content="ESOP M&Anagement and Compliance Services Mumbai, ESOP M&Anagement and Compliance Services in Mumbai, ESOP M&Anagement and Compliance Services services in Mumbai, ESOP services Mumbai, ESOP M&Anagement and Compliance Services cost Mumbai, ESOP M&Anagement and Compliance Services consultants Mumbai, CA firm for ESOP M&Anagement and Compliance Services Mumbai, ESOP advisory Mumbai">
    <link rel="canonical" href="/esop-management-and-compliance-services/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESOP Management - Vesting, Tax & Cap Table in Mumbai | Patron Accounting">
    <meta property="og:description" content="CA-led ESOP management and compliance in Mumbai. Scheme design, valuation, perquisite tax S.17(2)(vi), Ind AS 102, TDS, RoC for Powai, BKC, Nariman Point companies. Call +91 945 945 6700.">
    <meta property="og:url" content="/esop-management-and-compliance-services/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESOP Management - Vesting, Tax & Cap Table in Mumbai | Patron Accounting">
    <meta name="twitter:description" content="CA-led ESOP management and compliance in Mumbai. Scheme design, valuation, perquisite tax S.17(2)(vi), Ind AS 102, TDS, RoC for Powai, BKC, Nariman Point companies. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESOP Management in Mumbai - Vesting, Tax & Cap Table",
      "description": "CA-led ESOP management and compliance in Mumbai. Scheme design, valuation, perquisite tax S.17(2)(vi), Ind AS 102, TDS, RoC for Powai, BKC, Nariman Point companies. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/esop-management-and-compliance-services/mumbai",
      "serviceType": "ESOP Management in Mumbai - Vesting, Tax & Cap Table",
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
        "url": "https://www.patronaccounting.com/esop-management-and-compliance-services/mumbai",
        "price": "25000"
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
          "name": "ESOP Management & Compliance - Vesting, Tax & Cap Table",
          "item": "https://www.patronaccounting.com/esop-management-and-compliance-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESOP Management in Mumbai - Vesting, Tax & Cap Table",
          "item": "https://www.patronaccounting.com/esop-management-and-compliance-services/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is ESOP and how is it taxed in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOP gives employees the right to buy shares at exercise price after vesting. Tax at two stages: exercise (perquisite S.17(2)(vi) on FMV minus exercise price, as salary up to 42.7%) and sale (capital gains on sale price minus FMV at exercise). Employer deducts TDS S.192. S.80-IAC startups can defer perquisite tax."
          }
        },
        {
          "@type": "Question",
          "name": "Is perquisite tax payable at exercise or sale?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "At exercise - not sale. FMV on exercise date minus exercise price = perquisite, taxed as salary under S.17(2)(vi). Employer deducts TDS S.192. At sale: separate capital gains. S.80-IAC eligible startups can defer perquisite up to 48 months or until sale/exit."
          }
        },
        {
          "@type": "Question",
          "name": "How much does ESOP compliance cost in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Scheme design: quoted on a scoping call. Single exercise event: quoted on a scoping call. Annual Ind AS 102: quoted on a scoping call. Merchant Banker coordination: quoted on a scoping call. Listed SEBI SBEB annual: quoted on a scoping call. Cross-border per employee: quoted on a scoping call."
          }
        },
        {
          "@type": "Question",
          "name": "Can DPIIT startups defer ESOP perquisite tax?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes - if startup also has S.80-IAC certification (separate from DPIIT). Perquisite tax + TDS deferred until earliest of: share sale, cessation of employment, or 48 months from end of assessment year of allotment. Deferral shifts payment, doesn't eliminate tax. Patron assists with DPIIT + S.80-IAC."
          }
        },
        {
          "@type": "Question",
          "name": "What valuation is needed for ESOP exercise?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Listed: average of opening + closing price on exercise date. Unlisted: Category I Merchant Banker certificate ≤ 180 days from exercise per Rule 3(8). For Ind AS 102: grant-date fair value via Black-Scholes/Binomial. Patron coordinates both valuations."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between ESOPs and sweat equity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESOPs = future right to buy at exercise price after vesting (forward-looking incentive). Sweat equity = shares issued immediately for past non-cash contributions (IP, value addition). ESOPs have vesting; sweat equity does not. Both taxed S.17(2)(vi) but at different triggers: ESOPs at exercise, sweat equity at allotment."
          }
        }
      ],
      "datePublished": "2026-06-24T08:00:00+05:30",
      "dateModified": "2026-06-24T08:00:00+05:30"
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
                        ESOPs Management and Compliance Services in Mumbai: Scheme Design, Valuation, Taxation, and Accounting for Startups and Corporates
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> ESOP scheme/plan document, Board and shareholder resolutions, employee grant letters, exercise notices, valuation reports, Form 16</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 25,000 per ESOP compliance engagement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Startups (unlisted Pvt Ltd), listed companies, foreign subsidiaries, and any Mumbai company issuing ESOPs, RSUs, sweat equity</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> ESOP scheme setup 15-30 days; ongoing compliance per exercise event; annual Ind AS 102 at year-end</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 25,000/engagement</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Management%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'ESOP Management in Mumbai',
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
    'ctaText'    => 'CA-led ESOP management with scheme design, valuation, perquisite tax, Ind AS 102, and RoC compliance for Mumbai startups and corporates.',
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Company Type</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOPs Management & Compliance in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESOP Management in Mumbai Services at a Glance</strong></p>
                    <p>ESOP management covers the full lifecycle: <strong>scheme design</strong> (Companies Act S.62(1)(b) / SEBI SBEB 2021), <strong>Black-Scholes valuation</strong>, grant/vesting, <strong>exercise processing</strong> with <strong>perquisite tax S.17(2)(vi)</strong> (FMV - exercise price, taxed as salary up to 42.7%), <strong>TDS S.192</strong>, <strong>Merchant Banker FMV</strong> (unlisted), <strong>Ind AS 102</strong> expense, <strong>RoC PAS-3</strong>, <strong>capital gains</strong> at sale, and <strong>S.80-IAC deferral</strong> for eligible startups.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Laws</td><td>Companies Act S.62(1)(b); SEBI SBEB 2021; IT Act S.17(2)(vi), S.192, S.80-IAC; Ind AS 102</td></tr><tr><td>ESOP Lifecycle</td><td>Grant → Vesting (1-4 yrs) → Exercise (perquisite tax) → Holding → Sale (capital gains)</td></tr><tr><td>Taxation</td><td>Exercise: perquisite up to 42.7%. Sale: listed STCG 20%/LTCG 12.5%; unlisted STCG slab/LTCG 12.5%</td></tr><tr><td>Valuation</td><td>Listed: stock exchange avg. Unlisted: Merchant Banker (≤ 180 days). Ind AS 102: Black-Scholes</td></tr><tr><td>Cost From</td><td>Rs 25,000 per exercise event compliance</td></tr><tr><td>Authority</td><td>RoC Mumbai; Income Tax CIT; SEBI Mumbai; DPIIT</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai is India's startup and corporate capital. <strong>Powai, BKC, Lower Parel</strong> startups use ESOPs to attract talent. <strong>Nariman Point</strong> listed companies operate SEBI SBEB schemes. <strong>Andheri, BKC</strong> MNC subsidiaries have cross-border ESOPs. Compliance spans corporate law, tax, accounting, and securities. Learn more about <a href="#">ESOP Management across India</a>.</p>
                <p>Patron's Marine Lines office handles ESOP scheme design, valuation, perquisite tax, Ind AS 102, and RoC filings. Also see <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a> and <a href="/statutory-audit">Statutory Audit</a>.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: WHAT IS GSTAT APPEAL FILING -->
<section class="content-section" id="what-section">
    <div class="content-container">
        <div class="two-column">
            <div class="column-content">
                <h2 class="section-title">What Is ESOP Management & Compliance</h2>
                <div class="content-text what-is-definition">
                    
                    <p>End-to-end administration of Employee Stock Option Plans: <strong><a href="/esop-scheme-design/mumbai">scheme design</a></strong>, option valuation, grant management, <a href="/esop-vesting-and-forfeiture-tracking/mumbai">vesting tracking</a>, <strong>exercise processing with perquisite tax + TDS</strong>, share allotment + RoC filing, <strong>Ind AS 102 accounting</strong>, capital gains advisory, and regulatory reporting (SEBI for listed, RoC for all).</p><p>An ESOP gives employees the right to buy shares at <strong>exercise price</strong> after <strong>vesting (1-4 years)</strong>. At grant: Board resolution, no tax. During vesting: <strong>Ind AS 102 expense</strong> in P&amp;L (Black-Scholes fair value). At exercise: <strong>perquisite = FMV - exercise price</strong> (S.17(2)(vi), up to 42.7%). Employer deducts <strong>TDS S.192</strong>. Unlisted FMV: <strong>Merchant Banker certificate (≤ 180 days)</strong>. PAS-3 within 30 days. At sale: <strong>capital gains</strong> on sale price - FMV at exercise (cost per S.49(2AA)).</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESOP Management in Mumbai:</strong></p>
                    <p><strong>S.17(2)(vi) Perquisite:</strong> FMV at exercise minus exercise price. Taxed as salary. Up to 42.7%. Employer TDS S.192.</p><p><strong>Merchant Banker FMV:</strong> Category I SEBI-registered. For unlisted exercise. Certificate ≤ 180 days old. Rule 3(8).</p><p><strong>Ind AS 102:</strong> Share-based payment expense. Grant-date fair value via Black-Scholes/Binomial. Recognised over vesting in P&amp;L. Forfeitures adjusted.</p><p><strong>S.80-IAC Deferral:</strong> DPIIT + S.80-IAC certified startups. Perquisite tax deferred until sale, exit, or 48 months.</p><p><strong>SEBI SBEB 2021:</strong> Listed companies. ESOPs/RSUs/SARs. Compensation committee. Annual disclosure. Scheme filed with exchanges.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESOP Management in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>S.17(2)(vi) + Ind AS 102</span>
                        <strong>ESOP Compliance</strong>
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
            <h2 class="section-title">Who Needs ESOP Management in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Venture-Funded Startups (Powai, BKC, Lower Parel):</strong> ESOPs to attract tech talent. Scheme design S.62(1)(b), Rule 12. Merchant Banker valuation. S.80-IAC deferral advisory.</p><p><strong>Listed Companies (Nariman Point, BKC, Lower Parel):</strong> SEBI SBEB 2021 governed ESOP/RSU schemes. Compensation committee. Annual disclosures. Ongoing exercise processing.</p><p><strong>MNC Subsidiaries (BKC, Andheri):</strong> Employees receive foreign parent ESOPs. Cross-border perquisite tax. DTAA credit. Form 16 reporting. FEMA compliance.</p><p><strong>Bootstrapped Companies:</strong> First-time ESOP introduction. Full scheme design, valuation, shareholder approval, ongoing administration.</p><p><strong>Companies with Exercise Events:</strong> ESOP pools approaching exercise. Merchant Banker valuation. TDS computation. RoC filing. Employee communication.</p><p><strong>Departing Employees with ESOPs:</strong> Exit settlement. Accelerated vesting decisions. Tax implications advisory. Buyback for unlisted.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Management Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Scheme Design</td><td>Plan document per S.62(1)(b) / SEBI SBEB 2021. Compensation committee. Board + shareholder resolutions. Pool sizing + dilution analysis. Vesting schedule. Exercise price. ESOP trust (if applicable). Listed: scheme filed with exchanges.</td></tr><tr><td>ESOP Valuation</td><td>Grant-date: Black-Scholes/Binomial for Ind AS 102. Exercise-date: listed = stock exchange avg; unlisted = Merchant Banker certificate (≤ 180 days, Rule 3(8)). Coordination with SEBI-registered Merchant Banker.</td></tr><tr><td>Perquisite Tax + TDS (S.17(2)(vi) + S.192)</td><td>Perquisite = FMV - exercise price. Taxed as salary (up to 42.7%). TDS deducted + deposited by 7th. Form 16 with perquisite. S.80-IAC deferral advisory for eligible startups.</td></tr><tr><td>Capital Gains Advisory</td><td>Sale: gain = sale price - FMV at exercise (S.49(2AA)). Listed: STCG 20% / LTCG 12.5%. Unlisted: STCG slab / LTCG 12.5%. Sell-to-cover strategy. Tax-efficient timing. Cross-border DTAA.</td></tr><tr><td>Ind AS 102 Accounting</td><td>Share-based payment expense over vesting. Grant-date fair value (Black-Scholes). Total cost = FV per option × expected vesting. Graded/straight-line. Forfeitures adjusted. Cash-settled: mark-to-market. Quarterly + annual disclosures.</td></tr><tr><td>RoC and Regulatory Filings</td><td>PAS-3 within 30 days of allotment. SH-13. Updated share capital with RoC Mumbai. Listed: SEBI SBEB annual disclosure in Directors' Report. DPIIT/S.80-IAC certification.</td></tr><tr><td>Cross-Border ESOP Compliance</td><td>Foreign parent ESOPs for Mumbai employees. Rule 3(8) FMV on foreign exchange. TDS by Indian employer S.192. DTAA credit. FEMA for foreign shares. Form 16 reporting. Sell-to-cover coordination.</td></tr><tr><td>ESOP Exit and Settlement</td><td>Resignation: unvested lapse, vested exercisable within post-termination period. Retirement: accelerated vesting if plan permits. Buyback for unlisted. Pool reallocation of lapsed. Tax advisory per exit scenario.</td></tr>

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
            <h2 class="section-title">6-Step ESOP Management Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office. ESOP scheme design, valuation, tax, accounting, and RoC from one CA+CS team.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">ESOP Scheme Design</h3><p class="step-description">CA+CS review equity structure, funding stage, retention goals. ESOP pool sized (typically 5-15% for startups). Scheme drafted per S.62(1)(b) / SEBI SBEB 2021. Board + shareholder resolutions. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Pool sized</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Designed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Valuation</h3><p class="step-description">Grant-date fair value via Black-Scholes for Ind AS 102. Unlisted: Merchant Banker engaged for FMV (valid 180 days). Listed: stock exchange price documented. Cap table updated with ESOP pool.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FMV certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cap table updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Valued</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Black-Scholes + MB FMV</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Certificate Ready</text></svg></div><span class="illustration-label">Valued</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Grant and Vesting</h3><p class="step-description">Grant letters issued: exercise price, vesting schedule, plan terms. Vesting tracker maintained (cliff + graded dates). Ind AS 102 expense begins from grant date. Quarterly expense booked in P&amp;L.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Grants issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ind AS 102 started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Granted</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Vesting Tracked + Expense</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">Options Active</text></svg></div><span class="illustration-label">Granted</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Exercise Processing</h3><p class="step-description">Exercise notice. FMV determined. Perquisite = FMV - exercise price. TDS at slab rate deducted + deposited by 7th. Shares allotted. PAS-3 with RoC Mumbai within 30 days. Share certificate/DEMAT credit. S.80-IAC deferral if eligible.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shares allotted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Exercised</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">TDS + PAS-3 + Allotment</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Shares Issued</text></svg></div><span class="illustration-label">Exercised</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Annual Accounting and Reporting</h3><p class="step-description">Ind AS 102 expense finalised. Forfeiture adjustments. Annual disclosures: options outstanding, weighted avg exercise price, contractual life, assumptions. Form 16 with perquisite. Listed: SEBI SBEB annual in Directors' Report.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ind AS 102 done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Reported</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Ind AS 102 + Form 16 + SEBI</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Audit-Ready</text></svg></div><span class="illustration-label">Reported</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Sale Advisory and Capital Gains</h3><p class="step-description">Capital gains = sale price - FMV at exercise. STCG/LTCG classified by holding period. Tax-efficient timing advised. Cross-border: DTAA credit. ITR with salary (perquisite) + capital gains (sale).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax optimised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Complete</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Perquisite + Cap Gains</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Tax-Efficient</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ESOP Compliance</h2>
            <div class="content-text">
                
                <ul><li>Company Incorporation Documents (COI, MOA, AOA)</li><li>Board + Shareholder Resolutions for ESOP Scheme</li><li>ESOP Plan Document / Scheme</li><li>Employee Grant Letters + Exercise Notices</li><li>Merchant Banker Valuation Report (unlisted)</li><li>Cap Table (Fully Diluted)</li><li>Previous Form 16s with ESOP Perquisite</li><li>DPIIT Recognition Certificate (for S.80-IAC startups)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> RoC Mumbai filing history. Listed: SEBI SBEB scheme registration + stock exchange filings. MNC subsidiaries: foreign parent ESOP plan document + foreign stock exchange data + applicable DTAA.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESOP Compliance Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Perquisite Tax Without Liquidity</td><td>Up to 42.7% tax at exercise on FMV-based perquisite. Unlisted shares have no public market to sell. Employees must pay exercise price + tax without actual income realisation. Sell-to-cover impossible without secondary market.</td><td>Patron advises exercise timing, tax instalment planning, secondary sale opportunities. S.80-IAC deferral evaluated for eligible startups.</td></tr><tr><td>Merchant Banker Valuation</td><td>Every unlisted exercise needs Category I MB certificate ≤ 180 days. FMV subjective (DCF, comparables, funding round). High FMV = larger employee tax. Low FMV = IT Department scrutiny.</td><td>Patron coordinates MB valuations that are defensible and fair. Multiple methodologies documented. Consistent with prior rounds.</td></tr><tr><td>Ind AS 102 Expense Complexity</td><td>Grant-date fair value via Black-Scholes. Inputs: share price, volatility (no public data for unlisted), expected life, risk-free rate. Expense spread over vesting. Forfeitures adjusted. Modification accounting if terms change.</td><td>Patron computes Black-Scholes with documented assumptions. Quarterly expense booking. Forfeiture estimates updated. Modification scenarios modelled.</td></tr><tr><td>Cross-Border ESOP Taxation</td><td>Mumbai employees of MNCs receiving foreign parent ESOPs. FMV on foreign exchange per Rule 3(8). Perquisite in INR. DTAA credit for double taxation. FEMA for foreign share acquisition. Reporting in Indian Form 16.</td><td>Full cross-border tax computation. DTAA treaty analysis per country. FEMA compliance documented. Form 16 with foreign ESOP perquisite.</td></tr><tr><td>PAS-3 and RoC Filing Deadlines</td><td>PAS-3 must be filed within 30 days of share allotment on exercise. Missed deadline = RoC penalty. Multiple exercise events in a year each need separate PAS-3. Share capital updates must be current.</td><td>Exercise event calendar maintained. PAS-3 filed within 30 days every time. Share capital and shareholding pattern updated. RoC compliance tracked.</td></tr>

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
            <h2 class="section-title">ESOP Compliance Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Scheme Design (Full)</td><td>quoted on a scoping call (15-30 days)</td></tr><tr><td>Single Exercise Event Processing</td><td>quoted on a scoping call (7-10 days)</td></tr><tr><td>Annual Ind AS 102 Computation</td><td>quoted on a scoping call (year-end)</td></tr><tr><td>Merchant Banker Valuation Coordination</td><td>quoted on a scoping call (10-15 days)</td></tr><tr><td>Listed Company SEBI SBEB Annual</td><td>quoted on a scoping call (ongoing)</td></tr><tr><td>Cross-Border ESOP Tax Advisory (per employee)</td><td>quoted on a scoping call</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESOP Management in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Management%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Management Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Scheme Design + Approvals</td><td>15-30 days (Board + shareholders)</td></tr><tr><td>Merchant Banker Valuation</td><td>10-15 days (valid 180 days)</td></tr><tr><td>Grant Letters + Vesting Setup</td><td>5-7 days per batch</td></tr><tr><td>Exercise Processing + TDS</td><td>7-10 days per event</td></tr><tr><td>PAS-3 Filing with RoC</td><td>Within 30 days of allotment</td></tr><tr><td>Annual Ind AS 102 + Disclosures</td><td>15-20 days (year-end)</td></tr><tr><td>Capital Gains Advisory (on sale)</td><td>3-5 days per employee</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Exercise without MB valuation (unlisted): IT Department can challenge. TDS not deducted on perquisite: employer liable S.201(1) + interest. PAS-3 missed: RoC penalty. Ind AS 102 not recognised: audit qualification. ESOP without shareholder approval: void allotment. S.80-IAC deferral without certification: full tax + interest + penalty.</p>

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
            <h2 class="section-title">Why Choose Patron for ESOPs in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines Office</h3><p class="feature-text">Walk-in from Powai, BKC, Lower Parel startups, Nariman Point listed companies, Andheri MNCs. CA+CS team for scheme design to RoC filing.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Full Lifecycle: Design → Sale</h3><p class="feature-text">Scheme design + valuation + grant + exercise + tax + TDS + Ind AS 102 + RoC + capital gains. No other Mumbai CA covers the entire ESOP lifecycle.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Startups + Listed + MNCs</h3><p class="feature-text">Companies Act S.62 for unlisted. SEBI SBEB for listed. Cross-border for MNC subsidiaries. S.80-IAC deferral. All from one team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including VC-funded startups, listed corporates, and MNC subsidiaries across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including startups, listed companies, and MNC subsidiaries across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESOP Compliance by Company Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Company Type</th><th>ESOP Compliance</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>VC-Funded Startup (Unlisted)</td><td>S.62(1)(b), Rule 12, MB valuation, S.80-IAC deferral, Ind AS 102, PAS-3</td><td>Powai/BKC/Lower Parel; 5-15% pool; talent retention critical</td></tr><tr><td>Listed Company</td><td>SEBI SBEB 2021, compensation committee, exchange filings, annual disclosure, stock price FMV</td><td>Nariman Point/BKC; large-scale ESOP/RSU programmes</td></tr><tr><td>MNC Subsidiary</td><td>Foreign parent ESOP, Rule 3(8) FMV, DTAA, FEMA, Form 16 reporting, cross-border coordination</td><td>BKC/Andheri; employees receive US/UK/EU parent stock</td></tr><tr><td>Bootstrapped Company</td><td>First-time ESOP setup, S.62(1)(b), scheme design, valuation, shareholder approval</td><td>Pan-Mumbai; alternative to cash compensation</td></tr><tr><td>Company with Sweat Equity</td><td>S.54 Companies Act, valuation by registered valuer, perquisite at allotment, RoC compliance</td><td>Early-stage; past contribution recognition; alternative ESOP advisory</td></tr>

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
            <h2 class="section-title">Related Compliance and Advisory Services</h2>
            <div class="content-text">
                
                <ul><li><a href="#">ESOP Management in India</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/statutory-audit">Statutory Audit</a></li><li><a href="/income-tax-return">Income Tax Return</a></li><li><a href="/private-limited-company-registration/mumbai">Pvt Ltd Registration in Mumbai</a></li><li><a href="/payroll-services">Payroll Services</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Tax Framework</h2>
            <div class="content-text">
                
                <p><strong>Companies Act S.62(1)(b):</strong> ESOP issuance by special resolution. Rule 12: compensation committee, pricing, lock-in, min 1-year vesting, disclosure. PAS-3 within 30 days. Unlisted: promoters/directors &gt;10% cannot receive (except DPIIT startups).</p><p><strong>Income Tax:</strong> S.17(2)(vi): perquisite at exercise (FMV - exercise price) as salary. Rule 3(8): FMV listed = avg open+close; unlisted = MB certificate ≤180 days. S.192: employer TDS. S.49(2AA): cost = FMV at exercise. S.80-IAC: deferral for eligible startups up to 48 months. Capital gains: listed STCG 20%/LTCG 12.5%; unlisted STCG slab/LTCG 12.5%.</p><p><strong>SEBI SBEB 2021:</strong> Listed: ESOPs/RSUs/SARs. Compensation committee. Pricing flexibility. Disclosure in Directors' Report. Filed with exchanges.</p><p><strong>Ind AS 102:</strong> Equity-settled: grant-date fair value over vesting. Cash-settled: mark-to-market. Black-Scholes/Binomial. Forfeitures adjusted.</p><p><strong>Portals:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA/RoC</a> | <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax</a> | <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - ESOP Management in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call <a href="tel:+919459456700" style="color:inherit;">+91 945 945 6700</a>.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESOP Management in Mumbai',
                        'city'     => 'Mumbai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is ESOP and how is it taxed in India?</h3>
                        <div class="faq-expanded__a"><p>ESOP gives employees the right to buy shares at exercise price after vesting. Tax at two stages: exercise (perquisite S.17(2)(vi) on FMV minus exercise price, as salary up to 42.7%) and sale (capital gains on sale price minus FMV at exercise). Employer deducts TDS S.192. S.80-IAC startups can defer perquisite tax.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is perquisite tax payable at exercise or sale?</h3>
                        <div class="faq-expanded__a"><p>At exercise - not sale. FMV on exercise date minus exercise price = perquisite, taxed as salary under S.17(2)(vi). Employer deducts TDS S.192. At sale: separate capital gains. S.80-IAC eligible startups can defer perquisite up to 48 months or until sale/exit.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does ESOP compliance cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Scheme design: quoted on a scoping call. Single exercise event: quoted on a scoping call. Annual Ind AS 102: quoted on a scoping call. Merchant Banker coordination: quoted on a scoping call. Listed SEBI SBEB annual: quoted on a scoping call. Cross-border per employee: quoted on a scoping call.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can DPIIT startups defer ESOP perquisite tax?</h3>
                        <div class="faq-expanded__a"><p>Yes - if startup also has S.80-IAC certification (separate from DPIIT). Perquisite tax + TDS deferred until earliest of: share sale, cessation of employment, or 48 months from end of assessment year of allotment. Deferral shifts payment, doesn't eliminate tax. Patron assists with DPIIT + S.80-IAC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What valuation is needed for ESOP exercise?</h3>
                        <div class="faq-expanded__a"><p>Listed: average of opening + closing price on exercise date. Unlisted: Category I Merchant Banker certificate ≤ 180 days from exercise per Rule 3(8). For Ind AS 102: grant-date fair value via Black-Scholes/Binomial. Patron coordinates both valuations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between ESOPs and sweat equity?</h3>
                        <div class="faq-expanded__a"><p>ESOPs = future right to buy at exercise price after vesting (forward-looking incentive). Sweat equity = shares issued immediately for past non-cash contributions (IP, value addition). ESOPs have vesting; sweat equity does not. Both taxed S.17(2)(vi) but at different triggers: ESOPs at exercise, sweat equity at allotment.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>When is ESOP tax levied?</strong> At exercise - when the employee buys the shares. Perquisite tax applies on FMV minus exercise price (taxed as salary). At sale, a separate capital gains tax applies.</p><p><strong>How is the FMV of an unlisted company determined?</strong> Through a certificate from a Category I Merchant Banker - not older than 180 days from the exercise date. Black-Scholes or DCF method.</p><p><strong>Do startups get relief on ESOP tax?</strong> Yes - if the startup holds DPIIT plus S.80-IAC certification, the perquisite tax can be deferred for 48 months. However, not all startups qualify.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Exercise Without Valuation = IT Department Challenge. Start Today.</h2>
            <div class="content-text">
                
                <p>Exercise without MB valuation (unlisted): IT can challenge perquisite. TDS not deducted: employer liable S.201(1) + interest. PAS-3 missed: RoC penalty. Ind AS 102 missing: audit qualification. ESOP without shareholder approval: void allotment. S.80-IAC deferral without certification: full tax + interest + penalty.</p><p><strong>From Rs 25,000/engagement. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Management%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your ESOPs, Legally Structured and Tax-Optimised</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ESOP management in Mumbai spans corporate law, tax, accounting, and securities regulation. Scheme design, Black-Scholes <a href="/esop-valuation-services/mumbai">valuation</a>, Merchant Banker coordination, <a href="/esop-perquisite-tax-section-17-2-vi/mumbai">perquisite tax S.17(2)(vi)</a> with TDS, Ind AS 102, RoC PAS-3, and cross-border ESOP taxation. For Powai/BKC startups, Nariman Point listed companies, Andheri MNC subsidiaries.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai. Full ESOP lifecycle from one CA+CS team. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20ESOP%20Management%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESOP%20Management%20Mumbai&body=Hello%2C%20I%20just%20visited%20your%20ESOP%20Management%20Mumbai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>


<!-- RELATED SERVICES -->
<section class="content-section">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">Related Services</h2>
        <div class="content-text"><p>Start with the national ESOP M&Anagement and Compliance Services service, then explore complementary ESOP services across India.</p>
        <ul>
                    <li><strong><a href="/esop-management-and-compliance-services">ESOP M&Anagement and Compliance Services in India</a></strong> - the national parent service</li>
                    <li><strong><a href="/esop-services">ESOP Services Hub</a></strong> - the full ESOP advisory hub - route by stage, scenario or tax</li>
                    <li><strong><a href="/esop-scheme-design">ESOP Scheme Design</a></strong> - design the option pool, vesting schedule and leaver terms</li>
                    <li><strong><a href="/esop-valuation-services">ESOP Valuation Services</a></strong> - Rule 11UA fair-market-value reports for grants and exercises</li>
                    <li><strong><a href="/esop-corporate-filings">ESOP Corporate Filings</a></strong> - MGT-14, PAS-3 and Form SH-6 register filings</li>
                    <li><strong><a href="/esop-perquisite-tax-section-17-2-vi">ESOP Perquisite Tax (Sec 17(2)(vi))</a></strong> - perquisite tax and TDS computation at exercise</li>
        </ul></div>
    </div></div>
</section>

<!-- MORE SERVICES IN CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">More Services in Mumbai</h2>
        <div class="pa-cross-grid"><a href="/esop-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Services Hub</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-scheme-design/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Scheme Design</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-valuation-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Valuation Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-corporate-filings/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Corporate Filings</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-perquisite-tax-section-17-2-vi/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Perquisite Tax (Sec 17(2)(vi))</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/esop-vesting-and-forfeiture-tracking/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Vesting and Forfeiture Tracking</div><div class="pa-card-sub">Mumbai</div></div></a></div>
    </div></div>
</section>

<!-- SERVICE BY CITY -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container"><div class="text-content">
        <h2 class="section-title">ESOP M&Anagement and Compliance Services by City</h2>
        <div class="content-text"><p>Available across our four office cities. You are viewing the Mumbai page.</p></div>
        <div class="pa-city-grid"><a href="/esop-management-and-compliance-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><span class="pa-city-card" aria-current="page" style="border-color:var(--orange);background:#FFF7F2;cursor:default;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:10px;right:12px;font-size:10px;font-weight:700;color:var(--orange);letter-spacing:.04em;">YOU'RE HERE</span></span><a href="/esop-management-and-compliance-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/esop-management-and-compliance-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div>
    </div></div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 20 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 20 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
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
