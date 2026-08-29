

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
    <title>Payroll Services in India - Salary, PF, ESI & TDS Filing</title>
    <meta name="description" content="Managed payroll services in India covering EPF, ESI, TDS, PT, LWF and labour law compliance. CA-managed, from INR 500 per employee per month. All industries.">
    <link rel="canonical" href="/payroll-services">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Payroll Services in India - Salary, PF, ESI & TDS Filing">
    <meta property="og:description" content="Managed payroll services in India covering EPF, ESI, TDS, PT, LWF and labour law compliance. CA-managed, from INR 500 per employee per month. All industries.">
    <meta property="og:url" content="/payroll-services">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Payroll Services in India - Salary, PF, ESI & TDS Filing">
    <meta name="twitter:description" content="Managed payroll services in India covering EPF, ESI, TDS, PT, LWF and labour law compliance. CA-managed, from INR 500 per employee per month. All industries.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll Services in India",
          "description": "Managed payroll services in India covering EPF, ESI, TDS, PT, LWF and labour law compliance. CA-managed, from INR 500 per employee per month. All industries.",
          "url": "https://www.patronaccounting.com/payroll-services",
          "serviceType": "Payroll Services in India",
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
              "name": "Payroll Services in India",
              "item": "https://www.patronaccounting.com/payroll-services"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is included in payroll services in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Managed payroll services include the entire monthly cycle: gross salary computation, EPF deduction and EPFO ECR filing, ESI deduction and ESIC portal payment, TDS computation and deposit under Section 192, Professional Tax per state, Labour Welfare Fund contributions, payslip generation, bank transfer file, wage register maintenance, and Form 24Q quarterly returns. Full-service providers also handle Form 16, F&F settlements, bonus computation under Payment of Bonus Act 1965, and gratuity provision."
              }
            },
            {
              "@type": "Question",
              "name": "How much do payroll services cost in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Basic payroll processing costs INR 300-500 per employee per month (PEPM); full statutory compliance (EPF, ESI, TDS, PT, LWF) costs INR 500-800 PEPM; industry-specific managed payroll runs INR 800-1,500 PEPM; enterprise multi-state payroll costs INR 1,500-2,500 PEPM. Most providers charge a one-time setup fee of INR 3,000-20,000, typically waived on annual contracts. All fees subject to 18% GST."
              }
            },
            {
              "@type": "Question",
              "name": "Is EPF mandatory for all companies in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "EPF is mandatory for every establishment employing 20 or more persons under Section 1(3) of the EPF and Miscellaneous Provisions Act, 1952. Once covered, it applies to all employees earning up to INR 15,000/month in basic+DA. Both employer and employee each contribute 12%. Establishments below the threshold may voluntarily register. Patron Accounting handles EPF registration, ECR generation, monthly challan payment and all EPFO returns."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if you miss a payroll compliance deadline?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Missing statutory deadlines attracts cascading penalties. Delayed EPF deposit: 12% annual interest plus damages 5-25% under Section 14B. Missed TDS deposit: 1.5% monthly interest plus INR 200/day under Section 234E. Failure to deduct TDS: penalty equal to TDS amount under Section 271C. Repeat EPF or ESI defaults can result in criminal prosecution. Patron Accounting maintains a statutory filing calendar and files all returns before deadlines."
              }
            },
            {
              "@type": "Question",
              "name": "How has the November 2025 Labour Code reform changed payroll in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The November 2025 notification introduced five major changes: 50% basic wage rule (basic >= 50% of CTC under Code on Wages 2019); gratuity for fixed-term employees after 1 year (Social Security Code 2020); social security for gig workers; mandatory digital wage registers with 7-year retention; and unified definition of wages across all four codes. Companies with allowance-heavy structures face higher EPF and gratuity liabilities."
              }
            },
            {
              "@type": "Question",
              "name": "Payroll outsourcing kaise kare India mein?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Patron Accounting se payroll outsource karna simple hai. Aapko employee data (PAN, Aadhaar, UAN, bank details), salary structure, aur attendance records dena hota hai. Hum complete setup karte hain - EPFO, ESIC, TAN, PT registrations se lekar monthly payslip, TDS, PF, ESI deposits, Form 24Q filing, aur year-end Form 16 tak sab handle karte hain. Fee INR 149 per employee se shuru hoti hai. Quick Answers Q: EPF rate? A: 12% employee + 12% employer on Basic+DA. Deposit by 15th monthly. [EPF Act 1952, Section 1(3)] Q: ESI rate? A: 0.75% employee + 3.25% employer. Applicable for gross <= INR 21,000/month. Deposit by 15th. [ESI Act 1948] Q: TDS deposit deadline? A: 7th of following month under Section 192 of the Income Tax Act, 1961. Q: Salary payment deadline? A: 7th (under 1,000 employees) or 10th (1,000+). [Code on Wages 2019 / Payment of Wages Act 1936] Q: Basic wage minimum? A: 50% of total CTC. [Code on Wages 2019, November 2025] Q: Form 16 deadline? A: To all employees by June 15 annually. Form 24Q quarterly: Apr, Jul, Oct, Jan."
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
                        Managed Payroll Services in India: EPF, ESI, TDS and Labour Law Compliance
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Full Statutory Compliance:</span> EPF, ESI, TDS, PT, LWF, bonus and gratuity provision - all filings handled on time every month across all states.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Multi-State Payroll:</span> Separate minimum wages, PT slabs and LWF rules managed state by state for distributed teams across India.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Industry Specialist:</span> Dedicated payroll for healthcare, logistics, manufacturing, IT, hospitality, retail and more - see industry pages below.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA and CS Team:</span> Monthly MIS reports, payroll registers, Form 16, and audit-ready documentation included as standard.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">500+ companies and 20,000+ employees trust Patron Accounting for managed payroll across 10+ industries.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Payroll%20Services.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20managed%20payroll%20services%20for%20my%20company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Payroll Services',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services (Overview)', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-processing-and-management-services', 'label' => 'Payroll Processing and Management', 'selected' => false, 'disabled' => false],
                            ['value' => 'esic-calculation-and-compliance-services', 'label' => 'ESIC Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'pf-registration', 'label' => 'PF Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'esic-registration', 'label' => 'ESIC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gratuity-calculation-and-compliance-services', 'label' => 'Gratuity Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Moved our 280-employee payroll to Patron after struggling with new Labour Code requirements. Within one month, payslips accurate, PF and ESI filed on time, F&F processing done within the prescribed timeline. Excellent transition support.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sudhir Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Director, Manufacturing Company, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handles our payroll across 6 states. The PT and LWF compliance alone was a nightmare in-house. They have a state-wise matrix and never miss a deadline. Monthly MIS reports are a bonus for our finance team.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anuradha Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Retail Chain, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a GCC with 120 India employees, we needed a CA firm that understood both Indian payroll law and cross-border salary components. Patron got our DTAA-based TDS right from month one. Expat payroll handled seamlessly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Mark Reynolds</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">India Country Head, Technology GCC, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our hospital chain has 450 employees across 3 facilities with shift-based pay, visiting doctor TDS, and ESI for all clinical staff. Patron Accounting's healthcare payroll specialist handles everything perfectly. Zero penalty in 3 years.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Priyanka Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Multi-Specialty Hospital, Hyderabad</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Started with 12 employees and Patron has scaled with us to 350. Never had to renegotiate or change providers. The monthly payroll MIS and year-end Form 16 reconciliation are consistently perfect. Best payroll decision we made.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rohit Patil</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, SaaS Company, Chennai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div>
</div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get CA-managed payroll with zero-penalty statutory compliance - from monthly payslips to annual Form 16.</p>
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
            <a href="#who-section" class="toc-btn">Why Outsource</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">9-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Labour Codes 2025</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Calendar</a>
            <a href="#benefits-section" class="toc-btn">Benefits</a>
            <a href="#comparison-section" class="toc-btn">In-House vs Outsource</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Services in India - Key Facts for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Payroll Services Services at a Glance</strong></p>
                    <p>Running payroll in India means navigating EPF under the EPF Act 1952, ESI under the ESI Act 1948, TDS under Section 192, Professional Tax across multiple states, and gratuity under the Payment of Gratuity Act 1972 - plus the November 2025 Labour Code reforms. Patron Accounting delivers end-to-end managed payroll for businesses across all industries, starting from INR 149 per employee per month.</p>
                </div>
                <p>India's payroll compliance landscape became significantly more demanding after the four Labour Codes were notified in November 2025. These codes merged 29 older central labour laws, introduced the 50% basic wage rule, mandated digital record-keeping, and extended social security coverage to gig workers and fixed-term employees.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Key Point</th><th>Detail</th></tr></thead><tbody>
<tr><td>Who needs payroll services?</td><td>Every employer in India with 1+ salaried employees; statutory obligations begin from the first hire</td></tr>
<tr><td>Mandatory deductions</td><td>EPF (12% each), ESI (3.25% employer + 0.75% employee for gross <= INR 21,000), TDS per Income Tax slab, Professional Tax per state</td></tr>
<tr><td>Key regulation (2025-26)</td><td>Four Labour Codes notified November 2025: basic salary must be >= 50% of CTC; digital wage registers mandatory; fixed-term employees eligible for gratuity after 1 year</td></tr>
<tr><td>Cost of payroll error</td><td>Missed EPF deposit: 12% annual interest plus damages up to 25%; missed TDS: 1.5% monthly interest plus INR 200/day penalty</td></tr>
<tr><td>Payroll outsourcing cost</td><td>INR 300-500 PEPM basic; INR 500-800 full compliance; INR 800-2,500 industry-specific managed payroll</td></tr>
<tr><td>Key statutory deadlines</td><td>TDS by 7th; EPF/ESI by 15th; salary by 7th (under 1,000 employees); Form 24Q quarterly; Form 16 by June 15th</td></tr>
<tr><td>Starting Price</td><td>INR 149 per employee per month (Patron Accounting LLP)</td></tr>
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
                <h2 class="section-title">What Is Managed Payroll and What Does It Cover in India?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll in India is not simply crediting salaries to bank accounts. It is a multi-step statutory process governed by at least six central laws and dozens of state-level regulations. A managed payroll service takes ownership of the entire monthly payroll cycle on your behalf - from gross-to-net computation and statutory deductions to return filing and year-end Form 16.</p>
<p>Under the <strong>Code on Wages, 2019</strong> (active November 2025), basic salary must be at least 50% of total CTC. This directly affects the PF contribution base and prevents employers from structuring low-basic/high-allowance CTC to minimise PF contributions.</p>
<p>The payroll compliance framework in India includes: <strong>EPF</strong> under the <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF and Miscellaneous Provisions Act, 1952</a> (12% employee + 12% employer on Basic+DA), <strong>ESI</strong> under the <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act, 1948</a> (0.75% + 3.25% for gross <= INR 21,000), <strong>TDS</strong> under <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Section 192 of the Income Tax Act, 1961</a>, <strong>Professional Tax</strong> per state, <strong>Labour Welfare Fund</strong> per state, <strong>Bonus</strong> under Payment of Bonus Act, 1965, and <strong>Gratuity</strong> under Payment of Gratuity Act, 1972.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Payroll Services:</strong></p>
                    <p><strong>Gross-to-Net Computation:</strong> Salary structure design per Code on Wages 2019 (50% basic rule); gross pay including basic, HRA, allowances, bonuses, incentives, and reimbursements minus all statutory deductions.</p>
<p><strong>EPF Contribution:</strong> 12% employee + 12% employer on basic+DA; ECR generation; monthly challan to EPFO by 15th; UAN management. [EPF Act, 1952 - Section 1(3)]</p>
<p><strong>ESI Contribution:</strong> 0.75% employee + 3.25% employer for employees with gross <= INR 21,000; monthly deposit by 15th; half-yearly returns. [ESI Act, 1948]</p>
<p><strong>TDS on Salary:</strong> Per old or new regime as declared by employee; monthly deposit by 7th; Form 24Q quarterly; Form 16 by June 15th. [Income Tax Act, 1961 - Section 192]</p>
<p><strong>50% Basic Wage Rule:</strong> Under Code on Wages 2019 (November 2025), basic wages must constitute at least 50% of total remuneration, increasing the PF contribution base.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Payroll Dashboard -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="10" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Managed Payroll</text>
                            <line x1="45" y1="52" x2="155" y2="52" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <text x="50" y="48" font-size="7" fill="#14365F" font-weight="600" font-family="Arial">EPF</text>
                            <text x="80" y="48" font-size="7" fill="#14365F" font-weight="600" font-family="Arial">ESI</text>
                            <text x="110" y="48" font-size="7" fill="#14365F" font-weight="600" font-family="Arial">TDS</text>
                            <text x="140" y="48" font-size="7" fill="#14365F" font-weight="600" font-family="Arial">PT</text>
                            <line x1="45" y1="68" x2="130" y2="68" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="45" y1="82" x2="140" y2="82" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="45" y1="96" x2="120" y2="96" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <line x1="45" y1="110" x2="135" y2="110" stroke="#14365F" stroke-width="1.5" opacity="0.2" stroke-linecap="round"/>
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Payroll Services</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Managed Payroll</span>
                        <strong>EPF, ESI, TDS, PT, LWF</strong>
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
            <h2 class="section-title">Why Indian Businesses Outsource Payroll in 2026</h2>
            <div class="content-text">
                
                <p>India's payroll compliance landscape became significantly more demanding after the four Labour Codes were notified in November 2025. Here is why managing payroll in-house is a growing risk:</p>
<ul>
<li><strong>Regulatory complexity:</strong> Payroll touches at least 10 central laws and state-specific rules for every state where you have employees. Multi-state employers face dozens of separate PT, LWF and minimum wage compliance obligations simultaneously.</li>
<li><strong>Penalty exposure:</strong> A single missed EPF deposit attracts 12% annual interest plus damages up to 25% of arrears under the EPF Act; incorrect TDS attracts interest at 1.5% per month plus INR 200 per day under Section 234E; late salary payments under Code on Wages attract fines up to INR 50,000.</li>
<li><strong>The 50% basic wage rule:</strong> Under Code on Wages, 2019, basic salary must be at least 50% of total CTC. Companies that previously kept basic pay low to reduce PF and gratuity liability must restructure salary components.</li>
<li><strong>Gig and fixed-term worker obligations:</strong> Under the Social Security Code, 2020 (notified November 2025), fixed-term employees are now eligible for gratuity after just 1 year of service; platform aggregators must contribute to a social security fund for gig workers.</li>
<li><strong>Cost:</strong> A full-time payroll manager costs INR 4-8 lakh/year; a payroll specialist adds INR 3-5 lakh; compliance software INR 50,000-2 lakh. Outsourcing costs INR 200-500 per employee per month - delivering 60-80% cost savings.</li>
<li><strong>Time:</strong> Payroll teams in companies with 50-200 employees typically spend 15-30 hours per month. Outsourcing recovers this capacity for HR, finance and operations work.</li>
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
            <h2 class="section-title">12 Payroll Services Included by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll Processing</td><td>Monthly gross-to-net computation; attendance integration; payslip generation; bank transfer file in NEFT/RTGS format</td></tr>
<tr><td>EPF Compliance</td><td>ECR generation; monthly challan by 15th; UAN management; Form 10C/10D for exits; annual return by April 30; PF withdrawal facilitation</td></tr>
<tr><td>ESI Compliance</td><td>Monthly deposit by 15th; half-yearly Form 6 returns; IP number generation; ESIC card facilitation; ESI exit processing</td></tr>
<tr><td>TDS on Salary</td><td>Monthly TDS per old/new regime; deposit by 7th; Form 24Q quarterly; Form 16 by June 15th; investment declaration management</td></tr>
<tr><td>Professional Tax</td><td>State-wise PT deduction per applicable slab; monthly or annual remittance; PT registration for new states</td></tr>
<tr><td>Labour Welfare Fund</td><td>Half-yearly contributions for Maharashtra, Karnataka and all applicable states; June 30 and December 31 deadlines</td></tr>
<tr><td>Bonus Computation</td><td>Annual bonus under Payment of Bonus Act, 1965 at 8.33%-20% for eligible employees (20+ establishments)</td></tr>
<tr><td>Gratuity Provision</td><td>Actuarial provision annually; gratuity on separation; 1-year threshold for fixed-term staff (November 2025)</td></tr>
<tr><td>Full-and-Final Settlement</td><td>Gratuity, leave encashment, salary arrears, EPF transfer/withdrawal, ESIC exit - all within 30 days</td></tr>
<tr><td>MIS Reporting</td><td>Monthly payroll summary; cost-by-department; headcount reconciliation; statutory liability tracker; audit trail</td></tr>
<tr><td>Industry-Specific Payroll</td><td>Specialist services for Healthcare, Logistics, Manufacturing, IT, Hospitality, Retail - see industry pages below</td></tr>
<tr><td>Multi-State Payroll</td><td>Separate minimum wage schedules, PT slabs, LWF contributions and Shops & Establishments compliance per state</td></tr>

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
            <h2 class="section-title">9-Step Monthly Payroll Processing Cycle</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our CA team follows this cycle for every client - from input cutoff on the 22nd to MIS report delivery. Each step is documented and verified before moving to the next stage.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Input Cutoff (by 22nd)</h3>
        <p class="step-description">Attendance, leave, new joinings, exits, salary revisions and variable pay submitted via standardised template, HRMS export, biometric data or Excel.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data standardised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Cutoff enforced</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="25" y="20" width="20" height="4" rx="1" fill="#F5A623" opacity="0.7"/><rect x="50" y="20" width="45" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="25" y="30" width="18" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="50" y="30" width="40" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="25" y="40" width="22" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="50" y="40" width="35" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="25" y="50" width="15" height="4" rx="1" fill="#14365F" opacity="0.2"/><rect x="50" y="50" width="42" height="4" rx="1" fill="#14365F" opacity="0.2"/><path d="M15 80 L105 80" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 3"/></svg></div>
            <span class="illustration-label">Data Collected</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Salary Structure Validation</h3>
        <p class="step-description">Salary components verified for Code on Wages 2019 compliance: basic confirmed at >= 50% of total CTC; allowances checked not to exceed 50% of total remuneration.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 50% basic verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC compliant</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="36" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">50%</text><text x="60" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">BASIC</text><path d="M45 60l10 10 20-20" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">CTC Validated</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Gross-to-Net Computation</h3>
        <p class="step-description">Monthly gross salary computed; all deductions applied: EPF (12%), ESI (0.75%), TDS per slab, PT per state, LWF, loan recoveries and other authorised deductions.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All deductions applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net pay computed</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="5" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="60" y="28" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">GROSS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#14365F" stroke-width="0.8" opacity="0.3"/><text x="35" y="46" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- EPF 12%</text><text x="35" y="54" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- ESI 0.75%</text><text x="35" y="62" font-size="6" fill="#E8712C" font-weight="600" font-family="Arial">- TDS Slab</text><line x1="30" y1="67" x2="90" y2="67" stroke="#25D366" stroke-width="1.5"/><text x="60" y="78" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">NET PAY</text></svg></div>
            <span class="illustration-label">Net Pay Ready</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Multi-State Minimum Wage Check</h3>
        <p class="step-description">Every employee's location verified against the current state minimum wage for the applicable skill category; any shortfall flagged before payroll is finalised.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> State wages checked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shortfalls flagged</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="20" y="22" width="35" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MH</text><rect x="65" y="22" width="35" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">KA</text><rect x="20" y="40" width="35" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="48" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">DL</text><rect x="65" y="40" width="35" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="48" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TN</text><path d="M50 65l6 6 14-14" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Wages Verified</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">TDS Computation and Draft Review</h3>
        <p class="step-description">Individual TDS per old/new regime; investment declarations applied; projected annual tax reconciled. Draft payroll summary shared with HR/Finance for approval.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS optimised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Client approved</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="80" height="8" rx="2" fill="#14365F" opacity="0.8"/><circle cx="25" cy="24" r="2" fill="#FF5F56"/><circle cx="31" cy="24" r="2" fill="#FFBD2E"/><circle cx="37" cy="24" r="2" fill="#27C93F"/><rect x="25" y="35" width="70" height="5" rx="1" fill="#F5A623" opacity="0.4"/><rect x="25" y="45" width="50" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="25" y="55" width="60" height="5" rx="1" fill="#14365F" opacity="0.1"/><rect x="60" y="72" width="28" height="12" rx="3" fill="#25D366"/><text x="74" y="81" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">OK</text></svg></div>
            <span class="illustration-label">Approved</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Salary Disbursement (by 3rd-5th)</h3>
        <p class="step-description">Bank transfer file in NEFT/RTGS format submitted; digital payslips distributed to employees. Salaries credited by 7th of following month per Payment of Wages Act.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank file sent</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips issued</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="33" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NEFT</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="60" y="55" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Rs</text></svg></div>
            <span class="illustration-label">Salaries Credited</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Statutory Filings (by 7th and 15th)</h3>
        <p class="step-description">EPF ECR by 15th; ESI contribution by 15th; TDS by 7th; PT by state deadline; Form 24Q quarterly. All filings with acknowledgement copies retained.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPF/ESI by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS by 7th</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="60" height="8" rx="2" fill="#F5A623" opacity="0.7"/><rect x="20" y="36" width="50" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="20" y="48" width="55" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="20" y="60" width="45" height="6" rx="2" fill="#14365F" opacity="0.15"/><circle cx="95" cy="30" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M90 30l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">07</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 8</span>
        <h3 class="step-title">F&F and Exit Processing</h3>
        <p class="step-description">Full-and-final settlement: gratuity, leave encashment, PF withdrawal, ESIC exit, TDS adjustments. All processed and documented within the prescribed timeline.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> F&F computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Exit documented</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#25D366" opacity="0.2"/><path d="M52 35l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">F&amp;F Done</text></svg></div>
            <span class="illustration-label">Exit Settled</span>
            <span class="step-number-large">08</span>
        </div>
    </div>
</div>

<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 9</span>
        <h3 class="step-title">Monthly MIS Report</h3>
        <p class="step-description">Payroll cost summary by department; headcount report; statutory liability register; compliance status dashboard; year-to-date TDS tracker delivered to client.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit trail ready</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="25" y="22" width="30" height="20" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="60" y="22" width="30" height="20" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="25" y="48" width="65" height="6" rx="2" fill="#F5A623" opacity="0.4"/><rect x="25" y="58" width="45" height="6" rx="2" fill="#14365F" opacity="0.15"/><rect x="25" y="68" width="55" height="6" rx="2" fill="#14365F" opacity="0.15"/></svg></div>
            <span class="illustration-label">MIS Delivered</span>
            <span class="step-number-large">09</span>
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
            <h2 class="section-title">Documents Required to Onboard Payroll Services</h2>
            <div class="content-text">
                
                <p>Keep the following documents ready for a smooth payroll onboarding:</p>
<ul>
<li>Employee master data: name, designation, department, date of joining, work location (state)</li>
<li>PAN and Aadhaar for all employees for TDS and EPF/ESI registration</li>
<li>Bank account details for salary disbursement (account number and IFSC code)</li>
<li>UAN numbers for employees already covered under EPF at a previous employer</li>
<li>Existing EPF and ESIC establishment registration numbers</li>
<li>Salary structure for each employee: basic, HRA, allowances, and variable components</li>
<li>Previous 3 months payroll data if switching from another provider</li>
<li>PT registration certificates for all states where employees are based</li>
<li>LWF registration certificates for applicable states</li>
<li>Attendance and leave records for the first payroll month</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">November 2025 Labour Code Reforms - 5 Changes That Affect Your Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>50% Basic Wage Rule</td><td>Basic+DA must be >= 50% of total CTC under Code on Wages, 2019. Companies with allowance-heavy structures face higher EPF and gratuity liability.</td><td>Patron Accounting validates all client salary structures for compliance and restructures CTC where needed to meet the 50% threshold.</td></tr>
<tr><td>Gratuity for Fixed-Term Staff</td><td>Fixed-term employees now eligible for gratuity after 1 year (was 5 years) under Social Security Code, 2020 (November 2025)</td><td>Gratuity provision computed from year 1 for all contract and fixed-term workforce; liability tracked monthly.</td></tr>
<tr><td>Gig Worker Social Security</td><td>Aggregators required to contribute to a social security fund for gig workers under Social Security Code, 2020</td><td>New liability tracked for companies using delivery, freelance or platform-based workers; compliance calendar maintained.</td></tr>
<tr><td>Digital Wage Registers</td><td>All payroll records must be in digital format and retained 7 years under Labour Codes 2025</td><td>All wage registers, attendance, payslips, and statutory challans maintained digitally with 7-year archive compliance.</td></tr>

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
            <h2 class="section-title">Payroll Service Fees - Transparent Per-Employee Pricing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Payroll Processing</td><td class="table-amount">INR 300-500 per employee per month</td></tr>
<tr><td>Payroll + Full Compliance (EPF, ESI, TDS, PT, LWF)</td><td class="table-amount">INR 500-800 per employee per month</td></tr>
<tr><td>Industry Managed Payroll (CLRA, Motor Transport, PSARA)</td><td class="table-amount">INR 800-1,500 per employee per month</td></tr>
<tr><td>Enterprise / Multi-State Payroll</td><td class="table-amount">INR 1,500-2,500 per employee per month</td></tr>
<tr><td>Minimum Monthly Engagement (under 20 employees)</td><td class="table-amount">INR 5,000 per month</td></tr>
<tr><td>Setup / Onboarding (one-time, waived on annual contracts)</td><td class="table-amount">INR 3,000-20,000 one-time</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td class="table-amount">Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Payroll Services consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20payroll.%20Please%20call%20me%20back." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Monthly Payroll Compliance Calendar</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TDS deposit on salaries (Section 192)</td><td>7th of each month</td></tr>
<tr><td>Salary credit to employees</td><td>7th (under 1,000 employees) or 10th (1,000+)</td></tr>
<tr><td>EPF ECR filing and challan payment</td><td>15th of each month</td></tr>
<tr><td>ESI contribution deposit</td><td>15th of each month</td></tr>
<tr><td>Professional Tax remittance</td><td>15th or per state deadline</td></tr>
<tr><td>TDS return - Form 24Q (salaries)</td><td>Quarterly (Apr, Jul, Oct, Jan)</td></tr>
<tr><td>Annual EPF return</td><td>April 30 annually</td></tr>
<tr><td>ESIC half-yearly returns - Form 6</td><td>Half-yearly (April and October)</td></tr>
<tr><td>Form 16 issued to all employees</td><td>June 15 annually</td></tr>
<tr><td>Labour Welfare Fund contribution</td><td>June 30 and December 31</td></tr>
<tr><td>Full-and-final settlement on exit</td><td>Within prescribed timeline per applicable Act</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Every deadline in this calendar is tracked by Patron Accounting with built-in buffers. Late EPF deposit attracts 12% annual interest plus damages of 5-25% under Section 14B. Late TDS attracts 1.5% monthly interest plus INR 200/day under Section 234E.</p>

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
            <h2 class="section-title">Why Outsource Payroll to Patron Accounting?</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Zero Penalty Guarantee</h3><p class="feature-text">SLA-backed filing calendar with acknowledgement records for every submission. Near-zero penalty risk across all statutory filings.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div><h3 class="feature-title">CA and CS Expertise</h3><p class="feature-text">Your payroll is managed by qualified Chartered Accountants and Company Secretaries - not just software. TDS optimisation and regime advisory included.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">10+ Industries Served</h3><p class="feature-text">Specialist payroll for healthcare, logistics, manufacturing, IT, hospitality, retail, security, construction, education, and NBFC sectors.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Labour Code 2025 Ready</h3><p class="feature-text">50% basic rule, digital registers, gig worker social security, fixed-term gratuity - all November 2025 reforms already live in our payroll processes.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Scalability</h3><p class="feature-text">Scales instantly from 5 to 5,000 employees. New states onboarded within 2 weeks. No renegotiation or additional lead time needed.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Audit-Ready Documentation</h3><p class="feature-text">7-year document retention; wage registers in statutory format; reconciliation reports included. Always ready for EPF, ESI, IT or labour inspection.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 500+ Indian Businesses Across 10+ Industries</h2>
            <div class="content-text">
                
                <p><strong>4 Offices:</strong> Pune, Mumbai, Bangalore, Delhi NCR</p>
<p><strong>500+ Companies</strong> with managed payroll across IT, manufacturing, healthcare, education, retail, logistics, hospitality, and financial services.</p>
<p><strong>20,000+ Employees</strong> under Patron Accounting managed payroll processing.</p>
<p><strong>12,000+ Statutory Filings</strong> managed annually - EPF ECR, Form 24Q, ESI Form 6, PT returns, and LWF contributions.</p>
<p><strong>15+ Years</strong> zero-penalty statutory compliance track record.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Patron Accounting Managed Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House Payroll</th><th>Patron Accounting Managed Payroll</th></tr></thead>
                    <tbody>
                        <tr><td>Annual cost (50 employees)</td><td>INR 8-16 lakh (HR manager + specialist + software + advisory)</td><td>INR 1.5-3 lakh per year - 65-85% lower</td></tr>
<tr><td>Statutory compliance</td><td>Dependent on team's knowledge; risk of missing revisions</td><td>Dedicated CA/CS team; compliance calendar maintained; revisions tracked within 30 days</td></tr>
<tr><td>Labour Code 2025 readiness</td><td>Requires training, system updates, salary restructuring</td><td>Already incorporated; salary structures validated for 50% basic rule</td></tr>
<tr><td>Multi-state payroll</td><td>Complex; requires state-by-state PT, LWF, minimum wage knowledge</td><td>All states covered as standard; separate compliance calendars per state</td></tr>
<tr><td>Penalty risk</td><td>High: EPF, TDS and ESI defaults attract interest, damages and criminal liability</td><td>Near-zero: SLA-backed filing calendar with acknowledgement records</td></tr>
<tr><td>Scalability</td><td>Staffing cost scales with headcount; new states require new expertise</td><td>Scales instantly; new employees same month; new states within 2 weeks</td></tr>
<tr><td>Audit readiness</td><td>Variable; depends on in-house documentation discipline</td><td>Always audit-ready: 7-year retention; statutory format registers</td></tr>
<tr><td>Technology</td><td>Enterprise HRMS costs INR 2-10 lakh annually</td><td>Included: payroll dashboard, employee portal, compliance calendar</td></tr>

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
            <h2 class="section-title">Industry-Specific Payroll and Related Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting provides specialist payroll services for each industry vertical, plus complementary compliance services:</p>
<ul>
<li><strong><a href="/payroll-processing-for-the-healthcare-industry">Healthcare Payroll</a></strong> - Shift-based pay, visiting doctor TDS (Section 194J), ESI for clinical staff, multi-facility hospital chain payroll.</li>
<li><strong><a href="/payroll-services-for-travel-and-logistics-industry">Logistics and Transport Payroll</a></strong> - Motor Transport Workers Act compliance, driver allowances, CLRA for contract drivers, multi-state wages.</li>
<li><strong><a href="/payroll-services-for-it-and-software-industry">IT and Software Payroll</a></strong> - High-income TDS structuring, ESOP/RSU taxation, remote workforce, expat payroll, variable pay management.</li>
<li><strong><a href="/payroll-services-for-the-hospitality-industry">Hospitality Payroll</a></strong> - Service charge distribution, seasonal workforce, high-attrition F&F, multi-property hotel chain payroll.</li>
<li><strong><a href="/pf-registration">PF Registration</a></strong> - EPFO establishment code registration and ongoing PF compliance for new establishments.</li>
<li><strong><a href="/esic-registration">ESIC Registration</a></strong> - ESIC employer code registration, IP number generation, and half-yearly return filing.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Payroll Services in India</h2>
            <div class="content-text">
                
                <p>Payroll processing in India is governed by a comprehensive statutory framework:</p>
<ul>
<li><strong><a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPF and Miscellaneous Provisions Act, 1952</a></strong> (Section 1(3)) - Mandatory for 20+ employees. 12% employee + 12% employer on Basic+DA. Monthly ECR through EPFO Unified Portal by 15th. Penalty: 12% interest (Section 7Q) + damages 5-25% (Section 14B).</li>
<li><strong><a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESI Act, 1948</a></strong> (Section 2(22)) - Applicable for 10+ employees; gross <= INR 21,000. 0.75% employee + 3.25% employer. Deposit by 15th. Half-yearly Form 6 returns.</li>
<li><strong><a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Act, 1961</a></strong> (Section 192) - TDS on salary at applicable slab rate. Deposit by 7th. Form 24Q quarterly. Form 16 by June 15. Penalty: 1.5%/month interest (Section 201A) + INR 200/day (Section 234E).</li>
<li><strong>Code on Wages, 2019</strong> (November 2025) - Basic wages >= 50% of CTC; salary payment by 7th/10th; unified definition of wages. [<a href="https://labour.gov.in" target="_blank" rel="noopener">Ministry of Labour and Employment</a>]</li>
<li><strong>Payment of Bonus Act, 1965</strong> (Section 10) - 8.33% minimum to 20% maximum for eligible employees; applicable to establishments with 20+ employees.</li>
<li><strong>Payment of Gratuity Act, 1972</strong> - 15/26 x last drawn salary x years of service; fixed-term employees eligible after 1 year from November 2025.</li>
</ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Payroll Services in India</h2>
                    <p class="faq-expanded__lead">Find answers about managed payroll, statutory deductions, Labour Codes 2025, outsourcing costs, and compliance requirements.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Payroll Services in India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is included in payroll services in India?</h3>
                        <div class="faq-expanded__a"><p>Managed payroll services include the entire monthly cycle: gross salary computation, EPF deduction and EPFO ECR filing, ESI deduction and ESIC portal payment, TDS computation and deposit under Section 192, Professional Tax per state, Labour Welfare Fund contributions, payslip generation, bank transfer file, wage register maintenance, and Form 24Q quarterly returns. Full-service providers also handle Form 16, F&F settlements, bonus computation under Payment of Bonus Act 1965, and gratuity provision.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much do payroll services cost in India?</h3>
                        <div class="faq-expanded__a"><p>Basic payroll processing costs INR 300-500 per employee per month (PEPM); full statutory compliance (EPF, ESI, TDS, PT, LWF) costs INR 500-800 PEPM; industry-specific managed payroll runs INR 800-1,500 PEPM; enterprise multi-state payroll costs INR 1,500-2,500 PEPM. Most providers charge a one-time setup fee of INR 3,000-20,000, typically waived on annual contracts. All fees subject to 18% GST.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is EPF mandatory for all companies in India?</h3>
                        <div class="faq-expanded__a"><p>EPF is mandatory for every establishment employing 20 or more persons under Section 1(3) of the EPF and Miscellaneous Provisions Act, 1952. Once covered, it applies to all employees earning up to INR 15,000/month in basic+DA. Both employer and employee each contribute 12%. Establishments below the threshold may voluntarily register. Patron Accounting handles EPF registration, ECR generation, monthly challan payment and all EPFO returns.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens if you miss a payroll compliance deadline?</h3>
                        <div class="faq-expanded__a"><p>Missing statutory deadlines attracts cascading penalties. Delayed EPF deposit: 12% annual interest plus damages 5-25% under Section 14B. Missed TDS deposit: 1.5% monthly interest plus INR 200/day under Section 234E. Failure to deduct TDS: penalty equal to TDS amount under Section 271C. Repeat EPF or ESI defaults can result in criminal prosecution. Patron Accounting maintains a statutory filing calendar and files all returns before deadlines.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How has the November 2025 Labour Code reform changed payroll in India?</h3>
                        <div class="faq-expanded__a"><p>The November 2025 notification introduced five major changes: 50% basic wage rule (basic >= 50% of CTC under Code on Wages 2019); gratuity for fixed-term employees after 1 year (Social Security Code 2020); social security for gig workers; mandatory digital wage registers with 7-year retention; and unified definition of wages across all four codes. Companies with allowance-heavy structures face higher EPF and gratuity liabilities.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Payroll outsourcing kaise kare India mein?</h3>
                        <div class="faq-expanded__a"><p>Patron Accounting se payroll outsource karna simple hai. Aapko employee data (PAN, Aadhaar, UAN, bank details), salary structure, aur attendance records dena hota hai. Hum complete setup karte hain - EPFO, ESIC, TAN, PT registrations se lekar monthly payslip, TDS, PF, ESI deposits, Form 24Q filing, aur year-end Form 16 tak sab handle karte hain. Fee INR 149 per employee se shuru hoti hai.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: EPF rate?</strong> A: 12% employee + 12% employer on Basic+DA. Deposit by 15th monthly. [EPF Act 1952, Section 1(3)]</p>
<p><strong>Q: ESI rate?</strong> A: 0.75% employee + 3.25% employer. Applicable for gross <= INR 21,000/month. Deposit by 15th. [ESI Act 1948]</p>
<p><strong>Q: TDS deposit deadline?</strong> A: 7th of following month under Section 192 of the Income Tax Act, 1961.</p>
<p><strong>Q: Salary payment deadline?</strong> A: 7th (under 1,000 employees) or 10th (1,000+). [Code on Wages 2019 / Payment of Wages Act 1936]</p>
<p><strong>Q: Basic wage minimum?</strong> A: 50% of total CTC. [Code on Wages 2019, November 2025]</p>
<p><strong>Q: Form 16 deadline?</strong> A: To all employees by June 15 annually. Form 24Q quarterly: Apr, Jul, Oct, Jan.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Payroll Compliance Has Changed - Is Your Business Ready?</h2>
            <div class="content-text">
                
                <p>India's four Labour Codes are active since November 2025. The 50% basic wage rule is live. Digital registers are mandatory. Fixed-term employees are eligible for gratuity after 1 year. A missed EPF deposit attracts 12% interest plus up to 25% damages. A missed TDS attracts INR 200/day.</p>
<p><strong>Request a Free Payroll Audit:</strong> We review your current payroll for compliance gaps - free, no obligation. <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20a%20payroll%20compliance%20audit.%20Please%20call%20me%20back." target="_blank" rel="noopener">WhatsApp us</a>.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">CA-Managed Payroll for Every Industry in India</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Payroll in India is not an administrative task - it is a multi-law statutory obligation that affects every employee, every month. With the November 2025 Labour Codes, the 50% basic rule, gig worker social security, and digital record mandates, the compliance bar has never been higher.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting delivers managed payroll services for 500+ companies across 10+ industries - from healthcare to logistics, IT to manufacturing. Our CA and CS team handles everything from monthly gross-to-net computation to annual Form 16, with zero-penalty statutory compliance guaranteed.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Starting from INR 149 per employee per month. Contact us for a free payroll health check and compliance audit.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20outsource%20our%20payroll.%20Please%20call%20me%20back." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20your%20Payroll%20Services%20and%20would%20like%20to%20know%20more.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Payroll Services Across India - City-Wise Coverage</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert payroll processing with local compliance expertise. Click your city for state-specific PT, LWF, and minimum wage information.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <a href="/payroll-services/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/payroll-services/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/payroll-services/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
        <a href="/payroll-services/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
        <a href="/payroll-services/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a>
        <a href="/payroll-services/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a>
        <a href="/payroll-services/chennai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div></a>
        <a href="/payroll-services/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end support for Payroll Services</div>
    <div class="pa-cross-grid">
        <a href="/payroll-processing-and-management-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Processing & Mgmt</div><div class="pa-card-sub">India</div></div></a>
        <a href="/esic-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Compliance</div><div class="pa-card-sub">India</div></div></a>
        <a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a>
        <a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a>
        <a href="/gratuity-calculation-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Gratuity Compliance</div><div class="pa-card-sub">India</div></div></a>
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
            <p><strong>Content Created:</strong> 11 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">11 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed quarterly. Content is aligned with the four Labour Codes (active November 2025), EPF Act 1952, ESI Act 1948, Income Tax Act 1961, Code on Wages 2019, Payment of Gratuity Act 1972, and Payment of Bonus Act 1965. Next review: June 2026.</p>
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
