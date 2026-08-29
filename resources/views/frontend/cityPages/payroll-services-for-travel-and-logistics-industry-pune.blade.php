
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
    <title>Travel & Logistics Payroll in Pune - PF, ESI & Multi-PT</title>
    <meta name="description" content="CA-managed payroll for logistics and transport in Pune. Driver wages, shift pay, EPF, ESIC - all handled. Serving Chakan, Talegaon, Ranjangaon operations. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-travel-and-logistics-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Travel & Logistics Payroll in Pune - PF, ESI & Multi-PT">
    <meta property="og:description" content="CA-managed payroll for logistics and transport in Pune. Driver wages, shift pay, EPF, ESIC - all handled. Serving Chakan, Talegaon, Ranjangaon operations. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-travel-and-logistics-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Travel & Logistics Payroll in Pune - PF, ESI & Multi-PT">
    <meta name="twitter:description" content="CA-managed payroll for logistics and transport in Pune. Driver wages, shift pay, EPF, ESIC - all handled. Serving Chakan, Talegaon, Ranjangaon operations. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Logistics & Transport Payroll in Pune",
      "description": "CA-managed payroll for logistics and transport in Pune. Driver wages, shift pay, EPF, ESIC - all handled. Serving Chakan, Talegaon, Ranjangaon operations. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry/pune",
      "serviceType": "Logistics & Transport Payroll in Pune",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry/pune",
        "price": "4000"
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
          "name": "Logistics Payroll Services",
          "item": "https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Logistics & Transport Payroll in Pune",
          "item": "https://www.patronaccounting.com/payroll-services-for-travel-and-logistics-industry/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles EPF for Pune logistics companies?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EPFO Regional Office Pune handles all EPF filings for logistics companies. Monthly ECR is filed via the unified portal. Patron files by the 15th each month. Warehouses in Chakan and Talegaon with separate establishments may need separate EPF codes - Patron manages this automatically."
          }
        },
        {
          "@type": "Question",
          "name": "Can logistics payroll be managed online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron handles driver wages, warehouse shift payroll, TDS, EPF/ESIC, Maharashtra PT, and payslips entirely online. Our Pune office at RTC Silver, Wagholi provides in-person consultation for logistics company owners. All statutory filings are digital."
          }
        },
        {
          "@type": "Question",
          "name": "What is the logistics payroll fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Logistics payroll starts from Rs 4,000 per month for up to 50 staff including driver wages, shift payroll, overtime, TDS, EPF/ESIC challans, and Maharashtra PT. Annual compliance with Form 16 included. Motor Transport Workers Act compliance available as add-on at Rs 5,000-10,000/year."
          }
        },
        {
          "@type": "Question",
          "name": "How long does payroll setup take for a Pune logistics company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Initial setup takes 5-7 working days including staff roster, wage structure configuration, EPF/ESIC portal mapping, and Maharashtra PT setup. Monthly processing starts from the following month. Seasonal staff can be onboarded rapidly during peak periods."
          }
        },
        {
          "@type": "Question",
          "name": "Is the Motor Transport Workers Act applicable to Pune fleet operators?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The Motor Transport Workers Act 1961 applies to every motor transport undertaking with 5+ transport workers. It mandates 8 hours maximum driving per day, 30-minute rest after every 5 hours, welfare register maintenance, and welfare fund contributions. RTO Pune conducts inspections at toll plazas and depots."
          }
        },
        {
          "@type": "Question",
          "name": "Is ESIC applicable to warehouse operations in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESIC applies to any warehouse with 10+ employees where individual workers earn below Rs 21,000/month. In Pune's Chakan and Talegaon warehouses, loaders, sorters, packaging staff, and helpers typically earn below this threshold. The warehouse must register if even one employee qualifies."
          }
        },
        {
          "@type": "Question",
          "name": "How is driver overtime calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Under the Minimum Wages Act 1948, overtime for transport workers is payable at double the ordinary rate for hours beyond 8 per day or 48 per week. For trip-based drivers, the trip wage is reconciled against minimum daily wage, and overtime is calculated on the reconciled daily rate. Patron's system handles this automatically."
          }
        },
        {
          "@type": "Question",
          "name": "Does Maharashtra PT apply to warehouse workers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Maharashtra PT Act 1975, all salaried staff including warehouse workers, drivers, and office employees are liable for Professional Tax if monthly salary exceeds Rs 7,500. PTRC is deducted at slab rates. Logistics companies with warehouses in multiple Pune locations need separate PTRC per establishment. Quick Answers Driver ka payroll kaise banta hai? Basic + DA + trip allowance + halting + overtime. Patron reconciles trip wages against Maharashtra minimum wages and ensures Motor Transport Act compliance. Warehouse mein ESIC lagta hai kya? Yes, if 10+ employees and any earn below Rs 21,000/month. Loaders, helpers, sorters in Chakan/Talegaon typically qualify. Logistics company ka EPF kab file hota hai? Monthly by 15th via EPFO unified portal. Patron handles for all Pune logistics companies."
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
                        Payroll Services for Logistics and Transport in Pune: CA-Led Fleet and Warehouse Payroll
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Salary registers, Form 24Q, EPF/ESIC challans, Maharashtra PT returns, driver welfare records</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 4,000 per month for up to 50 staff</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All logistics companies, transport operators, 3PLs, couriers, warehouses, and fleet businesses in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup in 5-7 working days; monthly processing by 28th</p>
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
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20logistics%20payroll%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Logistics Payroll in Pune',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-travel-and-logistics-industry/pune', 'label' => 'Logistics Payroll in Pune', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services/pune', 'label' => 'Payroll Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services/pune', 'label' => 'Accounting Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/pune', 'label' => 'GST Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-return-filing/pune', 'label' => 'GST Return Filing in Pune', 'selected' => false, 'disabled' => false],
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
        
        <div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Outstanding experience with Patron Accounting. Professionalism, attention to detail, and timely communication made everything seamless.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">S</div><div><div class="testi-name">Subhendu Mishra</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Glad I connected with Patron. Minimum time for calculations and really helpful throughout the process.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar blue">R</div><div><div class="testi-name">Rajib Dutta</div><div class="testi-role">3 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Fantastic experience with Patron. Shubham was extremely knowledgeable. 5 stars for smooth documentation handling.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar teal">N</div><div><div class="testi-name">Nishikant Gurav</div><div class="testi-role">1 month ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Best service for all account handling. Extremely happy they assigned a dedicated contact for our logistics company.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar purple">N</div><div><div class="testi-name">Nikhil Nimbhorkar</div><div class="testi-role">4 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div><div><div class="testi-quote-card"><div class="testi-quote-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg></div><p class="testi-quote-text">Professional and timely. Shubham and Amin handled our filings smoothly. Understand basics well and respond promptly.</p><div class="testi-footer"><div class="testi-author"><div class="testi-avatar ">S</div><div><div class="testi-name">Sameer Mehta</div><div class="testi-role">2 months ago</div></div></div><div class="testi-rating-row"><div class="testi-stars"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><div class="testi-google-badge"><img src="/images/google.png" alt="Google" onerror="this.parentElement.innerHTML='G'"></div></div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get CA-managed logistics payroll, driver wage compliance, and statutory filings for your Pune transport or warehouse business.</p>
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
            <h2 class="section-title">Logistics Payroll in Pune</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Logistics Payroll in Pune Services at a Glance</strong></p>
                    <p>Logistics and transport payroll in Pune covers shift-based salary computation for warehouse workers, driver wage calculation (daily/trip/monthly), overtime at 2x rate under the Minimum Wages Act 1948, TDS under Section 192, EPF/ESIC contributions, Maharashtra Professional Tax (PTRC/PTEC), and compliance with the Motor Transport Workers Act 1961 for fleet drivers. Pune's Chakan-Talegaon industrial belt - accounting for 70% of the city's 7.4 million sq ft warehouse leasing in 2025 - employs thousands requiring specialist payroll.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Acts</td><td>EPF Act 1952, ESIC Act 1948, IT Act S192, Maharashtra PT Act 1975, Motor Transport Workers Act 1961, Minimum Wages Act 1948</td></tr><tr><td>Applicable To</td><td>Logistics companies, transport operators, 3PLs, courier/delivery firms, warehouses, fleet businesses in Pune</td></tr><tr><td>Timeline</td><td>Monthly payroll by 28th; EPF/ESIC by 15th; wages by 7th/10th under Payment of Wages Act</td></tr><tr><td>Cost Starting From</td><td>Rs 4,000/month for up to 50 staff</td></tr><tr><td>Key Penalty</td><td>Late EPF: 12% p.a. + damages; Motor Transport Act: Rs 500/day + imprisonment; Min wages: Rs 50,000 fine</td></tr><tr><td>Key Forms</td><td>Form 24Q, ECR, ESIC challan, PT Form III-B, Form 16, Welfare Register</td></tr><tr><td>Jurisdictional Office</td><td>EPFO Pune; Labour Commissioner Pune; RTO Pune</td></tr></tbody></table></div></p>
                </div>
                <p>Pune has emerged as one of India's most critical logistics corridors. The Chakan MIDC hosts automobile giants like Volkswagen, Bajaj, Mahindra, Mercedes-Benz, Hyundai, and Bridgestone. The Talegaon-Chakan belt accounted for 70% of Pune's warehouse leasing in 2025 with companies like IndoSpace, ESR, and Welspun One. XpressBees, headquartered in Pune, processes over 4 million shipments daily. Learn more about <a href="/payroll-services-for-travel-and-logistics-industry">Payroll Services for Travel and Logistics Industry across India</a>.</p>
                <p>This ecosystem employs long-haul truck drivers on trip-based wages, warehouse operatives on three shifts, delivery executives on daily rates, and helpers earning below ESIC threshold. Each category has different statutory deduction rules, overtime methods, and regulatory requirements - including the Motor Transport Workers Act 1961 mandating welfare provisions and working hour limits for drivers. Patron Accounting's Pune office at RTC Silver, Wagholi handles integrated logistics payroll.</p>
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
                <h2 class="section-title">What Is Logistics Payroll Processing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Logistics payroll processing is the systematic computation and disbursement of wages for transport, warehousing, and supply chain staff, covering driver wage calculation (daily, trip, or monthly), warehouse shift-based salary computation, overtime at 2x rate under the Minimum Wages Act 1948, TDS under Section 192, EPF/ESIC contributions, and compliance with the Motor Transport Workers Act 1961.</p><p>For Pune's logistics sector - from the Chakan-Talegaon warehouse corridor to 3PL operators in Pimpri-Chinchwad and e-commerce delivery networks in Kharadi and Hadapsar - payroll must handle multiple wage structures simultaneously: long-haul drivers on per-trip rates, warehouse staff on 8-hour rotational shifts with night allowance, contract loaders on daily wages, and delivery executives on per-package incentives.</p><p>Patron Accounting provides end-to-end <a href="/payroll-services-for-travel-and-logistics-industry">logistics payroll services</a> integrated with <a href="/travel-and-logistics-accounting-services">transport accounting</a> for Pune operations.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Logistics Payroll in Pune:</strong></p>
                    <ul><li><strong>Motor Transport Workers Act 1961:</strong> Mandates 8-hour driving limit, 30-minute rest after 5 hours, welfare register for transport drivers</li><li><strong>Trip-Based Wage:</strong> Driver compensation per trip or per kilometre, reconciled against Maharashtra minimum wage</li><li><strong>Shift Differential:</strong> Additional pay for evening and night warehouse shifts (10-20% over base rate)</li><li><strong>Seasonal Onboarding:</strong> Rapid EPF/ESIC registration for temporary workers during e-commerce festival peaks</li><li><strong>Welfare Register:</strong> Mandatory record under Motor Transport Workers Act, inspected by RTO Pune</li></ul>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Logistics Payroll in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Fleet + Warehouse Compliant</span>
                        <strong>Logistics Payroll</strong>
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
            <h2 class="section-title">Who Needs Logistics Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>3PL Operators and Warehouses (Chakan-Talegaon-Ranjangaon):</strong> Companies like IndoSpace tenants, ESR park occupants employing 50-500 workers per facility across operatives, forklift operators, packaging staff, and security. EPF (20+ employees), ESIC (below Rs 21,000/month), and Maharashtra PT for every worker. Need <a href="#">Professional Tax Registration</a> per location.</p><p><strong>Transport and Trucking Companies:</strong> Fleet operators along Mumbai-Pune Expressway, Pune-Nashik Highway, and Pune-Solapur corridor. Drivers on trip-based wages must meet Maharashtra minimum wage for transport category. Companies like VRL, Gati, TCI, and hundreds of smaller operators in Pimpri-Chinchwad and Bhosari.</p><p><strong>E-Commerce Logistics:</strong> XpressBees (Kalyani Nagar), Delhivery, Ecom Express, Amazon logistics partners. Delivery executives increasingly classified as employees. Workforce can double during Diwali and festive peaks requiring rapid EPF/ESIC onboarding from Day 1.</p><p><strong>Courier/Express:</strong> Blue Dart, Gati, DTDC, Professional Couriers - Pune operations with per-package incentive computation, Shops Act compliance, and Maharashtra PT for field staff.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Logistics Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Driver Wage Computation</td><td>Daily, trip-based, or monthly salary with overtime, halting allowance, night halt per Motor Transport Workers Act 1961</td></tr><tr><td>Warehouse Shift Payroll</td><td>3-shift processing for Chakan, Talegaon, Ranjangaon - auto overtime at 2x rate and night shift allowance</td></tr><tr><td>TDS and Quarterly Filing</td><td>Section 192 TDS for all salaried staff; Form 24Q quarterly; annual Form 16. Related: <a href="/tds-return-filing-24q">TDS Return Filing</a></td></tr><tr><td>EPF Compliance</td><td>Monthly ECR and challan for 20+ staff establishments, filed with EPFO Regional Office Pune</td></tr><tr><td>ESIC Administration</td><td>Contribution for helpers, loaders, delivery boys below Rs 21,000/month. Related: <a href="/esic-calculation-and-compliance-services">ESIC Compliance</a></td></tr><tr><td>Maharashtra PT</td><td>PTRC deduction per slabs for all logistics staff. Separate PTRC per warehouse location</td></tr><tr><td>Minimum Wage Compliance</td><td>Verification against Maharashtra minimums for transport and general categories per Labour Commissioner notifications</td></tr><tr><td>Seasonal Staff Onboarding</td><td>Rapid PF/ESIC registration for temporary workers during Diwali, Big Billion Day, and festive peaks</td></tr><tr><td>Motor Transport Act Compliance</td><td>Working hours, rest periods, welfare register, driver duty roster for RTO Pune inspections</td></tr><tr><td>Full and Final Settlement</td><td>Gratuity, leave encashment, notice period, bonus under Payment of Bonus Act 1965, final TDS</td></tr>

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
            <h2 class="section-title">Logistics Payroll Process in Pune - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to EPFO Pune or RTO required - Patron's Pune office at RTC Silver, Wagholi handles all filings digitally. Walk-in available for logistics company owners.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Map Workforce Categories and Configure Wage Structures</h3><p class="step-description">Patron's Pune team categorises all logistics staff: drivers (long-haul/city), warehouse operatives (permanent/contractual), delivery executives, loaders/helpers, mechanics, supervisors, and management. Wage structures configured for each category - trip-based for drivers, shift-based for Chakan/Talegaon warehouse staff, daily-rate for contract loaders. Each mapped to Maharashtra minimum wage for transport workers.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Categories Mapped</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Min Wages Applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="10" width="100" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="22" width="35" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="34" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Drivers</text><rect x="65" y="22" width="35" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="34" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Warehouse</text><rect x="20" y="48" width="35" height="18" rx="3" fill="#E8712C" opacity="0.15"/><text x="37" y="60" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Delivery</text><rect x="65" y="48" width="35" height="18" rx="3" fill="#E8712C" opacity="0.15"/><text x="82" y="60" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Helpers</text></svg></div><span class="illustration-label">Config Done</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Integrate Attendance, Trip Logs, and Shift Data</h3><p class="step-description">We process attendance from biometric systems at warehouses, GPS-based trip logs for fleet vehicles, and delivery app data for e-commerce staff. For Chakan warehouses running 3 shifts, overtime beyond 8 hours flagged automatically. For drivers under Motor Transport Workers Act 1961, daily driving hours and rest periods tracked to ensure 8-hour limit and 30-minute rest after every 5 hours.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>GPS/Bio Integrated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OT Auto-Flagged</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="80" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="22" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Trip + Shift Data</text><line x1="25" y1="30" x2="95" y2="30" stroke="#14365F" stroke-width="0.8"/><circle cx="35" cy="45" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="35" y="48" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">GPS</text><circle cx="60" cy="45" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="48" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">Bio</text><circle cx="85" cy="45" r="8" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="85" y="48" font-size="5" fill="#14365F" text-anchor="middle" font-family="Arial">App</text><text x="60" y="72" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">OT flagged auto</text></svg></div><span class="illustration-label">Data Synced</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Compute Gross-to-Net Wages with All Deductions</h3><p class="step-description">For each employee, Patron calculates gross wages (basic + DA + shift/night allowance + overtime + trip incentive), deducts TDS under Section 192, EPF at 12% each, ESIC at 3.25% + 0.75% for eligible staff, Maharashtra PT per slab rates, and advance recoveries. Companies with warehouses in both Chakan and Ranjangaon may need separate PTRC and EPF codes per location.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OT at 2x Rate</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-Location PT</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="10" y="5" width="100" height="85" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="20" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial" font-weight="700">Gross to Net</text><line x1="20" y1="28" x2="100" y2="28" stroke="#14365F" stroke-width="0.8"/><text x="25" y="40" font-size="6" fill="#14365F" font-family="Arial">Basic + Trip/Shift</text><text x="25" y="50" font-size="6" fill="#14365F" font-family="Arial">+ OT at 2x rate</text><text x="25" y="60" font-size="6" fill="#14365F" font-family="Arial">- EPF/ESIC/PT/TDS</text><line x1="20" y1="68" x2="100" y2="68" stroke="#14365F" stroke-width="0.8"/><text x="60" y="80" font-size="7" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">= Net Wages</text></svg></div><span class="illustration-label">Wages Computed</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Generate Challans and File Returns</h3><p class="step-description">EPF challans via EPFO unified portal by 15th, ESIC by 15th, Maharashtra PT per quarterly schedule, Form 24Q on IT e-filing portal. Motor Transport Workers Act welfare register and driver duty roster maintained for RTO Pune inspections. Shops Act registers for warehouse operations. Related: <a href="/tds-return-filing-24q">TDS Return Filing</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPF/ESIC by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>MTA Register Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="42" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><rect x="80" y="15" width="35" height="50" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.2"/><text x="22" y="32" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">EPF</text><text x="60" y="32" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">ESIC</text><text x="97" y="32" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">PT</text><path d="M18 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M55 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><path d="M93 42l3 3 6-6" stroke="#10B981" stroke-width="1.5"/><text x="60" y="82" font-size="7" fill="#E8712C" text-anchor="middle" font-family="Arial">Filed by 15th</text></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Distribute Payslips and Handle Queries</h3><p class="step-description">Digital payslips for all staff - from fleet managers at Pimpri-Chinchwad transport companies to warehouse sorters at IndoSpace logistics parks in Chakan. Each shows basic pay, trip/shift allowance, overtime, all deductions, and net pay. Driver queries on halting allowance, trip-wage reconciliation, and PF balance handled by Patron's Pune team.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Payslips Distributed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Queries Resolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="22" width="70" height="15" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="32" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Payslip</text><line x1="30" y1="45" x2="90" y2="45" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="52" x2="80" y2="52" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="30" y1="59" x2="85" y2="59" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="70" y="65" width="20" height="8" rx="4" fill="#10B981" opacity="0.3"/><text x="80" y="71" font-size="5" fill="#10B981" text-anchor="middle" font-family="Arial" font-weight="700">Sent</text></svg></div><span class="illustration-label">Staff Notified</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Annual Compliance and Audit Support</h3><p class="step-description">Form 16 for all staff, final Form 24Q, EPF annual return, Maharashtra PT return Form III-B, Motor Transport Workers Act welfare register for RTO audit, minimum wage compliance certificate, and salary schedules for statutory auditors. Related: <a href="/payroll-services/pune">Payroll Services in Pune</a>.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 Generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>RTO Audit Ready</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="35" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="25" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">Form 16</text><rect x="65" y="10" width="35" height="25" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="82" y="25" font-size="6" fill="#14365F" text-anchor="middle" font-family="Arial">MTA Reg</text><rect x="35" y="50" width="50" height="25" rx="4" fill="#E8712C" opacity="0.15"/><text x="60" y="65" font-size="7" fill="#14365F" text-anchor="middle" font-family="Arial" font-weight="600">Audit Ready</text></svg></div><span class="illustration-label">Year-End Done</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Logistics Payroll</h2>
            <div class="content-text">
                
                <ul><li><strong>Staff Appointment/Offer Letters:</strong> With salary breakup for each category (drivers, warehouse, delivery, management)</li><li><strong>PAN and Aadhaar:</strong> For TDS under Section 192 and EPF KYC</li><li><strong>EPF/ESIC Registration:</strong> Or staff count for new registration with EPFO Pune</li><li><strong>Maharashtra PTRC/PTEC Certificates:</strong> From mahagst.gov.in</li><li><strong>Vehicle Registration and Permits:</strong> For Motor Transport Workers Act applicability assessment</li><li><strong>Shift Roster and Trip Logs:</strong> From GPS/biometric/delivery app systems</li><li><strong>Previous Year Salary Register and Form 16:</strong> For mid-year payroll takeover</li><li><strong>Maharashtra Shops &amp; Establishments Registration:</strong> For warehouse operations</li></ul><p style="margin-top:16px;"><strong>Pune tip:</strong> If your transport company operates vehicles with permits from RTO Pune, maintain driver duty rosters in the format prescribed under the Motor Transport Workers Act 1961. RTO inspections at highway checkpoints verify these records.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Logistics Payroll Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Driver Minimum Wage Non-Compliance</td><td>Mumbai-Pune Expressway fleet operators pay trip-based wages below Maharashtra minimum for transport category - fines up to Rs 50,000</td><td>Trip wages reconciled against monthly minimum wage equivalent. Labour Commissioner compliance ensured</td></tr><tr><td>Warehouse Overtime Errors</td><td>Chakan-Talegaon warehouses calculate overtime at 1.5x instead of mandatory 2x rate during e-commerce peaks</td><td>Automated 2x overtime per Minimum Wages Act with shift data integration</td></tr><tr><td>ESIC Registration Gaps</td><td>Loaders, sorters, helpers in Chakan/Talegaon earning below Rs 21,000 not registered - exposure during inspections</td><td>Assessment at setup; ESIC registration handled if even one employee qualifies</td></tr><tr><td>Motor Transport Act Non-Compliance</td><td>Fleet operators exceed 8-hour driving limits without welfare registers - RTO Pune inspections at toll plazas</td><td>Welfare register, duty roster, rest period tracking included as standard</td></tr><tr><td>Seasonal Workforce Gaps</td><td>Diwali/festive peak hires not registered for EPF/ESIC from Day 1 - compliance gaps in annual audits</td><td>Rapid onboarding with full statutory registration from Day 1 for temporary hires</td></tr>

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
            <h2 class="section-title">Logistics Payroll Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Payroll (up to 50 staff)</td><td>Rs 4,000 - Rs 25,000/month</td></tr><tr><td>EPF &amp; ESIC Registration (one-time)</td><td>Rs 5,000 - Rs 10,000</td></tr><tr><td>Annual Compliance Package</td><td>Rs 10,000 - Rs 25,000</td></tr><tr><td>Seasonal Staff Processing (per event)</td><td>Rs 2,000 - Rs 4,000</td></tr><tr><td>Motor Transport Act Compliance (annual)</td><td>Rs 5,000 - Rs 10,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Logistics Payroll in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20logistics%20payroll%20in%20Pune.%20Please%20share%20a%20quote." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Logistics Payroll Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Setup</td><td>5-7 working days</td></tr><tr><td>Monthly Processing</td><td>By 28th of each month</td></tr><tr><td>EPF/ESIC Challan</td><td>By 15th of following month</td></tr><tr><td>Quarterly TDS (Form 24Q)</td><td>By 31st Jan/Jul/Oct, 31st May</td></tr><tr><td>Annual Form 16</td><td>By 15th June</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Note:</strong> Small fleet operators with 20-50 staff are set up within 5 working days. Large 3PL warehouses with 200+ workers and multi-shift configurations may require 7-10 working days.</p>

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
            <h2 class="section-title">Why Choose Patron for Logistics Payroll in Pune</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Near Pune Logistics Belt</h3><p class="feature-text">RTC Silver, Wagholi - in Pune's eastern corridor within reach of Chakan-Talegaon warehouses, Ranjangaon MIDC, and Pimpri-Chinchwad transport hubs.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Logistics-Specific Payroll</h3><p class="feature-text">Trip-based driver wages, 3-shift warehouse overtime at 2x, Motor Transport Act welfare register, Maharashtra transport min wages - all bundled.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Zero-Penalty Filing</h3><p class="feature-text">EPF/ESIC by 15th. PTRC by 15th per Feb 2026 notification. TDS by 7th. All deadlines tracked and met every cycle.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3 class="feature-title">Seasonal Peak Ready</h3><p class="feature-text">Rapid EPF/ESIC onboarding for Diwali, Big Billion Day, and festive peaks. Full statutory compliance from Day 1 for every temporary hire.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><h3 class="feature-title">10,000+ Businesses, 4 Offices</h3><p class="feature-text">15+ years. 50,000+ documents filed. Pune, Mumbai, Delhi, Gurugram. 4.9 Google rating across India.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="feature-title">From Rs 4,000/month</h3><p class="feature-text">50 staff included. Driver wages, shift payroll, and full statutory compliance bundled. Motor Transport Act add-on available.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune's Logistics Industry</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p><p><em>"Patron's payroll team handles 200+ employees without a single error month on month."</em> - HR Head, IT Company, Gurugram</p><p>Trusted by Hyundai, Asian Paints, Bridgestone, and growing logistics businesses across Pune, Mumbai, Delhi, and Gurugram.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Outsourced Logistics Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House</th><th>Outsourced to Patron</th></tr></thead>
                    <tbody>
                        <tr><td>Overtime Accuracy</td><td>2x vs 1.5x confusion; manual errors</td><td>Auto 2x per Minimum Wages Act with shift data</td></tr><tr><td>EPF/ESIC Filing</td><td>Delayed; portal expertise lacking</td><td>Filed by 15th monthly via EPFO Pune</td></tr><tr><td>Driver Compliance</td><td>Motor Transport Act registers not maintained</td><td>Welfare register and duty roster as standard</td></tr><tr><td>Seasonal Staff</td><td>PF/ESIC registration delayed or skipped</td><td>Full statutory compliance from Day 1</td></tr><tr><td>Annual Cost</td><td>Rs 5-8 lakh (staff + software + penalties)</td><td>Rs 48,000-3,00,000/year; zero penalty risk</td></tr>

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
                
                <p><strong>Parent India Page:</strong></p><ul><li><a href="/payroll-services-for-travel-and-logistics-industry">Payroll for Travel &amp; Logistics Industry in India</a></li></ul><p><strong>Same-City Pune Pages:</strong></p><ul><li><a href="/payroll-services/pune">Payroll Services in Pune</a></li><li><a href="/accounting-services/pune">Accounting Services in Pune</a></li><li><a href="/gst-registration/pune">GST Registration in Pune</a></li></ul><p><strong>Related India Pages:</strong></p><ul><li><a href="/travel-and-logistics-accounting-services">Logistics Accounting</a></li><li><a href="/payroll-services">Payroll Services</a></li><li><a href="/tds-return-filing-24q">TDS Return Filing</a></li><li><a href="#">Professional Tax Registration</a></li><li><a href="/esic-calculation-and-compliance-services">ESIC Compliance</a></li><li><a href="/gratuity-calculation-and-compliance-services">Gratuity Compliance</a></li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Logistics Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>EPF Act 1952:</strong> 12% + 12% for 20+ staff. ECR by 15th. Section 7A principal employer liability.</p><p><strong>ESIC Act 1948:</strong> 3.25% + 0.75% for staff below Rs 21,000/month. Covers warehouse helpers, loaders, delivery boys.</p><p><strong>Motor Transport Workers Act 1961:</strong> 8-hour driving limit. 30-minute rest after 5 hours. Welfare register mandatory. Penalty: Rs 500/day + imprisonment for repeat offence. Source: <a href="https://mahakamgar.maharashtra.gov.in" target="_blank" rel="noopener">mahakamgar.maharashtra.gov.in</a></p><p><strong>Minimum Wages Act 1948:</strong> Maharashtra minimum wages for transport category. Overtime at 2x. Non-compliance fine Rs 50,000 + back-wage order.</p><p><strong>Maharashtra PT Act 1975:</strong> PTRC for employers. Due 15th per Feb 2026 notification. Separate PTRC per warehouse location.</p><p><strong>Maharashtra Shops &amp; Establishments Act 2017:</strong> Registration for warehouse operations.</p><p><strong>Payment of Bonus Act 1965:</strong> Statutory bonus for staff below Rs 21,000/month. External: <a href="https://unifiedportal-emp.epfindia.gov.in" target="_blank" rel="noopener">EPFO Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Logistics Payroll in Pune</h2>
                    <p class="faq-expanded__lead">Answers about driver payroll, warehouse shift pay, EPF/ESIC for logistics, Motor Transport Workers Act, and minimum wages in Pune.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'Logistics Payroll in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles EPF for Pune logistics companies?</h3>
                        <div class="faq-expanded__a"><p>EPFO Regional Office Pune handles all EPF filings for logistics companies. Monthly ECR is filed via the unified portal. Patron files by the 15th each month. Warehouses in Chakan and Talegaon with separate establishments may need separate EPF codes - Patron manages this automatically.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can logistics payroll be managed online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron handles driver wages, warehouse shift payroll, TDS, EPF/ESIC, Maharashtra PT, and payslips entirely online. Our Pune office at RTC Silver, Wagholi provides in-person consultation for logistics company owners. All statutory filings are digital.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the logistics payroll fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>Logistics payroll starts from Rs 4,000 per month for up to 50 staff including driver wages, shift payroll, overtime, TDS, EPF/ESIC challans, and Maharashtra PT. Annual compliance with Form 16 included. Motor Transport Workers Act compliance available as add-on at Rs 5,000-10,000/year.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does payroll setup take for a Pune logistics company?</h3>
                        <div class="faq-expanded__a"><p>Initial setup takes 5-7 working days including staff roster, wage structure configuration, EPF/ESIC portal mapping, and Maharashtra PT setup. Monthly processing starts from the following month. Seasonal staff can be onboarded rapidly during peak periods.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is the Motor Transport Workers Act applicable to Pune fleet operators?</h3>
                        <div class="faq-expanded__a"><p>Yes. The Motor Transport Workers Act 1961 applies to every motor transport undertaking with 5+ transport workers. It mandates 8 hours maximum driving per day, 30-minute rest after every 5 hours, welfare register maintenance, and welfare fund contributions. RTO Pune conducts inspections at toll plazas and depots.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is ESIC applicable to warehouse operations in Pune?</h3>
                        <div class="faq-expanded__a"><p>ESIC applies to any warehouse with 10+ employees where individual workers earn below Rs 21,000/month. In Pune's Chakan and Talegaon warehouses, loaders, sorters, packaging staff, and helpers typically earn below this threshold. The warehouse must register if even one employee qualifies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is driver overtime calculated?</h3>
                        <div class="faq-expanded__a"><p>Under the Minimum Wages Act 1948, overtime for transport workers is payable at double the ordinary rate for hours beyond 8 per day or 48 per week. For trip-based drivers, the trip wage is reconciled against minimum daily wage, and overtime is calculated on the reconciled daily rate. Patron's system handles this automatically.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does Maharashtra PT apply to warehouse workers?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Maharashtra PT Act 1975, all salaried staff including warehouse workers, drivers, and office employees are liable for Professional Tax if monthly salary exceeds Rs 7,500. PTRC is deducted at slab rates. Logistics companies with warehouses in multiple Pune locations need separate PTRC per establishment.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Driver ka payroll kaise banta hai?</strong> Basic + DA + trip allowance + halting + overtime. Patron reconciles trip wages against Maharashtra minimum wages and ensures Motor Transport Act compliance.</p><p><strong>Warehouse mein ESIC lagta hai kya?</strong> Yes, if 10+ employees and any earn below Rs 21,000/month. Loaders, helpers, sorters in Chakan/Talegaon typically qualify.</p><p><strong>Logistics company ka EPF kab file hota hai?</strong> Monthly by 15th via EPFO unified portal. Patron handles for all Pune logistics companies.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Don't Risk Compliance Penalties on Your Logistics Operations</h2>
            <div class="content-text">
                
                <p>Late EPF costs 12% p.a. plus damages up to 100% of arrears. Motor Transport Workers Act violations attract Rs 500/day per worker plus potential imprisonment. Minimum wage non-compliance for transport workers carries Rs 50,000 fine plus back-wage orders from Labour Commissioner Pune. If your logistics company processes payroll manually or through a non-specialist provider, get a compliance audit done now.</p><p><strong>Call +91 945 945 6700 today or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20logistics%20payroll%20in%20Pune" target="_blank">WhatsApp us</a> to get started.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Logistics Payroll in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Payroll services for logistics and transport in Pune require specialist handling for trip-based driver wages, warehouse shift payroll, Motor Transport Workers Act compliance, Maharashtra minimum wages, EPF/ESIC for mixed workforce, and seasonal peak onboarding.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">Patron Accounting's Pune office serves the city's logistics corridor - from 3PL warehouses in Chakan and Talegaon to fleet operators in Pimpri-Chinchwad, e-commerce logistics in Kalyani Nagar, and courier companies across Bhosari and Hadapsar.</p><p style="color:rgba(255,255,255,0.85);font-size:16px;line-height:1.7;">15+ years. 10,000+ businesses. 4.9 Google rating. Compliant with EPF, ESIC, Income Tax, Maharashtra PT, Motor Transport Workers Act, and Minimum Wages Act.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20logistics%20payroll%20in%20Pune.%20Please%20share%20a%20quote." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Logistics%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0AI%20need%20logistics%20payroll%20in%20Pune.%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Logistics Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron provides logistics payroll in major cities. Select your city.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available in These Cities</div><div class="pa-block-sub">Select your city for local logistics payroll</div><div class="pa-city-grid"><div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div><a href="/payroll-services-for-travel-and-logistics-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-travel-and-logistics-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/payroll-services-for-travel-and-logistics-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Pune</div><div class="pa-block-sub">Complete compliance for Pune logistics businesses</div><div class="pa-cross-grid"><a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/gst-returns/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Returns</div><div class="pa-card-sub">Pune</div></div></a><a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a><a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers payroll services for logistics and transport in Pune. Minimum wages, Motor Transport Workers Act, and PT notifications verified against latest updates. Freshness Tier 2.</p>
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
