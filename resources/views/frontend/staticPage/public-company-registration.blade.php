
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
    <title>Public Limited Company Registration - Process & Fees India</title>
    <meta name="description" content="Register your Public Limited Company under Companies Act, 2013 with expert CA/CS support. Min 7 shareholders, 3 directors. 10,000+ businesses served across India.">
    <link rel="canonical" href="/public-company-registration">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Public Limited Company Registration - Process & Fees India">
    <meta property="og:description" content="Register your Public Limited Company under Companies Act, 2013 with expert CA/CS support. Min 7 shareholders, 3 directors. 10,000+ businesses served across India.">
    <meta property="og:url" content="/public-company-registration">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Public Limited Company Registration - Process & Fees India">
    <meta name="twitter:description" content="Register your Public Limited Company under Companies Act, 2013 with expert CA/CS support. Min 7 shareholders, 3 directors. 10,000+ businesses served across India.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Public Limited Company Registration in India: Process & Fees",
          "description": "Register your Public Limited Company under Companies Act, 2013 with expert CA/CS support. Min 7 shareholders, 3 directors. 10,000+ businesses served across India.",
          "url": "https://www.patronaccounting.com/public-company-registration",
          "serviceType": "Public Limited Company Registration in India: Process & Fees",
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
            "url": "https://www.patronaccounting.com/public-company-registration",
            "price": "1"
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
              "name": "Public Limited Company Registration in India: Process & Fees",
              "item": "https://www.patronaccounting.com/public-company-registration"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is a Public Limited Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Public Limited Company is a type of company defined under Section 2(71) of the Companies Act, 2013, that can offer its shares to the general public for subscription. It requires minimum 7 shareholders and 3 directors, with shares freely transferable. The company name must end with 'Limited'. It can list on stock exchanges under SEBI regulations."
              }
            },
            {
              "@type": "Question",
              "name": "How many directors and shareholders are needed?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A Public Limited Company requires minimum 7 shareholders with no maximum limit, and minimum 3 directors under Section 149 of the Companies Act, 2013. At least 1 director must be an Indian resident. The maximum number of directors is 15, which can be increased by passing a special resolution."
              }
            },
            {
              "@type": "Question",
              "name": "What is the minimum capital for Public Limited Company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "There is no minimum paid-up capital requirement after the Companies (Amendment) Act, 2015 removed the earlier Rs 5 lakh minimum. However, the company must have an authorised share capital of at least Rs 1 lakh declared in the MOA. Government fees depend on the authorised capital amount."
              }
            },
            {
              "@type": "Question",
              "name": "Can a Private Limited Company convert to Public Limited?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. A Private Limited Company can convert to a Public Limited Company by passing a special resolution, increasing the number of members to minimum 7 and directors to minimum 3, altering the MOA and AOA, and filing Form MGT-14 and Form INC-27 with the RoC."
              }
            },
            {
              "@type": "Question",
              "name": "What is the Certificate of Commencement of Business?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 10A of the Companies Act, 2013, every company with share capital must file Form INC-20A within 180 days of incorporation, declaring that every subscriber has paid the value of shares agreed to be taken. Penalty for non-filing: Rs 50,000 on the company and Rs 1,000/day on each officer in default."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between listed and unlisted public company?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "A listed public company has its shares traded on a recognised stock exchange (NSE or BSE) and is regulated by SEBI in addition to the Companies Act. An unlisted public company is registered with the RoC and governed by the Companies Act but does not trade its shares on any stock exchange. Listed companies have stricter disclosure requirements."
              }
            },
            {
              "@type": "Question",
              "name": "Can a Public Limited Company list on stock exchanges?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, but listing requires SEBI (Securities and Exchange Board of India) compliance. The company must file an IPO under SEBI ICDR Regulations. Patron Accounting provides pre-listing advisory and compliance support for companies planning to go public. Quick Answers Can foreigners be directors? Yes, foreign nationals can be directors but at least 1 director must be Indian resident (182+ days). No citizenship requirement for directors. Is statutory audit mandatory? Yes. Every public company must appoint a statutory auditor within 30 days of incorporation under Section 139. How many board meetings required? Minimum 4 per calendar year under Section 173, with a gap of not more than 120 days between consecutive meetings. Can Public Ltd raise funds via debentures? Yes. Public companies can raise funds through equity shares, preference shares, and debentures subject to Companies Act provisions. Is Company Secretary mandatory? Yes, if paid-up capital is Rs 10 crore or more under Section 203. Otherwise, CS certification is required for annual return."
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
            padding: 20px 0; position: sticky; top: 100px; z-index: 50;
        }
