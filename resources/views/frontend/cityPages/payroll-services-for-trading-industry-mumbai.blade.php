

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
    <title>Trading Business Payroll in Mumbai - PF, ESIC & TDS</title>
    <meta name="description" content="CA-led trading payroll in Mumbai. Shop staff wages, commission CTC, festival surge, PF/ESI, S&E Act, multi-branch retail for Bhuleshwar, Zaveri Bazaar, malls. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-trading-industry/mumbai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Trading Business Payroll in Mumbai - PF, ESIC & TDS">
    <meta property="og:description" content="CA-led trading payroll in Mumbai. Shop staff wages, commission CTC, festival surge, PF/ESI, S&E Act, multi-branch retail for Bhuleshwar, Zaveri Bazaar, malls. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-trading-industry/mumbai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Trading Business Payroll in Mumbai - PF, ESIC & TDS">
    <meta name="twitter:description" content="CA-led trading payroll in Mumbai. Shop staff wages, commission CTC, festival surge, PF/ESI, S&E Act, multi-branch retail for Bhuleshwar, Zaveri Bazaar, malls. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Trading Business Payroll in Mumbai - PF, ESIC & TDS",
      "description": "CA-led trading payroll in Mumbai. Shop staff wages, commission CTC, festival surge, PF/ESI, S&E Act, multi-branch retail for Bhuleshwar, Zaveri Bazaar, malls. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-trading-industry/mumbai",
      "serviceType": "Trading Business Payroll in Mumbai - PF, ESIC & TDS",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-trading-industry/mumbai",
        "price": "3000"
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
          "name": "Trading Industry Payroll Services - PF, ESIC & TDS India",
          "item": "https://www.patronaccounting.com/payroll-services-for-trading-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Trading Business Payroll in Mumbai - PF, ESIC & TDS",
          "item": "https://www.patronaccounting.com/payroll-services-for-trading-industry/mumbai"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What payroll compliance applies to trading businesses in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra S&E Act 2017 (Gumasta, 9 hrs/day, 48 hrs/week, overtime double, weekly off), PF (20+ employees, 12%+12%), ESI (10+, ≤ Rs 21,000), TDS S.192, Maharashtra PT, Payment of Wages/Bonus/Gratuity, Maharashtra min wages Shops category. Non-compliance: labour inspector prosecution."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF and ESI mandatory for shop and trading staff?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF: mandatory for 20+ employees - count ALL staff across branches, godowns, outlets under same entity. 12%+12%. ESI: 10+, wages ≤ Rs 21,000 - covers most shop-floor, helpers, delivery, packers. Even temporary festival staff may be covered if establishment already has PF/ESI. Patron handles registration and filing."
          }
        },
        {
          "@type": "Question",
          "name": "How is commission salary structured for salespeople?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fixed (Basic+DA ≥ 50% of fixed CTC) + variable (commission % of sales or target incentive). PF on Basic+DA from fixed. ESI on total gross - if gross > Rs 21,000 that month, no ESI. TDS on estimated annual incl. projected commission. Pay slips show fixed + variable separately. Patron handles monthly variable reconciliation."
          }
        },
        {
          "@type": "Question",
          "name": "What are the working hour and overtime rules for shops?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra S&E Act: max 9 hrs/day, 48 hrs/week. Spread-over max 10.5 hrs. Beyond = double wages. Weekly off: 1 day mandatory. Festival extended hours: overtime tracked and compensated. S&E Inspector can visit and demand attendance/wage records. Patron tracks hours and computes overtime automatically."
          }
        },
        {
          "@type": "Question",
          "name": "Can small shopkeepers use Section 44AD?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Traders (individual/HUF/partnership) with turnover ≤ Rs 3 Cr (95%+ digital) or Rs 2 Cr: deemed profit 6% digital / 8% cash. No detailed books. But payroll records (PF/ESI, TDS, wages, attendance) must still be maintained. Proprietor draw based on deemed profit. Patron advises on 44AD eligibility and optimal draw."
          }
        },
        {
          "@type": "Question",
          "name": "What payroll compliance applies to trading businesses in Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra S&E Act 2017 (Gumasta, 9 hrs/day, 48 hrs/week, overtime double, weekly off), PF (20+ employees, 12%+12%), ESI (10+, ≤ Rs 21,000), TDS S.192, Maharashtra PT, Payment of Wages/Bonus/Gratuity, Maharashtra min wages Shops category. Non-compliance: labour inspector prosecution."
          }
        },
        {
          "@type": "Question",
          "name": "Is PF and ESI mandatory for shop and trading staff?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "PF: mandatory for 20+ employees - count ALL staff across branches, godowns, outlets under same entity. 12%+12%. ESI: 10+, wages ≤ Rs 21,000 - covers most shop-floor, helpers, delivery, packers. Even temporary festival staff may be covered if establishment already has PF/ESI. Patron handles registration and filing."
          }
        },
        {
          "@type": "Question",
          "name": "How is commission salary structured for salespeople?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fixed (Basic+DA ≥ 50% of fixed CTC) + variable (commission % of sales or target incentive). PF on Basic+DA from fixed. ESI on total gross - if gross > Rs 21,000 that month, no ESI. TDS on estimated annual incl. projected commission. Pay slips show fixed + variable separately. Patron handles monthly variable reconciliation."
          }
        },
        {
          "@type": "Question",
          "name": "What are the working hour and overtime rules for shops?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Maharashtra S&E Act: max 9 hrs/day, 48 hrs/week. Spread-over max 10.5 hrs. Beyond = double wages. Weekly off: 1 day mandatory. Festival extended hours: overtime tracked and compensated. S&E Inspector can visit and demand attendance/wage records. Patron tracks hours and computes overtime automatically."
          }
        },
        {
          "@type": "Question",
          "name": "Can small shopkeepers use Section 44AD?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Traders (individual/HUF/partnership) with turnover ≤ Rs 3 Cr (95%+ digital) or Rs 2 Cr: deemed profit 6% digital / 8% cash. No detailed books. But payroll records (PF/ESI, TDS, wages, attendance) must still be maintained. Proprietor draw based on deemed profit. Patron advises on 44AD eligibility and optimal draw."
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
            padding: 20px 0; position: sticky; top: 0; z-index: 50;
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
                        Payroll Services for Trading (Wholesale and Retail) in Mumbai: CA-Led Shop Staff Wages, Commission Structuring, and Statutory Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Gumasta licence, PF/ESI codes, TAN, staff appointment letters, commission structures, sales data, branch/outlet list</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 3,000/month for small shops (<10 staff)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Wholesale firms, retail shops, retail chains, APMC traders, distributors, D2C brands, and all trading businesses in Mumbai</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Onboarding 3-5 days; wages by 7th; PF/ESI by 15th; festival surge pre-setup</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | From Rs 3,000/month</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20payroll%20services%20in%20Mumbai.%20Please%20call%20me." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Trading Payroll in Mumbai',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-trading/mumbai', 'label' => 'Trading Payroll in Mumbai', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services/mumbai', 'label' => 'Accounting Services in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/mumbai', 'label' => 'GST Registration in Mumbai', 'selected' => false, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit', 'label' => 'Statutory Audit', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Bhuleshwar textile wholesale firm has 40 staff including 15 salesmen on commission. Patron designed a CTC with 50% basic + variable commission that changes monthly. PF is correctly computed on fixed basic, TDS accounts for estimated annual commission, and ESI eligibility is tracked per month per salesman. The Diwali surge temp staff (12 packers and delivery boys for 4 weeks) were onboarded with proper documentation and settled within 2 days after the season.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Proprietor</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Textile Wholesaler, Bhuleshwar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our retail chain has 18 outlets across Mumbai. Patron processes payroll per outlet with standardised salary grades. Each outlet manager gets the labour cost as percentage of outlet revenue - this is our key hiring KPI. PF/ESI is consolidated from one code. When we opened 3 new outlets in Thane, staff were transferred and payroll continued without a single disruption. The annual bonus was computed correctly on fixed + actual variable for 150 employees.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Retail Chain, Pan-Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our Zaveri Bazaar jewellery shop has 25 staff with top salesmen earning Rs 3-4 lakh/month in commission during wedding season. Patron handles the TDS computation correctly - estimated annual income including projected commission, with quarterly true-up. The S&amp;E inspector visited during Diwali extended hours - every overtime record was documented and paid at double wages. Section 44AD advisory saved us significant tax compliance cost as a partnership firm.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PT</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Partner</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Jewellery Dealer, Zaveri Bazaar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our FMCG distribution business has 60 staff: 20 route salesmen on target incentives, 15 delivery drivers, 20 godown workers, and 5 admin. Patron manages route-wise commission, delivery trip-based attendance, godown shift payroll, and admin CTC all in one engagement. PF/ESI counts all 60 (across our Andheri warehouse and Thane office) under one code. The annual MIS shows route-wise sales cost which helps us optimise distribution economics.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Managing Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">FMCG Distributor, Andheri</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>CA-led trading payroll with commission structuring, festival surge processing, multi-branch retail, S&E compliance, and PF/ESI for Mumbai trading businesses.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">By Business Type</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading (Wholesale/Retail) Payroll in Mumbai - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Trading Payroll in Mumbai Services at a Glance</strong></p>
                    <p>Trading payroll covers <strong>shop-floor staff wages</strong> (Maharashtra S&amp;E Act, 9 hrs/day, overtime double), <strong>commission/incentive CTC</strong> (fixed + variable, PF/ESI on actual gross), <strong>festival temporary staff</strong> (Diwali surge 20-50%, rapid onboarding/settlement), <strong>PF/ESI</strong>, <strong>TDS</strong> dual regime, <strong>multi-branch retail</strong>, <strong>Maharashtra min wages</strong> Shops category, <strong>S.44AD</strong> advisory, and <strong>bonus/gratuity</strong>.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>Maharashtra S&amp;E Act 2017; EPF/ESI Acts; IT Act S.192; Code on Wages; Payment of Bonus/Gratuity; Maharashtra PT</td></tr><tr><td>Applicable To</td><td>Wholesale firms, retail shops, retail chains, APMC traders, distributors, D2C brands</td></tr><tr><td>Timeline</td><td>Wages by 7th; TDS by 7th; PF/ESI by 15th; Form 16 by June 15</td></tr><tr><td>Cost From</td><td>Rs 3,000/month (small shop &lt;10 staff)</td></tr><tr><td>Key Challenge</td><td>Commission/incentive PF/ESI; festival surge temp staff; S&amp;E hours/overtime; multi-branch; cash documentation</td></tr><tr><td>Authority</td><td>EPFO Mumbai; ESIC Mumbai; Maharashtra S&amp;E Inspector; Maharashtra PT; BMC (Gumasta)</td></tr></tbody></table></div></p>
                </div>
                <p>Mumbai is India's trading capital: <strong>Bhuleshwar textiles, Crawford Market grocery, Zaveri Bazaar jewellery, Masjid Bunder hardware, APMC Vashi, Linking Road, Colaba Causeway, Phoenix/R City malls</strong>. Commission payroll, festival surge, S&amp;E hours, multi-branch retail, cash documentation = unique trading payroll complexity. Learn more about <a href="#">Trading Payroll across India</a>.</p>
                <p>Patron's Marine Lines office is walking distance from Bhuleshwar, Crawford Market, Zaveri Bazaar, and Masjid Bunder wholesale markets. Also see <a href="/payroll-services">Payroll Services</a> and <a href="/accounting-services/mumbai">Accounting Services in Mumbai</a>.</p>
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
                <h2 class="section-title">What Is Trading Payroll</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Specialised wage processing for <strong>wholesale and retail businesses</strong>: shop-floor staff, salesmen on commission, godown workers, delivery boys, and seasonal temporary staff. Must comply with <strong>Maharashtra S&amp;E Act</strong> (Gumasta, 9 hrs/day, overtime double), <strong>commission CTC structuring</strong>, and <strong>Maharashtra minimum wages</strong> for Shops category.</p><p><strong>Commission payroll</strong>: fixed basic (50% min) + variable commission/incentive. PF on basic; ESI on total gross (monthly fluctuation when variable changes). <strong>Festival surge</strong>: Diwali/Navratri 20-50% temp staff for 2-6 weeks, rapid onboarding/F&amp;F. <strong>S&amp;E Act</strong>: 9 hrs/day, spread-over 10.5 hrs, overtime double, weekly off mandatory. <strong>Multi-branch</strong>: standardised payroll, outlet-wise cost. <strong>Proprietor draw</strong>: not salary, S.44AD for small traders (deemed profit 6-8%). <strong>Cash operations</strong>: all wages must be documented per Payment of Wages Act.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Trading Payroll in Mumbai:</strong></p>
                    <p><strong>Commission CTC:</strong> Fixed (Basic+DA ≥ 50%) + variable (sales %, target incentive). PF on fixed; ESI on total gross (monthly fluctuation). TDS on estimated annual incl. projected variable.</p><p><strong>S&amp;E Act:</strong> Gumasta licence. 9 hrs/day, 48 hrs/week. Spread-over 10.5 hrs. Overtime = double wages. Weekly off mandatory. Inspector visits.</p><p><strong>Festival Surge:</strong> Diwali/Navratri/Christmas 20-50% temp staff. Rapid onboarding. Pro-rata wages. PF/ESI if registered. F&amp;F within 2 days.</p><p><strong>S.44AD:</strong> Traders: turnover ≤ Rs 3 Cr (95% digital) or Rs 2 Cr. Deemed profit 6% digital / 8% cash. No books. Payroll records still needed.</p><p><strong>Multi-Branch:</strong> Standardised salary. Per-outlet attendance + cost. Consolidated PF/ESI. Staff transfers without disruption.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Trading Payroll in Mumbai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Commission + S&amp;E + Surge</span>
                        <strong>Trading Payroll</strong>
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
            <h2 class="section-title">Who Needs Trading Payroll in Mumbai</h2>
            <div class="content-text">
                
                <p><strong>Wholesale Textile/Garment (Bhuleshwar, Mangaldas, Mulji Jetha):</strong> 5-100 staff. Sales, godown, delivery. Commission-heavy.</p><p><strong>Jewellery/Bullion (Zaveri Bazaar):</strong> Craftsmen, sales, security, accounting. High commission (Rs 3-5 L/month for top salesmen).</p><p><strong>Grocery/Spices/Hardware (Crawford Market, Masjid Bunder):</strong> Sales, packing, delivery. Maharashtra min wages. S&amp;E Act hours.</p><p><strong>APMC Vashi Traders/Commission Agents:</strong> Hamalis, weighbridge operators, accounting. APMC licence compliance.</p><p><strong>Retail Chains (5-50+ outlets across Mumbai):</strong> Standardised payroll. Outlet managers on incentive. Multi-branch PF/ESI.</p><p><strong>Mall Stores (Phoenix, R City, Inorbit):</strong> Sales associates on commission. Visual merchandisers. Festival surge staffing.</p><p><strong>FMCG Distributors/Super-Stockists (Andheri, Thane, Navi Mumbai):</strong> Sales team + delivery fleet + godown. Multi-category commission.</p><p><strong>D2C Brands:</strong> Store staff + warehouse + delivery. Omnichannel. E-commerce platform TCS reconciliation.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Shop-Floor Staff Wages (S&amp;E Act)</td><td>Maharashtra S&amp;E Act 2017: 9 hrs/day, 48 hrs/week, spread-over 10.5 hrs, overtime double. Weekly off mandatory. Festival extended hours: overtime tracked and paid. Leave: earned/casual/sick. Registers: attendance/wages/overtime/leave. Inspector-ready.</td></tr><tr><td>Commission/Incentive CTC Structuring</td><td>Fixed (Basic+DA 50% min) + variable (sales commission % + target incentive). PF on Basic+DA. ESI on total gross (monthly fluctuation). TDS with annual commission estimation. Pay slips: fixed + variable separately. Compliant with Code on Wages.</td></tr><tr><td>Festival Temporary Staff Processing</td><td>Diwali/Navratri/Christmas surge: 20-50% additional for 2-6 weeks. Rapid onboarding (Aadhaar, bank, UAN). Pro-rata wages at or above min wage. PF/ESI if establishment registered. F&amp;F within 2 days. Documented payroll template pre-festival.</td></tr><tr><td>PF/ESI Registration and Filing</td><td>EPFO Mumbai: 20+ employees (count all branches/godowns). 12%+12%. ECR by 15th. ESIC Mumbai: 10+, ≤ Rs 21,000 (most shop-floor, helpers, delivery, packers). Multi-branch: single or separate PF/ESI codes. PF transfer for staff moving between traders.</td></tr><tr><td>TDS + Proprietor/Partner Draw</td><td>S.192 TDS on staff salaries incl. commission estimation. Dual regime advisory. Proprietor draw: not salary, no TDS at source. Partner remuneration: S.40(b) limits. S.44AD presumptive for small traders: turnover ≤ Rs 3 Cr, deemed profit 6-8%. Patron advises on 44AD vs regular.</td></tr><tr><td>Multi-Branch/Multi-Outlet Retail</td><td>Standardised salary grades across outlets. Per-outlet attendance + payroll. Outlet-wise labour cost % of revenue (retail KPI). Consolidated PF/ESI. Inter-outlet transfers. Outlet manager incentive linked to performance. Centralised compliance.</td></tr><tr><td>Maharashtra Min Wages + Gumasta</td><td>Shops &amp; Commercial Establishments category: unskilled (helpers, packers), semi-skilled (salesmen, billing), skilled (managers, accountants), highly skilled. VDA revised periodically. Gumasta licence (BMC) mandatory. S&amp;E registers. Inspector readiness.</td></tr><tr><td>Bonus, Gratuity, PT, LWF</td><td>Bonus 8.33-20% (establishments with 20+) on actual wages incl. variable. Gratuity: 5+ yrs (1 yr fixed-term under new codes), 15/26 × salary × years. Maharashtra PT: monthly slab. LWF: half-yearly. Patron handles all alongside monthly payroll.</td></tr>

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
            <h2 class="section-title">6-Step Trading Payroll Process in Mumbai</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Walk-in at Patron's Marine Lines office - walking distance from Mumbai's wholesale market core.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Trading Business Assessment</h3><p class="step-description">CA reviews business type (wholesale/retail/distributor), legal structure, branches/outlets/godowns, staff categories (sales on commission, shop-floor, godown, delivery, admin), wage structures, Gumasta, PF/ESI, festival staffing. Walk-in Marine Lines.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Business mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Staff categories classified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="85" y2="22" stroke="#F5A623" stroke-width="2.5" stroke-linecap="round"/><line x1="30" y1="35" x2="78" y2="35" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="85" cy="55" r="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M81 55l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Assessed</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Salary Structure and Compliance Setup</h3><p class="step-description">Fixed basic (50%) + commission/incentive formula. Min wage verification per category. PF/ESI codes. Gumasta verified. Maharashtra PT. TDS with commission estimation. S.44AD assessed. Outlet-wise templates for retail chains.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Commission CTC designed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All codes verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Configured</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Commission + PF + S&amp;E</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliance Live</text></svg></div><span class="illustration-label">Configured</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Monthly Data Collection (by 3rd)</h3><p class="step-description">Per outlet/branch attendance (biometric/register). Sales data for commission (POS/billing). Overtime hours (festival extended). Temporary staff joiners/exits. Leave records. Delivery trip/attendance. Godown staff attendance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Sales data compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Hours tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Collected</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#fff" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Outlets + Sales + Hours</text><text x="60" y="62" font-size="5" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">All Inputs Ready</text></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Wage Processing (by 5th)</h3><p class="step-description">Fixed wages + actual commission/incentive. Overtime double for excess hours. PF (12%) + ESI (0.75%) + TDS S.192 + PT deducted. Temporary staff pro-rata. Proprietor/partner draw separate. Pay slips (fixed + variable). Bank file. Outlet-wise register.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wages computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Commission reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Processed</text><rect x="25" y="30" width="70" height="18" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="42" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Fixed + Commission + OT</text><text x="60" y="62" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">By 7th Every Month</text></svg></div><span class="illustration-label">Processed</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Filing (by 7th-15th)</h3><p class="step-description">Wages by 7th. TDS by 7th. PF ECR by 15th. ESI by 15th. PT monthly. S&amp;E registers updated. Temporary staff records maintained.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All filings done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Registers updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="15" width="70" height="10" rx="3" fill="#25D366" opacity="0.15"/><text x="60" y="23" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Filed</text><text x="60" y="42" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PF + ESI + TDS + PT + S&amp;E</text><text x="60" y="58" font-size="4" fill="#14365F" text-anchor="middle" font-family="Arial">All Deadlines Met</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End and Annual</h3><p class="step-description">Form 16 by June 15. Annual PF. Bonus 8.33-20%. Gratuity provisioning. LWF half-yearly. Investment proof Jan-Mar. Festival season cost analysis. Annual MIS: outlet-wise labour, commission payout, seasonal cost, PF/ESI/TDS, overtime, attrition. S.44AD for proprietors.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Year-end closed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MIS delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="22" font-size="6" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">Year-End Done</text><rect x="25" y="30" width="70" height="15" rx="3" fill="#fff" stroke="#25D366" stroke-width="1"/><text x="60" y="40" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Bonus + Gratuity + MIS</text><text x="60" y="62" font-size="5" fill="#25D366" font-weight="600" text-anchor="middle" font-family="Arial">Compliant</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">06</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Trading Payroll</h2>
            <div class="content-text">
                
                <ul><li>COI / Partnership Deed / Proprietor PAN</li><li>Gumasta Licence (Maharashtra S&amp;E Registration)</li><li>PF Establishment Code + ESI Code + TAN</li><li>Staff Appointment Letters with Salary + Commission Structure</li><li>Staff Aadhaar + PAN + Bank Details</li><li>Previous Year PF/ESI Challans + Form 16</li><li>Sales Data / POS Reports (for commission computation)</li><li>Branch/Outlet List (for multi-location businesses)</li><li>Maharashtra PT Registration</li></ul><div class="highlight-box" style="margin-top:20px;"><p><strong>Mumbai-Specific:</strong> BMC Gumasta licence. Maharashtra min wage notification for Shops &amp; Commercial Establishments (latest). BMC trade licence. APMC licence (for Vashi traders). GST registration.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Trading Payroll Challenges in Mumbai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Commission/Incentive Variable Pay</td><td>Salesman: Rs 15K fixed + Rs 50K commission (good month) = Rs 65K gross. Slow month: Rs 15K + Rs 5K = Rs 20K. ESI eligibility fluctuates monthly (≤ Rs 21K = ESI; &gt; Rs 21K = no ESI). PF on basic (stable), TDS on annual estimated incl. variable. Many traders compute PF/TDS incorrectly on variable.</td><td>Patron handles monthly variable reconciliation. ESI eligibility tracked per month per employee. TDS estimated annually with quarterly true-up. Commission CTC designed for 50% basic compliance.</td></tr><tr><td>Festival Season Temporary Surge</td><td>Diwali: shops hire 20-50% extra salespeople, packers, delivery for 2-6 weeks. Each temp: documented appointment, attendance, min wage, PF/ESI assessment, F&amp;F within 2 days. Cash payment without docs = Payment of Wages + PF/ESI + min wage prosecution risk during inspector visit.</td><td>Patron sets up documented temp staff payroll templates before festival season. Rapid onboarding pipeline. Pro-rata computation. F&amp;F within 2 days. Zero documentation gaps.</td></tr><tr><td>S&amp;E Act Working Hours for Shops</td><td>Wholesale markets (Bhuleshwar, Crawford, Masjid Bunder): historically 10-14 hrs/day during peak. S&amp;E caps at 9 hrs/day, 48 hrs/week, spread-over 10.5 hrs. Overtime = double wages. Weekly off mandatory (many markets worked 7 days). Inspector can prosecute.</td><td>Patron tracks hours against legal limits. Overtime computed automatically. Festival extended hours documented and compensated. S&amp;E registers inspector-ready.</td></tr><tr><td>Multi-Branch Retail Standardisation</td><td>20-outlet chain: same grades across outlets, per-outlet attendance + processing, outlet-wise labour cost as % of revenue (critical KPI), consolidated PF/ESI, staff transfers. Generic providers lose per-outlet visibility.</td><td>Patron processes multi-outlet with per-outlet cost visibility. Standardised grades. Consolidated PF/ESI. Transfer-friendly processing. Outlet manager incentive tracking.</td></tr><tr><td>Cash Operations and Wage Documentation</td><td>Wholesale cash-heavy businesses: temptation to pay undocumented cash. Risks: Payment of Wages Act violation, PF/ESI non-deposit, min wage prosecution (no records), S.40(a)(ia) disallowance of salary expense (no TDS).</td><td>Patron ensures all wages documented, bank-transferred, compliant. Even cash-heavy revenue businesses get fully documented payroll. Inspector-ready records.</td></tr>

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
            <h2 class="section-title">Trading Payroll Fees in Mumbai - 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Small Shop / Proprietorship (&lt;10 staff)</td><td>Rs 3,000 - Rs 8,000/month (3 days onboarding)</td></tr><tr><td>Mid-Size Wholesale (10-30 staff)</td><td>Rs 8,000 - Rs 18,000/month (3-5 days)</td></tr><tr><td>Large Wholesale (30-100 staff)</td><td>Rs 15,000 - Rs 40,000/month (5-7 days)</td></tr><tr><td>Retail Chain (5-20 outlets, 50-200 staff)</td><td>Rs 25,000 - Rs 75,000/month (7 days)</td></tr><tr><td>Large Retail Chain (20-50+ outlets)</td><td>Rs 60,000 - Rs 2,00,000/month (10 days)</td></tr><tr><td>APMC Trader / Commission Agent</td><td>Rs 5,000 - Rs 15,000/month (3 days)</td></tr><tr><td>Distributor / Super-Stockist</td><td>Rs 10,000 - Rs 30,000/month (5 days)</td></tr><tr><td>Festival Surge Processing (add-on)</td><td>Rs 5,000 - Rs 15,000 per season</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Trading Payroll in Mumbai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20payroll%20in%20Mumbai.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trading Payroll Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Onboarding</td><td>3-5 days (Marine Lines - near wholesale core)</td></tr><tr><td>Monthly Attendance + Sales Data</td><td>By 3rd (per outlet/branch + POS)</td></tr><tr><td>Wage + Commission Processing</td><td>By 5th (fixed + variable + OT)</td></tr><tr><td>Disbursement</td><td>By 7th (Payment of Wages Act)</td></tr><tr><td>PF/ESI Filing</td><td>By 15th (ECR + ESI contribution)</td></tr><tr><td>Maharashtra PT</td><td>Monthly</td></tr><tr><td>Festival Surge Setup</td><td>Pre-season (Diwali: September setup)</td></tr><tr><td>Form 16 + Bonus</td><td>By June 15 (annual)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> PF late: 12% interest + 25% damages. ESI late: 12% interest. S&amp;E overtime not paid: Inspector prosecution + back wages. Min wages not paid: labour court + Rs 50K penalty + 10x underpayment. Festival temp staff undocumented: Payment of Wages + PF/ESI default. Commission not in PF/TDS: EPFO demand + TDS shortfall. Gumasta not obtained: BMC penalty. Cash wages without docs: S.40(a)(ia) disallowance.</p>

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
            <h2 class="section-title">Why Choose Patron for Trading Payroll in Mumbai</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Marine Lines - Near Markets</h3><p class="feature-text">Walking distance from Bhuleshwar, Crawford Market, Zaveri Bazaar, Masjid Bunder. Files with EPFO, ESIC, Income Tax, S&amp;E Inspector.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg></div><h3 class="feature-title">Commission + Surge + Multi-Branch</h3><p class="feature-text">Variable pay reconciliation + festival temp staff + outlet-wise retail payroll + S&amp;E hours tracking. No other Mumbai CA bundles all trading payroll layers.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">3-Person Shop to 50-Outlet Chain</h3><p class="feature-text">Sole proprietor with Gumasta to multi-outlet retail. Wholesale textiles to jewellery to FMCG distribution. S.44AD advisory for small traders. All from one team.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">10,000+ Businesses</h3><p class="feature-text">Including wholesale traders, retail chains, distributors, and market businesses across Mumbai. 15+ years. 4.9 Google rating.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p>Including wholesale traders, retail chains, APMC businesses, and distributors across Mumbai. Offices in Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll by Trading Business Type</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Business Type</th><th>Payroll Scope</th><th>Mumbai Note</th></tr></thead>
                    <tbody>
                        <tr><td>Wholesale Textiles/Garments</td><td>Sales commission, godown workers, delivery, S&amp;E Act hours, festival surge, PF/ESI</td><td>Bhuleshwar/Mangaldas/Mulji Jetha; 5-100 staff; commission-heavy</td></tr><tr><td>Jewellery/Bullion Dealer</td><td>High commission (Rs 3-5L/month), craftsmen wages, security, TDS for high earners</td><td>Zaveri Bazaar; top salesmen in highest TDS brackets; S.44AD advisory</td></tr><tr><td>Retail Chain (Multi-Outlet)</td><td>Standardised grades, outlet-wise labour cost, consolidated PF/ESI, staff transfers</td><td>Pan-Mumbai; 5-50+ outlets; mall + high street + suburban</td></tr><tr><td>APMC Trader / Commission Agent</td><td>Hamalis, weighbridge, accounting staff; APMC licence; seasonal produce cycles</td><td>APMC Vashi; agri-produce market; high cash volume</td></tr><tr><td>FMCG Distributor / Super-Stockist</td><td>Sales team commission, delivery fleet, godown, multi-category incentive</td><td>Andheri/Thane/Navi Mumbai; route-based sales; target incentives</td></tr><tr><td>D2C / Omnichannel Retail</td><td>Store staff + warehouse + delivery; e-commerce TCS; online + offline payroll</td><td>Mumbai stores + Bhiwandi fulfilment; platform reconciliation</td></tr>

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
                
                <ul><li><a href="#">Trading Payroll in India</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/accounting-services/mumbai">Accounting Services in Mumbai</a></li><li><a href="/gst-registration/mumbai">GST Registration in Mumbai</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="/statutory-audit">Statutory Audit</a></li></ul>

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
                
                <p><strong>Maharashtra S&amp;E Act 2017:</strong> Gumasta licence (BMC). 9 hrs/day, 48 hrs/week. Spread-over 10.5 hrs. Overtime double. Weekly off mandatory. Festival extended hours = documented overtime. Inspector may visit shops.</p><p><strong>PF/ESI:</strong> PF: 20+ employees (count all branches/godowns), 12%+12%, ECR by 15th. ESI: 10+, ≤ Rs 21,000. Covers most shop-floor, helpers, delivery. PF/ESI on actual gross incl. commission.</p><p><strong>S.44AD:</strong> Traders: turnover ≤ Rs 3 Cr (95% digital) / Rs 2 Cr. Deemed profit 6% digital / 8% cash. Proprietor draw structured on deemed profit. Payroll records still needed.</p><p><strong>Other:</strong> Bonus 8.33-20% (20+ establishments). Gratuity 5+ yrs. Maharashtra PT monthly slab. LWF half-yearly. Maharashtra min wages: Shops &amp; Commercial Establishments.</p><p><strong>Portals:</strong> <a href="https://epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://esic.gov.in" target="_blank" rel="noopener">ESIC</a> | <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax</a> | <a href="https://mahakamgar.maharashtra.gov.in" target="_blank" rel="noopener">Maharashtra Labour</a></p>

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
                    <h2 class="faq-expanded__title">FAQs - Trading Payroll in Mumbai</h2>
                    <p class="faq-expanded__lead">Answers to common questions. Call +91 945 945 6700.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Mumbai', 'enquiryService' => 'Trading Payroll in Mumbai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What payroll compliance applies to trading businesses in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra S&E Act 2017 (Gumasta, 9 hrs/day, 48 hrs/week, overtime double, weekly off), PF (20+ employees, 12%+12%), ESI (10+, ≤ Rs 21,000), TDS S.192, Maharashtra PT, Payment of Wages/Bonus/Gratuity, Maharashtra min wages Shops category. Non-compliance: labour inspector prosecution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is PF and ESI mandatory for shop and trading staff?</h3>
                        <div class="faq-expanded__a"><p>PF: mandatory for 20+ employees - count ALL staff across branches, godowns, outlets under same entity. 12%+12%. ESI: 10+, wages ≤ Rs 21,000 - covers most shop-floor, helpers, delivery, packers. Even temporary festival staff may be covered if establishment already has PF/ESI. Patron handles registration and filing.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How much does trading/retail payroll cost in Mumbai?</h3>
                        <div class="faq-expanded__a"><p>Small shop (<10): Rs 3,000-8,000/month. Mid-size wholesale (10-30): Rs 8,000-18,000. Large wholesale (30-100): Rs 15,000-40,000. Retail chain (5-20 outlets): Rs 25,000-75,000. Large chain (20-50+): Rs 60,000-2,00,000. APMC: Rs 5,000-15,000. Festival surge add-on: Rs 5,000-15,000/season.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is commission salary structured for salespeople?</h3>
                        <div class="faq-expanded__a"><p>Fixed (Basic+DA ≥ 50% of fixed CTC) + variable (commission % of sales or target incentive). PF on Basic+DA from fixed. ESI on total gross - if gross > Rs 21,000 that month, no ESI. TDS on estimated annual incl. projected commission. Pay slips show fixed + variable separately. Patron handles monthly variable reconciliation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the working hour and overtime rules for shops?</h3>
                        <div class="faq-expanded__a"><p>Maharashtra S&E Act: max 9 hrs/day, 48 hrs/week. Spread-over max 10.5 hrs. Beyond = double wages. Weekly off: 1 day mandatory. Festival extended hours: overtime tracked and compensated. S&E Inspector can visit and demand attendance/wage records. Patron tracks hours and computes overtime automatically.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can small shopkeepers use Section 44AD?</h3>
                        <div class="faq-expanded__a"><p>Yes. Traders (individual/HUF/partnership) with turnover ≤ Rs 3 Cr (95%+ digital) or Rs 2 Cr: deemed profit 6% digital / 8% cash. No detailed books. But payroll records (PF/ESI, TDS, wages, attendance) must still be maintained. Proprietor draw based on deemed profit. Patron advises on 44AD eligibility and optimal draw.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Dukaan ke staff ka payroll kaise?</strong> Maharashtra S&amp;E Act: 9 ghante se zyada nahi, 48 ghante hafte mein. Overtime pe double wages. PF 20+ staff pe (sab branches count). ESI Rs 21,000 se kam pe. Minimum wages Shops category ke hisaab se.</p><p><strong>Salesman ka commission payroll mein kaise?</strong> Fixed salary + commission = total gross. PF Basic pe (fixed). TDS poore saal ki estimated income pe. Commission har mahine alag hota hai. ESI total gross pe depend karta hai.</p><p><strong>Diwali mein temporary staff rakhte hain toh?</strong> Agar already 20+ staff aur PF registered hai toh temp pe bhi PF lag sakta hai. Documentation zaroori - appointment, attendance, wages. 2 din mein F&amp;F. Cash mein bina documentation nahi dena.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Festival Staff Undocumented = Inspector Risk. Get Compliant Now.</h2>
            <div class="content-text">
                
                <p>PF late: 12% interest + 25% damages. S&amp;E overtime not paid: prosecution + back wages. Min wages not paid: Rs 50K penalty + 10x underpayment. Festival temp undocumented: Payment of Wages + PF/ESI default. Commission not in PF/TDS: EPFO demand + TDS shortfall. Cash wages: S.40(a)(ia) disallowance. Multi-branch staff counted separately: EPFO clubbing + retrospective demand.</p><p><strong>Patron onboards in 3-5 days. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20payroll%20in%20Mumbai." target="_blank">WhatsApp us</a>. From Rs 3,000/month.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Your Shop, Every Salesman Paid Right, Every Season Managed</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Trading payroll in Mumbai ensures shop staff wages per Maharashtra S&amp;E Act (hours, overtime, weekly off), commission/incentive CTC with accurate PF/ESI on variable pay, festival temporary staff with documented payroll, PF/ESI, Maharashtra min wages, and multi-branch retail processing. For Bhuleshwar, Crawford Market, Zaveri Bazaar, Masjid Bunder, APMC Vashi, Linking Road, malls, and suburban retail hubs.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting, Marine Lines, Mumbai - walking distance from wholesale market core. Commission structuring, festival surge payroll, multi-outlet retail. 15+ years, 10,000+ businesses, 4.9 Google rating.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20trading%20payroll%20in%20Mumbai.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Trading%20Payroll%20Mumbai&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20trading%20payroll%20services%20in%20Mumbai.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Trading Payroll Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron offers CA-led trading payroll in 8 major cities.</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a><a href="#" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Mumbai</div><div class="pa-block-sub">Payroll and trading compliance</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/accounting-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/gst-registration/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Mumbai</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services/mumbai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing</div><div class="pa-card-sub">Mumbai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 23 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly (Freshness Tier 1) to reflect minimum wage revisions, labour code implementation, Maharashtra S&E Act updates, and PF/ESI rate changes. Next review: June 2026.</p>
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
