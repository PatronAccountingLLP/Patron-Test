
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
    <title>Hotel & Restaurant Payroll in Pune - Tips, PF, ESI & TDS</title>
    <meta name="description" content="CA-managed payroll for hotels and restaurants in Pune. Shift wages, TDS, EPF, ESIC - all handled. Serving Koregaon Park, Viman Nagar, Camp properties. Call +91 945 945 6700.">
    <link rel="canonical" href="/payroll-services-for-the-hospitality-industry/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Hotel & Restaurant Payroll in Pune - Tips, PF, ESI & TDS">
    <meta property="og:description" content="CA-managed payroll for hotels and restaurants in Pune. Shift wages, TDS, EPF, ESIC - all handled. Serving Koregaon Park, Viman Nagar, Camp properties. Call +91 945 945 6700.">
    <meta property="og:url" content="/payroll-services-for-the-hospitality-industry/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hotel & Restaurant Payroll in Pune - Tips, PF, ESI & TDS">
    <meta name="twitter:description" content="CA-managed payroll for hotels and restaurants in Pune. Shift wages, TDS, EPF, ESIC - all handled. Serving Koregaon Park, Viman Nagar, Camp properties. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Hospitality Payroll for Hotels & Restaurants Pune",
      "description": "CA-managed payroll for hotels and restaurants in Pune. Shift wages, TDS, EPF, ESIC - all handled. Serving Koregaon Park, Viman Nagar, Camp properties. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry/pune",
      "serviceType": "Hospitality Payroll for Hotels & Restaurants Pune",
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
        "url": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry/pune",
        "price": "3500"
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
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Hospitality Payroll for Hotels & Restaurants Pune",
          "item": "https://www.patronaccounting.com/payroll-services-for-the-hospitality-industry/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which office handles EPF for Pune hotels?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EPFO Regional Office Pune handles all EPF filings for Pune hotels and restaurants. Monthly ECR is filed through the unified portal. Patron files ECR and deposits challans by the 15th each month. Multi-property hotels may need separate EPF codes per location."
          }
        },
        {
          "@type": "Question",
          "name": "Can hotel payroll be managed online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Patron handles shift-based salary, overtime, TDS, EPF ESIC, Maharashtra PT, and payslips entirely online. Our Pune office at RTC Silver Wagholi provides in-person consultation for hotel GMs and restaurant owners."
          }
        },
        {
          "@type": "Question",
          "name": "What is the hospitality payroll fee in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hospitality payroll starts from Rs 3,500 per month for up to 50 staff including shift salary, overtime, TDS, EPF ESIC challans, Maharashtra PT, and payslips. Annual compliance with Form 16 included."
          }
        },
        {
          "@type": "Question",
          "name": "How long does payroll setup take for a Pune hotel?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Initial setup takes 5 to 7 working days including staff roster collection, shift configuration, EPF ESIC portal mapping, and Maharashtra PT setup. Monthly processing starts the following month."
          }
        },
        {
          "@type": "Question",
          "name": "Is overtime mandatory at 2x rate for hotel staff?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under the Minimum Wages Act 1948, overtime for hotel and restaurant staff must be paid at double the ordinary rate for work beyond scheduled hours, typically 8 hours per day or 48 hours per week. Paying at 1.5x is non-compliant."
          }
        },
        {
          "@type": "Question",
          "name": "Is ESIC applicable to restaurants in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ESIC applies to any restaurant in Pune with 10 or more employees where individual staff earn below Rs 21,000 per month. Kitchen helpers, stewards, cleaners, and delivery staff typically qualify. If even one employee qualifies, the restaurant must register."
          }
        },
        {
          "@type": "Question",
          "name": "How is service charge handled in payroll?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Service charge collected from customers must be distributed to eligible staff per the establishment policy. The distributed amount is treated as salary income subject to TDS under Section 192. Patron includes service charge in monthly payroll with correct tax treatment."
          }
        },
        {
          "@type": "Question",
          "name": "Does Maharashtra PT apply to hotel employees?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Under Maharashtra PT Act 1975, all salaried employees including hotel and restaurant staff are liable if monthly salary exceeds Rs 7,500. PTRC deducted at slab rates. Hotels with multiple Pune properties need separate PTRC registrations per location. Quick Answers Hotel staff ka overtime kaise calculate hota hai? Overtime 2x ordinary rate pe milta hai for hours beyond 8/day or 48/week. Night shift gets additional allowance as per company policy. Restaurant mein ESIC lagta hai kya? Haan, agar 10+ employees hain aur koi staff Rs 21,000/month se kam kamata hai. Kitchen helpers, cleaners, stewards typically qualify. Service charge payroll mein kaise add hota hai? Service charge jo customers se collect hota hai woh staff ko distribute hota hai, salary income maana jaata hai, TDS lagta hai."
          }
        }
      ]
    }
  ]
}</script>
@endsection

