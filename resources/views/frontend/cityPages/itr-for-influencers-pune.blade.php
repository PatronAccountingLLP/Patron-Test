
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@section('meta')
    <title>ITR for Influencers in Pune - Brand Deals, TDS 194R & GST</title>
    <meta name="description" content="CA-assisted ITR filing for influencers in Pune. Profession Code 16021, ITR-3, GST, brand deal taxation. Serving Koregaon Park, Baner, Hinjewadi creators. Call +91 945 945 6700.">
    <link rel="canonical" href="/itr-for-influencers/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Influencers in Pune - Brand Deals, TDS 194R & GST">
    <meta property="og:description" content="CA-assisted ITR filing for influencers in Pune. Profession Code 16021, ITR-3, GST, brand deal taxation. Serving Koregaon Park, Baner, Hinjewadi creators. Call +91 945 945 6700.">
    <meta property="og:url" content="/itr-for-influencers/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Influencers in Pune - Brand Deals, TDS 194R & GST">
    <meta name="twitter:description" content="CA-assisted ITR filing for influencers in Pune. Profession Code 16021, ITR-3, GST, brand deal taxation. Serving Koregaon Park, Baner, Hinjewadi creators. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ITR for Influencers in Pune",
      "description": "CA-assisted ITR filing for influencers in Pune. Profession Code 16021, ITR-3, GST, brand deal taxation. Serving Koregaon Park, Baner, Hinjewadi creators. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/itr-for-influencers/pune",
      "serviceType": "ITR for Influencers in Pune",
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
        "url": "https://www.patronaccounting.com/itr-for-influencers/pune",
        "price": "3999"
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
          "name": "ITR for Influencers: CA Filing",
          "item": "https://www.patronaccounting.com/itr-for-influencers"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ITR for Influencers in Pune",
          "item": "https://www.patronaccounting.com/itr-for-influencers/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which Income Tax office handles influencer ITR matters in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Principal Commissioner of Income Tax, Pune oversees all direct tax matters through CIT Pune 1 to 5. Your jurisdictional Assessing Officer is determined by residential address. Patron's CA team is experienced with all CIT Pune wards and represents creators in assessment proceedings and notice responses."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file my influencer ITR online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron offers fully digital ITR filing for Pune influencers. Upload bank statements, brand deal invoices, and platform earnings through our secure portal. Your dedicated CA prepares the ITR within 3 to 5 working days. Walk-in also available at RTC Silver, Wagholi."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ITR filing fee for influencers in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fees start from Rs 3,999 for micro-influencers using ITR-4 presumptive. ITR-3 with full books costs Rs 5,999 to Rs 14,999 depending on complexity. ITR plus GST bundle from Rs 9,999. Call +91 945 945 6700 for an exact quote."
          }
        },
        {
          "@type": "Question",
          "name": "How long does influencer ITR filing take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "3 to 5 working days for ITR-4 presumptive and straightforward ITR-3 cases. Complex cases with multiple income streams, GST reconciliation, or barter deal valuation take 5 to 7 working days. Tax audit cases require additional time before 30 September deadline."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should a Pune influencer use - ITR-3 or ITR-4?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If annual receipts are below Rs 2 crore and you prefer simplicity, ITR-4 under Section 44AD lets you declare 6 percent of digital receipts as taxable income without detailed books. If you have significant deductible expenses like camera equipment, studio rent, or team payments, ITR-3 is better. Patron runs both calculations."
          }
        },
        {
          "@type": "Question",
          "name": "Are barter deals and free products taxable for Pune influencers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Section 194R, brands must deduct 10 percent TDS on benefits exceeding Rs 20,000 per year. The fair market value of free products whether a Rs 1 lakh camera for review or free restaurant meals on FC Road must be included in taxable income. Patron helps value and report barter transactions correctly."
          }
        },
        {
          "@type": "Question",
          "name": "Do influencers in Pune need GST registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes if your annual aggregate turnover including barter value exceeds Rs 20 lakh. You must charge 18 percent GST on all services to brands, file GSTR-3B monthly, and GSTR-1 for outward supplies. Input Tax Credit on business purchases can be claimed."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if a Pune influencer misses the ITR deadline?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Filing after 31 July attracts Rs 5,000 penalty under Section 234F. Interest under Section 234A at 1 percent per month applies on unpaid tax. You also lose the ability to carry forward business losses. Belated returns can be filed until 31 December but penalties still apply. Quick Answers Influencer ka ITR kaise file karein? Profession Code 16021 select karein ITR-3 mein. Brand deals, YouTube AdSense, affiliate income - sab PGBP head mein declare karein. Expenses deduct karein aur tax compute karein. Kya free products par tax lagta hai? Haan. Rs 20,000 se zyada value ke free products par brand 10% TDS katega Section 194R ke under. Fair market value ITR mein declare karni hogi. GST kab lagta hai influencer par? Jab annual turnover (barter value including) Rs 20 lakh cross kare. 18% GST lagega promotional services par (SAC 998361). Advance tax kab dena hai? 15 June (15%), 15 September (45%), 15 December (75%), 15 March (100%). Tax liability Rs 10,000 se zyada ho toh mandatory hai."
          }
        }
      ]
    }
  ]
}</script>
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
                        ITR for Influencers in Pune: File Your Creator Income Correctly
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">25 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, bank statements, brand deal invoices, platform earnings reports, TDS certificates</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 3,999 for individual influencer ITR filing</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All content creators, YouTubers, Instagram influencers, bloggers earning income in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> ITR prepared within 3-5 working days of document submission</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 15+ Years Experience</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20influencer%20ITR%20filing%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR for Influencers',
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR for Influencers in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR for Influencers Services at a Glance</strong></p>
                    <p>Social media influencers in Pune must file Income Tax Returns using Profession Code 16021 in ITR-3 (or ITR-4 under Section 44AD for presumptive taxation). Brand deals, affiliate income, YouTube AdSense, barter products, and sponsored posts are all taxable under Profits and Gains from Business or Profession. Pune's growing creator community across Koregaon Park, Baner, and FC Road needs structured tax compliance to avoid penalties under Section 234F and scrutiny from the Income Tax Department.</p>
                </div>
                <p>Pune is home to over 580 registered content creators and influencers spanning fashion, food, tech, lifestyle, and Marathi-language niches. The city's creator economy, fuelled by young professionals in Koregaon Park, digital marketing agencies in Baner and Wakad, and the IT workforce in Hinjewadi, generates substantial income that the Income Tax Department now tracks through Profession Code 16021. Learn more about <a href="/itr-for-influencers">ITR for Influencers across India</a>.</p>
                <p>Under the Maharashtra PT Act, 1975, self-employed influencers must obtain PTEC and pay Rs 2,500 annually. Missing ITR deadlines attracts Rs 5,000 penalty under Section 234F, while undisclosed barter income triggers notices under Section 148. Patron Accounting's Pune office specialises in creator economy tax compliance. For related services, see <a href="/income-tax-return">Income Tax Return Filing</a> and <a href="/gst-returns">GST Returns</a>.</p>
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
                <h2 class="section-title">What Is ITR Filing for Influencers?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ITR for influencers is the process of filing an Income Tax Return that declares all income earned through social media content creation, brand collaborations, sponsorships, affiliate marketing, and platform monetisation under the Income Tax Act, 1961.</p>
