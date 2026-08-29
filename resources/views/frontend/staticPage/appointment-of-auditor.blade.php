

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
    <title>Appointment of Auditor - Section 139, ADT-1 & ROC Filing</title>
    <meta name="description" content="Appoint your statutory auditor under Section 139 of Companies Act 2013. Board appoints within 30 days. ADT-1 filing included. Starting at INR 1,999.">
    <link rel="canonical" href="/appointment-of-auditor">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Appointment of Auditor - Section 139, ADT-1 & ROC Filing">
    <meta property="og:description" content="Appoint your statutory auditor under Section 139 of Companies Act 2013. Board appoints within 30 days. ADT-1 filing included. Starting at INR 1,999.">
    <meta property="og:url" content="/appointment-of-auditor">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Appointment of Auditor - Section 139, ADT-1 & ROC Filing">
    <meta name="twitter:description" content="Appoint your statutory auditor under Section 139 of Companies Act 2013. Board appoints within 30 days. ADT-1 filing included. Starting at INR 1,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Appointment of Auditor in India Guide",
          "description": "Appoint your statutory auditor under Section 139 of Companies Act 2013. Board appoints within 30 days. ADT-1 filing included. Starting at INR 1,999.",
          "url": "https://www.patronaccounting.com/appointment-of-auditor",
          "serviceType": "Appointment of Auditor in India Guide",
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
            "url": "https://www.patronaccounting.com/appointment-of-auditor",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "25000",
              "maxPrice": "500000",
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
              "name": "Appointment of Auditor in India Guide",
              "item": "https://www.patronaccounting.com/appointment-of-auditor"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Who appoints the first auditor of a private limited company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The Board of Directors appoints the first auditor within 30 days of incorporation under Section 139(6) of the Companies Act, 2013. If the Board fails to appoint within 30 days, the shareholders must appoint the auditor at an Extraordinary General Meeting within 90 days of incorporation."
              }
            },
            {
              "@type": "Question",
              "name": "What is Form ADT-1 and when must it be filed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form ADT-1 is the mandatory intimation filed with the Registrar of Companies (ROC) to officially notify the appointment of a statutory auditor under Section 139(1). It must be filed within 15 days of the AGM or Board Meeting at which the auditor was appointed. Per MCA Amendment Rules 2025, it is now mandatory for first auditor appointments as well."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not appointing an auditor?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 147 of the Companies Act, 2013, failure to appoint an auditor attracts a company fine of INR 25,000 to INR 5,00,000. Every officer in default faces imprisonment of up to 1 year plus a fine of INR 10,000 to INR 1,00,000. Late ADT-1 filing attracts an additional fee of INR 200 per day."
              }
            },
            {
              "@type": "Question",
              "name": "What is auditor rotation and does it apply to small companies?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Auditor rotation under Section 139(2) is mandatory for listed companies and specified classes of public companies. Individual auditors must rotate after 5 consecutive years; audit firms after 10 years (two terms of 5 years). Private limited companies and OPCs are currently exempt from mandatory rotation."
              }
            },
            {
              "@type": "Question",
              "name": "Can a company remove its auditor before the term expires?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, under Section 140(1) of the Companies Act, 2013, an auditor can be removed before expiry of term only by a special resolution of the shareholders and with prior approval of the Central Government by filing Form ADT-2. The auditor must be given a reasonable opportunity to be heard."
              }
            },
            {
              "@type": "Question",
              "name": "Is Form ADT-1 required for the first auditor appointment?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, as per the Companies (Audit and Auditors) Amendment Rules 2025, Form ADT-1 is now mandatory for first auditor appointments for all companies incorporated on or after July 14, 2025. Previously this was considered optional for first appointment under Section 139(6), but MCA has now clarified that filing is required."
              }
            },
            {
              "@type": "Question",
              "name": "Auditor appointment ke liye kya documents chahiye?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Board/AGM Resolution copy, auditor ki written consent letter, eligibility certificate under Section 141 confirming no disqualification, DSC of authorised director, aur company details (CIN, PAN, registered office address) chahiye Form ADT-1 filing ke liye ROC ke saath."
              }
            },
            {
              "@type": "Question",
              "name": "What is casual vacancy and how is it filled?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A casual vacancy arises when an auditor vacates office mid-term due to resignation, disqualification, death, or removal. Under Section 139(8) of the Companies Act, 2013, the Board of Directors must fill the vacancy within 30 days. If the vacancy arose due to resignation, shareholder approval at a general meeting within 3 months of Board appointment is also required. Quick Answers Time limit for first auditor: 30 days from incorporation (Board) / 90 days (Members at EGM) - Section 139(6). ADT-1 filing deadline: Within 15 days of AGM or Board Meeting - Section 139(1). Audit limit per auditor: Maximum 20 companies per individual CA or per partner - Section 141(3)(g). Rotation cooling-off: 5 years from completion of term before same auditor/firm can be reappointed - Rule 6."
              }
            }
          ]
        }
      ]
    }
    </script>
