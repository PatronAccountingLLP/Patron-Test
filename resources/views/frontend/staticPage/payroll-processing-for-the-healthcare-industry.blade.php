
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
    <title>Healthcare Industry Payroll - PF, ESI, TDS & Shift Wages</title>
    <meta name="description" content="Managed payroll for hospitals, clinics and nursing homes. PF, ESI, TDS, shift-based pay, multi-role compliance. Healthcare payroll from INR 149 per employee.">
    <link rel="canonical" href="/payroll-processing-for-the-healthcare-industry">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="Healthcare Industry Payroll - PF, ESI, TDS & Shift Wages">
    <meta property="og:description" content="Managed payroll for hospitals, clinics and nursing homes. PF, ESI, TDS, shift-based pay, multi-role compliance. Healthcare payroll from INR 149 per employee.">
    <meta property="og:url" content="/payroll-processing-for-the-healthcare-industry">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Patron Accounting">
    <meta property="og:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Healthcare Industry Payroll - PF, ESI, TDS & Shift Wages">
    <meta name="twitter:description" content="Managed payroll for hospitals, clinics and nursing homes. PF, ESI, TDS, shift-based pay, multi-role compliance. Healthcare payroll from INR 149 per employee.">
    <meta name="twitter:image" content="https://www.patronaccounting.com/images/og-default-v2.png">
@endsection