/* Process Evidence Screenshot — Plan 3.2 */
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
                        Public Limited Company Registration in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">10 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, DSC, DIN for 3+ directors, MOA, AOA, Prospectus</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Requirements:</span> Minimum 7 shareholders, 3 directors, 1 Indian resident director</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Capital:</span> No minimum paid-up capital (authorised capital of Rs 1 lakh required)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 15 - 25 working days for incorporation + Certificate of Commencement</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Public%20Limited%20Company%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Public%20Limited%20Company%20Registration%20services.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Public%20Limited%20Company%20Registration%20services.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Public Limited Company Registration',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'public-company-registration', 'label' => 'Public Limited Company Registration', 'selected' => true, 'disabled' => false],
                            ['value' => 'private-limited-company-registration', 'label' => 'Private Limited Company Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'section8-company-registration', 'label' => 'Section 8 Company Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'one-person-company-registration', 'label' => 'OPC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration', 'label' => 'Startup Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'dsc-registration', 'label' => 'DSC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Professionalism, attention to detail, and timely communication made the entire process seamless. Highly recommend for company registration.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Subhendu Mishra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Business Owner</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Took minimum time, really impressive acumen. And it's not expensive at all. Excellent team for company incorporation.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#1B365D;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RD</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajib Dutta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Entrepreneur</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Really fantastic experience with Patron Accounting. Knowledgeable team who handled all documentation professionally.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Nishikant Gurav</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Company Director</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Best service for company registration. Extremely happy with the dedicated point of contact for all our compliance needs.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">NN</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Nikhil Nimbhorkar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Firm Partner</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div><div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Excellent service for company registration and compliance. Very responsive team that handles everything end to end.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SA</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sunny Ashpal</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director - Demandify Media</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">6 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>From company incorporation to IPO-readiness compliance - Patron Accounting handles it all so you can focus on building your public company.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Eligibility</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#roc-calculator" class="toc-btn">ROC Calculator</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Compare</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Public Limited Company Registration - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Public Limited Company Registration Services at a Glance</strong></p>
                    <p><p>Public Limited Company registration allows businesses to raise capital from the general public by offering shares. Governed by the Companies Act, 2013, it requires minimum 7 shareholders and 3 directors. Registration is done via SPICe+ on the MCA portal. The company name must end with 'Limited' and a Certificate of Commencement of Business is required within 180 days.</p></p>
                </div>
                <p><div class="table-responsive-wrapper" style="margin:20px 0;"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody><tr><td>Governing Act</td><td>Companies Act, 2013 - Section 2(71)</td></tr><tr><td>Minimum Shareholders</td><td>7 (no maximum limit)</td></tr><tr><td>Minimum Directors</td><td>3 (at least 1 must be Indian resident)</td></tr><tr><td>Timeline</td><td>15 - 25 working days (incorporation + commencement certificate)</td></tr><tr><td>Capital</td><td>No minimum paid-up capital; authorised share capital of Rs 1 lakh required</td></tr><tr><td>Key Forms</td><td>SPICe+ Part A/B, MOA, AOA, INC-20A (Commencement), Prospectus (for public offer)</td></tr><tr><td>Regulatory Authority</td><td>MCA/RoC (incorporation) + SEBI (listed companies)</td></tr></tbody></table></div></p>
                <p><p>A Public Limited Company is the most prestigious business structure in India, enabling entrepreneurs to raise capital from the general public through shares. Regulated by the <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> and the Ministry of Corporate Affairs, a Public Limited Company enjoys separate legal entity status, limited liability for shareholders, unrestricted share transferability, and the ability to list on stock exchanges like NSE and BSE under <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> regulations.</p></p>
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
                <h2 class="section-title">What Is a Public Limited Company?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>A Public Limited Company is a type of company defined under Section 2(71) of the Companies Act, 2013, that is not a private company and can offer its shares to the general public for subscription. The company name must end with the word 'Limited' and it is registered with the Registrar of Companies under the Ministry of Corporate Affairs.</p><p>A Public Limited Company has a separate legal identity from its shareholders and can own property, enter contracts, sue and be sued in its own name. It requires minimum 7 shareholders (no maximum limit), minimum 3 directors (maximum 15, extendable by special resolution), and at least 1 director who is an Indian resident. Shares are freely transferable without restriction.</p><p>Listed public companies are additionally regulated by the Securities and Exchange Board of India (SEBI). Unlisted public companies operate under the Companies Act without SEBI listing requirements. A Public Limited Company must hold an Annual General Meeting (AGM) within 6 months from the close of the financial year and conduct a minimum of 4 board meetings per year with a gap of not more than 120 days between two meetings.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Public Limited Company Registration:</strong></p>
                    <p><strong>Public Company (Section 2(71)):</strong> A company that is not a private company, meaning it has no restriction on transfer of shares, no limit on maximum members, and can invite the public to subscribe to its securities.</p><p><strong>Prospectus (Section 2(70)):</strong> A document issued by the company inviting the public to subscribe to its shares or debentures. Must be filed with the RoC before issuance.</p><p><strong>Certificate of Commencement of Business (INC-20A):</strong> A declaration filed under Section 10A within 180 days of incorporation stating that every subscriber has paid the value of shares agreed to be taken.</p><p><strong>SEBI (Securities and Exchange Board of India):</strong> The regulatory body governing listed public companies, IPO processes, and securities market compliance in India.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Public Limited Company Registration</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Companies Act 2013</span>
                        <strong>Public Limited</strong>
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
            <h2 class="section-title">Who Should Register a Public Limited Company?</h2>
            <div class="content-text">
                
                <ul><li><strong>Large-Scale Enterprises:</strong> Businesses with ambitious growth plans that need to raise significant capital from the general public through share offerings</li><li><strong>Companies Planning IPO:</strong> Existing private companies planning to list on NSE or BSE must first convert to a public limited company and comply with SEBI listing requirements</li><li><strong>Government and Institutional Projects:</strong> Companies seeking government contracts, institutional investment, or public-private partnerships benefit from the credibility of a public company structure</li><li><strong>Existing Pvt Ltd Companies Scaling Up:</strong> Private limited companies that have outgrown the 200-member cap and need unrestricted shareholding can convert to a public limited company</li></ul><p><strong>Eligibility under the Companies Act, 2013:</strong></p><ul><li>Minimum 7 shareholders (no maximum limit)</li><li>Minimum 3 directors under Section 149 (maximum 15, extendable by special resolution)</li><li>At least 1 director must be an Indian resident (stayed in India 182+ days)</li><li>At least 1 woman director if paid-up capital Rs 100 crore+ or turnover Rs 300 crore+ under Section 149(1)</li><li>Authorised share capital of minimum Rs 1 lakh</li><li>Company name must end with 'Limited'</li><li>A registered office address in India is mandatory</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Services Included in Public Limited Company Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td><strong>DSC and DIN for All Directors</strong></td><td>Class 3 DSCs and DIN for all 3+ directors through SPICe+ form</td></tr><tr><td><strong>Name Reservation (RUN / SPICe+ Part A)</strong></td><td>Unique company name ending with 'Limited' reserved through MCA portal with trademark checks</td></tr><tr><td><strong>SPICe+ Part B Filing</strong></td><td>Complete incorporation filing with RoC including MOA, AOA, director details, registered office proof, and subscriber details for 7+ shareholders</td></tr><tr><td><strong>MOA and AOA Drafting</strong></td><td>Comprehensive Memorandum and Articles defining objectives, share capital structure, and governance rules per Schedule I</td></tr><tr><td><strong>Integrated Registrations</strong></td><td>PAN, TAN, EPFO, ESIC, GST (if applicable) processed simultaneously through AGILE-PRO form linked with SPICe+</td></tr><tr><td><strong>Post-Incorporation Compliance</strong></td><td>INC-20A filing within 180 days, auditor appointment within 30 days, board meeting scheduling, and AGM compliance setup</td></tr>

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
            <h2 class="section-title">7-Step Public Limited Company Registration Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From DSC procurement to Certificate of Commencement - our end-to-end process ensures compliant incorporation in 15-25 working days.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain DSC for All Directors</h3><p class="step-description">Every proposed director needs a Class 3 Digital Signature Certificate from a government-approved certifying agency. DSC is mandatory for electronically signing all incorporation forms on the MCA portal. Processing: 1-2 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Class 3 DSC for 3+ directors</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1-2 day issuance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="12" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M56 35l3 3 5-5" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><line x1="35" y1="58" x2="85" y2="58" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">DSC Ready</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Apply for Director Identification Number (DIN)</h3><p class="step-description">DIN is mandatory for all directors under Section 153 of the Companies Act, 2013. Up to 3 DINs can be applied via SPICe+; additional DINs require separate Form DIR-3 filing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Section 153 compliance</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Integrated via SPICe+</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="35" r="10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.2"/><line x1="60" y1="30" x2="85" y2="30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="60" y1="40" x2="78" y2="40" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.3"/></svg></div><span class="illustration-label">DIN Allotted</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Reserve Company Name</h3><p class="step-description">File SPICe+ Part A or RUN service with up to 2 proposed names ending with 'Limited'. Fee: Rs 1,000 via RUN. MCA verifies against existing companies and trademarks. Name valid for 20 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Name must end with 'Limited'</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Valid 20 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="40" r="28" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 40l8-16h8l8 16" stroke="#E8712C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><line x1="46" y1="48" x2="74" y2="48" stroke="#14365F" stroke-width="2" stroke-linecap="round" opacity="0.4"/></svg></div><span class="illustration-label">Name Reserved</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Draft MOA and AOA</h3><p class="step-description">Prepare Memorandum of Association (defining objects, capital structure, liability) and Articles of Association (defining governance rules, share transfer, meetings). Must be signed by all 7 subscribers with their share subscription details.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Schedule I compliant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>7+ subscriber signatures</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="45" height="60" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="60" y="15" width="45" height="60" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><line x1="25" y1="22" x2="50" y2="22" stroke="#14365F" stroke-width="2" opacity="0.4"/><line x1="70" y1="32" x2="95" y2="32" stroke="#E8712C" stroke-width="2" opacity="0.5"/></svg></div><span class="illustration-label">MOA/AOA Drafted</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">File SPICe+ Part B (Incorporation)</h3><p class="step-description">Submit the complete incorporation application to the jurisdictional RoC with MOA, AOA, director declarations (INC-9), consents (DIR-2), identity/address proofs, registered office proof, and AGILE-PRO form. A practising CA, CS, or Cost Accountant must certify the form.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CA/CS certified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>AGILE-PRO integrated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 30l10 0 0-12" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><path d="M60 18l8 0 -8 10" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><line x1="30" y1="45" x2="90" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">SPICe+ Filed</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Receive Certificate of Incorporation</h3><p class="step-description">Upon verification, the RoC issues the Certificate of Incorporation under Section 7 containing the Corporate Identification Number (CIN). PAN and TAN are auto-generated. Processing typically takes 5-10 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CIN + PAN + TAN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>5-10 working days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><circle cx="60" cy="30" r="14" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 30l4 4 6-8" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><path d="M48 55l24 0" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><circle cx="60" cy="62" r="5" fill="none" stroke="#F5A623" stroke-width="1.5"/></svg></div><span class="illustration-label">COI Issued</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">File Certificate of Commencement (INC-20A)</h3><p class="step-description">Within 180 days of incorporation, file Form INC-20A under Section 10A, declaring that every subscriber has paid for shares. The company cannot commence business until this certificate is obtained. Penalty: Rs 50,000 on company + Rs 1,000/day on each director.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>180-day mandatory deadline</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>We file within 30 days</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 12l30 16v28l-30 16-30-16V28z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M55 42l5 5 10-12" stroke="#10B981" stroke-width="2.5" stroke-linecap="round"/><text x="38" y="78" fill="#14365F" font-size="10" font-weight="700" font-family="Barlow">INC-20A</text></svg></div><span class="illustration-label">Business Commenced</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Public Limited Company Registration</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card</strong> of all directors and subscribers (shareholders)</li><li><strong>Aadhaar Card</strong> linked to PAN for MCA portal authentication</li><li><strong>Address Proof</strong> of directors/subscribers - bank statement or utility bill (not older than 2 months)</li><li><strong>Passport</strong> for foreign directors - notarised and apostilled</li><li><strong>Passport-size Photographs</strong> of all directors and subscribers</li><li><strong>Digital Signature Certificate (DSC)</strong> - Class 3 for all directors</li><li><strong>Memorandum of Association (MOA)</strong> defining objects, capital structure, and subscriber details</li><li><strong>Articles of Association (AOA)</strong> defining governance rules, share transfer provisions, and meeting procedures</li><li><strong>Proof of Registered Office</strong> - utility bill + NOC from landlord (rented) or sale deed (owned)</li><li><strong>Director Consent and Declarations</strong> - Form DIR-2 (consent) and INC-9 (declaration) for each director</li></ul>

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
                        <tr><td><strong>Coordinating 7+ Subscribers</strong></td><td>Gathering documents from 7+ shareholders across locations causes delays</td><td>Dedicated coordinator manages document collection and verification from all shareholders simultaneously</td></tr><tr><td><strong>Complex MOA/AOA Drafting</strong></td><td>Public company MOA/AOA must comply with stricter provisions than private companies</td><td>CA/CS team drafts compliant documents aligned with Table F of Schedule I of the Companies Act</td></tr><tr><td><strong>Missing INC-20A Deadline</strong></td><td>Rs 50,000 penalty on company + Rs 1,000/day on directors under Section 10A(2)</td><td>We calendar and file INC-20A proactively within 30 days of incorporation</td></tr><tr><td><strong>Board Meeting Compliance</strong></td><td>4 meetings/year required with maximum 120-day gap; missed meetings risk director disqualification</td><td>Compliance calendar setup and ongoing secretarial support for all statutory meetings</td></tr>

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
            <h2 class="section-title">Public Limited Company Registration Fees and Government Charges</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Name Reservation (RUN)</td><td class="table-amount">Rs 1,000 per application</td></tr><tr><td>SPICe+ Filing Fee (Capital up to Rs 15 lakh)</td><td class="table-amount">Rs 0 (no filing fee)</td></tr><tr><td>SPICe+ Filing Fee (Capital Rs 15L - Rs 50L)</td><td class="table-amount">Rs 2,000 - Rs 10,000 (scaled by capital)</td></tr><tr><td>SPICe+ Filing Fee (Capital above Rs 50L)</td><td class="table-amount">Rs 10,000+ (slab-based)</td></tr><tr><td>Stamp Duty (MOA + AOA)</td><td class="table-amount">Rs 2,000 - Rs 10,000+ (varies by state)</td></tr><tr><td>DSC (per director, 3+ required)</td><td class="table-amount">Rs 800 - Rs 1,500 each</td></tr><tr><td>INC-20A (Commencement Certificate)</td><td class="table-amount">Rs 500</td></tr><tr><td><strong>Patron Accounting Professional Fees</strong></td><td class="table-amount"><strong>Starting from INR 19,999 (Exl GST and Govt. Charges)</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Public Limited Company Registration consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Public%20Limited%20Company%20Registration.%20Please%20share%20the%20process%20and%20fees." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Time Taken for Public Limited Company Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC + DIN Procurement</td><td>1 - 3 working days</td></tr><tr><td>Name Approval (SPICe+ Part A / RUN)</td><td>2 - 5 working days</td></tr><tr><td>Document Preparation (MOA/AOA for 7+ subscribers)</td><td>3 - 5 working days</td></tr><tr><td>SPICe+ Part B Filing + RoC Approval</td><td>5 - 10 working days</td></tr><tr><td>INC-20A (Certificate of Commencement)</td><td>Within 180 days (we file within 30 days)</td></tr><tr><td><strong>Total Incorporation</strong></td><td><strong>15 - 25 working days</strong></td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> INC-20A must be filed within 180 days of incorporation under Section 10A. The company cannot commence business or exercise borrowing powers until this certificate is obtained. Penalty for non-compliance: Rs 50,000 on the company and Rs 1,000/day on each director.</p>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ROC FEE CALCULATOR - injected by india-html-with-roc-v1 skill -->
<!-- 
  ROC Fee Calculator V2 - Embeddable Widget for Patron Accounting Service Pages
  Blade-ready version (no DOCTYPE/html/head/body).
  CSS is scoped under .roc-widget class.
  JS functions are prefixed with roc* to avoid global conflicts.
-->

<style>
/* === ROC CALCULATOR WIDGET - NAMESPACED UNDER .roc-widget === */
.roc-widget {
  --bg: #f8fafc;
  --surface: #ffffff;
  --border: #e2e8f0;
  --border-hover: #cbd5e1;
  
  --primary: #4f46e5; /* Indigo */
  --primary-hover: #4338ca;
  --primary-light: #e0e7ff;
  
  --success: #10b981; /* Emerald */
  --success-light: #d1fae5;
  
  --accent: #f59e0b; /* Amber */
  --accent-light: #fef3c7;
  
  --text-main: #0f172a;
  --text-muted: #64748b;
  --text-light: #94a3b8;
  
  --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

.roc-widget {
  font-family: 'Inter', sans-serif;
  background: var(--bg);
  color: var(--text-main);
  min-height: 100vh;
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
}

.roc-widget .wrap { max-width: 1100px; margin: 0 auto; padding: 0 20px 80px; }

/* ─ HEADER ─ */
.roc-widget header {
  padding: 60px 0 40px;
  text-align: center;
}
.roc-widget .badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 100px; padding: 6px 16px;
  font-size: 11px; font-weight: 600; letter-spacing: 0.05em;
  text-transform: uppercase; color: var(--text-main); margin-bottom: 20px;
  box-shadow: var(--shadow-sm);
}
.roc-widget .dot { width: 8px; height: 8px; background: var(--success); border-radius: 50%; }
.roc-widget header h1 {
  font-family: 'Outfit', sans-serif;
  font-size: clamp(32px, 5vw, 48px); font-weight: 800; line-height: 1.1;
  color: var(--text-main); letter-spacing: -0.02em; margin-bottom: 12px;
}
.roc-widget header h1 em { font-style: normal; color: var(--primary); }
.roc-widget header p { font-size: 15px; color: var(--text-muted); }
.roc-widget .patron-tag {
  font-size: 14px; color: var(--text-muted); margin-top: 12px;
}
.roc-widget .patron-tag strong { color: var(--primary); font-weight: 700; }

/* ─ LAYOUT ─ */
.roc-widget .grid-2 { display: grid; grid-template-columns: 1fr 1.2fr; gap: 30px; align-items: start; }

/* ─ CARD ─ */
.roc-widget .card {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 20px;
  box-shadow: var(--shadow-md);
}
.roc-widget .card-hdr {
  padding: 24px 30px; border-bottom: 1px solid var(--border);
  background: #f8fafc;
  display: flex; align-items: center; gap: 12px;
}
.roc-widget .card-hdr h3 { font-family: 'Outfit', sans-serif; font-size: 18px; font-weight: 700; color: var(--text-main); }
.roc-widget .card-hdr .ico {
  width: 36px; height: 36px; border-radius: 10px;
  background: #ffffff; border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center; font-size: 16px;
  box-shadow: var(--shadow-sm);
}
.roc-widget .card-body { padding: 30px; }

/* ─ FORM ─ */
.roc-widget .field { margin-bottom: 24px; }
.roc-widget .field:last-child { margin-bottom: 0; }
.roc-widget label {
  display: block; font-size: 12px; font-weight: 600; 
  text-transform: uppercase; color: var(--text-muted); margin-bottom: 8px; 
  letter-spacing: 0.05em;
}

.roc-widget select, .roc-widget input[type=number] {
  width: 100%; background: #ffffff; border: 1px solid var(--border);
  border-radius: 12px; color: var(--text-main); font-family: 'Inter', sans-serif;
  font-size: 15px; font-weight: 500; padding: 12px 16px; outline: none;
  transition: all 0.2s; box-shadow: var(--shadow-sm);
  -webkit-appearance: none;
}
.roc-widget select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='7' viewBox='0 0 10 7'%3E%3Cpath d='M1 1l4 4 4-4' stroke='%2364748b' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
  background-repeat: no-repeat; background-position: right 16px center; padding-right: 40px; cursor:pointer;
}
.roc-widget select:focus, .roc-widget input:focus {
  border-color: var(--primary); 
  box-shadow: 0 0 0 3px var(--primary-light); 
}

