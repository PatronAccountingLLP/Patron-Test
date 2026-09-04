
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
    <title>GST Refund Claim in Delhi – RFD-01, Process &amp; Fees</title>
    <meta name="description" content="GST refund in Delhi. Export IGST, inverted duty ITC, excess cash. Form RFD-01. 90% provisional in 7 days. Patron Accounting +91 945 945 6700.">
    <link rel="canonical" href="/gst-refund/delhi">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Refund Claim in Delhi – RFD-01, Process &amp; Fees">
    <meta property="og:description" content="GST refund in Delhi. Export IGST, inverted duty ITC, excess cash. Form RFD-01. 90% provisional in 7 days. Patron Accounting +91 945 945 6700.">
    <meta property="og:url" content="/gst-refund/delhi">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Refund Claim in Delhi – RFD-01, Process &amp; Fees">
    <meta name="twitter:description" content="GST refund in Delhi. Export IGST, inverted duty ITC, excess cash. Form RFD-01. 90% provisional in 7 days. Patron Accounting +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Refund Services in Delhi",
      "description": "GST refund in Delhi. Export IGST, inverted duty ITC, excess cash. Form RFD-01. 90% provisional in 7 days. Patron Accounting +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-refund/delhi",
      "serviceType": "GST Refund Services in Delhi",
      "areaServed": {
        "@type": "City",
        "name": "Delhi"
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
        "url": "https://www.patronaccounting.com/gst-refund/delhi",
        "price": "2999"
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
          "name": "GST Refund",
          "item": "https://www.patronaccounting.com/gst-refund"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Refund in Delhi",
          "item": "https://www.patronaccounting.com/gst-refund/delhi"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does GST refund take in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "90% provisional refund within 7 days of acknowledgment for exports under LUT and inverted duty. Final order within 60 days. Interest 6% per annum on delays beyond 60 days."
          }
        },
        {
          "@type": "Question",
          "name": "Can service exporters in Delhi claim GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Delhi IT companies exporting under LUT can claim ITC refund through RFD-01 using Rule 89(4). FIRC or BRC required as proof of export proceeds."
          }
        },
        {
          "@type": "Question",
          "name": "What is inverted duty structure refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "When GST on inputs exceeds output GST accumulated ITC is refundable under Section 54(3)(ii) using Rule 89(5). Only ITC on inputs goods eligible. From October 2025 90% provisional refund available."
          }
        },
        {
          "@type": "Question",
          "name": "What is the time limit for filing GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "2 years from relevant date under Section 54(1). For exports date of export or BRC. For inverted duty end of financial year. For excess cash ledger no time limit."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if my refund application has deficiencies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Refund officer issues deficiency memo RFD-03. Applicant must re-file within 15 days. If not re-filed in 15 days application treated as fresh with new timeline."
          }
        },
        {
          "@type": "Question",
          "name": "How is IGST refund processed for Delhi goods exporters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IGST refund on goods exports processed automatically through ICEGATE based on shipping bill data matched with GSTR-1 Table 6A. Mismatches block automated refund."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum amount for GST refund?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 54(14) no refund if amount less than Rs 1000. Threshold applies per tax head CGST SGST IGST separately."
          }
        },
        {
          "@type": "Question",
          "name": "How much does GST refund filing cost in Delhi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron GST refund starts from INR 4,999 per application for exports and inverted duty. Rs 2,999 for excess cash ledger. Includes eligibility assessment Rule 89 calculation RFD-01 filing and tracking."
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
                        GST Refund in Delhi: Recover Blocked Working Capital
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">06 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form:</span> GST RFD-01 on GST portal - Time limit: 2 years from relevant date</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Provisional Refund:</span> 90% within 7 days for exports and inverted duty (Section 54(6))</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Final Order:</span> Within 60 days - Interest: 6% p.a. on delays beyond 60 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Types:</span> Export IGST, LUT ITC, inverted duty, excess cash, SEZ, deemed exports</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Rs 15 Crore+ Refunds Claimed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Refund in Delhi',
                                            'city'     => 'Delhi',
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
    'ctaText'    => 'Recover your blocked working capital. Rs 15 Crore+ refunds claimed. 95%+ approval rate.',
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is GST Refund</a><a href="#who-section" class="toc-btn">Who Can Claim</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Refund in Delhi: Claiming Unutilised ITC and Excess Tax</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Refund in Delhi Services at a Glance</strong></p>
                    <p>GST refund under Section 54 of the CGST Act, 2017 enables Delhi businesses to recover excess tax paid, unutilised ITC accumulated due to exports or inverted duty structure, and surplus cash in the electronic cash ledger. The primary mechanism is Form GST RFD-01 filed on the GST portal within 2 years from the relevant date. For zero-rated supplies (exports under LUT and SEZ supplies) and inverted duty structure, 90% provisional refund is granted within 7 days of acknowledgment (Section 54(6)). The proper officer must pass the final order within 60 days. Delays attract 6% per annum interest (Section 56). IGST refund on goods exports is processed automatically through the shipping bill/ICEGATE route. Patron Accounting handles GST refund claims for Delhi exporters and manufacturers from our Rohini office - Rs 15 crore+ in refunds claimed with 95%+ first-time approval rate.</p>
                </div>
                <p>Delhi is a major export hub for both goods and services. IT and ITES companies in Nehru Place and Connaught Place export software services under LUT, accumulating significant ITC eligible for refund. Goods exporters clear shipments through IGI Airport cargo terminals and ICD Tughlakabad, generating IGST refund claims processed via ICEGATE. Manufacturing units in Okhla and Naraina with inverted duty structures accumulate unutilised ITC that blocks working capital. Learn more about <a href="/gst-refund">GST Refund services across India</a>.</p>
                <p>Patron Accounting's Delhi office in Rohini handles the complete GST refund lifecycle: eligibility assessment, Rule 89 formula calculation, RFD-01 preparation and filing, ICEGATE reconciliation for goods exports, deficiency memo resolution, provisional refund tracking, and final order follow-up. With integrated <a href="/gst-returns">monthly GST compliance</a> and <a href="/iec-registration">IEC registration</a>, Patron ensures Delhi businesses recover their blocked working capital efficiently.</p>
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
                <h2 class="section-title">What Is GST Refund: Recovery of Excess Tax Under Section 54</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST refund is the statutory mechanism under Section 54 of the CGST Act, 2017 that enables taxpayers to recover excess tax paid, unutilised input tax credit accumulated due to zero-rated supplies or inverted duty structures, surplus balances in the electronic cash ledger, and amounts arising from court orders or assessment corrections. The refund application is filed electronically through Form GST RFD-01 on the GST portal, with defined timelines: acknowledgment within 15 days, 90% provisional refund within 7 days for eligible categories, and final sanction within 60 days.</p><p>The refund ecosystem involves multiple forms: RFD-01 (application), RFD-02 (acknowledgment or deficiency memo RFD-03), RFD-04 (provisional refund order for 90%), RFD-06 (final sanction or rejection order), and RFD-08 (show cause notice). Each refund type has its own calculation formula under Rule 89 and specific documentation requirements.</p><p>For Delhi exporters - whether an IT company in Nehru Place exporting software services, a handicraft exporter shipping goods through IGI Airport, or a textile manufacturer in Okhla with inverted duty on fabric inputs - GST refund is the mechanism to recover working capital locked in the GST system. Professional refund management ensures Delhi businesses get their money back quickly and completely.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Refund in Delhi:</strong></p>
                    <p><strong>RFD-01:</strong> GST refund application form filed electronically under Section 54 CGST Act.</p><p><strong>Rule 89(4):</strong> Formula for ITC refund on zero-rated supplies (exports under LUT, SEZ supplies).</p><p><strong>Rule 89(5):</strong> Formula for ITC refund on inverted duty structure (input GST > output GST).</p><p><strong>ICEGATE:</strong> Indian Customs electronic gateway for automated IGST refund on goods exports.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Refund in Delhi</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 54 CGST Act</span>
                        <strong>GST Refund</strong>
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
            <h2 class="section-title">Who Can Claim GST Refund in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>Delhi IT/ITES service exporters</strong> - Companies in Nehru Place, Connaught Place exporting software services under LUT. Accumulated ITC refundable through RFD-01 using Rule 89(4). FIRC/BRC required.</li><li><strong>Delhi goods exporters</strong> - Businesses exporting through IGI Airport and ICD Tughlakabad. IGST paid route (ICEGATE auto) or LUT route (RFD-01 ITC refund).</li><li><strong>Delhi manufacturers with inverted duty structure</strong> - Businesses where input GST exceeds output GST (textiles, IT hardware, food processing). ITC refundable under Rule 89(5).</li><li><strong>Delhi businesses with excess cash ledger</strong> - Surplus deposits due to excess advance tax or incorrect challans. Refundable via RFD-01.</li><li><strong>Delhi SEZ suppliers</strong> - Businesses making zero-rated supplies to SEZ units/developers in Delhi NCR.</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Refund Services: What Patron Handles for Delhi Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Refund Eligibility Assessment</td><td>Patron analyses your GST profile to determine applicable refund type, eligible amount, relevant date, and documentation requirements. We identify refund opportunities Delhi businesses often miss.</td></tr><tr><td>Rule 89 Formula Calculation</td><td>Accurate computation: Rule 89(4) for zero-rated supplies, Rule 89(5) for inverted duty. Net ITC, adjusted turnover, and eligible refund computed for each tax period.</td></tr><tr><td>Form RFD-01 Preparation and Filing</td><td>Complete application with correct category, statements (3A/3B for exports, 1/1A for IDS), supporting documents. Filed on GST portal with DSC/EVC.</td></tr><tr><td>ICEGATE Reconciliation (Goods Exports)</td><td>Table 6A of GSTR-1 reconciled with ICEGATE shipping bill data for seamless automated IGST refund processing through Delhi Customs.</td></tr><tr><td>Deficiency Memo (RFD-03) Resolution</td><td>If deficiency memo issued, Patron resolves deficiencies and re-files within 15 days to prevent application from being treated as fresh.</td></tr><tr><td>Provisional Refund Tracking</td><td>For exports under LUT and IDS, 90% provisional refund tracked via RFD-04. Escalation if not credited within 7 days.</td></tr><tr><td>Final Order Follow-Up</td><td>Processing monitored. If final order not issued within 60 days, follow-up with officer. Interest at 6% p.a. claimed for delays.</td></tr>

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
            <h2 class="section-title">GST Refund Process in Delhi: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Refund applications processed by CGST Commissioner Delhi Zone (CGST/IGST) and SGST Commissioner GNCTD (Delhi SGST). IGST on goods exports via ICEGATE through Delhi Customs (IGI Airport and ICD Tughlakabad).</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Refund Type and Eligibility</h3><p class="step-description">Identify which category applies: export of services under LUT (ITC refund via RFD-01), export of goods with IGST (ICEGATE route), export of goods under LUT (ITC refund), inverted duty structure, excess cash ledger, or SEZ supply. Each has different documentation and calculation formulas. Patron assesses Delhi businesses' eligibility.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Category identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Optimal strategy</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="40" x2="80" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/><circle cx="85" cy="60" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M80 60l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File GSTR-1 and GSTR-3B for Refund Period</h3><p class="step-description">All returns must be filed before RFD-01 can be accessed. GSTR-1 Table 6A must accurately report zero-rated supplies. For goods exports, shipping bill details must match GSTR-1 data. Patron ensures monthly returns are refund-ready for Delhi clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 6A accurate</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shipping bill matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="10" rx="2" fill="#fff" stroke="#14365F" stroke-width="1"/><rect x="35" y="42" width="50" height="10" rx="2" fill="#fff" stroke="#14365F" stroke-width="1"/><circle cx="90" cy="15" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M85 15l4 4 7-7" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Calculate Refund Amount Using Rule 89</h3><p class="step-description">Rule 89(4) for zero-rated: Refund = (Net ITC x Turnover of zero-rated) / Adjusted total turnover. Rule 89(5) for inverted duty: Refund = (Net ITC x Turnover of inverted-rate / Adjusted total turnover) minus Tax payable on inverted-rate. Patron computes exact refund for each Delhi GSTIN.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA-computed formula</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Exact amount</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rule 89</text><text x="60" y="50" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Calculated</text></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form RFD-01 on GST Portal</h3><p class="step-description">Navigate to Services > Refunds > Application for Refund. Select category and tax period. Enter details in applicable statement (3A/3B for exports, 1/1A for IDS). Upload FIRC/BRC, shipping bills, LUT copy, invoices. Submit with DSC/EVC. ARN generated. Patron handles the complete portal process.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Portal submission</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ARN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 25L60 45" stroke="#14365F" stroke-width="2" stroke-linecap="round"/><path d="M50 35l10-10 10 10" stroke="#14365F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="40" y="55" width="40" height="10" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/></svg></div><span class="illustration-label">RFD-01 Filed</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Acknowledgment and Provisional Refund</h3><p class="step-description">Refund officer issues RFD-02 acknowledgment within 15 days (or RFD-03 deficiency memo). For exports under LUT and inverted duty, 90% provisional refund via RFD-04 within 7 days of acknowledgment - credited directly to bank account. Patron tracks provisional refund for Delhi clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>90% in 7 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Bank credit tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="25" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><text x="60" y="38" font-size="12" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">90%</text><text x="60" y="50" font-size="7" fill="#10B981" text-anchor="middle" font-family="Arial">7 days</text></svg></div><span class="illustration-label">Provisional</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Final Sanction Order Within 60 Days</h3><p class="step-description">Proper officer processes remaining 10% and issues final order RFD-06 within 60 days. If discrepancies found, show cause notice (RFD-08) may be issued. Patron responds and defends the claim. If delayed beyond 60 days, interest at 6% p.a. is payable. Patron claims interest for Delhi businesses where applicable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>60-day timeline</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Interest claimed on delays</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M48 40l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Sanctioned</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Refund in Delhi</h2>
            <div class="content-text">
                
                <ul><li><strong>For Export Under LUT (Services):</strong> RFD-01, FIRC/BRC, LUT copy, export invoices, Statement 3A/3B.</li><li><strong>For Export (Goods - ICEGATE Route):</strong> Shipping bills (auto-processed), Table 6A of GSTR-1 matching shipping bill data.</li><li><strong>For Inverted Duty Structure:</strong> RFD-01, Statement 1/1A with inward and outward invoices, declaration of no duty drawback.</li><li><strong>For Excess Cash Ledger:</strong> RFD-01 with electronic cash ledger statement.</li><li><strong>For SEZ Supplies:</strong> Endorsed invoice from SEZ officer, RFD-01.</li><li><strong>Common:</strong> GST registration certificate, bank account details, CA certificate (if applicable), declaration of non-passing of incidence.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Refund Challenges in Delhi: 5 Issues and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 Table 6A vs Shipping Bill Mismatch</td><td>Invoice details in Table 6A do not match ICEGATE shipping bill data causing automated IGST refund to fail</td><td>Patron reconciles Table 6A with ICEGATE data before GSTR-1 filing</td></tr><tr><td>Missing FIRC/BRC</td><td>IT service exporters face delayed or missing FIRC from banks/payment gateways blocking ITC refund</td><td>Patron tracks FIRC/BRC issuance and coordinates with banks</td></tr><tr><td>Input Services Exclusion (IDS)</td><td>Rule 89(5) includes only goods inputs - including service ITC causes deficiency or reduced refund</td><td>Patron applies correct formula excluding ineligible ITC</td></tr><tr><td>Deficiency Memos (RFD-03)</td><td>Incomplete documentation triggers deficiency memo with 15-day re-filing window</td><td>Patron resolves deficiencies within 7 days for Delhi businesses</td></tr><tr><td>Delayed Final Orders</td><td>Processing beyond 60-day statutory timeline blocks remaining 10% refund</td><td>Follow-up with officer and 6% interest claim for delays</td></tr>

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
            <h2 class="section-title">GST Refund Types and Professional Fees in Delhi</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Export Services (LUT ITC Refund)</td><td>From INR 4,999 per application</td></tr><tr><td>Export Goods (IGST/ICEGATE)</td><td>From INR 4,999 per application</td></tr><tr><td>Inverted Duty Structure</td><td>From INR 4,999 per application</td></tr><tr><td>Excess Cash Ledger</td><td>From INR 2,999 per application</td></tr><tr><td>SEZ Supplies</td><td>From INR 4,999 per application</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 4,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Refund in Delhi consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Refund Processing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Application Filing (RFD-01)</td><td>By taxpayer (within 2 years from relevant date)</td></tr><tr><td>Acknowledgment / Deficiency</td><td>RFD-02 / RFD-03 within 15 days of filing</td></tr><tr><td>Provisional Refund (90%)</td><td>RFD-04 within 7 days of acknowledgment</td></tr><tr><td>Final Order</td><td>RFD-06 within 60 days of complete application</td></tr><tr><td>Interest on Delay</td><td>6% p.a. beyond 60 days (Section 56)</td></tr><tr><td>Show Cause (If Applicable)</td><td>RFD-08 before rejection</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Every month that GST refund remains unclaimed is blocked working capital. The 2-year limitation period means old claims expire permanently. Contact Patron to assess your refund eligibility and file immediately.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Refund in Delhi</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 1v22M5 8h14M5 16h14"/></svg></div><h3>Rs 15 Crore+ Refunds Claimed</h3><p>95%+ first-time approval rate minimises deficiency memos and processing delays for Delhi clients across export, inverted duty, and excess cash categories.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>ICEGATE + GST Portal Dual Expertise</h3><p>Delhi goods exporters need both ICEGATE reconciliation and GST portal filing. Patron handles both channels ensuring Table 6A, shipping bills, and RFD-01 are reconciled.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Rule 89 Formula Accuracy</h3><p>Precise computation of Net ITC, adjusted total turnover, and eligible refund amount using Rule 89(4) for exports and Rule 89(5) for inverted duty by Patron's CA team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Integrated Export Compliance</h3><p>Refund coordinated with LUT filing, monthly GSTR-1/3B, IEC registration, FEMA compliance, and FLA returns for comprehensive Delhi export business support.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | Rs 15 Crore+ Refunds Claimed</strong></p><p>"Patron recovered Rs 42 lakh in stuck ITC refunds across 3 GSTINs for our export unit. Their ICEGATE reconciliation caught mismatches we had missed for 2 quarters. The 90% provisional refund came through within 8 days of filing." - Export Unit, Delhi</p><p><strong>4-Office Signal:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Self-Filing: GST Refund Comparison</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>Self-Filing</th></tr></thead>
                    <tbody>
                        <tr><td>Formula Accuracy</td><td>CA-computed Rule 89(4)/89(5)</td><td>Manual calculation errors</td></tr><tr><td>ICEGATE Reconciliation</td><td>Table 6A vs shipping bill matched</td><td>Mismatches cause refund blocks</td></tr><tr><td>Documentation</td><td>Complete document package filed</td><td>Missing FIRC/BRC delays claims</td></tr><tr><td>Deficiency Resolution</td><td>Resolved within 7 days</td><td>Often missed, treated as fresh</td></tr><tr><td>Approval Rate</td><td>95%+ first-time approval</td><td>Deficiency memos common</td></tr><tr><td>Pricing</td><td>From INR 4,999 per application</td><td>Free but high rejection risk</td></tr>

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
            <h2 class="section-title">Related GST and Export Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-refund">GST Refund in India</a> - National-level GST refund filing services.</li><li><a href="/gst-returns">GST Returns</a> - Monthly GSTR-1/3B filing for refund-ready compliance.</li><li><a href="/gst-registration">GST Registration</a> - New GST registration across India.</li><li><a href="/iec-registration">IEC Registration</a> - Import Export Code for exporters.</li><li><a href="/gst-notice">GST Notice</a> - GST notice response services.</li><li><a href="/fla-returns">FLA Returns</a> - Foreign Liabilities and Assets annual return.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework: GST Refund Under Section 54 CGST Act</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Central Goods and Services Tax Act, 2017 - Section 54</p><p><strong>Key Sub-Sections:</strong> S.54(1) - refund within 2 years. S.54(3) - ITC refund for zero-rated and inverted duty. S.54(6) - 90% provisional in 7 days. S.54(14) - minimum Rs 1,000.</p><p><strong>Rules:</strong> Rule 89 (application and calculation), Rule 91 (provisional refund), Rule 92 (final order 60 days), Rule 96 (IGST refund via ICEGATE).</p><p><strong>CGST Instruction 6/2025:</strong> 90% provisional refund extended to inverted duty structure claims from October 2025.</p><p><strong>Interest:</strong> Section 56 - 6% p.a. on delays beyond 60 days. 9% for appellate order refunds.</p><p><strong>Delhi Authorities:</strong> CGST Commissioner Delhi Zone (CGST/IGST). SGST Commissioner GNCTD (Delhi SGST). Delhi Customs IGI Airport + ICD Tughlakabad (IGST goods exports).</p><p><strong>Source:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>, <a href="https://cbic.gov.in" target="_blank" rel="noopener">cbic.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Refund in Delhi</h2>
                    <p class="faq-expanded__lead">Common questions about GST refund types, filing process, and timelines for Delhi businesses.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Refund in Delhi',
                        'city'     => 'Delhi',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How long does GST refund take in Delhi?</h3>
                        <div class="faq-expanded__a"><p>For eligible categories (exports under LUT and inverted duty from October 2025), 90% provisional refund is credited within 7 days of acknowledgment. The final order covering the remaining 10% must be issued within 60 days. If delayed beyond 60 days, interest at 6% per annum is payable. IGST refund via ICEGATE timing depends on GSTR-1/shipping bill reconciliation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can service exporters in Delhi claim GST refund?</h3>
                        <div class="faq-expanded__a"><p>Yes. Delhi IT and ITES companies exporting services under LUT can claim refund of accumulated ITC through Form RFD-01 using Rule 89(4). FIRC or BRC is required as proof of export proceeds. Alternatively, service exporters can pay IGST and claim IGST refund. The LUT route avoids upfront cash outflow. Patron handles both routes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the time limit for filing GST refund?</h3>
                        <div class="faq-expanded__a"><p>2 years from the relevant date under Section 54(1). For exports, it is the date of export (shipping bill or BRC date). For inverted duty, end of the financial year. For excess cash ledger, no time limit. For zero-rated supplies, RFD-01 can be filed at end of any tax period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is inverted duty structure refund?</h3>
                        <div class="faq-expanded__a"><p>An inverted duty structure arises when GST on inputs exceeds output GST (e.g., textiles: 12% input, 5% output). Accumulated ITC is refundable under Section 54(3)(ii) using Rule 89(5). Only ITC on inputs (goods) is eligible - ITC on input services and capital goods is excluded. From October 2025, 90% provisional refund available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if my refund application has deficiencies?</h3>
                        <div class="faq-expanded__a"><p>The refund officer issues deficiency memo (RFD-03). The applicant must re-file within 15 days. If not done within 15 days, the application is treated as fresh with a new timeline. Patron resolves deficiencies within 7 days to ensure no time is lost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How is IGST refund processed for Delhi goods exporters?</h3>
                        <div class="faq-expanded__a"><p>IGST refund on goods exports is processed automatically through ICEGATE/Customs based on shipping bill data matched with GSTR-1 Table 6A. If data matches, IGST refund processed without RFD-01 filing. Mismatches block the automated refund. Patron reconciles Table 6A with ICEGATE data.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is the minimum amount for GST refund?</h3>
                        <div class="faq-expanded__a"><p>Under Section 54(14), no refund if amount is less than Rs 1,000. This applies per tax head (CGST, SGST, IGST separately). For small monthly refund amounts, Patron advises accumulating claims for multiple tax periods into a single RFD-01.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How much does GST refund filing cost in Delhi?</h3>
                        <div class="faq-expanded__a"><p>Patron's GST refund starts from INR 4,999 per application for exports and inverted duty, Rs 2,999 for excess cash ledger. Includes eligibility assessment, Rule 89 calculation, RFD-01 filing, deficiency resolution, and provisional/final order tracking. Call +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST refund kaise claim karein?</strong> GST portal par login karein > Services > Refunds > Application for Refund. Refund type select karein (export, inverted duty, excess cash). RFD-01 mein details bharein, documents upload karein, DSC/EVC se submit karein.</p><p><strong>Provisional refund kya hai?</strong> Export under LUT aur inverted duty ke cases mein 90% refund 7 din mein mil jata hai (Section 54(6)). Baaki 10% final order mein 60 din ke andar.</p><p><strong>Delay par interest milta hai?</strong> Haan. 60 din ke baad 6% per annum interest milta hai Section 56 ke under.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Refund Unclaimed? Every Month Is Blocked Capital</h2>
            <div class="content-text">
                
                <p>Every month that GST refund remains unclaimed is a month of blocked working capital. Exporters under LUT accumulate ITC that could be recovered within 7 days of filing RFD-01. Goods exporters with GSTR-1/ICEGATE mismatches have IGST refunds stuck indefinitely. Manufacturers with inverted duty see ITC balances grow while cash flow suffers. The 2-year limitation means old claims expire permanently.</p><p><strong>Contact Patron's Delhi office now - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Claim Your GST Refund in Delhi Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST refund in Delhi recovers working capital locked in the tax system through multiple channels: export ITC under LUT, IGST on goods exports via ICEGATE, inverted duty structure ITC, excess cash ledger, and SEZ supplies. The statutory framework provides for 90% provisional refund within 7 days and final orders within 60 days, with interest for delays.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting provides complete GST refund services from our Rohini office - covering eligibility assessment, Rule 89 calculation, RFD-01 filing, ICEGATE reconciliation, deficiency resolution, and order tracking. With Rs 15 crore+ in refunds claimed, 95%+ approval rate, and offices in Pune, Mumbai, Delhi, and Gurugram, Patron ensures every eligible refund is recovered.</p><p style="color:rgba(255,255,255,0.7);font-size:13px;">Reviewed by CA & CS Team - Patron Accounting LLP</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GST%20Refund%20Enquiry%20-%20Delhi&body=Hello%2C%20I%20just%20visited%20your%20GST%20Refund%20in%20Delhi%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Refund Services: Available Across 4 Major Cities</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Professional GST refund filing services in Pune, Mumbai, Delhi, and Gurugram.</p>
     
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
                    <a href="/gst-refund/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/gst-refund/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-refund/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div></div>
            <div class="pa-city-block"><div class="pa-block-title">Related Services in Delhi</div><div class="pa-block-sub">End-to-end GST and export compliance for Delhi businesses</div><div class="pa-cross-grid">
                    <a href="/gst-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/gst-returns/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/private-limited-company-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/income-tax-return/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return Filing</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/trademark-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                    <a href="/startup-registration/delhi" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Delhi</div></div></a>
                </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 06 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">06 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 06 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months to ensure GST refund procedures, Rule 89 formulas, provisional refund timelines, and CBIC instructions are current. Verified against gst.gov.in and cbic.gov.in.</p>
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