<p>From AY 2025-26, the Income Tax Department introduced Profession Code 16021 specifically for social media influencers in ITR-3. This places content creation alongside recognised professions, requiring influencers to report income under Profits and Gains from Business or Profession (PGBP). Influencers choose between ITR-3 (full books) or ITR-4 under Section 44AD presumptive taxation (6% of digital receipts or 8% of cash receipts).</p>
<p>For Pune's creator community - from food bloggers on FC Road to tech reviewers in Hinjewadi and fashion influencers in Koregaon Park - this means mandatory bookkeeping, proper invoicing, and structured filing. The authorities use AI to cross-check income against TDS data in Form 26AS and AIS. For TDS compliance, see <a href="/tds-return-filing-24q">TDS Return Filing</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR for Influencers:</strong></p>
                    <p><strong>Profession Code 16021:</strong> Dedicated code for social media influencers introduced from AY 2025-26. Used in ITR-3 under PGBP head to classify content creation income.</p>
<p><strong>Section 194R (Barter TDS):</strong> Brands must deduct 10% TDS on benefits/perquisites (free products, gifted gadgets, hotel stays) exceeding Rs 20,000/year given to influencers.</p>
<p><strong>Section 44AD (Presumptive):</strong> Influencers with receipts below Rs 2 crore can declare 6% of digital receipts (or 8% cash) as taxable income without maintaining detailed books. Use ITR-4.</p>
<p><strong>GST on Influencer Services:</strong> 18% GST on promotional services (SAC 998361) once annual turnover exceeds Rs 20 lakh (including barter value).</p>
<p><strong>Maharashtra PTEC:</strong> Professional Tax Enrolment Certificate mandatory for self-employed influencers in Pune. Rs 2,500/year via mahagst.gov.in.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR for Influencers</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Pune Creator ITR</span>
                        <strong>Code 16021 | ITR-3 | Sec 194R</strong>
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
            <h2 class="section-title">Who Needs Influencer ITR Filing in Pune?</h2>
            <div class="content-text">
                
                <p>Every content creator in Pune earning above the basic exemption limit must file ITR using Profession Code 16021.</p>
