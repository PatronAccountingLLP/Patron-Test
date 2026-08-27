
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
    <title>FSSAI Central License - Eligibility, Fees & Application</title>
    <meta name="description" content="FSSAI central license for turnover above Rs 20 crore. Fee Rs 7,500/year. Form B on FoSCoS portal. Import-export, multi-state. Expert CA and CS team.">
    <link rel="canonical" href="/fssai-central-license">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="FSSAI Central License - Eligibility, Fees & Application">
    <meta property="og:description" content="FSSAI central license for turnover above Rs 20 crore. Fee Rs 7,500/year. Form B on FoSCoS portal. Import-export, multi-state. Expert CA and CS team.">
    <meta property="og:url" content="/fssai-central-license">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FSSAI Central License - Eligibility, Fees & Application">
    <meta name="twitter:description" content="FSSAI central license for turnover above Rs 20 crore. Fee Rs 7,500/year. Form B on FoSCoS portal. Import-export, multi-state. Expert CA and CS team.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "FSSAI Central License: Fees and Process",
          "description": "FSSAI central license for turnover above Rs 20 crore. Fee Rs 7,500/year. Form B on FoSCoS portal. Import-export, multi-state. Expert CA and CS team.",
          "url": "https://www.patronaccounting.com/fssai-central-license",
          "serviceType": "FSSAI Central License: Fees and Process",
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
            "url": "https://www.patronaccounting.com/fssai-central-license",
            "priceSpecification": {
              "@type": "PriceSpecification",
              "minPrice": "20",
              "maxPrice": "7500",
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
              "name": "FSSAI Central License: Fees and Process",
              "item": "https://www.patronaccounting.com/fssai-central-license"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "What is the turnover limit for FSSAI Central License?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The FSSAI Central License is required for food business operators with annual turnover above Rs 20 crore. For food transporters and wholesalers, the threshold is Rs 30 crore. Additionally, food importers, exporters, 100% EOUs, e-commerce operators across multiple states, and manufacturers of proprietary food, health supplements, nutraceuticals, and novel foods require Central License regardless of turnover."
              }
            },
            {
              "@type": "Question",
              "name": "How much does an FSSAI Central License cost?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The government fee is Rs 7,500 per year under the FSS (Licensing and Registration) Regulations, 2011. The license can be obtained for 1 to 5 years - Rs 7,500 for 1 year, Rs 15,000 for 2 years, Rs 22,500 for 3 years, and Rs 37,500 for 5 years. Professional service charges for application preparation, FSMS documentation, and filing are additional."
              }
            },
            {
              "@type": "Question",
              "name": "What is the difference between FSSAI State License and Central License?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The State License is for medium-scale FBOs with turnover between Rs 12 lakh and Rs 20 crore, issued by the State Licensing Authority. The Central License is for large-scale FBOs with turnover above Rs 20 crore, issued by the Central Licensing Authority under FSSAI. Central License is also mandatory for import-export operations, multi-state businesses, and certain food categories regardless of turnover. Both use Form B."
              }
            },
            {
              "@type": "Question",
              "name": "Is FSSAI Central License mandatory for food exporters?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, FSSAI Central License is mandatory for all food exporters regardless of annual turnover or production capacity. The 14-digit license number must appear on all exported food products. Additionally, food exporters need an IE Code (Import Export Code) from DGFT, which Patron Accounting can coordinate alongside the FSSAI application."
              }
            },
            {
              "@type": "Question",
              "name": "Can I apply for FSSAI Central License online?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, the application is filed exclusively online through the FoSCoS (Food Safety and Compliance System) portal at foscos.fssai.gov.in. Register on the portal, fill Form B with all business details, upload supporting documents in prescribed format, and pay the license fee online. The entire process from application to tracking is managed through FoSCoS."
              }
            },
            {
              "@type": "Question",
              "name": "What happens if I operate without an FSSAI license?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Operating without a valid FSSAI license is punishable under the FSS Act, 2006. Section 55 prescribes a penalty of up to Rs 5 lakh. Section 59 provides for imprisonment up to 6 months and/or fine up to Rs 1 lakh for unsafe food. Food safety officers can seize food articles and equipment, and courts can order closure of the business premises."
              }
            },
            {
              "@type": "Question",
              "name": "How long is the FSSAI Central License valid?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The license is valid for a minimum of 1 year and maximum of 5 years from the date of issue. Renewal must be applied at least 30 days before expiry through the FoSCoS portal. Late renewal attracts a penalty of Rs 100 per day of delay. The business cannot operate during any period when the license has lapsed. Quick Answers What does the FSSAI 14-digit number starting with '1' mean? A license number starting with '1' indicates a Central License issued by the Central Licensing Authority. Numbers starting with '2' indicate State License or Basic Registration. Is a separate license needed for each state? The Central License covers the principal place of business. Each manufacturing unit in a different state requires a separate State License. When must annual returns be filed? By 31 May each year on the FoSCoS portal, covering food production, purchase, sale, and disposal data for the preceding financial year. Is FSSAI logo display mandatory? Yes. The FSSAI logo and 14-digit license number must be displayed on all food packages and prominently at business premises per Regulation 2.1.8."
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
                        FSSAI Central License Registration in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Threshold:</span> Annual turnover above Rs 20 crore (Rs 30 crore for transporters/wholesalers) under FSS (L&R) Regulations, 2011</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fee:</span> Rs 7,500 per year with 1 to 5 year validity options - paid online through the FoSCoS portal</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Application:</span> Form B on FoSCoS portal (foscos.fssai.gov.in) with FSMS/HACCP documentation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 30-60 days including application processing, site inspection, and verification by Central Licensing Authority</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">Trusted by 10,000+ businesses across India for FSSAI and food compliance services</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Central%20License&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20FSSAI%20Central%20License.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20FSSAI%20Central%20License.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - FSSAI Central License',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'fssai-central-license', 'label' => 'FSSAI Central License', 'selected' => true, 'disabled' => false],
                            ['value' => 'fssai-registration', 'label' => 'FSSAI Registration (Basic)', 'selected' => false, 'disabled' => false],
                            ['value' => 'fssai-state-license', 'label' => 'FSSAI State License', 'selected' => false, 'disabled' => false],
                            ['value' => 'fssai-renewal', 'label' => 'FSSAI Renewal', 'selected' => false, 'disabled' => false],
                            ['value' => 'iec-registration', 'label' => 'IEC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'fssai-returns', 'label' => 'FSSAI Returns', 'selected' => false, 'disabled' => false],
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting handled our FSSAI Central License for a multi-state food distribution company. Their Form B preparation was thorough and the FSMS documentation met all FSSAI requirements. License received in 45 days.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, FreshKart Distributors</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a food exporter, we needed both FSSAI Central License and IEC. Patron coordinated both applications simultaneously - their understanding of FSSAI import-export requirements saved us weeks of effort.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PS</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Sharma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CEO, SpiceWorld Exports Pvt Ltd</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our food manufacturing plant needed Central License with FSMS/HACCP documentation. Patron's team prepared everything from scratch and handled the site inspection coordination. Very professional service.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AV</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit Verma</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Plant Manager, NutriBite Foods</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We operate an e-commerce food platform across 8 states. Patron helped us understand the central vs state license requirements and secured our Central License efficiently. Their annual compliance support is invaluable.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SG</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Gupta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Operations, FoodBox India</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handled our FSSAI Central License renewal just in time - we were 10 days from expiry. They filed on FoSCoS, coordinated the renewal inspection, and ensured zero gap in our license validity. Highly recommend.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">KM</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Karan Mehta</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Maharaja Food Products</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>

    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Expert FSSAI Central License registration - from Form B filing to inspection coordination under the FSS Act, 2006.</p>
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
            <a class="toc-btn" href="#overview-section">Overview</a>
            <a class="toc-btn" href="#what-section">What Is It</a>
            <a class="toc-btn" href="#who-section">Who Needs It</a>
            <a class="toc-btn" href="#services-section">Our Services</a>
            <a class="toc-btn" href="#procedure-section">7-Step Process</a>
            <a class="toc-btn" href="#documents-section">Documents</a>
            <a class="toc-btn" href="#challenges-section">Challenges</a>
            <a class="toc-btn" href="#fees-section">Fees</a>
            <a class="toc-btn" href="#timeline-section">Timeline</a>
            <a class="toc-btn" href="#benefits-section">Benefits</a>
            <a class="toc-btn" href="#comparison-section">Central vs State vs Basic</a>
            <a class="toc-btn" href="#faq-section">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Central License - Complete Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - FSSAI Central License Services at a Glance</strong></p>
                    <p>The FSSAI Central License is the highest tier of food business licensing in India, mandated under the Food Safety and Standards (Licensing and Registration) Regulations, 2011 for large-scale food businesses. It is required for FBOs with annual turnover above Rs 20 crore, import-export operations, multi-state operations, and large-capacity manufacturers. Application is filed via Form B on the <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS portal</a> at a fee of Rs 7,500 per year.</p>
                <div class="table-responsive-wrapper" style="margin-top:16px;">
                <table>
                    <thead><tr><th>Parameter</th><th>Details</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Food Safety and Standards Act, 2006 (Section 31) + FSS (Licensing and Registration) Regulations, 2011</td></tr>
                        <tr><td>Turnover Threshold</td><td>Above Rs 20 crore annual turnover (Rs 30 crore for transporters and wholesalers)</td></tr>
                        <tr><td>Application Form</td><td>Form B filed on FoSCoS portal (foscos.fssai.gov.in)</td></tr>
                        <tr><td>Annual Fee</td><td>Rs 7,500 per year (validity 1 to 5 years)</td></tr>
                        <tr><td>Who Issues It</td><td>Central Licensing Authority under FSSAI, Government of India</td></tr>
                        <tr><td>Validity</td><td>1 to 5 years (renewable 30 days before expiry)</td></tr>
                        <tr><td>FSSAI License Number</td><td>14-digit unique number starting with '1' for central license</td></tr>
                    </tbody>
                </table>
                </div>
                <p style="margin-top:0;</p>
                </div>
                <p>The FSSAI Central License is essential for large food manufacturers, importers, exporters, e-commerce food platforms, multi-state distributors, and 100% export-oriented units. Under the <a href="https://fssai.gov.in" target="_blank" rel="noopener">Food Safety and Standards Act, 2006</a>, every food business operator must obtain appropriate FSSAI registration or license before commencing operations.</p>
                <p>Non-compliance attracts penalties of up to Rs 5 lakh and imprisonment of up to 6 months under Section 55 and Section 59 of the FSS Act, 2006. With India's food industry projected to reach USD 535 billion by 2025-26, having a valid FSSAI Central License is not just a legal requirement but a competitive advantage for market access. Patron Accounting's CA and CS team handles the complete Central License process from offices in Pune, Mumbai, Delhi, and Gurugram.</p>
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
                <h2 class="section-title">What Is FSSAI Central License?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>An FSSAI Central License is a food business license issued by the Central Licensing Authority under the Food Safety and Standards (Licensing and Registration) Regulations, 2011, required for large-scale food business operators with annual turnover exceeding Rs 20 crore or those involved in import, export, or multi-state operations.</p>
                    <p>The Food Safety and Standards Authority of India (FSSAI), established under the FSS Act, 2006 as an autonomous body under the Ministry of Health and Family Welfare, administers a 3-tier licensing system: Basic Registration (turnover up to Rs 12 lakh, Form A), State License (turnover Rs 12 lakh to Rs 20 crore, Form B), and Central License (turnover above Rs 20 crore, Form B).</p>
                    <p>The Central License is distinguished by its issuance by the Central Licensing Authority (not the state food safety department) and is identified by a 14-digit FSSAI license number starting with '1'. Applications are filed exclusively through the <a href="https://foscos.fssai.gov.in" target="_blank" rel="noopener">FoSCoS</a> (Food Safety and Compliance System) portal.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for FSSAI Central License:</strong></p>
                    <p><strong>FoSCoS (Food Safety and Compliance System)</strong> - The official online portal at foscos.fssai.gov.in for filing applications, renewals, modifications, and compliance management for all food business licenses and registrations.</p>
                    <p><strong>Food Business Operator (FBO)</strong> - Any person or entity carrying on food business and responsible for ensuring compliance with the FSS Act, 2006. Includes manufacturers, processors, importers, and exporters.</p>
                    <p><strong>Form B</strong> - The prescribed application form under FSS (L&R) Regulations, 2011 for obtaining both State and Central FSSAI licenses.</p>
                    <p><strong>FSMS Plan</strong> - Food Safety Management System plan documenting food safety procedures, HACCP principles, quality control measures, and recall procedures - required for Central License applications.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- FSSAI Shield -->
                            <path d="M100 15L45 42V95C45 135 100 165 100 165C100 165 155 135 155 95V42L100 15Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- FSSAI text -->
                            <text x="100" y="70" font-size="18" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial, sans-serif">FSSAI</text>
                            <!-- Check mark -->
                            <circle cx="100" cy="100" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M92 100l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- 14-digit badge -->
                            <rect x="25" y="130" width="55" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="52" y="142.5" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">14-DIGIT</text>
                            <!-- Central badge -->
                            <circle cx="165" cy="30" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <text x="165" y="34" font-size="8" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">CL</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">FSSAI Central License</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>FSS Act 2006</span>
                        <strong>FSSAI Central License</strong>
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
            <h2 class="section-title">Who Needs an FSSAI Central License?</h2>
            <div class="content-text">
                
                <p>The following food business operators must obtain an FSSAI Central License:</p>
                <ul>
                    <li><strong>Large-Scale FBOs:</strong> Annual turnover above Rs 20 crore (Rs 30 crore for food transporters and wholesalers)</li>
                    <li><strong>Food Importers and Exporters:</strong> Mandatory regardless of turnover - FSSAI number must appear on all imported/exported food packages</li>
                    <li><strong>100% Export Oriented Units (EOUs):</strong> In the food sector requiring FSSAI compliance for international trade</li>
                    <li><strong>E-Commerce Food Operators:</strong> Food delivery aggregators and platforms operating across multiple states</li>
                    <li><strong>Large Manufacturers:</strong> Production capacity above 2 MT/day (excluding milk and meat), dairy units handling 50,000+ litres/day, meat processors 500+ kg/day</li>
                    <li><strong>Multi-State FBOs:</strong> Requiring central-level licensing for the head office and unified compliance framework</li>
                    <li><strong>Proprietary Food Manufacturers:</strong> Health supplements, nutraceuticals, and novel foods requiring prior FSSAI HQ approval</li>
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
            <h2 class="section-title">Patron Accounting's FSSAI Central License Services</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Complete Central License Application</td><td>End-to-end Form B preparation, document compilation, FoSCoS portal filing, fee payment, and follow-up until license issuance</td></tr>
                        <tr><td>Eligibility Assessment</td><td>Determination of whether your business requires Central License, State License, or Basic Registration based on turnover, production capacity, and scope</td></tr>
                        <tr><td>FSMS and HACCP Documentation</td><td>Preparation of Food Safety Management System plan, HACCP documentation, recall plan, and quality control procedures required for Central License</td></tr>
                        <tr><td>Import-Export Food License Support</td><td>Specialized assistance for food importers/exporters including IE Code coordination, product approval documentation, and labelling compliance</td></tr>
                        <tr><td>Inspection Preparation</td><td>Pre-inspection readiness assessment of food premises, document preparation, and coordination with FSSAI inspectors during verification</td></tr>
                        <tr><td>Renewal and Ongoing Compliance</td><td>Timely renewal 30 days before expiry, annual return filing by 31 May, modification applications, and compliance advisory. <a href="/fssai-renewal">Learn more</a></td></tr>

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
            <h2 class="section-title">7-Step FSSAI Central License Application Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Patron Accounting guides you through the complete FSSAI Central License process - from eligibility assessment to license issuance under the FSS Act, 2006.</p>
        </header>
        <div class="steps-container">
            
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine Eligibility for Central License</h3>
        <p class="step-description">Verify that your food business meets Central License criteria - annual turnover above Rs 20 crore, involvement in import/export, multi-state operations, or production capacity exceeding the thresholds in the FSS (L&R) Regulations, 2011. Patron Accounting conducts a free eligibility assessment.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Turnover/capacity verified</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> License tier confirmed</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><rect x="30" y="34" width="60" height="8" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><rect x="30" y="46" width="60" height="8" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Rs 20 Cr CHECK</text></svg></div>
            <span class="illustration-label">Eligibility Confirmed</span>
            <span class="step-number-large">01</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Register on the FoSCoS Portal</h3>
        <p class="step-description">Create an account on the FoSCoS portal at foscos.fssai.gov.in. This is the exclusive online platform for all FSSAI license and registration applications. You will receive a user ID and password upon registration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FoSCoS account created</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Login credentials received</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="10" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="22" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FoSCoS PORTAL</text><rect x="30" y="35" width="60" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="44" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">REGISTER</text><rect x="30" y="55" width="60" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/></svg></div>
            <span class="illustration-label">Portal Ready</span>
            <span class="step-number-large">02</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Fill Form B Online</h3>
        <p class="step-description">Complete Form B with comprehensive details including: business name and address, kind of business activity, food category and products, production capacity, annual turnover, authorized person details, technical expert qualifications, water source, and FSMS/HACCP plan details.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form B completed</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All fields verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="75" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="5" width="90" height="16" rx="6" fill="#14365F"/><text x="60" y="17" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FORM B</text><line x1="28" y1="32" x2="92" y2="32" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><line x1="28" y1="44" x2="80" y2="44" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="54" x2="70" y2="54" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/><line x1="28" y1="64" x2="85" y2="64" stroke="#14365F" stroke-width="1.5" opacity="0.3" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Application Prepared</span>
            <span class="step-number-large">03</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Upload Supporting Documents</h3>
        <p class="step-description">Upload all required documents in prescribed format: identity and address proof, business registration, food product details, layout plan, equipment list, water test report, FSMS plan, NOCs as applicable, and turnover evidence.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All documents uploaded</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FSMS plan attached</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="15" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M60 55 L60 30" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M50 38 L60 28 L70 38" stroke="#F5A623" stroke-width="3" fill="none" stroke-linecap="round"/><text x="60" y="80" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">FSMS + DOCS</text></svg></div>
            <span class="illustration-label">Documents Submitted</span>
            <span class="step-number-large">04</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">Pay the Central License Fee Online</h3>
        <p class="step-description">Pay Rs 7,500 per year through the FoSCoS portal using net banking, credit/debit card, or other online payment methods. The license can be obtained for 1 to 5 years - paying for multiple years upfront (Rs 37,500 for 5 years) avoids annual renewal hassle.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Rs 7,500/yr fee paid</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payment receipt generated</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="20" width="90" height="50" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="15" y="20" width="90" height="15" rx="6" fill="#14365F"/><text x="60" y="31" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">Rs 7,500/yr</text><line x1="25" y1="48" x2="95" y2="48" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/><circle cx="85" cy="58" r="6" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M82 58l2 2 4-4" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Fee Paid</span>
            <span class="step-number-large">05</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Site Inspection by FSSAI Officers</h3>
        <p class="step-description">FSSAI designated officers may conduct a physical inspection of the food business premises to verify compliance with food safety standards, infrastructure, equipment, sanitation, and FSMS implementation. Patron Accounting prepares your premises for inspection.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Premises inspected</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Compliance verified</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="55" cy="38" r="18" fill="none" stroke="#F5A623" stroke-width="2"/><line x1="68" y1="50" x2="82" y2="64" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><path d="M48 38l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round"/></svg></div>
            <span class="illustration-label">Inspection Passed</span>
            <span class="step-number-large">06</span>
        </div>
    </div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 7</span>
        <h3 class="step-title">Central License Issued</h3>
        <p class="step-description">Upon satisfactory verification and inspection, the Central Licensing Authority issues the FSSAI Central License with a unique 14-digit license number (starting with '1'). The license must be prominently displayed at the business premises per Regulation 2.1.8.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 14-digit license issued</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Display at premises</span>
        </div>
    </div>
    <div class="step-visual">
        <div class="step-illustration">
            <div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="18" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M52 38l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><text x="60" y="68" font-size="7" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">LICENSED</text></svg></div>
            <span class="illustration-label">License Granted</span>
            <span class="step-number-large">07</span>
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
            <h2 class="section-title">Documents Required for FSSAI Central License</h2>
            <div class="content-text">
                
                <ul>
                    <li><strong>Completed Form B</strong> - Generated through FoSCoS portal with all business and product details</li>
                    <li><strong>Identity proof of FBO/authorized person</strong> - PAN, Aadhaar, Passport, or Voter ID</li>
                    <li><strong>Address proof of FBO</strong> - Utility bill or bank statement</li>
                    <li><strong>Proof of business premises</strong> - Rent agreement + NOC, or ownership documents</li>
                    <li><strong>Business registration certificate</strong> - Incorporation certificate, partnership deed, GST certificate</li>
                    <li><strong>Layout plan</strong> of the food processing unit/premises</li>
                    <li><strong>List of food products</strong> manufactured/processed/stored/distributed</li>
                    <li><strong>List of equipment and machinery</strong> with details</li>
                    <li><strong>Water test report</strong> from accredited laboratory (for manufacturing units)</li>
                    <li><strong>FSMS plan and HACCP documentation</strong> with recall plan</li>
                    <li><strong>Supporting turnover evidence</strong> - Financial statements or audited accounts</li>
                    <li><strong>IE Code from DGFT</strong> - For importers/exporters</li>
                    <li><strong>NOC/Product Approval from FSSAI</strong> - For proprietary food, nutraceuticals, novel food</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common FSSAI Central License Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Complex Form B with Technical Details</td><td>Form B requires detailed technical information including food categories, production processes, equipment lists, water sources, and FSMS plans that most FBOs struggle to prepare</td><td>Our food compliance team fills every field accurately based on your business specifics, eliminating rejection risk and ensuring first-time approval</td></tr>
                        <tr><td>FSMS/HACCP Documentation</td><td>Central License applicants must submit a comprehensive Food Safety Management System plan that most businesses lack the expertise to prepare</td><td>We create FSMS plans and HACCP documentation tailored to your specific food business operations, meeting all FSSAI requirements</td></tr>
                        <tr><td>Inspection Readiness</td><td>FSSAI officers conduct site inspections assessing food safety infrastructure, sanitation, equipment, storage, and compliance - many businesses fail on first inspection</td><td>We provide a pre-inspection readiness assessment, identify gaps, and help you address them before the official inspection visit</td></tr>
                        <tr><td>Import-Export Specific Requirements</td><td>Food importers and exporters face additional compliance including product approvals, labelling compliance, and FSSAI HQ clearances that are complex to navigate</td><td>Our team handles the complete import-export food license process including IE Code coordination and product-specific documentation</td></tr>

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
            <h2 class="section-title">FSSAI Central License Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Central License Fee</td><td>Rs 7,500 per year</td></tr>
                        <tr><td>License for 1 Year</td><td>Rs 7,500</td></tr>
                        <tr><td>License for 2 Years</td><td>Rs 15,000</td></tr>
                        <tr><td>License for 3 Years</td><td>Rs 22,500</td></tr>
                        <tr><td>License for 5 Years</td><td>Rs 37,500</td></tr>
                        <tr><td>Modification Fee</td><td>Rs 7,500 (equal to 1-year license fee)</td></tr>
                        <tr><td>Late Renewal Penalty</td><td>Rs 100 per day of delay</td></tr>
                        <tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 14,999 (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free FSSAI Central License consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20FSSAI%20Central%20License%20help.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Central License Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Eligibility Assessment</td><td>1-2 days</td></tr>
                        <tr><td>Document Compilation and FSMS Preparation</td><td>5-10 days</td></tr>
                        <tr><td>Form B Filing on FoSCoS</td><td>1-2 days</td></tr>
                        <tr><td>Application Processing by FSSAI</td><td>7-15 working days</td></tr>
                        <tr><td>Site Inspection (if required)</td><td>7-30 days as per FSSAI schedule</td></tr>
                        <tr><td>License Issuance</td><td>Upon satisfactory verification</td></tr>
                        <tr><td>Total End-to-End</td><td>30-60 days</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> Renewal must be applied at least 30 days before license expiry through the FoSCoS portal. Late renewal attracts a penalty of Rs 100 per day of delay, and the business cannot operate during any lapsed period. Annual returns must be filed by 31 May each year.</p>

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
            <h2 class="section-title">Benefits of FSSAI Central License</h2>
        </div>
        <div class="features-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;">
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Legal Compliance</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Operating without FSSAI license is punishable under Section 55 with penalties up to Rs 5 lakh. A valid Central License ensures full legal compliance for large-scale food operations</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Import-Export Authorization</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Only Central License holders can legally import or export food products. The 14-digit FSSAI number must appear on all food packages per FSSAI labelling regulations</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Multi-State Operations</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Central License covers the principal place of business for nationally distributed food brands, providing a unified compliance framework</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Consumer Trust and Brand Value</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">The FSSAI logo and 14-digit license number on food packaging signals food safety compliance, building consumer trust and retail confidence</p>
            </article>
            <article class="feature-card" style="background:var(--white);border:1px solid var(--gray-200);border-radius:var(--radius-lg);padding:28px;transition:all 0.3s ease;">
                <div style="width:48px;height:48px;background:var(--orange-light);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3 style="font-size:17px;font-weight:700;color:var(--blue);margin-bottom:8px;">Government and E-Commerce Access</h3>
                <p style="font-size:14px;color:var(--text-secondary);line-height:1.6;margin:0;">Many government procurement contracts and major e-commerce platforms (Amazon, Flipkart, BigBasket, Swiggy, Zomato) require valid FSSAI Central License as mandatory eligibility</p>
            </article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Why 10,000+ Businesses Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p><strong>10,000+ businesses</strong> including food manufacturers, importers, exporters, and restaurant chains trust Patron Accounting for FSSAI and compliance services. With <strong>15+ years of experience</strong>, a <strong>4.9-star Google rating</strong>, and <strong>50,000+ documents filed</strong>, our CA and CS team delivers reliable food business licensing for India's growing food industry.</p>
                <p>With offices in Pune, Mumbai, Delhi, and Gurugram, we serve food businesses across India - from startups to large-scale manufacturers.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">FSSAI Central License vs State License vs Basic Registration</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>Basic Registration</th><th>State License</th><th>Central License</th></tr></thead>
                    <tbody>
                        <tr><td>Turnover</td><td>Up to Rs 12 lakh</td><td>Rs 12 lakh to Rs 20 crore</td><td>Above Rs 20 crore</td></tr>
                        <tr><td>Application Form</td><td>Form A</td><td>Form B</td><td>Form B</td></tr>
                        <tr><td>Annual Fee</td><td>Rs 100</td><td>Rs 2,000 to Rs 5,000</td><td>Rs 7,500</td></tr>
                        <tr><td>Issued By</td><td>District Food Safety Officer</td><td>State Licensing Authority</td><td>Central Licensing Authority (FSSAI)</td></tr>
                        <tr><td>License Number</td><td>Starts with 2</td><td>Starts with 2</td><td>Starts with 1</td></tr>
                        <tr><td>Import/Export</td><td>Not eligible</td><td>Not eligible</td><td>Mandatory for import/export</td></tr>
                        <tr><td>Inspection</td><td>Not typically required</td><td>May be required</td><td>Usually required</td></tr>
                        <tr><td>FSMS/HACCP</td><td>Not required</td><td>May be required</td><td>Required</td></tr>

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
            <h2 class="section-title">Related FSSAI and Compliance Services</h2>
            <div class="content-text">
                
                <p>Patron Accounting offers a comprehensive suite of FSSAI and business compliance services:</p>
                <ul>
                    <li><a href="/fssai-registration">FSSAI Registration (Basic)</a> - For small food businesses with turnover up to Rs 12 lakh</li>
                    <li><a href="/fssai-state-license">FSSAI State License</a> - For medium businesses with turnover Rs 12 lakh to Rs 20 crore</li>
                    <li><a href="/fssai-renewal">FSSAI Renewal</a> - Timely renewal before expiry to avoid Rs 100/day penalty</li>
                    <li><a href="/fssai-returns">FSSAI Returns</a> - Annual return filing compliance by 31 May each year</li>
                    <li><a href="/iec-registration">IEC Registration</a> - Import Export Code for food trade through DGFT</li>
                    <li><a href="/gst-registration">GST Registration</a> - Mandatory for food businesses above threshold</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for FSSAI Central License</h2>
            <div class="content-text">
                
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Provision</th><th>Key Requirement</th></tr></thead>
                    <tbody>
                        <tr><td><a href="https://fssai.gov.in" target="_blank" rel="noopener">Section 31, FSS Act 2006</a></td><td>No person shall commence or carry on any food business except under a license or registration</td></tr>
                        <tr><td>Section 55</td><td>Penalty for operating without license - fine up to Rs 5 lakh</td></tr>
                        <tr><td>Section 59</td><td>Penalty for unsafe food - imprisonment up to 6 months and/or fine up to Rs 1 lakh</td></tr>
                        <tr><td>Section 63</td><td>Penalty for food containing extraneous matter - fine up to Rs 1 lakh</td></tr>
                        <tr><td>Section 66</td><td>Penalty for false or misleading labelling - fine up to Rs 3 lakh</td></tr>
                        <tr><td>Regulation 2.1.1, FSS (L&R)</td><td>Specifies Central License eligibility by business type, turnover, and production capacity</td></tr>
                        <tr><td>Regulation 2.1.2</td><td>Application in Form B with prescribed documents and fee</td></tr>
                        <tr><td>Regulation 2.1.8</td><td>License to be prominently displayed at business premises with FSSAI logo</td></tr>
                    </tbody>
                </table>
                </div>
                <p><strong>Regulatory Authority:</strong> <a href="https://fssai.gov.in" target="_blank" rel="noopener">FSSAI</a>, established under the FSS Act, 2006, under the Ministry of Health and Family Welfare, Government of India.</p>
                <p><strong>Annual Compliance:</strong> File annual returns on FoSCoS portal by 31 May. Maintain records of food production, purchase, sale, and disposal. Comply with FSSAI labelling and packaging regulations. Renew license 30 days before expiry.</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - FSSAI Central License</h2>
                    <p class="faq-expanded__lead">Expert answers to common questions about FSSAI Central License eligibility, fees, process, and compliance in India.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'FSSAI Central License'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">What is the turnover limit for FSSAI Central License?</h3>
                        <div class="faq-expanded__a"><p>The FSSAI Central License is required for food business operators with annual turnover above Rs 20 crore. For food transporters and wholesalers, the threshold is Rs 30 crore. Additionally, food importers, exporters, 100% EOUs, e-commerce operators across multiple states, and manufacturers of proprietary food, health supplements, nutraceuticals, and novel foods require Central License regardless of turnover.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How much does an FSSAI Central License cost?</h3>
                        <div class="faq-expanded__a"><p>The government fee is Rs 7,500 per year under the FSS (Licensing and Registration) Regulations, 2011. The license can be obtained for 1 to 5 years - Rs 7,500 for 1 year, Rs 15,000 for 2 years, Rs 22,500 for 3 years, and Rs 37,500 for 5 years. Professional service charges for application preparation, FSMS documentation, and filing are additional.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the difference between FSSAI State License and Central License?</h3>
                        <div class="faq-expanded__a"><p>The State License is for medium-scale FBOs with turnover between Rs 12 lakh and Rs 20 crore, issued by the State Licensing Authority. The Central License is for large-scale FBOs with turnover above Rs 20 crore, issued by the Central Licensing Authority under FSSAI. Central License is also mandatory for import-export operations, multi-state businesses, and certain food categories regardless of turnover. Both use Form B.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is FSSAI Central License mandatory for food exporters?</h3>
                        <div class="faq-expanded__a"><p>Yes, FSSAI Central License is mandatory for all food exporters regardless of annual turnover or production capacity. The 14-digit license number must appear on all exported food products. Additionally, food exporters need an IE Code (Import Export Code) from DGFT, which Patron Accounting can coordinate alongside the FSSAI application.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can I apply for FSSAI Central License online?</h3>
                        <div class="faq-expanded__a"><p>Yes, the application is filed exclusively online through the FoSCoS (Food Safety and Compliance System) portal at foscos.fssai.gov.in. Register on the portal, fill Form B with all business details, upload supporting documents in prescribed format, and pay the license fee online. The entire process from application to tracking is managed through FoSCoS.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What happens if I operate without an FSSAI license?</h3>
                        <div class="faq-expanded__a"><p>Operating without a valid FSSAI license is punishable under the FSS Act, 2006. Section 55 prescribes a penalty of up to Rs 5 lakh. Section 59 provides for imprisonment up to 6 months and/or fine up to Rs 1 lakh for unsafe food. Food safety officers can seize food articles and equipment, and courts can order closure of the business premises.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">How long is the FSSAI Central License valid?</h3>
                        <div class="faq-expanded__a"><p>The license is valid for a minimum of 1 year and maximum of 5 years from the date of issue. Renewal must be applied at least 30 days before expiry through the FoSCoS portal. Late renewal attracts a penalty of Rs 100 per day of delay. The business cannot operate during any period when the license has lapsed.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What does the FSSAI 14-digit number starting with '1' mean?</strong> A license number starting with '1' indicates a Central License issued by the Central Licensing Authority. Numbers starting with '2' indicate State License or Basic Registration.</p>
                <p><strong>Is a separate license needed for each state?</strong> The Central License covers the principal place of business. Each manufacturing unit in a different state requires a separate State License.</p>
                <p><strong>When must annual returns be filed?</strong> By 31 May each year on the FoSCoS portal, covering food production, purchase, sale, and disposal data for the preceding financial year.</p>
                <p><strong>Is FSSAI logo display mandatory?</strong> Yes. The FSSAI logo and 14-digit license number must be displayed on all food packages and prominently at business premises per Regulation 2.1.8.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Get Your FSSAI Central License - Avoid Penalties</h2>
            <div class="content-text">
                
                <p>Operating without FSSAI license attracts penalties of up to Rs 5 lakh under Section 55 and imprisonment of up to 6 months under Section 59 of the FSS Act, 2006. Food safety officers can seize food articles and equipment, and courts can order closure of your business premises. Every day without a license is a day of legal exposure.</p>
                <p><strong>Don't risk your food business.</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20FSSAI%20Central%20License%20help.%20Please%20call%20me." target="_blank">WhatsApp us</a> for a free eligibility assessment today.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Your FSSAI Central License Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">The FSSAI Central License is the cornerstone of legal compliance for large-scale food businesses, importers, exporters, and multi-state operators in India. Governed by the Food Safety and Standards Act, 2006 and the FSS (Licensing and Registration) Regulations, 2011, it requires a comprehensive application through the FoSCoS portal with FSMS documentation, site inspection, and a fee of Rs 7,500 per year.</p>
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting's CA and CS team handles the complete Central License process - from eligibility assessment and Form B filing to FSMS preparation, inspection coordination, and annual compliance management. With offices in Pune, Mumbai, Delhi, and Gurugram and 15+ years of experience, we serve food businesses across India.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%20Patron%20Accounting%2C%20I%20need%20FSSAI%20Central%20License%20help.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20FSSAI%20Central%20License&body=Hello%20Patron%20Accounting%2C%0A%0AI%20need%20FSSAI%20Central%20License%20registration.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">FSSAI Central License Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides FSSAI Central License registration for food businesses in major cities across India.</p>
            
            <div class="pa-city-block" style="margin-bottom:40px;">
                <p class="pa-block-title">FSSAI Central License by City</p>
                <p class="pa-block-sub">Expert food business licensing for large-scale FBOs</p>
                <div class="pa-city-grid">
                    <a href="/fssai-central-license/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-central-license/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
                    <a href="/fssai-central-license/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a>
                    <a href="/fssai-central-license/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
                </div>
            </div>
            <div class="pa-city-block">
                <p class="pa-block-title">Related FSSAI and Compliance Services</p>
                <p class="pa-block-sub">Comprehensive food business licensing and compliance</p>
                <div class="pa-cross-grid">
                    <a href="/fssai-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Registration</div><div class="pa-card-sub">Basic</div></div></a>
                    <a href="/fssai-state-license" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI State License</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fssai-renewal" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Renewal</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/fssai-returns" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">FSSAI Returns</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/iec-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">IEC Registration</div><div class="pa-card-sub">India</div></div></a>
                    <a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 10 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">10 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 10 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months - aligned to FSSAI regulation amendments, fee revisions, FoSCoS portal updates, and threshold changes. Next review: June 2026.</p>
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
