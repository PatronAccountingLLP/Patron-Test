

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
    <title>GST Annual Return in Pune – GSTR-9, GSTR-9C &amp; Due Date</title>
    <meta name="description" content="CA-assisted GST annual return filing in Pune. GSTR-9 and GSTR-9C reconciliation for businesses above Rs 2 crore. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/gst-annual-returns/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="GST Annual Return in Pune – GSTR-9, GSTR-9C &amp; Due Date">
    <meta property="og:description" content="CA-assisted GST annual return filing in Pune. GSTR-9 and GSTR-9C reconciliation for businesses above Rs 2 crore. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/gst-annual-returns/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Annual Return in Pune – GSTR-9, GSTR-9C &amp; Due Date">
    <meta name="twitter:description" content="CA-assisted GST annual return filing in Pune. GSTR-9 and GSTR-9C reconciliation for businesses above Rs 2 crore. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "GST Annual Return Filing Services (GSTR-9/9C) in Pune",
      "description": "CA-assisted GST annual return filing in Pune. GSTR-9 and GSTR-9C reconciliation for businesses above Rs 2 crore. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/gst-annual-returns/pune",
      "serviceType": "GST Annual Return Filing Services (GSTR-9/9C) in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
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
        "url": "https://www.patronaccounting.com/gst-annual-returns/pune"
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
          "name": "GST Returns",
          "item": "https://www.patronaccounting.com/gst-returns"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "GST Annual Returns in Pune",
          "item": "https://www.patronaccounting.com/gst-annual-returns/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which GST office handles annual return scrutiny in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The CGST Commissionerate Pune-I and Pune-II handle central tax matters, and Maharashtra GST Pune District handles state tax. The CGST Audit Commissionerate Pune conducts audits based on GSTR-9/9C filings. All filings are done online on the GST portal."
          }
        },
        {
          "@type": "Question",
          "name": "Can I file GST annual returns online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. GSTR-9 and GSTR-9C are filed entirely online through the GST portal using EVC or DSC. Patron Accounting handles the complete filing process from its Pune office at Wagholi."
          }
        },
        {
          "@type": "Question",
          "name": "What is the turnover limit for GSTR-9 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "GSTR-9 is mandatory for taxpayers with aggregate annual turnover above Rs 2 crore. GSTR-9C is additionally required for turnover above Rs 5 crore. Below Rs 2 crore, filing is optional and deemed furnished."
          }
        },
        {
          "@type": "Question",
          "name": "What is the late fee for delayed GSTR-9 filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The late fee is Rs 200 per day (Rs 100 CGST plus Rs 100 SGST), capped at 0.25 percent of the taxpayer's turnover in the state under Section 47 of the CGST Act 2017. The GST portal auto-computes the fee at the time of filing."
          }
        }
      ]
    }
  ]
}</script>
@endsection

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
                        GST Annual Returns (GSTR-9 / GSTR-9C) in Pune - File with Expert CA Support
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9:</span> Annual return consolidating GSTR-1, GSTR-2B, and GSTR-3B for the financial year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>GSTR-9C:</span> Self-certified reconciliation statement for turnover above Rs 5 crore</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> 31st December of the following financial year</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Late Fee:</span> Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped at 0.25% of turnover</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Annual%20Return%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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


                                        @include('partials.lead-form', [
                        'deal' => 'Website Enquiry - GST Annual Returns in Pune',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'gst-annual-returns/pune', 'label' => 'GST Annual Returns in Pune', 'selected' => true, 'disabled' => false],
                            ['value' => 'gst-registration/pune', 'label' => 'GST Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/pune', 'label' => 'Pvt Ltd Company Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/pune', 'label' => 'Startup Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'llp-incorporation/pune', 'label' => 'LLP Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/pune', 'label' => 'Trademark Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-audit', 'label' => 'GST Audit', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our GST filing is always on time since we moved to Patron. The CA team reconciled our ITC across 3 GSTINs and caught mismatches we had missed for 2 quarters. GSTR-9C prepared with zero hassle.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, IT Services - Hinjewadi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The RCM reconciliation Patron did for our manufacturing unit was incredibly thorough. They caught transport GTA and scrap RCM errors that our previous consultant had missed. Annual return filed clean.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sandeep Patil</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Manufacturing - Chakan MIDC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">First year filing GSTR-9C after crossing Rs 5 crore. Patron made the entire reconciliation process painless. Their in-house CA team ensured every number matched between books and returns. Highly recommend.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Neha Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, D2C Brand - Baner</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had a GST audit notice from CGST Pune after last year's filing. Patron's documentation was so thorough that the audit was completed with no adverse observations. Now they handle all our annual returns proactively.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vinod Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MD, Export Co - MIDC Bhosari</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From IT companies to MIDC manufacturers, Pune businesses trust Patron for GST annual return filing and audit readiness.</p>
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
            <a href="#what-section" class="toc-btn">What is GSTR-9</a>
            <a href="#who-section" class="toc-btn">Who Must File</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Self vs Professional</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Returns (GSTR-9 / GSTR-9C) in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - GST Annual Returns in Pune Services at a Glance</strong></p>
                    <p>GST annual return filing in Pune requires all regular taxpayers with aggregate turnover above Rs 2 crore to file GSTR-9 by 31st December each year. Businesses with turnover above Rs 5 crore must also file GSTR-9C (reconciliation statement). IT companies in Hinjewadi, manufacturers at Chakan MIDC, and businesses across Pune must reconcile GSTR-1, GSTR-3B, and GSTR-2B data with their audited financial statements.</p>
                </div>
                <p>Pune is Maharashtra's second-largest commercial centre with two <strong>CGST Commissionerates (Pune-I and Pune-II)</strong> under the CGST & Customs Pune Zone, and a <strong>Maharashtra GST (SGST) Pune District office</strong> (mahagst.gov.in). IT companies in <strong>Hinjewadi</strong> and <strong>Kharadi</strong> with large ITC claims, manufacturers at <strong>Chakan MIDC</strong> and <strong>MIDC Bhosari</strong> dealing with Reverse Charge Mechanism (RCM) on metal scrap and transport, and D2C brands across Pune must all file accurate GST annual returns. The <strong>GST Audit Commissionerate, Pune</strong> conducts audits based on GSTR-9/9C filings, making accuracy critical. Learn more about <a href="/gst-returns">GST Returns across India</a>.</p>
                <p>Late filing attracts Rs 200/day capped at 0.25% of turnover under Section 47 of the CGST Act, 2017. Patron Accounting's Pune office provides end-to-end GST annual return services. After filing GSTR-9/9C, Pune businesses also benefit from <a href="/gst-audit">GST Audit</a> support and <a href="/private-limited-company-compliance">Private Limited Company Compliance</a> services.</p>
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
                <h2 class="section-title">What Are GST Annual Returns (GSTR-9 / GSTR-9C)</h2>
                <div class="content-text what-is-definition">
                    
                    <p>GSTR-9 is the annual GST return under Section 44 of the CGST Act, 2017 that consolidates all monthly/quarterly returns (GSTR-1, GSTR-2B, and GSTR-3B) filed during a financial year into a single comprehensive filing covering outward supplies, inward supplies, tax paid, and Input Tax Credit (ITC) claimed.</p>
<p>GSTR-9C is the annual reconciliation statement required for taxpayers with aggregate turnover exceeding Rs 5 crore. It reconciles the data declared in GSTR-9 with the audited annual financial statements. GSTR-9C must be self-certified by the taxpayer and filed along with GSTR-9.</p>
<p>For Pune-based IT companies in Hinjewadi and Kharadi with significant ITC claims on software licences, cloud services, and inter-state purchases, GSTR-9 filing requires careful reconciliation of GSTR-2B auto-populated data (Table 8A) with actual ITC claimed in GSTR-3B. Manufacturing units at Chakan MIDC face additional complexity from RCM transactions on transport, legal services, and metal scrap - all of which must be correctly reported in the annual return to avoid notices from the CGST Audit Commissionerate, Pune.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for GST Annual Returns in Pune:</strong></p>
                    <p><strong>GSTR-9:</strong> Annual GST return consolidating GSTR-1, GSTR-2B, and GSTR-3B data for a financial year. Mandatory for turnover above Rs 2 crore.</p>
<p><strong>GSTR-9C:</strong> Self-certified reconciliation statement matching GSTR-9 with audited financials. Mandatory for turnover above Rs 5 crore.</p>
<p><strong>Table 8A:</strong> Auto-populated ITC as per GSTR-2B - key reconciliation point for ITC mismatches.</p>
<p><strong>Section 44:</strong> CGST Act provision requiring every registered person to furnish an annual return.</p>
<p><strong>Section 47:</strong> Late fee provision - Rs 200/day capped at 0.25% of turnover.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">GST Annual Returns in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Filing Deadline</span>
                        <strong>31st December</strong>
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
            <h2 class="section-title">Who Must File GST Annual Returns in Pune</h2>
            <div class="content-text">
                
                <p><strong>GSTR-9 is mandatory</strong> for all regular GST-registered taxpayers in Pune with <strong>aggregate annual turnover exceeding Rs 2 crore</strong>. For FY 2024-25, the government has exempted taxpayers with turnover up to Rs 2 crore from filing GSTR-9.</p>
<p><strong>IT companies</strong> in <strong>Hinjewadi IT Park and Kharadi</strong> providing software services with export turnover, zero-rated supplies, and multi-GSTIN registrations across states must file GSTR-9 for each GSTIN separately. See <a href="/gst-registration/pune">GST Registration in Pune</a> for new registrations.</p>
<p><strong>Manufacturing companies</strong> at <strong>Chakan MIDC and MIDC Bhosari</strong> with turnover above Rs 5 crore must file both GSTR-9 and GSTR-9C, reconciling production-linked ITC, job work returns, and RCM liabilities.</p>
<p><strong>D2C brands and e-commerce sellers</strong> in Baner and Koregaon Park selling through marketplaces must reconcile TCS collected by e-commerce operators (GSTR-8) with their own GSTR-3B data in the annual return.</p>
<p><strong>Multi-branch businesses</strong> with GSTINs in multiple states must file separate annual returns for each registration.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>GSTR-9 Preparation and Filing</td><td>Consolidating GSTR-1, GSTR-3B, and GSTR-2B data for the financial year and filing on the GST portal</td></tr>
<tr><td>GSTR-9C Reconciliation Statement</td><td>Self-certified reconciliation between GSTR-9 and audited financial statements for turnover above Rs 5 crore</td></tr>
<tr><td>ITC Reconciliation</td><td>Matching GSTR-2B auto-populated ITC (Table 8A) with ITC claimed in GSTR-3B, identifying mismatches</td></tr>
<tr><td>GSTR-1 vs GSTR-3B Reconciliation</td><td>Identifying and resolving discrepancies between outward supply declarations and tax liability</td></tr>
<tr><td>RCM Reconciliation</td><td>Verifying Reverse Charge Mechanism liabilities on imports, legal services, transport, and metal scrap</td></tr>
<tr><td>HSN Summary Preparation</td><td>Preparing Table 17 HSN-wise summary of outward supplies (mandatory from FY 2024-25)</td></tr>
<tr><td>Multi-GSTIN Filing</td><td>Managing GSTR-9/9C filings across multiple GSTINs for businesses with registrations in multiple states</td></tr>
<tr><td>Audit Preparedness</td><td>Preparing documentation for potential GST audit by the CGST Audit Commissionerate, Pune</td></tr>

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
            <h2 class="section-title">GST Annual Return Filing Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step guide for GSTR-9/9C filing with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Download System-Computed GSTR-9</h3><p class="step-description">Log in to the GST portal (www.gst.gov.in) and navigate to Services > Returns > Annual Return. Download the system-computed GSTR-9 in PDF/Excel format. This auto-populated draft is based on GSTR-1 and GSTR-3B data filed during the year. Also download the Table 8A Excel showing ITC as per GSTR-2B. Patron's Pune office downloads and reviews these for all managed clients.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GST Portal Download</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table 8A Excel</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M40 28l15 0" stroke="#E8712C" stroke-width="2"/><path d="M40 38l25 0" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><path d="M40 48l20 0" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><rect x="70" y="22" width="20" height="12" rx="2" fill="#E8712C" opacity="0.2"/><path d="M75 28l4 4 6-6" stroke="#E8712C" stroke-width="1.5"/></svg></div><span class="illustration-label">Data Downloaded</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reconcile Returns with Books of Accounts</h3><p class="step-description">Compare the auto-populated GSTR-9 data with your audited financial statements. Key reconciliation areas: GSTR-1 declared turnover vs books turnover, GSTR-3B tax paid vs books tax liability, and GSTR-2B ITC (Table 8A) vs ITC claimed in GSTR-3B vs ITC as per purchase register. For Hinjewadi IT companies, this step is critical as ITC mismatches are the top trigger for GST audit notices from the CGST Audit Commissionerate, Pune.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Books Reconciliation</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITC Matching</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="15" width="45" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 42h10" stroke="#E8712C" stroke-width="2" stroke-dasharray="4 2"/><line x1="18" y1="30" x2="48" y2="30" stroke="#E8712C" stroke-width="2"/><line x1="73" y1="30" x2="103" y2="30" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Prepare Table-Wise Data in GSTR-9</h3><p class="step-description">Fill the editable tables: Tables 4-5 (outward supplies - taxable, exempt, non-GST), Table 6 (ITC availed), Table 7 (ITC reversed and ineligible), Table 8 (ITC as per GSTR-2B vs claimed), Tables 10-14 (amendments, adjustments, differential tax), and Table 17 (HSN summary - mandatory from FY 2024-25). For Chakan MIDC manufacturers, ensure RCM on transport and scrap is correctly reported.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Table-Wise Entry</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HSN Summary</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="25" y1="20" x2="95" y2="20" stroke="#14365F" stroke-width="1" opacity="0.2"/><rect x="25" y="25" width="30" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="60" y="25" width="30" height="8" rx="2" fill="#E8712C" opacity="0.2"/><rect x="25" y="38" width="30" height="8" rx="2" fill="#E8712C" opacity="0.3"/><rect x="60" y="38" width="30" height="8" rx="2" fill="#E8712C" opacity="0.2"/><rect x="25" y="51" width="30" height="8" rx="2" fill="#10B981" opacity="0.3"/><rect x="60" y="51" width="30" height="8" rx="2" fill="#10B981" opacity="0.2"/></svg></div><span class="illustration-label">Tables Prepared</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Prepare GSTR-9C (If Turnover Exceeds Rs 5 Crore)</h3><p class="step-description">For Pune businesses with aggregate turnover above Rs 5 crore, prepare the GSTR-9C reconciliation statement. This reconciles turnover, tax paid, and ITC as per GSTR-9 with figures from audited annual accounts. GSTR-9C is self-certified by the taxpayer. Patron's in-house CA team prepares the reconciliation to ensure accuracy and audit readiness for the GST Audit Commissionerate, Pune.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Self-Certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="82" cy="58" r="8" fill="#FEF4EE" stroke="#10B981" stroke-width="1.5"/><path d="M78 58l3 3 5-5" stroke="#10B981" stroke-width="1.5"/></svg></div><span class="illustration-label">9C Prepared</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Compute and Pay Late Fee / Additional Liability</h3><p class="step-description">If filing after 31st December, the GST portal auto-computes the late fee: Rs 200/day (Rs 100 CGST + Rs 100 SGST), capped at 0.25% of turnover in the state. Any additional tax liability identified during reconciliation must be paid through the Electronic Cash Ledger before submitting the return. ITC cannot be claimed through GSTR-9.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Late Fee Computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Liability Paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="45" y="34" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">Rs</text><line x1="65" y1="25" x2="90" y2="25" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="65" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="50" width="60" height="15" rx="4" fill="#10B981" opacity="0.15"/><line x1="30" y1="57" x2="75" y2="57" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">Payment Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File GSTR-9 and GSTR-9C on GST Portal</h3><p class="step-description">Preview the prepared GSTR-9, verify all tables, and click 'Compute Liabilities'. Complete the self-certification declaration and file using EVC (Electronic Verification Code) or DSC (Digital Signature Certificate). If GSTR-9C is applicable, upload the reconciliation statement along with GSTR-9. Download the filed return acknowledgment. Patron files GSTR-9/9C for Pune clients from its Wagholi office.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EVC / DSC Filing</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Acknowledgment</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FEF4EE" stroke="#10B981" stroke-width="2"/><path d="M52 42l5 5 11-11" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Return Filed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for GST Annual Return Filing in Pune</h2>
            <div class="content-text">
                
                <p><strong>GSTR-1 filed returns:</strong> Monthly/quarterly outward supply returns for the entire financial year.</p>
<p><strong>GSTR-3B filed returns:</strong> Monthly summary returns with tax liability and ITC claimed.</p>
<p><strong>GSTR-2B statements:</strong> Auto-populated ITC statements for each month of the financial year.</p>
<p><strong>Audited Financial Statements:</strong> Profit & Loss account and Balance Sheet (mandatory for GSTR-9C).</p>
<p><strong>Purchase Register:</strong> Complete purchase details with supplier GSTIN, invoice numbers, and tax amounts.</p>
<p><strong>Sales Register:</strong> Complete sales details with customer GSTIN, HSN codes, and tax amounts.</p>
<p><strong>RCM Invoices:</strong> Reverse Charge invoices for transport, legal services, metal scrap, and other notified supplies.</p>
<p><strong>ITC Register:</strong> Detailed ITC ledger showing eligible, ineligible, reversed, and reclaimed ITC.</p>
<div class="highlight-box" style="margin-top:16px;"><p><strong>Pune-Specific Tip:</strong> For IT companies in Hinjewadi exporting software services, maintain a separate reconciliation of zero-rated supplies (LUT-based) vs supplies with IGST paid. For Chakan MIDC manufacturers, keep job work challans and RCM invoices organised by quarter for efficient annual return preparation.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common GST Annual Return Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ITC Mismatch (Table 8A vs GSTR-3B)</td><td>Large vendor bases in Hinjewadi/Kharadi cause GSTR-2B vs GSTR-3B mismatches - top audit trigger</td><td>Automated 2B vs 3B matching with mismatch report and supplier follow-up before annual return filing</td></tr>
<tr><td>RCM Complexity for Manufacturers</td><td>Chakan MIDC units with metal scrap, transport GTA, and legal services face RCM reporting errors</td><td>Complete RCM reconciliation in Tables 4 and 6 with quarterly breakup and verification</td></tr>
<tr><td>HSN Summary Table 17</td><td>Mandatory from FY 2024-25; diverse product lines with multiple HSN codes cause mapping errors</td><td>System-generated HSN summary verified by CA team before filing</td></tr>
<tr><td>Multi-GSTIN Businesses</td><td>Branch registrations in multiple states require separate GSTR-9/9C for each GSTIN</td><td>Centralized multi-GSTIN filing from Pune with cross-GSTIN reconciliation</td></tr>
<tr><td>E-Commerce TCS Reconciliation</td><td>D2C brands in Baner must reconcile marketplace TCS (GSTR-8) with their GSTR-3B data</td><td>Platform-wise TCS reconciliation integrated into annual return preparation</td></tr>

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
            <h2 class="section-title">GST Annual Return Filing Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (GST Annual Returns)</td><td>Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
<tr><td>GSTR-9 Filing (single GSTIN, up to Rs 5 crore)</td><td>Rs 5,000 - Rs 15,000</td></tr>
<tr><td>GSTR-9 + GSTR-9C Filing (Rs 5 crore - Rs 25 crore)</td><td>Rs 15,000 - Rs 40,000</td></tr>
<tr><td>GSTR-9 + GSTR-9C Large (above Rs 25 crore)</td><td>Rs 40,000 - Rs 1,00,000</td></tr>
<tr><td>ITC Reconciliation (standalone)</td><td>Rs 5,000 - Rs 15,000 (based on transaction volume)</td></tr>
<tr><td>Multi-GSTIN Filing (per additional GSTIN)</td><td>Rs 3,000 - Rs 10,000 per state registration</td></tr>
<tr><td>GST Audit Support</td><td>Rs 15,000 - Rs 50,000 (post-filing audit by CGST Commissionerate)</td></tr>
<tr><td>Government Fee</td><td>Nil for GSTR-9/9C filing. Late fee Rs 200/day (max 0.25% of turnover) if filed after 31st December</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free GST Annual Returns in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Annual%20Return%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">GST Annual Return Filing Timeline in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Download system-computed GSTR-9</td><td>1 day (auto-populated from GSTR-1/3B data on GST portal)</td></tr>
<tr><td>Reconciliation with books</td><td>5-15 working days (depends on transaction volume and mismatch count)</td></tr>
<tr><td>GSTR-9 preparation</td><td>3-7 working days (table-wise data entry and verification)</td></tr>
<tr><td>GSTR-9C preparation (if applicable)</td><td>5-10 working days (reconciliation with audited financials)</td></tr>
<tr><td>Late fee computation + payment</td><td>1 day (auto-computed by portal; paid through Electronic Cash Ledger)</td></tr>
<tr><td>Filing + submission</td><td>1 day (EVC or DSC on GST portal)</td></tr>
<tr><td>Total (excluding audit delay)</td><td>15-35 working days (start at least 6 weeks before 31st December)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> No visit to the CGST Commissionerate Pune or Maharashtra GST office is required. Patron's Pune office at RTC Silver, Wagholi handles all filing on the GST portal. Start preparation at least 6 weeks before the 31st December deadline to allow for ITC reconciliation and mismatch resolution.</p>

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
            <h2 class="section-title">Why Choose Patron for GST Annual Returns in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office at Wagholi</h3><p>Walk-in support at RTC Silver, Wagholi - serving Hinjewadi, Kharadi, Wakad, Baner, Chakan MIDC, MIDC Bhosari, and Pimpri-Chinchwad.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Zero Adverse Audit Record</h3><p>10,000+ businesses served. Patron's CA team has filed GSTR-9/9C for IT companies, manufacturers, exporters, and D2C brands with zero adverse audit observations.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3>In-House CA Team</h3><p>Chartered Accountants prepare GSTR-9C reconciliation statements in-house, ensuring consistency between audited financials and GST returns.</p></article><article class="feature-card"><div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Audit Readiness</h3><p>Complete documentation prepared for potential scrutiny by the CGST Audit Commissionerate, Pune - including ITC reconciliation working papers and RCM analysis.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and growing D2C brands across Maharashtra. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves businesses across India. Our Pune office provides in-person support for GST annual return filing and audit preparedness.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Self-Filing vs Professional GST Annual Return Service</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Self-Filing</th><th>Professional (Patron)</th></tr></thead>
                    <tbody>
                        <tr><td>Reconciliation</td><td>Manual; ITC mismatches missed</td><td>Automated; comprehensive GSTR-1/3B/2B matching</td></tr>
<tr><td>GSTR-9C</td><td>Requires external CA engagement</td><td>In-house CA prepares reconciliation statement</td></tr>
<tr><td>HSN Summary</td><td>Manual HSN mapping; errors common</td><td>System-generated HSN summary verified by CA</td></tr>
<tr><td>RCM Analysis</td><td>Often overlooked</td><td>Complete RCM reconciliation for Pune manufacturers</td></tr>
<tr><td>Audit Risk</td><td>Higher - incomplete reconciliation</td><td>Lower - audit-ready documentation prepared</td></tr>
<tr><td>Time Required</td><td>20-40 hours for complex filings</td><td>Managed end-to-end by Patron team</td></tr>

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
            <h2 class="section-title">Related Services for Pune Businesses</h2>
            <div class="content-text">
                
                <p>Pune businesses filing GST annual returns often need complementary tax and compliance services:</p>
<ul style="list-style:disc;padding-left:20px;"><li style="margin-bottom:12px;padding:8px 0;"><a href="/gst-returns" style="font-weight:600;">GST Returns in India</a> - Monthly/quarterly GST return filing services across India</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/gst-audit">GST Audit</a> - GST audit services for businesses under CGST Commissionerate scrutiny</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/statutory-audit">Statutory Audit</a> - Statutory audit required for GSTR-9C reconciliation</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/tax-audit">Tax Audit</a> - Tax audit under Section 44AB of the Income Tax Act</li><li style="margin-bottom:12px;padding:8px 0;"><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - Annual ROC filings and company compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal & Compliance Framework for GST Annual Returns</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Central Goods and Services Tax Act, 2017 (CGST Act) read with Maharashtra Goods and Services Tax Act, 2017 (MGST Act).</p>
<p><strong>Section 44:</strong> Every registered person shall furnish an annual return for every financial year.</p>
<p><strong>Section 47:</strong> Late fee for delayed filing - Rs 100/day CGST + Rs 100/day SGST = Rs 200/day total, capped at 0.25% of turnover in the state/UT.</p>
<p><strong>Section 16(4):</strong> ITC for invoices of a financial year can be claimed until the due date of filing GSTR-3B for September of the following year or the date of filing annual return, whichever is earlier.</p>
<p><strong>Rule 80:</strong> Prescribes Form GSTR-9 and GSTR-9C for annual return and reconciliation statement.</p>
<p><strong>Turnover Thresholds (FY 2024-25):</strong> GSTR-9 mandatory above Rs 2 crore. GSTR-9C mandatory above Rs 5 crore. Below Rs 2 crore - optional.</p>
<p><strong>Portal:</strong> <a href="https://www.gst.gov.in" target="_blank" rel="noopener">GST - www.gst.gov.in</a></p>
<p><strong>CGST Pune Zone:</strong> CGST Commissionerate Pune-I and Pune-II (punecgstcus.gov.in). CGST Audit Commissionerate, Pune.</p>
<p><strong>Maharashtra GST:</strong> Pune District office (mahagst.gov.in).</p>

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
                    <h2 class="faq-expanded__title">FAQs - GST Annual Returns in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about GSTR-9/9C filing, turnover limits, late fees, and reconciliation for Pune businesses</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'GST Annual Returns in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which GST office handles annual return scrutiny in Pune?</h3>
                        <div class="faq-expanded__a"><p>The CGST Commissionerate Pune-I and Pune-II handle central tax matters, and Maharashtra GST Pune District handles state tax. The CGST Audit Commissionerate, Pune conducts audits based on GSTR-9/9C filings. All filings are done online on the GST portal (www.gst.gov.in). Patron Accounting manages the entire process from its Pune office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I file GST annual returns online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. GSTR-9 and GSTR-9C are filed entirely online through the GST portal using EVC or DSC. Patron Accounting handles the complete filing process from its Pune office at Wagholi - including data download, reconciliation, preparation, and submission - without requiring any visit to the CGST Commissionerate or Maharashtra GST office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the turnover limit for GSTR-9 filing?</h3>
                        <div class="faq-expanded__a"><p>For FY 2024-25, GSTR-9 is mandatory for taxpayers with aggregate annual turnover above Rs 2 crore. Taxpayers with turnover up to Rs 2 crore are exempted. GSTR-9C is additionally required for taxpayers with turnover above Rs 5 crore. These thresholds are notified annually and may change.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the late fee for delayed GSTR-9 filing?</h3>
                        <div class="faq-expanded__a"><p>The late fee is Rs 200 per day (Rs 100 CGST + Rs 100 SGST/UTGST), capped at 0.25% of the taxpayer's turnover in the state/UT under Section 47 of the CGST Act, 2017. For a Pune business with Rs 10 crore turnover, the maximum late fee is Rs 2.5 lakh. The GST portal auto-computes the late fee at the time of filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is GSTR-9 mandatory below Rs 2 crore turnover?</h3>
                        <div class="faq-expanded__a"><p>No. For FY 2024-25, the government has exempted taxpayers with aggregate turnover up to Rs 2 crore from filing GSTR-9. If you choose not to file, it is deemed to have been furnished on the due date. However, voluntary filing is recommended for audit trail and compliance record purposes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Do I need a CA for filing GSTR-9C?</h3>
                        <div class="faq-expanded__a"><p>From FY 2020-21 onwards, GSTR-9C is self-certified by the taxpayer. The earlier requirement of CA/CMA certification has been removed. However, given the complexity of reconciling GSTR-9 with audited financials - particularly for Pune manufacturers and IT companies with large ITC claims - engaging a CA firm ensures accuracy and audit readiness.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens if GSTR-9 data differs from GSTR-1/3B data?</h3>
                        <div class="faq-expanded__a"><p>Discrepancies between GSTR-9 and the underlying GSTR-1/3B returns can trigger scrutiny notices from the CGST Commissionerate Pune or Maharashtra GST. Common causes include ITC mismatches, turnover differences, and RCM reporting errors. Patron's reconciliation process identifies and resolves these differences before filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Can I claim additional ITC through GSTR-9?</h3>
                        <div class="faq-expanded__a"><p>No. Additional ITC cannot be claimed through GSTR-9. The annual return is for consolidation and reconciliation only. If you discover unclaimed ITC, it must be claimed through GSTR-3B within the time limit under Section 16(4). Only additional tax liability can be paid through GSTR-9.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is GSTR-9?</strong> The annual GST return consolidating GSTR-1, GSTR-2B, and GSTR-3B data for a financial year. Mandatory for turnover above Rs 2 crore. Due by 31st December.</p>
<p><strong>Pune mein GSTR-9 kaise file karein?</strong> GST portal par login karein, system-computed GSTR-9 download karein, books se reconcile karein, tables fill karein, aur EVC/DSC se file karein. Patron Pune office se poora process handle karta hai.</p>
<p><strong>GSTR-9 aur GSTR-9C mein kya fark hai?</strong> GSTR-9 annual return hai (turnover above Rs 2 crore). GSTR-9C reconciliation statement hai (turnover above Rs 5 crore) jo GSTR-9 ko audited financials se match karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Miss the 31st December GSTR-9 Deadline</h2>
            <div class="content-text">
                
                <p>The GSTR-9 due date is <strong>31st December</strong> of the following financial year. Late filing attracts <strong>Rs 200/day</strong>, capped at <strong>0.25% of turnover</strong> - for a Rs 10 crore Pune business, this means a maximum penalty of Rs 2.5 lakh. Additionally, the <strong>Section 16(4) deadline</strong> for claiming ITC is linked to the annual return filing date. Delayed filing can result in permanent loss of unclaimed ITC.</p>
<p><strong>The CGST Audit Commissionerate, Pune actively uses GSTR-9/9C data for selecting audit cases. File accurately and on time.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert GST Annual Return Filing Support in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">GST annual return filing in Pune is a critical year-end compliance for every regular taxpayer with turnover above Rs 2 crore. Whether your business provides IT services from Hinjewadi, manufactures at Chakan MIDC, runs e-commerce operations from Baner, or manages multi-branch operations across Maharashtra, accurate GSTR-9 and GSTR-9C filing by 31st December is essential.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting, with its Pune office at RTC Silver, Wagholi, provides end-to-end GST annual return services - from system-computed download and ITC reconciliation to GSTR-9C preparation and portal submission.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron Accounting LLP is a trusted CA and CS firm for GST compliance across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20GST%20Annual%20Return%20Filing%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20GST%20Annual%20Returns%20in%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20with%20GST%20Annual%20Return%20filing%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides GST annual return filing services in 4 major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <a href="/gst-annual-returns/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/gst-annual-returns/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="/gst-annual-returns/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end GST and compliance support for Pune businesses</div><div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on GST Annual Returns in Pune is reviewed semi-annually for accuracy. Content covers Section 44 of the CGST Act 2017, GSTR-9/9C filing procedures, turnover thresholds (Rs 2 crore/Rs 5 crore), late fee under Section 47, and CGST Commissionerate Pune jurisdiction. Freshness Tier 1 - annual deadline and threshold changes possible.</p>
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
