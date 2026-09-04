
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
    <title>FSSAI Annual Return in Pune - Form D1, D2 & Due Date</title>
    <meta name="description" content="CA-assisted FSSAI annual return filing in Pune. Form D1 compliance for food manufacturers and importers. Serving Chakan, MIDC Bhosari, Hinjewadi. Call +91 945 945 6700.">
    <link rel="canonical" href="/fssai-returns/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Annual Return in Pune - Form D1, D2 & Due Date">
    <meta property="og:description" content="CA-assisted FSSAI annual return filing in Pune. Form D1 compliance for food manufacturers and importers. Serving Chakan, MIDC Bhosari, Hinjewadi. Call +91 945 945 6700.">
    <meta property="og:url" content="/fssai-returns/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Annual Return in Pune - Form D1, D2 & Due Date">
    <meta name="twitter:description" content="CA-assisted FSSAI annual return filing in Pune. Form D1 compliance for food manufacturers and importers. Serving Chakan, MIDC Bhosari, Hinjewadi. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "FSSAI Returns in Pune",
      "description": "CA-assisted FSSAI annual return filing in Pune. Form D1 compliance for food manufacturers and importers. Serving Chakan, MIDC Bhosari, Hinjewadi. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/fssai-returns/pune",
      "serviceType": "FSSAI Returns in Pune",
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
        "url": "https://www.patronaccounting.com/fssai-returns/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "12",
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
          "name": "FSSAI Returns Filing: Form D1 and D2",
          "item": "https://www.patronaccounting.com/fssai-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "FSSAI Returns in Pune",
          "item": "https://www.patronaccounting.com/fssai-returns/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to file FSSAI annual return in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to the FoSCoS portal at foscos.fssai.gov.in using your FSSAI license credentials. Navigate to 'Annual Return', select the financial year, and enter product-wise data in Form D1. Submit before 31 May. Patron's Pune office at RTC Silver, Wagholi handles the entire filing process online for Pune food businesses, from data compilation to portal submission."
          }
        },
        {
          "@type": "Question",
          "name": "Who needs to file FSSAI annual return in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All Pune food business operators holding FSSAI State or Central license who are engaged in manufacturing, importing, exporting, repacking, or relabelling food products must file Form D1. This includes MIDC Bhosari food factories, Chakan food processors, food importers, and dairy units. Restaurants, grocery stores, fast-food joints, and petty food businesses with basic registration are exempt."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late FSSAI return in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The penalty for filing after the 31 May deadline is Rs 100 per day of delay. The maximum penalty is capped at 5 times the annual FSSAI license fee. All accumulated penalties must be cleared before the FSSAI license can be renewed. The FDA Maharashtra Pune regional office monitors compliance and issues notices to non-filers."
          }
        },
        {
          "@type": "Question",
          "name": "Is there a fee for filing the FSSAI annual return?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. There is no government fee for filing the FSSAI annual return. The FoSCoS portal is free to use. The only cost is professional advisory fees if you engage a CA or compliance consultant. Patron Accounting offers FSSAI return filing for Pune food businesses starting from Rs 3,000 per license."
          }
        },
        {
          "@type": "Question",
          "name": "Do restaurants in Pune need to file FSSAI annual return?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Restaurants, fast-food joints, grocery stores, canteens, and other food service establishments in Pune are exempt from filing the FSSAI annual return. The filing obligation applies only to licensed manufacturers, importers, exporters, repackers, and relabellers. Restaurants must comply with other FSSAI regulations including hygiene standards."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file FSSAI return for multiple licenses at once?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Each FSSAI license requires a separate Form D1 return, even if all licenses are held by the same food business operator. A Pune company with units at MIDC Bhosari and Chakan, each holding a separate license, must file two independent returns on the FoSCoS portal. Patron's Pune team coordinates multi-license filings to ensure all are submitted before the deadline. Quick Answers FSSAI return kaise file karte hain? FoSCoS portal (foscos.fssai.gov.in) par login karo, Form D1 select karo, product-wise data bharo, aur submit karo. Due date 31 May hai. Kya restaurant ko FSSAI return file karna padta hai? Nahi - restaurants, grocery stores, canteens exempt hain. Sirf manufacturers, importers, exporters aur repackers ko file karna hai. Late filing ki penalty kya hai? Rs 100 per day delay ke liye. Maximum 5 times annual license fee tak. Renewal se pehle penalty clear karni padti hai."
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
                        FSSAI Returns in Pune: Annual Compliance for Food Businesses
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form D1, FSSAI license copy, financial statements, production/import data</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> No government fee for FSSAI return filing | Professional fee Rs 3,000 - Rs 10,000</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Licensed food manufacturers, importers, exporters, and dairy units with turnover above Rs 12 lakh</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Due by 31 May every year for the preceding financial year</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'FSSAI Returns in Pune',
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
    'ctaText'    => 'Get expert FSSAI return filing for your Pune food business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is FSSAI Return</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Returns in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Returns in Pune Services at a Glance</strong></p>
                    <p>The FSSAI Annual Return (Form D1) is a mandatory yearly filing for licensed food business operators (FBOs) engaged in manufacturing, importing, exporting, repacking, or relabelling food products. Filed on the FoSCoS portal (foscos.fssai.gov.in) by 31 May each year, the return declares product quantities, values, and packaging details. Penalty for late filing is Rs 100 per day, capped at 5 times the annual license fee.</p>
                </div>
                <p>Pune's food industry is one of Maharashtra's largest - spanning packaged food manufacturers at MIDC Bhosari and Chakan, dairy cooperatives processing thousands of litres daily, D2C packaged food brands shipping from Baner and Koregaon Park, and a growing cloud kitchen ecosystem serving the Hinjewadi-Kharadi IT corridor. Every licensed manufacturer, importer, exporter, repacker and relabeller must file Form D1 on the <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS portal</a> by 31 May. Learn more about <a href="/fssai-returns">FSSAI Returns across India</a>.</p>
                <p>The FSSAI's Pune region (covering Raigad, Pune, Ratnagiri, Sangli, Satara, Sindhudurg and Kolhapur) is characterised by dense dairy units, nutraceutical zones and a high concentration of food processing facilities. Failure to file attracts a daily penalty of Rs 100 that accumulates until submission and must be cleared before license renewal. The <a href="https://fda.maharashtra.gov.in" target="_blank" rel="noopener">FDA Maharashtra</a> Pune regional office actively monitors compliance. Patron Accounting's Pune office provides end-to-end filing including <a href="/fssai-registration/pune">FSSAI Registration in Pune</a> and return compliance.</p>
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
                <h2 class="section-title">What Is the FSSAI Annual Return?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>The FSSAI Annual Return is a mandatory compliance filing under Clause 2.1.13(1) of the Food Safety and Standards (Licensing and Registration) Regulations, 2011, requiring licensed food business operators to declare product-wise manufacturing, handling, import and export details for the preceding financial year using Form D1.</p><p>The return captures product name, packaging size, quantity in metric tonnes, product value, and import/export quantities with port and country details. Since FY 2020-21, online submission on the FoSCoS portal is mandatory. Each FSSAI license requires a separate annual return - meaning a Pune FBO holding multiple licenses for different units must file separate Form D1 returns per license.</p><p>For Pune's food ecosystem - where MIDC Bhosari houses packaged snack and ready-to-eat meal manufacturers, the Chakan belt has food ingredient and dairy processing plants, and Pimpri-Chinchwad includes spice and condiment producers - the annual return is a critical regulatory checkpoint. The FDA Maharashtra Pune office actively monitors filing and the Rs 100/day penalty accumulates rapidly.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Returns in Pune:</strong></p>
                    <ul><li><strong>Form D1:</strong> FSSAI annual return form for licensed food manufacturers and importers</li><li><strong>FoSCoS:</strong> Food Safety Compliance System - official FSSAI portal at foscos.fssai.gov.in</li><li><strong>Regulation 2.1.13:</strong> FSS Licensing Regulation mandating annual return filing</li><li><strong>FBO:</strong> Food Business Operator - any person or entity carrying out food business activities</li><li><strong>FDA Maharashtra:</strong> State enforcement authority for food safety regulations</li><li><strong>31 May Deadline:</strong> Annual deadline for Form D1 filing for the preceding financial year</li></ul>

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
                            <!-- FSSAI tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Returns in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>31 May Deadline</span>
                        <strong>Form D1 on FoSCoS</strong>
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
            <h2 class="section-title">Who Needs to File FSSAI Returns in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Food Manufacturers at MIDC Bhosari and Chakan</strong> - Any FBO holding FSSAI State License (turnover Rs 12 lakh to Rs 20 crore) or Central License (above Rs 20 crore) engaged in manufacturing, processing, repacking or relabelling. Includes packaged snack manufacturers, ready-to-eat meal producers, spice factories and bakery units. See also <a href="/fssai-central-license">FSSAI Central License</a>.</p><p><strong>Food Importers and Exporters</strong> - Pune-based businesses importing or exporting food products must declare quantities with port and country details. Relevant for food ingredient importers near logistics hubs. Related: <a href="#">Import Export Code</a>.</p><p><strong>Dairy Units and Milk Cooperatives</strong> - Pune region's dense dairy operations including cooperative dairies and private milk processing plants. All licensed dairy FBOs must file Form D1 annually.</p><p><strong>D2C Packaged Food Brands</strong> - Pune's growing D2C brands in Baner, Koregaon Park and Magarpatta City selling packaged snacks, health foods and organic products online must file if they hold State/Central license and manufacture or repack.</p><p><strong>Exempt:</strong> Restaurants, fast-food joints, grocery stores, canteens, basic FSSAI registration holders (turnover below Rs 12 lakh), distributors, wholesalers, retailers, storage operators and transporters.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Return Filing Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Applicability Assessment</td><td>Review of your FSSAI license type and activities to determine whether annual return filing is mandatory under Regulation 2.1.13.</td></tr><tr><td>Form D1 Data Compilation</td><td>Collection and organisation of product-wise manufacturing, handling, import and export data from production records, sales invoices and financial statements.</td></tr><tr><td>FoSCoS Portal Filing</td><td>End-to-end filing of Form D1 on foscos.fssai.gov.in with data verification, OTP authentication and submission confirmation before 31 May.</td></tr><tr><td>Multi-License Return Filing</td><td>Coordinated annual return filing for Pune food businesses holding multiple FSSAI licenses for different manufacturing units. Each license requires a separate Form D1.</td></tr><tr><td>Penalty Clearance and Late Filing</td><td>Filing overdue FSSAI returns with calculation and payment of the Rs 100/day penalty. Clearance of all pending penalties before license renewal.</td></tr><tr><td>Compliance Calendar Service</td><td>Proactive monitoring of 31 May deadline and other FSSAI dates including license renewal with automated alerts. Bundled with <a href="/gst-returns/pune">GST Returns in Pune</a> and <a href="/accounting-services">Accounting Services</a>.</td></tr>

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
            <h2 class="section-title">FSSAI Return Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune team manages the entire FSSAI return filing process - from applicability check to FoSCoS portal submission and record maintenance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify FSSAI License Type and Filing Obligation</h3><p class="step-description">Confirm that your Pune food business holds an FSSAI State or Central License (not just basic registration) and is engaged in manufacturing, importing, exporting, repacking or relabelling. FBOs with basic registration and turnover below Rs 12 lakh are exempt. For MIDC Bhosari and Chakan plants with multiple licenses, each must be checked individually.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>License type confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Obligation assessed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="32" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M56 32l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">License Check</text></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Compile Product-Wise Data for Form D1</h3><p class="step-description">Gather data for each food product manufactured, handled, imported or exported during the financial year (1 April to 31 March). Required: product name, packaging size, quantity in metric tonnes, value in rupees. For imports/exports: port name, country and quantity in kg. Source from production logs, sales registers, GST returns and shipping documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Production data compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Values reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="40" height="8" rx="3" fill="#F5A623" opacity="0.3"/><line x1="25" y1="32" x2="85" y2="32" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="25" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="25" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="1" opacity="0.2"/><text x="60" y="72" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Product Data</text></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Log In to the FoSCoS Portal</h3><p class="step-description">Access foscos.fssai.gov.in using your FSSAI license credentials. Navigate to 'Annual Return', click 'Fill Annual Return' and select the financial year. Enter OTP for authentication. Pune food businesses filing for the first time should ensure their FoSCoS account is active well before the 31 May deadline.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal accessed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP authenticated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FoSCoS</text><rect x="35" y="38" width="50" height="10" rx="5" fill="#E8712C" opacity="0.5"/><text x="60" y="46" font-size="6" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial">Login + OTP</text></svg></div><span class="illustration-label">Logged In</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Enter Data in the Online Form D1</h3><p class="step-description">Fill product-wise details in the FoSCoS Form D1 template structured by product category. For Chakan food processors with multiple product lines (snacks, ready-to-eat, ingredients), each category must be listed individually. Review all entries for accuracy - FDA Maharashtra Pune cross-references data with license conditions during enforcement checks.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Products entered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">D1</text><rect x="30" y="32" width="60" height="6" rx="3" fill="#E8712C" opacity="0.2"/><rect x="30" y="42" width="50" height="6" rx="3" fill="#14365F" opacity="0.1"/><rect x="30" y="52" width="40" height="6" rx="3" fill="#F5A623" opacity="0.3"/></svg></div><span class="illustration-label">Form Filled</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Submit the Return and Download Acknowledgement</h3><p class="step-description">After verifying all entries, click 'Submit'. The system generates a confirmation with reference ID. Download and save for records. For Pune businesses with multiple licenses, repeat the filing for each license separately. Patron's Pune office files all returns and provides a consolidated report for multi-unit operations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Return submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgement saved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Submitted</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Maintain Records and Plan for Next Filing Cycle</h3><p class="step-description">Retain Form D1, FoSCoS acknowledgement and all supporting production and sales data for minimum 3 years. FDA Maharashtra inspectors may request records during food safety audits. Set reminder for next year's 31 May deadline. Patron's compliance service includes automated annual alerts for all Pune food business clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records archived</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Next year alert set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="20" x2="90" y2="20" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="30" x2="80" y2="30" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="30" y1="40" x2="70" y2="40" stroke="#14365F" stroke-width="1" opacity="0.2"/><rect x="60" y="48" width="30" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="75" y="56" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">3 Years</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for FSSAI Return Filing in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>FSSAI License Copy:</strong> Current FSSAI State or Central License with 14-digit license number.</li><li><strong>Production Records:</strong> Product-wise manufacturing data for the financial year including quantities in metric tonnes and packaging details.</li><li><strong>Sales Records and Invoices:</strong> Product-wise sales data with values, corroborated with GST return filings.</li><li><strong>Import/Export Documentation:</strong> Bill of entry, shipping bills and customs declarations for imported or exported food products.</li><li><strong>Financial Statements:</strong> Revenue and sales figures to verify turnover against license category thresholds.</li><li><strong>Previous Year's FSSAI Return:</strong> For reference and consistency in reporting.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> MIDC Bhosari and Chakan food manufacturers should reconcile production data with factory registers and GST returns before filing. Pune dairy units should ensure milk procurement and processing quantities match cooperative records.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in FSSAI Return Filing in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-Unit Filing for MIDC Plants</td><td>Pune FBOs with separate licenses per unit at Bhosari, Chakan and Ranjangaon must file individual Form D1 per license</td><td>Patron coordinates multi-license filings ensuring no unit is missed</td></tr><tr><td>Product Data Reconciliation</td><td>D2C brands struggle to reconcile quantities across production logs, warehouses and e-commerce platforms</td><td>Patron's CA team compiles and reconciles data with metric tonne conversion</td></tr><tr><td>Dairy Units with Complex Chains</td><td>Cooperatives sourcing from multiple centres face data compilation challenges for each milk product</td><td>Patron handles dairy-specific data compilation including procurement and output</td></tr><tr><td>Confusion About Exemptions</td><td>Pune restaurant owners incorrectly believe they must file annual returns</td><td>Patron clarifies applicability before engaging - restaurants and basic registration holders are exempt</td></tr>

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
            <h2 class="section-title">FSSAI Return Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Single License, Standard (up to 10 products)</td><td>Nil govt fee + Patron Rs 3,000-5,000</td></tr><tr><td>Single License, Complex (10+ products/import-export)</td><td>Nil govt fee + Patron Rs 5,000-8,000</td></tr><tr><td>Multi-License Filing (per additional license)</td><td>Nil govt fee + Patron Rs 2,000-4,000 per license</td></tr><tr><td>Dairy Unit (Form D1 with milk product details)</td><td>Nil govt fee + Patron Rs 5,000-10,000</td></tr><tr><td>Late Filing Penalty Clearance</td><td>Rs 100/day (max 5x license fee) + included in filing fee</td></tr><tr><td>FSSAI Compliance Calendar (annual)</td><td>Patron Rs 5,000-10,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Returns in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Return Filing Timeline and Deadlines</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Financial Year End</td><td>31 March (data captured for 1 Apr - 31 Mar)</td></tr><tr><td>Data Compilation</td><td>April - early May</td></tr><tr><td>Form D1 Filing Deadline</td><td>31 May every year (mandatory online via FoSCoS)</td></tr><tr><td>Penalty Trigger</td><td>1 June onward - Rs 100/day per license</td></tr><tr><td>Maximum Penalty Cap</td><td>5 times the annual license fee</td></tr><tr><td>License Renewal Block</td><td>All pending returns and penalties must be cleared</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> All FSSAI return filing is done online via the FoSCoS portal. No visit to the FDA Maharashtra Pune office is required. Patron's Pune office at RTC Silver, Wagholi handles the complete process digitally. Data compilation starts in April to ensure filing well before the 31 May deadline.</p>

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
            <h2 class="section-title">Why Choose Patron for FSSAI Returns in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Presence</h3><p class="feature-text">Walk-in at RTC Silver, Wagholi. 30 minutes from MIDC Bhosari, Chakan, Hinjewadi and Pimpri-Chinchwad - where food manufacturers are concentrated.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Food Industry Expertise</h3><p class="feature-text">Dedicated food compliance team with experience in FSSAI returns, license renewal and FDA Maharashtra audit preparation for Pune food manufacturers and dairy units.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Multi-License Coordination</h3><p class="feature-text">Separate Form D1 filing for each FSSAI license held by Pune food businesses with multiple manufacturing locations. No unit missed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Proactive Compliance</h3><p class="feature-text">Automated alerts for the 31 May deadline, license renewal dates and all FSSAI milestones. No missed deadlines. Data compilation starts in April.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Patron handled our Pvt Ltd registration end-to-end. Zero paperwork hassle for our founding team." - Startup Founder, Pune</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves food businesses and manufacturers across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional FSSAI Return Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>DIY Filing</th><th>With Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>FoSCoS Portal Navigation</td><td>Self-navigate and file</td><td>Agent handles all portal steps</td></tr><tr><td>Data Compilation</td><td>Self-gather from production records</td><td>CA team compiles and reconciles</td></tr><tr><td>Multi-Product Entry</td><td>Manual; risk of errors/omissions</td><td>Verified entry for every product line</td></tr><tr><td>Penalty Risk</td><td>High if deadline missed</td><td>Zero - proactive deadline tracking</td></tr><tr><td>Cost</td><td>Nil (no govt fee)</td><td>Rs 3,000-10,000 professional fee</td></tr><tr><td>Compliance Confidence</td><td>Self-assessed accuracy</td><td>Professional review before submission</td></tr>

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
                
                <p>For Pune food businesses needing related compliance services:</p><ul><li><a href="/fssai-returns">FSSAI Returns (India)</a> - National service</li><li><a href="/fssai-registration/pune">FSSAI Registration in Pune</a> - New license</li><li><a href="/fssai-registration">FSSAI Registration (India)</a></li><li><a href="/fssai-central-license">FSSAI Central License</a> - Above Rs 20 crore turnover</li><li><a href="/gst-returns/pune">GST Returns in Pune</a></li><li><a href="/shop-act-registration">Shop Act Registration</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for FSSAI Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> Food Safety and Standards Act, 2006; FSS (Licensing and Registration) Regulations, 2011.</p><p><strong>Key Regulation:</strong> Clause 2.1.13(1) mandates annual return filing for licensed manufacturers and importers.</p><p><strong>Form:</strong> Form D1 - annual return for all licensed FBOs in manufacturing, importing, exporting, repacking, relabelling.</p><p><strong>Portal:</strong> <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS (foscos.fssai.gov.in)</a> - mandatory online filing since FY 2020-21.</p><p><strong>Due Date:</strong> 31 May every year for the preceding financial year.</p><p><strong>Government Fee:</strong> Nil - no fee for annual return filing.</p><p><strong>Penalty:</strong> Rs 100 per day of delay after 31 May; maximum 5 times annual license fee. Must be cleared before license renewal.</p><p><strong>Separate Per License:</strong> Filing is license-specific. An FBO with 3 licenses files 3 separate Form D1 returns.</p><p><strong>Jurisdictional Authority:</strong> <a href="https://fda.maharashtra.gov.in" target="_blank" rel="noopener">FDA Maharashtra</a>, Pune Regional Office (state-licensed FBOs); FSSAI Central Licensing, Mumbai-Pune Zone (centrally-licensed FBOs).</p><p><strong>Exempt:</strong> Restaurants, fast-food, grocery, canteens, petty food businesses with basic registration, distributors, wholesalers, retailers, storage and transport.</p>

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
                    <h2 class="faq-expanded__title">FAQs - FSSAI Returns in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about FSSAI return filing in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'FSSAI Returns in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to file FSSAI annual return in Pune?</h3>
                        <div class="faq-expanded__a"><p>Log in to the FoSCoS portal at foscos.fssai.gov.in using your FSSAI license credentials. Navigate to 'Annual Return', select the financial year, and enter product-wise data in Form D1. Submit before 31 May. Patron's Pune office at RTC Silver, Wagholi handles the entire filing process online for Pune food businesses, from data compilation to portal submission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Who needs to file FSSAI annual return in Pune?</h3>
                        <div class="faq-expanded__a"><p>All Pune food business operators holding FSSAI State or Central license who are engaged in manufacturing, importing, exporting, repacking, or relabelling food products must file Form D1. This includes MIDC Bhosari food factories, Chakan food processors, food importers, and dairy units. Restaurants, grocery stores, fast-food joints, and petty food businesses with basic registration are exempt.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for late FSSAI return in Pune?</h3>
                        <div class="faq-expanded__a"><p>The penalty for filing after the 31 May deadline is Rs 100 per day of delay. The maximum penalty is capped at 5 times the annual FSSAI license fee. All accumulated penalties must be cleared before the FSSAI license can be renewed. The FDA Maharashtra Pune regional office monitors compliance and issues notices to non-filers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is there a fee for filing the FSSAI annual return?</h3>
                        <div class="faq-expanded__a"><p>No. There is no government fee for filing the FSSAI annual return. The FoSCoS portal is free to use. The only cost is professional advisory fees if you engage a CA or compliance consultant. Patron Accounting offers FSSAI return filing for Pune food businesses starting from Rs 3,000 per license.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Do restaurants in Pune need to file FSSAI annual return?</h3>
                        <div class="faq-expanded__a"><p>No. Restaurants, fast-food joints, grocery stores, canteens, and other food service establishments in Pune are exempt from filing the FSSAI annual return. The filing obligation applies only to licensed manufacturers, importers, exporters, repackers, and relabellers. Restaurants must comply with other FSSAI regulations including hygiene standards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can I file FSSAI return for multiple licenses at once?</h3>
                        <div class="faq-expanded__a"><p>Each FSSAI license requires a separate Form D1 return, even if all licenses are held by the same food business operator. A Pune company with units at MIDC Bhosari and Chakan, each holding a separate license, must file two independent returns on the FoSCoS portal. Patron's Pune team coordinates multi-license filings to ensure all are submitted before the deadline.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>FSSAI return kaise file karte hain?</strong> FoSCoS portal (foscos.fssai.gov.in) par login karo, Form D1 select karo, product-wise data bharo, aur submit karo. Due date 31 May hai.</p><p><strong>Kya restaurant ko FSSAI return file karna padta hai?</strong> Nahi - restaurants, grocery stores, canteens exempt hain. Sirf manufacturers, importers, exporters aur repackers ko file karna hai.</p><p><strong>Late filing ki penalty kya hai?</strong> Rs 100 per day delay ke liye. Maximum 5 times annual license fee tak. Renewal se pehle penalty clear karni padti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Before 31 May - Avoid Daily Penalties</h2>
            <div class="content-text">
                
                <p>The 31 May deadline is absolute. Every day after, a penalty of Rs 100 accumulates per license. For a Pune food manufacturer with 3 licensed units, that's Rs 300 per day across all licenses. More critically, all pending returns and penalties must be cleared before license renewal - meaning a missed return can block your entire food manufacturing operation. Filing costs nothing (no government fee) and takes 1-2 hours with professional assistance.</p><p><strong>File your FSSAI return now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your FSSAI Returns in Pune Before 31 May</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">FSSAI annual return filing in Pune is a mandatory compliance obligation for every licensed food manufacturer, importer, exporter, repacker and relabeller. With Pune's food industry spanning MIDC Bhosari's packaged food plants, Chakan's food processing units, the region's dairy cooperatives, and a growing D2C sector, FSSAI return compliance affects thousands of food businesses.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end FSSAI return filing - from applicability assessment and data compilation to FoSCoS portal submission, multi-license coordination and penalty clearance.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron is a trusted firm for FSSAI compliance across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Returns%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20FSSAI%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Returns Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert FSSAI return filing services in all major cities</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/fssai-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/fssai-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/fssai-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end food business compliance in Pune</div><div class="pa-cross-grid"><a href="/fssai-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 15 April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed before each 31 May deadline to reflect FSSAI regulation changes, FoSCoS portal updates and FDA enforcement changes. Last review: March 2026. Next review: April 2026.</p>
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
