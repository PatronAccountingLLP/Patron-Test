
@extends('layouts.service-app')

<!-- External Dependencies (loaded by master layout in production) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@section('meta')
    <title>GST Annual Return in Mumbai - GSTR-9, GSTR-9C & Due Date</title>
    <meta name="description" content="CA-assisted GSTR-9 and GSTR-9C filing in Mumbai. Annual return for Rs 2 crore+ turnover. Serving BKC, Andheri MIDC, SEEPZ businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-annual-returns/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Annual Return in Mumbai - GSTR-9, GSTR-9C & Due Date">
    <meta property="og:description" content="CA-assisted GSTR-9 and GSTR-9C filing in Mumbai. Annual return for Rs 2 crore+ turnover. Serving BKC, Andheri MIDC, SEEPZ businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-annual-returns/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Annual Return in Mumbai - GSTR-9, GSTR-9C & Due Date">
    <meta name="twitter:description" content="CA-assisted GSTR-9 and GSTR-9C filing in Mumbai. Annual return for Rs 2 crore+ turnover. Serving BKC, Andheri MIDC, SEEPZ businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Annual Returns (9/9C) in Mumbai",
      "description": "CA-assisted GSTR-9 and GSTR-9C filing in Mumbai. Annual return for Rs 2 crore+ turnover. Serving BKC, Andheri MIDC, SEEPZ businesses. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-annual-returns/mumbai",
      "serviceType": "GST Annual Returns (9/9C) in Mumbai",
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
        "url": "https://www.patronaccounting.com/gst-annual-returns/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "2",
          "maxPrice": "400",
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
          "name": "GST Annual Return Filing: GSTR-9 and 9C",
          "item": "https://www.patronaccounting.com/gst-annual-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Annual Returns (9/9C) in Mumbai",
          "item": "https://www.patronaccounting.com/gst-annual-returns/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles annual returns in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GST annual returns are filed online on the GST portal gst.gov.in and processed by the GST Commissionerate having jurisdiction over the taxpayer principal place of business. Mumbai has four Commissionerate zones East West Central and South. The jurisdictional assignment is based on the registered address. Patron Accounting Marine Lines office handles GSTR-9 and GSTR-9C filing digitally for all Mumbai GSTINs regardless of zone."
          }
        },
        {
          "@type": "Question",
          "name": "Can GSTR-9 be filed online from Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes GSTR-9 is filed exclusively online through the GST portal at gst.gov.in under Services then Returns then Annual Return. The portal auto-populates key tables from GSTR-1 GSTR-3B and GSTR-2B data. Filing is done using EVC for turnover up to Rs 5 crore or DSC mandatory for companies. No physical submission to any GST Commissionerate office is required."
          }
        },
        {
          "@type": "Question",
          "name": "What is the due date for GSTR-9 in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The due date for GSTR-9 is 31 December of the financial year following the reporting year. For FY 2024-25 the due date is 31 December 2025. The government may extend this via notification. All monthly GSTR-1 and GSTR-3B returns for the year must be filed before GSTR-9 can be submitted on the portal."
          }
        },
        {
          "@type": "Question",
          "name": "Is GSTR-9 mandatory for turnover below Rs 2 crore?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Taxpayers with aggregate turnover up to Rs 2 crore are exempt from filing GSTR-9. The return is deemed to have been furnished on the due date. This exemption has been consistently notified from FY 2017-18 through FY 2024-25. However voluntary filing is permitted for businesses wanting comprehensive compliance records."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between GSTR-9 and GSTR-9C?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-9 is the annual return consolidating all monthly returns data for the financial year covering outward supplies inward supplies ITC and tax paid. GSTR-9C is the reconciliation statement matching GSTR-9 figures with audited financial statements. GSTR-9 mandatory for turnover above Rs 2 crore. GSTR-9C additionally required for turnover above Rs 5 crore and must be self-certified."
          }
        },
        {
          "@type": "Question",
          "name": "What is the late fee for GSTR-9 in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Late fee is tiered based on turnover: Rs 50 CGST plus Rs 50 SGST per day for turnover up to Rs 5 crore capped at 0.04 percent. Rs 100 plus 100 for Rs 5-20 crore capped at 0.04 percent. Rs 200 plus 200 for above Rs 20 crore capped at 0.25 percent. Tiered structure introduced via Notification No. 07/2023-CT dated 31 March 2023."
          }
        },
        {
          "@type": "Question",
          "name": "Can GSTR-9 be revised after filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Once GSTR-9 is filed on the GST portal it cannot be revised. This is why thorough reconciliation before submission is critical. Any errors discovered after filing must be addressed in the next year GSTR-9 or through adjustments in subsequent monthly returns. Patron conducts multi-level review before final submission."
          }
        },
        {
          "@type": "Question",
          "name": "Does GSTR-9C still require CA certification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. From FY 2020-21 onwards GSTR-9C is self-certified by the taxpayer. CA or CMA certification is no longer required. However the reconciliation must still be prepared accurately and the GST department can scrutinise self-certified GSTR-9C and issue demand notices for discrepancies. Involving CA in preparation is still advisable. Quick Answers GSTR-9 kab file karna hota hai? 31 December tak next FY mein. Pehle saare monthly GSTR-1 aur GSTR-3B file hone chahiye. Rs 2 crore se kam turnover pe exempt hai. GSTR-9C kisko file karna padta hai? Rs 5 crore se zyada turnover pe. Self-certified reconciliation. Audited financials se match karna padta hai. Late fee kitni hai? Turnover ke hisaab se Rs 100 se Rs 400 per day. Maximum 0.04% ya 0.25% of turnover."
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
                        GST Annual Returns (GSTR-9 / GSTR-9C) Filing in Mumbai: Reconcile, File, Stay Compliant
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">24 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9:</span> Mandatory for aggregate turnover above Rs 2 crore. Due by 31 December. Consolidates GSTR-1, 3B, 2B into annual statement</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9C:</span> Mandatory for turnover above Rs 5 crore. Self-certified reconciliation with audited financial statements</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Tiered: Rs 100/day (up to 5 Cr) | Rs 200/day (5-20 Cr) | Rs 400/day (20+ Cr). Capped at 0.04%-0.25% of turnover</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Portal:</span> gst.gov.in (Services > Returns > Annual Return). EVC for turnover up to Rs 5 crore, DSC for companies</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Mumbai office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=GSTR-9%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20GST%20annual%20return%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20annual%20return%20filing%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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

                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - GST Annual Returns',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'gst-annual-returns/mumbai', 'label' => 'GST Annual Returns in Mumbai', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-returns', 'label' => 'GST Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-audit', 'label' => 'GST Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/mumbai', 'label' => 'GST Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit', 'label' => 'Statutory Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'tax-audit', 'label' => 'Tax Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'other', 'label' => 'Other', 'selected' => false, 'disabled' => false],
                        ],
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
<section class="testimonials-section">
    <div class="section-container">
        <div class="section-header">
            <h2>Real Stories from Real People</h2>
            <p>Hear how teams across industries use Patron to save time, cut costs, & stay in control.</p>
        </div>
        <div class="testi-loading" id="testiLoading" style="display:none !important;">
            <div class="spinner"></div>
            Fetching latest Google reviews&hellip;
        </div>
        <div class="testimonial-slider" id="testimonialSlider" style="display:block;">
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">BKC BFSI with 12 GSTINs across states. Patron reconciled all 12 registrations with PAN-level consistency, filed GSTR-9 and 9C for each with 2-week buffer. Inter-branch transfers perfectly matched. Zero discrepancy notices from GST department.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arjun Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Financial Services, BKC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">SEEPZ export unit. Complex IGST refund reconciliation within GSTR-9. Patron matched every export invoice with shipping bills and refund applications. Additional tax identified during reconciliation and paid via DRC-03 before filing. Clean annual return.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Kapoor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Export Unit, SEEPZ</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Andheri MIDC manufacturer with 150+ HSN codes. Patron compiled entire HSN summary from production records, reconciled RCM payments, and filed GSTR-9 by mid-December. Our internal team was struggling with Table 8 ITC reconciliation - Patron resolved it in 3 days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Desai</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Accounts Head, Manufacturing, Andheri</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Our GST filing is always on time since we moved to Patron. The CA team knows their stuff cold.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Manufacturing, Maharashtra</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From BKC multi-GSTIN corporates to SEEPZ exporters to Andheri MIDC manufacturers - Mumbai's taxpayers trust Patron for GST annual returns.</p>
                </div>
            </div>
            <a href="tel:+919459456700" class="btn-cta">
                Talk to an Expert
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

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
            <a href="#what-section" class="toc-btn">What Are Returns</a>
            <a href="#who-section" class="toc-btn">Who Files</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Applicability</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Returns in Mumbai: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Annual Returns Services at a Glance</strong></p>
                    <p>GSTR-9 mandatory for turnover > Rs 2 crore. GSTR-9C for > Rs 5 crore (self-certified). Due 31 December. Filed on gst.gov.in. Tiered late fee Rs 100-400/day. Cannot be revised after filing. Mumbai = 4 GST Commissionerate zones. BKC multi-GSTIN corporates need PAN-level reconciliation. 4-way reconciliation: GSTR-1 vs 3B vs 2B vs books. DRC-03 for additional tax.</p>
                </div>
                <p>Mumbai is India's commercial capital with the highest concentration of GST-registered taxpayers in Maharashtra. Four Commissionerate zones process annual returns from BFSI at BKC, IT at Powai, manufacturers at Andheri MIDC, exporters at SEEPZ/JNPT.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9</td><td>Mandatory if turnover > Rs 2 crore. Due 31 December</td></tr>
                        <tr><td>GSTR-9C</td><td>Mandatory if turnover > Rs 5 crore (self-certified)</td></tr>
                        <tr><td>Late Fee (up to 5 Cr)</td><td>Rs 50+50/day, capped at 0.04% of turnover</td></tr>
                        <tr><td>Late Fee (5-20 Cr)</td><td>Rs 100+100/day, capped at 0.04%</td></tr>
                        <tr><td>Late Fee (20+ Cr)</td><td>Rs 200+200/day, capped at 0.25%</td></tr>
                        <tr><td>Portal</td><td>gst.gov.in (EVC up to 5 Cr / DSC for companies)</td></tr>
                        <tr><td>Exempt</td><td>Turnover up to Rs 2 crore (deemed filed)</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Patron's Marine Lines office handles end-to-end GSTR-9/9C. Related: <a href="/gst-returns">GST returns</a>, <a href="/gst-audit">GST audit</a>, <a href="/gst-registration/mumbai">GST registration</a>, <a href="/statutory-audit">statutory audit</a>, <a href="/tax-audit">tax audit</a>.</p>
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
                <h2 class="section-title">What Are GST Annual Returns?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GSTR-9 is the annual GST return filed under Section 44 of the CGST Act, 2017, consolidating all outward and inward supply details, tax payments, and ITC for a financial year into a single form comprising six parts and 19 tables.</p>
                    <p>GSTR-9C reconciles GSTR-9 data with audited financial statements. Self-certified from FY 2020-21. Covers turnover, tax paid, ITC, and identifies additional tax liability or ITC reversal.</p>
                    <p>Filed on <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a>. Mumbai's 4 Commissionerate zones scrutinise returns. Related: <a href="/gst-returns">GST returns</a>, <a href="/gst-audit">GST audit</a>.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Annual Returns:</strong></p>
                    <ul>
                        <li><strong>GSTR-9:</strong> Annual return. 6 parts, 19 tables. Outward supplies, inward, ITC, tax paid, HSN summary. Due 31 December. Cannot be revised.</li>
                        <li><strong>GSTR-9C:</strong> Reconciliation statement. Turnover + ITC + tax with audited financials. Self-certified from FY 2020-21. Turnover > Rs 5 crore.</li>
                        <li><strong>4-Way Reconciliation:</strong> GSTR-1 vs GSTR-3B vs GSTR-2B vs books. Identifies all mismatches before annual filing.</li>
                        <li><strong>DRC-03:</strong> Additional tax payment from reconciliation differences. Electronic cash ledger only (no ITC). Must pay before GSTR-9 submission.</li>
                        <li><strong>Tiered Late Fee:</strong> Rs 100/200/400 per day based on turnover slab. Capped at 0.04%-0.25%. Notification 07/2023-CT.</li>
                        <li><strong>Multi-GSTIN:</strong> Separate GSTR-9 per registration. PAN-level consistency. Common for BKC corporates with 5-15 state registrations.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Annual Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>GSTR-9</span>
                        <strong>Filed</strong>
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
            <h2 class="section-title">Who Needs to File GST Annual Returns in Mumbai?</h2>
            <div class="content-text">
                
                <p><strong>BFSI Corporates (BKC, Nariman Point):</strong> Multiple GSTINs across states. GSTR-9C mandatory (well above Rs 5 Cr). Inter-branch + centralized ITC. <a href="/gst-returns">GST returns</a>.</p>
                <p><strong>IT/ITES (Powai, Andheri, Lower Parel):</strong> Export services. Zero-rated supplies, LUT-based exports, ITC refund reconciliation. <a href="/gst-audit">GST audit</a>.</p>
                <p><strong>Manufacturers (Andheri MIDC, Thane-Belapur):</strong> Complex supply chains, RCM on inputs, multi-state sales, job work. <a href="/gst-registration/mumbai">GST registration</a>.</p>
                <p><strong>Exporters (SEEPZ, JNPT):</strong> IGST refunds, ITC refunds on zero-rated. Reconcile export invoices with shipping bills + refund claims. <a href="/statutory-audit">Statutory audit</a>.</p>
                <p><strong>Retail/E-commerce/Real Estate:</strong> B2C+B2B consolidation. E-commerce TCS (GSTR-8). Developers with proportional ITC. Turnover > Rs 2 Cr. <a href="/accounting-services">Accounting</a>.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Filing Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Data Compilation</td><td>Extraction and consolidation of all GSTR-1, GSTR-3B, GSTR-2B data. Reconciliation of outward supplies, inward supplies, ITC claimed, tax paid across all 19 tables</td></tr>
                        <tr><td>4-Way Reconciliation</td><td>GSTR-1 vs GSTR-3B vs GSTR-2B vs books. Identify mismatches in outward supply values, ITC claimed, ITC available, tax paid. Invoice-level analysis for high-volume Mumbai businesses</td></tr>
                        <tr><td>ITC Reconciliation (Table 8)</td><td>Match ITC claimed in GSTR-3B with ITC in GSTR-2B/2A. Identify excess claims, missed credits, RCM adjustments. PAN-level ITC for BKC multi-state corporates</td></tr>
                        <tr><td>GSTR-9C Reconciliation</td><td>For turnover > Rs 5 crore: reconcile GSTR-9 with audited financials. Turnover differences, tax adjustments, ITC mismatches. Self-certification preparation. Audit coordination</td></tr>
                        <tr><td>HSN Summary (Table 17-18)</td><td>Product/service-wise HSN/SAC code compilation. For Andheri MIDC manufacturers with 100+ SKUs: detailed mapping across all products. Outward and inward summaries</td></tr>
                        <tr><td>Additional Tax Computation</td><td>Calculate additional tax from reconciliation via DRC-03. Electronic cash ledger payment. Interest computation under Section 50. Before GSTR-9 submission</td></tr>
                        <tr><td>Multi-GSTIN Coordination</td><td>For BKC group companies with 5-15 state GSTINs: coordinated preparation and filing per registration. PAN-level consistency. Inter-branch transfer reconciliation</td></tr>
                        <tr><td>GST Portal Filing</td><td>Complete online filing on gst.gov.in. Draft review, compute liabilities, EVC/DSC submission. Patron files with 2-week buffer before 31 December deadline</td></tr>

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
            <h2 class="section-title">GST Annual Return Filing Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers complete GSTR-9/9C filing from monthly return verification through system data download, reconciliation, preparation, GSTR-9C, to portal submission.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Ensure All Monthly Returns Are Filed</h3>
        <p class="step-description">Verify GSTR-1 and GSTR-3B for all 12 months (or 4 quarters for QRMP) are filed on GST portal. GSTR-9 cannot be filed without completing all periodic returns. For Mumbai businesses with missed monthly returns, complete those first with applicable late fees. Patron conducts pre-filing compliance check at Marine Lines.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All GSTR-1 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All GSTR-3B filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Compliance check done</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">MONTHLY</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="50" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">GSTR-1 + 3B</text><text x="60" y="65" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">All 12 Months</text></svg></div>
            <span class="illustration-label">Monthly Complete</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Download System-Computed Data</h3>
        <p class="step-description">Log in to gst.gov.in. Navigate to Services > Returns > Annual Return. Download system-computed GSTR-9 PDF/Excel and Table 8A Excel. Portal auto-populates Tables 6A, 8A, 9 from GSTR-3B and GSTR-2B. For BKC corporates, also download GSTR-1 and GSTR-3B summaries.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GSTR-9 downloaded</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 8A extracted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Summaries saved</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DOWNLOAD</text><text x="60" y="48" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">System Data</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Auto-Populated</text></svg></div>
            <span class="illustration-label">Data Downloaded</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Reconcile Portal Data with Books</h3>
        <p class="step-description">Compare system-computed figures with books of accounts, audited financials, internal records. Identify discrepancies in outward supplies (Table 4-5), ITC claimed (Table 6-7), ITC available (Table 8), tax paid (Table 9). For MIDC manufacturers: reconcile RCM. For SEEPZ exporters: reconcile zero-rated with shipping bills.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>4-way reconciliation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC mismatches identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RCM/export reconciled</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">RECONCILE</text><text x="60" y="42" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">4-Way Match</text><text x="60" y="55" font-size="5" fill="#10B981" font-weight="500" text-anchor="middle" font-family="Arial">Portal vs Books</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">ITC + Tax</text></svg></div>
            <span class="illustration-label">Reconciled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Prepare GSTR-9 Online and Review</h3>
        <p class="step-description">Enter/edit reconciled data in all editable tables. Tables 6A, 8A, 9 are auto-filled (non-editable). Tables 4, 5, 6B-6O, 7, 8B-8D, 10-14, 17-18 (HSN) require manual input. Click 'Compute Liabilities' to calculate additional tax. Download draft PDF for review.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All tables populated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN summary entered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Liabilities computed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9</text><text x="60" y="42" font-size="5" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">19 Tables</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Compute Tax</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">Draft Review</text></svg></div>
            <span class="illustration-label">GSTR-9 Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Prepare GSTR-9C (If Turnover > Rs 5 Crore)</h3>
        <p class="step-description">After finalising GSTR-9, prepare reconciliation statement. Part II: turnover from audited financials vs GSTR-9. Part III: ITC reconciliation. Part IV: additional liability. Self-certify. For BKC BFSI firms, coordinate with statutory auditor for consistency.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Turnover reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Self-certified</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9C</text><text x="60" y="42" font-size="5" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">Audit Recon</text><text x="60" y="55" font-size="5" fill="#F5A623" font-weight="500" text-anchor="middle" font-family="Arial">Self-Certified</text><text x="60" y="68" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial">If > Rs 5 Cr</text></svg></div>
            <span class="illustration-label">9C Ready</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">File GSTR-9 and GSTR-9C on GST Portal</h3>
        <p class="step-description">Submit GSTR-9 using EVC (turnover up to Rs 5 crore) or DSC (companies). File GSTR-9C along with or after GSTR-9. Pay additional tax via DRC-03 (cash ledger only) before submission. Download acknowledgment. For multi-GSTIN, repeat per registration. Patron files with 2-week buffer.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EVC/DSC submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DRC-03 paid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgment saved</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 30l6 6 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="58" font-size="5" fill="#10B981" font-weight="700" text-anchor="middle" font-family="Arial">FILED</text><text x="60" y="70" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EVC / DSC</text></svg></div>
            <span class="illustration-label">Filed</span>
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
            <h2 class="section-title">Documents Required for GST Annual Return Filing</h2>
            <div class="content-text">
                
                <ul><li><strong>Filed GSTR-1 and GSTR-3B:</strong> All 12 months/4 quarters for the year. Download summaries from GST portal.</li><li><strong>GSTR-2B/2A Statements:</strong> Auto-generated ITC statements for reconciliation with ITC claimed in GSTR-3B.</li><li><strong>Audited Financial Statements:</strong> For GSTR-9C: balance sheet, P&L, notes to accounts. Coordinate with statutory auditor.</li><li><strong>Books of Accounts:</strong> Sales register, purchase register, expense ledger, GST ledger.</li><li><strong>HSN-Wise Summary:</strong> Product/service breakup with HSN/SAC codes, quantities, taxable values, tax amounts.</li><li><strong>Export Documentation:</strong> Shipping bills, LUT copies, IGST refund applications for SEEPZ/JNPT exporters.</li><li><strong>RCM Payment Details:</strong> Reverse Charge payments with supplier-wise breakup.</li></ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai Tip:</strong> Businesses with multiple GSTINs (BKC head office + Thane warehouse) must prepare separate GSTR-9 for each. Ensure inter-branch stock transfers in GSTR-1 align with GSTR-2B of the receiving GSTIN to avoid reconciliation discrepancies.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in GST Annual Return Filing in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Multi-GSTIN Reconciliation</td><td>BKC/Nariman Point corporates with 5-15 GSTINs. PAN-level ITC vs GSTIN-level filing. Centralized procurement and inter-state transfers create mismatches</td><td>Coordinated filing per GSTIN with PAN-level consistency checks. Inter-branch reconciliation. Patron manages all GSTINs as single engagement</td></tr>
                        <tr><td>GSTR-2B vs GSTR-3B ITC Mismatches</td><td>High-volume vendor transactions. Timing differences, supplier filing delays, provisional claims. Invoice-level analysis needed</td><td>4-way reconciliation: GSTR-1 vs 3B vs 2B vs books. Mismatch identification at invoice level. Resolved before annual return filing</td></tr>
                        <tr><td>Export Refund Reconciliation</td><td>SEEPZ/JNPT exporters: IGST refunds claimed, pending, adjusted. Partially processed refunds. Refund rejections complicate annual framework</td><td>Export invoices reconciled with shipping bills and refund amounts. Pending adjustments mapped. Clean GSTR-9 reconciliation for zero-rated supplies</td></tr>
                        <tr><td>Late Fee Exposure</td><td>Tiered Rs 100-400/day accumulates rapidly. Rs 10 Cr turnover = Rs 6,000 for 1-month delay. Rs 50+ Cr = Rs 12,000/month. Cap at 0.25% = Rs 12.5 lakh</td><td>Filing with 2-week buffer before 31 December deadline. Reconciliation started in October. Zero late fee for Patron-managed Mumbai clients</td></tr>
                        <tr><td>GSTR-9C Self-Certification</td><td>No CA certification required but GST department scrutinises. Self-certified errors trigger demand notices under Section 73/74. BKC corporates face prolonged proceedings</td><td>CA-prepared reconciliation even though self-certified. Audit-coordinated for consistency. Multi-level review before submission</td></tr>

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
            <h2 class="section-title">GST Annual Return Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Filing (Govt Fee)</td><td>Nil (only late fee if delayed)</td></tr>
                        <tr><td>Late Fee (up to Rs 5 Cr)</td><td>Rs 50+50/day (max 0.04% turnover)</td></tr>
                        <tr><td>Late Fee (Rs 5-20 Cr)</td><td>Rs 100+100/day (max 0.04%)</td></tr>
                        <tr><td>Late Fee (above Rs 20 Cr)</td><td>Rs 200+200/day (max 0.25%)</td></tr>
                        <tr><td>Patron: GSTR-9</td><td>Starting Rs 5,000/GSTIN</td></tr>
                        <tr><td>Patron: GSTR-9C</td><td>Starting Rs 8,000/GSTIN</td></tr>
                        <tr><td>Patron: Multi-GSTIN</td><td>Custom quote (3+ GSTINs)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Annual Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GSTR-9%20filing%20in%20Mumbai.%20Please%20help." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Filing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Financial year end</td><td>31 March</td></tr>
                        <tr><td>Complete monthly GSTR-1/3B</td><td>Before GSTR-9 filing</td></tr>
                        <tr><td>Statutory audit completion</td><td>By September-October</td></tr>
                        <tr><td>GSTR-9 and GSTR-9C filing</td><td>31 December</td></tr>
                        <tr><td>Additional tax (DRC-03)</td><td>Before GSTR-9 submission</td></tr>
                        <tr><td>Patron recommended buffer</td><td>By 15 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> GSTR-9 cannot be revised after filing. Patron starts reconciliation in October, completes by November, files with 2-week buffer by 15 December. For Mumbai companies with statutory audit completion in September, GSTR-9C is coordinated immediately after audit sign-off. Additional tax identified during reconciliation paid via DRC-03 before submission.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Annual Returns in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Mumbai Office at Marine Lines</h3><p>Walk-in for GSTR-9/9C preparation, reconciliation, filing. Accessible from BKC, Nariman Point, Andheri, Powai, Thane. Free pre-filing compliance check.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Multi-GSTIN Expertise</h3><p>Coordinated filing for BKC group companies with 5-15 state GSTINs. PAN-level consistency. Inter-branch reconciliation. Single engagement across all registrations.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Integrated Audit + Filing</h3><p>GSTR-9C coordinated with statutory audit. Consistency between audited financials and annual return. CA team handles both audit and return preparation.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>2-Week Buffer Filing</h3><p>Reconciliation from October. Filing by 15 December. Zero late fees. 10,000+ businesses, 4.9 rating, 15+ years, GST expertise since 2017.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram. Trusted by Hyundai, Asian Paints, Bridgestone, and 10,000+ businesses for GST compliance since 2017.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Applicability by Turnover</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aggregate Turnover</th><th>GSTR-9</th><th>GSTR-9C</th></tr></thead>
                    <tbody>
                        <tr><td>Up to Rs 2 crore</td><td>Exempt (deemed filed)</td><td>Not applicable</td></tr>
                        <tr><td>Rs 2 crore to Rs 5 crore</td><td>Mandatory</td><td>Not applicable</td></tr>
                        <tr><td>Rs 5 crore to Rs 20 crore</td><td>Mandatory</td><td>Mandatory (self-certified)</td></tr>
                        <tr><td>Above Rs 20 crore</td><td>Mandatory</td><td>Mandatory (self-certified)</td></tr>

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
                
                <p>Mumbai businesses filing GST annual returns often need:</p>
                <ul><li><a href="/gst-returns">GST Returns</a> - Monthly/quarterly GSTR-1, 3B filing.</li>
                    <li><a href="/gst-audit">GST Audit</a> - Departmental audit support.</li>
                    <li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a> - New registration.</li>
                    <li><a href="/gst-notice">GST Notice</a> - Notice response and representation.</li>
                    <li><a href="/statutory-audit">Statutory Audit</a> - Annual audit.</li>
                    <li><a href="/tax-audit">Tax Audit</a> - Section 44AB audit.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for GST Annual Returns</h2>
            <div class="content-text">
                
                <p><strong>CGST Act, 2017 - Section 44:</strong></p>
                <ul><li>Every registered person shall furnish annual return in GSTR-9 by 31 December. Maharashtra SGST Act mirrors.</li></ul>
                <p style="margin-top:16px;"><strong>Rule 80 - GSTR-9C:</strong></p>
                <ul><li>Turnover > Rs 5 crore: self-certified reconciliation with audited financials. Replaces CA certification from FY 2020-21.</li></ul>
                <p style="margin-top:16px;"><strong>Notifications:</strong></p>
                <ul><li>15/2025-CT: Exemption for turnover up to Rs 2 crore. 07/2023-CT: Tiered late fee from FY 2022-23.</li></ul>
                <p style="margin-top:16px;"><strong>Mumbai:</strong> 4 GST Commissionerate zones (East, West, Central, South). <strong>Portal:</strong> <a href="https://gst.gov.in" target="_blank" rel="noopener">gst.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">FAQs: GST Annual Returns in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about GST office, online filing, due dates, turnover thresholds, GSTR-9 vs 9C, late fees, revision, and CA certification for Mumbai taxpayers.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'GST Annual Returns in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles annual returns in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>GST annual returns are filed online on the GST portal gst.gov.in and processed by the GST Commissionerate having jurisdiction over the taxpayer principal place of business. Mumbai has four Commissionerate zones East West Central and South. The jurisdictional assignment is based on the registered address. Patron Accounting Marine Lines office handles GSTR-9 and GSTR-9C filing digitally for all Mumbai GSTINs regardless of zone.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can GSTR-9 be filed online from Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Yes GSTR-9 is filed exclusively online through the GST portal at gst.gov.in under Services then Returns then Annual Return. The portal auto-populates key tables from GSTR-1 GSTR-3B and GSTR-2B data. Filing is done using EVC for turnover up to Rs 5 crore or DSC mandatory for companies. No physical submission to any GST Commissionerate office is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the due date for GSTR-9 in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>The due date for GSTR-9 is 31 December of the financial year following the reporting year. For FY 2024-25 the due date is 31 December 2025. The government may extend this via notification. All monthly GSTR-1 and GSTR-3B returns for the year must be filed before GSTR-9 can be submitted on the portal.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is GSTR-9 mandatory for turnover below Rs 2 crore?</h3>
                        <div class="faq-expanded__a"><p>No. Taxpayers with aggregate turnover up to Rs 2 crore are exempt from filing GSTR-9. The return is deemed to have been furnished on the due date. This exemption has been consistently notified from FY 2017-18 through FY 2024-25. However voluntary filing is permitted for businesses wanting comprehensive compliance records.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the difference between GSTR-9 and GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>GSTR-9 is the annual return consolidating all monthly returns data for the financial year covering outward supplies inward supplies ITC and tax paid. GSTR-9C is the reconciliation statement matching GSTR-9 figures with audited financial statements. GSTR-9 mandatory for turnover above Rs 2 crore. GSTR-9C additionally required for turnover above Rs 5 crore and must be self-certified.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the late fee for GSTR-9 in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Late fee is tiered based on turnover: Rs 50 CGST plus Rs 50 SGST per day for turnover up to Rs 5 crore capped at 0.04 percent. Rs 100 plus 100 for Rs 5-20 crore capped at 0.04 percent. Rs 200 plus 200 for above Rs 20 crore capped at 0.25 percent. Tiered structure introduced via Notification No. 07/2023-CT dated 31 March 2023.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can GSTR-9 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>No. Once GSTR-9 is filed on the GST portal it cannot be revised. This is why thorough reconciliation before submission is critical. Any errors discovered after filing must be addressed in the next year GSTR-9 or through adjustments in subsequent monthly returns. Patron conducts multi-level review before final submission.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does GSTR-9C still require CA certification?</h3>
                        <div class="faq-expanded__a"><p>No. From FY 2020-21 onwards GSTR-9C is self-certified by the taxpayer. CA or CMA certification is no longer required. However the reconciliation must still be prepared accurately and the GST department can scrutinise self-certified GSTR-9C and issue demand notices for discrepancies. Involving CA in preparation is still advisable.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>GSTR-9 kab file karna hota hai?</strong> 31 December tak next FY mein. Pehle saare monthly GSTR-1 aur GSTR-3B file hone chahiye. Rs 2 crore se kam turnover pe exempt hai.</p>
                <p><strong>GSTR-9C kisko file karna padta hai?</strong> Rs 5 crore se zyada turnover pe. Self-certified reconciliation. Audited financials se match karna padta hai.</p>
                <p><strong>Late fee kitni hai?</strong> Turnover ke hisaab se Rs 100 se Rs 400 per day. Maximum 0.04% ya 0.25% of turnover.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File Before 31 December - Cannot Be Revised</h2>
            <div class="content-text">
                
                <p>GSTR-9 cannot be revised after filing. Late fee Rs 100-400/day accumulates from 1 January. Non-filing blocks pending ITC claims and triggers Section 73/74 demand proceedings. For Mumbai corporates at BKC and Nariman Point, filing errors in GSTR-9 trigger prolonged audit and assessment proceedings. Patron starts reconciliation in October and files with 2-week buffer.</p>
                <p style="margin-top:16px;"><strong>Get started - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GST%20annual%20return%20filing%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File GSTR-9/9C - Reconcile Right, File Once</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">GST annual return filing - GSTR-9 and GSTR-9C - is a critical year-end compliance for every Mumbai taxpayer with turnover above Rs 2 crore. Cannot be revised. Due 31 December. 4-way reconciliation essential.</p>
                <p style="color:rgba(255,255,255,0.9);">Mumbai's diverse base - BFSI at BKC, IT at Powai, manufacturing at Andheri MIDC, exports at SEEPZ - requires meticulous reconciliation across multiple GSTINs and all 4 Commissionerate zones.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron provides 4-way reconciliation, multi-GSTIN coordination, audit-integrated GSTR-9C, and portal filing with 2-week buffer. 10,000+ businesses, 4.9 rating, 15+ years, GST expertise since 2017.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20GSTR-9%20filing%20in%20Mumbai.%20Please%20help." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=GST%20Annual%20Returns%20Mumbai&body=Hello%20Patron%2C%0A%0AI%20need%20GSTR-9%20filing%20in%20Mumbai.%0A%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Annual Returns Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides GSTR-9 and GSTR-9C filing services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">GST annual returns and compliance</div>
                <div class="pa-city-grid">
                    <a href="/gst-annual-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/gst-annual-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/gst-annual-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Mumbai</div>
                <div class="pa-block-sub">GST and tax compliance</div>
                <div class="pa-cross-grid">
                    <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Monthly/Quarterly</div></div></a>
                    <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                    <a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/tax-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Tax Audit</div><div class="pa-card-sub">Section 44AB</div></div></a>
                    <a href="/accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers GST annual return filing in Mumbai. Content reviewed annually (Freshness Tier 1) as thresholds, due dates, and notifications change.</p>
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


