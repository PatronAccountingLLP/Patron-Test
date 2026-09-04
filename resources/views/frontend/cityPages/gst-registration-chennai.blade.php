
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
    <title>GST Registration in Chennai – Online Process, Fees &amp; GSTIN</title>
    <meta name="description" content="CA-assisted GST registration in Chennai. Free govt portal filing for GSTIN. Regular and composition scheme. Serving OMR, T. Nagar, MEPZ businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Registration in Chennai – Online Process, Fees &amp; GSTIN">
    <meta property="og:description" content="CA-assisted GST registration in Chennai. Free govt portal filing for GSTIN. Regular and composition scheme. Serving OMR, T. Nagar, MEPZ businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Registration in Chennai – Online Process, Fees &amp; GSTIN">
    <meta name="twitter:description" content="CA-assisted GST registration in Chennai. Free govt portal filing for GSTIN. Regular and composition scheme. Serving OMR, T. Nagar, MEPZ businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Registration in Chennai",
          "description": "CA-assisted GST registration in Chennai. Free govt portal filing for GSTIN. Regular and composition scheme. Serving OMR, T. Nagar, MEPZ businesses. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/gst-registration/chennai",
          "serviceType": "GST Registration in Chennai",
          "areaServed": {
            "@type": "City",
            "name": "Chennai"
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
            "url": "https://www.patronaccounting.com/gst-registration/chennai",
            "price": "1999"
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
              "name": "GST Registration",
              "item": "https://www.patronaccounting.com/gst-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "GST Registration Chennai",
              "item": "https://www.patronaccounting.com/gst-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which GST office handles registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration is processed online through gst.gov.in. Applications are assigned to officers under GST Commissionerate Chennai North or South based on business address. No physical office visit is required."
              }
            },
            {
              "@type": "Question",
              "name": "What is the fee for GST registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration on the government portal is completely free with zero government fee. Professional assistance from Patron costs Rs 1,999 all-inclusive covering document preparation REG-01 filing and GSTIN delivery."
              }
            },
            {
              "@type": "Question",
              "name": "How long does GST registration take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GST registration takes 3-7 working days from complete application submission. Document collection 1-2 days portal filing 1-2 days and GST officer review 3-7 days."
              }
            },
            {
              "@type": "Question",
              "name": "What is the turnover limit for GST in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Goods suppliers must register above Rs 40 lakh turnover. Service providers above Rs 20 lakh. Registration is mandatory regardless of turnover for interstate suppliers e-commerce sellers casual taxable persons and NRI businesses."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        GST Registration in Chennai: CA-Assisted GSTIN with Return Filing
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, business proof, address proof, bank details, photographs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> GST registration government fee is NIL. CA professional fee from Rs 1,999</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Turnover above Rs 40 lakh (goods) or Rs 20 lakh (services), or interstate/e-commerce</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 3-7 working days for GSTIN allotment</p>
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
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Registration in Chennai',
                                            'city'     => 'Chennai',
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
    'ctaText'    => 'Get expert CA assistance for GST registration in Chennai. From GSTIN to ongoing returns, we handle everything.',
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
            <a href="#overview-section" class="toc-pill">Overview</a>
            <a href="#what-section" class="toc-pill">What Is GST Registration</a>
            <a href="#who-section" class="toc-pill">Who Needs It</a>
            <a href="#services-section" class="toc-pill">Services Included</a>
            <a href="#procedure-section" class="toc-pill">6-Step Process</a>
            <a href="#documents-section" class="toc-pill">Documents Required</a>
            <a href="#challenges-section" class="toc-pill">Common Challenges</a>
            <a href="#fees-section" class="toc-pill">Fees</a>
            <a href="#timeline-section" class="toc-pill">Timeline</a>
            <a href="#benefits-section" class="toc-pill">Why Patron</a>
            <a href="#comparison-section" class="toc-pill">Regular vs Composition</a>
            <a href="#faq-section" class="toc-pill">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration in Chennai: Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Registration in Chennai Services at a Glance</strong></p>
                    <p>GST registration in Chennai provides a 15-digit GSTIN (Goods and Services Tax Identification Number) enabling your business to legally collect GST, claim input tax credit, and conduct interstate trade. The registration is free on the GST portal (gst.gov.in), mandatory for businesses exceeding Rs 40 lakh turnover (goods) or Rs 20 lakh (services), and processed within 3-7 working days. Chennai's GSTIN starts with state code '33' for Tamil Nadu.</p>
                </div>
                <p>Chennai is Tamil Nadu's commercial capital and one of India's top five trading economies. The OMR IT Corridor generates billions in software services exports. T. Nagar is India's highest-revenue commercial street with thousands of textile, jewellery, and retail businesses. Parry's Corner and Broadway house wholesale markets trading grains, spices, and consumer goods. MEPZ exporters ship manufactured goods globally. Sriperumbudur's auto corridor supplies OEMs across India. Every one of these businesses requires <a href="/gst-registration">GST registration</a> for legal operation, tax collection, and input tax credit claims.</p>
                <div class="table-responsive-wrapper" style="margin:20px 0;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>CGST Act 2017 + Tamil Nadu GST (TNGST) Act 2017 + IGST Act 2017</td></tr>
                        <tr><td>Portal</td><td>gst.gov.in (GST REG-01)</td></tr>
                        <tr><td>Threshold - Goods</td><td>Rs 40 lakh annual turnover</td></tr>
                        <tr><td>Threshold - Services</td><td>Rs 20 lakh annual turnover</td></tr>
                        <tr><td>Mandatory Registration</td><td>Interstate supply, e-commerce, casual taxable person, NRI taxable person</td></tr>
                        <tr><td>GSTIN Format</td><td>15-digit: 33 (TN state code) + 10-digit PAN + entity serial + Z + check digit</td></tr>
                        <tr><td>Government Fee</td><td>NIL - free registration on GST portal</td></tr>
                        <tr><td>Timeline</td><td>3-7 working days</td></tr>
                        <tr><td>Composition Scheme</td><td>Up to Rs 1.5 crore turnover (goods) - lower tax rate, quarterly filing</td></tr>
                        <tr><td>Returns</td><td>GSTR-1 (outward supply), GSTR-3B (summary + payment) - monthly or quarterly</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>GST registration in Chennai is processed through the GST portal (gst.gov.in) and falls under either the GST Commissionerate Chennai North or Chennai South depending on the registered office location. Patron Accounting's CA team handles the complete GST registration - from determining the correct scheme (regular vs composition), filing GST REG-01 with digitally signed documents, Aadhaar verification coordination, and GSTIN delivery. Post-registration, the same CA manages monthly GSTR-1 and GSTR-3B filing, annual GSTR-9, input tax credit reconciliation, and Tamil Nadu Professional Tax registration. Learn more about <a href="/gst-returns">GST Return Filing</a> after registration.</p>
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
                <h2 class="section-title">What Is GST Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST registration is the process of obtaining a Goods and Services Tax Identification Number (GSTIN) from the government by filing Form GST REG-01 on the GST portal, enabling a business to legally collect and remit GST on supply of goods and services.</p>
                    <p>India's GST system, implemented on 1 July 2017, replaced multiple indirect taxes (VAT, service tax, excise duty, CST) with a unified tax structure. GST is levied on every value addition in the supply chain. The GSTIN is a 15-digit alphanumeric number: the first 2 digits represent the state code (33 for Tamil Nadu), the next 10 digits are the business PAN, followed by an entity serial number, a default 'Z', and a check digit. Registration provides legal authority to collect GST from customers, claim input tax credit (ITC) on purchases, and conduct interstate trade without CST barriers.</p>
                    <p>For Chennai, GST registration is the gateway to formal business operations. IT companies on OMR billing clients across states need GSTIN for IGST invoicing. Textile merchants in T. Nagar need GSTIN for proper tax collection and ITC claims on fabric purchases. Restaurants on Anna Salai collecting 5% GST on food services need registration. Manufacturers in Ambattur claim ITC on raw material purchases through their GSTIN. Without registration, a Chennai business cannot issue tax invoices, cannot claim ITC, and faces penalties under Section 122 of the CGST Act.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Registration in Chennai:</strong></p>
                    <ul>
                        <li><strong>GSTIN:</strong> 15-digit Goods and Services Tax Identification Number. Chennai GSTINs start with 33 (Tamil Nadu state code).</li>
                        <li><strong>GST REG-01:</strong> Application form for new GST registration filed on gst.gov.in.</li>
                        <li><strong>ITC (Input Tax Credit):</strong> Credit claimed on GST paid on business purchases, reducing net tax liability.</li>
                        <li><strong>GSTR-1:</strong> Monthly/quarterly return for outward supply details.</li>
                        <li><strong>GSTR-3B:</strong> Monthly summary return with tax payment.</li>
                        <li><strong>Composition Scheme:</strong> Simplified GST scheme for small businesses with turnover up to Rs 1.5 crore.</li>
                    </ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Free Govt Fee</span>
                        <strong>GSTIN in 3-7 Days</strong>
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
            <h2 class="section-title">Who Needs GST Registration in Chennai?</h2>
            <div class="content-text">
                
                <h3>Businesses Exceeding Turnover Threshold</h3>
                <p>Any Chennai business with aggregate turnover exceeding Rs 40 lakh (for goods supply) or Rs 20 lakh (for services) must register. This covers retail shops in T. Nagar, restaurants on Anna Salai, wholesale dealers in Parry's Corner, and service providers on OMR.</p>
                <h3>Interstate Suppliers</h3>
                <p>Any Chennai business supplying goods or services to clients in other states must register regardless of turnover. IT companies on OMR billing clients in Mumbai, Bangalore, or Delhi need GSTIN for IGST invoicing. Manufacturers in Ambattur supplying auto parts to Karnataka or Maharashtra need registration.</p>
                <h3>E-Commerce Sellers and Operators</h3>
                <p>All e-commerce operators and sellers on Amazon, Flipkart, Meesho, Swiggy, and Zomato must register for GST regardless of turnover. Chennai's growing e-commerce ecosystem - from D2C brands in Velachery to cloud kitchens on OMR - requires GSTIN for platform onboarding and TCS compliance.</p>
                <h3>Exporters in MEPZ and Sriperumbudur</h3>
                <p>Exporters must register for GST to claim refunds on input tax. MEPZ exporters and Sriperumbudur manufacturers exporting goods need GSTIN plus GST LUT (Letter of Undertaking) for zero-rated supply. Patron handles both GST registration and LUT filing. You may also need <a href="/iec-registration">Import Export Code (IEC) Registration</a> for international trade.</p>
                <h3>Casual and Non-Resident Taxable Persons</h3>
                <p>Businesses temporarily operating in Chennai (exhibitions, trade fairs at Chennai Trade Centre) or NRI businesses supplying to Indian customers must register as casual or non-resident taxable persons.</p>
                <h3>Voluntary Registration</h3>
                <p>Chennai startups and freelancers below the threshold can voluntarily register for GST to gain credibility, claim ITC on business purchases, and participate in government tenders requiring GSTIN. Consider <a href="/private-limited-company-registration/chennai">Private Limited Company Registration in Chennai</a> or <a href="/llp-incorporation/chennai">LLP Registration in Chennai</a> alongside GST registration for complete business setup.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Scheme Assessment (Regular vs Composition)</td><td>CA evaluates your Chennai business turnover, supply type, and ITC needs to recommend regular or composition scheme</td></tr>
                        <tr><td>GST REG-01 Filing</td><td>Complete application filing on gst.gov.in - Part A (TRN generation) and Part B (business details, promoter details, bank account, document upload) with DSC or EVC verification</td></tr>
                        <tr><td>Document Preparation</td><td>PAN, Aadhaar, business registration proof, Chennai address proof (TNEB bill + rent agreement/sale deed + NOC), bank account details, photographs</td></tr>
                        <tr><td>Aadhaar Verification Support</td><td>Coordination for biometric verification if e-KYC fails. Failed Aadhaar verification delays GSTIN by 15-30 days</td></tr>
                        <tr><td>GSTIN Delivery</td><td>15-digit GSTIN with GST registration certificate download from portal. Certificate displayed at Chennai business premises</td></tr>
                        <tr><td>Post-Registration Compliance Setup</td><td>GSTR-1 and GSTR-3B filing calendar, ITC reconciliation, e-invoicing setup, e-way bill registration, TN Professional Tax registration</td></tr>
                        <tr><td>Accounting Integration</td><td>GST-compliant books of accounts setup on Zoho Books or Tally with automatic GSTR-1 data population from sales invoices</td></tr>

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
            <h2 class="section-title">GST Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Your dedicated CA from Patron's pan-India team handles the complete GST registration process online. No office visit required.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine Registration Type and Prepare Documents</h3>
        <p class="step-description">Your dedicated CA assesses your Chennai business to determine: regular registration, composition scheme (for goods suppliers with turnover up to Rs 1.5 crore), or special registration (casual taxable person, NRI, ISD). Documents compiled: PAN card, Aadhaar of all promoters, business registration proof, Chennai address proof (TNEB electricity bill + rent agreement with NOC or property deed), bank account details, and photographs.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Scheme Assessment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Document Checklist</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/>
                    <line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <line x1="30" y1="52" x2="70" y2="52" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/>
                    <rect x="70" y="55" width="28" height="28" rx="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M78 69l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Documents Ready</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">File GST REG-01 Part A on GST Portal</h3>
        <p class="step-description">Patron's CA accesses gst.gov.in and files Part A of GST REG-01 with the business PAN, mobile number, and email address. An OTP is sent to both the registered mobile and email for verification. Upon successful verification, a Temporary Reference Number (TRN) is generated. This TRN is used to complete Part B within 15 days.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TRN Generated</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP Verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="35" y="25" width="50" height="8" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                    <rect x="35" y="40" width="50" height="8" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
                    <path d="M60 72v12" stroke="#14365F" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="60" cy="88" r="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                </svg>
            </div>
            <span class="illustration-label">Portal Filing</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Complete Part B with Business Details and Upload Documents</h3>
        <p class="step-description">Using the TRN, the CA completes Part B of REG-01 with: business details (trade name, constitution, date of commencement), principal place of business in Chennai, promoter/partner/director details with PAN and Aadhaar, HSN/SAC codes for goods/services supplied, bank account details, and state-specific information. All supporting documents are uploaded in prescribed format. The application is verified using DSC or EVC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN/SAC Codes</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC/EVC Signed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="20" y1="25" x2="45" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="20" y1="35" x2="40" y2="35" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <line x1="20" y1="45" x2="42" y2="45" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <path d="M58 40l12-8 12 8v20l-12 8-12-8z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <path d="M65 50l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
            <span class="illustration-label">Details Uploaded</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Application Review by GST Officer</h3>
        <p class="step-description">The application is assigned to a GST officer under the GST Commissionerate Chennai North or Chennai South based on your registered address. The officer reviews the application within 3 working days. If deficiencies are found, a notice in Form GST REG-03 is issued. Patron's CA responds to REG-03 notices promptly with Form REG-04.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Officer Review</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>REG-03 Handled</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="40" r="30" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="82" y1="62" x2="100" y2="80" stroke="#14365F" stroke-width="3" stroke-linecap="round"/>
                    <circle cx="55" cy="35" r="8" fill="none" stroke="#F5A623" stroke-width="2"/>
                    <line x1="55" y1="45" x2="55" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                    <line x1="65" y1="45" x2="65" y2="55" stroke="#14365F" stroke-width="1.5" stroke-linecap="round" opacity="0.3"/>
                </svg>
            </div>
            <span class="illustration-label">Under Review</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Receive GSTIN and Download GST Certificate</h3>
        <p class="step-description">Upon approval, a 15-digit GSTIN starting with '33' (Tamil Nadu state code) is allotted in Form GST REG-06. The GST registration certificate is available for download on the portal. The certificate must be displayed at the principal place of business in Chennai. For Chennai businesses, the GSTIN format is: 33[PAN][Entity Code]Z[Check Digit].</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTIN Allotted</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Certificate Ready</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <circle cx="60" cy="37" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                    <path d="M52 37l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M50 70l10 15 10-15" fill="#F5A623" opacity="0.3"/>
                    <path d="M60 70l10 15 10-15" fill="#F5A623" opacity="0.2"/>
                </svg>
            </div>
            <span class="illustration-label">GSTIN Issued</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Set Up GST Compliance Calendar and Accounting</h3>
        <p class="step-description">Patron establishes the complete GST compliance framework: GSTR-1 filing (11th of following month for monthly, 13th for quarterly QRMP), GSTR-3B filing (20th of following month), annual return GSTR-9 (31 December), e-invoicing setup, e-way bill registration on ewaybillgst.gov.in, and TN Professional Tax registration with Greater Chennai Corporation. GST-compliant accounting is set up on <a href="/zoho-books-accounting">Zoho Books</a> or Tally.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance Setup</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Accounting Integrated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="35" y1="30" x2="85" y2="30" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="35" y1="42" x2="85" y2="42" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="35" y1="54" x2="85" y2="54" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="50" y1="18" x2="50" y2="64" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="70" y1="18" x2="70" y2="64" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <circle cx="42" cy="36" r="4" fill="#F5A623"/>
                    <circle cx="60" cy="48" r="4" fill="#25D366"/>
                    <circle cx="78" cy="24" r="4" fill="#E8712C"/>
                </svg>
            </div>
            <span class="illustration-label">Compliance Active</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Registration in Chennai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>PAN Card:</strong> Business PAN (for company/LLP) or individual PAN (for proprietorship). This forms digits 3-12 of GSTIN.</li>
                    <li><strong>Aadhaar Card of Promoters/Directors:</strong> Required for Aadhaar authentication during registration.</li>
                    <li><strong>Business Registration Proof:</strong> Certificate of Incorporation (company), LLP Agreement, Partnership Deed, or Proprietorship declaration.</li>
                    <li><strong>Address Proof of Chennai Premises:</strong> TNEB electricity bill (not older than 2 months) + rent agreement with NOC from landlord (if rented) or property tax receipt/sale deed (if owned).</li>
                    <li><strong>Bank Account Details:</strong> Cancelled cheque or bank passbook first page showing account number, IFSC code, and account holder name.</li>
                    <li><strong>Photographs:</strong> Passport-size photographs of all promoters/partners/directors.</li>
                    <li><strong>Digital Signature Certificate:</strong> Required for companies and LLPs. Proprietors and partnerships can use EVC (Aadhaar-based).</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Chennai-Specific Tip:</strong> Chennai co-working spaces on OMR are frequently used as registered addresses. The GST officer may issue REG-03 if the rent agreement is in the co-working company's name rather than the applicant's. Ensure the co-working provider issues a sub-lease/licence agreement in your business name with the TNEB bill of the premises. Patron coordinates documentation with co-working providers for seamless approval.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Aadhaar Verification Failure</td><td>Delays registration by 15-30 days as physical verification becomes necessary</td><td>Coordinates biometric verification or alternative authentication before filing</td></tr>
                        <tr><td>Address Proof Rejection</td><td>REG-03 notice issued for address mismatch - TNEB bills older than 2 months or missing NOC</td><td>Ensures address documentation is current and consistent before filing</td></tr>
                        <tr><td>Bank Account Not in Business Name</td><td>Proprietors using personal accounts or new companies without current account face delays</td><td>Advises on bank account opening sequence; uses 45-day amendment window</td></tr>
                        <tr><td>Composition vs Regular Scheme Confusion</td><td>Wrong scheme selection leads to ITC loss or excess compliance burden</td><td>CA analyses supply chain and recommends optimal scheme for Chennai businesses</td></tr>
                        <tr><td>Late Return Filing Penalties</td><td>Rs 50/day CGST + Rs 50/day SGST = Rs 100/day penalty; GSTIN cancellation after 6 months non-filing</td><td>Sets up automated return filing from registration day with GST Return Filing in Chennai</td></tr>

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
            <h2 class="section-title">GST Registration Fees in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Fee (GST Registration)</td><td>NIL - Completely Free on gst.gov.in</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>INR 999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>GST Registration + First Month Return Filing</td><td>Rs 3,999 (all-inclusive)</td></tr>
                        <tr><td>GST Registration + 12-Month Return Filing</td><td>Rs 14,999 - Rs 24,999</td></tr>
                        <tr><td>GST Registration + Accounting + Returns</td><td>Rs 29,999 - Rs 49,999/year</td></tr>
                        <tr><td>Composition Scheme Registration</td><td>Rs 1,999</td></tr>
                        <tr><td>Amendment/Modification</td><td>Rs 999</td></tr>
                        <tr><td>Cancellation/Surrender</td><td>Rs 999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Document Collection</td><td>1-2 days</td></tr>
                        <tr><td>Part A Filing (TRN Generation)</td><td>Same day</td></tr>
                        <tr><td>Part B Completion</td><td>1-2 days</td></tr>
                        <tr><td>GST Officer Review (Commissionerate Chennai North/South)</td><td>3-7 working days</td></tr>
                        <tr><td>REG-03 Response (if any)</td><td>3-5 days</td></tr>
                        <tr><td>GSTIN Allotment (REG-06)</td><td>Included above</td></tr>
                        <tr><td><strong>Total</strong></td><td><strong>3-7 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Chennai Processing Note (Group B):</strong> The entire GST registration process is online on gst.gov.in. No visit to any GST office required. Patron's CA handles all portal filing, document upload, and officer query responses digitally.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Registration in Chennai?</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card">
                <div class="feature-icon" style="background:var(--orange-light);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>CA-Led with Ongoing Compliance</h3>
                <p>GST registration without return filing is incomplete. Patron's CA handles registration AND monthly GSTR-1, GSTR-3B, annual GSTR-9, ITC reconciliation, and e-invoicing.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon" style="background:var(--orange-light);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
                </div>
                <h3>4-Office Authority</h3>
                <p>Offices in Pune, Mumbai, Delhi, Gurugram. Multi-state businesses get centralised GST compliance across all state GSTINs.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon" style="background:var(--orange-light);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Chennai Commissionerate Familiarity</h3>
                <p>Your file is handled by a CA familiar with GST Commissionerate Chennai North and South processing patterns, REG-03 query types, and Tamil Nadu-specific compliance.</p>
            </article>
            <article class="feature-card">
                <div class="feature-icon" style="background:var(--orange-light);">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg>
                </div>
                <h3>Accounting Integration from Day One</h3>
                <p>GST-compliant books on <a href="/zoho-books-accounting">Zoho Books</a> or Tally set up alongside registration. Sales invoices auto-populate GSTR-1. ITC claims tracked from the first purchase.</p>
            </article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <div style="display:flex;flex-wrap:wrap;gap:32px;justify-content:center;margin:24px 0;">
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">10,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Businesses Served</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">4.9</span><br><span style="color:var(--text-muted);font-size:14px;">Google Rating</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">50,000+</span><br><span style="color:var(--text-muted);font-size:14px;">Documents Filed</span></div>
                    <div style="text-align:center;"><span style="font-size:32px;font-weight:800;color:var(--blue);">15+</span><br><span style="color:var(--text-muted);font-size:14px;">Years Experience</span></div>
                </div>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai through a digital-first CA team. Our GST filing is always on time - we combine registration with ongoing GSTR-1/3B/9 return filing, ITC reconciliation, and accounting (Zoho/Tally) from one team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Regular vs Composition Scheme: Chennai Guide</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Regular Scheme</th><th>Composition Scheme</th></tr></thead>
                    <tbody>
                        <tr><td>Threshold</td><td>No upper limit (mandatory above Rs 40L/20L)</td><td>Up to Rs 1.5 crore (goods) / Rs 50 lakh (services)</td></tr>
                        <tr><td>Tax Rate</td><td>Standard GST rates (5%, 12%, 18%, 28%)</td><td>1% goods / 5% restaurants / 6% services (of turnover)</td></tr>
                        <tr><td>ITC</td><td>Full input tax credit available</td><td>No ITC claim allowed</td></tr>
                        <tr><td>Returns</td><td>GSTR-1 + GSTR-3B (monthly/quarterly)</td><td>GSTR-4 (quarterly) + CMP-08</td></tr>
                        <tr><td>Interstate Supply</td><td>Allowed</td><td>NOT allowed</td></tr>
                        <tr><td>E-Commerce</td><td>Allowed</td><td>NOT allowed</td></tr>
                        <tr><td>Invoice</td><td>Tax invoice with GST breakup</td><td>Bill of supply (no GST breakup)</td></tr>
                        <tr><td>Best For Chennai</td><td>IT companies OMR, exporters MEPZ, manufacturers, e-commerce</td><td>Small retail shops, local restaurants, neighbourhood services</td></tr>

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
                
                <ul>
                    <li><a href="/gst-registration">GST Registration in India</a> - Parent national service page for GST registration across all states</li>
                    <li><a href="/gst-returns">GST Return Filing</a> - Monthly GSTR-1, GSTR-3B, and annual GSTR-9 filing services</li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - Complete company incorporation with ROC compliance</li>
                    <li><a href="/income-tax-return">Income Tax Return (ITR) Filing</a> - ITR filing for individuals, businesses, and companies</li>
                    <li><a href="/iec-registration">Import Export Code (IEC) Registration</a> - Mandatory for exporters and importers</li>
                    <li><a href="/trademark-registration">Trademark Registration</a> - Brand protection and IP registration services</li>
                </ul>

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
                
                <ul>
                    <li>CGST Act, 2017 (Central GST) - Section 22 (mandatory registration), Section 24 (compulsory registration), Section 25 (voluntary registration)</li>
                    <li>Tamil Nadu GST (TNGST) Act, 2017 (State GST)</li>
                    <li>IGST Act, 2017 (Interstate GST)</li>
                    <li>GST (Registration) Rules, 2017 (REG-01 to REG-30)</li>
                    <li>Tamil Nadu Professional Tax Act, 1992 (post-GST compliance)</li>
                </ul>
                <h3>Key Compliance Deadlines</h3>
                <ul>
                    <li>GSTR-1: 11th of following month (monthly) or 13th (quarterly QRMP)</li>
                    <li>GSTR-3B: 20th of following month (monthly) or 22nd/24th (quarterly)</li>
                    <li>GSTR-9: Annual return by 31 December</li>
                    <li>E-invoicing: Mandatory above applicable turnover threshold</li>
                    <li>E-way bill: For goods movement above Rs 50,000</li>
                </ul>
                <h3>Penalties</h3>
                <ul>
                    <li>Late GSTR-3B: Rs 50/day CGST + Rs 50/day SGST (Rs 20/day for nil returns)</li>
                    <li>Non-registration: 10% of tax due or Rs 10,000 (whichever higher) under Section 122 CGST Act</li>
                    <li>GSTIN cancellation: Non-filing for 6 consecutive months</li>
                    <li>Interest on late payment: 18% per annum under Section 50 CGST Act</li>
                </ul>
                <p><strong>Authority:</strong> GST Portal - <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a> | GST Seva Kendra - 1800-1200-232 | E-way bill - <a href="https://ewaybillgst.gov.in" target="_blank" rel="noopener">ewaybillgst.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Answers to the most common questions about GST registration in Chennai, covering fees, timeline, documents, and compliance.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Registration in Chennai',
                        'city'     => 'Chennai',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>GST registration in Chennai is processed online through gst.gov.in. Applications are assigned to officers under GST Commissionerate Chennai North or Chennai South based on your registered business address. There is no need to visit any physical office. GST Seva Kendra helpline at 1800-1200-232 provides registration support. Patron handles all portal interactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get GST registration online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. The entire GST registration process is 100% online on gst.gov.in. Form GST REG-01 is filed online, documents are uploaded digitally, and verification is done via DSC or Aadhaar-based EVC. The GST certificate is issued electronically for download. No physical visit to any government office is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the fee for GST registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>GST registration on the government portal (gst.gov.in) is completely free - zero government fee for any business type. Professional assistance from Patron's CA costs Rs 1,999 all-inclusive covering document preparation, REG-01 filing, officer query handling, and GSTIN delivery.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does GST registration take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>GST registration in Chennai takes 3-7 working days from complete application submission. Document collection takes 1-2 days, portal filing 1-2 days, and GST officer review 3-7 days. If the officer issues a REG-03 clarification notice, additional 3-5 days may be needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the turnover limit for GST in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Businesses supplying goods must register when aggregate turnover exceeds Rs 40 lakh. Service providers must register when turnover exceeds Rs 20 lakh. Registration is mandatory regardless of turnover for interstate suppliers, e-commerce sellers, casual taxable persons, and NRI businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is GST mandatory for e-commerce sellers in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. All e-commerce sellers and operators must register for GST regardless of turnover. This includes sellers on Amazon, Flipkart, Meesho, and food delivery through Swiggy and Zomato. The e-commerce operator deducts TCS at 1% which the seller claims via GSTR-2B.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What returns must I file after GST registration?</h3>
                        <div class="faq-expanded__a"><p>After registration, Chennai businesses must file GSTR-1 (outward supply details by 11th monthly or 13th quarterly), GSTR-3B (summary return with tax payment by 20th monthly), and GSTR-9 (annual return by 31 December). Even nil returns must be filed - non-filing for 6 months leads to GSTIN cancellation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I get GST without a physical office in Chennai?</h3>
                        <div class="faq-expanded__a"><p>A valid business address in Chennai is mandatory for GST registration. This can be a commercial office, co-working space, or residential address (with utility bill and NOC). Virtual office addresses are accepted if they provide a valid rent/licence agreement, NOC, and utility bill.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein GST registration kaise hota hai?</strong> gst.gov.in par GST REG-01 file karna hota hai. PAN, Aadhaar, address proof upload karo. 3-7 din mein GSTIN mil jaata hai.</p>
                <p><strong>GST registration free hai kya?</strong> Haan. Government portal par registration bilkul free hai. Professional fee Rs 1,999 se shuru hoti hai.</p>
                <p><strong>GST ke baad kya karna padta hai?</strong> Har mahine GSTR-1 aur GSTR-3B file karna zaroori hai. Late filing par Rs 100/din penalty lagti hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your GST Registration in Chennai</h2>
            <div class="content-text">
                
                <p>Operating above the GST threshold without registration attracts a penalty of 10% of tax due or Rs 10,000 (whichever is higher) under Section 122 of CGST Act. E-commerce platforms (Amazon, Flipkart, Swiggy, Zomato) will not onboard sellers without valid GSTIN. Interstate supply without GSTIN means you cannot issue tax invoices or claim ITC - your Chennai business loses competitive pricing. Every day without GST registration is a day of tax non-compliance, lost ITC, and restricted market access. Registration takes just 3-7 days - start now.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get GST Registration in Chennai with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">GST registration in Chennai provides a 15-digit GSTIN enabling legal tax collection, input tax credit claims, interstate trade, and e-commerce platform access. With zero government fees and 3-7 day processing through gst.gov.in, it is the foundational compliance for every Chennai business from OMR startups and T. Nagar retailers to MEPZ exporters and Ambattur manufacturers.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting serves Chennai businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles GST REG-01 filing, officer query responses, and ongoing GSTR-1, GSTR-3B, GSTR-9 compliance with GST-integrated accounting.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of chartered accountancy practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Registration%20in%20Chennai&body=Hello%2C%20I%20just%20visited%20your%20GST%20Registration%20in%20Chennai%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides CA-assisted GST registration services in major cities across India.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-city-grid">
                    <a href="/gst-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/gst-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/gst-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                    <a href="/gst-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
                    <a href="/gst-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Chennai</div>
                <div class="pa-block-sub">End-to-end support for GST Registration in Chennai</div>
                <div class="pa-cross-grid">
                    <a href="/private-limited-company-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/llp-incorporation/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/income-tax-return/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Chennai</div></div></a>
                    <a href="/udyam-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Udyam Registration</div><div class="pa-card-sub">Chennai</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 July 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly for accuracy. GST registration rules, thresholds, and compliance requirements are subject to change via CBIC notifications. Content is updated to reflect the latest GST law and portal changes. Freshness Tier 1.</p>
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