<ul>
<li><strong>Instagram Creators (Koregaon Park/Baner)</strong> - Earning through sponsored reels, brand collaborations, and affiliate links. Even micro-influencers with 5,000-10,000 followers earning Rs 1,000-10,000 per post must report if total crosses threshold.</li>
<li><strong>YouTube Creators</strong> - Monetising through AdSense, Super Chats, and channel memberships. Google deducts TDS under Section 194J on AdSense payments.</li>
<li><strong>Marathi Content Creators</strong> - Rapidly growing segment in Pune with dedicated followings across comedy, cooking, and cultural content. Must declare all platform payments.</li>
<li><strong>Food Bloggers (FC Road/Viman Nagar/Camp)</strong> - Must include fair market value of free meals and products exceeding Rs 20,000/year under Section 194R as taxable barter income.</li>
<li><strong>Influencer Agency Founders (Baner/Wakad)</strong> - Incorporated companies/LLPs face corporate ITR (ITR-6), PTRC for employees under Maharashtra PT Act, and GST registration.</li>
<li><strong>Digital Marketing Freelancers</strong> - Social media management services from Pune to clients across India. Must charge 18% GST (SAC 998361) once registered.</li>
</ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Services for Pune Influencers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-3 Filing with Profession Code 16021</td><td>Complete ITR-3 preparation using the dedicated Social Media Influencer profession code, with proper PGBP income classification for Pune-based creators.</td></tr>
<tr><td>Income Aggregation Across Platforms</td><td>Consolidation of Instagram, YouTube AdSense, brand deals, affiliate commissions (Amazon Associates, Meesho), sponsored posts, and online course sales into single computation.</td></tr>
<tr><td>Barter Deal Valuation (Section 194R)</td><td>Fair market valuation of free products, gifted gadgets, hotel stays received by Pune influencers. Proper inclusion in taxable income with supporting documentation.</td></tr>
<tr><td>Expense Deduction Optimisation</td><td>Camera equipment, ring lights, editing software (Adobe, Canva Pro), internet, co-working space rent in Baner/Koregaon Park, content shoot travel, and mobile phone costs.</td></tr>
<tr><td>GST Registration and Filing</td><td>Registration once turnover exceeds Rs 20 lakh. 18% GST invoices for brand deals. GSTR-1 and GSTR-3B returns. Input Tax Credit claims on business purchases.</td></tr>
<tr><td>Advance Tax Computation</td><td>Quarterly computation for creators with tax liability exceeding Rs 10,000. Scheduled before 15 June, September, December, March to avoid Section 234B/234C interest.</td></tr>
<tr><td>TDS Reconciliation</td><td>Matching TDS from brands/agencies/platforms (Section 194J at 10%, 194C at 1%, 194R at 10% on freebies) against Form 26AS and AIS for correct credits and refunds.</td></tr>
<tr><td>Maharashtra PTEC Compliance</td><td>Professional Tax Enrolment Certificate registration and Rs 2,500 annual payment for self-employed influencers via MAHAGST portal.</td></tr>

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
            <h2 class="section-title">How ITR Filing Works for Pune Influencers: 6-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From income compilation to e-verification - our CA-led ITR filing process for Pune content creators.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compile All Income Sources</h3><p class="step-description">Collect earnings reports from YouTube Studio (AdSense), Instagram Insights (brand deals), affiliate platforms (Amazon Associates, Meesho), and bank statements. For Pune creators, include payments from local brands, digital marketing agencies in Baner and Wakad. Your CA creates a master income sheet within 24 hours.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>YouTube/Instagram</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Brand Deals</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Affiliate Income</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M45 35v14M38 42h14" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><line x1="70" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><line x1="70" y1="42" x2="90" y2="42" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">Income Compiled</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Gather TDS Certificates and AIS Data</h3><p class="step-description">Download Form 26AS and Annual Information Statement from incometax.gov.in. Match TDS deducted by brands under Section 194J (10%) and Section 194R (10% on freebies over Rs 20,000). Your CA flags and resolves discrepancies with deductors before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 26AS</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS Download</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS Matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="25" width="64" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="28" y="38" width="48" height="8" rx="2" fill="#14365F" opacity="0.15"/><rect x="28" y="51" width="56" height="8" rx="2" fill="#14365F" opacity="0.15"/><circle cx="92" cy="62" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M87 62l3 3 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">TDS Reconciled</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Classify Income and Choose ITR Form</h3><p class="step-description">Determine whether ITR-3 (full books) or ITR-4 (presumptive under Section 44AD) is optimal. For Pune creators with receipts below Rs 2 crore and digital payments above 95%, presumptive at 6% may apply. Creators with significant expenses benefit from ITR-3. Profession Code 16021 is selected.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR-3 vs ITR-4</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Code 16021</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="100" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="25" width="35" height="35" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="37" y="47" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-3</text><rect x="65" y="25" width="35" height="35" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="82" y="47" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-4</text></svg></div><span class="illustration-label">Form Selected</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compute Deductions and Taxable Income</h3><p class="step-description">Deduct legitimate business expenses: camera equipment depreciation (Section 32), editing software, internet, co-working rent in Baner/Koregaon Park, content shoot travel, professional courses, and team payments. For food creators, restaurant review expenses (with invoices) qualify.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Equipment Depreciation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Software Costs</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Travel Expenses</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="55" width="12" height="15" rx="2" fill="#E8712C" opacity="0.6"/><rect x="42" y="40" width="12" height="30" rx="2" fill="#14365F" opacity="0.4"/><rect x="59" y="30" width="12" height="40" rx="2" fill="#E8712C" opacity="0.6"/><rect x="76" y="25" width="12" height="45" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">Tax Computed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR on incometax.gov.in</h3><p class="step-description">Your CA files ITR-3 or ITR-4 electronically with Profession Code 16021 under PGBP, all income sources consolidated, TDS credits, advance tax paid, and computation under chosen regime. Jurisdictional AO falls under CIT Pune 1-5 based on residential address.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PGBP Filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS Credits</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Regime Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M35 25h50M35 40h40M35 55h30" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.2"/><circle cx="85" cy="65" r="16" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><path d="M80 65l4 4 8-8" stroke="#E8712C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">ITR Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">E-Verify and Post-Filing Monitoring</h3><p class="step-description">E-verify within 30 days using Aadhaar OTP, net banking, or DSC. Patron monitors for Section 143(1) intimations from CPC and queries from Income Tax office, Pune. Refund tracking and escalation through the e-filing grievance mechanism.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-Verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CPC Monitored</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund Tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 37l5 5 12-12" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="72" width="50" height="12" rx="6" fill="#F5A623" opacity="0.3"/><text x="60" y="81" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">VERIFIED</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Influencer ITR Filing in Pune</h2>
            <div class="content-text">
                
                <ul>
