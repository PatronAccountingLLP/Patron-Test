
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
    <title>Authorised Capital Change Mumbai - SH-7 & MGT-14</title>
    <meta name="description" content="CA-assisted authorised capital change in Mumbai. Form SH-7, MOA alteration, ROC fees, Maharashtra stamp duty. ROC Everest House. Call +91 945 945 6700.">
    <link rel="canonical" href="/change-in-authorised-capital/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Authorised Capital Change Mumbai - SH-7 & MGT-14">
    <meta property="og:description" content="CA-assisted authorised capital change in Mumbai. Form SH-7, MOA alteration, ROC fees, Maharashtra stamp duty. ROC Everest House. Call +91 945 945 6700.">
    <meta property="og:url" content="/change-in-authorised-capital/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Authorised Capital Change Mumbai - SH-7 & MGT-14">
    <meta name="twitter:description" content="CA-assisted authorised capital change in Mumbai. Form SH-7, MOA alteration, ROC fees, Maharashtra stamp duty. ROC Everest House. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Change in Authorised Capital Mumbai",
      "description": "CA-assisted authorised capital change in Mumbai. Form SH-7, MOA alteration, ROC fees, Maharashtra stamp duty. ROC Everest House. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/change-in-authorised-capital/mumbai",
      "serviceType": "Change in Authorised Capital Mumbai",
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
        "url": "https://www.patronaccounting.com/change-in-authorised-capital/mumbai",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "5",
          "maxPrice": "1000",
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
          "name": "Change Authorised Capital: SH-7",
          "item": "https://www.patronaccounting.com/change-in-authorised-capital"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Change in Authorised Capital Mumbai",
          "item": "https://www.patronaccounting.com/change-in-authorised-capital/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ROC handles authorised capital change in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ROC Mumbai at Everest House, 100 Marine Lines, Mumbai 400020 handles all Companies Act filings for Mumbai-registered companies. Forms MGT-14 and SH-7 are filed electronically on the MCA V3 portal. ROC processes forms and updates MCA Master Data. Patron's office at Marine Lines is adjacent to ROC Everest House, enabling same-day coordination if needed."
          }
        },
        {
          "@type": "Question",
          "name": "What resolution is needed for authorised capital increase?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An Ordinary Resolution (simple majority of votes cast) at an Extraordinary General Meeting or through postal ballot is sufficient under Section 61. The EGM requires 21 clear days' notice under Section 101 (shorter possible with 95% shareholder consent). No special resolution is needed unless the AOA requires simultaneous alteration. Patron drafts all resolutions for Mumbai companies."
          }
        },
        {
          "@type": "Question",
          "name": "What is Form SH-7?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form SH-7 is the MCA form used to intimate the ROC about any alteration in authorised share capital. It must be filed within 30 days of passing the resolution under Section 64(1). The form captures original and new authorised capital, breakup of additional shares, SRN of Form MGT-14, and stamp duty details. ROC fees and Maharashtra stamp duty are paid electronically at filing time."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Maharashtra stamp duty on authorised capital increase?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For non-Section 8 companies registered in Maharashtra: Rs 1,000 per Rs 5 lakh of increase (or part thereof), subject to the maximum ceiling under the Bombay Stamp Act. The Supreme Court in State of Maharashtra vs NOCIL held that stamp duty has a cap and companies are not required to pay repeatedly beyond the maximum once reached. Patron tracks stamp duty history and applies the NOCIL ruling."
          }
        },
        {
          "@type": "Question",
          "name": "How long does the process take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patron completes end-to-end in 15-20 working days: board meeting (Day 1), EGM notice and conduct (Day 1-23 or faster with short notice), form filing (within 30 days), and ROC processing (3-7 working days). For fast-track cases (startup fundraising with investor deadlines), the process can be completed in 10-12 working days using shorter EGM notice with 95% shareholder consent."
          }
        },
        {
          "@type": "Question",
          "name": "Can authorised capital be decreased?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Authorised capital cannot be 'decreased' traditionally, but unissued shares can be cancelled under Section 61 (reducing the authorised figure). However, reducing paid-up capital (actual shares issued) requires Section 66 capital reduction with NCLT approval – a different and more complex process. Patron advises Mumbai companies on the appropriate legal route for their specific need."
          }
        },
        {
          "@type": "Question",
          "name": "Is authorised capital increase needed before share allotment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. If shares to be allotted would exceed existing authorised capital, the increase must be completed first. The sequence is: (1) increase authorised capital (SH-7 approved), (2) board/shareholder approval for allotment (Section 62), (3) allot shares and issue certificates, (4) file Form PAS-3 within 30 days. Patron handles the complete sequence for Mumbai companies raising capital."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if SH-7 is filed late?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Filing after the 30-day deadline attracts additional progressive fees on the MCA portal, which increase with the period of delay. Prolonged non-filing may result in Section 450 penalties and ROC scrutiny. For Mumbai companies in fundraising transactions, delayed filing can hold up share allotment as PAS-3 cannot be filed until SH-7 is approved. Patron files within 15 days to prevent delays. Quick Answers Authorised capital kaise badhaye? Board Meeting karo, EGM mein Ordinary Resolution pass karo, Form MGT-14 aur SH-7 file karo ROC Mumbai ke saath 30 din mein. ROC fees aur Maharashtra stamp duty pay karo MCA portal pe. Patron 15-20 din mein complete karta hai. Kitna stamp duty lagta hai Maharashtra mein? Rs 1,000 per Rs 5 lakh of increase. Rs 20 lakh badhaya toh Rs 4,000 stamp duty. Rs 1 crore badhaya toh Rs 20,000. Supreme Court NOCIL ruling ke baad maximum cap apply hota hai. Kya kam bhi kar sakte hain authorised capital? Unissued shares cancel kar sakte ho (Section 61). Lekin paid-up capital kam karne ke liye Section 66 capital reduction + NCLT approval chahiye. Patron dono routes advise karta hai."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
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
                        Change in Authorised Capital in Mumbai: Increase, Alter, and File with ROC
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Governing Law:</span> Companies Act, 2013 &ndash; Section 61 (Power to Increase) | Section 64 (Filing with ROC)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Resolution:</span> Ordinary Resolution at EGM or Postal Ballot &ndash; 21 clear days notice (or shorter with 95% consent)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Forms:</span> MGT-14 (Resolution Filing) + SH-7 (Capital Alteration Intimation) within 30 days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Stamp Duty:</span> Maharashtra: Rs 1,000 per Rs 5 lakh of increase (non-Section 8, subject to Bombay Stamp Act cap)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Our Mumbai office is adjacent to ROC Everest House &ndash; 10,000+ businesses served with 4.9&#9733; Google rating</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20authorised%20capital%20change%20in%20Mumbai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Change in Authorised Capital',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'change-in-authorised-capital/mumbai', 'label' => 'Change in Authorised Capital in Mumbai', 'selected' => true, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/mumbai', 'label' => 'Pvt Ltd Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/mumbai', 'label' => 'Income Tax Return Filing in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/mumbai', 'label' => 'GST Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/mumbai', 'label' => 'Startup Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/mumbai', 'label' => 'Trademark Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services/mumbai', 'label' => 'Payroll Services in Mumbai', 'selected' => false, 'disabled' => false],
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
        
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get your authorised capital changed by a CA &amp; CS team adjacent to ROC Mumbai Everest House.</p>
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
            <a href="#what-section" class="toc-btn">What Is</a>
            <a href="#who-section" class="toc-btn">When Needed</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">ROC Fees</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change in Authorised Capital in Mumbai &ndash; Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Change in Authorised Capital Services at a Glance</strong></p>
                    <p>Changing the authorised capital of a company involves altering the Capital Clause (Clause V) of the Memorandum of Association to increase or reclassify the maximum share capital the company can issue. Mumbai companies frequently need authorised capital changes for: fundraising (angel/VC rounds for Powai startups), parent company capital infusion (BKC MNC subsidiaries), bonus share issuance, ESOP pools (tech companies at Powai/Andheri), and business expansion (manufacturers at MIDC). The process requires an ordinary resolution at an EGM, filing Form MGT-14 and Form SH-7 with ROC Mumbai within 30 days, and payment of ROC fees and Maharashtra stamp duty.</p>
                </div>
                <p>Mumbai has the highest number of registered companies in India, and authorised capital changes are among the most frequent MCA filings. Powai startups raising Series A/B/C routinely increase authorised capital from Rs 1-10 lakh to Rs 50 lakh-10 crore. BKC MNC subsidiaries receive equity infusions from global parents. Fort and Nariman Point holding companies restructure capital. Andheri MIDC manufacturers increase capital for expansion. Learn more about <a href="/change-in-authorised-capital">Change in Authorised Capital across India</a>.</p>
                <p>Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Mumbai Everest House &ndash; provides end-to-end authorised capital change: board resolution drafting, EGM documentation, MOA alteration, Form MGT-14 and SH-7 filing on MCA V3 portal, ROC fee and stamp duty payment, and updated MOA issuance. For ongoing company compliance, see <a href="/private-limited-company-compliance">Private Limited Company Compliance</a>.</p>
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
                <h2 class="section-title">What Is Authorised Capital?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Authorised capital (also called nominal or registered capital) is the maximum amount of share capital that a company is authorised to issue to its shareholders, as specified in Clause V (Capital Clause) of the Memorandum of Association under Section 2(8) of the Companies Act, 2013.</p>
                    <p>Authorised capital sets the ceiling for share issuance. A company cannot issue shares (paid-up capital) beyond its authorised capital without first increasing the limit. For example, a Powai startup incorporated with Rs 1 lakh authorised capital can only issue shares worth Rs 1 lakh. To raise Rs 50 lakh from an angel investor, the company must first increase authorised capital. The authorised capital is distinct from issued capital (shares offered) and paid-up capital (amount received from shareholders). For company registration, see <a href="/private-limited-company-registration">Private Limited Company Registration</a>.</p>
                    <p>For Mumbai companies, authorised capital is a strategic decision. Setting it too low (common among first-time founders at Powai who incorporate with Rs 1 lakh) necessitates frequent increases as the company raises funding. Setting it too high results in higher upfront ROC fees and stamp duty. Patron advises Mumbai startups on optimal initial authorised capital based on their fundraising roadmap.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Change in Authorised Capital:</strong></p>
                    <ul>
                        <li><strong>Authorised Capital:</strong> Maximum share capital a company can issue &ndash; defined in MOA Clause V under Section 2(8)</li>
                        <li><strong>Section 61:</strong> Power of company to alter share capital &ndash; increase, consolidate, subdivide, or cancel</li>
                        <li><strong>Form SH-7:</strong> MCA form for intimating ROC about capital alteration &ndash; filed within 30 days of resolution</li>
                        <li><strong>Form MGT-14:</strong> MCA form for filing resolutions with ROC &ndash; required before SH-7</li>
                        <li><strong>MOA Clause V:</strong> Capital Clause specifying authorised capital amount and share breakup</li>
                        <li><strong>NOCIL Ruling:</strong> Supreme Court ruling capping Maharashtra stamp duty on capital increases per Bombay Stamp Act ceiling</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Change in Authorised Capital</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>CA &amp; CS Managed</span>
                        <strong>Capital Change Filing</strong>
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
            <h2 class="section-title">When Mumbai Companies Need to Change Authorised Capital</h2>
            <div class="content-text">
                
                <p><strong>Fundraising rounds (Angel/VC/PE) at Powai, Andheri, and BKC</strong> &ndash; The most common trigger. When new shares exceed existing authorised capital, the company must increase it before allotment. Powai startups raising seed (Rs 25-50 lakh), Series A (Rs 2-10 crore), or Series B/C (Rs 10-100 crore) routinely need increases. Filing <a href="/itr-for-companies">ITR for Companies</a> is also required post-allotment.</p>
                <p><strong>Parent company capital infusion at BKC and Nariman Point</strong> &ndash; Indian subsidiaries of MNCs receive equity from global parents. Authorised capital must accommodate new shares. BKC subsidiaries commonly increase from Rs 10 lakh to Rs 1-50 crore.</p>
                <p><strong>Bonus share issuance</strong> &ndash; Profitable companies capitalising reserves by issuing bonus shares. If bonus shares exceed authorised capital, increase is needed first. Common for established Mumbai companies at Nariman Point and Fort.</p>
                <p><strong>ESOP pool creation at Powai and Andheri tech companies</strong> &ndash; Creating employee stock option pools requires share reservation. If ESOP pool plus issued shares exceeds authorised capital, an increase is needed. Many Powai startups allocate 10-15% for ESOPs.</p>
                <p><strong>Rights issue or preferential allotment</strong> &ndash; Issuing additional shares to existing shareholders or specific persons under Section 62 when headroom is insufficient.</p>
                <p><strong>Business expansion (MIDC/Thane manufacturers)</strong> &ndash; Increasing authorised capital to raise additional equity from promoters or new investors for plant expansion.</p>
                <p><strong>Reclassification of share capital</strong> &ndash; Converting equity to preference shares (or vice versa), subdividing shares (stock split), or consolidating shares under Section 61.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Authorised Capital Change Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Advisory on Optimal Capital Structure</td><td>Determining right authorised capital based on fundraising roadmap, ESOP plans, and growth trajectory. 2-3x headroom recommended for Powai startups to avoid repeated increases</td></tr>
                        <tr><td>Board Resolution &amp; EGM Documentation</td><td>Board resolution drafting, EGM notice (21 clear days or shorter with 95% consent), explanatory statement (Section 102), and ordinary resolution for capital increase</td></tr>
                        <tr><td>MOA Clause V Alteration</td><td>Amended MOA with new authorised capital, correct share breakup (equity/preference, number, denomination). Certified true copy prepared for ROC filing</td></tr>
                        <tr><td>Form MGT-14 Filing</td><td>Resolution filing with ROC Mumbai on MCA V3 portal within 30 days. Company CIN, purpose, resolution details, and attachments</td></tr>
                        <tr><td>Form SH-7 Filing</td><td>Capital alteration intimation with ROC fees and Maharashtra stamp duty computed and paid electronically. SRN of MGT-14 cross-referenced</td></tr>
                        <tr><td>ROC Fee &amp; Stamp Duty Computation</td><td>Incremental ROC fees per Companies Rules 2014. Maharashtra stamp duty Rs 1,000 per Rs 5 lakh with NOCIL Supreme Court ceiling applied. Itemised fee computation provided</td></tr>
                        <tr><td>Post-Filing: Updated Master Data &amp; MOA</td><td>MCA Master Data verification, updated MOA issuance, all filing receipts. PAS-3 (return of allotment) continuation if shares being issued</td></tr>
                        <tr><td>Share Allotment Continuation (PAS-3)</td><td>For companies proceeding to allot shares after capital increase: board/shareholder approval, share certificates, and Form PAS-3 filing</td></tr>

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
            <h2 class="section-title">Authorised Capital Change Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting completes the end-to-end process in 15-20 working days. Our Marine Lines office is adjacent to ROC Mumbai Everest House for fastest coordination.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Verify AOA &amp; Determine New Capital</h3><p class="step-description">Check that Articles of Association permit alteration (Table F standard AOA includes this power). Determine new authorised capital based on fundraising, ESOP, or expansion. For a Powai startup raising Rs 3 crore Series A with Rs 10 lakh current capital, new capital should be Rs 3.5-5 crore (providing headroom).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AOA verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>New capital determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M80 55l3 3 6-6" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">AOA Checked</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Hold Board Meeting</h3><p class="step-description">Pass Board Resolution to: (a) approve increase from Rs X to Rs Y, (b) approve Clause V alteration of MOA, (c) convene EGM. Fix EGM date, time, and venue. Patron drafts Board Resolution and meeting minutes for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Board resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EGM convened</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><path d="M53 35l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Board Approved</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Issue EGM Notice &amp; Pass Resolution</h3><p class="step-description">Issue notice to all shareholders (21 clear days under Section 101, or shorter with 95% consent). Conduct EGM and pass Ordinary Resolution (simple majority) for authorised capital increase. Patron drafts notice, explanatory statement, and resolution for Mumbai companies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notice issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="18" y1="25" x2="48" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="73" y1="25" x2="103" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">EGM Done</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File Form MGT-14 with ROC</h3><p class="step-description">File resolution with ROC Mumbai on MCA V3 portal within 30 days. MGT-14 captures company CIN, purpose, resolution details, and attachments (notice, resolution, altered MOA). Patron files MGT-14 before SH-7 as per sequence requirements.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SRN obtained</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><rect x="35" y="40" width="40" height="8" rx="3" fill="#14365F" opacity="0.15"/></svg></div><span class="illustration-label">Resolution Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Form SH-7 with Fees &amp; Stamp Duty</h3><p class="step-description">File capital alteration intimation with ROC Mumbai on MCA V3 portal within 30 days. Compute and pay ROC fees (incremental slab) and Maharashtra stamp duty (Rs 1,000 per Rs 5 lakh, NOCIL cap applied) electronically. Patron verifies fee computation manually against MCA calculator.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SH-7 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Fees &amp; duty paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="8" rx="3" fill="#E8712C" opacity="0.3"/><path d="M80 55l-8 8-5-5" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Capital Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Verify MCA Master Data &amp; Issue Updated MOA</h3><p class="step-description">After ROC approval (3-7 working days), verify MCA Master Data reflects updated authorised capital. Issue company updated MOA, SH-7 approval certificate, and all filing receipts. For Mumbai companies proceeding to share allotment, Patron continues with PAS-3 filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Master data verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Updated MOA issued</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="18" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M52 35l6 6 12-12" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Authorised Capital Change in Mumbai</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Current MOA and AOA:</strong> Memorandum of Association showing existing Clause V (Capital Clause). Articles of Association confirming power to alter capital</li>
                    <li><strong>Certificate of Incorporation:</strong> Company CIN for MCA V3 portal filing</li>
                    <li><strong>Board Resolution:</strong> Approving the increase and convening the EGM</li>
                    <li><strong>EGM Notice:</strong> 21 clear days notice to all shareholders with explanatory statement under Section 102</li>
                    <li><strong>Ordinary Resolution:</strong> Passed at EGM or postal ballot for authorised capital increase</li>
                    <li><strong>Altered MOA:</strong> Updated Clause V reflecting new authorised capital with share breakup</li>
                    <li><strong>Shareholder List:</strong> Complete list with PAN, DIN (for directors), and shareholding details</li>
                    <li><strong>DSC of Director:</strong> Class 2/3 Digital Signature Certificate of authorised signatory for MCA filing</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Mumbai-Specific Tip:</strong> For Powai startups with VC term sheet deadlines, the entire authorised capital increase can be fast-tracked to 10-12 working days using shorter EGM notice with 95% shareholder consent. Patron coordinates board meeting, EGM, and MCA filing in compressed timelines for investment closing. Start the process when the term sheet is signed, not after final documentation.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Authorised Capital Change in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Maharashtra Stamp Duty Computation</td><td>Rs 1,000 per Rs 5 lakh of increase (non-Section 8), but subject to Bombay Stamp Act ceiling per NOCIL ruling. Many CAs overpay without checking ceiling</td><td>Stamp duty payment history tracked. NOCIL Supreme Court ruling applied. No overpayment beyond statutory maximum</td></tr>
                        <tr><td>ROC Fee Calculation Errors</td><td>MCA portal computes fees on incremental basis (new capital minus old capital fee already paid). Manual computation often differs from MCA calculator for edge cases</td><td>Manual verification against MCA calculator. Fee discrepancies resolved before filing. Itemised computation provided</td></tr>
                        <tr><td>30-Day Filing Deadline</td><td>Form SH-7 must be filed within 30 days of resolution. Fast-moving fundraising transactions can miss window if documentation not prepared in advance</td><td>Filing within 15 days as standard practice. Documentation prepared before EGM for immediate post-resolution filing</td></tr>
                        <tr><td>AOA Not Permitting Capital Increase</td><td>Some older AOA (pre-Companies Act 2013) may not include power to alter capital. Requires simultaneous AOA alteration (special resolution), adding complexity</td><td>AOA reviewed before initiating process. Simultaneous AOA alteration handled if needed with combined documentation</td></tr>
                        <tr><td>Fundraising Timeline Pressure</td><td>Powai startups with VC term sheet requiring closing in 45 days must complete capital increase + share allotment + PAS-3 within the window</td><td>Fast-track 10-12 days with shorter notice consent. Immediate sequence from SH-7 to PAS-3 for investment closing</td></tr>

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
            <h2 class="section-title">Authorised Capital Change Fees in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ROC Fee (Rs 1L to Rs 10L)</td><td>Approx Rs 4,000-6,000 (early-stage Mumbai startup)</td></tr>
                        <tr><td>ROC Fee (Rs 10L to Rs 1 crore)</td><td>Approx Rs 60,000-80,000 (Series A Powai startup)</td></tr>
                        <tr><td>ROC Fee (Rs 1 cr to Rs 10 cr)</td><td>Approx Rs 4-8 lakh (BKC MNC subsidiary)</td></tr>
                        <tr><td>Maharashtra Stamp Duty</td><td>Rs 1,000 per Rs 5 lakh of increase (subject to Bombay Stamp Act cap)</td></tr>
                        <tr><td>Stamp Duty Example (Rs 20L increase)</td><td>Rs 4,000</td></tr>
                        <tr><td>Stamp Duty Example (Rs 1 cr increase)</td><td>Rs 20,000</td></tr>
                        <tr><td>Form MGT-14 Filing Fee</td><td>Rs 200 (small company) / Rs 600 (others)</td></tr>
                        <tr><td>Patron Fee &ndash; Standard Increase</td><td>Starting Rs 5,000 (documentation + filing + stamp duty + tracking)</td></tr>
                        <tr><td>Patron Fee &ndash; Complex (AOA + Capital)</td><td>Starting Rs 8,000 (AOA special resolution + capital increase)</td></tr>
                        <tr><td>Patron Fee &ndash; Fundraising-Linked Urgent</td><td>Starting Rs 7,000 (fast-track 15 days for investment closing)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Change in Authorised Capital consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20authorised%20capital%20change%20in%20Mumbai.%20Please%20share%20details." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Authorised Capital Change Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Board Meeting</td><td>Day 1 &ndash; Board Resolution + fix EGM date</td></tr>
                        <tr><td>Issue EGM Notice</td><td>Day 1-2 &ndash; 21 clear days (or shorter with 95% consent)</td></tr>
                        <tr><td>Conduct EGM &amp; Pass Ordinary Resolution</td><td>Day 23 (or earlier with short notice) &ndash; simple majority</td></tr>
                        <tr><td>File Form MGT-14</td><td>Within 30 days of resolution &ndash; resolution filing with ROC</td></tr>
                        <tr><td>File Form SH-7</td><td>Within 30 days of resolution &ndash; capital alteration + fees + stamp duty</td></tr>
                        <tr><td>ROC Processing</td><td>3-7 working days after filing</td></tr>
                        <tr><td>MCA Master Data Update</td><td>Post-approval &ndash; reflects new authorised capital</td></tr>
                        <tr><td>Patron End-to-End</td><td>15-20 working days (10-12 fast-track)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>For fundraising-linked capital increases,</strong> Patron fast-tracks the process to 10-12 working days using shorter EGM notice with 95% shareholder consent. This provides maximum buffer for share allotment (PAS-3) and investment closing within VC term sheet timelines.</p>

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
            <h2 class="section-title">Why Choose Patron for Authorised Capital Change in Mumbai</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Adjacent to ROC Everest House</h3><p class="feature-text">Patron's Marine Lines office is steps from ROC Mumbai at Everest House, 100 Marine Lines. In-person ROC coordination when needed. Fastest resolution for urgent filings.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3 class="feature-title">Startup Fundraising Expertise</h3><p class="feature-text">Hundreds of capital increases for Powai/Andheri startups during angel, seed, Series A/B/C rounds. Investor timelines understood. Fast-track 10-12 days for investment closing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Maharashtra Stamp Duty Optimisation</h3><p class="feature-text">Payment history tracked. NOCIL Supreme Court ruling applied to prevent overpayment. No additional stamp duty beyond Bombay Stamp Act statutory maximum.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">End-to-End with Post-Completion</h3><p class="feature-text">From board resolution to MCA Master Data verification. After capital increase: share allotment (PAS-3), certificates, and statutory registers &ndash; completing the full cycle.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Mumbai Companies</h2>
            <div class="content-text">
                
                <p><strong>Trust Signals:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <blockquote style="border-left:3px solid var(--orange);padding:12px 20px;margin:16px 0;background:var(--orange-lighter);border-radius:0 var(--radius-sm) var(--radius-sm) 0;">
                    <p style="font-style:italic;margin-bottom:8px;">&ldquo;Patron increased our authorised capital from Rs 1 lakh to Rs 5 crore in 12 days for our Series A closing. The stamp duty calculation saved us Rs 6,000 compared to what the previous CS charged.&rdquo;</p>
                    <p style="font-size:13px;font-weight:700;color:var(--blue);margin:0;">&mdash; Founder, SaaS Startup, Powai</p>
                </blockquote>
                <p>Offices in Pune, Mumbai, Delhi, and Gurugram serving companies with MCA compliance and corporate restructuring.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ROC Fee Slab for Authorised Capital Increase</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>New Authorised Capital Range</th><th>ROC Fee (Approximate)</th><th>Mumbai Example</th></tr></thead>
                    <tbody>
                        <tr><td>Up to Rs 1,00,000</td><td>Rs 2,000</td><td>Micro startup incorporation</td></tr>
                        <tr><td>Rs 1,00,001 &ndash; Rs 5,00,000</td><td>Rs 4,000</td><td>Early-stage Powai startup</td></tr>
                        <tr><td>Rs 5,00,001 &ndash; Rs 10,00,000</td><td>Rs 6,000</td><td>Pre-seed funded startup</td></tr>
                        <tr><td>Rs 10,00,001 &ndash; Rs 25,00,000</td><td>Rs 15,000</td><td>Seed-funded startup</td></tr>
                        <tr><td>Rs 25,00,001 &ndash; Rs 50,00,000</td><td>Rs 30,000</td><td>Angel round</td></tr>
                        <tr><td>Rs 50,00,001 &ndash; Rs 1,00,00,000</td><td>Rs 60,000&ndash;80,000</td><td>Series A Powai startup</td></tr>
                        <tr><td>Rs 1 crore &ndash; Rs 10 crore</td><td>Rs 2,35,000 + incremental</td><td>BKC MNC subsidiary capital infusion</td></tr>
                        <tr><td>Above Rs 10 crore</td><td>Rs 2,35,000 + Rs 75 per Rs 10,000</td><td>Large capital restructuring</td></tr>

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
                
                <p>Explore related services:</p>
                <ul>
                    <li><a href="/change-in-authorised-capital">Change in Authorised Capital (India Overview)</a></li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a></li>
                    <li><a href="/private-limited-company-registration">Private Limited Company Registration</a></li>
                    <li><a href="/accounting-services">Accounting Services</a></li>
                    <li><a href="/statutory-audit">Statutory Audit</a></li>
                    <li><a href="/roc-notice">ROC Notice</a></li>
                    <li><a href="/pvt-llp-compliance">LLP Compliance</a></li>
                    <li><a href="/income-tax-return">Income Tax Return Filing</a></li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal &amp; Compliance Framework for Authorised Capital Change</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Section 2(8):</strong> Definition of authorised capital &ndash; maximum share capital authorised by MOA</li>
                    <li><strong>Section 61:</strong> Power to alter share capital &ndash; increase, consolidate, subdivide, cancel</li>
                    <li><strong>Section 64(1):</strong> Notice to ROC &ndash; Form SH-7 within 30 days of resolution</li>
                    <li><strong>Section 13:</strong> Alteration of MOA &ndash; Clause V (Capital Clause)</li>
                    <li><strong>Section 101:</strong> EGM notice &ndash; 21 clear days (shorter with 95% consent)</li>
                    <li><strong>Section 117:</strong> Filing of resolutions with ROC (Form MGT-14)</li>
                    <li><strong>Bombay Stamp Act, 1958:</strong> Article 10 &ndash; stamp duty on capital increase</li>
                    <li><strong>Supreme Court &ndash; State of Maharashtra vs NOCIL:</strong> Stamp duty ceiling; no repeated payment beyond maximum</li>
                    <li><strong>Companies Rules, 2014:</strong> ROC fee schedule based on authorised capital (incremental slab)</li>
                    <li><strong>Section 450:</strong> General penalty for non-compliance with filing deadlines</li>
                    <li><strong>ROC Mumbai:</strong> Everest House, 100 Marine Lines, Mumbai 400020</li>
                </ul>
                <p><strong>Filing Portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> (MCA V3 portal)</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions &ndash; Change in Authorised Capital in Mumbai</h2>
                    <p class="faq-expanded__lead">Get answers about ROC filing, resolutions, Form SH-7, Maharashtra stamp duty, timelines, and capital decrease for Mumbai companies.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'Change in Authorised Capital in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ROC handles authorised capital change in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>ROC Mumbai at Everest House, 100 Marine Lines, Mumbai 400020 handles all Companies Act filings for Mumbai-registered companies. Forms MGT-14 and SH-7 are filed electronically on the MCA V3 portal. ROC processes forms and updates MCA Master Data. Patron's office at Marine Lines is adjacent to ROC Everest House, enabling same-day coordination if needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What resolution is needed for authorised capital increase?</h3>
                        <div class="faq-expanded__a"><p>An Ordinary Resolution (simple majority of votes cast) at an Extraordinary General Meeting or through postal ballot is sufficient under Section 61. The EGM requires 21 clear days' notice under Section 101 (shorter possible with 95% shareholder consent). No special resolution is needed unless the AOA requires simultaneous alteration. Patron drafts all resolutions for Mumbai companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is Form SH-7?</h3>
                        <div class="faq-expanded__a"><p>Form SH-7 is the MCA form used to intimate the ROC about any alteration in authorised share capital. It must be filed within 30 days of passing the resolution under Section 64(1). The form captures original and new authorised capital, breakup of additional shares, SRN of Form MGT-14, and stamp duty details. ROC fees and Maharashtra stamp duty are paid electronically at filing time.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is the Maharashtra stamp duty on authorised capital increase?</h3>
                        <div class="faq-expanded__a"><p>For non-Section 8 companies registered in Maharashtra: Rs 1,000 per Rs 5 lakh of increase (or part thereof), subject to the maximum ceiling under the Bombay Stamp Act. The Supreme Court in State of Maharashtra vs NOCIL held that stamp duty has a cap and companies are not required to pay repeatedly beyond the maximum once reached. Patron tracks stamp duty history and applies the NOCIL ruling.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How long does the process take?</h3>
                        <div class="faq-expanded__a"><p>Patron completes end-to-end in 15-20 working days: board meeting (Day 1), EGM notice and conduct (Day 1-23 or faster with short notice), form filing (within 30 days), and ROC processing (3-7 working days). For fast-track cases (startup fundraising with investor deadlines), the process can be completed in 10-12 working days using shorter EGM notice with 95% shareholder consent.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can authorised capital be decreased?</h3>
                        <div class="faq-expanded__a"><p>Authorised capital cannot be 'decreased' traditionally, but unissued shares can be cancelled under Section 61 (reducing the authorised figure). However, reducing paid-up capital (actual shares issued) requires Section 66 capital reduction with NCLT approval &ndash; a different and more complex process. Patron advises Mumbai companies on the appropriate legal route for their specific need.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is authorised capital increase needed before share allotment?</h3>
                        <div class="faq-expanded__a"><p>Yes. If shares to be allotted would exceed existing authorised capital, the increase must be completed first. The sequence is: (1) increase authorised capital (SH-7 approved), (2) board/shareholder approval for allotment (Section 62), (3) allot shares and issue certificates, (4) file Form PAS-3 within 30 days. Patron handles the complete sequence for Mumbai companies raising capital.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if SH-7 is filed late?</h3>
                        <div class="faq-expanded__a"><p>Filing after the 30-day deadline attracts additional progressive fees on the MCA portal, which increase with the period of delay. Prolonged non-filing may result in Section 450 penalties and ROC scrutiny. For Mumbai companies in fundraising transactions, delayed filing can hold up share allotment as PAS-3 cannot be filed until SH-7 is approved. Patron files within 15 days to prevent delays.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Authorised capital kaise badhaye?</strong> Board Meeting karo, EGM mein Ordinary Resolution pass karo, Form MGT-14 aur SH-7 file karo ROC Mumbai ke saath 30 din mein. ROC fees aur Maharashtra stamp duty pay karo MCA portal pe. Patron 15-20 din mein complete karta hai.</p>
                <p><strong>Kitna stamp duty lagta hai Maharashtra mein?</strong> Rs 1,000 per Rs 5 lakh of increase. Rs 20 lakh badhaya toh Rs 4,000 stamp duty. Rs 1 crore badhaya toh Rs 20,000. Supreme Court NOCIL ruling ke baad maximum cap apply hota hai.</p>
                <p><strong>Kya kam bhi kar sakte hain authorised capital?</strong> Unissued shares cancel kar sakte ho (Section 61). Lekin paid-up capital kam karne ke liye Section 66 capital reduction + NCLT approval chahiye. Patron dono routes advise karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Delay Your Capital Increase &ndash; Investment Timelines Are Non-Negotiable</h2>
            <div class="content-text">
                
                <p>Authorised capital change is often a prerequisite for share allotment. A Powai startup with a VC term sheet requiring closing within 45 days must complete capital increase, share allotment, and PAS-3 filing within that window. Missing the timeline can mean: investment falling through, breach of term sheet conditions, and loss of favourable valuation. The 30-day SH-7 filing deadline means every day of delay reduces the buffer.</p>
                <p><strong>Start your capital increase today &ndash; <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20authorised%20capital%20change%20in%20Mumbai." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get End-to-End Authorised Capital Change in Mumbai</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Change in authorised capital in Mumbai is a fundamental corporate action &ndash; from Powai startups raising angel and VC rounds to BKC MNC subsidiaries receiving parent equity, from Fort holding companies restructuring investments to Andheri MIDC manufacturers funding expansion.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Mumbai office at Marine Lines &ndash; adjacent to ROC Mumbai Everest House &ndash; provides end-to-end services: advisory on optimal capital structure, board resolution and EGM documentation, MOA alteration, MCA V3 filing, stamp duty computation with NOCIL ruling, ROC fee verification, and post-approval share allotment support.</p>
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">With offices in Pune, Mumbai, Delhi, and Gurugram, 10,000+ businesses served, and 4.9 Google rating, Patron Accounting LLP delivers fast, accurate corporate compliance across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20authorised%20capital%20change%20in%20Mumbai.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Authorised Capital Change Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting handles authorised capital changes in major cities with local ROC coordination and state stamp duty expertise.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;">
                        <div class="pa-block-title">Change in Authorised Capital in Other Cities</div>
                        <div class="pa-block-sub">Professional MCA filing across India</div>
                        <div class="pa-city-grid">
                            <a href="/change-in-authorised-capital/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                            <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                            <a href="/change-in-authorised-capital/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                            <a href="/change-in-authorised-capital/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                        </div>
                    </div>
                    <div class="pa-city-block">
                        <div class="pa-block-title">Related Services in Mumbai</div>
                        <div class="pa-block-sub">End-to-end corporate compliance</div>
                        <div class="pa-cross-grid">
                            <a href="/private-limited-company-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/income-tax-return/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/startup-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/trademark-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Mumbai</div></div></a>
                            <a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Mumbai</div></div></a>
                        </div>
                    </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 24 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">24 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 24 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This content is reviewed bi-annually for accuracy of Companies Act provisions, ROC fee slabs, and Maharashtra stamp duty rates. Freshness Tier: 2.</p>
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
    // CONFIGURATION — Update these values
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
            console.log('[Testimonials] No Google API key set — using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API — using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews — using fallback.');
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
        // Static cards already rendered — init Slick immediately
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
