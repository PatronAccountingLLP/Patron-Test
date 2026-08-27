
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
    <title>IT & Software Payroll in Pune - CTC, ESOP, TDS & PF</title>
    <meta name="description" content="CA-assisted payroll for IT and software companies in Pune. ESOP TDS, flexi benefits, PF, ESIC, and PT compliance for tech firms. Serving Hinjewadi, Kharadi, Magarpatta. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-it-and-software-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT & Software Payroll in Pune - CTC, ESOP, TDS & PF">
    <meta property="og:description" content="CA-assisted payroll for IT and software companies in Pune. ESOP TDS, flexi benefits, PF, ESIC, and PT compliance for tech firms. Serving Hinjewadi, Kharadi, Magarpatta. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-it-and-software-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT & Software Payroll in Pune - CTC, ESOP, TDS & PF">
    <meta name="twitter:description" content="CA-assisted payroll for IT and software companies in Pune. ESOP TDS, flexi benefits, PF, ESIC, and PT compliance for tech firms. Serving Hinjewadi, Kharadi, Magarpatta. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Payroll for IT Software Companies Pune",
      "description": "CA-assisted payroll for IT and software companies in Pune. ESOP TDS, flexi benefits, PF, ESIC, and PT compliance for tech firms. Serving Hinjewadi, Kharadi, Magarpatta. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry/pune",
      "serviceType": "Payroll for IT Software Companies Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry/pune",
        "price": "5000"
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
          "name": "Payroll for IT Software Companies",
          "item": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Payroll for IT Software Companies Pune",
          "item": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles IT payroll compliance in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EPFO Regional Office Pune manages PF. Income Tax Office Pune oversees TDS including ESOP perquisite taxation. GRAS portal at mahagst.gov.in handles Maharashtra Professional Tax. ESIC Regional Office Pune covers ESI for eligible employees. Patron's Pune office at Wagholi coordinates with all authorities for IT clients."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get IT payroll services done online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron provides fully digital payroll for Pune IT companies with HRMS integration for Keka, GreytHR, and Darwinbox. All statutory filings completed online. Walk-in at Wagholi office available for IT company founders and HR heads who prefer in-person discussion on CTC structuring or ESOP taxation."
          }
        },
        {
          "@type": "Question",
          "name": "What is the IT payroll fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT payroll fees start from Rs 5,000 per month for up to 25 employees including CTC structuring and statutory compliance. For companies with 100+ employees and ESOP processing, fees range from Rs 18,000 to Rs 40,000/month. ESOP/RSU perquisite processing available as add-on from Rs 3,000/month."
          }
        },
        {
          "@type": "Question",
          "name": "How long does IT payroll setup take in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard setup takes 7-10 working days including data onboarding, CTC design per Code on Wages, flexi-benefit configuration, PF/ESIC/PT setup, and ESOP parameters. First payroll cycle processes within 3 working days. 5-day fast-track onboarding available for Baner startups."
          }
        },
        {
          "@type": "Question",
          "name": "How is ESOP taxed in IT company payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Section 17(2)(vi) of the Income Tax Act, when an employee exercises ESOPs, the difference between FMV on exercise date and exercise price is treated as salary perquisite. TDS deducted at applicable slab rate and deposited by 7th. For eligible startups under Section 80-IAC, TDS deferral up to 48 months is available."
          }
        },
        {
          "@type": "Question",
          "name": "Is Maharashtra Professional Tax mandatory for IT companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every IT company employing staff in Maharashtra must obtain PTRC under the Maharashtra PT Act 1975. Professional tax deducted from employee salaries per applicable slabs. Revised due date 15th per February 2026 notification. Directors and founders need PTEC at Rs 2,500/year."
          }
        },
        {
          "@type": "Question",
          "name": "How does Code on Wages 2019 affect IT company salaries?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under Code on Wages (effective November 2025), basic pay including DA must be at least 50% of total CTC. IT companies must restructure every employee's CTC. This increases PF contributions, gratuity liability, and overtime rate. Take-home pay reduces unless the company absorbs increased PF cost."
          }
        },
        {
          "@type": "Question",
          "name": "How to handle payroll for remote IT employees across states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "IT companies with remote employees across Karnataka, Telangana, Tamil Nadu, or other states must deduct Professional Tax per the employee's work location state. Each state has different PT slabs. Patron configures multi-state PT deduction per employee location and files returns across all applicable state portals. Quick Answers Pune mein IT company ka payroll kitne mein hota hai? Rs 5,000 per month se start. 25 employees tak. ESOP processing add-on Rs 3,000 se. ESOP exercise pe tax kab lagta hai? Jab employee options exercise karta hai tab FMV minus exercise price ka difference perquisite maana jaata hai. TDS employer deduct karta hai. Code on Wages se IT salary structure badlega kya? Haan. Basic pay ab minimum 50% CTC hona chahiye. PF badhega aur take-home kam hoga jab tak company adjust na kare."
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
                        Payroll Services for IT and Software Companies in Pune: ESOP, Flexi Benefits, and Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">18 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Employee master data, CTC structures, ESOP/RSU grant letters, investment declarations (80C/80D), PAN, Aadhaar, bank details</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 5,000 per month for up to 25 IT employees</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> IT services firms, SaaS startups, GCCs, product companies, and BPO/KPO units with salaried employees in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Monthly payroll within 3 working days; ESOP perquisite TDS computed at exercise</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - Call +91 945 945 6700</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20company%20payroll%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - IT Payroll in Pune',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-it-software/pune', 'label' => 'IT Payroll in Pune', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services/pune', 'label' => 'Payroll Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services/pune', 'label' => 'Accounting Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/pune', 'label' => 'GST Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit/pune', 'label' => 'Statutory Audit in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/pune', 'label' => 'Startup Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration/pune', 'label' => 'Pvt Ltd Registration in Pune', 'selected' => false, 'disabled' => false],
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
        
        <div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Outstanding experience with Patron Accounting. Professionalism, attention to detail, and timely communication made everything seamless.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Glad I connected with Patron. Minimum time for calculations and really helpful throughout the process.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">R</div><div><div class="testi-name">Rajib Dutta</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Fantastic experience with Patron. Shubham was extremely knowledgeable. 5 stars for smooth documentation handling.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Best service for all account handling. Extremely happy they assigned a dedicated contact for our IT company.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nikhil Nimbhorkar</div><div class="testi-role">4 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Professional and timely. Shubham and Amin handled our filings smoothly. Understand basics well and respond promptly.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get CA-assisted IT payroll with ESOP processing, flexi benefits, and multi-state PT for your Pune tech company.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Choose Us</a><a href="#comparison-section" class="toc-btn">In-House vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Payroll Services in Pune</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Payroll in Pune Services at a Glance</strong></p>
                    <p>Payroll services for IT and software companies in Pune cover CTC structuring, flexi-benefit plans, ESOP/RSU perquisite TDS under Section 17(2)(vi), statutory deductions (PF, ESIC, Maharashtra PT, TDS), and multi-state compliance for hybrid workforces. Essential for IT firms, SaaS startups, and GCCs operating from Hinjewadi, Kharadi, Magarpatta, and Baner.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>EPF Act 1952, ESIC Act 1948, Income Tax Act 1961 (Sec 192, 17(2)(vi)), Maharashtra PT Act 1975, Code on Wages 2019</td></tr><tr><td>Applicable To</td><td>IT services, SaaS startups, GCCs, product companies, BPO/KPO in Pune</td></tr><tr><td>Timeline</td><td>Monthly payroll within 3 days; PF/ESIC by 15th; TDS by 7th; ESOP TDS at exercise</td></tr><tr><td>Cost Starting From</td><td>Rs 5,000/month for up to 25 employees</td></tr><tr><td>Penalty</td><td>EPF: damages 100%; Late TDS: 1.5%/month; Late PT: 1.25%/month + 10%</td></tr><tr><td>Key Portals</td><td>EPFO, ESIC, TRACES for TDS, mahagst.gov.in for PTRC</td></tr><tr><td>Jurisdictional Office</td><td>EPFO Pune; Income Tax Office Pune; GRAS portal; ESIC Pune; RoC Pune</td></tr></tbody></table></div></p>
                </div>
                <p>Pune is India's second-largest IT hub after Bangalore, with over 800,000 IT professionals and 212+ software companies concentrated in Hinjewadi Rajiv Gandhi Infotech Park (Phase I-IV), Kharadi EON Free Zone (Broadcom, Honeywell, Veritas), Magarpatta Cybercity, and the Baner-Balewadi startup corridor. The city hosts 4,500+ active startups and major GCCs of Fortune 500 companies. Learn more about <a href="/payroll-services-for-it-and-software-industry">Payroll Services for IT/Software across India</a>.</p>
                <p>ESOP/RSU perquisite taxation under Section 17(2)(vi), Code on Wages 2019 (50% basic from November 2025), and multi-state PT for hybrid workforces add layers of payroll complexity that generic providers cannot handle. The EPFO Regional Office Pune oversees PF compliance while mahagst.gov.in handles PTRC. Patron Accounting's Pune office at RTC Silver, Wagholi delivers integrated IT payroll.</p>
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
                <h2 class="section-title">What Is IT Payroll Processing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services for IT and software companies is the end-to-end processing of employee compensation, tax-efficient CTC structuring, ESOP/RSU perquisite computation, statutory deductions, and multi-state compliance for technology firms.</p><p>IT payroll is more complex because of flexible compensation models. A typical Pune IT company offers CTC including basic, HRA (Pune metro rates), flexi-benefit basket (food vouchers, telephone, fuel), NPS, ESOP/RSU grants, and variable pay. Each component has different tax treatment. ESOP perquisite under Section 17(2)(vi) is computed only at exercise.</p><p>For startups in Baner issuing ESOPs, and MNCs in Kharadi granting RSUs of foreign parents, the payroll system must handle FMV computation, perquisite calculation, TDS withholding, and Form 12BA disclosure. Patron's CA team configures IT payroll to handle all layers while optimising take-home pay.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Payroll in Pune:</strong></p>
                    <ul><li><strong>ESOP Perquisite (Section 17(2)(vi)):</strong> FMV on exercise date minus exercise price, taxed as salary. TDS at slab rate</li><li><strong>Flexi-Benefit Basket:</strong> Tax-efficient components - meal vouchers (Rs 2,200/month), telephone, fuel within limits</li><li><strong>Multi-State PT:</strong> Professional Tax per employee's work location state for hybrid/remote IT workforce</li><li><strong>Form 12BA:</strong> Statement of perquisites reported alongside Form 16 for ESOP/RSU employees</li><li><strong>Code on Wages 2019:</strong> Basic pay 50% of CTC from November 2025. Impacts PF, gratuity, overtime</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT Payroll in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>ESOP + Flexi + Multi-State PT</span>
                        <strong>IT Payroll</strong>
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
            <h2 class="section-title">Who Needs IT Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Large IT Services (Hinjewadi):</strong> Infosys, Wipro, TCS, Capgemini, Tech Mahindra - 1000+ employees, ESOP/RSU plans, multi-state workforces, flexi benefits. Need <a href="/payroll-services/pune">Payroll Services in Pune</a> at enterprise scale.</p><p><strong>SaaS Startups (Baner, Koregaon Park):</strong> Rapid scaling, ESOP-heavy compensation, Code on Wages CTC restructuring. Section 80-IAC eligible for ESOP TDS deferral.</p><p><strong>GCCs/MNC Tech Centres (Kharadi, Magarpatta):</strong> Cross-border ESOP taxation of foreign parent RSUs, FEMA Schedule FA disclosure, expatriate payroll, dual GAAP reporting.</p><p><strong>BPO/KPO Operations:</strong> High headcount, shift-based, ESIC-covered workforce, Payment of Bonus Act computation. Need <a href="/private-limited-company-compliance">Private Limited Company Compliance</a> alongside payroll.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Tax-Efficient CTC Structuring</td><td>HRA at Pune metro rates, NPS employer contribution, flexi-benefit baskets, variable pay. Compliant with Code on Wages 50% basic</td></tr><tr><td>ESOP/RSU Perquisite Processing</td><td>FMV computation, perquisite under Section 17(2)(vi), TDS, Form 12BA, Form 24Q. Section 80-IAC deferral for eligible startups</td></tr><tr><td>EPF and ESIC Compliance</td><td>Monthly ECR by 15th, ESIC for eligible staff. Voluntary higher PF. ESIC threshold tracking</td></tr><tr><td>Investment Proof Verification</td><td>Section 80C/80D declarations and proof processing for hundreds of employees. TDS recomputation Jan-Mar</td></tr><tr><td>Flexi-Benefit Administration</td><td>Meal vouchers (Rs 2,200/month), telephone, fuel, books within annual limits. Receipt verification</td></tr><tr><td>Maharashtra PT (Multi-State)</td><td>PTRC for Pune employees. State-specific PT for remote workers in Karnataka, Telangana, Tamil Nadu. GRAS portal filing</td></tr><tr><td>Full and Final Settlement</td><td>Gratuity, leave encashment, notice period, ESOP vesting acceleration, PF transfer. 15-25% annual attrition handled</td></tr><tr><td>Code on Wages CTC Restructuring</td><td>Impact analysis on take-home, PF, gratuity when restructuring to 50% basic. Employee communication support</td></tr>

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
            <h2 class="section-title">How IT Payroll Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to EPFO, Income Tax Office, or GRAS required - Patron's Pune office at Wagholi handles all registrations, filings, and statutory liaison. Walk-in for IT company HR heads and founders.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Share Employee Data and CTC Structures</h3><p class="step-description">Submit employee master data to Patron's Pune office at Wagholi or via secure upload. Include name, PAN, Aadhaar, CTC breakup, ESOP/RSU grant details, flexi-benefit elections, and investment declarations. For Hinjewadi and Kharadi IT companies with 100+ employees, Patron integrates with HRMS platforms (Keka, GreytHR, Zoho People, Darwinbox).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Data Collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>HRMS Integrated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="80" height="12" rx="3" fill="#E8712C" opacity="0.15"/><text x="60" y="31" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="700">Employee Data</text><line x1="20" y1="42" x2="100" y2="42" stroke="#14365F" stroke-width="0.8"/><rect x="20" y="48" width="25" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="32" y="54" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">CTC</text><rect x="50" y="48" width="25" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="62" y="54" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">ESOP</text><rect x="80" y="48" width="20" height="8" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="90" y="54" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Flexi</text></svg></div><span class="illustration-label">Onboarding Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Design Tax-Efficient CTC and Compliance Configuration</h3><p class="step-description">Patron's CA team designs CTC structures compliant with Code on Wages (50% basic) while maximising take-home. HRA at Pune metro rates (50% of basic under Section 10(13A)), NPS employer contribution, flexi-benefit baskets within tax-free limits, and ESOP/RSU parameters. Maharashtra PT slabs applied. Multi-state PT configured for remote employees.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>50% Basic Applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Take-Home Optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">CTC Design</text><line x1="20" y1="28" x2="100" y2="28" stroke="#14365F" stroke-width="0.8"/><text x="25" y="42" font-size="6" fill="#14365F" font-family="Arial">50% Basic (CoW)</text><text x="25" y="54" font-size="6" fill="#14365F" font-family="Arial">HRA Pune Metro</text><text x="25" y="66" font-size="6" fill="#14365F" font-family="Arial">NPS + Flexi Basket</text><path d="M90 40l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M90 52l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M90 64l3 3 6-6" stroke="#10B981" stroke-width="1.5"/></svg></div><span class="illustration-label">CTC Ready</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Process Monthly Payroll with All Deductions</h3><p class="step-description">Monthly cycle: Patron computes gross salary, applies flexi-benefit reimbursements, deducts EPF (12% + 12%), ESIC (if applicable), Maharashtra PT, TDS under Section 192 (projected annual income including variable pay and ESOP perquisites), and Labour Welfare Fund. For Baner startups with quarterly variable pay, bonus projections pro-rated for accurate TDS.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Flexi Applied</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TDS Optimised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Gross to Net</text><line x1="20" y1="28" x2="100" y2="28" stroke="#14365F" stroke-width="0.8"/><text x="25" y="40" font-size="6" fill="#14365F" font-family="Arial">CTC + Flexi Reimb</text><text x="25" y="50" font-size="6" fill="#14365F" font-family="Arial">- EPF/ESIC/PT/TDS</text><text x="25" y="60" font-size="6" fill="#14365F" font-family="Arial">- LWF</text><line x1="20" y1="68" x2="100" y2="68" stroke="#14365F" stroke-width="0.8"/><text x="60" y="80" font-size="7" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">= Take-Home</text></svg></div><span class="illustration-label">Payroll Done</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Process ESOP/RSU Exercises When They Occur</h3><p class="step-description">When an employee exercises ESOPs or RSUs vest, Patron computes perquisite value: (FMV on exercise date minus exercise price) x shares. Listed companies: average opening/closing price. Unlisted Pune startups: Category I merchant banker valuation under Rule 3(8). TDS at applicable slab rate deposited by 7th. Section 80-IAC deferral applied for eligible startups.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>FMV Computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Perquisite TDS Done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">ESOP Exercise</text><text x="60" y="44" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">FMV - Exercise Price</text><text x="60" y="56" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">= Perquisite (S17(2)(vi))</text><rect x="35" y="62" width="50" height="12" rx="4" fill="#E8712C" opacity="0.2"/><text x="60" y="71" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">TDS at Slab Rate</text></svg></div><span class="illustration-label">ESOP Processed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File Statutory Returns and Generate Reports</h3><p class="step-description">EPF ECR by 15th. ESIC by 15th. TDS by 7th. Maharashtra PTRC on GRAS portal by 15th per Feb 2026 notification. Quarterly Form 24Q with ESOP perquisites in Form 12BA. Department-wise, cost-centre-wise payroll reports for CFOs. Investment proof verification status reports in January. Related: <a href="#">Professional Tax Registration</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Filed on Time</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CFO Reports Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="27" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="34" y="15" width="27" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="63" y="15" width="27" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="92" y="15" width="23" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="18" y="32" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">EPF</text><text x="47" y="32" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">TDS</text><text x="76" y="32" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">PT</text><text x="103" y="32" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">24Q</text><path d="M14 42l3 3 5-5" stroke="#10B981" stroke-width="1.2"/><path d="M43 42l3 3 5-5" stroke="#10B981" stroke-width="1.2"/><path d="M72 42l3 3 5-5" stroke="#10B981" stroke-width="1.2"/><path d="M99 42l3 3 5-5" stroke="#10B981" stroke-width="1.2"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Year-End Compliance and Form 16 Generation</h3><p class="step-description">Form 16 (Part A from TRACES + Part B with ESOP perquisite, deductions, tax computation) for every employee. Annual PF return, ESIC statements, Form 12BA, consolidated wage registers. Old/new tax regime TDS per employee election. Patron coordinates with statutory auditor at RoC Pune. Related: <a href="/statutory-audit/pune">Statutory Audit in Pune</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 + 12BA</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dual Regime TDS</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="40" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="35" y="25" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Form 16</text><rect x="65" y="10" width="40" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="85" y="25" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">12BA</text><rect x="30" y="50" width="60" height="25" rx="4" fill="#E8712C" opacity="0.15"/><text x="60" y="65" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Audit Ready</text></svg></div><span class="illustration-label">Year-End Done</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for IT Payroll</h2>
            <div class="content-text">
                
                <ul><li><strong>Employee Master Data:</strong> Name, PAN, Aadhaar, DOB, DOJ, bank account, designation, department, CTC breakup, old/new tax regime election</li><li><strong>ESOP/RSU Grant Letters:</strong> Grant date, vesting schedule, exercise price, number of options. For foreign RSUs, share details and forex method</li><li><strong>Investment Declarations:</strong> Section 80C (LIC, PPF, ELSS, housing loan, tuition), 80D (medical insurance), 80CCD(1B) (NPS), 24(b) (housing loan interest), HRA rent receipts</li><li><strong>Flexi-Benefit Elections:</strong> Employee choices within annual basket limits</li><li><strong>EPF/ESIC Registration:</strong> Establishment PF code, ESIC number, UAN details for existing employees</li><li><strong>Maharashtra PTRC:</strong> 12-digit TIN from GRAS portal</li><li><strong>Shops &amp; Establishments Registration:</strong> Required for IT offices in Hinjewadi, Kharadi, Magarpatta, Baner</li><li><strong>TAN:</strong> For TDS under Section 192 and 194J (consultant payments)</li></ul><p style="margin-top:16px;"><strong>Pune tip:</strong> For Baner SaaS startups scaling from 10 to 100 employees, Patron provides a rapid onboarding kit that configures PF, ESIC, PT, TDS, and ESOP tracking within 5 working days.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in IT Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Perquisite TDS</td><td>Hinjewadi and Baner startups miss perquisite TDS or compute incorrectly - triggering Section 201(1A) default notices</td><td>Automated ESOP perquisite computation as part of payroll cycle with Form 12BA</td></tr><tr><td>Code on Wages CTC Impact</td><td>Kharadi MNCs structured basic at 30-35%. 50% mandate increases PF by Rs 36,000-72,000/year per employee</td><td>Impact analysis per grade. Transition CTC structures designed. Employee communication supported</td></tr><tr><td>Multi-State PT for Hybrid Workforce</td><td>Remote developers in Bangalore, Hyderabad, Chennai - different PT slabs, thresholds, filing requirements</td><td>State-specific PT deduction per employee location. Multi-state returns filed</td></tr><tr><td>High Attrition F&amp;F Volume</td><td>200-employee company processes 30-50 F&amp;F per year with gratuity, leave, ESOP acceleration, PF transfer</td><td>Automated F&amp;F with pre-configured templates processed within 48 hours</td></tr><tr><td>Investment Proof Verification</td><td>500+ employees submitting 80C/80D proofs in January - manual processing causes TDS backlogs</td><td>Digitised proof verification with auto TDS recomputation for March payroll</td></tr>

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
            <h2 class="section-title">Fees for IT Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Payroll + Statutory (up to 25 employees)</td><td>Rs 5,000 - Rs 8,000/month</td></tr><tr><td>Payroll + Statutory (26-100 employees)</td><td>Rs 8,000 - Rs 18,000/month</td></tr><tr><td>Payroll + Statutory (101-300 employees)</td><td>Rs 18,000 - Rs 40,000/month</td></tr><tr><td>Payroll + Statutory (301-500 employees)</td><td>Rs 40,000 - Rs 70,000/month</td></tr><tr><td>ESOP/RSU Processing (add-on)</td><td>Rs 3,000 - Rs 10,000/month</td></tr><tr><td>Code on Wages CTC Restructuring (one-time)</td><td>Rs 10,000 - Rs 30,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Payroll in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20payroll%20in%20Pune.%20Please%20share%20a%20quote." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for IT Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Employee Data Onboarding</td><td>Day 1-3</td></tr><tr><td>CTC Design and Configuration</td><td>Day 4-7</td></tr><tr><td>First Payroll Cycle</td><td>Day 8-10</td></tr><tr><td>Statutory Filing</td><td>TDS by 7th; PF/ESIC/PTRC by 15th</td></tr><tr><td>ESOP Exercise Processing</td><td>Within 48 hours of exercise</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Note:</strong> SaaS startups in Baner can be fast-tracked in 5 working days. Large GCCs with 300+ employees and ESOP plans may require 10-12 working days for full configuration.</p>

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
            <h2 class="section-title">Why Choose Patron for IT Payroll in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Near Pune IT Corridor</h3><p class="feature-text">RTC Silver, Wagholi - serving Hinjewadi Phase I-IV, Kharadi EON, Magarpatta Cybercity, Baner-Balewadi, and Wakad. Walk-in for founders and HR heads.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">IT-Specific Payroll</h3><p class="feature-text">ESOP/RSU perquisite TDS, flexi-benefit administration, multi-state PT, and Code on Wages CTC design - all under one engagement.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Zero-Penalty Filing</h3><p class="feature-text">TDS by 7th. EPF/ESIC by 15th. PTRC by 15th per Feb 2026 notification. ESOP TDS within 48 hours of exercise. All deadlines tracked.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Take-Home Optimised</h3><p class="feature-text">CTC designed for maximum take-home within Code on Wages compliance. HRA, NPS, flexi baskets all tax-optimised for Pune IT employees.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years. 50,000+ documents filed. Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">From Rs 5,000/month</h3><p class="feature-text">25 employees included. CTC structuring and full statutory compliance bundled. ESOP processing available as add-on.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune's IT Ecosystem</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"Patron's payroll team handles 200+ employees without a single error month on month."</em> - HR Head, IT Company, Gurugram</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and hundreds of Pune-based companies. 4 offices across India.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Professional IT Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Aspect</th><th>In-House (Startup Finance)</th><th>Patron Professional</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP TDS</td><td>Often missed or miscalculated</td><td>Automated at exercise with Form 12BA</td></tr><tr><td>Flexi Benefits</td><td>Manual tracking; limits breached</td><td>System-enforced limits per component</td></tr><tr><td>Investment Proofs</td><td>Paper-based; delayed recomputation</td><td>Digitised verification; auto TDS recompute</td></tr><tr><td>F&amp;F Settlements</td><td>Delayed; manual gratuity and leave calc</td><td>Pre-configured templates; 48-hour processing</td></tr><tr><td>Compliance Risk</td><td>High - TDS defaults, late PF, missed PT</td><td>Zero-penalty filing record</td></tr>

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
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="/payroll-services-for-it-and-software-industry">Payroll for IT/Software across India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="/payroll-services/pune">Payroll Services in Pune</a></li><li><a href="/accounting-services/pune">Accounting Services in Pune</a></li><li><a href="/statutory-audit/pune">Statutory Audit in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="#">Professional Tax Registration</a></li><li><a href="/private-limited-company-compliance">Pvt Ltd Compliance</a></li><li><a href="/gst-registration">GST Registration</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for IT Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>EPF Act 1952:</strong> 12% + 12% for 20+ employees. Statutory ceiling Rs 15,000. Voluntary higher PF permitted. ECR by 15th.</p><p><strong>ESIC Act 1948:</strong> 3.25% + 0.75% for employees up to Rs 21,000/month. Covers junior IT staff, BPO, support roles.</p><p><strong>Income Tax Act 1961:</strong> Section 192 TDS on salary. Section 17(2)(vi): ESOP perquisite. TDS by 7th. Form 24Q quarterly. Form 12BA for perquisites. Section 80-IAC: startup ESOP deferral 48 months.</p><p><strong>Code on Wages 2019:</strong> Basic pay 50% of CTC from November 2025. Impacts PF, gratuity, overtime, bonus.</p><p><strong>Maharashtra PT Act 1975:</strong> PTRC mandatory. Due 15th per Feb 2026 notification. PTEC Rs 2,500/year. Source: <a href="https://www.mahagst.gov.in/en/pt-acts" target="_blank" rel="noopener">mahagst.gov.in</a></p><p><strong>Maharashtra Shops &amp; Est Act 2017:</strong> Registration for IT offices. Max 9 hours/day. Overtime at double rate.</p><p><strong>Payment of Gratuity Act 1972:</strong> For 10+ employees. After 5 years. Max Rs 25 lakh.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - IT Payroll in Pune</h2>
                    <p class="faq-expanded__lead">Answers about ESOP taxation, flexi benefits, PF/ESIC, Code on Wages, multi-state PT, and CTC structuring for Pune IT companies.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'IT Payroll in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles IT payroll compliance in Pune?</h3>
                        <div class="faq-expanded__a"><p>EPFO Regional Office Pune manages PF. Income Tax Office Pune oversees TDS including ESOP perquisite taxation. GRAS portal at mahagst.gov.in handles Maharashtra Professional Tax. ESIC Regional Office Pune covers ESI for eligible employees. Patron's Pune office at Wagholi coordinates with all authorities for IT clients.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get IT payroll services done online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron provides fully digital payroll for Pune IT companies with HRMS integration for Keka, GreytHR, and Darwinbox. All statutory filings completed online. Walk-in at Wagholi office available for IT company founders and HR heads who prefer in-person discussion on CTC structuring or ESOP taxation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the IT payroll fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>IT payroll fees start from Rs 5,000 per month for up to 25 employees including CTC structuring and statutory compliance. For companies with 100+ employees and ESOP processing, fees range from Rs 18,000 to Rs 40,000/month. ESOP/RSU perquisite processing available as add-on from Rs 3,000/month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does IT payroll setup take in Pune?</h3>
                        <div class="faq-expanded__a"><p>Standard setup takes 7-10 working days including data onboarding, CTC design per Code on Wages, flexi-benefit configuration, PF/ESIC/PT setup, and ESOP parameters. First payroll cycle processes within 3 working days. 5-day fast-track onboarding available for Baner startups.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How is ESOP taxed in IT company payroll?</h3>
                        <div class="faq-expanded__a"><p>Under Section 17(2)(vi) of the Income Tax Act, when an employee exercises ESOPs, the difference between FMV on exercise date and exercise price is treated as salary perquisite. TDS deducted at applicable slab rate and deposited by 7th. For eligible startups under Section 80-IAC, TDS deferral up to 48 months is available.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is Maharashtra Professional Tax mandatory for IT companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every IT company employing staff in Maharashtra must obtain PTRC under the Maharashtra PT Act 1975. Professional tax deducted from employee salaries per applicable slabs. Revised due date 15th per February 2026 notification. Directors and founders need PTEC at Rs 2,500/year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How does Code on Wages 2019 affect IT company salaries?</h3>
                        <div class="faq-expanded__a"><p>Under Code on Wages (effective November 2025), basic pay including DA must be at least 50% of total CTC. IT companies must restructure every employee's CTC. This increases PF contributions, gratuity liability, and overtime rate. Take-home pay reduces unless the company absorbs increased PF cost.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">How to handle payroll for remote IT employees across states?</h3>
                        <div class="faq-expanded__a"><p>IT companies with remote employees across Karnataka, Telangana, Tamil Nadu, or other states must deduct Professional Tax per the employee's work location state. Each state has different PT slabs. Patron configures multi-state PT deduction per employee location and files returns across all applicable state portals.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Pune mein IT company ka payroll kitne mein hota hai?</strong> Rs 5,000 per month se start. 25 employees tak. ESOP processing add-on Rs 3,000 se.</p><p><strong>ESOP exercise pe tax kab lagta hai?</strong> Jab employee options exercise karta hai tab FMV minus exercise price ka difference perquisite maana jaata hai. TDS employer deduct karta hai.</p><p><strong>Code on Wages se IT salary structure badlega kya?</strong> Haan. Basic pay ab minimum 50% CTC hona chahiye. PF badhega aur take-home kam hoga jab tak company adjust na kare.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk TDS Default or ESOP Non-Compliance</h2>
            <div class="content-text">
                
                <p>Every IT company with salaried employees must maintain PF/ESIC registrations, deduct Maharashtra PT, and comply with TDS timelines. TDS by 7th - late deposit attracts 1.5%/month interest. ESOP perquisite TDS under Section 17(2)(vi) is not optional - missed deductions attract penalty under Section 271C. Code on Wages 50% basic from November 2025 requires immediate CTC restructuring. In Pune's competitive IT market, payroll errors cause employee dissatisfaction and attrition.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20payroll%20in%20Pune" target="_blank">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with IT Payroll in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Payroll for IT and software companies in Pune demands tax-efficient CTC design, ESOP/RSU perquisite taxation, flexi-benefit administration, multi-state PT, and Code on Wages restructuring.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office at RTC Silver, Wagholi delivers integrated IT payroll - from Hinjewadi's IT Park through Kharadi's EON Free Zone to Magarpatta Cybercity and the Baner startup belt.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">15+ years. 10,000+ businesses. 4.9 Google rating. CAs, CSs, and payroll compliance professionals. Pune, Mumbai, Delhi, Gurugram.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20payroll%20in%20Pune.%20Please%20share%20a%20quote." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IT%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0AI%20need%20IT%20company%20payroll%20in%20Pune.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IT Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides IT company payroll in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local IT payroll</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services-for-it-and-software-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-it-software/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services-for-it-and-software-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Complete compliance for Pune IT businesses</div><div class="pa-cross-grid"><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers payroll services for IT and software companies in Pune. ESOP taxation, Code on Wages, and PT notifications verified against latest updates. Freshness Tier 1.</p>
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