@section('schema')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Service",
          "name": "Payroll Services for Healthcare in India",
          "description": "Managed payroll for hospitals, clinics and nursing homes. PF, ESI, TDS, shift-based pay, multi-role compliance. Healthcare payroll from INR 149 per employee.",
          "url": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry",
          "serviceType": "Payroll Services for Healthcare in India",
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
            "url": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry",
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
              "name": "Payroll Services for Healthcare in India",
              "item": "https://www.patronaccounting.com/payroll-processing-for-the-healthcare-industry"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Is ESI mandatory for hospitals and clinics in India?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Under the ESI Act 1948, all establishments including hospitals, clinics, nursing homes, and diagnostic centres employing 10 or more persons are covered. Every employee earning up to INR 21,000 per month (gross) must be registered. Employer contributes 3.25% and employee 0.75% of gross wages. Non-registration attracts penalties under Section 85 of the ESI Act."
              }
            },
            {
              "@type": "Question",
              "name": "How is TDS handled for visiting doctors not on payroll?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Visiting doctors providing professional services are paid professional fees, not salary. TDS under Section 194J of the Income Tax Act 1961 at 10% of gross fee must be deducted if total payment exceeds INR 30,000 in a financial year. The hospital deposits TDS by 7th of following month, files Form 26Q quarterly, and issues Form 16A annually."
              }
            },
            {
              "@type": "Question",
              "name": "How do you handle payroll for shift workers like nurses?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Shift roster data is integrated from your HMS or Excel each month. Night duty allowances, shift differentials, weekend and holiday pay computed based on applicable shift schedule and hospital HR policy. Shift differential is included in gross for ESI calculation. This eliminates manual errors and disputes."
              }
            },
            {
              "@type": "Question",
              "name": "What happens when salary crosses ESI ceiling of INR 21,000?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "ESI deductions stop from the start of the next contribution period after the salary revision. Contribution periods are April-September (wages Oct-Mar) and October-March (wages Apr-Sep). Patron Accounting monitors all salary changes monthly and adjusts ESI at the correct contribution period boundary."
              }
            },
            {
              "@type": "Question",
              "name": "Can you handle payroll for hospital chains in multiple states?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Multi-state payroll for hospital chains with state-wise Professional Tax slabs, Labour Welfare Fund rules, and Shops and Establishments Act compliance handled independently for each branch. National payroll report consolidated for corporate finance and audit teams. Quick Answers Q: Hospital payroll processing kaise hota hai? Doctor, nurse, technician sabka alag pay structure hota hai. Shift duty allowance, night pay, PF, ESI sab compute karke salary credit hoti hai. Form 24Q aur Form 26Q bhi file karna padta hai. Q: Is PF mandatory for hospital staff? Yes, EPF is mandatory for all healthcare establishments with 20+ employees. Both employer and employee contribute 12% of basic + DA. ECR filed by 15th monthly on EPFO unified portal. Q: What is the minimum engagement for small clinics? INR 8,000 per month minimum for clinics with under 20 employees. Covers full payroll processing, statutory compliance, and TDS filing. Q: Doctor nurse salary calculation India? Resident doctors get basic + NPA + grade pay + night duty + call allowance. Staff nurses get basic + NDA + uniform allowance + HRA. Visiting doctors are paid per-procedure or retainer - not on payroll; TDS under Section 194J applies."
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
                        Payroll Services for the Healthcare Industry: Hospitals, Clinics and Nursing Homes
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
                            <p class="mb-0 text-dark benefit-paragraph"><span>Multi-Role Payroll:</span> Doctors, nurses, technicians, admin, and contract staff - each with different pay structures, shift patterns, and statutory deduction profiles</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Full Statutory Compliance:</span> EPF (12%+12%), ESI (3.25%+0.75%), TDS Section 192, Professional Tax, LWF, Gratuity provisioning - all included</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>Shift and Night Duty Pay:</span> Shift differential, night duty allowance, on-call pay, weekend differentials computed accurately from roster data each month</p>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <span class="check-icon me-2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 13l4 4L19 7"/></svg></span>
                            <p class="mb-0 text-dark benefit-paragraph"><span>200+ Healthcare Clients:</span> Starting from INR 149 per employee per month - hospitals, clinics, nursing homes, and diagnostic centres across India</p>
                        </div>
                    </div>

                    <p class="mb-4 fw-bold" style="color: var(--blue); font-size: 15px;">200+ healthcare organisations trust Patron Accounting for fully managed payroll and statutory compliance</p>

                    <div class="hero-cta">
                        <a href="tel:+919459456700" class="btn-video text-decoration-none">
                            <span class="play-circle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;color:#fff"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></span>
                            Call +91 945 945 6700
                        </a>
                        <a href="mailto:sales@patronaccounting.com" class="btn-sample text-decoration-none">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
                            Email Us
                        </a>
                        <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20payroll%20services%20for%20my%20hospital%20or%20clinic.%20Please%20share%20details." target="_blank" class="btn-sample text-decoration-none">
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
                        'deal' => 'Website Enquiry - Healthcare Payroll',
                        'options' => [
                            ['value' => '', 'label' => 'Select a service', 'selected' => true, 'disabled' => true],
                            ['value' => 'payroll-processing-for-the-healthcare-industry', 'label' => 'Healthcare Payroll', 'selected' => true, 'disabled' => false],
                            ['value' => 'payroll-services', 'label' => 'Payroll Services (Overview)', 'selected' => false, 'disabled' => false],
                            ['value' => 'healthcare-sector-accounting-services', 'label' => 'Healthcare Accounting', 'selected' => false, 'disabled' => false],
                            ['value' => 'pf-registration', 'label' => 'PF Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'esic-registration', 'label' => 'ESIC Registration', 'selected' => false, 'disabled' => false],
                            ['value' => 'tds-return-filing', 'label' => 'TDS Return Filing', 'selected' => false, 'disabled' => false],
                            ['value' => 'actuarial-valuation-services-for-employee-benefits', 'label' => 'Actuarial Valuation', 'selected' => false, 'disabled' => false],
                            ['value' => 'gratuity-calculation-and-compliance-services', 'label' => 'Gratuity Compliance', 'selected' => false, 'disabled' => false],
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
        <div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Patron handles payroll for our 350-bed hospital with 280+ employees across 6 departments. Shift differentials, visiting consultant TDS, and multi-state PT - all managed seamlessly. Our HR team finally has time for recruitment instead of compliance.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--orange);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">DR</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Rajesh M.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Medical Director, Multi-Specialty Hospital, Pune</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">2 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">We were getting ESI notices because salary revisions pushed nurses above the INR 21,000 ceiling and deductions were not stopped on time. Patron fixed this in the first month and now monitors every salary change proactively.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:var(--blue);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">SP</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Sneha P.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">HR Manager, Nursing Home, Mumbai</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">3 months ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">Our visiting consultant TDS was a mess - some doctors were not getting Form 16A, and Section 194J deductions were inconsistent. Patron set up a dedicated consultant register and now every filing is on time. Happy consultants stay.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#0D9488;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">AK</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Dr. Amit K.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Admin Head, Polyclinic, Delhi</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">1 month ago</div></div></div>
<div class="testimonial-card" style="padding:20px;background:#fff;border-radius:12px;box-shadow:0 2px 12px rgba(0,0,0,0.07);margin:0 8px;min-height:220px;display:flex;flex-direction:column;justify-content:space-between;"><div style="color:var(--orange);font-size:28px;line-height:1;margin-bottom:8px;">&ldquo;</div><div style="font-size:13px;color:var(--text-dark);line-height:1.6;flex:1;">As a small clinic with 25 staff, we could not afford a full-time payroll person. Patron acts as our virtual payroll department - PF, ESI, TDS, payslips, everything handled for a fraction of the cost of an in-house hire.</div><div style="display:flex;align-items:center;gap:10px;margin-top:16px;"><div style="width:36px;height:36px;border-radius:50%;background:#7C3AED;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;color:#fff;flex-shrink:0;">PG</div><div><div style="font-weight:700;font-size:13px;color:var(--blue);">Priya G.</div><div style="font-size:12px;color:var(--text-muted);margin-top:2px;">Owner, Family Clinic, Bengaluru</div><div style="color:var(--orange);font-size:12px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div></div><div style="margin-left:auto;font-size:11px;color:var(--text-muted);">4 months ago</div></div></div>
    </div>
        <div class="reviews-cta" style="margin-top: 16px; display: flex !important;">
            <div class="reviews-cta-content">
                <div class="reviews-cta-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                </div>
                <div class="reviews-cta-text">
                    <h3 style="color:#FFFFFF !important;margin-top:0;">Join 10,000+ Satisfied Businesses</h3>
                    <p>Get fully managed payroll for your hospital, clinic, or nursing home.</p>
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
            <a href="#overview-section" class="toc-btn">Overview</a><a href="#what-section" class="toc-btn">Why Healthcare is Complex</a><a href="#who-section" class="toc-btn">Statutory Framework</a><a href="#services-section" class="toc-btn">Our Services</a><a href="#procedure-section" class="toc-btn">Monthly Process</a><a href="#documents-section" class="toc-btn">Documents</a><a href="#fees-section" class="toc-btn">Pricing</a><a href="#timeline-section" class="toc-btn">Compliance Calendar</a><a href="#benefits-section" class="toc-btn">Benefits</a><a href="#comparison-section" class="toc-btn">Managed vs DIY</a><a href="#faq-section" class="toc-btn">FAQs</a>
        </div>
        <button class="toc-arrow right" id="tocRight">&#10095;</button>
    </div>
</div>

<!-- SECTION 2: OVERVIEW / INTRO + TL;DR -->
<section class="content-section" id="overview-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Payroll - Fully Managed Service for Hospitals, Clinics, and Nursing Homes</h2>
            <div class="content-text">
                <div class="highlight-box" style="margin-bottom:20px;">
                    <p><strong>&#128204; TL;DR - Healthcare Payroll Services at a Glance</strong></p>
                    <p>Healthcare is one of India's most complex payroll environments. Multi-role pay structures (doctors, nurses, technicians, contract staff), 24/7 shift operations, visiting consultant TDS under Section 194J, ESI ceiling monitoring at INR 21,000, principal employer liability for contract workers, and multi-state Professional Tax compliance make healthcare payroll fundamentally different from other industries. Patron Accounting delivers end-to-end managed payroll from INR 149 per employee per month with 200+ healthcare clients served.</p>
                </div>
                <p>Hospitals, clinics, diagnostic centres, nursing homes, and pharmaceutical facilities employ a diverse workforce - resident doctors, visiting consultants, staff nurses, paramedics, technicians, housekeeping staff, and contractual workers - each with different pay scales, TDS rates, and statutory deduction profiles. Round-the-clock operations require shift-based pay computation with night duty allowances and weekend differentials calculated accurately each month.</p>
                <p>At Patron Accounting, our CA and CS team delivers end-to-end payroll management for healthcare organisations across India. We handle everything from gross-to-net computation to EPF ECR filing, ESIC returns, TDS deposits, visiting consultant Form 26Q, and monthly MIS reports - ensuring 100% statutory compliance while relieving management of the administrative burden.</p>
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
                <h2 class="section-title">Why Healthcare Payroll is More Complex Than Most Industries</h2>
                <div class="content-text what-is-definition">
                    
                    <p>Healthcare payroll is fundamentally different from payroll in manufacturing, IT, or retail because of sector-specific factors that create unique compliance challenges at every stage of the monthly payroll cycle.</p><p><strong>Multiple employee categories</strong> on a single payroll (resident doctors, visiting consultants, nurses, paramedics, housekeeping, security), <strong>round-the-clock shift operations</strong> requiring shift-based pay computation, <strong>visiting consultant payments</strong> requiring TDS under Section 194J at 10%, <strong>high attrition rates</strong> (20-30% annual in Indian healthcare), and <strong>contract staff</strong> with principal employer PF/ESI liability under the Contract Labour Act 1970.</p><p>Additionally, the <strong>ESI ceiling at INR 21,000</strong> per month must be monitored across hundreds of employees, state-specific <strong>Professional Tax</strong> deductions vary by location, and <strong>minimum wage compliance</strong> under the Code on Wages 2019 must be maintained for all categories of healthcare workers.</p>

                </div>
                <div class="highlight-box" style="margin-top:20px;">
                    <p><strong>Key Terms for Healthcare Payroll:</strong></p>
                    <p><strong>ESI Act 1948 (Section 2(12)):</strong> Mandatory for healthcare establishments with 10+ employees; employees earning up to INR 21,000/month covered; employer 3.25% + employee 0.75% of gross</p><p><strong>Section 194J TDS:</strong> 10% TDS on professional fees paid to visiting doctors/consultants exceeding INR 30,000/year; Form 26Q quarterly; Form 16A annually</p><p><strong>Principal Employer Liability:</strong> Under Contract Labour Act 1970, hospitals must verify contractor PF/ESI compliance for outsourced housekeeping, security, and support staff</p><p><strong>Shift Differential Pay:</strong> Additional compensation for night, evening, and rotating shifts - must be included in gross for ESI calculation</p><p><strong>Code on Wages 2019:</strong> Mandates minimum 50% of CTC as basic pay, affecting PF and ESI calculation base for healthcare employees</p>

                </div>
            </div>
            <div class="column-image">
                <div class="illustration-placeholder">
                    <div class="illustration-icon" style="max-width:240px;">
                        <svg viewBox="0 0 200 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Building / Tribunal -->
                            <!-- Hospital/Healthcare icon -->
                            <rect x="40" y="35" width="120" height="85" rx="8" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/>
                            <!-- Hospital cross -->
                            <rect x="88" y="42" width="24" height="8" rx="2" fill="#E8712C"/>
                            <rect x="96" y="34" width="8" height="24" rx="2" fill="#E8712C"/>
                            <!-- Windows -->
                            <rect x="55" y="68" width="18" height="16" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="80" y="68" width="18" height="16" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <rect x="127" y="68" width="18" height="16" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="0.8"/>
                            <!-- Door -->
                            <rect x="92" y="95" width="16" height="22" rx="8" fill="#14365F" opacity="0.2" stroke="#14365F" stroke-width="0.8"/>
                            <!-- People silhouettes (staff) -->
                            <circle cx="55" cy="100" r="5" fill="#14365F" opacity="0.3"/>
                            <circle cx="147" cy="100" r="5" fill="#14365F" opacity="0.3"/>
                            <!-- Green badge -->
                            <circle cx="155" cy="32" r="14" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/>
                            <path d="M149 32l4 4 8-8" stroke="#25D366" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <!-- HCP tag -->
                            <rect x="30" y="120" width="42" height="18" rx="4" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/>
                            <text x="51" y="132.5" font-size="8" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">HCP</text>
                            <!-- Label -->
                            <text x="100" y="170" font-size="10" fill="#14365F" font-weight="700" text-anchor="middle" font-family="Arial, sans-serif">Healthcare Payroll</text>
                        </svg>
                    </div>
                    <div class="illustration-badge">
                        <span>Healthcare Payroll</span>
                        <strong>PF + ESI + TDS + Shifts</strong>
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
            <h2 class="section-title">Statutory Compliance Framework for Healthcare Payroll</h2>
            <div class="content-text">
                
                <p>Healthcare payroll obligations span multiple statutes. Patron Accounting manages the complete compliance framework:</p><ul><li><strong>EPF (Employees Provident Fund):</strong> Employee 12% + Employer 12% (3.67% EPF + 8.33% EPS) of basic+DA. Mandatory for 20+ employees. ECR by 15th monthly. <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO Portal</a></li><li><strong>ESI (Employees State Insurance):</strong> Employee 0.75% + Employer 3.25% of gross. Mandatory for 10+ employee establishments. Ceiling INR 21,000/month. Half-yearly returns. <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC Portal</a></li><li><strong>TDS on Salary (Section 192):</strong> Income tax slab-based deduction. Deposit by 7th. Form 24Q quarterly. Form 16 by June 15th</li><li><strong>TDS on Consulting Fees (Section 194J):</strong> 10% on visiting doctor fees above INR 30,000/year. Form 26Q quarterly. Form 16A annually</li><li><strong>Professional Tax:</strong> State-specific rates (Maharashtra up to INR 2,500/year, Karnataka up to INR 2,400/year)</li><li><strong>Labour Welfare Fund:</strong> State-specific (Maharashtra: INR 36 employee + INR 72 employer per year). Half-yearly filing</li><li><strong>Gratuity (Payment of Gratuity Act 1972):</strong> 15/26 x last drawn salary x years of service. Mandatory after 5 years for 10+ employee establishments</li></ul>

            </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: OUR SERVICES -->
<section class="content-section" id="services-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Payroll Services by Patron Accounting</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Service</th><th>What We Do</th></tr></thead>
                    <tbody>
                        <tr><td>Core Payroll Processing</td><td>Monthly salary computation for all categories (full-time, part-time, contract, daily wage), shift differentials, night duty allowance, on-call pay, gross-to-net with all deductions</td></tr><tr><td>Statutory Compliance and Return Filing</td><td>EPF ECR monthly, ESIC half-yearly returns, TDS Section 192 by 7th, Form 24Q quarterly, Professional Tax, LWF bi-annual, Bonus Act compliance</td></tr><tr><td>Visiting Consultant TDS</td><td>Section 194J at 10% on professional fees, retainer + per-procedure fee computation, Form 26Q quarterly, Form 16A annually to each consultant</td></tr><tr><td>Contract Staff Compliance</td><td>Principal employer PF/ESI liability check under Contract Labour Act 1970, contractor compliance register, wage register per Code on Wages 2019</td></tr><tr><td>Full-and-Final Settlement</td><td>Gratuity calculation, leave encashment, statutory dues, PF transfer/withdrawal processing, Form 11 and UAN management</td></tr><tr><td>Shift Roster Integration</td><td>Import attendance and shift data from HMS or Excel, automated shift differential and night duty calculation, ESI gross reconciliation</td></tr>

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
            <h2 class="section-title">Monthly Healthcare Payroll Process - 6 Steps</h2>
            <p class="section-subtitle" style="text-align:left;max-width:100%;">From data collection to statutory filings, every step managed by our CA team with healthcare payroll specialisation.</p>
        </header>
        <div class="steps-container">
            <div class="step-card"><div class="step-content"><span class="step-badge">Step 1</span><h3 class="step-title">Data Collection (By 22nd Monthly)</h3><p class="step-description">Standardised input template shared with HR team. Attendance, new joinings, exits, salary revisions, shift roster data, and variable pay components submitted. Visiting consultant fee details collected separately.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Template shared</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Data received by 22nd</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><path d="M50 38l7 7 13-13" stroke="#F5A623" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Input Complete</span><span class="step-number-large">01</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 2</span><h3 class="step-title">Data Validation and Eligibility Check</h3><p class="step-description">Validate completeness, check new PF/ESI eligibility for joiners, flag ESI ceiling changes (INR 21,000 threshold), cross-check against previous month for anomalies, verify minimum wage compliance.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Eligibility verified</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> ESI ceiling checked</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="15" y="8" width="90" height="64" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><line x1="28" y1="24" x2="92" y2="24" stroke="#F5A623" stroke-width="3" stroke-linecap="round"/><line x1="28" y1="38" x2="82" y2="38" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="50" x2="72" y2="50" stroke="#14365F" stroke-width="2" opacity="0.3"/><line x1="28" y1="62" x2="60" y2="62" stroke="#14365F" stroke-width="2" opacity="0.3"/></svg></div><span class="illustration-label">Data Validated</span><span class="step-number-large">02</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 3</span><h3 class="step-title">Payroll Computation</h3><p class="step-description">Gross-to-net for each employee category: basic, HRA, NDA, shift differential, on-call pay. All statutory deductions (PF, ESI, PT, TDS) applied. Visiting consultant fees with Section 194J TDS computed separately.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Gross-to-net done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Shift pay computed</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> TDS calculated</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="20" y="10" width="80" height="16" rx="6 6 0 0" fill="#14365F"/><text x="60" y="21" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">PAYROLL</text><rect x="30" y="34" width="14" height="24" rx="2" fill="#F5A623"/><rect x="50" y="28" width="14" height="30" rx="2" fill="#25D366"/><rect x="70" y="38" width="14" height="20" rx="2" fill="#14365F" opacity="0.4"/></svg></div><span class="illustration-label">Deductions Applied</span><span class="step-number-large">03</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 4</span><h3 class="step-title">Draft Review and Approval</h3><p class="step-description">Payroll summary sent to HR/Finance head for review. Department-wise cost breakup, headcount report, and PF/ESI liability summary included. Corrections incorporated before final processing.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Draft sent for review</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Corrections applied</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="60" cy="38" r="26" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="38" r="16" fill="none" stroke="#F5A623" stroke-width="2" stroke-dasharray="4 3"/><path d="M54 38l4 4 8-8" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="30" y="76" width="60" height="6" rx="3" fill="#14365F" opacity="0.12"/></svg></div><span class="illustration-label">Approved</span><span class="step-number-large">04</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 5</span><h3 class="step-title">Salary Disbursement (By 3rd-5th)</h3><p class="step-description">Bank transfer file generated in NEFT/RTGS format. Salary credited to all employees. Payslips emailed or uploaded to self-service portal. Visiting consultant payments processed with TDS deducted.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Salary credited</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Payslips delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="25" y="12" width="70" height="48" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><circle cx="60" cy="36" r="16" fill="#E8F5E9" stroke="#25D366" stroke-width="1.5"/><path d="M53 36l4 4 10-10" stroke="#25D366" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/><rect x="35" y="70" width="50" height="12" rx="6" fill="#F5A623" opacity="0.8"/><text x="60" y="79" font-size="7" fill="#fff" font-weight="700" text-anchor="middle" font-family="Arial">PAID</text></svg></div><span class="illustration-label">Consultants Paid</span><span class="step-number-large">05</span></div></div></div>
<div class="step-card"><div class="step-content"><span class="step-badge">Step 6</span><h3 class="step-title">Statutory Filings and Monthly MIS</h3><p class="step-description">EPF ECR by 15th, ESI contribution by 15th, TDS by 7th, Professional Tax by state deadline. Monthly MIS report with department-wise cost analysis, headcount report, and PF/ESI liability summary delivered.</p><div class="step-highlights"><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> All filings done</span><span class="highlight-tag"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> MIS report delivered</span></div></div><div class="step-visual"><div class="step-illustration"><div class="illustration-icon"><svg viewBox="0 0 120 100" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="20" y="10" width="80" height="58" rx="6" fill="#F0F4F8" stroke="#14365F" stroke-width="1.5"/><rect x="28" y="22" width="24" height="10" rx="2" fill="#FFF3E0" stroke="#F5A623" stroke-width="1"/><text x="40" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">EPF</text><rect x="58" y="22" width="24" height="10" rx="2" fill="#E8F5E9" stroke="#25D366" stroke-width="1"/><text x="70" y="30" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">ESI</text><rect x="28" y="38" width="24" height="10" rx="2" fill="#E3F2FD" stroke="#14365F" stroke-width="1"/><text x="40" y="46" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">TDS</text><rect x="58" y="38" width="24" height="10" rx="2" fill="#F3E5F5" stroke="#7C3AED" stroke-width="1"/><text x="70" y="46" font-size="6" fill="#14365F" font-weight="600" text-anchor="middle" font-family="Arial">MIS</text></svg></div><span class="illustration-label">Month Closed</span><span class="step-number-large">06</span></div></div></div>

        </div>
    </div>
</section>

<!-- SECTION 8: DOCUMENTS REQUIRED -->
<section class="content-section" id="documents-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Documents Required to Onboard Healthcare Payroll</h2>
            <div class="content-text">
                
                <p>Provide the following to start managed payroll:</p><ul><li><strong>Employee Master Data</strong> - Name, UAN, DOB, DOJ, designation, department for all staff categories</li><li><strong>Monthly Salary Structure</strong> - Basic, HRA, allowances, shift components per employee category</li><li><strong>Bank Account Details</strong> - Cancelled cheque or IFSC + account number for each employee</li><li><strong>PAN and Aadhaar Details</strong> - For TDS and PF/ESI registration</li><li><strong>EPF and ESIC Registration Numbers</strong> - Existing establishment codes</li><li><strong>Previous Payroll Data</strong> - Last 3 months if switching from another provider</li><li><strong>Visiting Consultant List</strong> - PAN, fee structure, and engagement agreement</li><li><strong>Contract Labour List</strong> - Contractor name and PF/ESI registration details</li><li><strong>State PT and LWF Certificates</strong> - If already registered in applicable states</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 9: CHALLENGES -->
<section class="content-section" id="challenges-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Common Healthcare Payroll Challenges and How We Solve Them</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Challenge</th><th>Impact</th><th>How Patron Accounting Solves It</th></tr></thead>
                    <tbody>
                        <tr><td>Shift-Based Pay Computation</td><td>Manual errors in night duty allowance; employee disputes over shift differentials</td><td>Roster integration from HMS or Excel; automated shift differential and NDA calculation each month</td></tr><tr><td>Visiting Consultant TDS (194J)</td><td>Penalties for non-deduction; Form 16A delays causing consultant dissatisfaction</td><td>Dedicated consultant fee register; monthly TDS deduction; quarterly Form 26Q; annual Form 16A</td></tr><tr><td>ESI Threshold Monitoring</td><td>Incorrect deductions above INR 21,000 ceiling or missed registrations</td><td>Monthly gross salary tracking; auto-flag on ESI threshold breach; timely ESIC portal updates</td></tr><tr><td>Contract Staff PF/ESI Liability</td><td>Principal employer penalty under EPF and ESI Acts for contractor non-compliance</td><td>Contractor compliance checklist; monthly reconciliation of sub-contractor PF/ESI deposits</td></tr><tr><td>High Attrition F&F Settlements</td><td>Delayed settlements cause grievances and labour court notices</td><td>Standardised F&F template; 30-day settlement target; PF withdrawal and transfer facilitation</td></tr><tr><td>Multi-State PT Compliance</td><td>Defaults in multiple states; inspections and back payments</td><td>State-wise PT register; automated deduction slabs updated for each state periodically</td></tr>

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
            <h2 class="section-title">Healthcare Payroll Service Fees 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Fee Component</th><th>Amount</th></tr></thead>
                    <tbody>
                        <tr><td>Basic Payroll (Salary computation, payslips, bank file)</td><td>INR 300-500 per employee/month</td></tr><tr><td>Payroll + Statutory (Basic + PF, ESI, PT, LWF filing)</td><td>INR 500-800 per employee/month</td></tr><tr><td>Full Managed Payroll (+ TDS + F&F + auditor support)</td><td>INR 800-1,500 per employee/month</td></tr><tr><td>Healthcare Premium (+ consultant TDS + shifts + HMS)</td><td>INR 1,500-2,500 per employee/month</td></tr><tr><td>Minimum Monthly Engagement (small clinics under 20)</td><td>INR 8,000 per month minimum</td></tr><tr><td>Setup/Onboarding (one-time, waived for annual contracts)</td><td>INR 5,000-25,000</td></tr><tr><td>Patron Accounting Professional Fees</td><td>Starting from INR 149 per employee (Exl GST and Govt. Charges)</td></tr>

                    </tbody>
                </table>
                </div>
                <p style="margin-top:16px;font-size:13px;color:var(--text-muted);font-style:italic;">All fees and charges listed are indicative only and do not constitute a binding offer. Final amounts may vary depending on the volume of work and the complexity involved.</p>
                <p style="margin-top:16px;">Professional service charges for drafting, filing, and representation are separate from the statutory fees. The exact fee depends on the complexity of the case, disputed amount, and number of hearings required. Contact us for a detailed quote.</p>
                <p style="margin-top:16px;"><strong>Get a free Healthcare Payroll consultation - <a href="tel:+919459456700">Call +91 945 945 6700</a> or <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20healthcare%20payroll%20services.%20Please%20share%20pricing." target="_blank">WhatsApp us</a>. No-obligation assessment.</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 11: TIMELINE -->
<section class="content-section" id="timeline-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Payroll Compliance Calendar 2026</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Stage</th><th>Estimated Timeline</th></tr></thead>
                    <tbody>
                        <tr><td>TDS Deposit (Section 192 + 194J)</td><td>7th of following month</td></tr><tr><td>Salary Credit to All Employees</td><td>By 7th-10th (Payment of Wages Act)</td></tr><tr><td>EPF ECR Filing and Challan</td><td>15th of following month</td></tr><tr><td>ESI Monthly Contribution Deposit</td><td>15th of following month</td></tr><tr><td>Form 24Q (Salary TDS) and 26Q (Consulting TDS)</td><td>Quarterly (Jul, Oct, Jan, Apr)</td></tr><tr><td>Form 16 to Employees / Form 16A to Consultants</td><td>June 15th annually</td></tr><tr><td>ESIC Half-Yearly Returns</td><td>April and October</td></tr><tr><td>Labour Welfare Fund Contribution</td><td>June 30 and December 31</td></tr><tr><td>Gratuity Actuarial Valuation</td><td>Annually (AS 15 / Ind AS 19)</td></tr>

                    </tbody>
                </table>
                </div>
                <div class="highlight-box" style="margin-top:16px;">
                    
                    <p><strong>Note:</strong> EPF late deposit attracts 12% per annum interest plus penalties up to INR 5,000 per default under Section 14B. ESI non-registration attracts penalties under Section 85 of ESI Act 1948. TDS late deposit attracts 1.5% per month interest under Section 201(1A). Patron Accounting ensures all deadlines are met with zero defaults.</p>

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
            <h2 class="section-title">Benefits of Outsourcing Healthcare Payroll</h2>
        </div>
        <div class="features-grid"><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>Free Up Clinical Leadership Time</h3><p>Medical Directors and HR Managers can focus on patient care and workforce planning instead of monthly payroll cycles and statutory deadlines</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><h3>Eliminate Statutory Penalties</h3><p>EPF delays attract 12% per annum compound interest plus INR 5,000 per default. ESI non-compliance attracts Section 85 penalties. We ensure zero defaults</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><h3>Improve Staff Retention</h3><p>Healthcare attrition drops significantly when salary is paid on time with correct allowances, shift differentials, and deductions every month</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div><h3>Scalable for Hospital Chains</h3><p>Add new branches or locations without hiring additional payroll staff. Our team scales with your growth across multiple states</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg></div><h3>Audit and Inspection Ready</h3><p>All statutory registers, wage books, Form 16/16A, and PF/ESI challans maintained digitally and available on demand during labour or tax inspections</p></article><article class="feature-card"><div class="feature-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><h3>30-50% Cost Savings</h3><p>Compared to maintaining an in-house payroll team of equivalent capability, especially for medium-sized hospitals with 100-500 employees</p></article></div>
    </div>
</section>

<!-- SECTION 12A: SOCIAL PROOF -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">200+ Healthcare Organisations Trust Patron Accounting</h2>
            <div class="content-text">
                
                <p>Patron Accounting serves 200+ healthcare clients including multi-specialty hospitals, polyclinics, nursing homes, diagnostic centres, and pharmaceutical companies. Our CA and CS team files all statutory returns (EPF, ESI, TDS, PT, LWF) on time with <strong>zero default record</strong>.</p><p>Pan-India coverage with multi-state payroll compliance handled for hospital chains across Maharashtra, Karnataka, Delhi NCR, Tamil Nadu, and other states.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 13: SELF-FILING vs PROFESSIONAL COMPARISON -->
<section class="content-section" id="comparison-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Fully Managed Payroll vs Generic Payroll Software</h2>
            <div class="content-text">
                <div class="table-responsive-wrapper">
                <table>
                    <thead><tr><th>Feature</th><th>Patron Accounting (Managed)</th><th>Generic Payroll Software</th></tr></thead>
                    <tbody>
                        <tr><td>Scope</td><td>Fully managed - we do everything</td><td>Software tool - your team does the work</td></tr><tr><td>Healthcare Expertise</td><td>CA/CS team with hospital payroll experience</td><td>Generic; no healthcare specialisation</td></tr><tr><td>Statutory Filings</td><td>EPF, ESI, TDS, PT, LWF - all filed on time</td><td>Some filing modules; operator skill required</td></tr><tr><td>Visiting Consultant TDS</td><td>Included (194J, Form 26Q, Form 16A)</td><td>Typically not handled</td></tr><tr><td>Contract Staff Compliance</td><td>Principal employer liability check included</td><td>Not available</td></tr><tr><td>F&F Settlement</td><td>Gratuity, leave, PF processing included</td><td>Manual calculation required</td></tr><tr><td>Audit Support</td><td>EPF, ESIC, IT department notices handled</td><td>Not included</td></tr>

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
            <h2 class="section-title">Related Services for Healthcare Organisations</h2>
            <div class="content-text">
                
                <p>Complement your healthcare payroll with these services:</p><ul><li><a href="/payroll-services">Payroll Services (Overview)</a> - Complete payroll management for all industries</li><li><a href="/pf-registration">PF Registration</a> - EPF registration for new healthcare establishments</li><li><a href="/esic-registration">ESIC Registration</a> - ESI registration for hospitals and clinics</li><li><a href="/tds-return-filing-24q">TDS Return Filing</a> - Form 24Q salary TDS and Form 26Q consulting fees</li><li><a href="/actuarial-valuation-services-for-employee-benefits">Actuarial Valuation</a> - Gratuity provision computation under AS 15/Ind AS 19</li><li><a href="/healthcare-sector-accounting-services">Healthcare Accounting</a> - Full accounting and compliance for healthcare organisations</li></ul>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 15A: LEGAL FRAMEWORK -->
<section class="content-section">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Legal Framework for Healthcare Payroll in India</h2>
            <div class="content-text">
                
                <p>Key statutory provisions governing healthcare payroll:</p><ul><li><strong>EPF and MP Act 1952:</strong> Mandatory for 20+ employee establishments. Employee and employer each contribute 12% of basic+DA. ECR filed monthly by 15th on EPFO unified portal. <a href="https://www.epfindia.gov.in" target="_blank" rel="noopener">EPFO Portal</a></li><li><strong>ESI Act 1948, Section 2(12):</strong> All healthcare establishments with 10+ employees covered. Ceiling INR 21,000/month. Employer 3.25% + Employee 0.75%. <a href="https://www.esic.gov.in" target="_blank" rel="noopener">ESIC Portal</a></li><li><strong>Income Tax Act 1961, Section 192:</strong> TDS on salary at slab rates. Section 194J at 10% on visiting consultant fees above INR 30,000/year. <a href="https://www.incometax.gov.in" target="_blank" rel="noopener">Income Tax Portal</a></li><li><strong>Code on Wages 2019:</strong> Minimum 50% of CTC as basic pay; state-specific minimum wages for healthcare worker categories</li><li><strong>Payment of Gratuity Act 1972:</strong> 15/26 x last drawn salary x years of service for 10+ employee establishments after 5 years of continuous service</li><li><strong>Contract Labour Act 1970:</strong> Principal employer (hospital) liable for PF/ESI of contract workers if contractor defaults; registration required for 20+ contract workers</li><li><strong>Clinical Establishments Act 2010:</strong> Registration and minimum standards for clinical establishments maintained alongside payroll compliance</li></ul>

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
                    <h2 class="faq-expanded__title">Frequently Asked Questions - Healthcare Payroll India</h2>
                    <p class="faq-expanded__lead">Answers to common questions about payroll for hospitals, clinics, nursing homes, and diagnostic centres in India.</p>
                    @include('partials.faq-enquiry-form', ['enquiryService' => 'Healthcare Payroll India'])
                </aside>
                <div class="faq-expanded__list">
                    <div class="faq-expanded__item" id="faq-1">
                        <h3 class="faq-expanded__q">Is ESI mandatory for hospitals and clinics in India?</h3>
                        <div class="faq-expanded__a"><p>Yes. Under the ESI Act 1948, all establishments including hospitals, clinics, nursing homes, and diagnostic centres employing 10 or more persons are covered. Every employee earning up to INR 21,000 per month (gross) must be registered. Employer contributes 3.25% and employee 0.75% of gross wages. Non-registration attracts penalties under Section 85 of the ESI Act.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-2">
                        <h3 class="faq-expanded__q">How is TDS handled for visiting doctors not on payroll?</h3>
                        <div class="faq-expanded__a"><p>Visiting doctors providing professional services are paid professional fees, not salary. TDS under Section 194J of the Income Tax Act 1961 at 10% of gross fee must be deducted if total payment exceeds INR 30,000 in a financial year. The hospital deposits TDS by 7th of following month, files Form 26Q quarterly, and issues Form 16A annually.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-3">
                        <h3 class="faq-expanded__q">How do you handle payroll for shift workers like nurses?</h3>
                        <div class="faq-expanded__a"><p>Shift roster data is integrated from your HMS or Excel each month. Night duty allowances, shift differentials, weekend and holiday pay computed based on applicable shift schedule and hospital HR policy. Shift differential is included in gross for ESI calculation. This eliminates manual errors and disputes.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-4">
                        <h3 class="faq-expanded__q">What happens when salary crosses ESI ceiling of INR 21,000?</h3>
                        <div class="faq-expanded__a"><p>ESI deductions stop from the start of the next contribution period after the salary revision. Contribution periods are April-September (wages Oct-Mar) and October-March (wages Apr-Sep). Patron Accounting monitors all salary changes monthly and adjusts ESI at the correct contribution period boundary.</p></div>
                    </div>
                    <div class="faq-expanded__item" id="faq-5">
                        <h3 class="faq-expanded__q">Can you handle payroll for hospital chains in multiple states?</h3>
                        <div class="faq-expanded__a"><p>Yes. Multi-state payroll for hospital chains with state-wise Professional Tax slabs, Labour Welfare Fund rules, and Shops and Establishments Act compliance handled independently for each branch. National payroll report consolidated for corporate finance and audit teams.</p></div>
                    </div>
                </div>
            </div>


            <!-- Quick Answers -->
            <div class="highlight-box" style="margin-top:32px;">
                <p><strong>Quick Answers</strong></p>
                <p><strong>Q: Hospital payroll processing kaise hota hai?</strong> Doctor, nurse, technician sabka alag pay structure hota hai. Shift duty allowance, night pay, PF, ESI sab compute karke salary credit hoti hai. Form 24Q aur Form 26Q bhi file karna padta hai.</p><p><strong>Q: Is PF mandatory for hospital staff?</strong> Yes, EPF is mandatory for all healthcare establishments with 20+ employees. Both employer and employee contribute 12% of basic + DA. ECR filed by 15th monthly on EPFO unified portal.</p><p><strong>Q: What is the minimum engagement for small clinics?</strong> INR 8,000 per month minimum for clinics with under 20 employees. Covers full payroll processing, statutory compliance, and TDS filing.</p><p><strong>Q: Doctor nurse salary calculation India?</strong> Resident doctors get basic + NPA + grade pay + night duty + call allowance. Staff nurses get basic + NDA + uniform allowance + HRA. Visiting doctors are paid per-procedure or retainer - not on payroll; TDS under Section 194J applies.</p>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 18: URGENCY CTA -->
<section class="content-section" style="background: var(--orange-lighter) !important; border-left: 4px solid var(--orange);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title">Healthcare Payroll Penalties Are Severe - Get Compliant Now</h2>
            <div class="content-text">
                
                <p>EPF late deposit attracts 12% per annum compound interest plus penalties up to INR 5,000 per default under Section 14B. ESI non-registration for eligible employees attracts penalties under Section 85. TDS non-deduction on visiting consultant fees triggers Section 201 demand with 1.5% monthly interest. Contract staff PF/ESI default makes the hospital liable as principal employer.</p><p><strong>Call +91 945 945 6700 or WhatsApp us for a free healthcare payroll consultation. We will assess your establishment, map all employee categories, and deliver a compliance-ready payroll structure within 2 weeks.</strong></p>

            </div>
        </div>
    </div>
</section>

<!-- CONCLUSION + CTA BLOCK (Dark) -->
<section class="content-section" style="background: var(--blue) !important;">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="color:#FFFFFF !important;">Start Your Healthcare Payroll with Patron Accounting</h2>
            <div class="content-text" style="text-align:left;">
                
                <p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Healthcare payroll is one of the most complex payroll environments in India. Multi-role pay structures, 24/7 shift operations, visiting consultant TDS, ESI ceiling monitoring, and contract staff compliance create a compliance burden that generic payroll software cannot handle.</p><p style="color:rgba(255,255,255,0.9);font-size:15px;line-height:1.7;">Patron Accounting delivers fully managed healthcare payroll from INR 149 per employee per month - covering everything from shift differential computation to statutory filings. 200+ healthcare clients, zero default record, pan-India coverage.</p>

            </div>
            <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:24px;">
                <a href="tel:+919459456700" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:var(--orange);color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128222; Call +91 945 945 6700</a>
                <a href="https://wa.me/919459456700?text=Hi%2C%20I%20need%20healthcare%20payroll%20services.%20Please%20share%20pricing." target="_blank" style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:#25D366;color:#fff;border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#128172; WhatsApp Us</a>
                <a href="mailto:sales@patronaccounting.com?subject=Enquiry%20for%20Healthcare%20Payroll%20Services&body=Hello%20Patron%20Accounting%20Team%2C%0A%0AI%20need%20payroll%20services%20for%20my%20hospital%20or%20clinic.%0A%0APlease%20get%20in%20touch.%0A%0AThank%20you." style="display:inline-flex;align-items:center;gap:8px;padding:14px 28px;background:transparent;color:#fff;border:2px solid rgba(255,255,255,0.3);border-radius:50px;font-weight:700;font-size:15px;text-decoration:none;transition:all 0.25s;">&#9993;&#65039; Email Us</a>
            </div>
            <p style="color:rgba(255,255,255,0.7);font-size:13px;margin-top:16px;">Book a Free Consultation - No Obligation.</p>
        </div>
    </div>
</section>

<!-- GSTAT STATE BENCH CITY PAGES (32 Pages) -->
<section class="content-section" style="padding:48px 32px;background:var(--gray-50);">
    <div class="content-container">
        <div class="text-content">
            <h2 class="section-title" style="text-align:center;margin-bottom:12px;">Healthcare Payroll Services Across India</h2>
            <p style="text-align:center;color:var(--text-muted);font-size:15px;margin-bottom:40px;">Managed payroll for hospitals, clinics, and nursing homes in major Indian cities.</p>
       
            <div class="pa-city-block" style="margin-bottom:40px;"><div class="pa-city-grid"><a href="/payroll-processing-for-the-healthcare-industry/pune" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Pune</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-processing-for-the-healthcare-industry/mumbai" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Mumbai</div><div class="pa-card-sub">Maharashtra</div></div></a><a href="/payroll-processing-for-the-healthcare-industry/gurugram" class="pa-city-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div><div><div class="pa-card-title">Gurugram</div><div class="pa-card-sub">Haryana</div></div></a></div></div><div class="pa-city-block"><div class="pa-block-title">Related Services</div><div class="pa-block-sub">End-to-end support for Healthcare Payroll</div><div class="pa-cross-grid"><a href="/payroll-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Payroll Services</div><div class="pa-card-sub">India</div></div></a><a href="/healthcare-sector-accounting-services" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Healthcare Accounting</div><div class="pa-card-sub">India</div></div></a><a href="/pf-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">PF Registration</div><div class="pa-card-sub">India</div></div></a><a href="/esic-registration" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">ESIC Registration</div><div class="pa-card-sub">India</div></div></a><a href="/tds-return-filing-24q" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">TDS Return Filing</div><div class="pa-card-sub">India</div></div></a><a href="/actuarial-valuation-services-for-employee-benefits" class="pa-cross-card"><div class="pa-card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" style="width:16px;height:16px;"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div><div><div class="pa-card-title">Actuarial Valuation</div><div class="pa-card-sub">India</div></div></a></div></div>
        </div>
    </div>
</section>

<!-- CONTENT FRESHNESS FOOTER -->
<section class="content-section" style="padding:32px;">
    <div class="content-container">
        <div class="text-content" style="font-size:13px;color:var(--text-muted);">
            <p><strong>Content Created:</strong> 12 March 2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> <span id="lastUpdatedFooter">12 March 2026</span> &nbsp;|&nbsp; <strong>Next Review:</strong> 12 April 2027 &nbsp;|&nbsp; <strong>Reviewed By:</strong> CA &amp; CS Team, Patron Accounting LLP</p>
            <p>This page is reviewed annually or when ESI ceiling, EPF rates, or Labour Codes are updated by the Government of India. All statutory rates and thresholds verified against EPFO, ESIC, and Income Tax Act provisions.</p>
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

s

<!-- External JS Dependencies (loaded by master layout in production) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