<li><strong>PAN Card and Aadhaar</strong> - Mandatory. Must be linked for e-filing.</li>
<li><strong>Bank Statements (All Accounts)</strong> - Every account receiving brand payments, AdSense deposits, affiliate commissions, UPI payments</li>
<li><strong>YouTube/Instagram Earnings Reports</strong> - Revenue reports, brand deal receipts, platform analytics</li>
<li><strong>Brand Deal Contracts and Invoices</strong> - Collaboration agreements, payment confirmations, GST invoices issued</li>
<li><strong>TDS Certificates (Form 16A)</strong> - From brands, agencies, platforms that deducted TDS under Section 194J/194C/194R</li>
<li><strong>Expense Bills and Receipts</strong> - Camera/equipment invoices, software subscriptions, internet, co-working rent, travel receipts</li>
<li><strong>GST Returns (if registered)</strong> - GSTR-3B, GSTR-1, GST registration certificate</li>
<li><strong>Previous Year ITR</strong> - Last filed acknowledgement for carry-forward losses</li>
<li><strong>PTEC Receipt</strong> - Maharashtra Professional Tax payment challan from mahagst.gov.in</li>
</ul>
<div class="highlight-box" style="margin-top:20px;">
<p><strong>Pune-Specific Tip:</strong> For food and lifestyle influencers receiving free products from Pune-based brands, maintain a log of all barter deals with fair market value. Products worth over Rs 20,000 in a year trigger TDS under Section 194R - the brand should deduct 10% before sending products, and you must declare the value in your ITR.</p>
</div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges for Pune Influencers Filing ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-3 vs ITR-4 Confusion</td><td>Creators file the wrong form. Many assume ITR-3 is mandatory with Profession Code 16021, but influencers under Rs 2 crore can use ITR-4 presumptive. Wrong form leads to overpayment or CPC rejection.</td><td>Both forms computed. Patron determines which saves more tax based on your actual income and expenses.</td></tr>
<tr><td>Undeclared Barter Income</td><td>Food influencers on FC Road and lifestyle creators in Koregaon Park receive free meals and products. Section 194R requires 10% TDS on freebies over Rs 20,000. Mismatch triggers automated CIT Pune notices.</td><td>Barter deals valued at fair market price. Section 194R TDS reconciled. Income properly declared in ITR.</td></tr>
<tr><td>Missing GST Registration Threshold</td><td>Creators crossing Rs 20 lakh turnover (including barter value) must register for GST and charge 18%. Many are unaware barter counts. Non-registration penalty: 10% of tax due or Rs 10,000.</td><td>Turnover monitored including barter. GST registration triggered at threshold. GSTR-3B and GSTR-1 filed on time.</td></tr>
<tr><td>No Advance Tax Planning</td><td>Irregular income - one viral reel can bring Rs 5 lakh. Without quarterly advance tax, Section 234B (1%/month) and 234C (1%/month) interest adds up significantly.</td><td>Quarterly advance tax computed and deposited before each 15th deadline. Interest avoided completely.</td></tr>
<tr><td>Maharashtra PTEC Oversight</td><td>Self-employed influencers must obtain PTEC under Maharashtra PT Act and pay Rs 2,500/year. Most creators are unaware. MAHAGST portal revised dates to 15th since Feb 2026.</td><td>PTEC registration and annual payment. Maharashtra PT compliance bundled with ITR filing.</td></tr>

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
            <h2 class="section-title">ITR Filing Fees for Influencers in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-4 Presumptive (Micro Influencer)</td><td>Rs 3,999 - Rs 5,999</td></tr>
