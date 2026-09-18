
@extends('layouts.service-app')
@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush








@section('meta')
    <title>GST Returns for SEZ Units - Zero-Rated Supply, LUT & Refund</title>
    <meta name="description" content="GST returns for SEZ units and developers require separate GSTIN filing. Expert SEZ return filing services from Rs 1,499/month. CA-assisted compliance.">
    <link rel="canonical" href="/gst-returns-for-sez">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Returns for SEZ Units - Zero-Rated Supply, LUT & Refund">
    <meta property="og:description" content="GST returns for SEZ units and developers require separate GSTIN filing. Expert SEZ return filing services from Rs 1,499/month. CA-assisted compliance.">
    <meta property="og:url" content="/gst-returns-for-sez">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Returns for SEZ Units - Zero-Rated Supply, LUT & Refund">
    <meta name="twitter:description" content="GST returns for SEZ units and developers require separate GSTIN filing. Expert SEZ return filing services from Rs 1,499/month. CA-assisted compliance.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Returns for SEZ: Filing and Refund Guide",
          "description": "GST returns for SEZ units and developers require separate GSTIN filing. Expert SEZ return filing services from Rs 1,499/month. CA-assisted compliance.",
          "url": "https://www.patronaccounting.com/gst-returns-for-sez",
          "serviceType": "GST Returns for SEZ: Filing and Refund Guide",
          "areaServed": {
            "@type": "Country",
            "name": "India"
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
            "url": "https://www.patronaccounting.com/gst-returns-for-sez",
            "price": "1499"
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
              "name": "GST Returns for SEZ: Filing and Refund Guide",
              "item": "https://www.patronaccounting.com/gst-returns-for-sez"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What GST returns does an SEZ unit need to file?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-1 (outward supply details) and GSTR-3B (summary return) every month, plus GSTR-9 annually by 31st December. SEZ units with turnover up to Rs 5 crore can opt for QRMP quarterly filing. Nil returns mandatory even with zero transactions."
              }
            },
            {
              "@type": "Question",
              "name": "Is GST applicable on supplies to SEZ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Supplies for authorised operations are zero-rated under Section 16 IGST Act - 0% GST if made under LUT or Bond. Supplier can alternatively pay IGST and claim refund. For non-authorised operations, regular IGST applies per CBIC Circular 48/22/2018-GST."
              }
            },
            {
              "@type": "Question",
              "name": "How to claim GST refund for SEZ supplies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File Form RFD-01 on the GST portal. Without IGST payment (LUT route): claim ITC refund. With IGST payment: claim IGST refund. Both require SEZ officer endorsement confirming goods/services admitted for authorised operations. 90% provisional refund within 7 days."
              }
            },
            {
              "@type": "Question",
              "name": "Does an SEZ unit need separate GST registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Rule 8 CGST Rules, an SEZ unit is deemed a separate business vertical. Separate registration mandatory even if the same PAN already holds a DTA GSTIN in the same state. Supplies from SEZ GSTIN and DTA GSTIN cannot be clubbed."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for late filing by SEZ units?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Rs 50/day late fee (Rs 25 CGST + Rs 25 SGST) capped at Rs 5,000 per return under Section 47. Nil returns: Rs 20/day. Interest at 18% p.a. on unpaid tax. Missing GSTR-1 blocks DTA suppliers' ITC. Missing GSTR-3B blocks all future filings."
              }
            },
            {
              "@type": "Question",
              "name": "Can SEZ units opt for QRMP scheme?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Available to SEZ units and developers with annual turnover up to Rs 5 crore. GSTR-1 and GSTR-3B filed quarterly with monthly tax payment via PMT-06 challan."
              }
            },
            {
              "@type": "Question",
              "name": "Are SEZ units exempt from e-invoicing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Per Notification 61/2020-CT, SEZ units are exempt from mandatory e-invoicing. However, SEZ developers and DTA suppliers to SEZ must comply if their turnover exceeds the applicable threshold."
              }
            },
            {
              "@type": "Question",
              "name": "What documents are required for SEZ GST refund?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SEZ officer endorsement, statement of invoice numbers and dates, payment details, declaration that SEZ unit has not claimed ITC on supplier tax, and bill of export for goods. Filed via Form RFD-01 within 2 years of supply. Quick Answers GST rate on supplies to SEZ? 0% (zero-rated) under Section 16 IGST Act for authorised operations. Supplier files LUT or pays IGST and claims refund. Which form for SEZ GST refund? Form GST RFD-01, filed electronically on gst.gov.in. Time limit for refund? Within 2 years from the last day of the quarter in which supply was made. Provisional refund? 90% of claimed amount credited within 7 days of acknowledgement, subject to conditions."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column  -  right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T)  -  Plan 3.1
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
           TOC NAVIGATION  -  Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot  -  Plan 3.2 */
        .process-screenshot-details { margin-top: 14px; }