@endsection

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/pages-2.css') }}?v=1">
@endpush
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
                        Appointment of Auditor in India: Section 139 Compliance
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">20 April 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Governed by Section 139 and 141, Companies Act 2013</strong>:</span> Every company incorporated in India must appoint a statutory auditor. Failure attracts penalties of INR 25,000 to INR 5,00,000 under Section 147.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>First Auditor: Within 30 Days of Incorporation</strong>:</span> Board of Directors appoints the first auditor within 30 days under Section 139(6). If Board fails, shareholders appoint at EGM within 90 days.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Subsequent Auditors: 5-Year Terms at AGM</strong>:</span> Appointed at the first AGM for a 5-year term under Section 139(1). Mandatory rotation applies to listed and specified companies.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Form ADT-1 Filing: Within 15 Days</strong>:</span> Form ADT-1 filed with ROC within 15 days of appointment. Now mandatory for first auditor appointments from July 14, 2025 per MCA Amendment Rules.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 200+ Auditor Appointments Annually | Zero-Penalty Track Record | 4.9/5 Rating (350+ Reviews) | Mumbai, Delhi, Pune, Bangalore</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Auditor%20Appointment%20Enquiry&body=Hello%2C%0AI%20need%20auditor%20appointment%20services.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20appoint%20a%20statutory%20auditor%20for%20my%20company.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Appointment of Auditor',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'appointment-of-auditor', 'label' => 'Appointment of Auditor', 'selected' => true, 'disabled' => false],
                            ['value' => 'change-of-auditor', 'label' => 'Change of Auditor', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-compliance', 'label' => 'Pvt Ltd Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'statutory-audit', 'label' => 'Statutory Audit', 'selected' => false, 'disabled' => false],
                            ['value' => 'appointment-of-director', 'label' => 'Appointment of Director', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our first auditor appointment and ADT-1 filing within 2 days of incorporation. Zero errors, zero stress. The entire process was completely hands-off for us.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Tech Startup, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Rotation compliance for our listed company managed seamlessly. Patron initiated the process 90 days before our auditor's term ended. No gap in compliance at all.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CS</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Listed Company, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Casual vacancy after our auditor resigned. Patron had the new auditor appointed and ADT-1 filed within 10 days. Impressive turnaround during a stressful time.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a newly incorporated OPC, I had no idea about the 30-day deadline. Patron flagged it during incorporation itself and had everything done on Day 1.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Founder</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">OPC, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">200+ companies in our group needed auditor appointments aligned. Patron managed the entire batch - all ADT-1 forms filed on time. Incredible coordination.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Group CFO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Conglomerate, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Appoint your auditor with zero penalties. Starting at INR 1,999. ADT-1 filing included. 3-5 working days turnaround.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">7-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">DIY vs CS</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Appointment of Auditor in India - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Appointment of Auditor Services at a Glance</strong></p>
                    <p>Every company incorporated in India must appoint a statutory auditor within 30 days of registration under Section 139 of the Companies Act, 2013. Form ADT-1 must be filed with ROC within 15 days. Failure attracts penalties of INR 25,000 to INR 5,00,000 on the company plus personal liability for officers. Patron Accounting starting at INR 1,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>Appointing a statutory auditor is one of the very first compliance requirements for any company under the Companies Act, 2013. Without a valid auditor appointment, a company cannot complete its annual filing cycle, risking strike-off and personal penalties for directors.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Key Fact</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>Section 139, 140, 141 - Companies Act, 2013</td></tr>
                        <tr><td><strong>Applicable To</strong></td><td>All companies - Private, Public, OPC, Government</td></tr>
                        <tr><td><strong>First Auditor Deadline</strong></td><td>Within 30 days of incorporation (Board) / 90 days (Members at EGM if Board fails)</td></tr>
                        <tr><td><strong>Subsequent Appointment</strong></td><td>At first AGM, for 5 consecutive years</td></tr>
                        <tr><td><strong>Form to File</strong></td><td>Form ADT-1 with ROC within 15 days of appointment</td></tr>
                        <tr><td><strong>Penalty - Company</strong></td><td>INR 25,000 to INR 5,00,000 under Section 147(1)</td></tr>
                        <tr><td><strong>Penalty - Officers</strong></td><td>Imprisonment up to 1 year + fine INR 10,000 to INR 1,00,000</td></tr>
                        <tr><td><strong>Authority</strong></td><td>MCA / ROC for filings; CAG for Government Companies</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Auditor appointment ke liye kya documents chahiye? Board/AGM Resolution copy, auditor ki written consent letter, eligibility certificate under Section 141, DSC of authorised director, aur company details (CIN, PAN) chahiye Form ADT-1 filing ke liye. Patron Accounting poora process manage karta hai.</p>
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
                <h2 class="section-title">What is Appointment of Auditor?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Appointment of Auditor</strong> is the formal process by which a company designates a qualified Chartered Accountant (CA) or CA firm to independently examine and certify its financial statements, as mandated under Section 139 of the Companies Act, 2013.</p>
                    <p>Unlike the <a href="/change-of-auditor">change of auditor</a> process (which involves rotation, resignation, or removal), the appointment process covers the initial and subsequent designation of the statutory auditor. The MCA Amendment Rules 2025 have made ADT-1 filing mandatory even for first auditor appointments from July 14, 2025.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Appointment of Auditor:</strong></p>
                    <p><strong>Statutory Auditor:</strong> A CA or CA firm appointed under Section 139 to audit annual accounts of a company.</p>
                    <p><strong>First Auditor:</strong> Appointed within 30 days of incorporation by the Board of Directors under Section 139(6).</p>
                    <p><strong>Subsequent Auditor:</strong> Appointed at the company's first AGM for a 5-year term under Section 139(1).</p>
                    <p><strong>Form ADT-1:</strong> Mandatory intimation filed with ROC within 15 days of auditor appointment. Now mandatory for first auditor from July 2025.</p>
                    <p><strong>Casual Vacancy:</strong> Mid-term vacancy due to resignation, disqualification, death, or removal - Board fills within 30 days (Section 139(8)).</p>
                    <p><strong>Audit Limit (Section 141(3)(g)):</strong> No individual CA or partner of a firm can audit more than 20 companies at any given time.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Auditor appointment -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SECTION 139 COMPLIANCE</text>
                            <text x="100" y="52" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">APPOINT WITHIN 30 DAYS</text>
                            <line x1="45" y1="58" x2="155" y2="58" stroke="#14365F" stroke-width="1" opacity="0.3"/>
                            <rect x="40" y="65" width="50" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="65" y="77" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CONSENT</text>
                            <rect x="95" y="65" width="60" height="18" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <text x="125" y="77" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ELIGIBLE S.141</text>
                            <rect x="55" y="92" width="90" height="16" rx="4" fill="#14365F"/>
                            <text x="100" y="103" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ADT-1 WITHIN 15 DAYS</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">Day-One Compliance</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 139</span>
                        <strong>Auditor Appointment</strong>
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
            <h2 class="section-title">Who Needs to Appoint a Statutory Auditor?</h2>
            <div class="content-text">
                
                <p><strong>Every company incorporated under the Companies Act, 2013</strong> must appoint a statutory auditor without exception:</p>
                <ul>
                    <li><strong>Private Limited Companies (Pvt Ltd)</strong></li>
                    <li><strong>Public Limited Companies</strong></li>
                    <li><strong>One Person Companies (OPC)</strong></li>
                    <li><strong>Nidhi Companies and Section 8 (Non-Profit) Companies</strong></li>
                    <li><strong>Government Companies</strong> - auditor appointed by Comptroller and Auditor General (C&AG)</li>
                </ul>
                <p style="margin-top:16px;"><strong>Auditor Rotation (Section 139(2)):</strong> Mandatory for listed companies and specified classes. Individual CA: max 1 term (5 years). CA firm/LLP: max 2 terms (10 years). Cooling-off: 5 years. OPCs and small companies are exempt.</p>
                <p style="margin-top:12px;"><strong>Audit Limit:</strong> No individual CA or partner can audit more than 20 companies at any given time under Section 141(3)(g).</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting Deliverables for Auditor Appointment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Eligibility Assessment</strong></td><td>Verify auditor's Section 141 qualifications and disqualification checks including 20-company audit limit</td></tr>
                        <tr><td><strong>Consent Letter and Eligibility Certificate</strong></td><td>Drafting auditor consent letter and obtaining eligibility certificate under Section 141</td></tr>
                        <tr><td><strong>Board/AGM Resolution Drafting</strong></td><td>Board resolution for first auditor or AGM resolution for subsequent appointment</td></tr>
                        <tr><td><strong>Form ADT-1 Filing</strong></td><td>Filing Form ADT-1 with ROC on MCA V3 portal within 15 days of appointment</td></tr>
                        <tr><td><strong>Form MGT-14 Filing (if required)</strong></td><td>Filing for listed and specified companies within 30 days of Board resolution</td></tr>
                        <tr><td><strong>Post-Appointment Compliance Advisory</strong></td><td>Rotation tracking, next AGM cycle planning, and ongoing compliance support</td></tr>

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
            <h2 class="section-title">Step-by-Step Procedure for Appointment of Auditor</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Follow these 7 steps to ensure legally compliant appointment under Section 139 of the Companies Act, 2013.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Eligible Auditor</h3><p class="step-description">Select a CA or CA firm holding a valid Certificate of Practice from ICAI. Verify they are not disqualified under Section 141(3) - no shareholding in company, no indebtedness exceeding INR 1 lakh, no business relationship, and not serving more than 20 audits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligible auditor identified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Section 141 verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="30" height="8" rx="2" fill="#14365F"/><text x="45" y="26" font-size="5" fill="#fff" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.141</text><line x1="30" y1="36" x2="90" y2="36" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Eligible</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain Auditor Consent</h3><p class="step-description">Get a written consent letter from the proposed auditor confirming willingness to accept appointment under Section 139 of the Companies Act, 2013.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Written consent obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rule 4(1) compliant</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="29" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CONSENT LETTER</text><line x1="25" y1="40" x2="85" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><line x1="25" y1="50" x2="80" y2="50" stroke="#14365F" stroke-width="1.5" opacity="0.2"/></svg></div><span class="illustration-label">Consented</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Obtain Eligibility Certificate</h3><p class="step-description">The auditor must provide a certificate confirming compliance with all conditions of Section 141 and that the appointment will not violate audit limits.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Certificate received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Audit limit verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">ELIGIBLE</text><line x1="30" y1="44" x2="90" y2="44" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="58" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Max 20 Audits OK</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Pass Board or AGM Resolution</h3><p class="step-description">For first auditor (within 30 days of incorporation): Board Resolution under Section 139(6). For subsequent auditors: Ordinary Resolution at AGM. Where Audit Committee exists, its recommendation must be considered.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 30-day deadline</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#14365F"/><text x="60" y="29" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">BOARD / AGM</text><line x1="25" y1="40" x2="95" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><rect x="30" y="48" width="60" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="58" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">S.139(6) / S.139(1)</text></svg></div><span class="illustration-label">Resolved</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Intimate the Auditor</h3><p class="step-description">Send written intimation of appointment to the auditor within the period specified in Section 139(1).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Auditor intimated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Written record created</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="40" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="45" y="30" font-size="6" fill="#E8712C" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">NOTICE</text><path d="M72 27l10 0" stroke="#14365F" stroke-width="1.5" stroke-linecap="round"/><circle cx="90" cy="27" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="90" y="30" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">CA</text></svg></div><span class="illustration-label">Intimated</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File Form ADT-1 with ROC</h3><p class="step-description">File Form ADT-1 on the MCA V3 portal within 15 days of the AGM or Board Meeting date. Attach: Board/AGM resolution, auditor consent letter, eligibility certificate, and intimation. ADT-1 mandatory for first auditor from July 2025.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ADT-1 filed within 15 days</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MCA records updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#E8712C"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">FORM ADT-1</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">ADT-1 Filed</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Form MGT-14 (if required)</h3><p class="step-description">Listed companies and specified companies must also file MGT-14 for the Board Resolution within 30 days [Section 117 of Companies Act, 2013].</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed (if applicable)</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All filings complete</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">MGT-14</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">07</span></div></div></div>
            <div class="highlight-box" style="margin-top:32px;"><p><strong>MCA 2025 Update:</strong> Form ADT-1 filing for first auditor is now mandatory for all companies incorporated on or after July 14, 2025 per Companies (Audit and Auditors) Amendment Rules 2025.</p></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Checklist for Auditor Appointment</h2>
            <div class="content-text">
                
                <ul>
                    <li>Certificate of Incorporation of the Company</li>
                    <li>PAN of the Company</li>
                    <li>Written consent letter from the proposed Auditor (Rule 4(1), Companies (Audit and Auditors) Rules 2014)</li>
                    <li>Eligibility Certificate from the Auditor under Section 141</li>
                    <li>Board Resolution copy (for first auditor / casual vacancy) OR AGM Resolution copy (for subsequent appointment)</li>
                    <li>DSC of authorised Director for MCA filing</li>
                    <li>Form ADT-1 (prepared with correct financial year and auditor details)</li>
                    <li>Form MGT-14 (if applicable - listed or specified companies)</li>
                    <li>Copy of intimation sent to the Auditor by the Company</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges in Auditor Appointment and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Board Fails to Appoint Within 30 Days</strong></td><td>Immediate compliance default from Day 31</td><td>We initiate the appointment process at the pre-incorporation stage. Board resolution and ADT-1 filed well within the 30-day deadline.</td></tr>
                        <tr><td><strong>Auditor Disqualification Discovered After Appointment</strong></td><td>Deemed casual vacancy, entire process restarts</td><td>We monitor eligibility continuously and manage replacement within 30-day deadline under Section 139(8).</td></tr>
                        <tr><td><strong>ADT-1 Filing Errors on MCA V3 Portal</strong></td><td>SRN validation failures, delayed filing</td><td>Our CS team has deep MCA V3 experience - ensures error-free, first-time-right submission every time.</td></tr>
                        <tr><td><strong>Mandatory Rotation Compliance for Listed Companies</strong></td><td>Missed rotation deadline creates compliance gap</td><td>We maintain rotation tracker for all clients and initiate replacement 90 days before rotation deadline.</td></tr>

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
            <h2 class="section-title">Professional Fees for Auditor Appointment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - First Auditor Appointment (Pvt Ltd / OPC)</td><td class="table-amount">Starting from INR 1,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Subsequent Auditor Appointment at AGM + ADT-1 Filing</td><td class="table-amount">Starting at INR 3,999</td></tr>
                        <tr><td>Auditor Rotation Compliance (Listed / Specified Companies)</td><td class="table-amount">Starting at INR 7,999</td></tr>
                        <tr><td>Casual Vacancy Appointment + Emergency ADT-1 Filing</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Government / ROC Filing Fees for ADT-1</td><td class="table-amount">At actuals - MCA fee based on authorised capital</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Appointment of Auditor consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20auditor%20appointment.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Appointment of Auditor</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Board Resolution for first auditor</td><td>Within 30 days of incorporation (Section 139(6))</td></tr>
                        <tr><td>Shareholder appointment at EGM if Board fails</td><td>Within 90 days of incorporation</td></tr>
                        <tr><td>Subsequent auditor appointment at AGM</td><td>At the first Annual General Meeting</td></tr>
                        <tr><td>Filing Form ADT-1 with ROC</td><td>Within 15 days of AGM / Board meeting</td></tr>
                        <tr><td>Filing Form MGT-14 (if applicable)</td><td>Within 30 days of Board Meeting (Section 117)</td></tr>
                        <tr><td>Casual vacancy filling - Board appointment</td><td>Within 30 days of vacancy arising</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Patron Turnaround:</strong> 3-5 working days from document receipt. We initiate at pre-incorporation stage itself to ensure Day 1 compliance. ADT-1 filed within 15 days - zero late filing fees.</p>

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
            <h2 class="section-title">Why Professional Assistance for Auditor Appointment</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Zero-Error ADT-1 Filing</h3><p>MCA V3 portal cross-validates SRN numbers and rejects mismatched entries. Our team ensures error-free, first-time-right submission avoiding INR 200/day late fee.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></div><h3>Comprehensive Eligibility Check</h3><p>Prevents disqualification risk under Section 141(3) - shareholding, indebtedness, business relationship, and 20-company audit limit all verified.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Proper Documentation</h3><p>Consent letter, eligibility certificate, and Board/AGM resolution templates - all prepared professionally for ROC compliance.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Rotation Compliance Tracking</h3><p>For listed and specified companies - proactive rotation tracker ensures seamless transition without compliance gap at 5/10-year term ends.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Integrated Compliance Calendar</h3><p>Auditor appointment is not isolated - it integrates with annual filing cycle, AGM management, and ROC compliance. No gaps between compliance tracks.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Coverage</h3><p>Offices in Mumbai, Delhi, Pune, Bangalore. 200+ auditor appointments handled annually. 100% on-time ADT-1 filing record.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">200+ Auditor Appointments Annually - Zero-Penalty Track Record</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 4.9/5 Rating | 350+ Reviews | 200+ Auditor Appointments/Year | 100% On-Time ADT-1 | Mumbai, Delhi, Pune, Bangalore</p>
                <div class="highlight-box" style="margin-top:16px;"><p>"Patron handled our first auditor appointment and ADT-1 filing within 2 days of incorporation. Zero errors, zero stress." - <strong>Director, Pune-based Technology Startup</strong></p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional Auditor Appointment</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY Filing</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Eligibility Check (Sec 141)</strong></td><td>Manual - prone to oversight</td><td>Systematic checklist by CS team</td></tr>
                        <tr><td><strong>ADT-1 MCA V3 Filing</strong></td><td>Complex portal - high error rate</td><td>Error-free, first-time-right filing</td></tr>
                        <tr><td><strong>Rotation Compliance</strong></td><td>Easy to miss deadline</td><td>Proactive tracking and alerts</td></tr>
                        <tr><td><strong>Penalty Risk</strong></td><td>High - INR 200/day ADT-1 + company fine</td><td>Near-zero - deadline monitoring built in</td></tr>
                        <tr><td><strong>Documentation Quality</strong></td><td>Generic templates, potential errors</td><td>Professional consent letter, certificate, resolution</td></tr>
                        <tr><td><strong>Post-Appointment Support</strong></td><td>None - isolated compliance</td><td>Integrated with annual compliance calendar</td></tr>

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
            <h2 class="section-title">Related Compliance Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/private-limited-company-compliance">Compliance for Private Limited Companies</a> - annual ROC filings and board compliance</li>
                    <li><a href="/change-of-auditor">Change of Auditor in India</a> - rotation, resignation, and removal procedures</li>
                    <li><a href="/appointment-of-director">Appointment of Director in India</a> - director appointment and DIN application</li>
                    <li><a href="/roc-notice">ROC Notice Response</a> - handling ROC notices and compliance</li>
                    <li><a href="/statutory-audit">Statutory Audit Services</a> - annual financial statement audit by CA</li>
                    <li><a href="/secretarial-audit">Secretarial Audit Service</a> - Section 204 compliance audit</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Appointment of Auditor in India</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Details</th></tr></thead><tbody>
                        <tr><td><strong>Section 139 - Appointment of Auditors</strong></td><td>First auditor within 30 days (S.139(6)); subsequent at AGM for 5 years (S.139(1)); rotation for listed/specified companies (S.139(2)); casual vacancy (S.139(8)). Source: <a href="https://ca2013.com/appointment-of-auditors/" target="_blank" rel="noopener">ca2013.com</a></td></tr>
                        <tr><td><strong>Section 141 - Eligibility</strong></td><td>Only CA in practice eligible. Disqualifications: shareholding, indebtedness above INR 1 lakh, business relationship, 20-company limit. Source: <a href="https://ca2013.com/eligibility-qualifications-and-disqualifications-of-auditors/" target="_blank" rel="noopener">ca2013.com</a></td></tr>
                        <tr><td><strong>Section 142 - Remuneration</strong></td><td>Fixed by company at AGM or Board. Must be separately disclosed in financial statements.</td></tr>
                        <tr><td><strong>Section 147 - Penalties</strong></td><td>Company: fine INR 25,000 to INR 5,00,000. Officer: imprisonment up to 1 year + fine INR 10,000 to INR 1,00,000.</td></tr>
                        <tr><td><strong>Companies (Audit & Auditors) Rules 2014</strong></td><td>Rule 4: ADT-1 procedure. Rule 5: Appointment conditions. Rule 6: Rotation mechanism.</td></tr>
                        <tr><td><strong>MCA Amendment Rules 2025</strong></td><td>ADT-1 filing mandatory for first auditor appointments from July 14, 2025. New compliance declarations on ADT-1.</td></tr>
                </tbody></table></div>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Appointment of Auditor</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about statutory auditor appointment, Form ADT-1, eligibility, rotation rules, and penalties.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Appointment of Auditor'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Who appoints the first auditor of a private limited company?</h3>
                        <div class="faq-expanded__a"><p>The Board of Directors appoints the first auditor within 30 days of incorporation under Section 139(6) of the Companies Act, 2013. If the Board fails to appoint within 30 days, the shareholders must appoint the auditor at an Extraordinary General Meeting within 90 days of incorporation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is Form ADT-1 and when must it be filed?</h3>
                        <div class="faq-expanded__a"><p>Form ADT-1 is the mandatory intimation filed with the Registrar of Companies (ROC) to officially notify the appointment of a statutory auditor under Section 139(1). It must be filed within 15 days of the AGM or Board Meeting at which the auditor was appointed. Per MCA Amendment Rules 2025, it is now mandatory for first auditor appointments as well.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the penalty for not appointing an auditor?</h3>
                        <div class="faq-expanded__a"><p>Under Section 147 of the Companies Act, 2013, failure to appoint an auditor attracts a company fine of INR 25,000 to INR 5,00,000. Every officer in default faces imprisonment of up to 1 year plus a fine of INR 10,000 to INR 1,00,000. Late ADT-1 filing attracts an additional fee of INR 200 per day.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What is auditor rotation and does it apply to small companies?</h3>
                        <div class="faq-expanded__a"><p>Auditor rotation under Section 139(2) is mandatory for listed companies and specified classes of public companies. Individual auditors must rotate after 5 consecutive years; audit firms after 10 years (two terms of 5 years). Private limited companies and OPCs are currently exempt from mandatory rotation.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can a company remove its auditor before the term expires?</h3>
                        <div class="faq-expanded__a"><p>Yes, under Section 140(1) of the Companies Act, 2013, an auditor can be removed before expiry of term only by a special resolution of the shareholders and with prior approval of the Central Government by filing Form ADT-2. The auditor must be given a reasonable opportunity to be heard.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is Form ADT-1 required for the first auditor appointment?</h3>
                        <div class="faq-expanded__a"><p>Yes, as per the Companies (Audit and Auditors) Amendment Rules 2025, Form ADT-1 is now mandatory for first auditor appointments for all companies incorporated on or after July 14, 2025. Previously this was considered optional for first appointment under Section 139(6), but MCA has now clarified that filing is required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Auditor appointment ke liye kya documents chahiye?</h3>
                        <div class="faq-expanded__a"><p>Board/AGM Resolution copy, auditor ki written consent letter, eligibility certificate under Section 141 confirming no disqualification, DSC of authorised director, aur company details (CIN, PAN, registered office address) chahiye Form ADT-1 filing ke liye ROC ke saath.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What is casual vacancy and how is it filled?</h3>
                        <div class="faq-expanded__a"><p>A casual vacancy arises when an auditor vacates office mid-term due to resignation, disqualification, death, or removal. Under Section 139(8) of the Companies Act, 2013, the Board of Directors must fill the vacancy within 30 days. If the vacancy arose due to resignation, shareholder approval at a general meeting within 3 months of Board appointment is also required.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Time limit for first auditor:</strong> 30 days from incorporation (Board) / 90 days (Members at EGM) - Section 139(6).</p>
                <p><strong>ADT-1 filing deadline:</strong> Within 15 days of AGM or Board Meeting - Section 139(1).</p>
                <p><strong>Audit limit per auditor:</strong> Maximum 20 companies per individual CA or per partner - Section 141(3)(g).</p>
                <p><strong>Rotation cooling-off:</strong> 5 years from completion of term before same auditor/firm can be reappointed - Rule 6.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">30-Day Deadline Starts from Incorporation - Act Now</h2>
            <div class="content-text">
                
                <p><strong>Newly incorporated companies have a 30-day window from incorporation date to appoint their first auditor. Missing this creates an immediate compliance default.</strong></p>
                <ul>
                    <li><strong>Penalty clock starts Day 31:</strong> INR 25,000 minimum fine for company + personal liability for every director</li>
                    <li><strong>ADT-1 late filing:</strong> INR 200 per day additional fee on top of ROC base fee</li>
                    <li><strong>Annual filing cycle blocked:</strong> Without a valid auditor, the company cannot complete its annual filing cycle</li>
                    <li><strong>Strike-off risk:</strong> Persistent non-compliance puts the company at risk of ROC-initiated strike-off</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Appoint Your Auditor Today - Starting at INR 1,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Appointment of auditor is a non-negotiable day-one compliance for every company in India. Section 139 sets strict deadlines for first appointment, subsequent appointment at AGM, and filling casual vacancies.</p>
                <p style="color:rgba(255,255,255,0.9);">The 2025 MCA amendments have strengthened requirements further by mandating ADT-1 filing even for first auditor appointments. Patron Accounting's CS team handles the complete end-to-end process.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 1,999 (Exl GST and Govt. Charges) | 200+ Appointments/Year | Zero-Penalty Record | 3-5 Working Days</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20auditor%20appointment.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Appointment%20of%20Auditor&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20appoint%20a%20statutory%20auditor.%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Auditor Appointment Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert company secretarial services for auditor appointment across major cities in India.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/appointment-of-auditor/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/appointment-of-auditor/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/appointment-of-auditor/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/appointment-of-auditor/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Compliance Services</div><div class="pa-block-sub">Complete company secretarial and audit compliance support</div><div class="pa-cross-grid"><a href="/change-of-auditor" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change of Auditor</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/appointment-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">India</div></div></a><a href="/statutory-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Statutory Audit</div><div class="pa-card-sub">India</div></div></a><a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a><a href="/roc-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Appointment of Auditor in India under Section 139, Companies Act 2013. MCA Amendment Rules 2025 (ADT-1 mandatory for first auditor) reflected. Content reviewed annually.</p>
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

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
