
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
    <title>ITR for Salary 2026: CA-Assisted Filing | Patron Accounting</title>
    <meta name="description" content="File income tax return for salary income in 2026. CA support for Form 16, old vs new regime, TDS refund, and multiple employers. From Rs. 499.">
    <link rel="canonical" href="/itr-for-salaries">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ITR for Salary 2026: CA-Assisted Filing | Patron Accounting">
    <meta property="og:description" content="File income tax return for salary income in 2026. CA support for Form 16, old vs new regime, TDS refund, and multiple employers. From Rs. 499.">
    <meta property="og:url" content="/itr-for-salaries">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ITR for Salary 2026: CA-Assisted Filing | Patron Accounting">
    <meta name="twitter:description" content="File income tax return for salary income in 2026. CA support for Form 16, old vs new regime, TDS refund, and multiple employers. From Rs. 499.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "ITR for Salary: CA-Assisted Filing",
          "description": "File income tax return for salary income in 2026. CA support for Form 16, old vs new regime, TDS refund, and multiple employers. From Rs. 499.",
          "url": "https://www.patronaccounting.com/itr-for-salaries",
          "serviceType": "ITR for Salary: CA-Assisted Filing",
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
            "url": "https://www.patronaccounting.com/itr-for-salaries",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "3",
              "maxPrice": "75000",
              "priceCurrency": "INR"
            }
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.patronaccounting.com/" },
            { "@type": "ListItem", "position": 2, "name": "Income Tax Return Filing", "item": "https://www.patronaccounting.com/income-tax-return" },
            { "@type": "ListItem", "position": 3, "name": "ITR for Salary", "item": "https://www.patronaccounting.com/itr-for-salaries" }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which ITR form should a salaried employee file?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-1 (Sahaj) if total income up to Rs 50 lakh from salary, one house property, interest, and LTCG under Section 112A up to Rs 1.25 lakh (new AY 2026-27 rule). ITR-2 if income exceeds Rs 50 lakh, capital gains above Rs 1.25 lakh, multiple house properties, foreign income, or company director. ITR-3 if you also have freelance or business income."
              }
            },
            {
              "@type": "Question",
              "name": "Is salary up to Rs 12.75 lakh tax-free in FY 2025-26?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, under the new tax regime. Rs 75,000 standard deduction reduces taxable income to Rs 12 lakh, which attracts Rs 60,000 tax - fully offset by the Section 87A rebate. Net tax = zero. This rebate does NOT apply to income taxed at special rates (capital gains under Section 111A/112A)."
              }
            },
            {
              "@type": "Question",
              "name": "New regime or old regime - which is better for salaried employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Depends on your total deductions. New regime wins for most employees without large HRA, home loan, and 80C deductions. Old regime wins if total deductions (HRA + 80C + home loan interest + 80D + NPS + LTA) exceed approximately Rs 3.75 lakh for income around Rs 15 lakh. Always compute both on actual numbers before deciding."
              }
            },
            {
              "@type": "Question",
              "name": "I changed jobs mid-year with two Form 16s. How do I file?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Collect Form 16 from both employers. Add salary entries separately in ITR-1/ITR-2. Cross-check all TDS against Form 26AS. Claim each deduction only once from your own proofs. If combined income pushes you into a higher slab with insufficient TDS, pay balance as self-assessment tax using Challan 280 before filing. Use Form 12B for future job changes to avoid this."
              }
            },
            {
              "@type": "Question",
              "name": "Can I claim HRA exemption if my employer did not include it in Form 16?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Independently calculate HRA exemption using the Section 10(13A) formula (least of: actual HRA, 50%/40% of basic+DA, rent minus 10% of basic+DA). Claim directly in ITR under Exempt Allowances. Retain rent receipts, rent agreement, and landlord PAN (mandatory if rent exceeds Rs 1 lakh/year). No need to correct Form 16 for this."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form 10E and why must it be filed before ITR for salary arrears?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 10E is mandatory for claiming Section 89 tax relief on salary arrears (DA revision, pay commission, delayed increments). It prevents higher tax when arrears for earlier years are received in the current year. The CPC automatically disallows Section 89 relief and raises a tax demand if Form 10E is not filed first. File on incometaxindia.gov.in before submitting ITR."
              }
            },
            {
              "@type": "Question",
              "name": "Salary wale ka ITR kaise bhare aur Form 16 se kya fill karna hota hai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form 16 Part A se TDS details aur Part B se salary breakup aur deductions fill hote hain. Pehle Form 26AS aur AIS se match karein. Naya ya purana regime choose karein. HRA, 80C, 80D deductions claim karein. ITR-1 ya ITR-2 file karein incometax.gov.in par. Aadhaar OTP se e-verify karein. Patron Accounting Rs 499 se shuru. Call: +91 945 945 6700."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')

<div class="breadcrumb-wrap" style="max-width:1200px;margin:0 auto;padding:6px 20px 0;">
@include('partials.breadcrumbs', ['items' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Income Tax Return Filing', 'url' => '/income-tax-return'],
    ['name' => 'ITR for Salary', 'url' => '/itr-for-salaries'],
]])
</div>

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
                        Income Tax Return (ITR) Filing for Salaried Employees in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">01 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax-Free Income:</span> Salary up to Rs 12.75 lakh effectively tax-free under new regime (FY 2025-26). Rs 75,000 standard deduction + Rs 60,000 Section 87A rebate. Net tax = zero.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>New vs Old Regime:</span> New regime default with 7 slabs (Nil to 30%). Old regime wins if total deductions (HRA + 80C + home loan + 80D) exceed Rs 3.75 lakh for income around Rs 15 lakh. Compare both.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Form 16 + AIS:</span> Form 16 is the starting point but must be cross-verified against Form 26AS and AIS before filing. Mismatches trigger automatic Section 143(1) notices from CPC.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Fee:</span> From Rs 499 for ITR-1/ITR-2. Due: 31 July 2026. Belated: 31 Dec 2026 (Rs 5,000 fee). Revised: 31 Mar 2027 (Budget 2026 extension). ITR-U: within 24 months.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">50,000+ salaried returns filed. 4.9/5 Google Rating. 500+ reviews. 100% regime comparison for every client. Pune, Mumbai, Delhi, Gurugram.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Salary%20ITR%20Enquiry&body=Hello%2C%0A%0AI%20need%20salary%20ITR%20filing.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20ITR%20for%20Salary%20Income.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Salary ITR',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'itr-for-salary', 'label' => 'Salary ITR', 'selected' => true, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-professionals', 'label' => 'Professional ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-business', 'label' => 'ITR for Business', 'selected' => false, 'disabled' => false],
                            ['value' => 'itr-for-capital-gains', 'label' => 'Capital Gains ITR', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-notice', 'label' => 'Income Tax Notice', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">I changed jobs twice in FY 2024-25 and had three Form 16s. Patron consolidated everything, identified a Rs 12,000 tax shortfall I would have missed, and helped me pay it before filing. The regime comparison showed new regime saved me Rs 28,000.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit S.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Professional, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My employer incorrectly computed my HRA exemption. Patron's CA recalculated it correctly using the three-part formula, saved me Rs 45,000 in additional tax, and reconciled my Form 26AS before submitting my ITR. Outstanding service.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya M.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">MNC Employee, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Very proficient and professional staff. As a government employee receiving DA arrears, I needed Section 89 relief. Patron filed Form 10E first and then the ITR-1 with correct arrear relief claimed. No notice, no demand. Highly recommended.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram S.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Govt Employee, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had salary income plus ESOP gains from my previous startup. Patron handled the perquisite taxation from Form 16, computed LTCG on the ESOP share sale under Section 112A, and filed ITR-2 with correct Schedule CG. The AIS reconciliation caught a dividend entry I had missed.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ankit K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Startup Employee, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron does my family's ITR every year - my own salary ITR plus my wife's salary ITR. The old vs new regime comparison is done individually for each of us. This year they identified that old regime was better for me (large home loan) but new regime was better for my wife. Saved us over Rs 65,000 combined.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Suresh M.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Bank Manager, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>File your salary ITR with expert CA support. Form 16 verification, regime comparison, TDS refund from Rs 499.</p>
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
            <a href="#what-section" class="toc-btn">Salary Taxation</a>
            <a href="#who-section" class="toc-btn">New vs Old Regime</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">10-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Common Mistakes</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Due Dates</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Patron vs DIY</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Salary ITR Filing - Guide for AY 2026-27</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Salary ITR Services at a Glance</strong></p>
                    <p>Salaried income taxed under 'Income from Salaries'. ITR-1 (Sahaj) for salary up to Rs 50 lakh with LTCG up to Rs 1.25 lakh. ITR-2 for higher income or capital gains. New regime: salary up to Rs 12.75 lakh tax-free (Rs 75,000 SD + Rs 60,000 Section 87A rebate). Old regime wins if deductions exceed Rs 3.75 lakh. Due: 31 July 2026. From Rs 499.</p>
                </div>
                <p>For over 6 crore salaried taxpayers in India, filing ITR is both a compliance obligation and a strategic financial decision. With the new tax regime as default for FY 2025-26, every salaried employee faces a choice: stay with lower rates and simpler structure, or opt for the old regime with HRA, 80C, and home loan deductions. Getting this right can mean a difference of thousands to lakhs in annual tax.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>ITR Form</td><td>ITR-1 (Sahaj) up to Rs 50 lakh + LTCG up to Rs 1.25 lakh; ITR-2 for higher income/capital gains/foreign income</td></tr>
<tr><td>Tax-Free Salary (New Regime)</td><td>Rs 12.75 lakh (Rs 75,000 SD + Rs 60,000 Section 87A rebate = zero tax)</td></tr>
<tr><td>New vs Old Regime</td><td>New regime default. Old wins if deductions (HRA+80C+home loan+80D) exceed Rs 3.75 lakh at Rs 15 lakh income</td></tr>
<tr><td>Form 16</td><td>TDS certificate from employer. Part A: TDS deposited. Part B: salary breakdown + deductions. Must match 26AS/AIS</td></tr>
<tr><td>Due Date AY 2026-27</td><td>31 July 2026 (non-audit). Belated: 31 Dec 2026. Revised: 31 Mar 2027 (Budget 2026 extension)</td></tr>
<tr><td>Multiple Employers</td><td>Add all Form 16s. Consolidate TDS. Claim deductions once. Pay self-assessment tax if shortfall</td></tr>
<tr><td>Patron Fee</td><td>Starting from Rs 499</td></tr>
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
                <h2 class="section-title">How Salary Income Is Taxed in India</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Salary income is taxed under the head <strong>'Income from Salaries'</strong> under the <strong>Income Tax Act, 1961</strong>. It covers basic salary, DA, HRA, LTA, special allowances, bonuses, ESOPs, perquisites, pension, gratuity, and leave encashment.</p>
<p><strong>Standard Deduction:</strong> Rs 75,000 (new regime) / Rs 50,000 (old regime) - flat deduction from gross salary for all salaried employees and pensioners. Family pensioners: Rs 25,000.</p>
<p><strong>Section 87A Rebate (New Regime):</strong> Rs 60,000 for taxable income up to Rs 12 lakh. After Rs 75,000 standard deduction, salary of Rs 12.75 lakh = zero tax. Does NOT apply to capital gains at special rates.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Salary ITR:</strong></p>
                    <p><strong>Form 16:</strong> TDS certificate from employer (Section 203). Part A: TDS deposited (TRACES-generated). Part B: salary breakup, exemptions, deductions, net taxable income. Issued by 15 June.</p>
<p><strong>Section 115BAC (New Regime):</strong> Default for FY 2025-26. 7 slabs: Nil to 30%. Standard deduction Rs 75,000. Rs 12.75 lakh tax-free. Limited deductions but lower rates.</p>
<p><strong>HRA Exemption (Section 10(13A)):</strong> Old regime only. Least of: actual HRA, 50%/40% of basic+DA, rent paid minus 10% of basic+DA. Landlord PAN required if rent > Rs 1 lakh/year.</p>
<p><strong>AIS:</strong> Annual Information Statement - captures salary, interest, dividends, property, MF/equity transactions. Must reconcile with ITR before filing.</p>
<p><strong>Form 26AS:</strong> Consolidated TDS statement. Match Part A (salary TDS) with Form 16 Part A. Mismatches = TDS credit lost.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Salary ITR -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Salary ITR</text>
                            <!-- Tax-free badge -->
                            <rect x="45" y="48" width="55" height="28" rx="5" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                            <text x="72" y="58" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Tax Free</text>
                            <text x="72" y="72" font-size="7" fill="#25D366" font-weight="800" text-anchor="middle" font-family="Arial">12.75L</text>
                            <!-- Form 16 badge -->
                            <rect x="110" y="48" width="50" height="13" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="135" y="58" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Form 16</text>
                            <!-- Regime badges -->
                            <rect x="110" y="64" width="50" height="13" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="135" y="74" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Old vs New</text>
                            <!-- 87A badge -->
                            <rect x="40" y="86" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="67" y="98" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Sec 87A 60K</text>
                            <!-- SD badge -->
                            <rect x="105" y="86" width="55" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="132" y="98" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">SD Rs 75K</text>
                            <!-- Labels -->
                            <rect x="35" y="112" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="122" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">31 Jul 2026</text>
                            <rect x="100" y="112" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="122" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ITR-1 Sahaj</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Income Tax Act, 1961</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Salary ITR</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Income Tax Act, 1961</span>
                        <strong>ITR-1 Sahaj | Sec 115BAC</strong>
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
            <h2 class="section-title">New Tax Regime vs Old Tax Regime for Salaried Employees</h2>
            <div class="content-text">
                
                <p><strong>New Regime Slabs FY 2025-26 (Section 115BAC - Default):</strong></p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Taxable Income</th><th>Rate</th></tr></thead><tbody>
<tr><td>Up to Rs 4,00,000</td><td>Nil</td></tr>
<tr><td>Rs 4,00,001 - 8,00,000</td><td>5%</td></tr>
<tr><td>Rs 8,00,001 - 12,00,000</td><td>10%</td></tr>
<tr><td>Rs 12,00,001 - 16,00,000</td><td>15%</td></tr>
<tr><td>Rs 16,00,001 - 20,00,000</td><td>20%</td></tr>
<tr><td>Rs 20,00,001 - 24,00,000</td><td>25%</td></tr>
<tr><td>Above Rs 24,00,000</td><td>30%</td></tr>
</tbody></table></div>
<p><strong>Old Regime:</strong> Nil up to Rs 2.5 lakh, 5% (2.5-5L), 20% (5-10L), 30% (above 10L). All deductions available: HRA, 80C (Rs 1.5L), 80D, home loan interest (Rs 2L), 80CCD(1B) NPS (Rs 50K), LTA, 80G.</p>
<p><strong>Break-Even Guide:</strong> Old regime wins when total deductions exceed approx Rs 2.5-3.5 lakh (Rs 10-15L income), Rs 3.75-4.5 lakh (Rs 15-20L), Rs 5-6 lakh (Rs 20-30L). Key: employees with large HRA + home loan + full 80C benefit from old regime. Run both on actual numbers.</p>
<p><strong>Deductions NOT available under new regime:</strong> HRA (10(13A)), LTA (10(5)), 80C (Rs 1.5L), 80D, 80CCD(1B), Section 24(b) self-occupied interest (Rs 2L), 80G, professional tax.</p>
<p><strong>Deductions STILL available under new regime:</strong> Standard deduction Rs 75,000, employer NPS 80CCD(2) up to 14% of basic, Agniveer corpus 80CCH, let-out property interest (no limit).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Salary ITR Filing Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Form 16 Verification and AIS Reconciliation</td><td>Cross-check Form 16 against AIS and Form 26AS. Identify TDS mismatches, missing income entries, and incorrect deductions before filing. Prevents Section 143(1) notices.</td></tr>
<tr><td>Old vs New Regime Comparison</td><td>Compute tax liability under both regimes using actual deductions and exemptions. Present clear comparison with recommendation. Never file under default without informed decision.</td></tr>
<tr><td>HRA Computation (Independent of Form 16)</td><td>Calculate HRA exemption independently using the three-part Section 10(13A) formula. Claim correct amount even if employer undercomputed in Form 16 Part B.</td></tr>
<tr><td>Multi-Employer Consolidation</td><td>Consolidate multiple Form 16s for job changers. Deduplicate deduction claims. Compute combined tax liability. Identify self-assessment tax payable before filing.</td></tr>
<tr><td>Section 89 Relief and Special Deductions</td><td>File Form 10E before ITR for salary arrears. Check Section 89A (foreign retirement), Section 80GG (no HRA but paying rent), and other applicable relief provisions.</td></tr>
<tr><td>Post-Filing Support</td><td>Monitor Section 143(1) intimation. Handle mismatch notices and demand resolution. Capital gains integration for ESOP/equity/MF/property in ITR-2.</td></tr>

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
            <h2 class="section-title">10-Step Salary ITR Filing Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">End-to-end: from Form 16 verification and regime comparison to AIS reconciliation and e-verified ITR filing.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Document Collection</h3><p class="step-description">Submit Form 16 (Part A + B), Form 26AS, AIS, salary slips, investment proofs. Our CA reviews all documents before starting return preparation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Documents received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CA review started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M80 55l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">AIS and Form 26AS Reconciliation</h3><p class="step-description">Compare Form 16 against AIS and Form 26AS. Mismatches in TDS, salary, interest, or dividends identified and flagged with recommended actions before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> AIS matched</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Mismatches flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">AIS + 26AS</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Reconciled</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Old vs New Regime Comparison</h3><p class="step-description">Compute tax liability under both regimes using your actual deductions and exemptions. Clear comparison with break-even analysis and recommendation presented.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Both regimes computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Recommendation given</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="35" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Old</text><rect x="60" y="20" width="35" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="77" y="29" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">New</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Compared</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Deduction Optimisation</h3><p class="step-description">Identify all eligible deductions under the chosen regime. If employer missed HRA, 80D, or other deductions in Form 16 Part B, correct directly in ITR with supporting documents.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Deductions maximised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 gaps fixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="55" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="57" y="33" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">80C+HRA+80D</text><rect x="35" y="45" width="45" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="57" y="54" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">OPTIMISED</text></svg></div><span class="illustration-label">Optimised</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Multi-Employer Consolidation</h3><p class="step-description">For job changers: consolidate multiple Form 16s, deduplicate deduction claims, compute combined tax liability, identify self-assessment tax payable before filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16s merged</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shortfall computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="18" width="25" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="32" y="26" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">F16-A</text><rect x="48" y="18" width="25" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="26" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">F16-B</text><rect x="76" y="18" width="25" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="88" y="26" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">F16-C</text><path d="M48 50l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Merged</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Section 89 and Special Deductions</h3><p class="step-description">File Form 10E before ITR if salary arrears received (DA revision, pay commission). Check Section 89A, Section 80GG, and other applicable relief provisions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 10E filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Relief claimed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="55" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="57" y="33" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sec 89 + 10E</text><rect x="35" y="45" width="45" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="57" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">ITR-1 or ITR-2 Preparation</h3><p class="step-description">Correct form selected based on income profile. All schedules filled. TDS credits from all deductors entered from Form 26AS. Refund or additional tax confirmed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR prepared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Schedules complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="15" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><text x="60" y="21" font-size="5" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">ITR-1 / ITR-2</text><line x1="25" y1="30" x2="90" y2="30" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="55" width="50" height="10" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.6"/><text x="55" y="63" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">PREPARED</text></svg></div><span class="illustration-label">Prepared</span><span class="step-number-large">07</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Self-Assessment Tax Payment</h3><p class="step-description">If balance tax after TDS credit, exact amount calculated and Challan 280 payment guided online before filing. Interest under 234B/234C computed if applicable.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Challan paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Challan 280</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">PAID</text></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">08</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 9</span><h3 class="step-title">E-Filing and Acknowledgment</h3><p class="step-description">ITR filed on income tax portal. E-verification via Aadhaar OTP completed. ITR-V acknowledgment shared within 24 hours of filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ITR</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">FILED</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">09</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 10</span><h3 class="step-title">Post-Filing Support</h3><p class="step-description">Monitor Section 143(1) intimation and mismatch notices. Response assistance at no additional charge for standard queries. Refund tracking included.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 143(1) monitored</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Refund tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Sec 143(1)</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REFUND</text></svg></div><span class="illustration-label">Supported</span><span class="step-number-large">10</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Salary ITR Filing</h2>
            <div class="content-text">
                
                <p><strong>Core Income Documents:</strong></p>
<ul>
<li><strong>Form 16</strong> (Part A + Part B) from each employer for FY 2025-26</li>
<li><strong>Form 26AS</strong> from incometaxindia.gov.in (consolidated TDS)</li>
<li><strong>AIS and TIS</strong> from income tax portal</li>
<li>Salary slips (April 2025 to March 2026) as backup</li>
</ul>
<p><strong>Deduction Documents (Old Regime):</strong></p>
<ul>
<li><strong>HRA:</strong> Rent receipts + landlord PAN (if rent > Rs 1 lakh/year) + rent agreement</li>
<li><strong>80C:</strong> LIC, ELSS, PPF, EPF, home loan principal, tuition fees, NSC, SCSS</li>
<li><strong>80D:</strong> Health insurance premium receipts (self, family, parents)</li>
<li><strong>Home loan:</strong> Interest certificate from bank (Section 24(b) + 80C principal)</li>
<li><strong>80CCD(1B):</strong> NPS self-contribution statement</li>
<li><strong>80G:</strong> Donation receipts with 80G registration number</li>
</ul>
<p><strong>Other:</strong> Bank statements (interest income), capital gains statements (if ITR-2), advance tax challans, previous ITR, PAN + Aadhaar.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes Salaried Employees Make in ITR Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Filing ITR-1 When ITR-2 Required</td><td>Sold shares or capital gains above Rs 1.25 lakh LTCG, foreign income, or company director requires ITR-2. Wrong form = defective return notice</td><td>CA verifies income profile and selects correct form. Zero defective return notices on our filings.</td></tr>
<tr><td>Not Reconciling AIS Before Filing</td><td>AIS pulls data from banks, brokers, third parties. Ignoring AIS mismatches leads to automatic Section 143(1) notices</td><td>Mandatory pre-filing AIS reconciliation included for every salary client. All mismatches resolved before submission.</td></tr>
<tr><td>Assuming Form 16 Is Always Correct</td><td>Employers make errors in HRA computation, regime selection, or miss deductions. Always verify Part B against investment proofs</td><td>Independent HRA computation and deduction verification. Corrections made directly in ITR with supporting documentation.</td></tr>
<tr><td>Multiple Employer TDS Shortfall</td><td>Each employer computes TDS independently. Combined income may push into higher slab creating unexpected tax liability</td><td>All Form 16s consolidated. Combined tax computed. Self-assessment tax identified and paid before filing.</td></tr>
<tr><td>Not Filing Form 10E Before Section 89</td><td>Portal auto-rejects Section 89 relief if Form 10E not filed first. Common for govt/PSU employees with DA/pay arrears</td><td>Form 10E prepared and filed before ITR for all clients with salary arrears.</td></tr>

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
            <h2 class="section-title">Salary ITR Filing Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Simple ITR-1 (single employer, no capital gains)</td><td class="table-amount">Starting Rs 499</td></tr>
<tr><td>ITR-1 with multiple employers or HRA computation</td><td class="table-amount">Starting Rs 999</td></tr>
<tr><td>ITR-2 with capital gains (equity, MF, property, ESOP)</td><td class="table-amount">Starting Rs 1,499</td></tr>
<tr><td>Salary + freelance combined ITR-3</td><td class="table-amount">Starting Rs 2,499</td></tr>
<tr><td>Section 89 relief (Form 10E + ITR)</td><td class="table-amount">Starting Rs 1,499</td></tr>
<tr><td>NRI salary ITR with foreign income</td><td class="table-amount">Starting Rs 2,999</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Salary ITR consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20salary%20ITR%20filing.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Salary ITR Due Dates - AY 2026-27</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Form 16 from employer</td><td>By 15 June 2026</td></tr>
<tr><td><strong>ITR-1/ITR-2 (non-audit)</strong></td><td><strong>31 July 2026</strong></td></tr>
<tr><td>Belated Return (Section 139(4))</td><td>31 December 2026 (Rs 1,000 or Rs 5,000 late fee)</td></tr>
<tr><td>Revised Return (Section 139(5))</td><td>31 March 2027 (Budget 2026 extension)</td></tr>
<tr><td>Updated Return (ITR-U)</td><td>Within 24 months from end of AY</td></tr>
<tr><td>E-Verification deadline</td><td>Within 30 days of filing (else treated as not filed)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key:</strong> 31 July 2026 is the standard due date for salaried ITR. Late fee: Rs 5,000 under Section 234F (Rs 1,000 if income below Rs 5 lakh). Belated returns cannot carry forward capital losses or house property losses. E-verify within 30 days or return treated as not filed. Revised return extended to 31 March 2027 per Budget 2026 amendment to Section 139(5).</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Salary ITR</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">AIS + Form 26AS Reconciliation</h3><p class="feature-text">Pre-filing mismatch check catches TDS errors before filing, not after a notice. Included for every salary client.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><h3 class="feature-title">Old vs New Regime Comparison</h3><p class="feature-text">100% of our salaried clients receive regime comparison before filing. We never file under the default regime without your informed decision.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">HRA Computation Expertise</h3><p class="feature-text">Independent three-part Section 10(13A) calculation. Correct amount claimed even if employer undercomputed in Form 16 Part B.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Multi-Employer Handling</h3><p class="feature-text">Multiple Form 16s consolidated correctly. Duplicate deduction claims prevented. Tax shortfall identified and paid before filing.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Post-Filing Notice Support</h3><p class="feature-text">Section 143(1) intimation and mismatch notice handling included. Capital gains integration for ESOP/equity/MF sales in ITR-2.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 50,000+ Salaried Employees Trust Patron</h2>
            <div class="content-text">
                
                <p><strong>50,000+ Salaried Returns Filed</strong> - ITR-1 and ITR-2 for employees, pensioners, and government employees.</p>
<p><strong>4.9/5 Google Rating</strong> from 500+ verified reviews.</p>
<p><strong>100% Regime Comparison</strong> - every salaried client gets old vs new comparison before filing.</p>
<p><strong>Average Refunds Processed</strong> within 3-6 months of timely filing.</p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting vs Self-Filing vs Generic Portals</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Patron Accounting</th><th>Self-Filing</th><th>Generic Portals</th></tr></thead>
                    <tbody>
                        <tr><td>AIS + 26AS Reconciliation</td><td>Pre-filing mismatch check</td><td>Manual - most skip it</td><td>Auto-flag, no resolution</td></tr>
<tr><td>Old vs New Regime</td><td>Included for every client</td><td>Available if you know</td><td>Available on paid plans</td></tr>
<tr><td>Multi-Employer Form 16</td><td>Handled by CA</td><td>Possible but error-prone</td><td>Supported with guidance</td></tr>
<tr><td>HRA Computation</td><td>Full independent calculation</td><td>Must calculate manually</td><td>May use Form 16 figure</td></tr>
<tr><td>Section 89 (Form 10E)</td><td>CA prepares Form 10E first</td><td>Must know to file first</td><td>Usually add-on service</td></tr>
<tr><td>Capital Gains (ESOP, equity)</td><td>ITR-2 with full schedules</td><td>Complex, high error risk</td><td>Supported on premium</td></tr>
<tr><td>Post-Filing Support</td><td>Included</td><td>Self-managed</td><td>Charged separately</td></tr>
<tr><td>Starting Price</td><td>From Rs 499</td><td>Free (complexity risk)</td><td>Rs 499-2,999+</td></tr>

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
            <h2 class="section-title">Related Tax Filing Services</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/income-tax-return">Income Tax Return</a></strong> - Complete ITR services for all income types.</li>
<li><strong><a href="/itr-for-professionals">ITR for Professionals</a></strong> - Professional and freelancer ITR filing.</li>
<li><strong><a href="/itr-for-business">ITR for Business</a></strong> - Proprietorship and partnership ITR.</li>
<li><strong><a href="/itr-for-fno-traders">ITR for F and O Traders</a></strong> - Futures and options income ITR.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Salary ITR</h2>
            <div class="content-text">
                
                <p><strong>Governing Law:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a>; Finance Act 2025.</p>
<ul>
<li><strong>Section 115BAC:</strong> New regime default. 7 slabs Nil to 30%. Standard deduction Rs 75,000.</li>
<li><strong>Section 87A:</strong> Rs 60,000 rebate (new regime) for income up to Rs 12 lakh. Rs 12,500 (old regime) up to Rs 5 lakh.</li>
<li><strong>Section 10(13A):</strong> HRA exemption (old regime only). 50%/40% of basic + DA formula.</li>
<li><strong>Section 80C:</strong> Rs 1.5 lakh (old regime). PPF, ELSS, LIC, EPF, home loan principal, tuition.</li>
<li><strong>Section 24(b):</strong> Home loan interest Rs 2 lakh (self-occupied, old regime). Unlimited for let-out.</li>
<li><strong>Section 89:</strong> Relief for salary arrears. Form 10E mandatory prerequisite.</li>
<li><strong>Section 234F:</strong> Late fee Rs 5,000 (Rs 1,000 if income below Rs 5 lakh).</li>
<li><strong>Section 139(5):</strong> Revised return deadline extended to 31 March 2027 (Budget 2026).</li>
</ul>
<p><strong>Due date:</strong> 31 July 2026. <strong>Portal:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">incometax.gov.in</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Salary ITR</h2>
                    <p class="faq-expanded__lead">Answers about ITR form, tax-free income, regime comparison, HRA, multiple employers, due dates, and Form 10E.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Salary ITR'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ITR form should a salaried employee file?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 (Sahaj) if total income up to Rs 50 lakh from salary, one house property, interest, and LTCG under Section 112A up to Rs 1.25 lakh (new AY 2026-27 rule). ITR-2 if income exceeds Rs 50 lakh, capital gains above Rs 1.25 lakh, multiple house properties, foreign income, or company director. ITR-3 if you also have freelance or business income.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is salary up to Rs 12.75 lakh tax-free in FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>Yes, under the new tax regime. Rs 75,000 standard deduction reduces taxable income to Rs 12 lakh, which attracts Rs 60,000 tax - fully offset by the Section 87A rebate. Net tax = zero. This rebate does NOT apply to income taxed at special rates (capital gains under Section 111A/112A).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">New regime or old regime - which is better for salaried employees?</h3>
                        <div class="faq-expanded__a"><p>Depends on your total deductions. New regime wins for most employees without large HRA, home loan, and 80C deductions. Old regime wins if total deductions (HRA + 80C + home loan interest + 80D + NPS + LTA) exceed approximately Rs 3.75 lakh for income around Rs 15 lakh. Always compute both on actual numbers before deciding.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">I changed jobs mid-year with two Form 16s. How do I file?</h3>
                        <div class="faq-expanded__a"><p>Collect Form 16 from both employers. Add salary entries separately in ITR-1/ITR-2. Cross-check all TDS against Form 26AS. Claim each deduction only once from your own proofs. If combined income pushes you into a higher slab with insufficient TDS, pay balance as self-assessment tax using Challan 280 before filing. Use Form 12B for future job changes to avoid this.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I claim HRA exemption if my employer did not include it in Form 16?</h3>
                        <div class="faq-expanded__a"><p>Yes. Independently calculate HRA exemption using the Section 10(13A) formula (least of: actual HRA, 50%/40% of basic+DA, rent minus 10% of basic+DA). Claim directly in ITR under Exempt Allowances. Retain rent receipts, rent agreement, and landlord PAN (mandatory if rent exceeds Rs 1 lakh/year). No need to correct Form 16 for this.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is Form 10E and why must it be filed before ITR for salary arrears?</h3>
                        <div class="faq-expanded__a"><p>Form 10E is mandatory for claiming Section 89 tax relief on salary arrears (DA revision, pay commission, delayed increments). It prevents higher tax when arrears for earlier years are received in the current year. The CPC automatically disallows Section 89 relief and raises a tax demand if Form 10E is not filed first. File on incometaxindia.gov.in before submitting ITR.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Salary wale ka ITR kaise bhare aur Form 16 se kya fill karna hota hai?</h3>
                        <div class="faq-expanded__a"><p>Form 16 Part A se TDS details aur Part B se salary breakup aur deductions fill hote hain. Pehle Form 26AS aur AIS se match karein. Naya ya purana regime choose karein. HRA, 80C, 80D deductions claim karein. ITR-1 ya ITR-2 file karein incometax.gov.in par. Aadhaar OTP se e-verify karein. Patron Accounting Rs 499 se shuru. Call: +91 945 945 6700.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Tax-free salary under new regime?</strong> A: Rs 12.75 lakh (Rs 75,000 SD + Rs 60,000 Section 87A rebate = zero tax).</p>
<p><strong>Q: ITR form for salaried?</strong> A: ITR-1 (up to Rs 50L + LTCG up to Rs 1.25L). ITR-2 for higher income/capital gains.</p>
<p><strong>Q: Due date?</strong> A: 31 July 2026. Belated: 31 Dec 2026 (Rs 5K fee). Revised: 31 Mar 2027 (Budget 2026 extension).</p>
<p><strong>Q: Old regime break-even?</strong> A: Deductions above Rs 3.75 lakh (at Rs 15L income) = old regime wins. Below = new regime.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Due Date: 31 July 2026 - File On Time for Maximum Refund</h2>
            <div class="content-text">
                
                <p>Late fee: Rs 5,000 under Section 234F (Rs 1,000 if income below Rs 5 lakh). Belated returns cannot carry forward capital losses. E-verify within 30 days or return treated as not filed. Revised return deadline: 31 March 2027 (Budget 2026 extension).</p>
<p>AIS mismatches trigger automatic Section 143(1) notices. Multiple employer TDS shortfall creates unexpected tax demand. Form 10E must be filed before ITR for Section 89 arrear relief.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20salary%20ITR%20filing.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your Salary ITR with Expert CA Support</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Salary ITR filing is more than a compliance obligation - it is a strategic decision between tax regimes, deduction optimization, and TDS refund processing that can save thousands to lakhs.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting handles every dimension - Form 16 verification, AIS reconciliation, regime comparison, HRA computation, multi-employer consolidation, Section 89 relief, and post-filing notice support.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">50,000+ salaried returns filed. 4.9/5 Google Rating. 100% regime comparison. Pune, Mumbai, Delhi, Gurugram. From Rs 499.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20salary%20ITR%20filing.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Salary%20ITR&body=Hello%2C%0A%0AI%20need%20salary%20ITR%20filing.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Salary ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert CA-assisted salary ITR filing with Form 16 verification, regime comparison, and AIS reconciliation.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/itr-for-salary/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-salary/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/itr-for-salary/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/itr-filing-for-salary/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Tax filing and compliance</div><div class="pa-cross-grid"><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-professionals" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Professionals</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-business" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for Business</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-fno-traders" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ITR for F and O</div><div class="pa-card-sub">India</div></div></a><a href="/itr-for-capital-gains" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Capital Gains ITR</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Notice</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 01 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">01 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 (next AY) &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers ITR-1 and ITR-2 for FY 2025-26 (AY 2026-27). Slabs per Finance Act 2025. Budget 2026 changes apply from FY 2026-27. Verify at incometaxindia.gov.in.</p>
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
