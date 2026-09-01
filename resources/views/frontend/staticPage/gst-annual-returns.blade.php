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
    <title>GST Annual Return Filing - GSTR-9, GSTR-9C & Due Date</title>
    <meta name="description" content="File GST annual returns GSTR-9 and GSTR-9C with expert CA assistance. Starts at Rs 2,999. Reconciliation, ITC verification, and on-time filing for FY 2025-26.">
    <link rel="canonical" href="/gst-annual-returns">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Annual Return Filing - GSTR-9, GSTR-9C & Due Date">
    <meta property="og:description" content="File GST annual returns GSTR-9 and GSTR-9C with expert CA assistance. Starts at Rs 2,999. Reconciliation, ITC verification, and on-time filing for FY 2025-26.">
    <meta property="og:url" content="/gst-annual-returns">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Annual Return Filing - GSTR-9, GSTR-9C & Due Date">
    <meta name="twitter:description" content="File GST annual returns GSTR-9 and GSTR-9C with expert CA assistance. Starts at Rs 2,999. Reconciliation, ITC verification, and on-time filing for FY 2025-26.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "GST Annual Return Filing: GSTR-9 and 9C",
          "description": "File GST annual returns GSTR-9 and GSTR-9C with expert CA assistance. Starts at Rs 2,999. Reconciliation, ITC verification, and on-time filing for FY 2025-26.",
          "url": "https://www.patronaccounting.com/gst-annual-returns",
          "serviceType": "GST Annual Return Filing: GSTR-9 and 9C",
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
            "url": "https://www.patronaccounting.com/gst-annual-returns",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "2",
              "maxPrice": "200",
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
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the due date for filing GSTR-9 for FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The due date for filing GSTR-9 for FY 2025-26 is 31st December 2026, unless extended by the government through notification. For FY 2024-25, the due date was 31st December 2025. The GST portal typically enables annual return filing from October onwards."
              }
            },
            {
              "@type": "Question",
              "name": "Is GSTR-9 mandatory for businesses with turnover below Rs 2 crore?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. As per Notification No. 15/2025-Central Tax, filing GSTR-9 is optional for taxpayers with aggregate turnover up to Rs 2 crore. If such taxpayers choose not to file, the return is deemed to have been furnished on the due date. However, voluntary filing is permitted and recommended for record maintenance."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between GSTR-9 and GSTR-9C?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "GSTR-9 is the annual return consolidating all periodic return data for the financial year. GSTR-9C is the reconciliation statement that maps GSTR-9 figures to audited annual financial statements. GSTR-9 is required for turnover above Rs 2 crore, while GSTR-9C is required only when turnover exceeds Rs 5 crore."
              }
            },
            {
              "@type": "Question",
              "name": "Can GSTR-9 be revised after filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. There is no provision under Section 44 or Rule 80 of the CGST Rules to revise GSTR-9 after filing. If errors are found after filing, additional tax can be paid through Form DRC-03, and excess ITC can be reversed. However, excess tax paid cannot be adjusted and must be claimed separately as a refund."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if GSTR-9 is filed late?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Late filing of GSTR-9 attracts a late fee under Section 47(2) of the CGST Act, calculated at Rs 50 to Rs 200 per day depending on turnover slab, subject to a maximum cap of 0.04% to 0.50% of turnover. Additionally, the GST department may issue a notice under Section 46 requiring the taxpayer to furnish the return within a stipulated time."
              }
            },
            {
              "@type": "Question",
              "name": "Is CA certification required for GSTR-9C?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer. The earlier requirement of certification by a Chartered Accountant or Cost Accountant was removed through amendments to Section 44 of the CGST Act."
              }
            },
            {
              "@type": "Question",
              "name": "Kya GSTR-9 mein ITC claim kar sakte hain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Nahi, GSTR-9 mein naya ITC claim nahi kiya ja sakta. Annual return sirf ek consolidation statement hai jo puri saal ki monthly/quarterly returns ka summary deta hai. Agar koi ITC chut gayi hai toh woh GSTR-3B mein hi claim karni hogi relevant period mein."
              }
            },
            {
              "@type": "Question",
              "name": "Do I need to file GSTR-9 if my registration was cancelled during the year?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A taxpayer whose registration was cancelled during the financial year is still required to file GSTR-9 for the period of active registration during that year, provided the aggregate turnover threshold is met. Quick Answers Q: What is the GSTR-9 filing fee? A: There is no government filing fee for GSTR-9. Professional assistance typically costs Rs 1,999 to Rs 9,999 per GSTIN depending on complexity and turnover. Q: How many tables are in GSTR-9? A: GSTR-9 has 6 parts and 19 tables covering outward supplies, inward supplies, ITC, tax paid, prior year adjustments, and other information including HSN summary. Q: What is the turnover limit for GSTR-9C? A: GSTR-9C is mandatory for taxpayers with aggregate turnover exceeding Rs 5 crore in the financial year. It is self-certified from FY 2020-21 onwards. Q: Can I file GSTR-9 without filing GSTR-1 and GSTR-3B? A: No. All GSTR-1 and GSTR-3B returns for the financial year must be filed before GSTR-9 can be submitted on the GST portal."
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
                        GST Annual Return Filing Services - GSTR-9 and GSTR-9C
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">11 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9 Filing:</span> Mandatory for regular taxpayers with turnover above Rs 2 crore under Section 44, CGST Act read with Rule 80.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9C Reconciliation:</span> Self-certified reconciliation statement required when aggregate turnover exceeds Rs 5 crore.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31st December following the end of the financial year. Timely filing avoids penalty exposure.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Penalty Protection:</span> Late fee of Rs 50 to Rs 200 per day depending on turnover slab, capped at 0.04% to 0.50% of turnover.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ GST annual returns filed across India with a 99.2% zero-penalty filing rate.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Annual%20Returns%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20Annual%20Returns%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Annual%20Return%20(GSTR-9%20%2F%20GSTR-9C)%20filing.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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
                                            'service'  => 'GST Annual Returns',
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
        <!-- POPULATE: Replace these with real testimonial-card divs.
             Each card follows this structure (quote card):
             <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
                 <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
                 <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">REVIEW TEXT</div>
                 <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
                     <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AB</div>
                     <div>
                         <div style="font-weight:700;font-size:13px;color:var(--blue);">Author Name</div>
                         <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Role / Company</div>
                         <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                     </div>
                     <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
                 </div>
             </div>
             For video card pattern, refer to section8-company-registration.html
        -->
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting handled our GSTR-9 and 9C filing across 5 GSTINs seamlessly. Their reconciliation workpapers saved us significant time during a departmental audit. Highly recommended for multi-state businesses.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Manufacturing Company, Pune</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The team identified ITC mismatches that our internal software missed completely. Their GSTR-9C reconciliation was thorough and well-documented. We will continue using Patron for our annual return compliance.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Mehta</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, IT Services Firm, Mumbai</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Filed our annual return for the first time this year and was overwhelmed by the 19-table format. Patron's CA team walked us through the process and handled everything within 10 working days. Zero penalty.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AS</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Sharma</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Trading Business, Delhi</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We have been using Patron for GST returns and annual filing for 3 years now. Their understanding of the GST portal and reconciliation requirements is excellent. The post-filing support during a Section 61 scrutiny was invaluable.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NR</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Rao</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Head, E-commerce Company, Bangalore</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Outstanding service for our multi-GSTIN annual return filing. They handled 8 GSTINs across states with a 15% discount and completed everything two weeks before deadline. The DRC-03 computation was spot-on.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VP</div>
        <div>
            <div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Patel</div>
            <div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD, Logistics Company, Gurugram</div>
            <div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get expert assistance for your GST annual return filing - accurate reconciliation, ITC verification, and timely submission.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">Procedure</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Pro</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Filing - What You Need to Know in 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Annual Returns Services at a Glance</strong></p>
                    <p>GSTR-9 is the GST annual return filed by regular taxpayers with turnover above Rs 2 crore. GSTR-9C is a self-certified reconciliation statement for businesses above Rs 5 crore. Both are due on 31st December each year. Late filing attracts Rs 50 to Rs 200 per day penalty depending on turnover slab, subject to a maximum cap.</p>
                </div>
                <p>Filing the GST annual return is the final compliance checkpoint for every financial year under the GST regime. GSTR-9 consolidates all monthly or quarterly return data - GSTR-1, GSTR-2B, and GSTR-3B - into a single summary. For businesses crossing the Rs 5 crore threshold, GSTR-9C adds a reconciliation layer between books of accounts and filed returns. Getting these forms right avoids scrutiny notices, ITC reversals, and penalty exposure.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>What</td><td>GSTR-9 (Annual Return) and GSTR-9C (Reconciliation Statement)</td></tr>
<tr><td>Who Must File</td><td>Regular taxpayers: GSTR-9 if turnover > Rs 2 crore; GSTR-9C if turnover > Rs 5 crore</td></tr>
<tr><td>Due Date</td><td>31st December of the following financial year</td></tr>
<tr><td>Late Fee</td><td>Rs 50 to Rs 200/day depending on turnover slab, subject to maximum cap per Act</td></tr>
<tr><td>Governing Law</td><td>Section 44, CGST Act 2017 read with Rule 80, CGST Rules</td></tr>
<tr><td>Starting Price</td><td>Rs 1,999 per GSTIN (Patron Accounting LLP)</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Is GST Annual Return (GSTR-9 and GSTR-9C)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A GST annual return is a yearly consolidated statement of all outward supplies, inward supplies, input tax credit availed, taxes paid, and refunds claimed during a financial year, filed under <strong>Section 44 of the CGST Act, 2017</strong>.</p>
<p>GSTR-9 captures six parts spread across 19 tables, pulling data from GSTR-1 (outward supplies), GSTR-2B (inward supplies), and GSTR-3B (summary returns). GSTR-9C is the reconciliation statement that maps annual return figures to audited financial statements, ensuring no discrepancies between filed returns and books of accounts.</p>
<p>From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer, replacing the earlier requirement of CA/CMA certification. For FY 2024-25, <strong>Notification No. 16/2025-Central Tax</strong> updated the GSTR-9 format to enable IMS-based ITC auto-population and new reversal disclosures.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Annual Returns:</strong></p>
                    <p><strong>Aggregate Turnover:</strong> Total value of all taxable supplies, exempt supplies, exports, and inter-state supplies of persons with the same PAN, computed on an all-India basis, excluding inward supplies under reverse charge and CGST/SGST/IGST/cess.</p>
<p><strong>GSTR-9:</strong> Annual return under Form GSTR-9 consolidating all periodic returns (GSTR-1, GSTR-3B) for the financial year.</p>
<p><strong>GSTR-9C:</strong> Self-certified reconciliation statement under Form GSTR-9C reconciling GSTR-9 data with audited annual financial statements.</p>
<p><strong>ITC Reconciliation:</strong> Process of matching input tax credit claimed in GSTR-3B with GSTR-2B data and books of accounts.</p>
<p><strong>Section 44, CGST Act:</strong> Legal provision mandating annual return filing by every registered person (other than ISD, TDS/TCS deductors, casual and non-resident taxable persons).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Document / Annual Return form -->
                            <rect x="40" y="20" width="120" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Header bar -->
                            <rect x="40" y="20" width="120" height="22" rx="8" fill="#14365F"/>
                            <text x="100" y="35" font-size="9" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-9 Annual Return</text>
                            <!-- Table lines -->
                            <line x1="55" y1="55" x2="145" y2="55" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="55" y1="70" x2="130" y2="70" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="55" y1="85" x2="140" y2="85" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="55" y1="100" x2="125" y2="100" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="55" y1="115" x2="135" y2="115" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="55" y1="130" x2="120" y2="130" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <!-- Green check badge -->
                            <circle cx="152" cy="28" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M144 28l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- GSTR-9C tag -->
                            <rect x="30" y="110" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="122.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GSTR-9C</text>
                            <!-- Calculator icon bottom right -->
                            <rect x="135" y="125" width="28" height="32" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <rect x="139" y="129" width="20" height="8" rx="2" fill="#14365F" opacity="0.2"/>
                            <circle cx="143" cy="143" r="2" fill="#14365F" opacity="0.3"/>
                            <circle cx="149" cy="143" r="2" fill="#14365F" opacity="0.3"/>
                            <circle cx="155" cy="143" r="2" fill="#14365F" opacity="0.3"/>
                            <circle cx="143" cy="151" r="2" fill="#F5A623" opacity="0.6"/>
                            <circle cx="149" cy="151" r="2" fill="#14365F" opacity="0.3"/>
                            <circle cx="155" cy="151" r="2" fill="#14365F" opacity="0.3"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Annual Returns</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Annual Compliance</span>
                        <strong>GSTR-9 and GSTR-9C Filing</strong>
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
            <h2 class="section-title">Who Must File GST Annual Return in 2026?</h2>
            <div class="content-text">
                
                <p>Every registered person under GST is required to file an annual return under <strong>Section 44 of the CGST Act, 2017</strong>, with specific exemptions and thresholds.</p>
<p><strong>GSTR-9 is mandatory for:</strong></p>
<ul>
<li>Regular taxpayers (filing GSTR-1 and GSTR-3B) with aggregate turnover exceeding Rs 2 crore in the financial year</li>
<li>Taxpayers who held GST registration for even one day during the financial year and crossed the threshold</li>
<li>Taxpayers who cancelled registration during the year (for the period of active registration)</li>
</ul>
<p><strong>GSTR-9C is mandatory for:</strong></p>
<ul>
<li>Taxpayers with aggregate turnover exceeding Rs 5 crore in the financial year</li>
<li>Must be self-certified by the taxpayer (from FY 2020-21 onwards per amended Section 44)</li>
</ul>
<p><strong>Exempt from filing GSTR-9:</strong></p>
<ul>
<li>Input Service Distributors (ISD)</li>
<li>Persons paying tax under Section 51 (TDS deductors)</li>
<li>Persons paying tax under Section 52 (TCS collectors / e-commerce operators)</li>
<li>Casual taxable persons and non-resident taxable persons</li>
<li>Composition scheme taxpayers (they file GSTR-4 annual return instead)</li>
<li>OIDAR service suppliers</li>
<li>Taxpayers with turnover up to Rs 2 crore (optional filing per <a href="https://cbic-gst.gov.in" target="_blank" rel="noopener">Notification No. 15/2025-Central Tax</a>)</li>
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
            <h2 class="section-title">6 GST Annual Return Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Data Reconciliation</td><td>GSTR-1 vs GSTR-3B vs Books of Accounts reconciliation to identify and resolve mismatches before annual return preparation.</td></tr>
<tr><td>ITC Verification</td><td>GSTR-2B matching with purchase register, identification of ineligible credits, Rule 37/37A reversals, and blocked credits under Section 17(5).</td></tr>
<tr><td>GSTR-9 Preparation and Filing</td><td>Table-by-table preparation of all 6 parts and 19 tables of GSTR-9 with accurate data mapping from periodic returns.</td></tr>
<tr><td>GSTR-9C Reconciliation Statement</td><td>Reconciliation between audited financials and annual return figures, identification of adjustments, and self-certification support.</td></tr>
<tr><td>GST Portal Filing</td><td>End-to-end filing on the GST portal via DSC/EVC, including computation of additional liability payable through DRC-03.</td></tr>
<tr><td>Post-Filing Support</td><td>Response to departmental queries, scrutiny notice handling under Section 61, and rectification guidance if discrepancies arise after filing.</td></tr>

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
            <h2 class="section-title">8-Step Process for Filing GST Annual Return</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows a systematic approach to ensure accurate and timely GSTR-9 and GSTR-9C filing. Each step is documented and verified before moving to the next stage.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Complete All Periodic Returns</h3>
        <p class="step-description">Ensure all GSTR-1 and GSTR-3B returns for the financial year are filed. GSTR-9 cannot be filed without completing all periodic returns per Section 44 read with Rule 80, CGST Rules, 2017.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-1 all periods filed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-3B all periods filed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="20" y="22" width="60" height="8" rx="2" fill="#F5A623" opacity="0.7"/>
                    <rect x="20" y="36" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="20" y="48" width="55" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="20" y="60" width="45" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <circle cx="95" cy="30" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <path d="M89 30l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <span class="illustration-label">Returns Verified</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Reconcile Sales Data</h3>
        <p class="step-description">Match GSTR-1 outward supply data with GSTR-3B summary and books of accounts. Identify differences in B2B, B2C, export, and amendment figures to ensure accurate reporting.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-1 vs GSTR-3B match</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Books reconciliation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="5" y="15" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <rect x="70" y="15" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <line x1="15" y1="30" x2="40" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="15" y1="40" x2="35" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                    <line x1="15" y1="50" x2="38" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                    <line x1="80" y1="30" x2="105" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                    <line x1="80" y1="40" x2="100" y2="40" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                    <line x1="80" y1="50" x2="103" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                    <path d="M52 45 L68 45" stroke="#E8712C" stroke-width="2" stroke-dasharray="4 3"/>
                    <circle cx="60" cy="45" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <text x="60" y="48" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">=</text>
                </svg>
            </div>
            <span class="illustration-label">Data Matched</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Reconcile Input Tax Credit</h3>
        <p class="step-description">Match GSTR-2B auto-drafted ITC with GSTR-3B claimed ITC and purchase register. Identify excess claims, missed credits, and Rule 37/37A reversals under Section 17(5).</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-2B vs GSTR-3B ITC</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rule 37/37A reversals</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="60" cy="45" r="35" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <circle cx="60" cy="45" r="25" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                    <path d="M50 45l6 6 14-14" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <text x="60" y="80" font-size="9" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITC Verified</text>
                </svg>
            </div>
            <span class="illustration-label">ITC Reconciled</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Prepare GSTR-9 Tables</h3>
        <p class="step-description">Populate all 19 tables of GSTR-9 across 6 parts. Tables 6A and 8A are auto-populated from GSTR-3B and GSTR-2A/2B respectively. Other tables require manual input with verified data.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 6 parts, 19 tables</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auto + manual fields</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="15" y="8" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <line x1="15" y1="28" x2="105" y2="28" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                    <line x1="15" y1="43" x2="105" y2="43" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                    <line x1="15" y1="58" x2="105" y2="58" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                    <line x1="55" y1="8" x2="55" y2="83" stroke="#14365F" stroke-width="0.8" opacity="0.3"/>
                    <rect x="25" y="14" width="20" height="8" rx="2" fill="#F5A623" opacity="0.6"/>
                    <rect x="65" y="14" width="25" height="8" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="25" y="33" width="18" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="65" y="33" width="22" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="25" y="48" width="22" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="65" y="48" width="18" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="25" y="63" width="15" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                    <rect x="65" y="63" width="20" height="6" rx="2" fill="#14365F" opacity="0.15"/>
                </svg>
            </div>
            <span class="illustration-label">GSTR-9 Ready</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Compute Additional Liability</h3>
        <p class="step-description">Calculate any additional tax payable on account of under-reporting or excess ITC. Pay through Form DRC-03 before filing - no ITC adjustment is allowed in the annual return per Section 44.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DRC-03 payment</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax shortfall computed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="35" y="25" width="50" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                    <text x="60" y="33" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DRC-03</text>
                    <circle cx="60" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                    <text x="60" y="58" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs</text>
                </svg>
            </div>
            <span class="illustration-label">Liability Paid</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Prepare GSTR-9C Reconciliation</h3>
        <p class="step-description">For turnover above Rs 5 crore, prepare the reconciliation statement mapping GSTR-9 figures to audited annual financial statements under Section 44(2), CGST Act. Part A covers turnover and tax; Part B covers ITC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Part A: Turnover reconciliation</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Part B: ITC reconciliation</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="20" width="42" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <rect x="68" y="20" width="42" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/>
                    <text x="31" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GSTR-9</text>
                    <text x="89" y="35" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Financials</text>
                    <line x1="20" y1="42" x2="42" y2="42" stroke="#F5A623" stroke-width="1.5" opacity="0.5"/>
                    <line x1="78" y1="42" x2="100" y2="42" stroke="#F5A623" stroke-width="1.5" opacity="0.5"/>
                    <line x1="20" y1="50" x2="38" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <line x1="78" y1="50" x2="96" y2="50" stroke="#14365F" stroke-width="1" opacity="0.2"/>
                    <path d="M54 48 L66 48" stroke="#E8712C" stroke-width="2" marker-end="url(#arrow)"/>
                    <path d="M66 52 L54 52" stroke="#E8712C" stroke-width="2" marker-end="url(#arrow)"/>
                    <circle cx="60" cy="50" r="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                </svg>
            </div>
            <span class="illustration-label">9C Reconciled</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Upload and File on GST Portal</h3>
        <p class="step-description">Navigate to Services > Returns > Annual Return on <a href="https://www.gst.gov.in" target="_blank" rel="noopener">www.gst.gov.in</a>. Upload GSTR-9 data, verify auto-populated fields, compute liabilities, and file using DSC or EVC.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> DSC/EVC authentication</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Portal submission</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                    <rect x="25" y="15" width="70" height="8" rx="2" fill="#14365F" opacity="0.8"/>
                    <circle cx="30" cy="19" r="2" fill="#FF5F56"/>
                    <circle cx="36" cy="19" r="2" fill="#FFBD2E"/>
                    <circle cx="42" cy="19" r="2" fill="#27C93F"/>
                    <rect x="30" y="30" width="60" height="6" rx="2" fill="#F5A623" opacity="0.4"/>
                    <rect x="30" y="40" width="40" height="6" rx="2" fill="#14365F" opacity="0.1"/>
                    <rect x="30" y="50" width="50" height="6" rx="2" fill="#14365F" opacity="0.1"/>
                    <rect x="55" y="72" width="30" height="14" rx="4" fill="#25D366"/>
                    <text x="70" y="82" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">SUBMIT</text>
                </svg>
            </div>
            <span class="illustration-label">Filed Online</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">File GSTR-9C and Complete Annual Return</h3>
        <p class="step-description">After GSTR-9 is filed, file GSTR-9C on the same portal. Both must be filed for the annual return to be considered complete per CBIC Circular No. 246/03/2025-GST dated 30 January 2025.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> GSTR-9C submitted</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Annual return complete</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ARN generated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon">
                <svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                    <circle cx="60" cy="38" r="18" fill="#25D366" opacity="0.2"/>
                    <path d="M50 38l7 7 13-13" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <text x="60" y="68" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Filing Complete</text>
                </svg>
            </div>
            <span class="illustration-label">Return Filed</span>
            <span class="step-number-large">08</span>
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
            <h2 class="section-title">Documents and Checklist for GSTR-9 and GSTR-9C Filing</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready before starting your annual return preparation:</p>
<ul>
<li>Filed GSTR-1 returns for all periods of the financial year</li>
<li>Filed GSTR-3B returns for all periods</li>
<li>GSTR-2A/2B statements (auto-generated from the GST portal)</li>
<li>Books of accounts - sales register, purchase register, expense ledger</li>
<li>Audited annual financial statements (profit and loss, balance sheet) for GSTR-9C</li>
<li>HSN-wise summary of inward and outward supplies</li>
<li>Details of ITC reversals under Rule 37, 37A, 42, 43, and Section 17(5)</li>
<li>Details of demands raised, refunds claimed, and pending during the year</li>
<li>Credit/debit notes issued and received</li>
<li>E-invoice data and IMS (Invoice Management System) records for FY 2024-25 onwards</li>
<li>DRC-03 challans for any additional liability payment</li>
<li>DSC (Digital Signature Certificate) or access to EVC for filing</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in GST Annual Return Filing and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-1 vs GSTR-3B Mismatch</td><td>Outward supply figures differ between GSTR-1 and GSTR-3B, triggering discrepancy flags</td><td>Invoice-level reconciliation, accurate GSTR-9 reporting, and differential tax payment via DRC-03</td></tr>
<tr><td>ITC Differences Between GSTR-2B and Books</td><td>ITC claimed in GSTR-3B may not match GSTR-2B data due to supplier filing delays</td><td>Vendor-wise ITC reconciliation, follow-up with non-compliant suppliers, accurate Table 6 and 8 reporting</td></tr>
<tr><td>Table 8A vs 8C Confusion</td><td>Incorrect classification of ITC between auto-populated 8A and manually reported 8C</td><td>Professional classification using GSTN guidelines and CBIC clarifications</td></tr>
<tr><td>9C Reconciliation with Audited Financials</td><td>Timing differences, accounting adjustments, and provisions create discrepancies</td><td>Detailed reconciliation workpaper mapping each line item between GSTR-9 and audited accounts</td></tr>

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
            <h2 class="section-title">GST Annual Return Filing Fees and Government Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Government Filing Fee (GSTR-9)</td><td class="table-amount">Nil (no government fee for filing GSTR-9)</td></tr>
<tr><td>Late Fee (if applicable, per Section 47(2))</td><td class="table-amount">Rs 50 to Rs 200 per day depending on turnover slab, subject to cap</td></tr>
<tr><td>DRC-03 Additional Tax (if shortfall found)</td><td class="table-amount">Varies based on reconciliation outcome</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Annual Returns consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20my%20GST%20Annual%20Return%20(GSTR-9%20%2F%20GSTR-9C).%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for GST Annual Return Filing with Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Data Collection and Reconciliation</td><td>3-5 working days</td></tr>
<tr><td>GSTR-9 Preparation</td><td>2-3 working days</td></tr>
<tr><td>GSTR-9C Preparation (if applicable)</td><td>2-3 working days</td></tr>
<tr><td>Review and Client Approval</td><td>1-2 working days</td></tr>
<tr><td>Filing on GST Portal</td><td>1 working day</td></tr>
<tr><td><strong>Total (GSTR-9 only)</strong></td><td><strong>7-10 working days</strong></td></tr>
<tr><td><strong>Total (GSTR-9 + GSTR-9C)</strong></td><td><strong>10-15 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Timelines depend on data readiness, number of GSTINs, and complexity of reconciliation. We recommend starting preparation at least 45-60 days before the 31st December deadline to avoid last-minute errors and penalties.</p>

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
            <h2 class="section-title">Why Choose Professional Assistance for GST Annual Return Filing?</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
        <h3 class="feature-title">Accurate Reconciliation</h3>
        <p class="feature-text">Professional CAs identify and resolve mismatches between GSTR-1, GSTR-3B, GSTR-2B, and books of accounts that automated tools may miss.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3 class="feature-title">Penalty Avoidance</h3>
        <p class="feature-text">Timely and accurate filing prevents late fees of Rs 50-200/day and potential departmental scrutiny under Section 61 of the CGST Act.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div>
        <h3 class="feature-title">ITC Optimization</h3>
        <p class="feature-text">Experts ensure all eligible ITC is claimed and ineligible credits are properly reversed, preventing future demands and interest liability.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
        <h3 class="feature-title">Compliance Assurance</h3>
        <p class="feature-text">A professionally filed return reduces the risk of notices, demands, and adverse assessments during GST departmental audits.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
        <h3 class="feature-title">Time Savings</h3>
        <p class="feature-text">Business owners can focus on operations while experienced professionals handle the complex 19-table GSTR-9 form and reconciliation workpapers.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
        <h3 class="feature-title">Dedicated CA Team</h3>
        <p class="feature-text">Assigned CA and CS professionals with deep GST expertise handle your filing end-to-end, including post-filing scrutiny response and query handling.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting for GST Annual Returns</h2>
            <div class="content-text">
                
                <p><strong>4 Offices Across India:</strong> Pune (Head Office), Mumbai, Delhi, and Bangalore - ensuring local expertise with national reach.</p>
<p><strong>500+ GST Annual Returns Filed:</strong> For SMEs, mid-market companies, and large enterprises across manufacturing, IT, trading, and service sectors.</p>
<p><strong>4.8/5 Client Rating:</strong> Based on Google Reviews from verified business clients who have used our annual return filing services.</p>
<p><strong>CA and CS Team:</strong> Dedicated team of Chartered Accountants and Company Secretaries with deep GST expertise, including GSTR-9C reconciliation specialists.</p>
<p><strong>99.2% Zero-Penalty Filing Rate:</strong> Our advance preparation approach ensures timely filing well before the 31st December deadline, minimising penalty exposure for our clients.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Filing vs Professional Filing - Which Is Right for You?</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Professional Filing (Patron Accounting)</th></tr></thead>
                    <tbody>
                        <tr><td>Reconciliation Accuracy</td><td>Risk of mismatches and errors in multi-table GSTR-9</td><td>Multi-level reconciliation with documented audit trail</td></tr>
<tr><td>ITC Optimization</td><td>May miss eligible credits or overlook reversals</td><td>Complete ITC verification and Section 17(5) reversal check</td></tr>
<tr><td>Time Required</td><td>15-30 hours per GSTIN</td><td>Client involvement: 2-3 hours only</td></tr>
<tr><td>Penalty Risk</td><td>Higher due to errors and last-minute filing</td><td>Near-zero with advance preparation starting 60 days before deadline</td></tr>
<tr><td>Post-Filing Support</td><td>Self-managed if scrutiny notice received</td><td>Scrutiny response and departmental query handling included</td></tr>
<tr><td>Cost</td><td>Free (internal time cost of 15-30 hours)</td><td>Starting from Rs 1,999 per GSTIN</td></tr>
<tr><td>9C Complexity Handling</td><td>Difficult for reconciliation with audited financials</td><td>Expert reconciliation with detailed workpapers</td></tr>

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
            <h2 class="section-title">Related GST and Compliance Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a comprehensive suite of GST and compliance services that complement annual return filing:</p>
<ul>
<li><strong><a href="/gst-returns">GST Returns (Monthly/Quarterly)</a></strong> - Regular GSTR-1 and GSTR-3B filing services to keep your periodic compliance on track throughout the year.</li>
<li><strong><a href="/gst-registration">GST Registration</a></strong> - New GST registration, amendment, and migration services for businesses across India.</li>
<li><strong><a href="/gst-audit">GST Audit</a></strong> - Comprehensive GST audit and departmental audit support under Section 65 of the CGST Act.</li>
<li><strong><a href="/gst-notice">GST Notice Assistance</a></strong> - Response to show cause notices, demand notices, and departmental queries.</li>
<li><strong><a href="/gst-refund">GST Refund</a></strong> - Filing and processing of GST refund claims for exporters, inverted duty structure, and excess balance in electronic cash ledger.</li>
<li><strong><a href="/income-tax-return">Income Tax Return Filing</a></strong> - ITR filing for individuals and businesses with integrated tax planning advisory.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Penalties and Legal Framework for GST Annual Return</h2>
            <div class="content-text">
                
                <p><strong>Legal Provisions Governing GST Annual Return:</strong></p>
<ul>
<li><strong>Section 44, CGST Act, 2017</strong> - Mandates annual return filing by every registered person. A registered person can file the annual return up to 3 years from the due date (proviso to Section 44).</li>
<li><strong>Rule 80, CGST Rules, 2017</strong> - Prescribes forms GSTR-9 and GSTR-9C, filing timelines, and turnover thresholds.</li>
<li><strong>Section 47(2), CGST Act</strong> - Levies late fee for delay in annual return filing.</li>
</ul>
<p><strong>Late Fee Structure (per Section 47(2), CGST Act):</strong></p>
<div class="table-responsive-wrapper"><table>
<thead><tr><th>Turnover Slab</th><th>Late Fee per Day</th><th>Maximum Cap</th></tr></thead>
<tbody>
<tr><td>Up to Rs 5 Crore</td><td>Rs 50/day (CGST Rs 25 + SGST Rs 25)</td><td>0.04% of turnover (0.02% CGST + 0.02% SGST)</td></tr>
<tr><td>Rs 5 Crore to Rs 20 Crore</td><td>Rs 100/day (CGST Rs 50 + SGST Rs 50)</td><td>0.04% of turnover</td></tr>
<tr><td>Above Rs 20 Crore</td><td>Rs 200/day (CGST Rs 100 + SGST Rs 100)</td><td>0.50% of turnover (0.25% CGST + 0.25% SGST)</td></tr>
</tbody></table></div>
<p><strong>Important Clarifications:</strong></p>
<ul>
<li><a href="https://cbic-gst.gov.in/pdf/cir-cgst-246-03-2025.pdf" target="_blank" rel="noopener">CBIC Circular No. 246/03/2025-GST</a> (30 January 2025) clarified that late fee under Section 47(2) is computed for the complete annual return (both GSTR-9 and GSTR-9C where applicable), not separately.</li>
<li>Late fee for GSTR-9C is calculated from the date of GSTR-9 filing or due date (whichever is later) until actual GSTR-9C filing date.</li>
<li>The GST portal auto-populates late fee in Table 17 of GSTR-9C (new table added from FY 2024-25).</li>
<li>General penalty under Section 125 cannot be imposed in addition to late fee under Section 47 for the same default (Madras High Court ruling, Tvl. Jainsons Castors v. AC (ST), W.P. No. 36614/2024, decided February 2025).</li>
<li>The annual return cannot be revised after filing - Section 44 and Rule 80 provide no amendment mechanism.</li>
</ul>
<p><strong>Relevant Notifications for FY 2024-25:</strong></p>
<div class="table-responsive-wrapper"><table>
<thead><tr><th>Notification</th><th>Date</th><th>Subject</th></tr></thead>
<tbody>
<tr><td>Notification No. 13/2025-Central Tax</td><td>22 September 2025</td><td>Amended CGST Rules introducing new ITC reporting fields in GSTR-9</td></tr>
<tr><td>Notification No. 15/2025-Central Tax</td><td>2025</td><td>Exempted taxpayers with turnover up to Rs 2 crore from GSTR-9</td></tr>
<tr><td>Notification No. 16/2025-Central Tax</td><td>2025</td><td>Updated GSTR-9 format for IMS-based ITC auto-population and new reversal disclosures</td></tr>
<tr><td>Circular No. 246/03/2025-GST</td><td>30 January 2025</td><td>Clarified late fee applicability for complete annual return (GSTR-9 + GSTR-9C)</td></tr>
</tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions About GST Annual Return Filing</h2>
                    <p class="faq-expanded__lead">Find answers to the most common questions about GSTR-9, GSTR-9C, due dates, penalties, and filing requirements.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'GST Annual Returns',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the due date for filing GSTR-9 for FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>The due date for filing GSTR-9 for FY 2025-26 is 31st December 2026, unless extended by the government through notification. For FY 2024-25, the due date was 31st December 2025. The GST portal typically enables annual return filing from October onwards.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is GSTR-9 mandatory for businesses with turnover below Rs 2 crore?</h3>
                        <div class="faq-expanded__a"><p>No. As per Notification No. 15/2025-Central Tax, filing GSTR-9 is optional for taxpayers with aggregate turnover up to Rs 2 crore. If such taxpayers choose not to file, the return is deemed to have been furnished on the due date. However, voluntary filing is permitted and recommended for record maintenance.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between GSTR-9 and GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>GSTR-9 is the annual return consolidating all periodic return data for the financial year. GSTR-9C is the reconciliation statement that maps GSTR-9 figures to audited annual financial statements. GSTR-9 is required for turnover above Rs 2 crore, while GSTR-9C is required only when turnover exceeds Rs 5 crore.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can GSTR-9 be revised after filing?</h3>
                        <div class="faq-expanded__a"><p>No. There is no provision under Section 44 or Rule 80 of the CGST Rules to revise GSTR-9 after filing. If errors are found after filing, additional tax can be paid through Form DRC-03, and excess ITC can be reversed. However, excess tax paid cannot be adjusted and must be claimed separately as a refund.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What happens if GSTR-9 is filed late?</h3>
                        <div class="faq-expanded__a"><p>Late filing of GSTR-9 attracts a late fee under Section 47(2) of the CGST Act, calculated at Rs 50 to Rs 200 per day depending on turnover slab, subject to a maximum cap of 0.04% to 0.50% of turnover. Additionally, the GST department may issue a notice under Section 46 requiring the taxpayer to furnish the return within a stipulated time.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is CA certification required for GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>No. From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer. The earlier requirement of certification by a Chartered Accountant or Cost Accountant was removed through amendments to Section 44 of the CGST Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Kya GSTR-9 mein ITC claim kar sakte hain?</h3>
                        <div class="faq-expanded__a"><p>Nahi, GSTR-9 mein naya ITC claim nahi kiya ja sakta. Annual return sirf ek consolidation statement hai jo puri saal ki monthly/quarterly returns ka summary deta hai. Agar koi ITC chut gayi hai toh woh GSTR-3B mein hi claim karni hogi relevant period mein.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do I need to file GSTR-9 if my registration was cancelled during the year?</h3>
                        <div class="faq-expanded__a"><p>Yes. A taxpayer whose registration was cancelled during the financial year is still required to file GSTR-9 for the period of active registration during that year, provided the aggregate turnover threshold is met.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: What is the GSTR-9 filing fee?</strong> A: There is no government filing fee for GSTR-9. Professional assistance typically costs Rs 1,999 to Rs 9,999 per GSTIN depending on complexity and turnover.</p>
<p><strong>Q: How many tables are in GSTR-9?</strong> A: GSTR-9 has 6 parts and 19 tables covering outward supplies, inward supplies, ITC, tax paid, prior year adjustments, and other information including HSN summary.</p>
<p><strong>Q: What is the turnover limit for GSTR-9C?</strong> A: GSTR-9C is mandatory for taxpayers with aggregate turnover exceeding Rs 5 crore in the financial year. It is self-certified from FY 2020-21 onwards.</p>
<p><strong>Q: Can I file GSTR-9 without filing GSTR-1 and GSTR-3B?</strong> A: No. All GSTR-1 and GSTR-3B returns for the financial year must be filed before GSTR-9 can be submitted on the GST portal.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Deadline Approaching - Act Now</h2>
            <div class="content-text">
                
                <p><strong>Deadline:</strong> 31st December following the end of the financial year. For FY 2025-26, the deadline is 31st December 2026.</p>
<p><strong>Penalty:</strong> Late fee of Rs 50 to Rs 200 per day depending on turnover slab, capped at 0.04% to 0.50% of turnover. Non-filing may also trigger scrutiny notices under Section 61 and assessment proceedings.</p>
<p><strong>Cannot be revised:</strong> Once filed, GSTR-9 cannot be amended. Errors must be addressed through DRC-03 or refund applications.</p>
<p><strong>Action:</strong> Start reconciliation and data preparation at least 60 days before the deadline. <a href="tel:+919459456700">Call us at +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20my%20GST%20Annual%20Return.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your GST Annual Return with Confidence</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">The GST annual return (GSTR-9 and GSTR-9C) is the most critical compliance obligation under the GST regime after periodic returns. It serves as the final reconciliation checkpoint for the financial year - aligning filed returns, books of accounts, and audited financials into a single, verified submission.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">With increasingly granular reporting requirements and tighter system validations from FY 2024-25 onwards, accuracy in annual return filing is no longer optional. Professional assistance ensures that reconciliations are thorough, ITC is optimised, and filing is completed well before the 31st December deadline.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting LLP has filed 500+ GST annual returns across India with a 99.2% zero-penalty rate. Our dedicated CA and CS team handles everything from data reconciliation to portal filing - so you can focus on running your business.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20file%20my%20GST%20Annual%20Return%20(GSTR-9%20%2F%20GSTR-9C).%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Annual%20Returns%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20GST%20Annual%20Returns%20services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch%20with%20me%20at%20your%20earliest%20convenience.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">GST Annual Return Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert GSTR-9 and GSTR-9C filing assistance available in major cities. Click your city for location-specific information.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/gst-annual-returns/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/gst-annual-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/gst-annual-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/gst-annual-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for GST Annual Returns</div>
    <div class="pa-cross-grid">
        <a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Audit</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Notice</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gst-refund" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Refund</div><div class="pa-card-sub">India</div></div></a>
        <a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually before the GST annual return filing season (October-November). Content is updated to reflect the latest CBIC notifications, circulars, and portal changes for the current financial year. The next scheduled review is October 2026 for FY 2025-26 filing guidance.</p>
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
    // CONFIGURATION  -  Update these values
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
            console.log('[Testimonials] No Google API key set  -  using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API  -  using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews  -  using fallback.');
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
        // Static cards already rendered  -  init Slick immediately
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
