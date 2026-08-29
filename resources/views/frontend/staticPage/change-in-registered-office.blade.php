

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
    <title>Change of Registered Office - ROC Filing, INC-22 & Process</title>
    <meta name="description" content="Change your company registered office in India 2026. File Form INC-22 with ROC under Section 12. All 4 scenarios covered. Starting at INR 2,999.">
    <link rel="canonical" href="/change-in-registered-office">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Change of Registered Office - ROC Filing, INC-22 & Process">
    <meta property="og:description" content="Change your company registered office in India 2026. File Form INC-22 with ROC under Section 12. All 4 scenarios covered. Starting at INR 2,999.">
    <meta property="og:url" content="/change-in-registered-office">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Change of Registered Office - ROC Filing, INC-22 & Process">
    <meta name="twitter:description" content="Change your company registered office in India 2026. File Form INC-22 with ROC under Section 12. All 4 scenarios covered. Starting at INR 2,999.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Change Registered Office India: INC-22 Guide",
          "description": "Change your company registered office in India 2026. File Form INC-22 with ROC under Section 12. All 4 scenarios covered. Starting at INR 2,999.",
          "url": "https://www.patronaccounting.com/change-in-registered-office",
          "serviceType": "Change Registered Office India: INC-22 Guide",
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
              "name": "Change Registered Office India: INC-22 Guide",
              "item": "https://www.patronaccounting.com/change-in-registered-office"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the deadline to file Form INC-22 after changing the registered office?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form INC-22 must be filed with the ROC within 30 days of the board resolution (for Type 1 and 2 changes) or within 60 days of the Regional Director's confirmation order (for Type 3 and 4 changes). Late filing attracts a penalty of INR 1,000 per day of default under Section 12(8) of the Companies Act, 2013."
              }
            },
            {
              "@type": "Question",
              "name": "Is shareholder approval needed for every registered office change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Only if the registered office is being shifted outside the local limits of the current city - to a new city in the same state or to another state - is shareholder approval (Special Resolution at EGM with 75% majority) required. For a shift within the same city's local municipal limits, only a Board Resolution is needed."
              }
            },
            {
              "@type": "Question",
              "name": "What documents are mandatory with Form INC-22?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Form INC-22 requires: proof of registered office address (title document, notarised lease/rent agreement in company's name with latest rent receipt, OR authorization from owner with proof of ownership), and a utility bill not older than 2 months (electricity, gas, water, or property tax). Altered MOA additionally required for inter-state shifts."
              }
            },
            {
              "@type": "Question",
              "name": "How long does an inter-state registered office change take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "An inter-state change (Type 4) typically takes 60 to 90 days from the board meeting to obtaining the fresh Certificate of Incorporation from the new state's ROC. Key time drivers: 21-day EGM notice period, 1-month newspaper notice wait before INC-23, and Regional Director's 60-day processing window."
              }
            },
            {
              "@type": "Question",
              "name": "Does changing the registered office to a different state affect the CIN?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The CIN (Corporate Identity Number) encodes the state of registration. When a company shifts to another state and the ROC jurisdiction changes, a new CIN is issued reflecting the new state code. For shifts within the same state, the CIN does not change."
              }
            },
            {
              "@type": "Question",
              "name": "Is newspaper notice required for every registered office change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Newspaper notice is required only for Type 3 (different ROC within same state) and Type 4 (inter-state) changes. For Type 1 (within city) and Type 2 (outside city, same ROC), no newspaper publication is required. Notice must be in English and local language, at least 1 month before INC-23."
              }
            },
            {
              "@type": "Question",
              "name": "Can a company use a virtual office or co-working space as its registered office?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A virtual office or co-working space can be the registered office provided the company can receive official communications there and has the required address proof - a valid rent or service agreement in the company's name and a utility bill not older than 2 months."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I fail to notify the ROC about a registered office change?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Failure to file INC-22 within the prescribed deadline attracts a penalty of INR 1,000 per day of default on the company and every officer in default. Prolonged non-compliance can also lead to the ROC initiating strike-off under Section 248 of the Companies Act, 2013. Quick Answers INC-22 deadline: Within 30 days of board resolution (Types 1-2) or 60 days of RD order (Types 3-4). Penalty: INR 1,000/day. When is Special Resolution needed? For any shift outside local city limits (Types 2, 3, 4). Not needed for Type 1 (within same city). When is newspaper notice needed? Only for Types 3 (different ROC same state) and 4 (inter-state). Published 1 month before INC-23. Does CIN change? Only for inter-state shifts (Type 4). Fresh COI issued with new state code in CIN. Can virtual office be registered office? Yes - with valid rent/service agreement and utility bill not older than 2 months."
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
                        Change in Registered Office: All 4 Scenarios and MCA Forms in 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Type 1: Within Same City</strong>:</span> Board Resolution + INC-22 only. Simplest process. STP (auto-approved) on MCA V3 portal. 3-7 working days.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Type 2: Same State, Outside City Limits (Same ROC)</strong>:</span> Special Resolution at EGM + MGT-14 + INC-22. Shareholder approval required under Section 12(5). 7-15 working days.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Type 3: Same State, Different ROC Jurisdiction</strong>:</span> Special Resolution + MGT-14 + INC-23 (Regional Director) + INC-28 + INC-22. Newspaper notice mandatory. 30-45 working days.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span><strong>Type 4: Inter-State (Most Complex)</strong>:</span> Special Resolution + MOA alteration + INC-23 (RD/Central Govt) + INC-28 (both ROCs) + INC-22. Fresh COI issued. 60-90 days.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Patron Accounting LLP | 500+ Office Changes Filed | All 4 Types Handled | 4.8/5 Rating | Pune, Mumbai, Delhi, Gurugram</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Registered%20Office%20Change%20Enquiry&body=Hello%2C%0AI%20need%20help%20changing%20registered%20office.%0APlease%20contact%20me.%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20change%20my%20company%20registered%20office.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Registered Office Change',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'change-in-registered-office', 'label' => 'Change in Registered Office', 'selected' => true, 'disabled' => false],
                            ['value' => 'change-in-name-of-company', 'label' => 'Change in Company Name', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-compliance', 'label' => 'Pvt Ltd Compliance', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'change-in-authorised-capital', 'label' => 'Change in Capital', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Simple Type 1 intra-city shift. Patron filed INC-22 within 4 days of our board meeting. STP approved instantly. No queries from ROC at all.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">IT Company, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Inter-state shift from Delhi to Bangalore. Complex Type 4 process. Patron managed everything - EGM, newspaper notice, INC-23 with Regional Director, both ROC filings. Fresh COI in 75 days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CFO</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">E-commerce, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Type 3 shift from Pune to Mumbai (different ROCs in Maharashtra). Patron coordinated the RD proceedings and newspaper publication timeline perfectly. No delays at all.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">CS</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Manufacturing, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We almost used the Type 1 process for a shift outside city limits. Patron's CS team caught the error - it was actually Type 2 requiring Special Resolution. Saved us from rejection.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Director</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Consulting, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
            <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Post-approval, Patron also updated our GST registration, PAN, bank KYC, and trademark address. Complete handholding beyond just the MCA filing. Impressive service.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Founder</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Startup, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Change your registered office with zero compliance gaps. Starting at INR 2,999. All 4 scenario types handled end-to-end.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">4 Types</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Step-by-Step</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Penalties</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Why Us</a><a href="#comparison-section" class="toc-btn">Co. vs LLP</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Change in Registered Office - Complete Guide 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Registered Office Change Services at a Glance</strong></p>
                    <p>Changing the registered office of your company must be notified to the ROC within 30 days using Form INC-22 on MCA V3 portal. The procedure depends on whether the shift is within the same city, same state (same or different ROC), or inter-state. Penalty: INR 1,000 per day of default. Patron Accounting starting at INR 2,999 (Exl GST and Govt. Charges).</p>
                </div>
                <p>The procedure, approvals required, and forms to be filed depend on the nature of the shift. Our CA and CS team handles all four types - from drafting resolutions to filing INC-22, MGT-14, INC-23, and INC-28 with the ROC and Regional Director.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Scenario</th><th>Approval</th><th>Forms</th><th>Timeline</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Type 1: Within same city</strong></td><td>Board Resolution only</td><td>INC-22</td><td>3-7 days</td></tr>
                        <tr><td><strong>Type 2: Same state, outside city (same ROC)</strong></td><td>Board + Special Resolution (EGM)</td><td>MGT-14 + INC-22</td><td>7-15 days</td></tr>
                        <tr><td><strong>Type 3: Same state, different ROC</strong></td><td>Board + Special Resolution + Regional Director</td><td>MGT-14 + INC-23 + INC-28 + INC-22</td><td>30-45 days</td></tr>
                        <tr><td><strong>Type 4: Inter-state</strong></td><td>Board + Special Resolution + MOA alteration + RD/Central Govt</td><td>MGT-14 + INC-23 + INC-28 (both ROCs) + INC-22</td><td>60-90 days</td></tr>
                    </tbody>
                </table>
                </div>
                <p</p>
                <p>Registered office change kaise karein? Sabse pehle yeh samajhna zaroori hai ki aapka shift kin city limits mein hai. Type 1 (same city) mein sirf Board Resolution aur INC-22 chahiye. Type 4 (inter-state) mein MOA alteration, Regional Director approval, aur dono states ke ROC mein filing karni padti hai. Patron Accounting har type handle karta hai.</p>
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
                <h2 class="section-title">What is a Registered Office Under the Companies Act, 2013?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Under <strong>Section 12(1) of the Companies Act, 2013</strong>, every company must have a registered office within thirty days of incorporation - and at all times thereafter - capable of receiving and acknowledging all communications and notices. The registered office serves as the company's official address for all legal, regulatory, and government correspondence.</p>
                    <p>The registered office also determines the company's domicile - the state and ROC jurisdiction. Any change shifting the company from one state to another requires alteration of the MOA (Clause II - State Clause) in addition to ROC filings. Section 12(3) requires the company name, CIN, contact details, and GST number to be displayed at every office and place of business.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Registered Office Change:</strong></p>
                    <p><strong>Registered Office:</strong> Company's official address under Section 12(1) for all legal, regulatory, and government correspondence. Recorded in MOA and ROC records.</p>
                    <p><strong>Form INC-22:</strong> Notice of Situation or Change of Address of Registered Office - filed with ROC within 30/60 days. Required for all 4 scenario types.</p>
                    <p><strong>Form INC-23:</strong> Application to Regional Director for approval of shift to different ROC jurisdiction or different state.</p>
                    <p><strong>Form INC-28:</strong> Filing of Regional Director or Central Government order with ROC within 30 days of the order.</p>
                    <p><strong>Special Resolution:</strong> 75% shareholder majority at EGM - required for shifts outside local city limits (Types 2, 3, 4).</p>
                    <p><strong>MOA Clause II (State Clause):</strong> Must be altered when shifting registered office to a different state (Type 4 only).</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Registered office change -->
                            <rect x="30" y="15" width="140" height="115" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="22" rx="8" fill="#14365F"/>
                            <rect x="30" y="29" width="140" height="8" fill="#14365F"/>
                            <text x="100" y="30" font-size="8" fill="#FFFFFF" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">SECTION 12 - 4 TYPES</text>
                            <rect x="38" y="48" width="55" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/>
                            <text x="65" y="59" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T1: Same City</text>
                            <rect x="98" y="48" width="65" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="130" y="59" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T2: Same ROC</text>
                            <rect x="38" y="70" width="55" height="16" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="65" y="81" font-size="5" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T3: Diff ROC</text>
                            <rect x="98" y="70" width="65" height="16" rx="4" fill="#FDE8E8" stroke="#E8712C" stroke-width="1.2"/>
                            <text x="130" y="81" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T4: Inter-State</text>
                            <rect x="55" y="94" width="90" height="16" rx="4" fill="#14365F"/>
                            <text x="100" y="105" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">INC-22 + INC-23 + INC-28</text>
                            <circle cx="165" cy="25" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M159 25l4 4 7-7" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">All 4 Types Handled</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 12</span>
                        <strong>4 Scenario Types</strong>
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
            <h2 class="section-title">Four Types of Registered Office Change</h2>
            <div class="content-text">
                
                <p>The Companies Act, 2013 prescribes different procedures based on the nature of the shift:</p>
                <ul>
                    <li><strong>Type 1 - Within same city / local limits:</strong> Board Resolution + INC-22 only. Simplest process. STP auto-approved. 3-7 days.</li>
                    <li><strong>Type 2 - Outside city limits, same state and same ROC:</strong> Special Resolution at EGM + MGT-14 + INC-22. 7-15 days.</li>
                    <li><strong>Type 3 - Same state, different ROC jurisdiction:</strong> Special Resolution + MGT-14 + INC-23 (Regional Director) + INC-28 + INC-22. Newspaper notice mandatory. 30-45 days. Example: Pune to Mumbai in Maharashtra (2 different ROCs).</li>
                    <li><strong>Type 4 - Inter-state (most complex):</strong> Special Resolution + MOA alteration (Clause II) + INC-23 (RD/Central Govt) + INC-28 (both ROCs) + INC-22. Fresh COI issued. 60-90 days.</li>
                </ul>
                <p style="margin-top:16px;"><strong>Identifying the correct type is critical.</strong> Wrong scenario = wrong forms = rejection and delay. Our CS team determines your scenario type instantly as the first step.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Our Registered Office Change Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Scenario Identification</strong></td><td>Determine correct type (1-4) based on current and new address, ROC jurisdiction, and state</td></tr>
                        <tr><td><strong>Board and EGM Resolution Drafting</strong></td><td>ROC-compliant board resolution and special resolution (with explanatory statement under Section 102)</td></tr>
                        <tr><td><strong>Address Proof Documentation</strong></td><td>Complete documentation - lease/rent agreement, utility bill (not older than 2 months), NOC from owner</td></tr>
                        <tr><td><strong>MGT-14 Filing</strong></td><td>Special Resolution filing with ROC within 30 days (Types 2, 3, 4)</td></tr>
                        <tr><td><strong>INC-23 Regional Director Proceedings</strong></td><td>Application to RD with newspaper notice, creditor intimation, Chief Secretary intimation (Types 3, 4)</td></tr>
                        <tr><td><strong>INC-28 and INC-22 Filing</strong></td><td>RD order filing + new address notification to ROC within statutory deadlines</td></tr>
                        <tr><td><strong>Post-Approval Address Updates</strong></td><td>GST amendment, PAN/TAN update, bank KYC, EPFO/ESIC, trademark registry, and other regulatory updates</td></tr>

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
            <h2 class="section-title">Step-by-Step Procedure for Registered Office Change</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">The steps below cover the complete procedure. Not all steps apply to every type - Type 1 requires only Steps 1-2 and Step 8.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Identify Your Scenario Type (1-4)</h3><p class="step-description">Determine if the shift is within the same city, same state but outside city, same state different ROC, or inter-state. This determines which forms, approvals, and timelines apply. Wrong scenario = wrong forms = rejection.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Scenario type confirmed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Correct forms identified</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="20" width="18" height="12" rx="2" fill="#E8F5E9" stroke="#10B981" stroke-width="1"/><text x="37" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T1</text><rect x="50" y="20" width="18" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="59" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T2</text><rect x="28" y="38" width="18" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="37" y="47" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T3</text><rect x="50" y="38" width="18" height="12" rx="2" fill="#FDE8E8" stroke="#E8712C" stroke-width="1"/><text x="59" y="47" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">T4</text><text x="82" y="35" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">WHICH</text><text x="82" y="45" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">TYPE?</text></svg></div><span class="illustration-label">Type Set</span><span class="step-number-large">01</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Convene Board Meeting (7-Day Notice)</h3><p class="step-description">Pass Board Resolution approving the change of registered office and authorising the signatory for MCA filing. For Types 2-4, also authorise EGM notice.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Board Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Signatory authorised</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#14365F"/><text x="60" y="29" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">BOARD MEETING</text><line x1="25" y1="40" x2="95" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">7-Day Notice</text></svg></div><span class="illustration-label">Board Done</span><span class="step-number-large">02</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Pass Special Resolution at EGM (Types 2-4)</h3><p class="step-description">Issue EGM notice with 21 clear days' notice. Pass Special Resolution (75% majority) approving the shift. For Type 4, also approve MOA Clause II alteration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Special Resolution passed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 75% majority</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="25" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">EGM</text><line x1="30" y1="32" x2="90" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><rect x="30" y="40" width="60" height="16" rx="4" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><text x="60" y="51" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">75% PASSED</text></svg></div><span class="illustration-label">EGM Done</span><span class="step-number-large">03</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File MGT-14 Within 30 Days (Types 2-4)</h3><p class="step-description">File Form MGT-14 (Special Resolution) with ROC within 30 days. Attach EGM notice, certified Special Resolution, and attendance sheet.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MGT-14 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Within 30 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">MGT-14</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="6" fill="#E8F5E9" stroke="#10B981" stroke-width="1.2"/><path d="M57 52l2 2 4-4" stroke="#10B981" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">MGT-14 Done</span><span class="step-number-large">04</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Publish Newspaper Notice (Types 3-4)</h3><p class="step-description">At least 1 month before INC-23 filing: publish notice in English AND local language newspaper. Serve individual notice to creditors, debenture holders, depositors (21-day objection period).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Newspaper notice published</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Creditors intimated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="42" y="30" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">English</text><rect x="65" y="20" width="35" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="82" y="30" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Local</text><text x="60" y="55" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">1 MONTH BEFORE INC-23</text></svg></div><span class="illustration-label">Published</span><span class="step-number-large">05</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">File INC-23 with Regional Director (Types 3-4)</h3><p class="step-description">File application with all supporting documents - board resolution, special resolution, KMP declaration, newspaper proof, creditor list, Chief Secretary intimation. RD order typically within 15-60 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> INC-23 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> RD order awaited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="20" width="70" height="12" rx="3" fill="#E8712C"/><text x="60" y="29" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">INC-23</text><line x1="25" y1="40" x2="95" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">Regional Director</text><text x="60" y="67" font-size="5" fill="#14365F" font-weight="500" text-anchor="middle" font-family="Arial,sans-serif">15-60 days processing</text></svg></div><span class="illustration-label">INC-23 Filed</span><span class="step-number-large">06</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File INC-28 Within 30 Days (Types 3-4)</h3><p class="step-description">File certified copy of RD order with ROC in Form INC-28 within 30 days. For inter-state (Type 4), file with BOTH existing and new state ROC.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> INC-28 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Both ROCs (Type 4)</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#14365F"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">INC-28</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><text x="60" y="55" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial,sans-serif">RD Order to ROC</text></svg></div><span class="illustration-label">Order Filed</span><span class="step-number-large">07</span></div></div></div>
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">File Form INC-22 Within 30/60 Days</h3><p class="step-description">File INC-22 (Notice of Change of Address) with ROC. Within 30 days for Types 1-2; within 60 days of RD order for Types 3-4. Attach address proof documents (lease, utility bill not older than 2 months, NOC).</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> INC-22 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MCA records updated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="14" rx="3" fill="#E8712C"/><text x="60" y="28" font-size="6" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial,sans-serif">INC-22 FILED</text><line x1="30" y1="40" x2="90" y2="40" stroke="#14365F" stroke-width="1" opacity="0.3"/><circle cx="60" cy="52" r="8" fill="#E8F5E9" stroke="#10B981" stroke-width="1.5"/><path d="M56 52l3 3 5-5" stroke="#10B981" stroke-width="2" stroke-linecap="round"/><circle cx="95" cy="15" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M91 15l3 3 5-5" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Registered Office Change</h2>
            <div class="content-text">
                
                <p><strong>Common to All 4 Types:</strong></p>
                <ul>
                    <li>Board Resolution (certified copy)</li>
                    <li>Proof of title / Lease / Rent agreement of new premises (in company's name)</li>
                    <li>Utility bill not older than 2 months (electricity, gas, water, or property tax)</li>
                    <li>NOC from owner/occupant of new premises (if not owned by company)</li>
                    <li>DSC of authorised signatory</li>
                </ul>
                <p style="margin-top:16px;"><strong>Additional for Types 2, 3, 4:</strong></p>
                <ul>
                    <li>EGM Notice with Explanatory Statement (Section 102)</li>
                    <li>Special Resolution (certified true copy) + MGT-14</li>
                </ul>
                <p style="margin-top:16px;"><strong>Additional for Types 3 and 4:</strong></p>
                <ul>
                    <li>Newspaper publication notice (English + local language)</li>
                    <li>Individual notice to creditors / debenture holders / depositors</li>
                    <li>KMP declaration of no default in employee dues</li>
                    <li>Intimation to Chief Secretary of existing state</li>
                    <li>Certified copy of Regional Director's approval order (INC-28)</li>
                </ul>
                <p style="margin-top:12px;"><strong>Type 4 only:</strong> Altered MOA (Clause II - State changed)</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Mistakes and Penalties - How We Prevent Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Misidentifying Scenario Type</strong></td><td>Type 1 process used when shift is actually outside city limits (requires Special Resolution)</td><td>Our CS team verifies exact ROC jurisdiction boundaries before any filing. Scenario identification is our first deliverable.</td></tr>
                        <tr><td><strong>Utility Bill Older Than 2 Months</strong></td><td>Most common INC-22 rejection reason on MCA V3</td><td>We verify document freshness before filing. Utility bill must be current - not older than 2 months from filing date.</td></tr>
                        <tr><td><strong>INC-22 Filed After 30-Day Deadline</strong></td><td>INR 1,000 per day penalty under Section 12(8)</td><td>Deadline monitoring from Day 1 of board resolution. We file INC-22 within 7 days of resolution in Type 1 cases.</td></tr>
                        <tr><td><strong>Newspaper Notice Not Published 1 Month Before INC-23</strong></td><td>INC-23 rejected; entire timeline resets</td><td>We plan newspaper publication on Day 1 and track the mandatory 1-month lead time before INC-23 filing.</td></tr>

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
            <h2 class="section-title">Professional Fees for Registered Office Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees - Type 1 (Within Same City: Board Resolution + INC-22)</td><td class="table-amount">Starting from INR 2,999 (Exl GST and Govt. Charges)</td></tr>
                        <tr><td>Type 2 (Same State, Outside City: EGM + MGT-14 + INC-22)</td><td class="table-amount">Starting at INR 4,999</td></tr>
                        <tr><td>Type 3 (Different ROC Same State: INC-23 + INC-28 + INC-22)</td><td class="table-amount">Starting at INR 9,999</td></tr>
                        <tr><td>Type 4 (Inter-State: MOA + INC-23 + INC-28 + INC-22)</td><td class="table-amount">Starting at INR 14,999</td></tr>
                        <tr><td>Post-Approval Address Updates (GST, PAN, Bank KYC)</td><td class="table-amount">Starting at INR 2,999</td></tr>
                        <tr><td>Government Filing Fees (INC-22, MGT-14, INC-23, INC-28)</td><td class="table-amount">At actuals - MCA fee based on authorised capital</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Registered Office Change consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20registered%20office%20change.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Timeline for Registered Office Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Type 1 (Within Same City): Board Resolution + INC-22</td><td>3-7 working days</td></tr>
                        <tr><td>Type 2 (Same State, Outside City): EGM + MGT-14 + INC-22</td><td>7-15 working days</td></tr>
                        <tr><td>Type 3 (Different ROC): All filings + RD approval</td><td>30-45 working days</td></tr>
                        <tr><td>Type 4 (Inter-State): All filings + RD/CG + fresh COI</td><td>60-90 days</td></tr>
                        <tr><td>INC-22 filing deadline (Types 1-2)</td><td>Within 30 days of board resolution</td></tr>
                        <tr><td>INC-22 filing deadline (Types 3-4)</td><td>Within 60 days of RD order</td></tr>
                        <tr><td>MGT-14 filing deadline (Types 2-4)</td><td>Within 30 days of Special Resolution</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical:</strong> For Types 3 and 4, the newspaper notice must be published at least 1 month BEFORE filing INC-23 with the Regional Director. This is a mandatory lead time that must be planned from the start. Our CS team coordinates this on Day 1.</p>

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
            <h2 class="section-title">Why Choose Patron Accounting for Registered Office Change</h2>
        </div>
        <div class="features-grid">
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Instant Scenario Identification</h3><p>Wrong scenario = wrong forms = rejection and delay. We determine your type (1-4) instantly based on exact ROC jurisdiction boundaries.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div><h3>Complete Address Proof Preparation</h3><p>Missing or old utility bills cause INC-22 rejection. We verify document freshness and completeness before every filing.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><h3>Regional Director Proceedings</h3><p>INC-23 filings require meticulous documentation - newspaper notices, creditor intimation, Chief Secretary communication. We handle it all.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Deadline Monitoring</h3><p>30-day filing windows are strict. Penalties start on Day 31 at INR 1,000/day. We file all forms well within statutory deadlines.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg></div><h3>Post-Approval Update Support</h3><p>Comprehensive handholding beyond MCA filing - GST amendment, PAN/TAN update, bank KYC, EPFO/ESIC, trademark registry updates.</p></article>
            <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Pan-India Coverage</h3><p>500+ office changes filed. All 4 types handled. Offices in Pune, Mumbai, Delhi, Gurugram. Inter-state shifts managed across all states.</p></article>
        </div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">500+ Office Changes Filed - All 4 Scenario Types</h2>
            <div class="content-text">
                
                <p><strong>Patron Accounting LLP</strong> | 500+ Office Changes | 4.8/5 Rating | All 4 Types | INR 2,999 Starting | Pune, Mumbai, Delhi, Gurugram</p>
                <div class="highlight-box" style="margin-top:16px;"><p>Our CA and CS team has assisted hundreds of companies - from simple intra-city updates to complex inter-state shifts requiring Regional Director proceedings, MOA alteration, and filing with both state ROCs.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Company vs LLP Registered Office Change</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Company (Pvt Ltd / Public)</th><th>LLP</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Governing Law</strong></td><td>Section 12, Companies Act 2013</td><td>Section 13, LLP Act 2008</td></tr>
                        <tr><td><strong>Within Same City</strong></td><td>Board Resolution + INC-22</td><td>Partners Resolution + Form LLP-15</td></tr>
                        <tr><td><strong>Different City/State</strong></td><td>Special Resolution + MGT-14 + INC-22 (+ INC-23 if applicable)</td><td>Partners Resolution + LLP Agreement amendment + LLP-15</td></tr>
                        <tr><td><strong>Inter-State</strong></td><td>Special Resolution + MOA alteration + INC-23 + INC-28 + INC-22</td><td>LLP Agreement amendment + LLP-5 filing</td></tr>
                        <tr><td><strong>Fresh Certificate</strong></td><td>Yes - for inter-state shifts</td><td>Updated LLP certificate issued</td></tr>
                        <tr><td><strong>Newspaper Notice</strong></td><td>Required for Types 3 and 4</td><td>Not required</td></tr>

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
            <h2 class="section-title">Related Secretarial Services</h2>
            <div class="content-text">
                
                <ul>
                    <li><a href="/change-in-name-of-company">Change in Name of Company</a> - when rebranding alongside office shift</li>
                    <li><a href="/change-in-object-clause">Change in Object Clause</a> - if business activity changes accompany relocation</li>
                    <li><a href="/change-in-authorised-capital">Change in Authorised Capital</a> - common during growth-phase relocations</li>
                    <li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - ACTIVE COMPLIANT status is prerequisite for all ROC filings</li>
                    <li><a href="/gst-registration">GST Registration</a> - mandatory GST address amendment after INC-22 approval</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Registered Office Change</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Legal Provision</th><th>Details</th></tr></thead><tbody>
                        <tr><td><strong>Section 12, Companies Act 2013</strong></td><td>Every company must have registered office at all times. Change notified via INC-22 within 30 days. Penalty INR 1,000/day for default. Source: <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA Portal</a></td></tr>
                        <tr><td><strong>Section 13, Companies Act 2013</strong></td><td>Alteration of MOA - required for inter-state shifts (Clause II - State Clause).</td></tr>
                        <tr><td><strong>Rules 27-31, Companies (Incorporation) Rules 2014</strong></td><td>Prescribe procedure for INC-22 (Rule 27), INC-23 (Rule 28-30), and INC-28 filing requirements.</td></tr>
                        <tr><td><strong>Section 12(8) - Penalty</strong></td><td>INR 1,000 per day of default for not filing INC-22 within deadline. Both company and officers liable.</td></tr>
                        <tr><td><strong>Section 454 - Repeated Default</strong></td><td>Non-payment of adjudicated penalty: INR 25,000 to INR 5,00,000 on company; officer: imprisonment up to 6 months or fine.</td></tr>
                        <tr><td><strong>Section 248 - Strike Off</strong></td><td>ROC can initiate strike-off if company persistently fails to maintain registered office or respond to communications.</td></tr>
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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Change in Registered Office</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about changing your company registered office, INC-22 filing, inter-state shifts, and penalties.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Change in Registered Office'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the deadline to file Form INC-22 after changing the registered office?</h3>
                        <div class="faq-expanded__a"><p>Form INC-22 must be filed with the ROC within 30 days of the board resolution (for Type 1 and 2 changes) or within 60 days of the Regional Director's confirmation order (for Type 3 and 4 changes). Late filing attracts a penalty of INR 1,000 per day of default under Section 12(8) of the Companies Act, 2013.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is shareholder approval needed for every registered office change?</h3>
                        <div class="faq-expanded__a"><p>No. Only if the registered office is being shifted outside the local limits of the current city - to a new city in the same state or to another state - is shareholder approval (Special Resolution at EGM with 75% majority) required. For a shift within the same city's local municipal limits, only a Board Resolution is needed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What documents are mandatory with Form INC-22?</h3>
                        <div class="faq-expanded__a"><p>Form INC-22 requires: proof of registered office address (title document, notarised lease/rent agreement in company's name with latest rent receipt, OR authorization from owner with proof of ownership), and a utility bill not older than 2 months (electricity, gas, water, or property tax). Altered MOA additionally required for inter-state shifts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How long does an inter-state registered office change take?</h3>
                        <div class="faq-expanded__a"><p>An inter-state change (Type 4) typically takes 60 to 90 days from the board meeting to obtaining the fresh Certificate of Incorporation from the new state's ROC. Key time drivers: 21-day EGM notice period, 1-month newspaper notice wait before INC-23, and Regional Director's 60-day processing window.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Does changing the registered office to a different state affect the CIN?</h3>
                        <div class="faq-expanded__a"><p>Yes. The CIN (Corporate Identity Number) encodes the state of registration. When a company shifts to another state and the ROC jurisdiction changes, a new CIN is issued reflecting the new state code. For shifts within the same state, the CIN does not change.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Is newspaper notice required for every registered office change?</h3>
                        <div class="faq-expanded__a"><p>No. Newspaper notice is required only for Type 3 (different ROC within same state) and Type 4 (inter-state) changes. For Type 1 (within city) and Type 2 (outside city, same ROC), no newspaper publication is required. Notice must be in English and local language, at least 1 month before INC-23.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a company use a virtual office or co-working space as its registered office?</h3>
                        <div class="faq-expanded__a"><p>Yes. A virtual office or co-working space can be the registered office provided the company can receive official communications there and has the required address proof - a valid rent or service agreement in the company's name and a utility bill not older than 2 months.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What happens if I fail to notify the ROC about a registered office change?</h3>
                        <div class="faq-expanded__a"><p>Failure to file INC-22 within the prescribed deadline attracts a penalty of INR 1,000 per day of default on the company and every officer in default. Prolonged non-compliance can also lead to the ROC initiating strike-off under Section 248 of the Companies Act, 2013.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>INC-22 deadline:</strong> Within 30 days of board resolution (Types 1-2) or 60 days of RD order (Types 3-4). Penalty: INR 1,000/day.</p>
                <p><strong>When is Special Resolution needed?</strong> For any shift outside local city limits (Types 2, 3, 4). Not needed for Type 1 (within same city).</p>
                <p><strong>When is newspaper notice needed?</strong> Only for Types 3 (different ROC same state) and 4 (inter-state). Published 1 month before INC-23.</p>
                <p><strong>Does CIN change?</strong> Only for inter-state shifts (Type 4). Fresh COI issued with new state code in CIN.</p>
                <p><strong>Can virtual office be registered office?</strong> Yes - with valid rent/service agreement and utility bill not older than 2 months.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">30-Day Filing Window is Strict - Penalties Start on Day 31</h2>
            <div class="content-text">
                
                <p><strong>Form INC-22 must be filed within 30 days of the board resolution (Types 1-2) or 60 days of the RD order (Types 3-4). There is no grace period.</strong></p>
                <ul>
                    <li><strong>Penalty:</strong> INR 1,000 per day of default on company AND every officer in default (Section 12(8))</li>
                    <li><strong>Utility bill must be current:</strong> Not older than 2 months from filing date - most common rejection reason</li>
                    <li><strong>Newspaper notice lead time:</strong> Must be published at least 1 month before INC-23 filing (Types 3-4)</li>
                    <li><strong>Strike-off risk:</strong> Persistent failure to maintain registered office can trigger ROC-initiated strike-off under Section 248</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Change Your Registered Office - Starting at INR 2,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Change in registered office is one of the most frequently required secretarial services - triggered by lease expiry, expansion, cost optimisation, or inter-state relocation. The procedure varies significantly: simple intra-city change requires only board resolution and INC-22, while inter-state shift involves EGM, MOA alteration, Regional Director proceedings, and filing with both state ROCs.</p>
                <p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA and CS team handles all four types end-to-end - from scenario identification and resolution drafting to newspaper notices, INC-23 with Regional Director, and post-approval GST and PAN updates.</p>
                <p style="color:rgba(255,255,255,0.9);"><strong>Starting at INR 2,999 (Exl GST and Govt. Charges) | 500+ Office Changes | All 4 Types | Free Consultation</strong></p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20registered%20office%20change.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Registered%20Office%20Change&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20change%20my%20company%20registered%20office.%0APlease%20help.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Registered Office Change Services - Available in Your City</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides expert secretarial services for registered office changes across major cities in India.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/change-in-registered-office/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/change-in-registered-office/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/change-in-registered-office/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/change-in-registered-office/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Secretarial Services</div><div class="pa-block-sub">Complete company compliance and corporate change support</div><div class="pa-cross-grid"><a href="/change-in-name-of-company" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change in Company Name</div><div class="pa-card-sub">India</div></div></a><a href="/change-in-object-clause" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change in Object Clause</div><div class="pa-card-sub">India</div></div></a><a href="/change-in-authorised-capital" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Change in Authorised Capital</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> January 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page covers Change in Registered Office under Section 12 and 13, Companies Act 2013. Rules 27-31, Companies (Incorporation) Rules 2014. Content reviewed annually.</p>
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