@include('partials.page-css', ['file' => 'css/site.css'])
<style>
/* Amount column - right-align only on tables with .table-amount class */
        .table-amount td:last-child { color: var(--text-secondary); font-size: 14px; font-weight: 500; }
/* ============================================
           EXPERT ATTRIBUTION BOX (E-E-A-T) - Plan 3.1
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
           TOC NAVIGATION - Plan 2.2
           ============================================ */
        .toc-section {
            background: var(--gray-50); border-bottom: 1px solid var(--gray-200);
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot - Plan 3.2 */
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
                        Payroll Services for Hotels and Restaurants in Pune: CA-Led Hospitality Payroll
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> Salary registers, Form 24Q, EPF/ESIC challans, Maharashtra PT returns, tip/service charge records</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Starting from Rs 3,500 per month for up to 50 staff</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> All hotels, restaurants, QSRs, cloud kitchens, resorts, banquet halls, and catering businesses in Pune</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> Payroll setup in 5-7 working days; monthly processing by 28th</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Visit our Pune office or get started online - trusted by 10,000+ businesses across India</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Hotel%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20hotel%20payroll%20services%20in%20Pune.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20hospitality%20payroll%20services%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                            ['value' => 'payroll-services-for-the-hospitality-industry/pune', 'label' => 'Hospitality Payroll in Pune', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services/pune', 'label' => 'Payroll Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services/pune', 'label' => 'Accounting Services in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/pune', 'label' => 'GST Registration in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return/pune', 'label' => 'Income Tax Return in Pune', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit/pune', 'label' => 'Statutory Audit in Pune', 'selected' => false, 'disabled' => false],
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
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron handles shift-based payroll for our 180 hotel staff across three departments flawlessly. Overtime at 2x is now auto-calculated and the Labour Commissioner inspection went smoothly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">GM, Business Hotel, Viman Nagar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Patron's payroll team handles 200+ employees without a single error month on month. Our EPF and ESIC are always filed by the 15th.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Shah</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Head, Hotel Chain, Koregaon Park</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">We had overtime calculation issues for years. Patron fixed our shift payroll, set up correct 2x rates, and now our kitchen staff are fully compliant. No more Labour Commissioner notices.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Restaurant Chain, FC Road</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Seasonal wedding staff onboarding used to be a nightmare. Patron registers PF and ESIC within days for our banquet temporary hires. Full-and-final settlement is also seamless.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#6366F1;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Operations Manager, Banquet Hall, Kalyani Nagar</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div></div>
        <div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-primary);line-height:1.6;flex:1;">Excellent service for company registration and compliance. The team is very responsive and handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From luxury hotels in Koregaon Park to restaurants on FC Road - Pune hospitality businesses trust Patron for accurate, compliant payroll.</p>
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
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#procedure-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">Comparison</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll Services in Pune: Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Hospitality Payroll Services at a Glance</strong></p>
                    <p>Hospitality payroll in Pune covers shift-based salary computation for hotel and restaurant staff, overtime calculation under the Minimum Wages Act 1948, TDS under Section 192, EPF/ESIC contributions, Maharashtra Professional Tax (PTRC/PTEC) under the Maharashtra PT Act 1975, service charge allocation, and compliance with the Maharashtra Shops and Establishments Act 2017. Pune's hospitality sector - with 2,756+ hotels and 7,000+ restaurants - requires specialist payroll handling for multi-shift operations, seasonal staffing, and minimum wage compliance.</p>
                </div>
                <p>Pune's hospitality sector has seen strong occupancy growth through 2025, with major brands including JW Marriott, Conrad, Sheraton Grand, Hyatt, Westin, Novotel, and Crowne Plaza operating in the city. The restaurant scene stretches from FC Road cafes and Koregaon Park fine dining to quick-service chains in Baner and Viman Nagar. Learn more about <a href="/payroll-services-for-the-hospitality-industry">hospitality payroll services across India</a>.</p>
                <div class="table-responsive-wrapper" style="margin-top:20px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Detail</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Acts</td><td>EPF Act 1952, ESIC Act 1948, IT Act S192, Maharashtra PT Act 1975, Shops & Est. Act 2017, Minimum Wages Act 1948</td></tr>
                        <tr><td>Applicable To</td><td>Hotels, restaurants, QSRs, cloud kitchens, resorts, banquet halls, catering companies in Pune</td></tr>
                        <tr><td>Timeline</td><td>Monthly payroll by 28th; EPF/ESIC by 15th; wages by 7th/10th under Payment of Wages Act</td></tr>
                        <tr><td>Cost Starting From</td><td>Rs 3,500/month for up to 50 staff members</td></tr>
                        <tr><td>Key Penalties</td><td>Late EPF: 12% p.a. + damages; TDS default: 1.5%/month; Min wages violation: up to Rs 50,000</td></tr>
                        <tr><td>Key Forms</td><td>Form 24Q, ECR (EPF), ESIC challan, Maharashtra PT Form III-B, Form 16, Muster Registers</td></tr>
                        <tr><td>Jurisdictional Office</td><td>EPFO Regional Office Pune; Labour Commissioner Pune; Maharashtra PT office</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Managing payroll for hospitality businesses in Pune is fundamentally different from office-based payroll. Hotels operate three shifts daily, restaurants have split shifts, kitchen staff work overtime during peak seasons, and support staff often earn below the ESIC threshold. Each variable requires a system tracking actual hours, applying correct 2x overtime rates, ensuring Maharashtra minimum wage compliance for the hotel industry category, and processing statutory deductions accurately. Patron Accounting's Pune office at RTC Silver, Wagholi handles this complete hospitality payroll lifecycle.</p>
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
                <h2 class="section-title">What Is Hospitality Payroll Processing?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Hospitality payroll processing is the systematic computation and disbursement of salaries for hotel, restaurant, and food service staff, covering shift-based wage calculation, overtime computation under the Minimum Wages Act 1948, TDS deduction under Section 192, EPF and ESIC contributions, tip and service charge allocation, and compliance with the Maharashtra Shops and Establishments Act 2017.</p>
                    <p>For Pune's hospitality businesses - from luxury hotels in Koregaon Park and Bund Garden Road to restaurant chains on FC Road and cloud kitchens in Kalyani Nagar - payroll must handle multiple employee categories simultaneously: permanent staff on monthly salaries, contractual workers on daily wages, part-time staff on hourly rates, and seasonal hires during peak wedding and conference seasons.</p>
                    <p>The payroll system must track Maharashtra-specific minimum wages for the hotel industry, which are revised periodically by the Labour Commissioner and differ from general minimum wages. Patron Accounting provides end-to-end <a href="/payroll-services-for-the-hospitality-industry">hospitality payroll services</a> handling Pune's unique workforce requirements in a single monthly cycle.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Hospitality Payroll:</strong></p>
                    <ul>
                        <li><strong>Shift-Based Payroll:</strong> Salary computation across morning, afternoon, and night shifts with automatic overtime at 2x rate.</li>
                        <li><strong>Maharashtra Hotel Minimum Wages:</strong> Separate rates notified by Labour Commissioner specifically for the hotel industry category.</li>
                        <li><strong>Service Charge Allocation:</strong> Distribution of customer service charge to eligible staff, treated as salary income subject to TDS.</li>
                        <li><strong>Maharashtra Shops & Establishments Act 2017:</strong> Registration, working hours, weekly off, overtime, and statutory registers for hospitality.</li>
                        <li><strong>EPF ECR:</strong> Electronic Challan cum Return filed monthly on EPFO Unified Portal for hotel and restaurant staff PF.</li>
                        <li><strong>Form 24Q:</strong> Quarterly TDS return for salary deductions under Section 192 for all hospitality employees.</li>
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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Hospitality Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Hospitality</span>
                        <strong>Pune Hotels</strong>
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
            <h2 class="section-title">Who Needs Hospitality Payroll Services in Pune?</h2>
            <div class="content-text">
                
                <p><strong>Luxury and Business Hotels (Koregaon Park, Viman Nagar, Bund Garden Road):</strong> Properties like Sheraton Grand, Conrad, Hyatt, and Westin employ 150-500 staff across front office, housekeeping, F&B, kitchen, engineering, and security. Each department operates different shift patterns with different overtime rules. EPF, ESIC, and Maharashtra PT mandatory.</p>
                <p><strong>Standalone Restaurants and Cafe Chains (FC Road, Camp, Baner):</strong> 10-50 staff per location registered under Maharashtra Shops and Establishments Act 2017. Minimum wages, overtime at 2x rate, weekly off compliance, and <a href="#">Maharashtra Professional Tax</a> required.</p>
                <p><strong>Cloud Kitchens (Hinjewadi, Wakad, Kharadi):</strong> Delivery-only operations serving the IT corridor with lean staff but full statutory compliance requirements. <a href="/shop-act-registration">Shop Act registration</a> mandatory.</p>
                <p><strong>Banquet Halls and Catering Companies:</strong> Active during October-February wedding season, hiring seasonal staff needing rapid PF/ESIC onboarding and full-and-final settlement processing.</p>
                <p><strong>QSR Franchise Outlets (Baner, Viman Nagar, Kothrud):</strong> EPF/ESIC for 20+ staff, Maharashtra PT, standard shift payroll, plus franchise corporate reporting formats.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Shift-Based Salary Computation</td><td>Daily, weekly, and monthly salary across morning, afternoon, and night shifts with automatic overtime at 2x rate under Minimum Wages Act 1948</td></tr>
                        <tr><td>TDS Calculation and Filing</td><td>Section 192 TDS on all salaried staff including management, chefs, and senior F&B; quarterly Form 24Q and annual Form 16</td></tr>
                        <tr><td>EPF Compliance</td><td>Monthly ECR and challan for all eligible hotel and restaurant staff (20+ employees) filed with EPFO Regional Office Pune</td></tr>
                        <tr><td>ESIC Administration</td><td>Contributions for housekeeping, kitchen helpers, stewards, and security earning below Rs 21,000/month; new employee ESIC registration</td></tr>
                        <tr><td>Maharashtra Professional Tax</td><td>Monthly PTRC deduction per Maharashtra PT Act 1975 slabs for every hotel and restaurant employee</td></tr>
                        <tr><td>Minimum Wage Compliance</td><td>Verification against Maharashtra minimum wages for hotel industry category per Labour Commissioner notifications</td></tr>
                        <tr><td>Overtime and Holiday Pay</td><td>Overtime at 2x rate, national holiday pay, weekly off compensation - tracked per actual hours for shift-based staff</td></tr>
                        <tr><td>Service Charge and Tip Allocation</td><td>Service charge distribution to eligible staff per establishment policy with correct tax treatment in payroll</td></tr>
                        <tr><td>Seasonal Staff Onboarding</td><td>Rapid PF/ESIC registration, wage computation, and full-and-final settlement for temporary hires during peak seasons</td></tr>
                        <tr><td>Statutory Register Maintenance</td><td>Muster roll, wage register, overtime register, leave register, and Form A per Maharashtra Shops and Establishments Act 2017</td></tr>

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
            <h2 class="section-title">How Hospitality Payroll Works in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Our 6-step process covers the complete hospitality payroll lifecycle - from staff categorisation and shift configuration through attendance integration, salary computation, statutory filing, payslip distribution, and annual compliance.</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Map Staff Categories and Configure Shift Structures</h3>
        <p class="step-description">Patron collects the complete staff roster, categorising into management (GM, dept heads), permanent operational (chefs, front office, housekeeping supervisors), daily/hourly workers (kitchen helpers, stewards, porters), and seasonal staff. Shift structures configured - 8-hour rotational for hotels, split shifts for restaurants - mapped to Maharashtra minimum wage for hotel industry per Labour Commissioner Pune.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Staff categorised</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3-shift rotation configured</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Maharashtra min wages mapped</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="62" y="22" width="30" height="12" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="0.8"/><rect x="28" y="40" width="30" height="12" rx="3" fill="#F0F4F8" stroke="#14365F" stroke-width="0.8"/><text x="43" y="31" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Kitchen</text><text x="77" y="31" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">F&amp;B</text><text x="43" y="49" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">H/K</text></svg></div>
            <span class="illustration-label">Staff Mapped</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Integrate Attendance, Shift, and Overtime Data</h3>
        <p class="step-description">Process daily attendance from biometric or POS-integrated systems, calculating actual hours per shift. Night shift allowance and overtime beyond 8 hours/day computed at 2x ordinary rate under Minimum Wages Act 1948. Restaurants under Maharashtra Shops and Establishments Act 2017 get weekly off compliance and overtime tracking from Day 1.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Attendance integrated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Overtime at 2x auto-calculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Night shift allowance applied</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SHIFTS</text><line x1="30" y1="35" x2="90" y2="35" stroke="#F5A623" stroke-width="1.5"/><text x="40" y="48" font-size="6" fill="#10B981" font-weight="600" text-anchor="start" font-family="Arial">AM</text><text x="55" y="48" font-size="6" fill="#F5A623" font-weight="600" text-anchor="start" font-family="Arial">PM</text><text x="68" y="48" font-size="6" fill="#E8712C" font-weight="600" text-anchor="start" font-family="Arial">Night</text><text x="40" y="60" font-size="7" fill="#14365F" font-weight="700" text-anchor="start" font-family="Arial">OT: 2x</text></svg></div>
            <span class="illustration-label">Shifts Tracked</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Compute Gross-to-Net Salary with All Deductions</h3>
        <p class="step-description">For each employee: gross wages (basic + DA + HRA + shift allowance + overtime + service charge share), minus TDS Section 192, EPF 12%+12%, ESIC 3.25%+0.75% for eligible staff, Maharashtra PT per slabs, and advance recoveries. Multi-location hotels (e.g. Koregaon Park + Hinjewadi) get separate PTRC and EPF code management per property.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Gross-to-net computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Multi-location PT/EPF managed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Service charge included</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="28" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">NET PAY</text><line x1="35" y1="38" x2="85" y2="38" stroke="#F5A623" stroke-width="1.5"/><text x="42" y="52" font-size="6" fill="#10B981" font-weight="600" text-anchor="middle" font-family="Arial">EPF</text><text x="55" y="52" font-size="6" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">ESIC</text><text x="68" y="52" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial">TDS</text><text x="80" y="52" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PT</text></svg></div>
            <span class="illustration-label">Salary Computed</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Generate Challans and File Returns</h3>
        <p class="step-description">EPF ECR via EPFO Unified Portal by 15th, ESIC by 15th, Maharashtra PT per quarterly schedule, TDS quarterly Form 24Q. Statutory registers (Form A, muster roll, wage register) maintained for Labour Inspector inspections - a compliance area where most Pune restaurants fail.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>EPF/ESIC by 15th</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 24Q filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Statutory registers maintained</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M53 35l4 4 10-10" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="60" y="62" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Filed</text></svg></div>
            <span class="illustration-label">Returns Filed</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Distribute Payslips and Handle Staff Queries</h3>
        <p class="step-description">Digital payslips generated for every staff member - from the General Manager to the kitchen helper. Payslips detail basic pay, shift allowance, overtime, service charge share, all statutory deductions, and net pay. Staff queries on TDS, PF balance, and ESIC benefits handled by Patron's Pune team.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital payslips issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Shift/overtime breakdown shown</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Staff queries handled</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="45" rx="3" fill="#fff" stroke="#14365F" stroke-width="0.8"/><line x1="40" y1="30" x2="80" y2="30" stroke="#F5A623" stroke-width="1.5"/><line x1="40" y1="38" x2="70" y2="38" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="40" y1="44" x2="72" y2="44" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="40" y1="50" x2="65" y2="50" stroke="#10B981" stroke-width="1.5"/><text x="60" y="70" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Payslip</text></svg></div>
            <span class="illustration-label">Payslips Distributed</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Annual Compliance and Audit Support</h3>
        <p class="step-description">Form 16 for all staff, final quarter Form 24Q, EPF annual return, Maharashtra PT annual return Form III-B, minimum wage compliance certificate for Labour Inspector inspections, and salary schedules for the hotel's statutory auditor. For national chain hotels, data prepared in corporate finance reporting format.</p>
        <div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form 16 for all staff</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Min wage certificate ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Audit data prepared</span></div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="5" width="70" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="18" width="50" height="22" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><rect x="35" y="46" width="50" height="22" rx="3" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="60" y="32" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Form 16</text><text x="60" y="60" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Audit Ready</text></svg></div>
            <span class="illustration-label">Year Closed</span>
            <span class="step-number-large">06</span>
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
            <h2 class="section-title">Documents Required for Hospitality Payroll in Pune</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Staff Appointment Letters:</strong> Offer letters with salary breakup for each employee category.</li>
                    <li><strong>PAN and Aadhaar:</strong> Mandatory for TDS and EPF KYC for all staff.</li>
                    <li><strong>EPF and ESIC Registration:</strong> Certificates (or staff count for new registration).</li>
                    <li><strong>Maharashtra PTRC and PTEC:</strong> Registration certificates from GRAS portal.</li>
                    <li><strong>Shops and Establishments Registration:</strong> <a href="/shop-act-registration">Maharashtra Shops Act registration</a> for office and facilities.</li>
                    <li><strong>Shift Roster and Attendance:</strong> Biometric or POS-based time system data.</li>
                    <li><strong>Previous Year Salary Register:</strong> And Form 16 for mid-year takeover.</li>
                    <li><strong>Service Charge Policy:</strong> Document if service charge is distributed to staff.</li>
                </ul>
                <div class="highlight-box" style="margin-top:16px;">
                    <p><strong>Pune-Specific Tip:</strong> If your hotel or restaurant is registered under the Maharashtra Shops and Establishments Act 2017, keep Form A (register of employees) updated at all times. Labour Inspector visits to Koregaon Park hotels and FC Road restaurants have increased since 2024 - an outdated register attracts penalties under Section 36.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Hospitality Payroll Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Overtime Miscalculation</td><td>Hotels calculate at 1.5x instead of mandatory 2x; Labour Commissioner inspections catch this</td><td>Automatic 2x overtime computation per Minimum Wages Act 1948 from shift attendance data</td></tr>
                        <tr><td>Minimum Wage Non-Compliance</td><td>Independent hotels unaware of Maharashtra hotel industry category rates; fines up to Rs 50,000</td><td>Maharashtra hotel minimum wages tracked per Labour Commissioner notifications and applied automatically</td></tr>
                        <tr><td>ESIC Registration Failures</td><td>Support staff below Rs 21,000 not registered; inspection penalties and denied employee claims</td><td>All qualifying staff identified and registered; ESIC contributions filed by 15th monthly</td></tr>
                        <tr><td>Service Charge Confusion</td><td>Restaurants retaining service charge or incorrect tax treatment in payroll</td><td>Service charge distributed to staff per policy with correct TDS treatment in monthly payroll</td></tr>
                        <tr><td>Multi-Location PT/EPF Codes</td><td>Consolidated processing causes challan mismatches taking months to resolve with EPFO Pune</td><td>Separate PTRC and EPF codes per property managed automatically in payroll system</td></tr>

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
            <h2 class="section-title">Hospitality Payroll Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Payroll Processing (up to 50 staff)</td><td>Rs 3,500 - Rs 8,000/month</td></tr>
                        <tr><td>Monthly Payroll (50-150 staff)</td><td>Rs 8,000 - Rs 15,000/month</td></tr>
                        <tr><td>Monthly Payroll (150-300 staff)</td><td>Rs 15,000 - Rs 20,000/month</td></tr>
                        <tr><td>EPF & ESIC Registration (One-time)</td><td>Rs 5,000 - Rs 10,000</td></tr>
                        <tr><td>Annual Compliance Package</td><td>Rs 10,000 - Rs 25,000</td></tr>
                        <tr><td>Seasonal Staff Processing (per event)</td><td>Rs 1,500 - Rs 3,000</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Hospitality Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20hotel%20payroll%20in%20Pune.%20Please%20share%20details%20and%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Hospitality Payroll Timeline for Pune Hotels</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial Setup</td><td>5-7 working days</td></tr>
                        <tr><td>Monthly Processing</td><td>By 28th of each month</td></tr>
                        <tr><td>EPF/ESIC Challan</td><td>By 15th of following month</td></tr>
                        <tr><td>Quarterly TDS (Form 24Q)</td><td>By 31st Jan/Jul/Oct, 31st May</td></tr>
                        <tr><td>Annual Form 16</td><td>By 15th June</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>City Processing Note:</strong> No visit to EPFO Pune or Labour Commissioner office required. Patron's Pune office at RTC Silver, Wagholi handles all filings digitally. Walk-in consultations available for hotel GMs and restaurant owners across Koregaon Park, Viman Nagar, FC Road, Camp, Baner, and Hinjewadi.</p>

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
            <h2 class="section-title">Why Choose Patron for Hospitality Payroll in Pune</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3>Pune Office Presence</h3><p>RTC Silver, Wagholi - serves hotels and restaurants across Koregaon Park, Viman Nagar, Bund Garden, FC Road, Baner, Camp, Hinjewadi. Walk-in available.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div><h3>Shift-Based Expertise</h3><p>3-shift rotation, split shifts, night allowance, 2x overtime, service charge allocation - all configured for hospitality from Day 1.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div><h3>Integrated Accounting</h3><p>Hospitality payroll alongside <a href="/hospitality-sector-accounting-services">hospitality accounting</a> - salary data, food costs, and statutory deductions reconciled in one workflow.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>10,000+ Businesses Served</h3><p>15+ years experience, 50,000+ documents filed, 4.9 Google rating. Hospitality payroll from Rs 3,500/month with CA supervision.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves hospitality businesses across India with local expertise in Maharashtra compliance. Trusted by Hyundai, Asian Paints, Bridgestone, and growing hospitality businesses.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House vs Outsourced Hospitality Payroll in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>Outsourced to Patron</th><th>In-House (Accountant/HR)</th></tr></thead>
                    <tbody>
                        <tr><td>Overtime Accuracy</td><td>Automated 2x rate per Minimum Wages Act with shift data</td><td>Manual; 2x vs 1.5x confusion common</td></tr>
                        <tr><td>EPF/ESIC Filing</td><td>Filed by 15th every month via EPFO Pune</td><td>Delayed; admin lacks portal expertise</td></tr>
                        <tr><td>Maharashtra PT</td><td>Correct slab per employee per Maharashtra PT Act 1975</td><td>Slab errors; support staff often missed</td></tr>
                        <tr><td>Seasonal Staff</td><td>Rapid onboarding with full statutory compliance</td><td>Ad-hoc; PF/ESIC registration delayed</td></tr>
                        <tr><td>Annual Cost</td><td>Rs 42,000-2,40,000/year with zero penalty exposure</td><td>Rs 4-6 lakh (staff + software + penalty risk)</td></tr>
                        <tr><td>Labour Inspector Ready</td><td>Statutory registers maintained as standard</td><td>Registers not maintained; exposure during inspections</td></tr>

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
            <h2 class="section-title">Related Services for Pune Hospitality Businesses</h2>
            <div class="content-text">
                
                <p>Hospitality businesses in Pune often need complementary services:</p>
                <ul>
                    <li><a href="/payroll-services-for-the-hospitality-industry">Hospitality Payroll (India)</a> - National overview of hospitality payroll services.</li>
                    <li><a href="/hospitality-sector-accounting-services">Hospitality Sector Accounting</a> - Full accounting for hotels and restaurants.</li>
                    <li><a href="/payroll-services">Payroll Services</a> - General payroll for all business types.</li>
                    <li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Quarterly Form 24Q and annual returns.</li>
                    <li><a href="#">Professional Tax Registration</a> - Maharashtra PTRC/PTEC.</li>
                    <li><a href="/shop-act-registration">Shop Act Registration</a> - Maharashtra Shops and Establishments Act.</li>
                    <li><a href="/esic-calculation-and-compliance-services">ESIC Compliance</a> - ESI calculation and filing.</li>
                    <li><a href="/fssai-registration">FSSAI Registration</a> - Food safety licence for restaurants.</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Hospitality Payroll in Pune</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p>
                <ul>
                    <li><strong>EPF Act 1952:</strong> 12% employer + 12% employee for establishments with 20+ staff. ECR by 15th.</li>
                    <li><strong>ESIC Act 1948:</strong> 3.25% employer + 0.75% employee for staff earning below Rs 21,000/month.</li>
                    <li><strong>Income Tax Act 1961:</strong> Section 192 TDS on salary; Form 24Q quarterly filing.</li>
                    <li><strong>Maharashtra PT Act 1975:</strong> PTRC/PTEC slab-based deduction on all staff. Due 15th per Feb 2026 notification.</li>
                    <li><strong>Maharashtra Shops & Establishments Act 2017:</strong> Registration, working hours, weekly off, overtime, statutory registers.</li>
                    <li><strong>Minimum Wages Act 1948:</strong> Maharashtra minimum wages for hotel industry category; overtime at 2x ordinary rate.</li>
                    <li><strong>Payment of Wages Act 1936:</strong> Salary by 7th/10th of following month.</li>
                    <li><strong>Payment of Gratuity Act 1972:</strong> Gratuity for staff with 5+ years continuous service.</li>
                </ul>
                <p style="margin-top:16px;"><strong>Key Penalties:</strong></p>
                <ul>
                    <li>Late EPF: <strong>12% p.a. interest + damages up to 100%</strong> under Section 14B</li>
                    <li>Minimum wages violation: Fine up to <strong>Rs 50,000</strong> + back-wage order from Labour Commissioner Pune</li>
                    <li>TDS non-deduction: <strong>1.5%/month interest</strong> under Section 201(1A)</li>
                    <li>Maharashtra Shops Act violation: Fine up to <strong>Rs 50,000</strong> under Section 36; closure order for repeat violations</li>
                    <li>Late Maharashtra PT: <strong>1.25%/month + 10% penalty</strong></li>
                </ul>
                <p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://unifiedportal-emp.epfindia.gov.in" target="_blank" rel="noopener">EPFO Unified Portal</a> | <a href="https://mahakamgar.maharashtra.gov.in" target="_blank" rel="noopener">Maharashtra Labour Department</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions: Hospitality Payroll in Pune</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about hotel payroll, restaurant staff wages, overtime, EPF, ESIC, and Maharashtra compliance for Pune hospitality businesses.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Pune', 'enquiryService' => 'Hospitality Payroll in Pune'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which office handles EPF for Pune hotels?</h3>
                        <div class="faq-expanded__a"><p>EPFO Regional Office Pune handles all EPF filings for Pune hotels and restaurants. Monthly ECR is filed through the unified portal. Patron files ECR and deposits challans by the 15th each month. Multi-property hotels may need separate EPF codes per location.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can hotel payroll be managed online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. Patron handles shift-based salary, overtime, TDS, EPF ESIC, Maharashtra PT, and payslips entirely online. Our Pune office at RTC Silver Wagholi provides in-person consultation for hotel GMs and restaurant owners.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the hospitality payroll fee in Pune?</h3>
                        <div class="faq-expanded__a"><p>Hospitality payroll starts from Rs 3,500 per month for up to 50 staff including shift salary, overtime, TDS, EPF ESIC challans, Maharashtra PT, and payslips. Annual compliance with Form 16 included.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does payroll setup take for a Pune hotel?</h3>
                        <div class="faq-expanded__a"><p>Initial setup takes 5 to 7 working days including staff roster collection, shift configuration, EPF ESIC portal mapping, and Maharashtra PT setup. Monthly processing starts the following month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is overtime mandatory at 2x rate for hotel staff?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the Minimum Wages Act 1948, overtime for hotel and restaurant staff must be paid at double the ordinary rate for work beyond scheduled hours, typically 8 hours per day or 48 hours per week. Paying at 1.5x is non-compliant.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is ESIC applicable to restaurants in Pune?</h3>
                        <div class="faq-expanded__a"><p>ESIC applies to any restaurant in Pune with 10 or more employees where individual staff earn below Rs 21,000 per month. Kitchen helpers, stewards, cleaners, and delivery staff typically qualify. If even one employee qualifies, the restaurant must register.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How is service charge handled in payroll?</h3>
                        <div class="faq-expanded__a"><p>Service charge collected from customers must be distributed to eligible staff per the establishment policy. The distributed amount is treated as salary income subject to TDS under Section 192. Patron includes service charge in monthly payroll with correct tax treatment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Does Maharashtra PT apply to hotel employees?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Maharashtra PT Act 1975, all salaried employees including hotel and restaurant staff are liable if monthly salary exceeds Rs 7,500. PTRC deducted at slab rates. Hotels with multiple Pune properties need separate PTRC registrations per location.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Hotel staff ka overtime kaise calculate hota hai?</strong> Overtime 2x ordinary rate pe milta hai for hours beyond 8/day or 48/week. Night shift gets additional allowance as per company policy.</p>
                <p><strong>Restaurant mein ESIC lagta hai kya?</strong> Haan, agar 10+ employees hain aur koi staff Rs 21,000/month se kam kamata hai. Kitchen helpers, cleaners, stewards typically qualify.</p>
                <p><strong>Service charge payroll mein kaise add hota hai?</strong> Service charge jo customers se collect hota hai woh staff ko distribute hota hai, salary income maana jaata hai, TDS lagta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Labour Inspector Visits Are Increasing - Get Compliant Now</h2>
            <div class="content-text">
                
                <p>Late EPF costs 12% p.a. interest plus damages up to 100% of arrears. Overtime at 1.5x instead of 2x attracts back-wage orders from Labour Commissioner Pune. Minimum wage non-compliance for the hotel industry category carries fines up to Rs 50,000. Maharashtra Shops Act violations can result in closure orders. If your Pune hotel or restaurant is processing payroll manually, get a compliance audit before the next inspection.</p>
                <p style="margin-top:16px;"><strong>Get started with hospitality payroll - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20hospitality%20payroll%20in%20Pune.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Started with Hospitality Payroll in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Payroll services for hotels and restaurants in Pune require specialist handling for shift-based wages, overtime at 2x rate, Maharashtra minimum wages for the hotel industry, EPF/ESIC for mixed staff categories, service charge allocation, and Maharashtra Shops and Establishments Act compliance.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's Pune office serves the city's hospitality sector - from luxury hotels in Koregaon Park and Bund Garden Road to restaurant chains on FC Road, QSR outlets in Baner, and cloud kitchens in Hinjewadi - with integrated payroll processing and statutory compliance.</p>
                <p style="color:rgba(255,255,255,0.9);">With 15+ years of experience, 10,000+ businesses served, and a 4.9 Google rating, Patron delivers hospitality payroll that is accurate, on-time, and fully compliant.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20hotel%20payroll%20in%20Pune.%20Please%20share%20details%20and%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Hospitality%20Payroll%20in%20Pune&body=Hello%20Patron%2C%0A%0AI%20need%20hospitality%20payroll%20services%20in%20Pune.%0A%0APlease%20share%20details.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
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
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides hospitality payroll and compliance services in major cities across India.</p>
            <div class="pa-city-block" style="margin-bottom:40px;">
                <div class="pa-block-title">Available Cities</div>
                <div class="pa-block-sub">Hospitality payroll services</div>
                <div class="pa-city-grid">
                    <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
                    <a href="/payroll-hospitality/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/payroll-services-for-the-hospitality-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
                    <a href="/payroll-services-for-the-hospitality-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <div class="pa-block-title">Related Services in Pune</div>
                <div class="pa-block-sub">End-to-end hospitality compliance</div>
                <div class="pa-cross-grid">
                    <a href="/payroll-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/accounting-services/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/income-tax-return/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/statutory-audit/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">Pune</div></div></a>
                    <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">Pune</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 18 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">18 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 18 March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers payroll services for the hospitality industry in Pune. Content reviewed bi-annually (Freshness Tier 2) reflecting Maharashtra minimum wage revisions, EPF rate changes, Shops and Establishments Act amendments, and ESIC threshold updates.</p>
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
    // CONFIGURATION - Update these values
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
            console.log('[Testimonials] No Google API key set - using fallback reviews.');
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
            console.log('[Testimonials] Failed to load Google Maps API - using fallback.');
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
                    console.log('[Testimonials] Google Places returned no reviews - using fallback.');
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
        // Static cards already rendered - init Slick immediately
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

<script>
// BF-1: Set last updated date dynamically
(function() {
    var opts = { day: 'numeric', month: 'long', year: 'numeric' };
    var dateStr = new Date().toLocaleDateString('en-IN', opts);
    var el1 = document.getElementById('lastUpdated');

    if (el1) el1.textContent = dateStr;
    var el2 = document.getElementById('lastUpdatedFooter');
    if (el2) el2.textContent = dateStr;
})();
</script>

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
