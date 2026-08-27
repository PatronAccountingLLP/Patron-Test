
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
    <title>NGO & Non-Profit Payroll Services - FCRA & TDS Compliance</title>
    <meta name="description" content="Payroll for NGOs, trusts and Section 8 companies in India: EPF, ESI, TDS, FCRA, 12A compliance. From INR 149 per employee per month.">
    <link rel="canonical" href="/payroll-services-for-ngonon-profit-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="NGO & Non-Profit Payroll Services - FCRA & TDS Compliance">
    <meta property="og:description" content="Payroll for NGOs, trusts and Section 8 companies in India: EPF, ESI, TDS, FCRA, 12A compliance. From INR 149 per employee per month.">
    <meta property="og:url" content="/payroll-services-for-ngonon-profit-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="/images/payroll-services-for-ngonon-profit-industry-og.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NGO & Non-Profit Payroll Services - FCRA & TDS Compliance">
    <meta name="twitter:description" content="Payroll for NGOs, trusts and Section 8 companies in India: EPF, ESI, TDS, FCRA, 12A compliance. From INR 149 per employee per month.">
    <meta name="twitter:image" content="/images/payroll-services-for-ngonon-profit-industry-og.webp">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "NGO Payroll Services in India",
          "description": "Payroll for NGOs, trusts and Section 8 companies in India: EPF, ESI, TDS, FCRA, 12A compliance. From INR 149 per employee per month.",
          "url": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry",
          "serviceType": "NGO Payroll Services in India",
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
            "url": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry",
            "price": "149"
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
              "name": "NGO Payroll Services in India",
              "item": "https://www.patronaccounting.com/payroll-services-for-ngonon-profit-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Does 12A registration exempt an NGO from deducting TDS on salaries?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Section 12A exempts the NGO's own surplus income from income tax. It does not exempt from TDS on employee salaries under Section 192. NGOs must obtain TAN, deduct TDS at slab rate, deposit by 7th, file Form 24Q quarterly, and issue Form 16 by June 15. Non-compliance attracts 1.5%/month interest plus Rs 200/day Section 234E late fee."
              }
            },
            {
              "@type": "Question",
              "name": "Do NGOs need to contribute EPF and ESI for employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes if thresholds are met. EPF mandatory for all establishments including NGOs with 20+ employees at 12%+12% of basic+DA. ESI mandatory for 10+ employees, covering workers earning up to Rs 21,000/month. Under Social Security Code 2020 active from November 2025, project-based fixed-term staff are also covered."
              }
            },
            {
              "@type": "Question",
              "name": "How does FCRA compliance affect NGO payroll disbursement?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "All foreign contributions must enter through designated FCRA account at SBI New Delhi Main Branch. Salaries funded from foreign contributions must be disbursed only from FCRA utilisation account. Domestic salaries from regular NGO account. Mixing is an FCRA violation under Section 17 risking licence suspension."
              }
            },
            {
              "@type": "Question",
              "name": "Is stipend paid to NGO field workers taxable in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Depends on the relationship. If TDS deducted and Form 16 issued: taxable under Salaries. Educational stipends/scholarships under Section 10(16) with no service obligation may be exempt. Volunteer honoraria below basic exemption limit are not taxable. CA assessment required per category as CBDT scrutinises NGO payments."
              }
            },
            {
              "@type": "Question",
              "name": "What Labour Code 2025 changes affect NGO payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Basic pay must be at least 50% of CTC under Code on Wages 2019. Fixed-term project staff eligible for gratuity after 1 year under IR Code 2020. Digital payroll and attendance registers mandatory under OSH Code 2020. Final wages within 2 working days. All four codes active from November 2025."
              }
            },
            {
              "@type": "Question",
              "name": "What annual filings does an NGO with 12A and FCRA need?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ITR-7 by October 31 (CA audit required if income above Rs 2.5 lakh). Form 10BD donation statement by May 31. Form 16 by June 15. Form 24Q quarterly. FC-4 FCRA return by December 31. Annual EPF return by April 25. MCA filings for Section 8 companies. Professional Tax annual returns. Quick Answers Q: NGO ka payroll kaise manage kare? Section 192 ke under TDS katna mandatory hai - 12A exemption sirf NGO ki income ke liye hai, employees ke TDS se chhoot nahi milti. EPF, ESI, FCRA account segregation sab CA se karwao. Q: TDS on NGO employee salary? Mandatory under Section 192 Income Tax Act 2025. 12A registration does NOT exempt NGO from TDS obligations. Deposit by 7th monthly. Q: FCRA salary disbursement rule? Foreign-funded salaries: from FCRA utilisation account only. Domestic salaries: from regular NGO account. Mixing is FCRA violation under Section 17. Q: Is NGO stipend taxable? If TDS deducted and Form 16 issued: taxable under Salaries. Educational stipend under Section 10(16): exempt. CA assessment required per payment type."
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
                        NGO and Non-Profit Payroll Services in India
                    </h1>

                    <div class="expert-attribution-box">
                        <span class="eab-check"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></span>
                        <span class="eab-title">Reviewed by CA and CS Team, Patron Accounting LLP</span>
                        <span class="eab-meta">
                            <span>ICAI & ICSI Registered</span><span class="eab-sep">|</span>
                            <span>15+ Years Experience</span><span class="eab-sep">|</span>
                            <span>Last Updated: <span id="lastUpdated">12 March 2026</span></span>
                        </span>
                        <a href="/authorhub/ca-sundram-gupta" class="eab-link">Verify Credentials &rarr;</a>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>TDS and Statutory Compliance:</span> Section 192 TDS applies regardless of 12A status; EPF 12%+12% for 20+ employees; ESI 3.25%+0.75% for 10+ employees - all managed monthly</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>FCRA-Compliant Disbursement:</span> Foreign-funded salaries from FCRA utilisation account; domestic salaries from regular account; strict segregation and monthly CA reconciliation</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Labour Code 2025 Ready:</span> 50% basic wage rule, digital registers, gratuity after 1 year for project staff, final wages within 2 days - all implemented for NGOs</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>10,000+ Clients Served:</span> Starting from INR 149 per employee/month - charitable trusts, societies, Section 8 companies, FCRA NGOs, and INGOs across India</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">10,000+ organisations trust Patron Accounting including NGOs, trusts, societies, and Section 8 companies</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20for%20my%20NGO%20or%20non-profit.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - NGO Payroll',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-ngonon-profit-industry', 'label' => 'NGO Payroll', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services (Overview)', 'selected' => false, 'disabled' => false],
                            ['value' => 'registration-for-12a-80g-certificate', 'label' => '12A and 80G Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'fcra-registration', 'label' => 'FCRA Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'section8-company-registration', 'label' => 'Section 8 Company Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
                            ['value' => 'ngo-and-non-profit-accounting-services', 'label' => 'NGO Accounting', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were getting CBDT demand notices because our finance team believed 12A exempted us from TDS on salaries. Patron corrected this immediately, filed revised Form 24Q, and now manages all TDS deposits and Form 16 issuance seamlessly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AT</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amrita T.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Trustee, Education Trust, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our FCRA-registered NGO receives funding from 3 international donors. Patron set up separate payroll registers by fund source and ensures every salary disbursement routes through the correct account. Our FC-4 annual return is now audit-ready.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rajesh K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Director, Development NGO, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">The Labour Code 50% basic rule required restructuring salaries for all 85 staff members. Patron modelled the revised CTC, communicated changes to staff, and implemented everything in one payroll cycle. EPF liability increase was budgeted correctly.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha P.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Manager, Section 8 Company, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As an INGO India office, we needed grant-wise payroll cost allocation for 4 donor programmes. Patron delivers project-coded salary statements every month that our donors accept directly for utilisation reporting.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Mark J.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Country Director, INGO, Bengaluru</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get fully managed payroll for your NGO, trust, society, or Section 8 company.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">NGO vs Corporate Payroll</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">8-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">DIY vs Outsourced</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO and Non-Profit Payroll - FCRA, TDS, EPF, ESI, and Labour Code 2025 Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - NGO Payroll Services at a Glance</strong></p>
                    <p>NGOs must deduct TDS under Section 192 on employee salaries regardless of 12A registration status. EPF (12%+12%) is mandatory for 20+ employees, ESI (3.25%+0.75%) for 10+ employees. FCRA-registered NGOs must disburse foreign-funded salaries only from FCRA utilisation accounts. Labour Codes 2025 require 50% basic pay, digital registers, and gratuity after 1 year for project staff. Patron Accounting provides end-to-end NGO payroll from INR 149 per employee per month with 10,000+ clients served.</p>
                </div>
                <p>India's non-profit sector employs over a million salaried workers across charitable trusts, societies, Section 8 companies, FCRA-registered NGOs, and international development organisations. Behind their social missions lies a complex payroll compliance environment: TDS under Section 192 of the Income Tax Act 2025 (effective April 1, 2026), EPF and ESI statutory contributions, grant-segregated salary disbursement, stipend taxability assessments, and the FCRA account framework governing how foreign contributions can legally flow to employee costs.</p>
                <p>With all four Labour Codes active from November 2025, NGOs face the same 50% basic wage rule, digital record-keeping obligations, and enhanced gratuity liabilities as corporate employers. The Income Tax Act 2025, effective April 1, 2026, revises Form 24Q and Form 16 formats. Patron Accounting provides the specialist CA infrastructure to manage all of this - from FCRA-compliant payroll segregation to grant-wise cost allocation for donor reporting.</p>
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
                <h2 class="section-title">What is NGO and Non-Profit Payroll?</h2>
                <div class="content-text what-is-definition">
                    
                    <p>NGO and non-profit payroll is the end-to-end management of salary processing, statutory deductions, grant-segregated disbursement, FCRA-compliant fund usage, stipend taxability assessment, and all compliance filings for the employees of charitable organisations in India.</p><p>Non-profit payroll differs from corporate payroll in three critical ways. First, <strong>12A exemption does not cover employee TDS</strong> - NGOs must deduct TDS under Section 192 exactly as any private company. Second, <strong>fund source determines account</strong> - FCRA-funded salaries must use FCRA utilisation accounts; mixing is a violation under Section 17 FCRA 2010. Third, <strong>workforce is project-based</strong> - fixed-term contracts tied to grant cycles create recurring compliance events including gratuity after just 1 year under IR Code 2020.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for NGO Payroll:</strong></p>
                    <p><strong>12A/12AB Registration:</strong> Exempts NGO surplus income from tax; does NOT exempt from TDS on employee salaries under Section 192</p><p><strong>FCRA Utilisation Account:</strong> Salaries funded from foreign contributions must be disbursed only from this account; domestic salaries from regular NGO account</p><p><strong>Form FC-4:</strong> FCRA annual return filed with Ministry of Home Affairs by December 31 detailing all foreign contributions received and utilised</p><p><strong>Stipend Taxability:</strong> If TDS deducted and Form 16 issued: taxable under Salaries. Educational stipends under Section 10(16) may be exempt</p><p><strong>Form 10BD/10BE:</strong> Annual donation statement for 80G NGOs; enables donors to claim tax deduction</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <!-- NGO / Hands / Heart icon -->
                            <rect x="35" y="40" width="130" height="80" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Hands holding heart -->
                            <path d="M75 80C75 68 82 60 100 55C118 60 125 68 125 80" stroke="#14365F" stroke-width="2" fill="none"/>
                            <path d="M100 60C95 52 82 52 82 62C82 72 100 82 100 82C100 82 118 72 118 62C118 52 105 52 100 60Z" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.5"/>
                            <!-- People -->
                            <circle cx="60" cy="95" r="6" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <circle cx="100" cy="95" r="6" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <circle cx="140" cy="95" r="6" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <!-- FCRA label -->
                            <rect x="65" y="105" width="70" height="12" rx="3" fill="#E8F5E9" stroke="#25D366" stroke-width="0.8"/>
                            <text x="100" y="114" font-size="7" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">FCRA Compliant</text>
                            <!-- Green badge -->
                            <circle cx="158" cy="35" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M152 35l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- NGO tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">NGO Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Non-Profit Payroll</span>
                        <strong>FCRA + TDS + EPF/ESI</strong>
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
            <h2 class="section-title">Who Needs NGO and Non-Profit Payroll Services?</h2>
            <div class="content-text">
                
                <ul><li><strong>Charitable Trusts:</strong> Registered under Indian Trusts Act 1882 or state trust legislation with salaried staff</li><li><strong>Societies:</strong> Registered under Societies Registration Act 1860 or state equivalents with employees</li><li><strong>Section 8 Companies:</strong> Not-for-profit companies under Companies Act 2013 with full MCA compliance obligations</li><li><strong>FCRA-Registered NGOs:</strong> Receiving foreign contributions from bilateral donors, foundations, or INGOs - mandatory account segregation for payroll</li><li><strong>International NGOs (INGOs):</strong> India offices employing Indian nationals via EOR or direct employment</li><li><strong>CSR-Implementing Agencies:</strong> Receiving corporate CSR funds under Section 135 Companies Act - Form CSR-1 registered</li><li><strong>Government-Grant-Funded Nonprofits:</strong> Under central and state schemes (MGNREGS, NHM, Poshan, etc.)</li><li><strong>Religious and Educational Trusts:</strong> With paid administrative, teaching, or programme staff</li></ul><p><strong>Key thresholds:</strong> EPF: 20+ employees (EPFO). ESI: 10+ employees, up to Rs 21,000/month (ESIC). TAN: mandatory for any NGO paying salary. FCRA: mandatory for foreign contributions. NITI Aayog DARPAN: mandatory before FCRA or government grant applications.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO and Non-Profit Payroll Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Monthly Payroll Processing</td><td>Gross-to-net for all staff grades; separate registers for domestic and foreign-funded employees; payslips; bank files segregated by fund source</td></tr><tr><td>TDS Management (Income Tax Act 2025)</td><td>Section 192 TDS on all salaries including stipends; deposit by 7th; Form 24Q quarterly in revised IT Act 2025 formats; Form 16 by June 15</td></tr><tr><td>Stipend Taxability Assessment</td><td>Classification as salary, taxable stipend, or educational exempt under Section 10(16); correct TDS treatment per category</td></tr><tr><td>FCRA-Compliant Payroll Disbursement</td><td>Foreign-funded salaries from FCRA utilisation account only; domestic from regular account; monthly CA reconciliation; FC-4 annual return support</td></tr><tr><td>EPF, ESI, and Statutory Compliance</td><td>EPFO and ESIC registration, monthly ECR and challan, annual returns, UAN management, Professional Tax across applicable states</td></tr><tr><td>Grant-Wise Payroll Cost Allocation</td><td>Payroll cost allocated to donor grants, projects, and budget lines; audit-ready reports for FCRA return and CSR utilisation certificates</td></tr><tr><td>Labour Code 2025 Restructuring</td><td>50% basic rule CTC audit, fixed-term gratuity provisions, digital registers, final settlement within 2 working days</td></tr><tr><td>Annual Compliance and Filings</td><td>ITR-7 support, Form 10BD donation statement, Form 16, annual EPF/ESI returns, Payment of Bonus Act, Professional Tax annual</td></tr>

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
            <h2 class="section-title">NGO Payroll Process - 7 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From workforce classification to annual FCRA return, every step managed by our CA and CS team with non-profit sector expertise.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Employee and Consultant Classification</h3><p class="step-description">Classify each engagement: employee (Section 192 TDS, EPF/ESI), consultant (Section 194J at 10%), volunteer (honorarium below exemption), or intern-scholar (Section 10(16) educational). Issue appointment letters under IR Code 2020.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Staff classified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS provisions set</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 38l7 7 13-13" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Letters Issued</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">CTC Design with 50% Basic Rule and Fund Mapping</h3><p class="step-description">Design salary structures with basic at minimum 50% of CTC per Code on Wages 2019. Identify fund source for each post (domestic or foreign-funded). Map salary lines to donor grants and project budgets.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC compliant</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Fund sources mapped</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="24" x2="92" y2="24" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="28" y1="38" x2="82" y2="38" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="50" x2="72" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="62" x2="60" y2="62" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Grants Linked</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">TDS Computation and Regime Election</h3><p class="step-description">Collect tax regime declaration (old/new) from each employee. Compute projected annual income. Calculate TDS under Section 192 using Income Tax Act 2025 slab rates. Spread TDS equally across remaining months.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regime collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="6 6 0 0" fill="#14365F"/><text x="60" y="21" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">TDS READY</text><rect x="30" y="34" width="14" height="24" rx="2" fill="#F5A623"/><rect x="50" y="28" width="14" height="30" rx="2" fill="#25D366"/><rect x="70" y="38" width="14" height="20" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">Section 192 Ready</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Payroll Computation and Grant-Wise Allocation</h3><p class="step-description">Compute gross-to-net for each employee. Apply EPF 12%, ESI 0.75%, TDS, Professional Tax. Allocate total payroll cost to donor grants and project codes for reporting.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payroll computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Grant allocation done</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="12" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="24" height="12" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">EPF</text><rect x="58" y="22" width="24" height="12" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="70" y="31" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESI</text><rect x="28" y="42" width="54" height="12" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="1"/></svg></div><span class="illustration-label">Cost Reports Ready</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">FCRA-Segregated Salary Disbursement</h3><p class="step-description">Foreign-funded salaries disbursed from FCRA utilisation account by 7th. Domestic-funded salaries from regular NGO account. Disbursement records maintained for FC-4 annual return and CA audit.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FCRA account used</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Domestic separated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="16" fill="none" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 3"/><path d="M54 38l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Records Maintained</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Statutory Filings and Monthly MIS</h3><p class="step-description">TDS by 7th, EPF ECR by 15th, ESI by 15th. Form 24Q quarterly. Monthly MIS with grant-wise cost analysis. FCRA utilisation reconciliation for CA review.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All filings done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="12" width="70" height="48" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="36" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 36l4 4 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="70" width="50" height="12" rx="6" fill="#F5A623" opacity="0.8"/><text x="60" y="79" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">FILED</text></svg></div><span class="illustration-label">Month Closed</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Annual Compliance Calendar</h3><p class="step-description">FC-4 by December 31. Form 10BD by May 31. Form 16 by June 15. ITR-7 by October 31. Annual EPF return by April 25. MCA filings for Section 8 companies. Professional Tax annual returns.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> FC-4 filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ITR-7 submitted</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="14" height="36" rx="2" fill="#F5A623"/><rect x="50" y="16" width="14" height="42" rx="2" fill="#25D366"/><rect x="70" y="26" width="14" height="32" rx="2" fill="#14365F" opacity="0.4"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Year Compliant</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for NGO Payroll Onboarding</h2>
            <div class="content-text">
                
                <p>Provide the following to start your NGO payroll engagement:</p><ul><li><strong>Trust Deed / Society Certificate / Section 8 CoI</strong> - Entity registration documents</li><li><strong>12A and 80G Registration Certificates</strong> - Current validity status</li><li><strong>FCRA Registration Certificate</strong> - If receiving foreign contributions</li><li><strong>NITI Aayog DARPAN ID</strong> - Mandatory for FCRA and government grants</li><li><strong>PAN, TAN, and Bank Account Details</strong> - Regular account and FCRA utilisation account</li><li><strong>Employee Master Data</strong> - PAN, Aadhaar, UAN, bank details, designation, fund source</li><li><strong>Salary Structures</strong> - CTC breakdowns for each staff grade</li><li><strong>EPFO and ESIC Registration</strong> - Establishment codes (or we register)</li><li><strong>Grant Agreements</strong> - For fund-source mapping and payroll cost allocation</li><li><strong>Previous Payroll Records</strong> - Last 3 months if switching providers</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Payroll Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>12A Exemption Misunderstanding</td><td>NGO founders believe 12A exempts from TDS on salaries; CBDT sends demand notices with 1.5%/month interest</td><td>Section 192 TDS implemented from first cycle; TAN registration, monthly deposit, Form 24Q, Form 16 in IT Act 2025 format</td></tr><tr><td>FCRA Account Segregation Violations</td><td>Foreign-funded salaries disbursed from domestic account or vice versa; FCRA licence suspension risk</td><td>Separate payroll registers by fund source; monthly CA reconciliation; disbursements marked with source account</td></tr><tr><td>Stipend Misclassification</td><td>Field workers classified as volunteers; under-deduction of TDS and missing EPF coverage</td><td>Each engagement classified by CA; correct TDS provisions; classification rationale documented for inspections</td></tr><tr><td>Gratuity for Project Staff</td><td>Fixed-term employees eligible after 1 year under IR Code 2020; most NGO finance teams unaware</td><td>Active fixed-term contracts reviewed; employees crossing 1-year flagged; gratuity provisions computed monthly</td></tr><tr><td>50% Basic Pay Restructuring</td><td>Low basic historically to minimise EPF; Code on Wages 2019 now mandates 50%; retrospective EPFO demands risk</td><td>CTC audit, revised structures modelled, employee communication prepared, restructuring implemented in payroll</td></tr><tr><td>Form 10BD Not Filed</td><td>Donors lose 80G deduction; damage to donor relations and future funding</td><td>Annual Form 10BD filed by May 31; Form 10BE certificates issued to each donor with PAN details</td></tr>

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
            <h2 class="section-title">NGO Payroll Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Starter (Up to 25 employees - payroll, TDS, EPF/ESI, basic FCRA)</td><td>Rs 2,999/month</td></tr><tr><td>Growth (26-100 - Starter + stipend, grant-wise allocation, FCRA segregation, PT)</td><td>Rs 6,999/month</td></tr><tr><td>Programme (101-500 - Growth + FC-4 support, CSR certificate, Labour Code, portal)</td><td>Rs 14,999/month</td></tr><tr><td>Enterprise (500+ or multi-office INGO)</td><td>Custom pricing</td></tr><tr><td>FCRA Segregation Register Add-on (for Starter plan)</td><td>Rs 1,500/month</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free NGO Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20payroll%20with%20FCRA%20and%20TDS%20compliance.%20Please%20share%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Payroll Compliance Deadlines 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Deposit (Section 192 IT Act 2025)</td><td>7th of following month</td></tr><tr><td>Salary Disbursement (Code on Wages 2019)</td><td>7th of following month</td></tr><tr><td>EPF and ESI Contribution Deposit</td><td>15th of following month</td></tr><tr><td>Final Wages on Exit (Code on Wages 2019)</td><td>Within 2 working days</td></tr><tr><td>Form 24Q Quarterly TDS Return</td><td>31 Jul, 31 Oct, 31 Jan, 31 May</td></tr><tr><td>Form 10BD Annual Donation Statement (80G NGOs)</td><td>31 May</td></tr><tr><td>Form 16 to All Employees (IT Act 2025)</td><td>15 June</td></tr><tr><td>ITR-7 for 12A Registered NGOs</td><td>31 October (with CA audit)</td></tr><tr><td>FCRA Annual Return FC-4 to MHA</td><td>31 December</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> TDS default attracts 1.5%/month interest plus Rs 200/day under Section 234E. EPF default: 12% annual interest plus damages up to 25%. FCRA violations: licence suspension or cancellation, account freezing. Code on Wages late salary: Rs 50,000 first offence, Rs 1,00,000 repeat. Missing Form 10BD: donors lose 80G deduction eligibility.</p>

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
            <h2 class="section-title">Benefits of Outsourcing NGO Payroll</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>TDS Compliance from Day 1</h3><p>Section 192 TDS implemented correctly; no CBDT demand notices; 1.5%/month interest charges eliminated</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div><h3>FCRA Licence Protected</h3><p>Foreign and domestic salary disbursements correctly routed; monthly CA reconciliation; no FCRA Section 17 violations</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></div><h3>Grant-Wise Donor Reporting</h3><p>Payroll cost allocated to each active grant; CA-certified reports for FCRA FC-4 and CSR utilisation certificates</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3>Labour Code 2025 Compliant</h3><p>50% basic implemented; fixed-term gratuity provisions updated; digital registers in place; exit settlements within 2 days</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Programme Staff Freed for Mission</h3><p>NGO coordinators and finance staff relieved from payroll admin; CA team handles all statutory queries and inspections</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Multi-Regulator Audit Confidence</h3><p>EPFO, ESIC, CBDT, and MHA FCRA inspections supported with audit-ready documentation; CA represents NGO in proceedings</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">10,000+ Organisations Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>Patron Accounting serves 10,000+ businesses and organisations including charitable trusts, societies, Section 8 companies, and FCRA-registered NGOs. Our CA and CS team brings <strong>15+ years</strong> of payroll, statutory compliance, and non-profit sector expertise with <strong>4.9 Google rating</strong> from 500+ verified reviews.</p><p>Offices in Gurugram, Mumbai, Pune, and Bengaluru. ISO Certified. 50,000+ payroll documents filed annually across all clients.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY vs Outsourced NGO Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Factor</th><th>In-House / DIY</th><th>Patron Accounting</th></tr></thead>
                    <tbody>
                        <tr><td>TDS on Salaries</td><td>Often not deducted (12A misunderstanding); CBDT notices</td><td>Section 192 TDS correctly from Day 1; zero risk</td></tr><tr><td>FCRA Account Segregation</td><td>Mixing common; licence at risk</td><td>Strict separation; monthly CA reconciliation</td></tr><tr><td>Stipend Classification</td><td>Often lumped as salary or ignored</td><td>Each payment classified; TDS applied correctly</td></tr><tr><td>Labour Code 2025</td><td>50% rule, digital registers, gratuity often missed</td><td>Fully implemented from Day 1</td></tr><tr><td>Grant-Wise Allocation</td><td>Manual spreadsheets; donor delays; audit gaps</td><td>Automated project-code allocation; CA-certified</td></tr><tr><td>Cost</td><td>Finance staff Rs 3-6 lakh/year + errors + IT notices</td><td>From Rs 2,999/month all-inclusive</td></tr><tr><td>Compliance Risk</td><td>High - FCRA, CBDT, EPFO, ESIC simultaneously</td><td>Near-zero - CA-supervised multi-regulator calendar</td></tr>

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
            <h2 class="section-title">Related Services for NGOs and Non-Profits</h2>
            <div class="content-text">
                
                <p>Complement your NGO payroll with these services:</p><ul><li><a href="#">12A and 80G Registration</a> - Mandatory for NGO income tax exemption and donor deduction eligibility</li><li><a href="/fcra-registration">FCRA Registration</a> - Mandatory to receive foreign contributions; registration, renewal, and FC-4 filing</li><li><a href="/section8-company-registration">Section 8 Company Registration</a> - Not-for-profit company incorporation under Companies Act 2013</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Form 24Q quarterly for salary TDS; Form 26Q for consultant TDS</li><li><a href="/income-tax-return">Income Tax Return</a> - ITR-7 for 12A-registered NGOs with CA audit support</li><li><a href="/ngo-and-non-profit-accounting-services">NGO Accounting</a> - Full accounting, FCRA-separated books, and CA audit certification</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for NGO Payroll in India</h2>
            <div class="content-text">
                
                <p>Key statutory provisions for non-profit payroll:</p><ul><li><strong>Income Tax Act 2025, Section 192:</strong> TDS on salary mandatory for all NGOs regardless of 12A status. Section 12A/12AB exempts only NGO surplus income, not employee TDS. <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax Portal</a></li><li><strong>FCRA Amendment Act 2020:</strong> Designated FCRA account at SBI NDMB mandatory. Utilisation accounts for salary disbursement. No sub-granting. FC-4 by December 31. <a href="https://fcraonline.nic.in" target="_blank" rel="noopener">FCRA Online Portal</a></li><li><strong>Social Security Code 2020:</strong> EPF 12%+12% for 20+ employees; ESI 3.25%+0.75% for 10+ employees; fixed-term project staff covered. <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO Portal</a></li><li><strong>Code on Wages 2019 (Nov 2025):</strong> Basic at minimum 50% of CTC; salary by 7th; final wages within 2 working days of exit</li><li><strong>Industrial Relations Code 2020:</strong> Fixed-term project staff eligible for gratuity after 1 year; appointment letters mandatory; digital registers</li><li><strong>OSH Code 2020 (Nov 2025):</strong> Digital wage registers, attendance records, payslips mandatory for all NGO establishments; paper registers not accepted</li></ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - NGO and Non-Profit Payroll</h2>
                    <p class="faq-expanded__lead">Answers to common questions about TDS, EPF, ESI, FCRA compliance, stipend taxability, and Labour Code 2025 for NGOs in India.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'NGO and Non-Profit Payroll'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Does 12A registration exempt an NGO from deducting TDS on salaries?</h3>
                        <div class="faq-expanded__a"><p>No. Section 12A exempts the NGO's own surplus income from income tax. It does not exempt from TDS on employee salaries under Section 192. NGOs must obtain TAN, deduct TDS at slab rate, deposit by 7th, file Form 24Q quarterly, and issue Form 16 by June 15. Non-compliance attracts 1.5%/month interest plus Rs 200/day Section 234E late fee.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">Do NGOs need to contribute EPF and ESI for employees?</h3>
                        <div class="faq-expanded__a"><p>Yes if thresholds are met. EPF mandatory for all establishments including NGOs with 20+ employees at 12%+12% of basic+DA. ESI mandatory for 10+ employees, covering workers earning up to Rs 21,000/month. Under Social Security Code 2020 active from November 2025, project-based fixed-term staff are also covered.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How does FCRA compliance affect NGO payroll disbursement?</h3>
                        <div class="faq-expanded__a"><p>All foreign contributions must enter through designated FCRA account at SBI New Delhi Main Branch. Salaries funded from foreign contributions must be disbursed only from FCRA utilisation account. Domestic salaries from regular NGO account. Mixing is an FCRA violation under Section 17 risking licence suspension.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Is stipend paid to NGO field workers taxable in India?</h3>
                        <div class="faq-expanded__a"><p>Depends on the relationship. If TDS deducted and Form 16 issued: taxable under Salaries. Educational stipends/scholarships under Section 10(16) with no service obligation may be exempt. Volunteer honoraria below basic exemption limit are not taxable. CA assessment required per category as CBDT scrutinises NGO payments.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">What Labour Code 2025 changes affect NGO payroll?</h3>
                        <div class="faq-expanded__a"><p>Basic pay must be at least 50% of CTC under Code on Wages 2019. Fixed-term project staff eligible for gratuity after 1 year under IR Code 2020. Digital payroll and attendance registers mandatory under OSH Code 2020. Final wages within 2 working days. All four codes active from November 2025.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">What annual filings does an NGO with 12A and FCRA need?</h3>
                        <div class="faq-expanded__a"><p>ITR-7 by October 31 (CA audit required if income above Rs 2.5 lakh). Form 10BD donation statement by May 31. Form 16 by June 15. Form 24Q quarterly. FC-4 FCRA return by December 31. Annual EPF return by April 25. MCA filings for Section 8 companies. Professional Tax annual returns.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: NGO ka payroll kaise manage kare?</strong> Section 192 ke under TDS katna mandatory hai - 12A exemption sirf NGO ki income ke liye hai, employees ke TDS se chhoot nahi milti. EPF, ESI, FCRA account segregation sab CA se karwao.</p><p><strong>Q: TDS on NGO employee salary?</strong> Mandatory under Section 192 Income Tax Act 2025. 12A registration does NOT exempt NGO from TDS obligations. Deposit by 7th monthly.</p><p><strong>Q: FCRA salary disbursement rule?</strong> Foreign-funded salaries: from FCRA utilisation account only. Domestic salaries: from regular NGO account. Mixing is FCRA violation under Section 17.</p><p><strong>Q: Is NGO stipend taxable?</strong> If TDS deducted and Form 16 issued: taxable under Salaries. Educational stipend under Section 10(16): exempt. CA assessment required per payment type.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">NGO Payroll Non-Compliance Triggers Multi-Regulator Penalties</h2>
            <div class="content-text">
                
                <p>TDS default attracts 1.5%/month interest from CBDT. EPF default triggers 12% annual interest plus damages up to 25%. FCRA account mixing risks licence suspension and account freezing. Code on Wages late salary payment attracts Rs 50,000 fine. Missing Form 10BD means your donors lose their 80G deduction eligibility - damaging your most critical funding relationships.</p><p><strong>Call +91 945 945 6700 or WhatsApp us for a free NGO payroll compliance assessment. We will review your entity registrations, fund sources, and payroll structure within 1 week.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your NGO Payroll with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">NGO payroll sits at the intersection of income tax, labour law, FCRA, and donor-reporting requirements. With the Income Tax Act 2025 effective from April 1, 2026, Labour Codes active since November 2025, and FCRA compliance scrutiny intensifying, the payroll environment for non-profits has never been more complex.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting provides the specialist CA infrastructure to manage every compliance layer - from FCRA-segregated disbursement to grant-wise cost allocation. Starting from INR 149 per employee per month, we deliver complete non-profit payroll so your team can focus on impact.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20NGO%20payroll%20with%20FCRA%20and%20TDS%20compliance.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20NGO%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20payroll%20services%20for%20my%20NGO%20or%20non-profit.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">NGO Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Managed payroll for charitable trusts, societies, and FCRA NGOs in major Indian cities.</p>
           
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-ngonon-profit-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-ngonon-profit-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-ngonon-profit-industry/delhi" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Delhi</div><div class="pa-card-sub">NCR</div></div></a><a href="/payroll-services-for-ngonon-profit-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for NGO Payroll</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="#" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">12A and 80G Registration</div><div class="pa-card-sub">India</div></div></a><a href="/fcra-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">FCRA Registration</div><div class="pa-card-sub">India</div></div></a><a href="/section8-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Section 8 Company Registration</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/ngo-and-non-profit-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">NGO Accounting</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 October 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 6 months due to HIGH regulatory update frequency. FCRA rules, 12A/80G renewals, Income Tax Act 2025, and Labour Code provisions verified on each review cycle. Next review: October 2026.</p>
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

<!-- ============================================
     CONSULTATION FORM — Country Dropdown + Validation + Bigin Integration
     ============================================ -->
<script>
// Country Data (46 countries)
var countries = [
    { name: "India", code: "+91", flag: "\u{1F1EE}\u{1F1F3}", iso: "IN" },
    { name: "United States", code: "+1", flag: "\u{1F1FA}\u{1F1F8}", iso: "US" },
    { name: "United Kingdom", code: "+44", flag: "\u{1F1EC}\u{1F1E7}", iso: "GB" },
    { name: "United Arab Emirates", code: "+971", flag: "\u{1F1E6}\u{1F1EA}", iso: "AE" },
    { name: "Saudi Arabia", code: "+966", flag: "\u{1F1F8}\u{1F1E6}", iso: "SA" },
    { name: "Singapore", code: "+65", flag: "\u{1F1F8}\u{1F1EC}", iso: "SG" },
    { name: "Australia", code: "+61", flag: "\u{1F1E6}\u{1F1FA}", iso: "AU" },
    { name: "Canada", code: "+1", flag: "\u{1F1E8}\u{1F1E6}", iso: "CA" },
    { name: "Germany", code: "+49", flag: "\u{1F1E9}\u{1F1EA}", iso: "DE" },
    { name: "France", code: "+33", flag: "\u{1F1EB}\u{1F1F7}", iso: "FR" },
    { name: "Japan", code: "+81", flag: "\u{1F1EF}\u{1F1F5}", iso: "JP" },
    { name: "China", code: "+86", flag: "\u{1F1E8}\u{1F1F3}", iso: "CN" },
    { name: "South Korea", code: "+82", flag: "\u{1F1F0}\u{1F1F7}", iso: "KR" },
    { name: "Brazil", code: "+55", flag: "\u{1F1E7}\u{1F1F7}", iso: "BR" },
    { name: "South Africa", code: "+27", flag: "\u{1F1FF}\u{1F1E6}", iso: "ZA" },
    { name: "Nigeria", code: "+234", flag: "\u{1F1F3}\u{1F1EC}", iso: "NG" },
    { name: "Kenya", code: "+254", flag: "\u{1F1F0}\u{1F1EA}", iso: "KE" },
    { name: "Malaysia", code: "+60", flag: "\u{1F1F2}\u{1F1FE}", iso: "MY" },
    { name: "Indonesia", code: "+62", flag: "\u{1F1EE}\u{1F1E9}", iso: "ID" },
    { name: "Thailand", code: "+66", flag: "\u{1F1F9}\u{1F1ED}", iso: "TH" },
    { name: "Vietnam", code: "+84", flag: "\u{1F1FB}\u{1F1F3}", iso: "VN" },
    { name: "Philippines", code: "+63", flag: "\u{1F1F5}\u{1F1ED}", iso: "PH" },
    { name: "Bangladesh", code: "+880", flag: "\u{1F1E7}\u{1F1E9}", iso: "BD" },
    { name: "Pakistan", code: "+92", flag: "\u{1F1F5}\u{1F1F0}", iso: "PK" },
    { name: "Sri Lanka", code: "+94", flag: "\u{1F1F1}\u{1F1F0}", iso: "LK" },
    { name: "Nepal", code: "+977", flag: "\u{1F1F3}\u{1F1F5}", iso: "NP" },
    { name: "Qatar", code: "+974", flag: "\u{1F1F6}\u{1F1E6}", iso: "QA" },
    { name: "Kuwait", code: "+965", flag: "\u{1F1F0}\u{1F1FC}", iso: "KW" },
    { name: "Bahrain", code: "+973", flag: "\u{1F1E7}\u{1F1ED}", iso: "BH" },
    { name: "Oman", code: "+968", flag: "\u{1F1F4}\u{1F1F2}", iso: "OM" },
    { name: "New Zealand", code: "+64", flag: "\u{1F1F3}\u{1F1FF}", iso: "NZ" },
    { name: "Ireland", code: "+353", flag: "\u{1F1EE}\u{1F1EA}", iso: "IE" },
    { name: "Netherlands", code: "+31", flag: "\u{1F1F3}\u{1F1F1}", iso: "NL" },
    { name: "Italy", code: "+39", flag: "\u{1F1EE}\u{1F1F9}", iso: "IT" },
    { name: "Spain", code: "+34", flag: "\u{1F1EA}\u{1F1F8}", iso: "ES" },
    { name: "Switzerland", code: "+41", flag: "\u{1F1E8}\u{1F1ED}", iso: "CH" },
    { name: "Sweden", code: "+46", flag: "\u{1F1F8}\u{1F1EA}", iso: "SE" },
    { name: "Russia", code: "+7", flag: "\u{1F1F7}\u{1F1FA}", iso: "RU" },
    { name: "Mexico", code: "+52", flag: "\u{1F1F2}\u{1F1FD}", iso: "MX" },
    { name: "Egypt", code: "+20", flag: "\u{1F1EA}\u{1F1EC}", iso: "EG" },
    { name: "Turkey", code: "+90", flag: "\u{1F1F9}\u{1F1F7}", iso: "TR" },
    { name: "Israel", code: "+972", flag: "\u{1F1EE}\u{1F1F1}", iso: "IL" },
    { name: "Hong Kong", code: "+852", flag: "\u{1F1ED}\u{1F1F0}", iso: "HK" },
    { name: "Taiwan", code: "+886", flag: "\u{1F1F9}\u{1F1FC}", iso: "TW" },
    { name: "Myanmar", code: "+95", flag: "\u{1F1F2}\u{1F1F2}", iso: "MM" },
    { name: "Afghanistan", code: "+93", flag: "\u{1F1E6}\u{1F1EB}", iso: "AF" }
];

var selectedCountry = countries[0]; // Default: India

function populateCountries(filter) {
    filter = filter || '';
    var container = document.getElementById('countryOptions');
    if (!container) return;
    container.innerHTML = '';
    var filtered = filter
        ? countries.filter(function(c) { return c.name.toLowerCase().indexOf(filter.toLowerCase()) !== -1 || c.code.indexOf(filter) !== -1; })
        : countries;
    filtered.forEach(function(country) {
        var option = document.createElement('div');
        option.className = 'country-option' + (country.iso === selectedCountry.iso ? ' active' : '');
        option.innerHTML = '<span class="flag-emoji">' + country.flag + '</span><span class="country-name">' + country.name + '</span><span class="dial-code">' + country.code + '</span>';
        option.onclick = function(e) { e.stopPropagation(); selectCountry(country); };
        container.appendChild(option);
    });
}

function selectCountry(country) {
    selectedCountry = country;
    document.getElementById('selectedFlag').textContent = country.flag;
    document.getElementById('selectedCode').textContent = country.code;
    document.getElementById('countryCodeDropdown').classList.remove('open');
    document.getElementById('countrySearchInput').value = '';
    populateCountries();
    document.getElementById('phoneNumberInput').focus();
}

function toggleCountryDropdown(event) {
    event.stopPropagation();
    var dropdown = document.getElementById('countryCodeDropdown');
    var isOpen = dropdown.classList.contains('open');
    if (isOpen) {
        dropdown.classList.remove('open');
    } else {
        dropdown.classList.add('open');
        document.getElementById('countrySearchInput').value = '';
        populateCountries();
        setTimeout(function() { document.getElementById('countrySearchInput').focus(); }, 50);
    }
}

function filterCountries(value) { populateCountries(value); }

// Close dropdown on outside click
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('countryCodeDropdown');
    if (dropdown && !dropdown.contains(e.target)) { dropdown.classList.remove('open'); }
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') { document.getElementById('countryCodeDropdown').classList.remove('open'); }
});

// Form Validation
function clearFieldError(fieldObj) {
    fieldObj.classList.remove('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent) { var errMsg = parent.querySelector('.field-error-msg'); if (errMsg) errMsg.remove(); }
}

function setFieldError(fieldObj, message) {
    fieldObj.classList.add('input-error');
    var parent = fieldObj.closest('.form-group');
    if (parent && !parent.querySelector('.field-error-msg')) {
        var errDiv = document.createElement('div');
        errDiv.className = 'field-error-msg';
        errDiv.textContent = message;
        parent.appendChild(errDiv);
    }
}

// ── Phone Validation ──────────────────────────────────────────
function validatePhone(val, dialCode) {
    val = val.replace(/[\s\-().]/g, '');
    if (!val) {
        return { valid: false, message: 'Phone number is required' };
    }
    if (dialCode === '+91') {
        if (!/^[6-9][0-9]{9}$/.test(val)) {
            if (val.length !== 10) {
                return { valid: false, message: 'Enter a valid 10-digit Indian mobile number' };
            }
            return { valid: false, message: 'Indian mobile numbers must start with 6, 7, 8, or 9' };
        }
        return { valid: true };
    }
    if (!/^[0-9]{7,15}$/.test(val)) {
        return { valid: false, message: 'Enter a valid phone number (7–15 digits)' };
    }
    return { valid: true };
}

function validatePhoneOnBlur(input) {
    var val = input.value.trim();
    var dialCode = (selectedCountry && selectedCountry.code) ? selectedCountry.code : '+91';
    var result = validatePhone(val, dialCode);
    var errorEl = document.getElementById('phoneError');
    var groupEl = document.getElementById('phoneGroup');
    if (val === '') return;
    if (!result.valid) {
        groupEl.classList.add('input-error');
        errorEl.textContent = result.message;
        errorEl.style.display = 'block';
    } else {
        groupEl.classList.remove('input-error');
        errorEl.style.display = 'none';
    }
}
// ─────────────────────────────────────────────────────────────

function validateConsultationForm() {
    var isValid = true;

    var nameField = document.getElementById('consultFullName');
    if (!nameField.value.trim()) { setFieldError(nameField, 'Full name is required'); isValid = false; }

    var phoneInput = document.getElementById('phoneNumberInput');
    var phoneVal = phoneInput.value.trim();
    var phoneResult = validatePhone(phoneInput.value.trim(), selectedCountry ? selectedCountry.code : '+91');
    if (!phoneResult.valid) {
        setFieldError(phoneInput, phoneResult.message);
        document.getElementById('phoneGroup').classList.add('input-error');
        document.getElementById('phoneError').textContent = phoneResult.message;
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    } else {
        document.getElementById('phoneGroup').classList.remove('input-error');
        document.getElementById('phoneError').style.display = 'none';
    }

    var cityField = document.getElementById('consultCity');
    if (!cityField.value.trim()) { setFieldError(cityField, 'City is required'); isValid = false; }

    var serviceField = document.getElementById('consultService');
    if (!serviceField.value) { setFieldError(serviceField, 'Please select a service'); isValid = false; }

    if (isValid) {
        document.getElementById('combinedMobileField').value = selectedCountry.code + phoneVal.replace(/[\s\-().]/g, '');
        var serviceName = serviceField.options[serviceField.selectedIndex].text;
        document.getElementById('dealNameField').value = 'Website Enquiry - ' + serviceName;
        document.getElementById('pageSourceField').value = window.location.href;
        var btn = document.getElementById('formSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';
        setTimeout(function() { btn.disabled = false; btn.innerHTML = 'Get Free Quote \u2192'; }, 6000);
    }
    return isValid;
}

// Success state handler (Bigin iframe load)
window.addEventListener('DOMContentLoaded', function() {
    populateCountries();
    // Auto-embed page URL in form
    var pageSourceField = document.getElementById('pageSourceField');
    if (pageSourceField) { pageSourceField.value = window.location.href; }
    var iframe = document.getElementById('hidden208810000001209168Frame');
    if (iframe) {
        iframe.addEventListener('load', function() {
            try {
                var iframeDoc = this.contentWindow.document;
                if (iframeDoc.body && iframeDoc.body.childElementCount !== 0) { showSuccessState(); }
            } catch (error) { showSuccessState(); }
        });
    }
});

function showSuccessState() {
    var formCard = document.getElementById('consultationFormCard');
    if (formCard) {
        formCard.innerHTML =
            '<div class="form-success">' +
                '<div class="form-success-icon">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="32" height="32"><path d="M5 13l4 4L19 7"/></svg>' +
                '</div>' +
                '<h3>Thank You!</h3>' +
                '<p>Our CA/CS expert will contact you shortly.<br>Check your phone for a call from Patron Accounting.</p>' +
            '</div>';
    }
}
</script>

<script>
// Bigin Mandatory Fields Validation (from Bigin source code)
var mndFields208810000001209168 = new Array('Potential\x20Name','Contacts.Last\x20Name','Contacts.Mobile','Contacts.Mailing\x20City','Contacts.Description');
var fldLangVal208810000001209168 = new Array('Website Enquiry Form','Full Name','Mobile','City','Service Needed');

function checkMandatory208810000001209168() {
    var isReturn = true;
    for(var i = 0; i < mndFields208810000001209168.length; i++) {
        var fieldObj = document.forms['BiginWebToRecordForm208810000001209168'][mndFields208810000001209168[i]];
        if(fieldObj) {
            if(((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                isReturn = false;
            }
        }
    }
    if(isReturn) {
        document.getElementById('formSubmitBtn').disabled = true;
    }
    return isReturn;
}

// Bigin iframe success handler (overrides our custom one above via event delegation)
document.getElementById('hidden208810000001209168Frame').addEventListener('load', function () {
    try {
        var doc = arguments[0].currentTarget.contentWindow.document;
        if(doc.body && doc.body.childElementCount !== 0) {
            showSuccessState();
        }
    } catch (error) {
        showSuccessState();
    }
});
</script>

<!-- Bigin WebForm Script (handles form POST to Bigin servers) -->
<script id='wf_script' src='https://bigin.zoho.in/crm/WebformScriptServlet?rid=2427034fc9b227c6338366d9b8b215a5d00314702d3b6d6eb99eb3530677412d6e830f907e98e80d864e000cb2562843gide400f91af978409c278261bdb7657f2282138d1ec4587de30428ddc1db6fac79'></script>

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
