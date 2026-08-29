

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
    <title>Convert Partnership to Pvt Ltd - Process, SPICe+ & Documents</title>
    <meta name="description" content="Convert partnership firm to private limited company with Form URC-1 on MCA portal. Starting at INR 3,999. CA/CS team.">
    <link rel="canonical" href="/convert-partnership-to-pvt-ltd-company">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Convert Partnership to Pvt Ltd - Process, SPICe+ & Documents">
    <meta property="og:description" content="Convert partnership firm to private limited company with Form URC-1 on MCA portal. Starting at INR 3,999. CA/CS team.">
    <meta property="og:url" content="/convert-partnership-to-pvt-ltd-company">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Convert Partnership to Pvt Ltd - Process, SPICe+ & Documents">
    <meta name="twitter:description" content="Convert partnership firm to private limited company with Form URC-1 on MCA portal. Starting at INR 3,999. CA/CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Convert Partnership Firm to PVT LTD in India Guide",
          "description": "Convert partnership firm to private limited company with Form URC-1 on MCA portal. Starting at INR 3,999. CA/CS team.",
          "url": "https://www.patronaccounting.com/convert-partnership-to-pvt-ltd-company",
          "serviceType": "Convert Partnership Firm to PVT LTD in India Guide",
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
            "url": "https://www.patronaccounting.com/convert-partnership-to-pvt-ltd-company",
            "price": "3999"
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
              "name": "Convert Partnership Firm to PVT LTD in India Guide",
              "item": "https://www.patronaccounting.com/convert-partnership-to-pvt-ltd-company"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the procedure to convert a partnership firm to Pvt Ltd?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 366: (1) unanimous partner consent, (2) DIN and DSC, (3) SPICe+ Part A name reservation, (4) URC-2 newspaper notice (21-day wait), (5) CA-certified Statement of A&L (15-day freshness), (6) secured creditor NOCs, (7) URC-1 + SPICe+ + MOA + AOA within 60 days, (8) Certificate of Incorporation, (9) post-conversion updates (PAN, GST, bank)."
              }
            },
            {
              "@type": "Question",
              "name": "Is newspaper advertisement mandatory for partnership to Pvt Ltd conversion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 374(b) mandatorily requires Form URC-2 in 1 English + 1 vernacular newspaper in firm's district. 21 clear days must elapse before URC-1 can be filed."
              }
            },
            {
              "@type": "Question",
              "name": "What are the tax benefits under Section 47(xiii)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No capital gains tax on conversion if ALL 4 conditions met: (a) all assets/liabilities transfer, (b) partners become shareholders in proportion of capital accounts, (c) no consideration other than shares, (d) partners retain 50%+ voting power for 5 years. Breach triggers retrospective tax under Section 47A(3)."
              }
            },
            {
              "@type": "Question",
              "name": "Can an unregistered partnership firm be converted to Pvt Ltd?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Section 366 does not mandate prior registration under Partnership Act 1932. Unregistered firms file an affidavit confirming status. Registered firms attach their registration certificate."
              }
            },
            {
              "@type": "Question",
              "name": "What is the deadline for filing Form URC-1?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Within 60 days of name reservation/approval under Rule 3. This window must accommodate the 21-day newspaper notice. If URC-1 not filed within 60 days, name lapses and process restarts."
              }
            },
            {
              "@type": "Question",
              "name": "What forms are required for partnership to Pvt Ltd conversion?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SPICe+ Part A (name), URC-2 (newspaper ad), URC-1 (conversion application), SPICe+ Part B (incorporation), INC-33 (MOA), INC-34 (AOA), INC-9 (declarations), AGILE-PRO (PAN/TAN/GST)."
              }
            },
            {
              "@type": "Question",
              "name": "How long does partnership to Pvt Ltd conversion take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "30-35 working days (no secured creditors) to 40-50 working days (with bank NOCs). The 21-day newspaper notice is the fixed minimum wait time."
              }
            },
            {
              "@type": "Question",
              "name": "Partnership firm ko Pvt Ltd mein kaise convert karein?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 366 ke under: partners ki unanimous consent, DIN aur DSC, SPICe+ Part A se naam reserve, 2 newspapers mein URC-2 notice (21 din wait), CA certified A&L, creditor NOCs, phir URC-1 + SPICe+ 60 din mein file karein. Section 47(xiii) ke under capital gains exempt. INR 3,999 se starting. Quick Answers Which form? URC-1 is the primary conversion form, linked with SPICe+ Part B, INC-33, INC-34, AGILE-PRO. Capital gains tax? Exempt under Section 47(xiii) IT Act if 4 conditions met for 5 years. How long? 30-35 working days (simple) to 40-50 days (with bank NOCs). 21-day newspaper notice is fixed minimum. URC-1 deadline? 60 days from name approval. Hard deadline - no extensions."
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
                        Convert Partnership Firm to Private Limited Company in India: Complete Process for 2026
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Section 366 Conversion:</span> Governed by Section 366 of Companies Act 2013. URC-1 filed within 60 days of name approval, linked with SPICe+ Part B.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Tax-Neutral Under S.47(xiii):</span> No capital gains tax on asset transfer if 4 conditions maintained for 5 years. Partners retain 50%+ voting power.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>21-Day Public Notice:</span> Mandatory Form URC-2 newspaper advertisement in English + vernacular with 21-day objection window before URC-1 filing.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>From INR 3,999:</span> Expert CA and CS team manages complete conversion - DIN, DSC, SPICe+, newspaper notice, URC-1, MOA, AOA, and post-conversion updates.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">300+ business conversions | 5,000+ clients served | Offices in Mumbai, Delhi, Pune, Bangalore</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Partnership%20to%20Pvt%20Ltd%20Enquiry&body=Hello%20Patron%20Accounting.%0A%0APlease%20share%20details%20for%20partnership%20to%20Pvt%20Ltd%20conversion.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20convert%20my%20partnership%20firm%20to%20a%20Private%20Limited%20Company.%20Please%20help." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Convert Partnership to Pvt Ltd',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'convert-partnership-to-pvt-ltd-company', 'label' => 'Partnership to Pvt Ltd', 'selected' => true, 'disabled' => false],
                            ['value' => 'private-limited-company-registration-in-india', 'label' => 'Pvt Ltd Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'convert-partnership-to-llp', 'label' => 'Partnership to LLP', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-compliance', 'label' => 'Pvt Ltd Compliance', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">3-partner trading firm with two bank loans. Patron obtained both bank NOCs, handled newspaper notices in our district, and filed complete URC-1 package within 45 days. Incorporated without a single objection.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram S.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner turned Director, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Converted our CA practice partnership to Pvt Ltd for equity fundraising. Patron ensured all Section 47(xiii) conditions were met - proportionate shares, no cash consideration, 50% lock-in structured properly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Anil K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Senior Partner, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Unregistered partnership firm converted to Pvt Ltd. Patron handled the affidavit for unregistered status, newspaper notices, and all MCA filings. Process completed in 33 working days.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#10B981;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RS</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh S.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Delhi Manufacturing</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron flagged that our 60-day window was tight because bank NOC was delayed. They fast-tracked the A&L certification and filed URC-1 with 5 days to spare. Excellent deadline management.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya D.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Partner, Bangalore Services Firm</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 150+ partnership firms that converted to Pvt Ltd with Patron Accounting.</p>
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
            <a href="#overview-section" class="toc-btn active">Overview</a><a href="#what-section" class="toc-btn">What Is It</a><a href="#who-section" class="toc-btn">Prerequisites</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Firm vs Pvt Ltd</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Partnership to Private Limited Conversion - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Convert Partnership to Pvt Ltd Services at a Glance</strong></p>
                    <p>Converting a partnership firm to Pvt Ltd under Section 366 requires: unanimous partner consent, DIN and DSC, SPICe+ name reservation, Form URC-2 newspaper notice (21-day wait), Form URC-1 filing within 60 days of name approval, linked SPICe+ Part B + INC-33 + INC-34. Capital gains exempt under Section 47(xiii) IT Act if 4 conditions met for 5 years. Starting at INR 3,999.</p>
                </div>
                <p>A growing partnership firm typically converts to a private limited company when it needs to raise equity capital, issue ESOPs, establish greater credibility, or protect partners from unlimited personal liability. The private limited company structure provides all of these - along with perpetual succession, share transferability, and access to institutional finance.</p>
                <p>The conversion involves one distinctive additional step compared to a fresh incorporation: a mandatory 21-day public notice period via newspaper advertisement inviting objections. Section 366 of the Companies Act 2013 ensures the firm's business, assets, contracts, and obligations transfer to the new company without disruption.</p>
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
                <h2 class="section-title">What is Partnership to Private Limited Conversion?</h2>
                <div class="content-text what-is-definition">
                    
                    <p><strong>Partnership to private limited company conversion</strong> is the formal legal process under Section 366 of the Companies Act 2013 by which an existing partnership firm transforms into a private limited company - gaining separate legal entity status, limited liability, perpetual succession, and equity fund-raising capability - with all assets, liabilities, and contracts vesting in the company on the Certificate of Incorporation date.</p>
<p>There is no direct provision under the Indian Partnership Act 1932 for this conversion. Section 366 of the Companies Act 2013, read with Companies (Authorised to Register) Rules 2014, provides the statutory mechanism.</p>
<p><strong>External authority:</strong> <a href="https://www.indiacode.nic.in/handle/123456789/2054" target="_blank" rel="noopener">Companies Act 2013 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a></p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Convert Partnership to Pvt Ltd:</strong></p>
                    <p><strong>Section 366</strong> - Companies Act 2013 provision authorizing partnership firms to register as companies.</p>
<p><strong>Form URC-1</strong> - Primary conversion application filed with ROC after 21-day newspaper notice, within 60 days of name approval.</p>
<p><strong>Form URC-2</strong> - Newspaper advertisement format. English + vernacular, 21 clear days before URC-1.</p>
<p><strong>Section 47(xiii)</strong> - IT Act 1961: capital gains exempt on conversion if 4 conditions met including 50% voting power for 5 years.</p>
<p><strong>SPICe+</strong> - Integrated MCA form: Part A (name) + Part B (incorporation), linked with URC-1.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <rect x="35" y="20" width="130" height="130" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
<!-- Partnership box -->
<rect x="42" y="40" width="48" height="28" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="66" y="52" font-size="6" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">PARTNER</text>
<text x="66" y="62" font-size="6" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">SHIP</text>
<!-- Arrow -->
<path d="M95 55l15 0" stroke="#14365F" stroke-width="2.5" stroke-linecap="round" marker-end="url(#arr2)"/>
<defs><marker id="arr2" markerWidth="8" markerHeight="6" refX="8" refY="3" orient="auto"><polygon points="0 0, 8 3, 0 6" fill="#14365F"/></marker></defs>
<!-- Pvt Ltd box -->
<rect x="112" y="40" width="48" height="28" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<text x="136" y="52" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">PVT</text>
<text x="136" y="62" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">LTD</text>
<!-- URC-1 badge -->
<rect x="42" y="82" width="40" height="20" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
<text x="62" y="95" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">URC-1</text>
<!-- S.47 badge -->
<rect x="92" y="82" width="42" height="20" rx="4" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/>
<text x="113" y="95" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">S.47(xiii)</text>
<!-- 60 DAYS -->
<rect x="55" y="118" width="50" height="18" rx="4" fill="#FEE2E2" stroke="#EF4444" stroke-width="1"/>
<text x="80" y="130" font-size="7" fill="#EF4444" font-weight="700" text-anchor="middle" font-family="Arial">60 DAYS</text>
<!-- Verified -->
<circle cx="152" cy="118" r="12" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
<path d="M146 118l4 4 6-6" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Convert Partnership to Pvt Ltd</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Section 366</span>
                        <strong>URC-1 + SPICe+</strong>
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
            <h2 class="section-title">Prerequisites for Partnership to Pvt Ltd Conversion</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Minimum 2 partners</strong> must agree to become shareholders and directors of the new Pvt Ltd</li>
<li><strong>Unanimous consent</strong> of all existing partners required for conversion</li>
<li>All partners must become shareholders - shares allotted in <strong>same proportion as capital account balances</strong> - no new shareholders during conversion</li>
<li>All proposed directors must obtain <strong>DIN</strong> from MCA</li>
<li>All proposed directors and subscriber signatories must have <strong>valid Class 3 DSC</strong></li>
<li>Written <strong>NOC from all secured creditors</strong> (banks, NBFCs)</li>
<li>Firm must <strong>not have revalued assets</strong> in preceding 3 financial years</li>
<li>All <strong>pending income tax returns</strong> of the firm must be filed</li>
<li>Partners must not be <strong>disqualified under Section 164</strong></li>
<li>Both <strong>registered and unregistered</strong> partnership firms eligible (unregistered: affidavit required)</li>
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
            <h2 class="section-title">Patron Accounting's Partnership to Pvt Ltd Conversion Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Pre-Conversion Eligibility Review</td><td>Partner count, capital structure, secured creditor mapping, DIN/DSC status verification</td></tr>
<tr><td>DIN and DSC Procurement</td><td>Form DIR-3 for all proposed directors; Class 3 DSC procurement</td></tr>
<tr><td>Name Reservation (SPICe+ Part A)</td><td>File on MCA portal; firm name + 'Private Limited' suffix</td></tr>
<tr><td>Newspaper Advertisement (URC-2)</td><td>Publish in English + vernacular newspaper in firm's district; manage 21-day notice period</td></tr>
<tr><td>URC-1 + SPICe+ + MOA/AOA Filing</td><td>Complete linked form filing within 60 days with CA-certified Statement of A&L (15-day freshness)</td></tr>
<tr><td>Post-Conversion Updates</td><td>PAN name update, GST amendment, bank KYC, sectoral licence re-applications, INC-20A filing</td></tr>

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
            <h2 class="section-title">10-Step Partnership to Pvt Ltd Conversion Procedure</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Under Section 366 Companies Act 2013. 21-day newspaper notice mandatory. URC-1 within 60 days of name approval. Capital gains exempt under Section 47(xiii) IT Act if 4 conditions met for 5 years.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Partners' Resolution and Unanimous Consent</h3><p class="step-description">Hold formal meeting. Pass resolution approving conversion, authorizing partners to sign all documents, dividing capital into shares in same proportion as capital accounts, approving proposed name and draft MOA/AOA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All partners consent</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Resolution passed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="40" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/><text x="60" y="44" font-size="6" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">CONSENT</text></svg></div><span class="illustration-label">Consent Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Obtain DIN and Class 3 DSC</h3><p class="step-description">All partners becoming directors must get DIN via DIR-3 or SPICe+ Part B. All directors and subscribers need Class 3 DSC. Minimum 2 directors; at least 1 Indian resident.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DIN obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>DSC procured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="42" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="45" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DIN</text><circle cx="80" cy="42" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="80" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text></svg></div><span class="illustration-label">IDs Ready</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reserve Company Name via SPICe+ Part A</h3><p class="step-description">File on MCA V3 portal. Company name = firm name + 'Private Limited'. Name valid for 20 days. URC-2 newspaper notice must be published and URC-1 filed within 60 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name approved</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-day validity</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="36" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text><text x="60" y="48" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">PART A</text></svg></div><span class="illustration-label">Name OK</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Publish Newspaper Advertisement (URC-2)</h3><p class="step-description">Publish in 1 English + 1 vernacular daily in firm's district. Invites objections within 21 clear days. URC-1 cannot be filed until 21 days elapse. Save newspaper copies.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Ad published</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>21-day clock started</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="30" width="50" height="18" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="42" font-size="7" fill="#E8712C" font-weight="700" text-anchor="middle" font-family="Arial">21 DAYS</text></svg></div><span class="illustration-label">Ad Published</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Prepare Statement of Assets and Liabilities</h3><p class="step-description">CA-certified statement of the partnership firm. Must be not more than 15 days old from URC-1 filing date. This is a hard MCA requirement - statements older than 15 days are rejected.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>A&L certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>15-day freshness</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="42" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="40" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">A&L</text><text x="60" y="50" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">15 DAYS</text></svg></div><span class="illustration-label">A&L Ready</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Obtain Secured Creditor NOCs</h3><p class="step-description">Written NOC from every secured creditor (banks, NBFCs). If no secured creditors, prepare signed declaration. Run parallel with 21-day newspaper notice period.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>NOCs obtained</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Creditors cleared</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M42 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M68 42l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">NOCs Done</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File URC-1 + SPICe+ + MOA + AOA (Within 60 Days)</h3><p class="step-description">After 21 days from newspaper, within 60 days of name approval: File URC-1 + SPICe+ Part B + INC-33 (MOA) + INC-34 (AOA) + INC-9 + AGILE-PRO. Attach newspaper copies, consent affidavits, partnership deed, A&L, NOCs, ITR.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>URC-1 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All forms linked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="42" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 42l8 8 16-16" stroke="#25D366" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="80" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">URC-1 FILED</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">ROC Review and Certificate of Incorporation</h3><p class="step-description">ROC reviews within 30 days of newspaper publication. On approval, Certificate of Incorporation issued. Partnership firm dissolved. All assets, liabilities, contracts vest in new company.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>COI issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Firm dissolved</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><text x="60" y="38" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">INC-11</text><text x="60" y="52" font-size="7" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">PVT LTD</text></svg></div><span class="illustration-label">Converted</span><span class="step-number-large">08</span></div></div></div>


        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Partnership to Pvt Ltd Conversion</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Document</th><th>Purpose</th></tr></thead><tbody>
<tr><td>Partnership Deed (original + amendments)</td><td>Foundation document for conversion application</td></tr>
<tr><td>Registration Certificate (if registered firm)</td><td>Or affidavit confirming unregistered status</td></tr>
<tr><td>Statement of Assets and Liabilities (CA-certified)</td><td>Not more than 15 days old from URC-1 filing date</td></tr>
<tr><td>Latest Income Tax Return acknowledgement</td><td>Proof of tax compliance</td></tr>
<tr><td>Secured creditor NOCs</td><td>Written NOC from banks/NBFCs (or nil declaration)</td></tr>
<tr><td>Partners' resolution + consent affidavits</td><td>Unanimous approval for conversion</td></tr>
<tr><td>Newspaper advertisements (URC-2)</td><td>English + vernacular copies with 21-day notice</td></tr>
<tr><td>DIN + DSC for all proposed directors</td><td>Mandatory for MCA portal filing</td></tr>
<tr><td>Draft MOA (INC-33) and AOA (INC-34)</td><td>Charter documents for new Pvt Ltd</td></tr>
<tr><td>Proof of Registered Office</td><td>Utility bill + owner NOC + rent agreement</td></tr>
</tbody></table></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>21-day newspaper notice timing</td><td>Notice must be in district-specific papers, not national dailies. ROC considers objections for 30 days.</td><td>We identify district-specific newspapers and pre-obtain secured creditor NOCs so no legitimate objections arise.</td></tr>
<tr><td>Statement of A&L 15-day freshness</td><td>Must be CA-certified not more than 15 days before URC-1 filing</td><td>We coordinate URC-1 filing within 10 days of Statement preparation, building in 5-day buffer.</td></tr>
<tr><td>Section 47(xiii) 5-year lock-in risk</td><td>Partners must maintain 50%+ voting power for 5 years or retrospective capital gains tax applies</td><td>We document exact shareholding at conversion and advise on permissible dilution timelines before any fundraising.</td></tr>
<tr><td>60-day URC-1 deadline after name approval</td><td>21-day notice + document prep must fit within 60 days</td><td>We begin newspaper notice within 24 hours of name approval to maximise document preparation time.</td></tr>

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
            <h2 class="section-title">Partnership to Pvt Ltd Conversion Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Plan (2-partner firm, same name, no secured creditors)</td><td>INR 3,999 + GST</td></tr>
<tr><td>Standard Plan (up to 4 partners, name change, up to 2 secured creditors)</td><td>INR 5,999 + GST</td></tr>
<tr><td>Advanced Plan (5+ partners or 3+ secured creditors or regulated sector)</td><td>INR 9,999 + GST</td></tr>
<tr><td>Government Filing Fees (SPICe+, URC-1, stamp duty on MOA/AOA)</td><td>Varies by state and authorised capital</td></tr>
<tr><td>Newspaper Advertisement Costs</td><td>INR 2,000 to INR 8,000 (varies by city)</td></tr>
<tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 3,999 (Exl GST, Govt. Fees and Stamp Duty)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Convert Partnership to Pvt Ltd consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20partnership%20to%20Pvt%20Ltd%20conversion%20service." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Partnership to Pvt Ltd Conversion Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DIN + DSC for all directors</td><td>2-3 working days (parallel)</td></tr>
<tr><td>Name reservation via SPICe+ Part A</td><td>1-3 working days</td></tr>
<tr><td>Newspaper advertisement publication</td><td>1 day</td></tr>
<tr><td>Mandatory 21-day newspaper notice</td><td>21 clear days (non-negotiable)</td></tr>
<tr><td>Statement of A&L + Secured creditor NOCs</td><td>7-14 working days (parallel with notice)</td></tr>
<tr><td>URC-1 + SPICe+ filing</td><td>2-3 working days after documents ready</td></tr>
<tr><td>ROC review and Certificate of Incorporation</td><td>5-10 working days after URC-1 filing</td></tr>
<tr><td>Total (no secured creditors)</td><td>30-35 working days</td></tr>
<tr><td>Total (with bank NOC required)</td><td>40-50 working days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Critical: 60-Day Hard Deadline.</strong> URC-1 must be filed within 60 days of name approval. The 21-day newspaper notice must be completed within this window. If URC-1 is not filed in time, name lapses and process restarts - wasting newspaper costs and adding 3-6 weeks delay.</p>

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
            <h2 class="section-title">Benefits of Converting Partnership to Private Limited</h2>
        </div>
        <div class="features-grid">
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Limited Liability</h3><p class="feature-text">Shareholders' personal assets fully protected from company debts - the principal reason for conversion.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Equity Fund Raising</h3><p class="feature-text">Issue shares to angel investors, VCs, PEs. Issue ESOPs. Enable convertible instruments - not available to partnerships.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="feature-title">Tax-Neutral Conversion</h3><p class="feature-text">No capital gains tax under Section 47(xiii) IT Act if 4 conditions met and partners retain 50%+ for 5 years.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3 class="feature-title">Perpetual Succession</h3><p class="feature-text">Company continues regardless of shareholder changes or death of founders - unlike partnerships that dissolve.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3 class="feature-title">Loss Carry Forward</h3><p class="feature-text">Section 72A(6) IT Act allows carry forward of accumulated losses and unabsorbed depreciation to successor company.</p></article>
<article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><h3 class="feature-title">Business Credibility</h3><p class="feature-text">Pvt Ltd status improves brand perception, vendor empanelment, government tender eligibility, and institutional trust.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>5,000+ Clients Served | 300+ Business Conversions | 150+ Partnership to Pvt Ltd | Offices in Mumbai, Delhi, Pune, Bangalore | 25+ CA and CS Professionals</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Partnership Firm vs Private Limited Company</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table class="table-comparison">
                    <thead><tr><th>Parameter</th><th>Partnership Firm</th><th>Private Limited Company</th></tr></thead>
                    <tbody>
                        <tr><td>Legal Status</td><td>Not a separate legal entity</td><td>Separate legal entity - body corporate</td></tr>
<tr><td>Liability</td><td>Unlimited personal liability</td><td>Limited to unpaid share capital</td></tr>
<tr><td>Perpetual Succession</td><td>Dissolves on partner exit or death</td><td>Continues regardless of ownership changes</td></tr>
<tr><td>Equity Fund Raising</td><td>Not possible</td><td>Angel, VC, PE, ESOPs available</td></tr>
<tr><td>FDI</td><td>Not permitted</td><td>Permitted under FEMA/FDI policy</td></tr>
<tr><td>Tax on Conversion</td><td>N/A</td><td>Exempt under Section 47(xiii) if 4 conditions met</td></tr>
<tr><td>Annual Compliance</td><td>IT return; audit if turnover > INR 1 crore</td><td>ROC filings (AOC-4, MGT-7A); mandatory audit</td></tr>
<tr><td>ESOP Issuance</td><td>Not possible</td><td>Available under Companies Act 2013</td></tr>

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
                
                <ul>
<li><a href="/private-limited-company-registration">Private Limited Company Registration</a> - fresh incorporation</li>
<li><a href="/partnership-firm-registration">Partnership Firm Registration</a> - new firm registration</li>
<li><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - annual ROC filings</li>
<li><a href="/convert-partnership-to-llp">Convert Partnership to LLP</a> - alternative conversion route</li>
<li><a href="/llp-incorporation">LLP Registration in India</a> - new LLP incorporation</li>
<li><a href="/dsc-registration">DSC Registration</a> - Digital Signature Certificate</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework - Partnership to Pvt Ltd Conversion</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper"><table><thead><tr><th>Provision</th><th>Relevance</th></tr></thead><tbody>
<tr><td>Section 366, Companies Act 2013</td><td>Enables partnership firms to register as companies. Primary statutory basis for conversion.</td></tr>
<tr><td>Section 374(b), Companies Act 2013</td><td>Mandates Form URC-2 newspaper advertisement with 21-day objection window before URC-1 filing.</td></tr>
<tr><td>Rule 3, Companies (Authorised to Register) Rules 2014</td><td>Prescribes Form URC-1, mandatory attachments, and 60-day filing deadline from name approval.</td></tr>
<tr><td>Section 366(2)</td><td>Firms with fewer than 7 members register as private companies.</td></tr>
<tr><td>Section 47(xiii), IT Act 1961</td><td>Capital gains exempt if: all assets transfer, partners become shareholders proportionately, no other consideration, 50% voting power for 5 years.</td></tr>
<tr><td>Section 47A(3), IT Act 1961</td><td>If any Section 47(xiii) condition violated, capital gains taxed in year of breach.</td></tr>
<tr><td>Section 72A(6), IT Act 1961</td><td>Carry forward of losses and unabsorbed depreciation to successor company.</td></tr>
<tr><td>Indian Partnership Act 1932</td><td>Firm dissolved on conversion; removed from Register of Firms on COI presentation.</td></tr>
</tbody></table></div>
<p style="margin-top:16px;"><strong>External Authority Links:</strong> <a href="https://www.indiacode.nic.in/handle/123456789/2054" target="_blank" rel="noopener">Companies Act 2013 - India Code</a> | <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA V3 Portal</a> | <a href="https://www.mca.gov.in/Ministry/pdf/URC-1_help.pdf" target="_blank" rel="noopener">MCA URC-1 Instruction Kit</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Partnership to Pvt Ltd Conversion</h2>
                    <p class="faq-expanded__lead">Get answers about Section 366 procedure, Form URC-1, newspaper notice, tax benefits, documents, and timelines.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Partnership to Pvt Ltd Conversion'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the procedure to convert a partnership firm to Pvt Ltd?</h3>
                        <div class="faq-expanded__a"><p>Under Section 366: (1) unanimous partner consent, (2) DIN and DSC, (3) SPICe+ Part A name reservation, (4) URC-2 newspaper notice (21-day wait), (5) CA-certified Statement of A&L (15-day freshness), (6) secured creditor NOCs, (7) URC-1 + SPICe+ + MOA + AOA within 60 days, (8) Certificate of Incorporation, (9) post-conversion updates (PAN, GST, bank).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Is newspaper advertisement mandatory for partnership to Pvt Ltd conversion?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 374(b) mandatorily requires Form URC-2 in 1 English + 1 vernacular newspaper in firm's district. 21 clear days must elapse before URC-1 can be filed.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What are the tax benefits under Section 47(xiii)?</h3>
                        <div class="faq-expanded__a"><p>No capital gains tax on conversion if ALL 4 conditions met: (a) all assets/liabilities transfer, (b) partners become shareholders in proportion of capital accounts, (c) no consideration other than shares, (d) partners retain 50%+ voting power for 5 years. Breach triggers retrospective tax under Section 47A(3).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can an unregistered partnership firm be converted to Pvt Ltd?</h3>
                        <div class="faq-expanded__a"><p>Yes. Section 366 does not mandate prior registration under Partnership Act 1932. Unregistered firms file an affidavit confirming status. Registered firms attach their registration certificate.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the deadline for filing Form URC-1?</h3>
                        <div class="faq-expanded__a"><p>Within 60 days of name reservation/approval under Rule 3. This window must accommodate the 21-day newspaper notice. If URC-1 not filed within 60 days, name lapses and process restarts.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What forms are required for partnership to Pvt Ltd conversion?</h3>
                        <div class="faq-expanded__a"><p>SPICe+ Part A (name), URC-2 (newspaper ad), URC-1 (conversion application), SPICe+ Part B (incorporation), INC-33 (MOA), INC-34 (AOA), INC-9 (declarations), AGILE-PRO (PAN/TAN/GST).</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long does partnership to Pvt Ltd conversion take?</h3>
                        <div class="faq-expanded__a"><p>30-35 working days (no secured creditors) to 40-50 working days (with bank NOCs). The 21-day newspaper notice is the fixed minimum wait time.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Partnership firm ko Pvt Ltd mein kaise convert karein?</h3>
                        <div class="faq-expanded__a"><p>Section 366 ke under: partners ki unanimous consent, DIN aur DSC, SPICe+ Part A se naam reserve, 2 newspapers mein URC-2 notice (21 din wait), CA certified A&L, creditor NOCs, phir URC-1 + SPICe+ 60 din mein file karein. Section 47(xiii) ke under capital gains exempt. INR 3,999 se starting.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Which form?</strong> URC-1 is the primary conversion form, linked with SPICe+ Part B, INC-33, INC-34, AGILE-PRO.</p>
<p><strong>Capital gains tax?</strong> Exempt under Section 47(xiii) IT Act if 4 conditions met for 5 years.</p>
<p><strong>How long?</strong> 30-35 working days (simple) to 40-50 days (with bank NOCs). 21-day newspaper notice is fixed minimum.</p>
<p><strong>URC-1 deadline?</strong> 60 days from name approval. Hard deadline - no extensions.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">60-Day Window - File URC-1 Before Name Lapses</h2>
            <div class="content-text">
                
                <p><strong>From name approval, you have only 60 days to file URC-1.</strong> The 21-day newspaper notice must fit within this window.</p>
<ul>
<li><strong>Day 1:</strong> Publish URC-2 in 2 newspapers immediately after name approval</li>
<li><strong>Day 22:</strong> Earliest URC-1 can be filed (21 clear days elapsed)</li>
<li><strong>Day 45-55:</strong> Recommended URC-1 filing window (with 5-day buffer)</li>
<li><strong>Day 60:</strong> Hard deadline - name lapses, process restarts, newspaper costs wasted</li>
</ul>
<p><strong>Tax benefit at stake:</strong> Section 47(xiii) exemption requires proper structuring. Get CA review before filing.</p>
<p style="margin-top:16px;"><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20to%20convert%20my%20partnership%20firm%20to%20Pvt%20Ltd." target="_blank">WhatsApp us</a> for a free pre-conversion review.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Convert Your Partnership to Pvt Ltd - Starting at INR 3,999</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Converting a partnership firm to a private limited company is the most impactful structural upgrade a growing business can make - unlocking equity fundraising, ESOP capability, limited liability, and investor-grade governance. Section 366 provides the conversion path; Section 47(xiii) ensures it is fully tax-neutral.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.7;">Patron Accounting's CA and CS team manages the 21-day newspaper notice, 60-day URC-1 deadline, Statement of A&L freshness, secured creditor NOCs, and the complete post-conversion update cascade. 150+ partnership to Pvt Ltd conversions completed.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20partnership%20to%20Pvt%20Ltd%20conversion%20service." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Partnership%20to%20Pvt%20Ltd%20Conversion&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20to%20convert%20my%20partnership%20firm%20to%20a%20Private%20Limited%20Company.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Partnership to Pvt Ltd Conversion Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Convert your partnership firm from Patron Accounting offices across India.</p>
         
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Partnership to Pvt Ltd by City</div><div class="pa-block-sub">URC-1 and SPICe+ filing from Patron Accounting</div><div class="pa-city-grid">


<a href="/convert-partnership-to-pvt-ltd-company/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>

</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Registration, compliance, and conversion services</div><div class="pa-cross-grid">
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/partnership-firm-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Partnership Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/private-limited-company-compliance" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Compliance</div><div class="pa-card-sub">India</div></div></a>
<a href="/convert-partnership-to-llp" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Partnership to LLP</div><div class="pa-card-sub">India</div></div></a>
<a href="/llp-incorporation" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/dsc-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">DSC Registration</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">20 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> March 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually. Trigger: Companies Act 2013 amendments, Companies (Authorised to Register) Rules changes, Section 47(xiii) IT Act updates, or MCA V3 form changes.</p>
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
