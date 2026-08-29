
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
    <title>Construction & Real Estate Payroll - PF, ESI, TDS & Wages</title>
    <meta name="description" content="Expert payroll services for construction and real estate companies in India. PF, ESI, BOCW compliance, salary processing from Rs 5,999/month. CA-managed.">
    <link rel="canonical" href="/payroll-services-for-construction-real-estate-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Construction & Real Estate Payroll - PF, ESI, TDS & Wages">
    <meta property="og:description" content="Expert payroll services for construction and real estate companies in India. PF, ESI, BOCW compliance, salary processing from Rs 5,999/month. CA-managed.">
    <meta property="og:url" content="/payroll-services-for-construction-real-estate-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:secure_url" content="https://www.patronaccounting.com/images/og-default-square.png">
    <meta property="og:image:alt" content="Patron Accounting - partner you can rely on">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Construction & Real Estate Payroll - PF, ESI, TDS & Wages">
    <meta name="twitter:description" content="Expert payroll services for construction and real estate companies in India. PF, ESI, BOCW compliance, salary processing from Rs 5,999/month. CA-managed.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-square.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Construction Payroll Services",
          "description": "Expert payroll services for construction and real estate companies in India. PF, ESI, BOCW compliance, salary processing from Rs 5,999/month. CA-managed.",
          "url": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry",
          "serviceType": "Construction Payroll Services",
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
            "url": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry",
            "price": "5999"
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
              "name": "Construction Payroll Services",
              "item": "https://www.patronaccounting.com/payroll-services-for-construction-real-estate-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How is payroll managed for daily-wage construction workers?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Daily-wage workers are paid based on attendance and applicable minimum wage for the state and skill category. Under the Payment of Wages Act, 1936, wages must be paid within 7 days. Our payroll tracks daily attendance, applies correct rates, computes overtime at 2x (Factories Act), deducts EPF and ESI where applicable, and ensures timely bank transfer with muster rolls per BOCW Act."
              }
            },
            {
              "@type": "Question",
              "name": "What is BOCW cess and how does it affect payroll costs?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "BOCW cess is a welfare levy of 1-2% of total construction cost, payable to the State Welfare Board under the BOCW Welfare Cess Act, 1996. While not a direct payroll deduction from wages, it is a statutory cost construction companies must budget for. Patron Accounting tracks your cess liability and assists with timely payment."
              }
            },
            {
              "@type": "Question",
              "name": "Is EPF mandatory for construction workers in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under the EPF and MP Act, 1952, EPF is mandatory for construction establishments with 20+ workers. Both employer and employee contribute 12% of Basic + DA. The employer's 12% splits into 3.67% EPF and 8.33% EPS (capped at Rs 15,000 pensionable salary). ECR must be filed by the 15th monthly."
              }
            },
            {
              "@type": "Question",
              "name": "What are the penalties for late ESI contributions?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 85 of the ESI Act, 1948: imprisonment up to 2 years and fine up to Rs 5,000. Delayed payments attract 12% p.a. interest. Contributions (0.75% employee + 3.25% employer on wages up to Rs 21,000) must be deposited by the 15th of the following month."
              }
            },
            {
              "@type": "Question",
              "name": "How do you handle contract labour payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under the Contract Labour (R&A) Act, 1970, the principal employer is liable if the contractor fails to pay wages (Section 21). We maintain separate registers per contractor (Form XIII), verify wage payment proof, track EPF/ESI contributions, and generate compliance certificates. If the contractor defaults, we flag it immediately."
              }
            },
            {
              "@type": "Question",
              "name": "Can you handle multi-state construction payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Construction companies operate across states with different minimum wages, professional tax slabs, and labour welfare fund rates. Our team maintains compliance calendars for all 28 states and 8 UTs, applies location-specific rates automatically, and handles inter-state migrant worker documentation under the ISMW Act, 1979."
              }
            },
            {
              "@type": "Question",
              "name": "What happens with the new Labour Codes for construction?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The four new Labour Codes are in force since November 2025 but state implementation rules are pending. Changes will include: basic wages at least 50% of total remuneration, revised social security thresholds, and updated safety compliance under the OSH Code. We monitor all notifications and update payroll structures proactively."
              }
            },
            {
              "@type": "Question",
              "name": "Do construction companies need BOCW registration?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under Section 7 of the BOCW Act, 1996, every establishment with 10+ building workers on any day in the preceding 12 months must register with the State Welfare Board within 60 days of commencement. Workers aged 18-60 with 90 days of service can register as beneficiaries for medical, accident, education, maternity, and pension benefits. Quick Answers Q: EPF rate? A: 12% each (employee + employer) on Basic + DA. Employer split: 3.67% EPF + 8.33% EPS. Q: ESI rate? A: 0.75% employee + 3.25% employer. Wages up to Rs 21,000/month. Q: BOCW cess rate? A: 1-2% of total construction cost per BOCW Welfare Cess Act, 1996. Q: EPF deposit deadline? A: 15th of following month. Late: 1% per month damages + 12% interest."
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
                        Payroll Services for Construction and Real Estate Industry in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">16 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>End-to-End:</span> Salary processing for builders, developers, contractors. Permanent staff, daily-wage labourers, contract workers, and migrant labour across multiple sites.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>BOCW Compliance:</span> BOCW Act 1996 registration, cess tracking (1-2% of construction cost), worker beneficiary registration, and welfare board filings.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Statutory Filing:</span> EPF ECR by 15th, ESI by 15th, TDS by 7th. Professional tax, contract labour registers (Form XIII), and multi-state compliance.</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Starting Price:</span> From Rs 5,999/month (up to 25 employees). Multi-site attendance integration, project-wise allocation, and dedicated payroll manager.</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">100+ construction clients. 50,000+ monthly payslips. Zero penalty track record. 15+ years. 4.9 Google Rating.</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com?subject=Construction%20Payroll%20Enquiry&body=Hello%2C%0A%0AI%20need%20construction%20payroll%20services.%0A%0AThank%20you." class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20Payroll%20Services%20for%20my%20Construction%20Company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Construction Payroll',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-construction-real-estate-industry', 'label' => 'Construction Payroll', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services', 'selected' => false, 'disabled' => false],
                            ['value' => 'pf-registration', 'label' => 'PF Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'esic-registration', 'label' => 'ESIC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Returns', 'selected' => false, 'disabled' => false],
                            ['value' => 'construction-and-real-estate-accounting-services', 'label' => 'Construction Accounting', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron Accounting transformed our payroll. Managing 12 project sites with permanent and contract workers was a nightmare. They set up project-wise allocation, handle BOCW and EPF filings, and we have not received a single penalty since we started. The compliance dashboard gives complete visibility.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh Kumar</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Operations Head, Real Estate Developer, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As an infrastructure contractor with teams in Maharashtra, Karnataka, and Telangana, multi-state compliance was our biggest challenge. Patron Accounting handles different minimum wages, PT rates, and LWF across all three states with zero errors. Monthly dashboard gives complete visibility.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha Patel</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Director, Infrastructure Company, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Had no idea about BOCW cess obligations until Patron Accounting flagged it during our payroll setup. They calculated the arrears, assisted with state welfare board registration, and now track our cess liability every month. The contract labour registers they maintain have been lifesavers during labour inspections.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AM</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Arun Mehra</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Builder, Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We have 150 daily-wage workers with high turnover. Patron Accounting onboards new joiners within 24 hours with Aadhaar verification and UAN generation. Their digital attendance integration means we no longer lose track of worker hours. Project-wise allocation reports help us track labour costs per building accurately.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya Joshi</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Project Manager, Construction Firm, Bengaluru</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Switched from in-house payroll to Patron Accounting and saved nearly 35% in processing costs. More importantly, our EPF and ESI filings are always on time now. The year-end closure with Form 16 for all 200 employees was handled seamlessly. Dedicated relationship manager makes all the difference.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">VK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Vikram Khanna</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, Real Estate Company, Gurugram</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Construction payroll from Rs 5,999/month. BOCW, EPF, ESI, TDS, contract labour compliance included. Multi-site, multi-state.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a>
            <a href="#what-section" class="toc-btn">What Is It</a>
            <a href="#who-section" class="toc-btn">Who Needs It</a>
            <a href="#services-section" class="toc-btn">Our Services</a>
            <a href="#procedure-section" class="toc-btn">8-Step Process</a>
            <a href="#documents-section" class="toc-btn">Documents</a>
            <a href="#challenges-section" class="toc-btn">Challenges</a>
            <a href="#fees-section" class="toc-btn">Fees</a>
            <a href="#timeline-section" class="toc-btn">Timeline</a>
            <a href="#benefits-section" class="toc-btn">Why Outsource</a>
            <a href="#comparison-section" class="toc-btn">DIY vs Outsource</a>
            <a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction Payroll Services - Guide for 2026</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Construction Payroll Services at a Glance</strong></p>
                    <p>End-to-end payroll for construction and real estate companies. BOCW Act 1996, EPF Act 1952, ESI Act 1948, Contract Labour Act 1970, and new Labour Codes 2025. EPF 12% + 12%. ESI 0.75% + 3.25% (cap Rs 21,000). BOCW cess 1-2% of construction cost. Monthly payroll by 28th. Statutory filings by 15th. From Rs 5,999/month.</p>
                </div>
                <p>Construction payroll is fundamentally different from standard payroll. Companies operate with permanent employees, daily-wage labourers, contract workers, and migrant labour across multiple project sites in different states. Each category attracts different statutory obligations under the BOCW Act 1996, Contract Labour Act 1970, Inter-State Migrant Workmen Act 1979, and the four new Labour Codes effective November 2025.</p>
                <p><div class="table-responsive-wrapper"><table><thead><tr><th>Parameter</th><th>Details</th></tr></thead><tbody>
<tr><td>Service</td><td>Payroll processing and compliance for construction/real estate</td></tr>
<tr><td>Key Compliance</td><td>BOCW Act 1996, EPF Act 1952, ESI Act 1948, Contract Labour Act 1970, new Labour Codes 2025</td></tr>
<tr><td>EPF Rate</td><td>12% employee + 12% employer (3.67% EPF + 8.33% EPS)</td></tr>
<tr><td>ESI Rate</td><td>0.75% employee + 3.25% employer (wage ceiling Rs 21,000/month)</td></tr>
<tr><td>BOCW Cess</td><td>1% to 2% of total cost of construction, payable to State Welfare Board</td></tr>
<tr><td>Starting Price</td><td>From Rs 5,999/month (varies by employee count and sites)</td></tr>
<tr><td>Turnaround</td><td>Monthly payroll by 28th; statutory filings by 15th</td></tr>
</tbody></table></div></p>
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
                <h2 class="section-title">What Are Payroll Services for Construction and Real Estate?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Payroll services for the construction and real estate industry involve <strong>end-to-end salary processing, statutory compliance management, and workforce reporting</strong> tailored to builders, developers, infrastructure firms, and real estate companies.</p>
<p>Unlike standard payroll, construction payroll must account for daily-wage workers alongside salaried employees, <strong>project-wise cost allocation</strong>, multi-site attendance, contractor payments, <strong>BOCW welfare cess</strong>, and compliance with the Building and Other Construction Workers Act 1996 - in addition to EPF, ESI, TDS, and professional tax.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Construction Payroll:</strong></p>
                    <p><strong>BOCW Cess:</strong> Welfare cess at 1-2% of total construction cost under the BOCW Welfare Cess Act, 1996. Payable to the State Welfare Board. Not a payroll deduction but a statutory cost.</p>
<p><strong>Contract Labour:</strong> Workers through a contractor under the Contract Labour (R&A) Act, 1970. Principal employer remains liable if contractor defaults (Section 21).</p>
<p><strong>ECR:</strong> Electronic Challan-cum-Return - monthly EPF return on the EPFO portal with employee-wise contribution details.</p>
<p><strong>Project-Wise Allocation:</strong> Splitting salary costs across construction projects for job costing and financial reporting.</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Construction Payroll -->
                            <rect x="30" y="15" width="140" height="120" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <rect x="30" y="15" width="140" height="24" rx="8" fill="#14365F"/>
                            <text x="100" y="32" font-size="8" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Construction Payroll</text>
                            <!-- Building icon -->
                            <rect x="50" y="50" width="20" height="35" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <rect x="55" y="55" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="61" y="55" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="55" y="63" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="61" y="63" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="80" y="55" width="25" height="30" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <rect x="85" y="60" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="95" y="60" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="85" y="68" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <rect x="95" y="68" width="4" height="4" rx="0.5" fill="#14365F" opacity="0.3"/>
                            <!-- Compliance badges -->
                            <rect x="115" y="48" width="40" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="135" y="58" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">EPF</text>
                            <rect x="115" y="65" width="40" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="135" y="75" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">ESI</text>
                            <!-- Labels -->
                            <rect x="35" y="100" width="55" height="14" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/>
                            <text x="62" y="110" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">BOCW 1996</text>
                            <rect x="100" y="100" width="60" height="14" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="130" y="110" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">Multi-Site</text>
                            <!-- Check -->
                            <circle cx="155" cy="28" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M148 28l4 4 9-9" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <text x="100" y="148" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">BOCW + EPF + ESI</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Construction Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>BOCW Act, 1996</span>
                        <strong>EPF + ESI + BOCW Cess</strong>
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
            <h2 class="section-title">Who Needs Construction Payroll Services?</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Builders and real estate developers</strong> - residential, commercial, or mixed-use projects</li>
<li><strong>Infrastructure companies</strong> - road, bridge, metro, highway projects</li>
<li><strong>General contractors and sub-contractors</strong> managing on-site labour</li>
<li><strong>Construction firms with 10+ workers</strong> - BOCW Act registration mandatory (Section 7)</li>
<li><strong>Companies with 20+ employees</strong> - EPF registration mandatory (EPF Act, 1952)</li>
<li><strong>Establishments with 10+ employees earning up to Rs 21,000/month</strong> - ESI mandatory</li>
<li><strong>RERA-registered real estate firms</strong> operating across multiple states</li>
<li><strong>Companies engaging inter-state migrant workmen</strong> under the Inter-State Migrant Workmen Act, 1979</li>
</ul>
<p><strong>Key threshold:</strong> BOCW Act applies to every establishment with 10+ building workers on any day in the preceding 12 months. Register within 60 days of commencement.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">6 Construction Payroll Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Salary Processing</td><td>Gross pay, overtime at 2x (Factories Act, 1948), deductions (EPF, ESI, TDS, PT, LWF), net pay, bank transfer for all categories - permanent staff, site supervisors, daily-wage, contract labour.</td></tr>
<tr><td>Statutory Compliance and Filing</td><td>Monthly EPF ECR, ESI contributions, state-wise professional tax, TDS under Section 192, quarterly Form 24Q, and annual Form 16 generation.</td></tr>
<tr><td>BOCW Compliance and Cess Tracking</td><td>State welfare board registration, BOCW cess calculation at 1-2% of construction cost, worker beneficiary registration, and record maintenance under BOCW Act 1996.</td></tr>
<tr><td>Contract Labour Payroll</td><td>Contractor-wise payroll registers, Form V and Form XIII compliance under Contract Labour Act, attendance records, wage payment tracking, and principal employer liability management.</td></tr>
<tr><td>Multi-Site Attendance and Project Allocation</td><td>Biometric/digital attendance integration across project sites, labour cost allocation to specific projects, and project-wise payroll cost reports for management accounting.</td></tr>
<tr><td>Year-End Payroll Closure</td><td>Full and final settlement, gratuity calculation (Payment of Gratuity Act 1972), Form 16, annual PF and ESI reconciliation, and labour register consolidation.</td></tr>

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
            <h2 class="section-title">8-Step Construction Payroll Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">Monthly payroll delivered by the 28th. All statutory filings completed by the 15th. Project-wise cost reports within 48 hours of payroll closure.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Data Collection from All Sites</h3><p class="step-description">Receive attendance data from all project sites (biometric or manual), overtime sheets, new joiner documents, and exit details. Deadline: 20th of each month.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Site data received</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Overtime captured</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="22" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Site 1</text><rect x="57" y="22" width="30" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="72" y="31" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">Site 2</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Collected</span><span class="step-number-large">01</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Employee Master Verification</h3><p class="step-description">Validate Aadhaar-linked UAN for EPF, ESI IP numbers, PAN for TDS, and bank account details. Flag discrepancies within 24 hours.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> UAN verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> KYC checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="60" y="34" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">UAN + PAN</text><circle cx="60" cy="52" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><path d="M55 52l3 3 7-7" stroke="#25D366" stroke-width="1.5" stroke-linecap="round"/></svg></div><span class="illustration-label">Verified</span><span class="step-number-large">02</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Salary Computation</h3><p class="step-description">Calculate gross pay: basic wages, DA, HRA (office staff), overtime at 2x rate (Section 59, Factories Act 1948), and allowances. Apply project-wise allocation for cost accounting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gross computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Project-wise split</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="5" width="90" height="70" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="30" y1="22" x2="90" y2="22" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="30" y1="35" x2="80" y2="35" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><line x1="30" y1="45" x2="70" y2="45" stroke="#14365F" stroke-width="2" opacity="0.3" stroke-linecap="round"/><circle cx="85" cy="55" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/><text x="85" y="58" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">2x OT</text></svg></div><span class="illustration-label">Computed</span><span class="step-number-large">03</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Statutory Deductions</h3><p class="step-description">EPF 12% of Basic + DA (split 3.67% EPF + 8.33% EPS capped Rs 15,000). ESI 0.75% + 3.25% (wages up to Rs 21,000). TDS under Section 192. Professional tax per state schedule.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPF/ESI computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS deducted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="25" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="32" y="28" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPF</text><rect x="48" y="20" width="25" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="28" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI</text><rect x="76" y="20" width="25" height="10" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="88" y="28" font-size="4" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">TDS</text><path d="M48 55l8 8 16-16" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Deducted</span><span class="step-number-large">04</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Net Pay Calculation and Approval</h3><p class="step-description">Generate payroll summary with net pay for each employee category - permanent, daily-wage, contract. Share with management for approval within 2 working days.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Net pay ready</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Approval received</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="15" width="70" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="35" y="25" width="50" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="34" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">NET PAY</text><rect x="35" y="45" width="50" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="54" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">APPROVED</text></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">05</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Salary Disbursement</h3><p class="step-description">Process bank transfers for salaried employees. Coordinate contractor payments under Contract Labour Act 1970. Distribute payslips via email or portal.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Bank transfer done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips sent</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="60" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="60" height="15" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="60" y="33" font-size="6" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">PAID</text><rect x="35" y="45" width="50" height="15" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="60" y="56" font-size="5" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">Payslips</text></svg></div><span class="illustration-label">Disbursed</span><span class="step-number-large">06</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Statutory Filing</h3><p class="step-description">File EPF ECR on EPFO portal by 15th. Remit ESI contributions by 15th. Deposit TDS by 7th. File professional tax per state deadlines. All deadlines per EPF Act Section 38, ESI Act, IT Act Section 192.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ECR filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ESI/TDS paid</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="10" width="90" height="65" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="20" width="35" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="37" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPF 15th</text><rect x="60" y="20" width="35" height="12" rx="3" fill="#FFF3E0" stroke="#F5A623" stroke-width="0.8"/><text x="77" y="29" font-size="5" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI 15th</text><rect x="35" y="42" width="45" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/><text x="57" y="51" font-size="5" fill="#25D366" font-weight="700" text-anchor="middle" font-family="Arial">TDS 7th</text></svg></div><span class="illustration-label">Filed</span><span class="step-number-large">07</span></div></div></div>

<div class="step-card"><div class="step-content"><span class="step-badge">Step 8</span><h3 class="step-title">Reporting and Reconciliation</h3><p class="step-description">Deliver project-wise payroll cost report, statutory payment confirmation, and compliance dashboard. Reconcile variances within 48 hours.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reports delivered</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="65" rx="8" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><rect x="28" y="25" width="64" height="20" rx="5" fill="#25D366" opacity="0.15"/><text x="60" y="33" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">PROJECT</text><text x="60" y="42" font-size="7" fill="#14365F" font-weight="800" text-anchor="middle" font-family="Arial">REPORTS</text><path d="M52 60l5 5 11-11" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div><span class="illustration-label">Complete</span><span class="step-number-large">08</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for Construction Payroll Setup</h2>
            <div class="content-text">
                
                <ul>
<li><strong>Company PAN card</strong> and GST registration certificate</li>
<li><strong>EPF establishment registration</strong> certificate (or application)</li>
<li><strong>ESI registration certificate</strong> (or application)</li>
<li><strong>BOCW registration certificate</strong> from the state welfare board</li>
<li><strong>Professional tax registration</strong> (state-wise)</li>
<li><strong>Contract labour license (Form V)</strong> if engaging contract workers</li>
<li><strong>Employee master list</strong> with Aadhaar, PAN, UAN, ESI IP, bank details</li>
<li><strong>Salary structure breakdown</strong> (basic, DA, HRA, allowances, overtime policy)</li>
<li><strong>Site-wise attendance records</strong> or biometric system access</li>
<li><strong>Previous month payroll data</strong> (for transition)</li>
<li><strong>Contractor agreements</strong> and sub-contractor worker lists</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">4 Construction Payroll Challenges and Solutions</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>High Workforce Turnover</td><td>Construction sites have frequent worker turnover - labourers join and leave within weeks. Maintaining accurate attendance and payroll records is difficult</td><td>Digital attendance tracking integrated with payroll. New joiner onboarding within 24 hours with Aadhaar verification, UAN generation, and ESI IP creation.</td></tr>
<tr><td>Multi-State Compliance</td><td>Projects across multiple states with different minimum wages, professional tax, and labour welfare fund requirements</td><td>State-wise compliance calendars for all 28 states and 8 UTs. Location-specific statutory rates applied automatically in payroll computation.</td></tr>
<tr><td>Contract Labour Liability</td><td>Principal employer is liable if contractor fails to pay wages or statutory contributions (Section 21, Contract Labour Act 1970)</td><td>Contractor-wise payroll tracking, wage disbursement verification, and compliance certificates confirming EPF, ESI, and wage payments per contractor.</td></tr>
<tr><td>BOCW Cess and Worker Registration</td><td>Many companies are unaware of BOCW cess obligations or fail to register workers as beneficiaries</td><td>BOCW cess calculation at applicable rate (1-2%), cess payment assistance, and worker registration with state welfare board.</td></tr>

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
            <h2 class="section-title">Construction Payroll Service Fees</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Up to 25 employees</td><td class="table-amount">Rs 5,999/month - Salary, EPF, ESI, TDS, PT filing</td></tr>
<tr><td>26 to 75 employees</td><td class="table-amount">Rs 11,999/month - + BOCW tracking, contract labour registers</td></tr>
<tr><td>76 to 200 employees</td><td class="table-amount">Rs 19,999/month - + multi-site allocation, dedicated manager</td></tr>
<tr><td>200+ employees</td><td class="table-amount">Custom quote - Enterprise payroll with SLA-backed delivery</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Construction Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20construction%20payroll%20services.%20Please%20call%20me." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction Payroll Processing Timeline</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>Initial payroll setup and data migration</td><td>5-7 working days</td></tr>
<tr><td>Monthly processing (data to disbursement)</td><td>5 working days</td></tr>
<tr><td>EPF ECR filing</td><td>By 15th of following month</td></tr>
<tr><td>ESI contribution remittance</td><td>By 15th of following month</td></tr>
<tr><td>TDS deposit</td><td>By 7th of following month</td></tr>
<tr><td>Form 16 generation</td><td>By 15th June annually</td></tr>
<tr><td>Full and final settlement</td><td>Within 7 working days of exit</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Important:</strong> EPF ECR late filing attracts damages at 1% per month (revised June 2024) plus 12% interest (Section 14B/7Q). ESI late payment: 12% interest + prosecution risk (Section 85). TDS late deposit: 1.5% per month (Section 201(1A)). BOCW cess non-payment: imprisonment up to 6 months. Wages must be paid by 7th or 10th of following month (Payment of Wages Act).</p>

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
            <h2 class="section-title">Why Outsource Construction Payroll?</h2>
        </div>
        <div class="features-grid">
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3 class="feature-title">Industry Expertise</h3><p class="feature-text">CA and CS team understands BOCW compliance, contract labour regulations, and construction-specific payroll nuances that generic providers miss.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3 class="feature-title">Zero Penalty Guarantee</h3><p class="feature-text">All statutory filings completed before deadlines. Reduces risk of EPF damages (up to 100%), ESI prosecution, and TDS interest.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg></div><h3 class="feature-title">Multi-Site Scalability</h3><p class="feature-text">Whether 1 project site or 50, payroll scales with your operations. State-wise compliance calendars for all 28 states and 8 UTs.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3 class="feature-title">Cost Efficiency</h3><p class="feature-text">Eliminates in-house payroll team, software licenses, and compliance training - typically saving 30-40% compared to in-house processing.</p></article>
    <article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div><h3 class="feature-title">Data Security</h3><p class="feature-text">Encrypted systems, role-based access controls, audit trails, and regular backups. Dedicated relationship manager for every client.</p></article>
</div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Trusted by Construction Companies Across India</h2>
            <div class="content-text">
                
                <p><strong>100+ Construction and Real Estate Clients.</strong></p>
<p><strong>50,000+ Monthly Payslips Processed.</strong></p>
<p><strong>Zero Penalty Track Record</strong> across all statutory filings.</p>
<p><strong>15+ Years of Practice.</strong></p>
<p><strong>4 Offices:</strong> Pune, Mumbai, Delhi, and Bengaluru.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY Payroll vs Professional Outsourcing</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>In-House / DIY</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>BOCW Compliance</td><td>Often missed; cess miscalculated</td><td>Full tracking and filing</td></tr>
<tr><td>Contract Labour Registers</td><td>Manual, error-prone</td><td>Automated, contractor-wise</td></tr>
<tr><td>Multi-State PT/LWF</td><td>Requires state-specific knowledge</td><td>All 28 states covered</td></tr>
<tr><td>EPF/ESI Filing</td><td>Delays common; penalties frequent</td><td>Filed by 15th every month</td></tr>
<tr><td>Project-Wise Costing</td><td>Manual spreadsheets</td><td>Automated allocation reports</td></tr>
<tr><td>Cost (50 employees)</td><td>Rs 25,000-40,000/month</td><td>Rs 11,999/month all inclusive</td></tr>
<tr><td>Penalty Risk</td><td>High</td><td>Near zero</td></tr>

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
            <h2 class="section-title">Related Services for Construction Companies</h2>
            <div class="content-text">
                
                <ul>
<li><strong><a href="/construction-and-real-estate-accounting-services">Construction Accounting</a></strong> - Project-wise accounting and Ind AS 115 revenue recognition.</li>
<li><strong><a href="/payroll-services">Payroll Services (Overview)</a></strong> - Complete payroll outsourcing for all industries.</li>
<li><strong><a href="/pf-registration">EPF Registration</a></strong> - New establishment PF registration.</li>
<li><strong><a href="/esic-registration">ESIC Registration</a></strong> - ESI registration for construction establishments.</li>
<li><strong><a href="/tds-return-filing-24q">TDS Return Filing</a></strong> - Quarterly TDS returns for salary and contractor payments.</li>
</ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Construction Payroll</h2>
            <div class="content-text">
                
                <p><strong>Key Statutes:</strong></p>
<ul>
<li><strong>BOCW Act, 1996 (Section 7):</strong> 10+ workers = mandatory registration within 60 days. Cess 1-2% of construction cost. Non-payment: imprisonment up to 6 months.</li>
<li><strong>EPF Act, 1952 (Section 14B):</strong> Late deposit: damages at 1% per month (revised June 2024), capped at 100%. Interest 12% p.a. (Section 7Q).</li>
<li><strong>ESI Act, 1948 (Section 85):</strong> Non-payment: imprisonment up to 2 years + Rs 5,000 fine. Interest 12% p.a.</li>
<li><strong>Contract Labour Act, 1970 (Section 21):</strong> Principal employer liable if contractor defaults on wages.</li>
<li><strong>Payment of Wages Act, 1936 (Section 5):</strong> Wages by 7th (under 1,000 workers) or 10th (1,000+).</li>
<li><strong>New Labour Codes (Nov 2025):</strong> In force. State implementation rules pending. 50% wage rule applies.</li>
</ul>
<p><strong>Portals:</strong> <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO</a> | <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC</a></p>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Construction Payroll</h2>
                    <p class="faq-expanded__lead">Answers about daily-wage payroll, BOCW cess, EPF/ESI for construction, contract labour, multi-state compliance, and new Labour Codes.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Construction Payroll'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is payroll managed for daily-wage construction workers?</h3>
                        <div class="faq-expanded__a"><p>Daily-wage workers are paid based on attendance and applicable minimum wage for the state and skill category. Under the Payment of Wages Act, 1936, wages must be paid within 7 days. Our payroll tracks daily attendance, applies correct rates, computes overtime at 2x (Factories Act), deducts EPF and ESI where applicable, and ensures timely bank transfer with muster rolls per BOCW Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is BOCW cess and how does it affect payroll costs?</h3>
                        <div class="faq-expanded__a"><p>BOCW cess is a welfare levy of 1-2% of total construction cost, payable to the State Welfare Board under the BOCW Welfare Cess Act, 1996. While not a direct payroll deduction from wages, it is a statutory cost construction companies must budget for. Patron Accounting tracks your cess liability and assists with timely payment.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Is EPF mandatory for construction workers in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the EPF and MP Act, 1952, EPF is mandatory for construction establishments with 20+ workers. Both employer and employee contribute 12% of Basic + DA. The employer's 12% splits into 3.67% EPF and 8.33% EPS (capped at Rs 15,000 pensionable salary). ECR must be filed by the 15th monthly.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What are the penalties for late ESI contributions?</h3>
                        <div class="faq-expanded__a"><p>Under Section 85 of the ESI Act, 1948: imprisonment up to 2 years and fine up to Rs 5,000. Delayed payments attract 12% p.a. interest. Contributions (0.75% employee + 3.25% employer on wages up to Rs 21,000) must be deposited by the 15th of the following month.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">How do you handle contract labour payroll?</h3>
                        <div class="faq-expanded__a"><p>Under the Contract Labour (R&A) Act, 1970, the principal employer is liable if the contractor fails to pay wages (Section 21). We maintain separate registers per contractor (Form XIII), verify wage payment proof, track EPF/ESI contributions, and generate compliance certificates. If the contractor defaults, we flag it immediately.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">Can you handle multi-state construction payroll?</h3>
                        <div class="faq-expanded__a"><p>Yes. Construction companies operate across states with different minimum wages, professional tax slabs, and labour welfare fund rates. Our team maintains compliance calendars for all 28 states and 8 UTs, applies location-specific rates automatically, and handles inter-state migrant worker documentation under the ISMW Act, 1979.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What happens with the new Labour Codes for construction?</h3>
                        <div class="faq-expanded__a"><p>The four new Labour Codes are in force since November 2025 but state implementation rules are pending. Changes will include: basic wages at least 50% of total remuneration, revised social security thresholds, and updated safety compliance under the OSH Code. We monitor all notifications and update payroll structures proactively.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-8">
                        <h3 class="faq-expanded__q">Do construction companies need BOCW registration?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under Section 7 of the BOCW Act, 1996, every establishment with 10+ building workers on any day in the preceding 12 months must register with the State Welfare Board within 60 days of commencement. Workers aged 18-60 with 90 days of service can register as beneficiaries for medical, accident, education, maternity, and pension benefits.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: EPF rate?</strong> A: 12% each (employee + employer) on Basic + DA. Employer split: 3.67% EPF + 8.33% EPS.</p>
<p><strong>Q: ESI rate?</strong> A: 0.75% employee + 3.25% employer. Wages up to Rs 21,000/month.</p>
<p><strong>Q: BOCW cess rate?</strong> A: 1-2% of total construction cost per BOCW Welfare Cess Act, 1996.</p>
<p><strong>Q: EPF deposit deadline?</strong> A: 15th of following month. Late: 1% per month damages + 12% interest.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Construction Payroll Penalties Add Up Fast</h2>
            <div class="content-text">
                
                <p>EPF late filing: damages at 1% per month + 12% interest. ESI late payment: 12% interest + prosecution. TDS late deposit: 1.5% per month. BOCW cess non-payment: imprisonment up to 6 months. Contract labour default: principal employer becomes liable.</p>
<p>A single missed filing or miscalculated deduction can trigger penalties exceeding the cost of professional payroll management for the entire year.</p>
<p><strong>Action:</strong> <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20construction%20payroll.%20Please%20call%20me." target="_blank" rel="noopener">WhatsApp us</a> for a free consultation.</p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Construction Payroll Today</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Construction payroll is one of the most compliance-intensive domains in India. BOCW cess, EPF, ESI, contract labour, inter-state migrant laws, and the new Labour Codes create a substantial statutory burden.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">Patron Accounting brings 15+ years of construction payroll expertise - from daily-wage management to multi-site project allocation - delivering accurate, compliant payroll every month.</p>
<p style="color:rgba(255,255,255,0.85);font-size:15px;line-height:1.8;">100+ construction clients. 50,000+ monthly payslips. Zero penalty track record. From Rs 5,999/month.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20construction%20payroll%20services.%20Please%20call%20me." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Construction%20Payroll&body=Hello%2C%0A%0AI%20need%20payroll%20services%20for%20my%20construction%20company.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Construction Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Expert payroll processing with BOCW, EPF, ESI, and contract labour compliance for construction and real estate companies.</p>
 
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-construction-real-estate-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-construction-real-estate-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-construction-real-estate-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/payroll-services-for-construction-real-estate-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div>
<div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">Complete construction compliance</div><div class="pa-cross-grid"><a href="/construction-and-real-estate-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Construction Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a><a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Returns</div><div class="pa-card-sub">India</div></div></a><a href="/pf-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Returns</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 16 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">16 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 16 September 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months. Content aligned with BOCW Act 1996, EPF Act 1952, ESI Act 1948, and new Labour Codes 2025. Next review: September 2026.</p>
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