</style>
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
                        GST Returns for SEZ: Complete Filing and Compliance Guide for SEZ Units and Developers
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Registration:</span> Mandatory separate GST registration for each SEZ unit under Rule 8, CGST Rules, 2017 - even if the entity already holds a DTA registration</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Returns:</span> Monthly GSTR-1 (11th) and GSTR-3B (20th) with SEZ-specific supply declarations in Table 6A/6B. Annual GSTR-9 by 31st December.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Zero-Rated:</span> All supplies to SEZ for authorised operations are zero-rated under Section 16, IGST Act. Refund via Form RFD-01 with SEZ officer endorsement.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> Expert SEZ GST return filing from Rs 1,499/month. Refund management, LUT renewal, and complete compliance package available.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ businesses served across GST compliance verticals with 4.8/5 client rating and offices in 4 cities</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=SEZ%20GST%20Returns&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20SEZ%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20SEZ%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Returns for SEZ',
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
    'ctaText'    => 'Expert SEZ GST filing - GSTR-1/3B with Table 6A/6B classification, RFD-01 refund management, LUT renewal, and SEZ officer endorsement coordination.',
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
            <a class="toc-btn" href="#overview-section">Overview</a><a class="toc-btn" href="#what-section">What Is It</a><a class="toc-btn" href="#who-section">Who Must File</a><a class="toc-btn" href="#services-section">Our Services</a><a class="toc-btn" href="#procedure-section">How to File</a><a class="toc-btn" href="#documents-section">Documents</a><a class="toc-btn" href="#challenges-section">Challenges</a><a class="toc-btn" href="#fees-section">Fees</a><a class="toc-btn" href="#timeline-section">Timeline</a><a class="toc-btn" href="#benefits-section">Benefits</a><a class="toc-btn" href="#comparison-section">DIY vs Professional</a><a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Returns for SEZ - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Returns for SEZ Services at a Glance</strong></p>
                    <p>SEZ units and developers must file GST returns under a separate GSTIN. All supplies to and from SEZs are inter-state (IGST). Supplies for authorised operations are zero-rated under Section 16 IGST Act, allowing ITC or IGST refund. Returns include GSTR-1 (monthly/quarterly), GSTR-3B (monthly), and GSTR-9 (annual). Late filing: Rs 50/day under Section 47, capped at Rs 5,000.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Applicable Law</td><td>IGST Act 2017 (Sec 16), CGST Act 2017, SEZ Act 2005</td></tr><tr><td>Key Returns</td><td>GSTR-1, GSTR-3B, GSTR-9, Form RFD-01 (refund)</td></tr><tr><td>Filing Frequency</td><td>Monthly (GSTR-1 by 11th, GSTR-3B by 20th); Annual by 31st December</td></tr><tr><td>Supply Treatment</td><td>Inter-state (IGST); zero-rated for authorised operations</td></tr><tr><td>Refund Options</td><td>LUT/Bond without IGST + ITC refund; OR pay IGST + claim IGST refund</td></tr><tr><td>Late Filing Penalty</td><td>Rs 50/day (Rs 25 CGST + Rs 25 SGST), max Rs 5,000; 18% interest</td></tr><tr><td>Starting Price</td><td>From Rs 1,499/month (Patron Accounting)</td></tr></tbody></table></div><p style="margin-top:0;</p>
                </div>
                <p>Filing GST returns for Special Economic Zones involves navigating a layered compliance structure that differs significantly from standard GST filing. SEZ units and developers must maintain separate books, file returns under a distinct GSTIN, report zero-rated supplies accurately, and claim refunds through prescribed channels - all while meeting the same monthly and annual deadlines.</p>
                <p>Errors in SEZ return filing can lead to blocked ITC for DTA suppliers, delayed refunds, penalties under Section 47, and in severe cases, cancellation of GST registration. Patron Accounting provides specialised SEZ GST compliance from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Are GST Returns for SEZ?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GST returns for SEZ are periodic compliance filings submitted by Special Economic Zone units and developers under a separate GSTIN, reporting all zero-rated and taxable supplies, input tax credit claims, and IGST liabilities arising from their operations within the SEZ framework under the IGST Act, 2017.</p><p>All supplies to and from an SEZ are classified as inter-state transactions under Section 7(5)(b) of the IGST Act. Supplies for authorised operations are zero-rated under Section 16, allowing the supplier to either supply under LUT without IGST (and claim ITC refund) or pay IGST and claim refund.</p><p>SEZ units report supplies in Table 6A/6B of GSTR-1 with the correct SEZ flag. Refund claims are filed via <a href="https://www.gst.gov.in" target="_blank" rel="noopener">Form RFD-01</a> with SEZ officer endorsement.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Returns for SEZ:</strong></p>
                    <p><strong>Zero-Rated Supply</strong> - Supply to SEZ for authorised operations at 0% GST under Section 16 IGST Act. Supplier claims ITC refund or IGST refund.</p><p><strong>LUT (Letter of Undertaking)</strong> - Form GST RFD-11 filed annually to make zero-rated supplies without paying IGST upfront.</p><p><strong>DTA (Domestic Tariff Area)</strong> - All areas outside SEZ. Supplies from SEZ to DTA are treated as imports attracting IGST and customs duties.</p><p><strong>Form RFD-01</strong> - GST refund application for IGST paid or unutilised ITC on zero-rated supplies. Requires SEZ officer endorsement.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="30" y="25" width="140" height="80" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="25" width="140" height="22" rx="8" fill="#14365F"/><text x="100" y="40" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SEZ</text><text x="100" y="65" font-size="8" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ZERO-RATED</text><text x="70" y="85" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Table 6A</text><text x="130" y="85" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01</text><rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="52" y="142.5" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Sec 16 IGST</text><circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="165" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">0%</text><text x="100" y="168" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">SEZ GST Returns</text></svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IGST Act 2017</span>
                        <strong>SEZ GST Filing</strong>
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
            <h2 class="section-title">Who Must File GST Returns for SEZ?</h2>
            <div class="content-text">
                
                <ul><li><strong>SEZ Units:</strong> Manufacturing or service units operating within a notified SEZ with separate GST registration under Rule 8 CGST Rules</li><li><strong>SEZ Developers:</strong> Entities with Letter of Approval (LOA) for setting up or developing an SEZ</li><li><strong>DTA Suppliers to SEZ:</strong> Regular taxpayers making supplies to SEZ and claiming IGST or ITC refund under zero-rated provisions</li><li><strong>Co-developers:</strong> Infrastructure developers within an SEZ approved under the SEZ Act, 2005</li></ul><p><strong>Key rule:</strong> Under Rule 8 CGST Rules, every SEZ unit is deemed a separate business vertical. Separate GST registration is mandatory even if the same PAN already holds a DTA GSTIN in the same state. Nil returns required even with zero transactions.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our SEZ GST Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 Filing</td><td>Accurate SEZ supply classification in Table 6A/6B with correct SEZ flag, e-invoice integration, and filing on <a href="https://www.gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></td></tr><tr><td>Monthly GSTR-3B Filing</td><td>Zero-rated supply declarations, ITC reconciliation with GSTR-2B, IGST computation, and tax payment</td></tr><tr><td>GST Refund Management (RFD-01)</td><td>Preparation and filing for both with-payment and without-payment routes including SEZ officer endorsement coordination</td></tr><tr><td>Annual Return (GSTR-9)</td><td>Full reconciliation of monthly filings, ITC claims, and refund applications for the financial year</td></tr><tr><td>LUT Filing and Renewal (RFD-11)</td><td>Annual Form GST RFD-11 submission to enable zero-rated supply without IGST payment</td></tr><tr><td>GSTR-2B Reconciliation</td><td>Vendor compliance tracking and ITC optimisation for SEZ-specific transactions</td></tr>

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
            <h2 class="section-title">How to File GST Returns for SEZ</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Step-by-step process for SEZ GST return filing including separate registration, LUT, GSTR-1/3B classification, refund, and annual return.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain Separate GST Registration</h3><p class="step-description">Submit Form GST REG-01 with the SEZ Letter of Approval (Form B or Form C) issued under Section 4(2) of the SEZ Act, 2005. Under Rule 8 CGST Rules, every SEZ unit is deemed a separate business vertical requiring distinct registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SEZ GSTIN obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Separate from DTA GSTIN</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">REG-01</text><text x="60" y="50" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">SEZ GSTIN</text></svg></div><span class="illustration-label">Registered</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">File LUT (Form RFD-11)</h3><p class="step-description">File LUT on the GST portal before the start of each financial year to make zero-rated supplies without payment of IGST. Navigate to Services > User Services > Furnish Letter of Undertaking. Renew annually.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> LUT filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero-rated enabled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="42" font-size="7" fill="#C05E10" font-weight="800" text-anchor="middle" font-family="Arial">LUT</text><text x="60" y="78" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-11</text></svg></div><span class="illustration-label">LUT Active</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">File GSTR-1 by the 11th</h3><p class="step-description">Report SEZ supplies in Table 6A/6B with the correct SEZ flag. For DTA suppliers, mark supplies in B2B details with 'SEZ Supplies with Payment' or 'SEZ Supplies Without Payment'. Ensure e-invoice integration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Table 6A/6B reported</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SEZ flag set correctly</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-1</text><text x="60" y="40" font-size="5" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">Table 6A/6B</text><text x="60" y="55" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">SEZ FLAG</text></svg></div><span class="illustration-label">GSTR-1 Filed</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File GSTR-3B by the 20th</h3><p class="step-description">Declare zero-rated supply turnover in the appropriate table. Compute IGST liability or nil liability based on LUT usage. Reconcile ITC claims with GSTR-2B before submission.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero-rated declared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITC reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-3B</text><text x="60" y="45" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ZERO-RATED</text></svg></div><span class="illustration-label">GSTR-3B Filed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Apply for Refund (RFD-01)</h3><p class="step-description">File Form RFD-01 on the GST portal. Without-payment route: claim ITC refund. With-payment route: claim IGST refund. Obtain SEZ officer endorsement confirming goods/services admitted for authorised operations. 90% provisional refund within 7 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RFD-01 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> SEZ endorsement obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RFD-01</text><text x="60" y="52" font-size="6" fill="#F5A623" font-weight="700" text-anchor="middle" font-family="Arial">REFUND</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">90% in 7 days</text></svg></div><span class="illustration-label">Refund Applied</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Annual Return (GSTR-9)</h3><p class="step-description">File by 31st December. Reconcile all monthly filings, ITC claims, and refund applications. Ensure no mismatch between GSTR-1, GSTR-3B, and GSTR-9 data for the financial year.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Annual data reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Zero mismatches</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for SEZ GST Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>SEZ Letter of Approval</strong> (Form B/Form C)</li><li><strong>Separate GSTIN registration certificate</strong> for the SEZ unit</li><li><strong>Valid LUT</strong> filed via Form GST RFD-11</li><li><strong>Tax invoices</strong> with SEZ supply declaration citing Section 16 IGST Act</li><li><strong>Bill of export</strong> (for goods) or proof of service receipt by SEZ</li><li><strong>SEZ officer endorsement</strong> for goods/services admitted for authorised operations</li><li><strong>E-way bills</strong> for goods movement exceeding Rs 50,000</li><li><strong>GSTR-2A/2B reconciliation report</strong> for ITC validation</li><li><strong>Declaration</strong> that SEZ unit has not claimed ITC on taxes paid by DTA supplier (for refund claims)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common SEZ GST Filing Challenges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Working Capital Blockage</td><td>DTA suppliers charge IGST instead of filing LUT, forcing SEZ unit to pay upfront and wait 30-60 days for refund</td><td>Patron coordinates with DTA suppliers to ensure LUT filing. Files for provisional 90% refund within 7 days as permitted under GST rules.</td></tr><tr><td>GSTR-1 vs GSTR-3B Mismatch</td><td>SEZ-specific flags and invoice details in GSTR-1 must exactly match GSTR-3B declarations. Mismatches cause refund rejections.</td><td>Automated reconciliation between GSTR-1, GSTR-3B, and GSTR-2B before every filing cycle to catch discrepancies.</td></tr><tr><td>Non-Authorised Operations</td><td>Zero-rated benefit does not apply for operations not covered in the Letter of Approval. IGST becomes chargeable per CBIC Circular 48/22/2018-GST.</td><td>Our CA team reviews Letter of Approval against each supply category and advises on correct GST treatment.</td></tr><tr><td>RCM Complications for SEZ</td><td>Confusion on whether SEZ units receiving RCM services under Section 9(3)/9(4) must pay IGST</td><td>SEZ units can procure RCM services without IGST if LUT is furnished (CBIC letter F.No. 334/335/2017-TRU). Patron tracks RCM for every inward supply.</td></tr>

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
            <h2 class="section-title">SEZ GST Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly GSTR-1 and GSTR-3B (SEZ unit)</td><td>Starting from INR 1,499/month</td></tr><tr><td>Quarterly GSTR-1 + GSTR-3B (QRMP)</td><td>Rs 3,999/quarter</td></tr><tr><td>Annual Return GSTR-9</td><td>Rs 4,999/year</td></tr><tr><td>GST Refund (Form RFD-01)</td><td>Rs 2,499 per application</td></tr><tr><td>LUT Filing and Renewal (RFD-11)</td><td>Rs 999/year</td></tr><tr><td>Complete SEZ Compliance Package</td><td>Rs 7,999/month (all-inclusive)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Returns for SEZ consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20SEZ%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">SEZ GST Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 Filing</td><td>By 11th of next month | Turnaround: 2-3 working days</td></tr><tr><td>GSTR-3B Filing</td><td>By 20th of next month | Turnaround: 1-2 working days after GSTR-1</td></tr><tr><td>Refund (Form RFD-01)</td><td>Within 2 years of supply | Preparation: 5-7 working days</td></tr><tr><td>Provisional Refund (90%)</td><td>Credited within 7 days of acknowledgement</td></tr><tr><td>Full Refund Processing</td><td>30-60 days by GST portal</td></tr><tr><td>Annual Return (GSTR-9)</td><td>By 31st December | Preparation: 7-10 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> Missing GSTR-1 blocks DTA suppliers' ITC. Missing GSTR-3B blocks future return filing. Late fees accumulate at Rs 50/day. Refund applications must be filed within 2 years. LUT must be renewed before 1st April each year. Start GSTR-1 preparation immediately after month-end.</p>

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
            <h2 class="section-title">Benefits of Professional SEZ GST Filing</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;"><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Accurate Zero-Rated Classification</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Prevents IGST leakage and ensures DTA suppliers can claim their ITC without disruption from incorrect Table 6A/6B reporting</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Faster Refund Processing</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Properly documented Form RFD-01 applications with SEZ endorsements and reconciled data. 90% provisional refund within 7 days.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Reduced Working Capital Blockage</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Ensuring suppliers file LUT and claim ITC refund instead of costlier IGST refund route. Proactive supplier coordination.</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Zero Late-Filing Penalties</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Automated deadline tracking and proactive filing ensures GSTR-1 and GSTR-3B are always submitted before due dates</p></article><article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;"><div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Expert RCM and Complex Scenario Handling</h3><p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">RCM under Section 9(3)/9(4), intra-SEZ transfers, DTA clearances, and non-authorised operation classification handled correctly</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting for SEZ GST</h2>
            <div class="content-text">
                
                <p><strong>500+ businesses served</strong> across GST compliance verticals. <strong>4.8/5 client rating</strong> from 200+ verified reviews. Our team includes CAs and CS professionals with hands-on SEZ GST experience across IT/ITeS, manufacturing, pharmaceuticals, and export sectors. Clients in SEEPZ (Mumbai), Rajiv Gandhi Infotech Park SEZ (Pune), DLF Cyber City SEZ (Gurugram), and Electronic City SEZ (Bengaluru).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional SEZ GST Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>SEZ Supply Classification</td><td>Manual flag selection - prone to Table 6A/6B errors</td><td>CA-verified classification for every invoice</td></tr><tr><td>Refund Processing</td><td>Often rejected due to documentation gaps</td><td>End-to-end RFD-01 with SEZ endorsement</td></tr><tr><td>ITC Reconciliation</td><td>Manual comparison - time-consuming</td><td>Automated GSTR-2B matching with exception reporting</td></tr><tr><td>Compliance Risk</td><td>High - missed deadlines, incorrect classification</td><td>Low - proactive filing with deadline alerts</td></tr><tr><td>Cost</td><td>Staff time + software + penalty risk</td><td>Fixed Rs 1,499/month - all-inclusive</td></tr><tr><td>Audit Support</td><td>Self-managed</td><td>Full representation before GST authorities</td></tr>

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
            <h2 class="section-title">Related SEZ and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/gst-registration">GST Registration</a> - For SEZ units needing separate GSTIN</li><li><a href="/gst-returns">GST Returns</a> - Comprehensive GST return filing guide</li><li><a href="/gst-audit">GST Audit</a> - Audit services for SEZ entities</li><li><a href="/iec-registration">IEC Registration</a> - For SEZ exporters</li><li><a href="/fdi-compliance">FDI Compliance</a> - For SEZ units with foreign investment</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for SEZ GST Returns</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead><tbody><tr><td>Section 7(5)(b) IGST Act</td><td>Supply to/by an SEZ is treated as inter-state trade (IGST applies)</td></tr><tr><td><a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">Section 16(1) IGST Act</a></td><td>Supply to SEZ for authorised operations is zero-rated supply</td></tr><tr><td>Section 54 CGST Act</td><td>Refund provisions for unutilised ITC and IGST paid on zero-rated supplies</td></tr><tr><td>Rule 8 CGST Rules</td><td>SEZ unit deemed separate business vertical - distinct registration mandatory</td></tr><tr><td>Section 47 CGST Act</td><td>Late fee Rs 50/day (Rs 25 CGST + Rs 25 SGST), max Rs 5,000 per return</td></tr><tr><td>Notification 61/2020-CT</td><td>SEZ units exempt from mandatory e-invoicing</td></tr><tr><td>CBIC Circular 48/22/2018-GST</td><td>Zero-rated benefit only for authorised operations; non-authorised attract IGST</td></tr></tbody></table></div><p><strong>Filing Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST Portal</a> | <a href="https://taxinformation.cbic.gov.in" target="_blank" rel="noopener">CBIC</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - SEZ GST Returns</h2>
                    <p class="faq-expanded__lead">Expert answers about GST return filing for SEZ units, zero-rated supplies, refund procedures, and compliance requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Returns for SEZ',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What GST returns does an SEZ unit need to file?</h3>
                        <div class="faq-expanded__a"><p>GSTR-1 (outward supply details) and GSTR-3B (summary return) every month, plus GSTR-9 annually by 31st December. SEZ units with turnover up to Rs 5 crore can opt for QRMP quarterly filing. Nil returns mandatory even with zero transactions.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is GST applicable on supplies to SEZ?</h3>
                        <div class="faq-expanded__a"><p>Supplies for authorised operations are zero-rated under Section 16 IGST Act - 0% GST if made under LUT or Bond. Supplier can alternatively pay IGST and claim refund. For non-authorised operations, regular IGST applies per CBIC Circular 48/22/2018-GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How to claim GST refund for SEZ supplies?</h3>
                        <div class="faq-expanded__a"><p>File Form RFD-01 on the GST portal. Without IGST payment (LUT route): claim ITC refund. With IGST payment: claim IGST refund. Both require SEZ officer endorsement confirming goods/services admitted for authorised operations. 90% provisional refund within 7 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Does an SEZ unit need separate GST registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Rule 8 CGST Rules, an SEZ unit is deemed a separate business vertical. Separate registration mandatory even if the same PAN already holds a DTA GSTIN in the same state. Supplies from SEZ GSTIN and DTA GSTIN cannot be clubbed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late filing by SEZ units?</h3>
                        <div class="faq-expanded__a"><p>Rs 50/day late fee (Rs 25 CGST + Rs 25 SGST) capped at Rs 5,000 per return under Section 47. Nil returns: Rs 20/day. Interest at 18% p.a. on unpaid tax. Missing GSTR-1 blocks DTA suppliers' ITC. Missing GSTR-3B blocks all future filings.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can SEZ units opt for QRMP scheme?</h3>
                        <div class="faq-expanded__a"><p>Yes. Available to SEZ units and developers with annual turnover up to Rs 5 crore. GSTR-1 and GSTR-3B filed quarterly with monthly tax payment via PMT-06 challan.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Are SEZ units exempt from e-invoicing?</h3>
                        <div class="faq-expanded__a"><p>Yes. Per Notification 61/2020-CT, SEZ units are exempt from mandatory e-invoicing. However, SEZ developers and DTA suppliers to SEZ must comply if their turnover exceeds the applicable threshold.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What documents are required for SEZ GST refund?</h3>
                        <div class="faq-expanded__a"><p>SEZ officer endorsement, statement of invoice numbers and dates, payment details, declaration that SEZ unit has not claimed ITC on supplier tax, and bill of export for goods. Filed via Form RFD-01 within 2 years of supply.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GST rate on supplies to SEZ?</strong> 0% (zero-rated) under Section 16 IGST Act for authorised operations. Supplier files LUT or pays IGST and claims refund.</p><p><strong>Which form for SEZ GST refund?</strong> Form GST RFD-01, filed electronically on gst.gov.in.</p><p><strong>Time limit for refund?</strong> Within 2 years from the last day of the quarter in which supply was made.</p><p><strong>Provisional refund?</strong> 90% of claimed amount credited within 7 days of acknowledgement, subject to conditions.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your SEZ GST Returns Filed On Time</h2>
            <div class="content-text">
                
                <p>Missing GSTR-1 blocks your DTA suppliers' ITC. Missing GSTR-3B creates a compliance backlog that compounds with every missed deadline. Late fees accumulate at Rs 50/day. Refund applications must be filed within the 2-year statutory window. LUT must be renewed before 1st April.</p><p><strong>Start your SEZ GST compliance today.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20SEZ%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Expert SEZ GST Compliance - Start Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">GST return filing for SEZ units demands specialised knowledge of zero-rated supply provisions, separate registration, refund procedures, and the interplay between the IGST Act, CGST Act, and SEZ Act. From accurate GSTR-1 classification to timely RFD-01 refund claims with SEZ officer endorsements, every step requires precision.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting handles the full SEZ return lifecycle - monthly GSTR-1/3B, annual GSTR-9, refund management, and LUT renewal. From Rs 1,499/month. Offices in Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20SEZ%20page.%20I%20would%20like%20to%20know%20more%20about%20it." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=SEZ%20GST%20Return%20Filing&body=Hello%2C%20I%20just%20visited%20your%20GST%20Returns%20for%20SEZ%20page.%20I%20would%20like%20to%20know%20more%20about%20it.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">SEZ GST Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting files GST returns for SEZ units and developers in major SEZ hubs.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><p class="pa-block-title">SEZ GST Returns by City</p><p class="pa-block-sub">Expert zero-rated supply filing and refund management</p><div class="pa-city-grid"><a href="/gst-returns-for-sez/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-sez/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/gst-returns-for-sez/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/gst-returns-for-sez/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><p class="pa-block-title">Related SEZ and Export Services</p><p class="pa-block-sub">Complete SEZ compliance</p><div class="pa-cross-grid"><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">SEZ GSTIN</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">All Types</div></div></a><a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">SEZ</div></div></a><a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">Export</div></div></a><a href="/fdi-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FDI Compliance</div><div class="pa-card-sub">SEZ</div></div></a><a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">Reply</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months - aligned to GST due date changes, SEZ rule updates, and refund procedure amendments. Next review: September 2026.</p>
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
     CONSULTATION FORM  -  Country Dropdown + Validation + Bigin Integration
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
