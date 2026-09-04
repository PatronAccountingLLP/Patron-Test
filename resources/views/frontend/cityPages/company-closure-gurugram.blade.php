
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
    <title>Company Closure Gurugram - Strike Off & STK-2 Form</title>
    <meta name="description" content="CA/CS-assisted company closure in Gurugram. Section 248 strike off, STK-2, winding up, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <link rel="canonical" href="/company-closure/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Company Closure Gurugram - Strike Off & STK-2 Form">
    <meta property="og:description" content="CA/CS-assisted company closure in Gurugram. Section 248 strike off, STK-2, winding up, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta property="og:url" content="/company-closure/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Company Closure Gurugram - Strike Off & STK-2 Form">
    <meta name="twitter:description" content="CA/CS-assisted company closure in Gurugram. Section 248 strike off, STK-2, winding up, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Company Closure in Gurugram | Strike Off",
      "description": "CA/CS-assisted company closure in Gurugram. Section 248 strike off, STK-2, winding up, ROC Haryana. Serving Cyber City, Golf Course Road. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/company-closure/gurugram",
      "serviceType": "Company Closure in Gurugram | Strike Off",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "https://www.patronaccounting.com/company-closure/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "100",
          "maxPrice": "10000",
          "priceCurrency": "INR"
        }
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
          "name": "Company Closure: STK-2 Filing",
          "item": "https://www.patronaccounting.com/company-closure"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Company Closure in Gurugram | Strike Off",
          "item": "https://www.patronaccounting.com/company-closure/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to close a company in India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For inactive, debt-free companies: file STK-2 (voluntary strike off under Section 248) with ROC after clearing all pending compliances. For companies with assets/liabilities: voluntary winding up through NCLT with liquidator. Patron handles both routes for Gurugram companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is the cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Compliant company: Rs 20,000-30,000 total (Rs 10,000 govt fee + professional). Non-compliant with backlog: Rs 40,000-1,00,000+ including penalty clearance. Cost increases by ~Rs 6,000/month for each month of delay."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Strike off (STK-2): 3-6 months from filing to dissolution, plus 1-3 months for pre-closure compliance clearance. NCLT winding up: 6-18 months. The 30-day ROC gazette notice period is mandatory."
          }
        },
        {
          "@type": "Question",
          "name": "Can a company with debts be struck off?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Section 248 requires NIL liabilities. All debts, vendor payments, employee dues, statutory liabilities must be settled before STK-2. If debts cannot be repaid, NCLT winding up with liquidator is required."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I do not formally close?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Rs 100/day penalty per form accumulates (~Rs 6,000/month). After 3 years of non-filing, director disqualification under Section 164(2) for 5 years (DIN deactivated). ROC may initiate suo motu strike off. Personal liability continues."
          }
        },
        {
          "@type": "Question",
          "name": "Can I start a new company after closing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if your DIN is active (not disqualified). If old company was closed via voluntary strike off with compliances cleared, directors can immediately incorporate. If DIN was deactivated, NCLT restoration is required first."
          }
        },
        {
          "@type": "Question",
          "name": "Is GST cancellation required before STK-2?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. GST must be cancelled before or simultaneously with STK-2 filing. File pending returns, GSTR-10, and obtain cancellation order. GST department can object during the 30-day gazette period if active."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between strike off and winding up?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Strike off (Section 248): administrative removal, faster, cheaper, for inactive companies with no liabilities. Winding up (NCLT): formal legal process with liquidator, asset realisation, creditor settlement - for companies with debts/assets. Quick Answers Company close kaise karte hain? Sab pending filings karo → GST cancel karo → Bank band karo → STK-2 ROC Haryana mein file karo → 3-6 mahine mein dissolved. Close nahi kiya toh kya hoga? Rs 100/din penalty. 3 saal non-filing = DIN deactivate (5 saal ban). Personal liability continues. Kitna kharcha aata hai? Compliant: Rs 20-30K. Non-compliant: Rs 40K-1L+ (penalty + backlog)."
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
                        Company Closure in Gurugram: Strike Off, Winding Up, and Full Dissolution
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">03 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Strike Off:</span> Section 248: For inactive, debt-free companies | Form STK-2 | Rs 10,000 govt fee | 3-6 months</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Winding Up:</span> NCLT route for companies with assets/liabilities | Liquidator appointed | 6-18 months</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Pre-Closure:</span> Clear all ROC filings, cancel GST, file final IT return, close bank accounts</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Risk:</span> NOT closing: Rs 100/day penalty per form + director disqualification (5-year DIN ban)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Company closure for failed startups, dormant shells, and MNC wind-downs across Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Company%20Closure%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'Company Closure in Gurugram',
                                            'city'     => 'Gurugram',
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
    'ctaText'    => 'Company closure with pre-closure compliance clearance, STK-2 filing, and director protection from Gurugram.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">Strike Off</a><a href="#who-section" class="toc-btn">Consequences</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Pre-Closure</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Alternatives</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Closure in Gurugram: Section 248 Strike Off and NCLT Winding Up</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Company Closure in Gurugram Services at a Glance</strong></p>
                    <p>Closing a company legally requires removing its name from the ROC register. The most common route for Gurugram startups and dormant companies is voluntary strike off under Section 248 using Form STK-2 filed with ROC Haryana at Chandigarh. Requirements: no assets, no liabilities, all ROC filings current, GST cancelled, final IT return filed, bank accounts closed. Government fee: Rs 10,000. Timeline: 3-6 months. Simply stopping operations without formal closure accumulates Rs 100/day penalty per form and triggers director disqualification under Section 164(2).</p>
                </div>
                <p>Gurugram has one of the highest concentrations of registered but non-operational companies in NCR. DLF Cyber City has hundreds of startups that incorporated, failed, and stopped without formal closure. For a comprehensive overview, refer to our <a href="/company-closure">Company Closure</a> national guide.</p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Strike Off (Section 248)</th><th>Winding Up (NCLT)</th></tr></thead><tbody><tr><td>Suitable For</td><td>Inactive, debt-free companies</td><td>Companies with assets/liabilities</td></tr><tr><td>Form</td><td>STK-2 on MCA V3</td><td>NCLT petition</td></tr><tr><td>Govt Fee</td><td>Rs 10,000</td><td>Variable (NCLT + liquidator)</td></tr><tr><td>Timeline</td><td>3-6 months</td><td>6-18 months</td></tr><tr><td>Assets/Liabilities</td><td>Must be NIL</td><td>Managed by liquidator</td></tr><tr><td>Cost (total)</td><td>Rs 15,000-35,000</td><td>Rs 50,000-5,00,000+</td></tr><tr><td>Gurugram Use Case</td><td>Failed startups, dormant shells</td><td>MNC subsidiary wind-down</td></tr></tbody></table></div><p</p>
                <p><strong>Key insight:</strong> Every month you delay closure, the cost increases by approximately Rs 6,000 (Rs 100/day × 2 forms × 30 days). A company that could be closed for Rs 25,000 today may cost Rs 50,000+ in 6 months. Close early. Directors remain personally exposed until the company is formally closed.</p>
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
                <h2 class="section-title">Voluntary Strike Off Process (Section 248)</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Step 1: Eligibility Assessment</strong> - No business for 2+ years (or never commenced within 1 year), no assets, no liabilities, no litigation, no pending investigations.</p><p><strong>Step 2: Clear Pending Compliances</strong> - File all overdue AOC-4, MGT-7A, DIR-3 KYC, ADT-1. Pay penalties (Rs 100/day per form). This is often the most time-consuming step. See <a href="#">Annual Compliance</a>.</p><p><strong>Step 3: Cancel GST + Final IT Return</strong> - File pending GST returns, GSTR-10, obtain cancellation order. File final IT return. See <a href="#">GST Cancellation</a>.</p><p><strong>Step 4: Close Bank Accounts</strong> - Board Resolution for closure. Close all accounts. Obtain closure certificates.</p><p><strong>Step 5: EGM + Resolution</strong> - Pass Special Resolution (75% shareholder approval) or obtain written consent from all shareholders.</p><p><strong>Step 6: Prepare STK-2 Documents</strong> - STK-3 indemnity bond (Haryana stamp paper, notarised), STK-4 affidavit (each director), CA-certified statement of assets/liabilities (not older than 30 days), bank closure certificates.</p><p><strong>Step 7: File STK-2</strong> - File with ROC Haryana on MCA V3. Rs 10,000 fee. Digitally signed by majority of directors.</p><p><strong>Step 8: ROC Gazette + Dissolution</strong> - ROC publishes 30-day gazette notice (STK-5/6). If no objections, company struck off. Dissolution notice (STK-7) published.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Company Closure in Gurugram:</strong></p>
                    <p><strong>Section 248:</strong> Companies Act provision for voluntary strike off of defunct/inactive companies from ROC register.</p><p><strong>Form STK-2:</strong> Application for strike off filed by the company with ROC (Rs 10,000 fee).</p><p><strong>Section 164(2):</strong> Automatic director disqualification (5-year DIN ban) if company defaults on filings for 3 consecutive years.</p><p><strong>STK-3:</strong> Indemnity bond signed by all directors taking personal liability for post-closure obligations.</p><p><strong>Section 455:</strong> Dormant company status - alternative to closure for companies that may resume operations.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Company Closure in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Company Closure</span>
                        <strong>Gurugram Filing</strong>
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
            <h2 class="section-title">Consequences of NOT Closing a Dormant Company</h2>
            <div class="content-text">
                
                <p><strong>Penalty Accumulation (Rs 100/day per form):</strong> A Gurugram company that stopped in 2022 without filing for 3 years has accumulated Rs 1,00,000+ per form. By 2026, total penalties can exceed Rs 3-5 lakh for a company with zero revenue.</p><p><strong>Director Disqualification (Section 164(2)):</strong> After 3 years of non-filing, ALL directors are automatically disqualified from ANY directorship for 5 years. DIN deactivated. Many Gurugram startup founders discover this when trying to incorporate their next venture.</p><p><strong>ROC Suo Motu Strike Off:</strong> ROC can initiate strike off of companies not filing for 2+ years. Directors lose control, assets vest with Central Government, restoration requires NCLT petition.</p><p><strong>Personal Liability:</strong> Under Section 248(7), directors remain personally liable for company obligations even after dissolution. Unpaid GST, IT demands, employee dues continue.</p><p><strong>MCA AI Surveillance 2026:</strong> MCA uses AI-powered detection to identify ghost companies. Dormant Gurugram companies with 2+ years non-filing are at high risk of ROC-initiated strike off before founders can act.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Closure Services in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment</td><td>MCA Master Data, GST status, IT demands, pending litigation, and compliance backlog check to determine if strike off is viable</td></tr><tr><td>Pre-Closure Compliance Clearance</td><td>Filing all overdue ROC returns (AOC-4, MGT-7A, DIR-3 KYC), GST cancellation, final IT/TDS return, penalty payment coordination</td></tr><tr><td>Strike Off Filing (STK-2)</td><td>Complete preparation: Board Resolution, EGM/SR, STK-3 indemnity bond (Haryana stamp paper), STK-4 affidavit, CA statement, MCA V3 filing</td></tr><tr><td>ROC Follow-Up</td><td>Monitoring STK-2 status, responding to ROC queries, handling IT/GST objections during 30-day gazette period</td></tr><tr><td>NCLT Winding Up Coordination</td><td>Liquidator coordination, creditor communication, NCLT filing support for companies with assets/liabilities</td></tr><tr><td>Director Disqualification Advisory</td><td>Section 164(2) risk assessment, DIN restoration application support via NCLT for already-disqualified directors</td></tr>

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
            <h2 class="section-title">Pre-Closure Compliance Checklist</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">For non-compliant Gurugram companies, pre-closure clearance is the most critical phase - often taking 1-3 months and costing Rs 10,000-50,000.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">File All Overdue ROC Returns</h3><p class="step-description">File AOC-4 (financial statements) and MGT-7A (annual returns) for every financial year up to cessation. File DIR-3 KYC for all directors. Pay accumulated penalties (Rs 100/day per form).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All years filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Penalties paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Cancel GST Registration</h3><p class="step-description">File all pending GSTR-1 and GSTR-3B returns. File GSTR-10 (final return). Apply for GST cancellation. Obtain cancellation order. MCA will not approve STK-2 if GST is active.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST returns filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Cancellation obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="40" font-size="11" fill="#E8712C" font-weight="800" text-anchor="middle" font-family="Arial">GST</text><line x1="40" y1="30" x2="80" y2="50" stroke="#E8712C" stroke-width="2"/></svg></div><span class="illustration-label">GST Cancelled</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File Final IT Return + Close Bank Accounts</h3><p class="step-description">File final income tax return for the last active year. Ensure no IT demands pending. Close all company bank accounts and obtain closure certificates.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>IT return filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Banks closed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M52 40l5 5 12-12" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Closure Ready</span><span class="step-number-large">03</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Strike Off</h2>
            <div class="content-text">
                
                <ul><li><strong>Board Resolution</strong> - Approving closure and STK-2 filing.</li><li><strong>Special Resolution / 75% Shareholder Consent</strong> - Written consent from 75% of paid-up share capital holders.</li><li><strong>Form STK-3 (Indemnity Bond)</strong> - Signed by ALL directors on Haryana non-judicial stamp paper, notarised. Personal liability for post-closure obligations.</li><li><strong>Form STK-4 (Affidavit)</strong> - By each director declaring no pending liabilities/litigation.</li><li><strong>CA-Certified Statement of Assets and Liabilities</strong> - Not older than 30 days. Must show NIL assets and NIL liabilities.</li><li><strong>Bank Account Closure Certificates</strong> - From all banks confirming closure with NIL balance.</li><li><strong>GST Cancellation Order</strong> - Proof of GST cancellation.</li><li><strong>NOC from Regulatory Bodies</strong> - If regulated by RBI, SEBI, IRDA.</li><li><strong>DSC</strong> - Of majority of directors.</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Haryana-specific:</strong> The STK-3 indemnity bond must be executed on Haryana non-judicial stamp paper and notarised. Directors personally indemnify against all liabilities that may arise after the company is struck off.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Alternatives to Closure</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Dormant Company Status (Section 455)</td><td>Inactive but may resume - minimal compliance</td><td>Apply for dormant status. Only annual return required. Avoids closure finality for companies on temporary hold</td></tr><tr><td>Sell/Transfer Company</td><td>Company has value (brand, licences, compliance history)</td><td>Share transfer to new owners. Compliant shells can be sold to entrepreneurs needing ready-made companies</td></tr><tr><td>LLP Conversion (Section 366)</td><td>Convert to LLP for simplified compliance</td><td>Suitable for small companies preferring LLP structure with lower compliance burden</td></tr><tr><td>Change of Management</td><td>New owners take over operations</td><td>Director and share changes transfer control without closure. Investment opportunity for buyers</td></tr>

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
            <h2 class="section-title">Cost of Company Closure in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Closure Compliance (if backlog exists)</td><td>Rs 10,000-50,000+ (filing overdue returns + penalties)</td></tr><tr><td>GST Cancellation</td><td>Rs 3,000-5,000 (pending returns + cancellation)</td></tr><tr><td>STK-2 Government Fee</td><td>Rs 10,000 (flat fee for all companies)</td></tr><tr><td>CA Certification (Statement of Accounts)</td><td>Rs 2,000-5,000 (not older than 30 days)</td></tr><tr><td>Patron Professional Fee (end-to-end)</td><td>Starting from INR 7,999 (Exl GST and Govt. Charges)</td></tr><tr><td>TOTAL (compliant company)</td><td>Rs 20,000-30,000</td></tr><tr><td>TOTAL (non-compliant, 2-3 years backlog)</td><td>Rs 40,000-1,00,000+ (including penalty clearance)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Company Closure in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Company%20Closure%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company Closure Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Closure Compliance Clearance</td><td>1-3 months - filing pending returns, GST cancellation, IT return</td></tr><tr><td>Document Preparation</td><td>1-2 weeks - STK-3 indemnity bond, STK-4 affidavit, CA statement, bank closure</td></tr><tr><td>STK-2 Filing on MCA V3</td><td>1 day - filing with ROC Haryana at Chandigarh</td></tr><tr><td>ROC Processing + Gazette Notice</td><td>1-2 months - ROC reviews + publishes 30-day public notice</td></tr><tr><td>Objection Period</td><td>30 days - IT/GST/creditor objections invited</td></tr><tr><td>Final Strike Off (STK-7)</td><td>2-4 weeks - ROC removes name + publishes dissolution</td></tr><tr><td>TOTAL (from STK-2 to dissolution)</td><td>3-6 months</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Every month of delay costs ~Rs 6,000 in accumulated penalties. After 3 years of non-filing, director disqualification is automatic (Section 164(2), 5-year DIN ban). MCA AI surveillance in 2026 identifies ghost companies for ROC-initiated strike off. The longer you wait, the more expensive closure becomes. Act now.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Company Closure in Gurugram?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Gurugram Office</h3><p class="feature-text">Golf Course Extension Road - in-person consultation for closure proceedings across Cyber City, Golf Course Road, Sohna Road, Udyog Vihar.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Pre-Closure Expertise</h3><p class="feature-text">Specialising in clearing compliance backlogs: years of overdue ROC returns, penalty management, GST cancellation. Making companies closure-ready.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">ROC Haryana Filing</h3><p class="feature-text">Established relationship with ROC Haryana at Chandigarh for STK-2 processing. Monitoring through gazette and handling objections.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Director Protection</h3><p class="feature-text">Section 164(2) disqualification risk assessment. Proactive DIN protection by filing pending returns before the 3-year threshold.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"My startup had been dormant 3 years with no filings. Patron cleared Rs 1.2 lakh in pending penalties, filed all overdue returns, cancelled GST, and completed strike off in 5 months. Without them, my DIN would have been deactivated."</p><p style="font-weight:700;font-size:14px;margin:0;">- Startup Founder, DLF Cyber City</p></blockquote><blockquote style="border-left:3px solid var(--orange);padding:16px 20px;margin:20px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;"><p style="font-style:italic;margin-bottom:8px;">"Needed to close Indian subsidiary after parent restructured. Patron managed full compliance clearance and STK-2 filing with ROC Haryana. Clean dissolution in 4 months."</p><p style="font-weight:700;font-size:14px;margin:0;">- Finance Director, Golf Course Road MNC</p></blockquote>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Other CS Firms for Company Closure</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical CS Firm</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Closure Clearance</td><td>Complete backlog filing + penalty management</td><td>STK-2 only, requires client to clear backlog</td></tr><tr><td>GST Cancellation</td><td>Included in engagement</td><td>Separate engagement</td></tr><tr><td>ROC Haryana</td><td>Established relationship</td><td>Transitioning</td></tr><tr><td>Director Protection</td><td>Section 164(2) risk assessment proactive</td><td>Reactive only</td></tr><tr><td>Pricing</td><td>From Rs 7,999 + govt fees (transparent)</td><td>Variable, hidden extras</td></tr><tr><td>Timeline</td><td>3-6 months (managed milestones)</td><td>Uncertain</td></tr>

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
                
                <ul><li><a href="/company-closure">Company Closure (National)</a> - Broader overview</li><li><a href="/private-limited-company-registration">Private Limited Registration</a> - Start fresh</li><li><a href="#">Annual Compliance</a> - Bring company current</li><li><a href="#">GST Cancellation</a> - Pre-closure step</li><li><a href="#">LLP Registration</a> - Alternative entity</li></ul>

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
                
                <p><strong>Governing Law:</strong> Companies Act, 2013 | Companies (Removal of Names) Rules, 2016 | IBC, 2016</p><p><strong>Key Sections:</strong> Section 248 (strike off) | Section 164(2) (director disqualification) | Section 271-365 (winding up) | Section 455 (dormant company)</p><p><strong>Forms:</strong> STK-2 (application) | STK-3 (indemnity bond) | STK-4 (affidavit) | STK-5/6 (gazette notice) | STK-7 (dissolution)</p><p><strong>ROC:</strong> ROC Haryana at Chandigarh (from 16 Feb 2026) | roc.haryana@mca.gov.in</p><p><strong>Portal:</strong> <a href="https://mca.gov.in" target="_blank" rel="noopener">MCA V3 - mca.gov.in</a></p><p><strong>Penalties:</strong></p><p><strong>Non-filing:</strong> Rs 100/day per form (no upper cap). 3 years = director disqualification.</p><p><strong>Section 164(2):</strong> Automatic 5-year ban from all directorships. DIN deactivated.</p><p><strong>Haryana/Gurugram:</strong> ROC Haryana at Chandigarh processes all STK-2 for Gurugram companies. Haryana stamp paper required for STK-3 indemnity bond. No Professional Tax closure needed (Haryana does not levy PT).</p>

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
                    <h2 class="faq-expanded__title">FAQs - Company Closure in Gurugram</h2>
                    <p class="faq-expanded__lead">Common questions about company closure, strike off process, costs, and director disqualification risk for Gurugram companies.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'Company Closure in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to close a company in India?</h3>
                        <div class="faq-expanded__a"><p>For inactive, debt-free companies: file STK-2 (voluntary strike off under Section 248) with ROC after clearing all pending compliances. For companies with assets/liabilities: voluntary winding up through NCLT with liquidator. Patron handles both routes for Gurugram companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the cost?</h3>
                        <div class="faq-expanded__a"><p>Compliant company: Rs 20,000-30,000 total (Rs 10,000 govt fee + professional). Non-compliant with backlog: Rs 40,000-1,00,000+ including penalty clearance. Cost increases by ~Rs 6,000/month for each month of delay.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How long does it take?</h3>
                        <div class="faq-expanded__a"><p>Strike off (STK-2): 3-6 months from filing to dissolution, plus 1-3 months for pre-closure compliance clearance. NCLT winding up: 6-18 months. The 30-day ROC gazette notice period is mandatory.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can a company with debts be struck off?</h3>
                        <div class="faq-expanded__a"><p>No. Section 248 requires NIL liabilities. All debts, vendor payments, employee dues, statutory liabilities must be settled before STK-2. If debts cannot be repaid, NCLT winding up with liquidator is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if I do not formally close?</h3>
                        <div class="faq-expanded__a"><p>Rs 100/day penalty per form accumulates (~Rs 6,000/month). After 3 years of non-filing, director disqualification under Section 164(2) for 5 years (DIN deactivated). ROC may initiate suo motu strike off. Personal liability continues.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I start a new company after closing?</h3>
                        <div class="faq-expanded__a"><p>Yes, if your DIN is active (not disqualified). If old company was closed via voluntary strike off with compliances cleared, directors can immediately incorporate. If DIN was deactivated, NCLT restoration is required first.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is GST cancellation required before STK-2?</h3>
                        <div class="faq-expanded__a"><p>Yes. GST must be cancelled before or simultaneously with STK-2 filing. File pending returns, GSTR-10, and obtain cancellation order. GST department can object during the 30-day gazette period if active.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is the difference between strike off and winding up?</h3>
                        <div class="faq-expanded__a"><p>Strike off (Section 248): administrative removal, faster, cheaper, for inactive companies with no liabilities. Winding up (NCLT): formal legal process with liquidator, asset realisation, creditor settlement - for companies with debts/assets.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Company close kaise karte hain?</strong> Sab pending filings karo → GST cancel karo → Bank band karo → STK-2 ROC Haryana mein file karo → 3-6 mahine mein dissolved.</p><p><strong>Close nahi kiya toh kya hoga?</strong> Rs 100/din penalty. 3 saal non-filing = DIN deactivate (5 saal ban). Personal liability continues.</p><p><strong>Kitna kharcha aata hai?</strong> Compliant: Rs 20-30K. Non-compliant: Rs 40K-1L+ (penalty + backlog).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Every Month of Delay Costs Rs 6,000+ in Penalties</h2>
            <div class="content-text">
                
                <p>Penalties accumulate at Rs 100/day per form. After 3 years of non-filing, director disqualification is automatic. MCA AI surveillance identifies ghost companies in 2026. Close now while it's still affordable and before you lose control.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Company%20Closure%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert Company Closure in Gurugram</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Closing a company in Gurugram requires pre-closure compliance clearance, GST cancellation, bank closure, and STK-2 filing with ROC Haryana at Chandigarh. Voluntary strike off under Section 248 is the fastest route for inactive, debt-free companies. For every startup that stopped operating, every dormant shell, formal closure protects directors from disqualification and eliminates accumulating penalties.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides end-to-end closure services including compliance backlog clearance, GST cancellation, STK-2 filing, ROC follow-up, and director protection advisory.</p><p style="color:rgba(255,255,255,0.85);">With 10,000+ businesses served, a 4.9 Google rating, and 50,000+ documents filed, Patron Accounting LLP is a trusted corporate compliance partner for company closure across Gurugram, NCR, and India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20Company%20Closure%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Company%20Closure%20Gurugram&body=Hello%2C%20I%20just%20visited%20your%20Company%20Closure%20in%20Gurugram%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Company Closure - Available Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert company closure services across major Indian cities</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">City-Wise Closure Services</div><div class="pa-block-sub">Select your city</div><div class="pa-city-grid"><a href="/company-closure/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/company-closure/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/company-closure/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">Other corporate services in Gurugram</div><div class="pa-cross-grid"><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-compliance/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Annual Compliance</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/income-tax-return-filing/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 03 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">03 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 03 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Section 248 procedure, ROC Haryana jurisdiction, STK-2 forms, and MCA AI surveillance updates are verified against the latest MCA notifications.</p>
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