<tr><td>ITR-3 Full Books (Mid/Macro Influencer)</td><td>Rs 5,999 - Rs 14,999</td></tr>
<tr><td>ITR + GST Filing Bundle</td><td>Rs 9,999 - Rs 19,999</td></tr>
<tr><td>Influencer Agency (LLP/Pvt Ltd)</td><td>Rs 14,999 - Rs 49,999</td></tr>
<tr><td>Advance Tax (Quarterly)</td><td>Rs 1,999/quarter</td></tr>
<tr><td>Tax Audit u/s 44AB</td><td>Rs 9,999 - Rs 24,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR for Influencers consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20influencer%20ITR%20in%20Pune.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Influencer ITR Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>ITR Preparation</td><td>3-5 days after all documents received</td></tr>
<tr><td>Advance Tax Q1</td><td>15 June (15% of estimated annual tax)</td></tr>
<tr><td>Advance Tax Q2</td><td>15 September (cumulative 45%)</td></tr>
<tr><td>Tax Audit (if applicable)</td><td>30 September (receipts > Rs 50 lakh)</td></tr>
<tr><td>Advance Tax Q3</td><td>15 December (cumulative 75%)</td></tr>
<tr><td>Advance Tax Q4</td><td>15 March (100%)</td></tr>
<tr><td>ITR Filing (Non-Audit)</td><td>31 July (most influencers)</td></tr>
<tr><td>ITR Filing (Audit Cases)</td><td>31 October (receipts > Rs 50 lakh)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing:</strong> No visit to the Income Tax Office required. Patron's Pune office at RTC Silver, Wagholi handles all filings. Walk-in or connect online. The Principal CIT Pune uses AIS data for automated scrutiny of influencer income.</p>

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
            <h2 class="section-title">Why Choose Patron for Influencer ITR in Pune</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pune Office - RTC Silver, Wagholi</h3><p>Accessible to creators across Koregaon Park, Baner, Hinjewadi. Walk-in consultations for content creators and agencies.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3>Creator Economy Expertise</h3><p>Profession Code 16021, barter deal taxation, platform payment structures, and specific deduction categories for influencers. Not generic ITR filing.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Jurisdictional Familiarity</h3><p>Experienced with Principal CIT Pune, CIT Appeals Pune, and ITAT Pune Bench for assessment proceedings, notices, and refund claims.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Fast Turnaround</h3><p>3-5 working days for ITR filing. Quarterly advance tax updates. ITR + GST bundle packages. Published and transparent creator-specific pricing. 4.9 Google rating.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Content Creators</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<div class="highlight-box"><p>"Patron handled my YouTube + Instagram + brand deal income in one ITR-3. They valued my barter deals correctly and claimed every legitimate expense. Refund came in 45 days." - <strong>Tech Reviewer, Hinjewadi</strong></p></div>
