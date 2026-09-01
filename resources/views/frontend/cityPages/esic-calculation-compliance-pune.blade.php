

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
    <title>ESIC Calculation &amp; Compliance in Pune – Returns &amp; Wages</title>
    <meta name="description" content="CA-assisted ESIC calculation and compliance in Pune. Accurate ESI contributions, return filing, and registration. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <link rel="canonical" href="/esic-calculation-compliance/pune">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ESIC Calculation &amp; Compliance in Pune – Returns &amp; Wages">
    <meta property="og:description" content="CA-assisted ESIC calculation and compliance in Pune. Accurate ESI contributions, return filing, and registration. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta property="og:url" content="/esic-calculation-compliance/pune">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ESIC Calculation &amp; Compliance in Pune – Returns &amp; Wages">
    <meta name="twitter:description" content="CA-assisted ESIC calculation and compliance in Pune. Accurate ESI contributions, return filing, and registration. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "ESIC Calculation & Compliance Services in Pune",
      "description": "CA-assisted ESIC calculation and compliance in Pune. Accurate ESI contributions, return filing, and registration. Serving Hinjewadi, Kharadi, Chakan MIDC. Call +91 945 945 6700.",
      "url": "https://www.patronaccounting.com/esic-calculation-compliance/pune",
      "serviceType": "ESIC Calculation & Compliance Services in Pune",
      "areaServed": {
        "@type": "City",
        "name": "Pune"
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
        "url": "https://www.patronaccounting.com/esic-calculation-compliance/pune"
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
          "name": "Payroll Services",
          "item": "https://www.patronaccounting.com/payroll-services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "ESIC Calculation & Compliance in Pune",
          "item": "https://www.patronaccounting.com/esic-calculation-compliance/pune"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which ESIC office handles Pune businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ESIC Sub Regional Office, Pune handles registrations, inspections, and benefit claims for Pune and surrounding areas. It operates under the Regional Office Mumbai. All filings are done online through the ESIC portal."
          }
        },
        {
          "@type": "Question",
          "name": "Can I get ESIC compliance managed online from Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. ESIC registration, monthly contribution payment, employee enrolment, and return filing are all managed online through the ESIC portal. Patron Accounting handles the complete compliance cycle from Pune."
          }
        },
        {
          "@type": "Question",
          "name": "What is the ESIC contribution rate in Pune?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ESIC contribution rate is 0.75% from the employee and 3.25% from the employer, totalling 4% of gross wages. This applies to employees earning up to Rs 21,000 per month."
          }
        },
        {
          "@type": "Question",
          "name": "What is the penalty for late ESI payment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Delayed ESI contributions attract simple interest at 12% per annum under Regulation 31-A and damages of 5% to 25% under Regulation 31-C. Under Section 85, non-compliance can attract imprisonment up to 2 years and fines up to Rs 5,000."
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
                        ESIC Calculation & Compliance in Pune - Accurate Payroll with Expert CA Support
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">23 March 2026</span></span>
                        </span>
                        <a href="#" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Contribution Rate:</span> Employee 0.75% + Employer 3.25% = 4% of gross wages</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Wage Ceiling:</span> Rs 21,000/month (Rs 25,000 for disabled employees)</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Applicability:</span> Factories/establishments with 10+ employees in notified areas</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Due Date:</span> Monthly contribution by 15th of the following month</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ Businesses Served | 4.9 Google Rating | 50,000+ Documents Filed | 15+ Years</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ESIC%20Calculation%20and%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none" rel="noopener">
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


                                        @include('partials.bigin-form', [
                                            'variant' => 'bare',
                                            'service'  => 'ESIC Calculation & Compliance in Pune',
                                            'city'     => 'Pune',
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
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron's payroll team handles 200+ employees without a single error month on month. Their ESI calculation is automated and integrated with our payroll - no manual work needed from our end.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SG</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sandeep Gaikwad</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Head, IT Company - Hinjewadi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We had an ESIC inspection last quarter. Patron had all records ready and represented us at the Sub Regional Office. Zero penalties, zero issues. Great support for manufacturing units.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RP</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Patil</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Factory Manager - Chakan MIDC</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The bundled ESI+PF+PT+MLWF service is exactly what our startup needed. One team handling all statutory compliances instead of coordinating with 4 different consultants. Saves time and money.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AD</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Ankit Deshmukh</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Startup - Baner</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div>
    </div>
</div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;">
    <div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div>
    <div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our BPO has 500+ employees with constantly changing headcount. Patron manages ESI enrolment, monthly challans, and returns seamlessly. Their automated system catches wage threshold crossings instantly.</div>
    <div style="display:flex;align-items:center;gap:10px;margin-top:16px;">
        <div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div>
        <div><div style="font-weight:700;font-size:13px;color:var(--blue);">Meera Kulkarni</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">VP Operations, BPO - Magarpatta</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div>
        <div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div>
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
                    <p>From IT companies to MIDC manufacturers, Pune businesses trust Patron for ESIC compliance and bundled payroll services.</p>
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
            <a href="#what-section" class="toc-btn">What is ESIC</a>
            <a href="#who-section" class="toc-btn">Who Needs This</a>
            <a href="#services-section" class="toc-btn">Services</a>
            <a href="#process-section" class="toc-btn">Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Deadlines</a>
            <a href="#benefits-section" class="toc-btn">Why Patron</a>
            <a href="#comparison-section" class="toc-btn">In-House vs Pro</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Calculation & Compliance in Pune - Overview</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - ESIC Calculation & Compliance in Pune Services at a Glance</strong></p>
                    <p>ESIC calculation in Pune requires employers to deduct 0.75% from employee wages and contribute 3.25% from their own funds, totalling 4% of gross wages. Applicable to establishments with 10+ employees where wages do not exceed Rs 21,000/month. The ESIC Sub Regional Office, Pune handles compliance for businesses across Hinjewadi, Kharadi, Chakan MIDC, and Pimpri-Chinchwad.</p>
                </div>
                <p>Pune is Maharashtra's second-largest city and a major employment hub with IT parks in <strong>Hinjewadi</strong> and <strong>Kharadi</strong>, manufacturing clusters at <strong>Chakan MIDC</strong> and <strong>MIDC Bhosari</strong>, and BPO operations in <strong>Magarpatta City</strong>. With thousands of establishments employing 10 or more workers, ESIC compliance is a critical monthly payroll obligation. The <strong>ESIC Sub Regional Office, Pune</strong> (sropune.esic.gov.in) handles registrations, inspections, and benefit claims for Pune businesses under the jurisdiction of the <strong>Regional Office Mumbai</strong>. Non-compliance under Section 85 of the ESI Act, 1948 attracts penalties including 12% simple interest on delayed contributions and imprisonment of up to 2 years. Learn more about <a href="/payroll-services">Payroll Services across India</a>.</p>
                <p>Patron Accounting's Pune office at RTC Silver, Wagholi provides end-to-end ESIC compliance services - from registration and monthly calculation to return filing and inspection support. After ESIC compliance, Pune businesses also benefit from integrated <a href="/gst-registration">GST Registration</a> and <a href="/private-limited-company-compliance">Private Limited Company Compliance</a> services.</p>
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
                <h2 class="section-title">What is ESIC Calculation & Compliance</h2>
                <div class="content-text what-is-definition">
                    
                    <p>ESIC calculation is the process of computing Employees' State Insurance contributions under the ESI Act, 1948 - where the employee contributes 0.75% and the employer contributes 3.25% of gross monthly wages, totalling 4%. The contribution applies to employees earning up to Rs 21,000 per month.</p>
<p>ESIC compliance encompasses registration, monthly contribution payment, half-yearly return filing, employee enrolment on the ESIC portal, and maintaining records as prescribed under the ESI (General) Regulations, 1950. The employer deposits the total contribution (employee + employer share) by the 15th of the following month through the ESIC online portal.</p>
<p>For Pune-based businesses - particularly IT companies in Hinjewadi with CTC-structured salaries and manufacturing units at Chakan MIDC with daily-wage workers - ESI calculation varies significantly based on wage components. Gross salary for ESI purposes includes basic pay, dearness allowance, city compensatory allowance, HRA, and other regular allowances, but excludes annual bonus, retrenchment compensation, encashment of leave, and gratuity.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for ESIC Calculation & Compliance in Pune:</strong></p>
                    <p><strong>ESI Act 1948:</strong> Employees' State Insurance Act - the governing legislation for ESI contributions and benefits across India.</p>
<p><strong>Gross Wages:</strong> Basic pay + DA + HRA + CCA + regular allowances. Excludes annual bonus, gratuity, retrenchment compensation, and leave encashment.</p>
<p><strong>Wage Ceiling:</strong> Rs 21,000/month - employees earning above this threshold are exempt from ESI coverage.</p>
<p><strong>Section 85:</strong> Criminal penalties for ESI non-compliance - imprisonment up to 2 years and fines up to Rs 5,000.</p>
<p><strong>Regulation 31-A:</strong> Simple interest at 12% per annum on delayed ESI contributions.</p>

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
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ESIC Calculation & Compliance in Pune</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Total ESI Rate</span>
                        <strong>4% of Gross Wages</strong>
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
            <h2 class="section-title">Who Needs ESIC Compliance in Pune</h2>
            <div class="content-text">
                
                <p>Every factory or establishment in Pune employing <strong>10 or more persons</strong> in a notified area is mandatorily covered under the ESI Act, 1948. Pune is a fully notified area under Section 1(3) of the Act. ESI applies to all employees earning wages up to <strong>Rs 21,000 per month</strong> (Rs 25,000 for employees with disabilities).</p>
<p><strong>IT and BPO companies</strong> in <strong>Hinjewadi IT Park, Kharadi, and Magarpatta City</strong> with large workforces often have a mix of ESI-eligible employees (support staff, junior developers earning under Rs 21,000) and exempt employees (senior staff above the ceiling). Managing this split requires accurate payroll configuration. See <a href="/payroll-services">Payroll Services</a> for integrated payroll management.</p>
<p><strong>Manufacturing units</strong> at <strong>Chakan MIDC, MIDC Bhosari, and Talegaon</strong> employing contract workers, daily-wage labourers, and factory floor staff are heavily covered under ESI. The principal employer is responsible for ESI compliance even for contract labour under Section 40 of the ESI Act.</p>
<p><strong>Startups and SMEs</strong> across Baner, Koregaon Park, and Pimpri-Chinchwad that cross the 10-employee threshold must register within 15 days. Even establishments with fewer than 10 employees can voluntarily register to provide ESI benefits. Get your <a href="/shop-act-registration">Shop Act Registration</a> alongside ESIC registration.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Calculation & Compliance Services in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>ESIC Registration</td><td>Online registration on the ESIC portal for new establishments in Pune, including 17-digit code generation</td></tr>
<tr><td>ESI Contribution Calculation</td><td>Monthly computation of employee (0.75%) and employer (3.25%) contributions on gross wages for all eligible employees</td></tr>
<tr><td>Monthly Challan Generation & Payment</td><td>Generating ESIC challans and ensuring timely payment by the 15th of the following month</td></tr>
<tr><td>Half-Yearly Return Filing</td><td>Filing ESI returns for April-September (due 12th November) and October-March (due 12th May)</td></tr>
<tr><td>Employee Enrolment</td><td>Registering new employees on the ESIC portal with Aadhaar linking and family photo upload</td></tr>
<tr><td>Wage Component Mapping</td><td>Configuring payroll to correctly include/exclude components for ESI calculation as per the Act</td></tr>
<tr><td>ESIC Inspection Support</td><td>Preparing records and representing Pune businesses during ESIC inspections by the Sub Regional Office</td></tr>
<tr><td>Contract Labour ESI Management</td><td>Managing ESI compliance for principal employers with contract workers at Chakan MIDC and industrial zones</td></tr>
<tr><td>Bundled Statutory Compliance</td><td>Combined ESIC + PF + PT (Maharashtra Professional Tax) + MLWF compliance management</td></tr>

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
            <h2 class="section-title">ESIC Calculation & Compliance Process in Pune</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">6-step guide for ESIC compliance with Patron Accounting</p>
        </header>
        <div class="steps-container">
            <div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 1</span>
        <h3 class="step-title">Determine ESIC Applicability</h3>
        <p class="step-description">Verify whether your Pune establishment employs 10 or more persons and falls within the notified area under Section 1(3) of the ESI Act, 1948. Pune is fully notified. Count all employees including contract, casual, and part-time workers. If any employee earns gross wages of Rs 21,000 or less per month, ESI applies. The ESIC Sub Regional Office, Pune has jurisdiction over establishments in Pune city, Pimpri-Chinchwad, and surrounding industrial areas.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>10+ Employee Check</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Wage Ceiling Verification</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="35" r="15" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><path d="M54 35l4 4 8-8" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><line x1="30" y1="60" x2="90" y2="60" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Applicability Confirmed</span><span class="step-number-large">01</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 2</span>
        <h3 class="step-title">Register on the ESIC Portal</h3>
        <p class="step-description">Register your establishment on www.esic.gov.in within 15 days of becoming applicable. Provide company details, PAN, address proof, employee list with Aadhaar numbers, and bank account details. Upon verification, ESIC issues a 17-digit unique code. For Pune businesses, the registration falls under the Regional Office Mumbai jurisdiction. Patron's Pune office handles the complete online registration.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>17-Digit Code</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Within 15 Days</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="8" width="80" height="55" rx="4" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="18" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="32" width="60" height="8" rx="2" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><rect x="30" y="46" width="30" height="8" rx="2" fill="#E8712C"/></svg></div><span class="illustration-label">Registration Complete</span><span class="step-number-large">02</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 3</span>
        <h3 class="step-title">Calculate Monthly ESI Contributions</h3>
        <p class="step-description">For each eligible employee (earning up to Rs 21,000/month), calculate: Employee contribution = 0.75% of gross wages. Employer contribution = 3.25% of gross wages. Gross wages for ESI include basic pay + DA + HRA + city compensatory allowance + other regular monthly allowances. Exclude annual bonus, gratuity, retrenchment compensation, and leave encashment.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>0.75% Employee</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>3.25% Employer</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="45" cy="30" r="8" fill="#FEF4EE" stroke="#E8712C" stroke-width="1.5"/><text x="45" y="34" text-anchor="middle" fill="#E8712C" font-size="10" font-weight="bold">%</text><line x1="65" y1="25" x2="90" y2="25" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="65" y1="35" x2="85" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3"/><rect x="30" y="50" width="60" height="15" rx="4" fill="#10B981" opacity="0.15"/><line x1="30" y1="57" x2="75" y2="57" stroke="#10B981" stroke-width="2"/></svg></div><span class="illustration-label">ESI Computed</span><span class="step-number-large">03</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 4</span>
        <h3 class="step-title">Deposit Contributions by the 15th</h3>
        <p class="step-description">Generate the ESIC challan on the portal and pay the combined employee + employer contribution online by the 15th of the following month. Late payment attracts 12% simple interest per annum under Regulation 31-A, plus damages of 5%-25% under Regulation 31-C. Patron ensures timely challan generation for all Pune clients.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Monthly by 15th</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online Payment</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="20" width="60" height="35" rx="4" fill="#FEF4EE" stroke="#E8712C" stroke-width="1"/><circle cx="60" cy="37" r="8" fill="#E8712C" opacity="0.2"/><path d="M56 37l3 3 5-5" stroke="#E8712C" stroke-width="2" stroke-linecap="round"/><line x1="40" y1="75" x2="80" y2="75" stroke="#14365F" stroke-width="1.5" opacity="0.3"/></svg></div><span class="illustration-label">Challan Deposited</span><span class="step-number-large">04</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 5</span>
        <h3 class="step-title">File Half-Yearly ESI Returns</h3>
        <p class="step-description">File ESI returns for each contribution period: April to September - due by 12th November. October to March - due by 12th May. Log in to the ESIC employer portal, verify employee details, and submit the return online. Non-filing attracts penalties under Section 85 including imprisonment up to 2 years and fines up to Rs 5,000.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Due 12th Nov / 12th May</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Online Filing</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#E8712C" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="36" x2="80" y2="36" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="48" x2="70" y2="48" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="30" y1="60" x2="60" y2="60" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Returns Filed</span><span class="step-number-large">05</span></div></div>
</div>
<div class="step-card">
    <div class="step-content">
        <span class="step-badge">Step 6</span>
        <h3 class="step-title">Maintain Records and Handle Inspections</h3>
        <p class="step-description">Maintain employee registers, wage records, attendance records, and contribution payment receipts as prescribed. The ESIC Sub Regional Office, Pune conducts periodic inspections. For Chakan MIDC and Bhosari manufacturing units, inspections may focus on contract labour ESI compliance under Section 40. Patron prepares all records and represents Pune businesses during ESIC inspections.</p>
        <div class="step-highlights">
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Records Ready</span>
            <span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Inspection Support</span>
        </div>
    </div>
    <div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M60 10L95 30V55C95 75 60 90 60 90S25 75 25 55V30L60 10Z" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M48 50l8 8 16-16" stroke="#10B981" stroke-width="3" stroke-linecap="round"/></svg></div><span class="illustration-label">Compliance Secured</span><span class="step-number-large">06</span></div></div>
</div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for ESIC Registration & Compliance in Pune</h2>
            <div class="content-text">
                
                <p><strong>PAN card</strong> of the business entity or proprietor.</p>
<p><strong>Certificate of Incorporation / Partnership Deed / Shop Act Licence</strong> as applicable to the entity type.</p>
<p><strong>Address proof</strong> of the Pune establishment - rent agreement, utility bill, or property documents.</p>
<p><strong>Bank account details</strong> with cancelled cheque or bank statement.</p>
<p><strong>Employee details</strong> - Aadhaar number, name, date of joining, designation, gross wages, family details, and photograph.</p>
<p><strong>Attendance register and wage records</strong> - monthly records for all employees.</p>
<p><strong>Form TM-48 / Power of Attorney</strong> if filing through an authorised agent like Patron Accounting.</p>
<div class="highlight-box" style="margin-top:16px;">
    <p><strong>Pune-Specific Tip:</strong> For manufacturing units at Chakan MIDC and MIDC Bhosari employing contract workers, maintain the principal employer's records separately from the contractor's. Under Section 40 of the ESI Act, the principal employer is ultimately responsible for ESI compliance of contract labour.</p>
</div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common ESIC Compliance Challenges in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>IT Company CTC vs Gross Wage Confusion</td><td>Incorrectly excluding allowances leads to under-deduction and penalties during ESIC inspections</td><td>Expert wage component mapping - ESI calculated on gross wages including HRA, DA, CCA, not just basic pay</td></tr>
<tr><td>Contract Labour ESI at Industrial Zones</td><td>Disputes about principal employer vs contractor responsibility for ESI at Chakan MIDC and MIDC Bhosari</td><td>Clear Section 40 compliance framework - principal employer liability management for contract workers</td></tr>
<tr><td>Crossing the 10-Employee Threshold</td><td>Pune startups miss the 15-day registration deadline when growing past 10 employees</td><td>Proactive threshold monitoring with automated registration triggers</td></tr>
<tr><td>Employee Wage Fluctuations</td><td>Mid-year increments crossing Rs 21,000 ceiling create calculation complexity during contribution period</td><td>Contribution period tracking - employees remain covered until end of period regardless of increment</td></tr>
<tr><td>ESIC Hospital Access for Pune Employees</td><td>Delays in super-specialty referrals at ESIC dispensaries and ESIC Hospital Bibvewadi</td><td>Employee guidance on accessing ESI medical benefits through empanelled hospitals in Pune</td></tr>

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
            <h2 class="section-title">ESIC Compliance Fees in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Patron Accounting Professional Fees (ESIC Calculation & Compliance)</td><td>Starting from INR 999/mo (Exl GST and Govt. Charges)</td></tr>
<tr><td>ESIC Registration (New)</td><td>Rs 2,500 - Rs 5,000 (one-time)</td></tr>
<tr><td>Monthly ESI Calculation + Challan</td><td>Rs 1,500 - Rs 5,000/month (based on headcount)</td></tr>
<tr><td>Half-Yearly Return Filing</td><td>Rs 1,500 - Rs 3,000 (twice a year)</td></tr>
<tr><td>Employee Enrolment (per batch)</td><td>Rs 500 - Rs 1,500 (as needed)</td></tr>
<tr><td>ESIC Inspection Support</td><td>Rs 5,000 - Rs 15,000 (per inspection)</td></tr>
<tr><td>Compliance Audit (retrospective)</td><td>Rs 10,000 - Rs 25,000 (one-time)</td></tr>
<tr><td>Bundled: ESI + PF + PT + MLWF</td><td>Rs 5,000 - Rs 15,000/month</td></tr>
<tr><td>Government Registration Fee</td><td>NIL - ESIC registration is free. Contributions are employer/employee funded</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free ESIC Calculation & Compliance in Pune consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ESIC%20Calculation%20and%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank" rel="noopener">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">ESIC Compliance Deadlines in Pune</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>ESIC Registration</td><td>Within 15 days of reaching 10 employees (online on esic.gov.in)</td></tr>
<tr><td>Monthly Contribution</td><td>15th of the following month (employee + employer share together)</td></tr>
<tr><td>Return (April-September)</td><td>12th November (half-yearly return filed online)</td></tr>
<tr><td>Return (October-March)</td><td>12th May (half-yearly return filed online)</td></tr>
<tr><td>Employee Enrolment</td><td>Within 10 days of joining (Aadhaar-linked on ESIC portal)</td></tr>
<tr><td>Accident Reporting</td><td>Within 24 hours (report workplace accidents on ESIC portal)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Pune Processing Note:</strong> No visit to the ESIC Sub Regional Office, Pune is required for registration or return filing. Patron's Pune office at RTC Silver, Wagholi handles all e-filing and compliance. Automated deadline reminders ensure Pune businesses never miss the 15th monthly contribution deadline or half-yearly return dates.</p>

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
            <h2 class="section-title">Why Choose Patron for ESIC Compliance in Pune</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card">
        <div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
        <h3>Pune Office at Wagholi</h3>
        <p>Walk-in support at RTC Silver, Wagholi - serving Hinjewadi, Kharadi, Wakad, Baner, Chakan MIDC, MIDC Bhosari, and Pimpri-Chinchwad.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div>
        <h3>Zero Penalty Track Record</h3>
        <p>10,000+ businesses served. Patron's payroll team handles ESI for IT companies, manufacturers, BPOs, and startups across Pune with zero penalty record.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/></svg></div>
        <h3>Bundled Compliance</h3>
        <p>Patron manages ESI + PF + PT (Maharashtra Professional Tax) + MLWF as a single bundled service - reducing cost and eliminating coordination gaps.</p>
    </article>
    <article class="feature-card">
        <div class="feature-icon-wrap"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:24px;height:24px;"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
        <h3>Automated ESI Calculation</h3>
        <p>Integrated with payroll processing. Patron flags threshold crossings, wage component errors, and deadline reminders proactively.</p>
    </article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Pune Businesses</h2>
            <div class="content-text">
                
                <p><strong>10,000+ Businesses | 4.9 Google Rating | 50,000+ Docs Filed | 15+ Years</strong></p>
<p>Trusted by Hyundai, Asian Paints, Bridgestone, and growing startups across Maharashtra. With offices in Pune, Mumbai, Delhi, and Gurugram, Patron serves businesses across India. Our Pune office provides in-person support for ESIC compliance and bundled payroll services.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">In-House Payroll vs Professional ESIC Compliance</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House</th><th>Professional (Patron)</th></tr></thead>
                    <tbody>
                        <tr><td>ESI Calculation</td><td>Manual; wage component errors common</td><td>Automated; correct inclusion/exclusion of components</td></tr>
<tr><td>Return Filing</td><td>Self-managed; deadline tracking needed</td><td>Filed on time with reminder system</td></tr>
<tr><td>Inspection Handling</td><td>Unprepared; scramble for records</td><td>Records maintained; representation provided</td></tr>
<tr><td>Cost</td><td>HR salary + software</td><td>Predictable monthly fee</td></tr>
<tr><td>Penalty Risk</td><td>Higher - common errors in wage mapping</td><td>Lower - expert wage component analysis</td></tr>
<tr><td>Bundled Compliance</td><td>ESI, PF, PT managed separately</td><td>Single point for all statutory compliances</td></tr>

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
            <h2 class="section-title">Related Services for Pune Businesses</h2>
            <div class="content-text">
                
                <p>Pune businesses managing ESIC compliance often need complementary payroll and compliance services:</p>
<ul style="list-style:disc;padding-left:20px;">
    <li style="margin-bottom:12px;padding:8px 0;"><a href="/payroll-services" style="font-weight:600;">Payroll Services in India</a> - Complete payroll processing and management for businesses across India</li>
    <li style="margin-bottom:12px;padding:8px 0;"><a href="/pf-registration">Provident Fund Registration</a> - PF registration and compliance alongside ESIC</li>
    <li style="margin-bottom:12px;padding:8px 0;"><a href="/shop-act-registration">Shop Act Registration</a> - Maharashtra-specific business registration for Pune establishments</li>
    <li style="margin-bottom:12px;padding:8px 0;"><a href="/private-limited-company-compliance">Private Limited Company Compliance</a> - Annual compliance including ROC filings</li>
    <li style="margin-bottom:12px;padding:8px 0;"><a href="/gst-registration">GST Registration</a> - Mandatory for businesses crossing Rs 40 lakh turnover</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal & Compliance Framework for ESIC</h2>
            <div class="content-text">
                
                <p><strong>Governing Act:</strong> Employees' State Insurance Act, 1948.</p>
<p><strong>Section 2(12):</strong> Defines 'factory' - any premises where 10+ persons are employed and manufacturing process is carried on.</p>
<p><strong>Section 1(5):</strong> Appropriate government can extend ESI to any establishment - Pune is fully notified.</p>
<p><strong>Section 38:</strong> Employer's obligation to pay contributions. <strong>Section 39:</strong> Employee's contribution deducted from wages.</p>
<p><strong>Section 40:</strong> Principal employer's liability for contract labour contributions - critical for Chakan MIDC and MIDC Bhosari manufacturers.</p>
<p><strong>Regulation 31:</strong> Contribution to be paid by 15th of the following month. <strong>Regulation 31-A:</strong> Simple interest at 12% per annum for delayed contributions.</p>
<p><strong>Regulation 31-C:</strong> Damages of 5% to 25% of contribution amount for delay - cannot exceed contribution payable.</p>
<p><strong>Section 85:</strong> Criminal penalties - imprisonment up to 2 years, fine up to Rs 5,000 for non-compliance. Repeat offence: enhanced punishment.</p>
<p><strong>IPC Section 406:</strong> Non-payment of employee's deducted contribution amounts to criminal breach of trust.</p>
<p><strong>Portal:</strong> <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC - www.esic.gov.in</a></p>
<p><strong>ESIC Sub Regional Office, Pune:</strong> sropune.esic.gov.in (under Regional Office Mumbai)</p>
<p><strong>Maharashtra-Specific:</strong> Maharashtra PT Act 1975 and MLWF Act are additional statutory compliances that Pune businesses must manage alongside ESIC.</p>

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
                    <h2 class="faq-expanded__title">FAQs - ESIC Calculation & Compliance in Pune</h2>
                    <p class="faq-expanded__lead">Common questions about ESI contribution rates, compliance deadlines, penalties, and ESIC benefits for Pune businesses</p>
                    @include('partials.bigin-form', [
                        'variant'  => 'compact',
                        'service'  => 'ESIC Calculation & Compliance in Pune',
                        'city'     => 'Pune',
                    ])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Which ESIC office handles Pune businesses?</h3>
                        <div class="faq-expanded__a"><p>The ESIC Sub Regional Office, Pune (sropune.esic.gov.in) handles ESIC registrations, inspections, and benefit claims for Pune and surrounding areas. It operates under the Regional Office Mumbai. All filings are done online through the ESIC portal (www.esic.gov.in). Patron Accounting's Pune office manages the entire compliance process digitally.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Can I get ESIC compliance managed online from Pune?</h3>
                        <div class="faq-expanded__a"><p>Yes. ESIC registration, monthly contribution payment, employee enrolment, and return filing are all managed online through the ESIC portal. Patron Accounting handles the complete ESIC compliance cycle from its Pune office at Wagholi without requiring any physical visit to the ESIC Sub Regional Office.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">What is the ESIC contribution rate in Pune?</h3>
                        <div class="faq-expanded__a"><p>The ESIC contribution rate is 0.75% of gross wages from the employee and 3.25% from the employer, totalling 4%. This applies to employees earning up to Rs 21,000 per month (Rs 25,000 for disabled employees). Employees earning Rs 176/day or less are exempt from the employee share, but the employer must still contribute 3.25%.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">How is ESI calculated on salary in Pune?</h3>
                        <div class="faq-expanded__a"><p>ESI is calculated on gross wages which includes basic pay + DA + HRA + city compensatory allowance + other regular monthly allowances. It excludes annual bonus, gratuity, retrenchment compensation, and leave encashment. For a Pune employee earning Rs 20,000 gross: Employee ESI = Rs 150 (0.75%), Employer ESI = Rs 650 (3.25%), Total = Rs 800 deposited by the 15th.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What is the penalty for late ESI payment?</h3>
                        <div class="faq-expanded__a"><p>Under Regulation 31-A, delayed ESI contributions attract simple interest at 12% per annum for each day of delay. Under Regulation 31-C, ESIC can levy damages of 5% to 25% of the contribution amount. Under Section 85 of the ESI Act, non-compliance can attract imprisonment up to 2 years and fines up to Rs 5,000. Non-payment of employee's deducted contribution is treated as criminal breach of trust under IPC Section 406.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">When are ESI returns due?</h3>
                        <div class="faq-expanded__a"><p>ESI returns are filed half-yearly: the April to September period return is due by 12th November, and the October to March period return is due by 12th May. Monthly contributions must be paid by the 15th of the following month. Patron files all returns on time for Pune businesses.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">Is ESI mandatory for all employees in Pune?</h3>
                        <div class="faq-expanded__a"><p>ESI is mandatory for establishments in Pune with 10 or more employees (including contract, casual, and part-time workers). It applies to employees earning gross wages up to Rs 21,000 per month. Employees above this ceiling are not covered. Even if wages exceed Rs 21,000 during a contribution period, they remain covered until the end of that period.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">What ESI benefits can Pune employees claim?</h3>
                        <div class="faq-expanded__a"><p>Pune employees covered under ESI can access medical benefits at ESIC dispensaries and the ESIC Hospital, Bibvewadi, as well as empanelled hospitals. Benefits include sickness cash benefit (70% of wages for up to 91 days), maternity benefit (full wages for 26 weeks), disablement benefit (90% of wages), dependent's benefit, and unemployment allowance.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>What is ESIC?</strong> Employees' State Insurance Corporation manages the ESI scheme under the ESI Act, 1948 - providing medical and cash benefits to employees earning up to Rs 21,000/month.</p>
<p><strong>Pune mein ESI kaise calculate hota hai?</strong> Employee ka 0.75% aur employer ka 3.25% gross wages se deduct hota hai. Total 4% ESIC mein jaata hai.</p>
<p><strong>What is the ESI wage ceiling?</strong> Rs 21,000 per month gross wages (Rs 25,000 for disabled employees). Above this ceiling, ESI does not apply.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Do Not Miss Your ESIC Compliance Deadlines in Pune</h2>
            <div class="content-text">
                
                <p>ESIC contribution is due by the <strong>15th of every month</strong> - missing this deadline triggers 12% simple interest per annum under Regulation 31-A. Half-yearly returns not filed by <strong>12th November</strong> and <strong>12th May</strong> attract fines up to Rs 5,000 and imprisonment up to 2 years under Section 85. Non-deposit of employee-deducted ESI is treated as <strong>criminal breach of trust</strong> under IPC 406.</p>
<p><strong>Pune businesses crossing the 10-employee threshold must register within 15 days. Contact Patron today for zero-penalty ESIC compliance.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Get Expert ESIC Compliance Support in Pune</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">ESIC calculation and compliance in Pune is a non-negotiable monthly payroll obligation for every business employing 10 or more workers. Whether your company operates from Hinjewadi IT Park, manufactures at Chakan MIDC, runs a BPO at Magarpatta City, or is a growing startup in Baner, accurate ESI calculation at 0.75% (employee) + 3.25% (employer) on gross wages is essential.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting, with its Pune office at RTC Silver, Wagholi, provides end-to-end ESIC compliance services - from registration and monthly calculation to return filing and inspection support. The CA and CS team at Patron manages bundled ESI + PF + PT + MLWF services for Pune businesses.</p>
<p style="color:rgba(255,255,255,0.9);font-size:16px;line-height:1.8;">Patron Accounting LLP serves 10,000+ businesses across India through offices in Pune, Mumbai, Delhi, and Gurugram. Contact us for a free consultation on ESIC compliance.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20help%20with%20ESIC%20Calculation%20and%20Compliance%20in%20Pune.%20Please%20share%20details." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;" rel="noopener">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20ESIC%20Compliance%20in%20Pune&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20help%20with%20ESIC%20Compliance%20in%20Pune.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">ESIC Compliance Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Patron Accounting provides ESIC compliance services in 4 major cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;">
    <div class="pa-city-grid">
        <div class="pa-city-card" style="opacity:0.6; pointer-events:none; border:2px solid var(--orange); position:relative;"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div><span style="position:absolute; top:6px; right:8px; font-size:10px; color:var(--orange); font-weight:700; text-transform:uppercase; letter-spacing:0.5px;">You're here</span></div>
        <a href="/esic-calculation-compliance/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a>
        <a href="/esic-calculation-compliance/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">Delhi NCR</div></div></a>
        <a href="/esic-calculation-compliance/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a>
    </div>
</div>
<div class="pa-city-block">
    <div class="pa-block-title">Related Services</div>
    <div class="pa-block-sub">End-to-end payroll and compliance support for Pune businesses</div>
    <div class="pa-cross-grid">
        <a href="/gst-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/private-limited-company-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Pvt Ltd Company Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/startup-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Startup Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/trademark-registration/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Trademark Registration</div><div class="pa-card-sub">Pune</div></div></a>
        <a href="/llp-incorporation/pune" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">LLP Registration</div><div class="pa-card-sub">Pune</div></div></a>
    </div>
</div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 23 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">23 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page on ESIC Calculation & Compliance in Pune is reviewed semi-annually for accuracy. Content covers the ESI Act 1948, contribution rates (0.75% + 3.25%), Regulation 31-A/31-C penalty provisions, Section 85 criminal penalties, and ESIC Sub Regional Office Pune jurisdiction. Freshness Tier 1 - rate changes possible each budget.</p>
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
