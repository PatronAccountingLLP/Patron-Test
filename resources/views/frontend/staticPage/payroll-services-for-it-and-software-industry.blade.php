
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
    <title>IT & Software Payroll Services - CTC, TDS & Reimbursement</title>
    <meta name="description" content="Payroll for IT and software companies in India - ESOP TDS, stock options, remote work, PF, TDS, and statutory compliance. From INR 149 per employee.">
    <link rel="canonical" href="/payroll-services-for-it-and-software-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="IT & Software Payroll Services - CTC, TDS & Reimbursement">
    <meta property="og:description" content="Payroll for IT and software companies in India - ESOP TDS, stock options, remote work, PF, TDS, and statutory compliance. From INR 149 per employee.">
    <meta property="og:url" content="/payroll-services-for-it-and-software-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IT & Software Payroll Services - CTC, TDS & Reimbursement">
    <meta name="twitter:description" content="Payroll for IT and software companies in India - ESOP TDS, stock options, remote work, PF, TDS, and statutory compliance. From INR 149 per employee.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll for IT Software Companies",
          "description": "Payroll for IT and software companies in India - ESOP TDS, stock options, remote work, PF, TDS, and statutory compliance. From INR 149 per employee.",
          "url": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry",
          "serviceType": "Payroll for IT Software Companies",
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
            "url": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry",
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
              "name": "Payroll for IT Software Companies",
              "item": "https://www.patronaccounting.com/payroll-services-for-it-and-software-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How is ESOP perquisite TDS calculated by an IT employer?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Perquisite = (FMV on exercise date - exercise price) x shares exercised. For listed shares, FMV is average opening/closing price. For unlisted, Category I Merchant Banker valuation required. TDS under Section 192 at slab rate, deposited by 7th. Form 12BA mandatory when non-cash perquisite exceeds Rs 1,50,000/year. Included in Form 24Q Q4."
              }
            },
            {
              "@type": "Question",
              "name": "What is the startup ESOP TDS deferral under Section 192(1C)?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DPIIT-recognised startups with IMB certificate under Section 80-IAC and employee salary below Rs 25 lakh can defer ESOP perquisite TDS. Deferred to earliest of: 48 months from allotment, share sale date, or cessation of employment. Deferred TDS deposited in the year the trigger event occurs."
              }
            },
            {
              "@type": "Question",
              "name": "Should IT employees choose old or new tax regime?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Old regime is better for employees with high HRA claims, Section 80C investments, home loan interest (Section 24(b) up to Rs 2 lakh), or health insurance premiums (Section 80D). New regime (default from FY 2023-24) with Rs 75,000 standard deduction suits junior employees with fewer deductions. Patron Accounting performs annual per-employee comparison."
              }
            },
            {
              "@type": "Question",
              "name": "Are internet reimbursements taxable for WFH IT employees?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Bill-based reimbursement for internet and phone used for official business is 100% tax-exempt under Rule 3(7)(ix) with no upper limit. Fixed monthly WFH allowance without bills is fully taxable. Converting fixed to bill-based saves Rs 600-1,500/month per employee at no extra cost to employer."
              }
            },
            {
              "@type": "Question",
              "name": "Is PF mandatory for IT companies in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Any IT company with 20+ employees is covered under EPF Act 1952. Employee and employer each contribute 12% of basic+DA. Companies can cap at Rs 15,000 basic (Rs 1,800/month) or contribute on full salary per policy. Code on Wages 2019 requires basic at minimum 50% of CTC."
              }
            },
            {
              "@type": "Question",
              "name": "How should IT companies handle moonlighting in payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Under Section 192(2), employees with multiple employers may disclose total salary to primary employer, who then deducts TDS on aggregate income. Include Section 192(2) disclosure form in annual HR declarations. Non-disclosure by employee does not create employer liability but formal process reduces risk."
              }
            },
            {
              "@type": "Question",
              "name": "What is angel tax abolition and how does it affect IT startup payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Section 56(2)(viib) abolished from FY 2025-26 per Budget 2024. Does not directly affect payroll but removes friction on share issuances at high valuations, making ESOP grants more flexible for IT startups without triggering angel tax at company level. Quick Answers Q: IT company ka payroll kaise manage karein? ESOP TDS, CTC structure (Basic 50%+ per Code on Wages), old/new regime advisory, PF/ESI, aur multi-state PT - sab CA team se professionally manage karwana chahiye. Q: Software employee ka ESOP TDS kaise katega? Exercise date pe FMV minus exercise price per share perquisite hai. Section 192 ke under slab rate pe TDS katega. Form 12BA bhi issue hoga agar Rs 1,50,000+ non-cash perquisite hai. Q: WFH allowance taxable hai? Fixed allowance fully taxable hai. But actual bill-based internet reimbursement Rule 3(7)(ix) ke under 100% tax-free hai - no limit. Bill lagao, tax bachao. Q: Angel tax abolished kya matlab hai ESOP ke liye? Section 56(2)(viib) FY 2025-26 se hata diya gaya. Ab startups high valuation pe shares issue kar sakte hain bina angel tax ke - ESOP pool allocation easier ho gaya."
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
                        Payroll Services for IT and Software Companies in India
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>ESOP Perquisite TDS:</span> Section 17(2)(vi) FMV calculation, perquisite valuation, TDS under Section 192, Form 12BA and Form 16 for stock option exercises</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>CTC and Regime Advisory:</span> Tax-efficient salary design with old vs new regime comparison, HRA, internet reimbursement, and Section 80C planning per employee</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Remote Work Compliance:</span> Bill-based WFH reimbursement (100% tax-exempt under Rule 3(7)(ix)), multi-state PT, and hybrid workforce payroll</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>150+ Tech Clients:</span> Starting from INR 149 per employee - startups, SaaS, IT services, product companies, and GCCs across India</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">150+ technology companies trust Patron Accounting for ESOP TDS, CTC structuring, and statutory payroll compliance</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20for%20my%20IT%20or%20software%20company.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - IT Payroll',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-services-for-it-and-software-industry', 'label' => 'IT Payroll', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services (Overview)', 'selected' => false, 'disabled' => false],
                            ['value' => 'esop-management-and-compliance-services', 'label' => 'ESOP Management', 'selected' => false, 'disabled' => false],
                            ['value' => 'it-sector-accounting-services', 'label' => 'IT Sector Accounting', 'selected' => false, 'disabled' => false],
                            ['value' => 'income-tax-return', 'label' => 'Income Tax Return', 'selected' => false, 'disabled' => false],
                            ['value' => 'gst-registration', 'label' => 'GST Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'private-limited-company-registration', 'label' => 'Company Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'startup-registration', 'label' => 'Startup Registration', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handles our ESOP exercise TDS events end-to-end. When 30 employees exercised options in Q3, they computed perquisite values, processed TDS, updated Form 24Q, and issued Form 12BA - zero errors.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Amit K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">CFO, SaaS Startup, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We switched to Patron from a software-only tool because our WFH allowance was structured incorrectly - employees were paying unnecessary tax. Patron restructured it as bill-based reimbursement and saved each employee Rs 800-1,200 per month.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha P.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Head, IT Services, Bangalore</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a DPIIT-recognised startup, we needed Section 192(1C) ESOP TDS deferral tracking. Patron set up the 48-month window monitoring and processes deferred TDS correctly when trigger events occur. No other payroll provider offered this.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">RJ</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Rahul J.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Founder, Product Startup, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our remote team is spread across 6 states with different PT slabs. Patron manages all state registrations and filings seamlessly. We also got old vs new regime advisory for each employee - saved our 80-person team about Rs 18 lakh in aggregate annual tax.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">MK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Meera K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Finance Director, GCC, Delhi NCR</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get CA-managed payroll with ESOP TDS expertise for your IT company.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">IT Payroll Concepts</a><a href="#who-section" class="toc-btn">Who Needs It</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">10-Step Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Deadlines</a><a href="#benefits-section" class="toc-btn">Why Patron</a><a href="#comparison-section" class="toc-btn">Managed vs DIY</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT and Software Company Payroll - ESOP TDS, CTC Structuring, and Full Statutory Compliance</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - IT Payroll Services at a Glance</strong></p>
                    <p>IT and software company payroll combines high-salary CTC structures with ESOP perquisite TDS under Section 17(2)(vi), dual tax regime choices (old vs new), remote work reimbursements under Rule 3(7)(ix), startup ESOP TDS deferral under Section 192(1C), and full PF/ESI/TDS compliance. Angel tax abolished from FY 2025-26 and November 2025 Labour Code digital registers add to the regulatory environment. Patron Accounting manages IT payroll from INR 149 per employee per month with 150+ tech clients served and 500+ ESOP TDS events processed.</p>
                </div>
                <p>India's technology sector employs over 5 million software professionals across startups, mid-size product companies, IT services firms, and GCCs. IT payroll is among the most complex in India - combining high-salary CTC structures with ESOP grants, RSUs, performance bonuses, dual tax regime choices, remote work reimbursements, and frequent mid-cycle salary revisions. Add ESOP perquisite TDS under Section 17(2)(vi), startup TDS deferral under Section 192(1C), and November 2025 Labour Code digital register mandates, and the compliance burden is substantial.</p>
                <p>Patron Accounting brings CA-level precision to IT payroll: correct ESOP TDS computation, per-employee regime optimisation (saving Rs 15-25 lakh collectively for a 100-person company), bill-based WFH reimbursement structuring under Rule 3(7)(ix), multi-state PT compliance for remote teams, and end-to-end statutory filings. From seed-stage SaaS startups to 500-person Series D product firms, our service scales with the company.</p>
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
                <h2 class="section-title">Key IT Sector Payroll Concepts</h2>
                <div class="content-text what-is-definition">
                    
                    <p>IT and software company payroll management is the structured monthly process of computing gross-to-net salary for all technology employees while managing ESOP/RSU perquisite tax events, variable pay cycles, dual tax regime declarations, remote work reimbursements, PF and ESI contributions, TDS deductions, and all statutory filings.</p><p><strong>ESOP Perquisite (Section 17(2)(vi)):</strong> Taxable at exercise. Value = (FMV on exercise date - exercise price) x shares. TDS under Section 192 at slab rate. Form 12BA mandatory when non-cash perquisite exceeds Rs 1,50,000/year.</p><p><strong>Old vs New Tax Regime:</strong> New regime is default from FY 2023-24 (Section 115BAC) with Rs 75,000 standard deduction but no HRA/LTA/80C. Old regime retains all exemptions. IT employees with high HRA, 80C investments, or home loan interest typically benefit from old regime.</p><p><strong>WFH Reimbursement (Rule 3(7)(ix)):</strong> Internet/phone bills 100% tax-exempt on actual bills. Fixed WFH allowance without bills: fully taxable. Converting fixed to bill-based saves employees Rs 600-1,500/month.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for IT Payroll:</strong></p>
                    <p><strong>CTC (Cost to Company):</strong> Total employer outlay including Basic (minimum 50% per Code on Wages 2019), HRA, LTA, Special Allowance, Bonus, Employer PF, Gratuity, ESOP grant value</p><p><strong>ESOP Perquisite TDS:</strong> Section 17(2)(vi) + Section 192 - FMV minus exercise price at slab rate; Form 12BA when above Rs 1,50,000</p><p><strong>Section 192(1C) Deferral:</strong> Startup ESOP TDS deferred to earliest of 48 months, share sale, or employment exit for DPIIT + IMB certified startups</p><p><strong>Rule 3(7)(ix):</strong> Internet and phone reimbursement on actual bills is 100% tax-exempt; no upper limit; fixed WFH allowance is fully taxable</p><p><strong>Angel Tax Abolished:</strong> Section 56(2)(viib) removed from FY 2025-26 (Budget 2024); removes share issuance friction for IT startup ESOP programmes</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <!-- IT/Code/Monitor icon -->
                            <rect x="40" y="35" width="120" height="80" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Monitor screen -->
                            <rect x="50" y="42" width="100" height="55" rx="4" fill="#1E293B"/>
                            <!-- Code lines on screen -->
                            <line x1="60" y1="54" x2="110" y2="54" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <line x1="60" y1="64" x2="95" y2="64" stroke="#25D366" stroke-width="2" stroke-linecap="round"/>
                            <line x1="60" y1="74" x2="105" y2="74" stroke="#60A5FA" stroke-width="2" stroke-linecap="round"/>
                            <line x1="60" y1="84" x2="85" y2="84" stroke="#F5A623" stroke-width="2" stroke-linecap="round"/>
                            <!-- Monitor stand -->
                            <rect x="90" y="100" width="20" height="8" rx="2" fill="#14365F" opacity="0.3"/>
                            <rect x="80" y="108" width="40" height="4" rx="2" fill="#14365F" opacity="0.2"/>
                            <!-- ESOP badge -->
                            <circle cx="140" cy="42" r="14" fill="#FFF3E0" stroke="#F5A623" stroke-width="1.2"/>
                            <text x="140" y="46" font-size="6" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial">ESOP</text>
                            <!-- Green check badge -->
                            <circle cx="155" cy="30" r="10" fill="#E8F5E9" stroke="#25D366" stroke-width="1.2"/>
                            <path d="M151 30l3 3 5-5" stroke="#25D366" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- ITP tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">ITP</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">IT Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>IT Payroll</span>
                        <strong>ESOP + TDS + Compliance</strong>
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
            <h2 class="section-title">Which IT and Software Entities Need Specialist Payroll?</h2>
            <div class="content-text">
                
                <ul><li><strong>IT Startups and SaaS Companies (Seed to Series C):</strong> ESOP grants, frequent salary revisions, joining bonuses, Section 192(1C) TDS deferral for DPIIT-recognised startups, angel-tax-free share issuances from FY 2025-26</li><li><strong>IT Services and Outsourcing Firms:</strong> Large payrolls (100-5,000+), variable pay based on billability, onshore/offshore salary splits, foreign currency allowances, DTAA-based TDS optimisation</li><li><strong>Product Companies and GCCs:</strong> RSU and ESOP payroll from Indian subsidiary to global parent, cross-border perquisite valuation, FEMA compliance for foreign equity compensation</li><li><strong>Tech Startups with Foreign Parent:</strong> ESOPs/RSUs from parent listed on NYSE/NASDAQ/LSE - FMV in INR, TDS computation, FEMA/Form 15CA-15CB compliance</li><li><strong>Staffing and Contract IT Workforce:</strong> Contract developers, project consultants - TDS under Section 194C (contractors) or 194J (professional fees above Rs 30,000/year)</li></ul><p><strong>Key thresholds:</strong> PF: 20+ employees (EPF Act Section 1(3)(a)). ESI: 10+ employees, gross up to Rs 21,000/month. TAN: mandatory from first hire with salary above IT threshold. ESOP deferral: DPIIT + IMB + salary below Rs 25 lakh.</p>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Payroll Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>CTC Structure Design and Regime Advisory</td><td>Salary breakdowns compliant with Code on Wages 2019 (Basic >= 50%), old vs new regime comparison per employee, HRA/LTA/internet reimbursement optimisation</td></tr><tr><td>Monthly Payroll Processing</td><td>Gross-to-net for all employees, variable pay, joining/retention bonuses, mid-cycle revisions with retroactive arrears, payslips and bank upload files</td></tr><tr><td>ESOP and RSU Perquisite TDS</td><td>FMV determination (listed exchange price / unlisted Merchant Banker), perquisite computation, TDS under Section 192, Form 12BA, Form 24Q reporting</td></tr><tr><td>Startup ESOP TDS Deferral</td><td>Section 192(1C) eligibility tracking, 48-month window management, trigger event processing (sale/exit), deferred TDS filing</td></tr><tr><td>PF, ESI, and Statutory Compliance</td><td>EPFO registration and UAN, monthly ECR by 15th, ESIC returns, Professional Tax across all applicable states, Labour Code digital registers</td></tr><tr><td>Full-and-Final Settlement</td><td>Salary arrears, leave encashment, gratuity (5+ years), ESOP lapse/accelerated vesting per scheme, TDS on all F&F components, Form 16</td></tr>

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
            <h2 class="section-title">How We Manage IT Company Payroll - 7-Step Process</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From CTC design to Form 16 issuance, every step managed by CAs with deep IT sector and ESOP taxation expertise.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Employee Onboarding and CTC Structure</h3><p class="step-description">Collect PAN, Aadhaar, UAN, bank details, Form 12B (mid-year joiners). Design CTC with Basic at minimum 50% per Code on Wages 2019. Determine tax regime preference (old/new) and collect Form 12BB investment declarations.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> CTC designed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regime determined</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 38l7 7 13-13" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Onboarding Done</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Monthly Payroll Inputs and ESOP Processing</h3><p class="step-description">Collect attendance, variable pay approvals, ESOP exercise notifications, salary revisions. On exercise: determine FMV, compute perquisite = (FMV - exercise price) x shares, add to salary income, compute TDS on enhanced salary.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Inputs collected</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ESOP FMV computed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="24" x2="92" y2="24" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="28" y1="38" x2="82" y2="38" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="50" x2="72" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="62" x2="78" y2="62" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Perquisite Added</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Gross-to-Net Salary Computation</h3><p class="step-description">Calculate gross (CTC minus employer PF/ESI/gratuity). Deduct EPF 12%, ESI 0.75% if applicable, Professional Tax per state, TDS at slab rate including ESOP perquisite. Arrive at net take-home for each employee category.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gross-to-net done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS at correct slab</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="6 6 0 0" fill="#14365F"/><text x="60" y="21" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><rect x="30" y="34" width="14" height="24" rx="2" fill="#F5A623"/><rect x="50" y="28" width="14" height="30" rx="2" fill="#25D366"/><rect x="70" y="38" width="14" height="20" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">All Deductions Applied</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Payslip Generation and Salary Disbursement</h3><p class="step-description">Digital payslips with full CTC breakdown, gross, deductions, and net. NEFT bank file generated. Salary credited by 7th (under 1,000 employees) per Payment of Wages Act.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips generated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary credited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="12" width="70" height="48" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="36" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 36l4 4 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="70" width="50" height="12" rx="6" fill="#F5A623" opacity="0.8"/><text x="60" y="79" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">PAID</text></svg></div><span class="illustration-label">Bank File Sent</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Statutory Filings</h3><p class="step-description">EPF ECR by 15th, ESI by 15th, TDS by 7th, PT per state schedule. Form 24Q quarterly with ESOP perquisite details. ESI half-yearly returns. Professional Tax returns per state.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> EPF/ESI filed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS deposited</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="12" width="80" height="55" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="24" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EPF</text><rect x="58" y="22" width="24" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="70" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TDS</text><rect x="28" y="38" width="54" height="12" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="1"/></svg></div><span class="illustration-label">PT Compliant</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Mid-Year TDS Recalculation and Regime Review</h3><p class="step-description">When salary is revised, ESOP exercised, or bonus paid - recalculate projected annual taxable income and adjust future monthly TDS. Before Q4: re-confirm regime choice. Ensure Form 24Q Q4 reflects final regime and all Chapter VI-A deductions.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS recalculated</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Regime confirmed</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="16" fill="none" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 3"/><path d="M54 38l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">No Year-End Shortfall</span><span class="step-number-large">06</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 7</span><h3 class="step-title">Year-End Annual Compliance</h3><p class="step-description">Form 16 Part A+B and Form 12BA by June 15. Reconcile TDS with Form 26AS. Compute gratuity provision (15/26 x salary x years). Bonus under Payment of Bonus Act 1965 (8.33% minimum). Maintain digital statutory registers for 7 years per Labour Code.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Form 16 issued</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 26AS reconciled</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="30" y="22" width="14" height="36" rx="2" fill="#F5A623"/><rect x="50" y="16" width="14" height="42" rx="2" fill="#25D366"/><rect x="70" y="26" width="14" height="32" rx="2" fill="#14365F" opacity="0.4"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Year Closed</span><span class="step-number-large">07</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required for IT Payroll Setup</h2>
            <div class="content-text">
                
                <p>Provide the following to start your IT payroll engagement:</p><ul><li><strong>Certificate of Incorporation</strong> - Private Limited / LLP / OPC</li><li><strong>PAN and TAN of Company</strong> - Tax Deduction Account Number from Income Tax Department</li><li><strong>EPFO and ESIC Registration</strong> - Establishment codes (or we register)</li><li><strong>Employee PAN, Aadhaar, UAN, Bank Details</strong> - For all staff</li><li><strong>Appointment Letters and Salary Structures</strong> - CTC breakdowns</li><li><strong>ESOP Scheme Document</strong> - Stock option agreement for employees with grants</li><li><strong>Merchant Banker Valuation Certificate</strong> - For unlisted ESOP exercise (not older than 180 days)</li><li><strong>Form 12BB Investment Declarations</strong> - From old regime employees</li><li><strong>Previous Payroll Records and Form 16</strong> - For mid-year migrations</li><li><strong>State PT Registration Certificates</strong> - Maharashtra, Karnataka, etc.</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Payroll Challenges and How Patron Accounting Solves Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Perquisite TDS Cash Flow Crunch</td><td>Perquisite income exceeds monthly cash salary; TDS cannot be fully deducted</td><td>Proactive communication, sell-to-cover options, TDS spread across remaining months, Form 12BA documentation</td></tr><tr><td>Wrong Tax Regime Costing Employees</td><td>Default new regime applied without analysis; excess TDS on employees with high HRA/80C</td><td>Annual per-employee regime comparison factoring HRA, investments, home loan, ESOP plans; written recommendations</td></tr><tr><td>WFH Allowance Fully Taxable</td><td>Fixed WFH allowance without bills is taxable; employees lose Rs 600-1,500/month</td><td>Convert to bill-based reimbursement under Rule 3(7)(ix); 100% tax-exempt on actual internet/phone bills</td></tr><tr><td>Moonlighting TDS Shortfall</td><td>Dual employment income not disclosed; year-end tax demand on employees</td><td>Section 192(2) disclosure form built into onboarding; primary employer deducts TDS on aggregate income</td></tr><tr><td>Multi-State PT for Remote Teams</td><td>PT defaults in multiple states; inspections and back payments</td><td>All 28-state PT compliance managed; state registrations and filings handled</td></tr><tr><td>Labour Code Digital Registers</td><td>November 2025 mandate for digital statutory registers; 7-year retention</td><td>All registers maintained digitally and available on demand during inspections</td></tr>

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
            <h2 class="section-title">IT Payroll Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Startup Essentials (up to 25 employees)</td><td>Rs 5,000-8,000/month</td></tr><tr><td>Growth-Stage (26-100 employees + ESOP TDS)</td><td>Rs 8,000-18,000/month</td></tr><tr><td>Scale-Up (101-300 employees + full compliance)</td><td>Rs 18,000-35,000/month</td></tr><tr><td>ESOP TDS Compliance (per exercise event)</td><td>Rs 3,000-8,000/batch</td></tr><tr><td>Startup ESOP Deferral Management (Section 192(1C))</td><td>Rs 2,500-5,000/month</td></tr><tr><td>Annual Compliance Review</td><td>Rs 8,000-20,000/year</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free IT Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20company%20payroll%20with%20ESOP%20TDS%20compliance.%20Please%20share%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Company Payroll Compliance Deadlines 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Deposit (Salary + ESOP Perquisite)</td><td>7th of following month</td></tr><tr><td>Salary Credit to Employees</td><td>By 7th (under 1,000) or 10th (over 1,000)</td></tr><tr><td>EPF and ESI Contribution Deposit</td><td>15th of following month</td></tr><tr><td>Form 24Q (Quarterly Salary TDS Return)</td><td>31 Jul, 31 Oct, 31 Jan, 31 May</td></tr><tr><td>ESI Half-Yearly Return (Form 5)</td><td>Nov 11 (Apr-Sep) and May 11 (Oct-Mar)</td></tr><tr><td>Form 16 and Form 12BA to Employees</td><td>June 15 annually</td></tr><tr><td>Form 26AS Reconciliation</td><td>Before June 15 Form 16 issuance</td></tr><tr><td>Digital Statutory Register Maintenance</td><td>Ongoing - 7-year retention (Labour Code)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> Late TDS deposit attracts 1.5% per month interest under Section 201A and penalty up to TDS amount under Section 271C. Late Form 24Q attracts Rs 200/day under Section 234E. Late EPF deposit attracts 12% per annum interest under Section 7Q. Form 12BA non-issuance attracts Rs 100/day under Section 272A. Patron Accounting ensures zero defaults across all deadlines.</p>

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
            <h2 class="section-title">Why IT Companies Choose Patron Accounting for Payroll</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>ESOP TDS Depth</h3><p>FMV for unlisted companies, sell-to-cover documentation, Form 12BA compliance, startup Section 192(1C) deferral tracking - niche areas generic providers miss</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Regime Optimisation at Scale</h3><p>For a 100-person IT company, optimising old vs new regime saves Rs 15-25 lakh collectively in annual tax. Standard annual process, not a premium add-on</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg></div><h3>Remote-First Payroll Ready</h3><p>Multi-state PT compliance for remote teams, bill-based WFH reimbursement structuring, and 28-state Professional Tax registrations and filings</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3>Compliance Currency</h3><p>Finance Act 2025 TDS changes, November 2025 Labour Code digital records, angel tax abolition (FY 2025-26), and evolving ESOP deferral conditions all incorporated</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div><h3>Startup to Scale-Up</h3><p>From 10-person seed-stage SaaS to 500-person Series D product firm - payroll service scales seamlessly with the company</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></div><h3>500+ ESOP Events Processed</h3><p>Product startups, IT services firms, and GCCs - we have managed ESOP payroll events across every stage of the technology company lifecycle</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">150+ Technology Companies Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>Patron Accounting serves 150+ technology companies including DPIIT-recognised startups, IT services firms, product companies, and GCCs. Our CA team has processed <strong>500+ ESOP TDS events</strong> and manages multi-state payroll compliance across India's four largest IT hubs.</p><p>Offices in Pune, Mumbai, Bangalore, and Delhi NCR with <strong>15+ years</strong> in payroll, ESOP structuring, and income tax advisory. IT sector clients range from seed-stage (5 employees) to growth-stage (500+ employees).</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">DIY / Software Tool vs Patron Accounting Managed Payroll</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Parameter</th><th>DIY / Payroll Software</th><th>Patron Accounting CA-Managed</th></tr></thead>
                    <tbody>
                        <tr><td>ESOP Perquisite TDS</td><td>Not supported or incorrect</td><td>Full FMV, TDS, Form 12BA, Form 24Q</td></tr><tr><td>Startup ESOP Deferral</td><td>Not tracked</td><td>Section 192(1C) with trigger event alerts</td></tr><tr><td>Old vs New Regime Advisory</td><td>Employee self-selects without guidance</td><td>Annual CA-guided per-employee comparison</td></tr><tr><td>WFH Reimbursement</td><td>Fixed allowance treated as salary</td><td>Bill-based reimbursement for tax exemption</td></tr><tr><td>Moonlighting / Section 192(2)</td><td>Not flagged</td><td>Disclosure process in onboarding</td></tr><tr><td>Multi-State PT</td><td>Manual; often missed</td><td>All applicable states registered and filed</td></tr><tr><td>Form 12BA Issuance</td><td>Often not generated</td><td>Issued for all eligible employees by June 15</td></tr>

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
            <h2 class="section-title">Related Services for IT Companies</h2>
            <div class="content-text">
                
                <p>Complement your IT payroll with these services:</p><ul><li><a href="/esop-management-and-compliance-services">ESOP Management and Compliance</a> - Full ESOP scheme design, SH-6 register, vesting, SEBI SBEB compliance</li><li><a href="/private-limited-company-registration">Company Registration</a> - Private Limited, LLP registration for IT startups</li><li><a href="/income-tax-return">Income Tax Filing</a> - ITR-2 for employees with ESOP capital gains and RSU income</li><li><a href="/gst-registration">GST Registration</a> - GST for IT companies, software export LUT, ITC reconciliation</li><li><a href="/payroll-services">Payroll Services (Overview)</a> - Managed payroll for all industries</li><li><a href="/it-sector-accounting-services">IT Sector Accounting</a> - Full accounting and compliance for IT companies</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for IT and Software Company Payroll</h2>
            <div class="content-text">
                
                <p>Key statutory provisions for IT company payroll:</p><ul><li><strong>Section 17(2)(vi), Income Tax Act 1961:</strong> ESOP perquisite = (FMV - exercise price) x shares at exercise. TDS under Section 192 at slab rate. Form 12BA for non-cash perquisite above Rs 1,50,000. <a href="https://incometaxindia.gov.in" target="_blank" rel="noopener">Income Tax Portal</a></li><li><strong>Section 192(1C):</strong> Startup ESOP TDS deferral to 48 months/sale/exit for DPIIT + IMB certified startups with employee salary below Rs 25 lakh. <a href="https://dpiit.gov.in" target="_blank" rel="noopener">DPIIT Portal</a></li><li><strong>Section 115BAC:</strong> New tax regime default from FY 2023-24; Rs 75,000 standard deduction; no HRA/LTA/80C. Old regime by employee declaration</li><li><strong>Rule 3(7)(ix), Income Tax Rules:</strong> Internet/phone reimbursement on actual bills 100% tax-exempt; no limit. Fixed WFH allowance fully taxable</li><li><strong>EPF and MP Act 1952:</strong> Mandatory for 20+ employees; 12%+12% of basic+DA. <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO Portal</a></li><li><strong>Code on Wages 2019:</strong> Basic at minimum 50% of CTC; November 2025 Labour Code digital register mandate; 7-year retention</li><li><strong>Angel Tax Abolished:</strong> Section 56(2)(viib) removed from FY 2025-26 (Budget 2024); removes share issuance friction for ESOP programmes</li></ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - IT and Software Company Payroll</h2>
                    <p class="faq-expanded__lead">Answers to common questions about ESOP TDS, tax regime choice, WFH reimbursement, PF, and compliance for IT companies.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'IT and Software Company Payroll'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">How is ESOP perquisite TDS calculated by an IT employer?</h3>
                        <div class="faq-expanded__a"><p>Perquisite = (FMV on exercise date - exercise price) x shares exercised. For listed shares, FMV is average opening/closing price. For unlisted, Category I Merchant Banker valuation required. TDS under Section 192 at slab rate, deposited by 7th. Form 12BA mandatory when non-cash perquisite exceeds Rs 1,50,000/year. Included in Form 24Q Q4.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">What is the startup ESOP TDS deferral under Section 192(1C)?</h3>
                        <div class="faq-expanded__a"><p>DPIIT-recognised startups with IMB certificate under Section 80-IAC and employee salary below Rs 25 lakh can defer ESOP perquisite TDS. Deferred to earliest of: 48 months from allotment, share sale date, or cessation of employment. Deferred TDS deposited in the year the trigger event occurs.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">Should IT employees choose old or new tax regime?</h3>
                        <div class="faq-expanded__a"><p>Old regime is better for employees with high HRA claims, Section 80C investments, home loan interest (Section 24(b) up to Rs 2 lakh), or health insurance premiums (Section 80D). New regime (default from FY 2023-24) with Rs 75,000 standard deduction suits junior employees with fewer deductions. Patron Accounting performs annual per-employee comparison.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">Are internet reimbursements taxable for WFH IT employees?</h3>
                        <div class="faq-expanded__a"><p>Bill-based reimbursement for internet and phone used for official business is 100% tax-exempt under Rule 3(7)(ix) with no upper limit. Fixed monthly WFH allowance without bills is fully taxable. Converting fixed to bill-based saves Rs 600-1,500/month per employee at no extra cost to employer.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Is PF mandatory for IT companies in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Any IT company with 20+ employees is covered under EPF Act 1952. Employee and employer each contribute 12% of basic+DA. Companies can cap at Rs 15,000 basic (Rs 1,800/month) or contribute on full salary per policy. Code on Wages 2019 requires basic at minimum 50% of CTC.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-6">
                        <h3 class="faq-expanded__q">How should IT companies handle moonlighting in payroll?</h3>
                        <div class="faq-expanded__a"><p>Under Section 192(2), employees with multiple employers may disclose total salary to primary employer, who then deducts TDS on aggregate income. Include Section 192(2) disclosure form in annual HR declarations. Non-disclosure by employee does not create employer liability but formal process reduces risk.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-7">
                        <h3 class="faq-expanded__q">What is angel tax abolition and how does it affect IT startup payroll?</h3>
                        <div class="faq-expanded__a"><p>Section 56(2)(viib) abolished from FY 2025-26 per Budget 2024. Does not directly affect payroll but removes friction on share issuances at high valuations, making ESOP grants more flexible for IT startups without triggering angel tax at company level.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: IT company ka payroll kaise manage karein?</strong> ESOP TDS, CTC structure (Basic 50%+ per Code on Wages), old/new regime advisory, PF/ESI, aur multi-state PT - sab CA team se professionally manage karwana chahiye.</p><p><strong>Q: Software employee ka ESOP TDS kaise katega?</strong> Exercise date pe FMV minus exercise price per share perquisite hai. Section 192 ke under slab rate pe TDS katega. Form 12BA bhi issue hoga agar Rs 1,50,000+ non-cash perquisite hai.</p><p><strong>Q: WFH allowance taxable hai?</strong> Fixed allowance fully taxable hai. But actual bill-based internet reimbursement Rule 3(7)(ix) ke under 100% tax-free hai - no limit. Bill lagao, tax bachao.</p><p><strong>Q: Angel tax abolished kya matlab hai ESOP ke liye?</strong> Section 56(2)(viib) FY 2025-26 se hata diya gaya. Ab startups high valuation pe shares issue kar sakte hain bina angel tax ke - ESOP pool allocation easier ho gaya.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">IT Payroll Errors Cost More Than You Think</h2>
            <div class="content-text">
                
                <p>Wrong ESOP perquisite TDS triggers income tax notices for both employer and employee. Incorrect tax regime application causes excess TDS and employee dissatisfaction. Improperly taxed WFH allowance means employees pay Rs 600-1,500/month in unnecessary tax. Missed Form 12BA attracts Rs 100/day penalty. Multi-state PT defaults trigger inspections and back payments.</p><p><strong>Call +91 945 945 6700 or WhatsApp us for a free IT payroll compliance review. We will audit your current payroll, identify ESOP TDS gaps, and deliver a compliant structure within 2 weeks.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your IT Company Payroll with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">India's IT sector demands payroll precision that generic software cannot deliver. ESOP TDS under Section 17(2)(vi), startup deferral under Section 192(1C), per-employee regime optimisation, bill-based WFH reimbursement structuring, and November 2025 Labour Code digital registers all require CA-level expertise.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting has served 150+ technology companies with 500+ ESOP TDS events processed. From seed-stage SaaS to Series D product firms, we deliver the precision your tech workforce expects. Starting from INR 149 per employee per month.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20IT%20company%20payroll%20with%20ESOP%20TDS%20compliance.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20IT%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20payroll%20services%20for%20my%20IT%20or%20software%20company.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">IT Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Managed payroll for IT startups, SaaS companies, and tech firms in major Indian cities.</p>
          
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-services-for-it-and-software-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-it-and-software-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-services-for-it-and-software-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for IT Company Payroll</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/esop-management-and-compliance-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESOP Management</div><div class="pa-card-sub">India</div></div></a><a href="/it-sector-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">IT Sector Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/income-tax-return" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Income Tax Return</div><div class="pa-card-sub">India</div></div></a><a href="/gst-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">GST Registration</div><div class="pa-card-sub">India</div></div></a><a href="/private-limited-company-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Company Registration</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 June 2026 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed every 3 months due to HIGH regulatory update frequency. ESOP TDS rules, Finance Act 2025 changes, and Labour Code mandates verified on each review cycle.</p>
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