<p>With offices in <strong>Pune, Mumbai, Delhi, and Gurugram</strong>, Patron serves creators across India with local expertise and national reach.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron vs Typical Pune CA Firms for Influencer ITR</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Typical Pune CA</th></tr></thead>
                    <tbody>
                        <tr><td>Creator Knowledge</td><td>Profession Code 16021, barter tax, platform income</td><td>Generic ITR, limited digital knowledge</td></tr>
<tr><td>Turnaround</td><td>3-5 days, dedicated CA</td><td>7-15 days seasonal</td></tr>
<tr><td>GST + ITR Bundle</td><td>Integrated filing, one CA handles both</td><td>Separate consultants, higher cost</td></tr>
<tr><td>Jurisdiction</td><td>CIT Pune, ITAT, Maharashtra PT</td><td>Varies</td></tr>
<tr><td>Pricing</td><td>Published, creator-specific plans</td><td>Variable, no creator pricing</td></tr>
<tr><td>Track Record</td><td>10,000+ businesses, 4 offices</td><td>100-500 clients, 1 office</td></tr>

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
            <h2 class="section-title">Related Services for Pune Creators</h2>
            <div class="content-text">
                
                <p>Influencer ITR filing in Pune is part of Patron's creator economy compliance ecosystem:</p>
<ul>
<li><a href="/itr-for-influencers">ITR for Influencers in India</a> - National overview of our creator tax practice</li>
<li><a href="/income-tax-return">Income Tax Return Filing</a> - General ITR filing services</li>
<li><a href="/gst-returns">GST Returns</a> - Monthly GST compliance for registered creators</li>
<li><a href="/tds-return-filing-24q">TDS Return Filing</a> - For influencer agencies deducting TDS</li>
<li><a href="/proprietorship-registration">Proprietorship Registration</a> - Business registration for solo creators</li>
</ul>
<p>For Pune-specific services, see <a href="/income-tax-return/pune">ITR Filing in Pune</a> and <a href="/gst-registration/pune">GST Registration in Pune</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Influencer Tax Compliance</h2>
            <div class="content-text">
                
                <p><strong>Income Tax Act, 1961:</strong> Section 44AD (presumptive 6%/8%), Section 44AB (audit if receipts >Rs 50L), Section 194J (TDS 10% professional fees), Section 194R (TDS 10% on freebies >Rs 20K), Section 194C (TDS 1% contracts), Section 115BAC (new regime), Section 234B/234C (advance tax interest).</p>
