
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
    <title>Pvt Ltd Company Registration in Chennai – SPICe+, Fees &amp; ROC</title>
    <meta name="description" content="CA-assisted private limited company registration in Chennai. SPICe+ filing with RoC Chennai, MOA, AOA, DSC, DIN. Serving OMR, MEPZ businesses. Call +91 945 945 6700.">
    <link rel="canonical" href="/private-limited-company-registration/chennai">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Pvt Ltd Company Registration in Chennai – SPICe+, Fees &amp; ROC">
    <meta property="og:description" content="CA-assisted private limited company registration in Chennai. SPICe+ filing with RoC Chennai, MOA, AOA, DSC, DIN. Serving OMR, MEPZ businesses. Call +91 945 945 6700.">
    <meta property="og:url" content="/private-limited-company-registration/chennai">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pvt Ltd Company Registration in Chennai – SPICe+, Fees &amp; ROC">
    <meta name="twitter:description" content="CA-assisted private limited company registration in Chennai. SPICe+ filing with RoC Chennai, MOA, AOA, DSC, DIN. Serving OMR, MEPZ businesses. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Private Limited Company Registration in Chennai",
          "description": "CA-assisted private limited company registration in Chennai. SPICe+ filing with RoC Chennai, MOA, AOA, DSC, DIN. Serving OMR, MEPZ businesses. Call +91 945 945 6700.",
          "url": "https://www.patronaccounting.com/private-limited-company-registration/chennai",
          "serviceType": "Private Limited Company Registration in Chennai",
          "areaServed": {
            "@type": "City",
            "name": "Chennai"
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
            "url": "https://www.patronaccounting.com/private-limited-company-registration/chennai",
            "price": "9999"
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
              "name": "Private Limited Company Registration",
              "item": "https://www.patronaccounting.com/private-limited-company-registration"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Pvt Ltd Company Registration in Chennai",
              "item": "https://www.patronaccounting.com/private-limited-company-registration/chennai"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Which RoC office handles company registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company registration in Chennai is processed by RoC Chennai at Block No.6, B Wing, 2nd Floor, Shastri Bhawan, 26 Haddows Road, Chennai 600034. All SPICe+ forms for Tamil Nadu are submitted electronically to this office."
              }
            },
            {
              "@type": "Question",
              "name": "Can I register a Pvt Ltd company online from Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. The entire process is online through the MCA portal. DSC via Aadhaar eKYC, SPICe+ filed electronically, Certificate of Incorporation issued digitally by RoC Chennai. No physical visit required."
              }
            },
            {
              "@type": "Question",
              "name": "What is the cost of Pvt Ltd registration in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Private limited company registration in Chennai costs Rs 9,999 to Rs 20,000 all-inclusive covering DSC, DIN, name reservation, SPICe+ fee, Tamil Nadu stamp duty, PAN/TAN, and professional fees."
              }
            },
            {
              "@type": "Question",
              "name": "How many days does registration take in Chennai?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Company registration takes 7-15 working days. DSC 1-2 days, name reservation 1-3 days, SPICe+ processing by RoC Chennai 3-7 days."
              }
            }
          ]
        }
      ]
    }