.roc-widget .seg { display: grid; gap: 8px; }
.roc-widget .seg.c2 { grid-template-columns: 1fr 1fr; }
.roc-widget .seg.c3 { grid-template-columns: 1fr 1fr 1fr; }
.roc-widget .seg-btn {
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 10px; color: var(--text-muted); font-family: 'Inter', sans-serif;
  font-size: 13px; font-weight: 600; padding: 10px 8px; cursor: pointer;
  transition: all 0.2s; text-align: center; box-shadow: var(--shadow-sm);
}
.roc-widget .seg-btn.on {
  background: var(--primary); border-color: var(--primary); 
  color: #ffffff; box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.3); 
}
.roc-widget .seg-btn:hover:not(.on) { border-color: var(--border-hover); color: var(--text-main); }

.roc-widget .stepper {
  display: flex; align-items: center; gap: 10px;
  background: var(--surface); border: 1px solid var(--border);
  border-radius: 12px; padding: 6px 6px 6px 16px; box-shadow: var(--shadow-sm);
}
.roc-widget .stepper span { flex:1; font-family: 'JetBrains Mono', monospace; font-size: 16px; font-weight: 600; color: var(--text-main); }
.roc-widget .st-btn {
  width: 36px; height: 36px; background: var(--bg); border: 1px solid var(--border);
  border-radius: 8px; color: var(--text-main); font-size: 20px; cursor: pointer; line-height:1;
  display: flex; align-items: center; justify-content: center; transition: all 0.2s;
}
.roc-widget .st-btn:hover { background: var(--border); }

/* ─ RESULTS ─ */
.roc-widget .res-state {
  font-size: 12px; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;
  color: var(--primary); margin-bottom: 4px; display: flex; align-items: center; gap: 8px;
}
.roc-widget .res-title { font-family: 'Outfit', sans-serif; font-size: 22px; font-weight: 700; color: var(--text-main); margin-bottom: 0; }

