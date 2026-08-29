

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
    <title>Hospitality Payroll Services - Tips, PF, ESI & TDS India</title>
    <meta name="description" content="Payroll for hotels and restaurants in India: tip income, service charge, EPF, ESI, Labour Code 2025. From Rs.2,999/month.">
    <link rel="canonical" href="/payroll-services-for-the-hospitality-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Hospitality Payroll Services - Tips, PF, ESI & TDS India">
    <meta property="og:description" content="Payroll for hotels and restaurants in India: tip income, service charge, EPF, ESI, Labour Code 2025. From Rs.2,999/month.">
    <meta property="og:url" content="/payroll-services-for-the-hospitality-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hospitality Payroll Services - Tips, PF, ESI & TDS India">
    <meta name="twitter:description" content="Payroll for hotels and restaurants in India: tip income, service charge, EPF, ESI, Labour Code 2025. From Rs.2,999/month.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Hospitality Payroll Services in India",
          "description": "Payroll for hotels and restaurants in India: tip income, service charge, EPF, ESI, Labour Code 2025. From Rs.2,999/month.",
          "url": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry",
          "serviceType": "Hospitality Payroll Services in India",
          "areaServed": {
            "@type": "Country",
            "name": "India"
          },
          "provider": {
            "@type": "Organization",
            "name": "Patron Accounting LLP",
            "url": "https://www.patronaccounting.com/",
            "logo": "https://www.patronaccounting.com/images/site-logo.svg"
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
              "name": "Hospitality Payroll Services in India",
              "item": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is hospitality payroll and why is it more complex than standard payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Hospitality payroll covers salary, tip income TDS, service charge distribution, and in-kind benefit valuation for hotels, restaurants, resorts, and catering businesses. It is more complex for four reasons: remuneration is multi-component (base, shift allowances, night premiums, tips, service charges - each taxed differently); the workforce is permanently mixed (full-time, fixed-term, casual, seasonal); operations are 24/7 and seasonal; and in-kind benefits like accommodation and meals are taxable perquisites under Section 17(2) requiring specific statutory valuation."
              }
            },
            {
              "@type": "Question",
              "name": "How is tip income taxed for hotel and restaurant employees in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tips are taxable income under head Salaries under Section 17(1) of the Income Tax Act. The employer must include all declared tip income - whether cash declared by the employee or credit card tips from POS - in the employee's annual taxable salary for TDS under Section 192 and disclosure in Form 16. Employers excluding tip income from the taxable base risk TDS under-deduction notices from CBDT with 12% interest on the shortfall."
              }
            },
            {
              "@type": "Question",
              "name": "What are the EPF and ESI contribution rates for hotel employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "EPF contributions are 12% of basic + DA from both employer and employee, mandatory for 20+ employees, deposited by the 15th. The employer's 12% is split: 3.67% to EPF and 8.33% to EPS (capped at Rs 15,000/month wages). ESI is 3.25% employer and 0.75% employee on gross salary for workers up to Rs 21,000/month, 10+ employees. Service charge and declared tips form part of wages and must be included in EPF/ESI computation."
              }
            },
            {
              "@type": "Question",
              "name": "How is staff accommodation perquisite valued for TDS purposes?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Staff accommodation under Section 17(2) is valued at 15% of salary (cities above 25 lakh population), 10% (cities 10-25 lakh), or 7.5% (others). If accommodation is leased, the perquisite is the lower of actual rent or the percentage formula. This value is added to taxable salary for TDS. Incorrect computation is the most common reason hospitality companies receive CBDT demand notices."
              }
            },
            {
              "@type": "Question",
              "name": "What are the Labour Code 2025 changes for hotel payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All four Codes active November 21, 2025: Code on Wages 2019 requires basic pay at least 50% of CTC and final wages within 2 days of exit. Industrial Relations Code 2020: fixed-term staff (including seasonal banquet workers) qualify for gratuity after 1 year and must receive appointment letters. OSH Code 2020: digital registers mandatory, paper not accepted; women may work night shifts with written consent and safety measures."
              }
            },
            {
              "@type": "Question",
              "name": "How do hotels handle payroll for seasonal and banquet staff?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under IR Code 2020, issue fixed-term contracts specifying duration, wage, and benefits. Seasonal staff receive same wages as permanent employees. EPF/ESI apply if thresholds met. Fixed-term staff now eligible for pro-rata gratuity after 1 year (reduced from 5 years). Exit settlements must be completed within 2 working days under Code on Wages 2019."
              }
            },
            {
              "@type": "Question",
              "name": "What are the payroll compliance deadlines for TDS, EPF, and ESI in 2026?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Salary by 7th of following month (Code on Wages); TDS deposit by 7th; EPF and ESI by 15th. Form 24Q quarterly: July 31, October 31, January 31, May 31. Form 16 by June 15 under Income Tax Act 2025 revised formats (effective April 1, 2026). Payment of Bonus by November 30."
              }
            },
            {
              "@type": "Question",
              "name": "Do hotel night-shift workers have special payroll or statutory rights?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under OSH Code 2020 (active November 2025), women may work night shifts with written consent and mandatory safety measures (transport and security). Night-shift registers must be maintained digitally. Night allowances are taxable salary income for TDS. Overtime beyond 8-9 hours (per state rules) attracts twice the ordinary rate. Overtime records must be in digital registers. Quick Answers Is tip income taxable in India? Yes - taxable under head Salaries, Section 17(1) Income Tax Act; employer includes in Form 16 and deducts TDS under Section 192. How is staff accommodation perquisite calculated? 15%/10%/7.5% of salary based on city population under Section 17(2); or actual rent paid - whichever is lower. Hotel ka payroll outsource kaise kare? Hotel ka payroll manage karne ke liye tip income TDS, service charge distribution, PF/ESI, aur accommodation perquisite sab sahi se calculate karna zaroori hai. Patron Accounting Rs 2,999/month se complete hospitality payroll handle karta hai."
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
                        Hospitality Payroll Services in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">15 January 2024</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tip and Service Charge Compliance:</span> Pooled service charge calculations, POS reconciliation, transparent employee statements, and TDS compliance on tip income</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Accommodation Perquisite Valuation:</span> Section 17(2) Income Tax Act: correct perquisite computation for live-in staff prevents TDS notices</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Seasonal and Banquet Staff Payroll:</span> Fixed-term benefit parity, gratuity after 1 year under IR Code 2020, exit settlement within 2 working days</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>50% Basic Wage Rule:</span> CTC restructuring for hotel and restaurant staff under Code on Wages 2019 (active November 2025)</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ hospitality payroll clients | 10,000+ businesses served | 4.9 star rating | Pan-India multi-state coverage</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Hospitality%20Payroll&body=Hello%2C%0A%0AI%20need%20hotel%20payroll%20support.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20Hospitality%20Payroll%20Services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Hospitality Payroll',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-the-hospitality-industry', 'label' => 'Hospitality Payroll', 'selected' => true, 'disabled' => false],
                            ['value' => 'hospitality-sector-accounting-services', 'label' => 'Hospitality Accounting', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services (All Sectors)', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-returns', 'label' => 'GST Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'fssai-registration', 'label' => 'FSSAI Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration', 'label' => 'Company Registration', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our 5-star hotel had been excluding tip income from TDS calculations for years. Patron Accounting identified the gap, restructured our payroll to include all tip and service charge income, and prevented what could have been a massive CBDT demand.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">GM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">General Manager</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">5-Star Hotel, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Managing payroll for 400+ seasonal banquet staff during wedding season was a nightmare. Patron ran parallel payroll tracks, issued fixed-term contracts, and processed exits within 2 working days. Flawless execution.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">BM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Banquet Manager</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Wedding Venue, Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The 50% basic wage rule under Code on Wages forced us to restructure every employee's CTC. Patron modelled the impact, redesigned salary structures, and managed the employee communication. PF contributions went up but we are now fully compliant.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">HR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">HR Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Hotel Chain, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Staff accommodation perquisite under Section 17(2) was being miscalculated by our previous accountant. Several employees got IT notices. Patron corrected the computation, filed revised Form 16, and resolved all notices.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FH</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Finance Head</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Resort Group, Goa</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our QSR chain operates across 8 states with different PT rates and minimum wages. Patron handles state-specific compliance for every outlet. Monthly reports by the 10th, every month, without exception.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CO</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">COO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">QSR Chain, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">5 months ago</div></div></div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 500+ hospitality businesses with CA-managed payroll compliance from Patron Accounting.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll Services - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Hospitality Payroll Services at a Glance</strong></p>
                    <p>Hospitality payroll covers EPF (12%+12%), ESI (3.25%+0.75%), tip income TDS under Section 17(1), service charge distribution via POS reconciliation, staff accommodation perquisite under Section 17(2), 50% basic wage rule under Code on Wages 2019, and seasonal workforce compliance. Four Labour Codes active November 2025; Income Tax Act 2025 from April 1, 2026. Patron Accounting provides CA-managed hospitality payroll from Rs 2,999/month.</p>
                </div>
                <p>Hospitality payroll in India is one of the most complex payroll categories. Hotels, resorts, restaurants, catering companies, and banquet facilities employ workers across dozens of roles with different pay structures - base salary, shift allowances, weekend premiums, tip income, service charge allocations, and accommodation benefits. These must all be accurately calculated, correctly taxed, and compliantly filed every month.</p>
                <p>With India's four Labour Codes active from November 2025 and the Income Tax Act 2025 effective April 1, 2026, hospitality operators face the most significant payroll reform environment in decades. The 50% basic wage requirement reshapes every CTC structure; digital records replace paper registers; seasonal staff qualify for gratuity after one year; and night-shift women's employment requires written consent under the OSH Code.</p>
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
                <h2 class="section-title">What is Hospitality Payroll?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Hospitality payroll is the end-to-end management of salary processing, statutory compliance, and benefit valuation for the workforce of hotels, restaurants, resorts, catering firms, and other hospitality businesses operating in India under central and state labour laws.</p><p>The complexity arises from four structural factors: remuneration is multi-component (base salary, shift allowances, night premiums, tips, and service charges each taxed differently); the workforce is permanently mixed (full-time managers, contractual chefs, fixed-term banquet teams, casual workers); operations are 24/7 and seasonal (payroll spikes during wedding seasons and festivals); and in-kind benefits are significant (staff accommodation, meals, uniforms, and transport are all taxable perquisites under Section 17(2) of the Income Tax Act).</p><p>With India's four Labour Codes active from November 2025, hospitality payroll requires specialist CA-managed infrastructure for correct compliance.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Hospitality Payroll:</strong></p>
                    <ul><li><strong>Tip Income:</strong> Taxable under head Salaries, Section 17(1) IT Act; employer includes in Form 16 and deducts TDS under Section 192</li><li><strong>Service Charge:</strong> 5-10% of bill; distributed per hotel policy; part of wages for EPF, ESI, and TDS computation</li><li><strong>Accommodation Perquisite:</strong> Section 17(2) IT Act; 15%/10%/7.5% of salary based on city population; added to taxable income</li><li><strong>Code on Wages 2019:</strong> Basic pay at least 50% of CTC; salary by 7th; final wages within 2 working days of exit</li><li><strong>OSH Code 2020:</strong> Digital registers mandatory; women night shifts with consent and safety measures; active November 2025</li><li><strong>GST on Rooms (Sep 2025):</strong> Up to Rs 7,500/night: 5% without ITC; above Rs 7,500: 18% with ITC (56th GST Council)</li></ul>

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
                            <!-- HOSP tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">HOSP</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Hospitality Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Hotel and Restaurant</span>
                        <strong>Hospitality Payroll Expert</strong>
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
            <h2 class="section-title">Who Needs Hospitality Payroll Services in India</h2>
            <div class="content-text">
                
                <ul><li>Luxury and mid-range hotels, resorts, and boutique properties</li><li>Standalone restaurants, QSRs, and multi-outlet food chains</li><li>Hotel chains and hospitality groups operating across multiple states</li><li>Banquet facilities, wedding venues, and event catering companies with seasonal spikes</li><li>Cloud kitchens, dark kitchens, and food-delivery kitchen operators</li><li>Resorts, heritage hotels, wellness properties, and eco-lodges</li><li>Airport lounges, in-flight catering, and travel hospitality operators</li><li>Hospital canteens, corporate cafeterias, and institutional food-service contractors</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Hospitality Payroll Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Payroll Processing</td><td>Gross-to-net for all grades; shift/night/weekend pay; overtime; payslips; bank files; outlet-wise and department-wise reports</td></tr><tr><td>Tip Income and Service Charge Management</td><td>Daily POS reconciliation; pooled service charge calculation; department/employee distribution; transparent statements; TDS compliance on tips under Section 17(1)</td></tr><tr><td>Staff Accommodation and Meal Perquisite</td><td>Section 17(2) valuation for live-in staff; Rs 50/meal exemption calculation; uniform and transport benefit tax treatment; correct TDS to avoid IT notices</td></tr><tr><td>EPF and ESI Compliance</td><td>Registration, monthly ECR, challan deposit by 15th, annual returns, UAN management, ESI claim support, Form 10C/10D processing</td></tr><tr><td>TDS Management (IT Act 2025)</td><td>Section 192 on salary including tips and perquisites; deposit by 7th; Form 24Q quarterly; Form 16 by June 15 under revised formats</td></tr><tr><td>Seasonal and Banquet Workforce Payroll</td><td>Rapid onboarding; pro-rata salary; fixed-term gratuity after 1 year (IR Code 2020); exit settlement within 2 working days</td></tr>

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
            <h2 class="section-title">Hospitality Payroll Process - 8 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From employee onboarding and tip/service charge computation through to annual compliance, our structured process ensures complete payroll compliance for your hotel or restaurant.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Employee Data Onboarding</h3><p class="step-description">Collect PAN, Aadhaar, bank details, contracts, work location state, department, shift category, and accommodation status. Map each employee to service charge eligibility. Issue appointment letters under IR Code 2020.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All data collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Service charge eligibility mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="30" x2="90" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M85 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Onboarded</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">CTC Review and 50% Wage Rule</h3><p class="step-description">Verify basic pay is at least 50% of CTC under Code on Wages 2019. Design shift allowance, night premium, weekend pay, HRA, LTA, food allowance (up to Rs 50/meal exempt).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC restructured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 50% rule verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="45" height="65" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="65" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><line x1="55" y1="42" x2="65" y2="42" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">CTC Compliant</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Attendance, Shift, and Overtime Data</h3><p class="step-description">Compile biometric/POS clock-in data. Record overtime, split shifts, and night-shift days. Apply weekend and public holiday premiums per state Shops Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shifts compiled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Night-shift tracked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="35" width="15" height="25" rx="2" fill="#F5A623" opacity="0.6"/><rect x="52" y="40" width="15" height="20" rx="2" fill="#10B981" opacity="0.6"/><rect x="74" y="32" width="15" height="28" rx="2" fill="#F5A623" opacity="0.6"/></svg></div><span class="illustration-label">Data Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Tip and Service Charge Computation</h3><p class="step-description">Reconcile monthly POS data for service charges and credit card tips. Apply distribution formula per hotel policy. Prepare employee-level allocation statements.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> POS reconciled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Distribution computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="25" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TIPS</text><text x="60" y="49" font-size="9" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">+SC</text></svg></div><span class="illustration-label">Tips Allocated</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Gross-to-Net Payroll Calculation</h3><p class="step-description">Gross pay (base + allowances + shift + service charge + tips). Add accommodation perquisite per Section 17(2). Deduct EPF 12%, ESI 0.75%, TDS, and PT. Net take-home computed.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Perquisite included</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="25" x2="90" y2="25" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="30" y1="50" x2="70" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Payslip Generation and Salary Disbursement</h3><p class="step-description">Itemised digital payslips with all earnings (including tip and service charge), deductions, and employer contributions. Bank transfers by 7th per Code on Wages.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary by 7th</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="48" font-size="12" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PAY</text><path d="M82 55l5 5 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Paid</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Statutory Filing and Deposit</h3><p class="step-description">TDS by 7th, EPF/ESI by 15th. ECR monthly with EPFO. ESI return (Form 6) within 15 days post-quarter. Form 24Q quarterly under IT Act 2025. Digital registers per OSH Code.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS/EPF/ESI deposited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Returns filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="65" y="10" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="22" y1="30" x2="52" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="72" y1="30" x2="102" y2="30" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Annual Compliance</h3><p class="step-description">Form 16 by June 15. Annual EPF/ESI returns. PT annual returns. Bonus by November 30 (8.33-20%). Gratuity provision. Update accommodation perquisite for new FY CTC review.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Annual returns filed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="10" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="37" r="20" fill="#E8F5E9" stroke="#10B981" stroke-width="2"/><path d="M50 37l7 7 14-14" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Year Complete</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents and Information Required</h2>
            <div class="content-text">
                
                <h3>Employee Onboarding</h3><ul><li>PAN, Aadhaar, bank IFSC + account number, appointment letter, employment contract, work location state, tax regime declaration</li></ul><h3>Employer Registrations</h3><ul><li>PAN, TAN, EPF employer code, ESIC code, professional tax certificate (each state), Shops and Establishments certificate</li></ul><h3>Salary and Shift Data</h3><ul><li>CTC offer letter, allowance break-up, shift pay policy, overtime/night-shift differential rate, service charge distribution formula</li></ul><h3>Accommodation and Perquisites</h3><ul><li>Accommodation type (hotel-owned/leased), employee grade, actual rent, metro/non-metro status for perquisite rate</li></ul><h3>Tip and Service Charge Data</h3><ul><li>Monthly POS service charge total, credit card tip report, cash tip declarations, department eligibility list, distribution policy</li></ul><h3>Attendance and Previous Records</h3><ul><li>Monthly shift roster, biometric/POS clock-in data, overtime hours, split-shift records, LOP days, public holiday working</li><li>Year-to-date salary, TDS deposited, Form 26AS/AIS, previous Form 16 (mid-year joiners)</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Key Hospitality Payroll Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Tip and service charge TDS under-deduction</td><td>Hotel payroll teams often exclude tip income from taxable salary base; CBDT audits identify the gap with 12% interest on shortfall</td><td>Annual taxable income computed including tips and service charge before each monthly payroll; TDS recalculated dynamically</td></tr><tr><td>Staff accommodation perquisite miscalculation</td><td>Section 17(2) frequently miscalculated using market rent instead of 15% salary formula; leads to TDS errors and employee notices</td><td>Correct 15%/10%/7.5% formula applied; perquisite reflected in payslip and Form 16; no year-end tax shock</td></tr><tr><td>50% basic wage CTC restructuring</td><td>Low basic (20-30%) with high service allowances to minimise PF; Code on Wages 2019 mandates 50% minimum; EPFO retrospective demands</td><td>Full CTC audit; revised structures meeting 50% rule; incremental EPF impact modelled; employee communication support</td></tr><tr><td>Seasonal surge payroll for weddings and peak season</td><td>Hundreds of seasonal workers for Oct-Feb wedding season; rapid payroll with pro-rata benefits; HR teams overwhelmed</td><td>Parallel payroll tracks; fixed-term gratuity after 1 year (IR Code 2020); exit settlements within 2 working days</td></tr>

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
            <h2 class="section-title">Hospitality Payroll Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr><tr><td>Starter (Up to 25 employees)</td><td>Rs 2,999/month (payroll processing, payslips, EPF/ESI, TDS, basic tip/service charge)</td></tr><tr><td>Growth (26-100 employees)</td><td>Rs 6,999/month (All Starter + multi-shift, perquisite, multi-state PT, Form 24Q, employee portal)</td></tr><tr><td>Property (101-500 employees)</td><td>Rs 14,999/month (All Growth + tip reconciliation, seasonal payroll, Labour Code restructuring, LWF, chain reporting)</td></tr><tr><td>Enterprise (500+ or multi-property)</td><td>Custom quote (dedicated CA, multi-property reporting, HRMS integration, full audit support, all-India)</td></tr><tr><td>Tip/Service Charge + Perquisite Add-on</td><td>Rs 1,500/month (for Starter plan: pooling computation + accommodation valuation)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Hospitality Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Hospitality%20Payroll%20from%20Patron%20Accounting.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Compliance Deadlines for Hospitality Payroll 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>April 1, 2026</td><td>Income Tax Act 2025 in effect - update TDS formats, Form 24Q, Form 16; review perquisite valuation rules</td></tr><tr><td>7th of each month</td><td>Salary disbursement + TDS deposit (Rs 200/day late fee Section 234E + 1.5%/month interest)</td></tr><tr><td>15th of each month</td><td>EPF + ESI contributions (EPF: 12% interest Section 7Q + damages up to 25% Section 14B)</td></tr><tr><td>Within 2 days of exit</td><td>Final wages payable under Code on Wages 2019 (penalty up to Rs 50,000 first offence)</td></tr><tr><td>Jul 31 / Oct 31 / Jan 31 / May 31</td><td>Form 24Q quarterly TDS return (Rs 200/day late fee + interest)</td></tr><tr><td>November 30</td><td>Payment of Bonus Act - annual bonus (8.33-20% of wages for 20+ employees)</td></tr><tr><td>June 15</td><td>Issue Form 16 to all employees under IT Act 2025 (Rs 100/day per certificate delayed)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> All four Labour Codes active since November 21, 2025. Income Tax Act 2025 effective April 1, 2026. EPF non-payment: up to Rs 3,00,000 and 3 years imprisonment. Tip income TDS under-deduction: 12% interest on shortfall. Patron Accounting manages all deadline calendars with advance alerts.</p>

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
            <h2 class="section-title">Benefits of Outsourcing Hospitality Payroll</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Zero TDS Exposure on Tips</h3><p>All tip and service charge components included in taxable salary base; Form 16 reflects correct income; no CBDT demand notices.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Correct Perquisite Computation</h3><p>Section 17(2) formula applied correctly for live-in staff; documented and disclosed in Form 16; no year-end tax shock.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Labour Code 2025 Compliance</h3><p>50% basic rule, digital registers, fixed-term gratuity after 1 year, exit within 2 days - all implemented from day one.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3>Seasonal Workforce Managed</h3><p>Fixed-term and casual staff payroll processed correctly; no compliance gaps during wedding or peak season surges.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div><h3>Multi-Property Coverage</h3><p>PT filings across all states; Shops Act compliance; consistent payroll across outlets; chain-level reporting.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8V7m0 10v1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Penalty Prevention</h3><p>Zero late EPF/ESI deposits; no Section 234E TDS delay fees; no Code on Wages salary deadline violations.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">What Our Hospitality Clients Say</h2>
            <div class="content-text">
                
                <div class="highlight-box"><p><em>500+ hospitality payroll clients | 10,000+ businesses served | 15+ years experience | 50,000+ payroll documents annually | 4.9 stars (500+ reviews) | Offices: Gurugram, Mumbai, Pune, Bengaluru | 99.9% on-time filing</em></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Outsourcing Hospitality Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Patron Accounting</th><th>DIY / In-House</th></tr></thead>
                    <tbody>
                        <tr><td>Tip Income TDS</td><td>All tip and service charge income correctly included; no TDS gap</td><td>Often excluded from taxable salary - CBDT notice risk</td></tr><tr><td>Perquisite Valuation</td><td>Correct Section 17(2) formula; documented in Form 16</td><td>Frequently miscalculated; wrong base used</td></tr><tr><td>Labour Code 2025</td><td>Fully implemented from Day 1; no retrospective EPFO liability</td><td>50% wage rule, digital registers, gratuity often missed</td></tr><tr><td>Seasonal Surge</td><td>Parallel tracks; rapid onboarding; clean exit settlements</td><td>HR overwhelmed during wedding season; error rate spikes</td></tr><tr><td>Cost</td><td>From Rs 2,999/month all-inclusive; no hidden costs</td><td>Payroll staff Rs 3-6 lakh/year + software + IT notices</td></tr><tr><td>Penalty Risk</td><td>Near-zero - CA-supervised with statutory deadline alerts</td><td>High - multiple parallel compliance streams</td></tr><tr><td>Audit Support</td><td>Dedicated CA handles all statutory notices</td><td>GM/HR answers EPFO and CBDT queries ad-hoc</td></tr>

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
            <h2 class="section-title">Related Services for Hospitality Businesses</h2>
            <div class="content-text">
                
                <p>Hotels and restaurants using Patron's payroll services frequently also need:</p><ul><li><a href="/hospitality-sector-accounting-services">Hospitality Accounting Services</a> - Complete accounting for hotels, restaurants, and resorts</li><li><a href="/gst-registration">GST Registration</a> - Mandatory for hotels and restaurants; specified premises classification</li><li><a href="/gst-returns">GST Return Filing</a> - GSTR-1, GSTR-3B, GSTR-9; GST on rooms, F and B, banquets</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Form 24Q for salary TDS; Form 26Q for contractor payments</li><li><a href="/fssai-registration">FSSAI Registration</a> - Mandatory food licence for restaurants, cloud kitchens, and hotel F and B</li><li><a href="/private-limited-company-registration">Company Registration</a> - Pvt Ltd or LLP setup for new restaurant or hotel entities</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Hospitality Payroll in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Act / Code</th><th>Key Provision</th><th>Hospitality Relevance</th></tr></thead><tbody><tr><td><a href="https://labour.gov.in/labourcodes" target="_blank" rel="noopener">Code on Wages, 2019</a></td><td>Basic wages at least 50% of CTC; salary by 7th; final wages within 2 working days; penalty up to Rs 50,000/Rs 1,00,000</td><td>All hotels and restaurants; CTC restructuring mandatory</td></tr><tr><td>Social Security Code, 2020</td><td>EPF 12%+12%; ESI 3.25%+0.75%; extends to gig workers; deposit by 15th</td><td>All hospitality establishments meeting headcount thresholds</td></tr><tr><td>Industrial Relations Code, 2020</td><td>Fixed-term gratuity after 1 year; appointment letters mandatory; digital registers</td><td>Seasonal banquet staff, fixed-term kitchen staff</td></tr><tr><td>OSH Code, 2020</td><td>Digital payroll registers; women night shifts with consent; health check above 40</td><td>Housekeeping, F and B service, kitchen; night-shift compliance</td></tr><tr><td><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act 2025</a></td><td>Section 192 TDS on salary + tips + perquisites; Section 17(2) accommodation valuation; revised Form 24Q/16</td><td>TDS on tip income, accommodation perquisite, meal allowance</td></tr><tr><td>Payment of Gratuity Act, 1972</td><td>15 days salary per year; cap Rs 20 lakh; tax-free under Section 10(10); FTE eligible after 1 year</td><td>All hospitality with 10+ employees</td></tr><tr><td><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF Act 1952 (under SSC)</a></td><td>12%+12% of basic+DA; deposit by 15th; late 12% interest + 25% damages; Rs 3,00,000 + 3 years imprisonment</td><td>Service charge and tips in wage computation base</td></tr></tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Hospitality Payroll</h2>
                    <p class="faq-expanded__lead">Get answers about tip income TDS, service charge distribution, accommodation perquisite, EPF/ESI rates, Labour Code 2025 impact, seasonal staff, and night-shift compliance.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Hospitality Payroll'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is hospitality payroll and why is it more complex than standard payroll?</h3>
                        <div class="faq-expanded__a"><p>Hospitality payroll covers salary, tip income TDS, service charge distribution, and in-kind benefit valuation for hotels, restaurants, resorts, and catering businesses. It is more complex for four reasons: remuneration is multi-component (base, shift allowances, night premiums, tips, service charges - each taxed differently); the workforce is permanently mixed (full-time, fixed-term, casual, seasonal); operations are 24/7 and seasonal; and in-kind benefits like accommodation and meals are taxable perquisites under Section 17(2) requiring specific statutory valuation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is tip income taxed for hotel and restaurant employees in India?</h3>
                        <div class="faq-expanded__a"><p>Tips are taxable income under head Salaries under Section 17(1) of the Income Tax Act. The employer must include all declared tip income - whether cash declared by the employee or credit card tips from POS - in the employee's annual taxable salary for TDS under Section 192 and disclosure in Form 16. Employers excluding tip income from the taxable base risk TDS under-deduction notices from CBDT with 12% interest on the shortfall.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the EPF and ESI contribution rates for hotel employees?</h3>
                        <div class="faq-expanded__a"><p>EPF contributions are 12% of basic + DA from both employer and employee, mandatory for 20+ employees, deposited by the 15th. The employer's 12% is split: 3.67% to EPF and 8.33% to EPS (capped at Rs 15,000/month wages). ESI is 3.25% employer and 0.75% employee on gross salary for workers up to Rs 21,000/month, 10+ employees. Service charge and declared tips form part of wages and must be included in EPF/ESI computation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is staff accommodation perquisite valued for TDS purposes?</h3>
                        <div class="faq-expanded__a"><p>Staff accommodation under Section 17(2) is valued at 15% of salary (cities above 25 lakh population), 10% (cities 10-25 lakh), or 7.5% (others). If accommodation is leased, the perquisite is the lower of actual rent or the percentage formula. This value is added to taxable salary for TDS. Incorrect computation is the most common reason hospitality companies receive CBDT demand notices.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What are the Labour Code 2025 changes for hotel payroll?</h3>
                        <div class="faq-expanded__a"><p>All four Codes active November 21, 2025: Code on Wages 2019 requires basic pay at least 50% of CTC and final wages within 2 days of exit. Industrial Relations Code 2020: fixed-term staff (including seasonal banquet workers) qualify for gratuity after 1 year and must receive appointment letters. OSH Code 2020: digital registers mandatory, paper not accepted; women may work night shifts with written consent and safety measures.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How do hotels handle payroll for seasonal and banquet staff?</h3>
                        <div class="faq-expanded__a"><p>Under IR Code 2020, issue fixed-term contracts specifying duration, wage, and benefits. Seasonal staff receive same wages as permanent employees. EPF/ESI apply if thresholds met. Fixed-term staff now eligible for pro-rata gratuity after 1 year (reduced from 5 years). Exit settlements must be completed within 2 working days under Code on Wages 2019.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What are the payroll compliance deadlines for TDS, EPF, and ESI in 2026?</h3>
                        <div class="faq-expanded__a"><p>Salary by 7th of following month (Code on Wages); TDS deposit by 7th; EPF and ESI by 15th. Form 24Q quarterly: July 31, October 31, January 31, May 31. Form 16 by June 15 under Income Tax Act 2025 revised formats (effective April 1, 2026). Payment of Bonus by November 30.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do hotel night-shift workers have special payroll or statutory rights?</h3>
                        <div class="faq-expanded__a"><p>Under OSH Code 2020 (active November 2025), women may work night shifts with written consent and mandatory safety measures (transport and security). Night-shift registers must be maintained digitally. Night allowances are taxable salary income for TDS. Overtime beyond 8-9 hours (per state rules) attracts twice the ordinary rate. Overtime records must be in digital registers.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Is tip income taxable in India?</strong><br>Yes - taxable under head Salaries, Section 17(1) Income Tax Act; employer includes in Form 16 and deducts TDS under Section 192.</p><p><strong>How is staff accommodation perquisite calculated?</strong><br>15%/10%/7.5% of salary based on city population under Section 17(2); or actual rent paid - whichever is lower.</p><p><strong>Hotel ka payroll outsource kaise kare?</strong><br>Hotel ka payroll manage karne ke liye tip income TDS, service charge distribution, PF/ESI, aur accommodation perquisite sab sahi se calculate karna zaroori hai. Patron Accounting Rs 2,999/month se complete hospitality payroll handle karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Tip Income and Service Charge - Payroll Compliance</h2>
            <div class="content-text">
                
                <p>Tip income and service charge distribution are the most distinctive and legally complex elements of hospitality payroll. Incorrect handling leads to TDS under-deduction notices, ESI/EPF disputes, and employee grievances.</p><h3>Service Charge Payroll Checklist</h3><ul><li><strong>Step 1 - POS Reconciliation:</strong> Reconcile total service charges from POS monthly - separate cash and credit card</li><li><strong>Step 2 - Eligibility Mapping:</strong> Identify eligible staff (F and B service, housekeeping, front desk, kitchen) per hotel policy</li><li><strong>Step 3 - Distribution Formula:</strong> Apply department or individual allocation; document the basis (points, hours, grade)</li><li><strong>Step 4 - Payslip Disclosure:</strong> Include service charge in each eligible employee's payslip as named component</li><li><strong>Step 5 - TDS Computation:</strong> Add service charge to taxable salary; recompute TDS under IT Act 2025 regime</li><li><strong>Step 6 - ESI/PF Inclusion:</strong> Service charge is part of wages under Social Security Code; include in EPF/ESI if applicable</li><li><strong>Step 7 - Form 16:</strong> Disclose service charge income in Part B under Section 17(1)</li></ul><p style="margin-top:16px;"><strong>Need help with tip and service charge compliance? <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20hospitality%20payroll%20tip%20and%20service%20charge%20compliance." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Hospitality Payroll Compliance Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Hospitality payroll sits at the intersection of India's most complex statutory compliance environment and the country's most operationally intensive industry. Tip income TDS, accommodation perquisite valuation, service charge distribution, multi-shift computations, seasonal workforce management, and the November 2025 Labour Codes create a compliance load that in-house HR teams routinely struggle to manage.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting provides the specialist CA infrastructure that India's hotel and restaurant operators need: accurate multi-component payroll, correct tip and service charge TDS, Labour Code 2025 implementation, and audit-ready digital records.</p><p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;"><strong>500+ hospitality clients | 10,000+ businesses | 15+ years | Starting from Rs 2,999/month | Pan-India coverage</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Hospitality%20Payroll%20from%20Patron%20Accounting.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Hospitality%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20hospitality%20payroll%20services.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Hospitality Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides payroll for hotels, restaurants, and resorts across major Indian cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-the-hospitality-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-the-hospitality-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-the-hospitality-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/payroll-services-for-the-hospitality-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Hospitality Payroll</div><div class="pa-cross-grid"><a href="/hospitality-sector-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Hospitality Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/gst-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/fssai-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 15 January 2024 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">15 January 2024</span> &nbsp;|&nbsp; <strong>Next Review:</strong> October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months (April and October). Next review: October 2026. Key legislation: Code on Wages 2019, Social Security Code 2020, Income Tax Act 2025, OSH Code 2020.</p>
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