</script>

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
                        Private Limited Company Registration in Chennai: CA-Assisted Incorporation
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">08 April 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Documents:</span> PAN, Aadhaar, address proof, registered office proof, NOC, photographs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Fees:</span> Pvt Ltd registration in Chennai starts from Rs 9,999 (all-inclusive)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Eligibility:</span> Min 2 directors (1 Indian resident) + 2 shareholders, max 200 members</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Timeline:</span> 7-15 working days for Certificate of Incorporation</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Pvt%20Ltd%20Registration%20in%20Chennai&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20Pvt%20Ltd%20registration%20in%20Chennai.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Pvt%20Ltd%20company%20registration%20in%20Chennai.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Pvt Ltd Company Registration in Chennai',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'private-limited-company-registration-in-india/chennai', 'label' => 'Pvt Ltd Registration in Chennai', 'selected' => true, 'disabled' => false],
                            ['value' => 'llp-incorporation/chennai', 'label' => 'LLP Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration/chennai', 'label' => 'GST Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'trademark-registration/chennai', 'label' => 'Trademark Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration/chennai', 'label' => 'Startup Registration in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'accounting-services/chennai', 'label' => 'Accounting Services in Chennai', 'selected' => false, 'disabled' => false],
                            ['value' => 'payroll-services/chennai', 'label' => 'Payroll Services in Chennai', 'selected' => false, 'disabled' => false],
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
        
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Join 10,000+ businesses who trust Patron Accounting</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-is-section" class="toc-btn">What Is</a><a href="#who-section" class="toc-btn">Who Needs</a><a href="#services-section" class="toc-btn">Services</a><a href="#procedure-section" class="toc-btn">Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#challenges-section" class="toc-btn">Challenges</a><a href="#fees-section" class="toc-btn">Fees</a><a href="#timeline-section" class="toc-btn">Timeline</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Comparison</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Company Registration in Chennai: Overview and TL;DR</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Pvt Ltd Company Registration in Chennai Services at a Glance</strong></p>
                    <p><p>Private limited company registration in Chennai incorporates your business as a separate legal entity under the Companies Act 2013, filed through SPICe+ with the Registrar of Companies (RoC) Chennai at Haddows Road. Limited liability, separate legal identity, ability to raise VC funding, and perpetual succession make it the preferred structure for Chennai startups and growth-stage businesses.</p><div class="table-responsive-wrapper" style="margin-top:16px;"><table><thead><tr><th>Parameter</th><th>Detail</th></tr></thead><tbody><tr><td>Governing Law</td><td>Companies Act, 2013</td></tr><tr><td>Registrar</td><td>RoC Chennai, Haddows Road, Chennai 600034</td></tr><tr><td>Minimum Directors</td><td>2 (at least 1 Indian resident - 182 days)</td></tr><tr><td>Minimum Shareholders</td><td>2 (max 200 for Pvt Ltd)</td></tr><tr><td>Minimum Capital</td><td>No minimum paid-up capital</td></tr><tr><td>Timeline</td><td>7-15 working days</td></tr><tr><td>Cost Starting From</td><td>Rs 9,999 (all-inclusive)</td></tr><tr><td>Key Form</td><td>SPICe+ (Part A: name, Part B: incorporation)</td></tr></tbody></table></div></p>
                </div>
                <p>Chennai is India's fourth-largest economy and a manufacturing-startup-export powerhouse. The OMR IT Corridor hosts SaaS companies raising Series A/B funding, Sriperumbudur's auto corridor supplies global OEMs like Hyundai and BMW, and MEPZ exporters ship goods across 100+ countries. The Tamil Nadu government's target of an Rs 83 trillion state economy by 2030 has accelerated StartupTN initiatives. Learn more about <a href="/private-limited-company-registration">Private Limited Company Registration across India</a>.</p>
                <p>The Registrar of Companies (RoC) Chennai at Haddows Road processes all company incorporations for Tamil Nadu. Patron Accounting's CA team handles the complete SPICe+ filing - DSC procurement, DIN application, name reservation, MOA and AOA drafting with Tamil Nadu stamp duty compliance, and delivery of the Certificate of Incorporation with CIN. Post-incorporation, the same CA manages statutory audit, INC-20A filing, GST registration, and ongoing annual ROC compliance.</p>
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
                <h2 class="section-title">What Is Private Limited Company Registration?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Private limited company registration is the process of incorporating a business as a separate legal entity under Section 7 of the Companies Act, 2013 by filing the SPICe+ form with the Registrar of Companies, providing limited liability protection to shareholders.</p><p>A private limited company is distinct from its directors and shareholders - it can own property, enter contracts, sue and be sued, and continue to exist regardless of changes in ownership. Shareholders' liability is limited to the face value of shares they hold. The company can issue shares to raise capital from angel investors, venture capitalists, and private equity firms.</p><p>For Chennai, Pvt Ltd registration is the default choice for OMR-based IT startups seeking VC funding, Sriperumbudur auto-component companies entering supply contracts with global OEMs, and MEPZ exporters needing a formal legal entity for international trade agreements. Tamil Nadu's industrial policy incentivises formally registered companies with access to SIPCOT industrial parks, StartupTN benefits, and TIDCO joint venture opportunities.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Pvt Ltd Company Registration in Chennai:</strong></p>
                    <p><strong>SPICe+:</strong> Simplified Proforma for Incorporating Company Electronically Plus - integrated MCA form for company incorporation, PAN, TAN, and GST.</p><p><strong>CIN:</strong> Corporate Identity Number - unique 21-character identifier assigned by RoC upon incorporation.</p><p><strong>MOA:</strong> Memorandum of Association - founding document defining company objects, authorised capital, and subscriber details.</p><p><strong>INC-20A:</strong> Declaration of Commencement of Business filed within 180 days of incorporation under Section 10A.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Pvt Ltd Company Registration in Chennai</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Company Incorporation</span>
                        <strong>SPICe+ with RoC Chennai</strong>
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
            <h2 class="section-title">Who Needs Pvt Ltd Registration in Chennai?</h2>
            <div class="content-text">
                
                <p><strong>VC-Backed Startups on the OMR Corridor:</strong> SaaS, fintech, healthtech, and edtech founders at Tidel Park, Perungudi, and Sholinganallur raising angel or Series A funding. Investors require a Pvt Ltd structure for share issuance and cap table management. StartupTN recognition requires a registered company.</p><p><strong>Auto-Component and Manufacturing Companies:</strong> Businesses in Ambattur SIDCO, Guindy Industrial Estate, and Sriperumbudur entering supply agreements with OEMs like Hyundai, TVS, and Ashok Leyland.</p><p><strong>Export Trading Houses in MEPZ:</strong> Exporters needing a formal company structure for IEC registration, LC-based trade, and foreign buyer contracts.</p><p><strong>NRI and Foreign Investors:</strong> NRIs investing in Chennai businesses under FDI automatic route. Patron handles FEMA compliance, RBI reporting, and FC-GPR filings.</p><p><strong>Professional Services Scaling Beyond LLP:</strong> IT consulting firms on Anna Salai and T. Nagar outgrowing LLP structure. When turnover exceeds Rs 40 lakh or external investment is needed, <a href="/llp-incorporation/chennai">LLP to Pvt Ltd conversion</a> is the logical step.</p><p><strong>E-Commerce and D2C Brands:</strong> Chennai e-commerce sellers on Amazon, Flipkart, and Meesho requiring Pvt Ltd for marketplace seller registration and payment gateway integration.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Registration Services Included</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Digital Signature Certificate (DSC)</td><td>Class 3 DSC for all directors through Aadhaar eKYC verification</td></tr><tr><td>Director Identification Number (DIN)</td><td>DIN for all directors applied within SPICe+ form</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td>Up to 2 names checked against existing companies, LLPs, and trademarks</td></tr><tr><td>SPICe+ Part B Filing</td><td>Complete incorporation form filed with RoC Chennai including all director/shareholder details and registered office</td></tr><tr><td>MOA and AOA Drafting</td><td>Memorandum and Articles of Association drafted per Companies Act 2013 with Tamil Nadu stamp duty. For ongoing <a href="/private-limited-company-compliance">Pvt Ltd Company Compliance</a>, Patron manages all annual filings.</td></tr><tr><td>PAN and TAN Application</td><td>Company PAN and TAN applied within SPICe+ - issued with Certificate of Incorporation</td></tr><tr><td>Certificate of Incorporation</td><td>CIN issued digitally by RoC Chennai upon successful SPICe+ processing</td></tr><tr><td>Post-Incorporation Compliance</td><td>Bank account, INC-20A, statutory auditor appointment (ADT-1), <a href="/gst-registration">GST registration</a>, TN PT registration, Udyam/MSME registration</td></tr>

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
            <h2 class="section-title">Pvt Ltd Registration Process in Chennai: 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">No visit to RoC Chennai at Haddows Road required - your dedicated CA/expert from Patron's pan-India team handles all filings online through the MCA portal. Certificate of Incorporation is issued digitally.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Obtain DSC for All Proposed Directors</h3><p class="step-description">Every director must have a valid Class 3 Digital Signature Certificate to sign MCA e-forms. Patron's CA team applies through Aadhaar eKYC, completing issuance in 1-2 working days. NRI directors require DSC from an Indian certifying authority or valid foreign DSC recognised by MCA.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Aadhaar eKYC</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>1-2 day issuance</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/><text x="60" y="39" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">DSC</text><circle cx="90" cy="18" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><path d="M86 18l3 3 5-5" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">DSC Ready</span><span class="step-number-large">01</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Reserve Company Name via SPICe+ Part A</h3><p class="step-description">The CA submits up to 2 proposed names through SPICe+ Part A (RUN). Names are checked against existing companies, LLPs, and registered trademarks under the Trade Marks Act 1999. Approved names are reserved for 20 days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trademark screening</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>20-day reservation</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="12" width="90" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="35" x2="92" y2="35" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="28" y1="48" x2="75" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">SPICe+ A</text></svg></div><span class="illustration-label">Name Approved</span><span class="step-number-large">02</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Draft MOA and AOA with Tamil Nadu Stamp Duty</h3><p class="step-description">The Memorandum of Association defines company objects, authorised capital, and subscriber details. The Articles of Association set internal governance rules. Both are drafted per Companies Act 2013 and stamped per Tamil Nadu schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Custom-drafted</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>TN stamp duty applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="32" y1="25" x2="88" y2="25" stroke="#F5A623" stroke-width="2"/><line x1="32" y1="38" x2="80" y2="38" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><line x1="32" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="1.5" opacity="0.3"/><text x="60" y="80" font-size="8" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MOA + AOA</text></svg></div><span class="illustration-label">Documents Ready</span><span class="step-number-large">03</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">File SPICe+ Part B with RoC Chennai</h3><p class="step-description">SPICe+ Part B is filed electronically with RoC Chennai at Haddows Road. It includes director details (PAN, Aadhaar, DIN), shareholder details, registered office address in Chennai, MOA and AOA, and subscriber declaration. PAN and TAN applied within SPICe+. Government fees depend on authorised capital.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Filed electronically</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>PAN/TAN integrated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><text x="60" y="35" font-size="9" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">SPICe+</text><text x="60" y="50" font-size="7" fill="#F5A623" font-weight="600" text-anchor="middle" font-family="Arial">RoC Chennai</text><path d="M55 75l5 5 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/></svg></div><span class="illustration-label">SPICe+ Filed</span><span class="step-number-large">04</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Receive Certificate of Incorporation from RoC Chennai</h3><p class="step-description">RoC Chennai issues the Certificate of Incorporation (COI) with the unique Corporate Identity Number (CIN). Company PAN and TAN are issued simultaneously. The CIN identifies your company as RoC Chennai-registered.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>CIN issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Digital certificate</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 35l4 4 9-9" stroke="#25D366" stroke-width="2.5" stroke-linecap="round"/><rect x="40" y="75" width="40" height="10" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="83" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">CIN</text></svg></div><span class="illustration-label">Company Incorporated</span><span class="step-number-large">05</span></div></div></div><div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Complete Post-Incorporation Compliance</h3><p class="step-description">Within 30 days: first Board meeting + statutory auditor appointment (ADT-1). Within 180 days: INC-20A filing. Patron assists with bank account opening, share allotment (PAS-3), <a href="/gst-registration/chennai">GST registration in Chennai</a>, TN PT registration, and Udyam/MSME registration.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>INC-20A tracked</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Auditor appointed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="25" y="25" width="25" height="35" rx="3" fill="#E8F5E9"/><rect x="55" y="20" width="25" height="40" rx="3" fill="#FFF3E0"/><text x="37" y="48" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">INC-20A</text><text x="67" y="45" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">GST</text></svg></div><span class="illustration-label">Fully Operational</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Pvt Ltd Registration in Chennai</h2>
            <div class="content-text">
                
                <ul><li><strong>PAN Card of all directors and shareholders</strong> - mandatory for DIN, SPICe+ filing, and company PAN linkage</li><li><strong>Aadhaar Card</strong> - required for DSC issuance via eKYC and director identity verification</li><li><strong>Passport-size photographs</strong> - recent photo with white background for each director and subscriber</li><li><strong>Address proof (bank statement/utility bill)</strong> - not older than 2 months for all directors</li><li><strong>Registered office proof in Chennai</strong> - TNEB electricity bill or water bill + rent agreement or sale deed</li><li><strong>NOC from property owner</strong> - if registered office is rented, must authorise use for company registration</li><li><strong>For NRI/Foreign Directors</strong> - notarised/apostilled passport, address proof from country of residence</li></ul><div class="highlight-box" style="margin-top:16px;"><p><strong>Chennai-Specific Tip:</strong> If using a co-working space on OMR as registered office, ensure the co-working provider issues an NOC addressed to 'Registrar of Companies, Chennai' with the proposed company name. Use the TNEB bill in the co-working entity's name. RoC Chennai has returned SPICe+ applications where NOCs were generic.</p></div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Pvt Ltd Registration Challenges in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Name Rejection at RoC Chennai</td><td>Chennai has high density of registered companies; similar names rejected</td><td>Comprehensive MCA name search and trademark screening before SPICe+ Part A</td></tr><tr><td>TN Stamp Duty Computation Errors</td><td>Wrong state rates applied for MOA/AOA, causing SPICe+ rejection</td><td>Exact Tamil Nadu stamp duty schedule applied per authorised capital</td></tr><tr><td>Missed INC-20A (180-Day Deadline)</td><td>Rs 50,000 penalty on company + Rs 1,000/day on directors</td><td>INC-20A deadline tracked and filed within 90 days as standard practice</td></tr><tr><td>Statutory Auditor Appointment Delay</td><td>Rs 25,000 to Rs 5 lakh penalty for non-appointment within 30 days</td><td>ADT-1 filed within 15 days of incorporation with Patron's CA as auditor</td></tr><tr><td>NRI Director Verification Delays</td><td>Apostilled documents from overseas take 2-4 weeks</td><td>NRI documentation coordinated in advance to prevent delays</td></tr>

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
            <h2 class="section-title">Pvt Ltd Registration Fees in Chennai: 2026 Cost Breakdown</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>DSC (2 directors)</td><td>Rs 1,500 - 3,000 - Class 3 DSC via Aadhaar eKYC</td></tr><tr><td>DIN (2 directors)</td><td>Included in SPICe+ - applied within incorporation form</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td>Rs 1,000 - RUN service on MCA portal</td></tr><tr><td>SPICe+ Part B (Govt Fee)</td><td>Rs 500 - 6,000 - based on authorised capital</td></tr><tr><td>TN Stamp Duty (MOA/AOA)</td><td>Rs 500 - 2,000 - per Tamil Nadu stamp schedule</td></tr><tr><td>PAN + TAN</td><td>Rs 130 - integrated in SPICe+</td></tr><tr><td>Patron Accounting Professional Fees</td><td>INR 7,499 (Exl GST and Govt. Charges)</td></tr><tr><td>Total (Typical)</td><td>Rs 9,999 - 20,000 - 2 directors, Rs 1 lakh capital, Chennai office</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Pvt Ltd Company Registration in Chennai consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Pvt%20Ltd%20company%20registration%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd Registration Timeline in Chennai</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>DSC Issuance</td><td>1-2 working days - Aadhaar eKYC for Chennai directors</td></tr><tr><td>Name Reservation (SPICe+ Part A)</td><td>1-3 working days - MCA Central Registration Centre</td></tr><tr><td>MOA/AOA Drafting + Stamp Duty</td><td>2-3 working days - TN stamp duty computed and applied</td></tr><tr><td>SPICe+ Part B Filing + Processing</td><td>3-7 working days - filed with RoC Chennai</td></tr><tr><td>COI with CIN</td><td>Included above - issued digitally upon SPICe+ approval</td></tr><tr><td>Post-Incorporation (INC-20A, ADT-1)</td><td>Within 30-180 days - board meeting, auditor, bank account</td></tr><tr><td>Total</td><td>7-15 working days from document collection to CIN delivery</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Fast Track:</strong> Chennai IT startups with all documents ready can receive their CIN in 7 working days. NRI-involved registrations may take 15-20 days for additional documentation.</p>

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
            <h2 class="section-title">Why Choose Patron for Pvt Ltd Registration in Chennai?</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 14l9-5-9-5-9 5 9 5z"/><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg></div><h3 class="feature-title">CA-Led with Ongoing Compliance</h3><p class="feature-text">Patron's CA team stays with your company post-incorporation. Annual ROC filings (AOC-4, MGT-7), statutory audit, ITR, GST returns, and director KYC are all managed by the same CA.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4z"/></svg></div><h3 class="feature-title">4-Office Pan-India Reach</h3><p class="feature-text">Offices in Pune, Mumbai, Delhi, and Gurugram. Chennai founders with co-founders in other cities complete registration remotely. NRI investors get coordinated documentation support across time zones.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">RoC Chennai Expertise</h3><p class="feature-text">Your file is handled by a CA/expert familiar with RoC Chennai filing practices, Tamil Nadu stamp duty schedules, and TNEB utility bill requirements for registered office proof.</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><h3 class="feature-title">Complete Business Infrastructure</h3><p class="feature-text">Registration is step one. Patron sets up accounting (Zoho Books/Tally), payroll, GST compliance, TDS filing, statutory audit, and annual ROC filings - creating a fully compliant Chennai company.</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by 10,000+ Businesses Across India</h2>
            <div class="content-text">
                
                <p><strong>Trust Banner:</strong> 10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years of Practice</p><p><strong>4-Office Signal:</strong> With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves Chennai businesses through a dedicated digital-first CA team.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Pvt Ltd vs LLP: Comparison for Chennai Businesses</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Private Limited Company</th><th>LLP</th></tr></thead>
                    <tbody>
                        <tr><td>Governing Law</td><td>Companies Act 2013</td><td>LLP Act 2008</td></tr><tr><td>Registrar</td><td>RoC Chennai</td><td>RoC Chennai</td></tr><tr><td>Min Members</td><td>2 directors + 2 shareholders</td><td>2 partners</td></tr><tr><td>Liability</td><td>Limited to share value</td><td>Limited to contribution</td></tr><tr><td>Mandatory Audit</td><td>Yes - every year</td><td>Only if turnover > Rs 40 lakh</td></tr><tr><td>Fundraising</td><td>Can issue shares to VCs, angels, PE</td><td>Cannot issue shares</td></tr><tr><td>Annual Compliance</td><td>AGM, Board meetings, AOC-4, MGT-7, audit</td><td>Form 11 + Form 8 only</td></tr><tr><td>Tax Rate</td><td>25% (turnover < Rs 400 crore)</td><td>30% flat + cess</td></tr><tr><td>Best For in Chennai</td><td>VC-funded startups, NRI ventures, high-growth</td><td>Professional firms, small partnerships</td></tr>

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
            <h2 class="section-title">Related Services for Chennai Businesses</h2>
            <div class="content-text">
                
                <p>If you need Pvt Ltd registration in Chennai, you may also benefit from:</p><ul><li><a href="/private-limited-company-registration">Private Limited Company Registration (India)</a> - national service page</li><li><a href="/private-limited-company-compliance">Pvt Ltd Company Compliance</a> - annual ROC filings</li><li><a href="/llp-incorporation">LLP Incorporation</a> - alternative structure comparison</li><li><a href="/gst-registration">GST Registration</a> - post-incorporation GST setup</li><li><a href="/statutory-audit">Statutory Audit</a> - mandatory audit for Pvt Ltd companies</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal and Compliance Framework for Pvt Ltd in Chennai</h2>
            <div class="content-text">
                
                <p><strong>Governing Acts:</strong></p><ul><li>Companies Act, 2013 (Section 7 - incorporation, Section 10A - commencement, Section 139 - auditor)</li><li>Companies (Incorporation) Rules, 2014 (SPICe+ form, MOA/AOA)</li><li>Income Tax Act, 1961 (25% corporate tax rate, Section 44AB - audit threshold)</li><li>CGST Act, 2017 (GST registration for turnover above threshold)</li><li>Tamil Nadu Shops and Establishments Act, 1947</li><li>Tamil Nadu PT Act, 1992 (Professional Tax post-incorporation)</li><li>FEMA, 1999 (NRI/foreign investment compliance)</li></ul><p><strong>Penalties:</strong></p><ul><li>INC-20A not filed within 180 days: Rs 50,000 on company + Rs 1,000/day on directors</li><li>AOC-4 late filing: Rs 100/day of delay</li><li>MGT-7 late filing: Rs 100/day of delay</li><li>Non-appointment of auditor: Rs 25,000 to Rs 5 lakh penalty</li><li>Non-holding of AGM: Rs 1 lakh on company + Rs 5,000/day on officers</li></ul><p><strong>Regulatory Authority:</strong> MCA - <a href="https://www.mca.gov.in" target="_blank" rel="noopener">mca.gov.in</a> | RoC Chennai - Haddows Road, Chennai 600034</p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Pvt Ltd Registration in Chennai</h2>
                    <p class="faq-expanded__lead">Get answers to common questions about private limited company registration process, fees, timeline, and compliance in Chennai.</p>
                    @include('partials.faq-enquiry-form', ['enquiryLocation' => 'Chennai', 'enquiryService' => 'Pvt Ltd Registration in Chennai'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which RoC office handles company registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Company registration in Chennai is processed by the Registrar of Companies (RoC) Chennai at Block No.6, B Wing, 2nd Floor, Shastri Bhawan, 26 Haddows Road, Chennai 600034. All SPICe+ forms and post-incorporation filings for Tamil Nadu are submitted electronically. Patron files all forms through the MCA portal - no physical visit required.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I register a Pvt Ltd company online from Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. The entire process is online through the MCA portal. DSC via Aadhaar eKYC, SPICe+ filed electronically, and Certificate of Incorporation issued digitally by RoC Chennai. No physical visit to any office is required. Patron handles the complete process from Chennai through its digital-first CA team.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the cost of Pvt Ltd registration in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Private limited company registration in Chennai costs between Rs 9,999 and Rs 20,000 all-inclusive. This covers DSC for 2 directors, DIN, name reservation (Rs 1,000), SPICe+ government fee, Tamil Nadu stamp duty for MOA/AOA, PAN/TAN, and professional fees. The exact cost varies based on authorised capital and number of directors.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How many days does registration take in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Company registration takes 7-15 working days from document collection to Certificate of Incorporation. DSC takes 1-2 days, name reservation 1-3 days, and SPICe+ Part B processing by RoC Chennai takes 3-7 working days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can an NRI register a company in Chennai?</h3>
                        <div class="faq-expanded__a"><p>Yes. NRIs and foreign nationals can be directors and shareholders under FDI automatic route. At least 1 director must be an Indian resident (182+ days in India). Patron handles FEMA compliance, RBI reporting, and FC-GPR filings for NRI-invested companies.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What is INC-20A and when must it be filed?</h3>
                        <div class="faq-expanded__a"><p>Form INC-20A is the Declaration of Commencement of Business under Section 10A of the Companies Act 2013. It must be filed with RoC Chennai within 180 days of incorporation. Failure attracts Rs 50,000 penalty on the company and Rs 1,000/day on each director. Patron tracks and files this within 90 days.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is statutory audit mandatory for Pvt Ltd companies?</h3>
                        <div class="faq-expanded__a"><p>Yes. Every private limited company must appoint a statutory auditor within 30 days per Section 139 of Companies Act 2013, regardless of turnover. Patron's CA firm can serve as your <a href='/statutory-audit'>statutory auditor</a>.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What annual compliance is required after registration?</h3>
                        <div class="faq-expanded__a"><p>Chennai Pvt Ltd companies must file AOC-4 (financial statements), MGT-7 (annual return), hold AGM before 30 September, conduct 4 board meetings per year, file DIR-3 KYC by 30 September, file ITR by 30 September, and maintain books of accounts at registered office.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Chennai mein Pvt Ltd company kaise register hoti hai?</strong> DSC, DIN, name approval, SPICe+ form RoC Chennai mein file hota hai - pura process online hai. 7-15 din mein CIN mil jaata hai.</p><p><strong>Minimum kitne directors chahiye?</strong> Minimum 2 directors chahiye. Ek director Indian resident hona zaroori hai (182 din India mein rehna chahiye).</p><p><strong>Company registration ke baad kya karna padta hai?</strong> 30 din mein board meeting, 180 din mein INC-20A, auditor appointment, bank account, GST registration - sab Patron ka CA team manage karta hai.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Delay Your Company Registration in Chennai</h2>
            <div class="content-text">
                
                <p>INC-20A must be filed within 180 days of incorporation - late filing attracts Rs 50,000 penalty on the company and Rs 1,000/day on each director. Statutory auditor must be appointed within 30 days. AGM must be held by 30 September. Every month of delay means delayed access to StartupTN benefits, bank accounts, payment gateways, and investor funding.</p><p><strong><a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Pvt%20Ltd%20registration%20in%20Chennai." target="_blank">WhatsApp us</a> to start your company registration in Chennai today.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Pvt Ltd Registration in Chennai Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);">Private limited company registration in Chennai creates a separate legal entity with limited liability protection through SPICe+ filing with RoC Chennai. With the ability to raise equity funding, issue shares, and access StartupTN benefits, Pvt Ltd is the preferred structure for Chennai's VC-backed startups, auto-component manufacturers, and MEPZ exporters.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting serves Chennai businesses through a digital-first CA team backed by offices in Pune, Mumbai, Delhi, and Gurugram. Your dedicated CA handles SPICe+ filing, MOA/AOA drafting with Tamil Nadu stamp duty, and ongoing annual ROC compliance.</p><p style="color:rgba(255,255,255,0.85);">Patron Accounting LLP has served 10,000+ businesses, filed 50,000+ documents, and maintained a 4.9 Google rating across 15+ years of practice.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Pvt%20Ltd%20company%20registration%20in%20Chennai.%20Please%20share%20a%20free%20consultation." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Pvt%20Ltd%20Registration%20in%20Chennai&body=Hello%20Patron%20Team%2C%0A%0AI%20need%20Pvt%20Ltd%20registration%20in%20Chennai.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Pvt Ltd Registration Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert private limited company registration in 8 major cities</p>
        
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-block-title">Available Cities</div><div class="pa-block-sub">Pvt Ltd registration with local jurisdictional expertise</div><div class="pa-city-grid"><a href="/private-limited-company-registration/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/private-limited-company-registration/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/private-limited-company-registration/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a><a href="/private-limited-company-registration/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a><a href="/private-limited-company-registration/bangalore" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Bangalore</div><div class="pa-card-sub">Karnataka</div></div></a><a href="/private-limited-company-registration/hyderabad" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Hyderabad</div><div class="pa-card-sub">Telangana</div></div></a><div class="pa-city-card" style="opacity:0.6;pointer-events:none;border:2px solid var(--orange);position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Chennai</div><div class="pa-card-sub">Tamil Nadu</div></div><span style="position:absolute;top:6px;right:8px;font-size:10px;color:var(--orange);font-weight:700;text-transform:uppercase;letter-spacing:0.5px;">You're here</span></div><a href="/private-limited-company-registration/kolkata" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Kolkata</div><div class="pa-card-sub">West Bengal</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services in Chennai</div><div class="pa-block-sub">End-to-end support for Pvt Ltd Registration in Chennai</div><div class="pa-cross-grid"><a href="/llp-incorporation/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Incorporation</div><div class="pa-card-sub">Chennai</div></div></a><a href="/gst-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/trademark-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Chennai</div></div></a><a href="/startup-registration/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Chennai</div></div></a><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Accounting Services</div><div class="pa-card-sub">Chennai</div></div><a href="/payroll-services/chennai" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">Chennai</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 08 April 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">08 April 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 08 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed semi-annually to reflect changes in MCA fees, SPICe+ form updates, Tamil Nadu stamp duty rates, and Companies Act amendments. The next scheduled review is October 2026.</p>
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