.roc-widget .section-lbl {
  font-size: 11px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;
  color: var(--text-light); padding: 20px 0 10px;
  display: flex; align-items: center; gap: 12px;
}
.roc-widget .section-lbl::after { content:''; flex:1; height:1px; background: var(--border); }

.roc-widget .fee-row {
  display: flex; justify-content: space-between; align-items: center;
  padding: 12px 0; border-bottom: 1px dashed var(--border); gap: 10px;
}
.roc-widget .fee-row:last-of-type { border-bottom: none; }
.roc-widget .fee-row .lbl { font-size: 14px; font-weight: 500; color: var(--text-main); flex: 1; }
.roc-widget .fee-row .tag {
  font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
  border-radius: 6px; padding: 4px 8px; text-transform: uppercase; white-space: nowrap;
}
.roc-widget .tag-mca { background: #e0f2fe; color: #0284c7; }
.roc-widget .tag-state { background: #fef3c7; color: #d97706; }
.roc-widget .tag-prof { background: #f3e8ff; color: #9333ea; }
.roc-widget .tag-tax { background: #fee2e2; color: #dc2626; }

.roc-widget .fee-row .amt {
  font-family: 'JetBrains Mono', monospace; font-size: 14px; font-weight: 600;
  color: var(--text-main); white-space: nowrap;
}
.roc-widget .fee-row.dimmed { opacity: 0.4; text-decoration: line-through; }

.roc-widget .subtotal {
  display: flex; justify-content: space-between; align-items: center;
  padding: 16px; margin: 12px 0; background: #f8fafc;
  border: 1px solid var(--border); border-radius: 12px;
}
.roc-widget .subtotal .lbl { font-size: 12px; font-weight: 700; text-transform: uppercase; color: var(--text-muted); }
.roc-widget .subtotal .amt { font-family: 'JetBrains Mono', monospace; font-size: 15px; font-weight: 700; color: var(--text-main); }

/* ─ GRAND TOTAL ─ */
.roc-widget .grand {
  margin: 24px 0 0; padding: 30px;
  background: linear-gradient(135deg, var(--primary), #3b82f6);
  border-radius: 20px; position: relative; overflow: hidden; color: #ffffff;
  box-shadow: var(--shadow-lg);
}
.roc-widget .grand::before {
  content: '₹'; position: absolute; right: 10px; bottom: -30px;
  font-family: 'Outfit', sans-serif; font-size: 150px; font-weight: 800;
  color: rgba(255,255,255,0.1); line-height: 1; pointer-events: none;
}
.roc-widget .grand .gt-lbl { font-size: 12px; font-weight: 700; letter-spacing: 0.1em;
  text-transform: uppercase; color: var(--primary-light); margin-bottom: 8px; }
.roc-widget .grand .gt-amt {
  font-family: 'Outfit', sans-serif; font-size: 48px; font-weight: 800;
  letter-spacing: -0.02em; line-height: 1; margin-bottom: 8px;
}
.roc-widget .grand .gt-note { font-size: 13px; color: var(--primary-light); opacity: 0.9; }

.roc-widget .gt-split { display: flex; gap: 12px; margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.2); }
.roc-widget .gt-part {
  flex:1; padding: 12px; background: rgba(0,0,0,0.15);
  border-radius: 12px; backdrop-filter: blur(4px);
}
.roc-widget .gt-part .p-lbl { font-size: 10px; font-weight: 700; letter-spacing: 0.05em;
  text-transform: uppercase; color: rgba(255,255,255,0.7); margin-bottom: 4px; }
.roc-widget .gt-part .p-amt { font-family: 'JetBrains Mono', monospace; font-size: 15px; font-weight: 600; color: #ffffff; }

/* ─ AOA NOTE ─ */
.roc-widget .aoa-note {
  margin-top: 16px; padding: 14px 16px;
  background: #fffbeb; border-left: 4px solid var(--accent);
  border-radius: 8px; font-size: 13px; color: #b45309; line-height: 1.5;
}
.roc-widget .aoa-note strong { color: #92400e; font-weight: 700; }

/* ─ MOBILE RESPONSIVENESS ─ */
@media(max-width: 850px) {
  .wrap { padding: 0 16px 40px; }
  .roc-widget .grid-2 { grid-template-columns: 1fr; gap: 20px; }
  .roc-widget header { padding: 40px 0 20px; }
  .roc-widget header h1 { font-size: 32px; }
  .roc-widget .card-hdr { padding: 16px 20px; }
  .roc-widget .card-body { padding: 20px; }
  
  /* Stack 3-column buttons into 2 columns for better touch targets */
  .roc-widget .seg.c3 { grid-template-columns: 1fr 1fr; }
  
  .roc-widget .grand { padding: 24px 20px; }
  .roc-widget .grand .gt-amt { font-size: 36px; }
  
  /* Stack the split totals vertically on small screens */
  .roc-widget .gt-split { flex-direction: column; gap: 8px; }
}

/* ─ TOOLTIP / INFO BUTTON ─ */
.roc-widget .info-wrap {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  position: static;
}
.roc-widget .info-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: rgba(232,93,4,0.12);
  border: 1px solid rgba(232,93,4,0.35);
  color: var(--primary, #e85d04);
  font-size: 10px;
  font-weight: 700;
  font-style: normal;
  cursor: pointer;
  line-height: 1;
  flex-shrink: 0;
  transition: background .18s, border-color .18s;
  user-select: none;
  vertical-align: middle;
  font-family: serif;
}
.roc-widget .info-btn:hover {
  background: var(--primary, #e85d04);
  color: #fff;
  border-color: var(--primary, #e85d04);
}
/* Tooltip rendered as fixed so it escapes overflow:hidden on any parent */
.roc-widget .tooltip-box {
  display: none;
  position: fixed;
  z-index: 9999;
  width: 300px;
  background: #fff;
  border: 1.5px solid rgba(232,93,4,0.22);
  border-radius: 12px;
  padding: 14px 16px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.14), 0 2px 8px rgba(232,93,4,0.1);
  font-family: 'Plus Jakarta Sans', 'Outfit', 'IBM Plex Sans', sans-serif;
  pointer-events: none;
}
.roc-widget .tooltip-box.visible {
  display: block;
  animation: tooltipIn .15s ease;
}
.roc-widget @keyframes tooltipIn {
  .roc-widget from { opacity: 0; transform: translateY(5px); }
  .roc-widget to { opacity: 1; transform: translateY(0); }
}
  .roc-widget to { opacity: 1; transform: translateY(0); }
}
.roc-widget .tt-title {
  font-size: 12px;
  font-weight: 600;
  color: var(--primary, #e85d04);
  margin-bottom: 8px;
  letter-spacing: .01em;
}
.roc-widget .tt-body {
  font-size: 12px;
  font-weight: 400;
  color: #5a3a20;
  line-height: 1.7;
}
.roc-widget .tt-body b { font-weight: 600; color: #3a2010; }
.roc-widget .tt-body ul {
  margin: 8px 0 0 0;
  padding-left: 16px;
}
.roc-widget .tt-body ul li {
  margin-bottom: 5px;
  font-weight: 400;
  color: #5a3a20;
}
.roc-widget .tt-alert {
  margin-top: 10px;
  padding: 9px 11px;
  background: #fff8f0;
  border-left: 3px solid var(--primary, #e85d04);
  border-radius: 0 7px 7px 0;
  font-size: 11.5px;
  font-weight: 400;
  color: #7a3000;
  line-height: 1.65;
}
.roc-widget .tt-alert b { font-weight: 600; color: #c94d02; }
</style>

<!-- ROC Calculator Section -->
<section id="roc-calculator" class="roc-widget" style="margin:60px 0;padding:0;">
<div class="wrap">

<header>
  <div class="badge"><span class="dot"></span> Official MCA Rates 2026</div>
  <h2 style="font-family:'Outfit',sans-serif;font-size:clamp(28px,4vw,40px);font-weight:800;line-height:1.1;letter-spacing:-0.02em;">ROC <em style="font-style:normal;color:#4f46e5;">Fee Calculator</em></h2>
  <p class="patron-tag">Powered by <strong>Patron Accounting</strong></p>
</header>

<div class="grid-2">

  <div class="card">
    <div class="card-hdr"><span class="ico">⚙️</span><h3>Company Details</h3></div>
    <div class="card-body">

      <div class="field">
        <label>State / Union Territory</label>
        <select id="stateSelect" onchange="rocCalc()"></select>
      </div>

      <div class="field">
        <label>Company Type</label>
        <div class="seg c3">
          <button class="seg-btn on" data-ct="pvt" onclick="rocSetCT(this)">Private Ltd</button>
          <button class="seg-btn" data-ct="pub" onclick="rocSetCT(this)">Public Ltd</button>
          <button class="seg-btn" data-ct="opc" onclick="rocSetCT(this)">OPC</button>
          <button class="seg-btn" data-ct="small" onclick="rocSetCT(this)">Small Co.</button>
          <button class="seg-btn" data-ct="sec8" onclick="rocSetCT(this)">Section 8</button>
          <button class="seg-btn" data-ct="nocap" onclick="rocSetCT(this)">No Share Cap</button>
        </div>
      </div>

      <div class="field" id="authCapField">
        <label>Authorised Capital (₹)</label>
        <input type="number" id="authCap" value="100000" min="0" step="10000" oninput="rocCalc()">
      </div>

      <div class="field" id="paidCapField">
        <label>Paid-up Capital (₹) <span style="font-weight:400; text-transform:none; color:var(--text-light);">(for INC-20A fee)</span></label>
        <input type="number" id="paidCap" value="100000" min="0" step="10000" oninput="rocCalc()">
      </div>

      <div class="field">
        <label>
  <span class="info-wrap">
    Number of DSC Required
    <span class="info-btn" onclick="rocToggleTip(event,'tip-dsc')" title="What is DSC?">i</span>
    <div class="tooltip-box" id="tip-dsc">
      <div class="tt-title">How many DSCs do I need?</div>
      <div class="tt-body">
        Every proposed <b>Director</b> and <b>Shareholder</b> must have their own <b>Class 3 Digital Signature Certificate (DSC)</b> to legally sign the incorporation documents. If an individual acts as both a Director and a Shareholder, they only need <b>one DSC</b>.
        <ul>
          <li><b>Private Limited Company</b> — Minimum 2 DSCs (for 2 individuals)</li>
          <li><b>One Person Company (OPC)</b> — Minimum 1 DSC</li>
        </ul>
      </div>
    </div>
  </span>
</label>
        <div class="stepper">
          <span id="dscLbl">2</span>
          <button class="st-btn" onclick="rocDsc(-1)">−</button>
          <button class="st-btn" onclick="rocDsc(+1)">+</button>
        </div>
      </div>

      <div class="field">
        <label>
  <span class="info-wrap">
    ADT-1 — Auditor Appointment
    <span class="info-btn" onclick="rocToggleTip(event,'tip-adt')" title="What is ADT-1?">i</span>
    <div class="tooltip-box" id="tip-adt">
      <div class="tt-title">Should I include Form ADT-1?</div>
      <div class="tt-body">
        <b>Yes — we strongly recommend keeping this as "Yes".</b><br><br>
        Every new company is legally required to appoint its first Statutory Auditor within <b>30 days of incorporation</b>.
        <div class="tt-alert">
          ⚠️ Under the latest <b>MCA amendment effective July 14, 2025</b>, filing Form ADT-1 is now <b>strictly mandatory</b>. Missing the <b>15-day filing deadline</b> will result in <b>daily multiplying penalties</b>.
        </div>
      </div>
    </div>
  </span>
</label>
        <div class="seg c2">
          <button class="seg-btn on" data-adt="yes" onclick="rocSetADT(this)">Yes</button>
          <button class="seg-btn" data-adt="no" onclick="rocSetADT(this)">No</button>
        </div>
      </div>

    </div></div><div class="card">
    <div class="card-hdr">
      <span class="ico">📊</span>
      <div>
        <div class="res-state"><span class="dot"></span><span id="rs_state">Select a State</span></div>
        <div class="res-title">Fee Breakdown</div>
      </div>
    </div>
    <div class="card-body" id="resultBody">

      <div class="section-lbl">Government Fees — Reimbursable</div>

      <div class="fee-row" id="row_inc">
        <span class="lbl">State Stamp on INC Form</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_inc">—</span>
      </div>
      <div class="fee-row" id="row_moa">
        <span class="lbl">MoA Stamp Duty</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_moa">—</span>
      </div>
      <div class="fee-row" id="row_aoa">
        <span class="lbl">AoA Stamp Duty</span>
        <span class="tag tag-state">Stamp</span>
        <span class="amt" id="v_aoa">—</span>
      </div>
      <div class="fee-row" id="row_run">
        <span class="lbl">Name Reservation (RUN/SPICe+)</span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_run">₹1,000</span>
      </div>
      <div class="fee-row" id="row_20a">
        <span class="lbl">INC-20A — Commencement <span style="font-size:11px; color:var(--text-light); font-weight:400;">(mandatory)</span></span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_20a">—</span>
      </div>
      <div class="fee-row" id="row_adt">
        <span class="lbl">ADT-1 — Auditor Appointment</span>
        <span class="tag tag-mca">MCA</span>
        <span class="amt" id="v_adt">—</span>
      </div>
      <div class="fee-row" id="row_pantan">
        <span class="lbl">PAN + TAN Application</span>
        <span class="tag tag-mca">Govt</span>
        <span class="amt" id="v_pantan">₹143</span>
      </div>

      <div class="subtotal">
        <span class="lbl">Total Reimbursable Govt Fees</span>
        <span class="amt" id="v_subtotal_gov">—</span>
      </div>

      <div class="section-lbl">Professional &amp; Service Fees</div>

      <div class="fee-row">
        <span class="lbl">DSC (<span id="dsc_lbl2">2</span> unit × ₹1,750)</span>
        <span class="tag tag-prof">DSC</span>
        <span class="amt" id="v_dsc">—</span>
      </div>
      <div class="fee-row">
        <span class="lbl">Professional Fees</span>
        <span class="tag tag-prof">Prof</span>
        <span class="amt" id="v_prof">—</span>
      </div>
      <div class="fee-row">
        <span class="lbl">GST on Fees (18%)</span>
        <span class="tag tag-tax">Tax</span>
        <span class="amt" id="v_gstonf">—</span>
      </div>

      <div class="subtotal">
        <span class="lbl">Total Service Fees</span>
        <span class="amt" id="v_subtotal_svc">—</span>
      </div>

      <div class="aoa-note" id="aoaNote" style="display:none">
        <strong>AoA Stamp Rule:</strong> <span id="aoaRuleText"></span>
      </div>

      <div class="grand">
        <div class="gt-lbl">Grand Total Cost</div>
        <div class="gt-amt" id="v_grand">₹ 0.00</div>
        <div class="gt-note" id="v_grand_note">Select a state and fill inputs above</div>
        <div class="gt-split">
          <div class="gt-part">
            <div class="p-lbl">Reimbursable Govt</div>
            <div class="p-amt" id="gt_reimb">—</div>
          </div>
          <div class="gt-part">
            <div class="p-lbl">Professional & Tax</div>
            <div class="p-amt" id="gt_svc">—</div>
          </div>
        </div>
      </div>

    </div></div></div></div>
</section>

<script>
// === ROC CALCULATOR WIDGET JS ===
// Functions prefixed with roc* to avoid conflicts with host page.
// NOT wrapped in IIFE so inline onclick/onchange handlers can find them.
// ═══════════════════════════════════════════════════════════════════════════
// STATE DATA — sourced from MCA eStamp Rate Schedule (official PDF)
// Fields: incStamp (state), moa, aoa_fn(authCap), aoa_rule,
//         moa_sec8, aoa_sec8_fn, incStamp_sec8
//         moa_nocap, aoa_nocap
// ═══════════════════════════════════════════════════════════════════════════
const STATES = [
{
  name: "Andaman & Nicobar",
  incStamp: 20, incStamp_sec8: 20,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300,   aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Andhra Pradesh",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of authorised capital; min ₹1,000; max ₹5,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000), // sec8 WITH share cap same as regular
  aoa_nocap_fn: c => 1000,
},
{
  name: "Arunachal Pradesh",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 200, moa_nocap: 200,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500",
  aoa_sec8_fn: c => 500, aoa_nocap_fn: c => 500,
},
{
  name: "Assam",
  incStamp: 15, incStamp_sec8: 15,
  moa: 200, moa_sec8: 200, moa_nocap: 200,
  aoa_fn: c => 310, aoa_rule: "Fixed ₹310",
  aoa_sec8_fn: c => 310, aoa_nocap_fn: c => 310,
},
{
  name: "Bihar",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Chandigarh",
  incStamp: 3, incStamp_sec8: 3,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 1000, aoa_rule: "Fixed ₹1,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Chhattisgarh",
  incStamp: 10, incStamp_sec8: 10,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of auth capital or ₹1,000, whichever is more; max ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Dadra & Nagar Haveli",
  incStamp: 1, incStamp_sec8: 1,
  moa: 15, moa_sec8: 0, moa_nocap: 15,
  aoa_fn: c => 25, aoa_rule: "Fixed ₹25",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 25,
},
{
  name: "Daman & Diu",
  incStamp: 20, incStamp_sec8: 20,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => Math.ceil(c/500000)*1000,
  aoa_rule: "₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Delhi",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => Math.min(c*0.0015, 2500000),
  aoa_rule: "0.15% of authorised capital; maximum ₹25,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 200,
},
{
  name: "Goa",
  incStamp: 50, incStamp_sec8: 50,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => Math.ceil(c/500000)*1000,
  aoa_rule: "₹1,000 per every ₹5 Lakhs of authorised capital or part thereof",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Gujarat",
  incStamp: 20, incStamp_sec8: 20,
  moa: 100, moa_sec8: 0, moa_nocap: 100,
  aoa_fn: c => Math.min(c*0.005, 500000),
  aoa_rule: "0.5% of authorised capital; maximum ₹5,00,000",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 1000,
},
{
  name: "Haryana",
  incStamp: 15, incStamp_sec8: 15,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => c <= 100000 ? 60 : 120,
  aoa_rule: "₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 60,
},
{
  name: "Himachal Pradesh",
  incStamp: 3, incStamp_sec8: 3,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => c <= 100000 ? 60 : 120,
  aoa_rule: "₹60 if auth. capital ≤ ₹1 Lakh; ₹120 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 60,
},
{
  name: "Jammu & Kashmir",
  incStamp: 10, incStamp_sec8: 10,
  moa: 150, moa_sec8: 0, moa_nocap: 150,
  aoa_fn: c => c <= 100000 ? 150 : 300,
  aoa_rule: "₹150 if auth. capital ≤ ₹1 Lakh; ₹300 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 150,
},
{
  name: "Jharkhand",
  incStamp: 5, incStamp_sec8: 5,
  moa: 63, moa_sec8: 0, moa_nocap: 63,
  aoa_fn: c => 105, aoa_rule: "Fixed ₹105",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 105,
},
{
  name: "Karnataka",
  incStamp: 20, incStamp_sec8: 20,
  moa: 1000, moa_sec8: 0, moa_nocap: 1000,
  aoa_fn: c => Math.max(Math.ceil(c/1000000)*500, 500),
  aoa_rule: "₹500 per every ₹10 Lakhs of authorised capital or part thereof; minimum ₹500",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 500,
},
{
  name: "Kerala",
  incStamp: 25, incStamp_sec8: 25,
  moa: 1000, moa_sec8: 1000, moa_nocap: 1000,
  aoa_fn: c => c<=1000000 ? 2000 : c<=2500000 ? 5000 : c*0.005,
  aoa_rule: "Auth. cap ≤₹10L → ₹2,000 | ₹10L–₹25L → ₹5,000 | >₹25L → 0.5% of auth. capital",
  aoa_sec8_fn: c => c<=1000000 ? 2000 : c<=2500000 ? 5000 : c*0.005,
  aoa_nocap_fn: c => 2000,
},
{
  name: "Lakshadweep",
  incStamp: 25, incStamp_sec8: 25,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => 1000, aoa_rule: "Fixed ₹1,000",
  aoa_sec8_fn: c => 1000, aoa_nocap_fn: c => 1000,
},
{
  name: "Madhya Pradesh",
  incStamp: 50, incStamp_sec8: 50,
  moa: 2500, moa_sec8: 2500, moa_nocap: 2500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 5000), 2500000),
  aoa_rule: "0.15% of authorised capital; minimum ₹5,000; maximum ₹25,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 5000), 2500000),
  aoa_nocap_fn: c => 5000,
},
{
  name: "Maharashtra",
  incStamp: 100, incStamp_sec8: 100,
  moa: 200, moa_sec8: 0, moa_nocap: 0,
  aoa_fn: c => Math.min(Math.ceil(c/500000)*1000, 5000000),
  aoa_rule: "₹1,000 per every ₹5 Lakhs of auth. capital or part thereof; max ₹50 Lakhs (no duty beyond ₹250 Cr)",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 0,
},
{
  name: "Manipur",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Meghalaya",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 300, aoa_nocap_fn: c => 300,
},
{
  name: "Mizoram",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Nagaland",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Odisha",
  incStamp: 10, incStamp_sec8: 10,
  moa: 300, moa_sec8: 300, moa_nocap: 300,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300 (applies to all company types)",
  aoa_sec8_fn: c => 300, aoa_nocap_fn: c => 300,
},
{
  name: "Puducherry",
  incStamp: 10, incStamp_sec8: 10,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Punjab",
  incStamp: 25, incStamp_sec8: 25,
  moa: 5000, moa_sec8: 0, moa_nocap: 5000,
  aoa_fn: c => c <= 100000 ? 5000 : 10000,
  aoa_rule: "₹5,000 if auth. capital ≤ ₹1 Lakh; ₹10,000 if auth. capital > ₹1 Lakh",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 5000,
},
{
  name: "Rajasthan",
  incStamp: 10, incStamp_sec8: 10,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => c * 0.005,
  aoa_rule: "0.5% of authorised capital (no cap for initial registration)",
  aoa_sec8_fn: c => c * 0.005, // Sec8 WITH share capital: same
  aoa_nocap_fn: c => 500,
},
{
  name: "Tamil Nadu",
  incStamp: 20, incStamp_sec8: 20,
  moa: 200, moa_sec8: 0, moa_nocap: 200,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
{
  name: "Telangana",
  incStamp: 20, incStamp_sec8: 20,
  moa: 500, moa_sec8: 500, moa_nocap: 500,
  aoa_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_rule: "0.15% of authorised capital; minimum ₹1,000; maximum ₹5,00,000",
  aoa_sec8_fn: c => Math.min(Math.max(c*0.0015, 1000), 500000),
  aoa_nocap_fn: c => 1000,
},
{
  name: "Tripura",
  incStamp: 10, incStamp_sec8: 10,
  moa: 100, moa_sec8: 100, moa_nocap: 100,
  aoa_fn: c => 150, aoa_rule: "Fixed ₹150",
  aoa_sec8_fn: c => 150, aoa_nocap_fn: c => 150,
},
{
  name: "Uttar Pradesh",
  incStamp: 10, incStamp_sec8: 0,  // Sec8 without share cap = NIL
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500 (applies to all incl. Sec8 with share capital)",
  aoa_sec8_fn: c => 0,  // Sec8 without share cap = NIL
  aoa_nocap_fn: c => 500,
},
{
  name: "Uttarakhand",
  incStamp: 10, incStamp_sec8: 0,
  moa: 500, moa_sec8: 0, moa_nocap: 500,
  aoa_fn: c => 500, aoa_rule: "Fixed ₹500 (applies to all incl. Sec8 with share capital)",
  aoa_sec8_fn: c => 0,
  aoa_nocap_fn: c => 500,
},
{
  name: "West Bengal",
  incStamp: 10, incStamp_sec8: 10,
  moa: 60, moa_sec8: 0, moa_nocap: 60,
  aoa_fn: c => 300, aoa_rule: "Fixed ₹300",
  aoa_sec8_fn: c => 0, aoa_nocap_fn: c => 300,
},
];

// ═══════════════════════════════════════════════════════════════════════════
// ROC REGISTRATION FEE — Companies (Registration Offices & Fees) Rules, 2014
// ═══════════════════════════════════════════════════════════════════════════
function rocCalcROCFee(authCap, companyType) {
  if (companyType === 'nocap') return 0; // no share capital → different fee structure (not computed here)

  const isOPCSmall = (companyType === 'opc' || companyType === 'small');

  if (isOPCSmall) {
    if (authCap <= 1000000) return 2000;
    const excess = Math.min(authCap, 5000000) - 1000000;
    return 2000 + Math.ceil(excess / 10000) * 200;
  }

  // Regular (Private, Public, Section 8 with share capital)
  if (authCap <= 100000) return 5000;

  let fee = 5000;
  // Slab 1: ₹1L to ₹5L → ₹400 per ₹10,000
  if (authCap > 100000) {
    const s1 = Math.min(authCap, 500000) - 100000;
    fee += Math.ceil(s1 / 10000) * 400;
  }
  // Slab 2: ₹5L to ₹50L → ₹300 per ₹10,000
  if (authCap > 500000) {
    const s2 = Math.min(authCap, 5000000) - 500000;
    fee += Math.ceil(s2 / 10000) * 300;
  }
  // Slab 3: ₹50L to ₹1Cr → ₹100 per ₹10,000
  if (authCap > 5000000) {
    const s3 = Math.min(authCap, 10000000) - 5000000;
    fee += Math.ceil(s3 / 10000) * 100;
  }
  // Slab 4: above ₹1Cr → ₹75 per ₹10,000; cap additional at ₹2.5 Cr
  if (authCap > 10000000) {
    const s4 = authCap - 10000000;
    const addlSoFar = fee - 5000;
    const remainCap = 25000000 - addlSoFar;
    fee += Math.min(Math.ceil(s4 / 10000) * 75, remainCap);
  }
  return fee;
}

// INC-20A fee — filing fee per Table of Fees section 5
function rocCalcINC20AFee(nominalCap) {
  if (nominalCap < 100000)   return 200;
  if (nominalCap < 500000)   return 300;
  if (nominalCap < 2500000)  return 400;
  if (nominalCap < 10000000) return 500;
  return 600;
}

// ADT-1 fee — same slab as section 5 filing fees
function rocCalcADTFee(nominalCap) {
  if (nominalCap < 100000)   return 200;
  if (nominalCap < 500000)   return 300;
  if (nominalCap < 2500000)  return 400;
  if (nominalCap < 10000000) return 500;
  return 600;
}

// ═══════════════════════════════════════════════════════════════════════════
// APP STATE
// ═══════════════════════════════════════════════════════════════════════════
let dscCount = 2, adtReq = true;
const inc20aReq = true; // always mandatory
let companyType = 'pvt', sortMode = 'grand';
const DSC_UNIT = 1750, PROF = 2999, GST_ON_FEES = 1439.82;

// Populate state select
const sel = document.getElementById('stateSelect');
sel.innerHTML = '<option value="">— Select a State —</option>';
STATES.forEach(s => {
  const o = document.createElement('option'); o.value = s.name; o.textContent = s.name; sel.appendChild(o);
});
sel.value = 'Maharashtra';

// ═══════════════════════════════════════════════════════════════════════════
// HELPERS
// ═══════════════════════════════════════════════════════════════════════════
function rocFmt(n) {
  if (n === null || isNaN(n)) return '—';
  return '₹ ' + n.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
}
function rocFmtShort(n) {
  if (n === null || isNaN(n) || n === 0) return '₹0';
  return '₹' + n.toLocaleString('en-IN', {maximumFractionDigits:0});
}

function rocSetCT(btn) {
  companyType = btn.dataset.ct;
  document.querySelectorAll('[data-ct]').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  rocCalc();
}
function rocSetADT(btn) {
  adtReq = btn.dataset.adt === 'yes';
  document.querySelectorAll('[data-adt]').forEach(b => b.classList.remove('on'));
  btn.classList.add('on'); rocCalc();
}
function rocDsc(d) {
  dscCount = Math.max(0, Math.min(10, dscCount+d));
  document.getElementById('dscLbl').textContent = dscCount;
  rocCalc();
}

function rocGetStampFees(s, authCap) {
  const isSec8 = companyType === 'sec8';
  const isNoCap = companyType === 'nocap';
  const inc = isSec8 ? s.incStamp_sec8 : s.incStamp;
  const moa = isNoCap ? s.moa_nocap : isSec8 ? s.moa_sec8 : s.moa;
  const aoa = isNoCap ? s.aoa_nocap_fn(authCap) : isSec8 ? s.aoa_sec8_fn(authCap) : s.aoa_fn(authCap);
  return { inc, moa, aoa };
}

// ═══════════════════════════════════════════════════════════════════════════
// MAIN CALCULATE
// ═══════════════════════════════════════════════════════════════════════════
function rocCalc() {
  const stateName = document.getElementById('stateSelect').value;
  const authCap = parseFloat(document.getElementById('authCap').value) || 0;
  const paidCap = parseFloat(document.getElementById('paidCap').value) || 0;
  const s = STATES.find(x => x.name === stateName);

  document.getElementById('dsc_lbl2').textContent = dscCount;

  if (!s) {
    document.getElementById('rs_state').textContent = 'Select a State';
    return;
  }

  document.getElementById('rs_state').textContent = s.name;

  const { inc, moa, aoa } = rocGetStampFees(s, authCap);
  const runFee    = 1000;
  const pantanFee = 143;
  const inc20aFee = companyType !== 'nocap' ? rocCalcINC20AFee(authCap) : 0;
  const adtFee    = adtReq ? rocCalcADTFee(authCap) : 0;

  const totalGovFees  = inc + moa + aoa + runFee + pantanFee + inc20aFee + adtFee;
  const dscFee        = dscCount * DSC_UNIT;
  const totalSvcFees  = dscFee + PROF + GST_ON_FEES;
  const grand         = totalGovFees + totalSvcFees;

  const set = (id, val) => { const el = document.getElementById(id); if (el) el.textContent = val; };
  const dim = (id, flag) => { const el = document.getElementById(id); if (el) el.classList.toggle('dimmed', flag); };

  set('v_inc',    inc > 0 ? rocFmt(inc) : '₹ NIL');
  set('v_moa',    moa > 0 ? rocFmt(moa) : '₹ NIL');
  set('v_aoa',    aoa > 0 ? rocFmt(aoa) : '₹ NIL');
  set('v_run',    rocFmt(runFee));
  set('v_20a',    companyType !== 'nocap' ? rocFmt(inc20aFee) : '₹ NIL');
  set('v_adt',    adtReq ? rocFmt(adtFee) : '₹ NIL');
  set('v_pantan', rocFmt(pantanFee));
  set('v_subtotal_gov', rocFmt(totalGovFees));

  set('v_dsc',    rocFmt(dscFee));
  set('v_prof',   rocFmt(PROF));
  set('v_gstonf', rocFmt(GST_ON_FEES));
  set('v_subtotal_svc', rocFmt(totalSvcFees));

  dim('row_20a', companyType === 'nocap');
  dim('row_adt',  !adtReq);

  set('v_grand', rocFmt(grand));
  set('v_grand_note', `${s.name} · ₹${(authCap/100000).toFixed(1)}L auth cap · ${dscCount} DSC${companyType!=='nocap'?' · INC-20A':''}`);
  set('gt_reimb', rocFmtShort(totalGovFees));
  set('gt_svc',   rocFmtShort(totalSvcFees));
  document.getElementById('aoaNote').style.display = 'block';
  document.getElementById('aoaRuleText').textContent = s.aoa_rule;
}

// ── INIT ──
rocCalc();

// ── TOOLTIP: fixed-position so it escapes overflow:hidden ──
function rocPositionTooltip(btn, box) {
  const r = btn.getBoundingClientRect();
  const tipW = 300;
  let left = r.left;
  // keep within viewport
  if (left + tipW > window.innerWidth - 12) left = window.innerWidth - tipW - 12;
  if (left < 8) left = 8;
  box.style.left = left + 'px';
  box.style.top  = (r.bottom + 8) + 'px';
}

function rocToggleTip(e, id) {
  e.stopPropagation();
  const box  = document.getElementById(id);
  const btn  = e.currentTarget;
  const isVis = box.classList.contains('visible');
  // close all
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
  if (!isVis) {
    rocPositionTooltip(btn, box);
    box.classList.add('visible');
  }
}

// hover support for desktop
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.info-btn').forEach(btn => {
    const id  = btn.getAttribute('onclick').match(/'([^']+)'/)[1];
    const box = document.getElementById(id);
    btn.addEventListener('mouseenter', function() {
      rocPositionTooltip(btn, box);
      box.classList.add('visible');
    });
    btn.addEventListener('mouseleave', function() {
      setTimeout(() => { if (!box.matches(':hover')) box.classList.remove('visible'); }, 80);
    });
    box.addEventListener('mouseleave', function() {
      box.classList.remove('visible');
    });
  });
});

document.addEventListener('click', function() {
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
});
window.addEventListener('scroll', function() {
  document.querySelectorAll('.tooltip-box.visible').forEach(el => el.classList.remove('visible'));
}, true);
</script>

<!-- /ROC FEE CALCULATOR -->

<!-- SECTION 12: BENEFITS -->
<section class="why-choose-section" id="benefits-section">
    <div class="section-container">
        <div style="text-align:center;margin-bottom:48px;">
            <div class="section-eyebrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Key Benefits</div>
            <h2 class="section-title">Why Choose Professional Public Company Registration?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div><h3>Multi-Subscriber Coordination</h3><p>Managing documents for 7+ shareholders and 3+ directors requires systematic coordination. Our team handles it end-to-end with a dedicated coordinator.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><h3>Compliant MOA/AOA Drafting</h3><p>Public company constitutive documents have stricter requirements than private companies. Our CA/CS team ensures compliance with Schedule I of the Companies Act.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Integrated Registrations</h3><p>PAN, TAN, EPFO, ESIC, GST, and Professional Tax - all processed in one SPICe+ filing. No separate applications needed.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3>Post-Incorporation Compliance</h3><p>INC-20A filing, auditor appointment within 30 days, board meeting calendar (4/year), AGM scheduling, and SEBI pre-listing advisory for companies planning IPO.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3>Conversion and Listing Advisory</h3><p>For companies converting from Pvt Ltd to Public Ltd, or planning an IPO, we provide end-to-end regulatory guidance including SEBI compliance.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years Experience</strong></p><p>"Professionalism, attention to detail, and timely communication made the process smooth." - Subhendu Mishra</p><p>"Took minimum time, really impressive acumen. And it's not expensive at all." - Rajib Dutta</p><p><strong>Trusted by:</strong> Hyundai, Asian Paints, Bridgestone. <strong>Offices in Pune, Mumbai, Delhi, and Gurugram.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Public Limited vs Private Limited Company</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Public Limited</th><th>Private Limited</th></tr></thead>
                    <tbody>
                        <tr><td><strong>Members</strong></td><td>Min 7, no max limit</td><td>Min 2, max 200</td></tr><tr><td><strong>Directors</strong></td><td>Min 3, max 15 (extendable)</td><td>Min 2, max 15 (extendable)</td></tr><tr><td><strong>Share Transfer</strong></td><td>Freely transferable</td><td>Restricted per AOA</td></tr><tr><td><strong>Public Offer</strong></td><td>Can invite public subscription</td><td>Cannot invite public</td></tr><tr><td><strong>Stock Exchange Listing</strong></td><td>Eligible (after SEBI compliance)</td><td>Not eligible</td></tr><tr><td><strong>Name Suffix</strong></td><td>'Limited'</td><td>'Private Limited'</td></tr><tr><td><strong>Compliance</strong></td><td>Higher - AGM, 4 board meetings/year, prospectus</td><td>Lower - AGM optional for OPC, fewer filings</td></tr><tr><td><strong>Commencement Certificate</strong></td><td>Mandatory (INC-20A within 180 days)</td><td>Mandatory (INC-20A within 180 days)</td></tr>

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
            <h2 class="section-title">Related Registration Services from Patron Accounting</h2>
            <div class="content-text">
                
                <ul><li><strong><a href="/private-limited-company-registration">Private Limited Company Registration</a></strong> - For businesses seeking limited liability with up to 200 members</li><li><strong><a href="/section8-company-registration">Section 8 Company Registration</a></strong> - For non-profit organisations</li><li><strong><a href="/startup-registration">Startup Registration (DPIIT)</a></strong> - For startup recognition and tax benefits</li><li><strong><a href="/dsc-registration">DSC Registration</a></strong> - Digital Signature Certificate for directors</li><li><strong><a href="/gst-registration">GST Registration</a></strong> - Mandatory for businesses exceeding turnover threshold</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Public Limited Companies</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> <a href="https://www.indiacode.nic.in/handle/123456789/2114" target="_blank" rel="noopener">Companies Act, 2013</a> (Act No. 18 of 2013)</p><p><strong>Key Sections:</strong> Section 2(71) defines Public Company. Section 3 covers formation. Section 7 covers incorporation. Section 10A mandates Certificate of Commencement within 180 days. Section 26 covers prospectus requirements. Section 149 specifies director requirements (minimum 3, at least 1 Indian resident). Section 173 mandates 4 board meetings per year with maximum 120-day gap.</p><p><strong>Regulatory Bodies:</strong> <a href="https://www.mca.gov.in" target="_blank" rel="noopener">MCA</a>/RoC (all companies) + <a href="https://www.sebi.gov.in" target="_blank" rel="noopener">SEBI</a> (listed companies) + Stock Exchanges (NSE/BSE for listed).</p><p><strong>Penalties:</strong> Section 10A(2) - Failure to file INC-20A: Rs 50,000 on company + Rs 1,000/day on each officer in default. Section 450 - General penalty Rs 10,000 + Rs 1,000/day continuing default.</p><p><strong>Annual Compliance:</strong> AGM within 6 months of FY close. 4 board meetings/year (max 120-day gap). AOC-4 (financial statements within 30 days of AGM). MGT-7 (annual return within 60 days of AGM). Statutory audit mandatory. Tax audit if turnover exceeds Rs 1 crore.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions on Public Limited Company Registration</h2>
                    <p class="faq-expanded__lead">Get answers to the most common questions about registering a Public Limited Company in India under the Companies Act, 2013.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'on Public Limited Company Registration'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is a Public Limited Company?</h3>
                        <div class="faq-expanded__a"><p>A Public Limited Company is a type of company defined under Section 2(71) of the Companies Act, 2013, that can offer its shares to the general public for subscription. It requires minimum 7 shareholders and 3 directors, with shares freely transferable. The company name must end with 'Limited'. It can list on stock exchanges under SEBI regulations.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How many directors and shareholders are needed?</h3>
                        <div class="faq-expanded__a"><p>A Public Limited Company requires minimum 7 shareholders with no maximum limit, and minimum 3 directors under Section 149 of the Companies Act, 2013. At least 1 director must be an Indian resident. The maximum number of directors is 15, which can be increased by passing a special resolution.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the minimum capital for Public Limited Company?</h3>
                        <div class="faq-expanded__a"><p>There is no minimum paid-up capital requirement after the Companies (Amendment) Act, 2015 removed the earlier Rs 5 lakh minimum. However, the company must have an authorised share capital of at least Rs 1 lakh declared in the MOA. Government fees depend on the authorised capital amount.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Can a Private Limited Company convert to Public Limited?</h3>
                        <div class="faq-expanded__a"><p>Yes. A Private Limited Company can convert to a Public Limited Company by passing a special resolution, increasing the number of members to minimum 7 and directors to minimum 3, altering the MOA and AOA, and filing Form MGT-14 and Form INC-27 with the RoC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the Certificate of Commencement of Business?</h3>
                        <div class="faq-expanded__a"><p>Under Section 10A of the Companies Act, 2013, every company with share capital must file Form INC-20A within 180 days of incorporation, declaring that every subscriber has paid the value of shares agreed to be taken. Penalty for non-filing: Rs 50,000 on the company and Rs 1,000/day on each officer in default.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is the difference between listed and unlisted public company?</h3>
                        <div class="faq-expanded__a"><p>A listed public company has its shares traded on a recognised stock exchange (NSE or BSE) and is regulated by SEBI in addition to the Companies Act. An unlisted public company is registered with the RoC and governed by the Companies Act but does not trade its shares on any stock exchange. Listed companies have stricter disclosure requirements.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Can a Public Limited Company list on stock exchanges?</h3>
                        <div class="faq-expanded__a"><p>Yes, but listing requires SEBI (Securities and Exchange Board of India) compliance. The company must file an IPO under SEBI ICDR Regulations. Patron Accounting provides pre-listing advisory and compliance support for companies planning to go public.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Can foreigners be directors?</strong> Yes, foreign nationals can be directors but at least 1 director must be Indian resident (182+ days). No citizenship requirement for directors.</p><p><strong>Is statutory audit mandatory?</strong> Yes. Every public company must appoint a statutory auditor within 30 days of incorporation under Section 139.</p><p><strong>How many board meetings required?</strong> Minimum 4 per calendar year under Section 173, with a gap of not more than 120 days between consecutive meetings.</p><p><strong>Can Public Ltd raise funds via debentures?</strong> Yes. Public companies can raise funds through equity shares, preference shares, and debentures subject to Companies Act provisions.</p><p><strong>Is Company Secretary mandatory?</strong> Yes, if paid-up capital is Rs 10 crore or more under Section 203. Otherwise, CS certification is required for annual return.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why Act Now - Public Limited Company Registration</h2>
            <div class="content-text">
                
                <p>Public company compliance deadlines are strict and carry heavier penalties than private companies. INC-20A must be filed within 180 days of incorporation (penalty: Rs 50,000 on company + Rs 1,000/day on directors). AOC-4 must be filed within 30 days of AGM. MGT-7 within 60 days of AGM. Board meetings required every 120 days. Non-compliance can result in director disqualification under Section 164(2) and company strike-off under Section 248.</p><p><strong>Register with professional support - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20want%20to%20register%20a%20Public%20Limited%20Company.%20Please%20share%20details." target="_blank">WhatsApp us</a>.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Public Limited Company Registration Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);">Public Limited Company registration in India is the ideal structure for large-scale businesses seeking to raise capital from the public, list on stock exchanges, and build institutional credibility. Governed by the Companies Act, 2013 and regulated by the Ministry of Corporate Affairs, the registration process requires minimum 7 shareholders and 3 directors, with the company name ending in 'Limited'.</p><p style="color:rgba(255,255,255,0.9);">Patron Accounting's CA and CS team has assisted 10,000+ businesses with company incorporation across Pune, Mumbai, Delhi, and Gurugram. With 15+ years experience and a 4.9 Google rating, we handle the complete incorporation process - from multi-subscriber coordination and MOA/AOA drafting to SPICe+ filing and post-incorporation compliance including INC-20A, auditor appointment, and board meeting scheduling.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20am%20interested%20in%20Public%20Limited%20Company%20Registration.%20Please%20share%20the%20process%20and%20fees." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Public%20Limited%20Company%20Registration&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20am%20interested%20in%20Public%20Limited%20Company%20Registration%20services.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Public Limited Company Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Register your Public Limited Company from anywhere in India with our expert CA and CS team.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid">
<a href="/public-company-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/public-company-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
<a href="/public-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
<a href="/public-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
</div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Public Limited Company Registration</div><div class="pa-cross-grid">
<a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Private Limited Company Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/one-person-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">OPC Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/startup-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration (DPIIT)</div><div class="pa-card-sub">India</div></div></a>
<a href="/dsc-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">DSC Registration</div><div class="pa-card-sub">India</div></div></a>
<a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
</div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months by our CA and CS team. Review triggers include Companies Act amendment, SEBI regulation changes, MCA fee revision, INC-20A deadline changes, and board meeting compliance updates.</p>
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
