
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
    <title>GST Return Filing in Pune - GSTR-1, 3B, Due Dates & ITC</title>
    <meta name="description" content="CA-assisted GST return filing in Pune. GSTR-1, GSTR-3B, GSTR-9 compliance for businesses. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-returns/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Return Filing in Pune - GSTR-1, 3B, Due Dates & ITC">
    <meta property="og:description" content="CA-assisted GST return filing in Pune. GSTR-1, GSTR-3B, GSTR-9 compliance for businesses. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-returns/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Return Filing in Pune - GSTR-1, 3B, Due Dates & ITC">
    <meta name="twitter:description" content="CA-assisted GST return filing in Pune. GSTR-1, GSTR-3B, GSTR-9 compliance for businesses. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Returns in Pune",
      "description": "CA-assisted GST return filing in Pune. GSTR-1, GSTR-3B, GSTR-9 compliance for businesses. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-returns/pune",
      "serviceType": "GST Returns in Pune",
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
        "url": "https://www.patronaccounting.com/gst-returns/pune",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "1500",
          "maxPrice": "5000",
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
          "name": "GST Returns: Types, Due Dates and Filing",
          "item": "https://www.patronaccounting.com/gst-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Returns in Pune",
          "item": "https://www.patronaccounting.com/gst-returns/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How to file GST return in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Log in to gst.gov.in with your GSTIN credentials. Navigate to Returns, select the period, and file GSTR-1 (outward supplies by 11th) and GSTR-3B (summary + payment by 20th). Enter sales data, ITC claimed, and pay net tax via the Electronic Cash Ledger. Submit with DSC or EVC. Patron's Pune office at RTC Silver, Wagholi handles the entire process online."
          }
        },
        {
          "@type": "Question",
          "name": "What are the due dates for GST returns in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-1 is due by the 11th of every month (13th after quarter for QRMP filers). GSTR-3B is due by the 20th monthly (22nd after quarter for Maharashtra QRMP filers - State Group 1). GSTR-9 annual return is due by 31 December. GSTR-9C reconciliation (turnover above Rs 5 crore) is also due by 31 December. Late filing attracts Rs 50 per day plus 18% interest."
          }
        },
        {
          "@type": "Question",
          "name": "What is the late fee for GST return filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late fee under Section 47 is Rs 50 per day per return (Rs 25 CGST + Rs 25 SGST) for returns with tax liability, capped at Rs 5,000. For nil returns, Rs 20 per day (Rs 10 + Rs 10). Additionally, interest at 18% per annum on unpaid tax from the day after due date. Late fees must be paid in cash - ITC cannot be used."
          }
        },
        {
          "@type": "Question",
          "name": "What is the QRMP scheme and can Pune businesses use it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The Quarterly Return Monthly Payment scheme allows GST-registered businesses with turnover up to Rs 5 crore to file GSTR-1 and GSTR-3B quarterly instead of monthly. Maharashtra is State Group 1, so quarterly GSTR-3B is due by the 22nd of the month after the quarter. Monthly tax payments via PMT-06 by the 25th. Invoice Furnishing Facility allows optional monthly B2B upload."
          }
        },
        {
          "@type": "Question",
          "name": "Must I file GST return even if there is no business activity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every GST-registered person must file nil returns (GSTR-1 and GSTR-3B) even with zero sales, purchases or tax liability. Non-filing attracts Rs 20 per day late fee (capped at Rs 5,000) and can lead to registration cancellation after consecutive defaults."
          }
        },
        {
          "@type": "Question",
          "name": "Can a CA file GST returns on my behalf in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. A Chartered Accountant or authorised person can file using the GST portal. The taxpayer provides portal access or authorises the CA via the 'Add Authorised Signatory' function on gst.gov.in. Patron's CA team manages monthly filing for over 10,000 businesses. Quick Answers GST return kaise file karte hain? gst.gov.in par login karo, GSTR-1 11 tarikh tak aur GSTR-3B 20 tarikh tak file karo. Tax pay karo aur submit karo. Nil return file karna zaroori hai? Haan - chahe koi bhi transaction na ho, nil GSTR-1 aur GSTR-3B file karna mandatory hai. Nahi kiya toh Rs 20/day late fee lagega. QRMP scheme kya hai? Rs 5 crore se kam turnover wale businesses quarterly return file kar sakte hain. Maharashtra mein quarterly GSTR-3B 22 tarikh tak file hota hai."
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
                        GST Returns in Pune: Monthly, Quarterly and Annual Filing
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Sales invoices, purchase records, ITC details, bank statements, e-way bills</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> No government fee for return filing | Professional fee Rs 1,500 - Rs 5,000 per month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All GST-registered businesses must file returns regardless of business activity</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Deadlines:</span> GSTR-1 by 11th monthly | GSTR-3B by 20th monthly | GSTR-9 by 31 December annually</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Returns in Pune',
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
    'ctaText'    => 'Get expert GST return filing for your Pune business today.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Are GST Returns</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Due Dates</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Return Types</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns in Pune Services at a Glance</strong></p>
                    <p>GST returns are periodic filings that every GST-registered business must submit on gst.gov.in declaring sales, purchases, tax collected, ITC claimed, and net tax payable. Pune businesses file GSTR-1 (outward supplies) by the 11th and GSTR-3B (summary + tax payment) by the 20th of every month. Annual return GSTR-9 is due by 31 December. Late filing attracts Rs 50 per day (Rs 20 for nil) plus 18% interest on unpaid tax.</p>
                </div>
                <p>Pune is one of Maharashtra's largest GST revenue centres, with over 3 lakh registered GSTINs spanning the Hinjewadi-Kharadi IT corridor, the Chakan-Talegaon auto manufacturing belt, the Pune Camp-Swargate trading hub, MIDC Bhosari's industrial zone, and a growing D2C e-commerce ecosystem in Baner and Koregaon Park. The CGST Commissionerate Pune-I and Pune-II and Maharashtra SGST Pune Division jointly administer GST compliance. Learn more about <a href="/gst-returns">GST Returns across India</a>.</p>
                <p>Late filing doesn't just attract penalties - it blocks your buyers' Input Tax Credit, disrupts supply chain relationships, and can trigger scrutiny notices from CGST Pune. Whether you are a Chakan manufacturer under QRMP or a Hinjewadi IT company managing multi-GSTIN returns, accurate filing is a non-negotiable monthly discipline. Patron Accounting's Pune office handles the complete cycle via <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. For new registrations, see <a href="/gst-registration/pune">GST Registration in Pune</a>.</p>
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
                <h2 class="section-title">What Are GST Returns?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A GST return is a periodic document filed on the GST portal (gst.gov.in) by every registered taxpayer, declaring outward supplies (sales), inward supplies (purchases), tax collected, ITC claimed, and net GST payable or refundable under the CGST Act, 2017.</p><p>The system comprises: GSTR-1 (invoice-level outward supply details, due 11th monthly), GSTR-3B (self-declared summary with tax payment, due 20th monthly), GSTR-9 (annual consolidation, due 31 December), and GSTR-9C (self-certified reconciliation for turnover above Rs 5 crore). QRMP filers submit quarterly with monthly PMT-06 payments.</p><p>For Pune's ecosystem - where Hinjewadi IT companies generate inter-state service invoices, MIDC Bhosari manufacturers handle complex input credits, and Pune Camp traders process thousands of B2B invoices - GST returns are the backbone of compliance. From July 2025, auto-populated GSTR-3B liability from GSTR-1 is hard-locked, and returns cannot be filed more than 3 years late - making accurate filing critical. Related: <a href="/gst-notice/pune">GST Notice handling in Pune</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns in Pune:</strong></p>
                    <ul><li><strong>GSTR-1:</strong> Monthly/quarterly return for outward supply details, due by the 11th</li><li><strong>GSTR-3B:</strong> Monthly summary return with tax payment, due by the 20th</li><li><strong>GSTR-9:</strong> Annual return consolidating the full financial year, due 31 December</li><li><strong>QRMP:</strong> Quarterly Return Monthly Payment scheme for turnover up to Rs 5 crore</li><li><strong>ITC:</strong> Input Tax Credit - GST on purchases set off against GST on sales</li><li><strong>PMT-06:</strong> Monthly estimated tax payment for QRMP filers in first 2 months of quarter</li></ul>

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
                            <!-- GST tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Returns in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CGST Pune</span>
                        <strong>Commissionerate I & II</strong>
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
            <h2 class="section-title">Who Must File GST Returns in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Every GST-Registered Business</strong> - Filing is mandatory regardless of business activity. Even zero-transaction months require nil returns. Non-filing for consecutive periods triggers registration cancellation under Section 29.</p><p><strong>IT Companies at Hinjewadi and Kharadi</strong> with inter-state service contracts file monthly GSTR-1 and GSTR-3B. Companies with multi-state GSTINs file 6-10 returns per month. Related: <a href="/private-limited-company-compliance">Pvt Ltd Company Compliance</a>.</p><p><strong>Manufacturers at MIDC Bhosari and Chakan</strong> with turnover up to Rs 5 crore can opt for QRMP (quarterly filing). Maharashtra is State Group 1 - GSTR-3B due by 22nd after quarter.</p><p><strong>Traders at Pune Camp and Swargate</strong> filing high B2B volumes must ensure GSTR-1 accuracy as it directly impacts buyers' ITC through auto-population. <strong>Composition Dealers</strong> file CMP-08 quarterly and GSTR-4 annually. <strong>Exporters</strong> must file monthly returns with proper Table 6A declarations for refund processing.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Return Filing Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 and GSTR-3B Filing</td><td>End-to-end monthly return filing including sales data compilation, invoice upload, ITC reconciliation, tax computation and portal submission before the 11th and 20th deadlines.</td></tr><tr><td>QRMP Scheme Management</td><td>Quarterly GSTR-1 and GSTR-3B filing for Pune manufacturers with turnover up to Rs 5 crore, including monthly PMT-06 tax payment and optional IFF for B2B invoice upload.</td></tr><tr><td>ITC Reconciliation (GSTR-2A/2B vs GSTR-3B)</td><td>Monthly reconciliation of available ITC from GSTR-2A/2B against claims in GSTR-3B, identifying mismatches and vendor follow-up for missing invoices.</td></tr><tr><td>GSTR-9 and GSTR-9C Annual Return</td><td>Full-year consolidation annual return and self-certified reconciliation (turnover above Rs 5 crore) by 31 December. Linked with <a href="/gst-audit">GST Audit</a>.</td></tr><tr><td>Multi-GSTIN Return Management</td><td>Coordinated filing across multiple state GSTINs for Hinjewadi IT companies and multi-branch businesses.</td></tr><tr><td>GST Compliance Health Check</td><td>Periodic review of filing accuracy, ITC claims, reverse charge compliance and e-way bill alignment. Integrates with <a href="/tally-accounting">Tally Accounting</a> and <a href="/accounting-services">Accounting Services</a>.</td></tr>

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
            <h2 class="section-title">GST Return Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our Pune CA team manages the entire GST return filing cycle - from data compilation to portal submission and annual return preparation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Compile Sales and Purchase Data</h3><p class="step-description">Gather all sales invoices (B2B, B2C, exports, SEZ), purchase invoices with GST, and debit/credit notes. For Hinjewadi IT companies, classify by place of supply (IGST for inter-state, CGST+SGST for intra-Maharashtra). For MIDC Bhosari manufacturers, separate raw material, capital goods and job work. Pune Camp traders reconcile sales registers with e-invoicing data. Patron collects data via cloud-shared folders.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Place-of-supply classified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="40" height="8" rx="3" fill="#F5A623" opacity="0.3"/><line x1="25" y1="32" x2="85" y2="32" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="25" y1="42" x2="75" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/><line x1="25" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="1" opacity="0.2"/><text x="60" y="72" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Invoices Compiled</text></svg></div><span class="illustration-label">Compiled</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reconcile ITC with GSTR-2A/2B</h3><p class="step-description">Before filing GSTR-3B, reconcile ITC available in GSTR-2A/2B (auto-populated from vendors' GSTR-1) against ITC you intend to claim. Identify missing invoices, excess claims and ineligible ITC. For Pune businesses with 50+ vendors, this is time-intensive but critical. From July 2025, GSTR-3B liability is hard-locked from GSTR-1.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mismatches identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="37" y="28" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">2A/2B</text><rect x="65" y="8" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="87" y="28" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">3B ITC</text><path d="M60 35l5 0" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITC Match</text></svg></div><span class="illustration-label">ITC Clean</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File GSTR-1 by the 11th of Each Month</h3><p class="step-description">Log in to gst.gov.in, upload invoice-level data. B2B invoices include buyer GSTIN, invoice number, taxable value and GST rate. B2C reported in aggregate. Export invoices in Table 6A. For Chakan manufacturers, ensure e-way bill numbers align with declarations. QRMP filers submit quarterly (by 13th) with optional IFF for monthly B2B upload.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-1 filed by 11th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-invoice aligned</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><rect x="35" y="35" width="50" height="10" rx="5" fill="#E8712C" opacity="0.7"/><text x="60" y="43" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">By 11th</text><circle cx="90" cy="58" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M87 58l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">GSTR-1 Done</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File GSTR-3B by the 20th of Each Month</h3><p class="step-description">Declare total outward supplies, inter-state supplies, ITC claimed and net tax payable. Pay tax via Electronic Cash Ledger before submission. Maharashtra QRMP filers: quarterly deadline is 22nd after quarter. Patron's Pune office files after cross-verifying all liability and ITC figures against GSTR-1 data.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-3B filed by 20th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax payment confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><rect x="35" y="35" width="50" height="10" rx="5" fill="#E8712C" opacity="0.7"/><text x="60" y="43" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">By 20th</text><text x="60" y="80" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Tax Paid</text></svg></div><span class="illustration-label">GSTR-3B Done</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Make Monthly Tax Payments (QRMP Filers)</h3><p class="step-description">QRMP taxpayers in Pune make monthly estimated tax payments via PMT-06 by the 25th in the first two months of each quarter. Payment based on previous quarter's liability (35% method) or actual liability. Ensures cash flow to government while reducing filing burden for smaller MIDC and Chakan manufacturers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PMT-06 paid by 25th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>QRMP compliance met</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="30" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PMT-06</text><text x="60" y="45" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">By 25th</text><text x="60" y="78" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">QRMP Only</text></svg></div><span class="illustration-label">PMT-06 Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File GSTR-9/9C Annual Return by 31 December</h3><p class="step-description">After FY ends (31 March), compile all monthly data into annual return GSTR-9. For turnover above Rs 5 crore, additionally file GSTR-9C (self-certified reconciliation with audited financial statements). Patron's CA team prepares alongside statutory audit ensuring consistency between tax and financial data.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9C reconciled (if >5cr)</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="2"/><path d="M55 30l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="78" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9 by 31 Dec</text></svg></div><span class="illustration-label">Annual Done</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Return Filing in Pune</h2>
            <div class="content-text">
                
                <ul><li><strong>Sales Invoices:</strong> All B2B and B2C invoices with buyer GSTIN (B2B), HSN/SAC codes, taxable value and GST rate.</li><li><strong>Purchase Invoices:</strong> All purchase invoices with supplier GSTIN, HSN/SAC and GST amounts for ITC claiming.</li><li><strong>Debit/Credit Notes:</strong> Any debit or credit notes issued or received during the period.</li><li><strong>Bank Statements:</strong> For tax payment verification and reconciliation.</li><li><strong>E-Way Bills:</strong> For goods movement transactions, ensuring alignment with GSTR-1 declarations.</li><li><strong>Import/Export Documents:</strong> Bills of entry, shipping bills and customs declarations.</li><li><strong>Previous Period Returns:</strong> GSTR-1, GSTR-3B, GSTR-2A/2B from prior periods for reconciliation.</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-specific tip:</strong> Hinjewadi IT companies should maintain a place-of-supply register. MIDC Bhosari manufacturers should keep job work challans aligned with return data. Pune Camp traders should reconcile e-invoicing data with GSTR-1 before filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in GST Return Filing in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-GSTIN Filing for IT Companies</td><td>Hinjewadi IT companies with 5 state registrations file 10 returns/month; missing one blocks buyers' ITC</td><td>Patron coordinates pan-India multi-GSTIN filing with consistent data reporting</td></tr><tr><td>ITC Mismatch for Pune Camp Traders</td><td>100+ vendor mismatches when vendors delay GSTR-1; hard-locked GSTR-3B from July 2025</td><td>Patron runs monthly GSTR-2B reconciliation with systematic vendor follow-up</td></tr><tr><td>QRMP vs Monthly Decision for MIDC</td><td>Manufacturers near Rs 5 crore threshold face wrong scheme choice impacting buyer ITC</td><td>Patron advises based on turnover, buyer profile and ITC flow requirements</td></tr><tr><td>Late Fee on Nil Returns</td><td>Small Pune businesses attract Rs 20/day for delayed nil filing - Rs 3,600 over 6 months</td><td>Patron files nil returns automatically every month for all managed clients</td></tr>

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
            <h2 class="section-title">GST Return Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 + GSTR-3B (up to 100 invoices)</td><td>Nil govt fee + Patron Rs 1,500-3,000/month</td></tr><tr><td>Monthly GSTR-1 + GSTR-3B (100-500 invoices)</td><td>Nil govt fee + Patron Rs 3,000-5,000/month</td></tr><tr><td>Monthly GSTR-1 + GSTR-3B (500+ invoices)</td><td>Nil govt fee + Patron Rs 5,000-10,000/month</td></tr><tr><td>QRMP Quarterly Filing + PMT-06</td><td>Nil govt fee + Patron Rs 3,000-5,000/quarter</td></tr><tr><td>GSTR-9 Annual Return</td><td>Nil govt fee + Patron Rs 5,000-15,000</td></tr><tr><td>GSTR-9C Reconciliation (>Rs 5 cr)</td><td>Nil govt fee + Patron Rs 10,000-25,000</td></tr><tr><td>Multi-GSTIN (per additional GSTIN)</td><td>Patron Rs 1,000-3,000/GSTIN/month</td></tr><tr><td>ITC Reconciliation (monthly)</td><td>Patron Rs 2,000-5,000/month</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Return Due Dates</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 (Monthly)</td><td>11th of next month</td></tr><tr><td>GSTR-3B (Monthly)</td><td>20th of next month</td></tr><tr><td>GSTR-1 (Quarterly/QRMP)</td><td>13th after quarter-end</td></tr><tr><td>GSTR-3B (Quarterly/QRMP)</td><td>22nd after quarter-end (Maharashtra State Group 1)</td></tr><tr><td>PMT-06 (QRMP monthly tax)</td><td>25th of each month (first 2 months of quarter)</td></tr><tr><td>CMP-08 (Composition)</td><td>18th after quarter-end</td></tr><tr><td>GSTR-9 (Annual Return)</td><td>31 December</td></tr><tr><td>GSTR-9C (Reconciliation)</td><td>31 December (turnover above Rs 5 crore)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> All GST return filing is online via gst.gov.in. No visit to the CGST Commissionerate Pune or Maharashtra SGST office is required. Patron's Pune office at RTC Silver, Wagholi manages the complete process digitally. GSTR-3B cannot be filed more than 3 years after the due date from July 2025 onward.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Returns in Pune?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Pune Office Presence</h3><p class="feature-text">Walk-in at RTC Silver, Wagholi. 30 minutes from Hinjewadi, Kharadi, Chakan, MIDC Bhosari and Pune Camp.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Volume Handling</h3><p class="feature-text">Monthly filing for 10 to 10,000+ invoices. Multi-GSTIN coordination for Hinjewadi IT companies with pan-India registrations.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">ITC Reconciliation Included</h3><p class="feature-text">Monthly GSTR-2A/2B vs GSTR-3B matching included in every package. Vendor follow-up for missing invoices. Clean ITC ledger guaranteed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">QRMP Advisory</h3><p class="feature-text">Expert guidance on whether QRMP is optimal for your Pune business based on turnover, buyer profile and ITC flow requirements.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><blockquote style="border-left:3px solid var(--orange);padding-left:16px;margin:16px 0;font-style:italic;color:var(--text-secondary);">"Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold." - CFO, Manufacturing, Maharashtra</blockquote><p>With offices in Pune, Mumbai, Delhi and Gurugram, Patron serves businesses across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Return Types for Pune Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Return</th><th>Typical Pune Filer</th><th>Frequency</th><th>Due Date</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1</td><td>IT company Hinjewadi; manufacturer MIDC</td><td>Monthly</td><td>11th of next month</td></tr><tr><td>GSTR-3B</td><td>All registered taxpayers</td><td>Monthly</td><td>20th of next month</td></tr><tr><td>GSTR-1 (QRMP)</td><td>Chakan manufacturer turnover < Rs 5 cr</td><td>Quarterly</td><td>13th after quarter</td></tr><tr><td>GSTR-3B (QRMP)</td><td>MIDC Bhosari unit turnover < Rs 5 cr</td><td>Quarterly</td><td>22nd after quarter (Maha)</td></tr><tr><td>GSTR-9</td><td>All regular taxpayers</td><td>Annual</td><td>31 December</td></tr><tr><td>GSTR-9C</td><td>Turnover > Rs 5 crore</td><td>Annual</td><td>31 December</td></tr><tr><td>CMP-08</td><td>Composition dealer Pune</td><td>Quarterly</td><td>18th after quarter</td></tr>

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
                
                <p>For Pune businesses needing related GST and compliance services:</p><ul><li><a href="/gst-returns">GST Returns (India)</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li><li><a href="/gst-notice/pune">GST Notice in Pune</a></li><li><a href="/gst-audit">GST Audit</a></li><li><a href="/accounting-services">Accounting Services</a></li><li><a href="/tally-accounting">Tally Accounting</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for GST Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> CGST Act, 2017 and Maharashtra GST Act, 2017.</p><p><strong>Key Sections:</strong> Section 37 (GSTR-1), Section 39 (GSTR-3B), Section 44 (GSTR-9), Section 47 (late fees).</p><p><strong>Late Fee (Section 47):</strong> Rs 50/day per return (Rs 25 CGST + Rs 25 SGST) with liability; Rs 20/day for nil. Cap: Rs 5,000 per return. Must be paid in cash.</p><p><strong>Interest (Section 50):</strong> 18% p.a. on outstanding tax from day after due date. 24% on excess ITC claimed.</p><p><strong>3-Year Filing Limit:</strong> From July 2025, GSTR-3B cannot be filed after 3 years from due date.</p><p><strong>Hard-Locking:</strong> From July 2025, auto-populated liability in GSTR-3B is non-editable. From Nov 2025, Table 3.2 fully locked.</p><p><strong>QRMP:</strong> Turnover up to Rs 5 crore. Maharashtra = State Group 1 (22nd). PMT-06 by 25th monthly.</p><p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> | <a href="https://punecgstcus.gov.in" target="_blank" rel="noopener">CGST Pune Zone</a></p><p><strong>Pune Jurisdiction:</strong> CGST Commissionerate Pune-I and II (ICE House, 41/A Sassoon Road, Pune 411001); Maharashtra SGST Pune Division (mahagst.gov.in).</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Returns in Pune</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about GST return filing in Pune.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How to file GST return in Pune?</h3>
                        <div class="faq-expanded__a"><p>Log in to gst.gov.in with your GSTIN credentials. Navigate to Returns, select the period, and file GSTR-1 (outward supplies by 11th) and GSTR-3B (summary + payment by 20th). Enter sales data, ITC claimed, and pay net tax via the Electronic Cash Ledger. Submit with DSC or EVC. Patron's Pune office at RTC Silver, Wagholi handles the entire process online.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What are the due dates for GST returns in Pune?</h3>
                        <div class="faq-expanded__a"><p>GSTR-1 is due by the 11th of every month (13th after quarter for QRMP filers). GSTR-3B is due by the 20th monthly (22nd after quarter for Maharashtra QRMP filers - State Group 1). GSTR-9 annual return is due by 31 December. GSTR-9C reconciliation (turnover above Rs 5 crore) is also due by 31 December. Late filing attracts Rs 50 per day plus 18% interest.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the late fee for GST return filing?</h3>
                        <div class="faq-expanded__a"><p>Late fee under Section 47 is Rs 50 per day per return (Rs 25 CGST + Rs 25 SGST) for returns with tax liability, capped at Rs 5,000. For nil returns, Rs 20 per day (Rs 10 + Rs 10). Additionally, interest at 18% per annum on unpaid tax from the day after due date. Late fees must be paid in cash - ITC cannot be used.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the QRMP scheme and can Pune businesses use it?</h3>
                        <div class="faq-expanded__a"><p>The Quarterly Return Monthly Payment scheme allows GST-registered businesses with turnover up to Rs 5 crore to file GSTR-1 and GSTR-3B quarterly instead of monthly. Maharashtra is State Group 1, so quarterly GSTR-3B is due by the 22nd of the month after the quarter. Monthly tax payments via PMT-06 by the 25th. Invoice Furnishing Facility allows optional monthly B2B upload.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Must I file GST return even if there is no business activity?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every GST-registered person must file nil returns (GSTR-1 and GSTR-3B) even with zero sales, purchases or tax liability. Non-filing attracts Rs 20 per day late fee (capped at Rs 5,000) and can lead to registration cancellation after consecutive defaults.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can a CA file GST returns on my behalf in Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. A Chartered Accountant or authorised person can file using the GST portal. The taxpayer provides portal access or authorises the CA via the 'Add Authorised Signatory' function on gst.gov.in. Patron's CA team manages monthly filing for over 10,000 businesses.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST return kaise file karte hain?</strong> gst.gov.in par login karo, GSTR-1 11 tarikh tak aur GSTR-3B 20 tarikh tak file karo. Tax pay karo aur submit karo.</p><p><strong>Nil return file karna zaroori hai?</strong> Haan - chahe koi bhi transaction na ho, nil GSTR-1 aur GSTR-3B file karna mandatory hai. Nahi kiya toh Rs 20/day late fee lagega.</p><p><strong>QRMP scheme kya hai?</strong> Rs 5 crore se kam turnover wale businesses quarterly return file kar sakte hain. Maharashtra mein quarterly GSTR-3B 22 tarikh tak file hota hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Miss the 11th and 20th - File GST Returns on Time</h2>
            <div class="content-text">
                
                <p>GST returns have immovable monthly deadlines - GSTR-1 by the 11th, GSTR-3B by the 20th - and every day of delay attracts minimum Rs 20 (nil) or Rs 50 late fee plus 18% interest. Late GSTR-1 blocks your buyers' ITC. Late GSTR-3B prevents filing subsequent returns. Consecutive non-filing triggers registration cancellation. From July 2025, returns cannot be filed more than 3 years late. Professional filing costs Rs 1,500-5,000/month - a fraction of the penalties.</p><p><strong>File on time - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. Free compliance check.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your GST Returns in Pune on Time, Every Time</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">GST return filing in Pune is a mandatory monthly discipline for every registered business - from Hinjewadi IT companies with multi-state GSTINs to Pune Camp traders and Chakan manufacturers under QRMP. Accurate, timely filing protects your business from penalties, preserves buyers' ITC and prevents scrutiny notices.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end GST return filing - from monthly GSTR-1 and GSTR-3B to ITC reconciliation, QRMP management and GSTR-9/9C annual return preparation.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With 15+ years experience, 10,000+ businesses served and a 4.9 Google rating, Patron is a trusted firm for GST compliance across Pune, Mumbai, Delhi and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Returns%20in%20Pune&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20in%20Pune%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Returns Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GST return filing services in all major cities</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/gst-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/gst-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">End-to-end GST and tax compliance in Pune</div><div class="pa-cross-grid"><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-refund/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-notice/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 April 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed monthly to reflect GST due date changes, portal updates, QRMP scheme changes and penalty amendments. Last review: March 2026. Next review: April 2026.</p>
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
