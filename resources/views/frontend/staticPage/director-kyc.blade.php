
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
    <title>Director KYC Filing - DIR-3 KYC, Process & Annual Deadline</title>
    <meta name="description" content="File DIR-3 KYC before September 30 to keep your DIN active. Avoid INR 5,000 penalty. Professional CA/CS filing starting at INR 999+. Trusted by 500+ directors.">
    <link rel="canonical" href="/director-kyc">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Director KYC Filing - DIR-3 KYC, Process & Annual Deadline">
    <meta property="og:description" content="File DIR-3 KYC before September 30 to keep your DIN active. Avoid INR 5,000 penalty. Professional CA/CS filing starting at INR 999+. Trusted by 500+ directors.">
    <meta property="og:url" content="/director-kyc">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Director KYC Filing - DIR-3 KYC, Process & Annual Deadline">
    <meta name="twitter:description" content="File DIR-3 KYC before September 30 to keep your DIN active. Avoid INR 5,000 penalty. Professional CA/CS filing starting at INR 999+. Trusted by 500+ directors.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Director KYC Filing",
          "description": "File DIR-3 KYC before September 30 to keep your DIN active. Avoid INR 5,000 penalty. Professional CA/CS filing starting at INR 999+. Trusted by 500+ directors.",
          "url": "https://www.patronaccounting.com/director-kyc",
          "serviceType": "Director KYC Filing",
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
            "url": "https://www.patronaccounting.com/director-kyc",
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
              "name": "Director KYC Filing",
              "item": "https://www.patronaccounting.com/director-kyc"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the due date for DIR-3 KYC filing?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The annual due date is 30 September every year under Rule 12A. Filing opens on 1 April each year. MCA may issue extension circulars - for FY 2024-25, the deadline was extended to 31 October 2025. Monitor MCA notifications or engage Patron Accounting for timely alerts."
              }
            },
            {
              "@type": "Question",
              "name": "What is the penalty for not filing DIR-3 KYC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Missing the deadline results in DIN deactivation. Reactivation requires filing the pending form and paying a flat INR 5,000 penalty per DIN under the MCA fee schedule. There is no daily accumulation - but DIN remains inactive until both form is filed and penalty is paid."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between DIR-3 KYC and DIR-3 KYC Web?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DIR-3 KYC e-Form is for first-time filers or those updating details; requires DSC and CA/CS/CMA certification. DIR-3 KYC Web is for repeat filers with no changes; uses OTP only, no DSC required - faster and simpler."
              }
            },
            {
              "@type": "Question",
              "name": "Can disqualified directors file DIR-3 KYC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Disqualified directors are not exempt. Any DIN holder with Approved status must file annually, regardless of disqualification under Section 164."
              }
            },
            {
              "@type": "Question",
              "name": "How to reactivate deactivated DIN after missing DIR-3 KYC?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "File the pending DIR-3 KYC e-Form on MCA V3 portal and pay INR 5,000 reactivation fee. MCA processes via STP and restores DIN to Active status with confirmation email. Patron Accounting handles this end-to-end in 1-2 working days."
              }
            },
            {
              "@type": "Question",
              "name": "Is DIR-3 KYC required even if I am not a director in any company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Any DIN holder must file annually regardless of whether they are currently active as a director or associated with any company."
              }
            },
            {
              "@type": "Question",
              "name": "Director KYC kab aur kaise file karte hain?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DIR-3 KYC har financial year mein 30 September tak file karna mandatory hai agar aapka DIN active hai. Pehli baar ya details change hone par e-Form file karna hota hai jisme DSC aur CA/CS certification chahiye. Details same hain toh Web form se OTP se file kar sakte hain. Quick Answers What is DIR-3 KYC? Mandatory annual KYC form filed by every DIN holder with MCA by 30 September to keep their Director Identification Number active. Who needs to file? Every individual with active DIN as of 31 March, including inactive, disqualified, and foreign directors. What happens if DIN is deactivated? Director cannot sign any MCA filings, cannot act as director; company filings (DIR-12, AOC-4, MGT-7) blocked. Government fee on time? NIL. No government fee if filed before 30 September."
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
                        Director KYC (DIR-3 KYC) - Annual Filing Guide for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Annual Compliance:</span> Every DIN holder must file DIR-3 KYC by 30 September to maintain active DIN status</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>INR 5,000 Penalty:</span> Flat penalty for late filing - DIN deactivated automatically on missed deadline</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Two Filing Modes:</span> DIR-3 KYC e-Form (first-time/updates) and DIR-3 KYC Web (repeat filers, no changes)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CA/CS Certification:</span> Mandatory CA/CS/CMA certification for e-Form - Patron Accounting handles it end-to-end</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">1,000+ directors KYC filed annually | 4.8/5 rating | 100% on-time record</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Director%20KYC%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20DIR-3%20KYC%20filing%20details.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20DIR-3%20KYC%20for%20my%20DIN.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Director KYC (DIR-3 KYC)',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'director-kyc', 'label' => 'Director KYC (DIR-3 KYC)', 'selected' => true, 'disabled' => false],
                            ['value' => 'appointment-of-director', 'label' => 'Appointment of Director', 'selected' => false, 'disabled' => false],
                            ['value' => 'resignation-of-director', 'label' => 'Resignation of Director', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-compliance', 'label' => 'Pvt Ltd Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'secretarial-audit', 'label' => 'Secretarial Audit', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Filed 8 directors' KYC in one day. No follow-up needed. Patron Accounting sent SRN for each DIN within hours.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CF</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing Company, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">My DIN was deactivated for 2 years. Patron Accounting reactivated it within 2 days - paid the penalty, filed the form, and confirmed Active status.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SF</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Startup Founder</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We get a reminder every August. Never missed a deadline since we engaged them. Simple, reliable, no fuss.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">CS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Company Secretary</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Foreign director based in Singapore. Patron handled the entire KYC with notarized documents and cross-border OTP coordination. Smooth process.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">FD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Foreign Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Singapore (remote)</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 1,000+ directors who trust Patron Accounting for on-time DIR-3 KYC filing.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Who Must File</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs Pro</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Director KYC (DIR-3 KYC) - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Director KYC (DIR-3 KYC) Services at a Glance</strong></p>
                    <p>DIR-3 KYC is a mandatory annual compliance for every DIN holder in India. File by 30 September each year or face DIN deactivation and a INR 5,000 reactivation penalty. First-time or updated details require DIR-3 KYC e-Form with CA/CS/CMA certification and DSC. Repeat filers with no changes can use DIR-3 KYC Web. Government fee is NIL if filed on time. Professional service starts at INR 999+.</p>
                </div>
                <p>Every director of a company in India - whether in an active company or not - must complete an annual KYC verification with the Ministry of Corporate Affairs (MCA). Introduced under Rule 12A of the Companies (Appointment and Qualification of Directors) Rules 2014, the DIR-3 KYC requirement ensures that the MCA database holds accurate, verified information about every DIN holder at all times.</p>
                <p>Missing the 30 September deadline results in immediate DIN deactivation. With a deactivated DIN, a director cannot sign any MCA filings, cannot be validly appointed or removed, and the company's critical compliance filings such as DIR-12, AOC-4, and MGT-7 may get blocked. Patron Accounting's CA and CS team ensures timely, accurate DIR-3 KYC filing for directors across India.</p>
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
                <h2 class="section-title">What is Director KYC (DIR-3 KYC)?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Director KYC (DIR-3 KYC)</strong> is a mandatory annual compliance filing under Rule 12A of the Companies (Appointment and Qualification of Directors) Rules 2014, requiring every DIN holder to verify their identity, contact details, and address with the MCA by 30 September each year to maintain an active Director Identification Number.</p>
<p>The Ministry of Corporate Affairs introduced annual director KYC to maintain accurate and verifiable records of all DIN holders. Unlike the one-time DIN application, the annual KYC is a recurring obligation that applies regardless of whether the director is currently active in any company.</p>
<p><strong>Filing portal:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal (mca.gov.in)</a></p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Director KYC (DIR-3 KYC):</strong></p>
                    <p><strong>DIN (Director Identification Number)</strong> - Unique 8-digit number issued under Section 153 of Companies Act 2013. Mandatory for all directors.</p>
<p><strong>DIR-3 KYC e-Form</strong> - Full-form filing for first-time KYC or when details change. Requires director's DSC and CA/CS/CMA certification.</p>
<p><strong>DIR-3 KYC Web</strong> - Simplified annual re-verification for repeat filers with no changes. Uses OTP instead of DSC. Faster and simpler.</p>
<p><strong>DSC (Digital Signature Certificate)</strong> - Class 3 DSC required for signing the DIR-3 KYC e-Form on MCA portal.</p>
<p><strong>STP (Straight Through Processing)</strong> - DIR-3 KYC submissions processed via automated system approval - typically immediate confirmation.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- ID card -->
<rect x="50" y="35" width="65" height="80" rx="4" fill="#FFF" stroke="#14365F" stroke-width="1"/>
<circle cx="82" cy="58" r="12" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<rect x="72" y="72" width="20" height="4" rx="2" fill="#14365F" opacity="0.3"/>
<line x1="58" y1="84" x2="107" y2="84" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
<line x1="58" y1="92" x2="95" y2="92" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<line x1="58" y1="100" x2="90" y2="100" stroke="#14365F" stroke-width="1.5" opacity="0.2"/>
<!-- DIR-3 KYC badge -->
<rect x="118" y="45" width="42" height="22" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="139" y="59" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIR-3 KYC</text>
<!-- 30 SEP badge -->
<rect x="120" y="75" width="40" height="22" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="140" y="89" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">30 SEP</text>
<!-- ACTIVE badge -->
<rect x="55" y="118" width="50" height="18" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="80" y="130" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ACTIVE</text>
<!-- Verified -->
<circle cx="152" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M145 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Director KYC (DIR-3 KYC)</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Rule 12A</span>
                        <strong>DIR-3 KYC</strong>
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
            <h2 class="section-title">Who Must File DIR-3 KYC?</h2>
            <div class="content-text">
                
                <p>The DIR-3 KYC requirement covers far more than active directors:</p>
<ul>
<li><strong>Active Directors:</strong> Any director holding active DIN in Private Ltd, Public Ltd, OPC, Section 8, or LLP as of 31 March</li>
<li><strong>Disqualified Directors:</strong> Even directors disqualified under Section 164 must file annually to keep DIN from deactivation</li>
<li><strong>Inactive DIN Holders:</strong> Individuals holding DIN but not currently serving as director in any company</li>
<li><strong>Foreign Directors:</strong> Foreign nationals holding Indian DIN must also file. Notarized foreign documents accepted.</li>
<li><strong>New DIN Holders (mid-year):</strong> DIN allotted after 31 March - first KYC due by 30 September of next FY</li>
<li><strong>LLP Designated Partners:</strong> DPIN holders (now operating as DIN) also subject to annual KYC</li>
</ul>
<p><strong>Only exception:</strong> If a DIN has been formally surrendered or deactivated by MCA, further KYC is not required.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Patron Accounting's DIR-3 KYC Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>DIR-3 KYC e-Form Filing</td><td>Complete form preparation, DSC attachment, OTP verification support, CA/CS certification, and MCA portal submission</td></tr>
<tr><td>DIR-3 KYC Web Filing</td><td>Simple annual re-verification for repeat filers with no changes - fastest turnaround</td></tr>
<tr><td>DIN Reactivation Service</td><td>File pending DIR-3 KYC after deadline, coordinate INR 5,000 penalty payment, confirm DIN status restored</td></tr>
<tr><td>Bulk Director KYC</td><td>Group filing for multiple directors of the same company at discounted rates</td></tr>
<tr><td>Foreign Director KYC</td><td>Specialised support for notarized foreign documents, country code validation, cross-border OTP issues</td></tr>
<tr><td>Annual Reminder Service</td><td>Registered clients receive proactive reminders in August-September to avoid deadline miss</td></tr>

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
            <h2 class="section-title">8-Step DIR-3 KYC e-Form Filing Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Rule 12A, Companies (Appointment and Qualification of Directors) Rules 2014. Due date: 30 September. Government fee: NIL if on time. Late filing: INR 5,000 flat penalty + DIN deactivation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Determine Filing Mode</h3><p class="step-description">Check MCA portal DIN status. First time or details changed = use e-Form DIR-3 KYC. Previously filed with no changes = use DIR-3 KYC Web (simpler, OTP only, no DSC needed).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Mode selected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="15" width="40" height="50" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="35" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">e-FORM</text><rect x="65" y="15" width="40" height="50" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="85" y="42" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">WEB</text></svg></div><span class="illustration-label">Mode Set</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Collect and Verify Documents</h3><p class="step-description">Gather PAN card, Aadhaar/Passport, permanent address proof, current address proof (utility bill or bank statement not older than 2 months), and passport photograph. Ensure name matches MCA records exactly.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Docs gathered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Names verified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="64" x2="80" y2="64" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Docs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Obtain/Verify DSC</h3><p class="step-description">Confirm director's Class 3 Digital Signature Certificate is valid and not expired. DSC must be in the director's name matching MCA records. If expired, renew before proceeding.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC valid</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name matched</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="46" font-size="8" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text></svg></div><span class="illustration-label">DSC Verified</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Download and Fill DIR-3 KYC e-Form</h3><p class="step-description">Download latest form from MCA V3 portal. Fill in DIN, full name (as per PAN), father's name, DOB, nationality, mobile number, email ID, permanent and current address. Mobile and email validated via OTP.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form filled</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Details entered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="35" y1="28" x2="85" y2="28" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="35" y1="40" x2="75" y2="40" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="35" y1="52" x2="65" y2="52" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Form Filled</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">OTP Verification</h3><p class="step-description">Enter OTP received on personal mobile and email registered in the form. OTP valid for limited period. Max 10 OTPs per day, max 2 per 30-minute window. Ensure mobile network is active.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>OTP verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Identity confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="38" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">OTP</text><text x="60" y="50" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">VERIFIED</text></svg></div><span class="illustration-label">OTP Done</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Professional Certification</h3><p class="step-description">Completed form must be digitally certified by a practicing CA, CS, or CMA with valid Certificate of Practice. The certifying professional affixes their DSC along with membership/COP number. Patron Accounting's CS team handles this.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA/CS certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>COP affixed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">CA/CS</text><text x="60" y="50" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">CERTIFIED</text></svg></div><span class="illustration-label">Certified</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Affix Director's DSC and Submit</h3><p class="step-description">Director affixes their own DSC on the form. Upload on MCA V3 portal. If on time (before 30 September), fee is NIL and zero-rupee challan generated. Receive SRN confirmation.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Form submitted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>SRN generated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SUBMITTED</text></svg></div><span class="illustration-label">Submitted</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Download Acknowledgment</h3><p class="step-description">Download and save SRN acknowledgment. MCA sends approval confirmation email to director's registered email. Check DIN status on MCA portal to confirm it shows 'Approved'.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>ACK saved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN confirmed Active</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="40" cy="42" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M35 42l3 3 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round"/><rect x="60" y="32" width="35" height="20" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="77" y="45" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">ACTIVE</text></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for DIR-3 KYC</h2>
            <div class="content-text">
                
                <p><strong>For DIR-3 KYC e-Form (first-time or updated details):</strong></p>
<div class="table-responsive-wrapper"><table><thead><tr><th>Category</th><th>Documents Accepted</th></tr></thead><tbody>
<tr><td>Identity Proof</td><td>PAN Card (mandatory for Indians), Passport (mandatory for foreigners), Aadhaar Card, Driving Licence</td></tr>
<tr><td>Permanent Address Proof</td><td>Voter ID, Driving Licence, Utility bill (not older than 2 months), Bank statement (not older than 2 months)</td></tr>
<tr><td>Current Address Proof (if different)</td><td>Utility bill or bank statement (not older than 2 months), Rental agreement with utility bill</td></tr>
<tr><td>Other Requirements</td><td>Class 3 DSC of director, Personal mobile + email for OTP, CA/CS/CMA certification (arranged by Patron Accounting)</td></tr>
</tbody></table></div>
<p style='margin-top:16px;'><strong>For DIR-3 KYC Web (repeat filers, no changes):</strong> Active MCA login credentials + access to registered mobile and email for OTP. No documents or DSC needed.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Common Challenges in DIR-3 KYC Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>OTP not received or expired</td><td>Mobile network issues, email in spam, limited OTP window</td><td>Pre-check mobile and email before initiating. Real-time OTP coordination. Fresh OTP requested promptly if first expires.</td></tr>
<tr><td>DSC expired or not matching MCA records</td><td>Expired Class 3 DSC or name mismatch causes rejection</td><td>Verify DSC validity and name consistency with MCA before initiating. Assist with DSC renewal if expired.</td></tr>
<tr><td>Document name mismatch</td><td>PAN name, Aadhaar name, and MCA records don't match</td><td>Pre-filing document check comparing all names across documents and MCA DIN records. Mismatch resolved before submission.</td></tr>
<tr><td>DIN already deactivated</td><td>Missed previous year's deadline; INR 5,000 penalty required</td><td>Reactivation service: pending DIR-3 KYC filing, MCA portal penalty payment, and DIN status restoration to Active in 1-2 days.</td></tr>

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
            <h2 class="section-title">DIR-3 KYC Filing Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>DIR-3 KYC Web Filing (repeat, no changes)</td><td>INR 499 + GST (OTP support, SRN delivery)</td></tr>
<tr><td>DIR-3 KYC e-Form Filing (first-time/updated)</td><td>INR 999 + GST (DSC support, CA/CS certification, MCA submission)</td></tr>
<tr><td>DIN Reactivation Service (deactivated DIN)</td><td>INR 1,499 + GST + INR 5,000 MCA penalty</td></tr>
<tr><td>Bulk Filing (5+ directors, same company)</td><td>INR 399/director (Web) or INR 799/director (e-Form) + GST</td></tr>
<tr><td>Government Fee (filed on time by 30 September)</td><td>NIL - No government fee payable</td></tr>
<tr><td>Government Fee (filed after 30 September - DIN deactivated)</td><td>INR 5,000 per DIN - flat late filing fee for reactivation</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Director KYC (DIR-3 KYC) consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20service%20from%20Patron%20Accounting." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for DIR-3 KYC Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DIR-3 KYC Web (no changes)</td><td>Same day - 30 minutes to 2 hours after document collection</td></tr>
<tr><td>DIR-3 KYC e-Form (first-time/updated)</td><td>1 working day after documents and DSC confirmed</td></tr>
<tr><td>DIN Reactivation (deactivated + penalty)</td><td>1-2 working days after penalty payment and documents</td></tr>
<tr><td>MCA STP Processing</td><td>Immediate to same day - automated system approval</td></tr>
<tr><td>Confirmation Email from MCA</td><td>Within minutes to hours of STP approval</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Annual Deadline:</strong> 30 September every year. Filing opens 1 April. MCA may extend via circular (FY 2024-25 was extended to 31 October 2025) but extensions are not guaranteed. File before 30 September to avoid all risk.</p>

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
            <h2 class="section-title">Why Use Professional DIR-3 KYC Filing Service?</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Zero Penalty Guarantee</h3><p class="feature-text">Patron Accounting tracks your deadline and files before 30 September - saving INR 5,000 per DIN per year.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Same-Day Filing</h3><p class="feature-text">Once documents are received, filing completed same day for Web form and within 1 working day for e-Form.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">CA/CS Certification Handled</h3><p class="feature-text">No need to coordinate separately with a practicing professional - our in-house CS team certifies the form.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg></div><h3 class="feature-title">OTP Coordination</h3><p class="feature-text">Our team stays live during OTP verification to ensure smooth completion - no missed or expired OTPs.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg></div><h3 class="feature-title">Annual Reminder Service</h3><p class="feature-text">Never miss a September deadline again with proactive compliance alerts sent to all registered clients.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3 class="feature-title">Multiple Directors, Single Engagement</h3><p class="feature-text">Filing for all directors of your company in one coordinated effort at discounted bulk rates.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Directors Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>1,000+ Directors KYC Filed Annually | 100% On-Time Record | Same-Day Turnaround | INR 50 Lakhs+ Penalties Saved | 4.8/5 Rating from 300+ Clients</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Professional DIR-3 KYC Filing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Patron Accounting</th><th>DIY</th></tr></thead>
                    <tbody>
                        <tr><td>OTP Coordination</td><td>Team stays live during verification</td><td>Self-managed, high failure risk</td></tr>
<tr><td>DSC Validity Check</td><td>Pre-filing DSC audit by CS team</td><td>Often forgotten, causes rejection</td></tr>
<tr><td>Document Name Check</td><td>Pre-flight document reconciliation</td><td>Skipped, causes MCA mismatch</td></tr>
<tr><td>Professional Certification (e-Form)</td><td>In-house CA/CS - included in fee</td><td>Need to arrange separately</td></tr>
<tr><td>Deadline Tracking</td><td>Proactive August-September reminders</td><td>Director's own responsibility</td></tr>
<tr><td>DIN Reactivation</td><td>End-to-end reactivation handled</td><td>Complex: OTP + penalty + re-file</td></tr>
<tr><td>Turnaround Time</td><td>Same-day (Web) or 1 day (e-Form)</td><td>Unpredictable - 1-5 days</td></tr>
<tr><td>Cost</td><td>All-inclusive INR 499+ per DIN</td><td>Professional fee extra if needed</td></tr>

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
            <h2 class="section-title">Related Director and Company Services</h2>
            <div class="content-text">
                
                <ul>
<li><a href="/appointment-of-director">Appointment of Director</a> - DIN, DSC, board resolution, DIR-12 filing</li>
<li><a href="/removal-of-director">Removal of Director</a> - board/shareholder-approved removal</li>
<li><a href="/resignation-of-director">Resignation of Director</a> - DIR-11 and DIR-12 filing</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - annual ROC filing, board meetings</li>
<li><a href="/secretarial-audit">Secretarial Audit</a> - Section 204 audit</li>
<li><a href="/roc-notice">ROC Notice Response</a> - reply to MCA/ROC notices</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for DIR-3 KYC</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Relevance</th></tr></thead><tbody>
<tr><td>Section 153, Companies Act 2013</td><td>Application for Director Identification Number. Mandatory DIN for all directors.</td></tr>
<tr><td>Section 154, Companies Act 2013</td><td>Allotment of DIN by Central Government within prescribed period.</td></tr>
<tr><td>Rule 12A, Companies Rules 2014</td><td>Core provision: Every DIN holder with Approved status shall file DIR-3 KYC before 30 September each year.</td></tr>
<tr><td>Rule 12B, Companies Rules 2014</td><td>Provisions for updating KYC details via DIR-6 when changes occur outside annual cycle.</td></tr>
<tr><td>MCA Annual Extension Circulars</td><td>MCA may extend 30 September deadline (FY 2024-25 extended to 31 October 2025). Not guaranteed every year.</td></tr>
<tr><td>Late Filing Penalty</td><td>INR 5,000 per DIN for reactivation after deadline per MCA fee schedule. No waiver provision.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.mca.gov.in/content/mca/global/en/help-faq/faqs/din-related/dir-3-kyc.html" target="_blank" rel="noopener">MCA DIR-3 KYC Official FAQs</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Filing Portal</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Director KYC (DIR-3 KYC)</h2>
                    <p class="faq-expanded__lead">Get answers about DIR-3 KYC due dates, penalties, e-Form vs Web, DIN reactivation, and filing requirements.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Director KYC (DIR-3 KYC)'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the due date for DIR-3 KYC filing?</h3>
                        <div class="faq-expanded__a"><p>The annual due date is 30 September every year under Rule 12A. Filing opens on 1 April each year. MCA may issue extension circulars - for FY 2024-25, the deadline was extended to 31 October 2025. Monitor MCA notifications or engage Patron Accounting for timely alerts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the penalty for not filing DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>Missing the deadline results in DIN deactivation. Reactivation requires filing the pending form and paying a flat INR 5,000 penalty per DIN under the MCA fee schedule. There is no daily accumulation - but DIN remains inactive until both form is filed and penalty is paid.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between DIR-3 KYC and DIR-3 KYC Web?</h3>
                        <div class="faq-expanded__a"><p>DIR-3 KYC e-Form is for first-time filers or those updating details; requires DSC and CA/CS/CMA certification. DIR-3 KYC Web is for repeat filers with no changes; uses OTP only, no DSC required - faster and simpler.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can disqualified directors file DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>Yes. Disqualified directors are not exempt. Any DIN holder with Approved status must file annually, regardless of disqualification under Section 164.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How to reactivate deactivated DIN after missing DIR-3 KYC?</h3>
                        <div class="faq-expanded__a"><p>File the pending DIR-3 KYC e-Form on MCA V3 portal and pay INR 5,000 reactivation fee. MCA processes via STP and restores DIN to Active status with confirmation email. Patron Accounting handles this end-to-end in 1-2 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is DIR-3 KYC required even if I am not a director in any company?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any DIN holder must file annually regardless of whether they are currently active as a director or associated with any company.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Director KYC kab aur kaise file karte hain?</h3>
                        <div class="faq-expanded__a"><p>DIR-3 KYC har financial year mein 30 September tak file karna mandatory hai agar aapka DIN active hai. Pehli baar ya details change hone par e-Form file karna hota hai jisme DSC aur CA/CS certification chahiye. Details same hain toh Web form se OTP se file kar sakte hain.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is DIR-3 KYC?</strong> Mandatory annual KYC form filed by every DIN holder with MCA by 30 September to keep their Director Identification Number active.</p>
<p><strong>Who needs to file?</strong> Every individual with active DIN as of 31 March, including inactive, disqualified, and foreign directors.</p>
<p><strong>What happens if DIN is deactivated?</strong> Director cannot sign any MCA filings, cannot act as director; company filings (DIR-12, AOC-4, MGT-7) blocked.</p>
<p><strong>Government fee on time?</strong> NIL. No government fee if filed before 30 September.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">File DIR-3 KYC Before 30 September - Avoid INR 5,000 Penalty</h2>
            <div class="content-text">
                
                <p><strong>CRITICAL DEADLINE:</strong> File DIR-3 KYC by 30 SEPTEMBER every year. Miss it and your DIN is IMMEDIATELY deactivated. Reactivation costs INR 5,000 flat fee. A deactivated DIN blocks your company's DIR-12, AOC-4, and MGT-7 filings.</p>
<ul>
<li><strong>1 April:</strong> Filing window opens on MCA portal</li>
<li><strong>August:</strong> Patron Accounting sends compliance reminders to all registered clients</li>
<li><strong>30 September:</strong> Last date for penalty-free filing</li>
<li><strong>1 October onwards:</strong> DIN deactivated; INR 5,000 reactivation penalty applies</li>
</ul>
<p style="margin-top:16px;"><strong>Do not rely on MCA extensions - file before 30 September every year.</strong></p>
<p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20file%20DIR-3%20KYC." target="_blank">WhatsApp us</a> for same-day filing.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">File DIR-3 KYC Today - Starting at INR 499 | Beat September Deadline</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Director KYC (DIR-3 KYC) is one of the simplest yet most penalised annual compliance requirements in Indian corporate law. A single missed deadline results in DIN deactivation and a INR 5,000 penalty - with cascading effects on company filings.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Whether you are an active director, an inactive DIN holder, or a disqualified director - the obligation is the same. Patron Accounting's CA and CS team makes this simple: share your documents, and we file the same day.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20DIR-3%20KYC%20filing%20service%20from%20Patron%20Accounting." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=DIR-3%20KYC%20Filing&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20DIR-3%20KYC%20filing%20for%20my%20DIN.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Director KYC Filing Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Get DIR-3 KYC filed on time from Patron Accounting offices across India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Director KYC Filing by City</div><div class="pa-block-sub">DIR-3 KYC from Patron Accounting</div><div class="pa-city-grid">
<a href="/director-kyc/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/director-kyc/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/director-kyc/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>

</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Director and company compliance services</div><div class="pa-cross-grid">
<a href="/appointment-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Appointment of Director</div><div class="pa-card-sub">India</div></div></a>
<a href="/removal-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Removal of Director</div><div class="pa-card-sub">India</div></div></a>
<a href="/resignation-of-director" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Resignation of Director</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/secretarial-audit" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Secretarial Audit</div><div class="pa-card-sub">India</div></div></a>
<a href="/roc-notice" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ROC Notice Response</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: MCA extending 30 September deadline, MCA V3 form changes, or penalty amount changes. Freshness Tier 1 - Annual Update.</p>
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
