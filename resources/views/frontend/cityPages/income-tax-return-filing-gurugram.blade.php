
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
    <title>Income Tax Return Gurugram - ITR Forms & Due Dates</title>
    <meta name="description" content="CA-assisted ITR filing in Gurugram for FY 2025-26. Old vs new regime analysis. ESOP taxation. Salary, capital gains, business income. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.">
    <link rel="canonical" href="/income-tax-return-filing/gurugram">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Income Tax Return Gurugram - ITR Forms & Due Dates">
    <meta property="og:description" content="CA-assisted ITR filing in Gurugram for FY 2025-26. Old vs new regime analysis. ESOP taxation. Salary, capital gains, business income. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.">
    <meta property="og:url" content="/income-tax-return-filing/gurugram">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Income Tax Return Gurugram - ITR Forms & Due Dates">
    <meta name="twitter:description" content="CA-assisted ITR filing in Gurugram for FY 2025-26. Old vs new regime analysis. ESOP taxation. Salary, capital gains, business income. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Income Tax Return Gurugram - ITR Forms & Due Dates",
      "description": "CA-assisted ITR filing in Gurugram for FY 2025-26. Old vs new regime analysis. ESOP taxation. Salary, capital gains, business income. Serving Cyber City, Sohna Rd. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/income-tax-return-filing/gurugram",
      "serviceType": "Income Tax Return Gurugram - ITR Forms & Due Dates",
      "areaServed": {
        "@type": "City",
        "name": "Gurugram",
        "containedInPlace": {
          "@type": "State",
          "name": "Haryana"
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
        "url": "https://www.patronaccounting.com/income-tax-return-filing/gurugram",
        "priceSpecification": {
          "@type": "PriceSpecification",
          "minPrice": "999",
          "maxPrice": "4999",
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
          "name": "Income Tax Return Filing",
          "item": "https://www.patronaccounting.com/income-tax-return-filing"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Income Tax Return Gurugram - ITR Forms & Due Dates",
          "item": "https://www.patronaccounting.com/income-tax-return-filing/gurugram"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do I file ITR in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Gather Form 16, Form 26AS, AIS from incometax.gov.in. Choose old or new regime (Patron recommends based on your salary structure). Select correct ITR form. File on incometax.gov.in and e-verify via Aadhaar OTP. Patron's Gurugram office handles the complete process from document collection to refund tracking."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ITR filing deadline for FY 2025-26?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 and ITR-2: 31 July 2026. ITR-3 and ITR-4: 31 August 2026 (new extension). Tax audit: 31 October 2026. Transfer pricing: 30 November 2026. Belated: 31 December 2026 with late fee up to Rs 5,000 and interest. Revised: 31 March 2027 (extended from earlier December deadline)."
          }
        },
        {
          "@type": "Question",
          "name": "Which ITR form should I use?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ITR-1 for salaried up to Rs 50 lakh with one house property and other sources. ITR-2 for salary above Rs 50 lakh, capital gains, ESOPs, NRI income, or multiple properties. ITR-3 for business or professional income. ITR-4 for presumptive taxation under 44AD/44ADA. Patron selects after reviewing your complete income profile."
          }
        },
        {
          "@type": "Question",
          "name": "Should I choose old or new tax regime?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If total deductions (HRA + home loan + 80C + 80D + NPS + other) exceed approximately Rs 3.75-4 lakh, old regime typically saves more. New regime is better with few deductions - income up to Rs 12 lakh is tax-free under Section 87A. Patron computes both with your actual Gurugram salary numbers and shows the exact difference."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are needed for ITR filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Form 16 from employer, Form 26AS and AIS/TIS from incometax.gov.in, PAN and Aadhaar (linked), bank statements, investment proofs (80C, 80D, home loan), capital gains statements, ESOP/RSU statements if applicable, and rental details. Form 16 plus AIS reconciliation covers 90% of filing for salaried professionals."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for late ITR filing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Section 234F late fee: Rs 1,000 (income up to Rs 5L) or Rs 5,000 (above). Section 234A interest at 1% per month on unpaid tax. Loss of certain loss carry-forward rights. Cannot opt for old regime after due date for business income. Higher TDS rates for non-filers."
          }
        },
        {
          "@type": "Question",
          "name": "Can NRIs file ITR in Gurugram?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. NRIs with Indian income (Gurugram rental, property sale capital gains, interest) must file in India. ITR-2 or ITR-3 depending on sources. Can claim excess TDS refunds. DTAA benefits available. NRIs generally cannot choose old tax regime. Patron files remotely for NRIs with Gurugram property."
          }
        },
        {
          "@type": "Question",
          "name": "How do I report capital gains from Gurugram property?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Report in ITR-2 or ITR-3 under Schedule CG. Long-term (held over 2 years): 12.5% without indexation from FY 2024-25. Short-term: at slab rates. Claim Section 54 exemption if reinvesting within 2 years, or Section 54EC bonds within 6 months. Patron computes gains and advises on exemption strategy."
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
                        Income Tax Return (ITR) Filing in Gurugram: CA-Assisted Filing for Salaried, Business and Capital Gains Income
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">13 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Form 16, Form 26AS/AIS, PAN, Aadhaar, bank statements, investment proofs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> From Rs 999 (salaried ITR-1) | From Rs 2,999 (ITR-2 capital gains) | From Rs 4,999 (ITR-3 business)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Every individual, HUF, firm, LLP, company with taxable income or meeting mandatory filing criteria</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> ITR-1/ITR-2: 31 July 2026 | ITR-3/ITR-4: 31 August 2026 (FY 2025-26, AY 2026-27)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | Visit our Gurugram office or get started online</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ITR%20filing%20in%20Gurugram%20for%20FY%202025-26.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                                            'service'  => 'ITR Filing in Gurugram',
                                            'city'     => 'Gurugram',
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron saved me Rs 47,000 by computing both regimes properly. With my Cyber City salary, HRA, and home loan, the old regime was significantly better. Previous year I had filed on a DIY platform under new regime and overpaid without realising it.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rohan Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Engineering, IT Company, Cyber City</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My RSUs from a US-listed company were a taxation nightmare. Patron computed the perquisite correctly, applied the foreign tax credit, reconciled everything with AIS, and filed a clean ITR-2. No demand notice this year - first time in three years.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Aggarwal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Product Manager, MNC, DLF Phase 3</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Sold my Golf Course Road flat for Rs 2.8 crore. Patron computed the capital gains, advised on Section 54 reinvestment timeline, and filed the ITR with proper Schedule CG. The exemption planning alone saved me over Rs 15 lakh in capital gains tax.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Khanna</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">NRI Property Seller, Golf Course Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a freelance consultant on Sohna Road, I kept missing advance tax deadlines and accumulating interest. Patron set up quarterly reminders, computed each instalment, and handles my ITR-3 every year. The year-round engagement is worth every rupee.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Malhotra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Freelance Consultant, Sohna Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>CA-assisted ITR filing with old vs new regime analysis, ESOP taxation, and capital gains advisory for Gurugram taxpayers.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is ITR</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">ITR Form Guide</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Income Tax Return Filing in Gurugram - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ITR Filing in Gurugram Services at a Glance</strong></p>
                    <p>ITR filing is the annual declaration of income, deductions, and tax liability through incometax.gov.in. For FY 2025-26 (AY 2026-27), the new tax regime is default - zero tax on income up to Rs 12 lakh (Section 87A rebate Rs 60,000) and revised slabs. Deadline: 31 July 2026 for ITR-1/ITR-2, 31 August 2026 for ITR-3/ITR-4 (new extension). Missing it attracts Rs 5,000 late fee and 1% monthly interest.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Law</td><td>Income Tax Act, 1961 (Income-tax Bill 2025 from AY 2026-27)</td></tr><tr><td>Authority</td><td>Income Tax Department | CPC Bengaluru | CIT/PCIT Gurugram</td></tr><tr><td>E-Filing Portal</td><td>incometax.gov.in</td></tr><tr><td>FY / AY</td><td>FY 2025-26 / AY 2026-27</td></tr><tr><td>Default Regime</td><td>New Tax Regime (opt for old via ITR / Form 10-IEA)</td></tr><tr><td>Section 87A Rebate</td><td>Rs 60,000 (income up to Rs 12L = zero tax)</td></tr><tr><td>Standard Deduction</td><td>Rs 75,000 (salaried)</td></tr><tr><td>Due Dates</td><td>ITR-1/2: 31 Jul 2026 | ITR-3/4: 31 Aug 2026 | Audit: 31 Oct</td></tr><tr><td>Late Fee</td><td>Up to Rs 5,000 (Section 234F) + 1%/month interest (234A)</td></tr></tbody></table></div></p>
                </div>
                <p>Gurugram has one of India's highest concentrations of salaried professionals. DLF Cyber City houses IT, consulting, BFSI, and MNC employees earning Rs 7 lakh to Rs 1 crore+. Tech employees with ESOPs/RSUs face complex dual taxation. NRIs own property on Golf Course Road and Sohna Road. Freelancers and business owners in Udyog Vihar and Manesar need ITR-3. The FY 2025-26 Budget brings major changes. Learn more about <a href="/income-tax-return">Income Tax Return Filing across India</a>.</p>
                <p>Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted ITR filing with personalised old-vs-new regime analysis, ESOP/RSU computation, capital gains calculation, and year-round tax support bundled with <a href="/accounting-services">Accounting Services</a> and advance tax planning.</p>
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
                <h2 class="section-title">What Is Income Tax Return Filing</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Income Tax Return (ITR) filing is the annual process of declaring your total income from all sources (salary, house property, capital gains, business/profession, other sources), claiming eligible deductions and exemptions, computing net tax liability, and submitting this declaration through incometax.gov.in using the prescribed ITR form.</p><p>The return must be filed for each financial year during the following assessment year. For income earned during FY 2025-26 (April 2025 to March 2026), the return is filed during AY 2026-27. The ITR-V must be e-verified via Aadhaar OTP, net banking, or DSC within 30 days. CPC Bengaluru processes the return and issues the Section 143(1) intimation.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ITR Filing in Gurugram:</strong></p>
                    <p><strong>FY / AY:</strong> Financial Year (income earned) / Assessment Year (return filed). Current: FY 2025-26 / AY 2026-27.</p><p><strong>New Tax Regime:</strong> Default from FY 2023-24. Lower rates, fewer deductions. Section 87A rebate makes income up to Rs 12 lakh tax-free for FY 2025-26.</p><p><strong>Old Tax Regime:</strong> Optional. Higher rates but allows deductions: 80C (Rs 1.5L), 80D, HRA, home loan interest. Must opt in via ITR or Form 10-IEA.</p><p><strong>AIS / TIS:</strong> Annual Information Statement showing all financial transactions against PAN. Must reconcile with ITR to prevent mismatch notices.</p><p><strong>Section 234F:</strong> Late fee - Rs 1,000 (income up to Rs 5L) or Rs 5,000 (above Rs 5L).</p><p><strong>Section 234A/B/C:</strong> Interest on unpaid tax: 234A (1%/month late filing), 234B (advance tax shortfall), 234C (advance tax deferment).</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITR Filing in Gurugram</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FY 2025-26</span>
                        <strong>ITR Filing</strong>
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
            <h2 class="section-title">Who Needs ITR Filing in Gurugram</h2>
            <div class="content-text">
                
                <p><strong>Salaried Professionals (Cyber City, Golf Course Road):</strong> Every employee earning above Rs 3 lakh (new regime) or Rs 2.5 lakh (old). Salary above Rs 50 lakh requires ITR-2. Old-vs-new regime choice is critical for high HRA/home loan structures typical in Gurugram.</p><p><strong>IT Employees with ESOPs/RSUs:</strong> Tech employees at Gurugram MNCs and startups face dual taxation: perquisite on exercise/vesting plus capital gains on sale. AIS shows significant transactions requiring reconciliation. Patron specialises in ESOP/RSU taxation.</p><p><strong>Freelancers and Consultants:</strong> Independent professionals on Sohna Road and Golf Course Extension Road file ITR-3. Advance tax quarterly if liability exceeds Rs 10,000. Many miss deadlines attracting Section 234B/234C interest.</p><p><strong>Business Owners and Traders:</strong> Proprietors and partners in Udyog Vihar and Manesar file ITR-3 or ITR-4 (presumptive). New ITR-3/ITR-4 deadline: 31 August 2026.</p><p><strong>NRIs with Gurugram Income:</strong> Rental property on Golf Course Road/Sohna Road, property sale capital gains, TDS refund claims. NRIs generally cannot choose old regime.</p><p><strong>Property Sellers:</strong> Substantial capital gains from Golf Course Road/DLF property (Rs 50L to Rs 5 Cr+). Section 54/54EC exemptions require careful planning.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">8 ITR Filing Services Included in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Old vs New Regime Analysis</td><td>Personalised dual-regime computation using actual salary structure (CTC, HRA, home loan, 80C, 80D, NPS). Exact tax difference with recommendation for your Gurugram salary.</td></tr><tr><td>Form 16 + AIS/TIS Reconciliation</td><td>Cross-verification of Form 16 with Form 26AS, AIS, and TIS. Identifies unreported interest, TDS mismatches, and high-value AIS transactions.</td></tr><tr><td>ESOP/RSU Taxation</td><td>Perquisite computation on exercise/vesting, cost basis, capital gains on sale (LTCG/STCG), foreign tax credit for US-listed RSUs, and AIS reconciliation for ESOP transactions.</td></tr><tr><td>Capital Gains Computation</td><td>Property sale (indexation for old regime, flat rate for new), equity/MF (Rs 1.25L LTCG threshold), Section 54/54EC/54F exemption advisory for Gurugram property sellers.</td></tr><tr><td>ITR Form Selection and Filing</td><td>Correct form (ITR-1/2/3/4) based on income sources. Complete filing on incometax.gov.in with all schedules, disclosures, and e-verification.</td></tr><tr><td>Advance Tax Planning</td><td>Quarterly computation and payment guidance (June 15, Sep 15, Dec 15, Mar 15) to avoid Section 234B/234C interest. Year-round engagement.</td></tr><tr><td>Tax Notice Response</td><td>Section 143(1) intimations, Section 148 reassessment, AIS mismatch notices, defective return notices. Year-round CA support.</td></tr><tr><td>Refund Tracking</td><td>Monitoring refund status post-filing. Resolution of refund failures (bank account mismatch, ITR-V not verified, demand adjustment).</td></tr>

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
            <h2 class="section-title">6-Step ITR Filing Process in Gurugram</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">ITR is filed on the central e-filing portal incometax.gov.in. CPC Bengaluru processes all returns. CIT/PCIT Gurugram has jurisdiction. Patron's Gurugram office on Golf Course Extension Road manages the complete process from Form 16 to refund credit.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Gather Documents and Income Data</h3><p class="step-description">Patron collects: Form 16 (from your Gurugram employer), Form 26AS and AIS/TIS (from incometax.gov.in), bank interest certificates, capital gains statements (broker/DP), rental income details, ESOP/RSU exercise statements, investment proofs (80C, 80D, NPS, home loan), and other income documentation. Form 16 typically available by June 15.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AIS downloaded</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="12" width="30" height="14" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="40" y="22" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form 16</text><rect x="60" y="12" width="30" height="14" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="75" y="22" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">AIS/TIS</text><rect x="25" y="32" width="30" height="14" rx="2" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="40" y="42" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">26AS</text><rect x="60" y="32" width="30" height="14" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="75" y="42" font-size="4" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Proofs</text></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Old vs New Regime Analysis</h3><p class="step-description">Patron's CA runs personalised dual-regime computation using your actual numbers. For a Gurugram IT professional earning Rs 25 lakh with Rs 3 lakh HRA, Rs 2 lakh home loan, and Rs 1.5 lakh 80C - old regime may save Rs 30,000-50,000. Without HRA/home loan, new regime's Rs 12 lakh zero-tax wins. Patron recommends with exact figures.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Both regimes computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Savings quantified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="8" width="45" height="65" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="32" y="30" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OLD</text><text x="32" y="48" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">+Deductions</text><rect x="60" y="8" width="45" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="82" y="30" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEW</text><text x="82" y="48" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">Rs 12L Free</text></svg></div><span class="illustration-label">Regime Set</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Select Correct ITR Form</h3><p class="step-description">ITR-1 (Sahaj): Salary + one house property + other sources, up to Rs 50 lakh. Most common for Gurugram salaried. ITR-2: Salary above Rs 50L, capital gains, ESOPs, NRI, multiple properties. ITR-3: Business/profession (freelancers, consultants). ITR-4 (Sugam): Presumptive (44AD/44ADA). Patron selects based on your complete income profile.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Income mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="8" width="28" height="28" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="19" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-1</text><rect x="35" y="8" width="28" height="28" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="49" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-2</text><rect x="65" y="8" width="28" height="28" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="1"/><text x="79" y="25" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-3</text><rect x="95" y="8" width="23" height="28" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="107" y="25" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ITR-4</text></svg></div><span class="illustration-label">Form Picked</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Compute Income, Deductions, and Tax</h3><p class="step-description">Total income under five heads: salary, house property, capital gains, business/profession, other sources. Apply deductions (Chapter VI-A for old regime). Calculate tax under chosen regime. Adjust TDS/advance tax/self-assessment tax. Determine refund or balance payable. For Gurugram property sale: indexation and Section 54/54EC exemptions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Tax computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund/payable determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Tax Optimised</text></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File ITR on incometax.gov.in and E-Verify</h3><p class="step-description">Patron files the ITR on the e-filing portal with all schedules and disclosures. E-verification via Aadhaar OTP (recommended). ITR-V acknowledgment generated. For ITR-1/2: file before 31 July 2026. For ITR-3/4: before 31 August 2026 (new extension).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ITR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>E-verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">incometax.gov.in</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Aadhaar OTP</text><circle cx="60" cy="58" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M56 58l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Post-Filing: Refund Tracking and Notice Response</h3><p class="step-description">CPC Bengaluru processes return and issues Section 143(1) intimation. Patron tracks processing status and refund credit. If intimation shows demand due to TDS mismatch or incorrect deduction, Patron files online rectification or response. Year-round CA support for any tax notices.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Refund tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Notices handled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Refund</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">CPC 143(1) Processed</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Credited to Bank</text></svg></div><span class="illustration-label">Refund Done</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ITR Filing in Gurugram</h2>
            <div class="content-text">
                
                <ul><li>Form 16 from employer - TDS certificate showing salary, deductions, and tax deducted</li><li>Form 26AS - annual tax credit statement from incometax.gov.in</li><li>AIS / TIS - Annual Information Statement and Taxpayer Information Summary showing all financial transactions</li><li>PAN and Aadhaar (must be linked)</li><li>Bank statements - all accounts for interest income computation</li><li>Investment proofs: 80C (PPF, ELSS, LIC), 80D (health insurance), home loan certificate, NPS statements</li><li>Capital gains statements from broker/DP (equity, mutual funds)</li><li>ESOP/RSU exercise statements (for tech employees)</li><li>Property sale documents (sale deed, purchase deed, registration details) for capital gains</li><li>Rental income details (rental agreement, municipal taxes paid)</li><li>Foreign income/asset details (for NRIs and FA schedule)</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Critical Tip for Gurugram Professionals:</strong> Download your AIS from incometax.gov.in and compare with Form 16 BEFORE filing. AIS may show interest, dividend, or mutual fund transactions not in Form 16. Unreconciled AIS items are the top trigger for post-filing notices. Patron reconciles all data sources before filing.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">5 Common ITR Filing Challenges in Gurugram</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Old vs New Regime Without Analysis</td><td>Gurugram professionals with high HRA (Rs 30K-1.5L/month), home loan interest (Rs 2L), and substantial 80C/80D default to new regime without computing both.</td><td>Side-by-side analysis with exact savings figures before regime choice is locked in. Savings of Rs 30,000-80,000 possible.</td></tr><tr><td>ESOP/RSU Taxation Complexity</td><td>Dual taxation: perquisite on exercise/vesting + capital gains on sale + foreign tax credit (US RSUs) + large AIS transactions. Incorrect computation = demand notices.</td><td>Specialised ESOP/RSU computation for Gurugram tech professionals covering perquisite, cost basis, gains, and FTC.</td></tr><tr><td>AIS/TIS Mismatch Notices</td><td>AIS tracks every transaction against PAN. ITR not reconciled with AIS triggers automated notices. Multiple bank/brokerage/MF accounts increase risk.</td><td>Full AIS download and transaction-level matching before filing. Prevents post-filing mismatch notices.</td></tr><tr><td>Missing Advance Tax Deadlines</td><td>Freelancers/consultants with tax liability above Rs 10,000 after TDS must pay quarterly. Missing attracts Section 234B/234C interest.</td><td>Quarterly advance tax computation and payment reminders as year-round engagement. Four instalments tracked.</td></tr><tr><td>Capital Gains from Property Sale</td><td>Golf Course Road/Sohna Road/DLF properties Rs 50L-5Cr+. LTCG at 12.5%. Section 54 reinvestment window (2 years) critical.</td><td>Pre-sale gains computation, Section 54/54EC exemption planning, and post-sale ITR filing with capital gains schedule.</td></tr>

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
            <h2 class="section-title">ITR Filing Fees in Gurugram - FY 2025-26</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (Sahaj) - Salaried up to Rs 50L</td><td>From Rs 999 (most Gurugram salaried professionals)</td></tr><tr><td>ITR-2 - Salary above Rs 50L / Capital Gains / ESOPs / NRI</td><td>From Rs 2,999 (tech employees with ESOPs, property sellers)</td></tr><tr><td>ITR-3 - Business/Profession Income</td><td>From Rs 4,999 (freelancers, consultants, business owners)</td></tr><tr><td>ITR-4 (Sugam) - Presumptive Taxation</td><td>From Rs 1,999 (small business, 44AD/44ADA)</td></tr><tr><td>Old vs New Regime Analysis</td><td>Included in all ITR packages</td></tr><tr><td>ESOP/RSU Tax Computation (add-on)</td><td>From Rs 2,999 (perquisite + gains + FTC)</td></tr><tr><td>Capital Gains - Property (add-on)</td><td>From Rs 2,999 (computation + Section 54/54EC advisory)</td></tr><tr><td>Advance Tax - Quarterly (year-round)</td><td>From Rs 1,999/year (4 quarter computations + reminders)</td></tr><tr><td>Tax Notice Response</td><td>From Rs 1,999/notice (143(1), 148, AIS mismatch)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ITR Filing in Gurugram consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ITR%20filing%20in%20Gurugram%20for%20FY%202025-26.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Filing Timeline - FY 2025-26 / AY 2026-27</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>FY 2025-26 Ends</td><td>31 March 2026</td></tr><tr><td>ITR Forms Available (Expected)</td><td>1 April 2026</td></tr><tr><td>Form 16 from Employer</td><td>By 15 June 2026</td></tr><tr><td>ITR-1 / ITR-2 Due Date</td><td>31 July 2026 (salaried, capital gains, NRI)</td></tr><tr><td>ITR-3 / ITR-4 Due Date</td><td>31 August 2026 (business/profession - NEW extension)</td></tr><tr><td>Tax Audit Report (44AB)</td><td>30 September 2026</td></tr><tr><td>ITR (Audit Cases)</td><td>31 October 2026</td></tr><tr><td>Belated Return</td><td>31 December 2026 (with late fee + interest)</td></tr><tr><td>Revised Return</td><td>31 March 2027 (extended from earlier December)</td></tr><tr><td>Updated Return (ITR-U)</td><td>Up to 48 months from end of AY</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Key FY 2025-26 Change:</strong> ITR-3 and ITR-4 due date extended from 31 July to 31 August 2026 - giving freelancers, consultants, and business owners an extra month. Revised return deadline extended to 31 March 2027. Section 87A rebate increased to Rs 60,000 making income up to Rs 12 lakh tax-free under new regime. Standard deduction increased to Rs 75,000.</p>

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
            <h2 class="section-title">Why Choose Patron for ITR Filing in Gurugram</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Old vs New Regime Expertise</h3><p class="feature-text">Not a default pick. Side-by-side computation with your actual Gurugram salary - HRA, home loan, 80C, 80D, NPS, standard deduction. You decide with exact numbers, not assumptions.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">ESOP/RSU Specialisation</h3><p class="feature-text">For Gurugram tech professionals: correct perquisite computation, cost basis, LTCG/STCG calculation, foreign tax credit, and AIS reconciliation. Where generic platforms fail.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">AIS/TIS Reconciliation</h3><p class="feature-text">Every transaction in your Annual Information Statement reconciled before filing. Prevents the mismatch notices that plague Gurugram professionals with multiple financial accounts.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Year-Round CA Engagement</h3><p class="feature-text">Not just filing season. Quarterly advance tax, AIS monitoring, tax notice response, capital gains advisory, and next-year planning. Your CA is available 12 months, not just July.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Trusted by Hyundai, Asian Paints, Bridgestone. Offices in Pune, Mumbai, Delhi, Gurugram. Patron serves Gurugram taxpayers from salaried professionals in Cyber City to business owners in Udyog Vihar.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ITR Form Selection Guide for Gurugram Taxpayers</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>ITR Form</th><th>Who Should File</th><th>Due Date (FY 2025-26)</th></tr></thead>
                    <tbody>
                        <tr><td>ITR-1 (Sahaj)</td><td>Salary + one house property + other sources, up to Rs 50L. Mid-level Cyber City employee.</td><td>31 July 2026</td></tr><tr><td>ITR-2</td><td>Salary above Rs 50L, capital gains, ESOPs/RSUs, NRI income, multiple properties. Senior IT professional, property seller.</td><td>31 July 2026</td></tr><tr><td>ITR-3</td><td>Business/profession income. Freelancer, consultant, business owner, partner in firm.</td><td>31 August 2026</td></tr><tr><td>ITR-4 (Sugam)</td><td>Presumptive taxation 44AD (up to Rs 3 Cr) or 44ADA (up to Rs 75L). Small trader, independent professional.</td><td>31 August 2026</td></tr><tr><td>ITR-5</td><td>Firms, LLPs, AOPs, BOIs. LLP in Cyber City, partnership in Manesar.</td><td>31 Jul / 31 Oct (audit)</td></tr><tr><td>ITR-6</td><td>Companies (except Section 11). Pvt Ltd in Gurugram (RoC Delhi).</td><td>31 October 2026</td></tr>

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
            <h2 class="section-title">Related Tax and Compliance Services</h2>
            <div class="content-text">
                
                <ul><li><a href="/income-tax-return">ITR Filing in India</a> - Our national income tax return service</li><li><a href="/gst-registration">GST Registration</a> - For businesses crossing GST threshold</li><li><a href="/startup-registration">Startup Registration</a> - DPIIT recognition with Section 80IAC benefits</li><li><a href="/udyam-registration">Udyam Registration</a> - MSME benefits for small businesses</li><li><a href="/trademark-registration">Trademark Registration</a> - Brand protection</li><li><a href="/accounting-services">Accounting Services</a> - Year-round bookkeeping and compliance</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for ITR Filing</h2>
            <div class="content-text">
                
                <p><strong>Governing Provisions:</strong></p><ul><li>Income Tax Act, 1961 (Income-tax Bill 2025 from AY 2026-27)</li><li>Section 139(1): Due dates - ITR-1/2: 31 Jul, ITR-3/4: 31 Aug (new), Audit: 31 Oct, TP: 30 Nov</li><li>Section 139(4): Belated return by 31 Dec. Section 139(5): Revised return by 31 Mar (extended)</li><li>Section 87A: New regime Rs 60,000 rebate (Rs 12L zero tax). Old regime Rs 12,500 (Rs 5L)</li><li>Section 234F: Late fee Rs 1,000-5,000. Section 234A/B/C: Interest 1%/month</li><li>Chapter VI-A: Old regime deductions - 80C (Rs 1.5L), 80D, 80CCD(1B), 80E</li><li>Section 54/54EC/54F: Capital gains exemptions on property sale</li></ul><p><strong>Key Portal:</strong> <a href="https://incometax.gov.in" target="_blank" rel="noopener">Income Tax E-Filing Portal (incometax.gov.in)</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - ITR Filing in Gurugram</h2>
                    <p class="faq-expanded__lead">Answers to common questions about income tax return filing in Gurugram. Call +91 945 945 6700.</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ITR Filing in Gurugram',
                        'city'     => 'Gurugram',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How do I file ITR in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Gather Form 16, Form 26AS, AIS from incometax.gov.in. Choose old or new regime (Patron recommends based on your salary structure). Select correct ITR form. File on incometax.gov.in and e-verify via Aadhaar OTP. Patron's Gurugram office handles the complete process from document collection to refund tracking.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the ITR filing deadline for FY 2025-26?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 and ITR-2: 31 July 2026. ITR-3 and ITR-4: 31 August 2026 (new extension). Tax audit: 31 October 2026. Transfer pricing: 30 November 2026. Belated: 31 December 2026 with late fee up to Rs 5,000 and interest. Revised: 31 March 2027 (extended from earlier December deadline).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Which ITR form should I use?</h3>
                        <div class="faq-expanded__a"><p>ITR-1 for salaried up to Rs 50 lakh with one house property and other sources. ITR-2 for salary above Rs 50 lakh, capital gains, ESOPs, NRI income, or multiple properties. ITR-3 for business or professional income. ITR-4 for presumptive taxation under 44AD/44ADA. Patron selects after reviewing your complete income profile.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Should I choose old or new tax regime?</h3>
                        <div class="faq-expanded__a"><p>If total deductions (HRA + home loan + 80C + 80D + NPS + other) exceed approximately Rs 3.75-4 lakh, old regime typically saves more. New regime is better with few deductions - income up to Rs 12 lakh is tax-free under Section 87A. Patron computes both with your actual Gurugram salary numbers and shows the exact difference.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What documents are needed for ITR filing?</h3>
                        <div class="faq-expanded__a"><p>Form 16 from employer, Form 26AS and AIS/TIS from incometax.gov.in, PAN and Aadhaar (linked), bank statements, investment proofs (80C, 80D, home loan), capital gains statements, ESOP/RSU statements if applicable, and rental details. Form 16 plus AIS reconciliation covers 90% of filing for salaried professionals.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What are the penalties for late ITR filing?</h3>
                        <div class="faq-expanded__a"><p>Section 234F late fee: Rs 1,000 (income up to Rs 5L) or Rs 5,000 (above). Section 234A interest at 1% per month on unpaid tax. Loss of certain loss carry-forward rights. Cannot opt for old regime after due date for business income. Higher TDS rates for non-filers.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can NRIs file ITR in Gurugram?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs with Indian income (Gurugram rental, property sale capital gains, interest) must file in India. ITR-2 or ITR-3 depending on sources. Can claim excess TDS refunds. DTAA benefits available. NRIs generally cannot choose old tax regime. Patron files remotely for NRIs with Gurugram property.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How do I report capital gains from Gurugram property?</h3>
                        <div class="faq-expanded__a"><p>Report in ITR-2 or ITR-3 under Schedule CG. Long-term (held over 2 years): 12.5% without indexation from FY 2024-25. Short-term: at slab rates. Claim Section 54 exemption if reinvesting within 2 years, or Section 54EC bonds within 6 months. Patron computes gains and advises on exemption strategy.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>ITR kab tak file karna hai FY 2025-26 ke liye?</strong> ITR-1 aur ITR-2 ke liye 31 July 2026. ITR-3 aur ITR-4 ke liye 31 August 2026 (naya extension). Late filing par Rs 5,000 tak penalty aur 1% per month interest lagta hai.</p><p><strong>Old regime ya new regime - kaunsa better hai?</strong> Agar aapka HRA + home loan + 80C + 80D milake Rs 4 lakh se zyada hai toh old regime mein tax kam lagega. Agar deductions kam hain toh new regime mein Rs 12 lakh tak zero tax hai.</p><p><strong>ESOP/RSU ka tax kaise bhare?</strong> Exercise par perquisite tax (salary head) aur sale par capital gains. Dono alag-alag ITR mein report karne padte hain. Patron specialise karta hai tech employees ke ESOP taxation mein.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Deadline Approaching: 31 July / 31 August 2026</h2>
            <div class="content-text">
                
                <p>Missing the deadline costs Rs 5,000 in late fees plus 1% monthly interest. But the bigger cost is strategic: wrong regime choice can cost Rs 30,000-80,000 in excess tax for Gurugram professionals with significant HRA and home loan. For ESOP holders, incorrect perquisite computation attracts demand notices. For property sellers, missing the Section 54 reinvestment window means paying full capital gains tax on high Gurugram property values. File early, file accurately.</p><p><strong>Start your ITR filing now. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ITR%20filing%20in%20Gurugram%20for%20FY%202025-26." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File Your ITR Right - From Form 16 to Refund</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">ITR filing is the single most impactful annual financial decision for every Gurugram taxpayer. The regime choice, ESOP/RSU computation, capital gains reporting, and AIS reconciliation determine whether you pay the right amount of tax - not a rupee more. For FY 2025-26, the Rs 12 lakh zero-tax benefit, extended ITR-3/4 deadline, and revised return extension all require expert interpretation.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting's Gurugram office on Golf Course Extension Road provides CA-assisted ITR filing with personalised regime analysis, ESOP specialisation, AIS reconciliation, capital gains advisory, and year-round advance tax planning. From Form 16 to refund credit - one CA, one engagement, 12 months of coverage.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20ITR%20filing%20in%20Gurugram%20for%20FY%202025-26.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ITR%20Filing%20Gurugram&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20ITR%20filing%20in%20Gurugram%20for%20FY%202025-26.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ITR Filing Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers ITR filing services in 8 major cities. Select your city below.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/income-tax-return/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-return/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/income-tax-return/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/income-tax-return/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/income-tax-return/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="/income-tax-return/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="/income-tax-return/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Gurugram</div><div class="pa-block-sub">End-to-end tax and compliance services</div><div class="pa-cross-grid"><a href="/gst-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/accounting-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/payroll-services/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/tan-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TAN Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/pan-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PAN Registration</div><div class="pa-card-sub">Gurugram</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Gurugram</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 13 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">13 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 13 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect Budget changes, tax slab revisions, ITR form updates, due date extensions, and regulatory amendments. The next scheduled review is June 2026.</p>
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