<p><strong>Key Codes:</strong> Profession Code 16021 - Social Media Influencers | SAC 998361 - Promotional Services (GST).</p>
<p><strong>CGST Act, 2017:</strong> 18% GST on promotional services once turnover exceeds Rs 20 lakh. Input Tax Credit on business purchases.</p>
<p><strong>Maharashtra PT Act, 1975:</strong> PTEC mandatory for self-employed influencers at Rs 2,500/year. PTRC for influencer agencies with employees. Filed via mahagst.gov.in.</p>
<p><strong>Key Penalties:</strong> Late ITR: Rs 5,000 u/s 234F. Advance tax shortfall: 1%/month u/s 234B. Non-registration GST: 10% of tax or Rs 10,000. Non-disclosure of barter: assessment u/s 148.</p>
<p><strong>Key Portals:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a> | <a href="https://www.mahagst.gov.in" target="_blank" rel="noopener">mahagst.gov.in</a> | <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - ITR for Influencers in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about Profession Code 16021, ITR forms, barter taxation, GST, and compliance for Pune content creators.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR for Influencers',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which Income Tax office handles influencer ITR matters in Pune?</h3>
                        <div class="faq-expanded__a"><p>The Principal Commissioner of Income Tax, Pune oversees all direct tax matters through CIT Pune 1 to 5. Your jurisdictional Assessing Officer is determined by residential address. Patron's CA team is experienced with all CIT Pune wards and represents creators in assessment proceedings and notice responses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I file my influencer ITR online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron offers fully digital ITR filing for Pune influencers. Upload bank statements, brand deal invoices, and platform earnings through our secure portal. Your dedicated CA prepares the ITR within 3 to 5 working days. Walk-in also available at RTC Silver, Wagholi.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the ITR filing fee for influencers in Pune?</h3>
                        <div class="faq-expanded__a"><p>Fees start from Rs 3,999 for micro-influencers using ITR-4 presumptive. ITR-3 with full books costs Rs 5,999 to Rs 14,999 depending on complexity. ITR plus GST bundle from Rs 9,999. Call +91 945 945 6700 for an exact quote.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does influencer ITR filing take in Pune?</h3>
                        <div class="faq-expanded__a"><p>3 to 5 working days for ITR-4 presumptive and straightforward ITR-3 cases. Complex cases with multiple income streams, GST reconciliation, or barter deal valuation take 5 to 7 working days. Tax audit cases require additional time before 30 September deadline.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Which ITR form should a Pune influencer use - ITR-3 or ITR-4?</h3>
                        <div class="faq-expanded__a"><p>If annual receipts are below Rs 2 crore and you prefer simplicity, ITR-4 under Section 44AD lets you declare 6 percent of digital receipts as taxable income without detailed books. If you have significant deductible expenses like camera equipment, studio rent, or team payments, ITR-3 is better. Patron runs both calculations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Are barter deals and free products taxable for Pune influencers?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 194R, brands must deduct 10 percent TDS on benefits exceeding Rs 20,000 per year. The fair market value of free products whether a Rs 1 lakh camera for review or free restaurant meals on FC Road must be included in taxable income. Patron helps value and report barter transactions correctly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Do influencers in Pune need GST registration?</h3>
                        <div class="faq-expanded__a"><p>Yes if your annual aggregate turnover including barter value exceeds Rs 20 lakh. You must charge 18 percent GST on all services to brands, file GSTR-3B monthly, and GSTR-1 for outward supplies. Input Tax Credit on business purchases can be claimed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if a Pune influencer misses the ITR deadline?</h3>
                        <div class="faq-expanded__a"><p>Filing after 31 July attracts Rs 5,000 penalty under Section 234F. Interest under Section 234A at 1 percent per month applies on unpaid tax. You also lose the ability to carry forward business losses. Belated returns can be filed until 31 December but penalties still apply.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Influencer ka ITR kaise file karein?</strong> Profession Code 16021 select karein ITR-3 mein. Brand deals, YouTube AdSense, affiliate income - sab PGBP head mein declare karein. Expenses deduct karein aur tax compute karein.</p>