<!-- Google Maps Places Library (for GMB reviews) -->


<!-- To find Place ID: https://developers.google.com/maps/documentation/places/web-service/place-id -->
<script>
(function() {
    // ============================================
    // CONFIGURATION - Update these values
    // ============================================
    const CONFIG = {
        googleApiKey: '{{ env("GOOGLE_PLACES_API_KEY") }}',    // Get from Google Cloud Console → APIs & Services → Credentials
        placeId: '{{ env("PATRON_GOOGLE_PLACE_ID") }}',               // Patron Accounting's Google Place ID
        // Fallback static reviews (shown if API fails or key not set)
        fallbackReviews: [
            {
                author_name: "Subhendu Mishra",
                profile_photo_url: "",
                rating: 5,
                text: "I've had an outstanding experience working with my CA - Patron Accounting. Their professionalism, attention to detail, and timely communication made the entire process seamless and stress-free.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Rajib Dutta",
                profile_photo_url: "",
                rating: 5,
                text: "I'm glad that I was able to connect with Patron. They took the minimum time to do the calculations based on the details provided by me and were really helpful throughout the process.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Nishikant Gurav",
                profile_photo_url: "",
                rating: 5,
                text: "Really a fantastic experience with Patron Accounting especially Shubham, he was extremely great. Knowledgeable person who deserves the 5 star for smooth handling of all documentation.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Nikhil Nimbhorkar",
                profile_photo_url: "",
                rating: 5,
                text: "Patron Accounting gives the best service related to all account handling of our firm. I am blessed and extremely happy that Patron Accounting assigned us a dedicated point of contact.",
                relative_time_description: "4 months ago"
            },
            {
                author_name: "Sameer Mehta",
                profile_photo_url: "",
                rating: 5,
                text: "I have called Patron to file ITR for my 5 family members. I worked with Shubham Junjunwala and Amin Jain. It was a smooth process. They understand basics very well and respond promptly.",
                relative_time_description: "2 months ago"
            },
            {
                author_name: "Preeti Singh Rathor",
                profile_photo_url: "",
                rating: 5,
                text: "From the very beginning, their approach has been highly professional, prompt, and solution-oriented. Every interaction reflected their deep knowledge and commitment to helping clients.",
                relative_time_description: "3 months ago"
            },
            {
                author_name: "Anita Gaur",
                profile_photo_url: "",
                rating: 5,
                text: "Very proficient and professional staff. Do fantastic job and instant response. Strongly recommended engaging them for all accounting needs specially for startups and growing businesses.",
                relative_time_description: "5 months ago"
            },
            {
                author_name: "Pankaj Arvikar",
                profile_photo_url: "",
                rating: 5,
                text: "I contacted them to file the ITR. Shubham was the POC for me and he was really very professional and giving prompt responses. Highly recommend them for tax and compliance work.",
                relative_time_description: "1 month ago"
            },
            {
                author_name: "Sunny Ashpal",
                profile_photo_url: "",
                rating: 5,
                text: "Excellent service for company registration and compliance. The team is very responsive and handles everything end to end. A trusted partner for Demandify Media.",
                relative_time_description: "6 months ago",
                role: "Director - Demandify Media",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/ffNmUX9RNpnwMXhlJcqIPwnE809y6lIMYuAOpQMf.mp4",
                photoUrl: "/storage/testimonials/jX6mNzoJrohODlJP7Uf7InnBws62qICwmNQG6Wkb.jpg"
            },
            {
                author_name: "Anjanay Srivastava",
                profile_photo_url: "",
                rating: 5,
                text: "Professional and timely service. Patron Accounting handled our company incorporation and compliance with great expertise. Highly recommended for startups.",
                relative_time_description: "4 months ago",
                role: "Founder - Hunarsource Consulting",
                hasVideo: true,
                videoUrl: "/storage/testimonials/videos/LjYtH6V1FWB71lWPo1MS77UCKxowr5l4fbsUGA0n.mp4",
                photoUrl: "/storage/testimonials/K0kApEkgICmMd1lTvTuCPehTlKsiCRso1ixvYPKg.jpg"
            }
        ]
    };

    // ============================================
    // HELPER: Generate star SVGs
    // ============================================
    function starsHTML(rating) {
        let s = '';
        for (let i = 0; i < 5; i++) {
            s += i < rating
                ? '<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>'
                : '<svg viewBox="0 0 24 24" style="opacity:0.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>';
        }
        return s;
    }

    // ============================================
    // HELPER: Avatar color based on name
    // ============================================
    const avatarColors = ['', 'blue', 'teal', 'purple'];
    function avatarClass(index) {
        return avatarColors[index % avatarColors.length];
    }

    // ============================================
    // RENDER: Build card HTML for a review
    // ============================================
    function buildVideoCard(review) {
        return `
        <div>
            <div class="testi-video-card">
                <div class="testi-video-area" onclick="toggleTestiVideo(this)">
                    <video preload="metadata" poster="${review.photoUrl || ''}">
                        <source src="${review.videoUrl}" type="video/mp4">
                    </video>
                    <div class="testi-play-overlay">
                        <div class="testi-play-btn">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                        </div>
                    </div>
                    <div class="testi-star-badge">${starsHTML(review.rating)}</div>
                </div>
                <div style="padding:16px;display:flex;align-items:center;gap:10px;flex:1;">
                    <div class="testi-avatar">
                        ${review.photoUrl ? `<img src="${review.photoUrl}" alt="${review.author_name}">` : review.author_name.charAt(0)}
                    </div>
                    <div>
                        <div class="testi-name">${review.author_name}</div>
                        ${review.role ? `<div class="testi-role">${review.role}</div>` : ''}
                    </div>
                </div>
            </div>
        </div>`;
    }

    function buildQuoteCard(review, index) {
        const hasPhoto = review.profile_photo_url && review.profile_photo_url !== '';
        const initial = review.author_name ? review.author_name.charAt(0).toUpperCase() : '?';
        const colorClass = avatarClass(index);

        return `
        <div>
            <div class="testi-quote-card">
                <div class="testi-quote-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                </div>
                <p class="testi-quote-text">${review.text || ''}</p>
                <div class="testi-footer">
                    <div class="testi-author">
                        <div class="testi-avatar ${colorClass}">
                            ${hasPhoto ? `<img src="${review.profile_photo_url}" alt="${review.author_name}">` : initial}
                        </div>
                        <div>
                            <div class="testi-name">${review.author_name}</div>
                            ${review.role ? `<div class="testi-role">${review.role}</div>` : (review.relative_time_description ? `<div class="testi-role">${review.relative_time_description}</div>` : '')}
                        </div>
                    </div>
                    <div class="testi-rating-row">
                        <div class="testi-stars">${starsHTML(review.rating)}</div>
                        <div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div>
                    </div>
                </div>
            </div>
        </div>`;
    }

    // ============================================
    // RENDER: Populate slider with reviews
    // ============================================
     function renderReviews(reviews) {
const slider = document.getElementById('testimonialSlider');
const loading = document.getElementById('testiLoading');

let html = '';

reviews.forEach(function(review, i) {
    if (review.hasVideo && review.videoUrl) {
        html += buildVideoCard(review);
    } else {
        html += buildQuoteCard(review, i);
    }
});

// If slider already initialized destroy first
if ($(slider).hasClass('slick-initialized')) {
    $(slider).slick('unslick');
}

slider.innerHTML = html;
slider.style.display = 'block';
if (loading) loading.style.display = 'none';

// Re-initialize slick
initSlick(slider);


}

    function initSlick(slider) {
        if ($(slider).hasClass('slick-initialized')) return;
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            cssEase: 'ease-in-out',
            pauseOnHover: true,
            pauseOnFocus: true,
            swipe: true,
            touchMove: true,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 900, settings: { slidesToShow: 2 } },
                { breakpoint: 600, settings: { slidesToShow: 1, autoplaySpeed: 3000 } }
            ]
        });
    }

    // ============================================
    // FETCH: Google Places API Reviews
    // ============================================
    function fetchGMBReviews() {
        // If API key not set, use fallback
        if (!CONFIG.googleApiKey || CONFIG.googleApiKey === '') {
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
            renderReviews(CONFIG.fallbackReviews);
            return;
        }

        // Google Places API requires server-side proxy due to CORS
        // Option 1: Use Google Maps JS API (requires loading Maps library)
        // Option 2: Use a server-side proxy endpoint
        // Below is the Google Maps JS API approach:

        const script = document.createElement('script');
        script.src = `https://maps.googleapis.com/maps/api/js?key=${CONFIG.googleApiKey}&libraries=places&callback=initGMBReviews`;
        script.async = true;
        script.defer = true;
        script.onerror = function() {
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
            renderReviews(CONFIG.fallbackReviews);
        };
        document.head.appendChild(script);
    }

    // Global callback for Google Maps JS API
    window.initGMBReviews = function() {
        try {
            const service = new google.maps.places.PlacesService(document.createElement('div'));
            service.getDetails({
                placeId: CONFIG.placeId,
                fields: ['name', 'rating', 'reviews', 'user_ratings_total']
            }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place.reviews && place.reviews.length > 0) {
                    console.log(`[Testimonials] Fetched ${place.reviews.length} GMB reviews for ${place.name} (${place.rating}★, ${place.user_ratings_total} total)`);

                    // Merge: video testimonials first, then GMB reviews
                    const videoTestimonials = CONFIG.fallbackReviews.filter(r => r.hasVideo);
                    const gmbReviews = place.reviews.map(function(r) {
                        return {
                            author_name: r.author_name,
                            profile_photo_url: r.profile_photo_url,
                            rating: r.rating,
                            text: r.text,
                            relative_time_description: r.relative_time_description
                        };
                    });

                    renderReviews([...videoTestimonials, ...gmbReviews]);
                } else {
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
                    renderReviews(CONFIG.fallbackReviews);
                }
            });
        } catch (e) {
            console.log('[Testimonials] Error:', e);
            renderReviews(CONFIG.fallbackReviews);
        }
    };

    // ============================================
    // INIT
    // ============================================
    document.addEventListener('DOMContentLoaded', function() {
        // Static cards already rendered - init Slick immediately
        const slider = document.getElementById('testimonialSlider');
        if (slider && slider.children.length > 0) {
            if (typeof $ !== 'undefined' && $.fn.slick) {
                initSlick(slider);
            } else {
                window.addEventListener('load', function() {
                    if (typeof $ !== 'undefined' && $.fn.slick) initSlick(slider);
                });
            }
        }
        fetchGMBReviews();
    });
})();

// Video play/pause toggle for testimonial cards
function toggleTestiVideo(area) {
    const video = area.querySelector('video');
    if (!video) return;
    if (video.paused) {
        // Pause all other videos first
        document.querySelectorAll('.testi-video-area video').forEach(function(v) { v.pause(); v.closest('.testi-video-area').classList.remove('playing'); });
        video.play();
        area.classList.add('playing');
    } else {
        video.pause();
        area.classList.remove('playing');
    }
}

</script>

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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