<p><strong>Kya free products par tax lagta hai?</strong> Haan. Rs 20,000 se zyada value ke free products par brand 10% TDS katega Section 194R ke under. Fair market value ITR mein declare karni hogi.</p>
<p><strong>GST kab lagta hai influencer par?</strong> Jab annual turnover (barter value including) Rs 20 lakh cross kare. 18% GST lagega promotional services par (SAC 998361).</p>
<p><strong>Advance tax kab dena hai?</strong> 15 June (15%), 15 September (45%), 15 December (75%), 15 March (100%). Tax liability Rs 10,000 se zyada ho toh mandatory hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Wait - File Your Creator ITR Today</h2>
            <div class="content-text">
                
                <p><strong>ITR deadline for non-audit influencers is 31 July</strong> - missing it costs Rs 5,000 under Section 234F. Advance tax deadlines are fixed quarterly with Section 234C interest from first missed date. <strong>GST registration must happen within 30 days of crossing Rs 20 lakh.</strong> The Income Tax Department now uses AI to cross-check influencer earnings against brand TDS data. File correctly and on time.</p>
<p><strong>Call Patron today - <a href="tel:+919459456700">+91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20influencer%20ITR%20in%20Pune.%20Please%20call%20me." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Professional Influencer ITR Filing in Pune - Get Started</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">ITR filing for influencers in Pune is no longer optional - it is a regulated professional obligation with Profession Code 16021 and clear consequences for non-compliance. Whether you are a micro-influencer creating Marathi content, a mid-tier food blogger reviewing FC Road restaurants, or a macro creator running an agency from Baner, structured tax filing protects your income and builds financial credibility.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting's Pune office at RTC Silver, Wagholi brings expertise in creator economy taxation, from ITR-3 filing with Profession Code 16021 to GST compliance and barter deal valuation under Section 194R. 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20influencer%20ITR%20in%20Pune.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Influencer%20ITR%20Filing%20in%20Pune&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20influencer%20ITR%20filing%20in%20Pune.%0A%0APlease%20contact%20me.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR for Influencers Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">CA-assisted influencer ITR filing available in major cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;">
        <div class="pa-city-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:2px solid var(--orange);border-radius:var(--radius-md);opacity:0.6;pointer-events:none;position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Pune</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div>
        <a href="/itr-for-influencers/mumbai" class="pa-city-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Mumbai</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Maharashtra</div></div></a>
        <a href="/itr-for-influencers/delhi" class="pa-city-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Delhi</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Delhi NCR</div></div></a>
        <a href="/itr-for-influencers/gurugram" class="pa-city-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Gurugram</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title" style="font-size:18px;font-weight:700;color:var(--blue);margin-bottom:6px;">Related Services in Pune</div>
    <div class="pa-block-sub" style="font-size:14px;color:var(--text-muted);margin-bottom:20px;">End-to-end creator economy compliance</div>
    <div class="pa-cross-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;">
        <a href="/income-tax-return/pune" class="pa-cross-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Income Tax Return Filing</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Pune</div></div></a>
        <a href="/gst-registration/pune" class="pa-cross-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">GST Registration</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Company Registration</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Startup Registration</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Trademark Registration</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Pune</div></div></a>
        <a href="/payroll-services/pune" class="pa-cross-card" style="display:flex;align-items:center;gap:12px;padding:16px;background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-md);text-decoration:none;transition:all 0.2s;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title" style="font-weight:700;color:var(--blue);font-size:14px;">Payroll Services</div><div class="pa-card-sub" style="font-size:12px;color:var(--text-muted);">Pune</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 25 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">25 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually (Tier 1). Profession Code 16021, ITR forms, GST thresholds, TDS rates, and Maharashtra PT rules are verified against official sources (incometax.gov.in, mahagst.gov.in). Contact Patron for latest updates.</p>
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
